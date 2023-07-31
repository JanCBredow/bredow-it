<?php

namespace App\Mail;

use App\Models\CovidTest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CovidTestResultUpdate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var CovidTest
     */
    private $covidTest;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(CovidTest $covidTest)
    {
        $this->covidTest = $covidTest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $testCertificate = $this->covidTest->findOrCreateTestCertificate();
        return $this->view('mail.booking-result', [
            'covidTest' => $this->covidTest,
            'testCertificate' => $testCertificate
        ]);
    }
}
