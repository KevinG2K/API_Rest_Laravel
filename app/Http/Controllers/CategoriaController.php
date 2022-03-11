<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function getCategoria()
    {
        //200 es el status que nos pide json
        return response()->json(Categoria::all(), 200);
    }

    public function getCategoriaId($id)
    {
        $categoria = Categoria::find($id);
        if (is_null($categoria)) {
            return response()->json(['Mensaje' => 'Registro no encontrado'], 404);
        }
        return response()->json($categoria::find($id), 200);
    }

    //enviamos datos con un post
    public function insertCategoria(Request $request)
    {
        $categoria = Categoria::create($request->all());
        return response($categoria, 200);
    }

    public function updateCategoria(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        if (is_null($categoria)) {
            return response()->json(['Mensaje' => 'Registro no encontrado'], 404);
        }
        $categoria->update($request->all());
        return response($categoria, 200);
    }

    public function deleteCategoria($id)
    {
        $categoria = Categoria::find($id);
        if (is_null($categoria)) {
            return response()->json(['Mensaje' => 'Registro no encontrado'], 404);
        }
        $categoria->delete();
        //como eliminamos no podemos hacer return response
        return response()->json(["Mensaje" => "Registro Elimindo"], 200);
    }
}
