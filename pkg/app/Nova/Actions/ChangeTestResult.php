<?php

namespace App\Nova\Actions;

use App\Models\CovidTest;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Select;

class ChangeTestResult extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = 'Ergebnis setzen';

    /**
     * Perform the action on the given models.
     *
     * @param ActionFields $fields
     * @param Collection $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        /**
         * @var $test CovidTest
         */
        foreach ($models as $test) {
            if ($test->testCertificate) {
                $test->testCertificate->delete();
            }
            $test->state = $fields->get('status');
            $test->save();
        }
        return Action::message("Changed test result to {$fields->get('status')}");
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Select::make('Status')->options([
                'UNKNOWN' => 'Unbekannt',
                'POSITIVE' => 'Positiv',
                'NEGATIVE' => 'Negativ',
                'INCONCLUDENT' => 'Fehlerhaft'
            ])->default(function ($request) {
                return 'UNKNOWN';
            })
        ];
    }
}
