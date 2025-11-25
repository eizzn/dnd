<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use Illuminate\Database\Seeder;

class ClassSwashbucklerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper = app()->seedHelper;

        $class                = new Klass;
        $class->name          = 'Swashbuckler';
        $class->type          = 'Base';
        $class->key_attribute = 'STR or DEX';
        $class->weapons       = 'Simple Weapons, Rapiers, Short Swords, Scimitars, and Hand Crossbows';
        $class->armors        = 'Light Armor and Bucklers';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 4,
        ], ['STR', 'DEX'], [
            'Panache', 'Heroic Surge', 'Combat Mastery',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Acrobatics', 'Athletics', 'Intimidation', 'Language', 'Society']);

        $feature              = new Feature;
        $feature->key         = 'panache';
        $feature->name        = 'Panache';
        $feature->description = "<p>You care much about the way you accomplish something as whether you actually accomplish it in the first place.</p>
<p>When you perform an Action with particular bravado, you can leverage this moment of verve to perform spectacular, deadly maneuvers. This state of flair is called Panache, and you are either in a state of Panache or you are not.</p>
<p>You gain Panache by successfully performing the skill check associated with specific Actions that have a bit of flair, including Tumble Through and additional Actions determined by your Swashbuckler's Style feats. After succeeding at a check to perform a particularly daring Action, such as swinging on a chandelier or sliding down a drapery, you also gain Panache if your result is high enough (typically the very hard DC for your level).</p>
<p>While you have Panache, you gain a +5-foot bonus to your Speeds and gain a +1 circumstance bonus to checks to Tumble Through or to take any Actions that give you Panache due to your Styles.</p>
<p>The Precise Strike class feature also causes you to deal extra Precision damage while you have Panache. Powerful finisher Actions, cause you to lose your Panache.</p>
<p>You strike with flair. When you have Panache and you Strike with an Agile or Finesse melee weapon or Agile or Finesse Unarmed Attack, you deal 2 additional Precision damage. If the Strike is part of a Finisher, the additional damage is 2D6 Precision damage instead.</p>
<p>Normally, you gain and use Panache only in combat encounters; when an encounter ends, you lose Panache.</p>";
        $helper->saveFeature($feature, ['Panache']);

        $feature              = new Feature;
        $feature->key         = 'improved_panache';
        $feature->name        = 'Improved Panache';
        $feature->description = '<p>You gain more options on how you can use your Panache.</p>
<ul>
    <li>You can choose to lose Panache and gain the benefits of a Heroic Surge as a Free Action.</li>
    <li>You can choose to lose Panache to gain the benefits of the Evasion Feat. If you have the Evasion Feat, then you gain the benefits of the Improved Evasion Feat instead.</li>
    <li>If an opponent attempts to make a Melee Strike against you and Critically Fails the attack roll, you may lose Panache and make an Attack of Opportunity against them.</li>
    <li>If you make an Attack of Opportunity against an opponent, and you have the Improved Disarm feat, you may lose Panache and make a Disarm attempt against the opponent. Treat this attack as if you had spent a Heroic Surge.</li>
    <li>If you make an Attack of Opportunity against an opponent, and you have the Improved Trip feat, you may lose Panache and make a Trip attempt against the opponent. Treat this attack as if you had spent a Heroic Surge.</li>
    <li>Whenever you use a Heroic Surge, you deal an addition +3 damage on all attacks until the beginning of your next turn.</li>
</ul>';
        $helper->saveFeature($feature, ['Panache', 'Heroic Surge', 'Attack of Opportunity']);

        $helper->addFeaturesToClass($class, [
            'combat_mastery'   => [5, 10],
            'class_group_feat' => [3, 6, 9, 13, 15, 18],
            'heroic_surge'     => [4, 8, 12, 16, 20],
            'panache'          => [2],
            'improved_panache' => [7],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'meta' => 'Weapon Finesse']);
        $class->features()->save(app()->features['talent'], ['level' => 2, 'meta' => 'Improved Reaction']);

        $feat              = new Feat;
        $feat->name        = 'Battledancer Panache';
        $feat->description = "<p>To you, a fight is a kind of performance art, and you command your foes' attention with mesmerizing motions.</p>
<ul>
    <li>You gain a +2 bonus on Performance checks</li>
    <li>You gain Panache during an encounter when the result of your Performance check to Perform exceeds the WIS DC of an observing foe, even if the foe isn't fascinated.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Panache']);

        $feat              = new Feat;
        $feat->name        = 'Braggart Panache';
        $feat->description = '<p>You boast, taunt, and psychologically needle your foes.</p>
<ul>
    <li>You gain a +2 bonus on Intimidation checks</li>
    <li>You gain Panache during an encounter whenever you successfully Demoralize a foe.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Panache']);

        $feat              = new Feat;
        $feat->name        = 'Fencer Panache';
        $feat->description = '<p>You move carefully, feinting and creating false openings to lead your foes into inopportune attacks.</p>
<ul>
    <li>You gain a +2 bonus on Deception checks when Feinting</li>
    <li>You gain Panache during an encounter whenever you successfully Feint or create a diversion against a foe.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Panache']);

        $feat              = new Feat;
        $feat->name        = 'Gymnast Panache';
        $feat->description = '<p>You reposition, maneuver, and bewilder your foes with daring feats of physically prowess.</p>
<ul>
    <li>You gain a +2 bonus on Athletics checks.</li>
    <li>You gain Panache during an encounter whenever you successfully Grapple, Shove, or Trip a foe.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Panache']);

        $feat              = new Feat;
        $feat->name        = 'Wit Panache';
        $feat->description = '<p>You are friendly, clever, and full of humor, always knowing just what to say in any situation. Your witticisms leave foes unprepared for the skill and speed of your attacks.</p>
<ul>
    <li>You gain a +2 bonus on Diplomacy checks</li>
    <li>You gain Panache during an encounter whenever you succeed at a Bon Mot against a foe.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Panache']);

        $feat              = new Feat;
        $feat->name        = 'Precise Strike';
        $feat->requirement = 'You must have the Precise Strike Class Feature';
        $feat->description = '<p>The damage for Precise Strike Class Feature increases by +1D6.</p>
<p>You may take this feat multiple times, at most, every four levels.</p>';
        $helper->addTypesToFeat($feat, ['Precision']);

        $helper->addFeatsToClass($class, [
            'Battledancer Panache' => 2,
            'Braggart Panache'     => 2,
            'Fencer Panache'       => 2,
            'Gymnast Panache'      => 2,
            'Wit Panache'          => 2,

            'Improved Feint'   => 2,
            'Improved Disarm'  => 2,
            'Improved Trip'    => 2,
            'Whirlwind Strike' => 10,

            'Evasion'          => 8,
            'Improved Evasion' => 14,

            'Intelligent Strike' => 2,
            'Sudden Strike'      => 5,
            'Precise Strike'     => 5,

            'Bleeding Strike'            => 7,
            'Debilitating Strike'        => 9,
            'Double Debilitating Strike' => 15,
            'Master Strike'              => 19,

            'Weapon Focus'                => 4,
            'Weapon Specialization'       => 6,
        ]);
    }
}
