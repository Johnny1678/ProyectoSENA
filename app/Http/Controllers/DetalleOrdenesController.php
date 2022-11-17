<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalle_ordenes;

class DetalleOrdenesController extends Controller
{
    public function save(Request $request)
    {
 
        $detalle_orden = new detalle_ordenes;
  
        $detalle_orden->precio_unidad = $request->Precio_unidad;
        
        $detalle_orden->cantidad = $request->Cantidad;
        
        $detalle_orden->descuento = $request->Descuento;
        
        $detalle_orden->orden_id = $request->Id_orden;

        $detalle_orden->producto_id = $request->Id_producto;

        $detalle_orden->save();
    }
    public function update(Request $request)
    {
        $detalle_orden = detalle_ordenes::find($request->id);
    
        $detalle_orden->precio_unidad = $request->Precio_unidad;
        
        $detalle_orden->cantidad = $request->Cantidad;
        
        $detalle_orden->descuento = $request->Descuento;
        
        $detalle_orden->orden_id = $request->Id_orden;

        $detalle_orden->producto_id = $request->Id_producto;

        $detalle_orden->save();
    }
    public function delete(Request $request)
    {
        $detalle_orden = detalle_ordenes::find($request->id);
        
        $detalle_orden->delete();
    }
    public function index(){
        
        $detalle_orden = detalle_ordenes::all();
        $array=array(
            'status'=>200,
            'msj'=>'consulta exitosa'
        );
        return [
            'data'=>$detalle_orden,
            'response'=>$array
        ];
    }
    public function getSelect(){
        
        $detalle_orden = detalle_ordenes::select('id', 'precio_unidad', 'cantidad', 'descuento')->get();
        return ['data'=>$detalle_orden];
    }
}
