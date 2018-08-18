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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/','PostController@index')->name('home');

Route::get('/contact', function () {
//    return view('welcome');
    return view('contact');
})->name('contact');
Route::get('/zadanie', function () {
    return view('zadanie');
})->name('zadanie');

Auth::routes();

Route::resource('post','PostController');
Route::post('/','PostController@allPosts');
