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
            'aliases'        => 'Iyachtu Xvim',
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
<p>Spend 1 Spell Point and a use of your Channel Divinity. As a Double Action, you cast the Fear spell as a 1st level spell.</p>
<p>You are immune to Fear effects.</p>';
        $helper->saveFeature($feature, ['Divine', 'Channel Divinity']);

        $class                = new Klass;
        $class->name          = 'Dreadmasters';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Light Shields, Medium Shields';
        $class->has_spells    = 1;
        $class->description   = "<p>The church of Bane believes in subservience and submission within their hierarchy, with junior members bowing, kneeling, or even kissing the feet of their superiors, depending on rank. Superior members are to be followed and obeyed at all times. The rules in the church are of the utmost imporance, but those from any other lands or faith are entirely meaningless.</p>
<p>Bane's authority and divinity are revered above all else. According to his priests, Bane is to be feared by his faithful and even more feared by the unfaithful. It is the duty of every member of the church to spread the fear of Bane.</p>
<p>Banite priests take great pride in their ability to control their actions and avoid succumbing to emotional outbursts. Their outward demeanor is cold and thoughtful, they think carefully before they speak, often preferring sarcasm and witty banter rather than overt hostility.</p>
<p>The overarching goal of Bane's clergy is the charge of seizing or manipulating their way into power in every nation, city-state or freehold in all of Faerun, to bring them under his influence. Using emotionally manipulative tools such as fear, hatred or greed to sow conflict, which can allow the Blank Hand to maintain control over lands too distressed to maintain stability. To this end, priests and followers are encouraged to commit acts such as torture, political infiltration or inciting mayhem with subtlety, cruelty and overall, fear.</p>
<p>The church of Bane attracts a great number of wizards, specifically Conjurers as well as priests.</p>
<h4>Titles</h4>
<dl>
    <dt>High Imperceptor</dt> <dd>Serving as the apex in the hierarchy of Bane's church, this leader is the supreme servant of the Black Lord</dd>
    <dt>Deep Mystery</dt> <dd>
        A general rank for the higher-tier clergy members including (in descending order)
        <ul>
            <li>High Inquisitor</li>
            <li>Grand Bloodletter</li>
            <li>Dark Imperceptor</li>
            <li>Lord/Lady of the Hand</li>
            <li>Lord/Lady of Mysteries</li>
            <li>Vigilator</li>
        </ul>
    </dd>
    <dt>Dreadmaster</dt> <dd>A title granted to certain priests of Bane that mostly applies to low-level positions within the church.</dd>
    <dt>Higher Doom</dt> <dd></dd>
    <dt>Dark Doom</dt> <dd></dd>
    <dt>Masked Death</dt> <dd></dd>
    <dt>Vigilant Talon</dt> <dd></dd>
    <dt>Striking Hand</dt> <dd></dd>
    <dt>Black Fang</dt> <dd></dd>
    <dt>Hooded Menace</dt> <dd></dd>
    <dt>Willing Whip</dt> <dd></dd>
    <dt>Trusted Servant</dt> <dd></dd>
    <dt>Deadly Adept</dt> <dd></dd>
    <dt>Watchful brother/sister</dt> <dd></dd>
    <dt>Slave</dt> <dd></dd>
</dl>
<h4>Knightly Orders</h4>
<p>Knights of the Black Gauntlet. An order of black knights and helmed horrors from the city of Mintar led by Lord Knight Imperceptor Teldorn Darkhope</p>
<h4>Bases</h4>
<ul>
    <li>The Obsidian Chapel: The temple to Bane that stands in Anauroch and hoses the enchanted Loviatan weapon the Icon of Power. The temple was plundered by Bedine raiders sometime long before 1281 DR</li>
    <li>The Black Lord's Alter in Mulmaster, considered for a time to be the center of power for the High Imperceptor and Banite church</li>
    <li>The Black Alter in Zhentil Keep, the result of a splinter in the church instigated by Fzoul Chembryl. It was destroyed a number of times, contested , and at different stages was reconsecrated to both Cyric and Iyachtu Xvim.</li>
    <li>The Black Lord's Cloak in the city of Mourktar in the land of Threskel is the largest temple of Bane in the Realms. It is led by the self-appointed Dread Imperceptor Kabbarath Telthaug, who separated himself and his clergy form the greater church of Bane some time before the Time of Troubles. the temple is served by over 700 ranked Banite priests, and over 1000 clergy. They even include a loyal and disciplined army, who has enjoyed numerous victories in Chessenta.</li>
</ul>";
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 2,
        ], ['WIS', 'CHA'], [
            'Divine', 'Evil', 'Fiend',
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Paladin', 'Fighter', 'Wizard' => ['meta' => 'Conjurer'], 'Divine Disciple',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Diplomacy', 'Intimidation', 'Medicine', 'Religion']);

        $helper->addFeaturesToClass($class, [
            'channel_divinity_fear' => [5],
        ]);
        $helper->addChannelDivinityToClass($class, 'negative', 'Undead');
        $helper->addDomainToClass($class, ['Destruction', 'Summoning', 'Tyranny']);

        $helper->addSpellsToClass($class, [
            0 => ['Boon', 'Conviction', 'Detect Magic', 'Guidance', 'Light', 'Message', 'Shield', 'Stabilize', 'Virtue'],
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
                'Doom of Bane', 'Ebon Ray of Doom', 'Enervation', 'Globe of Invulnerability', 'Remove Curse', 'Sheltered Vitality',
                'Spell Immunity', 'Steal Summoning' => 'You cannon steal the summoning of a creature from the Upper Other Planes', ],
            5  => ['Atonement', 'Calling', 'Death Ward', 'Fiend Form' => 'Baatezu only', 'Haunt Shift', 'Planar Binding',
                'Power Leech', 'Profane Item', ],
            6  => ['Annihilate Spirit', 'Create Undead', 'Forbiddance', 'Harm', 'Heal', 'Planar Ally', 'Raise Dead', 'Righteous Might'],
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
                'Command Undead', 'Darkness', 'Divine Presence', 'Insignia of Alarm', 'Suggestion', ],
            3 => ['Air of Authority', 'Aura of Pain', 'Blinding Smite', 'Circle of Protection From Good', 'Insignia of Blessing',
                'Insignia of Healing', ],
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
            'title'          => 'The Maiden of Pain, The Willing Whip, The Scourge Mistress, Patroness of Torturers',
            'level'          => 'Lesser',
            'portfolio'      => 'Pain, Hurt, Agony, Torment, Suffering, Torture',
            'alignment'      => 'LE',
            'symbol'         => 'Nine-tailed barbed scourge',
            'regions'        => 'Calimshan, Amn, Moonsea, Sembia, Dambrath, Calaunt, Ladypeak, Melvaunt, Zhentil Keep, Waterdeep',
            'favored_weapon' => 'Painbringer (Scourge)',
            'master_id'      => $bane->id,
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Cleric' => 20,
            'Monk'   => 15,
            'Wizard' => 5,
        ]);

        $class                = new Klass;
        $class->name          = 'Pain';
        $class->type          = 'Priest';
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
            $class->name, 'Monk', 'Favored Soul', 'Paladin',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Athletics', 'Concentration', 'Deception', 'Intimidation', 'Medicine', 'Religion', 'Society',
        ]);

        $feature              = new Feature;
        $feature->key         = 'channel_divinity_cause_wound';
        $feature->name        = 'Channel Divinity Cause Wound';
        $feature->description = '<p>You can use your Channel Divinity to cast the Cause Wounds spell.</p>
<p>Spend 1 Spell Point and a use of your Channel Divinity. As an Action, you cast the Cause Wounds spell. You may spend an additional 2 Spell Points to Heighten the spell at +1.</p>';
        $helper->saveFeature($feature, ['Necromancy', 'Harm']);

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
            'channel_divinity_cause_wound' => [3],
            'class_group_feat'             => [4, 7],
            'pain_touch'                   => [6],
            'lasher'                       => [9],
        ]);
        $helper->addChannelDivinityToClass($class, 'negative', 'Undead', 4);
        $helper->addDomainToClass($class, ['Evil', 'Retribution', 'Suffering']);
        $helper->addFeatsToClass($class, [
            'Improved Trip'            => 3,
            'Improved Disarm'          => 3,
            'Dexterous Strike'         => 3,
            'Stunning Fist'            => 8,
            'Improved Stunning Fist'   => 10,
        ]);
        $helper->addSpellsToClass($class, [
            0 => ['Cause Wounds', 'Daze', 'Detect Magic', 'Disrupt Undead', 'Guidance', 'Light', 'Shield', 'Stabilize'],
            1 => ['Bane', 'Bless', 'Command', 'Cure Wounds', 'Detect Good', 'Detect Poison', 'Doom', 'Drug Resistance',
                'Fear', 'Magic Weapon', 'Protection From Good', 'Ray of Enfeeblement', 'Remove Disease', 'Whip', ],
            2 => ['Bestow Curse', 'Body Blades', 'Command Undead', 'Darkness', 'Darkvision', 'Deafness', 'Death Knell',
                'Endure Elements', 'Faerie Fire', 'Insignia of Alarm', 'Remove Fear', 'Resist Energy', 'Restoration', 'Restore Sense',
                'See Invisibility', 'Silence', 'Spiritual Weapon', 'Undetectable Alignment', ],
            3  => ['Animate Dead', 'Blindness', 'Dispel Magic', 'Ebon Ray of Doom', 'Geas', 'Insignia of Blessing', 'Insignia of Healing',
                'Mystic Lash', 'Neutralize Poison', 'Prayer', 'Tongues', 'Vampiric Touch', 'Wound', ],
            4  => ['Ceremony', 'Discern Lie', 'Enervation', 'Finger of Agony', 'Freedom of Movement', 'Liquid Pain', 'Remove Curse',
                'Wall of Pain', ],
            5  => ['Atonement', 'Breath of Life', 'Death Ward', 'Power Leech', 'Sacred Strike'],
            6  => ['Flesh to Stone', 'Harm', 'Oath of Blood', 'Raise Dead', 'Stone to Flesh'],
            7  => ['Finger of Death', 'Heal', 'Regenerate', 'Wave of Pain'],
            8  => ['Power Word Stun'],
        ]);
        $helper->addSpellSlotsToClass($class, 'eight');

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
            3 => ['Aura of Pain', 'Command Undead', 'Blinding Smite', 'Insignia of Blessing', 'Insignia of Healing'],
            4 => ['Death Ward'],
            5 => ['Aura of Undeath'],
            6 => ['Harm'],
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Bhaal';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Lord of Murder',
            'level'          => 'Hero',
            'portfolio'      => 'Murder',
            'alignment'      => 'NE',
            'symbol'         => 'Skull surrounded by ring of bloody droplets',
            'favored_weapon' => 'Dagger',
            'master_id'      => $bane->id,
        ]);
        $helper->addClassesToGod($god, 'Faeruneon', [
            'Rogue'     => 10,
            'Ninja'     => 5,
            'Assassin'  => 5,
        ]);

        $class                = new Klass;
        $class->name          = 'Deathstalker';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons, Dagger, Short Sword, Long Sword';
        $class->armors        = 'Light Armor, Medium Armor';
        $class->has_spells    = 1;
        $class->description   = '<p>A deathstalker, also known as a deathstalker of Bhaal, are priests of the Lord of Murder, Bhaal.</p>
<p>In order to become initiated as a deathstalker, you must have fulfilled a set of strict requirements.</p>
<ul>
    <li>You must worship Bhaal as your patron deity.</li>
    <li>You must be adept in Hiding, Moving Silently, and Surviving in difficult scenarios.</li>
    <li>You must have the Quick Draw Talent.</li>
    <li>You must have proof of murdering at least sixteen different sentient lifeforms, in sixteen different ways.</li>
</ul>
<p>Once initiated, you must adhere to the law of Bhaal. If you violate the dogma of Bhaal, your patron begins to deny spells to you.</p>
<p>Bhaal requires that at least one murder once every tenday, and if this can not be fulfilled (say, due to incarceration), you must make up for each murder missed.</p>
<p>Deathstalkers are known to recite the following last words to victims just before the killing blow.</p>
<blockquote>
    Bhaal awaits thee,<br/>
    Bhaal embraces thee,<br/>
    none escape Bhaal
</blockquote>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 4,
        ], ['WIS', 'CHA'], [
            'Divine', 'Evil',
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Rogue', 'Ninja', 'Assassin',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Athletics', 'Concentration', 'Deception', 'Intimidation', 'Medicine', 'Religion', 'Stealth',
            'Thievery',
        ]);

        $feature              = new Feature;
        $feature->key         = 'channel_divinity_call_dagger';
        $feature->name        = 'Channel Divinity: Call Dagger';
        $feature->description = '<p>You can use your Channel Divinity to cause a Dagger or Knife that you have Attuned to to appear in your hand.</p>
<p>Spend 1 Spell Point and a use of your Channel Divinity. As a Double Action, you cause your Attuned Dagger or Knife to your hands from any distance so long as the weapon is on the same plane of existence.</p>';
        $helper->saveFeature($feature, ['Divine', 'Channel Divinity']);

        $helper->addFeaturesToClass($class, [
            'stalked_enemy'                => [2],
            'channel_divinity_call_dagger' => [3],
            'surprise_attack'              => [3],
            'class_group_feat'             => [6, 9, 12, 15, 18],
            'uncanny_dodge'                => [5],
            'evasion'                      => [11],
        ]);
        $class->features()->save(app()->features['talent'], [
            'level' => 1,
            'meta'  => 'Quick Draw',
        ]);

        $helper->addDomainToClass($class, ['Murder', 'Death', 'Assassination']);
        $helper->addSpellSlotsToClass($class, 'seven');
        $helper->addSpellsToClass($class, [
            0 => ['Combat Quickness', 'Corrupt Weapon', 'Cutting Hand', 'Daze', 'Light', 'Necrotic Touch', 'Poison Spray',
                'Stabilize', 'Sword Burst', 'Touch of Death', ],
            1 => ['Bane', 'Charm', 'Cause Wounds', 'Cure Wounds', 'Deathwatch', 'Detect Good', 'Doom', 'Protection From Good',
                'Protection From Poison', ],
            2 => ['Body Blades', 'Cloud of Daggers', 'Darkness', 'Desecrate', 'Hold Person', 'Invisibility', 'Misty Step',
                'Poison', 'Restoration', ],
            3 => ['Circle of Protection From Good', 'Know Vulnerabilities', 'Toxin Immunity', 'Venom Bolt', 'Wound'],
            4 => ['Drain Life', 'Ebon Ray of Doom', 'Fang Trap', 'Plane Shift' => 'Self only and only to the Other Plane where Bhaal rules or back to the Prime Material Plane',
                'Sickness'],
            5 => ['Atonement', 'Dispel Good', 'Hallow', 'Harm', 'Scrying'],
            6 => ['Blade Barrier', 'Circle of Death', 'Finger of Death', 'Symbol' => 'Death only'],
            7 => ['Blasphemy', 'Death Door', 'Power Word Kill', 'Unholy Aura'],
        ]);

        $helper->addFeatsToClass($class, [
            'Weapon Finesse'             => 2,
            'Improved Feint'             => 3,
            'Weapon Focus'               => 5,
            'Bleeding Strike'            => 7,
            'Debilitating Strike'        => 9,
            'Double Debilitating Strike' => 12,
            'Master Strike'              => 15,
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
