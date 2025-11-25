<?php

namespace Database\Seeders\Locations;

use App\Models\Location;
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
        $world       = new Location;
        $world->name = 'Abeir-Toril';
        $world->type = 'World';
        $world->save();

        $location       = new Location;
        $location->name = 'Faerun';
        $location->type = 'Continent';
        $world->sub_locations()->save($location);

        $location       = new Location;
        $location->name = 'Kara-Tur';
        $location->type = 'Continent';
        $world->sub_locations()->save($location);

        $location       = new Location;
        $location->name = 'Zakhara';
        $location->type = 'Continent';
        $world->sub_locations()->save($location);

        $location       = new Location;
        $location->name = 'Anchorome';
        $location->type = 'Continent';
        $world->sub_locations()->save($location);

        $location       = new Location;
        $location->name = 'Maztica';
        $location->type = 'Continent';
        $world->sub_locations()->save($location);

        $location       = new Location;
        $location->name = 'Osse';
        $location->type = 'Continent';
        $world->sub_locations()->save($location);

        $this->call(PlanesSeeder::class);

        $this->call(Rashemen::class);
    }
}
