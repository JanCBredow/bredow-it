<?php

namespace App\Nova;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class TestCenter extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\TestCenter::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name'
    ];

    public static $group = 'Einstellungen';

    public static function label()
    {
        return __('Testzentren');
    }

    public static function singularLabel()
    {
        return __('Testzentrum');
    }

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
            Text::make(__('Name'), 'name'),
            HasMany::make('TestCenterOpeningHours'),
            HasMany::make('Services'),
            BelongsTo::make('Location')->showCreateRelationButton(),
            DateTime::make(__('Erstellt'), 'created_at')
                ->sortable()
                ->required()
                ->default(function () {
                    return Carbon::now();
                })
                ->firstDayOfWeek(1)
                ->format('DD.MM.YYYY hh:mm')
                ->pickerDisplayFormat('DD.MM.YYYY hh:mm'),
            DateTime::make(__('Zuletzt geändert'), 'updated_at')
                ->sortable()
                ->required()
                ->default(function () {
                    return Carbon::now();
                })
                ->firstDayOfWeek(1)
                ->format('DD.MM.YYYY hh:mm')
                ->pickerDisplayFormat('DD.MM.YYYY hh:mm'),
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
