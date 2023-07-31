<?php

namespace App\Models;

use App\Observers\TestCertificateObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\TestCertificate
 *
 * @property int $id
 * @property int $covid_test_id
 * @property string $uuid
 * @property string $storage
 * @property string $path
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CovidTest $covidTest
 * @method static \Illuminate\Database\Eloquent\Builder|TestCertificate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestCertificate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestCertificate query()
 * @method static \Illuminate\Database\Eloquent\Builder|TestCertificate whereCovidTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCertificate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCertificate whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCertificate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCertificate wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCertificate whereStorage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCertificate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestCertificate whereUuid($value)
 * @mixin \Eloquent
 */
class TestCertificate extends Model
{
    use HasFactory, SoftDeletes;

    protected static function boot()
    {
        parent::boot();
        self::observe(new TestCertificateObserver());
    }

    protected $fillable = [
        'path',
        'uuid',
        'storage'
    ];

    public function covidTest(): BelongsTo
    {
        return $this->belongsTo(CovidTest::class);
    }
}
