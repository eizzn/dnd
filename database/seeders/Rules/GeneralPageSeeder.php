<?php

namespace Database\Seeders\Rules;

use App\Models\Page;
use App\Models\Rule;
use Illuminate\Database\Seeder;

class GeneralPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page              = new Page;
        $page->name        = 'General';
        $page->order       = 50;
        $page->description = '';
        $page->save();

        $rule              = new Rule;
        $rule->key         = 'conditions';
        $rule->name        = 'Conditions';
        $rule->description = "<p>Over the course of adventuring, characters (and sometimes their belongings) are affected by abilities and effects that apply conditions. Conditions change your state of being in some way. You might be gripped with fear or made faster by a spell or magic item. One condition represents what happens when a creature successfully drains your blood or life essence, while others represent creatures' attitudes toward you and how they interact with you.</p>
<p>Conditions are persistent; when you're affected by a condition, its effects last until the condition's stated duration ends, the condition is removed, or terms dictated in the condition itself cause it to end.</p>
<h3>Condition Values</h3>
<p>Some conditions have a numerical value, called a condition value, indicated by a numeral following the condition. This value might enumerate a bonus or penalty the condition gives you. These values can often be reduced by spells, skills, or simply waiting. If such a value is ever reduced to 0, the condition ends.</p>
<p>If you're affected by a condition with a value multiple times, you apply only the higher value, although you might have to track both durations if one has a lower value but lasts longer. For example, if you had a slowed 2 condition that lasts 2 rounds and a slowed 1 condition that lasts for 1 minute, after 2 rounds you'd change from being slowed 2 to slowed 1 for the last 8 rounds of its duration.</p>
<h3>Redundant Conditions</h3>
<p>You can have a given condition only once at a time (conditions with different values are considered different conditions for this purpose; see Condition Values). If an effect would impose a condition you're already being affected by, you now have that condition for the longer of the two durations. The shorter-duration condition effectively ends, though other conditions caused by the original, shorter-duration effect might continue.</p>
<p>For example, let's say you have been hit by a monster that drains your vitality; that wound causes you to be enfeebled 2 and flat-footed until the end of the monster's next turn. Before the end of that creature's next turn, a trap poisons you, making you enfeebled 2 for 1 minute. In this case, the enfeebled 2 that lasts for 1 minute replaces the enfeebled 2 from the monster. You would continue to be enfeebled 2 for this longer duration, but you would still remain flat-footed only until the end of the monster's next turn.</p>
<p>Any ability that removes a condition removes it entirely, no matter what its condition value is or how many times you've been affected by it. In the example above, a spell that removes the enfeebled condition from you would remove it entirely—the spell wouldn't need to remove it twice.</p>
<h3>Overriding Conditions</h3>
<p>Some conditions override others, as described in the condition. All effects of the overridden condition are suppressed until the overriding condition ends. The overridden condition's duration continues to elapse, and it might expire while suppressed.</p>
<h3>Counteracting Conditions</h3>
<p>Some effects counteract conditions, afflictions, and other effects. When attempting to counteract an effect, compare the counteract level of the effect with the counteract level of the ability you are using. A spell's counteract level is equal to its spell level. If your ability has a higher counteract level than that of the effect to be counteracted, you automatically succeed. If your ability's counteract level is the same as the effect's counteract level or lower, you must succeed at a check using the relevant skill or ability against the DC of the target effect. You take a cumulative –5 penalty to this check for every level by which your ability's counteract level is lower than the target's. If your ability is 4 or more counteract levels lower than that of the effect you are trying to counteract, your attempt automatically fails.</p>
<p>On a successful counteract check, the condition or effect immediately ends.</p>
<table>
    <thead>
        <tr>
            <th>Ability or Effect Level</th>
            <th>Counteract Level</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>2</td>
            <td>1</td>
        </tr>
        <tr>
            <td>3</td>
            <td>2</td>
        </tr>
        <tr>
            <td>4</td>
            <td>2</td>
        </tr>
        <tr>
            <td>5</td>
            <td>3</td>
        </tr>
        <tr>
            <td>6</td>
            <td>3</td>
        </tr>
        <tr>
            <td>7</td>
            <td>4</td>
        </tr>
        <tr>
            <td>8</td>
            <td>4</td>
        </tr>
        <tr>
            <td>9</td>
            <td>5</td>
        </tr>
        <tr>
            <td>10</td>
            <td>5</td>
        </tr>
        <tr>
            <td>11</td>
            <td>6</td>
        </tr>
        <tr>
            <td>12</td>
            <td>6</td>
        </tr>
        <tr>
            <td>13</td>
            <td>7</td>
        </tr>
        <tr>
            <td>14</td>
            <td>7</td>
        </tr>
        <tr>
            <td>15</td>
            <td>8</td>
        </tr>
        <tr>
            <td>16</td>
            <td>8</td>
        </tr>
        <tr>
            <td>17</td>
            <td>9</td>
        </tr>
        <tr>
            <td>18</td>
            <td>9</td>
        </tr>
        <tr>
            <td>19</td>
            <td>10+</td>
        </tr>
        <tr>
            <td>20</td>
            <td>10+</td>
        </tr>
    </tbody>
</table>
<h3>Bolstered</h3>
<p>Some spells and abilities can't affect a creature more than once in a day. If an effect says a creature becomes bolstered, repeated applications of that effect don't do anything to the creature. For example, the blindness spell says, “The target is bolstered against all castings of blindness.” Casting blindness on that creature again would have no effect.</p>
<p>Unless otherwise stated, a creature remains bolstered for 24 hours against only that specific ability used by that specific creature. Blindness has an exception, bolstering the target against the spell no matter who casts it. Being bolstered doesn't prevent ongoing effects of the source of the condition. For instance, if an ability makes you frightened and bolsters you against it, you don't cease to be frightened due to becoming bolstered—you just don't become frightened again if the same creature targets you with that ability later that day.</p>
<h3>Altering Actions</h3>
<p>Conditions can change the number of actions you can spend on your turn, or whether you can use actions, reactions, or free actions at all. The slow condition, for example, causes you to lose actions, while quick causes you to gain actions.</p>
<p>The most restrictive form of this is when a condition states that you can't act: this means you can't spend actions, activities, reactions, or free actions. When you can't act, you don't regain your actions and reaction on your turn.</p>
<h3>Speed Reduction</h3>
<p>Some conditions reduce your Speed in one or more movement types. These can't reduce your Speed below 5 feet unless stated otherwise. Speed reductions to the same movement type from different sources (such as from armor and the hampered condition) are cumulative.</p>";
        $rule->order = 20;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'afflictions';
        $rule->name        = 'Afflictions';
        $rule->description = "<p>Diseases, gases, poisons, and venoms are types of afflictions, as are some alchemical items, curses, and other effects. An affliction can infect a creature for a long time, progressing through different and often increasingly debilitating stages. The level of an affliction is the level of the monster or item causing the affliction, or, in the case of a spell, is listed in the affliction entry in the spell's effect.</p>
<p>Afflictions appear in the following format.</p>
<h3>Saving Throw</h3>
<p>When you're first exposed to the affliction, you must attempt a saving throw against it. This first attempt to stave off the affliction is called the initial save. An affliction usually requires a CON Save, but the exact save and its DC are listed after the name and type of affliction. Spells that can poison you typically use the caster's spell DC.</p>
<p>On a successful or a critically successful saving throw, you are unaffected by that exposure to the affliction. You do not need to attempt further saving throws against it unless you are exposed to the affliction again.</p>
<p>If you fail the initial saving throw, after its onset period (if applicable), you go to stage 1 of the affliction and are subjected to the listed effect. On a critical failure, after its onset period (if applicable) you go to stage 2 of the affliction and take that effect instead. See Stages below.</p>
<h3>Onset</h3>
<p>Some afflictions have onset times. For these afflictions, once you fail your initial save, you don't gain the effects for the first stage of the affliction until the onset time elapses. If this entry is absent, you gain the effects for the first stage immediately upon reaching that stage.</p>
<h3>Maximum Duration</h3>
<p>If an affliction lasts only a limited amount of time, it lists a maximum duration. Otherwise, the affliction lasts until you succeed at enough saves to recover.</p>
<h3>Stages</h3>
<p>An affliction typically has multiple stages, each of which lists an effect followed by an interval in parentheses. When you reach a given stage of an affliction, you are subjected to the effects listed for that stage.</p>
<p>At the end of a stage's interval, you must attempt a new saving throw. On a success, you reduce the stage by 1 and take the effects of that stage again. On a critical success, you reduce the stage by 2. If the affliction's stage is ever reduced to lower than stage 1, the affliction ends and you don't need to attempt further saves unless you're exposed to the affliction again.</p>
<p>On a failure, the stage increases by 1, and on a critical failure its stage increases by 2. If a failure or critical failure would increase the stage beyond the highest listed stage, the affliction instead repeats the effects of the highest stage.</p>
<h3>Conditions from Afflictions</h3>
<p>An affliction might give you conditions with a longer or shorter duration than the affliction. For instance, if an affliction causes you to be drained but has a maximum duration of 5 minutes, you remain drained even after the affliction ends, as is normal for the drained condition. Alternatively, you might succeed at the flat check to remove persistent damage you took from an ongoing affliction, but you would still need to attempt saves to remove the affliction itself, and failing one might give you new persistent damage.</p>
<h3>Multiple Exposures</h3>
<p>Multiple exposures to the same affliction have no effect if it's a curse or disease. However, for a poison, failing the initial saving throw against a new dose increases the stage by 1 (or by 2 if you critically fail) without affecting the maximum duration. This is true even if you're within the poison's onset period, though it doesn't change the length of the onset period.</p>
<h3>Virulent Afflictions</h3>
<p>Afflictions with the virulent trait are harder to remove. You must succeed at two consecutive saves to reduce a virulent affliction's stage by 1. A critical success reduces a virulent affliction's stage by only 1 instead of by 2.</p>
<blockquote>
    <h4>Affliction Example</h4>
    <p>To see how a poison works, let's look at the effect of the arsenic alchemical item (see page 361 for the full item listing). Note that afflictions use this abbreviated format in spell stat blocks.</p>
    <dl>
        <dt>Arsenic (poison)</dt> <dd>You can't reduce your sick condition while affected by arsenic
            <ul>
                <li><strong>Save:</strong> CON DC 15</li>
                <li><strong>Onset</strong> 10 minutes</li>
                <li><strong>Maximum Duration</strong> 5 minutes</li>
                <dl>
                    <dt>Stage 1</dt> <dd>1 poison damage and Sick 1 (1 minute)</dd>
                    <dt>Stage 2</dt> <dd>1D4 poison damage and Sick 2 (1 minute)</dd>
                    <dt>Stage 3</dt> <dd>2D4 poison damage and Sick 3 (1 minute)</dd>
                </dl>
            </ul>
        </dd>
    </dl>
    <p>For example, if you drank a glass of wine laced with arsenic, you would attempt an initial CON Save against the listed DC of 15. If you fail your save, you advance to stage 1. Because of the onset time, nothing happens for 10 minutes, but once this time passes, you take 1 poison damage and become sick 1. As noted, you're unable to reduce the sick condition you gain from arsenic. The interval of stage 1 is 1 minute (as shown in parentheses), so you attempt a new save after 1 minute passes. If you succeed, you reduce the stage by 1, recovering from the poison. If you fail again, you move to stage 2, taking 1d4 poison damage and becoming sick 2.</p>
    <p>If your initial save against the arsenic was a critical failure, you would go straight to stage 2. After the 10-minute onset time, you would take 1d4 poison damage and become sick 2. Succeeding at your second save would cause you to go to stage 1, taking 1 poison damage and reducing your sick value to 1. Failing the second save would advance you to stage 3.</p>
    <p>If you make it to stage 3 of the poison, either by failing while at stage 2 or critically failing while at stage 1, you'd take 2d4 poison damage and be sick 3. If you failed or critically failed your saving throw while at stage 3, you would repeat the effects of stage 3.</p>
    <p>Since the poison has a maximum duration of 5 minutes, you recover from it once the 5 minutes pass, no matter which stage you\'re at.</p>
</blockquote>";

        $rule              = new Rule;
        $rule->key         = 'poison';
        $rule->name        = 'Poison';
        $rule->description = "<p>When a character takes damage from a poisoned weapon, touches an item smeared with contact poison, or consumes poisoned food or drink, they must make a CON Save. A character who fails the Save suffers the effects of the poison as described.</p>
<h4>Creating Poisons</h4>
<p>The first rule for refining natural poison, such as an animal's venom, into a generally useful poison is that simply killing the creature and wiping your character\'s blade on its poison gland doesn\'t work. Most creature\'s poisons area delicate mixture of various toxins, and that delicate mix is often disrupted when the creature dies or the poison is exposed to the air. Getting the poison to persist on a blade and remain effective is a trickier task still.</p>
<p>Refining raw materials, such as creature venom, into an effective poison requires time, determination, and an application of craft. Craft (poisonmaking), provides the necessary expertise.</p>
<h5>Cost</h5>
<p>The cost of raw materials for a poison varies widely depending on whether the character has access to the active ingredients - that is, the venom or plant that actually provies the poison. If a supply is readily available, the raw materials cost 1/6 of the market price, not 1/3. Otherwise, the raw materials cost at least 3/4 of the market price -- assuming that the substance is question is for sale at all.</p>
<h5>Time</h5>
<p>To figure out how much poison can be made ina week, the character makes a Craft (poisonmaking) check at the end of the week. If the check is successful, multiply the check result by the DC for the check. That result is how many gold pieces\'s worth of poison was created that week. When the gold pieces\' worth created equals or exceeds the market price of one dose of the poison, that poisonmaker has completed that does. For a skilled poisonmaker, multiple doses in a week may be possible. If the poisonmaker fails the check, no progress is made that week. If the poisonmaker fails the check by 5 or more, the raw materials are ruined and must be reobtained.</p>
<h5>Using the Alchemy/Medicine Skill</h5>
<p>Characters with the Craft (alchemy) skill can substitute it for Craft (poisonmaking), but with a -5 circumstance penalty. Characters with the Medicine skill can substitute it for Craft (poisonmaking), but with a -10 circumstance penalty.</p>";
        $rule->order = 100;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'resting';
        $rule->name        = 'Resting';
        $rule->description = "<p>Characters require 8 hours of sleep each day. Though resting typically happens at night, a group gains the same benefits for resting during the day. Either way, they can gain the benefits of resting only once every 24 hours. A character who rests for 8 hours recovers in the following ways:</p>
<ul>
    <li>The character regains Hit Points equal to their CON modifier (minimum 1) multiplied by their level. If they rest without any shelter or comfort, you might reduce this healing by half (to a minimum of 1 HP).</li>
    <li>The character loses the fatigued condition</li>
    <li>The character reduces the severity of the doomed and drained conditions by 1</li>
    <li>Most spellcasters need to rest before they regain their spells for the day</li>
</ul>
<p>A group in exploration mode can attempt to rest, but they aren't entirely safe from danger, and their rest might be interrupted. The 8 hours of rest do not need to be consecutive, however, and after an interruption, characters can go back to sleep</p>
<p>If a character goes more than 16 hours without going to sleep, they become fatigued</p>
<p>Taking long-term rest for faster recovery is part of downtime and can't be done during exploration</p>
<h2>Watches and Surprise Attacks</h2>
<p>Adventuring parties usually put a few people on guard to watch out for danger while the others rest. Spending time on watch also interrupts sleep, so a night's schedule needs to account for everyone's time on guard duty. Table 10–3: Watches and Rest indicates how long the group needs to set aside for rest, assuming everyone gets a rotating watch assignment of equal length.</p>
<p>If a surprise encounter would occur during rest, you can roll a die to randomly determine which character is on watch at the time. All characters roll initiative; sleeping characters typically roll Perception with a –4 status penalty for being unconscious. They don't automatically wake up when rolling initiative, but they might roll a Perception check to wake up at the start of their turn due to noise. If a savvy enemy waits for a particularly vulnerable character to take watch before attacking, the attack can happen on that character's watch automatically. However, you might have the ambushers attempt a Stealth check against the Perception DCs of all characters to see if anyone noticed its approach.</p>
<table>
    <thead>
        <tr>
            <th>Party Size</th>
            <th>Total Time</th>
            <th>Duration of Each Watch</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>2</td>
            <td>16 hours</td>
            <td>8 hours</td>
        </tr>
        <tr>
            <td>3</td>
            <td>12 hours</td>
            <td>4 hours</td>
        </tr>
        <tr>
            <td>4</td>
            <td>10 hours, 40 minutes</td>
            <td>2 hours, 40 minutes</td>
        </tr>
        <tr>
            <td>5</td>
            <td>10 hours</td>
            <td>2 hours</td>
        </tr>
        <tr>
            <td>6</td>
            <td>9 hours, 36 minutes</td>
            <td>1 hour, 36 minutes</td>
        </tr>
    </tbody>
</table>";
        $rule->order = 30;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'attunement';
        $rule->name        = 'Attunement';
        $rule->description = "<p>Some Magic Items require a creature to form a bond with them before their magical properties can be used. This bond is called attunement, and certain items have a prerequisite for it. If the prerequisite is a class, a creature must be a member of that class to attune to the item. (If the class is a Spellcasting class, a monster qualifies if it has Spell Slots and uses that class's spell list.) If the prerequisite is to be a Spellcaster, a creature qualifies if it can cast at least one spell using its Traits or features, not using a magic item or the like.</p>
<p>Without becoming attuned to an item that requires attunement, a creature gains only its nonmagical benefits, unless its description states otherwise. For example, a magic Shield that requires attunement provides the benefits of a normal Shield to a creature not attuned to it, but none of its magical properties.</p>
<p>Attuning to an item requires a creature to spend a Short Rest focused on only that item while being in physical contact with it (this can't be the same short rest used to learn the item's properties). This focus can take the form of weapon practice (for a weapon), meditation (for a wondrous item), or some other appropriate activity. If the Short Rest is interrupted, the attunement attempt fails. Otherwise, at the end of the Short Rest, the creature gains an intuitive understanding of how to activate any magical properties of the item, including any necessary Command words.</p>
<p>An item can be attuned to only one creature at a time, and a creature can be attuned to no more than three Magic Items at a time. Any attempt to attune to a fourth item fails; the creature must end its attunement to an item first. Additionally, a creature can't attune to more than one copy of an item. For example, a creature can't attune to more than one Ring of Protection at a time.</p>
<p>A creature's attunement to an item ends if the creature no longer satisfies the Prerequisites for attunement, if the item has been more than 100 feet away for at least 24 hours, if the creature dies, or if another creature attunes to the item. A creature can also voluntarily end attunement by spending another Short Rest focused on the item, unless the item is Cursed.</p>";
        $rule->order = 100;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'addiction';
        $rule->name        = 'Addiction';
        $rule->description = '<p>One of the primary drawbacks of drugs is their potential for addiction. Some people reach a point where they think they need the drug in order to function, and end up selling off their material possessions (and in some places their family members) to get their needed drugs.</p>
<p>Drug addictions function much like diseases. Upon initial exposure, you must succeed at a CON Save or become addicted as shown below. Addiction proceeds like a disease - while addicted, you suffer temporary ability damage each day unless you succeed at a CON Save against the listed DC for the drug.</p>
<table>
    <thead>
        <tr>
            <th>Addiction</th>
            <th>DC</th>
            <th>Satiation</th>
            <th>Damage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Low</td>
            <td>6</td>
            <td>10 days</td>
            <td>1D2 WIS</td>
        </tr>
        <tr>
            <td>Medium</td>
            <td>10</td>
            <td>5 days</td>
            <td>1D2 DEX + 1D3 WIS</td>
        </tr>
        <tr>
            <td>High</td>
            <td>14</td>
            <td>2 days</td>
            <td>1D2 DEX + 1D3 WIS + 1D2 CON</td>
        </tr>
    </tbody>
</table>
<h4>Satiation</h4>
    <p>Each time you take the drug to which you are addicted, you are satiated and stave off withdrawal symptoms for the given period of time. After the satiation period wears off, the DC of the CON Save to resist the effects of addiction increases by +5. The does in which you become addicted counts for satiation.</p>
    <blockquote>
        Ex. A wizard unfortunate enough to become addicted to haunspeir (low addiction) on his first use of the drug must make a CON Save everyday or take 1D2 WIS damage. As long as he continues to take the drug every 10 days, his Save DC is only 6. If he stops using the drug for more than 10 days, the DC of the addiction Save increases to 11. If he starts using it again, the DC drops back to 6.
    </blockquote>
<h4>Damage</h4>
    <p>Addiction inflicts the given damage each day unless you succeed at a CON Save. Ability damage heals 1 point in each ability score per day.</p>
<h4>Recovery</h4>
    <p>If you are addicted, and successfully make two Saves in a row, you have fought off your addiction and you have recovered, taking no more damage. Of course, you can always become addicted again later by taking another dose of the drug.</p>
    <p>A Restoration spell may negate some or all of the ability score damage caused by an addiction, but on the next day you may accrue more ability damage if you continue to fail CON Saves. Remove Disease immediately cause you to recover from the addiction, but does not restore lost ability score points. Heal causes recovery and restores all ability damage from the addiction.</p>';
        $rule->order = 1000;
        $page->rules()->save($rule);
    }
}
