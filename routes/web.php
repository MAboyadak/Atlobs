<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('categories', CategoryController::class);

Route::get('services', [ServicesController::class, 'index'])->name('services.index');
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
// Route::get('{cat}/services',[ServicesController::class,'categoryServices'])->name('category.services');
