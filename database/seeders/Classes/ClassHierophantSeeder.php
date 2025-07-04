<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use Illuminate\Database\Seeder;

class ClassHierophantSeeder extends Seeder
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
        $class->name          = 'Hierophant';
        $class->key_attribute = 'WIS';
        $class->max_level     = 5;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills' => '15 ranks in Religion',
            'Feats'  => 'Any Metamagic feat',
            'Spells' => 'Ability to cast 7th-level Divine or Primal spells',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_progress' => 3,
            'has_spells'     => true,
        ], ['WIS', 'CHA'], [
            'Divine', 'Primal',
        ]);

        $feature              = new Feature;
        $feature->key         = 'high_divinity';
        $feature->name        = 'High Divinity';
        $feature->description = '<p>You gain a special ability of your choice from among the following</p>
<dl>
    <dt>Blast Infidel</dt> <dd>
        <p>You can use negative energy spells to their maximum effect on creatures with an alignment opposed to you (See table below). Any spell with a description that involves inflicting or channeling negative energy cast on a creature of the opposed alignment works as if under the effect of a Maximize Spell feat. Undead affected by this ability heal the maximum amount of damage.
        <table>
            <tbody>
                <tr>
                    <td>Lawful Good</td>
                    <td>Chaotic Evil</td>
                </tr>
                <tr>
                    <td>Neutral Good</td>
                    <td>Neutral Evil</td>
                </tr>
                <tr>
                    <td>Chaotic Good</td>
                    <td>Lawful Evil</td>
                </tr>
                <tr>
                    <td>Lawful Neutral</td>
                    <td>Chaotic Neutral</td>
                </tr>
                <tr>
                    <td>Neutral</td>
                    <td>Cannot take this ability</td>
                </tr>
            </tbody>
        </table>
    </dd>
    <dt>Divine Reach</dt> <dd>
        <p>You can use touch spells on targets up to 30 feet away.</p>
        <p>You can take this ability a second time. If you do, the range increases to 60 feet.</p>
    </dd>
    <dt>Faith Healing</dt> <dd>You can use healing to their maximum effect on creatures of your faith, including yourself (worship the same power). Any spell with the Healing type works as if cast with the Maximize Spell feat.</dd>
    <dt>Gift of the Divine</dt> <dd>
        <p>You are able to grant a use of one of the following class features. The transfer lasts anywhere between 24 hours to one week (chosen at the time of transfer), and while the transfer is in effect, the number of uses you have is reduced by the number transfered. The recipient uses the ability at your level (including any modifying feats), but uses their ability score modifiers where needed. You remain responsible to your god for how the recipient uses your transfered ability.</p>
        <ul>
            <li>Channel Divinity</li>
            <li>Wild Shape</li>
        </ul>
    </dd>
    <dt>Master of Energy</dt> <dd>You gain a +5 bonus to all your Channel Divinity checks.</dd>
    <dt>Metamagic Feat</dt> <dd>You gain a new Metamagic feat. You may take this ability as many times as you wish.</dd>
    <dt>Spell Power</dt> <dd>Increase the DC of all your divine spells by +1</dd>
    <dt>Spell-Like Ability</dt> <dd>
        <p>You can use one of your divine spell slots to permanently prepare one of your divine spells as a spell-like ability that can be used twice per day. The spell-like ability does not use any components when casting the spell, although a spell that has an expensive material component cannot be selected for this ability.</p>
        <p>The spell-like ability normally uses a spell slot of the spell’s level, although you can choose to make a spell modified by a metamagic feat into a spell-like ability at the appropriate spell level.</p>
        <p>You may use an available higher-level spell slot in order to use the spell-like ability more often. Using a slot three levels higher than the chosen spell allows her to use the spell-like ability four times per day, and a slot six levels higher lets her use it six times per day.</p>
        <p>If spell-like ability is selected more than one time, this ability can apply to the same spell chosen the first time (increasing the number of times per day it can be used) or to a different spell.</p>
    </dd>
</dl>';
        $helper->saveFeature($feature);

        $helper->addFeaturesToClass($class, [
            'divine_spellcasting_class' => [2, 4],
            'high_divinity'             => [1, 2, 3, 4, 5],
        ]);

        $features = app()->features;
        unset($features['high_divinity']);
        app()->features = $features;
    }
}
