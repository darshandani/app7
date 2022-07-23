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



Route::get('/', function () {
    return view('ecom.index');
});


Route::get('/services', function () {
    return view('ecom.services');
});


Route::get('/our-contect', function () {
    return view('ecom.contect');
});



