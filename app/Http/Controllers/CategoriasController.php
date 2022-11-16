<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorias;

class CategoriasController extends Controller

{
    //
    public function save(Request $request)
    {
        // Validate the request...
 
        $categoria = new categorias;
  
        $categoria->nombre_categoria = $request->Categoria;
 
        $categoria->save();
    }


}
