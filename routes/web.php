<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/faq', 'faq')->name('faq');
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::view('/market', 'market')->name('market');
Route::view('/stock', 'stock')->name('stock');
Route::view('/terms', 'terms')->name('terms');
Route::view('/team', 'team')->name('team');
Route::view('/statistics', 'statistics')->name('statistics');

Route::get('/adminLogin', [App\Http\Controllers\Auth\AdminAuthController::class, 'login'])->name('log');

Auth::routes();
