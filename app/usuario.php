<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class usuario extends Authenticatable
{
    protected $table = 'usuarios';
    protected $fillable = ['id', 'nome', 'created_at'];
    protected $hidden = ['senha', 'updated_at'];
}
