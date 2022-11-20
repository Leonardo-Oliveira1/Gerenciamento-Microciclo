<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users\registerUser;
use App\Http\Controllers\Users\loginUser;
use App\Http\Controllers\Users\adminUsersActions;

use App\Http\Controllers\historyController;

use App\Http\Controllers\Items\Category;
use App\Http\Controllers\Items\ContainersTypes;
use App\Http\Controllers\Items\ItemController;
use App\Http\Controllers\Stock;
use App\Http\Controllers\Experiments;

//Authentication Routes
Route::get('/register', [registerUser::class, 'index'])->name('register');
Route::post('/register_create_user', [registerUser::class, 'store'])->name('register_create_user');

Route::get('/login', [loginUser::class, 'index'])->name('login');
Route::post('/auth', [loginUser::class, 'auth'])->name('auth');

Route::get('/logout', [loginUser::class, 'logout'])->name('logout');


//Dashboard Routes
Route::middleware(['checksession', 'check.user.account.type'])->group(function () {
    Route::get('/', [Stock::class, 'index'])->name('home');
    Route::get('/estoque', [Stock::class, 'index'])->name('stock');
    Route::get('/itens', [ItemController::class, 'index'])->name('items');
    Route::get('/categorias', [Category::class, 'index'])->name('categories');
    Route::get('/recipientes', [ContainersTypes::class, 'index'])->name('containers');
    Route::get('/historico', [historyController::class, 'index'])->name('history');

    Route::get('/tog', [Experiments::class, 'indexTOG'])->name('TOG');
    Route::get('/irap', [Experiments::class, 'indexIRAP'])->name('IRAP');
    Route::get('/pbs', [Experiments::class, 'indexPBS'])->name('PBS');
    Route::get('/sacarose', [Experiments::class, 'indexSacarose2'])->name('Sacarose2%');


    /*Route::get('/estimativas', function () {
        return view('reagents_estimated');
    })->name('reagents_estimated');*/
});


//Admin Routes
Route::middleware(['checksession', 'check.user.account.type', 'check.user.admin'])->group(function () {

    //Registering
    Route::post('/estoque/register_stock', [Stock::class, 'store'])->name('register_stock');
    Route::post('/items/register_item', [ItemController::class, 'store'])->name('register_item');
    Route::post('/items/register_category', [Category::class, 'store'])->name('register_category');
    Route::post('/items/register_container_type', [ContainersTypes::class, 'store'])->name('register_container_type');

    //Control users Operations
    Route::get('/lista_de_usuarios', [adminUsersActions::class, 'index'])->name('users_list');
    Route::post('/admin/makeAdmin/{id}', [adminUsersActions::class, 'makeAdmin'])->name('makeAdmin');

    Route::get('/aprovar_usuarios', [adminUsersActions::class, 'showUnapprovedUsers'])->name('approve_users');
    Route::post('/admin/accept/{id}', [adminUsersActions::class, 'makeCollaborator'])->name('acceptUser');
    Route::post('/admin/decline/{id}', [adminUsersActions::class, 'declineCollaborator'])->name('declineUser');

    //Tables Operations
    Route::get('/admin/edit/stock/{name}', [Stock::class, 'indexEdit'])->name('editStock');
    Route::get('/admin/edit/stockoff/{id}', [Stock::class, 'editStock'])->name('stock_off');
    Route::get('/admin/edit/container_type/{id}', [ContainersTypes::class, 'indexEdit'])->name('editContainerType');
    Route::get('/admin/edit/category/{id}', [Category::class, 'indexEdit'])->name('editCategory');
    Route::get('/admin/edit/item/{id}', [ItemController::class, 'indexEdit'])->name('editItem');

    Route::post('/admin/delete/container_type/{id}', [ContainersTypes::class, 'delete'])->name('deleteContainerType');
    Route::post('/admin/delete/category/{id}', [Category::class, 'delete'])->name('deleteCategory');
    Route::post('/admin/delete/item/{id}', [ItemController::class, 'delete'])->name('deleteItem');

    Route::post('/admin/edit/stockoff/save/{id}', [Stock::class, 'stockOff'])->name('save_stock_off');
    Route::post('/admin/edit/container_type/save/{id}', [ContainersTypes::class, 'edit'])->name('saveContainerTypeSave');
    Route::post('/admin/edit/category/save/{id}', [Category::class, 'edit'])->name('saveCategorySave');
    Route::post('/admin/edit/item/save/{id}', [ItemController::class, 'edit'])->name('saveItem');

});
