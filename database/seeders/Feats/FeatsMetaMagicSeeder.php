<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeatsMetaMagicSeeder extends Seeder
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

        $feat              = new Feat;
        $feat->name        = 'Scribe Scroll';
        $feat->requirement = 'You must have the ability to cast spells';
        $feat->description = "<p>You can write spells onto scrolls, allowing you to cast them later without spending a spell slot. You use the Craft activity, but you can make only scrolls. Instead of attempting a Crafting check, you attempt a check with the appropriate skill for the spell's tradition - Arcana for a spell on the arcane spell, and Religion for a divine spell. If a spell appears on multiple spell lists, you can choose which of the applicable skills to use.</p>
<p>You must have access to a spell in order to scribe it onto a scroll.</p>
<table>
    <thead>
        <tr>
            <th>Spell Level</th>
            <th>Cost</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Cantrip</td>
            <td>15 gp</td>
            <td>2 Hours</td>
        </tr>
        <tr>
            <td>1st</td>
            <td>25 gp</td>
            <td>4 Hours</td>
        </tr>
        <tr>
            <td>2nd</td>
            <td>150 gp</td>
            <td>8 Hours</td>
        </tr>
        <tr>
            <td>3rd</td>
            <td>300 gp</td>
            <td>12 Hours</td>
        </tr>
        <tr>
            <td>4th</td>
            <td>500 gp</td>
            <td>18 Hours</td>
        </tr>
        <tr>
            <td>5th</td>
            <td>750 gp</td>
            <td>24 Hours</td>
        </tr>
    </tbody>
</table>
<p>If you do not have the ability to cast spells, you now can cast spells from scrolls (As if you had the Activate Magic Item Feat).</p>";
        $helper->addTypesToFeat($feat, ['Downtime', 'Manipulate', 'Skill', 'Item Creation', 'Generic' => 2]);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Improved Scribe Scroll';
        $feat->description = '<p>You can create temporary Scrolls.</p>
<p>As part of your daily spell preparation time, you may prepare a number of temporary scrolls. The number of scrolls is based on your ranks in the Arcana skill. The scrolls require Attunement, and the sacrifice of a Spell Slot equal to the number of temporary Scrolls you create. The highest level of Spell you can put into a temporary scroll is equal to 3 levels lower than your highest level Spell Slot (minimum 1st level), with an absolute max Spell Level of 4th. You can choose to regain your sacrificed Spell Slots. If you do, all your temporary Scrolls become blank sheets of paper.</p>
<p>Other characters are able to use and cast these temporary Scrolls if they Attune to them and have sufficient INT. An individual must have an INT of 9 + the Spell level of the spell to cast it.</p>
<p>It takes one quarter the amount of time to scribe a Temporary Scroll. The cost is always 1 gp plus any cost that the Spell requires.</p>
<table>
    <thead>
        <tr>
            <th>Ranks in Arcana</th>
            <th>Max number of temporary Scrolls</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>5</td>
            <td>2</td>
        </tr>
        <tr>
            <td>10</td>
            <td>3</td>
        </tr>
        <tr>
            <td>15</td>
            <td>4</td>
        </tr>
    </tbody>
</table>
<p>A Dispel Magic spell of any level that targets a temporary Scroll turns them into blank sheets of paper.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Manipulate', 'Item Creation', 'Generic' => 5]);
        $feat->parent_feats()->save(app()->feats['Scribe Scroll']);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Greater Scribe Scroll';
        $feat->description = '<p>You can create Scrolls of higher level.</p>
<table>
    <thead>
        <tr>
            <th>Spell Level</th>
            <th>Cost</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>6th</td>
            <td>1,500 gp</td>
            <td>3 Days</td>
        </tr>
        <tr>
            <td>7th</td>
            <td>3,000 gp</td>
            <td>1 Week</td>
        </tr>
        <tr>
            <td>8th</td>
            <td>5,000 gp</td>
            <td>2 Weeks</td>
        </tr>
        <tr>
            <td>9th</td>
            <td>105,000 gp</td>
            <td>3 Weeks</td>
        </tr>
        <tr>
            <td>10th</td>
            <td>250,000 gp</td>
            <td>4 Weeks</td>
        </tr>
    </tbody>
</table>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Manipulate', 'Item Creation', 'Generic' => 11]);
        $feat->parent_feats()->save(app()->feats['Improved Scribe Scroll']);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 10]);

        $feat              = new Feat;
        $feat->name        = 'Brew Potion';
        $feat->description = '<p>You can use the Craft activity to create magical Potions of level 3 or lower. Many magic items have special crafting requirements, such as access to certain spells.</p>
<p>When you select this feat, you gain the formulas for four common potions of level 2 or lower.</p>
<table>
    <thead>
        <tr>
            <th>Spell Level</th>
            <th>Cost</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Cantrip</td>
            <td>15 gp</td>
            <td>3 Hours</td>
        </tr>
        <tr>
            <td>1st</td>
            <td>25 gp</td>
            <td>6 Hours</td>
        </tr>
        <tr>
            <td>2nd</td>
            <td>75 gp</td>
            <td>9 Hours</td>
        </tr>
        <tr>
            <td>3rd</td>
            <td>175 gp</td>
            <td>12 Hours</td>
        </tr>
    </tbody>
</table>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Potion', 'Generic' => 2]);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 2]);
        $feat->skills()->save(app()->skills['Medicine'], ['dc' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Improved Brew Potion';
        $feat->description = '<p>You can create more powerful Potions as well as various Alchemical items.</p>
<p>When you select this feat, you gain the formulas for four Potions of level 4 or higher. You also gain the formulas for 2 Acid, Bomb, Drug, Elixir, Oil, or Poison</p>
<table>
    <thead>
        <tr>
            <th>Spell Level</th>
            <th>Cost</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>4th</td>
            <td>500 gp</td>
            <td>18 Hours</td>
        </tr>
        <tr>
            <td>5th</td>
            <td>750 gp</td>
            <td>24 Hours</td>
        </tr>
        <tr>
            <td>6th</td>
            <td>1,250 gp</td>
            <td>2 Days</td>
        </tr>
    </tbody>
</table>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Potion', 'Generic' => 7]);
        $feat->parent_feats()->save(app()->feats['Brew Potion']);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 10]);
        $feat->skills()->save(app()->skills['Medicine'], ['dc' => 7]);

        $feat              = new Feat;
        $feat->name        = 'Craft Armament';
        $feat->description = '<p>You can use the Craft activity to create magical or psionic Armors and Weapons. Many magic items have special crafting requirements, such as access to certain Spells or Powers.</p>
<p>When you select this feat, you gain the formulas for four common armor or weapons Runes of level 5 or lower.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Psionic', 'Armor', 'Generic' => 4]);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Craft Implement';
        $feat->requirement = 'You must have the ability to cast spells and trigger magical items';
        $feat->description = '<p>You can use the Craft activity to create magical Wands and Scepters. Many magic items have special crafting requirements, such as access to certain Spells or Powers.</p>
<p>When you select this feat, you gain the formulas for four common wands, and/or scepters of level 5 or lower.</p>
<p>If you do not have the ability to trigger magic items (typically with the Activate Magic Item feat), then you can now activate Wands, Rods, Scepters, and Staffs.</p>
<p>In general, the base price to craft a Wand is (Caster Level X Spell Level X 10 X number of charges gp. Assume Cantrips have a Spell Level of 1/2). Staffs can vary since they can have multiple spells but typically uses the same cost formula as the wand for each spell, then multiply it all by 10.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Wand', 'Generic' => 2]);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Forge Ring';
        $feat->requirement = 'You must have the ability to cast Cantrips';
        $feat->description = '<p>You can use the Craft activity to create magical Rings. Many magic items have special crafting requirements, such as access to certain Spells or Powers.</p>
<p>When you select this feat, you gain the formulas for four common rings of level 5 or lower.</p>
<p>If you do not have the ability to trigger magic items (typically with the Activate Magic Item feat), then you can now activate Rings</p>
<p>In general, the base price to forge a ring is (Caster Level X Spell Level X 1,000 gp) per continuous effect. Use the cost formula multiplied by 500 X number of uses for effects that can be used a number of times per day.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Attunement', 'Generic' => 2]);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 2, 'meta' => 'Blacksmithing']);

        $feat              = new Feat;
        $feat->name        = 'Inscribe Rune';
        $feat->requirement = 'You must the ability to cast Divine spells';
        $feat->description = '<p>You can cast any divine spell you have prepared and create a Rune. Inscribing a Rune takes one day for each 1,000 gp in its base price (Spell Level X Caster Level X 100 gp). To inscribe a Rune, you must use up raw materials costing 1/2 the base price (some spells incur extra costs in material components as well).</p>
<p>If you inscribe a Rune onto a piece of Armor or a Weapon, treat it as if it was created using the Craft Armament feat. Inscribing a Rune into an area requires X10 the normal amount of gp.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Divine' => 2]);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 7, 'meta' => 'Rune Carving, or Painting']);

        $feat              = new Feat;
        $feat->name        = 'Imbue Gem';
        $feat->requirement = 'You must have the ability to manifest powers';
        $feat->description = '<p>You can use the Craft activity to imbue a gem with a Psionic Power (much like a Scroll). You must have the Power available. A gem can only be imbued with a single Power. The gem must have a minimum value equal to 50 gp per level of the Power to be stored. Imbuing a Power requires 1 hour plus the normal time to manifest the Power.</p>
<p>An imbued gem requires Attunement to use. Once you are Attuned to the gem, you can trigger the imbued Power by touching it.</p>
<p>Creating a gem with a permanent magical effect (like a ring), requires a gem X10 in value.</p>
<p>If you do not have the ability to trigger magic items (typically with the Activate Magic Item feat), then you can now activate Gems.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Attunement', 'Generic' => 2]);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 10, 'meta' => 'Gemcutting']);

        $feat              = new Feat;
        $feat->name        = 'Inscribe Tattoo';
        $feat->description = '<p>You can use the Craft activity to create magical or psionic Tattoos. Many magic items have special crafting requirements, such as access to certain Spells or Powers.</p>
<p>When you select this feat, you gain the formulas for four common Tattoo of level 2 or lower.</p>
<p>Each Tattoo counts as one of your Attuned magic items.</p>
<p>If you do not have the ability to trigger magic items (typically with the Activate Magic Item feat), then you can now activate Tattoos.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Psionic', 'Attunement', 'Generic' => 2]);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 3, 'meta' => 'Calligraphy']);

        $feat                    = new Feat;
        $feat->name              = 'Craft Contingent Spell';
        $feat->requirement       = 'You must have the ability to cast spells';
        $feat->short_description = 'You know how to attach semi-permanent spells to a creature and set them to activate under certain conditions.';
        $feat->description       = '<p>You can make contingent any spell that you know. Crafting a contingent spell takes one day for each 1,000 gp in its base price (Spell Level X Caster Level X 100 gp). To craft a contingent spell, you must use up raw materials costing 1/2 the base price (some spells incur extra costs in material components as well).</p>
<p>Each Contingent spell counts as two of your Attuned magic items.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Attunement', 'Generic' => 7]);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 6, 'meta' => 'Calligraphy']);

        $feat              = new Feat;
        $feat->name        = 'Craft Cognizance Crystal';
        $feat->requirement = 'You must have the ability to manifest powers';
        $feat->description = '<p>You can create a Cognizance Crystal. Doing so takes one day for each 1,000 gp in its base price. The base price of a Cognizance Crystal is equal to the highest-level Power it could manifest using all its stored Power Points, squared, multiplied by 1,000 gp.</p>
<p>Crafting a cognizance crystal causes you 1/200 of its base price in CON damage and use up raw materials costing one-half its base price.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Psionic', 'Generic' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Craft Dorje';
        $feat->requirement = 'You must have the ability to manifest powers';
        $feat->description = '<p>You can use the Craft activity to create a Dorje that contains a Psionic Power of 3rd level or lower.</p>
<p>A newly created dorje has 50 Charges.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Psionic', 'Generic' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Imprint Stone';
        $feat->requirement = 'You must have the ability to manifest powers';
        $feat->description = '<p>You can create a Power Stone of any Power that you know. Encoding a Power Stone takes one day for each 1,000 gp in its base price. The base price of a Power Stone is the level of the stored power X its manifester level X 25 gp. Imprinting a Power Stone causes you to take 1 point of CON damage for each 5,000 gp in the cost (minimum 1).</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Psionic', 'Generic' => 2]);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Craft Wondrous Item';
        $feat->description = '<p>You can use the Craft activity to create miscellaneous magical or psionic items. Many items have special crafting requirements, such as access to certain spells or powers or other feats.</p>
<ul>
    <li>When you select this feat, you gain the formulas for four common items of level 5 or lower.</li>
    <li>If you also have the Craft Armament Feat, you can also Craft Constructs.</li>
    <li>If you also have the Expert Conjurer Feat, you can also Craft Portals.</li>
    <li>If you also have the Craft Implement Feat, you can also Craft Rods, and Staffs</li>
    <li>If you also have the Imprint Stone Feat, then you can also Craft Psionic Seals (Psionic Runes).</li>
    <li>If you also have the Craft Cognizance Crystal Feat and Craft Dorje Feat, then you can Craft Psicrowns.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Psionic', 'Construct', 'Portal', 'Generic' => 5]);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 4]);

        $feat              = new Feat;
        $feat->name        = 'Improved Crafting';
        $feat->description = '<p>When you Craft a magic item, you pay 1/3 less of all the requirements (rounded up), including any CON damage as part of the act of Crafting the magic item (minimum 1 if the act of crafting the magic includes any CON damage).</p>';
        $helper->addTypesToFeat($feat, ['Item Creation', 'Generic' => 12]);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 12]);

        $feat              = new Feat;
        $feat->name        = 'Aim Spell';
        $feat->trigger     = 'You are casting a spell that requires a Ranged Spell attack roll';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 2 Spell Point and you gain Advantage on your Ranged Spell Attack roll.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Generic' => 3]);

        $feat              = new Feat;
        $feat->name        = 'Improved Aim Spell';
        $feat->trigger     = 'You are casting a spell that requires a Ranged Spell attack roll';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 5 Spell Points and your Ranged Spell attack automatically hits.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Generic' => 7]);
        $feat->parent_feats()->save(app()->feats['Aim Spell']);

        $feat              = new Feat;
        $feat->name        = 'Conceal Spell';
        $feat->trigger     = 'You start to cast a spell that has a maximum of two spellcasting actions.';
        $feat->action_type = 'Free';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points</li>
    <li>Spend 1 Spell Point and roll a Deception Check and add your Primary Spell Caster Ability Score Bonus to the roll. Observers must beat it with their Passive Perception check to notice that you have cast a spell.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Arcane' => 5, 'Divine' => 6, 'Primal' => 7]);

        $feat              = new Feat;
        $feat->name        = 'Delay Spell';
        $feat->trigger     = 'You start to cast a spell';
        $feat->action_type = 'Action';
        $feat->description = "<ul>
    <li>Spend 2 Spell Points. You cast a spell and set a delay of 1 to 5 rounds before it takes effect. The delay time cannot be changed once set; the spell activates at the beginning of your turn you designate. Only area, personal, and touch spells can be affected by this feat.</li>
    <li>Any decisions you would make about the spell (including attack rolls, designating targets, or determining or shaping an area) are decided when the spell is cast, with any of its effects (including damage and Saves) decided when the spell is triggered. If conditions change during the delay period in ways that would make the spell impossible to cast (the target you designate moves beyond the spell's range, for example), the spell fails.</li>
    <li>During the delay period, a delayed spell can be dispelled normally, and it can be detected in the area or on the target (as applicable).</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 5, 'Divine' => 7, 'Primal' => 8]);

        $feat                    = new Feat;
        $feat->name              = 'Disguise Spell';
        $feat->action_type       = 'Action';
        $feat->trigger           = 'You start to cast a spell while using the Performance skill';
        $feat->short_description = 'You have mastered the art of casting spells unobtrusively, mingling verbal and somatic components into its music and performances so that others rarely catch you in the act of casting a spell.';
        $feat->description       = "<ul>
    <li>You gain 2 Spell Points</li>
    <li>Spend 2 Spell Points. Like a Silent, Stilled Spell, a Disguised Spell can't be identified through Arcana. Your performance is obvious to everyone in the vicinity, but the fact that you are casting a spell isn't, unless the spell visibly emanates from you or observers have some other means of determining its source, they don't know where the effect came from.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Metamagic', 'Extra Action', 'Spell Pool', 'Arcane' => 5, 'Divine' => 6, 'Primal' => 7]);
        $feat->skills()->save(app()->skills['Performance'], ['dc' => 12]);

        $feat              = new Feat;
        $feat->name        = 'Elemental Focus';
        $feat->trigger     = 'You are about to cast a spell that has your chosen type of element';
        $feat->description = '<p>When you take this feat chose one of the following</p>
<ul>
    <li>Acid</li>
    <li>Cold</li>
    <li>Fire</li>
    <li>Electricity</li>
    <li>Sonic</li>
</ul>
<p>When you cast a spell of the chosen type, you may spend a number of Spell Points equal to the Spell Level the spell is being cast at. If you do, increase the damage die that the spell deals to the next larger die.</p>
<blockquote>
    You choose Fire and cast a Fireball Heightened to level 4. You spend 4 Spell Points and the Fireball now deals 8D8 Fire damage.
</blockquote>
<p>You may take this feat multiple times. Choose a different element each time.</p>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Arcane' => 5, 'Divine' => 6, 'Primal' => 7]);

        $feat              = new Feat;
        $feat->name        = 'Empower Spell';
        $feat->action_type = 'Free';
        $feat->trigger     = 'You start to cast a spell that deals damage';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>When you roll damage for a spell, you can spend 2 Spell Points to reroll a number of damage dice up to your Primary Attribute modifier (minimum of one). You must use the new rolls.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 5, 'Divine' => 5, 'Primal' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Energy Substitution';
        $feat->action_type = 'Free';
        $feat->trigger     = 'You start to cast an Evocation spell that has one of the following traits: Cold, Electricity, Fire, Sonic.';
        $feat->description = '<p>When you take this feat, choose one of the following energy types: Cold, Electricity, Fire, or Sonic.</p>
<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 2 Spell Points. When casting a spell with the Cold, Electricity, Fire, or Sonic trait, you can modify the spell to use your chosen type of energy instead. The altered spell works normally in all respects except the type of damage dealt.</li>
</ul>
<p>You may take this feat multiple times. Each time choose a different type of energy.</p>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Evocation', 'Spell Pool', 'Arcane' => 5]);
        $feat->parent_feats()->save(app()->feats['Evoker']);

        $feat              = new Feat;
        $feat->name        = 'Eschew Materials';
        $feat->action_type = 'Free';
        $feat->trigger     = 'You start to cast a spell that has a Material Component';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 1 Spell Point while casting the spell. You do not need to provide the Material Component for a spell as long as the Materials total cost is less than 50 gp. The spell still requires the Action for the Material Component.</li>
    <li>If you spend 7 Spell Points instead, the casting of the spell no longer requires an Action for the Material Casting (as long as the Materials total cost is less than 50 gp).</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 2, 'Divine' => 5, 'Primal' => 6]);

        $feat              = new Feat;
        $feat->name        = 'Extend Spell';
        $feat->trigger     = 'You start to cast a spell that has a duration and it is not Instantaneous.';
        $feat->action_type = 'Free';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 5 Spell Points. Triple the duration of the casting spell, up to a maximum of 30 hours.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 3, 'Divine' => 5, 'Primal' => 6]);

        $feat              = new Feat;
        $feat->name        = 'Persistent Spell';
        $feat->trigger     = 'You start to cast a spell that has a Duration and it is not Instantaneous.';
        $feat->action_type = 'Triple Action';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 20 Spell Points. The spell now has a duration of 72 hours. The spell must have a target of Self or have a Duration that does not require Concentration.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 6, 'Divine' => 7, 'Primal' => 7]);
        $feat->parent_feats()->save(app()->feats['Extend Spell']);

        $feat              = new Feat;
        $feat->name        = 'Focused Spell';
        $feat->trigger     = 'You are casting a spell that requires Concentration';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 1 Spell Point and you gain Advantage on your Concentration checks to maintain a spell that requires Concentration.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 2, 'Divine' => 2, 'Primal' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Improved Focused Spell';
        $feat->trigger     = 'You are casting a spell that requires Concentration';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 5 Spell Points and a spell that requires Concentration. The spell then does not require Concentration. This allows you to cast another spell that Requires Concentration.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 7, 'Divine' => 7, 'Primal' => 7]);
        $feat->parent_feats()->save(app()->feats['Focused Spell']);

        $feat              = new Feat;
        $feat->name        = 'Ghost Spell';
        $feat->trigger     = 'You are casting a spell that has a target or an area of effect';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 1 Spell Point and the spell you modify can target/affect creatures that are in the Ethereal Plane. Creatures that are affected by the modified Spell take Double Damage if the Spell deals damage.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 5, 'Divine' => 6, 'Primal' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Heighten Spell';
        $feat->trigger     = 'You start to cast a spell that can be Heightened.';
        $feat->action_type = 'Free';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points</li>
    <li>
        You can Heighten a Spell without using a higher level Spell Slot. Spend 2 Spell Points for each level of Heightening. You cannot Heighten a Spell higher than the highest level Spell Slot you can cast. You may also combine using a higher level Spell Slot and spending Spell Points.
        <blockquote>
            A 6th level Sorcerer casts a 1st level Spell. He chooses to Heighten it to 3rd level by using a 2nd level Spell Slot and spending 2 Spell Points.
        </blockquote>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 3, 'Divine' => 5, 'Primal' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Hold Spell';
        $feat->trigger     = 'You start to cast a spell';
        $feat->action_type = 'Action';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You gain 2 Spell Point</li>
    <li>
        Spend 2 Spell Point and an additional Casting Action to cast a spell that you then hold for casting later. A held spell can be cast as an Action. You can hold a spell for up to 3 rounds. At the end of 3 rounds, you may cast the spell by spending an Action, or spend 2 Spell Points to hold the spell for another 3 rounds. You may hold no more than 1 spell at a time.
        <blockquote>
            A 5th level Wizard casts Fireball and spends 2 Spell Points and an additional Casting Action to hold it. On the next turn, he uses an Action to cast the Fireball and uses their 2 remaining Actions to cast another spell.
        </blockquote>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 3, 'Divine' => 5, 'Primal' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Improved Hold Spell';
        $feat->trigger     = 'You start to cast a spell';
        $feat->action_type = 'Action';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You gain 2 Spell Points</li>
    <li>You may now hold a spell for an additional 3 rounds</li>
    <li>You may now hold an additional spell</li>
    <li>You may take this feat up to 2 times.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 6, 'Divine' => 7, 'Primal' => 7]);

        $feat              = new Feat;
        $feat->name        = 'Lingering Spell';
        $feat->trigger     = 'You start to cast a spell that has an Instantaneous duration and deals Acid, Cold, Electricity, Fire, or Sonic damage';
        $feat->action_type = 'Free';
        $feat->description = '<ul>
    <li>You gain 2 Spell Point</li>
    <li>This metamagic can be applied to any spell with an Instantaneous Duration and deals Acid, Cold, Electricity, Fire, or Sonic damage. After the spell is cast, lingering tendrils of energy persist, dealing 1D6 points of damage of the appropriate type at the beginning of your next turn to all creatures initially damaged by the spell. The spell is considered to be in effect during this time and can be dispelled normally.</li>
    <li>A Lingering Spell requires 1 Spell Point to be applied to a spell. You may spend additional Spell Points. For each 2 additional Spell Points spent, the duration lasts an additional 1 round.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 5, 'Divine' => 6, 'Primal' => 7]);

        $feat              = new Feat;
        $feat->name        = 'Maximize Spell';
        $feat->trigger     = 'You start to cast a spell';
        $feat->action_type = 'Free';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 5 Spell Points. All variables, numeric effects of a spell are maximized.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 7, 'Divine' => 8, 'Primal' => 8]);

        $feat              = new Feat;
        $feat->name        = 'Range Spell';
        $feat->trigger     = 'You start to cast a spell that has a range greater than Touch';
        $feat->action_type = 'Free';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 2 Spell Points. Triple the range of the casting spell.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 3, 'Divine' => 3, 'Primal' => 3]);

        $feat              = new Feat;
        $feat->name        = 'Reach Spell';
        $feat->action_type = 'Free';
        $feat->trigger     = 'You start to cast a spell that has a range of Touch. The spell must have a maximum of 2 spellcasting Actions.';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points</li>
    <li>Spend 2 Spell Points to modify its range to 30 feet. If the touch spell normally requires an attack roll or a touch attack roll, it now requires a Ranged Attack roll or a Ranged Touch attack roll, as appropriate.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 2, 'Divine' => 3, 'Primal' => 3]);

        $feat              = new Feat;
        $feat->name        = 'Repeat Spell';
        $feat->trigger     = 'You start to cast a spell that has a duration of Instantaneous and a range greater than Touch.';
        $feat->action_type = 'Action';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</>
    <li>Spend 8 Spell Points. Cast a spell that has a duration of Instantaneous. That spell is automatically cast again at the beginning of your next round. No matter where you are, the secondary spell originates from the same location and affects the same area as the primary spell. If the repeated spell designates a target, the secondary spell retargets the same target if the target is within 30 feet of its original position, otherwise the secondary spell fails.</>
</ul>
<p>You cannot repeat a spell with a range of Touch.</p>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 6, 'Divine' => 7, 'Primal' => 8]);

        $feat              = new Feat;
        $feat->name        = 'Silent Spell';
        $feat->trigger     = 'You start to cast a spell that has a Verbal Component';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 2 Spell Points while casting the spell. Observers cannot detect that you are casting a spell based on Hearing. The spell still requires the Action for the Verbal Component.</li>
    <li>If you spend 12 Spell Points instead, the casting of the spell no longer requires a Verbal Casting Action to cast the spell.</li>
</ul>';
        $feat->action_type = 'Free';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 2, 'Divine' => 5, 'Primal' => 6]);

        $feat              = new Feat;
        $feat->name        = 'Spell Fusion';
        $feat->trigger     = 'You start to cast a spell';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points</li>
    <li>Spend 20 Spell Points and an Action. You may cast 2 spells while only using the Casting Actions of the spell that requires the most Actions. Both spells take effect in the order that you choose, as if you had cast them one after the other. If both spells require Concentration, then you may only Concentrate on 1 of them unless you have the ability to Concentrate on multiple spells at the same time. You must provide all Material Components, Secondary Casters, and Ability Damage as normal.</li>
</ul>';
        $feat->action_type = 'Action';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 12]);

        $feat              = new Feat;
        $feat->name        = 'Split Ray';
        $feat->trigger     = 'You cast a spell with the Ray trait.';
        $feat->action_type = 'Free';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 2 Spell Points. You can split a spell that has the Ray trait that targets a single Target and instead target 2 Targets. Each target takes half of the damage (round down). If desired, you can have both rays attack the same target.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 3]);

        $feat              = new Feat;
        $feat->name        = 'Still Spell';
        $feat->trigger     = 'You start to cast a spell that has a Somatic Component';
        $feat->action_type = 'Free';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 1 Spell Point while casting the spell. Observers cannot detect that you are casting a spell based on Sight. The spell still requires the Action for the Somatic Component.</li>
    <li>If you spend 15 Spell Points instead, the casting of the spell no longer requires a Somatic Casting Action to cast the spell.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 3, 'Divine' => 5, 'Primal' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Reaction Spell';
        $feat->action_type = 'Reaction';
        $feat->trigger     = 'You have enough Reactions to cast a spell as a Reaction';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points</li>
    <li>Spend 6 Spell Points and you may cast a spell as a Reaction. You must use the same number of Reactions to cast the spell as the number of Casting Actions if you were to cast it normally.</li>
</ul>
<p>You do not need this feat to Counterspell a spell.</p>
<blockquote>
    Ex. A red dragon breaths its Fire breath weapon at you. You cast the spell Control Flames (Heighten it to control magical flames) and spend 10 Spell Points to reduce the effects of the Fire damage.
</blockquote>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 5]);
        $feat->parent_feats()->save(app()->feats['Silent Spell']);
        $feat->parent_feats()->save(app()->feats['Still Spell']);

        $feat              = new Feat;
        $feat->name        = 'Quicken Spell';
        $feat->action_type = 'Free';
        $feat->trigger     = 'You are casting a spell that has Somatic and Verbal Casting.';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 10 Spell Points and you may remove the Somatic Casting Action or the Verbal Casting Action of a Spell. If this causes the spell to not require any Casting Actions, then it is considered an Immediate Action.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 9, 'Divine' => 12, 'Primal' => 12]);
        $feat->parent_feats()->save(app()->feats['Silent Spell']);
        $feat->parent_feats()->save(app()->feats['Still Spell']);

        $feat              = new Feat;
        $feat->name        = 'Twin Spell';
        $feat->action_type = 'Action';
        $feat->trigger     = 'You start to cast a spell.';
        $feat->description = "<ul>
    <li>You gain 2 Spell Points.</li>
    <li>Spend 10 Spell Points. The spell takes effect twice in the same area or on the same target simultaneously. Any variable or decisions you would make about the spell are applied to both spells, with affected creatures receiving all the effects of each spell individually. A spell whose effects wouldn't stack if it was cast twice under normal circumstances will create redundant effects if successfully twinned.</li>
</ul>
<p>Counterspelling a twinned spell counters only one instance of the spell.</p>";
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 9, 'Divine' => 12, 'Primal' => 12]);

        $feat              = new Feat;
        $feat->name        = 'Widen Spell';
        $feat->action_type = 'Free';
        $feat->trigger     = 'You start to cast a spell that has an area of a burst, cone, or line, and that does not have a duration. The spell must have a maximum of 2 spellcasting actions.';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points</li>
    <lis>Spend 4 Spell Points to increase the area of that spell. You add 15 feet to the radius of a burst that normally has a radius of at least 10 feet. You add 15 feet to the length of a cone or line that is normally 15 feet long or smaller, and add 10 feet to the length of a larger cone or line.</lis>
</ul>';
        $helper->addTypesToFeat($feat, ['Metamagic', 'Spell Pool', 'Arcane' => 5, 'Divine' => 7, 'Primal' => 7]);

        $feat              = new Feat;
        $feat->name        = 'Arcane Multiclasser';
        $feat->requirement = 'You must be able to cast Arcane spells and have at least 4 levels in that class';
        $feat->description = '<p>You gain Arcane Spell Slots as if your Arcane Class level is higher than it is.</p>
<p>Pick one of your classes that has Arcane Spell Slots. You have Spell Slots as if your Class Level of the chosen class is 2 levels higher, or your Character Level -2 (whichever is lower, although no lower than your Arcane class level).</p>
<blockquote>
    For example: a 4th level Wizard, 3rd level Fighter who takes this feat will have Arcane Spell Slots as if he was a 5th level Wizard (4 + 3 = 7. then -2 = 5).<br>
    A 1st level Wizard, 5th level Fighter would have Spell Slots as if he was a 3rd level Wizard.<br>
    A 5th level Wizard, 2nd level Fighter would have Spell Slots as if he was a 5th level Wizard.
</blockquote>
<p>You may take this feat multiple times. Each time, increase the chosen class by an additional +2, or your Character Level -2 (whichever is lower, although no lower than your Arcane class level).</p>';
        $helper->addTypesToFeat($feat, ['Arcane' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Divine Multiclasser';
        $feat->requirement = 'You must be able to cast Divine spells and have at least 4 levels in that class';
        $feat->description = '<p>You gain Divine Spell Slots as if your Divine Class level is higher than it is.</p>
<p>Pick one of your classes that has Divine Spell Slots. You have Spell Slots as if your Class Level of the chosen class is 2 levels higher, or your Character Level -2 (whichever is lower, although no lower than your Divine class level).</p>
<blockquote>
    For example: a 4th level Priest of Tempus, 3rd level fighter who takes this feat will have Divine Spell Slots as if he was a 6th level Priest of Tempus.<br>
    A 1st level Priest of Tempus, 5th level Fighter would have Spell Slots as if he was a 3rd level Priest of Tempus.<br>
    A 5th level Priest of Tempus, 1st level Fighter would have Spell Slots as if he was a 5th level Priest of Tempus.
</blockquote>
<p>You may take this feat multiple times. Each time, increase the chosen class by an additional +2, or your Character Level -2 (whichever is lower, although no lower than your Arcane class level).</p>';
        $helper->addTypesToFeat($feat, ['Divine' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Primal Multiclasser';
        $feat->requirement = 'You must be able to cast Primal spells and have at least 4 levels in that class';
        $feat->description = '<p>You gain Primal Spell Slots as if your Primal Class level is higher than it is.</p>
<p>Pick one of your classes that has Primal Spell Slots. You have Spell Slots as if your Class Level of the chosen class is 2 levels higher, or your Character Level -2 (whichever is lower, although no lower than your Primal class level).</p>
<blockquote>
    For example: a 4th level Druid, 3rd level fighter who takes this feat will have Primal Spell Slots as if he was a 6th level Druid.<br>
    A 1st level Druid, 5th level Fighter would have Spell Slots as if he was a 3rd level Druid.<br>
    A 5th level Druid, 1st level Fighter would have Spell Slots as if he was a 5th level Druid.
</blockquote>
<p>You may take this feat multiple times. Each time, increase the chosen class by an additional +2, or your Character Level -2 (whichever is lower, although no lower than your Arcane class level).</p>';
        $helper->addTypesToFeat($feat, ['Primal' => 5]);

        $feat                    = new Feat;
        $feat->name              = 'Inked';
        $feat->short_description = 'You really enjoy the look and feeling of having tattoos';
        $feat->description       = '<p>You gain the following benefits.</p>
<ul>
    <li>Increase the number of magical items that you can Attune to by +3, all of which must be Tattoos.</li>
    <li>You may either have 1 additional Large tattoo, 2 additional Medium tattoos, or 4 additional Small tattoos (or 1 Medium and 2 Small).</li>
</ul>
<p>You may take this feat multiple times.</p>';
        $helper->addTypesToFeat($feat, ['Tattoo', 'Attunement', 'Generic' => 7]);
        $feat->attributes()->save(app()->attributes['CON'], ['dc' => 13]);
    }
}
