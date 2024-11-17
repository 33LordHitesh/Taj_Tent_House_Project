<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BillController;

Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');
Route::get('/materials/{id}', [MaterialController::class, 'show'])->name('materials.show');
Route::get('/order', [OrderController::class, 'create'])->middleware(['auth', 'verified'])->name('order.create');
Route::post('/order.store', [OrderController::class, 'store'])->name('order.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/callback', [ContactController::class, 'storeCallback'])->name('store.callback');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/payment', [OrderController::class, 'payment'])->name('payment');
Route::post('/show-bill', [OrderController::class, 'showBill'])->name('show.bill');
// Route::post('/show-bill', [BillController::class, 'showBill'])->name('show.bill');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
