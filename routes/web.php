<?php

use App\Livewire\Category\CreateCategory;
use App\Livewire\Category\ManageCategory;
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
