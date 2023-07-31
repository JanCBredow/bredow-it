<?php

namespace App\Observers;

use App\Mail\CovidTestResultUpdate;
use App\Models\CovidTest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class CovidTestResultObserver
{
    /**
     * Handle the CovidTest "created" event.
     *
     * @param  \App\Models\CovidTest  $covidTest
     * @return void
     */
    public function created(CovidTest $covidTest)
    {
        if ($covidTest->cwa !== 'none') {
            $covidTest->createCwaProfile();
        }
    }

    /**
     * Handle the CovidTest "updated" event.
     *
     * @param  \App\Models\CovidTest  $covidTest
     * @return void
     */
    public function updated(CovidTest $covidTest)
    {
        info("Das Ergebnis des Tests $covidTest->id hat sich geändert: $covidTest->state");
        if ($covidTest->cwa !== 'none') {
            $covidTest->createCwaQrCode();
            $covidTest->submitResultToCwa();
        }
        $covidTest->sendTestResultEmail();
    }

    /**
     * Handle the CovidTest "deleted" event.
     *
     * @param  \App\Models\CovidTest  $covidTest
     * @return void
     */
    public function deleted(CovidTest $covidTest)
    {
        //
    }

    /**
     * Handle the CovidTest "restored" event.
     *
     * @param  \App\Models\CovidTest  $covidTest
     * @return void
     */
    public function restored(CovidTest $covidTest)
    {
        //
    }

    /**
     * Handle the CovidTest "force deleted" event.
     *
     * @param  \App\Models\CovidTest  $covidTest
     * @return void
     */
    public function forceDeleted(CovidTest $covidTest)
    {
        //
    }

}
