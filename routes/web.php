<?php

use App\Livewire\Category\CreateCategory;
use App\Livewire\Category\ManageCategory;
use App\Livewire\Product\CreateProduct;
use App\Livewire\Product\ManageProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::prefix('admin')->group(function(){});

Route::get('/admin',function(){
    return view('admin.adminbase');
})->name('admin'); 
Route::get('/create-category',CreateCategory::class)->name('category.create-category');
Route::get('/manage-category',ManageCategory::class)->name('category.manage-category');
Route::get('/create-product',CreateProduct::class)->name('product.create-product');
Route::get('/manage-product',ManageProduct::class)->name('product.manage-product');
