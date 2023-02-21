<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProfileController;
<<<<<<< HEAD
use App\Http\Controllers\AboutUs ;
use App\Http\Controllers\TermsAndConditions;
use App\Http\Controllers\BankAccount ;
=======
use App\Http\Controllers\AboutUs;
>>>>>>> 5d03426b3cba0135424f652ee8d58a6e8b70fd8c
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('categories', CategoryController::class);

Route::get('services', [ServicesController::class, 'index'])->name('services.index');
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
<<<<<<< HEAD
// About Us
Route::get('aboutus',[AboutUs::class , 'index'])->name('aboutus.index');
// termsandconditions
Route::get('termsandconditions',[TermsAndConditions::class , 'index'])->name('terms.index');
//Bank Account

Route::get('bankAccount',[BankAccount::class , 'index'])->name('bankAcount.index');
=======
Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Route::get('aboutus', [AboutUs::class, 'index'])->name('aboutus.index');
>>>>>>> 5d03426b3cba0135424f652ee8d58a6e8b70fd8c
// Route::get('{cat}/services',[ServicesController::class,'categoryServices'])->name('category.services');
