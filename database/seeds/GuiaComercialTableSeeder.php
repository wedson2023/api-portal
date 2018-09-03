<?php

use Illuminate\Database\Seeder;
use App\guiaComercial;

class GuiaComercialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        guiaComercial::create([
            'nome' => 'Maranata Espetos',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'formas_pagamento' => null,
            'cidade' => 'Agrestina',
            'segmento_id' => 17,
            'template' => 'Há mais de 3 anos no mercado Maranata Fabrica de Espetos, produzindo produtos sempre fresquinhos para seu churrasco.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'Degraus Restaurantes 01',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 35,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'Degraus Restaurantes 02',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 35,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'Degraus Restaurantes 03',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 35,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'Degraus Restaurantes 04',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 35,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'Degraus Restaurantes 05',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 35,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'Degraus Restaurantes 06',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 35,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'wedson webdesigner',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa01.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 24,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'wedson webdesigner',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa02.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 42,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'wedson webdesigner',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa03.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 24,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'wedson webdesigner',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa04.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 24,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'wedson webdesigner',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa05.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 24,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'wedson webdesigner',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa06.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 24,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'wedson webdesigner',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa07.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 24,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'wedson webdesigner',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa08.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 24,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'wedson webdesigner',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa09.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 24,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'wedson webdesigner',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa10.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 24,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'wedson webdesigner',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa11.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 24,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'wedson webdesigner',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa12.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 24,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'Parque Simba',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa12.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 38,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'Parque Simba',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => 'capa12.jpg',
            'destaque' => true,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 38,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'Universidade e Cursos',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => null,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 39,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
        
        guiaComercial::create([
            'nome' => 'Universidade e Cursos',
            'endereco' => 'Av. Florianópolis, 492 A setor bandeirante - Araguaina - TO',
            'telefones' => '(35) 3412 - 4050 / 99112 - 0303 / 98123 - 0214',
            'horario' => 'De segunda a sexta de 13 as 23 horas',
            'capa' => null,
            'formas_pagamento' => null,
            'cidade' => 'Estreito',
            'segmento_id' => 39,
            'template' => 'Informações sobre restaurantes, bares, cafeterias, pubs entre outros.'            
        ]);
    }
}
