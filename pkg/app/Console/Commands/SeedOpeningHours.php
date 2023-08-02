<?php

## need edit
namespace App\Console\Commands;

use App\Models\TestCenter;
use App\Models\TestCenterOpeningHour;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SeedOpeningHours extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'opening:seed';

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
        $days_early = [
            'MONDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('12:00')
            ],
            'TUESDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('12:00')
            ],
            'WEDNESDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('12:00')
            ],
            'THURSDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('12:00')
            ],
            'FRIDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('12:00')
            ],
            'SATURDAY' => [
                'start' => Carbon::parse('10:00'),
                'end' => Carbon::parse('12:00')
            ]
        ];
        $days_evening = [
            'MONDAY' => [
                'start' => Carbon::parse('13:00'),
                'end' => Carbon::parse('16:30')
            ],
            'TUESDAY' => [
                'start' => Carbon::parse('13:00'),
                'end' => Carbon::parse('16:30')
            ],
            'WEDNESDAY' => [
                'start' => Carbon::parse('13:00'),
                'end' => Carbon::parse('16:30')
            ],
            'THURSDAY' => [
                'start' => Carbon::parse('13:00'),
                'end' => Carbon::parse('16:30')
            ],
            'FRIDAY' => [
                'start' => Carbon::parse('13:00'),
                'end' => Carbon::parse('16:30')
            ],
            'SATURDAY' => [
                'start' => Carbon::parse('15:00'),
                'end' => Carbon::parse('16:00')
            ]
        ];

        $testCenter = TestCenter::first();

        foreach ($days_evening as $key => $day) {
            $i = 0;
            while ($day['start']->copy()->addMinutes(($i+1) * 30) <= $day['end']) {
                $opening = TestCenterOpeningHour::make([
                    "day" => $key,
                    "capacity" => 1,
                    "start" => $day['start']->copy()->addMinutes(30 * $i)->toTimeString(),
                    "end" => $day['start']->copy()->addMinutes(30 * ($i + 1))->toTimeString()
                ]);
                $opening->testCenter()->associate($testCenter);
                $opening->save();
                $i++;
            }
        }
    }
}