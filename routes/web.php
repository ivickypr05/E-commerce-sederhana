<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AboutUsController;

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
//     return view('dashboard');
// });

// Route Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('index');

// Route Category
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/add', [CategoryController::class, 'create']);
Route::post('/category',[CategoryController::class, 'store']);
Route::get('/category/{id}/edit',[CategoryController::class, 'edit']);
Route::put('/category/{id}',[CategoryController::class,'update']);
Route::get('/category/{id}/delete', [CategoryController::class,'destroy']);


// Route Product 
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/add', [ProductController::class, 'create']);
Route::post('/product',[ProductController::class, 'store']);
Route::get('/product/{id}/edit',[ProductController::class, 'edit']);
Route::put('/product/{id}',[ProductController::class,'update']);
Route::get('/product/{id}/delete', [ProductController::class,'destroy']);

// Route Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');

// Route Transaction
Route::get('/transactionlist', [TransactionController::class, 'index'])->name('transactions');
