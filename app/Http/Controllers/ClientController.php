<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Client::all();
        return view('clients', compact('clientes'));
    }

    public function selectClient()
    {
        $clientes = Client::all();
        return view('select-client', compact('clientes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ultimoId = Client::max('id');
        return view('create-client', compact('ultimoId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        
        $cliente = new Client();

    // Asignar los valores de los campos a la instancia del modelo

    $cliente->nombre_cliente = $request->input('nombre_cliente');
    $cliente->email_cliente = $request->input('email_cliente');
    $cliente->nit = $request->input('nit');
    $cliente->creado_por = $request->input('creado_por');

    // Guardar el modelo en la base de datos
    $cliente->save();

    session()->flash('success', '¡El Cliente se creó exitosamente!');


    // Redireccionar a una ruta después de guardar los datos
    return redirect()->route('clients');
    }

    /**
     * Display the specified resource.
     */
    public function show($cliente_id)
    {
        $cliente = Client::find($cliente_id);
        if (!$cliente) {
            // Manejar el caso en el que el cliente no existe
        }
    
        return view('show-client', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($cliente_id)
    {
        $cliente = Client::find($cliente_id);
        if (!$cliente) {
            // Manejar el caso en el que el cliente no existe
        }

        return view('edit-client', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $cliente)
{
    // Validar los datos enviados en la solicitud
    $validatedData = $request->validate([
        'nombre_cliente' => 'required|string|max:255',
        'email_cliente' => 'required|string|email|max:100',
        'nit' => 'required|string|max:20',
        // Agrega más reglas de validación según sea necesario para otros campos
    ]);

    // Actualizar los atributos del cliente con los nuevos valores
    $cliente->update($validatedData);

    // Redirigir a una vista de detalles del cliente, por ejemplo
    return redirect()->route('clients')->with('success', 'Cliente actualizado exitosamente');
}

    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
