<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsRSeeder extends Seeder
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
        $spell->name        = 'Radiance';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '60-ft radius emanation centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You emanate a bright light that Undead find uncomfortable. The illumination within the Area is bright, the equivalent of a Daylight Spell. Undead in the Area are Dazzled for as long as they remain in the Area and for 3 rounds after.</p>
<p>This spell counters any spell with the Darkness type of equal or lower level.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Radiant Assault';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '500 feet';
        $spell->area           = '30-ft radius emanation';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>This spell releases energy in the form of a multitude of rainbow-colored beams that erupt in every direction. This kaleidoscopic burst of energy deals 12D6 Light Damage unless they Succeed a DEX Save. All creatures in the Area are also Dazzled for 4 rounds (Sightless creatures are unaffected by this spell).</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half Damage and Dazzled for 4 rounds</dd>
    <dt>Failure</dt> <dd>Full Damage and Dazzled for 4 rounds</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light', 'Visual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Radiant Mark';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '5 feet';
        $spell->targets     = 'Creature you attack';
        $spell->duration    = '1 round';
        $spell->description = '<p>After casting this spell, your weapon holds the spell effect until the end of your turn. The first creature that you hit with your enhanced weapon is marked until the beginning of your next turn. The next time the marked creature is hit by an attack, the attack deals additional Force damage equal to your spellcasting ability modifier, at which point the mark ends.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+3)</dt> <dd>Damage becomes 1D8 + modifier</dd>
    <dt>Heightened (+5)</dt> <dd>Damage becomes 2D8 + modifier</dd>
    <dt>Heightened (+7)</dt> <dd>Damage becomes 3D8 + modifier</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Force'], 0);

        $spell              = new Spell;
        $spell->name        = 'Rage';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'One willing creature within range';
        $spell->duration    = '1 minute';
        $spell->description = "<p>Each affected creature gains a +4 morale bonus to STR and CON, a +1 morale bonus on WIS Saves, and a -2 penalty to AC. The effect is otherwise identical with a barbarian's rage except that the subjects aren't fatigued at the end of the rage.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can target up to 5 targets within range</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Rage'], 2);

        $spell              = new Spell;
        $spell->name        = 'Rain';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = '100 ft radius emanation / 500 ft';
        $spell->duration    = 'Concentration, up to 30 minutes';
        $spell->description = '<p>You cause clouds to gather and a heavy rain to fall. The rain reduces visibility ranges by half, resulting in a -3 penalty to Perception checks. It automatically extinguishes unprotected flames, and has a 50% chance to extinguishing protected flames. Ranged weapon attacks suffer a -1 penalty.</p>
<p>This spell does not function indoors, underground, underwater, or in desert climates.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the maximum duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 2);

        $spell              = new Spell;
        $spell->name        = 'Raise Dead';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = '10 feet';
        $spell->targets     = 'One dead creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You attempt to call forth the Target dead creature's soul, requiring the Target creature's body be present and relatively intact. The Target creature must have died within the past 3 days. If the Target's patron god decides that the creature's time has come (GM discretion), or if the creature doesn't wish to return to life, this spell automatically fails, but the material components are still consumed.</p>
<p>If the spell is successful, the creature is no longer dead and returns to life with 1 Hit Point, no spells prepared, no points in any pools, and it is still suffering from any long term debilitation of the old body. The time spent being dead leaves the target temporarily debilitated, making it enervated 2 for 1 week; this condition can't be removed or reduced by any means until the week has passed. The creature is also permanently changed in some way by their time in the afterlife, such as a slight personality shift, a streak of white in their hair, or a strange new birthmark.</p>";
        $helper->addTypesToSpell($spell, ['Healing', 'Necromancy', 'Ritual'], 6);
        $spell->materials()->save(Material::where('name', 'Diamond')->firstOrFail(), [
            'price' => "Target's level x 10 gp",
            'meta'  => 'The spell consumes the diamond',
        ]);

        $spell              = new Spell;
        $spell->name        = 'Raise as Ghost';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = '10 feet';
        $spell->targets     = 'One dead creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>This spell is similar to Raise Dead, except that the target returns as a Ghost. The Target's soul is aware that it will return as a ghost and can refuse to return.</p>
<dl>
    <dt>Material Components</dt> <dd>Something of value to the Target or at least 1 lb of the target's body.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ritual'], 4);

        $spell              = new Spell;
        $spell->name        = 'Rally Cry';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '60 foot radius';
        $spell->targets     = 'All allies within range (not including yourself)';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You gain the ability to shout a cry to rally twice until the duration ends. As an Action, you may shout, causing all of your allies within range to gain the benefits below. The benefits last for 1 round. You may use your first shout as part of casting this spell.</p>
<ul>
    <li>All your allies that are within range gain a +4 bonus to AC vs Attacks of Opportunity that they would suffer from Striding away from Melee Combat, as long as they move towards you.</li>
    <li>All your allies that are within range gain a 5 ft bonus to their Speed.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Battle Cry'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Rapture of the Deep';
        $spell->casting        = 'Material Casting, Somatic Casting,Verbal Casting';
        $spell->rarity         = 'Rare';
        $spell->save_attribute = 'WIS';
        $spell->range          = '120 feet';
        $spell->targets        = 'One living creature within range';
        $spell->duration       = '24 hours';
        $spell->description    = "<p>You fill the target creature's thoughts and ears with the sublime music of the deep waters. The creature is completely immersed in this sensation and does nothing but experience it fully. If it Fails a WIS Save, it enters a Comatose state and cannot be awakened by any means short of Dispelling it. This is not a Sleep effect. Damage does not awaken the target.</p>
<p>This effect can be Dispelled by Dispel Magic (must Succeed a Dispel Check), Restoration, Heal, Wish, or Miracle.</p>
<dl>
    <dt>Material Components</dt> <dd>A conch shell</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Asleep for 24 hours or until Dispelled</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion', 'Auditory', 'Mental'], 6);

        $spell              = new Spell;
        $spell->name        = 'Ray of Clumsiness';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One creature within range';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You make a Ranged Touch Attack. If you hit, the Target is Dizzy: 2.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the Dizzy by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Necromancy', 'Curse', 'Ray'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Ray of Enfeeblement';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature within range';
        $spell->save_attribute = 'STR';
        $spell->spell_creator  = 'Hamring';
        $spell->duration       = '1 minute';
        $spell->description    = "'<p>Attempt a ranged touch attack against the target. If you succeed, that creature attempts a CON Save in order to determine the spell's effect. If you critically succeed at your attack roll, the target treats the result of its CON Save as one degree worse.</p>'";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>The target gains Enfeebled 1</dd>
    <dt>Failure</dt> <dd>The target gains Enfeebled 2</dd>
    <dt>Critical Failure</dt> <dd>The target gains Enfeebled 3</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Necromancy', 'Curse', 'Ray'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Ray of Exhaustion';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature within range';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>A black ray projects from your pointing finger. You must succeed on a Ranged Touch attack with the ray to strike a target.</p>
<p>If the target is hit, they must make a CON Save and suffer the consequences.</p>
<p>A Target that is already Fatigued instead gains 1 level of Exhaustion. A Target that already has levels of Exhaustion gains at most 1 more level of Exhaustion.</p>
<p>This spell has no effect on a creature that is already has at least 1 level of Exhaustion. Unlike normal Exhaustion or Fatigue, the effect ends as soon as the spell's duration expires.</p>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Fatigued instead of Exhausted</dd>
    <dt>Failure</dt> <dd>Exhausted for 10 rounds</dd>
    <dt>Critical Failure</dt> <dd>Exhausted for 20 rounds</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Necromancy', 'Curse', 'Ray'], 3);

        $spell              = new Spell;
        $spell->name        = 'Ray of Flame';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'One creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>Make a ranged touch attack against the target. If you hit, you deal 1D6 + your spellcasting ability modifier in Fire damage. Double the dice damage on a critical hit. A flammable object hit by this spell ignites if it isn't being worn or carried.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+3)</dt> <dd>The Fire damage increases by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Fire', 'Evocation', 'Ray'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Ray of Force';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->targets        = 'Target in range';
        $spell->save_attribute = 'STR';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You direct an invisible blast of force at a chosen target within range. The blast is a Ranged Touch Attack that deals 5D6 Force Damage. In addition, a Successful Hit forces the target to make a STR Save or be knocked down (Size and stability modifiers apply to the Save as if the spell were a Bull Rush).</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not knocked Prone</dd>
    <dt>Failure</dt> <dd>Knocked Prone</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by 1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Ray', 'Force'], 3);

        $spell              = new Spell;
        $spell->name        = 'Ray of Frost';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'One creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Make a ranged touch attack against the target. If you hit, you deal 1D8 + your spellcasting ability modifier Cold damage. Double the dice damage on a critical hit.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+3)</dt> <dd>The Cold damage increases to +1D8.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Cold', 'Evocation', 'Ray'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Ray of Light';
        $spell->casting        = 'Somatic Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '120 feet';
        $spell->targets        = 'One creature in range';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You shoot a Ray of Light at the Target. Make a Ranged Spell Attack. If you hit, the Target takes 1D6 Light Damage and must make a DEX Save or be Dazzled: 1.</p>
<p>This spell Counters any Spell with the Darkness type of any level.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not Dazzled</dd>
    <dt>Failure</dt> <dd>Dazzled: 1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light', 'Ray'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Ray of Paralysis';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '200 feet';
        $spell->targets        = '1 creature within range';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>This spell projects a green, pencil-thin ray of enervating energy at the subject. The target creature must make a DEX Save to dodge the ray. If the target Succeeds on the Save, a creature standing behind it in a direct line might be struck at the DM's discretion.</p>
<p>A creature struck by the Spell is Paralyzed for 3 rounds. After the 3 rounds, the target may make a CON Save to end this effect.</p>";
        $spell->saves = '<dl>
    <dt>Failure</dt> <dd>Dex Save: Full effect. CON Save: Paralysis continues</dd>
    <dt>Success</dt> <dd>Dex Save: No effect. CON Save: Paralysis ends</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Ray of Stupidity';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One living creature within range';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You make a Ranged Touch Attack against a Target within range. If you hit, the target Suffers 1D2 +1 INT Damage until the Duration ends.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the INT Damage by +1</dd>
    <dt>Heightened (+1)</dt> <dd>The Target also loses an unused Spell Slot equal to the Spell Level of this spell or lower at random (randomly determine the Spell Level equal to at most this spells Spell Level or lower).</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ray', 'Curse'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Rays of Bedevilment';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->targets        = 'Creature in range';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 10 rounds';
        $spell->description    = '<p>This spell grants you the ability to make one Ray Attack per round as an Action. The ray causes one living creature to be Dazed for 1D3 rounds.</p>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>On a Failed Save, Dazed for 1D4 rounds</dd>
    <dt>Heightened (+2)</dt> <dd>On a Failed Save, Dazed for 1D6 rounds</dd>
    <dt>Heightened (+3)</dt> <dd>On a Failed Save, Dazed for 1D6 + 2 rounds</dd>
    <dt>Heightened (+4)</dt> <dd>On a Failed Save, Dazed for 2D4 + 2 rounds</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Dazed</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Mental', 'Ray'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Rebuke of Yondalla';
        $spell->casting        = '1 minute (Material, Somatic, Verbal)';
        $spell->range          = 'Touch';
        $spell->targets        = 'Creature touched';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>This spell is reserved for creatures who have greatly offended Yondalla and the Hafling people. A creature targeted by this spell must make a CHA Save. Failure causes the target to become Stunned: 10. It then returns to infancy over the period of 10 minutes. During this time, the casting must continue to Concentrate on the spell. If the Concentration is broken before the target completly reverts to infancy causes the spell to fail.</p>
<p>The infant has no memory of its previous life and commonly the halfling community of the priest will raise the infant themselves.</p>
<p>Undead creatures of less than divine status that fails its Save is destroyed. An extraplanar creature that fails its Save is banished back to its home plane for 100 years.</p>
<p>This spell cannot be dispelled by Dispel Magic. It can be ended by a Remove Curse from the same priest that placed this spell in the first place or another priest of greater level than the original caster. It can also be ended by a Wish or Miracle.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 7);
        $spell->materials()->save(Material::where('name', 'Reliquary')->firstOrFail(), ['meta' => 'Holy Symbol of Yondalla']);

        $spell              = new Spell;
        $spell->name        = 'Redirect Spell';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '90 feet';
        $spell->targets     = 'One creature';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You create a magical connection between you and an ally such that any spells targeting the ally (rather than an area of effect) are redirected to you.</p>
<blockquote>
    Magic Missle cast at your ally targets you instead.
</blockquote>
<p>Both you and your ally must be within range of a spell for the redirect to occur. If you ally is within range of the caster but you are not, the spell targets your ally normally. Should you and the subject of the spell move out of range of each other, the spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 3);

        $spell              = new Spell;
        $spell->name        = 'Regenerate';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One willing or unconscious living creature';
        $spell->duration    = '1 minute';
        $spell->description = "<p>The target temporarily gains Regeneration 15, which restores 15 Hit Points to it at the start of each of its turns. While it has Regeneration, the target can't die from damage and its Dying value can't exceed 3. If the target takes Acid or Fire damage, its Regeneration deactivates until after the end  of its next turn.</p>
<p>Each time the creature regains Hit Points from Regeneration, it also regrows one damaged or ruined organ (if any). During the spell's duration, the creature can also reattach severed body parts by spending an Interact Action to hold the body part to the stump.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The Regeneration increases to 20.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Healing', 'Necromancy'], 7);

        $spell              = new Spell;
        $spell->name        = 'Reincarnate';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You touch a dead humanoid or a piece of a dead humanoid. Provided that the creature has been dead no longer than 10 days, the spell forms a new adult body for it and then calls the soul to enter that body. If the target’s soul isn’t free or willing to do so, the spell fails.</p>
<p>The magic fashions a new body for the creature to inhabit, which likely causes the creature’s race to change. The GM rolls a d100 and consults the following table to determine what form the creature takes when restored to life, or the GM chooses a form.</p>
<dl>
    <dt>01 - 04</dt> <dd>Dragonborn</dd>
    <dt>05 - 13</dt> <dd>Gold Dwarf</dd>
    <dt>14 - 21</dt> <dd>Shield Dwarf</dd>
    <dt>22 - 25</dt> <dd>Drow</dd>
    <dt>26 - 34</dt> <dd>Sun Elf</dd>
    <dt>35 - 42</dt> <dd>Moon Elf</dd>
    <dt>43 - 46</dt> <dd>Gnome, Forest</dd>
    <dt>47 - 52</dt> <dd>Gnome, Rock</dd>
    <dt>53 - 56</dt> <dd>Half-elf</dd>
    <dt>57 - 60</dt> <dd>Half-orc</dd>
    <dt>61 - 68</dt> <dd>Lightfoot Halfling</dd>
    <dt>69 - 76</dt> <dd>Strongheart Halfling</dd>
    <dt>77 - 96</dt> <dd>Human</dd>
    <dt>97 - 00</dt> <dd>Tiefling</dd>
</dl>
<p>The reincarnated creature recalls its former life and experiences. It retains the capabilities it had in its original form, except it exchanges its original race for the new one and changes its racial traits accordingly.</p>
<p><strong>Material</strong> Rare oils and unguents worth at least 1,000 gp, which the spell consumes.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ritual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Remake';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->range       = '5 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You fully remake re-create an object from nothing, even if the object was destroyed. To do so, you must be able to picture the object in your mind. Additionally, the material component must be a remnant of the item, no matter how small or insignificant (even a speck of dust that remains form Disintegrate is enough). The spell fails if your imagination relied on too much guesswork, if the object would be too large to fit in a 5-foot cube, if the object still exists and you were simply not aware of it, or if the object is an Artifact, or has similar vast magical power.</p>
<p>The item resembles in perfect condition. Even if your mental image was of a damaged or weathered object, the new one is in this perfected form. If the object was magical, this spell typically restores its constant magical properties, but not any temporary ones, such as charges or one-time uses. An item with charges or  uses per day has all of its uses expended when remade, but it replenishes them normally thereafter.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 10);

        $spell                = new Spell;
        $spell->name          = 'Remove Curse';
        $spell->casting       = '10 minutes (Material, Somatic, Verbal)';
        $spell->range         = 'Touch';
        $spell->targets       = 'One creature';
        $spell->spell_creator = 'Enollar';
        $spell->duration      = 'Instantaneous';
        $spell->description   = '<p>You attempt to remove one curse afflicting the target. Treat this as counteracting the curse. If the curse comes form a cursed item or other external source, a success indicates that the target creature can rid itself of the cursed item, but doesn\'t remove the curse form the item.</p>';
        $helper->addTypesToSpell($spell, ['Healing', 'Abjuration', 'Ritual'], 4);

        $spell              = new Spell;
        $spell->name        = 'Remove Disease';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You attempt to help remove a Disease. The target gets to immediately make a Save against the Disease with a +3 bonus to the Save. If the Disease does not allow a Save, then this spell allows a normal Save with no bonus.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the bonus to Save by +3</dd>
    <dt>Heightened (+2)</dt> <dd>On a Success, move two Stages close to being cured and on a Critical Success, three stages close to being cured.</dd>
    <dt>Heightened (+3)</dt> <dd>As Heightened +2, but the victim moves one Stage close to being cured even on a Failed Save (but not on a Critically Failed Save)</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>The victim moves two Stages closer to being cured</dd>
    <dt>Success</dt> <dd>The victim moves one Stage closer to being cured</dd>
    <dt>Failure</dt> <dd>No affect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Healing', 'Abjuration', 'Ritual'], 1);

        $spell              = new Spell;
        $spell->name        = 'Remove Fear';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You can counteract a single fear effect that the target suffers from. This can also remove nonmagical Fear effects if the source's level is equal to or lower than double Remove Fear's level. This frees only the target, not other creatures under the Fear effect.</p>";
        $spell->heightened  = "<dl>
    <dt>Heightened (+4)</dt> <dd>The spell's range increases to 30 feet, and you can target up to 10 creatures.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Abjuration'], 2);

        $spell              = new Spell;
        $spell->name        = 'Remove Paralysis';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You can counteract a single effect inflicting paralysis on the creature. This does not cure someone who suffers paralysis form some natrual state or effect, such as being paralyzed from birth or paralysis caused by nonmagical wounds or toxins.</p>';
        $spell->heightened  = "<dl>
    <dt>Heightened (+1)</dt> <dd>The spell's range increases to 30 feet, and you can target up to 10 creatures.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Healing', 'Abjuration'], 2);

        $spell              = new Spell;
        $spell->name        = 'Remove Scent';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature Touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>This spell hides the scent of the creature or object touched for the Duration. The Scent ability cannot detect the Target. This spell also can negate the harmful effects of noxious stench exuded by certain creatures, such as Ghasts.</p>
<dl>
    <dt>Material Components</dt> <dd>A pinch of unscented candle wax</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number Targets</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Rend Shadow Weave';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = '30 feet, one 10-ft cube area of the Shadow Weave';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You damage the Shadow Weave, creating an area of dead magic that only affects the Shadow Weave.</p>
<p>While you have this spell prepared, you get a +1 competence bonus on Saves vs Spells that have the Shadow Weave descriptor.</p>
<dl>
    <dt>Material Components</dt> <dd>A moonstone worth at least 50 gp</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 3);

        $spell               = new Spell;
        $spell->name         = 'Renewal Pact';
        $spell->casting      = '10 minutes (Somatic, Verbal, Secondary Casters, Ability Damage)';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least three other casters, who collectively must cast Bless, Prayer, and Ceremony</dd>
    <dt>Ability Damage</dt> <dd>8 CON Damage. The Secondary Casters take 4 CON Damage each</dd>
</dl>';
        $spell->range        = 'Touch';
        $spell->targets      = 'One willing living creature touched';
        $spell->duration     = 'Permanent until triggered';
        $spell->description  = '<p>This spell creates a Pact between the Target and your deity. Once this spell is cast, it remains dormant until the Target is subjected to one of the following effects.</p>
<ul>
    <li>Ability Damage</li>
    <li>Blindness</li>
    <li>Confused</li>
    <li>Dazed</li>
    <li>Dazzled</li>
    <li>Deafened</li>
    <li>Drained</li>
    <li>Enfeebled</li>
    <li>Enervated</li>
    <li>Exhaustion</li>
    <li>Fatigued</li>
    <li>Insane</li>
    <li>Nauseated</li>
    <li>Sickened</li>
    <li>Stunned</li>
</ul>
<p>One round after the Target is affected by one of the listed Conditions, the Target receives a Heal Spell</p>
<p>A creature can have only one of this spell at a time. Casting this spell on a Target that already has this spell active Dispels the first casting without triggering it.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Healing'], 7);

        $spell              = new Spell;
        $spell->name        = 'Repair Construct';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Construct touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>The targeted construct gains Fast Healing 5. This does not stack with Fast Healing the construct already has.</p>
<p>Fast healing has no effect on a construct that has been brought to 0 hit points or destroyed.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Construct'], 5);

        $spell              = new Spell;
        $spell->name        = 'Repel Ectoplasm';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '60 foot line 10 foot wide';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You create waves of invisible and intangible energy that rolls froth from you. All Ectoplasm in the path of the spell are pushed away from you to the limit of the range. Fixed Ectoplasm larger than 3 inches in diameter loose objects weighing more than 500 pounds are not affected. Anything else is repelled at a rate of 40 feet per round.</p>
<p>A creature being dragged by an item it is carrying can let go.</p>
<p>After you cast the spell, the path is set, and you can then do other things.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Ectoplasm'], 6);

        $spell              = new Spell;
        $spell->name        = 'Repel Metal or Stone';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '60 foot line 10 foot wide';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You create waves of invisible and intangible energy that rolls forth from you. All metal or stone objects in the path of the spell are pushed away from you to the limit of the range. Fixed metal or stone objects larger than 3 inches in diameter and loose objects weighing more than 500 pounds are not affected. Anything else, including animated objects, small boulders, and creatures in metal armor are pushed back. Fixed objects 3 inches in diameter or smaller bend or break, and the pieces move with the wave of energy.</p>
<p>Objects affected by the spell are repelled at the rate of 40 feet per round. Objects such as metal armor, swords, and the like are pushed back, dragging their bearers with them.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Abjuration', 'Earth'], 8);

        $spell              = new Spell;
        $spell->name        = 'Repel Plants';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '5-foot radius aura';
        $spell->targets     = 'One creature touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>All forms of vegetable life, including fungi, slimes, molds and the like are repelled from the target. Plants suffer a -3 penalty to hit the target, and plants cannot Grapple the target. If the target initiates the Grapple, the plant suffers a -3 penalty on all Grapple checks.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+4)</dt> <dd>This spell also affects wood, but it does not need to be alive</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Plant'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Repelling Shield';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->targets        = 'Self';
        $spell->duration       = '10 minutes';
        $spell->description    = "<p>You create a shield of Force that can push your attackers away from you. This spell functions like the Shield Spell, except that any adjacent creature that makes a Melee Attack against you is also pushed 5 feet directly away from you after the Attack is resolved. A Successful DEX Save negates this effect.</p>
<p>This effect can't push a creature into a space that it couldn't legally occupy. If the creature would be pushed into a space it can't occupy, then there is no effect.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not pushed</dd>
    <dt>Failure</dt> <dd>Pushed 5 feet directly away from you</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Force'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Repulsion';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'STR';
        $spell->area           = 'Up to 120 ft radius emanation centered on you';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>You create an invisible mobile field that surrounds you and prevents creatures from approaching you. You decide how big the field is at the time of casting (up to the limit of the Area). Any creature within or entering the field must make a STR Save. If it Fails, it becomes unable to move toward you for the Duration. Repelled creature's Actions are not otherwise restricted. They can fight other creatures and can cast spells and attack you with Ranged Attacks. If you move closer to an affected creature, nothing happens. The creature is free to make Melee Attacks against you if you come within reach.</p>
<dl>
    <dt>Material Components</dt> <dd>A pair of small iron bars attached to two small canine statuettes, one black and one white, the whole array worth 50 gp.</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not repelled</dd>
    <dt>Failure</dt> <dd>Repelled. The creature cannot move towards you</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Force'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Resilient Sphere';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature or object of Large size or smaller';
        $spell->save_attribute = 'DEX';
        $spell->spell_creator  = 'Otiluke';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>A sphere of shimmering force encloses a creature or object of Large size or smaller within range. An unwilling creature must make a DEX Save. On a failed save, the creature is enclosed for the duration.</p>
Nothing—not physical objects, energy, or other spell effects—can pass through the barrier, in or out, though a creature in the sphere can breathe there. The sphere is immune to all damage, and a creature or object inside can’t be damaged by attacks or effects originating from outside, nor can a creature inside the sphere damage anything outside it.</p>
<p>The sphere is weightless and just large enough to contain the creature or object inside. An enclosed creature can use its action to push against the sphere’s walls and thus roll the sphere at up to half the creature’s speed. Similarly, the globe can be picked up and moved by other creatures.</p>
<p>A disintegrate spell targeting the globe destroys it without harming anything inside it.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>Enclosed for the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 4);

        $spell              = new Spell;
        $spell->name        = 'Resist';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You touch one willing creature. Once before the spell ends, the target can add a +3 bonus to one Save, the spell then ends.</p>';
        $spell->heightened  = '<dl>
    <dt>Permanency (Requires a 5th Level Spell Slot)</dt> <dd>2,500 gp. 3 CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Permanency'], 0);

        $spell              = new Spell;
        $spell->name        = 'Resist Acid';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>The touched creature gains Resistance to Acid</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may touch an additional target.</dd>
    <dt>Heightened (+3)</dt> <dd>The touched creature gains Immunity instead.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Transmutation', 'Acid'], 2);

        $spell              = new Spell;
        $spell->name        = 'Resist Cold';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>The touched creature gains Resistance to Cold</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may touch an additional target.</dd>
    <dt>Heightened (+3)</dt> <dd>The touched creature gains Immunity instead.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Transmutation', 'Evocation', 'Cold'], 2);

        $spell              = new Spell;
        $spell->name        = 'Resist Electricity';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>The touched creature gains Resistance to Electricity</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may touch an additional target.</dd>
    <dt>Heightened (+3)</dt> <dd>The touched creature gains Immunity instead.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Transmutation', 'Evocation', 'Electricity'], 2);

        $spell              = new Spell;
        $spell->name        = 'Resist Elements';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>When you cast this spell, choose one of the following elements.</p>
<ul>
    <li>Cold</li>
    <li>Electricity</li>
    <li>Fire</li>
    <li>Light</li>
    <li>Sonic</li>
</ul>
<p>The touched creature gains resistance to the chosen element for the duration.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may touch an additional target.</dd>
    <dt>Heightened (+3)</dt> <dd>The touched creature gains Immunity instead.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Evocation', 'Cold', 'Electricity', 'Fire', 'Light', 'Sonic'], 2);

        $spell              = new Spell;
        $spell->name        = 'Resist Fire';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>The touched creature gains Resistance to Fire</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may touch an additional target.</dd>
    <dt>Heightened (+3)</dt> <dd>The touched creature gains Immunity instead.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Transmutation', 'Evocation', 'Fire'], 2);

        $spell              = new Spell;
        $spell->name        = 'Resist Force';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>The touched creature gains Resistance to Force</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may touch an additional target.</dd>
    <dt>Heightened (+3)</dt> <dd>The touched creature gains Immunity instead.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Evocation', 'Force'], 2);

        $spell              = new Spell;
        $spell->name        = 'Resist Planar Alignment';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '3 hours';
        $spell->description = "<p>This spell protects the Target from a Plane's alignment traits. When the target visits a Plane with an alignment trait, this spell grants immunity to penalties to CHA Checks that mildly aligned Planes impose. The CHA, WIS, and INT Check penalties associated with strongly aligned are halved.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 1);

        $spell              = new Spell;
        $spell->name        = 'Resist Poison';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>The touched creature gains Resistance to Poison</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may touch an additional target.</dd>
    <dt>Heightened (+3)</dt> <dd>The touched creature gains Immunity instead.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Transmutation', 'Poison'], 2);

        $spell              = new Spell;
        $spell->name        = 'Resist Sonic';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>The touched creature gains Resistance to Sonic</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may touch an additional target.</dd>
    <dt>Heightened (+3)</dt> <dd>The touched creature gains Immunity instead.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Sonic'], 2);

        $spell              = new Spell;
        $spell->name        = 'Resist Negative Energy';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You touch one willing creature. They receive a +3 bonus to all Saves vs. Negative energy damage and effects.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The touched creature also gains Damage Resistance to Negative Energy damage</dd>
    <dt>Heightened (+2)</dt> <dd>The touched creature is Immune to Negative Energy damage</dd>
    <dt>Permanency (Requires a 6th Level Spell Slot)</dt> <dd>7,000 gp. 5 CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Permanency', 'Negative'], 0);

        $spell              = new Spell;
        $spell->name        = 'Resist Positive Energy';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You touch one willing creature. They receive a +3 bonus to all Saves vs. Positive energy damage and effects.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The touched creature also gains Damage Resistance to Positive Energy damage</dd>
    <dt>Heightened (+2)</dt> <dd>The touched creature is Immune to Positive Energy damage</dd>
    <dt>Permanency (Requires a 6th Level Spell Slot)</dt> <dd>7,000 gp. 5 CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Permanency', 'Positive'], 0);

        $spell              = new Spell;
        $spell->name        = 'Resist Turning';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch, 15-ft radius';
        $spell->duration    = '10 minutes or until dispelled';
        $spell->description = '<p>This spell protects undead creatures from being turned or commanded. When a turning attempt is made against a protected undead, the DM secretly rolls a single resistance roll. The resistance Succeeds on a DC 13. Successful resistance means the turning attempt fails. This spell ends after protecting against a Turning or Rebuke attempt (success or fail)</p>
<p>You may center this spell on yourself, on a particular touched creature or object, or ona fixed location and moves with the target of the spell.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Necromancy'], 2);

        $spell              = new Spell;
        $spell->name        = 'Resistance';
        $spell->casting     = 'Reaction';
        $spell->targets     = 'Self';
        $spell->duration    = 'Until the beginning of your next turn';
        $spell->description = '<p>When you cast this spell, select one of the following.</p>
<ul>
    <li>Acid</li>
    <li>Cold</li>
    <li>Electricity</li>
    <li>Fire</li>
    <li>Light</li>
    <li>Poison</li>
    <li>Sonic</li>
</ul>
<p>You gain a +3 bonus to your Save against the chosen type for the duration.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The Duration becomes 1 minute, and Double the Duration for each additional Spell Level</dd>
    <dt>Permanency (+7)</dt> <dd>10 CON Damage, 10,000 gp</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Acid', 'Cold', 'Electricity', 'Fire', 'Light', 'Poison', 'Sonic'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Resounding Thunder';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '120 feet';
        $spell->area           = '30-ft radius emanation';
        $spell->duration       = '5 rounds';
        $spell->description    = '<p>You create waves of crashing sound continuously upon those in the Area. When you cast this spell, and for any creature that starts their turn within the Area suffers 4D6 Sonic Damage unless they make a CON Save for Half Damage. If they Fail the Save, they are also Deafened.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half Damage and not Deafened</dd>
    <dt>Failure</dt> <dd>Full Damage and Deafened</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic', 'Auditory'], 5);

        $spell              = new Spell;
        $spell->name        = 'Restful Cloak';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '8 hours';
        $spell->description = '<p>A cloak you are wearing transforms into a canvas tent large enough to hold four Medium creatures, firmly pitched in a flat area adjacent to you (if there is no such area, this spell simply fails). A creature regains 1 hit point for each hour it rests in the tent, in addition to any other benefits of resting. Additionally, a fatigued creature resting within the tent for 1 hour loses the fatigued condition, but a creature cannot recover from being fatigued more than once per casting of restful tent. At the end of the spell’s duration, the tent transforms back into a cloak. If the tent is moved prior to the expiration of the spell’s duration, the spell immediately ends.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Restore Senses';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You can counteract a single effect making the target Blinded or Deafened. This can counteract both temporary magic and permanent consequences of magic, but it doesn't cure someone who is missing the sense from some natural state or effect, such as from birth or from a nonmagical wound or toxin.</p>";
        $spell->heightened  = "<dl>
    <dt>Heightened (+4)</dt> <dd>The spell's range increases to 30 feet, and you can target up to 10 creatures. You can choose the effect to counteract separately for each selected creature.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Healing', 'Abjuration'], 2);

        $spell              = new Spell;
        $spell->name        = 'Restoration';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You touch a creature and can end either one cure disease or one condition afflicting it. The condition can be Blinded, Deafened, Paralyzed, or Sickened.</p>';
        $spell->heightened  = "<dl>
    <dt>Heightened (+3)</dt> <dd>
        You can effect the following conditions
        <ul>
            <li>End the Fatigued Condition</li>
            <li>Reduce the Exhaustion Condition by one level</li>
            <li>One effect that Charmed or Petrified the target</li>
            <li>One Curse, including the target's attunement to a cursed magic item</li>
            <li>Recovers 1 point of Ability Score Damage</li>
            <li>One effect reducing the target's Hit Point maximum</li>
        </ul>
    </dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Abjuration'], 2);

        $spell              = new Spell;
        $spell->name        = 'Resurrection';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You touch a dead creature that has been dead for no more than a century, that didn’t die of old age, and that isn’t undead. If its soul is free and willing, the target returns to life with all its hit points.</p>
<p>This spell neutralizes any poisons and cures normal diseases afflicting the creature when it died. It doesn’t, however, remove magical diseases, curses, and the like; if such effects aren’t removed prior to casting the spell, they afflict the target on its return to life.</p>
<p>This spell closes all mortal wounds and restores any missing body parts.</p>
<p>Coming back from the dead is an ordeal. The target takes a −4 penalty to all attack rolls, saving throws, and ability checks. Every time the target finishes a long rest, the penalty is reduced by 1 until it disappears.</p>
<p>Casting this spell to restore life to a creature that has been dead for one year or longer taxes you greatly. Until you finish a long rest, you can’t cast spells again, and you have disadvantage on all attack rolls, ability checks, and saving throws.</p>
<p><strong>Material</strong> A diamond worth at least 1,000 gp, which the spell consumes</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ritual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Reveal Illusion';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet aura';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>This spell automatically reveals an Illusion (Figment) effect that are a Spell Level one higher than this spell or lower. This allows any observer another Save to disbelieve the Illusion with a +10 bonus to their Save. Higher level Illusion spells require a Spell check against the Illusion spell. Success means that all observers are allowed the additional Save as described with the +10 bonus, Failure means that the Illusion is not revealed and all observers continue to believe the Illusion.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increasing the Spell Level increases the Illusion spells that are automatically revealed.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 3);

        $spell              = new Spell;
        $spell->name        = 'Reveal True Shape';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'One creature within range';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You reveal the true form of a magically disguised or transformed creature, whether the target's transformation is physical (such as polymorph) or illusory (such as disguise self). The spell does not force the creature into its true form, but rather creates a perfect illusion of the creature's true form that overlaps it and hides the disguised form completely, making the true form visible to all observers. For the duration of the spell, if the target changes shape or uses illusion to disguise its appearance, observers can still see its true form, though once the spell runs out any illusions or shape changes made by the target in the meantime immediately take effect. This spell does not reveal invisible creatures, overcome effects such as blur and displacement, or penetrate mundane disguises.</p>";
        $helper->addTypesToSpell($spell, ['Divination'], 2);

        $spell              = new Spell;
        $spell->name        = 'Revelation';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->area        = '30-ft radius emanation';
        $spell->duration    = '1 round';
        $spell->description = '<p>A burst of purple light that reveals all that is hidden and shows all as they really are as with the True Seeing Spell, however, unlike True Seeing, this spell reveals to everyone. This spell does not Dispel any magical effects, only reveals them as they truly are.</p>
<dl>
    <dt>Material Components</dt> <dd>A clump of dandelion fluff and herbs worth 50 gp</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Reverse Gravity';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '100 feet';
        $spell->save_attribute = 'DEX';
        $spell->spell_creator  = 'Chronomancer';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>This spell reverses gravity in a 50-foot-radius, 100-foot high cylinder centered on a point within range. All creatures and objects that aren’t somehow anchored to the ground in the area fall upward and reach the top of the area when you cast this spell. A creature can make a DEX Save to grab onto a fixed object it can reach, thus avoiding the fall.</p>
<p>If some solid object (such as a ceiling) is encountered in this fall, falling objects and creatures strike it just as they would during a normal downward fall. If an object or creature reaches the top of the area without striking anything, it remains there, oscillating slightly, for the duration.</p>
<p>At the end of the duration, affected objects and creatures fall back down.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 7);
        $spell->materials()->save(Material::where('name', 'Lodestone')->firstOrFail());
        $spell->materials()->save(Material::where('name', 'Diamond')->firstOrFail(), ['meta' => 'Iron Fillings']);

        $spell              = new Spell;
        $spell->name        = 'Revival';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'Dead creatures and living creatures of your choice within range';
        $spell->duration    = 'Sustained, up to 1 minute';
        $spell->description = "<p>A burst of healing energy soothes living creatures and temporarily rouses those recently slain. All living targets regain 10D8 +40 Hit Points. In addition, you return any number of dead targets to life temporarily, wht eh same effects and limitations as Raise Dead. The raised creatures have a number of temporary Hit Points equal to the Hit Points you gave living creatures, but no normal Hit Points in other ways, and once Revival's duration ends, they lose all temporary Hit Points and die. Revival can't resurrect creatures killed by Disintegrate or Death effects. It has no effect on Undead.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Healing', 'Positive'], 10);

        $spell               = new Spell;
        $spell->name         = 'Revive Undead';
        $spell->casting      = '10 minutes (Material, Somatic, Verbal, Ability Damage, Secondary Casters)';
        $spell->range        = 'Touch';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>2 CON damage</dd>
    <dt>Secondary Casters</dt> <dd>At least 2 other spell casters, each must cast Animate Undead</dd>
</dl>';
        $spell->duration     = 'Instantaneous';
        $spell->description  = "<p>You restore animation to a destroyed undead creature. It does not matter how long the undead creature has been destroyed, but the animating spirit must be free and willing to return. If the subject's animating spirit is not willing to return, the spell does not work.</p>
<p>You must have at least 2 pounds of the original body (in whatever form). The animated undead revives with 1 Hit Point, as a new body is slowly formed by this spell.</p>
<p>Undead that was destroyed by a Turning effect and the remains Consecrated cannot be revived by this spell.</p>
<dl>
    <dt>Material Casting</dt> <dd>A black pearl worth at least 5,000 gp</dd>
</dl>";
        $spell->heightened   = '<dl>
    <dt>Heightened (+3)</dt> <dd>You can revive a destroyed undead that was Consecrated.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead'], 6);

        $spell              = new Spell;
        $spell->name        = 'Revivify';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You touch a creature that has died within the last minute. That creature returns to life with 1 Hip Point. This spell can\'t return to life a creature that has died of old age, nor can it restore any missing body parts.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 3);
        $spell->materials()->save(Material::where('name', 'Diamond')->firstOrFail(), ['price' => '10 gp', 'meta' => 'Consumed']);

        $spell              = new Spell;
        $spell->name        = 'Ride the Lightning';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '20 rounds';
        $spell->description = '<p>You may transform into lightning as an Action and instantly travel in a straight line to a distance of up to 120 feet, rematerializing in the new location as a Free Action. This movement does not provoke Attacks of Opportunity. Creatures in this line take 10D6 points of Electrical damage and are staggered for 1 round (a successful DEX Save halves the damage and negates the Staggered condition, spell resistance applies). Objects in your path are damaged as well, with combustible objects being set ablaze and metals with low melting points melted. If your path is interrupted by a barrier or otherwise deflected, you materialize short of your final destination in the nearest open space; targets in the line to that point take damage as normal. You are immune to Electricity while this spell lasts.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Electricity'], 8);

        $spell              = new Spell;
        $spell->name        = 'Ride the Waves';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '6 hours';
        $spell->description = '<p>The target gains the ability to breathe water and a Swim Speed of 30 feet. This Swim Speed means the target also gains the standard +8 bonus on Swim checks and the ability to take 10 on Swim checks even while distracted or endangered. The target can use the run action while swimming, provided it swims in a straight line. The spell does not make the target unable to breathe air.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Ridiculous Notion';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '30-foot aura';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 round';
        $spell->description    = '<p>You speak a phrase so absurd that it can cause creatures to laugh. Each target must attempt a WIS Save. A target is bolstered against your Ridiculous Notion once it succeeds at its Save or once the duration ends if it fails the Save.</p>';
        $spell->saves          = "<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>The target breaks into a paroxysm of laughter. It's slowed 1 and can't make Reactions</dd>
    <dt>Critical Failure</dt> <dd>THe target laughs so hard it falls prone and can't use any Actions, Reactions, or Free Actions.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Emotion'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Righteous Glare';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->area           = '60-ft cone emanation';
        $spell->targets        = 'Self';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You gain a gaze attack. Evil creatures with 5 HD or fewer within the area must make a CHA Save or Die. Even if the Save Succeeds, the creature is affected with Fear for 5 rounds.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>
        <ul>
            <li>Evil creatures with 5 HD or fewer are affected by Fear</li>
            <li>Evil creatures with greater than 5 HD are not affected by this spell</li>
            <li>Neutral creatures are not affected by this spell</li>
        </ul>
    </dd>
    <dt>Failure</dt> <dd>
        <ul>
            <li>Evil creatures with 5 HD or fewer die</li>
            <li>Evil creatures with greater than 5 HD are affected by Fear</li>
            <li>Neutral creatures are affected by Fear</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Good', 'Death'], 7);

        $spell              = new Spell;
        $spell->name        = 'Ripen Plant';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One plant touched';
        $spell->duration    = '1 turn';
        $spell->description = "<p>This spell causes a single plant to mature and ripen (to bloom, to produce ready fruit, or simply to yield seeds, as you desire) within the spell's duration. A plant of any size and nature can be affected, and it need not be a variety that is familiar to you. The bloom, seeds or fruits grow towards you (so as to drop into your hand) unless you direct the plant to present its bounty to someone else. The magic affects only part of the plant, leaving the rest to grow normally. Once the spell ends, the plant affected radiates no magic and is entirely normal.</p>
<p>The magic will not work on plants that are being magically controlled by another entity. In such case, this spell identifies the controlling entity and the plant is held as if under the effect of a Hold Person spell.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell               = new Spell;
        $spell->name         = 'Rite of Rebirth';
        $spell->casting      = '2 days (Material, Somatic, Verbal)';
        $spell->targets      = 'One willing humanoid';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 2 additional casters, all of which must be devoted to Bahamut</dd>
</dl>';
        $spell->duration     = 'Instantaneous';
        $spell->description  = '<p>This ritual permanently polymorphes a willing humanoid into a dragonborn. It was created by the Bahamut, the Platinum Dragon, in an attempt to bolster his ranks in his war against Tiamat.</p>
<p>Those who commit to this demanding ritual must meditate for a full day and night, contemplating and remembering all they are to give up. Those who elect to go through with the ritual must enter a specially-built egg-shaped chamber for a full day and night, falling into a deep while within the chamber. They then emerge the next dawn as an adult dragonborn (regardless of their previous age).</p>
<p>This ritual is only known to the Sisterhood of Essembra, a small and isolated female-only organization who live in the forest of Battledale. Most of the members of the Sisterhood are half-dragon descendants of the notorious song dragon Essembramaerytha, female silver dragons, dragonborn of Bahamut, other humanoids who appose Tiamat and a few members of various fey races.</p>
<dl>
    <dt>Material Components</dt> <dd>The egg-shaped chamber, which costs 5,000 gp to craft (Craft Wondrous Item feat).</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Ritual', 'Transmutation', 'Polymorph'], 8);

        $spell              = new Spell;
        $spell->name        = 'Rite of Thorns';
        $spell->casting     = '2 hours (Material, Somatic, Verbal, Secondary Casters, Ability Drain)';
        $spell->targets     = 'An area surrounded by lush vegetation and/or trees 100 ft by 100 ft';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>This ritual requires a number of druids to enter into a trance for 4 hours, until the final recitation is complete. Once complete, the target area is surrounded by thorns and brambles, shielding it from intruders. Treat this as a Wall of Thorns spell except as noted here.</p>
<dl>
    <dt>Material Components</dt> <dd>Stone menhirs (minimum of 3) erected within the area, with glyphs and iconography dedicated to Silvanus.</dd>
    <dd>Secondary Casters</dd> <dd>At least 3 other druids of at least 5th level</dd>
    <dt>Ability Drain</dt> <dd>The caster takes 4 CON damage and all the secondary casters takes 1 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Ritual', 'Transmutation', 'Plant'], 7);

        $spell              = new Spell;
        $spell->name        = 'The Ritual of Honest Pain';
        $spell->casting     = '2 hours (Material, Somatic, Verbal, Skill Check, Secondary Caster, Ability Loss)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Worshiper of Cyric touched';
        $spell->duration    = 'Permanent';
        $spell->description = "<p>The recipient of this ritual gains a +1 bonus to the following skills:</p>
<ul>
    <li>Animal Handling</li>
    <li>Deception</li>
    <li>Diplomacy</li>
</ul>
<p>The recipient's lies cannot be detected as such by spells of lower than 5th level and they can lie freely within the bounds of a Zone of Truth or similar spell.</p>
<dl>
    <dt>Material Components</dt> <dd>The still beating heart of a Nightmare, which the recipient must eat raw</dd>
    <dt>Skill Check</dt> <dd>Religion 15</dd>
    <dt>Secondary Casters</dt> <dd>A total of 3 casters must perform the Ritual, each of which must succeed on the skill check</dd>
    <dt>Ability Loss</dt> <dd>Permanently loss 1 CON</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Ritual', 'Enchantment', 'Illusion'], 5);

        $spell              = new Spell;
        $spell->name        = 'Ritual of the March';
        $spell->casting     = 'Varies (Somatic, Secondary Casters)';
        $spell->range       = '0';
        $spell->area        = '100-ft radius emanation';
        $spell->targets     = 'All participant singers of the ritual';
        $spell->duration    = 'Concentration (singing) up to 3 days';
        $spell->description = '<p>This ancient ritual is used by the dwarves of Delzoun to traverse great distances as a unified army.</p>
<p>During the march, all dwarves involved in the march must sing the ancient marching songs of old Delzoun. The magic of the ritual allows the participants to march (and fight) without rest for up to 3 days (no CON check required). Those who cannot or do not sing do not gain the benefits of this ritual.</p>
<p>Spell casters do not regain spent spell slots and all abilities that require any form of rest to recover does not do so.</p>
<dl>
    <dt>Secondary Casters</dt> <dd>Due to the range, a priest is needed to encompass all the participants within their area of effect (although only one caster is required to have the spell memorized and cast).</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Ritual', 'Enchantment'], 5);

        $spell              = new Spell;
        $spell->name        = 'Rock Whip';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '10 feet';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 rounds';
        $spell->description = "<p>A 15-foot-long lash of crumbling crystal and earth emerges from the palm of your hand. This weapon is treated as a non-magical whip that deals 1D8 points of Bludgeoning damage.</p>
<p>You can wield this weapon as a whip as if you were proficient with it, and it isn't subject to the Disarm or Sunder combat Talent. The whip passes through natural unworked stone effortlessly, allowing you to ignore cover between you and your target from such sources. Armor and natural armor have no effect on the damage dealt by a rock whip (unlike a normal whip), but the whip deals no damage to outsiders with the Earth subtype. Attacks with a Rock Whip strike with resounding force; you can make a free Bull Rush combat Talent against any creature you strike with a rock whip, using your caster level in place of your base attack bonus and your primary casting ability score modifier in place of your STR modifier.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Rockburst';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet, 20-ft radius burst';
        $spell->targets        = 'Stone or rock formation in range';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You cause a stone object, with volume of at least 8 cubic feet, to explode. Rock shards fly outward from the detonation, and all creatures with the area of the spell take 1D4 +10 points of Bludgeoning damage unless they make a successful DEX Save.</p>
<p>A magic stone object, or a non-magical stone object in the possession of another creature, gets a CON Save to negate the effect. Creatures cannot be affected by this spell.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 3);

        $spell              = new Spell;
        $spell->name        = 'Rope Trick';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You touch a length of rope that is up to 60 feet long. One end of the rope then rises into the air until the whole rope hangs perpendicular to the ground. At the upper end of the rope, an invisible entrance opens to an extradimensional space that lasts until the spell ends.</p>
<p>The extradimensional space can be reached by climbing to the top of the rope. The space can hold as many as eight Medium or smaller creatures. The rope can be pulled into the space, making the rope disappear from view outside the space.</p>
<p>Attacks and spells can’t cross through the entrance into or out of the extradimensional space, but those inside can see out of it as if through a 3-foot-by-5-foot window centered on the rope.</p>
<p>Anything inside the extradimensional space drops out when the spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 4);

        $spell                = new Spell;
        $spell->name          = 'Rosemantle';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Lathander';
        $spell->range         = 'Touch';
        $spell->targets       = 'Creature touched';
        $spell->duration      = '1 minute';
        $spell->description   = '<p>You cause the target to glow with a soft, faint, rosy radiance equal to candlelight.  This glow protects the target against effects that work by directly causing pain, nausea, and fear effects by granting a +5 sacred bonus on Saves against those spells and effects. The target also becomes temporarily immune to poison (as the Delay Poison spell).</p>
<p>This spell only suppresses these effects, not negate them, so the effects resume when this spell expires.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Rouse';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'Sleeping living creature in range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>With a loud snap, you cause any sleeping creature in range to awaken.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Rune of Returning';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One inanimate solid object';
        $spell->duration    = '24 hours';
        $spell->description = '<p>You scribe an invisible rune (similar to Arcane Mark) onto a solid object of at least 1 lb. Once the spell is complete, the rune becomes invisible. For the duration, you can, as an Action, Teleport to the location where the rune is, then the spell ends and the rune no longer exists. After Teleporting in this way, you cannot take any other Actions until your next turn.</p>
<p>The mark created by this spell can be detected in the same ways that an invisible Arcane Mark can be.</p>
<p>You are not alerted if the mark is dispelled or the object upon which it is inscribed is destroyed. Any attempt to Teleport back to a dispelled or destroyed mark uses up your Action and fails.</p>
<p>If you created the rune upon a portable object, that object can be moved. You have no knowledge of whether your mark has been moved or where its current location is. If the mark has been moved to another plane, then the Teleport fails and the spell ends.</p>
<p>If the object inscribed is in a location where there is no room for your body to appear next to, then you take 1D6 points of damage and are shunted to a random open space within 100 feet. If there is no free space within 100 feet, you take 2D6 damage and are shunted to a random location within 1,000 feet. If there is no free space within 1,000 feet, you take 4D6 points of damage and the spell fails and ends.</p>
<dl>
    <dt>Material Components</dt> <dd>The blood of an owl, hawk, or eagle</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation', 'Rune'], 5);

        $spell              = new Spell;
        $spell->name        = 'Rusting Grasp';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Any nonmagical metal item you touch becomes instantaneously rusts, pitted and worthless, effectively destroyed.</p>
<p>Make a melee spell attack against a creature or nonmagical object no greater than 3 feet in any dimension.</p>
<p>If the target was an object, on a hit all metal components of that object are instantly destroyed.</p>
<p>If the target was a creature, on a hit choose either a metal shield or weapon it is wielding, or metal armor it is wearing. That item takes a permanent and cumulative -1 penalty to the AC it offers. The armor is destroyed when it has an AC of 10 or a shield that drops to a +0 bonus is destroyed. Metal weapons in use by an opponent targeted by this spell are more difficult to grasp. If you hit the weapon with this attack (not the other way around) the metal weapon takes a permanent and cumulative -1 penalty to damage rolls. If its penalty drops to -5, the weapon is destroyed. Use the AC of the creature wielding the weapon to determine the AC of the weapon. Using this spell to damage weapons provokes an opportunity attack.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);
    }
}
