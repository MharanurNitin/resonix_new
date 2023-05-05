<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/services', function () {
    return view('services');
});


Route::get('/blog', function () {
    return view('blog.blog');
});

Route::get('/contact', function () {
    return view('contact');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
     Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);
     Route::post('/login',[App\Http\Controllers\Admin\DashboardController::class,'login']);
     Route::get('/category',[App\Http\Controllers\Admin\CategoryController::class,'index']);
     Route::get('/add-category',[App\Http\Controllers\Admin\CategoryController::class,'create']);
     Route::post('/add-category',[App\Http\Controllers\Admin\CategoryController::class,'store']);
     
});
