<?php

namespace App\Console\Commands;

use App\Lottery;
use App\OpenTime;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class BuildOpenTimeTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lottery:buildOpenTimeTable';

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
     * @return mixed
     */
    public function handle()
    {
        $lotterys = Lottery::all();
        foreach ($lotterys as $lottery){
            $this -> build($lottery);
        }
    }

    private function build($lottery){
        $client = new Client();
        $response = $client -> request('GET','http://develop.endaosi.com/test',['query' => [
            'name' => $lottery -> name,
            'date' => '2016-06-06',
        ]]);
        $day_times = json_decode($response -> getBody() ->getContents(),true);
        foreach ($day_times as $time){
            $open_time = new Carbon($time['open_time']);
            $time_model = OpenTime::create(['open_time' => $open_time -> format('H:i:s')]);
            $lottery -> openTimes() -> save($time_model);
            dump($lottery -> name, $time_model -> open_time);
        }
    }
}
