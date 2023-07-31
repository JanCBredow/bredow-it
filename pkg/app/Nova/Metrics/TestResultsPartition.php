<?php

namespace App\Nova\Metrics;

use App\Models\CovidTest;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

class TestResultsPartition extends Partition
{
    public $name = "Testergebnis-Verteilung";

    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        return $this->count($request, CovidTest::class, 'state')->colors([
            'POSITIVE' => 'red',
            'NEGATIVE' => 'green',
            'INCONCLUDENT' => 'black',
            'UNKNOWN' => 'lightgrey'
        ])->label(function ($value) {
            switch ($value) {
                case 'POSITIVE': return 'Positiv';
                case 'NEGATIVE': return 'Negativ';
                case 'UNKNOWN': return 'Ergebnis offen';
                case 'INCONCLUDENT': return 'Fehlerhaft';
            }
        });
    }

    /**
     * Determine for how many minutes the metric should be cached.
     *
     * @return  \DateTimeInterface|\DateInterval|float|int
     */
    public function cacheFor()
    {
        // return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'test-results-partition';
    }
}
