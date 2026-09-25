<?php

namespace Database\Seeders\Gods;

use App\Enums\Pantheon;
use App\Models\Feat;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsMoradinSeeder extends Seeder
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
        $god->name  = 'Odin Borrson';
        $god->level = 'Greater';
        $god->save();
        $moradin = $god;
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => 'Moradin',
            'title'          => 'The Soul Forger, Dwarffather, All-Father',
            'level'          => 'Greater',
            'portfolio'      => 'Dwarves, Creation, Smithing, Protection, Metalcraft, Stonework',
            'regions'        => 'The Great Rift, The North',
            'alignment'      => 'LG',
            'symbol'         => 'Hammer and Anvil',
            'favored_weapon' => 'Soulhammer (Warhammer)',
        ]);

        $class                = new Klass;
        $class->name          = 'Sonnlinor';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons plus 1 choice';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Moradin</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 3,
        ], ['WIS', 'CHA'], [
            'Dwarf', 'Divine', 'Good',
        ]);

        $helper->addClassesToGod($god, 'Morndinsamman', [
            'Cleric'    => 20,
            'Artificer' => 15,
            'Paladin'   => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            $class->name => ['is_clergy' => true],
            'Paladin'    => ['is_clergy' => true],
            'Artificer', 'Fighter',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Religion']
        );
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 2,
            'meta'  => '<dl>
    <dt>Actions</dt> <dd>Action</dd>
    <dt>Spell</dt> <dd>Bless or Shield of Faith</dd>
</dl>',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead', 2);
        $helper->addDomainToClass($class, ['Dwarf', 'Good', 'Healing', 'Protection']);
        $helper->addSpellsToClass($class, [
            0  => ['Blade Ward', 'Clean Self', 'Control Flames', 'Detect Magic', 'Light', 'Mending', 'Mold Earth', 'Resist',
                'Stabilize', ],
            1  => ['Bless', 'Cure Wounds', 'Detect Evil', 'Disrupting Weapon', 'Earth Tremor', 'Enchant Item', 'Fist of Stone',
                'Forge Fire', 'Ironguts', 'Mold Metal', 'Shield of Faith', 'Summon Elemental, Lesser' => 'Earth or Fire Elementals only', ],
            2  => ['Augury', 'Aura of Hope', "Bear's Endurance", 'Comprehend Language', 'Consecrate', 'Continual Flame',
                'Create Food and Water', 'Detect Metal and Mineral', 'Delay Disease', 'Delay Poison', 'Earthfast', 'Endure Elements',
                'Enlarge', 'Glorious Raiment', 'Hand of the Faithful', 'Hurl', 'Imbue with Cold Iron', 'Imbue with Silvered',
                'Insignia of Alarm', 'Locate Node', 'Maskstone', 'Node Lock', 'Remove Fear', 'Restoration', 'Resist Acid',
                'Resist Fire', 'Resist Poison', 'Undead Bane Weapon', ],
            3  => ['Analyze Portal', 'Clearstone', 'Dispel Magic', 'Elemental Weapon', 'Faithful Healing', 'Forbiddance',
                'Imbue with Adamantine', 'Insignia of Blessing', 'Insignia of Healing', 'Invisibility Purge', 'Node Door',
                'Prayer', 'Rockburst', 'Speak with Dead', 'Tongues', 'Vitality Shield', ],
            4  => ['Ceremony', 'Creation', 'Fabricate', 'Hold Metal', 'Shape Metal', 'Shape Stone', 'Tiny Servant'],
            5  => ['Atonement', 'Brilliant Weapon', 'Commune', 'Hallow', 'Holy Weapon', 'Ritual of the March', 'Stonefire'],
            6  => ['Earth Glide', 'Heal', "Hero's Feast", 'Wall of Iron'],
            7  => ['Divine Word', 'Resurrection', 'Stone Trap', 'Symbol'],
            8  => ['Excavate', 'Divine Aura', 'Last Judgment', 'Portal Reformat', 'True Creation'],
            9  => ['Disjunction', 'Invulnerability'],
            10 => ['Remake'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Morndinsamman']->id,
            'favor'       => "<p>Moradin's favor is given to those who excel in their craft, but moreover to those who possess an instinctual desire to follow sacred traditions, rites and preserve the old ways.</p>
<p>Moradin's scions are often stubborn and intractable, and frequently found in vocations that benefit from an immovable mindset such as paladin orders.</p>
<ol>
    <li>You crafted a work of great significance and dedicated it to Moradin</li>
    <li>You were designated chosen at birth by a priest of Moradin, and you've never questioned it</li>
    <li>You are descended from a famous paladin of Moradin, and his blessing runs deep in your bones</li>
    <li>You wrought a holy relic in a dreamlike fugue state = you don't remember how you did it</li>
    <li>Your family carved the likeness of Moradin into a mountain face in an act of worship</li>
    <li>Your parents could not bear children, and so crafted a perfect child form stone. Moradin imbued you with life as one of his miracles</li>
</ol>",
            'devotion' => "<p>Following Moradin means dedicating yourself to tradition and stability. As a follower of Moradin, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Tradition</dt> <dd>There is safety and surety in the old ways</dd>
    <dt>Honor</dt> <dd>My principles are the entirety of my being</dd>
    <dt>Excellence</dt> <dd>Every waking moment is spent thinking about how to better my craft</dd>
    <dt>Kinship</dt> <dd>My family and my clan are the rock on which my life is founded. Without them, I am adrift</dd>
    <dt>Hard Work</dt> <dd>I can't abide being idle, I need to be doing something at all times</dd>
</dl>",
            'earn_piety' => [
                'Crafting something traditional',
                'Following the will of your clan and family',
            ],
            'lose_piety' => [
                'Estranging yourself from family and relations',
                'Innovating and experimenting',
            ],
            'piety3' => '<h4>Favored God: Moradin</h4>
<p>You gain Inspiration when you invoke tradition or family ro justify an action</p>',
            'piety10' => '<h4>Peerless Artisan</h4>
<p>Pick a tool set. You gain a +7 bonus to any roll you make when using that tool</p>',
            'piety25' => '<h4>Iron Stomach</h4>
<p>You are immune to Poison damage and the Sickened condition</p>',
            'piety50' => '<h4>Chosen of Moradin</h4>
<p>You may spend an Inspiration to cast Stoneskin, requiring no components. WIS is your spellcasting ability for this spell</p>',
        ]);

        /**********************************************************************/

        $god = God::where('name', 'Hanali Celanil')->first();
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => 'Sharindlar',
            'title'          => 'Lady of Life and Mercy, the Shining Dancer',
            'level'          => 'Demi',
            'aliases'        => 'Freya',
            'portfolio'      => 'Healing, Mercy, Romantic Love, Fertility, Dancing, Courtship',
            'alignment'      => 'CG',
            'symbol'         => 'Burning needle',
            'favored_weapon' => 'Fleetbite (Whip)',
            'master_id'      => $moradin->id,
        ]);
        $helper->addClassesToGod($god, 'Morndinsamman', [
            'Cleric' => 15,
            'Bard'   => 15,
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            $class->name    => ['is_clergy' => true],
            'Divine Oracle' => ['is_clergy' => true],
            'Bard',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Frigg';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => 'Berronar Truesilver',
            'title'          => 'The Revered Mother, Mother of Safety',
            'level'          => 'Lesser',
            'portfolio'      => 'Safety, Honesty, Home, Healing, Records, Marriage, Faithfulness, Loyalty, Oaths',
            'alignment'      => 'LG',
            'symbol'         => 'Intertwined silver rings',
            'favored_weapon' => 'Wrath of Righteousness (Heavy Mace)',
            'master_id'      => $moradin->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Berronar';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 3,
        ], ['WIS', 'CHA'], [
            'Divine', 'Dwarf', 'Good',
        ]);

        $helper->addClassesToGod($god, 'Morndinsamman', [
            'Cleric'  => 20,
            'Paladin' => 10,
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            $class->name => ['is_clergy' => true],
            'Paladin'    => ['is_clergy' => true],
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Medicine', 'Religion']
        );
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 4,
            'meta'  => '<dl>
    <dt>Actions</dt> <dd>Triple Action</dd>
    <dt>Spell</dt> <dd>Zone of Truth</dd>
</dl>',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead');
        $helper->addDomainToClass($class, ['Dwarf', 'Good', 'Healing', 'Protection']);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Conviction', 'Detect Magic', 'Detect Undead', 'Forbidding Ward', 'Friends', 'Guidance',
                'Light', 'Mending', 'Resist', 'Stabilize', 'Virtue', 'Word of Radiance', ],
            1 => ['Alarm', 'Alleviate Addiction', 'Aura of Courage', 'Bless', 'Cure Wounds', 'Detect Alignment', 'Detect Evil',
                'Disrupting Weapon', 'Divine Favor', 'Exorcism', 'Hand of the Faithful', 'Inspire Courage', 'Ironguts',
                'Protection From Evil', 'Remove Disease', 'Sanctuary', 'Shield of Faith', 'Undead Bane Weapon', ],
            2 => ['Aid', 'Arcane Lock', 'Comprehend Language', 'Consecrate', 'Create Food and Water', 'Endure Elements',
                'Faerie Fire', 'Find Traps', 'Forge Fire' => 'Cannot heighten', 'Glorious Raiment', 'Hold Person', 'Hurl',
                'Insignia of Alarm', 'Locate Node', 'Node Lock', 'Remove Fear', 'Resist Elements', 'Resist Poison', 'Skyhook',
                'Zone of Truth', ],
            3 => ['Air of Authority', 'Aura of Vitality', 'Ceremony', 'Circle of Protection From Chaos', 'Circle of Protection From Evil',
                'Faithful Healing', 'Forbiddance', 'Geas', 'Glyph of Warding', 'Heart Sight', 'Helping Hand', 'Insignia of Blessing',
                'Insignia of Healing', 'Inspire Defense', 'Invisibility Purge', 'Maskstone', 'Nondetection', 'Prayer', 'Prophecy',
                'Sending', 'Sheltered Vitality', 'Speak with Dead', 'Spirit Guardians', 'Tongues', 'Vitality Shield', ],
            4 => ['Atonement', 'Detect Scrying', 'Divination', 'Dimensional Anchor', 'Private Sanctum'],
            5 => ['Aura of Life', 'Aura of Purity', 'City Stride', 'Commune', 'Commune with Texts', 'Death Ward', 'Dispel Chaos',
                'Dispel Evil', 'Dispel Outsider', 'Hallow', 'Holy Weapon', 'Tomb of Light', 'Wall of Stone', ],
            6 => ['Commune with Earth', 'Guards and Wards', 'Heal', "Hero's Feast", 'Planar Ally', 'Raise Dead', 'Summon Celestial',
                'Word of Recall', ],
            7 => ['Bastion of Good', 'Channel Celestial', 'Divine Degree', 'Holy Aura', 'Renewal Pact', 'Shield of Law',
                'Temple of the Gods', ],
            8 => ['Antipathy / Sympathy', 'Divine Aura', 'Last Judgment', 'Power Word Heal'],
            9 => ['Imprisonment', 'Invulnerability'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Berronar';
        $feat->requirement = 'Must be LG and Berronar must be your Patron deity';
        $feat->description = '<p>You are a Paladin of Berronar. You are charged with guarding the mountain homes of Dwarves against invaders. You gain the following:</p>
<ul>
    <li>You gain proficiency with Heavy Armor</li>
    <li>You gain the Improved Aura feat</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior', 'Dwarf']);
        $helper->addSpellsToFeat($feat, [
            0   => ['Clean Self', 'Conviction', 'Shield'],
            1   => ['Alarm', 'Aura of Courage', 'Bless', 'Exorcism', 'Hurl', 'Inspire Courage', 'Ironguts', 'Protection From Evil',
                'Shield of Faith', 'Undead Bane Weapon', ],
            2   => ['Aura of the Bear', 'Aura of Hope', 'Aura of Glory', 'Consecrate', 'Faithful Healing', 'Find Traps',
                'Hand of the Faithful', 'Helping Hand', 'Insignia of Alarm', 'Invisibility Purge', 'Remove Fear', 'Resist Elements', ],
            3   => ['Air of Authority', 'Aura of Silence', 'Aura of Vitality', 'Insignia of Blessing', 'Insignia of Healing',
                "King's Castle", 'Prayer', 'Sending', 'Sheltered Vitality', 'Stalwart Covenant', ],
            4   => ['Aura of Life', 'Aura of Purity', 'Spirit Guardians'],
            5   => ['Aura of Power', 'Hallow'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Morndinsamman->value, $feat);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Morndinsamman']->id,
            'favor'       => "<p>Berronar is responsible for governing the rules that bind together clans and families. This extends to social contracts and binding ceremonies such as christenings and marriages. Berronar blesses only consensual agreements undertaken in good faith that will strengthen both parties, but cares little for frivolities such as love compared to material gains.</p>
<p>Berronar's scions tend to be controlling and domineering people, invested by their goddess with an instinct for locating matches and agreements in the pragmatic best interest of everyone, and executing them promptly.</p>
<ol>
    <li>You forged a lasting bond between your village and another</li>
    <li>You stopped a fraudulent marriage from taking place at the last minute</li>
    <li>You've been tasked with tracking down and stopping someone who betrayed an oath</li>
    <li>You've performed more christenings than you can remember, with Berronar's blessing</li>
    <li>Your entire clan is under your thumb, but you've begun to yearn for a greater challenge</li>
    <li>Berronar spoke to you at your coming of age ceremony. What did she say to you?</li>
</ol>",
            'devotion' => "<p>Following Berronar means dedicating yourself to family and bonds. As a follower of Berronar, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Community</dt> <dd>What we forge together is always stronger than any of us alone</dd>
    <dt>Honor</dt> <dd>When I make a bargain, I keep it</dd>
    <dt>Wealth</dt> <dd>Our mutual prosperity is founded on agreement and compromise</dd>
    <dt>Tradition</dt> <dd>I will follow the customs and ways of my predecessors</dd>
    <dt>Hard Work</dt> <dd>Maintaining bonds and ties isn't easy. It's work, each and every day</dd>
</dl>",
            'earn_piety' => [
                'Broker an agreement between two or more parties',
                'Enact a ritual or ceremony',
            ],
            'lose_piety' => [
                'Forcing a duplicitous agreement, or willingly breaking an accord',
            ],
            'piety3' => '<h4>Favored God: Berronar</h4>
<p>You gain Inspiration when you broker an honorable deal, trade, or bargain</p>',
            'piety10' => '<h4>Mother of Traditions</h4>
<p>You can cast Ceremony as a ritual with this trait, requiring no material components. CHA is your spellcasting ability for this spell</p>',
            'piety25' => '<h4>Binding Agreement</h4>
<p>You can cast Geas as a ritual with this trait, requiring no material components. CHA is your spellcasting ability for this spell</p>',
            'piety50' => "<h4>Chosen of Berronar</h4>
<p>You can spend an Inspiration die to cast Planar Ally with this trait. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. CHA is your spellcasting ability for this spell. This version of the spell will only summon celestial creatures.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Loki';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => 'Abbathor',
            'title'          => 'Great Master of Greed, Trove Lord, Wyrm of Avarice, The Avaricious',
            'level'          => 'Lesser',
            'portfolio'      => 'Greed',
            'alignment'      => 'NE',
            'symbol'         => 'Jeweled dagger',
            'favored_weapon' => 'Heart of Avarice (dagger)',
            'master_id'      => $moradin->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Abbathor';
        $class->type          = 'Priest';
        $class->key_attribute = 'DEX or WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 3,
        ], ['DEX', 'WIS'], [
            'Divine', 'Dwarf', 'Rogue',
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            $class->name => ['is_clergy' => true],
            'Rogue',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Deception', 'Diplomacy', 'Intimidation', 'Lore', 'Religion', 'Society', 'Stealth', 'Thievery']
        );
        $helper->addFeaturesToClass($class, [
            'rogue_feat' => [2, 3, 5, 9, 12, 15, 18],
        ]);
        $helper->addSpellsToClass($class, [
            0 => ['Bit of Luck', 'Clean Self', 'Detect Magic', 'Friends', 'Light', 'Prestidigitation', 'Vicious Mockery'],
            1 => ['Arcane Pocket', 'Cure Wounds', 'Detect Good', 'Disguise Self', 'Grease', 'Hypnotism', 'Identify', 'Luck',
                'Maskstone', 'Sleep', 'Treasure Scent', 'Unseen Servant', 'Ventriloquism', ],
            2 => ["Cat's Grace", 'Blur', 'Darkness', 'Detect Metal and Mineral', 'Find Traps', "Fox's Cunning", 'Invisibility',
                'Knock', 'Mirror Image', 'Resist Poison', 'Shrink', 'Silence', 'Skyhook', 'Spectral Hand', 'Suggestion',
                'Undetectable Alignment', ],
            3 => ['Comprehension', 'Dispel Magic', 'Enthrall', 'Hypnotic Pattern', 'Nondetection', 'Poison', 'Shrink Item',
                'Tongues', ],
            4 => ['Freedom of Movement', 'Mislead', 'Secret Chest'],
            5 => ['Banishment', 'Ceremony', 'Legend Lore', 'Ridiculous Notion'],
            6 => ['Atonement', 'Hallucination', 'Teleportation Circle', 'Word of Recall'],
            7 => ['Dominate', 'Irresistible Dance', 'Stone Trap'],
            8 => ['Glibness', 'Portal Reformat'],
        ]);
        $helper->addSpellSlotsToClass($class, 'eight');

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Morndinsamman']->id,
            'favor'       => "<p>Abbathor delights in corrupting the hearts of the Dwarves, driving them to ever greater feats of avarice and hoarding. He particularly loves stealing the champions of other gods from the cradle, and infecting them with the desire to take and hold.</p>
<p>Abbathor's scions can be stubborn and willful like most Dwarves, but are also blessed with an unusual preponderance for breaking and bending rules or traditions in a way highly uncharacteristic of Dwarven culture as a whole.</p>
<ol>
    <li>You stole something of great value</li>
    <li>You covet something you cannot have</li>
    <li>You are gifted with finance and money</li>
    <li>A priest of Moradin decried you as unholy at birth</li>
    <li>You turned away from the Morndinsamman due to some slight</li>
</ol>",
            'devotion' => '<p>Following Abbathor means dedicating yourself to the pursuit and the protection of wealth above all things. As a follower of Abbathor, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Jealousy</dt> <dd>I only ever want what others have</dd>
    <dt>Community</dt> <dd>My family and friends must be provided for</dd>
    <dt>Power</dt> <dd>I crave power, and money can buy me that</dd>
    <dt>Pride</dt> <dd>My wealth is the source of my self-esteem</dd>
    <dt>Wealth</dt> <dd>Money is the only god I truly worship</dd>
</dl>',
            'earn_piety' => [
                'Increasing your personal wealth',
                'Stealing a noteworthy item',
                'Laying down protections for your spoils',
            ],
            'lose_piety' => [
                'Giving away valuables for less than their worth',
                'Facilitating transactions that do not in any way benefit to you',
            ],
            'piety3' => '<h4>Favored God: Abbathor</h4>
<p>You gain Inspiration when you successfully acquire or defend a significant source of wealth</p>',
            'piety10' => '<h4>Metal Detector</h4>
<p>You can sense the presence and location of precious metals and gemstones within 30 feet of you</p>',
            'piety25' => "<h4>Fool's Gold</h4>
<p>You can cast Creation with this trait, requiring no material components. You can only use the spell in this way to create gemstones or precious metals. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell.</p>",
            'piety50' => '<h4>Chosen of Abbathor</h4>
<p>You can use an Action to spend an inspiration and turn up to 1 lb of nonmagical materials or objects into solid gold. This effect fades once an hour has passed.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Thor Odinson';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => 'Thor Moradinson',
            'title'          => 'Moradinson, Finder-of-Trails, Watcher over Wanderers, the Watchful Eye, the Thunderer',
            'aliases'        => 'Marthammor Duin',
            'level'          => 'Demi',
            'alignment'      => 'NG',
            'portfolio'      => 'Expatriates, Guides, Lightning, Thunder, Travelers, Strength',
            'symbol'         => 'Upright hammer in front of a fur-trimmed leather boot',
            'favored_weapon' => 'Mjolnir (Warhammer)',
            'master_id'      => $moradin->id,
        ]);
        $helper->addClassesToGod($god, 'Morndinsamman', [
            'Fighter'   => 12,
            'Barbarian' => 6,
            'Ranger'    => 4,
            'Bard'      => 8,
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            'Paladin' => ['is_clergy' => true],
            'Ranger'  => ['is_clergy' => true],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Thor';
        $feat->requirement = 'Must be Good and Thor must be your Patron deity';
        $feat->description = "<p>You are a Paladin of Thor Moradinson. You are charged with defending dwarven travelers and defending dwarven territories from Orcs and Giants. You gain the following.</p>
<ul>
    <li>You gain the Weapon Focus Feat with all Hammers</li>
    <li>If you have the Animal Companion Feat, your Mount you summon with the Call Mount spell gains all the benefits of being an Animal Companion</li>
    <li>Your Bull's Strength Spells duration is </li>
</ul>";
        $helper->addTypesToFeat($feat, ['Divine Warrior', 'Dwarf']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Electric Arc', 'Gust', 'Ironguts', 'Sonic Snap', 'Thunderclap'],
            1 => ["Bull's Strength", 'Healthful Rest', 'Heroism', 'Hurl', 'Sonic Blast', 'Thunderous Smite', 'Thunderwave',
                'Wrathful Smite', ],
            2 => ['Aura of the Bull', "Bear's Endurance", 'Divine Presence', 'Enlarge', 'Rage', 'Resist Electricity', 'Resist Sonic',
                'Shatter', 'Sonic Burst', 'Sonic Weapon', 'Thunderstroke', 'Imbue with Adamantine', 'Undead Bane Weapon', ],
            3 => ['Call Lightning', 'Elemental Weapon' => 'Electricity only', 'Resounding Thunder', 'Sheltered Vitality',
                'Vitality Shield', ],
            4 => ['Irresistible Force', 'Lightning Bolt', 'Thunder Step'],
            5 => ['Banishing Smite', 'Control Winds', 'Fly'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Morndinsamman->value, $feat);

        /**********************************************************************/

        $god = God::where('name', 'Eilistraee')->firstOrFail();
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => 'Haela Brightaxe',
            'title'          => 'Lady of the Fray, Luckmaiden',
            'level'          => 'Demi',
            'alignment'      => 'NG',
            'portfolio'      => 'Luck in Battle, Joy of Battle, Dwarven Warriors',
            'symbol'         => 'Unsheathed sword encircled by a flaming bolt (a two-ended spiral of flame)',
            'favored_weapon' => 'Flamebolt (greatsword)',
            'master_id'      => $moradin->id,
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            'Paladin' => ['is_clergy' => true],
            'Fighter', 'Scout',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Haela';
        $feat->requirement = 'Paladin of Haela Brightaxe';
        $feat->description = '<p>You are a Paladin of Haela Brightaxe. You are charged with traveling the world and aiding dwarves who are away from their homes.</p>
<ul>
    <li>When you cast the spell Bit of Luck, you may cast it without spending an Action for the Somatic Casting.</li>
    <li>You gain an additional 1st Level Spell Slot. You may only memorize the spell Luck in this additional Spell Slot.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior', 'Dwarf']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Bit of Luck', 'Conviction', 'Dancing Lights', 'Guidance', 'Light', 'Shield', 'Stabilize', 'True Strike'],
            1 => ['Aura of Courage', 'Bless', 'Divine Favor', 'Fleet Step', 'Healthful Rest', 'Heroism', 'Hurl', 'Inspire Courage',
                'Ironguts', 'Jump', 'Luck', ],
            2 => ['Aid', 'Aura of Hope', 'Aura of War', "Cat's Grace", 'Faithful Healing', 'Favor of the Gods', 'Flame Blade',
                'Helping Hand', 'Insight of Good Fortune', 'Resist Fire', 'Status', 'Undead Bane Weapon', ],
            3 => ['Aura of Haste', 'Elemental Weapon' => 'Fire only', 'Revivify', 'Remove Curse', 'Vitality Shield'],
            4 => ['Ceremony', 'Irresistible Force', 'Spell Immunity'],
            5 => ['Atonement', 'Dispel Evil', 'Ritual of the March'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Morndinsamman->value, $feat);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Thard Harr';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => $god->name,
            'title'          => 'Lord of the Jungles Deeps',
            'level'          => 'Demi',
            'aliases'        => 'Vidar',
            'alignment'      => 'CG',
            'portfolio'      => 'Wild Dwarves, Jungle Survival, Hunting',
            'symbol'         => 'Two crossed scaly clawed gauntlets of silvery-blue metal',
            'favored_weapon' => 'Clawed Gauntlet (Spiked Gauntlet)',
            'master_id'      => $moradin->id,
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            'Druid'  => ['is_clergy' => true],
            'Ranger' => ['is_clergy' => true],
            'Fighter', 'Scout',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Vuddor of Thard Harr';
        $feat->description = '<p>You are a Druid of Thard Harr.</p>
<ul>
    <li>You gain proficiency with Claw Bracers and are allowed to use metal ones.</li>
    <li>When you use Wild Shape, you may increase the maximum CR of the creature you may Wild Shape into by +1.</li>
    <li>You gain Resistance to Poison</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal', 'Dwarf']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Immunity to Adhesive', 'Ironguts'],
            1 => ['Rage'],
            2 => ['Hurl'],
            3 => ['Freedom of Movement'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Morndinsamman->value, $feat);
        $helper->addFeatsToClass(Klass::where('name', 'Druid')->first(), [
            'Vuddor of Thard Harr' => 2,
        ]);

        $feat              = new Feat;
        $feat->name        = 'Ranger of Thard Harr';
        $feat->requirement = 'Thard Harr must be your Patron deity';
        $feat->description = '<p>You are a worshiper of the Dwarven god Thard Harr.</p>
<ul>
    <li>Add the spells Delay Disease, Delay Poison, Immunity to Adhesive and Rage to your spell list. They do not count against your Known Spells limit.</li>
    <li>You may cast the spell Immunity to Adhesive at will</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Dwarf']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Camouflage', 'Hurl', 'Immunity to Adhesive', 'Purify Food and Drink', 'Rage'],
            2 => ['Delay Disease', 'Delay Poison'],
            4 => ['Irresistible Force'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Morndinsamman->value, $feat);
        $helper->addFeatsToClass(Klass::where('name', 'Ranger')->first(), [
            'Ranger of Thard Harr' => 2,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Baldur Odinson';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'      => 'Hanseath',
            'title'     => 'The Bearded One, The Brave',
            'level'     => 'Hero',
            'alignment' => 'CN',
            'portfolio' => 'Carousing, Alcohol, Battle Rage',
            'symbol'    => 'Glass of ale',
            'master_id' => $moradin->id,
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            'Paladin' => ['is_clergy' => true],
            'Barbarian',
        ]);

        $helper->addClassesToGod($god, 'Morndinsamman', [
            'Barbarian' => 20,
            'Paladin'   => 10,
        ]);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Hanseath';
        $feat->requirement = 'Paladin of Hanseath';
        $feat->description = '<p>You are a Paladin of Hanseath.</p>
<ul>
    <li>All of your Aura spells gains the Rage type.</li>
    <li>You may cast the spell Smite while Raging, as if the Spell had the Rage type.</li>
    <li>You gain the Raging Spellcaster feat, even if you do not qualify for its prerequisites.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior', 'Dwarf']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Bit of Luck', 'Resist'],
            1 => ['Aura of Courage', 'Hurl', 'Ironguts', 'Rage', 'Undead Bane Weapon'],
            2 => ['Aura of War', 'Aura of the Bull', 'Aura of the Bear', 'Aura of Glory', 'Aura of Hope', 'Resist Poison',
                'Imbue with Adamantine', ],
            3 => ['Aura of Vitality', 'Aura of Silence', 'Aura of Haste', 'Irresistible Force' => 'Gains the Rage type'],
            4 => ['Aura of Purity'],
            5 => ['Aura of Power'],
        ]);
        $feat->parent_feats()->save(Feat::where('name', 'Dwarven Battle Rager')->firstOrFail());
        $helper->addFeatToGodPantheon($god, Pantheon::Morndinsamman->value, $feat);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Thautam';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => $god->name,
            'title'          => '',
            'level'          => 'Hero',
            'alignment'      => 'N',
            'portfolio'      => 'Magic, Darkness',
            'symbol'         => 'Three stones',
            'favored_weapon' => 'Heavy Pick',
            'master_id'      => $moradin->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Tharmekhul';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'      => $god->name,
            'title'     => "The Tender of the Forge, the All-Father's Forge Attendant",
            'aliases'   => 'Vale',
            'level'     => 'Hero',
            'alignment' => 'N',
            'portfolio' => 'Fire, Forges, Molten Rock',
            'symbol'    => 'Fiery Axe',
            'master_id' => $moradin->id,
        ]);
        $helper->addClassesToGod($god, 'Morndinsamman', [
            'Artificer' => 20,
        ]);

        /**********************************************************************/

        $lad        = new God;
        $lad->name  = 'Laduguer';
        $lad->level = 'Intermediate';
        $lad->save();
        $lad->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => $lad->name,
            'title'          => 'The Exile, The Grey Protector, Master of Crafts, The Slave Driver, The Taskmaster, The Harsh',
            'aliases'        => 'Hod',
            'level'          => 'Intermediate',
            'alignment'      => 'LE',
            'portfolio'      => 'Artisans, Gray Dwarves, Magic, Magic Weapon Creation',
            'symbol'         => 'Broken crossbow bolt on a shield',
            'favored_weapon' => 'Grimhammer (Warhammer)',
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Laduguer';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 3,
        ], ['WIS', 'CHA'], [
            'Divine', 'Dwarf', 'Evil',
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            $class->name => ['is_clergy' => true],
            'Artificer', 'Psion', 'Cerebremancer', 'Psychic Warrior',
        ]);

        $helper->addClassesToGod($lad, 'Morndinsamman', [
            'Artificer' => 20,
            'Psion'     => 12,
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Religion']
        );
        $class->features()->save(app()->features['feat'], ['level' => 2, 'meta' => 'Wild Talent']);
        $class->features()->save(app()->features['feat'], ['level' => 3, 'meta' => 'Expanded Knowledge']);
        $class->features()->save(app()->features['feat'], ['level' => 4, 'meta' => 'Psionic Talent']);
        $class->features()->save(app()->features['feat'], ['level' => 5, 'meta' => 'Any Item Creation feat']);
        $helper->addDomainToClass($class, ['Dwarf', 'Evil', 'Psionics', 'Slavery']);
        $helper->addSpellsToClass($class, [
            0   => ['Clean Self', 'Control Flame', 'Detect Magic', 'Light', 'Mold Earth', 'Resist', 'Stabilize'],
            1   => ['Cure Wounds', 'Curse', 'Detect Good', 'Enchant Item', 'Forge Fire', 'Mold Metal', "Slaver's Gentle Reminder",
                'Summon Elemental, Lesser' => 'Earth or Fire Elementals only', ],
            2   => ['Augury', 'Comprehend Language', 'Continual Flame', 'Desecrate', 'Detect Metal and Mineral', 'Endure Elements',
                'Hold Person', 'Hurl', 'Restoration', 'Imbue with Adamantine', ],
            3   => ['Dispel Magic', 'Elemental Weapon', "Slaver's Mild Admonishment"],
            4   => ['Creation', 'Fabricate', 'Shape Metal', 'Shape Stone'],
            5   => ['Atonement', 'Dispel Good', 'Divine Weapon', 'Hold Metal', 'Permanency', 'Transmute Rock'],
            6   => ['Bones of the Earth', 'Harm', 'Mind Prison', 'Planar Ally', "Slaver's Stern Reproof"],
            7   => ["Slaver's Wrathful Castigation", 'True Creation', 'Stone Trap'],
        ]);
        $helper->addSpellSlotsToClass($class, 'eight');

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Deep Duerra';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => $god->name,
            'title'          => 'Queen of the Invisible Art, Axe Princess of Conquest',
            'level'          => 'Demi',
            'alignment'      => 'LE',
            'portfolio'      => 'Psionics, Conquest, Expansion',
            'symbol'         => 'Shattered skull (usually of a Illithid, a drow or a dwarf)',
            'favored_weapon' => 'Mindshater (Battleaxe)',
            'master_id'      => $lad->id,
        ]);

        $helper->addClassesToGod($god, 'Morndinsamman', [
            'Psychic Warrior' => 20,
            'Soul Knife'      => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            'Paladin'         => ['is_clergy' => true],
            'Psychic Warrior' => ['is_clergy' => true],
            'Psion', 'Soul Knife',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Mindaxe';
        $feat->requirement = 'Paladin of Deep Duerra';
        $feat->description = "<p>You are a Blackguard of Deep Duerra. Sometimes also called Norathar, a dwarven word that roughly translates to 'those who seize enemy land'. Most clergy are female, while the males typically focus in the Psychic Warrior class.</p>
<p>You gain the following.</p>
<ul>
    <li>You gain 2 Power Points.</li>
    <li>You gain the Expanded Knowledge feat.</li>
    <li>The church will reject any candidate that does not exhibit any psychic ability. The 2 previous abilities this feat grants will qualify entry into the clergy. However, in game terms, the candidate must multiclass into Psychic Warrior or Soul Knife as soon as possible (the next level the character gains).</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Divine Warrior', 'Psionic', 'Dwarf']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Blade Ward', 'Message', 'Resist'],
            1 => ['Aura of Courage', 'Divine Favor', 'Enlarge', 'Hurl', 'Summon Elemental, Lesser', 'Wrathful Smite'],
            2 => ['Aid', 'Aura of the Bear', 'Aura of the Bull', 'Aura of the Owl', 'Cling', 'Delay Poison', 'Hold Person',
                'Invisibility, Swift', 'Remove Fear', ],
            3 => ['Aura of Haste', 'Ceremony'],
            4 => ['Atonement', 'Commune'],
            5 => ['Raise Dead'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Morndinsamman->value, $feat);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Diirinka';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => $god->name,
            'title'          => 'The Betrayer, The Father',
            'level'          => 'Lesser',
            'alignment'      => 'CE',
            'portfolio'      => 'Cruelty, Knowledge, Magic, Derro',
            'symbol'         => 'Spiral of white, gray, and black',
            'favored_weapon' => 'Dagger',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Diinkarazan';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Hero',
            'alignment' => 'CE',
            'portfolio' => 'Vengeance',
            'symbol'    => '',
        ]);

        /**********************************************************************/

        $helper->addFeatsToClass(Klass::where('name', 'Paladin')->first(), [
            'Paladin of Berronar'    => 2,
            'Paladin of Thor'        => 2,
            'Paladin of Haela'       => 2,
            'Paladin of Hanseath'    => 2,
            'Mindaxe'                => 2,
        ]);
    }
}
