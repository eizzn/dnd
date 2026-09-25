<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassAssassinSeeder extends Seeder
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
        $class->name          = 'Assassin';
        $class->type          = 'Prestige';
        $class->key_attribute = 'DEX or INT';
        $class->max_level     = 5;
        $class->requirements  = $helper->getClassRequirementsString([
            'Alignment' => 'Any non-good',
            'Feats'     => 'At least 2 Precision feats',
            'Skills'    => '8 or more ranks in Stealth, 4 or more ranks in Deception',
            'Special'   => 'Must kill someone for no reason or monetary gain',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_progress' => 3,
            'has_spells'     => true,
        ], ['DEX', 'INT'], [
            'Sneak Attack', 'Favored Enemy', 'Arcane',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Athletics', 'Concentration', 'Deception', 'Intimidation', 'Stealth', 'Thievery',
        ]);

        $feature              = new Feature;
        $feature->key         = 'stalked_enemy';
        $feature->name        = 'Stalked Enemy';
        $feature->description = '<p>You may spend 7 consecutive rounds studying a target. At the end, if you succeed a DC 12 Perception check against the target (add the targets WIS modifier to the DC), you gain the following benefits against that target.</p>
<ul>
    <li>+2 bonus to Hit and Damage.</li>
    <li>Your critical threat range against your Stalked Enemy increases by 1.</li>
    <li>+5 circumstance bonus to Perception checks when you Seek your Stalked Enemy.</li>
</ul>';
        $helper->saveFeature($feature, ['Favored Enemy', 'Precision']);

        $feature              = new Feature;
        $feature->key         = 'ranged_sudden_strike';
        $feature->name        = 'Ranged Sudden Strike';
        $feature->description = '<p>You can now add your Sudden Strike damage to ranged attacks within 30 feet.</p>';
        $helper->saveFeature($feature, ['Sudden Strike', 'Precision']);

        $feature              = new Feature;
        $feature->key         = 'studied_sudden_strike';
        $feature->name        = 'Studied Sudden Strike';
        $feature->description = "<p>You can observe a target so that you can deal extra damage against the target.</p>
<ul>
    <li>+2 bonus to Hit</li>
    <li>If you hit, consider the hit as a Critical Hit. If you rolled a Critical Hit, double the damage</li>
    <li>Any Precision roll results of 1 or 2 are treated as a 6</li>
    <li>The target suffers a -2 penalty to all Saves for the next 10 minutes against attacks you make</li>
<ul>
<p>You must successfully make a Concentration check opposed by the target's Perception (DC = target's level plus their ranks in Perception). Failure means the observation fails, and you lose one accumulated success. A Critical Failure means you lose two accumulated successes and the target becomes aware of your observation.</p>
<p>After completing 4 successes, the next attack you make against the target gains the bonuses mentioned. You must make the attack within 1 hour, otherwise you lose all benefits and must start over.</p>";
        $helper->saveFeature($feature, ['Sudden Strike', 'Precision']);

        $helper->addFeaturesToClass($class, [
            'stalked_enemy'         => [1],
            'class_group_feat'      => [2, 5],
            'sudden_strike'         => [1, 3, 5],
            'uncanny_dodge'         => [2],
            'ranged_sudden_strike'  => [2],
            'studied_sudden_strike' => [5],
        ]);
        $class->feats()->save(app()->feats['Craft Infusion'], [
            'level' => 1, 'meta' => 'You may only learn elixirs with the poison type',
        ]);

        $helper->addSpellsToClass($class, [
            1 => ['Camouflage', 'Combat Quickness', 'Disguise Self', 'Detect Poison', 'Exact Shot', 'Far Shot', 'Feather Fall',
                'Ghost Sound', 'Guided Path', 'Guided Shot', 'Hawkeye', "Hunter's Mark", 'Jump', 'Mimicry', 'Poison Spray',
                'Shadow Double', 'Silent Opening', 'Sleep', 'Swift Ready', 'True Strike', ],
            2 => ['Alter Self', 'Animate Weapon', "Cat's Grace", 'Conjure Weapon', 'Darkness', 'Fell the Greatest Foe', "Hunter's Eye",
                'Invisibility', 'Invisibility, Swift', 'Keen Edge', 'Protection From Poison', 'Quieting Weapons', 'Resist Poison',
                'Spider Climb', 'Undetectable Alignment', 'Water to Poison', 'Wraith Strike', ],
            3 => ["Assassin's Darkness", "Assassin's Eye", 'Clairvoyance', 'Ebon Ray of Doom', 'Know Vulnerabilities', 'Nondetection',
                'Poison', 'Shade Arrow', ],
        ]);

        $helper->addSpellSlotsToClass($class, [
            1 => ['known' => 3, 'one' => 1],
            2 => ['known' => 4, 'one' => 2],
            3 => ['known' => 5, 'one' => 2, 'two' => 1],
            4 => ['known' => 6, 'one' => 2, 'two' => 2],
            5 => ['known' => 7, 'one' => 2, 'two' => 2, 'three' => 1],
        ]);

        $helper->addFeatsToClass($class, [
            'Improved Enemy' => 3,
            'Greater Enemy'  => 5,

            'Improved Study Enemy' => 2,
            'Quick Study Enemy'    => 5,

            'Poison Resistance' => 1,
        ]);

        $features = app()->features;
        unset($features['ranged_sudden_strike']);
        unset($features['studied_sudden_strike']);
        app()->features = $features;
    }
}
