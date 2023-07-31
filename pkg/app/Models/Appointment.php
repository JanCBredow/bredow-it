<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Appointment
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newQuery()
 * @method static \Illuminate\Database\Query\Builder|Appointment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment query()
 * @method static \Illuminate\Database\Query\Builder|Appointment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Appointment withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $date
 * @property int $test_center_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereTestCenterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereUpdatedAt($value)
 * @property-read \App\Models\TestCenter|null $testCenter
 * @property-read \App\Models\Booking|null $booking
 */
class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'date'
    ];

    protected $casts = [
        'date' => 'datetime'
    ];

    public static function createByDate(TestCenter $testCenter, $date) : Appointment
    {
        $appointment = Appointment::make(["date" => $date]);
        $appointment->testCenter()->associate($testCenter);
        $appointment->save();
        return $appointment;
    }

    public function testCenter(): BelongsTo
    {
        return $this->belongsTo(TestCenter::class);
    }

    public function booking(): HasOne {
        return $this->hasOne(Booking::class);
    }
}
