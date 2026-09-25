<?php

namespace Database\Seeders\Gods;

use App\Enums\Pantheon;
use App\Models\Feat;
use App\Models\Feature;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsMulhorandiSeeder extends Seeder
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
        $god->name  = 'Horus-Re';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Mulhorandi'], [
            'name'           => $god->name,
            'title'          => 'Lord of the Sun, Master of Vengeance, Ruler of Mulhorand, Pharaoh of the Gods',
            'aliases'        => 'Helcaliant (Thay), Hokatep (Unther)',
            'level'          => 'Greater',
            'portfolio'      => 'The Sun, Vengeance, Rulership, Kings, Life',
            'regions'        => 'Mulhorand',
            'alignment'      => 'LG',
            'symbol'         => "A hawk's head wearing a pharaoh's crown surrounded a a solar disc",
            'favored_weapon' => 'An ankh (khopesh)',
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Amaunator',
            'title'          => 'The Yellow God, Keeper of the Eternal Sun, Keeper of the Golden Sun, Keeper of Law, Keeper of the Yellow Sun, Light of Law, Keeper of the Sun',
            'level'          => 'Greater',
            'aliases'        => "At'ar the Merciless (Bedine)",
            'portfolio'      => 'Bureaucracy, Contracts, Law, Order, Rulership, High Noon',
            'alignment'      => 'LN',
            'symbol'         => 'A yellow radiant sun',
            'favored_weapon' => 'Light Mace',
        ]);
        $horus = $god;

        $class                = new Klass;
        $class->name          = 'Eye of Horus-Re';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 2,
        ], ['WIS', 'CHA'], [
            'Divine', 'Good',
        ]);

        $helper->addClassesToGod($god, 'Mulhorandi', [
            'Paladin' => 20,
            'Cleric'  => 20,
        ]);
        $helper->addWorshipClassesToGod($god, 'Mulhorandi', [
            $class->name => ['is_clergy' => true],
            'Paladin'    => ['is_clergy' => true],
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Medicine', 'Religion']
        );
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 3,
            'meta'  => '<dl>
    <dt>Actions</dt> <dd>Action</dd>
    <dt>Spell</dt> <dd>Disk of Solar Vengeance</dd>
</dl>',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead');
        $helper->addDomainToClass($class, ['Law', 'Nobility', 'Retribution', 'Sun']);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Conviction', 'Dancing Lights', 'Detect Magic', 'Disrupt Undead', 'Light', 'Stabilize'],
            1 => ['Bless', 'Cloak of Shade', 'Command', 'Cure Wounds', 'Detect Chaos', 'Disk of Solar Vengeance', 'Divine Favor',
                'Endure Elements' => 'Fire or Light only', 'Exorcism', 'Lantern Light', 'Luminous Gaze', 'Nimbus of Light',
                'Protection From Chaos', 'Weather Sense', ],
            2 => ['Absorb Elements' => 'Fire or Light only', 'Aid', 'Consecrate', 'Daylight', 'Delay Disease', 'Delay Poison',
                'Favor of the Gods', 'Glorious Raiment', 'Remove Fear', 'Resist Elements', 'Scorching Ray', 'Sun Bolt',
                'Undead Bane Weapon', 'Zone of Truth', ],
            3 => ['Aura of the Sun', 'Blinding Smite', 'Brilliant Emanation', 'Circle of Protection From Chaos', 'Faithful Healing',
                'Dispel Magic', 'Elemental Weapon' => 'Light only', 'Know Bloodline', 'Prayer', 'Revivify', 'Searing Light',
                'Seek Eternal Rest', ],
            4  => ['Aerial Form' => 'Hawk only', 'Ceremony', 'Commune with City', 'Divine Wrath', 'Divine Power', 'Shadowblast',
                'Sunmantle', ],
            5  => ['Atonement', 'Banishment', 'Celestial Brand', 'Dawn', 'Dispel Chaos', 'Divine Weapon', 'Sun Scepter',
                'Wall of Light', ],
            6  => ['Crown of Brilliance', 'Purifying Light', 'Raise Dead', 'Sunbeam', "Undeath's Eternal Foe"],
            7  => ['Bastion of Good', 'Divine Word', 'Holy Aura', 'Regenerate', 'Renewal Pact', 'Shield of Law', 'Temple of the Gods'],
            8  => ['Control Weather', 'Crown of Glory', 'Sunburst'],
            9  => ['Blinding Glory'],
            10 => ['Anathema'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Horus-Re';
        $feat->requirement = 'Must be LN and Horus-Re must be your Patron deity';
        $feat->description = '<p>You are a Paladin of Horus-Re. You are concerned with routing out the minions of Set and maintaining the rule of the Pharaohs in Mulhorand. You gain the following.</p>
<ul>
    <li>You may cast the Light Spell as if it is modified with the Silent Spell Meta Magic Feat without spending any Spell Points.</li>
    <li>You gain the Favored Enemy Class Feature against the agents of Set</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior', 'Spend Spell Point']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Clean Self', 'Disrupt Undead', 'Light'],
            1 => ['Bless', 'Cloak of Shade', 'Command', 'Detect Chaos', 'Divine Favor', 'Exorcism', 'Nimbus of Light', 'Protection From Chaos',
                'Undead Bane Weapon', ],
            2 => ['Daylight', 'Divine Presence', 'Resist Elements', 'Sun Bolt'],
            3 => ['Aura of the Sun', 'Blinding Smite', 'Circle of Protection From Chaos', 'Commune with City', 'Searing Light'],
            4 => ['Divine Wrath', 'Sun Scepter', 'Sunmantle'],
            5 => ['Aerial Form' => 'Hawk only', 'Banishing Smite', 'Dawn', 'Dispel Chaos', "Undeath's Eternal Foe"],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Mulhorandi->value, $feat);

        $class                = new Klass;
        $class->name          = 'Sunlords';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Trained in all simple weapons';
        $class->armors        = 'Trained in all light armor, medium armor, and shields';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Amaunator.</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 2,
        ], ['WIS', 'CHA'], [
            'Divine',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Diplomacy', 'Medicine', 'Religion', 'Society']);
        $feature              = new Feature;
        $feature->key         = 'superior_light';
        $feature->name        = 'Superior Light';
        $feature->description = '<p>Whenever you cast a spell with the Light type, it is treated as 1 level higher to determine if it can Counter or Dispel a spell with the Darkness type. This also counts towards a Darkness spell can Counter or Dispel the Light spell.</p>
<p>You may spend 1 Spell Point to cast the Light Spell</p>';
        $helper->saveFeature($feature, ['Light', 'Spend Spell Point']);

        $helper->addFeaturesToClass($class, [
            'superior_light' => [2],
        ]);

        $helper->addChannelDivinityToClass($class, 'positive', 'Undead');
        $helper->addDomainToClass($class, ['Knowledge', 'Law', 'Light']);
        $helper->addSpellsToClass($class, [
            0  => ['Clean Self', 'Dancing Lights', 'Detect Magic', 'Light', 'Stabilize'],
            1  => ['Bless', 'Cloak of Shade', 'Command', 'Cure Wounds', 'Detect Chaos', 'Disk of Solar Vengeance',
                'Endure Elements' => 'Fire or Light only', 'Nimbus of Light', 'Protection From Chaos', 'Resist Fire', 'Zone of Truth', ],
            2  => ['Aid', 'Daylight', 'Delay Poison', 'Exorcism', 'Glorious Raiment', 'Produce Flame', 'Scorching Ray',
                'Sun Bolt', 'Undead Bane Weapon', ],
            3  => ['Aura of the Sun', 'Circle of Protection Chaos', 'Fireball', 'Prayer', 'Searing Light'],
            4  => ['Ceremony', 'Commune with City', 'Control Sand', 'Sunmantle'],
            5  => ['Atonement', 'Dawn', 'Dispel Chaos', 'Flame Strike', 'Sun Scepter', 'Wall of Light'],
            6  => ['Purifying Light', 'Sunbeam', "Undeath's Eternal Foe"],
            7  => ['Shield of Law', 'Word of Law'],
            8  => ['Sunburst'],
            9  => ['Blinding Glory'],
            10 => ['Eternal Sun'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Cleric'  => 25,
            'Wizard'  => 10,
            'Fighter' => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name => ['is_clergy' => true],
            'Fighter', 'Wizard',
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Amaunator demands that his followers exhibit a law-abiding, honest nature, and he asks no less of his chosen. Amaunator chooses those who exhibit a strong sympathy with law over chaos and who understand that the perfect is the enemy of the good. Justice must be done, even if it isn’t always infallible.</p>
<p>Amaunator's scions tend to be stern and inflexible in their approach, rooting out crime and applying the law equally to all even in exceptional circumstances that might reasonably require another solution.</p>
<ol>
    <li>You arrested a fellow officer of the law when they broke it</li>
    <li>You might be the greatest legal scholar of your generation</li>
    <li>You were blinded in pursuit of a criminal, and Amaunator guided your steps to their cature anyway</li>
    <li>You've spent your life tyring to solve a single crime of personal interest to you</li>
    <li>You turned your own family into justice when you discovered a conspiracy of wrongdoing</li>
    <li>You don't know whey Amaunator favors you. You don't feel particularly just, far from it</li>
</ol>",
            'devotion' => "<p>Following Amaunator means dedicating your life to the pursuit of upholding the law. As a follower of Amaunator, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Civilisation</dt> <dd>The work I do is all that stands between society and anarchy</dd>
    <dt>Power</dt> <dd>I get a dark thrill form abusing my position</dd>
    <dt>Hard Work</dt> <dd>It's exhausting work but someone has to do it</dd>
    <dt>Apathy</dt> <dd>The work never stops, and I begin to tire of it</dd>
    <dt>Protection</dt> <dd>I'm trying to protect the place where I live, and the people who live there</dd>
</dl>",
            'earn_piety' => [
                'Bringing a criminal to the attention of the law',
                'Upholding the letter of the law, even at the detriment of yourself or your allies and family',
                'Suppressing social disorder and/or unrest',
            ],
            'lose_piety' => [
                'Bending or breaking the law for your own personal gain',
                'Promoting or turning a blind eye to social chaos or disorder',
            ],
            'piety3' => '<h4>Favored God: Amaunator</h4>
<p>You gain Inspiration when you uphold the law or promote social order</p>',
            'piety10' => "<h4>Justiciar's Insight</h4>
<p>You can cast Zone of Truth with this trait, requiring no components. Once you cast thes pell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
            'piety25' => '<h4>Under Arrest</h4>
<p>You can cast Hold Person with this trait at-will, requiring no components. WIS is your spellcasting ability for this spell. You may only cast this spell on a creature you are apprehending under the law, to bring them to justice</p>',
            'piety50' => '<h4>Chosen of Amaunator</h4>
<p>If you are unable to see due to darkness or blindness, you gain tremorsense out to 30 feet for as long as you remain blinded in this way</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Anhur';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Mulhorandi'], [
            'name'           => $god->name,
            'title'          => 'General of the Gods, Champion of Physical Prowess, The Falcon of War, Supreme Marshall of All Armies, God of War, Thunder, Rain, and Storms',
            'aliases'        => 'Ramathant (Thay), Rammen, Ramatep, Rumatep (Unther)',
            'level'          => 'Lesser',
            'portfolio'      => 'War, Conflict, Physical Prowess, Thunder, Rain',
            'regions'        => 'Chessenta, Mulhorand',
            'alignment'      => 'CG',
            'symbol'         => "Khopesh with hawk's head pommel bound with a cord older: Bird of prey Untheric: Lightning bolt through storm cloud",
            'favored_weapon' => 'Warhawk (falchion)',
            'master_id'      => $horus->id,
        ]);

        $helper->addClassesToGod($god, 'Mulhorandi', [
            'Paladin' => 20,
            'Cleric'  => 20,
        ]);
        $helper->addWorshipClassesToGod($god, 'Mulhorandi', [
            'Paladin' => ['is_clergy' => true],
            'Fighter', 'Scout',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Anhur';
        $feat->requirement = 'Must be CG and Anhur must be your Patron deity';
        $feat->description = '<p>You are concerned with preparing the troops of Mulhorand for war. You are seek out and destroy the agents of Set as a secondary objective. You gain the following.</p>
<ul>
    <li>You gain the Weapon Focus Feat with the Falchion</li>
    <li>You gain a Talent</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior', 'Talent']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Electric Arc', 'Gust', 'Light', 'Radiant Mark', 'Thunderclap'],
            1 => ['Aura of Courage', 'Cloak of Shade', 'Compelled Duel', 'Detect Evil', 'Gust of Wind', 'Heroism', 'Protection From Evil',
                'Rain', 'Resist Electricity', 'Shock Bolt', 'Thunderous Smite', 'Undead Bane Weapon', 'Weather Sense', ],
            2 => ['Aura of War', 'Favor of the Gods', 'Remove Fear', 'Sonic Burst', 'Thunderstroke'],
            3 => ['Aura of Haste', 'Call Lightning', 'Calm Air', 'Circle of Protection From Evil', 'Cloak of Winds', 'Prayer',
                'Storm Shield', ],
            4 => ['Divine Power', 'Lightning Bolt'],
            5 => ['Control Winds', 'Dispel Evil'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Mulhorandi->value, $feat);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Osiris';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Mulhorandi'], [
            'name'           => $god->name,
            'title'          => 'Lord of Nature, Judge of the Dead, Reaper of the Harvest',
            'aliases'        => 'Osirant (Thay), Ozrikotep (Unther)',
            'level'          => 'Intermediate',
            'portfolio'      => 'Vegetation, Death, The Dead, Justice, Harvest',
            'regions'        => 'Mulhorand',
            'alignment'      => 'LG',
            'symbol'         => 'Crook and flail',
            'favored_weapon' => 'Just Reward (light flail or heavy flail)',
            'master_id'      => $horus->id,
        ]);

        $helper->addClassesToGod($god, 'Mulhorandi', [
            'Cleric'  => 10,
            'Druid'   => 20,
            'Paladin' => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Mulhorandi', [
            'Druid'   => ['is_clergy' => true],
            'Paladin' => ['is_clergy' => true],
            'Ranger'  => ['is_clergy' => true],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Osiris';
        $feat->requirement = 'You must be LG and Osiris must be your Patron deity';
        $feat->description = '<p>You are a Paladin of Osiris. You are concerned with meting out justice, guarding the bodies of the dead, and protecting the land (particularly in regards to harvest). You gain the following.</p>
<ul>
    <li>You gain the Channel Divinity (Positive) to Turn Undead as a Cleric. If you have Undead minions from a spell such as Animate Dead, you may Rebuke and control them instead.</li>
    <li>You may use your Paladin Spell Slots to cast Druid or Ranger spells that you have multi-classed into</li>
    <li>If you use a Smite against one of your Favored Enemies, add +5 to Damage</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Disrupt Undead', 'Light'],
            1 => ['Animal Friendship', 'Calm Animals', 'Cloak of Shade', 'Summon Animals', 'Undead Bane Weapon'],
            2 => ['Animal Messenger', 'Command Undead', 'Lay of the Land', 'Restoration'],
            3 => ['Animate Dead', 'Neutralize Poison', 'Speak with Dead'],
            4 => ['Atonement', 'Control Plants'],
            5 => ['Create Undead', 'Raise Dead'],
        ]);
        $helper->addFeatToGodPantheon($god, 'Mulhorandi', $feat);
        $helper->addFeatToGodPantheon($god, 'Mulhorandi', Feat::where('name', 'Watcher of Osiris')->first());
        $helper->addFeatToGodPantheon($god, 'Mulhorandi', Feat::where('name', 'Defender of Osiris')->first());
        $helper->addFeatToGodPantheon($god, 'Mulhorandi', Feat::where('name', 'Champion of Osiris')->first());
        $helper->addFeatToGodPantheon($god, 'Mulhorandi', Feat::where('name', 'Judge of Osiris')->first());

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Isis';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Mulhorandi'], [
            'name'           => $god->name,
            'title'          => 'Bountiful Lady, Lady of All Love, Mistress of Weather, Lady of Rivers, Mistress of Enchantment',
            'aliases'        => 'Isharia (Thay), Ishtar (Unther)',
            'level'          => 'Lesser',
            'portfolio'      => 'Weather, Rivers, Agriculture, Love, Marriage, Good Magic',
            'regions'        => 'Mulhorand',
            'alignment'      => 'NG',
            'symbol'         => 'Ankh and star',
            'favored_weapon' => 'An ankh and start (punching dagger)',
            'master_id'      => $horus->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Isis';
        $class->type          = 'Priest';
        $class->key_attribute = 'INT or WIS';
        $class->weapons       = 'Simple Weapons';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 3,
        ], ['INT', 'WIS'], [
            'Divine', 'Good', 'Arcane',
        ]);

        $helper->addClassesToGod($god, 'Mulhorandi', [
            'Wizard' => 20,
            'Druid'  => 5,
            'Bard'   => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Mulhorandi', [
            $class->name => ['is_clergy' => true],
            'Wizard',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Diplomacy', 'Medicine', 'Religion']);
        $class->features()->save(app()->features['extra_spells'], [
            'level' => 2,
            'meta'  => 'You may memorize an arcane spell in the extra spell slot in the same way that a Wizard does.',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 3,
            'meta'  => 'Enchanter',
        ]);
        $helper->addDomainToClass($class, ['Air', 'Enchantment', 'Water']);
        $helper->addSpellsToClass($class, [
            0 => ['Air Shield', 'Conviction', 'Dancing Lights', 'Detect Magic', 'Guidance', 'Gust', 'Light', 'Resist',
                'Stabilize', 'Virtue', ],
            1 => ['Bless', 'Charm', 'Cure Wounds', 'Detect Poison and Disease', 'Divine Favor', 'Gust of Wind', 'Love Bite',
                'Protection From Evil', 'Sanctuary', 'Weather Sense', ],
            2 => ['Aquavision', 'Augury', 'Aura of Hope', 'Darkvision', 'Delay Disease', 'Delay Poison', "Eagle's Splendor",
                'Endure Elements', 'Lay of the Land', 'Restoration', 'Water Whip', 'Resist Elements', ],
            3 => ['Air Breathing', 'Dispel Magic', 'Faithful Healing', 'Know Bloodline', "Love's Lament", 'Neutralize Poison',
                'Revivify', 'Sleet Storm', ],
            4 => ['Calm Air', 'Ceremony', 'Divination', 'Ice Storm', 'Ride the Waves'],
            5 => ['Atonement', 'Commune with Nature', 'Control Water', 'Control Winds', 'Dispel Evil', 'Hallow', 'Healing Circle'],
            6 => ['Field of Life', 'Find the Path', 'Heal', "Hero's Feast", 'Oasis'],
            7 => ['Regenerate', 'Spirit Walk'],
            8 => ['Control Weather', 'Divine Aura', 'Discern Location'],
            9 => ['Unearthly Beauty'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Nephthys';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Mulhorandi'], [
            'name'           => $god->name,
            'title'          => 'Guardian of Wealth and Commerce, Protector of the Dead, The Devoted Lady, The Lady of Sands, The Avenging Mother',
            'aliases'        => 'Nesharia (Thay), Neselthia (Unther)',
            'level'          => 'Lesser',
            'portfolio'      => 'Wealth, Trade, Protector of Children and the Dead',
            'regions'        => 'Mulhorand',
            'alignment'      => 'CG',
            'symbol'         => 'Horns around a lunar disk',
            'favored_weapon' => 'An ankh trailing a gold mist (whip)',
            'master_id'      => $horus->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Siamorphe',
            'title'          => 'The Divine Right',
            'level'          => 'Demi',
            'portfolio'      => 'Nobles, Rightful Noble Rule, Human Royalty',
            'alignment'      => 'LN',
            'symbol'         => 'Silver chalice with a golden sun on the side',
            'favored_weapon' => 'Noble Might (scepter/light mace)',
            'regions'        => 'Calimshan, Tethyr, Waterdeep (Assumbar family)',
            'master_id'      => $horus->id,
        ]);

        $helper->addClassesToGod($god, 'Mulhorandi', [
            'Rogue' => 15,
            'Bard'  => 15,
        ]);
        $helper->addClassesToGod($god, 'Faeruneon', [
            'Cleric'  => 20,
            'Fighter' => 5,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Nephthys';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons plus the Whip';
        $class->armors        = 'Light Armors, Medium Armor, Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 3,
        ], ['WIS', 'CHA'], [
            'Divine', 'Good',
        ]);

        $helper->addWorshipClassesToGod($god, 'Mulhorandi', [
            $class->name => ['is_clergy' => true],
            'Rogue', 'Bard',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Medicine', 'Religion']
        );
        // TODO: add Class Features to class
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead', 2);
        $helper->addDomainToClass($class, ['Protection', 'Trade']);
        $helper->addSpellsToClass($class, [
            0 => ['Bit of Luck', 'Clean Self', 'Friends', 'Guidance', 'Light', 'Stabilize', 'Virtue'],
            1 => ['Alarm', 'Bless', 'Cure Wounds', 'Detect Evil', 'Detect Poison and Disease', 'Locate City', 'Protection From Evil',
                'Remove Disease', ],
            2 => ['Aid', 'Augury', 'Comprehend Language', 'Consecrate', 'Darkvision', 'Hold Person', 'Remove Fear', 'Resist Elements'],
            3 => ['Celebration', 'Dispel Magic', 'Forbiddance', 'Know Bloodline'],
            4 => ['Ceremony', 'Commune with City', 'Divination', 'Tongues'],
            5 => ['Atonement', 'Commune', 'Legend Lore'],
            6 => ['Raise Dead', 'True Seeing'],
            7 => ['Channel Celestial'],
        ]);
        $helper->addSpellSlotsToClass($class, 'seven');

        // Priest of Siamorphe
        $class                = new Klass;
        $class->name          = 'Scions of Siamorphe';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Trained in all simple weapons';
        $class->armors        = 'Trained in all light armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 3,
        ], ['WIS', 'CHA']);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name => ['is_clergy' => true],
            'Fighter', 'Wizard',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Diplomacy', 'Medicine', 'Religion', 'Society']);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead', 2);
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 3,
            'meta'  => '<dl>
    <dt>Actions</dt> <dd>Double Action</dd>
    <dt>Spell</dt> <dd>Command</dd>
</dl>',
        ]);
        $helper->addDomainToClass($class, ['Knowledge', 'Law', 'Nobility']);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Guidance', 'Light', 'Mending', 'Stabilize'],
            1 => ['Bless', 'Command', 'Cure Wounds', 'Detect Alignment', 'Detect Poison and Disease', 'Discern Bloodline',
                'Divine Inspiration', 'Divine Smite', 'Fear', "Herold's Call", 'Identify', 'Note', 'Purify Food and Drink', ],
            2 => ['Aid', 'Augury', 'Aura of Glory', 'Comprehend Language', 'Consecrate', 'Crown of Might', 'Delay Poison',
                'Bestow Curse', "Eagle's Splendor", 'Favor of the Gods', 'Glorious Raiment', 'Locate Object', 'Remove Fear',
                'Resist Elements', 'Zone of Truth', ],
            3 => ['Comprehension', 'Crown of Courage', 'Crown of Protection', 'Dispel Magic', 'Hold Person',
                'Know Bloodline', 'Neutralize Poison', 'Revivify', 'Sending', ],
            4 => ['Ceremony', 'Compulsion', 'Commune with City', 'Crown of Majesty', 'Detect Scrying', 'Divination', 'Private Sanctum'],
            5 => ['Aura of Power', 'Atonement', 'Banishment', 'City Stride', 'Dispel Outsider', 'Divine Weapon', 'Hallow',
                'Susurrus of the City', ],
            6 => ["City's Might", 'Crown of Brilliance', 'Dominate', "Hero's Feast"],
            7 => ['Divine Decree', 'Shield of Law'],
            8 => ['Crown of Glory', 'Divine Aura', 'Power Word Stun'],
            9 => ['Imprisonment'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Thoth';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Mulhorandi'], [
            'name'           => $god->name,
            'title'          => 'Lord of Magic, Scribe of the Gods, Knower of All Secrets, Keeper of Knowledge, King of Knowledge',
            'aliases'        => 'Tholaunt (Thay), Thalatos (Unther)',
            'level'          => 'Lesser',
            'portfolio'      => 'Neutal Magic, Scribes, Knowledge, Invention, Secrets',
            'regions'        => 'Mulhorand',
            'alignment'      => 'N',
            'symbol'         => 'Ibis head below an ankh',
            'favored_weapon' => 'Knowledge Keeper (quarterstaff)',
            'master_id'      => $horus->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Thoth';
        $class->type          = 'Priest';
        $class->key_attribute = 'INT or WIS';
        $class->weapons       = 'Simple Weapons';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 3,
        ], ['INT', 'WIS'], [
            'Divine', 'Arcane',
        ]);

        $helper->addClassesToGod($god, 'Mulhorandi', [
            'Wizard' => 20,
            'Bard'   => 10,
        ]);
        $helper->addWorshipClassesToGod($god, 'Mulhorandi', [
            $class->name => ['is_clergy' => true],
            'Wizard', 'Bard',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Medicine', 'Religion']
        );
        $helper->addFeaturesToClass($class, [
            'spell_pool' => [2],
        ]);
        $class->features()->save(app()->features['extra_spells'], [
            'level' => 2,
            'meta'  => 'You may memorize an arcane spell in the extra spell slot in the same way that a Wizard does.',
        ]);
        $helper->addDomainToClass($class, ['Knowledge', 'Magic']);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Detect Magic', 'Light', 'Mage Hand', 'Message', 'Stabilize'],
            1 => ['Alarm', 'Arcane Pocket', 'Arcane Sensitivity', 'Cure Wounds', 'Detect Alignment', 'Enchant Item', 'Identify',
                'Mage Armor', 'Note', ],
            2 => ['Comprehend Language', 'Comprehension', 'Knock', 'Locate Object', 'Map', 'Restoration'],
            3 => ['Clairvoyance', 'Dispel Magic', 'Reveal Illusion', 'Secret Page', 'Sending', 'Tongues'],
            4 => ['Ceremony', 'Commune with Texts', 'Detect Scrying', 'Imbue with Spell Ability', 'Spell Immunity'],
            5 => ['Chronicle', 'Permanency', 'Scrying'],
            6 => ['Atonement', 'Teleport', 'True Seeing'],
            7 => ['Dictum', 'Plane Shift'],
            8 => ['Demiplane'],
            9 => ['Disjunction', 'Spell Shift'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Ptah';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Mulhorandi'], [
            'name'           => $god->name,
            'title'          => 'Opener of the Ways, Traveler of Realms, Lord of Eternity',
            'level'          => 'Intermediate',
            'portfolio'      => 'Crafts, Knowledge, Law, Travel',
            'regions'        => 'Mulhorand',
            'alignment'      => 'LN',
            'symbol'         => 'Bull',
            'favored_weapon' => 'Mace',
            'master_id'      => $horus->id,
            'description'    => "<p>Ptah is not know in the Realms. Long ago he was summoned by Lord Ao and asked to carry a message to the deities of the home world of the Mulan, and invited them to create powerful avatars that could accompany Ptah to Realmspace where their people had been taken by the Imaskari. Most of them agreed to make the sacrifice and the journey. Ptah led the way using an artifact known as the Beacon of Light. Thus the Mulhorandi and Untheric pantheons came to Toril, landing on what was later called the Godswatch Mountains. While some claim that Ptah ruled before Ra, and the Ptah eventually stepped down so that he could return to his realms in the Ethereal, no other Mulhorandi god has corroborated with this.</p>
<p>In the Outlands, a sprawling, richly decorated and well-staffed temple to Ptah stands within the Lady's Ward of the city Sigil.</p>",
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Ptah';
        $class->type          = 'Priest';
        $class->key_attribute = 'INT or WIS';
        $class->weapons       = 'Simple Weapons';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 3,
        ], ['INT', 'WIS'], [
            'Divine',
        ]);

        $helper->addClassesToGod($god, 'Mulhorandi', [
            'Wizard' => 20,
            'Cleric' => 20,
        ]);
        $helper->addWorshipClassesToGod($god, 'Mulhorandi', [
            $class->name => ['is_clergy' => true],
            'Wizard',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Arcana', 'Concentration', 'Diplomacy', 'Medicine', 'Religion']
        );
        $helper->addFeaturesToClass($class, [
            'spell_pool'      => [2],
            'chastise_spirit' => [3],
        ]);
        $helper->addDomainToClass($class, ['Knowledge', 'Magic']);
        $helper->addSpellsToClass($class, [
            0 => ['Disrupt Ectoplasm', 'Detect Aberration', 'Detect Ghost', 'Detect Magic', 'Resist Planar Alignment'],
            1 => ['Cloak Astral Pool', 'Comprehend Languages', 'Ectoplasmic Armor', 'Ethereal Alarm', 'Planar Orientation',
                'Portal Stabilization', 'Unseen Servant', 'Ventriloquism', ],
            2 => ['Analyze Portal', 'Anticipate Teleportation', 'Dimension Hop', 'Discolor Astral Pool', 'Distort Summons',
                'Ectoplasmic Web', 'Ethereal Mount', 'Invoke the Cerulean Sign', 'Misty Step', 'Spectral Hand', ],
            3 => ['Anti-Summoning Shell', 'Banishment', 'Blink', 'Dimensional Anchor', 'Dispel Magic', 'Ectoplasmic Decay',
                'Ethereal Prison', 'Interplanar Message', 'Portal View', 'Wraithform', ],
            4 => ['Call Modron Workers', 'Ceremony', 'Contact Other Plane', 'Creation', 'Dimension Door', 'Ether Cyclone',
                'Locate Gate', 'Make Manifest', 'Misty Step, Greater', 'Planar Adaption', 'Planar Binding', 'Trace Teleport', ],
            5 => ['Baleful Teleport', 'Dimension Jumper', 'Teleportation Circle', 'Wall of Force'],
            6 => ['Arcane Gate', 'Etherealness', 'Plane Shift', 'Teleport'],
            7 => ['Call Kolyarut', 'Ghost Form'],
            8 => ['Demiplane'],
            9 => ['Gate', 'Teleport Cage'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Bast';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Mulhorandi'], [
            'name'           => $god->name,
            'title'          => "Mother of Cats, Foe of Set, Anhur's Lieutenant",
            'aliases'        => 'Bastet, Felidae',
            'level'          => 'Demi',
            'portfolio'      => 'Cats, Protection',
            'regions'        => 'Mulhorand',
            'alignment'      => 'CG',
            'symbol'         => 'Noble Cat',
            'favored_weapon' => "A great cat's paw (Claw Bracer)",
            'master_id'      => $horus->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Sharess',
            'title'          => 'The Dancing Lady, Patroness of Feasthalls, the Feasthall Madam, the Lustful Mistress, Succubus of Sensation, the Tawny Temptress',
            'level'          => 'Demi',
            'portfolio'      => 'Hedonism, Sensual Fulfillment, Feasthalls',
            'regions'        => 'Calimshan',
            'alignment'      => 'CG',
            'symbol'         => 'Feminine Lips',
            'favored_weapon' => "A great cat's paw (Claw Bracer)",
            'master_id'      => God::where('name', 'Sehanine Moonbow')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'      => 'Zandilar the Dancer',
            'title'     => 'The Dancer',
            'level'     => 'Demi',
            'portfolio' => 'Intense Passionate Love',
            'alignment' => 'CN',
            'symbol'    => 'Lips',
            'master_id' => God::where('name', 'Silvanus')->first()->id,
        ]);
        $helper->addWorshipClassesToGod($god, 'Mulhorandi', [
            'Favored Soul' => ['is_clergy' => true],
            'Ranger'       => ['is_clergy' => true],
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Favored Soul' => ['is_clergy' => true],
            'Bard',
        ]);
        $helper->addWorshipClassesToGod($god, 'Seldarine', [
            'Favored Soul' => ['is_clergy' => true],
            'Ranger'       => ['is_clergy' => true],
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Hathor';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Mulhorandi'], [
            'name'           => $god->name,
            'title'          => 'The Nurturing Mother, The Quiet One, The Dancer of Fortune, She Who is There for Those in Need',
            'aliases'        => 'Hatharia (Thay), Hathelya (Unther)',
            'level'          => 'Demi',
            'portfolio'      => 'Motherhood, Folk Music, Dance, The Moon, Fate',
            'regions'        => 'Mulhorand',
            'alignment'      => 'NG',
            'symbol'         => "Horned cow's head wearing a lunar disk",
            'favored_weapon' => 'Long Cow Horns (short sword)',
            'master_id'      => $horus->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Hathor';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 3,
        ], ['WIS', 'CHA'], [
            'Divine', 'Good',
        ]);

        $helper->addClassesToGod($god, 'Mulhorandi', [
            'Bard'         => 15,
            'Favored Soul' => 10,
        ]);
        $helper->addWorshipClassesToGod($god, 'Mulhorandi', [
            $class->name => ['is_clergy' => true],
            'Bard',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Medicine', 'Religion'],
        );
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 2,
            'meta'  => '<dl>
    <dt>Actions</dt> <dd>Double Action</dd>
    <dt>Spell</dt> <dd>Aid</dd>
</dl>',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead');
        $helper->addDomainToClass($class, ['Family', 'Fate', 'Good', 'Moon']);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Dancing Lights', 'Detect Magic', 'Light', 'Resist', 'Stabilize'],
            1 => ['Bless', 'Calm Animals', 'Cure Wounds', 'Detect Evil', 'Exorcism', 'Harmony', 'Locate Water', 'Protection From Evil',
                'Sleep', ],
            2 => ['Aid', 'Aura of Hope', 'Calm Emotions', 'Comprehend Language', 'Delay Disease', 'Delay Poison', 'Endure Elements',
                'Glorious Raiment', 'Remove Fear', 'Remove Paralysis', 'Undead Bane Weapon', 'Zone of Truth', ],
            3 => ['Celebration', 'Circle of Protection From Evil', 'Dispel Magic', 'Faithful Healing', 'Know Bloodline',
                'Revivify', ],
            4 => ['Aura of Life', 'Ceremony', 'Divination', 'Remove Curse'],
            5 => ['Atonement', 'Banishment', 'Dispel Evil', 'Hallow', "Hero's Feast", 'Joyful Rapture'],
            6 => ['Heal'],
            7 => ['Divine Word', 'Holy Aura', 'Regenerate'],
            8 => ['Divine Aura', 'Power Word Heal'],
            9 => ['Blinding Glory'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Set';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Mulhorandi'], [
            'name'           => $god->name,
            'title'          => 'Lord of Evil, Defiler of the Dead, Lord of Carrion, Father of Jackals, Brother of Serpents, Outcast of the Gods, King of Malice, God of Darkness, God of Desert Storms',
            'aliases'        => 'Typhon (Thay, Uther), Zehir',
            'level'          => 'Intermediate',
            'portfolio'      => 'The Desert, Destruction, Drought, Night, Rot, Snakes, Hate, Betrayal, Evil Magic, Ambition, Poison, Murder',
            'regions'        => 'Mulhorand',
            'alignment'      => 'NE',
            'symbol'         => 'Coiled cobra',
            'favored_weapon' => 'The Spear of Darkness (longspear, halfspear or shortspear)',
        ]);
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => 'Sseth',
            'title'          => 'The Sibilent Death, Slitherer Supreme',
            'aliases'        => 'Merrshaulk, Varae, Squamanta the Black (Samarach, Thindol), Amphisbaena the World Serpent (Lapaliiya, Tashalar)',
            'level'          => 'Intermediate',
            'portfolio'      => 'Poison, Somnolence, Yuan-ti, Okothians, Ophidians, Spirit Nagas',
            'alignment'      => 'CE',
            'symbol'         => 'Coiled cobra',
            'favored_weapon' => 'Scimitar',
        ]);
        $set = $god;

        $class                = new Klass;
        $class->name          = 'Fangs of Set';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons plus all Spears';
        $class->armors        = 'Light Armor, Medium Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 3,
        ], ['WIS', 'CHA'], [
            'Divine', 'Evil',
        ]);

        $helper->addClassesToGod($god, 'Mulhorandi', [
            'Wizard'         => 15,
            'Cleric'         => 10,
            'Mystic Theurge' => 5,
            'Rogue'          => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Mulhorandi', [
            $class->name => ['is_clergy' => true],
            'Wizard', 'Rogue', 'Fighter',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Diplomacy', 'Medicine', 'Religion']);
        $helper->addFeaturesToClass($class, [
            'surprise_attack' => [3],
            'spider_climb'    => [9],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 2, 'meta' => 'Poison Resistance']);
        $class->features()->save(app()->features['wild_shape'], ['level' => 12, 'meta' => 'As if you have the Improved Wild Shape feat. Snakes only']);
        $helper->addChannelDivinityToClass($class, 'negative', 'Undead, Desert Jackals, Desert Insects, Desert Snakes');
        $helper->addDomainToClass($class, ['Air', 'Darkness', 'Evil', 'Hatred', 'Scalykind']);
        $helper->addFeatsToClass($class, [
            'Sacrificial Mastery' => 6,
        ]);
        $helper->addSpellsToClass($class, [
            0 => ['Air Shield', 'Clean Self', 'Detect Undead', 'Gust', 'Poison Spray', 'Sand Dagger', 'Stabilize'],
            1 => ['Bane', 'Charm', 'Contagion', 'Create or Destroy Water' => 'Destroy only', 'Cure Wounds', 'Deathwatch',
                'Detect Good', 'Doom', 'Fetid Breath', 'Fear', 'Gust of Wind', 'Protection From Good', 'Protection From Poison',
                'Scales of the Lizard', 'Scimitar of Sand', 'Serpent Arrow', 'Summon Animals' => 'Snakes only', 'Wall of Smoke', ],
            2 => ['Aura of Fear', 'Command Undead', 'Darkness', 'Desecrate', 'Dust Devil', 'Handfang', 'Hold Person', 'Pillar of Sand',
                'Poison', 'Restoration', 'Sticks to Snakes', 'Tremorsense', 'Undead Bane Weapon', 'Warding Wind', ],
            3 => ['Animate Dead', 'Circle of Protection From Good', 'Control Sand', 'Know Bloodline', 'Ray of Exhaustion',
                'Serpent Arms', 'Tongue Snake', 'Toxin Immunity', 'Venom Bolt', 'Wound', ],
            4 => ['Blight', 'Drain Life', 'Doom Scarabs', 'Ebon Ray of Doom', 'Fang Trap', 'Sand Form', 'Sickness'],
            5 => ['Atonement', 'Control Winds', 'Dispel Good', 'Insect Form' => 'Scorpions, Snakes, and Jackals only',
                'Insect Plague', ],
            6 => ['Create Undead', 'Investiture of Wind', 'Night Terrors', 'Sandblast', 'Wall of Wind'],
            7 => ['Blasphemy', 'Chain Sorrow', 'Unholy Aura', 'Whirlwind'],
            8 => ['Power Word Stun', 'Punishing Winds'],
            9 => ['Power Word Kill'],
        ]);
        $helper->addSpellSlotsToClass($class, 'eight');

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Sebek';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Mulhorandi'], [
            'name'           => $god->name,
            'title'          => 'Lord of Crocodiles, The Smiling Death',
            'aliases'        => 'Sebethant (Thay), Sebakar (Unther), Sobek, Haaashastaak',
            'level'          => 'Hero',
            'portfolio'      => 'Crocodiles, Rivers, River Hazards, Werecrocodiles, Wetlands',
            'regions'        => 'Mulhorand',
            'alignment'      => 'LE',
            'symbol'         => 'Crocodile head surmounted by a horned, plumed headdress.',
            'favored_weapon' => 'The Sorrowful Sear (longspear, shortspear, or halfspear)',
            'master_id'      => $set->id,
        ]);
        $helper->addWorshipClassesToGod($god, 'Mulhorandi', [
            'Ranger' => ['is_clergy' => true],
        ]);

        /**********************************************************************/

        God::where('name', 'Tymora (Tyche)')->first()->pantheons()->save(app()->pantheons['Mulhorandi'], [
            'name'      => 'Bes',
            'title'     => 'The Short Father',
            'level'     => 'Hero',
            'portfolio' => 'Chance, Luck',
            'regions'   => 'Mulhorand',
            'alignment' => 'N',
            'symbol'    => 'Gold Piece',
            'master_id' => $horus->id,
        ]);
    }
}
