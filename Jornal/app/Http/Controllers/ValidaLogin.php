<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Materia;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ValidaLogin extends Controller
{
    private $credentials;
    private $auth;

    public function valida_login(Request $request){
        $this->credentials = $request->only('email', 'password');
        $auth = Auth::attempt($this->credentials);
        if($auth){
            return redirect()->route('site.editamateria')->with('auth', true);
        }
        else{
            return redirect()->back();
        }
    }
    public function edita_materia(){
        $auth = session('auth');
        return view('site.editormaterias', ['auth' => $auth]);
    }
}

