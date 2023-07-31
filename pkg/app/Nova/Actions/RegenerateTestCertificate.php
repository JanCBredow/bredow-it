<?php

namespace App\Nova\Actions;

use App\Models\CovidTest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Boolean;

class RegenerateTestCertificate extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = 'Testzertifikat neu ausstellen';

    /**
     * Perform the action on the given models.
     *
     * @param \Laravel\Nova\Fields\ActionFields $fields
     * @param \Illuminate\Support\Collection $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        /**
         * @var $covidTest CovidTest
         */
        foreach ($models as $covidTest) {
            info($fields->toJson());
            $testCertificate = $covidTest->testCertificate;
            if (!$testCertificate) {
                return Action::danger('Für diesen Test existiert noch kein Testzertifikat.');
            }
            $testCertificate->delete();
            $testCertificate = $covidTest->findOrCreateTestCertificate();

            if ($fields->get('shouldSendEmail') == 'Ja') {
                info("Testzertifikat $testCertificate->id ausgestellt. Versende an Patienten.");
                $covidTest->sendTestResultEmail();
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
        return [
        ];
    }
}
