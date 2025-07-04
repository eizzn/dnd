<?php

namespace Database\Seeders\Rules;

use Illuminate\Database\Seeder;

class RulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GeneralPageSeeder::class);
        $this->call(AdvancementPageSeeder::class);
        $this->call(MovementPageSeeder::class);
        $this->call(CombatPageSeeder::class);
        $this->call(ClassFeaturePageSeeder::class);
        $this->call(MagicPageSeeder::class);
        $this->call(DiseasesSeeder::class);
    }
}
