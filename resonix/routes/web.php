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
// home page
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/expertise', function () {
    return view('expertise');
});
Route::get('/service', function () {
    return view('service');
});
Route::view('/conctact', "contact");

Route::get('/blog', function () {
    return view('blog.blog');
});
