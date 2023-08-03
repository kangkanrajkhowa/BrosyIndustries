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
})->name('home');


Route::get('/certificate', function () {
    return view('certificate');
})->name('certificate');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
