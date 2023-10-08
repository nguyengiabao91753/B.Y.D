<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\InsuranceCotroller;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProviderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Vehicle\BikeManuController;
use App\Http\Controllers\Admin\Vehicle\BikeModelController;
use App\Http\Controllers\Admin\Vehicle\BikePkrController;
use App\Http\Controllers\Admin\Vehicle\BikeTypeController;
use App\Http\Controllers\Admin\Vehicle\CarManuController;
use App\Http\Controllers\Admin\Vehicle\CarModelController;
use App\Http\Controllers\Admin\Vehicle\CarPkrController;
use App\Http\Controllers\Admin\Vehicle\CarTypeController;
use App\Http\Controllers\Admin\Vehicle\TypeController;
use App\Models\Admin\Insurance;

use App\Http\Controllers\Admin\ContractController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Client\LoginClientController;
use App\Http\Controllers\Client\LogoutClientController;
use App\Http\Controllers\Page\Contact_usController;
use App\Models\Contact;
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

Route::get('/admin', function () {
    return view('admin.master');
});
// Login admin 
Route::get('auth/login',[LoginController::class,'showLogin'])->name('showLogin');
Route::post('auth/login',[LoginController::class,'login'])->name('login');
Route::get('auth/logout',LogoutController::class)->name('logout');


Route::get('/', function () {
    return view('client.page.home');
})->name('home');

Route::get('/about_us', function () {
    return view('client.page.about');
})->name('about');

Route::get('/contact_us', function () {
    return view('client.page.contact');
});
// })->name('contact');
// Route::get('/contact_us',[Contact_usController::class,'index'])->name('index');
// Route::post('/contact_us',[Contact_usController::class,'store'])->name('store');
Route::prefix('contact_us')->name('contact_us.')->controller(Contact_usController::class)->group(function(){
     Route::get('index','index')->name('index');
     Route::post('store','store')->name('store');
});
Route::get('/all_vehicle_insurance', function () {
    return view('client.page.all_vehicle');
})->name('vehicle');


Route::get('/register', function () {
    return view('client.page.register');
})->name('register');

//Client Login and Register
Route::get('/login',  [LoginClientController::class,'showLoginClient'])->name('showLoginClient');
Route::post('/login',  [LoginClientController::class,'loginClient'])->name('loginClient');
Route::get('/logout',LogoutClientController::class)->name('logoutClient');
Route::get('/registration',[LoginClientController::class,'registration'])->name('registration');
Route::post('/register',[LoginClientController::class,'register'])->name('register');


Route::prefix('admin')->name('admin.')->middleware('check_login')->group(function () {
    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {
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
        Route::get('restore/{id}', 'restore')->name('restore');
    });

        //Insurance
    Route::prefix('insurance')->name('insurance.')->controller(InsuranceCotroller::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');

        Route::get('/getBrand/{id}', 'getBrand');

        Route::get('/getModel/{id}', 'getModel');

        Route::get('/getValue/{id}', 'getValue');
    });


    Route::prefix('customer')->name('customer.')->controller(CustomerController::class)->group(function () {

        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });


    Route::prefix('invoice')->name('invoice.')->controller(InvoiceController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });

    
    Route::prefix('provider')->name('provider.')->controller(ProviderController::class)->group(function () {
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
