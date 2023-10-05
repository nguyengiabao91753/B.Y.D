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
use App\Http\Controllers\Page\Contact_usController;
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

Route::get('auth/login',[LoginController::class,'showLogin'])->name('showLogin');
Route::post('auth/login',[LoginController::class,'login'])->name('login');
Route::get('auth/logout',LogoutController::class)->name('logout');


Route::get('/', function () {
    return view('client.page.home');
})->name('home');

Route::get('/about_us', function () {
    return view('client.page.about');
})->name('about');

Route::get(('/contact_us'), function () {
    return view('client.page.contact');
})->name('contact');
// Route::resource('/contact_us',Contact_usController::class);

Route::get('/all_vehicle_insurance', function () {
    return view('client.page.all_vehicle');
})->name('vehicle');


Route::get('/register', function () {
    return view('client.page.register');
})->name('register');

Route::get('/login', function () {
    return view('client.page.login');
})->name('login');

Route::prefix('admin')->name('admin.')->middleware('check_login')->group(function () {
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

    Route::prefix('policy')->name('policy.')->controller(PolicyController::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });


    Route::prefix('vehicle')->name('vehicle.')->group(function () {
        Route::prefix('cartype')->name('cartype.')->controller(CarTypeController::class)->group(function() {
            //Car
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
            
        Route::prefix('biketype')->name('biketype.')->controller(BikeTypeController::class)->group(function (){
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
       
        Route::prefix('carmodel')->name('carmodel.')->controller(CarModelController::class)->group(function() {
            //Car
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
        Route::prefix('bikemodel')->name('bikemodel.')->controller(BikeModelController::class)->group(function() {
            //Car
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
        Route::prefix('carmanu')->name('carmanu.')->controller(CarManuController::class)->group(function() {
            //Car
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
        Route::prefix('bikemanu')->name('bikemanu.')->controller(BikeManuController::class)->group(function() {
            //Car
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
        Route::prefix('carpkr')->name('carpkr.')->controller(CarPkrController::class)->group(function() {
           
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
        Route::prefix('bikepkr')->name('bikepkr.')->controller(BikePkrController::class)->group(function() {
           
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::post('update/{id}', 'update')->name('update');
            Route::get('destroy/{id}', 'destroy')->name('destroy');
        });
    });
        //Insurance
    Route::prefix('insurance')->name('insurance.')->controller(InsuranceCotroller::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });


   
        //Insurance
    Route::prefix('insurance')->name('insurance.')->controller(InsuranceCotroller::class)->group(function () {
        Route::get('index', 'index')->name('index');

        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
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
