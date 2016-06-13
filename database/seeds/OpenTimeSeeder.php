<?php

use Illuminate\Database\Seeder;

class OpenTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $open_times = [
            ['period_number' => 1,  'open_time' => '00:05:00'],
            ['period_number' => 2,  'open_time' => '00:10:00'],
            ['period_number' => 3,  'open_time' => '00:15:00'],
            ['period_number' => 4,  'open_time' => '00:20:00'],
            ['period_number' => 5,  'open_time' => '00:25:00'],
            ['period_number' => 6,  'open_time' => '00:30:00'],
            ['period_number' => 7,  'open_time' => '00:35:00'],
            ['period_number' => 8,  'open_time' => '00:40:00'],
            ['period_number' => 9,  'open_time' => '00:45:00'],
            ['period_number' => 10, 'open_time' => '00:50:00'],
            ['period_number' => 11, 'open_time' => '00:55:00'],
            ['period_number' => 12, 'open_time' => '01:00:00'],
            ['period_number' => 13, 'open_time' => '01:05:00'],
            ['period_number' => 14, 'open_time' => '01:10:00'],
            ['period_number' => 15, 'open_time' => '01:15:00'],
            ['period_number' => 16, 'open_time' => '01:20:00'],
            ['period_number' => 17, 'open_time' => '01:25:00'],
            ['period_number' => 18, 'open_time' => '01:30:00'],
            ['period_number' => 19, 'open_time' => '01:35:00'],
            ['period_number' => 20, 'open_time' => '01:40:00'],
            ['period_number' => 21, 'open_time' => '01:45:00'],
            ['period_number' => 22, 'open_time' => '01:50:00'],
            ['period_number' => 23, 'open_time' => '01:55:00'],
            ['period_number' => 24, 'open_time' => '02:00:00'],
            ['period_number' => 25, 'open_time' => '10:10:00'],
            ['period_number' => 26, 'open_time' => '10:20:00'],
            ['period_number' => 27, 'open_time' => '10:30:00'],
            ['period_number' => 28, 'open_time' => '10:40:00'],
            ['period_number' => 29, 'open_time' => '10:50:00'],
            ['period_number' => 30, 'open_time' => '11:00:00'],
            ['period_number' => 31, 'open_time' => '11:10:00'],
            ['period_number' => 32, 'open_time' => '11:20:00'],
            ['period_number' => 33, 'open_time' => '11:30:00'],
            ['period_number' => 34, 'open_time' => '11:40:00'],
            ['period_number' => 35, 'open_time' => '11:50:00'],
            ['period_number' => 36, 'open_time' => '12:00:00'],
            ['period_number' => 37, 'open_time' => '12:10:00'],
            ['period_number' => 38, 'open_time' => '12:20:00'],
            ['period_number' => 39, 'open_time' => '12:30:00'],
            ['period_number' => 40, 'open_time' => '12:40:00'],
            ['period_number' => 41, 'open_time' => '12:50:00'],
            ['period_number' => 42, 'open_time' => '13:00:00'],
            ['period_number' => 43, 'open_time' => '13:10:00'],
            ['period_number' => 44, 'open_time' => '13:20:00'],
            ['period_number' => 45, 'open_time' => '13:30:00'],
            ['period_number' => 46, 'open_time' => '13:40:00'],
            ['period_number' => 47, 'open_time' => '13:50:00'],
            ['period_number' => 48, 'open_time' => '14:00:00'],
            ['period_number' => 49, 'open_time' => '14:10:00'],
            ['period_number' => 50, 'open_time' => '14:20:00'],
            ['period_number' => 51, 'open_time' => '14:30:00'],
            ['period_number' => 52, 'open_time' => '14:40:00'],
            ['period_number' => 53, 'open_time' => '14:50:00'],
            ['period_number' => 54, 'open_time' => '15:00:00'],
            ['period_number' => 55, 'open_time' => '15:10:00'],
            ['period_number' => 56, 'open_time' => '15:20:00'],
            ['period_number' => 57, 'open_time' => '15:30:00'],
            ['period_number' => 58, 'open_time' => '15:40:00'],
            ['period_number' => 59, 'open_time' => '15:50:00'],
            ['period_number' => 60, 'open_time' => '16:00:00'],
            ['period_number' => 61, 'open_time' => '16:10:00'],
            ['period_number' => 62, 'open_time' => '16:20:00'],
            ['period_number' => 63, 'open_time' => '16:30:00'],
            ['period_number' => 64, 'open_time' => '16:40:00'],
            ['period_number' => 65, 'open_time' => '16:50:00'],
            ['period_number' => 66, 'open_time' => '17:00:00'],
            ['period_number' => 67, 'open_time' => '17:10:00'],
            ['period_number' => 68, 'open_time' => '17:20:00'],
            ['period_number' => 69, 'open_time' => '17:30:00'],
            ['period_number' => 70, 'open_time' => '17:40:00'],
            ['period_number' => 71, 'open_time' => '17:50:00'],
            ['period_number' => 72, 'open_time' => '18:00:00'],
            ['period_number' => 73, 'open_time' => '18:10:00'],
            ['period_number' => 74, 'open_time' => '18:20:00'],
            ['period_number' => 75, 'open_time' => '18:30:00'],
            ['period_number' => 76, 'open_time' => '18:40:00'],
            ['period_number' => 77, 'open_time' => '18:50:00'],
            ['period_number' => 78, 'open_time' => '19:00:00'],
            ['period_number' => 79, 'open_time' => '19:10:00'],
            ['period_number' => 80, 'open_time' => '19:20:00'],
            ['period_number' => 81, 'open_time' => '19:30:00'],
            ['period_number' => 82, 'open_time' => '19:40:00'],
            ['period_number' => 83, 'open_time' => '19:50:00'],
            ['period_number' => 84, 'open_time' => '20:00:00'],
            ['period_number' => 85, 'open_time' => '20:10:00'],
            ['period_number' => 86, 'open_time' => '20:20:00'],
            ['period_number' => 87, 'open_time' => '20:30:00'],
            ['period_number' => 88, 'open_time' => '20:40:00'],
            ['period_number' => 89, 'open_time' => '20:50:00'],
            ['period_number' => 90, 'open_time' => '21:00:00'],
            ['period_number' => 91, 'open_time' => '21:10:00'],
            ['period_number' => 92, 'open_time' => '21:20:00'],
            ['period_number' => 93, 'open_time' => '21:30:00'],
            ['period_number' => 94, 'open_time' => '21:40:00'],
            ['period_number' => 95, 'open_time' => '21:50:00'],
            ['period_number' => 96, 'open_time' => '22:00:00'],
            ['period_number' => 97, 'open_time' => '22:05:00'],
            ['period_number' => 98, 'open_time' => '22:10:00'],
            ['period_number' => 99, 'open_time' => '22:15:00'],
            ['period_number' => 100, 'open_time' => '22:20:00'],
            ['period_number' => 101, 'open_time' => '22:25:00'],
            ['period_number' => 102, 'open_time' => '22:30:00'],
            ['period_number' => 103, 'open_time' => '22:35:00'],
            ['period_number' => 104, 'open_time' => '22:40:00'],
            ['period_number' => 105, 'open_time' => '22:45:00'],
            ['period_number' => 106, 'open_time' => '22:50:00'],
            ['period_number' => 107, 'open_time' => '22:55:00'],
            ['period_number' => 108, 'open_time' => '23:00:00'],
            ['period_number' => 109, 'open_time' => '23:05:00'],
            ['period_number' => 110, 'open_time' => '23:10:00'],
            ['period_number' => 111, 'open_time' => '23:15:00'],
            ['period_number' => 112, 'open_time' => '23:20:00'],
            ['period_number' => 113, 'open_time' => '23:25:00'],
            ['period_number' => 114, 'open_time' => '23:30:00'],
            ['period_number' => 115, 'open_time' => '23:35:00'],
            ['period_number' => 116, 'open_time' => '23:40:00'],
            ['period_number' => 117, 'open_time' => '23:45:00'],
            ['period_number' => 118, 'open_time' => '23:50:00'],
            ['period_number' => 119, 'open_time' => '23:55:00'],
            ['period_number' => 120, 'open_time' => '00:00:00'],
        ];
        $lotterys = \App\Lottery::all();
        foreach ($lotterys as $lottery){
            foreach ($open_times as $open_time){
                $lottery->openTimes() -> save(\App\OpenTime::create($open_time));
            }
        }
    }
}
