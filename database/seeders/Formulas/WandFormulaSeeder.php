<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Models\Material;
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
        $formula->name        = 'Wand of Acid';
        $formula->type        = 'Item';
        $formula->rarity      = 'Common';
        $formula->price       = '50 gp';
        $formula->description = '';
        $helper->saveFormula($formula, ['Wand', 'Acid'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Acid Splash' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 5],
                'Crafting' => ['dc' => 5, 'meta' => 'Alchemy']
            ],
            'materials' => ['Glassteel' => ['meta' => 'The wand is made of this material. 1/2 lb']],
            'formulas'  => ['Aqua Regia' => ['meta' => '1 oz']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wand of Detect Magic';
        $formula->type        = 'Item';
        $formula->rarity      = 'Common';
        $formula->price       = '50 gp';
        $formula->description = '<p>This wand can have up to 50 charges and requires a Spell Trigger Action to activate.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Detect Magic' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 5],
                'Crafting' => ['dc' => 5, 'meta' => 'Woodworking or Carpentry']
            ],
            'materials' => ['Spiritual Wood' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wand of Fire Bolt';
        $formula->type        = 'Item';
        $formula->price       = '50 gp';
        $formula->description = '<p>This wand can have up to 50 charges and requires a Double Spell Trigger Action to activate.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Fire Bolt' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 5],
                'Crafting' => ['dc' => 5, 'meta' => 'Woodworking or Carpentry']
            ],
            'materials' => ['Ellond Shrub' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wand of Frost';
        $formula->type        = 'Item';
        $formula->price       = '50 gp';
        $formula->description = '<p>This wand can have up to 50 charges and requires a Double Spell Trigger Action to activate.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Ray of Frost' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 5],
                'Crafting' => ['dc' => 5, 'meta' => 'Metal Smithing']
            ],
            'materials' => ['Cold Iron' => ['meta' => 'The wand is forged with this metal']],
            'formulas'  => ['Liquid Ice' => ['meta' => '1 oz']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wand of Fireballs';
        $formula->type        = 'Item';
        $formula->price       = '350 gp';
        $formula->description = '<p>This wand can have up to 20 charges and requires a Double Spell Trigger Action to activate.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Fireball' => ['meta' => 'Heightened +1']],
            'skills'    => [
                'Arcana'   => ['dc' => 12],
                'Crafting' => ['dc' => 10, 'meta' => 'Woodworking or Carpentry']
            ],
            'materials' => ['Serpent Tree' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wand of Light';
        $formula->type        = 'Item';
        $formula->rarity      = 'Uncommon';
        $formula->price       = '20 gp';
        $formula->description = '<p>This wand can have up to 50 charges and requires a Spell Trigger Action to activate.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Light' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 4],
                'Crafting' => ['dc' => 4, 'meta' => 'Woodworking or Carpentry']
            ],
            'materials' => ['Ucre Bramble' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wand of Lightning Bolts';
        $formula->type        = 'Item';
        $formula->price       = '350 gp';
        $formula->description = '<p>This wand can have up to 20 charges and requires a Double Spell Trigger Action to activate.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Lightning Bolt' => ['meta' => 'Heightened +1']],
            'skills'    => [
                'Arcana'   => ['dc' => 12],
                'Crafting' => ['dc' => 10, 'meta' => 'Woodworking or Carpentry']
            ],
            'materials' => ['Thundertree' => ['meta' => 'Wand is whittled from a branch of this plant']],
            'formulas'  => ['Bottled Lightning'=> ['meta' => '1 oz']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wand of Magic Missiles';
        $formula->type        = 'Item';
        $formula->rarity      = 'Uncommon';
        $formula->price       = '120 gp';
        $formula->description = '<p>This wand can have up to 20 charges and requires a Double Spell Trigger Action to activate. Each Spell Trigger Action used to activate the wand causes two missiles to fire. You may use another Action to fire an additional missile (3 missiles max) Firing 3 missiles still uses only 1 charge.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Magic Missile' => ['meta' => 'Heightened +1']],
            'skills'    => [
                'Arcana'   => ['dc' => 7],
                'Crafting' => ['dc' => 7, 'meta' => 'Woodworking or Carpentry']
            ],
            'materials' => ['Spiritual Wood' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wand of Shield';
        $formula->type        = 'Item';
        $formula->price       = '50 gp';
        $formula->description = '<p>This wand can have up to 50 charges and requires a Spell Trigger Action to activate</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Shield' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 5],
                'Crafting' => ['dc' => 5, 'meta' => 'Woodworking or Carpentry']
            ],
            'materials' => ['Spiritual Wood' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wand of Shock';
        $formula->type        = 'Item';
        $formula->price       = '50 gp';
        $formula->description = '<p>This wand can have up to 50 charges and requires a Spell Trigger Action to activate and a Melee Touch Attack to deliver the Shocking Grasp.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Shocking Grasp' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 5],
                'Crafting' => ['dc' => 5, 'meta' => 'Woodworking or Carpentry']
            ],
            'materials' => ['Thundertree' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);
    }
}
