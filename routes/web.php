<?php

use Illuminate\Support\Facades\Route;

//  Default Route */
Route::get('/', [App\Http\Controllers\IndexController::class,'index'])->name('default');
Route::get('dashboard', [App\Http\Controllers\IndexController::class,'dashboard'])->name('dashboard');


Auth::routes();


//// Authentication Routes...
//Route::get('login', [App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');
//Route::post('login', [App\Http\Controllers\Auth\LoginController::class,'login']);
//Route::post('logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
//
//// Registration Routes...
//Route::get('register', [App\Http\Controllers\Auth\RegisterController::class,'showRegistrationForm'])->name('register');
//Route::post('register', [App\Http\Controllers\Auth\RegisterController::class,'register']);
//
//// Password Reset Routes...
//Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class,'showLinkRequestForm'])->name('password.email');
//Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class,'sendResetLinkEmail']);
//Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class,'showResetForm'])->name('password.request');
//Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class,'reset'])->name('password.reset');

// user roles
Route::prefix('role/')->name('roles.')->group(function () {
    Route::get('index', [App\Http\Controllers\Auth\RoleController::class,'index'])->name('index');
    Route::post('store', [App\Http\Controllers\Auth\RoleController::class,'store'])->name('store');
    Route::get('edit/{role}', [App\Http\Controllers\Auth\RoleController::class,'edit'])->name('edit');
    Route::put('update/{role}', [App\Http\Controllers\Auth\RoleController::class,'update'])->name('update');
    Route::delete('destroy/{role}', [App\Http\Controllers\Auth\RoleController::class,'destroy'])->name('destroy');
});

//  user role permissions
Route::prefix('permission/')->name('permissions.')->group(function () {
    Route::get('index', [App\Http\Controllers\Auth\PermissionController::class,'index'])->name('index');
    Route::post('store', [App\Http\Controllers\Auth\PermissionController::class,'store'])->name('store');
    Route::get('edit/{permission}', [App\Http\Controllers\Auth\PermissionController::class,'edit'])->name('edit');
    Route::put('update/{permission}', [App\Http\Controllers\Auth\PermissionController::class,'update'])->name('update');
    Route::delete('destroy/{permission}', [App\Http\Controllers\Auth\PermissionController::class,'destroy'])->name('destroy');
});
