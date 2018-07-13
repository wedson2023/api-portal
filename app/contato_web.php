<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contato_web extends Model
{
   protected $table = 'contato_webs';    
   protected $fillable = ['nome', 'url'];
   
   public function guia(){
       return $this->belongsTo(guiaComercial::class, 'guia_id');
   }
}
