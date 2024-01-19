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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'App\Http\Controllers\SiteController@index');

Route::get('/about', function () {
    return view('blog.about');
});

Route::get('/register', function () {
    return view('blog.register');
});
Route::get('/blog', function () {
    return view('blog.blog');
});
Route::get('/contact', function () {
    return view('blog.contact');
});


Route::get('/', 'App\Http\Controllers\projetss@index');

//Route::post('/contact', 'App\Http\Controllers\contactController@store');
Route::post('contact', 'ContactController@store')->name('contact.store');
//Route::get('/contacts', [ContactController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
