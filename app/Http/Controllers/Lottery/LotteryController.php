<?php

namespace App\Http\Controllers\Lottery;

use App\Lottery;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LotteryController extends Controller
{
    public function getNextPeriod(Request $request){
        $result = Lottery::whereName($request['name']) -> firstOrFail() ->getNextPeriod();
        return $result;
    }
}
