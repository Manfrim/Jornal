<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdicionarPortifolio extends Controller
{
    public function adicionarpotifolio(Request $request){
        $pdf = $request->file('pdf');
        $pdfContent = file_get_contents($pdf->getRealPath());
        $titulo = $request->input('nome');
        $capa = $request->input('imagem_capa');
        $descricao = $request->input('descricao');
        
        DB::table('portifolio_pdf')->insert([
            'nome'=> $titulo,
            'pdf' => $pdfContent, 
            'imagem_capa' => $capa,
            'descricao' => $descricao
        ]);
        return redirect()->back()->with('auth', true);
    }
}
