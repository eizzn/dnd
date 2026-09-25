<?php

namespace Database\Seeders\Skills;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Database\Seeder;

class SkillStealthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill                 = new Skill;
        $skill->name           = 'Stealth';
        $skill->description    = '<p>You are skilled at avoiding detection, allowing you to slip past foes, hide, or conceal an item on your person.</p>';
        $skill->attribute_id   = 2;
        $skill->untrained_uses = '<ul>
    <li>Conceal an Object (Action)</li>
    <li>Hide (Action)</li>
    <li>Sneak (Action)</li>
</ul>';
        $skill->armor_penalty = 1;
        $skill->save();
        $skills               = app()->skills;
        $skills[$skill->name] = $skill;
        app()->skills         = $skills;

        $subskill              = new SubSkill;
        $subskill->name        = 'Conceal an Object';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = '<p>Hiding a small object on your person (such as a Secret weapon of light Bulk) requires a Stealth check. When you try to sneak a hidden object past someone who might notice it, the GM rolls your Stealth check and compares it to this passive observer’s Perception DC. If the creature is specifically searching you for an item, they can attempt a Perception check against your Stealth DC (finding the object on success).</p>
<p>You can also conceal an object somewhere other than your person, such as among undergrowth or in a secret compartment within a piece of furniture. In this case, characters Seeking in an area compare their Perception check results to your Steal DC to determine whether they find the object.</p>';
        $subskill->success = 'The object goes undetected.';
        $subskill->failure = 'The searcher finds the object.';
        $subskill->save();
        $subskill->types()->save(app()->types['Manipulate']);
        $subskill->types()->save(app()->types['Secret']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Hide';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = '<p>You huddle behind cover or deeper into concealment to become merely sensed, rather than seen (see page 302). The GM rolls your Stealth check in secret and compares the result to the Perception DC of each creature that could potentially see you but that you have cover against or are concealed from.</p>
<p>If you successfully became sensed to a creature, but then cease to have cover against that creature or be concealed from it, it again sees you. Such creatures see you if you do anything other than Hide or Sneak, though the GM might allow you to perform a particularly unobtrusive action, activity, free action, or reaction without being noticed, possibly requiring another Stealth check.</p>';
        $subskill->success = "If the creature could see you, you're now sensed by the creature instead of seen. If you were unseen by the creature, you remain unseen.";
        $subskill->save();
        $subskill->types()->save(app()->types['Secret']);

        $subskill              = new SubSkill;
        $subskill->name        = 'Sneak';
        $subskill->skill_id    = $skill->id;
        $subskill->action_type = 'Action';
        $subskill->description = "<p>You can attempt to move to another place while Secret becoming or staying unseen. Stride up to half your Speed. (You can use Sneak while Burrowing, Climbing, Flying, or Swimming instead of Striding if you have the corresponding movement type.)</p>
<p>You automatically become seen if you don't have cover or aren't concealed from them at any time during your movement, or as soon as you do anything other than Hide or Sneak. The Manipulate Secret</p>
<p>You automatically become seen if you don't have cover or aren't concealed from them at any time during your movement, or as soon as you do anything other than Hide or Sneak. The GM might allow you to perform a particularly unobtrusive action, activity, free action, or reaction without being noticed, possibly requiring another Stealth check. If you speak or make a deliberate loud noise, you become sensed. If you do anything else, you become seen just before you act. For instance, if you attack a creature you're unseen by, that creature is not flat-footed against that attack.</p>
<p>If you're unseen by a creature, and it's impossible for that creature to see you (such as when you’re invisible, the observer is blinded, or you’re in darkness and the creature can’t see in darkness), you automatically treat your 2D10 roll as a natural 20 against that creature on your checks to Sneak. You also continue to be unseen if you lose cover against or are no longer concealed from such a creature. Acting to do something other than Hide or Sneak makes you sensed instead of seen. If a creature senses you via Seek, you must Sneak to become unseen by it again.</p>'";
        $subskill->success      = 'You become unseen by the creature (or remain so) during your movement and remain unseen by the creature at the end of it.';
        $subskill->failure      = "You're seen by the creature throughout your movement and remain so. If you're invisible and were sensed by the creature, you're still sensed throughout your movement and remain sensed, but you aren't seen.";
        $subskill->trained_only = 1;
        $subskill->save();
        $subskill->types()->save(app()->types['Move']);
        $subskill->types()->save(app()->types['Secret']);
    }
}
