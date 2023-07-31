<?php

namespace App\Nova\Metrics;

use App\Models\CovidTest;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Trend;
use Laravel\Nova\Metrics\TrendResult;
use Laravel\Nova\Metrics\Value;

class WaitingTimePerTest extends Trend
{
    public $name = 'Durchschnittliche Wartezeit auf Ergebnis pro Test';

    /**
     * Calculate the value of the metric.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        $covidTests = CovidTest::join('test_certificates', 'covid_tests.id', 'test_certificates.covid_test_id');
        return $this->averageByDays(
            $request,
            $covidTests,
            new Expression("TIME_TO_SEC(TIMEDIFF(test_certificates.created_at, covid_tests.created_at)) / 60")
        )->suffix('Minuten')->withoutSuffixInflection();
    }

    /**
     * Get the ranges available for the metric.
     *
     * @return array
     */
    public function ranges()
    {
        return [
            7 => __('1 Woche'),
            30 => __('1 Monat'),
            60 => __('2 Monate'),
            365 => __('1 Jahr')
        ];
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
        return 'waiting-time-per-test';
    }
}
