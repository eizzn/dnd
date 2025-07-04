<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsQSeeder extends Seeder
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
        $spell->name        = 'Quench';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->area        = '60-ft cube or one fire-based magic item';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell is often used to put out forest fires and other conflagrations. This spell does the following.</p>
<ul>
    <li>Extinguish all nonmagical fires in the area.</li>
    <li>Dispels any fire spells in the Area, though you must Succeed on a Dispel Check against each spell to Dispel it (DC 11 + Caster Level of the fire spell).</li>
    <li>Each Fire Elemental creature within the Area takes 10D6 Water damage.</li>
    <li>Alternatively, you can target a single magic item that creates or controls flame. The item must make a Save or lose all abilities for 4 hours (Artifacts are immune to this effect).</li>
</ul>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Area</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 3);

        $spell              = new Spell;
        $spell->name        = 'Quick Burrow';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours';
        $spell->description = '<p>You gain a +10 Enhancement bonus to your Burrow Speed. If you do not have a Burrow Speed, then this spell has no effect.</p>
<dl>
    <dt>Material Components</dt> <dd>An incisor from a mole</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 1);

        $spell              = new Spell;
        $spell->name        = 'Quick Cure Wounds';
        $spell->casting     = 'Reaction';
        $spell->range       = '60 ft';
        $spell->targets     = 'One creature within range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell cures 2D6 Points of damage.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Healing', 'Positive'], 3);

        $spell              = new Spell;
        $spell->name        = 'Quick March';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '120 feet';
        $spell->targets     = 'Allies in a 30-ft radius emanation';
        $spell->duration    = '1 round';
        $spell->description = "<p>This spell grants your allies' a +20 Enhancement bonus to Land Speed. This does not affect any other form of Speed.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 2);

        $spell              = new Spell;
        $spell->name        = 'Quick Swim';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours';
        $spell->description = '<p>You gain a +10 Enhancement bonus to your Swim Speed. If you do not have a Swim Speed, then this spell has no effect.</p>
<dl>
    <dt>Material Components</dt> <dd>A scale from any fish</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Quieting Weapons';
        $spell->casting        = 'Somatic Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Weapon touched';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 hour';
        $spell->description    = "<p>The target weapon and any ammunition they fire make no sound as part of their normal functions as a weapon. For instance, a firearm’s firing would not make an explosive sound, but if you cast this spell on a creature's bite attack, it would not prevent it from vocalizing from its mouth. The first time a creature is struck by a weapon affected by this spell, it must succeed at a WIS Save or it becomes unable to make noise louder than a whisper (Perception DC 10 to hear) whether vocally or by other means for the duration of the effect. Because the creature can still whisper, this doesn't interfere with verbal spell components. Whether it succeeds or fails its Save, the creature is immune to further effects from this casting of quieting weapons.</p>";
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>If the target fails their WIS Save, they are not able to make any sound.</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Able to speak as normal</dd>
    <dt>Failure</dt> <dd>Ability to speak hampered as described</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 2);

        $spell               = new Spell;
        $spell->name         = 'Quomaniith';
        $spell->casting      = '1 minute (Material, Somatic, Verbal)';
        $spell->range        = 'Touch';
        $spell->targets      = 'Two individuals willing to enter into a binding promise or agreement';
        $spell->duration     = 'Permanent until shattered (see text)';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>The individuals or representatives of the ones taking the vow</dd>
</dl>';
        $spell->description = '<p>The Vow Tangible. Ritual of Complement.</p>
<p>This spell creates a tangible, solid stone object that both records and makes a promise solid. Should either party knowingly and willingly break the pledge, the object shatters, revealing to those who notice that a solemn oath has been broken.</p>
<p>This ritual is a loosely structured rite that summons a physical symbol of a vow made during the casting. The vow itself is inherent to the symbol, and neither it nor the object can be marred or affected by any means less than divine, aside from one. Should either party involved in the vow intentionally and flagrantly break its word beyond the spirit of the agreement, the symbol shatters. The casters are not the individuals involved in the vow, only in the binding Vow Tangible and thoughts and spirits of two or more representatives involved in the vow.</p>
<p>The size of the physical symbol is relative to the number of people it encompasses, so a promise made among cities creates a boulder-sized symbol, while a vow between two friends creates a small fist-sized object. Most often, this spell summons a stone plinth or slab of the relative sizes mentioned above, and the vow made in the spell is carved somewhere upon it; the Standing Stone is the major example of vowstone (or oathstone), its size relative to the two groups of people.</p>
<p>If additional time is spent in spellcasting and either of the representatives has artistic skill, the vowstone can manifest as a figurine or statue rather than a formless rock with inscriptions. The common use for this spell is to make it a part of a marriage rite among elves, creating an Aestar`Khol (Marriage Stone).</p>';
        $helper->addTypesToSpell($spell, ['High Magic', 'Enchantment'], 3);
        $spell->materials()->save(Material::where('name', 'Sapphire')->firstOrFail(), ['price' => '1 gp']);
    }
}
