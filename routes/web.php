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
    return view('register');
});
Route::view('register','register');

Route::post('register','HomeController@register');



Route::get('list','HomeController@list');
Route::get('list2','HomeController@list2');
Route::get('list3','HomeController@list3');


