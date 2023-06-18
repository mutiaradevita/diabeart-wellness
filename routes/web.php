<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminTransaksiController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminReviewController;
use App\Http\Controllers\AdminProdukController;

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

Route::middleware('auth', 'admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/user', [AdminController::class, 'user'])->name('dashboard.user');
    Route::get('/dashboard/product', [AdminController::class, 'product'])->name('dashboard.product');
    Route::get('/dashboard/review', [AdminReviewController::class, 'index'])->name('dashboard.review');
    Route::put('/dashboard/review/{id}', [AdminReviewController::class, 'update'])->name('dashboard.review.update');
    Route::get('/dashboard/review/detail/{id}', [AdminReviewController::class, 'show'])->name('dashboard.review.detail');
    Route::resource('/dashboard/user', AdminUserController::class);
    Route::resource('/dashboard/review', AdminReviewController::class);
    Route::resource('dashboard/product', AdminProdukController::class);
    Route::put('dashboard/product/hidden/{id}', [AdminProdukController::class, 'hidden'])->name('dashboard.product.hidden');
    Route::put('dashboard/product/visible/{id}', [AdminProdukController::class, 'visible'])->name('dashboard.product.visible');
    Route::get('/dashboard/transaksi', [AdminTransaksiController::class, 'index'])->name('dashboard.transaksi');
    Route::get('/dashboard/transaksi/keranjang', [AdminTransaksiController::class, 'readKeranjang'])->name('dashboard.transaksi.keranjang');
    Route::put('/dashboard/transaksi/{id}', [AdminTransaksiController::class, 'update'])->name('dashboard.transaksi.update');
    Route::get('/dashboard/transaksi/cetakLaporan', [AdminTransaksiController::class, 'cetak'])->name('dashboard.transaksi.cetak');
});

Route::middleware('auth', 'admin')->prefix('dashboard')->group(function () {
    Route::resource('kategori', AdminKategoriController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');

Route::get('/produk/kategori/{kategori}', [ProdukController::class, 'kategori'])->name('produk_kategori');

Route::get('/produk/{nama}', [DetailProdukController::class, 'index'])->name('detail');

Route::post('/produk/create/{harga}/{idproduk}', [DetailProdukController::class, 'create'])->name('storeProduk');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');

Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan');
Route::post('/ulasan/create/{idproduk}/{idkeranjang}', [UlasanController::class, 'create'])->name('ulasan.create');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/keranjang/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang');
Route::delete('/keranjang/{id}', [KeranjangController::class, 'destroy'])->name('keranjang.destroy');

Route::get('/keranjang/checkout/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
Route::post('/keranjang/checkout/transaksi', [TransaksiController::class, 'create'])->name('transaksi.create');

Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::post('/history', [HistoryController::class, 'filter'])->name('history.filter');

Route::get('/cetak/cetak_pdf', [HistoryController::class, 'cetak'])->name('history.cetak');

require __DIR__ . '/auth.php';
