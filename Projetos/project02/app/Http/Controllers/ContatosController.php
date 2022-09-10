<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatosController extends Controller
{
    public function index(Request $request) {
        $contato = $request->all();
        $email = $contato['emailContato'];
        $tipo = $contato['tipoContato'];
        $mensagem = $contato['mensagemContato'];

        return view('site.contatos', 
            ['email'=>$email, 
            'tipo'=>$tipo, 
            'mensagem'=>$mensagem
        ]);       
    }
}
