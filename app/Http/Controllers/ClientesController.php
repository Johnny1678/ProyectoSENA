<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;

class ClientesController extends Controller
{
    //
    public function save(Request $request)
    {
        // Validate the request...
 
        $cliente = new clientes;
  
        $cliente->nombre = $request->Nombre;
        
        $cliente->direccion = $request->Direccion;
        
        $cliente->telefono = $request->Telefono;
        
        $cliente->correo_electronico = $request->Correo;

        $cliente->ciudad = $request->Ciudad;

        $cliente->region = $request->Region;

        $cliente->save();
    }

    public function update(Request $request)
    {
        $cliente = clientes::find($request->id);
 
        $cliente->nombre = $request->Nombre;
        
        $cliente->direccion = $request->Direccion;
        
        $cliente->telefono = $request->Telefono;
        
        $cliente->correo_electronico = $request->Correo;

        $cliente->ciudad = $request->Ciudad;

        $cliente->region = $request->Region;

        $cliente->save();

    }
    public function delete(Request $request)
    {
        $cliente = clientes::find($request->id);
        
        $cliente->delete();
    }
}
