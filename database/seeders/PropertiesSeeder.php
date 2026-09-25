<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $props = [
            'Armor Class'         => 'Armor Class that represents the difficulty to be hit',
            'Damage Reduction'    => 'Damage Reduction represents the amount of damage that is ignored',
            'DEX Mod Cap'         => 'The armor limits the bonus to your AC and Bonus to Ranged Attacks from your DEX modifier to the listed value',
            'Spell Failure'       => 'The armor imposes a chance of any Spell you cast while wearing the armor to fail due to how the armor restricts your movement',
            'Skill Check Penalty' => 'A Penalty to any Physical Based Skill Check while wearing the armor',
            'Speed Penalty'       => 'A Penalty to you Land Speed while wearing the armor',
            'Minimum STR'         => 'You must at least the listed STR to wear the armor',
            'Melee Damage'        => '',
            'Range'               => '',
            'Ranged Damage'       => '',
            '2 Handed Damage'     => 'This is the weapons damage when used with 2 hands',
            'Deadly'              => 'On a Critical Hit, the weapon adds a weapon damage die',
            'Fatal'               => "On a Critical Hit, use the Fatal's die instead of the weapon's die",
            'Reload'              => 'The number Actions required to load an ammunition to the weapon',
            'Volley'              => 'The ranged weapon is less effective at close range, Your attacks against targets that are at a distance within the range listed take a -2 less Damage',
            'Hardness'            => 'The Damage Reduction of an object when it is attacked directly (i.e. Sunder)',
            'Hit Points'          => 'The amount of damage that an object can take before it is considered destroyed',
            'Extra'               => 'Any extra effects',
            'Ammunition'          => 'The ammunition that can be used for this weapon',
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
