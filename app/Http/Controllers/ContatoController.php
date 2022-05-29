<?php

namespace App\Http\Controllers;

use App\MotivoContato;
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

         $motivo_contatos = MotivoContato::all();

        return view('site.contato',['motivo_contatos'=>$motivo_contatos]);
    }

    public function salvar(Request $request){
        // realizar a validação
        $request->validate([
            'nome'=> 'required|min:3|max:40|unique:site_contatos' ,
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ],

        [
            "nome.required"=>"O campo nome precisa ser preenchido",
            "nome.min"=>"O campo nome precisa ter no minimo 3 caracteres",
            "nome.max"=>"O campo nome precisa ter no maximo 40 caracteres",
            "nome.unique"=>"O campo nome precisa ser unico",
            "required" => "O campo :attribute precisa ser preenchido",
            "email" => "O email é obrigatório"
        ]
    
        );
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
