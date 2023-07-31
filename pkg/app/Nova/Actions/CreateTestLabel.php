<?php

namespace App\Nova\Actions;

use App\Models\CovidTest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Text;
use View;

class CreateTestLabel extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = "Testlabel erstellen";

    /**
     * Perform the action on the given models.
     *
     * @param ActionFields $fields
     * @param Collection $models
     * @return array|string[]|void
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        /**
         * @var $covidTest CovidTest
         */
        foreach ($models as $covidTest) {
            $sampleId = $fields->get('sample_id');
            Storage::put("public/labels/$sampleId", $this->printLabel($covidTest, $sampleId));
            return Action::download(asset("storage/labels/$sampleId"), 'label.html');
        }
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Text::make(__("Sample ID"), 'sample_id')->required()->rules(['required'])
        ];
    }

    private function printLabel(CovidTest $covidTest, $sampleId): string
    {
        $patient = $covidTest->patient;

        return View::make('print.label', [
           "firstName" => $patient->name,
           "lastName" => $patient->surename,
           "birthday" => $patient->birthday,
           "sampleId" => $sampleId
        ])->render();
    }
}
