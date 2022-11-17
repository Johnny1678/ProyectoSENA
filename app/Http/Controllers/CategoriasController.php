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
        return $categoria;
    }

}
