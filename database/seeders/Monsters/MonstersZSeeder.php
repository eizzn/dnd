<?php

namespace Database\Seeders\Monsters;

use Illuminate\Database\Seeder;

class MonstersZSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AnimalsSeeder::class);
    }
}
