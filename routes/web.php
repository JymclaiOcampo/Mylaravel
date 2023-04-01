<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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


Route::get('/', [StudentController::class, 'index'])->middleware('auth');
Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class, 'process']);
Route::post('/logout', [UserController::class, 'logout']);


Route::post('/store', [UserController::class, 'store']);
