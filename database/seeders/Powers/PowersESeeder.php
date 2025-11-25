<?php

namespace Database\Seeders\Powers;

use App\Models\Power;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersESeeder extends Seeder
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

        $power              = new Power;
        $power->name        = 'Ectoplasmic Creation';
        $power->action_type = '1 minute or Action';
        $power->range       = 'Touch or 60 feet';
        $power->duration    = '3 hours';
        $power->description = '<p>You can use this power in two ways.</p>
<ul>
    <li>
        <p>You shape raw ectoplasm into a nonmagical, unattended object of nonliving, organic matter.</p>
        <p>The volume of the item created cannot exceed 1 cubic foot. You must succeed on an appropriate Craft skill check to make a complex item.</p>
        <p>Attempting to use any created object as a material component for spells causes the spell to fail.</p>
    </li>
    <li>
        <p>Alternatively, you may coat an object with a soft springy ectoplasm at a range of 60 feet as an Action. If you coat a weapon in this way, the weapon deals non-lethal damage only (no critical hits) and deals -1 damage per die. This can also be done to reduce the damage from falling by coating the falling creature (including yourself) or coating the surface that the falling creature will strike, again, causing -1 damage per die.</p>
        <p>If the object is an attended object, the owner may attempt a DEX Save to resist the effect</p>
    </li>
</ul>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Ectoplasm'], 1);

        $power              = new Power;
        $power->name        = 'Ectoplasmic Creation, Major';
        $power->action_type = '10 minutes';
        $power->range       = '30 feet';
        $power->duration    = 'See text';
        $power->description = '<p>This power functions like Ectoplasmic Creation, except that you can also create an object of mineral nature.</p>
<p>Example hardness and rarity</p>
<table>
    <thead>
        <tr>
            <th>Material</th>
            <th>Duration</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Vegetable Matter</td>
            <td>1 day</td>
        </tr>
        <tr>
            <td>Stone, Crystal, Base Metals</td>
            <td>12 hours</td>
        </tr>
        <tr>
            <td>Precious Metals</td>
            <td>4 hours</td>
        </tr>
        <tr>
            <td>Gems</td>
            <td>90 minutes</td>
        </tr>
        <tr>
            <td>Rare Metals, Adamantine, Alchemical Silver, Mithral</td>
            <td>10 minutes</td>
        </tr>
    </tbody>
</table>';
        $power->heightened = '<dl>
    <dt>Heightened (+5)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Ectoplasm'], 5);

        $power                 = new Power;
        $power->name           = 'Ectoplasmic Crystallize';
        $power->action_type    = 'Double Action';
        $power->display        = 'Auditory';
        $power->range          = '150 feet';
        $power->requirements   = 'You must have the Ectoplasmic Creation power';
        $power->save_attribute = 'DEX / CON';
        $power->targets        = 'One living creature';
        $power->duration       = 'Permanent';
        $power->description    = "<p>You seed the subject's flesh with supersaturated crystal. In an eyeblink, the subject's form seems to freeze over, as its flesh and fluids are instantly crystallized. The target gets a CON Save. Following the application of this power, the subject appears lifeless. In fact, it is not dead (though no life can be detected with powers or spells that detect such).</p>
        <p>This power has a chance of being dispelled only by a manifester of a higher level than you when you manifested this power. When the power is dispelled, crystal melts back into flesh, and the subject is in exactly the state he was prior being affected by crystallize.</p>";
        $power->saves = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>As spell description</dd>
</dl>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Ectoplasm'], 6);

        $power              = new Power;
        $power->name        = 'Ectoplasmic Form';
        $power->action_type = 'Double Action';
        $power->display     = 'Olfactory';
        $power->targets     = 'Self';
        $power->duration    = '10 minutes';
        $power->description = '<p>You and all your gear become a partially translucent mass of rippling ectoplasm that generally conforms to your normal shape. You gain the following:</p>
<ul>
    <li>Resistance to all damage</li>
    <li>Immunity to Poison</li>
    <li>You AC becomes 10 + DEX modifier, and any AC bonuses from magic items are lost</li>
    <li>You cannot make physical attacks</li>
    <li>You lose all Supernatural abilities</li>
    <li>You cannot speak</li>
    <li>You lose your walk Speed</li>
    <li>You gain a Fly Speed of 20 feet</li>
    <li>You can pass through small holes or narrow openings, even mere cracks, with all you are wearing and holding</li>
    <li>You are subject to strong winds</li>
    <li>You cannot enter water or other liquids</li>
    <li>You cannot manipulate physical objects</li>
</ul>';
        $power->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism', 'Ectoplasm'], 3);

        $power               = new Power;
        $power->name         = 'Ectoplasmic Shard';
        $power->action_type  = 'Double Action';
        $power->display      = 'Auditory, Material';
        $power->range        = '60 feet';
        $power->requirements = 'You must have the Ectoplasmic Creation power';
        $power->targets      = 'One creature in range';
        $power->duration     = 'Instantaneous';
        $power->description  = '<p>You manifest ectoplasm from the Astral Plane to form an arrow like shard at propel it at the target. Make a ranged attack. If you hit, the target takes 1D6 Piercing damage.</p>';
        $power->heightened   = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Ectoplasm'], 1);

        $power                 = new Power;
        $power->name           = 'Ectoplasmic Sheen';
        $power->action_type    = 'Double Action';
        $power->display        = 'Visual, Olfactory';
        $power->requirements   = 'You must have the Ectoplasmic Creation power';
        $power->range          = '30 feet';
        $power->targets        = 'One object or 10-ft square';
        $power->save_attribute = 'DEX';
        $power->duration       = '5 rounds';
        $power->description    = "<p>You draw forth ectoplasm in an area, causing the surface to become slick. Any creature in the area must make a DEX Save or fall Prone.</p>
<p>A creature can walk through the area at half speed with a successful Acrobatics check. Failure means that they can't move and a Critical Failure means they fall Prone.</p>
<p>The power can also be used to create a greasy coating on an item. Attended items allow the holder to make a DEX Save to avoid the affect. Affected items require a DEX Save each round to maintain a hold of it.</p>
<p>A creature targeted with this power gains a +10 bonus Escape checks when attempt to Escape from Grapple or Entangled.</p>";
        $power->saves = '<dl>
    <dt>Success</dt> <dd>No affect, but must attempt to Save each round they remain in the area</dd>
    <dt>Failure</dt> <dd>Fall Prone</dd>
</dl>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Ectoplasm'], 1);

        $power               = new Power;
        $power->name         = 'Ectoplasmic Weapon';
        $power->action_type  = 'Action';
        $power->display      = 'Auditory, Material';
        $power->requirements = 'You must have the Ectoplasmic Creation power';
        $power->targets      = 'Self';
        $power->duration     = '1 hour';
        $power->description  = '<p>You draw ectoplasm from the Astral Plane and form a melee weapon in your hand. You may form any melee weapon that you have seen before (sized for a Medium creature or smaller).</p>';
        $power->heightened   = '<dl>
    <dt>Heightened (+1)</dt> <dd>You form 2 melee weapons, one in each hand.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Metacreativity', 'Ectoplasm'], 2);

        $power              = new Power;
        $power->name        = 'Electrokinesis';
        $power->action_type = 'Double Action';
        $power->targets     = 'One target in range';
        $power->range       = '30 feet';
        $power->duration    = 'Instantaneous';
        $power->description = '<p>You can generate electricity to produce the following effects.</p>
<ul>
    <li>You can deal 1D6 +3 Electricity damage with a Touch Attack.</li>
    <li>You can shoot a bolt of Electricity at a target as a Ranged Touch attack that deals 1D6 Electricity damage.</li>
</ul>';
        $power->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The target must make a CON Save or be Stunned: 1</dd>
    <dt>Heightened (+1)</dt> <dd>You deal an additional 1D6 damage</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Electricity'], 1);

        $power              = new Power;
        $power->name        = 'Electricity Absorption';
        $power->action_type = 'Reaction';
        $power->duration    = '1 round';
        $power->range       = '0 feet';
        $power->description = '<p>You gain the ability to absorb the energy from electricity, and possibly healing your wounds from the absorbed energy.</p>
<p>When you manifest this power, choose one.</p>
<ul>
    <li>Gain Damage Reduction 10 to Electricity. You gain 1 Hit Point for every 5 points of Electricity damage you absorb.</li>
    <li>You gain Damage Resistance to Electricity (half damage)</li>
</ul>';
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the Damage Reduction by +5</dd>
    <dt>Heightened (+2)</dt> <dd>The Duration becomes 5 rounds</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the Duration by 2 rounds</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychokinesis', 'Electricity'], 2);

        $power               = new Power;
        $power->name         = 'Empathy';
        $power->action_type  = 'Double Action';
        $power->display      = 'Mental';
        $power->targets      = 'Self';
        $power->requirements = 'You must have at least one Psionic Combat attack power';
        $power->area         = '30-foot radius emanation';
        $power->duration     = 'Concentration, up to 10 minutes';
        $power->description  = "<p>You detect the surface emotions of any creature you can see that is in the power's area. You can sense basic needs, drives, and emotions. Thirst, hunger, fear, fatigue, pain, rage, hatred, uncertainty, curiosity, friendliness, and many other kinds of sensations and moods can all be perceived.</p>
<p>You gain a +2 insight bonus on any Deception, Diplomacy, and Society checks.</p>";
        $power->heightened = "<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the range and radius by 10 feet</dd>
    <dt>Heightened (+2)</dt> <dd>The duration becomes 1 hour</dd>
    <dt>Heightened (+4)</dt> <dd>
        <p>You can read the surface thoughts of one creature within range. The effect can penetrate barriers, but 3 ft of wood or dirt, 2 ft of stone, 2 inches of metal, or a thin sheet of lead blocks it.</p>
        <p>While the target is in range, you can continue to read its surface thoughts, as long as you maintain Concentration. While reading the target's mind, you have Advantage on WIS (Insight) and CHR (Deception, Intimidation, and Persuasion) checks against the target.</p>
        <p>The range becomes 60 ft, the targets becomes one conscious creature within range</p>
    </dd>
</dl>";
        $helper->addTypesToPower($power, ['Telepathy'], 1);

        $power              = new Power;
        $power->name        = 'Empty Mind';
        $power->action_type = 'Reaction';
        $power->display     = 'Auditory';
        $power->targets     = 'Self';
        $power->duration    = '1 round';
        $power->description = '<p>You empty your mind of all transitory and distracting thoughts, improving your self-control. You gain a +2 bonus on WIS Saves until your next turn.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend your Psychic Focus)</dt> <dd>You can manifest as a Reaction, even if you do not have a Reaction (Attack of Opportunity)</dd>
    <dt>Heightened (+2)</dt> <dd>Increase your bonus by +1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Telepathy'], 1);

        $power              = new Power;
        $power->name        = 'Energy Adaptation';
        $power->action_type = 'Double Action';
        $power->display     = 'Visual';
        $power->targets     = 'Self';
        $power->duration    = '1 hour';
        $power->description = '<p>You body assimilates some of the energy attack and converts it to harmless light. You gain Damage Reduction 10 against any attack that deals Cold, Electricity, Fire, Force, or Sonic damage.</p>
<p>When you absorb damage, you can choose to radiate visible light that illuminates a 60-foot radius for a number of rounds equal to the points of damage you successfully resisted, or merely dissipate the energy without giving off a visual display.</p>
<p>This power gains the trait of the energy type it can absorb.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the Damage Reduction by 10 points, to a maximum of 30 total.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 4);

        $power               = new Power;
        $power->name         = 'Energy Conversion';
        $power->action_type  = 'Double Action';
        $power->display      = 'Mental';
        $power->range        = '30 feet';
        $power->requirements = 'You must have the Energy Adaptation power';
        $power->duration     = '1 hour';
        $power->description  = "<p>As Energy Adaptation, except that instead of radiating away energy as light, you store up the energy and can later discharge it as a ray. To discharge a ray requires a Double Action. You can choose to fire any number of rays during the power's duration. The ray you fire must be of one of the energy types you have stored (if you have stored more than one type, you can choose what kind of energy to use for each ray). If a ray successfully strikes its target (requiring a Ranged Spell Attack), the target takes damage equal to the amount of energy damage of that type you have stored, up to a maximum of three times your Manifester Level. As long as this power remains in effect, you can continue to absorb energy damage and fire additional rays using the stored damage</p>
<p>This power's subtype is the same as the type of energy you discharge in a ray, thus, its subtype can change during the course of the power's duration.</p>";
        $helper->addTypesToPower($power, ['Psychometabolism', 'Cold', 'Electricity', 'Fire', 'Sonic'], 7);

        $power               = new Power;
        $power->name         = 'Entangling Ectoplasm';
        $power->action_type  = 'Double Action';
        $power->display      = 'Material, Visual';
        $power->range        = '60 feet';
        $power->requirements = 'You must have the Ectoplasmic Creation power';
        $power->targets      = 'One medium or smaller person';
        $power->duration     = '5 rounds';
        $power->description  = "<p>You draw forth a glob of ectoplasmic goo from the Astral Plane and immediately throw it as a ranged touch attack at any creature in range. On a successful hit, the subject is covered in goo and gains the Entangled condition. The goo evaporates at the end of the power's duration.</p>
<p>The target may attempt a STR check or an Escape skill check to break free using your Power DC. The target may also use Teleport or similar powers to escape.</p>
<p>The goo extends into the Ethereal Plane. It is not affected by Dispel Psionics but can be dismissed with Dismiss Ectoplasm.</p>";
        $power->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the target size by one category larger</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by +2 rounds.</dd>
    <dt>Heightened (+4)</dt> <dd>
        <p>The goo hardens and becomes solid. The target is able to breathe, and gains the Immobilized condition instead of the Entangled condition. The goo has Hardness 8 and 20 Hit Points. If you spend more Power Points beyond the required to heighten to this level (for example, to affect a larger creature), the hardness increases by +1, the Hit Points increase by +4, and the STR check penalty increase by +5 for each 2 additional Power Points spent.</p>
        <p>The goo blocks all attacks to the target until the goo is destroyed. The target may not escape using an Escape skill check, but may attempt a STR check with a -10 penalty to their check.</p>
    </dd>
    <dt>Heightened (+8)</dt> <dd>
        <p>The power gains an Area of 20-foot radius with a Range of 30 feet and all within are affected. All affected creatures get a DEX Save, on success, the duration is 2 rounds. The area becomes difficult terrain.</p>
        <p>If the Entangle version was used, the area continues to be sticky and all who enter the area must make a DEX Save or be Entangled.</p>
        <p>If the Immobilized version was used, all who enter takes 1D6 Piercing damage as the ground is covered in sharp hardened crystals.</p>
    </dd>
</dl>';
        $helper->addTypesToPower($power, ['Metacreativity'], 1);

        $power               = new Power;
        $power->name         = 'Etherealness';
        $power->action_type  = 'Triple Action';
        $power->display      = 'Auditory, Mental';
        $power->requirements = 'You must have the Teleport power';
        $power->targets      = 'You and 5 other willing creatures';
        $power->duration     = 'Up to 8 hours';
        $power->description  = '<p>As the spell Etherealness, except as noted here.</p>';
        $helper->addTypesToPower($power, ['Psychoportation', 'Teleportation', 'Ethereal'], 7);

        $power               = new Power;
        $power->name         = 'Exhaust';
        $power->action_type  = 'Double Action';
        $power->display      = 'Visual';
        $power->requirements = 'You must have the Body Adjustment Power';
        $power->range        = 'Touch';
        $power->targets      = 'Living creature touched';
        $power->duration     = 'Instantaneous';
        $power->description  = '<p>Make a Melee Touch Attack. If you hit, the target becomes Fatigued. If the Target is already Fatigued, then it loses Fatigued and gains a level of Exhaustion instead. If the target already has levels of Exhaustion, then this Power has no effect unless it is Heightened.</p>';
        $power->heightened   = '<dl>
    <dt>Heightened (+1)</dt> <dd>The target gains a Level of Exhaustion instead.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 2);

        $power              = new Power;
        $power->name        = 'Expansion';
        $power->action_type = 'Action';
        $power->display     = 'Olfactory';
        $power->targets     = 'Self';
        $power->duration    = '1 minute';
        $power->description = '<p>The target grows to size Large. Its equipment grows with it but returns to natural size if removed. The creature is sluggish 1. Its reach increases by 5 feet (or by 10 feet if it started out Tiny) and it gains a +2 conditional bonus to melee damage. This spell has no effect on a Large or larger creature.</p>';
        $power->heightened  = '<dl>
    <dt>Heightened (Expend your Psionic Focus)</dt> <dd>Reduce the number of Actions to Activate this power by 1 Action and the Power Point cost by 1</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 1);

        $power              = new Power;
        $power->name        = 'Extend Limb';
        $power->action_type = 'Double Action';
        $power->display     = 'Visual';
        $power->targets     = 'Self';
        $power->duration    = 'Instantaneous (see text)';
        $power->description = '<p>You are able to extend your limbs by 5 feet, allowing you to make melee attacks against targets up to 5 feet away.</p>
<p>You may also use this power to extend your body to reach high ledges, or see over things. Using this power in this way allows you to reach up 10 feet, or extend your body 5 feet to see over obstacles.</p>';
        $power->heightened = '<dl>
    <dt>Heightened (+4)</dt> <dd>You may extend an additional 5 feet.</dd>
</dl>';
        $helper->addTypesToPower($power, ['Psychometabolism'], 2);
    }
}
