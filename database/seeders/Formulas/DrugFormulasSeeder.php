<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class DrugFormulasSeeder extends Seeder
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
        $formula->name        = 'Agony';
        $formula->type        = 'Drug';
        $formula->price       = '200 gp';
        $formula->method      = 'Ingested DC 18';
        $formula->crafting    = '<ul>
    <li>Alchemy DC 25</li>
</ul>';
        $formula->bulk        = '-';
        $formula->description = '<p>This thick, reddish liquid is the distilled essence of pain, captured using special spells or items*. It is highly sought after by outsiders.</p>
<dl>
    <dt>Initial Effect</dt> <dd>You are Stunned for 1D4+1 rounds and can take only 2 Actions per turn for 1D6 minutes after that.</dd>
    <dt>Secondary</dt> <dd>You gain a 1D4+1 Enhancement bonus to CHA for 1 hour.</dd>
    <dt>Side Effect</dt> <dd>You experience feelings of intense pleasure for 1D4 hours.</dd>
    <dt>Overdose</dt> <dd>If you take more than one dose in a 24-hour period, you immediately fall unconscious for 1D4 hours (CON Save DC 18 negates).</dd>
    <dt>Withdrawal Effects</dt> <dd>Every action sends shooting pain through your nerves. Using more than 2 Actions in a round nauseates you with pain for the following round.</dd>
    <dt>Junkie</dt> <dd>You become immune to Fear effects, Morale effects, and any other effects that would affect your emotions for the duration of Agony.</dd>
    <dt>Addiction</dt> <dd>Extreme</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Alindluth';
        $formula->type        = 'Drug';
        $formula->price       = '10 gp';
        $formula->method      = 'Ingested DC 13';
        $formula->bulk        = '-';
        $formula->description = '<p>When ingested, alindluth deadens all pain and prevents shock and nausea effects for a few minutes. There are no known side effects, but if the substance is used too soon after first exposure (or in too large a dose; dosages vary by body volume and weight), it induces a short-duration coma.</p>
<dl>
    <dt>Initial Effect</dt> <dd>Damage Reduction 1/- to all Physical damage for 10 minutes</dd>
    <dt>Secondary Effect</dt> <dd>Advantage on CON Saves</dd>
    <dt>Side Effect</dt> <dd>None</dd>
    <dt>Overdose</dt> <dd>If you take a second dose within three hours of the first must make a CON Save DC 14 or become Unconscious for 10 minutes</dd>
    <dt>Addiction</dt> <dd>None</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Baccaran';
        $formula->type        = 'Drug';
        $formula->price       = '10 gp';
        $formula->method      = 'Ingested DC 14';
        $formula->crafting    = '<ul>
    <li>Alchemy DC 20</li>
</ul>';
        $formula->bulk        = '-';
        $formula->description = '<p>This pasty substance is dried and kept as a powder or sometimes left as a paste. The ingredients are numerous and difficult to obtain.</p>
<dl>
    <dt>Initial Effect</dt> <dd>1D4 STR Damage</dd>
    <dt>Secondary Effect</dt> <dd>1D4 +1 Enhancement Bonus to WIS for 10 minutes</dd>
    <dt>Side Effects</dt> <dd>Those under the effect of baccaran take a -4 circumstance penalty on Save involving illusion for 2D4 hours after using this mild hallucinogen</dd>
    <dt>Overdose</dt> <dd>If more than one dose is taken in a 24-hour period, the user immediately takes 2D6 points of damage and the side effect is doubled</dd>
    <dt>Addiction</dt> <dd>Low</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Chaunsel';
        $formula->type        = 'Drug';
        $formula->price       = '20 gp';
        $formula->method      = 'Contact DC 12';
        $formula->bulk        = '-';
        $formula->description = "<p>Upon contact with bare skin, chaunsel makes the affected area extremely sensitive for up to about twenty minutes.</p>
<p>It is often used by thieves or others working in darkness, applied to their fingertips to make them able to feel tiny details, seams, and such. Overdosing causes days of numbness in the affected area.</p>
<dl>
    <dt>Initial Effect</dt> <dd>1D4 damage</dd>
    <dt>Secondary Effect</dt> <dd>Gain Advantage on INT (Insight), WIS (Perception), and on thieves tools checks</dd>
    <dt>Side Effect</dt> <dd>None</dd>
    <dt>Overdose</dt> <dd>If you take a second does within twelve hours of the first, you must make a WIS Save DC 16 or overstimulate your nerves, suffering 2D6 Poison damage and suffer Disadvantage on all INT (Insight), WIS (Perception), and thieve\'s tools checks for 1D4 days</dd>
    <dt>Addiction</dt> <dd>Low</dd>
</dl>";
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Devilweed';
        $formula->type        = 'Drug';
        $formula->price       = '20 gp';
        $formula->method      = 'Contact DC 12';
        $formula->crafting    = '<ul>
    <li>Alchemy DC 20</li>
</ul>';
        $formula->bulk        = '-';
        $formula->description = '<p>Leaves from the wyssin plant are dried and rolled into a tobacco-like substance and smoked.</p>
<p>It is often used by thieves or others working in darkness, applied to their fingertips to make them able to feel tiny details, seams, and such. Overdosing causes days of numbness in the affected area.</p>
<dl>
    <dt>Initial Effect</dt> <dd>1 WIS Damage</dd>
    <dt>Secondary Effect</dt> <dd>The smoker gains a +2 alchemical bonus to STR for 2 hours</dd>
    <dt>Side Effect</dt> <dd>A creature under the effect of devilweed is easily confused and acts skittish (treat as Shaken)</dd>
    <dt>Overdose</dt> <dd>None</dd>
    <dt>Addiction</dt> <dd>Low</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Dream Syrup';
        $formula->type        = 'Drug';
        $formula->price       = '800 gp';
        $formula->method      = 'Ingested WIS DC 14';
        $formula->description = '<p>Gray or white with a sweet taste, this drug provides very pleasant dreams.</p>
<dl>
    <dt>Initial Effect</dt> <dd>The creature wakes up in a smug state and is similar to being charmed for 1D4 hours. It cannot attack or harm anybody with offensive or magical abilities. In addition, a creature has Advantage to its ability checks to interact with the creature. If somebody harms the creature during this period, the effect of the drug fades immediately.</dd>
</dl>';
        $helper->saveFeature($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Haunspeir';
        $formula->type        = 'Drug';
        $formula->price       = '50 gp';
        $formula->method      = 'Ingested DC 12';
        $formula->bulk        = '-';
        $formula->description = '<p>Named after a wizard from Neverwinter, haunspeir is sold as a tobacco-like paste, or sometimes dried and compacted into pill form.</p>
<p>It is used by wizards and others who need to rapidly boost their INT.</p>
<dl>
    <dt>Initial Effect</dt> <dd>1D4 points of damage</dd>
    <dt>Secondary Effect</dt> <dd>1D4 +1 Enhancement bonus to INT for 1D10 + 15 minutes</dd>
    <dt>Side Effect</dt> <dd>All Slashing and Piercing attacks deal additional damage to you while the drug is in effect.</dd>
    <dt>Overdose</dt> <dd>If more than one does is taken in a 24-hour period, you immediately suffer 2D4 points of damage and the Side Effects are doubled.</dd>
    <dt>Addiction</dt> <dd>Low</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Jhuild';
        $formula->type        = 'Drug';
        $formula->price       = '100 gp';
        $formula->method      = 'Ingested DC 15';
        $formula->bulk        = '-';
        $formula->description = '<p>Also called Firewine, this dark reddish brew is made from certain grapes, fruits, and herbs grown  near the city of Urling. It is a common drink for wealthier berserkers in Rashemen. Like alcoholic drinks jhuild is technically a poison, and a character who drinks it must succeed a CON Save to avoid its effects. Those who desire .</p>
<p>A bottle of jhuild costs 70 gp in Rashemen, but in other countries, it can cost 100 gp or more because of its scarcity. Non-berserkers are usually content to drink a weakened form of firewine diluted with ale, which sells for 2 sp a tankard in Rashemen, 7 to 15 gp elsewhere. This weak brew has almost the same flavor as the true drink but does not grant a STR bonus or cause unconsciousness. Visitors to Rashemen who believe themselves accustomed to jhuild are surprised to find they have been drinking the diluted version. This causes no end of amusement to the Rashemi, especially in a drinking contest with a berserker.</p>
<p>In Thay, this drink is given to the slaves, to dull their wits and strengthen them for labor.</p>
<dl>
    <dt>Initial Effect</dt> <dd>1 point of WIS damage</dd>
    <dt>Secondary Effect</dt> <dd>One minute later, you gain a +2 bonus to STR, which lasts for 2 hours</dd>
    <dt>Side Effect</dt> <dd>Once the STR bonus wears off, you suffer a -2 penalty on Attacks, Saves, and checks. Also, make another CON Save (DC 20) or immediately fall unconscious for 3D4 hours</dd>
    <dt>Overdose</dt> <dd>None</dd>
    <dt>Addiction</dt> <dd>None</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Karnmarth';
        $formula->type        = 'Drug';
        $formula->price       = '80 gp';
        $formula->method      = 'Contact DC 10 or Ingested DC 13';
        $formula->bulk        = '-';
        $formula->description = '<p>Sold as a powder or a beige-colored jelly, kammarth is made from the combination of a rare forest root and an Underdark fungus. It causes a temporary increase in Speed and reaction time.</p>
<dl>
    <dt>Initial Effect</dt> <dd>Act as if under the effects of a Fleet Step spell for the next 1D4 + 1 minutes</dd>
    <dt>Secondary Effect</dt> <dd>+2 alchemical bonus to DEX for the duration of the effect</dd>
    <dt>Side Effect</dt> <dd>Kammarth is a potent stimulant and gives you a sense of boundless energy and well-being</dd>
    <dt>Overdose</dt> <dd>If more than one dose is taken in a 8-hour period, you suffer 1D4 points of damage and become Paralyzed for 2D4 minutes. Using it more than three times in any 24-hour period causes 4D4 points of damage and Paralyzed for 2D4 hours</dd>
    <dt>Addiction</dt> <dd>Medium</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable', 'Magical']);

        $formula              = new Formula;
        $formula->name        = 'Katakuda';
        $formula->type        = 'Drug';
        $formula->price       = '80 gp';
        $formula->method      = 'Contact DC 18';
        $formula->bulk        = '-';
        $formula->description = '<p>Also called Dragonskin, this drug is imported from distant Kara-Tur, this drug is developed by an order of fighting monks of that land. It is a brown paste that hardens your skin. Because of its side effects, it was rarely used for training and saved for times when the monks expect a grate battle.</p>
<dl>
    <dt>Initial Effect</dt> <dd>None</dd>
    <dt>Secondary Effect</dt> <dd>+3 Natural Armor bonus for 30 minutes</dd>
    <dt>Side Effect</dt> <dd>When the Secondary Effect ends, you suffer wracking pains and spasms, which causes 1D4 + 1 points of temporary DEX damage</dd>
    <dt>Overdose</dt> <dd>If more than one dose is taken in a 8-hour period, you suffer 1D4 points of damage and become Paralyzed for 2D4 minutes. Using it more than three times in any 24-hour period causes 4D4 points of damage and Paralyzed for 2D4 hours</dd>
    <dt>Addiction</dt> <dd>Medium</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable', 'Magical']);

        $formula              = new Formula;
        $formula->name        = 'Luhix';
        $formula->type        = 'Drug';
        $formula->price       = '80 gp';
        $formula->method      = 'Contact DC 18';
        $formula->crafting    = '<ul>
    <li>Alchemy DC 30</li>
</ul>';
        $formula->bulk        = '-';
        $formula->description = '<p>Powdered stalks of plants that grow only in the Abyss, luhix is normally sprinkled onto a bleeding, self- inflicted wound. Then the wound is sealed either with magical healing or tightly wound bandages.</p>
<dl>
    <dt>Initial Effect</dt> <dd>1 Ability Damage to each Ability</dd>
    <dt>Secondary Effect</dt> <dd>+2 Alchemical Bonus to all ability scores for 1 hour</dd>
    <dt>Side Effect</dt> <dd>For the first minute of application, the user feels intense pain. During the time that the secondary effect is in effect, the user is immune to pain (including the effects of spells such as symbol of pain). The character takes damage as normal, but may not react normally to that damage.</dd>
    <dt>Overdose</dt> <dd>Those who take this drug more than once in 24 hours must make a separate save (CON DC 25 negates) or die in terrible pain.</dd>
    <dt>Addiction</dt> <dd>Vicious</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable', 'Magical']);

        $formula              = new Formula;
        $formula->name        = 'Mordayn Vapor';
        $formula->type        = 'Drug';
        $formula->price       = '200 gp';
        $formula->method      = 'Inhaled DC 17';
        $formula->crafting    = '<ul>
    <li>Alchemy DC 25</li>
</ul>';
        $formula->bulk        = '-';
        $formula->description = '<p>Also called Dreammist, this drug is made of roughly ground leaves of a rare herb found in southern forests, mordayn is so potent that it is taken by steeping a small amount in hot water, and then inhaling the vapors of the resultant tea. Raw mordayn powder and mordayn-tainted water are deadly poison. Taking the powder directly or drinking the water produces an immediate overdose.</p>
<p>Dreammist is renowned for the beautiful visions it induces, and the deadly peril of its sinister embrace.</p>
<dl>
    <dt>Initial Effect</dt> <dd>Exotic visions of incredible beauty enthralls you for the next 1D20 + 10 minutes. During this time you have a 50% chance to lose any action you attempt, like the Bestow Curse spell</dd>
    <dt>Secondary Effect</dt> <dd>1D4 points of CON damage and 1D4 points of WIS damage</dd>
    <dt>Side Effect</dt> <dd>The visions are incredibly beautiful and poignant. Your normal life seems drab and futile in comparison, and you ache to experience the transcendent beauty of this drug again. When the dose wears off, you must attempt a WIS Save (DC 17) or fall under a compulsion to do whatever is necessary to repeat the dreammist dose (treat this as a Compulsion similar to a Suggestion spell). This Compulsion lasts for 1D4 hours before fading</dd>
    <dt>Overdose</dt> <dd>If two doses are taken within the space of an hour, or if raw mordayn powder or mordayn tea are ingested, the drug is a deadly poison (Ingested DC 17, 1D10 CON / 1D10 CON). Mordayn vapor addicts often throw out the tea as soon as they inhale and make sure that only one dose is available at a time in order to make sure they cannot overdose on the deadly drug</dd>
    <dt>Addiction</dt> <dd>High</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Mushroom Powder';
        $formula->type        = 'Drug';
        $formula->price       = '100 gp';
        $formula->method      = 'Inhaled DC 15';
        $formula->crafting    = '<ul>
    <li>Alchemy DC 25</li>
</ul>';
        $formula->bulk        = '-';
        $formula->description = '<p>Taken from a rare blue mushroom, this powder must be inhaled. It is popular among arcane spellcasters.</p>
<dl>
    <dt>Initial Effect</dt> <dd>You inhale deeply, and feel the mushroom spores begin to burrow in your brain. Synapses begin firing off like crazy, granting a +2 alchemical bonus to INT and CHA for 1 hour.</dd>
    <dt>Secondary Effect</dt> <dd>You take 1 point of STR Damage.</dd>
    <dt>Side Effect</dt> <dd>This is a mild hallucinogen. You take a -2 penalty to WIS for 1D4 hours and a -2 penalty to STR and CON for 2D4 hours.</dd>
    <dt>Overdose</dt> <dd>If more than one dose is taken in a 12-hour period, you take 2D6 points of damage. Using it more than three times in any 24-hour period deals 4D6 points of Damage and Paralyzes you for 2D4 hours.</dd>
    <dt>Withdrawal Effects</dt> <dd>The sunlight burns your sensitive skin. You take 1 point of Damage every round that you are exposed to bright light.</dd>
    <dt>Junkie</dt> <dd>You are able to emit spores as a Myconid of the same Hit Dice</dd>
    <dt>Transform</dt> <dd> If you are addicted, take mushroom powder more than three times in a 24-hour period, and Paralyze yourself as a result, then your race permanently changes to Myconid (Guardian). While you are not compelled to join the nearest myconid colony, you feel the calling.</dd>
    <dt>Addiction</dt> <dd>Medium</dd>
</dl>
<p>It requires an Alchemy Skill Check of DC 25 to create this drug, given the required materials.</p>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Oruighen';
        $formula->type        = 'Drug';
        $formula->price       = '20 gp';
        $formula->method      = 'Inhaled DC 14';
        $formula->bulk        = '-';
        $formula->description = "<p>Also called Phantomdust, this drug is made of refining rare cacti found in the alkaline sands of Azulduth, the Lake of Salt. It is gray, fine-grained dust normally carried in small paper envelopes. It can temporarily blind and disable anyone unfortunate enough to inhale a pinch, and is popular with rogues and assassins who want a way to quickly discourage those who interfere with their work.</p>
<p>Phantomdust is normally employed by casting a pinch in an opponent's face. Treat this as an Action, Melee Touch attack. If the attack is successful, the target must make a CON Save or suffer the effects. If the attack misses, the dose dissipates harmlessly.</p>
<p>Multiple doses of Oruighen have no additional effect until the effects from the first does wears off.</p>
<dl>
    <dt>Initial Effect</dt> <dd>You are Blinded for 2D4 minutes and you suffer from an extremely painful stinging in the nostrils and eyes. The pain results in a -2 penalty on attack rolls, skill checks, and Saves in addition to the penalties associated with Blindness</dd>
    <dt>Secondary Effect</dt> <dd>None</dd>
    <dt>Side Effect</dt> <dd>None</dd>
    <dt>Overdose</dt> <dd>None</dd>
    <dt>Addiction</dt> <dd>None</dd>
</dl>";
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Panaeolo';
        $formula->type        = 'Drug';
        $formula->price       = '250 gp';
        $formula->method      = 'Ingested DC 8';
        $formula->bulk        = '-';
        $formula->description = "<p>This herb was well known in the time of Nethril, but its secret was lost when that empire fell. With the return of the City of Shade, the descendants of the Netherese told the Red Wizards of the herb's power. The Thayans have rescued small amounts of it from oases in Anaurach and have begun to sell the drug in small quantities. Panaeolo's leathery-tasting leaves attune the user to the Weave, and boost the power of arcane spells.</p>
<dl>
    <dt>Initial Effect</dt> <dd>None</dd>
    <dt>Secondary Effect</dt> <dd>The DC of all arcane spells you cast increases by +2 for the next 1D4 hours</dd>
    <dt>Side Effect</dt> <dd>1D6 points of temporary CHA damage</dd>
    <dt>Overdose</dt> <dd>If a second dose is taken within an hour of the first, increase the DC to arcane spells to +3 and you suffer 2D8 points of CHA damage. Additional doses within an hour do not increase the DC any more but still causs the CHA damage</dd>
    <dt>Addiction</dt> <dd>Low</dd>
</dl>";
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable', 'Magical']);

        $formula              = new Formula;
        $formula->name        = 'Redflower Leaves';
        $formula->type        = 'Drug';
        $formula->price       = '300 gp';
        $formula->method      = 'Ingested DC 10';
        $formula->crafting    = '<ul>
    <li>Alchemy DC 27</li>
</ul>';
        $formula->bulk        = '-';
        $formula->description = '<p>These crushed leaves of a tiny red bog flower native to Cormyr, Sembia, and the Dragon Coast are known for their ability to improve hand-to-eye coordination.</p>
<dl>
    <dt>Initial Effect</dt> <dd>None</dd>
    <dt>Secondary Effect</dt> <dd>As an Action, you may focus your attention upon a particular creature. If you follow that Action with an attack against that creature, you gain a +3 Competence bonus to the attack roll. This ability lasts for 10 minutes.</dd>
    <dt>Side Effect</dt> <dd>None</dd>
    <dt>Overdose</dt> <dd>Taking a second dose before the first has worn off causes you to be Nauseated for 1D4 X 10 minutes.</dd>
    <dt>Addiction</dt> <dd>Low</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Sakrash';
        $formula->type        = 'Drug';
        $formula->price       = '500 gp';
        $formula->method      = 'Ingested DC 11';
        $formula->bulk        = '-';
        $formula->description = '<p>Also called Twilight Mind, this sweet oily concoction of wines, rare tree saps, and certain herbs is only manufactured in Thay and Mulhorand. It protects your mind and thoughts, but also disables Psionic abilities.</p>
<dl>
    <dt>Initial Effect</dt> <dd>Dazzled for 1 minute</dd>
    <dt>Secondary Effect</dt> <dd>Cannot be detected by effects that read or alter thoughts (such as Detect Thoughts, Zone of Truth, etc.). This lasts for 1D4 hours</dd>
    <dt>Side Effect</dt> <dd>You must succeed a DC 20 WIS Save before your can use any Psionic power.</dd>
    <dt>Overdose</dt> <dd>None</dd>
    <dt>Addiction</dt> <dd>None</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable', 'Magical']);

        $formula              = new Formula;
        $formula->name        = 'Sannish';
        $formula->type        = 'Drug';
        $formula->price       = '500 gp';
        $formula->method      = 'Ingested DC 9';
        $formula->crafting    = '<ul>
    <li>Alchemy DC 20</li>
</ul>';
        $formula->bulk        = '-';
        $formula->description = "<p>A bluish liquid distilled from wolves' milk and a powdered desert plant, this concoction is very popular. Addicts are easily found by the permanent blue stains on their lips.</p>
<dl>
    <dt>Initial Effect</dt> <dd>1 WIS Damage</dd>
    <dt>Secondary Effect</dt> <dd>The user becomes numbed to pain for 3 hours, immune to pain-inducing penalties.</dd>
    <dt>Side Effect</dt> <dd>Causes euphoria. While the drug is in effect, the user takes a -2 penalty on all initiative checks.</dd>
    <dt>Overdose</dt> <dd>A second dose taken while the first dose is still in effect causes a numbing stupor for 6 hours. The user becomes Slowed: 1 until the stupor wears off.</dd>
    <dt>Addiction</dt> <dd>Medium</dd>
</dl>";
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Sezarad Root';
        $formula->type        = 'Drug';
        $formula->price       = '75 gp';
        $formula->method      = 'Ingested DC 14';
        $formula->bulk        = '-';
        $formula->description = '<p>The sezarad plant is a broad, vivid flower with a short, brittle root. When chewed, the root breaks into soft splinters in the manner of a carrot. It increases vitality.</p>
<dl>
    <dt>Initial Effect</dt> <dd>Gain 1D8 temporary Hit Points</dd>
    <dt>Secondary Effect</dt> <dd>Gain 1D8 temporary Hit Points. These overlap (do not stack) with any other temporary Hit Points form this drug. All temporary Hit Points wear off 10 minutes after it is ingested.</dd>
    <dt>Side Effect</dt> <dd>1D4 points of WIS damage.</dd>
    <dt>Overdose</dt> <dd>None</dd>
    <dt>Addiction</dt> <dd>Low</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Tekkil';
        $formula->type        = 'Drug';
        $formula->price       = '500 gp';
        $formula->method      = 'Ingested DC 9';
        $formula->bulk        = '-';
        $formula->description = '<p>The fat red leaf of this succulent swamp plant releases a milky juice when chewed. The juice is an analgesic, and is sometimes used by people suffering from extreme or chronic pain. Addicts who seek to numb their senses and submerge themselves in a drug-induced stupor use it in greater doses.</p>
<dl>
    <dt>Initial Effect</dt> <dd>None</dd>
    <dt>Secondary Effect</dt> <dd>You become numbed to pain for 1D4 hours. Any attack, Save or skill check penalties cause by extreme pain are reduced by 2. You also gain Damage Reduction 1/- against subdual damage.</dd>
    <dt>Side Effect</dt> <dd>Causes lethargy. While the drug is in effect, you suffer a -2 penalty on Initiative checks</dd>
    <dt>Overdose</dt> <dd>A second dose take while the first dose is still in effect cause a numbing stupor for 2D4 hours. You lose 1 Action per turn while the stupor is in effect.</dd>
    <dt>Addiction</dt> <dd>Medium</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Terran Brandy';
        $formula->type        = 'Drug';
        $formula->price       = '500 gp';
        $formula->method      = 'Ingested DC 19';
        $formula->bulk        = '-';
        $formula->crafting    = "<ul>
    <li>Alchemy DC 30</li>
    <li>Cast Death Knell to capture a dying Fey's essence. Then before the bonuses from Death Knell goes away, you must add 3 drops of your own blood to the brew</li>
</ul>";
        $formula->description = '<p>A potent alcohol, this magical drink is favored by heartless spellcasters of all types. This green liquid is distilled from the essence of dying fey.</p>
<dl>
    <dt>Initial Effect</dt> <dd>+2 Alchemical Bonus to effective Caster Level for 30 minutes</dd>
    <dt>Secondary Effect</dt> <dd>2 CON Damage</dd>
    <dt>Side Effect</dt> <dd>None</dd>
    <dt>Overdose</dt> <dd>If more than one dose is taken in a 8-hour period, the user immediately takes 3 CON Damage.</dd>
    <dt>Addiction</dt> <dd>Low</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable', 'Magical']);

        $formula              = new Formula;
        $formula->name        = 'Vodare';
        $formula->type        = 'Drug';
        $formula->price       = '40 gp';
        $formula->method      = 'Ingested DC 13';
        $formula->crafting    = '<ul>
    <li>Alchemy DC 15</li>
</ul>';
        $formula->bulk        = '-';
        $formula->description = '<p>An extremely bitter brown powder, vodare is usually mixed with honeyed water or sweet wine to dilute the taste. It is made from the crushed petals of a flower that grows only on the graves of those who dedicated their lives to the worship of Rallaster (a very minor vile god.).</p>
<dl>
    <dt>Initial Effect</dt> <dd>+2 Alchemical Bonus to Intimidate checks and Saves against Fear effects for 3 hours</dd>
    <dt>Secondary Effect</dt> <dd>-4 alchemical penalty on Diplomacy and Bluff checks for 3 hours</dd>
    <dt>Side Effects</dt> <dd>Mild euphoria and fierce confidence while the drug is in effect</dd>
    <dt>Overdose</dt> <dd>If more than one does is taken in a 4-hour period, the user becomes catatonic (CON Save 15 negates)</dd>
    <dt>Addiction</dt> <dd>High</dd>
</dl>';
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);

        $formula              = new Formula;
        $formula->name        = 'Ziran';
        $formula->type        = 'Drug';
        $formula->price       = '100 gp';
        $formula->method      = 'Ingested DC 17';
        $formula->bulk        = '-';
        $formula->description = "<p>Also known as Bloodfast, this is a bitter white powder usually compressed into a tablet, ziran is refined from several Underdark fungi by the drow. Its secret has reached the surface, and some alchemists have begun to cultivate farms of the appropriate mushrooms.</p>
<dl>
    <dt>Initial Effect</dt> <dd>Dazzled for 1 round</dd>
    <dt>Secondary Effect</dt> <dd>Gain a +2 Alchemical bonus to DEX for 1D3 hours</dd>
    <dt>Side Effect</dt> <dd>When the secondary effect ends, you suffer 2 points of CON damage. Ziran users describe a sense of detachment or out-of-body experience, feeling as if they're watching themselves act from a distance</dd>
    <dt>Overdose</dt> <dd>If a second dose is taken within 24 hours of the first, the user suffers an additional 2 CON damage</dd>
    <dt>Addiction</dt> <dd>High</dd>
</dl>";
        $helper->addTypesToSimpleObject($formula, ['Drug', 'Consumable']);
    }
}
