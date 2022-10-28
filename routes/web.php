<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\WithdrawalController;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

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


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/faq', 'faq')->name('faq');
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::view('/market', 'market')->name('market');
Route::view('/stock', 'stock')->name('stock');
Route::view('/terms', 'terms')->name('terms');
Route::view('/team', 'team')->name('team');
Route::view('/mining', 'mining')->name('mining');
Route::get('/statistics', [SuccessController::class, 'statistics'])->name('statistics');
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/success/get', [SuccessController::class, 'index'])->name('admin.success.get');
Route::get('test', function () {
  return request()->segment(1);
});

Auth::routes();

// Password
Route::get('/forgot-password', function () {
  return view('auth.passwords.email');
})->middleware('guest')->name('password.request');

Route::get('/reset-password/{token}', function ($token) {
  return view('auth.passwords.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

// Client Dashboard
Route::group(['middleware' => 'auth'], function () {
  Route::post('/profile', [UserController::class, 'update'])->name('user.update_profile');
  Route::view('/profile', 'profile')->name('user.profile');
  Route::get('/withdrawal', [WithdrawalController::class, 'create'])->name('user.withdrawal');
  Route::get('/deposit', [DepositController::class, 'create'])->name('user.deposit');
  Route::post('/deposit', [DepositController::class, 'store'])->name('deposit.store');
  Route::post('/withdrawal', [WithdrawalController::class, 'store'])->name('withdrawal.store');
  Route::get('/activities', [UserDashboardController::class, 'activities'])->name('user.activities');
  Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
});

Route::get('/welcome-email', [EmailController::class, 'welcome'])->name('email.welcome');
Route::get('/mail-test', function () {
  Mail::to('efagenevalentine@gmail.com')->send(new Welcome());
})->name('email.welcome');

Route::get('/welcome-email', [EmailController::class, 'welcome'])->name('email.welcome');
Route::fallback(function () {
  return view('/home');
});

Route::get('/version', function () {
  return app()->version();
});
