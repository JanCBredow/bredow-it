<?php

namespace App\Observers;

use App\Models\CheckIn;

class CheckInObserver
{
    /**
     * Handle the CheckIn "created" event.
     *
     * @param  \App\Models\CheckIn  $checkIn
     * @return void
     */
    public function created(CheckIn $checkIn)
    {
        $checkIn->createCovidTest();
    }

    /**
     * Handle the CheckIn "updated" event.
     *
     * @param  \App\Models\CheckIn  $checkIn
     * @return void
     */
    public function updated(CheckIn $checkIn)
    {
        //
    }

    /**
     * Handle the CheckIn "deleted" event.
     *
     * @param  \App\Models\CheckIn  $checkIn
     * @return void
     */
    public function deleted(CheckIn $checkIn)
    {
        //
    }

    /**
     * Handle the CheckIn "restored" event.
     *
     * @param  \App\Models\CheckIn  $checkIn
     * @return void
     */
    public function restored(CheckIn $checkIn)
    {
        //
    }

    /**
     * Handle the CheckIn "force deleted" event.
     *
     * @param  \App\Models\CheckIn  $checkIn
     * @return void
     */
    public function forceDeleted(CheckIn $checkIn)
    {
        //
    }
}
