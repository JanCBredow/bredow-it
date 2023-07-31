<?php

namespace App\Models;

use App\Mail\BookingConfirmation;
use App\Observers\BookingObserver;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

/**
 * App\Models\Booking
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newQuery()
 * @method static \Illuminate\Database\Query\Builder|Booking onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking query()
 * @method static \Illuminate\Database\Query\Builder|Booking withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Booking withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property int $appointment_id
 * @property int $user_id
 * @property int $service_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereAppointmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereUserId($value)
 * @property-read \App\Models\Appointment|null $appointment
 * @property-read \App\Models\Service|null $service
 * @property-read \App\Models\User|null $user
 * @property-read \App\Models\Patient|null $attendees
 * @property-read \App\Models\Patient|null $attendee
 * @property-read \App\Models\CovidTest|null $covidTest
 * @property string|null $qr_code
 * @property string|null $qr_code_id
 * @property-read \App\Models\CheckIn|null $checkIn
 * @property-read \App\Models\Patient|null $patient
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereQrCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereQrCodeId($value)
 * @property int $booking_attendee_id
 * @property-read \App\Models\Patient $bookingAttendee
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereBookingAttendeeId($value)
 * @property int $patient_id
 * @method static \Illuminate\Database\Eloquent\Builder|Booking wherePatientId($value)
 */
class Booking extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function notify() {
        Mail::to($this->patient->email)->send(new BookingConfirmation($this));
    }

    protected static function boot()
    {
        parent::boot();
        self::observe(new BookingObserver());
    }

    public function createQrCode(): string
    {
        $uniqueId = Str::uuid()->toString();
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new SvgImageBackEnd()
        );
        $writer = new Writer($renderer);
        $this->qr_code = $writer->writeString(request()->root() . '/qr/' . $uniqueId);
        $this->qr_code_id = $uniqueId;
        $this->save();
        return $this->qr_code;
    }

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function checkIn() : HasOne
    {
        return $this->hasOne(CheckIn::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
