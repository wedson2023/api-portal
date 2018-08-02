<?php

use Illuminate\Database\Seeder;
use App\Segmentos;

class SegmentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        // categoria guia medico
        
        Segmentos::create([
            'nome' => 'cardiologista',
            'categoria_id' => 1
        ]);
        
        Segmentos::create([
            'nome' => 'pediatra',
            'categoria_id' => 1           
        ]);
        
        Segmentos::create([
            'nome' => 'plantão de farmácias',
            'categoria_id' => 1           
        ]);
        
        Segmentos::create([
            'nome' => 'consultório odontologico',
            'categoria_id' => 1           
        ]);
        
        // categoria disk delivery
        
        Segmentos::create([
            'nome' => 'gás',
            'categoria_id' => 2
        ]);        
        
        Segmentos::create([
            'nome' => 'água',
            'categoria_id' => 2           
        ]);
        
        Segmentos::create([
            'nome' => 'lances',
            'categoria_id' => 2           
        ]);
        
        // categoria onde hospedar
        
        Segmentos::create([
            'nome' => 'hotel',
            'categoria_id' => 3
        ]);        
        
        Segmentos::create([
            'nome' => 'motel',
            'categoria_id' => 3           
        ]);
        
        Segmentos::create([
            'nome' => 'pousada',
            'categoria_id' => 3           
        ]);
        
        Segmentos::create([
            'nome' => 'kit-net',
            'categoria_id' => 3           
        ]);
        
        // categoria onde comer
        
        Segmentos::create([
            'nome' => 'churrascaria',
            'categoria_id' => 4
        ]);        
        
        Segmentos::create([
            'nome' => 'restaurante',
            'categoria_id' => 4           
        ]);
        
        Segmentos::create([
            'nome' => 'pizzaria',
            'categoria_id' => 4           
        ]);
        
        Segmentos::create([
            'nome' => 'pit-dog',
            'categoria_id' => 4           
        ]);
        
        Segmentos::create([
            'nome' => 'lanchonete',
            'categoria_id' => 4           
        ]);
        
        Segmentos::create([
            'nome' => 'espetinho',
            'categoria_id' => 4           
        ]);
        
        // categoria transportes
        
        Segmentos::create([
            'nome' => 'coletivo',
            'categoria_id' => 5
        ]);        
        
        Segmentos::create([
            'nome' => 'moto taxí',
            'categoria_id' => 5           
        ]);
        
        Segmentos::create([
            'nome' => 'ônibus',
            'categoria_id' => 5           
        ]);
        
        Segmentos::create([
            'nome' => 'taxí',
            'categoria_id' => 5           
        ]);
        
        Segmentos::create([
            'nome' => 'van',
            'categoria_id' => 5           
        ]);
        
         // categoria classificados
        
        Segmentos::create([
            'nome' => 'acompanhantes',
            'categoria_id' => 6
        ]);        
        
        Segmentos::create([
            'nome' => 'empregos',
            'categoria_id' => 6           
        ]);
        
        Segmentos::create([
            'nome' => 'imóveis',
            'categoria_id' => 6           
        ]);
        
        Segmentos::create([
            'nome' => 'serviços e produtos',
            'categoria_id' => 6           
        ]);
        
        Segmentos::create([
            'nome' => 'veiculos',
            'categoria_id' => 6           
        ]);
        
         // categoria outros
        
        Segmentos::create([
            'nome' => 'aeroporto',
            'categoria_id' => 7
        ]);        
        
        Segmentos::create([
            'nome' => 'ação social',
            'categoria_id' => 7           
        ]);
        
        Segmentos::create([
            'nome' => 'feiras livres',
            'categoria_id' => 7           
        ]);
        
        Segmentos::create([
            'nome' => 'associações',
            'categoria_id' => 7           
        ]);
        
        Segmentos::create([
            'nome' => 'mercado municipal',
            'categoria_id' => 7           
        ]);
        
        Segmentos::create([
            'nome' => 'sindicatos',
            'categoria_id' => 7           
        ]);
        
        Segmentos::create([
            'nome' => 'telefones úteis',
            'categoria_id' => 7           
        ]);
    }
}
