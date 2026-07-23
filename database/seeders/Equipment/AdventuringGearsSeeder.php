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
    public function run(): void
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
        $equip->description = "<p>You can create items from raw materials using artisan's tools. This involves using the Crafting skill to Craft the items. Expert artisan's tools give you a +1 item bonus to the check, and master tools give you a +2 item bonus. Different sets might be needed for different kinds of work, as determined by the GM.</p>
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
        $equip->name        = 'Backpack';
        $equip->price       = 2;
        $equip->bulk        = 5;
        $equip->description = '<p>A backpack holds up to 30 lbs within 1 cubic foot. It can also serve as a saddlebag.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip        = new Equipment;
        $equip->name  = 'Bagpipes';
        $equip->price = 30;
        $equip->bulk  = 6;
        $equip->hands = 2;
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Ball Bearings';
        $equip->price       = 1;
        $equip->bulk        = 2;
        $equip->description = '<p>As an Action, yo can spill the Ball Bearings from their pouch. They spread to cover a level, 10-ft square area within 10 feet of yourself. A creature that enters this area for the first time on a turn must succeed a DC 10 DEX Save or become Prone.</p>
<p>It takes 1 minute to recover all the Ball Bearings.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Barrel';
        $equip->price       = 2;
        $equip->bulk        = 70;
        $equip->description = '<p>A Barrel holds up to 40 gallons of liquid or up to 4 cubic feet of dry goods.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Basket';
        $equip->price       = .4;
        $equip->bulk        = 2;
        $equip->description = '<p>A Basket holds up to 40 lbs within 2 cubic feet</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Bedroll';
        $equip->price       = 1;
        $equip->bulk        = 7;
        $equip->description = '<p>A bedroll consists of bedding and a blanket thin enough to be rolled up and tied. In an emergency, it can double as a stretcher.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Bell';
        $equip->price       = 1;
        $equip->bulk        = 0;
        $equip->description = '<p>When rung as an Action, a Bell produces a sound that can be heard up to 60 feet away.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Bit and Bridle';
        $equip->price       = 2;
        $equip->bulk        = 1;
        $equip->description = '<p>Standard equipment used to direct a mount</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Blanket';
        $equip->price       = .5;
        $equip->bulk        = 3;
        $equip->description = '<p>Included in a Bedroll. Provides protection against the cold.</p>';
        $equip->parent_id   = Equipment::where('name', 'Bedroll')->firstOrFail()->id;
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Block and Tackle';
        $equip->price       = 1;
        $equip->bulk        = 5;
        $equip->description = '<p>A Block and Tackle allows you to hoist up to four times the weight you could normally lift.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Book';
        $equip->price       = 25;
        $equip->bulk        = 5;
        $equip->description = '<p>If you consult an accurate nonfiction book about its subject, you get a +5 bonus to INT checks you make about the topic.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Boots';
        $equip->price       = .1;
        $equip->bulk        = 1;
        $equip->description = '<p>A pair of boots</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Bottle, Glass';
        $equip->price       = 2;
        $equip->bulk        = 2;
        $equip->description = '<p>A bottle can hold 1 1/2 pints of liquid.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = "Brewer's Supplies";
        $equip->price       = 20;
        $equip->bulk        = 9;
        $equip->description = '<p>These special tools include the items needed to pursue a craft or trade, in this case, mixing alchemical elixirs or brewing potions.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Bucket';
        $equip->price       = .005;
        $equip->bulk        = 2;
        $equip->description = '<p>A Bucket holds up a half cubic feet of contents.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Bullseye Lantern';
        $equip->price       = 10;
        $equip->bulk        = 2;
        $equip->description = '<p>A Bullseye Lantern burns oil as fuel to create Bright Light in a 60 ft Cone and Dim Light for an additional 60 ft</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Caltrops';
        $equip->price       = 1;
        $equip->bulk        = 2;
        $equip->description = '<p>As an Action, you can spread the Caltrops to cover a 5-foot area within 5 feet of yourself. A creature that enters this area for the first time on a turn must Succeed a DC 15 DEX Check or take 1 Piercing Damage and have their Speed reduced to 0 until the start of their next turn.</p>
<p>It takes 1 minute to collect all the Caltrops.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Candle';
        $equip->price       = .001;
        $equip->bulk        = 0;
        $equip->description = '<p>For 1 hour, a lit Candle sheds Bright Light in a 5-ft radius and Dim Light for an additional 5-ft.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = "Carpenter's Tools";
        $equip->price       = 8;
        $equip->bulk        = 6;
        $equip->description = '<p>Tools to work wood</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Carriage';
        $equip->price       = 100;
        $equip->bulk        = 600;
        $equip->description = '<p>An animal pulling a carriage, cart, chariot, sled, or wagon can move weight up to 5 times its base carrying capacity, including the weight of the vehicle. If multiple animals pull the same vehicle, add their carrying capacities together.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Cart';
        $equip->price       = 15;
        $equip->bulk        = 200;
        $equip->description = '<p>An animal pulling a carriage, cart, chariot, sled, or wagon can move weight up to 5 times its base carrying capacity, including the weight of the vehicle. If multiple animals pull the same vehicle, add their carrying capacities together.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = "Cartographer's Tools";
        $equip->price       = 15;
        $equip->bulk        = 6;
        $equip->description = '<p>Tools for drawing maps</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Case, Map or Scroll';
        $equip->price       = 1;
        $equip->bulk        = 1;
        $equip->description = '<p>This cylindrical leather case can hold up to ten rolled-up sheets of paper or five rolled-up sheets of parchment.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Censer';
        $equip->price       = 1;
        $equip->bulk        = 1;
        $equip->description = '<p>A container in which incense is burned, typically during a religious ceremony.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Chain';
        $equip->price       = 5;
        $equip->bulk        = 10;
        $equip->description = '<p>Around 10 feet of metal chains. Requires a DC 20 STR Check to break.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Chalk';
        $equip->price       = .001;
        $equip->bulk        = 0;
        $equip->description = '<p>A piece of chalk used for writing and marking on various surfaces</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Chariot';
        $equip->price       = 250;
        $equip->bulk        = 100;
        $equip->description = '<p>An animal pulling a carriage, cart, chariot, sled, or wagon can move weight up to 5 times its base carrying capacity, including the weight of the vehicle. If multiple animals pull the same vehicle, add their carrying capacities together.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Chest';
        $equip->price       = 5;
        $equip->bulk        = 25;
        $equip->description = '<p>A Chest holds up to 12 cubic fet of contents.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = "Climber's Kit";
        $equip->price       = 25;
        $equip->bulk        = 12;
        $equip->description = "<p>A Climber's Kit includes boot tips, gloves, pitons, and a harness. As a Triple Action, you can anchor yourself to a spot so that if you should fall, you would stop falling at the anchor point.</p>";
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Clothes, Common';
        $equip->price       = .5;
        $equip->bulk        = 3;
        $equip->description = '<p>This set of clothes could consist of a loose shirt and baggy breaches, or a loose shirt and skirt or overdress. Cloth wrappings are used for shoes.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = 'Clothes, Fine';
        $equip->price       = 15;
        $equip->bulk        = 6;
        $equip->description = '<p>This set of clothes is designed specifically to be expensive and to show it, including fancy, tailored clothes in whatever fashion happens tobe the current style in the courts of the nobles.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = "Clothes, Traveler's";
        $equip->price       = 2;
        $equip->bulk        = 4;
        $equip->description = '<p>This set of clothes could consist of boots, a wool skirt or breeches, a sturdy belt, a shirt (perhaps with a best or jacket), and an ample clock with a hood.</p>';
        $helper->addTypesToSimpleObject($equip);

        $equip              = new Equipment;
        $equip->name        = "Cobbler's Tools";
        $equip->price       = 5;
        $equip->bulk        = 5;
        $equip->description = '<p>Tools for making, and maintaining footwear.</p>';
        $helper->addTypesToSimpleObject($equip);
        // https://www.dndbeyond.com/equipment?page=7&srsltid=AfmBOoq16Fh5dXh6M123F85hB54APclgRejovX6ig0p0iptIYfSSqlgG
    }
}
