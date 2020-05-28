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

//Route::get('/', function () {
//    return view('site/index');
//});

Auth::routes(['verify' => true]);

Route::get('/', 'SiteController@index')->name('webindex');
Route::get('/pagina', 'SiteController@pagina')->name('pagina');
Route::get('/regras', 'SiteController@regras')->name('regras');

// Authentication Routes...
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('login', 'Auth\LoginController@login');
//Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//
//// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');
//
//// Password Reset Routes...
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('app/home', 'AppController@index')->name('app.home');
Route::get('app/guild', 'AppController@guild')->name('app.guildmark');
//Route::resource('app', 'AppController');

//Route::resource('app/user', 'UserController');

Route::get('app/user/senhanumerica','UserController@showLinkRequestForm')->name('user.ShowFormResetSenhaNumerica');
Route::post('app/user/sendlinksenhanumerica','UserController@sendLinkResetSenhaNumerica')->name('user.sendLinkResetSenhaNumerica');
Route::get('app/user/confirmaresetsenhanumerica/{token}/{email}','UserController@confirmaResetSenhaNumerica')->middleware('web')->name('user.confirmaResetSenhaNumerica');
Route::post('app/user/finalizaresetsenhanumerica','UserController@finalizaResetSenhaNumerica')->middleware('web')->name('user.finalizaLinkResetSenhaNumerica');




Route::resource('app/noticia', 'NoticiaController');
