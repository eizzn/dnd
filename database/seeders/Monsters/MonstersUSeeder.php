<?php

namespace Database\Seeders\Monsters;

use Illuminate\Database\Seeder;

class MonstersUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UndeadSeeder::class);
    }
}
