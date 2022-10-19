<?php

use App\Http\Controllers\loginUser;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\registerCategory;
use App\Http\Controllers\registerContainerType;
use App\Http\Controllers\registerItem;
use App\Http\Controllers\registerUser;

//Authentication Routes
Route::get('/register', [registerUser::class, 'index'])->name('register');
Route::post('/register_create_user', [registerUser::class, 'store'])->name('register_create_user');

Route::get('/login', [loginUser::class, 'index'])->name('login');
Route::post('/auth', [loginUser::class, 'auth'])->name('auth');


//Dashboard Routes
Route::middleware('checksession')->group(function(){
    Route::get('/', [registerItem::class, 'index'])->name('items');
    Route::post('/items/register_item', [registerItem::class, 'store'])->name('register_item');

    Route::get('/categorias', [registerCategory::class, 'index'])->name('categories');
    Route::post('/items/register_category', [registerCategory::class, 'store'])->name('register_category');

    Route::get('/recipientes', [registerContainerType::class, 'index'])->name('containers');
    Route::post('/items/register_container_type', [registerContainerType::class, 'store'])->name('register_container_type');

    Route::get('/estimativas', function () {
        return view('reagents_estimated');
    })->name('reagents_estimated');
});
