<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsBSeeder extends Seeder
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

        $spell                = new Spell;
        $spell->name          = 'Backblast';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->targets       = 'Touch';
        $spell->rarity        = 'Rare';
        $spell->spell_creator = 'The Phaerimm';
        $spell->duration      = '1 hour or until discharged';
        $spell->description   = '<p>This spell functions as the Spell Turning spell, except that it turns only spells that have the Fire type that are targeted on you. Spells with an area of effect or a range of Touch are not affected.</p>
<p>You also gain Resistance to Fire.</p>
<p>This spell was originally created by the phaerimms, but it has since been stolen by spellcasters of other races and can now be found in grimoires across Faerun.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Fire'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Baleful Polymorph';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'One creature';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Varies';
        $spell->description    = '<p>You attempt to transform the target creature into a harmless animal appropriate to the area, with effects based on its Save.</p>';
        $spell->saves          = "<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>The target's body gains minor features of the harmless animal. Its insides churn, causing it to be sick 1. When it recovers from the sickness, its features revert to normal</dd>
    <dt>Failure</dt> <dd>The target transforms for 1 minute but keeps its mind it can spend all its actions on its turn concentrating on its original form, granting it a WIS Save to end the effect</dd>
    <dt>Critical Failure</dt> <dd>The target is transformed into the chosen harmless animal, body and mind, for 1 day</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>On a critical failure, the duration is unlimited.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Baleful Teleport';
        $spell->casting        = '10 minutes (Material, Somatic, Verbal)';
        $spell->spell_creator  = 'Trobriand';
        $spell->rarity         = 'Rare';
        $spell->range          = '60 feet';
        $spell->targets        = 'One creature within range';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>As Teleport, except that you send the targeted creature (and only that creature) and carried objects to a designated destination.</p>
<p>You must have some clear idea of the location and layout of the destination. The clearer your mental image, the more likely the Teleportation works. Areas of strong physical or magical energy might make Teleportation more hazardous or even impossible.</p>
<table>
    <thead>
        <tr>
            <th>Familiarity</th>
            <th>Save bonus</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Very Familiar</td>
            <td>No Save allowed</td>
        </tr>
        <tr>
            <td>Studied Carefully</td>
            <td>+1 bonus to Save</td>
        </tr>
        <tr>
            <td>Seen Casually</td>
            <td>+2</td>
        </tr>
        <tr>
            <td>Viewed Once</td>
            <td>+3</td>
        </tr>
        <tr>
            <td>False Destination</td>
            <td>+5</td>
        </tr>
    </tbody>
</table>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Not teleported</dd>
    <dt>Failure</dt> <dd>Teleported</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The casting becomes 3 Casting Actions</dd>
    <dt>Heightened</dt> <dd>As the Teleport spell.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Ball Lightning';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '120 ft';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>You create five 3-ft balls of concentrated electricity. Each ball sheds light as a candle. When you create the balls of lightning, you mentally program them to move as you desire, even around corners. The balls have a Fly Speed of 90 ft per round.</p>
<p>Upon striking a creature, the ball stops and remains in place for the in place for the remainder of the spell's duration. A ball dissipates if the distance between you and it exceeds the spell's range. Each ball can \"see\" as a human would under the ambient lighting conditions (counting the light that the ball itself sheds). You may use an Action to give 1 ball a new program.</p>
<blockquote>
    You could program a ball to follow the left wall of a corridor and strike the first creature it \"sees\", another to follow the right wall and do the same, and the remainder to follow 5 feet behind you in a semicircle.<\br>
    The first 2 lightning balls would turn corners to follow the walls, even if doing so takes them out of your line of sight, and each would strike the first creature it \"sees\", which would then cause it to remain stationary.
</blockquote>
<p>A creature struck by a lightning ball (or one that touches a ball with natural or melee weapon takes 2D6 Electricity damage (DEX Save for half).</p>
<dl>
    <dt>Material Components</dt> <dd>A handful of copper and iron pellets</dd>
</dl>";
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Create an additional Lightning Ball</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage and Stunned 1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Electricity'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Bane';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->area           = '30-foot radius';
        $spell->save_attribute = 'CHA';
        $spell->targets        = 'Up to 3 targets within range';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>Up to three creatures of your choice that you can see within range must make a CHA Save.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Suffer a -1 penalty on all Attack rolls and on all Saves</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the number of targets by +1</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the penalty by -1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Bane Bow';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Bow touched';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You enchant a bow you hold. It gains a +2 bonus to Hit and Damage against any of your Favored Enemies or against your Studied Enemy, as well as dealing an additional Weapon Die of damage.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell                = new Spell;
        $spell->name          = 'Bane of Beshaba';
        $spell->casting       = 'Somatic Casting';
        $spell->spell_creator = 'Beshaba';
        $spell->range         = 'Touch';
        $spell->targets       = 'Creature touched';
        $spell->duration      = '1 minute';
        $spell->description   = '<p>After casting this spell, the next Melee Touch Attack that hits causes the target to suffer a -2 penalty to AC and Saves.</p>
<p>This spell Counters and is Countered by Favor of Tymora</p>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the penalty by -1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Curse'], 1);

        $spell              = new Spell;
        $spell->name        = 'Banishing Smite';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>The next time you hit a creature with a weapon attack before this spell ends, your weapon crackles with force, and the attack deals an extra 5D10 Force damage to the target. Additionally, if this attack reduces the target to 50 hit points of fewer, you banish it. If the target is native to a different plane of existence than the on you're on, the target disappears, returning to its home plane. If the target is native to the plane you're on, the creature vanishes into a harmless demiplane. While there, the target is incapacitated. It remains there until the spell ends, at which point the target reappears in the space it left or in the nearest unoccupied space if that space is occupied.</p>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Force', 'Smite'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Banishment';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = "One creature that isn't on its home plane";
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>You send the target back to its home plane, to the place it was before leaving. The effect depends on the target's Save. You can add a Material Casting action to give the creature a –2 circumstance penalty to its save. The component must be a specially gathered object that is anathema to the creature, not from a spell component pouch. You can cast this spell only when you're on your home plane.</p>";
        $spell->saves          = "<dl>
    <dt>Critical Success</dt> <dd>The creature resists being banished, and you are stunned until the end of your next turn</dd>
    <dt>Success</dt> <dd>The creature resists being banished</dd>
    <dt>Failure</dt> <dd>The creature is banished</dd>
    <dt>Critical Failure</dt> <dd>The creature is banished and can't return to your home plane by any means for 1 week</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+4)</dt> <dd>You can target up to 10 creatures. The extra material component affects these targets if it is anathema to them.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 5);
        $spell->materials()->save(Material::where('name', 'Miscellaneous')->firstOrFail(), ['meta' => 'Any item that is distasteful to the target']);

        $spell              = new Spell;
        $spell->name        = 'Barkskin';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = '1 minute';
        $spell->description = "<p>The target's skin is covered in bark. The target gains Damage Reduction 2 to Bludgeoning and Piercing damage and Weakness 2 to fire.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The resistance increase by 2 and weakness by 3.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Plant', 'Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Barrage';
        $spell->casting     = 'Material Casting';
        $spell->area        = '60-foot cone';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You fire a nonmagical ranged weapon. The spell causes that ammunition to be duplicated and hit each creature in range. Each targeted creature must make a DEX Save or take 3D8 damage, the same type as the fired weapon.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);
        $spell->materials()->save(Material::where('name', 'Miscellaneous')->firstOrFail(), ['meta' => 'The ammunition to be duplicated']);

        $spell              = new Spell;
        $spell->name        = 'Bastion of Good';
        $spell->casting     = 'Verbal Casting, Sacrifice';
        $spell->area        = '20 foot radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>A nimbus of light surrounds you, protecting you and those around you from spell effects and the attacks of evil creatures. The aura excludes all spell effects of up to 3rd level, exactly as a Globe of Invulnerability does.</p>
<p>In addition, the nimbus protects creatures within it as a magic circle against evil at double strength. Warded creatures gain a +4 deflection bonus to AC and a +4 resistance bonus on saves against attacks from evil creatures, and they are protected from possession, mental control, and bodily contact by summoned or conjured creatures.</p>
<dl>
    <dt>Sacrifice</dt> <dd>You must fast for 24 hours before casting this spell</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Exalted', 'Good'], 7);

        $spell              = new Spell;
        $spell->name        = 'Battering Ram';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '60 ft';
        $spell->duration    = 'Concentration, up to 30 minutes';
        $spell->description = "<p>You create a ram-like shaped force that can strike with considerable force.</p>
<p>You can use an Action to make a Ranged Touch Attack against a creature or an object.</p>
<p>If the target is a creature, this attack initiates a Bull Rush (the force is considered a Large creature with STR 25).</p>
<p>If the target is a movable object such as a door, you can make a STR check (STR 25) to attempt to open or break down the object.</p>
<dl>
    <dt>Material Components</dt> <dd>A piece of carved ram's horn.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 2);

        $spell              = new Spell;
        $spell->name        = 'Battle Cry';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '60 ft';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You gain the ability to shout a battle cry three times until the duration ends. As an Action, you may shout, causing all of your allies within range to gain the benefits below. The benefits last for 1 round. You may use your first shout as part of casting this spell.</p>
<ul>
    <li>All your allies (including yourself) gain a +1 bonus to Melee Attacks</li>
    <li>All your allies (including yourself) gain a +2 bonus to Melee Damage</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Battle Cry'], 1);

        $spell              = new Spell;
        $spell->name        = 'Battle Song';
        $spell->casting     = 'Verbal Casting';
        $spell->area        = '60 ft radius centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 3 rounds';
        $spell->description = '<p>You sing a stirring song of war. You and all your allies within range gains confidence and combat prowess (you and all allies in range gains the following).</p>
<ul>
    <li>+5 Morale bonus to Saves vs Fear. Anyone under the effects of a Charm, Compulsion or Fear effect can immediately make another Save to end the effect.</li>
    <li>The first Melee Attack each round gains a +5 bonus to damage</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Battletide';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 ft';
        $spell->targets        = 'Up to 3 creatures in range';
        $spell->spell_creator  = 'Bane';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>When you cast this spell, you target up to 3 enemy creatures within range. Each target must make a CHA Save. Those creatures that fail their Save are affected in the following ways until the spell ends.</p>
<ul>
    <li>They lose 1 Action each turn.</li>
    <li>Suffer a -2 penalty to all Saves, Attack Rolls and Damage Rolls</li>
</ul>
<p>As long as at least 1 target is affected by this spell, you gain an Additional Action each turn. This additional Action can only be used to take Move Actions and Attack Actions.</p>
<p>Once all the targets are free of this effect (by death, entering an area of antimagic, receiving a successful Dispel Magic, etc.), the spell ends.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not effected</dd>
    <dt>Failure</dt> <dd>Fully effected</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Evil', 'Curse'], 4);

        $spell              = new Spell;
        $spell->name        = "Bear's Endurance";
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched creature';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>The target gets a +4 enchantment bonus to CON.</p>
<p>This spell Counters and is Countered by Bear's Hex</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+4)</dt> <dd>The range becomes 30 feet, and you can target up to 10 creatures.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment'], 2);

        $spell                 = new Spell;
        $spell->name           = "Bear's Hex";
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature within range';
        $spell->duration       = '10 minutes';
        $spell->save_attribute = 'CON';
        $spell->description    = "<p>You curse the target with weak stamina unless they make a successful CON Save. A creature that has 0 CON dies.</p>
<p>This spell Counters and is Countered by Bear's Endurance</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>You suffer a -1 penalty to your CON</dd>
    <dt>Failure</dt> <dd>You suffer a -4 penalty to your CON</dd>
    <dt>Critical Failure</dt> <dd>You suffer a -6 penalty to your CON</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+4)</dt> <dd>You can target up to 10 creatures</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Beast Bond';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Beast touched';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>You establish a telepathic link with one beast you touch that is friendly to you or charmed by you. The spell fails if the beast's INT is 4 or higher. Until the spell ends, the link is active while you and the beast are within line of sight of each other. Through the link, the beast can understand your telepathic messages to it, and it can telepathically communicate simple emotions and concepts back to you.</p>";
        $helper->addTypesToSpell($spell, ['Divination', 'Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Bedevil';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'See Text';
        $spell->duration    = '1 Week';
        $spell->description = "<p>You summon a mischievous spirit and send it to bedevil your enemy. The spirit seeks out its assigned victim wherever they might be, as long as they are on the same plane as you when you cast the spell. It then proceeds to irritate and annoy them through a veriety of manifestations. The victim of a Bedevil spell finds themself constantly  seeing movement out of the corner of their eye. Their sleep is frequently interrupted by bed shaking and blanket shifting and the sounds of voices that fade upon waking. When spellcasting, they suffer a veriety of minor irritations that threaten to disrupt their spells, and they constantly feels haunted and watched. The result of this bedevilment is that they take a -1 penalty on all Ability Checks, Skill Checks, and WIS Saves, and has an additional 5% spell failure.</p>
<p>Detect Evil cast upon the subject of this spell reveals the presence of the bedeviling spirit, while a Protection from Evil keeps the spirit from adversely affecting the victim. A Dispel Evil spell destroys the mischievous spirit, but Remove Curse or similar magic has no effect.</p>
<dl>
    <dt>Material Components</dt> <dd>A tiny iron statuette of a devil or imp, plus either a drop of the intended victim's blood or one personal article belonging to the intended victim.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Evil', 'Ritual'], 3);

        $spell               = new Spell;
        $spell->name         = 'Befoul';
        $spell->casting      = '1 minute (Material, Somatic, Verbal, Ability Damage)';
        $spell->range        = 'Touch';
        $spell->targets      = '2,000 square ft of water';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>5 CON Damage</dd>
</dl>';
        $spell->duration     = 'Permanent';
        $spell->description  = '<p>You make water (or other liquid) foul and mildly poisonous. All creatures with 1 Hit Die or less that are in the water at the time of the casting die immediately. Anyone drinking this water must succeed on a CON Save or take 1D4 CON Damage. Any creature with 2 Hit Dice or more immersed in this water must make a CON Save as if drinking it.</p>
<p>If you affect only part of a larger body of water, the befouled water mixes with the pure water. If the entire body of water is no more than four times the size of the affected area, all the water in the body of water is befouled 24 hours later, but the damage from drinking or swimming in the water is only 1D2 points of CON damage. IF the body of water is more than four times the affected area but less than twenty times the affected area, after 24 hours all the water tastes foul but has no damage effect. If the entire body is larger than twenty times the affected area, fouled water mixes with the clean water and loses all effect after 24 hours.</p>
<dl>
    <dt>Material Components</dt> <dd>A dead fish and a drop of poison</dd>
</dl>';
        $spell->heightened   = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the amount of liquid affected</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water', 'Evil', 'Poison'], 7);

        $spell              = new Spell;
        $spell->name        = 'Bestow Curse';
        $spell->casting     = 'Verbal Casting, Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched creature';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>You touch a creature, and that creature must succeed on a WIS save or become cursed for the duration of the spell. When you cast this spell, choose the nature of the curse from the following options.</p>
<ul>
    <li>Choose one ability score. While cursed, the target suffers Disadvantage on ability checks and Saves made with that ability score.</li>
    <li>While cursed, the target suffers Disadvantage to Attack rolls.</li>
    <li>While cursed, the target must make a WIS Save at the start of each of its turns. If it fails, it wastes its Action that turn doing nothing.</li>
    <li>While cursed, attacks and spells deal an extra 1D8 Necrotic damage to the target.</li>
</ul>
<p>A Remove Curse spell ends this effect, even if it is Heightened (even if made Permanent).</p>
<p>At the DM's option, you may choose an alternative curse effect, but it should be no more powerful than those described above. The DM has final say on such effects.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Duration 30 minutes.</dd>
    <dt>Heightened (+2)</dt> <dd>Duration 8 hours.</dd>
    <dt>Heightened (+3)</dt> <dd>Duration 24 hours.</dd>
    <dt>Heightened (+5)</dt> <dd>Permanent.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment'], 2);

        $spell                = new Spell;
        $spell->name          = 'Bind to Hell';
        $spell->casting       = '1 hour (Material, Somatic, Verbal, Ability Damage)';
        $spell->range         = 'Touch';
        $spell->targets       = 'Magical Melee Weapon touched';
        $spell->spell_creator = 'Levistus';
        $spell->requirements  = '<dl>
    <dt>Ability Damage</dt> <dd>1 CON Damage</dd>
</dl>';
        $spell->duration      = '1 week';
        $spell->description   = "<p>You enchant a magical melee weapon. You must name or describe a specific creature. The enchanted weapon gains the following.</p>
<ul>
    <li>As an Action, you can determine the direction and relative distance to the named creature. This affect is blocked by anything that blocks Scrying.</li>
    <li>The weapon deals an additional +10 damage against the named creature</li>
    <li>If the named creature is killed by the enchanted weapon, the spell ends and the creature's soul is sent to the Hall of the Vanquished in Stygia, where it remains forever, or until rescued. While the soul is in Stygia, the creature cannot be Resurrected.</li>
</ul>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Evil', 'Devil'], 5);

        $spell              = new Spell;
        $spell->name        = 'Bind Undead';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = "One mindless undead creature with a level no greater than Bind Undead's Spell Level";
        $spell->duration    = '24 Hours';
        $spell->description = '<p>You control the target. It gains the minion trait. If you or an ally acts hostile to the target, the spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 3);

        $spell               = new Spell;
        $spell->name         = 'Binding';
        $spell->casting      = '1 minute (Material, Somatic, Verbal, Secondary Casters)';
        $spell->range        = '60 ft';
        $spell->rarity       = 'Rare';
        $spell->targets      = 'One living creature';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least one and up to 6</dd>
</dl>';
        $spell->duration     = 'See text';
        $spell->description  = "<p>A Binding Spell creates a magical restraint to hold a creature. The target gets a CHA Save if it has a CR of 9 or higher. The minimum CR is modified by the spell that each Secondary Caster casts according to the following table.</p>
<table>
    <thead>
        <tr>Spell</tr>
        <tr>CR Mod</tr>
        <dt>Save Mod</dt>
    </thead>
    <tbody>
        <tr>
            <td>Command</td>
            <td>+1</td>
            <td> - </td>
        </tr>
        <tr>
            <td>Dominate (heightened enough to affect the target creature)</td>
            <td>+3</td>
            <td>+1</td>
        </tr>
    </tbody>
</table>
<p>Regardless of the version of binding you cast, you must specify triggering conditions that end the spell and release the creature whenever they occur. These triggers can be simple or elaborate as you desire, but the DM must agree that the conditions are resonable and has a likelihood of coming to pass. Thees triggers can be based on a creature's name, identity, alignment but otherwise must be based on observable actions or qualities. Intangibles such as level, class, Hit Dice, or Hit Points don't qualify. Once the spell is cast the triggering conditions cannot be changed.</p>
<p>Choose one of the following versions when you cast the spell.</p>
<dl>
    <dt>Chaining</dt> <dd>
        The subject is confined by restraints that generate an antipathy spell affecting all creatures who approach the subject, except you. The subject of this form of binding is confined to the spot it occupied when it received the spell.<br/>
        the duration is one year per Caster Level
    </dd>
    <dt>Slumber</dt> <dd>
        Ths version causes the subject to become comatose. The subject does not need to eat or drink while slumbering, nor does it age.<br/>
        The duration is one month per Caster Level. The subject gets a +1 bonus to its Save.
    </dd>
    <dt>Bound Slumber</dt> <dd>
        This version is a combination of Chaining and Slumber.<br/>
        The duration is one month per Caster Level. The subject gets a +2 bonus to its Save.
    </dd>
    <dt>Hedged Prison</dt> <dd>
        The subject is transported to or otherwise brought within a confined area (such as a labyrinth) from which it cannot wander by any means.<br/>
        The duration is permanent. The subject gets a +5 bonus to its Save
    </dd>
    <dt>Metamorphosis</dt> <dd>
        The subject assumes gaseous form, except for its head or face.It is held harmless in a jar or othe container, which may be transparent if you choose. The creature remains aware of its surroundings and can speak, but it cannot leave the container, attack, or use any of its powers or abilities. The subject does not need to breath, eat, or drink while metamophosed, nor does it age.<br/>
        The duration is permanent. The subject gets a +6 bonus to its Save
    </dd>
    <dt>Minimus Containment</dt> <dd>
        the subject is shrunk to a height of 1 inch or even less and held within some gem, jar, or similar object. The subject does not need to breathe, eat, or drink while container, nor does it age.<br/>
        The duration is permanent. The subject gets a +6 bonus to its Save
    </dd>
</dl>
<p>You can't Dispel a Binding Spell with Dispel Magic or a similar effect, though Disjunction affects it normally and an Antimagic Field allows the subject a Save each round it starts its turn in the Antimagic Field.</p>
<p>A bound extraplanar creature cannot be sent back to its home plane due to Dismissal, Banishment, or any similar effect.</p>";
        $spell->saves        = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Affected</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Binding Chain of Fate';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'Single creature within range';
        $spell->save_attribute = 'WIS';
        $spell->rarity         = 'Rare';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You create a chain of Force that whirls into a loop around a single creature of your choice within range, making a metallic rattling sound as it does so. The chain creates an oscillating ring surrounding the target at a distance of 5 feet (so all squares adjacent to the target creature are within the chain). If the creature succeeds on its Save, the chain fails to encircle it and disappears harmlessly. Otherwise the chain surrounds the target, with the following effects.</p>
<ul>
    <li>The target creature cannot leave the area defined by the chain. Other creatures can enter or leave the area (although they must succeed ona DC 15 Escape check or a DC 15 Tumble check to slip past the chain). If the target was in midair (flying, levitating, and so on) when the chain took effect, the chain suspends the target in midair safely as if it had a solid floor on which to stand.</li>
    <li>The chain prevents the target from changing form, including Lycanthropic form changes, vampiric transformations, or Polymorph or similar effects.</li>
    <li>The chain acts as a Dimensional Anchor upon the target</li>
    <li>The chain deals 2D6 points of Force damage per round to the target.</li>
    <li>No magic functions within the chain, as if the chain defined the area of an Antimagic Field. This means that the target cannot use any magic , and no magic from outside the chain affects teh creature.</li>
    <li>The chain cannot be dispelled, but it is automatically destroyed by Disintegrate, Disjunction, or a Rod of Cancellation</li>
</ul>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Force'], 9);
        $spell->materials()->save(Material::where('name', 'Silver')->firstOrFail(), ['meta' => 'A tiny silver chain']);

        $spell                 = new Spell;
        $spell->name           = 'Binding Wind';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '100 ft';
        $spell->targets        = 'One creature within range';
        $spell->rarity         = 'Rare';
        $spell->save_attribute = 'STR';
        $spell->duration       = 'Concentration, up to 1 hour';
        $spell->description    = '<p>You create a flurry of air to encircle the target. The encircling winds to do not move. They become a physical barrier surrounding the target. The target may act normally, except that they cannot move from the center of the swirling winds. The winds carry her voice away, so they are able to speak, but no one outside the swirling winds can hear them, and they cannot hear anything but the roar of the winds.</p>
<p>Furthermore, no Sonic or language-based spells or effects may be cast into or out of the winds. Ranged attacks made into or out of the winds suffer a -10 penalty. Binding Winds will hold flying creatures in midair.</p>
<p>As a Double Action, the target may attempt a STR Save to try and push through the winds and escape. The target may attempt this as many times as they wish.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>You succeed in moving through the swirling winds</dd>
    <dt>Failure</dt> <dd>The winds buffet you and you are fail to escape from the center of the swirling winds</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Air', 'Transmutation'], 5);

        $spell              = new Spell;
        $spell->name        = 'Bit of Luck';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 round';
        $spell->description = '<p>You become lucky. Until the beginning of your next turn, you have Advantage on all your Saves.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Biting Words';
        $spell->casting        = 'Verbal Casting';
        $spell->targets        = 'Self';
        $spell->range          = '30 feet';
        $spell->duration       = '10 minutes';
        $spell->save_attribute = 'WIS';
        $spell->description    = "<p>Your voice becomes suffused with magic so that you can harm your opponents with but a word. As an Action, you can target one opponent within 30 feet by speaking to it, dealing an amount of damage equal to 1D6 + your STR or CHR modifier, whichever is higher. The damage dealt is Bludgeoning, Piercing, and Slashing damage and can be reduced by damage reduction. Each attack you make reduces the spell's remaining duration by 1 minute. If an attack reduces the remaining duration to 0 minutes or less, the spell ends after the attack resolves.</p>
<p>You can attack with biting words by shouting instead of speaking intelligibly. When doing so, the amount of damage dealt by the attack is reduced to 1D4 + 1/2 your STR or CHR modifier (whichever is higher), but the spell doesn't count as having the Lingual type (not language dependant).</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Lingual', 'Phantasm'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Black Talon';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->targets        = 'Self';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>One of your arms transforms into a retractable, rubbery appendage ending in a taloned claw.</p>
<p>You can attack with this claw as if your natural reach were 5 feet longer than it is. You gain a bonus to hit equal to your WIS modifier and it deals 1D6 Slashing damage and +1D6 Negative damage. A successful WIS Save reduces the Negative damage by half.</p>
<p>You may instead of making a Strike attack with the claw, you may make a Spell Touch attack and only deal the Negative damage.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half Negative damage</dd>
    <dt>Failure</dt> <dd>Full Negative damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Negative damage +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Black Tentacles';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->save_attribute = 'DEX';
        $spell->spell_creator  = 'Evard';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>Squirming, ebony tentacles fill a 20-foot square on ground that you can see within range. For the duration, these tentacles turn the ground in the area into difficult terrain.</p>
<p>When a creature enters the affected area for the first time on a turn or starts its turn there, the creature must succeed on a DEX Save or take 3D6 bludgeoning damage and be restrained by the tentacles until the spell ends. A creature that starts its turn in the area and is already restrained by the tentacles takes 3D6 bludgeoning damage.</p>
<p>A creature restrained by the tentacles can use its Action to make a STR or DEX check (its choice) against your spell Save DC. On a success, it frees itself.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>3D6 Bludgeoning damage and the target is restrained</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 5);
        $spell->materials()->save(Material::where('name', 'Creature Part')->firstOrFail(), ['meta' => 'A piece of tentacle from a Giant Octopus or Giant Squid']);

        $spell                 = new Spell;
        $spell->name           = 'Blacksphere';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->spell_creator  = 'Halaster Blackcloak';
        $spell->range          = '120 feet';
        $spell->area           = '10-foot radius burst and globe';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>This spell creates a burst of black force. The force burst causes 20D6 Bludgeoning damage and envelops the affected area in a sphere of Force, trapping creatures within. Creatures trapped inside cannot escape except by those methods that can bypass or destroy a Wall of Force.</p>
<dl>
    <dt>Material Components</dt> <dd>A small piece of charcoal and a small piece of onyx</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage and not trapped</dd>
    <dt>Failure</dt> <dd>Full damage and trapped in the sphere of Force</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Blackstaff';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator  = 'Khelben "Blackstaff" Arunsun';
        $spell->range          = 'Touch';
        $spell->rarity         = 'Unique';
        $spell->targets        = 'Nonmagical quarterstaff or magical staff touched';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>This spell has three main effects</p>
<ul>
    <li>The spell gives the affected staff or quarterstaff a +3 Enhancement bonus to attack and damage.</li>
    <li>Any creature or object struck by a successful melee attack or melee touch attack with the blackstaff is subject to a Dispel Magic effect (as if the caster of the Blackstaff spell had cast a targeted Dispel Magic spell).</li>
    <li>Any spellcaster struck by a successful melee touch attack loses one prepared spell (or one unused spell slot, for spellcasters who do not prepare spells) of the highest spell level available unless they succeed at a WIS Save.</li>
</ul>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No spell loss</dd>
    <dt>Failure</dt> <dd>Lose one of your highest remaining spells at random</dd>
    <dt>Critical Failure</dt> <dd>As Failure and also lose a spell of your lowest level (at least 1st level)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Blade Barrier';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '90 feet';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = "<p>You create a vertical wall of whirling, razor-sharp blades made of magical energy. The wall appears within range and lasts for the duration. You can make a straight wall up to 100 feet long, 20 feet high, and 5 feet thick, or a ringed wall up to 60 feet in diameter, 20 feet high, and 5 feet thick. The wall provides three-quarters cover to creatures behind it, and its space is difficult terrain.</p>
<p>When a creature enters the wall's area for the first time on a turn or starts its turn there, the creature must make a DEX Save. On a failed Save, the creature takes 6D10 damage.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 6);
        $spell->materials()->save(Material::where('name', 'Miscellaneous')->firstOrFail(), ['meta' => 'A metal forged weapon (can be miniature)']);

        $spell              = new Spell;
        $spell->name        = 'Blade of Disaster';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '60 feet';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You create a blade-shaped planar rift about 3 feet long in an unoccupied space you can see within range. The blade lasts for the duration. When you cast this spell, With an Action, you can make a Ranged Spell Attack to attack with the blade. You may use up to 2 Actions per turn with the blade. On a hit, the target takes 4D12 Force damage. The blade has a critical hit range of 3. On a critical hit, the blade deals an extra 8D12 Force damage (for a total of 12D12 Force damage)</p>
<p>As an Action, you can move the blade up to 30 feet to an unoccupied space you can see.</p>
<p>The blade can cut through any barrier, including Wall of Force, Prismatic effects and Anti-magical fields, ending their effect.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 9);

        $spell              = new Spell;
        $spell->name        = 'Blade Ward';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->duration    = '1 round';
        $spell->description = '<p>You extend your hand and trace a sigill of warding in the air. Until the end of your next turn, you have resistancence against Bludgeoning, Piercing, and Slashing damage dealt by weapon attacks.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the duration by 5 rounds.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 0);

        $spell              = new Spell;
        $spell->name        = 'Blasphemy';
        $spell->casting     = 'Verbal Casting';
        $spell->area        = '40 ft radius centered on you';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Any nonevil creature within the area suffers the following effects.</p>
<table>
    <thead>
        <tr>
            <th>HD</th>
            <th>Effect</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Equal to caster level</td>
            <td>Dazed: 2 rounds</td>
        </tr>
        <tr>
            <td>Up to caster level -1</td>
            <td>Enfeebled: 2, Dazed: 2 rounds</td>
        </tr>
        <tr>
            <td>Up to caster level -5</td>
            <td>Paralyzed: 1 minute, Enfeebled: 2, Dazed: 2 rounds</td>
        </tr>
        <tr>
            <td>Up to caster level -10</td>
            <td>Killed, Paralyzed: 1 minute, Enfeebled: 2, Dazed: 2 rounds</td>
        </tr>
    </tbody>
</table>
<p>The effects are cumulative and concurrent.</p>
<p>Furthermore, if you are on your home plane when you cast this spell, nonevil extraplanar creatures within the area are instantly banished back to their home planes. Creatures so banished cannot return for 24 hours. The banishment takes place regardless of whether the cureatures hears the blasphemy. The banishment effect allows a WIS Save to resist.</p>
<p>Creatures whose Hit Dice exceeds your caster level are unaffected by this spell.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Evil'], 7);

        $spell              = new Spell;
        $spell->name        = 'Bless';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '30-foot radius';
        $spell->targets     = 'Up to 3 targets within the area';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You bless up to three creatures of your choice within range. Those creatures gain a +1 bonus to Hit and Saves.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the number of targets by +1</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the bonus by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment'], 1);

        $spell               = new Spell;
        $spell->name         = 'Blight';
        $spell->casting      = '1 day (Somatic, Verbal, Secondary Caster)';
        $spell->range        = '30 feet';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least one other caster</dd>
</dl>';
        $spell->targets        = 'One creature or plant in range';
        $spell->duration       = 'Instantaneous';
        $spell->save_attribute = 'CON';
        $spell->description    = "<p>Necromantic energy washes over a creature of your choice that you can see within range, draining moisture and vitality from it. The target must make a CON Save. The target takes 8d8 Negative damage on a failed Save, or half as much damage on a successful one. This spell has no effect on undead or constructs. If you target a plant creature or a magical plant, it makes the saving throw with disadvantage, and the spell deals maximum damage to it. If you target a nonmagical plant that isn't a creature, such as a tree or shrub, it doesn't make a Save; it simply withers and dies.</p>";
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase damage by +1D8</dd>
    <dt>Heightened (+1)</dt> <dd>The spell affects all Plants in range</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ritual'], 4);
        $spell->skills()->save(app()->skills['Nature'], ['dc' => 5]);

        $spell              = new Spell;
        $spell->name        = 'Blindsight';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Willing creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>The target gains Blindsight out to 30 feet, as the feat, for the duration.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>The Blindsight range becomes 60 feet</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Blinding Beauty';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'Self';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>You gain the physical beauty of a nymph, with some of the supernatural accompaniment.</p>
<p>All humanoids within 60 feet of you who look directly at you must succeed on a CON Save or be Blinded permanently.</p>
<p>During the duration of the spell, you can suppress or resume this effect as an Action, while remaining stunningly attractive.</p>
<dl>
    <dt>Abstinence Component</dt> <dd>You must abstain from sexual intercourse for one week before casting this spell.</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Blinded</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Exalted'], 4);

        $spell              = new Spell;
        $spell->name        = 'Blinding Glory';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->targets     = 'Self';
        $spell->area        = '1,000 feet radius spread, centered on you';
        $spell->duration    = '24 Hours';
        $spell->description = '<p>A brilliant radiance spreads from you, brightly illuminating the area.</p>
<p>The light is similar to that created by the Daylight spell, but magical darkness counters or dispels it. Furthermore, evil-aligned creates are blinded within this light.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light', 'Exalted', 'Ritual'], 9);
        $spell->materials()->save(Material::where('name', 'Silver')->firstOrFail(), ['price' => '250 gp', 'meta' => 'A polished rod of pure silver']);

        $spell                 = new Spell;
        $spell->name           = 'Blinding Smite';
        $spell->casting        = 'Verbal Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>The next time you hit a creature with a melee weapon attack during this spell's duration, your weapon flares with a bright light, and the attack deals an extra 3D8 Negative damage to the target. Additionally, the target must succeed on a CON Save or gain the Blinded condition until the spell ends.</p>
<p>A creature blinded by this spell makes another CON Save at the end of each of its turns. On a successful Save, it is no longer blinded.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> The Blinded condition ends<dd></dd>
    <dt>Failure</dt> <dd>The Blinded condition continues</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Divine', 'Negative', 'Smite'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Blindness';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 foot';
        $spell->targets        = 'One creature';
        $spell->save_attribute = 'CON';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>You blind the target. The effect is determined by the target's Save. The target is bolstered against all castings of Blindness.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>The target is Blinded until the beginning of its next turn</dd>
    <dt>Failure</dt> <dd>The target is Blinded for 1 minute</dd>
    <dt>Critical Failure</dt> <dd>The target is Blinded permanently</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Blink';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You blink quickly between the Material and Ethereal Planes. You gain resistance 5 to all damage (overcome by force). You can Concentrate on the Spell to vanish and reappear 10 feet in a random direction determined by the GM; the movement doesn't trigger reactions. At the end of your turn, you vanish and reappear as above.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Bloodboil';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->requirements   = 'Caster must be of draconic ancestry';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = "<p>This spell is only used by the most evil of dragons, its usage is considered taboo amongst dragonkind.</p>
<p>The target must make a CON Save. On a Success, the spell ends. On a Failure, the target's moisture and all liquids within the body will start heating up to the point of boiling, causing excruciating pain. The spell will no longer end on a Save beyond this point.</p>
<p>At the end of each of the creature's turns, it must make a CON Save or take 3D6 Fire damage. The spell ends if you lose line of sight from the target. If damage from the spell kills the target, it melts from the inside out, becoming a puddle of steaming gore.</p>
<p>If you target a plant creature or magical plant, it makes the Save with Disadvantage, and the spell deals maximum damage to it. Undead are immune to this spell.</p>";
        $spell->saves = '<dl>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Success</dt> <dd>Initial Save ends the Spell. Successive Saves after initial Failure causes Half damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Dragon'], 6);

        $spell              = new Spell;
        $spell->name        = 'Bloodwater';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '90 feet';
        $spell->targets     = 'Area of water in range';
        $spell->duration    = '1 minute';
        $spell->description = '<p>This spell creates an expanding zone of blood. This spell can trigger the natural blood frenzy of some sea creatures such as sharks or sahuagin. If triggered, the frenzied creatures begin attacking any creature near it, whether friend or foe.</p>
<dl>
    <dt>Material Casting</dt> <dd>Drop of blood</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 2);

        $spell              = new Spell;
        $spell->name        = 'Blood Lust';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>This spell grants the touched creature the following (this can be yourself)</p>
<ul>
    <li>Immunity to Fear</li>
    <li>Can ignore the effects of Pain or Nausea</li>
    <li>The Scent Feature</li>
    <li>+10 bonus to Nature (Tracking) checks</li>
</ul>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Blur';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = '1 minute';
        $spell->description = "<p>Your body becomes blurred, shifting and wavering to all who can see you. For the duration, any creature suffers a -2 penalty on attack rolls against you. An attacker is immune to this effect if it doesn't rely on sight, as with blindsight, or can see through illusions, as with truesight.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Visual', 'Figment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Bodak Birth';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Self or one willing creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You transform one willing subject (or yourself) into a bodak. Use the Bodak's attributes for the target after its transformation.</p>
<p>Before casting the spell, you must make a miniature figurine that represents the target, then bathe it in the blood of at least three small or larger animals. Once the spell is cast, anyone that willing holds the figurine can attempt to mentally communicate and control the bodak, but the creature resists such control with a successful WIS Save. If the bodak fails, it must obey the holder of the figurine, but it gains a new Save every day to break the control.</p>
<p>If the figurine is destroyed, the body disintegrates.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph', 'Evil', 'Vile', 'Ritual'], 8);

        $spell              = new Spell;
        $spell->name        = 'Body Blades';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You sprout dagger-like spikes from all surfaces of your body and clothing. The spikes appear metallic but are not actually metal, and never harm you or interfere with your movement or actions. They allow you deal 1D6 Piercing damage with a successful Grapple attack. The spikes count as a martial weapon, and the spell grants proficiency with them. You can also make a regular melee attack (or off-hand attack) with the spikes and they count as a light weapon in this case. You inflict lethal damage when grappling. If a creature grapples you, the spikes deal 2 points of damage to your attacker.</p>
<dl>
    <dt>Material Components</dt> <dd>Two shards of metal (pieces of any size, which posses at least one sharp edge or point each - intact bladed weapons may be used), and one shard of bone from any source, but it must also have at least one sharp edge or point</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Bone Blade';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Blade that is used as part of the Material Casting';
        $spell->range       = 'Touch';
        $spell->duration    = '1 minute';
        $spell->description = "<p>The spell creates a temporary but very effective weapon from the blade that must be used as part of the material component. The blade gains the following:</p>
<ul>
    <li>It is unbreakable until it crumbles into dust at the spell's expiration</li>
    <li>It is considered magical</li>
    <li>Any undead stuck by the blade must make a CON Save or instantly crumble to dust. If the undead makes this save, it becomes immune to this effect from this Bone Blade. If a creature of 8HD or more is destroyed in this way, the Bone Blade also crumbles to dust.</li>
    <li>Undead suffer Triple damage from any successful attack from the Bone Blade</li>
    <li>Any undead damaged from the Bone Blade suffer similar effects to Bleed damage</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>Any blade, that turns to dust at the end of the spell</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Necromancy'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Bones of the Earth';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->area           = '30-foot cylinder';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You cause up to six pillars of stone to burst from places on the ground that you can see within range. Each pillar is a cylinder that has a diameter of 5 feet and a height of up to 30 feet. The ground where a pillar appears must be wide enough for its diameter, and you can target the ground under a creature if that creature is Medium or smaller. Each pillar has AC 5 and 30 hit points. When reduced to 0 hit points, a pillar crumbles into rubble, which creates an area of difficult terrain with a 10-foot radius that lasts until the rubble is cleared. Each 5-foot-diameter portion of the area requires at least 1 minute to clear by hand.</p>
<p>If a pillar is created under a creature, that creature must succeed on a DEX Save or be lifted by the pillar. A creature can choose to fail the save.</p>
<p>If a pillar is prevented from reaching its full height because of a ceiling or other obstacle, a creature on the pillar takes 6D6 Bludgeoning damage and is restrained, pinched between the pillar and the obstacle. The restrained creature can use an action to make a STR or DEX check (the creature's choice) against the spell's save DC. On a success, the creature is no longer restrained and must either move off the pillar or fall off it.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Lifted by the pillar as described</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You create two additional pillars</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 6);

        $spell              = new Spell;
        $spell->name        = 'Booming Blade';
        $spell->casting     = 'Material Casting';
        $spell->targets     = 'Creature hit by melee weapon';
        $spell->duration    = '1 round';
        $spell->description = '<p>Your melee weapon becomes infused with the magical energy of this spell. The next target you hit with your infused melee weapon takes an additional 1D8 Sonic damage, and the target becomes sheathed in booming energy until the start of your next turn. If the target willingly moves before the spell effect ends, it immediately takes 1D8 Sonic damage, and the spell ends.</p>
<dl>
    <dt>1st - 4th</dt> <dd>1D8 Sonic damage on hit / 1D8 damage if move</dd>
    <dt>5th - 10th</dt> <dd>2D8 Sonic damage on hit / 2D8 damage if move</dd>
    <dt>11th - 16th</dt> <dd>3D8 Sonic damage on hit / 3D8 damage if move</dd>
    <dt>17th+</dt> <dd>4D8 Sonic damage on hit / 4D8 damage if move</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 0);
        $spell->materials()->save(Material::where('name', 'Miscellaneous')->firstOrFail(), [
            'price' => 'At least 1 sp',
            'meta'  => 'A metal melee weapon',
        ]);

        $spell              = new Spell;
        $spell->name        = 'Boon';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One target in range';
        $spell->duration    = '3 rounds';
        $spell->description = '<p>The target gains a +1 bonus to all Attack rolls and skill checks.</p>
<p>You may only have one target with a Boon at a time.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the bonus by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 0);

        $spell              = new Spell;
        $spell->name        = 'Boon of Fortune';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature touched';
        $spell->duration    = '5 rounds';
        $spell->description = '<p>This spell grants the recipient the following</p>
<ul>
    <li>Can wield an unfamiliar weapon as if they were proficient with it</li>
    <li>Gain a +2 bonus to Hit</li>
    <li>Gain a +2 bonus to Damage</li>
    <li>Gain a +2 bonus to all Ability Checks</li>
</ul>
<p>This spell can only affect bipedal land mammals (and not even on bipedal land mammals that are underwater). Once cast, this spell cannot expire before its normal duration, even if you no longer wish the recipient to enjoy the benefits.</p>
<p>It is considered sinful for you to cast this spell on yourself unless not casting this spell on yourself directly causes the aims of the goddess Tymora to suffer.</p>
<dl>
    <dt>Material Components</dt> <dd>A four-leaf clover (or, alternatively, a piece of amber of any size - but the use of this component reduces the duration of the spell to 6 rounds).</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Branding Smite';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>The next time you hit a creature with a weapon attack before this spell ends, the weapon gleams with astral radiance as you strike. The attack deals an extra 2D6 Positive/Negative damage to the target, which becomes visible if it's invisible, and the target sheds dim light in a 5-foot radius and can't become invisible until the spell ends.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Divine', 'Positive', 'Negative', 'Smite'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Breath of Bewilderment';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->area           = '10 ft Cone from caster';
        $spell->save_attribute = 'CON';
        $spell->duration       = '5 rounds';
        $spell->description    = '<p>This spell creates a small cloud of nauseating vapors. Any living creature in the area becomes Nauseated. This condition lasts as long as the creature is in the cloud and for 1d4+1 rounds after it leaves. Any creature that Succeeds on its Save but remains in the cloud must continue to Save each round on your turn.</p>
<p>The cloud obscures sight, including darkvision, providing concealment to creatures within the area or against attacks made through the cloud.</p>
<dl>
    <dt>Material Components</dt> <dd>A rotten egg</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell; // TODO: add this spell to Ubtao's druid spell list
        $spell->name        = 'Breath of the Jungle';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '120 ft cone';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You breathe out a foul-smelling, fine mist that spreads out in a cone shape. All in the mist suffer a -2 penalty to their Saves against Poison and Disease. The mist does not provide concealment.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Brilliant Emanation';
        $spell->casting        = 'Somatic Casting, Sacrifice';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'CON';
        $spell->duration       = '5 rounds';
        $spell->description    = "<p>This spell causes a divine glow to radiate from any reflective objects worn or carried by the caster, including metal armor. Evil creatures within the spell's area are Blinded unless they succeed on a CON Save. Nonevil characters perceive the brilliant light emanating from the caster, but are not Blinded by it and do not suffer any negative effects from it. Evil characters that make their Save are not Blinded, but are distracted, taking a -1 penalty on any attacks made within the spell's area for the duration of the spell.</p>
<p>Creatures must be able to see visible light to be affected by this spell.</p>
<dl>
    <dt>Sacrifice</dt> <dd>2 STR damage</dd>
</dl>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dt>Evil creature is unaffected</dt>
    <dt>Success</dt> <dd>Evil creature is Distracted</dd>
    <dt>Failure</dt> <dd>Evil creature is Blinded</dd>
    <dt>Critical Failure</dt> <dd>As Failure, and Confused</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Exalted'], 3);

        $spell              = new Spell;
        $spell->name        = 'Brilliant Weapon';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'One weapon or up to 10 ammunition touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>The target gains the Brilliant Energy weapon trait for the duration.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 6);

        $spell              = new Spell;
        $spell->name        = 'Bristle';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Metal Armor Worn';
        $spell->duration    = '30 minute';
        $spell->description = '<p>The metal armor you are wearing grows metal spikes. The spikes deal 1D6 Piercing damage. Unarmed strikes are now treated as armed due to the spikes, so long as you are wearing metal gauntlets. The spikes also automatically deal 2D6 Piercing damage whenever you Grapple.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Brittleskin';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->targets     = 'One creature within range';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You cause a creature's Natural Armor to crystallize and become brittle. Whenever the affected creature is hit in combat, part of the crystallized hide cracks and shatters, dealing it additional lethal damage equal to its Natural Armor bonus. Thus, if a creature with +3 Natural Armor is affected by this spell, it takes an extra 3 points of damage each time it is struck by a Melee, Ranged, or Natural Weapon. The creature's actual Armor Class does not change.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);

        $spell                 = new Spell;
        $spell->name           = "Bronze Dragon's Wrath";
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->area           = '10-foot line';
        $spell->targets        = 'All within the line';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A stroke of lightning forming a line 10 feet long and 5 feet wide blast out from you in a direction you choose. Each creature in the line must make a DEX Save or take 1D6 Electricity damage. Those affected have Disadvantage on their Save if they are wearing Armor made of metal.</p>';
        $spell->heightened     = '<dl>
    <dt>Heightened +5</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Failure</dt> <dd>Full damage (targets in metal armor have Disadvantage on this Save)</dd>
    <dt>Success</dt> <dd>No damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Electricity', 'Evocation'], 0);

        $spell                 = new Spell;
        $spell->name           = "Bull's Hex";
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature within range';
        $spell->duration       = '10 minutes';
        $spell->save_attribute = 'STR';
        $spell->description    = "<p>You curse the target with weakness unless they make a successful STR Save.</p>
<p>This spell Counters and is Countered by Bull's Strength.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>You suffer a -1 penalty to your STR</dd>
    <dt>Failure</dt> <dd>You suffer a -4 penalty to your STR</dd>
    <dt>Critical Failure</dt> <dd>You suffer a -8 penalty to your STR</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+4)</dt> <dd>You can target up to 10 creatures</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = "Bull's Strength";
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched creature';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>The target gets a +4 enchantment bonus to STR.</p>
<p>This spell Counters and is Countered by Bull's Hex.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+4)</dt> <dd>The range becomes 30 feet and you can target up to 10 creatures.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Buoyancy';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '50 feet';
        $spell->targets     = 'Up to 5 medium or smaller objects and/or creatures, no two of which can be more than 20 ft apart';
        $spell->duration    = '1 minute or until dispelled';
        $spell->description = "<p>The affected creatures and/or objects become incredibly buoyant. An affected creature (including gear and carried objects up to each creature's maximum load) and objects naturally float on any water at least 1 foot deep.</p>
<p>An affected creature that deliberately tries to submerge must succeed at a DC 20 Athletics (Swim) check every round to stay underwater.</p>
<p>This spell ends if the creature or object spends at least 1 round on dry land.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Burst of Glacial Wrath';
        $spell->casting        = 'Verbal Casting, Somatic Casting';
        $spell->area           = 'Cone-shaped burst, 30 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>A quick buildup of icy blue energy centered on your hand rapidly becomes an enormous bubble of frost that washes out over the landscape, freezing all in its path.</p>
<p>You create a burst of icy energy that flash-freezes any creatures within the spell's area. The spell deals 20D6 points of Cold damage. Any living creature reduced to -1 or fewer Hit Points is not killed, but instead turned to solid ice (similar to Flesh to Stone, but with ice instead of stone). Effectively, the spell can't reduce a creature's Hit Points below -9.</p>
<p>A creature turned to solid ice by this spell gains Hardness 10 as well as immunity to Cold and Electricity. However, it also gains Vulnerability to Fire, and any frozen creature reduced to -10 or fewer Hit points by Fire damage immediately melts and dies.</p>";
        $spell->saves = '<dl>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Cold'], 9);

        $spell                = new Spell;
        $spell->name          = 'Burning Blood';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range         = '30 feet';
        $spell->targets       = 'One living creature';
        $spell->spell_creator = 'Beltyn';
        $spell->duration      = '1 minute';
        $spell->description   = "<p>You infuse a living creature's blood with a hot, corrosive mixture, dealing 1D8 Acid and 1D8 Fire damage per round. Each round, on its turn, the target may attempt a CON Save. Success means they take no damage this turn, but must Save again next round until the duration ends.</p>";
        $spell->heightened    = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by +1D8 Acid and +1D8 Fire</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No damage this round</dd>
    <dt>Failure</dt> <dd>Full damage and Slowed 1 until the beginning of its next turn</dd>
    <dt>Critical Failure</dt> <dd>Full damage and Slowed 2 until the beginning of its next turn</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Acid', 'Fire'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Burning Hands';
        $spell->casting        = 'Verbal Casting, Somatic Casting';
        $spell->area           = '15-foot cone';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>Gouts of flame rush from your hands. You deal 2D6 Fire damage to creatures in the area; they must each attempt a DEX Save.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Failure</dt> <dd>The creature takes double damage</dd>
    <dt>Failure</dt> <dd>The creature takes full damage</dd>
    <dt>Success</dt> <dd>The creature takes half damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage increases by 1D6.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 1);

        $spell              = new Spell;
        $spell->name        = 'Burrow';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Concentration, 10 minutes';
        $spell->description = '<p>You touch a willing creature. The target gains a Burrow Speed of 20 and Tremorsense: 25 feet.</p>
<p>You leave behind a tunnel. You can as an Action, collapse the tunnel behind you. However, collapsing the tunnel will cause you to not have access to fresh air, and you might start to suffocate when the air becomes stale.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can target one additional creature</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 3);
        $spell->materials()->save(Material::where('name', 'Granite')->firstOrFail(), ['quantity' => 'A small chunk']);
    }
}
