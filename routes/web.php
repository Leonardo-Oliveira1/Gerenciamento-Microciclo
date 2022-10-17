<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\registerCategory;
use App\Http\Controllers\registerContainerType;
use App\Http\Controllers\registerItem;

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


Route::get('/', [registerItem::class, 'index']);
Route::post('/items/register_item', [registerItem::class, 'store']);


Route::get('/categorias', [registerCategory::class, 'index']);
Route::post('/items/register_category', [registerCategory::class, 'store']);

Route::get('/recipientes', [registerContainerType::class, 'index']);
Route::post('/items/register_container_type', [registerContainerType::class, 'store']);

Route::get('/estimativas', function () {
    return view('reagents_estimated');
})->name('reagents_estimated');
