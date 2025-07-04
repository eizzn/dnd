<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeatsArcaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var SeedHelper $helper * */
        $helper = app()->seedHelper;

        $preText = '<p>The gold and time you must spend to copy a spell of this school into your spellbook is halved.</p>';
        $text    = '<p>You may have no more than 4 Wizard School feats.</p>';

        $feat              = new Feat;
        $feat->name        = 'Abjurer';
        $feat->description = $preText . "\n<ul>
    <li>
        <p>You can weave magic around yourself for protection. When you cast an Abjuration spell of 1st level or higher, you can simultaneously use a strand of the spell's magic to create a magical ward on yourself (called an Abjuration Shield) that lasts until you finish a long rest. The ward has hit points equal to twice your arcane spell casting level + your INT modifier. Whenever you take damage, the ward takes the damage instead. If this damage reduces the ward to 0 hit points, you take any remaining damage.</p>
        <p>While your Abjuration Shield has 0 hit points, it can't absorb damage, but its magic remains. Whenever you cast an Abjuration spell of 1st level or higher, your Abjuration Shield regains a number of hit points equal to twice the level of the spell.</p>
        <p>Once you create your Abjuration Shield, you can't create it again until you finish a long rest.</p>
    </li>
    <li>You may cast the Shield spell as a Reaction but as a Cantrip.</li>
    <li>You gain the Cantrip Caster Class Feature, but it only applies to Abjuration Cantrips.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Abjuration', 'Wizard School', 'Arcane']);

        $feat              = new Feat;
        $feat->name        = 'Expert Abjurer';
        $feat->description = "<p>You gain the following:</p>
<ul>
    <li>You gain a +3 bonus to all Saves vs Spells.</li>
    <li>You gain a Reaction. This Reaction can only be used to Counter Spells.</li>
    <li>When you must make an ability check as a part of casting an Abjuration spell or when Countering a spell, you may add your Proficiency bonus to that ability check</li>
</ul>
\n" . $text;
        $helper->addTypesToFeat($feat, ['Abjuration', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Abjurer']);

        $feat              = new Feat;
        $feat->name        = 'Master Abjurer';
        $feat->description = "<p>You gain the following:</p>
<ul>
    <li>You gain an additional Spell Slot at every Spell Level that you can cast. You may only cast an Abjuration spell with these additional Spell Slots.</li>
    <li>Double the Duration of all Abjuration Spells you cast.</li>
    <li>Casting the Shield Spell now requires 2 fewer Casting Actions. When you cast the Shield Spell in this way, it does not trigger your Abjuration Shield.</li>
    <li>Whenever you cast the Shield spell, treat it as if it has been Heightened +3 without having to use a higher level Spell Slot.</li>
</ul>
\n" . $text;
        $helper->addTypesToFeat($feat, ['Abjuration', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Expert Abjurer']);

        $feat              = new Feat;
        $feat->name        = 'Conjurer';
        $feat->action_type = 'Action';
        $feat->description = $preText . "\n" . '<ul>
    <li>
        <p>You can use an Action to conjure up an inanimate object in your hand or on the ground in an unoccupied space that you can see within 10 feet of you. This object can be no larger than 3 feet on a side and weigh no more than 10 pounds, and its form must be that of a nonmagical object that you have seen.</p>
        <p>The object is visibly magical, radiating dim light out to 5 feet</p>
        <p>The object disappears after 1 hour, when you use this feature again, or if it takes or deals any damage.</p>
    </li>
    <li>You gain the Cantrip Caster Class Feature, but it only applies to Conjuration Cantrips.</li>
</ul>' . "\n" . $text;
        $helper->addTypesToFeat($feat, ['Conjuration', 'Wizard School', 'Arcane']);

        $feat              = new Feat;
        $feat->name        = 'Expert Conjurer';
        $feat->action_type = 'Action';
        $feat->description = '<ul>
    <li>Your Concentration for Summoning Spells cannot be broken</li>
    <li>As an Action, you can teleport up to 30 feet. You must be able to see where you are teleporting to. You may use this ability 3 times per Long Rest. When you cast a Conjuration spell of 5th level or higher, you recover 1 use (you can never have more than 3 uses at a time). When you take a Long Rest, you recover all uses.</li>
</ul>' . "\n" . $text;
        $helper->addTypesToFeat($feat, ['Conjuration', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Conjurer']);

        $feat              = new Feat;
        $feat->name        = 'Master Conjurer';
        $feat->description = "<p>You gain the following:</p>
<ul>
    <li>You may Concentrate on an additional Summoning Spell.</li>
    <li>Spells with the Summoning trait are automatically Heightened +1 without having to use a Higher Level Spell Slot (up to your highest Spell Slot that you can cast).</li>
    <li>You may cast the spells Portal Barricade, Portal-to-Portal Redirect, and Portal Reformat once per day as a Spell Like Ability, usable once per day.</li>
</ul>
\n" . $text;
        $helper->addTypesToFeat($feat, ['Conjuration', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Expert Conjurer']);
        $helper->addSpellsToFeat($feat, [
            5 => ['Portal Barricade'],
            6 => ['Portal-to-Portal Redirect'],
            8 => ['Portal Reformat'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Diviner';
        $feat->description = $preText . "\n" . '<ul>
    <li>
        <p>Glimpses of the future begin to press in on your awareness. When you finish a Long Rest, roll two 3D6s and record the numbers rolled. You can replace any Attack Roll, Save, or ability check made by you or a creature that you can see with one of these Foretelling rolls. You must choose to do so before the roll, and you can replace a roll in this way only once per turn.</p>
        <p>Each Foretelling roll can be used only once. When you finish a Long Rest, you lose any unused Foretelling rolls.</p>
    </li>
    <li>You gain the Cantrip Caster Class Feature, but it only applies to Divination Cantrips.</li>
    <li>You gain a +3 bonus to Saves vs Illusion Spells.</li>
</ul>' . "\n" . $text;
        $helper->addTypesToFeat($feat, ['Divination', 'Wizard School', 'Arcane']);

        $feat              = new Feat;
        $feat->name        = 'Expert Diviner';
        $feat->description = "<p>Gain the effects of one of the following that lasts until you Rest: </p>
<ul>
    <li>Darkvision</li>
    <li>Ethereal Sight</li>
    <li>Comprehension</li>
    <li>See Invisibility</li>
</ul>
<p>Each time after resting, you may select a different power.</p>\n" . $text;
        $helper->addTypesToFeat($feat, ['Divination', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Diviner']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Foretelling Deja Vu'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Master Diviner';
        $feat->description = "<p>You gain the following:</p>
<ul>
    <li>When you cast a Divination spell of 2nd level or higher using a Spell Slot, you regain one expended Spell Slot. The slot you regain must be of a level lower than the spell you cast and can't be higher than 5th level.</li>
    <li>You now get 5 Foretelling rolls instead of two.</li>
    <li>You gain a +5 bonus to Saves vs Illusion Spells. This replaces the +3 bonus from the Diviner Feat.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Divination', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Expert Diviner']);

        $feat              = new Feat;
        $feat->name        = 'Enchanter';
        $feat->description = $preText . "\n<p>You gain the following:</p>
<ul>
    <li>You gain 3 Spell Points.</li>
    <li>You gain a Metamagic Feat.</li>
    <li>You gain a +3 bonus on all Concentration checks.</li>
    <li>You gain the Cantrip Caster Class Feature, but it only applies to Enchantment Cantrips.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Enchantment', 'Wizard School', 'Arcane']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Boon', 'Hex'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Expert Enchanter';
        $feat->description = "<p>You gain the following:</p>
<ul>
    <li>You gain 3 Spell Points.</li>
    <li>You gain a Metamagic Feat.</li>
    <li>You gain a Talent.</li>
    <li>You may now Concentrate on an additional Enchantment spell at the same time.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Enchantment', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Enchanter']);

        $feat              = new Feat;
        $feat->name        = 'Master Enchanter';
        $feat->description = "<p>You gain the following:</p>
<ul>
    <li>You gain 3 Spell Points.</li>
    <li>You gain a Metamagic Feat.</li>
    <li>When you cast Permancy to make a spell permanent, the gold cost is reduced by 5%, and any Ability Damage is reduced by 1.</li>
    <li>Your Concentration for Enchantment Spells cannot be broken.</li>
    <li>You may Concentrate on an additional 2 Enchantment spells at the same time. This replaces the additional Enchantment Spell you can Concentrate on from Expert Enchanter.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Enchantment', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Expert Enchanter']);

        $feat              = new Feat;
        $feat->name        = 'Evoker';
        $feat->description = $preText . "\n<ul>
    <li>You gain an additional Cantrip Slot. This additional Cantrip slot must be an Evocation Spell.</li>
    <li>You gain an additional Spell Slot. This extra Spell Slot must be used to cast an Evocation spell. The maximum level of the extra Spell Slot must be 2 levels lower than your highest level Spell Slot with a minimum Spell Slot of level 1 and a maximum of 4th level. You may choose the level of the extra Spell Slot with each Long Rest.</li>
    <li>All of your Evocation spells deals an additional +1 Damage per die.</li>
    <li>You gain the Cantrip Caster Class Feature, but it only applies to Evocation Cantrips.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Evocation', 'Wizard School', 'Arcane']);

        $feat              = new Feat;
        $feat->name        = 'Expert Evoker';
        $feat->description = "<p>You gain the following:</p>
<ul>
    <li>
        <p>Add your INT modifier to the damage of any and all Evocation spells. If the spell already adds your INT modifier, then add Double your INT modifier. This replaces the additional +1 Damage from the Evoker Feat.</p>
        <blockquote>
            You cast a Fireball.  Each target takes the normal amount of damage plus your INT modifier.
            You cast Magic Missile at one target. Each Missile deals its normal damage plus your INT modifier.
        </blockquote>
    </li>
    <li>You gain the Magic Missile Spell. If you already have the Magic Missile Spell, then you may learn any 1st level Evocation spell.</li>
    <li>You gain an additional Action. This additional Action can only be used to cast the Magic Missile Spell.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Evocation', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Evoker']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Magic Missile'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Master Evoker';
        $feat->description = "<p>You gain the following:</p>
<ul>
    <li>You gain an additional Action. This additional Action may only be used to cast Evocation spells.</li>
    <lie>Double the INT bonus to damage for Evocation spells. If the spell already adds your INT modifier, then add Triple your INT modifier.</lie>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Evocation', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Expert Evoker']);

        $feat              = new Feat;
        $feat->name        = 'Illusionist';
        $feat->description = $preText . "\n<p>You gain the following:</p>
<ul>
    <li>You gain the Cantrip Caster Class Feature, but it only applies to Illusion Cantrips.</li>
    <li>You gain an additional Cantrip Slot. This additional Cantrip Slot must be filled with an Illusion Cantrip spell.</li>
    <li>When you cast Minor Illusion, you can create both a sound and an image with a single casting of the spell.</li>
    <li>All your Illusion spell durations are increased by 2 rounds. The illusion spell does not require Concentration during these 2 additional rounds.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Illusion', 'Wizard School', 'Arcane']);

        $feat              = new Feat;
        $feat->name        = 'Expert Illusionist';
        $feat->description = "<p>You gain the following:</p>
<ul>
    <li>
        <p>You can create an illusory duplicate of yourself as an instant, almost instincual reaction to danger. When a creature makes an Attack Roll against you, you can use your Reactions to interpose the illusory duplicate between the attacker and yourself. The attack automatically misses you, then the illusion dissipates.</p>
        <p>Once you use this feature, you can't use it again until you finish a Long Rest.</p>
    </li>
    <li>You gain the Invisibility Spell. If you already have the Invisibility Spell, then you may chose any Illusion Spell instead.</li>
    <li>All your Illusion spells have their Save DC increased by +2.</li>
</ul>
\n" . $text;
        $helper->addTypesToFeat($feat, ['Illusion', 'Wizard School', 'Arcane']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Invisibility'],
        ]);
        $feat->parent_feats()->save(app()->feats['Illusionist']);

        $feat              = new Feat;
        $feat->name        = 'Master Illusionist';
        $feat->description = "<p>You gain the following:</p>
<ul>
    <li>Your Illusion Spells durations are now doubled (the duration is double before the addition 2 turns from the Illusionist feat).</li>
    <li>You may Concentrate on up to 3 Illusion Spells that require Concentration.</li>
    <li>All of your Illusion spells have their Save DC increased by +4. This replaces the same ability from the Expert Illusionist Feat.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Illusion', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Expert Illusionist']);

        $feat              = new Feat;
        $feat->name        = 'Necromancer';
        $feat->description = $preText . "\n<ul>
    <li>You gain the Cause Wounds Spell. You heal the amount of damage you deal with Cause Wounds. If you already have the Cause Wounds Spell, then you may select another 1st Level Necromancy spell of your choice.</li>
    <li>You gain the Cantrip Caster Class Feature, but it only applies to Necromancy Cantrips.</li>
    <li>Spells you cast that deal Negative Damage deal an additional +1 Negative Damage</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Necromancy', 'Wizard School', 'Arcane']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Cause Wounds'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Expert Necromancer';
        $feat->description = "<ul>
    <li>
        <p>You can now cast the Cure Wounds spell, but you may not Heighten it.</p>
        <p>If you already can cast Cure Wounds, then you may Heighten it when casting.</p>
    </li>
    <li>You gain the Animate Dead Spell. If you already have the Animate Dead Spell, then you may select a different Necromancy Spell instead.</li>
    <li>When you cast the Animate Dead Spell to maintain control over your animated undead, it reasserts control over an additional undead.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Necromancy', 'Wizard School', 'Arcane']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Cure Wounds'],
            3 => ['Animate Dead'],
        ]);
        $feat->parent_feats()->save(app()->feats['Necromancer']);

        $feat              = new Feat;
        $feat->name        = 'Master Necromancer';
        $feat->description = "<ul>
    <li>
        <p>Dominate Undead: You can now bring undead under your control, even those created by others. As an Action and 1 Spell Point, you can choose one undead that you can see within 60 feet. That creature must make a CHA Save against your Arcane Spell Save DC. If it succeeds, you can't use this feature on it again. If it fails, it becomes friendly to you and obeys your commands until you use this feature again.</p>
        <p>Intelligent undead are harder to control in this way. If the target has an INT of 8 or higher, it gains a +5 bonus to their Save. If it fails the Save and has an INT of 12 or higher, it can repeat the Save at the end of every hour until it succeeds.</p>
    </li>
    <li>You gain Resistance to Negative Energy damage. If the damage is 5 or less, then you take no damage.</li>
    <li>Your Cause Wounds Spell now has a Range of 30 feet and can be cast as a Ranged Touch attack.</li>
    <li>You may now Heighten Cure Wounds.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Necromancy', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Expert Necromancer']);

        $feat              = new Feat;
        $feat->name        = 'Transmuter';
        $feat->description = $preText . "\n<ul>
    <li>Each day, you may transmute any small non-magical metal into 1 gp worth of gold by handling it for 1 minute. You cannot turn part of a large hunk of metal into gold. You must have an amount of metal that fits in your hand.</li>
    <li>Transmutation spells you cast that have a duration have their duration doubled.</li>
    <li>You gain the Cantrip Caster Class Feature, but it only applies to Transmutation Cantrips.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Transmutation', 'Wizard School', 'Arcane']);

        $feat              = new Feat;
        $feat->name        = 'Expert Transmuter';
        $feat->description = "<p>You can create a Transmuter's Stone. It takes 8 hours and a rock of at least 2 lbs. When you do, you may imbue the stone with on of the following powers, which requires Attunement.</p>
<ul>
    <li>Darkvision out to 60 ft</li>
    <li>You gain physical wings, granting a Fly Speed equal to your Running Speed.</li>
    <li>
        Ressistance to 3 of the following
        <ul>
            <li>Acid</li>
            <li>Cold</li>
            <li>Electricity</li>
            <li>Fire</li>
            <li>Poison</li>
            <li>Sonic</li>
        </ul>
    </li>
    <li>You skin hardens, granting Resistance to Bludgeoning, Piercing, and Slashing damage</li>
    <li>You gain a +2 bonus to STR and CON</li>
    <li>One of your hands gains either claws (1D8 Slashing) or becomes a solid stone fist (1D8 Bludgeoning). You are considered to be proficient with your Natural Attack. This does not hamper your ability to cast spells, as the stone fist can still be used as a hand.</li>
</ul>
<p>Whoever is in possession of the stone gains the stone's power. If you create a new Transmuter's Stone, the previous one ceases to function.</p>\n" . $text;
        $helper->addTypesToFeat($feat, ['Transmutation', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Transmuter']);

        $feat              = new Feat;
        $feat->name        = 'Master Transmuter';
        $feat->description = "<p>It now takes you 3 hours to create your Transmuter's Stone</p>
<ul>
    <li>You may choose 2 more abilities from the Expert Transmuter list granted by your Transmuter's Stone.</li>
    <li>
        <p>You may use an Action to trigger one of the following once per day using your Transmuter's Stone.</p>
        <ul>
            <li><strong>Major Transformation</strong> You can Transmute one nonmagical object (no larger than a 5-foot-cube), into another nonmagical ofject of similar size and mass and of equal value. You must spend 10 minutes handling the object to transform it. This change is permanent.</li>
            <li>You may cast Polymorph as an Action.</li>
            <li>Dispel any Polymorph affects from a target (no Save)</li>
            <li>
                Gain immunity for 1 hour to any of the following
                <ul>
                    <li>Acid</li>
                    <li>Cold</li>
                    <li>Electricity</li>
                    <li>Fire</li>
                    <li>Poison</li>
                    <li>Sonic</li>
                </ul>
            </li>
            <li>Cast Stoneskin on the Possessor</li>
        </ul>
    </li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Transmutation', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Expert Transmuter']);

        $feat              = new Feat;
        $feat->name        = 'Wand Caster';
        $feat->description = "<ul>
    <li>You now require a magical Wand or magical Staff to cast your Cantrips.</li>
    <li>You gain the Cantrip Caster Class Feature.</li>
    <li>You gain 3 Spell Points</li>
    <li>You gain a +1 bonus to Hit with Ray attacks</li>
    <li>
        <p>You may cast Spells through your Wand or Staff by adding 2 Casting Actions, and 2 Spell Points per Spell Level of the spell. Casting a spell in this way does not use up your Spell Slot.</p>
        <blockquote>You decide to cast the Armor of Frost Spell by adding 2 additional Casting Actions and spending 2 Spell Points. Since you now require 4 Actions to cast the spell, the spell resolves on your next turn, and you have 1 less Action during that turn. The spell is cast without using up any of your Spell Slots.</blockquote>
    </li>
    <li>You can draw Wands as a Free Action, as if you had the Quick Draw Talent.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Wand', 'Wizard School', 'Arcane']);

        $feat              = new Feat;
        $feat->name        = 'Expert Wand Caster';
        $feat->description = "<p>You gain the following</p>
<ul>
    <li>You gain 3 Spell Points</li>
    <li>Your Ray attacks deal an additional +1 per die of damage.</li>
    <li>You gain the ability to recharge a Wand. Once per day, you can spend 1 Spell Point and add 1 Charge to a magical Wand by focusing on it for 1 hour.</li>
    <li>When you create a Magical Wand, reduce the cost by -50 gp (to a minimum of 10 gp).</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Wand', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Wand Caster']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Siphon'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Master Wand Caster';
        $feat->description = "<p>You gain the following</p>
<ul>
    <li>You gain 3 Spell Points</li>
    <li>While wielding a Staff, you gain a +1 Dodge bonus to AC</li>
    <li>Double the range of all your Ray attacks</li>
    <li>As an Action, you may spend Spell Points and channel them through a Wand or Staff to deal 1D6 Force damage per Spell Point spent by making a Ranged Touch Attack. You may not spend more Spell Points during a turn than your Spell Caster Level.</li>
    <li>You can now recharge 3 charges to a Wand or Staff per day by Spending a Spell Point per charge and focusing on the Wand or Staff for 1 hour, once per day.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Wand', 'Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Expert Wand Caster']);

        $feat              = new Feat;
        $feat->name        = 'Ring Caster';
        $feat->trigger     = 'You are about to cast an Arcane Cantrip Spell and you are wearing a magical ring';
        $feat->description = "<ul>
    <li>
        You gain the ability to craft a magical ring which requires Attunement for 50 gp. You may imbue one of the following into this ring:
        <ul>
            <li>+1 bonus to all Saves</li>
            <li>+1 Damage to all Melee Weapon Attacks</li>
            <li>+2 bonus to all Perception checks</li>
            <li>3/day, you may cast the Light Spell.</li>
            <li>1/day, you may cast the True Strike Spell as a Free Action.</li>
        </ul>
    </li>
    <li>You learn an Additional Arcane Cantrip Spell</li>
    <li>You may cast an Additional Arcane Cantrip Spell per day</li>
    <li>When you cast an Arcane Cantrip Spell and you are wearing a magical ring, then you may cast the Cantrip with one less Casting Action. Casting a Cantrip in this way causes it to be cast with no Heightening. You cannot remove a Materical Casting Action.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Wizard School', 'Arcane']);

        $feat              = new Feat;
        $feat->name        = 'Expert Ring Caster';
        $feat->description = "<ul>
    <li>You gain 2 Spell Points</li>
    <li>You gain a Heroic Surge</li>
    <li>All your Force spells are automatically Heightened +2 without having to use a higher level Spell Slot.</li>
    <li>You may use Heroic Surges to fulfill the Somatic Casting of an Arcane Spell of 1st through 3rd Level. You must also spend a number of Spell Points equal to the Spell Level of the Spell being cast. If you use a Heroic Surge in this way, you may not cast another spell this turn and you may not activate a Wand or Staff this turn.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Ring Caster']);

        $feat              = new Feat;
        $feat->name        = 'Master Ring Caster';
        $feat->description = "<ul>
    <li>You gain 3 Spell Points</li>
    <li>You gain a Heroic Surge</li>
    <li>All your Force spells are automatically Heightened +3 without having to use a higher level Spell Slot.</li>
    <li>You may use Heroic Surges to fulfill the Somatic Casting of an Arcane Spell of 4th or 5th Level. You must also spend a number of Spell Points equal to the Spell Level of the Spell being cast. If you use a Heroic Surge in this way, you may not cast another spell this turn and you may not activate a Wand or Staff this turn.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Wizard School', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Expert Ring Caster']);

        $feat              = new Feat;
        $feat->name        = 'Shadow Weave Caster';
        $feat->requirement = 'You cannot have the Diviner, Evoker, or Transmuter Wizard School feats, and you can never take those feats in the future.';
        $feat->description = $preText . "\n<p>From now on, your Spells use the Shadow Weave instead of the Weave. You gain the following:</p>
<ul>
    <li>Divination, Evocation, and Transmutation spells all require a Spell Slot 1 level higher to cast. This means you cannot cast Cantrips of those schools as Cantrips and require at least a 1st level spell to cast.</li>
    <li>When you gain this feat, you lose 1 point of WIS and gain 1 point of INT and CHA</li>
    <li>You gain the Cantrip Caster Class Feature</li>
    <li>You gain Darkvision out to 60'. If you already have Darkvision, then the range is increased by 60'.</li>
    <li>The Shadow Weave blurs your appearance in darkness. You gain the Stealth Skill as a Class Skill and you gain a +2 bonus on Stealth Checks.</li>
    <li>While you are in darkness, you may spend 1 Spell Point as an Action to become Invisibile (as the spell). This effect ends if you Attack, Cast a Spell, or are exposed to any light (magical or mundane).</li>
    <li>Because your Spells are from the Shadow Weave, your Spells cannot be Countered by Spells from the Weave. They can be Countered by Spells from the Shadow Weave. You cannot use your Spells to Counter Weave Spells.</li>
    <li>You can activate magic items that use the Shadow Weave without taking WIS damage. Whenever you create a new Magic Item, it uses the Shadow Weave.</li>
</ul>
\n" . $text;
        $helper->addTypesToFeat($feat, ['Shadow Weave', 'Wizard School', 'Arcane', 'Divine']);

        $feat              = new Feat;
        $feat->name        = 'Expert Shadow Weave Caster';
        $feat->description = "<p>You gain the following:</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>Spells with the Darkness or Shadow Type have their Duration Doubled and are considered Heightened to your highest Spell Slot without increasing the Spell Slot used.</li>
    <li>While you are in darkness, as a Double Action, you may spend 2 Spell Points to Teleport to another area in darkness (as the Misty Step Spell)</li>
    <li>Attempts to Dispell your Enchantments suffer a -5 penalty to the Dispell Check unless the source uses the Shadow Weave.</li>
    <li>Divination Spells with the Detect Type do not work on you unless the source uses the Shadow Weave</li>
    <li>Your Figment Spells are harder to disbelieve. Disbelievers suffer a -3 penalty.</li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Shadow Weave', 'Wizard School', 'Arcane', 'Divine']);
        $feat->parent_feats()->save(app()->feats['Shadow Weave Caster']);
        $helper->addSpellsToFeat($feat, [
            5 => ['Shadow Evocation', 'Shadow Guardian'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Master Shadow Weave Caster';
        $feat->description = "<p>You gain the following:</p>
<ul>
    <li>You gain 5 Spell Points</li>
    <li>As an Action, you may spend 1 Spell Point to cast the spell Darkness</li>
    <li>While you are in darkness, as a Triple Action, you may spend 3 Spell Points to Teleport to a known place that is in Shadow or Darkness (as the Teleport spell).</li>
    <li>Divination Spells with the Scrying Type do not work on you unless the source uses the Shadow Weave</li>
    <li>When you cast the spell Create Undead, you may choose Incorporeal Undead creatures with the same or lower CR</li>
    <li>
        <p>If you have the Enhance Familiar Feat, you may choose one of the following instead</p>
        <table>
            <thead>
                <tr>
                    <th>Spell Slot Sacrificed</th>
                    <li>Undead</li>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>5th</td>
                    <td>Shadow</td>
                </tr>
                <tr>
                    <td>6th</td>
                    <td>Spectre</td>
                </tr>
                <tr>
                    <td>7th</td>
                    <td>Ghost</td>
                </tr>
                <tr>
                    <td>8th</td>
                    <td>Wraith</td>
                </tr>
            </tbody>
        </table>
    </li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Shadow Weave', 'Wizard School', 'Divine']);
        $feat->parent_feats()->save(app()->feats['Expert Shadow Weave Caster']);

        $feat              = new Feat;
        $feat->name        = 'Find Familiar';
        $feat->description = "<p>An animal serves you and assists your spellcasting. You gain a familiar. Select a Monster with the Animal type and a CR of 0.</p>\n" . $text;
        $helper->addTypesToFeat($feat, ['Arcane', 'Wizard School']);

        $feat              = new Feat;
        $feat->name        = 'Enhance Familiar';
        $feat->description = "<ul>
    <li>
        <p>You gain the Animal Companion feat. The Animal Companion you gain is now your Familiar (this Animal Companion replaces the Familiar you get from Find Familiar)</p>
        <p>If you gain additional Animal Companions, they all also count as your Familiar and have all the abilities of Familiars.</p>
    </li>
    <li>
        <p>You can assign your familiar the task of concentrating on a spell or spell-like ability that is maintained through Concentration. You can act normally while your familiar concentrates on the spell.</p>
        <p>Your familiar can concentrate on only one spell at a time. If necessary to maintain the spell, your familiar makes Concentration checks for you, using your Concentration modifier. You do not have to make Concentration checks for circumstances such as taking damage, but if your familiar takes damage, then it must make a Concentration check to maintain the spell.</p>
        <p>If you have multiple familiars, then each one can concentrate on a spell.</p>
    </li>
</ul>\n" . $text;
        $helper->addTypesToFeat($feat, ['Arcane', 'Wizard School']);
        $feat->parent_feats()->save(app()->feats['Find Familiar']);
        $feat->parent_feats()->save(app()->feats['Conjurer']);

        $feat              = new Feat;
        $feat->name        = 'Spell Focus';
        $feat->requirement = 'You must have at least 1 Wizard School feat of a specific Wizard School';
        $feat->description = '<p>Choose a school of wizardry that you have a Wizard School feat for. The DC for spells in that School get a bonus of +1.</p>
<p>You may take this feat multiple times. Each time you must select a different School of Wizardry.</p>';
        $helper->addTypesToFeat($feat, ['Arcane']);

        $feat              = new Feat;
        $feat->name        = 'Improved Spell Focus';
        $feat->description = '<p>Choose a school of wizardry that you have an Expert level Wizard School feat for. The DC for spells in that School get a bonus of +1 in addition to the bonus from Spell Focus.</p>
<p>You may take this feat multiple times. Each time you must select a different School of Wizardry.</p>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Wizard School']);
        $feat->parent_feats()->save(app()->feats['Spell Focus']);

        $feat              = new Feat;
        $feat->name        = 'Greater Spell Focus';
        $feat->description = '<p>Choose a school of wizardry that you have a Master level Wizard School feat for. The DC for spells in that School get a bonus of +1 in addition to the bonus from Spell Focus and Improved Spell Focus.</p>
<p>You may take this feat multiple times. Each time you must select a different School of Wizardry.</p>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Wizard School']);
        $feat->parent_feats()->save(app()->feats['Improved Spell Focus']);

        $feat              = new Feat;
        $feat->name        = 'Improved Counterspell';
        $feat->trigger     = 'A creature casts a spell that you have in your repertoire.';
        $feat->description = '<ul>
    <li>You gain 1 Spell Point.</li>
    <li>You may spend a Spell Point to gain an additional Action. This additional Action may only be used as a Reaction and may only be used to cast a Counterspell. If you have the Attack of Opportunity feat, you may also use the Reaction from that feat to cast the countering spell.</li>
    <li>You may also counterspell using the Dispel Magic spell. If the spell being countered is a higher Spell Slot then the Dispel Magic, then you must make a Spell Level check (DC = 10 + Spell Level of spell being countered).</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Abjuration', 'Counterspell', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Abjurer']);

        $feat              = new Feat;
        $feat->name        = 'Greater Counterspell';
        $feat->trigger     = 'A creature casts a spell from a spell school and you have a spell of the same school and a higher level';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>You may now use your Counterspell feat without having to cast the same spell. Instead, you may spend an additional Spell Point and Counter with a spell that you have from the same school of equal level or higher. You may not use a Cantrip to Counter spells.</li>
    <li>You gain a +2 bonus on your Counterspell check when attempting to Counterspell with Dispel Magic.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Abjuration', 'Counterspell', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Improved Counterspell']);

        $feat              = new Feat;
        $feat->name        = 'Master Counterspell';
        $feat->trigger     = 'A creature casts a spell from a spell school and you have a spell of the same school and a higher level';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points</li>
    <li>You gain an additional Spell Slot at your highest level that you can cast. This additional Spell Slot can only be used to Counter a Spell.</li>
    <li>You may now Spend 1 Spell Point and cast Detect Magic to Counter a Cantrip.</li>
    <li>
        When you successfully Counter a spell, you may Spend an additional Spell Point and choose to reflect the spell back at the caster or some other target of your choice. Note: this does not make you the caster of the spell. The original caster is the caster of the spell.
        <blockquote>
            A rival wizard casts Charm on your companion. You Counter it and decide to have the spell target one of your rival wizards companions instead. Your rival is the one that charms the new target, not you.
        </blockquote>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Abjuration', 'Counterspell', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['Greater Counterspell']);

        $feat              = new Feat;
        $feat->name        = 'Improved Summoner';
        $feat->trigger     = 'You cast a spell with the Summoning trait';
        $feat->description = '<p>Creatures you summon with a Conjuration Spell gain a +4 enhancement bonus to STR and CON.</p>';
        $helper->addTypesToFeat($feat, ['Conjuration', 'Summoning', 'Arcane', 'Divine', 'Primal']);

        $feat              = new Feat;
        $feat->name        = 'Greater Summoner';
        $feat->trigger     = 'You cast a spell with the Summoning trait';
        $feat->description = '<ul>
    <li>You may Concentrate on an additional Summoning Spell at the same time.</li>
    <li>Spells with the Summoning trait are automatically Heightened +1 without having to use a Higher Level Spell Slot (up to your highest Spell Slot that you can cast).</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Conjuration', 'Summoning', 'Arcane', 'Divine', 'Primal']);

        $feat              = new Feat;
        $feat->name        = 'Combat Casting';
        $feat->description = '<ul>
    <li>You get Advantage on Concentration checks made that involve spellcasting (casting a spell defensively, concentrating on a spell, etc.).</li>
    <li>You can perform the Somatic Casting Components of spells even when you have weapons or a shield in one or both hands.</li>
    <li>When a creature provokes an Attack of Opportunity, you may cast a spell that targets the creature instead of making a physical attack. You must have enough Reactions to cast the spell.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Skill', 'Arcane', 'Divine', 'Primal']);

        $feat              = new Feat;
        $feat->name        = 'Improved Combat Casting';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>You may spend 1 Spell Point to heighten the Haste spell by +1 without using a Higher Level Spell Slot.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Divine', 'Primal']);
        $feat->parent_feats()->save(app()->feats['Combat Casting']);
        $helper->addSpellsToFeat($feat, [
            3 => ['Haste'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Metamagic Master';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>You now spend 1 Spell Point less whenever you activate a Metamagic feat. You cannot reduce the Spell Point cost to less than.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Arcane', 'Divine', 'Primal']);

        $feat              = new Feat;
        $feat->name        = 'Improved Undead';
        $feat->trigger     = 'You cast a spell with the Undead trait that creates an Undead';
        $feat->description = '<p>The Undead that you create with spells that have the Undead trait gains a +4 enhancement bonus to STR and has +2 additional Hit Points per Hit Die.</p>';
        $helper->addTypesToFeat($feat, ['Evil', 'Undead', 'Arcane', 'Divine', 'Necromancy']);

        $feat              = new Feat;
        $feat->name        = 'Undead Ally';
        $feat->description = '<p>You gain a +5 bonus on Diplomacy checks to adjust the attitude of an intelligent undead.</p>
<ul>
    <li>If you have the Find Familiar feat, you may choose a Stitched Flesh Familiar or an Undead Familiar that you qualify for.</li>
    <li>If you have the Divine Mount feat, you may choose to add the Undead Trait to your mount.</li>
    <li>If you have the Leadership feat, you may choose an Undead as your Cohort that you qualify for.</li>
    <li>If you have the Channel Divinity (Negative) class feature, you may add +5 to the WIS Save DC.</li>
    <li>If you have the Master Necromancy feat, you may dominate up to 2 undead with your Dominate Undead ability.</li>
</ul>';
        $helper->addTypesTofeat($feat, ['Evil', 'Undead', 'Arcane', 'Divine', 'Necromancy']);
        $feat->skills()->save(app()->skills['Religion'], ['dc' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Graft Flesh';
        $feat->description = '<p>You learn the formula for 3 common Grafts.</p>
<p>You can create Grafts and apply them to other living creatures or to yourself. Creating a graft takes 24 hours for each 1,000 gp in its price. To create a graft, you must use up raw materials costing 1/2 of the price.</p>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Graft', 'Necromancy']);
        $feat->skills()->save(app()->skills['Medicine'], ['dc' => 10]);

        $feat              = new Feat;
        $feat->name        = 'Master of Shrouds';
        $feat->trigger     = 'You start to cast a spell with the Summoning trait';
        $feat->description = '<p>When you cast a spell with the Summoning trait, you may select from the following list instead of the normal list.</p>
<table>
    <thead>
        <tr>
            <th>Spell Level</th>
            <th>Undead Options</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>4th</td>
            <td><ul>
                <li>One Shadow</li>
            </ul></td>
        </tr>
        <tr>
            <td>5th</td>
            <td><ul>
                <li>Two Shadows</li>
                <li>One Spectre</li>
            </ul></td>
        </tr>
        <tr>
            <td>6th</td>
            <td><ul>
                <li>Four Shadows</li>
                <li>Two Spectres</li>
                <li>One Ghost</li>
            </ul></td>
        </tr>
        <tr>
            <td>7th</td>
            <td><ul>
                <li>Four Shadows</li>
                <li>Four Spectres</li>
                <li>Two Ghosts</li>
                <li>One Wraith</li>
            </ul></td>
        </tr>
        <tr>
            <td>8th</td>
            <td><ul>
                <li>Four Shadows</li>
                <li>Four Spectres</li>
                <li>Four Ghosts</li>
                <li>Two Wraiths</li>
            </ul></td>
        </tr>
    </tbody>
</table>';
        $helper->addTypesToFeat($feat, ['Evil', 'Undead', 'Divine', 'Arcane', 'Necromancy']);
        $feat->parent_feats()->save(app()->feats['Undead Ally']);
        $feat->parent_feats()->save(app()->feats['Improved Undead']);
        $feat->skills()->save(app()->skills['Religion'], ['dc' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Mage Circle Leader';
        $feat->trigger     = 'You are a participant in a Mage Circle';
        $feat->description = '<ul>
    <li>You gain the ability to become a leader when participating in a Mage Circle.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane']);

        $feat              = new Feat;
        $feat->name        = 'Great Mage Circle Leader';
        $feat->trigger     = 'You are a participant in a Great Mage Circle';
        $feat->description = '<ul>
    <li>You gain the ability to become a leader when participating in a Great Mage Circle.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane']);
        $feat->parent_feats()->save(app()->feats['Mage Circle Leader']);

        $feat              = new Feat;
        $feat->name        = 'Corrupted Mage Circle';
        $feat->description = '<p>You draw energy from the land to grant more power to a Mage Circle. The surrounding ground, 5 ft per Spell Level, becomes unable to support life. Any existing normal plant life starts to wilt and suffers a slow death. Repeated uses on the same patch of ground is not cumulative. Eventually, the ground can recover and begin to support life again.</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>When you sacrifice Spell Slots to a Circle Leader during a Mage Circle, the Circle Leader gains a number of Spell Points equal to the sacrificed Spell Slot +1. You suffer 1 CON damage for each Spell Slot sacrificed.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane']);
        $feat->parent_feats()->save(app()->feats['Mage Circle Leader']);

        $feat              = new Feat;
        $feat->name        = 'Shadow Sight';
        $feat->description = '<p>You gain the following.</p>
<ul>
    <li>You gain the Improved Darkvision feat</li>
    <li>You gain the Hide in Plain Sight feature</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Shadow', 'Darkness']);

        $feat              = new Feat;
        $feat->name        = 'Shadow Jump';
        $feat->description = '<p>You may spend 2 Spell Points to cast Misty Step. The limitation is that the magical transport must begin and end in an area with at least some shadow or darkness.</p>';
        $helper->addTypesToFeat($feat, ['Shadow', 'Darkness']);
        $feat->parent_feats()->save(app()->feats['Shadow Sight']);

        $feat              = new Feat;
        $feat->name        = 'Shadow Cloak';
        $feat->description = '<p>So long as you are not in daylight or the illuminated radius of a light source, you have the benefits of a Blur spell upon yourself.</p>';
        $helper->addTypesToFeat($feat, ['Shadow', 'Darkness']);
        $feat->parent_feats()->save(app()->feats['Shadow Jump']);

        $feat              = new Feat;
        $feat->name        = 'Nar Demonbinder';
        $feat->description = '<p>You have learned the secrets of the Nar Demonbinders. You gain the following.</p>
<ul>
    <li>You gain a +4 bonus to opposed CHA checks to trap or compel creatures Called through a spell or effect.</li>
    <li>You learn the Abyssal language</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Demon'], 7);
        $feat->parent_feats()->save(app()->feats['Iron Will']);
        $feat->parent_feats()->save(app()->feats['Spell Focus']);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 6]);
        $feat->skills()->save(app()->skills['Religion'], ['dc' => 6]);
        $helper->addSpellsToFeat($feat, [
            0 => ['Detect Demon' => 'The duration is Concentration, up to 1 hour'],
            1 => ['Detect Evil', 'Detect Good', 'Nether Trail'],
            3 => ['Circle of Protection From Evil', 'Circle of Protection From Chaos'],
            4 => ['Dimensional Anchor'],
            5 => ['Dispel Outsider'],
            6 => ['Banishment', 'Demon Form', 'Plane Shift'],
            7 => ['Nar Fiendbond'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Iron Sign';
        $feat->description = '<p>You learn how to fashion a special token known as an Iron Sign. Creating the token requires three days and 1,000 gp in magical materials. The Iron Sign is the size of a large amulet. You can use it in one of two ways.</p>
<dl>
    <dt>Calling Diagram</dt> <dd>
        <p>The iron sign functions as a calling diagram that combines a magic circle with dimensional anchor. You need only set the token on a suitable surface. A creature held by the iron sign must remain within 5 feet of it and otherwise behaves as if it were completely enclosed in a suitably sized calling diagram.</p>
        <p>The iron sign can hold a called creature for up to one day per level of the character who crafted it. Unlike a normal calling diagram, the iron sign cannot be disturbed unless something physically removes the token from the spot where it was placed (naturally, the called creature cannot disturb the token either directly or indirectly).</p>
    </dd>
    <dt>Demon Trap</dt> <dd>
        <p>You can set the token on a suitable surface and try to compel a free outsider within 30 feet of the token into its effective calling diagram (WIS Save negates). If the creature fails its Save, it is transported to a square of its choice within 5 feet of the iron sign, and trapped just as if you had conjured it into a calling diagram.</p>
    </dd>
</dl>
<p>When a trapped creature leaves the iron sign (because it was freed, escaped on its own, or the duration of the calling diagram lapsed), the token crumbles into powder and is destroyed.</p>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Fiend'], 9);
        $feat->parent_feats()->save(app()->feats['Nar Demonbinder']);
        $helper->addSpellsToFeat($feat, [
            4 => ['Call Dretch Horde', 'Call Lemure Horde'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Brazen Sign';
        $feat->description = '<p>You learn how to fashion a Brazen Sign. This works exactly like the Iron Sign, except that the called creature suffers a -5 penalty to its WIS Save. Crafting a Brazen Sign requires 5 days and 2,000 gp in materials.</p>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Fiend'], 11);
        $feat->parent_feats()->save(app()->feats['Iron Sign']);
        $helper->addSpellsToFeat($feat, [
            5 => ['Fiend Form'],
            7 => ['Bodak Birth'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Silver Sign';
        $feat->description = '<p>You learn the deepest secrets of the Nar Demonbinders</p>
<dl>
    <dt>Silver Sign</dt> <dd>You learn how to fashion a Silver Sign. This works exactly like the Brazen Sign, except that the called creature suffers a -10 penalty to its WIS Save and none of its attacks or abilities can exit the area within 5 feet of the token. Crafting a Silver Sign requires 7 days and 5,000 gp in materials.</dd>
    <dt>Fiendish Servant</dt> <dd>You can have a fiendish cohort.</dd>
</dl>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Fiend'], 13);
        $feat->parent_feats()->save(app()->feats['Brazen Sign']);

        $feat              = new Feat;
        $feat->name        = 'High Magic';
        $feat->requirement = 'Elven (non Drow) blood';
        $feat->description = '<ul>
    <li>You can now cast High Magic Spells and participate in Elven High Magic.</li>
    <li>Pick 3 Cantrips that you know. You may now cast them without using a Spell Slot</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Elf', 'High Magic', 'Arcane']);
        $helper->addSpellsToFeat($feat, [
            0   => ['Detect Magic', 'Light', 'Resist'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Olin Gisir';
        $feat->description = '<p>You gain the following features.</p>
<ul>
    <li>You can now cast High Magic Spells of 4th level or higher.</li>
    <li>You can now be the primary caster of High Magic spells.</li>
    <li>When you cast a spell that requires a Sacrifice of ability scores, reduce the damage by 2 to a minimum of 1.</li>
    <li>When a spell requires a Skill check, you gain a +5 bonus on the skill check. You gain this bonus if you are the main caster or a Secondary Caster.</li>
</ul>';
        $helper->addTypesToSpell($feat, ['Elf', 'High Magic', 'Arcane']);
        $feat->parent_feats()->save(app()->feats['High Magic']);

        $feat              = new Feat;
        $feat->name        = 'Node Spellcasting';
        $feat->description = "<p>You learn the secrets of Earth Nodes and can take full advantage of their power.</p>
<ul>
    <li>You can now use either an INT check or an Arcana check to detect Earth Nodes (DC 20). Without this feat, you may only make INT checks to detect Earth Nodes.</li>
    <li>Instead of reducing the Spell Point cost by just one, you may reduce the Spell Point cost by the Node's intensity when using Meta Magic.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Earth Node', 'Arcane']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Locate Node'],
            2 => ['Node Lock'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Improved Node Spellcasting';
        $feat->description = '<p>You learn the deeper secrets of Earth Nodes.</p>
<ul>
    <li>When you cast a spell that can be Heightened and you are in the area of an Earth Node, the spell is automatically Heightened +2 without requiring a higher level Spell Slot.</li>
    <li>You gain 2 additional spell slots (equal to 1 level lower than your highest level Spell Slots) while you are within the area of an Earth Node. If you prepare spells, then you store the spells in the Node, and may access those spells only while you are within the area of the Node. If you are a spontaneous caster, then you may choose the spells to cast at the time of casting.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane']);
        $helper->addSpellsToFeat($feat, [
            9 => ['Node Genesis'],
        ]);
        $feat->parent_feats()->save(app()->feats['Node Spellcasting']);

        $feat              = new Feat;
        $feat->name        = 'Arcane Sense';
        $feat->description = '<p>Your study of magic allows you to sense its presence around you instinctively.</p>
<ul>
    <li>You gain a +3 bonus to your Arcana checks.</li>
    <li>You can cast Detect Magic as an innate spell at will.</li>
    <li>If you have the Diviner Feat, you can perceive the presence of magic passively and the range of Detect Magic is doubled.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane']);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 4]);
        $helper->addSpellsToFeat($feat, [
            0 => ['Detect Magic'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Arcane Armor';
        $feat->description = '<ul>
    <li>You can cast Mage Armor on yourself without using a Spell Slot.</li>
    <li>Your Mage Armors AC bonus is increased by +1.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Mage Armor'],
        ]);
    }
}
