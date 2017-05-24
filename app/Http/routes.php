<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//静态页面路由
get('/laravel', function () {
    return view('welcome');
});
get('/', 'StaticPagesController@home')->name('home');
get('/help', 'StaticPagesController@help')->name('help');
get('/about', 'StaticPagesController@about')->name('about');
//用户路由
get('signup','UsersController@create')->name('signup');
resource('users','UsersController');
//会话路由
get('login','SessionsController@create')->name('login');
post('login','SessionsController@store')->name('store');
delete('logout','SessionsController@destroy')->name('logout');
