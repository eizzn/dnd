<?php

namespace Database\Seeders\Feats;

use Illuminate\Database\Seeder;

class FeatsAncestrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FeatsDwarvenSeeder::class);
        $this->call(FeatsElvenSeeder::class);
        $this->call(FeatsGnomeSeeder::class);
        $this->call(FeatsGoblinSeeder::class);
        $this->call(FeatsHalflingSeeder::class);
        $this->call(FeatsHumanSeeder::class);
        $this->call(AmphibiousFeatsSeeder::class);
    }
}
