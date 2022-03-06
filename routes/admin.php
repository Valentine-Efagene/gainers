<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuth\LoginController;
use App\Http\Controllers\AdminAuth\RegisterController;
use App\Http\Controllers\AdminAuth\ForgotPasswordController;
use App\Http\Controllers\AdminAuth\ResetPasswordController;
use App\Http\Controllers\adminDashboard\DepositsController;
use App\Http\Controllers\adminDashboard\TotalUsers;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\ProfitController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\WithdrawalController;

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
    Route::get('/profit', [ProfitController::class, 'create'])->name('admin.profit.create');
    Route::post('/profit', [ProfitController::class, 'store'])->name('admin.profit.store');
    Route::get('/bonus', [BonusController::class, 'create'])->name('admin.bonus.create');
    Route::post('/bonus', [BonusController::class, 'store'])->name('admin.bonus.store');
    Route::view('/token', 'admin.token')->name('admin.token');
    Route::post('/token', [TokenController::class, 'store'])->name('admin.token');
    Route::get('/withdrawals', [WithdrawalController::class, 'index'])->name('admin.withdrawals');
    Route::get('/deposits', [DepositController::class, 'index'])->name('admin.deposits');
    Route::delete('/users/{id}', [UserController::class, 'delete'])->name('admin.users.delete');
    Route::delete('/deposits', [DepositController::class, 'delete'])->name('admin.deposits.delete');
    Route::patch('/deposits/approve', [DepositController::class, 'update'])->name('admin.deposits.approve');
    Route::patch('/deposits/decline/{id}', [DepositController::class, 'update'])->name('admin.deposits.decline');
    Route::post('/system_wallet', [WalletController::class, 'update'])->name('admin.system_wallet');
    Route::view('/trader_stat', 'admin.trader_stat')->name('admin.trader_stat');
    Route::get('/total_users', [UserController::class, 'index'])->name('admin.total_users');
    Route::view('/system_wallet', 'admin.system_wallet')->name('admin.system_wallet');
    Route::view('/system', 'admin.system')->name('admin.system');
    Route::view('/dashboard', 'admin.index')->name('admin.dashboard');
    Route::get('/*', function () {
        return redirect()->route('admin.dashboard');
    })->name('admin');
});
