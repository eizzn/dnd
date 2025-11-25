<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsGSeeder extends Seeder
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
        $spell->name        = 'Gaseous Form';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>The Target transforms into a vaporous state. In this state, the Target is amorphous and loses any item bonus to AC. It gains resistancence 8 to physical damage and is immune to precision damage. It can\'t cast spells or use Actions that have the Attack or Manipulate trait. It gains a Fly Speed of 10 feet, and can slip through tiny cracks.</p>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation'], 3);

        $spell               = new Spell;
        $spell->name         = 'Gate';
        $spell->casting      = '1 minute (Somatic, Verbal, Secondary Caster)';
        $spell->range        = '120 feet';
        $spell->requirements = '<dl>
    <dt>Feats</dt> <dd>Master Conjurer Feat</dd>
    <dt>Secondary Caster</dt> <dd>1 Secondary Caster who must have the Expert Conjurer Feat</dd>
</dl>';
        $spell->duration     = 'Concentration, up to 1 minute';
        $spell->description  = '<p>You tear open a rift to another plane, creating a portal that creatures can use to travel both ways for the duration.</p>
<p>This portal is vertical and circular, with a radius of 40 feet. The gate appears at a location of your choice on the destination plane, assuming you have a clear idea of both the destination’s location on the plane and what the destination looks like. If you attempt to create a gate into or out of the realm of deity or another powerful being, that being can prevent the gate from forming.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Portal'], 10);

        $spell              = new Spell;
        $spell->name        = 'Gate Seal';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = '30 feet';
        $spell->targets     = 'One gate or portal';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>You permanently seal a Gate or Portal. Gate seal prevents any activation of the Gate or Portal, thought the seal may be negated by a successful Dispel Magic spell cast on the Gate or Portal.</p>
<dl>
    <dt>Material Components</dt> <dd>A silver bar worth 50 gp</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Portal'], 6);

        $spell              = new Spell;
        $spell->name        = 'Gaze Screen';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One living creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You create a mirror-like area around the targets eyes. This effect moves with the Target and does not affect their vision. If the Target is subjected to a Gaze, there is a 50% chance that the mirror screens the gaze attack so that it has no effect.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
    <dt>Heightened (+2)</dt> <dd>The chance for the screen to block the Gaze attack is 100%</dd>
    <dt>Heightened (+2)</dt> <dd>If this spell succeeds in avoiding the Gaze attack, the Gaze attack is reflected back at the source.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 1);

        $spell               = new Spell;
        $spell->name         = 'Geas';
        $spell->casting      = '1 day (Somatic, Verbal, Ability Damage, Secondary Caster)';
        $spell->range        = '10 feet';
        $spell->targets      = "One creature of a level no greater than twice this spell's level plus 1";
        $spell->duration     = 'See text';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>1 Secondary Caster of the same faith as the caster who must cast Bless</dd>
    <dt>Ability Damage</dt> <dd>1 CON damage</dd>
</dl>';
        $spell->description = '<p>You enforce a magic rule on a willing target, forcing it to either carry out or refrain from carrying out a certain act.</p>
<p>A Geas to perform an act is usually conditional, such as, “Always offer hospitality to strangers seeking a place to stay.” An unconditional geas to perform a certain act doesn’t require the Target to perform that act exclusively, though it must prioritize the task above all leisure pursuits.</p>
<p>The most common geas to refrain from carrying out an act is a geas to avoid violating a contract, and in those cases, the secondary caster usually takes charge of making sure the wording of the contract attunes correctly with the magic. Because the Target is willing, geas can have a duration that lasts for as long as the Target agrees to.</p>
<p>If the Target is unable to fulfill the Geas, it gains Sick: 1, and the sick condition increases by 1 for each consecutive day it is prevented from following the Geas, to a maximum of Sick: 4. The Sick condition ends immediately when it follows the Geas again; it can’t remove the Sick condition in any other way. Only powerful magic like Wish can remove a willing Geas.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>You can use geas on an unwilling creature; it receives a WIS Save to negate the effect. If you do, the Geas lasts up to 1 week. Remove Curse can dispel Geas on an unwilling creature, in addition to powerful magic like Wish. A clever unwilling creature can subvert the Geas by contriving situations that prevent it from complying, but in that case it becomes sick (as described above).</dd>
    <dt>Heightened (+4)</dt> <dd>As the +2 heightened, but the geas lasts for up to 1 year on an unwilling creature.</dd>
    <dt>Heightened (+6)</dt> <dd>As the +2 heightened, but the geas lasts for any duration (or is even permanent) on an unwilling creature.</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>The geas fails, and you are instead affected by the geas you were attempting to place on the target</dd>
    <dt>Success</dt> <dd>The Geas fails</dd>
    <dt>Failure</dt> <dd>The Geas succeeds</dd>
    <dt>Critical Failure</dt> <dd>The Geas succeeds and the Target receives a +1 conditional bonus to skill checks that directly uphold the Geas</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment', 'Necromancy', 'Mental', 'Ritual'], 3);

        $spell               = new Spell;
        $spell->name         = 'Gem Tracer';
        $spell->casting      = '1 minute (Material, Somatic Casting, Verbal Casting, Ability Damage)';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>1 STR damage</dd>
</dl>';
        $spell->rarity       = 'Rare';
        $spell->range        = 'Touch';
        $spell->targets      = 'One object touched';
        $spell->duration     = 'Permanent';
        $spell->description  = '<p>You rub a gem over a target, causing an image of the Target to gradually materialize in the depths of the gem. The image then becomes perfectly clear and then vanishes, leaving no trace of the spell on either the gem or the target. You create a permanent link between the gem and the object. Anyone who holds the gem can scry the bearer of the object (as the Scry Spell) as an Action. The bearer of the object is entitled to a WIS Save, but is treated as Familiar to the holder of the gem (as if you also had a lock of their hair).</p>
<p>According to draconic legend, this spell was created by the first dragons whose hoard was plundered.</p>
<dl>
    <dt>Material Components</dt> <dd>A gem worth at least 100 gp</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Gembomb';
        $spell->casting        = 'Material Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = 'Touch';
        $spell->targets        = 'Up to 5 touched gems';
        $spell->duration       = '1 hour';
        $spell->description    = '<p>You turn up to five gems into bombs you (and only you) can lob at enemies. As an Action, you may make a Ranged Touch Attack by throwing a gem at a Target up to 30 feet with a Range Increment of 20 feet.</p>
<p>Each gem deals 1D8 Force damage.</p>
<dl>
    <dt>Material Components</dt> <dd>Up to 5 gems worth at least 1 gp each.</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Attack', 'Ranged'], 2);

        $spell               = new Spell;
        $spell->name         = 'General of the Undead';
        $spell->casting      = '12 hour (Somatic, Verbal)';
        $spell->targets      = 'Self';
        $spell->duration     = '24 Hours';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>3 CON damage</dd>
    <dt>Secondary Casters</dt> <dd>1 Religion: 8, Arcana: 8</dd>
</dl>';
        $spell->description = '<p>You increase the number of Undead you can control.</p>
<p>All spells that can create or control undead (ie Animate Dead, Create Undead) is 4 times more effective.</p>
<blockquote>
    Ex. At the base spell slot, Animate Dead can control 4 undead creatures. After this ritual, it can control 16.
</blockquote>
<p>You may sacrifice the Spell Slot used to cast this spell to renew the duration of this spell. You must suffer the Ability Damage again and successfully make all the required Skill Checks also. You do not need the Secondary casters to maintain this spell.</p>
<p>If you are an undead (such as a lich), you do not suffer the ability damage. Instead, you lose 30 Hit Points.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead', 'Ritual'], 8);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 28]);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 28]);

        $spell               = new Spell;
        $spell->name         = 'Genesis';
        $spell->casting      = '1 week (8 hours/day) (Somatic, Ability Damage, Secondary Casters)';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 2 others who must cast Ectoplasmic Web</dd>
    <dt>Ability Damage</dt> <dd>10 CON Damage</dd>
</dl>';
        $spell->range        = '180 feet';
        $spell->duration     = 'Instantaneous';
        $spell->description  = '<p>You create an immobile, finite plane with limited access - a demiplane. Demiplanes created by this spell are very small, very minor planes. You can cast this spell only on the Ethereal Plane. When you cast it, a local density fluctuation precipitates the creation of the demiplane. At first, the demiplane grows at a rate of 1-foot radius per day to the initial maximum radius of 180 feet as the fledgling plane rapidly draws substance from surrounding Ectoplasm.</p>
<p>You determine the environment in the demiplane when you first cast this spell, reflecting most any desire you can visualize. You determine factors such as atmosphere, water, temperature, and the shape of the general terrain. The spell does not create life (such as vegetation) nor can it create construction (such as buildings, bridges, etc)</p>
<p>You may cast this spell again to expand an existing demiplane by another 180 feet in all directions.</p>';
        $helper->addTypesToSpell($spell, [], 10);

        $spell              = new Spell;
        $spell->name        = 'Gentle Repose';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One corpse';
        $spell->duration    = '24 Hours';
        $spell->description = "<p>The corpse doesn't decay, nor can it be transformed into an undead. Time spent under the effect of this spell doesn't count when determining the success of spells that require a fresh corpse.</p>";
        $spell->heightened  = "<dl>
    <dt>Heightened (+3)</dt> <dd>The spell's duration is permanent, but you must add a Material Casting Action with 6gp worth of embalming fluids.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Necromancy'], 2);

        $spell               = new Spell;
        $spell->name         = 'Ghaatiil';
        $spell->casting      = '3 hours (Somatic, Verbal)';
        $spell->duration     = 'Permanent';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>Two casters each cast the Vuorl`kyshuf spell, and while a third caster maintains the link, one of the first casters casts a Gate spell. One-way portals require a fourth caster.</dd>
</dl>';
        $spell->description = "<p>The Traveling Path. Ritual of Complement</p>
<p>This spell establishes a permanent Portal at the sites of the casters. This spell establishes many strictures over its Portal's use by type (race, occupation, or status) but often set the portal to activateonly in the presence of a key (anything from a physical key to a lock of golden hair or the sound of a whistled tune), although it is not required to have any restrictions on the Portal's usage.</p>
<p>One-way portals can be created with this spell, though this becomes a spell for four casters. One caster performs the standard portal construction, while the other three mentally corroborate each others' knowledge of the portal's exit point. The exit must be a place physically visited by at least three of the casters.</p>
<p>After two casters individually casts the Vuol`kyshuf spell to allow communication across great distances. A third caster maintains this link during the casting of this spell. All three unite in this spells casting to link two sites with a portal, setting its operating conditions during the casting. Visually, each caster is surrounded by a light mist, as each performs the casting, they are joined by a ghostly apparition of the counterpart casters at the other site. The casting ends when the lead caster casts a Gate spell to join the two sites. One caster must be present at each site of the portal.</p>";
        $helper->addTypesToSpell($spell, ['High Magic', 'Enchantment', 'Portal'], 9);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 35]);

        $spell              = new Spell;
        $spell->name        = 'Ghost Form';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You assume a visible, incorporeal form like that of a manifesting ghost. You gain the Incorporeal subtype for the duration of the spell. You also gain the following.</p>
<ul>
    <li>You have no physical body while in this state. You can be harmed only by other Incorporeal creatures, and weapons and spells that are Ghost Touched. Non-damaging spell effects affect you normally unless they require corporeal targets to function or they create a corporeal effect that incorporeal creatures would normally be unaffected by (such as Web or Wall of Stone).</li>
    <li>Your attacks while in Ghost form has no effect on corporeal targets (Force effects work normally). Spells you cast while in Ghost form affect corporeal targets normally, including spells that require you to make an attack roll.</li>
    <li>Any equipment you are wearing or carrying also become incorporeal as long as it remains in your possession. An object that you relinquish loses its incorporeal quality (and you lose the ability to manipulate the object). If you use a thrown weapon or a ranged weapon, the projectile becomes corporeal as soon as it is fired and can affect corporeal targets normally.</li>
    <li>As an incorporeal creature, you have no Natural Armor bonus, but you do gain a Deflection bonus equal to your CHA bonus (always at least +1).</li>
    <li>You cannot fall or take falling damage. You cannot make Trip or Grapple attacks, nor can you be Tripped or Grappled. In fact, you cannot take any physical Action that would move or manipulate an opponent or its equipment, nor are you subject to such Actions. You have no weight while in Ghost form and do not set off traps that are triggered by physical mass.</li>
    <li>You move silently and cannot be heard if you do not wish to be while in Ghost form. You have no STR score while incorporeal, so your DEX modifier applies to both your Melee Attacks and Range Attacks. Non-visual senses, such as Scent and Blindsight, are either ineffective or only partly effective in regard to you. You have an innate sense of direction and can move at full speed even when you cannot see.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 7);

        $spell              = new Spell;
        $spell->name        = 'Ghost Lantern';
        $spell->casting     = 'Material Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Object touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>This spell causes an object to glow like a torch, shedding bright illumination out in a 20-foot radius (and shadowy illumination out to additional 20 feet) from the point you touch. Unlike normal Light spells, this light is only visible to you and up to 5 other creatures. Effectively, this spell allows you and your chosen companions to see in the dark.</p>
<dl>
    <dt>Material Components</dt> <dd>A bit of phosphorescent fungus.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Light'], 3);

        $spell              = new Spell;
        $spell->name        = 'Ghost Pipes';
        $spell->casting     = 'Material Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One musical instrument';
        $spell->duration    = '1 minute';
        $spell->description = '<p>By means of this spell, you can cause one musical instrument you touch to float a few feet above the ground and play itself. The instrument must be intact and in playable condition (no missing strings, clogged mouthpieces, or other implements to proper use). The instrument plays any tune you desire as though a skilled musician were playing it, regardless of whether you can play the instrument in question. If used in conjunction with your bardic music ability, the Ghost Pipes grant a +2 competence bonus on your Perform check.</p>
<dl>
    <dt>Material Components</dt> <dd>The instrument to be played.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Ghost Sound';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = 'Concentration';
        $spell->description = '<p>You create simple sounds up to a maximum volume of four normal humans shouting, emanating from a square you designate within range. You can’t create intelligible words or other intricate sounds.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+3)</dt> <dd>The range increases to 60 feet</dd>
    <dt>Heightened (+5)</dt> <dd>The range increases to 120 feet</dd>
    <dt>Permanency (Requires a 5th Level Spell Slot)</dt> <dd>2,500 gp. 2 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Auditory', 'Illusion', 'Figment', 'Permanency'], 0);

        $spell              = new Spell;
        $spell->name        = 'Ghost Touch';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Weapon touched';
        $spell->duration    = '3 hours';
        $spell->description = "<p>You give an object Ghost Touch property.</p>
<ul>
    <li>If placed on armor, that armor's AC bonus applies against Incorporeal attacks and the armor provides an additional +2 bonus to AC against Incorporeal or Ectoplasmic attacks</li>
    <li>If placed on a weapon, that weapon gains a +2 bonus to hit Incorporeal and Ectoplasmic creatures and deals an additional 2D6 Force damage on a hit.</li>
</ul>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Ghost Trap';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '60-foot radius emanation centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = '30 minutes';
        $spell->description = '<p>You create a field of energy that locks the Ethereal Plane from the plane you are currently on and has the following effects.</p>
<ul>
    <li>When the spell is cast, all Incorporeal creatures in the area become Corporeal</li>
    <li>Creatures cannot become Ethereal</li>
    <li>Ethereal creatures Materialize</li>
    <li>Spells that depend on calling Ectoplasm cannot do so, as access to the Ethereal Plane is blocked off.</li>
</ul>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Area</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Abjuration', 'Ectoplasm'], 5);

        $spell              = new Spell;
        $spell->name        = 'Ghostharp';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->duration    = '1 hour';
        $spell->description = "<p>You prepare an object that records and replays a song, previously played or sung in its vicinity. When cast, the spell searches a radius of 50 feet for the lingering notes of a tune played there within the past 24 hours. It records these notes and reverberations. If multiple songs have been played at that spot, this spell recalls the song the most recently played, starting with the beginning of the piece recalled. At your verbal command, this spell replays the music. The tune repeats until you command it to stop, or until the spell's duration comes to an end.</p>
<p>This spell does not record conversation. It's imperfect replay can't reproduce bardic music or other magical effects, nor can it cast spells.</p>
<dl>
    <dt>Material Components</dt> <dd>A musical instrument that will play the recalled music</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Divination', 'Auditory', 'Ritual'], 1);

        $spell              = new Spell;
        $spell->name        = 'Giant Form';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>When you cast this spell, you take on the form of an Ogre.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>You can take on the form of an Ettin, Hill Giant or a Stone Giant</dd>
    <dt>Heightened (+3)</dt> <dd>You can take on the form of a Frost Giant or Fire Giant</dd>
    <dt>Heightened (+4)</dt> <dd>You can take on the form of a Cloud Giant</dd>
    <dt>Heightened (+5)</dt> <dd>You can take on the form of a Storm Giant</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Ghoul Gauntlet';
        $spell->casting        = 'Somatic Casting, Verbal Casting, Ability Damage';
        $spell->requirements   = '<dl>
    <dt>Ability Damage</dt> <dd>1 CON Damage</dd>
</dl>';
        $spell->save_attribute = 'CON';
        $spell->range          = 'Touch';
        $spell->targets        = 'One living creature touched';
        $spell->duration       = '1 round';
        $spell->description    = '<p>Your hand glows as if you are wearing a black lit transparent black gauntlet. Until the beginning of your next turn, touching a creature with the gauntlet forces the creature to make a CON Save. On a Failure, the creature is cursed. On each of their turns, they take 3D4 Negative damage. If the creature dies do to this damage, they will rise again as a Ghoul at the first night.</p>
<p>Remove Disease, Remove Curse, Heal, Restoration, Disjunction, Limited Wish, Wish, and Miracle can remove this curse if cast before the creature dies.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not Affected</dd>
    <dt>Failure</dt> <dd>Affected</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead', 'Evil', 'Curse'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Ghoul Touch';
        $spell->casting        = 'Material Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = 'Touch';
        $spell->targets        = 'Living humanoid touched';
        $spell->duration       = '5 rounds';
        $spell->description    = "<p>You imbue your hand with Negative energy, allowing you to make Melee Touch attacks until the start of your next turn. Any creature you successfully touch must make a CON Save or be Paralyzed. On the following turn, the affected creature exudes a carrion stench that causes all living creatures (including yourself) that starts their turn within a 10-foot radius of the Paralyzed creature to make a CON Save or be Sickened.</p>
<p>A Neutralize Poison spell removes the effect from a Sickened creature. Creatures immune to Poison are not Sickened.</p>
<dl>
    <dt>Material Component</dt> <dd>A small scrap of cloth taken from clothing worn by a ghoul, or a pinch of dirt taken from a ghoul's lair.</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>If targeted by the touch attack, then Paralyzed. If starting their turn within the stench radius of the Paralyzed creature, then Sickened.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Attack', 'Melee'], 2);

        $spell              = new Spell;
        $spell->name        = 'Giant Vermin';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'Up to three vermin, no two of which can be more than 30 ft apart';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You turn 3 normal-sized centipedes, 2 normal-sized spiders, or a single normal-sized scorpion into size Large. Only one type of vermin can be transmuted.</p>
<p>The affected vermin do not attack you, and you can, as an Action give simple commands (Attack, Defend, Stop, etc). Orders to attack a certain creature is too complicated for the vermin to understand, they would simply attack the closest creature.</p>
<p>The DM could allow this spell to affect more kinds of insects (such as Ants, Bees, Beetles, Praying Mantis, Wasps, etc).</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+1)</dt> <dd>You may Target an additional vermin</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Glassee';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator  = 'Trobriand';
        $spell->rarity         = 'Rare';
        $spell->range          = '30 feet';
        $spell->targets        = 'One nonmagical stone or metal object of 20 cu ft';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Permanent';
        $spell->description    = '<p>This spell gives the Target object the transparency of glass.</p>
<p>If the object is attended, its owner receives a Save. Unattended nonmagical objects do not receive Saves.</p>
<dl>
    <dt>Material Components</dt> <dd>Glass silver</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the maximum volume that can be affecred.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 6);

        $spell              = new Spell;
        $spell->name        = 'Glibness';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 hour';
        $spell->description = '<p>Until the spell ends, when you make a CHA check, you can replace the number you roll with a 15. Additionally, no matter what you say, magic that would determine if you are telling the truth indicates that you are being truthful.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Glitterdust';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '10-foot burst. 120 foot range';
        $spell->save_attribute = 'DEX';
        $spell->spell_creator  = 'Fahren';
        $spell->duration       = 'Based on Save (see text)';
        $spell->description    = '<p>Creatures in the area are outlined by glittering dust, with an effect depending on their Save results. If a creature has its invisibility negated by this spell, it is concealed instead of invisible. This applies both if the creature was already invisible and if it benefits form new invisibility effects before the invisibility is negated for 1 round.</p>';
        $spell->saves          = "<dl>
    <dt>Critical Success</dt> <dd>The Target is unaffected</dd>
    <dt>Success</dt> <dd>The target's invisibility is negated for 1 round</dd>
    <dt>Failure</dt> <dd>The Target is dazzled for 1 minute and its invisibility is negated for 1 minute</dd>
    <dt>Critical Failure</dt> <dd>The Target is blinded for 1 round and dazzled for 1 minute. Its invisibility is negated for 1 minute</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Conjuration'], 2);

        $spell              = new Spell;
        $spell->name        = 'Globe of Invulnerability';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '10-foot burst centered on one corner of your space';
        $spell->duration    = '1 minute';
        $spell->rarity      = 'Rare';
        $spell->description = '<p>You create an immobile globe around you that attempts to dispel any spell from outside the globe whose area or targets enter into the globe, as if the globe were a dispel magic spell 1 level lower than its actual spell level.</p>
<p>Even if the dispel attempt succeeds, it prevents only the portion of the spell that would have entered the globe (so if the spell also had targets outside the globe or part of its area were beyond the globe, those targets or area would still be affected normally). You must form the sphere in an unbroken open space so its edges don’t pass through any creatures or objects or the spell is lost (though creatures can enter the area afterward normally).</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Gloom';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '300 feet. 120 ft emanation';
        $spell->duration    = '30 minutes';
        $spell->description = '<p>This spell weakens light sources of any kind in the area of effect. Magical Light from a higher level spell is not affected by this spell. Light equal to daylight in brightness or intensity (including Continual Flame) is reduced to a deep twilight gloom. Torches and magical weapons illuminate only a 5-foot radius, and lamps, lanterns, and other magical light sources illuminate only a 10-foot radius. The spell covers a 120-foot radius and can be made mobile if cast on an object.</p>
<p>Light-based combat penalties for creatures of darkness are negated within the area of effect, and monsters that cannot abide the touch of daylight (vampires, for instance) are fully capable of acting under the veil of gloom. Light-based Spells and combat effects are halved in effect when conducted under the effects of this spell (if a Light-based spell were to deal damage while in the area of effect of this Spell, then the damage is half).</p>
<dl>
    <dt>Material Components</dt> <dd>A special incense prepared by the caster</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Darkness'], 4);

        $spell              = new Spell;
        $spell->name        = 'Glorious Raiment';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Robe, garment, or outfit touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You imbue a robe, priestly garment, or outfit of regular clothing with divine power. The spell bestows the following effects for its duration.</p>
<ul>
    <li>+3 Sacred bonus to AC</li>
    <li>Damage Resistance vs all damage with the Evil type or Physical attacks from creatures with the Evil type</li>
    <li>Light as a Torch</li>
</ul>
<p>Only a good-aligned creature gains the benefits of this spell. Creatures of non-good alignment can wear the enchantment clothes, but gains no benefits.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Good'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Glossolalia';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'INT';
        $spell->range          = '60 feet';
        $spell->area           = 'Cone-shaped burst from your location';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You utter shrieks of nonsense and gibberish that thinking creatures find distracting and confusion. The spell affects only creatures with INT scores of 2 or higher. Any such creature within the spell's area must make a INT Save or suffer the following</p>
<table>
    <thead>
        <tr>
            <th>INT</th>
            <th>Effect</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>20+</td>
            <dt>Stunned: 1</dt>
        </tr>
        <tr>
            <td>10 - 19</td>
            <dt>Dazed: 1</dt>
        </tr>
        <tr>
            <td>2 - 9</td>
            <dt>Shaken: 1</dt>
        </tr>
    </tbody>
</table>
<p>In addition, a creature within the spell's area loses any Psionic Focus they might have and suffer a -4 penalty to gain Psionic Focus for the next 2 rounds.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Lose Psionic Focus and suffer -4 penalty to become Psionically Focused for hte next 2 rounds</dd>
    <dt>Failure</dt> <dd>As Success and the effect that applies from the table</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Auditory', 'Mental'], 2);

        $spell              = new Spell;
        $spell->name        = 'Glowing Orb';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One glass orb touched';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>You place a magical light source inside a orb sphere roughly the size of a human fist. By Attuning to the newly enchanted orb, you can, as an Action, control the light level generated by the orb as long as it is within 30 feet of you. The orb can provide anywhere from no light to illumination within a 60-foot radius. You can create as many of these as you wish.</p>
<p>if a glowing orb is smashed, the magic is lost. If you die, however, an orb can be Attuned to anyone else.</p>
<dl>
    <dt>Material Components</dt> <dd>A glass sphere (50 gp) into which the light is placed. An orb usable for this purpose has Hardness 0 and 2 Hit Points.</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+3, 2 CON Damage)</dt> <dd>You may create an orb that is Attuned to you but does not count against your maximum number of Attuned items limit. These orbs lose their magic if you should die.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 3);

        $spell              = new Spell;
        $spell->name        = 'Glue';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Small object weighing less than 5 lbs, and a larger object';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell affixes one item weighing up to 5 pounds to another, heavier item. The two items can be separated with even a small amount of force, such as a gust of wind stronger than 10 mph, a Mage Hand, or Unseen Servant spell, or a Move Action by any corporeal creature (which provokes Attacks of Opportunity)</p>
<dl>
    <dt>Material Components</dt> <dd>A bit of glue</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell                = new Spell;
        $spell->name          = 'Glyph of Revealing';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Deneir';
        $spell->range         = '0';
        $spell->duration      = '3 hours';
        $spell->description   = '<p>To enact this magic, the priest draws a special glyph on any relatively horizontal surface (including a shield held out horizontally or the instep of a boot) with a special ink. When the glyph of revealing is complete, it glows and then vanishes, but it subsequently causes all dweomers within a 120-foot-di- ameter sphere of itself to glow with a clear white radiance the same bright- ness as faerie fire. The outlines of magically hidden inscriptions, invisible wizard marks, magically concealed secret pages, runes, glyphs, symbols, and the like within its area of effect are clearly shown so that they can be read or identified without being triggered. The glyph of revealing may be moved without damaging it once it is complete.</p>
<dl>
    <dt>Material Components</dt> <dd>An ink made of the juice of crushed eyebright, white chalk, and crushed quartz.</dd>
</dl>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 2);

        $spell              = new Spell;
        $spell->name        = 'Glyph of Rebuking';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One container or 10-foot-by-10-foot area';
        $spell->duration    = 'Unlimited until dismissed';
        $spell->description = '<p>As Glyph of Warding, except that instead of a spell effect, you trigger a Divine Turning. When the glyph is triggered, the Rebuking attempt functions as if you had used one of your Channel Divinity Turn uses. You may add any Feats or Talents that can be applied to Channel Divinity.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Glyph of Turning';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One container or 10-foot-by-10-foot area';
        $spell->duration    = 'Unlimited until dismissed';
        $spell->description = '<p>As Glyph of Warding, except that instead of a spell effect, you trigger a Divine Turning. When the glyph is triggered, the Turning attempt functions as if you had used one of your Channel Divinity Turn uses. You may add any Feats or Talents that can be applied to Channel Divinity.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Glyph of Warding';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One container or 10-foot-by-10-foot area';
        $spell->duration    = 'Unlimited until dismissed';
        $spell->description = '<p>While casting this spell, you also cast a spell of lower spell level to be stored in the glyph. The stored spell must take 3 Actions or fewer to cast, have a hostile effect, and Target one creature or have an area. You can set the glyph with a password, a trigger stimulus, or both. Any creature that opens the Target container or enters the Target area without speaking the password or matching the trigger stimulus activates the glyph, releasing the harmful spell within.</p>
<p>Once a spell is stored in the glyph, the glyph gains all the traits of that spell. If the spell targets one or more creatures, it targets the creature that set off the glyph. If the spell has an area, that area is centered on the creature that set off the glyph. Glyph of warding’s duration ends when the glyph is triggered. The glyph counts as a magical trap, using your spell DC for both the Perception check to notice it and the Thievery check to disable it; both checks require the creature attempting them to be trained in order to succeed.</p>
<p>You can dismiss glyph of warding with a Verbal Casting action. The maximum number of glyphs of warding you can have active at a time is equal to your spellcasting ability modifier.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Golden Barding';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Special mount touched';
        $spell->duration    = '3 hours';
        $spell->description = '<p>You create magical glowing, golden suit of barding for your special mount. It grants an AC bonus of +2 and Damage Reduction of 2. The barding is made of Force, so it provides protection against Incorporeal attacks as well.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+3)</dt> <dd>Increase the AC bonus by +1 and the Damage Reduction by +1 (to a maximum of +4)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Force'], 0);

        $spell                = new Spell;
        $spell->name          = 'Golden Mail of Torm';
        $spell->casting       = 'Somatic Casting';
        $spell->spell_creator = 'Torm';
        $spell->targets       = 'Self';
        $spell->duration      = '6 hours';
        $spell->description   = '<p>You create a suit of shining golden full plate around your body. The armor is etched with the holy symbol of Torm. It is treated as +1 Mithral Full Plate for all purposes (including arcane spell failure chance), and you are treated as proficient with this armor. Removing or destroying the armor dismisses the spell. The spell has no effect if you are already wearing armor.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Good Hope';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->area        = '30-foot radius emanation';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You instill powerful hope in the creatures in the area. Each affected creature gains a +2 Morale Bonus, Saves, Attacks, Ability Checks, Skill Checks, and Weapon damage rolls.</p>
<p>This spell Counters and is Countered by Crushing Despair</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the area</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Emotion'], 4);

        $spell              = new Spell;
        $spell->name        = 'Goodberry';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Up to ten berries you have are infused with magic. A creature can use its Action to eat one berry. Eating a berry restores 1 hit point, and the berry provides enough nourishment to sustain a creature for one day.</p>
<p>The berries lose their potency if they have not been consumed within 24 hours of the casting of this spell.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 1);
        $spell->materials()->save(Material::where('name', 'Mistletoe')->firstOrFail());
        $spell->materials()->save(Material::where('name', 'Fruit')->firstOrFail(), ['meta' => 'A handful of berries to be imbued, up to 10']);

        $spell              = new Spell;
        $spell->name        = 'Grace';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You create a silvery glow around your body that provides illumination to a radius of 60 feet. For the duration, you gain the following.</p>
<ul>
    <li>+2 Sacred bonus to DEX</li>
    <li>+10 to Land Speed</li>
    <li>You and all weapons you wield are treated as Good aligned.</li>
</ul>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Good', 'Bless'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Grease';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->area           = '10-ft square';
        $spell->duration       = '1 minute';
        $spell->save_attribute = 'DEX';
        $spell->description    = '<p>Slick grease covers the ground in a 10-foot square centered on a point within range and turns it into difficult terrain for the duration.</p>
<p>When the grease appears, each creature standing in its area must succeed on a DEX Save or fall Prone. A creature that enters the area or ends its turn there must also succeed on a DEX saving throw or fall prone.</p>
<p>This spell Counters and is Countered by Sticky</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dt>No effect</dt>
    <dt>Failure</dt> <dt>Fall prone</dt>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>The grease is flammable. If set on fire, the duration ends at the start of your next turn. The fire deals 4D6 Fire damage to all in the area. Half that damage on a Successful DEX Save.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Great Shout';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '60-foot cone';
        $spell->duration       = 'Instantaneous';
        $spell->save_attribute = 'CON';
        $spell->description    = '<p>You emit a blaring yell that stuns, deafens and damages creatures in a 60ft cone emanating from you. All within the area, on a failed CON Save, take 10D6 of Sonic damage, and are deafened for 2D4 rounds and are stunned for 1D4 rounds. A successful save negates the damage, and reduces the conditions to 1 round.</p>
<p>This spell cannot penetrate the spell silence.</p>
<p>Creatures with Proficiency in Perception have disadvantage on the saving throw.</p>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>No damage, 1 round of Deafened and Stunned</dd>
    <dt>Failure</dt> <dd>Full damage and Deafened 2D4 rounds and Stunned 1D4 rounds</dd>
    <dt>Critical Failure</dt> <dd>Double damage and Deafened 4D4 rounds and Stunned 2D4 rounds</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Sonic'], 7);

        $spell              = new Spell;
        $spell->name        = 'Green-Flame Blade';
        $spell->casting     = 'Material Casting';
        $spell->range       = '5 feet';
        $spell->duration    = '1 round';
        $spell->description = "<p>Until the beginning of your next turn, your blade is wreathed in green flame. The next Target you hit with your weapon suffers the attack's normal effects, and the green fire leaps from the Target to a different creature of your choice that you can see within 5 feet of it. The second creature takes fire damage equal to your spellcasting ability modifier.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+3)</dt> <dd>Increase the fire damage by +1D8 to both the first and second targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 0);
        $spell->materials()->save(Material::where('name', 'Fever Iron')->firstOrFail(), ['quantity' => 'Only a tiny amount is needed']);

        $spell                 = new Spell;
        $spell->name           = 'Grim Tendrils';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30-foot line';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>Black shadows curl out from your fingertips and face through the air, taking the form of ephemeral vines with thorns. You deal 2D4 Negative damage and 1 persistent bleed damage to living creatures in theline, depending on their CON Saves.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The creature is unaffected</dd>
    <dt>Success</dt> <dd>The creature takes half Negative damage and no bleed</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Double Negative damage and persistent bleed damage</dt> <dd></dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The negative damage increases by 2D4 and the persistent bleed damage increase by 1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Ground Stomp';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '15-foot emanation or 15-foot cone';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You shake the earth, toppling nearby creatures. Choose whether the spell's area is a 15-foot emanation or a 15-foot cone when you cast it. Each creature in the area standing on solid ground may take 4D6 Bludgeoning damage and must attempt a DEX Save.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The creature is unaffected</dd>
    <dt>Success</dt> <dd>The creature takes half damage</dd>
    <dt>Failure</dt> <dd>The creature takes full damage and falls Prone</dd>
    <dt>Critical Failure</dt> <dd>The creature takes double damage and falls Prone</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +2D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Guardian of Faith';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '30 feet';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '8 hours';
        $spell->description    = '<p>A Large spectral guardian appears and hovers for the duration in an unoccupied space of your choice that you can see within range. The guardian occupies that space and is indistinct except for a gleaming sword and shield emblazoned with the symbol of your deity.</p>
<p>Any creature hostile to you that moves to a space within 10 feet of the guardian for the first time on a turn must succeed on a DEX Save or take 20 divine damage. The guardian vanishes when it has dealt a total of 60 damage.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 4);

        $spell              = new Spell;
        $spell->name        = 'Guards and Wards';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->duration    = '24 hours';
        $spell->description = '<p>You create a ward that protects up to 2,500 square feet of floor space (an area 50 feet square, or one hundred 5-foot squares or twenty-five 10-foot squares). The warded area can be up to 20 feet tall, and shaped as you desire. You can ward several stories of a stronghold by dividing the area among them, as long as you can walk into each contiguous area while you are casting the spell.</p>
<p>When you cast this spell, you can specify individuals that are unaffected by any or all of the effects that you choose. You can also specify a password that, when spoken aloud, makes the speaker immune to these effects.</p>
<p>Guards and wards creates the following effects within the warded area.</p>
<dl>
    <dt>Corridors</dt> <dd>Fog fills all the warded corridors, making them heavily obscured. In addition, at each intersection or branching passage offering a choice of direction, there is a 50 percent chance that a creature other than you will believe it is going in the opposite direction from the one it chooses.</dd>
    <dt>Doors</dt> <dd>All doors in the warded area are magically locked, as if sealed by an arcane lock spell. In addition, you can cover up to ten doors with an illusion (equivalent to the illusory object function of the minor illusion spell) to make them appear as plain sections of wall.</dd>
    <dt>Stairs</dt> <dd>Webs fill all stairs in the warded area from top to bottom, as the web spell. These strands regrow in 10 minutes if they are burned or torn away while guards and wards lasts.</dd>
    <dt>Other Spell Effect</dt> <dd>
        <p>You can place your choice of one of the following magical effects within the warded area of the stronghold.</p>
        <ul>
            <li>Place dancing lights in four corridors. You can designate a simple program that the lights repeat as long as guards and wards lasts.</li>
            <li>Place magic mouth in two locations.</li>
            <li>Place stinking cloud in two locations. The vapors appear in the places you designate; they return within 10 minutes if dispersed by wind while guards and wards lasts.</li>
            <li>Place a constant gust of wind in one corridor or room.</li>
            <li>Place a suggestion in one location. You select an area of up to 5 feet square, and any creature that enters or passes through the area receives the suggestion mentally.</li>
            <li>The whole warded area radiates magic. A Dispel Magic cast on a specific effect, if successful, removes only that effect.</li>
            <li>You can create a permanently guarded and warded structure by casting this spell there every day for one year.</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Ritual'], 6);

        $spell              = new Spell;
        $spell->name        = 'Guidance';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You touch one willing creature. Once before the spell ends, the Target can roll a d4 and add the number rolled to one ability check of its choice. It can roll the die before or after making the ability check. The spell then ends.</p>';
        $helper->addTypesToSpell($spell, ['Divination'], 0);

        $spell              = new Spell;
        $spell->name        = 'Guided Arrow';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 round';
        $spell->description = '<p>Until the beginning of your next turn, all of your Ranged Attacks are made as Ranged Touch Attacks.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Guided Path';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->range       = '1 mile';
        $spell->duration    = '1 hour';
        $spell->description = "<p>This spell imparts to you the most direct route to a type of location within 1 mile. A location is defined as a particular sort of building or establishment (such as a tavern, temple, or blacksmith's shop). The purpose of the location must be publicly known. You can't obtain directions to a specific location, such as Rufus the Blacksmith or the location of the local thieves guild that is located in a nearby warehouse because it is not publicly known that the warehouse is the location of the thieves guild.</p>";
        $helper->addTypesToSpell($spell, ['Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Guided Shot';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 round';
        $spell->description = '<p>Until the beginning of your next turn, any Ranged attack you make gains the following.</p>
<ul>
    <li>You gain a +1 bonus to Hit</li>
    <li>No range penalties</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 1);

        $spell              = new Spell;
        $spell->name        = 'Guiding Light';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '500 feet';
        $spell->area        = '5-foot radius emanation centered at the point of target';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>Light shines over the affected area, illuminating all targets within it. The light grants a +1 Circumstance bonus to all Ranged Attacks made against targets illuminated by the light.</p>
<p>Spellcasters in battle sometimes use this spell to designate targets for archers.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 1);

        $spell               = new Spell;
        $spell->name         = 'Gullet of Holding';
        $spell->casting      = 'Somatic Casting, Verbal Casting';
        $spell->requirements = 'Caster must be of draconic ancestry';
        $spell->targets      = 'Self';
        $spell->duration     = '8 hours';
        $spell->description  = '<p>You create a small extradimensional space inside your stomach, which can be used to hold objects that you swallow. The space can stretch up to 50 cubic feet and can hold up to 500 pounds worth of weight.</p>
<p>As part of the Action to cast this spell, you create a command word that is used to open and close the dimensional space. Upon activation, the dimensional space opens at the end of your esophagus in such a way that it blocks access to your stomach, so that any object that you consume will be sent instead into the magical space. Food that is eaten while the extradimensional space is open will not grant sustenance to the body. To consume food, the caster has to use the command word to close the dimensional space before eating.</p>
<p>The caster can, as a minute-long process, expel the contents of the dimensional space out from their mouth into a location within 5 feet of them. If the spell ends while there are objects within the magical space, those objects are ejected forcefully in a similar way throughout the course of a minute.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by +8 hours.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Gust';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->save_attribute = 'STR';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You seize the air and compel it to create one of the following effects at a point you can see within range:</p>
<ul>
    <li>One Medium or smaller creature that you choose must succeed on a STR Save or be pushed up to 5 feet away from you.</li>
    <li>You create a small blast of air capable of moving one object that is neither held nor carried and that weighs no more than 5 pounds. The object is pushed up to 10 feet away from you. It isn’t pushed with enough force to cause damage.</li>
    <li>You create a harmless sensory effect using air, such as causing leaves to rustle, wind to slam shutters shut, or your clothing to ripple in a breeze.</li>
</ul>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+3)</dt> <dd>
        <ul>
            <li>On a Critical Failure on the Save, the Target suffers 1 point of Force Damage</li>
            <li>The small blast of air is now a cone shape, and can clear fogs and clouds.</li>
            <li>Becomes the effect is meant to be harmless, there is no change.</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Gust of Wind';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60-foot line';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Until the start of your next turn';
        $spell->description    = "<p>A violent wind issues forth your palm, blowing from the point where you are when you cast the spell to the line's opposite end. The wind extinguishes small non-magical fires, disperses fog and mist, blows objects of light Bulk or less around, and pushes larger objects. Large or smaller creatures that later move into the gust must attempt the Save on entering.</p>";
        $spell->heightened     = "<dl>
    <dt>Heightened (+4)</dt> <dd>The wind becomes cold. All in the area suffers 6D6 Cold damage (CON Save for half damage). All creates of size Medium must make a STR Save or be pushed 10 ft. Adjust the Save by the creature's Size. The Duration becomes Concentration, up to 1 minute. The wind now can put out large fires.</dd>
    <dt>Permanency (Heightened +5)</dt> <dd>7,500 gp. 4 CON damage.</dd>
</dl>";
        $spell->saves = "<dl>
    <dt>Critical Success</dt> <dd>The creature is unaffected</dd>
    <dt>Success</dt> <dd>The creature can't move against the wind</dd>
    <dt>Failure</dt> <dd>The creature is knocked prone. If it was flying, it suffers the effects of critical failure instead</dd>
    <dt>Critical Failure</dt> <dd>The creature is pushed 30 feet in the wind's direction, knocked prone, and takes 2D6 Bludgeoning damage</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air', 'Permanency'], 1);
    }
}
