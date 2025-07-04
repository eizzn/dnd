<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsTSeeder extends Seeder
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

        $spell                 = new Spell;
        $spell->name           = 'Tar';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->save_attribute = '';
        $spell->range          = '60 feet';
        $spell->area           = 'One object or 10-ft square';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>This spell makes a solid surface sticky. Chose one of the following.</p>
<ul>
    <li>Movement coasts across the Area are Doubled. Any Prone creature in the Area must Make a DC 10 STR Check to stand up.</li>
    <li>
        <p>You can coat one object with tar.</p>
        <ul>
            <li>Items not in use or in a creature's possession are always affected by this spell.</li>
            <li>
                <p>An object wielding or held by a creature can make a DEX Save to avoid this effect.</p>
                <li>A creature holding an affected item must use a Double Action to let go of the item or use a Manipulate Action with it. The creature also gains a +5 bonus against Disarm Checks. A creature wearing armor or clothing that is affected by the tar suffers a -5 penalty to remove the armor or clothing.</li>
            </li>
        </ul>
    </li>
</ul>
<p>This spell Counters and is Countered by Grease</p>
<dl>
    <dt>Material Components</dt> <dd>A drop of honey, molasses, or pine resin</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>If this spell targets a held or worn item, then the spell has no effect</dd>
    <dt>Failure</dt> <dd>If this spell targets a held or worn item, then the spell coats the item with tar</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Telepathic Bond';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'Up to eight willing creatures in range';
        $spell->duration    = '1 hour';
        $spell->description = "<p>You forge a telepathic link among up to eight willing creatures of your choice within range, psychically linking each creature to all the others for the duration. Creatures with Intelligence scores of 2 or less aren't affected by this spell.</p>
<p>Until the spell ends, the targets can communicate telepathically through the bond whether or not they have a common language. The communication is possible over any distance, though it can't extend to other planes of existence.</p>";
        $helper->addTypesToSpell($spell, ['Divination', 'Enchantment', 'Mental'], 5);

        $spell              = new Spell;
        $spell->name        = 'Teleport';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = '100 miles';
        $spell->targets     = 'You and up to four willing creatures touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You and the targets instantly transport to any location within range, as long as you can identify the location precisely both by its position relative to your starting position and by its appearance. Incorrect knowledge of the location's appearance usually causes the spell to fail, but it could lead to teleporting to an unwanted location or some other unusual mishap determined by the GM.</p>
<p>Teleport is not precise over great distances. The targets appear at a distance from the intended destination equal to roughly 1% of the total distance traveled, in a direction determined by the GM. For short journeys, this lack of precision is irrelevant, but journeys of the maximum 100 miles are 1 mile off target.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The casting time becomes one Full Round (3 Casting Actions)</dd>
    <dt>Heightened (+1)</dt> <dd>You and the targets can travel to any location within 1000 miles</dd>
    <dt>Heightened (+2)</dt> <dd>You and the targets can travel to any location on the same planet. If you travel more than 1000 miles, you arrive only 10 miles off target.</dd>
    <dt>Heightened (+3)</dt> <dd>You and the targets can travel to any location on another planet within the same solar system. Assuming you have accurate knowledge of the location\'s position and appearance, you arrive on the new planet 100 miles off target.</dd>
    <dt>Heightened (+4)</dt> <dd>Per the previous level, but you can travel to any planet within the same galaxy</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 6);

        $spell                = new Spell;
        $spell->name          = 'Teleport Cage';
        $spell->casting       = '10 minutes (Material, Somatic, Verbal)';
        $spell->range         = '60 feet. 200 ft cube';
        $spell->spell_creator = 'Halaster Blackcloak';
        $spell->duration      = 'Permanent';
        $spell->description   = '<p>This spell modifies the functioning of all Conjuration (Teleportation) spells and spell-like abilities, into out of, and within its area.</p>
<p>If cast in an area adjoining or overlapping another Teleport Cage, the effects of both spells merge to create a single Teleport Cage. Undermountain, the greatest dungeon in Faerun, is believed to have been enclosed within the largest Teleport Cage in existence in the Realms by means of this effect.</p>
<p>When cast within a Teleport Cage, such translocation spells simply transport all affected creatures and objects to another random location within the Teleport Cage. For example, if a caster casts Teleport Cage would cause him to appear at another random location within the greate dungeon.</p>
<p>When a caster outside the area encompassed by a Teleport Cage attempts to Teleport into it, this spell redirects their destination to another random location reachable by the spell. For example, if a 9th-level wizard in Waterdeep attempted to Teleport into the depths of Undermountain, the Teleport Cage would cause him to appear at another random location within 900 miles of the place where he cast the spell.</p>
<dl>
    <dt>Material Components</dt> <dd>Diamond dust worth 1,000 gp</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation', 'Ritual'], 9);

        $spell               = new Spell;
        $spell->name         = 'Teleportation Circle';
        $spell->casting      = '1 minute (Material, Somatic, Verbal)';
        $spell->range        = '10 feet';
        $spell->requirements = '<dl>
    <dt>Feats</dt> <dd>If you are an Arcane spell caster, then you must have the Conjurer Feat</dd>
</dl>';
        $spell->duration     = '1 round';
        $spell->description  = '<p>As you cast the spell, you draw a 10-foot-diameter circle on the ground inscribed with sigils that link your location to a permanent teleportation circle of your choice whose sigil sequence you know and that is on the same plane of existence as you. A shimmering portal opens within the circle you drew and remains open until the end of your next turn. Any creature that enters the portal instantly appears within 5 feet of the destination circle or in the nearest unoccupied space if that space is occupied.</p>
<p>Many major temples, guilds, and other important places have permanent teleportation circles inscribed somewhere within their confines. Each such circle includes a unique sigil sequence - a string of magical runes arranged in a particular pattern. When you first gain the ability to cast this spell, you learn the sigil sequences for two destinations on the Material Plane, determined by the DM. You can learn additional sigil sequences during your adventures. You can commit a new sigil sequence to memory after studying it for 1 minute.</p>
<p>You can create a permanent teleportation circle by casting this spell in the same location every day for one year. You need not use the circle to teleport when you cast the spell in this way.</p>
<dl>
    <dt>Material Components</dt> <dd>Rare chalks and inks infused with precious gems worth at least 50 gp, which the spell consumes.</dd>
</dl>';
        $spell->heightened   = '<dl>
    <dt>Permanency (Heightened +3)</dt> <dd>22,500 gp. 10 CON damage, Secondary Caster at the other end who must also cast this spell.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Permanency', 'Teleportation'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Temple of the Gods';
        $spell->casting        = '1 hour (Material, Somatic, Verbal)';
        $spell->save_attribute = 'CHA';
        $spell->range          = '120 feet';
        $spell->duration       = '24 hours';
        $spell->description    = "<p>You cause a temple to shimmer into existence on ground you can see within range. The temple must fit within an unoccupied cube of space, up to 120 feet on each side. The temple remains until the spell ends. It is dedicated to whatever god, pantheon, or philosophy is represented by the holy symbol used in the casting.</p>
<p>You make all decisions about the temple's appearance. The interior is enclosed by a floor, walls, and a roof, with one door granting access to the interior and as many windows as you wish. Only you and any creatures you designate when you cast the spell can open or close the door.</p>
<p>The temple's interior is an open space with an idol or altar at one end. You decide whether the temple is illuminated and whether that illumination is bright light or dim light. The smell of burning incense fills the air within, and the temperature is mild.</p>
<p>The temple opposes types of creatures you choose when you cast this spell. Choose one or more of the following: celestials, elementals, fey, fiends, or undead. If a creature of the chosen type attempts to enter the temple, that creature must make a CHA Save. On a failed save, it can't enter the temple for 24 hours. Even if the creature can enter the temple, the magic there hinders it; whenever it makes an attack roll, an ability check, or a Save inside the temple, it must roll a D4 and subtract the number rolled from the D20 roll.</p>
<p>In addition, the sensors created by divination spells can't appear inside the temple, and creatures within can't be targeted by divination spells.</p>
<p>Finally, whenever any creature in the temple regains hit points from a spell of 1st level or higher, the creature regains additional hit points equal to your WIS modifier (minimum 1 hit point).</p>
<p>The temple is made from opaque magical force that extends into the Ethereal Plane, thus blocking ethereal travel into the temple's interior. Nothing can physically pass through the temple's exterior. It can't be dispelled by dispel magic, and antimagic field has no effect on it. A disintegrate spell destroys the temple instantly.</p>
<p>Casting this spell on the same spot every day for a year makes this effect permanent.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Outsider can enter, but suffers a D4 penalty on all rolls</dd>
    <dt>Failure</dt> <dd>Outsider cannot enter the temple</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Enchantment', 'Ritual'], 7);

        $spell               = new Spell;
        $spell->name         = 'Temporal Bubble';
        $spell->casting      = '1 hour (Material, Somatic, Verbal)';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>2 CON damage</dd>
</dl>';
        $spell->range       = '90 feet';
        $spell->duration    = '8 hours';
        $spell->description = '<p>You create a translucent, spherical demiplane with a radius up to 50 feet centered on a point you choose within range. Time within this demiplane passes significantly faster than time outside, allowing you to experience 10 minutes of time while those outside only experience 1 minute. To those inside the sphere, the outside world appears nearly motionless and sluggish, while those on the outside, the inside of the sphere appears blurred and spastic.</p>
<p>Creatures and objects can pass into and out of the demiplane, but no spell, magical effect, or projectile can pass through the barrier (projectiles simply fall straight down once on the other side of the barrier). In combat, creatures on the outside of the sphere must skip their turns for most rounds. However, every 10 rounds, every creature in their initiative order takes their turn as normal. You may end this spell with an Action.</p>';
        $helper->addTypesToSpell($spell, ['Chronomancy', 'Ritual'], 7);

        $spell               = new Spell;
        $spell->name         = 'Temporal Eye';
        $spell->casting      = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>1 CON damage</dd>
</dl>';
        $spell->targets     = 'Self';
        $spell->duration    = '3 rounds';
        $spell->description = '<p>This spell allows you to scry people or places in other times. This operates through your mind, and any innate abilities or permanent spell effects placed on yourself apply to the scrying.</p>
<ul>
    <li>Comprehend Language</li>
    <li>Detect Magic</li>
    <li>Darkvision</li>
</ul>
<p>Otherwise this spell functions like Scrying, and Detect Scrying detects this spell.</p>
<dl>
    <dt>Material Components</dt> <dd>The eye of a far-seeing creature (eagles and hawks for example) is held in the left hand. Blood from a temporal creature is mixed with a concoction of alcohol, sodium, and strychnine. Finally, hundreds of strands must be collected from Temporal Prime, enchanted, and woven into a veil worn over the face. All items are destroyed except the veil, which may be reused.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Chronomancy'], 6);

        $spell              = new Spell;
        $spell->name        = 'Temporal Shell';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->range       = '5-foot radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>This spell creates a tempoary bubble around you, which is not affected by Temporal Prime. While inside the shell, you are immune to the passage of time, except as it applies directly to yourself. The effect is that the world has frozen between seconds. This gives you the opportunity for Actions like drinking a Healing Potion, or letting a harmful spell or potion waer off.</p>
<p>Once created, the shell cannot be moved, and you cannot leave it without automatically dispelling the effect. Any creatures within the area of effect are considered in the shell and can interact with you as if normal time is passing. If they step outside the radius, theyare immediately frozen until the spell expires or you dispell it. The spell's duration is measured by your subjective time.</p>
<dl>
    <dt>Material Components</dt> <dd>
        <p>The material components require preparation.</p>
        <ul>
            <li>A crystal sphere valued at 1,000 gp or better</li>
            <li>A diamond worth at least 5,000 gp must be enchanted with a Temporal Statis spell and placed within the the sphere</li>
            <li>The entire device must then be touched by a time dimensioanl while on Temporal Prime (touching does not have to be made voluntary).</li>
        </ul>
        <p>When this spell is cast, the device is consumed by the magical energies.</p>
    </dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Chronomancy'], 9);

        $spell              = new Spell;
        $spell->name        = 'Thaumaturgy';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You manifest a minor wonder, a sign of supernatural power, within range. You create one of the following magical effects within range.</p>
<ul>
    <li>Your voice booms up to three times as loud as normal for 1 minute</li>
    <li>You cuase flames to flicker, brighten, dim, or change color for 1 minute</li>
    <li>You cause harmless tremors in the ground for 1 minute</li>
    <li>You create an instantaneous sound that originates from a point of your choice within range, such as a rumble of thunder, the cry of a raven, or ominous whispers</li>
    <li>You instantaneously cause an unlocked door or window to fly open or slam shut</li>
    <li>You alter the appearance of your eyes for 1 minute</li>
</ul>
<p>If you cast this spell multiple times, you can have up to three of its 1-minute effects active at a time, and you can dismiss such as effect as an Action.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Enchantment'], 0);

        $spell              = new Spell;
        $spell->name        = 'Threefold Boon';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature touched';
        $spell->duration    = '3 rounds';
        $spell->description = '<p>The target makes all rolls with Double Advantage for the duration of the spell.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 5);

        $spell              = new Spell;
        $spell->name        = 'Theur`foqal';
        $spell->casting     = '1 hour (Somatic, Verbal, High Magic feat)';
        $spell->range       = 'Maximum 5-foot square windows. Touch range';
        $spell->targets     = 'One building opening';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>Summoned Shield, Conjured Screen. Ritual of Solitude</p>
<p>This High Magic spell summons invisible fields of magic within small enclosed areas (ie. window frames). At their weakest, they keep out all solid matter while allowing in summer breezes or sunlight (this is the standard for windows in Myth Drannor). Although this minimal magic can be improved with additional time in the casting or if summoned within a building created by a Myriad spell. The best of these windows can be set to turn opaque, heat-proof (in both directions), or sound-proof with a touch.</p>
<dl>
    <dt>Required Feats</dt> <dd>High Magic feat</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'High Magic'], 3);

        $spell              = new Spell;
        $spell->name        = 'Thorn Whip';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '20 feet';
        $spell->targets     = 'Self';
        $spell->duration    = '1 round';
        $spell->description = '<p>You create a long, vine-like whip covered in thorns. You may use an Action to make a Melee Attack with the whip. It deals 1D4 points of Slashing damage. You may use the Thorn Whip as a normal whip (to make Disarm or Trip attempts).</p>
<p>At the beginning of your next turn, the Thorn Whip disappears. You may dismiss it with a Free Action before then.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The whip deals an additional +2 Slashing damage</dd>
    <dt>Heightened (+4)</dt> <dd>The whip deals an additional +4 Slashing damage, and the range is increased to 30 feet</dd>
    <dt>Heightened (+8)</dt> <dd>The whip deals an additional +8 Slashing damage, and the range is increased to 40 feet</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Thunder Step';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '90 feet';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You teleport yourself to an unoccupied space you can see within range. Immediately after you disappear, a thunderous boom sounds, and each creature within 10 feet of the space you left must make a CON Save, taking 3D10 Sonic damage on a failed save. The thunder can be heard from up to 300 feet away.</p>
<p>You can bring along objects as long as their weight doesn't exceed what you can carry. You can also teleport one willing creature of your size or smaller who is carrying gear up to its carrying capacity. The creature must be within 5 feet of you when you cast this spell, and there must be an unoccupied space within 5 feet of your destination space for the creature to appear in; otherwise, the creature is left behind.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>increase the damage by +1D10</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Thunderclap';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->area           = '5-feet radius emanation centered on you';
        $spell->save_attribute = 'STR';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You create a burst of thunderous sound that can be heard up to 100 feet away. Each creature within range, other than you, takes 1D4 Sonic damage and must make a STR Save or be Deafened 1.</p>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by +1D4</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Sonic damage only</dd>
    <dt>Failure</dt> <dd>Sonic damage and Deafened 1</dd>
    <dt>Critical Failure</dt> <dd>Double Sonic damage and Deafened 3</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Thunderous Smite';
        $spell->casting        = 'Verbal Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'STR';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>The first time you hit with a melee weapon attack during this spell's duration, your weapon rings with thunder that is audible within 300 feet of you, and the attack deals an extra 2D6 Sonic damage to the target. Additionally, if the target is a creature, it must succeed on a STR Save or be pushed 10 feet away from you and knocked prone.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not pushed</dd>
    <dt>Failure</dt> <dd>Pushed 10 feet away and knocked prone</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Thunderstroke';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->targets        = 'On creature or object';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You call down a bolt of electricity, which unerringly strikes the target and deals 4D6 points of Electricity damage. A small rumble of thunder accompanies the bolt, which is as loud as a battle.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by +3D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Electricity'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Thunderwave';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '15-foot cube';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>A wave of thunderous force sweeps out from you. Each creature in a 15-foot cube originating from you must make a CON Save and take 2D8 Sonic damage and pushed back 10 feet away from you. In addition, unsecured objects that are completely within the area of effect are automatically pushed 10 feet away from you by the spell's effect, and the spell emits a thunderous boom audible out to 300 feet.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage and pushed away from you 10 feet</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Tidal Wave';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '120 feet';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You conjure up a wave of water that crashes down on an area within range. The area can be up to 30 feet long, up to 10 feet wide, and up to 10 feet tall. Each creature in that area must make a DEX Save. On a failed save, a creature takes 4D8 bludgeoning damage and is knocked prone. The water then spreads out across the ground in all directions, extinguishing unprotected flames in its area and within 30 feet of it, and then it vanishes.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage and not knocked prone</dd>
    <dt>Failure</dt> <dd>Full damage and knocked prone</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 3);

        $spell              = new Spell;
        $spell->name        = 'Time Capsule';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Small object touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You collapse your hands around an object, causing it to vanish from your present time. The object, which only you can be holding and can weigh no more than 5 pounds, is magically transported some amount of time into the future that you choose, up to 7 days.</p>
<p>When the time expires, the object reappears in the exact location it was when you cast the spell. If the space is occupied by a creature or object, the target object instead appears in the closest unoccupied space.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the maximum amount of time you can choose</dd>
    <dt>Heightened (+1)</dt> <dd>Double the maximum weight of the object that can be sent to the future</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Chronomancy'], 1);

        $spell                = new Spell;
        $spell->name          = 'Time Stop';
        $spell->casting       = 'Material Casting, Somatic Casting , Verbal Casting';
        $spell->spell_creator = 'Chronomancer';
        $spell->duration      = 'Instantaneous';
        $spell->description   = "<p>You temporarily stop time for everything but you, allowing you to use an incredible number of actions in a short period of time. Immediately after casting time stop, you can use up to 9 Actions in three sets of up to 3 Actions each. After each set of actions, 1 round passes, but only for you, effects specifically targeting or affecting you, and effects you create during the stoppage.</p>
<p>All other creatures and objects are invulnerable to your attacks, and you can't target or affect them with anything. Once you have finished your actions, time begins to flow again for the rest of the world. If you had created an effect whose duration extends past the end of the spell, such as a wall of fire, it immediately affects others again as normal, though it doesn't have any of the effects that normally happen when you first cast the spell.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Chronomancy'], 10);

        $spell              = new Spell;
        $spell->name        = 'Time Travel';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '10 feet';
        $spell->targets     = 'Willing creatures and/or objects withing range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell sends those within its area of effect backward or forward in time, up to 100 years. In effect, it encases those affected in a null-time bubble and pushes them into Temporal Prime. The bubble then moves along the timestream, reenters realty at the desired time, and releases the travelers. To the travelers, no time has passed.</p>
<p>This is the only way one can cause others to travel extensively throughout time without actually accompanying them. This can cause a real problem for subjects that end up in another time with no way back. Of course, if they happen to cause enough trouble to the natural order in their new time,the Guardians may show up and give them a free ride home. The person who sent them there is likely in for a visit then, too.</p>
<p>If you cast the spell on yourself, this is an easy way to travel through time with little or no risk.</p>
<dl>
    <dt>Material Components</dt> <dd>A ruby worth 10,000 gp or more, which is crushed into dust.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Chronomancy'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Timereaver';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->rarity         = 'Rare';
        $spell->range          = '10-foot radius';
        $spell->save_attribute = 'INT';
        $spell->duration       = 'Permanent';
        $spell->description    = '<p>This spell sends those within its area of effect backward or forward in time, up to 3 years per caster level. In effect, it encases those affected in a null-time bubble and pushes them into Temporal Prime. The bubble then moves along the timestream, reenters reality at the desired time, and releases the travelers. To the travelers, no time has passed.</p>
<p>This is the only way a chronomancer can cause others to travel extensively throughout time without actually accompanying them. This can cause a real problem for subjects that end up in another time with no way back. Of course, if they happen to cause enough trouble to the natural order in their new time, the Guardians may show up and give them a free ride home. The person who sent them there is likely in for a visit then, too.</p>
<p>If you cast the spell on yourself, this is an easy way to travel through time with little or no risk.</p>
<dl>
    <dt>Material Components</dt> <dd>A ruby worth 10,000 gp or more, which must be crushed into dust.</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>You are not sent through time if you do not wish to</dd>
    <dt>Failure</dt> <dd>You are sent through time against your will.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Chronomancy'], 8);

        $spell               = new Spell;
        $spell->name         = 'Timeslip';
        $spell->casting      = '3 rounds + 1 round / additional creature (Material, Somatic, Verbal, Ability Damage)';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>1 WIS damage</dd>
</dl>';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>By means of this spell, the barrier between reality and Temporal Prime is thinned, allowing you to slip between the two. Any creatures intending to attack someone who manages to this spell away first lose their attacks for that round. Slipping into Temporal Prime places you and your companions immediately downstream of your lifelines (add one round to the casting time for each companion). Lifelines trail off into the silver mist that surrounds you. If there is heavy turbulence in the area, the travelers are displaced slightly so that they are relatively safe.</p>
<p>When slipping back from Temporal Prime, you must focus on a lifeline to make the connection with reality. You end up within 1D10 miles of the creature that lifeline corresponds to. This feature also helps you to intersect a specific lifeline.</p>
<p>All your equipment slips with you, up to a maximum of 100 lbs. You may bring along upto 2 additional creatures. If a target is reluctant, a Save vs INT negates the entire spell.</p>
<dl>
    <dt>Material Components</dt> <dd>A diaphanous square of fine silk and a small piece of basalt</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the number of additional travelers by +2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Chronomancy'], 2);

        $spell                = new Spell;
        $spell->name          = 'Tiny Hut';
        $spell->casting       = '1 minute (Material, Somatic, Verbal)';
        $spell->spell_creator = 'Leomund';
        $spell->range         = '10-foot radius hemisphere';
        $spell->targets       = 'Self';
        $spell->duration      = '8 hours';
        $spell->description   = "<p>A 10-foot-radius immobile dome of force springs into existence around and above you and remains stationary for the duration. The spell ends if you leave its area.</p>
<p>Nine creatures of Medium size or smaller can fit inside the dome with you. The spell fails if its area includes a larger creature or more than nine creatures. Creatures and objects within the dome when you cast this spell can move through it freely. All other creatures and objects are barred from passing through it. Spells and other magical effects can't extend through the dome or be cast through it. The atmosphere inside the space is comfortable and dry, regardless of the weather outside.</p>
<p>Until the spell ends, you can command the interior to become dimly lit or dark. The dome is opaque from the outside, of any color you choose, but it is transparent from the inside.</p>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Tiny Servant';
        $spell->casting     = '1 Minute (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One tiny nonmagical object';
        $spell->duration    = '8 hours';
        $spell->description = "<p>You touch one Tiny nonmagical object that isn't attached to another object or a surface and isn't being carried by another creature. The target animates and sprouts little arms and legs, becoming a creature under your control until the spell ends or the creature drops to 0 Hit Points.</p>
<p>As an Action, you can mentally command the creature if it is within 120 feet of you. (if you control multiple creatures with this spell, you can command any or all of them at the same time, issuing the same command to each one)  You decide what Action the creature will take and where it will move during its next turn, or you can issue a simple, general command, such as to fetch a key, stand watch, or stack some books. If you issue no commands, the servant does nothing other than defend itself against hostile creatures. Once given an order, the servant continues to follow that order until its task is complete.</p>
<p>When the creature drops to 0 Hit Points, it reverts to its original form, and any remaining damage carries over to that form.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can animate two additional objects</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Transmutation'], 3);

        $spell                = new Spell;
        $spell->name          = 'Tongues';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->range         = 'Touch';
        $spell->targets       = 'One creature';
        $spell->spell_creator = 'Dace';
        $spell->duration      = '10 minutes';
        $spell->description   = '<p>The target can understand the meaning of the words of all languages as well as speak the languages of other cureatures. When in a mixed group of creatures, each time she speaks, the target can choose a creature and speak in a language that creature understands, even if she doesn\'t know what language that is.</p>';
        $spell->heightened    = '<dl>
    <dt>Permanency (Heightened +3)</dt> <dd>7,500 gp. 8 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Permanency'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Touch of Blindness';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Creature touched';
        $spell->save_attribute = 'CON';
        $spell->duration       = '3 rounds';
        $spell->description    = '<p>You hand glows with black energy. Until the duration, any Melee Touch attack you successfully make causes Blindness for 1 round. The target may make a CON Save to resist.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not Blinded</dd>
    <dt>Failure</dt> <dd>Blinded for 1 round</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Touch of Clumsiness';
        $spell->casting        = 'Somatic Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Creature touched';
        $spell->save_attribute = 'CON';
        $spell->duration       = '5 rounds';
        $spell->description    = "<p>You hand glows with dark green energy. Until the beginning of your next turn, your touch causes the target to suffer 4 points of DEX damage for 5 rounds. This damage cannot lower the targets DEX below 1. You must succeed on a Melee Touch attack on the target. The target may make a CON Save to resist.</p>
<p>While the target has any DEX damage from this spell, if the target moves more than half their Speed, it falls Prone. If the target can fly, it's maneuverability is reduced to one step lower.</p>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Half DEX damage. Does not fall prone due to movement or suffer maneuverability loss</dd>
    <dt>Failure</dt> <dd>Full DEX damage. Fall Prone if move more than half Speed. Flying maneuverability one step lower</dd>
    <dt>Critical Failure</dt> <dd>As Failure, except double DEX damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Touch of Fatigue';
        $spell->casting        = 'Somatic Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Creature touched';
        $spell->save_attribute = 'CON';
        $spell->duration       = '5 rounds';
        $spell->description    = "<p>You channel Negative energy through your hand. Until the beginning of your next turn, any creature you touch becomes Fatigued. You must succeed on a Melee Touch attack to strike a target. The subject is immediately Fatigued for the spell's duration.</p>
<p>This spell has no effect on a creature that is already fatigued. Unlike with normal Fatigue, the effect ends as soon as the spell's duration expires.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Not Fatigued</dd>
    <dt>Failure</dt> <dd>Fatigued as described</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Touch of Death';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'One living creature within range';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You point at one creature you can see within range. The target must make a CON Save or take 1D8 Negative damage. If the target is already injured, it takes 1D12 Negative damage instead.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No Effect</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+5)</dt> <dd>Increase the damage by +1D8 or +1D12</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 0);

        $spell              = new Spell;
        $spell->name        = 'Touch of Idiocy';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One living creature touched';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You dull the target's mind with a melee touch attack. On a success, the target is stupefied 2.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Disorienting'], 2);
        $spell->materials()->save(Material::where('name', 'Chalcedony')->firstOrFail(), ['price' => '50 gp']);

        $spell              = new Spell;
        $spell->name        = 'Touch of Tyche';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One creature within range';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>Choose one creature you can see within range. Once per turn, when the target makes an Ability Check, Attack Roll, or Save, ti can reroll that die roll and use either result. The target can make this choice after they see the roll, but before the DM says whether the roll succeeds or fails</p>';
        $helper->addTypesToSpell($spell, ['Divination'], 3);

        $spell              = new Spell;
        $spell->name        = 'Toxin Immunity';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>This spell makes the target immune to all forms of toxins (poisons and venoms) for the duration of the spell.</p>
<p>Poisons foiled by this spell are permanently neutralized.</p>
<p>This spell has no effect on toxins that the target is already suffering from (like the spell Neutralize Poison).</p>';
        $spell->heightened = '';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Poison'], 3);

        $spell              = new Spell;
        $spell->name        = 'Trace Teleport';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '40-foot radius sphere centered on you';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'Self';
        $spell->duration    = '20 minutes';
        $spell->description = "<p>You immediately become aware of any Teleportation effects that begin or end within the spell's area. Further, you can detect the lingering traces of any Teleportation effect that occurred up to 1 hour previously, in the same fashion.</p>
<p>When you detect a Teleportation, you may learn the following.</p>
<ul>
    <li>When the Teleportation effect occurred, to the nearest minute.</li>
    <li>Whether the Teleportation you detected is the point of origin or the point of destination.</li>
    <li>You gain a visual glimpse of the other end of the Teleportation</li>
    <li>You may attempt a Caster Level check (DC 11 + Teleportation effect's Caster Level), taking a -5 penalty if the Teleport occurred more than 1 minute ago. Success allows you to attempt a Teleportation yourself to the other end or to try some other form of Divination.</li>
</ul>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Divination'], 5);

        $spell              = new Spell;
        $spell->name        = 'Train Vegetation';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->range       = '30 feet';
        $spell->targets     = 'Live vegetation within range';
        $spell->duration    = 'Permanent';
        $spell->description = "<p>Developed long ago by wizards of the Elven Imperial Fleet of Wildspace to enable rapid and skillful repairs of elven spelljamming vessels, this spell allows you to sculpt and train living plants, such as (but not limited to) those from which elven man-o-wars and other spelljammers are grown.</p>
<p>When cast, this spell enables you to train, prune, cultivate, and otherwise sculpt up to 100 cubic yards (in other words,one tone of displacement in spelljammer terms) of plant life. Application of this spell does not enable you to radically alter the current state of plants within the area of effect. Branches may be lengthened, shortened, bent, twisted, thinned, and/or thickened, but no change may alter the vegetation's original state by more than 10% of the original value. For example, a 10-inch tall seedling could be increased in height to at most 11 inches whereas a 10-foot tall sapling could be increased to at most 11 feet in height. When applied to an elven spelljammer, this spell enables you to repair one hull point of damage per application.</p>
<p>Alternatively, this spell can be used to graft a single plant to another plant's root or to bind a single plant's root to a foreign substance such as a rock, bone, or the like.</p>
<dl>
    <dt>Material Components</dt> <dd>A twig with a green leaf still attached, an acorn, and powdered green gemstones of at least 500 gp in value</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Ritual'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Transmute Rock';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '40-foot cube. 120 foot range';
        $spell->save_attribute = 'STR | DEX';
        $spell->duration       = 'Until dispelled';
        $spell->description    = "<p>You choose an area of stone or mud that you can see that fits within a 40-foot cube and is within range, and choose one of the following effects.</p>
<dl>
    <dt>Transmute Rock to Mud.</dt> <dd>
        <p>Nonmagical rock of any sort in the area becomes an equal volume of thick, flowing mud that remains for the spell's duration.</p>
        <p>The ground in the spell's area becomes muddy enough that creatures can sink into it. Each foot that a creature moves through the mud costs 4 feet of movement, and any creature on the ground when you cast the spell must make a STR Save. A creature must also make the saving throw when it moves into the area for the first time on a turn or ends its turn there. On a failed save, a creature sinks into the mud and is restrained, though it can use an action to end the restrained condition on itself by pulling itself free of the mud.</p>
        <p>If you cast the spell on a ceiling, the mud falls. Any creature under the mud when it falls must make a DEX Save. A creature takes 4D8 bludgeoning damage on a failed save, or half as much damage on a successful one.</p>
    </dd>
    <dt>Transmute Mud to Rock.</dt> <dd>Nonmagical mud or quicksand in the area no more than 10 feet deep transforms into soft stone for the spell's duration. Any creature in the mud when it transforms must make a Dexterity saving throw. On a successful save, a creature is shunted safely to the surface in an unoccupied space. On a failed save, a creature becomes restrained by the rock. A restrained creature, or another creature within reach, can use an action to try to break the rock by succeeding on a DC 20 Strength check or by dealing damage to it. The rock has AC 15 and 25 hit points, and it is immune to poison and psychic damage.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 5);

        $spell              = new Spell;
        $spell->name        = 'Transmuted Weapon';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched nonmagical weapon';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>A nonmagical weapon you touch becomes a magic weapon.</p>
<p>Choose one of the following damage types: Acid, Poison. For the duration, the weapon has a +1 bonus to attack rolls and deals an extra 1D4 damage of the chosen type when it hits.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the bonus to hit by +1 and the damage by +1D4</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Acid', 'Poison'], 3);

        $spell              = new Spell;
        $spell->name        = 'Transport via Plants';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '10 feet';
        $spell->duration    = '1 round';
        $spell->description = '<p>This spell creates a magical link between a Large or larger inanimate plant within range and another plant, at any distance, on the same plane of existence. You must have seen or touched the destination plant at least once before. For the duration, any creature can step into the target plant and exit from the destination plant by using 5 feet of movement.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Plant', 'Teleportation'], 6);

        $spell               = new Spell;
        $spell->name         = 'Treantstaff';
        $spell->casting      = '1 day (Material, Somatic, Verbal, Secondary Casters, Ability Damage)';
        $spell->requirements = '<dl>
    <dt>Secondary Caster</dt> <dd>One caster who must cast Animate Wood every 4 hours</dd>
    <dt>Ability Damage</dt> <dd>2 CON Damage</dd>
</dl>';
        $spell->targets     = 'Staff touched';
        $spell->duration    = '1 week';
        $spell->description = '<p>During the casting time, you prepare a staff to receive this spell. The staff must be a sound limb cut from an ash, oak, or yew, then cured, shaped, carved, and polished.</p>
<p>Once this spell is complete, you may use a Double Action to strike the staff into the ground, at which point the staff turns into a treant-like creature. The staff-treant defends you and as an Action, you may command it verbally. The staff-treant is not a true treant (it cannot converse with actual treants, or control trees). If the staff-treant is reduced to 0 or fewer Hit Points, it crumbles to dust and the staff is destroyed. As an Action, you may change the staff-treant back into a staff. You may turn the staff into a staff-treant 3 times, at which point the spell ends. While this spell is still in effect, you do not recover the spell slot you used to cast this spell.</p>';
        $spell->heightened  = '<dl>
    <dt>Permanency (Heightened +5)</dt> <dd>50,000 gp, 10 CON Damage, blessing from Silvanus (Commune with Nature). The staff becomes a permanent magically item that can be used once per day.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Plant'], 6);

        $spell              = new Spell;
        $spell->name        = 'Treasure Scent';
        $spell->casting     = 'Verbal Casting, Somatic Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours';
        $spell->description = '<p>A multi-hued glow of metallic color surrounds you. The swirling glow manifests as a thin mist that forces itself up into your nose.</p>
<p>You can detect the following that are within 30 feet.</p>
<ul>
    <li>Copper</li>
    <li>Silver</li>
    <li>Gold</li>
    <li>Platinum</li>
    <li>Gems</li>
</ul>
<p>When you detect one of these types of valuables, the exact location of the source is not revealed-only presence and direction. Whenever you come within 5 feet of the treasure, you can pinpoint its exact location. The spell can penetrate barriers, but 1 foot of stone, 1 inch of common metal, a thin sheet of lead, or 3 feet of wood or dirt blocks it.</p>';
        $helper->addTypesToSpell($spell, ['Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Tree Shape';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->duration    = 'Concentration, up to 8 hours';
        $spell->description = "<p>You transform into a Large tree. Perception checks don't reveal your true nature, but a successful Nature or Survival check against your spell DC reveals that the tree is new to the area. While in tree form, you can observe everything around you, but you can't act other than by using an action (this action has the concentrate trait) to end the spell, which ends your turn. As a tree, your AC is 20; your TAC is 12; and only conditional bonuses, conditional penalties, circumstance bonuses, and circumstance penalties affect you. You treat successes and critical successes on DEX Saves as failures.</p>";
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Tree Stride';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>You step into a living tree with a trunk large enough to fit you and instantly teleport to any tree of the same species within 5 miles that also has a sufficiently large trunk. Once you enter the first tree, you instantly know the rough locations of other sufficiently large trees of the same species within range and can leave from the original tree, if you prefer. You can't carry extradimensional spaces with you; if you attempt to do so, the spell fails.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The destination tree can be up to 50 miles away</dd>
    <dt>Heightened (+2)</dt> <dd>The destination tree can be up to 500 miles away</dd>
    <dt>Heightened (+3)</dt> <dd>The destination tree can anywhere on the same planet, though you are unlikely to find a tree of the same species on a noncontiguous continent</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Plant', 'Teleportation'], 5);

        $spell              = new Spell;
        $spell->name        = 'Tremorsense';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 30 minutes';
        $spell->description = '<p>You gain Tremorsense: 30 as long as you are touching the ground.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 2);

        $spell              = new Spell;
        $spell->name        = 'Triple Mask';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '90 feet';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You create three duplicates of yourself. These images look, sound, and smell like you, but are intangible. You can switch your perceptions to any shadow or your own body as an Action on your turn. You gain the Quickened condition and this extra Action can only be used to switch between your shadows. You may direct a shadow to move to a particular direction or to a known location. otherwise, they remain motionless and unreactive. A shadow that you control my interact with physical objects, such as opening doors or picking up objects.</p>
<p>You may cast spells through your shadows (but only the one you are controlling).</p>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Shadow'], 7);

        $spell              = new Spell;
        $spell->name        = 'Triple Time';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '60-foot emanation';
        $spell->duration    = '1 round';
        $spell->description = "<p>You dance at a lively tempo, speeding your allies' movement. You and all allies in the area gain a +10-foot status bonus to all Speeds for 1 round.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Emotion', 'Mental'], 1);

        $spell               = new Spell;
        $spell->name         = 'True Creation';
        $spell->casting      = '10 minutes (Material, Somatic, Verbal)';
        $spell->range        = '0 feet';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>7 CON Damage</dd>
</dl>';
        $spell->duration     = 'Instantaneous';
        $spell->description  = '<p>The caster creates a nonmagical, unattended object of any sort of matter. Items created are permanent and cannot be negated by dispelling magics or negating powers. For all intents and purposes, these items are completely real. The volume of the item created cannot exceed 1 cubic foot per caster level. The caster must succeed at an appropriate skill check to make a complex item.</p>
<p>Unlike the items brought into being by the lower-level spells minor creation and major creation, objects created by the casting of true creation can be used as material components.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Creation'], 8);

        $spell                 = new Spell;
        $spell->name           = 'True Form';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'Up to 3 creatures within range, no two of which can be more than 30 feet apart';
        $spell->save_attribute = 'CHR';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>This spell removes any Polymorph effects from the target creatures, returning them to their original form, even against their will. Against targets affected by Polymorph effects (such as Baleful Polymorph), you must make a Caster Level check (DC 11 + Caster Level of the effect).</p>
<p>A creature with the supernatural ability to change shape (such as a lycanthrope) must make a CHR Save or immediately revert to its true form. If it fails this first Save, the creature can attempt another CHR Save to overcome the spell as a Triple Action that does not Provoke Attacks of Opportunity. If this Save succeeds, the spell ends and the creature is capable of changing shape once again. If the second Save fails, the creature is locked in its true form for 12 hours, preventing any further polymorph effects from changing its shape.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>First Save: No effect. Second Save: locked in true form for 1 more round.</dd>
    <dt>Failure</dt> <dd>First Save: forced into true form but may attempt Second Save. Second Save: locked in true form for 12 hours.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Polymorph'], 4);

        $spell              = new Spell;
        $spell->name        = 'True Polymorph';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One creature or nonmagical object';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>Choose one creature or nonmagical object that you can see within range. You transform the creature into a different creature, the creature into an object, or the object into a creature (the object must be neither worn nor carried by another creature). The transformation lasts for the duration, or until the target drops to 0 hit points or dies. If you concentrate on this spell for the full duration, the transformation lasts until it is dispelled.</p>
<p>This spell has no effect on a shapechanger or a creature with 0 hit points. An unwilling creature can make a Wisdom saving throw, and if it succeeds, it isn't affected by this spell.</p>
<dl>
    <dt>Creature into creature</dt> <dd>
        <p>If you turn a creature into another kind of creature, the new form can be any kind you choose whose challenge rating is equal to or less than the target's (or its level, if the target doesn't have a challenge rating). The target's game statistics, including mental ability scores, are replaced by the statistics of the new form. It retains its alignment and personality.</p>
        <p>The target assumes the hit points of its new form, and when it reverts to its normal form, the creature returns to the number of hit points it had before it transformed. If it reverts as a result of dropping to 0 hit points, any excess damage carries over to its normal form. As long as the excess damage doesn't reduce the creature's normal form to 0 hit points, it isn't knocked unconscious.</p>
        <p>The creature is limited in the actions it can perform by the nature of its new form, and it can't speak, cast spells, or take any other action that requires hands or speech, unless its new form is capable of such actions.</p>
        <p>The target's gear melds into the new form. The creature can't activate, use, wield, or otherwise benefit from any of its equipment.</p>
    </dd>
    <dt>Object into creature</dt> <dd>
        <p>You can turn an object into any kind of creature, as long as the creature's size is no larger than the object's size and the creature's challenge rating is 9 or lower. The creature is friendly to you and your companions. It acts on each of your turns. You decide what action it takes and how it moves. The GM has the creature's statistics and resolves all of its actions and movement.</p>
<p>If the spell becomes permanent, you no longer control the creature. It might remain friendly to you, depending on how you have treated it.</p>
    </dd>
    <dt>Creature into object</dt> <dd>
        <p>If you turn a creature into an object, it transforms along with whatever it is wearing and carrying into that form. The creature's statistics become those of the object, and the creature has no memory of time spent in this form, after the spell ends and it returns to its normal form.</p>
    </dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 9);

        $spell              = new Spell;
        $spell->name        = 'True Resurrection';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One dead creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You touch a creature that has been dead for no longer than 200 years and that died for any reason except old age. If the creature's soul is free and willing, the creature is restored to life with all its hit points.</p>
<p>This spell closes all wounds, neutralizes any poison, cures all diseases, and lifts any curses affecting the creature when it died. The spell replaces damaged or missing organs and limbs.</p>
<p>The spell can even provide a new body if the original no longer exists, in which case you must speak the creature's name. The creature then appears in an unoccupied space you choose within 10 feet of you.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Positive'], 10);

        $spell              = new Spell;
        $spell->name        = 'True Seeing';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You can see things within 60 feet as they actually are. The GM rolls a secret dispel check against any Illusion or Transmutation in the area, but only for the purpose of determining whether you see through it (for instance, if the check succeeds against a Polymorph spell, you can see the creature's true form, but you don't end the Polymorph spell).</p>";
        $helper->addTypesToSpell($spell, ['Divination'], 6);

        $spell              = new Spell;
        $spell->name        = 'True Strike';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Until the end of your turn';
        $spell->description = '<p>You have Advantage on your next attack this turn. The attack also ignores circumstance penalties to the attack roll and any miss chance due to the target being concealed or sensed.</p>
<p>If you use a 1st level Spell Slot to cast this spell, then it only requires a Somatic Casting, and if you hit, you deal an additional Damage Dice.</p>';
        $helper->addTypesToSpell($spell, ['Divination', 'Enchantment', 'Fortune'], 0);

        $spell              = new Spell;
        $spell->name        = 'Tsunami';
        $spell->casting     = 'Verbal Casting, Verbal Casting';
        $spell->range       = 'Sight';
        $spell->duration    = 'Concentration, up to 6 rounds';
        $spell->description = "<p>A wall of water springs into existence at a point you choose within range. You can make the wall up to 300 feet long, 300 feet high, and 50 feet thick. The wall lasts for the duration.</p>
<p>When the wall appears, each creature within its area must make a Strength saving throw. On a failed save, a creature takes 6d10 bludgeoning damage, or half as much damage on a successful save.</p>
<p>At the start of each of your turns after the wall appears, the wall, along with any creatures in it, moves 50 feet away from you. Any Huge or smaller creature inside the wall or whose space the wall enters when it moves must succeed on a Strength saving throw or take 5d10 bludgeoning damage. A creature can take this damage only once per round. At the end of the turn, the wall's height is reduced by 50 feet, and the damage creatures take from the spell on subsequent rounds is reduced by 1d10. When the wall reaches 0 feet in height, the spell ends.</p>
<p>A creature caught in the wall can move by swimming. Because of the force of the wave, though, the creature must make a successful Strength (Athletics) check against your spell save DC in order to move at all. If it fails the check, it can't move. A creature that moves out of the area falls to the ground.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 8);

        $spell              = new Spell;
        $spell->name        = 'Twin Form';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->rarity      = 'Rare';
        $spell->duration    = '3 hours';
        $spell->description = "<p>This spell creates a perfect double of yourself from your body, dressed and equipped exactly as you are, although all the duplicates items will not be magical.</p>
<p>You are able to shift your consciousness from one body to the other once each round as an Action. This shift takes place either immediately before your turn or immediately after it, but not during the round.</p>
<p>You may act normally in the body you inhabit. Your other self is treated as though Dazed, and may only take 1 Action each round during your turn. Your twin cannot speak while you are in your other body. It cannot make Attacks of Opportunity.</p>
<p>Both you and your twin have the same statistics and start with the number of Hit Points you had when you cast this spell. Once you have split, these Hit Points are tracked separately. Any spells, or magical effects (such as from potions) that were active when you cast this spell are active for both you and your twin. If any such effects expire, are dispelled, dismissed, or otherwise used or ended, they end for both of you. Spells cast after you split affect you and your twin as though you were two separate targets.</p>
<p>The body you do not inhabit crumbles into dust when the spell expires or is dismissed. If the body you inhabit is destroyed, you immediately shift to your surviving self and the spell immediately ends. The body you left behind crumbles into dust, and you are Stunned until the start of your next turn. If the body you do not inhabit is destroyed, the spell also ends immediately, but you suffer no ill effects.</p>
<p>You have no special ability to sense what your second body is experiencing, though you immediately know if it has been destroyed. You may switch between bodies at any distance on the same plane. If your bodies cross into separate planes (including through the use of teleport or blink), the body you inhabit survives, while your other body is destroyed.</p>
<dl>
    <dt>Material Components</dt> <dd>A blend of soil and the caster's blood</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Necromancy'], 6);

        $spell              = new Spell;
        $spell->name        = "Tyche's Touch";
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One living creature touched';
        $spell->duration    = '24 hours or until discharged';
        $spell->description = "<p>This spell confers either a protection or a curse (your choice at the time of casting) upon a single living creature. The effects of the two options are as follows.</p>
<dl>
    <dt>Protection</dt> <dd>The target gets a +3 Sacred bonus on the first Save made after the spell is cast, a +2 Sacred bonus on the second Save, and a +1 Sacred bonus on the third Save.</dd>
    <dt>Curse</dt> <dd>The subject takes a -3 penalty on the first Save made after the spell is cast, a -2 penalty on the second Save, and a -1 penalty on the third Save.</dd>
</dl>
<p>This spell lasts for 24 hours or until its power is exhausted (after the third Save).</p>
<p>Only one Tyche's Touch spell can affect a given creature at one time.</p>
<p>Tyche's Touch counters and dispels each other if cast on the same creature, regardless of how many Saves the first casting of the spell has already affected.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless', 'Curse'], 2);
    }
}
