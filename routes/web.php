<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\ShareUserData;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KarirPostController;


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
    Route::post('/login',  'login')->name('login');
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
Route::get('/editprof', [ProfileController::class, 'showData'])->name('editprof');
Route::view('/beasiswa', 'beasiswa')->name('beasiswa');
Route::view('/edit/user', 'edit-user')->name('edit-user');


// Admin Page

Route::controller(AdminController::class)->group(function(){
    Route::get('/view-users', 'viewusers')->name('view-users');
    Route::get('/user/{id}', 'showdata')->name('show-user');
    Route::post('/update/user/{id}', 'updatedata')->name('update-user');
    Route::get('/delete/user/{id}', 'delete')->name('delete-user');
    Route::post('/download/user','downloadUserInfo')->name('download-user');
});


Route::controller(PostController::class)->group(function(){
    Route::get('/event/{id}', 'viewPost')->name('post');
    Route::get('/event',  'index');
    Route::get('/admin/event/add', 'showCreateForm')->name('create-event');
    Route::post('/admin/event/add', 'storeNewPost');
    Route::get('/admin','userUploadedPosts')->name('admin');
    Route::get('/post/{id}','showPostId')->name('post_id');
    Route::post('/update/post/{id}', 'updatePost')->name('update-post');
    Route::get('/delete/post/{id}', 'deletePost')->name('delete-post');
});

Route::controller(KarirPostController::class)->group(function(){
    Route::view('admin/karir', 'admin.admin-karir');
    Route::get('/admin/karir/add', 'showCreateForm')->name('create-karir');
    Route::post('/admin/karir/add', 'storeNewPost');
    Route::get('/karir',  'index')->name('karir');
});

