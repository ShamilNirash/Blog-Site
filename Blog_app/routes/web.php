<?php

use App\Http\Controllers\logoutController;
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

Route::get('/signin', [App\Http\Controllers\loginController::class,'signin'])->name('signin');
Route::post('/signin',[App\Http\Controllers\loginController::class,'signinPost'])->name('signin-post');
Route::get('/signup',[App\Http\Controllers\registerController::class,'signup'])->name('signUp');
Route::post('/signup',[App\Http\Controllers\registerController::class,'signupPost'])->name('signUp-post');
Route::post('/logout',[logoutController::class,'logout'])->name('logout');
Route::get('',[App\Http\Controllers\homeController::class,'home'])->name('home');
