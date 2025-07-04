<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use Illuminate\Database\Seeder;

class PowersLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper = app()->seedHelper;

        $power               = new Power;
        $power->name         = 'Levitate';
        $power->action_type  = 'Action';
        $power->display      = 'Olfactory';
        $power->requirements = 'You must have the Telekinesis power';
        $power->targets      = 'Self';
        $power->duration     = '30 minutes';
        $power->description  = '<p>As the Levitate spell, except as noted here.</p>';
        $helper->addTypesToPower($power, ['Psychokinesis'], 2);

        $power                 = new Power;
        $power->name           = 'Life Blast';
        $power->action_type    = 'Double Action';
        $power->display        = 'Mental';
        $power->range          = '30 feet';
        $power->targets        = 'One living creature with an INT score';
        $power->duration       = 'Instantaneous';
        $power->save_attribute = 'CON';
        $power->description    = '<p>You cause psychosomatic damage to the target, causing 1D4 CON damage.</p>';
        $power->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (+4)</dt> <dd>If the target fails their Save, they gained the Drained 2 condition.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 4);

        $power              = new Power;
        $power->name        = 'Light Absorption';
        $power->action_type = 'Reaction';
        $power->duration    = '1 round';
        $power->range       = '0 feet';
        $power->description = '<p>You gain the ability to absorb the energy from light, and possibly healing your wounds from the absorbed energy.</p>
<p>When you manifest this power, choose one.</p>
<ul>
    <li>Gain Damage Reduction 10 to Light. You gain 1 Hit Point for every 5 points of Light damage you absorb. This causes the area around you to be engulfed in darkness. A campfire is insufficient to gain any life. A light spell is sufficient to absorb 1 Hit Point</li>
    <li>You gain Damage resistance to Light (half damage)</li>
</ul>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the Damage Reduction by +5</dd>
    <dt>Heightened (+2)</dt> <dd>The Duration becomes 5 rounds</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the Duration by 2 rounds</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Light'], 2);

        $power               = new Power;
        $power->name         = "Lion's Roar";
        $power->action_type  = 'Triple Action';
        $power->requirements = 'You must have the Sonickinesis Power';
        $power->area         = '90-ft Cone emanation';
        $power->duration     = 'Instantaneous and 1 minute';
        $power->description  = '<p>You emit a Sonic pulse of energy. All in the area suffer 10D8 Sonic damage, unless they make a CON Save for half damage. All who Fail their Save are Stunned for 1 minute.</p>';
        $power->saves        = '<dl>
    <dt>Success</dt> <dd>Half Sonic damage and not Stunned</dd>
    <dt>Failure</dt> <dd>Full Sonic damage and Stunned for 1 minute</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Sonic'], 7);
    }
}
