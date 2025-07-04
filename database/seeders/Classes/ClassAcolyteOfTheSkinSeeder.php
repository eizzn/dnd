<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassAcolyteOfTheSkinSeeder extends Seeder
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
        $class->name          = 'Acolyte of the Skin';
        $class->key_attribute = 'CHA';
        $class->requirements  = $helper->getClassRequirementsString([
            'Alignment' => 'Any non-good',
            'Skills'    => '7 or more ranks in Arcana',
            'Spells'    => 'Ability to cast 3rd level spells',
            'Special'   => 'Must have made peaceful contact with a summoned evil outsider',
            'Ritual'    => 'Must undergo the Ritual of Bonding',
        ]);
        $class->description = "<h3>Ritual of Bonding</h3>
<p>The Ritual of Bonding is a blasphemy that was long ago eradicated from most arcane libraries, but a few barely legible copies—or at least references thereto—survive along with promises of great power. Spellcasters who happen upon such documents can choose to destroy or ignore the find, but the temptation has already occurred. Those who give in can eventually stumble upon the complete ritual, usually through extended contact with one or more summoned fiends that are all too eager to share their terrible knowledge.</p>
<p>The Ritual of Bonding is painful and not to be undertaken lightly. The ritual requires 10 rounds from initiation to completion, and, once begun, nothing can halt its progress. The fiendish essence consumes the caster's own skin, an agonizing process that deals 1D4 points of damage in each round of the ritual—wise candidates keep some cure potions on hand. At the end of the rite, the acolyte's skin sports an oily, almost unnoticeable sheen. However, as he gains additional levels in the prestige class, his skin darkens, sprouts spikes, and gradually gives him a fiendish visage. The fiendish essence also begins to whisper foul secrets to its wearer, urging him to evil. (The wearer can accept or ignore this advice according to his temperament.)</p>
<p>You must choose either Demon, or Devil when you perform the ritual, and a member of the chosen type with 6 Hit Dice or more must be present when you perform the ritual.</p>";
        $helper->saveClass($class, [
            'skill_progress' => 2,
            'hit_dice'       => 6,
            'max_level'      => 6,
            'has_spells'     => 1,
        ], ['WIS', 'CHA'], [
            'Arcane', 'Evil', 'Fiend',
        ]);

        $feature              = new Feature;
        $feature->key         = 'fiend_skin';
        $feature->name        = 'Fiend Skin';
        $feature->description = '<p>You summon the essence of a fiend and wear it like a second skin. The bonded skin is for all intents and purposes your own skin. You gain the following benefits:</p>
<ul>
    <li>You gain Natural Armor of +2 and your skin is obviously strange to onlookers.</li>
    <li>You gain Damage Reduction 2 (this stacks with Damage Reduction from Armor as well)</li>
    <li>You gain Darkvision out to 90 feet.</li>
    <li>You gain either the Expanded Spell Slot feat or the Expanded Spell Knowledge feat</li>
    <li>You may now take Vile feats as Generic feats</li>
    <li>
        <p>Resistance based on Fiend choice</p>
        <dl>
            <dt>Demon</dt> <dd>Lightning</dd>
            <dt>Devil</dt> <dd>Fire</dd>
        </dl>
    </li>
</ul>';
        $helper->saveFeature($feature, ['Fiend']);

        $feature              = new Feature;
        $feature->key         = 'fiend_resistance';
        $feature->name        = 'Fiendish Resistance';
        $feature->description = '<p>Your fiendish skin becomes tougher. You gain Resistance to all Bludgeoning, Piercing, and Slashing damage. This replaces your Damage Reduction from Fiend Skin.</p>';
        $helper->saveFeature($feature, ['Fiend']);

        $feature              = new Feature;
        $feature->key         = 'fiendish_servants';
        $feature->name        = 'Fiendish Servants';
        $feature->description = '<p>You gain some fiendish servants. You add either the spell Call Dretch Horde (Demon) or Call Lemure Horde (Devil).</p>
<p>If you have the Find Familiar feat, you can gain an Imp (Demon) or Quasit (Devil) as your Familiar.</p>';
        $helper->saveFeature($feature, ['Fiend']);

        $feature              = new Feature;
        $feature->key         = 'skin_familiar';
        $feature->name        = 'Skin Familiar';
        $feature->description = '<p>You fiendish skin can now Concentrate on spells as if it was your familiar.</p>';
        $helper->saveFeature($feature, ['Fiend']);

        $feature              = new Feature;
        $feature->key         = 'fiendish_summon';
        $feature->name        = 'Fiendish Summoning';
        $feature->description = '<p>When Calling to summon a fiend, the fiend summoned is more likely to co-operate. You make an opposed CHA (Diplomacy) check, on success, the fiend will at least hear you out, but will never do anything against its nature.</p>';
        $helper->saveFeature($feature, ['Fiend']);

        $helper->addFeaturesToClass($class, [
            'arcane_spellcasting_class' => [2, 4, 6],
            'class_group_feat'          => [2, 5, 8],
            'fiend_skin'                => [1],
            'fiend_resistance'          => [3],
            'fiendish_servants'         => [4],
            'skin_familiar'             => [5],
            'fiendish_summon'           => [6],
        ]);
    }
}
