<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use Illuminate\Database\Seeder;

class MonstersASeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $helper = app()->seedHelper;

        $monster                   = new Monster;
        $monster->name             = 'Lantern Archon';
        $monster->size             = 'Small';
        $monster->type             = 'Archon';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '14';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 2;
        $monster->speed            = '0 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Light Ray</dt> <dd>Ranged Spell Attack, reach 30/60 ft, one target. 1D6 Positive Holy Light.</dd>
    <dt>Gestalt</dt> <dd>Nine lantern archons can fuse together as a Triple Action, becoming a single Large entity that appears as a whirlwind of dancing firefly lights. The gestalt has the abilities of a Large Air Elemental. The lantern archons can remain in this form for 10 rounds. When the gestalt separates back into individual lantern archons, its remaining Hit Points are divided evenly among them. If it had less than 9 Hit Points, some component archons die when the gestalt ends.</dd>
</dl>';
        $monster->description = '<p>Lantern archons are the lowest-ranking of the archons. They appear as spheres of soft, glowing light, about as bright as a torch, from about one to three feet in diameter.</p>
<dl>
    <dt>Animal Companion</dt> <dd>3rd Level Spell Slot (Ranger 1st Level Spell Slot).</dd>
</dl>';
        $helper->saveMonster($monster, ['Celestial', 'Archon', 'Outer Planes', 'Good', 'Outsider', 'Lawful', 'Animal Companion'], [
            'stats'  => [1, 16, 12, 6, 11, 10, 2, 2],
            'skills' => [
                'Arcana'     => ['dc' => 3],
                'Diplomacy'  => ['dc' => 5],
                'Perception' => ['dc' => 4],
                'Insight'    => ['dc' => 5],
            ],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Unholy'],
                'resistance'    => ['meta' => 'Poison, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Charmed, Electricity, Petrification'],
                'aura'          => ['meta' => 'Aura of Menace. Any hostile creature within a 20-foot radius of the archon must succeed on a DC 13 WIS Save or suffer -2 to hit and Saves. A creature makes a Save at the end of each turn. Once a Save is successful, they are immune for 24 hours.'],
            ],
            'spells' => [
                'Aid'              => ['meta' => 'At will'],
                'Continual Flame'  => ['meta' => 'At will'],
                'Detect Alignment' => ['meta' => 'At will'],
                'Teleport'         => ['meta' => 'At will, Heightened +1. Self plus 50 lbs. of objects only.'],
            ],
            'languages' => ['Celestial', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Hound Archon';
        $monster->size             = 'Medium';
        $monster->type             = 'Archon';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '13 (Full Plate) / 10';
        $monster->damage_reduction = '8 (Full Plate) / 2';
        $monster->hit_dice         = 6;
        $monster->speed            = '40 ft (30 ft in Plate Mail) / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 +3 Piercing.</dd>
    <dt>Holy Greatsword +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D6 +4 Slashing.</dd>
</dl>';
        $monster->description = '<p>Hound archons appear as powerfully built humanoids with canine heads, with broad shoulders, and the traditional angelic wings. Hound archons have similarly strong legs, a silent warning to foes that a hound archon is also swift on its feet, and if they flee, they would not get far.</p>';
        $helper->saveMonster($monster, ['Celestial', 'Archon', 'Shapechanger', 'Outer Planes', 'Good', 'Outsider', 'Lawful'], [
            'stats'  => [15, 10, 13, 10, 13, 12, 4, 3],
            'skills' => [
                'Athletics'    => ['dc' => 9],
                'Intimidation' => ['dc' => 10],
                'Perception'   => ['dc' => 10],
                'Insight'      => ['dc' => 10],
                'Stealth'      => ['dc' => 13],
                'Survival'     => ['dc' => 14],
            ],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Unholy'],
                'resistance'    => ['meta' => 'Poison, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Charmed, Electricity, Petrification'],
                'aura'          => ['meta' => 'Aura of Menace. Any hostile creature within a 20-foot radius of the archon must succeed on a DC 15 WIS Save or suffer -2 to hit and Saves. A creature makes a Save at the end of each turn. Once a Save is successful, they are immune for 24 hours.'],
            ],
            'spells' => [
                'Message'              => ['meta' => 'At will'],
                'Aid'                  => ['meta' => 'At will'],
                'Continual Flame'      => ['meta' => 'At will'],
                'Detect Alignment'     => ['meta' => 'At will'],
                'Teleport'             => ['meta' => 'At will, Heightened +1. Self plus 50 lbs. of objects only.'],
                'Protection From Evil' => ['meta' => 'At will'],
                'Animal Form'          => ['meta' => 'At will, Heightened +2. Small to large canine forms only (dogs, foxes, wolves).'],
            ],
            'languages' => ['Celestial', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Justice Archon';
        $monster->size             = 'Medium';
        $monster->type             = 'Archon';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '14 (Plate Mail Armor) / 11';
        $monster->damage_reduction = '8 (Full Plate) / 2';
        $monster->hit_dice         = 8;
        $monster->speed            = '30 ft (20 ft in Plate Mail) / Fly 60 ft (40 ft in Plate Mail)';
        $monster->actions          = '<dl>
    <dt>Holy Flaming Longsword +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D10 +4 Slashing + 1D6 Fire.</dd>
</dl>';
        $monster->description = '<p>Justice archons are zealous archons devoted to the upholding of justice above all else and seeking out righteous vengeance against the wicked. They appear as powerfully built humanoids with the head of an eagle.</p>
<p>Justice archons are sent at the head of warparties to hunt down fiends, and they are sometimes summoned to the Material Plane by mortal clerics seeking for retribution against some great crime. If called by a planar ally spell, a justice archon would serve for half the usual payment if asked to fight fiends and for free if asked to fight yugoloths. Because justice archons were more prone to righteous anger than other archons, their superiors often sent them on missions to the Lower Planes, where there was no risk of innocents being accidentally punished.</p>';
        $helper->saveMonster($monster, ['Celestial', 'Archon', 'Outer Planes', 'Good', 'Outsider', 'Lawful'], [
            'stats'  => [16, 12, 14, 11, 13, 14, 6, 4],
            'skills' => [
                'Athletics'    => ['dc' => 10],
                'Arcana'       => ['dc' => 9],
                'Intimidation' => ['dc' => 11],
                'Perception'   => ['dc' => 11],
                'Insight'      => ['dc' => 11],
                'Religion'     => ['dc' => 12],
                'Stealth'      => ['dc' => 10],
                'Survival'     => ['dc' => 4],
            ],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Unholy'],
                'resistance'    => ['meta' => 'Poison, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Charmed, Electricity, Petrification'],
                'aura'          => ['meta' => 'Aura of Menace. Any hostile creature within a 20-foot radius of the archon must succeed on a DC 16 WIS Save or suffer -2 to hit and Saves. A creature makes a Save at the end of each turn. Once a Save is successful, they are immune for 24 hours.'],
            ],
            'spells' => [
                'Message'              => ['meta' => 'At will'],
                'Aid'                  => ['meta' => 'At will'],
                'Continual Flame'      => ['meta' => 'At will'],
                'Detect Alignment'     => ['meta' => 'At will'],
                'Teleport'             => ['meta' => 'At will, Heightened +1. Self plus 50 lbs. of objects only.'],
                'Protection From Evil' => ['meta' => 'At will'],
            ],
            'languages' => ['Celestial', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Warden Archon';
        $monster->size             = 'Large';
        $monster->type             = 'Archon';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '13 (Full Plate +1) / 9';
        $monster->damage_reduction = '9 (Full Plate +1) / 2';
        $monster->hit_dice         = 8;
        $monster->speed            = '40 ft (30 ft in Plate Mail) / Fly 60 ft (40 ft in Plate Mail)';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D8 +5 Slashing.</dd>
    <dt>Rend +2<dt> <dd>Melee Weapon Attack, reach 0 ft, one target. 2D12 +5 Crushing. The warden archon can only make this attack if it hits with 2 claw attacks.</dd>
</dl>';
        $monster->description = '<p>Warden archons are the watchers of the Seven Heavens of Celestia and the ever-vigilant guardians of its gates. Powerful summoners could call on warden archons for extraplanar aid.</p>
<p>Standing as tall as an ogre, this hulking creature has white fur, a lion-like head, and eyes like gleaming black opals. Its broad white paws end in razor-sharp, jet-black claws. The creature is clad in fearsome full plate engraved with faintly glowing symbols of holiness and virtue.</p>';
        $helper->saveMonster($monster, ['Celestial', 'Archon', 'Outer Planes', 'Good', 'Outsider', 'Lawful'], [
            'stats'  => [20, 11, 17, 16, 12, 12, 8, 3],
            'skills' => [
                'Athletics'     => ['dc' => 14],
                'Arcana'        => ['dc' => 14],
                'Concentration' => ['dc' => 14],
                'Diplomacy'     => ['dc' => 14],
                'Religion'      => ['dc' => 14],
                'Intimidation'  => ['dc' => 10],
                'Perception'    => ['dc' => 10],
                'Insight'       => ['dc' => 14],
                'Survival'      => ['dc' => 1],
            ],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Unholy'],
                'resistance'    => ['meta' => 'Poison, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Charmed, Electricity, Petrification'],
                'aura'          => ['meta' => 'Aura of Menace. Any hostile creature within a 20-foot radius of the archon must succeed on a DC 16 WIS Save or suffer -2 to hit and Saves. A creature makes a Save at the end of each turn. Once a Save is successful, they are immune for 24 hours.'],
                'keen_sense'    => ['meta' => 'Smell'],
                'multi_attack'  => ['meta' => 'If the warden archon makes two successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Rend attack. The warden archon can only gain this additional Action once per turn.'],
            ],
            'spells' => [
                'Message'              => ['meta' => 'At will'],
                'Aid'                  => ['meta' => 'At will'],
                'Continual Flame'      => ['meta' => 'At will'],
                'Detect Alignment'     => ['meta' => 'At will'],
                'Teleport'             => ['meta' => 'At will, Heightened +1. Self plus 50 lbs. of objects only.'],
                'Protection From Evil' => ['meta' => 'At will'],
                'Animal Form'          => ['meta' => 'At will, Heightened +2. Canine forms only (dogs or wolves).'],
            ],
            'languages' => ['Celestial', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Word Archon';
        $monster->size             = 'Medium';
        $monster->type             = 'Archon';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '14 (Plate Mail Armor +1) / 10';
        $monster->damage_reduction = '9 (Full Plate +1) / 2';
        $monster->hit_dice         = 9;
        $monster->speed            = '30 ft (20 ft in Plate Mail) / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Axiomatic Holy War Hammer +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D8 +3 Bludgeoning.</dd>
</dl>';
        $monster->description = '<p>Word archons are the celestial guardians of pure concepts, such as goodness, virtue, and love. These archons excel in the power of true names.</p>';
        $helper->saveMonster($monster, ['Celestial', 'Archon', 'Outer Planes', 'Good', 'Outsider', 'Lawful'], [
            'stats'  => [14, 11, 14, 22, 18, 18, 9, 4],
            'skills' => [
                'Arcana'        => ['dc' => 20],
                'Concentration' => ['dc' => 14],
                'Diplomacy'     => ['dc' => 14],
                'Religion'      => ['dc' => 20],
                'Intimidation'  => ['dc' => 10],
                'Lore'          => ['dc' => 20],
                'Perception'    => ['dc' => 12],
                'Insight'       => ['dc' => 14],
                'Survival'      => ['dc' => 2],
            ],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Unholy'],
                'resistance'    => ['meta' => 'Poison, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Charmed, Electricity, Petrification'],
                'aura'          => ['meta' => 'Aura of Menace. Any hostile creature within a 20-foot radius of the archon must succeed on a DC 17 WIS Save or suffer -2 to hit and Saves. A creature makes a Save at the end of each turn. Once a Save is successful, they are immune for 24 hours.'],
            ],
            'spells' => [
                'Message'              => ['meta' => 'At will'],
                'Aid'                  => ['meta' => 'At will'],
                'Continual Flame'      => ['meta' => 'At will'],
                'Detect Alignment'     => ['meta' => 'At will'],
                'Teleport'             => ['meta' => 'At will, Heightened +1. Self plus 50 lbs. of objects only.'],
                'Protection From Evil' => ['meta' => 'At will'],
                'Legend Lore'          => ['meta' => '3/day'],
                'Divine Word'          => ['meta' => '1/day'],
                'Power Word Stun'      => ['meta' => '1/day'],
                'Holy Word'            => ['meta' => '1/day'],
                'Dictum'               => ['meta' => '1/day'],
            ],
            'languages' => ['Celestial', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Sword Archon';
        $monster->size             = 'Large';
        $monster->type             = 'Archon';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '15 (Full Plate +1) / 12';
        $monster->damage_reduction = '9 (Full Plate +1) / 3';
        $monster->hit_dice         = 11;
        $monster->speed            = '40 ft (30 ft in Plate Mail) / Fly 90 ft';
        $monster->actions          = '<dl>
    <dt>Holy Flaming Armblades +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D12 +7 Slashing +1D6 Fire. The Sword Archon can as a Free Action, turn his arms into his Armblades and vice versa.</dd>
</dl>';
        $monster->description = '<p>Sword archons are the leaders of the lantern and hound archons. They also serve as teh enforcers of the laws of the Celestial Hebdomad. Only the most powerful of summoners can call on sword archons for extraplanar help.</p>';
        $helper->saveMonster($monster, ['Celestial', 'Archon', 'Outer Planes', 'Good', 'Outsider', 'Lawful'], [
            'stats'  => [22, 17, 14, 12, 14, 17, 11, 4],
            'skills' => [
                'Acrobatics'    => ['dc' => 14],
                'Athletics'     => ['dc' => 14],
                'Arcana'        => ['dc' => 12],
                'Concentration' => ['dc' => 13],
                'Diplomacy'     => ['dc' => 17],
                'Religion'      => ['dc' => 12],
                'Intimidation'  => ['dc' => 10],
                'Perception'    => ['dc' => 10],
                'Insight'       => ['dc' => 14],
                'Survival'      => ['dc' => 2],
                'Society'       => ['dc' => 15],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Anarchic, Unholy'],
                'resistance'          => ['meta' => 'Poison, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'aura'                => ['meta' => 'Aura of Menace. Any hostile creature within a 20-foot radius of the archon must succeed on a DC 20 WIS Save or suffer -2 to hit and Saves. A creature makes a Save at the end of each turn. Once a Save is successful, they are immune for 24 hours.'],
                'innate_spellcasting' => ['meta' => 'INT DC 17'],
            ],
            'feats'  => [
                'Power Attack', 'Cleave', 'Two-Weapon Fighter', 'Improved Two-Weapon Fighter',
                'Multi Attacker', 'Improved Multi Attacker',
            ],
            'spells' => [
                'Aid'                   => ['meta' => 'At will'],
                'Continual Flame'       => ['meta' => 'At will'],
                'Divination'            => ['meta' => 'At will'],
                'Detect Alignment'      => ['meta' => 'At will'],
                'Locate Creature'       => ['meta' => 'At will'],
                'Locate Object'         => ['meta' => 'At will'],
                'Commune'               => ['meta' => '3/day'],
                'Message'               => ['meta' => '3/day'],
                'Teleport'              => ['meta' => 'At will, Heightened +1. Self plus 50 lbs. of objects only.'],
                'Protection From Evil'  => ['meta' => 'At will'],
                'Imbue with Adamantine' => ['meta' => '1/day'],
                'Imbue with Cold Iron'  => ['meta' => '1/day'],
                'Imbue with Silvered'   => ['meta' => '1/day'],
                'Wages of Sin'          => ['meta' => '1/day'],
            ],
            'languages' => ['Celestial', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Throne Archon';
        $monster->size             = 'Large';
        $monster->type             = 'Archon';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '15 (Full Plate +1) / 12';
        $monster->damage_reduction = '9 (Full Plate + 1) / 3';
        $monster->hit_dice         = 14;
        $monster->speed            = '30 ft (30 ft in Plate Mail) / Fly 120 ft';
        $monster->actions          = '<dl>
    <dt>Axiomatic Holy Vorpal Longsword +2</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 +8 Slashing +1D6 Fire.</dd>
</dl>';
        $monster->description = '<p>Throne archons are the rulers of the cities of Mount Celestia and judges of the archons. As far as the day-to-day matters of Celestia, they are the true rulers of the archons. They are the epitome of virtue and perfection.</p>';
        $helper->saveMonster($monster, ['Celestial', 'Archon', 'Outer Planes', 'Good', 'Outsider', 'Lawful'], [
            'stats'  => [22, 17, 14, 12, 14, 17, 11, 4],
            'skills' => [
                'Acrobatics'    => ['dc' => 14],
                'Athletics'     => ['dc' => 14],
                'Arcana'        => ['dc' => 21],
                'Concentration' => ['dc' => 21],
                'Diplomacy'     => ['dc' => 25],
                'Religion'      => ['dc' => 21],
                'Intimidation'  => ['dc' => 31],
                'Lore'          => ['dc' => 21],
                'Perception'    => ['dc' => 10],
                'Insight'       => ['dc' => 20],
                'Survival'      => ['dc' => 3],
                'Society'       => ['dc' => 28],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Anarchic, Unholy'],
                'resistance'          => ['meta' => 'Poison, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'aura'                => ['meta' => 'Aura of Menace. Any hostile creature within a 20-foot radius of the archon must succeed on a DC 25 WIS Save or suffer -2 to hit and Saves. A creature makes a Save at the end of each turn. Once a Save is successful, they are immune for 24 hours.'],
                'innate_spellcasting' => ['meta' => 'INT DC 18'],
            ],
            'spells' => [
                'Aid'                   => ['meta' => 'At will'],
                'Continual Flame'       => ['meta' => 'At will'],
                'Divination'            => ['meta' => 'At will'],
                'Detect Alignment'      => ['meta' => 'At will'],
                'Locate Creature'       => ['meta' => 'At will'],
                'Locate Object'         => ['meta' => 'At will'],
                'Neutralize Poison'     => ['meta' => 'At will'],
                'Commune'               => ['meta' => '3/day'],
                'Message'               => ['meta' => '3/day'],
                'Dispel Magic'          => ['meta' => '3/day'],
                'Teleport'              => ['meta' => 'At will, Heightened +1. Self plus 50 lbs. of objects only.'],
                'Protection From Evil'  => ['meta' => 'At will'],
                'Banishing Smite'       => ['meta' => '3/day'],
                'Shield of the Archons' => ['meta' => '1/day'],
                'True Seeing'           => ['meta' => '1/day'],
                'Holy Word'             => ['meta' => '1/day'],
                'Penitentiary Gaze'     => ['meta' => '3/day'],
            ],
            'languages' => ['Celestial', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);
    }
}
