<?php

use Illuminate\Database\Seeder;
use App\Categorias;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorias::create([
            'nome' => 'guia médico'           
        ]);
        
        Categorias::create([
            'nome' => 'disk delivery'           
        ]);
        
        Categorias::create([
            'nome' => 'onde hospedar'           
        ]);
        
        Categorias::create([
            'nome' => 'onde comer'           
        ]);
        
        Categorias::create([
            'nome' => 'transportes'           
        ]);
        
        Categorias::create([
            'nome' => 'classificados'           
        ]);
        
        Categorias::create([
            'nome' => 'outros'           
        ]);
    }
}
