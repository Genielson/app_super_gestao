<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = "Genielson 100";
        $fornecedor->site = "www.genielson.com.br";
        $fornecedor->uf = "PI";
        $fornecedor->email =  "genielsonl44@gmail.com";
        $fornecedor->save();

        Fornecedor::create([

            'nome' => 'Genielson 200',
            'site' => 'www.geeee.com',
            'uf'=>'CE',
            'email'=>'ge.nielson@hotmail.com'

        ]);
    }
}
