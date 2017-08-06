<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'nome', 'telefone', 'email', 'categoria'
    ];
}
