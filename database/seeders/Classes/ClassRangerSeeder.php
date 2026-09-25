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
            'skill_points'   => 4,
            'skill_progress' => 4,
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
            'fighter_feat'         => [3, 4, 7, 9, 12, 14, 16, 18],
            'wild_empathy'         => [1],
            'favored_terrain'      => [1],
            'favored_enemy'        => [2],
            'ranger_devotion_feat' => [2],
            'study_enemy'          => [3],
            'woodland_stride'      => [3],
            'combat_mastery'       => [7, 15],
            'trackless_step'       => [5],
            'evasion'              => [5],
            'heroic_surge'         => [6],
            'hide_in_plain_sight'  => [10],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Favored Enemy';
        $feat->requirement = 'You must have the Favored Enemy Class Feature';
        $feat->description = '<ul>
    <li>You may select an additional Enemy.</li>
    <li>You gain a +1 bonus to Hit and Damage vs. your Favored Enemies.</li>
</ul>
<p>You may take this Feat multiple times.</p>';
        $helper->addTypesToFeat($feat, ['Favored Enemy', 'Precision', 'Generic' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Favored Terrain';
        $feat->requirement = 'You must have the Favored Terrain Class Feature';
        $feat->description = '<ul>
    <li>You may select an additional Favored Terrain.</li>
    <li>You gain a +2 bonus to your skill check bonus.</li>
</ul>
<p>You may take this Feat multiple times.</p>';
        $helper->addTypesToFeat($feat, ['Favored Terrain', 'Generic' => 4]);
        $feat->features()->save(app()->features['favored_terrain']);

        $feat              = new Feat;
        $feat->name        = 'Improved Study Enemy';
        $feat->requirement = 'You must have the Favored Enemy or Stalked Enemy Class Feature';
        $feat->description = '<ul>
    <li>You gain a Talent.</li>
    <li>You may now have 2 Targets at a time when you Study a Target.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Favored Enemy', 'Talent', 'Generic' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Quick Study Enemy';
        $feat->requirement = 'You must have the Favored Enemy or Stalked Enemy Class Feature';
        $feat->description = '<ul>
    <li>Increase your WIS by +1, to a maximum of 20.</li>
    <li>Reduce the number of rounds you need to study your enemy by 3.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Favored Enemy', 'Ability Boost', 'Generic' => 10]);
        $feat->parent_feats()->save(Feat::where('name', 'Improved Study Enemy')->first());

        $feat              = new Feat;
        $feat->name        = 'Improved Enemy';
        $feat->requirement = 'You must have the Favored Enemy or Stalked Enemy Class Feature';
        $feat->description = '<ul>
    <li>The bonus to Hit from your Favored Enemy feature increases from +1 to +2.</li>
    <li>Your critical threat range against your Enemy increases by 1.</li>
    <li>If you score a Critical Hit against your Enemy, add 2 Additional Damage Dice.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Favored Enemy', 'Generic' => 10]);

        $feat              = new Feat;
        $feat->name        = 'Greater Enemy';
        $feat->description = '<ul>
    <li>The bonus to Hit from your Favored Enemy feature increases to +3. This replaces the increase from Improved Enemy.</li>
    <li>Your critical threat range against your Enemy increases by 2. This replaces the increase from Improved Enemy.</li>
    <li>If you score a Critical Hit against your Enemy, add 4 Additional Damage Dice. This replaces the bonus from Improved Enemy.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Favored Enemy', 'Generic' => 15]);
        $feat->parent_feats()->save(app()->feats['Improved Enemy']);

        $feat              = new Feat;
        $feat->name        = 'Divine Archer of Solonor';
        $feat->requirement = 'You must have Elven blood, have the Favored Enemy Class Feature, and Solonor Thelandira must be your Patron Deity';
        $feat->description = '<p>You are a member of the clergy of the Elven god Solonor Thelandira.</p>
<ul>
    <li>You gain 1 Spell Point.</li>
    <li>You may cast the spell Guiding Light by spending 1 Spell Point and an Action</li>
    <li>You may cast the True Strike spell by spending 1 Spell Point and an Action</li>
    <li>You gain the Weapon Focus Feat with any Bow (Long Bow, Short Bow, Composite Long Bow, or Composite Short Bow).</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Elf', 'Spend Spell Point', 'Ranger Devotion']);
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
    <li>You gain a +2 bonus to Sneak Skill Checks.</li>
    <li>You gain an additional Favored Enemy.</li>
    <li>You may gain a Displacer Beast as your Animal Companion.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ranger Devotion']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Scent'],
            2 => ['Fey Form' => 'Worgs, Yeth Hounds, Chimera, Displacer Beast, or Manticore only', 'Blood Lust'],
            4 => ['Monstrous Regeneration'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Ranger of Apollo';
        $feat->requirement = 'Apollo must be your patron and you must have the Favored Enemy Class Feature and you must have chosen Undead';
        $feat->description = '<p>You are a worshiper of Apollo. You gain the following.</p>
<ul>
    <li>You gain the Weapon Focus Feat with any Bow (Long Bow, Short Bow, Composite Long Bow, or Composite Short Bow).</li>
    <li>You may cast the Light spell at will as a Double Action. If you cast Light on an arrow, you may cast it as part of the Action to nock the arrow. The light fades if you do not fire the arrow by the end of your next turn.</li>
    <li>You gain Resistance to Negative Damage.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Light', 'Ranger Devotion']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Flare', 'Guiding Light', 'Lantern Light'],
            2 => ['Flash', 'Sun Bolt'],
            3 => ['Daylight', 'Moon Blade'],
            4 => ['Aura of the Sun'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Ascetic Hunter';
        $feat->requirement = 'Silvanus must be your Patron deity and you must have the Favored Enemy Feat';
        $feat->description = '<p>You have trained your Ranger skills with the awakening mental abilities of a monk in the service of Silvanus.</p>
<ul>
    <li>You gain 1 Power Point.</li>
    <li>Due to your psionic abilities, your Animal Companion gains a +2 to INT and WIS.</li>
    <li>Due to your psionic abilities, you may communicate telepathically with your Animal Companion to a Range of 120 feet. This allows you to direct your Animal Companion as a Free Action.</li>
    <li>Your Animal Companion gains 1 Power Point, and it may use one of your 1st level Powers as a Double Action.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal', 'Discipline', 'Ranger Devotion']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Animate Wood'],
            2 => ['Forest Eyes', 'Forest Voice'],
            3 => ['Healing Tree'],
        ]);
        $helper->addPowersToFeat($feat, [
            1 => ['Awareness', 'Distract', 'Thicken Skin', 'Strength Blast', 'Vitality Blast', 'Wisdom Defense'],
            2 => ['Animal Sight', 'Body Equilibrium', 'Chameleon', 'Cloud Mind', 'Heal', 'Mental Augmentation', 'Physical Augmentation',
                'Simulate Skill', ],
            3 => ['Battlesense', 'Body Purification', 'Body Restoration', 'Combat Sense', 'Danger Sense', 'Haste'],
            4 => ['Fate of One', 'Energy Adaptation', 'Steadfast Perception'],
            5 => ['Adapt Body', 'Quivering Palm', 'Regeneration'],
        ]);
    }
}
