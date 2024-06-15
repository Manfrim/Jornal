<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Hash;


class PrincipalController extends Controller
{
    public function principal(){
        $pensamento_do_dia = DB::select('SELECT * FROM pensamento_dia ORDER BY id DESC LIMIT 1');
        $agent = new Agent();
        $i = "";

        if ($agent->isMobile()) {
           $ultimos3 = DB::select('SELECT * FROM jornal ORDER BY id DESC LIMIT 1');
           $i = "col-md-5";
        } else {
            $ultimos3 = DB::select('SELECT * FROM jornal ORDER BY id DESC LIMIT 3');
            $i = "col-md-3 mb-4";
        }

        return view("site.index", ["ultimos3" => $ultimos3, "pensamento_do_dia" => $pensamento_do_dia, "i" => $i]);
    }

}
