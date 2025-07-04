<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class DragonsSeeder extends Seeder
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
        $monster->name             = 'Crystal Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 5;
        $monster->speed            = '30 ft / Burrow 15 ft / Climb 30 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +2) Piercing plus (1D4) Positive.</dd>
    <dt>Scintillating Breath (Recharge 5-6)</dt> <dd>The dragon exhales a burst of brilliant Positive energy as a Triple Action in a 15-foot cone. Each creature in that area must make a DC 12 CON Save, taking (4D8) Positive damage on a Failed Save, or half as much damage on a Successful one. The dragon then gains 5 temporary Hit Points by absorbing a portion of the Positive energy.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Positive', 'Psionic'], [
            'stats' => [14, 12, 14, 14, 13, 15, 2, 2],
            'saves' => [
                'DEX' => ['bonus' => 3],
                'CON' => ['bonus' => 4],
                'WIS' => ['bonus' => 3],
                'CHA' => ['bonus' => 4],
            ],
            'skills' => [
                'Perception' => ['dc' => 5],
                'Stealth'    => ['dc' => 2],
                'Survival'   => ['dc' => 3],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '10 ft'],
            ],
            'features' => [
                'darkvision'   => ['meta' => '60 feet'],
                'immunity'     => ['meta' => 'Cold, Positive, Negative'],
                'power_points' => ['meta' => '2 Power Points'],
            ],
            'powers' => [
                'Photokinesis', 'Heal',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Crystal Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 10;
        $monster->speed            = '40 ft / Burrow 20 ft / Climb 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +3) Piercing plus (1D8) Positive.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +5) Slashing.</dd>
    <dt>Scintillating Breath (Recharge 5-6)</dt> <dd>The dragon exhales a burst of brilliant Positive energy as a Triple Action in a 30-foot cone. Each creature in that area must make a DC 15 CON Save, taking (6D8) Positive damage on a Failed Save, or half as much damage on a Successful one. The dragon then gains 10 temporary Hit Points by absorbing a portion of the Positive energy.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Positive', 'Psionic'], [
            'stats' => [17, 12, 18, 16, 14, 17, 5, 3],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'CON' => ['bonus' => 7],
                'WIS' => ['bonus' => 5],
                'CHA' => ['bonus' => 6],
            ],
            'skills' => [
                'Perception' => ['dc' => 8],
                'Stealth'    => ['dc' => 7],
                'Survival'   => ['dc' => 5],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '30 ft'],
            ],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'immunity'     => ['meta' => 'Cold, Positive, Negative'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'power_points' => ['meta' => '6 Power Points'],
            ],
            'powers' => [
                'Ectoplasmic Creation', 'Ectoplasmic Shard', 'Photokinesis', 'Heal', 'Body Purification',
                'Body Restoration',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Crystal Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 15;
        $monster->speed            = '40 ft / Burrow 40 ft / Climb 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +5) Piercing plus (1D8) Positive.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +5) Slashing.</dd>
    <dt>Scintillating Breath (Recharge 5-6)</dt> <dd>The dragon exhales a burst of brilliant Positive energy as a Triple Action in a 60-foot cone. Each creature in that area must make a DC 17 CON Save, taking (9D8) Positive damage on a Failed Save, or half as much damage on a Successful one. The dragon then gains 15 temporary Hit Points by absorbing a portion of the Positive energy.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Positive', 'Psionic'], [
            'stats' => [21, 12, 21, 18, 15, 19, 12, 4],
            'saves' => [
                'DEX' => ['bonus' => 5],
                'CON' => ['bonus' => 9],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 8],
            ],
            'skills' => [
                'Perception' => ['dc' => 10],
                'Stealth'    => ['dc' => 9],
                'Survival'   => ['dc' => 6],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Cold, Positive, Negative'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'power_points'         => ['meta' => '12 Power Points'],
                'legendary_resistance' => ['meta' => '1/day'],
            ],
            'powers' => [
                'Ectoplasmic Creation', 'Ectoplasmic Shard', 'Photokinesis', 'Heal', 'Body Purification',
                'Body Restoration', 'Light Absorption', 'Metamorphosis',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Crystal Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 12;
        $monster->speed            = '40 ft / Burrow 40 ft / Climb 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +7) Piercing plus (2D8) Positive.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +7) Slashing.</dd>
    <dt>Scintillating Breath (Recharge 5-6)</dt> <dd>The dragon exhales a burst of brilliant Positive energy as a Triple Action in a 90-foot cone. Each creature in that area must make a DC 22 CON Save, taking (11D8) Positive damage on a Failed Save, or half as much damage on a Successful one. The dragon then gains 20 temporary Hit Points by absorbing a portion of the Positive energy.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Positive', 'Psionic'], [
            'stats' => [25, 14, 25, 20, 17, 21, 19, 4],
            'saves' => [
                'DEX' => ['bonus' => 7],
                'CON' => ['bonus' => 14],
                'WIS' => ['bonus' => 9],
                'CHA' => ['bonus' => 11],
            ],
            'skills' => [
                'Perception' => ['dc' => 15],
                'Stealth'    => ['dc' => 13],
                'Survival'   => ['dc' => 9],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Cold, Positive, Negative'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'power_points'         => ['meta' => '15 Power Points'],
                'legendary_resistance' => ['meta' => '2/day'],
            ],
            'powers' => [
                'Ectoplasmic Creation', 'Ectoplasmic Shard', 'Photokinesis', 'Heal', 'Body Purification',
                'Body Restoration', 'Light Absorption', 'Metamorphosis',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Topaz Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '30 ft / Fly 60 ft / Swim 30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +2) Piercing plus (1D2) STR damage.</dd>
    <dt>Desiccating Breath (Recharge 5-6)</dt> <dd>The dragon exhales yellowish energy as a Triple Action in a 15-foot cone. Each creature in that area must make a DC 11 CON Save. On a Failed Save the creature takes (6D6) Negative damage and is Enfeebled 2 until the end of its next turn. On a Successful Save the creature takes half as much damage and is not Enfeebled.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Negative', 'Psionic'], [
            'stats' => [15, 12, 13, 14, 13, 14, 2, 2],
            'saves' => [
                'DEX' => ['bonus' => 3],
                'CON' => ['bonus' => 3],
                'WIS' => ['bonus' => 3],
                'CHA' => ['bonus' => 4],
            ],
            'skills' => [
                'Intimidation' => ['dc' => 6],
                'Perception'   => ['dc' => 5],
                'Stealth'      => ['dc' => 2],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '10 ft'],
            ],
            'features' => [
                'darkvision'   => ['meta' => '60 feet'],
                'resistance'   => ['meta' => 'Cold, Positive, Negative, INT damage'],
                'power_points' => ['meta' => '2 Power Points'],
                'amphibious',
            ],
            'powers' => [
                'Daze', 'Clairvoyant Sense',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Topaz Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 17;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +3) Piercing plus (1D3) STR damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +3) Slashing.</dd>
    <dt>Desiccating Breath (Recharge 5-6)</dt> <dd>The dragon exhales yellowish energy as a Triple Action in a 30-foot cone. Each creature in that area must make a DC 13 CON Save. On a Failed Save the creature takes (8D6) Negative damage and is Enfeebled 3 until the end of its next turn. On a Successful Save the creature takes half as much damage and is not Enfeebled.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Negative', 'Psionic'], [
            'stats' => [17, 12, 15, 16, 15, 16, 7, 3],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'CON' => ['bonus' => 5],
                'WIS' => ['bonus' => 5],
                'CHA' => ['bonus' => 6],
            ],
            'skills' => [
                'Intimidation' => ['dc' => 9],
                'Perception'   => ['dc' => 8],
                'Stealth'      => ['dc' => 4],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '30 ft'],
            ],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'resistance'   => ['meta' => 'Cold, Negative, INT damage'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'power_points' => ['meta' => '6 Power Points'],
                'amphibious',
            ],
            'powers' => [
                'Daze', 'Clairvoyant Sense', 'Intelligence Blast', 'Intelligence Defense',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Topaz Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 20;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +5) Piercing plus (1D4) STR damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +5) Slashing.</dd>
    <dt>Desiccating Breath (Recharge 5-6)</dt> <dd>The dragon exhales yellowish energy as a Triple Action in a 60-foot cone. Each creature in that area must make a DC 17 CON Save. On a Failed Save the creature takes (10D6) Negative damage and is Enfeebled 4 until the end of its next turn. On a Successful Save the creature takes half as much damage and is not Enfeebled.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Negative', 'Psionic'], [
            'stats' => [19, 12, 19, 18, 17, 18, 13, 6],
            'saves' => [
                'DEX' => ['bonus' => 6],
                'CON' => ['bonus' => 9],
                'WIS' => ['bonus' => 8],
                'CHA' => ['bonus' => 9],
            ],
            'skills' => [
                'Intimidation' => ['dc' => 14],
                'Perception'   => ['dc' => 13],
                'Stealth'      => ['dc' => 6],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'resistance'           => ['meta' => 'Cold, Negative, INT damage'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'power_points'         => ['meta' => '12 Power Points'],
                'legendary_resistance' => ['meta' => '1/day'],
                'amphibious',
            ],
            'powers' => [
                'Daze', 'Clairvoyant Sense', 'Intelligence Blast', 'Intelligence Defense', 'Ectoplasmic Creation', 'Dimension Slide',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Topaz Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '9 (Natural Armor)';
        $monster->hit_dice         = 17;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +6) Piercing plus (1D6) STR damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +6) Slashing.</dd>
    <dt>Desiccating Breath (Recharge 5-6)</dt> <dd>The dragon exhales yellowish energy as a Triple Action in a 90-foot cone. Each creature in that area must make a DC 20 CON Save. On a Failed Save the creature takes (14D6) Negative damage and is Enfeebled 4 until the end of its next turn. On a Successful Save the creature takes half as much damage and is not Enfeebled.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Negative', 'Psionic'], [
            'stats' => [23, 12, 23, 20, 19, 20, 20, 6],
            'saves' => [
                'DEX' => ['bonus' => 7],
                'CON' => ['bonus' => 12],
                'WIS' => ['bonus' => 10],
                'CHA' => ['bonus' => 11],
            ],
            'skills' => [
                'Intimidation' => ['dc' => 17],
                'Perception'   => ['dc' => 16],
                'Stealth'      => ['dc' => 7],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'resistance'           => ['meta' => 'Cold, Negative, INT damage'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'power_points'         => ['meta' => '12 Power Points'],
                'legendary_resistance' => ['meta' => '2/day'],
                'amphibious',
            ],
            'powers' => [
                'Daze', 'Clairvoyant Sense', 'Intelligence Blast', 'Intelligence Defense', 'Ectoplasmic Creation', 'Dimension Slide', 'Ultrablast',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Emerald Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '30 ft / Burrow 15 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (1D10 +2) Piercing plus (1D2) DEX damage.</dd>
    <dt>Disorienting Breath (Recharge 5-6)</dt> <dd>The dragon exhales a wave of Psychic dissonance as a Triple Action in a 15-foot cone. Each creature in that area must make a DC 12 CON Save. On a Failed Save, the creature takes (1D6) DEX damage, or half as much on a Successful Save.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Psionic'], [
            'stats' => [15, 12, 15, 14, 12, 14, 2, 2],
            'saves' => [
                'DEX' => ['bonus' => 3],
                'CON' => ['bonus' => 4],
                'WIS' => ['bonus' => 3],
                'CHA' => ['bonus' => 4],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 4],
                'Deception'  => ['dc' => 4],
                'Perception' => ['dc' => 5],
                'Stealth'    => ['dc' => 2],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '10 ft'],
            ],
            'features' => [
                'darkvision'   => ['meta' => '60 feet'],
                'resistance'   => ['meta' => 'Fire, INT damage, WIS damage, DEX damage'],
                'power_points' => ['meta' => '2 Power Points'],
                'earth_glide'  => ['meta' => 'The dragon can burrow through solid rock at half its Burrow Speed and can leave a 5-foot diameter tunnel in its wake'],
            ],
            'powers' => [
                'Telekinesis', 'Dexterity Blast', 'Dexterity Defense',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Emerald Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 16;
        $monster->speed            = '40 ft / Burrow 20 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (1D10 +5) Piercing plus (1D3) DEX damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +5) Slashing.</dd>
    <dt>Disorienting Breath (Recharge 5-6)</dt> <dd>The dragon exhales a wave of Psychic dissonance as a Triple Action in a 30-foot cone. Each creature in that area must make a DC 15 CON Save. On a Failed Save, the creature takes (2D6) DEX damage, or half as much on a Successful Save.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Psionic'], [
            'stats' => [21, 12, 19, 16, 14, 16, 8, 3],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'CON' => ['bonus' => 7],
                'WIS' => ['bonus' => 5],
                'CHA' => ['bonus' => 6],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 6],
                'Deception'  => ['dc' => 6],
                'Perception' => ['dc' => 8],
                'Stealth'    => ['dc' => 4],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '30 ft'],
            ],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'resistance'   => ['meta' => 'Fire, INT damage, WIS damage, DEX damage'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'power_points' => ['meta' => '6 Power Points'],
                'earth_glide'  => ['meta' => 'The dragon can burrow through solid rock at half its Burrow Speed and can leave a 5-foot diameter tunnel in its wake'],
            ],
            'powers' => [
                'Telekinesis', 'Dexterity Blast', 'Dexterity Defense', 'Distract', 'Pyrokinesis',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Emerald Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 18;
        $monster->speed            = '40 ft / Burrow 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +6) Piercing plus (1D4) DEX damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +6) Slashing.</dd>
    <dt>Disorienting Breath (Recharge 5-6)</dt> <dd>The dragon exhales a wave of Psychic dissonance as a Triple Action in a 60-foot cone. Each creature in that area must make a DC 18 CON Save. On a Failed Save, the creature takes (3D6) DEX damage, or half as much on a Successful Save.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Psionic'], [
            'stats' => [23, 12, 21, 18, 16, 18, 14, 5],
            'saves' => [
                'DEX' => ['bonus' => 6],
                'CON' => ['bonus' => 10],
                'WIS' => ['bonus' => 8],
                'CHA' => ['bonus' => 9],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 9],
                'Deception'  => ['dc' => 9],
                'Perception' => ['dc' => 13],
                'Stealth'    => ['dc' => 9],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'resistance'           => ['meta' => 'Fire, INT damage, WIS damage, DEX damage'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'power_points'         => ['meta' => '12 Power Points'],
                'legendary_resistance' => ['meta' => '1/day'],
            ],
            'powers' => [
                'Telekinesis', 'Dexterity Blast', 'Dexterity Defense', 'Distract', 'Pyrokinesis', 'Dimension Slide',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Emerald Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '9 (Natural Armor)';
        $monster->hit_dice         = 19;
        $monster->speed            = '40 ft / Burrow 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +8) Piercing plus (1D6) DEX damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +8) Slashing.</dd>
    <dt>Disorienting Breath (Recharge 5-6)</dt> <dd>The dragon exhales a wave of Psychic dissonance as a Triple Action in a 60-foot cone. Each creature in that area must make a DC 22 CON Save. On a Failed Save, the creature takes (4D6) DEX damage, or half as much on a Successful Save.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Psionic'], [
            'stats' => [27, 13, 25, 21, 19, 24, 22, 6],
            'saves' => [
                'DEX' => ['bonus' => 8],
                'CON' => ['bonus' => 14],
                'WIS' => ['bonus' => 11],
                'CHA' => ['bonus' => 12],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 12],
                'Deception'  => ['dc' => 12],
                'Perception' => ['dc' => 18],
                'Stealth'    => ['dc' => 8],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'resistance'           => ['meta' => 'Fire, INT damage, WIS damage, DEX damage'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'power_points'         => ['meta' => '15 Power Points'],
                'legendary_resistance' => ['meta' => '2/day'],
            ],
            'powers' => [
                'Telekinesis', 'Dexterity Blast', 'Dexterity Defense', 'Distract', 'Pyrokinesis', 'Dimension Slide', 'Etherealness',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Sapphire Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '30 ft / Burrow 15 ft / Climb 30 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (1D10 +3) Piercing plus (1D2) STR damage.</dd>
    <dt>Debilitating Breath (Recharge 5-6)</dt> <dd>The dragon exhales a pulse of high-pitched, nearly inaudible sound as a Triple Action in a 15-foot cone. Each creature in that area must make a DC 13 WIS Save. On a Failed Save, the creature takes (1D6) INT damage.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Psionic'], [
            'stats' => [17, 14, 16, 14, 13, 14, 3, 2],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'CON' => ['bonus' => 5],
                'WIS' => ['bonus' => 3],
                'CHA' => ['bonus' => 4],
            ],
            'skills' => [
                'Diplomacy'  => ['dc' => 6],
                'Lore'       => ['dc' => 4],
                'Perception' => ['dc' => 5],
                'Stealth'    => ['dc' => 4],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '10 ft'],
            ],
            'features' => [
                'darkvision'   => ['meta' => '60 feet'],
                'resistance'   => ['meta' => 'Electricity, INT damage, WIS damage, STR damage'],
                'immunity'     => ['meta' => 'Frightened'],
                'power_points' => ['meta' => '2 Power Points'],
                'earth_glide'  => ['meta' => 'The dragon can burrow through solid rock at half its Burrow Speed and can leave a 5-foot diameter tunnel in its wake'],
                'spider_climb',
            ],
            'powers' => [
                'Telekinesis',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Sapphire Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 15;
        $monster->speed            = '40 ft / Burrow 20 ft / Climb 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (1D10 +5) Piercing plus (1D3) STR damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +5) Slashing.</dd>
    <dt>Debilitating Breath (Recharge 5-6)</dt> <dd>The dragon exhales a pulse of high-pitched, nearly inaudible sound as a Triple Action in a 30-foot cone. Each creature in that area must make a DC 17 WIS Save. On a Failed Save, the creature takes (2D6) INT damage.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Psionic'], [
            'stats' => [21, 14, 20, 16, 15, 16, 9, 4],
            'saves' => [
                'DEX' => ['bonus' => 6],
                'CON' => ['bonus' => 9],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 7],
            ],
            'skills' => [
                'Diplomacy'  => ['dc' => 6],
                'Lore'       => ['dc' => 4],
                'Perception' => ['dc' => 5],
                'Stealth'    => ['dc' => 4],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '30 ft'],
            ],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'resistance'   => ['meta' => 'Electricity, INT damage, WIS damage, STR damage'],
                'immunity'     => ['meta' => 'Frightened'],
                'power_points' => ['meta' => '6 Power Points'],
                'earth_glide'  => ['meta' => 'The dragon can burrow through solid rock at half its Burrow Speed and can leave a 5-foot diameter tunnel in its wake'],
                'spider_climb',
            ],
            'powers' => [
                'Telekinesis', 'Astral Construct', 'Intelligence Blast', 'Intelligence Defense',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Sapphire Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 18;
        $monster->speed            = '40 ft / Burrow 40 ft / Climb 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +6) Piercing plus (1D4) STR damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +6) Slashing.</dd>
    <dt>Debilitating Breath (Recharge 5-6)</dt> <dd>The dragon exhales a pulse of high-pitched, nearly inaudible sound as a Triple Action in a 60-foot cone. Each creature in that area must make a DC 17 WIS Save. On a Failed Save, the creature takes (3D6) INT damage.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Psionic'], [
            'stats' => [23, 14, 22, 18, 17, 18, 15, 5],
            'saves' => [
                'DEX' => ['bonus' => 7],
                'CON' => ['bonus' => 11],
                'WIS' => ['bonus' => 8],
                'CHA' => ['bonus' => 9],
            ],
            'skills' => [
                'Diplomacy'  => ['dc' => 14],
                'Lore'       => ['dc' => 9],
                'Perception' => ['dc' => 13],
                'Stealth'    => ['dc' => 7],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'resistance'           => ['meta' => 'Electricity, INT damage, WIS damage, STR damage'],
                'immunity'             => ['meta' => 'Frightened'],
                'power_points'         => ['meta' => '12 Power Points'],
                'earth_glide'          => ['meta' => 'The dragon can burrow through solid rock at half its Burrow Speed and can leave a 5-foot diameter tunnel in its wake'],
                'legendary_resistance' => ['meta' => '1/day'],
                'spider_climb',
            ],
            'powers' => [
                'Telekinesis', 'Astral Construct', 'Intelligence Blast', 'Intelligence Defense', 'Metamorphosis', 'Dimension Slide', 'Control Body',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Sapphire Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 20;
        $monster->speed            = '40 ft / Burrow 40 ft / Climb 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +8) Piercing plus (1D6) STR damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +8) Slashing.</dd>
    <dt>Debilitating Breath (Recharge 5-6)</dt> <dd>The dragon exhales a pulse of high-pitched, nearly inaudible sound as a Triple Action in a 90-foot cone. Each creature in that area must make a DC 23 WIS Save. On a Failed Save, the creature takes (4D6) INT damage.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Psionic'], [
            'stats' => [27, 14, 27, 21, 19, 20, 22, 6],
            'saves' => [
                'DEX' => ['bonus' => 9],
                'CON' => ['bonus' => 15],
                'WIS' => ['bonus' => 11],
                'CHA' => ['bonus' => 12],
            ],
            'skills' => [
                'Diplomacy'  => ['dc' => 19],
                'Lore'       => ['dc' => 12],
                'Perception' => ['dc' => 18],
                'Stealth'    => ['dc' => 9],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'resistance'           => ['meta' => 'Electricity, INT damage, WIS damage, STR damage'],
                'immunity'             => ['meta' => 'Frightened'],
                'power_points'         => ['meta' => '12 Power Points'],
                'earth_glide'          => ['meta' => 'The dragon can burrow through solid rock at half its Burrow Speed and can leave a 5-foot diameter tunnel in its wake'],
                'legendary_resistance' => ['meta' => '3/day'],
                'spider_climb',
            ],
            'powers' => [
                'Telekinesis', 'Astral Construct', 'Intelligence Blast', 'Intelligence Defense', 'Metamorphosis', 'Dimension Slide', 'Control Body', 'Space Hop', 'Teleport',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Amethyst Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'N';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 10;
        $monster->speed            = '30 ft / Fly 60 ft / Swim 30 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +4) Piercing plus (1D8) Force.</dd>
    <dt>Singularity Breath (Recharge 5-6)</dt> <dd>The dragon creates a shining bead of gravitational force in its mouth, then releases the energy as a Triple Action in a 15-foot cone. Each creature in that area must make a DC 13 STR Save. On a Failed Save, the creature takes (5D8) Force damage and it's Speed becomes 0 until the start of the dragon's next turn. On a Successful Save, the creature takes half as much damage and it's speed isn't reduced.</dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon', 'Force', 'Psionic'], [
            'stats' => [19, 14, 17, 16, 13, 17, 4, 2],
            'saves' => [
                'DEX' => ['bonus' => 2],
                'CON' => ['bonus' => 5],
                'WIS' => ['bonus' => 3],
                'CHA' => ['bonus' => 5],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 7],
                'Diplomacy'  => ['dc' => 5],
                'Perception' => ['dc' => 5],
                'Stealth'    => ['dc' => 2],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '10 ft'],
            ],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'immunity'     => ['meta' => 'Force, Frightened, Prone'],
                'power_points' => ['meta' => '3 Power Points'],
                'amphibious',
            ],
            'powers' => [
                'Telekinesis', 'Clairvoyant Sense',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Amethyst Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'N';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 16;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +5) Piercing plus (1D8) Force.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +5) Slashing.</dd>
    <dt>Singularity Breath (Recharge 5-6)</dt> <dd>The dragon creates a shining bead of gravitational force in its mouth, then releases the energy as a Triple Action in a 30-foot cone. Each creature in that area must make a DC 17 STR Save. On a Failed Save, the creature takes (8D8) Force damage and it's Speed becomes 0 until the start of the dragon's next turn. On a Successful Save, the creature takes half as much damage and it's speed isn't reduced.</dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon', 'Force', 'Psionic'], [
            'stats' => [21, 12, 21, 18, 15, 19, 9, 4],
            'saves' => [
                'DEX' => ['bonus' => 5],
                'CON' => ['bonus' => 9],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 8],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 12],
                'Diplomacy'  => ['dc' => 8],
                'Perception' => ['dc' => 10],
                'Stealth'    => ['dc' => 5],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '30 ft'],
            ],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'immunity'     => ['meta' => 'Force'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'power_points' => ['meta' => '10 Power Points'],
                'amphibious',
            ],
            'powers' => [
                'Telekinesis', 'Clairvoyant Sense', 'Dimension Slide', 'Dispel Psionics',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Amethyst Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'N';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 17;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +7) Piercing plus (2D8) Force.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (1D8 +7) Slashing.</dd>
    <dt>Singularity Breath (Recharge 5-6)</dt> <dd>The dragon creates a shining bead of gravitational force in its mouth, then releases the energy as a Triple Action in a 60-foot cone. Each creature in that area must make a DC 20 STR Save. On a Failed Save, the creature takes (10D8) Force damage and it's Speed becomes 0 until the start of the dragon's next turn. On a Successful Save, the creature takes half as much damage and it's speed isn't reduced.</dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon', 'Force', 'Psionic'], [
            'stats' => [26, 14, 27, 26, 19, 23, 23, 6],
            'saves' => [
                'DEX' => ['bonus' => 9],
                'CON' => ['bonus' => 15],
                'WIS' => ['bonus' => 11],
                'CHA' => ['bonus' => 13],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 22],
                'Diplomacy'  => ['dc' => 13],
                'Perception' => ['dc' => 15],
                'Stealth'    => ['dc' => 9],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Force'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'power_points'         => ['meta' => '15 Power Points'],
                'legendary_resistance' => ['meta' => '2/day'],
                'amphibious',
            ],
            'powers' => [
                'Telekinesis', 'Clairvoyant Sense', 'Dimension Slide', 'Dispel Psionics', 'Metamorphosis',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Amethyst Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'N';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 18;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +8) Piercing plus (2D8) Cold.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +8) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 20 ft, one target. (2D8 +8) Bludgeoning.</dd>
    <dt>Singularity Breath (Recharge 5-6)</dt> <dd>The dragon creates a shining bead of gravitational force in its mouth, then releases the energy as a Triple Action in a 90-foot cone. Each creature in that area must make a DC 23 STR Save. On a Failed Save, the creature takes (14D8) Force damage and it's Speed becomes 0 until the start of the dragon's next turn. On a Successful Save, the creature takes half as much damage and it's speed isn't reduced.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 15 ft. of the dragon must succeed on a DC 22 DEX Save or take (2D6 +8) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon', 'Force', 'Psionic'], [
            'stats' => [25, 14, 25, 20, 17, 21, 16, 6],
            'saves' => [
                'DEX' => ['bonus' => 7],
                'CON' => ['bonus' => 12],
                'WIS' => ['bonus' => 8],
                'CHA' => ['bonus' => 10],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 15],
                'Diplomacy'  => ['dc' => 10],
                'Perception' => ['dc' => 13],
                'Stealth'    => ['dc' => 7],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Force'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'power_points'         => ['meta' => '20 Power Points'],
                'legendary_resistance' => ['meta' => '3/day'],
                'amphibious',
            ],
            'powers' => [
                'Telekinesis', 'Clairvoyant Sense', 'Dimension Slide', 'Dispel Psionics', 'Metamorphosis', 'Plane Shift',
                'Hail of Ectoplasmic Shards',
            ],
            'languages' => [
                'Telepathy' => ['meta' => '120 ft'],
                'Auld Wyrmish',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'White Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 5;
        $monster->speed            = '30 ft / Burrow 15 ft / Fly 60 ft / Swim 30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +2) Piercing plus (1D4) Cold.</dd>
    <dt>Cold Breath (Recharge 5-6)</dt> <dd>The dragon exhales an icy blast of hail as a Triple Action in a 15-foot cone. Each creature in that area must make a DC 12 CON Save taking 5D8 Cold damage on a Failed Save or half as much on a Successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Cold'], [
            'stats' => [14, 12, 14, 5, 10, 11, 2, 2],
            'saves' => [
                'DEX' => ['bonus' => 3],
                'CON' => ['bonus' => 4],
                'WIS' => ['bonus' => 2],
                'CHA' => ['bonus' => 2],
            ],
            'skills' => [
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 2],
            ],
            'feats'    => ['Blindsight' => ['meta' => '10 ft']],
            'features' => [
                'darkvision' => ['meta' => '60 feet'],
                'immunity'   => ['meta' => 'Cold'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'White Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 14;
        $monster->speed            = '40 ft / Burrow 20 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +4) Piercing plus (1D8) Cold.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +4) Slashing.</dd>
    <dt>Cold Breath (Recharge 5-6)</dt> <dd>The dragon exhales an icy blast of hail as a Triple Action in a 30-foot cone. Each creature in that area must make a DC 15 CON Save taking 10D8 Cold damage on a Failed Save or half as much on a Successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Cold'], [
            'stats' => [18, 12, 18, 6, 11, 12, 6, 3],
            'saves' => [
                'DEX' => ['bonus' => 3],
                'CON' => ['bonus' => 7],
                'WIS' => ['bonus' => 3],
                'CHA' => ['bonus' => 4],
            ],
            'skills' => [
                'Perception' => ['dc' => 6],
                'Stealth'    => ['dc' => 3],
            ],
            'feats'    => ['Blindsight' => ['meta' => '30 ft']],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'immunity'     => ['meta' => 'Cold'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'ice_walk',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'White Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 16;
        $monster->speed            = '40 ft / Burrow 30 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +6) Piercing plus (1D8) Cold.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +6) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D8 +6) Bludgeoning.</dd>
    <dt>Cold Breath (Recharge 5-6)</dt> <dd>The dragon exhales an icy blast of hail as a Triple Action in a 60-foot cone. Each creature in that area must make a DC 19 CON Save taking 12D8 Cold damage on a Failed Save or half as much on a Successful one.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 19 DEX Save or take (2D6 +8) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Cold'], [
            'stats' => [22, 10, 22, 8, 12, 12, 13, 5],
            'saves' => [
                'DEX' => ['bonus' => 5],
                'CON' => ['bonus' => 11],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 6],
            ],
            'skills' => [
                'Perception' => ['dc' => 11],
                'Stealth'    => ['dc' => 5],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Cold'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 16. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '1/day'],
                'ice_walk',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'White Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '7';
        $monster->damage_reduction = '10 (Natural Armor)';
        $monster->hit_dice         = 18;
        $monster->speed            = '40 ft / Burrow 40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +8) Piercing plus (2D8) Cold.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +8) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 20 ft, one target. (2D8 +8) Bludgeoning.</dd>
    <dt>Cold Breath (Recharge 5-6)</dt> <dd>The dragon exhales an icy blast of hail as a Triple Action in a 90-foot cone. Each creature in that area must make a DC 22 CON Save taking 16D8 Cold damage on a Failed Save or half as much on a Successful one.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 15 ft. of the dragon must succeed on a DC 22 DEX Save or take (2D6 +8) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Cold'], [
            'stats' => [26, 10, 26, 10, 13, 14, 20, 6],
            'saves' => [
                'DEX' => ['bonus' => 6],
                'CON' => ['bonus' => 14],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 8],
            ],
            'skills' => [
                'Perception' => ['dc' => 13],
                'Stealth'    => ['dc' => 6],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Cold'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 16. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '2/day'],
                'ice_walk',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Black Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '30 ft / Fly 60 ft / Swim 30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +2) Piercing plus (1D4) Acid.</dd>
    <dt>Acid Breath (Recharge 5-6)</dt> <dd>The dragon exhales an Acid as a Triple Action in a 15-foot line. Each creature in that area must make a DC 11 DEX Save taking 5D8 Acid damage on a Failed Save or half as much on a Successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Acid'], [
            'stats' => [15, 14, 13, 10, 11, 13, 2, 2],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'CON' => ['bonus' => 3],
                'WIS' => ['bonus' => 2],
                'CHA' => ['bonus' => 3],
            ],
            'skills' => [
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 4],
            ],
            'feats'    => ['Blindsight' => ['meta' => '10 ft']],
            'features' => [
                'darkvision' => ['meta' => '60 feet'],
                'immunity'   => ['meta' => 'Acid'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Black Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 15;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +4) Piercing plus (1D8) Acid.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +4) Slashing.</dd>
    <dt>Acid Breath (Recharge 5-6)</dt> <dd>The dragon exhales an Acid as a Triple Action in a 30-foot line. Each creature in that area must make a DC 14 DEX Save taking 11D8 Acid damage on a Failed Save or half as much on a Successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Acid'], [
            'stats' => [19, 14, 17, 12, 11, 15, 7, 3],
            'saves' => [
                'DEX' => ['bonus' => 5],
                'CON' => ['bonus' => 6],
                'WIS' => ['bonus' => 3],
                'CHA' => ['bonus' => 5],
            ],
            'skills' => [
                'Perception' => ['dc' => 6],
                'Stealth'    => ['dc' => 5],
            ],
            'feats'    => ['Blindsight' => ['meta' => '30 ft']],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'immunity'     => ['meta' => 'Acid'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Black Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 17;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +6) Piercing plus (1D8) Acid.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +6) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D8 +6) Bludgeoning.</dd>
    <dt>Acid Breath (Recharge 5-6)</dt> <dd>The dragon exhales Acid as a Triple Action in a 60-foot line. Each creature in that area must make a DC 19 CON Save taking 12D8 Acid damage on a Failed Save or half as much on a Successful one.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 19 DEX Save or take (2D6 +6) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Acid'], [
            'stats' => [23, 14, 21, 14, 13, 17, 14, 5],
            'saves' => [
                'DEX' => ['bonus' => 7],
                'CON' => ['bonus' => 10],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 8],
            ],
            'skills' => [
                'Perception' => ['dc' => 11],
                'Stealth'    => ['dc' => 7],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Cold'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 16. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '1/day'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Black Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '10 (Natural Armor)';
        $monster->hit_dice         = 21;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +8) Piercing plus (2D8) Acid.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +8) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 20 ft, one target. (2D8 +8) Bludgeoning.</dd>
    <dt>Acid Breath (Recharge 5-6)</dt> <dd>The dragon exhales Acid as a Triple Action in a 90-foot line. Each creature in that area must make a DC 22 DEX Save taking 15D8 Acid damage on a Failed Save or half as much on a Successful one.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 15 ft. of the dragon must succeed on a DC 23 DEX Save or take (2D6 +8) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Acid'], [
            'stats' => [27, 14, 25, 16, 15, 19, 21, 6],
            'saves' => [
                'DEX' => ['bonus' => 9],
                'CON' => ['bonus' => 14],
                'WIS' => ['bonus' => 9],
                'CHA' => ['bonus' => 11],
            ],
            'skills' => [
                'Perception' => ['dc' => 16],
                'Stealth'    => ['dc' => 9],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Cold'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 19. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '2/day'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Green Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 7;
        $monster->speed            = '30 ft / Fly 60 ft / Swim 30 ft';
        $monster->description      = '<p>The most cunning and treacherous of true dragons, green dragons use misdirection and trickery to get the upper hand against their enemies. A green dragon is recognized by the crest that begins near its eyes and continues down its spine, reaching full height just behind the skull.</p>';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +2) Piercing.</dd>
    <dt>Poison Breath (Recharge 5-6)</dt> <dd>The dragon exhales poisonous gas as a Triple Action in a 15-foot cone. Each creature in that area must make a DC 11 CON Save taking 6D6 Poison damage on a Failed Save or half as much on a Successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Poison'], [
            'stats' => [15, 12, 13, 14, 11, 13, 2, 2],
            'saves' => [
                'DEX' => ['bonus' => 3],
                'CON' => ['bonus' => 3],
                'WIS' => ['bonus' => 2],
                'CHA' => ['bonus' => 3],
            ],
            'skills' => [
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 3],
            ],
            'feats'    => ['Blindsight' => ['meta' => '10 ft']],
            'features' => [
                'darkvision' => ['meta' => '60 feet'],
                'immunity'   => ['meta' => 'Poison'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Green Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 16;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->description      = '<p>The most cunning and treacherous of true dragons, green dragons use misdirection and trickery to get the upper hand against their enemies. A green dragon is recognized by the crest that begins near its eyes and continues down its spine, reaching full height just behind the skull.</p>';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +4) Piercing +  2D6 Poison.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +4) Slashing.</dd>
    <dt>Poison Breath (Recharge 5-6)</dt> <dd>The dragon exhales poisonous gas as a Triple Action in a 30-foot cone. Each creature in that area must make a DC 14 CON Save, taking 12D6 Poison damage on a Failed Save, or half as much damage on a successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Poison'], [
            'stats' => [19, 12, 17, 16, 13, 15, 8, 3],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'CON' => ['bonus' => 6],
                'WIS' => ['bonus' => 4],
                'CHA' => ['bonus' => 5],
            ],
            'skills' => [
                'Deception'  => ['dc' => 5],
                'Perception' => ['dc' => 7],
                'Stealth'    => ['dc' => 4],
            ],
            'feats'    => ['Blindsight' => ['meta' => '30 ft']],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'immunity'     => ['meta' => 'Poison'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Green Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 18;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +6) Piercing + (2D6) Poison.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +6) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D8 +6) Bludgeoning.</dd>
    <dt>Poison Breath (Recharge 5-6)</dt> <dd>The dragon exhales poisonous gas as a Triple Action in a 60-foot cone. Each creature in that area must make a DC 18 CON Save, taking 16D6 Poison damage on a Failed Save, or half as much damage on a successful one.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 19 DEX Save or take (2D6 +6) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Poison'], [
            'stats' => [23, 12, 21, 18, 15, 17, 15, 5],
            'saves' => [
                'DEX' => ['bonus' => 6],
                'CON' => ['bonus' => 10],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 8],
            ],
            'skills' => [
                'Deception'  => ['dc' => 8],
                'Diplomacy'  => ['dc' => 8],
                'Insight'    => ['dc' => 7],
                'Perception' => ['dc' => 12],
                'Stealth'    => ['dc' => 6],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Poison'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 16. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '1/day'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Green Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '10 (Natural Armor)';
        $monster->hit_dice         = 22;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +8) Piercing + (3D6) Poison.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (4D6 +8) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D8 +8) Bludgeoning.</dd>
    <dt>Poison Breath (Recharge 5-6)</dt> <dd>The dragon exhales poisonous gas as a Triple Action in a 90-foot cone. Each creature in that area must make a DC 22 CON Save, taking 22D6 Poison damage on a Failed Save, or half as much damage on a successful one.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 15 ft. of the dragon must succeed on a DC 23 DEX Save or take (2D6 +8) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Poison'], [
            'stats' => [27, 12, 25, 20, 17, 19, 22, 6],
            'saves' => [
                'DEX' => ['bonus' => 8],
                'CON' => ['bonus' => 14],
                'WIS' => ['bonus' => 14],
                'CHA' => ['bonus' => 12],
            ],
            'skills' => [
                'Deception'  => ['dc' => 11],
                'Diplomacy'  => ['dc' => 11],
                'Insight'    => ['dc' => 10],
                'Perception' => ['dc' => 17],
                'Stealth'    => ['dc' => 8],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Poison'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 19. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '2/day'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Blue Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 8;
        $monster->speed            = '30 ft / Burrow 15 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +3) Piercing.</dd>
    <dt>Lightning Breath (Recharge 5-6)</dt> <dd>The dragon exhales Electricity as a Triple Action in a 30-foot line that is 5 feet wide as a Triple Action. each creature in that line must make a DC 12 DEX Save, taking 55 (10D10) Electricity damage on a failed Save, or half as much damage on a successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Electricity'], [
            'stats' => [17, 10, 15, 12, 11, 15, 3, 3],
            'saves' => [
                'DEX' => ['bonus' => 2],
                'CON' => ['bonus' => 4],
                'WIS' => ['bonus' => 2],
                'CHA' => ['bonus' => 4],
            ],
            'skills' => [
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 2],
            ],
            'feats'    => ['Blindsight' => ['meta' => '60 ft']],
            'features' => [
                'darkvision' => ['meta' => '60 feet'],
                'immunity'   => ['meta' => 'Electricity'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Blue Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 16;
        $monster->speed            = '40 ft / Burrow 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +5) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +5) Slashing.</dd>
    <dt>Lightning Breath (Recharge 5-6)</dt> <dd>The dragon exhales Electricity as a Triple Action in a 60-foot line that is 5 feet wide as a Triple Action. each creature in that line must make a DC 16 DEX Save, taking 55 (10D10) Electricity damage on a failed Save, or half as much damage on a successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Electricity'], [
            'stats' => [21, 10, 19, 14, 13, 17, 9, 5],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'CON' => ['bonus' => 8],
                'WIS' => ['bonus' => 5],
                'CHA' => ['bonus' => 7],
            ],
            'skills' => [
                'Perception' => ['dc' => 9],
                'Stealth'    => ['dc' => 4],
            ],
            'feats'    => ['Blindsight' => ['meta' => '60 ft']],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'immunity'     => ['meta' => 'Electricity'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Blue Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 18;
        $monster->speed            = '40 ft / Burrow 30 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +7) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +7) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D8 +7) Bludgeoning.</dd>
    <dt>Lightning Breath (Recharge 5-6)</dt> <dd>The dragon exhales Electricity as a Triple Action in a 90-foot line that is 5 feet wide as a Triple Action. each creature in that line must make a DC 19 DEX Save, taking 66 (12D10) Electricity damage on a failed Save, or half as much damage on a successful one.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 20 DEX Save or take 14 (2D6 +7) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Electricity'], [
            'stats' => [25, 10, 23, 16, 15, 19, 16, 6],
            'saves' => [
                'DEX' => ['bonus' => 5],
                'CON' => ['bonus' => 11],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 9],
            ],
            'skills' => [
                'Perception' => ['dc' => 12],
                'Stealth'    => ['dc' => 5],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Electricity'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 20. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '1/day'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Blue Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '7';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 24;
        $monster->speed            = '40 ft / Burrow 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +9) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +9) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D8 +9) Bludgeoning.</dd>
    <dt>Lightning Breath (Recharge 5-6)</dt> <dd>The dragon exhales Electricity as a Triple Action in a 120-foot line that is 5 feet wide as a Triple Action. each creature in that line must make a DC 19 DEX Save, taking 88 (16D10) Electricity damage on a failed Save, or half as much damage on a successful one.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 24 DEX Save or take 16 (2D6 +9) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Electricity'], [
            'stats' => [29, 10, 27, 18, 17, 21, 23, 6],
            'saves' => [
                'DEX' => ['bonus' => 7],
                'CON' => ['bonus' => 15],
                'WIS' => ['bonus' => 10],
                'CHA' => ['bonus' => 12],
            ],
            'skills' => [
                'Perception' => ['dc' => 17],
                'Stealth'    => ['dc' => 7],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Electricity'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 20. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '3/day'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Red Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 10;
        $monster->speed            = '30 ft / Climb 30 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +3) Piercing.</dd>
    <dt>Fire Breath (Recharge 5-6)</dt> <dd>The dragon exhales Fire as a Triple Action in a 15-foot cone. each creature in that line must make a DC 13 DEX Save, taking 24 (7D6) Fire damage on a failed Save, or half as much damage on a successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Fire'], [
            'stats' => [19, 10, 17, 12, 11, 15, 4, 2],
            'saves' => [
                'DEX' => ['bonus' => 2],
                'CON' => ['bonus' => 5],
                'WIS' => ['bonus' => 2],
                'CHA' => ['bonus' => 4],
            ],
            'skills' => [
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 2],
            ],
            'feats'    => ['Blindsight' => ['meta' => '10 ft']],
            'features' => [
                'darkvision' => ['meta' => '60 feet'],
                'immunity'   => ['meta' => 'Fire'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Red Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 17;
        $monster->speed            = '40 ft / Climb 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +6) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +6) Slashing.</dd>
    <dt>Lightning Breath (Recharge 5-6)</dt> <dd>The dragon exhales Fire as a Triple Action in a 30-foot cone. Each creature in that line must make a DC 17 DEX Save, taking 56 (16D6) Fire damage on a failed Save, or half as much damage on a successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Fire'], [
            'stats' => [23, 10, 21, 14, 11, 19, 10, 4],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'CON' => ['bonus' => 9],
                'WIS' => ['bonus' => 4],
                'CHA' => ['bonus' => 8],
            ],
            'skills' => [
                'Perception' => ['dc' => 8],
                'Stealth'    => ['dc' => 4],
            ],
            'feats'    => ['Blindsight' => ['meta' => '60 ft']],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'immunity'     => ['meta' => 'Fire'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Red Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 19;
        $monster->speed            = '40 ft / Climb 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +8) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +8) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D8 +8) Bludgeoning.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 22 DEX Save or take 15 (2D6 +8) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
    <dt>Fire Breath (Recharge 5-6)</dt> <dd>The dragon exhales Fire as a Triple Action in a 60-foot cone. each creature in that line must make a DC 21 DEX Save, taking 63 (18D6) Fire damage on a failed Save, or half as much damage on a successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Fire'], [
            'stats' => [27, 10, 25, 16, 13, 21, 17, 6],
            'saves' => [
                'DEX' => ['bonus' => 6],
                'CON' => ['bonus' => 13],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 11],
            ],
            'skills' => [
                'Perception' => ['dc' => 13],
                'Stealth'    => ['dc' => 6],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Fire'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 19. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '1/day'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Red Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '7';
        $monster->damage_reduction = '9 (Natural Armor)';
        $monster->hit_dice         = 25;
        $monster->speed            = '40 ft / Climb 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +10) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +10) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 20 ft, one target. (2D8 +10) Bludgeoning.</dd>
    <dt>Fire Breath (Recharge 5-6)</dt> <dd>The dragon exhales Fire as a Triple Action in a 90-foot cone. each creature in that line must make a DC 24 DEX Save, taking 91 (26D6) Fire damage on a failed Save, or half as much damage on a successful one.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 15 ft. of the dragon must succeed on a DC 25 DEX Save or take 17 (2D6 +10) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Fire'], [
            'stats' => [30, 10, 29, 18, 15, 23, 24, 6],
            'saves' => [
                'DEX' => ['bonus' => 7],
                'CON' => ['bonus' => 16],
                'WIS' => ['bonus' => 9],
                'CHA' => ['bonus' => 13],
            ],
            'skills' => [
                'Perception' => ['dc' => 16],
                'Stealth'    => ['dc' => 7],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Fire'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 21. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '3/day'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Brass Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '30 ft / Burrow 60 ft / Fly 30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +2) Piercing.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Fire Breath</strong> The dragon exhales Fire as a Triple Action in a 20-foot line that is 5 feet wide. Each creature in that area must make a DC 11 DEX Save, taking (4D6) Fire damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Sleep Breath</strong> The dragon exhales a sleep gas as a Triple Action in a 15-foot cone. Each creature in that area must succeed on a DC 11 CON Save or fall Asleep for 1 minute. This effect ends for a creature if the creature takes damage or someone uses an Action to wake it.</li>
        </ul>
    </dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Fire'], [
            'stats' => [15, 10, 13, 10, 11, 13, 1, 2],
            'saves' => [
                'DEX' => ['bonus' => 2],
                'CON' => ['bonus' => 3],
                'WIS' => ['bonus' => 2],
                'CHA' => ['bonus' => 3],
            ],
            'skills' => [
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 2],
            ],
            'feats'    => ['Blindsight' => ['meta' => '10 ft']],
            'features' => [
                'darkvision' => ['meta' => '60 feet'],
                'immunity'   => ['meta' => 'Fire'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Brass Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 13;
        $monster->speed            = '40 ft / Burrow 20 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D10 +4) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +4) Slashing.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Fire Breath</strong> The dragon exhales Fire as a Triple Action in a 40-foot line that is 5 feet wide. Each creature in that area must make a DC 11 DEX Save, taking (12D6) Fire damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Sleep Breath</strong> The dragon exhales a sleep gas as a Triple Action in a 30-foot cone. Each creature in that area must succeed on a DC 14 CON Save or fall Asleep for 5 minute. This effect ends for a creature if the creature takes damage or someone uses an Action to wake it.</li>
        </ul>
    </dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Fire'], [
            'stats' => [19, 10, 17, 12, 11, 15, 6, 3],
            'saves' => [
                'DEX' => ['bonus' => 3],
                'CON' => ['bonus' => 6],
                'WIS' => ['bonus' => 3],
                'CHA' => ['bonus' => 5],
            ],
            'skills' => [
                'Diplomacy'  => ['dc' => 5],
                'Perception' => ['dc' => 6],
                'Stealth'    => ['dc' => 3],
            ],
            'feats'    => ['Blindsight' => ['meta' => '30 ft']],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'immunity'     => ['meta' => 'Fire'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Brass Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 15;
        $monster->speed            = '40 ft / Burrow 30 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +6) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D8 +6) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D8 +6) Bludgeoning.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 19 DEX Save or take (2D6 +6) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Fire Breath</strong> The dragon exhales Fire as a Triple Action in a 60-foot line that is 5 feet wide. Each creature in that area must make a DC 18 DEX Save, taking (13D6) Fire damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Sleep Breath</strong> The dragon exhales a sleep gas as a Triple Action in a 30-foot cone. Each creature in that area must succeed on a DC 18 CON Save or fall Asleep for 10 minute. This effect ends for a creature if the creature takes damage or someone uses an Action to wake it.</li>
        </ul>
    </dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Fire'], [
            'stats' => [23, 10, 21, 14, 13, 17, 13, 5],
            'saves' => [
                'DEX' => ['bonus' => 5],
                'CON' => ['bonus' => 10],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 8],
            ],
            'skills' => [
                'Diplomacy'  => ['dc' => 8],
                'Lore'       => ['dc' => 7],
                'Perception' => ['dc' => 11],
                'Stealth'    => ['dc' => 5],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '30 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Fire'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 16. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '1/day'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Brass Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '7';
        $monster->damage_reduction = '10 (Natural Armor)';
        $monster->hit_dice         = 17;
        $monster->speed            = '40 ft / Burrow 40 ft / Fly 80 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +8) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +8) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 20 ft, one target. (2D8 +8) Bludgeoning.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 24 DEX Save or take (2D6 +9) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Fire Breath</strong> The dragon exhales Fire as a Triple Action in a 90-foot line that is 5 feet wide. Each creature in that area must make a DC 21 DEX Save, taking (16D6) Fire damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Sleep Breath</strong> The dragon exhales a sleep gas as a Triple Action in a 90-foot cone. Each creature in that area must succeed on a DC 21 CON Save or fall Asleep for 10 minute. This effect ends for a creature if the creature takes damage or someone uses an Action to wake it.</li>
        </ul>
    </dd>
    <dt>Change Shape</dt> <dd>
        <p>The dragon magically polymorphes into a humanoid or beast that has a Challenge Rating no higher than its own, or back into its true form. It reverts to its true form if it dies. Any equipment it is wearing or carrying is absorbed or borne by the new form (the dragon's choice)</p>
        <p>In a new form, the dragon retains its alignment, hit points, Hit Dice, ability to speak, proficiencies, and INT, WIS, CHA scores, as well as this Action. Its statistics and capabilities are otherwise replaced by those of the new form, except any class features of that form.</p>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon', 'Fire'], [
            'stats' => [27, 10, 28, 16, 15, 19, 20, 6],
            'saves' => [
                'DEX' => ['bonus' => 6],
                'CON' => ['bonus' => 13],
                'WIS' => ['bonus' => 8],
                'CHA' => ['bonus' => 10],
            ],
            'skills' => [
                'Diplomacy'  => ['dc' => 10],
                'Lore'       => ['dc' => 9],
                'Perception' => ['dc' => 14],
                'Stealth'    => ['dc' => 6],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Fire'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 18. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '2/day'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Copper Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '30 ft / Climb 30 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +2) Piercing.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Acid Breath</strong> The dragon exhales Acid as a Triple Action in a 20-foot line. Each creature in that area must make a DC 11 DEX Save, taking (4D8) Acid damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Slowing Breath</strong> The dragon exhales a gas as a Triple Action in a 15-foot cone. Each creature in that area must succeed on a DC 11 CON Save. On a Failed Save, the creature is Slowed 1 and Hampered 5. These effects last for 1 minute. The creature can repeat the Save at the end of each of its turns, ending the effect on itself with a Successful Save.</li>
        </ul>
    </dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Acid'], [
            'stats' => [15, 12, 13, 14, 11, 13, 1, 2],
            'saves' => [
                'DEX' => ['bonus' => 3],
                'CON' => ['bonus' => 3],
                'WIS' => ['bonus' => 2],
                'CHA' => ['bonus' => 3],
            ],
            'skills' => [
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 3],
            ],
            'feats'    => ['Blindsight' => ['meta' => '10 ft']],
            'features' => [
                'darkvision' => ['meta' => '60 feet'],
                'immunity'   => ['meta' => 'Acid'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Copper Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 14;
        $monster->speed            = '40 ft / Climb 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +4) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +4) Slashing.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Acid Breath</strong> The dragon exhales Acid as a Triple Action in a 40-foot line. Each creature in that area must make a DC 14 DEX Save, taking (9D8) Acid damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Slowing Breath</strong> The dragon exhales a gas as a Triple Action in a 30-foot cone. Each creature in that area must succeed on a DC 14 CON Save. On a Failed Save, the creature is Slowed 1 and Hampered 10. These effects last for 1 minute. The creature can repeat the Save at the end of each of its turns, ending the effect on itself with a Successful Save.</li>
        </ul>
    </dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Acid'], [
            'stats' => [19, 12, 17, 16, 13, 15, 7, 3],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'CON' => ['bonus' => 6],
                'WIS' => ['bonus' => 4],
                'CHA' => ['bonus' => 5],
            ],
            'skills' => [
                'Deception'  => ['dc' => 5],
                'Perception' => ['dc' => 7],
                'Stealth'    => ['dc' => 4],
            ],
            'feats'    => ['Blindsight' => ['meta' => '30 ft']],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'immunity'     => ['meta' => 'Cold'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Copper Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 16;
        $monster->speed            = '40 ft / Climb 40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +6) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 + 6) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D8 +6) Bludgeoning.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 19 DEX Save or take (2D6 +6) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Acid Breath</strong> The dragon exhales Acid as a Triple Action in a 40-foot line. Each creature in that area must make a DC 18 DEX Save, taking (12D8) Acid damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Slowing Breath</strong> The dragon exhales a gas as a Triple Action in a 30-foot cone. Each creature in that area must succeed on a DC 18 CON Save. On a Failed Save, the creature is Slowed 1 and Hampered 15. These effects last for 1 minute. The creature can repeat the Save at the end of each of its turns, ending the effect on itself with a Successful Save.</li>
        </ul>
    </dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Acid'], [
            'stats' => [23, 12, 21, 18, 15, 17, 14, 5],
            'saves' => [
                'DEX' => ['bonus' => 6],
                'CON' => ['bonus' => 10],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 8],
            ],
            'skills' => [
                'Deception'  => ['dc' => 8],
                'Perception' => ['dc' => 12],
                'Stealth'    => ['dc' => 6],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '30 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Acid'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 16. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '1/day'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Copper Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '10 (Natural Armor)';
        $monster->hit_dice         = 20;
        $monster->speed            = '40 ft / Climb 40 ft / Fly 80 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +8) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 + 8) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 20 ft, one target. (2D8 +8) Bludgeoning.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 21 DEX Save or take (2D6 +8) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Acid Breath</strong> The dragon exhales Acid as a Triple Action in a 90-foot line. Each creature in that area must make a DC 22 DEX Save, taking (14D8) Acid damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Slowing Breath</strong> The dragon exhales a gas as a Triple Action in a 90-foot cone. Each creature in that area must succeed on a DC 22 CON Save. On a Failed Save, the creature is Slowed 2 and Hampered 20. These effects last for 1 minute. The creature can repeat the Save at the end of each of its turns, ending the effect on itself with a Successful Save.</li>
        </ul>
    </dd>
    <dt>Change Shape</dt> <dd>
        <p>The dragon magically polymorphes into a humanoid or beast that has a Challenge Rating no higher than its own, or back into its true form. It reverts to its true form if it dies. Any equipment it is wearing or carrying is absorbed or borne by the new form (the dragon's choice)</p>
        <p>In a new form, the dragon retains its alignment, hit points, Hit Dice, ability to speak, proficiencies, and INT, WIS, CHA scores, as well as this Action. Its statistics and capabilities are otherwise replaced by those of the new form, except any class features of that form.</p>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon', 'Acid'], [
            'stats' => [27, 12, 25, 20, 17, 19, 21, 6],
            'saves' => [
                'DEX' => ['bonus' => 8],
                'CON' => ['bonus' => 14],
                'WIS' => ['bonus' => 10],
                'CHA' => ['bonus' => 11],
            ],
            'skills' => [
                'Deception'  => ['dc' => 11],
                'Perception' => ['dc' => 17],
                'Stealth'    => ['dc' => 8],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Acid'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 18. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '2/day'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Bronze Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 5;
        $monster->speed            = '30 ft / Fly 60 ft / Swim 30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +3) Piercing.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Lightning Breath</strong> The dragon exhales Lightning as a Triple Action in a 40-foot line. Each creature in that area must make a DC 12 DEX Save, taking (3D10) Electricity damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Repulsion Breath</strong> The dragon exhales a repulsion energy as a Triple Action in a 30-foot cone. Each creature in that area must succeed on a DC 12 STR Save. On a failed Save, the creature is pushed 30 feet away from the dragon.</li>
        </ul>
    </dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Electricity'], [
            'stats' => [17, 10, 15, 12, 11, 15, 2, 2],
            'saves' => [
                'DEX' => ['bonus' => 2],
                'CON' => ['bonus' => 4],
                'WIS' => ['bonus' => 2],
                'CHA' => ['bonus' => 4],
            ],
            'skills' => [
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 2],
            ],
            'feats'    => ['Blindsight' => ['meta' => '10 ft']],
            'features' => [
                'darkvision' => ['meta' => '60 feet'],
                'immunity'   => ['meta' => 'Electricity'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Bronze Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 15;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D10 +6) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 + 6) Slashing.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Lightning Breath</strong> The dragon exhales Lightning as a Triple Action in a 60-foot line. Each creature in that area must make a DC 15 DEX Save, taking (10D10) Electricity damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Repulsion Breath</strong> The dragon exhales a repulsion energy as a Triple Action in a 30-foot cone. Each creature in that area must succeed on a DC 15 STR Save. On a failed Save, the creature is pushed 40 feet away from the dragon.</li>
        </ul>
    </dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Electricity'], [
            'stats' => [21, 10, 19, 14, 13, 17, 8, 3],
            'saves' => [
                'DEX' => ['bonus' => 3],
                'CON' => ['bonus' => 7],
                'WIS' => ['bonus' => 4],
                'CHA' => ['bonus' => 6],
            ],
            'skills' => [
                'Insight'    => ['dc' => 4],
                'Perception' => ['dc' => 7],
                'Stealth'    => ['dc' => 3],
            ],
            'feats'    => ['Blindsight' => ['meta' => '30 ft']],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'immunity'     => ['meta' => 'Electricity'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Bronze Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '9 (Natural Armor)';
        $monster->hit_dice         = 18;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +7) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +7) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D8 +7) Bludgeoning.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 20 DEX Save or take (2D6 +7) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Lightning Breath</strong> The dragon exhales Lightning as a Triple Action in a 90-foot line. Each creature in that area must make a DC 15 DEX Save, taking (10D10) Electricity damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Repulsion Breath</strong> The dragon exhales a repulsion energy as a Triple Action in a 60-foot cone. Each creature in that area must succeed on a DC 15 STR Save. On a failed Save, the creature is pushed 40 feet away from the dragon.</li>
        </ul>
    </dd>
    <dt>Change Shape</dt> <dd>
        <p>The dragon magically polymorphes into a humanoid or beast that has a Challenge Rating no higher than its own, or back into its true form. It reverts to its true form if it dies. Any equipment it is wearing or carrying is absorbed or borne by the new form (the dragon's choice)</p>
        <p>In a new form, the dragon retains its alignment, hit points, Hit Dice, ability to speak, proficiencies, and INT, WIS, CHA scores, as well as this Action. Its statistics and capabilities are otherwise replaced by those of the new form, except any class features of that form.</p>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon', 'Electricity'], [
            'stats' => [25, 10, 23, 16, 15, 19, 15, 5],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'CON' => ['bonus' => 11],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 9],
            ],
            'skills' => [
                'Insight'    => ['dc' => 7],
                'Perception' => ['dc' => 12],
                'Stealth'    => ['dc' => 5],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '30 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Electricity'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 18. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '1/day'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Bronze Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '7';
        $monster->damage_reduction = '12 (Natural Armor)';
        $monster->hit_dice         = 24;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +9) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +9) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 20 ft, one target. (2D8 +9) Bludgeoning.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 24 DEX Save or take (2D6 +9) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Lightning Breath</strong> The dragon exhales Lightning as a Triple Action in a 120-foot line. Each creature in that area must make a DC 15 DEX Save, taking (10D10) Electricity damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Repulsion Breath</strong> The dragon exhales a repulsion energy as a Triple Action in a 90-foot cone. Each creature in that area must succeed on a DC 15 STR Save. On a failed Save, the creature is pushed 40 feet away from the dragon.</li>
        </ul>
    </dd>
    <dt>Change Shape</dt> <dd>
        <p>The dragon magically polymorphes into a humanoid or beast that has a Challenge Rating no higher than its own, or back into its true form. It reverts to its true form if it dies. Any equipment it is wearing or carrying is absorbed or borne by the new form (the dragon's choice)</p>
        <p>In a new form, the dragon retains its alignment, hit points, Hit Dice, ability to speak, proficiencies, and INT, WIS, CHA scores, as well as this Action. Its statistics and capabilities are otherwise replaced by those of the new form, except any class features of that form.</p>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon', 'Electricity'], [
            'stats' => [29, 10, 27, 18, 17, 21, 22, 6],
            'saves' => [
                'DEX' => ['bonus' => 7],
                'CON' => ['bonus' => 16],
                'WIS' => ['bonus' => 9],
                'CHA' => ['bonus' => 13],
            ],
            'skills' => [
                'Insight'    => ['dc' => 7],
                'Perception' => ['dc' => 12],
                'Stealth'    => ['dc' => 5],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Electricity'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 18. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '2/day'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Silver Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '30 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +4) Piercing.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Cold Breath</strong> The dragon exhales an icy blast as a Triple Action in a 15-foot cone. Each creature in that area must make a DC 13 CON Save, taking (4D8) Cold damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Paralyzing Breath</strong> The dragon exhales a paralyzing gas as a Triple Action in a 15-foot cone. Each creature in that area must succeed on a DC 13 CON Save or be Paralyzed for 1 minute. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</li>
        </ul>
    </dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Cold'], [
            'stats' => [19, 10, 17, 12, 11, 15, 2, 2],
            'saves' => [
                'DEX' => ['bonus' => 2],
                'CON' => ['bonus' => 5],
                'WIS' => ['bonus' => 2],
                'CHA' => ['bonus' => 4],
            ],
            'skills' => [
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 2],
            ],
            'feats'    => ['Blindsight' => ['meta' => '10 ft']],
            'features' => [
                'darkvision' => ['meta' => '60 feet'],
                'immunity'   => ['meta' => 'Cold'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Silver Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 16;
        $monster->speed            = '40 ft / Fly 80 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D10 +6) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +6) Slashing.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Cold Breath</strong> The dragon exhales an icy blast as a Triple Action in a 30-foot cone. Each creature in that area must make a DC 17 CON Save, taking (12D8) Cold damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Paralyzing Breath</strong> The dragon exhales a paralyzing gas as a Triple Action in a 30-foot cone. Each creature in that area must succeed on a DC 17 CON Save or be Paralyzed for 1 minute. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</li>
        </ul>
    </dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Cold'], [
            'stats' => [23, 10, 21, 14, 11, 19, 9, 4],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'CON' => ['bonus' => 9],
                'WIS' => ['bonus' => 8],
                'CHA' => ['bonus' => 8],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 6],
                'Lore'       => ['dc' => 6],
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 2],
            ],
            'feats'    => ['Blindsight' => ['meta' => '30 ft']],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'immunity'     => ['meta' => 'Cold'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Silver Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '9 (Natural Armor)';
        $monster->hit_dice         = 18;
        $monster->speed            = '40 ft / Fly 80 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +8) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +8) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D8 +8) Bludgeoning.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 21 DEX Save or take (2D6 +8) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Cold Breath</strong> The dragon exhales an icy blast as a Triple Action in a 60-foot cone. Each creature in that area must make a DC 20 CON Save, taking (13D8) Cold damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Paralyzing Breath</strong> The dragon exhales a paralyzing gas as a Triple Action in a 60-foot cone. Each creature in that area must succeed on a DC 20 CON Save or be Paralyzed for 1 minute. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</li>
        </ul>
    </dd>
    <dt>Change Shape</dt> <dd>
        <p>The dragon magically polymorphes into a humanoid or beast that has a Challenge Rating no higher than its own, or back into its true form. It reverts to its true form if it dies. Any equipment it is wearing or carrying is absorbed or borne by the new form (the dragon's choice)</p>
        <p>In a new form, the dragon retains its alignment, hit points, Hit Dice, ability to speak, proficiencies, and INT, WIS, CHA scores, as well as this Action. Its statistics and capabilities are otherwise replaced by those of the new form, except any class features of that form.</p>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon', 'Cold'], [
            'stats' => [27, 10, 25, 16, 13, 21, 16, 5],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'CON' => ['bonus' => 9],
                'WIS' => ['bonus' => 8],
                'CHA' => ['bonus' => 8],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 6],
                'Lore'       => ['dc' => 6],
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 2],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '30 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Cold'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 18. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '1/day'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Silver Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '7';
        $monster->damage_reduction = '12 (Natural Armor)';
        $monster->hit_dice         = 25;
        $monster->speed            = '40 ft / Fly 80 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +10) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +10) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 20 ft, one target. (2D8 +10) Bludgeoning.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 21 DEX Save or take (2D6 +8) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Cold Breath</strong> The dragon exhales an icy blast as a Triple Action in a 90-foot cone. Each creature in that area must make a DC 24 CON Save, taking (15D8) Cold damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Paralyzing Breath</strong> The dragon exhales a paralyzing gas as a Triple Action in a 90-foot cone. Each creature in that area must succeed on a DC 24 CON Save or be Paralyzed for 1 minute. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</li>
        </ul>
    </dd>
    <dt>Change Shape</dt> <dd>
        <p>The dragon magically polymorphes into a humanoid or beast that has a Challenge Rating no higher than its own, or back into its true form. It reverts to its true form if it dies. Any equipment it is wearing or carrying is absorbed or borne by the new form (the dragon's choice)</p>
        <p>In a new form, the dragon retains its alignment, hit points, Hit Dice, ability to speak, proficiencies, and INT, WIS, CHA scores, as well as this Action. Its statistics and capabilities are otherwise replaced by those of the new form, except any class features of that form.</p>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon', 'Cold'], [
            'stats' => [30, 10, 29, 18, 15, 23, 23, 6],
            'saves' => [
                'DEX' => ['bonus' => 7],
                'CON' => ['bonus' => 16],
                'WIS' => ['bonus' => 9],
                'CHA' => ['bonus' => 13],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 11],
                'Lore'       => ['dc' => 11],
                'Perception' => ['dc' => 16],
                'Stealth'    => ['dc' => 7],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Cold'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 18. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '3/day'],
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Gold Dragon, Wyrmling';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 8;
        $monster->speed            = '30 ft / Fly 60 ft / Swim 30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +4) Piercing.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Fire Breath</strong> The dragon exhales Fire as a Triple Action in a 15-foot cone. Each creature in that area must make a DC 13 DEX Save, taking (4D10) Fire damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Weakening Breath</strong> The dragon exhales a paralyzing gas as a Triple Action in a 15-foot cone. Each creature in that area must succeed on a DC 13 STR Save or be Enfeebled 5 for 1 minute. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a Success.</li>
        </ul>
    </dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Fire'], [
            'stats' => [19, 14, 17, 14, 11, 16, 3, 2],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'CON' => ['bonus' => 5],
                'WIS' => ['bonus' => 2],
                'CHA' => ['bonus' => 5],
            ],
            'skills' => [
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 4],
            ],
            'feats'    => ['Blindsight' => ['meta' => '10 ft']],
            'features' => [
                'darkvision' => ['meta' => '60 feet'],
                'immunity'   => ['meta' => 'Fire'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Gold Dragon, Young';
        $monster->size             = 'Large';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 17;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +6) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +6) Slashing.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Fire Breath</strong> The dragon exhales Fire as a Triple Action in a 30-foot cone. Each creature in that area must make a DC 17 DEX Save, taking (10D10) Fire damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Weakening Breath</strong> The dragon exhales a paralyzing gas as a Triple Action in a 30-foot cone. Each creature in that area must succeed on a DC 17 STR Save or be Enfeebled 7 for 1 minute. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a Success.</li>
        </ul>
    </dd>
</dl>';
        $helper->saveMonster($monster, ['Dragon', 'Fire'], [
            'stats' => [23, 14, 21, 16, 13, 20, 10, 4],
            'saves' => [
                'DEX' => ['bonus' => 6],
                'CON' => ['bonus' => 9],
                'WIS' => ['bonus' => 5],
                'CHA' => ['bonus' => 8],
            ],
            'skills' => [
                'Diplomacy'  => ['dc' => 9],
                'Insight'    => ['dc' => 5],
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 6],
            ],
            'feats'    => ['Blindsight' => ['meta' => '30 ft']],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'immunity'     => ['meta' => 'Fire'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Gold Dragon, Adult';
        $monster->size             = 'Huge';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 19;
        $monster->speed            = '40 ft / Fly 80 ft / Swim 40 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D10 +8) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +8) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D8 +8) Bludgeoning.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 22 DEX Save or take (2D6 +8) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Fire Breath</strong> The dragon exhales Fire as a Triple Action in a 60-foot cone. Each creature in that area must make a DC 24 DEX Save, taking (13D10) Fire damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Weakening Breath</strong> The dragon exhales a paralyzing gas as a Triple Action in a 60-foot cone. Each creature in that area must succeed on a DC 24 STR Save or be Enfeebled 9 for 1 minute. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a Success.</li>
        </ul>
    </dd>
    <dt>Change Shape</dt> <dd>
        <p>The dragon magically polymorphs into a humanoid or beast that has a Challenge Rating no higher than its own, or back into its true form. It reverts to its true form if it dies. Any equipment it is wearing or carrying is absorbed or borne by the new form (the dragon's choice)</p>
        <p>In a new form, the dragon retains its alignment, hit points, Hit Dice, ability to speak, proficiencies, and INT, WIS, CHA scores, as well as this Action. Its statistics and capabilities are otherwise replaced by those of the new form, except any class features of that form.</p>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon', 'Fire'], [
            'stats' => [27, 14, 25, 16, 15, 24, 17, 6],
            'saves' => [
                'DEX' => ['bonus' => 8],
                'CON' => ['bonus' => 13],
                'WIS' => ['bonus' => 8],
                'CHA' => ['bonus' => 13],
            ],
            'skills' => [
                'Diplomacy'  => ['dc' => 13],
                'Insight'    => ['dc' => 8],
                'Perception' => ['dc' => 14],
                'Stealth'    => ['dc' => 8],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Fire'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 21. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '1/day'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Gold Dragon, Ancient';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '10 (Natural Armor)';
        $monster->hit_dice         = 26;
        $monster->speed            = '40 ft / Fly 80 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (2D10 +10) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +10) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 20 ft, one target. (2D8 +10) Bludgeoning.</dd>
    <dt>Wing Buffet</dt> <dd>The dragon beats its wings as an Action. Each creature within 10 ft. of the dragon must succeed on a DC 21 DEX Save or take (2D6 +8) Bludgeoning damage and be knocked prone. The dragon can then fly up to half its flying speed.</dd>
    <dt>Breath Weapon (Recharge 5-6)</dt> <dd>
        <ul>
            <li><strong>Fire Breath</strong> The dragon exhales Fire as a Triple Action in a 90-foot cone. Each creature in that area must make a DC 24 DEX Save, taking (13D10) Fire damage on a Failed Save, or half as much damage on a Successful one.</li>
            <li><strong>Weakening Breath</strong> The dragon exhales a paralyzing gas as a Triple Action in a 90-foot cone. Each creature in that area must succeed on a DC 24 STR Save or be Enfeebled 12 for 1 minute. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a Success.</li>
        </ul>
    </dd>
    <dt>Change Shape</dt> <dd>
        <p>The dragon magically polymorphes into a humanoid or beast that has a Challenge Rating no higher than its own, or back into its true form. It reverts to its true form if it dies. Any equipment it is wearing or carrying is absorbed or borne by the new form (the dragon's choice)</p>
        <p>In a new form, the dragon retains its alignment, hit points, Hit Dice, ability to speak, proficiencies, and INT, WIS, CHA scores, as well as this Action. Its statistics and capabilities are otherwise replaced by those of the new form, except any class features of that form.</p>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon', 'Fire'], [
            'stats' => [30, 14, 29, 18, 17, 28, 24, 6],
            'saves' => [
                'DEX' => ['bonus' => 9],
                'CON' => ['bonus' => 16],
                'WIS' => ['bonus' => 10],
                'CHA' => ['bonus' => 16],
            ],
            'skills' => [
                'Diplomacy'  => ['dc' => 9],
                'Insight'    => ['dc' => 5],
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 6],
            ],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
                'Melee Mastery', 'Extra Melee Action',
            ],
            'features' => [
                'darkvision'           => ['meta' => '120 feet'],
                'immunity'             => ['meta' => 'Fire'],
                'frightful_presence'   => ['meta' => 'Range: 120 ft. DC: 18. Duration: 1 minute'],
                'multi_attack'         => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '3/day'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Dragon Turtle';
        $monster->size             = 'Gargantuan';
        $monster->alignment        = 'N';
        $monster->armor_class      = '7';
        $monster->damage_reduction = '10 (Natural Armor)';
        $monster->hit_dice         = 22;
        $monster->speed            = '20 ft / Swim 40 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (3D12 +7) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D8 +7) Slashing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (3D12 +7) Bludgeoning. If the target is a creature, it must Succeed on a DC 20 STR Save or be pushed up to 10 feet away from the Dragon Turtle and Knocked Prone</dd>
    <dt>Steam Weapon (Recharge 5-6)</dt> <dd>The Dragon Turtle exhales scalding steam in a 60-foot cone. Each creature in that area must make a DC 18 CON Save taking (15D6) Fire damage on a Failed Save or half as much damage on a Successful one. Being underwater doesn't grant Resistance against this damage.</dd>
</dl>";
        $helper->saveMonster($monster, ['Dragon'], [
            'stats' => [25, 10, 20, 10, 12, 12, 17, 6],
            'saves' => [
                'DEX' => ['bonus' => 9],
                'CON' => ['bonus' => 11],
                'WIS' => ['bonus' => 7],
            ],
            'features' => [
                'darkvision'   => ['meta' => '120 feet'],
                'resistance'   => ['meta' => 'Fire'],
                'multi_attack' => ['meta' => 'If the dragon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dragon can only gain this additional Action once per turn.'],
                'amphibious',
            ],
            'languages' => ['Auld Wyrmish', 'Aquan'],
        ]);
    }
}
