<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\usuario;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        usuario::create([
            'nome' => 'Adinaldo',
            'password' => Hash::make('5021ad')
        ]);
    }
}
