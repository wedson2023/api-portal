<?php

use Illuminate\Database\Seeder;
use App\Botoes;

class BotoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Botoes::create([
            'nome' => 'Mídia kit',  
            'arquivo' => null
        ]);
        
        Botoes::create([
            'nome' => 'Destino e Horários',  
            'arquivo' => null
        ]);
        
        Botoes::create([
            'nome' => 'R$ 34.500,00',  
            'arquivo' => null
        ]);
        
        Botoes::create([
            'nome' => 'Relação moto taxí',  
            'arquivo' => null
        ]);
        
        Botoes::create([
            'nome' => 'Mais detalhes',  
            'arquivo' => null
        ]);
        
        Botoes::create([
            'nome' => 'Itinerante e horários',  
            'arquivo' => 'arquivo.pdf'
        ]);
        
        Botoes::create([
            'nome' => 'Promoção',  
            'arquivo' => null
        ]);
        
    }
}
