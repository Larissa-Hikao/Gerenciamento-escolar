<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Nivel, Usuario};

class UsuarioController extends Controller
{
    public function index(){
        return view('index');
    }

    public function create(){
        $niveis = Nivel::all();
        return view('from', compact('niveis'));//niveis seria o nome da variavel sem o cifrao
    }

    public function store(Request $request){
        
        $usuario = Usuario::create([
            'nome'=> $request->nome,
            'email'=> $request->email,
            'data_nascimento'=> $request->data_nascimento,
            'nivel_id'=> $request->nivel_id
        ]);

        return $usuario;
        
    }



    public function soma($a, $b){
        
        
        return 'Soma: '.($a+$b);
    }
}
