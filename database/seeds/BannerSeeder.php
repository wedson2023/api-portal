<?php

use Illuminate\Database\Seeder;
use App\banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        banner::create([
            'imagem' => '300x100.jpg',
            'tamanho' => '300x100',         
        ]);
        
        banner::create([
            'imagem' => '600x100.jpg',
            'tamanho' => '600x100',         
        ]);
        
        banner::create([
            'imagem' => '300x250-01.jpg',
            'tamanho' => '300x250',         
        ]);
        
        banner::create([
            'imagem' => '300x250-02.jpg',
            'tamanho' => '300x250',         
        ]);
        
        banner::create([
            'imagem' => '300x250-03.jpg',
            'tamanho' => '300x250',         
        ]);
        
        banner::create([
            'imagem' => '300x250-04.jpg',
            'tamanho' => '300x250',         
        ]);
        
        banner::create([
            'imagem' => '300x350-01.jpg',
            'tamanho' => '300x350',         
        ]);
        
        banner::create([
            'imagem' => '300x350-02.jpg',
            'tamanho' => '300x350',         
        ]);
        
        banner::create([
            'imagem' => '300x350-03.jpg',
            'tamanho' => '300x350',         
        ]);
    }
}
