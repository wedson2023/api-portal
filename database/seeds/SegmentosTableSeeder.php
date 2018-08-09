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
            'nome' => 'Cardiologista',
            'categoria_id' => 1
        ]);
        
        Segmentos::create([
            'nome' => 'Pediatra',
            'categoria_id' => 1           
        ]);
        
        Segmentos::create([
            'nome' => 'Plantão de farmácias',
            'categoria_id' => 1           
        ]);
        
        Segmentos::create([
            'nome' => 'Consultório odontologico',
            'categoria_id' => 1           
        ]);
        
        // categoria disk delivery
        
        Segmentos::create([
            'nome' => 'Gás',
            'categoria_id' => 2
        ]);        
        
        Segmentos::create([
            'nome' => 'Água',
            'categoria_id' => 2           
        ]);
        
        Segmentos::create([
            'nome' => 'Lances',
            'categoria_id' => 2           
        ]);
        
        // categoria onde hospedar
        
        Segmentos::create([
            'nome' => 'Hotel',
            'categoria_id' => 3
        ]);        
        
        Segmentos::create([
            'nome' => 'Motel',
            'categoria_id' => 3           
        ]);
        
        Segmentos::create([
            'nome' => 'Pousada',
            'categoria_id' => 3           
        ]);
        
        Segmentos::create([
            'nome' => 'Kit-net',
            'categoria_id' => 3           
        ]);
        
        // categoria onde comer
        
        Segmentos::create([
            'nome' => 'Churrascaria',
            'categoria_id' => 4
        ]);        
        
        Segmentos::create([
            'nome' => 'Restaurante',
            'categoria_id' => 4           
        ]);
        
        Segmentos::create([
            'nome' => 'Pizzaria',
            'categoria_id' => 4           
        ]);
        
        Segmentos::create([
            'nome' => 'Pit-dog',
            'categoria_id' => 4           
        ]);
        
        Segmentos::create([
            'nome' => 'Lanchonete',
            'categoria_id' => 4           
        ]);
        
        Segmentos::create([
            'nome' => 'Espetinho',
            'categoria_id' => 4           
        ]);
        
        // categoria transportes
        
        Segmentos::create([
            'nome' => 'Coletivo',
            'categoria_id' => 5
        ]);        
        
        Segmentos::create([
            'nome' => 'Moto taxí',
            'categoria_id' => 5           
        ]);
        
        Segmentos::create([
            'nome' => 'Ônibus',
            'categoria_id' => 5           
        ]);
        
        Segmentos::create([
            'nome' => 'Taxí',
            'categoria_id' => 5           
        ]);
        
        Segmentos::create([
            'nome' => 'Van',
            'categoria_id' => 5           
        ]);
        
         // categoria classificados
        
        Segmentos::create([
            'nome' => 'Acompanhantes',
            'categoria_id' => 6
        ]);        
        
        Segmentos::create([
            'nome' => 'Empregos',
            'categoria_id' => 6           
        ]);
        
        Segmentos::create([
            'nome' => 'Imóveis',
            'categoria_id' => 6           
        ]);
        
        Segmentos::create([
            'nome' => 'Serviços e produtos',
            'categoria_id' => 6           
        ]);
        
        Segmentos::create([
            'nome' => 'Veiculos',
            'categoria_id' => 6           
        ]);
        
         // categoria outros
        
        Segmentos::create([
            'nome' => 'Aeroporto',
            'categoria_id' => 7
        ]);        
        
        Segmentos::create([
            'nome' => 'Ação social',
            'categoria_id' => 7           
        ]);
        
        Segmentos::create([
            'nome' => 'Feiras livres',
            'categoria_id' => 7           
        ]);
        
        Segmentos::create([
            'nome' => 'Associações',
            'categoria_id' => 7           
        ]);
        
        Segmentos::create([
            'nome' => 'Mercado municipal',
            'categoria_id' => 7           
        ]);
        
        Segmentos::create([
            'nome' => 'Sindicatos',
            'categoria_id' => 7           
        ]);
        
        Segmentos::create([
            'nome' => 'Telefones úteis',
            'categoria_id' => 7           
        ]);
        
        Segmentos::create([
            'nome' => 'Gastronomia',
            'categoria_id' => 7           
        ]);
        
        Segmentos::create([
            'nome' => 'Agência turismo',
            'categoria_id' => 7           
        ]);
        
        Segmentos::create([
            'nome' => 'Locadora de carros',
            'categoria_id' => 7           
        ]);
    }
}
