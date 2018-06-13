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
    return view('home');
});

Route::get('/cars', function () {
    return view('cars');
});

Route::get('/locations', function () {
    return view('locations');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/return', function () {
    return view('return');
});

Route::get('/report', function () {
    return view('report');
});

Route::resource('booking', 'BookingController');

Route::resource('report', 'ReportController');

Route::resource('return', 'BookReturnController');

Route::resource('book', 'BookReturnController');

Route::get('bookingConfirm', function () {
    return view('bookingConfirm');
})->name('bookingConfirm');

Route::get('returnConfirm', function () {
    return view('returnConfirm');
})->name('returnConfirm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('CarsCRUD', 'AdminCarsCRUDController')
    ->middleware('is_admin');
