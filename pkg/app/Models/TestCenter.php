<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\TestCenter
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenter newQuery()
 * @method static \Illuminate\Database\Query\Builder|TestCenter onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenter query()
 * @method static \Illuminate\Database\Query\Builder|TestCenter withTrashed()
 * @method static \Illuminate\Database\Query\Builder|TestCenter withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $location_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenter whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenter whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenter whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCenter whereUpdatedAt($value)
 * @property-read \App\Models\Location|null $location
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TestCenterOpeningHour[] $testCenterOpeningHours
 * @property-read int|null $test_center_opening_hours_count
 */
class TestCenter extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function calculateFreeDates($date) {
        return $this->testCenterOpeningHours
            ->filter(function ($value) use ($date) {
                return str_starts_with($value->day, strtoupper(Carbon::parse($date)->isoFormat('dd')));
            })->filter(function ($openingHour) use ($date) {
                return $openingHour->freeDatesCount($date, $openingHour->start, $openingHour->end) > 0;
            })->filter(function ($openingHour) use ($date) {
                return Carbon::now()->addMinutes(5)->isBefore(Carbon::parse("$date $openingHour->start"));
            });
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function testCenterOpeningHours() : HasMany {
        return $this->hasMany(TestCenterOpeningHour::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
