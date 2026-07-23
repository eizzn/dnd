<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersRSeeder extends Seeder
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
        $power->name             = 'Read Thoughts';
        $power->action_type      = 'Double Action';
        $power->maintenance_cost = '1 Power Point per minute';
        $power->requirements     = 'You must have the Sense Minds Psionic power';
        $power->display          = 'Mental';
        $power->targets          = 'Intelligent creature in range';
        $power->range            = '60 ft';
        $power->save_attribute   = 'INT';
        $power->duration         = 'Concentration, up to 10 minutes';
        $power->description      = "<p>For the duration, you can read the thoughts of certain creatures. When you manifest ths power and as a Double Action on each turn, you can focus your mind on any one creature that you can see within 60 feet of you. If the creature you choose has an INT of 3 or lower or doesn't speak any language, the creature is unaffected.</p>
<p>You initially learn the surface thoughts of the creature—what is most on its mind at that moment. As a Double Action, you can either shift your attention to another creature's thoughts or attempt to probe deeper into the same creature's mind. If you probe deeper, the target may make a WIS Save. If it fails, you gain insight into its reasoning (if any), its emotional state, and something that looms large in its mind (such as something it worries over, loves, or hates). If it succeeds, you cannot probe this individuals mind any deeper. Either way, the target knows that you are probing into its mind, and unless you shift your attention to another creature's thoughts, the creature can use its Action on its turn to make an INT check contested by your INT check; if it succeeds, the power ends. If you try to read the thoughts of a creature with an INT of 26 or higher (and at least 10 points higher than your own INT), then you are Stunned: 2 and the Power ends.</p>
<p>Questions verbally directed at the target creature naturally shape the course of its thoughts, so this power is particularly effective as part of an interrogation.</p>";
        $helper->addTypesToPower($power, ['Telepathy'], 2);

        $power                   = new Power;
        $power->name             = 'Reddopsi';
        $power->action_type      = 'Triple Action';
        $power->maintenance_cost = '1 Power Point per 10 minutes';
        $power->requirements     = 'You must have the Dispel Psionics power';
        $power->targets          = 'Self';
        $power->display          = 'Auditory, Mental, Olfactory';
        $power->duration         = '1 hour';
        $power->description      = '<p>When you manifest reddopsi, powers targeted against you rebound to affect the original manifester. This effect reverses powers that have only you as a target (except dispel psionics and similar powers or effects). Powers that affect an area and those that produce effects can’t be reversed. Reddopsi also can’t reverse any power with a range of touch.</p>
<p>Should you rebound a power back against a manifester who also is protected by reddopsi, the power rebounds once more upon you.</p>';
        $helper->addTypesToPower($power, ['Clairsentience'], 7);

        $power                   = new Power;
        $power->name             = 'Regeneration';
        $power->action_type      = 'Triple Action';
        $power->maintenance_cost = '1 Power Point per minute';
        $power->requirements     = 'You must have the Body Adjustment power';
        $power->targets          = 'Self';
        $power->display          = 'Olfactory';
        $power->duration         = '10 minutes';
        $power->description      = '<p>As the spell Regeneration, except as noted here.</p>';
        $power->heightened       = '<dl>
    <dt>Heightened (+1)</dt> <dd>The duration is doubled</dd>
    <dt>Heightened (+2)</dt> <dd>You also become immune to all Poisons, and Diseases</dd>
    <dt>Heightened (+2)</dt> <dd>The Blinded, Deafened, Dizzy, Drained, Drugged, Enervated, Enfeebled, Fatigued, Sickened, and Stunned conditions ends after 1 round.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 6);

        $power               = new Power;
        $power->name         = 'Repair Ectoplasmic Damage';
        $power->action_type  = 'Action';
        $power->range        = 'Touch';
        $power->requirements = 'You must have the Astral Construct power';
        $power->targets      = 'One Astral Construct';
        $power->duration     = 'Instantaneous';
        $power->description  = '<p>You repair an Astral Construct that has at least 1 Hit Point remaining. The power repairs 3D8 points of damage.</p>';
        $power->heightened   = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage repaired by +1D8</dd>
</dl>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Ectoplasm'], 2);

        $power                 = new Power;
        $power->name           = 'Resonating Agony';
        $power->action_type    = 'Double Action';
        $power->save_attribute = 'CON';
        $power->requirements   = 'You must have the Exhaust power';
        $power->range          = 'Touch';
        $power->targets        = 'Living creature touched';
        $power->duration       = '1 minute';
        $power->description    = "<p>At your touch, a dull rumble courses through the target's body, shaking apart his mind and body from within. Make a Melee Touch Attack. If you hit, the Target is Nauseated for the Duration. At the beginning of the Target's turn, they may make a CON Save to be Shaken instead of Nauseated for that turn. If they Fail this Save, they suffer 1 CON Damage.</p>";
        $power->saves          = '<dl>
    <dt>Success</dt> <dd>Shaken instead of Nauseated for the turn</dd>
    <dt>Failure</dt> <dd>Nauseated for the turn and suffer 1 CON Damage</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 6);

        $power                 = new Power;
        $power->name           = 'Ring of Fire';
        $power->action_type    = 'Double Action';
        $power->requirements   = 'You must have the Pyrokinesis power';
        $power->range          = '120 feet';
        $power->area           = 'Circle or partial circle of fire emanation';
        $power->save_attribute = 'DEX';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>You can generate a ring of Fire that expands outward from you. You can choose to make the circle a 3/4 circle, half circle, or quarter circle.</p>
<p>All targets in the path of the expanding circle of Fire takes 3D6 Fire damage. The target also catches Fire and will take 1D6 Fire damage on successive rounds until the fire is put out.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the Fire damage by +1D6</dd>
</dl>';
        $power->saves = '<dl>
    <dt>Critical Success</dt> <dd>No damage. Not caught on fire</dd>
    <dt>Success</dt> <dd>Half damage. Not caught on fire</dd>
    <dt>Failure</dt> <dd>Full damage. Caught on fire</dd>
    <dt>Critical Failure</dt> <dd>Double damage. Caught on fire and the Fire damage is 2D6</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Fire'], 2);
    }
}
