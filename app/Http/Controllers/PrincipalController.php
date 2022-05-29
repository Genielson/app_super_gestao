<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){

        $motivo_contatos = [
            '1'=>'Duvida',
            '2'=>'Elogio',
            '3'=>'Reclamacao'
        ];

        return view('site.principal',['motivo_contatos'=>$motivo_contatos]);
    }

    public function teste(){
        $p = 'Genielson';
        $r = 'Leal';
        return view('site.app',['nome'=>$p,'sobrenome'=>$r]);
        //return view('site.app'.compact('p','r'));
    }
}
