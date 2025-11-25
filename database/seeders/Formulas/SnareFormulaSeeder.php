<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SnareFormulaSeeder extends Seeder
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
        $formula->name        = 'Alarm';
        $formula->type        = 'Snare';
        $formula->level       = 1;
        $formula->price       = '3 gp';
        $formula->description = '<p>An alarm snare sounds when a Small or smaller creature enters the snare\'s square. The snare then makes a loud noise that can be heard by all creatures within 100 to 500 feet of the snare (you choose how load the snare is and the distance at which it can be heard when you create the snare).</p>';
        $helper->saveFormula($formula, ['Auditory', 'Consumable', 'Mechanical', 'Trap'], [
            'skills' => ['Crafting' => ['dc' => 3, 'meta' => 'Snares']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Biting Snare';
        $formula->type        = 'Snare';
        $formula->level       = 4;
        $formula->price       = '10 gp';
        $formula->description = '<p>A biting snare acts as difficult terrain until a creature enters its square. That creature must then attempt a DC DEX Save.</p>
<dl>
    <dt>Success</dt> <dd>The target is unaffected</dd>
    <dt>Failure</dt> <dd>The target takes 1D8 piercing damage</dd>
    <dt>Critical Failure</dt> <dd>The target takes 2D8 piercing damage and is Hampered 10 until it recovers at least 1 Hit Point</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Mechanical', 'Trap'], [
            'skills' => ['Crafting' => ['dc' => 6, 'meta' => 'Snares']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Caltrop Snare';
        $formula->type        = 'Snare';
        $formula->level       = 1;
        $formula->price       = '2 gp';
        $formula->description = '<p>This trap consists of a hidden canister of caltrops attached to a trip wire. When the trap is triggered, ti flings the caltrops into a square adjacent to the trap. You choose which square when you set up the snare.</p>
<p>If the caltrops scatter into the same square as a creature, that creature must attempt the Acrobatics check immediately.</p>
<dl>
    <dt>Requirements</dt> <dd>Caltrops</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Mechanical', 'Trap'], [
            'skills' => ['Crafting' => ['dc' => 3, 'meta' => 'Snares']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Exploding Snare';
        $formula->type        = 'Snare';
        $formula->level       = 8;
        $formula->price       = '50 gp';
        $formula->rarity      = 'Rare';
        $formula->description = "<p>You set a trio of alchemist's firebombs to explode in unison when a creature enters the exploding snare's square. The target must attempt a DC 20 DEX Save.</p>
<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>The target takes 1D8 Fire damage</dd>
    <dt>Failure</dt> <dd>The target takes 3D8 Fire damage and 3 Persistent Fire damage</dd>
    <dt>Critical Failure</dt> <dd>The target takes 6D6 Fire damage and 3 Persistent Fire damage</dd>
    <dt>Requirements</dt> <dd>Three vials of Alchemist's Fire</dd>
</dl>";
        $helper->saveFormula($formula, ['Consumable', 'Fire', 'Mechanical', 'Trap'], [
            'skills' => ['Crafting' => ['dc' => 10, 'meta' => 'Snares']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Freezing Snare';
        $formula->type        = 'Snare';
        $formula->level       = 8;
        $formula->price       = '50 gp';
        $formula->rarity      = 'Rare';
        $formula->description = "<p>You set a trio of alchemist's Liquid Ice bombs to explode in unison when a creature enters the freezing snare's square. The target must attempt a DC 20 DEX Save.</p>
<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>The target takes 1D8 Cold damage</dd>
    <dt>Failure</dt> <dd>The target takes 3D8 Cold damage and is Hampered 10 until the end of its next turn</dd>
    <dt>Critical Failure</dt> <dd>The target takes 6D8 Cold damage is Hampered 10 until the end of its next turn</dd>
</dl>";
        $helper->saveFormula($formula, ['Cold', 'Consumable', 'Mechanical', 'Trap'], [
            'skills'   => ['Crafting' => ['dc' => 10, 'meta' => 'Snares']],
            'formulas' => ['Liquid Ice' => ['meta' => '3 bottles']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Hobbling Snare';
        $formula->type        = 'Snare';
        $formula->level       = 4;
        $formula->price       = '10 gp';
        $formula->rarity      = 'Rare';
        $formula->description = '<p>A hobbling snare acts as difficult terrain until a creature has entered its square. That creature must then attempt a DC 17 DEX Saves.</p>
<dl>
    <dt>Success</dt> <dd>The target is unaffected</dd>
    <dt>Failure</dt> <dd>The target is Hampered 10 for 1 minute or until it regains at least 1 Hit Point</dd>
    <dt>Critical Failure</dt> <dd>The target is Hampered 20 for 1 minute or until it regains at least 1 Hit Point</dd>
</dl>';
        $helper->saveFormula($formula, ['Cold', 'Consumable', 'Mechanical', 'Trap'], [
            'skills' => ['Crafting' => ['dc' => 10, 'meta' => 'Snares']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Lightning Snare';
        $formula->type        = 'Snare';
        $formula->level       = 8;
        $formula->price       = '50 gp';
        $formula->rarity      = 'Rare';
        $formula->description = "<p>You set a trio of bottled lightning bombs to explode in unison when a creature enters the lightning snare's square. The target must attempt a DC 20 DEX Save.</p>
<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>The target takes 1D6 Electricity damage</dd>
    <dt>Failure</dt> <dd>The target takes 3D6 Electricity damage and is Flat-Fooded for 1 round</dd>
    <dt>Critical Failure</dt> <dd>The target takes 6D6 Electricity damage and is Flat-Footed for 1 round</dd>
</dl>";
        $helper->saveFormula($formula, ['Consumable', 'Electricity', 'Mechanical', 'Trap'], [
            'skills'   => ['Crafting' => ['dc' => 10, 'meta' => 'Snares']],
            'formulas' => ['Bottled Lightning' => ['meta' => '3 bottles']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Marking Snare';
        $formula->type        = 'Snare';
        $formula->level       = 1;
        $formula->price       = '2 gp';
        $formula->description = '<p>When you create the snare, you must decide whether to make the snare a dye or a scent marker. Either type of marking grants a +2 circumstance bonus to track the creature for up to 24 hours or until dye or scent is washed off (requiring at least a gallon of water and 10 minutes of scrubbing). A creature that enters a square of the marking snare must attempt a DC 17 DEX Save.</p>
<dl>
    <dt>Success</dt> <dd>The target is unaffected</dd>
    <dt>Failure</dt> <dd>The snare marks the target</dd>
    <dt>Critical Failure</dt> <dd>The snare marks the target, and the target is blinded until the end of its next turn</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Mechanical', 'Trap'], [
            'skills' => ['Crafting' => ['dc' => 3, 'meta' => 'Snares']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Signaling Snare';
        $formula->type        = 'Snare';
        $formula->level       = 1;
        $formula->price       = '2 gp';
        $formula->description = '<p>When a creature enters a square of a signaling snare, nothing happens to the creature, but instead it causes a small, easily missed disruption to the terrain that allows the snare\'s creator or another creature who knows what to look for to determine whether a creature of the appropriate size entered the square.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Mechanical', 'Trap'], [
            'skills' => ['Crafting' => ['dc' => 3, 'meta' => 'Snares']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Slowing Snare';
        $formula->type        = 'Snare';
        $formula->level       = 1;
        $formula->price       = '2 gp';
        $formula->description = '<p>A square with this snare become difficult terrain when the first creature enters it, and then it is destroyed.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Mechanical', 'Trap'], [
            'skills' => ['Crafting' => ['dc' => 3, 'meta' => 'Snares']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Stalker Bane Snare';
        $formula->type        = 'Snare';
        $formula->level       = 1;
        $formula->rarity      = 'Rare';
        $formula->price       = '2 gp';
        $formula->description = '<p>This snare explodes with a burst of clinging powder that can cling to a creature stepping into its square. A creature that enters a square of the stalker bane snare must attempt a DC 19 DEX Save.</p>
<dl>
    <dt>Success</dt> <dd>The target is unaffected</dd>
    <dt>Failure</dt> <dd>Powder sticks to the target, causing it to leave behind telltale footprints. If the target is or becomes invisible, creatures that would otherwise be unable to see it count it as Sensed without spending an Action to find it</dd>
    <dt>Critical Failure</dt> <dd>Powder clumps on the target, constantly flaking away. If the target is or becomes invisible, creatures that would otherwise be unable to see it count it as Concealed instead.</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Mechanical', 'Trap'], [
            'skills' => ['Crafting' => ['dc' => 3, 'meta' => 'Snares']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Striking Snare';
        $formula->type        = 'Snare';
        $formula->level       = 8;
        $formula->price       = '50 gp';
        $formula->description = "<p>You set a group of either stones or wooden stakes to strike a creature that enters the snare's square. The creature must attempt a DC 21 DEX Save. If you choose stones, the snare deals bludgeoning damage. If you choose spikes, it deals piercing damage.</p>
<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>The target takes 1D8 damage</dd>
    <dt>Failure</dt> <dd>The target takes 3D8 damage</dd>
    <dt>Critical Failure</dt> <dd>The target takes 6D8 damage</dd>
</dl>";
        $helper->saveFormula($formula, ['Consumable', 'Mechanical', 'Trap'], [
            'skills' => ['Crafting' => ['dc' => 10, 'meta' => 'Snares']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Trip Snare';
        $formula->type        = 'Snare';
        $formula->level       = 4;
        $formula->price       = '10 gp';
        $formula->description = '<p>You set a cunning wire to trip a creature. A medium or smaller creature that enters this snare\'s square must attempt a DC 18 DEX Save. If you want to create a trip group of contiguous snares of a size equal to the space of that larger creature. For instance, a square-shaped group of four contiguous trip snares in a 10-foot-by-10-foot square can be used to trip a Large creature.</p>
<dl>
    <dt>Success</dt> <dd>The target is unaffected</dd>
    <dt>Failure</dt> <dd>The target falls prone</dd>
    <dt>Critical Failure</dt> <dd>The target falls prone and takes 1D6 Bludgeoning damage</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Mechanical', 'Trap'], [
            'skills' => ['Crafting' => ['dc' => 6, 'meta' => 'Snares']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Warning Snare';
        $formula->type        = 'Snare';
        $formula->level       = 4;
        $formula->price       = '10 gp';
        $formula->description = "<p>This snare is like an alarm snare, but its subtle sound blends into ambient noise. You can detect this sound as long as you're within 1,000 feet of the snare and aren't prevented from hearing it. Other creatures in that area who are searching might notice the sound if their Perception check result meets or exceeds your Craft DC.</p>";
        $helper->saveFormula($formula, ['Auditory', 'Consumable', 'Mechanical', 'Trap'], [
            'skills' => ['Crafting' => ['dc' => 6, 'meta' => 'Snares']],
        ]);
    }
}
