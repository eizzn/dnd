<?php

namespace Database\Seeders\Rules;

use App\Models\Page;
use App\Models\Rule;
use Illuminate\Database\Seeder;

class MagicPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page              = new Page;
        $page->name        = 'Magic';
        $page->order       = 5;
        $page->description = '<p></p>';
        $page->save();

        $rule              = new Rule;
        $rule->key         = 'magic-schools-magic';
        $rule->name        = 'Schools of Magic';
        $rule->description = '<p>All magic falls into one or more of the eight schools of magic.</p>
<dl>
    <dt>Abjuration</dt> <dd>This school is focused on protective spells, as well as spells involving wards and countermagic. Wizards who specialize in this school are known as Abjurers.</dd>
    <dt>Conjuration</dt> <dd>
        <p>This school is focused on instantaneous transport, conjuring manifestations of creatures or objects, object creation, and traversing or accessing the inner and outer planes of existence.</p>
        <dl>
            <dt>Calling</dt> <dd></dd>
            <dt>Summoning</dt> <dd></dd>
            <dt>Teleportation</dt> <dd></dd>
        </dl>
    </dd>
    <dt>Divination</dt> <dd>
        <p>This school is focused on acquiring and revealing information.</p>
        <dl>
            <dt>Scrying</dt> <dd></dd>
        </dl>
    </dd>
    <dt>Enchantment</dt> <dd>
        <p>This school is focused on magical modifications (short-lived curses, blessings), and long-lasting magical auras.</p>
    </dd>
    <dt>Evocation</dt> <dd>
        <p>This school is focused on energy and manipulating those forms of energy.</p>
        <ul>
            <li>Cold</li>
            <li>Fire</li>
            <li>Force</li>
            <li>Electricity</li>
            <li>Sonic</li>
        </ul>
    </dd>
    <dt>Illusion</dt> <dd>
        <p>This school is focused on spells that fools the senses, manipulates emotions, warps memories, compulsion effects, and controlling shadows.</p>
    </dd>
    <dt>Necromancy</dt> <dd>
        <p>This school is focused on spells that have to do with life and spirits in general. It also has to do with the undead, disease, and long-lasting curses.</p>
    </dd>
    <dt>Transmutation</dt> <dd>
        <p>This school is focused on spells that involve changing or shaping physical matter. This includes the creation of acids, and poisons.</p>
    </dd>
</dl>';
        $rule->order = 1;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'cantrips';
        $rule->name        = 'Cantrips';
        $rule->description = "<p>You are able to cast simple spells called Cantrips.</p>
<ul>
    <li>If you have the Cantrip Caster Class Feature, you may cast as many Cantrips as you wish without using Spell Slots.</li>
    <li>if you don't have the Cantrip Caster Class Feature, then you should have a number indicating how many Cantrips you may memorize and another indicating how many Cantrips you may cast</li>
    <li>You may swap out the Cantrips that you know between Long Rests (unless otherwise stated)</li>
</ul>";
        $rule->order = 10;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'magic-circle-magic';
        $rule->name        = 'Circle Magic';
        $rule->description = "<p>Some of the most powerful and spectacular spells worked across Faerun are cast in the form of circle magic. Circle magic is a type of cooperative spellcasting that allows the spellcaster leading the circle to increase her caster level significantly and achieve results otherwise unavailable to the spellcasters composing the circle. The Red Wizards of Thay and the Witches of Rashemen make frequent use of circle magic. Stories of other forms of circle magic abound in Faerun.</p>
<h3>Participation</h3>
<p>Any one may participate in Circle Magic, however, certain feats improves the participants contribution.</p>
<p>One spellcaster, usually the most powerful or experienced character present, stands at the center of the circle. This character is the circle leader. This individual must have the Mage Circle Leader feat.</p>
<p>A circle requires a minimum of two participants plus the circle leader. Up to five participants can aid a circle leader in a standard circle. If the leader has the Great Mage Circle Leader feat, then the circle may have up to 9 participants.</p>
<p>All participants in a circle must stand within 10 feet of the circle leader, who stands in the center. At the end of the ritual, each participant sacrifices any number of Spell Slots to the Circle Leader (you cannot sacrifice Cantrip Spell Slots). The Circle Leader receives a number of Spell Points equal to the number of Spell Slots given (ie. a 4th level Spell Slot grants 4 Spell Points). You may also sacrifice Spell Points on a one-for-one basis.</p>
<p>During the ritual, all participants cannot take Actions or Move. If a participant does take an Action or Moves, then that participant is removed from the Magic Circle and all Spell Slots donated (if any) are lost and cannot rejoin the Magic Circle. If the Circle Leader takes an Action or Moves, the Magic Circle ends with no effect.</p>
<p>If any participant is rendered unconscious or killed during this time, all other participants gain one level of Exhaustion unless they succeed on a CON Save.</p>
<blockquote>DC = 8 + level of Spell being cast + Circle Leaders Primary Ability Score Modifier + Circle Leaders Proficiency Bonus.</blockquote>
<h3>Circle Powers</h3>
<p>Circle magic is used to empower the Spell that the Circle Leader wishes to cast. This Ritual takes 10 minutes (unless the Spell to be cast has a longer Casting time).</p>
<dl>
    <dt>Metamagic</dt> <dd>Any Metamagic feat that any of the Participants know can be used to modify the spell. Any limits on the total number of Spell Points that can be used does not apply.</dd>
    <dt>Heighten</dt> <dd>You may spend 10 Spell Points to Heighten a Spell by +1. You may use this multiple times and you may Heighten a Spell to a maximum of 13th level (even if you do not have a Spell Slot of that level)</dd>
    <dt>Enhanced Destruction</dt> <dd>One of the spell's damage dice is automatically set to its maximum value. This effect costs a number of Spell Points equal to half the value of the die chosen (eg: D6 costs 2 Spell points)</dd>
    <dt>Grant Advantage</dt> <dd>If your Spell requires an Attack Roll, you may grant yourself Advantage on a single attack roll by spending 10 Spell Points. This effect may be purchased multiple times.</dd>
    <dt>Impose Disadvantage</dt> <dd>Anything included in the Spell's effect has Disadvantage on their Save against the Spell's effect(s). This option may only be chosen if at least one 8th level or higher Spell Slot was consumed in the casting of the ritual, and costs 10 Spell Points.</dd>
    <dt>Manifest Essence</dt> <dd>For every 5 Spell Points that you use to purchase this effect, you manifest one Magic Missile.</dd>
    <dt>Modify Duration</dt> <dd>You may spend 40 or more Spell Points to make the Duration 7 days. If you spend 100 Spell Points to purchase this effect, the Duration becomes Permanent.</dd>
    <dt>Raise DC</dt> <dd>the Spell's DC is increased by 1/4 of the Spell Points used to purchase this effect</dd>
    <dt>Living Weave</dt> <dd>This dangerous effect costs 150 Spell Points per level of the Cast Spell (a Cantrip costs 100 Spell Points). When purchased, the spell becomes a Living Spell and instantly kills each Participant unless they Save on a DC 24 CON Save.</dd>
</dl>
<p>Once the Spell is cast, any unused Spell Points that were gained through this ritual are lost.</p>

<h3>Communal Binding</h3>
<p>You can perform a 1-hour ritual to create a bond between yourself and a number of willing creatures. You can form this bond with a number of creatures equal to your Proficiency number (including yourself).</p>
<p>The Communal Bond lasts until the creator of the Communal Bond performs a new Binding Ritual or through death. The Communal Bond is severed for all bonded creatures if the creator dies, and for each individual bonded creature if they die. The ritual can be performed as part of a Long Rest, so long as the creator does not cast spells while performing this ritual. You cannot perform this ritual more than once every 24 hours.</p>
<p>When the Communal Binding ritual is completed, each bonded creature, including you, contributes a number of D3s equal to their Proficiency bonus to a Communal Pool. These dice are used when invoking the Communal Bindings' effects and tracked by the creator of the Communal Pool. The pool replenishes fully once all bonded creatures have completed a Long Rest.</p>
<p>The Communal Binding is a spiritual event and not considered magical, and is not affected by Dispel Magic or similar effects. The Communal Pool is destroyed if the creator dies or participates in a new Communal Binding.</p>
<p>You and all the participants may use the Communal Pool in the following ways.</p>
<ul>
    <li>As an Action, any of the bonded creatures can remove one die from the Communal Pool and add it to their next Attack Roll, Damage Roll or Ability Check. They must choose the number of dice when it is taken form the pool, and before rolling the pool die.</li>
    <li>As a Reaction when one of the bonded creatures makes a Save, that creature and/or the Communal Pool creator (who must be able to see the creature that is to receive the Communal Pool's benefits) can remove one die (each) from the pool and add it to the Save. They must do so after the Save has been rolled, but before determining the result.</li>
    <li>As long as there is at least one die in the Communal Pool, the pool creator can add that die to any Save made to maintain Concentration without expending the die.</li>
</ul>
<p>No creature can be part of multiple Communal Pools. Multiple individuals with this feature can be a part of the same Communal Pool, but there is only one pool creator. No matter the number of individuals with the ability to create Communal Pools are part of a Communal Pool, only one Pool is created.</p>
<p>Having multiple individuals with the ability to create Communal Pools be a part of the same Communal Pool increases the die of the Pool using the following table.</p>
<table>
    <thead>
        <tr>
            <th>Number of participants with the ability create Communal Pools</th>
            <th>Die</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>D3</td>
        </tr>
        <tr>
            <td>2</td>
            <td>D4</td>
        </tr>
        <tr>
            <td>3</td>
            <td>D6</td>
        </tr>
    </tbody>
</table>
<p>Additionally, multiple individuals with the ability to create Communal Pools that are members of the same Communal Pool cannot have the same option active at the same time.</p>
<p>When a Communal Binding is severed as a result of the creator's death, all participants suffer a 1D3 penalty to their attack rolls, ability checks, and Saves, and cannot participate in another Communal Binding until they finish a Long Rest (which means they may participate on the next Long Rest). The death of a Communal Bindings creator destroys the Communal Binding. When a participant (not the creator) dies, the Communal Bindings creator suffers a 1D3 penalty to Attack Rolls, Ability Checks, and Saves until they take a Long Rest. This penalty is cumulative per participant death.</p>
<p>If you cast one of the following spells, you may choose to cast the spell with an Additional Casting Action. If you do, all the other members of the Communal Binding that you are a part of also receives the benefit.</p>
<ul>
    <li>Guidance</li>
    <li>Cure Wounds</li>
    <li>Shield of Faith</li>
    <li>Spider Climb</li>
    <li>Freedom of Movement</li>
</ul>";
        $rule->order = 100;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'magic-tattoos';
        $rule->name        = 'Magical Tattoos';
        $rule->description = '<p>Tattoo magic is an incredibly old form of magic, and is a form of art utilized by many cultures across the multiverse. The designs and function of these tattoos varies wildly between people, races, species, countries, continents, and planes, from a lucky charm for sailors, to a mark for slaves.</p>
<table>
    <thead>
        <tr>
            <th colspan="2">Available Space</th>
        </tr>
        <tr>
            <th>Body Part</th>
            <th>Num Tattoos</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Head</td>
            <td>1 Medium, or 2 Small</td>
        </tr>
        <tr>
            <td>Chest</td>
            <td>1 Large, 2 Medium, or 4 Small</td>
        </tr>
        <tr>
            <td>Back</td>
            <td>1 Large, 2 Medium, or 4 Small</td>
        </tr>
        <tr>
            <td>Arm or Wing</td>
            <td>1 Medium and 1 Small, or 3 Small</td>
        </tr>
        <tr>
            <td>Leg or Tail</td>
            <td>1 Medium and 1 Small, or 3 Small</td>
        </tr>
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>Size</th>
            <th>Time</th>
            <th>DC</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Small (simple)</td>
            <td>1 + 1D4 hours</td>
            <td>10</td>
        </tr>
        <tr>
            <td>Small (average), Medium (simple)</td>
            <td>2 + 1D6 hours</td>
            <td>12</td>
        </tr>
        <tr>
            <td>Small (ornate), Medium (average), Large (simple)</td>
            <td>4 + 1D8 hours</td>
            <td>14</td>
        </tr>
        <tr>
            <td>Medium (ornate), Large (average)</td>
            <td>6 + 3D6 hours</td>
            <td>16</td>
        </tr>
        <tr>
            <td>Large (ornate)</td>
            <td>8 + 3D10 hours</td>
            <td>18</td>
        </tr>
    </tbody>
</table>';
        $rule->order = 200;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'magic-tattoo-inks';
        $rule->name        = 'Magical Tattoo Inks';
        $rule->description = "<p>One ounce of ink is sufficient to create 1 Large Simple tattoo, 2 Medium Simple tattoos, or 4 Small Simple tattoos. Average tattoos halve this number, and Ornate tattoos quarter it. In order to gain a special effect from a type of ink, the entire tattoo must be made with that type.</p>
<table>
    <thead>
        <tr>
            <th colspan=\"4\">Available Materials</th>
        </tr>
        <tr>
            <th>Item</th>
            <th>Cost</th>
            <th>Weight</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tattooist's Tools</td>
            <td>15 gp</td>
            <td>5 lb</td>
            <td>Comes with one color of ink</td>
        </tr>
        <tr>
            <td>Sketchbook</td>
            <td>25 gp</td>
            <td>2 lb</td>
            <td>Contains known tattoo designs. Each design takes up a full page. Sketchbooks have 25 pages</td>
        </tr>
        <tr>
            <td>Medical Supplies</td>
            <td>30 gp</td>
            <td>2 lb</td>
            <td>Used for sterilizing tattooist's tools. Contains enough materials to sterilize up to ten times</td>
        </tr>
        <tr>
            <td>Ink Base</td>
            <td>5 cp</td>
            <td>1 oz</td>
            <td>Clear liquid that may be mixed with pigment to form 1 oz of the appropriate color</td>
        </tr>
        <tr>
            <td>Full Ink Set</td>
            <td>200 gp</td>
            <td>1 lb</td>
            <td>Contains 1 oz of each color of the basic inks (black, blue, brown, green, orange, purple, red, white, and yellow)</td>
        </tr>
        <tr>
            <td>Bestial Ink</td>
            <td>125 gp</td>
            <td>1 oz</td>
            <td>Inks made from the essence of a type of creature. Evokes images of that creature in the minds of those who view the tattoo</td>
        </tr>
        <tr>
            <td>Colored Ink</td>
            <td>15 gp</td>
            <td>1 oz</td>
            <td> - </td>
        </tr>
        <tr>
            <td>Detection Ink</td>
            <td>600 gp</td>
            <td>1 oz</td>
            <td>this specially prepared ink reacts to the presence of certain creatures, and glows faintly when within 100 feet of the creature in question. Each different creature type is a different type of Detection ink.</td>
        </tr>
        <tr>
            <td>Elemental Ink</td>
            <td>150 gp</td>
            <td>1 oz</td>
            <td>This ink is purely cosmetic in most circumstances, coming in a variety of elemental styles. Some may make the lines of a tattoo appear to burn like molten lava, while others may cause it to appear as if cool water flows through the lines of the subject's skin. Certain earth-aligned inks will cause the lines of a tattoo to appear as if they were filled with glimmering gemstones. While this is normally cosmetic, if the appropriate elemental ink is aligned with a specific tattoo, it may aplify the effects of such a tattoo. For example, a tattoo of a fist of the elements would become much stronger if drawn using ice aligned ink</td>
        </tr>
        <tr>
            <td>Glamor Ink</td>
            <td>75 gp</td>
            <td>1 oz</td>
            <td>This ink causes lines drawn with it to glitter like a thousand stars. These inks come in a variety of colors.</td>
        </tr>
        <tr>
            <td>Glow Ink</td>
            <td>75 gp</td>
            <td>1 oz</td>
            <td>Tattoos inked with this concoction are pale versions of their colors wile in the light, but in dim or dark conditions glow vibrantly with their appropriate color, certain dim light in a radius of 10 feet if the tattoo is uncovered.</td>
        </tr>
        <tr>
            <td>Metallic Ink</td>
            <td>150 gp</td>
            <td>1 oz</td>
            <td>Tattoos made with this ink make it appear as though the subject has organically-flexible metal inlays imbedded in their skin. these inks come in a variety of flavors, from gold to silver to rusty iron.</td>
        </tr>
        <tr>
            <td>Mood Ink</td>
            <td>115 gp</td>
            <td>1 oz</td>
            <td>While appearing as plain gray ink in a bottle, once applied to the subject, this ink changes color depending on the subject's mood.
                <table>
                    <thead>
                        <tr>
                            <th>Mood</th>
                            <th>Color</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Anger, Irritation</td>
                            <td>Red</td>
                        </tr>
                        <tr>
                            <td>Nervous, Fearful</td>
                            <td>Orange</td>
                        </tr>
                        <tr>
                            <td>Surprised, Shocked</td>
                            <td>Yellow</td>
                        </tr>
                        <tr>
                            <td>Disgusted, Repulsed</td>
                            <td>Green</td>
                        </tr>
                        <tr>
                            <td>Sad, Depressed</td>
                            <td>Blue</td>
                        </tr>
                        <tr>
                            <td>Happy, Infatuated</td>
                            <td>Purple</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>Prismatic Ink</td>
            <td>125 gp</td>
            <td>1 oz</td>
            <td>Appearing to be a swirling mass of rainbow colors while in a bottle, this ink causes lines tattooed with it to become beautiful and iridescent in appearance.</td>
        </tr>
        <tr>
            <td>Shifting Ink</td>
            <td>1,150 gp</td>
            <td>1 oz</td>
            <td>
                <p>Shifting ink is the rarest of all tattoo inks, and allows two tattoos to be placed on the same part of the body. In order for this ink to display its tru power, the area to be tattooed must first be prepared with shifting ink. This process requires the same amount of ink as the larger of the two tattoos to be applied.</p>
                <p>During the application of the first tattoo, the shifting ink reacts with it and it absorbs into the wearer's skin. The second tattoo may be applied over this. Once this is done, the wearer may choose which tattoo to manifest once per Short Rest.</p>
                <p>The time taken to prepare the area with shifting ink is equal to that of the larger tattoo, but there is no associated DC. The tattoo must be applied within three days of the application of the shifting ink, before it loses its potency and binds with only the first tattoo. Artists sometimes risk exhausting themselves trying to complete their work before the shifting ink sets.</p>
            </td>
        </tr>
        <tr>
            <td>Temporary Ink</td>
            <td>350 gp</td>
            <td>1 oz</td>
            <td>This ink appears as normal black ink, only it is applied on top of the skin with a thin brush. Tattoos made with this ink last up to one week or until they are washed away with water.</td>
        </tr>
        <tr>
            <td>Three Dimensional Ink</td>
            <td>350 gp</td>
            <td>1 oz</td>
            <td>This ink comes in the same standard variety of colors as normal ink. However, when applied it creates a stunning effect whereby the design of the tattoo appears to float off of the wearer\'s skin and hover above it. The tattoo may also animate slightly, spinning or curling around the area.</td>
        </tr>
    </tbody>
</table>";
        $rule->order = 201;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'grafts';
        $rule->name        = 'Grafts';
        $rule->description = "<p>Grafts and symbionts are not complete monsters in themselves. Rather, they are monstrous body parts or even sentient beings (in the case of symbionts) that merge with existing creatures to enhance them. Grafts are non-sentient body parts - arms, legs, wings and the like - while symbionts have minds of their own and attach to their hosts in a variety of ways</p>
<p>Grafts have no statistics of their own. A graft might enhance some ability or characteristic of the creature it's attached to, or grant the creature some new ability. Some grafts are capable of independent action.</p>
<p>Grafts are not magic items, but in game terms they function very much like magic items. If you have the Graft Flesh Feat, you can create and apply grafts that they have the formula for. You must be in a quiet and comfortable setting, usually an alchemical laboratory.</p>
<p>A graft is not a magic item. It does not radiate magic once completed, it does not have a caster level, and it is very hard, if not impossible, to salvage as treasure.</p>
<table>
    <thead>
        <tr>
            <th>Graft Type</th>
            <th>Max Number of Grafts</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Head Graft</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Skin Graft</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Eye Graft</td>
            <td>2 (one for each eye)</td>
        </tr>
        <tr>
            <td>Ear Graft</td>
            <td>2 (one for each ear)</td>
        </tr>
        <tr>
            <td>Nose Graft</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Mouth Graft</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Torso Graft</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Arm Graft</td>
            <td>2 (one for each arm)</td>
        </tr>
        <tr>
            <td>Leg Graft</td>
            <td>2 (one for each leg)</td>
        </tr>
        <tr>
            <td>Hand Graft</td>
            <td>2 (one for each hand)</td>
        </tr>
        <tr>
            <td>Foot Graft</td>
            <td>2 (one for each foot)</td>
        </tr>
    </tbody>
</table>";
        $rule->order       = 210;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'magic-circle-magic';
        $rule->name        = 'Item Creation';
        $rule->description = '<p>The process of enchanting takes time and money. To create a magical item, a character must have the formula for the item, or create one themselves if one does not already exist. The formula describes any Feats, Spells, Powers, Skills, and/or Materials needed to create the item. The time needed to create the item is dependent on the items cost and your skill in Arcana.</p>
<table>
    <thead>
        <tr>
            <th>Arcana</th>
            <th>GP cost per day</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1 - 10</td>
            <td>100 gp worth of enchantment per full day of work</td>
        </tr>
        <tr>
            <td>11 - 20</td>
            <td>200 gp worth of enchantment per full day of work</td>
        </tr>
        <tr>
            <td>21 - 30</td>
            <td>300 gp worth of enchantment per full day of work</td>
        </tr>
        <tr>
            <td>31+</td>
            <td>400 gp worth of enchantment per full day of work</td>
        </tr>
    </tbody>
</table>
<p>Each full days of enchanting adds the GP value listed in the above table towards the full cost of the magic item you are creating. Once the total GP amount matches or exceeds the GP cost of the magic item, then the enchanting has been completed.</p>
<p>A full days work of enchanting is considered to be at least 8 hours per day. Each day, the amount of gold that is applied to the completion of the magic item must be spent as well.</p>
<p>Multiple casters can cooperate towards the creation of a magic item. A second spell caster must also be qualified to use the formula and all of his work counts the full amount towards the completion of the magic item. Third and forth spell casters only count 75% of their GP work amount towards the completion of the magic item, and any additional spell casters only count 50%. In all cases, the full GP amount they contribute must be spent.</p>';
        $rule->order       = '50';
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'haunting-presence';
        $rule->name        = 'Haunting Presence';
        $rule->description = "<p>Sometimes when undead are created, they come into being without a physical form and are merely presences of malign evil. Haunting presences can occur either spontaneously (see Atrocity Calls to Unlife) or as a result of the spell haunt shift. Tied to particular locations or objects, these beings may reveal their unquiet natures only indirectly, at least at first.</p>
<p>As a haunting presence, an undead is impossible to affect or even directly sense. A haunting presence is more fleeting than undead that appear as incorporeal ghosts or wraiths, or even those undead enterprising enough to range the Ethereal Plane. In fact, a haunting presence is tied to an object or location, and only upon the destruction of the object or location is it dispelled. However, despite having no physicality, each haunting presence still possesses the identity of a specific kind of undead. For instance, one haunting presence may be similar to a vampire, while another is more like a wraith.</p>
<h5>The Haunting</h5>
<p>Whenever an undead appears as a haunting presence, it haunts an unattended, mundane object or location. Using the same decision-making process that he uses to populate a location or area with a standard monster, the DM simply chooses an unattended mundane object or location as the subject of a haunting presence. The DM also determines the variety of undead (skeleton, zombie, wraith, or other kind) that serves as the source of the haunting presence. An undead may haunt a discrete object of at least Tiny size and no larger than Huge size. Items (both magical and mundane) currently in the possession of a character (often referred to as attended items) cannot be haunted. Unattended magic items receive a Save as if a spell was being cast upon the item (DC 10 + 1/2 the undead's HD + the undead's CHAmodifier).</p>
<p>A haunting presence becomes a part of the object or location haunted. Haunting presences are always aware of what is going on around the object that they haunt. They can see and hear up to 60 feet away (but do not gain blindsight). A haunting presence cannot be turned, rebuked, or destroyed while the presence remains immaterial (but see Exorcising a Haunting Presence, below). Normal vulnerabilities of a particular kind of undead do not apply to the haunting presence of that undead. For instance, the haunting presence of a vampire haunting a fire poker is not destroyed if brought into sunlight.</p>
<h5>Effects of a Haunting</h5>
<p>A presence haunting an object may do so in a couple of ways. Undead of fewer than 5 Hit Dice may use only one form of haunting, but undead of 5 or more HD can make their presence known using either of the methods described below (impermanent home or poltergeist). No matter the way the haunting presence makes itself felt, the haunting presence of a sentient undead can always choose to speak to nearby creatures, usually in a whispery or incoherent voice that seems to come from the air. However, haunting presences are usually not much for conversation. Characters may note at times that the object they've found or the location they inhabit has a strange air, or the appearance of it is somehow 'off' (with a successful DC 15 INT check).</p>
<h5>Impermanent Home</h5>
<p>An undead presence haunting an object or an area can sometimes become more than a presence, actually taking corporeal or incorporeal form a number of times per week equal to the undead's Hit Dice (that includes haunting presences that manifest 'physically' as incorporeal undead). The presence that takes form does so anywhere within the location it haunts, or in the closest empty space adjacent to the object it haunts. A presence that takes form can remain so for up to a number of minutes equal to its H D. An undead that takes form can always choose to return to its haunting presence status earlier, but it must use an Action to do so.</p>
<p>While in physical form, the undead can take any actions normal for an undead of its kind. It can attack, take damage, and even be destroyed. Unless it is a ghost, lich, or some other sort of undead that is resistant to destruction, the haunting presence is also permanently eradicated, though most attempt to return to their haunting presence status if threatened with such destruction.</p>
<h5>Poltergeist</h5>
<p>If an object has parts that move, such as a wagon, a clock, or a crossbow, a haunting presence can control the object's movement, though the object will move no faster than the undead itself could move in its normal form. Thus, a wagon can be made to steer toward a pedestrian on a street or roll out of a stable with no horse pulling it. A clock can slow or run backward. A crossbow can cock and fire (but not aim or load itself).</p>
<p>An undead with at least 10 HD and a Charisma score of 17 or higher can actually force an object with no moving parts to animate (see Animated Objects, page 13 of the Monster Manual), based on the object's size. No undead, no matter how many Hit Dice it has or what its Charisma score is, can animate an object that has a higher Challenge Rating than its own.</p>
<p>If a location instead of an object is haunted, the haunting presence can animate a number of objects equal to its HD at one time.</p>
<h5>Exorcising a Haunting Presence</h5>
<p>No matter how a haunting presence chooses to reveal itself, it is subject to being is covered and destroyed. Unfortunately, a cleric's turning ability generally has no direct effect on haunting presences, other than to irritate them and focus their attention on the cleric doing the turning. Something more is called for - an exorcist. Exorcism is a special ritual, involving a spoken formula calling upon one or more deities, used with the intention of driving out haunting presences. Exorcism of a haunting presence is essentially a two-step process - forcing a presence to become physical, then destroying the revealed undead in the most expeditious manner possible.</p>
<p>First, the forced revelation can be achieved through the use of a special ritual, which is generally known to anyone with ranks in Knowledge (religion). It must be performed by an exorcist who spends ten consecutive full-round actions chanting or speaking the formula that pertains to exorcism, at the end of which time the exorcist must make a DC 20 Knowledge (religion) check. If the exorcist's concentration is interrupted, the ritual must begin again. If the ritual is successful, the haunting presence becomes physical and must remain so for 1 full round. The exorcist's next action can be used to either attempt to turn the revealed undead, or to continue the ritual, with an additional DC 20 Knowledge (religion) check required at the end of each round. Each successful check forces the undead to stay corporeal or incorporeal for 1 additional round.</p>
<p>Even undead of 5 or fewer HD that normally haunt only as poltergeists are forced to take form by the exorcism ritual, as well as haunting presences that have already used up all their chances to take form for the week. Undead forced to take form usually use their actions to attempt to slay the exorcist before they themselves are destroyed, so exorcists generally bring along companions who can physically attack the revealed undead.</p>";
        $rule->order       = 500;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'pain-as-power';
        $rule->name        = 'Pain As Power';
        $rule->description = '<p>Some spells and magic items allow pain to be stored in special receptacles. The distilled pain, often called Agony, is a think liquid.</p>
<p>Evil spell casters can use liquid pain in magic item creation. Use the following table for reference.</p>
<table>
    <thead>
        <tr>
            <th>Feat to Replicate</th>
            <th>Doses of Liquid Pain required</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Scribe Scroll</td>
            <td>1 dose per level of spell to be scribed. This process cannot be used to replace the need for Improved Scribe Scroll or Greater Scribe Scroll.</td>
        </tr>
        <tr>
            <td>Brew Potion</td>
            <td>1 dose per level of spell to be used in the creation of the Potion. This process cannot be used to replace the need for Improved Brew Potion.</td>
        </tr>
        <tr>
            <td>Inscribe Tattoo</td>
            <td>3 doses per level of spell to be used in the creation of the Tattoo.</td>
        </tr>
    </tbody>
</table>
<p>A dose of pain can also be used as a special evil spell component. Some infernal magic items are powered by pain.</p>';
        $rule->order       = 1400;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'possession';
        $rule->name        = 'Possession';
        $rule->description = "<p>Some fiends with at least 4 Hit Dice and a Charisma score of at least 13 have the spell-like ability to shuck their physical forms and take on an ethereal form that allows them to possess another creature or an object.</p>
<p>The creature's new form is ethereal and thus immune to even the most potent physical attacks and most magical attacks (except, for example, force attacks) by non-ethereal creatures. When a fiend possesses a creature or object, even force effects no longer affect the fiend. Only spells such as dismissal can affect the possessing fiend when cast by non-ethereal creatures. Any sort of attack, magical or otherwise, directed against the fiend affects the possessed creature or object, however.</p>
<p>While a fiend is in ethereal form, its corporeal body lies senseless, as if in a state of suspended animation. The body does not require food or air, but damage or exposure to an extreme environment will kill it. A fiend can roam ethereally as long as it wants, but an ethereal fiend dies if its body is destroyed, and it instantly returns to its body if dispel magic (or a similar effect) is successfully cast on the fiend's body.</p>
<p>The caster level for the fiend's possession ability is equal to the fiend's Hit Dice. Fiends with the possession ability generally have a Challenge Rating 2 higher than the standard fiends of their kind. For example, a succubus with the possession ability is CR 11.</p>
<p>Once a fiend is on the Ethereal Plane, it generally floats through the world insubstantially, seeking a target to possess. Making a possession attempt is a supernatural ability that a fiend can attempt at will as a standard action.</p>
<h5>Possessed Creatures</h5>
<p>If a fiend wishes to possess a creature, the fiends ethereal form must be adjacent to its desired target. A protection from evil spell (or similar effect) makes a creature immune to possession attempts. An unprotected target of a possession attempt must succeed at a Will Save (DC 10 + 1/2 fiend's HD + fiend's CHA bonus) to avoid possession. Evil targets of a possession attempt take a –2 circumstance penalty on this Saves, and target of a possession attempt who is in the middle of committing an evil act takes a further –2 circumstance penalty.</p>
<p>Once a creature succeeds at a Save vs possession, that fiend cannot attempt to possess that creature again for 1 week. On a Failed Save, the victim is possessed.</p>
<p>A fiend in possession of a body becomes a part of the victim, aware of what is going on around the creature that they possess. It can see and hear as well as the victim can. A possessing fiend can, at any time, speak mentally to the creature that it possesses in a language that the creature can understand, although if the victim isn't very intelligent, its understanding may be limited.</p>
<p>A creature possessed by a fiend doesn't always know that it is possessed. Further, a fiend can attempt to hide its presence within the possessed creature, allowing it to pass through a magic circle against evil, enter a forbiddance-warded church, and escape detection by detect evil. To do so, the fiend must make a special “mental” Hide check. This is a Hide check using the fiend's INT modifier rather than its DEX modifier, but which otherwise uses the Hide skill. The Difficulty Class (DC) for the Hide check is 10 + level of the spell + spell caster's relevant ability modifier (just like the Save for a spell). The fiend gains a +4 circumstance bonus on its Hide check if it is not currently controlling the victim. The fiend can also make this Hide check to prevent the possessed creature from taking damage from alignment-based spells such as holy smite. The DC for the Hide check is the same as the Save DC for the damaging spell. If the fiend's Hide check fails, the spell affects the possessed creature as if it had the same alignment as the fiend.</p>
<p>Possessing fiends have immediate access to all of their victim's current thoughts, as the detect thoughts spell, except that they automatically read surface thoughts. If desired, a possessing fiend can probe the possessed creature's memories as well, but the victim is allowed a Will save (DC 10 + 1/2 fiend's HD + fiend's CHA bonus). If the save is successful, the victim keeps the fiend out of his or her thoughts for 24 hours. Whether the save succeeds or fails, probing memories automatically reveals the fiend's presence to the victim.</p>
<p>Physical harm to the possessed creature does not harm the fiend. Killing the possessed victim only forces the fiend back onto the Ethereal Plane, from where it can attempt a new possession; the fiend is unharmed. Not even ethereal creatures can harm a possessing fiend.</p>
<p>A fiend possessing a creature can take one of four roles with respect to its victim: rider, ally, controller, or enemy. The fiend can choose only one role at a time. If a fiend is acting as a controller, it can't also grant its victim the bonuses it could if the fiend were an ally, for example.</p>
<dl>
    <dt>Rider</dt> <dd>
        <p>Much of the time, a fiend that possesses a creature simply rides along with the victim, who is usually unaware of the fiend's presence. The fiend might combine riding with hiding to get into an area protected by forbiddance or slip past a magic circle against evil near a target that it could not otherwise approach. As a free action, the possessing fiend can become the ally or controller of the possessed creature. Both of these actions, however, make the fiend's presence known to the victim (although victims with low Intelligence scores may not understand what is happening to them).</p>
    </dd>
    <dt>Ally</dt> <dd>
        <p>If the possessed creature is aware of the possessing fiend and willing to be its host, the fiend can grant the possessed creature a +4 profane bonus to any single ability score. This bonus is generally granted at the conclusion of some bargaining between the fiend and the possessed creature. The fiend is in control of this bonus and can take it away as a free action if the possessed creature behaves contrary to the fiend's wishes. If the possessed creature doesn't do what the fiend wants, the fiend can go from ally to controller or from ally to enemy as a free action. Because the possessor and the possessed can communicate telepathically, they often form an agreement: The bonus is a reward for the possessed creature if it does as the fiend wishes.</p>
    </dd>
    <dt>Controller</dt> <dd>
        <p>In the most feared aspect of possession, a fiend can take a standard action to attempt direct control over the actions of the victim, who struggles to maintain control over his or her own body. The victim must succeed at a WIS Save every round (DC 10 + 1/2 fiend's HD + fiend's CHA modifier, + 1 for each previous failed save against control that day) to avoid losing control. If the victim's save succeeds, the victim has resisted the fiend, but the fiend can make another control attempt in the next round. Victims struggling against control are considered staggered and can take only partial actions.</p>
        <p>If the possessed creature makes three consecutive Successful Saves, then the possessing fiend cannot make further attempts to control the victim that day. The success or failure of the victim's Save vs control does not affect the overall possession, however, and the fiend is still possessing the creature.</p>
        <p>If the possessed creature fails the Will save against control, the fiend has access to all of the creature's senses, abilities, skills, feats, and spell knowledge. The fiend now acts as though it is the creature in all respects, until control is lost or it relinquishes control. During this time, the possessed creature can still speak mentally to the fiend and is still privy to all sensory input—unless the possessor takes an Action to block the possessed creature's access to the senses. If the fiend wishes, the victim blacks out while the fiend is in charge.</p>
        <p>The fiend uses its own INT, WIS, and CHA scores, but it adopts all of the creature's physical ability scores. Fiends of at least 9 HD and 15 INT that maintain control of a victim for at least 10 rounds a day for seven consecutive days can also draw upon the possessed creature's spell-like abilities (at the same caster level as the possessed creature). The fiend assumes the victim's type and is affected by spells and effects as if it were the possessed creature. Thus, a cornugon-possessed wolf is subject to spells affecting animals, even though it is far more intelligent than a normal wolf.</p>
        <p>The fiend automatically maintains control for a number of rounds equal to 1/2 the fiend's HD + the fiend's Charisma modifier + 1 for each time the fiend has controlled this specific victim. When the fiend's control lapses, it can attempt to reassert control if it chooses.</p>
        <p>Fiends often choose weak-willed creatures to possess, such as golems and other constructs. The construct can make a Will save just as any other creature can to avoid the possession, but it is likely that the possessing fiend can take and retain control, because most constructs have poor Will saves. A fiend possessing a construct can also aid it as described under the ally role, but it must relinquish direct control to do so, and the construct reverts to its prior programming.</p>
    </dd>
    <dt>Enemy</dt> <dd>
        <p>The opposite of an ally, this possessing fiend is a hindrance to a creature it possesses. A possessing fiend usually takes this tactic when it has failed to control its victim or when it is angry with a possessed creature that the fiend was acting as an ally toward. The possessing fiend can grant the victim a –4 profane penalty to any single ability score. The fiend is in control of this penalty and can take it away as a free action, sometimes by working out an agreement with the possessed creature after some telepathic negotiation.</p>
    </dd>
</dl>
<h5>Possessed Objects</h5>
<p>A fiend can possess an object of at least Tiny size and no larger than Huge. An item held, worn, or carried by a character (including magic items) uses its owner's Save to resist possession. Unattended magic items gain a Save as if a spell was being cast upon the item. In each case, the Will save DC is 10 + 1/2 the fiend's HD + the fiend's Charisma modifier. A fiend with the possession ability automatically succeeds when attempting to possess an unattended, nonmagical item</p>
<p>A fiend possessing an object becomes a part of the object. A possessing fiend can see and hear up to 60 feet away from the object, but it can't use darkvision or blindsight while possessing an object, even if it ordinarily has these abilities. The possessing fiend remains vulnerable to spells that affect outsiders, extraplanar creatures, or evil creatures (such as holy word and holy smite) and mind-affecting spells and effects. Physical attacks and most spells (such as fireball) don't affect the fiend, but they might affect the object. Harming the object does not harm the possessing fiend; if the object is destroyed, the fiend takes ethereal form and can choose a new host object (or creature).</p>
<p>A fiend can attempt to hide its presence within a possessed object, allowing it to pass through a magic circle, enter a forbiddance-warded church, and escape detection via spells such as detect evil. Use the same rules as when a fiend hides in a creature. If the spell ordinarily detects or targets only creatures, the fiend gains a +8 circumstance bonus on its Hide check because it is within an object. The fiend can also attempt this Hide check to avoid taking damage from alignment-based damaging spells, such as holy smite. If the fiend fails its Hide check, the possessed object takes damage as if it were the fiend.</p>
<p>A fiend can also possess a substance that has no fixed shape (such as a pool of water or a dust cloud) or is part of a larger object (such as a section of a wall). When it does so, a fiend cannot possess an area or a volume larger than 10 feet on a side.</p>
<p>Some fiends possess an item as a stepping stone for a possession attempt on a character. The possessing fiend gets a bonus on attempts to possess creatures that carry, hold, or wear the item. For each day the possessed item was worn, held, or carried by the target prior to the possession attempt, the DC for the target's Will save increases by +1, up to a maximum of +10.</p>
<p>A fiend possessing an object can take any of the following roles. Changing roles is a standard action.</p>
<dl>
    <dt>Watcher</dt> <dd>
        <p>The fiend possesses an object, usually something big and stationary. It can see and hear at twice its normal range (120 feet) as long as the object remains stationary.</p>
    </dd>
    <dt>Controller</dt> <dd>
        <p>If the possessed object has moving parts, such as a wagon, clock, or crossbow, a possessing fiend can control the movement. A wagon can be made to steer toward a pedestrian on a street or roll out of a stable with no horse pulling it. A clock can slow or run backward. A crossbow can cock and fire (but not aim or load itself ). Possessed objects with wheels or legs cannot move faster than the fiend itself could move in its corporeal form.</p>
        <p>More powerful fiends can exert greater control. A fiend with at least 10 HD and Charisma 17 can force an object to animate even if the object doesn't have any moving parts (such as a table or statue). The possessed object functions as an animated object (see the Monster Manual). However, no fiend can control an animated object with a higher Challenge Rating than the fiend's.</p>
    </dd>
    <dt>Corrupter</dt> <dd>
        <p>The possessed item radiates a cursed, befouling presence. Anyone touching the possessed object must succeed at a Will save (DC 10 + 1/2 fiend's HD + fiend's CHA modifier) or fall under the effect of a bestow curse spell with a caster level equal to the fiend's Hit Dice. Unlike the bestow curse spell, the subject does not necessarily know that the curse is in effect or that it came from the item. Nothing about the object's appearance suggests that it is possessed (although there might be residual evil effects, as described in the Lingering Evil section below). The curse lasts until removed with break enchantment, limited wish, miracle, remove curse, or wish, even if the fiend vacates the possessed object.</p>
        <p>A particularly crafty fiend might possess a small fountain as a corrupter, affecting anyone who touches or drinks the water. Similarly, a fiend could corrupt a patch of ground, affecting anyone who walks over it.</p>
    </dd>
    <dt>Enhancer</dt> <dd>
        <p>A fiend can possess a Tiny or larger weapon or armor and enhance it as if it were a magic item. The fiend can duplicate magic item powers worth up to 2,000 gp per Hit Die. For example, a hezrou (9 HD) that enhances a longsword could bestow up to 18,000 gp worth of powers on it. It could duplicate the effect of a +3 longsword, a +1 unholy longsword, or another combination. A fiend that possesses magic armor or a magic weapon can increase its power by the same amount. Table 8–3: Armors and Table 8–10: Weapons in the DUNGEON MASTER's Guide give prices for various enhancements.</p>
        <p>The fiend is in control of the powers it bestows upon the item. It can take them away as a free action at a moment's notice if the creature using the item does not act in a manner that the fiend wishes. If the fiend leaves the items, it loses all powers bestowed by the possession.</p>
        <p>Despite the fiend's duplication of magic item abilities, a nonmagical possessed item doesn't become actually magical. Detect magic will not sense an aura; detect evil will, however. Smart characters might notice that the possessed item behaves strangely or has an unusual appearance (a magic weapon that isn't masterwork quality, for example, is a tipoff that something is awry). A character who succeeds at a Search check (DC 25) notes that there is “something strange” about the item.</p>
    </dd>
</dl>";
        $rule->order       = 1301;
        $page->rules()->save($rule);
    }
}
