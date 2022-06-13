<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MunicipioController extends Controller
{
    public static function RetornarMunicipiosdaAPI()
    {
        $municipio = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/municipios');
        return $municipio;
    }

    public function RetornarMunicipiosPorUF(string $uf)
    {
        $result = DB::table('municipios')
            ->select('nome', 'codigo_ibge')
            ->where('sigla', $uf)
            ->get();
        
        return response()->json($result);
    }

    public function index()
    {
        return response()->json(Municipio::all());
    }
}
