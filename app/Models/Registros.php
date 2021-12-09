<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{   
    protected $table = 'registros';
    protected $fillable = [
        'nome',
        'cpf',
        'foto'
    ];

    public $timestamps = false;
}
