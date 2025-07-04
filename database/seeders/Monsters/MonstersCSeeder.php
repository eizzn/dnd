<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersCSeeder extends Seeder
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
        $monster->name             = 'Chosen One';
        $monster->size             = 'Medium';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D4 Slashing damage</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 Piercing plus Poison. CON Save or suffer 1D2 CON Damage on the initial hit, then on the following turn, suffer 1D4 CON Damage. A Successful Save avoids this CON Damage.</dd>
</dl>';
        $monster->description      = "<p>Chosen Ones attack fearlessly, biting with fangs and slashing with filthy claws. They obey their creators' commands to the best of their ability. However, a chosen one occasionally goes berserk, somehow recovering some memory of its past life and the tortures it endured at its master's hand. For each consecutive round a Chosen One is in combat after the fifth, there is a cumulative 1% chance that it goes berserk, screaming horribly and fleeing combat in search of its creator.</p>
<p>Chosen Ones can be created with the Create Chosen One spell.</p>";
        $helper->saveMonster($monster, ['Humanoid'], [
            'stats'     => [11, 13, 11, 6, 12, 10, 2, 2],
            'skills'    => ['Perception' => ['dc' => 5], 'Athletics' => ['dc' => 2, 'meta' => 'Climb']],
            'feats'     => ['Alertness'],
            'features'  => [
                'multi_attack' => ['meta' => 'If the Chosen One successfully hits with 2 claw attacks, they gain an additional Action. This Action can only be used to make Bit attacks.'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Cloaker';
        $monster->size             = 'Large';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 12;
        $monster->speed            = '10 ft / Fly 40 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 10 (2D6 +3) Piercing damage, and if the target is Large or smaller, the Cloaker attaches to it. If the Cloaker has Advantage against the target, the Cloaker attaches to the target's head, and the target is Blinded and unable to breathe while the Cloaker is attached. While attached, the Cloaker can make this attack only against the target and has Advantage on the attack roll. The Cloaker can detach itself by spending 5 ft of its movement. A creature, including the target, can take its Action to detach the Cloaker by succeeding on a DC 16 STR check. While attached to a creature it this way, a Cloaker that takes damage only takes half damage (rounded down), and the creature the Cloaker is attached to takes the other half.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 7 (1D8 +3) Slashing damage.</dd>
    <dt>Moan</dt> <dd>Each creature within 60 feet of the Cloaker that can hear its Moan abd that isn't an Aberration must succeed on a DC 13 WIS Save or become Frightened until the end of the Cloaker's next turn. If a creature's Save is successful, the creature is immune to the Cloaker's Moan for the next 24 hours.</dd>
    <dt>Phantasms (Recharge after a Short or Long Rest)</dt> <dd>
        <p>The Cloaker magically creates three illusory duplicates of itself if it isn't in bright light. The duplicates move with it and mimic its Actions, shifting position so as to make it impossible to track which Cloaker is the real one. If the Cloaker is ever in an area of bright light, the duplicates disappear.</p>
        <p>Whenever any creature targets the Cloaker with an attack or a harmful spell while a duplicate remains, that creature rolls randomly to determine whether it targets the Cloaker or one of the duplicates. A creature is unaffected by this magical effect if it can't see or if it relies on senses other than sight.</p>
        <p>A duplicate has the Cloaker's AC, and uses its Saves. If an attack hits a duplicate, or if a duplicate fails a Save against an effect that deals damage, the duplicate disappears.</p>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Aberration'], [
            'stats'    => [17, 15, 12, 13, 12, 14, 8, 3],
            'skills'   => ['Stealth' => ['dc' => 5]],
            'features' => [
                'darkvision', 'sunlight_sensitivity',
                'false_appearance' => ['meta' => 'While the Cloaker remains motionless without its underside exposed, it is indistinguishable from a dark leather cloak.'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Couatl';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '15';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 1;
        $monster->speed            = '30 ft / Fly 90 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 8 (1D6 +3) Piercing damage, and the target must succeed on a DC 13 CON Save or be Unconscious for 24 hours. Another creature can use an Action to shake the target awake.</dd>
    <dt>Constrict</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 10 (2D6 +3) Bludgeoning damage, and the target is Grappled (escape DC 15). Until this Grapple ends, the target is Restrained, and the Couatl can't Constrict another target.</dd>
</dl>";
        $helper->saveMonster($monster, ['Celestial'], [
            'stats' => [16, 20, 17, 18, 20, 18, 4, 2],
            'saves' => [
                'CON' => ['bonus' => 5],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 6],
            ],
            'features' => [
                'resistance'    => ['meta' => 'Positive'],
                'vulnerability' => ['meta' => 'Axiomatic, Unholy'],
                'immunity'      => ['meta' => '[Bludgeoning, Piercing, Slashing]'],
            ],
            'feats'  => ['Improved Grapple'],
            'spells' => [
                'Comprehend Language' => ['meta' => 'At will'],
                'True Seeing'         => ['meta' => 'At will'],
            ],
            'powers' => [
                'Metamorphosis' => ['meta' => 'At will'],
            ],
            'classes' => ['Psion' => ['level' => 12]],
        ]);
    }
}
