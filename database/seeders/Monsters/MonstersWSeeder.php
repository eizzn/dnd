<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersWSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $monster                   = new Monster;
        $monster->name             = 'Wyvern';
        $monster->size             = 'Large';
        $monster->type             = 'Dragon';
        $monster->alignment        = '-';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 13;
        $monster->speed            = '20 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +5) Piercing</dd>
    <dt>Claws</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D8 +5) Slashing</dd>
    <dt>Stinger</dt> <dd>Melee Weapon Attack, reach 1- ft, one target. (2D6 +5)  Piercing. The target must make a DC 15 CON Save, take (7D6) Poison on a Failed Save, or half as much damage on a Successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon'], [
            'stats'  => [19, 10, 16, 5, 12, 6, 6, 3],
            'skills' => [
                'Perception' => ['dc' => 4],
            ],
            'features' => [
                'darkvision' => ['meta' => '60 ft'],
            ],
        ]);
    }
}
