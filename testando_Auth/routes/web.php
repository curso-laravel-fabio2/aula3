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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/teste/{nome?}', 'TesteControler@index');

Route::get('/info', 'TesteControler@info');

Route::get('/teste/home', 'TesteControler@home');
Route::get('/boa-tarde/{nome?}', 'TesteControler@boaTarde');
Route::get('/single-controller', 'ForeverAlorController');

Route::resource('/party', 'PartyGuyController');

