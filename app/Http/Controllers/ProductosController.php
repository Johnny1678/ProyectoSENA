<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

class ProductosController extends Controller
{
    public function save(Request $request)
    {
 
        $producto = new productos;
  
        $producto->nombre = $request->Nombre;
        
        $producto->precio_unidad = $request->PrecioUnidad;
        
        $producto->stock = $request->Stock;
        
        $producto->unidades_en_orden = $request->Unidades_en_orden;

        $producto->proveedor_id = $request->Id_proveedor;
        
        $producto->categoria_id = $request->Id_categoria;

        $producto->save();
    }

    public function update(Request $request)
    {
        $producto = productos::find($request->id);

        $producto->nombre = $request->Nombre;
        
        $producto->precio_unidad = $request->PrecioUnidad;
        
        $producto->stock = $request->Stock;
        
        $producto->unidades_en_orden = $request->Unidades_en_orden;

        $producto->proveedor_id = $request->Id_proveedor;
        
        $producto->categoria_id = $request->Id_categoria;

        $producto->save();
    }
    public function delete(Request $request)
    {
        $producto = productos::find($request->id);
        
        $producto->delete();
    }
    
    public function index(){
        
        $producto = productos::all();
        $array=array(
            'status'=>200,
            'msj'=>'consulta exitosa'
        );
        return [
            'data'=>$producto,
            'response'=>$array
        ];
    }
    public function getSelect(){
        
        $producto = productos::select('id', 'nombre', 'precio_unidad', 'stock',
        'unidades_en_orden',)->get();
        return ['data'=>$producto];
    }
}
