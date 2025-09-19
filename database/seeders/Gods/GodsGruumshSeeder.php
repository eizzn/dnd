<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsGruumshSeeder extends Seeder
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
        $god->name  = 'Gruumsh';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Orc'], [
            'name'           => $god->name,
            'title'          => 'He Who Never Sleeps, the One-Eyed God, He Who Watches',
            'level'          => 'Greater',
            'portfolio'      => 'Orcs, Conquest, Survival, Strength, Territory',
            'alignment'      => 'NE',
            'symbol'         => 'Single un-winking eye',
            'favored_weapon' => 'The Bloodspear (Long Spear, Short Spear)',
        ]);
        $gruumsh = $god;

        $class                = new Klass;
        $class->name          = 'Gruumans';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons plus all Spears';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 2,
            'skill_progress' => 2,
        ], ['WIS', 'CHA'], [
            'Orc', 'Divine', 'Evil',
        ]);

        $helper->addClassesToGod($god, 'Orc', [
            'Fighter' => 20,
            'Cleric'  => 20,
        ]);
        $helper->addWorshipClassesToGod($god, 'Orc', [
            $class->name, 'Barbarian', 'Fighter',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Intimidation', 'Medicine', 'Performance', 'Religion']
        );

        $feature              = new Feature;
        $feature->key         = 'channel_divinity_bloodspear';
        $feature->name        = 'Channel Divinity: Bloodspear';
        $feature->description = "<p>You can use your Channel Divinity to empower your spear with an Action and 1 Spell Point. The weapon's tip begins to drip blood, and the spear acts as if it has the Wounding Rune for 10 minutes.</p>
<p>This has no effect on a spear that already has the Wounding Rune, and it does not work on Artifacts.</p>";
        $helper->saveFeature($feature, ['Divine', 'Channel Divinity']);

        $helper->addFeaturesToClass($class, [
            'channel_divinity_bloodspear' => [5],
        ]);
        $class->features()->save(Feature::where('key', 'favored_enemy')->first(), ['level' => 3, 'meta' => 'Elves only']);
        $helper->addChannelDivinityToClass($class, 'negative', 'Undead', 5);
        $helper->addDomainToClass($class, ['Cavern', 'Evil', 'Hatred', 'Orc']);
        $helper->addSpellsToClass($class, [
            0  => ['Blade Ward', 'Hex', 'Resist', 'Stabilize'],
            1  => ['Bane', 'Command', 'Cure Wounds', 'Detect Good', 'Divine Favor', 'Fear', 'Wrathful Smite'],
            2  => ['Aid', 'Augury', 'Aura of War', "Bear's Endurance", "Bull's Strength", "Cat's Grace", 'Desecrate', 'Enfeebling Smite',
                'Rage', 'Resist Fire', "Owl's Wisdom", ],
            3  => ['Dispel Magic', 'Dominate Animal', 'Prayer', 'Revivify'],
            4  => ['Divination', 'Divine Power', 'Guardian of Faith', 'Hold Person', 'Remove Curse'],
            5  => ['Atonement', 'Banishing Smite', 'Dispel Good', 'Hallow'],
            6  => ['Eyebite', 'Guards and Wards', 'Planar Ally'],
            7  => ['Stone Trap', 'Unholy Aura'],
            8  => ['Divine Aura'],
            9  => ['Crusade'],
            10 => ['Gate'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Bahgtru';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Orc'], [
            'name'           => $god->name,
            'title'          => 'The Strong, The Leg Breaker, The Son of Gruumsh',
            'level'          => 'Demi',
            'portfolio'      => 'Loyalty, Stupidity, Brute Strength',
            'alignment'      => 'CE',
            'symbol'         => 'Broken Thighbone',
            'favored_weapon' => 'Crunch (Spiked Gauntlet)',
            'master_id'      => $gruumsh->id,
        ]);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Bahgtru';
        $feat->requirement = 'Worshiper of Bahgtru';
        $feat->description = '<p>You are a Blackguard of Bahgtru</p>
<ul>
    <li>All Smite spells you cast has the Rage Type</li>
    <li>You gain the Impressive Strength Feat</li>
    <li>You gain the Strong Defense Feat</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Resist'],
            1 => ['Bless', "Bull's Strength" => 'Self only. Heighten +1 to target others', 'Compelled Duel',
                'Rage' => 'Self only. Heighten +1 to target others', ],
            2 => ['Aura of the Bull', "Aura of the Bull's Curse", "Bear's Endurance", 'Delay Poison', 'Divine Presence'],
            3 => ["Bear's Hex", 'Brittleskin'],
            4 => ['Divine Power', 'Giant Form'],
            5 => ['Aura of Power', 'Holy Weapon'],
            6 => ['Great Shout'],
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Orc']->id,
            'favor'       => "<p>Bahgtru's divine portfolio is that of strength, defined by constant tests and challenges. He favours the cow as his avatar on the earth, which bemuses anyone who hasn’t been on the receiving end of an angry one.</p>
<p>Bahgtru takes for his scions those who are willing to travel far and wide testing the limits of their strength against the world.</p>
<ol>
    <li>You once wrestled a gigantic lizard into a stalemate</li>
    <li>You won an arm wrestling contest with a giant. Ok, so maybe it was sick that day. It still counts</li>
    <li>You won the local games, and you're something of a small town celebrity</li>
    <li>You've been pumping yourself up with enhancement substances since adolescence</li>
    <li>You train every day from morning to sunset. You look like a living god</li>
    <li>Cows seem to like you. You're not sure why, but you know they have killed for you on at least one occasion</li>
</ol>",
            'devotion' => '<p>Following Bahgtru means dedicating yourself to physical strength. As a follower of Bahgtru, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Strength</dt> <dd>I want to be the very best, the best there ever was</dd>
    <dt>Hard Work</dt> <dd>I can only be the strongest if I train like a beast</dd>
    <dt>Pride</dt> <dd>I cannot allow myself to be beaten. It would break me</dd>
    <dt>Power</dt> <dd>I get a vicious thrill from being on top</dd>
    <dt>Aspiration</dt> <dd>I need to challenge bigger and bigger enemies</dd>
</dl>',
            'earn_piety' => [
                'Besting another creature physically',
                'Winning a contest or game of physicality',
            ],
            'lose_piety' => [
                'Purposefully losing or throwing a physical content',
                'Refusing a challenge',
            ],
            'piety3' => '<h4>Favored God: Bahgtru</h4>
<p>You gain Inspiration when you make a performative display of great physical strength</p>',
            'piety10' => '<h4>Yeet</h4>
<p>You treat all weapons as if they had the Thrown tag, and can wield two handed weapons as if they had the Light tag instead</p>',
            'piety25' => '<h4>No Feat Too Great</h4>
<p>You can use your bare hands in STR based ability checks to affect materials that they would usually not be able to damage, ie. stone walls, metal cages.  In this manner you could (in theory) smash through a brick wall without damaging your hands</p>',
            'piety50' => "<h4>Chosen of Bahgtru</h4>
<p>You can focus yourself to briefly channel Bahgtru's incredible prowess. You can spend an Inspiration to gain +10 to one STR based ability check, after you have made the roll but before the DM has declared a success or failure</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Ilneval';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Orc'], [
            'name'           => $god->name,
            'title'          => 'The Horde Leader, The War Maker, The Lieutenant of Gruumsh',
            'level'          => 'Demi',
            'portfolio'      => 'War, Combat, Overwhelming Numbers, Strategy, Hordes',
            'alignment'      => 'NE',
            'symbol'         => 'Upright blood-splattered sword',
            'favored_weapon' => 'Foe Smiter (Long Sword)',
            'master_id'      => $gruumsh->id,
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Paladin', 'Fighter', 'Scout',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Ilneval';
        $feat->requirement = 'You must be CE and Ilneval must be your Patron Deity';
        $feat->description = '<p>You are a Blackguard of Ilneval</p>
<ul>
    <li>All your attacks with a Smite Spell has a +1 bonus to hit</li>
    <li>All your Smite Spells deal an additional +2 to damage</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Wrathful Smite'],
            2 => ['Branding Smite', 'Enfeebling Smite'],
            3 => ['Blinding Smite', 'Haste', 'Prayer', 'Slowing Smite'],
            4 => ['Blink', 'Weapon Storm'],
            5 => ['Atonement', 'Banishing Smite'],
            6 => ['Arcane Sword'],
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Luthic';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Orc'], [
            'name'           => $god->name,
            'title'          => 'The Cave Mother, The Blood Moon Witch',
            'level'          => 'Demi',
            'portfolio'      => 'Caves, Orc Females, Home, Wisdom, Fertility, Healing, Servitude',
            'alignment'      => 'LE',
            'symbol'         => 'Orc rune symbolizing home',
            'favored_weapon' => 'A hand with long claws (Claw Bracers)',
            'master_id'      => $gruumsh->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Luthic';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 6,
            'skill_progress' => 6,
        ], ['WIS', 'CHA'], [
            'Orc', 'Divine', 'Evil',
        ]);

        $helper->addClassesToGod($god, 'Orc', [
            'Cleric'   => 20,
            'Sorcerer' => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Orc', [
            $class->name, 'Monk', 'Divine Oracle',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Intimidation', 'Religion']
        );
        $helper->addDomainToClass($class, ['Earth', 'Evil', 'Orcs', 'Procreation', 'Prophecy']);
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 3,
            'meta'  => '<dl>
    <dt>Actions</dt> <dd>Action</dd>
    <dt>Spell</dt> <dd>Bless</dd>
</dl>',
        ]);
        $helper->addChannelDivinityToClass($class, 'negative', 'Undead');
        $helper->addSpellsToClass($class, [
            0 => ['Dancing Lights', 'Detect Magic', 'Ghost Sound', 'Mold Earth', 'Stabilize'],
            1 => ['Alarm', 'Bless', 'Cure Wounds', 'Curse', 'Detect Good', 'Detect Poison and Disease', 'Divine Favor',
                'Dragon Claws' => 'This appears as generic claws instead of dragon claws', 'Fear', 'Protection From Good',
                'Summon Elemental, Lesser' => 'Earth only', ],
            2 => ['Aura of Fear', "Bull's Strength", "Bear's Endurance", 'Comprehend Language', 'Death Knell', 'Endure Elements',
                "Owl's Wisdom", 'Remove Fear', 'Remove Paralysis', 'Restoration', 'Undead Bane Weapon', ],
            3 => ['Blindness', 'Burrow' => 'Self only', 'Circle of Protection From Good', 'Dispel Magic', 'Elemental Weapon' => 'Fire only',
                'Hold Person', 'Neutralize Poison', 'Prayer', 'Revivify', ],
            4 => ['Ceremony', 'Divination', 'Stoneskin'],
            5 => ['Atonement', 'Dispel Good'],
            6 => ['Harm', 'Heal', 'Move Earth', 'Raise Dead'],
            7 => ['Planar Ally', 'Spirit Walk', 'Stone Trap'],
            8 => ['Earthquake'],
            9 => ['Crusade'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god = God::where('name', 'Vhaeraun')->first();
        $god->pantheons()->save(app()->pantheons['Orc'], [
            'name'           => 'Shargaas',
            'title'          => 'The Night Lord, The Blade in the Darkness, The Stalker Below',
            'level'          => 'Demi',
            'portfolio'      => 'Night, Thieves, Stealth, Darkness, The Underdark',
            'alignment'      => 'NE',
            'symbol'         => 'Skull on a red crescent moon',
            'favored_weapon' => 'Nightblade (Short Sword)',
            'master_id'      => $gruumsh->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Shargaas';
        $class->type          = 'Priest';
        $class->key_attribute = 'DEX or WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 4,
        ], ['DEX', 'WIS'], [
            'Orc', 'Divine', 'Sneak Attack', 'Rogue', 'Evil',
        ]);

        $helper->addClassesToGod($god, 'Orc', [
            'Rogue' => 25,
        ]);
        $helper->addWorshipClassesToGod($god, 'Orc', [
            $class->name, 'Scout', 'Rogue',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Athletics', 'Concentration', 'Intimidation', 'Religion', 'Stealth', 'Thievery'],
        );
        $helper->addFeaturesToClass($class, [
            'rogue_feat'       => [2, 5, 14, 17],
            'precision_attack' => [2, 6, 10, 14, 18],
        ]);
        $helper->addDomainToClass($class, ['Evil', 'Orcs', 'Thieves', 'Darkness', 'Stealth']);
        $helper->addChannelDivinityToClass($class, 'negative', 'Undead');
        $helper->addSpellsToClass($class, [
            0 => ['Daze', 'Detect Magic', 'Ghost', 'Necrotic Touch', 'Poison Spray', 'Stabilize', 'Touch of Death'],
            1 => ['Bane', 'Cause Wounds', 'Cure Wounds', 'Disguise Self', 'Find Traps', 'Fleet Step', 'Jump', 'Protection From Poison'],
            2 => ['Alter Self', 'Blur', "Cat's Grace", 'Darkness', 'Invisibility', 'Invisibility, Swift', 'Poison', 'Restoration',
                'Shadow Blade', 'Silence', 'Skyhook', ],
            3 => ['Command Undead', 'Dispel Magic', 'Hold Person', 'Neutralize Poison', 'Nondetection', 'Toxin Immunity',
                'Water to Poison', ],
            4 => ['Cloak of Shadows', 'Drain Life'],
            5 => ['Atonement', 'Dimension Door'],
            6 => ['Scrying', 'Harm'],
            7 => ['Antimagic Field', 'Contingency', 'Disappearance', 'Glibness'],
        ]);
        $helper->addSpellSlotsToClass($class, 'seven');

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Orc']->id,
            'favor'       => "<p>Shargaas's favor falls like a shadow over the fringes of society. Every soul that can't find a purpose elsewhere, every lost cause and abandoned child - Shargaas sees them all, and sweeps them away under his leathery wings.</p>
<p>Shargaas’s scions are the lost and broken, the friendless and despised. With nowhere else to turn, Shargaas will find a home for you in his unseen legions.</p>
<ol>
    <li>You were born with a disability and your parents attempted to abandon you on a hillside. You survived</li>
    <li>They tried to hang you for serial murders, but you escaped. You ran far away, into the dark</li>
    <li>Your whole adventuring party died to a terrible evil, and it was all your fault</li>
    <li>You ran away from home, and before you could return, your village was slaughtered</li>
    <li>You displayed cowardice in battle, and were branded as such, never again permitted to march alongside your people</li>
    <li>You were driven from your town on charges of witchcraft and diabolism</li>
</ol>",
            'devotion' => "<p>Following Shargaas means being defined by the bad things that have happened to you. As a follower of Shargaas, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Judgement</dt> <dd>People are exactly as bad as they seem</dd>
    <dt>Hate</dt> <dd>This world stole everything from me, and I despise it</dd>
    <dt>Rage</dt> <dd>I can't let go of my past and how angry it makes me</dd>
    <dt>Secrecy</dt> <dd>I'd never admit it, but I'm still running away</dd>
    <dt>Dread</dt> <dd>In time, the world will come to fear me as I fear it</dd>
</dl>",
            'earn_piety' => [
                'Acting with spite, hate, or violence to emotionally charged scenarios',
                'Retreating to protect yourself from vulnerability',
            ],
            'lose_piety' => [
                'Allowing others to harm those you love without repercussion',
            ],
            'piety3' => '<h4>Favored God: Shargaas</h4>
<p>You gain Inspiration whenever you take meaningful action under cover of stealth, night, or darkness</p>',
            'piety10' => "<h4>Shargaas' Sight</h4>
<p>You gain Darkvision out to 60 feet. If you already have Darkvision, it is extended a further 60 feet, to a maximum of 120 feet. Magical Darkness doesn't impede this Darkvision</p>",
            'piety25' => "<h4>Wicked Steps</h4>
<p>You can cast Pass Without Trace with this trait, requiring no components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. CHA is your spellcasting ability for this spell. This ability can only affect you</p>",
            'piety50' => '<h4>Chosen of Shargaas</h4>
<p>When in dim light or darkness, you can use an Action to spend an Inspiration and turn Invisible. This Invisibility ends when you enter bright light, make an Attack or cast a spell. Otherwise, it lasts for 1 hour.</p>',
        ]);

        /**********************************************************************/

        $god = God::where('name', 'Talona')->first();
        $god->pantheons()->save(app()->pantheons['Orc'], [
            'name'           => 'Yurtrus',
            'title'          => 'White Hands, The Lord of Maggots, The Rotting One',
            'level'          => 'Demi',
            'portfolio'      => 'Death, Disease',
            'alignment'      => 'NE',
            'symbol'         => 'White hand, palm outward',
            'favored_weapon' => 'Pale white hands (Unarmed Strike)',
            'master_id'      => $gruumsh->id,
        ]);

        $helper->addClassesToGod($god, 'Orc', [
            'Rogue'    => 5,
            'Druid'    => 10,
            'Assassin' => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Orc', [
            'Druid', 'Monk', 'Rogue', 'Assassin',
        ]);

        $feat              = new Feat;
        $feat->name        = 'White Finger of Yurtrus';
        $feat->requirement = 'Druid of Yurtrus';
        $feat->description = '<ul>
    <li>You gain the Divine Fist Feat</li>
    <li>You gain the Poison Resistance Feat</li>
    <li>You gain the Brew Potion Feat</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal', 'Orc']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Ghost Sound'],
            2 => ['Invisibility'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'White Palm of Yurtrus';
        $feat->requirement = 'Druid of Yurtrus';
        $feat->description = '<ul>
    <li>You gain the Poison Immunity Feat</li>
    <li>You gain the Thousand Faces Feat</li>
    <li>You gain the Sneak Attack Feat</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal', 'Orc']);
        $feat->parent_feats()->save(app()->feats['White Finger of Yurtrus']);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Orc']->id,
            'favor'       => "<p>Yurtrus is a god who gives wisdom in return for infirmity. He sits by the elderly as they recount tales of their better years, and he sits by the sick as they hold the hands of their loved ones. Few willingly invite Yurtrus into their lives, he is a patient god.</p>
<p>Yurtrus's scions can appear in any shape and form, but are always changed by ill health, infirmity, age or a combination of the three.</p>
<ol>
    <li>You were born sick, and you won't have as long to live as most people</li>
    <li>You have a distinctive birthmark - a white hand that signified Yurtrus' claim on you</li>
    <li>You've worked hard your entire life, and now you've reached an old age you don't see Yurtrus as an enemy</li>
    <li>You have a terrible disease that will kill you in days, months or years. Each moment is precious</li>
    <li>You wer scarred by a pox as a baby, and it left you with physical handicaps</li>
    <li>You spent your life keeping a vow of silence, and you don't intend to break it now</li>
</ol>",
            'devotion' => "<p>Following Yurtrus means dedicating your life to the lessons learned from sickness and age. As a follower of Yurtrus, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Mystery</dt> <dd>Each passing day reveals a new secret to me from beyond the veil</dd>
    <dt>Mortality</dt> <dd>We all have to die. It's the manner in which we do so that makes the difference</dd>
    <dt>Humility</dt> <dd>Even the greatest of us are brought low by sickness and death eventually</dd>
    <dt>Acceptance</dt> <dd>Once you accept what life has in store, you can see everything more clearly</dd>
    <dt>Secrets</dt> <dd>There's a wisdom in silence and stillness. It comes with age - you'll get there in time</dd>
</dl>",
            'earn_piety' => [
                'Showing respect to the elderly and experienced',
                'Using sickness as a tool for growth and learning',
            ],
            'lose_piety' => [
                'Dismissing the advice of the experienced and aged',
            ],
            'piety3' => '<h4>Favored God: Yurtrus</h4>
<p>You gain Inspiration when you seek advice from the sick, elderly or dead</p>',
            'piety10' => '<h4>Voice of the Voiceless</h4>
<p>You can spend an Inspiration to cast Speak with Dead with this trait. Once you cast the spell in this way, you can\'t do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell. This version of the spell can also give a voice to living creatures normally unable to communicate due to the ravages of sickness or age</p>',
            'piety25' => '<h4>Miasma</h4>
<p>Creatures within 10 feet of you lose any immunity they possess to disease or the Sickened condition</p>',
            'piety50' => '<h4>Chosen of Yurtrus</h4>
<p>You can touch a dead creature and spend an Inspiration as an Action to gain a new skill, tool, or Save bonus relevant to that creature (DM decides). This new proficiency lasts 24 hours</p>',
        ]);
    }
}
