<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassRangerSeeder extends Seeder
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

        $class                = new Klass;
        $class->name          = 'Ranger';
        $class->type          = 'Base';
        $class->key_attribute = 'DEX or WIS';
        $class->weapons       = 'Simple Weapons, Martial Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Light Shields';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 8,
            'skill_progress' => 6,
            'has_spells'     => true,
        ], ['STR', 'DEX', 'CON'], [
            'Fighter Feat', 'Primal', 'Favored Enemy', 'Heroic Surge', 'Combat Mastery',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Animal Handling', 'Athletics', 'Concentration', 'Language', 'Medicine', 'Nature', 'Stealth', 'Survival',
        ]);
        $helper->addSpellSlotsToClass($class, [
            4  => ['known' => 6, 'one' => 3],
            5  => ['known' => 7, 'one' => 4],
            6  => ['known' => 8, 'one' => 4],
            7  => ['known' => 9, 'one' => 4, 'two' => 2],
            8  => ['known' => 10, 'one' => 5, 'two' => 3],
            9  => ['known' => 11, 'one' => 5, 'two' => 3],
            10 => ['known' => 12, 'one' => 5, 'two' => 3],
            11 => ['known' => 13, 'one' => 5, 'two' => 3, 'three' => 2],
            12 => ['known' => 14, 'one' => 5, 'two' => 3, 'three' => 3],
            13 => ['known' => 15, 'one' => 5, 'two' => 3, 'three' => 3],
            14 => ['known' => 16, 'one' => 5, 'two' => 3, 'three' => 3],
            15 => ['known' => 17, 'one' => 5, 'two' => 3, 'three' => 3, 'four' => 1],
            16 => ['known' => 18, 'one' => 5, 'two' => 3, 'three' => 3, 'four' => 2],
            17 => ['known' => 19, 'one' => 5, 'two' => 3, 'three' => 3, 'four' => 3],
            18 => ['known' => 20, 'one' => 5, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 1],
            19 => ['known' => 21, 'one' => 5, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 1],
            20 => ['known' => 22, 'one' => 5, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2],
        ]);
        $helper->addSpellsToClass($class, [
            1 => ['Accelerated Movement', 'Alarm', 'Animal Friendship', 'Beast Bond', 'Calm Animals', 'Camouflage', 'Combat Quickness',
                'Climb', 'Delay Poison', 'Detect Animals or Plants', 'Detect Magic', 'Detect Poison and Disease', 'Detect Snares and Pits',
                'Ease of Breath', 'Exact Shot', 'Far Shot', 'Fey Hunter', 'Foe Bane', 'Goodberry', 'Guided Arrow', 'Guided Shot',
                'Guiding Light', 'Hawkeye', 'Healthful Rest', 'Hide from Animals', 'Horrible Taste', "Hunter's Mark", "Impede Sun's Brilliance",
                'Jump', 'Leaf into Dagger', 'Locate Water', 'Longstrider', 'Magic Fang', "Nature's Favor", 'Naturewatch',
                'Negate Aroma', 'Radiant Mark', 'Remove Disease', 'Remove Scent', 'Resistance', 'Share Talents', 'Silvered Claws',
                'Silvered Weapon', 'Snare', 'Snow Boots', 'Snow Sight', 'Speak with Animals', "Troll's Bane", 'Weather Sense', ],
            2 => ['Animal Messenger', 'Animal Sense', 'Animate Weapon', 'Bane Bow', 'Barkskin', "Bear's Endurance", "Cat's Grace",
                'Cordon of Arrows', 'Cure Wounds', 'Darkvision', 'Easy Trail', 'Fell the Greatest Foe', 'Find Traps', 'Flame Arrows',
                'Heal Animal Companion', "Hunter's Eye", "Hunter's Haste", 'Lay of the Land', 'Leap Into Animal', "Nature's Rampart",
                "Owl's Wisdom", 'Pass Without Trace', 'Protection From Poison', 'Quieting Weapons', 'Restful Cloak', 'Resist Poison',
                'Scent', 'Snake Arm', 'Summon Animals', ],
            3 => ['Animal Form', 'Barrage', 'Enlarge', 'Entangle', 'Keen Edge', 'Know Vulnerabilities', 'Neutralize Poison',
                'Plant Growth', 'Safe Clearing', ],
            4 => ['Aerial Form', 'Arrow Storm', 'Dominate Animal', 'Land Womb', 'Shade Arrow', 'Speak with Plants', 'Stoneskin',
                'Swift Quiver', 'Summon Steed', 'Summon Woodland Beings', ],
            5 => ['Commune with Nature', "Hunter's Perfection", 'Steel Wind Strike', 'Summon Fey', 'Tree Stride', 'Volley',
                'Wrath of Nature', ],
        ]);

        $feature               = new Feature;
        $feature->key          = 'study_enemy';
        $feature->name         = 'Study Enemy';
        $feature->requirements = 'You can see and hear the target';
        $feature->description  = '<p>You may spend 7 consecutive rounds studying a target. At the end, if you succeed a DC 12 Perception check against the target (add the targets WIS modifier to the DC), then you gain the Favored Enemy bonuses against that target for the next 3 days (except for the languages). You may only have one Studied Enemy at a time.</p>';
        $helper->saveFeature($feature, ['Favored Enemy', 'Precision']);

        $helper->addFeaturesToClass($class, [
            'class_group_feat'    => [3, 4, 9, 13, 16, 19, 20],
            'wild_empathy'        => [1],
            'favored_terrain'     => [1],
            'favored_enemy'       => [2],
            'study_enemy'         => [3],
            'woodland_stride'     => [3],
            'combat_mastery'      => [7, 15],
            'trackless_step'      => [5],
            'heroic_surge'        => [6],
            'evasion'             => [7],
            'hide_in_plain_sight' => [10],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Favored Enemy';
        $feat->requirement = 'You must have the Favored Enemy Class Feature';
        $feat->description = '<p>You may select an additional Enemy.</p>
<p>You may take this feat multiple times.</p>';
        $helper->addTypesToFeat($feat, ['Favored Enemy', 'Precision']);

        $feat              = new Feat;
        $feat->name        = 'Favored Terrain';
        $feat->requirement = 'You must have the Favored Terrain Class Feature';
        $feat->description = '<p>You may select an additional Favored Terrain.</p>
<p>You may take this feat multiple times.</p>';
        $helper->addTypesToFeat($feat, ['Favored Terrain']);
        $feat->features()->save(app()->features['favored_terrain']);

        $feat              = new Feat;
        $feat->name        = 'Quick Study Enemy';
        $feat->requirement = 'You must have the Favored Enemy or Stalked Enemy Class Feature';
        $feat->description = '<p>Reduce the number of rounds you need to study your enemy by 3.</p>';
        $helper->addTypesToFeat($feat, ['Favored Enemy']);

        $feat              = new Feat;
        $feat->name        = 'Improved Study Enemy';
        $feat->requirement = 'You must have the Favored Enemy or Stalked Enemy Class Feature';
        $feat->description = '<p>You may now have 2 Targets at a time when you Study a Target.</p>';
        $helper->addTypesToFeat($feat, ['Favored Enemy']);

        $feat              = new Feat;
        $feat->name        = 'Improved Enemy';
        $feat->requirement = 'You must have the Favored Enemy or Stalked Enemy Class Feature';
        $feat->description = '<ul>
    <li>The bonus to Hit against your Enemy is now +3</li>
    <li>The bonus to your Critical Hit Threat Ranges against your Enemy is now +2</li>
    <li>If you score a Critical Hit against your Enemy, add 3 Additional Damage Dice instead.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Favored Enemy']);

        $feat              = new Feat;
        $feat->name        = 'Greater Enemy';
        $feat->description = '<ul>
    <li>The bonus to Hit against your Enemy is now +4</li>
    <li>The bonus to your Critical Hit Threat Ranges against your Enemy is now +3</li>
    <li>If you score a Critical Hit against your Enemy, add 5 Additional Damage Dice instead.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Favored Enemy']);
        $feat->parent_feats()->save(app()->feats['Improved Enemy']);

        $feat              = new Feat;
        $feat->name        = 'Divine Archer of Solonor';
        $feat->requirement = 'You must have Elven blood, have the Favored Enemy Class Feature, and Solonor Thelandira must be your Patron Deity';
        $feat->description = '<p>You are a member of the clergy of the Elven god Solonor Thelandira.</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>You may cast the spell Guiding Light by spending 1 Spell Point and an Action</li>
    <li>You may cast the True Strike spell by spending 1 Spell Point and an Action</li>
    <li>You gain the Weapon Focus Feat. You must choose Longbow or Shortbow (or Composite versions).</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Elf']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Purify Food and Drink', 'True Strike'],
            2 => ['Restoration'],
            3 => ['Dispel Magic'],
            4 => ['Land Womb', 'Ol`Iirtal`Eithun'],
            5 => ['Atonement', 'Ialyshae`Seldar`Wihylos', 'U`Aestar`Kess'],
            6 => ['Prismatic Bow'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Hunter of Malar';
        $feat->requirement = 'Malar must be your patron and you must have the Favored Enemy Class Feature';
        $feat->description = '<p>You are a worshiper of Malar. You gain the following.</p>
<ul>
    <li>You gain a +2 bonus to Sneak Skill Checks</li>
    <li>You gain an additional Favored Enemy</li>
    <li>You may gain a Displacer Beast as your Animal Companion by Sacrificing 2 Spell Points and a 3rd level Spell Slot</li>
</ul>';
        $helper->addTypesToFeat($feat);
        $helper->addSpellsToFeat($feat, [
            1 => ['Scent'],
            2 => ['Fey Form' => 'Worgs, Yeth Hounds, Chimera, Displacer Beast, or Manticore only', 'Blood Lust'],
            4 => ['Monstrous Regeneration'],
        ]);

        $helper->addFeatsToClass($class, [
            'Spell Pool'           => 1,
            'Improved Study Enemy' => 5,
            'Quick Study Enemy'    => 10,

            'Weapon Finesse'              => 2,
            'Sharpshooter'                => 7,
            'Two-Weapon Fighter'          => 1,
            'Improved Two-Weapon Fighter' => 6,
            'Greater Two-Weapon Fighter'  => 15,
            'Evasion'                     => 7,
            'Improved Evasion'            => 15,
            'Weapon Focus'                => 4,
            'Weapon Specialization'       => 6,

            'Favored Enemy'  => 5,
            'Improved Enemy' => 10,
            'Greater Enemy'  => 15,

            'Favored Terrain' => 4,

            'Peerless Archer'          => 9,
            'Improved Peerless Archer' => 13,
            'Greater Peerless Archer'  => 17,

            'Divine Archer of Solonor' => 2,
            'Hunter of Malar'          => 2,

            'Extra Melee Action'    => 6,
            'Extra Ranged Action'   => 5,
        ]);
    }
}
