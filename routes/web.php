<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\ShareUserData;
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
    return view('landing');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('tampilkan.login');
    Route::post('/login', 'login')->name('login')->middleware(ShareUserData::class);
    Route::get('/register', 'showRegisterForm')->name('tampilkan.register');
    Route::post('/register', 'register')->name('register')->middleware(Authenticate::class);
    Route::post('/logout', 'logout')->name('logout');
});

Route::view('/dashboard', 'dashboard')->name('dashboard')->middleware(AuthCheck::class);
Route::view('/karir', 'karir')->name('karir')->middleware(AuthCheck::class);
Route::view('/editprof', 'editprof')->name('editprof')->middleware(AuthCheck::class);
Route::view('/beasiswa', 'beasiswa')->name('beasiswa')->middleware(AuthCheck::class);
Route::view('/event', 'event')->name('event')->middleware(AuthCheck::class);
