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

Route::view('/upload', 'mobile.upload')->name('upload');
Route::view('/upload/completed', 'mobile.upload_completed');
Route::view('/coupon', 'mobile.coupon')->name('coupon');

Route::get('/', 'CharacterController@index');
Route::get('/scan-qr/{location}', 'QrController@location');
// Route::get('/location-index', 'QrController@index');

Route::post('/api/post', 'CharacterController@postAPIData')->name('post_api_data');
