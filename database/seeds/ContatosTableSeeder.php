<?php

use Illuminate\Database\Seeder;
use App\contato;
class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        contato::create([
           'nome' => 'Wedson', 
           'email' => 'wedson_cross@hotmail.com', 
           'telefone' => '81 997083446', 
           'estado' => 'pernambuco', 
           'cidade' => 'agrestina', 
           'mensagem' => 'minha mensagem é essa', 
        ]);
        
        contato::create([
           'nome' => 'candido', 
           'email' => 'candido_cross@hotmail.com', 
           'telefone' => '81 997083446', 
           'estado' => 'pernambuco', 
           'cidade' => 'agrestina', 
           'mensagem' => 'minha mensagem é essa', 
        ]);
    }
}
