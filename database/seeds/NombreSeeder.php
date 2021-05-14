<?php

use Illuminate\Database\Seeder;
use App\Nombre;

class NombreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Nombre::class, 10)->create();
    }
}
