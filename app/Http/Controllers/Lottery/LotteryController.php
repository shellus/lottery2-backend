<?php

namespace App\Http\Controllers\Lottery;

use App\Lottery as MyModel;
use App\Lottery;
use App\OpenResult;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LotteryController extends Controller
{
    public function getNextPeriod(Request $request, Lottery $lottery){
        $result = $lottery ->getNextPeriod();

        $now_time_carbon = new Carbon(date('Y-m-d H:i:s'));
        $open_time_carbon = new Carbon($result -> open_time);
        $now_time_carbon ->setLocale('zh');

        $sleep = $open_time_carbon -> diffForHumans($now_time_carbon, false);
        return array_merge($result -> toArray(),['现在' => $now_time_carbon -> toDateTimeString(),'还剩' => $sleep]);
    }
    public function getTodayOpenResult(Request $request){
        $today = $request['date']?:date('Y-m-d');
        return OpenResult::whereOpenTime($today) -> get();
    }

    public function index(){
        return MyModel::all();
    }
    public function show($id){
        return MyModel::findOrFail($id);
    }
}
