<?php

namespace App\Observers;

use App\Models\TestCertificate;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TestCertificateObserver
{
    /**
     * Handle the TestCertificate "created" event.
     *
     * @param  \App\Models\TestCertificate  $testCertificate
     * @return void
     */
    public function created(TestCertificate $testCertificate)
    {
        $view = Pdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('print.certificate', [
            'covidTest' => $testCertificate->covidTest
        ]);
        $view->setPaper('A4');
        $random = Str::uuid();
        Storage::put("public/certificates/{$random}.pdf", $view->output([
            'isRemoteEnabled', true
        ]));
        $testCertificate->uuid = $random;
        $testCertificate->storage = 'local';
        $testCertificate->path = "certificates/{$random}.pdf";
        $testCertificate->save();
    }

    /**
     * Handle the TestCertificate "updated" event.
     *
     * @param  \App\Models\TestCertificate  $testCertificate
     * @return void
     */
    public function updated(TestCertificate $testCertificate)
    {
        //
    }

    /**
     * Handle the TestCertificate "deleted" event.
     *
     * @param  \App\Models\TestCertificate  $testCertificate
     * @return void
     */
    public function deleted(TestCertificate $testCertificate)
    {
        //
    }

    /**
     * Handle the TestCertificate "restored" event.
     *
     * @param  \App\Models\TestCertificate  $testCertificate
     * @return void
     */
    public function restored(TestCertificate $testCertificate)
    {
        //
    }

    /**
     * Handle the TestCertificate "force deleted" event.
     *
     * @param  \App\Models\TestCertificate  $testCertificate
     * @return void
     */
    public function forceDeleted(TestCertificate $testCertificate)
    {
        //
    }
}
