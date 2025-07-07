<?php

namespace Database\Seeders\Spells;

use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsJSeeder extends Seeder
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
        $spell->name        = 'Journal';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = '120 feet';
        $spell->targets     = 'Self';
        $spell->duration    = '24 Hours';
        $spell->description = '<p>The spell puts down in written format all the events that happens within range to the caster for the duration. It does not record every mundane event that occurs within range, only those that involve the caster, but the cast can take note of any mundane event and have it specifically written down.</p>
<p>In game terms, this spell provides the caster access to all names, places, events with perfect memory (as it is written down).</p>
<p>The spell can draw simple illustrations, and portraits. It does not draw maps (like the Map spell), however it can jot down the path taken at a corridor that had more than one path, or the general direction if out in the open (such as North, or South East) whenever a course change is take in terms of time passed or approximate distance.</p>
<dl>
    <dt>Materials</dt> <dt>A blank book worth at least 100 gp. All events are magically written in the book. The book can be kept anyway so long as it is within 5 feet of the caster at all times. Detect Magic will reveal the book as magical while the spell is in effect, but not the nature of the magic. The book can hold the contents of 10 castings of this spell before a new book is required.</dt>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Joyful Rapture';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'All allies and opponents within a 60-foot radius centered on you';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Your inspired words overwhelm others with transcendental bliss.</p>
<p>All allies within the area of effect are freed from any harmful emotion effects. The spell also cures 1d4 points of INT, WIS, or CHR damage (your choice) to all allies in the area.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Auditory'], 5);

        $spell              = new Spell;
        $spell->name        = 'Jump';
        $spell->casting     = 'Somatic Casting';
        $spell->duration    = '1 minute';
        $spell->description = '<p>Your legs surge with strength, giving you the ability to leap high and far. You jump, either vertically or horizontally (or a mixture of the two) 30 feet without touching the ground. You must land on a space of solid ground within 30 feet of you, or else you fall after taking your next action.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The range becomes touch, the target changes to one touched creature, and the duration becomes 1 minute. For the duration of the spell, the target can spend a move action to jump as described any number of times.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Move', 'Transmutation'], 1);
    }
}
