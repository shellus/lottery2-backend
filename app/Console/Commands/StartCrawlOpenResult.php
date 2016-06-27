<?php

namespace App\Console\Commands;

use App\Jobs\CrawlOpenResultByOpenTime;
use App\Lottery;
use App\OpenTime;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;

class StartCrawlOpenResult extends Command
{
    use DispatchesJobs;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:start';

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
        //DispatchesJobs
        foreach (Lottery::all() as $lottery){
            /** @var OpenTime $open_time */
            $open_time = $lottery -> getNextPeriod();

            $now_time_carbon = new Carbon(date('Y-m-d H:i:s'));
            $open_time_carbon = new Carbon($open_time -> open_time);
            $sleep = $now_time_carbon -> diffInSeconds($open_time_carbon, false);

            
            $this -> info("sleep $sleep seconds last");

            $job = (new CrawlOpenResultByOpenTime($lottery -> name, $open_time -> period_number))->delay($sleep);
            $this->dispatch($job);
        }
    }
}
