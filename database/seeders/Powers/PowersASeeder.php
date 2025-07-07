<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersASeeder extends Seeder
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
        $power->name           = 'Acid';
        $power->action_type    = 'Action';
        $power->targets        = 'Any one target within range';
        $power->range          = '5 feet';
        $power->save_attribute = 'DEX';
        $power->duration       = 'Instantaneous';
        $power->description    = "<p>You are able to produce Acid from some part of your body.</p>
<p>While you have the ability to produce Acid, you are not immune to your own Acid. Due to this, most manifest this power by spitting the Acid from one's mouth, dealing 4D6 Acid damage on a successful hit. The target continues to take half of the initial damage every round for no more than 2 rounds until the target succeeds on a DEX Save, or is doused with water.</p>
<p>If you choose to manifest your Acid from your hands or claws, they are coated with Acid for 1 minute and they deal an extra 2D6 Acid damage (Note, you suffer the Acid damage every round).</p>
<p>If you have the Acid Immunity feat, you are immune to your own Acid (although your equipment will not be).</p>";
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism', 'Acid'], 2);

        $power              = new Power;
        $power->name        = 'Absorb Weapon';
        $power->action_type = 'Triple Action';
        $power->targets     = 'Self';
        $power->duration    = 'Until discharged or 24 hours';
        $power->description = '<p>You can absorb one weapon of up to 5 lbs into your body and a small tattoo that resembles the item absorbed appears on the skin of your arm. The absorbed item is undetectable by normal means, although the effect is detectable via Detect Psionics. The item can be discharged as an Action and the weapon is automatically equipped. You must be capable of holding the weapon or it falls to your feet (such as if you had no hands free). If the effect ends without being discharged, the item falls to your feet.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the weight of the item by 5 lbs</dd>
    <dt>Heightened (+1)</dt> <dd>You can absorb a suit of armor or a shield instead of a weapon (you must still spend enough Power Points for the weight requirement). When discharged, the shield or armor is automatically equipped, so long as you are capable of equipping the item.</dd>
    <dt>Heightened (+1)</dt> <dd>You can store an additional item. All stored items are discharged at the same time (you must still spend enough Power Points for the weight requirement).</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 1);

        $power              = new Power;
        $power->name        = 'Adapt Body';
        $power->action_type = 'Triple Action';
        $power->targets     = 'Self';
        $power->duration    = '12 hours';
        $power->description = '<p>Your body automatically adapts to hostile environments. You can adapt to underwater, extreme heat, extreme cold, or airless environments, allowing you to survive as if you were a creature native to that environment. You can breathe and move (though penalties to movement and attacks if any for a particular environment remain), and you take no damage simply from being in that environment. You need not specify what environment you are adapting to when you manifest this power; simply activate it, and your body will instantly adapt to any hostile environment as needed throughout the duration.</p>
<p>You can somewhat adapt to extreme environmental features such as Acid, Lava, Fire, and Electricity. Any environmental feature that normally deals 1 or more dice of damage per round deals you only half the usual amount of damage.</p>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 5);

        $power              = new Power;
        $power->name        = 'Air Walk';
        $power->action_type = 'Action';
        $power->targets     = 'Self';
        $power->duration    = '30 minutes';
        $power->description = '<p>You can tread on air as if walking on solid ground.</p>
<p>Moving upward is similar to walking up hill. The maximum upward or downward angle possible is 45 degrees, at a rate equal to half your normal speed.</p>
<p>You can be affected by the wind if it is strong (21+ mph), pushing you in the direction the wind is blowing. You are pushed 5 feet for each 5 miles per hour of wind speed in the direction the wind is blowing. You can make a STR (Athletics) check each round to combat the effects of the wind.</p>
<dl>
    <dt>Success</dt> <dd>You only move half the distance the wind pushes you</dd>
    <dt>Critical Success</dt> <dd>You are not moved by the wind</dd>
    <dt>Failure</dt> <dd>You are moved by the wind</dd>
    <dt>Critical Failure</dt> <dd>As Failure, plus you lose your footing and must spend an Action to regain it. You suffer a -3 penalty to this check until you successful stand.</dd>
</dl>
<p>You suffer falling damage if you should be pushed by the wind into a solid object, but treat half of the pushed distance as the fall distance (ie, 20 feet of push equals 10 foot fall damage).</p>
<p>The power does not end suddenly, and should you still be in the air when the time expires, you float down 60 feet per round for 1 minute. If you reach the ground in that time, you take no damage. Having this power dispelled also causes it to fade slowly, however, you fall immediately in an Antimagic Field.</p>
<p></p>';
        $power->heightened = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
    <dt>Heightened (+1)</dt> <dd>You target others with a range of Touch</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis'], 3);

        $power              = new Power;
        $power->name        = 'Animal Sight';
        $power->action_type = 'Action';
        $power->display     = 'Visual';
        $power->targets     = 'Self';
        $power->duration    = '3 hours';
        $power->description = '<p>You gain Darkvision</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 and Power Point cost by 1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 2);

        $power                 = new Power;
        $power->name           = 'Apopsi';
        $power->action_type    = 'Triple Action';
        $power->display        = 'Auditory, Visual';
        $power->requirements   = 'The target must have lost at least 6 points of ability damage from Psionic Combat powers';
        $power->range          = '60 feet';
        $power->targets        = 'One living psionic creature';
        $power->duration       = 'Instantaneous';
        $power->save_attribute = 'CHA';
        $power->description    = "<p>By using this power, you delete 1d4 powers permanently from the target's mind. You specify the level of each power, and the game master randomly determines which of the target’s powers is actually deleted. Psychic chirurgery or reality revision can be used to restore the lost powers, but it must be performed within 1 week of losing the powers.</p>
<p>Manifesting this power causes the manifester to take 7 points of CON damage.</p>";
        $power->saves = '<dl>
    <dt>Success</dt> <dd>The target resists and does not lose any powers</dd>
    <dt>Failure</dt> <dd>The target lose powers at random</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Ability Damage'], 9);

        $power              = new Power;
        $power->name        = 'Astral Construct';
        $power->action_type = 'Triple Action';
        $power->display     = 'Visual';
        $power->range       = '50 feet';
        $power->duration    = 'Concentration, up to 10 rounds';
        $power->description = '<p>This power creates one 1st-level astral construct of solidified ectoplasm that attacks your enemies. It appears where you designate and acts immediately, on your turn. It attacks your opponents to the best of its ability. As a free action, you can mentally direct it not to attack, to attack particular enemies, or to perform other actions. The astral construct acts normally on the last round of the power’s duration and dissipates at the end of its turn.</p>
<p>Astral constructs are not summoned; they are created on the plane you inhabit (using ectoplasm drawn from the Astral Plane). Thus, they are not target to effects that hedge out or otherwise affect outsiders; they are constructs, not outsiders.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the level of the astral construct by 1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Construct', 'Astral'], 1);

        $power              = new Power;
        $power->name        = 'Astral Caravan';
        $power->action_type = '1 hour';
        $power->targets     = 'Self';
        $power->duration    = 'See text';
        $power->description = "<p>You lead a caravan into the Astral Plane, leaving the Material Plane behind. Since the Astral Plane touches upon other planes, you can travel astrally to any of these other planes as you wish, but only if you know your way (see below).</p>
<p>You can bring other willing creatures with you, provided that these subjects have each manifested astral traveler and are linked hand to hand with you at the time of the astral caravan’s manifestation. These fellow travelers are dependent upon you and must accompany you at all times. If something happens to you during the journey that causes you to break hand-to-hand contact, your companions are stranded wherever you leave them. Because the planes are a dangerous place, those who lead astral caravans usually choose to manifest this power only if they have a large party of travelers assembled. Sometimes groups of lower-level adventurers may hire you to lead forays beyond the Material Plane.</p>
<p>The astral caravan power lasts while you and your fellow travelers maintain your original formation, until:</p>
<ul>
    <li>You reach your intended destination plane</li>
    <li>You desire to end the power while still traversing the Astral Plane</li>
    <li>You or anyone traveling with you breaks the hand-to-hand chain connecting the travelers for 2 consecutive rounds</li>
    <li>The power is terminated by some outside means, such as dispel Psionics. When the power ends, you and your fellow travelers halt in whatever portion of the Astral Plane you happen to be traversing (the Astral Plane is in many ways subjective in location; in any event, one place on the Astral looks much like any other).</li>
</ul>
<p>While you are traveling through the Astral Plane, those natives who happen to glimpse you and your fellow travelers perceive you to be moving at a speed of 30 feet (you can’t run), with you flying in the lead and your fellow travelers strung out behind you, each linked to the next by one hand.</p>
<p>Depending on your knowledge of the planes, your journey through the subjective space that is the Astral Plane may take a longer or shorter period of time. For each 24 hours you travel, make a Knowledge (planes) check. Unless a location is particularly hard to find and well guarded, or conversely easy to find and well advertised, the average DC for an astral caravan journey should be set at 20. You cannot take 20 on this check, though you can take 10. Each check may be modified by your degree of familiarity with the destination or by some connection you have with the place; see the following tables.</p>
<p>Each successful check indicates that you are one step closer to your goal. To finally arrive at your location, you must succeed on six checks within a span of 12 days. (If you fail to make six successful checks within the first 12 days, you can continue to make one check per day until you get the requisite six successes within a span of 12 consecutive days). When you successfully make the requisite number of checks, the journey ends, and you appear on your chosen plane within 10–1,000 (1d% x 10) miles of your intended destination on that plane.</p>
<table>
    <thead>
        <tr>
            <th>Destination Knowledge</th>
            <th>Arcana Check Modifier</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>None</td>
            <td>N/A</td>
        </tr>
        <tr>
            <td>Secondhand (you have heard of the destination)</td>
            <td>-10</td>
        </tr>
        <tr>
            <td>Firsthand (you have visited before)</td>
            <td>0</td>
        </tr>
        <tr>
            <td>Familiar (you have visited three or more times)</td>
            <td>+5</td>
        </tr>
    </tbody>
</table>
<p>If you have no direct knowledge of your destination, you must have some connection to it in order to travel there:</p>
<table>
    <thead>
        <tr>
            <th>Connection</th>
            <th>Arcana Check Modifier</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Likeness or picture of destination</td>
            <td>+2</td>
        </tr>
        <tr>
            <td>Object from destination</td>
            <td>+4</td>
        </tr>
        <tr>
            <td>Planar Cartographer's map of destination</td>
            <td>+10</td>
        </tr>
    </tbody>
</table>
<p>When you manifest this power in its augmented form, your apparent speed to those observing on the Astral Plane is 40 feet, and you can make an Arcana check once every 12 hours to attempt to make it to your destination (six successful checks within 12 consecutive days still sees you to your desired goal).</p>";
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>You weave a quasi-real filmy membrane around yourself and all those adjacent to each other in the caravan (being linked by hand is not required if this membrane is used). You remain visible within the translucent, amorphous enclosure. You can pick up or drop willing passengers, easily reaching through the film. Anything you hold is enveloped by the film. Any attacks made through the enclosure in either direction have a 25% miss chance due to the rippling membrane.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation', 'Astral'], 3);

        $power              = new Power;
        $power->name        = 'Astral Traveler';
        $power->action_type = '1 hour';
        $power->range       = 'Touch';
        $power->targets     = 'Creature touched';
        $power->duration    = 'See text';
        $power->description = '<p>This power allows you or a creature you touch to participate in an astral caravan created through use of the astral caravan power. While participating in a journey allowed by the astral caravan power, you must hold the hand of both your fellow passenger ahead of you (or the caravan leader) and your fellow passenger behind you (unless you happen to be the last in the hand-linked line). If you or any one of your fellow passengers breaks the hand-to-hand link for 2 consecutive rounds, the impetus through the Astral Plane provided by astral caravan fails.</p>
<p>All those who are part of the caravan who are capable of performing purely mental actions, such as manifesting a power, may do so while maintaining hand-to-hand contact with their fellow travelers. When astral travelers begin their journey, each one is connected to the Material Plane by an insubstantial silvery cord. Very few weapons exist that can damage a silvery cord.</p>
<p>The last creature in the line of those making up the caravan is sometimes referred to as the rear guard, because he or she has one hand free and can use it to wield a weapon without relinquishing his or her grip on the next traveler in line. The weightless, targetive environment of the Astral Plane allows the caravan to flex and bend as necessary to bring the rear guard’s weapon to bear.</p>';
        $helper->addTypesToPower($power, ['Psychoportation', 'Astral'], 1);

        $power              = new Power;
        $power->name        = 'Assimilate';
        $power->action_type = 'Triple Action';
        $power->range       = 'Touch';
        $power->targets     = 'One living creature touched';
        $power->duration    = 'Instantaneous and 1 hour';
        $power->description = "<p>Your pointing finger turns black as obsidian. A creature touched by you is partially assimilated into your form and takes 20d6 points of damage. Any creature reduced to 0 or fewer hit points by this power is killed, entirely assimilated into your form, leaving behind only a trace of fine dust. An assimilated creature's equipment is unaffected.</p>
<p>A creature that is partially assimilated into your form (that is, a creature that has at least 1 hit point following your use of this power) grants you a number of temporary hit points equal to half the damage you dealt for 1 hour.</p>
<p>A creature that is completely assimilated grants you a number of temporary hit points equal to the damage you dealt and a +4 bonus to each of your ability scores for 1 hour. If the assimilated creature knows psionic powers, you gain knowledge of one of its powers for 1 hour. You gain some semblance of a creature you completely assimilate for 1 hour, granting you a +10 bonus on Disguise checks made to appear as that creature during that time.</p>";
        $helper->addTypesToPower($power, ['Psychometabolism'], 9);

        $power               = new Power;
        $power->name         = 'Astral Seed';
        $power->action_type  = '10 minutes';
        $power->display      = 'Material; see text';
        $power->requirements = 'You must have the Ectoplasmic Creation power';
        $power->range        = '0 feet';
        $power->duration     = 'Instantaneous';
        $power->description  = "<p>This power weaves strands of astral ectoplasm into a crystal containing the seed of your living mind (hardness 1 and 1 hit point). You can have only one astral seed in existence at any one time. Until such time as you perish, the astral seed (also called the storage crystal) is utterly inert. If you are slain at some later date, your soul transfers into the storage crystal, which begins to dimly glow.</p>
<p>Upon transference, your physical remains (should they still exist) become inert matter and cannot thereafter be restored to life. The transfer from the slain body to the astral seed works over any distance, physical or extradimensional.</p>
<p>Once your body’s physical demise activates the storage crystal, you have the abilities of a psicrystal of the appropriate level, plus all the powers you knew and the maximum power points you possessed when astral seed was manifested—but you also have a negative level that cannot be healed and that does not convert to real level loss in your current crystalline form. You have thirty days to grow an organic body, after which time your sentience fades and your soul passes on if it hasn’t entered a new body.</p>
<p>To grow a body, you (in the storage crystal) must spend ten days in uninterrupted solitude. The body’s constituent parts are pulled as ectoplasm from the Astral Plane, then slowly molded and transformed into a living, breathing body that is an exact duplicate of your body at the time you manifested astral seed (the crystal itself breaks down and becomes a part of the new organic body). When the tenth day ends, you completely and totally inhabit the new body. You possess all the abilities you possessed when astral seed was manifested, at one level lower, but you have none of your equipment.</p>
<p>If the body is struck for any amount of damage during the ten-day period when it is growing, it is destroyed and your soul passes on.</p>
<p>Conceivably, you could manifest mind switch to utilize a temporary body, but only an evil creature would smash his own temporarily empty storage crystal to permanently usurp a target's organic body (unless the target is itself irredeemably evil).</p>";
        $helper->addTypesToPower($power, ['Metacreativity'], 8);

        $power               = new Power;
        $power->name         = 'Attraction';
        $power->action_type  = '1 hour';
        $power->display      = 'Psionic';
        $power->requirements = 'You must have a Psionic Combat Attack power';
        $power->range        = '60 ft';
        $power->duration     = '3 hours';
        $power->description  = "<p>You plant a compelling attraction in the mind of the subject. The attraction can be toward a particular person or an object. The subject will take reasonable steps to meet, get close to, attend, or find the object of its implanted attraction. For the purpose of this power, \"reasonable\" means that, while attracted, the subject doesn't suffer from blind obsession. They will act on this attraction only when not engaged in combat. The subject won't perform obviously suicidal actions. They can still recognize danger but will not flee unless the threat is immediate. If you make the subject feel an attaction to yourself, you can't command them indiscriminately, although they will be willing to listen to you (even if they disagree). This power grants you a +3 bonus to any interaction checks you make involving the subject.</p>";
        $power->heightened   = '<dl>
    <dt>Heightened (+2)</dt> <dd>The DC increases by 1 and the bonus to interaction checks increase by 1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 1);

        $power              = new Power;
        $power->name        = 'Aura Alteration';
        $power->action_type = 'Triple Action';
        $power->display     = 'Material';
        $power->range       = '30 feet';
        $power->targets     = 'One willing creature';
        $power->duration    = '3 hours or Instantaneous, see text';
        $power->description = "<p>You can use this power in one of two ways, to disguise the target's aura (alignment) and level, or to remove a Compulsion or Charm effect from the target.</p>
<dl>
    <dt>Disguise</dt> <dd>If you use this power to disguise the subject's alignment and level, the power has a duration of 2 hours. You can change the subject's alignment by only one step. You can adjust the subject's apparent level up or down by a number equal to one-half your own level (rounded down) or less</dd>
    <dt>Remove Compulsion</dt> <dd>If you use this power to attempt to cleanse the subject's aura of a baleful or controlling effect, the duration is Instantaneous. This power can remove the Compulsion of a Curse or Geas/Quest effect. When this power is manifested for this purpose, the subject gains another Save to remove the Compulsion afflicting it against the original Save DC, but with a +2 bonus.</dd>
</dl>";
        $power->heightened = "<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by +10 minutes</dd>
    <dt>Heightened (+2)</dt> <dd>The subject's alignment shifts an additional step</dd>
</dl>";
        $helper->addTypesToPower($power, ['Telepathy'], 6);

        $power              = new Power;
        $power->name        = 'Aura Sight';
        $power->action_type = 'Double Action';
        $power->display     = 'Visual';
        $power->area        = '60-ft Cone-shaped emanation';
        $power->targets     = 'Self';
        $power->duration    = 'Concentration, up to 1 hour';
        $power->description = '<p>As the spell Detect Alignment, except as noted here.</p>';
        $helper->addTypesToPower($power, ['Clairsentience'], 4);

        $power               = new Power;
        $power->name         = 'Aversion';
        $power->action_type  = '1 hour';
        $power->display      = 'Psionic';
        $power->requirements = 'You must have a Psionic Combat Attack power';
        $power->range        = '60 ft';
        $power->duration     = '3 hours';
        $power->description  = '<p>You plant a powerful aversion in the mind of the subject. If the object of the implanted aversion is an individual or a physical object, they will prefer not to approach within 30 feet of it. If it is a word, they will try not to utter it; if it is an action, they will not willing attempt to perform it; and if it is an event, they will not willingly attend it. The subject will take reasonable steps to avoid the object of its aversion, but will not put themselves in jeopardy by doing so.</p>
<p>If the subject is forced into taking an action that they have an aversion to, they take a -2 penalty on any attack rolls, ability checks, or skill checks involved.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The DC increases by 1 and the bonus to interaction checks increase by 1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 2);

        $power              = new Power;
        $power->name        = 'Awareness';
        $power->action_type = 'Triple Action';
        $power->display     = 'Olfactory';
        $power->targets     = 'Self';
        $power->duration    = '10 minutes';
        $power->description = '<p>You gain a minor insight into the future, gaining a +2 insight bonus on all WIS skill checks, WIS ability checks, and WIS Saves.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>The Action type becomes Free Action.</dd>
    <dt>Heightened (+3)</dt> <dd>Increase the bonus by +1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Clairsentience'], 1);
    }
}
