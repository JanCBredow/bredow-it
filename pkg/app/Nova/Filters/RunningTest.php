<?php

namespace App\Nova\Filters;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Filters\Filter;

class RunningTest extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    public $name = "Teststatus";

    public function default()
    {
        return true;
    }

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
        if ($value == 'all') {
            return $query;
        }
        return $query->where('state', $value);
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
                'Unbekannt' => 'UNKNOWN',
                'Positiv' => 'POSITIVE',
                'Negativ' => 'NEGATIVE',
                'Fehlerhaft' => 'INCONCLUDENT',
                'Alle' => 'all'
        ];
    }
}
