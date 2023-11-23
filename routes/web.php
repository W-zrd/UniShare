<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
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

Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::view('/karir', 'karir')->name('karir');
Route::view('/editprof', 'editprof')->name('editprof');
Route::view('/beasiswa', 'beasiswa')->name('beasiswa');
Route::view('/edit/user', 'edit-user')->name('edit-user');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/user/{id}', [AdminController::class, 'showdata'])->name('showdata');
Route::post('/update/user/{id}', [AdminController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/user/{id}', [AdminController::class, 'delete'])->name('delete');

// EVENT PAGE
Route::view('admin/event', 'admin.admin-event');
Route::get('/admin/event/add', [PostController::class, 'showCreateForm'])->name('create-event');
Route::post('/admin/event/add', [PostController::class, 'storeNewPost']);


Route::get('/event/{id}', [PostController::class, 'viewPost'])->name('post_id');
Route::get('/event', [PostController::class, 'index']);