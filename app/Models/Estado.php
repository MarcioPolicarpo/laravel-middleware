<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'sigla';

    protected $keyType = 'string';

    protected $fillable = [
        'sigla', 'nome', 'regiao', 'codigo_ibge'
    ];
}
