<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use Illuminate\Database\Seeder;

class TattooFormulasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper = app()->seedHelper;

        $formula         = new Formula;
        $formula->name   = 'All Seeing Eye';
        $formula->type   = 'Tattoo';
        $formula->level  = 1;
        $formula->price  = 'Ink + 2,500 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = '<dl>
    <dt>Enhancement</dt> <dd>Awareness (Psionic)</dd>
</dl>';
        $formula->description = '<p>You gain a +3 bonus on WIS (Insight) checks.</p>
<dl>
    <dt>Location</dt> <dd>Head</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula         = new Formula;
        $formula->name   = 'Eye of Darkvision';
        $formula->type   = 'Tattoo';
        $formula->level  = 1;
        $formula->price  = 'Ink + 2,500 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = '<dl>
    <dt>Enhancement</dt> <dd>Darkvision (Magical or Psionic)</dd>
</dl>';
        $formula->description = '<p>Once per Long Rest as an Action, you can gain the ability to see in the dark, and have Darkvision out to range of 60 feet for 8 hours. If you already have Darkvision, the range of your Darkvision increases by 60 feet, to a maximum of 120 feet.</p>
<p>An Ornate version of this tattoo exists, which applies a permanent effect, instead of a temporary one.</p>
<dl>
    <dt>Location</dt> <dd>Head</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula         = new Formula;
        $formula->name   = 'Eye of Truesight';
        $formula->type   = 'Tattoo';
        $formula->level  = 5;
        $formula->price  = 'Ink + 6,000 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = '<dl>
    <dt>Enhancement</dt> <dd>Trueseeing (Magical or Psionic)</dd>
</dl>';
        $formula->description = '<p>Once per Long Rest as an Action, you gain the ability to see things as they actually are. For 1 hour, the creature has Truesight, notices secret doors hidden by magic, and can see into the Ethereal Plane, all out to a range of 120 feet.</p>
<p>Truesight is a rare and powerful ability that few artists have learned to harness in their art. The artist must successfully make a DC 25 check to apply the tattoo.</p>
<p>An alternate version of this tattoo exists, which applies a permanent effect, instead of a temporary one.</p>
<dl>
    <dt>Location</dt> <dd>Head</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula         = new Formula;
        $formula->name   = 'Eye of the Mage';
        $formula->type   = 'Tattoo';
        $formula->level  = 3;
        $formula->price  = 'Ink + 3,500 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = '<dl>
    <dt>Enhancement</dt> <dd>Detect Magic (Magical)</dd>
</dl>';
        $formula->description = '<p>You may cast Detect Magic at will as a Double Action.</p>
<dl>
    <dt>Location</dt> <dd>Head</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Eye of the Seer';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 2,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You gain a +3 bonus on WIS (Perception) checks.</p>
<dl>
    <dt>Location</dt> <dd>Head</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Fist of the Elements';
        $formula->type        = 'Tattoo';
        $formula->level       = 5;
        $formula->price       = 'Ink + 3,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>As an Action, you may wreathe your fist in elemental energy, of a type chosen when the tattoo is first applied. Your Unarmed Strikes are considered magical, and deal an extra 1D6 + 1 damage of the chose elemental type. If inked with Elemental ink of the same type as the damage, attacks with the fist deal 1D8 + 1 damage of that type instead.</p>
<p>If the fist deals Fire damage and targets a flammable object that is not being worn or carried, the target catches fire. Against plant-based creatures, your fist deals 2 more points of damage.</p>
<p>If the fist deals Electricity damage and targets a creature wearing metal armor, you Hit with Advantage. This also applies against targets made completely out of metal (ex. metal golems)</p>
<p>If the fist deals Cold damage, fire-based creatures take an additional 2 points of Cold damage from these attacks.</p>
<p>Up to three types of Elemental Ink may be used in the application of this tattoo, and upi may choose between the types each time they activate the tattoo.</p>
<p>When you activate this tattoo, the effects persist for 1 hour or until dispelled. This tattoo may be activated a max number of times equal to your CON modifier (minimum 1) between each Long Rest.</p>
<dl>
    <dt>Location</dt> <dd>Arm</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Evocation', 'Attunement', 'Tattoo', 'Fire', 'Cold', 'Electricity'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Fortress Tattoo';
        $formula->type        = 'Tattoo';
        $formula->level       = 3;
        $formula->price       = 'Ink + 8,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = "<p>You may use an Action to activate this tattoo's primary effect. You gain a +1 bonus to AC and all Saves for a duration of 10 minutes and may be activated once per Long Rest.</p>
<p>You may use an additional Action to activate the tattoo's secondary effect. You gain resistance to damage corresponding to the ink with which it was applied. The additional effects are Concentration and last for one minute.</p>
<p>Once this effect is used, it cannot be used again until you finish a Long Rest.</p>
<p>At least two jars of Metallic Ink or Earth-aligned Elemental Ink must be used to grant the tattoo's primary effect. Bestial or Elemental Ink must be used to grant the tattoo's secondary effect.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>";
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Anchor';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 1,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You gain Advantage vs Saves against effects that would move you or knock you Prone.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 10, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula         = new Formula;
        $formula->name   = 'Mark of the Archer';
        $formula->type   = 'Tattoo';
        $formula->level  = 3;
        $formula->price  = 'Ink + 2,000 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = "<dl>
    <dt>Enhancement</dt> <dd>Hunter's Mark (Magical)</dd>
</dl>";
        $formula->description = '<p>You gain a +1 bonus on Ranged Attack Rolls with ranged weapons that you are proficient with.</p>
<p>There is an Ornate version of this tattoo that grants a +2 bonus instead.</p>
<dl>
    <dt>Location</dt> <dd>Arm</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Armsman';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 2,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You gain a +1 bonus to Attack Rolls or Damage Rolls with a specific type of melee weapon (swords, axes, maces, etc), as long as they are proficient with the weapon and wielding it in the arm the tattoo is on. The type of weapon and the type of rolls are chosen when the tattoo is applied, and the weapon is pictured somewhere in the art of the tattoo.</p>
<p>An Ornate version of this tattoo grants the bonus to both Attack and Damage Rolls.</p>
<dl>
    <dt>Location</dt> <dd>Arm</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Cheetah';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 1,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>Once per Long Rest, as an Action, you may activate this tattoo. For an hour, your Speed increases by 10 feet.</p>
<dl>
    <dt>Location</dt> <dd>Both Leg</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 10, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Death Walker';
        $formula->type        = 'Tattoo';
        $formula->level       = 12;
        $formula->price       = 'Ink + 10,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>If you would drop to 0 Hit Points as a result of taking damage, you instead drop to 1 Hit point. Alternatively, if you are subjected to an effect that would kill it instantaneously without dealing damage, that effect is instead negated against you.</p>
<p>Once either effect is used, it cannot be used again for another 30 days.</p>
<dl>
    <dt>Location</dt> <dd>Chest</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 18, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Rare)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Driftglobe';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 3,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = "<p>As an Action, you emanate a 60-foot radius sphere of light that moves with them. The sphere is bright light and sheds dim light for an additional 60 feet. Completely covering you with an opaque object, such as a bowl or a helm, blocks the light. The light lasts for 1 hour unless dispelled, and the tattoo may be activated once per Long Rest.</p>
<p>If any of this spell's area overlaps with an area of darkness created by a spell of 2nd level or lower, the spell that created the darkness is dispelled.</p>
<p>This tattoo also illuminates areas overlapping with darkness created by the Mark of the Kraken.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>";
        $helper->saveFormula($formula, ['Evocation', 'Attunement', 'Tattoo', 'Light'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Dryad';
        $formula->type        = 'Tattoo';
        $formula->level       = 5;
        $formula->price       = 'Ink + 7,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = "<p>As an Action, you may cast the Entangle spell, using INT as your spellcasting modifier. You may use this ability once per Long Rest.</p>
<p>At least two jars of Three Dimensional Ink must be used to grant this tattoo's effect.</p>
<dl>
    <dt>Location</dt> <dd>Arm</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>";
        $helper->saveFormula($formula, ['Transmutation', 'Attunement', 'Tattoo', 'Plant'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Elemental';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 7,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You gain resistance to a type of damage, chosen when you gain the tattoo.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Elven';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 3,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You gain immunity to Sleep, and you have Advantage on Saves vs being Charmed.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Flock';
        $formula->type        = 'Tattoo';
        $formula->level       = 5;
        $formula->price       = 'Ink + 7,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = "<p>Once per Long Rest, you may activate this tattoo with an Action, causing a Swarm of Ravens of the same color as the ones depicted in the tattoo to appear within 5 feet of you. The ravens persist until are killed or until 10 minutes have passed, at which point they disappear into smoke. The ravens follow your every mental command, and act on your initiative.</p>
<p>Any article of clothing which covers the tattoo upon activation is destroyed in the process as the ravens fly through the cloth. If the tattoo is covered by armor, the tattoo will not activate.</p>
<p>At least three jars of Three Dimensional Ink must be used to grant this tattoo's effects.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>";
        $helper->saveFormula($formula, ['Conjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Frog';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 1,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You may activate this tattoo as an Action once per Long Rest. For the next minute, your Jump distance is tripled.</p>
<dl>
    <dt>Location</dt> <dd>Both Legs</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 10, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Ghast';
        $formula->type        = 'Tattoo';
        $formula->level       = 9;
        $formula->price       = 'Ink + 3,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You may activate this tattoo as an Action, causing the lines of this tattoo to glow slightly and their arm to change shape for one minute. You may activate this once per Long Rest.</p>
<p>Your arm pales in color and grows into that of a ghoul, fingers sharpening and elongating into a terrible clawed hand. Any article of clothing not meant to accommodate the change in limb size is destroyed in the process. If the arm is covered in armor not meant to accommodate the change in limb size, this change will not take place.</p>
<p>A melee attack with this does 1D6 Slashing damage and 1D4 Cold damage. If this tattoo is created using ice-aligned Elemental Ink, the Cold damage increases to 1D6.</p>
<p>Any non-undead creature struck by your attack must make a DC 10 CON Save or be paralyzed for 1 minute. The target can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</p>
<p>There exists an Ornate version of this tattoo that has a Save of 12 instead of 10, and which may be activated twice per Long Rest.</p>
<dl>
    <dt>Location</dt> <dd>Arm</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Necromancy', 'Attunement', 'Tattoo', 'Cold', 'Undead'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Healer';
        $formula->type        = 'Tattoo';
        $formula->level       = 5;
        $formula->price       = 'Ink + 3,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>Once per Long Rest, you may activate this tattoo as an Action. For the next minute (or until your Concentration lapses), each creature (including enemies) within a 30-foot radius of you regains the maximum number of Hit Points possible from any healing.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Necromancy', 'Attunement', 'Tattoo', 'Healing'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Hummingbird';
        $formula->type        = 'Tattoo';
        $formula->level       = 7;
        $formula->price       = 'Ink + 8,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You gain a +3 bonus to Initiative rolls.</p>
<dl>
    <dt>Location</dt> <dd>Chest</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Kraken';
        $formula->type        = 'Tattoo';
        $formula->level       = 4;
        $formula->price       = 'Ink + 2,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = "<p>As an Action, you emanate a magical Darkness, which fills a 15-foot radius sphere centered on you and moves with you. Creatures with darkvision cannot see through this darkness, and non-magical light cannot illuminate it. Completely covering the source of the darkness with an opaque object, such as a bowl or a helm, blocks the darkness. The darkness lasts for 1 hour unless dispelled, and the tattoo may be activated once per Long Rest.</p>
<p>If any of this effect's area overlaps with an area of light created by a spell of 2nd level or lower, the spell that created the light is dispelled.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>";
        $helper->saveFormula($formula, ['Evocation', 'Attunement', 'Tattoo', 'Darkness'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Ox';
        $formula->type        = 'Tattoo';
        $formula->level       = 7;
        $formula->price       = 'Ink + 10,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>Your maximum Hit Points is increased by 1 per Character Level.</p>
<dl>
    <dt>Location</dt> <dd>Chest</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 18, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Pacifist';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 1,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = "<p>Once per Long Rest, you may cast the Sanctuary spell as an Action. The Save DC is 15, and the spell lasts 1 minute.</p>
<p>The tattoo's effects end early if you make an attack or cast a spell that affects any enemy creature.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>";
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 10, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Packmaster';
        $formula->type        = 'Tattoo';
        $formula->level       = 7;
        $formula->price       = 'Ink + 7,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = "<p>Once per Long Rest, you may use an Action to activate this tattoo's power, causing 1D4 + 1 wolves of the same color as depicted in the tattoo to appear within 5 feet of you. These wolves persist until killed or until 10 minutes have passed, at which point they disappear into smoke. You may command the wolves mentally with an Action and act on your initiative.</p>
<p>Any article of clothing which covers the tattoo upon activation is destroyed in the process as the wolves leap thorough the cloth. If the tattoo is covered by armor, the tattoo will not activate.</p>
<p>At least three jars of Three Dimensional Ink must be used to grant this tattoo's effects.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>";
        $helper->saveFormula($formula, ['Conjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Pit Fiend';
        $formula->type        = 'Tattoo';
        $formula->level       = 7;
        $formula->price       = 'Ink + 7,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You may activate this tattoo with an Action, causing the runes to glow and your arm to change shape for one minute. You may activate this tattoo once per Long Rest.</p>
<p>Your arm grows disproportionately larger and  becomes scaly and red, their hand tipped with razor sharp, black claws. Any article of clothing not meant to accommodate the change in limb size is destroyed in the process. If your arm is covered in armor not meant to accommodate the change in limb size this change will not take place.</p>
<p>A melee attack with your arm does 2D8 Slashing damage and 1D4 Fire damage. If this tattoo is created using fire-aligned Elemental Ink, the Fire damage increases to 1D6.</p>
<p>While your arm is changed, you have an effective STR modifier of +8 for anything that only uses the changed arm.</p>
<dl>
    <dt>Location</dt> <dd>Arm</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Transmutation', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Pufferfish';
        $formula->type        = 'Tattoo';
        $formula->level       = 2;
        $formula->price       = 'Ink + 3,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>When you enter a Grapple with another creature, you may use an Action to extend sharp poisonous sines from your tattooed area. If the other creature is still in physical contact with you at the end of your turn the spines deal 1D4 poison damage. The spines remain extended until the Grapple ends.</p>
<dl>
    <dt>Location</dt> <dd>Arm</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Transmutation', 'Attunement', 'Tattoo', 'Poison'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Shadow';
        $formula->type        = 'Tattoo';
        $formula->level       = 3;
        $formula->price       = 'Ink + 2,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>Once per Long Rest, you may cast Pass Without Trace, targeting yourself only.</p>
<p>An Ornate version of this tattoo exists, which removes the limit on creatures that may be targeted by the spell.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Transmutation', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Snake Charmer';
        $formula->type        = 'Tattoo';
        $formula->level       = 5;
        $formula->price       = 'Ink + 7,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = "<p>Once per Long Rest, you may use an Action to activate this tattoo's power, causing 1D6 poisonous snakes to appear, which disappear when they drop to 0 Hit Points or when they are more than 150 feet away. The snakes are friendly to you and your companions. You may use an Action to direct their Actions and they act on your Initiative.</p>
<p>At least three jars of Three Dimensional Ink must be used to grant this tattoo's effects.</p>
<dl>
    <dt>Location</dt> <dd>Arm</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>";
        $helper->saveFormula($formula, ['Conjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Soulmates';
        $formula->type        = 'Tattoo';
        $formula->level       = 5;
        $formula->price       = 'Ink + 3,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>Once per Long Rest, as an Action, you may activate this tattoo when within 30 feet of the wearer of the complimentary tattoo, who may activate their Mark of the Soulmates tattoo as a Reaction. Once both complimentary tattoos are activated, they remain active for ten minutes. Both wearers gain a +2 bonus to AC and all Saves while you are within 60 feet of each other. Also, each time one of the wearers would take damage, both wearers takes half of the damage instead.</p>
<p>This tattoo must be applied with Metallic Ink.</p>
<dl>
    <dt>Location</dt> <dd>Arm</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Spider';
        $formula->type        = 'Tattoo';
        $formula->level       = 3;
        $formula->price       = 'Ink + 2,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>As an Action once per Long Rest, you gain the ability to move up, down, and across vertical surfaces and upside down along ceilings, while leaving your hands free. You also gain a Climbing Speed equal to your Walking Speed. These effects last for 1 hour or until you lose Concentration.</p>
<dl>
    <dt>Location</dt> <dd>Leg</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>';
        $helper->saveFormula($formula, ['Transmutation', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Spiritmaster';
        $formula->type        = 'Tattoo';
        $formula->level       = 10;
        $formula->price       = 'Ink + 8,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>As an Action, you choose one incorporeal undead entity within 60 feet. The undead must succeed on a CHA Save or become charmed for one hour. The Save DC is 8 + Proficiency Bonus + CHA modifier. If the undead has an INT of 8 or higher, it gains a +3 bonus to the Save. If the undead is not currently controlled, you instead gain control instead. You may use this tattoo once per Long Rest.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Transmutation', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Rare)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Tarrasque';
        $formula->type        = 'Tattoo';
        $formula->level       = 10;
        $formula->price       = 'Ink + 6,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>Once per Long Rest as an Action, you may activate this tattoo. Thereafter, you gain 5 temporary Hit Points at the beginning of each round (these do not stack) for one hour. When the tattoo\'s effects end, you lose any remaining temporary Hit Points.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Necromancy', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Rare)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Telepath';
        $formula->type        = 'Tattoo';
        $formula->level       = 5;
        $formula->price       = 'Ink + 3,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You may cast the Message spell at will without having to use any components.</p>
<dl>
    <dt>Location</dt> <dd>Head</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Viper';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 3,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You gain Advantage on CON Saves vs Poison. You have Resistance to Poison.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mark of the Weaponmaster';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 3,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>As an Action, once per Long Rest, you may activate this tattoo. For an hour, any weapon you hold becomes a magic weapon with a +1 bonus to attack and damage rolls.</p>
<dl>
    <dt>Location</dt> <dd>Arm</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Maw of the Dragon';
        $formula->type        = 'Tattoo';
        $formula->level       = 3;
        $formula->price       = 'Ink + 6,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>Once per Long Rest, you may activate this tattoo to make a breath attack. The attack deals 3D6 damage on a Failed Save or half as much on a successful Save. The type is determined by the type of dragon in the tattoo. Your Save DC for this attack is 8 + your CON modifier + your proficiency bonus.</p>
<table>
    <thead>
        <tr>
            <th>Dragon</th>
            <th>Type</th>
            <th>Breath Weapon</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Black</td>
            <td>Acid</td>
            <td>5 by 30 line (DEX Save)</td>
        </tr>
        <tr>
            <td>Blue</td>
            <td>Electricity</td>
            <td>5 by 30 line (DEX Save)</td>
        </tr>
        <tr>
            <td>Green</td>
            <td>Poison</td>
            <td>15 foot cone (CON Save)</td>
        </tr>
        <tr>
            <td>Red</td>
            <td>Fire</td>
            <td>15 foot cone (DEX Save)</td>
        </tr>
        <tr>
            <td>White</td>
            <td>Cold</td>
            <td>15 foot cone (DEX Save)</td>
        </tr>
    </tbody>
</table>
<p>If drawn in Elemental Ink corresponding to the desired element instead, this ability can be used once per Short or Long Rest.</p>
<dl>
    <dt>Location</dt> <dd>Head</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Scar of Bravery';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 3,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You gain Advantage on Saves vs being Frightened.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Shield of the Elemental Guardian';
        $formula->type        = 'Tattoo';
        $formula->level       = 5;
        $formula->price       = 'Ink + 4,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>When this tattoo is applied, you choose a primary and secondary elemental type from the following: Cold, Fire, Electricity, or Sonic. Both types of Elemental ink must be used in the creation of the tattoo, and you cannot pick the same element.</p>
<p>Once per Long Rest as an Action, you may activate this tattoo. For the next 10 minutes, or until dismissed, your body is wreathed in thin and wispy expressions of the chosen primary element that sheds bright light in a 10-foot radius and dim light for an additional 10 feet.</p>
<p>While the tattoo is active, you have Resistance to the secondary element.</p>
<p>In addition, whenever a creature hits you, the element erupts, dealing 2D8 damage to the attacker fo the primary elemental type if the attacker is within 5 feet.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Evocation', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = "Slave's/Owner's Mark";
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Slave: Ink + 500 gp, Owner: Ink + 1,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = "<p>By touching both marks as an Action, the wearer of an Owner's Mark may attune or un-attune a Slave's Mark to their mark. Any number of Slave's Marks may bve attuned to one Owner's Mark, and any number of Owner's Mark may be attuned to a single Slave's Mark.</p>
<p>Thereafter, as an Action, the owner can activate their tattoo and the twin mark on the slave begins to burn, inflicting 1D4 Fire damage per round onto its bearer. The owner can stop this effect at any time using an Action. This damage will automatically stop and can no longer be activated if the slave has 0 Hit points. If the owner dies, or otherwise loses their tattoo, and the slave's mark is not attuned to any other owners, the magic of the slave's mark will instantly fade.</p>
<p>If drawn in fire-aligned Elemental Ink, the mark instead inflicts 1D6 Fire damage per round.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>";
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 10, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula         = new Formula;
        $formula->name   = 'Spirit of the Bear';
        $formula->type   = 'Tattoo';
        $formula->level  = 3;
        $formula->price  = 'Ink + 10,000 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = "<dl>
    <dt>Enhancement</dt> <dd>Bear's Endurance (Magical)</dd>
</dl>";
        $formula->description = '<p>Your CON increases by +2, to a maximum CON score of 20.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 18, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula         = new Formula;
        $formula->name   = 'Spirit of the Bull';
        $formula->type   = 'Tattoo';
        $formula->level  = 3;
        $formula->price  = 'Ink + 10,000 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = "<dl>
    <dt>Enhancement</dt> <dd>Bull's Strength (Magical)</dd>
</dl>";
        $formula->description = '<p>Your STR increases by +2, to a maximum STR score of 20.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 18, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula         = new Formula;
        $formula->name   = 'Spirit of the Cat';
        $formula->type   = 'Tattoo';
        $formula->level  = 3;
        $formula->price  = 'Ink + 10,000 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = "<dl>
    <dt>Enhancement</dt> <dd>Cat's Grace (Magical)</dd>
</dl>";
        $formula->description = '<p>Your DEX increases by +2, to a maximum DEX score of 20.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 18, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula         = new Formula;
        $formula->name   = 'Spirit of the Eagle';
        $formula->type   = 'Tattoo';
        $formula->level  = 3;
        $formula->price  = 'Ink + 10,000 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = "<dl>
    <dt>Enhancement</dt> <dd>Eagle's Splendor (Magical)</dd>
</dl>";
        $formula->description = '<p>Your CHA increases by +2, to a maximum CHA score of 20.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 18, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula         = new Formula;
        $formula->name   = 'Spirit of the Fox';
        $formula->type   = 'Tattoo';
        $formula->level  = 3;
        $formula->price  = 'Ink + 10,000 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = "<dl>
    <dt>Enhancement</dt> <dd>Fox's Cunning (Magical)</dd>
</dl>";
        $formula->description = '<p>Your INT increases by +2, to a maximum INT score of 20.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 18, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula         = new Formula;
        $formula->name   = 'Spirit of the Owl';
        $formula->type   = 'Tattoo';
        $formula->level  = 3;
        $formula->price  = 'Ink + 10,000 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = "<dl>
    <dt>Enhancement</dt> <dd>Owl's Wisdom (Magical)</dd>
</dl>";
        $formula->description = '<p>Your WIS increases by +2, to a maximum WIS score of 20.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 18, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = "Spirit Walker's Sigil";
        $formula->type        = 'Tattoo';
        $formula->level       = 7;
        $formula->price       = 'Ink + 3,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>Once per Long Rest, as an Action you can activate this tattoo, causing your physical body to softly dissolve into an ethereal mist.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula         = new Formula;
        $formula->name   = 'Tattoo of Chilling';
        $formula->type   = 'Tattoo';
        $formula->level  = 3;
        $formula->price  = 'Ink + 3,500 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = '<dl>
    <dt>Enhancement</dt> <dd>Chill Touch (Magical)</dd>
</dl>';
        $formula->description = '<p>This tattoo enables you to cast the Chill Touch spell at will, using INT as your spellcasting modifier for the spell. If made with ice-aligned Elemental Ink, you gain a +3 bonus to your Range Spell attack.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Evocation', 'Attunement', 'Tattoo', 'Cold'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula         = new Formula;
        $formula->name   = 'Tattoo of Flame';
        $formula->type   = 'Tattoo';
        $formula->level  = 3;
        $formula->price  = 'Ink + 3,500 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = '<dl>
    <dt>Enhancement</dt> <dd>Fire Bolt (Magical)</dd>
</dl>';
        $formula->description = '<p>This tattoo enables you to cast the Fire Bolt spell at will, using INT as your spellcasting modifier for the spell. If made with fire-aligned Elemental Ink, you gain a +3 bonus to your Range Spell attack.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Evocation', 'Attunement', 'Tattoo', 'Fire'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Tattoo of Leaping';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 6,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>Your jumping distance is doubled.</p>
<dl>
    <dt>Location</dt> <dd>Both Legs</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula         = new Formula;
        $formula->name   = 'Tattoo of Lightning';
        $formula->type   = 'Tattoo';
        $formula->level  = 3;
        $formula->price  = 'Ink + 3,500 gp';
        $formula->method = '';
        $formula->bulk   = '-';
        $formula->meta   = '<dl>
    <dt>Enhancement</dt> <dd>Electric Arc (Magical)</dd>
</dl>';
        $formula->description = '<p>This tattoo enables you to cast the Electric Arc spell at will, using INT as your spellcasting modifier for the spell. If made with electricity-aligned Elemental Ink, you gain a +3 bonus to your Range Spell attack.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Small</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Evocation', 'Attunement', 'Tattoo', 'Fire'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Tattoo of Protection';
        $formula->type        = 'Tattoo';
        $formula->level       = 3;
        $formula->price       = 'Ink + 3,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You gain a +1 bonus to AC and all Saves.</p>
<p>There is an Average version of this tattoo that provides a +2 bonus to AC and all Saves.</p>
<dl>
    <dt>Location</dt> <dd>Chest or Back</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Tattoo of Striding';
        $formula->type        = 'Tattoo';
        $formula->level       = 3;
        $formula->price       = 'Ink + 3,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>Your Land Speed is increased by 5 feet. You may have this tattoo on both legs to gain a +10 bonus to your Land Speed instead.</p>
<p>If Three-Dimensional Ink is used to create this tattoo, it instead grants a +10 bonus to your Land Speed.</p>
<dl>
    <dt>Location</dt> <dd>Leg</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Tattoo of Warding';
        $formula->type        = 'Tattoo';
        $formula->level       = 3;
        $formula->price       = 'Ink + 4,000 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You gain a +1 bonus to all Saves.</p>
<p>There is an Ornate version of this tattoo that provides a +2 bonus to all Saves.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Venom Ward';
        $formula->type        = 'Tattoo';
        $formula->level       = 1;
        $formula->price       = 'Ink + 3,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You gain Advantage on Saves vs Poison.</p>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Average</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Voice and Ear of the Traveler';
        $formula->type        = 'Tattoo';
        $formula->level       = 5;
        $formula->price       = 'Ink + 8,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You understand all languages, as if under the effects of the Comprehend Languages spell.</p>
<p>Once per Long Rest, you may cast the Tongues spell.</p>
<dl>
    <dt>Location</dt> <dd>Head</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wings of Ink';
        $formula->type        = 'Tattoo';
        $formula->level       = 5;
        $formula->price       = 'Ink + 3,500 gp';
        $formula->method      = '';
        $formula->bulk        = '-';
        $formula->description = '<p>You can activate this tattoo with an Action to sprout wings from your back, and gain a Fly Speed of 60 feet for a duration of 10 minutes (Concentration).</p>
<p>Armor that is not specifically designed to accommodate wings will not allow you to manifest the wings, and clothing that is not specifically designed to accommodate wings will be ruined.</p>
<p>At least two jars of Three-Dimensional Ink must be used to inscribe this tattoo.</p>
<dl>
    <dt>Location</dt> <dd>Back</dd>
    <dt>Size</dt> <dd>Large</dd>
    <dt>Intricacy</dt> <dd>Simple</dd>
</dl>';
        $helper->saveFormula($formula, ['Abjuration', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 14, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Spellwrought Tattoo';
        $formula->type        = 'Tattoo';
        $formula->level       = 12;
        $formula->price       = 'Ink + 10,00 gp';
        $formula->method      = 'Passive';
        $formula->bulk        = '-';
        $formula->description = '<p>This tattoo contains a single spell of up to 5th level.</p>
<p>To use the tattoo, you must hold the needle against your skin where you want the tattoo to appear and speak the command word. The needle turns into the ink that becomes the tattoo, which appears on your skin. Once the tattoo is on your skin, you can cast its spell, requiring no material components. The tattoo glows faintly while you cast the spell and for the spell’s duration. Once the spell ends, the tattoo vanishes from your skin.</p>
<p>The level of the spell in the tattoo determines the spell’s saving throw DC, attack bonus, spellcasting ability modifier, and the tattoo’s rarity, as shown in the Spellwrought Tattoo table.</p>
<table>
    <thead>
        <tr>
            <th>Spell Level</th>
            <th>Rarity</th>
            <th>Modifier</th>
            <th>Save DC</th>
            <th>Attack Bonus</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Cantrip</td>
            <td>Simple</td>
            <td>+3</td>
            <td>13</td>
            <td>+5</td>
        </tr>
        <tr>
            <td>1st</td>
            <td>Simple</td>
            <td>+3</td>
            <td>13</td>
            <td>+5</td>
        </tr>
        <tr>
            <td>2nd</td>
            <td>Average</td>
            <td>+3</td>
            <td>13</td>
            <td>+5</td>
        </tr>
        <tr>
            <td>3rd</td>
            <td>Average</td>
            <td>+4</td>
            <td>15</td>
            <td>+7</td>
        </tr>
        <tr>
            <td>4th</td>
            <td>Ornate</td>
            <td>+4</td>
            <td>15</td>
            <td>+7</td>
        </tr>
        <tr>
            <td>5th</td>
            <td>Ornate</td>
            <td>+5</td>
            <td>17</td>
            <td>+9</td>
        </tr>
    </tbody>
</table>
<dl>
    <dt>Location</dt> <dd>Anywhere</dd>
    <dt>Size</dt> <dd>Medium</dd>
    <dt>Intricacy</dt> <dd>Ornate</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Attunement', 'Tattoo'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Calligraphy']],
            'feats'    => ['Inscribe Tattoo'],
            'formulas' => ['Ink, Spell Writing (Rare)'],
        ]);
    }
}
