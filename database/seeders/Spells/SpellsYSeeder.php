<?php

namespace Database\Seeders\Spells;

use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsYSeeder extends Seeder
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
        $spell->name        = 'Yugoloth Form';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>This spell functions like True Polymorph, except you take the form of a yugoloth. You gain all that form's abilities and your type changes to Outsider. Any spell that would normally banish outsiders instead ends the spell and leaves you Stunned for 3 rounds.</p>
<dl>
    <dt>Material Components</dt> <dd>A bone from the yugoloth you wish to polymorph into.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph', 'Yugoloth'], 6);
    }
}
