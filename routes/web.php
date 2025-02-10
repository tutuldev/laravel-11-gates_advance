<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// for registion
// Route::post('/registerValue', [UserController::class, 'register'])->name('registerSave');
// Route::get('/register', [UserController::class, 'registerPage'])->name('registerPage');




Route::get('/', [UserController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [UserController::class, 'login'])->name('loginMatch');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


// 1 way
// Route::get('/dashboard', [UserController::class, 'dashboardPage'])
// ->name('dashboard')->middleware('can:isAdmin');

// way 2
// Route::get('/dashboard', [UserController::class, 'dashboardPage'])
// ->name('dashboard')->can('isAdmin');

Route::get('/dashboard', [UserController::class, 'dashboardPage'])
->name('dashboard');

Route::get('/profile/{id}', [UserController::class, 'viewProfile'])->name('profile.show');
Route::get('/post/{id}', [UserController::class, 'viewPost'])->name('post.show');

