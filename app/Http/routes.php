<?php

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

Route::get('/', function (\Illuminate\Http\Request $request) {
    $result = \App\Lottery::whereName($request['name']) -> firstOrFail() ->getNextPeriod();
    return $result;
});
Route::get('/test', function (\Illuminate\Http\Request $request) {

    $attrs = ['name' =>'a' . \App\User::count(),'email' => 'a' . \App\User::count()];

    $user = new \App\User($attrs);
    $user -> save();

    return $user;
});