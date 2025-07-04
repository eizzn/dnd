<?php

namespace Database\Seeders\Equipment;

use App\Models\Equipment;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class AdventuringGearsSeeder extends Seeder
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

        $equip              = new Equipment;
        $equip->name        = "Alchemist's Tools";
        $equip->price       = '60';
        $equip->bulk        = '2';
        $equip->hands       = 2;
        $equip->description = "<p>These beakers and chemicals can be used to set up a mobile alchemical laboratory. Expert-quality alchemist's tools give a +1 item bonus to Crafting checks to create alchemical items, and master-quality ones give a +2 item bonus.</p>";
        $helper->addTypesToSimpleObject($equip);
        $id = $equip->id;

        $equip            = new Equipment;
        $equip->name      = "Expert Alchemist's Tools (Level 2)";
        $equip->price     = 250;
        $equip->bulk      = 2;
        $equip->hands     = 2;
        $equip->parent_id = $id;
        $helper->addTypesToSimpleObject($equip);

        $equip            = new Equipment;
        $equip->name      = "Expert Alchemist's Tools (Level 7)";
        $equip->price     = 3750;
        $equip->bulk      = 2;
        $equip->hands     = 2;
        $equip->parent_id = $id;
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = "Artisan's Tools";
        $equip->price       = '50';
        $equip->bulk        = '8';
        $equip->hands       = 2;
        $equip->description = "<p>you can create items from raw materials using artisan's tools. This involves using the Crafting skill to Craft the items. Expert artisan's tools give you a +1 item bonus to the check, and master tools give you a +2 item bonus. Different sets might be needed for different kinds of work, as determined by the GM.</p>
<p>For example, blacksmith's tools differ from woodworker's tools.</p>";
        $helper->addTypesToSimpleObject($equip);
        $id = $equip->id;

        $equip            = new Equipment;
        $equip->name      = "Expert Artisan's Tools (Level 2)";
        $equip->price     = 200;
        $equip->bulk      = 8;
        $equip->hands     = 2;
        $equip->parent_id = $id;
        $helper->addTypesToSimpleObject($equip);

        $equip            = new Equipment;
        $equip->name      = "Expert Artisan's Tools (Level 7)";
        $equip->price     = 3000;
        $equip->bulk      = 8;
        $equip->hands     = 2;
        $equip->parent_id = $id;
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Oil of Etherealness';
        $equip->price       = 5000;
        $equip->bulk        = 'L';
        $equip->hands       = 2;
        $equip->description = "<p>Beads of this cloudy gray oil form on the outside of its container and quickly evaporate. The oil can cover a Medium or smaller creature, along with the equipment it's wearing and carrying (one additional vial is required for each size category above Medium). Applying the oil takes 10 minutes. The affected creature then gains the effect of the etherealness spell for 1 hour.</p>";
        $helper->addTypesToSimpleObject($equip, ['Oil']);

        $equip              = new Equipment;
        $equip->name        = 'Oil of Slipperiness';
        $equip->price       = 200;
        $equip->hands       = 2;
        $equip->description = "<p>This sticky black unguent is thick and heavy in the container, but it flows quickly when poured. The oil can cover a Medium or smaller creature, along with the equipment it's wearing and carrying (one additional vial is required for each size category above Medium). Applying the oil takes 10 minutes. The affected creature then gains the effect of a Freedom of Movement spell for 8 hours.</p>
<p>Alternatively, the oil can be poured on the ground as an Action, where it covers a 10-foot square, duplicating the effect of the Grease spell in that area for 8 hours.</p>";
        $helper->addTypesToSimpleObject($equip, ['Oil']);

        $equip              = new Equipment;
        $equip->name        = 'Potion of Speed';
        $equip->price       = 450;
        $equip->bulk        = 'L';
        $equip->hands       = 1;
        $equip->description = "<p>When you drink this potion, you gain the effect of the Haste Spell for 1 minute (no Concentration required). The potion's yellow fluid is streaked with black and swirls on its own.</p>";
        $helper->addTypesToSimpleObject($equip, ['Potion']);
    }
}
