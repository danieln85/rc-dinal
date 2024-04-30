<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashReceiptController;


Route::resource('cash-receipt', CashReceiptController::class);
Route::get('recibos-de-caja', [CashReceiptController::class, 'index'])->name('cash-receipts');
Route::get('crear-recibos-de-caja', [CashReceiptController::class, 'create'])->name('create-cash-receipts');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
