<?php

namespace Database\Seeders\Materials;

use App\Models\Material;
use Illuminate\Database\Seeder;

class CrystalMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mat         = new Material;
        $mat->name   = 'Agate';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Alexandrite';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Amber';
        $mat->type   = 'Gem';
        $mat->price  = '100 gp';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Amethyst';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Ammolite';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Beljuril';
        $mat->type        = 'Gem';
        $mat->rarity      = 'Rare';
        $mat->price       = '5,000 gp';
        $mat->description = '<p>This deep seawater green gemstone emits dim light in a 20 foot radius.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Blended Quartz';
        $mat->type   = 'Crystal';
        $mat->rarity = 'Rare';
        $mat->source = '<ul>
    <li>Deep within mountains, but it must be a vein of quartz that has never been touched by Faezernes.</li>
</ul>';
        $mat->description = '<p>Blended Quartz is a rare but natural blend of iron and quartz. While it is difficult to work, it is a functional conduit for energy.</p>';
        $mat->armor       = '<p>Replaces the metal. While wearing armor that you are proficient with that is made with Blended Quartz, you can make Spell Concentration checks to avoid losing your spell from taking damage with Advantage.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Blood Glass';
        $mat->type        = 'Crystal';
        $mat->rarity      = 'Common';
        $mat->price       = '250 gp';
        $mat->description = "<p>Formed with crystal deposits are laced with volcanic glass, Blood Glass weapons are 10% lighter than their steel  counterparts, and add +1 to attack and damage rolls.</p>
<p>While Blood Glass is magical, it's also quite fragile.</p>";
        $mat->weapon = '<p>Replaces the metal. Attacks made of Blood Glass automatically score Critical Hits (no need to confirm). If a weapon is in the area of effect of a spell with the Sonic type, or is the target of the Shatter spell, the weapon is automatically shattered and destroyed.</p>';
        $mat->other  = '<p>Can also be used to create intentionally breakable objects for various purposes.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Blue Ice';
        $mat->type   = 'Crystal';
        $mat->rarity = 'Uncommon';
        $mat->source = '<ul>
    <li>Great Glacier</li>
    <li>The North Country</li>
</ul>';
        $mat->description = '<p>Forged from the ice at the deepest parts of glaciers, Blue Ice is notoriously difficult to craft, but the result is often lighter than expected.</p>';
        $mat->armor       = '<p>Replaces the metal for Medium or Heavy Armor, but not Hide.</p>
<ul>
    <li>If the armor normally imposes a penalty on DEX based skills, the Blue Ice version imposes no penalty</li>
    <li>If the armor normally has a STR requirement, lower that requirement by 2 points.</li>
</ul>';
        $mat->weapon = '<p>Replaces the metal.</p>
<ul>
    <li>Metallic Slashing weapons made of Blue Ice gets a +1 to Attack and Damage rolls. Such weapons generally cost 1,000 gp over the base cost.</li>
</ul>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Blue Quartz';
        $mat->type        = 'Gem';
        $mat->rarity      = 'Uncommon';
        $mat->price       = '10 gp';
        $mat->description = '<p>Pale blue and translucent, these ghostly fragments are often used in many magical items related to scrying.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Emerald';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Diamond';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Garnet';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Hematite';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Jade';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Jasper';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Jet';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Lapis';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Onyx';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Pearl';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Ruby';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Sapphire';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Turquoise';
        $mat->type   = 'Gem';
        $mat->rarity = 'Uncommon';
        $mat->save();
    }
}
