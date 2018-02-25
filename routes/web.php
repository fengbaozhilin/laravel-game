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



Route::get('login','LoginController@login');
Route::get('register','LoginController@register');
Route::post('login_check','LoginController@login_check');
Route::post('register_check','LoginController@register_check');


Route::post('mail/send','MailController@send');

