<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsCyricSeeder extends Seeder
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
        $god->name  = 'Cyric';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Prince of Lies, The Dark Sun, The Black Sun, The Mad God, The Mad One, Dark Prince, Price of Madness',
            'aliases'        => "Cyruk, Sirhivatizangpo, N'asr, Leira",
            'level'          => 'Greater',
            'portfolio'      => 'Deception, Illusion, Intrigue, Lies, Strife, Dusk',
            'alignment'      => 'CE',
            'regions'        => 'Amn, Moonsea, Nelanther Isles, Zhentil Keep, Voonlar, Llorkh, Hordelands, Lake of Steam',
            'symbol'         => 'White jawless skull on black or purple sunburst',
            'favored_weapon' => "Razor's Edge (longsword)",
        ]);
        $god->pantheons()->save(app()->pantheons['Dark Seldarine'], [
            'name'           => 'Zinzerena',
            'title'          => 'The Hunted, The Princess of the Outcasts',
            'level'          => 'Hero',
            'portfolio'      => 'Lies, Assassination, Illusion',
            'alignment'      => 'CE',
            'symbol'         => 'The draped sword',
            'favored_weapon' => 'Short Sword',
        ]);
        $cyric = $god;

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Fighter'  => 3,
            'Wizard'   => ['level' => 20, 'meta' => 'Illusion'],
            'Rogue'    => 17,
            'Assassin' => 5,
        ]);

        $class                = new Klass;
        $class->name          = 'Strifeleader';
        $class->type          = 'Priest';
        $class->key_attribute = 'DEX or WIS';
        $class->weapons       = 'Club, Dagger, Heavy Crossbow, Light Crossbow, Staff, Short Sword, Long Sword';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Cyric</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 6,
            'skill_progress' => 5,
        ], ['INT', 'DEX'], [
            'Evil', 'Divine', 'Illusion',
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Paladin', 'Wizard' => ['meta' => 'Illusion'], 'Warlock', 'Rogue', 'Bard', 'Spellthief', 'Assassin',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Arcana', 'Concentration', 'Deception', 'Religion', 'Stealth', 'Society', 'Thievery']
        );
        $helper->addFeaturesToClass($class, [
            'divine_feat'   => [1, 6, 12, 18],
            'wizard_feat'   => [3, 9, 15, 20],
            'fear_immunity' => [3],
        ]);
        $helper->addChannelDivinityToClass($class, 'negative', 'Undead', 4);
        $helper->addDomainToClass($class, ['Chaos', 'Destruction', 'Illusion', 'Trickery']);

        $helper->addFeatsToClass($class, [
            'Skirmish'                   => 4,
            'Sacrificial Mastery'        => 5,
            'Bleeding Strike'            => 7,
            'Debilitating Strike'        => 9,
            'Double Debilitating Strike' => 12,
            'Master Strike'              => 15,
            'Illusionist'                => 3,
            'Expert Illusionist'         => 7,
            'Master Illusionist'         => 13,
        ]);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Detect Magic', 'Ghost Sound', 'Light', 'Mage Hand', 'Message', 'Minor Illusion', 'Prestidigitation',
                'Slash Tongue', 'Stabilize', ],
            1 => ["Arcanist's Magic Aura", 'Black Talon', 'Blur', 'Color Spray', 'Charm', 'Command', 'Cure Wounds', 'Detect Good',
                'Disguise Self', 'Doom', 'Drug Resistance', 'Fear', 'Fleet Step', 'Hypnotism', 'Mimicry', 'Obscure Object',
                'Silent Image', ],
            2 => ["Cat's Grace", 'Desecrate', 'False Lie', 'False Life', 'Glitterdust', 'Hideous Laughter', 'Illusory Creature',
                'Invisibility', 'Illusory Disguise', 'Illusory Object', 'Mirror Image', 'Misdirection', 'See Invisibility',
                'Spectral Hand', 'Ventriloquism', ],
            3  => ['Cone of Dimness', 'Enemies Abound', 'Hold Person', 'Hold Undead', 'Hypnotic Pattern', 'Major Image',
                'Skull Watch', ],
            4  => ['Ceremony', 'Dread Blast', 'Ebon Ray of Doom', 'Invisibility Sphere', 'Keen Edge', 'Phantasmal Killer',
                'Skull of Secrets', 'Veil', ],
            5  => ['Daywalker', 'Mislead', 'Programmed Illusion', 'Skull Eyes', 'Suggestion'],
            6  => ['Atonement', 'Harm', 'Heal', 'Illusory Scene', 'Night Terrors', 'Permanent Image', 'Project Image',
                'Programmed Image', 'Raise Dead', ],
            7  => ['Cloak of Chaos', 'Mirage Arcane', 'Phantasmal Calamity', 'Possession', 'Revive Undead', 'Triple Mask',
                'Undeath after Death', 'Unholy Aura', ],
            8  => ['Feeblemind', 'Glibness', 'Screen', 'Spread of Savagery', 'Unseen Thief'],
            9  => ['Disappearance', 'Mind Blank', 'Weird'],
            10 => ['Miracle'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $feat              = new Feat;
        $feat->name        = 'The Order of the Black Sun';
        $feat->requirement = 'Must be CE';
        $feat->description = '<p>You are a Paladin of Cyric.</p>
<ul>
    <li>You gain a +2 bonus vs Fear effects</li>
    <li>You add the spell Minor Illusion to your list of known Cantrips. This spell does not count against your known Cantrips limit</li>
    <li>When you cast the spell Undetectable Alignment, treat it as if it was Heightened +2</li>
    <li>You gain the feat Sudden Strike</li>
</ul>
<dl>
    <dt>Based</dt> <dd>The Citadel of the Raven</dd>
    <dt>Chapters</dt> <dd>
        <ul>
            <li>Zhentil Keep</li>
            <li>Mulmaster</li>
            <li>Melvaunt</li>
            <li>Darkhold</li>
            <li>Llorkh</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $feat->attributes()->save(app()->attributes['CHA'], ['dc' => 13]);
        $helper->addSpellsToFeat($feat, [
            0 => ['Corrupt Weapon', 'Detect Magic', 'Friends', 'Ghost Sound', 'Light', 'Minor Illusion'],
            1 => ['Aura of Courage', 'Bane', 'Darkvision', 'Detect Good', 'Doom', 'Drug Resistance', 'Fear', 'Wrathful Smite'],
            2 => ["Aura of the Owl's Curse", 'Darkness', 'Divine Presence', 'Undetectable Alignment'],
            3 => ['Aura of Pain', 'Bind Undead', 'Blinding Smite', 'Circle of Protection From Good'],
            5 => ['Aura of Undeath'],
            6 => ['Cloak of Chaos', 'Unholy Aura'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Cyric';
        $feat->requirement = 'Must be a worshiper of Cyric';
        $feat->description = '<p>You have made a Pact with the god Cyric. Warlocks of Cyric are those who are part of society seeking to gain power through lies and deception. These individuals choose to form a Pact with Cyric instead of studying magic (arcane illusionists) because they lack the intellect, or they wish to gain arcane power without going through the traditional path of years of study.</p>
<ul>
    <li>You may add the spells Ghost Sound, Minor Illusion and Silent Image to your spell list. These spells do not count against your spell known Cantrips and/or known spells.</li>
    <li>You gain a +5 bonus to Saves against the spell Zone of Truth or other spells that detect lies. This effect does not aid in preventing an effect that forces you to tell the truth.</li>
    <li>You are always under the effect of an Undetectable Alignment spell. If it is dispelled, you may spend a Triple Action to turn it back on.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Magical']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Drug Resistance', 'Ghost Sound', 'Mage Hand', 'Minor Illusion', 'Prestidigitation'],
            1 => ['Disguise Self', 'Fear', 'Illusory Script', 'Silent Image'],
            2 => ['Crown of Madness', 'Darkness', 'Invisibility', 'Mirror Image'],
            3 => ['Hypnotic Pattern', 'Major Image'],
            4 => ['Arcane Eye', 'Polymorph Self'],
            5 => ['Programmed Image'],
            6 => ['Dominate', 'Permanent Image'],
            7 => ['Project Image'],
            8 => ['Disappearance', 'Feeblemind'],
            9 => ['Chain Chaos', 'Weird'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Ritual of Black Charm';
        $feat->description = '<ul>
    <li>You add the spell Charm and Suggestion to your list of spells known and they do not count towards the maximum number of spells you can know. If you already have one or both spells as a Warlock spell, you may choose another single spell from your spell list.</li>
    <li>When you cast Charm, it is cast as if you had spent the Spell Points to apply the Metamagic feats Silent Spell and Still Spell (even if you do not have those feats). If the target Fails their Save, then the target does not become aware that they were Charmed.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Ritual', 'Invocation' => 5]);
        $feat->parent_feats()->save(app()->feats['Pact to Cyric']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Charm', 'Suggestion'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Ritual of Dark Flame';
        $feat->description = '<ul>
    <li>You gain 2 Spell Points</li>
    <li>You add the spell Eldritch Blast to your list of spells known and it does not count towards the maximum number of spells you can know. The Blast deals an additional 1D6 Negative damage. By taking a -1 WIS and CHA Drain damage as an Immediate Action, the Eldritch Blast deals double damage (only the base spell damage and not the Negative energy damage).</li>
    <li>You may also cast Eldritch Blast by spending 1 Spell Point instead of using a Spell Slot</li>
</ul>
<p>The ritual was developed some time during or after the Year of the Banner, 1368 DR, when Cyric drove himself mad by reading from the Cyrinishad. This was mostly performed upon members of the Company of the Ebon Spur.</p>
<p>The ritual requires the use of a black onyx gem worth at least 100 gp, which the ritual consumes.</p>';
        $helper->addTypesToFeat($feat, ['Pact', 'Ritual', 'Invocation' => 5]);
        $feat->parent_feats()->save(app()->feats['Pact to Cyric']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Eldritch Blast'],
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Cyric's favour is oft given to those who indiscriminately and without a shadow of doubt or remorse put their interests before those of others, by any means necessary.</p>
<p>Cyric's scions are thus drawn from the ranks of liars and deserters, but more commonly from the ranks of those with institutional privilege, such as those with hereditary wealth or those who run businesses that exploit their workers.</p>
<ol>
    <li>You were born under a dark sun</li>
    <li>Someone in your bloodline once read the Cyrinishod, and the taint was passed down to you</li>
    <li>You can't seem to stop lying to everyone</li>
    <li>You've founded a business or a married life founded on a single lie that could destroy everything</li>
    <li>You are fascinated by the sociology surrounding falsehoods and rumors</li>
    <li>You've betrayed every friendship you ever had</li>
</ol>",
            'devotion' => "<p>Following Cyric means dedicating yourself to mendacity. As a follower of Cyric, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Cruelty</dt> <dd>It's fun to slowly torture people emotionally</dd>
    <dt>Pragmatism</dt> <dd>All bonds fade away - before that happens you should make sure you get some use out of them</dd>
    <dt>Pride</dt> <dd>I am a liar beyond compare, it sustains me</dd>
    <dt>Secrecy</dt> <dd>I enjoy the silent cat and mouse game of lying to people and avoiding being caught</dd>
    <dt>Consolation</dt> <dd>There are times when a lie is kinder than the truth</dd>
</dl>",
            'earn_piety' => [
                'Exploiting another creature to your own benefit',
                'Betraying a friend or associate',
                'Lying to further your agenda',
            ],
            'lose_piety' => [
                'Honesty that could compromise you in any way',
                "Helping others in a way that doesn't also benefit you",
            ],
            'piety3' => '<h4>Favored God: Cyric</h4>
<p>You gain Inspiration when you successfully lie in a way that furthers the goals of you or your party</p>',
            'piety10' => "<h4>Forked Tongue</h4>
<p>You can cast Charm Person with this trait, requiring no components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. CHA is your spellcasting ability for this spell</p>",
            'piety25' => '<h4>Feint and Stab</h4>
<p>When you make an attack roll against a surprised creature you may roll against the passive Insight score of the target, not their AC</p>',
            'piety50' => "<h4>Chosen of Cyric</h4>
<p>You can spend an Inspiration to cast Glibness with this trait. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell. This version of the spell ends immediately if you tell an intentional truth when answering a question</p>",
        ]);

        /*****************************************************************************/

        $god              = new God;
        $god->name        = 'Garagos';
        $god->level       = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Master of all Weapons, The Reaver',
            'aliases'        => 'Targus',
            'level'          => 'Demi',
            'portfolio'      => 'Destruction, Plunder, Skill-at-arms',
            'alignment'      => 'CE',
            'regions'        => 'Moonsea, the Vast, Sea of Fallen Stars, Dragon Coast',
            'symbol'         => 'A counterclockwise circle of five arms clutching swords',
            'favored_weapon' => 'The Tentacus (a pinwheel of five black snaky arms, each ending in a longsword)',
            'master_id'      => $cyric->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Demonic'], [
            'name'      => 'Kostchtchie',
            'title'     => 'Prince of Wrath',
            'level'     => 'Demon Lord',
            'alignment' => 'CE',
        ]);

        $class                = new Klass;
        $class->name          = 'Bloodreavers';
        $class->type          = 'Priest';
        $class->key_attribute = 'STR or CON';
        $class->weapons       = 'Simple Weapons, Martial Weapons';
        $class->armors        = 'Light Armor, Medium Armor';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Garagos</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 10,
            'skill_points'   => 2,
            'skill_progress' => 2,
        ], ['STR', 'CON'], [
            'Divine', 'Combat Mastery', 'Fighter Feat',
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Barbarian', 'Scout', 'Fighter',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Athletics', 'Concentration', 'Religion']);
        $helper->addFeaturesToClass($class, [
            'divine_feat'    => [1, 3, 9, 15, 20],
            'fighter_feat'   => [2, 4, 10, 16, 18],
            'combat_mastery' => [6, 12],
        ]);
        $helper->addDomainToClass($class, ['Chaos', 'Destruction', 'War']);
        $helper->addSpellsToClass($class, [
            0 => ['Blade Ward', 'Booming Blade', 'Detect Magic', 'Sword Burst', 'True Strike', 'Stabilize'],
            1 => ['Battle Cry', 'Bless', 'Courageous Shout', 'Cure Wounds', 'Detect Law', 'Rally Cry'],
            2 => ["Bear's Endurance", "Bull's Strength", "Cat's Grace", 'Cloud of Daggers', 'Enlarge', 'Haste', 'Rage'],
            3 => ['Dancing Sword', 'Keen Edge', 'Weapon Storm'],
            4 => ['Ceremony', 'Divine Power', 'Holy Weapon'],
            5 => ['Atonement', 'Great Shout'],
            6 => ['Blade Barrier', 'Cloak of Chaos', 'Spread of Savagery'],
            7 => ['Crusade', 'Monstrosity Form'],
        ]);
        $helper->addSpellSlotsToClass($class, 'seven');
        $helper->addFeatsToClass($class, [
            'Sacrificial Mastery'    => 6,
        ]);
    }
}
