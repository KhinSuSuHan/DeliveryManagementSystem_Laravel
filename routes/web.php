<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/f1', function () {
	return view('frontend1template');
});






Route::resource('locations','LocationController');
Route::resource('boxes','BoxController');
Route::resource('express','ExpressController');
Route::resource('scheduleorder','ScheduleorderController');

Route::get('/order', 'FrontendController@order')->name('order');
Route::get('/list', 'FrontendController@locations')->name('list');
Route::get('/scheduleorder', 'FrontendController@scheduleorder')->name('scheduleorder');
Route::get('/pricecalculator', 'FrontendController@pricecalculator')->name('pricecalculator');


Route::get('/orderform', 'FrontendController@orderform')->name('orderform');

Route::post('/order/schedule', 'FrontendController@schedule');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
