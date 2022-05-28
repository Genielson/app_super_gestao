<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contato = new SiteContato();
        $contato->nome = " Contato.org";
        $contato->telefone = "866666666";
        $contato->email = "contato@gmail.com";
        $contato->motivo_contato = "Para teste";
        $contato->mensagem = "Teste teste";
        $contato->save();
    }
}
