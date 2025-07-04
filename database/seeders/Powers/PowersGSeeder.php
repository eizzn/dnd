<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersGSeeder extends Seeder
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

        $power                 = new Power;
        $power->name           = "Gem Dragon's Roar";
        $power->action_type    = 'Double Action';
        $power->display        = 'Visual, Auditory';
        $power->area           = '30-foot Cone emanation';
        $power->requirements   = 'You must have the Sonickinesis power';
        $power->save_attribute = 'INT';
        $power->description    = '<p>You unleash a devastating wave of sonic power in a 30-foot cone out form you and in a direction you choose. Each creature in the cone must make an INT Save. On a Failed Save, it takes 4D6 Sonic damage and is Deafened and Dazed until the start of their next turn.</p>';
        $power->saves          = '<dl>
    <dt>Failure</dt> <dd>Full damage. Deafened and Dazed</dd>
    <dt>Success</dt> <dd>Half damage</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Sonic'], 3);

        $power               = new Power;
        $power->name         = 'Genesis';
        $power->action_type  = '1 week (8 hours/day)';
        $power->display      = 'Material';
        $power->range        = '180 feet (see text)';
        $power->requirements = 'You must have the Teleport power';
        $power->duration     = 'Instantaneous';
        $power->description  = '<p>The spellcaster creates a finite plane with limited access: a demiplane. Demiplanes created by this power are very small, very minor planes.</p>
<p>You can only cast this spell while on the Ethereal Plane. When you manifest this power, a local density fluctuation precipitates the creation of a demiplane. At first, the fledgling plane grows at a rate of 1 foot in radius per day to an initial maximum radius of 180 feet as it rapidly draws substance from surrounding ethereal vapors and proto-matter.</p>
<p>The manifester determines the environment within the demiplane when you first manifest this power, reflecting almost any desire you can visualize. You determine factors such as atmosphere, water, temperature, and the general shape of the terrain. This power cannot create life (including vegetation), nor can it create construction (such as buildings, roads, wells, dungeons, and so forth). You must add these things in some other fashion if you desire. Once the basic demiplane reaches its maximum size, you can continue to manifest this power to enlarge the demiplane, adding another 180 feet of radius to the demiplane each time.</p>
<p>Manifesting this power causes the manifester to take 7 points of CON damage. This damage cannot be recovered while you are continuing to manifest this power.</p>';
        $helper->addTypesToPower($power, ['Metacreativity'], 9);
    }
}
