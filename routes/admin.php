<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\UserController;

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
// Route::get('/login', [AdminController::class, 'index'])->name('login.index')->middleware('isAdmin:admin');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/dologin', [AdminController::class, 'dologin'])->name('admin.dologin');

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout')-> middleware('isAdmin:admin');
Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.home')-> middleware('isAdmin:admin');


Route::get('/admin/sliders', [SliderController::class, 'index'])->name('admin.sliders.index')->middleware('isAdmin:admin');
Route::get('/admin/sliders/create',[SliderController::class, 'create'])->name('admin.sliders.create')->middleware('isAdmin:admin');
Route::post('/admin/sliders',[SliderController::class, 'store'])->name('admin.sliders.store')->middleware('isAdmin:admin');
Route::get('/admin/sliders/{slider}', [SliderController::class, 'show'])->name('admin.sliders.show')->middleware('isAdmin:admin');
Route::get('/admin/sliders/{slider}/edit', [SliderController::class, 'edit'])->name('admin.sliders.edit')->middleware('isAdmin:admin');
Route::put('/admin/sliders/{slider}', [SliderController::class, 'update'])->name('admin.sliders.update')->middleware('isAdmin:admin');
Route::delete('/admin/sliders/{slider}', [SliderController::class, 'destroy'])->name('admin.sliders.destroy')->middleware('isAdmin:admin');


Route::get('/admin/settings', [SettingController::class, 'index'])->name('admin.settings.index')->middleware('isAdmin:admin');
Route::get('/admin/settings/{setting}', [SettingController::class, 'show'])->name('admin.settings.show')->middleware('isAdmin:admin');
Route::get('/admin/settings/{setting}/edit', [SettingController::class, 'edit'])->name('admin.settings.edit')->middleware('isAdmin:admin');
Route::put('/admin/settings/{setting}', [SettingController::class, 'update'])->name('admin.settings.update')->middleware('isAdmin:admin');
Route::delete('/admin/settings/{setting}', [SettingController::class, 'destroy'])->name('admin.settings.destroy')->middleware('isAdmin:admin');

Route::delete('/admin/settings/{id}', [SettingController::class, 'deleteImage'])->name('admin.settings.deleteImage')->middleware('isAdmin:admin');


Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index')->middleware('isAdmin:admin');
Route::get('/admin/products/create',[ProductController::class, 'create'])->name('admin.products.create')->middleware('isAdmin:admin');
Route::post('/admin/products',[ProductController::class, 'store'])->name('admin.products.store')->middleware('isAdmin:admin');
Route::get('/admin/products/{product}', [ProductController::class, 'show'])->name('admin.products.show')->middleware('isAdmin:admin');
Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit')->middleware('isAdmin:admin');
Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name('admin.products.update')->middleware('isAdmin:admin');
Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy')->middleware('isAdmin:admin');

Route::get('/admin/links', [SocialLinkController::class, 'index'])->name('admin.links.index')->middleware('isAdmin:admin');
Route::get('/admin/links/{link}', [SocialLinkController::class, 'show'])->name('admin.links.show')->middleware('isAdmin:admin');
Route::get('/admin/links/{link}/edit', [SocialLinkController::class, 'edit'])->name('admin.links.edit')->middleware('isAdmin:admin');
Route::put('/admin/links/{link}', [SocialLinkController::class, 'update'])->name('admin.links.update')->middleware('isAdmin:admin');
Route::delete('/admin/links/{link}', [SocialLinkController::class, 'destroy'])->name('admin.links.destroy')->middleware('isAdmin:admin');


Route::get('/admin/partners', [PartnerController::class, 'index'])->name('admin.partners.index')->middleware('isAdmin:admin');
Route::get('/admin/partners/create',[PartnerController::class, 'create'])->name('admin.partners.create')->middleware('isAdmin:admin');
Route::post('/admin/partners',[PartnerController::class, 'store'])->name('admin.partners.store')->middleware('isAdmin:admin');
Route::get('/admin/partners/{partner}', [PartnerController::class, 'show'])->name('admin.partners.show')->middleware('isAdmin:admin');
Route::get('/admin/partners/{partner}/edit', [PartnerController::class, 'edit'])->name('admin.partners.edit')->middleware('isAdmin:admin');
Route::put('/admin/partners/{partner}', [PartnerController::class, 'update'])->name('admin.partners.update')->middleware('isAdmin:admin');
Route::delete('/admin/partners/{partner}', [PartnerController::class, 'destroy'])->name('admin.partners.destroy')->middleware('isAdmin:admin');

Route::get('/admin/contacts', [ContactUsController::class, 'index'])->name('admin.contact-us.index')->middleware('isAdmin:admin');
Route::get('/admin/contacts/{id}', [ContactUsController::class, 'show'])->name('admin.contact-us.show')->middleware('isAdmin:admin');
Route::delete('/admin/contacts/{id}', [ContactUsController::class, 'destroy'])->name('admin.contact-us.destroy')->middleware('isAdmin:admin');


Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index')->middleware('isAdmin:admin');
Route::get('/admin/users/create',[UserController::class, 'create'])->name('admin.users.create')->middleware('isAdmin:admin');
Route::post('/admin/users',[UserController::class, 'store'])->name('admin.users.store')->middleware('isAdmin:admin');
Route::get('/admin/users/{user}', [UserController::class, 'show'])->name('admin.users.show')->middleware('isAdmin:admin');
Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit')->middleware('isAdmin:admin');
Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update')->middleware('isAdmin:admin');
Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy')->middleware('isAdmin:admin');



Route::get('/admin/features', [FeatureController::class, 'index'])->name('admin.features.index')->middleware('isAdmin:admin');
Route::get('/admin/features/create',[FeatureController::class, 'create'])->name('admin.features.create')->middleware('isAdmin:admin');
Route::post('/admin/features',[FeatureController::class, 'store'])->name('admin.features.store')->middleware('isAdmin:admin');
Route::get('/admin/features/{feature}', [FeatureController::class, 'show'])->name('admin.features.show')->middleware('isAdmin:admin');
Route::get('/admin/features/{feature}/edit', [FeatureController::class, 'edit'])->name('admin.features.edit')->middleware('isAdmin:admin');
Route::put('/admin/features/{feature}', [FeatureController::class, 'update'])->name('admin.features.update')->middleware('isAdmin:admin');
Route::delete('/admin/features/{feature}', [FeatureController::class, 'destroy'])->name('admin.features.destroy')->middleware('isAdmin:admin');