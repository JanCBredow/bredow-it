<?php

namespace App\Nova\Filters;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\BooleanFilter;

class RelevantBookings extends BooleanFilter
{
    /**
     * Apply the filter to the given query.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function apply(Request $request, $query, $value)
    {
        if ($value['current']) {
            return $query->join('appointments', 'appointment_id', 'appointments.id')
                ->whereBetween('appointments.date', [
                    Carbon::now()->subHour()->toDateTimeString(),
                    Carbon::now()->addHour()->toDateTimeString()
                ]);
        }
        return $query;
    }

    /**
     * Get the filter's available options.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function options(Request $request)
    {
        return [
            'Aktuelle Buchungen' => 'current'
        ];
    }
}
