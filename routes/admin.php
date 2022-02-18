<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuth\LoginController;
use App\Http\Controllers\AdminAuth\RegisterController;
use App\Http\Controllers\AdminAuth\ForgotPasswordController;
use App\Http\Controllers\AdminAuth\ResetPasswordController;
use App\Http\Controllers\adminDashboard\TotalUsers;

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

// Authentication Routes...
Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('login', [LoginController::class, 'login'])->name('admin.logout');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

// Registration Routes...
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('register', [RegisterController::class, 'admin.register']);

// Password Reset Routes...
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset']);

Route::group(['middleware' => 'admin_auth'], function () {
    Route::view('/profit', 'admin.profit')->name('admin.profit');
    Route::view('/token', 'admin.token')->name('admin.token');
    Route::view('/withdrawals', 'admin.withdrawals')->name('admin.withdrawals');
    Route::view('/deposits', 'admin.deposits')->name('admin.deposits');
    Route::view('/trader_stat', 'admin.trader_stat')->name('admin.trader_stat');
    Route::get('/total_users', [TotalUsers::class, 'index'])->name('admin.total_users');
    Route::view('/system_wallet', 'admin.system_wallet')->name('admin.system_wallet');
    Route::view('/system', 'admin.system')->name('admin.system');
    Route::view('/dashboard', 'admin.index')->name('admin.dashboard');
    Route::view('/*', 'admin.index')->name('admin');
});
