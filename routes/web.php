<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;

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
Route::get('/', [WebController::class, 'index'])->name('home');

Route::get('/course-detail', [WebController::class, 'detail'])->name('course-detail');

Route::get('/user-register', [AuthController::class, 'register'])->name('user-register');

Route::get('/user-login', [AuthController::class, 'login'])->name('user-login');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/add-user',[UserController::class, 'index'])->name('add-user');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage-user',[UserController::class, 'manage'])->name('manage-user');
Route::middleware(['auth:sanctum', 'verified'])->get('/add-teacher',[TeacherController::class, 'index'])->name('add-teacher');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage-teacher',[TeacherController::class, 'manage'])->name('manage-teacher');
