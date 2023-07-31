<?php

namespace App\Nova;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class CheckIn extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\CheckIn::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    public static $group = 'Testzentrumsbetrieb';

    public static $displayInNavigation = false;

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make(__('Name'), function (\App\Models\CheckIn $checkIn) {
                if (!$checkIn->booking) {
                    return "-";
                }
                return $checkIn->booking->patient->fullName();
            }),
            DateTime::make(__('Termin'), function (\App\Models\CheckIn $checkIn) {
                if (!$checkIn->booking) {
                    return "-";
                }
                return $checkIn->booking->appointment->date;
            }),
            Text::make('notes')->nullable(),
            BelongsTo::make('Booking'),
            DateTime::make(__('Erstellt'), 'created_at')
                ->sortable()
                ->required()
                ->default(function () {
                    return Carbon::now();
                })
                ->firstDayOfWeek(1)
                ->format('DD.MM.YYYY HH:mm')
                ->pickerDisplayFormat('d.m.Y H:i'),
            DateTime::make(__('Zuletzt geändert'), 'updated_at')
                ->sortable()
                ->required()
                ->default(function () {
                    return Carbon::now();
                })
                ->firstDayOfWeek(1)
                ->format('DD.MM.YYYY HH:mm')
                ->pickerDisplayFormat('d.m.Y H:i')
                ->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
