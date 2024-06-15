<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LerMateriaController extends Controller
{
   public function LerMateria(Request $request, $id){
      $materia = DB::select("SELECT * FROM jornal where id = $id order by id");

        return view('site.Lermateria', ['materia'=> $materia]);
   }
}
