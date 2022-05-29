<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        
        /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        $contato->save();
        */

        //$contato = new SiteContato();
        //$contato->fill($request->all());
        //$contato->save();

        $motivo_contatos = [
            '1'=>'Duvida',
            '2'=>'Elogio',
            '3'=>'Reclamacao'
        ];

        return view('site.contato',['motivo_contatos'=>$motivo_contatos]);
    }

    public function salvar(Request $request){
        // realizar a validação
        $request->validate([
            'nome'=> 'required|min:3|max:40' ,
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);
        SiteContato::create($request->all());
    }
}
