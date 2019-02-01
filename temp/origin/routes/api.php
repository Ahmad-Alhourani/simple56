<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//start_Test_start
Route::resource('test', 'API\TestAPIController');

//end_Test_end

//start_Test2_start
Route::resource('test2', 'API\Test2APIController');

//end_Test2_end

//*****Do Not Delete Me
