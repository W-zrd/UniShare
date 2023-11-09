<?php

use App\Http\Controllers\AuthController;
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
    return view('index');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('tampilkan.login');
    Route::post('/login', 'login')->name('login');
    Route::get('/register', 'showRegisterForm')->name('tampilkan.register');
    Route::post('/register', 'register')->name('register');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/users', 'index')->name('users');
    Route::get('/users/create', 'create')->name('users.create');
    Route::post('/users', 'store')->name('users.store');
    Route::get('/users/{id}', 'show')->name('users.show');
    Route::get('/users/{id}/edit', 'edit')->name('users.edit');
    Route::put('/users/{id}', 'update')->name('users.update');
    Route::delete('/users/{id}', 'destroy')->name('users.destroy');
});

Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/karir', 'karir')->name('karir');
Route::view('/editprof', 'editprof')->name('editprof');
Route::view('/beasiswa', 'beasiswa')->name('beasiswa');
Route::view('/event', 'event')->name('event');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
