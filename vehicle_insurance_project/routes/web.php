<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContractController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\InsurancePolicyController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Client\About_UsController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\LoginController;
use App\Http\Controllers\Client\RegisterController;
use App\Http\Controllers\Admin\ProviderController;
use App\Http\Controllers\Client\VehicleController;
use Illuminate\Auth\Events\Login;

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

Route::get('/admin', function () {
    return view('admin/app');
});
Route::get('/',function(){
    return view('client/home');
});



//admin

Route::prefix('admin')->name('admin.')->group(function(){
    Route::prefix('customer')->name('customer.')->group(function(){
        Route::get('index',[CustomerController::class,'index'])->name('index');
        Route::get('create',[CustomerController::class,'create'])->name('create');
        Route::post('store',[CustomerController::class,'store'])->name('store');
        Route::get('edit/{id}',[CustomerController::class,'edit'])->name('edit');
        Route::post('update/{id}',[CustomerController::class,'update'])->name('update');
        Route::get('destroy/{id}',[CustomerController::class,'destroy'])->name('destroy');
    });
    Route::prefix('category')->name('category.')->group(function(){
        Route::prefix('policy')->name('policy.')->group(function(){
            Route::get('index',[InsurancePolicyController::class,'index'])->name('index');
            Route::get('create',[InsurancePolicyController::class,'create'])->name('create');
            Route::post('store',[InsurancePolicyController::class,'store'])->name('store');
            Route::get('edit/{id}',[InsurancePolicyController::class,'edit'])->name('edit');
            Route::post('update/{id}',[InsurancePolicyController::class,'update'])->name('update');
            Route::get('destroy/{id}',[InsurancePolicyController::class,'destroy'])->name('destroy');
        });
        Route::prefix('vehicles')->name('vehicle.')->group(function(){
            Route::get('index',[VehicleController::class,'index'])->name('index');
            Route::get('create',[VehicleController::class,'create'])->name('create');
            Route::post('store',[VehicleController::class,'store'])->name('store');
            Route::get('edit/{id}',[VehicleController::class,'edit'])->name('edit');
            Route::post('update/{id}',[VehicleController::class,'update'])->name('update');
            Route::get('destroy/{id}',[VehicleController::class,'destroy'])->name('destroy');
        });

        Route::prefix('provider')->name('provider.')->group(function(){
            Route::get('index',[ProviderController::class,'index'])->name('index');
            Route::get('create',[ProviderController::class,'create'])->name('create');
            Route::post('store',[ProviderController::class,'store'])->name('store');
            Route::get('edit/{id}',[ProviderController::class,'edit'])->name('edit');
            Route::post('update/{id}',[ProviderController::class,'update'])->name('update');
            Route::get('destroy/{id}',[ProviderController::class,'destroy'])->name('destroy');
        });
    });
    Route::prefix('account')->name('account.')->group(function(){
        Route::get('index',[AccountController::class,'index'])->name('index');
        Route::get('create',[AccountController::class,'create'])->name('create');
        Route::post('store',[AccountController::class,'store'])->name('store');
        Route::get('edit/{id}',[AccountController::class,'edit'])->name('edit');
        Route::post('update/{id}',[AccountController::class,'update'])->name('update');
        Route::get('destroy/{id}',[AccountController::class,'destroy'])->name('destroy');
    });

    Route::prefix('invoice')->name('invoice.')->group(function(){
        Route::get('index',[InvoiceController::class,'index'])->name('index');
        Route::get('create',[InvoiceController::class,'create'])->name('create');
        Route::post('store',[InvoiceController::class,'store'])->name('store');
        Route::get('edit/{id}',[InvoiceController::class,'edit'])->name('edit');
        Route::post('update/{id}',[InvoiceController::class,'update'])->name('update');
        Route::get('destroy/{id}',[InvoiceController::class,'destroy'])->name('destroy');
    });

    Route::prefix('contract')->name('contract.')->group(function(){
        Route::get('index',[ContractController::class,'index'])->name('index');
        Route::get('create',[ContractController::class,'create'])->name('create');
        Route::post('store',[ContractController::class,'store'])->name('store');
        Route::get('edit/{id}',[ContractController::class,'edit'])->name('edit');
        Route::post('update/{id}',[ContractController::class,'update'])->name('update');
        Route::get('destroy/{id}',[ContractController::class,'destroy'])->name('destroy');
    });
});





Route::prefix('client')->name('client.')->group(function(){
    Route::get('home',[HomeController::class,'home'])->name('home');
    Route::get('about',[About_UsController::class,'about'])->name('about');
    Route::get('contact',[ContactController::class,'contact'])->name('contact');
    Route::get('vehicle',[VehicleController::class,'vehicle'])->name('vehicle');
    Route::get('login',[LoginController::class,'login'])->name('login');
    Route::get('register',[RegisterController::class,'register'])->name('register');
});
