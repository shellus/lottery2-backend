<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Lottery;
use App\OpenResult;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Lib\CrawlApiplus;

class CrawlOpenResultByOpenTime extends Job implements ShouldQueue
{
    use DispatchesJobs;
    use InteractsWithQueue, SerializesModels;

    protected $lottery_name;
    protected $period_number;

    public function __construct($lottery_name, $period_number)
    {
        $this -> lottery_name = $lottery_name;
        $this -> period_number = $period_number;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = with(new CrawlApiplus(['code' => $this -> lottery_name])) -> getResultByCurly();

        if($this -> period_number === $data['open_phase'])
        {
            $open_result = OpenResult::create([
                'period_number' => $this -> period_number,
                'open_time' => $data['load_time'],
                'open_value' => $data['open_result'],
            ]);
            Lottery::whereName($this -> lottery_name) ->firstOrFail() -> openResults()->save($open_result);
        }
        elseif($this -> period_number > $data['open_phase'])
        {
            $this -> release(5);
        }
        elseif($this -> period_number < $data['open_phase']){
            $this -> job -> delete();
            throw new \Exception('获取开奖结果不匹配
            $this -> period_number: ' . $this -> period_number . '
            $data[\'open_phase\']: ' . $data['open_phase']);
        }
    }
}
