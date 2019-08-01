<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Nivel, Usuario};

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
        return view('index', compact('usuarios'));
    }

    public function create(){
        $niveis = Nivel::all();
        return view('from', compact('niveis'));//niveis seria o nome da variavel sem o cifrao
    }

    public function store(Request $request){
        
        // $usuario = Usuario::create([
        //     'nome' => $request->nome,
        //     'email' => $request->email,
        //     'data_nascimento'=> $request->data_nascimento,
        //     'nivel_id'=> $request->nivel_id
        // ]);

        Usuario::create($request->all());

        return redirect('/');
        
    }

    public function edit($id) {
            $usuario = Usuario::findOrFail($id);
            $niveis=Nivel::all();
            return view('from', compact('usuario','niveis'));


    }

    public function update(Request $request, $id){

        $usuario = Usuario::findOrFail($id);

        return $request->all();
        //$usuario->update([
        //  'nome' => $request->nome,
        //     'email' => $request->email,
        //     'data_nascimento'=> $request->data_nascimento,
        //     'nivel_id'=> $request->nivel_id
        // ]);

        Usuario::update($request->all());

        return redirect('/');
    }

    public function soma($a, $b){
        
        
        return 'Soma: '.($a+$b);
    }
}
