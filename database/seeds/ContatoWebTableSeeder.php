<?php

use Illuminate\Database\Seeder;
use App\Contato_web;

class ContatoWebTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contato_web::create([
            'nome' => 'portaldoguia@hotmail.com',      
            'url' => 'http://portaldoguia.com.br/',
            'guia_id' => 1
        ]);
        
        Contato_web::create([
            'nome' => 'portaldoguia@hotmail.com',      
            'url' => 'http://portaldoguia.com.br/',
            'guia_id' => 1
        ]);
        
        Contato_web::create([
            'nome' => 'www.facebook.com/maranataespetos',      
            'url' => 'http://facebook.com/maranataespetos',
            'guia_id' => 1
        ]);
        
        Contato_web::create([
            'nome' => 'portaldoguia@hotmail.com',      
            'url' => 'http://portaldoguia.com.br/',
            'guia_id' => 2
        ]);
        
        Contato_web::create([
            'nome' => 'portaldoguia@hotmail.com',      
            'url' => 'http://portaldoguia.com.br/',
            'guia_id' => 2
        ]);
        
        Contato_web::create([
            'nome' => 'www.facebook.com/maranataespetos',      
            'url' => 'http://facebook.com/maranataespetos',
            'guia_id' => 2
        ]);
    }
}
