<?php


use Illuminate\Support\Facades\Route;


Route::get('/admin/user',AdminUserController::class,'index')->name('admin-user');