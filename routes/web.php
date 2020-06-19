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
    return view('sample');
});

Route::view('home','home');
Route::view('book','book');
Route::view('details','details');
Route::post('bookingspage','bookingspage@bookings');
Route::post('details','bookingspage@details');
Route::view('login','login');
Route::post('login','bookingspage@login');
//Route::post('bookinglist','bookingspage@data');
Route::get('bookinglist','bookingspage@data');
/*Route::get('/bookinglist', function () {

    if(!session()->has('admin'))
    {
        return redirect('login');
    }
    return view('bookinglist');
});*/

Route::get('logout','bookingspage@logout');