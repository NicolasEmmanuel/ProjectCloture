<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\FormationController;

/**Route FORMATION */
Route::get('/formation',[FormationController::class,'index'])->name('formation');

/**Route DÉTAIL FORMATION */
Route::get('/formation/detail',[FormationController::class,'detail'])->name('formation-detail');

/**Route Admin FORMATION */
Route::get('/admin/formation',[FormationController::class,'admin'])->middleware('auth')
->name('auth-formation');

Route::get('/admin/formation/create',[FormationController::class,'create'])->middleware('auth')
->name('auth-formation-create');

Route::post('/admin/formation/store',[FormationController::class,'store'])->middleware('auth')
->name('auth-formation-store');



Route::get('/admin/formation/edit/{formation}',[FormationController::class,'edit'])->middleware('auth')
->name('auth-formation-edit');

Route::post('/admin/formation/update/{formation}',[FormationController::class,'update'])->middleware('auth')
->name('auth-formation-update');



Route::post('/admin/formation/delete/{formation}',[FormationController::class,'destroy'])->middleware('auth')
->name('auth-formation-delete');

?>