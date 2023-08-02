<?php

namespace App\Http\Livewire\Bookings;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Patient;
use App\Models\Service;
use App\Models\TestCenter;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Mollie;

class Create extends Component
{
    use PasswordValidationRules;

    /**
     * @var $testCenter TestCenter
     */
    public $testCenter;
    /**
     * @var $user User
     */
    public $user;
    public $serviceId;
    public $date;
    public $time;
    public $currentStep = 1;

    public $terms = false;

    public $password;
    public $passwordConfirm;

    public $sex;
    public $email;
    public $lname;
    public $fname;
    public $bday;
    public $phone;
    public $zip;
    public $city;
    public $street;
    public $housenr;
    public $persouuid;
    public $cwa;

    public $createAccount;

    public $booking;

    public function __construct($id = null)
    {
        parent::__construct($id);
    }

    public function mount(TestCenter $testCenter, User $user)
    {
        $this->testCenter = $testCenter;
        $this->date = Carbon::now()->toDateString();
        $this->sex = 'male';
        $this->user = $user;
    }

    public function submitServiceSelection()
    {
        $this->validate([
            'serviceId' => 'required'
        ]);
        $this->currentStep = 2;
    }

    public function submitDateTimeSelection()
    {
        $this->validate([
            'date' => 'required',
            'time' => 'required'
        ]);
        $this->currentStep = 3;
    }

    public function book()
    {
        $this->validate([
            'serviceId' => 'required',
            'date' => 'required',
            'time' => 'required',
            'email' => 'required|email',
            'sex' => 'required|in:male,female,diverse',
            'fname' => 'required',
            'lname' => 'required',
            'bday' => 'required|date',
            'phone' => 'required',
            'zip' => 'required',
            'city' => 'required',
            'street' => 'required',
            'housenr' => 'required',
            'terms' => 'required|accepted'
        ]);

        if ($this->createAccount) {
            $this->createUser();
        }

        $service = Service::find($this->serviceId)->first();
        $appointment = Appointment::createByDate(
            $this->testCenter,
            Carbon::parse(
                "$this->date $this->time"
            )
        );

        $patient = $this->createPatient();

        $booking = $this->createBooking(
            $this->user,
            $service,
            $appointment,
            $patient,
            $this->cwa
        );

        if ($service->isPaid()) {
            return $this->createPayment($booking);
        }

        if (\Auth::check()) {
            return redirect('/bookings/' . $booking->id);
        }

        $this->booking = $booking;
        $this->currentStep = 4;
    }

    private function createBooking(
        User        $user,
        Service     $service,
        Appointment $appointment,
        Patient     $patient
    )
    {
        $booking = Booking::make();
        $booking->user()->associate($user);
        $booking->service()->associate($service);
        $booking->appointment()->associate($appointment);
        $booking->patient()->associate($patient);
        $booking->save();
        return $booking;
    }

    public function render()
    {
        return view('livewire.bookings.create', [
                'testCenter' => $this->testCenter
            ]
        );
    }

    private function createUser()
    {
        $userData = $this->createUserData();
        $this->validateUserData($userData);
        $user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password']),
        ]);
        \Auth::login($user);
        $this->user = $user;
    }

    private function createUserData(): array
    {
        return [
            'name' => "$this->fname $this->lname",
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->passwordConfirm
        ];
    }

    private function validateUserData(array $userData)
    {
        Validator::make($userData, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules()
        ])->validate();
    }

    private function createPayment(Booking $booking)
    {
        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $booking->service->formatPrice()
            ],
            "description" => "Buchung $booking->id Kunde {$booking->patient->id} {$booking->patient->fullName()}",
            "redirectUrl" => route('bookings.show', [
                'booking' => $booking
            ]),
            "webhookUrl" => route('bookings.webhook'),
        ]);

        return redirect($payment->getCheckoutUrl(), 303);
    }

    private function createPatient()
    {
        return Patient::create([
            'email' => $this->email,
            'name' => $this->fname,
            'surename' => $this->lname,
            'plz' => $this->zip,
            'housenr' => $this->housenr,
            'street' => $this->street,
            'persouuid' => $this->persouuid,
            'phone' => $this->phone,
            'city' => $this->city,
            'birthday' => $this->bday,
            'gender' => $this->sex
        ]);
    }
}
