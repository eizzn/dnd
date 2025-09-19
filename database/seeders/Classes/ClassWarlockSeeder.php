<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassWarlockSeeder extends Seeder
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
        $class->name          = 'Warlock';
        $class->type          = 'Base';
        $class->key_attribute = 'CHA';
        $class->hit_dice      = 8;
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor';
        $class->description   = '<p>You regain 1 Spell Slot every 2 hours</p>';
        $class->max_level     = 20;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 4,
            'has_spells'     => true,
        ], ['WIS', 'CHA'], [
            'Arcane', 'Pact',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Arcana', 'Concentration', 'Intimidation', 'Language']);

        $feature              = new Feature;
        $feature->key         = 'mystic_arcanum';
        $feature->name        = 'Mystic Arcanum';
        $feature->description = '<p>Your patron bestows upon you a magical Secret called an Arcanum. Choose a spell of the specified level from your Class Spell list as this Arcanum.</p>
<p>You can cast your Arcanum spell once without expending a Spell Slot. You must finish a Long Rest before you can do so again.</p>';
        $helper->saveFeature($feature, ['Invocation']);

        $helper->addFeaturesToClass($class, [
            'cantrip_caster' => [2],
            'invocation'     => [[2, 2], 5, 7, 9, 12, 15, 18],
        ]);
        $class->features()->save(app()->features['mystic_arcanum'], ['level' => 11, 'meta' => '6th level Spell']);
        $class->features()->save(app()->features['mystic_arcanum'], ['level' => 13, 'meta' => '7th level Spell']);
        $class->features()->save(app()->features['mystic_arcanum'], ['level' => 15, 'meta' => '8th level Spell']);
        $class->features()->save(app()->features['mystic_arcanum'], ['level' => 17, 'meta' => '9th level Spell']);

        $feat              = new Feat;
        $feat->name        = 'Agonizing Blast';
        $feat->description = '<p>When you cast Eldritch Blast, add your CHA modifier to the damage it deals on a hit.</p>';
        $helper->addTypesToFeat($feat, ['Invocation' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Armor of Shadows';
        $feat->description = '<p>You can cast Mage Armor on yourself at will. The spell is Always Heightened to the highest spell slot you have.</p>';
        $helper->addTypesToFeat($feat, ['Invocation' => 1]);
        $helper->addSpellsToFeat($feat, [
            0 => ['Mage Armor'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Ascendant Step';
        $feat->description = '<p>You can cast Levitate on yourself at will. You do not need Material Components but it still requires the Spell Casting Action (it still requires 2 Spell Casting Actions to cast).</p>';
        $helper->addTypesToFeat($feat, ['Invocation' => 9]);
        $helper->addSpellsToFeat($feat, [
            0 => ['Levitate'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Beast Speech';
        $feat->requirement = 'You must have a Pact feat with the Fey type';
        $feat->description = '<p>You can cast Speak with Animals on yourself at will, without expending a spell slot or material components.</p>';
        $helper->addTypesToFeat($feat, ['Invocation' => 1]);
        $helper->addSpellsToFeat($feat, [
            0 => ['Speak with Animals'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Bewitching Whispers';
        $feat->description = "<p>You can cast the Spell Compulsion once using a Warlock Spell Slot. You can't do so again until you finish a Long Rest.</p>";
        $helper->addTypesToFeat($feat, ['Invocation' => 7]);

        $feat              = new Feat;
        $feat->name        = 'Eldritch Spear';
        $feat->description = '<p>When you cast Eldritch Blast, its range is 300 feet.</p>';
        $helper->addTypesToFeat($feat, ['Invocation' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Eldritch Sight';
        $feat->description = '<p>You can cast Detect Magic at will.</p>';
        $helper->addTypesToFeat($feat, ['Invocation' => 1]);
        $helper->addSpellsToFeat($feat, [
            0 => ['Detect Magic'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Lance of Lethargy';
        $feat->description = "<p>Once on each of your turns when you hit a creature with your Eldritch Blast, you can reduce that creature's Speed by 10 feet until the ned of your next turn.</p>";
        $helper->addTypesToFeat($feat, ['Invocation' => 3]);

        $feat              = new Feat;
        $feat->name        = 'Repelling Blast';
        $feat->description = '<p>When you hit a creature with Eldritch Blast, you can push the creature up to 10 feet away from you in a straight line.</p>';
        $helper->addTypesToFeat($feat, ['Invocation' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Multi Blast';
        $feat->description = '<p>You gain an additional Action. This additional Action may only be used to cast Eldritch Blast.</p>';
        $helper->addTypesToFeat($feat, ['Invocation' => 6]);

        $feat              = new Feat;
        $feat->name        = 'Improved Multi Blast';
        $feat->description = '<p>Eldritch Blast now does not require a Verbal Component (thus only requiring a single Action to cast). You may cast Eldritch Blast no more than 3 times per round.</p>';
        $helper->addTypesToFeat($feat, ['Invocation' => 12]);
        $feat->parent_feats()->save(app()->feats['Multi Blast']);

        $feat              = new Feat;
        $feat->name        = 'Greater Multi Blast';
        $feat->description = '<ul>
    <li>You gain 3 Spell Points</li>
    <li>You may spend a Spell Point to gain an Additional Action. This Additional Action can only be used to cast Eldritch Blast.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Invocation' => 16]);
        $feat->parent_feats()->save(app()->feats['Improved Multi Blast']);

        $feat              = new Feat;
        $feat->name        = "Warlock's Sight";
        $feat->requirement = 'You must have a Pact feat with the Devil type';
        $feat->description = '<p>You can see normally in darkness, both magical and nonmagical, to a distance of 120 feet.</p>';
        $helper->addTypesToFeat($feat, ['Invocation']);

        $feat              = new Feat;
        $feat->name        = 'Pact to Aboleth';
        $feat->description = '<p>You have made a Pact to an aboleth</p>
<p>The aboleth manipulates your mind, granting you the ability to manifest Psionic powers. You gain the Wild Talent Feat.</p>';
        $helper->addTypesToFeat($feat, ['Aberration', 'Pact']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Eldritch Blast', 'Touch of Fatigue'],
            1 => ['Command', 'Touch of Clumsiness'],
            2 => ['Fearsome Grapple', 'Touch of Idiocy', 'Water Breathing' => 'Self only'],
            3 => ['Amorphous Form', 'Toxin Immunity'],
            4 => ['Aboleth Curse', 'Confusion'],
            5 => ['Modify Memory'],
            6 => ['Friend to Foe'],
            7 => ['Dominate' => 'You may only have one dominated creature at a time'],
            8 => ['Feeblemind'],
            9 => ['Weird'],
        ]);

        $helper->addFeatsToClass($class, [
            'Agonizing Blast'      => 1,
            'Armor of Shadows'     => 1,
            'Beast Speech'         => 1,
            "Warlock's Sight"      => 1,
            'Eldritch Spear'       => 1,
            'Eldritch Sight'       => 1,
            'Repelling Blast'      => 1,
            'Multi Blast'          => 5,
            'Improved Multi Blast' => 11,
            'Greater Multi Blast'  => 17,

            'Ascendant Step' => 9,

            'Find Familiar'    => 2,
            'Enhance Familiar' => 6,
        ]);

        /**
         * known            => the number of spells known
         * slots            => the number of spells that can be cast
         * max_slot_level   => the level that all spells are heightened to
         */
        $helper->addSpellSlotsToClass($class, [
            1  => ['cantrips' => 2],
            2  => ['cantrips' => 2, 'known' => 3, 'slots' => 1, 'max_slot_level' => 1],
            3  => ['cantrips' => 2, 'known' => 4, 'slots' => 2, 'max_slot_level' => 1],
            4  => ['cantrips' => 3, 'known' => 5, 'slots' => 2, 'max_slot_level' => 2],
            5  => ['cantrips' => 3, 'known' => 6, 'slots' => 3, 'max_slot_level' => 2],
            6  => ['cantrips' => 3, 'known' => 7, 'slots' => 3, 'max_slot_level' => 3],
            7  => ['cantrips' => 3, 'known' => 8, 'slots' => 4, 'max_slot_level' => 3],
            8  => ['cantrips' => 3, 'known' => 9, 'slots' => 4, 'max_slot_level' => 4],
            9  => ['cantrips' => 4, 'known' => 10, 'slots' => 4, 'max_slot_level' => 4],
            10 => ['cantrips' => 4, 'known' => 11, 'slots' => 5, 'max_slot_level' => 5],
            11 => ['cantrips' => 4, 'known' => 11, 'slots' => 5, 'max_slot_level' => 5],
            12 => ['cantrips' => 4, 'known' => 12, 'slots' => 5, 'max_slot_level' => 5],
            13 => ['cantrips' => 4, 'known' => 12, 'slots' => 6, 'max_slot_level' => 5],
            14 => ['cantrips' => 5, 'known' => 13, 'slots' => 6, 'max_slot_level' => 5],
            15 => ['cantrips' => 5, 'known' => 13, 'slots' => 6, 'max_slot_level' => 5],
            16 => ['cantrips' => 5, 'known' => 14, 'slots' => 6, 'max_slot_level' => 5],
            17 => ['cantrips' => 5, 'known' => 14, 'slots' => 7, 'max_slot_level' => 5],
            18 => ['cantrips' => 5, 'known' => 15, 'slots' => 7, 'max_slot_level' => 5],
            19 => ['cantrips' => 6, 'known' => 15, 'slots' => 7, 'max_slot_level' => 5],
            20 => ['cantrips' => 6, 'known' => 16, 'slots' => 7, 'max_slot_level' => 5],
        ]);
        /**
         * 0    => Blade Ward, Chill Touch, Eldritch Blast, Friends, Frostbite, Hex, Infestation, Mage Hand, Magic Stone, Mind Sliver, Minor Illusion, Poison Spray, Prestidigitation, Produce Flame, Sword Burst, Thunderclap, Touch of Death, True Strike
         * 1    => Armor of Frost, Charm, Comprehend Language, Fear, Fleet Step, Hellish Rebuke, Illusory Script, Pain Enhancing Hex, Protection, Shock Bolt, Unseen Servant
         * 2    => Cloud of Daggers, Crown of Madness, Darkness, Enthrall, Hold Person, Invisibility, Mirror Image, Misty Step, Ray of Enfeeblement, Shadow Blade, Shatter, Spider Climb, Suggestion
         * 3    => Dispel Magic, Enemies Abound, Circle of Protection, Fly, Gaseous Form, Hypnotic Pattern, Major Image, Remove Curse, Tongues, Vampiric Touch
         * 4    => Banishment, Blight, Dimension Door, Hallucinatory Terrain
         * 5    => Contact Other Plane, Dream, Enervation, Far Step, Scrying, Wall of Light
         * 6    => Arcane Gate, Create Undead, Dominate, Eyebite, Flesh to Stone, Investiture of Flame, Investiture of Ice, Investiture of Stone, Investiture of Wind, Suggestion, Mind Prison, Scatter, Soul Cage, Summon Fey, True Seeing
         * 7    => Crown of Stars, Dream of the Blue Veil, Etherealness, Finger of Death, Forcecage, Plane Shift, Power Word Pain
         * 8    => Demiplane, Feeblemind, Glibness, Maddening Darkness, Power Word Stun
         * 9    => Astral Projection, Blade of Disaster, Foresight, Imprisonment, Power Word Kill, True Polymorph
         */
    }
}
