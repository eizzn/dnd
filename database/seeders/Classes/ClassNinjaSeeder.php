<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassNinjaSeeder extends Seeder
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
        $class->name          = 'Ninja';
        $class->type          = 'Base';
        $class->key_attribute = 'DEX';
        $class->weapons       = 'Simple Weapons, Hand Crossbow, Kama, Kukri, Nunchaku, Sai, Shortbow, Short Sword, Shuriken and Saingham';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 4,
            'has_powers'     => true,
        ], ['DEX', 'CHA'], [
            'Psionic', 'Sneak Attack', 'Skill',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Athletics', 'Deception', 'Intimidation', 'Language', 'Performance', 'Society', 'Stealth', 'Thievery',
        ]);

        $helper->addFeaturesToClass($class, [
            'class_group_feat' => [3, 6, 9, 12, 15, 18],
            'sudden_strike'    => [2, 8, 14, 20],
            'heroic_surge'     => [4, 7, 11],
            'discipline_feat'  => [2],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Shinobi';
        $feat->requirement = 'You must have levels in Ninja';
        $feat->description = '<p>The generic ninja, mostly commonly active in Wa and Kozakura.</p>
<p>You gain the following</p>
<ul>
    <li>You gain the Speed of Thought Talent</li>
    <li>You gain the Swift Invisibility Talent (you cannot use this ability until you gain the Chameleon power</li>
    <li>You gain any Skill Feat</li>
    <li>You gain an additional +1D6 damage die to your Sudden Strike</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Awareness', 'Shift', 'Call Object', 'Charisma Defense', 'Dexterity Defense', 'Distract'],
            2 => ['Body Equilibrium', 'Chameleon', 'Darkness', 'Invisibility', 'Venom'],
            3 => ['Body Purification', 'Combat Sense', 'Haste'],
            4 => ['Dimension Door', 'Wisdom Blast'],
            5 => ['Barrage', 'Fly'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Fangs of the Night';
        $feat->requirement = 'You must have levels in Ninja';
        $feat->description = '<p>The Fangs of the Night operates in the city of Ojy-do in Koryo.</p>
<p>The five highest-ranked warriors of the clan each carry one of the Throwing Stars of Ojy-do, magical stone shuriken that never miss their targets.</p>
<p>You gain the following.</p>
<ul>
    <li>You gain the Thrown Weapon Master feat</li>
    <li>Your thrown shurikens deal an additional +1 to damage</li>
    <li>
        <p>You may use any feat type as Fighter Feats to take the following. The selected weapon must be shuriken</p>
        <ul>
            <li>Weapon Focus</li>
            <li>Weapon Specialization</li>
            <li>Improved Weapon Focus</li>
            <li>Improved Weapon Specialization</li>
        </ul>
    </li>
    <li>You may as a Free Action, equip any number of shurikens you have absorbed with Absorb Weapon.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Absorb Weapon' => 'Shurikens only. Can store up to 20. Maintenance Cost becomes 1 Power Point per day',
                'Awareness', 'Burst', 'Ectoplasmic Creation', 'Shift',
                'Ectoplasmic Shard' => 'Forms a Shuriken', ],
            2 => ['Compression', 'Concealing Ectoplasm', 'Physical Augmentation'],
            3 => ['Haste', 'Heal', 'Power Defense'],
            4 => ['Body Purification', 'Hail of Ectoplasmic Shards' => 'All shards are Shurikens'],
            5 => ['Barrage'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Panthers of Xi';
        $feat->requirement = 'You must have levels in Ninja';
        $feat->description = '<p>Hailing from the mist-shrouded northern Vorkani Mountains in Koryo, the Panthers of Xi are an elite cabal of highly trained killers. Operating from their hidden mountain sanctuary, these assassins view psionic energy (Ki) not as an external magical force, but as an internal psychic reservoir. By bending light, masking their thoughts, and hardening their physical forms with pure willpower, a Panther of Xi can infiltrate any stronghold and eliminate targets without leaving a physical or magical trace.</p>
<ul>
    <li>You gain the Psionic Fist feat.</li>
    <li>You gain the Tiger Stance feat.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Charm', 'Distract', 'Inertial Armor', 'Telekinesis', 'Shift'],
            2 => ['Cloud Mind', 'Darkness', 'Levitate', 'Space Hop'],
            3 => ['Danger Sense', 'Telekinetic Thrust'],
            4 => ['Air Walk'],
            5 => ['Inertial Barrier'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Hijo Clan';
        $feat->requirement = 'You must have levels in Ninja';
        $feat->description = "<p>The Hijo clan is the ninja clan ally of Funada clan in Nakamaru in Wa. The Hijo are tied to the Funada not only by loyalty and greed but also by ancient tradition and by giri, a sense of obligation and duty. Normally, they pursue their personal goals and only change their plans if they might cause harm to the Funada or if giri obligates them to stop. Their headquarters is not in Nakamaru city but in a small village deep in the mountains, where they are free to practice their \"mountain-style\" ninjitsu. Many members live in the city, however, but are very difficult to find. They have no insignia; they recognized each other because all Hijo ninja know all others in the clan.</p>
<p>The clan is led by a sensei (master) who, with the advice of elders, decides all the strategy of the clan and determines all assignments. The clan mostly recruits from other clan families. Members unfit for the role of ninja often leave, and a few start successful careers, but it is expected that they return to help the clan if necessity arose.</p>
<p>The Hijo's efficiency makes them the premier shadow asset of Nakamaru, which places them in direct opposition to the Phoenix clan. The Phoenix are a much more obscure, secretive ninja faction allied with the rival Northern Goshukara samurai family, creating a quiet shadow war beneath the city's political surface.</p>
<p>You gain the following.</p>
<ul>
    <li>You gain a +5 bonus to Climb checks</li>
    <li>You gain the Combat Climber talent</li>
    <li>You gain the Quick Climb talent</li>
    <li>You gain the Wall Jump talent</li>
    <li>Your Sudden Strike deals an additional +1D6 Damage but only if you strike from above the target.</li>
    <li>Your Sudden Strikes deal an additional +1 point of Damage per Precision feat you have.</li>
    <li>You may as a Double Action, spend 1 Power Point and make a Ranged Attack with your absorbed grappling hook with a Range of 30 ft. If you hit, you may forgo 1D6 Sudden Strike damage and start a Grapple as if you had the Improved Grapple Feat (Get over here!)</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline', 'Talent', 'Spend Power Point']);
        $helper->addPowersToFeat($feat, [
            1 => ['Absorb Weapon' => 'Grappling hook and 50 ft rope only. The Maintenance Cost becomes 1 Power Point per day',
                'Body Adjustment', 'Burst', 'Sense Minds', 'Vigor'],
            2 => ['Chameleon', 'Cloud Mind', 'Physical Augmentation', 'Read Thoughts'],
            3 => ['Body Purification', 'Immovability', 'Invisibility'],
            4 => ['Danger Sense'],
            5 => ['Adapt Body'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Royal Vagabonds';
        $feat->requirement = 'You must have levels in Ninja';
        $feat->description = '<p>The Royal Vagabonds are a secret clan in service to the Shou Emperor. All members of the clan are ninja. They are not an official part of the government but still reports to the Minister of State Security and the Chief Imperial Censor. They do most of the difficult missions that the Emperor orders. Nobody outside the clan can positively identify a vagabond. The only positive means of identification is a magical sigil borne on the chest of each man.</p>
<p>When you take this feat, you gain a Psychic Tattoo that grants you the following</p>
<ul>
    <li>Increase your DEX by +1 to a maximum of 20.</li>
    <li>You gain a Talent</li>
    <li>You gain an additional 5 Power Points</li>
    <li>You are psychically bond to not betray the Emperor and must obey his commands (similar to a Geas spell). This effect can be removed with a successful Psychic Chirurgery power</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline', 'Talent', 'Ability Boost', 'Power Point']);
        $helper->addPowersToFeat($feat, [
            1 => ['Awareness', 'Burst', 'Call Object', 'Daze', 'Dexterity Defense', 'Distract', 'Wisdom Defense'],
            2 => ['Chameleon', 'Charisma Blast', 'Dexterity Blast', 'Mind Trap', 'Simulate Skill'],
            3 => ['Combat Sense', 'Danger Sense', 'Memory Modification'],
            4 => ['Dominate'],
            5 => ['Tower of Iron Will'],
        ]);

        /**
         * Nation of Koryo
         *  Fangs of Night: Elite shadow-stalkers based in the city of Ojy-do. Their five highest-ranked masters carry the legendary, magically guided Throwing Stars of Ojy-do.
         *  Panthers of Xi: A rugged clan that completely controls the high-altitude Vorkani Mountains. They act as fierce, territorial mountain ambushers.
         *
         * Nation of Wa
         *  Hijo Clan: An exceptionally disciplined clan bound by an ancient code of honor (giri) to the ruling Funada samurai family. They practice a specialized, rugged style of "mountain ninjutsu" from a hidden village.
         *  Phoenix Clan: The mysterious, bitter rivals of the Hijo clan. They are allied with the opposing northern Goshukara samurai family in a quiet urban shadow war.
         *  Kata Clan: Operating out of the port town of Aru, this clan is fiercely independent and pursues its own secret agendas rather than serving samurai lords.
         *  Amida Butsu, Ohara, & Yamaguchi Clans: Three heavily active factions locked in a localized regional conflict known as the Ninja Wars, serving as mercenary saboteurs for rival merchant houses.
         *
         * Nation of Kozakura
         *  Konishi Clan: The largest, most influential ninja network in the Kozakuran empire. They are deeply entrenched in political espionage as the premier shadow assets for powerful daimyo.
         *  Uji Clan: The traditional blood-rivals of the Konishi clan, specializing in harsh wilderness guerrilla warfare, untraceable poisons, and counter-espionage.
         *  Poison Fist Clan: A brutal, vengeful criminal alliance formed by the surviving remnants of the exiled Snake, Scorpion, and Spider clans. They function strictly as assassins-for-hire plotting to collapse the empire.
         *
         * Empire of Shou Lung & T'u Lung
         *  Royal Vagabonds: The ultimate, anonymous secret police force of the Shou Emperor. They verify each other's identities via secret, magical glowing brands on their chests and hunt down political dissidents.
         *  Sung Clan: Originally from T'u Lung, this massive clan migrated to Laothan and established a network across the Golden Way trade route. They operate deep-cover corporate espionage disguised as traveling merchants and cashiers.
         *  Soretyo Clan: A highly insular guild that specializes in deep-cover nautical infiltration, underwater sabotage, and smuggling along the southern maritime routes.
         */
        $helper->addFeatsToClass($class, [
            'Improved Feint'   => 2,
            'Weapon Finesse'   => 2,
            'Sharpshooter'     => 7,
            'Evasion'          => 7,
            'Improved Evasion' => 13,
            'Resolve'          => 17,

            'Bleeding Strike'            => 7,
            'Debilitating Strike'        => 9,
            'Double Debilitating Strike' => 15,
            'Master Strike'              => 19,

            'Stunning Fist'          => 4,
            'Improved Stunning Fist' => 10,

            'Extra Melee Action'    => 7,
            'Extra Ranged Action'   => 7,
        ]);

        $helper->addPowersToClass($class, [
            1 => ['Awareness', 'Burst'],
            2 => [],
            3 => ['Preemptive Dodge'],
            4 => [],
            5 => [],
        ]);

        $helper->addPowerMetasToClass($class, [
            1  => ['points' => 1, 'known' => 0, 'max_level_power' => 0],
            2  => ['points' => 1, 'known' => 1, 'max_level_power' => 1],
            3  => ['points' => 2, 'known' => 2, 'max_level_power' => 1],
            4  => ['points' => 3, 'known' => 3, 'max_level_power' => 1],
            5  => ['points' => 5, 'known' => 4, 'max_level_power' => 1],
            6  => ['points' => 7, 'known' => 5, 'max_level_power' => 2],
            7  => ['points' => 9, 'known' => 6, 'max_level_power' => 2],
            8  => ['points' => 11, 'known' => 7, 'max_level_power' => 2],
            9  => ['points' => 14, 'known' => 8, 'max_level_power' => 2],
            10 => ['points' => 17, 'known' => 9, 'max_level_power' => 3],
            11 => ['points' => 20, 'known' => 10, 'max_level_power' => 3],
            12 => ['points' => 23, 'known' => 11, 'max_level_power' => 3],
            13 => ['points' => 27, 'known' => 12, 'max_level_power' => 3],
            14 => ['points' => 31, 'known' => 13, 'max_level_power' => 4],
            15 => ['points' => 35, 'known' => 14, 'max_level_power' => 4],
            16 => ['points' => 39, 'known' => 15, 'max_level_power' => 4],
            17 => ['points' => 43, 'known' => 16, 'max_level_power' => 4],
            18 => ['points' => 48, 'known' => 17, 'max_level_power' => 5],
            19 => ['points' => 53, 'known' => 18, 'max_level_power' => 5],
            20 => ['points' => 58, 'known' => 19, 'max_level_power' => 5],
        ]);
    }
}
