<?php

namespace Database\Seeders\Gods;

use App\Enums\Pantheon;
use App\Models\Feat;
use App\Models\Feature;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsTyrSeeder extends Seeder
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
        $god->name  = 'Tyr';
        $god->level = 'Greater';
        $god->save();
        $tyr = $god;
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'God of Justice, Grimjaws, The Even-Handed, The Maimed God, Blind, Blind Tyr, The Blind Overlord, The Wounded One, The Just God, The Warrior Pacifist',
            'aliases'        => 'Anachtyr (Calimshan)',
            'level'          => 'Greater',
            'portfolio'      => 'Justice, Honor, Righteousness',
            'regions'        => 'Calimshan, Cormyr, Dalelands, Moonsea, Sembia, Tethyr, Vilhon Reach',
            'alignment'      => 'LG',
            'symbol'         => 'Balanced scales resting on a warhammer',
            'favored_weapon' => 'Justicar (longsword)',
        ]);
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => 'Clangeddin Silverbeard',
            'title'          => 'The Father of Battle, The Giantkiller, The Goblinbane, Lord of the Twin Axe, The Rock of Battle, The Wyrmslayer',
            'level'          => 'Intermediate',
            'aliases'        => 'Clanggedin (shield dwarves), Clanggendin',
            'portfolio'      => 'Battle, war, valor, bravery, honor in battle',
            'regions'        => 'The Great Rift, The North',
            'alignment'      => 'LG',
            'symbol'         => 'Crossed silver battleaxes',
            'favored_weapon' => 'Giantbane (Battleaxe)',
            'master_id'      => God::where('name', 'Odin Borrson')->first()->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Holy Justice';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons plus two choice';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Tyr</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 2,
        ], ['WIS', 'CHA'], [
            'Divine', 'Good',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Medicine', 'Religion', 'Society']
        );
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 3,
            'meta'  => '<dl>
    <dt>Actions</dt> <dd>Action</dd>
    <dt>Spell</dt> <dd>Divine Favor</dd>
</dl>',
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Paladin' => 30,
            'Cleric'  => 20,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name => ['is_clergy' => true],
            'Paladin'    => ['is_clergy' => true],
        ]);
        // TODO: add Class Features
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead');
        $helper->addDomainToClass($class, ['Law', 'Retribution']);
        $helper->addSpellsToClass($class, [
            0  => ['Clean Self', 'Conviction', 'Detect Magic', 'Detect Undead', 'Forbidding Ward', 'Light', 'Message', 'Radiant Mark',
                'Resist', 'Stabilize', ],
            1  => ['Bless', 'Command', 'Cure Wounds', 'Detect Chaos', 'Detect Evil', 'Divine Favor' => 'Positive only',
                'Hand of the Faithful', 'Note', 'Silvered Weapon', ],
            2  => ['Aid', 'Augury', 'Blindsight', 'Discern Lies', 'Enchant Item', 'Glorious Raiment', 'Hold Person', 'Insignia of Alarm',
                "Owl's Wisdom", 'Remove Fear', 'Restoration', 'Resist Elements', 'Spiritual Weapon', 'Undead Bane Weapon', ],
            3  => ['Air of Authority', 'Aspect of the Deity, Lesser', 'Create Lantern Archon', 'Grace', 'Halt', "Heart's Ease",
                'Insignia of Blessing', 'Insignia of Healing', 'Prayer', ],
            4  => ['Aura of Purity', 'Celestial Fortress', 'Ceremony', 'Divine Power', 'Divine Wrath', 'Guardian of Faith',
                'Sacred Item', ],
            5  => ['Atonement', 'Celestial Brand', 'Dispel Chaos', 'Dispel Evil', 'Divine Weapon', 'Hallow', 'Tomb of Light'],
            6  => ['Heal', 'Planar Ally', 'Summon Celestial', 'True Seeing'],
            7  => ['Channel Celestial', 'Divine Decree', 'Feast of Champions', 'Holy Aura', 'Holy Word', 'Raise Dead', 'Righteous Glare',
                'Shield of Law', ],
            8  => ['Crown of Glory', 'Divine Aura', 'Last Judgment'],
            9  => ['Crusade', 'Exalted Fury', 'Heavenly Host', 'Imprisonment'],
            10 => ['Avatar'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Tyr';
        $feat->requirement = 'Must be LG';
        $feat->description = '<p>You are a Paladin of Tyr.</p>
<ul>
    <li>Increase your WIS score by 1, to a maximum of 20</li>
    <li>Increase your CHA score by 1, to a maximum of 20</li>
    <li>You gain Proficiency with Heavy Armor</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Clean Self', 'Forbidding Ward', 'Light', 'Message', 'Radiant Mark'],
            1 => ['Command', 'Detect Evil', 'Faith Healing', 'Protection From Chaos', 'Protection From Evil', 'Silvered Weapon',
                'Undead Bane Weapon', ],
            2 => ['Aura of Hope', 'Aura of the Owl', 'Aura of Protection', 'Diamond Spray', 'Discern Lies', 'Divine Presence',
                'Halt', 'Insignia of Alarm', 'Grace', 'Restoration', 'Restore Senses', 'Resist Elements', ],
            3 => ['Aspect of the Deity, Lesser', 'Aura of Vitality', 'Aura of Will', 'Celestial Blood', 'Circle of Protection From Chaos',
                'Circle of Protection From Evil', 'Condemnation', 'Create Food and Water', 'Create Lantern Archon', 'Daylight',
                'Emerald Burst', 'Hand of the Faithful', 'Insignia of Blessing', 'Insignia of Healing', 'Lawful Sword',
                'Prayer', 'Remove Curse', ],
            4 => ['Aura of Life', 'Aura of Purity', 'Celestial Fortress', 'Divine Power', 'Favor of Ilmater', 'Sacred Item'],
            5 => ['Exalted Fury', 'Holy Aura', 'Holy Weapon', 'Shield of Law'],
        ]);
        $helper->addFeatToGodPantheon($god, 'Faeruneon', $feat);

        $class                = new Klass;
        $class->name          = 'Priest of Clangeddin';
        $class->type          = 'Priest';
        $class->key_attribute = 'CON or WIS';
        $class->weapons       = 'Simple Weapons, Martial Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 2,
            'skill_progress' => 2,
        ], ['CON', 'WIS']);

        // Skills
        $helper->addSkillsToClass($class,
            ['Athletics', 'Concentration', 'Diplomacy', 'Medicine', 'Religion']
        );
        $helper->addFeaturesToClass($class, [
            'divine_feat'  => [3, 9, 15, 20],
            'fighter_feat' => [2, 6, 12, 18],
        ]);
        $helper->addDomainToClass($class, ['War']);
        $helper->addSpellsToClass($class, [
            0  => ['Blade Ward', 'Cutting Hand', 'Detect Magic', 'Light', 'Mold Earth', 'Stabilize', 'True Strike'],
            1  => ['Aura of Courage', 'Bless', 'Bristle', 'Cure Wounds', 'Divine Favor', 'Divine Smite', 'Fist of Stone',
                'Silvered Weapon', 'Silverbeard', ],
            2  => ['Aid', 'Aura of War', "Bear's Endurance", "Bull's Strength", 'Enlarge', 'Halt', 'Imbue with Cold Iron',
                'Imbue with Silvered', 'Magic Weapon', 'Protection From Arrows', 'Protection From Poison', 'Rage', 'Remove Fear',
                'Restoration', 'Resist Fire', 'Undead Bane Weapon', ],
            3  => ['Elemental Weapon', 'Ghost Touch', 'Grace', 'Imbue with Adamantine', 'Prayer', 'Toxin Immunity'],
            4  => ['Celestial Fortress', 'Ceremony', 'Divine Power', 'Ritual of the March', 'Stoneskin'],
            5  => ['Banishing Smite', 'Commune', 'Divine Weapon', 'Holy Weapon'],
            6  => ['Atonement', "Hero's Feast"],
            7  => ['Aspect of the Deity, Greater', 'Feast of Champions', 'Holy Aura', 'Raise Dead', 'Shield of the Archons'],
            8  => ['Crusade', 'Heavenly Host' => 'The summoned host will appear dwarven'],
        ]);
        $helper->addSpellSlotsToClass($class, 'seven');
        $helper->addClassesToGod($god, 'Morndinsamman', [
            'Fighter'   => 25,
            'Cleric'    => 1,
            'Bard'      => 5,
            'Barbarian' => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            $class->name => ['is_clergy' => true],
            'Fighter',
            'Barbarian' => ['meta' => 'Must take the Dwarven Battle Rager Feat'],
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Tyr demands that his followers exhibit a law-abiding, honest nature and he asks no less of his chosen. Tyr chooses those who exhibit a strong sympathy with law over chaos and who understand that the perfect is the enemy of the good. Justice must be done, even if it isn’t always infallible.</p>
<p>Tyr’s scions tend to be stern and inflexible in their approach, rooting out crime and applying the law equally to all even in exceptional circumstances that might reasonably require another solution.</p>
<ol>
    <li>You brought down a corrupt royal or wealthy individual</li>
    <li>You acted in a self-sacrificing way that brought honor to you or your group of allegiance</li>
    <li>A family member suffered at the hands of an organized criminal group. You vowed to bring them to justice</li>
    <li>Live honorably, fight honorably, die honorably</li>
    <li>Tyr has chosen you to crusade for justice, to travel the world looking for a place that needs it</li>
    <li>You don't know whey Tyr favors you. You don't feel particularly just, far from it</li>
</ol>",
            'devotion' => "<p>Following Tyr means dedicating your life to the pursuit of justice, honor, and righteousness. As a follower of Tyr, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Justice</dt> <dd>Justice is deserved by the high and low of society</dd>
    <dt>Power</dt> <dd>Only I can bring justice to the world</dd>
    <dt>Duty</dt> <dd>I am honor bound to serve the public</dd>
    <dt>Community</dt> <dd>My righteous actions will inspire the community to be more righteous</dd>
    <dt>Protection</dt> <dd>I'm trying to protect the place where I live, and the people who live there</dd>
</dl>",
            'earn_piety' => [
                'Bringing a criminal to the attention of the law',
                'Seeking justice for a wrong committed regardless of any personal stakes you might hold',
                'Bringing honor to you or your community',
            ],
            'lose_piety' => [
                'Obstructing justice',
                "Perpetuating any double standard where you don't apply the same rules to yourself as you would to others",
                'Bringing shame upon yourself or your community through action or inaction',
            ],
            'piety3' => '<h4>Favored God: Tyr</h4>
<p>You gain Inspiration when you deliver a just punishment or reward to the deserving</p>',
            'piety10' => "<h4>Justiciar's Insight</h4>
<p>You can cast Atonement with this trait, requiring no components. Once you cast this spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
            'piety25' => '<h4>Under Arrest</h4>
<p>You can cast Hold Person with this trait at-will, requiring no components. WIS is your spellcasting ability for this spell. You may only cast this spell on a creature you are apprehending under the law, to bring them to justice</p>',
            'piety50' => '<h4>Chosen of Tyr</h4>
<p>If you are unable to see due to darkness or blindness, you gain tremorsense out to 30 feet for as long as you remain blinded in this way</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Ilmater';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'The Crying God, The Broken God, The Lord on the Rack, The One Who Endures, The Rack-Broken Lord',
            'aliases'        => 'Ayuruk (Iulutiun), Itishikopak (Angulutiun)',
            'level'          => 'Lesser',
            'portfolio'      => 'Endurance, Martyrdom, Perseverance, Suffering',
            'regions'        => 'Calimshan, Damara, Impiltur, Tethyr',
            'alignment'      => 'LG',
            'symbol'         => 'Hands bound at the wrist with red cord.',
            'favored_weapon' => 'An open hand (unarmed strike)',
            'master_id'      => $tyr->id,
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Monk'   => 30,
            'Cleric' => 10,
        ]);

        $class                = new Klass;
        $class->name          = 'Painbearers';
        $class->type          = 'Priest';
        $class->key_attribute = 'CON or WIS';
        $class->weapons       = 'Simple Weapons plus two choice';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Ilmater</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 10,
            'skill_points'   => 4,
            'skill_progress' => 2,
        ], ['CON', 'WIS'], [
            'Divine', 'Good',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Medicine', 'Religion', 'Society']
        );

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name => ['is_clergy' => true],
            'Monk'       => ['is_clergy' => true],
            'Paladin'    => ['is_clergy' => true],
        ]);

        $feature              = new Feature;
        $feature->key         = 'holy_resistance';
        $feature->name        = 'Holy Resistance';
        $feature->description = '<p>You gain Resistance to Negative, and Fire damage</p>';
        $helper->saveFeature($feature, []);

        $helper->addFeaturesToClass($class, [
            'fear_immunity'   => [6],
            'holy_resistance' => [12],
        ]);
        $class->features()->save(app()->features['talent'], ['level' => 2, 'meta' => 'Die Hard']);
        $class->features()->save(app()->features['feat'], ['level' => 3, 'meta' => 'Great Fortitude', 'idx' => 1]);
        $class->features()->save(app()->features['feat'], ['level' => 9, 'meta' => 'Mettle']);
        $class->features()->save(app()->features['feat'], ['level' => 15, 'meta' => 'Improved Mettle']);
        $helper->addDomainToClass($class, ['Good', 'Healing', 'Strength', 'Suffering']);
        $helper->addSpellsToClass($class, [
            0 => ['Blade ward', 'Daze', 'Detect Magic', 'Disrupt Undead', 'Ease Pain', 'Forbidding Ward', 'Guidance', 'Light',
                'Mending', 'Message', 'Remove Disease', 'Resist', 'Shield', 'Stabilize', 'Word of Radiance', ],
            1 => ['Alarm', 'Angelic Halo', 'Bless', 'Cure Wounds', 'Detect Evil', 'Exorcism', 'Faith Healing', 'Jump', 'Painless Death'],
            2 => ['Absorb Elements', 'Aid', 'Augury', 'Aura of Will', "Bear's Endurance", "Bull's Strength", "Cat's Grace",
                'Create Food and Water', 'Grace', 'Hold Person', 'Insignia of Alarm', "Owl's Wisdom", 'Remove Fear', 'Remove Paralysis',
                'Restoration', 'Resist Acid', 'Resist Elements', 'Resist Force', 'Resist Poison', 'Resist Sonic', 'Shatter',
                'Warding Bond', 'Zone of Truth', ],
            3  => ['Aspect of the Deity, Lesser', 'Blindness', 'Comprehension', 'Dispel Magic', 'Glorious Raiment', "Heart's Ease",
                'Insignia of Blessing', 'Insignia of Healing', 'Neutralize Poison', 'Prayer', 'Revivify', 'Tongues', 'Undead Bane Weapon', ],
            4  => ['Aura of Life', 'Condemnation', 'Endurance of Ilmater', 'Divination', 'Favor of Ilmater', 'Freedom of Movement',
                'Globe of Invulnerability', 'Guardian of Faith', 'Remove Curse', 'Sacred Item', 'Stoneskin', ],
            5  => ['Atonement', 'Banishment', 'Celestial Blood', 'Celestial Brand', 'Commune', 'Dispel Outsider'],
            6  => ['Heal', "Hero's Feast", 'Stone to Flesh'],
            7  => ['Aspect of the Deity, Greater', 'Bastion of Good', 'Holy Aura', 'Phoenix Fire', 'Raise Dead', 'Shield of Law',
                'Shield of the Archons', ],
            8  => ['Divine Aura', 'Exalted Fury', 'Invulnerability', 'Last Judgment', 'Mind Blank'],
            9  => ['Blinding Glory', 'Empty Body', 'End to Strife', 'Miracle', 'Revival'],
        ]);
        $helper->addSpellSlotsToClass($class, 'eight');

        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Broken Ones')->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Order of St. Dionysus')->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Followers of the Unhindered Path')->first());

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Torm';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'The True, The True Deity, The Loyal Fury, The Hand of Righteousness',
            'level'          => 'Lesser',
            'portfolio'      => 'Duty, loyalty, courage, obedience',
            'regions'        => 'Dalelands, Tethyr, The Vast',
            'alignment'      => 'LG',
            'symbol'         => 'A right-handed metal gauntlet held upright, palm open and toward the viewer.',
            'favored_weapon' => "Duty's Bond (greatsword)",
            'master_id'      => $tyr->id,
        ]);
        $god->pantheons()->save(app()->pantheons["Yondalla's Children"], [
            'name'           => 'Arvoreen',
            'title'          => 'The Defender, The Vigilant Guardian, The Wary Sword',
            'level'          => 'Lesser',
            'portfolio'      => 'Defense, War, Vigilance, Halfling Warriors, Duty',
            'alignment'      => 'LG',
            'symbol'         => 'Cornucopia on a shield',
            'favored_weapon' => 'Hornblade (Short Sword)',
            'master_id'      => God::where('name', 'Yondalla')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Gnome'], [
            'name'           => 'Gaerdal Ironhand',
            'title'          => 'The Stern, Shield of the Golden Hills',
            'level'          => 'Demi',
            'portfolio'      => 'Protection',
            'alignment'      => 'LG',
            'symbol'         => 'Iron Band',
            'master_id'      => God::where('name', 'Garl Glittergold')->first()->id,
            'favored_weapon' => 'Hammersong (Warhammer)',
        ]);
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => 'Gorm Gulthyn',
            'aliases'        => 'Heimdall',
            'title'          => 'Fire Eyes, Lord of the Bronze Mask, The Eternally Vigilant',
            'level'          => 'Demi',
            'portfolio'      => 'Vigilance',
            'regions'        => 'The Great Rift',
            'alignment'      => 'LG',
            'symbol'         => 'Shining bronze or brass mask with two eyeholes of flame',
            'master_id'      => God::where('name', 'Odin Borrson')->first()->id,
            'favored_weapon' => 'Axegard (Battleaxe)',
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Paladin' => 30,
            'Cleric'  => 10,
        ]);
        $helper->addClassesToGod($god, "Yondalla's Children", [
            'Paladin' => 20,
            'Ranger'  => 20,
        ]);
        $helper->addClassesToGod($god, 'Gnome', [
            'Paladin' => 20,
            'Fighter' => 15,
        ]);
        $helper->addClassesToGod($god, 'Morndinsamman', [
            'Paladin' => 20,
            'Fighter' => 15,
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Paladin' => ['is_clergy' => true],
            'Fighter',
        ]);
        $helper->addWorshipClassesToGod($god, "Yondalla's Children", [
            'Paladin'     => ['is_clergy' => true],
            'Ranger'      => ['is_clergy' => true],
            'Sacred Fist' => ['is_clergy' => true],
            'Scout', 'Monk',
        ]);
        $helper->addWorshipClassesToGod($god, 'Gnome', [
            'Paladin' => ['is_clergy' => true],
            'Fighter',
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            'Paladin' => ['is_clergy' => true],
            'Fighter',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Torm';
        $feat->requirement = 'Must be LG and Torm must be your Patron';
        $feat->description = '<p>You are a Paladin of Torm.</p>
<h5>Code of Torm</h5>
<dl>
    <dt>Be the champion of the weak and the defenseless</dt> <dd>Your duty is to those who lack the power you wield. Care for the sick and aid the distressed. Be an example to the young. Protect your friends. Be generous in so far as your resources allow. There are two things that will blemish the faithful, and these are riches and pride. If one but remains in strained circumstances, he will not be marred.</dd>
    <dt>Be stern, unyielding, and unswerving in your battles with evil</dt> <dd>Make war upon evil and injustice without cessation. Do not recoil before the enemy, but let your wrath undo the wicked. Seek not only courage, but also wisdom to see that stupidity and courage are cousins. Courage also means taking the side of truth in all matters, rather than seeking the expedient lie.</dd>
    <dt>Obey your masters with alert judgment and anticipation</dt> <dd>Trust in your master, for his duty to you is given by Torm , serve him as though your own body were already dead, and you will be one man in a thousand. There are many places where compromise is expected; loyalty is not amongst them. If your path is without mortal master, let Torm and his code guide your steps.</dd>
    <dt>Serve the common good and the rule of law established by honorable rulers</dt> <dd>Your fourfold duties are to faith, family, masters, and all good being of Faerun. Strive to maintain law and order. Question unjust laws by suggesting improvement or alternatives, not additional laws.</dd>
    <dt>Seek prowess and skill in all endeavors</dt> <dd>Throughout your life, advance daily, becoming more skillful than yesterday, more skillful than today so that your strength may be used in the service of the Triad, rather than in personal aggrandizement. This is never ending.</dd>
    <dt>Stand ever alert against corruption</dt> <dd>Strike quickly and forcefully against the rot in the hearts of mortals. Avoid all excesses and seek to defeat hubris, gullibility and ignorance within yourself. Purpose and discipline clear the mind. Your breath should only bring truth, always be faithful to your word. Bring painful, quick death to traitors.</dd>
    <dt>Every failure of duty diminishes Torm and every success adds to his luster</dt> <dd>Stand firm in your beliefs, for this faith roots you and gives hope against despair. In the midst of a single breath, where only goodness is held, is the way of Torm . But there is no one who can understand this clarity at first. Purity is something that cannot be attained except by piling effort upon effort.</dd>
    <dt>Be ever mindful of the code, and use them in your actions to swiftly enact justice</dt> <dd>The church of Tyr and Ilmater are the mind and heart of the Triad, bringing judgment and compassion to men. The church of Torm is the mighty hand of the Triad, swiftly enacting their wisdom. Hold to the virtues and duties of the code, realizing that though the ideals cannot be reached, the quality of striving towards them ennobles the spirit. In confronting difficult matters, if at first you leave it alone, fix the code in your heart, exclude self-interest, and make an effort, you will not go far from your mark.</dd>
</dl>
<ul>
    <li>You gain proficiency with Heavy Armor.</li>
    <li>You gain 2 Spell Point.</li>
    <li>You gain the Channel Divinity Class Feature to channel Positive energy against Undead.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Clean Self', 'Conviction', 'Shield', 'Stabilize'],
            1 => ['Aura of Courage', 'Command', 'Silvered Weapon'],
            2 => ['Aura of Protection', 'Aura of the Bear', 'Aura of the Bull', 'Aura of Hope', 'Aura of War', 'Aura of Will',
                'Branding Smite', 'Diamond Spray', 'Divine Presence', 'Grace', 'Hand of the Faithful', 'Insignia of Alarm',
                'Restoration', 'Restore Senses', 'Resist Elements', 'Silver Mail of Torm', 'Undead Bane Weapon', ],
            3 => ['Aspect of the Deity, Lesser', 'Aura of Vitality', 'Circle of Protection From Evil', 'Condemnation',
                'Create Food and Water', 'Create Lantern Archon', 'Daylight', 'Emerald Burst', 'Golden Mail of Torm', 'Insignia of Blessing',
                'Insignia of Healing', "King's Castle", 'Lawful Sword', 'Prayer', 'Remove Curse', 'Zone of Truth', ],
            4 => ['Aura of Life', 'Aura of Purity', 'Celestial Blood', 'Celestial Fortress', 'Divine Power', 'Favor of Ilmater',
                'Sacred Item', ],
            5 => ['Aura of Power', 'Exalted Fury', 'Fiery Vision', 'Holy Aura', 'Holy Weapon', 'Righteous Glare', 'Shield of Law'],
            6 => ['Heavenly Host'],
        ]);
        $helper->addFeatToGodPantheon($god, 'Faeruneon', $feat);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Arvoreen';
        $feat->requirement = 'Must be LG and Arvoreen must be your Patron';
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>Add the Stealth skill as a Class Skill</li>
    <li>You gain the Dodge Feat</li>
    <li>You gain 2 Talents</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior', 'Halfling']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Message', 'Shield', 'Stabilize'],
            1 => ['Aura of Courage', 'Enlarge', 'Darkvision', 'Silvered Weapon', 'Undead Bane Weapon'],
            2 => ['Animate Weapon', 'Aura of Protection', 'Aura of the Bull', 'Aura of Hope', 'Aura of War', 'Aura of Will',
                'Branding Smite', 'Diamond Spray', 'Divine Presence', 'Grace', 'Insignia of Alarm', 'Restoration', 'Resist Elements', ],
            3 => ['Circle of Protection From Evil', 'Condemnation', 'Create Lantern Archon', 'Discern Lies', 'Emerald Burst',
                'Hand of the Faithful', 'Insignia of Blessing', 'Insignia of Healing', 'Lawful Sword', 'Prayer', 'Remove Curse',
                'Safe Clearing', ],
            4 => ['Aura of Purity', 'Celestial Fortress', 'Giant Form'],
            5 => ['Aura of Power', 'Holy Aura', 'Holy Weapon'],
            6 => ['Heavenly Host'],
        ]);
        $helper->addFeatToGodPantheon($god, "Yondalla's Children", $feat);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Gaerdal Ironhand';
        $feat->requirement = 'Must be LG and Gaerdal Ironhand must be your Patron';
        $feat->description = '<ul>
    <li>You gain Proficiency with Heavy Armors</li>
    <li>You gain the Shield Master Feat</li>
    <li>You gain 1 Talent</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior', 'Gnome']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Conviction', 'Shield', 'Stabilize'],
            1 => ['Deafening Clang', 'Shield of Faith', 'Silvered Weapon', 'Undead Bane Weapon'],
            2 => ['Aura of Protection', 'Diamond Spray', 'Divine Presence', 'Insignia of Alarm', 'Inspire Defense', 'Grace',
                'Resist Elements', ],
            3 => ['Circle of Protection From Evil', 'Condemnation', 'Discern Lies', 'Emerald Burst', 'Hand of the Faithful',
                'Insignia of Blessing', 'Insignia of Healing', 'Lawful Sword', 'Prayer', 'Remove Curse', ],
            4 => ['Celestial Fortress'],
        ]);
        $helper->addFeatToGodPantheon($god, 'Gnome', $feat);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Gorm';
        $feat->requirement = 'Must be LG and Gorm Gulthyn must be your Patron';
        $feat->description = '<ul>
    <li>You gain Proficiency with Heavy Armors</li>
    <li>You gain the Sentry Feat</li>
    <li>You gain 1 Talent</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior', 'Dwarf']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Conviction', 'Shield', 'Stabilize'],
            1 => ['Silvered Weapon', 'Silverbeard', 'Undead Bane Weapon'],
            2 => ['Aura of Hope', 'Aura of War', 'Aura of Will', 'Diamond Spray', 'Discern Lies', 'Divine Presence', 'Grace',
                'Insignia of Alarm', 'Restoration', 'Restore Senses', ],
            3 => ['Aspect of the Deity, Lesser', 'Circle of Protection From Evil', 'Condemnation', 'Create Food and Water',
                'Emerald Burst', 'Fire Eyes', 'Hand of the Faithful', 'Insignia of Blessing', 'Insignia of Healing', 'Lawful Sword',
                'Prayer', 'Remove Curse', 'Resist Fire', ],
            4 => ['Celestial Fortress', 'Divine Power'],
            5 => ['Aura of Power', 'Exalted Fury', 'Holy Weapon', 'Righteous Glare'],
            6 => ['Heavenly Host' => 'The summoned host will appear dwarven'],
        ]);
        $helper->addFeatToGodPantheon($god, 'Morndinsamman', $feat);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Torm is a demanding god who asks much of his followers. He bestows his gifts only on those Paladins whose ‘goodness’ and zeal reflect the god’s own. Torm’s rigidity is both his source of strength and his greatest weakness in refusing to acknowledge followers he does not feel are pure enough.</p>
<p>Torm’s scions are almost always found inside the orders of Paladins and similar holy orders, particularly the Oath of Devotion.</p>
<ol>
    <li>You tracked down and parleyed with a unicorn. It vouched for you purity of heart</li>
    <li>You offered to die for your god. He refused, but instead took you into his service</li>
    <li>You were raised into the paladin orders form birth when you were abandoned into Torm's care</li>
    <li>You spoke to an angel, and it changed your life forever</li>
    <li>You betrayed friends, family and everything you ever knew in order to keep your Oath</li>
    <li>You spent several weeks on your knees in vigil to Torm until he finally accepted your sword in fealty</li>
</ol>",
            'devotion' => '<p>Following Torm means dedicating your life to honour. As a follower of Torm, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Courage Duty</dt> <dd>I must face evil whenever I find it without hesitation</dd>
    <dt>Pride</dt> <dd>Torm is infallible, and so am I by extension</dd>
    <dt>Heroism</dt> <dd>If my god is with me, I could strike down mountains</dd>
    <dt>Greater Good</dt> <dd>People might not understand it yet, but everything I do is for their own good</dd>
    <dt>Purity</dt> <dd>I must be pure of heart, mind, and body, or I will lose my miracles and Torm will forsake me</dd>
</dl>',
            'earn_piety' => [
                'Upholding your oath even when it would cause you personal harm or injury',
                'Showing kindness and mercy in the face of evil',
                'Being an active force for Good as you see it, even if your help is not asked for',
            ],
            'lose_piety' => [
                'Allowing evil to go unchallenged when you see it',
                'Forgoing active acts of charity if it is within your means',
                'Acting against the spirit of your oath',
            ],
            'piety3' => '<h4>Favored God: Torm</h4>
<p>You gain Inspiration when you uphold your Oath against your own interests or desires</p>',
            'piety10' => '<h4>Miracle</h4>
<p>Your Lay on Hands pool increases by a number of points equal to your Character Level. You can use your Lay on Hands feature to end curses in the same way you cure Poison and Disease</p>',
            'piety25' => '<h4>Evil Cannot Hide</h4>
<p>You can use your Divine Sense ability at-will</p>',
            'piety50' => '<h4>Chosen of Torm</h4>
<p>You are immune to magical or mental influence that would cause you to break your Oath</p>',
        ]);
        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons["Yondalla's Children"]->id,
            'favor'       => "<p>Arvoreen is a wise and watchful god who values practice, forethought, and tactics over brute strength. Unlike gods of war, he doesn’t choose champions for their feats of conquest or stories of legend, but for their reliability and compassion.</p>
<p>Arvoreen's scions are often smart and perceptive, able to adapt their strategy to the villain at hand, and direct their comrades to just the right ploy in any given situation.</p>
<ol>
    <li>Your home was attacked by an overwhelming enemy. Only your leadership averted a complete catastrophe</li>
    <li>You once took down a giant with a slingshot</li>
    <li>You defeated an undead horror with no weapons but your wits and a walking stick</li>
    <li>You know all the local legends of your heritage and by extension exactly what to do when danger comes calling</li>
    <li>You use a bizarre household item as a weapon or a shield after it saved your life</li>
    <li>You once outran a ghost, inspiring the joke that you are 'faster than life'</li>
</ol>",
            'devotion' => '<p>Following Arvoreen means dedicating yourself to the small guy over the big guy. As a follower of Arvoreen, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Civic Duty</dt> <dd>For all of us to be safe, everyone has to know their responsibilities</dd>
    <dt>Community</dt> <dd>Where one of us perishes, we have all failed them</dd>
    <dt>Courage</dt> <dd>Neither my size nor strength have any bearing on whether I stand up for what is right</dd>
    <dt>Hard Work</dt> <dd>Keeping everyone safe means practice and training</dd>
    <dt>Knowledge</dt> <dd>Our best source of security are the tales and legends of our forebears</dd>
</dl>',
            'earn_piety' => [
                'Drawing from a legend or folklore to defeat an enemy',
                'Working as a team to take down a much stronger foe',
            ],
            'lose_piety' => [
                'Putting your needs ahead of those around you',
                'Using strength to bully someone weaker than you',
            ],
            'piety3' => '<h4>Favored God: Arvoreen</h4>
<p>You gain Inspiration when directing your companions in a new battle tactic</p>',
            'piety10' => '<h4>Plowshares to Swords</h4>
<p>You are proficient in improvised weapons. When you pick up an improvised weapon, it gains the Finesse property until you release it. The damage die for any improvised weapon you use is 1 size larger than it would usually be</p>',
            'piety25' => '<h4>Turtle Shell</h4>
<p>Creatures within 5 feet of you bearing a shield or improvised shield (including yourself) gain a +1 AC for each other creature bearing a shield or improvised shield.</p>',
            'piety50' => '<h4>Troll Knocker</h4>
<p>When you strike a creature of a size larger than you with an improvised weapon and score a critical hit, you can spend an Inspiration to force that creature to make a CON Save against a DC equal to 8+ your DEX modifier + your proficiency bonus or drop to 0 Hit Points.</p>',
        ]);
        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Gnome']->id,
            'favor'       => "<p>Gaerdal's favor is given to those who appreciate the fact that for some gnomes to live their lives free of worry or concern, others must see to the borders and defences of their towns and cities. This philosophy is often seen as self-sacrificing by those who adopt it, and it can sometimes lead to ill will when ‘irresponsible’ gnomes clash with Gaerdal’s hardline chosen.</p>
<p>Gaerdal's scions hail from communities that are sheltered from assault by a variety of cunning methods, first and foremost amongst which is a discreet location</p>
<ol>
    <li>You lost loved ones in an attack on your home</li>
    <li>You gained a severe physical impediment as a result of an injury. You've learned to adjust, with effort</li>
    <li>You left your family behind to join the armed forces</li>
    <li>Your sour disposition is matched only by the depth of your tactical skill</li>
    <li>You don't understand how jokes work, and you don't intend to. Gaerdal, frankly agrees</li>
    <li>Happiness, your mother always said, is for dogs and babies. This is the way the world is</li>
</ol>",
            'devotion' => "<p>Following Gaerdal means dedicating yourself to defending others. As a follower of Gaerdal, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Protection</dt> <dd>My role in life is to defend those I care about</dd>
    <dt>Community</dt> <dd>We all have a part to play in society. I can't do some things, but I can hold a shield</dd>
    <dt>Fatalism</dt> <dd>Joy and happiness will always give way to times of strife. We must be prepared</dd>
    <dt>Liberty</dt> <dd>I keep watch so that none of my people will ever be slaves again</dd>
    <dt>Hate</dt> <dd>I despise those who think they can stamp all over my culture because we are small</dd>
</dl>",
            'earn_piety' => [
                'Drawing from a legend or folklore to defeat an enemy',
                'Working as a team to take down a much stronger foe',
            ],
            'lose_piety' => [
                'Putting your needs ahead of those around you',
                'Using strength to bully someone weaker than you',
            ],
            'piety3' => '<h4>Favored God: Arvoreen</h4>
<p>You gain Inspiration when directing your companions in a new battle tactic</p>',
            'piety10' => '<h4>Plowshares to Swords</h4>
<p>You are proficient in improvised weapons. When you pick up an improvised weapon, it gains the Finesse property until you release it. The damage die for any improvised weapon you use is 1 size larger than it would usually be</p>',
            'piety25' => '<h4>Turtle Shell</h4>
<p>Creatures within 5 feet of you bearing a shield or improvised shield (including yourself) gain a +1 AC for each other creature bearing a shield or improvised shield.</p>',
            'piety50' => '<h4>Troll Knocker</h4>
<p>When you strike a creature of a size larger than you with an improvised weapon and score a critical hit, you can spend an Inspiration to force that creature to make a CON Save against a DC equal to 8+ your DEX modifier + your proficiency bonus or drop to 0 Hit Points.</p>',
        ]);
        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Morndinsamman']->id,
            'favor'       => "<p>Gorm's favor is reserved for those who consider their duty to be the same as their life. He gives his blessing to bodyguards for noble figures, to wall sentries and to any who would rather die than risk letting down their companions.</p>
<p>Gorm’s scions are almost always dwarves, but could in theory hail from any society needing to defend itself from a terrible outside threat. He prefers martial champions able to block blows with their bodies and shields than those of the Art.</p>
<ol>
    <li>You are (or were) the personal bodyguard to a King</li>
    <li>Your village was destroyed by mind flayers. You wanted to fight to the death, but Gorm saved you</li>
    <li>You've spent the better part of your life at the same post, without ever wavering of faltering</li>
    <li>You sheltered someone close to you from evil, and were scarred in the process</li>
    <li>When outnumbered ten to one, you stood your ground out of principle</li>
    <li>You don't know why Gorm has chosen you, but it does not bode well</li>
</ol>",
            'devotion' => "<p>Following Gorm means dedicating yourself to vigilance. As a follower of Gorm, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Heroism</dt> <dd>I'm always watching for a chance to prove myself</dd>
    <dt>Community</dt> <dd>I want to protect my family and friends</dd>
    <dt>Fatalism</dt> <dd>Disaster is coming. We can only wait for it and be ready when it strikes</dd>
    <dt>Determination</dt> <dd>I will not go down without a fight</dd>
    <dt>Fury</dt> <dd>I will destroy an enemy that threatens the things I hold dear</dd>
</dl>",
            'earn_piety' => [
                'Protecting your companions and keeping watch',
                'Standing ground against superior forces despite the odds',
            ],
            'lose_piety' => [
                'Giving away ground to the enemy for any reason',
                'Leaving your post or watch',
            ],
            'piety3' => '<h4>Favored God: Gorm</h4>
<p>You gain Inspiration when you spot something of note in one of your vigils, or when you refuse to be bullied or moved</p>',
            'piety10' => "<h4>Hold It</h4>
<p>When you damage a creature with an Opportunity Attack, that creature's Speed is reduced to 0 until the end of the turn</p>",
            'piety25' => '<h4>Danger Zone</h4>
<p>Whilst you are conscious and holding a weapon, the area in range of your weapon is difficult terrain for hostile creatures you can see</p>',
            'piety50' => '<h4>Chosen of Gorm</h4>
<p>You can spend an Inspiration to imbue your allies with intractable Dwarven might. You and all allies within 60 feet of you can no longer be moved against your will. This effect lasts for 1 minute, then fades</p>',
        ]);

        /**********************************************************************/

        $god = God::where('name', 'Bahamut')->first();
        $god->pantheons()->save(app()->pantheons[Pantheon::Faeruneon->value], [
            'name'           => 'Bahamut',
            'title'          => 'Angel of the Seven Heavens, Draco Paladin, The God of Dragons, Grandfather of Dragons, King of the Good Dragons, Justifies, Lord of the North Wind, The Platinum Dragon',
            'aliases'        => 'Xymor, Jazirian',
            'level'          => 'Lesser',
            'portfolio'      => 'Good Dragons, Wind, Wisdom',
            'regions'        => 'Damara, Impiltur, Vaasa',
            'alignment'      => 'LG',
            'symbol'         => 'A star above a milky nebula',
            'favored_weapon' => 'Bite (heavy pick)',
        ]);

        $helper->addWorshipClassesToGod($god, Pantheon::Faeruneon->value, [
            'Paladin' => ['is_clergy' => true],
            'Fighter',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Platinum Knights';
        $feat->requirement = 'You must be LG and Bahamut must be your Patron Deity';
        $feat->description = '<p>You are a Paladin of Bahamut</p>
<ul>
    <li>Increase your STR score by 1, to a maximum of 20</li>
    <li>Increase your CHA score by 1, to a maximum of 20</li>
    <li>You gain Proficiency with Heavy Armor</li>
    <li>You gain a +3 bonus to Diplomacy checks against Metallic dragons</li>
    <li>You are always affected by a Resistance spell</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Dragon', 'Divine Warrior', 'Good']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Acid Splash', 'Electric Arc', 'Fire Bolt', 'Frostbite', 'Poison Spray'],
            1 => ['Aura of Courage', 'Dragon Claws', 'Detect Evil', 'Endure Elements'],
            2 => ['Aura of Fear', 'Dragon Breath', 'Restoration'],
            3 => ['Aspect of the Deity, Lesser', 'Dragon Wings', 'Remove Curse'],
            4 => ['Atonement', 'Divine Power', 'Dragon Ally', 'Draconic Might'],
            5 => ['Aura of Power', 'Dragon Form'],
            6 => ['Aspect of the Deity, Greater', 'Holy Aura', 'Commune Archetype'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Faeruneon->value, $feat);

        $feat              = new Feat;
        $feat->name        = 'Honor Guard of Bahamut';
        $feat->description = '<p>You further your devotion to Bahamut</p>
<ul>
    <li>When you cast the Spell Dragon Breath, treat it as if it was Heightened +2</li>
    <li>You gain the Channel Divinity (Positive: Dragons) and the Channel Divinity: Dragon Class Features</li>
    <li>You may gain a Pseudo Dragon as your Familiar.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Dragon', 'Divine Warrior']);
        $feat->parent_feats()->save(app()->feats['Platinum Knights']);
        $helper->addFeatToGodPantheon($god, Pantheon::Faeruneon->value, $feat);

        /**********************************************************************/

        $helper->addFeatsToClass(Klass::where('name', 'Paladin')->first(), [
            'Paladin of Tyr'              => 2,
            'Paladin of Torm'             => 2,
            'Paladin of Arvoreen'         => 2,
            'Paladin of Gaerdal Ironhand' => 2,
            'Paladin of Gorm'             => 2,
        ]);
    }
}
