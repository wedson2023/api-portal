<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guiaComercial extends Model
{
    protected $table = 'guia_comercials';
    
    protected $fillable = ['id', 'nome', 'endereco', 'capa', 'telefones', 'horario', 'formas_pagamento', 'template', 'ativo'];
    
    public function contato(){
        return $this->hasMany(contato_web::class, 'guia_id');
    }
}
