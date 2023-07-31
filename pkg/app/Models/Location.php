<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Location
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location newQuery()
 * @method static \Illuminate\Database\Query\Builder|Location onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Location query()
 * @method static \Illuminate\Database\Query\Builder|Location withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Location withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string $address
 * @property string $zip
 * @property string $city
 * @property string $country
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereZip($value)
 * @property-read \App\Models\TestCenter|null $testCenter
 */
class Location extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function testCenter() : HasOne
    {
        return $this->hasOne(TestCenter::class);
    }
}
