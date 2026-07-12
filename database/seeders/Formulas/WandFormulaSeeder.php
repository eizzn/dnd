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

        $formula                = new Formula;
        $formula->name          = 'Wand of Acid';
        $formula->type          = 'Item';
        $formula->level         = 2;
        $formula->rarity        = 'Common';
        $formula->price         = '50 gp';
        $formula->crafting_time = '3 days';
        $formula->activation    = 'Manipulation: Double Spell Trigger Action';
        $formula->description   = '<p>This wand can have up to 50 charges and requires a Double Spell Trigger Action to activate. When activated, you cast Acid Splash as a 2nd Level caster.</p>';
        $helper->saveFormula($formula, ['Wand', 'Acid'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Acid Splash' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 5],
                'Crafting' => ['dc' => 5, 'meta' => 'Alchemy'],
            ],
            'materials' => ['Glassteel' => ['meta' => 'The wand is made of this material. 1/2 lb']],
            'formulas'  => ['Aqua Regia' => ['meta' => '1 oz']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Wand of Detect Magic';
        $formula->type          = 'Item';
        $formula->rarity        = 'Common';
        $formula->price         = '50 gp';
        $formula->crafting_time = '3 days';
        $formula->activation    = 'Manipulation: Spell Trigger Action';
        $formula->description   = '<p>This wand can have up to 50 charges and requires a Spell Trigger Action to activate.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Detect Magic' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 5],
                'Crafting' => ['dc' => 5, 'meta' => 'Woodworking or Carpentry'],
            ],
            'materials' => ['Spiritual Wood' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Wand of Fear';
        $formula->type          = 'Item';
        $formula->price         = '150 gp';
        $formula->level         = 6;
        $formula->crafting_time = '5 days';
        $formula->activation    = 'Manipulation: Double Spell Trigger Action';
        $formula->description   = '<p>This wand can have up to 20 charges and requires a Double Spell Trigger Action to activate. When activated you cast the Fear Spell.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Fear' => ['meta' => 'Heightened +1']],
            'skills'    => ['Crafting' => ['dc' => 5, 'meta' => 'Metal Working']],
            'materials' => ['Gehennan Morghuth Iron' => ['meta' => 'Wand is forged and then wrapped in leather']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Wand of Fire Bolt';
        $formula->type          = 'Item';
        $formula->price         = '50 gp';
        $formula->crafting_time = '3 days';
        $formula->activation    = 'Manipulation: Double Spell Trigger Action';
        $formula->description   = '<p>This wand can have up to 50 charges and requires a Double Spell Trigger Action to activate.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Fire Bolt' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 5],
                'Crafting' => ['dc' => 5, 'meta' => 'Woodworking or Carpentry'],
            ],
            'materials' => ['Ellond Shrub' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Wand of Frost';
        $formula->type          = 'Item';
        $formula->price         = '50 gp';
        $formula->crafting_time = '3 days';
        $formula->activation    = 'Manipulation: Double Spell Trigger Action';
        $formula->description   = '<p>This wand can have up to 50 charges and requires a Double Spell Trigger Action to activate.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Ray of Frost' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 5],
                'Crafting' => ['dc' => 5, 'meta' => 'Metal Smithing'],
            ],
            'materials' => ['Cold Iron' => ['meta' => 'The wand is forged with this metal']],
            'formulas'  => ['Liquid Ice' => ['meta' => '1 oz']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Wand of Fireballs';
        $formula->type          = 'Item';
        $formula->price         = '350 gp';
        $formula->crafting_time = '14 days';
        $formula->activation    = 'Manipulation: Double Spell Trigger Action';
        $formula->description   = '<p>This wand can have up to 20 charges and requires a Double Spell Trigger Action to activate.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Fireball' => ['meta' => 'Heightened +1']],
            'skills'    => [
                'Arcana'   => ['dc' => 12],
                'Crafting' => ['dc' => 10, 'meta' => 'Woodworking or Carpentry'],
            ],
            'materials' => ['Serpent Tree' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Wand of Light';
        $formula->type          = 'Item';
        $formula->rarity        = 'Uncommon';
        $formula->price         = '20 gp';
        $formula->crafting_time = '3 days';
        $formula->activation    = 'Manipulation: Spell Trigger Action';
        $formula->description   = '<p>This wand can have up to 50 charges and requires a Spell Trigger Action to activate.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Light' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 4],
                'Crafting' => ['dc' => 4, 'meta' => 'Woodworking or Carpentry'],
            ],
            'materials' => ['Ucre Bramble' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Wand of Lightning Bolts';
        $formula->type          = 'Item';
        $formula->price         = '350 gp';
        $formula->crafting_time = '14 days';
        $formula->activation    = 'Manipulation: Double Spell Trigger Action';
        $formula->description   = '<p>This wand can have up to 20 charges and requires a Double Spell Trigger Action to activate.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Lightning Bolt' => ['meta' => 'Heightened +1']],
            'skills'    => [
                'Arcana'   => ['dc' => 12],
                'Crafting' => ['dc' => 10, 'meta' => 'Woodworking or Carpentry'],
            ],
            'materials' => ['Thundertree' => ['meta' => 'Wand is whittled from a branch of this plant']],
            'formulas'  => ['Bottled Lightning'=> ['meta' => '1 oz']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Wand of Magic Missiles';
        $formula->type          = 'Item';
        $formula->rarity        = 'Uncommon';
        $formula->price         = '120 gp';
        $formula->crafting_time = '5 days';
        $formula->activation    = 'Manipulation: Double Spell Trigger Action';
        $formula->description   = '<p>This wand can have up to 20 charges and requires a Double Spell Trigger Action to activate. Each Spell Trigger Action used to activate the wand causes two missiles to fire. You may use another Action to fire an additional missile (3 missiles max) Firing 3 missiles still uses only 1 charge.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Magic Missile' => ['meta' => 'Heightened +1']],
            'skills'    => [
                'Arcana'   => ['dc' => 7],
                'Crafting' => ['dc' => 7, 'meta' => 'Woodworking or Carpentry'],
            ],
            'materials' => ['Spiritual Wood' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Wand of Shield';
        $formula->type          = 'Item';
        $formula->price         = '50 gp';
        $formula->crafting_time = '3 days';
        $formula->activation    = 'Manipulation: Spell Trigger Action';
        $formula->description   = '<p>This wand can have up to 50 charges and requires a Spell Trigger Action to activate</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Shield' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 5],
                'Crafting' => ['dc' => 5, 'meta' => 'Woodworking or Carpentry'],
            ],
            'materials' => ['Spiritual Wood' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Wand of Shock';
        $formula->type          = 'Item';
        $formula->price         = '50 gp';
        $formula->crafting_time = '2 days';
        $formula->activation    = 'Manipulation: Spell Trigger Action';
        $formula->description   = '<p>This wand can have up to 50 charges and requires a Spell Trigger Action to activate and a Melee Touch Attack to deliver the Shocking Grasp.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Shocking Grasp' => ['meta' => 'A second level Spell Slot must be used']],
            'skills'    => [
                'Arcana'   => ['dc' => 5],
                'Crafting' => ['dc' => 5, 'meta' => 'Woodworking or Carpentry'],
            ],
            'materials' => ['Thundertree' => ['meta' => 'Wand is whittled from a branch of this plant']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Wand of Viscus Globs';
        $formula->type          = 'Item';
        $formula->level         = 6;
        $formula->rarity        = 'Rare';
        $formula->price         = '200 gp';
        $formula->crafting_time = '10 days';
        $formula->activation    = 'Manipulation: Double Spell Trigger Action';
        $formula->description   = '<p>This wand can have up to 20 charges and requires a Double Spell Trigger Action to activate. When activated, you shoot a globe of a sticky substance that will stick to whatever it hits. This requires a Ranged Touch Attack. This can cause the Target to stick to another object, causing the Target to become Restrained. It requires a DC 15 STR check to break free of the stick substance. This sticky substances dissipates after 1 hour.</p>
<p>On a Critical Hit on the Ranged Touch Attack, the globe strikes the Targets head, causing them to not be able to breathe. This has no effect on creatures that do not need to breathe, such as Undead, Constructs and Outsiders.</p>
<p>The sticky substance can be dissolved with a pint of alcohol, or Oil of Etherealness, or Universal Solvent.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Web' => ['meta' => 'Heightened +2']],
            'skills'    => ['Crafting' => ['dc' => 10, 'meta' => 'Woodworking or Carpentry']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Wand of Web';
        $formula->type          = 'Item';
        $formula->level         = 6;
        $formula->price         = '200 gp';
        $formula->crafting_time = '10 days';
        $formula->activation    = 'Manipulation: Double Spell Trigger Action';
        $formula->description   = '<p>This wand can have up to 20 charges and requires a Double Spell Trigger Action to activate. When activated, you cast the Web Spell.</p>';
        $helper->saveFormula($formula, ['Wand'], [
            'feats'     => ['Craft Implement'],
            'spells'    => ['Web' => ['meta' =>'Heightened +2']],
            'skills'    => ['Crafting' => ['dc' => 10, 'meta' => 'Woodworking or Carpentry']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Staff of Fire';
        $formula->type          = 'Staff';
        $formula->level         = 12;
        $formula->price         = '1,000 gp';
        $formula->crafting_time = '2 weeks';
        $formula->activation    = 'Manipulation: Double Spell Trigger Action';
        $formula->description   = '<p>This wooden staff is wrapped in iron metal and comes with 30 Charges. Once you Attune to this staff, you gain Resistance to Fire as long as you hold the Staff. It also offers the following Spells.</p>
<table>
    <thead>
        <tr>
            <th>Spell</th>
            <th>Charges</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Burning Hands</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Fireball</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Fire Shield</td>
            <td>3</td>
        </tr>
        <tr>
            <td>Wall of Fire</td>
            <td>4</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Staff', 'Fire'], [
            'feats'     => ['Craft Implement'],
            'spells'    => [
                'Resistance'    => ['meta' => 'Must use a 3rd level Spell Slot'],
                'Burning Hands' => ['meta' => 'Heightened +4'],
                'Fireball'      => ['meta' => 'Heightened +3'],
                'Fire Shield'   => ['meta' => 'Heightened +2'],
                'Wall of Fire'  => ['meta' => 'Heightened +1'],
            ],
            'skills'    => [
                'Arcana'    => ['dc' => 12],
                'Crafting'  => ['dc' => 12, 'meta' => 'Woodworking and Metalworking'],
            ],
            'materials' => [
                'Ellond Shrub' => ['meta' => 'Staff is whittled from the trunk of the shrub'],
                'Arandur'      => ['meta' => 'Wrap the wood while the metal is still hot but not enough to burn the wood'],
            ],
        ]);
    }
}
