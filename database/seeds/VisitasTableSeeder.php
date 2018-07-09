<?php

use Illuminate\Database\Seeder;
use App\Visitas;

class VisitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visitas::create([
            'visitas' => 0
        ]);
    }
}
