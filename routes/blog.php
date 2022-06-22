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
Route::post('/admin/blog-edite',[AdminBlogController::class,'store'])->middleware(['auth'])->name('admin-blog-create');

/*Route ADMIN-BLOG-UPDATE modifier les infomations*/
Route::get('/admin/blog-modifier/{blog}',[AdminBlogController::class,'edite'])->middleware(['auth'])->name('admin-blog-modifier');
/*Route ADMIN-BLOG-UPDATE poster les modifiacations*/
Route::post('/admin/blog-modifier/{blog}',[AdminBlogController::class,'update'])->middleware(['auth'])->name('admin-blog-modifier');

/*Route ADMIN-BLOG-DELETE*/
Route::get('/admin/blog-supprimer/{blog}',[AdminBlogController::class,'destroy'])->middleware(['auth'])->name('admin-blog-delete');

?>