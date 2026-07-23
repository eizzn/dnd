<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use Illuminate\Database\Seeder;

class PowersUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper = app()->seedHelper;

        $power                   = new Power;
        $power->name             = 'Ubiquitous Sight';
        $power->action_type      = 'Action';
        $power->maintenance_cost = '1 Power Point per hour';
        $power->display          = 'Visual';
        $power->targets          = 'Self';
        $power->duration         = '3 hours';
        $power->description      = '<p>You have metaphoric “eyes in the back of your head,” and on the sides and top as well, granting you benefits in specific situations. In effect, you have a 360-degree sphere of sight, allowing you a perfect view of creatures that might otherwise flank you. Thus, flanking opponents gain no bonus on their attack rolls, and rogues are denied their sneak attack ability while flanking (but they may still sneak attack you if you are denied your DEX bonus). Your Perception checks gain a +4 enhancement bonus. Concurrently, you take a -4 penalty on Saves against all gaze attacks during the power’s duration.</p>';
        $helper->addTypesToPower($power, ['Clairsentience'], 2);

        $power                 = new Power;
        $power->name           = 'Ultrablast';
        $power->action_type    = 'Triple Action';
        $power->display        = 'Auditory (see text)';
        $power->area           = '15-ft Radius emanation';
        $power->requirements   = 'You must have the Telekinesis power';
        $power->save_attribute = 'CHA';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>Expend your Psionic Focus. You "grumble" psychically (which psionic and nonpsionic creatures can detect), then release a horrid shriek from your subconscious that disrupts the brains of all enemies in the power\'s area, dealing 12D6 points of nonleathal damage to each enemy.</p>';
        $power->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
    <dt>Heightened (+3)</dt> <dd>You deal no damage, but dispels Mind Blank from the target.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 4);
    }
}
