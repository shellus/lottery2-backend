<?php
use \Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'IndexController@getIndex');


Route::group(['prefix' => '/lottery'], function(){
    Route::get('/next-period/{lottery}', 'Lottery\LotteryController@getNextPeriod');
    Route::get('/today-open-result', 'Lottery\LotteryController@getTodayOpenResult');

    Route::resource('/lottery', 'Lottery\LotteryController',
        ['only' => ['index', 'show']]);
});