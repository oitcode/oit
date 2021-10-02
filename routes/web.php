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
    return view('main');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/gadgets', function () {
    return view('gadgets');
})->name('gadgets');

Route::get('/onix', function () {
    return view('onix');
})->name('onix');

Route::get('/ofin', function () {
    return view('ofin');
})->name('ofin');

Route::get('/lms', function () {
    return view('lms');
})->name('lms');

// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
