<?php

use Illuminate\Support\Facades\Route;
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
Route::post('/items/register_item', [registerItem::class, 'getData']);

Route::get('/itens', function () {
    return view('itens');
})->name('itens');

Route::get('/categorias', function () {
    return view('itens_categories');
})->name('itens_categories');

Route::get('/recipientes', function () {
    return view('itens_containers_types');
})->name('itens_containers_types');

Route::get('/estimativas', function () {
    return view('reagents_estimated');
})->name('reagents_estimated');
