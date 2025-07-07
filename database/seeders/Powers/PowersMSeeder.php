<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersMSeeder extends Seeder
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
        $power->name        = 'Matter Agitation';
        $power->action_type = 'Double Action';
        $power->display     = 'Auditory, Material';
        $power->range       = '60 foot range';
        $power->area        = '2 square foot';
        $power->targets     = 'object or creature';
        $power->duration    = 'Concentration, up to 5 minute';
        $power->description = '<p>You can excite the structure of a nonpsionic, nonmagical object, heating it to the point of combustion over time. The agitation grows more intense the longer you concentrate on the power.</p>
<dl>
    <dt>1st round</dt> <dd>Readily flammable material (paper, dry grass, tinder, torches) ignites. Skin reddens (1 point of damage)</dd>
    <dt>2nd round</dt> <dd>Wood smolders and smokes, metal becomes hot to the touch, skin blisters (1D4 points of damage), hair smolders, water boils</dd>
    <dt>3rd and subsequent rounds</dt> <dd>Wood ignites, metal scorches (1D4 points of damage for those holding metallic objects). Skin burns and hair ignites (1D6 points of damage), lead melts.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Fire'], 1);

        $power               = new Power;
        $power->name         = 'Matter Manipulation';
        $power->action_type  = 'Double Action';
        $power->display      = 'Auditory, Mental';
        $power->requirements = 'You must have the Matter Agitation power';
        $power->range        = '60 foot range';
        $power->area         = '15 cubic foot of inanimate material';
        $power->duration     = 'Instantaneous';
        $power->description  = '<p>You can weaken or strengthen the substance of an object or structure. You can affect both mundane and magical inanimate material. Weakening an object’s substance decreases its hardness and hit points, and strengthening it increases its hardness and hit points. You can increase or decrease an object’s hardness by up to 5 from its original hardness. When hardness increases, the object (or portion of an object) gains 3 hit points per inch of thickness for every point of increased hardness. When hardness decreases, the object (or portion of an object) loses 2 hit points per inch of thickness for every point of decreased hardness (to a minimum of 1 hit point per inch of thickness).</p>
<p>You can’t decrease the hardness of an object that already has hardness 0.</p>
<dl>
    <dt>Working Manipulated Metals</dt> <dd>An object or portion thereof whose hardness is decreased or increased is permanently changed. Even hardening adamantine to 25 is possible. You can also harden or weaken a preforged weapon, a suit of armor, or some other finished item.</dd>
</dl>
<p>Manifesting this power cause the manifester to take 1 point of CON damage for each point of hardness changed.</p>';
        $helper->addTypesToPower($power, ['Psychokinesis'], 8);

        $power               = new Power;
        $power->name         = 'Memory Modification';
        $power->action_type  = '10 minutes';
        $power->display      = 'Mental';
        $power->requirements = 'The target must have at least 6 point of ability damage from Psionic Combat';
        $power->targets      = 'One creature';
        $power->duration     = 'Permanent';
        $power->description  = '<p>You reach into the targets mind and alter memories. You can do the following.</p>
<ul>
    <li>Eliminate all memory of an event the subject actually experienced. This cannot negate Charm, Geas, Suggestion, or similar spells</li>
    <li>Allow the subject to recall with perfect clarity an event it actually experienced</li>
    <li>Change the details remembered of an event the subject actually experienced</li>
    <li>Implant a memory of an event the subject never experienced.</li>
    <li>Cause the subject to "forget" some level of training. The target gains the Enervated 1 condition. You may Enervate a subject multiple times, causing the subject to gain a higher Enervated level, but the Enervated level cannot exceed 1/3 your Class level (rounded up)</li>
</ul>';
        $helper->addTypesToPower($power, ['Telepathy', 'Ability Damage'], 3);

        $power              = new Power;
        $power->name        = 'Mental Augmentation';
        $power->action_type = 'Action';
        $power->targets     = 'Self';
        $power->display     = 'Visual';
        $power->duration    = '10 minutes';
        $power->description = '<p>You boost one of your mental ability scores (INT, WIS, CHA). The power grants a +4 enhancement bonus to the abilty score you choose.</p>
<p>You can manifest this power and have multiple instances active. Each instance must enhance a different ability score.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
    <dt>Heightened (+5)</dt> <dd>Increase the bonus by an additional +4.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 2);

        $power              = new Power;
        $power->name        = 'Metaconcert';
        $power->action_type = 'Special (1 minute)';
        $power->display     = 'Visual';
        $power->range       = '20 feet';
        $power->targets     = 'You and up to nine other willing psionic creatures in range';
        $power->duration    = '10 minutes';
        $power->description = '<p>You link your psychic might with other psionic creatures, creating an entity more powerful than the sum of its parts.</p>
<p>When you manifest this power, a number of power points you designate flows from each participant into a collective pool. One individual is chosen as the metaconcert conductor by mutual consent of the other participants (this is usually the manifester, but doesn’t have to be). Until the power ends, this conductor directs the efforts of the group. Misty strands of glowing power link the brows of all the participants in a complex and shifting pattern.</p>
<p>All the powers of each participant are known to the mental entity created with metaconcert (which is under the conductor’s command). This entity can’t take any more actions than a normal individual, but it manifests all its powers more effectively. Each participant contributing to the entity provides a cumulative +1 bonus to save DCs that apply when manifesting a power or using a psi-like ability. Likewise, each individual provides a cumulative +1 bonus when the entity makes its own saving throws in response to powers or psi-like abilities.</p>
<p>If the psionic entity takes ability damage from a psionic attack the total is divided among all the members as determined by the conductor.</p>
<p>If the entity manifests a power that has an XP cost, all the participants pay an equal share (the conductor pays the remainder if the cost can’t be divided evenly).</p>
<p>Once linked, the participants must remain within a 20-foot-radius area, and as a group can move at a speed of 10 feet. If a participant moves outside the 20-foot-radius area occupied by the others (whether willingly or involuntarily), that individual drops out of the group, and the power point pool of the metaconcert is instantly recalculated.</p>
<p>All participants who leave before a metaconcert ends or is dismissed reclaim a number of power points equal to the current power point pool divided by the number of members. If the conductor drops out, the power ends. That same number of points is removed from the power point pool.</p>
<p>When a metaconcert ends normally or is dismissed, remaining power points in the pool are divided among all the participants (the conductor receives the remainder if the points can’t be divided evenly).</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by an additional 1 minute</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 5);

        $power               = new Power;
        $power->name         = 'Metafaculty';
        $power->action_type  = 'Special (1 hour)';
        $power->display      = 'Mental, Olfactory, Visual';
        $power->requirements = 'You must have the Divination power';
        $power->targets      = 'Self';
        $power->duration     = 'Instantaneous';
        $power->description  = "<p>You elevate your mind to a near-universal consciousness, cogitating countless impressions and predictions involving any creature you have seen before, whether personally or by means of another power such as remote viewing.</p>
<p>This process gives you an uncannily accurate vision of the creature's nature, activities, and whereabouts. When you manifest the power, you learn the following facts about the creature.</p>
<ul>
    <li>Its name, race, alignment, and character class</li>
    <li>A general estimate of its level or Hit Dice: low (5 HD or lower), medium (6 to 11 Hd), high (12 to 20 HD), very high (21 HD to 40 HD), or deific (41 HD or higher)</li>
    <li>Its location (including place of residence, town, country, world, and plane of existence)</li>
    <li>Significant items currently in its possession</li>
    <li>Any significant activities or actions the creature has undertaken in the previous 8 hours, including details such as locales traveled through, the names or races of those the creature fought, spells it cast, items it acquired, and items it left behind (including the location of those items).</li>
    <li>A current mental view of the creature, as described in the remote viewing power, which you can maintain for up to 1 minute per level.</li>
</ul>
<p>Metafaculty can defeat spells, powers, and special abilities such as screen or mind blank (or even a wish spell) that normally obscure clairsentience powers. You can attempt a caster level check (DC 6 + caster level of the creator of the obscuring effect) to defeat these sorts of otherwise impervious defenses.</p>
<p>Metafaculty is defeated by epic powers, epic spells, and epic special abilities that obscure divinations and clairsentience powers.</p>
<p>Manifesting this power causes the manifester to take 5 points of CON damage.</p>";
        $helper->addTypesToPower($power, ['Clairsentience'], 9);

        $power              = new Power;
        $power->name        = 'Metamorphosis';
        $power->action_type = 'Double Action';
        $power->display     = 'Material, Olfactory';
        $power->targets     = 'Self';
        $power->duration    = '1 hour';
        $power->description = '<p>You can simulate the effects of the following spells</p>
<ul>
    <li>Humanoid Form</li>
    <li>Pest Form</li>
    <li>Animal Form</li>
    <li>Aerial Form</li>
</ul>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>
        <p>You can simulate the effects of the following spells</p>
        <ul>
            <li>Plant Form</li>
            <li>Elemental Form</li>
            <li>Ooze Form</li>
        </ul>
    </dd>
    <dt>Heightened (+4)</dt> <dd>
        <p>You can simulate the effects of the following spells</p>
        <ul>
            <li>Dragon Form</li>
            <li>Slaad Form</li>
            <li>Demon Form</li>
            <li>Devil Form</li>
            <li>Yugoloth Form</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 4);

        $power              = new Power;
        $power->name        = 'Microcosm';
        $power->action_type = 'Triple Action';
        $power->display     = 'Material';
        $power->targets     = 'One creature; or one or more creatures';
        $power->range       = '60 foot range';
        $power->area        = '15-ft Radius emanation';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>This power enables you to warp the consciousness and senses of one or more creatures, sending the victim into a catatonic state. When microcosm is manifested, you can target either a single creature within range or a group of creatures all located within the power’s area.</p>
<dl>
    <dt>Single Target</dt> <dd>If microcosm targets a single creature, that creature’s senses are pinched off from the real world if it currently has 10 points of ability damage. The subject’s senses are all completely fabricated from within its own mind, though it may not realize this. In reality, the subject sprawls limply, drooling and mewling, and eventually dies of thirst and starvation without care. The subject lives within its own made-up world until the time of its actual death.</dd>
    <dt>Area Effect</dt> <dd>If microcosm is manifested on an area, it sends all affected creatures into a shared catatonia (the world is a construct, but within the world, the victims can interact with each other). It affects only creatures that currently have 12 points of ability damage. This version of manifestation cannot affect with more than 5 HD or more.</dd>
</dl>
<p>Manifesting microcosm a second time on an affected creature turns its sensory pathways outward once more. Otherwise, only very potent powers (such as psychic chirurgery or reality revision) or similar effects (such as miracle or wish) can undo the mental crosswiring that this power brings about.</p>';
        $helper->addTypesToPower($power, ['Telepathy'], 9);

        $power              = new Power;
        $power->name        = 'Mind Blank';
        $power->action_type = 'Triple Action';
        $power->display     = 'Olfactory';
        $power->targets     = 'Self';
        $power->duration    = '8 hour';
        $power->description = '<p>You are protected from all devices, powers, and spells with the Compulsion trait, read emotions, or thoughts, and all Psionic Combat attacks. It also prevents scrying effects that require some knowledge of the target, such as a name.</p>
<p>Mind Blank even foils Bend Reality, Limited Wish, Miracle, Reality Revision, and Wish when they are used in such a way as to affect the subject (as these effects cannot find the target to affect them). However, Metafaculty can pierce the protective quality of this power.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>You may target others out to a range of 60 feet.</dd>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 7);

        $power                 = new Power;
        $power->name           = 'Mind Probe';
        $power->action_type    = 'Special (1 minute)';
        $power->display        = 'Auditory, Material, Visual';
        $power->requirements   = 'You must have at least one Psionic Combat attack power';
        $power->range          = '30 feet';
        $power->targets        = 'One creature';
        $power->save_attribute = 'CHA';
        $power->duration       = '1 minute';
        $power->description    = "<p>All the subject's memories and knowledge are accessible to you, from memories deep below the surface to those still easily called to mind. You can learn the answer to one question per round, to the best of the subject's knowledge. If the subject succeeds on a WIS Save, it is not required to answer the question; however, making a save does not end the power. You can ask the subject a new question (or the same question) in subsequent rounds for as long as the power's duration persists.</p>
<p>You can probe a sleeping subject and automatically get an answer to your question. If the subject then succeeds on a WIS Save, it wakes after providing the answer and thereafter can resist answering by making WIS Saves as described above.</p>
<p>Subjects that do not wish to be probed can attempt to move beyond the power’s range, unless they are somehow hindered. You pose the questions telepathically, and the answers to those questions are imparted directly to your mind. You and the subject do not need to speak the same language, though less intelligent creatures may yield up only appropriate visual images in answer to your questions.</p>";
        $helper->addTypesToPower($power, ['Telepathy'], 5);

        $power                 = new Power;
        $power->name           = 'Mind Seed';
        $power->action_type    = 'Triple Action';
        $power->requirements   = 'The target must have lost at least 10 points of ability damage from Psionic Combat';
        $power->display        = 'Mental';
        $power->range          = 'Touch';
        $power->targets        = 'One touched medium or smaller humanoid';
        $power->save_attribute = 'CHA';
        $power->duration       = 'Instantaneous; see text';
        $power->description    = '<p>You impress the totality of your psyche into a subject\'s subconscious. If successfully implanted, the seed of your mind "germinates" over a period of time. During this time, the subject begins to unconsciously take on your mannerisms.</p>
<p>When intgration is complete, the subject becomes you in mind. The subject does not have any of your physical ability scores, but does have your INT, WIS, and CHA.</p>
<p>While the subject initially your mental duplicate, the two personalities diverge over time. Although the subject starts off with memories of your experience, it posseses its original "soul" and physical body and is free to develop its own personality based on its own new experiences. Thus the subject is not your slave or servant, but instead a nonplayer character in its own right that shares your earlier memories.</p>
<p>Protection from Evil or a similar spell or power can prevent you from implanting mind seed, or prevent a seed from germinatiing while the protective power lasts. Otherwise, a germinating seed can be removed (prior to germination) only by Psychic Chiurgery, Reality Revision, or similar high-level effects. Manifesting mind seed again during the germination period also cleanses the subject\'s mind.</p>
<p>Manifesting this power cause the manifester to take 2 points of CON damage.</p>';
        $helper->addTypesToPower($power, ['Telepathy', 'Ability Damage'], 8);

        $power                 = new Power;
        $power->name           = 'Mind Switch';
        $power->action_type    = '1 minute';
        $power->requirements   = 'The target must have suffered at least 10 points of ability damage from Psionic Combat';
        $power->display        = 'Visual';
        $power->range          = '60 feet';
        $power->targets        = 'You and one other creature';
        $power->save_attribute = 'CHA';
        $power->duration       = '1 hour';
        $power->description    = "<p>You can attempt to take control of a nearby living creature, forcing your mind (and soul) into its body, and its mind into your body. You can target any creature whose Hit Dice are equal to or less than your manifester level.</p>
<p>You possess the target’s body and force the creature's mind into your body unless it succeeds on a WIS Save. You can move your mind back into your own body whenever you desire, which returns the subject’s mind to its own body and ends the power. If the manifestation succeeds, your life force occupies the host body, and the host’s life force takes over yours.</p>
<p>You can call on rudimentary or instinctive knowledge of the subject creature, but not upon its acquired or learned knowledge (such as skills and feats it possesses). The same is true for the subject in your body. The mind switch brings about the following changes.</p>
<ul>
    <li>You gain the type of your assumed body</li>
    <li>You gain the STR, DEX, and CON scores of your assumed body</li>
    <li>You gain the Natural Armor, Natural Attacks, Movement, and other physical characteristics of your assumed body</li>
    <li>You gain teh Extraordinary special attacks and qualities of your assumed body, but you do not gain Supernatural or spell-like abilities</li>
    <li>You gain the possessions and equipment of your assumed body</li>
    <li>You retain your own Hit Points, Class Features, Supernatural and Spell-like abilities, spells and powers, and skills and feats (although skill checks use your new ability scores, and you may be temporarily unable to use feats whose requirements you do not meet in your new body)</li>
</ul>
<p>Supernatural abilities that require a certain body part may be unavailable to your new form.</p>
<p>If either body is killed while the power is in effect, the other participant also dies when the power ends. If one participant's body becomes petrified, imprisoned by Temporal Stasis or Imprisonment, or incapacitated in some other way, the other participant will be incapacitated in that way when the power ends.</p>
<p>A targeted Dispel Psionics successfully manifested on either participant cause both minds to return to their original bodies.</p>
<p>Manifesting this power causes the manifester to take 1 point of INT, WIS, and CHA damage.</p>";
        $power->heightened = '<dl>
    <dt>Heightened (+6)</dt> <dd>
        <ul>
            <li>The duration becomes Permanent and cannot be dispelled.</li>
            <li>The target must have suffered at least 12 points of ability damage</li>
            <li>You suffer 4 points of INT, WIS, CHA damage</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Ability Damage'], 6);

        $power              = new Power;
        $power->name        = 'Mind Trap';
        $power->action_type = 'Action';
        $power->display     = 'Auditory';
        $power->targets     = 'Self';
        $power->duration    = '1 round';
        $power->description = '<p>You set up a trap in your mind against psionic intruders. Anyone who attacks you with a Telepathy power immediately loses 1D6 Power Points and 1 point of ability damage to either INT, WIS, CHA (your choice). This power\'s effect does not negate the power that is currently being used against you.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by 1 round</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 2);

        $power              = new Power;
        $power->name        = 'Mindlink';
        $power->action_type = 'Action';
        $power->range       = '60 feet';
        $power->display     = 'Mental';
        $power->targets     = 'You and one other willing creature within range';
        $power->duration    = '1 hour';
        $power->description = '<p>You forge a telepathic bond with your target that has an INT score of 3 or higher. You can communicate telepathically through the bond even if you do not share a common language. No special power or influence is established as a result of the bond. Once the bond is formed, it works over any distance (although not from one plane to another).</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the number of creatures you can link by +1</dd>
    <dt>Heightened (+4)</dt> <dd>You can attempt a telepathic bond with an unwilling target (CHA Save negates. Requires 1 point of ability damage)</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 3);

        $power              = new Power;
        $power->name        = 'Missive';
        $power->action_type = 'Action';
        $power->display     = 'Mental';
        $power->range       = '60 feet';
        $power->targets     = 'One creature';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>You send a telepathic message of up to ten words to any living creature within range. Missive is strictly a one-way exchange from you to the subject. If you do not share a common language, the subject “hears” meaningless mental syllables.</p>';
        $helper->addTypesToPower($power, ['Telepathy'], 1);
    }
}
