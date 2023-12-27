<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellersController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WarehousesController;
use Illuminate\Support\Facades\Route;


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
    Route::resource('/setting_account', UsersController::class)->names(['index' => 'setting_account.index']);
    Route::resource('/shop', ShopController::class);

    //product route group
    Route::get('/product', [ProductController::class, 'product'])->name('product');
    Route::get('/pricesetting', [ProductController::class, 'pricesetting'])->name('pricesetting');
    Route::get('/marketplace', [ProductController::class, 'marketplace'])->name('marketplace');

    //warehouse route
    Route::get('/index', [WarehousesController::class, 'index'])->name('searchwarehouse');
    Route::get('/find', [WarehousesController::class, 'find'])->name('find');
    Route::get('/mywarehouse', [WarehousesController::class, 'mywarehouse'])->name('mywarehouse');
    Route::get('/move', [WarehousesController::class, 'move'])->name('move');
    Route::get('/exit', [WarehousesController::class, 'exit'])->name('exit');

    // inventory route
    Route::get('/inbound', [InventoryController::class, 'inbound'])->name('inbound');
    Route::get('/stock', [InventoryController::class, 'stock'])->name('stock');
    Route::get('/stocklist', [InventoryController::class, 'stocklist'])->name('stocklist');

    // account route
    Route::post('/addteams', [TeamsController::class, 'addteams'])->name('addteams');
    Route::post('/updateteams/{user}', [TeamsController::class, 'updateteams'])->name('updateteams');
    Route::post('/deleteteams/{user}', [TeamsController::class, 'deleteteams'])->name('deleteteams');
});
