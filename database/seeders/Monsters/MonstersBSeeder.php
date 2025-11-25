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
        $monster->name             = 'Behir';
        $monster->size             = 'Huge';
        $monster->type             = 'Dragon';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 12;
        $monster->speed            = '50 ft / Climb 40 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (3D10 +6) Piercing.</dd>
    <dt>Constrict</dt> <dd>Melee Weapon Attack, reach 5 ft, one large or smaller creature. (2D10 +6) Bludgeoning + (2D10 +6) Slashing. The target is Grappled (escape DC 16) if the behir isn't already constricting a creature, and the target is Restrained until this Grapple ends.</dd>
    <dt>Swallow</dt> <dd>
        <p>The behir makes one bite attack against a Medium or smaller target it is grappling. If the attack hits, the target is also swallowed, and the grapple ends. While swallowed, the target is Blinded and Restrained, it has total cover against attacks and other effects outside the behir, and it takes 21 (6d6) Acid damage at the start of each of the behir's turns. A behir can have only one creature swallowed at a time.</p>
        <p>If the behir takes 30 damage or more on a single turn from the swallowed creature, the behir must succeed on a DC 14 CON Save at the end of that turn or regurgitate the creature, which falls prone in a space within 10 ft. of the behir. If the behir dies, a swallowed creature is no longer restrained by it and can escape from the corpse by using 15 ft. of movement, exiting prone.</p>
    </dd>
    <dt>Lightning Breath (Recharge 5-6)</dt> <dd>The behir exhales a line of lightning that is 20 ft long and 5 ft wide. Each creature in that line must make a DC 16 DEX Save, taking 66 (12D10) Electricity damage on failed Save, or half as much damage on a successful one.</dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon', 'Electricity'], [
            'stats'  => [23, 16, 18, 7, 14, 12, 11, 4],
            'skills' => [
                'Perception' => ['dc' => 6],
                'Stealth'    => ['dc' => 7],
            ],
            'features' => [
                'darkvision' => ['meta' => '90 ft'],
                'immunity'   => ['meta' => 'Electricity'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Beholder';
        $monster->size             = 'Large';
        $monster->type             = 'Aberration';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '15 (Natural Armor)';
        $monster->damage_reduction = '3';
        $monster->hit_dice         = 19;
        $monster->speed            = '0 ft / Fly 20 ft hover';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack + 5, reach 5 ft, one target, 14 (4D6) Piercing Damage</dd>
    <dt>Antimagic Cone</dt> <dd>The Beholder's central eye creates an area of Antimagic, as in the Antimagic Field Spell, in a 150-foot cone. At the start of its turn, the Beholder decides which way the cone faces and whether the cone is Active. The area works against the Beholder's own Eye Rays.</dd>
    <dt>Eye Ray</dt> <dd>
        <p>The Beholder, as an Action, can shoot one of the following Eye Ray. An Eye Ray cannot be used more than once per round.</p>
        <ul>
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
        </ul>
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

        $monster                   = new Monster;
        $monster->name             = 'Spectator';
        $monster->size             = 'Large';
        $monster->type             = 'Aberration';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '12 (Natural Armor)';
        $monster->damage_reduction = 2;
        $monster->hit_dice         = 6;
        $monster->speed            = '0 ft / Fly 30 ft hover';
        $monster->description      = '<p>A spectator is a lesser type of beholder—a foul and deadly aberration. It resembles a floating sphere with a gaping maw and a single great eye, set within four eyestalks that shoot forth deadly rays.</p>';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack. +1 to Hit, reach 5 ft, one Target. HIt: 2 (1D6 -1) Piercing Damage</dd>
    <dt>Eye Rays</dt> <dd>
        The spectator shoots up to two of the following magical eye rays at one or two creatures it can see within 90 feet of it. It can use each ray only once on a turn
        <dl>
            <dt>Confusion Ray</dt> <dd>the Target must Succeed on a DC 13 WIS Save or it can't take Reactions until the end of its next turn. On its turn, the Target can't move and it uses its Action make a melee or ranged attack against a randomly determined creature within range. If the Target can't attack, it does nothing on its turn</dd>
            <dt>Paralyzing Ray</dt> <dd>The Target must Succeed on a DC 13 CON Save or be Paralyzed: 10. the Target can repeat the Save at the end of each of its turns, ending the effect on itself on a Success.</dd>
            <dt>Fear Ray</dt> <dd>the Target must Succeed on a DC 13 WIS Save or be Frightened: 10. The Target can repeat the Save at the end of each of its turns, with Disadvantage if the Spectator is visible to the Target, ending the effect on itself on a Success.</dd>
            <dt>Wounding Ray</dt> <dd>The Target must make a DC 13 CON Save, taking 16 (3D10) Negative Damage ona a Failed Save, or Half on a Successful one.</dd>
        </dl>
    </dd>
    <dt>Create Food and Water</dt> <dd>the spectator magically creates enough food and water to sustain itself for 24 hours.</dd>
    <dt>Spell Reflection</dt> <dd>If the spectator makes a Successful Save against a Spell, the spectator can choose another creature (including the spellcaster) it can see within 30 feet of it as a Reaction. THe spell Targets the chosen creature instead of the spectator. If the spell forced a Save, the chosen creature makes its own Save.</dd>
</dl>";
        $helper->saveMonster($monster, ['Aberration'], [
            'stats'     => [8, 14, 14, 13, 14, 11, 3, 2],
            'skills'    => [
                'Perception' => ['dc' => 6],
            ],
            'features'  => [
                'darkvision'   => ['meta' => '120 ft'],
                'immunity'     => ['meta' => 'Cannot be Prone'],
            ],
            'languages' => [
                'Deep Speech',
                'Telepathy' => ['meta' => '120 feet'],
            ],
        ]);
    }
}
