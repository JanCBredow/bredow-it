<?php

namespace App\Nova\Actions;

use App\Models\CovidTest;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

class PrintTestCertificate extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = "Testzertifikat drucken";

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
         * @var $model CovidTest
         */
        foreach ($models as $model) {
            $testCertificate = $model->testCertificate;
            if (!$testCertificate) {
                return Action::danger(__("Dieser Test ist noch nicht abgeschlossen"));
            }
            return Action::download(asset("storage/$testCertificate->path"), "Testzertifikat.pdf");
        }
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
