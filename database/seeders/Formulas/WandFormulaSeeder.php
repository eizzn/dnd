<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class WandFormulaSeeder extends Seeder
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

        $formula              = new Formula;
        $formula->name        = 'Wand of Detect Magic';
        $formula->type        = 'Item';
        $formula->rarity      = 'Common';
        $formula->price       = '50 gp';
        $formula->description = '<p>This wand can have up to 50 charges and requires a Spell Trigger Action to activate. Crafting a Wand of Detect Magic with 50 charges costs 50 gp (1 gp per charge) and can sell for as much as 100 gp.</p>
<p>Use the following formula to determine the exact cost of crafting a Wand of Detect Magic.</p>
<blockquote>
    Caster Level X Spell Level X 1 X number of charges gp. Assume Cantrips have a Spell Level of 1/2
</blockquote>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'  => ['Craft Implement'],
            'spells' => ['Detect Magic'],
            'skills' => ['Arcana' => ['dc' => 5, 'meta' => 'Woodworking or Carpentry']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wand of Fire Bolt';
        $formula->type        = 'Item';
        $formula->price       = '250 gp';
        $formula->description = '<p>This wand can have up to 50 charges and requires a Spell Trigger Action to activate. Crafting a Wand of Fire Bolt with 50 charges costs 250 gp (5 gp per charge) and can sell for as much as 400 gp.</p>
<p>Use the following formula to determine the exact cost of crafting a Wand of Fire Bolt.</p>
<blockquote>
    Caster Level X Spell Level X 10 X number of charges gp. Assume Cantrips have a Spell Level of 1/2
</blockquote>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'  => ['Craft Implement'],
            'spells' => ['Detect Magic'],
            'skills' => ['Arcana' => ['dc' => 5, 'meta' => 'Woodworking or Carpentry']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wand of Magic Missiles';
        $formula->type        = 'Item';
        $formula->rarity      = 'Uncommon';
        $formula->price       = '100 gp';
        $formula->description = '<p>This wand can have up to 10 charges and requires a Spell Trigger Action to activate. Each Spell Trigger Action used to activate the wand causes two missiles to fire. You may use another Action to fire an additional missile (3 missiles max) Firing 3 missiles still uses only 1 charge.</p>
<p>Use the following formula to determine the exact cost of crafting a Wand of Detect Magic Missiles.</p>
<blockquote>
    Caster Level X Spell Level X 10 X number of charges gp. Assume Cantrips have a Spell Level of 1/2
</blockquote>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'  => ['Craft Implement'],
            'spells' => ['Magic Missile'],
            'skills' => ['Arcana' => ['dc' => 5, 'meta' => 'Woodworking or Carpentry']],
        ]);
    }
}
