<?php

namespace Database\Seeders\Spells;

use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsZSeeder extends Seeder
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
        $spell->name        = 'Zin-carla';
        $spell->casting     = '3 hours (Material, Somatic, Verbal, Ability Damage, Secondary Caster, Skill Check)';
        $spell->targets     = '1 dead humanoid creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You animate a dead corpse to undead status. You may only reanimate a corpse that was slain in ritual sacrifice to Lolth that you performed. The animated corpse retains all of its skills and abilities that it had in life, its original soul brought back to inhabit and animate the corpse. You must give the corpse a single task, one that can be completed within 3 months. Once the task is completed or the 3 months are up, the corpse disintegrates into dust and the animating soul is released.</p>
<dl>
    <dt>Material Components</dt> <dd>The ceremonial dagger that was used to sacrifice the corpse when it was alive</dd>
    <dt>Ability Damage</dt> <dd>2 CON damage</dd>
    <dt>Secondary Casters</dt> <dd>At least 2 additional priests of Lolth</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ritual', 'Evil'], 7);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 15]);

        $spell                 = new Spell;
        $spell->name           = 'Zone of Truth';
        $spell->rarity         = 'Rare';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '20-foot burst. 30 foot range';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>Creatures within the area or those entering it have difficulty lying, depending on their WIS Save. Each potentially affected creature is allowed a Save to avoid the effects when the spell is cast or when the creature first enters the area.</p>
<p>You keep the results of this initial Save if you leave and reenter the area. Affected creatures are aware of this enchantment. Therefore, they can avoid answering questions to which they would normally respond with a lie, or they might be evasive as long as they remain within the boundaries of the truth.</p>';
        $spell->saves = "<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>The target takes a -1 conditional penalty to Deception checks</dd>
    <dt>Failure</dt> <dd>The target can't speak any deliberate and intentional lies and takes a -1 conditional penalty to Deception checks</dd>
    <dt>Critical Failure</dt> <dd>The target can't speak any deliberate and intentional lies and takes a -4 conditional penalty to Deception checks</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Divination', 'Enchantment', 'Mental'], 2);
    }
}
