<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersVSeeder extends Seeder
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

        $power                   = new Power;
        $power->name             = 'Venom';
        $power->action_type      = 'Free';
        $power->maintenance_cost = '1 Power Point per minute';
        $power->display          = 'Olfactory';
        $power->targets          = 'Self';
        $power->duration         = '10 minutes';
        $power->description      = '<p>You can generate Poison from some part of your body. You are not immune to your own Poison, unless you have the Venom Psi-resistance feat, then you are completely immune to your own Poison.</p>
<p>You can generate any Poison listed in Formulas that has the Animal type. You must spend Power Points equal to the level to generate that Poison.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may generate a more Power poison from Formulas</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism', 'Poison'], 1);

        $power                   = new Power;
        $power->name             = 'Vigor';
        $power->action_type      = 'Action';
        $power->maintenance_cost = '1 Power Point per 10 minutes';
        $power->targets          = 'Self';
        $power->display          = 'Olfactory';
        $power->duration         = '1 hour';
        $power->description      = '<p>You suffuse yourself with power, gaining 10 temporary Hit Points.</p>
<p>Using this power again when an earlier manifestation has not expired merely replaces the older temporary Hit Points with the newer ones.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 2 and Power Point cost by 1</dd>
    <dt>Heightened (+1)</dt> <dd>For every additional power point you spend, the number of Hit Points you gain increases by 10.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 1);

        $power                 = new Power;
        $power->name           = 'Vitality Blast';
        $power->action_type    = 'Double Action';
        $power->display        = 'Auditory, Mental';
        $power->range          = '60 feet';
        $power->targets        = 'One living creature with an INT score';
        $power->duration       = 'Instantaneous';
        $power->save_attribute = 'CON';
        $power->description    = '<p>You cause psychosomatic injury to the target. You deal 1D8 + 1 nonleathal damage. You must have line of sight to the target.</p>';
        $power->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Save DC by +1</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by +1D8 + 1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 1);
    }
}
