<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'codigo_ibge';

    protected $fillable = [
        'sigla',
        'nome',
        'microrregiao',
        'mesorregiao',
        'codigo_ibge'
    ];
}
