<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsKelemvorSeeder extends Seeder
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
        $god->name  = 'Kelemvor';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Lord of the Dead, Judge of the Damned, Master of the Crystal Spire, The Great Guide, Lord of the Crystal Spire',
            'level'          => 'Greater',
            'portfolio'      => 'Death, The Dead',
            'regions'        => 'Western Heartlands, Amn, Tethyr, Calimshan',
            'alignment'      => 'LN',
            'symbol'         => 'Upright skeletal arm holding the golden scales of justice',
            'favored_weapon' => 'Fatal Touch (Bastard Sword)',
        ]);
        $kelemvor = $god;

        $class                = new Klass;
        $class->name          = 'Doomguides';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons plus one choice';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $class->description   = '<p>Doomguides are priests of Kelemvor.</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 2,
        ], ['WIS', 'CHA'], [
            'Divine',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Medicine', 'Religion', 'Society']
        );
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 3, 6, 9, 12, 15, 18, 20],
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead');
        $helper->addDomainToClass($class, ['Death', 'Law']);
        $helper->addSpellsToClass($class, [
            0  => ['Clean Self', 'Detect Undead', 'Disrupt Undead', 'Resist Negative Energy', 'Stabilize'],
            1  => ['Bless', 'Command Undead', 'Cure Wounds', 'Curse', 'Detect Magic', 'False Life', 'Fear', 'Hide from Undead',
                'Painless Death', 'Undead Bane Weapon', ],
            2  => ['Augury', "Bear's Endurance", 'Bind Undead', 'Death Knell', 'Healing Spirit', 'Insignia of Alarm', 'Living Undeath',
                'Restoration', 'Revivify', 'Rigor Mortis', 'Speak with Dead', ],
            3  => ["Bear's Hex", 'Circle of Protection From Evil', 'Circle of Protection From Good', 'Create Food and Water',
                'Glyph of Rebuking', 'Glyph of Turning', 'Hold Person', 'Insignia of Blessing', 'Insignia of Healing', 'Spirit Guardians',
                'Prayer', 'Tongues', ],
            4  => ['Animate Dead', 'Animate with Spirit', 'Aura of Vitality', 'Dust to Dust', 'Guardian of Faith', 'Incorporeal Nova',
                'Life Ward', 'Remove Curse', ],
            5  => ['Atonement', 'Antilife Shell', 'Aura of Life', 'Bone Blade', 'Commune', 'Contact Other Plane', 'Dispel Outsider',
                'Hibernate', 'Purifying Light', ],
            6  => ['Aura of Undeath', 'Create Undead', 'Harm', 'Heal', 'Magic Jar', 'Raise Dead', 'Slay Living', 'Soul Cage',
                'Word of Recall', 'Undead to Death', ],
            7  => ['Divine Word', 'Finger of Death', 'Holy Aura', 'Power Word Pain', 'Resurrection', 'Spirit Walk'],
            8  => ['Destruction', 'Power Word Heal'],
            9  => ['Invulnerability', 'Power Word Kill', 'Soul Bind', 'True Resurrection'],
            10 => ['Revival'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Cleric' => 25,
            'Wizard' => 15,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Paladin', 'Wizard', 'Monk',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Knights of the Eternal Order';
        $feat->requirement = 'You must be LN and Kelemvor must be your Patron Deity';
        $feat->description = '<p>You are a Paladin of Kelemvor</p>
<ul>
    <li>You are proficient with Heavy Armor</li>
    <li>While you may create undead, you are not allowed to let them persist. You must eventually destroy them.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Detect Undead', 'Disrupt Undead', 'Disrupting Weapon', 'Resist Negative Energy', 'Stabilize', 'Touch of Fatigue'],
            1 => ['Bless', 'Command Undead', 'Curse', 'Hide from Undead', 'Undead Bane Weapon'],
            2 => ['Aura of Courage', 'Aura of Hope', 'Aura of the Owl', 'Gentle Repose', 'Insignia of Alarm'],
            3 => ['Circle of Protection From Evil', 'Circle of Protection From Good', 'Ghost Touch', 'Insignia of Blessing',
                'Insignia of Healing', 'Revivify', ],
            4 => ['Animate Dead', 'Aura of Vitality'],
            5 => ['Atonement', 'Aura of Life', 'Holy Weapon'],
            6 => ['Raise Dead', 'Slay Living', 'Undead to Death'],
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Null';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => $god->name,
            'title'          => 'Deathwyrm, Guardian of the Lost, Night Dragon, Reaver',
            'level'          => 'Intermediate',
            'portfolio'      => 'Death, Fate, Judgment',
            'alignment'      => 'LN',
            'symbol'         => 'A circle divided diagonally into white and black semicircles',
            'favored_weapon' => 'Bite',
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Jergal',
            'title'          => 'Lord of the End of Everything, The Pitiless One, Scribe of the Doomed, The Forgotten One, Seneschal of the Crystal Spire, The Final Scribe',
            'aliases'        => 'Nakasr',
            'level'          => 'Demi',
            'portfolio'      => 'Fatalism, Guardian of tombs, Proper burial',
            'regions'        => 'Moonsea, Dragon Coast, Vilhon Reach',
            'alignment'      => 'LN',
            'symbol'         => 'Jawless skull and writing quill on scroll',
            'favored_weapon' => 'A white glove (scythe)',
            'master_id'      => $kelemvor->id,
        ]);
        $god->pantheons()->save(app()->pantheons["Yondalla's Children"], [
            'name'           => 'Urogalan',
            'title'          => 'He Who Must Be, The Black Hound, Lord in the Earth, The Protector, The Shaper',
            'level'          => 'Demi',
            'alignment'      => 'LN',
            'portfolio'      => 'Earth, Death',
            'regions'        => 'Luiren',
            'symbol'         => "Silhouette of a dog's head",
            'favored_weapon' => 'Doomthresher Dire Flail (Flail)',
            'master_id'      => God::where('name', 'Yondalla')->first()->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Doomscribes';
        $class->key_attribute = 'WIS or INT';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Jergal</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 2,
        ], ['WIS', 'INT']);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name,
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Medicine', 'Religion', 'Society']
        );
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 3, 6, 9, 12, 15, 18, 20],
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead');
        $helper->addDomainToClass($class, ['Death', 'Knowledge', 'Law']);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Detect Magic', 'Detect Undead', 'Disrupt Undead', 'Light', 'Resist Negative Energy', 'Stabilize',
                'Touch of Death', ],
            1 => ['Bless', 'Cure Wounds', 'Detect Charm', 'Fear', 'Illusory Script', 'Note'],
            2 => ['Abeyance', 'Aid', 'Augury', 'Calm Emotions', 'Command Undead', 'Comprehend Language', 'Death Knell',
                'Hold Person', 'Insignia of Alarm', 'Life Pact', 'Map', "Owl's Wisdom", 'Rigor Mortis', 'Undead Bane Weapon', ],
            3 => ['Amanuensis', 'Animate Dead', 'Bind Undead', 'Comprehension', 'Dispel Magic', 'Geas', 'Insignia of Blessing',
                'Insignia of Healing', 'Journal', 'Know Bloodline', 'Prophecy', 'Revivify', 'Seek Eternal Rest', 'Sending',
                'Speak with Dead', 'Spirit Guardians', 'Tongues', ],
            4  => ['Commune with Texts', 'Curse of Aging', 'Detect Scrying', 'Divination', 'Remove Curse'],
            5  => ['Atonement', 'Chronicle', 'Incorporeal Nova', 'Legend Lore', 'Scrying'],
            6  => ['Circle of Death', 'Create Undead', 'Raise Dead', 'Slay Living', 'Temporal Eye', 'True Seeing'],
            7  => ['Dictum', 'Plane Shift', 'Resurrection', 'Undeath after Death'],
            8  => ['Alter Lifeline'],
            9  => ['Foresight', 'Soul Bind'],
            10 => ['True Resurrection'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $class                = new Klass;
        $class->name          = 'Priest of Urogalan';
        $class->key_attribute = 'WIS or DEX';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 4,
        ], ['WIS', 'CHA']);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Cleric' => 20,
            'Wizard' => 10,
        ]);
        $helper->addWorshipClassesToGod($god, "Yondalla's Children", [
            $class->name,
        ]);

        // Skills
        $skills = ['Concentration', 'Diplomacy', 'Medicine', 'Performance', 'Religion'];
        $helper->addSkillsToClass($class, $skills);
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 3, 6, 9, 12, 15, 18, 20],
        ]);
        $helper->addSpellsToClass($class, [
            0 => ['Blade Ward', 'Disrupt Undead', 'Light', 'Mold Earth', 'Resist', 'Resist Negative Energy', 'Stabilize'],
            1 => ['Bless', 'Calm Animals', 'Command', 'Cure Wounds', 'Detect Magic', 'Divine Favor', 'Fear', 'Sanctuary'],
            2 => ['Command Undead', 'Consecrate', 'Endure Elements', 'Hold Person', 'Insignia of Alarm', 'Remove Fear',
                'Restoration', 'Stone Sphere', 'Undead Bane Weapon', ],
            3 => ['Bind Undead', 'Burrow', 'Dispel Magic', 'Faithful Hound', 'Insignia of Blessing', 'Insignia of Healing',
                'Meld into Stone', 'Neutralize Poison', 'Nondetection', 'Prayer', 'Sending', ],
            4  => ['Ceremony', 'Land Womb', 'Stoneskin'],
            5  => ['Atonement', 'Banishment', 'Commune with Nature', 'Hibernate', 'Summon Elemental' => 'Earth Elemental only'],
            6  => ['Druid Grove', "Hero's Feast", 'Raise Dead'],
            7  => ['Divine Decree', 'Holy Word', 'Resurrection', 'Symbol'],
            8  => ['Discern Location', 'Earthquake'],
            9  => ['Soul Bind'],
            10 => ['True Resurrection'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons["Yondalla's Children"]->id,
            'favor'       => "<p>Urogalan is a quiet and retiring god who often comes to people late in life. His perspective is a comforting one familiar to those who have either been to death and returned, or who are reaching the end of their natural life.</p>
<p>Urogalan's scions have usually been scarred by meeting death in some fashion, either by briefly experiencing it themselves or by losing people close to them.</p>
<ol>
    <li>You were killed, and saw what comes after death. It brought you peace, and you finally understand</li>
    <li>You were stillborn, and suddenly came alive after hours of being assumed dead</li>
    <li>you lost all your family to plague in your early youth</li>
    <li>You lost your loving spouse after a long life together. You can't wait to see them again, but there's something you need to do first</li>
    <li>Someone died to protect you, and you witnessed the whole thing</li>
    <li>You are sincerely and utterly willing to give your life to protect someone, and you know this is likely</li>
</ol>",
            'devotion' => '<p>Following Urogalan means acknowledging that life has an end, and that endings are not to be feared. As a follower of Urogalan, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Acceptance</dt> <dd>We can only reach our potential once we accept the inevitability of our passing</dd>
    <dt>Community</dt> <dd>We need to leave a better world for the next generation</dd>
    <dt>Heroism</dt> <dd>When I reach the next life, I want to enter it with my head held high</dd>
    <dt>Honor</dt> <dd>I must uphold the values of those who came before me</dd>
    <dt>Charity</dt> <dd>You cannot take it with you after you die</dd>
</dl>',
            'earn_piety' => [
                'Seeking advice from ancestors or the dead',
                'Comforting the living and giving peace to the departed',
            ],
            'lose_piety' => [
                'Disturbing the dead needlessly',
                'Allowing fear of death to drive your actions',
            ],
            'piety3' => '<h4>Favored God: Urogalan</h4>
<p>You gain Inspiration when you speak to friendly spirits, calm the dead or give advice to the living based on the lessons of the dead</p>',
            'piety10' => '<h4>Friends on the Other Side</h4>
<p>You can attempt social interaction with all undead creatures, even those lost to hunger or mindless fury. All such rolls are made with Advantage</p>',
            'piety25' => "<h4>Urogalan's Lantern</h4>
<p>Light shed by spells you cast or items you are holding always reveals invisible and incorporeal undead within the illuminated area</p>",
            'piety50' => '<h4>Chosen of Urogalan</h4>
<p>You may use an Action to spend an Inspiration and touch a creature that died within the last minute. That creature passes to a peaceful afterlife regardless of their actions in life. Furthermore, they cannot be raised from the dead or become an undead creature</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Myrkul';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Crown Prince of Murghom, Lord of Bones, Old Lord Skull, The Reaper, The Deathless Lord of Death',
            'aliases'        => "N'asr (Bedine)",
            'level'          => 'Demi',
            'portfolio'      => 'Dying, Death, Undead',
            'alignment'      => 'NE',
            'symbol'         => 'White human skull',
            'favored_weapon' => 'Scythe',
            'master_id'      => $kelemvor->id,
            'description'    => "<p>Myrkul now serves Kelemvor as the Reaper of souls.</p>
<p>Myrkulites have adapted a role that is useful to the living, serving as caretakers of cemeteries, providing funeral services and caretakers of the dying. Myrkulite priests are also known to provide a 'dying wish' service. For the right price, a Myrkulite priest will try to fulfil a dying man's last wish.</p>
<h3>Ranks</h3>
<dl>
    <dt>Elder Doom</dt> <dd>High Priest of a temple</dd>
    <dt>Death Bringer</dt> <dd>War leader of a Myrkulite army. Second in command of the temple</dd>
    <dt>Withering Lord</dt> <dd>Spiritual leader, disciplinarian, head trainer, and head of household or quarter-master of a temple</dd>
    <dt>Undead Master</dt> <dd>Head of scripture and ritual at a temple, head of a shift of reapers</dd>
    <dt>Ritual Consecrator</dt> <dd>Consecrator and re-consecrator of alters, wards, and fanes (holy structures such as doorways)</dd>
    <dt>Bone Dancer</dt> <dd>Maintainer and deployer of undead attached to a temple as guardians, creator of new undead, leader of the bone dance moral ritual</dd>
    <dt>Crypt Carver</dt> <dd>Prepares inscriptions on confines and temple walls and door, cast enchantments upon burial sites and tombs. The lowest rank of priest allowed to preside over a funeral of a reaper</dd>
    <dt>Shroud Wearer</dt> <dd>Senior lower priest of the church. Veterans of daily temple and faith service. Often leaders of missions among the laity and lowest rank allowed to preside over lay funerals</dd>
    <dt>Bone Talker</dt> <dd>Leader of minor daily prayers at a shrine or temple of Myrkul. Guard and lay brewer at a temple</dd>
    <dt>Night Walker</dt> <dd>The lowest rank of a full priest. Guard and laborer at a temple</dd>
    <dt>Daring One</dt> <dd>Accepted sworn novice in training and allowed to wear dark vestments and tread holy ground unescorted</dd>
</dl>",
        ]);
        $helper->addClassesToGod($god, 'Faeruneon', [
            'Wizard' => ['level' => 20, 'meta' => 'Necromancer'],
        ]);
    }
}
