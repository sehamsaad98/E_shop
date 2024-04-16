 <?php
use App\Http\Controllers\Trader\IndexController;
use App\Http\Controllers\Trader\ProductController;
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



//   Route::get('/', function () {
//     return 'trader';
// });
Route::get('/index', [IndexController::class , 'index'])->middleware('CheckTrader')->name('index');

Route::group([ 'middleware' => 'CheckTrader','as' => 'trader.'] , function(){
  Route::resource('/products',ProductController::class)->except('destroy', 'show');
  Route::delete('/products/delete',[ProductController::class , 'delete'])->name('products.delete');    
  Route::get('/colors/{color_id}', [ProductController::class, 'getSizes'])->name('colors.get');
  Route::get('/products/ajax',[ProductController::class , 'getall'])->name('products.getall'); 
});
