<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class AlchemicalFormulasSeeder extends Seeder
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
        $formula->name        = 'Acid Flask';
        $formula->type        = 'Acid';
        $formula->level       = 1;
        $formula->price       = '3 gp';
        $formula->bulk        = 'L';
        $formula->description = '<p>Flasks filled with corrosive acid, deals 1D4 Persistent Acid damage and 1 Acid splash damage.</p>';
        $helper->saveFormula($formula, ['Acid', 'Alchemical', 'Bomb', 'Consumable', 'Splash'], [
            'skills' => ['Crafting' => ['dc' => 5, 'meta' => 'Alchemy and Bomb Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = "Alchemist's Fire";
        $formula->type        = 'Alchemical';
        $formula->level       = 1;
        $formula->price       = '3 gp';
        $formula->bulk        = 'L';
        $formula->description = "<p>Alchemist's fire is combination of several volatile liquids that ignite when exposed to air, typically stored in a sealed flask. Alchemist's fire deals 1D8 fire damage, 1 persistent fire damage, and 1 fire splash damage. The target can end this persistent damage by spending an Interact action or by becoming submerged in water or otherwise entering an area deprived of air. A creature adjacent to the target can also end the persistent damage by spending an Interact action.</p>";
        $helper->saveFormula($formula, ['Alchemical', 'Bomb', 'Consumable', 'Fire', 'Splash'], [
            'skills'    => ['Crafting' => ['dc' => 5, 'meta' => 'Alchemy and Bomb Making']],
            'materials' => ['Ellond Shrub' => ['meta' => 'At least 5oz of the bark, ground into a fine powder']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Antidote';
        $formula->type        = 'Elixir';
        $formula->level       = 1;
        $formula->bulk        = 'L';
        $formula->description = '<p>Antidotes come in three different types: standard, greater, and true. Upon drinking a standard antidote, you gain a +2 item bonus to CON Save vs poison and venom for 6 hours. A greater antidote grants a +4 item bonus to CON Save vs poison and venom for 6 hours. A true antidote grants a +4 item bonus to CON Save vs poison and venom for 6 hours, and when you consume a true antidote, you can immediately attempt a Save against one poison or venom of 10th level or lower afflicting you; if you succeed, the poison or venom is neutralized.</p>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Level</th>
            <th>Skill DC</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Standard</td>
            <td>1</td>
            <td>9</td>
            <td>2 gp</td>
        </tr>
        <tr>
            <td>Greater</td>
            <td>5</td>
            <td>11</td>
            <td>15 gp</td>
        </tr>
        <tr>
            <td>True</td>
            <td>10</td>
            <td>13</td>
            <td>110 gp</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Elixir'], [
            'skills'    => ['Crafting' => ['dc' => 9, 'meta' => 'Alchemy and Brew Potion']],
            'materials' => ['Chalcedony' => ['price' => 'As listed in table']],
            'feats'     => ['Brew Potion'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Antiplague';
        $formula->type        = 'Elixir';
        $formula->level       = 1;
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate activation, no cost';
        $formula->description = "<p>Antiplague comes in three different types: standard, greater, and true. Upon drinking a standard antiplague, you gain a +2 item bonus to CON Saves vs Diseases for 24 hours; this applies to your daily Save against a Disease's progression. A greater antiplague grants a +4 item bonus to CON Saves vs Diseases for 24 hours. A true antiplague grants a +4 item bonus to CON Save vs diseases for 24 hours, and when you consume a true antiplague, you can immediately attempt a Save against one disease of 10th level or lower afflicting you; if you succeed, you are cured of the Disease.</p>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Level</th>
            <th>Skill DC</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Standard</td>
            <td>1</td>
            <td>10</td>
            <td>2 gp</td>
        </tr>
        <tr>
            <td>Greater</td>
            <td>5</td>
            <td>12</td>
            <td>15 gp</td>
        </tr>
        <tr>
            <td>True</td>
            <td>10</td>
            <td>14</td>
            <td>110 gp</td>
        </tr>
    </tbody>
</table>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Elixir'], [
            'skills' => ['Crafting' => ['dc' => 10, 'meta' => 'Alchemy and Brew Potion']],
            'feats'  => ['Brew Potion'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Aqua Regia';
        $formula->type        = 'Acid';
        $formula->level       = 3;
        $formula->price       = '3 gp';
        $formula->description = '<p>Aqua regia is a mixture of nitric acid and hydrochloric acid, optimally in a molar ratio of 1:3. Aqua regia is a yellow-orange fuming liquid, so named by alchemists because it can dissolve the noble metals gold and platinum, though not all metals</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Acid'], [
            'skills' => ['Crafting' => ['dc' => 11, 'meta' => 'Alchemy and Bomb Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Bottled Lightning';
        $formula->type        = 'Alchemical';
        $formula->level       = 1;
        $formula->price       = '3 gp';
        $formula->bulk        = 'L';
        $formula->description = '<p>Bottled lightning is packed with volatile reagents that create a blast of electricity when they are exposed to air. Bottled lightning deals 1D6 Electricity damage and 1 Electricity splash damage and causes the target to be Flat-Footed to all creatures until the start of your next turn.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Bomb', 'Consumable', 'Electricity', 'Splash', 'Elixir'], [
            'skills' => ['Crafting' => ['dc' => 11, 'meta' => 'Alchemy and Bomb Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = "Bravo's Brew";
        $formula->type        = 'Elixir';
        $formula->level       = 1;
        $formula->price       = '7 gp';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>This flask of foaming beer grants courage. For the next hour after drinking this elixir, you gain a +1 item bonus to WIS Saves and a +3 item bonus to Saves against Fear.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Elixir', 'Mental'], [
            'skills' => ['Crafting' => ['dc' => 7, 'meta' => 'Alchemy and Distill Alcohol']],
            'feats'  => ['Brew Potion'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Flashpellet';
        $formula->type        = 'Alchemical';
        $formula->level       = 2;
        $formula->price       = '20 gp';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>You can throw this small alchemical bead as a grenade-like weapon. When it strikes a hard surface or is struck sharply, it ignites with a bright flash. Creatures within a 10-foot radius must SUCCEED at a DEX Save (DC 13) or be Dazzled for 3 rounds.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 7, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = "Cat's Eye";
        $formula->type        = 'Elixir';
        $formula->level       = 3;
        $formula->price       = '3 gp / 7 gp';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>For the next 10 minutes, you treat Hidden creatures within 30 feet as if they were Concealed, and Concealed creatures within 30 feet as if they were Seen.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 9, 'meta' => 'Brew Potion']],
            'spells' => ['See Invisibility'],
        ]);

        $formula              = new Formula;
        $formula->name        = "Cheetah's Speed";
        $formula->type        = 'Elixir';
        $formula->level       = 1;
        $formula->price       = '1 gp / 2 gp';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>For the next minute, you are Accelerated 5.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 9, 'meta' => 'Brew Potion']],
            'spells' => ['Fleet Step'],
        ]);

        $formula           = new Formula;
        $formula->name     = 'Cockatrice Feather Preservation';
        $formula->rarity   = 'Rare';
        $formula->type     = 'Alchemical';
        $formula->price    = '2,000 gp';
        $formula->crafting = '<ul>
    <li>Take a Cauldron and mix in equal parts of Oil of Etherealness and Aqua Regia and Human Tears (at least half an ounce of each).</li>
    <li>Mix this liquid with a glass or crystal rod</li>
    <li>Heat till boiling while stirring in at least 6,000 gp worth of powdered Agate and either six whole (live or dead) Cerebral Parasites or the blood of a Slaad, Githyankee or a Nightmare</li>
    <li>Stir until the sold components are dissolved and then immerse the cockatrice feather into the liquid while it is boiling.</li>
    <li>Take the cauldron away from the heat immediately after putting the feather in and let the cauldron stand until the liquid evaporates.</li>
</ul>';
        $formula->description = '<p>The tail feathers of a Cockatrice can be preserved so that it does not lose its Petrification powers.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Alchemy'],
                'Arcana'   => ['dc' => 12],
                'Nature'   => ['dc' => 10],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Darkvision Elixir';
        $formula->type        = 'Elixir';
        $formula->level       = 1;
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>Upon you drinking this elixir, your sight becomes sharper in darkness. This elixir has three types: standard, greater, and true. Upon drinking the standard elixir, you gain Darknvision for 10 minutes. The greater version grants Darkvision for 1 hour, and the true elixir grants Darkvision for 8 hours.</p>
<table>
    <tr>
        <th>Type</th>
        <td>Standard</td>
        <th>Level</th>
        <td>1</td>
        <th>Price</th>
        <td>2 gp</td>
    </tr>
    <tr>
        <th>Type</th>
        <td>Greater</td>
        <th>Level</th>
        <td>3</td>
        <th>Price</th>
        <td>6 gp</td>
    </tr>
    <tr>
        <th>Type</th>
        <td>True</td>
        <th>Level</th>
        <td>6</td>
        <th>Price</th>
        <td>24 gp</td>
    </tr>
</table>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Elixir'], [
            'skills' => ['Crafting' => ['dc' => 9, 'meta' => 'Brew Potion']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Eagle Eye Elixir';
        $formula->type        = 'Elixir';
        $formula->level       = 1;
        $formula->price       = '1 gp / 2 gp';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>For the next hour after drinking this elixir, you gain a +1 item bonus to Perception checks. This item bonus increases to +2 for Perception checks to find secret doors and traps.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Elixir', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 9, 'meta' => 'Alchemy and Brew Potion']],
        ]);

        $formula              = new Formula;
        $formula->name        = "Frog's Feet Potion";
        $formula->type        = 'Elixir';
        $formula->level       = 5;
        $formula->price       = '10 gp';
        $formula->meta        = '<dt>Onset</dt> <dd>1 minute</dd>';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>After the onset of this potion, the spaces between your fingers and toes become webbed, granting you a swim Speed of 20 feet for the next 10 minutes.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 10, 'meta' => 'Brew Potion']],
            'spells' => ['Feet to Fins'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Glowpowder';
        $formula->type        = 'Alchemical';
        $formula->level       = 5;
        $formula->price       = '20 gp / 50 gp';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = "<p>This luminescent dust clings to surfaces and creatures, making them glow. The grains of powder glow about as brightly as sparks from a campfire. They don't provide illumination, but they are noticeable. When sprinkled on object or surface, the powder helps reveal edges and details, granting a +1 circumstance bonus on Perception checks made on the treated area. A creature sprinkled with the powder is likewise easier to detect. Perception checks to see the creature gain a +2 circumstance bonus. An invisible creature sprinkled with the dust has only pme=ja;f concealment. Once applied, the dust clings and glows for 1 minute. A creature sprinkled with the powder can wash it off by taking a Triple Action.</p>
<p>The powder usually comes in a tube that allows the contents to be blown or shaken out. Blowing out the powder is an Action and creates a 10-foot cone. If carefully sprinkled, the powder can cover 125 square feet (5 five-foot squares). It takes a Triple Action to completely cover a 5-foot square with the powder.</p>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 9, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Healing Salve';
        $formula->type        = 'Alchemical';
        $formula->level       = 3;
        $formula->price       = '5 gp / 10 gp';
        $formula->bulk        = 'L';
        $formula->activation  = '1 minute; Operate Activation';
        $formula->description = '<p>Rubbing this stinky green paste into wounds promotes rapid healing. After applying the salve, the next time the recipient takes a Long Rest, they regain an additional 1D8 +1 Hit Points. The recipient cannot benefit from multiply applications of the salve at one time.</p>
<p>A single vial holds 10 uses.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Healing'], [
            'skills' => ['Crafting' => ['dc' => 7, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Liquid Ice';
        $formula->type        = 'Alchemical';
        $formula->level       = 3;
        $formula->price       = '1 gp / 3 gp';
        $formula->bulk        = 'L';
        $formula->description = '<p>The liquid reagents in this vial create a freezing effect when exposed to air. Liquid ice deals 1D4 Cold damage, deals 1 Cold splash damage, and causes the target to be hampered 10 until the end of its next turn.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Bomb', 'Cold', 'Consumable', 'Splash', 'Elixir'], [
            'skills' => ['Crafting' => ['dc' => 10, 'meta' => 'Alchemy and Bomb Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Phantom Ink';
        $formula->type        = 'Alchemical';
        $formula->price       = '4 gp / 10 gp';
        $formula->level       = 4;
        $formula->activation  = 'Used instead of normal ink (see text)';
        $formula->bulk        = 'L';
        $formula->description = '<p>This substance is similar to disappearing ink. Messages written with this ink vanishes after an hour and thereafter can be read only under the right kind of light based on the kind of Phantom Ink used.</p>
<table>
    <thead>
        <tr>
            <th>Kind</th>
            <th>Revealed By</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Firelight</td>
            <td>Candles, Torches, and other flames</td>
        </tr>
        <tr>
            <td>Magical Light</td>
            <td>Any spell with the Light type</td>
        </tr>
        <tr>
            <td>Moonlight</td>
            <td>In the light of a Full Moon</td>
        </tr>
        <tr>
            <td>Starlight</td>
            <td>Out in the open sky, and the reader must have Darkvision</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills' => [
                'Crafting' => ['dc' => 18, 'meta' => 'Alchemy'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Salamander Elixir';
        $formula->type        = 'Elixir';
        $formula->level       = 3;
        $formula->price       = '3 gp / 8 gp';
        $formula->meta        = '<dt>Onset</dt> <dd>1 minute</dd>';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>For 24 hours after the onset of this potion, you are protected from the effects of severe heat.</p>';
        $helper->saveFormula($formula, ['Potion', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 7, 'meta' => 'Brew Potion']],
            'spells' => ['Endure Elements'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Suregrip';
        $formula->type        = 'Alchemical';
        $formula->level       = 5;
        $formula->price       = '10 gp / 20 gp';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>This gluey substance improves your grip, granting a +1 circumstance bonus on any check that deals with holding onto something, including Climbing checks and Grappling. Once applied, the suregrip lasts for 10 minutes.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 12, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Silversheen';
        $formula->type        = 'Oil';
        $formula->level       = 5;
        $formula->price       = '2 gp';
        $formula->description = '<p>You can slather this silvery paste onto a melee or thrown weapon or a bundle of ammunition. For the next three hours, any physical damage the weapon or ammunition deals is silver. Applying silversheen to a weapon or ammunition temporarily replaces any damage type from its special materials (such as cold iron). One vial coats one melee weapon, one thrown weapon, or 10 pieces of ammunition.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Oil'], [
            'skills' => ['Crafting' => ['dc' => 12, 'meta' => 'Alchemy']],
            'spells' => ['Imbue with Silvered'],
            'feats'  => ['Brew Potion'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Smokestick';
        $formula->type        = 'Alchemical';
        $formula->level       = 1;
        $formula->price       = '2 gp';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation; no cost';
        $formula->description = '<p>With a sharp twist of this item, you instantly create a screen of thick, opaque smoke in a 5-foot-radius burst centered on one corner of your space. All creatures within that area are concealed. The smoke lasts for 1 minute or until dispersed by a strong wind.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 7, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Sunrod';
        $formula->type        = 'Alchemical';
        $formula->level       = 2;
        $formula->price       = '2 gp';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation; no cost';
        $formula->description = "<p>This 1-foot-long, gold-tipped rod glows after it's struck on a hard surface. It sheds normal light in a 20-foot radius for 6 hours.</p>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Light'], [
            'skills' => ['Crafting' => ['dc' => 7, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Tanglefoot Bag';
        $formula->type        = 'Alchemical';
        $formula->level       = 2;
        $formula->price       = '3 gp';
        $formula->bulk        = 'L';
        $formula->description = '<p>A tanglefoot bag is filled with sticky substances. When you hit a creature with a tanglefoot bag, that creatures becomes entangled for 1 minute. The target creature may attempt a DC 15 STR check to break free, but the creature must make 3 Successful checks. Tanglefoot bags are not effective when used on a creature that is in water. The target or a creature adjacent to the target can end the entangled condition by spending 3 Interact Actions. These Actions need not be consecutive.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Bomb', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 5, 'meta' => 'Alchemy and Bomb Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Thunderstone';
        $formula->type        = 'Alchemical';
        $formula->level       = 3;
        $formula->price       = '3 gp';
        $formula->bulk        = 'L';
        $formula->description = '<p>When this stone hits a hard surface or creature, it explodes with a deafening bang. A thunderstone deals 1D4 Sonic damage and 1 Sonic Splash damage, and each creature within 10 feet of the space in which the stone exploded must succeed at a DC 15 CON Save or be deafened until the end of its next turn.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Bomb', 'Consumable', 'Sonic', 'Splash'], [
            'skills' => ['Crafting' => ['dc' => 7, 'meta' => 'Alchemy and Bomb Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Tindertwig';
        $formula->type        = 'Alchemical';
        $formula->level       = 2;
        $formula->price       = '2 gp';
        $formula->bulk        = '-';
        $formula->description = '<p>An alchemical substance on one end of this tiny wooden stick ignites when struck against a rough surface. Creating a flame with a tindertwig is much faster than creating a flame with a flint and steel; as part of the activation Action, you can touch the tindertwig to a flammable object to set it on fire.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Fire'], [
            'skills' => ['Crafting' => ['dc' => 6, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Witchweed Stick';
        $formula->type        = 'Alchemical';
        $formula->price       = '20 gp / 40 gp';
        $formula->description = '<p>This paste, which smells like tobacco, is refined from the stalks and leaves of the witchweed plant. It is packed into thick paper tubes about the size of a smokestick. When ignited it creates a 10-foot cube of light smoke that provides no concealment. Anyone attempting to cast Arcane spells within the smoke must make a Concentration check (DC 15 + spell level). If the check fails, the spell is lost. The smoke loses its alchemical abilities after 5 rounds and dissipates normally.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 14, 'meta' => 'Alchemy']],
        ]);
    }
}
