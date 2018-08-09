<?php

use Illuminate\Database\Seeder;
use App\botoes;

class BotoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        botoes::create([
            'nome' => 'Mídia kit',  
            'arquivo' => null
        ]);
        
        botoes::create([
            'nome' => 'Destino e Horários',  
            'arquivo' => null
        ]);
        
        botoes::create([
            'nome' => 'R$ 34.500,00',  
            'arquivo' => null
        ]);
        
        botoes::create([
            'nome' => 'Relação moto taxí',  
            'arquivo' => null
        ]);
        
        botoes::create([
            'nome' => 'Mais detalhes',  
            'arquivo' => null
        ]);
        
        botoes::create([
            'nome' => 'Itinerante e horários',  
            'arquivo' => 'arquivo.pdf'
        ]);
        
        botoes::create([
            'nome' => 'Promoção',  
            'arquivo' => null
        ]);
        
    }
}
