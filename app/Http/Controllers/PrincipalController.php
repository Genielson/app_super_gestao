<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;

class PrincipalController extends Controller
{
    public function principal(){

        $motivo_contatos = MotivoContato::all();

        return view('site.principal',['motivo_contatos'=>$motivo_contatos]);
    }

    public function teste(){
        $p = 'Genielson';
        $r = 'Leal';
        return view('site.app',['nome'=>$p,'sobrenome'=>$r]);
        //return view('site.app'.compact('p','r'));
    }
}
