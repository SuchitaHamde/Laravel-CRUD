<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
//     return view('welcome');
// });

Route::get('/add-product', [ProductController::class, 'addProduct']);
Route::post('/add-product', [ProductController::class, 'store'])->name('product.store');
Route::get('/allProducts', [ProductController::class, 'products'])->name('records');
Route::get('/edit/{id}', [ProductController::class,'edit']);
Route::post('/update', [ProductController::class, 'update'])->name('updated');
Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('deleted');
Route::get('/show/{id}', [ProductController::class, 'show']);