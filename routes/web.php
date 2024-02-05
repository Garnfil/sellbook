<?php

use App\Http\Controllers\Web\AdminAuthController;
use App\Http\Controllers\Web\AdminDashboardController;
use App\Http\Controllers\Web\CustomerController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\StartUpController;
use App\Http\Controllers\Web\VendorController;
use App\Models\User;
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

Route::get('setup', [StartUpController::class, 'index'])->name('startup');
Route::post('setup', [StartUpController::class, 'store'])->name('startup.post');

Route::group(['middleware' => 'startup'], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');

    Route::get('admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
    Route::post('admin/login', [AdminAuthController::class, 'saveLogin'])->name('admin.saveLogin');

    Route::group(['middleware' => 'auth', 'verified', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::resource('products', ProductController::class);

        Route::resource('customers', CustomerController::class);

        Route::resource('vendors', VendorController::class);
    });
});


