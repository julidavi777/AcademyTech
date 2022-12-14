<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Route::resource('/course', \App\Http\Controllers\CourseController::class);

Auth::routes(['register'=> false, 'reset' => false]);

Route::get('/home', [App\Http\Controllers\CourseController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\CourseController::class, 'index'])->name('home');
});

Route::get('/', function () {
    return view('welcome');
});
