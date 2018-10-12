<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BannerSeeder::class);        
        $this->call(UsuariosTableSeeder::class);        
        $this->call(NoticiasTableSeeder::class);        
        $this->call(CategoriasTableSeeder::class);        
        $this->call(SegmentosTableSeeder::class);        
        $this->call(GuiaComercialTableSeeder::class);        
        $this->call(VisitasTableSeeder::class);        
        $this->call(GaleriaTableSeeder::class);        
        $this->call(ContatoWebTableSeeder::class);        
        $this->call(BotoesTableSeeder::class);        
        $this->call(EventosTableSeeder::class);        
        $this->call(ContatosTableSeeder::class);        
        $this->call(VideosTableSeeder::class);        
    }
}
