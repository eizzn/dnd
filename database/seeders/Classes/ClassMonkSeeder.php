<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassMonkSeeder extends Seeder
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
        $class->name          = 'Monk';
        $class->type          = 'Base';
        $class->key_attribute = 'STR or DEX';
        $class->weapons       = 'Simple Weapons, Shortsword';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 4,
            'has_powers'     => 1,
        ], ['DEX', 'CON', 'WIS'], [
            'Psionic', 'Skill', 'Combat Mastery', 'Heroic Surge',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Athletics', 'Concentration', 'Diplomacy', 'Language', 'Lore', 'Medicine', 'Religion', 'Stealth',
        ]);

        $helper->addFeaturesToClass($class, [
            'combat_mastery'   => [7, 18],
            'class_group_feat' => [1, 3, 4, 7, 10, 13, 16, 19],
            'skill_feat'       => [3, 9, 15, 20],
            'flurry_of_blows'  => [2],
            'discipline_feat'  => [2],
            'heroic_surge'     => [7, 15],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'meta' => 'Improved Unarmed Strike']);
        $class->features()->save(app()->features['feat'], ['level' => 10, 'meta' => 'Disease Immunity or Poison Immunity']);

        $feat              = new Feat;
        $feat->name        = 'Order of the Sun Soul';
        $feat->requirement = 'You must have levels in Monk';
        $feat->description = '<p>The Order of the Sun Soul is a monastic order that, during the time of Netheril, worshiped the god Amaunator as the Brotherhood of the Sun. When Netheril fell, the order survived, though their god seemed not to have. Individual monasteries began worshipping other gods, including, Lathander, Selune, and Sune. Over time, they forgot Amaunator but the order always kept the same goal of serving the common folk of Faerun.</p>
<p>The order is widespread but their largest monastery is the Monastery of the Sun in Waterdeep. It is set up there because of its proximity to temples of Lathander, Selune, and Sune.</p>
<p>Joining the order was free, but required a fee of 3 gp per month.</p>
<ul>
    <li>You gain the Mantis Stance feat</li>
    <li>You gain the Wise Defense or Beautiful Defense feat</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Daze', 'Pyrokinesis', 'Photokinesis'],
            2 => ['Flame Absorption', 'Heal', 'Light Absorption', 'Ring of Fire'],
            3 => ['Air Walk', 'Body Purification'],
            4 => ['Dimension Door', 'Energy Adaptation'],
            5 => ['Quivering Palm'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Order of the Long Death';
        $feat->requirement = 'You must have levels in Monk';
        $feat->description = "<p>The Order of the Long Death, also known as the Way of the Long Death, is a monastic order devoted to understanding every aspect related to the process of dying and the nature of death itself.</p>
<p>They cared little for the afterlife, and seek no deeper understanding of a soul's place in the greater cosmology, but rather the effects of death on intelligent beings and the achievement of \"perfect death\". They see this as the ultimate offering they can bestow upon any being who is deemed truly ready.</p>
<p>Each monastery is independent of the others and is led by a single individual.</p>
<p>Monks of the Long Death focus their energies on studying death and the art of killing. They learn about the effect of the process of death on living tissue. The ultimate objective is to discover the 'perfect death' - an objective that no member of the group really understand, let alone achieve.</p>
<p>Within their monasteries, they spend the majority of their time is spent sparring with one another, resting in quiet contemplation, or studying the nature of death. For their studies, the monks dig up bodies, take them to their respective monasteries examine their states of decomposition within their well-stocked laboratories. Perhaps most horrific, the followers of the Long Death purchase or capture slaves, giving them slow deaths in order to observe and record the results.</p>
<p>Outside of the monasteries, they wander aimlessly, often disguised as beggars, attacking humanoids that they come across in an effort to inflict as painful a death as they can using only their bare hands.</p>
<p>Every year the leader of each monastery has to prove themselves against their best warrior through trials by combat on the Feast of the Moon.</p>
<p>There are at least three known monasteries of the Long Death. One in the easter realm of Thay, one in the Firesteap Mountains on the easter edge of the Lake of Steam, and the Abbot of the High Crypt within the Turnstone Hills in the Silver Marches.</p>
<p>The order was formed after the people of Calimshan freed themselves from the Djen. Its original purpose was to teach people how they could attack and kill their former masters. Over time however, the monks developed an obsession with death. For their perverse fixation they were eventually run out of Calimshan.</p>
<p>As they were similarly expelled from every other place they attempted to settle in, save for Thay, the monks of the order are a semi-secret society in Faerun. They establish hidden monasteries all over Realms where they can continue their studies in relative peace.</p>
<p>The Order of the Long Death attracts both morbid scholars and those devoted to the deities of death.</p>
<ul>
    <li>
        <table>
            <thead>
                <tr>
                    <th>Attack</th>
                    <th>Damage</th>
                    <th>Group</th>
                    <th>Traits</th>
                    <th>Effects</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cold Hand of Death</td>
                    <td>1D4 B</td>
                    <td>Brawling</td>
                    <td>Agile, Backstabber, Finesse, Nonlethal, Unarmed</td>
                    <td>
                        <ul>
                            <li>Spend 1 Power Point and add 1D6 Negative Energy damage. This part of the damage is a Touch attack, so it is possible to have the 1D4 B miss but the 1D6 Negative damage hit</li>
                            <li>Whenever you are the target of the Heal power, you heal an extra 1 Hit Point per die</li>
                            <li>Your Vitality Blast deals an additional +1 damage per Hit Die</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </li>
    <li>You gain either the Wise Defense or the Intelligent Defense feat</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Body Adjustment', 'Burst', 'Heal', 'Thicken Skin', 'Vigor', 'Vitality Blast'],
            2 => ['Animal Sight', 'Physical Augmentation'],
            3 => ['Aura Sight', 'Body Purification', 'Drain Vigor'],
            4 => ['Drain Life', 'Life Blast', 'Wither'],
            5 => ['Fuse Flesh', 'Quivering Palm', 'Regeneration', 'Suspend Life'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Broken Ones';
        $feat->requirement = 'You must have levels in Monk';
        $feat->description = "<p>The Broken Ones are a monastic order devoted to the god Ilmater. They number both monks and swordsages among their ranks. The order has no temple or monastery to call a base, nor a fixed hierarchy.</p>
<p>The Broken One monks are kind and enduring, and they act purely in the name of Ilmater. Swordsages of the order are ascetics who remain detached from the world and lack zeal.</p>
<p>Members of the order are responsible for the defense of Ilmater's temple and shrines, as well as his followers. They also seek to track down and punish those who inflict cruelty, especially followers of Loviatar. They perform good deeds and right bad ones.</p>
<p>A Broken One monk pursues the path of a healer and a hunter in service to the faith. As a healer, they learn the skills of treating injuries and dispensing medicine, and could even develop the ability to lay on hands and heal injuries with a touch. As a hunter, they also learn the skills of wilderness survival and tracking. They are dogged in their pursuit of tormentors, and can develop supernatural skills in following the tracks of Loviatans.</p>
<p>Some Broken Ones learn tactics in combat by which they can swiftly intervene and save an ally from an attack, at the cost of suffering the blow in their place. This effort can leave them wearied, if not slain by the blow.</p>
<p>People often mistake the monks of the Order of the Long Death, who regularly disguise themselves as beggars, for Broken Ones.</p>
<p>The Broken Ones have many sects.</p>
<ul>
    <li>Disciples of St. Morgan the Taciturn</li>
    <li>Disciples of St. Sollars the Twice-Martyred (genealogical studies) represented by a yellow rose, and revered from the Monastery of the Yellow Rose.</li>
    <li>Followers of the Unhindered Path</li>
    <li>Order of St. Dionysus (Bloodstone Lands)</li>
    <li>Order of St. Uzurr (order that governs the cty of Uzurr in Lapaliiya)</li>
    <li>Sisters of St. Jasper of the Rocks</li>
    <li>Weeping Friars</li>
</ul>
<ul>
    <li>You gain either the Crane Stance or Mantis Stance feat</li>
    <li>You gain the Wise Defense feat</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Awareness', 'Burst', 'Call to Mind', 'Empathy', 'Heal', 'Thicken Skin', 'Vigor'],
            2 => ['Animal Sight', 'Biofeedback', 'Mental Augmentation', 'Object Reading', 'Physical Augmentation', 'Ubiquitous Sight'],
            3 => ['Body Purification', 'Haste'],
            4 => ['Aura Sight', 'Divination', 'Intellect Fortress'],
            5 => ['Adapt Body', 'Plane Shift', 'Quivering Palm'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Shining Hand';
        $feat->requirement = 'You must have levels in Monk';
        $feat->description = "<p>The Shining Hand is a monastic order based in Amn, dedicated to the god Azuth.</p>
<p>The monks of the Shining Hand mix their monastic practices and their faith in Azuth with the study of magic.</p>
<p>The Shining Hand is one of the longest-running monastic orders in Amn, however, Amn's persecution of wizards and their practices cause many monks of the order to go underground or even to leave the country. Some of them founded the Shining Hand Monastery in Vaasa that gained renown and a small fortune for creating the robes fo the Shining Hand that is in high demand across Faerun, keeping the monks busy creating variations of the successful design.</p>
<p>Monks of the Shining Hand take the Enlightened Fist prestige class.</p>
<ul>
    <li>You gain the Psionic Fist feat</li>
    <li>You gain the Intelligent Defense feat</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Astral Traveler', 'Call to Mind', 'Detect Psionics', 'Missive'],
            2 => ['Aversion', 'Clairvoyant Sense'],
            3 => ['Dispel Psionics'],
            4 => ['Dimension Door', 'Schism'],
            5 => ['Metaconcert', 'Tower of Iron Will'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Disciples of the White Rod';
        $feat->requirement = 'You must have levels in Monk';
        $feat->description = "<p>The Disciples of the White Rod are monks devoted to Loviatar. They are based out of an abbey near Calimport. They are named after a token bestowed on the order's founder by the goddess herself. It is kept as a holy relic at the abbey.</p>
<p>Members of this monastic order prefer to inflict pain upon their enemies through the use of their bare hands. They are known for their use of whips and nunchakus.</p>
<ul>
    <li>You gain either the Dragon Stance or Tiger Stance feat</li>
    <li>Monks of this order are able to deliver their Stunning Fist ability through their whips.</li>
    <li>You gain either the Tough Defense or Beautiful Defense feat</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Dissipating Touch', 'Empty Mind', 'Fear', 'Strength Blast', 'Vitality Blast'],
            2 => ['Charm', 'Mind Trap', 'Power Defense'],
            3 => ['Drain Vigor', 'Wisdom Blast'],
            4 => ['Brutalize Wounds', 'Life Blast', 'Wither'],
            5 => ['Quivering Palm', 'Drain Life', 'Psychic Crush', 'Regeneration'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Avowed';
        $feat->requirement = 'You must have levels in Monk';
        $feat->description = '<p>The Disciples of the Avowed that protects the library fortress of Candelkeep. You serve as library staff, and defense.</p>
<p>You gain the following</p>
<ul>
    <li>You gain the Psionic Talent Feat</li>
    <li>You gain either the Intelligent Defense or Wise Defense feat</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Call to Mind', 'Empty Mind', 'Inertial Armor', 'Intelligence Blast', 'Intelligence Defense', 'Precognition',
                "Seer's Sight", 'Sense Minds', 'Shift', 'Telekinesis', ],
            2 => ['Heal', 'Mental Augmentation', 'Physical Augmentation', 'Ubiquitous Sight'],
            3 => ['Battlesense', 'Body Purification', 'Body Restoration', 'Immovability'],
            4 => ['Energy Adaptation', 'Inertial Barrier'],
            5 => ['Energy Conversion', 'Mind Probe', 'Quivering Palm'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Wing-ta';
        $feat->requirement = 'You must have levels in Monk';
        $feat->description = '<p>The Disciples of Wing-ta are monks from the town of Goisho in Koryo. They practice Koryo Style martial arts.</p>
<ul>
    <li>You gain the Koryo Style Feat.</li>
    <li>You gain the Wise Defense Feat.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Body Adjustment', 'Daze', 'Dexterity Defense', 'Empty Mind', 'Inertial Armor'],
            2 => ['Heal', 'Dexterity Blast', 'Extend Limb', 'Physical Augmentation'],
            3 => ['Body Purification', 'Combat Sense'],
            4 => ['Brutalize Wounds', 'Fate of One'],
            5 => ['Null Psionics Field', 'Regeneration'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Githzerai';
        $feat->requirement = 'You must be of the Githzerai race';
        $feat->description = '<p>You are a Gith from the plane of Limbo.</p>
<ul>
    <li>You may spend 1 Power Point to manipulate the roiling chaos of Limbo into a basic and stable piece of matter (earth, water or air, nothing that is complex). This effect lasts for 8 hours and you can create a 30 ft x 10 ft area of chaos</li>
    <li>You gain the Wise Defense Feat.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Absorb Weapon', 'Astral Traveler', 'Body Adjustment', 'Burst', 'Call to Mind', 'Control Object', 'Detect Psionics',
                'Empty Mind', 'Inertial Armor', 'Telekinesis', ],
            2 => ['Body Equilibrium', 'Levitate', 'Mental Augmentation', 'Object Reading', 'Physical Augmentation'],
            3 => ['Astral Caravan', 'Body Purification', 'Dispel Psionics', 'Haste'],
            4 => ['Control Body', 'Dimension Door'],
            5 => ['Adapt Body', 'Catapsi', 'Null Psionics Field', 'Quivering Palm', 'Tower of Iron Will'],
        ]);

        // Brotherhood of the Scarlet Scourge (monk orcs seeking to unite the orcs of the Sword Mountains)
        // Order of Rainbow Monks (religious organization of Byubo found in the Hordelands)
        // Standing Tree Monastery (Shou monastery dedicated to the pursuit of knowledge)

        $helper->addFeatsToClass($class, [
            'Order of the Sun Soul'      => 2,
            'Order of the Long Death'    => 2,
            'Broken Ones'                => 2,
            'Shining Hand'               => 2,
            'Disciples of the White Rod' => 2,
            'Avowed'                     => 2,
            'Wing-ta'                    => 2,
            'Githzerai'                  => 2,

            'Greater Unarmed Strike'  => 5,
            'Master Unarmed Strike'   => 11,
            'Perfect Unarmed Strike'  => 17,

            'Psychic Speed'     => 5,

            'Stunning Fist'          => 3,
            'Improved Stunning Fist' => 9,
            'Power Attack'           => 2,
            'Swipe'                  => 3,
            'Cleave'                 => 3,
            'Great Cleave'           => 6,
            'Supreme Cleave'         => 12,
            'Improved Feint'         => 2,
            'Improved Disarm'        => 2,
            'Improved Trip'          => 2,
            'Evasion'                => 7,
            'Improved Evasion'       => 11,
            'Mettle'                 => 7,
            'Improved Mettle'        => 11,
            'Resolve'                => 7,
            'Improved Resolve'       => 11,

            'Psionic Talent'     => 3,
            'Expanded Knowledge' => 6,

            'Combat Manifestation' => 3,

            'Focused Mind'          => 3,
            'Improved Focused Mind' => 6,
            'Greater Focused Mind'  => 9,
            'Supreme Focused Mind'  => 12,

            'Psionic Fist'         => 2,
            'Greater Psionic Fist' => 7,

            'Disease Immunity' => 10,
            'Timeless Body'    => 14,

            'Deflect Ranged Attack'  => 3,
            'Deflect Magical Attack' => 12,
        ]);

        $helper->addPowersToClass($class, [
            1 => ['Awareness', 'Charisma Defense', 'Dexterity Defense', 'Empty Mind', 'Intelligence Defense', 'Strength Defense',
                'Wisdom Defense', ],
            2 => ['Body Adjustment', 'Body Equilibrium', 'Danger Sense', 'Animal Sight', 'Power Defense'],
            3 => ['Body Purification'],
            4 => ['Etherealness', 'Simulate Feat', 'Suspend Life'],
            5 => ['Hypercognition'],
        ]);

        $helper->addPowerMetasToClass($class, [
            1  => ['points' => 1, 'known' => 1, 'max_level_power' => 1],
            2  => ['points' => 2, 'known' => 2, 'max_level_power' => 1],
            3  => ['points' => 4, 'known' => 3, 'max_level_power' => 1],
            4  => ['points' => 6, 'known' => 4, 'max_level_power' => 1],
            5  => ['points' => 8, 'known' => 5, 'max_level_power' => 2],
            6  => ['points' => 12, 'known' => 6, 'max_level_power' => 2],
            7  => ['points' => 16, 'known' => 7, 'max_level_power' => 2],
            8  => ['points' => 20, 'known' => 8, 'max_level_power' => 2],
            9  => ['points' => 24, 'known' => 9, 'max_level_power' => 3],
            10 => ['points' => 28, 'known' => 10, 'max_level_power' => 3],
            11 => ['points' => 32, 'known' => 11, 'max_level_power' => 3],
            12 => ['points' => 36, 'known' => 12, 'max_level_power' => 3],
            13 => ['points' => 40, 'known' => 13, 'max_level_power' => 4],
            14 => ['points' => 44, 'known' => 14, 'max_level_power' => 4],
            15 => ['points' => 48, 'known' => 15, 'max_level_power' => 4],
            16 => ['points' => 52, 'known' => 16, 'max_level_power' => 4],
            17 => ['points' => 56, 'known' => 17, 'max_level_power' => 5],
            18 => ['points' => 60, 'known' => 18, 'max_level_power' => 5],
            19 => ['points' => 64, 'known' => 19, 'max_level_power' => 5],
            20 => ['points' => 68, 'known' => 20, 'max_level_power' => 5],
        ]);
    }
}
