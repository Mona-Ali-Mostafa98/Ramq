<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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

// Route::get('/login', [AdminController::class, 'index'])->name('login.index')->middleware('auth');
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/index', [AdminController::class, 'index']);