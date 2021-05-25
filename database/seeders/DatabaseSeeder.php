<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EstadoSeeder::class,
            RegionSeeder::class,
            DistritoSeeder::class,
            MunicipioSeeder::class,
            FuenteFinanciamientoSeeder::class,
            RoleSeeder::class,
            UserSeeder::class
        ]);
    }
}
