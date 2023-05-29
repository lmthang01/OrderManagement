<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\HomeController as BackendHomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\VerifyAccountController;
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

// Login
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
Route::group(['namespace' => 'Frontend'], function(){
    Route::get('', [HomeController::class, 'index'])->name('get.home');

    // Route::get('xac-thuc-tai-khoan', [VerifyAccountController::class, 'newPassword'])->name('get.verify_account');

});



