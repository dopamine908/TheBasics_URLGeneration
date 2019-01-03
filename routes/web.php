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
    return view('welcome');
})->name('welcome_home');

/*
|--------------------------------------------------------------------------
| 生成 url 用法
|--------------------------------------------------------------------------
| 瀏覽 http://127.0.0.1:8000/seeUrl?a=123
*/
Route::get('seeUrl', 'UrlController@seeUrl');
Route::get('Demo/{id?}', 'UrlController@demo');

/*
|--------------------------------------------------------------------------
| 設定 url 變數的預設值
|--------------------------------------------------------------------------
*/
Route::get('{this_is_test}/demo_route', 'UrlController@UrlDefaults')->name('this_is_test');
Route::get('see_demo_route', 'UrlController@seeUrlDefaults');