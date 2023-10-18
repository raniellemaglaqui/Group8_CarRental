<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Faqs', function () {
    return view('Faqs');
});
Route::get('/ContactUs', function () {
    return view('ContactUs');
});
Route::get('/Models', function () {
    return view('Models');
});
Route::get('/AboutUs', function () {
    return view('AboutUs');
});
