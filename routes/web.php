<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductInShoppingCartsController;
use App\Http\Controllers\ShoppingCartController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/carrito', [ShoppingCartController::class, 'show'])->name('shopping_cart.show');
Route::get('/carrito/productos', [ShoppingCartController::class, 'products'])->name('shopping_cart.products');

Route::resource('productos', ProductController::class);

Route::resource('in_shopping_carts', ProductInShoppingCartsController::class)->only('store', 'destroy');


