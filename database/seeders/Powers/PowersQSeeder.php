<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersQSeeder extends Seeder
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
        $power->name         = 'Quintessence';
        $power->action_type  = 'Triple Action';
        $power->display      = 'Material, see text';
        $power->requirements = 'You must have the Time Hop power';
        $power->range        = '0';
        $power->duration     = 'Instantaneous';
        $power->description  = '<p>You collapse a bit of time from the continuum, forming a 1-ounce dollop of thick, gooey material called quintessence. This substance shimmers like a silver mirror when viewed from some angles but is transparent from other viewpoints. You can smooth a dollop of quintessence around any small object.</p>
<p>Objects sealed within quintessence are protected from the effects of time; in practical terms, they enter a state of stasis. Living flesh with only partial contact with quintessence is also partially pulled out of the time stream (you are immune to this effect). This disruption deals 1 point of damage per round beginning 10 rounds after partial contact occurs.</p>
<p>Quintessence can be manually scraped away from a protected object, freeing it to rejoin the time stream. When you do this, there is a 75% chance that the quintessence evaporates back into the continuum. Otherwise, it coalesces again into a 1-inch-diameter bead, available for later use.</p>
<p>Large quantities of quintessence could theoretically be gathered to preserve large items or structures (or even a complete living creature; if completely immersed, a living creature would not take the damage associated with partial contact). However, psionic characters and creatures are generally loath to do so because accumulations of quintessence weighing 1 pound or more hinders psionic activity within a 5-foot radius of the accumulation: Powers require twice as many Power Points to manifest, unless you makes a successful WIS Save each time you attempt to manifest a power.</p>';
        $helper->addTypesToPower($power, ['Psychoportation'], 4);

        $power                 = new Power;
        $power->name           = 'Quivering Palm';
        $power->action_type    = 'Double Action';
        $power->display        = 'Auditory';
        $power->range          = 'Touch';
        $power->requirements   = 'You must have the Improved Unarmed Strike feat';
        $power->duration       = '1 month';
        $power->save_attribute = 'CON';
        $power->description    = '<p>You gain the ability to set up lethal vibrations in someone’s body.</p>
<p>When you hit a creature with an Unarmed Strike, you can start these imperceptible vibrations, which last for up to the duration. The vibrations are harmless unless you use an Action to end them. To do so, you and the target must be on the same plane of existence. When you use this Action, the creature must make a CON Save. If it fails, it is reduced to 0 hit points. If it succeeds, it takes 10d10 Psychic damage.</p>
<p>You can have only one creature under the effect of this feature at a time. You can choose to end the vibrations harmlessly without using an Action.</p>';
        $power->saves = '<dl>
    <dt>Success</dt> <dd>10D10 Non-lethal damage</dd>
    <dt>Failure</dt> <dd>Reduced to 0 Hit Points</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism', 'Force'], 7);
    }
}
