<?php

namespace Database\Seeders\Gods;

use App\Enums\ClassType;
use App\Enums\Pantheon;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsYondallaSeeder extends Seeder
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

        $yondalla        = new God;
        $yondalla->name  = 'Yondalla';
        $yondalla->level = 'Greater';
        $yondalla->save();
        $yondalla->pantheons()->save(app()->pantheons["Yondalla's Children"], [
            'name'           => $yondalla->name,
            'title'          => 'The Protector and Provider, the Nurturing Matriarch, The Blessed One',
            'level'          => 'Greater',
            'portfolio'      => 'Protection, Bounty, Halflings, Children, Security, Leadership, Wisdom, Creation, Family, Tradition',
            'regions'        => 'Luiren, Chondalwood, Silverymoon, Waterdeep',
            'alignment'      => 'LG',
            'symbol'         => 'Cornucopia on a shield',
            'favored_weapon' => 'Hornblade (Short Sword)',
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Yondalla';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 3,
        ], ['WIS', 'CHA'], [
            'Divine', 'Halfling', 'Good',
        ]);

        $helper->addClassesToGod($yondalla, "Yondalla's Children", [
            'Fighter' => 20,
            'Wizard'  => 20,
        ]);
        $helper->addWorshipClassesToGod($yondalla, "Yondalla's Children", [
            $class->name  => ['is_clergy' => true],
            'Paladin'     => ['is_clergy' => true],
            'Sacred Fist' => ['is_clergy' => true],
            'Monk',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Diplomacy', 'Medicine', 'Performance', 'Religion']);
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 3,
            'meta'  => '<dl>
    <dt>Actions</dt> <dd>Action or Reaction</dd>
    <dt>Spell</dt> <dd>Shield</dd>
</dl>',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead');
        $helper->addSpellsToClass($class, [
            0 => ['Boon', 'Conviction', 'Detect Magic', 'Disrupt Undead', 'Forbidding Ward', 'Guidance', 'Light', 'Mending',
                'Mold Earth', 'Shield', 'Stabilize', 'Virtue', ],
            1 => ['Alarm', 'Alleviate Addiction', 'Animal Friendship', 'Bless', 'Create or Destroy Water' => 'Create only',
                'Cure Wounds', 'Detect Evil', 'Detect Poison and Disease', 'Divine Inspiration', 'Exorcism', 'Faith Healing',
                'Sanctuary', 'Shield of Faith', ],
            2 => ['Aid', 'Animal Messenger', 'Comprehend Language', 'Consecrate', 'Delay Disease', 'Delay Poison', 'Endure Elements',
                'Glorious Raiment', 'Hold Person', 'Insignia of Alarm', 'Protection From Arrows', 'Protection From Poison',
                'Remove Fear', 'Remove Paralysis', 'Restoration', 'Resist Elements', 'See Invisible', 'Status', 'Undead Bane Weapon',
                'Zone of Truth', ],
            3 => ['Circle of Protection From Evil', 'Dispel Magic', 'Faithful Healing', 'Forbiddance', 'Glyph of Warding',
                'Insignia of Blessing', 'Insignia of Healing', 'Inspire Defense', 'Invisibility Purge', 'Neutralize Poison',
                'Prayer', 'Prophecy', 'Toxin Immunity', 'Vitality Shield', ],
            4 => ['Ceremony', 'Divination', 'Remove Curse'],
            5 => ['Atonement', 'Commune', 'Dispel Evil', 'Holy Weapon', 'Stalwart Covenant', 'Tomb of Light'],
            6 => ['Field of Life', 'Heal', "Hero's Feast"],
            7 => ['Bastion of Good', 'Divine Decree', 'Feast of Champions', 'Rebuke of Yondalla', 'Renewal Pact', 'Righteous Glare'],
            8 => ['Crown of Glory', 'Power Word Heal'],
            9 => [],    // TODO: add 9th level spells to spell list
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addPietyToGod($yondalla, [
            'pantheon_id' => app()->pantheons["Yondalla's Children"]->id,
            'favor'       => "<p>Yondalla cares for the survival of halflings as a whole, and chooses her champions from those who display the traits that halflings need to survive. Yondalla is keenly aware that the halflings are vulnerable due to their peaceful traditions and size, so she takes every opportunity to twist events in their favour.</p>
<p>Yondalla's scions can appear in any shape and form, but usually grab the goddess’ attention though some instance of great luck or courage.</p>
<ol>
    <li>You have a charming personality and no-one can remain mad at you for long</li>
    <li>You're quieter than a mouse, which is how you got away from that troll with the weird tooth</li>
    <li>You picked up a coin for good luck and later it saved your life somehow</li>
    <li>You have a highly developed sense of mischief, and have more enemies than friends</li>
    <li>You literally cannot resist touchings things</li>
    <li>Yondalla picked you, which is worrying because you don't really want it, or know why</li>
</ol>",
            'devotion' => "<p>Following Yondalla means dedicating your life to her ideals of loyalty, curiosity and friendliness. As a follower of Yondalla, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Family</dt> <dd>My chosen companions are dearer to me than life itself</dd>
    <dt>Secrecy</dt> <dd>There is safety in obscurity and subtle action</dd>
    <dt>Luck</dt> <dd>I trust my success to the goddess. If she can't make things work out, no-one can</dd>
    <dt>Greater Good</dt> <dd>I might break the rules occasionally, but it's for the best</dd>
    <dt>Courage</dt> <dd>Nothing scares me as much as the idea of not trying at all</dd>
</dl>",
            'earn_piety' => [
                'Living life to the fullest and creating bounty for all to share',
                'Throwing your lot in with fortune and coming out the other side unscathed',
            ],
            'lose_piety' => [
                'Deliberate cruelty or pre-meditated malice',
                'Selfish plotting and scheming',
            ],
            'piety3' => '<h4>Favored God: Yondalla</h4>
<p>You gain Inspiration when you re-roll an Attack Roll, Ability Check, or Save and the new result is a success</p>',
            'piety10' => '<h4>Lucky Number</h4>
<p>Choose a number between 2 and 20. Your Lucky feature activates on that number too</p>',
            'piety25' => '<h4>Infectious Fortune</h4>
<p>When you gain Inspiration, you can choose an allied creature within 10 feet of you. That creature gains Inspiration too</p>',
            'piety50' => '<h4>Chosen of Yondalla</h4>
<p>When you set up camp, you can spend an Inspiration to shield your rest from unwanted attention. For 8 hours, your camp is shrouded in a strange magic that stops any creature coming across it by mundane means, heading around it or walking right through it without noticing you</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Brandobaris';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons["Yondalla's Children"], [
            'name'           => $god->name,
            'title'          => 'Irrepressible Scamp, Master of Stealth',
            'level'          => 'Lesser',
            'portfolio'      => 'Stealth, Adventuring, Halfling Rogues',
            'regions'        => 'Luiren, Chondalwood, Silverymoon, Waterdeep',
            'alignment'      => 'N',
            'symbol'         => "Halfling's footprint",
            'favored_weapon' => 'Escape (Dagger)',
            'master_id'      => $yondalla->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Brandobaris';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS or DEX';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 4,
        ], ['WIS', 'CHA'], [
            'Divine', 'Skill', 'Halfling',
        ]);

        $helper->addClassesToGod($god, "Yondalla's Children", [
            'Rogue'  => 20,
            'Wizard' => 10,
        ]);
        $helper->addWorshipClassesToGod($god, "Yondalla's Children", [
            $class->name => ['is_clergy' => true],
            'Spellthief', 'Rogue', 'Bard',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Diplomacy', 'Medicine', 'Performance', 'Religion']);
        $helper->addFeaturesToClass($class, [
            'rogue_feat' => [2, 3, 5, 7, 9, 12, 15, 18],
        ]);
        $helper->addSpellsToClass($class, [
            0 => ['Bit of Luck', 'Conviction', 'Dancing Lights', 'Detect Magic', 'Ghost Sound', 'Guidance', 'Light', 'Stabilize'],
            1 => ['Bless', 'Camouflage', 'Cure Wounds', 'Grease', 'Heroism', 'Jump', 'Longstrider', 'Luck', 'Mage Hand',
                'Snare', 'Ventriloquism', ],
            2 => ['Aid', 'Animal Messenger', 'Augury', 'Aura of the Cat', "Cat's Grace", 'Consecrate', 'Delay Disease',
                'Delay Poison', 'Endure Elements', 'Enlarge', 'Insignia of Alarm', 'Invisibility', 'Knock', 'Map', 'Remove Fear',
                'Remove Paralysis', 'Restoration', 'Resist Elements', 'Spider Climb', 'Undead Bane Weapon', ],
            3 => ['Comprehension', 'Dispel Magic', 'Insignia of Blessing', 'Insignia of Healing', 'Journal', 'Revivify',
                'Tongues', ],
            4 => ['Ceremony', 'Haste', 'Remove Curse'],
            5 => ['Atonement', 'Commune', 'Dispel Evil', 'Hallow'],
            6 => ['Find the Path', "Hero's Feast"],
            7 => ['Etherealness', 'Triple Mask'],
        ]);
        $helper->addSpellSlotsToClass($class, 'seven');

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons["Yondalla's Children"]->id,
            'favor'       => "<p>Brandobaris is not a malicious god, though those on the receiving end of his endless curiosity might be inclined to think the worst of him. He rarely chooses serious criminals or those with dark ambition for his champions, preferring those who share his wonder and inquisitive glee.</p>
<p>Brandobaris's scions are often travelers, pickpockets and casual ne'er-do-wells still infused with the relentless drive of youth to Become Something.</p>
<ol>
    <li>When you were born, you were invisible for a full minute before appearing with a gurgle</li>
    <li>You left home very young, and your parents have been praying for you every night since</li>
    <li>When you don't want to be heard, the night itself forgets you exist</li>
    <li>You woke up recently in a gutter with no idea who you are or what your name is</li>
    <li>You didn't mean to steal from the duke, it was all a complete misunderstanding</li>
    <li>Yes, a face that looks like yours is pasted on wanted posters all over town, but you're sure it can't be anything to do with you</li>
</ol>",
            'devotion' => "<p>Following Brandobaris means dedicating yourself to madcap escapades and anarchistic fun. As a follower of Brandobaris, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Wealth</dt> <dd>I can't help touching shiny things</dd>
    <dt>Destiny</dt> <dd>I go wherever I please, and it's where I am supposed to be so don't try and stop me</dd>
    <dt>Duplicity</dt> <dd>My word last about 5 seconds until I forget I gave it</dd>
    <dt>Victory</dt> <dd>I adore the rush I experience when I realise I'm going to get away with it</dd>
    <dt>Luck</dt> <dd>I have no idea why I'm not in jail or dead but I'll worry about that tomorrow</dd>
</dl>",
            'earn_piety' => [
                'Engaging in a wild escapade or daring heist',
                'Evading an enemy or the law through stealth',
            ],
            'lose_piety' => [
                'Showing remorse or taking responsibility for your actions',
                'Getting caught in the act',
            ],
            'piety3' => '<h4>Favored God: Brandobaris</h4>
<p>You gain Inspiration when you successfully evade pursuit</p>',
            'piety10' => '<h4>What has it got in its Pocketses?</h4>
<p>You gain a hidden extradimensional pocket on your person (similar in function to a Bag of Holding) which no one can find by mundane searching</p>',
            'piety25' => '<h4>The Better Part of Valor</h4>
<p>When you take the Disengage Action, attack rolls made against you are made with a -5 penalty until the start of your next turn</p>',
            'piety50' => '<h4>Chosen of Brandobaris</h4>
<p>You may use an Action to spend an Inspiration and reach through a single solid surface no thicker than 1 foot in width. You may bring back a single item in this way within your reach</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Cyrrollalee';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons["Yondalla's Children"], [
            'name'           => $god->name,
            'title'          => 'The Hand of Friendship, The Hearthkeeper, The Faithful',
            'level'          => 'Hero',
            'alignment'      => 'NG',
            'portfolio'      => 'Friendship, Trust, The Hearth, Hospitality, Crafts',
            'regions'        => 'Luiren, Chondalwood, Silverymoon, Waterdeep',
            'symbol'         => 'Open Door',
            'favored_weapon' => 'Camaradestave (Club, wielded like a quarterstaff)',
            'master_id'      => $yondalla->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Lliira',
            'title'          => 'Our Lady of Joy, Joybringer, The Goddess of Joy, Mistress of the Reveals',
            'level'          => 'Demi',
            'alignment'      => 'CG',
            'portfolio'      => 'Joy, Happiness, Dance, Festivals, Carefree Celebration, Contentment, Release, Hospitality, Freedom/Liberty',
            'regions'        => 'Cormyr, Sembia, the Dalelands, the Sword Coast',
            'symbol'         => 'Three six-pointed stars arranged in a triangle with their points touching with the orange start uppermost, yellow on the left, and the red on the right',
            'favored_weapon' => 'Sparkle (Shuriken)',
            'master_id'      => God::where('name', 'Sehanine Moonbow')->firstOrFail()->id,
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Favored Soul' => 20,
            'Wizard'       => 10,
            'Bard'         => 5,
        ]);

        $class                = new Klass;
        $class->name          = 'Joydancers';
        $class->type          = ClassType::Priest->value;
        $class->key_attribute = 'WIS or DEX';
        $class->weapons       = 'Lasso and Net (Bludgeoning weapons in extreme circumstances)';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Lliira</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 3,
        ], ['WIS', 'CHA'], [
            'Divine', 'Good',
        ]);
        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Athletics', 'Concentration', 'Diplomacy', 'Language', 'Religion', 'Society',
        ]);

        $class->features()->save(app()->features['feat'], [
            'level' => 2,
            'meta'  => 'Improved Unarmed Strike',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 3,
            'meta'  => 'Beautiful Defense',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 4,
            'meta'  => 'Sacred Vow',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 5,
            'meta'  => 'Vow of Nonviolence',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead');
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Forbidding Ward', 'Friends', 'Guidance', 'Light', 'Mending', 'Message', 'Stabilize',
                'Virtue', ],
            1 => ['Alarm', 'Alleviate Addition', 'Animal Friendship', 'Bless', 'Calm Animals', 'Charm', 'Consecrate', 'Cure Wounds',
                'Detect Poison and Disease', 'Divine Favor', 'Exorcism', 'Faith Healing', 'Locate Water', 'Remove Disease',
                'Unseen Servant', ],
            2 => ['Absorb Elements', 'Aid', 'Animal Messenger', 'Aura of Hope', 'Bliss', 'Calm Emotions', 'Ceremony', 'Comprehend Language',
                'Continual Flame', 'Delay Disease', 'Delay Poison', 'Insignia of Alarm', 'Remove Fear', 'Remove Paralysis',
                'Restoration', 'Resist Elements', 'Status', 'Undead Bane Weapon', ],
            3 => ['Celebration', 'Dispel Magic', 'Faithful Healing', 'Heart Sight', 'Insignia of Blessing', 'Insignia of Healing',
                'Invisibility Purge', 'Neutralize Poison', 'Prayer', 'Revivify', 'Vitality Shield', ],
            4 => ['Anti-Summoning Shell', 'Calm Air', 'Divination', 'Remove Curse'],
            5 => ['Atonement', 'Banishment', 'Call Guardinal Servants', 'Commune', 'Hallow', 'Healing Circle', 'Sustain'],
            6 => ['Field of Life', 'Heal', "Hero's Feast", 'True Seeing'],
            7 => ['Bastion of Good', 'Divine Decree', 'Divine Word', 'Feast of Champions', 'Holy Aura', 'Sequester'],
            8 => ['Control Weather', 'Divine Aura'],
        ]);
        $helper->addSpellSlotsToClass($class, 'eight');

        $class                = new Klass;
        $class->name          = 'Priest of Cyrrollalee';
        $class->type          = ClassType::Priest->value;
        $class->key_attribute = 'WIS or DEX';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 3,
        ], ['WIS', 'CHA'], [
            'Divine', 'Halfling', 'Good',
        ]);

        $helper->addWorshipClassesToGod($god, Pantheon::Faeruneon->value, [
            $class->name    => ['is_clergy' => true],
            'Favored Soul'  => ['is_clergy' => true],
            'Divine Oracle' => ['is_clergy' => true],
        ]);
        // TODO: create Cyrrollalee Favored Soul feat

        // Skills
        $helper->addSkillsToClass($class, [
            'Concentration', 'Diplomacy', 'Medicine', 'Performance', 'Religion',
        ]);
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 4,
            'meta'  => '<dl>
    <dt>Actions</dt> <dd>Double Action</dd>
    <dt>Spell</dt> <dd>Aid</dd>
</dl>',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead');
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Forbidding Ward', 'Friends', 'Guidance', 'Light', 'Mending', 'Message', 'Stabilize',
                'Virtue', ],
            1 => ['Alarm', 'Alleviate Addition', 'Animal Friendship', 'Bless', 'Calm Animals', 'Charm', 'Consecrate', 'Cure Wounds',
                'Detect Poison and Disease', 'Divine Favor', 'Exorcism', 'Faith Healing', 'Locate Water', 'Remove Disease',
                'Unseen Servant', ],
            2 => ['Absorb Elements', 'Aid', 'Animal Messenger', 'Aura of Hope', 'Calm Emotions', 'Ceremony', 'Comprehend Language',
                'Continual Flame', 'Delay Disease', 'Delay Poison', 'Insignia of Alarm', 'Remove Fear', 'Remove Paralysis',
                'Restoration', 'Resist Elements', 'Status', 'Undead Bane Weapon', ],
            3 => ['Celebration', 'Dispel Magic', 'Faithful Healing', 'Heart Sight', 'Insignia of Blessing', 'Insignia of Healing',
                'Invisibility Purge', 'Neutralize Poison', 'Prayer', 'Revivify', 'Vitality Shield', ],
            4 => ['Anti-Summoning Shell', 'Calm Air', 'Divination', 'Remove Curse'],
            5 => ['Atonement', 'Banishment', 'Call Guardinal Servants', 'Commune', 'Hallow', 'Healing Circle', 'Sustain'],
            6 => ['Field of Life', 'Heal', "Hero's Feast", 'True Seeing'],
            7 => ['Bastion of Good', 'Divine Decree', 'Divine Word', 'Feast of Champions', 'Holy Aura', 'Sequester'],
            8 => ['Control Weather', 'Divine Aura'],
        ]);
        $helper->addSpellSlotsToClass($class, 'eight');
    }
}
