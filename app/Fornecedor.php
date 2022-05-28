<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores'; // Para o banco de dados reconhecer o nome da tabela
    protected $fillable = ['nome','site','uf','email'];
}
