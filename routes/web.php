<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\AboutUs;
use App\Http\Controllers\TermsAndConditions;
use App\Http\Controllers\BankAccount;
use App\Http\Controllers\BankAccount;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('categories', CategoryController::class);

Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('blog', [BlogController::class, 'blog'])->name('blogs.blog');
Route::get('change', [PasswordController::class, 'index'])->name('paswords.index');
Route::get('services', [ServicesController::class, 'index'])->name('services.index');
// Profile
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get('profile/password/change', [ProfileController::class, 'changePassword'])->name('profile.change_password');
// About Us
Route::get('aboutus', [AboutUs::class, 'index'])->name('aboutus.index');
Route::get('aboutus', [AboutUs::class, 'index'])->name('aboutus.index');
// termsandconditions
Route::get('termsandconditions', [TermsAndConditions::class, 'index'])->name('terms.index');
//Bank Account

Route::get('bankAccount', [BankAccount::class, 'index'])->name('bankAcount.index');
Route::get('bankAccount', [BankAccount::class, 'index'])->name('bankAcount.index');
// Route::get('{cat}/services',[ServicesController::class,'categoryServices'])->name('category.services');
