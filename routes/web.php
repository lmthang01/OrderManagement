<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\HomeController as BackendHomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\AuthController as FrontendAuthController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\CustomerController as FrontendCustomerController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\OrderController as FrontendOrderController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\VerifyAccountController;
use App\Http\Controllers\ListCustomerController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Login admin
Route::group(['namespace' => 'Backend', 'prefix' => 'auth'], function(){
    Route::get('login', [AuthController::class, 'login'])->name('get_admin.login');
    Route::post('login', [AuthController::class, 'postLogin']);

     Route::get('xac-thuc-tai-khoan', [VerifyAccountController::class, 'newPassword'])->name('get.verify_account');
     Route::post('xac-thuc-tai-khoan', [VerifyAccountController::class, 'updateNewPassword']);

});

// Admin
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'check.login.admin'], function(){
    Route::get('', [BackendHomeController::class, 'index'])->name('get_admin.home');

    Route::get('logout', [AuthController::class, 'logout'])->name('get_admin.logout'); // Đăng xuất login
    
    // Category (List khách hàng)
    Route::group(['prefix' => 'category'], function(){
        Route::get('', [CategoryController::class, 'index'])->name('get_admin.category.index');

        Route::get('create', [CategoryController::class, 'create'])->name('get_admin.category.create');
        Route::post('create', [CategoryController::class, 'store'])->name('get_admin.category.store');

        Route::get('update/{id}', [CategoryController::class, 'edit'])->name('get_admin.category.update');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('get_admin.category.update');

        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('get_admin.category.delete');
    });

    // Customer
    Route::group(['prefix' => 'customer'], function(){
        Route::get('', [CustomerController::class, 'index'])->name('get_admin.customer.index');

        Route::get('create', [CustomerController::class, 'create'])->name('get_admin.customer.create');
        Route::post('create', [CustomerController::class, 'store'])->name('get_admin.customer.store');

        Route::get('update/{id}', [CustomerController::class, 'edit'])->name('get_admin.customer.update');
        Route::post('update/{id}', [CustomerController::class, 'update'])->name('get_admin.customer.update');

        Route::get('delete/{id}', [CustomerController::class, 'delete'])->name('get_admin.customer.delete');
    });

    // User
        // Customer
        Route::group(['prefix' => 'user'], function(){
            Route::get('', [UserController::class, 'index'])->name('get_admin.user.index');
    
            Route::get('create', [UserController::class, 'create'])->name('get_admin.user.create');
            Route::post('create', [UserController::class, 'store'])->name('get_admin.user.store');
    
            Route::get('update/{id}', [UserController::class, 'edit'])->name('get_admin.user.update');
            Route::post('update/{id}', [UserController::class, 'update'])->name('get_admin.user.update');
    
            Route::get('delete/{id}', [UserController::class, 'delete'])->name('get_admin.user.delete');

            // Route::get('xac-thuc-tai-khoan', [VerifyAccountController::class, 'newPassword'])->name('get.verify_account');
        });
});


// User
Route::group(['namespace' => 'Frontend',  'middleware' => 'check.login.user'], function(){

    Route::get('logout', [FrontendAuthController::class, 'logout'])->name('get_user.logout'); // Đăng xuất login


    // Customer
    Route::get('customer/index', [FrontendCustomerController::class, 'index'])->name('get.index');

    Route::get('customer/create', [FrontendCustomerController::class, 'create'])->name('get.customer_create');
    Route::post('customer/create', [FrontendCustomerController::class, 'store'])->name('get.customer_store');

    Route::get('customer/detail/{id}', [FrontendCustomerController::class, 'detail'])->name('get.customer_detail');

    Route::get('customer/update/{id}', [FrontendCustomerController::class, 'edit'])->name('get.customer_update');
    Route::post('customer/update/{id}', [FrontendCustomerController::class, 'update'])->name('get.customer_update');

    Route::get('customer/delete/{id}', [FrontendCustomerController::class, 'delete'])->name('get.customer_delete');


    // Category (List khách hàng)
    Route::get('', [FrontendCategoryController::class, 'index'])->name('get.category_index');

    Route::get('category/create', [FrontendCategoryController::class, 'create'])->name('get.category_create');
    Route::post('category/create', [FrontendCategoryController::class, 'store'])->name('get.category_store');

    Route::get('category/update/{id}', [FrontendCategoryController::class, 'edit'])->name('get.category_update');
    Route::post('category/update/{id}', [FrontendCategoryController::class, 'update'])->name('get.category_update');

    Route::get('category/delete/{id}', [FrontendCategoryController::class, 'delete'])->name('get.category_delete');

    // Contact (Liên hệ với khách hàng)
    Route::get('contact/index', [FrontendContactController::class, 'index'])->name('get.contact_index');

    Route::get('contact/create', [FrontendContactController::class, 'create'])->name('get.contact_create');
    Route::post('contact/create', [FrontendContactController::class, 'store'])->name('get.contact_store');

    Route::get('contact/update', [FrontendContactController::class, 'update'])->name('get.contact_update');
    Route::post('contact/update', [FrontendContactController::class, 'store'])->name('get.contact_store');


    //Order (Đơn hàng)
    Route::get('order/index', [FrontendOrderController::class, 'index'])->name('get.order_index');

    Route::get('order/detail', [FrontendOrderController::class, 'detail'])->name('get.order_detail');

    Route::get('order/create', [FrontendOrderController::class, 'create'])->name('get.order_create');
    Route::post('order/create', [FrontendOrderController::class, 'store'])->name('get.order_store');

    Route::get('order/update', [FrontendOrderController::class, 'update'])->name('get.order_update');
    Route::post('order/update', [FrontendOrderController::class, 'store'])->name('get.order_store');

});


// Login User
Route::group(['namespace' => 'Frontend', 'prefix' => 'authuser'], function(){
    Route::get('login', [FrontendAuthController::class, 'login'])->name('get_user.login');
    Route::post('login', [FrontendAuthController::class, 'postLogin']);
});

// Route::get('login', function(){
//     return view('frontend/loginuser/login');
// });



