<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdicionaMateria extends Controller
{
    public function adicionamateria(Request $request){
        $nome_materia = $request->input('titulo');
        $resumo_materia = $request->input('resumo');
        $materia_p1 = $request->input('materia_p1');
        $materia_p2 = $request->input('materia_p2');
        $materia_p3 = $request->input('materia_p3');
        $materia_p4 = $request->input('materia_p4');
        $imagem_capa = $request->input('imagem_capa');
        $imagem_1 = $request->input('imagem_1');
        $imagem_2 = $request->input('imagem_2');
        $categoria = $request->input('categoria');
        DB::table('jornal')->insert([
            'nome_materia' => $nome_materia,
            'resumo_materia' => $resumo_materia,
            'materia_p1' => $materia_p1,
            'materia_p2' => $materia_p2,
            'materia_p3' => $materia_p3,
            'materia_p4' => $materia_p4,
            'imagem_capa' => $imagem_capa,
            'imagem_1' => $imagem_1,
            'imagem_2' => $imagem_2,
            'categoria' => $categoria,
        ]);

        return redirect()->back()->with('auth', true);
    }
}
