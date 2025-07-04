<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassFavoredSoulSeeder extends Seeder
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
        $class->name          = 'Favored Soul';
        $class->key_attribute = 'CHA';
        $class->hit_dice      = 8;
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor and all Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'skill_points'   => 2,
            'skill_progress' => 2,
        ], ['WIS', 'CHA'], [
            'Divine', 'Spell Pool',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Language', 'Religion', 'Society']
        );

        $helper->addFeaturesToClass($class, [
            'cantrip_caster'        => [1],
            'spell_pool'            => [2, 5, 10, 15, 20],
            'class_group_feat'      => [3, 4, 6, 7, 9, 12, 13, 16, 18, 19],
            'improved_spell_points' => [2],
            'flexible_casting'      => [3],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Favored of the Hex Blade';
        $feat->requirement = 'Beshaba must be your Patron Deity';
        $feat->description = "<p>You have been chosen to join Beshaba's order of the Hex Blades.</p>
<ul>
    <li>You gain proficiency to all Martial Weapons</li>
    <li>You gain the following skills as class skills
        <ul>
            <li>Acrobatics</li>
            <li>Athletics</li>
            <li>Arcana</li>
            <li>Intimidation</li>
        </ul>
    </li>
    <li>Add the following feats to your list of class feats that you may take
        <table>
            <thead>
                <tr>
                    <th>Feat</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Beautiful Defense</td>
                    <td>3rd</td>
                </tr>
                <tr>
                    <td>Stunning Personality</td>
                    <td>3rd</td>
                </tr>
                <tr>
                    <td>Mettle</td>
                    <td>3rd</td>
                </tr>
                <tr>
                    <td>Find Familiar</td>
                    <td>4th</td>
                </tr>
                <tr>
                    <td>Stubborn</td>
                    <td>7th</td>
                </tr>
                <tr>
                    <td>Enhance Familiar</td>
                    <td>8th</td>
                </tr>
                <tr>
                    <td>Improved Stubborn</td>
                    <td>12th</td>
                </tr>
            </tbody>
        </table>
    </li>
</ul>";
        $helper->addTypesToFeat($feat, ['Favored']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Daze', 'Hex', 'Light', 'Touch of Fatigue'],
            1 => ['Bane', 'Cure Wounds', 'Depilate', 'Drug Resistance', 'Fear', 'Pain Enhancing Hex'],
            2 => ["Aura of the Bull's Curse", "Aura of the Cat's Curse", "Aura of the Eagle's Curse", "Aura of the Fox's Curse",
                "Aura of the Owl's Curse", 'Bestow Curse', "Bull's Hex", "Cat's Hex", 'Deafness', "Eagle's Hex", "Fox's Hex",
                "Owl's Hex", 'Vulnerability', ],
            3 => ["Bear's Hex", 'Blindness', 'Geas', 'Slow'],
            4 => ['Aura of Confusion', 'Crushing Despair', "Outcast's Hex"],
            5 => ['Forbidden Speech'],
            6 => ['Baleful Polymorph', 'Night Terrors'],
            7 => ['Contingency'],
            8 => ['Feeblemind'],
            9 => ['Imprisonment'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Favored of the Silver Ladies';
        $feat->requirement = 'Must be CG and Selune must be your Patron Deity';
        $feat->description = "<p>You have been chosen to join Selune's order of the Silver Ladies, an order of female healers, diviners, and protectors of women and lycanthropes.</p>
<ul>
    <li>You gain Weapon Proficiency with 3 Martial Melee weapons</li>
    <li>You gain the following skills as class skills
        <ul>
            <li>Acrobatics</li>
            <li>Athletics</li>
        </ul>
    </li>
    <li>You are immune to lycanthropy. If you are already afflicted (if you already have the Curse of Lycanthropy feat), you gain the Lycanthrope Mastery Feat. You also do not suffer any alignment change due to lycanthropy and your bite does not inflict lycanthrope (no choice).</li>
    <li>Selene blesses you with Lycanthrope. You may take the Curse of Lycanthrope feat at 6th level.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Favored']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Guidance', 'Light', 'Message', 'Resist', 'Shield'],
            1 => ['Alleviate Addiction', 'Bless', 'Cure Wounds', 'Detect Evil', 'Moonbeam', 'Sleep'],
            2 => ['Aura of Glory', 'Calm Emotions', 'Consecrate', 'Darkvision', 'Faerie Fire', 'Imbue with Silvered'],
            3 => ['Dispel Magic', 'Ethereal Sight', 'Prophecy'],
            4 => ['Divination', 'Remove Curse', 'Sheltered Vitality'],
            5 => ['Banishing Smite'],
            6 => ['Planar Ally'],
            7 => ['Bastion of Good', 'Crown of Stars'],
            8 => ['Were-doom'],
            9 => ['Shapechange'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Favored of Bast';
        $feat->requirement = 'Must be CG and Bast must be your Patron Deity';
        $feat->description = '<p>You are called by Bast to server her purposes.</p>
<ul>
    <li>Increase your DEX by +1 to a maximum of 20</li>
    <li>You gain the following skills as class skills
        <ul>
            <li>Acrobatics</li>
            <li>Athletics</li>
            <li>Stealth</li>
        </ul>
    </li>
    <li>You gain the Find Familiar Feat. Your Familiar must be a cat</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Favored']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Boon', 'Clean Self', 'Daze', 'Detect Magic', 'Friends', 'Guidance', 'Light', 'Soft Landing', 'True Strike'],
            1 => ['Animal Friendship' => 'Felines only', 'Bless', "Cat's Grace", 'Courageous Shout', 'Cure Wounds', 'Detect Evil',
                'Drug Resistance', 'Fleet Step', 'Heroism', 'Jump', 'Luck', ],
            2 => ['Aid', 'Animal Messenger', 'Animal Sense', 'Aura of the Cat', 'Delay Poison', 'Dispel Silence', 'Invisibility',
                'Scent', 'See Invisibility', 'Speak with Animals' => 'Felines only', ],
            3 => ['Aspect of the Deity, Lesser', 'Catnap', 'Celebration', 'Circle of Protection From Evil', 'Haste', 'Neutralize Poison',
                'Nondetection', 'Prophecy', ],
            4 => ['Call Animal' => 'Felines only', 'Ceremony', 'Divination', 'Divine Power', 'Weapon Storm'],
            5 => ['Atonement', 'Banishing Smite', 'Call Eladrin Servants', 'Dispel Evil', 'Holy Weapon'],
            6 => ['Heal', 'Planar Ally', 'Teleport', 'True Seeing'],
            7 => ['Aspect of the Deity, Greater', 'Divine Decree', 'Divine Word', 'Great Shout', 'Holy Word'],
            8 => ['Crown of Glory', 'Divine Aura', 'Nine Lives'],
            9 => ['Invulnerability'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Favored of Sharess';
        $feat->requirement = 'Must be CG and Sharess must be your Patron Deity';
        $feat->description = '';
        $helper->addTypesToFeat($feat, ['Favored']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Bit of Luck', 'Boon', 'Clean Self', 'Daze', 'Detect Magic', 'Friends', 'Ghost Sound', 'Guidance', 'Minor Illusion',
                'Resist', 'Shield', 'Vicious Mockery', ],
            1 => ['Alarm', 'Alleviate Addiction', 'Biting Words', 'Command', 'Cure Wounds', 'Disguise Self', 'Drug Resistance',
                'Fear', 'Hideous Laughter', 'Protection From Evil', 'Sleep', 'Unseen Servant', ],
            2 => ['Alter Self', 'Arcane Lock', 'Comprehend Language', 'Create Food and Water', "Eagle's Splendor", 'Elation',
                'Hold Person', 'Humanoid Form', 'Invisibility', 'Power Word Sleep', 'Remove Fear', 'Reveal True Shape',
                "Sune's Caress", 'Zone of Truth', ],
            3 => ['Celebration', 'Dispel Magic', 'Enthrall', 'Gaseous Form', 'Know Bloodline', 'Pierce Disguise', 'Ray of Exhaustion',
                'Reveal Illusion', 'Vampiric Touch', ],
            4 => ['Aura of Life', 'Blinding Beauty', 'Ceremony', 'Freedom of Movement'],
            5 => ['Banishment', 'Call Eladrin Servants', "Chaav's Laugh", 'Commune', 'Curse of Youth', 'Dispel Outsider',
                'Joyful Rapture', 'Modify Memory', 'Ridiculous Notion', 'Scrying', ],
            6 => ['Baleful Polymorph', 'Dominate', "Hero's Feast"],
            7 => ['Ability Rip', 'Cloak of Chaos', 'Possession', 'Regenerate'],
            8 => ['Antimagic Field', 'Dream Council', 'Feeblemind', 'Power Word Stun'],
            9 => ['Mass Polymorph', 'True Polymorph'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Favored of the Dark Moon';
        $feat->requirement = 'Shar must be your Patron Deity';
        $feat->description = "<p>You have been chosen to join Shar's Order of the Dark Moon</p>
<ul>
    <li>Increase your CHA by +1 to a maximum of 20</li>
    <li>You gain Darkvision</li>
    <li>You gain a +2 bonus to Hide and Sneak checks</li>
    <li>You gain 1 Power Point</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Favored', 'Psionic', 'Discipline']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Daze', 'Ghost Sound', 'Resistance', 'Stabilize'],
            1 => ['Bane', 'Charm', 'Command', 'Darkness', 'Drug Resistance', 'Jump', 'Longstrider', 'Touch of Blindness'],
            2 => ["Bull's Strength", "Cat's Grace", 'Claws of Darkness', 'Darkvision', 'Invisibility', 'Levitate', 'Silence',
                'Undetectable Alignment', ],
            3 => ['Dispel Magic', 'Haste'],
            4 => ['Confusion', 'Lightning Bolt', 'Shadow of Moil'],
            5 => ['Cloak of Shadows', 'Globe of Invulnerability'],
            6 => ['Dominate'],
            7 => ['Triple Mask'],
            8 => ['Maddening Darkness'],
            9 => ['Foresight'],
        ]);
        $helper->addPowersToFeat($feat, [
            1 => ['Absorb Weapon', 'Attraction', 'Distract', 'Empathy'],
            2 => ['Cloud Mind', 'Wisdom Defense'],
            3 => ['Danger Sense', 'Wisdom Blast'],
        ]);
        $feat->features()->save(app()->features['flurry_of_blows']);

        $feat              = new Feat;
        $feat->name        = 'Dark Moon Blade';
        $feat->description = '<ul>
    <li>You can cast Shadow Blade at will and your Shadow Blade counts as a Monk weapon for Flurry of Blows</li>
    <li>You gain 2 Power Points</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Favored']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Shadow Blade'],
            8 => ['Clone'],
        ]);
        $feat->parent_feats()->save(app()->feats['Favored of the Dark Moon']);

        $helper->addFeatsToClass($class, [
            'Favored of the Hex Blade'     => 1,
            'Favored of the Silver Ladies' => 1,
            'Favored of the Dark Moon'     => 1,
            'Dark Moon Blade'              => 3,
            'Favored of Bast'              => 1,

            'Reach Spell'              => 1,
            'Widen Spell'              => 1,
            'Heighten Spell'           => 3,
            'Conceal Spell'            => 4,
            'Expanded Spell Knowledge' => 5,
            'Metamagic Master'         => 8,
            'Quicken Spell'            => 8,

            'Extend Spell Pool' => 5,
        ]);

        $helper->addSpellsToClass($class, [
            0 => ['Detect Magic'],
            1 => ['Bless', 'Cure Wounds'],
        ]);

        $helper->addSpellSlotsToClass($class, [
            1  => ['cantrips' => 2],
            2  => ['cantrips' => 4, 'known' => 2, 'one' => 1],
            3  => ['cantrips' => 4, 'known' => 3, 'one' => 2],
            4  => ['cantrips' => 4, 'known' => 4, 'one' => 3],
            5  => ['cantrips' => 5, 'known' => 5, 'one' => 3, 'two' => 2],
            6  => ['cantrips' => 5, 'known' => 6, 'one' => 4, 'two' => 3],
            7  => ['cantrips' => 5, 'known' => 7, 'one' => 4, 'two' => 3, 'three' => 2],
            8  => ['cantrips' => 5, 'known' => 8, 'one' => 4, 'two' => 4, 'three' => 3],
            9  => ['cantrips' => 6, 'known' => 9, 'one' => 5, 'two' => 4, 'three' => 3, 'four' => 1],
            10 => ['cantrips' => 6, 'known' => 10, 'one' => 5, 'two' => 4, 'three' => 4, 'four' => 2],
            11 => ['cantrips' => 6, 'known' => 11, 'one' => 5, 'two' => 5, 'three' => 4, 'four' => 3, 'five' => 1],
            12 => ['cantrips' => 6, 'known' => 12, 'one' => 5, 'two' => 5, 'three' => 4, 'four' => 3, 'five' => 2],
            13 => ['cantrips' => 6, 'known' => 13, 'one' => 5, 'two' => 5, 'three' => 4, 'four' => 3, 'five' => 3, 'six' => 1],
            14 => ['cantrips' => 6, 'known' => 14, 'one' => 6, 'two' => 5, 'three' => 4, 'four' => 4, 'five' => 3, 'six' => 1],
            15 => ['cantrips' => 6, 'known' => 15, 'one' => 6, 'two' => 5, 'three' => 5, 'four' => 4, 'five' => 3, 'six' => 2, 'seven' => 1],
            16 => ['cantrips' => 6, 'known' => 16, 'one' => 6, 'two' => 6, 'three' => 5, 'four' => 4, 'five' => 3, 'six' => 2, 'seven' => 1],
            17 => ['cantrips' => 6, 'known' => 17, 'one' => 6, 'two' => 6, 'three' => 5, 'four' => 4, 'five' => 3, 'six' => 2, 'seven' => 1, 'eight' => 1],
            18 => ['cantrips' => 6, 'known' => 18, 'one' => 6, 'two' => 6, 'three' => 5, 'four' => 4, 'five' => 3, 'six' => 2, 'seven' => 1, 'eight' => 1],
            19 => ['cantrips' => 6, 'known' => 19, 'one' => 6, 'two' => 6, 'three' => 5, 'four' => 4, 'five' => 3, 'six' => 3, 'seven' => 2, 'eight' => 1, 'nine' => 1],
            20 => ['cantrips' => 6, 'known' => 20, 'one' => 6, 'two' => 6, 'three' => 5, 'four' => 4, 'five' => 4, 'six' => 3, 'seven' => 2, 'eight' => 1, 'nine' => 1],
        ]);
    }
}
