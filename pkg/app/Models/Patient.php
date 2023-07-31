<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\BookingAttendee
 *
 * @property int $id
 * @property int $booking_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Booking[] $booking
 * @property-read int|null $booking_count
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newQuery()
 * @method static \Illuminate\Database\Query\Builder|Patient onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient query()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereBookingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Patient withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Patient withoutTrashed()
 * @mixin \Eloquent
 * @property int $location_id
 * @property string $email
 * @property string $surename
 * @property string $street
 * @property string $plz
 * @property string $housenr
 * @property string $persouuid
 * @property string $phone
 * @property string $birthday
 * @property string $gender
 * @property string|null $name
 * @property-read \App\Models\Location $location
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereHousenr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePersouuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePlz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereSurename($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CovidTest[] $covidTests
 * @property-read int|null $covid_tests_count
 */
class Patient extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'birthday' => 'date'
    ];

    protected $fillable = [
        'email',
        'name',
        'surename',
        'plz',
        'housenr',
        'street',
        'persouuid',
        'phone',
        'birthday',
        'gender',
        'city'
    ];

    public function booking(): HasOne
    {
        return $this->hasOne(Booking::class);
    }

    public function covidTests(): HasMany
    {
        return $this->hasMany(CovidTest::class);
    }

    public function fullName(): string
    {
        return "$this->name $this->surename";
    }
}
