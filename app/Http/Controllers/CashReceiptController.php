<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CashReceiptRequest;
use App\Models\CobroFac;
use App\Models\Client;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CashReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ultimosCobros = CobroFac::orderBy('numero_rc', 'desc')
        ->paginate(20); // 20 registros por página
        return view('cash-receipts', compact('ultimosCobros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

        return view('create-cash-receipt', compact('ultimoRc'));
    }


    public function selectedClient(Request $request)
    {
        $ultimoRc = CobroFac::max('numero_rc');
        $cliente_id = $request->cliente_id;  
    
        // Recuperar el cliente usando el ID
        $seleccionado = Client::find($cliente_id);
    
        if (!$seleccionado) { // Aquí se debe usar $clienteSeleccionado en lugar de $cliente
            return back()->with('error', 'Cliente no encontrado.');
        }
    
        return view('create-cash-receipt', compact('seleccionado', 'ultimoRc'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(CashReceiptRequest $request)
     {
         // Iniciar una transacción para asegurar la consistencia de los datos
         DB::beginTransaction();
     
         try {
             // Obtener el número de recibo más alto de la base de datos
             $ultimoRc = CobroFac::max('numero_rc');
             
             // Incrementar el número de recibo en 1 para obtener el siguiente número consecutivo
             $numeroConsecutivo = $ultimoRc + 1;
     
             // Crear una nueva instancia del modelo CobroFac
             $cobroFac = new CobroFac();
     
             $cobroFac->date_cobro = Carbon::parse($request->date_cobro)->format('Y-m-d');

    
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
    $cobroFac->cobrado_por = $request->input('cobrado_por');
     
             // Asignar el número de recibo consecutivo
             $cobroFac->numero_rc = $numeroConsecutivo;
     
             // Guardar el modelo en la base de datos
             $cobroFac->save();
     
             // Confirmar la transacción si todo ha ido bien
             DB::commit();
     
             session()->flash('success', '¡El Recibo de caja se creó exitosamente!');
     
             // Redireccionar a una ruta después de guardar los datos
             return redirect()->route('cash-receipts');
         } catch (\Exception $e) {
             // En caso de error, revertir la transacción para evitar inconsistencias en los datos
             DB::rollBack();
     
             // Manejar el error (por ejemplo, mostrar un mensaje de error al usuario)
             session()->flash('error', 'Ha ocurrido un error al crear el Recibo de caja.');
     
             // Redireccionar a una ruta de error
             return redirect()->route('cash-receipts');
         }
     }
    /**
     * Display the specified resource.
     */
     

    public function show($recibo_id)
    {
        $recibo = CobroFac::find($recibo_id);
        if (!$recibo) {
            // Manejar el caso en el que el recibo no existe
        }
    
        return view('show-receipt', compact('recibo'));
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
