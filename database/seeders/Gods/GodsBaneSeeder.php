<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsBaneSeeder extends Seeder
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
        $god->name  = 'Bane';
        $god->level = 'Greater';
        $god->save();
        $bane = $god;
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Lord Bane, The Black Lord, Lord of Darkness, The Black Hand, THe Dark One',
            'level'          => 'Greater',
            'portfolio'      => 'Tyranny, Ambition, Control, Summoning Fiends',
            'alignment'      => 'LE',
            'symbol'         => 'Upright black right hand, thumb and fingers together',
            'regions'        => 'Zhentil Keep, Amn, Moonsea, Thay, Voonlar, Phlan, Daggerdale',
            'favored_weapon' => 'The Black Hand of Bane (gauntlet)',
        ]);
        $helper->addClassesToGod($god, 'Faeruneon', [
            'Cleric'  => 20,
            'Paladin' => 20,
            'Wizard'  => 10,
        ]);

        $feature              = new Feature;
        $feature->key         = 'channel_divinity_fear';
        $feature->name        = 'Channel Divinity: Fear';
        $feature->description = '<p>You can use your Channel Divinity to cause Fear.</p>
<p>Spend 1 Spell Point and a use of your Channel Divinity. As a Double Action, you cast the Fear spell as a 1st level spell.</p>';
        $helper->saveFeature($feature, ['Divine', 'Channel Divinity']);

        $class                = new Klass;
        $class->name          = 'Priest of Bane';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Light Shields, Medium Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 2,
        ], ['WIS', 'CHA'], [
            'Divine', 'Evil', 'Fiend',
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Paladin', 'Fighter', 'Wizard' => ['meta' => 'Conjurer'],
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Diplomacy', 'Intimidation', 'Medicine', 'Religion']);

        $helper->addFeaturesToClass($class, [
            'divine_feat'           => [1, 3, 6, 9, 12, 15, 18, 20],
            'channel_divinity_fear' => [3],
        ]);
        $helper->addChannelDivinityToClass($class, 'negative', 'Undead');
        $helper->addDomainToClass($class, ['Destruction', 'Summoning', 'Tyranny']);
        $helper->addFeatsToClass($class, [
            'Undead Ally'         => 2,
            'Sacrificial Mastery' => 5,
        ]);

        $helper->addSpellsToClass($class, [
            0 => ['Boon', 'Conviction', 'Detect Magic', 'Guidance', 'Light', 'Message', 'Shield', 'Stabilize'],
            1 => ['Alarm', 'Bane', 'Bless', 'Command', 'Create Water', 'Cure Wounds', 'Detect Good', 'Detect Evil', 'Detect Chaos',
                'Disrupting Weapon', 'Doom', 'Drug Resistance', 'Fear', 'Guiding Light', 'Magic Weapon', 'Mending', 'Protection From Good',
                'Purify Food and Water', 'Ray of Enfeeblement', 'Remove Disease', 'Resist Planar Alignment', 'Sanctuary', ],
            2 => ['Augury', 'Continual Flame', 'Create Food and Water', 'Darkness', 'Darkvision', 'Deafness', 'Death Knell',
                'Desecrate', 'Endure Elements', 'Faithful Healing', 'Gentle Repose', 'Ghoulish Cravings', 'Insignia of Alarm',
                'Remove Fear', 'Resist Energy', 'Restoration', 'Restore Senses', 'See Invisibility', 'Silence', 'Spiritual Weapon',
                'Undetectable Alignment', ],
            3 => ['Air of Authority', 'Blindness', 'Circle of Protection From Good', 'Dispel Magic', 'Heroism', 'Hold Person',
                'Hold Undead', 'Insignia of Blessing', 'Insignia of Healing', 'Interplanar Message', 'Neutralize Poison',
                'Prayer', 'Sanctified Ground', 'Zone of Truth', ],
            4 => ['Banishment', 'Battletide', 'Call Lemure Horde', 'Ceremony', 'Dimensional Anchor', 'Discern Lie', 'Divine Wrath',
                'Ebon Ray of Doom', 'Enervation', 'Globe of Invulnerability', 'Remove Curse', 'Sheltered Vitality', 'Spell Immunity',
                'Steal Summoning' => 'You cannon steal the summoning of a creature from the Upper Other Planes', ],
            5  => ['Atonement', 'Calling', 'Death Ward', 'Fiend Form' => 'Baatezu only', 'Haunt Shift', 'Planar Binding',
                'Power Leech', 'Profane Item', ],
            6  => ['Create Undead', 'Forbiddance', 'Harm', 'Heal', 'Planar Ally', 'Raise Dead', 'Righteous Might'],
            7  => ['Dimensional Lock', 'Etherealness', 'Plane Shift', 'Regenerate', 'Renewal Pact', 'Revive Undead', 'Shield of Law',
                'Undeath after Death', 'Unholy Aura', ],
            8  => ['Antimagic Field'],
            9  => ['Crusade', 'Hellish Horde'],
            10 => ['Anathema', 'Avatar', 'Gate', 'Miracle'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $feat              = new Feat;
        $feat->name        = 'Knights of the Black Gauntlet';
        $feat->requirement = 'Must be LE and Bane must be your Patron Deity';
        $feat->description = '<p>You are a Blackguard of Bane.</p>
<ul>
    <li>You gain proficiency with Heavy Armor</li>
    <li>When you cast the spell Fear or Aura of Fear, treat it as if it was Heightened +1</li>
    <li>You gain the Improved Smite Feat.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Blade Ward', 'Conviction', 'Corrupt Weapon', 'Detect Magic', 'Light', 'Message'],
            1 => ['Alarm', 'Bane', 'Command', 'Darkvision', 'Detect Good', 'Doom', 'Fear', 'Wrathful Smite'],
            2 => ['Arcane Lock', 'Aura of Fear', "Aura of the Bull's Curse", "Aura of the Cat's Curse", "Aura of the Eagle's Curse",
                "Aura of the Fox's Curse", "Aura of the Owl's Curse", 'Aura of War', 'Aura of Will', 'Branding Smite', 'Bestow Curse',
                'Darkness', 'Divine Presence', 'Insignia of Alarm', 'Suggestion', ],
            3 => ['Air of Authority', 'Aura of Pain', 'Bind Undead', 'Blinding Smite', 'Circle of Protection From Good',
                'Insignia of Blessing', 'Insignia of Healing', ],
            4 => ['Call Nightmare', 'Compulsion', 'Faithful Hound', 'Profane Item'],
            5 => ['Aura of Undeath', 'Dominate'],
            6 => ['Shield of Law', 'Unholy Aura'],
            7 => ['Hellish Horde'],
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Bane's divine portfolio is that of dominance. The strong must rule over those who are unfit to rule - this is the way of the world. Thus, Bane watches for those with the ambition, talent and drive to fulfil their potential.</p>
<p>Bane favours physical force over magical supremacy, and his scions are often powerful military leaders and warlords.</p>
<ol>
    <li>You defeated a much more powerful enemy in battle</li>
    <li>You bullied your way to the top of your command structure</li>
    <li>You burn with an inner ambition which consumes you</li>
    <li>You've killed for power before, and you'd do it again</li>
    <li>Someone once told you that you'd amount to nothing. You've proved them wrong twice over</li>
    <li>What you did all those years ago is between Bane and yourself. No-one can ever know</li>
</ol>",
            'devotion' => '<p>Following Bane means dedicating yourself to ambition and control. As a follower of Bane, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Ruthlessness</dt> <dd>I will do what I must to get what I want</dd>
    <dt>Dread</dt> <dd>If I am to rule, others must fear me</dd>
    <dt>Enforcement</dt> <dd>Dissent must be stamped out early and viciously before it can take root</dd>
    <dt>Courage</dt> <dd>I must have the bravery to stand up for what I need</dd>
    <dt>Ambition</dt> <dd>There are no limits to my potential other than the ones I set for myself</dd>
</dl>',
            'earn_piety' => [
                'Taking control of a meeting or council',
                'Forcing obedience from another creature',
                'Intimidating others with physical force',
            ],
            'lose_piety' => [
                'Following the orders of someone less powerful than you',
                'Allowing the weak to have too much autonomy',
            ],
            'piety3' => '<h4>Favored God: Bane</h4>
<p>You gain Inspiration when you bully someone into doing things your way</p>',
            'piety10' => '<h4>Hammer and Nail</h4>
<p>Choose a creature type. You gain a +4 bonus on CHA (Intimidation) checks when interacting with that creature type</p>',
            'piety25' => '<h4>Lord of Tyranny</h4>
<p>Your spells and abilities can Frighten enemies who are immune to being Frightened. You can intimidate creatures which would usually be immune to bing intimidated, such as constructs or undead</p>',
            'piety50' => "<h4>Chosen of Bane</h4>
<p>You can spend an Inspiration to cast Fear with this trait, requiring no material components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. CHA is your spellcasting ability for this spell.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Loviatar';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'The Maiden of Pain, The Willing Whip, The Scourge Mistress',
            'level'          => 'Lesser',
            'portfolio'      => 'Pain, Hurt, Agony, Torment, Suffering, Torture',
            'alignment'      => 'LE',
            'symbol'         => 'Nine-tailed barbed scourge',
            'regions'        => 'Calimshan, Moonsea, Sembia, Dambrath, Calaunt, Ladypeak, Melvaunt, Zhentil Keep',
            'favored_weapon' => 'Painbringer (Scourge)',
            'master_id'      => $bane->id,
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Cleric'  => 20,
            'Monk'    => 10,
            'Wizard'  => 5,
            'Paladin' => 5,
        ]);

        $class                = new Klass;
        $class->name          = 'Pain';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons, Whips';
        $class->armors        = 'Light Armor, Medium Armor, Light Shields';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Loviatar</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 2,
        ], ['CON', 'WIS'], [
            'Divine', 'Evil',
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Monk', 'Fighter', 'Paladin',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Athletics', 'Concentration', 'Deception', 'Intimidation', 'Medicine', 'Religion', 'Society',
        ]);

        $feature              = new Feature;
        $feature->key         = 'pain_touch';
        $feature->name        = 'Pain Touch';
        $feature->description = '<p>As part of casting Cause Wounds, you may spend 4 Spell Points and remove the Verbal Casting requirement.</p>';
        $helper->saveFeature($feature, ['Harm']);

        $feature              = new Feature;
        $feature->key         = 'lasher';
        $feature->name        = 'Lasher';
        $feature->description = '<p>As part of a Strike with a whip, you may spend 2 Spell Points and an Action and deliver a spell that has a range of Touch through the whip. You do not need to spend the Actions required to cast the spell as long as it is delivered through your whip.</p>
<p>If you have the Stunning Fist feat, you may attempt your Stunning attempt through your whip.</p>';
        $helper->saveFeature($feature, ['Harm']);

        $helper->addFeaturesToClass($class, [
            'spell_pool'  => [2],
            'divine_feat' => [1, 3, 7, 12, 15, 18, 20],
            'pain_touch'  => [6],
            'lasher'      => [9],
        ]);
        $helper->addChannelDivinityToClass($class, 'negative', 'Undead', 4);
        $helper->addDomainToClass($class, ['Evil', 'Retribution', 'Suffering']);
        $helper->addFeatsToClass($class, [
            'Sacrificial Mastery'    => 4,
            'Improved Trip'          => 5,
            'Improved Disarm'        => 6,
            'Stunning Fist'          => 8,
            'Improved Stunning Fist' => 10,
        ]);
        $helper->addSpellsToClass($class, [
            0 => ['Daze', 'Detect Magic', 'Disrupt Undead', 'Guidance', 'Light', 'Shield', 'Stabilize'],
            1 => ['Bane', 'Bless', 'Cause Wounds', 'Command', 'Cure Wounds', 'Detect Good', 'Detect Poison', 'Doom', 'Drug Resistance',
                'Fear', 'Magic Weapon', 'Protection From Good', 'Ray of Enfeeblement', 'Remove Disease', ],
            2 => ['Bestow Curse', 'Body Blades', 'Darkness', 'Darkvision', 'Deafness', 'Death Knell', 'Ebon Ray of Doom',
                'Endure Elements', 'Faerie Fire', 'Insignia of Alarm', 'Remove Fear', 'Resist Energy', 'Restoration', 'Restore Sense',
                'See Invisibility', 'Silence', 'Spiritual Weapon', 'Undetectable Alignment', ],
            3  => ['Animate Dead', 'Bind Undead', 'Blindness', 'Dispel Magic', 'Geas', 'Insignia of Blessing', 'Insignia of Healing',
                'Mystic Lash', 'Neutralize Poison', 'Prayer', 'Tongues', 'Vampiric Touch', 'Wound', ],
            4  => ['Ceremony', 'Discern Lie', 'Enervation', 'Finger of Agony', 'Freedom of Movement', 'Liquid Pain', 'Remove Curse',
                'Wall of Pain', ],
            5  => ['Atonement', 'Breath of Life', 'Death Ward', 'Power Leech', 'Sacred Strike'],
            6  => ['Flesh to Stone', 'Harm', 'Oath of Blood', 'Raise Dead', 'Stone to Flesh'],
            7  => ['Finger of Death', 'Heal', 'Regenerate'],
            8  => ['Power Word Stun'],
            9  => ['Bind Soul'],
            10 => ['Avatar'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $feat              = new Feat;
        $feat->name        = 'Scourge Maiden';
        $feat->requirement = 'Paladin of Loviatar';
        $feat->description = '<p>You are a Blackguard of Loviatar.</p>
<ul>
    <li>You gain the Improved Trip feat</li>
    <li>You gain the Weapon Focus feat with all Whips</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Bane', 'Command', 'Corrupt Weapon', 'Darkvision', 'Detect Good', 'Drug Resistance', 'Fear', 'Wrathful Smite'],
            2 => ['Aura of War', 'Bestow Curse', 'Branding Smite', 'Cause Wounds', 'Darkness', 'Divine Presence', 'Doom',
                'Insignia of Alarm', ],
            3 => ['Aura of Pain', 'Bind Undead', 'Blinding Smite', 'Insignia of Blessing', 'Insignia of Healing'],
            4 => ['Death Ward'],
            5 => ['Aura of Undeath'],
            6 => ['Harm'],
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Maram of the Great Spear';
        $god->level = 'Dead';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'      => $god->name,
            'title'     => '',
            'alignment' => 'LE',
            'level'     => 'Dead',
            'master_id' => $bane->id,
        ]);

        $god        = new God;
        $god->name  = 'Haask';
        $god->level = 'Dead';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'      => $god->name,
            'title'     => 'The Voice of Hargut',
            'level'     => 'Dead',
            'alignment' => 'NE',
            'master_id' => $bane->id,
        ]);

        $god        = new God;
        $god->name  = 'Tyranthraxus';
        $god->level = 'Altraloth';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Yugoloth Lord'], [
            'name'      => $god->name,
            'title'     => 'Lord of the Ruins, The Flamed One',
            'aliases'   => 'Possessing Spirit',
            'level'     => 'Hero',
            'alignment' => 'NE',
            'master_id' => $bane->id,
        ]);

        $god        = new God;
        $god->name  = 'Borem';
        $god->level = 'Demon';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Demonic'], [
            'name'      => $god->name,
            'title'     => 'Of the Lake of Boiling Mud',
            'portfolio' => 'Anger',
            'alignment' => 'CE',
            'level'     => 'Demon',
            'master_id' => $bane->id,
        ]);

        $god        = new God;
        $god->name  = 'Camnod';
        $god->level = 'Demon';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Demonic'], [
            'name'      => $god->name,
            'title'     => 'The Unseen',
            'alignment' => 'CE',
            'level'     => 'Demon',
            'master_id' => $bane->id,
        ]);

        $features = app()->features;
        unset($features['channel_divinity_fear']);
        app()->features = $features;
    }
}
