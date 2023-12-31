<?php

namespace App\Nova\Actions;

use App\Models\Booking;
use App\Models\CheckIn;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Text;

class CheckInBooking extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = 'CheckIn';



    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        /**
         * @var $booking Booking
         */
        foreach ($models as $booking) {
            $checkIn = CheckIn::make();
            $checkIn->booking()->associate($booking);
            $checkIn->notes = $fields->get('notes');
            $checkIn->save();
        }
        return Action::message('Patient erfolgreich eingecheckt.');
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make(__('Notizen'), 'notes')
        ];
    }
}
