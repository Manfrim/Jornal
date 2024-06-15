<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use ReflectionFunctionAbstract;

class AdicionarPensamentoDia extends Controller
{
    public function pensamentodia(Request $request){
        $pensamentodia = $request->input('pensamentodia');
        $autor = $request->input('nomeautor');
        DB::table('pensamento_dia')->insert([
            'pensamento_do_dia'=> $pensamentodia,
            'nome_autor' => $autor
        ]);
        return redirect()->back()->with('auth', true);
    }
}
