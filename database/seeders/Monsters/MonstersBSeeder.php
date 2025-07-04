<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersBSeeder extends Seeder
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
        $monster->name             = 'Beholder';
        $monster->size             = 'Large';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '15 (Natural Armor)';
        $monster->damage_reduction = '3';
        $monster->hit_dice         = 19;
        $monster->speed            = '0 ft / Fly 20 ft hover';
        $monster->actions          = "<dl>
    <dt>Bit</dt> <dd>Melee Weapon Attack + 5, reach 5 ft, one target, 14 (4D6) Piercing Damage</dd>
    <dt>Antimagic Cone</dt> <dd>The Beholder's central eye creates an area of Antimagic, as in the Antimagic Field Spell, in a 150-foot cone. At the start of its turn, the Beholder decides which way the cone faces and whether the cone is Active. The area works against the Beholder's own Eye Rays.</dd>
    <dt>Eye Ray</dt> <dd>
        <p>The Beholder, as an Action, can shoot one of the following Eye Ray. An Eye Ray cannot be used more than once per round.</p>
        <ol>
            <li>Charm Ray: The targeted creature must Succeed a DC 16 WIS Save or be Charmed for 1 hour or until the Beholder harms the target.</li>
            <li>Paralyzing Ray: The targeted creature must Succeed on a DC 16 CON Save or be Paralyzed for 1 minute. The target can Save at the end of its turns ending the effect on itself on a Success.</li>
            <li>Fear Ray: The targeted creature must Succeed on a DC 16 WIS Save or be Frightened for 1 minute. The target can repeat the Save at the end of each its turns ending the effect on itself on a Success.</li>
            <li>Slowing Ray: The targeted creature must Succeed on a DC 16 DEX Save. On a Failed Save, the target is Slowed 2 for 1 minute. The creature can repeat this Save at the end of each of its turns, ending the effect on itself on a Success.</li>
            <li>Enervation Ray: The targeted creature must Succeed on a DC 16 CON Save, taking 8D8 Negative Energy damage on a Failed Save or half on a Success.</li>
            <li>Telekinetic Ray:
                <ul>
                    <li>If the target is a creature, it must Succeed on a DC 16 STR Save or the Beholder moves it up to 30 feet in any direction. It is Restrained by the Ray's Telekinetic grip until the start of the Beholder's next turn or until the Beholder is Incapacitated.</li>
                    <li>If the target is an object weighing 300 lbs or les that isn't being worn or carried, it is moved up to 30 feet in any direction. The Beholder can also exert fine control on object's with this Ray, such as manipulating a simple tool or opening a door or a container.</li>
                </ul>
            </li>
            <li>Sleep Ray: The targeted creature must Succeed on a DC 16 WIS Save or fall asleep and remain Unconscious for 1 minute. The target awakens if it takes damage or another creature takes an Action to wake it. This Ray has no effect on Constructs and Undead.</li>
            <li>Petrification Ray: The targeted creature must make a DC 16 DEX Save. On a Failed Save, the creature becomes Petrified. It must repeat this Save at the end of their next turn. On a Success, the effect ends. On a Failed Save, the creature is Petrified Permanently (a Restoration Spell can end this effect).</li>
            <li>Disintegration Ray:
                <ul>
                    <li>If the target is a creature, it must make a DC 16 DEX Save or take 10D8 Force Damage. If this damage reduces the target's Hit Points to 0 or less, its body becomes a pile of fine gray dust.</li>
                    <li>If the target isa Large or smaller nonmagical object or creature of magical Force, it is Disintegrated without a Save. If the target is a Huge or larger object or creature of magical Force, this Ray Disintegrates a 10 ft cube of it.</li>
                </ul>
            </li>
            <li>Death Ray: The targeted creature must Succeed a DC 16 DEX Save or take 10D10 Negative Damage. The target dies if the Ray reduces it to 0 Hit Points or less.</li>
        </ol>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Aberration'], [
            'stats'     => [10, 14, 18, 17, 15, 17, 13, 5],
            'skills'    => [
                'Perception' => ['dc' => 12],
            ],
            'saves'     => [
                'INT' => ['bonus' => 8],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 8],
            ],
            'features'  => [
                'darkvision'   => ['meta' => '120 ft'],
                'multi_attack' => ['meta' => 'The Beholder gains an Additional Action. This Additional Action can only be used to use a Eye Ray Attack'],
                'immunity'     => ['meta' => 'Cannot be Prone'],
            ],
            'languages' => [
                'Deep Speech',
                'Special' => ['meta' => 'Can learn up to 5 local dialects'],
            ],
        ]);
    }
}
