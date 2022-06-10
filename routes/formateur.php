<?php

use App\Http\Controllers\FormateurController;

/**Route FORMATEUR */
Route::get('/formateur',[FormateurController::class,'index'])->name('formateur');

/**Route admin FORMATEUR */
Route::get('/admin-formateur',[AdminFormateurController::class,'index'])->middleware(['auth'])->name('admin-formateur');
?>