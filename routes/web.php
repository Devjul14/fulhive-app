<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellersController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\WarehousesController;
use App\Http\Controllers\ProductCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::resource('/sellers', SellersController::class);
    Route::resource('/productCategory', ProductCategoryController::class);
    Route::resource('/setting_account', UsersController::class);
    Route::resource('/shop', ShopController::class);

    //product route group
    Route::get('/product', [ProductController::class,'index'])->name('masterProduct');
    Route::get('priceSetting', [ProductController::class,'priceSetting'])->name('priceSetting');
    Route::get('productMarketplace', [ProductController::class,'productMarketplace'])->name('productMarketplace');

    //warehouse route
    Route::get('/warehouseFind', [WarehousesController::class,'find'])->name('find');
    Route::get('/mywarehouse', [WarehousesController::class,'mywarehouse'])->name('mywarehouse');
    Route::get('/warehouseMove', [WarehousesController::class, 'move'])->name('move');
    Route::get('/warehouseExit', [WarehousesController::class, 'exit'])->name('exit');

});
