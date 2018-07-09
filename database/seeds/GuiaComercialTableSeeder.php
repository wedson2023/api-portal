<?php

use Illuminate\Database\Seeder;
use App\GuiaComercial;

class GuiaComercialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuiaComercial::create([
            'nome' => 'Maranata Espetos',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'formas_pagamento' => null,
            'template' => 'Há mais de 3 anos no mercado Maranata Fabrica de Espetos, produzindo produtos sempre fresquinhos para seu churrasco.'            
        ]);
        
        GuiaComercial::create([
            'nome' => 'Maranata Espetos',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'formas_pagamento' => null,
            'template' => 'Há mais de 3 anos no mercado Maranata Fabrica de Espetos, produzindo produtos sempre fresquinhos para seu churrasco.'            
        ]);
    }
}
