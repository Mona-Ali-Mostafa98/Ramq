<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\AboutUsController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\FavoriteController;
use App\Http\Controllers\Front\CartController;

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

Route::get('/', [HomeController::class, 'index'])->name('front.index') ->middleware('auth');

Route::namespace('Front')->prefix('/front')->group(function(){
        Route::middleware('auth')->group(function(){

        Route::get('/logout', [LoginController::class, 'logout'])->name('front.logout');

        Route::get('/contact-us/create',[ContactUsController::class, 'create'])->name('front.contact-us.create');
        Route::post('/contact-us',[ContactUsController::class, 'store'])->name('front.contact-us.store');

        Route::get('/about-us',[AboutUsController::class, 'index'])->name('front.about-us.index');

        Route::get('/profile',[UserController::class, 'index'])->name('front.profile');
        Route::post('/register', [UserController::class, 'store'])->name('front.users.store');
        Route::put('/profile/{user}', [UserController::class, 'update'])->name('front.profile.update');

        Route::get('/password{user}/edit', [UserController::class, 'edit'])->name('front.password.edit');
        Route::put('/password/{user}', [UserController::class, 'update'])->name('front.password.update');

        Route::get('/products', [ProductController::class, 'index'])->name('front.products.index');
        Route::get('/products/{product}',[ProductController::class, 'show'])->name('front.products.show');

        Route::get('/favorites',[FavoriteController::class, 'index'])->name('front.favorites');
        Route::post('/favorite/store', [FavoriteController::class, 'store'])->name('front.favorites.store');
        Route::delete('/favorites/{id}', [FavoriteController::class, 'destroy'])->name('front.favorites.destroy');

        Route::get('/carts/create',[CartController::class, 'create'])->name('front.carts.create');
        Route::post('/carts', [CartController::class, 'store'])->name('front.carts.store');
        // Route::delete('/carts/{cart}', [CartController::class, 'destroy'])->name('front.carts.destroy');
        Route::post('/getRegion', [CartController::class,'getRegion']);


    });
});
