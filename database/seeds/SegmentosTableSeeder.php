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
        Segmentos::create([
            'nome' => 'Churrascaria',
            'categoria_id' => 1
        ]);
        
        Segmentos::create([
            'nome' => 'Restaurante',
            'categoria_id' => 1           
        ]);
        
        Segmentos::create([
            'nome' => 'Pizzaria',
            'categoria_id' => 1           
        ]);
        
        Segmentos::create([
            'nome' => 'Hotel',
            'categoria_id' => 2
        ]);
        
        Segmentos::create([
            'nome' => 'Motel',
            'categoria_id' => 2           
        ]);
        
        Segmentos::create([
            'nome' => 'Pousada',
            'categoria_id' => 2           
        ]);
    }
}
