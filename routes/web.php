<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashReceiptController;
use App\Http\Controllers\ClientController;





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




    Route::resource('cash-receipt', CashReceiptController::class);
    Route::get('recibos-de-caja', [CashReceiptController::class, 'index'])->name('cash-receipts');
    Route::get('crear-recibo-de-caja', [CashReceiptController::class, 'create'])->name('create-cash-receipt');
    // Ruta para almacenar un nuevo registro (método store)
    Route::post('/guardar-recibo', [CashReceiptController::class, 'store'])->name('cash-receipt.store');
    
    
    Route::resource('client', ClientController::class);
    Route::get('clientes', [ClientController::class, 'index'])->name('clients');
    Route::get('crear-clientes', [ClientController::class, 'create'])->name('create-client');
    Route::get('seleccionar-cliente', [ClientController::class, 'selectClient'])->name('select-client');
    Route::post('/guardar-cliente', [ClientController::class, 'store'])->name('client.store');


    


});
