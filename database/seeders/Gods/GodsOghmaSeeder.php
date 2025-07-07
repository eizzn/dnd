<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsOghmaSeeder extends Seeder
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

        $god              = new God;
        $god->name        = 'Oghma';
        $god->level       = 'Greater';
        $god->description = '';
        $god->save();
        $oghma = $god;
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'The Binder, The Binder of What is Known, Patron of Bards, Lord of Knowledge, The Wise God',
            'level'          => 'Greater',
            'portfolio'      => 'Bards, inspiration, invention, knowledge',
            'regions'        => 'Dalelands, the North, the Shaar, Silverymoon, Western Heartlands',
            'alignment'      => 'N',
            'symbol'         => 'A blank scroll',
            'favored_weapon' => 'Mortal Strike (longsword)',
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Oghma';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple weapons plus two choice';
        $class->armors        = 'Light Armor, Light Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 4,
        ], ['WIS', 'CHA'], [
            'Divine',
        ]);
        $helper->addClassesToGod($god, 'Faeruneon', [
            'Bard'   => 25,
            'Wizard' => 15,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Bard',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Athletics', 'Concentration', 'Diplomacy', 'Medicine', 'Performance', 'Religion']
        );
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [3, 9, 15, 18, 20],
            'skill_feat'  => [1, 6, 12],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'meta' => 'Scribe Scroll']);
        $helper->addDomainToClass($class, ['Knowledge', 'Travel']);
        $helper->addSpellsToClass($class, [
            0  => ['Allegro', 'Clean Self', 'Conviction', 'Detect Magic', 'Easy Math', 'Fine-Tuning', 'Focusing Chant',
                'Ghost Sound', 'Harmony', 'Note', 'Percussion', 'Stabilize', 'Vicious Mockery', ],
            1  => ['Choir', 'Cure Wounds', 'Biting Words', 'Detect Alignment', 'Disquietude', 'Ghost Pipes', 'Identify',
                'Map', "Scholar's Touch", 'Shout', ],
            2  => ['Augury', 'Comprehend Language', 'Crescendo', 'Dissonant Chant', 'Divine Insight', 'Find Traps', 'Fortissimo',
                'Glossolalia', 'Harmonic Chorus', 'Insignia of Alarm', 'See Invisibility', 'Journal', 'Vocalize', ],
            3  => ['Clairvoyance', 'Dissonant Chord', 'Drums of War', 'Insignia of Blessing', 'Hymn of Praise', 'Insignia of Healing',
                'Interplanar Message', 'Invisibility Purge', 'Power Word Deafen', 'Sending', 'Undead Bane Weapon', ],
            4  => ['Arcane Eye', 'Battle Song', 'Chronicle', 'Commune with Texts', 'Deafening Blast', 'Detect Scrying', 'Divination',
                'Lingering Chorus', ],
            5  => ['Atonement', 'Cacophony Burst', 'Commune', 'Harmonic Void', 'Joyful Rapture', 'Legend Lore', 'Scrying'],
            6  => ['Fanfare', 'Pied Piping', 'True Seeing'],
            7  => ['Great Shout', 'Power Word Blind', 'Power Word Pain'],
            8  => ['Discern Location', 'Power Word Heal', 'Power Word Stun'],
            9  => ['Foresight', 'Power Word Kill'],
            10 => ['Gate', 'Miracle'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Oghma's favour is given to those who have dedicated their life not only to learning, but to making that learning accessible to others. In Oghma’s eyes, the act of teaching is sacred and fundamental to a just society.</p>
<p>Oghma's scions are frequently studious types, but also comprise skilled orators and dastardly playwrights.</p>
<ol>
    <li>You learned to read when you were two. You've read everything you ever came across</li>
    <li>You are a worldwide famous poet, though you write under a pseudonym and people rarely believe you</li>
    <li>You know an awful, unspeakable truth, and Oghma has charged you as its sole keeper</li>
    <li>You once riddled with a sphinx, and came away with your life</li>
    <li>You might be the only person in the world who cares about your very niche area of specialism. Well, you and Oghma. He cares too.</li>
    <li>You've been a teacher all your days. Apparently it was an act of worship all along. You don't feel holy. Just tired</li>
</ol>",
            'devotion' => "<p>Following Oghma means dedicating yourself to learning. As a follower of Oghma, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Knowledge</dt> <dd>I can't go a day without learning something new</dd>
    <dt>Stewardship</dt> <dd>I must protect what I know from those who would try to abuse it</dd>
    <dt>Excellence</dt> <dd>I desire to be the most knowledgeable expert in my field the world has ever seen</dd>
    <dt>Tutelage</dt> <dd>I really want to talk about my specialism. This shouldn't take more than a few hours. Wait, why are you running away?</dd>
    <dt>Logic</dt> <dd>With enough facts, I can work out the correct answer to any problem in this world</dd>
</dl>",
            'earn_piety' => [
                'You write a new book, poem, or text',
                'You teach another creature something new',
                'You uncover a lie and expose it to the truth',
            ],
            'lose_piety' => [
                'Hiding knowledge from another creature for any reason',
                'Destroying a book or text',
            ],
            'piety3' => '<h4>Favored God: Oghma</h4>
<p>You gain Inspiration when you relate a helpful story or anecdote relevant to the encounter at hand</p>',
            'piety10' => '<h4>Adaptable Knowledge</h4>
<p>Choose a skill not linked to INT. You may now use INT to calculate your ability score bonus for that skill instead of the normal ability</p>',
            'piety25' => '<h4>Memories From a Past Life</h4>
<p>When you fail an INT based ability check, you instead suddenly become aware of a piece of related trivia</p>',
            'piety50' => '<h4>Chosen of Oghma</h4>
<p>You can spend an Inspiration to cast Legend Lore as a Ritual with this trait, requiring no components. Once you cast the spell in this way, you can\'t do so again until you finish a long rest. INT is your spellcasting ability for this spell.</p>',
        ]);

        /**********************************************************************/

        $god              = new God;
        $god->name        = 'Gond';
        $god->level       = 'Lesser';
        $god->description = '';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Holy Maker of All Things, Inspiration Divine, Lord of All Smiths, Wonderbringer',
            'aliases'        => 'Nebelun (Gnomes), Zionil (in the Shining Lands)',
            'level'          => 'Lesser',
            'portfolio'      => 'Artifice, Construction, Craft, Smithwork',
            'regions'        => 'Lantan, Silverymoon, Amn, Tethyr, Calimshan',
            'alignment'      => 'N',
            'symbol'         => 'Toothed cog with four spokes',
            'favored_weapon' => 'Craftmaster (warhammer)',
            'master_id'      => $oghma->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Gnome'], [
            'name'           => 'Nebelun',
            'title'          => 'Wonderbringer',
            'level'          => 'Demi',
            'portfolio'      => 'Invention, Construction, Luck',
            'alignment'      => 'N',
            'symbol'         => 'Toothed cog with four spokes',
            'favored_weapon' => 'Warhammer',
            'master_id'      => God::where('name', 'Garl Glittergold')->first()->id,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Artificer', 'Rogue',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Priest of Gond';
        $feat->requirement = 'Gond must be your Patron Deity';
        $feat->description = '<p>You may have no more than 3 Artificer Discipline feats.</p>
<p>You are a member of the clergy of Gond. You gain the following.</p>
<ul>
    <li>Increase the number of Known Cantrips by 1</li>
    <li>
        <p>At each Spell Level, you are able to cast an additional Spell</p>
        <blockquote>
            Ex. A 7th level Artificer takes this feat and becomes a Priest of Gond. He now memorizes 4 Cantrips, cast two 1st level Spell per day, cast one 2nd level Spell per day, and cast one 3rd level Spell per day.
        </blockquote>
    </li>
    <li>You also gain an Additional Spell List from this feat. These Spells are Divine in nature and must be prayed for just like a normal Priest. You may only memorize 1 spell per Spell Level with the exception of Cantrips.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Artificer Discipline', 'Divine']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Guidance', 'Mold Metal', 'Stabilize'],
            1 => ['Bless', 'Cure Wounds', 'Fabricate', 'Forge Fire'],
            2 => ['Find Traps', 'Imbue with Cold Iron', 'Imbue with Silvered', 'Insignia of Alarm', 'Resist Elements'],
            3 => ['Elemental Weapon', 'Ghost Touch', 'Insignia of Blessing', 'Insignia of Healing', 'Shrink Item', 'Undead Bane Weapon'],
            4 => ['Creation', 'Shape Metal'],
            5 => ['Atonement', 'Brilliant Weapon', 'Holy Weapon'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Improved Priest of Gond';
        $feat->description = '<p>You may have no more than 3 Artificer Discipline feats.</p>
<p>You gain the following</p>
<ul>
    <li>You gain an Artificer Discipline feat. This additional feat does not count towards your 3 Artificer Discipline feat limit.</li>
    <li>You gain a +3 bonus to all Crafting Skill checks</li>
    <li>You can Attune to an additional magic item</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Artificer Discipline', 'Divine']);
        $helper->addSpellsToFeat($feat, [
            0  => ['Easy Math'],
            2  => ['Make Whole'],
            3  => ['Divine Purpose'],
            4  => ['Brilliant Weapon'],
            5  => ['True Creation'],
            6  => ['Hold Metal'],
            8  => ['Disjunction', 'Iron Body'],
            9  => ['Remake'],
            10 => ['Genesis'],
        ]);
        $feat->parent_feats()->save(app()->feats['Priest of Gond']);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Gnome']->id,
            'favor'       => "<p>Gond's favour falls on a wide array of craftsmen and industrial powers. Gond loves those who innovate, but also loves those who dedicate themselves to the perfection of any mundane craft. In this way, a barrel maker can be the equal of an inventor in his eyes.</p>
<p>Gond's scions tend to hail from cities and hubs of civilisation, where the resources and opportunities for great works of craft are more common, and often center their personalities around their incredible worth ethic.</p>
<ol>
    <li>You invented something unique and incredible</li>
    <li>You were raised by a cult of religiously obsessed rock gnomes who believe you are the Chosen One</li>
    <li>Your lost part of your body in an accident, and replaced it with a clockwork wonder</li>
    <li>People seek you out across the land for your beautiful or skilled craftsmanship in a particular trade</li>
    <li>Gond blessed yo in a dream with schematics for a device ... but you don't know what it does</li>
    <li>You created a machine which came alive. You have no idea where it is now, but you suspect it may have malign intent</li>
</ol>",
            'devotion' => '<p>Following Gond means dedicating yourself to your craft. As a follower of Gond, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Excellence</dt> <dd>Each creation is a chance to reach new heights of skill and beauty</dd>
    <dt>Community</dt> <dd>My work is for the betterment of us all</dd>
    <dt>Change</dt> <dd>Technology and innovation can change the world in ways we might never dream of</dd>
    <dt>Wealth</dt> <dd>This profession will make me filthy rich</dd>
    <dt>Civilisation</dt> <dd>Each and every invention is a step upwards for our civilisation as a whole</dd>
</dl>',
            'earn_piety' => [
                'Inventing a new object or device',
                'Fixing or maintaining an important object or device',
                'Creating something (however small) that has an emotional meaning to you or your companions',
            ],
            'lose_piety' => [
                'Deliberately obstructing progress or invention',
                'Going for an extended period of time without engaging in an act of creation',
            ],
            'piety3' => '<h4>Favored God: Gond</h4>
<p>You gain Inspiration when you successfully craft a sentimental item for another character or NPC</p>',
            'piety10' => '<h4>Something I Made Earlier</h4>
<p>You may use an Action to reach into your belongings and produce an item worth less than 25 gp you could have made with any artisans tool you are proficient in. You must finish a Long Rest before using this feature again</p>',
            'piety25' => '<h4>Craftsman Needs no Sleep</h4>
<p>You may craft through a long rest and still gain benefit from the rest</p>',
            'piety50' => "<h4>Chosen of Gond</h4>
<p>You can spend an Inspiration to cast Fabricate with this trait, requiring no material components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. INT is your spell casting ability for this spell.</p>",
        ]);

        /**********************************************************************/

        $god              = new God;
        $god->name        = 'Deneir';
        $god->level       = 'Lesser';
        $god->description = '';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Lord of All Glyphs and Images, The Scribe of Oghma, The First Scribe',
            'level'          => 'Lesser',
            'portfolio'      => 'Cartography, Glyphs, Images, Literature, Scribes',
            'regions'        => 'Cormyr, The North, Sembia, Silverymoon, Western Heartlands',
            'alignment'      => 'N',
            'symbol'         => 'Lit candle above purple eye with triangular pupil',
            'favored_weapon' => 'A whirling glyph (dagger)',
            'master_id'      => $oghma->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Deneir';
        $class->type          = 'Priest';
        $class->key_attribute = 'INT or WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Light Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 4,
        ], ['INT', 'WIS'], [
            'Divine', 'Skill',
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Wizard', 'Monk',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Medicine', 'Performance', 'Religion']
        );

        $feature              = new Feature;
        $feature->key         = 'any_scroll';
        $feature->name        = 'Master of Scrolls';
        $feature->description = '<p>You have to ability to cast spells from scrolls even if the spell is not on your Spell List.</p>
<p>You can also create a Scroll using your Scribe Scroll feat of any spell, even if the spell is not on your Spell List. Spells that are not on your Spell List must be kept in written form somewhere (like a SpellBook). The maximum Spell Level that you can scribe for spells that are not on you Spell List is one level less than the maximum Spell Slot you have.</p>';
        $helper->saveFeature($feature, ['Scroll']);

        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 6, 9, 12, 15, 18, 20],
            'skill_feat'  => [1, 3, 9, 15],
            'any_scroll'  => [3],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'meta' => 'Scribe Scroll']);
        $helper->addDomainToClass($class, ['Knowledge', 'Rune']);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Conviction', 'Detect Magic', 'Message', 'Stabilize', 'Word of Radiance'],
            1 => ['Biting Words', 'Comprehend Language', 'Cure Wounds', 'Illusory Script', "Scholar's Touch"],
            2 => ['Amanuensis', 'Glyph of Revealing', 'Hypercognition', 'Magic Mouth', 'Power Word Sleep', 'Secret Page'],
            3 => ['Commune with Texts', 'Explosive Runes', 'Glyph of Warding', 'Interplanar Message', 'Sending', 'Speak with Dead',
                'Suppress Magical Writings', 'Tongues', 'Undead Bane Weapon', ],
            4 => ['Ceremony', 'Divination'],
            5 => ['Atonement', 'Planar Binding', 'Rune of Returning'],
            6 => ['Legend Lore', 'Symbol'],
            7 => ['Divine Word', 'Holy Word', 'Power Word Blind', 'Power Word Pain'],
            8 => ['Power Word Heal', 'Power Word Stun'],
            9 => ['Power Word Kill'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Deneir's favour is given to those who prize not just the word, but the act of placing word to paper. It is this immortalizing of knowledge which separates Deneir from Oghma, god of knowledge.</p>
<p>Deneir's scions usually manifest in schools, libraries, art colleges and so on, though in a world as dangerous as Faerun the definition of a job like archivist can vary wildly from place to place.</p>
<ol>
    <li>You penned a great work of art, literature or poetry</li>
    <li>You are the caretaker of an important or specialised library</li>
    <li>You saved a noteworthy text from destruction</li>
    <li>You rediscovered up a forgotten book, lost to time</li>
    <li>You are the single expert in a very niche field</li>
    <li>You are the sole keeper of a terrible secret</li>
</ol>",
            'devotion' => '<p>Following Deneir means dedicating yourself to the written word. As a follower of Deneir, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Excellence</dt> <dd>To create a work of art is the highest purpose there is</dd>
    <dt>Knowledge</dt> <dd>I hunger for new books. It consumes me</dd>
    <dt>Immortality</dt> <dd>The art you leave behind you is the only way to truly live forever</dd>
    <dt>Wealth</dt> <dd>Control of books and art is a gateway to incredible good fortune</dd>
    <dt>Civilisation</dt> <dd>Stories and books are a sacred link to our history, they must be protected</dd>
</dl>',
            'earn_piety' => [
                'Penning a new book or work of art',
                'Preventing the destruction of the same',
                'Translating or uncovering a truly lost work of art',
            ],
            'lose_piety' => [
                'Destroying books or works of art',
            ],
            'piety3' => '<h4>Favored God: Deneir</h4>
<p>You gain Inspiration when you scribe a document, or create a lasting work of art</p>',
            'piety10' => '<h4>Words Catching Like Fire</h4>
<p>You learn an additional language of your choice</p>',
            'piety25' => '<h4>Cunning Scribe</h4>
<p>Even if you do not share a language with a creature, as long as they possess at least one language they will understand your writing</p>',
            'piety50' => '<h4>Chosen of Deneir</h4>
<p>You can spend an Inspiration to cast Glyph of Warding with this trait, requiring no material components. Once you cast the spell in this way, you can\'t do so again until you finish a long rest. WIS is your spellcasting ability for this spell. You can only use this spell to kill humanoid creatures</p>',
        ]);

        /**********************************************************************/

        $god              = new God;
        $god->name        = 'Milil';
        $god->level       = 'Demi';
        $god->description = '';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Lord of Song, Lord of all Song, Guardian of Singers and Troubadours, One Who Watches While Music is Alive, One True Hand of All-Wise Oghma',
            'aliases'        => "Ri'dae'mila",
            'level'          => 'Demi',
            'portfolio'      => 'Song, Poetry, Eloquence',
            'alignment'      => 'NG',
            'symbol'         => 'Five-stringed harp made of silver leaves',
            'favored_weapon' => 'Sharptongue (rapier)',
            'master_id'      => $oghma->id,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Bard',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Sorlyn';
        $feat->requirement = 'You must be Good and Milil must be your Patron Deity';
        $feat->description = '<p>You dedicate yourself into the worship of Milil, serving as his clergy. The spells you gain are in addition to your known spells limit.</p>';
        $helper->addTypesToFeat($feat, ['Bardic Inspiration', 'Bardic Muse']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Conviction', 'Ghost Sound', 'Stabilize', 'Word of Radiance'],
            1 => ['Vocalize'],
            2 => ['Cure Wounds', 'Insignia of Alarm', 'Interplanar Message', 'Power Word Sleep', "Scholar's Touch"],
            3 => ['Insignia of Blessing', 'Insignia of Healing', 'Revivify', 'Undead Bane Weapon'],
            4 => ['Divination'],
            5 => ['Atonement'],
        ]);

        /**********************************************************************/

        $god              = new God;
        $god->name        = 'Waukeen';
        $god->level       = 'Lesser';
        $god->description = '';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => "Liberty's Maiden, The Golden Lady, Merchantsfriend, Merchant's Friend, Our Lady of Gold, The Coinmaiden",
            'level'          => 'Lesser',
            'portfolio'      => 'Trade, money, wealth',
            'regions'        => 'Amn, Chessenta, Cormyr, Impiltur, Sembia, Tashalar, Thesk, The Vast',
            'alignment'      => 'N',
            'symbol'         => "Gold coin with Waukeen's profile facing left",
            'favored_weapon' => 'Cloud of coins (nunchaku)',
            'master_id'      => $oghma->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Goldeye';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS or CHA';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 4,
            'skill_progress' => 2,
        ], ['WIS', 'CHA'], [
            'Divine', 'Rogue', 'Skill',
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Rogue',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Arcana', 'Concentration', 'Diplomacy', 'Religion']);
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 3, 6, 9, 12, 15, 18, 20],
            'skill_feat'  => [1, 3, 9, 15],
        ]);
        $helper->addDomainToClass($class, ['Knowledge', 'Protection', 'Travel', 'Trade']);
        $helper->addSpellsToClass($class, [
            0 => ['Bit of Luck', 'Clean Self', 'Conviction', 'Easy Math', 'Friends', 'Guidance', 'Identify', 'Light', 'Mage Hand',
                'Mending', 'Soft Landing', 'Stabilize', ],
            1 => ['Alarm', 'Appraising Eye', 'Bless', 'Charm', 'Cure Wounds', 'Treasure Scent', 'Unseen Servant'],
            2 => ['Augury', 'Comprehend Language', "Eagle's Splendor", 'Find Traps', 'Magic Mouth', 'See Invisibility',
                'Suggestion', 'Zone of Truth', ],
            3 => ['Clairvoyance', 'Comprehension', 'Dispel Magic', 'Listening Coin', 'Undead Bane Weapon'],
            4 => ['Ceremony', 'Divination', 'Tongues', 'True Form'],
            5 => ['Atonement', 'Commune', 'Legend Lore'],
            6 => ['Glassee', 'Teleport', 'True Seeing'],
            7 => ['Dimensional Lock'],
        ]);
        $helper->addSpellSlotsToClass($class, 'seven');

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Waukeen cares primarily for anything that increases the flow of money and trade between cities and countries. Waukeen's influence is directly spread by diplomatic relations and trade networks, and she chooses champions who can best aid her in this regard.</p>
<p>Waukeen's scions are usually gregarious and generous, as Waukeen frowns on misers and hoarders. They number amongst them traders and artisans, but also diplomats and negotiators.</p>
<ol>
    <li>You've donated so much money to the city they've raised a statue in your name</li>
    <li>You founded a business that operates worldwide</li>
    <li>You negotiated a groundbreaking trade agreement</li>
    <li>You were found in the woods and raised by a trio of gold eating badgers called Aurumvorax</li>
    <li>You inherited a huge fortune in gold from your parents, alas held in escrow due to legal concerns about how it was obtained</li>
    <li>You were the leader of a local guild until very recently</li>
</ol>",
            'devotion' => "<p>Following Waukeen means dedicating your life to gold and commerce. As a follower of Waukeen, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Civilisation</dt> <dd>Without money and trade, we're just animals</dd>
    <dt>Wealth</dt> <dd>I know I'm not supposed to, but I love curling up on all my profits like a little dragon</dd>
    <dt>Power</dt> <dd>It's amazing what people will do for gold. It's like magic. Hell, It's better than magic</dd>
    <dt>Pragmatism</dt> <dd>Money gets things done, so I look after the money. It's nothing more than that</dd>
    <dt>Freedom</dt> <dd>Gold allows me to be free from debts and fealty to others</dd>
</dl>",
            'earn_piety' => [
                'Encouraging trade between two willing parties',
                'Paying fair wages for honest work',
                'Buying and selling items of note',
                'Making monetary donations to worthy causes',
            ],
            'lose_piety' => [
                'Hoarding wealth and refusing to spend it',
                'Obstructing trade between consenting parties',
            ],
            'piety3' => '<h4>Favored God: Waukeen</h4>
<p>You gain Inspiration when you make a good deal, pay a wage or finalize a transaction of any kind</p>',
            'piety10' => '<h4>Cash Cow</h4>
<p>When you reduce a creature to 0 Hit Points, it drops a number of gold pieces equal to its CR (round down)</p>',
            'piety25' => '<h4>Peculated Powers</h4>
<p>You and your allies within 30 feet of you can substitute any costly material component needed to cast a spell for its worth in gold pieces</p>',
            'piety50' => '<h4>Chosen of Waukeen</h4>
<p>You can spend an Inspiration to cast Sympathy with this trait, which must be cast on a coin. Once you cast the spell in this way, you can\'t do so again until you finish a long rest. CHA is your spellcasting ability for this spell. You can only use this spell to kill humanoid creatures</p>',
        ]);
    }
}
