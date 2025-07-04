<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassFrenziedBerserkerSeeder extends Seeder
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
        $class->name          = 'Frenzied Berserker';
        $class->key_attribute = 'STR';
        $class->requirements  = $helper->getClassRequirementsString([
            'Alignment' => 'Any nonlawful',
            'Feats'     => 'Power Attack, Cleave, 3 Rage feats',
            'Regional'  => 'You must be from a tribe or culture that supports and trains Frenzied Berserkers',
        ]);
        $class->max_level = 10;

        $helper->saveClass($class, [
            'hit_dice'       => 12,
            'skill_progress' => 2,
        ], ['STR', 'CON'], [
            'Rage',
        ]);

        $feature               = new Feature;
        $feature->key          = 'frenzy';
        $feature->name         = 'Frenzy';
        $feature->requirements = "You can't be fatigued, wearing heavy armor, or wielding a ranged weapon";
        $feature->description  = "<p>You can enter a Frenzy during combat. While Frenzied, you gain the following benefits.</p>
<ul>
    <li>+4 bonus to STR</li>
    <li>-3 penalty to AC</li>
    <li>Take 2 points of nonlethal damage per round</li>
    <li>You gain the Frenzied Blow Talent</li>
    <l>You can't use Actions that have the Concentrate trait unless they also have the Rage trait. The Seek basic action gains the Rage trait while you’re raging.</li>
    <li>While you are in a Frenzy, you may ignore up to 2 levels of Exhaustion until your Frenzy ends.</li>
</ul>
<p>A Frenzy lasts for 10 rounds. To end the Frenzy before its duration expires, you may attempt a DC 20 WIS Save once per round as an Action. Success ends the Frenzy immediately; failure means it continues. The effects of Frenzy stack with those from any Rage ability you may have.</p>
<p>During a Frenzy, you must attack in melee those you perceive as foes to the best of your ability. Should you run out of enemies before your Frenzy expires, your rampage continues. You must then attack the nearest creature (determine randomly if several potential foes are equidistant) and fight that opponent without regard to friendship, innocence, or health (the target's or your own).</p>
<p>When a Frenzy ends, you gain 1 level of Exhaustion. If a Frenzy ends but you are still in the middle of a Rage, the Exhaustion is delayed until the end of the Rage. While you are both in a Frenzy and in a Rage, your Exhaustion level is reduced by 1 for as long as both are in effect.</p>
<p>You may use Frenzy once. You regain all your uses of Frenzy after taking a Long Rest or 1 use of Frenzy after taking a Short Rest.</p>";
        $helper->saveFeature($feature, ['Emotion', 'Mental', 'Rage']);

        $helper->addFeaturesToClass($class, [
            'class_group_feat' => [3, 4, 5, 6, 7, 8, 9, 10],
            'frenzy'           => [1],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'idx' => 1, 'meta' => 'Die Hard']);
        $class->features()->save(app()->features['feat'], ['level' => 2, 'idx' => 2, 'meta' => 'Supreme Cleave']);
        $class->features()->save(app()->features['talent'], ['level' => 5, 'meta' => 'Improved Power Attack']);
        $class->features()->save(app()->features['feat'], ['level' => 10, 'idx' => 3, 'meta' => 'Supreme Power Attack']);

        $feat              = new Feat;
        $feat->name        = 'Extra Frenzy';
        $feat->description = '<p>You may Frenzy an additional time.</p>';
        $helper->addTypesToFeat($feat, ['Rage']);
        $feat->features()->save(app()->features['frenzy']);

        $feat              = new Feat;
        $feat->name        = 'Deathless Frenzy';
        $feat->description = '<p>You can scorn death and unconsciousness while in a frenzy.</p>
<p>As long as your frenzy continues, you are not treated as disabled at 0 Hit Points, and you can continue to act even if you have the Dying condition. Even if you reach the final Dying state, you can continue to fight normally until your Frenzy ends. At that point, you immediately suffer all the effects of the Dying state if you are still suffering from that condition.</p>
<p>This ability does not prevent death from massive damage or from spells such as Slay Living or Disintegrate.</p>';
        $helper->addTypesToFeat($feat, ['Rage']);
        $feat->parent_feats()->save(app()->feats['Extra Frenzy']);
        $feat->parent_feats()->save(app()->feats['Die Hard']);
        $feat->features()->save(app()->features['frenzy']);

        $feat              = new Feat;
        $feat->name        = 'Greater Frenzy';
        $feat->description = '<p>Your Frenzy becomes more powerful.</p>
<ul>
    <li>Your bonus to STR during a Frenzy becomes +6 instead of +4.</li>
    <li>You gain a +3 bonus to your WIS Save to end your Frenzy early.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Rage']);
        $feat->parent_feats()->save(app()->feats['Extra Frenzy']);
        $feat->features()->save(app()->features['frenzy']);

        $feat              = new Feat;
        $feat->name        = 'Tireless Frenzy';
        $feat->description = '<p>At the end of a Frenzy, you do not gain a level of Exhaustion if you already have any levels of Exhaustion.</p>';
        $helper->addTypesToFeat($feat, ['Rage']);
        $feat->parent_feats()->save(app()->feats['Greater Frenzy']);
        $feat->features()->save(app()->features['frenzy']);

        $helper->addFeatsToClass($class, [
            'Extra Frenzy'     => 1,
            'Deathless Frenzy' => 7,
            'Greater Frenzy'   => 7,
            'Tireless Frenzy'  => 10,
        ]);
    }
}
