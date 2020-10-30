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
    return view('welcome1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/accountActivation', 'AccountsController@activate')->name('activate');
Route::post('/confirmActivation', 'AccountsController@confirmActivation')->name('conf');
Route::post('/verifyPhone', function () {
    dd('hdhd');
});



