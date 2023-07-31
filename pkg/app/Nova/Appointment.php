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

class Appointment extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Appointment::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * @return string
     */
    public function title(): string
    {
        return $this->date->format('d.m.Y H:i');
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    public static $displayInNavigation = false;

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
            BelongsTo::make('TestCenter')->sortable()->withoutTrashed()->withMeta([
                'belongsToId' => \App\Models\TestCenter::firstOrFail()->id
            ]),
            HasOne::make('Booking'),
            DateTime::make('date')
                ->required()
                ->default(function () {
                    return Carbon::now();
                })
                ->firstDayOfWeek(1)
                ->format('DD.MM.YYYY HH:mm')
                ->pickerDisplayFormat('d.m.Y H:i'),
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
                ->pickerDisplayFormat('d.m.Y H:i'),
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
