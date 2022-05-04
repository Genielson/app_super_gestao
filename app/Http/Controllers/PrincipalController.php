<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        return view('site.principal');
    }

    public function teste(){
        $p = 'Genielson';
        $r = 'Leal';
        return view('site.app',['nome'=>$p,'sobrenome'=>$r]);
        //return view('site.app'.compact('p','r'));
    }
}
