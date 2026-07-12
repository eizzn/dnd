<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersFSeeder extends Seeder
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

        $power              = new Power;
        $power->name        = 'Fate of One';
        $power->action_type = 'Free Action';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>Your limited omniscience allows you to reroll a Save, Attack, or Skill check. Whatever the result of the reroll, you must use it even if it is worse than the original roll.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend Psionic Focus)</dt> <dd>You may expend your Psionic Focus to lower the Power Point cost by 2 and gain a +3 Bonus to the reroll.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Clairsentience'], 4);

        $power                 = new Power;
        $power->name           = 'Fear';
        $power->action_type    = 'Double Action';
        $power->display        = 'Visual';
        $power->save_attribute = 'WIS';
        $power->requirements   = 'The target must have suffered at least 1 point of ability damage';
        $power->targets        = '1 living creature';
        $power->range          = '30 feet';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>You plant Fear in the target, with effects based on its Save.</p>';
        $power->heightened     = '<dl>
    <dt>Heightened (+2)</dt> <dd>The spell gains Area of 30-foot Cone, and affects all in the area.</dd>
</dl>';
        $power->saves = '<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>The target is frightened 1</dd>
    <dt>Failure</dt> <dd>The target is frightened 2</dd>
    <dt>Critical Failure</dt> <dd>The target is frightened 3 and fleeing for 1 round</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Ability Damage'], 1);

        $power                   = new Power;
        $power->name             = 'Flame Absorption';
        $power->action_type      = 'Reaction';
        $power->maintenance_cost = '1 Power Point per round';
        $power->duration         = '5 round';
        $power->targets          = 'Self';
        $power->description      = '<p>You gain the ability to absorb the energy from fires, and possibly healing your wounds from the absorbed energy.</p>
<p>When you manifest this power, choose one.</p>
<ul>
    <li>Gain Damage Reduction 10 to Fire. You gain 1 Hit Point for every 5 points of Fire damage you absorb. This can cause the source of Fire to be extinguished depending on the size of the flame.</li>
    <li>You gain Damage Resistance to Fire (half damage)</li>
</ul>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the Damage Reduction by +5</dd>
    <dt>Heightened (+2)</dt> <dd>The Duration becomes 5 rounds</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the Duration by 2 rounds</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Fire'], 2);

        $power                   = new Power;
        $power->name             = 'Flex Form';
        $power->action_type      = 'Action';
        $power->maintenance_cost = '1 Power Point per 10 minutes';
        $power->targets          = 'Self';
        $power->display          = 'Visual';
        $power->duration         = '30 minutes';
        $power->description      = '<p>You can shift and deform your body according ot your surroundings. This effect grants a +10 bonus to Escape Artist and Tumble checks (even if untrained).</p>
<p>You can also squeeze into a space half as wide as your normal space with no penalties. You can move freely through squares occupied by creatures only one size category larger than you rather than 3 size categories than you.</p>
<p>This power does not affect your equipment. While normal clothing will shift with you, armor and shields will not, nor will any weapon that is meant to be used in 2 hands.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+2)</dt> <dd>You equipment is affected as well</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 2);

        $power                   = new Power;
        $power->name             = 'Fly';
        $power->action_type      = 'Action';
        $power->maintenance_cost = '1 Power Point per 10 minutes';
        $power->targets          = 'Self';
        $power->display          = 'Auditory';
        $power->duration         = '30 minutes';
        $power->description      = '<p>As the Fly spell, except as noted here.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
    <dt>Heightened (+6)</dt> <dd>The duration increases to 2 hours</dd>
<dl>';
        $helper->addTypesToPower($power, ['Psychokinesis'], 4);

        $power                   = new Power;
        $power->name             = 'Fission';
        $power->action_type      = 'Triple Action';
        $power->maintenance_cost = '1 Power Point per 10 minutes';
        $power->targets          = 'Self';
        $power->duration         = '3 hour';
        $power->description      = "<p>You can divide yourself, creating a duplicate that comes into existence 5 feet away. Your duplicate thinks and acts exactly as you do and follows your orders, although it will not do anything you wouldn't do yourself.</p>
<p>Your duplicate has all your abilities but none of your psionic or magical equipment (it does possess a duplicate of all your mundane equipment, clothing, armor, and implements, as well as mundane versions of any psionic or magical equipment you have). You and your duplicate evenly split your power points, your remaining usages of pertinent special abilities for the day, and so on. You retain your psionic focus, if you maintain such when this power is manifested. Treat your duplicate as yourself with the Enervated 2 condition. This condition cannot be removed by any means. Your duplicate has all other physical traits you had at the time you manifest this power. Powers, spells, or other effects affecting you when you manifest this power do not transfer to your duplicate.</p>
<p>When the duration expires or when you dismiss the power, you and your duplicate rejoin, no matter how far from each other you are. You gain back any power points the duplicate has not spent. At the time of rejoining, you take half of the damage your duplicate has taken since this power was manifested. This damage could potentially leave you with negative hit points, but it can’t reduce your hit points to less than -9.</p>
<p>If your duplicate dies before the duration expires, no rejoining occurs, and you gain the Enervated 1 condition. If you die, your duplicate remains in existence, and is for all intents you. The Enervated condition becomes 1.</p>
<p>You can have only one fission duplicate in existence at one time; your duplicate cannot use this power. You cannot use fusion with a duplicate, or share any other power or effect that pools abilities (the sum of you and you is still just you). Similarly, attempting to use powers such as claws of the vampire or vampiric blade to hurt your duplicate only damages your duplicate; these powers do not heal you. Empathic transfer and similar powers are likewise ineffective (transferring wounds to yourself isn’t a good healing strategy).</p>
<p>All powers affecting a fission creature, either the original or the duplicate, end when the fission ends. All damage, including hit point damage, ability damage, ability drain, and ability burn damage, is added together.</p>";
        $helper->addTypesToPower($power, ['Psychometabolism'], 7);

        $power                   = new Power;
        $power->name             = 'Fuse Flesh';
        $power->action_type      = 'Triple Action';
        $power->maintenance_cost = '1 Power Point per minute';
        $power->range            = 'Touch';
        $power->targets          = 'Creature touched';
        $power->save_attribute   = 'CON';
        $power->duration         = '10 minutes';
        $power->description      = "<p>You cause the touched subject's flesh to ripple, grow together, and fuse into a nearly seamless whole. The subject is forced into a fetal position (if humanoid), with only the vaguest outline of its folded arms and legs visible below the all-encompassing wave of flesh. The subject retains the ability to breathe, eat, and excrete, but may lose the use of its senses (see below).</p>
<p>If the sudden transformation would prove fatal to the creature (such as fusing a swimming air-breathing subject, or a flying subject), the subject gets a +4 bonus on the Save. Unless it loses the use of its senses (see below), the creature can still perform purely mental actions, such as manifesting powers.</p>
<p>If the target fails its CON Save to avoid the power's effect, the subject must immediately attempt a second CON Save. If this second Save is failed, the creature's eyes and ears fuse over, effectively blinding and deafening it. Moreover, it loses its extraordinary, supernatural, and spell-like abilities, as well as its ability to manifest powers (if any), and is generally in sorry shape.</p>
<p>Incorporeal or gaseous creatures and creatures not composed of flesh are immune to fuse flesh, and a shapechanger can revert to its unfused form as an Action.</p>";
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the Save DC by +1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 6);

        $power                   = new Power;
        $power->name             = 'Fusion';
        $power->action_type      = 'Triple Action';
        $power->maintenance_cost = '1 Power Point per day';
        $power->range            = 'Touch';
        $power->requirements     = 'You must have the Fuse Flesh power';
        $power->targets          = 'You and one touched willing creature';
        $power->duration         = '30 days';
        $power->description      = '<p>You and another willing, corporeal, living creature of the same or smaller size fuse into one being. As the manifester, you control the actions of the fused being. However, you can give up this control to the other creature. Once you give up control, you cannot regain it unless the other creature relinquishes it.</p>
<p>The fused being has your current hit points plus the other creature’s current hit points. The fused being knows all the powers you and the other creature know, has the sum of your and the other creature’s power points, and knows or has prepared any spells you or the other creature possesses (if any). Likewise, all feats, racial abilities, and class features are pooled (if both creatures have the same ability, the fused being gains it only once). For each of the six ability scores, the fused being’s score is the higher of yours and the other creature’s, and the fused being also has the higher Hit Dice or manifester level—this effectively means the fused being uses the better Saves, attack bonus, and skill modifiers of either member, and it manifests powers at the higher of the manifester levels that you or the other creature possessed before becoming fused.</p>
<p>You decide what equipment is absorbed into the fused being and what equipment remains available for use. These fused items are restored once the power ends.</p>
<p>When the power ends, the fused being separates. The other creature appears in an area adjacent to you that you determine. If separation occurs in a cramped space, the other creature is expelled through the Astral Plane, finally coming to rest materially in the nearest empty space and taking 1d6 points of damage for each 10 feet of solid material passed through.</p>
<p>Damage taken by the fused being is split evenly between you and the other creature when the power ends. You do not leave the fusion with more hit points than you entered it with, unless you were damaged prior to the fusion and the fused being was subsequently healed. In a like manner, the fused being’s remaining power points are split between you and the other creature (you can leave with more points than you entered with, as long as you don’t exceed the maximum power points for your level and ability score). Ability damage and negative levels are also split between you and the other creature. (If an odd number of negative levels or ability score reductions must be split, you decide whether you or the other creature receives the additional loss.)</p>
<p>If a fused being is killed, it separates into its constituent creatures, both of which are also dead. You cannot use fission on a fused being.</p>
<p>Manifesting this power causes 1 point of CON damage to both participants after they fuse.</p>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 8);
    }
}
