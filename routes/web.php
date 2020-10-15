<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PlofileController;
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

// Route::get('/', function () {
    // return view('welcome');
// });

Auth::routes();
Route::get('/logout','ProfileController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ProfileController@index')->name('home');
Route::get('profile/add', 'ProfileController@add');
Route::post('profile/add', 'ProfileController@create');
Route::get('profile/', 'ProfileController@home');
Route::get('/reply/like/{id}', 'RepliesController@like')->name('reply.like');
Route::get('/reply/unlike/{id}', 'RepliesController@unlike')->name('reply.unlike');
Route::get('profile/edit', 'ProfileController@edit');
Route::post('profile/edit', 'ProfileController@update');