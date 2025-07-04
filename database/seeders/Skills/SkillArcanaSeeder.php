<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillArcanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill              = new Skill;
        $skill->name        = 'Arcana';
        $skill->description = '<p>This skill measures how much you know about alchemy, arcane spells, and the most common magic items. Further, it determines how much information you have on theories about alchemy and arcane energies as well as lore about the creatures associated with them.</p>
<p>If you’re trained in Arcana, regardless of whether or not you’re an alchemist or a spellcaster, you’re versed in how to identify alchemical and magic items, even those you normally would not be able to use.</p>
<p>You can use Arcana in the following way, even if you are untrained in the skill.</p>
<h3>Identifying or Learning a Spell</h3>
<table>
    <thead>
        <tr>
            <th>Spell Level</th>
            <th>Price</th>
            <th>Typical DC</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1st or cantrip</td>
            <td>20 sp</td>
            <td>13</td>
        </tr>
        <tr>
            <td>2nd</td>
            <td>60 sp</td>
            <td>16</td>
        </tr>
        <tr>
            <td>3rd</td>
            <td>160 sp</td>
            <td>19</td>
        </tr>
        <tr>
            <td>4th</td>
            <td>360 sp</td>
            <td>22</td>
        </tr>
        <tr>
            <td>5th</td>
            <td>700 sp</td>
            <td>25</td>
        </tr>
        <tr>
            <td>6th</td>
            <td>1400 sp</td>
            <td>28</td>
        </tr>
        <tr>
            <td>7th</td>
            <td>3030 sp</td>
            <td>31</td>
        </tr>
        <tr>
            <td>8th</td>
            <td>6500 sp</td>
            <td>34</td>
        </tr>
        <tr>
            <td>9th</td>
            <td>15000 sp</td>
            <td>37</td>
        </tr>
        <tr>
            <td>10th</td>
            <td>70000 sp</td>
            <td>40</td>
        </tr>
    </tbody>
</table>';
        $skill->attribute_id   = 4;
        $skill->untrained_uses = '<ul>
    <li>Recall Knowledge (Action)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Borrow an Arcane Spell (Activity)</li>
    <li>Identify Magic (Activity)</li>
    <li>Learn an Arcane Spell (Activity)</li>
    <li>Read Magic (Activity)</li>
</ul>';
        $skill->armor_penalty = 0;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill                   = new SubSkill;
        $subskill->name             = 'Recall Knowledge';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->description      = 'You attempt an Arcana check to try to remember a bit of knowledge regarding arcane theories, magic traditions, or creatures of arcane significance. The GM determines the DCs for such checks.';
        $subskill->success          = 'You recall the knowledge.';
        $subskill->critical_failure = 'You recall incorrect information.';
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Secret']);

        $subskill               = new SubSkill;
        $subskill->name         = 'Borrow an Arcane Spell';
        $subskill->skill_id     = $skill->id;
        $subskill->description  = "If you're an arcane spellcaster who prepares spells, during your daily preparations, you can attempt to prepare a spell from someone else\'s spellbook. The GM sets the DC for the check.";
        $subskill->success      = 'You prepare the borrowed spell as part of your normal spell preparation.';
        $subskill->failure      = 'You fail to prepare the spell, but the spell slot remains available for you to prepare a different spell. You can\'t try to prepare this spell until the next time you prepare spells.';
        $subskill->trained_only = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Identify Magic';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = 'Once you discover that an item, location, or ongoing effect is magical, to attempt to identify the particular of its magic. If your attempt is interrupted, you must start over. The GM sets the DC for your check. Cursed or esoteric subjects usually have higher DCs or might even be impossible to identify using Arcana alone. Heightening a spell doesn\'t increase the DC.';
        $subskill->success          = 'For an item or location, you get a sense of what it does and learn any means of activating it. For an ongoing effect, you learn the effect\'s name and what it does. You can\'t try again in hopes of getting a critical success.';
        $subskill->critical_success = 'You learn all the attributes of the magic, including whether it is cursed.';
        $subskill->failure          = "You fail to identify the magic and can't try again for 1 day.";
        $subskill->critical_failure = "You misidentify the magic as something of the GM's choice.";
        $subskill->trained_only     = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Secret']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Learn an Arcane Spell';
        $subskill->skill_id    = $skill->id;
        $subskill->description = '<p>If you are an arcane spellcaster, you can gain access to a new arcane spell from someone who knows that spell or from magical writing like a spellbook or scroll.</p>
<p>To learn the spell, you must do the following,</p>
<ul>
    <li>Spend 1 hour per level of the spell, during which you must remain in conversation with the person who knows the spell or have the magical writing in your possession.</li>
    <li>Have an amount of magical materials with a value indicated in the Identifying or Learning a Spell.</li>
    <li>Attempt an Arcana check with a DC dtermined by the GM.</li>
</ul>';
        $subskill->success          = 'You expend the materials and learn the spell. If you have a spellbook, the spell is added to your spellbook; if you prepare spells from a list, it\'s added to your list; if you hav a spell repertoire, you can select it when you add or swap spells.';
        $subskill->critical_success = 'Per a success, but you expend only half the cost in materials.';
        $subskill->failure          = 'You fail to learn the spell but can try again after you gain a level. The materials aren\'t expended.';
        $subskill->critical_failure = 'Per a failure, plus you waste half the materials.';
        $subskill->trained_only     = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);

        $subskill                   = new SubSkill;
        $subskill->name             = 'Read Magic';
        $subskill->skill_id         = $skill->id;
        $subskill->description      = 'You can read and understand magic writing as long as it is in a language you can normally read. This usually takes about 1 minute per page of text, but it could take longer in the case of ancient or obscure writings, or in other situaltions at the GM\'s descretion. To read and understand the nuances of particularly archaic, esoteric, or obscure texts, the GM may require you to attempt an Arcana check to see if you understand the true meaning of the magic writing. The GM might have you attempt one check for the entire text or one check for each section of a larger text.';
        $subskill->success          = 'You understand the true meaning of the text.';
        $subskill->critical_failure = 'You misread the text.';
        $subskill->trained_only     = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);
        $subskill->types()->save(app()->types['Secret']);
    }
}
