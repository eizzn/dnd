<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $props = [
            'Armor Class'       => 'Armor Class that represents the difficulty to be hit',
            'Damage Reduction'  => 'Damage Reduction represents the amount of damage that is ignored',
            'Melee Damage'      => '',
            'Range'             => '',
            'Ranged Damage'     => '',
            'Threat Range'      => '',
        ];

        ksort($props);

        $app             = app();
        $app->properties = [];

        $properties = [];
        foreach ($props as $name => $description) {
            $prop              = new Property;
            $prop->name        = $name;
            $prop->key         = Str::slug($name, '_');
            $prop->description = $description;
            $prop->save();

            $properties[$name] = $prop;
        }
        $app->properties = $properties;
    }
}
