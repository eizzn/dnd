<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use Illuminate\Database\Seeder;

class MonstersESeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper = app()->seedHelper;

        $monster              = new Monster;
        $monster->name        = 'Coure';
        $monster->size        = 'Tiny';
        $monster->type        = 'Eladrin';
        $monster->alignment   = 'CG';
        $monster->armor_class = '17';
        $monster->hit_dice    = 2;
        $monster->speed       = '20 ft / Fly 60 ft';
        $monster->actions     = '<dl>
    <dt>Dagger</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D2 Slashing.</dd>
    <dt>Shapechanger</dt> <dd>A coure can assume the form of an incorporeal ball of light at will as a Double Action. In this form, the coure can be harmed only by other incorporeal creatures, and Ghost Touchced weapons. A coure in this form can pass through solid objects, but not force effects, at will. The coure sheds light if it wishes, providing illumination with any radius it wishes up to 30 feet. Changing the amount of light it sheds as an Cction that the coure can perform once per round.</dd>
</dl>';
        $monster->description = '<p>Coures are sprite-like celestials.</p>';
        $helper->saveMonster($monster, ['Celestial', 'Eladrin', 'Shapechanger', 'Outer Planes', 'Good', 'Outsider', 'Chaotic'], [
            'stats'  => [6, 20, 12, 12, 10, 14, 2, 2],
            'skills' => [
                'Arcana'     => ['dc' => 6],
                'Diplomacy'  => ['dc' => 9],
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 24],
                'Thievery'   => ['dc' => 12],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Axiomatic, Cold Iron, Unholy'],
                'resistance'          => ['meta' => 'Acid, Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'innate_spellcasting' => ['meta' => 'INT DC 13'],
            ],
            'feats'  => ['Weapon Finesse'],
            'spells' => [
                'Dancing Lights'   => ['meta' => 'At will'],
                'Detect Alignment' => ['meta' => 'At will'],
                'Detect Magic'     => ['meta' => 'At will'],
                'Faerie Fire'      => ['meta' => '3/day'],
                'Magic Missile'    => ['meta' => '3/day'],
                'Sleep'            => ['meta' => '3/day'],
            ],
            'classes' => [
                'Rogue' => ['level' => 2],
            ],
            'languages' => ['Celestial', 'Sylvan', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Noviere';
        $monster->size             = 'Medium';
        $monster->type             = 'Eladrin';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '16 (Scale Mail +1) / 14';
        $monster->damage_reduction = '5 (Scale Mail +1) / 0';
        $monster->hit_dice         = 5;
        $monster->speed            = '30 ft / Swim 80 ft';
        $monster->actions          = '<dl>
    <dt>Holy Trident +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 +5 Piercing.</dd>
    <dt>Net</dt> <dd>Melee Weapon Attack, reach 5/15 ft, one target. Entangled.</dd>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 +4</dd>
    <dt>Shapechanger</dt> <dd>A Noviere can assume a form made completely out of water. In this form, its swim speed increases to 100 ft and can make slam attacks, and use water bolt. They may not cast spells, though they may still use thier spell-like abilities.</dd>
    <dt>Water Bolt</dt> <dd>Ranged Spell Attack +8 to hit, reach 60 ft line or 30 ft cone, all targets in the area. 5D6 Bludgeoning DC 15 DEX Save for half damage.</dd>
</dl>';
        $monster->description = '<p>Novieres are a type of eladrin that lived in the seas of Ossa in Arborea.</p>';
        $helper->saveMonster($monster, ['Celestial', 'Eladrin', 'Shapechanger', 'Outer Planes', 'Good', 'Outsider', 'Chaotic'], [
            'stats'  => [18, 18, 14, 14, 16, 16, 5, 4],
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
                'vulnerability' => ['meta' => 'Axiomatic, Cold Iron, Unholy'],
                'resistance'    => ['meta' => 'Poison, (Non-magical, non-unholy) [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Charmed, Electricity, Petrification'],
                'aura'          => ['meta' => 'Aura of Menace. Any hostile creature within a 20-foot radius of the archon must succeed on a DC 16 WIS Save or suffer -2 to hit and Saves. A creature makes a Save at the end of each turn. Once a Save is successful, they are immune for 24 hours.'],
            ],
            'feats'  => ['Extend Spell'],
            'spells' => [
                'Prestidigitation' => ['meta' => 'At will'],
                'Alter Self'       => ['meta' => 'At will'],
                'Water Breathing'  => ['meta' => 'At will'],
                'Charm'            => ['meta' => 'At will, Heightened + 3'],
                'Mirror Image'     => ['meta' => 'At will'],
                'Ghost Sound'      => ['meta' => 'At will'],
                'Dancing Lights'   => ['meta' => 'At will'],
                'Continual Flame'  => ['meta' => 'At will'],
                'Control Water'    => ['meta' => '1/day'],
                'Polymorph Self'   => ['meta' => '1/day'],
            ],
            'classes' => [
                'Favored Soul' => ['level' => 4],
            ],
            'languages' => ['Celestial', 'Sylvan', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Bralani';
        $monster->size             = 'Medium';
        $monster->type             = 'Eladrin';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '16 (Chain Shirt +1) / 14';
        $monster->damage_reduction = '4 (Chain Shirt +1) / 1';
        $monster->hit_dice         = 6;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Holy Scimitar +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 +5 Slashing.</dd>
    <dt>Holy Composite Longbow +1</dt> <dd>Melee Weapon Attack, reach 100/500 ft, one target. 1D8 +5 Piercing.</dd>
    <dt>Shapechanger</dt> <dd>
        <p>A bralani can shift between its humanoid and whirlwind forms as a Double Action. In humanoid form, it cannot fly or use its whirlwind blast, but it can use its spell-like abilities and its weapons. In whirlwind form, it can fly with a speed of 100 ft, make slam attacks and whirlwind blast attacks, and use spell-like abilities.</p>
        <p>A bralani remains in one form until it chooses to assume a new one. A change in form cannot be dispelled, nor does the bralani revert to any particular form when killed. A true seeing spell, however, reveals both forms simultaneously.</p>
    </dd>
    <dt>Whirlwind Blast</dt> <dd>Ranged Spell Attack +7 to hit, reach  20 ft, all targets in a line. 3D6 Slashing DC 16 CON Save for half damage.</dd>
</dl>';
        $monster->description = '<p>Bralani are the wildest of the eladrin, embodying the forces of sand, wind, and snow.</p>';
        $helper->saveMonster($monster, ['Celestial', 'Eladrin', 'Shapechanger', 'Outer Planes', 'Good', 'Outsider', 'Chaotic'], [
            'stats'  => [18, 18, 17, 13, 14, 14, 6, 3],
            'skills' => [
                'Acrobatics'      => ['dc' => 10],
                'Animal Handling' => ['dc' => 11],
                'Athletics'       => ['dc' => 13],
                'Concentration'   => ['dc' => 12],
                'Diplomacy'       => ['dc' => 4],
                'Intimidation'    => ['dc' => 10],
                'Perception'      => ['dc' => 13],
                'Insight'         => ['dc' => 10],
                'Stealth'         => ['dc' => 13],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Axiomatic, Cold Iron, Unholy'],
                'resistance'          => ['meta' => 'Cold, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'innate_spellcasting' => ['meta' => 'INT DC 13'],
            ],
            'spells' => [
                'Blur'           => ['meta' => 'At will'],
                'Charm'          => ['meta' => 'At will'],
                'Gust of Wind'   => ['meta' => 'At will'],
                'Mirror Image'   => ['meta' => 'At will'],
                'Wall of Wind'   => ['meta' => 'At will, Heightened +1. Self plus 50 lbs. of objects only'],
                'Lightning Bolt' => ['meta' => '2/day'],
                'Cure Wounds'    => ['meta' => '2/day, Heightened +3'],
                'Polymorph Self' => ['meta' => '1/day'],
            ],
            'classes' => [
                'Barbarian' => ['level' => 5],
            ],
            'languages' => ['Celestial', 'Sylvan', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Shiere';
        $monster->size             = 'Medium';
        $monster->type             = 'Eladrin';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '17 / (Mithral Chain Mail +1) / 14';
        $monster->damage_reduction = '7 (Mithral Chain Mail +1) / 3';
        $monster->hit_dice         = 6;
        $monster->speed            = '40 ft (30 ft in Plate Mail)';
        $monster->actions          = '<dl>
    <dt>Anarchic Holy Longsword +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 +5 Slashing.</dd>
    <dt>Holy Lance +1</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 3D8 +5 Piercing.</dd>
    <dt>Holy Composite Longbow +1</dt> <dd>Melee Weapon Attack, reach 100/500 ft, one target. 1D8 +5 Piercing.</dd>
    <dt>Shapechanger</dt> <dd>A shiere can assume the form of a ball of harmless light as a Triple Action 1/day. In this form, the shiere gains a Fly Speed of 90 ft.</dd>
</dl>';
        $monster->description = '<p>Shieres are the horsemen and warriors among the eladrin and defenders of their twilight courts. They are the most powerful of the lesser eladrin.</p>
<p>Shiere eladrin resemble extremely tall, lanky high elves—averaging 7 feet or more—with exceptionally fair skin. Their faces and hands are long and narrow. They have pale golden or silver hair and blue, green, or violet eyes.</p>
<p>Shieres were often seen mounted when on duty.</p>';
        $helper->saveMonster($monster, ['Celestial', 'Eladrin', 'Shapechanger', 'Outer Planes', 'Good', 'Outsider', 'Chaotic'], [
            'stats'  => [18, 18, 18, 14, 12, 14, 7, 3],
            'skills' => [
                'Animal Handling' => ['dc' => 15],
                'Athletics'       => ['dc' => 14],
                'Arcana'          => ['dc' => 14],
                'Concentration'   => ['dc' => 12],
                'Diplomacy'       => ['dc' => 10],
                'Religion'        => ['dc' => 14],
                'Intimidation'    => ['dc' => 10],
                'Perception'      => ['dc' => 10],
                'Insight'         => ['dc' => 14],
                'Survival'        => ['dc' => 7],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Axiomatic, Cold Iron, Unholy'],
                'resistance'          => ['meta' => 'Cold, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'innate_spellcasting' => ['meta' => 'INT DC 13'],
            ],
            'feats'  => ['Mounted Combatant', 'Ride-By Attack', 'Improved Mounted Combatant', 'Whirlwind Strike'],
            'spells' => [
                'Alter Self'       => ['meta' => 'At will'],
                'Color Spray'      => ['meta' => 'At will'],
                'Continual Flame'  => ['meta' => 'At will'],
                'Detect Alignment' => ['meta' => 'At will'],
                'Invisibility'     => ['meta' => 'At will'],
                'Major Image'      => ['meta' => 'At will'],
                'Ice Storm'        => ['meta' => '1/day'],
                'Cone of Cold'     => ['meta' => '1/day'],
                'Heal'             => ['meta' => '1/day'],
                'Polymorph Self'   => ['meta' => '1/day'],
            ],
            'classes' => [
                'Fighter' => ['level' => 7],
            ],
            'languages' => ['Celestial', 'Sylvan', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Firre';
        $monster->size             = 'Medium';
        $monster->type             = 'Eladrin';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '16 (Mithral Chain Mail +1) / 13';
        $monster->damage_reduction = '7 (Mithral Chain Mail +1) / 4';
        $monster->hit_dice         = 8;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Anarchic Holy Greater Flaming Greatsword +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D12 +5 Slashing +3D6 Fire.</dd>
    <dt>Anarchic Javelin +1</dt> <dd>Ranged Weapon Attack, reach 30/90 ft, one target 1D6 +4 Piercing.</dd>
    <dt>Shapechanger</dt> <dd>
        <p>A firre can shift between its humanoid and fiery forms with a Double Action. In humanoid form, it cannot fly or use its fiery slam attacks, but it can use its gaze attack and spell-like abilities, make weapon attacks, sing, and cast spells. In the form of a pillar of fire, it can fly, make slam attacks, and use spell-like abilities, but cannot sing, cast spells, or use its gaze attack.</p>
        <p>A firre remains in one form until it chooses to take the other form. A change in form cannot be dispelled, nor does a firre revert to any particular form when killed. A true seeing spell reveals both forms simultaneously.</p>
    </dd>
    <dt>Gaze</dt> <dd>With an Action, a Firre can gaze at a target within 60 ft and cause it to burst into flames. The gaze deals 2D6 points of fire damage and causes Blindness. A successful DC 18 CON Save negates teh Blindness.</dd>
    <dt>Song</dt> <dd>A firre has a captivating voice and can use bardic music just as a bard can, inspiring courage, fascinating, inspiring competence, or giving suggestions to those who hear it. A firre can sing as often as it likes.</dd>
</dl>';
        $monster->description = '<p>Firres are a type of eladrin who are devoted to art and music. They are the most far-ranging of eladrin, often going to the Material Plane to seek out works of great beauty. They are counted among the greater eladrin and are famous for the eldritch beauty of their unmatched singing.</p>
<p>Firre eladrin appear similar to stocky elves and have bright red hair and fiery red eyes that lacked both pupil and iris. Most stand about 6 feet (180 centimeters) tall and weigh about 150 pounds (68 kilograms).</p>';
        $helper->saveMonster($monster, ['Celestial', 'Eladrin', 'Shapechanger', 'Outer Planes', 'Good', 'Outsider', 'Chaotic'], [
            'stats'  => [20, 17, 12, 17, 16, 18, 10, 3],
            'skills' => [
                'Arcana'        => ['dc' => 8],
                'Concentration' => ['dc' => 11],
                'Diplomacy'     => ['dc' => 11],
                'Religion'      => ['dc' => 20],
                'Intimidation'  => ['dc' => 6],
                'Perception'    => ['dc' => 12],
                'Insight'       => ['dc' => 8],
                'Survival'      => ['dc' => 5],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Axiomatic, Cold Iron, Unholy'],
                'resistance'          => ['meta' => 'Cold, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'innate_spellcasting' => ['meta' => 'INT DC 13'],
            ],
            'feats'  => ['Ride-By Attack'],
            'spells' => [
                'Circle of Protection From Evil' => ['meta' => 'At will'],
                'Fireball'                       => ['meta' => 'At will'],
                'Invisibility'                   => ['meta' => 'At will, Heightened +2'],
                'Permanent Image'                => ['meta' => 'At will'],
                'Polymorph'                      => ['meta' => 'At will'],
                'See Invisibility'               => ['meta' => 'At will'],
                'Wall of Fire'                   => ['meta' => 'At will'],
                'Prismatic Spray'                => ['meta' => '1/day'],
                'Polymorph Self'                 => ['meta' => '1/day'],
            ],
            'classes' => [
                'Favored Soul' => ['level' => 7],
            ],
            'languages' => ['Celestial', 'Sylvan', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Ghaele';
        $monster->size             = 'Medium';
        $monster->type             = 'Eladrin';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '14 (Mithral Chain Mail +1) / 11';
        $monster->damage_reduction = '7 (Mithral Chain Mail +1) / 4';
        $monster->hit_dice         = 10;
        $monster->speed            = '50 ft / Fly 150 ft';
        $monster->actions          = '<dl>
    <dt>Anarchic Holy Greatsword +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D12 +7 Slashing.</dd>
    <dt>Shapechanger</dt> <dd>
        <p>A ghaele can shift between its humanoid and globe forms with a Double Action. In humanoid form, it cannot fly or use its light rays, but it can use its gaze attack and spell-like abilities, make physical attacks, and cast spells. In globe form, it can fly, use its light rays, and use spell-like abilities, but it cannot cast spells or use its gaze attack. The globe form is incorporeal, and the ghaele has no Strength score while in that form.</p>
        <p>A ghaele remains in one form until it chooses to assume a new one. A change in form cannot be dispelled, nor does the ghaele revert to any particular form when killed. A true seeing spell or ability, however, reveals both forms simultaneously.</p>
    </dd>
    <dt>Gaze</dt> <dd>With an Action, while in its humanoid form, a Ghaele can gaze at a target within 60 ft. If the target is Evil, it must make the following Saves.
        <ul>
            <li>If the target has 5 HD or fewer, it must make a CHA Save or die.</li>
            <li>The target must make a WIS Save or suffer the effects of Fear.</li>
        </ul>
    </dd>
    <dt>Light Ray</dt> <dd>Ranged Spell Attack, reach 300 ft, one target 2D12 Holy Light.</dd>
</dl>';
        $monster->description = '<p>The ghaeles are the knights-errant of the celestial eladrin. They are more subtle than other eladrin, often working behind the scenes to help defeat evil forces. Ghaeles also act as advisers to the more powerful tulani eladrin. Of all the eladrin, they best understood the plight of mortals.</p>
<p>A ghaele resemble a regal, athletic high elf, but they also have opalescent eyes and a radiant aura. The average ghaele has a height of 6 feet (180 centimeters) and weigh about 170 pounds (77 kilograms).</p>';
        $helper->saveMonster($monster, ['Celestial', 'Eladrin', 'Shapechanger', 'Outer Planes', 'Good', 'Outsider', 'Chaotic'], [
            'stats'  => [24, 12, 15, 16, 17, 16, 13, 4],
            'skills' => [
                'Animal Handling' => ['dc' => 16],
                'Arcana'          => ['dc' => 16],
                'Concentration'   => ['dc' => 12],
                'Diplomacy'       => ['dc' => 5],
                'Lore'            => ['dc' => 16],
                'Intimidation'    => ['dc' => 16],
                'Perception'      => ['dc' => 16],
                'Insight'         => ['dc' => 14],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Axiomatic, Cold Iron, Unholy'],
                'resistance'          => ['meta' => 'Cold, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'innate_spellcasting' => ['meta' => 'INT DC 17'],
            ],
            'spells' => [
                'Aid'              => ['meta' => 'At will'],
                'Charm'            => ['meta' => 'At will'],
                'Color Spray'      => ['meta' => 'At will'],
                'Continual Flame'  => ['meta' => 'At will'],
                'Dancing Lights'   => ['meta' => 'At will'],
                'Locate Object'    => ['meta' => 'At will'],
                'Detect Alignment' => ['meta' => 'At will'],
                'Disguise Self'    => ['meta' => 'At will'],
                'Dispel Magic'     => ['meta' => 'At will'],
                'Hold Person'      => ['meta' => 'At will, Heightened + 3'],
                'Invisibility'     => ['meta' => 'At will, Heightened + 2'],
                'Major Image'      => ['meta' => 'At will'],
                'See Invisibility' => ['meta' => 'At will'],
                'Teleport'         => ['meta' => 'At will'],
                'Chain Lightning'  => ['meta' => '1/day'],
                'Prismatic Spray'  => ['meta' => '1/day'],
                'Wall of Force'    => ['meta' => '1/day'],
                'Polymorph Self'   => ['meta' => '1/day'],
            ],
            'classes' => [
                'Paladin' => ['level' => 9],
            ],
            'languages' => ['Celestial', 'Sylvan', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Shiradi';
        $monster->size             = 'Large';
        $monster->type             = 'Eladrin';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '16 (Mithral Chain Mail +2) / 12';
        $monster->damage_reduction = '8 (Mithral Chain Mail +2) / 4';
        $monster->hit_dice         = 12;
        $monster->speed            = '30 ft (30 ft in Plate Mail) / Fly 120 ft';
        $monster->actions          = '<dl>
    <dt>Anarchic Holy Spiked Chain +2</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 2D6 +9 Piercing.</dd>
    <dt>Shapechanger</dt> <dd>A shiradi can assume the form of a cloud of light shards as a Triple Action. In this form, it cannot use its slam attack, but it can fly and use its spell-like abilities and its weapons. In cloud form, it can fly, make slam attacks, and use spell-like abilities, but it cannot use its weapons.</dd>
    <dt>Ghost Touch Lightshard Strike</dt> <dd>Ranged Spell Attack, reach 100/500 ft, one target. 2D6 Holy Light. In addition, the light also acts as a Dispel Magic effect.</dd>
    <dt>Holy Slam</dt> <dd>Melee Spell Attack +6 to hit, reach 5 ft, one target. 2D6 Holy Light.</dd>
</dl>';
        $monster->description = '<p>Shiradi are a type of celestial eladrin who wanders the planes fighting for the freedom of others. Although impulsive, they do not lightly enter into combat.</p>
<p>Shiradi eladrin lack the elf-like frailty of other eladrin, standing 11 feet tall and weighing about 400 pounds. They have wild black hair, bronze skin, and piercing black eyes. Additionally, shiradi have a pair of great, bronze-feathered wings. Shiradi eladrin can change their form into that of a cloud of whirling light shards at will.</p>';
        $helper->saveMonster($monster, ['Celestial', 'Eladrin', 'Shapechanger', 'Outer Planes', 'Good', 'Outsider', 'Chaotic'], [
            'stats'  => [24, 16, 20, 16, 16, 22, 14, 4],
            'skills' => [
                'Acrobatics'    => ['dc' => 14],
                'Athletics'     => ['dc' => 14],
                'Arcana'        => ['dc' => 21],
                'Concentration' => ['dc' => 20],
                'Diplomacy'     => ['dc' => 23],
                'Religion'      => ['dc' => 21],
                'Intimidation'  => ['dc' => 21],
                'Lore'          => ['dc' => 11],
                'Perception'    => ['dc' => 10],
                'Insight'       => ['dc' => 28],
                'Survival'      => ['dc' => 5],
                'Society'       => ['dc' => 23],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Axiomatic, Cold Iron, Unholy'],
                'resistance'          => ['meta' => 'Poison, (Non-magical, non-unholy) [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'aura'                => ['meta' => 'Aura of Menace. Any hostile creature within a 20-foot radius of the archon must succeed on a DC 25 WIS Save or suffer -2 to hit and Saves. A creature makes a Save at the end of each turn. Once a Save is successful, they are immune for 24 hours.'],
                'innate_spellcasting' => ['meta' => 'INT DC 18'],
            ],
            'spells' => [
                'Aid'                  => ['meta' => 'At will'],
                'Detect Undead'        => ['meta' => 'At will'],
                'Dispel Magic'         => ['meta' => 'At will'],
                'Remove Curse'         => ['meta' => 'At will'],
                'Remove Fear'          => ['meta' => 'At will'],
                'Remove Paralysis'     => ['meta' => 'At will'],
                'Detect Alignment'     => ['meta' => 'At will'],
                'Restoration'          => ['meta' => '1/day'],
                'Teleport'             => ['meta' => 'At will, Heightened +1. Self plus 50 lbs. of objects only.'],
                'Protection From Evil' => ['meta' => 'At will'],
                'Divine Smite'         => ['meta' => '3/day'],
                'Polymorph Self'       => ['meta' => '3/day'],
                'Heal'                 => ['meta' => '1/day'],
                'Holy Word'            => ['meta' => '1/day'],
            ],
            'classes' => [
                'Ranger' => ['level' => 11],
            ],
            'languages' => ['Celestial', 'Sylvan', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Tulani';
        $monster->size             = 'Medium';
        $monster->type             = 'Eladrin';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '25 (Mithral Plate Mail +2, Shield +2) / 16';
        $monster->damage_reduction = '10 (Mithral Plate Mail +2) / 5';
        $monster->hit_dice         = 15;
        $monster->speed            = '30 ft (25 ft in Plate Mail) / Fly 90 ft';
        $monster->actions          = '<dl>
    <dt>Anarchic Holy Speed Armblades +3</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D8 +8 Slashing +1D6 Fire. The tulani can form these armblades as a Free Action.</dd>
    <dt>Shapechanger</dt> <dd>
        <p>As an Action a tulani can transform into an 8-foot wide sphere of scintillating rainbow light.</p>
        <p>As an Action a tulani can transform into any form that all the other Shapechanger forms that other Eladrins can change into including their attack forms and movements associated to those forms.</p>
    </dd>
    <dt>Gaze</dt> <dd>With an Action, a tulani can gaze at a target within 60 ft and cause it to die as the Holy Word spell.</dd>
    <dt>Rays of Light</dt> <dd>Ranged Spell Attack, reach 100 ft cone, all in area DC 18 CON Save or fall asleep as the Sleep spell.</dd>
</dl>';
        $monster->description = '<p>Tulani are the ancient faerie lords of the Outer Planes and the most powerful of the greater eladrin. They are peaceful by nature and rarely left their home planes.</p>
<p>Tulani eladrin are beings of radiant grace and unearthly beauty that resembled stately elves. So bright are their faces that most mortals find it hard to even look at them and evil creatures can not bear to. Tulani are very tall, usually standing between 6 feet (180 centimeters) and 7 feet (210 centimeters) tall. They usually weigh about 150 pounds (68 kilograms). Their skin is a golden yellow color, and their eyes are bright purple. The voice of a tulani is musical and vibrant.</p>
<p>Tulani typically were shimmering robes of shifting colors.</p>';
        $helper->saveMonster($monster, ['Celestial', 'Eladrin', 'Shapechanger', 'Outer Planes', 'Good', 'Outsider', 'Chaotic'], [
            'stats'  => [20, 22, 12, 20, 18, 22, 16, 5],
            'skills' => [
                'Acrobatics'    => ['dc' => 17],
                'Athletics'     => ['dc' => 17],
                'Arcana'        => ['dc' => 25],
                'Concentration' => ['dc' => 25],
                'Diplomacy'     => ['dc' => 25],
                'Religion'      => ['dc' => 20],
                'Intimidation'  => ['dc' => 12],
                'Lore'          => ['dc' => 25],
                'Perception'    => ['dc' => 20],
                'Insight'       => ['dc' => 20],
                'Survival'      => ['dc' => 10],
                'Society'       => ['dc' => 20],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Axiomatic, Cold Iron, Unholy'],
                'resistance'          => ['meta' => 'Poison, (Non-magical, non-unholy) [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'aura'                => ['meta' => 'Aura of Menace. Any hostile creature within a 20-foot radius of the archon must succeed on a DC 25 WIS Save or suffer -2 to hit and Saves. A creature makes a Save at the end of each turn. Once a Save is successful, they are immune for 24 hours.'],
                'innate_spellcasting' => ['meta' => 'INT DC 20'],
            ],
            'spells' => [
                'Chain Lightning'      => ['meta' => 'At will'],
                'Prismatic Spray'      => ['meta' => 'At will'],
                'Charm'                => ['meta' => 'At will'],
                'Continual Flame'      => ['meta' => 'At will'],
                'Dancing Lights'       => ['meta' => 'At will'],
                'Dispel Magic'         => ['meta' => 'At will'],
                'Haste'                => ['meta' => 'At will'],
                'Hold Person'          => ['meta' => 'At will'],
                'Invisibility'         => ['meta' => 'At will, Heightened +2'],
                'Major Image'          => ['meta' => 'At will'],
                'Baleful Polymorph'    => ['meta' => 'At will'],
                'True Seeing'          => ['meta' => 'At will'],
                'Protection From Evil' => ['meta' => 'At will'],
                'Teleport'             => ['meta' => 'At will, Heightened +3'],
                'Wall of Force'        => ['meta' => 'At will'],
                'Polymorph Self'       => ['meta' => 'At will'],
                'Fire Storm'           => ['meta' => '1/day'],
                'Heal'                 => ['meta' => '1/day'],
                'Time Stop'            => ['meta' => '1/day'],
                'Power Word Kill'      => ['meta' => '1/day'],
                'Wish'                 => ['meta' => '1/year'],
            ],
            'classes' => [
                'Fighter' => ['level' => 1],
                'Wizard'  => ['level' => 14],
            ],
            'languages' => ['Celestial', 'Sylvan', 'Auld Wyrmish', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $this->call(ElementalsSeeder::class);

        $monster                   = new Monster;
        $monster->name             = 'Ettercap';
        $monster->size             = 'Medium';
        $monster->type             = 'Monstrosity';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '30 ft / Climb 30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 + 2) Piercing + (2D8) Poison. The target must succeed on a DC 11 CON Save or be Sickened for 1 minute. The creature can repeat the Save at the end of each of its turns, ending the effect on itself on a success. If the poison damage reduces the target to 0 Hit Points, the target is stable but Sickened 1 for 1 hour, even after regaining Hit Points, and is Paralyzed while Sickened in this way.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D4 + 2) Slashing.</dd>
    <dt>Web (Recharge 5-6)</dt> <dd>Melee Weapon Attack, reach 30/60 ft, one large or smaller creature. The creature is restrained by webbing. As an Action, the Restrained creature can make a DC 11 STR Check, escaping from the webbing on a success. The effect also ends if the webbing is destroyed. The webbing has AC 10, 5 Hit Points, vulnerability to Fire damage, and immunity to Bludgeoning, Poison, and Psychic damage.</dd>
    <dt>Spider Climb</dt> <dd>The ettercap can climb difficult surfaces, including upside down on ceilings, without needing to make an ability check.</dd>
    <dt>Web Sense</dt> <dd>While in contact with a web, the ettercap knows the exact location of any other creature in contact with the same web</dd>
    <dt>Web Walker</dt> <dd>The ettercap ignores movement restrictions caused by webbing.</dd>
</dl>';
        $monster->description      = '<p>Ettercaps are a race of bestial, spider-like aberrations located throughout Faerun. They are primitive hunters that have an affinity with spiders.</p>
<p>An adult ettercap stands 6 feet tall and weigh 200 pounds. Ettercaps resemble hunched, grey-purplish humanoids with distended white underbellies, spider-like faces (fangs and eyes and such), and two sharp, black chitinous claws instead of hands and feet.</p>
<p>They are not particularly intelligent. They are cowardly and vicious, preferring to set traps to ensnare their enemies. Ettercaps tend to be solitary creatures and their only purpose is to eat and to breed.</p>
<p>Ettercaps possess the capability to shoot sticky webs. They also possess a debilitating venom in their bite.</p>
<p>They use their webs as traps to capture prey.</p>
<p>It is suggested that ettercaps are the descendants of a group of mad druids, tainted and transmogrified by their association with a powerful demons into a form resembling the predatory arachnids their cult once revered. While the vast majority have completely reverted to pure animal instinct, a rare few claimed to demonstrate the intellect and capacities of an insane human.</p>
<p>Ettercaps are very fond of spiders and other arachnids and often keep them as others keep bees. From time to time, however, an ettercap have a number of monstrous spiders as pets, which are as loyal to it as a dog to a human master.</p>
<p>Ettercaps possess a fairly simple, spider-derived language of their own. It is focused around basic and real-world concepts, not equipped for the discussion of abstract ideas. They are capable of understanding other languages, such as elven, but can not speak them due to lacking the right vocal cords.</p>';
        $helper->saveMonster($monster, ['Monstrosity', 'Cursed', 'Humanoid'], [
            'stats'  => [14, 15, 13, 7, 12, 8, 2, 2],
            'skills' => [
                'Perception' => ['dc' => 3],
                'Stealth'    => ['dc' => 4],
                'Survival'   => ['dc' => 3],
            ],
            'features' => [
                'darkvision' => ['meta' => '60 ft'],
            ],
            'feats' => ['Two-Weapon Fighter'],
        ]);
    }
}
