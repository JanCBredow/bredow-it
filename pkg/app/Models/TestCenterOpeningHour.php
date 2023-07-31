<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

/**
 * App\Models\TestCenterOpeningHour
 *
 * @property int $id
 * @property int $test_center_id
 * @property string $day
 * @property int $capacity
 * @property string $start
 * @property string $end
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TestCenter $testCenter
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenterOpeningHour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenterOpeningHour newQuery()
 * @method static \Illuminate\Database\Query\Builder|TestCenterOpeningHour onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenterOpeningHour query()
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenterOpeningHour whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenterOpeningHour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenterOpeningHour whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenterOpeningHour whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenterOpeningHour whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenterOpeningHour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenterOpeningHour whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenterOpeningHour whereTestCenterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenterOpeningHour whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|TestCenterOpeningHour withTrashed()
 * @method static \Illuminate\Database\Query\Builder|TestCenterOpeningHour withoutTrashed()
 * @mixin \Eloquent
 */
class TestCenterOpeningHour extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'day',
        'start',
        'end',
        'capacity'
    ];

    public function freeDatesCount($date, $start, $end): int
    {
        $bookingCount = Db::table('bookings')
            ->join('appointments', 'bookings.appointment_id', '=', 'appointments.id')
            ->whereBetween('appointments.date', [
               Carbon::parse( "$date $start"),
               Carbon::parse( "$date $end")
            ])->select()->count();

        return $this->capacity - $bookingCount;
    }

    public function hasFreeDates(): bool
    {
        return true;
    }

    public function testCenter(): BelongsTo
    {
        return $this->belongsTo(TestCenter::class);
    }
}
