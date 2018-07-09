<?php

use Illuminate\Database\Seeder;
use App\Galeria;
class GaleriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galeria::create([
            'nome' => '01.jpg', 
            'guia_id' => 1
        ]);
        
        Galeria::create([
            'nome' => '02.jpg', 
            'guia_id' => 1
        ]);
        
        Galeria::create([
            'nome' => '03.jpg', 
            'guia_id' => 1
        ]);
        
        Galeria::create([
            'nome' => '04.jpg', 
            'guia_id' => 1
        ]);
        
        Galeria::create([
            'nome' => '05.jpg', 
            'guia_id' => 1
        ]);
        
        Galeria::create([
            'nome' => '06.jpg', 
            'guia_id' => 1
        ]);
        
        Galeria::create([
            'nome' => '07.jpg', 
            'guia_id' => 1
        ]);
        
        Galeria::create([
            'nome' => '08.jpg', 
            'guia_id' => 1
        ]);
    }
}
