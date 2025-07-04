<?php

namespace Database\Seeders\Locations;

use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PlanesSeeder::class);
    }
}
