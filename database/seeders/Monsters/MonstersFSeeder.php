<?php

namespace Database\Seeders\Monsters;

use Illuminate\Database\Seeder;

class MonstersFSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FeySeeder::class);
    }
}
