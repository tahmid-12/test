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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'TestController@index');
Route::get('/detail', 'TestController@detail');
Route::get('/video', 'TestController@video');

Route::get('/show', 'TestController@show');

//Route::get('/login', 'TestController@login');

Route::get('/image', 'TestController@image')->name('image');
/**Video Upload */
Route::get('/vid', 'TestController@vid')->middleware('auth');
Route::get('/vidshow', 'TestController@vidshow');

/**Image Upload */
Route::post('/image', 'TestController@store')->name('store');
//Route::post('/image', 'TestController@store')->middleware('auth');
Route::post('/video', 'TestController@vidStore')->name('vidstore');

//Route::delete('/image/{id}', 'TestController@destroy')->with('deleteFile');

Route::get('/deleteImage/{id}', 'TestController@delete')->middleware('auth');
Route::get('/deleteVideo/{id}', 'TestController@VideoDelete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
