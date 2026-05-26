<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsTycheSeeder extends Seeder
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
        $god->name  = 'Tymora (Tyche)';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Tymora',
            'title'          => "Lady Luck, The Lady Who Smiles, Our Smiling Lady, Tyche's Fair-Haired Daughter",
            'level'          => 'Lesser',
            'portfolio'      => 'Adventurers, Good Fortune, Skill, Victory',
            'regions'        => 'Cormyr, Dragon Coast, Impiltur, Sembia, The Vast',
            'alignment'      => 'CG',
            'symbol'         => "Silver coin with Tymora's face surrounded by shamrocks",
            'favored_weapon' => 'A spinning coin (shuriken)',
            'master_id'      => God::where('name', 'Sehanine Moonbow')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons["Yondalla's Children"], [
            'name'           => 'Tymora',
            'title'          => 'Lady Luck, The Lady Who Smiles, Our Smiling Lady',
            'level'          => 'Hero',
            'portfolio'      => 'Adventurers, Good Fortune, Skill, Victory',
            'alignment'      => 'CG',
            'symbol'         => "Silver coin with Tymora's face surrounded by shamrocks",
            'favored_weapon' => 'A spinning coin (shuriken)',
            'master_id'      => God::where('name', 'Yondalla')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => 'Vergadain',
            'title'          => 'The Laughing Dwarf, Merchant King, The Short Father',
            'aliases'        => 'Bes',
            'level'          => 'Lesser',
            'portfolio'      => 'Chance, Luck, Negotiation, Non-Evil Thieves, Sly Cleverness, Suspicion, Trickery',
            'regions'        => 'The Great Rift, The North',
            'alignment'      => 'N',
            'symbol'         => 'Gold Piece',
            'favored_weapon' => 'Goldseeker (longsword)',
            'master_id'      => God::where('name', 'Odin Borrson')->first()->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Luckbringer';
        $class->type          = 'Priest';
        $class->key_attribute = 'DEX or WIS';
        $class->weapons       = 'Simple Weapons plus one choice';
        $class->armors        = 'Light Armor, Medium Armor, Shields';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Tymora and Vergadain</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 6,
        ], ['DEX', 'WIS'], [
            'Divine', 'Good', 'Rogue', 'Skill',
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Swashbuckler' => 20,
            'Adventurer'   => 20,
        ]);
        $helper->addClassesToGod($god, "Yondalla's Children", [
            'Swashbuckler' => 15,
            'Adventurer'   => 15,
        ]);
        $helper->addClassesToGod($god, 'Morndinsamman', [
            'Rogue'  => 20,
            'Bard'   => 10,
            'Wizard' => ['level' => 10, 'meta' => 'Illusionist'],
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Rogue', 'Swashbuckler', 'Adventurer',
        ]);
        $helper->addWorshipClassesToGod($god, "Yondalla's Children", [
            $class->name, 'Rogue', 'Swashbuckler', 'Adventurer',
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            $class->name, 'Rogue', 'Adventurer', 'Wizard' => ['meta' => 'Illusionist'],
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Athletics', 'Concentration', 'Deception', 'Diplomacy', 'Lore', 'Medicine', 'Performance',
            'Religion', 'Society', 'Stealth', 'Thievery',
        ]);
        $helper->addFeaturesToClass($class, [
            'rogue_feat'  => [1, 6, 12, 18],
            'skill_feat'  => [2, 4, 7, 10, 14],
        ]);
        $helper->addDomainToClass($class, ['Luck', 'Protection', 'Travel']);
        $helper->addSpellsToClass($class, [
            0 => ['Bit of Luck', 'Blade Ward', 'Boon', 'Clean Self', 'Conviction', 'Detect Magic', 'Guidance', 'Light',
                'Message', 'Shield', 'Stabilize', 'True Strike', ],
            1 => ['Arcane Pocket', 'Bless', 'Cure Wounds', 'Divine Favor', 'Favor of Tymora', 'Feather Fall', 'Fleeting Fortune',
                'Inspire Courage', 'Jump', 'Locate Water', 'Luck', 'Protection From Evil', 'Remove Disease', 'Sanctuary', 'Touch of Clumsiness', ],
            2 => ['Aid', 'Augury', 'Aura of Hope', "Cat's Grace", 'Cheat', 'Comprehend Language', 'Consecrate', 'Delay Disease',
                'Delay Poison', 'Elation', 'Endure Elements', 'Faerie Fire', 'Faithful Healing', 'Favor of the Gods', 'Find Traps',
                'Insight of Good Fortune', 'Map', 'Remove Curse', 'Remove Fear', 'Resist Elements', 'Treasure Scent', "Tyche's Touch",
                'Undead Bane Weapon', ],
            3 => ['Boon of Fortune', 'Circle of Protection From Evil', 'Dispel Magic', 'Good Hope', 'Journal', 'Neutralize Poison',
                'Prayer', 'Revivify', 'Tongues', 'Touch of Tyche', ],
            4 => ['Aura of Purity', 'Blink', 'Confusion', 'Freedom of Movement'],
            5 => ['Atonement', 'Banishment', 'Dispel Evil', 'Holy Weapon', 'Stalwart Covenant', 'Surge of Fortune', 'Threefold Boon'],
            6 => ['Field of Life', 'Heal', "Hero's Feast", 'True Seeing', 'Word of Recall'],
            7 => ['Choose Destiny', 'Fortunate Fate', 'Regeneration'],
            8 => ['Disappearance', 'Nine Lives'],
        ]);
        $helper->addSpellSlotsToClass($class, 'eight');

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Tymora loves most those who look after themselves and take bold choices. Her gaze falls most appreciatively on gamblers and dashing rogues who enjoy fast paced lives making one risky decision after another.</p>
<p>Tymora’s scions tend to be fast moving, fast talkers, always onto the next trick. Very rarely, the Lady of Luck takes an interest in a particular soul for reasons known only to her, blessing them with a charmed life filled with joyous coincidences.</p>
<ol>
    <li>You were gambled away as a baby, right into the hands of a caring, doting family</li>
    <li>You've been struck by lightning twice and you're still standing. Limping a little, perhaps</li>
    <li>You jumped off a building just to see what would happen. It hurt, but it was INCREDIBLE</li>
    <li>You shook a magical device to see what would happen. Stuff happened. It was worth it</li>
    <li>You gave away your hereditary wealth to random people you felt needed it</li>
    <li>You took down a huge monster with a lucky blow to a weak spot. You couldn't do it again if you tried</li>
</ol>",
            'devotion' => "<p>Following Tymora means dedicating your life to luck and chance. As a follower of Tymora, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Luck</dt> <dd>I can do whatever I want. The goddess has my back</dd>
    <dt>Risk</dt> <dd>I can't get enough of the thrill of putting my life on the line, the more dangerous method the better</dd>
    <dt>Wealth</dt> <dd>I have expensive tastes, and my absurd luck comes in handy at the gaming table</dd>
    <dt>Secrecy</dt> <dd>People think I'm skilled or learned, but actually I'm just incredibly lucky. They can never know</dd>
    <dt>Humility</dt> <dd>All the blessings in my life are gifts from the goddess</dd>
</dl>",
            'earn_piety' => [
                'Taking a risk on something that might better your life',
                'Making bold choice without fear of the consequences',
                'Passing on random good deeds as a way of paying forward your own fortune',
            ],
            'lose_piety' => [
                'Choosing a safe course of action when a risk has a chance of improving your situation',
            ],
            'piety3' => '<h4>Favored God: Tymora</h4>
<p>You gain Inspiration when you take a substantial risk in order to acquire something that you could live without, but is worth having</p>',
            'piety10' => '<h4>Cheating Fate</h4>
<p>If you have Advantage and Disadvantage on a roll, you treat the roll as having Advantage instead of cancelling it out</p>',
            'piety25' => '<h4>Lucky Charm</h4>
<p>You gain the Lucky feat</p>',
            'piety50' => '<h4>Chosen of Tymora</h4>
<p>Anyone who rolls a 20 before modifiers on an ability check within 30 feet of you finds their Action has unexpectedly good results in addition to the result of the roll, like stumbling across a treasure hoard or idly picking up a vital clue</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Beshaba (Tyche)';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Beshaba',
            'title'          => 'Black Bess, Lady Doom, The Maid of Misfortune',
            'aliases'        => 'Shaundakul The Treacherous Lurker in the Sands (Bedine)',
            'level'          => 'Lesser',
            'portfolio'      => 'Accidents, Bad Luck, Misfortune, Random Mischief, Curses',
            'regions'        => 'Nelanther Isles',
            'alignment'      => 'CE',
            'symbol'         => 'Black antlers on a red field',
            'favored_weapon' => 'Ill Fortune (barbed scourge)',
            'master_id'      => God::where('name', 'Araushnee')->first()->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Doommasters';
        $class->type          = 'Priest';
        $class->key_attribute = 'DEX or WIS';
        $class->weapons       = 'Simple Weapons, Whips, and one choice';
        $class->armors        = 'Light Armor, Medium Armor, Shields';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Beshaba</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 4,
        ], ['DEX', 'WIS'], [
            'Divine', 'Rogue',
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Rogue'     => 20,
            'Hex Blade' => 20,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Favored Soul', 'Rogue', 'Hex Blade', 'Divine Oracle',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Athletics', 'Concentration', 'Diplomacy', 'Medicine', 'Performance', 'Religion', 'Society',
            'Stealth',
        ]);
        $helper->addFeaturesToClass($class, [
            'rogue_feat'  => [1, 6, 12, 18],
        ]);
        $helper->addDomainToClass($class, ['Fate', 'Luck', 'Trickery', 'Prophecy']);
        $helper->addSpellsToClass($class, [
            0  => ['Clean Self', 'Conviction', "Copper Dragon's Trickery", 'Detect Magic', 'Hex', 'Light', 'Resist', 'Shield',
                'Stabilize', ],
            1  => ['Bane', 'Bane of Beshaba', 'Bestow Curse', 'Cause Wounds', 'Charm', 'Cheat', 'Cure Wounds', 'Curse',
                'Depilate', 'Divine Favor', 'Doom', 'Hideous Laughter', 'Jump', 'Pain Enhancing Hex', 'Protection From Good',
                'Touch of Blindness', 'Vulnerability', ],
            2  => ["Bull's Hex", "Cat's Hex", "Cat's Grace", "Eagle's Hex", 'Evil Eye', 'Faithful Healing', "Fox's Hex",
                'Hold Person', "Owl's Hex", 'Resist Elements', "Tyche's Touch", 'Undead Bane Weapon', ],
            3  => ["Bear's Hex", 'Blindness', 'Dispel Magic', 'Neutralize Poison', 'Prayer', 'Remove Curse', 'Revivify',
                'Slow', 'Touch of Tyche', 'Wound', ],
            4  => ['Aura of Confusion', 'Evil Glare', "Outcast's Hex", 'Unluck', 'Waves of Fatigue'],
            5  => ['Atonement', 'Banishment', 'Commune', 'Calling', 'Forbidden Speech', 'Surge of Fortune'],
            6  => ['Baleful Polymorph', 'Heal'],
            7  => ['Choose Destiny', 'Fortunate Fate', 'Sequester'],
            8  => ['Feeblemind', 'Nine Lives'],
            9  => ['Imprisonment', 'Were-doom'],
            10 => ['Miracle'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Beshaba's favour is a direct counterpoint to that of her more benevolent sister Tymora. She has the power to avert or inflict cruel twists of chance and bad luck on those she dislikes.</p>
<p>Beshaba's scions can be found in all vocations, but she finds particular worship in druids, who recognise her status as one of the old power of the First Circle.</p>
<ol>
    <li>You were born under an ill star</li>
    <li>Your family all died in tragic accidents shortly after your birth</li>
    <li>Everyone who meets you seems to undergo a swift and unlikely demise</li>
    <li>You sought out the goddess in the deep woods when all seemed lost</li>
    <li>Life crushed your dreams, and the goddess took pity</li>
    <li>You have no idea why you have the favor of the goddess, and it scares you</li>
</ol>",
            'devotion' => "<p>Following Beshaba means dedicating yourself to the cruel whims of misfortune. As a follower of Beshaba, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Humility</dt> <dd>We are all vulnerable to Her disfavor. Pray for mercy</dd>
    <dt>Fatalism</dt> <dd>What will be, will be. Just accept it</dd>
    <dt>Consolation</dt> <dd>Once you understand you have no control over your destiny, it puts everything in perspective</dd>
    <dt>Apathy</dt> <dd>The goddess decides if I succeed or fail. Why bother trying?</dd>
    <dt>Vigilantism</dt> <dd>Bad luck? Yes, that would be me, and I'm here to collect</dd>
</dl>",
            'earn_piety' => [
                'Thanking Beshaba for averting a disaster',
                'Making sure the goddess is ceremonially invited to a function, ritual or event',
            ],
            'lose_piety' => [
                'Worshipping or calling on the aid of Tymora, Lady of Luck',
                'Forgetting to invite Beshaba to an event or ceremony',
                'Not offering sacrifice to Beshaba for staying her hand when things are well',
            ],
            'piety3' => '<h4>Favored God: Beshaba</h4>
<p>You gain Inspiration when despite your careful planning, everything goes horribly wrong</p>',
            'piety10' => "<h4>Bad Luck Curse</h4>
<p>You can cast Bane with this trait, requiring no material components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
            'piety25' => '<h4>At the Wrong Moment</h4>
<p>Anyone who rolls a 1 within 30 feet of you suddenly finds the result of their Action to go disastrously wrong, eg, dropping a weapon or setting a house on fire</p>',
            'piety50' => '<h4>Chosen of Beshaba</h4>
<p>You may use a Reaction and spend an Inspiration to force an enemy to reroll a Save and take the lower result</p>',
        ]);

        $god        = new God;
        $god->name  = 'Ullr';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Shaundakul',
            'title'          => 'The Helping Hand, Rider of the Winds',
            'aliases'        => 'Skadi',
            'level'          => 'Demi',
            'portfolio'      => 'Caravans, Exploration, Miners, Portals, Travel',
            'regions'        => 'The North, Cormyr, Moonsea',
            'alignment'      => 'CN',
            'symbol'         => "A wind-walking bearded man in traveler's cape and boots",
            'favored_weapon' => 'Sword of Shadows (Greatsword)',
            'master_id'      => God::where('name', 'Tymora (Tyche)')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => 'Dugmaren Brightmantle',
            'title'          => 'The Errant Explorer, The Gleam in the Eye, The Wandering Tinker',
            'level'          => 'Demi',
            'portfolio'      => 'Invention, Discovery',
            'regions'        => 'The Great Rift',
            'alignment'      => 'CG',
            'symbol'         => 'Open Book',
            'favored_weapon' => 'Sharptack (Shortsword)',
            'master_id'      => God::where('name', 'Odin Borrson')->first()->id,
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Ranger' => 25,
            'Scout'  => 10,
        ]);
        $helper->addClassesToGod($god, 'Morndinsamman', [
            'Ranger' => 25,
            'Scout'  => 10,
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Ranger', 'Scout', 'Bard', 'Adventurer',
        ]);
        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            'Ranger', 'Scout', 'Bard', 'Adventurer', 'Artificer',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Traveller of Shaundakul';
        $feat->requirement = ' You must have the Favored Enemy Class Feature and Shaundakul must be your patron';
        $feat->description = '<p>You are a worshiper of the Rider of the Winds, Shaundakul.</p>
<ul>
    <li>You gain an additional Favored Terrain. This additional Favored Terrain must be used to select Caverns.</li>
    <li>You gain the Endurance Feat.</li>
    <li>You gain the Mobile Feat</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Portal']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Air Shield', 'Feather Fall', 'Gust', 'Portal Stabilization', 'Portal Well'],
            2 => ['Air Bubble', 'Analyze Portal', 'Gust of Wind', 'Quick March'],
            3 => ['Air Sphere', 'Locate Gate', 'Portal View'],
            4 => ['Air Walk', 'Gate Seal', 'Portal Barricade'],
            5 => ['Control Winds', 'Portal-to-Portal Redirect'],
            6 => ['Investiture of Wind', 'Portal Reformat'],
        ]);
    }
}
