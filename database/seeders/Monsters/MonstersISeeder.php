<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersISeeder extends Seeder
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
        $monster->name             = 'Illithid';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '13 (Breast Plate armor +2)';
        $monster->damage_reduction = '5 (Breast Plate armor)';
        $monster->hit_dice         = 13;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Tentacles</dt> <dd>Melee Weapon Attack +7 to hit, reach 5 ft, one creature. 15 (2D10 +4) Bludgeoning damage. If the target is Medium or smaller, it is Grappled (Escape DC 15) and must Succeed on a DC 15 INT Save or be Stunned until this Grapple ends.</dd>
    <dt>Extract Brain</dt> <dd>Melee Weapon Attack +7 to hit, reach 5 ft, one Incapacitated humanoid Grappled by the Illithid. The target takes 55 (10D10) Piercing damage. If this damage reduces the target to 0 Hit Points, the Illithid kills the target by extracting and devouring its brain</dd>
</dl>';
        $helper->saveMonster($monster, ['Aberration'], [
            'stats' => [11, 12, 12, 19, 17, 17, 7],
            'saves' => [
                'INT' => ['bonus' => 7],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 6],
            ],
            'powers' => [
                'Charisma Blast',
                'Wisdom Defense', 'Charisma Defense', 'Intelligence Defense',
                'Psionic Blast',
                'Telekinesis',
                'Teleport',
                'Levitate',
                'Dominate',
                'Plane Shift' => ['meta' => 'Self only'],
            ],
            'classes'   => ['Psion' => ['level' => 11]],
            'languages' => ['Telepathy' => ['meta' => '60 ft']],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Intellect Devourer';
        $monster->size        = 'Tiny';
        $monster->alignment   = 'LE';
        $monster->armor_class = '12';
        $monster->hit_dice    = 6;
        $monster->speed       = '40 ft';
        $monster->actions     = "<dl>
    <dt>Claws</dt> <dd>Melee Weapon Attack +4 to hit, reach 5 ft, one target. 7(2D4 +2) Slashing.</dd>
    <dt>Body Thief</dt> <dd>
        <p>The intellect devourer initiates an intelligence contest with an incapacitated humanoid within 5 feet of it that isn't protected by Protection From Evil, or Protection From Law. If it wins the contest, the intellect devourer Space Hops into the victim's skull, absorbing the defeated brain. It gains knowledge of what the victim knew and can make a Concentration check to recall specific information. It then takes control of the body using its Control Body Power. While there, the intellect devourer has total cover against attacks and other effects originating outside its host.</p>
        <p>If the host body dies, the intellect devourer may continue to animate the body with its Control Body Power. A Protection From Evil or Protection From Law spell cast on the body drives the intellect devourer out. The intellect devourer is also forced out if the target regains its absorbed brain by means of a Wish Spell. By spending 5 feet of its movement, the intellect devourer can voluntarily leave the body, Space Hopping to the nearest unoccupied space. The body then dies, unless its brain is restored within 1 round.</p>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Aberration'], [
            'stats'  => [6, 14, 13, 14, 11, 10, 2, 2],
            'skills' => [
                'Concentration' => ['dc' => 10, 'meta' => 'Always Psionically Focused'],
                'Perception'    => ['dc' => 2],
                'Stealth'       => ['dc' => 4],
            ],
            'features' => [
                'resistance'    => ['meta' => 'Bludgeoning, Piercing, Slashing'],
                'vulnerability' => ['meta' => 'Intellect Devourers are Blind'],
            ],
            'feats'  => ['Blindsight'],
            'powers' => [
                'Intelligence Blast',
                'Intelligence Defense',
                'Wisdom Defense',
                'Shift',
                'Charisma Defense',
                'Telekinesis',
                'Empathy',
                'Space Hop',
                'Sense Minds'  => ['meta' => 'Always Heightened +2 and costs 1 Power Point'],
                'Control Body' => ['meta' => 'Able to produce speech. DC 12 Perception check to determine movements are awkward'],
            ],
            'classes'   => ['Psion' => ['level' => 7]],
            'languages' => ['Deep Speech' => ['meta' => 'Understand, cannot speak'], 'Telepathy' => ['meta' => '60 ft']],
        ]);
    }
}
