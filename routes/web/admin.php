<?php

use App\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Admin\PostController;
use \Illuminate\Support\Facades\Storage;

//These lines are for test
Route::get('/',function(){
    return view('admin.index');
});
Route::resource('users', 'User\UserController');
Route::get('/users/{user}/permissions', 'User\PermissionController@create')->name('users.permissions');
Route::post('/users/{user}/permissions', 'User\PermissionController@store')->name('users.permissions.store');
Route::resource('posts', 'PostController');
Route::resource('products', 'ProductController');
Route::resource('permissions', 'PermissionController');
Route::resource('roles', 'RoleController');
Route::resource('submissions', 'SubmissionController');

Route::get('download/{users}/file',function ($file){
    return Storage::download(request('path'));
})->name('download.file')->middleware('signed');
