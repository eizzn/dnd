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
        $formula->type        = 'Alchemical';
        $formula->level       = 1;
        $formula->price       = '10 gp'; // Standard D&D 3.5 market price
        $formula->bulk        = '1 lb';  // D&D 3.5 weight conversion
        $formula->description = '<p>A flask of acid is a splash weapon. A direct hit deals 1d6 points of acid damage. Every creature within 5 feet of the splash point takes 1 point of acid damage.</p>';
        $helper->saveFormula($formula, ['Acid', 'Alchemical', 'Splash', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = "Alchemist's Fire";
        $formula->type        = 'Alchemical';
        $formula->level       = 1;
        $formula->price       = '20 gp';
        $formula->bulk        = '1 lb';
        $formula->description = "<p>Alchemist's fire is a flask filled with a volatile liquid that ignites when exposed to air. You can throw this flask as a splash weapon. A direct hit deals 1d6 points of fire damage. On the round following a direct hit, the target takes an additional 1d6 points of fire damage. To extinguish the flames before this round, the target can spend a full-round action to make a DC 15 Reflex save, or submerge themselves in water. Every creature within 5 feet of the splash point takes 1 point of fire damage from the initial impact.</p>";
        $helper->saveFormula($formula, ['Alchemical', 'Bomb', 'Consumable', 'Fire', 'Splash'], [
            'skills'    => ['Crafting' => ['dc' => 20, 'meta' => 'Alchemy']],
            'materials' => [
                'Ellond Shrub'  => ['meta' => 'At least 5oz of the bark, ground into a fine powder'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Antidote';
        $formula->type        = 'Elixir';
        $formula->level       = 1;
        $formula->bulk        = '—';
        $formula->description = '<p>Antidotes come in three different tiers: standard, greater, and true. Upon drinking a standard antidote, you gain a +2 alchemical bonus to CON Saves against poison for 1 hour. A greater antidote grants a +5 alchemical bonus to CON Saves against poison for 1 hour. A true antidote grants a +5 alchemical bonus to CON Saves against poison for 1 hour, and you can immediately reroll one CON Save against a poison currently afflicting you.</p>
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
            <td>15</td>
            <td>15 gp</td>
        </tr>
        <tr>
            <td>Greater</td>
            <td>5</td>
            <td>25</td>
            <td>50 gp</td>
        </tr>
        <tr>
            <td>True</td>
            <td>10</td>
            <td>30</td>
            <td>150 gp</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Elixir'], [
            'skills'    => ['Crafting' => ['dc' => 15, 'meta' => 'Alchemy']],
            'materials' => ['Chalcedony' => ['price' => 'As listed in table']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Antiplague';
        $formula->type        = 'Elixir';
        $formula->level       = 1;
        $formula->bulk        = '—';
        $formula->activation  = 'Action; Operate activation, no cost';
        $formula->meta        = '<dl>
    <dt>Onset</dt> <dd>Beginning of your next turn</dd>
</dl>';
        $formula->description = "<p>Antiplague comes in three different types: standard, greater, and true. Upon drinking a standard antiplague, you gain a +2 alchemical bonus to CON Saves vs Diseases for 24 hours; this applies to your daily Save against a Disease's progression. A greater antiplague grants a +5 alchemical bonus to CON Saves vs Diseases for 24 hours. A true antiplague grants a +5 alchemical bonus to CON Save vs diseases for 24 hours, and when you consume a true antiplague, you can immediately attempt a Save against one disease currently afflicting you; if you succeed, you are cured of the Disease.</p>
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
            <td>15</td>
            <td>15 gp</td>
        </tr>
        <tr>
            <td>Greater</td>
            <td>5</td>
            <td>25</td>
            <td>50 gp</td>
        </tr>
        <tr>
            <td>True</td>
            <td>10</td>
            <td>30</td>
            <td>150 gp</td>
        </tr>
    </tbody>
</table>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Elixir'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Alchemy']],
            'feats'  => ['Brew Potion'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Aqua Regia';
        $formula->type        = 'Acid';
        $formula->level       = 3;
        $formula->price       = '30 gp';
        $formula->description = '<p>Aqua regia is a mixture of nitric acid and hydrochloric acid, optimally in a molar ratio of 1:3. Aqua regia is a yellow-orange fuming liquid, so named by alchemists because it can dissolve the noble metals gold and platinum, though not all metals</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Acid'], [
            'skills' => ['Crafting' => ['dc' => 18, 'meta' => 'Alchemy and Bomb Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Blueshine';
        $formula->type        = 'Alchemical';
        $formula->level       = 5;
        $formula->price       = '1,000 gp';
        $formula->description = '<p>Blueshine is normally acquired through a complex series of precisely timed heatings, slakings, and prolonged baths in arcane mixtures of rare and enchanted liquids known to included the following.</p>
<ul>
    <li>Blood from any dragon</li>
    <li>Sweet Water Potion</li>
    <li>Brine solution with a cockatrice feather that has soaked for at least 3 months. Only 1 gallon of the brine is used, the feather can be left in the brine for use at a later time</li>
</ul>
<p>Metals that are treated with blueshine becomes immune to Acid, corrosion, and all slimes (even from Rust Monsters)</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Additive'], [
            'skills'    => ['Crafting' => ['dc' => 25, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Bottled Lightning';
        $formula->type        = 'Alchemical';
        $formula->level       = 1;
        $formula->price       = '20 gp';
        $formula->bulk        = '1 lb';
        $formula->description = '<p>Bottled lightning is packed with volatile reagents that create a blast of electricity when they are exposed to air. Bottled lightning can be thrown as a splash weapon. A direct hit deals 1d6 points of electricity damage and causes the target to be flat-footed to all creatures until the start of your next turn. Every creature within 5 feet of the splash point takes 1 point of electricity damage.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Bomb', 'Consumable', 'Electricity', 'Splash', 'Elixir'], [
            'skills' => ['Crafting' => ['dc' => 20, 'meta' => 'Alchemy and Bomb Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = "Bravo's Brew";
        $formula->type        = 'Elixir';
        $formula->level       = 1;
        $formula->price       = '25 gp';
        $formula->bulk        = '—';
        $formula->meta        = '<dl>
    <dt>Onset</dt> <dd>Beginning of next turn</dd>
</dl>';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>For the next hour after this elixir takes effect, you gain a +1 alchemical bonus to WIS Saves and a +3 alchemical bonus to Saves against Fear.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Elixir', 'Mental'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Alchemy and Distill Alcohol']],
            'feats'  => ['Brew Potion'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Everbright';
        $formula->type        = 'Alchemical';
        $formula->level       = 5;
        $formula->price       = '5,000 gp';
        $formula->description = '<p>This long, difficult, and exacting dwarven process is now known to smiths of other races.</p>
<p>Metals treated with Everbright gain an enduring bright shine (akin to chromium) and becomes immune to tarnishing and other discoloration, acidic corrosion, and rusting.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Additive'], [
            'skills'    => ['Crafting' => ['dc' => 25, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Flashpellet';
        $formula->type        = 'Alchemical';
        $formula->level       = 2;
        $formula->price       = '50 gp';
        $formula->bulk        = '—';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>You can throw this small alchemical bead as a splash weapon. When it strikes a hard surface or is struck sharply, it ignites with a bright flash. Creatures within a 10-foot radius must SUCCEED at a DEX Save (DC 15) or be Blinded for 1 round, and Dazzled for an additional 1d4 rounds.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 25, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = "Cat's Eye";
        $formula->type        = 'Elixir';
        $formula->level       = 3;
        $formula->price       = '50 gp';
        $formula->bulk        = '—';
        $formula->meta        = '<dl>
    <dt>Onset</dt> <dd>Beginning of your next turn</dd>
</dl>';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>For 10 minutes after this elixir takes effect, you gain low-light vision and a +2 alchemical bonus on Perception checks. If you already have low-light vision, the range of your vision doubles instead.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 20, 'meta' => 'Brew Potion']],
            'spells' => ['See Invisibility'],
        ]);

        $formula              = new Formula;
        $formula->name        = "Cheetah's Speed";
        $formula->type        = 'Elixir';
        $formula->level       = 1;
        $formula->price       = '15 gp';
        $formula->bulk        = '—';
        $formula->meta        = '<dl>
    <dt>Onset</dt> <dd>Beginning of your next turn</dd>
</dl>';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>For the next minute after this elixir takes effect, your base land speed increases by 10 feet. This is an alchemical bonus.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Brew Potion']],
            'spells' => ['Fleet Step'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Cockatrice Feather Preservation';
        $formula->rarity        = 'Rare';
        $formula->type          = 'Alchemical';
        $formula->price         = '2,000 gp';
        $formula->crafting_time = '8 hours';
        $formula->crafting      = '<ul>
    <li>Take a Cauldron and mix in equal parts of Oil of Etherealness and Aqua Regia and Human Tears (at least half an ounce of each).</li>
    <li>Mix this liquid with a glass or crystal rod</li>
    <li>Heat till boiling while stirring in at least 6,000 gp worth of powdered Agate and either six whole (live or dead) Cerebral Parasites or the blood of a Slaad, Githyanki or a Nightmare</li>
    <li>Stir until the solid components are dissolved and then immerse the cockatrice feather into the liquid while it is boiling.</li>
    <li>Take the cauldron away from the heat immediately after putting the feather in and let the cauldron stand until the liquid evaporates.</li>
</ul>';
        $formula->description   = '<p>The tail feathers of a Cockatrice can be preserved so that it does not lose its Petrification powers.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills' => [
                'Crafting' => ['dc' => 28, 'meta' => 'Alchemy'],
                'Arcana'   => ['dc' => 22],
                'Nature'   => ['dc' => 20],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Darkvision Elixir';
        $formula->type        = 'Elixir';
        $formula->level       = 1;
        $formula->bulk        = '—';
        $formula->meta        = '<dl>
    <dt>Onset</dt> <dd>Beginning of your next turn</dd>
</dl>';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>When this elixir takes effect, your sight becomes sharper in darkness. This elixir has three types: standard, greater, and true. Upon drinking the standard elixir, you gain Darkvision out to a range of 60 feet for 10 minutes. The greater version grants Darkvision out to a range of 60 feet for 1 hour, and the true elixir grants Darkvision out to a range of 60 feet for 8 hours.</p>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Level</th>
            <th>Skill DC</th>
            <th>Price</th>
            <th>Duration</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Standard</td>
            <td>1</td>
            <td>15</td>
            <td>15 gp</td>
            <td>10 minutes</td>
        </tr>
        <tr>
            <td>Greater</td>
            <td>3</td>
            <td>20</td>
            <td>120 gp</td>
            <td>1 hour</td>
        </tr>
        <tr>
            <td>True</td>
            <td>6</td>
            <td>26</td>
            <td>500 gp</td>
            <td>8 hours</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Elixir'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Brew Potion']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Eagle Eye Elixir';
        $formula->type        = 'Elixir';
        $formula->level       = 1;
        $formula->price       = '15 gp';
        $formula->bulk        = '—';
        $formula->meta        = '<dl>
    <dt>Onset</dt> <dd>Beginning of your next turn</dd>
</dl>';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>For the next hour after this elixir takes effect, you gain a +1 alchemical bonus to Perception checks. This alchemical bonus increases to +2 for Perception checks to find secret doors and traps.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Elixir', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Alchemy and Brew Potion']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Fake Blood';
        $formula->type        = 'Elixir';
        $formula->level       = 1;
        $formula->price       = '10 gp';
        $formula->bulk        = '—';
        $formula->description = '<p>This concoction matches the exact visual appearance, scent, and metallic taste of authentic blood. A suspicious observer can detect its artificial nature with a successful DC 17 Perception or Search check.</p>
<p>Though chemically synthetic, this mixture provides genuine nourishment to vampires. While it satisfies their baseline hunger, the diluted quality forces a vampire to consume five times (5x) the volume of a standard feeding to gain an equivalent amount of physical sustenance and vital benefit.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Elixir'], [
            'skills'    => ['Crafting' => ['dc' => 15, 'meta' => 'Alchemy']],
            'materials' => [
                'Bloodberry Bush' => ['meta' => '10 berries'],
                'Iron'            => ['meta' => '1/2 oz of powdered iron'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Glowpowder';
        $formula->type        = 'Alchemical';
        $formula->level       = 5;
        $formula->price       = '50 gp';
        $formula->bulk        = '—';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = "<p>This luminescent dust clings to surfaces and creatures, making them glow. The grains of powder glow about as brightly as sparks from a campfire. They don't provide illumination, but they are noticeable. When sprinkled on an object or surface, the powder helps reveal edges and details, granting a +1 circumstance bonus on Perception checks made on the treated area. A creature sprinkled with the powder is likewise easier to detect. Perception checks to see the creature gain a +2 circumstance bonus. An invisible creature sprinkled with the dust has only concealment (20% miss chance) instead of total concealment. Once applied, the dust clings and glows for 1 minute. A creature sprinkled with the powder can wash it off by taking a Full-Round Action.</p>
<p>The powder usually comes in a tube that allows the contents to be blown or shaken out. Blowing out the powder is an Action and creates a 10-foot cone. If carefully sprinkled, the powder can cover 125 square feet (5 five-foot squares). It takes a Full-Round Action to completely cover a 5-foot square with the powder.</p>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 25, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = "Habalar's Stealth";
        $formula->type        = 'Alchemical';
        $formula->level       = 7;
        $formula->price       = '150 gp';
        $formula->description = '<p>The only widespread metal treatment devised by a human is this process of immersing and boiling items in a bath of stealthslake. The secret formula for stealthslake is known only to the House of Halabar, a merchant clan in Murann, which guards it viciously. The descendants of Halabar are rumored to employ certain intelligent, shapechanging monsters to strike at lore thieves where they cannot easily do so in person.</p>
<p>This process renders metallic items non-ferromagnetic, non-reflective, and silent, not clanging even when struck against other metals or stone with force. Treated items are able to take dyes and paints so that even bare sword blades can readily be changed in color and thus concealed from long-range detection. Treated items still strike sparks at sharp impacts and when broken and conduct Electricity as well.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Additive'], [
            'skills'    => ['Crafting' => ['dc' => 27, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Healing Salve';
        $formula->type        = 'Alchemical';
        $formula->level       = 3;
        $formula->price       = '50 gp';
        $formula->bulk        = '1 lb';
        $formula->meta        = '<dl>
    <dt>Onset</dt> <dd>When the recipient finishes a Long Rest</dd>
</dl>';
        $formula->activation  = '1 minute; Operate Activation';
        $formula->description = '<p>Rubbing this stinky green paste into wounds promotes rapid healing. Applying one dose of this salve cures 1d8 points of damage. A character can benefit from only one application of healing salve per day; additional applications have no effect.</p>
<p>A single vial holds 10 uses.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Healing'], [
            'skills' => ['Crafting' => ['dc' => 25, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ink, Spell Writing (Common)';
        $formula->type        = 'Alchemical';
        $formula->level       = 1;
        $formula->rarity      = 'Common';
        $formula->price       = '25 gp';
        $formula->bulk        = '—';
        $formula->description = '<p>1 oz bottle used in the writing of spells. Can be used for levels 1 - 3 spells (both scrolls and books)</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills'    => ['Crafting' => ['dc' => 15, 'meta' => 'Alchemy']],
            'materials' => ['Charcoal' => ['meta' => '1/8 oz finely crushed']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ink, Spell Writing (Uncommon)';
        $formula->type        = 'Alchemical';
        $formula->level       = 5;
        $formula->rarity      = 'Uncommon';
        $formula->price       = '200 gp';
        $formula->bulk        = '—';
        $formula->description = '<p>1 oz bottle used in the writing of spells. Can be used for levels 4 - 6 spells (both scrolls and books)</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills'    => ['Crafting' => ['dc' => 20, 'meta' => 'Alchemy']],
            'materials' => [
                'Charcoal' => ['meta' => '1/8 oz finely crushed'],
                'Iron'     => ['meta' => '1/8 oz finely ground'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ink, Spell Writing (Rare)';
        $formula->type        = 'Alchemical';
        $formula->level       = 5;
        $formula->rarity      = 'Rare';
        $formula->price       = '250 gp';
        $formula->bulk        = '—';
        $formula->description = '<p>1 oz bottle used in the writing of spells. Can be used for levels 7 - 8 spells (both scrolls and books)</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills'    => ['Crafting' => ['dc' => 25, 'meta' => 'Alchemy']],
            'materials' => [
                'Charcoal' => ['meta' => '1/8 oz finely crushed'],
                'Iron'     => ['meta' => '1/8 oz finely ground'],
                'Livewood' => ['meta' => '1/4 oz powdered leaves and reduced with any alcohol'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ink, Spell Writing (Very Rare)';
        $formula->type        = 'Alchemical';
        $formula->level       = 12;
        $formula->rarity      = 'Rare';
        $formula->price       = '500 gp';
        $formula->bulk        = '—';
        $formula->description = '<p>1 oz bottle used in the writing of spells. Can be used for levels 9 - 11 spells (both scrolls and books)</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills'    => ['Crafting' => ['dc' => 32, 'meta' => 'Alchemy']],
            'materials' => [
                'Charcoal' => ['meta' => '1/8 oz finely crushed'],
                'Iron'     => ['meta' => '1/8 oz finely ground'],
                'Livewood' => ['meta' => '1/4 oz powdered leaves and reduced with any alcohol'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Liquid Ice';
        $formula->type        = 'Alchemical';
        $formula->level       = 3;
        $formula->price       = '30 gp';
        $formula->bulk        = '1 lb';
        $formula->description = "<p>The liquid reagents in this vial create a freezing effect when exposed to air. Liquid ice can be thrown as a splash weapon. A direct hit deals 1D6 points of cold damage and reduces the target's base land speed by 10 feet until the end of its next turn. Every creature within 5 feet of the splash point takes 1 point of cold damage.</p>";
        $helper->saveFormula($formula, ['Alchemical', 'Bomb', 'Cold', 'Consumable', 'Splash', 'Elixir'], [
            'skills' => ['Crafting' => ['dc' => 20, 'meta' => 'Alchemy and Bomb Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Phantom Ink';
        $formula->type        = 'Alchemical';
        $formula->price       = '40 gp';
        $formula->level       = 4;
        $formula->activation  = 'Used instead of normal ink (see text)';
        $formula->bulk        = '—';
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
            <td>Any spell with the Light descriptor</td>
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
            'skills'   => [
                'Crafting' => ['dc' => 20, 'meta' => 'Alchemy'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Salamander Elixir';
        $formula->type        = 'Elixir';
        $formula->level       = 3;
        $formula->price       = '50 gp';
        $formula->meta        = '<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
</dl>';
        $formula->bulk        = '—';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>For 24 hours after the onset of this potion, you are protected from the effects of severe heat.</p>';
        $helper->saveFormula($formula, ['Potion', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 20, 'meta' => 'Brew Potion']],
            'spells' => ['Endure Elements'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Silt-Walker Sap';
        $formula->type        = 'Elixir';
        $formula->level       = 2;
        $formula->method      = 'Ingested';
        $formula->meta        = '<dl>
    <dt>Onset</dt><dd>1 turn</dd>
</dl>';
        $formula->description = '<p>This thick, translucent resin is scraped from the roots of desert shrubs. It temporarily deadens the nervous system to physical exhaustion.</p>
<dl>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>The consumer ignores the mechanical penalties of 1 level of Exhaustion, and gains a +10 foot bonus to their base land speed.</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Elixir', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Alchemy'],
                'Nature'   => ['dc' => 12],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Suregrip';
        $formula->type        = 'Alchemical';
        $formula->level       = 5;
        $formula->price       = '20 gp';
        $formula->bulk        = '—';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>This gluey substance improves your grip, granting a +1 circumstance bonus on any check that deals with holding onto something, including Climb checks and Grapple checks. Once applied, the suregrip lasts for 10 minutes.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 25, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Silversheen';
        $formula->type        = 'Oil';
        $formula->level       = 5;
        $formula->price       = '250 gp';
        $formula->description = '<p>You can slather this silvery paste onto a melee weapon, thrown weapon, or a bundle of ammunition. For the next hour, the weapon or ammunition is treated as a silvered weapon for the purpose of bypassing damage reduction. Applying silversheen temporarily overrides any damage properties from its special materials (such as cold iron). One vial coats one melee weapon, one thrown weapon, or 20 pieces of ammunition.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Oil'], [
            'skills' => ['Crafting' => ['dc' => 25, 'meta' => 'Alchemy']],
            'spells' => ['Imbue with Silvered'],
            'feats'  => ['Brew Potion'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Smokestick';
        $formula->type        = 'Alchemical';
        $formula->level       = 1;
        $formula->price       = '20 gp';
        $formula->bulk        = '0.5 lb';
        $formula->activation  = 'Action; Operate Activation; no cost';
        $formula->description = '<p>With a sharp twist of this item, you instantly create a screen of thick, opaque smoke. The stick fills a 10-foot cube with smoke that provides total concealment. The smoke lasts for 1 minute or until dispersed by a strong wind.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 20, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Sunrod';
        $formula->type        = 'Alchemical';
        $formula->level       = 2;
        $formula->price       = '2 gp';
        $formula->bulk        = '1 lb';
        $formula->activation  = 'Action; Operate Activation; no cost';
        $formula->description = "<p>This 1-foot-long, gold-tipped rod glows after it's struck on a hard surface. It sheds bright illumination in a 30-foot radius and shadowy illumination for an additional 30 feet. It glows for 6 hours.</p>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Light'], [
            'skills' => ['Crafting' => ['dc' => 25, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Tanglefoot Bag';
        $formula->type        = 'Alchemical';
        $formula->level       = 2;
        $formula->price       = '50 gp';
        $formula->bulk        = '4 lb';
        $formula->description = '<p>A tanglefoot bag is a small sack filled with a tough, sticky glue. When you throw it as a splash weapon, a direct hit forces the target to make a DC 15 Reflex save or be glued to the floor (if airborne, it falls). Even with a successful save, the creature is entangled, moving at half speed for 2d4 rounds. A creature glued to the floor can break free with a DC 17 Strength check or by dealing 15 points of slashing damage to the goo. A tanglefoot bag is ineffective against creatures of Huge size or larger, or creatures completely submerged in water.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Bomb', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 25, 'meta' => 'Alchemy and Bomb Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Thunderstone';
        $formula->type        = 'Alchemical';
        $formula->level       = 3;
        $formula->price       = '30 gp';
        $formula->bulk        = '1 lb';
        $formula->description = '<p>You can throw this stone as a splash weapon. When it strikes a hard surface, it explodes with a deafening bang. Each creature within a 10-foot-radius spread must succeed at a DC 15 CON Save or be deafened for 1 hour. A thunderstone deals no damage.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Bomb', 'Consumable', 'Sonic', 'Splash'], [
            'skills' => ['Crafting' => ['dc' => 25, 'meta' => 'Alchemy and Bomb Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Tindertwig';
        $formula->type        = 'Alchemical';
        $formula->level       = 2;
        $formula->price       = '1 gp';
        $formula->bulk        = '-';
        $formula->description = '<p>An alchemical substance on one end of this tiny wooden stick ignites when struck against a rough surface. Creating a flame with a tindertwig is much faster than creating a flame with a flint and steel; lighting a torch with a tindertwig is a Standard Action (rather than a Full-Round Action), and lighting any other fire takes at least a Standard Action.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Fire'], [
            'skills' => ['Crafting' => ['dc' => 20, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Witchweed Stick';
        $formula->type        = 'Alchemical';
        $formula->level       = 4;
        $formula->price       = '40 gp';
        $formula->description = '<p>This paste, which smells like tobacco, is refined from the stalks and leaves of the witchweed plant. It is packed into thick paper tubes about the size of a smokestick. When ignited it creates a 10-foot cube of light smoke that provides no concealment. Anyone attempting to cast Arcane spells within the smoke must make a Concentration check (DC 15 + spell level). If the check fails, the spell is lost. The smoke loses its alchemical abilities after 5 rounds and dissipates normally.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 20, 'meta' => 'Alchemy']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Turpentine';
        $formula->type        = 'Alchemical';
        $formula->level       = 2;
        $formula->price       = '1 cp';
        $formula->bulk        = 'Vial';
        $formula->crafting    = '<ul>
    <li>Collect the sap of the Pine Wood Tree.</li>
    <li>Filter the sap of impurities.</li>
    <li>Heat with water in a vapor collecting container.</li>
    <li>The captured vapor cools back to liquid. This is the turpentine.</li>
</ul>';
        $formula->description = '<p>Made from the resin of various pine trees, it can be used to dissolve resin or waxes. It is toxic if swallowed or inhaled in large amounts.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable'], [
            'skills'    => ['Crafting' => ['dc' => 5, 'meta' => 'Alchemy']],
            'materials' => ['Pine Wood Tree' => ['meta' => 'Sap']],
        ]);
    }
}
