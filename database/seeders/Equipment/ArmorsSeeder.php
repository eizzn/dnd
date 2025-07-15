<?php

namespace Database\Seeders\Equipment;

use App\Models\Armor;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ArmorsSeeder extends Seeder
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

        $armor              = new Armor;
        $armor->name        = 'Padded armor';
        $armor->price       = 5;
        $armor->type        = 'Light';
        $armor->group       = 'Cloth';
        $armor->bulk        = 'L';
        $armor->weight      = 8;
        $armor->description = "<p>This armor is simply a layer of heavy, quilted cloth, but it is sometimes used because it's so inexpensive. Padded armor is easier to damage and destroy than other types of armor. Heavy armor comes with a padded armor undercoat included in its price. You can wear just that padded armor undercoat to sleep in, if your heavy armor is destroyed, or when otherwise not wearing the full heavy armor.</p>
<p>The armor is comfortable, and can be worn while resting</p>";
        $helper->addTypesToSimpleObject($armor, ['Fragile', 'Lightweight']);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'      => ['value' => 0],
            'Damage Reduction' => ['value' => 1],
            'DEX Mod Cap'      => ['value' => 4],
            'Spell Failure'    => ['value' => '5%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Leather';
        $armor->price       = 10;
        $armor->type        = 'Light';
        $armor->group       = 'Leather';
        $armor->bulk        = '1';
        $armor->weight      = 10;
        $armor->description = '<p>A mix of flexible and molded boiled leather, a suit of this type or armor provides some protection with maximum flexibility</p>';
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'      => ['value' => 1],
            'Damage Reduction' => ['value' => 1],
            'Spell Failure'    => ['value' => '10%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Studded Leather';
        $armor->price       = 45;
        $armor->type        = 'Light';
        $armor->group       = 'Leather';
        $armor->bulk        = '1';
        $armor->weight      = 13;
        $armor->description = '<p>This leather armor is reinforced with metal studs and sometimes small metal plates, providing most of the flexibility of leather armor with more robust protection</p>';
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 1],
            'Damage Reduction'    => ['value' => 2],
            'Spell Failure'       => ['value' => '15%'],
            'Skill Check Penalty' => ['value' => 1],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Chain Shirt';
        $armor->price       = 50;
        $armor->type        = 'Light';
        $armor->group       = 'Chain';
        $armor->bulk        = '2';
        $armor->weight      = 20;
        $armor->description = "<p>Sometimes called a hauberk, this is a long shirt constructed of the same metal rings as chainmail. However, it is much lighter than chainmail and protects only the torso, upper arms, and upper legs of its wearer.</p>
<p>The armor is flexible enough that it doesn't hinder most Actions. You don't apply its check penalty to Acrobatics and Athletics checks.</p>
<p>This armor is load and likely to alert others to your presence. The armor's check penalty applies to Stealth checks even if you meet the required STR score.</p>";
        $helper->addTypesToSimpleObject($armor, ['Cumbersome']);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 1],
            'Damage Reduction'    => ['value' => 3],
            'DEX Mod Cap'         => ['value' => 4],
            'Skill Check Penalty' => ['value' => 1],
            'Spell Failure'       => ['value' => '20%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Hide';
        $armor->price       = 10;
        $armor->type        = 'Medium';
        $armor->group       = 'Leather';
        $armor->bulk        = '2';
        $armor->weight      = 12;
        $armor->description = '<p>A mix of furs, sturdy hide, and sometimes molded boiled leather, this armor provides protection due to its layers of leather, though its bulkiness slows the wearer down and decreases mobility.</p>';
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 0],
            'Damage Reduction'    => ['value' => 3],
            'DEX Mod Cap'         => ['value' => 4],
            'Skill Check Penalty' => ['value' => 3],
            'Spell Failure'       => ['value' => '20%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Scale Mail';
        $armor->price       = 50;
        $armor->type        = 'Medium';
        $armor->group       = 'Composite';
        $armor->bulk        = '2';
        $armor->weight      = 45;
        $armor->description = '<p>Scale mail consists of many metal scales sewn onto a reinforced leather backing, often in the form of a long shirt that protects the torso, arms, and legs.</p>';
        $helper->addTypesToSimpleObject($armor, ['Cumbersome']);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 1],
            'Damage Reduction'    => ['value' => 4],
            'DEX Mod Cap'         => ['value' => 2],
            'Skill Check Penalty' => ['value' => 2],
            'Spell Failure'       => ['value' => '25%'],
            'Speed Penalty'       => ['value' => '5 ft'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Chain Mail';
        $armor->price       = 75;
        $armor->type        = 'Heavy';
        $armor->group       = 'Chain';
        $armor->bulk        = '2';
        $armor->weight      = 55;
        $armor->description = "<p>A suit of chain mail consists of several pieces of armor composed of small metal rings linked together in a protective mesh. It typically includes a chain shirt, leggings, a pair of arms and a coif, collectively protecting most of the body.</p>
<p>The armor is flexible enough that it doesn't hinder most Actions. You don't apply its check penalty to Acrobatics and Athletics checks.</p>
<p>This armor is load and likely to alert others to your presence. The armor's check penalty applies to Stealth checks even if you meet the required STR score.</p>";
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 2],
            'Damage Reduction'    => ['value' => 6],
            'DEX Mod Cap'         => ['value' => 1],
            'Skill Check Penalty' => ['value' => 3],
            'Spell Failure'       => ['value' => '30%'],
            'Speed Penalty'       => ['value' => '5 ft'],
            'Minimum STR'         => ['value' => 13],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Breastplate';
        $armor->price       = 400;
        $armor->type        = 'Medium';
        $armor->group       = 'Plate';
        $armor->bulk        = '2';
        $armor->weight      = 20;
        $armor->description = "<p>Though referred to as a breastplate, this type of armor consists of several pieces of plate or half-plate armor that protect the torso, chest, neck, and sometimes the hip and lower legs. It strategically grants some of the protection of plate while allowing greater flexibility and speed.</p>
<p>This armor's DEX modifier cap also applies to DEX Saves and on all DEX-based skill and ability checks that don't have the attack trait.</p>";
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 2],
            'Damage Reduction'    => ['value' => 5],
            'DEX Mod Cap'         => ['value' => 2],
            'Skill Check Penalty' => ['value' => 4],
            'Spell Failure'       => ['value' => '25%'],
            'Speed Penalty'       => ['value' => '5 ft'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Splint Mail';
        $armor->type        = 'Heavy';
        $armor->group       = 'Composite';
        $armor->price       = 200;
        $armor->bulk        = 3;
        $armor->weight      = 60;
        $armor->description = "<p>This type of armor is chain mail reinforced with flexible, interlocking metal plates, typically located on the wearer's torso, upper arms, and legs. A suit of this armor comes with an undercoat of padded armor and a pair of gauntlets.</p>
<p>This armor's DEX modifier cap also applies to DEX Saves and on all DEX-based skill and ability checks that don't have the attack trait.</p>";
        $helper->addTypesToSimpleObject($armor, ['Cumbersome']);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 3],
            'Damage Reduction'    => ['value' => 7],
            'DEX Mod Cap'         => ['value' => 1],
            'Skill Check Penalty' => ['value' => 3],
            'Spell Failure'       => ['value' => '40%'],
            'Speed Penalty'       => ['value' => '10 ft'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Half Plate';
        $armor->type        = 'Heavy';
        $armor->group       = 'Plate';
        $armor->price       = 750;
        $armor->bulk        = '3';
        $armor->weight      = 40;
        $armor->description = '<p>Half plate consists of most of the upper body plates used in full plate, with lighter or sparser steel plate protection for the arms and legs. This provides some of the protection of full plate with greater flexibility and speed. A suit of this armor comes with an undercoat of padded armor and a pair of gauntlets.</p>';
        $helper->addTypesToSimpleObject($armor, ['Cumbersome']);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 3],
            'Damage Reduction'    => ['value' => 6],
            'DEX Mod Cap'         => ['value' => 2],
            'Skill Check Penalty' => ['value' => 4],
            'Spell Failure'       => ['value' => '40%'],
            'Speed Penalty'       => ['value' => '10 ft'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Full Plate';
        $armor->type        = 'Heavy';
        $armor->group       = 'Plate';
        $armor->price       = 1500;
        $armor->bulk        = '4';
        $armor->weight      = 65;
        $armor->description = "<p>Plate mail consists of interlocking plates that encase nearly the entire body in a carapace of steel. It is costly and heavy, and the wearer often requires help to don it correctly, but it provides some of the best defense armor can supply. A suit of this armor comes with an undercoat of padded armor and a pair of gauntlets</p>
<p>This armor's DEX modifier cap also applies to DEX Saves and on all DEX-based skill and ability checks that don't have the attack trait.</p>";
        $helper->addTypesToSimpleObject($armor, ['Cumbersome']);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 3],
            'Damage Reduction'    => ['value' => 8],
            'DEX Mod Cap'         => ['value' => 2],
            'Skill Check Penalty' => ['value' => 5],
            'Spell Failure'       => ['value' => '35%'],
            'Speed Penalty'       => ['value' => '10 ft'],
            'Minimum STR'         => ['value' => 16],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Buckler';
        $armor->type        = 'Shield';
        $armor->group       = 'Wood';
        $armor->price       = 1;
        $armor->bulk        = 'L';
        $armor->weight      = 1;
        $armor->description = "<p>This very small shield is a favorite of duelists and quick, lightly armored warriors. It's typically made of steel and strapped to your forearm. You can Raise a Shield with your buckler as long as you have that hand free or are holding a light object in that hand.</p>";
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'   => ['value' => 1],
            'Spell Failure' => ['value' => '1%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Light Wooden Shield';
        $armor->type        = 'Shield';
        $armor->group       = 'Wood';
        $armor->price       = 5;
        $armor->bulk        = 'L';
        $armor->weight      = 6;
        $armor->description = '<p>Though they come in a variety of shapes and sizes, the protection offered by wooden shields comes form the stoutness fo their materials. While wooden shields are less expensive than steel shields, they break more easily.</p>';
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 2],
            'Skill Check Penalty' => ['value' => 1],
            'Spell Failure'       => ['value' => '5%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Light Steel Shield';
        $armor->type        = 'Shield';
        $armor->group       = 'Plate';
        $armor->price       = 10;
        $armor->bulk        = 'L';
        $armor->weight      = 8;
        $armor->description = '<p>Like wooden shields, steel shields come in a variety of shapes and sizes. Though more expensive than wooden shields, they are much more durable.</p>';
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 2],
            'Skill Check Penalty' => ['value' => 1],
            'Spell Failure'       => ['value' => '5%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Heavy Wooden Shield';
        $armor->type        = 'Shield';
        $armor->group       = 'Wood';
        $armor->price       = 10;
        $armor->bulk        = '1';
        $armor->weight      = 8;
        $armor->description = '<p>Though they come in a variety of shapes and sizes, the protection offered by wooden shields comes form the stoutness fo their materials. While wooden shields are less expensive than steel shields, they break more easily.</p>';
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 3],
            'Skill Check Penalty' => ['value' => 1],
            'Spell Failure'       => ['value' => '15%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Heavy Steel Shield';
        $armor->type        = 'Shield';
        $armor->group       = 'Plate';
        $armor->price       = 20;
        $armor->bulk        = '1';
        $armor->weight      = 10;
        $armor->description = '<p>Like wooden shields, steel shields come in a variety of shapes and sizes. Though more expensive than wooden shields, they are much more durable.</p>';
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 3],
            'Skill Check Penalty' => ['value' => 1],
            'Spell Failure'       => ['value' => '15%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Tower Shield';
        $armor->type        = 'Shield';
        $armor->group       = 'Wood';
        $armor->price       = 30;
        $armor->bulk        = '5';
        $armor->weight      = 20;
        $armor->description = '<p>These massive shields can be used to provide cover to nearly the entire body. Due to their size, they are typically made of wood reinforced with metal.</p>';
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 5],
            'Skill Check Penalty' => ['value' => 10],
            'Spell Failure'       => ['value' => '50%'],
            'Speed Penalty'       => ['value' => '10 ft'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Nightscale';
        $armor->price       = 1000;
        $armor->type        = 'Light';
        $armor->group       = 'Leather';
        $armor->bulk        = 'L';
        $armor->weight      = 3;
        $armor->description = '<p>Made from dark snakeskin steeped in rare alchemical mixtures, nightscale armor is much like leather armor, except that it is much more supple and formfitting.</p>';
        $helper->addTypesToSimpleObject($armor, ['Lightweight']);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 1],
            'Damage Reduction'    => ['value' => 1],
            'DEX Mod Cap'         => ['value' => 5],
            'Skill Check Penalty' => ['value' => 2],
            'Spell Failure'       => ['value' => '5%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Chitine Web';
        $armor->price       = 75;
        $armor->type        = 'Light';
        $armor->group       = 'Other';
        $armor->bulk        = 'L';
        $armor->weight      = 10;
        $armor->description = '<p>Chintines can harden their webbing into a form of armor. Any chitine can equip themselves with chitine web armor at no cost and maintain it indefinitely, but a non-chitine must pay a chitine weaver to manufacture a suit of web armor. A suit of chitine web armor lasts for 3 months without deteriorating. Thereafter, it loses 1 point of damage reduction per month until it dissolves into uselessness. Any chitine can completely revew the armor by spending one day to refresh the oils in the webbing. This process typically costs 5 gp, presuming a cooperative chitine can be found.</p>';
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 1],
            'Damage Reduction'    => ['value' => 3],
            'DEX Mod Cap'         => ['value' => 5],
            'Skill Check Penalty' => ['value' => 1],
            'Spell Failure'       => ['value' => '10%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Spidersilk';
        $armor->price       = 750;
        $armor->type        = 'Light';
        $armor->group       = 'Other';
        $armor->bulk        = 'L';
        $armor->weight      = 5;
        $armor->description = '<p>This exotic armor feels light and soft to wear, yet is strong and resilient. It is made from specially treated Aranea or Drider silk. The light weight of spidersilk armor makes it very attractive to those with low STR scores.</p>';
        $helper->addTypesToSimpleObject($armor, ['Lightweight']);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 1],
            'Damage Reduction'    => ['value' => 3],
            'DEX Mod Cap'         => ['value' => 6],
            'Skill Check Penalty' => ['value' => 1],
            'Spell Failure'       => ['value' => '10%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Tentacled Hide';
        $armor->price       = 315;
        $armor->type        = 'Medium';
        $armor->group       = 'Other';
        $armor->bulk        = '2';
        $armor->weight      =  30;
        $armor->description = '<p>This exotic armor resembles a rubbery suit of hide armor with long, sweeping tentacles attached at the bottom. These tentacles grant a trained wearer a +2 bonus on Trip checks.</p>';
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 1],
            'Damage Reduction'    => ['value' => 4],
            'DEX Mod Cap'         => ['value' => 4],
            'Skill Check Penalty' => ['value' => 3],
            'Spell Failure'       => ['value' => '20%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Stonemail';
        $armor->price       = 180;
        $armor->type        = 'Heavy';
        $armor->group       = 'Composite';
        $armor->bulk        = '4';
        $armor->weight      = 35;
        $armor->description = "<p>This armor is made of interlocking stone plates, cunningly carved for both thinness and strength. A suit of this armor comes with an undercoat of padded armor, the armor's weight hangs from the shoulders. The suit includes hide gauntlets with tiny stone plates sewn onto them. Stonemail does not violate a druid's spiritual oath.</p>";
        $helper->addTypesToSimpleObject($armor, ['Cumbersome']);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 3],
            'Damage Reduction'    => ['value' => 5],
            'DEX Mod Cap'         => ['value' => 1],
            'Skill Check Penalty' => ['value' => 5],
            'Spell Failure'       => ['value' => '30%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Chameleon Leather';
        $armor->price       = 360;
        $armor->type        = 'Light';
        $armor->group       = 'Leather';
        $armor->bulk        = 'L';
        $armor->weight      = 15;
        $armor->description = "<p>Made from the hide of an ophidian, this armor is common only in human communities near the Serpent Hills. Serpentfolk who encounter a Scaleless One wearing such armor never begin with an attack better than unfriendly.</p>
<p>The breastplate and shoulder protection of a suit of this armor have been stiffened by boiling in oil. The rest of the armor is softer and more flexible. Chameleon leather retains some of the ophidian's color-changing capability, granting the wearer a +2 circumstance bonus to Hide checks.</p>
<p>All chameleon leather is of masterwork quality, since preserving the hide's chameleon-like properties requires the craftsmanship of a master leatherworker.</p>";
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 1],
            'Damage Reduction'    => ['value' => 2],
            'DEX Mod Cap'         => ['value' => 6],
            'Spell Failure'       => ['value' => '10%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Serpentscale Mail';
        $armor->price       = 800;
        $armor->type        = 'Medium';
        $armor->group       = 'Composite';
        $armor->bulk        = 2;
        $armor->weight      = 25;
        $armor->description = '<p>This armor consists of a coat, leggings, gauntlets, and a skirt of tanned snake hide on which the scales have been carefully preserved. Serpentscale mail can be fashioned from the hide of any serpentine creature at least one size category larger than the intended wearer.</p>
<p>All serpentscale mail is of masterwork quality, since the difficulty of its construction requires a master leatherworker.</p>';
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 2],
            'Damage Reduction'    => ['value' => 4],
            'DEX Mod Cap'         => ['value' => 3],
            'Skill Check Penalty' => ['value' => 3],
            'Spell Failure'       => ['value' => '20%'],
        ]);

        $armor              = new Armor;
        $armor->name        = 'Thunderhide Armor';
        $armor->price       = 25;
        $armor->type        = 'Medium';
        $armor->group       = 'Leather';
        $armor->bulk        = 2;
        $armor->weight      = 25;
        $armor->description = '<p>Named for the legendary Thunderers (Dinosaurs) from which it is normally made, this armor is prepared from multiple layers of tanned reptile hide. Thunderhide armor is relatively supple compared to other types of hide armor. It is favored by druids from the Jungle of Chult, the Lizard Marsh, and the Serpent Hills.</p>';
        $helper->addTypesToSimpleObject($armor);
        $helper->addPropertiesToSimpleObject($armor, [
            'Armor Class'         => ['value' => 1],
            'Damage Reduction'    => ['value' => 3],
            'DEX Mod Cap'         => ['value' => 4],
            'Skill Check Penalty' => ['value' => 2],
            'Spell Failure'       => ['value' => '20%'],
        ]);
    }
}
