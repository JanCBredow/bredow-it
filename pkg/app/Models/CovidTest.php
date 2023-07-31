<?php

namespace App\Models;

use App\Mail\CovidTestResultUpdate;
use App\Observers\CovidTestResultObserver;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

/**
 * App\Models\CovidTest
 *
 * @property-read \App\Models\Booking $booking
 * @method static \Illuminate\Database\Eloquent\Builder|CovidTest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CovidTest newQuery()
 * @method static \Illuminate\Database\Query\Builder|CovidTest onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CovidTest query()
 * @method static \Illuminate\Database\Query\Builder|CovidTest withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CovidTest withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property int $booking_id
 * @property string $state
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CovidTest whereBookingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CovidTest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CovidTest whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CovidTest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CovidTest whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CovidTest whereUpdatedAt($value)
 * @property-read \App\Models\CheckIn|null $checkIn
 * @property-read \App\Models\Patient|null $patient
 * @property int $booking_attendee_id
 * @method static \Illuminate\Database\Eloquent\Builder|CovidTest whereBookingAttendeeId($value)
 * @property-read \App\Models\Appointment $appointment
 * @property-read \App\Models\Service $service
 * @property int $patient_id
 * @property int $service_id
 * @property int $appointment_id
 * @property-read \App\Models\TestCertificate|null $testCertificate
 * @method static \Illuminate\Database\Eloquent\Builder|CovidTest whereAppointmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CovidTest wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CovidTest whereServiceId($value)
 */
class CovidTest extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'state'
    ];

    protected static function boot()
    {
        parent::boot();
        self::observe(CovidTestResultObserver::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }

    public function testCertificate(): HasOne
    {
        return $this->hasOne(TestCertificate::class);
    }

    public function friendlyName()
    {
        if ($this->state == 'POSITIVE') {
            return __('Positiv');
        }
        if ($this->state == 'UNKNOWN') {
            return __('Unbekannt');
        }
        if ($this->state == 'INCONCLUDENT') {
            return __('Fehlerhaft');
        }
        if ($this->state == 'NEGATIVE') {
            return __('Negativ');
        }
    }

    public function createTestCertificate(string $storage = 'local'): TestCertificate
    {
        $testCertificate = TestCertificate::make();
        $testCertificate->covidTest()->associate($this);
        $testCertificate->save();
        return $testCertificate;
    }

    public function sendTestResultEmail()
    {
        info("Sending test result update of test $this->id to {$this->patient->email}");
        Mail::to($this->patient->email)->send(new CovidTestResultUpdate($this));
    }

    public function isFinished(): bool
    {
        return $this->state == 'POSITIVE' || $this->state == 'NEGATIVE' || $this->state == 'INCONCLUDENT';
    }

    public function findOrCreateTestCertificate(): ?TestCertificate
    {
        return $this->testCertificate ?: $this->createTestCertificate();
    }

    public function createCwaProfile()
    {
        if ($this->cwa === 'full') {
            $this->createFullCwaProfile();
        } else if ($this->cwa === 'anon') {
            $this->createAnonymousTestProfile();
        }
    }

    private function createFullCwaProfile()
    {
        Log::info("Creating full CWA Profile for Covid Test #{$this->id}.");
        $timestamp = Carbon::now('UTC')->subMinutes(15)->timestamp;
        $salt = strtoupper( bin2hex( random_bytes(16) ) );
        $signature = "{$this->patient->birthday->toDateString()}#{$this->patient->name}#{$this->patient->surename}#$timestamp#$this->id#$salt";
        $cwaHash = hash('sha256', $signature);
        $json = json_encode([
            "fn" => $this->patient->name,
            "ln" => $this->patient->surename,
            "dob" => $this->patient->birthday->toDateString(),
            "timestamp" => $timestamp,
            "testid" => "$this->id",
            "salt" => $salt,
            "hash" => $cwaHash
        ]);
        $this->cwaProfile = $json;
        $this->cwaHash = $cwaHash;
        $this->cwaLink = "https://s.coronawarn.app?v=1#{$this->base64UrlEncode($json)}";
        $this->saveQuietly();
    }

    function base64UrlEncode($data): string
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    private function createAnonymousTestProfile()
    {
        Log::info("Creating anon CWA Profile for Covid Test #{$this->id}.");
        $timestamp = Carbon::now('UTC')->subMinutes(15)->timestamp;
        $salt = strtoupper( bin2hex( random_bytes(16) ) );
        $cwaHash = hash('sha256', "$timestamp#$salt");
        $json = json_encode([
            "timestamp" => $timestamp,
            "salt" => $salt,
            "hash" => $cwaHash
        ]);
        $this->cwaProfile = $json;
        $this->cwaHash = $cwaHash;
        $this->cwaLink = "https://s.coronawarn.app?v=1#{$this->base64UrlEncode($json)}";
        $this->saveQuietly();
    }

    public function createCwaQrCode()
    {
        $renderer = new ImageRenderer(
            new RendererStyle(200, 4),
            new SvgImageBackEnd()
        );
        $writer = new Writer($renderer);
        $this->cwaQrCode = $writer->writeString($this->cwaLink);
        $this->saveQuietly();
    }

    public function submitResultToCwa()
    {
        $payload = [
            'testResults' => [
                [
                    'id' => $this->cwaHash,
                    'result' => $this->state == 'POSITIVE' ? 7 : ($this->state == 'NEGATIVE' ? 6 : 8),
                    'sc' => Carbon::now('UTC')->subMinutes(15)->unix()
                ]
            ]
        ];

        Log::info("Updating test result of test $this->id in Corona Warn app using payload " . json_encode($payload));

        $response = $this->sendTestResult(
            sprintf("%s/api/v1/quicktest/results", config('cwa.url')),
            json_encode($payload),
            config('cwa.cert'),
            config('cwa.key'),
        );
        Log::info("Response!", [
            'response' => $response
        ]);
    }

    public function sendTestResult($url, $json, $certPath, $keyPath)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PORT, 443);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_SSLCERT, $certPath);
        //curl_setopt($ch, CURLOPT_SSLCERTPASSWD, $pass);
        curl_setopt($ch, CURLOPT_SSLKEY, $keyPath);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

        $response = curl_exec($ch);
        if (curl_errno($ch) > 0) {
            return array("curl_error_".curl_errno($ch) => curl_error($ch));
        }

        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);

        Log::info('Header: ' . $header);
        Log::info('Body: ' . $body);

        $info = curl_getinfo($ch);curl_close($ch);
        if ($info['http_code'] == 204) return TRUE;
        return $info;
    }

}
