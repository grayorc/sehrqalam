<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/refresh_captcha','\App\Http\Controllers\Auth\LoginController@refreshCaptcha')->name('refresh');
Route::get('/blog/{slug}', '\App\Http\Controllers\HomeController@blog');
Route::get('/blog', '\App\Http\Controllers\HomeController@blogIndex');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/verify-account', [RegisterController::class, 'verify_account_get'])->name('verify.account.get');

Route::post('/verify-account', [RegisterController::class, 'verify_account'])->name('verify.account');

Route::post('/register_account', [RegisterController::class, 'register_account'])->name('regitser-user');

Route::prefix('/profile')->middleware('auth')->group(function (){
   Route::get('/submission', '\App\Http\Controllers\Profile\SubmissionController@index')->name('submission');
   Route::post('/submission', '\App\Http\Controllers\Profile\SubmissionController@store')->name('submission.store');
   Route::get('/receipt/{submission_id}', '\App\Http\Controllers\Profile\SubmissionController@receipt');
});

Route::get('/get-cities/{ostan}', '\App\Http\Controllers\profile\SubmissionController@getCities')->middleware('throttle:15,1');

Route::get('download/{user}/file',function ($file){
    return Storage::download(request('path'));
})->name('download.file')->middleware('signed');

Route::get('/blank-download/private/{path}', '\App\Http\Controllers\HomeController@createLink')->middleware('throttle:15,1');
