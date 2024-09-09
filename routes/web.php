<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;

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



// Route::get('/contact', function () {
//     return view('Contact');
// });

Route::get('/home', [LandingPageController::class, 'index']);

Route::get('/tentang', [LandingPageController::class, 'tentang'])->name('tentang');
// Route::get('/contact', [LandingPageController::class, 'contact'])->name('contact');
Route::get('/kontak', [LandingPageController::class, 'kontak'])->name('kontak');
Route::get('/toko', [LandingPageController::class, 'toko'])->name('toko');


Route::get('/product', [ProductController::class, 'index']);
Route::post('/cart/{id}', [CheckoutController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/add/{id}', [CheckoutController::class, 'addToCart'])->name('cart.add');
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');

// Route untuk menambahkan produk ke keranjang dan checkout
Route::post('/add-to-cart/{id}', [App\Http\Controllers\CheckoutController::class, 'addToCart'])->name('add.to.cart');

// Route untuk menampilkan halaman checkout
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout.index');

Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.index');
Route::get('/product/search', [ProductController::class, 'search'])->name('product.search');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');


