<?php

use App\Http\Controllers\CategoryOrderController;
use App\Http\Controllers\Admin\MyCategoryOrderController;
// use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\chatcontroller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OrderDetail;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdditionalServicesController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BankAccountController;
use App\Http\Controllers\Admin\TermsAndConditionsController;
use App\Http\Controllers\Admin\CitiesController;
use App\Http\Controllers\Admin\CountriesController;
use App\Http\Controllers\Admin\CreateBlogController;
use App\Http\Controllers\DropdownController;

use App\Http\Controllers;

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

Route::resource('blogs', BlogController::class);
// Route::get('blog', [BlogController::class, 'blog'])->name('blogs.blog');
Route::get('change', [PasswordController::class, 'index'])->name('paswords.index');
Route::get('categoryorder', [CategoryOrderController::class, 'index'])->name('categories.index');
Route::get('services', [ServicesController::class, 'index'])->name('services.index');
// Profile
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get('profile/store', [ProfileController::class, 'store'])->name('profile.store');
Route::get('profile/password/change', [ProfileController::class, 'createPassword'])->name('profile.create_password');
Route::post('profile/password/change', [ProfileController::class, 'changePassword'])->name('profile.change_password');


//Orders
Route::get('myorders', [OrdersController::class, 'myOrders'])->name('myorders.index');
Route::get('myorders/active', [OrdersController::class, 'activeOrder'])->name('orders.active');
Route::get('orders/finished', [OrdersController::class, 'finishedOrder'])->name('orders.finished');
Route::get('orders/create', [OrdersController::class, 'create'])->name('orders.create');
Route::get('orders/reorder', [OrdersController::class, 'reOrder'])->name('orders.reorder');
Route::get('orders/order/details', [OrdersController::class, 'order_details'])->name('myorders.details');
Route::get('orders', [OrdersController::class, 'orders'])->name('orders.view');


// About Us
Route::get('aboutus', [AboutController::class, 'index'])->name('aboutus.index');
// termsandconditions
Route::get('termsandconditions', [TermsAndConditionsController::class, 'index'])->name('terms.index');
//Bank Account

// Route::get('bankAccount', [BankAccount::class, 'index'])->name('bankAcount.index');
Route::get('bankAccount', [BankAccountController::class, 'index'])->name('bankAcount.index');

// Route::get('{cat}/services',[ServicesController::class,'categoryServices'])->name('category.services');

// chat
Route::get('chat', [ChatController::class, 'index'])->name('chat.index');
//favourite
Route::get('favourite', [FavoriteController::class, 'index'])->name('favourite.index');
Route::get('favourite/{id}', [FavoriteController::class, 'delete'])->name('favourite.delete');
Route::get('order/{id}' , [OrdersController::class ,'addFav'])->name('order.addFav');
Route::get('order/{id}' , [OrdersController::class ,'deleteFav'])->name('order.deleteFav');
//verify coode for password

Route::get('/verify', function () {
    return view('paswords.verifyPassword');
});




Route::get('admin/login', [AdminAuthController::class, 'login'])->name('dashboard.login');
Route::post('admin/login', [AdminAuthController::class, 'adminLogin'])->name('post.login');
Route::get('admin/logout', [AdminAuthController::class, 'signOut'])->name('dashboard.logout');

// Forget Password
Route::get('/forget-password', [AdminAuthController::class, 'getEmail'])->name('get.forget');
Route::post('/forget-password', [AdminAuthController::class, 'postEmail'])->name('post.forget');

// Reset Password
Route::get('/reset-password/{token}', [AdminAuthController::class, 'getPassword'])->name('get.reset');
Route::post('/reset-password', [AdminAuthController::class, 'updatePassword'])->name('post.reset');

Route::middleware('auth:admin')->group(function () {
    Route::view('admin', 'admin.dashboard')->name('dashboard.home');

    Route::resource('admin/slider', SliderController::class);

    Route::resource('admin/additionalService', AdditionalServicesController::class);
    Route::resource('blogsCreate', CreateBlogController::class);
    Route::resource('cities', CitiesController::class);
    Route::resource('countries', CountriesController::class);
    //static Pages //
    Route::get('admin/about', [AboutController::class,'create'])->name('about.create');
    Route::post('admin/about/store', [AboutController::class,'store'])->name('about.store');
    Route::get('admin/bank', [BankAccountController::class,'create'])->name('bank.create');
    Route::post('admin/bank/store', [BankAccountController::class,'store'])->name('bank.store');
    Route::get('admin/terms', [TermsAndConditionsController::class,'create'])->name('terms.create');
    Route::post('admin/termsstore', [TermsAndConditionsController::class,'store'])->name('terms.store');
    Route::resource('admin/categoryOrder',MyCategoryOrderController::class);
    Route::get('admin/orders',[OrdersController::class,'admin'])->name('admin.orders');

});



// routes for cites and countries DropDown in orders/create
Route::get('dropdown/create', [DropdownController::class, 'index']);
Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);
