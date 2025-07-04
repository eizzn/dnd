<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersOSeeder extends Seeder
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
        $monster->name             = 'Orc';
        $monster->size             = 'Medium';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '12 (Hide) / 11';
        $monster->damage_reduction = '3 (Hide) / 0';
        $monster->hit_dice         = 2;
        $monster->speed            = '30 feet';
        $monster->actions          = '<dl>
    <dt>Greataxe</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D12 + 3 Slashing</dd>
    <dt>Javelin</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D6 + 3 Piercing</dd>
    <dt>Javelin</dt> <dd>Ranged Weapon Attack, reach 30/120 ft, one target. 1D6 + 3 Piercing</dd>
</dl>';
        $helper->saveMonster($monster, ['Orc', 'Humanoid'], [
            'stats'  => [16, 12, 16, 7, 11, 10, .5, 2],
            'skills' => [
                'Intimidation' => ['dc' => 2],
            ],
            'features' => [
                'darkvision' => ['meta' => '60 feet'],
            ],
            'languages' => ['Daraktan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Brown Mold';
        $monster->size             = 'Small';
        $monster->alignment        = '-';
        $monster->armor_class      = '5';
        $monster->hit_dice         = 1;
        $monster->speed            = '0';
        $monster->actions          = "<dl>
    <dt>Spore Burst</dt> <dd>The Brown Mold releases spores that burst out in a cloud that fills a 15-foot cube centered on it, and the cloud lingers for 1 minute. Any creature  that ends their turn in the cloud must mae a DC 13 CON Save, taking 8D8 Poison damage on a Failed Save, or half on Success. Additionally, if the Save is Failed, the victims maximum Hit Points is halved until they finish a Long Rest or receive a Restoration Spell.</dd>
    <dt>Fire Absorption</dt> <dd>A Brown Mold does not take damage from Fire. Instead, it heals that amount. If the healed amount is greater than the Brown Mold's maximum Hit Points, the Brown Mold splits into 2 smaller Brown Molds both with max Hit Points.</dd>
</dl>";
        $monster->description      = '<p>Found in dark caverns and remote subterranean passages, the brown mold waits patiently for victims to pass by. Less than an inch thick but spreading over a five foot patch of stone or wood, the tan to dark-brown mold seeks warmth to help it grow. Small bumps along its surface store thousands of spores waiting to be released into the air.</p>
<p>Any living creature that passes within 5 feet of the mold will be attacked by a burst cloud of millions of spores. Any caught within the 15-foot cloud may be overcome by the spores, dying within moments. The spores grow within their new host and crawl back to the main body of the mold, reattaching and adding needed nutrients. Each new victim adds another five feet to the mold’s size.</p>
<p>The brown mold craves warmth and heat; attacking it with fire heals damage and doubles its size. Cold spells will kill the brown mold for good.</p>';
        $helper->saveMonster($monster, ['Plant', 'Ooze'], [
            'stats'    => [1, 1, 15, 1, 10, 1, 2, 1],
            'features' => [
                'immunity'      => ['meta' => 'Poison, Piercing, Charmed, Frightened, Stunned'],
                'vulnerability' => ['meta' => 'Cold, Bludgeoning'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Green Slime';
        $monster->size        = 'Tiny';
        $monster->alignment   = '-';
        $monster->armor_class = '10';
        $monster->hit_dice    = 2;
        $monster->speed       = '20 ft';
        $monster->actions     = "<dl>
    <dt>Pseudopod</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1 Bludgeoning Damage and 1D4 + 1 Acid Damage</dd>
    <dt>Charge</dt> <dd>If the Green Slime moves at least 15 ft straight toward a target and then hits it with a Pseudopod Attack on the same turn, the target takes an extra 1D4 Bludgeoning Damage</dd>
    <dt>Slipper</dt> <dd>The Green Slime as Advantage on Ability Checks and Saves made to Escape a Grapple</dd>
    <dt>Standing Leap</dt> <dd>The Green Slime's Long Jump is up to 20 feet and its High Jump is up to 10 feet, with or without a running start</dd>
</dl>";
        $monster->description = '<p>A simple, gelatinous creature that swallows anything and everything whole. It takes a long time to digest anything. The green slimes are the weakest and most common kind of slime. They are known for their habit of picking up small, inorganic objects and carrying them inside them.</p>';
        $helper->saveMonster($monster, ['Ooze'], [
            'stats'         => [4, 12, 8, 2, 12, 2, 2, .125],
            'features'      => [
                'immunity'      => ['meta' => 'Acid, Poison, Mental, Blindness, Charmed, Deafened, Exhaustion, Poison, Prone, Unconscious'],
                'vulnerability' => ['meta' => 'Cold'],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Slime Mold';
        $monster->size        = 'Large';
        $monster->alignment   = '-';
        $monster->armor_class = '15';
        $monster->hit_dice    = 9;
        $monster->speed       = '30 ft / Climb 30 ft / Swim 30 ft';
        $monster->actions     = '<dl>
    <dt>Pseudopod</dt> <dd>
        <p>Melee Weapon Attack, reach 5 ft, one target. 18 (2D10 +7) Bludgeoning damage and the target is exposed to a random toxin generated by the Slime Mold.</p>
        <ol>
            <li><strong>Caustic Toxin</strong> The target takes 9 (2D8) Acid damage</li>
            <li><strong>Paralytic Poison</strong> The target must succeed on a DC 15 CON Save or be Paralyzed until the end of its next turn.</li>
            <li><strong>Nauseating Toxin</strong> The target must succeed on a DC 15 CON Save or be Sick: 2 for 1 minute. At the end of each of its turns, the target can make another CON Save, ending the Sick condition on a success.</li>
            <li><strong>Pain Agent</strong> The target must make a DC 15 CON Save, taking 14 (4D6) Poison damage on a failed Save, or half as much on a success</li>
            <li><strong>Disorienting Poison</strong> The target must succeed on a DC 15 CON Save or be Sick: 2 for 1 minute. While the Sick condition lasts, the target can not take Reactions or Heroic Surges. At the start of each of its turns, the target makes another Save, ending the Sick condition on a success</li>
            <li><strong>Hallucinogen</strong> The target must succeed on a DC 15 WIS Save or Confused</li>
        </ol>
    </dd>
</dl>';
        $monster->description = '<p>This brightly-colored amoeba with pulsing veins and throbbing bladders is as big as a horse.</p>
<p>Slime molds are naturally occurring organisms rarely larger than a few dozen centimeters in size. However, a few touched by cosmic energy become far larger creatures that spread slowly between star systems via spores that travel through space. They are sometimes brought to other worlds by the mi-go or other starfaring entities.</p>
<p>Their preferred habitat is oxygen-free frozen worlds, but the adaptable creatures can survive for prolonged periods elsewhere. Since other environments are unhealthy for slime molds, they are under constant stress when forced to inhabit such locales. They respond with heightened metabolism and determined attempts to reproduce. As a result, instead of storing energy, as soon as a slime mold absorbs food in a terrestrial setting, it begins repeatedly undergoing mitosis. This is a losing battle, and eventually the slime mold dies, having exhausted its reserves. Sometimes, a resulting immature slime mold survives and adapts to a new environment, but without optimal conditions it is rare for it to grow into a fully mature slime mold. Immature slime molds bound by magic have an easier time adjusting.</p>
<p>Like their terrestrial namesakes, slime molds are vast amoeba-like organisms. They are often quite brightly colored.</p>
<p>Mature slime molds can swell up to around 6 to 8 feet tall and typically weigh a ton or so. Their fluidity allows them to easily squeeze through small cracks or ooze up walls.</p>
<p><strong>Bound Slime Molds.</strong> Slime molds can be controlled via bio-mechanical devices or magical druid or ranger rituals, which make them potentially useful. Immature slime molds are the easiest to control. Any spell or class feature that would conjure or control a beast (such as the features of the druid Circle of the Thousand Young on page 50) can also conjure or control a slime mold.</p>';
        $helper->saveMonster($monster, ['Ooze'], [
            'stats'    => [24, 21, 20, 1, 17, 1, 8, 3],
            'feats'    => ['Tremorsense'],
            'features' => [
                'immunity'   => ['meta' => 'Blinded, Deafened, Negative, Prone, Acid, Cold, Slashing'],
                'resistance' => ['meta' => 'Fire, Electricity, Piercing'],
                'spider_climb', 'amorphous', 'unbreathing',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Yellow Mold';
        $monster->size             = 'Medium';
        $monster->alignment        = '-';
        $monster->armor_class      = '5';
        $monster->hit_dice         = '1';
        $monster->speed            = '0 ft';
        $monster->actions          = '<dl>
    <dt>Light Sensitivity</dt> <dd>Sunlight or any amount of Fire Damage instantly destroys one patch of Yellow Mold</dd>
    <dt>Poison Spores</dt> <dd>If touched, the Yellow Mold ejects a cloud of spores that fills a 10-foot cube originating from the mold. Each creature in the area must make a DC 15 CON Save or take 2D10 Poison Damage and become Sickened for 1 minute. While they are Sickened, they take 1D10 Poison Damage at the start of each of their turns. The creature can repeat the Save at the end of each of its turns, ending the effect on itself on a Successful Save.</dd>
</dl>';
        $helper->saveMonster($monster, ['Plant', 'Ooze'], [
            'stats'     => [1, 1, 15, 1, 10, 1, 2, 0],
            'features'  => [
                'immunity'  => ['meta' => 'Poison, Charmed, Frightened, Prone, Stunned'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Otyugh';
        $monster->size             = 'Large';
        $monster->alignment        = 'N';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 12;
        $monster->speed            = '30 ft';
        $monster->description      = "<p>Otyughs are a type of gulguthra, strange aberrations that dwell underground and delight in eating filth and offal.</p>
<p>Otyughs are strange-looking creatures, with bloated, oval-shaped bodies around 8 feet wide and stood on three shuffling elephantine legs and has a disgusting, rock-like hide. They have a pair of long tentacles that are bedecked in rough thorny growths and end in leaf-shaped pads bearing rows of more sharp spikes. A third tentacle sprouted from the top of the Otyughs body, forming a vine-like stalk standing some 2 feet high, and ending in a pair of eyes and olfactory organ. The body of the creature contains a massive fang-filled mouth, shaped like a crude gash through its center. A typical otyugh is around 500 lbs in mass.</p>
<p>Despite its appearance and habits, an otyugh is somewhat intelligent and capable of speech.</p>
<p>Due to the nature of the otyugh's appetite, their mouths are filthy and often carry diseases like Filth Fever.</p>
<p>Otyughs are generally content to stay hidden in their lairs, usually only attacking living creatures if they felt threatened or hungry.</p>
<p>Dwelling primarily underground, otyughs can be found skulking among piles of refuse and waste. They make such places their lairs, or else gather refuse to fill their lair. An otyugh spends the majority of its time in its lair, burying itself in trash with only the sensory stalk protruding above the heap. It can sit for hours on end, shoveling 'food' into its mouth with its tentacles.</p>
<p>Otyughs are primarily omnivorous scavengers. They can consume almost all kinds of refuse and waste, such as carrion, offal, and many other things others would view as garbage. Nevertheless, they will take fresh meat when that have the chance.</p>
<p>Because of their habits, otyughs are often viewed as a convenient means of garbage disposal by many intelligent creatures dwelling underground. They dump their garbage and waste in otyugh lairs, which would, most of the time, not attack them.</p>";
        $monster->actions = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D8 +3) Piercing. If the target is a creature, it must succeed a DC 15 CON Save against Disease or become Sick 2 until the Disease is cured. Every 24 hours that elapse, the target must repeat the Save, reducing its Hit Point Maximum by (1D10) on a Failure. The disease is cured on a Success. The target dies if the Disease reduces its Hit Point maximum to 0. This reduction to the target's Hit Point Maximum lasts until the Disease is cured.</dd>
    <dt>Tentacle</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (1D8 +3) Bludgeoning + (1D8) Piercing. If the target is Medium or smaller, it is Grappled (escape DC 13) and Restrained until the Grapple ends. The Otyugh has 2 tentacles, each of which can grapple one target.</dd>
    <dt>Tentacle Slam</dt> <dd>The Otyugh slams creatures Grappled by it into each other or a solid surface. Each creature must succeed on a DC 14 CON Save or take (2D6 +3) Bludgeoning damage and be Stunned 1. On a Successful Save, the target takes half the Bludgeoning damage and isn't Stunned.</dd>
</dl>";
        $helper->saveMonster($monster, ['Beast'], [
            'stats'    => [16, 11, 19, 6, 13, 6, 5, 3],
            'saves'    => ['CON' => ['bonus' => 7]],
            'features' => [
                'darkvision' => ['meta' => '120 ft'],
            ],
            'feats' => [
                'Extra Melee Action' => ['meta' => 'The extra Action can only be used to make Tentacle attacks (including the Slam)'],
                'Multi Attacker', 'Improved Multi Attacker',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft. Can transmit simple messages and images, but could not receive messages'],
                'Special'   => ['meta' => 'Some learn one or two languages of the region'],
            ],
        ]);
    }
}
