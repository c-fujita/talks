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
    return view('index');
});

Auth::routes();

// ホーム画面へ
Route::get('/', 'HomeController@index')->name('index');

// マイページへ
Route::get('/my-page', 'HomeController@myPage')->name('myPage');

// 投稿作成画面へ
Route::get('/create-form', 'ReferenceController@createForm');
