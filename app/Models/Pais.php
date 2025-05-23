<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';
    protected $primaryKey = 'id_pais';
    protected $fillable = [
        'nome_pais',
        'latitude',
        'longitude'
    ];
    public $timestamps = false;
}
