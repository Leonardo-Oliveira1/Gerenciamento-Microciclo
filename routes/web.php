<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\registerCategory;
use App\Http\Controllers\registerContainerType;
use App\Http\Controllers\registerItem;
use App\Http\Controllers\registerUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [registerUser::class, 'index'])->name('register');
Route::post('/register_create_user', [registerUser::class, 'store'])->name('register_create_user');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');



Route::get('/', [registerItem::class, 'index'])->name('items');
Route::post('/items/register_item', [registerItem::class, 'store'])->name('register_item');


Route::get('/categorias', [registerCategory::class, 'index'])->name('categories');
Route::post('/items/register_category', [registerCategory::class, 'store'])->name('register_category');

Route::get('/recipientes', [registerContainerType::class, 'index'])->name('containers');
Route::post('/items/register_container_type', [registerContainerType::class, 'store'])->name('register_container_type');

Route::get('/estimativas', function () {
    return view('reagents_estimated');
})->name('reagents_estimated');
