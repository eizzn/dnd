<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersPSeeder extends Seeder
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
        $power->name        = 'Photokinesis';
        $power->action_type = 'Action';
        $power->range       = '60 feet';
        $power->duration    = 'Varies';
        $power->description = "<p>You can generate light, granting you the following powers.</p>
<ul>
    <li>You can create a source of heat-less light that illuminates a 30-foot radius sphere and moves at your will at a speed of 60 feet and must be within 120 feet of you. This use has a duration of 3 hours</li>
    <li>You can create a blinding flash of light to momentarily distract an opponent. The target must make CON Save or be Dazzled 1. This use has a duration of Instantaneous.</li>
    <li>You can shoot a ray of light that deals 1 point of Light damage, or 3D6 Light damage to Undead and Evil Outsiders. This use has a duration of Instantaneous.</li>
</ul>
<p>You can make your light be treated as Sunlight to creatures with the Sunlight Sensitivity feature, or as Moonlight (although Moonlight alone is not what triggers Lycanthropy) or Starlight. With practice, you can fool observers into thinking your light is a Will o' the Wisp.</p>";
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Light damage from the ray of light by +1 or +1D6</dd>
    <dt>Heightened (+5)</dt> <dd>The blinding flash of light now causes Dazzled 2</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Light'], 1);

        $power              = new Power;
        $power->name        = 'Physical Augmentation';
        $power->action_type = 'Action';
        $power->targets     = 'Self';
        $power->display     = 'Visual';
        $power->duration    = '10 minutes';
        $power->description = '<p>You boost one of your physical ability scores (STR, DEX, or CON). The power grants a +4 enhancement bonus to hte ability score you choose.</p>
<p>You can manifest this power and have multiple instances active. Each instance must enhance a different ability score.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
    <dt>Heightened (+3)</dt> <dd>Increase the bonus by an additional +2.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 2);

        $power               = new Power;
        $power->name         = 'Plane Shift';
        $power->action_type  = 'Triple Action';
        $power->display      = 'Visual';
        $power->range        = 'Touch';
        $power->requirements = 'You must have the Teleport power';
        $power->targets      = 'Self';
        $power->duration     = 'Instantaneous';
        $power->description  = '<p>As the spell Plane Shift, except as noted here and you cannot manifest on an unwilling creature.</p>';
        $power->heightened   = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may take 2 willing creatures with you</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychoportation'], 6);

        $power              = new Power;
        $power->name        = 'Power Defense';
        $power->action_type = 'Action';
        $power->display     = 'Mental';
        $power->targets     = 'Self';
        $power->duration    = '1 round';
        $power->description = '<p>You raise a mental defense that grants a +3 bonus to CON and WIS Saves and gain Resistance to all Psionic Combat damage.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 2 and Power Point cost by 1</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the bonus to CON Saves by +1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 2);

        $power               = new Power;
        $power->name         = 'Power Leech';
        $power->display      = 'Visual';
        $power->action_type  = 'Triple Action';
        $power->requirements = 'The target must have at least 1 point of ability damage';
        $power->targets      = 'One psionic creature';
        $power->range        = '60 feet';
        $power->duration     = 'Concentration';
        $power->description  = '<p>Your brow erupts with an arc of crackling dark energy that connects with your foe, draining them of 1D6 Power Points and adding 1 of those points to your reserve (unless that gain would cause you to exceed your maximum). If you use this power as a Touch Attack, you instead drain 2D4 and you gain 2 Power Points instead. The drain continues in each round you maintain Concentration while the subject of the drain remains in range. If the subject is drained to 0 Power Points, this power ends.</p>
<p>Concentrating to maintain this power is a Triple Action instead.</p>';
        $helper->addTypesToPower($power, ['Clairsentience', 'Ability Damage'], 4);

        $power              = new Power;
        $power->name        = 'Precognition';
        $power->action_type = '1 minute';
        $power->targets     = 'Self';
        $power->duration    = '8 hours';
        $power->description = '<p>Precognition allows your mind to glimpse fragments of potential future events—what you see will probably happen if no one takes action to change it. However, your vision is incomplete, and it makes no real sense until the actual events you glimpsed begin to unfold. That’s when everything begins to come together, and you can act, if you act swiftly, on the information you previously received when you manifested this power.</p>
<p>In practice, manifesting this power grants you a “precognitive edge.” Normally, you can have only a single precognitive edge at one time. You must use your edge within the duration of the power, at which time your preknowledge fades and you lose your edge.</p>
<p>You can use your precognitive edge in a variety of ways. Essentially, the edge translates to having Advantage that you can apply at any time to either an attack roll, a damage roll, a Save, or a skill check. You can elect to apply Advantage to the roll after you determine that your unmodified roll is lower than desired.</p>';
        $helper->addTypesToPower($power, ['Clairsentience'], 1);

        $power                 = new Power;
        $power->name           = 'Psionic Blast';
        $power->action_type    = 'Double Action';
        $power->display        = 'Auditory, Mental';
        $power->range          = '30 feet';
        $power->duration       = 'Instantaneous';
        $power->save_attribute = 'WIS';
        $power->description    = '<p>You disrupt mental ability in a cone shaped blast. All in the area must make a WIS Save or be stunned.</p>';
        $power->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Stunned for 1 round</dd>
    <dt>Critical Failure</dt> <dd>Stunned for 3 rounds</dd>
</dl>';
        $power->heightened = '<dl>
    <dt>Heightened (+3)</dt> <dd>If the target fails their Save, they gained the Sluggish 2 condition for 2 rounds.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Psionic Combat'], 3);

        $power               = new Power;
        $power->name         = 'Psionic Repair';
        $power->action_type  = '10 minutes';
        $power->display      = 'Material, Olfactory';
        $power->requirements = 'You must have the Ectoplasmic Creation power';
        $power->targets      = 'One object of up to 1 lb';
        $power->duration     = 'Instantaneous';
        $power->description  = '<p>You repair a damaged object, restoring 1D4 Hit Points to the object. If the object has the Broken condition, this condition is removed if the object is restored to at least half its original Hit Points. All of the pieces of an object must be present for this power to function. Magic items can be repaired by this power, but you must have a manifester level equal to or higher than that of the object. Magic items that are destroyed (at 0 Hit Points or less) can be repaired with this power, but this power does not restore their magic abilities. This power does not affect creatures (including Constructs). This power has no effect on objects that have been warped or otherwise transmuted, but it can still repair damage done to such items.</p>';
        $helper->addTypesToPower($power, ['Metacreativity'], 1);

        $power                 = new Power;
        $power->name           = 'Psychic Chirurgery';
        $power->action_type    = 'Special (10 minutes)';
        $power->display        = 'Auditory, Mental, Visual';
        $power->range          = '60 feet';
        $power->targets        = 'One creature';
        $power->requirements   = 'The target must have suffered at least 1 point of ability damage';
        $power->save_attribute = 'CHA';
        $power->duration       = 'Instantaneous';
        $power->description    = "<p>You can repair psychic damage or grant another creature knowledge of powers you know, depending on the version of this power you manifest</p>
<dl>
    <dt>Repair Psychic Damage</dt> <dd>
        <p>You can remove any compulsions and charms affecting the subject. In fact, you can remove any instantaneous or permanent effect caused by a psychic power with psychic chirurgery. Unlike with aura alteration, these effects end or are negated as soon as this power is manifested, with no need for another saving throw.</p>
        <p>You can remove all negative levels affecting the subject, regardless of how it lost those levels, restoring it to the highest level it had previously attained. Also, you can restore levels lost to energy drain or a similar effect if the level drain occurred within a number of hours equal to your manifester level.</p>
        <p>You can also remove all psionic effects penalizing the subject's ability scores, heal all ability damage, and remove any ability drain affecting the subject. Psychic chirurgery negates all forms of insanity, confusion, the effect of such powers as microcosm, and so on, but it does not restore levels or Constitution points lost due to death.</p>
    </dd>
    <dt>Transfer Knowledge</dt> <dd>
        <p>If desired, you can use this power to directly transfer knowledge of a power you know to another psionic character. You can give a character knowledge of a power of any level that she can manifest, even if the power is not normally on the character’s power list. Knowledge of powers gained through psychic chirurgery does not count toward the maximum number of powers a character can know per level.</p>
        <p>You can modify the targets Skills, Feats, Powers, or Spells.</p>
    </dd>
    <dt>Harm Psyche</dt> <dd>
        <p>Permanently instill insanity</p>
        <p>Permanently instill Enervated 1</p>
        <p>Permanently Drain an ability score (INT, WIS, or CHA) by up to 3 points.</p>
    </dd>
</dl>
<p>Manifesting this power causes the manifester to take 7 points of CON damage.</p>";
        $helper->addTypesToPower($power, ['Telepathy', 'Ability Damage'], 9);

        $power                 = new Power;
        $power->name           = 'Psychic Crush';
        $power->action_type    = 'Double Action';
        $power->display        = 'Auditory';
        $power->requirements   = 'The target must have lost at least 3 points of ability damage from Psionic Combat powers';
        $power->range          = '60 feet';
        $power->targets        = 'One creature';
        $power->save_attribute = 'CHA';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>Your will abruptly and brutally crushes the mental essence of any one creature, debilitating its acumen. The target must make a CHA Save with a +4 bonus.</p>';
        $power->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target takes no damage</dd>
    <dt>Success</dt> <dd>The target takes 3D6 psychic damage</dd>
    <dt>Failure</dt> <dd>The target gains the Dying 1 condition</dd>
    <dt>Critical Failure</dt> <dd>The target gains the Dying 2 condition</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy', 'Ability Damage'], 5);

        $power                 = new Power;
        $power->name           = 'Psychic Drain';
        $power->action_type    = 'Double Action';
        $power->range          = 'Touch';
        $power->save_attribute = 'WIS';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>You touch drains psychic energy from a touched target.</p>
<p>Make a Melee Touch attack, the target loses 12 Power Points unless they successfully make a WIS Save. Treat your Melee Touch attack as an Armed attack.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Power Point drain by +1</dd>
</dl>';
        $power->saves = '<dl>
    <dt>Critical Success</dt> <dd>The target only loses one quarter the amount of Power Point loss</dd>
    <dt>Success</dt> <dd>The target only suffers one half the amount of Power Point loss</dd>
    <dt>Failure</dt> <dd>The target suffers the full amount of Power Point loss</dd>
    <dt>Critical Failure</dt> <dd>The target suffers as Failure, and also suffers 2 points of INT damage</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 4);

        $power              = new Power;
        $power->name        = 'Psychic Reformation';
        $power->action_type = '10 minutes';
        $power->display     = 'Auditory, Mental, Visual';
        $power->range       = 'Touch';
        $power->targets     = 'Willing creature touched';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>When this power is manifested, the subject can choose to redo their last level, choosing different skills, feats, or a differnet class altogether.</p>';
        $helper->addTypesToPower($power, ['Telepathy'], 4);

        $power                 = new Power;
        $power->name           = 'Pyrokinesis';
        $power->action_type    = 'Double Action';
        $power->range          = '30 feet';
        $power->save_attribute = 'DEX';
        $power->duration       = 'Instantaneous';
        $power->description    = '<p>You are able to generate and control Fire</p>
<ul>
    <li>Ignite a flammable object on Fire. If the object is held by a creature, then they get to make a DEX Save to avoid the object being set on Fire. The object and anyone holding the object takes 1D6 Fire damage per round until the creature uses an Action to put the fire out.</li>
    <li>Increase or decrease the intensity of a fire. You can even put out small fires, a 5-foot area can be extinguished.</li>
    <li>Deliver a burning Touch attack that deals 2D6 Fire damage</li>
    <li>Shoot a flaming ray as a Ranged Touch attack that deals 1D12 Fire damage</li>
    <li>Deal 3D6 Non-lethal damage to Fire Elementals at a range of 30 feet by extinguishing its flame.</li>
</ul>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the range by +30 feet</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the area of fire that you can extinguish by +5 foot radius</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the Fire damage of igniting an object by +1D6</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the damage of the Touch attach by +1D6</dd>
    <dt>Heightened (+3)</dt> <dd>Increase the damage of the Ranged Touch attack by +1D12</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the Non-lethal damage to Fire Elementals by +1D6</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Fire'], 1);
    }
}
