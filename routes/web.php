<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'Index'])->middleware('auth')->name('home');

Route::get('/profile', [ProfileController::class, 'Index'])->middleware('auth')->name('profile');

Route::get('/tasks', [TasksController::class, 'Index'])->middleware('auth')->name('tasks');

Route::get('/login', [AuthController::class, 'Index'])->name('login');

Route::post('/login', [AuthController::class, 'Login'])->name('login.submit');

Route::get('/register', [AuthController::class, 'registration'])->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.go');