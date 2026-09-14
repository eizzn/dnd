<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsHelmSeeder extends Seeder
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
        $god->name  = 'Helm';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'He of the Unsleeping Eyes, God of Guardians, The Watcher, The Vigilant, The Vigilant One, The Great Guard',
            'level'          => 'Lesser',
            'portfolio'      => 'Guardians, Protectors, Protection, Abjuration, Duty',
            'regions'        => 'Cormyr, Dragon Coast, Tethyr, Vilhon Reach, Western Heartlands, Maztica, The North, Sundabar, Silverymoon, Procampur',
            'alignment'      => 'LN',
            'symbol'         => 'Staring eye on upright left gauntlet',
            'favored_weapon' => 'Ever Watchful (Bastard Sword)',
            'master_id'      => God::where('name', 'Horus-Re')->first()->id,    // Amaunator
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Fighter' => 20,
            'Wizard'  => ['level' => 20, 'meta' => 'Abjurer'],
        ]);

        $feature              = new Feature;
        $feature->key         = 'channel_divinity_saves';
        $feature->name        = 'Channel Divinity: Saves';
        $feature->description = '<p>You can use your Channel Divinity to bolster yourself.</p>
<p>You may use a use of your Channel Divinity as a Reaction, you gain Advantage on your next Save.</p>';
        $helper->saveFeature($feature, ['Divine', 'Channel Divinity']);

        $feature              = new Feature;
        $feature->key         = 'channel_divinity_dispel_invisibility';
        $feature->name        = 'Channel Divinity Dispel Invisibility';
        $feature->description = '<p>You can use your Channel Divinity to Dispel invisibility effects in your area.</p>
<ul>
    <li>You gain 1 Spell Point</li>
    <li>You may use a use of your Channel Divinity and 1 Spell Point as an Action, you Dispel any and all Invisibility effects in a 120-foot radius.</li>
</ul>';
        $helper->saveFeature($feature, ['Divine', 'Channel Divinity']);

        $class                = new Klass;
        $class->name          = 'Watchers';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons plus one choice';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Helm</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 2,
            'skill_progress' => 4,
        ], ['WIS', 'CHA'], [
            'Divine',
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name => ['is_clergy' => true],
            'Paladin'    => ['is_clergy' => true],
            'Wizard'     => ['meta' => 'Abjuration'],
            'Fighter',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Medicine', 'Religion', 'Society']
        );
        $helper->addFeaturesToClass($class, [
            'channel_divinity_saves'               => [3],
            'channel_divinity_dispel_invisibility' => [5],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 3, 'meta' => 'Improved Counterspell']);
        $helper->addChannelDivinityToClass($class, 'positive or Negative', 'Undead', 3);
        $helper->addDomainToClass($class, ['Law', 'Retribution']);
        $helper->addSpellsToClass($class, [
            0 => ['Alarm' => 'Only one casting can be active at a time unless cast with a 1st Level Spell Slot', 'Blade Ward',
                'Clean Self', 'Conviction', 'Detect Magic', 'Light', 'Resist', 'Stabilize'],
            1 => ['Cure Wounds', 'Hand of the Faithful', 'Protection From Chaos', 'Protection From Evil', 'Protection From Good',
                'Protection From Law', 'Protective Interposition', 'Sanctuary', 'Shield', 'Shield of Faith', 'Shieldbearer', ],
            2 => ['Absorb Elements', 'Arcane Lock', 'Endure Elements', 'Invisibility Purge', 'Protection From Poison', 'Remove Fear',
                'Restoration', 'Resist Elements', 'Resist Acid', 'Resist Sonic', 'Resist Force', 'Resist Fire', 'Resist Cold',
                'Resist Electricity', 'Undead Bane Weapon', 'Vitality Shield', ],
            3 => ['Circle of Protection From Chaos', 'Circle of Protection From Evil', 'Circle of Protection From Good',
                'Circle of Protection From Law', 'Dispel Magic', 'Faithful Healing', 'Forceward', 'Glyph of Warding', 'Halt',
                'Mace of Odo', 'Neutralize Poison', 'Nondetection', 'Prayer', 'Redirect Spell', 'Spell Shield', ],
            4 => ['Dimensional Anchor', 'Globe of Invulnerability', 'Mantle of Mystra', 'Mystic Aegis', 'Private Sanctum',
                'Sheltered Vitality', ],
            5 => ['Atonement', 'Banishment', 'Death Ward', 'Dispel Outsider', 'Revelation', 'Summon Spectator'],
            6 => ['Gate Seal', 'Guards and Wards', 'Planar Ally', 'Repulsion', 'Wall of Dispel Magic'],
            7 => ['Contingency', 'Dimensional Lock', 'Illusion Purge', 'Symbol'],
            8 => ['Antimagic Field', 'Divine Aura', 'Spell Engine'],
            9 => ['Absorption', 'Imprisonment', 'Invulnerability'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addFeatsToClass($class, [
            'Greater Counterspell' => 9,
        ]);

        $feat              = new Feat;
        $feat->name        = 'Vigilant Eyes of the God';
        $feat->requirement = 'Must be LN and Helm must be your Patron Deity';
        $feat->description = '<p>You are a Paladin of Helm.</p>
<ul>
    <li>You gain proficiency with Heavy Armor</li>
    <li>You gain the Shield Master Feat</li>
    <li>You are charged with serving those in need (the poor, frontiersman, and members of the church of Mystra, Azuth, Savras, and Velsharoon)</li>
    <li>You may take the Improved Counterspell Feat at 4th level or higher (even though you do not have the Abjurer Feat)</li>
    <li>You may take the Greater Counterspell Feat at 9th level or higher</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $feat->attributes()->save(app()->attributes['CHA'], ['dc' => 13]);
        $helper->addSpellsToFeat($feat, [
            0 => ['Alarm', 'Detect Magic', 'Light', 'Shield'],
            1 => ['Protection From Chaos', 'Protection From Evil', 'Protection From Good', 'Protection From Law', 'Shieldbearer'],
            2 => ['Circle of Protection From Chaos', 'Circle of Protection From Evil', 'Circle of Protection From Good',
                'Circle of Protection From Law', 'Halt', 'Hand of the Faithful', 'Invisibility Purge', 'Resist Elements',
                'Resist Poison', 'Undead Bane Weapon', ],
            3 => ['Aura of Vitality', 'Create Food and Water', 'Daylight', 'Dispel Magic', 'Forceward', 'Remove Curse',
                'Sheltered Vitality', 'Spell Shield', ],
            4 => ['Anti-Summoning Shell', 'Dimensional Anchor', 'Globe of Invulnerability', 'Mantle of Mystra', 'Spell Immunity'],
            5 => ['Banishing Smite', 'Death Ward', 'Hallow', 'Holy Weapon'],
            6 => ['Gate Seal', 'Guards and Wards', 'Illusion Purge', 'Shield of Law'],
        ]);
        $helper->addFeatToGodPantheon($god, 'Faeruneon', $feat);
    }
}
