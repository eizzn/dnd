<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersWSeeder extends Seeder
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

        $power               = new Power;
        $power->name         = 'Wall of Ectoplasm';
        $power->action_type  = 'Visual';
        $power->range        = '60 foot range';
        $power->area         = '100-ft square/10-ft';
        $power->duration     = '10 minutes';
        $power->requirements = 'You must have the Ectoplasmic Creation power';
        $power->description  = '<p>You fashion a roiling wall of ectoplasm, imbuing it with solidity. The wall cannot move once it is formed. It is 1 inch thick per four manifester levels and occupies up to one 10-foot square per level. Each 10-foot square of the wall has 10 hit points per inch of thickness and hardness 5. A section of the wall whose hit points drop to 0 is breached. If a creature tries to break through the wall, the DC for the Strength check is 15 + 2 per inch of thickness.</p>
<p>The wall of ectoplasm is susceptible to dispel psionics, but it gains a +4 bonus on any check to determine whether the wall is negated. Spells, powers, and breath weapons cannot pass through the wall in either direction (though they could damage it). It blocks ethereal creatures as well as material creatures (though ethereal creatures can usually get around the wall by floating under or over it through material floors and ceilings). The wall is opaque, so neither vision nor gaze attacks operate through it. The wall does not block psychoportive travel, such as that provided by the psionic teleport power.</p>
<p>You can form the wall into a flat, vertical plane whose area is up to one 10-foot square per level or into a sphere or hemisphere with a radius of up to 1 foot per level.</p>
<p>The wall of ectoplasm must be continuous and unbroken when manifested. If its surface is interrupted by any object or creature, the power fails.</p>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Ectoplasm'], 4);

        $power              = new Power;
        $power->name        = 'Weapon Arm';
        $power->action_type = 'Action';
        $power->display     = 'Auditory, Visual';
        $power->targets     = 'Self';
        $power->duration    = 'Until dismissed';
        $power->description = '<p>One of your arms elongates and hardens into a one-handed melee weapon (Hardness 20).</p>
<p>If your weapon arm is broken, you suffer double damage (after hardness), this power ends but you do not suffer any limb loss.</p>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 2);

        $power              = new Power;
        $power->name        = 'Wings';
        $power->action_type = 'Free';
        $power->display     = 'Visual';
        $power->targets     = 'Self';
        $power->duration    = '3 hours';
        $power->description = '<p>You adjust your body to form wings, allowing you to fly at a speed of 60 feet.</p>
<p>This power also causes your bones to become more brittle. Your CON is reduced by 2 points while this power is in effect.</p>
<p>If you are wearing medium or heavy armor, your Speed becomes 30 instead.</p>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 3);

        $power                 = new Power;
        $power->name           = 'Wisdom Blast';
        $power->action_type    = 'Double Action';
        $power->display        = 'Mental';
        $power->range          = '90 feet';
        $power->targets        = 'One living creature with an INT score';
        $power->duration       = 'Instantaneous';
        $power->save_attribute = 'WIS';
        $power->description    = "<p>You psionically erode the target's will power. You deal 1D6 WIS damage to the target. You need line of sight to the target.</p>";
        $power->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>If the target fails their Save, they gained the Confused condition for 1 round.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 3);

        $power              = new Power;
        $power->name        = 'Wisdom Defense';
        $power->action_type = 'Action';
        $power->display     = 'Mental';
        $power->range       = 'Self';
        $power->duration    = '1 round';
        $power->description = '<p>You raise a mental defense that grants a +2 bonus to WIS Saves and reduces the damage from Vitality Blast, Life Blast and WIS Blast by 1.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 2 and Power Point cost by 1</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the Damage Reduction by +1</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the bonus to WIS Saves by +1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 1);

        $power                 = new Power;
        $power->name           = 'Wither';
        $power->action_type    = 'Double Action';
        $power->display        = 'Visual';
        $power->requirements   = 'You must have the Drain Vigor power';
        $power->range          = 'Touch';
        $power->save_attribute = 'CON';
        $power->duration       = 'Instantaneous';
        $power->description    = "<p>Your touch disrupts the target's physical form, draining the STR from its muscles. The creature suffers 2D4 points of STR damage. The target gets a CON Save.</p>";
        $power->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No affect</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The target also suffers 1D4 DEX damage</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 4);
    }
}
