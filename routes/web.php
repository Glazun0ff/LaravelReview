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

Route::get('/', 'MainController@home');

Route::get('/about', 'MainController@about');

Route::get('/contacts', 'MainController@contacts');

Route::get('/review', 'MainController@review')->name('review');
Route::post('/review/check', 'MainController@review_check');

//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return 'id: ' . $id . ', name: ' . $name;
//});
