<?php

namespace App\Nova\Actions;

use App\Models\CovidTest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

class ResendResultMail extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = "Testergebnis erneut senden";

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
         * @var $covidTest CovidTest
         */
        foreach ($models as $covidTest) {
            if (!$covidTest->isFinished()) {
                return Action::danger('Dieser Test ist noch nicht abgeschlossen');
            }
            $covidTest->sendTestResultEmail();
            $this->markAsFinished($covidTest);
        }

        return Action::message('Email wird versandt.');
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }
}
