<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class EstadoController extends Controller
{
    public static function RetornarEstadosdoArquivo()
    {
        if (file_exists('database/data/estados.json')) {
            return File::get('database/data/estados.json');
        }
    }    

    public static function RetornarEstadosdaAPI()
    {
        $estados = file_get_contents('http://servicodados.ibge.gov.br/api/v1/localidades/estados');
        return $estados;
    }    
}
