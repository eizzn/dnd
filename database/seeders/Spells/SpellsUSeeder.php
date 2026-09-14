<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsUSeeder extends Seeder
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
        $spell->name        = 'U`Aestar`Kess';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'The 2 being to be linked. They must be touching while the spell is being cast';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>One Heart, One Mind, One Breath. Ritual of Solitude</p>
<p>This spell provides a creature and an elf with a mental link, not unlike the one shared among elves in communion. This link is permanently forged. Most often, this spell is used as a marriage rite, forging a bond between spounses, through it is not limited to pairs of elves. An animal mount and rider might form an empathic link that allows them to interact far more closely than two creatures (two elves, or animal and elf, or other pairings) normally could.</p>
<p>The link between the two creatures are permanent, and allows the linked elf or elves to ignore the Call to Arvandor for greater periods of time due to the communual nature of the link. The two creatures are partners, friends, lovers, or kindred in all but form; each knows when the other is in danger and will stop at little to render aid. This passive link is always semi-empathic, but with intense concentration. While all spells are assumed to have elf targets, this union  could easily be fromed for all races, linking dwarves or humans with elves. An elf can be have at most 2 of this kind of link in their lifetime, most often a spouse and a beast-mount such as a dragon.</p>';
        $helper->addTypesToSpell($spell, ['High Magic', 'Enchantment'], 5);

        $spell              = new Spell;
        $spell->name        = 'Uaul`Selu`Keryth';
        $spell->casting     = '1 week (Material, Somatic, Verbal, Secondary Casters, Ability Damage)';
        $spell->duration    = 'Everlasting';
        $spell->description = '<p>The Sundering, At War with the Weave. Ritual of Myriad.</p>
<p>Used only during situations most dire, the casters can harness the energy of the Weave to cause it to fluctuate across a great distance. In lesser forms, this spell disrupts all magic, animal stampedes, and tornadoes are common. In its ultimate form, the Weave is temporarily torn asunder, and the damage is made manifest in major cataclysms and storms, tidal waves, and permanent changes to the lands of any planet.</p>
<p>The exact working of this spell is lost to all but two High Mages on Toril; the Srinshee of Cormanthor is one. The long-lost Killing Storm magic is a byproduct of this calamitous spell, it is highly likely that all the High Mages involved will loss their life to the Ability Damage.</p>
<p>This spell has been invoked only once in the history of the elves on Faerun, and the ensuing cataclysms broke up large land masses to allow the creation of the isolated island of Evermeet. In crude effect, this is mimicked by earthquake and weather control spells.</p>
<dl>
    <dt>Secondary Casters</dt> <dd>11 other peer casters, all also casting this spell.</dd>
    <dt>Ability Damage</dt> <dd>30 CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['High Magic', 'Enchantment'], 11);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 40]);
        $spell->materials()->save(Material::where('name', 'Miscellaneous')->firstOrFail(), ['meta' => 'Unknown']);

        $spell                 = new Spell;
        $spell->name           = 'Unearthly Beauty';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'Self';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>As the spell Blinding Beauty, but at any time while the spell is in effect, you can evoke an additional effect as an Action. When you choose, any creature within 30 feet of you that is looking directly at you must succeed on a CHA Save or die.</p>
<p><strong>Abstinence Component</strong> You must abstain from sexual intercourse for one Month before casting this spell.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Exalted'], 8);

        $spell              = new Spell;
        $spell->name        = 'Undead Bane Weapon';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One Melee Weapon or up to 50 ammunition';
        $spell->duration    = '3 hours';
        $spell->description = '<p>The targeted weapon gains a +1 bonus to hit Undead and an additional +3D6 Positive energy damage against Undead for the duration. Ammunition weapons lose this bonus after being shot.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the bonus damage by +1D6</dd>
    <dt>Heightened (+1)</dt> <dd>Target an additional Melee Weapon or 50 ammunition</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell                = new Spell;
        $spell->name          = 'Undead Head';
        $spell->casting       = '1 minute (Somatic, Verbal, Material)';
        $spell->spell_creator = 'Hruggek';
        $spell->requirements  = '<dl>
    <dt>Secondary Casters</dt> <dd>3 (the secondary caster need not be spell casters, but must be skilled hunters)</dd>
</dl>';
        $spell->range         = 'Touch';
        $spell->targets       = 'Severed head touched';
        $spell->duration      = 'Instantaneous';
        $spell->description   = "<p>You animate a severed head as an undead thing. The head does not have any Movement Speed, so it is not able to move. It has the following abilities.</p>
<ul>
    <li>It can hear and speak. It learns the Ghukliak language (Goblin)</li>
    <li>It can remember all that it hears, and can act as a tribal memory, recounting the tribe's history.</li>
    <li>1/day, it can cast Bestow Curse, Heightened +2. It usually picks Disadvantage on attack rolls or the additional Necrotic damage</li>
    <li>The head can be asked questions regarding its past life. You may ask it questions as if you had cast Speak with Dead, but the head will only answer one question ever.</li>
    <li>Bugbears usually spike these heads on spikes. There, the heads can act as alarms for the tribe.</li>
    <li>While these heads are Undead, and can be turned or rebuked, they cannot move.</li>
</ul>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead', 'Goblin'], 1);

        $spell               = new Spell;
        $spell->name         = 'Undead Lieutenant';
        $spell->casting      = '30 minutes (Somatic, Verbal)';
        $spell->range        = 'Touch';
        $spell->targets      = 'Intelligent undead touched';
        $spell->duration     = '8 hours';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>1. Religion: 6, Arcana: 6</dd>
</dl>';
        $spell->description = "<p>Choose an intelligent undead that is under your control. It can now command a number of other undead that are already under your control equal to twice it's CHA modifier (min 2 total). The Target intelligent undead cannot command other intelligent undead or undead with a higher challenge rating.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>You can apply this ritual to an additional undead.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead', 'Ritual'], 6);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 15]);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 15]);

        $spell              = new Spell;
        $spell->name        = 'Undead Servant';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = '30 feet';
        $spell->rarity      = 'Rare';
        $spell->targets     = '1 body or skeleton';
        $spell->duration    = '3 hours';
        $spell->description = '<p>This spell allows you to temporarily animate the body or bones of a dead human, demihuman, or humanoid creature of man size or smaller. The animated creature is treated as a zombie or skeleton, as appropriate. The undead servant obeys simple verbal commands until destroyed, dispelled, or the spell duration ends. This skeleton has only 1 Hit Point and cannot make any attacks.</p>
<dl>
    <dt>Material Casting</dt> <dd>A pinch of graveyard dirt</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 1);

        $spell              = new Spell;
        $spell->name        = 'Undead to Death';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '50-foot burst. 120 foot range';
        $spell->targets     = 'Undead creatures in the area';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell snuffs out the life forces of undead creatures, putting them to their final rest.</p>
<p>This spell affects 20 Hit Dice of undead, those who are closest to the point of origin of the burst are affected first.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the maximum number of Hit Dice affected by +2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead'], 6);
        $spell->materials()->save(Material::where('name', 'Diamond')->firstOrFail(), [
            'price' => '500 gp',
            'meta'  => 'Crushed into a powder, which is not consumed',
        ]);

        $spell               = new Spell;
        $spell->name         = 'Undeath after Death';
        $spell->casting      = '24 hours (Material, Somatic, Verbal, Sacrifice, Secondary Casters)';
        $spell->range        = 'Touch';
        $spell->targets      = 'Creature touched';
        $spell->duration     = 'Until Triggered';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>5. Religion: 10, Arcana: 10</dd>
    <dt>Sacrifice</dt> <dd>6 CON damage</dd>
</dl>';
        $spell->description = "<p>You tear off a piece of a creature's life force, corrupt it with negative energy and the power of undeath, then bind it to its body to allow a blasphemous transformation should the creature later die.</p>
<p>When the subject dies, the corrupted life force begins a slow change in its body, causing it to animate as a crypt spawn at the next sunset. If its remains are destroyed, the undeath after death ritual cannot bring it back as an undead.</p>
<p>If the ritual is disjoined before the subject dies, it does not regain its lost CON points.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead', 'Ritual'], 7);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 25]);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 25]);
        $spell->materials()->save(Material::where('name', 'Obsidian')->firstOrFail(), ['meta' => "Shaped like a heart, which is placed on the subject's chest"]);
        $spell->materials()->save(Material::where('name', 'Onyx')->firstOrFail(), ['price' => '50 gp per HD of the subject creature at the time the spell is cast', 'meta' => "Placed in the subject's mouth"]);

        $spell              = new Spell;
        $spell->name        = "Undeath's Eternal Foe";
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature Touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You grant the Target special abilities against the undead.</p>
<ul>
    <li>Immunity to Negative Damage</li>
    <li>
        Immunity to special attacks from Undead that causes the following.
        <ul>
            <li>Ability Damage</li>
            <li>Ability Drain</li>
            <li>Disease</li>
            <li>Poison</li>
        </ul>
    </li>
    <li>You may make melee and ranged attacks against ethereal or incorporeal undead as if you had Ghost Touch</li>
    <li>You gain a +4 Deflection Bonus to AC against all attacks vs Undead.</li>
    <li>You gain a +5 Deflection Bonus to Damage Reduction against all attacks vs Undead.</li>
</ul>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Good'], 6);

        $spell              = new Spell;
        $spell->name        = 'Undersea Current';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '200 feet, 30-foot radius globe';
        $spell->targets     = 'Body of water within range';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>When this spell is cast, all affected creatures feel a current flow around them, moving them faster. They all move at 150% (round fractions up) of the Swim Speed of the fastest creature's Swim Speed. All those within the current must stay within a 30-foot radius, the fastest in the lead with all others swimming in their wake.</p>
<p>If this Speed, is more than twice an affected person's normal speed, such characters suffer a -6 DEX penalty against dodging any obstacles while under the effects of this current. If the lead swimmer stops moving, the current ends permanently, but any other person under its effects can cancel its effect merely by swimming outside the area of effect. The maximum number of characters affected is equal to 10.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 3);

        $spell              = new Spell;
        $spell->name        = 'Undersong';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>When you cast this spell, a familiar and soothing song wells up in your mind. The song does not distract you from any task, on the contrary, by humming along to the tune you can focus your mind with ease.</p>
<p>As long as this spell is in effect, you can use your Perform skill check to replace any Concentration check. You must decide which skill to use before any check is made.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 0);

        $spell                = new Spell;
        $spell->name          = 'Understand Device';
        $spell->casting       = '1 minute (Somatic, Verbal)';
        $spell->spell_creator = 'Gond';
        $spell->targets       = 'Self';
        $spell->duration      = '10 minutes';
        $spell->description   = '<p>You gain an intuitive insight into the weaknesses and flaws of mechanical objects. You gain the following.</p>
<ul>
    <li>You are able to know the basic purpose of a mechanical device (not magical abilities), what it is able to do. This reveals any mechanical traps connected to the device, or if the device itself is one elaborate trap. It does not reveal any magical traps.</li>
    <li>You can make Untrained Disable Device checks as if you had 1 rank in the skill. If you already have that skill, you gain a +4 Competence bonus to the check</li>
    <li>If the device is a Construct, you gain a +4 Competence Bonus to hit, ignore any Damage Reduction, and deal an additional +10 Damage to any Melee Weapon or Ranged Weapon attack you make.</li>
</ul>';
        $spell->heightened    = "<dl>
    <dt>Heightened (+3)</dt> <dd>You learn the formula for creating the device (GM's discretion)</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 2);

        $spell              = new Spell;
        $spell->name        = 'Undetectable Alignment';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature or object';
        $spell->duration    = '24 Hours';
        $spell->rarity      = 'Rare';
        $spell->description = '<p>The target registers as neutral to all effects that would detect its alignment.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 2);

        $spell               = new Spell;
        $spell->name         = 'Unheavened';
        $spell->casting      = 'Somatic Casting, Verbal Casting, Drug';
        $spell->requirements = '<dl>
    <dt>Drug</dt> <dd>The Target must use an Action must be used to take the drug Vodare</dd>
</dl>';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature Touched';
        $spell->duration    = 'While the Drugs effect lasts';
        $spell->description = "<p>Powered by the drug's effects, the Target gains the following</p>
<ul>
    <li>+4 Profane Bonus to all Saves vs Spells with the Good Type or from casters with the Good Type.</li>
</ul>
<p>This protection manifests as a black and red nimbus of energy visible around the Target. All celestial beings can identify an Unheavened numbus on sight.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Evil'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Unholy Aura';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '20-foot radius burst centered on you';
        $spell->targets        = 'Creature touched';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>A random pattern of colors surrounds the target, granting the following effects.</p>
<ul>
    <li>+3 Deflection Bonus to AC</li>
    <li>+3 Divine Bonus to all Saves</li>
    <li>You are treated as having the Improved Evasion feat against all spells cast by Good outsiders and all spell effects that are from a Good source.</li>
    <li>Protection from Possession and Mental Influence</li>
    <li>If a Good creature succeeds on a Melee attack against the target of the Unholy Aura, the Good creature takes 1D6 STR damage, STR Save negates.</li>
</ul>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The Good creature is not Confused</dd>
    <dt>Failure</dt> <dd>The Good creature is Confused</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Evil'], 7);
        $spell->materials()->save(Material::where('name', 'Reliquary')->firstOrFail(), ['price' => '500 gp']);

        $spell                 = new Spell;
        $spell->name           = 'Unholy Beast';
        $spell->casting        = 'Somatic Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '30 feet';
        $spell->targets        = 'One animal of 4 HD or less';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>When you cast this spell, the Target animal temporarily transforms into a being of evil, serving you for the Duration. The animal gains the following</p>
<ul>
    <li>Limbs and face contorts, sprouting tusks and its eyes turn black</li>
    <li>+2 to STR, DEX, and CON</li>
    <li>+2 to Damage Reduction</li>
    <li>The animals Natural Attacks all deal an additional die of damage.</li>
</ul>
<p>The Target serves you as if it were your Animal Companion for the Duration.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Affected</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
    <dd>Heightened (+1)</dd> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Evil'], 4);

        $spell              = new Spell;
        $spell->name        = 'Unicorn Stead';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = '3 miles';
        $spell->targets     = 'One unicorn within range';
        $spell->duration    = '24 hours';
        $spell->description = "<p>This spell calls a unicorn (or compels one already present) to serve you as a steed for one day. This spell affects an individual unicorn only once in their lifetime. Thereafter, it can feel the 'pull' of this spell and may choose to obey of its own volition. In this case, you are unaware that it is free to abandon such service at any time.</p>
<p>A unicorn steed will fight for and with you, carry you (and an amount of equipment equal to its weight), but no other creature, and even teleport with you. The spell creates a special sort of limited telepathy between the unicorn and you, so that each is aware of the other's intent and mental state.</p>
<p>A unicorn will not intentionally harm you. Those who misuse their steeds or send them into danger (as opposed to riding with them into danger) may find Mielikki or one of her servants breaking the spell before its normal expiration. Mielikki would never allow a creature who is not one of her faithful worshippers to successfully gain the use of this spell (even by reading it from a scroll).</p>
<dl>
    <dt>Material Components</dt> <dd>Three hairs from the mane or tail of a unicorn</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling'], 3);

        $spell              = new Spell;
        $spell->name        = 'Unluck';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One creature within Range';
        $spell->duration    = '1 minute';
        $spell->description = '<p>The Target suffers Disadvantage on all Attacks for the Duration</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Unseen Thief';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = '1 minute';
        $spell->description = "<p>An invisible force, not unlike the product of an Unseen Servant spell, comes into being where you wish. On your turn, as an Action, you may direct it to steal objects from others. The invisible thief can steal an object from a creature or can pick up an unattended object as long as it weighs no more than 10 lbs. It cannot break into locked chests. The thief has a Hide modifier and a Move Silently modifier both equal to your caster level.</p>
<p>If the thief goes undetected, it can steal any object a creature possesses but is not holding or wearing. Even objects inside a Bag of Holding can be stolen. It can steal objects, bring objects to you, or put them back where they came from. It can take no Actions. The thief needs 2 Actions to steal an object.</p>
<p>The thief can hold only object at a time, and the object becomes invisible in its grasp. The thief cannot take an item if it is detected by the creature it is trying to steal from.</p>
<p>The thief cannot be harmed in any way, but it can be Dispelled.</p>
<p>The thief can steal an object from a creature's hand by making a Successful Disarm attempt. It does so with a bonus on the Disarm check equal to your Caster Level. If the thief is used in this way, this spell ends after it brings the stolen object to you.</p>
<dl>
    <dt>Material Components</dt> <dd>A spool of green thread</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Conjuration'], 5);

        $spell              = new Spell;
        $spell->name        = 'Unmovable';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You bind yourself to the earth, making yourself unmovable so long as you are in contact with the earth. While this spell is active, you gain the following.</p>
<ul>
    <li>+2 STR</li>
    <li>+4 CON</li>
    <li>+4 Damage Reduction</li>
    <li>+10 Bonus to resist Bull Rush and Trip Attacks, but not to make Trip Attacks.</li>
    <li>+10 Resistance Bonus to any attempt to move you from your current position</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Earth', 'Transmutation'], 3);

        $spell              = new Spell;
        $spell->name        = 'Unseen Crafter';
        $spell->casting     = '1 minute (Somatic Casting, Verbal Casting)';
        $spell->range       = '30 feet';
        $spell->duration    = '1 day';
        $spell->description = '<p>This spell functions as Unseen Servant, except that the servant can be assigned any one task that can be accomplished by use of the Craft spell. Appropriate tools and materials must be provided for the servant. It makes Craft checks at half your ranks plus your Caster Level.</p>
<p>The servant can take 11. Once the servant completes his task, or the Duration ends, the spell ends.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 2);

        $spell                = new Spell;
        $spell->name          = 'Unseen Servant';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range         = '60 miles';
        $spell->spell_creator = 'Carbury';
        $spell->duration      = 'Concentration, up to 1 hour or until dismissed';
        $spell->description   = '<p>You summon an unseen servant, which you can command as an Action. It serves you until the Duration expires; until its Hit Points drop to 0 or below, at which point the spell is dismissed; or until you lose Concentration. The unseen servant gains the summoned trait.</p>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+1)</dt> <dd>The unseen servant can also cook and clean</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+3)</dt> <dd>You create 5 servants</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 1);

        $spell              = new Spell;
        $spell->name        = 'Updraft';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell causes rushing air propel you upward 30 feet into the air.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the height</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 1);
    }
}
