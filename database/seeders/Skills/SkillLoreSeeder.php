<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillLoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skill              = new Skill;
        $skill->name        = 'Lore';
        $skill->description = "<p>You have specialized information on a narrow topic. Lore is different from other skills in two ways.</p>
<p>First, the lore skill features many subcategories. You might have Military Lore, Sailing Lore, Vampire Lore, or any similar subcategory of skill. Each subcategory counts as its own skill, so applying a skill increase to Planar Lore wouldn't increase your modifier with Sailing Lore. You gain a subcategory of the Lore skill from your background. The GM determines what other subcategories she’ll allow as Lore skills, though these categories are always less broad than any of the other skills that allow you to Recall Knowledge, and they should never be able to fully take the place of another skill’s ability to Recall Knowledge. For instance, you couldn’t choose Magic Lore in an attempt to recall the same breadth of knowledge covered by Arcana or Adventuring Lore in an attempt to gain all the information an adventurer would need.</p>
<p>If you have multiple subcategories of Lore that could apply to a check, or that would overlap with another skill in the circumstances, you can choose to use the skill with the better skill modifier or that you would prefer to use. If there's any doubt whether a Lore skill applies to a specific topic or use, the GM decides whether it can be used or not.</p>";
        $skill->attribute_id   = 4;
        $skill->specified      = 1;
        $skill->untrained_uses = '<ul>
    <li>Recall Knowledge (Action)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Practice a Trade (Activity)</li>
</ul>';
        $skill->armor_penalty = 0;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill              = new SubSkill;
        $subskill->name        = 'Recall Knowledge (History)';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = '<p>You can use Lore to remember a bit of knowledge related to your type of Lore. The GM determines the DCs for such checks and whether your Lore applies to the topic.</p>
<p>Common Lore Subcategories</p>
<ul>
    <li>Academia</li>
    <li>Accounting</li>
    <li>Architecture</li>
    <li>Art</li>
    <li>Circus</li>
    <li>Engineering</li>
    <li>Farming</li>
    <li>Fortune-Telling</li>
    <li>Games</li>
    <li>Genealogy</li>
    <li>Gladiatorial</li>
    <li>Guild</li>
    <li>Heraldry</li>
    <li>Herbalism</li>
    <li>Hunting</li>
    <li>Labor</li>
    <li>Legal</li>
    <li>Library</li>
    <li>Lore about a specific deity</li>
    <li>Lore about a specific creature or narrow category of creatures (Demon Lore, Owlbear Lore, Vampire Lore, etc.)</li>
    <li>Lore of a specific plane other than the Material Plane or the Plane in which the game is set if not the Material Plane (Abyss Lore, Astral Lore, etc.)</li>
    <li>Lore about a specific terrain (Mountain Lore, River Lore, etc.)</li>
    <li>Lore of a type of food or drink (Alcohol Lore, Baking Lore, Butchering Lore, Cooking Lore, Tea Lore, etc.)</li>
    <li>Mercantile</li>
    <li>Midwifery</li>
    <li>Milling</li>
    <li>Mining</li>
    <li>Sailing</li>
    <li>Scouting</li>
    <li>Scribing</li>
    <li>Stabling</li>
    <li>Tanning</li>
    <li>Theater</li>
    <li>Underdark</li>
    <li>Warfare</li>
</ul>';
        $subskill->success          = 'You recall the knowledge.';
        $subskill->critical_failure = 'You recall erroneous knowledge.';
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Secret']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Practice a Trade';
        $subskill->skill_id    = $skill->id;
        $subskill->description = '<p>You apply the practical benefits of your Lore
specialty to earn money during periods of downtime. Practicing a Trade is most effective with Lore specialties such as business, law, or sailing, where there\'s demand for workers. The GM might increase the DC if you\'re attempting to use an obscure Lore skill to practice a trade.</p>
<p>The GM assigns a task level representing the difficulty of the most lucrative job available. You can go looking for lower-level tasks, witht he GM determining whether you find any. Sometimes you can attempt to find better work than the initial offerings, though this requires spending downtime to Gather Information or researching and socializing.</p>
<p>You need to spend a minimum number of downtime days to locate and secure the job, prepare to practice your trade, and get started on the task. This number depends on your level and the level of the taks. You must spend 4 downtime days for a task of your level. Reduce the number of days by 1 for each level lower than you the task is, to a minimum of 1 day. Conversely, increase the number of days by 1 for each level higher than you the task is. After this base downtime, you earn your initial amount of money, and you can continue at the task to keep earning more. The success entry explains how this works. Note that if you want to earn money for working just 1 day, you need to pick a task that requires only 1 day of preparation. A 0-level task always requires 1 day.</p>
<p>After you spend the base downtime to get started, roll your Lore check to determine your earnings. You continue to earn that amount each day for the duration of the job, without requiring further checks. The GM determines how long the job lasts, which is limited by how long the task will take to complete and other factors. Most tasks last a week or two, though some can take months or even years. If you stop in the middle of a task, normally you have to find a new task when you return, but the GM might decide that you can pick up where you left off (which usually happens only if the job is incomplete and the setup you did is still applicable).</p>
<table>
    <thead>
        <tr>
            <th>Task Level</th>
            <th>Failure</th>
            <th>Trained</th>
            <th>Expert</th>
            <th>Master</th>
            <th>Legendary</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0</td>
            <td>1 cp</td>
            <td>5 cp</td>
            <td>5 cp</td>
            <td>5 cp</td>
            <td>5 cp</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2 cp</td>
            <td>1 sp</td>
            <td>1 sp</td>
            <td>1 sp</td>
            <td>1 sp</td>
        </tr>
        <tr>
            <td>2</td>
            <td>4 cp</td>
            <td>2 sp</td>
            <td>2 sp</td>
            <td>2 sp</td>
            <td>2 sp</td>
        </tr>
        <tr>
            <td>3</td>
            <td>8 cp</td>
            <td>4 sp</td>
            <td>4 sp</td>
            <td>4 sp</td>
            <td>4 sp</td>
        </tr>
        <tr>
            <td>4</td>
            <td>1 sp</td>
            <td>5 sp</td>
            <td>6 sp</td>
            <td>6 sp</td>
            <td>6 sp</td>
        </tr>
        <tr>
            <td>5</td>
            <td>2 sp</td>
            <td>9 sp</td>
            <td>10 sp</td>
            <td>10 sp</td>
            <td>10 sp</td>
        </tr>
        <tr>
            <td>6</td>
            <td>2 sp</td>
            <td>12 sp</td>
            <td>14 sp</td>
            <td>14 sp</td>
            <td>14 sp</td>
        </tr>
        <tr>
            <td>7</td>
            <td>3 sp</td>
            <td>16 sp</td>
            <td>20 sp</td>
            <td>20 sp</td>
            <td>20 sp</td>
        </tr>
        <tr>
            <td>8</td>
            <td>4 sp</td>
            <td>20 sp</td>
            <td>28 sp</td>
            <td>30 sp</td>
            <td>30 sp</td>
        </tr>
        <tr>
            <td>9</td>
            <td>5 sp</td>
            <td>25 sp</td>
            <td>36 sp</td>
            <td>40 sp</td>
            <td>40 sp</td>
        </tr>
        <tr>
            <td>10</td>
            <td>6 sp</td>
            <td>30 sp</td>
            <td>45 sp</td>
            <td>50 sp</td>
            <td>50 sp</td>
        </tr>
        <tr>
            <td>11</td>
            <td>7 sp</td>
            <td>35 sp</td>
            <td>60 sp</td>
            <td>75 sp</td>
            <td>57 sp</td>
        </tr>
        <tr>
            <td>12</td>
            <td>8 sp</td>
            <td>40 sp</td>
            <td>75 sp</td>
            <td>100 sp</td>
            <td>100 sp</td>
        </tr>
        <tr>
            <td>13</td>
            <td>10 sp</td>
            <td>50 sp</td>
            <td>100 sp</td>
            <td>150 sp</td>
            <td>150 sp</td>
        </tr>
        <tr>
            <td>14</td>
            <td>15 sp</td>
            <td>75 sp</td>
            <td>150 sp</td>
            <td>250 sp</td>
            <td>250 sp</td>
        </tr>
        <tr>
            <td>15</td>
            <td>20 sp</td>
            <td>100 sp</td>
            <td>200 sp</td>
            <td>250 sp</td>
            <td>250 sp</td>
        </tr>
        <tr>
            <td>16</td>
            <td>25 sp</td>
            <td>125 sp</td>
            <td>250 sp</td>
            <td>475 sp</td>
            <td>500 sp</td>
        </tr>
        <tr>
            <td>17</td>
            <td>30 sp</td>
            <td>150 sp</td>
            <td>300 sp</td>
            <td>650 sp</td>
            <td>100 sp</td>
        </tr>
        <tr>
            <td>18</td>
            <td>40 sp</td>
            <td>200 sp</td>
            <td>450 sp</td>
            <td>900 sp</td>
            <td>1000 sp</td>
        </tr>
        <tr>
            <td>19</td>
            <td>60 sp</td>
            <td>300 sp</td>
            <td>600 sp</td>
            <td>1200 sp</td>
            <td>1500 sp</td>
        </tr>
        <tr>
            <td>20</td>
            <td>75 sp</td>
            <td>375 sp</td>
            <td>750 sp</td>
            <td>1500 sp</td>
            <td>2000 sp</td>
        </tr>
        <tr>
            <td>20 (crit)</td>
            <td>90 sp</td>
            <td>450 sp</td>
            <td>900 sp</td>
            <td>1750 sp</td>
            <td>2500 sp</td>
        </tr>
    </tbody>
</table>';
        $subskill->success          = 'You do competent work and gain the amount of currency listed on the Skill Income Table for the task level and your proficiency rank. You can spend further downtime days working at this job, earning the same amount each day, up to the task\'s completion.';
        $subskill->critical_success = 'You excel at the task. Per a success, but you earn money as though the task were 1 level higher. The GM might extend how long you can stay employed at the task.';
        $subskill->failure          = 'You do shoddy work and get paid the bar minimum for your time. You earn the amount listed in the failure column of the Skill Income table. The GM will likely reduce how long you can continue at the task.';
        $subskill->critical_failure = 'You earn nothing for your work and are fired immediately. Your reputation suffers, potentially making it difficult for you to find rewarding jobs in that community in the future.';
        $subskill->trained_only     = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Downtime']);
    }
}
