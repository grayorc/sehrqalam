<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('');
})->name('welcome');
Route::get('/refresh_captcha','\App\Http\Controllers\Auth\LoginController@refreshCaptcha')->name('refresh');
Route::get('/blog/{slug}', '\App\Http\Controllers\HomeController@blog');
Route::get('/blog', '\App\Http\Controllers\HomeController@blogIndex');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/verify-account', [RegisterController::class, 'verify_account_get'])->name('verify.account.get');

Route::post('/verify-account', [RegisterController::class, 'verify_account'])->name('verify.account');

Route::post('/register_account', [RegisterController::class, 'register_account'])->name('regitser-user');
