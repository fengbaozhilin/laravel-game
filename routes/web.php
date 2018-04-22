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

Route::get('create_article','ArticleController@create_article');   ////上传文章页面

Route::post('upload_article','ArticleController@upload_article');   //上传文章

Route::post('article_reply','ArticleController@article_reply');   //文章回复

Route::get('user/{id}','UserController@index');  //用户信息

Route::get('user/{id}/edit','UserController@edit');  //编辑页面

Route::post('editInfo','UserController@editInfo');  //编辑

Route::get('friend/{id}','UserController@friend');  //关注

Route::post('upload_avatar','UserController@upload_avatar');  //关注

Route::post('edit_password','UserController@edit_password');  //关注


Route::get('test1','TestController@index');

