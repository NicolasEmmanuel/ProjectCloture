<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\FormationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[LayoutController::class,'index'])->name('accueil');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/blog.php';
require __DIR__.'/formateur.php';
require __DIR__.'/formation.php';
require __DIR__.'/user.php';



/**Route FORMATION */
Route::get('/formation',[FormationController::class,'index'])->name('formation');
/**Route Admin FORMATION */
Route::get('/admin/formation',[FormationController::class,'admin'])->middleware('auth')
->name('auth-formation');

/**Route TEAM */
//Route::get('/team',[TeamController::class,'index'])->name('team');

/**Route CONTACT */
Route::get('/contact',[ContactController::class,'index'])->name('contact');