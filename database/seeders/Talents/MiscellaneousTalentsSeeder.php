<?php

namespace Database\Seeders\Talents;

use App\Models\Talent;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MiscellaneousTalentsSeeder extends Seeder
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

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Agility';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to gain the following for 1 hour.</p>
<ul>
    <li>+4 bonus to DEX</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 8]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Amphibious';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to gain the following for 1 hour</p>
<ul>
    <li>You gain a +10 bonus to your Swim Speed</li>
    <li>+4 bonus to Swim, and Hold your Breath Checks. You also gain this bonus to help prevent slipping on wet surfaces.</li>
    <li>You skin becomes thickened, protecting you from normal leeches and skin maceration (softening of the skin due to prolonged exposure to moisture, sometimes called skin pruning). This grants Damage Reduction: 1</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Aquatic';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to gain the following for 1 hour.</p>
<ul>
    <li>You grows gills, enabling you to breathe underwater (while retaining her ability to breathe air). Webbing grows between your fingers and your toes granting her a swim speed of 40 feet (or 30 feet if wearing medium or heavy armor or carrying a medium or heavy load)</li>
    <li>+8 bonus on Athletic (Swim) checks</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Claw';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to gain the following for 1 hour.</p>
<ul>
    <li>Your hands grow claws, making your Unarmed Strikes considered to be armed. Your claw attacks deal 1D6 Slashing damage + STR.</li>
    <li>You gain a +1 Bonus to hit with your Unarmed Strikes</li>
    <li>You gain a +2 Bonus to Damage with your Unarmed Strikes</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Endurance';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to gain the following for 1 hour.</p>
<ul>
    <li>You gain a +4 bonus to CON.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 8]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Fast Healing';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to gain the following for 1 hour.</p>
<ul>
    <li>You gain Regeneration: 2</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 10]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Wings';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to gain the following for 1 hour.</p>
<ul>
    <li>Your arms become wings (feathery or batlike, your choice) that enables you to fly at a speed of 40 feet with average maneuverability (or 30 feet if wearing medium or heavy armor or carrying a medium or heavy load).</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 8]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Furry';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to grow thick fur all over your body. You gain the following for 1 hour</p>
<ul>
    <li>Survive in a Cold Environment. You can survive in Freezing temperatures (0 degrees Fahrenheit)</li>
    <li>Gain Resistance to Cold Damage</li>
    <li>You gain Damage Reduction: 1 vs Slashing Damage</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Thick Hide';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to make your skin harden. You gain the following for 1 hour</p>
<ul>
    <li>You gain a Natural AC of +4. This does not stack with any worn Armor.</li>
    <li>You gain Damage Reduction: 5</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 6]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Growth';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to grow in size. You gain the following for 1 hour.</p>
<ul>
    <li>Your size increases by one category</li>
    <li>You gain a +2 bonus to STR</li>
    <li>You gain a +2 bonus to CON</li>
    <li>You gain Damage Reduction: 1</li>
</ul>
<p>You may not use this Talent at the same time as Aspect of Nature: Shrink.</p>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Scent';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to gain the following for 1 hour.</p>
<ul>
    <li>You gain the Scent ability</li>
    <li>You have Advantage on Perception checks based on scent.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Shrink';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to shrink in size. You gain the following for 1 hour.</p>
<ul>
    <li>Your size decreases by one category</li>
    <li>You gain a +4 bonus to DEX</li>
</ul>
<p>You may not use this Talent at the same time as Aspect of Nature: Growth.</p>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 8]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Speed';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to gain the following for 1 hour.</p>
<ul>
    <li>You gain an additional Action. This additional Action can only be used to take the Stride Action</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Strength';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to gain the following for 1 hour.</p>
<ul>
    <li>You gain a +4 bonus to STR</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 8]);

        $talent              = new Talent;
        $talent->name        = 'Aspect of Nature: Venom';
        $talent->action_type = 'Action';
        $talent->description = '<p>You may use a use of your Wild Shape ability to gain the following for 1 hour.</p>
<ul>
    <li>You gain a bite attack that deals 1D6 Piercing Damage. In addition, the bite delivers a toxic venom (CON DC 14) 1D4 CON or STR Damage (your choice). A victim cannot suffer this Ability Damage more than twice.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Wild Shape', 'Talent' => 6]);

        /**********************************************************************/

        $talent              = new Talent;
        $talent->name        = 'Arcane Shield Master';
        $talent->requirement = 'You must have the ability to cast Wizard spells';
        $talent->description = "<ul>
    <li>If the Shield Spell is a Cantrip for you, it is automatically Heightened +1.</li>
    <li>If the Shield Spell is not a Cantrip for you, you may cast it 1/day without using a Spell Slot</li>
    <li>When you cast the Shield Spell, it's Duration is increased by +1 rounds.</li>
</ul>";
        $helper->addTypesToSimpleObject($talent, ['Arcane', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Extra Cantrip';
        $talent->requirement = 'You must have the ability to cast cantrips';
        $talent->description = '<p>You may memorize an additional Cantrip from your list of Cantrips.</p>';
        $helper->addTypesToSimpleObject($talent, ['Arcane', 'Divine', 'Primal', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Mage Armor Master';
        $talent->action_type = 'Triple Action';
        $talent->requirement = 'You must have the ability to cast Wizard spells';
        $talent->description = '<p>You may cast Mage Armor on yourself only as a 1st level spell at will with a Triple Action.</p>';
        $helper->addTypesToSimpleObject($talent, ['Arcane', 'Abjuration', 'Talent' => 3]);

        $talent              = new Talent;
        $talent->name        = 'Fighting Summoner';
        $talent->requirement = 'You must have Summoned or Called a creature that is able to fight';
        $talent->description = "<p>You are skilled at fighting alongside your summoned creatures (this includes, Familiars that can fight, Animal Companions, Divine Mounts, homunculus, golems, effigies, and animated objects)</p>
<p>As long as you and a creature you summoned threaten the same opponent, you are considered to be Flanking that opponent even if you don't have an ally on the opponent's opposite side. Your summoned ally gains a +1 bonus to Hit while it is attacking a creature that is Flanked.</p>";
        $helper->addTypesToSimpleObject($talent, ['Arcane', 'Divine', 'Primal', 'Summoning', 'Conjuration', 'Talent' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Skilled Diviner';
        $talent->description = '<p>When you roll for your Foretellings from the Diviner Feat, you may add or subtract 1 from each result.</p>';
        $helper->addTypesToSimpleObject($talent, ['Arcane', 'Divination', 'Talent' => 6]);
        $talent->feats()->save(app()->feats['Diviner']);

        $talent              = new Talent;
        $talent->name        = 'Sorcerous Combat';
        $talent->action_type = 'Action';
        $talent->requirement = 'You must have the ability to cast at least 1st Level Arcane spells';
        $talent->description = '<p>You may use an Action and spend 1 Spell Point to envelop your Melee Weapon in magical energy. Choose one of the following.</p>
<ul>
    <li>Cold</li>
    <li>Electricity</li>
    <li>Fire</li>
    <li>Sonic</li>
</ul>
<p>Once you activate this ability and have chosen one of the elements, your Melee Weapon is empowered for 1 minute with that element and deals an additional 1D6 Damage per hit of that element.</p>
<p>As an Action, before the 1-minute duration is up, you may switch elements.</p>';
        $helper->addTypesToSimpleObject($talent, ['Arcane', 'Talent' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Sorcerous Resistance';
        $talent->action_type = 'Free';
        $talent->requirement = 'You must have the ability to cast at least 2nd level Arcane spells';
        $talent->description = '<p>You may spend 3 Spell Points as part of making a STR, DEX, or CON Save to give yourself Advantage on the Save.</p>';
        $helper->addTypesToSimpleObject($talent, ['Arcane', 'Talent' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Sorcerous Travel';
        $talent->action_type = 'Double Action';
        $talent->requirement = 'You must have the ability to cast at least 3rd level Arcane spells';
        $talent->description = '<p>You may spend 5 Spell Points as a Double Action to cast Misty Step.</p>';
        $helper->addTypesToSimpleObject($talent, ['Arcane', 'Talent' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Sorcerous Speed';
        $talent->action_type = 'Free';
        $talent->requirement = 'You must have the ability to cast at last 4th level Arcane spells';
        $talent->description = '<p>You may spend 20 Spell Points to gain the Quickened Condition for 1 minute.</p>';
        $helper->addTypesToSimpleObject($talent, ['Arcane', 'Talent' => 12]);

        /**********************************************************************/

        $talent              = new Talent;
        $talent->name        = 'Bargain Hunter';
        $talent->description = "<p>You can Earn Income using Diplomacy, spending your days hunting for bargains and reselling at a profit. You can also spend time specifically sniffing out a great bargain on an item; this works as if you were using Earn Income with Diplomacy, except instead of gaining money, you purchase the item at a discount equal to the money you would have gained, gaining the item for free if you earned income equals or exceeds it's cost.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Diplomacy'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Additional Crafting';
        $talent->description = '<p>You learn a new Crafting skill.</p>
<ul>
    <li>Choose a specific Crafting subcategory. You gain a +3 bonus to that specific subcategory</li>
    <li>You also gain a +1 bonus on all Crafting checks.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Item Creation', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Crafting'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Additional Lore';
        $talent->description = '<p>You learn a new Lore subcategory.</p>
<ul>
    <li>Choose a specific Lore subcategory. You gain a +3 bonus to that specific subcategory</li>
    <li>You also gain a +1 bonus on all Lore checks.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Lore'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Battle Cry';
        $talent->action_type = 'Free';
        $talent->description = '<p>When you roll initiative, you can yell a mighty battle cry and Demoralize an observed foe as a Free Action. If you have at least 8 ranks in Intimidation, you can use a Reaction to Demoralize your foe when you Critically Succeed at an attack roll</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 7]);
        $talent->skills()->save(app()->skills['Intimidation'], ['dc' => 10]);

        $talent              = new Talent;
        $talent->name        = 'Combat Climber';
        $talent->description = "<p>Your techniques allow you to fight as you climb. You're not Flat-Footed while Climbing and can Climb with a hand occupied. You must still use another hand and both legs to Climb.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Athletics'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Confabulator';
        $talent->description = "<p>Even when caught in falsehood, you pile lie upon lie. Reduce the circumstance bonus a target gains for your previous attempts to Create a Diversion or Lie to from a +4 to a +2. If you have at least 15 ranks in Deception, your targets don't get these bonuses at all.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Deception'], ['dc' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Courtly Graces';
        $talent->description = "<p>You were raised among the nobility or have learned proper etiquette and bearing, allowing you to present yourself as a noble and play games of influence and politics. You can use Society to Make an Impression on a noble, as well as with Impersonate to pretend to be a noble if you aren't one. If you want to Impersonate a specific noble, you still need to use Deception to Impersonate normally, and to Lie when necessary.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Society'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Connections';
        $talent->description = "<p>You have social connections you can leverage to trade favors or meet important people. When you're in an area with connections (typically a settlement where you've spent downtime building connections, or possibly another area in the same nation), you can attempt a Society check to arrange a meeting with an important political figure or ask for a favor in exchange for a later favor of your contact's choice. The GM decides the DC based on the difficulty of the favor and the figure's prominence.</p>";
        $talent->parent_id   = Talent::where('name', 'Courtly Graces')->first()->id;
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 2]);
        $talent->skills()->save(app()->skills['Society'], ['dc' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Experienced Professional';
        $talent->description = '<p>You carefully safeguard your professional endeavors to prevent disaster. When you use Lore to Earn Income. If you roll a Critical Failure, you instead get a Failure. If you have at least 10 ranks in Lore, you gain twice as much income from a failed check to Earn Income, unless it was originally a Critical Failure.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Lore'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Experienced Smuggler';
        $talent->description = "<p>You often smuggle things past the authorities. When the GM rolls your Stealth check to see if a passive observer notices a small item you have concealed, the GM uses the number rolled or 10-whichever is higher-as the result of your die roll, adding it to your Stealth modifier to determine your Stealth check result. If you have 10 or more ranks in Stealth, the GM uses the number rolled or 15, and if you have at least 15 ranks in Stealth, you automatically succeed at hiding a small concealed item from passive observers. This provides no benefits when a creature attempts a Perception check while actively searching you for hidden items. Due to your smuggling skill, you're more likely to find more lucrative smuggling jobs when using Underworld Lore to Earn Income.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Stealth'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Experienced Tracker';
        $talent->description = "<p>Tracking is second nature to you, and when necessary you can follow a trail without pause. You can Track while moving at full Speed by taking a -5 penalty to your Survival check. If you have at least 10 ranks in Survival, you don't take the -5 penalty. If you have at least 15 ranks in Survival, you no longer need to roll a new Survival check every hour when tracking, though you still need to roll whenever there are significant changes in the trail.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Survival'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Faith Scholar';
        $talent->description = "<p>You've researched many faiths enough to recognize notions about them that are unlikely to be true. If you roll a Critical Failure at a Religion check to Decipher Writing of a religions nature or to Recall Knowledge about the tenets of faiths, you get a Failure instead. When attempting to Recall Knowledge about the tenets of your own faith. if you roll a Failure, you get a Success instead, and if you roll a Success, you get a Critical Success instead.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Religion']);

        $talent              = new Talent;
        $talent->name        = 'Fascinating Performance';
        $talent->description = "<p>When you Perform, compare your result to the WIS DC of one observer. If you succeed, the target is Fascinated by you for 1 round. If the observer is in a situation that demands immediate attention, such as combat, you must Critically Succeed to Fascinate it and the Perform Action gains the Incapacitation trait. You must choose which creature you're trying to Fascinate before you roll your check, and the target is then temporarily immune for 1 hour.</p>
<p>If you have at least 5 ranks in Perform, you can Fascinate up to four observers. If you have at least 10 ranks in Perform, you can Fascinate up to 10 observers. If you have at least 15 ranks in Perform, you can Fascinate any number of observers at the same time.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Performance']);

        $talent              = new Talent;
        $talent->name        = 'Fast Recovery';
        $talent->description = '<p>Your body quickly bounces back from afflictions. You regain twice as many Hit Points from resting. Each time you succeed at a CON Save against Poison, you progress 2 steps instead of 1 towards being cured.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->attributes()->save(app()->attributes['CON'], ['dc' => 14]);

        $talent              = new Talent;
        $talent->name        = 'Feather Step';
        $talent->description = '<p>You step carefully and quickly.</p>
<ul>
    <li>You can Step into difficult terrain.</li>
    <li>You gain a +1 bonus to your Sneak Check</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->attributes()->save(app()->attributes['DEX'], ['dc' => 14]);

        $talent              = new Talent;
        $talent->name        = 'Forager';
        $talent->description = '<p>While using Survival, if you roll any result worse than a Success, you get a Success. On a Success, you can provide subsistence living for yourself and a number of additional creatures according to the following table.</p>
<table>
    <thead>
        <tr>
            <th>Ranks in Survival</th>
            <th>Number of individuals provided for (Success / Critical Success)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>2</td>
            <td>4 / 8</td>
        </tr>
        <tr>
            <td>5</td>
            <td>8 / 16</td>
        </tr>
        <tr>
            <td>10</td>
            <td>16 / 32</td>
        </tr>
        <tr>
            <td>15</td>
            <td>32 / 64</td>
        </tr>
    </tbody>
</table>
<p>Multiple Smaller creatures or creatures with significantly smaller appetites than a human are counted as a single creature for this Talent, and Larger creatures or those with significantly greater appetites each count as multiple creatures. The GM determines how much a non-human creature needs to eat.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Survival'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Hobnobber';
        $talent->description = '<p>You are skilled at learning information through conversation. The Gather Information exploration Activity takes you half as long as normal (typicaly reducing the time to 1 hour). If you have at least 10 ranks in Society and you Gather Information at the normal speed, when you attempt to do so and roll a Critical Failure, you get a Failure instead. There is still no guarantee that a rumor you learn with Gather Information is accurate.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Society'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Focused Crafting';
        $talent->description = "<p>Your training focused on Crafting one particular kind of item. Select one of the specialties; you gain a +1 circumstance bonus to Crafting checks to Craft items of that type. If you have at least 10 ranks in Crafting, this bonus increases to +2. If it's unclear whether the specialty applies, the GM decides. Some specialties might apply only partially.</p>
<blockquote>
    If you were making a morningstar and had specialty in woodworking, the GM might give you half your bonus because the item requires both blacksmithing and woodworking.
</blockquote>
<table>
    <thead>
        <tr>
            <th>Specialty</th>
            <th>Applicable Items</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Alchemy</td>
            <td>Alchemical items such as elixirs</td>
        </tr>
        <tr>
            <td>Artistry</td>
            <td>Fine art, including jewelry</td>
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
</table>
<p>You may take this Talent multiple times, choosing a new specialty each time.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Crafting'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Greater Crafting';
        $talent->parent_id   = Talent::where('name', 'Focused Crafting')->first()->id;
        $talent->description = '<p>You craft flawless creations with great efficiency. Whenever you roll a Success at a Crafting check to make an item of the type you chose with Focused Crafting, you get a Critical Success instead.</p>
<p>You may take this Talent multiple times, picking a new specialty you have already chosen with Focused Crafting</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 7]);
        $talent->skills()->save(app()->skills['Crafting'], ['dc' => 10]);

        $talent              = new Talent;
        $talent->name        = 'Improved Jump';
        $talent->description = "<p>Your unparalleled athletic skill allows you to jump impossible distances. Triple the distance you Long Jump (so you could jump 60 feet on a successful DC 20 check). When you High Jump, use the calculator for a Long Jump but don't triple the distance.</p>
<p>You can jump a distance grater than your Speed by spending additional Actions when you Long Jump or High Jump. For each additional Action spent, add your Speed to the limit on how far you can Leap.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 15]);
        $talent->skills()->save(app()->skills['Athletics'], ['dc' => 15]);

        $talent              = new Talent;
        $talent->name        = 'Intimidating Glare';
        $talent->description = "<p>You can Demoralize with a mere glare. When you do, Demoralize loses the Auditory trait and gains the Visual trait, and you don't take a penalty if the creature doesn't understand your Language.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Intimidation'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Intimidating Prowess';
        $talent->description = '<p>In situations where you can physically menace the target when you Coerce or Demoralize, you gain a +1 Circumstance bonus to your Intimidation check and you ignore the penalty for not sharing a Language.</p>
<p>If your STR score is 20 or higher and you have at least 10 ranks in Intimidation, this bonus increases to +2.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 2]);
        $talent->skills()->save(app()->skills['Intimidation'], ['dc' => 5]);
        $talent->attributes()->save(app()->attributes['STR'], ['dc' => 16]);

        $talent              = new Talent;
        $talent->name        = 'Lasting Coercion';
        $talent->description = '<p>When you successfully Coerce someone, the maximum time they comply increases to a week, still determined by the GM.</p>
<p>If you have at least 15 ranks in Intimidation, the maximum increases to a month.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 2]);
        $talent->skills()->save(app()->skills['Intimidation'], ['dc' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Legendary Medic';
        $talent->description = "<p>You've discovered medical breakthroughs or techniques that achieve miraculous results. Once per day for each target, you can spend 1 hour treating that target and attempt a Medicine check to remove one of the following Conditions.</p>
<ul>
    <li>Disease</li>
    <li>Blinded</li>
    <li>Deafened</li>
    <li>Doomed</li>
    <li>Drained</li>
</ul>
<p>Use the DC of the source of the effect that created the Condition. If the effect's source is an Artifact, above 20th level, or similarly powerful, increase the DC by 10.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 15]);
        $talent->skills()->save(app()->skills['Medicine'], ['dc' => 15]);

        $talent              = new Talent;
        $talent->name        = 'Legendary Negotiation';
        $talent->description = "<p>You can Negotiate incredibly quickly in adverse situations. You attempt to Make an Impression and then Request your opponent cease their current activity and engage in negotiations. You take a -5 penalty to your Diplomacy check. The GM sets the DC of the Request based on the circumstance-it's generally at least a very hard DC of the creature's level. Some creature might simply refuse, and even those who agree to parley might ultimately find your arguments lacking and return to violence.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 15]);
        $talent->skills()->save(app()->skills['Diplomacy'], ['dc' => 15]);

        $talent              = new Talent;
        $talent->name        = 'Nimble Crawl';
        $talent->description = "<p>You can Crawl incredibly fast-up to half your Speed rather than 5 feet.</p>
<p>If you have 10 or more ranks in Acrobatics, you can Crawl at your full Speed. If you have 15 or more ranks in Acrobatics, you aren't Flat-Footed while Prone.</p>";
        $helper->addTypesToSimpleObject($talent, ['Move', 'Talent' => 2]);
        $talent->skills()->save(app()->skills['Acrobatics'], ['dc' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Pickpocket';
        $talent->description = "<p>You can Steal or Palm an object that's closely guarded, such as in a pocket, without taking the -5 penalty. You can't steal objects that would be extremely noticeable or time consuming to remove (like worn shoes or armor or an actively wielded object).</p>
<p>If you have 10 or more ranks in Thievery, you can attempt to Steal from a creature in combat or otherwise on guard. When doing so, Stealing requires 2 Manipulate Actions instead of 1, and you take a -5 penalty.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Thievery'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Legendary Thief';
        $talent->parent_id   = Talent::where('name', 'Pickpocket')->firstOrFail()->id;
        $talent->description = '<p>Your ability to Steal defies belief. You can attempt to Steal something that is actively wielded or that would be extremely noticeable or time consuming to remove (like worn shoes or armor). You must do so slowly and carefully, spending at least 1 minute (and significantly longer for items that are normally time consuming to remove, like armor). Throughout this duration you must have some means of staying hidden, such as the cover of darkness or a bustling crowd. You take a -5 penalty to your Thievery check. Even if you Succeed, if the item is extremely prominent-like a suit of full plate armor-onlookers will quickly notice its gone after you steal it.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 15]);
        $talent->skills()->save(app()->skills['Thievery'], ['dc' => 15, 'meta' => 'Pickpocket']);

        $talent              = new Talent;
        $talent->name        = 'Quick Climb';
        $talent->description = '<p>When Climbing, you move 5 more feet on a Success and 10 more feet on a Critical Success, to a maximum of your Speed.</p>
<p>If you have 15 or more ranks in Climb, your Climb Speed is equal to your Speed.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 7]);
        $talent->skills()->save(app()->skills['Athletics'], ['dc' => 10]);

        $talent              = new Talent;
        $talent->name        = 'Quick Disguise';
        $talent->description = '<p>You can set up a disguise in half the usual time (generally 5 minutes).</p>
<p>If you have at least 10 ranks in Deception, it takes one-tenth the usual time (usually 1 minute). If you have at least 15 ranks in Deception, you can create a full disguise and Impersonate as a 3-Action activity.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 2]);
        $talent->skills()->save(app()->skills['Deception'], ['dc' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Quick Jump';
        $talent->description = "<p>You can use High Jump and Long Jump as a single Action instead of 2 Actions. If you do, you don't perform the initial Stride (nor do you fail if you don't Stride 10 feet).</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Athletics'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Powerful Leap';
        $talent->parent_id   = Talent::where('name', 'Quick Jump')->firstOrFail()->id;
        $talent->description = '<p>When you Leap, you can jump 5 feet up with a vertical Leap, and you increase the distance you can jump horizontally by 5 feet.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 2]);
        $talent->skills()->save(app()->skills['Athletics'], ['dc' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Quick Recovery';
        $talent->action_type = 'Action';
        $talent->description = '<p>Whenever you begin your turn Stunned or Dazed, as an Action, you can make a new Save at the original DC of the effect that Stunned or Dazed you to recover. If the effect that caused you to become Stunned or Dazed does not allow a Save, you can recover by using a Triple Action.</p>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 1]);

        $talent              = new Talent;
        $talent->name        = 'Quick Sneak';
        $talent->description = '<p>You can move your Full Speed when you Sneak. You can use Swift Sneak while Burrowing, Climbing, Flying, or Swimming instead of Striding if you have the corresponding movement type.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 7]);
        $talent->skills()->save(app()->skills['Stealth'], ['dc' => 10]);

        $talent              = new Talent;
        $talent->name        = 'Legendary Sneak';
        $talent->description = "<p>You're always sneaking unless you choose to be seen, even when there's nowhere to hide. You can Hide and Sneak even without cover or being Concealed. When you employ an exploration tactic other than Avoiding Notice unless you choose not to.</p>";
        $talent->parent_id   = Talent::where('name', 'Quick Sneak')->first()->id;
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 15]);
        $talent->skills()->save(app()->skills['Stealth'], ['dc' => 15]);

        $talent              = new Talent;
        $talent->name        = 'Quick Squeeze';
        $talent->description = '<p>You Squeeze 5 feet per round (10 feet on a Critical Success).</p>
<p>If you have at least 15 ranks in Acrobatics, you Squeeze at your full Speed.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Acrobatics'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Quick Swim';
        $talent->description = '<p>You Swim 5 feet farther on a success and 10 feet farther on a Critical Success, to a maximum of your Speed.</p>
<p>If you have at least 15 ranks in Athletics, you gain a Swim Speed equal to your Speed.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 7]);
        $talent->skills()->save(app()->skills['Athletics'], ['dc' => 10]);

        $talent              = new Talent;
        $talent->name        = 'Quick Unlock';
        $talent->description = '<p>You can Pick a Lock using 1 less Action.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 7]);
        $talent->skills()->save(app()->skills['Thievery'], ['dc' => 10]);

        $talent              = new Talent;
        $talent->name        = 'Read Lips';
        $talent->description = "<p>You can read the lips of others nearby who you can clearly see. When you're at your leisure, you can do this automatically. In encounter mode or when attempting a more difficult feat of lipreading, you're Fascinated and Flat-Footed during each round in which you focus on lip movement, and you must succeed at a Society check (DC determined by GM) to successfully read someone's lips. In either case, the language must be one that you know.</p>
<p>If you attempt to Identify a Spell with a Verbal Casting Component, you gain a +3 bonus to your Identify Spell Check</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Language'], ['dc' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Improved Identify Spell';
        $talent->action_type = 'Reaction';
        $talent->trigger     = 'A creature within line of sight casts a spell. You must be aware of the casting';
        $talent->description = "<p>If you have at least 2 ranks in Arcana and the spell is Common, then you automatically identify the spell (you still roll to attempt to get a Critical Success, but can't get a worse result than Success).</p>
<p>The highest level of spell you automatically identify increases to 4 if you at least 5 or more ranks in Arcana, 6th level if you have at least 10 ranks, and 10th level if you have at least 15 ranks.</p>
<p>The GM rolls a secret Arcana, check.</p>
<dl>
    <dt>Critical Success</dt> <dd>You correctly recognize the spell and gain a +3 circumstance bonus to your Save or your AC against it</dd>
    <dt>Success</dt> <dd>You correctly recognize the spell</dd>
    <dt>Failure</dt> <dd>You fail to recognize the spell</dd>
    <dt>Critical Failure</dt> <dd>You misidentify the spell as another spell entirely, of the GM's choice</dd>
</dl>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Arcana'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Quick Recognize';
        $talent->description = '<p>You Identify Spells quickly. You can Identify a Spell using Arcana as a Free Action.</p>';
        $talent->parent_id   = Talent::where('name', 'Improved Identify Spell')->first()->id;
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 7]);
        $talent->skills()->save(app()->skills['Arcana'], ['dc' => 10]);

        $talent              = new Talent;
        $talent->name        = 'Sign Language';
        $talent->description = '<p>You learn the sign language associated with the chosen Language skill, allowing you to sign and understand signs. Sign languages typically require both hands to convey more complex concepts, and they are visual rather than auditory.</p>
<p>Sign language is difficult to understand during combat due to the level of attention needed, unlike basic gestures like pointing at a foe to suggest a target. Sign language is hard to use in areas of low visibility, just like speech is difficult in a noisy environment.</p>
<p>You may gain this Talent multiple times, each time gaining a new language that you can sign.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Language'], ['dc' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Steady Balance';
        $talent->description = "<p>You can keep your balance easily, even in adverse conditions. Whenever you roll a success using the Balance Action, you get a Critical Success instead. You're not Flat-Footed while attempting to Balance on narrow surfaces and uneven ground. Thanks to your incredible balance, you can attempt an Acrobatics check instead of a DEX Save to Grab an Edge.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Acrobatics'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Streetwise';
        $talent->description = '<p>You know about life on the streets and feel the pulse of your local settlement. You can use your Society modifier instead of your Diplomacy modifier to Gather Information. In any settlement you frequent regularly, you can use the Recall Knowledge Action with Society to know the same sorts of information that you could discover with Diplomacy to Gather Information. The DC is usually significantly higher, but you know the information without spending time gathering it. If you fail to Recall the Information, you can still subsequently  attempt to Gather Information normally.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Society'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Subtle Theft';
        $talent->description = "<p>When you successfully Steal something, observers (creatures other than the creature you stole from) take a -2 circumstance penalty to their Perception DCs to detect your theft. Additionally, if you first Create a Diversion using Deception, taking a single Palm an Object or Steal Action doesn't end your undetected condition.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Thievery'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Survey Wildlife';
        $talent->description = "<p>You can study details in the wilderness to determine the presence of nearby creatures. You can spend 10 minutes assessing the area around you to find out what creatures are nearby, based on nests, scat, and marks on vegetation. Attempt a Survival check against a DC determined by the GM based on how obvious the signs are. On a Success, you can attempt a Recall Knowledge check with a -2 penalty to learn more about the creatures just from these signs. If you have at least 10 ranks in Survival, you don't take the penalty.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Survival'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Terrain Expertise';
        $talent->description = '<p>Your experience in navigating a certain type of terrain makes you supremely confident while doing so. You gain a +1 circumstance bonus to Survival checks in one of the following types of terrain, chosen when you select this Talent</p>
<ul>
    <li>Aquatic</li>
    <li>Desert</li>
    <li>Forest</li>
    <li>Mountain</li>
    <li>Plains</li>
    <li>Sky</li>
    <li>Swamp</li>
    <li>Underdark</li>
</ul>
<p>You may take this Talent multiple times, each time choosing a different type of terrain.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 2]);
        $talent->skills()->save(app()->skills['Survival'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Terrain Stalker';
        $talent->description = "<p>Select one type of difficult terrain from the following list.</p>
<ul>
    <li>Rubble</li>
    <li>Snow</li>
    <li>Underbrush</li>
</ul>
<p>While undetected by all non-allies in that type of terrain, you can Sneak without attempting a Stealth check as long as you move no more than 5 feet and do not move within 10 feet of an enemy at any point during your movement. This also allows you to automatically approach creatures to within 15 feet while Avoiding Notice during exploration as long as they aren't actively Searching or on guard.</p>
<p>You may take this Talent multiple times, each time choosing a different type of difficult terrain.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Survival'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Train Animal';
        $talent->description = "<p>You spend time teaching an animal to do a certain Action. You can either select a basic Action the animal already knows how to do (typically those listed in the Command an Animal Action) or attempt to teach the animal a new basic Action. The GM determines the DC of any check required and teh amount of time the training takes (usually at least a week). It's usually impossible to teach an animal a trick that uses critical thinking.</p>
<p>If you have at least 5 ranks in Animal Handling, you might be able to train more unusual creatures, at the GM's discretion.</p>
<dl>
    <dt>Success</dt> <dd>The animal learns the Action. If it was an Action the animal already knew, you can Command the Animal to take that Action without attempting a Animal Handling check. If it was a new basic Action,add that Action to the Actions the animal can take when Commanded, but you must still roll.</dd>
    <dt>Failure</dt> <dd>The animal doesn't learn the trick</dd>
</dl>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Animal Handling'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Virtuosic Performer';
        $talent->description = "<p>You have exceptional talent with one type of performance. You gain a +1 circumstance bonus when making a certain type of performance. If you have at least 10 ranks in Performance, this bonus increases to +2. Select one of the following specialties and apply the bonus when attempting Performance checks of that type if it's unclear whether the specialty applies, the GM decides.</p>
<table>
    <thead>
        <tr>
            <th>Specialty</th>
            <th>Examples</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Acting</td>
            <td>Drama, pantomime, puppetry</td>
        </tr>
        <tr>
            <td>Comedy</td>
            <td>Buffoonery, joke telling, limericks</td>
        </tr>
        <tr>
            <td>Dance</td>
            <td>Ballet, huara, jig, macru</td>
        </tr>
        <tr>
            <td>Keyboards</td>
            <td>Harpsichord, organ, piano</td>
        </tr>
        <tr>
            <td>Oratory</td>
            <td>Epic, ode, poetry, storytelling</td>
        </tr>
        <tr>
            <td>Percussion</td>
            <td>Chimes, drum, gong, xylophone</td>
        </tr>
        <tr>
            <td>Singing</td>
            <td>Ballad, chant, melody, rhyming</td>
        </tr>
        <tr>
            <td>Strings</td>
            <td>Fiddle, harp, lute, viol</td>
        </tr>
        <tr>
            <td>Winds</td>
            <td>Bagpipe, flute, recorder, trumpet </td>
        </tr>
    </tbody>
</table>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 1]);
        $talent->skills()->save(app()->skills['Performance'], ['dc' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Legendary Performer';
        $talent->description = "<p>Your fame has spread throughout the lands. NPC who succeed at a DC 10 Society check to Recall Knowledge have heard of you and usually have an attitude toward you one step better than normal, depending on your reputation and the NPC's disposition.</p>
<blockquote>
    If you're well-known for cruel and demanding behavior, creatures might be intimidated by you, rather than be friendly toward you.
</blockquote>
<p>When you Earn Income with Performance, you attract higher-level audience than your location would allow as audiences flock to see you. For instance, rulers and angels might travel to your small tower in the woods to hear you perform. Typically, this increase the audiences available by 2 levels or more, determined by the GM.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 15]);
        $talent->skills()->save(app()->skills['Performance'], ['dc' => 15]);

        $talent              = new Talent;
        $talent->name        = 'Wall Jump';
        $talent->description = "<p>You can use your momentum from a jump to propel yourself off a wall. If you're adjacent to a wall at the end of a jump (whether performing a High Jump, Long Jump, or Leap), you don't fall as long as your next Action is another jump. Furthermore, since your previous jump gives you momentum, you can use High Jump or Long Jump as a single Action, but you don't get to Stride as part of the Activity.</p>
<p>You can use Wall Jump only once in a turn, unless you have at least 15 ranks in Athletics, in which case you can use Wall Jump as many times as you can use consecutive jump Actions in that turn.</p>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 7]);
        $talent->skills()->save(app()->skills['Athletics'], ['dc' => 10]);

        $talent              = new Talent;
        $talent->name        = 'Ward Medic';
        $talent->description = "<p>You've studied in large medical wards, treating several patients at once and tending to all their needs. When you use Treat Disease or Treat Wounds, you can treat more targets.</p>
<table>
    <thead>
        <tr>
            <th>Minimum ranks in Medicine</th>
            <th>Maximum number of patients</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>5</td>
            <td>2</td>
        </tr>
        <tr>
            <td>10</td>
            <td>4</td>
        </tr>
        <tr>
            <td>15</td>
            <td>8</td>
        </tr>
    </tbody>
</table>";
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 2]);
        $talent->skills()->save(app()->skills['Medicine'], ['dc' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Wary Disarmament';
        $talent->description = '<p>If you trigger or set off a trap while disarming it, you gain a +2 circumstance bonus to your AC or Save against the device or trap. This applies only to attacks or effects triggered by your failed attempt, not to any later ones, such as additional attacks from a complex trap.</p>';
        $helper->addTypesToSimpleObject($talent, ['Skill', 'Talent' => 2]);
        $talent->skills()->save(app()->skills['Thievery'], ['dc' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Petrification Immunity';
        $talent->description = '<ul>
    <li>You are now immune to Petrification effects.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 12]);
        $talent->feats()->save(app()->feats['Petrification Resistance']);

        $talent              = new Talent;
        $talent->name        = 'Poison Immunity';
        $talent->description = '<ul>
    <li>You are immune to Poison</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Poison', 'Talent' => 12]);

        $talent              = new Talent;
        $talent->name        = 'Charm Immunity';
        $talent->description = '<ul>
    <li>You are now immune to Charm effects.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 12]);
        $talent->feats()->save(app()->feats['Charm Resistance']);

        $talent              = new Talent;
        $talent->name        = 'Daylight Adaptation';
        $talent->requirement = 'Light blindness or light sensitivity';
        $talent->description = '<p>You have become accustomed to living under the bright light of day.</p>
<ul>
    <li>Increase your CON by 1, up to a maximum of 20.</li>
    <li>You no longer suffer the penalties form Light Blindness and/or Sunlight Sensitivity</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Talent' => 3]);
    }
}
