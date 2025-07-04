<?php

namespace Database\Seeders\Spells;

use Illuminate\Database\Seeder;

class SpellsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $app         = app();
        $app->spells = [];

        $this->call(SpellsASeeder::class);
        $this->call(SpellsBSeeder::class);
        $this->call(SpellsCSeeder::class);
        $this->call(SpellsDSeeder::class);
        $this->call(SpellsESeeder::class);
        $this->call(SpellsFSeeder::class);
        $this->call(SpellsGSeeder::class);
        $this->call(SpellsHSeeder::class);
        $this->call(SpellsISeeder::class);
        $this->call(SpellsJSeeder::class);
        $this->call(SpellsKSeeder::class);
        $this->call(SpellsLSeeder::class);
        $this->call(SpellsMSeeder::class);
        $this->call(SpellsNSeeder::class);
        $this->call(SpellsOSeeder::class);
        $this->call(SpellsPSeeder::class);
        $this->call(SpellsQSeeder::class);
        $this->call(SpellsRSeeder::class);
        $this->call(SpellsSSeeder::class);
        $this->call(SpellsTSeeder::class);
        $this->call(SpellsUSeeder::class);
        $this->call(SpellsVSeeder::class);
        $this->call(SpellsWSeeder::class);
        $this->call(SpellsXSeeder::class);
        $this->call(SpellsYSeeder::class);
        $this->call(SpellsZSeeder::class);
    }
}
