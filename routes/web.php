<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\InsuranceCotroller;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProviderController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Client\InsuranceController;
use App\Models\Admin\Insurance;

use App\Http\Controllers\Admin\ContractController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\ContractController as ClientContractController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\LoginClientController;
use App\Http\Controllers\Client\LogoutClientController;
use App\Http\Controllers\Client\UserProfileController;
use App\Http\Controllers\Page\Contact_usController;
use App\Http\Controllers\Page\ContractController as PageContractController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pdfController;
use App\Models\Contract;

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
})->name('admin');
// Login admin 
Route::get('auth/login',[LoginController::class,'showLogin'])->name('showLogin');
Route::post('auth/login',[LoginController::class,'login'])->name('login');
Route::get('auth/logout',LogoutController::class)->name('logout');

//show image Provider in Home Page
Route::get('/image/{id}',[HomeController::class,'showImage'])->name('showImage');

//show User Profile

// Route::get('/invoice',function(){
//     return view('client.page.invoice_checkout');
// });

// Route::get('/profile',[UserProfileController::class,'show'])->name('show');
// Route::get('/profile/edit', [UserProfileController::class,'edit'])->name('edit');
// Route::post('/profile/update', [UserProfileController::class,'update'])->name('update');

Route::get('/', function () {
    return view('client.page.home');
})->name('home');

Route::get('/about_us', function () {
    return view('client.page.about');
})->name('about');

Route::get('/contact_us', function () {
    return view('client.page.contact');
});
Route::get('/pdf',[pdfController::class,'index']);

Route::prefix('contact_us')->name('contact_us.')->controller(Contact_usController::class)->group(function(){
     Route::get('index','index')->name('index');
     Route::post('store','store')->name('store');
});

Route::get('/all_vehicle_insurance', function () {
    return view('client.page.all_vehicle');
})->name('vehicle');

Route::get('/bike_insurance', function () {
    return view('client.page.bike_insurance');
})->name('bike_insurance');

Route::get('/car_insurance', function () {
    return view('client.page.car_insurance');
})->name('car_insurance');

Route::get('/register', function () {
    return view('client.page.register');
})->name('register');

//Client Login and Register
Route::get('/login',  [LoginClientController::class,'showLoginClient'])->name('showLoginClient');
Route::post('/login',  [LoginClientController::class,'loginClient'])->name('loginClient');
Route::get('/logout',LogoutClientController::class)->name('logoutClient');
Route::get('/registration',[LoginClientController::class,'registration'])->name('registration');
Route::post('/register',[LoginClientController::class,'register'])->name('register');

Route::prefix('client')->name('')->group(function (){
    Route::get('car_insurance', [InsuranceController::class, 'index_car'])->name('car_insurance');
    Route::get('bike_insurance', [InsuranceController::class, 'index_bike'])->name('bike_insurance');
    Route::get('all_vehicle', [InsuranceController::class, 'index_all'])->name('all_vehicle');

    Route::get('plan_insurance', [InsuranceController::class, 'index_plan'])->name('plan_insurance');
    Route::get('form_insurance/{id}', [InsuranceController::class, 'index_form'])->name('form_insurance');

    Route::get('profile',[UserProfileController::class,'show'])->name('profile.show');
    Route::get('/profile/edit/{id}',[UserProfileController::class,'edit'])->name('profile.edit');
    Route::post('/profile/update/{id}',[UserProfileController::class,'update'])->name('profile.update');
    Route::get('/show/{id}',[UserProfileController::class,'showContractProfile'])->name('profile.contract');

    Route::get('/invoice',[CartController::class,'checkoutPost'])->name('checkoutPost');
    Route::get('/invoice/create',[CartController::class,'create'])->name('invoice.create');
    Route::post('/invoice/store',[CartController::class,'store'])->name('invoice.store');
    Route::get('/invoice/show/{id}',[CartController::class,'showCheckoutPost'])->name('invoice.show');

    Route::prefix('contract_user')->name('contract_user.')->controller(PageContractController::class)->group(function(){
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('show/{id}','show')->name('show');
    });
    
});

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
        Route::get('destroy_frv/{id}', 'destroy_frv')->name('destroy_frv');
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
        Route::get('show/{id}','show')->name('show');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');

        Route::get('restore/{id}', 'restore')->name('restore');
        Route::get('destroy_frv/{id}', 'destroy_frv')->name('destroy_frv');
    });
    Route::prefix('contract')->name('contract.')->controller(ContractController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('show/{id}', 'show')->name('show');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
    Route::prefix('contact')->name('contact.')->controller(ContactsController::class)->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('show/{id}', 'show')->name('show');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');

        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');

        Route::get('destroy/{id}', 'destroy')->name('destroy');
    });
});
