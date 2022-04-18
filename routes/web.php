<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*Code for Landing/Front Page View*/
Route::get('/', function () {
    return view('welcome.index');
});

Route::get('about', function () {
    return view('welcome.about');
});

Route::get('services', function () {
    return view('welcome.services');
});

Route::get('contact', function () {
    return view('welcome.contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');