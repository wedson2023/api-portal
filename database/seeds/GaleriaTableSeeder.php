<?php

use Illuminate\Database\Seeder;
use App\galeria;
class GaleriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        galeria::create([
            'nome' => '01.jpg', 
            'guia_id' => 1
        ]);
        
        galeria::create([
            'nome' => '02.jpg', 
            'guia_id' => 1
        ]);
        
        galeria::create([
            'nome' => '03.jpg', 
            'guia_id' => 1
        ]);
        
        galeria::create([
            'nome' => '04.jpg', 
            'guia_id' => 1
        ]);
        
        galeria::create([
            'nome' => '05.jpg', 
            'guia_id' => 1
        ]);
        
        galeria::create([
            'nome' => '06.jpg', 
            'guia_id' => 1
        ]);
        
        galeria::create([
            'nome' => '07.jpg', 
            'guia_id' => 1
        ]);
        
        galeria::create([
            'nome' => '08.jpg', 
            'guia_id' => 1
        ]);
    }
}
