<?php
use App\Http\Middleware\AdminMiddleware;
use App\Livewire\Admin\Category\CreateCategory;
use App\Livewire\Admin\Category\ManageCategory;
use App\Livewire\Admin\Coupon\CreateCoupon;
use App\Livewire\Admin\Coupon\ManageCoupon;
use App\Livewire\Admin\Product\CreateProduct;
use App\Livewire\Admin\Product\ManageProduct;
use App\Livewire\Admin\Product\ViewProduct;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

use App\Livewire\Public\Component\Singleview;
use App\Livewire\Public\Home;

use Illuminate\Support\Facades\Route;

// Public Route

    Route::get('/', Home::class)->name('home');
    Route::get('/single-view', Singleview::class)->name('single-view');
    
    



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
});





// Authentication Route
Route::get("/register", Register::class)->name('register');
Route::get("/login", Login::class)->name('login');
Route::post('/logout', [Login::class, 'logout'])->name('logout');