<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\EstadoController;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->delete();
        $json = EstadoController::RetornarEstadosdaAPI();
        $data = json_decode($json);
        foreach($data as $estado) {
            Estado::create([
                'sigla' => $estado->sigla,
                'nome' => $estado->nome,
                'regiao' => $estado->regiao->nome,
                'codigo_ibge' => $estado->id
            ]);
        }
    }
}
