<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\FormationController;

/**Route FORMATION */
Route::get('/formation',[FormationController::class,'index'])->name('formation');

/**Route Admin FORMATION */
Route::get('/admin/formation',[FormationController::class,'admin'])->middleware('auth')
->name('auth-formation');

?>