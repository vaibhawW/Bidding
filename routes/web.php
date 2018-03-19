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
    return view('index');
});
Route::resource('player','PlayersController');
Route::resource('manager','ManagerController');
Route::get('set-amount/{amount}','BiddingController@setAmount')->name('setAmount');
Route::get('allot/{manager}/{player}/{amount}','BiddingController@addManager')->name('allot');
Route::get('result','BiddingController@result')->name('result');
Route::get('help',function(){
    return view('readme');
})->name('help');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
