<?php

namespace Database\Seeders\Materials;

use App\Models\Material;
use Illuminate\Database\Seeder;

class AnimalMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mat              = new Material;
        $mat->name        = 'Ambergris';
        $mat->type        = 'Animal Product';
        $mat->rarity      = 'Common';
        $mat->price       = '1gp per 6oz';
        $mat->description = '<p>Ambergris is a substance extracted from the stomachs of whales, giant whales, leviathans, and narwhals. It is a precious trade commodity used for creating various aromatics and perfumes.</p>
<p>The gray, waxy, oily and highly flammable substance is secreted by sick whales. In its voluminous fresh form, ambergris, is sickeningly yellow and emitted a profound stench. However it can be sold for 1,000 to as much as 20,000 in a big city.</p>';
        $mat->alchemy = '<ul>
    <li>In the land of Zakhara, sheikhs use ambergris and musk rolled into tiny balls to perfume their palaces and tents. In Iram, lavish palaces are perfumed with tiny balls of ambergris, incense, and musk, imbedded in the marble walls and floors.</li>
</ul>';
        $mat->source = '<ul>
    <li>Isles of Wa and Kozakura</li>
    <li>Any coastal city that conducts whaling.</li>
    <li>Waterdeep</li>
    <li>Sword Coast North</li>
    <li>Velen</li>
    <li>Lands of Intrigue</li>
    <li>Sea of Fallen Stars</li>
    <li>Interior Faerun</li>
    <li>Sahu</li>
    <li>Iram</li>
    <li>Zakhara</li>
</ul>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Angel Essence';
        $mat->rarity      = 'Rare';
        $mat->price       = '100 gp per 1 oz';
        $mat->description = "<p>There isn't much use for angel essence (except in the making of Celestial Essence poison). It can be used as a weaker version of Holy Water, dealing 1/2 Damage of Holy Water.</p>
<p>Obtaining angel essence requires a willing Archon. You must make a DC 13 Arcana check to extract it from the Archon. The Archon suffers 1 point of Damage in the process.</p>";
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Ambrosia';
        $mat->description = '<p>Good spellcasters can use Ambrosia in magic item creation.</p>
<p>A living creature that drinks a dose of Ambrosia experiences a soothing sensation that wipes away minor aches and pains, takes the edge off grief and sadness, cures 1 point of damage, and 1 point of ability damage. These positive sensations and emotions persist for 1D4+1 hours.</p>
<p>The Celestial Hebdomad subsist entirely on Ambrosia.</p>';
        $mat->type = 'Liquid';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Blood';
        $mat->type   = 'Creature';
        $mat->rarity = 'Ubiquitous';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Bone';
        $mat->type   = 'Creature';
        $mat->rarity = 'Ubiquitous';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Carapace';
        $mat->type        = 'Animal Part';
        $mat->price       = "5 x the armor's base cost + 1,500 for medium and 2,000 for heavy armor";
        $mat->description = "<p>Creatures like Bulettes, Gorgons, and Purple Worms are notorious for their extremely hard exoskeletons; naturally grown armored materials that are typically far lighter than the traditional alloys most humanoids are accustomed to. When adapted to, it allows for far greater ease of movement than was previously thought achievable.</p>
<p>Warriors clad in carapace are typically seen along the frontiers of civilization, in locations too remote to sustain trading with mining settlements. This armor is often used by priests who may admire or even venerate the creatures it comes form, and by druids who wish to wear heavy armor without having to commit taboo by using metal.</p>
<p>The additional price of 1,500 for medium armor or 2,000 for heavy armor can be reduced by 50% if you posses the body of a slain large-sized creature whose carapace is mostly undamaged and sufficient for armor of this type, and by another 25% if you are able to skin the creature yourself with a DC 20 WIS (Survival) check. If you fail the check by 5 or more, the carapace is ruined and cannot be made into armor. For a creature's carapace to be appropriate for a suit of armor, it needs to have a very strong exoskeleton. If a creature has a natural DC of 6 or greater, then it likely has sufficient armor. Ask you GM for more details.</p>";
        $mat->armor = '<p>Armor (Breastplate, Half Plate, or Plate). These chitinous plates are surprisingly lightweight for the amount of damage they can withstand.</p>
<p>The armor loses the Cumbersome trait if it had it. In addition, its maximum DEX modifier is increased by 1.</p>';
        $mat->save();

        $mat       = new Material;
        $mat->name = 'Creature Part';
        $mat->type = 'Animal Part';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Ellond Hide';
        $mat->description = 'This brown-orange hide is harvested from desert and dry areas creatures';
        $mat->type        = 'Creature';
        $mat->price       = "Determined by the creature's CR";
        $mat->armor       = '<p>While wearing clothing or a hide armor made with ellond hide, fire damage you take is reduced by 3</p>
<p>Harvested ellond hide from a CR 9 or higher creature can be sued to craft a Hide Armor of Fire Resistance</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Monster Feathers';
        $mat->description = 'Hippogriffs, Rocs, giant eagles and other flying creatures have beautiful feathers used to show their majesty';
        $mat->type        = 'Creature';
        $mat->price       = "Determined by the creature's CR";
        $mat->armor       = '<p>While wearing clothing or any non-metallic armor made with monster feathers, you gain a +3 bonus to WIS (Animal Handling) checks you make</p>';
        $mat->other       = '<p>Harvested monster feathers from a CR 9 or higher creature can be used to craft a Quaal\'s Feather Token</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Monster Scales';
        $mat->description = 'Scales harvested from creatures, with a variety of colors, shapes and sizes';
        $mat->type        = 'Creature';
        $mat->price       = "Determined by the creature's CR";
        $mat->armor       = '<p>Replaces the metal. Used to craft a scale mail armor</p>
<p>Harvested monster scales from a CR 13 or higher dragon can be used to craft a Dragon Scale Mail</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Outsider Blood';
        $mat->rarity = 'Rare';
        $mat->source = '<ul>
    <li>Typically, the blood must be obtained from a Summoning, not a calling.</li>
</ul>';
        $mat->description = '<p>The blood of an Outsider can be used in various rituals and formulas.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Shadowsilk';
        $mat->description = 'This black semi-transparent silk is carefully made by underground spiders and spider-like creatures';
        $mat->type        = 'Creature';
        $mat->price       = "Determined by the creature's CR";
        $mat->armor       = '<p>While wearing clothing or any non-metallic armor made with shadowsilk, you gain a +3 bonus to DEX (Stealth) checks you make in lightly obscured areas (such as tree shadows)</p>
<p>Harvested shadowsilk from a CR 13 or higher creature can be sued to craft a Cloak of Arachnida</p>';
        $mat->save();
    }
}
