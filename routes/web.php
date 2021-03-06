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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/kontak', function () {
        return view('contact');
    })->name('contact');

    Route::get('/', function () {
        return view('landing');
    })->name('landing');
});
