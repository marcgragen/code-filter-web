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

Route::get('/demo', function () {
    return view('demo.index');
})->name('demo');

Route::post('/demo', [\App\Http\Controllers\DemoController::class, 'store'])->name('demo');

Route::get('/contact', function () {
    return view('petition.index');
})->name('contact');

Route::post('/contact', [\App\Http\Controllers\FiltersController::class, 'store'])->name('contact');

Route::get('/home', function () {
    return view('home.index');
})->name('home');

Route::get('/', function () {
    return view('home.index');
})->name('home');
