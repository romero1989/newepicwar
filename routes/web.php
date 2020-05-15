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
    return view('site/index');
});

Auth::routes();

Route::get('app/home', 'HomeController@index')->name('app.home');
Route::get('app/guild', 'HomeController@guild')->name('app.guildmark');
