<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassBardSeeder extends Seeder
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
        $class->name          = 'Bard';
        $class->type          = 'Base';
        $class->key_attribute = 'CHA';
        $class->hit_dice      = 8;
        $class->weapons       = 'Simple Weapons plus the Hand Crossbow, Longsword, Rapier, Sap, Shortsword, Shortbow, and Whip';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'skill_points'   => 8,
            'skill_progress' => 6,
        ], ['DEX', 'CHA'], [
            'Arcane', 'Bardic Inspiration', 'Spell Pool',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Acrobatics', 'Arcana', 'Concentration', 'Deception', 'Diplomacy', 'Language', 'Lore', 'Performance', 'Society', 'Stealth']
        );

        $feature              = new Feature;
        $feature->key         = 'bardic_inspiration';
        $feature->name        = 'Bardic Inspiration';
        $feature->description = '<ul>
    <li>You can inspire others through stirring words or music. To do so, Spend 1 Spell Point and use an Action on your turn to choose one creature other than yourself within 60 feet of you who can hear you. That creature gains one Bardic Inspiration die, a d6.</li>
    <li>Once within the next 10 minutes, the creature can roll the die and add the number rolled to one ability check, attack roll, or Save it makes. The creature can wait until after it rolls before deciding to use the Bardic Inspiration die, but must decide before the DM says whether the roll succeeds or fails. Once the Bardic Inspiration die is rolled, it is lost. A creature can have only one Bardic Inspiration die at a time.</li>
    <li>Using a musical instrument can count as your Somatic Casting component, as if you had the Combat Casting feat.</li>
</ul>';
        $helper->saveFeature($feature, ['Emotion', 'Bardic Inspiration', 'Auditory']);

        $helper->addFeaturesToClass($class, [
            'spell_pool'         => [2],
            'class_group_feat'   => [3, 4, 6, 7, 9, 10, 12, 13, 15, 16, 18, 19, 20],
            'bardic_inspiration' => [2],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Improved Bardic Inspiration';
        $feat->action_type = 'Action';
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>Your Bardic Inspiration die becomes a D8</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bardic Inspiration']);
        $feat->features()->save(app()->features['bardic_inspiration']);

        $feat              = new Feat;
        $feat->name        = 'Greater Bardic Inspiration';
        $feat->action_type = 'Action';
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>Your Bardic Inspiration die becomes a D10</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bardic Inspiration']);
        $feat->parent_feats()->save(app()->feats['Improved Bardic Inspiration']);

        $feat              = new Feat;
        $feat->name        = 'Master Bardic Inspiration';
        $feat->action_type = 'Action';
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>Your Bardic Inspiration die becomes a D12</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bardic Inspiration']);
        $feat->parent_feats()->save(app()->feats['Greater Bardic Inspiration']);

        $feat              = new Feat;
        $feat->name        = 'Fast Bardic Inspiration';
        $feat->description = '<p>You gain an additional Action. This additional Action can only be used to grant Bardic Inspirations.</p>';
        $helper->addTypesToFeat($feat, ['Bardic Inspiration']);
        $feat->parent_feats()->save(app()->feats['Improved Bardic Inspiration']);

        $feat              = new Feat;
        $feat->name        = 'Blade Muse';
        $feat->description = '<p>You may only have one Bardic Muse feat.</p>
<ul>
    <li>You may now use Bardic Inspiration on yourself</li>
    <li>
        <p>If you hit with a Melee Weapon attack, you may use a Bardic Inspiration to apply the Bardic Inspiration die to the weapon damage and one of the following effects. You may use not use Bardic Inspiration in this more than once per turn.</p>
        <ul>
            <li>You may also add the Bardic Inspiration die to your AC. This bonus to your AC lasts until the beginning of your next turn.</li>
            <li>You may use a Reaction to move up to your Land Speed. This movement does not provoke Attacks of Opportunity.</li>
            <li>If the target is no more than one size larger than you, you may push the target up to 10 feet away from you.</li>
        </ul>
    </li>
    <li>
        <p>You may use Bard feats to take the following feats</p>
        <ul>
            <li>Weapon Finesse</li>
            <li>Stunning Personality</li>
            <li>Beautiful Defense</li>
            <li>Intelligent Strike</li>
            <li>Two-Weapon Fighter</li>
            <li>Improved Two-Weapon Fighter</li>
            <li>Greater Two-Weapon Fighter</li>
        </ul>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bardic Inspiration', 'Bardic Muse']);

        $feat              = new Feat;
        $feat->name        = 'Spellcaster Muse';
        $feat->description = '<p>You may only have one Bardic Muse feat. You trade some of your Bardic Inspiration for more Arcane ability. You gain the following.</p>
<ul>
    <li>You sacrifice 2 uses of your Bardic Inspiration (you never regain them).</li>
    <li>You gain 2 additional Cantrips</li>
    <li>You gain an additional Spell Slot at each level up to 7th.</li>
    <li>You now have an Arcane Spell book, and can memorize Arcane spells from your Spell Book into your extra spell slot.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bardic Inspiration', 'Bardic Muse']);

        $feat              = new Feat;
        $feat->name        = 'Fey Muse';
        $feat->description = "<p>You may use your Bardic Inspiration to cast the following Spells as a Double Action. The spell is automatically Heightened to the highest Spell Level you can cast.</p>
<ul>
    <li>Charm</li>
    <li>Hideous Laughter</li>
    <li>Eagle's Splendor</li>
    <li>Invisibility</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Bardic Inspiration', 'Bardic Muse']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Charm', 'Hideous Laughter'],
            2 => ["Eagle's Splendor", 'Invisibility'],
            4 => ['Blinding Beauty'],
            6 => ['Summon Fey'],
            7 => ['Unearthly Beauty'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Unfailing Inspiration';
        $feat->description = '<p>Your inspiring words are so persuasive that others feel driven to succeed.</p>
<p>When a creature adds one of your Bardic Inspiration dice to its ability check, attack roll or Save and the roll fails, the creature can keep the Bardic Inspiration die.</p>';
        $helper->addTypesToFeat($feat, ['Bardic Inspiration', 'Bardic Muse']);
        $feat->parent_feats()->save(app()->feats['Improved Bardic Inspiration']);

        $feat              = new Feat;
        $feat->name        = 'Expanded Inspirations';
        $feat->description = '<p>You expand your repertoire. You can cast the associated spells in the same way as Bardic Inspiration (requiring 1 Spell Point)</p>';
        $helper->addTypesToFeat($feat, ['Bardic Inspiration', 'Emotion', 'Mental']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Counter Performance', 'Inspire Courage', "Loremaster's Etude"],
            2 => ['Inspire Defense'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Allegro';
        $feat->description = '<p>You can cast the spell associated spells in the same way as Bardic Inspiration (requiring 1 Spell Point), as long as you are high enough level to cast spells of the required Spell Level.</p>';
        $helper->addTypesToFeat($feat, ['Bardic Inspiration', 'Emotion', 'Mental']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Triple Time'],
            3 => ['Haste', 'Slow'],
            6 => ['Allegro'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Dirge and Ballad';
        $feat->description = '<p>You repertoire now includes dirges and ballads and you may cast the associated spells as you would Bardic Inspiration (requiring 1 Spell Point), as long as you are high enough level to cast spells of the required Spell Level.</p>';
        $helper->addTypesToFeat($feat, ['Bardic Inspiration', 'Emotion', 'Mental']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Dirge of Doom', 'Disquietude'],
            3 => ['Haunting Tune'],
            5 => ['Dirge'],
            7 => ['Soothing Ballad'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Mime';
        $feat->description = '<p>You can now cast the spell House of Imaginary Walls in the same way as Bardic Inspiration (requiring 1 Spell Point)</p>';
        $helper->addTypesToFeat($feat, ['Bardic Inspiration', 'Illusion', 'Visual']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Distort Speech', 'Ghostharp'],
            4 => ['House of Imaginary Walls'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Ambient Inspiration';
        $feat->action_type = 'Action';
        $feat->description = '<p>You can perform your Bardic Inspiration such that it is heard as background noise, yet still delivers its effects.</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>Spend 2 Spell Points and at least 1 round Performing your Bardic Inspiration, along with the additional Action required to add this Metamagic effect. Your Bardic Inspiration takes effect, but it sounds like normal background noise (such as the chirping of birds or the croaking of frogs).</li>
    <li>An opponent who suspects something and makes a successful INT Save realizes that the sound has been altered and can hear its true nature.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bardic Inspiration', 'Metamagic']);

        $feat              = new Feat;
        $feat->name        = 'Inspire Heroics';
        $feat->action_type = 'Action';
        $feat->description = "<p>You call upon your muse to greatly increase the benefits you provide with your Inspire Courage or Inspire Defense Inspirations. Use a Verbal Casting Action. If your next Action is to cast Inspire Courage or Inspire Defense, attempt a Performance check. The DC is usually a very hard DC of a level equal to that of the highest-level target of your Inspiration, but the GM can assign a different DC based on the circumstances. The effect of your Inspire Courage or Inspire Defense depends on the result of your check.</p>
<dl>
    <dt>Critical Success</dt> <dd>The status bonus from your Inspire Courage or Inspire Defense increases to +3</dd>
    <dt>Success</dt> <dd>The status bonus from your Inspire Courage or Inspire Defense increases to +2</dd>
    <dt>Failure</dt> <dd>Your Inspire Courage or Inspire Defense provides only its normal bonus of +1, but your don't spend the Spell Point for casting the Bardic Inspiration</dd>
</dl>";
        $helper->addTypesToFeat($feat, ['Bardic Inspiration', 'Metamagic']);
        $feat->parent_feats()->save(Feat::where('name', 'Expanded Inspirations')->first());

        $feat              = new Feat;
        $feat->name        = 'Lingering Inspiration';
        $feat->action_type = 'Action';
        $feat->description = "<p>You add a flourish to your Inspirations to extend its benefits. Use a Verbal Casting Action. If your next Action is to cast a Bardic Inspiration spell with a duration of 1 round, attempt a Performance check. The DC is usually a standard difficulty DC of a level equal to the highest level target of your composition, but the GM can assign a different DC based on the circumstances. The effect depends on the result of your check.</p>
<dl>
    <dt>Critical Success</dt> <dd>The Inspiration spell lasts 4 rounds</dd>
    <dt>Success</dt> <dd>The Inspiration lasts 3 rounds</dd>
    <dt>Failure</dt> <dd>The Inspiration lasts 1 round, but you don't spend the Spell Point for casting the Inspiration spell.</dd>
</dl>";
        $helper->addTypesToFeat($feat, ['Bardic Inspiration', 'Metamagic']);

        $helper->addFeatsToClass($class, [
            'Improved Bardic Inspiration' => 5,
            'Greater Bardic Inspiration'  => 10,
            'Master Bardic Inspiration'   => 15,
            'Fast Bardic Inspiration'     => 7,
            'Blade Muse'                  => 3,
            'Spellcaster Muse'            => 3,
            'Fey Muse'                    => 3,

            'Stubborn'          => 7,
            'Improved Stubborn' => 12,
            'Beautiful Defense' => 5,

            'Find Familiar'    => 4,
            'Enhance Familiar' => 8,

            'Expanded Inspirations' => 2,
            'Allegro'               => 3,
            'Dirge and Ballad'      => 5,
            'Mime'                  => 7,

            'Lingering Inspiration' => 3,
            'Inspire Heroics'       => 7,
        ]);

        $helper->addSpellSlotsToClass($class, [
            1  => ['cantrips' => 2, 'zero' => 4],
            2  => ['cantrips' => 3, 'known' => 5, 'zero' => 4, 'one' => 2],
            3  => ['cantrips' => 3, 'known' => 6, 'zero' => 4, 'one' => 3],
            4  => ['cantrips' => 3, 'known' => 7, 'zero' => 5, 'one' => 4, 'two' => 2],
            5  => ['cantrips' => 4, 'known' => 8, 'zero' => 5, 'one' => 4, 'two' => 3],
            6  => ['cantrips' => 4, 'known' => 9, 'zero' => 5, 'one' => 4, 'two' => 3, 'three' => 2],
            7  => ['cantrips' => 4, 'known' => 10, 'zero' => 5, 'one' => 4, 'two' => 3, 'three' => 3],
            8  => ['cantrips' => 4, 'known' => 11, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 1],
            9  => ['cantrips' => 4, 'known' => 12, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 2],
            10 => ['cantrips' => 5, 'known' => 14, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 1],
            11 => ['cantrips' => 5, 'known' => 15, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2],
            12 => ['cantrips' => 5, 'known' => 16, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
            13 => ['cantrips' => 5, 'known' => 17, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
            14 => ['cantrips' => 5, 'known' => 18, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
            15 => ['cantrips' => 6, 'known' => 19, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
            16 => ['cantrips' => 6, 'known' => 20, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1],
            17 => ['cantrips' => 6, 'known' => 21, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1],
            18 => ['cantrips' => 6, 'known' => 22, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1],
            19 => ['cantrips' => 6, 'known' => 23, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 1, 'seven' => 1, 'eight' => 1],
            20 => ['cantrips' => 6, 'known' => 24, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 2, 'eight' => 1],
        ]);

        $helper->addSpellsToClass($class, [
            0 => ['Accelerated Movement', 'Allegro', 'Arcane Mark', 'Blade Ward', 'Boon', 'Cheat', 'Clean Self', 'Conjure Instrument',
                'Dancing Lights', 'Easy Math', 'Flare', 'Focusing Chant', 'Friends', 'Fine-Tuning', 'Ghost Sound', 'Harmony',
                "Herald's Call", 'Know Direction', 'Light', 'Mage Hand', 'Mending', 'Message', 'Minor Illusion', 'Percussion',
                'Prestidigitation', 'Resistance', 'Rouse', 'Share Talents', 'True Strike', 'Vicious Mockery', ],
            1 => ['Animal Friendship', 'Bane', 'Biting Words', 'Charm Person', 'Choir', 'Command', 'Comprehend Languages',
                'Cure Wounds', 'Detect Charm', 'Detect Ghost', 'Detect Magic', 'Detect Secret Doors', 'Disguise Self',
                'Discern Bloodline', 'Dissonant Whispers', 'Erase', 'Faerie Fire', 'Ghost Pipes', 'Guided Path', 'Harmonic Chorus',
                'Healthful Rest', 'Heartache', 'Heroism', 'Hideous Laughter', 'Hypnotism', 'Instant Diversion', 'Ironthunder Horn',
                'Lively Step', 'Locate City', 'Mimicry', 'Shout', 'Silent Image', 'Sleep', 'Speak with Animals', 'Unseen Servant', ],
            2 => ['Animate Instrument', 'Appraising Eye', "Bear's Endurance", 'Breath of Bewilderment', "Bull's Strength",
                'Calm Emotion', "Cat's Grace", 'Crescendo', 'Dance of Ruin', 'Delay Poison', 'Detect Crossroads', 'Dispel Silence',
                'Dissonant Chant', "Eagle's Splendor", 'Enthrall', 'False Lie', 'Fortissimo', "Fox's Cunning", 'Glossolalia',
                'Grace', 'Hymn of Willpower', 'Insidious Ear Worm', 'Invisibility', 'Knock', 'Levitate', 'Magic Mouth',
                'Mirror Image', 'Misdirection', 'Note', "Owl's Wisdom", 'Painful Echoes', 'Phantasmal Force', 'Shatter',
                'Silence', 'Sonic Burst', "Spymaster's Coin", 'Suggestion', 'Vocalize', 'Zone of Truth', ],
            3 => ['Celebration', 'Crushing Despair', 'Dissonant Chord', 'Drums of War', 'Good Hope', 'Hymn of Praise', 'Hypnotic Pattern',
                'Listening Coin', "Love's Lament", 'Major Image', 'Map', 'Message Link', 'Nondetection', 'Sculpt Sound',
                'Sending', 'Sepia Snake Sigil', 'Tongues', ],
            4 => ['Battle Song', 'Compulsion', 'Confusion', 'Dancing Sword', 'Deafening Blast', 'Follow the Leader', 'Freedom of Movement',
                'Fugue', "Heaven's Trumpet", 'Incite Riot', 'Interminable Echo', 'Journal', 'Know Vulnerabilities', 'Lingering Chorus',
                'Pacification', 'Secure Shelter', ],
            5 => ['Cacophony Burst', 'City Stride', 'Dream', 'Harmonic Void', 'Joyful Rapture', 'Legend Lore', 'Mislead',
                'Modify Memory', 'Song of Discord', ],
            6 => ['Chronicle', 'Dominate', 'Fanfare', 'Hindsight', 'Irresistible Dance', 'Pied Piping', 'Programmed Illusion',
                'Rapture of the Deep', 'Teleport', ],
            7 => ['Dream of the Blue Veil', 'Great Shout', 'Power Word Pain', 'Project Image'],
            8 => ['Antipathy / Sympathy', 'Feeblemind', 'Glibness', 'Power Word Heal', 'Power Word Stun'],
            9 => ['Power Word Kill'],
        ]);
    }
}
