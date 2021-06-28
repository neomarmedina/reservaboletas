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
        //Aqui llamamos a los seeders para llenar las tablas con datos falsos
        $this->call([
            UserSeeder::class,
            TikectSeeder::class
        ]);
    }
}
