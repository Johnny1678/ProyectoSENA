<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ordenes;

class OrdenesController extends Controller
{
        public function save(Request $request)
        {
     
            $orden= new ordenes;
      
            $orden->fecha_orden = $request->Fecha_orden;
            
            $orden->fecha_envio = $request->Fecha_envio;
            
            $orden->nombre_ciudad = $request->Nombre_ciudad;
            
            $orden->nombre_region = $request->Nombre_region;
    
            $orden->valor_total_orden = $request->Valor_total_orden;
            
            $orden->cliente_id = $request->Id_cliente;

            $orden->producto_id = $request->Id_producto;
    
            $orden->save();
        }

        public function update(Request $request)
        {
            $orden = ordenes::find($request->id);
     
            $orden->fecha_orden = $request->Fecha_orden;
            
            $orden->fecha_envio = $request->Fecha_envio;
            
            $orden->nombre_ciudad = $request->Nombre_ciudad;
            
            $orden->nombre_region = $request->Nombre_region;
    
            $orden->valor_total_orden = $request->Valor_total_orden;
            
            $orden->cliente_id = $request->Id_cliente;

            $orden->producto_id = $request->Id_producto;
    
            $orden->save();
        }
        public function delete(Request $request)
        {
            $orden = ordenes::find($request->id);
            
            $orden->delete();
        }

        public function index(){
        
            $orden = ordenes::all();
            $array=array(
                'status'=>200,
                'msj'=>'consulta exitosa'
            );
            return [
                'data'=>$orden,
                'response'=>$array
            ];
        }
}
