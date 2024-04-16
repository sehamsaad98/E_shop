<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\ColorController;
use App\Http\Controllers\Dashboard\SettingController;
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

Route::get('/index', [IndexController::class , 'index'])->middleware('checkAdmin')->name('index');

Route::group([ 'middleware' => 'checkAdmin','as' => 'dashboard.'] , function(){
    Route::put('/users/{setting}/update',[SettingController::class , 'update'])->name('settings.update');
    Route::get('/settings',[SettingController::class , 'index'])->name('settings.index');    
    Route::get('/categories/ajax',[CategoryController::class , 'getall'])->name('categories.getall');    
    Route::delete('/categories/delete',[CategoryController::class , 'delete'])->name('categories.delete');    

    Route::resource('/categories',CategoryController::class)->except('destroy', 'show' ,  'create');

    
    Route::resource('/products',ProductController::class)->except('destroy', 'show');
    Route::get('/colors/{color_id}', [ProductController::class, 'getSizes'])->name('colors.get');
    Route::delete('/products/delete',[ProductController::class , 'delete'])->name('products.delete');    
    Route::get('/products/ajax',[ProductController::class , 'getall'])->name('products.getall'); 


    Route::resource('/colors',ColorController::class)->except('show' );
    // Route::get('/colors',[ProductController::class , 'colors'])->name('colors');    
    Route::get('/colors/ajax',[ColorController::class , 'getAllColors'])->name('colors.getAllColors'); 

    // Route::get('/color/create',[ProductController::class , 'store'])->name('colors.addColors');    

    });



// Route::put('/users/{setting}/update',[SettingController::class , 'update'])->middleware('checkAdmin')->name('dashboard.settings.update');
// Route::get('/settings',[SettingController::class , 'index'])->middleware('checkAdmin')->name('dashboard.settings.index');








Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/index', [IndexController::class, 'index']);
// // make route for admin dashboard
// Route::get('/admin/dashboard', [IndexController::class, 'admin_index']);
// // make route for admin dashboard
