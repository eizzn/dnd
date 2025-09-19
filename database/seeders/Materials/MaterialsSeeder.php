<?php

namespace Database\Seeders\Materials;

use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mat         = new Material;
        $mat->name   = 'Water';
        $mat->rarity = 'Ubiquitous';
        $mat->type   = 'Liquid';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Glass';
        $mat->type   = 'Mineral';
        $mat->rarity = 'Common';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Alum';
        $mat->type   = 'Mineral';
        $mat->price  = '5cp per 6oz';
        $mat->rarity = 'Common';
        $mat->source = '<ul>
    <li>Mount Hotenow</li>
    <li>(Dark Alum) Vellosk</li>
</ul>';
        $mat->description = '<p>Alum is a type of salt that is widely used in the Realms. it is derived from certain porous rocks.</p>
<p>A less common variety of alum is the dark alum that is purple in color. It possessed none of the alchemical or culinary properties of the standard alum. It is primarily used for the purpose for tanning supple leathers that are popular among the nobility.</p>';
        $mat->alchemy = '<ul>
    <li>Alum can be used in a variety of tradeskills, including barbers, dyers, paper and ink makers, and perfumers</li>
    <li>Alum is used as an ingredient by alchemists. For instance, it can be distilled alongside nitre and oil of vitriol to create Aqua Fortis</li>
    <li>Many leather workers soak hides and pelts in a solution of alum to turn them into leather, a process known as tawing. It can even be used to turn some aberration hides into leather.</li>
    <li>Can be used for cooking</li>
    <li>Can be used in the process of smelting ore</li>
    <li>Can be used in medicine, as a mouthwash, a cure for dysentery, and a way to stop bleeding.</li>
</ul>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Black Ice';
        $mat->type        = 'Mineral';
        $mat->price       = '?';
        $mat->description = '<p>Black ice is a mineral found throughout a few areas of the Frozenfar in northwest Faerun. It comes from the remains of a destroyed structure call Cryshal-Tirith, made by Crenshinibon, the Crystal Shard and the stuff permeates with the evil artifact (though it has no sentience). Over time, it slowly corrupts those that are in close proximity to it.</p>';
        $mat->armor       = '<p>Replaces the metal. A suit of heavy armor (similar to half plate or full plate) can be created with less skill needed to make a fine suit of armor. When heated, Black Ice can be shaped and carved for use in crafting jewelry, armor and even weapons.</p>';
        $mat->other       = '<dl>
    <dt>Available</dt> <dd>
        <ul>
            <li>A small deposit of Black Ice was formed in the corrupted Pool of Radiance under Castle Cormanthor when the dracolich Pelendralaar\'s phylactery was plunged into the exposed node of the weave.</li>
            <li>The destruction of Cryshal-Tirith creates a large deposit of Black Ice to form at the site of its destruction</li>
        </ul>
    </dd>
</dl>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Chitin';
        $mat->rarity      = 'Rare';
        $mat->description = '<p>These flexible shells of chitinous creatures such as giant crabs or remorhaz are used to craft armors, known to be lighter than metallic armors</p>';
        $mat->type        = 'Animal Product';
        $mat->price       = "Determined by the creature's CR";
        $mat->armor       = "<p>Replaces the metal. While wearing a medium armor (non hide) made with chitin, the armor's DEX bonus increases by 1.</p>
<p>Heavy armors made with chitin reduce the STR requirements by 1</p>
<ul>
    <li>Kobold: Giant Beetle shells</li>
    <li>Aquatic Elves: Half-plate from Giant Crabs</li>
    <li>Drow: Scale Mail from Hook Horrors</li>
    <li>Humans: Chain Mail from Ankheg</li>
    <li>Dwarves: Splint Mail from Umberhulks</li>
</ul>";
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Coral';
        $mat->description = '<p>Mostly used by sea and waterborne creatures to create their weapons and armors</p>';
        $mat->type        = 'Non-Mineral';
        $mat->price       = '100 gp';
        $mat->armor       = '<p>Replace the metal. While weaing a medium or heavy armor (non hide) made with coral, you speed while swimming increases by 10 feet</p>';
        $mat->weapon      = '<p>Any melee weapon made with coral doesn\'t have disadvantage on the attacks rolls while underwater</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Deep Coral';
        $mat->type   = 'Mineral';
        $mat->source = '<ul>
    <li>The Sword Coast</li>
    <li>The Sea of Fallen Stars</li>
</ul>';
        $mat->price       = '200 gp';
        $mat->description = '<p>Grown rather than forged. The coral must be immersed in water constantly, otherwise the coral begins to die and fall apart, even if enchanted.</p>';
        $mat->armor       = '<p>Any heavy armor made with deep coral grants an additional +1 to AC. Any creature that swallows coral armor will suffer 1D6 Poison damage after 10 rounds for 10 consecutive rounds.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Deep Crystal';
        $mat->type   = 'Mineral';
        $mat->source = '<ul>
    <li>The Sword Coast</li>
    <li>The Sea of Fallen Stars</li>
</ul>';
        $mat->price       = '5000 gp';
        $mat->description = '<p>Collecting the purist parts of crystal clusters, these gems can be alchemically bonded together to then be refined to make a perfectly solid crystal weapon.</p>
<p>Once alchemically bonded and refined (a process that requires a psionicly enhanced smith), the refined deep crystal begins to build up a store of Psionic Power Points, 1 point per week, to a maximum of based on the amount of deep crystal. Psionic characters can use an Action to draw as many Power Points from the deep crystal as needed to refill their own pool of Power Points. They may also use a Triple Action and 10 Power Points to fill the deep crystal with 1 Power Point.</p>
<p>Legends say that items that are allowed to fill up to the maximum amount of Power Points for a long time without ever expending it can become sentient.</p>';
        $mat->armor       = '<p>Replaces the metal. Only Heavy Armors can be made with deep crystal. The armor provides 1 point less Damage Reduction and is twice as heavy, but can store up to 20 Power Points. Add an additional 5000 gp to the cost to create an armor with deep crystal, for a total of 10000 gp.</p>';
        $mat->weapon      = '<p>Replaces the metal. Weapons made with deep crystal is easier to break than normal steel weapons. Weapons made with deep crystal has 1 point of Hardness less than steel weapons, but can store up to 10 Power Points</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Elukian Clay';
        $mat->type   = 'Clay';
        $mat->rarity = 'Rare';
        $mat->source = '<ul>
    <li>Wherever the Plane of Water releases onto the Prime Material Plane</li>
</ul>';
        $mat->description = '<p>Where waters run from the Plane of Water to the Prime Material, in their wake is left Elukian Clay.</p>
<p>This almost unworkable clay can be shaped into armor.</p>';
        $mat->armor = '<p>Armor made from Elukian Clay offers an additional +1 point of Damage Reduction. If the armor does not normally impose a penalty on DEX (Stealth) checks, the Elukian Clay version does.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Eternal Ice';
        $mat->description = 'This cold white-blue block of ice resist high temperatures, being unable to melt in normal conditions';
        $mat->type        = 'Non-Mineral';
        $mat->price       = '500 gp';
        $mat->weapon      = '<p>Used to craft Cold damage dealing magic items, such as the Frost Brand</p>';
        $mat->other       = '<p>used to craft Cold damage dealing magic items, such as the Staff of Frost</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Hizagkuur';
        $mat->type   = 'Clay';
        $mat->rarity = 'Legendary';
        $mat->source = '<ul>
    <li>The Underdark where Faerzress is strong</li>
</ul>';
        $mat->description = '<p>When Faerzress imbues a greenish gray clay with its magic, it can be worked into steel bars and produce Hizagkuur.</p>';
        $mat->armor       = '<p>Heavy armor made with Hizagkuur grants a +3 bonus vs Acid, Cold, Electricity, Fire, and Sonic damage.</p>';
        $mat->save();

        $mat         = new Material;
        $mat->name   = 'Incense';
        $mat->type   = 'Herbs';
        $mat->rarity = 'Common';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Infernal Leather';
        $mat->description = 'A reddish hard leather created in the infernal planes';
        $mat->type        = 'Non-Mineral';
        $mat->price       = '750 gp';
        $mat->armor       = '<p>Used to craft an Armor of Fire Resistance (leather or studded leather)</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Reliquary';
        $mat->type        = 'Various';
        $mat->rarity      = 'Common';
        $mat->description = '<p>A holy Symbol of a god or pantheon. It might be an Amulet depicting a Symbol representing a deity, the same Symbol carefully engraved or inlaid as an Emblem on a Shield, or a tiny box holding a fragment of a sacred relic.</p>';
        $mat->save();

        $mat              = new Material;
        $mat->name        = 'Shadowfell Linen';
        $mat->description = 'A dark and and purple linen found in the shadowfell';
        $mat->type        = 'Non-Mineral';
        $mat->price       = '750 gp';
        $mat->armor       = '<p>Used to craft an Armor of Psychic Resistance (leather or studded leather)</p>';
        $mat->save();

        $this->call(AnimalMaterialsSeeder::class);
        $this->call(PlantMaterialsSeeder::class);
        $this->call(CrystalMaterialsSeeder::class);
        $this->call(MetalMaterialsSeeder::class);
        $this->call(StoneMaterialsSeeder::class);

        $mat       = new Material;
        $mat->name = 'Miscellaneous';
        $mat->save();
    }
}
