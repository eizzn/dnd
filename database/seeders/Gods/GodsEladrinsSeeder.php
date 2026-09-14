<?php

namespace Database\Seeders\Gods;

use App\Enums\Pantheon;
use App\Models\Feat;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GodsEladrinsSeeder extends Seeder
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

        $oberon = God::where('name', 'Corellon Larethian')->first();
        $oberon->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => 'Oberon',
            'title'     => 'The Green Lord, The Ever-changing, King of the Seelie Court, Lord of Beasts, Summer King',
            'portfolio' => 'Fey, Magic',
            'level'     => 'Fey Lord',
            'aliases'   => 'Oran, Faerinaal, The Hidden One (Rashemen)',
            'alignment' => 'CG',
        ]);

        $god = God::where('name', 'Sehanine Moonbow')->first();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'        => 'Titania',
            'title'       => 'Summer Queen, Faerie Queen, Queen of Light, Queen of Stars, Lady of the Lake, Lady of Stars, Sovereign of the Twilight Realm, Queen of the Seelie Court',
            'level'       => 'Fey Lord',
            'aliases'     => 'Tiandra, Morwel, Bhalla (Rashemen)',
            'portfolio'   => 'Fey, Friendship',
            'alignment'   => 'CG',
            'symbol'      => 'White diamond & blue star',
            'master_id'   => $oberon->id,
            'description' => '<p>Titania is actually a manifestation of the 3 elven gods, Sehanine Moonbow, Hanali Celanil, and Aerdrie Faenya.</p>',
        ]);

        $god        = new God;
        $god->name  = 'Verenestra';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'Daughter of Titania',
            'level'     => 'Archfey',
            'portfolio' => 'Dryads, Nymphs, Sylphs, Selkies',
            'alignment' => 'CG',
            'symbol'    => 'Filigree-edged silver mirror',
            'master_id' => $oberon->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Asathalfinare'], [
            'name'      => 'Surminare',
            'title'     => '',
            'level'     => 'Demi',
            'portfolio' => 'Selkies, Beauty, Peace',
            'regions'   => 'Sea of Fallen Stars',
            'alignment' => 'NG',
            'symbol'    => "A pearl held in a selkie's paw",
            'master_id' => God::where('name', 'Istishia')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'        => 'Eldath',
            'title'       => 'Goddess of Singing Waters, Mother of Guardian of Groves, The Quiet One, Mother of the Waters',
            'level'       => 'Demi',
            'portfolio'   => 'Peace, Waterfalls, Springs, Pools, Stillness, Quite Glades, Druid Groves',
            'alignment'   => 'NG',
            'symbol'      => 'Waterfall plunging into a still pool',
            'master_id'   => God::where('name', 'Silvanus')->first()->id,
            'description' => "
<h4>Major Centers of Worship</h4>
<p>The most revered center of Eldathyn worship is Duskwood Dell in Amn, east of Eshpurta. There the waters of the River Rumril, a tributary of the Esmel River, plunge down the western cliffs of Eldath's Mount in the Troll Mountains via the Green Goddess Falls in a descent of over 400 feet and thence through a series of pools and lesser falls (called the Steps) out into Arundath, the Quiet Forest (known most commonly as the Snakewood for the serpentine denizens the Eldathyn use to scare away intruders). Here Most Exalted Fallskepper Alatoasz Berendim presides over a tree city of Eldathyn who train under priests in the service of the Green Goddess and send them out all over Faerun to find their personal place in Eldath's service.</p>
<p>Elah'zad, an ancient Eldathyn holy site in Anauroch, is also a place of great power. According to the Bedine, Elah'zad was the home of the moon goddess, Elah (Selûne), but At'ar the sun goddess drove her away and made it a prison for Eldath, the Mother of the Waters, because she was jealous of Eldath's beauty. Here Eldath can choose to speak through the mouth of any woman who enters the House of the Moon, a nearly circular palatial temple formed of chalky, translucent desert rock in the midst of a lake set in a sacred grove surrounded by over a hundred small springs. (The woman falls asleep and the goddess directly and completely controls her body.) At the House of the Moon charged magical items of the Eldathyn faith can be recharged through prayer and ritual by the grace of Eldath.</p>",
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Spirit Shaman' => 20,
            'Bard'          => 15,
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Druid' => ['is_clergy' => true],
            'Monk',
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Eldath's favour falls on those who have made exceptional provision for peace and mercy. Her gaze alights on mortals who hold life itself in the greatest esteem, and who consider violence to be the tool of a lost soul.</p>
<p>Eldath's scions are often those who have the privilege of living away from situations in which violence is a hard necessity. Hermits in the deep wood and monks secluded in monasteries are common examples.</p>
<ol>
    <li>You displayed pacifist principles at great cost to yourself</li>
    <li>You spend a great deal of time in the deep of the woods and the goddess came to you in a dream</li>
    <li>You were gravely injured by the cruelty of another, and healed in a sacred spring</li>
    <li>You were once a violent and evil person, but you were changed by the kindness of another and Eldath took pity on you</li>
    <li>You have pondered all your life on the silent mysteries of creation</li>
    <li>You don't know why the goddess chose you, and you don't even want her judgmental brand of help</li>
</ol>",
            'devotion' => '<p>Following Eldath means dedicating yourself to peace and stillness. As a follower of Eldath, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Purity</dt> <dd>Violence would stain my soul. I will not engage in it</dd>
    <dt>Protection</dt> <dd>I will use my gifts to shield and heal those who cannot defend themselves</dd>
    <dt>Tutelage</dt> <dd>No-one is beyond redemption. All can be shown the true way</dd>
    <dt>Mystery</dt> <dd>There are secrets to be found in the deep silence of the Goddess, I crave them, and fear them</dd>
    <dt>Kinship</dt> <dd>Truly, all living creatures are one. We should treat one another with respect and dignity</dd>
</dl>',
            'earn_piety' => [
                'Solving a crisis through nonviolence',
                'Healing or caring for the sick',
                'Taking time alone to observe silence and meditation',
            ],
            'lose_piety' => [
                'Violence except as a last resort (and even that requires absolution)',
                'Causing chaos or a loud disturbance in the calm',
            ],
            'piety3' => '<h4>Favored God: Eldath</h4>
<p>You gain inspiration when you take you time to meditate or muse on a problem before attempting to solve it</p>',
            'piety10' => '<h4>Sheltering Hands</h4>
<p>You can cast Sanctuary with this trait at-will, requiring no material components. WIS is your spellcasting ability for this spell</p>',
            'piety25' => "<h4>Silent Grove</h4>
<p>You can cast Silence with this trait, requiring no material components. Once you cast the spell in this way, you can't do so again until you finish a long rest. WIS is your spellcasting ability for this spell</p>",
            'piety50' => "<h4>Chosen of Eldath</h4>
<p>You can spend an Inspiration to cast Druid Grove. Once you cast this spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
        ]);
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Peace of Eldath')->first());

        $god        = new God;
        $god->name  = 'Hyrsam';
        $god->level = 'Archfey';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'The Prince of Fools, The Debaucher',
            'level'     => 'Archfey',
            'aliases'   => 'Damh',
            'portfolio' => 'Dance, Song, Celebrations, Satyrs, Sex',
            'alignment' => 'CN',
            'symbol'    => 'Flute, pipes and drum',
            'master_id' => $oberon->id,
        ]);

        $god        = new God;
        $god->name  = 'Sqeulaiche';
        $god->level = 'Archfey';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'Court Jester',
            'level'     => 'Archfey',
            'portfolio' => 'Trickery, Illusions, Leprechauns',
            'alignment' => 'CN',
            'symbol'    => 'Clover leaf or Pointed red hat',
            'master_id' => $oberon->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => 'Hlal',
            'title'          => 'Messenger of Asgorath, The Jester, The Pursued, Quicksilver (Seldarine)',
            'aliases'        => 'Avachel (Seldarine, ally of Erevan), Aasterinian',
            'level'          => 'Demi',
            'portfolio'      => 'Humor, Inspiration, Messages, Storytelling, Tricks',
            'alignment'      => 'CG',
            'symbol'         => 'An open book',
            'favored_weapon' => 'Claw (short sword, spear)',
            'master_id'      => God::where('name', 'Bahamut')->firstOrFail()->id,
        ]);

        $eachthighern        = new God;
        $eachthighern->name  = 'Eachthighern';
        $eachthighern->level = 'Demi';
        $eachthighern->save();
        $eachthighern->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $eachthighern->name,
            'title'     => 'Lord of Unicorns and Pegasus',
            'level'     => 'Archfey',
            'aliases'   => 'Kamerynn',
            'portfolio' => 'Healing, Loyalty, Protection, Pegasus, Unicorns',
            'alignment' => 'CG',
            'symbol'    => 'Unicorn horn',
            'master_id' => $oberon->id,
        ]);

        $god        = new God;
        $god->name  = 'Lurue';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'The Unicorn, The Unicorn Queen, The Queen of Talking Beasts',
            'level'     => 'Archfey',
            'aliases'   => 'Silverymoon, the Divine Beast, Lurae',
            'portfolio' => 'Talking beasts, Intelligent nonhumanoid creatures',
            'alignment' => 'CG',
            'master_id' => $eachthighern->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'      => $god->name,
            'title'     => 'The Unicorn, The Unicorn Queen, The Queen of Talking Beasts',
            'level'     => 'Demi',
            'aliases'   => 'Silverymoon, the Divine Beast, Lurae',
            'portfolio' => 'Talking beasts, Intelligent nonhumanoid creatures',
            'regions'   => 'Silverymoon, The North',
            'alignment' => 'CG',
            'master_id' => God::where('name', 'Eilistraee')->first()->id,
        ]);

        $god        = new God;
        $god->name  = 'Yathaghera';
        $god->level = 'Archfey';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'        => $god->name,
            'title'       => 'The Winged Queen',
            'level'       => 'Archfey',
            'portfolio'   => 'Pegasus',
            'alignment'   => 'CG',
            'description' => 'Daughter to Eachthighern and younger sister to Lurue',
            'master_id'   => $eachthighern->id,
        ]);

        $god        = new God;
        $god->name  = 'Skerrit';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'Forest Walker',
            'level'     => 'Archfey',
            'portfolio' => 'Centaurs',
            'alignment' => 'NG',
            'master_id' => $oberon->id,
        ]);

        $god        = new God;
        $god->name  = 'Fionnghuala';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'Queen of the Swanmays',
            'level'     => 'Archfey',
            'portfolio' => 'Swanmays, communication, sisterhood',
            'alignment' => 'NG',
            'symbol'    => 'White Feather',
            'master_id' => $oberon->id,
        ]);

        $god        = new God;
        $god->name  = 'Caoimhin';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'The Shy',
            'level'     => 'Archfey',
            'portfolio' => 'Food, Shy Friendship, Killoulis',
            'alignment' => 'N',
            'symbol'    => 'Tiny bowl and pin',
            'master_id' => $oberon->id,
        ]);

        God::where('name', 'Silvanus')->first()->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => 'Emmantiensien',
            'title'     => 'Treant-King',
            'level'     => 'Archfey',
            'portfolio' => 'Treants, Trees, Deep Magic',
            'alignment' => 'CG',
            'symbol'    => 'Two Acorns',
            'master_id' => $oberon->id,
        ]);

        $god        = new God;
        $god->name  = 'Nathair Sgiathach';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Archfey',
            'portfolio' => 'Mischief, Pranks, Pseudodragons, Faerie Dragons',
            'alignment' => 'CG',
            'symbol'    => 'A Smile',
            'master_id' => $oberon->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Archfey',
            'portfolio' => 'Mischief, Pranks, Pseudodragons, Faerie Dragons',
            'alignment' => 'CG',
            'symbol'    => 'A Smile',
            'master_id' => God::where('name', 'Bahamut')->first()->id,
        ]);

        $god        = new God;
        $god->name  = 'Lalibela';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'Saint',
            'level'     => 'Archfey',
            'portfolio' => 'Nixies',
            'alignment' => 'CG',
            'master_id' => $oberon->id,
        ]);

        $god        = new God;
        $god->name  = 'Psilofyr';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'Lord of the Myconids, The Great Fungus (through Araumycos), The Spore Lord, The Carrion King',
            'level'     => 'Archfey',
            'aliases'   => 'Araumycos',
            'portfolio' => 'Myconids, Community, Healing, Philosophy',
            'alignment' => 'LN',
            'symbol'    => 'Mycelium basket holding a crystal vial',
            'master_id' => $oberon->id,
        ]);

        $god        = new God;
        $god->name  = 'Sarula Lliene';
        $god->level = 'Archfey';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'The Nixie Queen',
            'level'     => 'Archfey',
            'portfolio' => 'Lakes, Streams, Water Magic, Nixies',
            'alignment' => 'CG',
            'symbol'    => 'Three blue lines with three crested points to each',
            'master_id' => $oberon->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Hero',
            'portfolio' => 'Lakes, Streams, Water Magic',
            'alignment' => 'CG',
            'symbol'    => 'Three blue lines with three crested points to each',
            'master_id' => $oberon->id,
        ]);

        $god        = new God;
        $god->name  = 'Remnis';
        $god->level = 'Archfey';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'Great Lord of Eagles',
            'level'     => 'Archfey',
            'portfolio' => 'Giant Eagles, Sky, Service',
            'alignment' => 'N(G)',
            'symbol'    => 'Head of a giant eagle with green eyes',
        ]);

        /**********************************************************************/

        $qad = God::where('name', 'Araushnee')->first();
        $qad->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => 'Queen of Air and Darkness',
            'title'     => 'Queen of the Unseelie Court',
            'level'     => 'Archfey',
            'portfolio' => 'Magic, Illusion, Darkness, Murder',
            'alignment' => 'CE',
            'symbol'    => 'A ten faceted black diamond',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Maglubiyet';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'           => $god->name,
            'title'          => 'Fiery-Eyes, The Mighty One, The Great One, The Great Scourge, The High Chieftain, The Battle Lord, The Lord of Depths and Darkness, The Conquering God',
            'level'          => 'Archfey',
            'portfolio'      => 'Goblins, Goblinoids, Leadership, War',
            'alignment'      => 'NE',
            'symbol'         => 'Bloody Axe',
            'favored_weapon' => 'Battleaxe',
            'master_id'      => $oberon->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Goblin'], [
            'name'           => $god->name,
            'title'          => 'Fiery-Eyes, The Mighty One, The Great One, The Great Scourge, The High Chieftain, The Battle Lord, The Lord of Depths and Darkness, The Conquering God',
            'level'          => 'Greater',
            'portfolio'      => 'Goblins, Goblinoids, Leadership, War',
            'alignment'      => 'NE',
            'symbol'         => 'Bloody Axe',
            'favored_weapon' => 'Battleaxe',
        ]);
        $helper->addClassesToGod($god, 'The Court of Stars', [
            'Fighter'   => 20,
            'Barbarian' => 20,
            'Cleric'    => 10,
        ]);
        $helper->addClassesToGod($god, 'Goblin', [
            'Fighter'   => 20,
            'Barbarian' => 20,
            'Cleric'    => 10,
        ]);

        $class                = new Klass;
        $class->name          = 'Sons of Maglubiyet';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons, 2 choice';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 2,
            'skill_progress' => 2,
        ], ['WIS', 'CHA']);
        $helper->addWorshipClassesToGod($god, 'The Court of Stars', [
            $class->name => ['is_clergy' => true],
            'Fighter', 'Barbarian', 'Artificer',
        ]);
        $helper->addWorshipClassesToGod($god, 'Goblin', [
            $class->name => ['is_clergy' => true],
            'Fighter', 'Barbarian', 'Artificer',
        ]);
        $helper->addSkillsToClass($class,
            ['Athletics', 'Concentration', 'Diplomacy', 'Intimidation', 'Religion']
        );
        $helper->addFeaturesToClass($class, [
            'fighter_feat'   => [1, 3, 15, 20],
            'combat_mastery' => [7],
        ]);
        $helper->addDomainToClass($class, ['Goblins', 'Cooperation', 'War']);
        $helper->addSpellsToClass($class, [
            0 => ['Blade Ward', 'Booming Blade', 'Call Attuned Weapon', 'Detect Magic', 'True Strike'],
            1 => ['Aura of Courage', 'Bless', 'Compelled Duel', 'Cure Wounds', 'Divine Favor', 'Heroism'],
            2 => ['Aid', 'Aura of War', "Bear's Endurance", 'Divine Presence', 'Enchant item', 'Heroics', 'Magic Weapon',
                'Protection From Arrows', 'Remove Fear', 'Resist Elements', 'Spiritual Weapon', ],
            3 => ['Air of Authority', 'Aspect of the Deity, Lesser', 'Haste', 'Keen Edge'],
            4 => ['Divine Power', 'Faithful Healing'],
            5 => ['Atonement', 'Consecrate Battlefield', 'Divine Weapon'],
            6 => ['Regeneration'],
            7 => ['Aspect of the Deity, Greater'],
            8 => ['Crusade', 'Divine Aura'],
        ]);
        $helper->addSpellSlotsToClass($class, 'eight');
        $maglubiyet = $god;

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Khurgorbaeyag';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'The Overseer of All, The Overseer',
            'level'     => 'Archfey',
            'portfolio' => 'Slavery, Oppression, Morale, Hobgoblins',
            'alignment' => 'LE',
            'symbol'    => 'Red and yellow striped whip',
            'master_id' => $maglubiyet->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Goblin'], [
            'name'      => $god->name,
            'title'     => 'The Overseer of All, The Overseer',
            'level'     => 'Lesser',
            'portfolio' => 'Slavery, Oppression, Morale, Hobgoblins',
            'alignment' => 'LE',
            'symbol'    => 'Red and yellow striped whip',
            'master_id' => $maglubiyet->id,
        ]);
        $helper->addClassesToGod($god, 'The Court of Stars', [
            'Fighter' => 20,
            'Wizard'  => 10,
            'Cleric'  => 10,
        ]);
        $helper->addClassesToGod($god, 'Goblin', [
            'Fighter' => 20,
            'Wizard'  => 10,
            'Cleric'  => 10,
        ]);
        $helper->addWorshipClassesToGod($god, Pantheon::Goblin->value, [
            'Paladin' => ['is_clergy' => true],
            'Fighter', 'Scout',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Nomog-Geaya';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'The General, The Warrior, The Torturer',
            'level'     => 'Archfey',
            'portfolio' => 'Authority, War, Hobgoblins',
            'alignment' => 'LE',
            'symbol'    => 'Crossed broadsword and handaxe',
            'master_id' => $maglubiyet->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Goblin'], [
            'name'      => $god->name,
            'title'     => 'The General, The Warrior, The Torturer',
            'level'     => 'Lesser',
            'portfolio' => 'Authority, War, Hobgoblins',
            'alignment' => 'LE',
            'symbol'    => 'Crossed broadsword and handaxe',
            'master_id' => $maglubiyet->id,
        ]);
        $helper->addClassesToGod($god, 'The Court of Stars', [
            'Fighter' => 30,
            'Cleric'  => 10,
        ]);
        $helper->addClassesToGod($god, 'Goblin', [
            'Fighter' => 30,
            'Cleric'  => 10,
        ]);
        $helper->addWorshipClassesToGod($god, Pantheon::Goblin->value, [
            'Paladin' => ['is_clergy' => true],
            'Fighter',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Bargrivyek';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'The Peacekeeper',
            'level'     => 'Archfey',
            'portfolio' => 'Unity of race, Goblins',
            'alignment' => 'LE',
            'symbol'    => 'White-tipped flail',
            'master_id' => $maglubiyet->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Goblin'], [
            'name'      => $god->name,
            'title'     => 'The Peacekeeper',
            'level'     => 'Lesser',
            'portfolio' => 'Unity of race, Goblins',
            'alignment' => 'LE',
            'symbol'    => 'White-tipped flail',
            'master_id' => $maglubiyet->id,
        ]);
        $helper->addClassesToGod($god, 'The Court of Stars', [
            'Fighter'   => 20,
            'Cleric'    => 15,
            'Artificer' => 5,
        ]);
        $helper->addClassesToGod($god, 'Goblin', [
            'Fighter'   => 20,
            'Cleric'    => 15,
            'Artificer' => 5,
        ]);
        $helper->addWorshipClassesToGod($god, Pantheon::Goblin->value, [
            'Shaman' => ['is_clergy' => true],
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Hruggek';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'        => $god->name,
            'title'       => '',
            'level'       => 'Archfey',
            'portfolio'   => 'Ambush, Furious Fighting, Bugbears',
            'alignment'   => 'CE',
            'symbol'      => 'Morningstar',
            'master_id'   => $maglubiyet->id,
            'description' => "<p>Bugbears as a race prize the severed heads of their conquered victims. They commonly spike these heads around their territories and especially their lairs. Whenever a powerful head is spiked in this way, they sometimes becomes an animated undead creature. The head is capable of serving as the tribe's memory (as bugbears cannot read).</p>",
        ]);
        $god->pantheons()->save(app()->pantheons['Goblin'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Lesser',
            'portfolio' => 'Ambush, Furious Fighting, Bugbears',
            'alignment' => 'CE',
            'symbol'    => 'Morningstar',
            'master_id' => $maglubiyet->id,
        ]);
        $helper->addClassesToGod($god, 'The Court of Stars', [
            'Fighter' => 10,
            'Ranger'  => 10,
            'Scout'   => 20,
        ]);
        $helper->addClassesToGod($god, 'Goblin', [
            'Fighter' => 10,
            'Ranger'  => 10,
            'Scout'   => 20,
        ]);
        $helper->addWorshipClassesToGod($god, 'Goblin', [
            'Ranger' => ['is_clergy' => true],
            'Barbarian',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Ranger of Hruggek';
        $feat->requirement = 'Hruggek must be your patron and you must have the Favored Enemy Class Feature';
        $feat->description = '<p>You gain the following.</p>
<ul>
    <li>You gain a +2 bonus to Stealth Skill checks.</li>
    <li>You gain a Sudden Strike Feat.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Goblin']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Undead Head'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Goblin->value, $feat);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Grankhul';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Hero',
            'portfolio' => 'Hunting, Senses, Surprise, Bugbears',
            'alignment' => 'CE',
            'symbol'    => 'Ever-open eyes in darkness',
            'master_id' => $maglubiyet->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Goblin'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Demi',
            'portfolio' => 'Hunting, Senses, Surprise, Bugbears',
            'alignment' => 'CE',
            'symbol'    => 'Ever-open eyes in darkness',
            'master_id' => $maglubiyet->id,
        ]);
        $helper->addClassesToGod($god, 'The Court of Stars', [
            'Scout'  => 20,
            'Ranger' => 10,
        ]);
        $helper->addClassesToGod($god, 'Goblin', [
            'Scout'  => 20,
            'Ranger' => 10,
        ]);
        $helper->addWorshipClassesToGod($god, 'Goblin', [
            'Ranger' => ['is_clergy' => true],
            'Scout', 'Rogue',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Ranger of Grankhul';
        $feat->requirement = 'Grankhul must be your patron and you must have the Favored Enemy Class Feature';
        $feat->description = '<p>You gain the following.</p>
<ul>
    <li>You gain a +2 bonus to Survival Skill checks.</li>
    <li>You gain the Improved Initiative Feat.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Goblin']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Undead Head'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Goblin->value, $feat);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Skiggaret';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Hero',
            'portfolio' => 'Fear, Bugbears',
            'alignment' => 'CE',
            'symbol'    => 'Black Claw',
            'master_id' => $maglubiyet->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Goblin'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Demi',
            'portfolio' => 'Fear, Bugbears',
            'alignment' => 'CE',
            'symbol'    => 'Black Claw',
            'master_id' => $maglubiyet->id,
        ]);
        $helper->addClassesToGod($god, 'The Court of Stars', [
            'Fighter' => 20,
            'Ranger'  => 10,
        ]);
        $helper->addClassesToGod($god, 'Goblin', [
            'Fighter' => 20,
            'Ranger'  => 10,
        ]);
        $helper->addWorshipClassesToGod($god, 'Goblin', [
            'Ranger' => ['is_clergy' => true],
            'Fighter', 'Barbarian',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Ranger of Skiggaret';
        $feat->requirement = 'Skiggaret must be your patron and you must have the Favored Enemy Class Feature';
        $feat->description = '<p>You gain the following.</p>
<ul>
    <li>You may cast the Fear spell as an Action.</li>
    <li>You gain an Additional 1st Level Spell Slot. This Additional Spell Slot can only be used to cast Fear.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Goblin']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Fear'],
            2 => ['Undead Head'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Goblin->value, $feat);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Raven Queen';
        $god->level = 'Archfey';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'        => $god->name,
            'title'       => 'Queen of the Shadar-kai',
            'level'       => 'Archfey',
            'portfolio'   => 'Life, Death',
            'alignment'   => 'LN',
            'symbol'      => "Raven's head, in profile, facing left",
            'regions'     => 'Shadowfell',
            'description' => "<p>Although a complete account of the Raven Queen's motivations and origins was not generally known, it was believed that she was originally a much beloved elf queen from the Feywild who witnessed the conflict between Corellon and Lolth.</p>
<p>Worried that the dispute might tear the Seldarine asunder, she rallied her followers to perform a powerful ritual in order to become a deity, so she could have the leverage to appeal to the deities' senses.</p>
<p>The ritual involved the offering of the queen's followers' souls and magic to add to her own power, enabling her to reach Arvandor. The followers, who called themselves shadar-kai, firmly believed that their queen was capable of reunifying the elven pantheon and the sundered elves.</p>
<p>However, evil wizards among the queen's followers attempted to divert some of the energy from the ritual to amplify their own powers. Moments before completing the ritual and reaching Arvandor, the queen reacted by punishing the wizards with a burst of divine fury. This curse corrupted the ritual into a siphon that dragged the queen and her followers into the Shadowfell, where she was instantly killed. However, thanks to her recently acquired divine powers, the queen rose from the ashes and, in her growing madness and grief, transformed the wizards into wretched avian forms known as nagpas, and banished them forever to wander the planes.</p>
<p>The queen herself was still further transformed by the corrupted ritual, her form dissolving into disconnected sensory perceptions. Moreover, both Corellon and Lolth considered her actions to be treason, so they erased the memory of her existence from all elves. In order to avoid disappearing entirely, she drew memories of her existence from the Shadowfell itself in order to sustain her identity. Over time, the subjective remains of the queen and the loose darkened memories gave rise to the entity that became known as the Raven Queen.</p>",
        ]);

        $god        = new God;
        $god->name  = 'Kannoth';
        $god->level = 'Archfey';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'Lord of Cendriane',
            'level'     => 'Archfey',
            'portfolio' => 'Vampires',
            'alignment' => 'CE',
            'master_id' => $qad->id,
        ]);

        $god        = new God;
        $god->name  = 'Neifion';
        $god->level = 'Archfey';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'Lord of Bats',
            'level'     => 'Archfey',
            'portfolio' => 'Bats, Were-bats',
            'alignment' => 'NE',
            'master_id' => $qad->id,
        ]);

        $god        = new God;
        $god->name  = 'Baba Yaga';
        $god->level = 'Archfey';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'      => $god->name,
            'title'     => 'Mother of All Witches, The Hag Witch',
            'level'     => 'Archfey',
            'portfolio' => 'Witches, Hags',
            'alignment' => 'CN(E)',
            'master_id' => $qad->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Yugoloth Lords'], [
            'name'      => 'Cegilune',
            'title'     => 'Mother of All Witches, The Hag Witch',
            'level'     => 'Yugoloth',
            'portfolio' => 'Witches, Hags, The Moon, Larvae',
            'alignment' => 'NE',
        ]);

        $god        = new God;
        $god->name  = 'Witchthorn';
        $god->level = 'Archfey';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'        => $god->name,
            'title'       => 'Verdant Prince, The Archfey of Kryptgarden Forest',
            'level'       => 'Archfey',
            'portfolio'   => 'Fey of Kryptgarden',
            'regions'     => 'Kryptgarden Forest',
            'alignment'   => 'NE',
            'description' => "<p>Witchthorn has a relationship with the Adarbrent noble family of Waterdeep. They send their firstborn child of each generation to pledge an oath to Witchthorn (a Warlock Fey Pact), and in return, they perform some unknown service before their 11th birthday, and in exchange, the family businesses and their homes are protected by secret fey guardians.</p>
<p>Witchthorn's wife, the dryad Ishaldra, was killed by the Great Green Dragon Claugiyliamatar. Witchthorn seeks a way to slay the dragon, or at least drive it from Kryptgarden forest.</p>",
        ]);
        $witchthorn      = $god;
        $god             = new God;
        $god->name       = 'Ishaldra';
        $god->level      = 'Archfey';
        $god->deleted_at = Carbon::now();
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'        => $god->name,
            'title'       => 'Princess of Kryptgarden',
            'level'       => 'Dead',
            'alignment'   => 'N',
            'regions'     => 'Kryptgarden Forest',
            'master_id'   => $witchthorn->id,
            'description' => "<p>Ishaldra is a dryad and wife to the Archfey Lord of Kryptgarden, Witchthorn, balancing his evil inclinations with her good nature.</p>
<p>Ishaldra was slain by the Great Green Dragon Claugiyliamatar, when he corrupted Ishaldra's tree.</p>",
        ]);

        $god        = new God;
        $god->name  = 'Absalom';
        $god->level = 'Archfey';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'        => $god->name,
            'title'       => 'The Favored, Son of Oberon, The Archfey of the UrlingWood',
            'level'       => 'Archfey',
            'alignment'   => 'LN',
            'portfolio'   => 'Fey of Rashemen',
            'regions'     => 'UrlingWood, Rashemen',
            'master_id'   => $oberon->id,
            'description' => "<p>Absalom, one of the sons of Oberon and Titania, is the Archfey ruler of all fey in the Rashemen area.</p>
<p>Long ago, he made a pact with the Raumathari Battlemages, to aid them in their war against Narfell and its horde of demons that they summoned. Today, that pact lives on through the Wychlaren of Rashemen.</p>
<p>Absalom agrees to offer the aid of the fey that are under his rule in the defence of Rashemen. He agrees to offer his magical aid in the creation of magical items for the Wychlaren and the Barbarian lodges. In return, he is gifted from the people of Rashemen, male children who show a gift for the Arcane. This agreement of male children is not known to the people in general (most times, not even the Huhrong knows of this) and only the upper Wychlaren know of this.</p>
<p>Most of these boys make a Warlock Pact with Absalom and become his agents. Absalom entitles 5 of these Warlocks as his lieutenants, (Winter, Summer, Dusk, Dawn, and Green). The Green Warlock is the title of the highest ranking soldier, and in Absalom's absence, is entitled to rule. Those boys that do not make a Warlock Pact with Absalom either become Artificers and return to the Wychlaren to serve, or are wiped of all memory and sent into the Horde lands of the Far East.</p>
<p>Long ago, Absalom was banished to the Prime World by his father. He has since mended his relationship and is welcomed back to the FeyWild. However, Absalom has formed an interest in this patch of the Prime, and always returns in Winter, while spending the rest of his time in the FeyWild.</p>
<p>While Absalom works openly with the Wychlaren, he actually favors the Durthans, for Absalom wishes to take a more aggressive approach towards Thay and Narfell. In the court of Absalom, Durthans are freely welcome. However, Absalom works with the Wychlaren because they are more numerous and have the sway of the Rashemi people.</p>
<p>Most Rashemi do not know of Absalom, and the Wychlaren wishes to keep it this way, to hide the dark agreement they have made with the Fey King. Absalom has also warned the Durthans from revealing his existence, as he does not wish to have to start a war with the people that surrounds his forest and his beloved land.</p>
<p>Those fey in Rashemen that oppose Absalom gathers to the Unseelie Court, and the rule of Aurilandur.</p>
<p>Absalom fears the encroachment of the Drow, the minions of his dark Mother-in-law (Lolth).</p>",
        ]);

        God::where('name', 'Auril')->first()->pantheons()->save(app()->pantheons['The Court of Stars'], [
            'name'        => 'Aurilandur',
            'title'       => 'The Frost Sprite Queen',
            'portfolio'   => 'Cold, Winter',
            'regions'     => 'The North Country, The North',
            'level'       => 'Archfey',
            'alignment'   => 'CE',
            'master_id'   => $qad->id,
            'description' => "<p>Aurilandur is an Archfey that holds an opposing court to that of Absalom in Rashemen. While she is in opposition to Absalom, she is not able to openly move against him, as even those fey that serve her does not wish to incur the wrath of one of the sons of Oberon. She is limited to making subtle long-term plays to hinder and annoy the Fey Prince.</p>
<p>Any fey that is on the outs with Absalom is welcome in Aurilandur's court. However, most fey eventually finds forgiveness and returns to the court of Absalom.</p>
<p>Aurilandur wishes to form an alliance with the Durthans, but they know that Aurilandur does not have the ability to overthrow Absalom. Durthan are known to use Aurilandur's court as safe haven from the Wychlaren, as Aurilandur does not allow any Wychlaren anywhere near her court.</p>
<p>Despite here lack of consistent fey followers, she does have 1 or 2 human warlocks that have made a Pact with her, but her most reliable allies are the Frost Giants and Ogres of the North Country. Aurilandur blesses them with favorable weather and good sport (which has caused the North Country to slowly be depleted of large game). The fey spirit of Reindeer, Owlbear, and other large animals, do all they can to keep their 'children' from the North Country, but Aurilandur still draws some into the Ogres and Giants for sport.</p>",
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Oberon';
        $feat->requirement = 'You must be CG';
        $feat->description = "<p>You have made a Pact with the Fey Lord Oberon. Oberon's interests lie with expanding freedoms and increasing life. The main enemies of Oberon are the devils and evil organizations (such as the Zhentarim and the Red Wizards).</p>
<ul>
    <li>Increase your CHA score by 1, to a maximum of 20</li>
    <li>You gain the Find Familiar Feat</li>
    <li>Your Eldritch Blast deals an additional +1 damage</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Pact', 'Fey', 'Good', 'Chaotic']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Dancing Lights', 'Eldritch Blast', 'Exorcism', 'Ghost Sound'],
            1 => ['Animal Friendship', 'Faerie Fire', 'Summon Animals'],
            2 => ['Luminous Armor', 'Invisibility', 'Misty Step'],
            3 => ['Catnap', 'Fly'],
            4 => ['Polymorph'],
            5 => ['Baleful Polymorph', 'Summon Fey'],
            6 => ['Baleful Teleport', 'Wall of Thorns'],
            7 => ['Plane Shift' => 'Only to the Feywild', 'Prismatic Spray'],
            8 => ['Unearthly Beauty'],
            9 => ['Wail of the Banshee'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Witchthorn';
        $feat->requirement = 'You must be Chaotic';
        $feat->description = "<p>You have made a Pact with the Archfey Witchthorn of Kryptgarden (who only deals with the Adarbrent noble family of Waterdeep). The Adarbrent family has an arrangement with Witchthorn where they would send the fey king the firstborn of each generation to serve the fey king. In return, the Adarbrent family was blessed with wealth and success in their business.</p>
<p>Since this arrangement, Claugiyliamatar (the great green dragon) has entered Kryptgarden forest and caused the death of Witchthorn's wife, the dryad Ishaldra. Witchthorn is now in a subtle war with the dragon for dominance of Kryptgarden forest.</p>
<ul>
    <li>You are from the Adarbrent noble family of Waterdeep. You have 3 times the normal starting money.</li>
    <li>You have the Favored Enemy Class Feature against Claugiyliamatar and any of his servants and minions.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Pact', 'Fey', 'Chaotic']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Dancing Lights', 'Detect Magic', 'Eldritch Blast', 'Gust', 'Minor Illusion'],
            1 => ['Animal Friendship', 'Leaf into Dagger', 'Resist Poison', 'Sleep'],
            2 => ['Detect Metal and Mineral', 'Misty Step', 'Speak with Animals'],
            3 => ['Catnap', 'Fly', 'Haste'],
            4 => ['Dimension Door', 'Gaseous Form'],
            5 => ['Animate Objects', 'Summon Fey'],
            6 => ['Dominate', 'Instant Summons'],
            7 => ['Scrying'],
            8 => ['Power Word Stun'],
            9 => ['Dweomerdoom'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Sqeulaiche';
        $feat->requirement = 'You must be Chaotic';
        $feat->description = "<p>You have made a Pact with the ArchFey Sqeulaiche, the Court Jester. Sqeulaiche's interests lie in causing chaos and being as entertaining as possible.</p>
<ul>
    <li>When you take this Feat, you gain an Additional 5 Skill Points</li>
    <li>You gain an Additional Spell Slot</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Pact', 'Fey', 'Chaotic']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Dancing Lights', 'Ghost Sound', 'Minor Illusion', 'Shillelagh'],
            1 => ['Animal Friendship', 'Charm', 'Faerie Fire', 'Hideous Laughter', 'Jump'],
            2 => ['Alter Self', 'Invisibility', 'Misty Step', 'Pest Form'],
            3 => ['Catnap', 'Fly', 'Haste'],
            4 => ['Aerial Form', 'Gaseous Form', 'Polymorph'],
            5 => ['Baleful Polymorph', 'Irresistible Dance'],
            6 => ['Eyebite', 'Teleport', 'True Seeing'],
            7 => ['Cloak of Chaos'],
            8 => ['Disappearance'],
            9 => ['Teleport Cage'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Absalom';
        $feat->requirement = 'You must be Chaotic or Neutral';
        $feat->description = "<p>You have made a Pact with the Fey Lord Absalom. Absalom's interests lie with the defense and expansion of the fey lands of the Unapproachable East. The main enemies of Absalom are the Red Wizards of Thay and the demons from Narfell.</p>
<ul>
    <li>You gain the Animal Companion Class Feature, as if you were a Ranger. You do not have to sacrifice any Spell Slots to obtain an Animal Companion, but you are limited to one that can be obtained as if you had sacrificed a 4th level spell slot. You are limited to the highest level Spell Slot that you can actually cast.</li>
    <li>Your Animal Companion can change its form between three different Animals that you must choose when you gain the Animal Companion. Whenever you gain a level, you may change one of the chosen forms</li>
    <li>You gain the Chastise Spirit Class Feature. Add half your Warlock levels, rounded down, to the number of dice it deals.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Pact', 'Fey']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Dancing Lights', 'Detect Crossroads', 'Detect Magic', 'Eldritch Blast', 'Ghost Sound', 'Magic Fang'],
            1 => ['Animal Friendship', 'Sleep', 'Summon Animals'],
            2 => ['Animal Messenger', 'Pest Form', 'Speak with Animals'],
            3 => ['Animal Form', 'Nondetection'],
            4 => ['Aerial Form', 'Speak with Plants'],
            5 => ['Commune with Nature', 'Summon Fey'],
            6 => ['Elemental Form', 'Spirit Walk'],
            7 => ['Create Crossroads and Backroads', 'Wind Walk'],
            8 => ['Monstrosity Form'],
            9 => ['Nature Incarnate' => 'Green Man only, only in Rashemen'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Aurilandur';
        $feat->requirement = 'You must be CE';
        $feat->description = "<p>You have made a Pact with the Archfey Aurilandur. Aurilandur's interests lie with undermining Absalom and his rule over the fey court, maintaining Aurilandur's friendly relationship with the Ogres and Giants of the North Country, and gaining more power in general to use against Absalom.</p>
<ul>
    <li>You gain the Animal Companion Class Feature, as if you were a Ranger. You do not have to sacrifice any Spell Slots to obtain an Animal Companion, but you are limited to one that can be obtained as if you had sacrificed a 4th level spell slot. You are limited to the highest level Spell Slot that you can actually cast.</li>
    <li>All your Cold Spells deal an additional Die of Damage and you add your Proficiency bonus to the Damage as well</li>
    <li>You gain Resistance to Cold Damage</li>
    <li>You gain Immunity to Cold Damage at 7th level</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Pact', 'Fey', 'Chaotic', 'Evil']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Dancing Lights', 'Detect Magic', 'Frostbite', 'Necrotic Touch', 'Ray of Frost'],
            1 => ['Animal Friendship', 'Armor of Frost', 'Gust of Wind', 'Summon Animals'],
            2 => ['Ice Armor', 'Locate Animals or Plants', 'Speak with Animals'],
            3 => ['Animal Form', 'Fly', 'Sleet Storm'],
            4 => ['Ice Storm', "Nixie's Lure"],
            5 => ['Icy Prison'],
            6 => ['Investiture of Ice', 'Wall of Ice'],
            7 => ['Control Weather' => 'Arctic weather only'],
            8 => ['Polar Ray'],
            9 => ['Burst of Glacial Wrath'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Aspect of the Fey';
        $feat->requirement = 'You must have a Pact Feat that has the Fey type';
        $feat->description = "<p>You no longer need to sleep and can't be forced to sleep by any means. To gain the benefits of a Long Rest, you can spend all 8 hours doing light activity.</p>";
        $helper->addTypesToFeat($feat, ['Pact', 'Fey', 'Invocation' => 3]);

        $feat              = new Feat;
        $feat->name        = 'Fey Companion';
        $feat->requirement = 'You must have a Pact Feat that has the Fey type and you must be able to gain a Familiar';
        $feat->description = '<ul>
    <li>
        <p>You gain the Enhanced Familiar Feat. You may choose the following as your Familiar/Animal Companion without having to capture/summon it.</p>
        <ul>
            <li>Blink Dog</li>
            <li>Satyr</li>
            <li>Displacer Beast</li>
            <li>Faerie Dragon</li>
        </ul>
    </li>
    <li>You gain a +2 bonus on all Diplomacy checks vs. Fey creatures.</li>
    <li>You gain a +2 bonus on all Saves vs Spells of Fey origin.</li>
    <li>You gain a Fey Contact. They are initially Friendly towards you, but you must maintain the relationship. They can provide minor aid and answers to questions they are likely to know.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Fey', 'Familiar', 'Animal Companion', 'Invocation' => 7]);
        $feat->parent_feats()->save(app()->feats['Find Familiar']);

        // Pact to Baba Yaga with Yugoloth spells and spells helpful for mercenaries
    }
}
