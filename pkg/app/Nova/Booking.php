<?php

namespace App\Nova;

use App\Nova\Actions\CheckInBooking;
use App\Nova\Filters\BookingsTime;
use App\Nova\Filters\OpenBookings;
use App\Nova\Filters\RelevantBookings;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Pdmfc\NovaFields\ActionButton;
use Titasgailius\SearchRelations\SearchesRelations;

class Booking extends Resource
{
    use SearchesRelations;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Booking::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    public static $group = 'Testzentrumsbetrieb';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id'
    ];

    public static function label()
    {
        return __('Online-Termine');
    }

    public static function singularLabel()
    {
        return __('Online-Termin');
    }

    public static function createButtonLabel()
    {
        return __('Termin buchen');
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
            Boolean::make('Eingecheckt', function (\App\Models\Booking $booking) {
                return $booking->checkIn !== null;
            }),
            BelongsTo::make('User')->showCreateRelationButton()->hideFromIndex()->withMeta([
                'belongsToId' => $request->user()->id
            ]),
            BelongsTo::make('Patient')->showCreateRelationButton()->required(true),
            BelongsTo::make('Service')->showCreateRelationButton()->required(true),
            BelongsTo::make('Appointment')->showCreateRelationButton()->required(true),
            HasOne::make('CheckIn'),
            DateTime::make(__('Erstellt'), 'created_at')
                ->sortable()
                ->required()
                ->default(function () {
                    return Carbon::now();
                })
                ->firstDayOfWeek(1)
                ->format('DD.MM.YYYY HH:mm')
                ->pickerDisplayFormat('d.m.Y H:i')
                ->hideFromIndex(),
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
        return [
            //BookingsTime::make()
            //OpenBookings::make()
            RelevantBookings::make()
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [
            Lenses\OpenBookings::make()
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            CheckInBooking::make()
                ->showOnTableRow()
            ->cancelButtonText('Abbrechen')
            ->confirmButtonText('Einchecken')
        ];
    }
}
