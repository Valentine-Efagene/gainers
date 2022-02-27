<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\UserController;
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


Route::view('/home', 'home')->name('home');
Route::view('/', 'home')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/faq', 'faq')->name('faq');
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::view('/market', 'market')->name('market');
Route::view('/stock', 'stock')->name('stock');
Route::view('/terms', 'terms')->name('terms');
Route::view('/team', 'team')->name('team');
Route::view('/statistics', 'statistics')->name('statistics');
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('test', function () {
  return request()->segment(1);
});

Auth::routes();
// Client Dashboard
Route::group(['middleware' => 'auth'], function () {
  Route::post('/profile', [UserController::class, 'update'])->name('user.update_profile');
  Route::view('/profile', 'profile')->name('user.profile');
  Route::view('/withdrawal', 'withdrawal')->name('user.withdrawal');
  Route::view('/deposit', 'deposit')->name('user.deposit');
  Route::post('/deposit', [DepositController::class, 'store'])->name('deposit.store');
  Route::post('/withdrawal', [WithdrawalController::class, 'store'])->name('withdrawal.store');
  Route::view('/activities', 'activities')->name('user.activities');
  Route::view('/dashboard', 'dashboard')->name('user.dashboard');
});

//Route::get('/adminLogin', [App\Http\Controllers\Auth\AdminAuthController::class, 'login'])->name('log');
