<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public static function RetornarMunicipiosdaAPI()
    {
        $municipio = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/municipios');
        return $municipio;
    }
}
