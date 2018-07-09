<?php

use Illuminate\Database\Seeder;
use App\Eventos;
class EventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eventos::create([
            'nome' => 'Felipe e Matheus',
            'local' => 'Local: 23h - Expoara Porto Franco/MA',
            'data' => '2018-07-10 14:50:00',
            'categoria_id' => 3
        ]);
        
        Eventos::create([
            'nome' => 'Felipe e Matheus',
            'local' => 'Local: 23h - Expoara Porto Franco/MA',
            'data' => '2018-07-10 14:50:00',
            'categoria_id' => 3
        ]);
        
        Eventos::create([
            'nome' => 'Felipe e Matheus',
            'local' => 'Local: 23h - Expoara Porto Franco/MA',
            'data' => '2018-07-10 14:50:00',
            'categoria_id' => 3
        ]);
        
        Eventos::create([
            'nome' => 'Felipe e Matheus',
            'local' => 'Local: 23h - Expoara Porto Franco/MA',
            'data' => '2018-07-10 14:50:00',
            'categoria_id' => 3
        ]);
        
        Eventos::create([
            'nome' => 'Felipe e Matheus',
            'local' => 'Local: 23h - Expoara Porto Franco/MA',
            'data' => '2018-07-10 14:50:00',
            'categoria_id' => 3
        ]);
        
        Eventos::create([
            'nome' => 'Felipe e Matheus',
            'local' => 'Local: 23h - Expoara Porto Franco/MA',
            'data' => '2018-07-10 14:50:00',
            'categoria_id' => 3
        ]);
    }
}
