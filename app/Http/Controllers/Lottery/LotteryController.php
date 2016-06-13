<?php

namespace App\Http\Controllers\Lottery;

use App\Lottery as MyModel;
use App\OpenResult;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LotteryController extends Controller
{
    public function getNextPeriod(Request $request){
        $result = MyModel::whereName($request['name']) -> firstOrFail() ->getNextPeriod();
        return $result;
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
