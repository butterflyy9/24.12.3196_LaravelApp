<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;

Route::get('/', [HomeController::class, 'index']);

// Halaman detail event
Route::get('/event-detail/{id}', [EventController::class, 'show'])
    ->name('event.detail');

// Halaman checkout
Route::get('/checkout', [CheckoutController::class, 'index'])
    ->name('checkout');

// Proses checkout
Route::post('/checkout/store', [CheckoutController::class, 'store'])
    ->name('checkout.store');

// Halaman tiket
Route::get('/ticket', [TicketController::class, 'index'])
    ->name('ticket');

// Categories
Route::get('/admin/categories', [CategoryController::class, 'index'])
    ->name('admin.categories');

Route::get('/admin/categories/create', [CategoryController::class, 'create'])
    ->name('categories.create');

Route::post('/admin/categories', [CategoryController::class, 'store'])
    ->name('categories.store');

Route::get('/admin/categories/{id}/edit', [CategoryController::class, 'edit'])
    ->name('categories.edit');

Route::put('/admin/categories/{id}', [CategoryController::class, 'update'])
    ->name('categories.update');

Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'])
    ->name('categories.destroy');

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

// Partner
Route::get('/admin/partners', [PartnerController::class, 'index'])
    ->name('partners.index');

Route::get('/admin/partners/create', [PartnerController::class, 'create'])
    ->name('partners.create');

Route::post('/admin/partners', [PartnerController::class, 'store'])
    ->name('partners.store');

Route::get('/admin/partners/{id}/edit', [PartnerController::class, 'edit'])
    ->name('partners.edit');

Route::put('/admin/partners/{id}', [PartnerController::class, 'update'])
    ->name('partners.update');

Route::delete('/admin/partners/{id}', [PartnerController::class, 'destroy'])
    ->name('partners.destroy');


Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::prefix('admin')->name('admin.')->group(function () {

    // Login
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.post');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

    // Route yang diamankan
    Route::middleware(['auth', 'admin'])->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('events', AdminEventController::class);

        Route::get('/transactions', [TransactionController::class, 'index'])
            ->name('transactions.index');
    });
});