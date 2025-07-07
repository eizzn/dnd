<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsDragonsSeeder extends Seeder
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

        $asgorath        = new God;
        $asgorath->name  = 'Asgorath';
        $asgorath->level = 'Greater';
        $asgorath->save();
        $asgorath->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => $asgorath->name,
            'title'          => 'The World Shaper, The Concordant Dragon, The Great Eternal Wheel, Swallower of Shades, The Ninefold Dragon, Creator of Dragonkind',
            'aliases'        => 'Io, Shekinester',
            'level'          => 'Greater',
            'portfolio'      => 'Dragonkind, Balance and Peace, Creation Maintenance, Destruction, Knowledge',
            'alignment'      => 'N',
            'symbol'         => 'A multicolored metallic disk',
            'favored_weapon' => 'Claw (scimitar)',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Task';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => $god->name,
            'title'          => 'The Taker and Holder, Wrestler',
            'level'          => 'Intermediate',
            'portfolio'      => 'Greed, Selfishness',
            'alignment'      => 'CE',
            'symbol'         => 'A pile of five coins',
            'favored_weapon' => 'Bite',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Kereska';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'      => $god->name,
            'aliases'   => 'Kalzareinad',
            'title'     => 'Light of Magic, Wonderbringer',
            'level'     => 'Intermediate',
            'portfolio' => 'Magic, Dragon Magic',
            'alignment' => 'CN',
            'symbol'    => 'A five-pointed star with the lower two points extended',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Bahamut';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => $god->name,
            'title'          => 'Angel of the Seven Heavens, Draco Paladin, The God of Dragons, Grandfather of Dragons, King of the Good Dragons, Justicemaker, Lord of the North Wind, The Platinum Dragon',
            'aliases'        => 'Xymor',
            'level'          => 'Lesser',
            'portfolio'      => 'Good Dragons, Wind, Wisdom',
            'alignment'      => 'LG',
            'symbol'         => 'A star above a milky nebula',
            'favored_weapon' => 'Bite (heavy pick)',
        ]);
        // Faeruneon entry in TyrSeeder
        $god->pantheons()->save(app()->pantheons['Untheric'], [
            'name'      => 'Marduk',
            'title'     => 'The Justice Bringer, Lord of Pure Incantations, Valiant',
            'level'     => 'Demi',
            'portfolio' => 'City, Wind, Thunder, Storms and Rain',
            'alignment' => 'LG',
            'symbol'    => 'A silvery net',
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Paladin', 'Fighter',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Paladin of Bahamut';
        $feat->requirement = 'Must be LG and Bahamut must be your Patron deity';
        $feat->description = '<p>You are a Paladin of Bahamut</p>
<ul>
    <li>Increase your STR score by 1, to a maximum of 20</li>
    <li>Increase your CHA score by 1, to a maximum of 20</li>
    <li>You gain Proficiency with Heavy Armor</li>
    <li>You gain a +3 bonus to Diplomacy checks against Metallic dragons</li>
    <li>You are always affected by a Resistance spell</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Dragon', 'Divine Warrior']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Light', 'Resist'],
            1 => ['Aura of Courage', 'Dragon Claws', 'Detect Evil', 'Endure Elements'],
            2 => ['Aura of Fear', 'Dragon Breath', 'Restoration'],
            3 => ['Aspect of the Deity, Lesser', 'Dragon Wings', 'Remove Curse'],
            4 => ['Atonement', 'Divine Power', 'Dragon Ally', 'Draconic Might'],
            5 => ['Aura of Power', 'Dragon Form'],
            6 => ['Aspect of the Deity, Greater', 'Holy Aura'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Honor Guard of Bahamut';
        $feat->description = '<p>You further your devotion to Bahamut</p>
<ul>
    <li>You may use a 2nd level Spell Slot to summon a Lesser Dragon Mount (when casting the spell Call Mount). Use the Stats for a Pegasus, except that it is a Young Metallic Dragon with an Elemental Breath Weapon of the appropriate type.</li>
    <li>When you cast the Spell Dragon Breath, treat it as if it was Heightened +2</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Dragon', 'Divine Warrior']);
        $feat->parent_feats()->save(app()->feats['Paladin of Bahamut']);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Bahamut is a peculiar god. For all his vast draconic power, he rarely uses it or openly adopts his draconic form. Instead he adopts a disguise (such as a doddering old mage, or a kindly mentor) and attempts to encourage people to choose good because they want to, not under duress.</p>
<p>Bahamut has a soft spot for the underdog or forgotten, using his divine powers to give them the opportunities to better their own lives and pass that miracle onto others. Many chosen by Bahamut never know the nature of their patron.</p>
<ol>
    <li>You were on the streets until a kind old mage took you in under his wing</li>
    <li>Your family brought you into their cult when you were young, but a neighbour helped you free yourself</li>
    <li>Your parents died when you were young and you fell in with a bad crowd. A friend raised you up and you never looked back</li>
    <li>You have a terrible addiction to a magical substance. Having your sponsor to lean on helps you keep sober</li>
    <li>You've only every really cared for yourself, until a strange child came into your like</li>
    <li>You were blinded in a monster attack. You struggled and lashed out at the world until a passing healer cleared your sight with their touch</li>
</ol>",
            'devotion' => "<p>Following Bahamut means dedicating yourself to good above any other concerns. As a follower of Bahamut, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Secrecy</dt> <dd>It isn't a good deed if I'm only doing it for the rewared</dd>
    <dt>Community</dt> <dd>If I can help the people around me, then I should</dd>
    <dt>Responsibility</dt> <dd>I have been blessed with power. How I use that power is the measure of my character</dd>
    <dt>Charity</dt> <dd>Sometimes the world wrongs us for no reason. We should help those who need it without judgment</dd>
    <dt>Heroism</dt> <dd>I secretly desire to be lauded and praised for all the good work I do</dd>
</dl>",
            'earn_piety' => [
                'Acts of kindness or hospitality to those you do not know',
                'Helping someone with no incentive to do so',
                'Demurring praise or reward for any act of good',
            ],
            'lose_piety' => [
                'Profiting in any way off your efforts to do good',
                'Allowing others to fan the flames of your vanity',
            ],
            'piety3' => '<h4>Favored God: Bahamut</h4>
<p>You gain Inspiration when you help someone anonymously</p>',
            'piety10' => "<h4>Many Faced Stranger</h4>
<p>You can cast Disguise Self with this trait, requiring no material components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
            'piety25' => "<h4>Subtle Silver Fires</h4>
<p>You can cast Nondetection with this trait, requiring no material components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
            'piety50' => '<h4>Chosen of Bahamut</h4>
<p>You can use an Action to spend an Inspiration and invoke the Rite of Rebirth. This functions as a Reincarnate spell, which always produces a metallic dragonborn, and only works on Good creatures. A creature can only benefit form the Rite of Rebirth once</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Tiamat';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'        => $god->name,
            'aliases'     => 'Azharul',
            'title'       => 'Queen of Evil Dragons',
            'level'       => 'Lesser',
            'portfolio'   => 'Chromatic Dragons',
            'alignment'   => 'LE',
            'symbol'      => 'A five-headed dragon',
            'description' => '<p>Azharul was subsumed by Tiamat, who now has assumed this role.</p>',
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Archdevil, The Avaricious, Bane of Bahamut, Creator of Evil Dragonkind, The Chromatic Dragon, The Dragon Queen, The Dark Lady, Queen of Chaos, Queen of Evil Dragonkind, The Undying Queen',
            'level'          => 'Lesser',
            'portfolio'      => 'Chessenta, Evil Dragons, Evil Reptiles, Greed',
            'alignment'      => 'LE',
            'symbol'         => 'A five-headed dragon',
            'favored_weapon' => 'A dragon head (heavy pick)',
        ]);
        $god->pantheons()->save(app()->pantheons['Untheric'], [
            'name'           => $god->name,
            'title'          => 'Nemesis of the Gods',
            'level'          => 'Lesser',
            'portfolio'      => 'Chessenta',
            'alignment'      => 'LE',
            'symbol'         => 'A five-headed dragon',
            'favored_weapon' => 'A dragon head (heavy pick)',
        ]);

        // Priest of Tiamat
        $class                = new Klass;
        $class->name          = 'Priest of Tiamat';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 2,
            'skill_progress' => 2,
        ], ['WIS', 'CHA']);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Paladin', 'Fighter',
        ]);
        // Skills
        $helper->addSkillsToClass($class, [
            'Concentration', 'Deception', 'Diplomacy', 'Medicine', 'Performance', 'Religion',
        ]);

        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 2, 3, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
        ]);
        $helper->addChannelDivinityToClass($class, 'negative', 'Dragons');
        $helper->addDomainToClass($class, ['Dragons', 'Evil', 'Greed']);
        $helper->addSpellsToClass($class, [
            0 => ['Acid Splash', 'Electric Arc', 'Fire Bolt', 'Frostbite', 'Light', 'Poison Spray', 'Resist', 'Treasure Scent'],
            1 => ['Acid Stream', 'Bless', 'Cure Wounds', 'Dragon Claws', 'Fear'],
            2 => ['Aura of Fear', 'Comprehend Language', 'Dragon Scales', 'Endure Elements'],
            3 => ['Aspect of the Deity, Lesser', 'Dragon Breath'],
            4 => ['Ceremony', 'Dragon Wings'],
            5 => ['Abate Dracorage', 'Aggravate Dracorage', 'Atonement', 'Chromatic Ray', 'Dragon Ally',
                'Reincarnate' => 'Always reincarnates into a Dragon Born', 'Spawn of Tiamat', ],
            6 => ['Dragon Form', "Dragon's Head"],
            7 => ['Aspect of the Deity, Greater', 'Enervating Breath'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Serpent Guards';
        $feat->requirement = 'You must be LE and Tiamat must be your Patron Deity';
        $feat->description = "<p>You are a Blackguard of Tiamat.</p>
<p>A fellowship of Untherite warriors devoted to Tiamat. They are charged with guarding Tiamat's cult in Unther.</p>
<ul>
    <li>You gain a +3 bonus to Diplomacy checks with Chromatic Dragons.</li>
    <li>You are immune to the Fear aura of all Dragons</li>
    <li>You can gain a draconic mount by sacrificing 3 Spell Points and a 3rd level Spell Slot.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Divine Warrior', 'Dragon', 'Evil']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Acid Splash', 'Electric Arc', 'Fire Bolt', 'Frostbite', 'Poison Spray'],
            1 => ['Bane', 'Dragon Claws', 'Fear', 'Wrathful Smite'],
            2 => ['Aura of Fear', 'Aura of War', 'Dragon Breath'],
            3 => ['Aspect of the Deity, Lesser'],
            4 => ['Aggravate Dracorage', 'Draconic Might', 'Dragon Ally', 'Dragon Wings'],
            5 => ['Chromatic Ray', 'Dispel Good'],
            6 => ['Dragon Form'],
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Sardior';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => $god->name,
            'title'          => 'Master of Gem Dragons, The Ruby Dragon, Prince of Neutral Dragons',
            'level'          => 'Lesser',
            'portfolio'      => 'Neutral Dragons, Night, Psionics, Secrets',
            'alignment'      => 'LN',
            'symbol'         => 'A ruby with an inner glow',
            'favored_weapon' => 'Claw',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Garyx';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => $god->name,
            'title'          => 'All-Destroyer, Cleanser of Worlds, Firelord',
            'level'          => 'Lesser',
            'portfolio'      => 'Fire, destruction, Renewal',
            'alignment'      => 'CE',
            'symbol'         => 'A reptilian eye superimposed over a red flame',
            'favored_weapon' => 'Claw (sickle)',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Hlal';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => $god->name,
            'title'          => 'Messenger of Asgorath, The Jester, The Pursued, Quicksilver (Seldarine)',
            'aliases'        => 'Avachel (Seldarine, ally of Erevan), Aasterinian',
            'level'          => 'Demi',
            'portfolio'      => 'Humor, Inspiration, Messages, Storytelling, Tricks',
            'alignment'      => 'CG',
            'symbol'         => 'An open book',
            'favored_weapon' => 'Claw (short sword, spear)',
            'master_id'      => $asgorath->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Parrafaire';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => $god->name,
            'title'          => 'The Naga Prince, The Prince of Hidden Secrets',
            'level'          => 'Demi',
            'portfolio'      => 'Guardianship',
            'alignment'      => 'CN',
            'symbol'         => 'A male naga head with feathered ears',
            'favored_weapon' => 'Tail Scythe (tail scythe)',
            'master_id'      => $asgorath->id,
        ]);
    }
}
