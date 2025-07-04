<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersOSeeder extends Seeder
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
        $power->name        = 'Object Reading';
        $power->action_type = 'Special (1 minute)';
        $power->display     = 'Auditory, Material';
        $power->range       = 'Touch';
        $power->targets     = 'Object touched';
        $power->duration    = 'Concentration, up to 30 minutes';
        $power->description = "<p>You can learn details of an inanimate object’s previous owner. Objects accumulate psychic impressions left by their previous owners, which can be read by use of this power. The amount of information revealed depends on how long you study a particular object.</p>
<dl>
    <dt>1st minute</dt> <dd>Last owner's race</dd>
    <dt>2nd minute</dt> <dd>Last owner's gender</dd>
    <dt>3rd minute</dt> <dd>Last owner's age</dd>
    <dt>4th minute</dt> <dd>Last owner's alignment</dd>
    <dt>5th minute</dt> <dd>How last owner gained and lost the object</dd>
    <dt>6th minute</dt> <dd>Next-to-last owner's race (and so on)</dd>
</dl>
<p>The power always correctly identifies the last owner of the item, and the original owner (if you keep the power active long enough).</p>
<p>There is a 90% chance that this power will successfully identify all other former owners in sequence, but there is a 10% chance that one former owner will be skipped and thus not identified.</p>
<p>This power will not identify casual users as owners. (Anyone who uses an object to attack someone or something is not thereafter considered a casual user.)</p>
<p>An object without any previous owners reveals no information. You can continue to run through a list of previous owners and learn details about them as long as the power’s duration lasts. If you use this power additional times on the same object, the information yielded is the same as if you were using the power on the object for the first time.</p>";
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by 10 minutes</dd>
</dl>';
        $helper->addTypesToPower($power, ['Clairsentience'], 2);

        $power              = new Power;
        $power->name        = "Out of Time's Grip";
        $power->action_type = 'Double Action';
        $power->range       = 'Touch';
        $power->targets     = 'Creature touched';
        $power->duration    = '8 hours';
        $power->description = "<p>Time does not actually pass on the Astral Plane, but it catches up with an individual once they leave the Astral Plane. This power was created by the githyanki to enable them to leave the Astral for short periods without feeling the effects of the time that they've cheated.</p>
<p>For the duration of the power, the recipient can operate freely on any plane without worrying about retroactive aging for the time that was spent on the Astral. If they stay off the Astral longer than the duration, time immediately catches up with them and they instantly age all the time that they spent on the Astral, as normal. A successful manifestation of Dispel Psionics will cause the power's effect to end.</p>";
        $power->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation', 'Time'], 4);
    }
}
