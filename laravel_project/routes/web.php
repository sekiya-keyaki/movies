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
    return view('welcome');
});
Route::get('/top', function () {
    return view('top');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('paginate', 'MovieController@index')->name('movie.index');
Route::get('show/{id}', 'MovieController@show')->name('movie.show');
Route::get('review/{movieId}', 'MovieController@review')->name('movie.review');
Route::middleware('auth')->get('create/{movieId}', 'MovieController@create')->name('movie.create');
Route::middleware('auth')->post('store', 'MovieController@store')->name('movie.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
