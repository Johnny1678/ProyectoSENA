<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedores;

class ProveedoresController extends Controller
{
    //
    public function save(Request $request)
    {
        // Validate the request...
 
        $proveedor = new proveedores;
  
        $proveedor->nombre = $request->Nombre;
        
        $proveedor->correo_electronico = $request->Correo;
        
        $proveedor->telefono = $request->Telefono;
        
        $proveedor->direccion = $request->Direccion;

        $proveedor->save();
    }

}
