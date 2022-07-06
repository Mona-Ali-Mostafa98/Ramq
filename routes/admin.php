<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DiscountCodeController;
use App\Http\Controllers\Admin\FavoriteController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Admin\UserController;
use App\Models\DiscountCode;

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
Route::namespace('Admin')->prefix('/admin')->group(function(){
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/dologin', [AdminController::class, 'dologin'])->name('admin.dologin');

Route::middleware('isAdmin:admin')->group(function(){

Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/index', [HomeController::class, 'index'])->name('admin.home');


Route::get('/sliders', [SliderController::class, 'index'])->name('admin.sliders.index');
Route::get('/sliders/create',[SliderController::class, 'create'])->name('admin.sliders.create');
Route::post('/sliders',[SliderController::class, 'store'])->name('admin.sliders.store');
Route::get('/sliders/{slider}', [SliderController::class, 'show'])->name('admin.sliders.show');
Route::get('/sliders/{slider}/edit', [SliderController::class, 'edit'])->name('admin.sliders.edit');
Route::put('/sliders/{slider}', [SliderController::class, 'update'])->name('admin.sliders.update');
Route::delete('/sliders/{slider}', [SliderController::class, 'destroy'])->name('admin.sliders.destroy');


Route::get('/settings', [SettingController::class, 'index'])->name('admin.settings.index');
Route::get('/settings/{setting}', [SettingController::class, 'show'])->name('admin.settings.show');
Route::get('/settings/{setting}/edit', [SettingController::class, 'edit'])->name('admin.settings.edit');
Route::put('/settings/{setting}', [SettingController::class, 'update'])->name('admin.settings.update');
Route::delete('/settings/{setting}', [SettingController::class, 'destroy'])->name('admin.settings.destroy');

Route::delete('/settings/{id}', [SettingController::class, 'deleteImage'])->name('admin.settings.deleteImage');


Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
Route::get('/products/create',[ProductController::class, 'create'])->name('admin.products.create');
Route::post('/products',[ProductController::class, 'store'])->name('admin.products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('admin.products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

Route::get('/links', [SocialLinkController::class, 'index'])->name('admin.links.index');
Route::get('/links/{link}', [SocialLinkController::class, 'show'])->name('admin.links.show');
Route::get('/links/{link}/edit', [SocialLinkController::class, 'edit'])->name('admin.links.edit');
Route::put('/links/{link}', [SocialLinkController::class, 'update'])->name('admin.links.update');
Route::delete('/links/{link}', [SocialLinkController::class, 'destroy'])->name('admin.links.destroy');


Route::get('/partners', [PartnerController::class, 'index'])->name('admin.partners.index');
Route::get('/partners/create',[PartnerController::class, 'create'])->name('admin.partners.create');
Route::post('/partners',[PartnerController::class, 'store'])->name('admin.partners.store');
Route::get('/partners/{partner}', [PartnerController::class, 'show'])->name('admin.partners.show');
Route::get('/partners/{partner}/edit', [PartnerController::class, 'edit'])->name('admin.partners.edit');
Route::put('/partners/{partner}', [PartnerController::class, 'update'])->name('admin.partners.update');
Route::delete('/partners/{partner}', [PartnerController::class, 'destroy'])->name('admin.partners.destroy');

Route::get('/contacts', [ContactUsController::class, 'index'])->name('admin.contact-us.index');
Route::get('/contacts/{id}', [ContactUsController::class, 'show'])->name('admin.contact-us.show');
Route::delete('/contacts/{id}', [ContactUsController::class, 'destroy'])->name('admin.contact-us.destroy');


Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
Route::get('/users/create',[UserController::class, 'create'])->name('admin.users.create');
Route::post('/users',[UserController::class, 'store'])->name('admin.users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('admin.users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

Route::get('/favorites', [FavoriteController::class, 'index'])->name('admin.favorites.index');
Route::get('/carts', [CartController::class, 'index'])->name('admin.carts.index');


Route::get('/codes', [DiscountCodeController::class, 'index'])->name('admin.codes.index');
Route::get('/codes/create',[DiscountCodeController::class, 'create'])->name('admin.codes.create');
Route::post('/codes',[DiscountCodeController::class, 'store'])->name('admin.codes.store');
Route::get('/codes/{code}', [DiscountCodeController::class, 'show'])->name('admin.codes.show');
Route::get('/codes/{code}/edit', [DiscountCodeController::class, 'edit'])->name('admin.codes.edit');
Route::put('/codes/{code}', [DiscountCodeController::class, 'update'])->name('admin.codes.update');
Route::delete('/codes/{code}', [DiscountCodeController::class, 'destroy'])->name('admin.codes.destroy');


Route::get('/features', [FeatureController::class, 'index'])->name('admin.features.index');
Route::get('/features/create',[FeatureController::class, 'create'])->name('admin.features.create');
Route::post('/features',[FeatureController::class, 'store'])->name('admin.features.store');
Route::get('/features/{feature}', [FeatureController::class, 'show'])->name('admin.features.show');
Route::get('/features/{feature}/edit', [FeatureController::class, 'edit'])->name('admin.features.edit');
Route::put('/features/{feature}', [FeatureController::class, 'update'])->name('admin.features.update');
Route::delete('/features/{feature}', [FeatureController::class, 'destroy'])->name('admin.features.destroy');

Route::get('/statistics', [StatisticController::class, 'index'])->name('admin.statistics.index');
Route::get('/statistics/create',[StatisticController::class, 'create'])->name('admin.statistics.create');
Route::post('/statistics',[StatisticController::class, 'store'])->name('admin.statistics.store');
Route::get('/statistics/{statistic}', [StatisticController::class, 'show'])->name('admin.statistics.show');
Route::get('/statistics/{statistic}/edit', [StatisticController::class, 'edit'])->name('admin.statistics.edit');
Route::put('/statistics/{statistic}', [StatisticController::class, 'update'])->name('admin.statistics.update');
Route::delete('/statistics/{statistic}', [StatisticController::class, 'destroy'])->name('admin.statistics.destroy');


Route::get('/cities', [CityController::class, 'index'])->name('admin.cities.index');
Route::get('/cities/create',[CityController::class, 'create'])->name('admin.cities.create');
Route::post('/cities',[CityController::class, 'store'])->name('admin.cities.store');
Route::delete('/cities/{city}', [CityController::class, 'destroy'])->name('admin.cities.destroy');


Route::get('/regions', [RegionController::class, 'index'])->name('admin.regions.index');
Route::get('/regions/create',[RegionController::class, 'create'])->name('admin.regions.create');
Route::post('/regions',[RegionController::class, 'store'])->name('admin.regions.store');
Route::delete('/regions/{city}', [RegionController::class, 'destroy'])->name('admin.regions.destroy');

Route::get('/admins', [AdminController::class, 'index'])->name('admin.admins.index');
Route::get('/admins/create',[AdminController::class, 'create'])->name('admin.admins.create');
Route::post('/admins',[AdminController::class, 'store'])->name('admin.admins.store');
Route::get('/admins/{admin}', [AdminController::class, 'show'])->name('admin.admins.show');
Route::get('/admins/{admin}/edit', [AdminController::class, 'edit'])->name('admin.admins.edit');
Route::put('/admins/{admin}', [AdminController::class, 'update'])->name('admin.admins.update');
Route::delete('/admins/{admin}', [AdminController::class, 'destroy'])->name('admin.admins.destroy');

});
});
