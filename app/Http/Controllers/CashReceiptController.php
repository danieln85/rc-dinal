<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CashReceiptRequest;
use App\Models\CobroFac;

class CashReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ultimosCobros = CobroFac::orderBy('numero_rc', 'desc')
                          ->limit(10)
                          ->get();
        return view('cash-receipts', compact('ultimosCobros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ultimoRc = CobroFac::max('numero_rc');

        return view('create-cash-receipt', compact('ultimoRc'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CashReceiptRequest $request)
    {
        $cobroFac = new CobroFac();

    // Asignar los valores de los campos a la instancia del modelo
    $cobroFac->date_cobro = $request->input('date_cobro');
    $cobroFac->numero_rc = $request->input('numero_rc');
    $cobroFac->num_factura = $request->input('num_factura');
    $cobroFac->nombre_cliente = $request->input('nombre_cliente');
    $cobroFac->email_cliente = $request->input('email_cliente');
    $cobroFac->cobro_abono = $request->input('cobro_abono');
    $cobroFac->abono = $request->input('abono');
    $cobroFac->descuento = $request->input('descuento');
    $cobroFac->retencion = $request->input('retencion');
    $cobroFac->devolucion = $request->input('devolucion');
    $cobroFac->metodo_pago = $request->input('metodo_pago');
    $cobroFac->informacion = $request->input('informacion');
    $cobroFac->estado_rc = 'activo';
    $cobroFac->estado_dinero = 'pendiente';
    $cobroFac->cobrado_por = 'David Ojeda';

    // Guardar el modelo en la base de datos
    $cobroFac->save();

    session()->flash('success', '¡El Recibo de caja se creó exitosamente!');


    // Redireccionar a una ruta después de guardar los datos
    return redirect()->route('cash-receipts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        return view('show-cash-receipt');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
