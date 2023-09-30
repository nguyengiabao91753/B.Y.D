<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContractController;
use App\Http\Controllers\Admin\ContactsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('product')->name('product.')->controller(ProductController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('policy')->name('policy.')->controller(PolicyController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::prefix('contract')->name('contract.')->controller(ContractController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::prefix('contact')->name('contact.')->controller(ContactsController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
});

