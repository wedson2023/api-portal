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
            'nome' => 'Onde comer'           
        ]);
        
        Categorias::create([
            'nome' => 'Onde hospedar'           
        ]);
        
        Categorias::create([
            'nome' => 'Shows e Baladas'           
        ]);
    }
}
