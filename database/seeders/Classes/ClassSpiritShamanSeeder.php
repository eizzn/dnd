<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassSpiritShamanSeeder extends Seeder
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

        $class                = new Klass;
        $class->name          = 'Spirit Shaman';
        $class->type          = 'Base';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor';
        $class->has_spells    = true;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 4,
        ], ['WIS', 'CHA'], [
            'Divine', 'Spirit', 'Primal',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Animal Handling', 'Concentration', 'Nature', 'Survival']);

        $helper->addSpellSlotsToClass($class, [
            1  => ['known' => 4, 'cantrips' => 2],
            2  => ['known' => 5, 'cantrips' => 3, 'one' => 1],
            3  => ['known' => 6, 'cantrips' => 4, 'one' => 2],
            4  => ['known' => 7, 'cantrips' => 4, 'one' => 3, 'two' => 1],
            5  => ['known' => 8, 'cantrips' => 5, 'one' => 3, 'two' => 2],
            6  => ['known' => 9, 'cantrips' => 5, 'one' => 3, 'two' => 2, 'three' => 1],
            7  => ['known' => 10, 'cantrips' => 5, 'one' => 3, 'two' => 3, 'three' => 2],
            8  => ['known' => 11, 'cantrips' => 5, 'one' => 3, 'two' => 3, 'three' => 2, 'four' => 1],
            9  => ['known' => 12, 'cantrips' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 2],
            10 => ['known' => 13, 'cantrips' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 2, 'five' => 1],
            11 => ['known' => 14, 'cantrips' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2],
            12 => ['known' => 15, 'cantrips' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
            13 => ['known' => 16, 'cantrips' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
            14 => ['known' => 17, 'cantrips' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
            15 => ['known' => 18, 'cantrips' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
            16 => ['known' => 19, 'cantrips' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1],
            17 => ['known' => 20, 'cantrips' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1],
            18 => ['known' => 21, 'cantrips' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1, 'nine' => 1],
            19 => ['known' => 22, 'cantrips' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 1, 'seven' => 1, 'eight' => 1, 'nine' => 1],
            20 => ['known' => 23, 'cantrips' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 2, 'eight' => 1, 'nine' => 1],
        ]);

        $feature              = new Feature;
        $feature->key         = 'spirit_guide';
        $feature->name        = 'Spirit Guide';
        $feature->description = '<p>You have a spirit guide, a personification of the spirit world. In some sense, you and the spirit guide are one being, both knowing and seeing and experiencing the same thing.</p>
<p>Unlike a familiar, a spirit guide is not a separate entity from you. You are the only one who can perceive or interact with the guide. It exists only inside your mind and soul.</p>
<p>You spirit guide confers greater awareness of your surroundings, and grants the Alertness feat.</p>
<table>
    <thead>
        <tr>
            <th>Spirit Guide</th>
            <th>Characteristics</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Badger</td>
            <td>Orderliness, tenacity</td>
        </tr>
        <tr>
            <td>Bear</td>
            <td>Strength, endurance</td>
        </tr>
        <tr>
            <td>Buffalo</td>
            <td>Abundance, good fortune</td>
        </tr>
        <tr>
            <td>Cougar</td>
            <td>Balance, leadership</td>
        </tr>
        <tr>
            <td>Coyote</td>
            <td>Humor, trickiness</td>
        </tr>
        <tr>
            <td>Crane</td>
            <td>Balance, majesty</td>
        </tr>
        <tr>
            <td>Crow</td>
            <td>Intelligence, resourcefulness</td>
        </tr>
        <tr>
            <td>Eagle</td>
            <td>Perception, illumination</td>
        </tr>
        <tr>
            <td>Elk</td>
            <td>Pride, power, majesty</td>
        </tr>
        <tr>
            <td>Fox</td>
            <td>Cleverness, discretion</td>
        </tr>
        <tr>
            <td>Hawk</td>
            <td>Awareness, truth</td>
        </tr>
        <tr>
            <td>Lizard</td>
            <td>Elusiveness</td>
        </tr>
        <tr>
            <td>Otter</td>
            <td>Joy, laughter</td>
        </tr>
        <tr>
            <td>Owl</td>
            <td>Wisdom, night</td>
        </tr>
        <tr>
            <td>Rabbit</td>
            <td>Conquering fear, safety</td>
        </tr>
        <tr>
            <td>Raccoon</td>
            <td>Curiosity</td>
        </tr>
        <tr>
            <td>Scorpion</td>
            <td>Defense, self-protection</td>
        </tr>
        <tr>
            <td>Snake</td>
            <td>Power, life force, potency</td>
        </tr>
        <tr>
            <td>Spider</td>
            <td>Interconnectedness, industry</td>
        </tr>
        <tr>
            <td>Turtle</td>
            <td>Love, protection</td>
        </tr>
        <tr>
            <td>Vulture</td>
            <td>Vigilance, death</td>
        </tr>
        <tr>
            <td>Wolf</td>
            <td>Loyalty, interdependence</td>
        </tr>
    </tbody>
</table>
<p>The exact form of the spirit guide is chosen by you, usually for the qualities it represents. The exact form of the spirit guide is purely personal preference, and confers no special advantages or disadvantages.</p>
<p>Your spirit guide qualifies as a familiar for the purposes of class feature</p>
<p>During a Long Rest, your spirit guide may be sent out to retrieve a new spell from the spirits. This spell that your spirit guide brings must be a spell on your Spirit Shaman spell list, and you must be sufficient level to cast it. When your spirit guide returns with the spell, you must choose one of your other spells known to replace it with. You may replace up to 2 spells in this way during a Long Rest.</p>';
        $helper->saveFeature($feature, ['Primal', 'Spirit']);

        $feature              = new Feature;
        $feature->key         = 'chastise_spirit';
        $feature->name        = 'Chastise Spirit';
        $feature->description = '<p>You may spend 1 Spell Point and deal 1D6 per Spirit Shaman Level Force Damage to any Spirit within 60 feet of you. (Spirits include all Outsiders, Fey, Intelligent and Incorporeal Undead).</p>';
        $helper->saveFeature($feature, ['Primal', 'Spirit']);

        $feature              = new Feature;
        $feature->key         = 'detect_spirit';
        $feature->name        = 'Detect Spirit';
        $feature->description = 'You may cast Detect Ghost as an Action. When you do, triple the duration and range.';
        $helper->saveFeature($feature, ['Primal', 'Spirit']);

        $feature              = new Feature;
        $feature->key         = 'recall_spirit';
        $feature->name        = 'Recall Spirit';
        $feature->description = '<p>You gain the ability to call back the spirit of a dead creature before the spirit of the deceased has completely left the body. Once per week, you can reconnect a spirit to its body, restoring life to a recently deceased creature.</p>
<p>This ability functions like the spell Revivify and requires an Action to use.</p>';
        $helper->saveFeature($feature, ['Primal', 'Spirit']);

        $feature              = new Feature;
        $feature->key         = 'exorcism';
        $feature->name        = 'Exorcism';
        $feature->description = '<p>You may cast the spell Exorcism, Heightened to the highest level you may cast at will.</p>';
        $helper->saveFeature($feature, ['Primal', 'Spirit']);

        $feature              = new Feature;
        $feature->key         = 'spirit_journey';
        $feature->name        = 'Spirit Journey';
        $feature->description = '<p>You know how to vanish bodily into the spirit world. This ability functions like the spell Shadow Walk, except that you can only transport yourself. You need not use the ability in a shadowy area, and you travel the plane of Spirits, not the Plane of Shadows. You may use this ability once per day.</p>';
        $helper->saveFeature($feature, ['Primal', 'Spirit']);

        $feat              = new Feat;
        $feat->name        = 'Spirit Form';
        $feat->action_type = 'Triple Action';
        $feat->description = '<p>You learn how to temporarily transform yourself into a spirit. You can make yourself incorporeal for up to 1 minute by using a Triple Action and spending 1 Spell Point.</p>
<p>While incorporeal, you gain all the advantages of the incorporeal subtype, including immunity to all nonmagical attack forms, a 50% chance to ignore damage from any corporeal source, and the ability to enter or pass through solid objects. You lose any armor or natrual armor bonus to AC, but gain a deflection bonus equal to your CHA modifier (minimum +1).</p>
<p>You have no STR score against corporeal creatures or objects and cannot make physical attacks against them, but you gain the ability to make a melee touch attack (add your DEX modifier to your attack roll) that deals 1D6 points of damage to a corporeal target. This effect is treated as a magic weapon for the purpose of overcoming damage reduction.</p>
<p>You may take this feat up to 3 times. Each time you gain this feat, you may use this ability an additional time per day. You may gain this feat at every 5 level intervals.</p>';
        $helper->addTypesToFeat($feat, ['Primal', 'Spirit']);

        $feat              = new Feat;
        $feat->name        = 'Blessing of the Spirit';
        $feat->description = '<p>You can perform a special rite to gain a special blessing. You go into a meditative state in which you travel the spirit world. Performing this rite takes 10 minutes. You can only ward yourself with this ability and cannot perform the rite for anyone else.<br/>
The blessing performs just like Protection from Evil, except it protects against Spirits and lasts until it is dismissed or dispelled. If this ability is dispelled, you can recreate it simply by performing the rite again.</p>';
        $helper->addTypesToFeat($feat, ['Spirit']);

        $feat              = new Feat;
        $feat->name        = 'Spirit Guides Will';
        $feat->description = '<p>If you fail a Compulsion or Mental effect Save, you can attempt to Save again 1 round later at the same DC. This ability only grants you one extra attempt to make a Save.</p>';
        $helper->addTypesToFeat($feat, ['Spirit']);

        $feat              = new Feat;
        $feat->name        = 'Ghost Warrior';
        $feat->description = '<p>You confer the Ghost Touch ability on any weapon you hold for as long as you hold it. You are also resistant to the touch attacks of incorporeal creatures and gain a +10 bonus to any touch attacks delivered by incorporeal creatures.</p>';
        $helper->addTypesToFeat($feat, ['Spirit', 'Incorporeal']);

        $feat              = new Feat;
        $feat->name        = 'Weaken Spirits';
        $feat->requirement = 'You must have the Chastise Spirit class feature';
        $feat->description = '<p>When you use your Chastise Spirit ability, it now also weakens them. The spirit loses any and all Physical Damage Reduction and Damage Resistance (magic, silver, cold iron, etc.). In addition, incorporeal spirits loses its immunity to nonmagical attacks, its 50% chance to ignore damage from corporeal sources, and its ability to move into or through objects.</p>
<p>To weaken a spirit, you use your Chastise Spirit ability and choose to deal less damage to weaken the spirit. For each 1D6 of Chastise Spirit damage you forego, the affected spirit is weakened for 1 round.</p>
<dl>
    <dt>Success</dt> <dd>The spirit is not weakened</dd>
    <dt>Failure</dt> <dd>The spirit is weakened</dd>
    <dt>Critical Failure</dt> <dd>The spirit is weakened for double the duration</dd>
</dl>';
        $helper->addTypesToFeat($feat, ['Spirit']);

        $feat              = new Feat;
        $feat->name        = 'Spirit Sense';
        $feat->description = '<p>You can see and speak with spirits. You can see up to 60 ft into the Ethereal Plane while in the Material Plane, and vice versa. You can also gain some benefits after communing with nature for 1 minute</p>
<ul>
    <li>When you forage alone, you find twice as much as you normally would</li>
    <li>You can move Stealthily at a normal pace</li>
    <li>You are aware of recent events in the region, like storms, landslides, etc.</li>
</ul>
<p>If you spend 10 minutes consecutively using this ability, then your range becomes 120 ft, and you also detect any Curses and Hauntings in the area.</p>';
        $helper->addTypesToFeat($feat, ['Spirit']);

        $feat              = new Feat;
        $feat->name        = 'Spiritual Possession';
        $feat->action_type = 'Double Action';
        $feat->description = "<p>You can spend 2 Spell Points and a Double Action to enter a trance that allows a beastly spirit to possess your body, giving you the abilities of the spirit.</p>
<p>You must have the spirit on hand. If you have a Spirit Guide, you may use it as the possessing spirit.</p>
<p>Your class level determines the spirit that can possess you. You can be possessed by the spirit of a beast with a CR of no more than half your class level (rounded down). When you channel you do not gain Lair Actions or Legendary resistances.</p>
<p>You can maintain the possession by a number of hours equal to half your class level (rounded down). You may end the possession with a Free Action on your turn. You automatically end the possession if you fall to 0 Hit Points, or die.</p>
<p>While you are possessed, the following rules apply.</p>
<ul>
    <li>Some of your game statistics are replaced by the statistics of the beast whose spirit is possessing you. Those being its STR, DEX, and CON scores, its attacks, its senses and any other personal features. You don\'t gain its Hit Points, AC, or any special types of movement (like flight).</li>
    <li>When you use your Action to make an attack from your possessing spirit it appears as a spectral apparition of the attack, and while you deal the damage type and dice of the attack, you still use your weapon on the attack, so, if you use a ranged weapon, like a bow, you can still make any attack from your spirit, like a bite attack. Also, any extra damage, or bonus to attack rolls you gain from magical weapons still affect your spirit attacks.</li>
    <li>Your spirit's senses overlap yours, so you lose any senses you possess that your spirit doesn't possess with exception to your ethereal sight.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Spirit']);
        $feat->parent_feats()->save(app()->feats['Spirit Sense']);

        $feat              = new Feat;
        $feat->name        = 'Elemental Spirit Magic';
        $feat->action_type = 'Action';
        $feat->description = '<p>You can channel your Spirit Guide and manifest it into the physical world to aid you in combat. It takes an Action and 2 Spell Points to summon all of your Spirits and you may use this ability.</p>
<p>The Spirits appears in a point of your choosing within melee range. They do not make normal attacks and are treated as spirits (50% chance to ignore damage from corporeal sources). They have the following states</p>
<dl>
    <dt>AC</dt> <dd>12</dd>
    <dt>Hit Points</dt> <dd>5 + your class level</dd>
    <dt>Size</dt> <dd>Tiny</dd>
</dl>
<p>Choose one of the following Spirit forms when you summon your spirits.</p>
<ul>
    <li><strong>Air</strong> You gain a +1 bonus to your AC and a +2 bonus to all DEX Saves for each Elemental Spirit Magic feat your have (so +1 AC  and +2 bonus to DEX Saves when you first take this feat) while you are within 60 feet of your Spirit.</li>
    <li><strong>Earth</strong> Earth and rocks cling to your skin, granting you Damage Reduction: 3 while you are within 60 feet of your Earth Spirit. If you have the Improved Elemental Spirit Magic feat, the Damage Reduction increases to 5. If you have the Greater Elemental Spirit Magic feat, the Damage Reduction increases to 13. If you have the Master Elemental Spirit Magic feat, the Damage Reduction increases to 15.</li>
    <li><strong>Fire</strong> Flames burn around your weapons. While within 60 feet of your Fire Spirit, you add 1D4 Fire damage to your weapon attacks. This damage increases by one higher die type for each additional Elemental Spirit Magic feat.</li>
    <li><strong>Water</strong> You gain Damage Reduction equal to the number of Elemental Spirit Magic feats you have (so Damage Reduction: 1 when you first take this feat), and also the ability to heal 1D4 damage by touch, which requires an Action while you are within 60 feet of your Spirit. You may use the heal ability up to two times per turn. Increase the dice by one higher for each additional Elemental Spirit Magic feat you have.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Spirit']);

        $feat              = new Feat;
        $feat->name        = 'Improved Elemental Spirit Magic';
        $feat->description = '<p>You gain Damage Reduction: 7 vs Cold, Electricity, Fire, and Sonic damage.</p>
<p>You gain a second Elemental Spirit when you manifest your Spirit Guide. Choose one of the following.</p>
<ul>
    <li><strong>Air</strong> Your Spirit obscures your enemies vision. Choose a single target within 60 feet of your Spirit when you summon it. The target must make a CON Save against your spell DC. On a failure, they become Blinded while the Spirit is manifested. The target can make a Save at the end of each of its turns to end the effect. On a success, they have Disadvantage on Perception checks that rely on sight.</li>
    <li><strong>Earth</strong> Your Spirit causes the ground to hinder and hamper one of your enemies. The closest enemy to your Spirit must make a STR Save at the start of your turns. On a failure, they suffer a -1 penalty to their AC and a -10 penalty to their land and burrow Speeds. On a success, they only suffer the penalty to AC.</li>
    <li><strong>Fire</strong> Your Spirit blasts your enemies with Fire. The closest enemy to your Spirit must make a DEX Save at the start of your turns. On a failure, they take 2D6 Fire damage or half damage on a success.</li>
    <li><strong>Water</strong> Your Spirit cures your wounds. You receive the benefits of a Heal Spell.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Spirit']);
        $feat->parent_feats()->save(app()->feats['Elemental Spirit Magic']);

        $feat              = new Feat;
        $feat->name        = 'Greater Elemental Spirit Magic';
        $feat->description = "<p>You may spend 4 Spell Points and a Double Action to summon an Elemental that has a CR of 5 or lower within 30 feet of you. You may use an Action to direct its Actions, otherwise it will do its best to protect you. The elemental will remain by your side for 1 hour.</p>
<p>You gain a third Elemental Spirit when you manifest your Spirit Guide. Choose one of the following.</p>
<ul>
    <li><strong>Air</strong> Your movements are swift. You do not provoke Attacks of Opportunity, and you can use your Reactions to make an attack any time another creature makes an attack against a target other than you. You must be within 60 feet of your Spirit.</li>
    <li><strong>Earth</strong> The stoic stubbornness of stone and earth fills your mind and body, strengthening your will. You can choose to have resistance to Bludgeoning, Piercing, or Slashing damage. As long as you are within 60 feet of this Spirit.</li>
    <li><strong>Fire</strong> A Fire burns in your heart, and the flames give you mental strength. You can't be Charmed or Frightened while this Spirit is active and within 60 feet of you.</li>
    <li><strong>Water</strong> Your movements are fluid. You can't be grappled or restrained. And you have Advantage against effects that paralyze or petrify creatures. As long as you are within 60 feet of this Spirit.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Spirit']);
        $feat->parent_feats()->save(app()->feats['Improved Elemental Spirit Magic']);

        $feat              = new Feat;
        $feat->name        = 'Master Elemental Spirit Magic';
        $feat->description = "<p>Any spell you cast that deals Cold, Electricity, Fire, or Sonic damage deals an additiona dice of damage.</p>
<p>You gain a forth Elemental Spirit when you manifest your Spirit Guide. Choose one of the following.</p>
<ul>
    <li><strong>Air</strong> The air turns into Poison around your targets. Choose a target within 60 feet. The target must make a CON Save against your spell DC. On a failed Save, the target takes 2D6 Poison damage. On a successful Save the target takes no damage. The target makes the CON Save at the start of each of its turns unless this totem is destroyed.</li>
    <li><strong>Earth</strong> Rock forms around your targets, imprisoning them. Choose a target within 60 feet. The target must make a DEX Save. On a failed Save the target takes 1D8 Bludgeoning damage and is restrained. The target may attempt to break free, requiring a STR check against your spell DC. The target may attempt to slip out with a DEX check against your spell DC. On a successful Save, there is no effect. It requires a bonus Action to re-cast this Spirit.</li>
    <li><strong>Fire</strong> Flames sear the body of your enemies. Choose a target within 60 feet. The target must make a DEX Save. On a failed Save, the target is set on fire. At the beginning of each of its turns, whilst it remains on fire, the target takes 2D8 Fire damage. To put the flames out requires either an Action of rolling on the floor for a whole round or other logical situation (GMs discretion). On a successful Save, there is no effect. It requires a Bonus Action to re-cast this Spirit.</li>
    <li><strong>Water</strong> You trap your enemies in water to drown them. Choose a target within 60 feet. The target must make a DEX Save against your spell DC. On a failed Save a bubble of water surrounds the target's head. They are considered drowning; the target remains fine for a number of rounds equal to their CON modifier (minimum of 1 round) as they hold their breath. After this point, if they have not removed the ball of water, the target takes 4D8 damage at the beginning of their turn and are considered Stunned. They may attempt to remove the ball of water on their turn. To remove the ball of water requires a whole turn spent attempting to remove it, making a DEX Save (DC 10 + the number of rounds they have had the water on their head). On a successful Save, there is no effect. It requires a Bonus Action to re-cast this Spirit.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Spirit']);
        $feat->parent_feats()->save(app()->feats['Greater Elemental Spirit Magic']);

        $feat              = new Feat;
        $feat->name        = 'Spirit Fetish';
        $feat->action_type = 'Action';
        $feat->description = "<p>You can create a fetish where you can trap spirits. These spirits can be used to possess you using your Spiritual Possession feat. The fetish can house up to 3 spirits. You may only have 1 Spirit Fetish at a time.</p>
<p>You can use your Spiritual Possession ability as an Action.</p>
<p>Also, once per long rest, you can swap your current spirit and be possessed by a different one by spending 1 Spell Point and an Action. This change doesn't affect the duration of the possession (so, if there were only 3 minutes left, your new spirit stays in your for only 3 minutes). A sudden changes like that is very taxing, you gain 1 level of Exhaustion after your possession ends if you used this feature during it.</p>
<p>The fetish itself costs 100 gp and 1 day to create.</p>";
        $helper->addTypesToFeat($feat, ['Spirit']);
        $feat->parent_feats()->save(app()->feats['Spiritual Possession']);

        $feat              = new Feat;
        $feat->name        = 'Vengeful Spirit';
        $feat->action_type = 'Action';
        $feat->description = '<p>You may spend 4 Spell Points and summon all the spirits in your Spirit Fetish (the spirits take on physical form). They appear within 20 feet of you and are treated as if they were summoned using Summon Animals. You can direct their Actions by using an Action. You may direct all of them to take the same Action.</p>
<p>If any of your Spirits are killed, they evaporate into nothing and their spirit returns to your Spirit Fetish. If the spirit is banished, or spiritually trapped, the spirit is lost and will not automatically return to your Spirit Fetish.</p>';
        $helper->addTypesToFeat($feat, ['Spirit']);
        $feat->parent_feats()->save(app()->feats['Spirit Fetish']);

        $helper->addFeatsToClass($class, [
            'Blessing of the Spirit'          => 1,
            'Spirit Sense'                    => 1,
            'Spell Pool'                      => 1,
            'Spiritual Possession'            => 2,
            'Spirit Fetish'                   => 3,
            'Elemental Spirit Magic'          => 3,
            'Spirit Guides Will'              => 5,
            'Ghost Warrior'                   => 6,
            'Vengeful Spirit'                 => 6,
            'Improved Elemental Spirit Magic' => 6,
            'Enhance Familiar'                => 7,
            'Greater Elemental Spirit Magic'  => 10,
            'Master Elemental Spirit Magic'   => 14,

            "Auril's Touch"   => 5,
            "Auril's Kiss"    => 7,
            "Auril's Hold"    => 11,
            "Auril's Embrace" => 13,

            "Chauntea's Smile"   => 5,
            "Chauntea's Harvest" => 7,
            "Chauntea's Plenty"  => 11,
            "Chauntea's Bounty"  => 13,

            'Weaken Spirits' => 16,

            'Animal Companion'        => 3,
            'Animal Companion Master' => 6,

            'Spirit Form' => 9,
        ]);

        $helper->addFeaturesToClass($class, [
            'class_group_feat'     => [3, 5, 7, 9, 12, 15, 18, 20],
            'spirit_guide'         => [1],
            'wild_empathy'         => [1],
            'spell_pool'           => [2],
            'chastise_spirit'      => [2],
            'recall_spirit'        => [11],
            'exorcism'             => [13],
            'spirit_journey'       => [17],
        ]);
        $class->features()->save($feature, [
            'level' => 3,
            'meta'  => 'You Detect Spirits through your Spirit Guide. If you lose access to your Spirit Guide, you lose this ability.',
        ]);

        $helper->addSpellsToClass($class, [
            0 => ['Detect Ghost', 'Dancing Lights', 'Detect Magic', 'Disrupt Ectoplasm', 'Know Direction', 'Light', 'Magic Fang',
                'Naturewatch', 'Tanglefoot', ],
            1 => ['Animal Friendship', 'Beast Bond', 'Calm Animals', 'Create Water', 'Cure Wounds', 'Deathwatch', 'Detect Crossroads',
                'Detect Poison', 'Exorcism', 'Gaze Screen', 'Goodberry', 'Gust of Wind', 'Locate Water', 'Longstrider',
                'Mending', 'Negate Aroma', 'Pass Without Trace', 'Protection From Possession', 'Purify Food and Drink',
                'Remove Disease', 'Shillelagh', 'Summon Animals', 'Summon Elemental, Lesser', 'Weather Sense', ],
            2 => ['Animal Messenger', 'Animal Sense', 'Barkskin', "Bear's Endurance", "Bull's Strength", "Cat's Grace",
                'Consecrate', 'Create Food and Water', 'Darkvision', 'Delay Poison', 'Dust Devil', "Eagle's Splendor", 'Endure Elements',
                'Enlarge', 'Entangle', 'Faerie Fire', 'Forced Incorporeality', 'Forced Manifestation', "Fox's Cunning",
                'Healing Spirit', 'Know Motivation', 'Lay of the Land', 'Obscuring Mist', "Owl's Wisdom", 'Plant Renewal',
                'Possess Animal', 'Resist Poison', 'Restoration', 'Shrink', 'Speak with Animals', 'Spider Climb', 'Tree Shape',
                'Water Breathing', 'Water Walk', 'Warding Wind', ],
            3 => ['Call Lightning', 'Commune With Spirit', 'Dispel Magic', 'Dominate Animal', 'Earthbind', 'Eradicate Air',
                'Eradicate Earth', 'Eradicate Fire', 'Eradicate Water', 'Heal Animal Companion', 'Meld into Stone', 'Neutralize Poison',
                "Nature's Exile", 'Neutralize Poison', 'Nondetection', 'Tidal Wave', 'Wall of Thorns', 'Wall of Wind', ],
            4 => ['Air Walk', 'Control Winds', 'Exhaustion', 'Fly', 'Hallucinatory Terrain', 'Make Manifest',
                'Raise as Ghost', 'Solid Fog', 'Speak with Plants', 'Summon Woodland Beings', ],
            5 => ['Animate with Spirit', 'Atonement', 'Awaken', 'Cloudkill', 'Commune with Nature', 'Control Water', 'Dream',
                'Elemental Form', 'Passwall', 'Repel Ectoplasm', 'Summon Elemental', 'Summon Fey', 'Tree Stride', 'Wall of Stone',
                'Wrath of Nature', ],
            6  => ['Commune with Earth', 'Flesh to Stone', 'Oasis', 'Raise Dead', 'Stone to Flesh', 'Spirit Blast', 'Spirit Walk'],
            7  => ['Create Crossroads and Backroads', 'Possession', 'Regenerate', 'Volcanic Eruption'],
            8  => ['Control Weather', 'Earthquake', 'Punishing Wind', 'Tsunami', 'Wind Walk'],
            9  => ['Astral Projection', "Nature's Enmity", 'Storm of Vengeance'],
            10 => ['Nature Incarnate', 'Primal Phenomenon'],
        ]);

        /**********************************************************************/

        $class                = new Klass;
        $class->name          = 'Shaman';
        $class->type          = 'Base';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor';
        $class->has_spells    = true;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 4,
        ], ['WIS', 'CHA'], [
            'Divine', 'Spirit', 'Primal',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Animal Handling', 'Athletics', 'Concentration', 'Diplomacy', 'Nature', 'Survival'
        ]);

        $feature              = new Feature;
        $feature->key         = 'soul_blast';
        $feature->name        = 'Soul Blast';
        $feature->description = '<p>As an Action, you emit a Ray that disturbs the soul or spirit of a living creature or creature that exists on the Ethereal Plane. Make a Ranged Touch Attack, if you hit, you deal 3D6 Positive Damage and 1 STR Damage.</p>
<p>You may use this ability 1/day for each time you gain this ability.</p>';
        $helper->saveFeature($feature, ['Primal', 'Spirit', 'Ray']);

        $feature              = new Feature;
        $feature->key         = 'summon_ghost';
        $feature->name        = 'Summon Ghost';
        $feature->description = '<p>As a Triple Action, you summon a Ghost that fights for you. The ghost will not speak (unless a spell allows you to communicate with the ghost). After 1 minute, the ghost returns to the Ethereal.</p>
<p>You may use this ability 1/day for each time you gain this ability.</p>';
        $helper->saveFeature($feature, ['Primal', 'Spirit']);

        $feature              = new Feature;
        $feature->key         = 'transmute_into_ghost';
        $feature->name        = 'Transmute into Ghost';
        $feature->description = '<p>As a 1-minute Ritual, you may transform a willing humanoid into a ghost for 1 hour. For the Duration, the Target gains the Returned as Ghost Feat. Only the Target is turned into a Ghost, none of their equipment and enchantments carry over to the incorporeal ghost (though they do persist on the physical body when this effect ends).</p>
<p>You may use this ability 1/week for each time you gain this ability.</p>';
        $helper->saveFeature($feature, ['Primal', 'Spirit']);

        $feature              = new Feature;
        $feature->key         = 'transmute_into_greater_ghost';
        $feature->name        = 'Transmute into Greater Ghost';
        $feature->description = '<p>Your Transmute into Ghost Feature now turns the willing Target into a Greater Ghost.</p>';
        $helper->saveFeature($feature, ['Primal', 'Spirit']);

        $helper->addFeaturesToClass($class, [
            'spirit_guide'                 => [1],
            'wild_empathy'                 => [1],
            'cantrip_caster'               => [2],
            'soul_blast'                   => [3, 4, 5, 7, 12, 15],
            'summon_ghost'                 => [5, 7, 15],
            'transmute_into_ghost'         => [9, 17],
            'transmute_into_greater_ghost' => [12],
            'recall_spirit'                => [10],
        ]);
        $helper->addSpellSlotsToClass($class, [
            1  => ['known' => 4, 'cantrips' => 3],
            2  => ['known' => 5, 'cantrips' => 4, 'one' => 2],
            3  => ['known' => 6, 'cantrips' => 4, 'one' => 3],
            4  => ['known' => 7, 'cantrips' => 4, 'one' => 3, 'two' => 1],
            5  => ['known' => 8, 'cantrips' => 4, 'one' => 4, 'two' => 2],
            6  => ['known' => 9, 'cantrips' => 4, 'one' => 4, 'two' => 3],
            7  => ['known' => 10, 'cantrips' => 4, 'one' => 4, 'two' => 3, 'three' => 1],
            8  => ['known' => 11, 'cantrips' => 4, 'one' => 4, 'two' => 4, 'three' => 2],
            9  => ['known' => 12, 'cantrips' => 4, 'one' => 4, 'two' => 4, 'three' => 3],
            10 => ['known' => 13, 'cantrips' => 4, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 1],
            11 => ['known' => 14, 'cantrips' => 4, 'one' => 4, 'two' => 4, 'three' => 4, 'four' => 2],
            12 => ['known' => 15, 'cantrips' => 4, 'one' => 4, 'two' => 4, 'three' => 4, 'four' => 3],
            13 => ['known' => 16, 'cantrips' => 4, 'one' => 4, 'two' => 4, 'three' => 4, 'four' => 3, 'five' => 1],
            14 => ['known' => 17, 'cantrips' => 4, 'one' => 4, 'two' => 4, 'three' => 4, 'four' => 3, 'five' => 2],
            15 => ['known' => 18, 'cantrips' => 4, 'one' => 4, 'two' => 4, 'three' => 4, 'four' => 3, 'five' => 2],
            16 => ['known' => 19, 'cantrips' => 4, 'one' => 4, 'two' => 4, 'three' => 4, 'four' => 3, 'five' => 2, 'six' => 1],
            17 => ['known' => 20, 'cantrips' => 4, 'one' => 4, 'two' => 4, 'three' => 4, 'four' => 3, 'five' => 2, 'six' => 1],
            18 => ['known' => 21, 'cantrips' => 4, 'one' => 4, 'two' => 4, 'three' => 4, 'four' => 3, 'five' => 2, 'six' => 1],
            19 => ['known' => 22, 'cantrips' => 4, 'one' => 4, 'two' => 4, 'three' => 4, 'four' => 3, 'five' => 3, 'six' => 1],
            20 => ['known' => 23, 'cantrips' => 4, 'one' => 4, 'two' => 4, 'three' => 4, 'four' => 3, 'five' => 3, 'six' => 2],
        ]);

        // TODO: complete spells list
        $helper->addSpellsToClass($class, [
            0 => ['Blade Ward', 'Boon', 'Conviction', 'Dancing Lights', 'Daze', 'Detect Ghost', 'Disrupt Ectoplasm', 'Ghost Sound',
                'Focusing Chant', 'Ghost Sound', 'Hex', 'Know Direction', 'Light', 'Produce Flame', 'Resist Negative Energy', ],
            1 => ['Bless', 'Calm Animals', 'Command', 'Cure Wounds', 'Detect Evil', 'Doom', 'Exorcism', 'Fear', 'Protection From Possession',
                'Remove Disease', 'Sanctuary', 'Summon Elemental, Lesser', ],
            2 => ['Augury', "Bear's Endurance", 'Bestow Curse', "Bull's Strength", 'Consecrate', 'Ethereal Sight', 'Forced Incorporeality',
                'Forced Manifestation', 'Gentle Repose', 'Ghost Touch', 'Healing Spirit', 'Hold Undead', 'Obscuring Mist',
                "Owl's Wisdom", 'Possess Animal', 'Rain', 'Remove Disease', 'Remove Fear', 'Restoration', 'Restore Senses',
                'Reveal True Shape', 'Restoration', 'Sticks to Snakes', ],
            3 => ['Abolish Shadows', 'Banishment', 'Ceremony', 'Circle of Protection From Evil', 'Commune With Spirit',
                'Dimensional Anchor', 'Dominate Animal', 'Ethereal Mount', 'Ethereal Sight', 'Neutralize Poison', 'Prophecy',
                'Raise as Ghost', 'Revivify', 'Skywrite', 'Speak with Dead', 'Spirit Guardians', ],
            4 => ['Animate with Spirit', 'Annihilate Spirit', 'Atonement', 'Banishment', 'Calm Air', 'Commune with Nature',
                'Control Winds', 'Ethereal Cyclone', 'Ethereal Prison', 'Remove Curse', 'Spirit Blast', 'Spirit Walk', ],
            5 => ['Dimensional Lock', 'Etherealness', 'Hallow'],
            6 => ['Baleful Polymorph', 'Control Weather', 'Etherealness'],
        ]);

        $features = app()->features;
        unset($features['spirit_guide']);
        unset($features['detect_spirit']);
        unset($features['spirit_form']);
        app()->features = $features;
    }
}
