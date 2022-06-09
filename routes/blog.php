<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminBlogController;

/*Route BLOG*/
Route::get('/blog',[BlogController::class,'index'])->name('blog');

/*Route ADMIN-BLOG-LISTER*/
Route::get('/admin/blog-lister',[AdminBlogController::class,'index'])->middleware(['auth'])->name('admin-blog-lister');

/*Route ADMIN-BLOG-EDITER*/
Route::get('/admin/blog-editer',[AdminBlogController::class,'edite'])->middleware(['auth'])->name('admin-blog-editer');

/*Route ADMIN-BLOG-CREATE*/
Route::post('/admin/blog-edite',[AdminBlogController::class,'create'])->middleware(['auth'])->name('admin-blog-create');

/*Route ADMIN-BLOG-DELETE*/
Route::post('/admin/blog-supprimer',[AdminBlogController::class,'delete'])->middleware(['auth'])->name('admin-blog-delete');

?>