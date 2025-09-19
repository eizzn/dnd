<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassSoulKnifeSeeder extends Seeder
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
        $class->name          = 'Soul Knife';
        $class->type          = 'Base';
        $class->key_attribute = 'DEX or CON';
        $class->weapons       = 'Simple Weapons, Mind Blade';
        $class->armors        = 'Light Armor';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 8,
            'skill_progress' => 6,
            'has_powers'     => true,
        ], ['WIS', 'DEX'], [
            'Psionic', 'Skill', 'Mind Blade',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Acrobatics', 'Athletics', 'Concentration', 'Language']);

        $feature              = new Feature;
        $feature->key         = 'mind_blade';
        $feature->name        = 'Mind Blade';
        $feature->description = '<p>As an Action, you can create a semisolid blade composed of psychic energy distilled from your mind. The blade is identical in all ways(except visually) to a short sword of a size appropriate for its wielder.</p>
<p>The blade can be broken (hardness 10 and 10 Hit Points), but you can simply create another as normal. The moment you relinquish your grip on the blade, it dissipates (unless you throw it). A mind blade is considered a magic weapon.</p>
<p>You can use various combat feats with your mind blade (ex. Power Attack, Weapon Finesse).</p>
<p>You can manifest your mind blade even where psionics normally does not function. You can sustain your mind blade by making a DC 20 WIS (Concentration) check. On success, you manifest your mind blade for a duration of 1 minute. On an unsuccessful attempt, your mind blade vanishes, but you can continue to attempt to manifest with an Action.</p>
<table>
    <thead>
        <tr>
            <th>Concentration Ranks</th>
            <th>Effect</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0 - 3</td>
            <td>Manifest Mind Blade as an Action</td>
        </tr>
        <tr>
            <td>4+</td>
            <td>Can throw Mind Blade</td>
        </tr>
        <tr>
            <td>6+</td>
            <td>
                <p>Can manifest Mind Blade as a Free Action</p>
                <p>Shape Mind Blade. As a Triple Action, you can change your mind blade to replicate a longsword, bastard sword or two identical short swords</p>
            </td>
        </tr>
    </tbody>
</table>';
        $helper->saveFeature($feature, ['Psionic', 'Mind Blade']);

        $feature              = new Feature;
        $feature->key         = 'enhance_mind_blade';
        $feature->name        = 'Enhance Mind Blade';
        $feature->description = '<p>You gain the ability to enhance your mind blade. You can imbue your mind blade with a bonus to hit and damage by devoting an amount of psionic power points. This takes a Triple Action to do so (regardless if you imbue 1 or 2 mind blades).</p>
<table>
    <thead>
        <tr>
            <th>Power Points</th>
            <th>Enhancement Bonus</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>+1</td>
        </tr>
        <tr>
            <td>3</td>
            <td>+2 (+1/+1)</td>
        </tr>
        <tr>
            <td>5</td>
            <td>+3 (+2/+2)</td>
        </tr>
        <tr>
            <td>9</td>
            <td>(+3/+3)</td>
        </tr>
    </tbody>
</table>
<p>Once you devout the power points to enhance your mind blade, you do not regain that amount of power points so long as you continue to imbue your mind blade. If you wish to regain your power points you have devoted, you may do so on your next long rest, but your mind blade will no longer be imbued.</p>
<p>You may also imbue your mind blade with properties based on if you have certain powers.</p>
<table>
    <thead>
        <tr>
            <th>Property</th>
            <th>Power</th>
            <th>Power Points</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Ghost Touch</td>
            <td> - </td>
            <td>1</td>
        </tr>
        <tr>
            <td>Defending</td>
            <td>Inertial Armor</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Flaming</td>
            <td>Pyrokinesis</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Frosting</td>
            <td>Cryokinesis</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Shocking</td>
            <td>Electrokinesis</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Corrosive</td>
            <td>Acid</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Returning</td>
            <td>Far Hand</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Flaming Burst</td>
            <td>Pyrokinesis</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Frost Burst</td>
            <td>Cryokinesis</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Shocking Burst</td>
            <td>Electrokinesis</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Wounding</td>
            <td>Matter Agitation</td>
            <td>8</td>
        </tr>
        <tr>
            <td>Dancing</td>
            <td>Control Object</td>
            <td>14</td>
        </tr>
        <tr>
            <td>Speed</td>
            <td>Haste</td>
            <td>16</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFeature($feature, ['Psionic', 'Mind Blade']);

        $helper->addFeaturesToClass($class, [
            'wild_talent'        => [1],
            'psychic_feat'       => [3, 4, 7, 9, 12, 15, 17, 19],
            'mind_blade'         => [2],
            'enhance_mind_blade' => [5],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Psychic Strike';
        $feat->description = '<p>As an Action, you may imbue your Mind Blade with Psychic Energy by spending 1 Power Point for each die of damage. This effect deals an additional 1D8 Mental damage to the next living non-mindless target you successfully hit with your Mind Blade. Once this additional damage is dealt, your Mind Blade is no longer imbued, but you can imbue your Mind Blade again with an Action.</p>
<p>Once a Mind Blade is imbued, it stays imbued until it is discharged. If you dismiss your Mind Blade while it is imbued, the next time you manifest your Mind Blade again, it is still imbued. If your Mind Blade is forcibly dispelled or broken, the next time you manifest your Mind Blade, it will not be imbued.</p>
<p>You may gain this feat multiple times, every four levels. For example, if you gained this feat at 3rd level, you cannot take it again until 7th level. Each time you gain this feat, your Psychic Strike damage increases by +1D8.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Mind Blade']);
        $feat->features()->save(app()->features['mind_blade']);

        $feat              = new Feat;
        $feat->name        = 'Improved Psychic Strike';
        $feat->action_type = 'Action';
        $feat->requirement = 'You have manifested your Mind Blade and you have a Psionic Combat attack power';
        $feat->description = "<p>As an Action, you can imbue your Mind Blade with a Psionic Combat attack power like you would imbue your Mind Blade with a Psychic Strike.</p>
<p>You must spend the Power Point cost of the Psionic Combat powers cost +1. Until your next attack with your imbued Mind Blade successfully hits, it is made as a Touch Melee attack. On a hit, it does not deal its normal damage, only the effects of the Psionic Combat power's effect is applied. The target gets a Save as normal, however, they cannot use a Reaction to raise a Psionic Combat defense power.</p>";
        $helper->addTypesToFeat($feat, ['Psionic', 'Mind Blade', 'Psionic Combat']);
        $feat->parent_feats()->save(app()->feats['Psychic Strike']);

        $feat              = new Feat;
        $feat->name        = 'Quick Psychic Strike';
        $feat->action_type = 'Free';
        $feat->requirement = 'You have manifested your Mind Blade and you have a Psionic Combat attack power';
        $feat->description = '<p>You may now imbue your Mind Blade as a Free Action by spending an additional 2 Power Points.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Mind Blade', 'Psionic Combat']);
        $feat->parent_feats()->save(app()->feats['Improved Psychic Strike']);

        $feat              = new Feat;
        $feat->name        = 'Mind Bow';
        $feat->action_type = 'Action';
        $feat->requirement = 'You must have the Mind Blade Class Feature';
        $feat->description = '<p>As an Action, you can create a semisolid arrow composed of psychic energy distilled from your mind. You may then use an Action to launch your arrow as if fired from a longbow.</p>
<ul>
    <li>If you have the Enhance Mind Blade feature, you may also imbue your arrows in the same way</li>
    <li>If you have the Psychic Strike, Improved Psychic Strike, and/or the Quick Psychic Strike feat, you may imbue your Mind Arrows in the same way</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Mind Blade', 'Psionic Combat']);
        $feat->parent_feats()->save(app()->feats['Point-Blank Shot']);

        $feat              = new Feat;
        $feat->name        = 'Improved Mind Bow';
        $feat->description = '<p>The first Mind Arrow you manifest each turn can be manifested as a Free Action. All other Mind Arrows still require an Action to manifest.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Mind Blade', 'Psionic Combat']);
        $feat->parent_feats()->save(app()->feats['Mind Bow']);

        $feat              = new Feat;
        $feat->name        = 'Phase Arrow';
        $feat->description = '<p>You may spend a Double Action and expend your Psionic Focus to manifest a special Mind Arrow. This Mind Arrow can travel in a straight line to pass through nonmagical and nonpsionic barrier or wall (A Wall of Force, Wall of Ectoplasm, or the like will stop a Mind Arrow). This arrow negates Cover, and Concealment. Make the attack as a Ranged Touch attack.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Mind Blade', 'Psionic Combat']);
        $feat->parent_feats()->save(app()->feats['Improved Mind Bow']);

        $feat              = new Feat;
        $feat->name        = 'Mind Shield';
        $feat->action_type = 'Action';
        $feat->requirement = 'You must have a free hand to manifest your Mind Shield';
        $feat->description = '<p>As an Action, you can create a semisolid Light Shield composed of psychic energy distilled from your mind. The shield is identical in all ways(except visually) to a light shield of a size appropriate for its wielder and lasts for 1 hour. To gain the benefits of this shield, you must use an Action to raise your shield.</p>
<p>If you have the Enhance Mind Blade feat, you may also enhance your Mind Shield.</p>
<p>You may choose to manifest your shield in the following way</p>
<ul>
    <li>As a Free Action, you may manifest a Buckler</li>
    <li>You may expend your Psionic Focus to manifest your Mind Shield as a Free Action</li>
    <li>You may spend 2 Power Points to manifest your Mind Shield as a Free Action</li>
    <li>You may spend an Action to manifest your Mind Shield and expend your Psionic Focus to manifest a Heavy Shield</li>
    <li>You may spend an Action to manifest your Mind Shield and 2 Power Points to manifest a Heavy Shield</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Mind Blade', 'Psionic Combat']);
        $feat->features()->save(app()->features['mind_blade']);

        $feat              = new Feat;
        $feat->name        = 'Improved Mind Shield';
        $feat->requirement = 'You must have a free hand to manifest your Mind Shield';
        $feat->description = '<p>Your ability to manifest your Mind Shield improves. While you have your Mind Shield ready, you gain a +2 bonus to all INT, WIS, and CHR Saves and a +4 bonus vs all Psionic Combat attack Saves.</p>
<ul>
    <li>You may manifest a Light Shield as a Free Action</li>
    <li>You may manifest a Heavy Shield as an Action</li>
    <li>You may expend your Psionic Focus to manifest a Heavy Shield as a Free Action</li>
    <li>You may spend 2 Power Points to manifest a Heavy Shield as a Free Action</li>
    <li>You may expend your Psionic Focus to manifest a Tower Shield as an Action</li>
    <li>You may expend your Psionic Focus, and spend 2 Power Points to manifest a Tower Shield as a Free Action</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Mind Blade', 'Psionic Combat']);
        $feat->parent_feats()->save(app()->feats['Mind Shield']);

        $feat              = new Feat;
        $feat->name        = 'Mind Armor';
        $feat->description = '<p>As an Action, and 1 Power Point, you can create a semisolid suit of Light Armor (equivalent to a Chain Shirt). While you have your Mind Armor on, you gain a +2 bonus to all INT, WIS, and CHR Saves and a +4 bonus vs all Psionic Combat attack Saves. This armor does not weigh anything and lasts for 1 hour.</p>
<p>If you have the Enhance Mind Blade feat, you may also enhance your Mind Armor.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Mind Blade', 'Psionic Combat']);
        $feat->features()->save(app()->features['mind_blade']);

        $feat              = new Feat;
        $feat->name        = 'Improved Mind Armor';
        $feat->description = '<p>Your Mind Armor improves</p>
<ul>
    <li>You may manifest a Light Armor (equivalent to a Chain Shirt) as a Free Action</li>
    <li>As an Action and 2 Power Points, you may manifest a Medium Armor (equivalent to a Breastplate)</li>
    <li>You may expend your Psionic Focus and 3 Power Points to manifest a Medium Armor as a Free Action</li>
    <li>You may spend an additional 2 Power Points to extend the duration by an additional 1 hour</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Mind Blade', 'Psionic Combat']);
        $feat->parent_feats()->save(app()->feats['Mind Armor']);

        $feat              = new Feat;
        $feat->name        = 'Greater Mind Armor';
        $feat->description = '<p>Your Mind Armor improves even more</p>
<ul>
    <li>You may manifest a Light or Medium Armor as a Free Action</li>
    <li>As an Action and 3 Power Points, you may manifest a Heavy Armor (equivalent to Full Plate)</li>
    <li>You may expend your Psionic Focus and 4 Power Points to manifest a Heavy Armor as a Free Action</li>
    <li>You may now spend an additional 1 Power Point instead of 2 to extend the duration by an additional 1 hour</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Mind Blade', 'Psionic Combat']);
        $feat->parent_feats()->save(app()->feats['Improved Mind Armor']);

        $features = app()->features;
        unset($features['mind_blade']);
        app()->features = $features;

        $helper->addFeatsToClass($class, [
            'Psionic Talent'     => 2,
            'Expanded Knowledge' => 6,

            'Focused Mind'          => 6,
            'Improved Focused Mind' => 12,

            'Psychic Strike'          => 3,
            'Improved Psychic Strike' => 9,
            'Quick Psychic Strike'    => 10,

            'Mind Shield'          => 3,
            'Improved Mind Shield' => 6,

            'Mind Armor'          => 4,
            'Improved Mind Armor' => 8,
            'Greater Mind Armor'  => 12,

            'Mind Bow'          => 4,
            'Improved Mind Bow' => 8,
            'Phase Arrow'       => 12,

            'Deflect Ranged Attack'  => 5,
            'Deflect Magical Attack' => 12,
        ]);

        $helper->addPowersToClass($class, [
            1 => ['Awareness', 'Burst', 'Charisma Defense', 'Dexterity Defense', 'Inertial Armor', 'Intelligence Defense',
                'Shift', 'Strength Defense', 'Telekinesis', 'Vigor', 'Wisdom Defense', ],
            2 => ['Animal Sight', 'Body Equilibrium', 'Danger Sense', 'Flex Form', 'Haste', 'Levitate'],
            3 => ['Air Walk', 'Combat Sense', 'Dimension Slide', 'Inertial Barrier'],
            4 => ['Adapt Body', 'Dimension Door', 'Schism'],
        ]);

        $helper->addPowerMetasToClass($class, [
            1  => ['points' => 1, 'known' => 1, 'max_level_power' => 1],
            2  => ['points' => 2, 'known' => 1, 'max_level_power' => 1],
            3  => ['points' => 3, 'known' => 1, 'max_level_power' => 1],
            4  => ['points' => 4, 'known' => 2, 'max_level_power' => 1],
            5  => ['points' => 5, 'known' => 2, 'max_level_power' => 1],
            6  => ['points' => 7, 'known' => 3, 'max_level_power' => 2],
            7  => ['points' => 9, 'known' => 3, 'max_level_power' => 2],
            8  => ['points' => 11, 'known' => 4, 'max_level_power' => 2],
            9  => ['points' => 13, 'known' => 4, 'max_level_power' => 2],
            10 => ['points' => 16, 'known' => 5, 'max_level_power' => 3],
            11 => ['points' => 19, 'known' => 5, 'max_level_power' => 3],
            12 => ['points' => 22, 'known' => 6, 'max_level_power' => 3],
            13 => ['points' => 25, 'known' => 6, 'max_level_power' => 3],
            14 => ['points' => 29, 'known' => 7, 'max_level_power' => 4],
            15 => ['points' => 33, 'known' => 7, 'max_level_power' => 4],
            16 => ['points' => 37, 'known' => 8, 'max_level_power' => 4],
            17 => ['points' => 41, 'known' => 8, 'max_level_power' => 4],
            18 => ['points' => 45, 'known' => 9, 'max_level_power' => 4],
            19 => ['points' => 49, 'known' => 9, 'max_level_power' => 4],
            20 => ['points' => 54, 'known' => 10, 'max_level_power' => 4],
        ]);
    }
}
