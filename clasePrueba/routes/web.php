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
    return view('index');
})->name('index');

Route::get('/playas', function () {
    return view('playas');
})->name('playas');

Route::get('/cabañas', function () {
    return view('cabañas');
})->name('cabañas');

Route::get('/egipto', function () {
    return view('egipto');
})->name('egipto');
