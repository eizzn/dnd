<?php

namespace Database\Seeders\Templates;

use App\Models\Template;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class TemplatesSeeder extends Seeder
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

        $this->call(OutsiderTemplatesSeeder::class);

        $temp              = new Template;
        $temp->name        = 'Orglash';
        $temp->description = '<p>An orglash, or ice spirit, is a kind of air elemental native to the colder parts of Rashemen. Alien and unpredictable, they are viewed as a mixed blessing by the Rashemi people, for despite their occasional danger to travelers, they have helped defend the land against the Red Wizards for hundreds of years.</p>
<p>An orglash looks like an air elemental with wisps of snow spinning about and two barely visible, darker spots that look like eyes. Orglashes roam the frozen mountains and forests of Rashemen, attacking creatures that threaten the land. Their perspective of what is "threatening" is very broad, however, and they have been known to attack small parties in remote areas.</p>';
        $temp->details     = '<p>Orglash is a template that can be applied to any elemental creature with the Air type.</p>
<dl>
    <dt>Abilities</dt> <dd>CON +4. INT at least 10</dd>
    <dt>Speed</dt> <dd>If the base creature cannot Fly, it gains a Fly Speed equal to its land Speed.</dd>
    <dt>Damage Reduction</dt> <dd>Increase by +2</dd>
    <dt>Damage</dt> <dd>Any physical melee attack adds 1D6 Cold Damage</dd>
    <dt>Cone of Cold</dt> <dd>3/day as a Double Action as a 7th Level Spell.</dd>
    <dt>Cold Subtype</dt> <dd>Cold Immunity and Fire Vulnerability</dd>
    <dt>Fast Healing</dt> <dd>In freezing weather, the orglash gains Regeneration: 3.</dd>
    <dt>Native Elemental</dt> <dd>Orglashes are native to the Material Plane. Spells that banish creatures to their home plane do not work on orglashes on the Prime Material Plane. Orglashes can be raised or resurrected, although their remains quickly vanish if killed, making it difficult to use these spells to restore them to life.</dd>
    <dt>Challenge Rating</dt> <dd>Same as base creature +1</dd>
</dl>';
        $helper->addTypesToSimpleObject($temp, ['Air', 'Elemental']);

        $temp              = new Template;
        $temp->name        = 'Telthor';
        $temp->description = '<p>Beings that die in defense of nature sometimes leave behind a spiritual echo, a ghostly version of themselves to continue their work.</p>';
        $temp->details     = "<p>These spirits might resemble beings who lived, but they are more akin to nature using a bit of fey magic to honor their sacrifice. These spirits actually have no memories held by the once-living creature they resemble.</p>
<p>A telthor cannot travel further than 1 mile away from the location where the living creature it is echoing died (it's anchor location).</p>
<dl>
    <dt>Challenge Rating</dt> <dd>The Challenge Rating of the creature is increased by +2</dd>
    <dt>Ability Scores</dt> <dd>
        <p>Telthors have a minimum of 12 DEX and CHA. If the base creature has lower than 12 in these ability scores, increase their DEX and CHA to 12. Creatures with greater than 12 DEX and CHA retain their original ability scores.</p>
        <p>Telthors have no STR score, as they are incorporeal creatures.</p>
    </dd>
    <dt>Speed</dt> <dd>Telthors gain a Fly Speed equal to double their Land Speed. If they have a faster Fly Speed, then use the greater.</dd>
    <dt>Armor Class</dt> <dd>The Telthor's Armor Class becomes 10 + their Charisma modifier + their Dexterity modifier.</dd>
    <dt>Hit Points</dt> <dd>The Telthor's Hit Points become the maximum possible value.</dd>
    <dt>Attacks</dt> <dd>As incorporeal creatures, their attacks become Touch Attacks and deals Negative Damage. They lose all Ranged attacks they may have had unless they use a physical weapon to make the attack.</dd>
    <dt>Etherealness</dt> <dd>As a Double Action, the Telthor can shift into the Ethereal Plane or to the Prime Material Plane from the Ethereal Plane.</dd>
    <dt>Bound to the Land</dt> <dd>A Telthor is tied to the place it guards and is weakened if it moves more than 1 mile from that place. Outside of this area, it takes 1 point of damage every minute. This damage ends when it enters its area again. Telthors can sense the boundaries of their territory and normally do not leave them except to warn others of danger.</dd>
    <dt>Native Animal Empathy</dt> <dd>Telthors can communicate and empathize with animals of its kind.</dd>
    <dt>Languages</dt> <dd>Telthors can communicate telepathically with other creatures, to a range of 120 feet.</dd>
    <dt>Resistance</dt>
    <dd>
        <p>The telthor has Resistance to the following.</p>
        <ul>
            <li>Bludgeoning</li>
            <li>Piercing</li>
            <li>Slashing</li>
            <li>Acid</li>
            <li>Fire</li>
            <li>Electricity</li>
            <li>Sonic</li>
        </ul>
    </dd>
    <dt>Immunity</dt>
    <dd>
        <p>The telthor has Immunity to the following</p>
        <ul>
            <li>Cold</li>
            <li>Negative</li>
            <li>Poison</li>
            <li>Charmed</li>
            <li>Exhaustion</li>
            <li>Frightened</li>
            <li>Grappled</li>
            <li>Paralyzed</li>
            <li>Petrified</li>
            <li>Sickened</li>
            <li>Prone</li>
            <li>Restrained</li>
        </ul>
    </dd>
    <dt>Type</dt> <dd>The telthor's type becomes Spirit</dd>
</dl>";
        $helper->addTypesToSimpleObject($temp, ['Spirit']);

        $temp              = new Template;
        $temp->name        = 'Telthor Companion';
        $temp->description = '<p>In Rashemen, some spirits sometimes accept serving a creature that is dedicated to Rashemen. They become their companion, either as an Animal Companion, a Divine Mount, or rarely, as a Familiar. Similar to a Telthor, they are bound to stay within a certain place, except for the Telthor Companion, it becomes the creature they serve.</p>';
        $temp->details     = "<p>Telthor Companions are bound to a creature, usually a barbarian from one of the berserker lodges, but sometimes to a Hathran or Durthan. They become the Telthor Companions bound location and must remain within a mile of their master. The only exception to this is when the Telthor Companion is in the FeyWild, there, they do not suffer any ill effects from being away from their bound location (their master).</p>
<dl>
    <dt>Challenge Rating</dt> <dd>The Challenge Rating of the creature is increase by +1</dd>
    <dt>Ability Scores</dt> <dd>Telthors have a minimum of 12 DEX and CHA. If the base creature has lower than 12 in these ability scores, increase their DEX and CHA to 12. Creatures with greater than 12 DEX and CHA retain their original ability scores.</dd>
    <dt>Armor Class</dt> <dd>The Telthor's Armor Class becomes 10 + their Charisma modifier + their Dexterity modifier.</dd>
    <dt>Hit Points</dt> <dd>The Telthor's Hit Points become the maximum possible value.</dd>
    <dt>Feywild Transport</dt> <dd>1 week, a Telthor Companion can shift into the FeyWild from the Prime Material Plane, or from the FeyWild to the Prime Material Plane as a Triple Action. They may take along one additional Medium sized creature. While they are in the FeyWild, they are no longer tied to a location.</dd>
    <dt>Languages</dt> <dd>Telthors can communicate telepathically with other creatures, to a range of 120 feet.</dd>
    <dt>Resistance</dt>
    <dd>
        <p>The telthor has Resistance to the following.</p>
        <ul>
            <li>Bludgeoning</li>
            <li>Piercing</li>
            <li>Slashing</li>
            <li>Acid</li>
            <li>Fire</li>
            <li>Electricity</li>
            <li>Sonic</li>
        </ul>
    </dd>
    <dt>Immunity</dt>
    <dd>
        <p>The telthor has Immunity to the following</p>
        <ul>
            <li>Cold</li>
            <li>Negative</li>
            <li>Poison</li>
            <li>Charmed</li>
            <li>Exhaustion</li>
            <li>Frightened</li>
            <li>Grappled</li>
            <li>Paralyzed</li>
            <li>Petrified</li>
            <li>Sickened</li>
            <li>Prone</li>
            <li>Restrained</li>
        </ul>
    </dd>
    <dt>Type</dt> <dd>The telthor's type becomes Spirit</dd>
</dl>";
        $helper->addTypesToSimpleObject($temp, ['Spirit']);

        $temp              = new Template;
        $temp->name        = 'Thomil';
        $temp->description = '<p>A thomil, or rock spirit, is a kind of earth elemental local to the colder parts of Rashemen. Thomils are created or summoned to guard Rashemen against its enemies.</p>
<p>A thomil is an animate piece of rock with a humanoid form from the waist up but merging into the rock and earth beneath it. It normally rests under the earth, only becoming active on the surface when it senses a threat.</p>
<p>Thomils are respected and feared by the Rashemi people, for while they repel invaders, they also strike out at greedy or short-sighted natives who forget to pay homage to the spirits. Normally, before starting a mining operation or other action that involves disturbing a large amount of rock, the local people call a hathran to appease the thomils in the area.</p>';
        $temp->details     = "<p>Thomil is a template that can be applied to any elemental creature with the Earth type.</p>
<dl>
    <dt>Abilities</dt> <dd>CON +4. INT at least 10</dd>
    <dt>Damage Reduction</dt> <dd>Increase by 10. If the base creature has a better Damage Reduction, use the better value.</dd>
    <dt>Engulf</dt> <dd>
        <p>As a Double Action, a thomil of size Small or larger may attempt to envelop an opponent at least one size category smaller than itself. It cannot make a slam attack on the round it engulfs prey. The thomil merely has to move over the opponents, affecting as many as it can cover. Opponents can make opportunity attacks against the thomil, but if they do, they are not entitled to a saving throw. Those who do not attempt opportunity attacks must succeed at a DEX Save (DC 10 + 1/2 thomil's Hit Dice + thomil's Constitution modifier) or be engulfed; on a success they are pushed back or aside (opponents' choice) as the thomil moves forward. Engulfed creatures are considered grappled and trapped within the thomil's body and automatically take crushing damage each round, based on the thomil's size, as set out below. The thomil adds its Strength modifier to the damage dealt.</p>
        <table>
            <thead>
                <tr>
                    <th>Size</th>
                    <th>Engulf Damage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Small</td>
                    <td>1D4</td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td>1D6</td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td>1D8</td>
                </tr>
                <tr>
                    <td>Huge</td>
                    <td>2D6</td>
                </tr>
                <tr>
                    <td>Gargantuan</td>
                    <td>2D8</td>
                </tr>
                <tr>
                    <td>Colossal</td>
                    <td>4D6</td>
                </tr>
            </tbody>
        </table>
        <p>An engulfed creature can attempt to cut its way out of the thomil's body with either claws or light slashing or piercing weapons. Dealing at least one-quarter of the elementals normal Hit Points in this way creates an opening large enough to permit escape. Once a single swallowed creature exists, the thomil's body reshapes to close the hole; thus another engulfed opponent must cut its own way out. The engulfed creature can instead attempt an Escape Artist check (DC 15 + 1/2 thomil's Hit Dice + thomil's CON modifier) or STR check (DC 20 + thomil's STR modifier). The thomil's body can hold two creatures one size category smaller than itself, or four of two or more size categories smaller.</p>
        <p>A thomil can move and attack normally while engulfing a creature.</p>
    </dd>
    <dt>Boulder Defense</dt> <dd>A thomil can change its shape to a smooth, immobile, boulder-like form. In this form, the thomil's Damage Reduction increases to +7, but it cannot move or make attacks. Assuming this form takes a Double Action, returning to its semi-humanoid form is an Action.</dd>
    <dt>Cold Resistance</dt> <dd>The thomil gains Cold Resistance to Cold Damage.</dd>
    <dt>Native Elemental</dt> <dd>Thomils are native to the Material Plane. Spells that banish creatures to their home plane do not work on orglashes on the Prime Material Plane. Orglashes can be raised or resurrected, although their remains quickly vanish if killed, making it difficult to use these spells to restore them to life.</dd>
    <dt>Challenge Rating</dt> <dd>Same as base creature +2</dd>
</dl>";
        $helper->addTypesToSimpleObject($temp, ['Earth', 'Elemental']);

        $temp              = new Template;
        $temp->name        = 'Alpha Beast';
        $temp->description = '<p>An alpha beast is a larger, fiercer, and more dominant specimen of its species. Driven by primal fury and heightened instincts, these creatures lead packs, defend territories with extreme aggression, and possess a supernatural resilience that sets them apart from ordinary wildlife.</p>
<p>Visually indistinguishable from their kin at a distance except for their imposing size and battle-scarred hides, an alpha beast commands immediate respect in the wild. They strike harder, endure wounds that would fell a lesser animal, and possess a tactical cunning that makes them lethal apex predators.</p>';
        $temp->details     = '<p>Alpha Beast is a template that can be applied to any creature with the Animal type.</p>
<dl>
    <dt>Abilities & Attributes</dt> <dd>+4 STR. +4 CON. Gain proficiency in CON Saves</dd>
    <dt>Skills</dt> <dd>Perception +4</dd>
    <dt>Feats</dt> <dd>Gain a Feat</dd>
    <dt>Armor Class</dt> <dd>Damage Reduction (Natural Armor) increases by +1.</dd>
    <dt>Hit Die</dt> <dd>Increase HD +3</dd>
    <dt>Challenge Rating</dt> <dd>Base creature CR + 1 (Animal Companion Spell Slot +1. Rangers do not need to sacrifice a higher level Spell Slot, but they must sacrifice at least a 1st level Spell Slot).</dd>
</dl>';
        $helper->addTypesToSimpleObject($temp, ['Animal']);

        $temp              = new Template;
        $temp->name        = 'Dire Animal';
        $temp->description = '<p>Dire animals are larger, tougher, and far more aggressive versions of ordinary beasts. Coated in bony ridges, thick fur, or calcified spikes, they represent a primeval throwback to an era when nature was untamed and savage. They are the results of Rangers and Druids calling powerful Animal Companions that survived their masters.</p>
<p>Unlike ordinary alphas, dire animals undergo a physical metamorphosis. Their teeth grow into jagged tusks, their claws elongate into iron-like talons, and their eyes burn with a low, predatory intelligence. They rarely run from a fight, hunting humanoids and monsters alike as apex predators.</p>';
        $temp->details     = "<p>Dire Animal is a template that can be applied to any creature with the Animal or Beast type.</p>
<dl>
    <dt>Size</dt> <dd>The creature's size category increases by one (e.g., Medium becomes Large).</dd>
    <dt>Abilities</dt> <dd>STR +6, CON +6, WIS +2, CHA +4. Gain proficiency in CON Saves.</dd>
    <dt>Armor Class</dt> <dd>Damage Reduction (Natural Armor) +4.</dd>
    <dt>Hit Die</dt> <dd>Increase HD +6</dd>
    <dt>Damage</dt> <dd>All melee attack damage dice increase by one step (e.g., 1d6 becomes 1d8, 2d4 becomes 2d6).</dd>
    <dt>Thick Fur / Bony Plating</dt> <dd>The creature gains Resistance to Bludgeoning, Piercing, and Slashing damage.</dd>
    <dt>Feats and Talents</dt> <dd>Gain 2 Feats and 1 Talent</dd>
    <dt>Challenge Rating</dt> <dd>Base creature CR + 2 (Animal Companion Spell Slot +2. +1 for Rangers)</dd>
</dl>";
        $helper->addTypesToSimpleObject($temp, ['Animal']);

        $temp              = new Template;
        $temp->name        = 'Mythic Animal';
        $temp->description = '<p>A mythic monstrosity is a creature of nightmare and legend. No longer a mere product of natural evolution, these entities are born from powerful rangers and druids calling the most powerful of Animal Companions.</p>';
        $temp->details     = "<p>Mythic Monstrosity is a template that can be applied to any creature with the Animal or Beast type.</p>
<dl>
    <dt>Size</dt> <dd>The creature's size category increases by one (e.g., Large becomes Huge).</dd>
    <dt>Abilities</dt> <dd>STR +10, CON +10, INT becomes at least 6, WIS +4, CHA +6.</dd>
    <dt>Legendary Resistance</dt> <dd>3/Day. If the creature fails a Save, it can choose to succeed instead.</dd>
    <dt>Armor Class</dt> <dd>Damage Reduction (Natural Armor) +5</dd>
    <dt>Hit Die</dt> <dd>Increase HD +12</dd>
    <dt>Damage</dt> <dd>All melee attack damage dice increase by two steps (e.g., 1d6 becomes 1d10, 2d4 becomes 2d8).</dd>
    <dt>Thick Fur / Bony Plating</dt> <dd>The creature gains Resistance to Bludgeoning, Piercing, Slashing, and Poison damage.</dd>
    <dt>Mythic Trait: Primal Rebirth</dt> <dd>When the creature is reduced to 0 hit points, it does not die. Instead, it instantly regains all its hit points, clears all negative conditions. This ability triggers only once per day.</dd>
    <dt>Feats and Talents</dt> <dd>Gain 4 Feats and 2 Talents</dd>
    <dt>Challenge Rating</dt> <dd>Base creature CR + 4 (Animal Companion Spell Slot +4. +2 for Rangers).</dd>
</dl>";
        $helper->addTypesToSimpleObject($temp, ['Animal', 'Monstrosity']);

        $temp              = new Template;
        $temp->name        = 'Dhampir';
        $temp->description = '<p>The natural-born child of an Ancient Vampire and a mortal, you are alive but you also have some of the Powers of a Vampire</p>';
        $temp->details     = "<p>Dhampir is a template that can be applied to any creature that can become a vampire (since that vampire must then procreate with a mortal to produce a dhampir child).</p>
<p>A dhampir is not undead. They must eat, drink and sleep as a normal creature, but they can also gain sustenance from blood. Dhampirs live 10 times longer than normal creatures of their type. Dhampirs can contract Lycanthropy</p>
<dl>
    <dt>Abilities</dt> <dd>STR +2, DEX +2, CON +2, CHA +2</dd>
    <dt>Blood Points</dt> <dd>You gain a pool of energy called Blood Points. You may have at most 2 Blood Points. You may use these Blood Points for certain effects. See the Vampire Spawn Feat for more details.</dd>
    <dt>Resistance</dt> <dd>Bludgeoning, Poison (unless specially designed to affect dhampirs and vampires)</dd>
    <dt>Bite Attack</dt> <dd>You gain a Bite Attack. You may only use this Bite attack against targets that you have successfully Grappled. If you deal damage with your Bite attack and the target is not Undead and not a Construct, you deal 1D4 Piercing damage + your STR modifier and 1D6 Negative damage. You heal damage equal to the Negative damage you dealt. You also gain 1 Blood Point. If the creature dies from this damage, you gain 2 Blood Points instead. Creatures of Size Tiny or smaller provides no Blood Points.</dd>
    <dt>Blood Powers</dt> <dd>
        <p>You may take Feats as if you have the Vampire's Curse Feat. You gain the following abilities</p>
        <table>
            <thead>
                <tr>
                    <th>Power</th>
                    <th>Blood Points</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Vampiric Surge: You gain a Heroic Surge which you must use immediately</td>
                    <td>1</td>
                    <td>Free Action</td>
                </tr>
                <tr>
                    <td>Vampiric Mist: You move as if you cast Misty Step</td>
                    <td>2</td>
                    <td>Action</td>
                </tr>
                <tr>
                    <td>Defy Gravity: You gain the effects of Spider Climb for 1 minute</td>
                    <td>1</td>
                    <td>Action</td>
                </tr>
                <tr>
                    <td>Unearthly Jump: You gain a +20 bonus to Athletics (Jump) checks</td>
                    <td>1</td>
                    <td>Action</td>
                </tr>
                <tr>
                    <td>Unearthly Reflexes: You gain the effects of the Improved Evasion Feat until the beginning of your next turn</td>
                    <td>1</td>
                    <td>Free Action</td>
                </tr>
            </tbody>
        </table>
    </dd>
    <dt>Challenge Rating</dt> <dd>Base creature CR + 4</dd>
</dl>";
        $helper->addTypesToSimpleObject($temp, ['Undead']);
    }
}
