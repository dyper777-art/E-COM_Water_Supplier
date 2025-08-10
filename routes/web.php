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
    return view('frontend.home.index');
})->name('home');


Route::get('/about', function () {
    return view('frontend.about.index');
})->name('about');

Route::get('/service', function () {
    return view('frontend.service.index');
})->name('service');


Route::get('/blog', function () {
    return view('frontend.blog.index');
})->name('blog');

Route::get('/contact', function () {
    return view('frontend.contact.index');
})->name('contact');
