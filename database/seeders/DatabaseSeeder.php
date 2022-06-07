<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\EstadoSeeder;
use Database\Seeders\MunicipioSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            EstadoSeeder::class,
            MunicipioSeeder::class
        ]);
    }
}
