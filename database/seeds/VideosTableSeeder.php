<?php

use Illuminate\Database\Seeder;
use App\videos;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        videos::create([
        	'link' => 'https://www.youtube.com/embed/srd_k-O-Yc0',
            'titulo' => 'Show Felipe e Matheus',
            'descricao' => 'Boate Absout - dia 25/06 Início ás 23h'
        ]);
    }
}
