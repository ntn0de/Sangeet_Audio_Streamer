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
})->name('welcome');
Route::resource('musics' ,'MusicController');
Route::get('musics/{music}/mood','MusicController@mood')->name('musics.mood');
Route::get('music/toplist','MusicController@toplist')->name('musics.toplist');