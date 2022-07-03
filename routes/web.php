<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\AboutUsController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\ContactUsController;

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

// Route::get('/', function () {
//     return view('front.index');
// });
// Route::get('/front/login',[LoginController::class, 'store'])->name('front.login');
Route::get('/front/login', [LoginController::class, 'login'])->name('front.login');
Route::post('/front/dologin', [LoginController::class, 'dologin'])->name('front.dologin');

Route::get('/front/logout', [LoginController::class, 'logout'])->name('front.logout')-> middleware('auth');
// Route::get('/', [LoginController::class, 'index'])->name('front.index')-> middleware('auth');


Route::get('/', [HomeController::class, 'index'])->name('front.index');

// Route::get('/front/contact-us', function () {
//     return view('front.contact-us');
// });

Route::get('/front/contact-us/create',[ContactUsController::class, 'create'])->name('front.contact-us.create')-> middleware('auth');
Route::post('/front/contact-us',[ContactUsController::class, 'store'])->name('front.contact-us.store')-> middleware('auth');

Route::get('/front/about-us',[AboutUsController::class, 'index'])->name('front.about-us.index')-> middleware('auth');

Route::get('/front/profile',[UserController::class, 'index'])->name('front.profile')-> middleware('auth');
// Route::get('/front/profile', [UserController::class, 'create'])->name('front.user.create');
// Route::post('/front/profile', [UserController::class, 'store'])->name('front.users.store');
Route::post('/front/register', [UserController::class, 'store'])->name('front.users.store');

Route::put('/front/profile/{id}', [UserController::class, 'update'])->name('front.users.update')-> middleware('auth');

Route::get('/front/products', [ProductController::class, 'index'])->name('front.products.index');
Route::get('/front/products/{product}',[ProductController::class, 'show'])->name('front.products.show');
