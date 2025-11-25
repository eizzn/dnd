<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsCorellonSeeder extends Seeder
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
        $god->name  = 'Corellon Larethian';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'           => $god->name,
            'title'          => 'Creator of the Elves, First of the Seldarine, Coronal of Arvandor, The Protector, Ruler of All Elves',
            'level'          => 'Greater',
            'portfolio'      => 'Magic, Music, Arts, Crafts, War, the Elven Race (Sun Elves), Poetry, Bards, Warriors, High Magic',
            'alignment'      => 'CG',
            'symbol'         => 'Quarter moon or starburst',
            'favored_weapon' => 'Sahandrian (Long Sword)',
        ]);
        $helper->addClassesToGod($god, 'Seldarine', [
            'Fighter' => 20,
            'Wizard'  => 20,
            'Ranger'  => 5,
            'Paladin' => 5,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Corellon';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons, Short Sword, Long Sword, Shortbow, Longbow';
        $class->armors        = 'Light Armor, Medium Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 3,
        ], ['WIS', 'CHA'], [
            'Elf', 'Divine',
        ]);

        // Skills
        $skills = ['Concentration', 'Diplomacy', 'Medicine', 'Performance', 'Religion'];
        $helper->addSkillsToClass($class, $skills);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead', 2);
        $helper->addChannelDivinityToClass($class, 'positive', 'Demon', 4);
        $helper->addSpellsToClass($class, [
            0 => ['Daze', 'Detect Magic', 'Guidance', 'Know Direction', 'Light', 'Message', 'Prestidigitation', 'Read Aura',
                'Shield', 'Stabilize', ],
            1 => ['Alarm', 'Bless', 'Create Water', 'Consecrate', 'Cure Wounds', 'Detect Alignment', 'Detect Poison', 'Lock',
                'Magic Weapon', 'Mending', 'Protection From Evil', 'Purify Food and Drink', 'Sanctuary', 'Remove Disease', ],
            2 => ['Augury', 'Calm Emotions', 'Continual Flame', 'Create Food and Water', 'Darkvision', 'Endure Elements',
                'Faerie Fire', 'Remove Fear', 'Resist Elements', 'Restoration', 'Restore Senses', 'See Invisibility', 'Silence',
                'Undead Bane Weapon', 'Water Breathing', ],
            3 => ['Circle of Protection From Evil', 'Dispel Magic', 'Faithful Healing', 'Heroism', 'Neutralize Poison',
                'Prayer', 'Quomaniith', 'Sanctified Ground', 'Sheltered Vitality', 'Stars of Arvandor', 'Theur`foqal', 'Zone of Truth', ],
            4 => ['Air Walk', 'Ceremony', 'Dimensional Anchor', 'Divine Wrath', 'Freedom of Movement', 'Globe of Invulnerability',
                'Ol`Iirtal`Eithun', 'Remove Curse', 'Spell Immunity', 'Vuorl`Kyshuf', ],
            5 => ['Atonement', 'Banishment', 'Commune with Texts', 'Sending', 'Tomb of Light', 'U`Aestar`Kess'],
            6 => ['Ialyshae`Seldar`Wihylos', 'Righteous Might', 'True Seeing'],
            7 => ['Akrmaesual', 'Cloak of Chaos', 'Daoin`Teague`Feer', 'Dimensional Lock', 'Divine Decree', 'Holy Aura',
                'Kai`Soeh`takal', 'N`Maernthor', 'Plane Shift', 'Regenerate', 'Renewal Pact', 'Word of Chaos', ],
            8  => ['Akh`Faen`Tel`Quess', 'Antimagic Field', 'Discern Location', 'Evaliir`Enevahr', 'N`Tel`Orar', 'Oacil`Quevan'],
            9  => ['Crusade', 'Spell Shift', 'Weapon of Judgment'],
            10 => ['Avatar', 'Fhaor`Akh`Tel`Quess', 'Gate', 'Ghaatiil', 'Miracle', 'N`Quor`Khaor'],
            11 => ['Uaul`Selu`Keryth'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addWorshipClassesToGod($god, 'Seldarine', [
            $class->name, 'Paladin', 'Wizard', 'Fighter', 'Ranger',
        ]);

        $corellon = $god;

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Seldarine']->id,
            'favor'       => "<p>Corellon's favour is bestowed with his characteristic whimsy, but usually on those who possess great magical gifts, and who display a similar temperament to their progenitor.</p>
<p>Corellon's scions are frequently difficult travel companions despite their best intentions, displaying irregular behaviour and an insatiable curiosity.</p>
<ol>
    <li>You remember all your past lives. It can be overwhelming at times</li>
    <li>You were born with great, nigh uncontrollable sorcerous power</li>
    <li>You once sought out Corellon in Arvandor, and joined with his essence for one glorious night</li>
    <li>You delved too deep into the mysteries of Wild Magic and were scarred by it, unlearning everything you knew in the process</li>
    <li>You spent much of your life wandering the world searching for meaning. You never found it</li>
    <li>You are one of the rare Drow to escape the clutches of Lolth and make it to the surface</li>
</ol>",
            'devotion' => '<p>Following Corellon means dedicating yourself to magic and change above any other concerns. As a follower of Corellon, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Change</dt> <dd>To refuse change is to let the light of Corellon fade from you. If you cannot grow, you are already dead</dd>
    <dt>Ascension</dt> <dd>Once, all elves were being of pure magic. I would be that way again</dd>
    <dt>Adaptability</dt> <dd>I must be ready for any situation or problem</dd>
    <dt>Liberty</dt> <dd>I shall never be beholden to another creature</dd>
    <dt>Passion</dt> <dd>Every single thing in this world is a sensual ravishment</dd>
</dl>',
            'earn_piety' => [
                'Engaging in a significant act of spontaneous or wild magic',
                'Being ruled by your passion in a matter of import',
                'Changing your mind on a whim',
            ],
            'lose_piety' => [
                'Allowing yourself to be bound to the will of others through debt, guilt or honor',
                'The destruction of important magical artifacts or objects of power',
            ],
            'piety3' => '<h4>Favored God: Corellon</h4>
<p>You gain Inspiration when you follow your passions or change your mind concerning a noteworthy issue</p>',
            'piety10' => '<h4>Flexible Recipe</h4>
<p>You can change the color of your hair and eyes at-will, in addition to subtle alterations to your facial structure. This is treated as always having access to a Disguise Kit</p>',
            'piety25' => '<h4>Powerful Blood</h4>
<p>You are immune to the Charmed condition, and you complete your Trance in two hours rather than four</p>',
            'piety50' => '<h4>Chosen of Corellon</h4>
<p>You can spend an Inspiration to reach into the flows of chaotic magic and trigger a Wild Magic Surge</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Solonor Thelandira';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'           => $god->name,
            'title'          => 'The Forest Hunter, The Great Archer, Keen-Eye',
            'level'          => 'Intermediate',
            'portfolio'      => 'Archery, Hunting, Survival, Green Elves',
            'symbol'         => 'Silver arrow with green fletching',
            'alignment'      => 'CG',
            'master_id'      => $corellon->id,
            'favored_weapon' => 'Longshot (Longbow)',
        ]);
        $helper->addClassesToGod($god, 'Seldarine', [
            'Fighter'       => 20,
            'Ranger'        => 10,
            'Arcane Archer' => 10,
            'Wizard'        => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Ranger', 'Scout', 'Fighter', 'Arcane Archer',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Labelas Enoreth';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'           => $god->name,
            'title'          => 'The Lifegiver, Lord of the Continuum, The One-Eyed God, The Philosopher, The Sage at Sunset',
            'level'          => 'Intermediate',
            'aliases'        => 'The Simbul of Yuirwood, Chronos, Karonis, Kronus',
            'portfolio'      => 'Time, Longevity, History, the Moment of Choice',
            'alignment'      => 'CG',
            'symbol'         => 'A setting sun',
            'favored_weapon' => 'The Timestave (quarterstaff)',
            'master_id'      => $corellon->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Labelas';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons, Longbow';
        $class->armors        = 'Light Armor, Medium Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 3,
        ], ['WIS', 'CHA'], [
            'Elf', 'Divine',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Arcana', 'Concentration', 'Diplomacy', 'Medicine', 'Performance', 'Religion']);

        $feature              = new Feature;
        $feature->key         = 'channel_divinity_improve_initiative';
        $feature->name        = 'Channel Divinity: Improve Initiative';
        $feature->description = '<p>You can use your Channel Divinity to speed your reactions in combat.</p>
<p>Spend 1 Spell Point and a use of your Channel Divinity. As an Action, you improve your Initiative by +5 beginning on your next turn.</p>';
        $helper->saveFeature($feature, ['Divine', 'Channel Divinity']);

        $helper->addFeaturesToClass($class, [
            'channel_divinity_improve_initiative' => [2],
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead', 2);
        $helper->addSpellsToClass($class, [
            0 => ['Conviction', 'Detect Magic', 'Stabilize'],
            1 => ['Alter Metabolism', 'Bless', 'Cure Wounds', 'Detect Alignment', 'Detect Temporal Anomaly', 'Extra Steps',
                'Mending', 'Sanctuary', 'Time Capsule', ],
            2 => ['Augury', 'Calm Emotions', 'Create Food and Water', 'Endure Elements', 'Faerie Fire', 'Faithful Healing',
                'Hurry / Delay', 'Modify Age', 'Remove Fear', 'Restoration', 'Restore Senses', 'Silence', 'Timeslip', ],
            3 => ['Circle of Protection From Evil', 'Dispel Magic', 'Haste', 'Neutralize Poison', 'Prayer', 'Sands of Time',
                'Slow', 'Stars of Arvandor', 'Zone of Truth', ],
            4  => ['Ceremony', 'Globe of Invulnerability', 'Remove Curse', 'Spell Immunity', 'Vuorl`Kyshuf'],
            5  => ['Atonement', 'Banishment', 'Commune with Texts', 'Create Timeslip Gate', 'Sending', 'U`Aestar`Kess'],
            6  => ['Conceal Temporal Anomaly', 'Hindsight', 'Ialyshae`Seldar`Wihylos', 'True Seeing'],
            7  => ['Akrmaesual', 'Dimensional Lock', 'Kai`Soeh`takal', 'Plane Shift', 'Regenerate'],
            8  => ['Akh`Faen`Tel`Quess', 'Alter Lifeline', 'Antimagic Field', 'Temporal Stasis', 'Time Travel', 'Timereaver'],
            9  => ['N`Tel`Orar', 'Spell Shift'],
            10 => ['Time Stop'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addClassesToGod($god, 'Seldarine', [
            'Wizard'   => 20,
            'Bard'     => 10,
            'Sorcerer' => 10,
            'Monk'     => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Wizard', 'Bard',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Eilistraee';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'           => $god->name,
            'title'          => 'The Dark Maiden, Lady of the Dance, Lady Silverhair, THe Dark Dancer, The Dancing Goddess',
            'level'          => 'Lesser',
            'portfolio'      => 'Song, Beauty, Dance, Swordwork, Hunting, Moonlight',
            'alignment'      => 'CG',
            'regions'        => 'High Forest, Silverymoon, Waterdeep, Cormanthor',
            'symbol'         => 'Unclad female drow with long hair dancing before a full moon with a silver bastard sword',
            'favored_weapon' => 'The Moonsword (Bastard Sword)',
            'master_id'      => $corellon->id,
        ]);

        $helper->addClassesToGod($god, 'Seldarine', [
            'Adventurer'   => 20,
            'Swashbuckler' => 10,
            'Bard'         => 10,
        ]);
        $helper->addWorshipClassesToGod($god, 'Seldarine', [
            'Paladin', 'Swashbuckler', 'Adventurer', 'Bard', 'Ranger',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Sword Dancer';
        $feat->requirement = 'Must be CG and Eilistraee must be your Patron Deity';
        $feat->description = '<p>You are a Paladin of Eilistraee.</p>
<ul>
    <li>You gain either the Intelligent Defense or Beautiful Defense Feat</li>
    <li>You gain 3 Spell Points</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Blade Ward', 'Boon', 'Clean Self', "Eilistraee's Moonfire", 'Guidance', 'Light', 'Shield', 'Stabilize',
                'Sword Burst', 'True Strike', ],
            1 => ['Divine Favor', 'Divine Inspiration', 'Fleet Step', 'Heroism', 'Jump', 'Longstrider', 'Mage Armor'],
            2 => ['Animal Messenger', 'Augury', 'Aura of Will', 'Blur', "Cat's Grace", 'Create Food and Water', 'Exorcism',
                'Faerie Fire', 'Levitate', 'Moonbeam', 'Protection From Poison', 'Remove Fear', 'Restoration', 'See Invisibility',
                'Silence', 'Undead Bane Weapon', ],
            3 => ['Aura of Silence', 'Haste', 'Keen Edge', 'Neutralize Poison', 'Prayer', 'Vitality Shield', 'Whirling Blade'],
            4 => ['Blink', 'Stars of Arvandor'],
            5 => ['Atonement', 'Banishing Smite', 'Divine Weapon', 'Holy Weapon'],
            6 => ['Crown of Stars', 'Holy Aura'],
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Fenmarel Mestarine';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'           => $god->name,
            'title'          => 'The Lone Wolf',
            'level'          => 'Hero',
            'portfolio'      => 'Outcasts, Scapegoats, Isolation',
            'alignment'      => 'CN',
            'symbol'         => 'Pair of elven eyes in the darkness',
            'favored_weapon' => 'The Black Bow (longbow)',
            'master_id'      => $corellon->id,
        ]);

        $helper->addClassesToGod($god, 'Seldarine', [
            'Ranger' => 30,
        ]);
        $helper->addWorshipClassesToGod($god, 'Seldarine', [
            'Ranger', 'Rogue', 'Scout',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Elikarashae';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'           => $god->name,
            'title'          => 'Defender of the Yuirwood',
            'level'          => 'Hero',
            'portfolio'      => 'Defense of the Yuirwood',
            'alignment'      => 'CG',
            'favored_weapon' => 'Shama (Spear), Maelat (Club), Ukava (Sling)',
            'master_id'      => $corellon->id,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Ranger', 'Barbarian',
        ]);

        // Sarula Iliene

        $god        = new God;
        $god->name  = 'Felarathael';
        $god->level = 'Solar';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'        => $god->name,
            'level'       => 'Archon',
            'alignment'   => 'LG',
            'master_id'   => $corellon->id,
            'description' => '<p>Felarathael is a solar in the service of Corellon and the twin spirit of Lashrael. Their might is so great that some elves, especially gold elves, considered them to be demi-powers in their own right, but this was mistaken</p>
<p>Felarathael, along with Lashrael are the primary servitors of Corellon, most commonly acting as his messengers on Toril but also defending mortal elves under threat.</p>
<p>Felarathael and Lashrael are identical twins, with both appearing as tall, beautiful and androgynous elves of no particular race, with shining bodies and wearing gleaming white robes.</p>
<p>Despite being twins, the two have very different personalities. Felarathael is a being of pure rationality. Regardless of the situation, Felarathael considered things with calm detachment and logical reasoning. His speech, though slow and measured, is always with great reassurance. In battle, too, Felarathael is patient but skilled.</p>
<p>In battle, rather than deal injury to an opponent, Felarathael and Lashrael can cause the victim to sleep without fail, suffer from amnesia, be polymorphed into the form of a forest animal, or be randomly teleported 1 to 10miles away.</p>
<p>In the Year of the Lost Keep, 1379 DR, Felarathael and Lashrael went together to the Fugue Plane under the orders of Corellon Larethian to retrieve the soul of the slain drow Cavatina Xarann, a Darksong Knight of Eilistraee. They explained to her that a few hundred of the followers of Eilistraee had been turned back to their original dark elven form, and that Cavatina was among them, thanks to the sacrifice of Qilue Veladorn. Felarathael and Lashrael led her to Arvandor, as they claimed that the transformed drow would be allowed into the elven afterlife.</p>',
        ]);

        $god        = new God;
        $god->name  = 'Lashrael';
        $god->level = 'Solar';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'        => $god->name,
            'level'       => 'Archon',
            'alignment'   => 'LG',
            'master_id'   => $corellon->id,
            'description' => "<p>Felarathael is a solar in the service of Corellon and the twin spirit of Lashrael. Their might is so great that some elves, especially gold elves, considered them to be demi-powers in their own right, but this was mistaken</p>
<p>Lashrael, along with Felarathael are the primary servitors of Corellon, most commonly acting as his messengers on Toril but also defending mortal elves under threat.</p>
<p>Felarathael and Lashrael are identical twins, with both appearing as tall, beautiful and androgynous elves of no particular race, with shining bodies and wearing gleaming white robes.</p>
<p>Despite being twins, the two have very different personalities. Lashrael is a being of extreme emotion. Lashrael speaks and delivers Corellon's messages with powerful conviction, deep sorrow, or tremendous joy, depending on the subject. He makes dramatic gestures and his mood can change as quickly as the subject does. He is a fierce fighter who never asks for or gives quarter to an opponent.</p>
<p>In battle, rather than deal injury to an opponent, Felarathael and Lashrael can cause the victim to sleep without fail, suffer from amnesia, be polymorphed into the form of a forest animal, or be randomly teleported 1 to 10miles away.</p>
<p>In the Year of the Lost Keep, 1379 DR, Felarathael and Lashrael went together to the Fugue Plane under the orders of Corellon Larethian to retrieve the soul of the slain drow Cavatina Xarann, a Darksong Knight of Eilistraee. They explained to her that a few hundred of the followers of Eilistraee had been turned back to their original dark elven form, and that Cavatina was among them, thanks to the sacrifice of Qilue Veladorn. Felarathael and Lashrael led her to Arvandor, as they claimed that the transformed drow would be allowed into the elven afterlife.</p>
<p>As of 1479 DR, some elven crusaders who revered Lashrael opposed the influence of the leShay of Sarifal</p>",
        ]);
    }
}
