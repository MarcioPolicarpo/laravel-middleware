<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MunicipioController;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->delete();
        $json = MunicipioController::RetornarMunicipiosdaAPI();
        $data = json_decode($json);
        foreach($data as $municipio) {
            Municipio::create([
                'sigla' => $municipio->microrregiao->mesorregiao->UF->sigla,
                'nome' => $municipio->nome,
                'microrregiao' => $municipio->microrregiao->nome,
                'mesorregiao' => $municipio->microrregiao->mesorregiao->nome,
                'codigo_ibge' => $municipio->id
            ]);
        }
    }
}
