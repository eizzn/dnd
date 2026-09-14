<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ConstructFormulasSeeder extends Seeder
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
        $formula->name          = 'Bogun';
        $formula->type          = 'Construct';
        $formula->level         = 6;
        $formula->price         = '5 gp worth of rare materials';
        $formula->rarity        = 'Uncommon';
        $formula->crafting_time = '1 week';
        $formula->description   = '<p>You infuse living magic into a small mannequin that you have created from vegetable matter.</p>
<p>You may assemble the body personally or hire someone else to do it. Once the body is finished, you must animate it through an extended ritual that requires a week to complete. You must labor for at least 8 hours each day in complete solitude in a forest grove. Any interruption from another sentient creature undoes the magic. If you are weaving the body yourself, that process and the crafting can be performed together.</p>
<p>When you are not actively working on the mannequin, you must rest and can perform no other activities except eating, sleeping, or talking. Missing even one day causes the process to fail, at which point you must start anew, though the previously crafted body and the grove can be reused.</p>
<p>On the final day, the listed spells must be cast, at which point, you suffer 1 point of CON damage.</p>';
        $helper->saveFormula($formula, ['Construct', 'Necromancy'], [
            'skills' => [
                'Crafting' => ['dc' => 7, 'meta' => 'Basketweaving'],
                'Nature'   => ['dc' => 7],
            ],
            'feats'  => ['Craft Armament'],
            'spells' => ['Control Plants', 'Shape Wood'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Create Homunculus';
        $formula->type          = 'Construct';
        $formula->level         = 6;
        $formula->price         = '1,000 gp';
        $formula->rarity        = 'Uncommon';
        $formula->crafting_time = '1 hour';
        $formula->crafting      = '
<ul>
    <li>Clay (consumed)</li>
    <li>Ash (consumed)</li>
    <li>Mandrake Root (consumed)</li>
    <li>A jewel-encrusted dagger worth at least 1,000 gp</li>
    <li>Your own blood (4 points of CON damage)</li>
</ul>';
        $formula->description   = "<p>You create a homunculus (see monster entry). While speaking an intricate incantation, you cut yourself with a jewel-encrusted dagger. You then drip your blood on the spell's other components and touch them, transforming them into a special construct called a homunculus. It is your faithful companion, and if it dies, you suffer 4 CON damage.</p>
<p>You can have only one homunculus at a time. If you perform this ritual while your homunculus lives, the ritual fails.</p>";
        $helper->saveFormula($formula, ['Construct'], [
            'skills'    => [
                'Arcana' => ['dc' => 7],
            ],
            'feats'     => ['Craft Wondrous Item'],
            'spells'    => ['Animate Objects', 'Arcane Eye', 'Mirror Image', 'Mending'],
        ]);


        $formula                = new Formula;
        $formula->name          = 'Clay Golem';
        $formula->type          = 'Construct';
        $formula->level         = 12;
        $formula->price         = '65,000 gp';
        $formula->rarity        = 'Rare';
        $formula->crafting_time = '30 days';
        $formula->crafting      = '
<ul>
    <li>At least 1,000 lbs of clay</li>
    <li>Special Oils and Powders worth at least 2,000 gp</li>
    <li>7 Drops of fresh blood (2 points of CON damage)</li>
</ul>';
        $formula->description = '<p>You create a Clay Golem. At the time of completion, whoever is to be the owner of the golem must sacrifice 7 drops of their own blood. The blood must be fresh (straight from a wound).</p>';
        $helper->saveFormula($formula, ['Construct'], [
            'skills'    => ['Crafting' => ['dc' => 15, 'meta' => 'Sculpting or Pottery']],
            'feats'     => ['Craft Armament', 'Craft Wondrous Item'],
            'spells'    => ['Shape Stone', 'Stone Metamorphosis', 'Animate Objects', 'Summon Elemental, Lesser'],
            'materials' => ['Blood' => ['meta' => '7 drops of your blood at the time of completion']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Flesh Golem';
        $formula->type          = 'Construct';
        $formula->level         = 9;
        $formula->price         = '50,000 gp';
        $formula->rarity        = 'Rare';
        $formula->crafting_time = '60 days';
        $formula->crafting      = '
<ul>
    <li>The pieces of a Flesh Golem must come from normal humanoid corpses that have not decayed significantly. Assembly requires a minimum of six different bodies—one for each limb, the torso (including head), and the brain. In some cases, more bodies may be necessary. Special unguents and bindings worth 500 gp are also required. Note that creating a flesh golem requires casting a spell with the evil descriptor.</li>
    <li>Assembling the body requires a DC 22 Crafting check and a DC 15 Heal check</li>
</ul>';
        $formula->description = '<p>You create a Flesh Golem. At the time of completion, whoever is to be the owner of the golem must cast the Dominate spell.</p>';
        $helper->saveFormula($formula, ['Construct'], [
            'skills' => ['Crafting' => ['dc' => 10, 'meta' => 'Leatherworking'], 'Medicine' => ['dc' => 15]],
            'feats'  => ['Craft Armament', 'Craft Wondrous Item'],
            'spells' => ['Animate Dead', "Bull's Strength", 'Dominate', 'Lightning Bolt'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Gargoyle';
        $formula->type          = 'Elemental Infusion';
        $formula->level         = 11;
        $formula->price         = 'At least 3,000 gp';
        $formula->rarity        = 'Rare';
        $formula->crafting_time = '1 week';
        $formula->crafting      = '';
        $formula->description   = '<p>You entice an Earth Elemental to come and animate a stone statue that you have carved from a large piece of stone. The elemental will typically agree to serve in exchange for payment of some sort (gems, gold, magical items, spell castings, etc.).</p>
<p>The elemental will not agree to animate the statue at all times. Typically, they will agree to serve either during the day or night. During the time when the elemental is not animating the statue, the elemental will return to their home plane while the statue is nothing more than stone.</p>
<p>This formula may be used to create a Margoyle. The minimum level becomes 17, the cost becomes 10,000 gp, and the Stoneworking DC becomes 28.</p>';
        $helper->saveFormula($formula, ['Elemental', 'Earth', 'Enchantment'], [
            'skills'    => ['Crafting' => ['dc' => 12, 'meta' => 'Stoneworking']],
            'spells'    => ['Shape Stone', 'Polymorph', 'Fly', 'Summon Elemental', 'Geas'],
            'materials' => ['Granite' => ['meta' => 'A large single piece the gargoyle is to be carved from']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Iron Golem';
        $formula->type          = 'Construct';
        $formula->level         = 16;
        $formula->price         = '100,000 gp';
        $formula->rarity        = 'Rare';
        $formula->crafting_time = '120 days';
        $formula->crafting      = "
<ul>
    <li>An iron golem's body is sculpted from 5,000 pounds of pure iron, smelted with rare tinctures and admixtures costing at least 10,000 gp.</li>
    <li>Assembling the body requires a DC 29 Crafting check.</li>
</ul>";
        $formula->description = '<p>You create an Iron Golem.</p>';
        $helper->saveFormula($formula, ['Construct'], [
            'skills' => ['Crafting' => ['dc' => 17, 'meta' => 'Armorsmithing or Weaponsmithing']],
            'feats'  => ['Craft Armament', 'Craft Wondrous Item'],
            'spells' => [
                'Animate Objects', 'Investiture of Flame', 'Imbue with Adamantine', 'Summon Elemental',
            ],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Stone Golem';
        $formula->type          = 'Construct';
        $formula->level         = 14;
        $formula->price         = '80,000 gp';
        $formula->rarity        = 'Rare';
        $formula->crafting_time = '90 days';
        $formula->crafting      = "
<ul>
    <li>A stone golem's body is chiseled from a single block of hard stone, such as granite, weighing at least 3,000 pounds. The stone must be of exceptional quality, and costs 5,000 gp</li>
    <li>Assembling the body requires a DC 27 Crafting check.</li>
</ul>";
        $formula->description = '<p>You create a Stone Golem.</p>';
        $helper->saveFormula($formula, ['Construct'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Sculpting or Stonemasonry']],
            'feats'  => ['Craft Armament', 'Craft Wondrous Item'],
            'spells' => ['Shape Stone', 'Stone Metamorphosis', 'Animate Objects', 'Summon Elemental'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Effigy';
        $formula->type          = 'Construct';
        $formula->level         = 5;
        $formula->price         = '2,000 gp per Hit Die';
        $formula->rarity        = 'Rare';
        $formula->crafting_time = '2 days per Hit Die';
        $formula->description   = "<p>Effigies are magically animated automatons built in the form of living creatures. They are things of clockwork mechanisms and always animated by an elemental spirit bound to their mechanical shells. Magical artificers and artisans capable of creating such complex devices are few and far between, so effigies are not at all common.</p>
<p>Unlike with most constructs, an Effigy creature's true nature is not always immediately obvious. Some are quite lifelike, revealing their true nature only after taking serious damage. An observer must succeed at a DC 20 Spot check to notice that the effigy is an automaton, not a living creature of its type.</p>
<p>In game terms, an effigy serves similarly to a powerful animal companion or mechanical familiar. It maintains a deep, unshakable bond with its creator and advances its link through simple commands. Effigy creatures do only what they are instructed to do by their creators. They draw no conclusions of their own and follow orders explicitly with no regard for their own safety. The commands given them must be simple, such as 'Remain here and attack any elves who enter this room,' or 'Follow and defend against any who attack my party.'</p>
<p>An Effigy's creator can command it if the effigy is within 60 feet and can see and hear him with an Action. If uncommanded, an effigy usually follows its last instruction to itself if attacked. An Effigy's creator can order the creature to obey the orders of another individual with an Action (who can in turn order the effigy to obey someone else). However, the Effigy's creator can always resume control over his creation by commanding the effigy to obey him alone with an Action.</p>
<p>Damaged effigies can be repaired by any repair spell or by manual repair in an appropriate workshop or laboratory. The individual performing the repairs must have the Craft Armament feat or 10 ranks in Knowledge (architecture and engineering), and must spend 50 gp and 1 hour per hit point restored.</p>";
        $helper->saveFormula($formula, ['Construct'], [
            'skills' => ['Crafting' => ['dc' => 7, 'meta' => 'Metalworking or Clockwork']],
            'feats'  => ['Craft Effigy'],
        ]);
    }
}
