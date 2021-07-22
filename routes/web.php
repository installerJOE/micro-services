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
    return view('public.index');
});
Route::get('/about-us', function(){
    return view('public.about');
});
Route::get('/contact-us', function(){
    return view('public.contact');
});
Route::get('/image-upload', function(){
    return view('public.upload-image');
});

Route::get('/demo', function(){
    return view('public.demo');
});

Route::post('/upload-image', 'App\Http\Controllers\ImageUploadsController@store');

Route::resource('/blogs', 'App\Http\Controllers\BlogsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
