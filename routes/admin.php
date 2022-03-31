<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuth\LoginController;
use App\Http\Controllers\AdminAuth\RegisterController;
use App\Http\Controllers\BonusController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\ProfitController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\TraderController;
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
Route::post('register', [RegisterController::class, 'register'])->name('admin.register');

/*
// Password Reset Routes...
Route::post('admin/password/reset', [ResetPasswordController::class, 'reset'])->name('admin.password.update');
Route::post('admin/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');

Route::get('/forgot-password', function () {
    return view('auth.admin.passwords.email');
})->middleware('guest')->name('admin.password.request');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.admin.passwords.reset', ['token' => $token]);
})->middleware('guest')->name('admin.password.reset');
*/

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
    Route::post('/traders/set', [UserController::class, 'setTrader'])->name('admin.traders.set');
    Route::delete('/deposits', [DepositController::class, 'delete'])->name('admin.deposits.delete');
    Route::patch('/deposits/update', [DepositController::class, 'update'])->name('admin.deposits.update');
    Route::delete('/success', [SuccessController::class, 'delete'])->name('admin.success.delete');

    Route::delete('/withdrawals', [WithdrawalController::class, 'delete'])->name('admin.withdrawals.delete');
    Route::patch('/withdrawals/update', [WithdrawalController::class, 'update'])->name('admin.withdrawals.update');

    Route::post('/wallet/update', [WalletController::class, 'update'])->name('admin.wallet.update');
    Route::post('/wallet/store', [WalletController::class, 'store'])->name('admin.wallet.store');
    Route::get('/system_wallet', [WalletController::class, 'index'])->name('admin.system_wallet');
    Route::get('/trader_stat', [TraderController::class, 'index'])->name('admin.trader_stat');
    Route::post('/traders/update', [TraderController::class, 'update'])->name('admin.trader.update');
    Route::post('/traders/store', [TraderController::class, 'store'])->name('admin.trader.store');
    Route::get('/total_users', [UserController::class, 'index'])->name('admin.total_users');
    Route::view('/system', 'admin.system')->name('admin.system');
    Route::get('/create-success', [SuccessController::class, 'create'])->name('admin.success.create');
    Route::post('/success/store', [SuccessController::class, 'store'])->name('admin.success.store');
    Route::view('/dashboard', 'admin.index')->name('admin.dashboard');
    Route::get('/*', function () {
        return redirect()->route('admin.dashboard');
    })->name('admin');
});
