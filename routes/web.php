<?php

use App\Events\SignaalEvent;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','GastController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/vragenlijst', 'vragenlijstController@index')->name('vragenlijst');
Route::post('/voerVragenlijstIn', 'vragenlijstController@voerVragenlijstIn')->name('voerVragenlijstIn');

Route::get('/addSignaaltoDbEvent/{apivalue}',function($apivalue){
    event(new SignaalEvent($apivalue));
    return 'OK:noerror';
})->name('addSignaaltoDbEvent');
Route::post('/addUserHistory', 'UserHistoryController@add')->name('addUserHistory');
