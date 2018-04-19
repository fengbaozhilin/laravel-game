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

Route::get('test','LoginController@test');

Route::get('/','IndexController@index');            //首页

Route::get('/cate/{cate_id}','IndexController@cate');            //分类

Route::get('login','LoginController@login');          //登陆

Route::get('register','LoginController@register');         //注册

Route::post('username_check','LoginController@username_check');  //检测用户是否重复

Route::post('login_check','LoginController@login_check');      //登陆检测

Route::post('register_check','LoginController@register_check');  //注册检测

Route::get('captcha_code','CaptchaController@captcha_code');   //验证码

Route::post('mail/send','MailController@send');   //邮件发送

Route::get('articleDetail/{id}','ArticleController@articleDetail');   //文章详情

Route::get('create_article','ArticleController@create_article');   //

Route::post('upload_article','ArticleController@upload_article');   //


Route::get('test1','TestController@index');

