<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorias;

class CategoriasController extends Controller {

    public function save(Request $request)  {
        $categoria = new categorias;
  
        $categoria->nombre_categoria = $request->Categoria;
 
        $categoria->save();
    }

    public function update(Request $request) {
        $categoria = categorias::find($request->id);
 
        $categoria->nombre_categoria = $request->Categoria;
        
        $categoria->save();

    }

    public function delete(Request $request){
        $categoria = categorias::find($request->id);
        
        $categoria->delete();
    }

    public function index(){
        
        $categoria = categorias::all();
        $array=array(
            'status'=>200,
            'msj'=>'consulta exitosa'
        );
        return [
            'data'=>$categoria,
            'response'=>$array
        ];
    }
    public function getSelect(){
        
        $categoria = categorias::select('id', 'nombre_categoria')->get();
        return ['data'=>$categoria];
    }

    

}
