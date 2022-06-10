<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;


Route::get('/admin/user',[AdminUserController::class,'index'])->middleware('auth')->name('admin-user');

Route::get('/admin/user/edit',[AdminUserController::class,'edit'])->middleware('auth')->name('admin-useredit');