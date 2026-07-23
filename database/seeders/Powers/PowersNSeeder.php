<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use Illuminate\Database\Seeder;

class PowersNSeeder extends Seeder
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
        $power->name             = 'Null Psionics Field';
        $power->action_type      = 'Double Action';
        $power->maintenance_cost = '3 Power Points per 30 minutes';
        $power->display          = 'Auditory, Visual';
        $power->area             = '10-ft radius emanation';
        $power->duration         = 'Concentration, up to 3 hours';
        $power->description      = '<p>An invisible barrier surrounds you and moves with you. The space within this barrier is impervious to most psionics. Likewise, it prevents the functioning of any psionic items or powers within its confines. A null psionics field suppresses any power or psionic effect used within, brought into, or manifested into its area, but does not negate it. Time spent within a null psionics field counts against a suppressed effect’s duration.</p>
<p>Astral constructs wink out if they enter a null psionics field. They reappear in the same spot once the field goes away. Time spent winked out counts normally against the duration of the power that is maintaining the construct or summoned creature.</p>
<p>Creation powers with instantaneous durations and calling powers are not affected by a null psionics field because the power itself is no longer in effect, only its result.</p>
<p>Magical constructs are not affected by this power. Furthermore, while a psionic sword does not function psionically within the area, it is still a sword (and a masterwork sword at that). </p>
<p>Dispel psionics does not remove the field. Two or more null psionics fields sharing any of the same space have no effect on each other. Certain powers may be unaffected by null psionics field (see the individual power descriptions). Artifacts and deities are unaffected by mortal power such as this. Should a creature’s space extend across the boundary of the area enclosed by the field, any part of the creature that lies outside the effect is unaffected by the field.</p>';
        $helper->addTypesToPower($power, ['Clairsentience'], 6);
    }
}
