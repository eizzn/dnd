<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ElementalsSeeder extends Seeder
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

        $monster              = new Monster;
        $monster->name        = 'Air Mephit';
        $monster->size        = 'Small';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N(E)';
        $monster->armor_class = '13';
        $monster->hit_dice    = 5;
        $monster->speed       = '30 ft / Fly 40 ft';
        $monster->actions     = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 -3) Slashing.</dd>
    <dt>Blinding Breath (Recharge 6)</dt> <dd>The mephit exhales a 15-foot cone of blinding dust. Each creature in that area must succeed on a DC 10 DEX Save or be blinded for 1 minute. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</dd>
</dl>';
        $monster->description = '<p>An air mephit are about four feet tall and weighed only a pound. They have pale white skin. Like all mephits, air mephits are impish in appearance and have wispy wings, which sprouted from their humanoid upper torsos. They have whirlwinds where one would expect their legs to be.</p>
<p>Air mephits tend to me more skittish than other mephits.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Air', 'Outer Planes', 'Outsider'], [
            'stats'  => [5, 16, 10, 8, 11, 10, .5, 3],
            'skills' => [
                'Perception' => ['dc' => 3],
                'Stealth'    => ['dc' => 4],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'immunity'            => ['meta' => 'Electricity, Poison, Sickened'],
                'innate_spellcasting' => ['meta' => 'DC 10'],
            ],
            'feats'  => ['Weapon Finesse'],
            'spells' => [
                'Gust of Wind' => ['meta' => '1/day'],
            ],
            'languages' => ['Auran'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Dust Mephit';
        $monster->size        = 'Small';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N(E)';
        $monster->armor_class = '12';
        $monster->hit_dice    = 5;
        $monster->speed       = '30 ft / Fly 30 ft';
        $monster->actions     = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 -3) Slashing.</dd>
    <dt>Blinding Breath (Recharge 6)</dt> <dd>The mephit exhales a 15-foot cone of blinding dust. Each creature in that area must succeed on a DC 10 DEX Save or be blinded for 1 minute. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</dd>
    <dt>Death Burst</dt> <dd>When the mephit dies, it explodes in a burst of dust. Each creature within 5 ft. of it must then succeed on a DC 10 CON Save or be blinded for 1 minute. A blinded creature can repeat the Save on each of its turns, ending the effect on itself on a success.</dd>
</dl>';
        $monster->description = '<p>A dust mephit is a mephit from the Quasi-Elemental Plane of Dust.</p>
<p>A dust mephit is about four feet tall and weighed a couple pounds. They have rough gray skin, which seems to produce dust and grit constantly as they move. Like all mephits, dust mephits are impish in appearance and have wispy wings.</p>
<p>Dust mephits typically seem sorrowful and irritable.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Earth', 'Air', 'Outer Planes', 'Outsider'], [
            'stats'  => [5, 14, 10, 9, 11, 10, .5, 3],
            'skills' => [
                'Perception' => ['dc' => 2],
                'Stealth'    => ['dc' => 4],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'immunity'            => ['meta' => 'Poison, Sickened'],
                'vulnerability'       => ['meta' => 'Fire'],
                'innate_spellcasting' => ['meta' => 'DC 10'],
            ],
            'feats'  => ['Weapon Finesse'],
            'spells' => [
                'Sleep' => ['meta' => '1/day'],
            ],
            'languages' => ['Auran', 'Terran'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Earth Mephit';
        $monster->size        = 'Small';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N(E)';
        $monster->armor_class = '12 (Natural Armor +1)';
        $monster->hit_dice    = 5;
        $monster->speed       = '20 ft / Fly 30 ft';
        $monster->actions     = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4) Slashing.</dd>
    <dt>Pebble Breath (Recharge 6)</dt> <dd>The mephit exhales a 15-foot cone of small pebbles. Each creature in that area must make a DC 11 DEX Save, taking 7 (2D6) Bludgeoning damage on a failed Save, or half as much damage on a successful one.</dd>
</dl>';
        $monster->description = '<p>Earth mephits are roughly humanoid, winged creatures with a height of 4 feet and weighed 80 pounds.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Earth', 'Outer Planes', 'Outsider'], [
            'stats'  => [10, 12, 12, 7, 10, 10, .5, 3],
            'skills' => [
                'Perception' => ['dc' => 2],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'immunity'            => ['meta' => 'Poison, Sickened'],
                'innate_spellcasting' => ['meta' => 'DC 10'],
            ],
            'spells' => [
                'Mold Earth' => ['meta' => '1/day'],
                'Enlarge'    => ['meta' => '1/day, self only'],
            ],
            'feats'     => ['Weapon Finesse'],
            'languages' => ['Terran'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Fire Mephit';
        $monster->size        = 'Small';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N(E)';
        $monster->armor_class = '12';
        $monster->hit_dice    = 5;
        $monster->speed       = '30 ft / Fly 30 ft';
        $monster->actions     = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 -3) Slashing + 1D6 Fire.</dd>
    <dt>Fire Breath (Recharge 6)</dt> <dd>The mephit exhales a 30-foot by 5-foot line of Fire. Each creature in the area must make a DC 11 DEX Save, taking 3D6 Fire damage on a Failed Save or half on a Successful Save</dd>
</dl>';
        $monster->description = "<p>A fire mephit is a mephit from the Elemental Plane of Fire.</p>
<p>Fire mephits have red bodies that are streaked in black. These miniature devils are surrounded in flames, and halos of fire cover their wings.</p>
<p>Their wings are sometimes said to be bat-like, and they sometimes have fake facial hair, such as mustaches and goatees.</p>
<p>They are proud of their heritage, and believe themselves superior to creatures that aren't fire-based. Fire mephits indulge in torturing such creatures. As well as more serious forms of interaction, these mephits are very mischievous and natural pranksters.</p>";
        $helper->saveMonster($monster, ['Elemental', 'Fire', 'Outer Planes', 'Outsider'], [
            'stats'  => [5, 14, 12, 7, 10, 10, .5, 3],
            'skills' => [
                'Perception' => ['dc' => 1],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'immunity'            => ['meta' => 'Fire, Poison, Sickened'],
                'vulnerability'       => ['meta' => 'Cold, Water'],
                'innate_spellcasting' => ['meta' => 'DC 10'],
            ],
            'spells' => [
                'Fire Bolt'  => ['meta' => '3/day'],
                'Heat Metal' => ['meta' => '1/day'],
            ],
            'feats'     => ['Weapon Finesse'],
            'languages' => ['Ignan'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Ice Mephit';
        $monster->size        = 'Small';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N(E)';
        $monster->armor_class = '11';
        $monster->hit_dice    = 6;
        $monster->speed       = '30 ft / Fly 30 ft';
        $monster->actions     = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 -1) Slashing + (1D4) Cold.</dd>
    <dt>Frost Breath (Recharge 6)</dt> <dd>The mephit exhales a 15-foot cone of cold air. Each creature in that area must succeed on a DC 10 DEX Save, taking 5 (2D4) Cold damage on a failed Save, or half as much damage on a successful one.</dd>
</dl>';
        $monster->description = '<p>Ice Mephits are mephits composed of Air and Water. They are cold and indifferent, and the most cruel of all the mephits.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Cold', 'Air', 'Water', 'Outer Planes', 'Outsider'], [
            'stats'  => [7, 13, 10, 9, 11, 12, .5, 3],
            'skills' => [
                'Perception' => ['dc' => 2],
                'Stealth'    => ['dc' => 3],
            ],
            'features' => [
                'darkvision'       => ['meta' => '60 ft'],
                'immunity'         => ['meta' => 'Cold, Poison, Sickened'],
                'vulnerability'    => ['meta' => 'Bludgeoning, Fire'],
                'false_appearance' => ['meta' => 'While the mephit remains motionless, it is indistinguishable from an ordinary shard of ice.'],
            ],
            'feats'     => ['Weapon Finesse'],
            'languages' => ['Aquan', 'Auran'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Magma Mephit';
        $monster->size        = 'Small';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N(E)';
        $monster->armor_class = '11';
        $monster->hit_dice    = 5;
        $monster->speed       = '30 ft / Fly 30 ft';
        $monster->actions     = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 -1) Slashing + (1D4) Cold.</dd>
    <dt>Frost Breath (Recharge 6)</dt> <dd>The mephit exhales a 15-foot cone of Fire. Each creature in that area must make a DC 11 DEX Save, taking 7 (2D6) Fire damage on a failed Save, or half as much damage on a successful one.</dd>
    <dt>Death Burst</dt> <dd>When the mephit dies, it explodes in a burst of lava. Each creature within 5 ft. of it must make a DC 11 DEX Save, taking 7 (2D6) Fire damage on a failed Save, or half as much damage on a successful one.</dd>
</dl>';
        $monster->description = '<p>A magma mephit, or a lava mephit, is a mephit composed of earth and fire. They emit a red glow and are slow to understand other creatures.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Earth', 'Fire', 'Outer Planes', 'Outsider'], [
            'stats'  => [8, 12, 12, 7, 10, 10, .5, 3],
            'skills' => [
                'Stealth' => ['dc' => 3],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'immunity'            => ['meta' => 'Fire, Poison, Sickened'],
                'vulnerability'       => ['meta' => 'Cold'],
                'false_appearance'    => ['meta' => 'While the mephit remains motionless, it is indistinguishable from an ordinary mound of magma.'],
                'innate_spellcasting' => ['meta' => 'DC 10'],
            ],
            'spells' => [
                'Heat Metal' => ['meta' => '1/day'],
            ],
            'feats'     => ['Weapon Finesse'],
            'languages' => ['Ignan', 'Terran'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Mud Mephit';
        $monster->size        = 'Small';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N(E)';
        $monster->armor_class = '11';
        $monster->hit_dice    = 6;
        $monster->speed       = '20 ft / Fly 20 ft / Swim 20 ft';
        $monster->actions     = '<dl>
    <dt>Fist</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 -1) Bludgeoning.</dd>
    <dt>Mud Breath (Recharge 6)</dt> <dd>The mephit belches viscid mud onto one creature within 5 ft. of it. If the target is Medium or smaller, it must succeed on a DC 11 DEX Save or be restrained for 3 rounds. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</dd>
    <dt>Death Burst</dt> <dd>When the mephit dies, it explodes in a burst of sticky mud. Each Medium or smaller creature within 5 ft. of it must succeed on a DC 11 DEX Save or be restrained until the end of the creature\'s next turn.</dd>
</dl>';
        $monster->description = '<p>Mud mephits are mephits composed of water and earth. They are slow, greedy and falsely polite, constantly complaining and seeking attention.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Earth', 'Water', 'Outer Planes', 'Outsider'], [
            'stats'  => [8, 12, 12, 9, 11, 7, .25, 3],
            'skills' => [
                'Stealth' => ['dc' => 3],
            ],
            'features' => [
                'darkvision'       => ['meta' => '60 ft'],
                'immunity'         => ['meta' => 'Poison, Sickened'],
                'false_appearance' => ['meta' => 'While the mephit remains motionless, it is indistinguishable from an ordinary mound of mud.'],
            ],
            'feats'     => ['Weapon Finesse'],
            'languages' => ['Aquan', 'Terran'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Smoke Mephit';
        $monster->size        = 'Small';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N(E)';
        $monster->armor_class = '12';
        $monster->hit_dice    = 5;
        $monster->speed       = '30 ft / Fly 30 ft';
        $monster->actions     = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 -2) Slashing.</dd>
    <dt>Cinder Breath (Recharge 6)</dt> <dd>The mephit exhales a 15-foot cone of smoldering ash. Each creature in that area must succeed on a DC 10 DEX Save or be Blinded until the end of the mephit\'s next turn.</dd>
    <dt>Death Burst</dt> <dd>When the mephit dies, it leaves behind a cloud of smoke that fills a 5-foot radius sphere centered on its space. The sphere is heavily obscured. Wind disperses the cloud which otherwise lasts for 1 minute.</dd>
</dl>';
        $monster->description = '<p>Smoke mephits are mephits composed of air and fire. They are crude and lazy, as well as liars and tricksters who thrive on mockery and misdirection.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Air', 'Fire', 'Outer Planes', 'Outsider'], [
            'stats'  => [6, 14, 12, 10, 10, 11, .25, 3],
            'skills' => [
                'Perception' => ['dc' => 2],
                'Stealth'    => ['dc' => 4],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'immunity'            => ['meta' => 'Fire, Poison, Sickened'],
                'false_appearance'    => ['meta' => 'While the mephit remains motionless, it is indistinguishable from an ordinary mound of mud.'],
                'innate_spellcasting' => ['meta' => 'DC 10'],
            ],
            'spells' => [
                'Dancing Lights' => ['meta' => '1/day'],
            ],
            'feats'     => ['Weapon Finesse'],
            'languages' => ['Aquan', 'Ignan'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Steam Mephit';
        $monster->size        = 'Small';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N(E)';
        $monster->armor_class = '10';
        $monster->hit_dice    = 6;
        $monster->speed       = '30 ft / Fly 30 ft';
        $monster->actions     = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 -3) Slashing + (1D4) Fire.</dd>
    <dt>Steam Breath (Recharge 6)</dt> <dd>The mephit exhales a 15-foot cone of scalding steam. Each creature in that area must succeed on a DC 10 DEX Save, taking 4 (1D8) Fire damage on a failed Save, or half as much damage on a successful one.</dd>
    <dt>Death Burst</dt> <dd>When the mephit dies, it explodes in a cloud of steam. Each creature within 5 ft. of the mephit must succeed on a DC 10 DEX Save or take 4 (1D8) Fire damage.</dd>
</dl>';
        $monster->description = '<p>Steam mephits are mephits composed of water and fire. They leave trails of hot water when they move, and consider themselves the lords of all mephits.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Air', 'Fire', 'Outer Planes', 'Outsider'], [
            'stats'    => [5, 11, 10, 11, 10, 12, .25, 3],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'immunity'            => ['meta' => 'Fire, Poison, Sickened'],
                'innate_spellcasting' => ['meta' => 'DC 10'],
            ],
            'spells' => [
                'Blur' => ['meta' => '1/day'],
            ],
            'feats'     => ['Weapon Finesse'],
            'languages' => ['Aquan', 'Ignan'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Water Mephit';
        $monster->size        = 'Small';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N(E)';
        $monster->armor_class = '10';
        $monster->hit_dice    = 6;
        $monster->speed       = '30 ft / Fly 30 ft / Swim 90 ft';
        $monster->actions     = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 -2) Slashing.</dd>
    <dt>Acid Breath (Recharge 6)</dt> <dd>The mephit exhales a 15-foot cone of Acid. Each creature in that area must succeed on a DC 10 DEX Save, taking 4 (1D8) Acid damage on a failed Save, or half as much damage on a successful one.</dd>
</dl>';
        $monster->description = '<p>Steam mephits are mephits composed of water and fire. They leave trails of hot water when they move, and consider themselves the lords of all mephits.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Water', 'Outer Planes', 'Outsider'], [
            'stats'    => [7, 11, 10, 11, 10, 12, .25, 3],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'immunity'            => ['meta' => 'Acid, Poison, Sickened, [Piercing, Slashing]'],
                'vulnerability'       => ['meta' => 'Cold, Electricity'],
                'innate_spellcasting' => ['meta' => 'DC 10'],
            ],
            'feats'     => ['Weapon Finesse'],
            'languages' => ['Aquan'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Air Elemental';
        $monster->size        = 'Large';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N';
        $monster->armor_class = '15';
        $monster->hit_dice    = 10;
        $monster->speed       = '0 ft / Fly 90 ft';
        $monster->actions     = "<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D8 + 2) Bludgeoning.</dd>
    <dt>Whirlwind (Recharge 4-6)</dt> <dd>Each creature in the elemental's space must make a DC 13 STR Save. On a failure, a target takes 15 (3D8 + 2) Bludgeoning damage and is flung up 20 feet away from the elemental in a random direction and knocked prone. If a thrown target strikes an object, such as a wall or floor, the target takes 3 (1D6) Bludgeoning damage for every 10 feet it was thrown. If the target is thrown at another creature, that creature must succeed on a DC 13 DEX Save or take the same damage and be knocked prone. If the Save is successful, the target takes half the Bludgeoning damage and isn\'t flung away or knocked prone.</dd>
    <dt>Air Form</dt> <dd>The elemental can enter a hostile creature's space and stop there. It can move through a space as narrow as 1 inch wide without squeezing.</dd>
</dl>";
        $monster->description = '<p>When summoned to the Prime Material plane, air elementals typically appear as an amorphous, ever-shifting cloud. Whenever they make the rare attempt to speak, it resembled either the high-pitched shriek of a tornado or the low rumbling moan of a thunderstorm.</p>
<p>Air elementals are capable of altering their bodies in the form of a small whirlwind. Over the ages, the height and diameters of these whirlwinds varied significantly, especially depending upon how powerful an air elemental is. Some are reported to be as small as 8‒16 ft tall, while others were reported being as tall as 40‒80 ft tall.</p>
<p>Though they all roughly share the same abilities, those in the Elemental Plane of Air that are incapable of being summoned are known to possess even greater powers.</p>
<p>Air elementals subsist on the consumption of solely air itself.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Air', 'Outer Planes', 'Outsider'], [
            'stats'    => [14, 20, 14, 6, 10, 6, 5, 4],
            'features' => [
                'darkvision' => ['meta' => '60 ft'],
                'resistance' => ['meta' => 'Electricity, Sonic, [Bludgeoning, Piercing, Slashing]'],
                'immunity'   => ['meta' => 'Poison, Sickened, Exhaustion, Grapple, Paralyzed, Petrified, Prone, Restrained, Unconscious'],
            ],
            'feats'     => ['Weapon Finesse'],
            'languages' => ['Auran'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Earth Elemental';
        $monster->size             = 'Large';
        $monster->type             = 'Elemental';
        $monster->alignment        = 'N';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 10;
        $monster->speed            = '30 ft / Burrow 30 ft';
        $monster->actions          = '<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D8 + 5) Bludgeoning.</dd>
    <dt>Earth Glide</dt> <dd>The elemental can burrow through nonmagical, unworked earth and stone. While doing so, the elemental doesn\'t disturb the material it moves through.</dd>
</dl>';
        $monster->description = '<p>Earth Elementals have a vaguely humanoid shape, with club-like arms made of jagged stone and a head made of both dirt and stone. Occasionally chunks of minerals, gems, or metals are set within their stony bodies.</p>
<p>Their bodies typically move at a slow, prodding pace.</p>
<p>Earth elementals are not especially intelligent. However, like all elementals, they instinctively resent any creature that conjures them from their home plane and bind them into its service.</p>
<p>Being elementals, these creatures do not require any air, food, drink, or sleep to survive.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Earth', 'Outer Planes', 'Outsider'], [
            'stats'    => [20, 8, 20, 6, 11, 5, 5, 4],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'resistance'    => ['meta' => '[Bludgeoning, Piercing, Slashing] (Fire, Electricity)'],
                'immunity'      => ['meta' => 'Poison, Sickened, Exhaustion, Petrified, Prone, Unconscious'],
                'vulnerability' => ['meta' => 'Acid, Sonic'],
                'siege'         => ['meta' => 'Double damage'],
            ],
            'feats'     => ['Tremorsense'],
            'languages' => ['Terran'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Fire Elemental';
        $monster->size        = 'Large';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N';
        $monster->armor_class = '13';
        $monster->hit_dice    = 10;
        $monster->speed       = '50 ft';
        $monster->actions     = '<dl>
    <dt>Touch</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 + 3) Fire. If the target is a creature or a flammable object, it ignites. Until a creature takes an Action to douse the fire, the target takes 5 (1D10) Fire damage at the start of each of its turns.</dd>
    <dt>Fire Form</dt> <dd>The elemental can move through a space as narrow as 1 inch wide without squeezing. A creature that touches the elemental or hits it with a melee attack while within 5 ft. of it takes 5 (1D10) Fire damage. In addition, the elemental can enter a hostile creature\'s space and stop there. The first time it enters a creature\'s space on a turn, that creature takes 5 (1D10) Fire damage and catches Fire; until someone takes an Action to douse the fire, the creature takes 5 (1D10) Fire damage at the start of each of its turns.</dd>
    <dt>Illumination</dt> <dd>The elemental sheds bright light in a 30-foot radius and dim light in an additional 30 ft.</dd>
    <dt>Water Susceptibility</dt> <dd>For every 5 ft the elemental moves in water, or for every gallon of water splashed on it, it takes 1 Cold damage.</dd>
</dl>';
        $monster->description = '<p>Fire Elementals are fast and agile creatures whose touch can set objects aflame. Owing to their fiery nature, they are unable to enter water. They are capable of speaking Ignan although they rarely spoke.</p>
<p>Being elementals, these creatures do not require any air, food, drink, or sleep to survive.</p>
<p>Besides fire, these elementals have ichor flowing through their bodies, which could be used as a magical ingredient.</p>
<p>Fire elementals usually choose to burn opponents with their touch. They attack ferociously, enjoying burning things in the material plane to cinders. The fire elemental can also slam an opponent, possibly causing them to catch fire.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Fire', 'Outer Planes', 'Outsider'], [
            'stats'    => [10, 17, 16, 6, 10, 7, 5, 4],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'resistance'    => ['meta' => '[Bludgeoning, Piercing, Slashing] (Electricity, Sonic)'],
                'immunity'      => ['meta' => 'Fire, Poison, Sickened, Exhaustion, Grapple, Petrified, Prone, Restrained, Unconscious'],
                'vulnerability' => ['meta' => 'Cold, Water'],
            ],
            'feats'     => ['Weapon Finesse'],
            'languages' => ['Ignan'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Ice Elemental';
        $monster->size        = 'Large';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N';
        $monster->armor_class = '16 (Natural Armor)';
        $monster->hit_dice    = 12;
        $monster->speed       = '30 ft';
        $monster->actions     = "<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack +7 to hit, reach 10 ft, one target 2D6 +4 Bludgeoning damage + 1D6 Cold damage</dd>
    <dt>Ice Walk</dt> <dd>The Ice Elemental can move across and climb icy surfaces without needing to make an ability check. Additionally, difficult terrain composed of ice or snow doesn't cost it extra movement</dd>
    <dt>Aura of Bitter Cold</dt> <dd>At the start of each of the Ice Elemental's turns, each creature within 10 feet of it takes 2D6 Cold damage.</dd>
</dl>";
        $helper->saveMonster($monster, ['Elemental', 'Cold', 'Outer Planes', 'Outsider'], [
            'stats'    => [18, 10, 20, 5, 10, 6, 5, 4],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'resistance'    => ['meta' => '[Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Cold, Poison, Sickened, Exhaustion, Paralyzed, Petrified, Prone, Restrained, Unconscious'],
                'vulnerability' => ['meta' => 'Fire, Sonic'],
            ],
            'languages' => ['Aquan', 'Auran'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Water Elemental';
        $monster->size             = 'Large';
        $monster->type             = 'Elemental';
        $monster->alignment        = 'N';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 10;
        $monster->speed            = '30 ft / Swim 90 ft';
        $monster->actions          = "<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D8 + 4) Bludgeoning.</dd>
    <dt>Whelm (Recharge 4-6)</dt> <dd>As a Triple Action, each creature in the elemental's space must make a DC 15 STR Save. On a failure, a target takes 13 (2D8 + 4) Bludgeoning damage. If it is Large or smaller, it is also Grappled (escape DC 14). Until this grapple ends, the target is Restrained and unable to breathe unless it can breathe water. If the Save is successful, the target is pushed out of the elemental's space. The elemental can Grapple one Large creature or up to two Medium or smaller creatures at one time. At the start of each of the elemental\'s turns, each target grappled by it takes 13 (2D8 + 4) Bludgeoning damage. A creature within 5 feet of the elemental can pull a creature or object out of it by taking an Action to make a DC 14 STR check and succeeding.</dd>
    <dt>Water Form</dt> <dd>The elemental can enter a hostile creature's space and stop there. It can move through a space as narrow as 1 inch wide without squeezing.</dd>
    <dt>Freeze</dt> <dd>If the elemental takes Cold damage, it partially freezes. It gains the Slowed Condition for a number of rounds equal to the Cold damage divided by 10 (rounded up).</dd>
</dl>";
        $monster->description = '<p>These elementals typically resemble a cresting wave of water. They can easily disappear within a body of water, becoming indistinguishable from all other liquid.</p>
<p>These beings are not especially intelligent. However, like all elementals, they instinctively resent any creature that conjures them from their home plane and bind them into its service.</p>
<p>Being elementals, these creatures do not require any air, food, drink, or sleep to survive. Though they have a highly developed sense of taste.</p>
<p>Due to being composed of water, these elementals can effortlessly move through spaces as small as 1 inch. However, cold-based spells considerably restrained their movement.</p>
<p>Acid, as well as bludgeoning and piercing weaponry, are ineffective against water elementals.</p>
<p>Water elementals preferr to fight in bodies of water. They are capable of capsizing small boats and can impede the progress of larger craft. Outside of water they aer slower and less effective combatants.</p>
<p>Water elementals will often attempt to grapple a larger creature or multiple smaller ones, restraining them within their watery body in an attempt to drown the victim(s). When not attempting this, water elementals will simply slam their bodies against opponents.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Water', 'Outer Planes', 'Outsider'], [
            'stats'    => [18, 14, 18, 5, 10, 8, 5, 4],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'resistance'    => ['meta' => 'Acid, [Bludgeoning, Piercing, Slashing] (Sonic)'],
                'immunity'      => ['meta' => 'Poison, Sickened, Exhaustion, Grapple, Paralyzed, Petrified, Prone, Restrained, Unconscious'],
                'vulnerability' => ['meta' => 'Fire'],
            ],
            'spells' => [
                'Fog Cloud' => ['meta' => 'At will'],
            ],
            'languages' => ['Aquan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Dao';
        $monster->size             = 'Large';
        $monster->type             = 'Elemental';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '13 (Scale Mail +1)';
        $monster->damage_reduction = '5 (Scale Mail +1) /  2 (Natural Armor)';
        $monster->hit_dice         = 13;
        $monster->speed            = '30 ft / Burrow 30 ft / Fly 30 ft';
        $monster->actions          = '<dl>
    <dt>Fist</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 15 (2D8 + 6) Bludgeoning.</dd>
    <dt>Maul +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 20 (4D6 + 6) Bludgeoning. If the target is a Huge or smaller creature, it must succeed on a DC 18 STR Save or be knocked prone.</dd>
    <dt>Elemental Demise</dt> <dd>If the dao dies, its body disintegrates into a warm breeze, leaving behind only equipment the dao was wearing or carrying.</dd>
    <dt>Earth Glide</dt> <dd>The dao can burrow through nonmagical, unworked earth and stone. While doing so, the dao doesn\'t disturb the material it moves through.</dd>
    <dt>Sure Footed</dt> <dd>The dao has advantage on STR and DEX Save made against effects that would knock it prone.</dd>
</dl>';
        $monster->description = '<p>Dao are generally evil beings that see nothing wrong in enslaving others, despite greatly fearing the loss of their own freedom and despising whoever would imprison them. However, they will almost always returns acts of fairness and kindness.</p>
<p>Dao take great pride in things that are well-made and plots that were well-planned.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Earth', 'Outer Planes', 'Outsider'], [
            'stats' => [23, 12, 24, 12, 13, 14, 11, 4],
            'saves' => [
                'INT' => ['bonus' => 5],
                'WIS' => ['bonus' => 5],
                'CHA' => ['bonus' => 6],
            ],
            'features' => [
                'darkvision' => ['meta' => '60 ft'],
                'immunity'   => ['meta' => 'Petrified'],
            ],
            'feats'  => ['Extra Melee Action'],
            'spells' => [
                'Detect Alignment' => ['meta' => 'At will'],
                'Detect Magic'     => ['meta' => 'At will'],
                'Shape Stone'      => ['meta' => 'At will'],
                'Passwall'         => ['meta' => '3/day'],
                'Tongues'          => ['meta' => '3/day'],
                'Move Earth'       => ['meta' => '3/day'],
                'Summon Elemental' => ['meta' => '1/day, Earth Elementals only'],
                'Gaseous Form'     => ['meta' => '1/day'],
                'Invisibility'     => ['meta' => '1/day'],
                'Major Image'      => ['meta' => '1/day'],
                'Plane Shift'      => ['meta' => '1/day'],
                'Wall of Stone'    => ['meta' => '1/day'],
            ],
            'languages' => ['Terran', 'Jannti', 'Midani'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Djinni';
        $monster->size             = 'Large';
        $monster->type             = 'Elemental';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '13 (Leather +1) / 11';
        $monster->damage_reduction = '2 (Leather +1) / 2 (Natural Armor)';
        $monster->hit_dice         = 12;
        $monster->speed            = '30 ft / Fly 90 ft';
        $monster->actions          = '<dl>
    <dt>Sonic Scimitar +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +6) Bludgeoning +1D6 Sonic.</dd>
    <dt>Elemental Demise</dt> <dd>If the djinni dies, its body disintegrates into a warm breeze, leaving behind only equipment the djinni was wearing or carrying.</dd>
</dl>';
        $monster->description = '<p>Djinn resemble extremely tall (averaging ten and a half feet in height) human men and women, well-muscled and physically fit. Their features are aristocratic and considered attractive by human standards. Their skin tone ranges from pale blue to a more common olive-brown or dark tan characteristic of Zakharans. Their eyes are usually brown, but a rare few have blue eyes; these are believed to be marked by Fate for great deeds, whether for good or ill, and they can also have increased powers of the evil eye. Djinni garments are typically shimmering silk, designed for comfort and to flaunt their muscular physiques.</p>
<p>Djinn are wild but benevolent creatures as a whole.</p>
<p>While no genie like being enslaved, djinn are the most tolerant of temporary servitude to mortals. They are forgiving of a mortal master\'s flaws or even amused by them. They view short-term servitude as determined by Fate, and know that no one can defy one\'s fate. However, long-term service upsets them, and being imprisoned was considered anathema. They will not forgive betrayal. Those who wish to gain the brief service of a djinn should gift them with fine meals, gemstones, magical items, flattery, and other forms of bribery.</p>
<p>Djinn can carry up to 600 pounds without tiring, and could carry 1,200 pounds for a short time. They can travel freely to the Elemental Plane of Air, as well as to the Prime Material Plane, the Ethereal Plane, and the Astral Plane. However, they normally traveled only to the Elemental Plane of Air and the Prime Material.</p>
<p>The capital of the djinn is the Citadel of Ice and Steel, a chunk of ice and earth sculpted into an aerodynamic oval shape. The citadel is in a perpetual falling state, and no gravity can be imposed within it by any force less potent than the Great Caliph of all djinn.</p>
<p>On the Prime Material Plane, djinn favor the open desert to cluttered urban areas. However, being somewhat friendly toward mortals, they visit cities on occasion.</p>
<p>The djinn are ruled by the Great Caliph Husam al-Balil ben Nafhat al-Yugayyim, the Master of the Clouds and the Son of the Breezes. He rarely leaves his capital, the Court of Ice and Steel. He is served by various nobles and officials, including lesser caliphs, viziers, beys, emirs, sheikhs, sherrifs, and maliks. Each djinni freehold is ruled by a local sheikh or headman.</p>
<p>All djinn swear allegiance to the Grand Caliph, whose word is law. For disobeying a local caliph, a djinni risks punishment, but the penalty for disobeying the Grand Caliph is death. While djinni government is fairly loose, it is still too restrictive for most djinn, and they often visit the Prime Material Plane for the sake of respite from local lords and family.</p>
<p>While they appear in great numbers on their home plane, djinn tend to be solitary on the Prime Material Plane. Most djinn are friendly toward mortals, but mischievous. They often play pranks on mortals, such as conjuring illusionary people who claim to be in need. They normally leave high-ranking people alone, for fear they might have ties to the Grand Caliph.</p>
<p>Although djinn do not require food or drink to live, they enjoyed rich flavors, smells, and other sensations. They commonly desire succulent fruits, great feasts, pungent wines, fine perfumes, shimmering silks, smooth satins, soft velvets, and other rich fare.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Air', 'Outer Planes', 'Outsider'], [
            'stats' => [21, 15, 22, 15, 16, 20, 11, 4],
            'saves' => [
                'DEX' => ['bonus' => 6],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 9],
            ],
            'features' => [
                'darkvision' => ['meta' => '60 ft'],
                'resistance' => ['meta' => 'Electricity, Sonic'],
            ],
            'feats'  => ['Extra Melee Action'],
            'spells' => [
                'Detect Alignment'      => ['meta' => 'At will'],
                'Detect Magic'          => ['meta' => 'At will'],
                'Thunderwave'           => ['meta' => 'At will'],
                'Whirlwind'             => ['meta' => 'At will'],
                'Create Food and Water' => ['meta' => '3/day, can create wine instead of water'],
                'Tongues'               => ['meta' => '3/day'],
                'Wind Walk'             => ['meta' => '3/day'],
                'Summon Elemental'      => ['meta' => '1/day, Air Elementals only'],
                'Creation'              => ['meta' => '1/day'],
                'Gaseous Form'          => ['meta' => '1/day'],
                'Invisibility'          => ['meta' => '1/day'],
                'Major Image'           => ['meta' => '1/day'],
                'Plane Shift'           => ['meta' => '1/day'],
            ],
            'languages' => ['Auran', 'Jannti', 'Midani'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Efreeti';
        $monster->size             = 'Large';
        $monster->type             = 'Elemental';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '12 (Scale Mail +1) / 10';
        $monster->damage_reduction = '5 (Scale Mail +1) / 2 (Natural Armor)';
        $monster->hit_dice         = 14;
        $monster->speed            = '30 ft / Fly 90 ft';
        $monster->actions          = '<dl>
    <dt>Flaming Scimitar +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 + 7) Bludgeoning + 1D6 Fire.</dd>
    <dt>Elemental Demise</dt> <dd>If the efreeti dies, its body disintegrates into a warm breeze, leaving behind only equipment the efreeti was wearing or carrying.</dd>
</dl>';
        $monster->description = '<p>Efreet are humanoid in appearance. They are very tall, generally reaching heights of 12 feet, and massive and solid, weighing 2,000 pounds. They are well-muscled, and have red or black skin that are always burning. For this reason, many resemble devils and are often mistaken for them. Their bodies are supposedly composed of basalt, bronze, and solidified fire.</p>
<p>Efreeti magic is comparable to that of other powerful creatures, such as demons and liches, and is quite versatile. One area in which it is preeminent is in magical weaponsmithing. Efreet are particularly renowned for their ability to create flaming weapons.</p>
<p>Efreet are cruel and self-serving. They all consider themselves to be of noble character and assume grand titles to make themselves seem impressive.</p>
<p>Fire elementals avoid the efreet if they can, fearing their oppression and opportunism. Djinn hate them, and there are numerous battles between the two genie races. Dao are tolerated by the efreet, whom they trade worked materials with in exchange for raw metals. Most other races are treated by the efreet as either servants or slaves.</p>
<p>Two related concepts, however, are foremost in the mind of an efreeti: honor and acquisition.</p>
<p>Efreeti names are also part of this concept. They were exceedingly long and contained history and respectful details of lineage. When interacting with lesser creatures, they will normally take on a simpler name.</p>
<p>It should also be noted that mages occasionally attempt to enslave efreet in order to harness their considerable power. Such bindings, while of a very different nature than that involved in the binding of demons, are equally difficult, and just as likely to result in the wrath of the bound creature, should the attempt end in its escape.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Fire', 'Outer Planes', 'Outsider'], [
            'stats' => [22, 12, 24, 16, 15, 16, 11, 5],
            'saves' => [
                'INT' => ['bonus' => 7],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 7],
            ],
            'features' => [
                'darkvision' => ['meta' => '60 ft'],
                'immunity'   => ['meta' => 'Fire'],
            ],
            'feats'  => ['Extra Melee Action'],
            'spells' => [
                'Detect Magic'         => ['meta' => 'At will'],
                'Investiture of Flame' => ['meta' => 'At will'],
                'Enlarge'              => ['meta' => '3/day'],
                'Shrink'               => ['meta' => '3/day'],
                'Tongues'              => ['meta' => '1/day'],
                'Summon Elemental'     => ['meta' => '1/day, Fire Elementals only'],
                'Gaseous Form'         => ['meta' => '1/day'],
                'Invisibility'         => ['meta' => '1/day'],
                'Major Image'          => ['meta' => '1/day'],
                'Plane Shift'          => ['meta' => '1/day'],
                'Wall of Fire'         => ['meta' => '1/day'],
            ],
            'languages' => ['Ignan', 'Jannti', 'Midani'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Marid';
        $monster->size             = 'Large';
        $monster->type             = 'Elemental';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '13 (Scale Mail +1) / 16';
        $monster->damage_reduction = '5 (Scale Mail +1) / 2 (Natural Armor)';
        $monster->hit_dice         = 17;
        $monster->speed            = '30 ft / Fly 90 ft';
        $monster->actions          = '<dl>
    <dt>Greater Freezing Scimitar +2</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +3) Bludgeoning +3D6 Cold.</dd>
    <dt>Greater Freezing Water Whip +2</dt> <dd>Melee Weapon Attack, reach 25 ft, one target. 12 (2D4 +3) Slashing +3D6 Cold. And the target must succeed a DC 17 STR Save or be pulled up to 20 ft towards the marid.</dd>
    <dt>Whirlpool (Recharge 5-6)</dt> <dd>Water swirls rapidly around the marid. Each creature within 20 feet of the marid must make a DC 17 DEX Save. On a failure, a creature takes 35 (10D6) Cold damage and is knocked prone. On a success, a creature takes half the damage and isn’t knocked prone.</dd>
    <dt>Elemental Demise</dt> <dd>If the efreeti dies, its body disintegrates into a warm breeze, leaving behind only equipment the efreeti was wearing or carrying.</dd>
</dl>';
        $monster->description = '<p>The average marid stand a towering 16 to 18 feet tall, looking down upon all other genies. Marids are beautiful genies whose skin matches all of the hues of the vast ocean. While usually blue, in fact, marids change their skin color to reflect their current mood, with darkest shades of blue indicating anger. Most marids have blue-black or dark gray hair, though white-haired marids do exist. Generally speaking, the white-haired marids are the most turbulent of their kind.</p>
<p>While on the Elemental Plane of Water, or in seas or oceans, marids usually wear scant clothing or went bare. On land, they preferred colorful flowing robes or large pantaloons. Others would wear clothing made from finely woven seaweed inlaid with coral or pearls. Both males and females enjoyed showing off their impressive physiques, so flimsy vests were usually the most common clothing they wore to cover their torsos. Regardless of the style of clothing worn, it is certain to never impede swimming.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Water', 'Outer Planes', 'Outsider'], [
            'stats' => [16, 24, 22, 15, 13, 19, 12, 5],
            'saves' => [
                'STR' => ['bonus' => 8],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 9],
            ],
            'features' => [
                'darkvision' => ['meta' => '120 ft'],
                'immunity'   => ['meta' => 'Cold, Lightning'],
                'amphibious',
            ],
            'feats'  => ['Weapon Finesse'],
            'spells' => [
                'Detect Magic'       => ['meta' => 'At will'],
                'Detect Alignment'   => ['meta' => 'At will'],
                'Speak with Animals' => ['meta' => 'At will, water-based creatures only'],
                'Control Water'      => ['meta' => '3/day'],
                'Tongues'            => ['meta' => '1/day'],
                'Water Breathing'    => ['meta' => '3/day'],
                'Summon Elemental'   => ['meta' => '1/day, Fire Elementals only'],
                'Gaseous Form'       => ['meta' => '1/day'],
                'Invisibility'       => ['meta' => '1/day'],
                'Major Image'        => ['meta' => '1/day'],
                'Plane Shift'        => ['meta' => '1/day'],
            ],
            'languages' => ['Aquan', 'Jannti', 'Midani'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Azer';
        $monster->size             = 'Medium';
        $monster->type             = 'Elemental';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '13 (Shield)';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Warhammer</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +3) Bludgeoning +1D6 Fire.</dd>
    <dt>Heated Body</dt> <dd>A creature that touches the azer or hits it with a melee attack while within 5ft. takes 5 (1D10) Fire damage.</dd>
    <dt>Heated Weapons</dt> <dd>When an azer hits with a metal melee weapon, it deals an extra 3 (1D6) Fire damage.</dd>
    <dt>Illumination</dt> <dd>The azer sheds bright light in a 10-foot radius and dim light for an additional 10 ft.</dd>
</dl>';
        $monster->description = '<p>Azers bear a resemblance to dwarves, but with brass-colored skin and hair, their hair and beards composed of flames. Azer bodies are so hot that their weapons conduct heat, so much so that any creature within reach of an azer is injured by the intense heat. Many azers wear kilts and apron-like garments made from beaten brass, bronze, or copper.</p>
<p>Azer society is best described as communal, as every individual has a place in society and matters of the state are more important than that of the individual. Living within fortresses made of bronze on the Elemental Plane of Fire, azer nobles wield absolute power. Their outposts and cities are typically complexes of towers built from basalt, granite, or metal. Within these cities they grew strange trees with metallic bark and leaves.</p>
<p>Despite loving gems and constantly waging war against the efreet, Azers never start a fight unless their foes are carrying gems and in which case they might take them prisoner.</p>
<p>Azers are often slaves of fire giants and titans. As for the other races, azers despise efreet, with whom they are often at war. They maintain good relations with the yak folk found on the planes.</p>
<p>Azer often act as servants of the deities Dumathoin, Gorm Gulthyn, Kossuth, Laduguer, and Moradin.</p>
<p>Azers don’t reproduce. They are each crafted from bronze by another azer and imbued with a portion of the crafter’s inner flame. Each azer is sculpted with unique features. This crafting process limits the growth of the azer population and is the primary reason that these creatures remain rare.</p>
<p>Azers are masterful artisans, and create beautiful works from the gems and precious metals found in their volcanic habitat. They rate the value of such treasures above all other things, sometimes dispatching parties across the planes to seek out rare metals and gemstones.</p>
<p>When azers are called by magic to the Material Plane, it is typically to help forge an elaborate magic item or work of art, for it is said that their skill in such craft knows no equal.</p>
<p>An azer doesn’t require food, drink, or sleep.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Fire', 'Outer Planes', 'Outsider'], [
            'stats' => [17, 12, 15, 12, 13, 10, 2, 3],
            'saves' => [
                'CON' => ['bonus' => 4],
            ],
            'features' => [
                'immunity' => ['meta' => 'Fire, Sickened, Poison'],
            ],
            'languages' => ['Ignan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Gargoyle';
        $monster->size             = 'Medium';
        $monster->type             = 'Elemental';
        $monster->alignment        = 'N';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 7;
        $monster->speed            = '30 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +2) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +2) Slashing.</dd>
</dl>';
        $monster->description = '<p>Gargoyles are Earth Elementals that inhabit a stone statue. Typically, the elemental animates the statue only during night hours, but this depends on the conditions of their summoning. They are usually created to guard something.</p>
<p>Vampires are known to commonly create gargoyles to guard them during daylight hours and become dormant during the night.</p>';
        $helper->saveMonster($monster, ['Elemental', 'Earth', 'Outer Planes', 'Outsider'], [
            'stats'    => [15, 11, 16, 6, 11, 7, 2, 3],
            'features' => [
                'darkvision'       => ['meta' => '60 ft'],
                'resistance'       => ['meta' => 'Bludgeoning, Piercing, Slashing from nonmagical or Adamantine weapons'],
                'immunity'         => ['meta' => 'Sickened, Poison, Exhaustion, Petrification'],
                'multi_attack'     => ['meta' => 'If the gargoyle makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The gargoyle can only gain this additional Action once per turn.'],
                'false_appearance' => ['meta' => 'While the gargoyle is motionless, it is indistinguishable from an inanimate statue'],
            ],
            'languages' => ['Terran'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Water Weird';
        $monster->size        = 'Medium';
        $monster->type        = 'Elemental';
        $monster->alignment   = 'N';
        $monster->armor_class = '13';
        $monster->hit_dice    = 9;
        $monster->speed       = '0 ft / Swim 60 ft';
        $monster->actions     = "<dl>
    <dt>Constrict</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 13 (3D6 +3) Bludgeoning. if the target is Medium or smaller, it is Grappled (escape DC 13) and pulled 5 feet toward the water weird. Until this Grapple ends, the target is Restrained, the water weird tries to drown it, and the water weird can't constrict another target.</dd>
    <dt>Invisible in Water</dt> <dd>The water weird is invisible while fully immersed in water.</dd>
    <dt>Water Bound</dt> <dd>The water weird dies if it leaves the water to which it is bound or if that water is destroyed.</dd>
    <dt>Freeze</dt> <dd>If the elemental takes Cold damage, it partially freezes. It gains the Slowed Condition for a number of rounds equal to the Cold damage divided by 10 (rounded up).</dd>
</dl>";
        $monster->description = "<p>A water weird is an elemental weird that was conjured to protect a pool of water. They are renowned for their power as diviners in matters related to healing.</p>
<p>The upper half of a water weird typically appears like a beautiful, translucent, blue female humanoid composed entirely of water, but the lower half can appear serpentine or like a column of water rising from the pool.</p>
<p>Water weirds are considered very intelligent creatures. They are capable of being either very noble or evil, depending upon the state of the water that they are guarding.</p>
<p>Like most elementals, a water weird has no concept of good or evil. However, a water weird bound to a sacred or befouled source of water begins to take on the nature of that site, becoming neutral good or neutral evil.</p>
<p>A neutral good water weird tries to frighten away interlopers rather than kill them, while a neutral evil water weird kills its victims for pleasure and might turn against its summoner. A water weird loses its evil alignment if its waters are cleansed with a purify food and drink spell.</p>
<p>A water weird doesn't require air, food, drink, or sleep.</p>";
        $helper->saveMonster($monster, ['Elemental', 'Water', 'Outer Planes', 'Outsider'], [
            'stats'    => [17, 16, 13, 11, 10, 10, 3, 4],
            'features' => [
                'resistance' => ['meta' => 'Exhaustion, Fire, Grappled, Paralyzed, Prone, Unconscious'],
                'immunity'   => ['meta' => 'Poison'],
            ],
            'languages' => ['Aquan' => ['meta' => "Doesn't speak"]],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Xorn';
        $monster->size             = 'Medium';
        $monster->type             = 'Elemental';
        $monster->alignment        = 'N';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '9 (Natural Armor)';
        $monster->hit_dice         = 7;
        $monster->speed            = '20 ft / Burrow 20 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +3) Slashing</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (3D6 +3) Piercing</dd>
    <dt>Treasure Sense</dt> <dd>The xorn can pinpoint, by scent, the location of precious metals and stones, such as coins and gems, within 60 feet of it.</dd>
</dl>';
        $helper->saveMonster($monster, ['Elemental', 'Earth', 'Outer Planes', 'Outsider'], [
            'stats'  => [17, 10, 22, 11, 10, 11, 5, 3],
            'skills' => [
                'Perception' => ['dc' => 6],
                'Stealth'    => ['dc' => 3],
            ],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'vulnerability' => ['meta' => 'Adamantine'],
                'resistance'    => ['meta' => '[Piercing, Slashing]'],
                'camouflage'    => ['meta' => 'Rocky terrain'],
                'earth_glide',
            ],
            'feats'     => ['Tremorsense'],
            'languages' => ['Terran'],
        ]);
    }
}
