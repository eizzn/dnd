<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassNemesisSeeder extends Seeder
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
        $class->name          = 'Illithid Hunter';
        $class->type          = 'Prestige';
        $class->key_attribute = 'CON or INT';
        $class->max_level     = 5;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills'           => '5 or more ranks in Concentration (Focus Mind)',
            'Power Manifester' => 'You must have at least 2 Power Points',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 10,
            'skill_progress' => 2,
        ], ['INT', 'WIS', 'CHA'], [
            'Psionic',
        ]);

        $feature              = new Feature;
        $feature->key         = 'illithid_defense';
        $feature->name        = 'Illithid Defense';
        $feature->description = '<p>You have trained to resist the Psionic Combat attacks of illithids.</p>
<p>Your Defensive Psionic Combat powers have an additional point of Damage Reduction against Psionic Combat attacks from illithids.</p>';
        $helper->saveFeature($feature, ['Psionic Combat']);

        $feature              = new Feature;
        $feature->key         = 'improved_illithid_defense';
        $feature->name        = 'Improved Illithid Defense';
        $feature->description = '<p>Whenever an illithid attacks you with a Psionic Combat Attack, if you were able to raise a Psionic Combat Defense, you deal the amount of Damage Reduction your defense prevented back at the attacking illithid. The attribute associated to the defensive power determines the attribute damage applied to the illithid.</p>';
        $helper->saveFeature($feature, ['Psionic Combat']);

        $helper->addFeaturesToClass($class, [
            'illithid_defense'          => [2],
            'improved_illithid_defense' => [4],
        ]);
        $class->features()->save(app()->features['favored_enemy'], ['level' => 1, 'meta' => '(Limited) Bonuses only apply vs Illithids and their variants']);
        $class->features()->save(app()->features['talent'], ['level' => 1, 'meta' => 'Psionic Combat Power (Defensive Only)']);
        $class->features()->save(app()->features['feat'], ['level' => 3, 'meta' => 'Improved Favored Enemy (Must choose Illithids)']);
        $class->features()->save(app()->features['feat'], ['level' => 5, 'meta' => 'Greater Favored Enemy (Must choose Illithids)']);

        /**********************************************************************/

        // Giant Slayer
        $class                = new Klass;
        $class->name          = 'Giant Slayer';
        $class->type          = 'Prestige';
        $class->key_attribute = 'CON or INT';
        $class->max_level     = 5;
        $class->requirements  = $helper->getClassRequirementsString([

        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 10,
            'skill_progress' => 2,
        ], ['INT', 'WIS', 'CHA'], [
            'Giant',
        ]);

        $feature              = new Feature;
        $feature->key         = 'giant_fighter';
        $feature->name        = 'Giant Fighter';
        $feature->description = '<ul>
    <li>You gain a +5 bonus to all Skill checks concerning Giants.</li>
    <li>You gain a +3 Dodge bonus vs Giants, as long as you are size Medium or smaller.</li>
</ul>';
        $helper->saveFeature($feature, ['Giant']);

        $feature              = new Feature;
        $feature->key         = 'improved_giant_fighter';
        $feature->name        = 'Improved Giant Fighter';
        $feature->description = '<ul>
    <li>When you use a 2-handed Melee weapon against a Giant, add an additional Weapon Die of damage.</li>
    <li>Once per day, you may cast the spell Fell the Greatest Foe.</li>
</ul>';
        $helper->saveFeature($feature, ['Giant']);

        $helper->addFeaturesToClass($class, [
            'giant_fighter'          => [2],
            'improved_giant_fighter' => [4],
        ]);
        $class->features()->save(app()->features['favored_enemy'], ['level' => 1, 'meta' => '(Limited) Bonuses only apply vs Giants']);
        $class->features()->save(app()->features['feat'], ['level' => 3, 'meta' => 'Improved Enemy']);
        $class->features()->save(app()->features['feat'], ['level' => 5, 'meta' => 'Greater Enemy']);

        /**********************************************************************/

        // Horde Breaker
        $class                = new Klass;
        $class->name          = 'Horde Breaker';
        $class->type          = 'Prestige';
        $class->key_attribute = 'CON';
        $class->max_level     = 5;
        $class->requirements  = $helper->getClassRequirementsString([
            'feats' => 'Improved Reaction',
            'armor' => 'Proficiency with Medium Armor',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 10,
            'skill_progress' => 2,
        ], ['INT', 'WIS', 'CHA']);

        $class->features()->save(app()->features['feat'], ['level' => 1, 'meta' => 'Defensive Stance']);
        $class->features()->save(app()->features['feat'], ['level' => 2, 'idx' => 1, 'meta' => 'Sentinel']);
        $class->features()->save(app()->features['feat'], ['level' => 2, 'idx' => 2, 'meta' => 'Your choice of either Strong Defense or Tough Defense']);
        $class->features()->save(app()->features['favored_enemy'], ['level' => 3, 'meta' => 'Choose Horde: Bugbears, Gnolls, Goblins, Hobgoblins, Kobolds, Orcs, or other horde gathering creature']);
        $class->features()->save(app()->features['feat'], ['level' => 4, 'meta' => 'Improved Reaction']);
        $class->features()->save(app()->features['feat'], ['level' => 5, 'meta' => 'Improved Favored Enemy']);

        /**********************************************************************/

        $class                = new Klass;
        $class->name          = 'Serpent Slayer';
        $class->type          = 'Prestige';
        $class->key_attribute = 'CON, INT, or WIS';
        $class->max_level     = 5;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills' => '5 or more ranks in Concentration, 2 or more ranks in Nature, 4 or more ranks in Perception',
            'Feats'  => 'Combat Casting',
            'Spells' => 'Ability to cast 3rd level Arcane or Divine Spells',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_progress' => 2,
        ], ['CON', 'WIS']);

        $feature              = new Feature;
        $feature->key         = 'ward_serpents';
        $feature->name        = 'Ward Serpents';
        $feature->description = '<p>When you cast the following spells, it also affects Serpents.</p>
<ul>
    <li>Protection From Chaos</li>
    <li>Protection From Evil</li>
    <li>Protection From Good</li>
    <li>Protection From Law</li>
    <li>Circle of Protection From Chaos</li>
    <li>Circle of Protection From Evil</li>
    <li>Circle of Protection From Good</li>
    <li>Circle of Protection From Law</li>
</ul>';
        $helper->saveFeature($feature, ['Abjuration']);

        $helper->addFeaturesToClass($class, [
            'spellcasting_class' => [1, 2, 3, 4, 5],
            'ward_serpents'      => [5],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'meta' => 'Poison Resistance']);
        $class->features()->save(app()->features['favored_enemy'], ['level' => 2, 'meta' => '(Limited) Bonuses only apply vs Yuan-ti and their variants']);
        $class->features()->save(app()->features['feat'], ['level' => 3, 'meta' => 'Poison Immunity']);
        $class->features()->save(app()->features['feat'], ['level' => 4, 'meta' => 'Wild Talent']);

        /**********************************************************************/

        // Dragon Slayer
        $class                = new Klass;
        $class->name          = 'Dragon Slayer';
        $class->type          = 'Prestige';
        $class->key_attribute = 'CON or INT';
        $class->max_level     = 7;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills' => '4 or more ranks in Nature, 4 or more ranks in Arcana',
            'Feats'  => 'Power Attack, Improved Critical',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 10,
            'skill_progress' => 2,
        ], ['INT', 'WIS', 'CHA'], [
            'Dragon', 'Arcane',
        ]);

        $feature              = new Feature;
        $feature->key         = 'frightful_presence_resistance';
        $feature->name        = 'Frightful Presence Resistance';
        $feature->description = '<p>You are better able to resist the Frightful Presence of dragons.</p>
<p>You gain a +3 bonus on Saves vs the Frightful Presence of dragons.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'frightful_presence_immunity';
        $feature->name        = 'Frightful Presence Immunity';
        $feature->description = '<p>You are now immune to the Frightful Presence of dragons.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'breath_weapon_resistance';
        $feature->name        = 'Breath Weapon Resistance';
        $feature->description = '<p>You are skilled at avoiding Breath Weapons.</p>
<p>You gain a +3 bonus vs all Breath Weapons.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'hide_from_dragons';
        $feature->name        = 'Hide from Dragons';
        $feature->description = '<p>Once per week, you may cast the spell Hide from Dragons. You must supply the Material Components to cas the spell.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'breath_weapon_avoidance';
        $feature->name        = 'Breath Weapon Avoidance';
        $feature->description = '<p>Your skill at avoiding Breath Weapons increases.</p>
<ul>
    <li>When you Succeed at a Save vs Breath Weapon, treat it as a Critical Success</li>
    <li>When you Critically Fail a Save vs Breath Weapon, treat it as a Failure instead</li>
    <li>Once per day, you may cast the spell Fell the Greatest Foe</li>
</ul>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'dragon_nemesis';
        $feature->name        = 'Dragon Nemesis';
        $feature->description = '<p>When you use a 2-handed Melee weapon against a Dragon, add an additional Weapon Die of damage.</p>';
        $helper->saveFeature($feature);

        $helper->addFeaturesToClass($class, [
            'frightful_presence_resistance' => [1],
            'breath_weapon_resistance'      => [2],
            'hide_from_dragons'             => [3],
            'frightful_presence_immunity'   => [4],
            'breath_weapon_avoidance'       => [5],
            'dragon_nemesis'                => [7],
        ]);

        $class->features()->save(app()->features['favored_enemy'], ['level' => 1, 'meta' => '(Limited) Bonuses only apply vs Dragons']);
        $class->features()->save(app()->features['feat'], ['level' => 3, 'meta' => 'Improved Favored Enemy']);
        $class->features()->save(app()->features['feat'], ['level' => 6, 'meta' => 'Greater Favored Enemy']);

        $helper->addSpellsToClass($class, [
            1 => ['Detect Magic', 'Detect Snares and Pits', 'Light', 'Jump', 'Guided Arrow'],
            2 => ['Scale Weakening', 'Bane Bow', 'Cure Wounds', "Bull's Strength"],
            3 => ['Enlarge', 'Keen Edge', 'Swift Quiver'],
        ]);

        $helper->addSpellSlotsToClass($class, [
            1 => ['known' => 0],
            2 => ['known' => 2, 'one' => 1],
            3 => ['known' => 3, 'one' => 2],
            4 => ['known' => 4, 'one' => 2, 'two' => 1],
            5 => ['known' => 5, 'one' => 2, 'two' => 2],
            6 => ['known' => 6, 'one' => 2, 'two' => 2, 'three' => 1],
            7 => ['known' => 7, 'one' => 2, 'two' => 2, 'three' => 2],
        ]);

        $features = app()->features;
        unset($features['illithid_defense']);
        unset($features['improved_illithid_defense']);
        unset($features['ward_serpents']);
        unset($features['breath_weapon_resistance']);
        unset($features['hide_from_dragons']);
        unset($features['breath_weapon_avoidance']);
        unset($features['dragon_nemesis']);
        app()->features = $features;
    }
}
