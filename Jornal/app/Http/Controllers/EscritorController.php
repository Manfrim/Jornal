<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;



class EscritorController extends Controller
{
    public function escritor(Request $request){
    $agent = new Agent();
        return view("site.escritor");
    }
        
    }

