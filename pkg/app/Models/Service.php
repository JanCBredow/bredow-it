<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Service
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Query\Builder|Service onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Query\Builder|Service withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Service withoutTrashed()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TestCenter[] $testCenters
 * @property-read int|null $test_centers_count
 * @property int|null $test_center_id
 * @property-read \App\Models\TestCenter|null $testCenter
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereTestCenterId($value)
 * @property int $perso_required
 * @method static \Illuminate\Database\Eloquent\Builder|Service wherePersoRequired($value)
 */
class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    public static function findByName($name)
    {
        return Service::where('name', $name)->limit(1);
    }

    public function testCenter(): BelongsTo
    {
        return $this->belongsTo(TestCenter::class);
    }

    public function formatPrice(): string
    {
        return number_format($this->price, 2);
    }

    public function isPaid(): bool
    {
        return $this->price > 0;
    }
}
