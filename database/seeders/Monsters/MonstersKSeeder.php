<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersKSeeder extends Seeder
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
        $monster->name             = 'Kobold';
        $monster->size             = 'Small';
        $monster->type             = 'Kobold';
        $monster->alignment        = 'N';
        $monster->armor_class      = '12';
        $monster->damage_reduction = 1;
        $monster->hit_dice         = 2;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Dagger</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D4 Piercing.</dd>
    <dt>Sling</dt> <dd>Range Weapon Attack, reach 30/120 ft, one target. 1D4 Bludgeoning.</dd>
</dl>';
        $helper->saveMonster($monster, ['Kobold', 'Dragon'], [
            'stats'    => [7, 15, 9, 8, 7, 8, .125, 2],
            'features' => [
                'darkvision' => ['meta' => '{"range":60}'],
                'sunlight_sensitivity',
            ],
            'languages' => ['Yipyak'],
            'talents'   => ['Improved Flanking'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Kobold, Winged';
        $monster->size             = 'Small';
        $monster->type             = 'Kobold';
        $monster->alignment        = 'N';
        $monster->armor_class      = '13';
        $monster->damage_reduction = 1;
        $monster->hit_dice         = 2;
        $monster->speed            = '30 ft / Fly 30 ft';
        $monster->actions          = '<dl>
    <dt>Dagger</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D4 Piercing.</dd>
    <dt>Sling</dt> <dd>Range Weapon Attack, reach 30/120 ft, one target. 1D4 Bludgeoning.</dd>
</dl>';
        $helper->saveMonster($monster, ['Kobold', 'Dragon'], [
            'stats'    => [7, 16, 9, 8, 7, 8, .25, 2],
            'features' => [
                'darkvision' => ['meta' => '{"range":60}'],
                'sunlight_sensitivity',
            ],
            'languages' => ['Yipyak'],
            'talents'   => ['Improved Flanking'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Kraken';
        $monster->size             = 'Gargantuan';
        $monster->type             = 'Titan';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '7';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 27;
        $monster->speed            = '20 ft / Swim 60 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 23 (3D8 +10) Piercing damage. If the target is a Large or smaller creature grappled by the kraken, that creature is swallowed, and the Grapple ends. While swallowed, the creature is Blinded and Restrained, it has Total Cover against attacks and other effects outside the kraken, and it takes 42 (12D6) Acid damage at the start of each of the kraken's turns. If the kraken takes 50 damage or more on a single turn from a creature inside it, the kraken must succeed on a DC 25 CON Save at the end of that turn or regurgitate all swallowed creatures, which fall prone in a space within 10 feet of the kraken. If the kraken dies, a swallowed creature is no longer restrained by it and can escape from the corpse using 15 feet of movement, exiting prone.</dd>
    <dt>Tentacle</dt> <dd>Melee Weapon Attack, reach 30 ft, one target. 20 (3D6 +10) Bludgeoning damage, and the target is Grappled (escape DC 18). Until the Grapple ends, the target is Restrained. The kraken has ten tentacles, each of which can Grapple one target.</dd>
    <dt>Fling</dt> <dd>One Large or smaller object held or creature Grappled by the kraken is thrown up to 60 feet in a random direction and knocked prone. if a thrown target strikes a solid surface, the target takes 3 (1D6) Bludgeoning damage for every 10 feet it was thrown. If the target is thrown at another creature, that creature must succeed on a DC 18 DEX Save or take the same damage and be knocked prone.</dd>
    <dt>Lightning Storm</dt> <dd>Double Action. The kraken magically creates three bolts of lightning, each of which can strike a target the kraken can see within 120 feet of it. A target must make a DC 23 DEX Save, taking 22 (4D10) Electricity damage on a failed Save, or half as much damage on a successful one.</dd>
    <dt>Ink Cloud</dt> <dd>Triple Action. While underwater, the kraken expels an ink cloud in a 60-foot radius. The cloud spreads around corners, and that area is heavily obscured to creatures other than the kraken. each creature other than the kraken that ends its turn there must succeed on a DC 23 CON Save, taking 16 (3D10) Poison damage on a failed Save, or half as much damage on a successful one. A strong current disperses the cloud, which otherwise disappears at the end of the kraken's next turn.</dd>
</dl>";
        $monster->description = '<p>Krakens, called Lopok by the Locathah, are large ocean-dwelling titans.</p>
<p>Krakens are feared across the known world. They are creatures that dwell in the depths of the ocean and come to the surface to prey upon ships and their crews.</p>
<p>They are akin to squids except larger, with a body almost 30 feet long. They have a similar body, with a ring of tentacles surrounding a mouth connected to a conical central body. Two of its ten tentacles are longer than the rest and have deadly barbs. The kraken has very large eyes, and fins protruded from the upper part of its elongated central body.</p>
<p>When younger, krakens resembled a pale squid.</p>
<p>Krakens are highly destructive and evil creatures. With their strong tentacles and massive strength, they can pull an entire ship down into the ocean. They often completely wipe tropical islands of all life, and deep beneath the ocean, they have cavernous lairs where they breed human slaves to feed and tend them.</p>
<p>In the area around Seros, krakens are known to be actively hunted by both Storm Giants and Merrorws, keeping their population low.</p>
<p>Krakens are supposedly once the rulers of the sea, but eventually the forces of good drove them back, though legends say they will one day rise again.</p>
<p>Known krakens</p>
<ul>
    <li>Gethshemeth, an ally to the morkoth Arcanum of Olleth who took control of an aberrant artifact called Dreamheart and became enthralled by the Abolethic Sovereignty.</li>
    <li>Slakrethel, an ancient kraken that rules the Purple Rocks and heads the Kraken Society as their master</li>
    <li>Xisar, a powerful blue-skinned kraken that terrorizes the land of Seros.</li>
</ul>';
        $helper->saveMonster($monster, ['Titan'], [
            'stats' => [30, 11, 25, 22, 18, 20, 23, 8],
            'saves' => [
                'STR' => ['bonus' => 17],
                'DEX' => ['bonus' => 7],
                'CON' => ['bonus' => 14],
                'INT' => ['bonus' => 13],
                'WIS' => ['bonus' => 11],
            ],
            'features' => [
                'siege'        => ['meta' => 'Double damage'],
                'immunity'     => ['meta' => 'Electricity, Frightened, Paralyzed'],
                'multi_attack' => ['meta' => 'The kraken gains 2 additional Actions. Each of these Actions can be used to make Tentacle or Fling attacks'],
                'amphibious', 'freedom_movement',
            ],
            'spells' => [
                'True Seeing' => ['meta' => 'At will'],
            ],
            'languages' => [
                'Abyssal'   => ['meta' => "Can't speak"],
                'Celestial' => ['meta' => "Can't speak"],
                'Infernal'  => ['meta' => "Can't speak"],
                'Telepathy' => ['meta' => '120 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Kuo-Toa';
        $monster->size             = 'Medium';
        $monster->type             = 'Aberration';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '15 (Sticky Shield)';
        $monster->damage_reduction = 1;
        $monster->hit_dice         = 4;
        $monster->speed            = '30 ft / Swim 30 ft';
        $monster->actions          = "<dl>
    <dt>Spear</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 + 1 Piercing.</dd>
    <dt>Sticky Net</dt> <dd>DEX Save DC 10. one Large or smaller creature the kuo-toa can see within 15 feet. Failure: THe target is Restrained until the net is destroyed (AC 10; HP 5; Immunity to Bludgeoning, Poison, and Ability Damage) A creature can take an Action to make a DC 10 STR (Athletics) check to free itself or another creature in a net within 5 feet, destroying the net on a Success.</dd>
    <dt>Sticky Shield</dt> <dd>If the creature misses the Kuo-Toa, the creature must make a STR Save DC 11. Failure: The attack's weapon sticks to the Kuo-Toa's shield. If the target doesn't let go of the weapon, the target is Grappled while the weapon is stuck (Escape DC 11). While stuck, the weapon can't be used. The target can take an Action to make a DC 11 STR (Athletics) check, freeing the weapon on Success.</dd>
</dl>";
        $helper->saveMonster($monster, ['Aberration'], [
            'stats'    => [13, 10, 11, 11, 10, 8, .25, 2],
            'features' => [
                'darkvision' => ['meta' => '{"range":120}'],
                'amphibious',
                'sunlight_sensitivity',
            ],
            'languages' => ['Deep Speech'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Kuo-Toa, Whip';
        $monster->size             = 'Medium';
        $monster->type             = 'Aberration';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '13';
        $monster->damage_reduction = 1;
        $monster->hit_dice         = 4;
        $monster->speed            = '30 ft / Swim 30 ft';
        $monster->actions          = "<dl>
    <dt>Pincer Staff</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 2D6 + 2 Piercing. If the target is a Medium or smaller creature, it is Grappled (Escape DC 12). Until the Grappled condition ends, the Kuo-Toa can't use the Pincer Staff to attack and must use at least an Action to continue the Grapple.</dd>
    <dt>Conjure Slimy Glob</dt> <dd>Ranged Attack, range 60 ft 3D4 +2 Acid Damage.</dd>
</dl>";
        $helper->saveMonster($monster, ['Aberration'], [
            'stats'    => [14, 10, 14, 12, 14, 11, 0, 2],
            'features' => [
                'darkvision' => ['meta' => '{"range":120}'],
                'amphibious',
                'sunlight_sensitivity',
            ],
            'spells'    => [
                'Poison Spray'      => ['meta' => 'Cantrip'],
                'Shocking Grasp'    => ['meta' => 'Cantrip'],
                'Resist'            => ['meta' => 'Cantrip'],
                'Cure Wounds'       => ['meta' => '1st level'],
                'Shield of Faith'   => ['meta' => '1st level'],
            ],
            'classes'   => ['Priest of Blibdoolpoolp' => ['level' => 2]],
            'languages' => ['Deep Speech'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Kuo-Toa, Monitor';
        $monster->size             = 'Medium';
        $monster->type             = 'Aberration';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '14 (Leather Armor)';
        $monster->damage_reduction = 2;
        $monster->hit_dice         = 4;
        $monster->speed            = '30 ft / Swim 30 ft';
        $monster->actions          = "<dl>
    <dt>Pincer Staff</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 2D6 + 2 Piercing. If the target is a Medium or smaller creature, it is Grappled (Escape DC 12). Until the Grappled condition ends, the Kuo-Toa can't use the Pincer Staff to attack and must use at least an Action to continue the Grapple.</dd>
    <dt>Conjure Slimy Glob</dt> <dd>Ranged Attack, range 60 ft 3D4 +2 Acid Damage.</dd>
</dl>";
        $helper->saveMonster($monster, ['Aberration'], [
            'stats'    => [16, 10, 14, 12, 14, 11, 3, 2],
            'features' => [
                'darkvision' => ['meta' => '{"range":120}'],
                'amphibious',
                'sunlight_sensitivity',
                'good_at_talents',
            ],
            'feats'     => [
                'Weapon Finesse',
                'Improved Disarm',
                'Improved Trip',
                'Weapon Focus' => ['meta' => 'Whip'],
                'Extra Melee Action',
            ],
            'talents'   => ['Improved Reaction'],
            'classes'   => ['Fighter' => ['level' => 5]],
            'languages' => ['Deep Speech'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Kuo-Toa, Archpriest';
        $monster->size             = 'Medium';
        $monster->type             = 'Aberration';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '13';
        $monster->damage_reduction = 1;
        $monster->hit_dice         = 4;
        $monster->speed            = '30 ft / Swim 30 ft';
        $monster->actions          = "<dl>
    <dt>Pincer Staff</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 2D6 + 2 Piercing. If the target is a Medium or smaller creature, it is Grappled (Escape DC 12). Until the Grappled condition ends, the Kuo-Toa can't use the Pincer Staff to attack and must use at least an Action to continue the Grapple.</dd>
    <dt>Conjure Slimy Glob</dt> <dd>Ranged Attack, range 60 ft 3D4 +2 Acid Damage.</dd>
</dl>";
        $helper->saveMonster($monster, ['Aberration'], [
            'stats'    => [16, 10, 14, 12, 14, 11, 3, 2],
            'features' => [
                'darkvision' => ['meta' => '{"range":120}'],
                'amphibious',
                'sunlight_sensitivity',
            ],
            'spells'    => [
                'Poison Spray'      => ['meta' => 'Cantrip'],
                'Shocking Grasp'    => ['meta' => 'Cantrip'],
                'Resist'            => ['meta' => 'Cantrip'],
                'Cure Wounds'       => ['meta' => '1st level'],
                'Shield of Faith'   => ['meta' => '1st level'],
                'Hold Person'       => ['meta' => '2nd level'],
                'Eradicate Water'   => ['meta' => '3rd level'],
                'Tongues'           => ['meta' => '3rd level'],
                'Divination'        => ['meta' => '4th level'],
                'Lightning Bolt'    => ['meta' => '4th level'],
                'Destructive Wave'  => ['meta' => '5th level'],
                'Scrying'           => ['meta' => '5th level'],
            ],
            'classes'   => ['Priest of Blibdoolpoolp' => ['level' => 11]],
            'languages' => ['Deep Speech'],
        ]);
    }
}
