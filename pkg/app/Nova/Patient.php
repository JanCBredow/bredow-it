<?php

namespace App\Nova;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Patient extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Patient::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    public static $group = "Stammdaten";

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'email',
        'name',
        'surename'
    ];

    public function title(): string
    {
        return $this->fullName();
    }

    public static function label()
    {
        return __('Patienten');
    }

    public static function singularLabel()
    {
        return __('Patient');
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
            HasOne::make('Booking'),
            HasMany::make('CovidTests'),
            Text::make(__('Email'), 'email')->required()->default('info@lisa.systems')->help("E-Mail des Kunden"),
            Text::make(__('Vorname'), 'name')->required(),
            Text::make(__('Nachname'), 'surename')->required(),
            Text::make(__('Straße'), 'street')->required(),
            Text::make(__('Hausnummer'), 'housenr')->required(),
            Text::make(__('Postleitzahl'), 'plz')->required()->default('65931'),
            Text::make(__('Stadt'), 'city')->required(),
            Text::make(__('Personummer'), 'persouuid')->help('Nur bei PCR Tests'),
            Date::make(__('Geburtstag'), 'birthday')
                ->sortable()
                ->required()
                ->default(function () {
                    return Carbon::now();
                })
                ->firstDayOfWeek(1)
                ->format('DD.MM.YYYY')
                ->pickerDisplayFormat('d.m.Y'),
            Select::make(__('Geschlecht'), 'gender')->options([
                'male' => 'Männlich',
                'female' => 'Weiblich',
                'diverse' => 'Divers'
            ])->required(),
            Text::make(__('Telefon'), 'phone')->required(),
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
