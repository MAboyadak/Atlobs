<?php

use App\Http\Controllers\CategoryOrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\AboutUs;
use App\Http\Controllers\TermsAndConditions;
use App\Http\Controllers\BankAccount;
use App\Http\Controllers\chatcontroller;
use App\Http\Controllers\OrderDetail;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AdditionalServicesController;
use App\Http\Controllers\Admin\AdminAuthController;

use App\Http\Controllers\Admin\CitiesController;
use App\Http\Controllers\Admin\CountriesController;
use App\Http\Controllers\DropdownController;

use App\Http\Controllers\FavouriteController;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();
Route::view('register/verify', 'auth.register_verify');

Route::resource('categories', CategoryController::class);

Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('blog', [BlogController::class, 'blog'])->name('blogs.blog');
Route::get('change', [PasswordController::class, 'index'])->name('paswords.index');
Route::get('categoryorder', [CategoryOrderController::class, 'index'])->name('categories.index');
Route::get('services', [ServicesController::class, 'index'])->name('services.index');
// Profile
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get('profile/password/change', [ProfileController::class, 'changePassword'])->name('profile.change_password');

//Orders
Route::get('myorders', [OrdersController::class, 'myOrders'])->name('myorders.index');
Route::get('orders/create', [OrdersController::class, 'create'])->name('orders.create');
Route::get('orders/order/details', [OrdersController::class, 'order_details'])->name('myorders.details');

// About Us
Route::get('aboutus', [AboutUs::class, 'index'])->name('aboutus.index');
// termsandconditions
Route::get('termsandconditions', [TermsAndConditions::class, 'index'])->name('terms.index');
//Bank Account

// Route::get('bankAccount', [BankAccount::class, 'index'])->name('bankAcount.index');
Route::get('bankAccount', [BankAccount::class, 'index'])->name('bankAcount.index');

Route::get('bankAccount', [BankAccount::class, 'index'])->name('bankAcount.index');

Route::get('bankAccount', [BankAccount::class, 'index'])->name('bankAcount.index');

// Route::get('{cat}/services',[ServicesController::class,'categoryServices'])->name('category.services');

// chat
Route::get('chat', [ChatController::class, 'index'])->name('chat.index');
//favourite
Route::get('favourite', [FavouriteController::class, 'index'])->name('favourite.index');

//verify coode for password

Route::get('/verify', function () {
    return view('paswords.verifyPassword');
});




Route::get('admin/login', [AdminAuthController::class, 'login'])->name('dashboard.login');
Route::post('admin/login', [AdminAuthController::class, 'adminLogin'])->name('post.login');
Route::get('admin/logout', [AdminAuthController::class, 'signOut'])->name('dashboard.logout');


Route::middleware('auth:admin')->group(function () {
    Route::view('admin', 'admin.dashboard')->name('dashboard.home');

    Route::resource('admin/slider', SliderController::class);

    Route::resource('admin/additionalService', AdditionalServicesController::class);

    Route::resource('cities', CitiesController::class);
    Route::resource('countries', CountriesController::class);
});


// routes for cites and countries DropDown in orders/create
Route::get('orders/create', [DropdownController::class, 'index']);
Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);
