<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\HomeController as BackendHomeController;
use App\Http\Controllers\Frontend\HomeController;
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


// Admin
Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function(){
    Route::get('', [BackendHomeController::class, 'index'])->name('get_admin.home');
    
    Route::group(['prefix' => 'category'], function(){
        Route::get('', [CategoryController::class, 'index'])->name('get_admin.category.index');

        Route::get('create', [CategoryController::class, 'create'])->name('get_admin.category.create');
        Route::post('create', [CategoryController::class, 'store'])->name('get_admin.category.store');

        Route::get('update/{id}', [CategoryController::class, 'edit'])->name('get_admin.category.update');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('get_admin.category.update');

        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('get_admin.category.delete');
    });
});


// User Fronend
Route::group(['namespace' => 'Frontend'], function(){
    Route::get('', [HomeController::class, 'index'])->name('get.home');
});



