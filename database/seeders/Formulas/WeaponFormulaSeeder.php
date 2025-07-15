<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class WeaponFormulaSeeder extends Seeder
{
    public function run()
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $formula              = new Formula;
        $formula->name        = 'Banesword';
        $formula->type        = 'Weapon';
        $formula->level       = 7;
        $formula->price       = '9,315 gp';
        $formula->crafting    = '';
        $formula->description = '<p>This +1 Lawful Longsword is common among Banites, the hilt adorned with symbols of Bane.</p>';
        $helper->saveFormula($formula, ['Formula'], [
            'feats'    => ['Craft Armament'],
            'formulas' => ['Axiomatic'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Nightblade';
        $formula->type        = 'Weapon';
        $formula->level       = 7;
        $formula->price       = '4,502 gp';
        $formula->description = '<p>The Red Wizards make these +1 daggers of Weakening for their agents.</p>';
        $helper->saveFormula($formula, ['Formula'], [
            'feats'   => ['Craft Armament'],
            'formula' => ['Weakening'],
        ]);
    }
}
