<?php

use Illuminate\Database\Seeder;
use App\categorias;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categorias::create([
            'nome' => 'guia médico'           
        ]);
        
        categorias::create([
            'nome' => 'disk delivery'           
        ]);
        
        categorias::create([
            'nome' => 'onde hospedar'           
        ]);
        
        categorias::create([
            'nome' => 'onde comer'           
        ]);
        
        categorias::create([
            'nome' => 'transportes'           
        ]);
        
        categorias::create([
            'nome' => 'classificados'           
        ]);
        
        categorias::create([
            'nome' => 'outros'           
        ]);
    }
}
