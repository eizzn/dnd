<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeatsTransformationsSeeder extends Seeder
{
    public function run()
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $feat                    = new Feat;
        $feat->name              = 'Lesser Vampire Spawn';
        $feat->short_description = 'You become a Vampire Spawn';
        $feat->description       = "<p>You have been bitten by a Vampire and have accepted some of its blood, but you are not a full vampire.</p>
<ul>
    <li>Increase your DEX score by +1 to a maximum of 20</li>
    <li>You gain a pool of energy called Blood Points. You may have at most 2 Blood Point at one time. Certain Actions gain you Blood Points and you may spend Blood Points to take some Actions. At the rise of each new day, you automatically lose all your Blood Points.</li>
    <li>You gain a Bite Attack. You may only use this Bite attack against targets that you have successfully Grappled. If you deal damage with your Bite attack and the target is not Undead and not a Construct, you deal 1D4 Piercing damage + your STR modifier and 1D6 Negative damage. You heal damage equal to the Negative damage you dealt. You also gain 1 Blood Point. If the creature dies from this damage, you gain 2 Blood Points instead. Creatures of CR 1/4 or less provides no Blood Points.</li>
    <li>
        <p>You gain a list of powers that you can use by spending Blood Points</p>
        <dl>
            <dt>Vampiric Surge</dt> <dd>You may spend 1 Blood Point as a Free Action and gain a Heroic Surge which you must use immediately.</dd>
            <dt>Unearthly Reflexes</dt> <dd>You may spend 1 Blood Point as a Free Action to gain the effects of the Improved Evasion feat until the beginning of your next turn.</dd>
            <dt>Defy Gravity</dt> <dd>You may spend 1 Blood Point as an Action and gain the effects of the Spell Spider Climb for 1 minute.</dd>
            <dt>Unearthly Jump</dt> <dd>You may spend 1 Blood Point as an Action and gain a +20 bonus to Athletics (Jump) checks</dd>
        </dl>
    </li>
    <li>You gain Darkvision out to 60 feet if you do not already have it.</li>
    <li>You gain the Undead type and are affected by all effects that affect Undead.</li>
    <li>While in sunlight, you suffer a -1 penalty on all rolls.</li>
    <li>You gain Vulnerability to Cold Iron, Fire and Positive damage</li>
    <li>You gain Resistance to Negative damage</li>
    <li>If you gain the Vampire's Curse feat, it replaces this feat and you may take another Feat.</li>
    <li>You cannot gain the Curse of Lycanthropy Feat</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Undead']);

        $feat                    = new Feat;
        $feat->name              = "Vampire's Curse";
        $feat->short_description = 'You become a Vampire';
        $feat->description       = '<p>Vampires are spawned into the world when a mortal contracts the Sanguine Curse. You gain the following characteristics.</p>
<ul>
    <li>Increase your DEX score by +2 and your CHA score by +1, up to a maximum of 22.</li>
    <li>You gain a pool of energy called Blood Points. You may have at most 4 Blood Points at one time. Certain Actions gain you Blood Points and you may spend Blood Points to take some Actions. At the rise of each new day, you automatically lose 2 Blood Point unless you rest at least 10 hours in a coffin, in which case you only lose 1 Blood Point. If at any time, you have negative Blood Points, you lose control of yourself and must Feed on living blood to regain Blood Points until you no longer have a negative Blood Point pool.</li>
    <li>You gain a Bite attack. You may only use this Bite attack against targets that you have successfully Grappled. If you deal damage with your Bite attack and the target is not Undead and not a Construct, you deal 1D6 Piercing damage + your STR modifier and 2D6 Negative damage. You heal damage equal to the Negative damage you dealt. You also gain 1 Blood Point. If the creature dies from this damage, you gain 3 Blood Points instead. Creatures of CR 1/4 or less provides 1 Blood Point only when they die from your Bite attack.</li>
    <li>
        <p>You gain a list of powers that you can use by spending Blood Points</p>
        <dl>
            <dt>Vampiric Surge</dt> <dd>You may spend 1 Blood Point as a Free Action and gain a Heroic Surge which you must use immediately.</dd>
            <dt>Vampiric Mist</dt> <dd>You may spend 2 Blood Points as an Action and cast the spell Misty Step.</dd>
            <dt>Defy Gravity</dt> <dd>You may spend 1 Blood Point as an Action and gain the effects of the Spell Spider Climb for 1 minute.</dd>
            <dt>Unearthly Jump</dt> <dd>You may spend 1 Blood Point as an Action and gain a +20 bonus to Athletics (Jump) checks</dd>
            <dt>Unearthly Reflexes</dt> <dd>You may spend 1 Blood Point as a Free Action to gain the effects of the Improved Evasion feat until the beginning of your next turn.</dd>
            <dt>Deathly Horror</dt> <dd>You my spend 3 Blood Points as an Action and emit a ghastly distortion of your true form. A creature of your choice within 30 feet of you must succeed on a WIS Save or become Frightened: 10. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a success. A creature that succeeds on its Save is immune to this ability for 24 hours.</dd>
        </dl>
    </li>
    <li>You gain Darkvision out to 60 feet if you do not already have it.</li>
    <li>You cannot die of old age, and you do not require air, food or drink.</li>
    <li>You gain the Undead type and are affected by all effects that affect Undead.</li>
    <li>If a spell or ability other than your own would cause you to gain Hit Points, you lose that many temporary Hit Points instead.</li>
    <li>You are forbidden from entering a residence without an invitation from one of the occupants.</li>
    <li>While in sunlight, you take 20 points of Positive damage each turn and have Disadvantage on all Attack rolls and Ability checks. You cannot use Blood Points while in sunlight.</li>
    <li>You gain Vulnerability to Cold Iron, Fire and Positive damage.</li>
    <li>If you end your turn with your heart submerged under running water, you suffer 20 Acid Damage. While you are under running water, you cannot use Blood Points</li>
    <li>You gain Immunity to Negative damage (but you do not heal from Negative damage).</li>
    <li>Having a wooden stake driven through your heart causes you to be Destroyed.</li>
    <li>You cannot gain the Curse of Lycanthropy Feat</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Undead']);

        $feat              = new Feat;
        $feat->name        = 'Vampiric Constitution';
        $feat->description = '<p>You gain the following.</p>
<ul>
    <li>You heal from Negative Damage.</li>
    <li>You gain Resistance to Bludgeoning, Piercing, and Slashing damage.</li>
    <li>While you have at least 1 Blood Point, you Regenerate 3 Hit Points every round. You do not Regenerate while in sunlight or under running water. Being hit by Holy Water causes the Regeneration to stop for 10 minutes.</li>
    <li>You may spend 1 Blood Point to increase your Regeneration to 10. This lasts for 1 minute but not if you are suffering from any of the conditions that would prevent your normal Regeneration.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Undead']);
        $feat->parent_feats()->save(app()->feats["Vampire's Curse"]);

        $feat                    = new Feat;
        $feat->name              = 'Improved Blood Pool';
        $feat->short_description = 'You have greater control of your need for blood';
        $feat->description       = '<p>You gain the following abilities.</p>
<ul>
    <li>Increase your Blood Pool maximum by +3</li>
    <li>When you rest at least 10 hours in a coffin a day, you do not lose any Blood Points.</li>
    <li>Having a wooden stake driven through your heart causes you to be Paralyzed, so long as the wooden stake is in your heart.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Undead']);
        $feat->parent_feats()->save(app()->feats["Vampire's Curse"]);

        $feat                    = new Feat;
        $feat->name              = 'Sanguine Magic';
        $feat->short_description = 'You gain some of the magical abilities of a Vampire';
        $feat->description       = "<p>Increase your Blood Pool maximum by +1. When you gain this feat, pick 2 of the following spells. You may cast the chosen spells by spending Blood Points.</p>
<table>
    <thead>
        <tr>
            <th>Spell</th>
            <th>Blood Points</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Spider Climb</td>
            <td>Always active while you have at least 2 Blood Points</td>
            <td>Free Action</td>
        </tr>
        <tr>
            <td>Charm as a Gaze attack</td>
            <td>1</td>
            <td>1 Action</td>
        </tr>
        <tr>
            <td>Aerial Form but only as a Small Bat (Self only, for 1 hour)</td>
            <td>2</td>
            <td>3 Actions</td>
        </tr>
        <tr>
            <td>Bull's Strength (Self only, for 5 rounds)</td>
            <td>2</td>
            <td>1 Action</td>
        </tr>
        <tr>
            <td>Haste (Self only, for 5 rounds)</td>
            <td>3</td>
            <td>Free Action</td>
        </tr>
        <tr>
            <td>Gaseous Form (Self only, for 1 hour)</td>
            <td>3</td>
            <td>3 Actions</td>
        </tr>
    </tbody>
</table>
<p>If you fall to 0 Hit Points, you automatically cast Gaseous Form as a Free Action (even if you did not choose the Gaseous Form spell), spending the Blood Points even if you do not have enough. This can cause you to have negative Blood Points. The effect lasts for 2 hours and when it ends, you are forever destroyed unless you find a crypt or coffin to rest in. After 2 hours, your Hit Points becomes 1.</p>
<p>You may take this feat multiple times, each time you choose two spells.</p>";
        $helper->addTypesToFeat($feat, ['Undead']);
        $feat->parent_feats()->save(app()->feats["Vampire's Curse"]);

        $feat                    = new Feat;
        $feat->name              = 'Vampire Lord';
        $feat->short_description = 'Your cursed blood can now create other vampires, which fall under your control';
        $feat->description       = "<ul>
    <li>Increase your Blood Pool maximum by +1.</li>
    <li>Increase your CHA by +2, to a maximum of 22.</li>
    <li>You can now create vampires. If a mortal drinks your blood, they gain the Lesser Vampire Spawn feat and becomes a vampire spawn. If you have both the Improved Blood Pool and Sanguine Magic Feat, then you may choose to make the mortal a full vampire instead of a Vampire Spawn. The mortal gains the Vampire's Curse Feat instead and becomes a vampire and you suffer 2 points of CON damage and lose 1 Blood Point. You do not recover the lost Blood Point so long as the Vampire you created exists.</li>
    <li>You can exert control over vampire spawns and vampires you created. You can, as an Action, cast Suggestion on them at will. The target suffers a -10 penalty on their Save.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Undead']);
        $feat->parent_feats()->save(app()->feats['Vampiric Constitution']);

        /**********************************************************************/

        $feat                    = new Feat;
        $feat->name              = 'Curse of Lycanthropy';
        $feat->short_description = 'You contract the Curse of Lycanthropy';
        $feat->description       = "<p>You gain the following abilities and features.</p>
<ul>
    <li>
        <p>As a Triple Action, you can transform into a monstrous hybrid: half-beast, half-sentient. While in your hybrid form, the following applies.</p>
        <ul>
            <li>You gain a +1 bonus to Str. If your STR is still less than 13, it becomes 13.</li>
            <li>You gain a +2 bonus to CON. If your CON is still less than 14, it becomes 14.</li>
            <li>Any armor you are wearing merges into your Hybrid Form or immediately drops to the ground.</li>
            <li>While transformed and not wearing any armor or using a shield, you gain the benefits of the Tough Defense feat.</li>
            <li>While transformed you can use weapons and equipment as normal, unless specified elsewhere.</li>
            <li>You gain a Claw attack that deals 1D8 + STR modifier Slashing damage that is considered Cold Iron and Silvered.</li>
            <li>You gain a Bite attack that deals 1D10 + STR modifier Piercing damage that is considered Cold Iron and Silvered. If you deal 5 or more damage to a creature with your Bite attack, they must make a DC 15 CON Save. if they fail, they gain the Curse of Lycanthropy feat with the same type as your own.</li>
            <li>You gain an additional Action. This Action can only be used to make a Bite Attack. You may not use this additional Action if you have already made a Bite attack this turn, and you may only gain this additional Action if your have made 2 successful Claw attacks, one with each hand.</li>
            <li>Your ability to speak is reduced to short, basic, guttural responses.</li>
            <li>You gain Vulnerability to Silvered Weapons</li>
            <li>You can't cast spells or Concentrate on spells.</li>
            <li>
                <p>While in your Hybrid form, you must succeed at a DC 10 WIS Save at the beginning of each turn or lose control. If you are in the light of a full moon, you automatically fail this Save.</p>
                <ul>
                    <li>You must move toward the closest non-player creature you can see, smell or hear, prioritising helpless creatures. If you end your movement and no non-player creature is within 5 feet of you , then you must use your another Action to move towards one.</li>
                    <li>If there is a non-player creature within 5 feet of you and you have an Action, you must make a melee attack against it, prioritizing helpless creatures.</li>
                    <li>If you made a melee attack against a creature, and that creature is still alive, you must use any remaining Actions to attack that creature.</li>
                </ul>
            </li>
            <li>Your Hybrid form lasts for a number of hours equal to your CON modifier (minimum of 1, unless you involuntarily turned due to a failed WIS Save during a full moon) and ends early if you are knocked unconscious or reduced to 0 Hit Points. You can end your Hybrid Form by using a Triple Action on your turn.</li>
        </ul>
    </li>
    <li>You gain the Shapechanger type and are affected by all effects that affect Shapechangers.</li>
    <li>If you are subjected to the light of a full moon, you must succeed at a DC 20 WIS Save or automatically turn into your Hybrid Form and cannot transform back until dawn. If you succeed in this Save, you are immune to its effects for 24 hours.</li>
    <li>
        <p>The specific form of Lycanthropy must be chosen when this feat is taken.</p>
        <ul>
            <li>Were Bear</li>
            <li>Were Boar</li>
            <li>Were Crocodile</li>
            <li>Were Rat</li>
            <li>Were Shark</li>
            <li>Were Tiger</li>
            <li>Were Wolf</li>
        </ul>
    </li>
    <li>You cannot gain the Lesser Vampire Spawn or the Vampire's Curse Feat.</li>
    <li>If you deal 10 or more damage to a Vampire or Vampire Spawn with a Claw or Bite attack, then the Vampire or Vampire Spawn also loses 1 Blood Point.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Lycanthrope', 'Shapechanger']);

        $feat              = new Feat;
        $feat->name        = "Lycanthrope's Vigor";
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain a +2 bonus to your CON. If your CON is still less than 16, it becomes 16.</li>
    <li>You gain Resistance to all Bludgeoning, Piercing, and Slashing attacks.</li>
    <li>The Save DC to resist becoming a Lycanthrope from your Bite attack becomes DC 20.</li>
</ul>
<p>Based on your lycanthrope type, you also gain the following.</p>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Features</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Were Bat</td>
            <td>
                <ul>
                    <li>+2 bonus to DEX, to a maximum of 20</li>
                    <li>Fly 40 feet</li>
                    <li>You gain the Keen Sense Feature (Hearing)</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Were Bear</td>
            <td>
                <ul>
                    <li>+4 bonus to STR, to a maximum of 20</li>
                    <li>+2 bonus to CON, to a maximum of 20 (this is in addition to the +2 bonus from above)</li>
                    <li>You gain the Scent Feature</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Were Boar</td>
            <td>
                <ul>
                    <li>+3 bonus to STR, to a maximum of 18</li>
                    <li>+6 bonus to CON, to a maximum of 22 (this is in addition to the +2 bonus from above)</li>
                    <li>Replace your Bite attack with a Tusk attack (2D6).</li>
                    <li>You gain the Die Hard Feat</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Were Cat</td>
            <td>
                <ul>
                    <li>+4 bonus to DEX, to a maximum of 20</li>
                    <li>+2 bonus to CON, to a maximum of 20 (this is in addition to the +2 bonus from above)</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Were Crocodile</td>
            <td>
                <ul>
                    <li>+4 bonus to DEX, to a maximum of 18</li>
                    <li>+4 bonus to CON, to a maximum of 20 (this is in addition to the +2 bonus from above)</li>
                    <li>Your Bite attack deals 2D10 damage</li>
                    <li>You gain a Swim Speed of 30</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Were Rat</td>
            <td>
                <ul>
                    <li>+6 bonus to DEX, to a maximum of 22</li>
                    <li>+1 bonus to CON, to a maximum of 20 (this is in addition to the +2 bonus from above)</li>
                    <li>You gain the Scent Feature</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Were Shark</td>
            <td>
                <ul>
                    <li>+6 bonus to STR, to a maximum of 20</li>
                    <li>+4 bonus to CON, to a maximum of 20 (this is in addition to the +2 bonus from above)</li>
                    <li>Swim 60 feet</li>
                    <li>You gain the Scent Feature</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Were Tiger</td>
            <td>
                <ul>
                    <li>+4 bonus to DEX, to a maximum of 18</li>
                    <li>+4 bonus to CON, to a maximum of 20 (this is in addition to the +2 bonus from above)</li>
                    <li>+5 bonus to Perception checks that rely on hearing and smell</li>
                    <li>You gain the Pounce Feat</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Were Wolf</td>
            <td>
                <ul>
                    <li>+2 bonus to DEX, to a maximum of 18</li>
                    <li>+2 bonus to CON, to a maximum of 20 (this is in addition to the +2 bonus from above)</li>
                    <li>You gain the Scent Feature</li>
                    <li>You gain a +2 bonus to all Perception checks</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>';
        $helper->addTypesToFeat($feat, ['Lycanthrope', 'Shapechanger']);
        $feat->parent_feats()->save(app()->feats['Curse of Lycanthropy']);

        $feat                    = new Feat;
        $feat->name              = 'Lycanthrope Mastery';
        $feat->short_description = 'You have full control of your lycanthropic transformation';
        $feat->description       = '<ul>
    <li>You now always succeed your Save to prevent yourself from losing control.</li>
    <li>You now can choose to not transform during a full moon.</li>
    <li>You gain the Wild Empathy Class Feature, but only with animals of your lycanthropy type</li>
    <li>You can now speak normally while transformed. This does not allow you to cast spells while transformed. You may take the Wild Shape Spell Caster feat without meeting the requirements. This will allow you to cast spells while transformed.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Lycanthrope', 'Shapechanger']);
        $feat->parent_feats()->save(app()->feats['Curse of Lycanthropy']);

        /**********************************************************************/

        $feat                    = new Feat;
        $feat->name              = 'Mummy Lord';
        $feat->short_description = 'You are blessed by your divine power with the secrets of becoming a Mummy Lord';
        $feat->description       = '<p>You are blessed with the secrets of becoming a Mummy Lord.</p>
<ul>
    <li>You must learn the Ritual of Mummification Formula and teach it to someone else so that they may perform the embalming process.</li>
</ul>
<p>Once you complete the ritual, you gain the following abilities.</p>
<ul>
    <li>You become an undead (you gain the Undead type) and no longer have a CON score. Despite being undead, you still heal from healing spells.</li>
    <li>You gain Vulnerability to Positive damage</li>
    <li>You are immune to Poison, Disease, Precision damage, and Negative damage.</li>
    <li>You are immune to the Charmed, Exhaustion, and Frightened Conditions.</li>
    <li>Increase your STR by +4, to a maximum of 20.</li>
    <li>You gain Rejuvenation - If your body is destroyed, your divine gifted powers forms a new body in 24 hours, so long as your heart is intact. The new body forms within 5 feet of your heart.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Undead', 'Divine']);

        $feat              = new Feat;
        $feat->name        = 'Improved Mummy Lord';
        $feat->description = '<p>You gain the following abilities</p>
<ul>
    <li>You may cast the spell Disguise Self as an Action with a duration of 24 hours. Unless you have the spell from a different spell list, you may only cast it to appear as you did before becoming undead.</li>
    <li>You may cast the spell Fear as an Action. If you do, it dispels your Disguise Self spell if it is active.</li>
    <li>You may cast the Sand Form spell as an Action.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Undead', 'Divine']);
        $feat->parent_feats()->save(app()->feats['Mummy Lord']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Disguise Self'],
            3 => ['Fear', 'Sand Form', 'Wall of Sand'],
        ]);

        /**********************************************************************/

        $feat              = new Feat;
        $feat->name        = 'Lichdom';
        $feat->description = "<p>You perform a ritual to become a Lich. You must follow these steps.</p>
<ul>
    <li>You must learn the Formula for a Lich's Phylactery and create your Phylactery.</li>
    <li>You must learn the Formula for a Potion of Lichdom, or have someone make it for you. You then drink the potion and hope that it kills you, at which point you become a lich.</li>
</ul>
<p>You gain the following benefits</p>
<ul>
    <li>You gain the Undead type</li>
    <li>You stop aging and are immune to any effect that would age you and you cannot die from old age.</li>
    <li>You do not require air, food, drink or sleep.</li>
    <li>You gain Vulnerability to Positive damage</li>
    <li>You gain Resistance to Cold, Electricity, Fire, Piercing and Slashing damage</li>
    <li>You gain immunity to Negative and Poison damage and are immune to all Diseases (unless it is a Disease or Poison that specifically affects Undead or Liches)</li>
    <li>You gain the ability to drain the soul from a recently dead creature (less than 1 hour) and charge your Phylactery with the soul. This requires a Triple Action and you must be touching the body. You gain 1/2 the CR of souls absorbed in this way. If you sacrifice a living creature in a special ritual (Ritual of Soul Harvesting), you gain Double the CR of the sacrificed creature. You may also use soul larvas to recharge your Phylactery. You gain the full CR of the larvas CR to recharge your Phylactery. Larvas cannot be sacrificed as they are the remains after death. If the CR of the creature is 1/4 or less (after adjusting for the method of absorption), then it does not increase the CR pool of your Phylactery.</li>
    <li>You have torn your soul from your body and trapped it in your Phylactery. If your physical form is destroyed, your soul retreats to your Phylactery, even if it is on a different Plane of existence (although this will require 3 months for your soul to travel through the Planes to where your Phylactery is). Once your soul is in your Phylactery, you must use up 10 CR of souls to form a new physical body. This will require 1 week to complete. If you do not have sufficient souls to form a new physical body, then you become a Demilich (under the DM's control).</li>
    <li>You no longer have a CON. Whenever you are required to make a CON Save or CON check, assume you rolled a Success.</li>
</ul>
<p>Your Phylactery can hold up to 30 CR level of souls. Your Phylactery loses 1 CR level of souls per week.</p>
<p>Phylactery statistics</p>
<dl>
    <dt>AC</dt> <dd>18</dd>
    <dt>HP</dt> <dd>90</dd>
    <dt>Damage Resistances</dt> <dd>Negative, Cold, Electricity, Fire, Force, Sonic</dd>
    <dt>Damage Immunities</dt> <dd>Poison, Psionics</dd>
</dl>
<p>If you ever have less souls than your Character Level, you suffer the following.</p>
<ul>
    <li>You cannot take more than 2 Movement Actions</li>
    <li>You cannot take the Dodge or Disengage Actions.</li>
    <li>You cannot use Reactions</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Undead']);
        $feat->parent_feats()->save(app()->feats['Craft Wondrous Item']);
        $feat->parent_feats()->save(app()->feats['Necromancer']);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 12]);

        $feat              = new Feat;
        $feat->name        = 'Improved Lichdom';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain a Touch attack that you can make as an Action. This attack deals 2D10 Negative damage, 1 CON damage, and 1 STR damage, you heal equal to the Negative damage dealt. If you deal 15 or more Negative damage in a single attack, you may add 1 CR level to your Phylactery.</li>
    <li>Your Phylactery can now hold up to 40 CR levels of souls.</li>
    <li>Your Phylactery now loses 1 CR level of souls per month instead of per week.</li>
    <li>You gain Immunity to the Charmed, Paralyzed, and Frightened conditions</li>
</ul>
<p>Your appearance has grotesquely transformed. Your skin has become rotten and pale, while your figure has become gaunt, radiating a ghastly aura. You can suppress this for 1 day by spending 1 CR of souls from your Phylactery. Under certain situations, your true form will reveal itself even when you have spent souls to suppress your appearance.</p>
<ul>
    <li>Becoming unconscious.</li>
    <li>Entering Hallowed ground</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Undead']);
        $feat->parent_feats()->save(app()->feats['Lichdom']);

        $feat              = new Feat;
        $feat->name        = 'Greater Lichdom';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>Your Phylactery can now hold up to 50 CR levels of souls.</li>
    <li>Your Phylactery now loses 1 CR level of souls every 6 months instead of every month.</li>
    <li>As an Action, you may sacrifice a number of souls to recover a Spell Slot. To recover a 3rd level Spell Slot, you must sacrifice 3 CR of souls. You may only recover 1 Spell Slot per Action.</li>
    <li>You may use CR of souls as Spell Points, 1 CR of souls as 1 Spell Point.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Undead']);
        $feat->parent_feats()->save(app()->feats['Improved Lichdom']);

        /**********************************************************************/

        $feat              = new Feat;
        $feat->name        = "Curst's Curse";
        $feat->description = "<p>Cursts are undead humanoids trapped under a curse. By casting Bestow Curse on a newly dead corpse, then Create Undead, the humanoid corpse animates as a Curst at the next sunset.</p>
<p>The creator does not necessarily gain control of the undead, but can gain control through other means.</p>
<p>The curst gains the following</p>
<ul>
    <li>Undead (no need to drink, eat, or breathe)</li>
    <li>Ability Score modifications
        <ul>
            <li>STR +2</li>
            <li>INT -4 (min 3)</li>
            <li>WIS -6 (min 1)</li>
            <li>CHA -2 (min 1)</li>
        </ul>
    </li>
    <li>Natural Armor +3</li>
    <li>Immunity to Cold, Electricity, and Poison</li>
    <li>Resistance to Fire</li>
    <li>Fast-healing 1 Hit Point per round</li>
    <li>Un-killable - Only two ways exist to destroy a curst permanently. One is to destroy its body (by total immersion in Acid, or a Disintegrate or Undeath to Death spell). The other is to remove the curse that keeps it from dying. The caster of the Remove Curse spell must succeed on a Caster Level check against DC (10 + the Curst's CR) to successfully remove the curse.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Undead']);

        /**********************************************************************/

        $feat              = new Feat;
        $feat->name        = 'Returned as Ghost';
        $feat->description = "<p>Somehow, you have returned to the mortal world as a Ghost. You gain the following</p>
<ul>
    <li>You gain the Undead Type, and no longer age, need to eat, drink, sleep, or breathe</li>
    <li>You are incorporeal, you can pass through up to 1 foot of stone or wood, 3 inches of most metals, or up to 1 inch of lead. You can choose to enter the Ethereal Plane and bypass any barrier, unless it is treated with any amount of Gorgon's blood, which you cannot pass through from the Material or Ethereal Plane.</li>
    <li>You gain a Fly Speed of 40.</li>
    <li>You can not cast any Spells that require a Material Casting on the Material Plane</li>
    <li>You cannot touch anything from the Material Plane. If something from the Material Plane is brought to the Ethereal, you can touch it.</li>
    <li>You no longer have a STR or CON Attribute.</li>
    <li>You gain a Touch Attack called Withering Touch. It deals 1D3 Negative Damage and 1 STR Damage</li>
    <li>As a Double Action, you can enter the Ethereal Plane or manifest from the Ethereal Plane into the Material Plane. While you are on the Ethereal Plane, you cannot be seen (except by abilities that can see into the Ethereal Plane) and you cannot be interacted with from the Material Plane. You can hear those that are on the Material Plane. While on the Ethereal Plane you cannot interact with anything on the Material Plane, you must manifest onto the Material Plane to use your Withering Touch Attack.</li>
    <li>You gain Darkvision out to 60 feet</li>
    <li>You gain Resistance to Acid, Cold, Fire, Electricity, Sonic, Bludgeoning, Piercing, and Slashing Damage</li>
    <li>You are Immune to Poison and Negative Damage. You cannot be Charmed, Grappled, Paralyzed, Petrified, become Prone or Restrained. You cannot gain levels of Exhaustion.</li>
    <li>You gain Vulnerability (Double Damage) from Positive or Holy Damage. Any weapon that is Silver, Gold, Platinum, Mithral, or Adamantine deals Double Damage, and you cannot touch these metals even if brought to the Ethereal Plane.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Undead', 'Incorporeal']);

        $feat              = new Feat;
        $feat->name        = 'Improved Returned as Ghost';
        $feat->description = '<p>You become a Greater Ghost. You gain the following</p>
<ul>
    <li>Your Withering Touch attack now deals 1D4 Negative and 2 STR Damage</li>
    <li>You gain a Gaze Attack called Horrifying Visage. Each non-undead creature within 60 feet of you that can see you must make a DC 13 WIS Save or be Frightened for 1 minute. If the Save Critically Fails, they also age 1D4 X 10 years. A Frightened Target can repeat the Save at the end of each of their turns, ending the Frightened Condition on a Success. A Target cannot be affected by your Horrifying Visage more than once each 24 hours. The aging effect can be reversed with a Restoration Spell.</li>
    <li>You gain the ability to Possess a humanoid 3/day (See the Possession ability of the Greater Ghost).</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Undead', 'Incorporeal']);
        $feat->parent_feats()->save(app()->feats['Returned as Ghost']);
    }
}
