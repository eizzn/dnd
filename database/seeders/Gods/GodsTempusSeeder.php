<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsTempusSeeder extends Seeder
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
        $god->name        = 'Tempus';
        $god->level       = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Foehammer, Lord of Battles',
            'aliases'        => 'Tempos (barbarians of Icewind Dale)',
            'level'          => 'Greater',
            'portfolio'      => 'Battle, War, Warriors',
            'regions'        => 'Cormyr, Dalelands, Dragon Coast, Moonshaes, Nelanther Isles, The North, the Shaar, The Vast, Vilhon Reach',
            'alignment'      => 'CN',
            'symbol'         => 'A blazing silver sword on a blood-red shield',
            'favored_weapon' => 'Battle Prowess (battleaxe)',
        ]);
        $tempus = $god;

        $class                = new Klass;
        $class->name          = 'Priest of Tempus';
        $class->key_attribute = 'STR or WIS';
        $class->weapons       = 'Simple Weapons, Martial Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 2,
            'skill_progress' => 2,
        ], ['CON', 'WIS'], [
            'Divine', 'Combat Mastery', 'Fighter Feat',
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Fighter', 'Barbarian',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Intimidation', 'Medicine', 'Religion']
        );
        $helper->addFeaturesToClass($class, [
            'divine_feat'    => [9, 18, 20],
            'fighter_feat'   => [1, 3, 15, 20],
            'combat_mastery' => [7],
        ]);
        $helper->addDomainToClass($class, ['Chaos', 'Strength', 'War']);
        $helper->addSpellsToClass($class, [
            0 => ['Blade Ward', 'Booming Blade', 'Call Attuned Weapon', 'Detect Magic', 'True Strike'],
            1 => ['Aura of Courage', 'Bless', 'Compelled Duel', 'Cure Wounds', 'Disrupting Weapon', 'Divine Favor', 'Enchant Item',
                'Guiding Light', 'Heroism', ],
            2 => ['Aid', 'Aura of War', "Bear's Endurance", "Bull's Strength", 'Darkvision', 'Delay Disease', 'Delay Poison',
                'Divine Presence', 'Enlarge', 'Flame Blade', 'Heroics', 'Imbue with Cold Iron', 'Imbue with Silvered', 'Magic Weapon',
                'Protection From Arrows', 'Remove Fear', 'Resist Fire', 'Spiritual Weapon', ],
            3 => ['Animate Weapon', 'Aspect of the Deity, Lesser', 'Consecrate', 'Elemental Weapon', 'Ghost Touch',
                'Haste', 'Keen Edge', 'Prayer', 'Transmuted Weapon', 'Undead Bane Weapon', 'Whirling Blade', ],
            4 => ['Divine Power', 'Faithful Healing', 'Weapon Storm'],
            5 => ['Atonement', 'Consecrate Battlefield', 'Divine Weapon'],
            6 => ['Blade Barrier', 'Regeneration'],
            7 => ['Aspect of the Deity, Greater'],
            8 => ['Crusade', 'Divine Aura'],
        ]);
        $helper->addSpellSlotsToClass($class, 'eight');

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => '<p>Tempus gives his blessings mercurially, and is amongst the most chaotic and unpredictable of his peers. He grants power and prowess to those skilled in combat, often favouring those who exercise honor and skill over mayhem and skulduggery.</p>
<p>Tempus’s scions are therefore more commonly found in organized military forces with a code of conduct than elsewhere, but in truth the favour of Tempus can fall on anyone who picks up a weapon.</p>
<ol>
    <li>You were a high ranking military official before you fell from grace in a coup</li>
    <li>You were almost killed and left for dead on the battlefield, awakening on a field of corpses</li>
    <li>You single-handedly turned the tide of battle with your leadership</li>
    <li>You pioneered a new revolutionary battle technique</li>
    <li>You laid siege to and conquered a fortress said to be utterly undefeatable</li>
    <li>You won a well known tournament of arms</li>
</ol>',
            'devotion' => "<p>Following Tempus means dedicating your life to battle. As a follower of Tempus, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Heroism</dt> <dd>I want the world to worship me as a living god</dd>
    <dt>Community</dt> <dd>There are no bonds like those of soldiers in arms</dd>
    <dt>Excellence</dt> <dd>Battle is the best way to hone my skills</dd>
    <dt>Luck</dt> <dd>Each battle is a huge gamble with my life and it makes me come alive again inside</dd>
    <dt>Patriotism</dt> <dd>I fight for the land of my birth, and I don't moralise over it</dd>
</dl>",
            'earn_piety' => [
                'Engaging in melee battle with an enemy of your strength',
                'Emerging victorious from battle having learned something new about yourself',
                'Losing a battle and taking on board what you did wrong that led to your defeat',
            ],
            'lose_piety' => [
                'Dishonorable combat such as poisoning the food of an opposing army',
                'Engaging in extracurricular violence where the enemy is defenceless, such as torture',
            ],
            'piety3' => '<h4>Favored God: Tempus</h4>
<p>You gain Inspiration when you drop an enemy to 0 Hit Points in combat</p>',
            'piety10' => '<h4>Tactical Thinking</h4>
<p>At the start of each combat, after rolling initiative, you may choose an allied creature you can see. That creature may switch ints Initiative score with you, if you choose</p>',
            'piety25' => '<h4>To the Bitter End</h4>
<p>Enemies within 5 feet of you may not take the Disengage Action</p>',
            'piety50' => '<h4>Chosen of Tempus</h4>
<p>You can spend an Inspiration and rally your allies. Each ally within 30 feet of you gains a number of temporary Hit Points equal to your class level, and ceases to be Frightened, Charmed, or Paralysed</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Red Knight';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Lady of Strategy, Grandmaster of the Lanceboard, Crimson General, Red Lady, Red Lord',
            'level'          => 'Demi',
            'portfolio'      => 'Strategy, planning',
            'regions'        => 'Chessenta, Unther, Amn, Tethyr',
            'alignment'      => 'LN',
            'symbol'         => 'Red knight lanceboard piece with stars for eyes',
            'favored_weapon' => 'Checkmate (longsword)',
            'master_id'      => $tempus->id,
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Paladin', 'Scout', 'Fighter',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Red Knight';
        $feat->requirement = 'Must be LN and Red Knight must be your Patron';
        $feat->description = '<p>You are a Paladin of Red Knight, which serves as the clergy of her church. You are concerned with war between large groups and using strategy to gain victory.</p>
<ul>
    <li>Increase your WIS score by 1, to a maximum of 20</li>
    <li>You are proficient with Heavy Armor</li>
    <li>You gain a +2 bonus to all Ride an Animal Skill checks</li>
    <li>You gain the Skilled feat and must pick the Lore Skill (with a focus on wars of the past)</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Blade Ward', 'Booming Blade', 'Call Attuned Weapon', 'Conviction', 'Detect Magic', 'Guiding Light', 'Light',
                'True Strike', ],
            1 => ['Bless', "Checkmate's Light", 'Compelled Duel', 'Cure Wounds', 'Disrupting Weapon', 'Protective Interposition'],
            2 => ['Animate Weapon', 'Aura of Hope', 'Aura of Protection', 'Aura of the Bear', 'Aura of the Bull', 'Aura of the Owl',
                'Aura of War', 'Heroics', 'Insignia of Alarm', "Knight's Move", 'Quick March', 'Protection From Arrows',
                'Resist Elements', 'Undead Bane Weapon', ],
            3 => ['Aura of Haste', 'Aura of Silence', 'Aura of Vitality', 'Consecrate', 'Divine Power', "King's Castle",
                'Prayer', 'Sand Table', ],
            4 => ['Atonement', 'Aura of Purity'],
            5 => ['Aura of Power', 'Blade Barrier'],
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Valkur';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Captain of the Waves, The Mighty',
            'level'          => 'Demi',
            'portfolio'      => 'Sailors, Naval Combat, Favorable Winds, Ships',
            'regions'        => 'Aglarond, Impiltur',
            'alignment'      => 'CG',
            'symbol'         => 'Cloud with three lightning bolts on a shield',
            'favored_weapon' => "The Captain's Cutlass (cutlass)",
            'master_id'      => $tempus->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Valkur';
        $class->key_attribute = 'DEX or WIS';
        $class->weapons       = 'Simple Weapons, and the Cutlass';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 4,
        ], ['DEX', 'WIS'], [
            'Divine', 'Rogue', 'Fighter Feat',
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Swashbuckler', 'Rogue',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Diplomacy', 'Medicine', 'Religion']);
        $helper->addFeaturesToClass($class, [
            'divine_feat'  => [6, 15],
            'fighter_feat' => [1, 9, 18],
            'rogue_feat'   => [3, 12, 20],
        ]);
        $helper->addDomainToClass($class, ['Protection', 'War', 'Water']);
        $helper->addChannelDivinityToClass($class, 'positive', 'Aquatic Undead');
        $helper->addSpellsToClass($class, [
            0 => ['Gust', 'Guiding Light', 'Oilskin', 'Sea Legs', 'Shape Water', 'Stabilize'],
            1 => ['Create or Destroy Water', 'Cure Wounds', 'Fog Cloud', 'Gust of Wind', 'Land Legs', 'Weather Sense'],
            2 => ['Buoyancy', 'Consecrate', 'Dust Devil', 'Heroics', 'Insignia of Alarm', 'Neutral Buoyancy', 'Obscuring Mist',
                'Warding Wind', 'Water Walk', ],
            3 => ['Capricious Zephyr', 'Dismiss Fog', 'Eradicate Water', 'Insignia of Blessing', 'Prayer', 'Preserve Wood',
                'Tidal Wave', 'Wall of Water', ],
            4 => ['Calm Air', 'Flowsight', 'Ride the Waves', 'Sargasso'],
            5 => ['Control Water', 'Control Winds', 'Maelstrom'],
            6 => ['Atonement', 'Consecrate Battlefield'],
            7 => ['Whirlwind'],
            8 => ['Tsunami'],
        ]);
        $helper->addSpellSlotsToClass($class, 'eight');

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Uthgar';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Battle Father, Father of the Uthgar',
            'level'          => 'Hero',
            'portfolio'      => 'Physical strength, Uthgardt barbarian tribes',
            'regions'        => 'The North',
            'alignment'      => 'CN',
            'symbol'         => 'That of the individual beast totem spirit',
            'favored_weapon' => 'Appropriate Beast Totem Spirit (battleaxe)',
            'master_id'      => $tempus->id,
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Spirit Shaman', 'Barbarian', 'Ranger', 'Scout',
        ]);

        // Priests of Uthgar are all Spirit Shamans, although some tribes have welcomed priests of other gods

        // Black Lion       => Fury Totem
        // Elk              => Fury Totem
        // Great Worm       => Fury Totem
        // Griffon          => Fury Totem
        // Red Tiger        => Superstition Totem
        // Sky Pony         => Fury Totem
        // Thunderbeast     => Fury Totem
        // Tree Ghost       => Barbarian (Spirit Totem) / Ranger

        $feat              = new Feat;
        $feat->name        = 'Black Raven Uthgar Tribe';
        $feat->requirement = 'You must be from the Black Raven Uthgardt barbarian tribe';
        $feat->description = '<p>Your tribe trains Giant Ravens and rides them into raids.</p>
<h4>Anathema</h4>
<p>You do not have an Anathema</p>
<ul>
    <li>You gain Animal Handling as a Class Skill</li>
    <li>You gain a +4 bonus to your Animal Handling check</li>
    <li>You gain the Mounted Combatant feat</li>
</ul>
<h4>Raging Resistance</h4>
<p>When you gain your Raging Resistance, you do not gain any damage types that you are resistant to. Instead, you gain an Animal Companion (as if you were a Ranger but you do not need to sacrifice any Spell Slots). This Animal Companion must be a Giant Raven.</p>';
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);

        $feat              = new Feat;
        $feat->name        = 'Blue Bear Uthgar Tribe';
        $feat->requirement = 'You must be from the Blue Bear Uthgardt barbarian tribe';
        $feat->description = '<p>Your tribe has given themselves to demonic influences. Your tribe is lead by a Mighty Night Hag that has connections with the demons of Hellgate Keep and other outer planar beings.</p>
<p>Most members of the tribe have some demonic blood (tieflings).</p>
<h4>Anathema</h4>
<p>You are sworn enemies of the Gray Wolf and Tree Ghost tribes. You cannot aid them in any way and will go out of your way to slay them as well as Druids of Silvanus, Mielikki, and Eldath</p>
<ul>
    <li>You gain the Lesser Vampire Spawn Feat</li>
    <li>You gain a +3 bonus on all Survival Skill checks</li>
</ul>
<h4>Raging Resistance</h4>
<p>You do not gain any Raging Resistance. You may take the Vampiric Constitution feat instead.</p>';
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);

        $feat              = new Feat;
        $feat->name        = 'Gray Wolf Uthgar Tribe';
        $feat->requirement = 'You must be from the Gray Wolf Uthgar barbarian tribe';
        $feat->description = "<p>Your tribe members are all Werewolves.</p>
<h4>Anathema</h4>
<p>You do not have an Anathema</p>
<ul>
    <li>You gain the Curse of Lycanthropy feat (you must choose Were Wolf)</li>
    <li>You gain the Lycanthrope Mastery feat</li>
</ul>
<h4>Raging Resistance</h4>
<p>You do not gain any Raging Resistance. You may take the Lycanthrope's Vigor Feat instead.</p>";
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);
    }
}
