<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsASeeder extends Seeder
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

        $spell              = new Spell;
        $spell->name        = 'Abate Dracorage';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '90 feet';
        $spell->targets     = 'One dragon';
        $spell->rarity      = 'Rare';
        $spell->duration    = '1 week';
        $spell->description = "<p>This spell helps calm the effects, of the Dracorage. It instantly restores 5 points of WIS damage resulting from the Dracorage and returns the dragon's negative attitude toward nondragons one step closer in the positive direction.</p>
<p>In addition, the spell also protects the dragon from having to make another Save against the Dracorage for the duration.</p>
<p>This spell counters or dispels Aggravate Dracorage.</p>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Ritual'], 4);

        $spell              = new Spell;
        $spell->name        = 'Abeyance';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature Touched';
        $spell->duration    = '24 hours';
        $spell->description = '<p>Abeyance suppresses the effects of a single curse on a creature. It does not restore any damage or drain that might have been caused by the curse. Abeyance cannot suppress curses that cannot be removed by remove curse, but it can suppress curses such as lycanthropy that require remove curse along with additional measures. An individual curse can be suppressed only once by abeyance, even if cast by a different caster.</p>
<p>Abeyance does not allow a creature to divest itself of cursed objects, though it can suppress a curse contracted from an object.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Ritual'], 2);
        $spell->materials()->save(Material::where('name', 'Belladonna')->firstOrFail());

        $spell                 = new Spell;
        $spell->name           = 'Ability Rip';
        $spell->casting        = '1 hour (Material, Somatic, Verbal)';
        $spell->rarity         = 'Rare';
        $spell->range          = 'Touch';
        $spell->targets        = 'Two living creatures';
        $spell->save_attribute = 'CHA';
        $spell->duration       = '24 Hours';
        $spell->description    = '<p>You rip a supernatural ability of your choice away from one creature and transfer it to another. The two creatures must be within 30 feet of each other and remain conscious throughout the casting of the spell. In exchange for this new ability, the recipient loses a supernatural ability it already possesses. If it has none to exchange, it instead loses two class levels (or 2 HD if it has no class levels).</p>
<p>Class features cannot be transferred by means of this spell. The spell fails if used to transfer an ability to a creature that lacks the proper body parts, size, or other criteria for its use, or if the target creature has fewer than 2 HD and no supernatural abilities to trade. Either subject may negate the transfer with a successful CHA save.</p>
<dl>
    <dt>Material Components</dt> <dd>A caterpillar in a cocoon</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Spell fails</dd>
    <dt>Failure</dt> <dd>Ability is transferred</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Ritual'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Aboleth Curse';
        $spell->casting        = '1 minute (Material, Somatic, Verbal, Secondary Caster)';
        $spell->rarity         = 'Rare';
        $spell->range          = 'Touch';
        $spell->targets        = 'Living creature touched';
        $spell->requirements   = '<dl>
    <dt>Secondary Caster</dt> <dd>2 other casters, each must cast Bane</dd>
</dl>';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Permanent';
        $spell->description    = "<p>You bestow a dreadful affliction on the creature you touch, similar to the effect of an aboleth's foul contact.</p>
<p>The skin of the target creature transforms into a transparent, glistening membrane. A creature so transformed must keep this membrane moistened with cool, fresh water or take 1D12 points of damage every 10 minutes. In addition, its natural armor bonus (if any) decreases by 1, but it can never drop below 0.</p>
<p>This transformation does not affect natural armor bonus provided by magic items. This curse cannot be Dispelled, but it can be removed with a Remove Curse spell if cast within 24 hours. Afterward, only a Heal, Limited Wish, Miracle, or Wish can remove the affliction.</p>";
        $spell->heightened     = '';
        $spell->saves          = '';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Evil'], 4);

        $spell              = new Spell;
        $spell->name        = 'Abolish Shadows';
        $spell->casting     = 'Material Casting, Verbal Casting';
        $spell->range       = '60 feet radius burst';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>A burst of light leaps forth from your body and disrupts all shadows in the area of effect, it has the following effects.</p>
<ul>
    <li>All shadow creatures (including Shadows, Shades, and other monsters or beings of the Shadow type) takes 10D6 Light damage. They may make a CON Save for half damage</li>
    <li>Spells of the Shadow or Darkness type may be dispelled. Make a Dispel check with a +5 bonus.</li>
</ul>
<dl>
    <dt>Material Components< </dt> <dd>A small piece of obsidian</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Light damage by +1D6 and add a +2 to your Dispel check</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>Quarter damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Banished back to the Shadowfell</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 3);

        $spell              = new Spell;
        $spell->name        = 'Absorb Elements';
        $spell->casting     = 'Reaction';
        $spell->targets     = 'Self';
        $spell->duration    = '1 round';
        $spell->description = '<p>When you cast this spell, choose one of the following elements.</p>
<ul>
    <li>Cold</li>
    <li>Electricity</li>
    <li>Fire</li>
    <li>Light</li>
    <li>Sonic</li>
</ul>
<p>This spell captures some of the incoming energy, lessening its effect on you and storing it for your next attack. You have Resistance to the triggering damage type until the start of your next turn. Also, the first time you hit with a melee attack on your next turn, the target takes an extra 1D6 damage of the triggering type, and the spell ends.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the extra damage by +1D6</dd>
    <dt>Heightened (+5)</dt> <dd>As an action, you may become immune to the chosen energy until the beginning of your next turn, at which point this spell ends. The target is healed by half the damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Evocation', 'Cold', 'Electricity', 'Fire', 'Light', 'Sonic'], 2);

        $spell               = new Spell;
        $spell->name         = 'Absorb Strength';
        $spell->casting      = 'Material Casting, Somatic Casting, Verbal Casting, Ability Damage';
        $spell->rarity       = 'Rare';
        $spell->targets      = 'Self';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>2D4 WIS damage</dd>
</dl>';
        $spell->duration      = '3 hours';
        $spell->description   = "<p>You eat at least a portion of the flesh of another creature's heart or liver, thereby gaining some of its STR and CON. You gain a +4 bonus to STR and CON. You also gain a +1 bonus to their Natural Armor bonus.</p>
<dl>
    <dt>Material Components</dt> <dd>A fresh or preserved (still bloody) 1-ounce portion of another creature's heart or liver.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Evil', 'Vile'], 3);

        $spell              = new Spell;
        $spell->name        = 'Absorption';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 3 hours or until expended';
        $spell->description = "<p>Spells and spell-like effects that target you are absorbed, their energy stored to power spells of your own.</p>
<p>You create a field of protection around yourself. This field absorbs ranged spells that have you as a target. Touch spells, effect spells, and area spells that affect you cannot be absorbed. Once the spell is cast, you can absorb 1D4 + 6 spell levels (rolled secretly by the DM). The level of each spell you absorb is subtracted form the total. If a spell is only partially absorbed (because its level exceeds the number of levels remaining to be absorbed), divide the number of spell levels left unabsorbed by the original spell level. For spells that deal damage, use the result to determine what fraction of the damage you take. For spells that create effects, use the result as a percentage change to be affected.</p>
<blockquote>
    Ex. you have 3 spell levels of absorption remaining and are struck by Dominate Person (cast as a 5th-level spell). Absorption absorbs 3 levels of the spell, resulting in a 40% chance that you will be affected normally.
</blockquote>
<p>If affected, any Save the spell allows you still applies. Likewise, if you're struck by Disintegrate (cast as a 6th level spell) with 4 levels of absorption remaining, 2 levels of the spell remain, and you take only 33% of the damage your would normally take form the spell. You can use captured spell energy to cast any spell you know or have prepared, but spells so cast don't use up a Spell Slot.</p>
<p>The levels of spell energy you have stored must be equal to or greater than the level of the spell you want to cast, and you must have at hand (and expend) any material components required for the spell.</p>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 9);

        $spell               = new Spell;
        $spell->name         = 'Abyssal Army';
        $spell->casting      = '10 minutes (Somatic, Verbal, Secondary Casters)';
        $spell->rarity       = 'Rare';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 2 other casters, each must cast a Conjuration (Summoning) spell of 3rd level or higher</dd>
</dl>';
        $spell->duration     = 'Concentration, up to 3 hours';
        $spell->description  = '<p>You summon an army of demons from the Abyss.</p>
<ul>
    <li>When the spell is complete, 2D4 Dretches appear</li>
    <li>Ten minutes later, 1D4 Babau demons appear</li>
    <li>Ten minutes after that, one vrock demon appears</li>
</ul>
<p>Each creature has maximum Hit Points per Hit Die. Once these creatures appear, they serve you for the duration of the spell. The demons obey you explicitly and never attack you, even if someone else manages to gain control of them. You must Concentrate only until all the demons have been summoned. Once the Vrock appears, Concentration is no longer required. You can dismiss any of the demons (singularly or in groups) summoned by this spell as an Action.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning', 'Evil', 'Demon'], 9);

        $spell              = new Spell;
        $spell->name        = 'Accelerated Movement';
        $spell->casting     = 'Reaction';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You do not suffer any skill check penalties and can move at your full Land Speed while using the following skills.</p>
<ul>
    <li>Balance</li>
    <li>Climb</li>
    <li>Move Silently</li>
</ul>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell                = new Spell;
        $spell->name          = 'Acid Arrow';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->range         = '120 feet';
        $spell->spell_creator = 'Melf';
        $spell->targets       = 'One creature or object';
        $spell->duration      = 'Instantaneous';
        $spell->description   = '<p>Make a Ranged Touch Attack against the target. On a hit, you deal Acid damage equal to 1D8 plus your spellcasting ability modifier plus 1D6 persistent Acid Damage. On a critical hit, double the damage, but not the persistent damage.</p>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+2)</dt> <dd>1D8 extra damage and 1D6 extra Persistent damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Acid', 'Attack', 'Ranged', 'Transmutation'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Acid Rain';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = 'Cylinder (100-ft radius) / 300 ft';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>You cause a dark cloud to form that rains Acid down. The rain deals 3D6 Acid damage to any and all creatures that start their turn in the area of effect. This spell must be cast outdoors. The overcast of clouds persists for the next 2 rounds, which then disperses (it does not disperse clouds that existed before this spell was cast).</p>
<p>You suffer no damage if you are under something, although whatever that is above you will suffer the effects of the Acid.</p>
<dl>
    <dt>Material Components</dt> <dd>A drop of Acid</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6.</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Acid'], 5);

        $spell              = new Spell;
        $spell->name        = 'Acid Splash';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One creature or object';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You splash a glob of acid. Make a Ranged Touch Attack. If you hit, you deal 1D4 Acid damage plus 1 splash damage. On a critical success, the target also takes 1 persistent Acid damage. The Acid dissipates after 5 rounds.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The acid does not dissipate.</dd>
    <dt>Heightened (+2)</dt> <dd>You now add your Spellcasting ability modifier to the damage, but only once. Increase the Acid damage by +1D4, the splash damage by +1, and the persistent damage by +1.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Acid', 'Attack', 'Ranged', 'Transmutation'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Acid Stream';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 foot long and 5 foot wide line';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A stream of Acid emanates from you in a line 30 feet long and 5 feet wide in a direction you choose. Each creature in the line must succeed on a DEX Save, on a Failure, a creature takes 1D4 Acid Damage and 1D4 Persistent Acid Damage.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No Damage</dd>
    <dt>Failure</dt> <dd>Full Damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage of both the initial Damage and the Persistent Damage by +1D4</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Attack', 'Ranged', 'Acid'], 1);

        $spell              = new Spell;
        $spell->name        = 'Aerial Form';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute or until dismissed';
        $spell->description = "<p>You transform into an animal of size Medium with a CR of 2 or less with a Fly Speed. You count as an animal in addition to your normal traits. Your gear is absorbed into you; the constant abilities of your gear still function, but you can't activate it.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can choose an animal with CR 3 or less and size Large or smaller.</dd>
    <dt>Heightened (+2)</dt> <dd>You can choose an animal with CR 4 or less and size Huge or smaller.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation'], 4);

        $spell                = new Spell;
        $spell->name          = 'Aggravate Dracorage';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->range         = '90 feet';
        $spell->spell_creator = 'Samaster';
        $spell->rarity        = 'Rare';
        $spell->targets       = 'One dragon';
        $spell->duration      = '1 minute';
        $spell->description   = "<p>This spell fuels the Dracorage for a short period. It causes the target to instantly and fully succumb to the Dracorage, shifting the target's attitude toward non-dragons to hostile and instilling in the dragon a bloodthirsty desire to murder and wreak havoc. This usually cause the dragon (even a good metallic dragon) to immediately attack all non-dragons nearby.</p>
<p>Because this spell manipulates the existing Dracorage Mythal, the WIS Save against this spell is 4 higher than normal and has a DC of 18 + appropriate ability modifier.</p>
<p>This spell functions only during the period of the Dracorage and has no effect on dragons at other times.</p>
<p>This spell counters or dispels Abate Dracorage.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Illusion', 'Compulsion'], 4);

        $spell              = new Spell;
        $spell->name        = 'Aid';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = '8 hours';
        $spell->targets     = 'Ally creatures in range';
        $spell->description = "<p>Your spell bolsters your allies with toughness and resolve. Choose up to three creatures within range. Each target's Hit Point Max and current Hit Points increase by 5 for the duration.</p>";
        $spell->heightened  = "<dl>
    <dt>Heightened (+1)</dt> <dd>When you cast this spell, a target's Hit Points increases by an additional 5 for each additional spell slot.</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the maximum number of targets  by 3.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 2);

        $spell              = new Spell;
        $spell->name        = 'Air Breathing';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'Up to 10 creatures';
        $spell->duration    = '24 hour';
        $spell->description = '<p>This spell grants up to ten willing creatures you can see within range the ability to breathe air until the spell ends. Affected creatures also retain their normal mode of respiration.</p>
<p>You can choose to sacrifice the Spell Slot used to cast this spell to allow the targets to continue to benefit from this spell when the duration ends.</p>
<p>This spell Counters and Dis-spells Water Breathing.</p>
<dl>
    <dt>Material Components</dt> <dd>A short reed or piece of straw</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);

        $spell              = new Spell;
        $spell->name        = 'Air Bubble';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>Air bubble creates a small pocket of breathable air that surrounds the touched creature's head or the touched object. The air bubble allows the creature touched to breathe underwater or in similar airless environments, or protects the object touched from water damage.</p>
<p>A firearm within an air bubble can be loaded—assuming the black powder comes from a powder horn, a cartridge, or some other airtight protective device—and fired. When shooting such a firearm underwater, the shot still takes the standard –2 penalty on attack rolls for every 5 feet of water the bullet passes through, in addition to normal penalties due to range. If a firearm within the air bubble explodes, the explosion occurs normally.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Air of Authority';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '10 minutes';
        $spell->description    = "<p>You gain an unmistakable air of authority, which clouds creatures' minds and causes them to believe that you are their direct superior. Each creature with whom you attempt to leverage your newfound authority receives a WIS Save to disbelieve the illusion. Otherwise, it treats you as it would its direct superior.</p>
<p>Creatures with different direct superiors see you in different ways, which can potentially lead to conflicts that allow additional Save (for instance, if a cook sees you as the head chef, he might be quite perplexed to see the vizier treating you as if you were the king).</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect (see text)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor'], 3);

        $spell              = new Spell;
        $spell->name        = 'Air Shield';
        $spell->casting     = 'Somatic Casting (Reaction)';
        $spell->targets     = 'Self';
        $spell->duration    = 'Until your next turn or until dismissed';
        $spell->description = "<p>You swirl some air around your hand into a semi-solid area to protect you. This counts as using the Raise a Shield Action to gain a +1 circumstance bonus to AC until the start of your next turn, though it doesn't require a hand to use. Against ranged physical attacks, the shield provides a +5 AC instead.</p>
<p>While the spell is in effect, you can also use the Shield Block Reaction with your air shield. The shield has Hardness 2. After you use Shield Block, the spell is dismissed and you take any excess damage.</p>
<p>You may use a Reaction to cast this spell not on your turn.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Air Sphere';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '5-foot diameter sphere, 30 foot range';
        $spell->save_attribute = 'STR';
        $spell->duration       = 'Concentration or until dismissed (see description)';
        $spell->description    = "<p>You create a sphere of swirling wind and dust in a square within range. The sphere deals 1D6 Bludgeoning damage to each creature in the sphere's square; each creature must attempt a STR Save. As an Action, you can direct the sphere to roll to a spot within range and deal 1D6 Bludgeoning damage; each creature in that square must attempt a Save. You can't move the sphere during the round you create it.</p>
<p>The strong wind keeps fog, smoke, and other gases at bay. Small or smaller flying creatures or objects can't pass through the wall. Loose, lightweight materials brought into the wall fly upward. Arrows, bolts, and other ordinary projectiles launched at targets behind the wall are deflected upward and automatically miss. (Boulders hurled by giants or siege engines, and similar projectiles, are unaffected.) Creatures in gaseous form can't pass through it.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The creature is unaffected</dd>
    <dt>Failure</dt> <dd>The creature takes full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 2);

        $spell              = new Spell;
        $spell->name        = 'Air Walk';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = '1 minute';
        $spell->description = '<p>The target can walk on air as if it were solid ground. It can ascend and descend in this way at a maximum of a 45-degree angle.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Air'], 4);

        $spell              = new Spell;
        $spell->name        = 'Akh`Faen`Tel`Quess';
        $spell->casting     = '1 hour (Somatic Casting, Verbal Casting, Skill Check)';
        $spell->range       = 'Touch';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'Elf creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>Life of Duty, Form of the People's Need, Ritual of Solitude.</p>
<p>This High Magic spell, the most intensely private of all rituals, alters the form of an elf into any living elf race or subrace. The elf becomes one of another elf race (including the lost avariel) physically, but not mentally. This transformation ritual is undertaken only with the full consent of a clan elder or the Coronal and the participant (unless in banishment) and is usually invoked only for an important missions for a community. The change is permanent until a second casting is performed to revert the elf to his original form, or upon death. This change happens slowly over 1 day.</p>
<p>This High Magic spell can only be cast once in three centuries on any elf and only twice in a lifetime (Corellon Larethian enforces this rule).</p>
<p>Theoretically, this High Magic spell could allow an elf to be transformed into a human or dwarf (or other race), but no High Mage or High Priest has ever dared to attempt such.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'High Magic'], 8);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 25]);

        $spell               = new Spell;
        $spell->name         = 'Akrmaesual';
        $spell->casting      = '10 minutes (Somatic, Verbal, Skill Check, Secondary Casters)';
        $spell->range        = 'Half-mile radius';
        $spell->rarity       = 'Rare';
        $spell->duration     = 'Instantaneous';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>2 secondary casters, each also casting this spell at the same time</dd>
</dl>';
        $spell->description = '<p>The High Revival, Restoration. Ritual of Complement</p>
<p>This spell is a broad spectrum healing that affects a wide area. It has the following effects. It only effects plant and animal life.</p>
<ul>
    <li>Shifting of weather to a milder climate, cancelling drought and blight</li>
    <li>Acceleration of decomposition which improves soil fertility</li>
    <li>Remove Curse</li>
    <li>Remove Disease</li>
</ul>';
        $helper->addTypesToSpell($spell, ['High Magic', 'Transmutation', 'Enchantment'], 7);
        $spell->skills()->save(app()->skills['Nature'], ['dc' => 22]);

        $spell                = new Spell;
        $spell->name          = 'Alarm';
        $spell->casting       = '1 minute (Material, Somatic, Verbal)';
        $spell->area          = '30 foot radius';
        $spell->spell_creator = 'Decampus';
        $spell->duration      = '8 hours';
        $spell->description   = "<p>You set an alarm against unwanted intrusion. Choose a door, a window, or an area within range that is no larger than a 20-foot cube. Until the spell ends, an alarm alerts you whenever a Tiny or larger creature touches or enters the warded area. When you cast the spell, you can designate creatures that won't set off the alarm. You also choose whether the alarm is mental or audible.</p>
<p>A mental alarm alerts you with a ping in your mind if you are within 1 mile of the warded area. This ping awakens you if you are sleeping.</p>
<p>An audible alarm produces the sound of a hand bell for 10 seconds within 60 feet.</p>
<dl>
    <dt>Material Components</dt> <dd>A small silver bell worth at least 1 gp.</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Also works on creatures traveling through the area on coterminous or coexistent planes, such as the Astral Plane, the Ethereal Plane, and the Plane of Shadow.</dd>
    <dt>Permanency (Heightened +4)</dt> <dd>2,500 gp. 5 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Permanency', 'Ritual'], 1);

        $spell              = new Spell;
        $spell->name        = 'Allegro';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One ally';
        $spell->duration    = '1 round';
        $spell->description = '<p>You perform rapidly, speeding your ally. The ally is Quick and can use the Action to Strike, Stride, or Step.</p>';
        $helper->addTypesToSpell($spell, ['Bless', 'Emotion', 'Enchantment', 'Mental'], 0);

        $spell              = new Spell;
        $spell->name        = 'Alleviate Addiction';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature Touch';
        $spell->duration    = '6 hours';
        $spell->description = '<p>The subject ignores the effects of addictions. The subject can naturally recover from damage dealt by the drug if she is under the effects of this spell for the entire duration of her rest.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The Duration becomes Instantaneous and all addictions are removed from the target instead.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Drug', 'Ritual'], 1);

        $spell              = new Spell;
        $spell->name        = 'Allied Footsteps';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'You and the creature touched';
        $spell->duration    = '30 days';
        $spell->description = '<p>With a touch, you feel the bond between you and your companion grow stronger.</p>
<p>You and the target know the direction and approximate distance to each other. The spell does not know the best path to reach the other, so it will not take into account for physical barriers or obstacles. The spell works at any distance and continues to work even if the other dies. If you travel to another plane, or if either of you enters an antimagic field or similar area, the spell is temporarily suppressed.</p>
<p>This spell does not radiate magic (Detect Magic will not detect it, unless all targets are observed, though not necessarily at the same time). Dispel Magic will also not work unless cast on all the targets (although it does not have to be Dispelled at the same time).</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may target an additional creature</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Alter Lifeline';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->rarity         = 'Rare';
        $spell->targets        = 'One creature touched';
        $spell->duration       = 'Instantaneous';
        $spell->save_attribute = 'CON';
        $spell->description    = '<p>This spell speeds the aging process of any creature of INT 2 or greater. The creature ages up to 5 years, the exact amount must be set to the nearest month before the spell is cast.</p>
<p>Aging occurs at a rate of one year per turn, and a CON Save must be made (DC 12 + number of years aged). During the turns that the target is aging, they are considered Dazed.</p>
<p>The spell can also be used to reduce the age of the target, up to 5 years.</p>
<dl>
    <dt>Material Components</dt> <dd>Polished Amber, an ounce of Ichor from a tether beast, plus a cup of pure spring water subjected to Temporal Prime for one subjective day.</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Chronomancy'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Alter Metabolism';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'One creature touched';
        $spell->save_attribute = 'CON';
        $spell->duration       = '1 Week';
        $spell->description    = '<p>When placed upon a creature, this spell can drastically increase the length of time required between meals. The recipient only requires food and drink once every 12 hours for up to the next 7 days. Also, if the target has been poisoned, this spell slows the onset by 6 hours.</p>
<p>The reverse of this spell causes the target to need to eat 3 times as much food and water.</p>
<dl>
    <dt>Material Components</dt> <dd>A small wafer that must be consumed</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Chronomancy'], 1);

        $spell              = new Spell;
        $spell->name        = 'Alter Self';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>You assume a different form. When you cast the spell, choose one of the following options, the effects of which last for the duration of the spell. While the spell lasts, you can end one option as an action to gain the benefits of a different one.</p>
<dl>
    <dt>Aquatic Adaptation</dt> <dd>You adapt your body to an aquatic environment, sprouting gills and growing webbing between your fingers. You can breathe underwater and gain a swimming speed equal to your walking speed</dd>
    <dt>Change Appearance</dt> <dd>You transform your appearance. You decide what you look like, including your height, weight, facial features, sound of your voice, hair length, coloration, and distinguishing characteristics, if any. You can make yourself appear as a member of another race, though none of your statistics change. You also can't appear as a creature of a different size than you, and your basic shape stays the same; if you're bipedal, you can't use this spell to become quadrupedal, for instance. At any time for the duration of the spell, you can use your action to change your appearance in this way again</dd>
    <dt>Natural Weapons</dt> <dd>You grow claws, fangs, spines, horns, or a different natural weapon of your choice. Your unarmed strikes deal 1D6 bludgeoning, piercing, or slashing damage, as appropriate to the natural weapon you chose, and you are proficient with your unarmed strikes. Finally, the natural weapon is magic and you have a +1 bonus to the attack and damage rolls you make using it</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Amanuensis';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'Object or objects with writing';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>You cause writing from one source (such as a book) to be copied into a book, paper, or parchment. This spell copies 250 words per minute and creates a perfect duplicate of the original. The spell only copies non-magical text, not illustrations or magical writings (such as spell scrolls or magical sigils). If the target contains normal and magical writings (such as a letter with Explosive Runes), only the normal text is copied, leaving blank spaces in the copied text where the magical writings would be expected. Likewise, if the target contains text and illustrations, only the text is copied.</p>
<p>This spell triggers (but does not copy) writing based magical traps in the material being copied, but the spell is target of whatever is triggered.</p>
<p>Blank paper, parchment, or a book must be provided for the spell to write upon. If the target has multiple pages, the spell automatically turns to the next blank page whenever necessary. If more pages in the target exist than blank pages are available, the spell copies the original until it runs out of blank pages. At any time during the spell's Duration you may redirect the magic to copy from another target, copy only a different blank source, or resume a duplication that was interrupted by a shortfall of blank pages.</p>
<p>This spell does not translate the copied writing.</p>
<dl>
    <dt>Material Components</dt> <dd>Writing utensils and the blank paper, parchment, or book to be written on.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+1)</dt> <dd>The spell also copies illustrations</dd>
    <dt>Heightened (+2)</dt> <dd>The spell can be used to copy spells from a spellbook or scroll</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell                = new Spell;
        $spell->name          = 'Amethyst Field';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range         = 'Touch';
        $spell->spell_creator = 'Nezram';
        $spell->targets       = 'Creature touched';
        $spell->duration      = '1 hour';
        $spell->description   = '<p>You surround the subject with a brilliant violet glow that grants temporary immunity to all Poisons and Diseases. This spell absorbs all Poisons and Diseases that target the subject for the duration of the spell, regardless of how they are delivered. Any weapon or natural attack normally used to deliver a poison or disease still deals the normal amount of Hit Point damage, but the Poison or Disease is blocked. This spell does not reverse or prevent the effects of Poison and Disease in a subject already affected by one or both at the time of casting.</p>
<dl>
    <dt>Material Components</dt> <dd>A pinch of amethyst dust</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 3);

        $spell              = new Spell;
        $spell->name        = 'Amorphous Form';
        $spell->casting     = 'Material Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Willing corporeal creature touched';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You become a puddle-like (boneless) mass with a fluidity that resembles an ooze. Your belongings are also affected. You lose none of your ability and can still move. Your new form allows you to enter narrow spaces as small as 2 inches in width. You also can breathe in water and gain a Swim Speed equal to your Land Speed.</p>
<p>While in this form, you are immune to Poison, Polymorphing (except reverting to your original form), and the Stunned Condition. You also cannot be Flanked and are immune to Precision damage. Your AC is now only based on your DEX modifier and any magical protection you may have (armor and shields do not apply while in this form). You cannot make attacks or cast spells that require any Spell Casting Actions.</p>
<dl>
    <dt>Material Components</dt> <dd>A pinch of gelatin</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 3);

        $spell              = new Spell;
        $spell->name        = 'Amplify Sound';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->duration    = '3 hours';
        $spell->description = '<p>You can change the volume of sounds created close to its center of effect. You make a circular motion where the point of sound amplification is to be. The area so outlined begins to glow softly. The outlined area is disk-shaped and can be as small as 2 inches in diameter or as large as 1 foot in diameter.</p>
<p>The disk acts as a sound magnifier. Whatever sound enters has its volume increased up to 5 times (your choice). The sound amplification works only one way, sound coming towards your does not get amplified.</p>
<dl>
    <dt>Material Components</dt> <dd>A small cone of paper</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the amount of amplification by X5</dd>
    <dt>Heightened (+2)</dt> <dd>The amplified sound causes 3D6 Sonic damage to all in a 60 foot cone</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Sonic'], 1);

        $spell              = new Spell;
        $spell->name        = 'Analyze Portal';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = '60-foot cone';
        $spell->duration    = 'Concentration, up to 10 minute';
        $spell->description = "<p>You can tell whether an area contains a magical Portal or the effect of a Gate spell. If you study an area for 1 round, you know the sizes and locations of any such portals in the area. Once you find a Portal, you can study it (if you find more than one portal,  you can study one Portal at a time). Each round you study a portal, you can discover one property of the Portal, in this order.</p>
<ul>
    <li>Any key or command word needed to activate the portal.</li>
    <li>Any special circumstances governing the portal's use (such as specific times when it can be activated).</li>
    <li>Whether the portal is one-way or two-way.</li>
    <li>A glimpse of the area where the portal leads. You can look at the area where the portal leads for 1 round; the range of your vision is the spell's range. Analyze portal does not allow other divination spells or spell-like abilities to extend through the portal. For example, you cannot also use Detect Magic or Detect Evil to study the area where the portal leads while viewing the area with this spell.</li>
</ul>
<p>For each property, you make a caster level check (2D10 + caster level) against DC 17. If fail, you can try again in the next round. Analyze portal has only a limited ability to reveal unusual properties, as follows.</p>
<dl>
    <dt>Random Portals</dt> <dd>The spell reveals only that the portal is random and whether it can be activated now. It does not reveal when the portal starts or stops functioning.</dd>
    <dt>Variable Portals</dt> <dd>The spell reveals only that the portal is variable. If you study the portal's destination, the spell reveals only the destination to which the portal is currently set.</dd>
    <dt>Creature-only Portals</dt> <dd>The spell reveals this property. If you study the portal's destination, the spell reveals where the portal sends creatures. If it is the kind of portal that sends creatures to one place and their equipment to another place, the spell does not reveal where the equipment goes.</dd>
    <dt>Malfunctioning Portals</dt> <dd>The spell reveals only that the portal is malfunctioning, not what sort of malfunction the portal produces.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Divination', 'Portal', 'Ritual'], 3);

        $spell               = new Spell;
        $spell->name         = 'Anathema';
        $spell->casting      = 'Material Casting, Somatic Casting, Verbal Casting, Secondary Caster';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>You must have at least 2 Secondary Casters, one of which must be at least 10th level or higher.</dd>
</dl>';
        $spell->range        = 'Unlimited';
        $spell->targets      = 'Divine Spellcaster of your faith';
        $spell->duration     = 'Permanent';
        $spell->description  = "<p>You can permanently break the divine link between your deity and a lower-level priest of your faith (or upon a common worshiper). The spell has no effect on spellcasters of a faith other than your own.</p>
<p>You can pronounce an Anathema upon any character of your faith, no matter where he is, even if on a different plane. You cannot pronounce an Anathema against someone who is already dead. Some deities do not allow an Anathema to be pronounced against the innocent or against their chosen, while others grant their highest-level priests free use of this most terrible divine spell.</p>
<p>An individual under an Anathema can no longer cast divine spells or call upon the power of their god to use their priest class features. An ordinary worshiper placed under an Anathema is not allowed to take advantage of any of the faith's services, such as healing, marrying, or burial of the dead. Anyone who dies while under an Anathema is barred from entry into their deities plane just as though they had never declared allegience to a god. Their soul is condemned to eternally writhe in the Wall of the Faithless.</p>
<p>On a more personal level, the Anathema spell marks the subject as accursed with regard to others of the faith. They are not allowed to speak to them, look at them, or even acknowledge their existence. The common members of the faith are only aware that the subject is under an Anathema if so informed by the church hierarchy; however, Priests, Paladins, Druids and Rangers of the same faith can automatically detect an Anathema effect simply by looking at the subject.</p>
<p>The effect is permanent until lifted, either by the original spellcaster, or by a priest of the same faith, of a higher level than the caster, who cast the Anathema spell. The subject of an Anathema can also remove its effect by changing their divine allegiance.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 10);

        $spell              = new Spell;
        $spell->name        = 'Angelic Halo';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You gain the effects of Protection against Evil</p>';
        $spell->heightened  = "<dl>
    <dt>Heightened (+2)</dt> <dd>The effect of the spell increases to that of Circle of Protection against Evil, centered on you for 1 minute</dd>
    <dt>Heightened (+4)</dt> <dd>The spell's duration increases to 1 hour</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Good'], 1);

        $spell              = new Spell;
        $spell->name        = 'Angelic Wings';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = "<p>Wings of pure light spread out from your back, granting you a fly Speed of 30 feet. Your wings cast bright light in a 30-foot radius. When the duration would end, if you have Spell Points, you can spend 1 Spell Point to increase the duration by 3 rounds. When it ends, you float to the ground, with Feather Fall's effects</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The base duration, and the extra duration for spending 1 Spell Point, increases to 1 minute</dd>
    <dt>Heightened (+4)</dt> <dd>The base duration increases to 10 minutes. The extra duration for spending 1 Spell Point increases to 5 minutes.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Light', 'Spend Spell Point'], 3);

        $spell              = new Spell;
        $spell->name        = 'Animal Form';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes or until dispelled';
        $spell->description = "<p>You transform into an animal that has a CR of 1 or less. You count as an animal in addition to your normal traits. Your gear is absorbed into you; the constant abilities of your gear still function, but you can't activate it.</p>
<p>These special statistics can be adjusted only by penalties, circumstance bonuses, and conditional bonuses. Your battle form prevents casting spells, speaking, or using most actions with the Manipulate trait that require hands. (The GM decides if there's doubt.) You can dismiss the spell with a concentrate Action.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can choose an animal with a CR of 2 or less</dd>
    <dt>Heightened (+2)</dt> <dd>You can choose an animal with a CR of 3 or less</dd>
    <dt>Heightened (+3)</dt> <dd>You can choose an animal with a CR of 4 or less</dd>
    <dt>Heightened (+4)</dt> <dd>You can choose an animal with a CR of 5 or less</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Animal Friendship';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One beast within range';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '24 hours';
        $spell->description    = "<p>This spell lets you convince a beast that you mean it no harm. Choose a beast that you can see within range. It must see and hear you. If the beast's INT is 4 or higher, the spell fails. Otherwise, the beast must succeed on a WIS Save or be charmed by you for the duration. If you or one of your companion's harms the target, the spell ends.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>Charmed</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may target an additional beast</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Compulsion', 'Illusion'], 1);

        $spell              = new Spell;
        $spell->name        = 'Animal Messenger';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = '120 feet';
        $spell->duration    = '1 week';
        $spell->description = '<p>You offer a gift of food, and an ordinary Tiny wild animal within range approaches to eat it. You imprint the image, direction, and distance of an obvious place or landmark well known to you within the animal. Optionally, you can attach a small object or note up to light Bulk to it. The animal does its best to reach the destination; if it does, it waits nearby until the duration expires, allowing other nonhostile creatures to approach it and remove the attached object.</p>
<p>If there are no Tiny wild animals in range, the spell is lost.</p>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion', 'Ritual'], 2);

        $spell              = new Spell;
        $spell->name        = 'Animal Sense';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Beast touched';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>You touch a willing beast. For the duration of the spell, you can use your Action to see through the beast's eyes and hear what it hears, and continue to do so until you use your Action to return to your normal senses.</p>";
        $helper->addTypesToSpell($spell, ['Divination'], 2);

        $spell              = new Spell;
        $spell->name        = 'Animal Shapes';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = '24 hours';
        $spell->description = "<p>Your magic turns others into beasts. Choose any number of willing creatures that you can see within range. You transform each target into the form of a Large or smaller beast with a challenge rating of 4 or lower. On subsequent turns, you can use your Action to transform affected creatures into new forms.</p>
<p>The transformation lasts for the duration for each target, or until the target drops to 0 hit points or dies. You can choose a different form for each target. A target's game statistics are replaced by the statistics of the chosen beast, though the target retains its alignment and INT, WIS, and CHA scores. The target assumes the hit points of its new form, and when it reverts to its normal form, it returns to the number of hit points it had before it transformed. If it reverts as a result of dropping to 0 hit points, any excess damage carries over to its normal form. As long as the excess damage doesn't reduce the creature's normal form to 0 hit points, it isn't knocked unconscious. The creature is limited in the actions it can perform by the nature of its new form, and it can't speak or cast spells.</p>
<p>The target's gear melds into the new form. The target can't activate, wield, or otherwise benefit from any of its equipment.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 3);

        $spell              = new Spell;
        $spell->name        = 'Animal Transfer';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = '60 feet';
        $spell->targets     = 'One Animal within range';
        $spell->duration    = '1 hour (special)';
        $spell->description = "<p>You Target an Animal within range. While you are casting this spell, the Animal must stay within Range. You transfer your mind into the Target Animal (no Save). Targets with an INT of 3 or higher may make a WIS Save to resist.</p>
<p>After you successfully transfer your mind into the Target, your body becomes Unconscious and you become unaware of your body's condition.</p>
<p>The Target's mind becomes suppressed within it's body that you are controlling.</p>
<p>If the Targets body dies while you are in control of it, the spell ends and you are transferred back to your body. If your body dies while you are still transferred in the Targets body, then your are now stuck in the Targets body, and the spell ends.</p>
<p>If you Target a Familiar, Animal Companion, or Divine Mount, they gain a +3 bonus to the Save.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The casting time is 2 Actions</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+2)</dt> <dd>You may also Target Beasts</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 4);

        $spell              = new Spell;
        $spell->name        = 'Animate Air';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'Up to a 5 foot cube of air';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You animate a small amount of air. Treat this creature as an air mephit, but it has no alignment, is immune to physical attacks, and has 5 Hit Points.</p>
<p>Treat the animated air as having a STR of 1 and no Hardness. The animated air can be used to block Ranged Weapon attacks with ammunition of size small. Any small sized ammunition that comes into contact with the animated air is deflected by its swirling currents of air that is its body.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the STR by +2, Hit Points by +10 and Size by +1.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Transmutation', 'Air', 'Animate'], 2);

        $spell                = new Spell;
        $spell->name          = 'Animate Dead';
        $spell->casting       = '10 minute (Verbal, Somatic, Material)';
        $spell->range         = '10 feet';
        $spell->targets       = 'One or more humanoid corpses';
        $spell->spell_creator = 'Fjord';
        $spell->duration      = 'Instantaneous';
        $spell->description   = "<p>You create an undead servant. Choose a pile of bones or a corpse of a Medium or Small humanoid within range. Your spell imbues the target with a foul mimicry of life, raising it as an undead creature. The target becomes a skeleton if you chose bones or a zombie if you chose a corpse.</p>
<p>On each of your turns, you can use an Action to mentally command any undead creature you made with this spell if the creature is within 60 feet of you (if you control multiple creatures, you can command any or all of them at the same time, issuing the same command to each one). You decide what action the creature will take and where it will move during its next turn, or you can issue a general command, such as to guard a particular chamber or corridor. If you issue no commands, the creature only defends itself against hostile creatures. Once given an order, the creature continues to follow it until its task is complete.</p>
<p>The creature is under your control for 24 hours, after which it stops obeying any command you've given it. To maintain control of the creature for another 24 hours, you must cast this spell on the creature again before the current 24-hour period ends. This use of the spell reasserts your control over up to four creatures you have animated with this spell, rather than animating a new one.</p>
<p>You may also sacrifice a Spell Slot of 3rd Level or higher to continue to maintain control of your created undead. Each spell slot sacrificed in this way acts exactly as if you had cast the spell to maintain control, except that you do not need to be in the presence of the undead to maintain control. If you ever choose to regain the sacrificed spell slot and memorize a spell, you lose control of a number of undead that the spell slot granted control over. To regain control, you must cast this spell in the presence of the undead to regain control.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The casting becomes 3 Casting Actions instead of 10 minutes</dd>
    <dt>Heightened (+1)</dt> <dd>You animate or reassert control over two additional undead creatures for each additional spell slot. Each creature must come from a different corpse or pile of bones.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Animate Earth';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'Up to a 5 foot cube of unworked earth';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You animate a patch of unworked earth with mobility and the semblance of life. It can attack or perform simple tasks. Use the statistics for a Small Object from the Animate Object spell. The animated earth can make Slam attacks that deal 2D6 + 5 point of Bludgeoning damage. It has Damage Resistance to Bludgeoning, Piercing, and Slashing.</p>
<p>You must have access to a patch of unworked earth.</p>
<p>The animated earth can push/pull or carry double what a normal creature could and is treated as having STR 20.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the maximum size that this spell can target by 1 (this also increase the statistics to be used)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Transmutation', 'Earth', 'Animate'], 2);

        $spell              = new Spell;
        $spell->name        = 'Animate Fire';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'Up to a 5 foot cube of fire';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You animate a small fire with mobility and the semblance of life. It can attack or set things on fire. Use the statistics for a Small Object from the Animate Object spell. The animated fire can make Slam attacks that deal 1 point of Bludgeoning damage + 1D6 Fire damage. It is Immunity to Fire damage and Vulnerability to Water and Cold damage. It has a Hardness of 0.</p>
<p>You must have an existing fire to animate, and the animated fire must have a source of fuel to continue to burn (such as a wooden floor or flammable ground litter such as grass and twigs). If the animated fire goes 3 rounds not touching something flammable, it goes out and the spell ends.</p>
<p>The animated fire can spend 3 consecutive Actions to set something flammable on fire.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the maximum size that this spell can target by 1 (this also increase the statistics to be used)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Evocation', 'Fire', 'Animate'], 2);

        $spell              = new Spell;
        $spell->name        = 'Animate Instrument';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Instrument touched';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>As you finish intoning this spell, your instrument leaves your hands and floats before you, continuing your song.</p>
<p>You imbue your musical instrument with the ability to play at your command. This instrument can play a tune on your behalf even while you are busy with other Actions. As long as this spell is in effect, you can cause the instrument to begin playing as an Action, effectively mimicking and continuing your performance. The instrument uses your Perform modifier for the purpose of Bardic music checks. You can animate any non-magical musical instrument, such as a piano, fiddle, or harp. If the instrument must be carried or held while played, it floats in the air in the square in which you cast the spell. The animated instrument cannot move. It continues to play until the spell ends or the instrument is damaged.</p>
<p>An animated instrument has AC 10 + any relevant size modifiers (most handheld instruments are Tiny, which provides a +8 to AC).</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Animate'], 2);

        $spell              = new Spell;
        $spell->name        = 'Animate Objects';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>Objects come to life at your command. Choose up to ten nonmagical objects within range that are not being worn or carried. Medium targets count as two objects, Large targets count as four objects, Huge targets count as eight objects. You can't animate any object larger than Huge. Each target animates and becomes a creature under your control until the spell ends or until reduced to 0 hit points.</p>
<p>As a Bonus Action, you can mentally command any creature you made with this spell if the creature is within 500 feet of you (if you control multiple creatures, you can command any or all of them at the same time, issuing the same command to each one). You decide what action the creature will take and where it will move during its next turn, or you can issue a general command, such as to guard a particular chamber or corridor. If you issue no commands, the creature only defends itself against hostile creatures. Once given an order, the creature continues to follow it until its task is complete.</p>
<table>
    <thead>
        <tr>
            <th colspan=\"6\">Animated Object Statistics</th>
        </tr>
        <tr>
            <th>Size</th>
            <th>HP</th>
            <th>AC</th>
            <th>Attack</th>
            <th>STR</th>
            <th>DEX</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiny</td>
            <td>20</td>
            <td>18</td>
            <td>
                <ul>
                    <li>+8 to hit</li>
                    <li>1D4 + 4 damage</li>
                </ul>
            </td>
            <td>4</td>
            <td>18</td>
        </tr>
        <tr>
            <td>Small</td>
            <td>25</td>
            <td>16</td>
            <td>
                <ul>
                    <li>+6 to hit</li>
                    <li>1D8 + 2 damage</li>
                </ul>
            </td>
            <td>6</td>
            <td>14</td>
        </tr>
        <tr>
            <td>Medium</td>
            <td>40</td>
            <td>13</td>
            <td>
                <ul>
                    <li>+5 to hit</li>
                    <li>2D6 + 1 damage</li>
                </ul>
            </td>
            <td>10</td>
            <td>12</td>
        </tr>
        <tr>
            <td>Large</td>
            <td>50</td>
            <td>10</td>
            <td>
                <ul>
                    <li>+6 to hit</li>
                    <li>2D10 + 2 damage</li>
                </ul>
            </td>
            <td>14</td>
            <td>10</td>
        </tr>
        <tr>
            <td>Huge</td>
            <td>80</td>
            <td>10</td>
            <td>
                <ul>
                    <li>+8 to hit</li>
                    <li>2D12 + 4 damage</li>
                </ul>
            </td>
            <td>18</td>
            <td>6</td>
        </tr>
    </tbody>
</table>
<p>An animated object is a construct with AC, hit points, attacks, STR, and DEX determined by its size. Its CON is 10 and its INT and WIS are 3, and its CHA is 1. Its speed is 30 feet; if the object lacks legs or other appendages it can use for locomotion, it instead has a flying speed of 30 feet and can hover. If the object is securely attached to a surface or a larger object, such as a chain bolted to a wall, its speed is 0. It has blindsight with a radius of 30 feet and is blind beyond that distance. When the animated object drops to 0 hit points, it reverts to its original object form, and any remaining damage carries over to its original object form.</p>
<p>If you command an object to attack, it can make a single melee attack against a creature within 5 feet of it. It makes a slam attack with an attack bonus and bludgeoning damage determined by its size. The GM might rule that a specific object inflicts slashing or piercing damage based on its form.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may animate two additional objects</dd>
    <dt>Permanency (Heightened +2)</dt> <dd>15,000 gp. 10 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Transmutation', 'Permanency', 'Animate'], 5);

        $spell              = new Spell;
        $spell->name        = 'Animate Objects, Lesser';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>Objects come to life at your command. Choose up to 4 nonmagical objects within range that are not being worn or carried. Medium targets count as two objects, and Large targets count as four objects.</p>
<p>As a Bonus Action, you can mentally command any creature you made with this spell if the creature is within 500 feet of you (if you control multiple creatures, you can command any or all of them at the same time, issuing the same command to each one). You decide what action the creature will take and where it will move during its next turn, or you can issue a general command, such as to guard a particular chamber or corridor. If you issue no commands, the creature only defends itself against hostile creatures. Once given an order, the creature continues to follow it until its task is complete.</p>
<table>
    <thead>
        <tr>
            <th colspan=\"6\">Animated Object Statistics</th>
        </tr>
        <tr>
            <th>Size</th>
            <th>HP</th>
            <th>AC</th>
            <th>Attack</th>
            <th>STR</th>
            <th>DEX</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiny</td>
            <td>10</td>
            <td>14</td>
            <td>
                <ul>
                    <li>+6 to hit</li>
                    <li>1D4 damage</li>
                </ul>
            </td>
            <td>4</td>
            <td>18</td>
        </tr>
        <tr>
            <td>Small</td>
            <td>15</td>
            <td>12</td>
            <td>
                <ul>
                    <li>+4 to hit</li>
                    <li>1D6 damage</li>
                </ul>
            </td>
            <td>6</td>
            <td>14</td>
        </tr>
        <tr>
            <td>Medium</td>
            <td>20</td>
            <td>12</td>
            <td>
                <ul>
                    <li>+3 to hit</li>
                    <li>1D8 damage</li>
                </ul>
            </td>
            <td>10</td>
            <td>12</td>
        </tr>
        <tr>
            <td>Large</td>
            <td>25</td>
            <td>8</td>
            <td>
                <ul>
                    <li>+4 to hit</li>
                    <li>1D10 damage</li>
                </ul>
            </td>
            <td>14</td>
            <td>10</td>
        </tr>
    </tbody>
</table>
<p>An animated object is a construct with AC, hit points, attacks, STR, and DEX determined by its size. Its CON is 10 and its INT and WIS are 3, and its CHA is 1. Its speed is 30 feet; if the object lacks legs or other appendages it can use for locomotion, it instead has a flying speed of 30 feet and can hover. If the object is securely attached to a surface or a larger object, such as a chain bolted to a wall, its speed is 0. It has blindsight with a radius of 30 feet and is blind beyond that distance. When the animated object drops to 0 hit points, it reverts to its original object form, and any remaining damage carries over to its original object form.</p>
<p>If you command an object to attack, it can make a single melee attack against a creature within 5 feet of it. It makes a slam attack with an attack bonus and bludgeoning damage determined by its size. The GM might rule that a specific object inflicts slashing or piercing damage based on its form.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may animate two additional objects</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Transmutation', 'Animate'], 2);

        $spell              = new Spell;
        $spell->name        = 'Animate Plants';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'One or more Plants';
        $spell->duration    = '10 rounds or 12 hours';
        $spell->description = '<p>You imbue inanimate plants with mobility and a semblance of life. Each animated plant then immediately attacks whomever or whatever you initially designate as though it were animated object of the appropriate size category. You may animate one Large or smaller plant, or an equivalent number of larger plants.</p>
<ul>
    <li>A Huge plant counts as two Large or smaller plants</li>
    <li>A Gargantuan plant counts as four Large or smaller plants</li>
    <li>A Colossal plant counts as eight Large or smaller plants</li>
</ul>
<p>You may direct the animated plants with an Action.</p>
<p>Alternatively, you may imbue all plants within range with a degree of mobility, which allows them to entwine around creatures in the area. This usage of the spell duplicates the effect of an entangle spell. This effect lasts for 12 hours.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may animate an additional Large plant.</dd>
    <dt>Heightened (+2)</dt> <dd>You may animate an additional 3 Large plants.</dd>
    <dt>Heightened (+3)</dt> <dd>You may animate an additional 7 Large plants.</dd>
    <dt>Heightened (+4)</dt> <dd>You may animate an additional 11 Large plants.</dd>
    <dt>Heightened (+5)</dt> <dd>You may animate an additional 15 Large plants.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Transmutation', 'Plant', 'Animate'], 5);
        $spell->materials()->save(Material::where('name', 'Mistletoe')->firstOrFail());

        $spell              = new Spell;
        $spell->name        = 'Animate Water';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'A body of water of at least 1 gallon';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You animate a small amount of water with mobility and the semblance of life. Use the statistics for a Small Object from the Animate Object spell except it has double the Hit Points. The animated water can make Slam attacks that deal 1D4 point of Bludgeoning damage + STR modifier (A small animated water has a STR of 10, and gains 3 points of STR for each size larger). It has Immunity to Water attacks and has Vulnerability to Fire attacks.</p>
<p>You must have an amount of water to animate. If the animation uses all the water, then it takes 1 Hit Point of damage each round until it touches another body of water. Otherwise, if the animated water starts its turn away from a body water, it takes 1 Hit Point of damage each round until it returns to a body of water.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the maximum size that this spell can target by 1 (this also increase the statistics to be used)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Enchantment', 'Water', 'Animate'], 1);

        $spell              = new Spell;
        $spell->name        = 'Animate Weapon';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Melee weapon touched';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>You enchant a melee weapon with the ability to fight for itself. Each turn, it can take 2 Actions and fights with your Proficiency modifier, but not any of your ability score modifiers (i.e. your STR or DEX). It can move with a Fly Speed of 30. It does not benefit with any of your skills or feats.</p>
<p>The weapon has an AC equal to 10 + its size modifier. A weapon has Hardness 5 and 10 Hit Points. These Hit Points do not represent the amount of damage needed to break or damage the weapon, but the amount of damage to end the animation spell.</p>
<p>You may use an Action to direct the animated weapon. The weapon continues to follow the last given instructions until it no longer can. Otherwise, it only takes Actions to defend itself.</p>
<p>A weapon held or carried by another creature can't be affected by this spell.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the move Speed by +5</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Transmutation', 'Animate'], 3);

        $spell              = new Spell;
        $spell->name        = 'Animate with Spirit';
        $spell->casting     = '10 minutes (Verbal, Somatic, Material, Sacrifice)';
        $spell->range       = '120 feet';
        $spell->targets     = 'Once corpse with HD less than your caster level';
        $spell->duration    = '8 hours';
        $spell->description = "<p>By casting this spell, you request your deity to send you the spirit of a good-aligned outsider (of 6 HD or less) of the deity's choice to inhabit a corpse within range, which becomes animated by the spirit.<br/>
If you serve no particular deity, the spell fails.<br/>
If you know an individual creature's name, you can request that individual by speaking the name during the spell (though you might get a different creature anyway).</p>
<p>The Hit Dice of the corpse to be animated (not counting class levels) must be less than your caster level.<br/>
On your turn, use an Action to make the possessed body attacks your opponents to the best of its ability. If you can communicate with the possessing spirit, you can direct it not to attack, to attack particular enemies, or to perform other actions.</p>
<p>While the body is inhabited by the spirit, it is treated as if were still alive but possessed.<br/>
It uses the outsider's INT, WIS, CHA, alignment, and mental abilities (no spells or spell like abilities).<br/>
The body regains the STR, DEX, CON, hit points, base attack, base Saves, and innate abilities of the creature the corpse represented when it was alive (no spells or spell like abilities).</p>
For example, a sahuagin's body breathes water and a troll's body regenerates, but the spirit cannot use a vampires ability to charm or polymorph into wolves or bats.<br/>
The spirit can't choose to activate the host body's extraordinary or supernatural abilities, and the host body's spells and spell-like abilities do not stay with the body.<br/>
The spirit remains within the body until the spell is dismissed, the duration ends, or the host body is slain, at which point it returns to its original body with no ill effects.</p>
<p>Sacrifice Component: 1D3 points of STR drain.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Spirit', 'Ritual'], 4);

        $spell              = new Spell;
        $spell->name        = 'Animate Wood';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One small or smaller wooden object';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>This spell imbues a Small or smaller wooden object with mobility and a semblance of life, then causes it to immediately attack whomever or whatever you chose.</p>
<p>Statistics for the animated wood are as for a Small Animated Object from the Animate Object Spell with a Hardness of 5.</p>
<p>This spell cannot animate objects carried or worn by a creature.</p>
<dl>
    <dt>Material Components</dt> <dd>A mixture of powdered cinnabar and ground peach pit.</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the maximum size that this spell can target by 1 (this also increase the statistics to be used)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Transmutation', 'Animate'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Annihilate Spirit';
        $spell->casting        = '3 rounds (Somatic, Verbal)';
        $spell->save_attribute = 'CHA';
        $spell->range          = 'Touch';
        $spell->targets        = 'One Dying or recently Dead creature';
        $spell->description    = "<p>This spell completely annihilates the Target's spirit, wiping the spirit from existence. The Target's spirit cannot find rest in the Outer Planes, and indeed it never even reaches them. The spirit is caught up by the force of this spell and utterly shattered, or its energy is diverted to some foul use. An annihilated spirit cannot be reached with spells like Speak with Dead and cannot be Raised back to life.</p>
<p>This spell is usable on victims who have the Dying state, or has died in the last hour. The Target may make a CHA Save to avoid this effect.</p>
<p>This spell can also be used against an ethereal creature or possessing spirit. They take 15D6 Positive damage, CHA Save for half damage. If this damage brings the Target to 0 HP, the Target is annihilated.</p>
<p>Casting this spell is an insult to the god Kelemvor, and may attract his attention.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Spirit is not annihilated or Half Damage</dd>
    <dt>Failure</dt> <dd>Spirit is annihilated or Full Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 6);

        $spell              = new Spell;
        $spell->name        = 'Anti-Summoning Shell';
        $spell->casting     = 'Somatic Casting, Verbal Casting, Material Casting';
        $spell->range       = '100 foot radius';
        $spell->rarity      = 'Rare';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>Within the area of effect, this spell prevents spells with the Summoning type from working. Summoning spells can still be cast, they simply fail to summoning anything.</p>';
        $spell->heightened  = '<dl>
    <dt>Permanency (Heightened +4)</dt> <dd>10,000 gp. 7 CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Summoning', 'Permanency'], 4);

        $spell               = new Spell;
        $spell->name         = 'Anticipate Teleportation';
        $spell->casting      = '1 hour (Somatic, Verbal, Secondary Casters)';
        $spell->range        = '30 feet';
        $spell->area         = '100 ft radius';
        $spell->targets      = 'An area or creature';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>One additional caster who must also cast this spell</dd>
</dl>';
        $spell->duration     = '24 Hours';
        $spell->description  = '<p>You create an area that can detect when something is going to teleport into the area of effect. The area forms in between the 2 casters (the straight line between them forms a diameter of the sphere). When something intends to teleport into the area of effect, you are made aware of the teleportation, including the exact location and the number of creatures. The aura also delays the teleportation by 3 rounds (the teleporting creatures are not aware of this delay).</p>
<p>This spell has no effect on creatures attempting to teleport away from the area of effect.</p>';
        $spell->heightened   = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the area of effect</dd>
    <dt>Heightened (+3)</dt> <dd>You also gain knowledge of the type of creatures and the delay duration is now 5 rounds</dd>
    <dt>Permanency (Heightened +4)</dt> <dd>50,000 gp. 2 CON damage (the Secondary Caster does not need to also Heighten their casting)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Permanency'], 2);

        $spell              = new Spell;
        $spell->name        = 'Anticold Sphere';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '10-ft radius sphere centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>You create a spherical field of magic that protects against Cold. All creatures within the area of the spell gain Immunity to Cold. In addition, the sphere prevents the entrance of any creature with the Cold type. Forcing the sphere against a creature with the Cold type causes the spell to end.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the radius</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Cold'], 5);

        $spell              = new Spell;
        $spell->name        = 'Antielectricity Sphere';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '10-ft radius sphere centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>You create a spherical field of magic that protects against Electricity. All creatures within the area of the spell gains Immunity to Electricity. In addition, the sphere prevents the entrance of any creature with the Electricity type. Forcing the sphere against a creature with the Electricity type causes the spell to end.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the radius</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Electricity'], 5);

        $spell              = new Spell;
        $spell->name        = 'Antifire Sphere';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '10-ft radius sphere centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>You create a spherical field of magic that protects against Fire. All creatures within the area of the spell gains Immunity to Fire. In addition, the sphere prevents the entrance of any creature with the Fire type. Forcing the sphere against a creature with the Fire type causes the spell to end.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the radius</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Fire'], 5);

        $spell              = new Spell;
        $spell->name        = 'Antilife Shell';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '10-foot radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>A shimmering barrier extends out from you in a 10-foot radius and moves with you, remaining centered on you and hedging out creatures other than undead and constructs. The barrier lasts for the duration.</p>
<p>The barrier prevents an affected creature from passing or reaching through. An affected creature can cast spells or make attacks with ranged or reach weapons through the barrier.</p>
<p>If you move so that an affected creature is forced to pass through the barrier, the spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 5);

        $spell              = new Spell;
        $spell->name        = 'Antimagic Field';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>A 10-foot-radius invisible sphere of antimagic surrounds you. This area is divorced from the magical energy that suffuses the multiverse. Within the sphere, spells can't be cast, summoned creatures disappear, and even magic items become mundane. Until the spell ends, the sphere moves with you, centered on you.</p>
<p>Spells and other magical effects, except those created by an artifact or a deity, are suppressed in the sphere and can't protrude into it. A slot expended to cast a suppressed spell is consumed. While an effect is suppressed, it doesn't function, but the time it spends suppressed counts against its duration.</p>
<p>Targeted Effects. Spells and other magical effects, such as magic missile and charm person, that target a creature or an object in the sphere have no effect on that target.</p>
<p>Areas of Magic. The area of another spell or magical effect, such as fireball, can't extend into the sphere. If the sphere overlaps an area of magic, the part of the area that is covered by the sphere is suppressed. For example, the flames created by a wall of fire are suppressed within the sphere, creating a gap in the wall if the overlap is large enough.</p>
<dl>
    <dt>Spells</dt> <dd>Any active spell or other magical effect on a creature or an object in the sphere is suppressed while the creature or object is in it.</dd>
    <dt>Magic Items</dt> <dd>The properties and powers of magic items are suppressed in the sphere. For example, a +1 longsword in the sphere functions as a nonmagical longsword.
A magic weapon's properties and powers are suppressed if it is used against a target in the sphere or wielded by an attacker in the sphere. If a magic weapon or a piece of magic ammunition fully leaves the sphere (for example, if you fire a magic arrow or throw a magic spear at a target outside the sphere), the magic of the item ceases to be suppressed as soon as it exits.</dd>
    <dt>Magical Travel</dt> <dd>Teleportation and planar travel fail to work in the sphere, whether the sphere is the destination or the departure point for such magical travel. A portal to another location, world, or plane of existence, as well as an opening to an extradimensional space such as that created by the rope trick spell, temporarily closes while in the sphere.</dd>
    <dt>Creatures and Objects</dt> <dd>A creature or object summoned or created by magic temporarily winks out of existence in the sphere. Such a creature instantly reappears once the space the creature occupied is no longer within the sphere.</dd>
    <dt>Dispel Magic</dt> <dd>Spells and magical effects such as dispel magic have no effect on the sphere. Likewise, the spheres created by different antimagic field spells don't nullify each other.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Antimagic Ray';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->rarity         = 'Rare';
        $spell->save_attribute = 'CHA';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>You shoot an invisible ray from your finger. Make a Ranged Touch Attack. The target makes a CHA Save (unless it is an unattended object). On a Failed Save, they are affected as if they were inside an Antimagic Field.</p>
<p>If the ray hits a creature, the target can't cast spells, use supernatural abilities and spell-like abilities. The target is affected, but not his equipment (the target is affected, not any items they are carrying). Therefore, all his magical items still function.</p>
<p>If the ray hits an object, that object's magical powers are suppressed, including any spells previous cast and currently in effect on the item, as well as any spells or magical effects targeted on the object during the duration.</p>
<dl>
    <dt>Material Components</dt> <dd>A pinch of iron filings mixed with ruby dust worth 100 gp.</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>The spell ends next turn</dd>
    <dt>Failure</dt> <dd>The spell takes effect, but you may make another Save at the end of your next turn.</dd>
    <dt>Critical Failure</dt> <dd>The spell takes effect and you do not gain any more attempts to Save in subsequent turns.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Ray', 'Attack', 'Ranged'], 7);

        $spell              = new Spell;
        $spell->name        = 'Antiplant Shell';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '10-ft radius sphere centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>You create a spherical field of magic that protects against Plants. All creatures with the Plant type cannot cross the sphere (although they can make Ranged attacks with projectiles that are not considered Plants). Forcing the sphere against a creature with the Plant type causes the spell to end.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the radius</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Plant'], 4);

        $spell              = new Spell;
        $spell->name        = 'Antipathy / Sympathy';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->duration    = '10 days';
        $spell->description = "<p>This spell attracts or repels creatures of your choice. You target something within range, either a Huge or smaller object or creature or an area that is no larger than a 200-foot cube. Then specify a kind of intelligent creature, such as red dragons, goblins, or vampires. You invest the target with an aura that either attracts or repels the specified creatures for the duration. Choose antipathy or sympathy as the aura's effect.</p>
<dl>
    <dt>Antipathy</dt> <dd>The enchantment causes creatures of the kind you designated to feel an intense urge to leave the area and avoid the target. When such a creature can see the target or comes within 60 feet of it, the creature must succeed on a WIS Save or become frightened. The creature remains frightened while it can see the target or is within 60 feet of it. While frightened by the target, the creature must use its movement to move to the nearest safe spot from which it can't see the target. If the creature moves more than 60 feet from the target and can't see it, the creature is no longer frightened, but the creature becomes frightened again if it regains sight of the target or moves within 60 feet of it.</dd>
    <dt>Sympathy</dt> <dd>The enchantment causes the specified creatures to feel an intense urge to approach the target while within 60 feet of it or able to see it. When such a creature can see the target or comes within 60 feet of it, the creature must succeed on a WIS Save or use its movement on each of its turns to enter the area or move within reach of the target. When the creature has done so, it can't willingly move away from the target.</dd>
</dl>
<p>If the target damages or otherwise harms an affected creature, the affected creature can make a WIS Save to end the effect, as described below.</p>
<p>Ending the Effect. If an affected creature ends its turn while not within 60 feet of the target or able to see it, the creature makes a WIS Save. On a successful save, the creature is no longer affected by the target and recognizes the feeling of repugnance or attraction as magical. In addition, a creature affected by the spell is allowed another WIS Save every 24 hours while the spell persists.</p>
<p>A creature that successfully saves against this effect is immune to it for 1 minute, after which time it can be affected again.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Emotion', 'Ritual', 'Compulsion'], 8);

        $spell               = new Spell;
        $spell->name         = 'Anyspell';
        $spell->casting      = 'Somatic Casting, Verbal Casting, Ability Damage';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>1 CON Damage</dd>
</dl>';
        $spell->targets      = 'Self';
        $spell->duration     = '1 round';
        $spell->description  = '<p>This spell allows you to cast any Wizard spell of 3rd level or lower that you have seen before. After casting this spell, the desired Wizard spell becomes known to you. You must cast it before the end of your next turn. You must provide all requirements (such as Material Components, Secondary Casters, etc).</p>';
        $spell->heightened   = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the maximum level of Wizard spell that you can select and increase the Ability Damage by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Apport Object';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Object Touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>This spell allows you to instantaneously transport a small nonliving object from one location to another. There are two ways to use the spell: sending allows you to immediately send an object held in your hands to a nearby location, while receiving permits you to cast the spell ahead of time on an object and summon it to your location at a later time.</p>
<dl>
    <dt>Sending</dt> <dd>If you choose to send the object elsewhere, the spell functions like teleport, except the size of the object is limited and the distance it can travel is equal to only 100 feet. You can't transport an object to the Ethereal Plane. You can send the held object to any square within range, and you don't need line of sight to the target location. You can place the object in the open or inside a container, a pocket, or even someone's hand. If there isn't room in the space you select (either because the space chosen is too small or because there is already something else there), or if the person doesn't want or isn't expecting the object in his hands, it appears on the ground within the target's square instead. You can transport the object to an elevation above the floor as long as the destination is within the spell's total distance limit.</dd>
    <dt>Receiving</dt> <dd>You can prepare an object ahead of time to apport it to yourself by casting the spell upon it and assigning a mental trigger to complete the spell. You don't need line of sight to the object to apport it to you, but the object must be within a distance equal to 100 feet. Completing the spell is an Action. You can apport an object in this way even if someone holding the object is unwilling to let you take it. Once you apport the object, the spell ends.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning'], 2);

        $spell              = new Spell;
        $spell->name        = 'Appraising Eye';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 hour';
        $spell->description = "<p>You place your thumb and forefinger to your eye as if holding a jeweler's lens. You gain a +10 Insight bonus to your Appraise (Perception) Check (or any other skill that might apply to estimating the value of an item). You must spend 2 rounds instead of the normal 1 round to gain the benefits of this spell.</p>
<p>Even if you Fail a check, you never mistakenly estimate the worth of an item by more than 50% when using the bonus from this spell.</p>";
        $helper->addTypesToSpell($spell, ['Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Aquavision';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '6 hours';
        $spell->description = "<p>The target can see in aquatic darkness up to a range of 60 feet in areas where their eyes normally don't see without light (for humans, a depth of 600 feet; for most other races, 1,200 feet).</p>
<p>Aquavision does not work effectively in the presence of stronger lights than bioluminescence of glowing coral more than 20 feet distant. Invisible creatures are not detectable using aquavision.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell                = new Spell;
        $spell->name          = 'Aqueous Column';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->area          = '10 ft sphere';
        $spell->targets       = 'One creature';
        $spell->spell_creator = 'Laeral Silverhand';
        $spell->duration      = '6 hours';
        $spell->description   = '<p>This spell creates a circular mass of water in front of the caster, suspended in midair at an orientation of your choosing. It is completely pure, appearing as either fresh water or salt water, depending on your choice.</p>
<p>This spell is most commonly used to host aquatic creatures on dry land.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the size +10 feet diameter</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 4);

        $spell                = new Spell;
        $spell->name          = 'Arcane Evasion';
        $spell->casting       = 'At least 10 minutes (Material, Somatic, Verbal, Ability Damage)';
        $spell->spell_creator = 'Elminster';
        $spell->rarity        = 'Unique';
        $spell->targets       = 'Self';
        $spell->duration      = 'Permanent, until discharged';
        $spell->description   = "<p>This powerful variant of the Contingency spell automatically transfers you and everything you carry or touch (except for other creatures or objects that weigh more than 50 lbs) to a locale you name.</p>
<p>When casting this spell, you must specify the locale and detail up to six specific conditions that trigger the spell. When any of these conditions occur, your body, mind, and soul are whisked away to the location. The location can be any place you have visited, even on another plane.</p>
<p>Also when casting this spell, you cast Teleport and one or two other spells that are to take effect when you arrive at your destination. The 10-minute casting time is the minimum total for all castings. If the companion spells have combined casting times longer than 10 minutes, use the combined casting times instead.</p>
<p>The Teleport spell whisks you through the Astral Plane to your destination, so anything that prevents Astral travel also foils this spell.</p>
<p>The spells to be brought into effect by this spell must be ones that affect your person and be a spell level no higher 6th level.</p>
<p>The conditions you specify to bring the spell into effect must be clear, although they can be general.</p>
<p>This spell pulls together your mind, body, and soul if they have been separated.</p>
<blockquote>
    Ex. If your soul is trapped in a Magic Jar when this spell is triggered, your soul returns to your body (this spell breaks the Magic Jar spell).
</blockquote>
<p>If your body or soul has been magically trapped, you must succeed at a Caster Level check (DC 11 + Character Proficiency Bonus of the caster of the trapping spell). If you succeed, the trapping spell is broken and this spell works, otherwise, this spell fails.</p>
<p>If you're dead when you arrive at your destination, your soul immediately departs just as though you died at your destination.</p>
<dl>
    <dt>Ability Damage</dt> <dd>5 CON damage</dd>
    <dt>Material Component</dt> <dd>Those of the companion spells, a focus (a statuette of you carved form ivory and decorated with gems worth at least 1,500 gp). You must carry the focus for this spell to work.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 9);
        $spell->materials()->save(Material::where('name', 'Blood')->firstOrFail(), ['meta' => 'Your own, freshly drawn']);
        $spell->materials()->save(Material::where('name', 'Creature Part')->firstOrFail(), ['meta' => 'The eyelash of a magic Ogre-Mage, Ki-rin, or similar magic using creature']);
        $spell->materials()->save(Material::where('name', 'Quicksilver')->firstOrFail(), ['quantity' => '10 oz']);

        $spell              = new Spell;
        $spell->name        = 'Arcane Eye';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>You create an invisible, magical eye within range that hovers in the air for the duration.</p>
<p>You mentally receive visual information from the eye, which has normal vision and darkvision out to 30 feet. The eye can look in every direction.
As an action, you can move the eye up to 30 feet in any direction. There is no limit to how far away from you the eye can move, but it can't enter another plane of existence. A solid barrier blocks the eye's movement, but the eye can pass through an opening as small as 1 inch in diameter.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You Arcane Eye can travel through stone and metal (but not wood or other living materials and objects with the Force Type)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Scrying'], 4);

        $spell              = new Spell;
        $spell->name        = 'Arcane Gate';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '500 feet';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You create linked teleportation portals that remain open for the duration.</p>
<p>Choose two points on the ground that you can see, one point within 10 feet of you and one point within 500 feet of you. A circular portal, 10 feet in diameter, opens over each point. If the portal would open in the space occupied by a creature, the spell fails, and the casting is lost.</p>
<p>The portals are two-dimensional glowing rings filled with mist, hovering inches from the ground and perpendicular to it at the points you choose. A ring is visible only from one side (your choice), which is the side that functions as a portal.</p>
<p>Any creature or object entering the portal exits from the other portal as if the two were adjacent to each other; passing through a portal from the non-portal side has no effect. The mist that fills each portal is opaque and blocks vision through it. On your turn, you can rotate the rings as an Action so that the active side faces in a different direction.</p>
<dl>
    <dt>Material Components</dt> <dd>A splinter from a wooden door.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 6);

        $spell                = new Spell;
        $spell->name          = 'Arcane Hand';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->range         = '120 feet';
        $spell->spell_creator = 'Bigby';
        $spell->duration      = 'Concentration, up to 1 minute';
        $spell->description   = "<p>You create a Large hand of shimmering, translucent force in an unoccupied space that you can see within range. The hand lasts for the spell's duration, and it moves at your command, mimicking the movements of your own hand.</p>
<p>The hand is an object that has AC 20 and hit points equal to your hit point maximum. If it drops to 0 hit points, the spell ends. It has a STR of 26 (+8) and a DEX of 10 (+0). The hand doesn't fill its space.</p>
<p>When you cast the spell and as a Bonus Action on your subsequent turns, you can move the hand up to 60 feet and then cause one of the following effects with it.</p>
<dl>
    <dt>Clenched Fist</dt> <dd>The hand strikes one creature or object within 5 feet of it. Make a melee spell attack for the hand using your game statistics. On a hit, the target takes 4d8 +8 force damage.</dd>
    <dt>Forceful Hand</dt> <dd>The hand attempts to push a creature within 5 feet of it in a direction you choose. Make a check with the hand's STR contested by the STR (Athletics) check of the target. If the target is Medium or smaller, you have Advantage on the check. If you succeed, the hand pushes the target up to 5 feet plus a number of feet equal to five times your spellcasting ability modifier. The hand moves with the target to remain within 5 feet of it.</dd>
    <dt>Grasping Hand</dt> <dd>The hand attempts to grapple a Huge or smaller creature within 5 feet of it. You use the hand's STR score to resolve the grapple. If the target is Medium or smaller, you have Advantage on the check. While the hand is grappling the target, you can use a Double Action to have the hand crush it. When you do so, the target takes Bludgeoning damage equal to 2d6 + your spellcasting ability modifier + 8.</dd>
    <dt>Interposing Hand</dt> <dd>The hand interposes itself between you and a creature you choose until you give the hand a different command. The hand moves to stay between you and the target, providing you with half cover against the target. The target can't move through the hand's space if its STR score is less than or equal to the hand's STR score. If its STR score is higher than the hand's STR score, the target can move toward you through the hand's space, but that space is difficult terrain for the target.</dd>
</dl>";
        $spell->heightened = "<dl>
    <dt>Heightened (+1)</dt> <dd>
        <ul>
            <li>Increase the hand's STR by +2</li>
            <li>Clenched Fist: Increase the damage by +2D8 +1</li>
            <li>Grasping Hand: Increase the damage by +2D6 +1</li>
        </ul>
    </dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Evocation', 'Force', 'Attack'], 5);

        $spell              = new Spell;
        $spell->name        = 'Arcane Lock';
        $spell->casting     = 'Material Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->duration    = 'Until dispelled';
        $spell->description = '<p>You touch a closed door, window, gate, chest, or entryway, and it becomes locked for the duration. You and the creatures you designate when you cast this spell can open the object normally. You can also set a password that, when spoken within 5 feet of the object, suppresses this spell for 1 minute. Otherwise, it is impassable until it is broken or the spell is dispelled or suppressed. Casting knock on the object suppresses arcane lock for 10 minutes.</p>
<p>While affected by this spell, the object is more difficult to break or force open; the DC to break it or pick any locks on it increases by 10.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may include up to your Spellcaster level of creatures that can also by-pass the lock. These individuals do not need to be present at spell casting, but you must be familiar with them.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 2);
        $spell->materials()->save(Material::where('name', 'Gold')->firstOrFail(), [
            'quantity' => 'Pinch of dust',
            'price'    => '25 gp',
            'meta'     => 'Consumed',
        ]);

        $spell              = new Spell;
        $spell->name        = 'Arcane Mark';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One object touched';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>You inscribe your personal Rune or Mark (which can consist of no more than six characters) on an object or creature without harming the target. The writing can be visible or invisible.</p>
<p>If the Mark is made invisible, a Detect Magic, or any effect that reveals invisible objects will reveal the invisible Mark.</p>
<p>The Mark cannot be Dispelled, but it can be removed with an Erase spell. If the Mark is placed on a living being, normal wear gradually causes the effect to fade in about a month.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 0);

        $spell              = new Spell;
        $spell->name        = 'Arcane Pocket';
        $spell->casting     = 'Verbal Casting, Material Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Object Touched';
        $spell->duration    = '6 Hours';
        $spell->description = '<p>With a touch, you conjure an extradimensional space inside a pouch or pocket. The pocket acts as a bag of holding, except it can hold only 50 pounds. Regardless of what is placed into the pocket, it weighs 3 pounds.</p>
<p>Unlike a bag of holding, the pocket created by this ability cannot be overloaded or ruptured (any additional material simply spills out of the top).</p>
<p>The pocket becomes nonmagical, spilling all of its contents onto the ground unharmed, if it leaves your possession, or you create a new arcane pocket. You cannot place another extradimensional object into the extradimensional space created by this spell or vice-versa.</p>
<p>An arcane pocket grants you a +1 bonus on Sleight of Hand checks to conceal its contents.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Extradimensional'], 1);

        $spell              = new Spell;
        $spell->name        = 'Arcane Sensitivity';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>With a touch, you instantly determine if a creature can cast Arcane spells and the maximum spell level it can cast.</p>';
        $helper->addTypesToSpell($spell, ['Divination'], 1);

        $spell                = new Spell;
        $spell->name          = 'Arcane Sword';
        $spell->casting       = 'Material Casting';
        $spell->spell_creator = 'Mordenkainen';
        $spell->range         = '60 feet';
        $spell->duration      = 'Concentration, up to 1 minute';
        $spell->description   = '<p>You create a sword-shaped plane of force that hovers within range. It lasts for the duration.</p>
<p>With an Action, you can make a melee spell attack against a target of your choice within 5 feet of the sword. On a hit, the target takes 3D10 Force damage. Until the spell ends, you can use an Action on each of your turns to move the sword up to 20 feet to a spot you can see and repeat this attack against the same target or a different one. The sword may attack only once each turn.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Force', 'Attack'], 7);
        $spell->materials()->save(Material::where('name', 'Platinum')->firstOrFail(), ['price' => '250 gp', 'meta' => 'A miniature Platinum sword with a grip and pommel of copper and zinc']);

        $spell                = new Spell;
        $spell->name          = "Arcanist's Magic Aura";
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Nystul';
        $spell->range         = 'Touch';
        $spell->duration      = '24 hours';
        $spell->description   = "<p>You place an illusion on a creature or an object you touch so that divination spells reveal false information about it. The target can be a willing creature or an object that isn't being carried or worn by another creature.</p>
<p>When you cast the spell, choose one or both of the following effects. The effect lasts for the duration. If you cast this spell on the same creature or object every day for 30 days, placing the same effect on it each time, the illusion lasts until it is dispelled.</p>
<p>False Aura. You change the way the target appears to spells and magical effects, such as detect magic, that detect magical auras. You can make a nonmagical object appear magical, a magical object appear nonmagical, or change the object's magical aura so that it appears to belong to a specific school of magic that you choose. When you use this effect on an object, you can make the false magic apparent to any creature that handles the item.</p>
<p>Mask. You change the way the target appears to spells and magical effects that detect creature types, such as a paladin's Divine Sense or the trigger of a symbol spell. You choose a creature type and other spells and magical effects treat the target as if it were a creature of that type or of that alignment.</p>";
        $helper->addTypesToSpell($spell, ['Glamor', 'Illusion', 'Visual'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Argauneau';
        $spell->spell_creator  = 'Theller';
        $spell->save_attribute = 'CON';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'One dragon egg';
        $spell->duration       = 'Instantaneous or 12 hours (see text)';
        $spell->description    = '<p>You drain the life energy from a dragon egg and absorb it into yourself, which may be used for several purposes.</p>
<dl>
    <dt>Healing</dt> <dd>Heal 5D6 points of damage as if a Cure spell were cast on you. This has a Duration of Instantaneous.</dd>
    <dt>Ability Boost</dt> <dd>+2 Enhancement bonus to STR, CON, and CHA, for a Duration of 12 hours</dd>
    <dt>Refresh Spell</dt> <dd>Regain one cast spell or used spell slot of any level you can cast. This has a Duration of Instantaneous</dd>
</dl>
<p>A dragon egg is treated as an object, not a creature, and it does not get a Save against the spell unless it is in the possession of a creature (and therefore uses the normal Save rules for objects in the possession of a creature).</p>
<p>If you are not a creature of the type "dragon", you must make a CON Save (DC 14) when you cast this spell, taking 3D6 points of damage, and are Nauseated for 1 round from the sudden influx of incompatible life energy.</p>
<dl>
    <dt>Material Components</dt> <dd>A red dragon egg containing a living red dragon embryo. Worth 2,000 gp.</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No damage and not Nauseated</dd>
    <dt>Failure</dt> <dd>If you are not a Dragon, then suffer 3D6 Negative damage and Nauseated for 1 round.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 3);

        $spell              = new Spell;
        $spell->name        = 'Armageddon';
        $spell->casting     = 'Somatic Casting, Verbal Casting, Sacrifice';
        $spell->range       = '120 feet';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You open a portal to one of the Upper Planes and call forth celestials to aid in battle against the forces of evil.</p>
<p>THe spell takes place over a period of time.</p>
<ol>
    <li>The first round, 2D4 Avorals arrive</li>
    <li>Two rounds later, a Ghaele Eladrin arrives</li>
    <li>Two rounds later, an Astral Deva arrives</li>
    <li>Two rounds later, a Sword Archon arrives</li>
</ol>
<p>Once these creatures appear, they serve you for the duration of the spell. The duration starts when the first creatures arrive. At the end of the duration, all summoned creatures disappear at once.</p>
<p>The Celestials only heed the summons if you are of Good alignment and there are evil foes to fight.</p>
<p>You can dismiss summoned creatures with an Action individually or in groups.</p>
<dl>
    <dt>Sacrifice</dt> <dd>1 point CON permanently</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Exalted', 'Summoning'], 10);

        $spell              = new Spell;
        $spell->name        = 'Armor of Darkness';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You envelop the target in a shroud of flickering shadows. The shroud can, the target wishes, conceal their features. The target gains the following.</p>
<ul>
    <li>+5 Deflection bonus to AC</li>
    <li>Darkvision out to 60 ft</li>
    <li>+2 bonus to all Saves vs any effect that has the Holy, Good, or Light types</li>
    <li>+4 Turn resistance if the target is Undead</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Darkness'], 4);

        $spell              = new Spell;
        $spell->name        = 'Armor of Frost';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 hour';
        $spell->description = '<p>A protective field of Cold surrounds you, manifesting as a spectral frost that covers you and your gear.</p>
<p>You gain 5 temporary Hit Points for the duration. If a creature hits you with a Melee Attack while you have these Hit Points, the creature takes 1 Cold damage.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Temporary Hit Points by +5 and the damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Cold'], 1);
        $spell->materials()->save(Material::where('name', 'Water')->firstOrFail(), ['quantity' => 'One cup']);

        $spell               = new Spell;
        $spell->name         = 'Armor of Wealth';
        $spell->casting      = 'Material Casting, Verbal Casting';
        $spell->requirements = 'Caster must be of draconic ancestry';
        $spell->targets      = 'Self';
        $spell->duration     = 'Concentration, up to 1 minute';
        $spell->description  = "<p>This spell can only be cast on top of a hoard of treasure, worth at least 10,000 in total, consisting mostly of coins. The unsecured treasure around you is animated and drawn into a swirling tornado centered on you. The spell also targets treasure made out of precious metal and precious stones. Only treasure within 30 feet of you as of the casting of the spell is affected by this magic.</p>
<p>The animated hoard protects you as it forms a swirling battier around you, blocking most of your body while leaving your face and your hands free. The rotating hoard avoids your hands and face and moves with you; provided that you don't move more than 15 feet a turn. You cannot use your wings to fly while under the effects of this spell. you can however freely cast and use your breath weapon while surrounded by the animated hoard.</p>
<p>The animated hoard provides you with these effects</p>
<ul>
    <li>It deafens you and creatures within 10 feet of you</li>
    <li>It hedges out vapor, gas, and fog that can be dispersed by strong winds</li>
    <li>Ranged attack rolls against you have Disadvantage</li>
    <li>For every 5,000 gp worth of animated treasure, you gain a +1 to AC with a max of +5</li>
</ul>
<p>In addition, creatures within 30 feet of you who look directly into the animated hoard must succeed on a CON Save or become blinded. The DC is 10 +1 for every 5,000 gp in the animated hoard with a maximum of +10. Blinded creatures may repeat the Save at the end of each of their turns, removing the blindness on a Success.</p>
<p>When the spell ends, 5 percent of the full value of the animated hoard is lost as a material component to the spell.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 5);

        $spell              = new Spell;
        $spell->name        = 'Arms of Plenty';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>Two clawed arms grow out of the Target's body. The arms are roughly humanoid, but are either scaly or furred and end in sharp talons. The arms will try to break through any clothing or armor the character is wearing. If the target is wearing any armor, the target takes 1D4 Crushing damage, as the arms try to break out of the armor. The character can make a STR check to break the armor they are wearing. Failing causes the spell to end.</p>
<p>This spell grants the target an additional Action. This additional Action can only be used to make a Melee Attack with one of the clawed arms. The clawed arms deals 1D6 Slashing damage (or 1D4 if the target is size Small or smaller) + their STR modifier. If you hit with both claws in the same round against the same opponent, then you can rend the target for an additional 2D6 + STR modifier Slashing damage.</p>
<p>Multiple castings on the same target does not stack, instead the duration is simply reset.</p>
<dl>
    <dt>Material Components</dt> <dd>A xill's claw</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by an additional die.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell               = new Spell;
        $spell->name         = 'Arrn`Tel`Orar';
        $spell->casting      = '4 hours (Material, Somatic, Verbal, Secondary Casters, Skill Check)';
        $spell->area         = '50-yard radius per caster';
        $spell->duration     = '30 minutes';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>Minimum of 5 Secondary Casters with no upper limit</dd>
</dl>';
        $spell->description = '<p>Storm Erosion. Ritual of Myriad.</p>
<p>By wrapping all the casters of this spell in a near-solid ward, this spell can weather away an entire city. Unlike the near untamed forces of the N`Tel`Orar spell, these forces find any unnatural states for living and nonliving matter and restores them to their most natural states. Some buildings are reduced to the soil from whence they came, wooden buildings are reduced to seedling trees, and so on.</p>
<p>This spell effectively deconstructs and reduces all artificial constructs (including High Magic altered trees) to their natural states. All buildings vanish, reduced to component matter such as plants, through it restores them to full natural health. Like the lesser N`Tel`Orar, this spell cleanses pollution by civilization and restores the natural order of a place. All that remains of an entire city is enriched soil (as well as surrounding plant life) and loam.</p>
<dl>
    <dt>Material Components</dt> <dd>Burning incense and bits of earth and wood mixed in water</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['High Magic', 'Transmutation'], 9);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 30]);
        $spell->skills()->save(app()->skills['Nature'], ['dc' => 20]);

        $spell              = new Spell;
        $spell->name        = 'Arrow Storm';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 round';
        $spell->description = '<p>The next Ranged Weapon attack you make with a Bow (longbow, shortbow, etc.), causes an arrow to fired at every opponent in your bows range (to a maximum limit of your class level). If you do not make the Ranged Attack the same round you cast this spell, then the spell ends with no effect.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Attack', 'Ranged'], 4);

        $spell              = new Spell;
        $spell->name        = 'Aspect of the Deity, Greater';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>As the lesser version, except that you take on the qualities of a half-celestial.</p>
<ul>
    <li>You do not gain the spell-like abilities of these creatures</li>
    <li>Your creature type changes to outsider for the duration of the spell</li>
    <li>Unlike other outsiders, you can be brought back from the dead if you are killed in this form</li>
    <li>You grow feathered wings that allow you to fly at twice your normal speed</li>
    <li>You gain a +1 Natural Armor, or your existing Natural Armor bonus increases by +1</li>
    <li>You gain darkvision 120 feet</li>
    <li>You gain immunity to Acid, Cold, Disease, and Electricity</li>
    <li>You gain a +4 racial bonus on your Saves against Poison</li>
    <li>You gain the following bonuses to your abilities
        <dl>
            <dt>STR</dt> <dd>+8</dd>
            <dt>DEX</dt> <dd>+4</dd>
            <dt>CON</dt> <dd>+8</dd>
            <dt>INT</dt> <dd>+4</dd>
            <dt>WIS</dt> <dd>+8</dd>
            <dt>CHA</dt> <dd>+8</dd>
        </dl>
        These ability score modifications can be adjusted depending on the deity.
    </li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Exalted'], 7);

        $spell              = new Spell;
        $spell->name        = 'Aspect of the Deity, Lesser';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minute';
        $spell->description = '<p>When you cast this spell, your body changes into a form that is more like your deity (in a limited fashion).</p>
<ul>
    <li>You gain darkvision 60 feet</li>
    <li>You gain resistance: 10 against Acid, Cold, and Electricity</li>
    <li>You gain a +4 bonus to your CHA, and a +4 bonus to another one of your ability scores, depending on your deity.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Exalted'], 3);

        $spell              = new Spell;
        $spell->name        = "Assassin's Darkness";
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 foot';
        $spell->area        = '40-ft radius centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>You call a globe of absolute darkness into being, which only you can see through. All other creatures within or who enter this spell's area are blinded while they remain in the area. Even creatures that have darkvision cannot see through this magical darkness, although creatures capable of seeing in magical darkness are not affected by it.</p>
<p>While you are outside the sphere, you can see nothing within, and every creature within has total concealment. Upon entering the spell's area, however, you can see as if the area were illuminated by bright light and can interact with those within as normal, even through they cannot see you.</p>";
        $helper->addTypesToSpell($spell, ['Evocation', 'Darkness'], 4);

        $spell              = new Spell;
        $spell->name        = "Assassin's Eye";
        $spell->casting     = 'Material Casting, Somatic Casting Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>This spell magically enhances your senses, making you deadly with Ranged Attacks. You gain the following</p>
<ul>
    <li>+10 Competence Bonus on Perception (Spot) checks</li>
    <li>+2 Competence Bonus to all Ranged Attacks</li>
    <li>All of your Ranged Weapon Attacks deal an additional +5 Damage</li>
    <li>Darkvision out to 60 feet. If you already have Darkvision, then increase the range by +30 feet.</li>
    <li>One of your Precision Attacks gains an additional Die of Damage.</li>
    <li>Increase any Precision Attack range by +30 feet. If you have a Precision attack that does not have a range, it now has a range of 30 feet for the Duration of the spell.</li>
</ul>
<p>This spell grants these benefits at the exact spot you cast the spell. If you move even 5 feet from the place where you cast the spell, you lose all benefits until you return to that spot. Any time spent away from the spot where you cast the spell counts towards the Duration.</p>
<dl>
    <dt>Material Components</dt> <dd>A magnifying glass lens</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Astral Hospice';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->rarity      = 'Rare';
        $spell->duration    = '1 Week';
        $spell->description = "<p>This spell can only be cast from the Astral Plane.</p>
<p>You open a small planar portal from the Astral Plane to a demiplane where natural healing can occur (unlike on the Astral Plane itself).</p>
<p>The firm surface of the demiplane is roughly 50 square ft, and the demiplane extends 50 feet above the surface. THe demiplane's traits (including time, gravity, and magic) match those of the Material Plane, and the demiplane is self-contained; walking to one end wraps around to the other end.</p>
<p>The only way in or out of the demiplane is through the entrance created by you, and only those named or described by you upon the casting of the spell may enter. The portal continues to exist on the Astral Plane only while the hospice demiplane exists. When you leave the demiplane, the portal seals shut and then vanishes. Anyone still in the hospice demiplane at that time appears on the Astral Plane at the location of the hospice's entrance.</p>
<dl>
    <dt>Material Components</dt> <dd>A single flawless gemstone of at least 250 gp.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Extradimensional'], 4);

        $spell              = new Spell;
        $spell->name        = 'Astral Projection';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->range       = '10 feet';
        $spell->duration    = 'Special';
        $spell->description = "<p>You and up to eight willing creatures within range project your astral bodies into the Astral Plane (the spell fails and the casting is wasted if you are already on that plane). The material body you leave behind is unconscious and in a state of suspended animation; it doesn't need food or air and doesn't age.</p>
<p>Your astral body resembles your mortal form in almost every way, replicating your game statistics and possessions. The principal difference is the addition of a silvery cord that extends from between your shoulder blades and trails behind you, fading to invisibility after 1 foot. This cord is your tether to your material body. As long as the tether remains intact, you can find your way home. If the cord is cut—something that can happen only when an effect specifically states that it does—your soul and body are separated, killing you instantly.</p>
<p>Your astral form can freely travel through the Astral Plane and can pass through portals there leading to any other plane. If you enter a new plane or return to the plane you were on when casting this spell, your body and possessions are transported along the silver cord, allowing you to re-enter your body as you enter the new plane. Your astral form is a separate incarnation. Any damage or other effects that apply to it have no effect on your physical body, nor do they persist when you return to it.</p>
<p>The spell ends for you and your companions when you use your action to dismiss it. When the spell ends, the affected creature returns to its physical body, and it awakens.</p>
<p>The spell might also end early for you or one of your companions. A successful dispel magic spell used against an astral or physical body ends the spell for that creature. If a creature's original body or its astral form drops to 0 hit points, the spell ends for that creature. If the spell ends and the silver cord is intact, the cord pulls the creature's astral form back to its body, ending its state of suspended animation.</p>
<p>If you are returned to your body prematurely, your companions remain in their astral forms and must find their own way back to their bodies, usually by dropping to 0 hit points.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Ritual'], 9);

        $spell               = new Spell;
        $spell->name         = 'Atonement';
        $spell->casting      = '1 day (Material, Somatic, Verbal, Secondary Caster)';
        $spell->range        = 'Touch';
        $spell->targets      = 'One creature touched who is of the same religion as you';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>The secondary caster must be the one that is atoning</dd>
</dl>';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>This spell removes the burden of misdeeds from the subject. The creature seeking atonement must be truely repentant and desirous of setting right thier misdeeds. If the atoning creature committed the evil act unwittingly or under some form of compulsion, then the Atonement operates normally at no cost to you. However, if hte case of a creature atoning for deliberate misdeeds, you must intercede with your deity (requireing you to expend 2,500 gp in rare incense and offerings). Atonement may be cast for one of several purposes, depending on the version selected.</p>
<dl>
    <dt>Reverse Magical Alignment Change</dt> <dd>If the target had its alignment magically changed, Atonement returns its alignment to its original status at no additional cost.</dd>
    <dt>Restore Class</dt> <dd>A divine warrior or other class, who has lost their class features due to violating the alignment restrictions may have their class features restored by this spell. This spell must be cast by a priest of the same god as the target.</dd>
    <dt>Restore Priest or Druid spell powers</dt> <dd>A cleric or druid who has lost the ability to cast spells by incurring the anger of her deity may regain that ability by seeking atonement from another cleric of the same deity or another druid. If the transgression was intentional, the casting cleric must expend 2,500 gp in rare incense and offerings for her god's intercession.</dd>
    <dt>Redemption or Temptation</dt> <dd>You may cast this spell upon a creature of an opposing alignment in order to offer it a chance to change its alignment to match yours. The prospective subject must be present for the entire casting process. Upon completion of the spell, the subject freely chooses whether it retains its original alignment or acquiesces to your offer and changes to your alignment. No duress, compulsion, or magical influence can force the subject to take advantage of the opportunity offered if it is unwilling to abandon its old alignment. This use of the spell does not work on outsiders or any creature incapable of changing its alignment naturally.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Good', 'Ritual'], 5);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 5]);

        $spell              = new Spell;
        $spell->name        = 'Augury';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You ask about the results of a particular course of action. The spell can predict results up to 30 minutes into the future, and reveal the GM's best guess among the following outcomes.</p>
<dl>
    <dt>Weal</dt> <dd>The results will be good</dd>
    <dt>Woe</dt> <dd>The results will be bad</dd>
    <dt>Weal and Woe</dt> <dd>The results will be a mix of good and bad</dd>
    <dt>Nothing</dt> <dd>There won't be particularly good or bad results</dd>
</dl>
<p>The GM rolls a secret DC 6 flat check. On a failure, the result is always \"nothing\". This makes it impossible to tell whether a \"nothing\" result is accurate. If anyone casts Augury on the same topic, use the secret roll result from the first casting. It's possible to get a different result if circumstances change.</p>";
        $helper->addTypesToSpell($spell, ['Divination', 'Prediction', 'Ritual'], 2);

        $spell              = new Spell;
        $spell->name        = 'Cloak of Bravery';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '60 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 30 minutes';
        $spell->description = '<p>All allies within the emanation (including you) gain a +3 Morale Bonus on Saves vs Fear effects.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Aura'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Aura of Confusion';
        $spell->casting        = 'Somatic Casting';
        $spell->area           = '30 ft radius';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = '<p>You emanate an aura that causes confusion. Until the spell ends, whenever a humanoid enters the aura or starts their turn inside the area of the aura, they must make a WIS Save or be confused.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>Babbles incoherently and is Slowed 1 for 1 round</dd>
    <dt>Failure</dt> <dd>Confused for 1 round</dd>
    <dt>Critical Failure</dt> <dd>Confused for 5 rounds</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Aura', 'Emotion', 'Illusion', 'Disorienting'], 4);

        $spell              = new Spell;
        $spell->name        = 'Aura of Courage';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You emanate an aura that inspires confidence. All allies within the area (including yourself) cannot become Charmed or Frightened. This spell has no effect on allies that are already Charmed or Frightened.</p>';
        $helper->addTypesToSpell($spell, ['Aura', 'Abjuration'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Aura of Death';
        $spell->casting        = 'Somatic Casting';
        $spell->area           = '30 ft radius';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>You emanate an aura that drains life from the living. Until the spell ends, whenever a humanoid enters the aura or starts their turn inside the aura (except yourself), they must make a CON Save or take 4D6 Negative damage.</p>
<p>If the damage from Aura of Death drops a creature to 0 Hit Points or lower, then gain a +1 to their Dying condition each time they gain the Dying condition.</p>
<p>Once 3 successful Saves are made or 1 Critical Success, the creature becomes immune to this caster's Aura of Death for 24 hours.</p>
<p>The following spells makes a creature immune to Aura of Death</p>
<ul>
    <li>Resist Negative Energy</li>
    <li>Protection From Evil</li>
    <li>Circle of Protection From Evil</li>
    <li>Antimagic Field</li>
    <li>Prismatic Sphere</li>
</ul>";
        $spell->saves = "<dl>
    <dt>Critical Success</dt> <dd>No damage. Immune to this caster's Aura of Death for 24 hours</dd>
    <dt>Success</dt> <dd>Half damage. Once 3 successful Saves are made, become Immune to this caster's Aura of Death for 24 hours.</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Aura', 'Necromancy', 'Death'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Aura of Fear';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->area           = '30 ft radius';
        $spell->targets        = 'Self';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>You emit an aura of Fear. All creatures in the area must make a CHA Save and suffer the effects based on their Save. A creature can attempt another Save at the end of each of its turns, if it is a success, The Frightened Condition ends. Once a creature successfully Saves, they are immune to this spell from this caster for 1 day.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>The target is unaffected</dd>
    <dt>Failure</dt> <dd>The target is frightened 1 for 1 minute or until they succeed on a Save</dd>
    <dt>Critical Failure</dt> <dd>The target is frightened 2 and fleeing for 1 round</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Aura', 'Enchantment', 'Fear'], 2);

        $spell              = new Spell;
        $spell->name        = 'Aura of Glory';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>Your Aura glows with Divine light. It has the following abilities.</p>
<ul>
    <li>Bright light within the area and dim light 30 ft beyond. Treat this as a Light spell of 1 level higher than the Spell Slot used to cast this spell.</li>
    <li>You gain a +4 bonus on all CHA based checks and Saves</li>
    <li>Undead creatures within the area are Blinded</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Light', 'Exalted'], 2);

        $spell              = new Spell;
        $spell->name        = 'Aura of Haste';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>Energizing energy emanates from you. Until the spell ends, each non-hostile creature in the aura (including you) gains the Quick condition and can use the extra Action for Strike and Stride Actions. Allies gain the Quick condition the turn after entering the aura and  loss the Quick condition the turn after exiting the aura.</p>';
        $helper->addTypesToSpell($spell, ['Aura', 'Bless', 'Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Aura of Hope';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>This spell bestows hope and vitality. For the duration, all creatures within the area of the Aura has Advantage on WIS Save and Death Saves, and regains the maximum number of hit points possible from any healing.</p>';
        $helper->addTypesToSpell($spell, ['Aura', 'Bless', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Aura of Life';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>Life-preserving energy radiates from you. Until the spell ends, the aura moves with you, centered on you.</p>
<ul>
    <li>Each non-hostile creature in the aura (including you) has Resistance to Negative damage</li>
    <li>Each non-hostile creature's Hit Point Maximum can't be reduced</li>
    <li>Each non-hostile creature regains 2 Hit Points when it starts its turn in the Aura with 0 Hit Points</li>
    <li>Any Undead creature that starts its turn in the area takes 2 points of Positive damage.</li>
</ul>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Aura', 'Enchantment', 'Necromancy'], 4);

        $spell              = new Spell;
        $spell->name        = 'Aura of Pain';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>Life-sapping energy radiates from you. Until the spell ends, all of your enemies within the area suffers 2 points of Negative damage (this effect heals Undead).</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Aura', 'Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Aura of Power';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>Holy power radiates from you. Until the spell ends, the aura moves with you, centered on you. Each ally in the aura gains a +4 bonus to STR, DEX, and CON, as well as the Quickened condition (which can be used on Strike and Stride Actions). All physical weapons deal an additional +4D6 Positive damage on a successful hit.</p>';
        $helper->addTypesToSpell($spell, ['Aura', 'Enchantment', 'Positive'], 5);

        $spell              = new Spell;
        $spell->name        = 'Aura of Protection';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>Allies (including yourself) gain a +1 Morale bonus to AC and to all Saves</p>';
        $helper->addTypesToSpell($spell, ['Aura', 'Enchantment', 'Bless'], 2);

        $spell              = new Spell;
        $spell->name        = 'Aura of Purity';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>Purifying energy radiates from you within. Until the spell ends, the aura moves with you, centered on you. Each non-hostile creature in the aura (including you) can't become diseased, has resistance to poison damage, and gains Advantage on Saves against effects that cause any of the following conditions:</p>
<ul>
    <li>Blinded</li>
    <li>Charmed</li>
    <li>Deafened</li>
    <li>Frightened</li>
    <li>Paralyzed</li>
    <li>Sickened</li>
    <li>Stunned</li>
</ul>";
        $helper->addTypesToSpell($spell, ['Aura', 'Abjuration', 'Enchantment', 'Positive'], 4);

        $spell              = new Spell;
        $spell->name        = 'Aura of Silence';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>As the Silence spell, except as noted here.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Enchantment', 'Aura'], 3);

        $spell              = new Spell;
        $spell->name        = 'Aura of the Bear';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>All allies within range gain the benefits of the Bear's Endurance spell for as long as they start their turn within the Aura and for 1 round after leaving it.</p>";
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment', 'Aura'], 2);

        $spell              = new Spell;
        $spell->name        = 'Aura of the Bull';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>All allies within range gain the benefits of the Bull's Strength spell for as long as they start their turn within the Aura and for 1 round after leaving it.</p>";
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment', 'Aura'], 2);

        $spell              = new Spell;
        $spell->name        = "Aura of the Bull's Curse";
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>All enemies within range gain the penalties of the Bull's Hex spell for as long as they start their turn within the Aura and for 1 round after leaving it.</p>";
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment', 'Aura'], 2);

        $spell              = new Spell;
        $spell->name        = 'Aura of the Cat';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>All allies within range gain the benefits of the Cat's Grace spell for as long as they start their turn within the Aura and for 1 round after leaving it.</p>";
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment', 'Aura'], 2);

        $spell              = new Spell;
        $spell->name        = "Aura of the Cat's Curse";
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>All enemies within range gain the penalties of the Cat's Hex spell for as long as they start their turn within the Aura and for 1 round after leaving it.</p>";
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment', 'Aura'], 2);

        $spell              = new Spell;
        $spell->name        = 'Aura of the Eagle';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>All allies within range gain the benefits of the Eagle's Splendor spell for as long as they start their turn within the Aura and for 1 round after leaving it.</p>";
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment', 'Aura'], 2);

        $spell              = new Spell;
        $spell->name        = "Aura of the Eagle's Curse";
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>All enemies within range gain the penalties of the Eagle's Hex spell for as long as they start their turn within the Aura and for 1 round after leaving it.</p>";
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment', 'Aura'], 2);

        $spell              = new Spell;
        $spell->name        = 'Aura of the Fox';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>All allies within range gain the benefits of the Fox's Cunning spell for as long as they start their turn within the Aura and for 1 round after leaving it.</p>";
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment', 'Aura'], 2);

        $spell              = new Spell;
        $spell->name        = "Aura of the Fox's Curse";
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>All enemies within range gain the Penalties of the Fox's Hex spell for as long as they start their turn within the Aura and for 1 round after leaving it.</p>";
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment', 'Aura'], 2);

        $spell              = new Spell;
        $spell->name        = 'Aura of the Sun';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '10 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>By casting this spell, you fill the surrounding area with warm, glowing light that eliminates natural shadows and hampers magical darkness. Any creature attempting to cast a spell with Shadow or Darkness descriptor within an the area must succeed on a caster level check.</p>
<p>Areas of magical darkness originating from a 3rd-level spell or lower and effects are temporarily suppressed when over lapping with the area of this spell. Creatures that take penalties in bright light also take them while within the area of this spell, and an undead creature takes 1D6 Positive damage at the end of its turn every round that it spends within the spell's area. Furthermore, any creature attempting to hide within the aura takes a -3 penalty on Hide checks.</p>
<p>This effect is centered on you and moves with you. Anyone who enters the aura immediately becomes subject to its effect, but creatures that leave are no longer affected.</p>";
        $helper->addTypesToSpell($spell, ['Evocation', 'Light', 'Aura'], 4);

        $spell              = new Spell;
        $spell->name        = 'Aura of the Owl';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>All allies within range gain the benefits of the Owl's Wisdom spell for as long as they start their turn within the Aura and for 1 round after leaving it.</p>";
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment', 'Aura'], 2);

        $spell              = new Spell;
        $spell->name        = "Aura of the Owl's Curse";
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>All enemies within range gain the penalties of the Owl's Wisdom spell for as long as they start their turn within the Aura and for 1 round after leaving it.</p>";
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment', 'Aura'], 2);

        $spell              = new Spell;
        $spell->name        = 'Aura of Undeath';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>Negative energy emanates from you. Until the spell ends, whenever a humanoid dies within the radius, it raises as a zombie the next turn, similar to as if you had cast the spell Animate Dead. You can only raise one zombie per turn.</p>';
        $helper->addTypesToSpell($spell, ['Aura', 'Necromancy', 'Negative', 'Undead'], 5);

        $spell              = new Spell;
        $spell->name        = 'Aura of Vitality';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>Healing energy radiates from you. Until the spell ends, the aura moves with you, centered on you. You can use an Action to cause one creature in the aura (including you) to regain 2D6 Hit Points.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Aura', 'Enchantment', 'Positive'], 3);

        $spell              = new Spell;
        $spell->name        = 'Aura of War';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>An aura of battle confidence radiates from you. Until the spell ends, the aura moves with you, centered on you. Each non-hostile creature in the aura (including you) gains a +1 to Hit and +3 to Damage.</p>';
        $helper->addTypesToSpell($spell, ['Aura', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Aura of Will';
        $spell->casting     = 'Somatic Casting';
        $spell->area        = '30 ft radius';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>An aura that strengthens you and your allies will power radiates from you. Until the spell ends, all allies (including yourself) gains Advantage on all WIS and CHA Saves.</p>';
        $helper->addTypesToSpell($spell, ['Aura', 'Enchantment', 'Abjuration'], 3);

        $spell              = new Spell;
        $spell->name        = 'Avatar';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You transform into an avatar of your deity, assuming a Huge battle form. You must have space to expand or the spell is lost. You have hands in this battle form and can take Manipulate Actions. You can Dismiss this spell with an Action.</p>
<p>You gain the statistics based on your deity.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 10);

        $spell               = new Spell;
        $spell->name         = 'Awaken';
        $spell->casting      = '1 day (Material, Somatic, Verbal, Ability Damage, Secondary Casters)';
        $spell->range        = 'Touch';
        $spell->duration     = 'Instantaneous';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>3 CON damage</dd>
    <dt>Secondary Casters</dt> <dd>2 casters who must be of your religion</dd>
</dl>';
        $spell->description = "<p>After spending the casting time tracing magical pathways within a precious gemstone, you touch a Huge or smaller beast or plant. The target must have either no INT score or an INT of 3 or less. The target gains an INT of 10. The target also gains the ability to speak one language you know. If the target is a plant, it gains the ability to move its limbs, roots, vines, creepers, and so forth, and it gains senses similar to a human's. Your GM chooses statistics appropriate for the awakened plant, such as the statistics for the awakened shrub or the awakened tree.</p>
<p>The awakened beast or plant is charmed by you for 30 days or until you or your companions do anything harmful to it. When the charmed condition ends, the awakened creature chooses whether to remain friendly to you, based on how you treated it while it was charmed.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 5);
        $spell->skills()->save(app()->skills['Nature'], ['dc' => 10]);
        $spell->materials()->save(Material::where('name', 'Agate')->firstOrFail(), ['price' => '1,000 gp', 'meta' => 'Consumed']);

        $spell               = new Spell;
        $spell->name         = 'Awaken Undead';
        $spell->casting      = '1 minute (Material, Somatic, Verbal, Ability Damage)';
        $spell->range        = 'Touch';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>2 CON damage</dd>
</dl>';
        $spell->duration     = 'Permanent';
        $spell->description  = '<p>This spell grants Intelligence to mindless undead (such as skeletons and zombies). Undead with INT scores are unaffected. The mindless undead touched gains an INT score of 1D6 +4. Undead cannot have more INT than typical of their original kind.</p>
<blockquote>
    A skeletal dog has a max INT of 2, while a skeletal orc can have a max INT of 8.
</blockquote>
<p>While the undead does not regain any skills or feats that they may have had when alive, they do gain proficiency in Medium Armor and Martial Ranged and Melee Weapons.</p>
<p>Awaken undead gains a +2 bonus to their WIS Saves and a +2 bonus to resist being Turned, Destroyed, Rebuked, or Controlled (by others).</p>
<dl>
    <dt>Material Components</dt> <d>A humanoid finger bone</d>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may target an additional mindless undead</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead'], 6);

        $spell                = new Spell;
        $spell->name          = "Azuth's Exalted Triad";
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Azuth';
        $spell->targets       = 'Self';
        $spell->duration      = 'Instantaneous';
        $spell->description   = '<p>You alter one of your prepared spells so that you can cast it multiple times before it is expended.</p>
<p>The prepared spell must be of 3rd level or lower, and once this spell is cast, you may cast the altered spell two additional times (a total of three times) before it is expended.</p>
<p>The altered spell functions normally and requires any material components for each use as if you were casting three separate spells. If you later choose to prepare a different spell in that Spell Slot, any extra castings provided byt this spell are lost. You cannot cast this spell more than once upon a prepared spell.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 6);
    }
}
