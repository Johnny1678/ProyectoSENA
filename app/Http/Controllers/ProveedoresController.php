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

    
    public function update(Request $request)
    {
        $proveedor = proveedores::find($request->id);
 
        $proveedor->nombre = $request->Nombre;
        
        $proveedor->correo_electronico = $request->Correo;
        
        $proveedor->telefono = $request->Telefono;
        
        $proveedor->direccion = $request->Direccion;

        $proveedor->save();

    }
    public function delete(Request $request)
    {
        $proveedor = proveedores::find($request->id);
        
        $proveedor->delete();
    }

    public function index(){
        
        $proveedor = proveedores::all();
        $array=array(
            'status'=>200,
            'msj'=>'consulta exitosa'
        );
        return [
            'data'=>$proveedor,
            'response'=>$array
        ];
    }

    public function getSelect(){
        
        $proveedor = proveedores::select('id', 'nombre', 'correo_electronico', 'telefono', 'direccion')->get();
        return ['data'=>$proveedor];
    }


}
