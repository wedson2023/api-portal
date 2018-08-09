<?php

use Illuminate\Database\Seeder;
use App\visitas;

class VisitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 5; $i++):
            visitas::create([ 'created_at' => '2018-07-09 17:16:18' ]);
        endfor;
        
        for($i = 0; $i <= 5; $i++):
            visitas::create([ 'created_at' => '2018-07-10 17:16:18' ]);
        endfor;
        
        for($i = 0; $i <= 5; $i++):
            visitas::create([ 'created_at' => '2018-07-11 17:16:18' ]);
        endfor;
        
        for($i = 0; $i <= 5; $i++):
            visitas::create([ 'created_at' => '2018-07-12 17:16:18' ]);
        endfor;
        
        for($i = 0; $i <= 5; $i++):
            visitas::create([ 'created_at' => '2018-07-13 17:16:18' ]);
        endfor;
        
        for($i = 0; $i <= 5; $i++):
            visitas::create([ 'created_at' => '2018-07-14 17:16:18' ]);
        endfor;
        
        for($i = 0; $i <= 5; $i++):
            visitas::create([ 'created_at' => '2018-07-15 17:16:18' ]);
        endfor;
    }
}
