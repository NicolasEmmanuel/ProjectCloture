<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\AdminFormateurController;

/**Route FORMATEUR */
Route::get('/formateur',[FormateurController::class,'index'])->name('formateur');

/**Route admin FORMATEUR */
Route::get('/admin/admin-formateur',[AdminFormateurController::class,'formateur'])/* ->middleware(['auth']) */->name('admin-formateur');

Route::get('/admin/editFormateur',[AdminFormateurController::class,'edit'])/* ->middleware(['auth']) */->name('edit-formateur');







?>