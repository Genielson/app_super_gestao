<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

       $msg = isset($nome)?'Cnpj informado':'Não informado';

        return view('app.fornecedor.index');
    }
}
