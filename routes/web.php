<?php
use App\Http\Controllers\Dashboard\IndexController;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
    
// })->name('index');
Route::get('/', function () {
  return 'user';
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\Site\CategoryController::class, 'index'])->name('home');
Route::get('/cart', [App\Http\Controllers\Site\CartController::class, 'index'])->name('cart');

Route::get('/favorite', [App\Http\Controllers\Site\FavoriteController::class, 'index'])->name('favorite');
