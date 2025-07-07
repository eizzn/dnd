<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\God;
use App\Models\Klass;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsLolthSeeder extends Seeder
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
        $god->name  = 'Araushnee';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Dark Seldarine'], [
            'name'           => 'Lolth',
            'aliases'        => 'Lloth (Menzoberranzan), Megwandir, Malyk (Wild Magic)',
            'title'          => 'Queen of Spiders, Queen of the Demonweb Pits, The Dark Mother, Mother of Lusts, The Lady of Chaos, The Queen of Chaos',
            'level'          => 'Greater',
            'portfolio'      => 'The Underdark, Chaos, Drow, Evil Spiders',
            'regions'        => 'Underdark',
            'alignment'      => 'CE',
            'symbol'         => 'Spider',
            'favored_weapon' => 'Spider (Dagger)',
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Shar',
            'aliases'        => 'Ibrandul, Eshowdow',
            'title'          => 'Master of the Night, Lady of Loss, Nightsinger, Dark Lady, Dark Goddess',
            'level'          => 'Greater',
            'portfolio'      => 'Darkness, Caverns, Dark Dungeons, Forgetfulness, Loss, Night, Secrets, the Shadowweave',
            'regions'        => 'Amn, Calimshan, The North, The Shaar',
            'alignment'      => 'NE',
            'symbol'         => 'Black disk with a border',
            'favored_weapon' => 'The Disk of Night (Chakram)',
        ]);
        $god->pantheons()->save(app()->pantheons['Al-Qadim'], [
            'name'      => 'Lotha',
            'title'     => '',
            'level'     => 'Greater',
            'portfolio' => '',
        ]);
        $god->pantheons()->save(app()->pantheons['Demonic'], [
            'name'      => 'Queen of Chaos',
            'title'     => '',
            'level'     => 'Demon Lord',
            'portfolio' => '',
            'alignment' => 'CE',
        ]);

        // Priest of Shar
        $class                = new Klass;
        $class->name          = 'Priest of Shar';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons, Chakram';
        $class->armors        = 'Light Armor, Medium Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 4,
        ], ['WIS', 'CHA'], [
            'Divine', 'Evil',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Deception', 'Diplomacy', 'Medicine', 'Performance', 'Religion']);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Favored Soul', 'Monk', 'Wizard',
        ]);
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 3, 6, 9, 12, 15, 18, 20],
        ]);
        $class->features()->save(app()->features['spell_point_caster'], ['level' => 3, 'meta' => '<dl>
    <dt>Spell Points</dt> <dd>2</dd>
    <dt>Spell</dt> <dd>Darkness</dd>
</dl>']);
        $helper->addChannelDivinityToClass($class, 'negative', 'Undead');
        $helper->addDomainToClass($class, ['Darkness', 'Knowledge', 'Magic']);
        $helper->addFeatsToClass($class, [
            'Divine Prophet'    => 6,
            'Shadow Sight'      => 7,
            'Master of Shrouds' => 8,
        ]);
        $helper->addSpellsToClass($class, [
            0  => ['Chill Touch', 'Clean Self', 'Daze', 'Detect Magic', 'Disrupt Undead', 'Friends', 'Ghost Sound', 'Guidance',
                'Mending', 'Message', 'Mind Sliver', 'Minor Illusion', 'Resist', 'Stabilize', 'Thaumaturgy', 'Touch of Death', ],
            1  => ['Arcane Sensitivity', 'Bane', 'Bless', 'Cause Wounds', 'Charm', 'Cloak of Dark Power', 'Command', 'Cure Wounds',
                'Darkvision', 'Detect Good', 'Disguise Self', 'Divine Favor', 'Divine Inspiration', 'Drug Resistance', 'Enchant Item',
                'Encode Thoughts', 'Fear', 'Grim Tendrils', 'Heartache', 'Identify', 'Masque Mask', 'Obscure Object', 'Protection From Evil',
                'Protection From Good', 'Ray of Enfeeblement', 'Touch of Blindness', ],
            2  => ['Alter Self', 'Arcane Lock', "Arcanist's Magic Aura", 'Augury', 'Bestow Curse', 'Blur', 'Comprehend Language', 'Darkness',
                'Desecrate', "Eagle's Splendor", 'Favor of the Gods', 'Hold Person', 'Invisibility', 'Remove Fear', 'Resist Elements',
                'Restoration', 'Shadow Blade', 'Shadow Shroud', 'Suggestion', 'Touch of Idiocy', 'Undetectable Alignment', ],
            3  => ['Aura of Pain', 'Bind Undead', 'Blindness', 'Circle of Protection From Evil', 'Circle of Protection From Good',
                'Copy Spell', 'Dark Wings', 'Dispel Magic', 'Enemies Abound', 'Enthrall', 'Geas', 'Gloom', 'Major Image',
                'Revivify', 'Vitality Shield', ],
            4  => ['Arcane Eye', 'Armor of Darkness', 'Aura of Confusion', 'Call Nightmare', 'Ceremony', 'Compulsion', 'Confusion',
                'Deeper Darkvision', 'Divination', 'Divine Wrath', 'Dread Blast', 'Imbue with Spell Ability', 'Nightmare',
                'Phantasmal Killer', 'Shadow of Moil', 'Spell Immunity', ],
            5  => ['Atonement', 'Banishment', 'Cloak of Shadows', 'Crawling Darkness', 'Dispel Evil', 'Dispel Good', 'Divine Weapon',
                'Forbidden Speech', 'Liquid Pain', 'Modify Memory', 'Permanency', 'Scrying', 'Shadow Walk', 'Shadowgate',
                'Telepathic Bond', 'Teleportation Circle', ],
            6  => ['Circle of Death', 'Dominate', 'Create Undead', 'Mind Prison', 'Night Terrors', 'Oath of Blood', 'Raise Dead'],
            7  => ['Blasphemy', 'Contingency', 'Divine Word', 'Simulacrum', 'Spell Turning', 'Triple Mask'],
            8  => ['Antimagic Field', 'Divine Aura', 'Dream Council', 'Feeblemind', 'Maddening Darkness', 'Mind Blank'],
            9  => ['Astral Projection', 'Disjunction', 'Imprisonment', 'Soul Bind', 'Weird'],
            10 => ['Miracle'],
        ]);
        $class->spells()->save(Spell::find(app()->spells['Summon Animals']), ['level' => 2, 'meta' => 'Spiders Only']);
        $helper->addSpellSlotsToClass($class);

        // Priest of Lolth
        $class                = new Klass;
        $class->name          = 'Priest of Lolth';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons and all Whips';
        $class->armors        = 'Light Armor, Medium Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 4,
        ], ['WIS', 'CHA'], [
            'Divine', 'Drow', 'Evil',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Deception', 'Diplomacy', 'Medicine', 'Religion']);

        $feature              = new Feature;
        $feature->key         = 'channel_summon_spiders';
        $feature->name        = 'Channel Divinity Summon Spiders';
        $feature->description = '<p>You may use your Channel Divinity ability to summon spiders to your side and aid you in combat.</p>
<table>
    <thead>
        <tr>
            <th>Spell Points</th>
            <th>Actions</th>
            <th>Min Level</th>
            <th>Summoned</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Free</td>
            <td>2nd</td>
            <td>1 normal spider</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Action</td>
            <td>2nd</td>
            <td>3 normal spiders</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Double Action</td>
            <td>2nd</td>
            <td>7 normal spiders</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Triple Action</td>
            <td>2nd</td>
            <td>12 normal spider</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Action</td>
            <td>5th</td>
            <td>1 giant spider</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Double Action</td>
            <td>5th</td>
            <td>2 giant spiders</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Triple Action</td>
            <td>5th</td>
            <td>3 giant spiders</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFeature($feature, ['Channel Divinity']);

        $helper->addFeaturesToClass($class, [
            'divine_feat'            => [1, 3, 6, 9, 12, 15, 18, 20],
            'channel_summon_spiders' => [2],
        ]);
        $helper->addChannelDivinityToClass($class, 'negative', 'Undead');
        $helper->addChannelDivinityToClass($class, 'negative', 'Spiders', 2, 1);
        $helper->addDomainToClass($class, ['Chaos', 'Drow', 'Evil', 'Darkness', 'Destruction', 'Trickery']);
        $helper->addFeatsToClass($class, [
            'Sacrificial Mastery' => 5,
        ]);

        $helper->addSpellsToClass($class, [
            0  => ['Clean Self', 'Detect Magic', 'Disrupt Undead', 'Mending', 'Resist', 'Stabilize', 'Thaumaturgy'],
            1  => ['Bane', 'Bless', 'Camouflage', 'Cause Wounds', 'Cloak of Dark Power', 'Command', 'Cure Wounds', 'Detect Good',
                'Disguise Self', 'Drug Resistance', 'Floating Disk', 'Obscure Object', 'Spider Sense', 'Touch of Blindness', ],
            2  => ['Arcane Lock', 'Blur', 'Comprehend Language', 'Bestow Curse', 'Darkness',
                'Discern Lies' => 'Does not work against any Priest of Lolth', 'Hold Person', 'Invisibility', 'Shadow Blade',
                'Skyhook', 'Spider Legs', 'Web', ],
            3  => ['Bind Undead', 'Dispel Magic', 'Spider Form', 'Vitality Shield'],
            4  => ['Call Dretch Horde', 'Deeper Darkvision', 'Dimensional Anchor', 'Divination', 'Giant Vermin' => 'Spiders only',
                'Spider Polymorph', ],
            5  => ['Atonement', 'Calling', 'Commune', 'Dispel Outsider', 'Forbidden Speech', 'Planar Binding', 'Scrying',
                'Spidercloak Armor', ],
            6  => ['Create Undead', 'Dominate', 'Move Earth', 'Planar Ally', 'Raise Dead'],
            7  => ['Contingency', 'Regenerate', 'Zin-carla'],
            8  => ['Antimagic Field', 'Maddening Darkness'],
            9  => ['Abyssal Army'],
            10 => ['Gate', 'Miracle'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Shar's favour is given to those who understand the true value of darkness, to protect and soothe, taking away the hurt and allowing healing to begin. Only once grief has been allowed to pass can new flowers begin to bud in the garden of the soul.</p>
<p>Shar’s scions are secret keepers and confidants, and often work close to large populations such as in cities and townships.</p>
<ol>
    <li>You lost someone who meant more than life to you. Shar saved you from your grief</li>
    <li>You did something awful. You only want to forget</li>
    <li>You have a terrible addiction.  Shar's mercy helps uou stay away from your vice</li>
    <li>You were treated badly by someone who was supposed to protect you. Shar dealt with them for you</li>
    <li>You often get lost in feelings of self-loathing. Shar sought you out and gave you purpose</li>
    <li>You were grievously wounded in battle. Shar's priests helped you forget the pain and walk again</li>
</ol>",
            'devotion' => "<p>Following Shar means dedicating yourself to darkness and loss. As a follower of Shar, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Charity</dt> <dd>I hear the silent cries of a world tortured by history and pain. I must bring them peace</dd>
    <dt>Greater Good</dt> <dd>The things I do are for the best, and I believe this with all my heart. This is why I cannot be stopped</dd>
    <dt>Knowledge</dt> <dd>People always confide in me. I know secrets that would turn you inside out</dd>
    <dt>Duplicity</dt> <dd>I'll tell you anything you want to hear</dd>
    <dt>Stagnation</dt> <dd>Change and growth are painful. Better to forget</dd>
</dl>",
            'earn_piety' => [
                'Consoling or comforting another creature',
                'Operating under cover of night',
                "Concealing a secret on someone's behalf for their own good",
            ],
            'lose_piety' => [
                'Being honest about something that could hurt someone',
                'Bringing up the horrors of the past',
            ],
            'piety3' => "<h4>Favored God: Shar</h4>
<p>You gain Inspiration when you hide something to protect another character's feeling</p>",
            'piety10' => '<h4>Moonlight</h4>
<p>You can cast Darkness with this trait, requiring no components. Once you cast the spell in this way, you can\'t do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>',
            'piety25' => '<h4>Dark Side of the Moon</h4>
<p>When standing in the radius of a Light or Daylight spell, you are Invisible</p>',
            'piety50' => '<h4>Chosen of Shar</h4>
<p>You can spend an Inspiration to cast Modify Memory with this trait, requiring no material components. Once you cast the spell in this way, you can\'t do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell.</p>',
        ]);

        $lolth = $god;

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Vhaeraun';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Dark Seldarine'], [
            'name'           => $god->name,
            'title'          => 'The Masked Lord, The Masked God of Night, The Shadow. The Masked Mage, The Lord of Shadow, Shadow Lord',
            'level'          => 'Lesser',
            'portfolio'      => 'Thievery, Drow Males, Evil Activity on the Surface',
            'regions'        => 'Underdark',
            'alignment'      => 'CE',
            'symbol'         => 'Black mask with blue glasses inset over eyes',
            'favored_weapon' => 'Shadowflash (Short Sword)',
            'master_id'      => $lolth->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Mask',
            'title'          => 'Master of Thieves, Lord of Shadows, Shadowlord',
            'level'          => 'Lesser',
            'portfolio'      => 'Shadows, Thievery, Thieves',
            'regions'        => 'Dragon Coast, Moonsea, The Shaar, Thesk',
            'alignment'      => 'CN',
            'symbol'         => 'Black mask',
            'favored_weapon' => 'Stealthwhisper (Longsword)',
            'master_id'      => $lolth->id,
        ]);

        // Priest of Mask
        $class                = new Klass;
        $class->name          = 'Priest of Mask';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 6,
            'skill_progress' => 4,
        ], ['WIS', 'DEX'], [
            'Divine', 'Drow', 'Evil', 'Skill',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Athletics', 'Concentration', 'Deception', 'Diplomacy', 'Performance', 'Religion', 'Society', 'Thievery',
        ]);

        $helper->addFeaturesToClass($class, [
            'divine_feat' => [6, 15, 20],
            'spell_pool'  => [2],
            'skill_feat'  => [2, 7, 12, 17],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 3, 'meta' => 'Sneak Attack']);
        $class->features()->save(app()->features['feat'], ['level' => 8, 'meta' => 'Sneak Attack']);
        $class->features()->save(app()->features['feat'], ['level' => 13, 'meta' => 'Sneak Attack']);
        $class->features()->save(app()->features['feat'], ['level' => 18, 'meta' => 'Sneak Attack']);
        $helper->addDomainToClass($class, ['Trickery', 'Shadow']);
        $helper->addFeatsToClass($class, [
            'Shadow Sight' => 6,
            'Shadow Jump'  => 8,
            'Shadow Cloak' => 10,
        ]);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Daze', 'Detect Magic', 'Ghost Sound', 'Mending', 'Message', 'Minor Illusion', 'Prestidigitation',
                'Resist', 'Stabilize', 'Thaumaturgy', ],
            1 => ['Bane', 'Bless', "Cat's Grace", 'Cause Wounds', 'Cloak of Dark Power', 'Command', 'Cure Wounds', 'Darkvision',
                'Disguise Self', 'Drug Resistance', 'Find Traps', 'Fleet Step', 'Fog Cloud', 'Hypnotism', 'Identify', 'Jump',
                'Obscure Object', 'Ray of Clumsiness', ],
            2 => ['Alter Self', 'Arcane Lock', "Arcanist's Magic Aura", 'Bestow Curse', 'Blur', "Cat's Hex", 'Claws of Darkness',
                'Comprehend Language', 'Darkness', "Hunter's Eye", 'Invisibility', 'Knock', 'Shadow Blade', 'Shadow Shroud',
                'Silence', 'Skyhook', 'Suggestion', ],
            3 => ['Bind Undead', 'Cloud of Daggers', 'Dark Wings', 'Dispel Magic', 'Major Image', 'Neutralize Poison',
                'Nondetection', 'Shrink', 'Shrink Item', ],
            4 => ['Armor of Darkness', 'Blink', 'Cloak of Shadows', 'Divine Agility', 'Freedom of Movement'],
            5 => ['Atonement', 'Compulsion', 'Confusion', 'Dimension Door', 'Passweb', 'Rope Trick', 'Shadow Walk', 'Shadowgate',
                'Unseen Thief', ],
            6 => ['Disappearance', 'Glibness', 'Scrying', 'Triple Mask', 'Twin Form'],
            7 => ['Antimagic Field', 'Contingency', 'Etherealness'],
        ]);
        $helper->addSpellSlotsToClass($class, 'seven');

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Kiaransalee';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Dark Seldarine'], [
            'name'           => $god->name,
            'title'          => 'Lady of the Dead, The Revenancer, The Vengeful Banshee',
            'level'          => 'Demi',
            'portfolio'      => 'Undead, Vengeance',
            'regions'        => 'Underdark',
            'alignment'      => 'CE',
            'symbol'         => 'Female drow hand wearing silver rings',
            'favored_weapon' => 'Cold Heart (Dagger)',
            'master_id'      => $lolth->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Lady of the Dead, The Revenancer, The Vengeful Banshee',
            'level'          => 'Demi',
            'portfolio'      => 'Undead, Vengeance',
            'regions'        => 'Underdark',
            'alignment'      => 'CE',
            'symbol'         => 'Female drow hand wearing silver rings',
            'favored_weapon' => 'Cold Heart (Dagger)',
            'master_id'      => $lolth->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Kiaransalee';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 4,
            'skill_progress' => 2,
        ], ['WIS', 'DEX'], [
            'Divine', 'Drow', 'Evil', 'Necromancy', 'Undead',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Arcana', 'Concentration', 'Diplomacy', 'Intimidation', 'Lore', 'Medicine', 'Performance', 'Religion', 'Society',
        ]);
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 3, 6, 9, 12, 15, 18, 20],
        ]);
        $helper->addChannelDivinityToClass($class, 'negative', 'Undead');
        $helper->addDomainToClass($class, ['Undead', 'Vengeance']);
        $helper->addFeatsToClass($class, [
            'Undead Ally' => 2,
        ]);

        $helper->addSpellsToClass($class, [
            0 => ['Chill Touch', 'Clean Self', 'Detect Magic', 'Detect Undead', 'Disrupt Undead', 'Hide from Undead', 'Resist Negative Energy',
                'Remove Disease', 'Resist Positive Energy', 'Stabilize', ],
            1 => ['Cause Wounds', 'Cloak of Dark Power', 'Cure Wounds', 'Deathwatch', 'Ray of Enfeeblement'],
            2 => ['Animate Dead', 'Command Undead', 'Gentle Repose', 'Hold Undead', 'Necrostasis', 'Spectral Hand', 'Undead Bane Weapon'],
            3 => ['Blindness', "Night's Mantle", 'Revivify', 'Speak with Dead', 'Vampiric Touch'],
            4 => ['Remove Curse', 'Vitality Shield'],
            5 => ['Antilife Shell', 'Create Undead', 'Haunt Shift', 'Kiss of the Vampire', "Night's Caress"],
            6 => ['Atonement', 'Harm', 'Heal', 'Incorporeal Nova', 'Magic Jar', 'Slay Living', 'Vampiric Exsanguination',
                'Undead Lieutenant', ],
            7 => ['General of Undeath', 'Raise Dead', 'Undeath after Death'],
            8 => ['Clone', 'General of the Undead', 'Horrid Wilting', 'Wail of the Banshee'],
            9 => ['Power Word Kill', 'Soul Bind'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Selvetarm';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Dark Seldarine'], [
            'name'           => $god->name,
            'aliases'        => 'Zanassu',
            'title'          => "The Spider That Waits, Lolth's Champion, Thane of Lolth, The Spider Demon, Prince of the Aranea, Lord of Venomire",
            'level'          => 'Hero',
            'portfolio'      => 'Warriors, slaughter',
            'regions'        => 'Underdark',
            'alignment'      => 'CE',
            'symbol'         => 'Spider over crossed sword and mace',
            'favored_weapon' => 'Veonommace (Heavy Mace)',
            'master_id'      => $lolth->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Demonic'], [
            'name'      => 'Miska the Wolf-Spider',
            'level'     => 'Demon Lord',
            'portfolio' => '',
            'alignment' => 'CE',
            'master_id' => $lolth->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Dark Seldarine'], [
            'name'      => 'Keptolo',
            'title'     => 'The Eager Consort',
            'level'     => 'Hero',
            'portfolio' => 'Beauty, Hedonism, Fertility',
            'alignment' => 'CE',
            'symbol'    => 'Mushroom',
            'master_id' => $lolth->id,
        ]);

        $helper->addClassesToGod($god, 'Dark Seldarine', [
            'Paladin' => 20,
        ]);
        // Priests of Selvetarm are Paladins
        $helper->addWorshipClassesToGod($god, 'Dark Seldarine', [
            'Paladin',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Death Knights of Selvetarm';
        $feat->requirement = 'Must be CE';
        $feat->description = '<p>You are a Paladin of Selvetarm. You gain the following powers.</p>
<ul>
    <li>You gain the ability to Channel Divinity to Rebuke spiders.</li>
    <li>Your Divine Mount (and the Call Mount spell) only calls forth a creature in the form of a Spider.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $feat->attributes()->save(app()->attributes['CHA'], ['dc' => 13]);
        $helper->addSpellsToFeat($feat, [
            1 => ['Bane', 'Corrupt Weapon', 'Detect Good', 'Fear', 'Wrathful Smite'],
            2 => ['Darkness', 'Divine Presence', 'Spider Climb', 'Undead Bane Weapon'],
            3 => ['Armor of Darkness', 'Aura of Silence', 'Aura of Pain', 'Circle of Protection From Good', 'Haste', 'Web'],
            4 => ['Aura of Death'],
        ]);
    }
}
