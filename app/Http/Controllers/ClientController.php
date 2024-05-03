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
        return view('clients', compact('clientes'));
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
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}