<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;

class MateriasController extends Controller
{
    public function materias(Request $request){
        $materias = DB::select('SELECT nome_materia, resumo_materia, id, imagem_capa, categoria FROM jornal ORDER BY id DESC');
        $agent = new Agent();
        $i = "col-md-6";
        if ($agent->isMobile()) {
            
            $i = "col-md-12";
         } else {
            
        }

        return view("site.materias", ["materias"=> $materias, "i" => $i]);
    }
}
