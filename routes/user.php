<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;


Route::get('/admin',[AdminUserController::class,'index'])->middleware('auth')->name('admin');

Route::get('/admin/user',[AdminUserController::class,'index'])->middleware('auth')->name('admin-user');

Route::get('/admin/user/edit/{user}',[AdminUserController::class,'edit'])->middleware('auth')->name('admin-useredit');

Route::get('/admin/user/edit/',[AdminUserController::class,'formajout'])->middleware('auth')->name('admin-userform');

Route::post('/admin/user/edit/{user}',[AdminUserController::class,'modifier'])->middleware('auth')->name('admin-usermodifier');

Route::post('/admin/user/edit/',[AdminUserController::class,'ajouter'])->middleware('auth')->name('admin-userajouter');


Route::get('/admin/user/{user}',[AdminUserController::class,'supprimer'])->middleware('auth')->name('admin-usersupprimer');
