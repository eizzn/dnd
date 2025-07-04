<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillPerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill                 = new Skill;
        $skill->name           = 'Performance';
        $skill->description    = '<p>With this skill you can perform in front of crowds.</p>';
        $skill->attribute_id   = 6;
        $skill->untrained_uses = '<ul>
    <li>Perform (Action)</li>
</ul>';
        $skill->trained_uses = '<ul>
    <li>Stage a Performance (Activity)</li>
</ul>';
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill                   = new SubSkill;
        $subskill->name             = 'Perform';
        $subskill->skill_id         = $skill->id;
        $subskill->action_type      = 'Action';
        $subskill->description      = '<p>When making a brief performance—one song, a quick dance, or a few jokes—you use the Perform action. This action is most useful when you want to prove your capability or impress someone quickly. Performing rarely has an impact on its own (unless you’re in a contest), but doing so might influence the DCs of subsequent Diplomacy checks against the observers if the GM sees fit.</p>';
        $subskill->success          = 'You prove yourself, and observers appreciate the quality of your performance.';
        $subskill->critical_success = 'Your performance impresses the observers, and they’re likely to share stories of your ability.';
        $subskill->failure          = 'Your performance falls flat.';
        $subskill->critical_failure = 'You demonstrate only incompetence.';
        $subskill->save();
        $subskill->types()->save(app()->types['Concentrate']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Stage a Performance';
        $subskill->skill_id    = $skill->id;
        $subskill->description = "<p>During downtime, you perform for an audience to make money. The GM determines the levels of the audiences available and gives you a brief description of the most discerning (high-level) audience you could perform for. You can go looking for lower-level audiences, with the GM determining whether you find any. Sometimes you can attempt to find better audiences, though this requires spending downtime to Gather Information or researching and socializing. A typical audience of commoners on the street is a 0-level audience, but a group of artisans with more refined tastes might be a 2nd- or 3rd-level audience, and merchants, nobility, and royalty are increasingly higher level. The level of your audience is the task level for your performance.</p>
<p>When you choose your audience, the GM secretly sets the DC of your Performance check. The amount of money you can earn depends on the task level and your proficiency rank, as listed on the Skill Income table.</p>
<p>You need to spend a minimum number of downtime days to prepare for your performance, get out word to increase demand, allow time for the audience to plan attending, and play your first show. The exact number of days depends on your level and the level of the task. You must spend 4 downtime days for a task of your level. Reduce the number of days by 1 for each level lower than you the task is, to a minimum of 1 day. Conversely, increase the number of days by 1 for each level higher than you the task is. After this base duration, you earn your initial amount of money, and you can continue performing over subsequent days to keep earning more. The success entry explains how this works. Note that if you want to earn money for performing for just 1 day, you need to pick an audience that requires you to spend only 1 day of preparation. Performing for a 0-level audience always requires 1 day.</p>
<p>After you spend the base downtime to get started, roll your Performance check to determine you earnings. If you do well, the GM might determine your earnings. If you do well, the GM might determine you can extend your performance, working more shows to bring in more money;  this does not require further checks. Eventually, however, your performance will end because you\'be exhausted your audiences. the GM might let you perform the same show for other audiences, reducing or eliminating the preparation time but lowering the task level.</p>
<p>Most performances can be staged for a couple of weeks, or longer if you rarely perform and do other things with the rest of your downtime. Sometimes, taking time off from performing a show can draw in new high-level audiences, though this usually means you have to spend some time preparing again since you're rusty.</p>'";
        $subskill->success          = 'Your performance is competent and moving. You’re rewarded with applause and whistles, plus the amount of currency listed Skill Income table for the task level and your Performance proficiency rank. You can spend further downtime days on this performance, earning the same amount each day, until you exhaust your audience’s interest.';
        $subskill->critical_success = 'Your performance inspires belly laughs, tears, or a change of heart among your audience. Per a success, but you earn money as though the task were 1 level higher. The GM might extend how long audiences stay interested.';
        $subskill->failure          = 'The audience is ambivalent or unimpressed by your performance. They respond with yawns and blank stares, and a few coins of pity. You earn the amount listed in the failure column of the Skill Income table. The GM will likely reduce how long you can keep audience interest.';
        $subskill->critical_failure = 'Your awful performance turns the audience against you. They boo, hiss, and throw fruit or worse as they hassle you to end your performance. You earn nothing and your reputation suffers, potentially making it difficult to find discerning and rewarding audiences.';
        $subskill->trained_only     = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Downtime']);
    }
}
