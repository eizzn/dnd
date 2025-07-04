<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsMystraSeeder extends Seeder
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

        $god        = new God;
        $god->name  = 'Mystra';
        $god->level = 'Greater';
        $god->save();
        $mystra = $god;
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'      => $god->name,
            'title'     => 'The Lady of Mysteries, The Mother of All Magic, Mistress of Magic, Our Lady of Spells, The Mother of Mystery, Lady Magic, Lady of Magic, Lady of Might, One True Spell, Goddess of Magic, Derogatory: The Whore, The Harlot',
            'level'     => 'Greater',
            'portfolio' => 'Magic, spells, the weave',
            'regions'   => 'Halruaa, the North, Rashemen, Sembia, Silverymoon, the Vast',
            'alignment' => 'LN',
            'symbol'    => 'Blue-white star',
        ]);

        $class                = new Klass;
        $class->name          = 'Dweomerkeepers';
        $class->key_attribute = 'INT or WIS';
        $class->weapons       = 'Club, Dagger, Heavy Crossbow, Light Crossbow, Staff';
        $class->has_spells    = 1;
        $class->description   = '<p>Priests of Mystra</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 2,
            'skill_progress' => 3,
        ], ['INT', 'WIS'], [
            'Divine',
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Paladin', 'Wizard', 'Sorcerer', 'Spellthief',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Arcana', 'Concentration', 'Religion']);
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [3, 9, 15, 20],
            'wizard_feat' => [1, 6, 12, 18],
            'spell_pool'  => [2],
        ]);
        $class->features()->save(app()->features['extra_spells'], [
            'level' => 1,
            'meta'  => 'You may memorize arcane spells as a Wizard but at one spell level higher',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 3,
            'meta'  => 'Activate Magic Item',
        ]);
        $helper->addDomainToClass($class, ['Magic']);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Dancing Light', 'Daze', 'Detect Magic', 'Disrupt Undead', 'Electric Arc', 'Light', 'Mage Hand',
                'Magic Weapon', 'Message', 'Prestidigitation', 'Produce Flame', 'Shield', 'Stabilize', ],
            1 => ['Bless', 'Burning Hands', 'Charm', 'Command', 'Create Water', 'Cure Wounds', 'Detect Alignment', 'Detect Poison',
                'Feather Fall', 'Lock', 'Mage Armor', 'Mending', 'Protection From Chaos', 'Protection From Evil', 'Protection From Good',
                'Protection From Law', 'Resist Planar Alignment', 'Remove Disease', 'Summon Elemental, Lesser', 'Unseen Servant', ],
            2 => ['Augury', 'Continual Flame', 'Create Food and Water', 'Darkvision', 'Endure Elements', 'Enlarge', 'Flaming Sphere',
                'Insignia of Alarm', 'Interplanar Message', 'Knock', 'Magic Mouth', 'Mirror Image', 'Remove Fear', 'Resist Energy',
                'Silence', 'Spectral Hand', 'Status', 'Telekinetic Maneuver', 'Water Walk', "Bear's Endurance", "Bull's Strength",
                "Eagle's Splendor", "Fox's Cunning", "Owl's Wisdom", 'Resist Elements', ],
            3 => ['Bind Undead', 'Clairvoyance', 'Circle of Protection From Chaos', 'Circle of Protection From Evil', 'Circle of Protection From Good',
                'Circle of Protection From Law', 'Copy Spell', 'Diamond Spray', 'Dispel Magic', 'Forceward', 'Insignia of Blessing',
                'Invisibility', 'Invisibility Purge', 'Levitate', 'Neutralize Poison', 'Nondetection', 'Rend Shadow Weave',
                'Secret Page', 'Spell Shield', 'Undead Bane Weapon', ],
            4 => ['Blink', 'Dimensional Anchor', 'Detect Scrying', 'Fly', 'Globe of Invulnerability', 'Hallucinatory Terrain',
                'Haste', 'Mantle of Mystra', 'Mystic Aegis', 'Remove Curse', 'Slow', 'Spell Immunity', 'Spell Matrix', 'Stars of Mystra',
                'Telepathy', 'Warp and Weave', ],
            5  => ['Atonement', 'Banishment', 'Might of Mystra', 'Planar Adaption', 'Resilient Sphere', 'Revelation', 'Sending',
                'Summon Elemental', 'Telepathic Bond', 'Tongues', 'Wall of Dispel Magic', ],
            6  => ['Antimagic Ray', 'Scrying', 'Teleport', 'True Seeing'],
            7  => ['Contingency', 'Crown of Stars', 'Dimensional Lock', 'Plane Shift', 'Raise Dead', 'Regenerate', 'Renewal Pact',
                'Spell Turning', ],
            8  => ['Antimagic Field', 'Holy Stars of Mystra', 'Spell Engine'],
            9  => ['Absorption', 'Alter Lifeline', 'Disjunction', 'Effulgent Epuration', 'Spell Shift'],
            10 => ['Gate', 'Miracle'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $feat              = new Feat;
        $feat->name        = 'Knights of the Mystic Fire';
        $feat->requirement = 'Paladin of Mystra';
        $feat->description = '<p>You are a Paladin of Mystra.</p>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Detect Magic', 'Light', 'Prestidigitation', 'Shield', 'Stabilize', 'Thaumaturgy'],
            1 => ['Detect Alignment', 'Divine Smite', 'Identify', 'Mage Armor', 'Heroism'],
            2 => ['Aura of Hope', 'Aura of the Fox', 'Branding Smite', 'Create Food and Water', 'Daylight', 'Diamond Spray',
                'Insignia of Alarm', 'Invisibility Purge', 'Magic Missile', 'Remove Curse', 'Restoration', 'Resist Elements',
                'Undead Bane Weapon', ],
            3 => ['Circle of Protection From Evil', 'Circle of Protection From Good', 'Forceward', 'Insignia of Blessing',
                'Lightning Bolt', 'Redirect Spell', 'Rend Shadow Weave', 'Spell Shield', ],
            4 => ['Globe of Invulnerability', 'Mystic Aegis', 'Spell Matrix', 'Stars of Mystra'],
            5 => ['Antimagic Ray', 'Aura of Power', 'Wall of Dispel Magic'],
        ]);

        // TODO: add wizard feat that grants the spell Rend Shadow Weave. focused on devotion to Mystra

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Mystra's favour is given to those with innate power such as sorcerers, or those learned arcanists who show incredible potential and growth. Mystra works to shepherd these dangerous people into situations that will provoke them to use and develop their powers.</p>
<p>Mystra's scions are varied in origin and temperament, united mainly by a gift for the Art magic.</p>
<ol>
    <li>Your magical gift destroyed your home before you got it under control</li>
    <li>You are a magical prodigy, inventing a new spell by the age of five</li>
    <li>You are descended from a being of magical might</li>
    <li>You bumped into Elminster once. Literally. Maybe some that magic rubbed off on you</li>
    <li>Someone cast a spell on you in your earliest youth, and it never quite washed out</li>
    <li>You have no idea why Mystra favours you - you are singularly incompetent in the Art</li>
</ol>",
            'devotion' => "<p>Following Mystra means dedicating yourself to magic. As a follower of Mystra, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Excellence</dt> <dd>Every spell I cast must be perfect</dd>
    <dt>Mystery</dt> <dd>I love magic not because of the answers it gives me, but because of the questions it poses</dd>
    <dt>Power</dt> <dd>Magic allows me to control things. I crave control</dd>
    <dt>Tutelage</dt> <dd>For the Art to flourish, some of us must dedicate our lives to teaching others</dd>
    <dt>Passion</dt> <dd>The world feels alive when I am using magic. It's addictive and tempting</dd>
</dl>",
            'earn_piety' => [
                'Using a new spell or ritual to solve a problem',
                'Encouraging the use of magic in others that fear or resent it',
                'Using magic to improve the world for the better',
            ],
            'lose_piety' => [
                'Repressing or ignoring your magic in favor of other solutions',
                'Bringing the reputation of magic into ill repute',
            ],
            'piety3' => '<h4>Favored God: Mystra</h4>
<p>Choose a spell you know. You gain Inspiration when you cast it with a spell slot</p>',
            'piety10' => '<h4>Magical Prodigy</h4>
<p>Choose a spell you know. You can cast it as if you had applied the Eschew Materials Metamagic feat</p>',
            'piety25' => '<h4>Kindred Spirits</h4>
<p>You gain an extra spell slot upon finishing a Long Rest. This Spell Slot is equal to the highest level you are able to cast</p>',
            'piety50' => "<h4>Chosen of Mystra</h4>
<p>Mystra bestows on you the gift of Spellfire, a silvery force of ghostly flame that you may invoke to perform great feats of magic. You may spend an Inspiration to summon the Spellfire and cast one of its spells.</p>
<ul>
    <li>Fireball</li>
    <li>Cure Wounds (5th level)</li>
    <li>Revivify</li>
    <li>Flight</li>
</ul>
<p>Once the Spellfire has been used to cast a spell, it can't be used to cast that spell again. When you have cast all the spells, the list resets. The spells use your spellcasting ability and spell save DC.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Azuth';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'High One, Patron of Wizards, Patron of Mages, Lord of Spells, Hand of Sorcery, Lord of Spellcraft, The First Magister',
            'level'          => 'Lesser',
            'portfolio'      => 'Wizards, mages, spellcasters',
            'regions'        => 'Calimshan, Chessenta, Halruaa, Lantan, Sembia',
            'alignment'      => 'LN',
            'symbol'         => 'Human left hand pointing upward outlined in blue fire.',
            'favored_weapon' => 'Old Staff (quarterstaff)',
            'master_id'      => $mystra->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Azuth';
        $class->key_attribute = 'INT or WIS';
        $class->weapons       = 'Club, Dagger, Heavy Crossbow, Light Crossbow, Staff';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 2,
            'skill_progress' => 2,
        ], ['INT', 'WIS'], [
            'Divine', 'Arcane', 'Evocation',
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Wizard'   => ['level' => 25, 'meta' => 'Evocation'],
            'Archmage' => 5,
            'Sorcerer' => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Wizard' => ['meta' => 'Evocation'], 'Monk', 'Enlightened Fist',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Arcana', 'Concentration', 'Religion']);
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [3, 9, 15, 20],
            'wizard_feat' => [1, 6, 12, 18],
        ]);
        $class->features()->save(app()->features['extra_spells'], [
            'level' => 1,
            'meta'  => 'You may memorize arcane spells as a Wizard but at one spell level higher',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 3,
            'meta'  => 'Activate Magic Item',
        ]);
        $helper->addDomainToClass($class, ['Magic']);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Dancing Light', 'Daze', 'Detect Magic', 'Electric Arc', 'Light', 'Mage Hand', 'Magic Weapon',
                'Message', 'Prestidigitation', 'Produce Flame', 'Radiant Mark', 'Shield', 'Stabilize', ],
            1 => ['Bane', 'Bless', 'Magic Missile', 'Protection From Chaos', 'Protection From Evil', 'Protection From Good',
                'Protection From Law', 'Remove Disease', ],
            2 => ['Cure Wounds', "Bear's Endurance", "Bull's Strength", "Eagle's Splendor", "Fox's Cunning", "Owl's Wisdom",
                'Resist Elements', ],
            3 => ['Bind Undead', 'Circle of Protection From Chaos', 'Circle of Protection From Evil', 'Circle of Protection From Good',
                'Circle of Protection From Law', 'Clairvoyance', 'Copy Spell', 'Dispel Magic', 'Interplanar Message', 'Invisibility',
                'Invisibility Purge', 'Levitate', 'Neutralize Poison', 'Nondetection', 'Rend Shadow Weave', 'Secret Page',
                'Spell Shield', ],
            4 => ['Blink', 'Dimensional Anchor', 'Detect Scrying', 'Fireball', 'Fly', 'Globe of Invulnerability', 'Hallucinatory Terrain',
                'Haste', 'Lightning Bolt', 'Mantle of Mystra', 'Mystic Aegis', 'Remove Curse', 'Slow', 'Spell Immunity',
                'Spell Matrix', 'Telepathy', 'Warp and Weave', ],
            5  => ['Atonement', 'Banishment', 'Planar Adaption', 'Resilient Sphere', 'Sending', 'Telepathic Bond', 'Tongues'],
            6  => ["Azuth's Exalted Triad", 'Scrying', 'Teleport', 'True Seeing', 'Wall of Dispel Magic'],
            7  => ['Antimagic Ray', 'Contingency', 'Dimensional Lock', 'Plane Shift', 'Regenerate', 'Spell Turning'],
            8  => ['Antimagic Field', 'Spell Engine'],
            9  => ['Absorption', 'Disjunction'],
            10 => ['Gate', 'Spell Shift', 'Wish'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addFeatsToClass($class, [
            'Abjurer'            => 3,
            'Expert Abjurer'     => 7,
            'Conjurer'           => 3,
            'Expert Conjurer'    => 7,
            'Diviner'            => 3,
            'Expert Diviner'     => 7,
            'Enchanter'          => 3,
            'Expert Enchanter'   => 7,
            'Evoker'             => 3,
            'Expert Evoker'      => 7,
            'Illusionist'        => 3,
            'Expert Illusionist' => 7,
            'Necromancer'        => 3,
            'Expert Necromancer' => 7,
            'Transmuter'         => 3,
            'Expert Transmuter'  => 7,
            'Spell Focus'        => 3,
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => '<p>Azuth is concerned with components, spells and rituals. He eschews the chaotic nature of sorcery and the dubious Pact Magic of warlocks for the reliable results of the Art.</p>
<p>Azuth’s scions are almost always wizards, though he has a small and devoted clergy who seek to blend divine magic with arcane theurgy in his name.</p>
<ol>
    <li>You invented a new spell</li>
    <li>You started a school for magic users</li>
    <li>You discovered an incantation thought lost to the ages</li>
    <li>You prevented a magical disaster</li>
    <li>You are the direct descendant of a legendary wizard</li>
    <li>You completed a pilgrimage to a place of power</li>
</ol>',
            'devotion' => '<p>Following Azuth means dedicating yourself to the study of the arcane. As a follower of Azuth, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Responsibility</dt> <dd>Magic is a dangerous tool and belongs only in the hands of those who would use it safely</dd>
    <dt>Aspiration</dt> <dd>Amongst the ranks of magic users, I wish to be remembered</dd>
    <dt>Power</dt> <dd>I get a guilty thrill from bending the world to my will with magic</dd>
    <dt>Tutelage</dt> <dd>We must pass on our knowledge to the next generation</dd>
    <dt>Tradition</dt> <dd>Innovation only leads to disaster</dd>
</dl>',
            'earn_piety' => [
                'Learning a new spell',
                'Casting a ritual magic',
                'Training someone else in the Art',
            ],
            'lose_piety' => [
                'Engaging with wild magic or other chaotic sorceries',
                'Stealing from another wizard or dishonoring the Art',
            ],
            'piety3' => '<h4>Favored God: Azuth</h4>
<p>You gain Inspiration when you scribe a new spell into a spellbook or ritual book</p>',
            'piety10' => "<h4>Azuth's Adaptable Academia</h4>
<p>Whenever you gain a new level, you may choose a spell from a class list other than your own class. This spell must be a level for which you possess spell slots. You may add this spell to your domain spells if you are a cleric, or your spellbook if you are a wizard, and it counts as a spell from your own class list.</p>",
            'piety25' => "<h4>Clerk's Cost-Cutter</h4>
<p>You waive gold costs for scribing spells</p>",
            'piety50' => '<h4>Chosen of Azuth</h4>
<p>You may use an Action to spend an Inspiration and swap one of your prepared spells with an unprepared one from your class list if you are a cleric, or your spellbook if you are a wizard</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Savras';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'The All-Seeing, He of the Third Eye, Lord of Divination',
            'level'          => 'Demi',
            'portfolio'      => 'Divination, fate, truth',
            'regions'        => 'Tashalar, Halruaa',
            'alignment'      => 'LN',
            'symbol'         => 'Crystal ball containing many kinds of eyes',
            'favored_weapon' => 'The eye of Savras (dagger)',
            'master_id'      => $mystra->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Sibylites';
        $class->key_attribute = 'INT or WIS';
        $class->weapons       = 'Club, Dagger, Heavy Crossbow, Light Crossbow, Staff';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Savras</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 4,
            'skill_progress' => 4,
        ], ['INT', 'WIS'], [
            'Divine', 'Arcane', 'Divination',
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Wizard' => ['meta' => 'Divination'], 'Monk', 'Enlightened Fist',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Arcana', 'Concentration', 'Religion']);
        $helper->addFeaturesToClass($class, [
            'divine_feat'      => [3, 9, 15, 20],
            'class_group_feat' => [1, 18],
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 2,
            'meta'  => 'Activate Magic Item',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 4,
            'meta'  => 'Diviner',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 8,
            'meta'  => 'Expert Diviner',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 14,
            'meta'  => 'Master Diviner',
        ]);
        $helper->addDomainToClass($class, ['Knowledge', 'Magic']);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Detect Magic', 'Know Direction', 'Light', 'Read Aura', 'Shield', 'Stabilize'],
            1 => ['Bless', 'Cure Wounds', 'Detect Alignment', 'Detect Chaos', 'Detect Evil', 'Detect Good', 'Detect Law',
                'Detect Poison', 'Lock', 'Mage Armor', 'Remove Disease', 'True Strike', 'Unseen Servant', ],
            2 => ['Augury', 'Clairvoyance', 'Comprehend Language', 'Darkvision', 'Divine Insight', 'Interplanar Message',
                'Invisibility Purge', 'Locate Object', 'Remove Fear', 'Resist Energy', 'Restoration', 'See Invisibility',
                'Silence', 'Status', ],
            3 => ['Circle of Protection From Chaos', 'Circle of Protection From Evil', 'Circle of Protection From Good',
                'Circle of Protection From Law', 'Dispel Magic', 'Neutralize Poison', 'Nondetection', 'Secret Page', 'Tongues',
                'Zone of Truth', 'Warp and Weave', ],
            4 => ['Amanuensis', 'Arcane Eye', 'Detect Scrying', 'Dimensional Anchor', 'Divination', 'Globe of Invulnerability',
                'Psychic Poison', 'Rend Shadow Weave', 'Spell Immunity', 'Telepathy', ],
            5 => ['Atonement', 'Banishment', 'Commune', 'Legend Lore', 'Mind Probe', 'Mystic Aegis', 'Prying Eyes', 'Psychic Turmoil',
                'Revelation', 'Scrying', 'Sending', 'Telepathic Bond', 'True Seeing', ],
            6  => ['Choose Destiny', 'Illusion Purge', 'Planar Adaption', 'Stone Tell'],
            7  => ['Antimagic Ray', 'Contingency', 'Dimensional Lock'],
            8  => ['Antimagic Field', 'Discern Location'],
            9  => ['Absorption', 'Foresight'],
            10 => ['Miracle', 'Spell Shift'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addFeatsToClass($class, [
            'Spell Focus'    => 3,
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Savras's favour is bestowed on those who value foresight and planning, but amongst these he particularly treasures seers and mystics.</p>
<p>Savras's scions are drawn equally from temple oracles and hedge witches, comprising anyone with the gift of Sight.</p>
<ol>
    <li>It was foretold</li>
    <li>A vision?  Surely not</li>
    <li>Prophecy. Definitely prophecy</li>
    <li>A clairvoyant did it</li>
    <li>An augury decided it</li>
    <li>Destiny doesn't need a reason. Just a victim</li>
</ol>",
            'devotion' => "<p>Following Savras means dedicating yourself to prognostication. As a follower of Savras, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Destiny</dt> <dd>My visions must be used to make sure destiny comes to pass, not in futile attempts to divert it</dd>
    <dt>Fatalism</dt> <dd>What will be, will be</dd>
    <dt>Ambition</dt> <dd>I will use what I know to advance my own interests</dd>
    <dt>Apathy</dt> <dd>I've seen too much, and glimpsed too many possibilities. I all seems overwhelming</dd>
    <dt>Secrecy</dt> <dd>If people really knew what the future holds, they'd lose their minds</dd>
</dl>",
            'earn_piety' => [
                'You predict the future or read an omen',
                'You cast a Divination spell',
                'You pierce an Illusion with your intellect or magic',
            ],
            'lose_piety' => [
                'You ignore an omen or prediction',
                'You are fooled by an illusion',
            ],
            'piety3' => '<h4>Favored God: Savras</h4>
<p>Choose a spell you know. You gain Inspiration when see through an Illusion or perform a Divination</p>',
            'piety10' => '<h4>Omens and Riddles</h4>
<p>You can cast Augury as a Ritual with this trait, requiring no components. WIS is your spellcasting ability for this spell</p>',
            'piety25' => "<h4>All Seeing Eye</h4>
<p>You can cast Divination as a Ritual with this trait. Once you do so, you can't cast it in this way again until you finish a Long Rest</p>",
            'piety50' => '<h4>Chosen of Savras</h4>
<p>You may spend an Inspiration to gain Truesight for 1 minute</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Velsharoon';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'aliases'        => 'Mellifleur',
            'title'          => 'Archmage of Necromancy, The Necromancer, The Vaunted, Lord of the Forsaken Crypt, Lord of the Forgotten Crypt, The Lich-Lord, Patron of Evil Liches',
            'level'          => 'Demi',
            'portfolio'      => 'Liches, Necromancy, Undeath',
            'regions'        => 'Thay',
            'alignment'      => 'LE',
            'symbol'         => 'A crowned laughing lich skull on a black hexagon',
            'favored_weapon' => 'Skull Staff of the Necromancer (quarterstaff)',
            'master_id'      => $mystra->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Necrophants';
        $class->key_attribute = 'INT or WIS';
        $class->weapons       = 'Club, Dagger, Heavy Crossbow, Light Crossbow, Staff';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Velsharoon</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 3,
            'skill_progress' => 3,
        ], ['INT', 'WIS'], [
            'Divine', 'Arcane', 'Necromancy',
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Wizard' => ['meta' => 'Necromancy'],
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Arcana', 'Concentration', 'Religion']);
        $helper->addFeaturesToClass($class, [
            'divine_feat'      => [3, 9, 15, 20],
            'class_group_feat' => [1, 18],
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 2,
            'meta'  => 'Activate Magic Item',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 4,
            'meta'  => 'Necromancer',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 8,
            'meta'  => 'Expert Necromancer',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 14,
            'meta'  => 'Master Necromancer',
        ]);
        $helper->addChannelDivinityToClass($class, 'negative', 'Undead');
        $helper->addDomainToClass($class, ['Magic', 'Undead']);
        $helper->addFeatsToClass($class, [
            'Improved Undead'   => 3,
            'Undead Ally'       => 5,
            'Master of Shrouds' => 8,
        ]);
        $helper->addSpellsToClass($class, [
            0 => ['Chill Touch', 'Clean Self', 'Detect Magic', 'Detect Undead', 'Disrupt Undead', 'Hide from Undead', 'Resist Negative Energy',
                'Resist Positive Energy', 'Stabilize', ],
            1 => ['Cause Wounds', 'Cure Wounds', 'Deathwatch', 'Pleasant Visage', 'Ray of Enfeeblement', 'Remove Disease'],
            2 => ['Animate Dead', 'Create Crawling Claw', 'Command Undead', 'Gentle Repose', 'Living Undeath', 'Necrostasis',
                'Spectral Hand', ],
            3 => ['Blindness', 'Consumptive Field', 'Glyph of Rebuking', 'Hold Undead', "Night's Mantle", 'Revivify', 'Seed of Undeath',
                'Speak with Dead', 'Undead Bane Weapon', 'Vampiric Touch', 'Wound', ],
            4 => ['Daywalker', 'Finger of Agony', 'Life Drain', 'Life Ward', 'Remove Curse'],
            5 => ['Antilife Shell', 'Create Undead', 'Ghoul Gauntlet', 'Haunt Shift', 'Incorporeal Nova', 'Kiss of the Vampire',
                "Night's Caress", 'Power Leech', 'Drain Life', ],
            6 => ['Atonement', 'Harm', 'Heal', 'Magic Jar', 'Revive Undead', 'Slay Living', 'Vampiric Exsanguination', 'Undead Lieutenant'],
            7 => ['Finger of Death', 'Raise Dead', 'Undeath after Death'],
            8 => ['Clone', 'Death Pact', 'General of the Undead', 'Horrid Wilting', 'Power Word Stun'],
            9 => ['Massacre', 'Power Word Kill', 'Soul Bind'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Auppenser';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'The Master of the Invisible Art, Lord of Reason, Serene One, Master of Thought',
            'level'          => 'Hero',
            'portfolio'      => 'Psionics, Serenity, Personal Autonomy, Enlightenment',
            'regions'        => 'Jhaamdath, Halruaa',
            'alignment'      => 'N',
            'symbol'         => 'An eye centered within a hexagonal shaped gem',
            'favored_weapon' => 'Kukri',
            'master_id'      => $mystra->id,
        ]);
    }
}
