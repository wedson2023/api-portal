<?php

use Illuminate\Database\Seeder;
use App\segmentos;

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
        
        segmentos::create([
            'nome' => 'Cardiologista',
            'categoria_id' => 1
        ]);
        
        segmentos::create([
            'nome' => 'Pediatra',
            'categoria_id' => 1           
        ]);
        
        segmentos::create([
            'nome' => 'Plantão de farmácias',
            'categoria_id' => 1           
        ]);
        
        segmentos::create([
            'nome' => 'Consultório odontologico',
            'categoria_id' => 1           
        ]);
        
        // categoria disk delivery
        
        segmentos::create([
            'nome' => 'Gás',
            'categoria_id' => 2
        ]);        
        
        segmentos::create([
            'nome' => 'Água',
            'categoria_id' => 2           
        ]);
        
        segmentos::create([
            'nome' => 'Lances',
            'categoria_id' => 2           
        ]);
        
        // categoria onde hospedar
        
        segmentos::create([
            'nome' => 'Hotel',
            'categoria_id' => 3
        ]);        
        
        segmentos::create([
            'nome' => 'Motel',
            'categoria_id' => 3           
        ]);
        
        segmentos::create([
            'nome' => 'Pousada',
            'categoria_id' => 3           
        ]);
        
        segmentos::create([
            'nome' => 'Kit-net',
            'categoria_id' => 3           
        ]);
        
        // categoria onde comer
        
        segmentos::create([
            'nome' => 'Churrascaria',
            'categoria_id' => 4
        ]);        
        
        segmentos::create([
            'nome' => 'Restaurante',
            'categoria_id' => 4           
        ]);
        
        segmentos::create([
            'nome' => 'Pizzaria',
            'categoria_id' => 4           
        ]);
        
        segmentos::create([
            'nome' => 'Pit-dog',
            'categoria_id' => 4           
        ]);
        
        segmentos::create([
            'nome' => 'Lanchonete',
            'categoria_id' => 4           
        ]);
        
        segmentos::create([
            'nome' => 'Espetinho',
            'categoria_id' => 4           
        ]);
        
        // categoria transportes
        
        segmentos::create([
            'nome' => 'Coletivo',
            'categoria_id' => 5
        ]);        
        
        segmentos::create([
            'nome' => 'Moto taxí',
            'categoria_id' => 5           
        ]);
        
        segmentos::create([
            'nome' => 'Ônibus',
            'categoria_id' => 5           
        ]);
        
        segmentos::create([
            'nome' => 'Taxí',
            'categoria_id' => 5           
        ]);
        
        segmentos::create([
            'nome' => 'Van',
            'categoria_id' => 5           
        ]);
        
         // categoria classificados
        
        segmentos::create([
            'nome' => 'Acompanhantes',
            'categoria_id' => 6
        ]);        
        
        segmentos::create([
            'nome' => 'Empregos',
            'categoria_id' => 6           
        ]);
        
        segmentos::create([
            'nome' => 'Imóveis',
            'categoria_id' => 6           
        ]);
        
        segmentos::create([
            'nome' => 'Serviços e produtos',
            'categoria_id' => 6           
        ]);
        
        segmentos::create([
            'nome' => 'Veiculos',
            'categoria_id' => 6           
        ]);
        
         // categoria outros
        
        segmentos::create([
            'nome' => 'Aeroporto',
            'categoria_id' => 7
        ]);        
        
        segmentos::create([
            'nome' => 'Ação social',
            'categoria_id' => 7           
        ]);
        
        segmentos::create([
            'nome' => 'Feiras livres',
            'categoria_id' => 7           
        ]);
        
        segmentos::create([
            'nome' => 'Associações',
            'categoria_id' => 7           
        ]);
        
        segmentos::create([
            'nome' => 'Mercado municipal',
            'categoria_id' => 7           
        ]);
        
        segmentos::create([
            'nome' => 'Sindicatos',
            'categoria_id' => 7           
        ]);
        
        segmentos::create([
            'nome' => 'Telefones úteis',
            'categoria_id' => 7           
        ]);
        
        segmentos::create([
            'nome' => 'Gastronomia',
            'categoria_id' => 7           
        ]);
        
        segmentos::create([
            'nome' => 'Agência turismo',
            'categoria_id' => 7           
        ]);
        
        segmentos::create([
            'nome' => 'Locadora de carros',
            'categoria_id' => 7           
        ]);
        
        segmentos::create([
            'nome' => 'Pontos turisticos',
            'categoria_id' => 7           
        ]);
        
        segmentos::create([
            'nome' => 'Universidades e cursos',
            'categoria_id' => 7           
        ]);
    }
}
