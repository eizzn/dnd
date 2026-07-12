<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsSSeeder extends Seeder
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

        $spell              = new Spell;
        $spell->name        = 'Sabotage Construct';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Construct touched';
        $spell->duration    = '1 minute or until dismissed';
        $spell->description = '<p>This spell functions as the spell Confusion, except as noted here and it only affects Constructs.</p>';
        $spell->saves       = '<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>Confused for 1 round</dd>
    <dt>Failure</dt> <dd>Confused for 1 minute. It can attempt a new Save at the end of each of its turns to end the confusion</dd>
    <dt>Critical Failure</dt> <dd>Confused for 1 minute with no Save to end early</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Construct'], 4);

        $spell              = new Spell;
        $spell->name        = 'Sacred Item';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Object touched';
        $spell->duration    = 'Permanent until discharged';
        $spell->description = '<p>You imbue a touched object with latent positive energy. If the item thereafter touches or is touched by a creature of the following types, the object discharges with a flash of light, dealing 10D4 Positive damage to the qualifying creature.</p>
<ul>
    <li>Any undead creature (Must make a WIS Save or be Immobilized for 1 minute. On Success, the undead is Slowed)</li>
    <li>Any evil outsider</li>
    <li>Any evil creature with the Shapechanger type. An image of its natural form (or most commonly used form) is superimposed over its body, revealing its true nature for all to see.</li>
</ul>
<p>This spell Counters and is Countered by Profane Item.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Sacred Strike';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>You create a purple field of Negative energy shaped like a whip. It forms from any or your hands, but cannot be changed afterwards.</p>
<p>As an Action, you may make a Melee Touch Attack, dealing 4D4 Negative damage per hit, and you are healed the same amount. Due to the great amount of Pain the whip causes, the target must make a CON Save. Undead and Constructs are immune to the Pain and do not need to make a CON Save. Damage dealt to Undead and Constructs does not heal you, and striking an Undead causes you to suffer the same amount of damage instead.</p>
<dl>
    <dt>Material Components</dt> <dd>Two drops of Unholy Water and one of your hairs</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by +5 rounds</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by +1D4</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Critical Failure</dt> <dd>Stunned: 3</dd>
    <dt>Failure</dt> <dd>Stunned: 1</dd>
    <dt>Success</dt> <dd>Slowed: 1</dd>
    <dt>Critical Success</dt> <dd>No additional effects</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 4);

        $spell              = new Spell;
        $spell->name        = 'Safe Clearing';
        $spell->casting     = '1 minute';
        $spell->range       = '30 ft sphere';
        $spell->duration    = '8 hours';
        $spell->description = "<p>You make an area safe from attacks, as if the entire space were under a Sanctuary spell. Once the spell is cast, its area is immobile.</p>
<p>Any opponent attempting to strike or otherwise directly attack a creature within the area, even with a targeted spell, must attempt a WIS Save. If the Save succeeds, the opponent can attack normally and is unaffected by the. If the Save fails, the opponent cannot follow through with the attack, and that Action is lost, and it can't directly attack anyone in the safe clearing for the duration of the spell. Those not attempting to attack creatures inside the warded area remain unaffected. This spell does not prevent the warded creatures from being affected by area or effect spells.</p>
<p>Those inside the Safe Clearing cannot attack without breaking the spell, even if they are unaffected by it.</p>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Sanctuary';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '30 feet';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You ward a creature within range against attack. Until the spell ends, any creature who targets the warded creature with an attack or a harmful spell must first make a Wisdom saving throw. On a failed save, the creature must choose a new target or lose the attack or spell. This spell doesn’t protect the warded creature from area effects, such as the explosion of a fireball.</p>
<p>If the warded creature makes an attack or casts a spell that affects an enemy creature, this spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 1);

        $spell              = new Spell;
        $spell->name        = 'Sand Form';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>Your body, along with all equipment worn or carried, turns into living sand. You take the form of an ooze, and gain the following attributes.</p>
<ul>
    <li>Immunity to Poison</li>
    <li>Immunity to Sleep</li>
    <li>Immunity to Paralysis</li>
    <li>Immunity to Polymorphing</li>
    <li>Immunity to Stunning</li>
    <li>Immunity to Precision damage</li>
    <li>You gain Resistance to Bashing, Piercing, and Slashing</li>
    <li>You become Blind, but you gain Blindsight: 60 feet</li>
    <li>You cannot speak</li>
    <li>You can cast spells that only have requires Somatic Casting</li>
    <li>You Land Speed becomes 20 feet</li>
    <li>You gain a Burrow Speed of 30 feet, but only through Sand</li>
    <li>You can pass through openings as small as a quarter of an inch in diameter.</li>
    <li>You cannot wield weapons or equipment.</li>
    <li>You gain a Natural Attack - an abrasive Slam attack with a gritty pseudopod that has Reach of 10 feet.</li>
    <li>You gain a +10 circumstance bonus to all Hide checks, and you have Concealment</li>
    <li>Upon death, you revert to your original form.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph', 'Earth'], 4);
        $spell->materials()->save(Material::where('name', 'Sand')->firstOrFail(), ['meta' => 'A handful taken from an Elemental with the Earth type']);

        $spell              = new Spell;
        $spell->name        = 'Sand Dagger';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 30 minutes';
        $spell->description = "<p>This spell turns a handful of sand into a keen-edged, metallic blade. It is as hard as steel, but can't be affected by magnetic forces or heat and is not a good conductor. It cannot be larger than twice the length of the caster's hand, nor weigh more than twice the weight of the hand. It deals damage as a dagger +1 and is considered a magical weapon.</p>
<p>A Sand Dagger crumbles into loose sand if dispelled, on the caster's mental command, or instantly upon your death. This spell can be combined with a Flying Dagger spell.</p>
<dl>
    <dt>Material Components</dt> <dd>A handful of sand.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 0);

        $spell              = new Spell;
        $spell->name        = 'Sand Table';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = 'See text';
        $spell->duration    = '6 hours';
        $spell->description = "<p>This spell allows you to create a scale model of the battlefield surrounding your position, showing numbers of troops, their relative positions, and their movement as if you were observing from a great height overhead (1,000 feet up). You cast the spell upon a table or other flat surface and cause the model to appear upon a 5-foot-by-5-foot section of that table or surface. It reflects accurate terrain and topography, though it doesn't identify fine topographical features or concealed or hidden topography. It also indicates all normally visible Small or larger creatures within the area of effect, but it doesn't provide identifying characteristics of those creatures; each creature appears as an indistinct speck, under 1 millimeter in each dimension.</p>
<p>The spell marks obvious war camps and contingents of troops with a symbol of their banner (if they openly carry such a symbol). The spell provides a snapshot of the topography and creature locations when cast; it doesn't adjust for changes that occur during the duration. The table shows the land surrounding itself up to a 1-mile radius from the surface. The sand table does not reveal invisible or incorporeal creatures, nor does it include creatures that are underground, indoors, submerged below the surface of water, below a tree line or other source of cover from above, or flying above 1,000 feet in the air. Those looking at the table can spot Small and larger creatures that are using Stealth to hide, but they take a –10 penalty on their Perception checks because of the size of the models.</p>
<p>Once the spell has been cast, if anything moves or shakes the surface upon which it was placed, the spell ends instantly.</p>";
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Sandblast';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = 'Cone shaped burst, 60 feet';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A violent burst of sand and howling wind streams forth from your hand, extending outward in a cone. Every creature and object within the cone take 6D8 (DEX Save) points of Bludgeoning damage and is subjected to winds of hurricane force that blow directly away from you. These winds blow away Medium or smaller creatures, knock down Large creatures, and check Huge or larger creatures.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 6);

        $spell              = new Spell;
        $spell->name        = 'Sands of Time';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature or object touched';
        $spell->duration    = '1 hour or Instantaneous';
        $spell->description = '<p>You temporarily age the target, immediately advancing it to the next age category. The target immediately takes the age penalties to STR, DEX, and CON for its new age category, but does not gain the bonuses for that category. A creature whose age is unknown is treated as if the spell advances it to middle age. Ageless or immortal creatures are immune to this spell.</p>
<p>If you cast this on an object, construct, or undead creature, it takes 3D6 +10 points of damage as time weathers and corrodes it. This version of the spell has an instantaneous duration.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Time'], 3);

        $spell                = new Spell;
        $spell->name          = 'Sapphire Screen of Shielding';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Nezram';
        $spell->targets       = 'Self';
        $spell->duration      = '1 minute';
        $spell->description   = '<p>You create a levitating, square screen of fluid blue force approximately 5 feet on a side and 1 inch thick. This screen responds immediately to spells and physical attacks that target you, moving with you and flowing freely around your body to protect you from specific attacks.</p>
<p>The shield provides the benefits of the Shield spell and provides Damage Resistance to Bludgeoning, Piercing, Slashing, Acid, Cold, Electricity, Fire, Force, Light, Sonic, Negative, and Positive damage.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 5);

        $spell              = new Spell;
        $spell->name        = 'Sargasso';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '100 square feet area';
        $spell->targets     = 'Area in the sea within 500 feet';
        $spell->duration    = '30 minutes';
        $spell->description = '<p>This spell covers an area with thick seaweed that can slow the progress of ships and sailing vessels that have at least half of their hull inside the affected area. Oar powered boats are slowed even more than sailing vessels. If the speed of the vessel is reduced to zero, the the ship is entangled and can not leave the area for the duration of the spell.</p>
<p>Creatures swimming in the affected area are also slowed with possible entanglement and entrapment below the surface.</p>
<dl>
    <dt>Material Components</dt> <dd>A small amount of seaweed and a few live brine shrimp, which are tossed into the water.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 4);

        $spell              = new Spell;
        $spell->name        = 'Scale Weakening';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'One creature within range';
        $spell->duration    = '1 hour';
        $spell->description = "<p>You shoot a Ray at a target that causes the target's Natural Armor to be weakened. Make a Ranged Spell Attack. If you hit, the target's Natural Armor Class is reduced by 1 and its Damage Reduction is reduced by 3. This can't reduce the target's Armor Class or Damage Reduction below 0.</p>
<dl>
    <dt>Material Components</dt> <dd>A shed snakeskin</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Natural Armor Class reduction by -1 and the Damage Reduction by -3</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Ray'], 2);

        $spell              = new Spell;
        $spell->name        = 'Scales of the Lizard';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>When you cast this spell, your skin toughens and shimmers as if covered with scales. You gain a +2 Enhancement bonus to your Natural Damage Reduction.</p>
<dl>
    <dt>Material Components</dt> <dd>A lizard skin</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Scatter';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '30 feet';
        $spell->targets        = 'Up to 5 targets within range';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>The air quivers around up to five creatures of your choice that you can see within range. An unwilling creature must succeed on a WIS Save to resist the spell. You teleport each affected target to an unoccupied space that you can see within 120 feet of you. That space must be on the ground or on a floor.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>Teleported as described</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Scattering Trap';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '60 feet';
        $spell->area           = '3 5-ft square areas';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>This spell imbues 3 5-ft square areas within range to flare dimly. For the Duration, any creature that enters one of the squares must make a DEX Save or be Teleported in a random direction and a random distance. Use the following to randomly determine where they get Teleported.</p>
<ul>
    <li>Direction: Roll a D8
        <dl>
            <dt>1</dt> <dd>Directly away (12 O'clock)</dd>
            <dt>2</dt> <dd>Diagonal away and to the right (between 1 and 2 O'clock)</dd>
            <dt>3</dt> <dd>Directly to the right (3 O'clock)</dd>
            <dt>4</dt> <dd>Diagonal towards and to the right (between 4 and 5 O'clock)</dd>
            <dt>5</dt> <dd>Directly towards you (6 O'clock)</dd>
            <dt>6</dt> <dd>Diagonal towards and to the left (between 7 and 8 O'clock)</dd>
            <dt>7</dt> <dd>Directly to the left (9 O'clock)</dd>
            <dt>8</dt> <dd>Diagonal away and to the left (between 10 and 11 O'clock)</dd>
        </dl>
    </li>
    <li>Distance: Roll a D6 and use that as the number of 5-ft squares as the distance</li>
</ul>
<p>When you cast this spell, the 5-ft squares you designate do not have to be adjacent to each other but they must all be within 60 feet of each other.</p>
<dl>
    <dt>Material Components</dt> <dd>A pinch of dandelion seeds</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not Teleported</dd>
    <dt>Failure</dt> <dd>Teleported</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Create an additional 5-ft square</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Scatterspray';
        $spell->save_attribute = 'DEX';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->area           = '10 ft radius burst';
        $spell->targets        = '6 or more Diminutive or smaller objects, all within 1 ft, with total weight less than 10 lbs.';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You point to a collection of little, unsecured items and cause them to fly off in all directions. The spray of items makes a burst with a 10-foot radius. If the items are fairly hard or sharp (such as stones, sling bullets, coins, or the like), creatures in the burst take 1D4 Bludgeoning damage unless they make a DEX Save for no Damage. Eggs, fruit, and other soft objects can be used, but the damage is Subdual.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No Damage</dd>
    <dt>Failure</dt> <dd>Full Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Scent';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Target creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>The target gains the Scent Feature for the duration.</p>
<dl>
    <dt>Material Components</dt> <dd>A sprinkle of mustard and pepper, and a drop of sweat.</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = "Scholar's Touch";
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Book or Scroll touched';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You cast this spell and touch a book or scroll and after the Duration, you absorb the knowledge contained within as if you had read it. This is equivalent to a solid reading but not deep study. You do not gain perfect recall of the information, just whatever you would have gotten from reading it completely once. If you can't read the language of the source, the spell has no effect.</p>
<p>This spell cannot be used to prepare spells or to cast magical scrolls, nor does it have any effect when reading a magical book.</p>
<dl>
    <dt>Material Components</dt> <dd>A scrap of parchment and a pinch of tinder.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may absorb the knowledge of an additional book or scroll. The Duration is multiplied by the number of books and or scrolls.</dd>
    <dt>Heightened (+1)</dt> <dd>The Duration becomes 1 round</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Scimitar of Sand';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minute';
        $spell->description = '<p>You create a 3-foot long blade of sand in your hand. Attacks with the Scimitar of Sand are Melee Touch Attacks. The blade is not solid, so you not add your STR to the Damage. The Scimitar deals 1D6 + 3 Negative Damage.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth', 'Negative'], 1);

        $spell              = new Spell;
        $spell->name        = 'Scintillating Pattern';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->area        = '20-ft radius emanation';
        $spell->targets     = 'All creatures in the area';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>A twisting pattern of discordant, coruscating colors weaves through the air, affecting creatures within it. The spell affects a total number 20 Hit Dice. Creatures with the fewest HD are affected first, and among creatures with equal HD, those who are closest first. HD that are not sufficient to affect a creature are wasted.</p>
<p>This spell affects each subject according to its HD</p>
<table>
    <thead>
        <tr>
            <th>HD</th>
            <th>Effect</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>6 or less</td>
            <td>Unconscious for 3 rounds, then Stunned for 3 rounds, and then Confused for 3 rounds</td>
        </tr>
        <tr>
            <td>7 to 12</td>
            <td>Stunned for 3 rounds, then Confused for 3 rounds</td>
        </tr>
        <tr>
            <td>13 or more</td>
            <td>Confused for 3 rounds</td>
        </tr>
    </tbody>
</table>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the HD that this spell affects by +7</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Visual', 'Mental'], 8);

        $spell              = new Spell;
        $spell->name        = 'Scorching Ray';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->targets     = '1 - 3 creatures within Range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You strike with three rays of fire. You can aim at one Target or several. Make a ranged attack for each ray. On a hit, a Target takes 2D6 Fire damage.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You shoot an additional ray.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire', 'Ray'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Scramble Portal';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->range          = '30 feet';
        $spell->targets        = 'One interplanar portal';
        $spell->duration       = '10 minutes';
        $spell->description    = "<p>You randomize the destination of one interplanar portal for the duration of the spell. Anyone who passes through the portal from either side is sent to a random plane instead of the portal's intended destination unless they make a CHA Save.</p>
<dl>
    <dt>Material Component</dt> <dd>A cracked mirror</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>The user of the portal is transported to the original destination</dd>
    <dt>Failure</dt> <dd>The user of the portal is transported to a random location on the same plane of existence</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Portal'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Screen';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '60 feet';
        $spell->area           = '120-ft cube';
        $spell->duration       = '24 hours';
        $spell->description    = "<p>This spell combines several elements to create a powerful protection from Scrying and direct observation.</p>
<p>When casting the spell, you dictate what will and will not be observed in the spell's area. The Illusion created must be state in general terms. Thus, you could specify the illusion of yourself and another character playing chess for the duration of the spell, but you could not have the illusory chess players take a break, make dinner, and then resume their game. You could have a crossroads appear quiet and empty even while an army is actually passing through the area. You could specify that no one be seen (including passing strangers), that your troops be undetected, or even that every fifth person or unit should be visible. Once the conditions are set, they cannot be changed.</p>
<p>Attempts to Scry the area automatically detect the image stated by you with no Save. Sight and sound are appropriate to the illusion created. A band of people standing in a meadow could be concealed as an empty meadow with birds chirping, for instance. Direct observation may allow a Save (as per a normal Illusion), if there is cause to disbelieve what is seen. Certainly onlookers in the area would become suspicious if a marching army disappears at one point to reappear at another. Even entering the area does not conceal the illusion or necessarily allow a Save, assuming that hidden beings take care to stay out of the way of those affected by the illusion.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>If directly observing (not through Divination) and have a reason to suspect something, then the Illusion is revealed as an Illusion</dd>
    <dt>Failure</dt> <dd>The Illusion is believed</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Scrying';
        $spell->casting        = '10 minutes (Material, Somatic, Verbal)';
        $spell->range          = 'planetary';
        $spell->targets        = 'One creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = "<p>Scrying works like Clairvoyance, except that the image you receive is less precise (insufficient for Teleport and similar spells) and instead of creating an eye in a set location within 500 feet, you instead create an eye that appears just above the target.</p>
<p>You can choose a target either by name or by touching one of its possessions or a fallen piece of its body. If you haven't met the target in person, Scrying's DC is 2 lower, and you are unaware of the target's identity (perhaps because you found an unknown creature's fang at a crime scene), the DC is instead 10 lower.</p>
<p>The effect of Scrying depends on the target's WIS Save.</p>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>The spell fails and the target is bolstered against Scrying for 1 week. The target also gains a glimpse of you and learns its rough distance and direction from you</dd>
    <dt>Success</dt> <dd>The spell fails and the target is bolstered against Scrying</dd>
    <dt>Failure</dt> <dd>The spell succeeds</dd>
    <dt>Critical Failure</dt> <dd>The spell succeeds, and the eye follows the target if it moves, traveling up to 60 feet per round</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Scrying', 'Ritual'], 5);
        $spell->materials()->save(Material::where('name', 'Blue Quartz')->firstOrFail(), ['meta' => '10 gp']);

        $spell                 = new Spell;
        $spell->name           = 'Sculpt Sound';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '30 feet';
        $spell->targets        = 'Up to 5 creatures or objects, no two of which can be more than 30 ft apart';
        $spell->duration       = '8 hours';
        $spell->description    = "<p>You change the sounds that target creatures or objects make. You can create sounds where none exists (such as making trees sing), deaden sounds (such as making a party of adventurers silent), or transform sounds into other sounds (such as making a caster's voice sound like a pig snorting).</p>
<p>All affected creatures or objects must be affected in the same way. Once the spell is cast, you cannot change it in any way (which would cause the spellcaster to be unable to cast spells that require Verbal Casting).</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Affected</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
    <dd>Heightened (+1)</dd> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Sonic'], 3);

        $spell              = new Spell;
        $spell->name        = 'Sea Legs';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature touched';
        $spell->duration    = '3 hours';
        $spell->description = "<p>This spell stops the effects of oncoming sea sickness in the target. If unable to do so before, that person also gains the ability to balance and maneuver easily even on a violently heaving deck, just as the most experienced sailor will do. At the GM's discretion, a person under the effects of this spell need not make DEX checks for ship-board actions in stormy weather that could easily be done in calm water.</p>
<p>This spell counters Land Legs.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Seal Portal';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One Interplanar Gate or Portal';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>You permanently seal an Interplanar Portal or Gate. If cast on a Portal, the spell prevents any activation of it (although, this spell can be Dispelled).</p>
<dl>
    <dt>Material Components</dt> <dd>A silver bar worth 50 gp</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Abjuration', 'Portal', 'Ritual'], 6);

        $spell              = new Spell;
        $spell->name        = 'Searing Light';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->targets     = 'One creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You shoot a blazing-hot ray of light tinged with holy energy. Make a ranged touch attack against the target. If you hit, you deal 4D6 Fire damage. If the target is a fiend or undead, you deal an additional 4D6 Positive damage on it. On a critical Hit, double all the damage.</p>
<p>If the light passes through an area of magical Darkness or targets a creature affected by magical darkness, Searing Light attempts to dispel the Darkness. If you need to determine whether the light passes through an area of Darkness, draw a line between you and the spell\'s target.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The Fire damage increases by 3D6 and the Positive damage against fiends and undead increases by 3D6.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Evocation', 'Fire', 'Positive', 'Light', 'Good'], 3);

        $spell                = new Spell;
        $spell->name          = 'Secret Chest';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Leomund';
        $spell->range         = 'Touch';
        $spell->duration      = 'Instantaneous';
        $spell->description   = '<p>You hide a chest, and all its contents, on the Ethereal Plane. You must touch the chest and the miniature replica that serves as a material component for the spell. The chest can contain up to 12 cubic feet of nonliving material (3 feet by 2 feet by 2 feet).</p>
<p>While the chest remains on the Ethereal Plane, you can use an action and touch the replica to recall the chest. It appears in an unoccupied space on the ground within 5 feet of you. You can send the chest back to the Ethereal Plane by using an action and touching both the chest and the replica.</p>
<p>After 60 days, there is a cumulative 5 percent chance per day that the spell’s effect ends. This effect ends if you cast this spell again, if the smaller replica chest is destroyed, or if you choose to end the spell as an action. If the spell ends and the larger chest is on the Ethereal Plane, it is irretrievably lost.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 4);
        $spell->materials()->save(Material::where('name', 'Zardazil')->firstOrFail(), [
            'price' => '5,050 gp',
            'meta'  => 'An exquisite chest (3 ft X 2 ft X 2 ft), and a tiny replica',
        ]);

        $spell              = new Spell;
        $spell->name        = 'Secret Page';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One page up to 3 square feet in size';
        $spell->duration    = 'Unlimited';
        $spell->description = "<p>You change the target's text to different text entirely. If the text is a spellbook or a scroll, you can change it to show a spell you know of Secret Page's level or lower, though the replacement spell cannot be cast or used to prepare a spell. You can also transform the text into some other text have written or have access to. You can specify a password that allows any creature touching the book to change the text back and forth. You must choose the replacement text and the password, if any, when you cast the spell.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Visual', 'Glamor', 'Ritual'], 3);

        $spell                = new Spell;
        $spell->name          = 'Secure Shelter';
        $spell->casting       = '10 minutes (Material, Somatic, Verbal)';
        $spell->spell_creator = 'Leomund';
        $spell->range         = '60 feet';
        $spell->duration      = '24 hours';
        $spell->description   = '<p>You conjure a sturdy cottage or lodge made of materials that is common in the area where the spell is cast. The floor is level, clean and dry. In all respects the lodging resembles a normal cottage, with a sturdy door, two shuttered windows, and a small fireplace.</p>
<p>The shelter has no heating or cooling source (other than natural insulation). Therefore, it must be heated as a normal dwelling, and extreme heat adversely affects it and its occupants. The dwelling does, however, provide considerable security otherwise. It is as strong as a normal stone building, regardless of the material composition. The dwelling resists flames and fire as if it were stone. It is impervious to normal missiles (but not the sort cast by siege engines or giants).</p>
<p>The door, shutters, and even chimney are secure against intrusion, the former two being Arcane Locked and the latter secured by an iron gate at the top and a narrow flue. In addition, these three areas are protected by an Alarm spell. Finally, an unseen servant is conjured to provide service to you for the duration of the shelter.</p>
<p>The Secure Shelter contains rude furnishings</p>
<ul>
    <li>8 bunks</li>
    <li>Trestle table</li>
    <li>8 stools</li>
    <li>Writing desk and chair</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>A square chip of stone, crushed lime, a few grains of sand, a sprinkling of water, and several splinters of wood. These must be augmented by the Unseen Servant spell (string and a bit of wood) if this benefit is to be included.</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>
        <p>The shelter can now house 40 troops.</p>
        <ul>
            <li>The shelter is a billet with a latched door at each end and two shuttered windows on each long side. These doors and windows can be barred from the inside, but the billet does not provide any magical protection.</li>
            <li>The billet contains forty bunks (stacked two high), two trestle tables with ten stools each</li>
            <li>Two fireplaces with raging fires already and enough wood to last for one night.</li>
            <li>Twenty loaves of bread are stacked on each table, and a pot of gruel hangs on a hook over each fire.</li>
        </ul>
    </dd>
    <dt>Heightened (+1)</dt> <dd>
        <p>The shelter is camouflaged to blend in with the surrounding terrain. Any telltale signs of habitation, including smoke, light, or sound is obscured. At any distance of more than 30 feet, the lodge is indistinguishable from natural terrain. Any creature within 30 feet is entitled to a DC 30 Nature check to spot the shelter.</p>
    </dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);

        $spell              = new Spell;
        $spell->name        = 'See Invisibility';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You can see invisible creatures and objects as well as creatures in the Ethereal and Shadow Plane. They appear to you as translucent shapes, you treat them as if they were concealed.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+3)</dt> <dd>The spell has a duration of 8 hours</dd>
    <dt>Heightened (+2)</dt> <dd>The spell gains an Area of 30-ft. All invisible creatures and creatures in the Ethereal or Shadow Plane are visible so long as they remain in the Area.</dd>
    <dt>Permanency Heightened (+3)</dt> <dd>2000 gp, 2 CON Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Enchantment', 'Permanency'], 2);

        $spell               = new Spell;
        $spell->name         = 'Seed: Mythal';
        $spell->casting      = '10 hours (Somatic, Verbal)';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>5 Secondary Casters of at least 20th level</dd>
    <dt>Sacrifice</dt> <dd>10 STR damage, 14 CON damage, 16 INT damage, 14 WIS damage</dd>
</dl>';
        $spell->range       = '100-foot radius sphere, 30 feet range';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>You create a permanent magical field centered on the point you choose. You (or other casters cooperating with you) can then cast a number of other spells into this field, thereby either granting or denying access to them to creatures within the field. Effects you can include in your mythal fall into four categories:</p>
<ul>
    <li>Prevalent spells (always active)</li>
    <li>Arointed spells (always denied in the mythal)</li>
    <li>Vanguard spells (available on demand to those within the field)</li>
    <li>Prevalent powers (persistent effects that do not map to any particular spell)</li>
</ul>
<p>You mythal can include up to one effect per caster level, but each component spell you cast into it affects the Arcana DC of this spell.</p>
<p>Once the mythal is seeded, it cannot be dispelled, disjoined, or suppressed by any non-epic spell.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 11);
        $spell->skills()->save(app()->skills['Arcana'], ['meta' => 'DC Based on component spells that are to be added.']);

        $spell                 = new Spell;
        $spell->name           = 'Seed of Moander';
        $spell->casting        = '1 minute (Material, Somatic, Verbal, Secondary Caster)';
        $spell->requirements   = '<dl>
    <dt>Secondary Caster</dt> <dd>At 2 other priests of Moander must cast this spell</dd>
</dl>';
        $spell->spell_creator  = 'Moander';
        $spell->save_attribute = 'CON';
        $spell->range          = 'Touch';
        $spell->targets        = 'One living humanoid creature touched';
        $spell->duration       = 'Permanent';
        $spell->description    = '<p>When this spell is completed, it creates a seed. This seed must immediately be attached to the skin of the Target. The seed bursts and tries to implant itself on the Target. The Target makes a CON Save, or be affected. Affected creatures have a growing mold growing within them, turning them into a Puppet of Moander in 10 days. The mold turns their entrails into a festering mass of rotting, mold-encrusted tendrils that eventually reduce the Target into a dried-out husk, killing them. Externally, the Target appears unchanged until death except for a faint odor of pollen and a small flowered vine wrapped around one ear.</p>
<ul>
    <li>If the Target drinks Holy Water within 1 hour of being affected, the mold dies and the Target is no longer affected</li>
    <li>If Holy Water is drunk within 2 days of being affected, then the molds growth is slowed to half rate</li>
    <li>A Remove Disease Spell or Heal Spell used within 30 days of being affected stops the molds growth and the Target can then heal any damage to their innards normally</li>
    <li>Cold Damage that deals at least 20 Damage kills the mold. The Target can then heal any damage to their innards normally.</li>
</ul>
<p>An affected Target retains all of their abilities and skills, but not spells above 3rd level.</p>
<p>An affected Target can sprout up to 2 10-foot long tendril from any orifice or directly through the skin. This tendril has the following stats.</p>
<dl>
    <dt>AC</dt> <dd>18</dd>
    <dt>HP</dt> <dd>12</dd>
    <dt>Attack</dt> <dd>10-foot reach, Melee Attack, single Target, can deal 2D8 Bludgeoning or start a Grapple</dd>
</dl>
<dl>
    <dt>Material Components</dt> <dd>Emerald worth at least 1,000 gp, which the spell consumes.</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Fully effected</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 5);

        $spell              = new Spell;
        $spell->name        = 'Seed of Undeath';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One willing living creature Touched';
        $spell->duration    = '1 month';
        $spell->description = "<p>You touch a willing living creature and implant a kernel of Negative Energy. If the target should die during the Duration, it rises as a Zombie (as the Animate Dead Spell) at the end of the target's next turn and under your control for the next 24 hours (you may use the Animate Dead spell to maintain control as normal). If too little of the target's body is left at the time of death, then this spell fails.</p>
<dl>
    <dt>Material Components</dt> <dd>A black onyx gem worth 25 gp. If the gem is ever destroyed, then the spell ends. The gem may not be reused as a Material Component for any other spell for the Duration of this spell.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may cast this spell on an unwilling Target. The Target gets a CON Save to resist this effect.</dd>
    <dt>Heightened (+3)</dt> <dd>The Target becomes a Juju zombie instead. The Material Component becomes a 2,500 gp black onyx gem.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead', 'Ritual'], 4);

        $spell              = new Spell;
        $spell->name        = 'Seek Eternal Rest';
        $spell->casting     = '1 hour (Somatic, Verbal, Secondary Casters, Sacrifice)';
        $spell->duration    = '8 hours';
        $spell->description = '<p>Double all Turning Undead results.</p>
<dl>
    <dt>Secondary Casters</dt> <dd>1 Secondary Caster</dd>
    <dt>Sacrifice</dt> <dd>1 CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Undead', 'Ritual'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Seeming';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->save_attribute = 'CHA';
        $spell->duration       = '8 hours';
        $spell->description    = '<p>This spell allows you to change the appearance of any number of creatures that you can see within range. You give each target you choose a new, illusory appearance. An unwilling target can make a CHA Save, and if it succeeds, it is unaffected by this spell.</p>
<p>The spell disguises physical appearance as well as clothing, armor, weapons, and equipment. You can make each creature seem 1 foot shorter or taller and appear thin, fat, or in between. You can’t change a target’s body type, so you must choose a form that has the same basic arrangement of limbs. Otherwise, the extent of the illusion is up to you. The spell lasts for the duration, unless you use your action to dismiss it sooner.</p>
<p>The changes wrought by this spell fail to hold up to physical inspection. For example, if you use this spell to add a hat to a creature’s outfit, objects pass through the hat, and anyone who touches it would feel nothing or would feel the creature’s head and hair. If you use this spell to appear thinner than you are, the hand of someone who reaches out to touch you would bump into you while it was seemingly still in midair.</p>
<p>A creature can use its action to inspect a target and make an INT (Insight) check against your spell save DC. If it succeeds, it becomes aware that the target is disguised.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>Appearance changes</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Visual', 'Glamor'], 5);

        $spell                = new Spell;
        $spell->name          = 'Sending';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range         = 'Planetary';
        $spell->targets       = 'One familiar creature';
        $spell->spell_creator = 'Enollar';
        $spell->duration      = '1 round';
        $spell->description   = '<p>You send the creature a message of 25 words or fewer, and it can respond immediately with its own message of 25 words or fewer.</p>';
        $helper->addTypesToSpell($spell, ['Divination'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Sepia Snake Sigil';
        $spell->casting        = '10 minutes (Material, Somatic, Verbal)';
        $spell->save_attribute = 'DEX';
        $spell->range          = 'Touch';
        $spell->targets        = 'One touched book or written work';
        $spell->duration       = 'Permanent or until discharged; until released or 5 days';
        $spell->description    = '<p>When you cast this spell, a small symbol appears in the text of one written work such as a book, scroll, or map. The text containing the symbol must be at least twenty-five words long.</p>
<p>When anyone reads the text containing the symbol, an arcane snake springs into being and strikes the reader, provided there is a line of effect between the symbol and the reader. SImply seeing the en-spelled text is not sufficient to trigger the snake, the subject must deliberately read it. The Target makes a DEX Save to evade the snake. If Success, the snake dissipates in a flash of brown light accompanied by a puff of dun-colored smoke and a loud noise. If the Target Fails, it is engulfed in a shimmering amber field of force and immobilized until released, either at your command or when 5 days have passed.</p>
<p>While trapped in the amber field of force, the subject does not age, breathe, grow hungry, sleep, or regain spells. It is preserved in a state of suspended animation, unaware of its surroundings. It can be damaged by outside forces (and perhaps even killed), since the field provides no protection against physical injury. However, a dying subject does not lose Hit Points or become stable until the spell ends.</p>
<p>The hidden sigil cannot be detected by normal observation, and Detect Magic reveals only that the entire text is magical. A Dispel Magic can remove this spell.</p>
<dl>
    <dt>Material Components</dt> <dd>500 gp worth of powdered amber, a scale from any snake, and a pinch of mushroom spores.</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Trapped in an amber field that places the target in suspended animation for 5 days</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell                = new Spell;
        $spell->name          = 'Sequester';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range         = 'Touch';
        $spell->spell_creator = 'Enollar';
        $spell->duration      = 'Until dispelled';
        $spell->description   = '<p>By means of this spell, a willing creature or an object can be hidden away, safe from detection for the duration. When you cast the spell and touch the target, it becomes invisible and can’t be targeted by divination spells or perceived through scrying sensors created by divination spells.</p>
<p>If the target is a creature, it falls into a state of suspended animation. Time ceases to flow for it, and it doesn’t grow older.</p>
<p>You can set a condition for the spell to end early. The condition can be anything you choose, but it must occur or be visible within 1 mile of the target. Examples include “after 1,000 years” or “when the tarrasque awakens.” This spell also ends if the target takes any damage.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 7);
        $spell->materials()->save(Material::where('name', 'Emerald')->firstOrFail(), [
            'price' => '5,000 gp',
            'meta'  => 'Powdered with the other gems, which the spell consumes',
        ]);
        $spell->materials()->save(Material::where('name', 'Diamond')->firstOrFail(), []);
        $spell->materials()->save(Material::where('name', 'Ruby')->firstOrFail(), []);
        $spell->materials()->save(Material::where('name', 'Sapphire')->firstOrFail(), []);

        $spell                 = new Spell;
        $spell->name           = 'Serpent Arms';
        $spell->casting        = 'Somatic Casting, Ability Damage';
        $spell->requirements   = '<dl>
    <dt>Ability Damage</dt> <dd>2 INT Damage</dd>
</dl>';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'Self';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>Your arms turn into serpents that can be used as Natural Weapons. The serpents provide you with a 10-foot reach. You gain a +2 bonus to Hit with the serpents.</p>
<p>The serpents deal 1D8 Piercing damage + 1D6 STR Damage + another 1D6 STR Damage 1 minute later. The poison allows a CON Save to avoid its effects.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Piercing Damage only</dd>
    <dt>Failure</dt> <dd>Piercing Damage + 1D6 STR Damage form Poison and another 1D6 STR Damage 1 minute later.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Serpent Arrow';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Arrows or darts touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>For the duration, you can turn an arrow or dart into a poisonous snake. Any arrow you handle turns into a Poisonous Snake, it remains rigid until it is shot or thrown. If you hit with the Ranged attack, it deals the damage for the Poisonous Snake as well (1 Piercing + 2D4 Poison).</p>
<p>Weather the snake hits or misses, it continues to try and attack the creature you aimed at.</p>';
        $spell->heightened = "<dl>
    <dt>Heightened (+1)</dt> <dd>
        <p>The duration becomes 1 round and you may imbue only a single arrow or dart. The snake's poison becomes the following.</p>
        <dl>
            <dt>Onset</dt> <dd>1 round</dd>
            <dt>Stage 1</dt> <dd>1D8 CON</dd>
            <dt>Stage 2</dt> <dd>1D8 CON (DC 13 CON)</dd>
        </dl>
    </dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Sever Lifeline';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'Self';
        $spell->duration    = 'Permanent';
        $spell->description = "<p>This spell permanently detaches you from your lifeline. This negates the rule concerning doubling lifelines, and that's all most casters should know. The exact benefits and disadvantages are unknown (GM knows). Exactly how much you can research this is up to the GM.</p>
<p>This spell must be cast while in Temporal Prime and the knife is used to physically sever your lifeline at the point it turns into the insubstantial mist trail.</p>
<dl>
    <dt>Material Components</dt> <dd>A small silver knife enchanted to store a tether, and a diamond worth 10,000 gp, sprinkled acros the blade.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Chronomancy'], 10);

        $spell              = new Spell;
        $spell->name        = 'Shade Arrow';
        $spell->casting     = 'Free Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One masterwork arrow or bolt';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell is cast upon a masterwork arrow or bolt, transforming it into pure black shadow.</p>
<p>You may use the missile to make a Ranged Touched Attack, dealing 2D4 STR Damage on hit. The arrow dissipates at the end of your turn.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 5);

        $spell              = new Spell;
        $spell->name        = 'Shadow Blade';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You weave together threads of shadow to create a sword of solidified gloom in your hand. It counts as a simple melee weapon with which you are proficient. It deals 2D8 Nonlethal damage on a hit (although the target will believe it to be Slashing Damage, but does not gain Resistence even if they have Resistence to Slashing damage) and has the Finesse, Light, and Thrown properties (range 20/60). When you use the sword to attack a target that is in dim light or darkness, you get a +3 bonus to hit.</p>
<p>If you drop the weapon or throw it, it dissipates at the end of the turn. Thereafter, while the spell persists, you can use a Free Action to cause the sword to reappear in your hand.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Shadow'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Shadow Conjuration';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'See text';
        $spell->description    = '<p>You use material from the ShadowFell to shape quasi-real illusions of one or more creatures. This spell can mimic any Conjuration (Summoning) Wizard spell of 3rd level or lower.</p>
<p>If a creature is summoned, it only has 25% of its normal Hit Points and only deals 25% of its normal Damage and has a -3 penalty to their AC and has no Damage Reduction. Any creature who interacts with the Shadow creature may make a WIS Save to realize its Shadow nature.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>You realize that the creature is made of Shadow</dd>
    <dt>Failure</dt> <dd>You believe that the creature is truly the creature and not one made of Shadow</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Max Spell Level of Summoning spell that this spell can mimic</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Shadow'], 4);

        $spell              = new Spell;
        $spell->name        = 'Shadow Double';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = '1 minute';
        $spell->description = "'<p>When you cast this spell, nearby shadows gather together and form a humanoid shape that resembles you. You create a shadowy duplicate of yourself at a place within range. As an Action, you can direct it to use its 3 Actions. The Shadow can act the turn you cast this spell.</p>
<p>The Shadow can make Melee and Ranged attacks using weapons similar to yours, although none of the Shadows equipment is magical, they are all made of Shadow stuff. All attacks made by the Shadow deals half damage. The Shadow cannot cast any spells and all miscellaneous equipment is made of Shadow (so vials of poison won't work because the poison is made of Shadow and not real poison). Effects such as smoke bombs however will still work, but the gas has no other effect other than to obscure vision.</p>
<p>The Shadow uses your Attack bonus, but does not gain any bonus to Hit or Damage from Ability Scores. It has 50% of your Hit Points and has your AC -3 and has no Damage Reduction. The Shadow has a score of 7 in all Abilities.</p>
<p>If you have the following Feats or Talents, then your Shadow has it also</p>
<ul>
    <li>Deny Advantage</li>
    <li>Improved Reaction</li>
    <li>Mobile</li>
    <li>Dodge</li>
    <li>Improved Aid Another</li>
    <li>Quick Draw</li>
    <li>Any Feat or Talent with the Combat Master Type</li>
    <li>Any Feat or Talent with the Attack, Strike, Melee, or Ranged Type</li>
    <li>Any Feat or Talent with the Feint Type</li>
    <li>Any Feat or Talent with the Finisher Type</li>
    <li>Any Feat or Talent with the Flanking Type</li>
    <li>Any Feat or Talent with the Stance Type</li>
    <li>No Feat or Talent with the Arcane, Divine, Item Creation, Primal, Psionic, Skill or Wild Shape Type</li>
    <li>No Feat or Talent with the Heroic Surge Type</li>
    <li>No Feat or Talent with the Rage Type</li>
</ul>
<p>Any Feat or Talent that has a Type that is allowed but also has a Type that is not allowed is not allowed.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Shadow'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Shadow Evocation';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = 'As copied spell';
        $spell->duration       = 'As copied spell';
        $spell->description    = "<p>You tap energy from the Plane of Shadow to cast a quasi-real, illusory version of an Arcane Evocation spell (a spell with the Evocation type (and does not have the Divination, Necromancy, Transmutation, and/or Abjuration type) that appears on the Wizard's Spell list) that is 1 level lower than the Spell Level of this spell.</p>
<p>If the copied spell allows a Save, then the targets are allowed 2 Saves, one to disbelieve this spell, and the other for the copied spells Save. For each Success, halve the damage dealt (so if both Saves are Successful, then the target takes 1/4 th damage). If the Save for this spell is Successful and the copied spell has any effect other than damage, then the non-damaging part has no effect. Objects automatically Succeed the Save for this spell.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>This spell has no effect against the target</dd>
    <dt>Success</dt> <dd>Any effect of the copied spell that does not deal damage has no effect. Any damage that the copied spell deals is halved (the target gets to Save against the copied spell, if the copied spell allows one).</dd>
    <dt>Failure</dt> <dd>The spell has all of its normal effects (the target is allowed to make a Save against the copied spell if the copied spell allows one)</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the maximum allowed Evocation spell level to copy by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Shadow'], 5);

        $spell              = new Spell;
        $spell->name        = 'Shadow of Moil';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>Flame-like shadows wreathe your body until the spell ends, causing you to become heavily obscured to others. The shadows turn dim light within 10 feet of you into darkness, and bright light in the same area to dim light.</p>
<p>Until the spell ends, you have resistance to Positive damage. In addition, whenever a creature within 10 feet of you hits with an attack, the shadows lash out at that creature, dealing 2D8 Negative damage.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative', 'Shadow'], 4);

        $spell              = new Spell;
        $spell->name        = 'Shadow Form';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You call forth the power of Shadow, enveloping yourself in a clinging, concealing shroud of Shadow.</p>
<p>While this spell is in effect, you gain a number of benefits.</p>
<ul>
    <li>The shadows wrapping your form grant you a +4 Competence bonus to Escape Artist, Hide, and Move Silently checks</li>
    <li>Your shadowy form also provides you with concealment.</li>
    <li>This shadowy concealment is not negated by a See Invisibility spell, but a True Seeing spell does reveal you.</li>
    <li>Standing in the radius of a Daylight spell or a bright natural sunlight temporarily suppresses the concealment effect.</li>
    <li>If you have at least 5 ranks in Escape, you can attempt to slip through a solid object or barrier up to 5 feet thick with a DC 20 Escape Check. Using this ability ends the spell regardless of Success.</li>
    <li>If you have at least 10 ranks in Escape, you can attempt to pass through an object or barrier at least 10 feet thick</li>
    <li>If you have at least 15 ranks in Escape, you can attempt to pass through a barrier composed of magical force (or similar magical obstacles)</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>A small piece of black cloth taken from a funeral shroud.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Shadow'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Shadow Guardian';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '6 hours';
        $spell->description    = '<p>You create a guardian that has the statistics below (regardless of actual size or appearance). In addition to the brief orders given to the Shadow Guardian, you can give the guardian a simple trigger to cause it to start attacking (such as "Attack anyone that does not wear these colors).</p>
<p>The Shadow Guardians have no special visual acuity. Invisibility, disguises, and the like can easily fool them.</p>
<p>Against creatures that recognize a Shadow Guardian as an Illusion, it deals 50% damage and has no Damage Reduction.</p>
<dl>
    <dt>Ability Scores</dt> <dd>
        <dt>STR</dt> <dd>14</dd>
        <dt>DEX</dt> <dd>14</dd>
        <dt>CON</dt> <dd>-</dd>
        <dt>INT</dt> <dd>-</dd>
        <dt>WIS</dt> <dd>14</dd>
        <dt>CHA</dt> <dd>1</dd>
    </dd>
    <dt>HD</dt> <dd>4D8</dd>
    <dt>HP</dt> <dd>18</dd>
    <dt>Speed</dt> <dd>30 ft</dd>
    <dt>AC</dt> <dd>14</dd>
    <dt>Damage Reduction</dt> <dd>4</dd>
    <dt>Attack</dt> <dd>
        <dt>Melee</dt> <dd>+4 (1D8 + 2)</dd>
    </dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>The Shadow Guardian deals 50% damage and has no Damage Reduction</dd>
    <dt>Failure</dt> <dd>The Shadow Guardian deals damage as normal and has its full Damage Reduction</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Shadow'], 5);

        $spell              = new Spell;
        $spell->name        = 'Shadow Mask';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours';
        $spell->description = '<p>You cause a mask of shadows to form around your face. It does not impede your vision, and provides the following.</p>
<ul>
    <li>It cannot be physically removed from your face and completely obscures your facial features.</li>
    <li>You gain a +5 bonus on Saves vs Light spells.</li>
    <li>So long as you immediately avert your eyes from a gaze attack, you automatically succeed in avoiding it if the Gaze attack can be averted.</li>
</ul>
<p>When the spell ends, the shadow mask fades over the course of 2 rounds (rather than immediately). If this spell is Dispelled, it fades over 2 rounds. If you are in the area of an Anti-magic field, then the mask is suppressed immediately as normal.</p>
<dl>
    <dt>Material Components</dt> <dd>A mask of black cloth</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Shadow'], 2);

        $spell              = new Spell;
        $spell->name        = 'Shadow Shroud';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>This spell coats your body with a thin membrane of darkness. You gain the following</p>
<ul>
    <li>It negates any penalties or other harmful effects imposed by any Light Blindness or Light Vulnerability.</li>
    <li>You gain a +5 Competence bonus to Stealth (Hide) checks made in areas of shadow and darkness</li>
</ul>
<p>This spell is suppressed by entering the area of a Spell with the Light Descriptor of 3rd level or higher.</p>
<p>This spell is Countered by any spell with the Light Descriptor of 2nd level or higher.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Darkness'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Shadow Walk';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->save_attribute = 'WIS';
        $spell->targets        = 'Up to 2 touched creatures';
        $spell->duration       = 'Up to 8 hours';
        $spell->description    = "<p>You and any creatures you touch may transport along a coiling path of shadowstuff to the edge of the Shadowfell. You may use the Shadowfell to travel a distance to return to your plane of original but a great distance from the place your departed from. In the Shadowfell, you move at a rate of 50 miles per hour. All the travelers must continue to be in touch with each other at all times.</p>
<p>Because of the blurring of reality between the Shadowfell and the Material Plane, you cannot make out details of the terrain or areas you pass over during transit, nor can you predict perfectly where your travel will end. It's impossible to judge distances accurately, making the spell virtually useless for scouting or spying. Furthermore, when the spell effect ends, you are shunted 1D10 X 100 feet in a random horizontal direction from your desired endpoint. If this places you within a solid object, you are shunted 1D10 X 1000 feet further.</p>
<p>This spell can be used to travel to other planes that border the Shadowfell, but this usage requires your travel to arrive at a border with another plane of reality.</p>
<p>Any creature touched by you when you cast this spell also makes the transition to the Shadowfell. They may opt to follow you, wander off through the plane, or stumble back into the Material Plane (50% chance for either of the latter results if they are lost or abandoned by you).</p>
<p>Creatures unwilling to accompany you into the Shadowfell may make a WIS Save, negating the effect if successful.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The unwilling creature is not taken to the Shadowfell</dd>
    <dt>Failure</dt> <dd>The unwilling creature is forced into the Shadowfell</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may take an additional 3 creatures</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation', 'Shadow'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Shadowblast';
        $spell->casting        = 'Material Casting, Somatic Casting,Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '500 feet';
        $spell->area           = '20-foot radius';
        $spell->duration       = 'Instantaneous (and 1 day)';
        $spell->description    = "<p>This spell is particularly effective against creatures native to the Plane of Shadow, spells with the Shadow Descriptor, or beings that are Touched by Shadow. It causes a flash of light in the area of effect and has the following effects.</p>
<ul>
    <li>It clears the spell's area of any portals or weak spots between the Plane of Shadow and the current Plane. Any attempt to open a new connection to the Plane of Shadow automatically fails (this lasts for 1 day)</li>
    <li>Spells with the Shadow Descriptor cannot be cast in the area for 1 day.</li>
    <li>All active spells in the Area with the Shadow Descriptor of 4th level or lower is Dispelled.</li>
    <li>Natives of the Plane of Shadow caught in the Area take 2D6 Light Damage and must make a CON Save or be Stunned for 1 minute. If the Save is Successful, they are Stunned for 1 round instead.</li>
    <li>Undead creatures in the Area take 5D6 Light Damage (no Save). This stacks with the damage if they are also natives of the Plane of Shadow</li>
</ul>
<p>Creatures that are on the Plane of Shadow are not affected. This spell cannot be cast in the Plane of Shadow.</p>
<p>This spell can be used to Counter any Spell with the Shadow Descriptor of 4th level or lower</p>
<dl>
    <dt>Material Components</dt> <dd>A handful of grave dirt, squeezed tightly and flung.</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Stunned for 1 round</dd>
    <dt>Failure</dt> <dd>Stunned for 1 minute</dd>
    <dt>Critical Failure</dt> <dd>Stunned for 10 minutes</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 4);

        $spell              = new Spell;
        $spell->name        = 'Shadowgate';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You open a portal to the Plane of Shadow. The portal remains open for the Duration and any creature may pass from either side. Since this spell must be cast in an area of heavy shadows, it appears almost invisible, while from the Shadowfell, it appears as a white hole.</p>
<p>Note, this spell cannot be cast from the Shadowfell, and it must be cast on a Plane that coexists with the Plane of Shadow (mostly the Material, Feywild, and Elemental Planes). If you enter the portal and the portal closes, you must find another way back.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Shadow', 'Portal'], 5);

        $spell               = new Spell;
        $spell->name         = 'Shambler';
        $spell->casting      = '10 minutes (Material, Somatic, Verbal, Secondary Caster, Ability Damage)';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 3 others, one must cast Plant Growth, another Speak with Plants, and another casts Call Lightning. The lightning from Call Lightning must be able to strike the material components.</dd>
    <dt>Ability Damage</dt> <dd>5 CON Damage</dd>
</dl>';
        $spell->duration     = 'Instantaneous';
        $spell->description  = '<p>You create a new Shambling Mound. The newly created Shambling Mound will serve you for the next 7 days. After which, the creature seeks his freedom and moves off to find someplace where it can live.</p>
<p>The Shambling mound requires to keep its body damp. If the Shambling mound is not able to absorb large quantities of water, it will leave in 2 days.</p>
<p>Note, Shambling Mounds cannot speak and have no language, so to communicate with them, you will need to cast Speak with Plants.</p>
<p>Unless the Shambling Mound is treated badly, it will treat you as Friendly.</p>
<dl>
    <dt>Material Components</dt> <dd>About 300 lbs of rotting vegetable matter, at least 50 lbs must consist of vines and thin branches and 5 gallons of water. A sapphire worth at least 500 gp and rare herbs worth at least 50 gp.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Plant'], 8);

        $spell              = new Spell;
        $spell->name        = 'Shape Metal';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Cube of meta 10 across or smaller';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Ths spell is similar to Shape Stone, except as noted here.</p>
<p>You may cast this spell in combat. Use an Action to make a Melee Touch Attack. This attack triggers Attacks of Opportunity. On a Success, you may warp the touched metal. This depends on the type of armor and how much the target is covered in the armor.</p>
 <ul>
    <li>If the target is wearing metal armor along their legs, you can reduce their land Speed to 5 ft</li>
    <li>If they are wearing metal armor along their arms, you can make it so that they suffer a -10 penalty to all their attack rolls</li>
    <li>If they have metal armor on their chest, you can warp the armor to cause them 2D6 Piercing Damage per round until they remove the armor.</li>
    <li>If used against a metal shield, you can reduce the amount of protection it provides by crumpling it. Treat the shield as one size category smaller (A large shield not is treated as a small shield, etc).</li>
    <li>If you target a metal weapon, you can warp it so that it becomes less effective. The weapon will deal one Dice size smaller damage (a sword that deals 1D6 will now deal 1D4, etc)</li>
    <li>If you target a creature made of metal, you can deal 15D6 damage to it, and it becomes Slowed and Weakened.</li>
</ul>
<p>This spell only affects a single piece of metal, so a suit of chain mail will not be very effected since you would be warping a single chain in the armor. Similarly, studded leather would not be very effective since only a single stud would be effective.</p>
<p>This spell can be used to make drastic changes in the touched metal (similar to Shape Stone). However, this kind of shaping of metal is not possible in combat.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 4);

        $spell              = new Spell;
        $spell->name        = 'Shape Stone';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Cube of stone 10 feet across or smaller';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You touch a stone object of Medium size or smaller or a section of stone no more than 5 feet in any dimension and form it into any shape that suits your purpose. So, for example, you could shape a large rock into a weapon, idol, or coffer, or make a small passage through a wall, as long as the wall is less than 5 feet thick.</p>
<p>You could also shape a stone door or its frame to seal the door shut. The object you create can have up to two hinges and a latch, but finer mechanical detail isn't possible.</p>";
        $helper->addTypesToSpell($spell, ['Earth', 'Transmutation'], 4);

        $spell              = new Spell;
        $spell->name        = 'Shape Water';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '5-foot cube. 30 foot range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You choose an area of water that you can see within range and that fits within a 5-foot cube. You manipulate it in one of the following ways:</p>
<ul>
    <li>You instantaneously move or otherwise change the flow of the water as you direct, up to 5 feet in any direction. This movement doesn’t have enough force to cause damage.</li>
    <li>You cause the water to form into simple shapes and animate at your direction. This change lasts for 1 hour.</li>
    <li>You change the water’s color or opacity. The water must be changed in the same way throughout. This change lasts for 1 hour.</li>
    <li>You freeze the water, provided that there are no creatures in it. The water unfreezes in 1 hour.</li>
</ul>
<p>If you cast this spell multiple times, you can have no more than two of its non-instantaneous effects active at a time, and you can dismiss such an effect as an action.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 0);

        $spell              = new Spell;
        $spell->name        = 'Shape Wood';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'An unworked piece of wood up to 20 cubic feet in volume';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You shape the wood into a rough shape of your choice; it can't include intricate parts, fine details, moving pieces, or the like.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 2);

        $spell              = new Spell;
        $spell->name        = 'Shapechange';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>You assume the form of a different creature for the duration. The new form can be of any creature with a challenge rating equal to your level or lower. The creature can't be a construct or an undead, and you must have seen the sort of creature at least once. You transform into an average example of that creature, one without any class levels or the Spellcasting trait.</p>
<p>Your game statistics are replaced by the statistics of the chosen creature, though you retain your alignment and INT, WIS, and CHA scores. You also retain all of your skill and saving throw proficiencies, in addition to gaining those of the creature. If the creature has the same proficiency as you and the bonus listed in its statistics is higher than yours, use the creature’s bonus in place of yours. You can't use any legendary actions or lair actions of the new form.</p>
<p>You assume the hit points and Hit Dice of the new form. When you revert to your normal form, you return to the number of hit points you had before you transformed. If you revert as a result of dropping to 0 hit points, any excess damage carries over to your normal form. As long as the excess damage doesn't reduce your normal form to 0 hit points, you aren't knocked unconscious.</p>
<p>You retain the benefit of any features from your class, race, or other source and can use them, provided that your new form is physically capable of doing so. You can’t use any special senses you have (for example, darkvision) unless your new form also has that sense. You can only speak if the creature can normally speak.</p>
<p>When you transform, you choose whether your equipment falls to the ground, merges into the new form, or is worn by it. Worn equipment functions as normal. The GM determines whether it is practical for the new form to wear a piece of equipment, based on the creature’s shape and size. Your equipment doesn't change shape or size to match the new form, and any equipment that the new form can’t wear must either fall to the ground or merge into your new form. Equipment that merges has no effect in that state.</p>
<p>During this spell's duration, you can use your action to assume a different form following the same restrictions and rules for the original form, with one exception: if your new form has more hit points than your current one, your hit points remain at their current value.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 9);
        $spell->materials()->save(Material::where('name', 'Jade')->firstOrFail(), [
            'price' => '1,500 gp',
            'meta'  => 'Jade circlet which you must place on your head before you cast the spell',
        ]);

        $spell              = new Spell;
        $spell->name        = 'Share Talents';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One or two willing creatures touched';
        $spell->duration    = '3 hours';
        $spell->description = '<p>You touch another ally or two allies. If you touch only one ally, then you target yourself and the other ally. If you touch two allies, then you target this spell with your two allies.</p>
<p>When you cast this spell, you create a mystical link between the targets. For the Duration, the targets receive a +2 bonus on any Skill check they make, as long as at least one of the targets has at least 1 or more ranks in that Skill. In addition, if either character has ranks in a skill that is not normally usable by untrained characters, the other character may use the Skill untrained with the bonus.</p>
<dl>
    <dt>Material Components</dt> <dd>A knotted rope.</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the number of willing targets by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell               = new Spell;
        $spell->name         = 'Sharpwings';
        $spell->casting      = 'Verbal Casting';
        $spell->requirements = 'Caster must be of draconic ancestry';
        $spell->targets      = 'Self';
        $spell->duration     = '5 rounds';
        $spell->description  = '<p>This spell is favored by dragons well skilled in the use of their wings to buffet opponents. This spell alters your draconic wings so as to make the leading edge of each wing as sharp as a well-honed blade and as strong as steel. On a hit, the wing deals damage equal to your claw attack. It is not possible to visually observe the blade edge, but anyone who touches the front-most ridge of an affected draconic wing notes the deadliness of this magical effect. The chance to knock a creature prone on a successful wing buffet is unaffected by this spell.</p>';
        $spell->heightened   = '<dl>
    <dt>Heightened (+2)</dt> <dd>The damage becomes twice your claw damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Shashkah';
        $spell->casting     = 'Material Casting';
        $spell->targets     = 'Sword you are holding';
        $spell->duration    = '1 minute';
        $spell->description = '<p>A sword you are holding is imbued with the power of ancient spirits, guiding you in its use. For the duration, you can use your spellcasting ability instead of STR or DEX for the Attack and Damage rolls of melee attacks using that weapon. The spell ends if you cast it again or if you are not holding the weapon at the end of your turn.</p>
<dl>
    <dt>Material Components</dt><dd>A sword you are holding</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Shatter';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator  = 'Aksa';
        $spell->range          = '10-foot radius sphere. 60 foot range';
        $spell->targets        = 'Any visible point within range';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>A sudden loud ringing noise, painfully intense, erupts from a point of your choice within range. Each creature in a 10-foot-radius sphere centered on that point must make a CON Save. A creature takes 3D8 Sonic damage. A creature made of inorganic material such as stone, crystal, or metal has Disadvantage on this Save.</p>
<p>A nonmagical object that isn't being worn or carried also takes the damage if it's in the spell's area.</p>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Shatter Gem';
        $spell->casting        = '5 minutes (Material, Somatic, Verbal)';
        $spell->requirements   = 'Caster must be of draconic ancestry';
        $spell->range          = 'Touch';
        $spell->targets        = 'Gem touched';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Until dispelled or triggered';
        $spell->description    = '<p>Dragons constantly trap their hordes with spells to punish thieves. Whenever a dragon notices a gem that was the recipient for this spell is missing, the dragon may activate the lethal effect of this spell</p>
<p>When you cast this spell, you inscribe a precious jewel with a small rune that is imperceptible to the human eye. The rune has to be carved using a sharp natural claw. A character who attempts to scrutinize the gem, must succeed on a INT (Investigation) check contested against your Spell Save DC. On a Success, the character notices the small magical rune.</p>
<p>As an Action, you may activate the rune and have it explode; shattering the gem and sending razor sharp shrapnel flying in a 20 ft radius centered on the explosion. Each creature within the radius must succeed a DEX Save or take 6D6 Slashing Damage. As part of the Action to activate the rune, you may throw the gem up to a distance of 60 ft. You may activate the rune across any distance, and even across planes of existence.</p>
<p>If the gem explodes while within a Bag of Holding or similar interdimensional holding space; all objects inside are damaged and possibly destroyed by the blast.</p>';
        $spell->saves = '<dl>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Dragon', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Sheltered Vitality';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Living creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>The target gains Immunity from the following.</p>
<ul>
    <li>Fatigue</li>
    <li>Exhaustion</li>
    <li>Ability Damage (but not Ability Damage from casting spells.)</li>
</ul>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <li>Heightened (+1)</li> <dd>Prevent the Ability Damage from casting spells by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 3);

        $spell                = new Spell;
        $spell->name          = 'Shield';
        $spell->casting       = 'Verbal Casting (Reaction)';
        $spell->targets       = 'Self';
        $spell->spell_creator = 'Matick';
        $spell->duration      = 'Until the beginning of your next turn or until dismissed';
        $spell->description   = "<p>You raise a magical shield of Force to protect you. You gain a +5 bonus to your AC while the shield is in effect.</p>
<p>While the spell is in effect, you can also use the Shield Block Reaction with your magic shield. The shield has Hardness 5. After you use Shield Block, the spell is dismissed and you can't cast it again for 3 rounds.</p>
<p>You take no damage from Magic Missiles while your Shield spell is active.</p>
<p>You may cast this spell as a Reaction by using a 1st level Spell Slot. You still treat the spell as a Cantrip in terms of Heightening.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Hardness by +3.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Evocation', 'Force'], 0);

        $spell              = new Spell;
        $spell->name        = 'Shield of Faith';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>A shimmering field appears and surrounds a creature of your choice within range, granting it a +2 bonus to AC for the duration.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Shield of Law';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '20-foot radius burst centered on you';
        $spell->targets        = 'Creature touched';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>A dim, blue glow surrounds the subject, protecting them from attacks, granting them the following effects.</p>
<ul>
    <li>+3 Deflection bonus to AC</li>
    <li>+3 Resistance bonus to all Saves</li>
    <li>You are treated as having the Improved Evasion feat against all spells cast by Chaotic outsiders and all spell effects that are from a Lawful source.</li>
    <li>Protection from Possession and Mental Influence</li>
    <li>If a Chaotic creature succeeds on a Melee attack against the target of the Shield of Law, the Chaotic creature is Slowed as the Slow spell, WIS Save negates.</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>A tiny reliquary worth 500 gp</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The Chaotic creature is not Slowed</dd>
    <dt>Failure</dt> <dd>The Chaotic creature is Slowed as the spell</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Lawful'], 7);

        $spell              = new Spell;
        $spell->name        = 'Shield of the Archons';
        $spell->casting     = 'Verbal Casting (Reaction), Archon';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 rounds';
        $spell->description = '<p>You raise a mystic shield of beneficent energies to protect you. This counts as using the Raise a Shield Action to gain a +2 circumstance bonus to AC, though it doesn\'t require a hand to use.</p>
<p>If you use an Action to use the Raise a Shield Action, the shield will block the next harmful spell that targets you. It can only block one such spell each round, intercepting the first spell only.</p>
<p>Any targeted magical attack that strikes the shield is dissipated, but it has 5% chance per Spell Level to shatter the shield, after the spell is dissipated.</p>
<p>If you are within the area of effect of a harmful spell where you are not the target (and you have used a Raise a Shield Action), you gain a +4 bonus on any Save the spell allows.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Exalted'], 7);

        $spell              = new Spell;
        $spell->name        = 'Shieldbearer';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Shield touched';
        $spell->duration    = '1 minute';
        $spell->description = "<p>This spell enchants one shield so that it hovers near you and provides its protection to you as if you had used an Action to Raise your Shield.</p>
<p>The enchanted shield remains within 1 foot of you without causing you to suffer the shield's penalties.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>You can have the enchanted shield protect someone else</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell                = new Spell;
        $spell->name          = 'Shift Glyph';
        $spell->casting       = '1 minute (Somatic, Verbal)';
        $spell->spell_creator = 'Denier';
        $spell->range         = '60 feet';
        $spell->targets       = 'One magical glyph, rune, symbol, or inscription';
        $spell->duration      = 'Permanent';
        $spell->description   = '<p>This spell allows you to move an unknown or hostile magical glyph, rune, symbol, or magical inscription (defined as a message of many characters all written at the same time and intended to be read together) from the surface on which it is found to another surface of your choosing within spell range. If no suitable surface (presumably one similar to the original surface, or failing that, a relatively smooth horizontal or vertical surface large enough to hold the writing) exists within range, the spell does not work, but it is not wasted.</p>
<p>When this spell is cast, all magical symbols within range that the spell can affect glow with a dim white radiance.You have until the end of the round to choose which one to move; beings familiar with certain glyphs can identify them at this time. Once a glyph is chosen, the other magical markings cease to glow, fading back into their former state. Note that the chosen glyph may be one you did not know of before the spell illuminated it.</p>
<p>You must then make a Save vs. spell; if this Save fails, the chosen glyph takes effect (discharges) in its original location and does not move. If the Save succeeds, the glyph is successfully moved to its new location. If the glyph or writing is moved successfully but remains linked to something on, under, behind, or beneath its former location (suggesting that its former area remains trapped or dangerous), the magic makes you aware of this, but reveals nothing about the nature of the not-yet-triggered magic.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Shillelagh';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One nonmagical club or staff you are holding';
        $spell->duration    = '1 minute';
        $spell->description = '<p>The target grows vines and leaves, brimming with primal energy. The target gains the effect of a +1 weapon potency rune in your hands, gaining a +1 item bonus to attack rolls and dealing another die of damage on a hit. Additionally, as long as you are on your home plane, attacks you make with the target against aberrations, extraplanar creatures, and undead deal a third die of damage on a hit.</p>';
        $helper->addTypesToSpell($spell, ['Plant', 'Enchantment'], 0);

        $spell              = new Spell;
        $spell->name        = 'Shock Bolt';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One creature within range';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>A beam of crackling, blue energy lances out toward a creature within range, forming a sustained arc of Electricity between you and the target.</p>
<p>Make a Ranged Spell Attack against the creature. On a hit, the target takes 1D12 Electricity damage, and on each of your turns for the duration, you can use a Double Action to deal 1D12 Electricity damage to the target automatically.</p>
<p>The spell ends if you use any Action to cast a spell or Concentrate on another spell, or if the target moves out of range or has total cover from you.</p>
<dl>
    <dt>Material Components</dt> <dd>A twig from a tree that has been struck by lightning</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D12</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Electricity'], 1);

        $spell                = new Spell;
        $spell->name          = 'Shocking Grasp';
        $spell->casting       = 'Somatic Casting';
        $spell->targets       = 'Self';
        $spell->spell_creator = 'Volhm';
        $spell->duration      = 'Until the beginning of your next turn, or until discharged';
        $spell->description   = '<p>Your hand is electrified and is treated as an Armed Attack. Until the beginning of your next turn, your Melee Spell Attacks have the ability to deal Electricity damage. If you hit before the spell ends, the target takes Electricity damage equal to 1D12 plus your spellcasting ability modifier. If the target is wearing metal armor or is made of metal, you gain a +3 circumstance bonus to your attack roll with Shocking Grasp and the target takes 1D4 persistent Electricity damage on a hit. On a critical hit, double the damage, but not the persistent damage. Once you hit a target, your hand is no longer electrified.</p>
<p>You also gain Resistance to Electricity until the beginning of your next turn.</p>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage increases by 1D12 and the persistent electricity damage increases by 1.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Electricity', 'Evocation'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Shockwave';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '60 feet';
        $spell->area           = '20 ft radius burst';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You cause a sonic burst centered at point within range. All in the area must make a CON Save or be Dazed: 2 and take 8D4 Sonic Damage (this damage is Nonlethal). Any creature immune to Nonlethal Damage is not Dazed regardless of their Save result.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Dazed: 1 and half Sonic Damage</dd>
    <dt>Failure</dt> <dd>Dazed: 2 and full Sonic Damage</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +2D4 Sonic</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 3);

        $spell              = new Spell;
        $spell->name        = 'Shrink';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One willing creature';
        $spell->duration    = '1 minute';
        $spell->description = '<p>The target shrinks to size Tiny. Its equipment shrinks with it, but returns to natural size if removed. The creature\'s reach changes to 0 feet. This spell has no effect on a Tiny creature.</p>
<p>This spell Counters and is Countered by Enlarge.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
    <dt>Permanency (Heightened +5)</dt> <dd>2,500 gp. 5 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation', 'Permanency'], 2);

        $spell              = new Spell;
        $spell->name        = 'Shrink Item';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One nonmagical object up to 20 cubic feet in volume and up to 80 Bulk';
        $spell->duration    = '1 day or until dismissed';
        $spell->description = "<p>You shrink the target to roughly the size of a coin. This reduces it to negligible Bulk. You can dismiss the spell with a Verbal Casting action or by tossing the object onto a solid surface.</p>
<p>The object can't be used to attack or cause damage when it returns to normal size. If there isn't room for the object to return to normal size when the spell ends, the spell\'s duration continues until the object is in a location large enough to accommodate its normal size.</p>";
        $spell->heightened = '<dl>
    <dt>Permanency (Heightened +3)</dt> <dd>7,500 gp. 8 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation', 'Permanency', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Shrink Plant';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '150 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell has 2 versions.</p>
<ul>
    <li>Prune Growth: This version causes normal vegetation (grasses, briars, bushes, creepers, hedges, thistles, trees, vines, and so forth) within long range to shrink to about one-third of their normal size, becoming untangled and less bushy. The affected vegetation appears to have been carefully pruned and trimmed. You may also designate portions of the area that are not affected.</li>
    <li>Stunt Growth: This version targets normal plants within a range of 1/2 mile, reducing their potential productivity over the course of the following year to one-third below normal.</li>
</ul>
<p>This spell Counters and is Countered by Plant Growth</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 3);

        $spell              = new Spell;
        $spell->name        = 'Shout';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minute';
        $spell->description = '<p>Your voice becomes supernaturally loud. You can be heard clearly up to 1,000 feet away.</p>
<p>This spell Counters and is Countered by Silence.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may target others with a Range of Touch</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 1);

        $spell              = new Spell;
        $spell->name        = 'Shroud of Undeath';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You shroud yourself with invisible Negative energy so that non-intelligent Undead perceive you as a fellow Undead, ignoring you.</p>
<p>Your appearance does not change, and while intelligent undead do not immediately recognize you as alive, they might question whether you are actually Undead. If used in conjunction with a disguise or an illusion to appear undead, this spell grants a +5 Bonus to your Disguise check.</p>
<p>While under the effects of this spell, you are also under the effects of the following.</p>
<ul>
    <li>Spells with the Positive type (such as healing spells) causes you harm</li>
    <li>Spells with the Negative type cause you to heal</li>
    <li>You are effected by effects that affect Undead.
        <ul>
            <li>A Successful Turning attempt that would Turn you causes you to make a CHA Save or be Feared: 10</li>
            <li>A Successful Rebuke attempt that would Turn you cause you to make a CHA Save or not be able to take any Action against the Rebuker or their allies.</li>
            <li>A Successful Turning attempt that would Destroy you causes you to make a CHA Save or be Stunned: 10</li>
            <li>A Successful Rebuke attempt that would Control you causes you to make a CHA Save or be Charmed for 10 rounds.</li>
        </ul>
    </li>Turning forces you to make a CHA Save or Feared: 10.</li>
</ul>
<dl>
    <dd>Material Components</dd> <dd>Dust or bone fragments from any destroyed undead creature</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Sickness';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '60 feet';
        $spell->targets        = 'Up to 5 living creatures, no two of which are more than 30 feet apart';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You cause the targets to become sick. Each target becomes Nauseated unless they make a CON Save, in which case the target is Sickened: 2 for the duration. At the end of each of turn, a target that is Nauseated may make another CON Save to end the Nauseated condition and is Sickened: 2 for the duration.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Sickened: 2 for the duration</dd>
    <dt>Failure</dt> <dd>Nauseated for the duration. At the end of each turn, the target may make another CON Save</dd>
    <dt>Critical Failure</dt> <dd>Nauseated for the duration. No additional Saves</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Curse'], 4);

        $spell              = new Spell;
        $spell->name        = 'Sign of Sealing';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One door, chest or portal up to 250 sq ft in size';
        $spell->duration    = 'Permanent';
        $spell->description = "<p>You seal a door, chest or similar closure with a prominent magical sigil that bars entry and prevents opening.</p>
<p>A door or object protected by this spell can be opened only by breaking (add 10 to the normal break DC) or by use of a Knock or Dispel Magic Spell.</p>
<p>If the door or object is forced open by any means (magical or physical), the Sign deals 6D4 Force Damage in a 30-ft radius (REF Save for half).</p>
<p>A Knock spell doesn't negate or automatically bypass this spell, but instead suppresses it for 10 minutes on a Successful Caster Level check.</p>
<p>A Sign of Sealing is a magical trap that can be disarmed with a Successful DC 28 Disable Device check.</p>
<p>You can pass your own Sign of Sealing safely, and it remains set behind you.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the total area affected. Increase the Force Damage by +2D4. Add a +2 Penalty to opposed Caster Level checks to bypass with Knock</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 3);

        $spell              = new Spell;
        $spell->name        = 'Silence';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>For the duration, no sound can be created within or pass through a 20-foot-radius sphere centered on a point you choose within range. Any creature or object entirely inside the sphere is immune to Sonic damage, and creatures are deafened while entirely inside it. Casting a spell that includes a Verbal Casting component is impossible there.</p>';
        $spell->heightened  = '<dl>
    <dt>Permanency (Heightened +3)</dt> <dd>5,000 gp. 5 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Transmutation', 'Enchantment', 'Sonic', 'Permanency'], 2);

        $spell              = new Spell;
        $spell->name        = 'Silent Image';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You create the image of an object, a creature, or some other visible phenomenon that is no larger than a 15-foot cube. The image appears at a spot within range and lasts for the duration. The image is purely visual; it isn’t accompanied by sound, smell, or other sensory effects.</p>
<p>You can use your action to cause the image to move to any spot within range. As the image changes location, you can alter its appearance so that its movements appear natural for the image. For example, if you create an image of a creature and move it, you can alter the image so that it appears to be walking.</p>
<p>Physical interaction with the image reveals it to be an illusion, because things can pass through it. A creature that uses its action to examine the image can determine that it is an illusion with a successful INT (Insight) check against your spell save DC. If a creature discerns the illusion for what it is, the creature can see through the image.</p>';
        $helper->addTypesToSpell($spell, ['Figment', 'Illusion', 'Visual'], 1);

        $spell              = new Spell;
        $spell->name        = 'Silent Opening';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '5 ft';
        $spell->targets     = 'Any single door, window, gate, drawer, chest lid, etc';
        $spell->duration    = '1 minute';
        $spell->description = '<p>This simple spell negates the sound of opening and closing a single door, window, gate, chest lid, drawer, or similar. Even the squeakiest door opens without a sound when under the effect of this spell.</p>
<p>This spell only applies to the normal means of opening. Breaking a window or door is not affected by this spell.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Silver Lance';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->spell_creator  = 'Laeral Silverhand';
        $spell->range          = '500 feet';
        $spell->save_attribute = 'STR';
        $spell->targets        = 'One target in range';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>This spell beings into being a shimmering, silver lance-like column of force, equivalent to a Large lance. The lance flies toward a single creature you pantamine throwing it at when you cast this spell. Make a Ranged Spell attack, adding your Primary Spellcasting Attribute's modifier as a bonus to Hit and Damage. The lance deals 4D6 + your Primary Spellcasting Attribute's modifier. The target must make a STR Save or be knocked Prone.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not knocked prone</dd>
    <dt>Failure</dt> <dd>Knocked Prone</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 3);

        $spell                = new Spell;
        $spell->name          = 'Silver Mail of Torm';
        $spell->casting       = 'Verbal Casting';
        $spell->spell_creator = 'Torm';
        $spell->targets       = 'Self';
        $spell->duration      = '6 hours';
        $spell->description   = '<p>You create a shining breastplate around your body. The armor is etched with holy symbol of Torm. It is treated a +1 Mithral Breastplate for all purposes (including Arcane spell failure), and you are treated as proficient with this armor. Removing or destroying the armor dismisses the spell. This spell has no effect if you are already wearing armor.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Silvered Claws';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One Creature with Natural Weapons Touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>All of the targets Natural Weapons gains the Silvered attribute.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
    <dt>Permanency Heightened (+3)</dt> <dd>200 gp. 1 CON Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Silvered Weapon';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One weapon or projectile touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>This spell transforms a single weapon or up to 10 small projectiles (arrows, bolts, sling stones, etc. Not spears or daggers) into a Silvered Weapon. This spell does not affect Natural Weapons.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
    <dt>Permanency Heightened (+3)</dt> <dd>200 gp. 1 CON Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell                = new Spell;
        $spell->name          = 'Silverbeard';
        $spell->casting       = 'Verbal Casting';
        $spell->spell_creator = 'Clangeddin Silverbeard';
        $spell->targets       = 'Self';
        $spell->duration      = '10 minutes';
        $spell->description   = '<p>Your beard grows and turns to pure and magically hardened silver. If you do not have a beard, you grow one for the Duration of this spell (even if you are a creature that cannot normally grow a beard). You gain the following.</p>
<ul>
    <li>+1 bonus to AC</li>
    <li>+1 bonus to Damage Reduction</li>
    <li>+2 Circumstance bonus to Diplomacy checks against Dwarves.</li>
</ul>
<p>Repeated uses of this spell eventually results in your beard turning a natural silver color.</p>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the AC bonus by +1 and the Damage Reduction by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell                = new Spell;
        $spell->name          = 'Simulacrum';
        $spell->casting       = '12 hours (Material, Somatic, Verbal)';
        $spell->range         = 'Touch';
        $spell->spell_creator = 'Chever';
        $spell->duration      = 'Until dispelled';
        $spell->description   = '<p>You shape an illusory duplicate of one beast or humanoid that is within range for the entire casting time of the spell. The duplicate is a creature, partially real and formed from ice or snow, and it can take actions and otherwise be affected as a normal creature. It appears to be the same as the original, but it has half the creature’s hit point maximum and is formed without any equipment. Otherwise, the illusion uses all the statistics of the creature it duplicates.</p>
<p>The simulacrum is friendly to you and creatures you designate. It obeys your spoken commands, moving and acting in accordance with your wishes and acting on your turn in combat. The simulacrum lacks the ability to learn or become more powerful, so it never increases its level or other abilities, nor can it regain expended spell slots.</p>
<p>If the simulacrum is damaged, you can repair it in an alchemical laboratory, using rare herbs and minerals worth 100 gp per hit point it regains. The simulacrum lasts until it drops to 0 hit points, at which point it reverts to snow and melts instantly.</p>
<p>If you cast this spell again, any currently active duplicates you created with this spell are instantly destroyed.</p>
<dl>
    <dt>Material Components</dt> <dd>Snow or ice in quantities sufficient to make a life-size copy of the duplicated creature; some hair; fingernail clippings, or any piece of that creatures body placed inside the snow or ice; and powdered ruby worth 1,500 gp, sprinkled over the duplicate and consumed by the spell.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Phantasm', 'Ritual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Siphon';
        $spell->casting     = '1 minute (Material Casting, Somatic Casting, Verbal Casting)';
        $spell->rarity      = 'Rare';
        $spell->range       = 'Touch';
        $spell->targets     = 'One wand or staff touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You leach charges from a wand or staff to regain spent Spell Slots of 3rd Level or lower. Once you cast this spell, you may drain as many charges as you wish from the wand or staff.</p>
<p>To determine how many charges are needed to be drained to regain a Spell Slot, you must drain 1 charge to start the drain, then multiply the Spell Level of the highest level Spell the wand or staff is able to cast, times the number of additional charges you drain determines the number of Spell Slots that you can recover.</p>
<blockquote>
    Ex. You drain 1 + 2 charges (one charge to start the transfer, then 2 charges to figure out how many Spell Slots you can recover) from a staff that can cast Magic Missile, and Fireball. Since Fireball is the highest level spell (and is a 3rd Level Spell), you can recover up to 6 Spell Levels (2 charges X 3) worth of Spell Slots. This can be divided into 2 3rd Level Spell Slots, 1 3rd Level Spell Slot, 1 2nd Level Spell Slot, and 1 1st Level Spell Slot, ect.
</blockquote>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>
        <p>Increase the maximum Spell Level that can be recovered by +1. This requires the initial charges needed to start the transfer to also increase by +1.</p>
        <blockquote>
            In the previous example, you now need to spend 2 charges to start the transfer, then 2 more charges to determine how many Spell Slots recovered. This means you can recover 6 Spell Levels by spending 4 charges. Since this was Heightened by +1 (a total of 2 charges to start the transfer), you can recover 1 4th Level Spell Slot and 1 2nd Level Spell Slot.
        </blockquote>
    </dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell                = new Spell;
        $spell->name          = 'Skull Eyes';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Cyric';
        $spell->targets       = 'Self';
        $spell->range         = '30 feet';
        $spell->duration      = '5 rounds';
        $spell->description   = '<p>You gain a gaze attack. Each round, you may use an Action to target a creature within range with your gaze attack. You may choose each round which effect the gaze attack has.</p>
<ul>
    <li>As the Charm spell, except the target does not gain the circumstance bonus for being threatened.</li>
    <li>As the Confusion spell, except the target gets a +3 bonus to their Save.</li>
</ul>
<p>As a harmless but dramatic side-effect of this spell, your eyes turn jet black with irises shaped like skulls.</p>';
        $helper->addTypesToSpell($spell, ['Illusion'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Skull of Secrets';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator  = 'Cyric';
        $spell->save_attribute = 'DEX';
        $spell->range          = '20-foot radius sphere. 60 foot range';
        $spell->duration       = 'Permanent until discharged';
        $spell->description    = '<p>You create an intangible image of a floating skull that trails black flames. The skull and its flames are illusory, so they neither deal damage nor take damage from attacks. The skull has a fly speed of 40 feet, but it cannot move more than 20 feet from its point of origin. It simply floats about aimlessly but threateningly within its range.</p>
<p>When you cast the spell, you set two triggering conditions for the skulls. The first activates a message that the skill delivers as if it were a Magic Mouth. The second causes the skull to spit a line of flame 10 feet long that deals 3D8 points of Shadow damage at the creature that triggered it.</p>
<p>The triggering conditions for the two effects can be different, or they can be the same.</p>
<p>Once the triggering conditions for both effects have been met, the skull disappears.</p>
<p>The skull can produce each effect only once, so if it has already spoken its message, it does not speak it again even if the message trigger occurs a second time.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Shadow damage by +1D8</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half Shadow damage</dd>
    <dt>Failure</dt> <dd>Full Shadow damage</dd>
    <dt>Critical Failure</dt> <dd>As Failure and Sluggish: 3 for 1 round</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Shadow'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Skull Watch';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->area           = '20 ft X 90 ft';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'One humanoid skull';
        $spell->duration       = '12 hours';
        $spell->description    = '<p>The skull affected by this spell floats gently 5 feet off of the ground, facing a direction you choose. It monitors an area 20 feet wide by 90 feet long. Walls and other obstacles can reduce this area.</p>
<p>If any living creature enters the area watched by the skull, it emits a piercing shriek that can be heard up to a quarter mile away, then falls to the ground, its magic spent. Every creature within 60 ft of the skull when it shrieks must make a CON Save or be Deafened for 2D4 rounds. You are made instantly aware when this occurs no matter where you are so long as you are on the same Plane of Existence. The skull can be physically moved without setting it off so long as nothing enters the monitor area.</p>
<p>You are not made aware of the skulls destruction, only when a living creature enters the monitored area.</p>
<p>The skull has the following statistics.</p>
<table>
    <tbody>
        <tr>
            <th>AC</th>
            <td>12</td>
        </tr>
        <tr>
            <th>Damage Reduction</th>
           <td>2</td>
        </tr>
        <tr>
            <th>Hit Points</th>
           <td>10</td>
        </tr>
    </tbody>
</table>
<dl>
    <dt>Material Components</dt> <dd>A humanoid skull</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not Deafened</dd>
    <dt>Failure</dt> <dd>Deafened 2D4 rounds</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Permanency Heightened (+3)</dt> <dd>2,000 gp, 2 CON Damage. Resets 12 hours after triggering. So long as the spell was not Dispelled, the skull will reform even if destroyed.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Skyhook';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'None';
        $spell->duration    = '1 minute';
        $spell->description = "<p>This spell creates a hook of force. This hook appears in a designated space within range and remains there, even in midair without being attached to anything.</p>
<p>The hook's size is not one that allows standing on it, but it is enough to serve as a purchase for cables or hands.</p>
<p>The hook is virtually indestructible. No amount of physical force can destroy it. However, it can be dispelled. You may dismiss the hook with an Action.</p>
<dl>
    <dt>Material Components</dt> <dd>A miniature metal fishhook (or metal hook of any size or type). In a pinch, a piece of metal crudely bent into a hook-bend can be used.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 2);

        $spell              = new Spell;
        $spell->name        = 'Skywrite';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Sight';
        $spell->duration    = 'Dependant on weather conditions';
        $spell->description = "<p>This spell creates words in thin cloud formations above a point chosen by you. You can write up to 10 words; the words are spelled out one letter at a time at the rate of ten letters per round. The spell must be cast in daylight so that the white cloud letters can be seen. This spell does not work against a cloudy sky.</p>
<p>The letters appear about 100 feet above the ground and are each 10 feet tall. Everyone below the sky-written message can see what it says. This could be an entire city.</p>
<p>While the spell is active, the clouds remain in place, despite strong winds (although magical winds will disperse the word clouds in 1 round). They are harmless and insubstantial. When the spell's duration expires, the clouds begin to filter away on the wind, slowly dissipating to nothing.</p>
<dl>
    <dt>Material Components</dt> <dd>A piece of chalk and a slate, upon which the message is written. Any message written by anyone on the slate will be written in the sky.</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of words that can be written</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);

        $spell              = new Spell;
        $spell->name        = 'Slaad Form';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>This spell functions like True Polymorph, except you take the form of a slaad. You gain all that form's abilities and your type changes to Outsider. Any spell that would normally banish outsiders instead ends the spell and leaves you Stunned for 3 rounds.</p>
<dl>
    <dt>Material Components</dt> <dd>A bone from the slaad you wish to polymorph into.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph', 'Slaad'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Slash Tongue';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '30 ft';
        $spell->targets        = 'One living creature with a tongue';
        $spell->duration       = '1 round';
        $spell->description    = "<p>You cause the target's tongue to get a thin cut. The target must make a CON Save or suffer 1 point of Slashing damage and until the beginning of your next turn, any spell the target tries to cast with Verbal Casting has a 30% chance of Failing (the Spell Slot is wasted). If the target is hit with multiple castings of this spell, the Spell Failure chance is Cumulative.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>1 point of Slashing damage and 30% Spell Failure for spells with Verbal Casting</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 0);

        $spell                 = new Spell;
        $spell->name           = "Slaver's Gentle Reminder";
        $spell->casting        = 'Material Casting, Verbal Casting';
        $spell->spell_creator  = 'Nybor';
        $spell->rarity         = 'Rare';
        $spell->range          = '30 feet';
        $spell->targets        = 'One living creature';
        $spell->duration       = '2 rounds';
        $spell->save_attribute = 'CON';
        $spell->description    = '<p>This spell is quite popular with slave overseers and those wishing to make their servants work a little faster. The Red Wizards now employ it mainly as a combat spell.</p>
<p>The target receives a sharp, agonizing pain, which makes him dazed (no Actions, but can defend against attacks normally) for 1 round. The target suffers a -1 penalty on attacks, Saves, and most checks while the spell lasts, however, the target also receives a +2 circumstance bonus to STR.</p>
<dl>
    <dt>Material Component</dt> <dd>A stick at least 1 foot long.</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect as described</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 1);

        $spell                 = new Spell;
        $spell->name           = "Slaver's Mild Admonishment";
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->spell_creator  = 'Nybor';
        $spell->rarity         = 'Rare';
        $spell->range          = '30 feet';
        $spell->targets        = 'One living creature';
        $spell->duration       = '5 rounds';
        $spell->save_attribute = 'CON';
        $spell->description    = '<p>This improvement to Gentle Reminder causes intense pain in the target.  The target is Dazed for 1D4 rounds and suffers a -2 penalty on attacks, Saves, and most checks while the spell lasts, however, the target also receives a +2 circumstance bonus to STR.</p>
<p><strong>Material Components</strong> A pointed stick at least 1 foot long.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect as described</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 3);

        $spell                 = new Spell;
        $spell->name           = "Slaver's Stern Reproof";
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->spell_creator  = 'Nybor';
        $spell->rarity         = 'Rare';
        $spell->range          = '30 feet';
        $spell->targets        = 'One living creature';
        $spell->duration       = '5 rounds';
        $spell->save_attribute = 'CON';
        $spell->description    = '<p>This spell causes stabbing pains even greater than those of Gentle Reminder and Mild Admonishment. The target must make a CON Save or die instantly. A surviving creature receives a WIS Save to avoid further effects. Failing the WIS Save causes the target to be Dazed for 1D4 rounds and suffer a -2 penalty on attacks, Saves, and most checks while the spell lasts, howeve the target also receives a +2 circumstance bonus to STR.</p>
<p><strong>Material Component</strong> A pointed metal rod at least 1 foot long.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>CON Save: avoids death. WIS Save: no follow up effects</dd>
    <dt>Failure</dt> <dd>CON Save: death. WIS Save: suffers follow up effects</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 7);

        $spell                 = new Spell;
        $spell->name           = "Slaver's Wrathful Castigation";
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->spell_creator  = 'Nybor';
        $spell->rarity         = 'Rare';
        $spell->range          = '30 feet';
        $spell->targets        = 'One living creature';
        $spell->save_attribute = 'CON';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>This spell is an even more potent version of Stern Reproof. It causes wracking pain and violent convulsions. The target creature must make a CON Save or die instantly. A surviving creature reveives a WIS Save to avoid further effects, Dazed and suffers a -4 penalty to Saves for the duration of the spell.</p>
<p><strong>Material Component</strong> A whip</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>CON Save: avoid death. WIS Save: no follow up effects</dd>
    <dt>Failure</dt> <dd>CON Save: death. WIS Save: suffers follow up effects</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Slay Living';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'One living creature';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You can attempt to slay any living creature. When you cast this spell, your hand seethes with eerie dark fire. On a successful touch attack, the target must make a CON Save.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target takes no damage</dd>
    <dt>Success</dt> <dd>The target takes 3D6 negative damage</dd>
    <dt>Failure</dt> <dd>The target takes 12D6 negative damage</dd>
    <dt>Critical Failure</dt> <dd>The target gains the Dying 1 state</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the success damage by +1D6 and the failure damage by +2D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Death'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Sleep';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '5-foot burst. 30 foot range';
        $spell->save_attribute = 'WIS';
        $spell->spell_creator  = 'Efteran';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>Each target in the area becomes drowsy and might fall asleep, depending on its WIS Save. A creature that falls asleep from this spell doesn't fall prone or drop what it's holding. This spell doesn't prevent creatures from waking up due to a successful Perception check, making it of limited use mid-combat.</p>";
        $spell->saves          = "<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>-1 conditional penalty to Perception checks for 1 round</dd>
    <dt>Failure</dt> <dd>It falls asleep. If it's still asleep after 1 minute, it wakes up automatically</dd>
    <dt>Critical Failure</dt> <dd>It falls asleep. If it's still asleep after 1 hour, it wakes up automatically</dd>
</dl>";
        $spell->heightened = "<dl>
    <dt>Heightened (+2)</dt> <dd>The targets fall into a deep slumber for 1 round on a failure and 1 minute on a critical failure. They fall prone and drop what they're holding, and they can't attempt Perception checks to wake up. After the listed amount of time, the creature is in normal sleep.</dd>
    <dt>Permanency Heightened (+5) Material Component: A pinch of black sand</dt> <dd>The duration becomes Permanent. Damage that deals at least 2 Hit Points of damage awakens the sleeping target. The target gets a Save every 24 hours. During this time, the target requires 1/10 the normal amount of food and water (1 month before dying of thirst, 3 months before dying of hunger).</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion', 'Mental'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Sleet Storm';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '20-foot tall cylinder 40-foot radius. 150 foot range';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>Until the spell ends, freezing rain and sleet fall in a 20-foot-tall cylinder with a 40-foot radius centered on a point you choose within range. The area is heavily obscured, and exposed flames in the area are doused.</p>
<p>The ground in the area is covered with slick ice, making it difficult terrain. When a creature enters the spell’s area for the first time on a turn or starts its turn there, it must make a DEX Save. On a failed save, it falls prone.</p>
<p>If a creature is concentrating in the spell’s area, the creature must make a successful CON Save against your spell save DC or lose concentration.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Does not fall prone</dd>
    <dt>Failure</dt> <dd>Fall prone</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Cold'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Slide';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'STR';
        $spell->range          = '15 feet';
        $spell->targets        = 'One creature Size Large or smaller within Range';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You try to push the Target in a Vertical direction 5 ft. The Target makes a STR Save. The Target receives a +2 Bonus if it is size Large, and a -2 Penalty for each size category below Medium. If the creature is Flying or otherwise not on the ground, it moves parallel to the ground.</p>
<p>If the Target is pushed into a space that is occupied, the Target takes 1D4 Bludgeoning Damage.</p>
<p>This movement does not Provoke Attacks of Opportunity.</p>
<dl>
    <dt>Material Components</dt> <dd>A small metal spring</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Pushed 5 ft</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 0);

        $spell              = new Spell;
        $spell->name        = 'Slime';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '30 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You Call a roughly spherical glob of Green Slime in your hand.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the number of Slimes summoned by +2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Slow';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '5-foot burst. 30 foot range';
        $spell->save_attribute = 'CON';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>Each target in the area becomes drowsy and might fall asleep, depending on its WIS save. A creature that falls asleep form this doesn't fall prone or drop what it's holding. This spell doesn't prevent creatures from waking up due to a successful Perception check, making it of limited use mid-combat.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>Slowed 1 for 1 round</dd>
    <dt>Failure</dt> <dd>Slowed 1 for 1 minute</dd>
    <dt>Critical Failure</dt> <dd>Slowed 2 for 1 minute</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+3)</dt> <dd>You can target up to 10 creatures.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Curse', 'Chronomancy'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Slowing Smite';
        $spell->casting        = 'Verbal Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>The next time you hit a creature with a weapon attack before this spell ends, your attack deals an additional 2D6 and the target must make a CON Save or be slowed.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>Slowed 1 for 1 round</dd>
    <dt>Failure</dt> <dd>Slowed 1 for 1 minute</dd>
    <dt>Critical Failure</dt> <dd>Slowed 2 for 1 minute</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Smite'], 3);

        $spell              = new Spell;
        $spell->name        = 'Slumberward';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature Touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>This spell protects one creature against magical and mundane drowsiness, weariness and sleepiness.</p>
<p>This spell does not protect against poisons or drugs nor from stunning or loss of consciousness from other (even magical) attacks.</p>';
        $spell->heightened = "<p><dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Permanency (Heightened +5)</dt> <dd>1,000 gp worth of rare spices. Bear's Endurance spell. 2 CON damage</dd>
</dl></p>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Smite';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 2 round';
        $spell->description = '<p>The next time you hit a creature with a melee weapon attack before this spell ends, your attack deals an addition 1D6 Force damage.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Smite', 'Force'], 0);

        $spell              = new Spell;
        $spell->name        = 'Smoke Breathing';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'Up to 10 creatures';
        $spell->duration    = '24 hours';
        $spell->description = '<p>This spell grants up to ten willing creatures you can see within range the ability to breathe air that does not contain breathable oxygen (such as the Plane of Elemental Fire) until the spell ends. Affected creatures also retain their normal mode of respiration.</p>
<p>You can choose to sacrifice the Spell Slot used to cast this spell to allow the targets to continue to benefit from this spell when the duration ends.</p>
<p>This spell does not grant any form of protection from Fire, just the ability to breath air that has had all the oxygen burned away.</p>
<dl>
    <dt>Material Components</dt> <dd>A piece of basalt rock</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Permanency (Heightened +3)</dt> <dd>10,000 gp. 3 CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Permanency'], 3);

        $spell              = new Spell;
        $spell->name        = 'Snake Arm';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You turn one of your arms into a venomous snake with a fanged, biting mouth. You gain +1 Bonus to hit with the Snake Arm, and it deals 1D6 Piercing Damage and the Target must make a CON Save and a WIS Save. if the CON Save is Failed, then the Target suffers 1D6 CON Damage. If the WIS Save is Failed, then the Target is Paralyzed: 2.</p>
<p>The Snake Arm cannot be used to manipulate anything.</p>
<p>Casting this spell while you are already under the effects of this spell ends the initial casting immediately.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Snare';
        $spell->casting        = '1 minute (Material, Somatic)';
        $spell->save_attribute = 'DEX';
        $spell->range          = 'Touch';
        $spell->duration       = '8 hours';
        $spell->description    = "<p>As you cast this spell, you use the rope to create a circle with a 5-foot radius on the ground or the floor. When you finish casting, the rope disappears and the circle becomes a magic trap.</p>
<p>This trap is nearly invisible, requiring a successful INT (Search) check against your spell save DC to be discerned.</p>
<p>The trap triggers when a Small, Medium, or Large creature moves onto the ground or the floor in the spell's radius. That creature must succeed on a DEX Save or be magically hoisted into the air, leaving it hanging upside down 3 feet above the ground or the floor. The creature is restrained there until the spell ends.</p>
<p>A restrained creature can make a DEX Saves at the end of each of its turns, ending the effect on itself on a success. Alternatively, the creature or someone else who can reach it can use an Action to make an INT (Arcana) check against your spell save DC. On a success, the restrained effect ends.</p>
<p>After the trap is triggered, the spell ends when no creature is restrained by it.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 1);

        $spell              = new Spell;
        $spell->name        = 'Snatch';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Small unattended object within range';
        $spell->range       = '60 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You cause a small unattended object within range to fly towards you. You must make a DEX check to catch the object, or it either continues its path another 30 feet, or strikes you and falls to the floor in front of you (this might cause some damage DM's choice).</p>
<p>The object must be small enough to be held by one hand and weigh less than 5 lbs.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Force'], 1);

        $spell              = new Spell;
        $spell->name        = 'Snow Boots';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Willing creature touched';
        $spell->duration    = '3 hours';
        $spell->description = '<p>This spell creates an amorphous field around the targets legs and feet. Their shapelessness means that these fields do not hamper movement.</p>
<p>The magic allows creatures who would normally break through a crust of snow or ice to glide atop it by spreading out their weight. It also absolutely prevents their falling over due to an external thrusting force or attack, though they can deliberately launch themselves into a dive or fall. The prohibition on falling works only on upright bipeds of 9 feet tall or less and who have at least two waling limbs (legs). the magic does not permit water walking on open water, but does slow sinking in water from a plunge into a round-long settling.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Snow Sight';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature Touched';
        $spell->duration    = '6 hours';
        $spell->description = '<p>The Target gains the ability to see normally in whiteout conditions caused by snow reflecting sunlight back up, which can overload the eyes with intense light.</p>
<p>In effect, the Target can see to the horizon without difficulty.</p>
<p>This spell has no effect in dusk or night conditions.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell                = new Spell;
        $spell->name          = 'Soft Landing';
        $spell->casting       = 'Somatic Casting';
        $spell->spell_creator = 'Volothamp Geddarm';
        $spell->targets       = 'A small object or group of small objects collectively weighing less than 5 lbs';
        $spell->range         = '30 feet';
        $spell->duration      = 'Instantaneous';
        $spell->description   = '<p>This spell causes the target object or objects to fall gently to the ground similar to feather fall. Typically, it is used to cause those objects to fall to the ground without making any noise (such as a handful of coins).</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Song of Discord';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->area           = '30 ft emanation';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>This spell causes those within the Area to attack randomly. Each creature in the area must make a WIS Save. All who Fail must make a Percent roll each round. On a roll of 1% - 50%, they must attack the nearest target with their most powerful attack (Unconscious targets are ignored). Otherwise, they are free to act normally for that round.</p>
<p>You must use a Verbal Casting Action each round to maintain Concentration.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>At the start of each round, and when this spell is cast, the victim must roll a Percent roll. If the roll is 1% - 50%, they must attack the closest target with their most powerful attack. Otherwise, they are free to act normally for that round.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Sonic Blast';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature within Range';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You blast the Target with a load and high-pitched sound. The Target takes 4D4 Sonic Damage and must make a CON Save or be Deafened: 2.</p>
<p>This spell has no effect if cast into an area of Silence.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half Damage and not Deafened</dd>
    <dt>Failure</dt> <dd>Full Damage and Deafened: 2</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Damage by +1D4 Sonic Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Sonic Burst';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->area           = '10 ft radius emanation';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A cacophonous noise blasts out, dealing 1D10 Sonic damage. Each creature must attempt a CON Save or be Stunned: 1.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The creature is unaffected</dd>
    <dt>Success</dt> <dd>The creature takes Full Damage and is not Stunned</dd>
    <dt>Failure</dt> <dd>The creature takes Full Damage and is Stunned: 1 and Deafened: 1</dd>
    <dt>Critical Failure</dt> <dd>The creature takes double damage, is Deafened for 1 minute and is Stunned 1</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage increases by +1D10</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Sonic Snap';
        $spell->casting        = 'Somatic Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature or object within Range';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You create a brief but loud noise adjacent to the Target. The Target takes 1 Sonic Damage and must make a CON Save or be Deafened: 1</p>
<p>This spell has no effect if cast into an area of Silence.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Full Damage, not Deafened</dd>
    <dt>Failure</dt> <dd>Full Damage, Deafened: 1</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+3)</dt> <dd>Increase the Damage by +3 Sonic Damage and the Deafened Duration by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 0);

        $spell              = new Spell;
        $spell->name        = 'Sonic Weapon';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Held Weapon';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>The touched weapon now vibrates and hums with Sonic energy. The touched weapon now deals an additional 1D6 Sonic Damage with each successful hit.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Sonic'], 2);

        $spell              = new Spell;
        $spell->name        = 'Soothing Ballad';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'You and up to 9 allies';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You draw upon your muse to soothe your allies. Choose one of the following three effects.</p>
<ul>
    <li>the spell attempts to counteract Fear effects on the targets</li>
    <li>The spell attempts to counteract effects imposing Paralysis on the targets</li>
    <li>The spell restores 7D8 Hit Points to the targets</li>
</ul>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>When used to heal, increase the amount healed by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Healing', 'Emotion', 'Mental'], 7);

        $spell              = new Spell;
        $spell->name        = 'Soul Bind';
        $spell->rarity      = 'Rare';
        $spell->casting     = 'Somatic Casting, Verbal Casting, Material Casting';
        $spell->range       = '30 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You target the soul of a newly dead body, the target makes a WIS Save or be imprisoned in a black sapphire gem used for this spell. The target must have been dead no more than 10 minutes. The soul, once trapped in the gem, cannot be returned through Clone, Raise Dead, Reincarnate, Resurrection, True Ressurection, or even Wish. Only be destroying the gem or dispelling the spell on the gem can one free the soul (which is then still dead).</p>
<p>If the gem is not valuable enough, it shatters when the binding is attempted.</p>
<p>The spell requires a black sapphire of at least 300 gp value for every Hit Die possessed by the creature whose soul is to be bound.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 9);

        $spell              = new Spell;
        $spell->name        = 'Soul Cage';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '60 feet';
        $spell->targets     = '1 humanoid creature within range that has just died';
        $spell->duration    = '8 hours';
        $spell->description = '<p>You may cast this spell with two Reactions.</p>
<p>This spell snatches the soul of a humanoid as it dies and traps it inside the tiny cage you use for the material component.</p>
<p>A stolen soul remains inside the cage until the spell ends or until you destroy the cage, which ends the spell. While you have a soul inside the cage, you can exploit it in any of the ways described below. You can use a trapped soul up to six times. Once you exploit a soul for the sixth time, it is released, and the spell ends. While a soul is trapped, the dead humanoid it came from can’t be revived.</p>
<p>You must cast this spell within one round of it dying, or the soul departs and cannot be trapped.</p>
<dl>
    <dt>Steal Life</dt> <dd>You can use an Action to drain vigor from the soul and regain 2D8 Hit Points.</dd>
    <dt>Query Soul</dt> <dd>You can use an Action to ask the soul a question and receive a breif telepathic answer, which you can understand regardless of the language used. The soul knows only what it knew in life, but it must answer you truthfully and to the best of its ability. The answer is no more than a sentence or two and might be cryptic.</dd>
    <dt>Borrow Experience</dt> <dd>You can use an Action to bolster yourself with the soul\'s life experience, making your next attack roll, ability check, or Save with Advantage. If you don\'t use this benefit before the start of your next turn, it is lost.</dd>
    <dt>Eyes of the Dead</dt> <dd>You can use an Action to name a place the humanoid saw in life, which creates an invisible sensor somewhere in that place if it is on the place of existence you\'re currently on. The sensor remains for as long as you Concentrate, up to 10 minutes (as if you were Concentrating on a spell). You receive visual and auditory information from the sensor as if you were in its space using your senses. A creature that can see the sensor (such as one using See Invisibility or Truesight) sees a translucent image of the tormented humanoid whose soul you caged.</dd>
</dl>
<dl>
    <dt>Material Components</dt> <dd>A tiny cage used to trap the soul in.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Soul Link';
        $spell->casting        = '1 minute (Material, Somatic, Verbal)';
        $spell->save_attribute = 'WIS';
        $spell->range          = 'Touch';
        $spell->targets        = 'Creature touched';
        $spell->duration       = '24 Hours';
        $spell->description    = "<p>You form a mental bond to the Target, allowing you to monitor the Target's condition similar to the Status spell. You also gain the following.</p>
<ul>
    <li>You may also communicate telepathically with the Target as long as you and the Target are both on the same Plane of existence.</li>
    <li>By Concentrating, you can Scry upon the Target. The Target does not get a Save to resist.</li>
    <li>The Target suffers a -4 Penalty to all Saves vs your Spells you cast on them.</li>
    <li>At the time the spell is cast, you can choose to take a =2 penalty to one of your Ability Scores in order to grant the Target a +2 bonus to the same Ability Score. If you choose this option, the Target suffers a -4 penalty on their Save against this spell.</li>
</ul>
<p>You can have only one Soul Link spell in effect at any time. Casting a second Soul Link ends the first casting</p>
<dl>
    <dt>Material Components</dt> <dd>A piece of parchment with the Target's name written in you blood.</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Affected</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Enchantment'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Soul Scour';
        $spell->casting        = 'Somatic Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Living creature touched';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>Your touch corrupts the target's very soul, damaging its mental characteristics. You must make a successful Melee Touch attack to deliver the spell. The spell deals 2D6 points of CHA damage and 1D6 WIS damage, then another 1D6 CHA damage 1 minute later. A successful WIS Save negates each instance of damage.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Make a Save for each Ability Damage. No damage</dd>
    <dt>Failure</dt> <dd>Make a Save for each Ability Damage. Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Soul Theft';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->spell_creator  = 'Ensul';
        $spell->targets        = 'Self';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>Crackling black radiance surrounds your left hand. While the spell lasts, you can make Melee Touch attacks to steal the lifeforce of another creature. With a successful attack, you deal 1D4 INT Damage. For each point of INT damage inflicted, you heal 5 Hit Points and excess is retained as Temporary Hit Points. In additional, you gain a Save against any existing Disease or Poison that is affecting you. For every 10 points of INT damage your deal, your age is reduced by 1 year.</p>
<dl>
    <dt>Material Components</dt> <dd>A drop of blood taken from a vampire</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Evil'], 8);

        $spell              = new Spell;
        $spell->name        = 'Sparkles';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '1,000 feet, 100 ft-radius';
        $spell->duration    = '30 minutes';
        $spell->description = '<p>You create a cloud of multicolored, sparkling motes that shower down and attach to any living creature in the area. The Sparkles visibly outline anything to which they stick, cannot be removed by non-magical means, continue to twinkle and glow until the spell fades, and visibly outline invisible things in the area for the duration of the spell. Any creature covered by motes takes a -40 penalty on Hide checks.</p>
<p>This spell is popular during festivals in Halruaa, where the wizards cast it over the cities from their skyships and let the motes decorate the celebrants. However, others have found more practical uses for it, including exposing invisible and hiding foes.</p>
<dl>
    <dt>Material Components</dt> <dd>A pinch of ground mica</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);

        $spell              = new Spell;
        $spell->name        = 'Spawn of Tiamat';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '90 feet';
        $spell->duration    = '30 minutes';
        $spell->description = "<p>By means of this spell, a priest can cause any of Tiamat's spawn (defined as any chromatic dragon) to grow a second head and neck for the duration. This new head is identical to the original head. The dragon gains an additional Action. This additional Action can only be used by the new head in the following ways.</p>
<ul>
    <li>Make a Bite attack as an Action</li>
    <li>Make a Breath Weapon attack as a Double Action (the original head would still need to use a Triple Action to make a Breath Weapon attack)</li>
</ul>
<p>The second head is unintelligent and completely under the control of the original head. The second head cannot cast spells. If the second head is specifically targeted and suffers 20 or more Hit Points, the spell ends. Any damage that is dealt specifically to the second head does not harm the dragon. If this spell is cast on a dragon that already has this spell active, then the first casting ends.</p>
<dl>
    <dt>Material Components</dt> <dd>A pair of hydra scales.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Dragon'], 6);

        $spell              = new Spell;
        $spell->name        = 'Speak with Animals';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You can ask questions of, receive answers from, and use the Diplomacy skill with animals. The spell doesn’t make them more friendly than normal. Wary and cunning animals are likely to be terse and evasive; less intelligent ones often make inane comments.</p>';
        $helper->addTypesToSpell($spell, ['Divination'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Speak with Dead';
        $spell->casting        = '10 minutes (Material, Somatic, Verbal)';
        $spell->range          = 'Touch';
        $spell->targets        = 'One corpse';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '10 minutes';
        $spell->description    = "<p>You grant the corpse a semblance of life, which it uses to speak the answers to three questions. This uses the physical body's latent memories rather than calling back the deceased's spirit, so the corpse must be mostly intact. The more damage it has taken, the more inaccurate or patchwork its answers, and it must have a throat and mouth to speak at all. If anyone has previously cast this spell on the corpse in the last week, the spell automatically fails. The corpse can attempt a WIS Save to resist the question as if it were the original creature at its time of death.</p>";
        $spell->saves          = "<dl>
    <dt>Critical Success</dt> <dd>As success, and the target's spirit haunts you throughout the day, bothering you and causing you to be unable to gain any rest for 1 day</dd>
    <dt>Success</dt> <dd>The target can lie or refuse to answer your question</dd>
    <dt>Failure</dt> <dd>The target must answer truthfully, but its answers can be brief, cryptic, and repetitive. It can still mislead you or attempt to stall so that the spell's duration runs out before you can ask all your questions</dd>
    <dt>Critical Failure</dt> <dd>As failure, but the target's answers are more direct and less repetitive, though still cryptic. It takes a -2 conditional penalty to Deception checks to deceive you</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Speak with Plants';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>You can ask questions of and receive answers from plants, but the spell doesn't make them more friendly or intelligent than normal. Most normal plants have a limited and distinctive view of the world around them, so they don't recognize details about creatures or know anything about the world beyond their immediate vicinity. Wary and cunning plant monsters are likely to be terse and evasive, while less intelligent ones often make inane comments.</p>";
        $helper->addTypesToSpell($spell, ['Plant', 'Divination'], 4);

        $spell              = new Spell;
        $spell->name        = 'Speaking Stones';
        $spell->casting     = '1 minute (Material Casting, Somatic Casting, Verbal Casting)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Two normal objects touched, each weighing up to 1 lb';
        $spell->duration    = '24 hours or until discharged';
        $spell->description = '<p>This spell allows you to fashion a magical link between two stones (or any other mundane, nonmagical objects weighing up to 1 pound each). This link allows each stone to pass a single message to the other, no matter how great the distance between them after the spell is first cast.</p>
<p>Once the stones are enchanted, a creature holding one stone can send a message of no more than twenty-five words as an Action. This message sounds from the other stone, loud enough to be heard by anyone within 5 ft of it. The spell ends after each stone passes one message to its twin, or the Duration expires.</p>
<p>Messages are not transmitted across planes. If a message is sent from a different plane, the message rebounds and is played on the sending stone. This counts as the message that that stone can send.</p>
<p>No object can have more than one of this spell cast on it. Casting this spell on the same object ends the first casting.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration and each stone may send an additional message.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Spectral Ears';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '300 feet';
        $spell->targets     = 'Animated Skeleton or Zombie in range';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>By casting this spell, you establish an auditory link between yourself and a skeleton or zombie within the spell's range. This link allows you to hear any sounds that occur within the vicinity of the undead being. You can hear exactly as if you were standing where the undead creature is standing.</p>
<p>The spell also allows you to order the undead creature via the link. Such commands are limited to four words. If the undead creature moves beyond the spell's range, then the spell ends immediately. If the skeleton is under the direct, active control of another being, the commanding function of the spell automatically fails.</p>
<dl>
    <dt>Material Components</dt> <dd>A mummified ear</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Spectral Eyes';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '300 feet';
        $spell->targets     = 'Animated Skeleton or Zombie in range';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>By casting this spell, you establish an visual link between yourself and a skeleton or zombie within the spell's range. This link allows you to see what the target sees. If you have Darkvision, then you also see what the target sees as if they had Darkvision.</p>
<p>The spell also allows you to order the undead creature via the link. Such commands are limited to four words. If the undead creature moves beyond the spell's range, then the spell ends immediately. If the skeleton is under the direct, active control of another being, the commanding function of the spell automatically fails.</p>
<dl>
    <dt>Material Components</dt> <dd>A carefully preserved eye</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Spectral Hand';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You create a semi-corporeal hand out of your essence that delivers touch spells for you. Whenever you Cast a Spell with a range of touch, you can have the hand crawl to a target within range along the ground, touch it, and then crawl back to you. When making a melee touch attack with the hand, you use your normal bonuses. The hand can move as far as it needs to within range, and its movement doesn’t trigger reactions. The hand has your AC and saves, but any damage to the hand destroys it and causes you to take 1d6 damage.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 2);

        $spell               = new Spell;
        $spell->name         = 'Spell Engine';
        $spell->casting      = '10 minutes (Material, Somatic, Verbal, Ability Damage, Secondary Casters)';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least one other spell caster who also must also cast this spell</dd>
    <dt>Ability Damage</dt> <dd>7 CON Damage</dd>
</dl>';
        $spell->range        = '30 feet';
        $spell->duration     = 'See text';
        $spell->description  = "<p>You create a disk of magical energy 10 feet in diameter and 2 feet thick. The disk is incorporeal and invisible when first created. Whenever a spell is cast or a spell-like ability is used within the 10-foot diameter of the Spell Engine, it activates, absorbs the magical energy and begins to glow and spin, providing light as a torch.</p>
<p>The Spell Engine similarly absorbs most spell effects targeted at it. It absorbs all these effects as if it were a Rod of Absorption with an unlimited capacity. Over time (1 hour per Spell Level absorbed) the engine slows to a stop and becomes dim and translucent, but it remains capable of absorbing magical energy indefinitely. In other words, each hour, it loses an absorbed Spell Level until it has lost all of it's Spell Levels and becomes translucent.</p>
<p>If an activated Spell Engin comes in contact with any permanent (non-charged or single-use) magic item, it destroys the item and the Spell Engine explodes for 1D6 Force Damage per Spell Level it has absorbed (to a maximum of 20D6) to all within 60 feet.</p>
<p>Magic already in place wht the Spell Engine is created (such as a Glyph of Warding) or carried into its area (such as an Invisibility Spell) are not absorbed unless they are pressed against the Spell Engine, such as an Anti-magic field.</p>
<ul>
    <li>A Spell Engine absorbs any spell cast at it, including Dispel Magic</li>
    <li>A Detect Magic spell will detect it as long as it is cast at least 10 feet away from it. If cast within 10 feet of it, the Spell Engine will absorb the Spell and the Spell is lost.</li>
    <li>Casting a Disintegrate spell at the Spell Engine causes it to explode as if it had destroyed a magic item.</li>
    <li>Preparing spells with the light of Spell Engine takes only half as much time as normal.</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>A disk of polished bone, one of your tears, and a silver wheel worth 1,000 gp.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Abjuration'], 8);

        $spell              = new Spell;
        $spell->name        = 'Spell Immunity';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Until your next daily preparation or 24 hours, whichever is shorter';
        $spell->description = "<p>You ward a creature against the effects of a single spell. Choose a spell and name it aloud as part of the Verbal Component. Spell Immunity attempts to Counter that spell whenever Spell Immunity's target is the target of the named spell or in that spell's area. Spell Immunity does not work on spells that aren't targeted (such as area spells).</p>";
        $helper->addTypesToSpell($spell, ['Abjuration'], 4);

        $spell               = new Spell;
        $spell->name         = 'Spell Matrix';
        $spell->casting      = '1 minute (Material, Somatic, Verbal, Ability Score Damage)';
        $spell->rarity       = 'Rare';
        $spell->requirements = '<dl>
    <dt>Ability Score Damage</dt> <dd>1 CON Damage</dd>
</dl>';
        $spell->targets      = 'Self';
        $spell->duration     = '3 hours';
        $spell->description  = '<p>You prepare a magical matrix that allows you to store one of your spells and cast it later as an Action. After completing this spell, you may cast up to 2 more spell of up to 3rd level into the matrix. The matrix absorbs those spells and you may cast them as a Reaction each. Only a spell that can be modified with Quicken Spell can be placed in the matrix, and any spell stored there is treated as a prepared spell.</p>
<p>While the matrix is active, you can cast a stored spell as a Reaction. Once a spell is cast, the spell is gone.</p>
<p>A Dispel Magic spell that successfully Dispels the matrix also dispels all stored spells. If you are affected by an Antimagic Field, the Duration of the matrix is interrupted and you may not cast any stored spells. Once you are no longer affected by the Antimagic Field, you may use any stored spell as normal. If you fall unconscious or die while the matrix is active, it and the store spells dissipates harmlessly</p>
<dl>
    <dt>Material Components</dt> <dd>A sapphire worth at least 500 gp</dd>
</dl>';
        $spell->heightened   = '<dl>
    <dt>Heightened (+2)</dt> <dd>You may store an additional spell. Increase the minimum gp of the Material Component by +500 gp.</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Spell Shield';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Self or creature touched';
        $spell->duration    = '5 rounds';
        $spell->description = '<p>This spell protects a single being against all magic in the following ways.</p>
<ul>
    <li>The recipient gains a +3 Save bonus vs all Spells</li>
    <li>The recipient is immune to all Figment and Compulsion Illusion spells.</li>
    <li>The spell absorbs 2 points of damage per dice of damage against all Evocation spells.</li>
</ul>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 3);

        $spell                = new Spell;
        $spell->name          = 'Spell Shift';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->targets       = 'Self';
        $spell->duration      = '1 minute';
        $spell->spell_creator = 'Srinshee';
        $spell->description   = "<p>This potent spell opens your senses to the Weave, allowing you to perceive its very fabric as clearly as you might see the trees in a forest while standing in the heart of it.</p>
<p>When a spell is cast, you can visually observe its effects on the Weave. Thanks to this heightened understanding, you can use the Counterspell Action to do much more than merely counter another caster's spell.</p>
<p>This spell grants you a +4 insight bonus on Arcana checks made to identify spells for Counterspelling. Furthermore, instead of simply getting the effect of a spell you successfully counter, you can choose from among the following options as long as this spell lasts.</p>
<dl>
    <dt>Aid</dt> <dd>
        <p>You can boost the effectiveness of an ally's spell by applying any one Metamagic feat from the following list</p>
        <ul>
            <li>Empower Spell</li>
            <li>Enlarge Spell<li>
            <li>Extend Spell</li>
            <li>Maximize Spell</li>
            <li>Widen Spell</li>
        </ul>
        <blockquote>
            Ex. Empowering an ally's Fireball would require you to spend 1 Spell Point.
        </blockquote>
        <p>To use this option, you must expend a Spell Points to pay for the Metamagic feat.</p>
    </dd>
    <dt>Manipulate</dt> <dd>
        <p>You can seize control of the spell's range, area, or targets, as appropriate, and reshape these factors as you choose. Only one property of hte spell, chosen from among those that the caster can normally designate, can be manipulated in this manner.</p>
        <blockquote>
            Ex. You could cause an enemy wizard's Fireball spell to explode at his feet, or you could cause his haste spell to target your allies within the area he has specified.
        </blockquote>
        <p>Only one property of the spell, chosen from among those that the caster can normally designate, can be manipulated in this manner.</p>
    </dd>
    <dt>Backlash</dt> <dd>You Counter the spell as normal, but your opponent must succeed a CON Save or be Stunned: 2.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Abjuration'], 9);

        $spell               = new Spell;
        $spell->name         = 'Spell Theft';
        $spell->casting      = 'Somatic Casting, Verbal Casting, Skill Check Casting';
        $spell->requirements = '<dl>
    <dt>Skill Check</dt> <dd>Arcane Skill check DC 11 + Spell Caster Level</dd>
</dl>';
        $spell->range        = '60 feet';
        $spell->targets      = 'One creature within range';
        $spell->duration     = 'Instantaneous';
        $spell->description  = "<p>You attempt to steal an opponent's beneficial spell effects for yourself.</p>
<p>Upon casting this spell, you instantly discern all spells currently affecting the Target (including their effects). For each spell so discerned, you can make a Dispel Magic check vs a DC 11 + the Spell's Caster Level. If the check Succeeds, you gain the effect of the spell for the remainder of the Duration, as if you had cast the spell and had been the original Target and the opponent loses the effect.</p>
<p>Only spells capable of being Dispelled can be affected by this spell.</p>
<p>In addition, if you are not a legal target of the spell to be stolen, you Dispel check automatically fails.</p>
<blockquote>
    You cast this spell on a Dire Bear affected by Bull's Strength and Animal Growth. You can steal the Bull's Strength but not the Animal Growth unless you are an Animal.
</blockquote>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Spell Turning';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>This spell reflects spells cast at you back at their caster.</p>
<p>When you cast this spell, the GM secretly rolls 1D4 + 3. This is the number of Spell Levels that this spell can turn.</p>
<p>When a spell targets you, you can spend a Reaction to attempt to reflect it. This uses the rules for Countering the Spell, but if the spell is successfully Countered, the effect is turned back on the caster. Subtract the Spell Level of the spell from the total number of Spell Levels Spell Turning can turn. If the Spell Level of the spell is greater than the number of Spell Levels Spell Turning has, then you suffer 1 CON Damage. If the number of Spell Levels of Spell Turning is less than half the Spell Level of the spell, the Spell is not turned. Spell Turning can't affect spells that aren't targeted (such as area spells)</p>
<blockquote>
    You cast this spell and the GM rolls a 1 (4 Spell Levels). If a spell caster casts a spell with a Spell Level of 3, the spell is turned.<br/>
    If the spell caster casts a spell with a Spell Level of 5th Level, then you turn the spell, but because it has a greater Spell Level than Spell Turnings Spell Level, you suffer 1 CON Damage. Spell Turning ends because you no longer have any Spell Levels left.<br/>
    If the spell caster casts a spell with a Spell Level of 9th Level, then you fail to turn the spell and suffer 1 CON Damage. Spell Turning ends because you no longer have any Spell Levels left.
</blockquote>
<p>If Spell Turning reflects a spell back at a caster who is also under the effects of Spell Turning, their Spell Turning can attempt to reflect their own spell back at you again; if they do so, their Counter attempt automatically succeeds.</p>
<dl>
    <dt>Material Components</dt> <dd>A small silver mirror</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Spellsong';
        $spell->casting        = '1 Additional Somatic Castings';
        $spell->range          = 'Varies';
        $spell->targets        = 'Varies';
        $spell->save_attribute = 'Varies';
        $spell->requirements   = '<dl>
    <dt>Secondary Casters</dt> <dd>(Optional)</dd>
</dl>';
        $spell->duration       = 'Varies';
        $spell->description    = '<p>This spell enables the caster, by song and dance, to cause an effect equivalent to any spell in your Spell List of 3rd level or lower (Arcane casters must either know the spell or have it in their Spell Book. Divine casters can cast any spell that their Divine patron offers).</p>
<p>You must provide all the Actions to cast the desired spell plus an additional Somatic Casting and a Performance Skill check (DC equal to 12 + the level of the desired spell).</p>
<p>The caster must be able to move (hands and shoulders at least) and sing, free of magical silencing.</p>
<p>Additional Casters (a choral performance) are optional, but if available, provide the following benefits.</p>
<table>
    <thead>
        <tr>
            <th>Number of casters</th>
            <th>Additional effect</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1 or more</td>
            <td>Each additional caster provides 1D4 healing on the target</td>
        </tr>
        <tr>
            <td>7 or more</td>
            <td>Cure Blindness, Slow Poison, or Remove Disease instead of healing</td>
        </tr>
        <tr>
            <td>9 or more</td>
            <td>Dispel Magic, Remove Curse, or Neutralize Poison</td>
        </tr>
        <tr>
            <td>12 or more</td>
            <td>Regeneration</td>
        </tr>
    </tbody>
</table>
<p>Choral work involves a circular dance around the person to be aided, a fire, or other focal point (failing anything else, a longsword driven point-down into the ground). If the spell is cast with Secondary Casters, then add an additional 3 Somatic Casting Actions instead of 1</p>
<p>The caster (and additional choral participants, as noted above) must be able to move freely (to dance) and sing, without magical silencing of any sort.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>You may duplicate any spell of 5th level or lower</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);
        $spell->skills()->save(app()->skills['Performance'], ['dc' => 12]);

        $spell                 = new Spell;
        $spell->name           = 'Sphere of Ultimate Destruction';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>You conjure a featureless black sphere of nothingness that disintegrates almost anything it touches. It flies at up to 30 feet per round and attacks the creature of object you indicate. You must succeed at a Ranged Spell attack to strike a creature with the sphere. The sphere stops moving for the round when you make an attack on a creature or object. You must actively direct the sphere with an Action. The sphere winks out if it exceeds the spell's range.</p>
<p>If the sphere ends its movement in a square occupied by a creature or object, the target must succeed at a CON Save or take 20D10 damage. If successful, the creature or object is only partially affected and takes 5D10 points of damage instead. If the damage is sufficient to kill the creature, the target is disintegrated. If the sphere is directed to strike an object or part of an object, it disintegrates the 5-foot cube it occupies.</p>
<p>The sphere may destroy one creature, object, or 5-foot cube of matter per round, provided it is directed to a suitable target. The sphere counts as a Disintegrate spell for the purpose of destroying a Wall of Force (or any other spell or effect specifically affected by a Disintegrate spell).</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>5D10 damage. Target is disintegrated if the target is killed.</dd>
    <dt>Failure</dt> <dd>20D10 damage. Target is disintegrated if the target is killed.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 9);

        $spell              = new Spell;
        $spell->name        = 'Spider Climb';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>The target gains a climb Speed of 25 feet.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Spider Form';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>This spell allows you to polymorph into any spider, including a Giant Spider. In all other ways, this spell functions like the spell Animal Form.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 3);

        $spell              = new Spell;
        $spell->name        = 'Spider Legs';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You grow four long spider legs from the sides of your torso. You gain a Climb Speed of 30 feet.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Spider Polymorph';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 1 hour';
        $spell->description    = "<p>As the Polymorph spell, except that the target can only be turned into a Giant Spider.</p>
<p>If the target is successfully polymorphed into a Giant Spider, the caster gains control of the subject while they are in Giant Spider form as the Dominate spell (automatic success if polymorphed)</p>
<dl>
    <dt>Material Components</dt> <dd>A spider of any type small enough to be held in the caster's hand. It is crushed during the spell casting and vanishes.</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may polymorph an additional 2 creatures</dd>
    <dt>Heightened (+3)</dt> <dd>With a Yochlol physically present and approval, you may polymorph the target into a Drider</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Polymorphed</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);

        $spell              = new Spell;
        $spell->name        = 'Spider Sense';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One arachnid';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>This spell functions just like Animal Sense, except as noted here and you may only target an arachnid.</p>';
        $helper->addTypesToSpell($spell, ['Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Spidercloak Armor';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 30 minutes';
        $spell->description = "<p>This spell surrounds you with a floating swirling, shadowy network of non-sticky webs of irregular scraps of force and magical shadows. This magical partially solid barrier helps to deflect both physical and magical attacks, granting a +4 bonus to AC.</p>
<p>This spell also conceals the caster's alignment, and obscures your magical items from being detected as magical by Detect Magic or similar spells and effects.</p>
<dl>
    <dt>Material Components</dt> <dd>A bit of spiderweb or a living spider (crushed during casting)</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 5);

        $spell              = new Spell;
        $spell->name        = 'Spike Growth';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '20-foot radius. 150 foot range';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>The ground in a 20-foot radius centered on a point within range twists and sprouts hard spikes and thorns. The area becomes difficult terrain for the duration. When a creature moves into or within the area, it takes 2D4 piercing damage for every 5 feet it travels.</p>
<p>The transformation of the ground is camouflaged to look natural. Any creature that can’t see the area at the time the spell is cast must make a WIS (Perception) check against your spell save DC to recognize the terrain as hazardous before entering it.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 2);

        $spell              = new Spell;
        $spell->name        = 'Spirit Blast';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = '1 creature in range';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You concentrate ethereal energy and attack a creature's spirit, dealing 16D6 Force damage.</p>
<p>Because Spirit Blast affects the creature's spirit, it can damage a Target projecting its consciousness (such as via Project Image) or possessing another creature even if the Target's body is elsewhere. The possessed creature isn't harmed by the blast.</p>
<p>The blast doesn't harm creatures that have no spirit, such as Constructs.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Spirit', 'Force'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Spirit Guardians';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = '<p>You call forth spirits to protect you. They flit around you to a distance of 15 feet. If you are good or neutral, their spectral form appears angelic or fey (your choice). If you are evil, they appear fiendish.</p>
<p>When you cast this spell, you can designate any number of creatures you can see to be unaffected by it. An affected creature’s speed is halved in the area, and when the creature enters the area for the first time on a turn or starts its turn there, it must make a WIS Save and take 3D8 Positive/Negative damage.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Negative', 'Positive', 'Spirit'], 3);

        $spell              = new Spell;
        $spell->name        = 'Spirit Walk';
        $spell->casting     = '1 hour (Somatic, Verbal, Material)';
        $spell->range       = 'Personal';
        $spell->duration    = 'Concentration up to 3 hours';
        $spell->description = '<p>By focusing your energy, you are able to separate your spirit from your body, allowing it to travel anywhere on the same plane of existence. Distance is not a factor, but the locale to be visited in your spirit form must be known – a place familiar to you.</p>
<p>While in your spirit form, you can see and hear things, just as if you were there. You can also be seen and be heard, though you are unable to actually interact in that location. You cannot cast spells through your spirit form, nor does it allow magically enhanced senses to work through it.</p>
<p>If the chosen locale is magically dark, you see nothing. If it is naturally pitch black, you can see up to 10 feet away. Lead sheeting or magical protection (such as antimagic field, mind blank, or nondetection) blocks you from noticing individuals in the area you have traveled to, though you can feel that your senses are being blocked somehow.</p>
<p>While your spirit is out of your body, your body is paralyzed and completely helpless.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Spirit', 'Ritual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Spiritual Weapon';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You create a floating, spectral weapon within range that lasts for the duration or until you cast this spell again. When you cast the spell, you can make a melee spell attack against a creature within 5 feet of the weapon. On a hit, the target takes force damage equal to 1D8 + your spellcasting ability modifier.</p>
<p>As an Action on your turn, you can move the weapon up to 20 feet and repeat the attack against a creature within 5 feet of it. The weapon can take whatever form you choose. Clerics of deities who are associated with a particular weapon make this spell’s effect resemble that weapon.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 2);

        $spell              = new Spell;
        $spell->name        = 'Spread of Contentment';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->range       = '1000 feet';
        $spell->area        = '100 ft radius emanation';
        $spell->duration    = '12 hours';
        $spell->description = "<p>This spell has a calming effect on creatures within the spell's Area.</p>
<ul>
    <li>Hostile and Unfriendly creatures become Indifferent</li>
    <li>Indifferent creatures become Friendly</li>
    <li>Friendly creatures become Helpful</li>
    <li>This spell calms creatures that have been otherwise magically enraged and forced to attack</li>
    <li>This spell does not calm or otherwise alter the disposition of Summoned creatures (but it does affect Called creatures)</li>
</ul>
<p>This spell Counters and is Countered by Spread of Savagery</p>
<dl>
    <dt>Material Components</dt> <dd>Lammasu's feather</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Spread of Savagery';
        $spell->casting        = '1 hour (Material Casting, Somatic Casting, Verbal Casting, Secondary Casters)';
        $spell->requirements   = '<dl>
    <dt>Secondary Casters</dt> <dd>At least one other caster who must also cast this spell</dd>
</dl>';
        $spell->save_attribute = 'WIS';
        $spell->range          = '1000 feet';
        $spell->area           = '100 ft emanation';
        $spell->duration       = '12 hours';
        $spell->description    = '<p>All living creatures within the Area become hostile to anyone not affected by the spell, whether in or out of the Area, and regardless of alignment or former association. The are likely to attack such creatures, although they retain their intellect and thus retreat or avoid opponents obviously too powerful for them to overcome.</p>
<p>Affected creatures are likely to continue with their normal activities until presented with someone not affected by the spell. Subjects of this spell can identify unaffected creatures by sight through an instinctive, supernatural sense granted by the spell.</p>
<p>This spell Counters and is Countered by Spread of Contentment</p>
<dl>
    <dt>Material Components</dt> <dd>Three drops of brain fluid from a Harpy</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Affected</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 7);

        $spell              = new Spell;
        $spell->name        = 'Spring Sheath';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One sheath, buckle, or strap';
        $spell->duration    = '8 hours';
        $spell->description = "<p>You enchant an ordinary sheath into helpful magical item. With a thought (a Free Action), the weapon held by the target magically appears in the targets wearer's hand.</p>
<p>Although this spell is usually cast on a sword sheath, it also works on the straps, buckles, and pockets that hold weapons.</p>
<dl>
    <dt>Material Components</dt> <dd>The sheath, buckle or strap to be enchanted.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Spore Cloak';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->area        = '7 foot diameter emanation';
        $spell->targets     = 'Self';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You become shrouded in a dense cloud of yellow mold spores. You can see through the cloud and it provides you half Concealment (20% miss chance).</p>
<p>The cloak of swirling yellow spores travels with you and does not leave a trail as you move.</p>
<p>Anyone who passes through your square, or anyone whom you successfully Overrun, Bull Rush, Grapple, or otherwise shares your area must make a CON Save or suffer 2D10 Poison Damage and become Sickened for 1 minute. While they are Sickened, at the beginning of their turn, they take 1D10 Poison Damage. They may make a CON Save at the end of each of their turns to end the Sickened Condition.</p>
<p>While this spell is active, you are immune to spores from Brown, Yellow (including the spores from this spell) mold, and the rotting touch of Violet Fungi.</p>
<p>If you take any Fire damage, the spores are burnt away and the spell ends. If you are in direct sunlight, the spell continues but the spores become inert and has no effect on others (you continue to gain the benefits of half Concealment).</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);

        $spell              = new Spell;
        $spell->name        = "Spymaster's Coin";
        $spell->casting     = 'Material Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Very small inanimate object, such as a coin';
        $spell->duration    = '3 days, then Concentration, up to 10 minutes';
        $spell->description = "<p>You enchant a Fine object (such as a coin, stone, or other innocuous item) with a dormant enchantment. Anyone attempting to detect its magical aura must Succeed on a Caster Level Check (DC 15 + your Spell Caster Level).</p>
<p>At any one time during the spell's initial Duration, you may, as an Action, begin to Concentrate on the enchanted item, enabling you to hear or see (your choice) as if you were in the object's location. This effect otherwise functions as if you had cast Clairaudience/Clairvoyance in the object's Area.</p>
<p>You have no sense of where the item is, even after Concentrating.</p>
<dl>
    <dt>Material Components</dt> <dd>The Fine object to be enchanted</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Divination'], 2);

        $spell              = new Spell;
        $spell->name        = 'Stabilize';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = '1 dying creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>Positive energy shuts death's door. The target loses the Dying Condition, though it remains Unconscious at 0 Hit Points.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Healing', 'Positive'], 0);

        $spell               = new Spell;
        $spell->name         = 'Stalwart Covenant';
        $spell->casting      = '10 minutes (Material, Somatic, Verbal, Ability Damage, Secondary Caster)';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>1 CON Damage</dd>
    <dt>Secondary Caster</dt> <dd>At least one other caster who must also cast this spell.</dd>
</dl>';
        $spell->range        = 'Touch';
        $spell->targets      = 'Willing living creature Touched';
        $spell->duration     = 'Permanent until triggered, than 1 minute';
        $spell->description  = '<p>The Target enters an agreement with your Deity. The Target must be a worshiper of your Deity. Once the spell is cast on the Target, the spell remains dormant until the Target is reduced to 1/4 their maximum Hit Points. When this condition is met, the following occurs for a Duration of 1 minute. Once that minute is up, the spell is ended.</p>
<ul>
    <li>The Target gain 50 Temporary Hit Points</li>
    <li>The Target gain Damage Reduction: 5</li>
    <li>The Target gain a +4 Divine Bonus to all your Saves</li>
</ul>
<p>Casting this spell on someone who already has an active Stalwart Covenant dispels the first casting.</p>
<p>You may not have more than 2 Stalwart Covenants active at one time, one on yourself, and one on another.</p>
<dl>
    <dt>Material Components</dt> <dd>A vial of Holy Water, which is sprinkled on the Target</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 5);

        $spell              = new Spell;
        $spell->name        = 'Starmantle';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One living creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>This spell manifests as a draping cloak of tiny, cascading stars that seem to flicker out before touching the ground. The cloak forms over the target's existing apparel and sheds light as a torch.</p>
<p>The starmantle renders the wearer impervious to nonmagical weapon attacks and transforms any nonmagical weapon or missile that strikes it into harmless light, destroying it forever. Contact with the starmantle does not destroy magic weapons or missiles, but the starmantle's wearer is entitled to a DEX Save (DC 15) each time he is struck by such a weapon; success indicates that the wearer takes only half damage from the weapon (rounded down).</p>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Exalted'], 6);

        $spell              = new Spell;
        $spell->name        = 'Stars of Arvandor';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'Up to one creature or object per round';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You create ten tiny, twinkling stars. These minute starburts orbit your head like ion stones.</p>
<p>As an Action, you can launch one star at a target within range by making a Ranged Spell Attack. Alternatively, you may use a Double Action to launch up to 4 stars at one or more targets within range.</p>
<p>A nonevil target takes 1D8 points of Force damage, half of which is nonlethal (rounded down).</p>
<p>Evil creatures take 1D8 points of lethal damage instead.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force', 'Exalted'], 3);

        $spell                = new Spell;
        $spell->name          = 'Stars of Mystra';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Mystra';
        $spell->range         = '60 feet';
        $spell->targets       = 'Up to one creature or object per round';
        $spell->duration      = '10 minutes or until all stars are used';
        $spell->description   = '<p>You create ten tiny, twinkling stars. These minute starbursts orbit your head like ion stones. As an Action, you can launch one start at a target by making a Ranged Spell attack.</p>
<p>Each time atarget is hit by a star, it must make a Save against their primary casting attribute. On a Failed Save, the target loses a Spell or Spell Slot as if the target had used it to cast a spell. The level of the lost spell is 4th (or the highest spell level lower than 4th in which the caster has at least one remaining prepared Spell or Spell Slot). If the target prepares Spells, determine the specific lost Spell randomly. If the target has spell casting ability from more than one class, determine the affected spellcasting class randomly.</p>
<p>The stars have no effect on non-spellcasters.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 4);

        $spell                = new Spell;
        $spell->name          = 'Stars of Selune';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Selune';
        $spell->range         = '60 feet';
        $spell->targets       = 'Up to one creature or object per round';
        $spell->duration      = '10 minutes or until all stars are used';
        $spell->description   = '<p>You create ten tiny, twinkling stars. These minute starburts orbit your head like ion stones. As an Action, you can launch one start at a target by making a Ranged Spell attack.</p>
<p>Each time a target is hit by a star, they take 1D8 Cold and 1D8 Force damage. If the target is a lycantrope, they must make a CHA Save or be turned back into their humanoid form (non-hybrid).</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Cold'], 4);

        $spell              = new Spell;
        $spell->name        = 'Status';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Up to 2 willing creatures touched';
        $spell->duration    = '8 hours';
        $spell->description = '<p>This spell allows you to mentally monitor the Target creatures. You know their relative positions (direction and distance) and general condition. You are aware of the following conditions that affect them.</p>
<ul>
    <li>Unharmed</li>
    <li>Wounded</li>
    <li>Disabled</li>
    <li>Staggered</li>
    <li>Unconscious</li>
    <li>Dying</li>
    <li>Nauseated</li>
    <li>Panicked</li>
    <li>Poisoned</li>
    <li>Sickened</li>
    <li>Stunned</li>
    <li>Diseased</li>
    <li>Confused</li>
</ul>
<p>Once the spell is cast, distance does not hinder the spell so long as you and the Targets are on the same Plane of existence.</p>
<p>If the Target leaves the Plane or dies, the spell ends for that Target.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Steal Summoning';
        $spell->casting     = 'Reaction';
        $spell->range       = '30 feet';
        $spell->targets     = 'One spell being cast with the Summoning type';
        $spell->duration    = 'Concentration, pu to 1 minute';
        $spell->description = "<p>You modify a Conjuration Summoning spell so that you are treated as the one that cast the spell. If the original spell grants the caster control over the Summoned creature, then you gain control of the Summoned creature. If the spell Summons more than one creature, you are treated as the Caster for one of those creatures.</p>
<p>If the Duration of this spell ends before the Duration of the Summoning spell's Duration, then the Summoned creature treats the original caster as then treated as the caster of the spell again.</p>
<p>You my dismiss the Summoned creature as an Action while you are treated as the Summoner.</p>";
        $helper->addTypesToSpell($spell, ['Abjuration'], 5);

        $spell              = new Spell;
        $spell->name        = 'Steel Wind Strike';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '60 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You flourish the weapon used in the casting and then vanish to strike like the wind.</p>
<p>Choose up to five creatures you can see within range. Make a Melee Spell Attack against each target. On a hit, a target takes 6D10 Force damage.</p>
<p>You can then Teleport to an unoccupied space you can see within 5 feet of one fo the targets you hit or missed.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 5);

        $spell              = new Spell;
        $spell->name        = 'Steelsting';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '150 feet. 5 ft-radius cylinder, 25 ft tall';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You create a brief maelstrom of flying darts of force that spin, slice, and rebound within the area. Each creature within the area is targeted by 1D3 + 1 melee attacks from these darts (check for each creature separately). Make a Ranged Spell attack. Each dart deals 1D6 Force damage.</p>
<p>The name is a misnomer, for the spell creates neither steel nor a true sting.</p>
<p>You can only cast this spell once per turn.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 4);

        $spell              = new Spell;
        $spell->name        = 'Sticks and Stones';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One small pile of debris';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You animate a pile of rocks, branches, limbs, and other debris into the crude shape of a skeletal creature of Medium size that immediately attacks whatever foe you designate. You can change the animated creature's chosen target as an Action. The creature's combat statistics are those of a 2HD humanoid skeleton.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Animate an additional pile of sticks and stones</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the HD by +2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Sticks to Snakes';
        $spell->casting     = 'Material Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Wooden stick touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You may turn a wooden stick you touch into a snake (either a Constrictor Snake or a Poisonous Snake). You may direct its Actions with an Action. If you do not spend an Action to direct it, it only defends itself.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>You may choose a Giant version of the snake</dd>
    <dt>Heightened (+1)</dt> <dd>The range becomes 60 feet, and you may transform an additional wooden stick into a snake</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Sticky';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '60 feet';
        $spell->area           = '1-ft square';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You create an Area that is covered with a sticky substance. Any creature in the Area must make a DEX Save. On a Failure, they cannot move and are considered Entangled. On Success, they may move at half their Speed, but are still considered Entangled as long as they remain in the Area.</p>
<p>This spell Counters and is Countered by Grease</p>
<dl>
    <dt>Material Components</dt> <dd>A drop of hardened tree sap, which must you must eat</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>May move at half Speed, but is considered Entangled as long as they are in the Area</dd>
    <dt>Failure</dt> <dd>Cannot move and is considered Entangled</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>The sticky substance is flammable. If set on fire, the duration ends at the start of your next turn. The fire deals 4D6 Fire damage to all in the area. Half that damage on a Successful DEX Save.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Stinking Cloud';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '20-foot burst. 120 foot range';
        $spell->save_attribute = 'CON';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You create a cloud of mist in the area that makes creatures within concealed. (The concealment is not a poison effect.) A creature that ends its turn within the cloud must attempt a CON Save.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>Sick 1</dd>
    <dt>Failure</dt> <dd>Sick 1, and Slowed 1 until it leaves the cloud</dd>
    <dt>Critical Failure</dt> <dd>Sick 2, and Slowed 1 until it leaves the cloud</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Permanency (Heightened +3)</dt> <dd>7,500 gp. 5 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Poison', 'Permanency'], 3);

        $spell              = new Spell;
        $spell->name        = 'Stone Body';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '30 minutes';
        $spell->description = '<p>This spell transforms your body into living stone, which grants you several powerful effects.</p>
<ul>
    <li>You gain Damage Reduction 10/Adamantine</li>
    <li>You gain Immunity to Blindness, Critical Hits, Ability Score Damage, Deafness, Disease, Drowning, Electricity, Poison, Stunning, and all spells or effects that affect your physiology or respiration (because you have no physiology or respiration)</li>
    <li>You gain Resistance to Fire</li>
    <li>You gain a +4 Bonus to STR</li>
    <li>You suffer a -4 Penalty to DEX (to a min of 1)</li>
    <li>You gain the Improved Unarmed Strike Feat</li>
    <li>Your weight increases by X7</li>
    <li>You are affected by any spell that affects Golems or stone</li>
    <li>You do not need to breathe</li>
    <li>You are Immune to Damage due to pressure (for example, you can sink to the bottom of the ocean and not feel the effects of the water pressure)</li>
    <li>You cannot eat or drink and you cannot play wind based instruments</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>A small piece of stone that was once part of a Stone Golem, or an Earth Elemental</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Stone Gaze';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 ft';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>You gain a gaze attack. As an Action, you can gaze at a target. If the target meets your gaze, they must make a CHA Save or turn to stone (as the spell Flesh to Stone). You may turn any victim that was turned into stone in this way with an Action at any time.</p>
<p>Targets can avert their eyes, which grants them a +4 bonus to their Save.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Not turned into stone</dd>
    <dt>Failure</dt> <dd>Turned into stone</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 9);

        $spell              = new Spell;
        $spell->name        = 'Stone Metamorphosis';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Stone object touched, up to 30 cubic feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You can change an existing piece of rock to another type of rock.</p>
<blockquote>
    For example: you can make crumblestone into granite, substantially strengthening it.
</blockquote>
<p>You can use this spell to create precious gems or metals. You can only create 20 gp worth per casting.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the amount affected by 10 cubic feet or increase the value by 10 gp.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 4);
        $spell->materials()->save(Material::where('name', 'Talcum')->firstOrFail(), ['meta' => 'A grain']);
        $spell->materials()->save(Material::where('name', 'Obsidian')->firstOrFail(), ['meta' => 'Small chip']);

        $spell                 = new Spell;
        $spell->name           = 'Stone Sphere';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = 'One 5-foot diameter sphere. 60 foot range';
        $spell->duration       = 'Concentration or until dismissed (see description)';
        $spell->description    = '<p>You create a sphere of earth in a square within range. The sphere has AC: 5, Hardness: 8, Hit Points: 200, and weighs 150 lbs. Once per round when you Concentrate on this Spell, you can direct it to roll to a spot within range. You can attempt to have the stone roll over a target. Make a Ranged Spell attack with a -2 penalty. If you hit, you deal 4D6 damage of Crushing damage.</p>
<p>You can’t Concentrate on the Spell to move the sphere during the round you create it.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Hit Points by +50, the damage by +2D6, and the weight by 50 lbs</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Critical Failure</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Full damage and Pinned (until the bolder is moved)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Earth', 'Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Stone to Flesh';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Petrified creature or human-sized stone object';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You restore a petrified creature to its normal state or transform a stone object into a mass of inert flesh (without stone\'s Hardness) in roughly the same shape.</p>';
        $helper->addTypesToSpell($spell, ['Earth', 'Transmutation'], 6);

        $spell              = new Spell;
        $spell->name        = 'Stone Trap';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'Stone object up to 3,000 lbs';
        $spell->duration    = 'See text';
        $spell->description = "<p>You cause a block of stone to turn invisible and hover at a designated point in the air. The stone remains there until triggered, either by special conditions set by you or by a command word you choose. Once triggered, the Stone Trap turns visible and falls naturally.</p>
<p>The stone of the Stone Trap can be positioned so that it holds up additional material within the weight limit of the spell. This additional weight could be placed on top of the stone in midair, the stone could function as a plug in a hole in a ceiling, and so on.</p>
<p>Any creature hit by the stone when it falls takes 1D6 points of damage per 200 lbs of weight plus 1D6 points for every 10 feet the stone falls, for a maximum of 20D6 points of Bludgeoning damage.</p>
<p>The conditions for triggering a Stone Trap can be as simple or as elaborate as you desire. Special conditions can be cased on a creature's name, sex, or race, but otherwise must be based on observable actions or qualities. Other intangibles such as level, class, Hit Dice, and Hit Points don't qualify.</p>
<dl>
    <dt>Material Components</dt> <dd>A drop of blood and a pebble</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 7);

        $spell              = new Spell;
        $spell->name        = 'Stonefire';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch, 20 ft square';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You cause natural, non-living stone to combust, emitting thick black smoke and sending forth waves of heat. Anyone touching the burning rock takes 2D6 points of Fire damage each round while the intense heat coming from the stone deals 2D4 points of Fire damage to creatures within 10 feet and 1D4 points of Fire damage to those past 10 feet and within 20 feet.</p>
<p>The burning stone deals its damage to all creatures in the area when it appears and on your turn each round. Undead take double damage from Stonefire.</p>
<p>Ignited stone is consumed by the flames at teh rate of 1 foot of thickness per round (so a 10-foot thick wall covered with Stonefire would require 10 rounds to burn through). Burning away load-bearing walls, columns, or other supports might cause cave-ins or collapses.</p>
<p>If the burning stone takes 20 points of Cold damage or more in 1 round, the flames go out.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth', 'Fire'], 5);

        $spell              = new Spell;
        $spell->name        = 'Stoneskin';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = '20 minutes';
        $spell->description = "<p>The target's skin hardens like stone. It gains Resistance 5 vs physical damage (any bludgeoning, piercing, or slashing damage) and weakness 5 to adamantine. Each time the target is hit by a bludgeoning, piercing, or slashing attack, Stoneskin's duration decrease by 1 minute.</p>
<p>If you are turned to stone while this spell is in effect, you revert to your normal form once this spell ends.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The resistance and weakness increase to 10. The duration is increased by 5 minutes.</dd>
    <dt>Heightened (+2)</dt> <dd>The resistance and weakness increase to 15. The duration is increased by 10 minutes.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Earth', 'Transmutation'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Stop';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '90 feet';
        $spell->rarity         = 'Rare';
        $spell->save_attribute = 'STR';
        $spell->duration       = 'Concentration, up to 5 rounds';
        $spell->description    = "<p>This spell instantly confines the movements of any one target within range to the spatial location occupied when the spell takes effect.</p>
<p>In other words, the target's motion - airborne or otherwise - is instantly halted and cannot move away from that spot.  The stopped creature has full freedom of movement in one spot for the duration of the spell.</p>
<p>Stop affects only one creature, chosen by the caster (seen or visualized concentrated upon, and within range). It can therefore serve to separate a chosen rider from an unaffected mount.</p>
<p>Willing or not, target creatures are fully affected for the duration. Each round, the target may make a STR Save to end this affect.</p>
<p>A Dispel Magic cast on the target creature will free the creature instantly (no check required). Similarly, if the target is wearing a Ring of Freedom, the spell ends after 1 round.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The spell fails or ends immediately</dd>
    <dt>Failure</dt> <dd>The target is affected by the spell, but may make another Save at the end of his next round.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Storm of Vengeance';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Sight';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>A churning storm cloud forms, centered on a point you can see and spreading to a radius of 360 feet. Lightning flashes in the area, thunder booms, and strong winds roar. Each creature under the cloud (no more than 5,000 feet beneath the cloud) when it appears must make a CON Save. On a failed save, a creature takes 2D6 Sonic damage and becomes deafened for 5 minutes.</p>
<p>Each round you maintain concentration on this spell, the storm produces additional effects on your turn.</p>
<dl>
    <dt>Round 2</dt> <dd>Acidic rain falls from the cloud. Each creature and object under the cloud takes 1D6 Acid damage.</dd>
    <dt>Round 3</dt> <dd>You call six bolts of lightning from the cloud to strike six creatures or objects of your choice beneath the cloud. A given creature or object can’t be struck by more than one bolt. A struck creature must make a DEX Save. The creature takes 10D6 Lightning damage on a failed save, or half as much damage on a successful one.</dd>
    <dt>Round 4</dt> <dd>Hailstones rain down from the cloud. Each creature under the cloud takes 2D6 Bludgeoning damage.</dd>
    <dt>Round 5 - 10</dt> <dd>Gusts and freezing rain assail the area under the cloud. The area becomes difficult terrain and is heavily obscured. Each creature there takes 1D6 Cold damage. Ranged weapon attacks in the area are impossible. The wind and rain count as a severe distraction for the purposes of maintaining concentration on spells. Finally, gusts of strong wind (ranging from 20 to 50 miles per hour) automatically disperse fog, mists, and similar phenomena in the area, whether mundane or magical.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Acid', 'Cold', 'Electricity'], 9);

        $spell                 = new Spell;
        $spell->name           = 'Storm Shield';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '30 foot radius sphere, 120 feet away';
        $spell->duration       = '10 minutes or until discharged';
        $spell->description    = "<p>This spell creates a small, glowing sphere of amber light at a point you designate. Any effect that deals Electricity damage (such as a Lightning Bolt or a blue dragon's breath weapon) that passes within 30 feet of the Storm Shield is attracted to it and strikes the shield instead of its intended target.</p>
<p>In the case of area spells such as Lightning Bolt, this redirection occurs if any portion of the spell's area is within 30 feet of the storm shield. In such a case, the entire effect is drawn to the Storm Shield, and all creatures or objects that otherwise would have been in the spell's area remain unharmed. The Storm Shield takes full damage (no Save) from any effect drawn into it. The shield can absorb up to 100 points of Electricity damage. Any remaining damage is applied to all creatures within 10 feet of the storm shield's position, with a DEX Save.</p>
<blockquote>
    For example, suppose a storm shield cast by a 5th-level cleric has already absorbed 78 points of electricity damage when it is struck by a lightning bolt that deals 45 points of damage.
</blockquote>
<p>The first 22 points of damage is enough to destroy the storm shield, so every creature within 10 feet of it takes 23 points of electricity damage (or 11 with a successful save).</p>
<dl>
    <dt>Material Components</dt> <dd>A small chip of amber.</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the amount of damage the shield can absorb by +50 points</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Electricity'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Storm Sphere';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '20-foot sphere. 150 foot range';
        $spell->save_attribute = 'STR';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>A 20-foot-radius sphere of whirling air springs into existence centered on a point you choose within range. The sphere remains for the spell’s duration. Each creature in the sphere when it appears or that ends its turn there must succeed on a STR Save or take 2D6 Bludgeoning damage. The sphere’s space is difficult terrain.</p>
<p>Until the spell ends, you can use an Action on each of your turns to cause a bolt of lightning to leap from the center of the sphere toward one creature you choose within 60 feet of the center. Make a ranged spell attack. You have advantage on the attack roll if the target is in the sphere. On a hit, the target takes 4D6 Electricity damage.</p>
<p>Creatures within 30 feet of the sphere have disadvantage on WIS (Perception) checks made to listen.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage of all types by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air', 'Electricity'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Stormrage';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '5 rounds';
        $spell->description    = '<p>You gain the following</p>
<ul>
    <li>With an Action, Fly 40. You can hover, fly backwards, and your flying is stable enough to cast spells.</li>
    <li>As a Double Action, you can hurl 2 lightning bolts from your eyes. Make a Ranged Touch Attack for each lightning bolt. Each lightning bolt dealing 6D6 Electricity damage (Save for half). You must strike a single target with both lightning bolts.</li>
    <li>Immunity to all Electricity damage</li>
    <li>You can resist natural and magical winds, they do not push you unless you allow it.</li>
    <li>Each round, you take 5 Non-lethal damage, as the spell drains your vitality.</li>
</ul>
<p>You may end the spell as a Free Action.</p>
<dl>
    <dt>Material Components</dt> <dd>Feather from any sort of bird that can fly, a pinch of ash from any burnt organic material that was struck by lightning, and a piece of flint.</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by 5 rounds</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the Electricity damage by +1D6</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Critical Failure</dt> <dd>Double Damage</dd>
    <dt>Failure</dt> <dd>Normal Damage</dd>
    <dt>Success</dt> <dd>Half Damage</dd>
    <dt>Critical Success</dt> <dd>No Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Evocation', 'Electricity'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Suggestion';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature';
        $spell->save_attribute = 'WIS';
        $spell->spell_creator  = 'Hamring';
        $spell->duration       = 'Varies';
        $spell->description    = "<p>You suggest a course of action to the target, which must be phrased in such a way as to seem like a logical course of action to the target and can't be self-destructive or obviously against the target's self-interest. The target's response depends on its WIS Save.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected and knows you tried to control it</dd>
    <dt>Success</dt> <dd>The target is unaffected and thinks you were talking to them normally; not casting a spell on them</dd>
    <dt>Failure</dt> <dd>The target immediately follows your suggestion with a duration of 1 minute, or until the target starts to doubt their safety, at which point the spell is dismissed</dd>
    <dt>Critical Failure</dt> <dd>Per failure, but the duration is 1 hour or until dismissed</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+4)</dt> <dd>You can target up to 10 creatures</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Lingual', 'Compulsion'], 2);

        $spell              = new Spell;
        $spell->name        = 'Summon Animals';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '90 feet';
        $spell->duration    = 'Concentration, up to 3 hours or until dismissed';
        $spell->description = "<p>You summon an Animal and it appears in an unoccupied space that you can see within range. You summon one Animal of CR rating 1/2 or lower.</p>
<p>Each beast is also considered fey, and it disappears when it drops to 0 Hit Points or when the spell ends.</p>
<p>The summoned creatures are friendly to you and your companions. Roll Initiative for the summoned creatures as a group, which has its own turns. It obeys any verbal commands that you issue to them. This requires no Action from you, but you must be able to communicate with them (i.e. Speak with Animals). If you don't issue any commands to them, they defend themselves from Hostile creatures, but otherwise take no Action.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd><ul>
        <li>One Animal of CR 1 or lower</li>
        <li>Two Animals of CR 1/2 or lower</li>
        <li>Four Animals of CR 1/4 or lower</li>
    </ul></dd>
    <dt>Heightened (+2)</dt> <dd><ul>
        <li>One Animal of CR 2 or lower</li>
        <li>Two Animals of CR 1 or lower</li>
        <li>Four Animals of CR 1/2 or lower</li>
        <li>Eight Animals of CR 1/4 or lower</li>
    </ul></dd>
    <dt>Heightened (+3)</dt> <dd><ul>
        <li>One Animal of CR 3 or lower</li>
        <li>Two Animals of CR 2 or lower</li>
        <li>Four Animals of CR 1 or lower</li>
        <li>Eight Animals of CR 1/2 or lower</li>
        <li>Sixteen Animals of CR 1/4 or lower</li>
    </ul></dd>
    <dt>Heightened (+5)</dt> <dd><ul>
        <li>One Animal of CR 4 or lower</li>
        <li>Two Animals of CR 3 or lower</li>
        <li>Four Animals of CR 2 or lower</li>
        <li>Eight Animals of CR 1 or lower</li>
        <li>Sixteen Animals of CR 1/2 or lower</li>
    </ul></dd>
    <dt>Heightened (+7)</dt> <dd><ul>
        <li>One Animal of CR 5 or lower</li>
        <li>Two Animals of CR 4 or lower</li>
        <li>Four Animals of CR 3 or lower</li>
        <li>Eight Animals of CR 2 or lower</li>
        <li>Sixteen Animals of CR 1 or lower</li>
    </ul></dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning', 'Animal'], 1);

        $spell              = new Spell;
        $spell->name        = 'Summon Animal, Lesser';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '90 feet';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You summon an Monster with the Animal type (Animal or Insect) with a CR of 1/4 to a space within range. This animal must be something that naturally appears in the environment you are in (ex. rats in cities, scorpions in deserts, rabbits in forests, etc.). This animal is friendly towards you and your companions. You may use an Action to give the animal simple commands (Attack, Defend), otherwise it will behave as a normal animal of its type. If killed, the animal disappears immediately and the spell ends.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>You may summon an Animal with CR 1/2</dd>
    <dt>Heightened (+5)</dt> <dd>You may summon an Animal with CR 1</dd>
    <dt>Heightened (+7)</dt> <dd>You may summon an Animal with CR 2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning', 'Animal'], 0);

        $spell              = new Spell;
        $spell->name        = 'Summon Celestial';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = '90 feet';
        $spell->duration    = '1 hour';
        $spell->description = "<p>You summon a celestial of CR 8 or lower, which appears in an unoccupied space that you can see within range. The celestial disappears when it drops to 0 Hit Points or when the spell ends.</p>
<p>The celestial is friendly to you and your companions for the duration. Roll initiative for the celestial, which has its own turns. It obeys any verbal commands that you issue to it as an Action (as long as they don't violate its alignment). If you don't issue any commands to the celestial, it defends itself and acts as it sees fit.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the maximum CR by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning', 'Celestial', 'Good', 'Lawful', 'Lingual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Summon Demon';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>You utter foul words, summoning one demon from the chaos of the Abyss. You choose the demon's type, which must be one of CR 5 or lower, such as a Barlgura. The demon appears in an unoccupied space you can see within range, and the demon disappears when it drops to 0 Hit Points or when the duration ends.</p>
<p>Roll initiative for the demon, which has its own turns thereafter, you can issue a verbal command to it (requiring no Action on your part), telling it what it must do on its next turn. You must be able to speak a language that the demon understands. If you issue no command, it spends its turn attacking any creature within range that has attacked it.</p>
<p>At the end of each of the demon's turns, it makes a CHA Save. The demon has Disadvantage on this Save if you say its True Name. On a failed Save, the demon continues to obey you. On a successful Save, your control of the demon ends for the rest of the duration (even if you cease Concentration) and the demon sepnds its turns pursuing and attacking the nearest non-demon to the best of its ability. If you stop Concentrating on the spell, the demon doesn't disappear for 1-6 rounds. If you stop Concentrating on the spell after you have lost control of it, it stays until the full 1-hour duration has passed.</p>
<dl>
    <dt>Material Components</dt> <dd>A vial of blood from a humanoid killed within the past 24 hours.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the maximum CR by 1.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning', 'Evil', 'Chaotic', 'Demon', 'Lingual'], 4);

        $spell              = new Spell;
        $spell->name        = 'Summon Demon, Lesser';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>You utter foul words, summoning demons from the chaos of the Abyss. Roll on the following table to determine what happens.</p>
<table>
    <thead>
        <tr>
            <th>D6</th>
            <th>Demons Summoned</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1-2</td>
            <td>Two demons of challenge rating 1 or lower</td>
        </tr>
        <tr>
            <td>3-4</td>
            <td>Four demons of challenge rating 1/2 or lower</td>
        </tr>
        <tr>
            <td>5-6</td>
            <td>Eight demons of challenge rating 1/4 or lower</td>
        </tr>
    </tbody>
</table>
<p>The DM chooses the demons, such as manes or dretches, and you choose the unoccupied space you can see within range where they appear. A summoned demon disappears when it drops to 0 Hit Points or when the spell ends.</p>
<p>The demons are hostile to all creatures, including you. Roll initiative for the summoned demons as a group, which has its own turns. The demons pursue and attack the nearest non-demons to the best of their ability.</p>
<p>As part of casting the spell, you can form a circle on the ground with the blood used as a material component. The circle is large enough to encompass your space. While the spell lasts, the summoned demons can't cross the circle or harm it, and they can't target anyone within it. Using the material component in this manner consumes it when the spell ends.</p>
<dl>
    <dt>Material Components</dt> <dd>A vial of blood from a humanoid killed within that past 24 hours.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Double the number of demons summoned.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning', 'Evil', 'Chaotic', 'Demon'], 3);

        $spell              = new Spell;
        $spell->name        = 'Summon Elemental';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = '90 feet';
        $spell->duration    = 'Concentration, up to 3 hour or until dismissed';
        $spell->description = "<p>You call forth an elemental servant. Choose an area of air, earth, fire, or water that fills a 10-foot cube within range. An elemental of CR 5 or lower appropriate to the area you chose appears in an unoccupied space within 10 feet of it. The elemental disappears when it drops to 0 Hit Points or when the spell ends.</p>
<p>The elemental is friendly to you and your companions for the Duration. Roll Initiative for the elemental, which has its own turns. They obey any verbal commands that you issue to them. This does not require an action from you, but you must be able to communicate with the summoned elemental (speak a language that the elemental understands). If you don't issue any commands to them, they defend themselves from Hostile creatures, but otherwise take no Action.</p>
<p>If your Concentration is broken, the elemental doesn't disappear. Instead, you lose control of the elemental, it becomes hostile toward you and it might Attack. An uncontrolled elemental can't be dismissed by ending the spell, and it disappears 1 hour after you summoned it.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the CR of the summoned elemental by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning'], 5);

        $spell              = new Spell;
        $spell->name        = 'Summon Elemental, Lesser';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = '90 feet';
        $spell->duration    = 'Concentration, up to 3 hour or until dismissed';
        $spell->description = '<p>You call forth elemental servants that appear in unoccupied spaces that you can see within range. Choose an elemental of Challenge Rating 1/4 or lower.</p>
<p>An elemental summoned by this spell disappears when it drops to 0 Hit Points or when the spell ends.</p>
<p>The summoned creatures are friendly to you and your companions. Roll Initiative for the summoned creatures as a group, which has its own turns. They obey any verbal commands that you issue to them. This does not require an action from you, but you must be able to communicate with the summoned elemental (speak a language that the elemental understands). If you don\'t issue any commands to them, they defend themselves from Hostile creatures, but otherwise take no Action.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd><ul>
        <li>One Elemental of CR 1/2 or lower</li>
        <li>Two Elementals of CR 1/4 or lower</li>
    </ul></dd>
    <dt>Heightened (+2)</dt> <dd><ul>
        <li>One Elemental of CR 1 or lower</li>
        <li>Two Elementals of CR 1/2 or lower</li>
        <li>Four Elementals of CR 1/4 or lower</li>
    </ul></dd>
    <dt>Heightened (+3)</dt> <dd><ul>
        <li>One Elemental of CR 2 or lower</li>
        <li>Two Elementals of CR 1 or lower</li>
        <li>Four Elementals of CR 1/2 or lower</li>
        <li>Eight Elementals of CR 1/4 or lower</li>
    </ul></dd>
    <dt>Heightened (+5)</dt> <dd><ul>
        <li>Two Elementals of CR 2 or lower</li>
        <li>Four Elementals of CR 1 or lower</li>
        <li>Eight Elementals of CR 1/2 or lower</li>
        <li>Sixteen Elementals of CR 1/4 or lower</li>
    </ul></dd>
    <dt>Heightened (+7)</dt> <dd><ul>
        <li>Four Elementals of CR 2 or lower</li>
        <li>Eight Elementals of CR 1 or lower</li>
        <li>Sixteen Elementals of CR 1/2 or lower</li>
        <li>Thirty Two Elementals of CR 1/4 or lower</li>
    </ul></dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning'], 1);

        $spell              = new Spell;
        $spell->name        = 'Summon Fey';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = '90 feet';
        $spell->duration    = 'Concentration, up to 2 hour or until dismissed';
        $spell->description = "<p>You summon a fey creature of CR 6 or lower, or a fey spirit that takes the form of a beast of CR 6 or lower. It appears in an unoccupied space that you can see within range. The fey creature disappears when it drops to 0 Hit Points or when the spell ends.</p>
<p>The fey creature is friendly to you and your companions for the Duration. Roll Initiative for the creature, which has its own turns. It obeys any verbal commands that you issue to it as long as they don\'t violate its Alignment. This requires no action from you, but you must be able to speak a language that the fey can understand. If you don\'t issue any commands to the fey creature, it defends itself from Hostile creatures but otherwise takes no Action.</p>
<p>If your Concentration is broken, the fey creature doesn't disappear. Instead, you lose control of the fey creature, it becomes Hostile toward you, and it might Attack. An uncontrolled fey creature can\'t be dismissed by ending the spell, and it disappears 1 hour after you summoned it.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the CR of the summoned elemental by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning', 'Lingual'], 6);

        $spell                = new Spell;
        $spell->name          = 'Summon Spectator';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Helm';
        $spell->range         = '120 feet';
        $spell->duration      = 'Special';
        $spell->description   = "<p>This spell summons a spectator to act as a guardian. It serves for up to 101 years in a specified task. The task must involve the guarding of some location or inanimate physical object, such as a portal, shrine, or a holy relic. It allows no one except the one who summoned it or another of the same faith to enter the location it is guarding or to use, borrow, or examine an item or treasure it watches over. It is not gullible and can fairly easily detect false claims to membership of your faith by questioning such claimants telepathically about details of the faith's rituals and beliefs.</p>
<p>A spectator does not abandon its post unless slain or blinded in all five eyes, in which case it automatically returns to the other plane from where it came. There, it regenerates any damages and returns in 24 hours, after which time it returns to its post. If the object is gone or the location breached when it returns (it can automatically tell), it again leaves for the outer planes, and ending this spell.</p>
<dl>
    <dt>Material Components</dt> <dd>An eye stalk from a beholder, which the spell consumes</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning'], 5);

        $spell              = new Spell;
        $spell->name        = 'Summon Woodland Beings';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = 'Concentration, 3 hour or until dismissed';
        $spell->description = "<p>You summon fey creatures that appear in unoccupied spaces that you see within range. Choose one of the following options for what appears.</p>
<ul>
    <li>One Fey creature of CR 2 or lower</li>
    <li>Two Fey creatures of CR 1 or lower</li>
    <li>Four Fey creatures of CR 1/2 lower</li>
    <li>Eight Fey creatures of CR 1/4 or lower</li>
</ul>
<p>A summoned creature disappears when it drops to 0 Hit Points or when the spell ends.</p>
<p>The summoned creatures are friendly to you and your companions. Roll initiative for the summoned creatures as a group, which have their own turns. They obey any verbal commands that you issue to them with an Action. If you don't issue any commands to them, they defend themselves from hostile creatures, but otherwise acts naturally.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd><ul>
        <li>One Fey creature of CR 3 or lower</li>
        <li>Two Fey creatures of CR 2 or lower</li>
        <li>Four Fey creatures of CR 1 or lower</li>
        <li>Eight Fey creatures of CR 1/2 or lower</li>
    </ul></dd>
    <dt>Heightened (+2)</dt> <dd><ul>
        <li>One Fey creature of CR 4 or lower</li>
        <li>Two Fey creatures of CR 3 or lower</li>
        <li>Four Fey creatures of CR 2 or lower</li>
        <li>Eight Fey creatures of CR 1 or lower</li>
    </ul></dd>
    <dt>Heightened (+3)</dt> <dd><ul>
        <li>One Fey creature of CR 5 or lower</li>
        <li>Two Fey creatures of CR 4 or lower</li>
        <li>Four Fey creatures of CR 3 or lower</li>
        <li>Eight Fey creatures of CR 2 or lower</li>
    </ul></dd>
    <dt>Heightened (+4)</dt> <dd><ul>
        <li>One Fey creature of CR 6 or lower</li>
        <li>Two Fey creatures of CR 5 or lower</li>
        <li>Four Fey creatures of CR 4 or lower</li>
        <li>Eight Fey creatures of CR 3 or lower</li>
    </ul></dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Fey', 'Summoning'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Sun Bolt';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->save_attribute = 'DEX';
        $spell->targets        = 'One creature within Range';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A ray of burning sunlight springs from your hand. You must make a Ranged Spell Attack to hit your Target. A creature struck by the bolt is Blinded for 1 round and takes 2D6 points of Light damage. Creatures harmed by sunlight take double damage. Fungi, molds, oozes, and slimes always take double damage. Undead always takes triple damage.</p>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Not Blinded</dd>
    <dt>Failure</dt> <dd>Blinded</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light', 'Ray'], 2);

        $spell              = new Spell;
        $spell->name        = 'Sun Scepter';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '0 ft';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You create a radiant, mace-like scepter of solid light, approximately 3 feet long and 1 inch in diameter, with a blazing, spherical ball measuring 5 inches in diameter at one end.</p>
<p>The Sun Scepter functions as a physical weapon that deals 2D6 Bludgeoning Damage and has the following properties.</p>
<ul>
    <li>Axiomatic</li>
    <li>Disruption</li>
    <li>Flaming Burst</li>
</ul>
<p>Making Melee Attacks with this weapon is made with a Melee Touch Attack.</p>
<p>The Sun Scepter lasts only as long as you hold it in your hands.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Light'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Sunbeam';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '150 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>Brilliant sunlight flashes in a 60-foot radius centered on a point you choose within range. Each creature in that light must make a CON Save taking 12D6 Positive damage and is blinded for 1 minute. Undead and oozes have disadvantage on this saving throw.</p>
<p>A creature blinded by this spell makes another CON Save at the end of each of its turns. On a successful save, it is no longer blinded.</p>
<p>This spell dispels any darkness in its area that was created by a spell.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage, not blinded</dd>
    <dt>Failure</dt> <dd>Full damage, blinded for 1 minute with a CON Save each turn to end blinded condition</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light', 'Positive'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Sunburst';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '150 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>Brilliant sunlight flashes in a 60-foot radius centered on a point you choose within range. Each creature in that light must make a CON Save or take 12D6 Positive damage and is blinded for 1 minute. Undead and oozes have disadvantage on this saving throw.</p>
<p>A creature blinded by this spell makes another CON Save at the end of each of its turns. On a successful save, it is no longer blinded.</p>
<p>This spell dispels any darkness in its area that was created by a spell.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage and not Blinded</dd>
    <dt>Failure</dt> <dd>Full damage and Blinded for 1 minute</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light', 'Positive'], 8);

        $spell              = new Spell;
        $spell->name        = "Sune's Caress";
        $spell->casting     = 'Material Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One known evil creature touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>Your gentle touch fills the target with tremendous feelings of platonic love and compassion, and has the power to unnerve and debilitate evil creatures.</p>
<p>After casting this spell, you may make a Melee Touch attack before the beginning of your next turn. This spell only works on a creature that you know to be evil (regardless of whether they are evil or not).</p>
<p>An evil creature touched by this spell must wrestle with the pleasant feelings this spell invokes in the target. Roll on the table below to find the result.</p>
<table>
    <thead>
        <tr>
            <th>Roll</th>
            <th>Result</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1% - 25% (you may choose this result without rolling)</td>
            <td>Shaken for the Duration</td>
        </tr>
        <tr>
            <td>26% - 50%</td>
            <td>Frightened for the Duration</td>
        </tr>
        <tr>
            <td>51% - 75%</td>
            <td>Sickened for the Duration</td>
        </tr>
        <tr>
            <td>76% - 100%</td>
            <td>Stunned for the Duration</td>
        </tr>
    </tbody>
</table>
<dl>
    <dt>Material Components</dt> <dd>A peach seed.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Good', 'Mental'], 2);

        $spell               = new Spell;
        $spell->name         = 'Sunmantle';
        $spell->casting      = 'Somatic Casting, Ability Damage';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>2 STR Damage</dd>
</dl>';
        $spell->range        = 'Touch';
        $spell->targets      = 'One creature Touched';
        $spell->duration     = '1 minute';
        $spell->description  = '<p>This spell cloaks the Target in a wavering cloak of light that grants the following.</p>
<ul>
    <li>Illuminates and Dispels Darkness as the Daylight Spell.</li>
    <li>Damage Reduction 5</li>
    <li>In the Target is struck by a Melee Attack, the Sunmantle lashes out with a tendril of light at the attacker (always hitting) and dealing 5 Light Damage.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light', 'Good'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Sunrise';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator  = 'Lathander';
        $spell->save_attribute = 'DEX';
        $spell->range          = '60 feet';
        $spell->area           = '5-ft radius emanation';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You create a burst of dazzling light that is equivalent to natural sunlight. Any creature in the Area must make a DEX Save or be Blinded: 1 and takes 2D6 Light Damage</p>
<p>Because the light is also ultraviolet, it deals Double Damage to Fungi, Molds, Oozes, and Slimes as if they were Undead</p>
<p>This spell Dispels any Spell with the Darkness Type fo 3rd Level or lower.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not Blinded and Half Damage</dd>
    <dt>Failure</dt> <dd>Blinded: 1 and Full Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 3);

        $spell              = new Spell;
        $spell->name        = 'Suppress Magical Writings';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->area        = '100-ft radius emanation centered on you';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>You gain an enhanced awareness of magical writings within the Area. Magical writings such as Glyphs of Warding, Explosive Runes, Sepia Snake Sigil, or Symbols are covered in a blue nimbus of light (which sheds light equal to a candle). This effect reveals the location of magical writings without triggering them.</p>
<p>For each revealed magical writing, you can attempt a Dispel Check (DC 13 + magical writing's caster level). If you Succeed, the magical writing is suppressed for the Duration.</p>
<p>If a magical writing comes into existence in the Area of an active Suppress Glyph's Area, then it is automatically suppressed for the Duration.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Surge of Fortune';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute or until Discharged';
        $spell->description = '<p>The of your Deity flows through you, guiding your movements and honing your instincts. You gain the following.</p>
<ul>
    <li>+2 Bonus to Hit</li>
    <li>+2 Bonus to all Saves</li>
    <li>+2 Bonus to all Ability Checks and Skill Checks</li>
    <li>+2 Bonus to AC</li>
</ul>
<p>At any point before the spell ends, you can channel the remaining energies into a single instant of perfection. You may chose the result of your next Attack Roll or Save, then this spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Fortune'], 5);

        $spell              = new Spell;
        $spell->name        = 'Suspension';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Any non-living object up to 10,000 lbs';
        $spell->duration    = '1D4 + 10 days';
        $spell->description = '<p>This spell functions like the Levitate spell, except as noted here and as follows. You can mentally direct the object to move up or down as much as 45 feet each round for the duration of the spell; doing so is an Action. When you cease Concentration, the object remains in place for the duration of the spell.</p>
<dl>
    <dt>Material Components</dl> <dd>A small leather loop suspended from a bent wire of good.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell               = new Spell;
        $spell->name         = 'Sustain';
        $spell->casting      = '1 minute (Somatic, Verbal, Ability Damage)';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>1 CON Damage</dd>
</dl>';
        $spell->range        = 'Touch';
        $spell->targets      = 'Up to 2 living creatures Touched';
        $spell->duration     = '1 day';
        $spell->description  = '<p>The spell instantly relieves the negative effects of hunger and thirst and allows the Targets to go without food and water for the Duration. A Target can eat and drink normally.</p>
<p>When the Duration ends, the Targets must resume normal eating and drinking, but they suffer no ill effects from the missed meals.</p>';
        $spell->heightened   = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);

        $spell               = new Spell;
        $spell->name         = 'Susurrus of the City';
        $spell->casting      = '10 minutes (Material, Somatic, Verbal, Ability Damage)';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>2 CON Damage</dd>
</dl>';
        $spell->targets      = 'Self';
        $spell->duration     = '1 minute';
        $spell->description  = "<p>This spell awakens the secret voice of the city and causes a vacant building's facade to form a crude face and answer questions you have.</p>
<p>You may ask 1 question per round. Each question must be one that can be answered in no more than one word, and the knowledge imparted must be knowledge that is known to at least one person who is currently located in the city.</p>
<p>This spell has no agenda of its own, and does not try to deceive or trick you. In cases where there are multiple answers to a question, the spell provides the one that is the most pertinent to you. If you lag, discuss the answers, or go off to do anything else, the spell ends.</p>
<dl>
    <dt>Material Components</dt> <dd>An abandoned building in a settlement of at least Town Size or larger.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Divination'], 5);

        $spell               = new Spell;
        $spell->name         = 'Suyoll';
        $spell->casting      = '10 minutes (Somatic, Verbal, Secondary Casters)';
        $spell->range        = 'Touch';
        $spell->targets      = 'One willing elf';
        $spell->duration     = 'Instantaneous';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>2 other casters, who are there to certify that the target is deserving</dd>
</dl>';
        $spell->description = "<p>The Revival. Ritual of Complement.</p>
<p>This spell restores an elf's life, health, and harmony with the Weave. This is seen as an acceptance back into the community of elves, despite any changes that occur during the elf\'s life (or death).</p>
<p>This spell restores an elf's natural state, neutralizing all ill or unnatural effects upon him. It cancels Curses of any nature other than those divinely placed (ie. personally placed by a god) and spell effects such as Petrification and Polymorph. This spell allows the regrowth of full limbs, muscles, and organs (such as eyes, tongues, etc.). It also negates any magical or involuntary alignment changes. The most advanced form of this spell involves the restoration of undead elves to a living state as they were 100 years before their deaths or transformations.</p>";
        $helper->addTypesToSpell($spell, ['High Magic', 'Enchantment'], 10);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 30]);

        $spell              = new Spell;
        $spell->name        = 'Swift';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You gain an additional Action. This additional Action can only be used to make a Move Action.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 1);

        $spell              = new Spell;
        $spell->name        = 'Swift Quiver';
        $spell->casting     = 'Material Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You enchant your quiver so that it produces an endless supply of nonmagical ammunition, which seems to leap into your hand when you reach for it.</p>
<p>The reload time for your bow or crossbow is reduced by 1. If you have a feat that grants the Quick condition that can be used to reload your bow or crossbow, then the Quick condition allows you to also make Ranged Attacks with a bow or crossbow.</p>
<p>Each time you make such a ranged attack, your quiver magically replaces the piece of ammunition you used with a similar piece of nonmagical ammunition. Any pieces of ammunition created by this spell disintegrate when the spell ends. If the quiver leaves your possession, the spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Transmutation'], 4);

        $spell              = new Spell;
        $spell->name        = 'Swift Ready';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = '1 armor, weapon, or tiny object';
        $spell->duration    = '24 hours or until discharged';
        $spell->description = '<p>You enchant a suit of armor, shield, weapon, or object that can be held in one hand. Then, until the Duration, you can as an Action call the enchanted item to you. If the Target is an armor and you are not currently wearing any armor, it appears with you wearing the armor. Otherwise, it appears at your feet. Shields, weapons and objects appear in your hand if you have a free hand. Otherwise it appears at your feet.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Permanency Heightened (+3)</dt> <dd>1,000 gp. 2 CON Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Conjuration', 'Calling'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Sword Burst';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '5 feet';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You create a momentary circle of spectral blades that sweep around you. Each creature within range other than you, must make a DEX Save or take 1D6 damage.</p>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+5)</dt> <dd>Increase the Damage by +1D6</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>Take full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 0);

        $spell              = new Spell;
        $spell->name        = 'Sword Strike';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '5 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You create an area of Force shaped like a Long Sword. You make a Melee attack with the area of Force. The area of Force only exists long enough to make a single Melee attack. At the beginning of your next turn, the spell ends if you have not made a Melee Attack with the sword of force.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+4)</dt> <dd>You gain a +1 bonus to Hit</dd>
    <dt>Heightened (+2)</dt> <dd>The sword deals an Additional +1 Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 0);

        $spell                = new Spell;
        $spell->name          = 'Symbol';
        $spell->casting       = '1 minute (Material, Somatic, Verbal)';
        $spell->range         = 'Touch';
        $spell->spell_creator = 'Hersent';
        $spell->duration      = 'Until dispelled or triggered';
        $spell->description   = '<p>When you cast this spell, you inscribe a harmful glyph either on a surface (such as a section of floor, a wall, or a table) or within an object that can be closed to conceal the glyph (such as a book, a scroll, or a treasure chest). If you choose a surface, the glyph can cover an area of the surface no larger than 10 feet in diameter. If you choose an object, that object must remain in its place; if the object is moved more than 10 feet from where you cast this spell, the glyph is broken, and the spell ends without being triggered.</p>
<p>The glyph is nearly invisible, requiring an INT (Insight) check against your spell save DC to find it.</p>
<p>You decide what triggers the glyph when you cast the spell. For glyphs inscribed on a surface, the most typical triggers include touching or stepping on the glyph, removing another object covering it, approaching within a certain distance of it, or manipulating the object that holds it. For glyphs inscribed within an object, the most common triggers are opening the object, approaching within a certain distance of it, or seeing or reading the glyph.</p>
<p>You can further refine the trigger so the spell is activated only under certain circumstances or according to a creature’s physical characteristics (such as height or weight), or physical kind (for example, the ward could be set to affect hags or shapechangers). You can also specify creatures that don’t trigger the glyph, such as those who say a certain password.</p>
<p>When you inscribe the glyph, choose one of the options below for its effect. Once triggered, the glyph glows, filling a 60-foot-radius sphere with dim light for 10 minutes, after which time the spell ends. Each creature in the sphere when the glyph activates is targeted by its effect, as is a creature that enters the sphere for the first time on a turn or ends its turn there.</p>
<dl>
    <dt>Death</dt> <dd>Each target must make a CON Save, taking 10D10 Negative damage on a failed save, or half as much damage on a successful save.</dd>
    <dt>Discord</dt> <dd>Each target must make a Constitution saving throw. On a failed save, a target bickers and argues with other creatures for 1 minute. During this time, it is incapable of meaningful communication and has disadvantage on attack rolls and ability checks.</dd>
    <dt>Fear</dt> <dd>Each target must make a WIS Save and becomes frightened for 1 minute on a failed save. While frightened, the target drops whatever it is holding and must move at least 30 feet away from the glyph on each of its turns, if able.</dd>
    <dt>Hopelessness</dt> <dd>Each target must make a CHA Save. On a failed save, the target is overwhelmed with despair for 1 minute. During this time, it can’t attack or target any creature with harmful abilities, spells, or other magical effects.</dd>
    <dt>Insanity</dt> <dd>Each target must make an INT Save. On a failed save, the target is driven insane for 1 minute. An insane creature can’t take actions, can’t understand what other creatures say, can’t read, and speaks only in gibberish. The GM controls its movement, which is erratic.</dd>
    <dt>Pain</dt> <dd>Each target must make a CON Save and becomes incapacitated with excruciating pain for 1 minute on a failed save.</dd>
    <dt>Sleep</dt> <dd>Each target must make a Wisdom saving throw and falls unconscious for 10 minutes on a failed save. A creature awakens if it takes damage or if someone uses an action to shake or slap it awake.</dd>
    <dt>Stunning</dt> <dd>Each target must make a WIS Save and becomes stunned for 1 minute on a failed save.</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Permanency (Heightened +2)</dt> <dd>22,500 gp. 12 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Rune', 'Permanency'], 7);
    }
}
