<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jornal;

class EditarMateria extends Controller
{
    public function editarmateria(Request $request){

        $id = $request->input('id');
        $materia = jornal::find($id);
        if ($materia) {
            // Atualize os valores
            $materia->nome_materia = $request->input('titulo');
            $materia->resumo_materia = $request->input('resumo');
            $materia->materia_p1 = $request->input('materia_p1');
            $materia->materia_p2 = $request->input('materia_p2');
            $materia->materia_p3 = $request->input('materia_p3');
            $materia->materia_p4 = $request->input('materia_p4');
            $materia->imagem_capa = $request->input('imagem_capa');
            $materia->imagem_1 = $request->input('imagem_1');
            $materia->imagem_2 = $request->input('imagem_2');
            $materia->categoria = $request->input('categoria');

            // Salve as alterações
            $materia->save();

            return redirect()->back()->with('auth', true);
        } else {
            return response()->json(['error' => 'Registro não encontrado'], 404);
            
        }

        
    }
}
