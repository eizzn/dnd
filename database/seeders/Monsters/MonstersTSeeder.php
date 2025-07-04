<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersTSeeder extends Seeder
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
        $monster->name             = 'Tall Mouther';
        $monster->size             = 'Large';
        $monster->alignment        = 'N';
        $monster->armor_class      = '14';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 7;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack +6 to hit, 15 ft reach, one target. (1D4 +5) Bludgeoning</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack +6 to hit, 5 ft reach, one target. (2D6 +5) Piercing</dd>
</dl>';
        $monster->description = "<p>The tall mouther is a whirling dervish of devastation in melee. These creatures plague Luiren.</p>
<p>A tall mouther has a huge head with six long limbs protruding directly from it, and no torso to speak of. At any given time, two or three of the surprisingly flexible , 15-ft long limbs are on the ground to support the weight of the head and give the mouther stability. The mouther's head rarely rises 15 feet high, unless it's attempting to avoid the blow of a weapon. The creature's natural motion keeps the head 5 to 7 feet of the ground. It weighs about 500 pounds.</p>";
        $helper->saveMonster($monster, ['Monstrosity', 'Humanoid'], [
            'stats'  => [20, 19, 13, 8, 10, 7, 5, 2],
            'skills' => [
                'Athletics' => ['dc' => 9],
            ],
            'feats' => [
                'Alertness',
            ],
            'features' => [
                'multi_attack' => ['meta' => 'The tall mouther gains 3 Additional Actions. These Additional Actions can only be used to make Slam attacks'],
            ],
            'languages' => ['Luiric'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Tomb Tapper';
        $monster->size             = 'Huge';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '10 (Natural Armor)';
        $monster->hit_dice         = 8;
        $monster->speed            = '30 ft / Burrow 30 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D10 +6) Piercing damage</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +6) Slashing damage</dd>
    <dt>Thaalud Hammer</dt> <dd>Melee Weapon Attack or Ranged Weapon Attack, reach 10 ft or range 60/240 ft, one target. (3D8 +6) Bludgeoning damage or (3D10 +6) when wielded with two-hands as a melee weapon.</dd>
    <dt>Animate Stone</dt> <dd>The tomb tapper magically animates nonmagical stone it can see within 60 ft of it. Animated stone has statistics like those of Earth Elemental, except it has INT 1 and CHA 1, it can't be Charmed or Frightened, and it can't speak. The animated stone creature remains animated as long as the tomb tapper maintains concentration, up to 1 minute (as if concentrating on a spell).</dd>
</dl>";
        $monster->description = "<p>Tomb Tappers, also known as thaalud, appear as tall, naked, sexless, and hairless humanoids with very hard, smooth, blue-gray skin, claws that can dig through solid rock, and great toothed mouths in their bellies. Their smooth, featureless heads have earned them the nickname \"the faceless\".</p>
<p>Tomb tappers get their name from their habit of burrowing up from the depths to plunder tombs, temples, and wizards' towers in search of magical items, which they carry off. They usually try to seize magical items from encountered beings.</p>
<p>Magic is sacred to thaalud; they never use any magical items, but protect and venerate them. Tappers spend their long lives in an eternal search for the source of all magic, which they believe lies hidden somewhere deep in the earth. They are somewhat in awe of earth elementals, believing them to be created at this mysterious source, and are reluctant to attack them.</p>
<p>Tomb tappers are not natural creatures. Their existence has been traced back to the very beginning of the Shadowed Age of Netheril when a group of powerful wizards created them to seek out the source of the drain on magic that was beginning to reach across Netheril. This is supported by their faceless heads (suggesting they have been changed from a humanoid norm) and by their spell immunities (suggesting they were created to fight the phaerimm). Tapper beliefs indicate they know magic has power over them. Some, including Elminster, think thaalud were originally made from rock animated in human form. This view is supported by their turning to stone at death.</p>
<p>Thaalud skin varies in porosity at will; through it, tappers take in needed water. Their gigantic jaws can crush rock, from which thaalud extract mineral sustenance. They also digest iron from blood and bone marrow if such become available but do not hunt to eat.</p>
<p>Thaalud customarily wield great hammers of arenite, an alloy derived from magma (the exact composition is secret). These hammers are 10 feet or more long, heavy, harder than most rock, and very durable. Tappers can dig through rock with their claws, but use their hammers to split rock when a smooth surface is desired.</p>
<p>Thaalud are naturally long-lived and form regional clans. It is not known whether they have young or give birth; no children or pregnant thaalud have ever been seen. Even who leads a clan is not known, although thaalud make and keep deals with other beings, and hence are assumed to respect rules and authority.</p>
<p>Thaalud will aid svirfneblins and dwarves, whose magic they leave unmolested. They have no interest in drow cloaks, boots and other items that resemble magic because of Underdark radiation and not true dweomers. Thaalud hate umber hulks, sometimes enslaving them from birth, mutually ignore xorn, dislike duergar and drow, and are bitter foes of illithids and phaerimm, who have slain more than a few thaalud.</p>";
        $helper->saveMonster($monster, ['Construct'], [
            'stats' => [22, 11, 20, 14, 14, 11, 10, 4],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'WIS' => ['bonus' => 6],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 6],
                'Lore'       => ['dc' => 6, 'meta' => 'Anauroch Desert'],
                'Perception' => ['dc' => 6],
            ],
            'features' => [
                'resistance' => ['meta' => 'Electricity'],
                'immunity'   => ['meta' => 'Cold, Fire, Blinded, Charmed, Frightened, Petrification'],
            ],
            'feats'  => ['Blindsight' => ['meta' => "The tomb tapper can't use its Blindsight while Deafened."]],
            'spells' => [
                'Detect Magic' => ['meta' => 'At will'],
            ],
            'languages' => ['Telepathy' => ['meta' => '60 ft']],
        ]);
    }
}
