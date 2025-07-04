<?php

namespace Database\Seeders\Equipment;

use Illuminate\Database\Seeder;

class EquipmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArmorsSeeder::class);
        $this->call(WeaponsSeeder::class);
        $this->call(AdventuringGearsSeeder::class);
    }
}
