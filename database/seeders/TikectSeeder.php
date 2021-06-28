<?php

namespace Database\Seeders;

use App\Models\Tikect;
use Illuminate\Database\Seeder;

class TikectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tikect::factory(20)->create();//Hacemos la insersion de 20 registros de prueba en la tabla tiketc
    }
}
