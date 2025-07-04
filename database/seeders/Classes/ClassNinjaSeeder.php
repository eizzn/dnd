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
        $class->key_attribute = 'DEX';
        $class->weapons       = 'Simple Weapons, Hand Crossbow, Kama, Kukri, Nunchaku, Sai, Shortbow, Short Sword, Shuriken and Saingham';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 8,
            'skill_progress' => 8,
            'has_powers'     => true,
        ], ['DEX', 'CHA'], [
            'Psionic', 'Sneak Attack', 'Skill',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Athletics', 'Deception', 'Intimidation', 'Language', 'Performance', 'Society', 'Stealth', 'Thievery',
        ]);

        $helper->addFeaturesToClass($class, [
            'class_group_feat' => [2, 5, 10, 16, 19],
            'psychic_feat'     => [3, 6, 9, 12, 15, 18],
            'sudden_strike'    => [2, 8, 14, 20],
            'heroic_surge'     => [4, 7, 11],
            'discipline_feat'  => [2],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Fangs of the Night';
        $feat->requirement = 'You must have levels in Ninja';
        $feat->description = '<p>The Fangs of the Night operates in the city of Ojy-do in Koryo</p>
<p>The five highest-ranked warriors of the clan each carry one of the Throwing Stars of Ojy-do, magical stone shuriken that never miss their targets.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Absorb Weapon', 'Awareness', 'Burst', 'Fear', 'Intelligence Blast', 'Shift', 'Strength Blast', 'Venom'],
            2 => ['Animal Sight', 'Chameleon', 'Cloud Mind', 'Dexterity Blast', 'Invisibility', 'Levitate', 'Physical Augmentation'],
            3 => ['Air Walk', 'Battlesense', 'Combat Sense', 'Danger Sense', 'Haste'],
            4 => ['Dominate', 'Psychic Drain'],
            5 => ['Drain Life', 'Mind Probe'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Hijo Clan';
        $feat->requirement = 'You must have levels in Ninja';
        $feat->description = '<p>The Hijo clan is the ninja clan ally of Funada clan in Nakamaru in Wa. The Hijo are tied to the Funada not only by loyalty and greed but also by ancient tradition and by giri, a sense of obligation and duty. Normally, they pursue their personal goals and only change their plans if they might cause harm to the Funada or if giri obligates them to stop. Their headquarters is not in Nakamaru city but in a small village deep in the mountains, where they were free to practice their "mountain-style" ninjitsu. Many members lived in the city, however, but are very difficult to find. They have no insignia; they recognized each other because all Hijo ninja know all others in the clan.</p>
<p>The clan is led by a sensei (master) who, with the advice of elders, deciding all the strategy of the clan and determining all assignments. The clan mostly recruits from other clan families. Members unfit for the role of ninja often left and a few start successful careers, but it is expected that they return to help the clan if necessity arose.</p>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Astral Traveler', 'Body Adjustment', 'Matter Agitation'],
            2 => ['Chameleon', 'Physical Augmentation'],
            3 => ['Body Purification', 'Immovability'],
            4 => ['Inertial Barrier'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Royal Vagabonds';
        $feat->requirement = 'You must have levels in Ninja';
        $feat->description = '<p>The Royal Vagabonds are a secret clan in service to the Shou Emperor. All members of the clan are ninja. They are not an official part of the government but still reports to the Minister of State Security and the Chief Imperial Censor. They do most of the difficult missions that the Emperor orders. Nobody outside the clan can positively identify a vagabond. The only positive means of identification is a magical sigil borne on the chest of each man.</p>
<p>When you take this feat, you gain a Psychic Tattoo that grants you the following</p>
<ul>
    <li>Increase your DEX by +1 to a maximum of 20</li>
    <li>You are psychically bond to not betray the Emperor (similar to a Geas spell). This effect can be removed with a successful Psychic Chirurgery power</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Psionic', 'Discipline']);
        $helper->addPowersToFeat($feat, [
            1 => ['Absorb Weapon', 'Awareness', 'Burst', 'Call Object', 'Daze', 'Dexterity Defense', 'Distract', 'Wisdom Defense'],
            2 => ['Chameleon', 'Charisma Blast', 'Dexterity Blast', 'Invisibility', 'Levitate', 'Mind Trap', 'Simulate Skill'],
            3 => ['Combat Sense', 'Danger Sense'],
            4 => ['Dimension Door'],
            5 => ['Tower of Iron Will'],
        ]);

        // TODO: need some more ninja discipline feats

        $helper->addFeatsToClass($class, [
            'Improved Feint'   => 2,
            'Weapon Finesse'   => 2,
            'Deny Advantage'   => 3,
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
        ]);

        $helper->addPowersToClass($class, [
            1 => ['Attraction', 'Absorb Weapon', 'Awareness', 'Burst', 'Distract', 'Shift'],
            2 => ['Aversion', 'Body Adjustment', 'Cloud Mind', 'Danger Sense', 'Flex Form', 'Haste', 'Invisibility', 'Mental Augmentation',
                'Mental Barrier', 'Space Hop', ],
            3 => ['Air Walk', 'Combat Sense', 'Energy Adaptation', 'Preemptive Dodge'],
            4 => ['Barrage', 'Dimension Door', 'Etherealness'],
            5 => ['Adapt Body'],
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
