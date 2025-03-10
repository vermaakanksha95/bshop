<?php

use App\Http\Middleware\AdminMiddleware;
use App\Livewire\Admin\Address\CreateAddress;
use App\Livewire\Admin\Address\ManageAddress;
use App\Livewire\Admin\Category\CreateCategory;
use App\Livewire\Admin\Category\ManageCategory;
use App\Livewire\Admin\Coupon\CreateCoupon;
use App\Livewire\Admin\Coupon\ManageCoupon;
use App\Livewire\Admin\Order\CreateOrder;
use App\Livewire\Admin\Order\ManageOrder;
use App\Livewire\Admin\Product\CreateProduct;
use App\Livewire\Admin\Product\ManageProduct;
use App\Livewire\Admin\Product\ViewProduct;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Public\About;
use App\Livewire\Public\Component\Singleview;
use App\Livewire\Public\Contact;
use App\Livewire\Public\Faq;
use App\Livewire\Public\Home;
use Illuminate\Support\Facades\Route;

// Public Route

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/faq', Faq::class)->name('faq');
Route::get('/single-view/{slug}', Singleview::class)->name('single-view');

// Admin Route
Route::prefix('admin')->middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/', function () {
        return view('admin.adminbase');
    })->name('admin');

    Route::get('/create-category', CreateCategory::class)->name('category.create-category');
    Route::get('/manage-category', ManageCategory::class)->name('category.manage-category');
    Route::get('/create-product', CreateProduct::class)->name('product.create-product');
    Route::get('/manage-product', ManageProduct::class)->name('product.manage-product');
    Route::get('/create-coupon', CreateCoupon::class)->name('coupon.create-coupon');
    Route::get('/manage-coupon', ManageCoupon::class)->name('coupon.manage-coupon');
    Route::get('viewproduct/{slug}', ViewProduct::class)->name('product.viewproduct');
    Route::get('/create-order',CreateOrder::class)->name('order.create-order'); 
    Route::get('/manage-order',ManageOrder::class)->name('order.manage-order');
    Route::get('/create-address', CreateAddress::class)->name('address.create-address');
    Route::get('/manage-address',ManageAddress::class)->name('address.manage-address'); 

});
// Authentication Route
Route::get("/register", Register::class)->name('register');
Route::get("/login", Login::class)->name('login');
Route::post('/logout', [Login::class, 'logout'])->name('logout');
