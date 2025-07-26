<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\RolePermission\RoleController;
use Illuminate\Support\Facades\Route;


Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('authenticate', [AuthenticationController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthenticationController::class, 'logout'])->name('logout');


Route::resource('role', RoleController::class);
Route::resource('user', RoleController::class);
