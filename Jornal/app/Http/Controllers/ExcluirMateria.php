<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jornal;

class ExcluirMateria extends Controller
{
    public function excluirmateria(Request $request){
        $id = $request->input('id');
    
    // Localize o registro pelo ID
    $jornal = Jornal::find($id);
    
    if ($jornal) {
        // Se encontrado, exclua o registro
        $jornal->delete();
        return redirect()->back()->with('auth', true);
    } else {
        // Se não encontrado, retorne um erro
        return response()->json(['error' => 'Registro não encontrado'], 404);
    }
    }
}
