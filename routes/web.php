<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('area', 'ServiceController@generateArea');
Route::get('pie', 'ServiceController@generatePie');
Route::get('areaspline', 'ServiceController@generateAreaSpline');
Route::get('bar', 'ServiceController@generateBar');
Route::get('combi', 'ServiceController@generateCombi');
Route::get('line', 'ServiceController@generateLine');
Route::get('logs', 'ServiceController@generateLogs');
Route::get('radar', 'ServiceController@generateRadar');
Route::get('semipie', 'ServiceController@generateSemiPie');
Route::get('stack', 'ServiceController@generateStack');
Route::get('vbar', 'ServiceController@generateVBar');
