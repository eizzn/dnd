<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillCraftingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill              = new Skill;
        $skill->name        = 'Crafting';
        $skill->description = '<p>You can use this skill to create and repair items.</p>
<h3>Crafting Progress per Day</h3>
<table>
    <thead>
        <tr>
            <th>Your Level</th>
            <th>2 - 7</th>
            <th>8 - 12</th>
            <th>14 - 17</th>
            <th>18+</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1 sp</td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
        </tr>
        <tr>
            <td>2</td>
            <td>2 sp</td>
            <td> - </td>
            <td> - </td>
            <td> - </td>
        </tr>
        <tr>
            <td>3</td>
            <td>4 sp</td>
            <td>4 sp</td>
            <td> - </td>
            <td> - </td>
        </tr>
        <tr>
            <td>4</td>
            <td>5 sp</td>
            <td>6 sp</td>
            <td> - </td>
            <td> - </td>
        </tr>
        <tr>
            <td>5</td>
            <td>9 sp</td>
            <td>10 sp</td>
            <td> - </td>
            <td> - </td>
        </tr>
        <tr>
            <td>6</td>
            <td>12 sp</td>
            <td>14 sp</td>
            <td> - </td>
            <td> - </td>
        </tr>
        <tr>
            <td>7</td>
            <td>16 sp</td>
            <td>20 sp</td>
            <td>20 sp</td>
            <td> - </td>
        </tr>
        <tr>
            <td>8</td>
            <td>20 sp</td>
            <td>28 sp</td>
            <td>30 sp</td>
            <td> - </td>
        </tr>
        <tr>
            <td>9</td>
            <td>25 sp</td>
            <td>36 sp</td>
            <td>40 sp</td>
            <td> - </td>
        </tr>
        <tr>
            <td>10</td>
            <td>30 sp</td>
            <td>45 sp</td>
            <td>50 sp</td>
            <td> - </td>
        </tr>
        <tr>
            <td>11</td>
            <td>35 sp</td>
            <td>60 sp</td>
            <td>75 sp</td>
            <td> - </td>
        </tr>
        <tr>
            <td>12</td>
            <td>40 sp</td>
            <td>75 sp</td>
            <td>100 sp</td>
            <td> - </td>
        </tr>
        <tr>
            <td>13</td>
            <td>50 sp</td>
            <td>100 sp</td>
            <td>150 sp</td>
            <td> - </td>
        </tr>
        <tr>
            <td>14</td>
            <td>75 sp</td>
            <td>150 sp</td>
            <td>250 sp</td>
            <td> - </td>
        </tr>
        <tr>
            <td>15</td>
            <td>100 sp</td>
            <td>200 sp</td>
            <td>350 sp</td>
            <td>350 sp</td>
        </tr>
        <tr>
            <td>16</td>
            <td>125 sp</td>
            <td>250 sp</td>
            <td>475 sp</td>
            <td>500 sp</td>
        </tr>
        <tr>
            <td>17</td>
            <td>150 sp</td>
            <td>300 sp</td>
            <td>650 sp</td>
            <td>700 sp</td>
        </tr>
        <tr>
            <td>18</td>
            <td>200 sp</td>
            <td>450 sp</td>
            <td>900 sp</td>
            <td>1000 sp</td>
        </tr>
        <tr>
            <td>19</td>
            <td>300 sp</td>
            <td>600 sp</td>
            <td>1200 sp</td>
            <td>1500 sp</td>
        </tr>
        <tr>
            <td>20</td>
            <td>375 sp</td>
            <td>750 sp</td>
            <td>1500 sp</td>
            <td>2000 sp</td>
        </tr>
        <tr>
            <td>20 (crit.)</td>
            <td>450 sp</td>
            <td>900 sp</td>
            <td>1750 sp</td>
            <td>2500 sp</td>
        </tr>
    </tbody>
</table>
<table>
    <thead>
        <tr>
            <th colspan="2">Crafting Specialties</th>
        </tr>
        <tr>
            <th>Specialty</th>
            <th>Applicable Items</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Alchemy</td>
            <td>Alchemical items such as elixers</td>
        </tr>
        <tr>
            <td>Artistry</td>
            <td>Fine art, including jewerly</td>
        </tr>
        <tr>
            <td>Blacksmithing</td>
            <td>Durable metal goods, including metal armor</td>
        </tr>
        <tr>
            <td>Bookmaking</td>
            <td>Books and paper</td>
        </tr>
        <tr>
            <td>Glassmaking</td>
            <td>Glass, including glassware and windows</td>
        </tr>
        <tr>
            <td>Leatherworking</td>
            <td>Leather goods, including leather armor</td>
        </tr>
        <tr>
            <td>Pottery</td>
            <td>Ceramic goods</td>
        </tr>
        <tr>
            <td>Shipbuilding</td>
            <td>Ships and boats</td>
        </tr>
        <tr>
            <td>Stonemasonry</td>
            <td>Stone goods and structures</td>
        </tr>
        <tr>
            <td>Tailoring</td>
            <td>Clothing</td>
        </tr>
        <tr>
            <td>Weaving</td>
            <td>Textiles, baskets, and rugs</td>
        </tr>
        <tr>
            <td>Woodworking</td>
            <td>Wooden goods and structures</td>
        </tr>
    </tbody>
</table>';
        $skill->attribute_id   = 4;
        $skill->specified      = 1;
        $skill->untrained_uses = '<ul>
    <li>Repair (Activity)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Craft (Activity)</li>
    <li>Identify Alchemy (Activity)</li>
</ul>';
        $skill->armor_penalty = 1;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill                   = new SubSkill;
        $subskill->name             = 'Repair';
        $subskill->skill_id         = $skill->id;
        $subskill->requirements     = 'You must use a repair kit.';
        $subskill->description      = "<p>You attempt to fix a dented or broken item. The GM sets the DC, but typically it's more difficult to Repair a high-quality or magic item. You can't Repair a destroyed item.</p>";
        $subskill->success          = 'You remove 1 Dent from the item. In most cases, a dented item becomes fully restored and a broken item becomes only dented.';
        $subskill->critical_success = 'You fully restore the item.';
        $subskill->critical_failure = "You dent the item. If the item is magical, this Dent can't destroy it.";
        $subskill->save();
        $subskill->types()->save(app()->types['Manipulate']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Craft';
        $subskill->skill_id    = $skill->id;
        $subskill->description = "<p>You can make an item from raw materials. The GM determines the DC to Craft an item, which is based on its level, quality, and rarity, and might be affected by other circumstances. You need the Alchemist skill feat to create alchemical items, the Magical Crafting skill feat to create magic items, and the Snare Crafting feat to create snares.</p>
<p>To Craft an item, you must meet the following requirements.</p>
<ul>
    <li>The item is your level or lower. (An item that doesn't list a level is level 0)</li>
    <li>You have the proficiency rank appropriate to the item's quality.</li>
    <li>You have the formula for the item.</li>
    <li>You have an appropriate set of tools and, in many cases, a workshop. For example, you need access to a smithy to forge a metal shield.</li>
    <li>You must supply raw materials worth at least half the item's Price. You always expend at least that amount of raw materials when you Craft successfully. If you're in a settlement, you can usually spend currency to get an equal amount of raw materials you need, except in the case of rarer special materials.</li>
</ul>
<p>You need to spend a minimum number of downtime days to Craft your item to a basic state of completion. This number depends on your level and the level of the item. You need to spend 4 downtime days for an item of your level. Reduce the number of days by 1 for each level by which your level exceeds the item's level, to a minimum of 1 day. After spending this base number of days, you can either expend more materials to complete the item immediately or spend more days Crafting, completing the item more slowly but at lower cost. The success entry explains this mechanics further.</p>
<p>You can Craft items with the consumable trait in batches, making up to four of the same item simultaneously. This requires you to include the raw materials for all the items in the batch at the start, and you must complete the batch all at once.</p>
<p>After you expend the required amount of raw materials and base downtime, attempt a Crafting check. If you fail or critically fail, you can try to Craft the item again, but you have to start over.</p>";
        $subskill->success          = "Your attempt to create the item is successful. You can pay the remaining half of the item's Price to complete it immediately, or spend additional downtime days working on it. For each additional day you spend, reduce the value of the materials you need to expend to complete the item by an amount based on your level and proficiency rank. After any of these downtime days, you can complete the item by spending the remaining amount. If your downtime days are interrupted, you can return to finish the item later, continuing right where you left off.</p>";
        $subskill->critical_success = 'Per success, but each day you spend working reduces the remaining raw materials cost as though your level were 1 higher.';
        $subskill->failure          = 'You fail to complete the item. You can salvage the raw materials you supplied for their full value.';
        $subskill->critical_failure = 'You fail to complete the item. You ruin 10% of the raw materials you supplied, but can salvage the rest.';
        $subskill->trained_only     = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Downtime']);
        $subskill->types()->save(app()->types['Manipulate']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Identify Alchemy';
        $subskill->skill_id         = $skill->id;
        $subskill->requirements     = "You must use alchemist's tools.";
        $subskill->description      = "<p>You can identify the nature of an alchemical item with 10 minutes of testing using alchemist's tools. The DC of the check is 10 plus the level of the item. If your attempt is interrupted in any way, you must start over.</p>";
        $subskill->success          = 'You identify the item and the means of activating it.';
        $subskill->failure          = 'You fail to identify the item but can try again.';
        $subskill->critical_failure = "You misidentify the item as another item of the GM's choice.";
        $subskill->trained_only     = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Secret']);
    }
}
