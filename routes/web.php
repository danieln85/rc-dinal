<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashReceiptController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PdfController;





Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');




    
    Route::get('recibos-de-caja', [CashReceiptController::class, 'index'])->name('cash-receipts');
    Route::post('crear-recibo-de-caja', [CashReceiptController::class, 'selectedClient'])->name('create-cash-receipt');
    // Ruta para almacenar un nuevo registro (método store)
    Route::post('/guardar-recibo', [CashReceiptController::class, 'store'])->name('cash-receipt.store');
    Route::get('ver-recibo/recibo/{recibo}', [CashReceiptController::class, 'show'])->name('cash-receipt.show');
    

    Route::get('clientes', [ClientController::class, 'index'])->name('clients');
    Route::get('crear-clientes', [ClientController::class, 'create'])->name('create-client');
    Route::get('seleccionar-cliente', [ClientController::class, 'selectClient'])->name('select-client');
    Route::put('actualizar-cliente/{cliente}', [ClientController::class, 'update'])->name('client.update');
    Route::post('/guardar-cliente', [ClientController::class, 'store'])->name('client.store');


    Route::get('ver-cliente/cliente/{cliente}', [ClientController::class, 'show'])->name('client.show');

    Route::get('cliente/{cliente}/edit', [ClientController::class, 'edit'])->name('client.edit');


    Route::get('rc-pdf', [PdfController::class, 'rcPdf'])->name('rc-pdf');
    Route::post('rc-pdf', [PdfController::class, 'rcPdf'])->name('rc-pdf');


});
