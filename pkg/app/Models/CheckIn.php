<?php

namespace App\Models;

use App\Observers\CheckInObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\CheckIn
 *
 * @property int $id
 * @property int $booking_id
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Booking $booking
 * @property-read \App\Models\CovidTest|null $covidTest
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn newQuery()
 * @method static \Illuminate\Database\Query\Builder|CheckIn onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn query()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereBookingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CheckIn withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CheckIn withoutTrashed()
 * @mixin \Eloquent
 */
class CheckIn extends Model
{
    use HasFactory, SoftDeletes;

    protected static function boot()
    {
        parent::boot();
        self::observe(new CheckInObserver());
    }

    public function covidTest(): HasOne
    {
        return $this->hasOne(CovidTest::class);
    }

    public function booking() : BelongsTo {
        return $this->belongsTo(Booking::class);
    }

    public function createCovidTest()
    {
        $covidTest = CovidTest::make([
            'state' => 'UNKNOWN'
        ]);
        $covidTest->cwa = $this->booking->cwa;
        $covidTest->patient()->associate($this->booking->patient);
        $covidTest->service()->associate($this->booking->service);
        $covidTest->appointment()->associate($this->booking->appointment);
        $covidTest->save();
    }
}
