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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','MainController@index');
Route::post('/sendemail','MainController@sendemail')->name('sendemail');

Route::get('/news','NewsController@index');
Route::get('/news/view/{post}','NewsController@view');
Route::get('/pages/{id}/{slug}','PagesController@index');
Route::get('/reviews','ReviewsController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
