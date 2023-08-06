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
    protected $signature = 'openings:seed';

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
     * @noinspection DuplicatedCode
     */
    public function handle()
    {

        info('starting seeding opening hours.. \r\n');

        $days_morning = [
            'MONDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('11:30')
            ],
            'TUESDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('11:30')
            ],
            'WEDNESDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('11:30')
            ],
            'THURSDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('11:30')
            ],
            'FRIDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('11:30')
            ],
            'SATURDAY' => [
                'start' => Carbon::parse('08:00'),
                'end' => Carbon::parse('11:30')
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
                'start' => Carbon::parse('13:00'),
                'end' => Carbon::parse('16:30')
            ]
        ];

        $testCenter = TestCenter::first();


        info('saving morning openings... \r\n');

        foreach ($days_morning as $key => $day) {
            $i = 0;
            while (
                $day['start']->copy()->addMinutes(($i+1) * 30)
                <=
                $day['end']) {
                $opening = TestCenterOpeningHour::make([
                    "day" => $key,
                    "capacity" => 1,
                    "start" => $day['start']->copy()->addMinutes(30 * $i)->toTimeString(),
                    "end" => $day['start']->copy()->addMinutes(30 * ($i + 1))->toTimeString()
                ]);

                $opening->testCenter()->associate($testCenter);
                $opening->save();
                $i++;
                info('saving another opening \r\n');
            }
            info('saving another day \r\n');
        }

        foreach ($days_evening as $key => $day) {
            $i = 0;
            while (
                $day['start']->copy()->addMinutes(($i+1) * 30)
                <=
                $day['end']) {
                $opening = TestCenterOpeningHour::make([
                    "day" => $key,
                    "capacity" => 1,
                    "start" => $day['start']->copy()->addMinutes(30 * $i)->toTimeString(),
                    "end" => $day['start']->copy()->addMinutes(30 * ($i + 1))->toTimeString()
                ]);

                $opening->testCenter()->associate($testCenter);
                $opening->save();
                $i++;
                info('saving another opening \r\n');
            }

        }

    }
}
