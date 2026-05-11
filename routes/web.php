<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\EventController as AdminEventController;

/*
|--------------------------------------------------------------------------
| Halaman Home
|--------------------------------------------------------------------------
| Menggunakan HomeController agar data events dan categories
| bisa dikirim ke welcome.blade.php
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index']);

// Halaman detail event
Route::get('/event-detail', [EventController::class, 'show'])
    ->name('event.detail');

// Halaman checkout
Route::get('/checkout', [CheckoutController::class, 'index'])
    ->name('checkout');

// Proses checkout / simpan transaksi
Route::post('/checkout/store', [CheckoutController::class, 'store'])
    ->name('checkout.store');

// Halaman tiket
Route::get('/ticket', [TicketController::class, 'index'])
    ->name('ticket');

// Dashboard Admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

// Laporan transaksi
Route::get('/admin/transactions', [TransactionController::class, 'index'])
    ->name('admin.transactions');

// Kategori
Route::get('/admin/categories', [CategoryController::class, 'index'])
    ->name('admin.categories');

// Halaman umum
Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('contact');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

// Route resource admin event
Route::prefix('admin')->name('admin.')->group(function () {

    Route::resource('events', AdminEventController::class);

});