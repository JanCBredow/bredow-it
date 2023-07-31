<?php

## need edit
namespace App\Console\Commands;

use App\Models\TestCenter;
use App\Models\TestCenterOpeningHour;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SeedTestcenterOpeningHours extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seedopenings:testcenter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $days = [
            'MONDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('21:00')
            ],
            'TUESDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('21:00')
            ],
            'WEDNESDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('21:00')
            ],
            'THURSDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('21:00')
            ],
            'FRIDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('21:00')
            ],
            'SATURDAY' => [
                'start' => Carbon::parse('09:00'),
                'end' => Carbon::parse('20:00')
            ],
            'SUNDAY' => [
                'start' => Carbon::parse('09:00'),
                'end' => Carbon::parse('20:00')
            ]
        ];

        $testCenter = TestCenter::first();

        foreach ($days as $key => $day) {
            $i = 0;
            while ($day['start']->copy()->addMinutes(($i+1) * 10) <= $day['end']) {
                $opening = TestCenterOpeningHour::make([
                    "day" => $key,
                    "capacity" => 10,
                    "start" => $day['start']->copy()->addMinutes(10 * $i)->toTimeString(),
                    "end" => $day['start']->copy()->addMinutes(10 * ($i + 1))->toTimeString()
                ]);
                $opening->testCenter()->associate($testCenter);
                $opening->save();
                $i++;
            }
        }
    }
}
