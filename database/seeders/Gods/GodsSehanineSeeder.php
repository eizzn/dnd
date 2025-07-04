<?php

namespace Database\Seeders\Gods;

use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsSehanineSeeder extends Seeder
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
        $god->name  = 'Sehanine Moonbow';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'           => $god->name,
            'title'          => 'Daughter of the Night Skies, the Luminous Cloud',
            'level'          => 'Intermediate',
            'portfolio'      => 'Mysticism, Dreams, Death, Journeys, Transcendence, the Moon, the Stars, the Heavens, Moon Elves, Illusions, Divination',
            'regions'        => 'Evermeet, Evereska, Eaerlann',
            'alignment'      => 'CG',
            'symbol'         => 'Full moon under a moonbow',
            'favored_weapon' => 'Moonshaft (Quarterstaff)',
            'master_id'      => God::where('name', 'Corellon Larethian')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Selune',
            'aliases'        => 'Bright Nydra (Farsea Marshes), Elah (Bedine), Lucha (Shining Lands)',
            'title'          => 'Our Lady of Silver, the Moonmaiden, The Night White Lady, She Who Guides',
            'level'          => 'Greater',
            'portfolio'      => 'Good and Neutral Lychantropes, Moon, Navigation, Questers, Stars, Wanderers',
            'regions'        => 'Aglarond, Amn, Cormyr, Impiltur, the North',
            'alignment'      => 'CG',
            'symbol'         => 'Pair of eyes surrounded by seven stars',
            'favored_weapon' => 'The Wand of Four Moons (Heavy Mace)',
        ]);

        // Priest of Selune
        $class                = new Klass;
        $class->name          = 'Priest of Selune';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 4,
        ], ['WIS', 'CHA'], [
            'Divine', 'Good',
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name, 'Favored Soul', 'Adventurer',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Concentration', 'Diplomacy', 'Medicine', 'Performance', 'Religion',
        ]);
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 3, 6, 9, 12, 15, 18, 20],
        ]);
        $class->features()->save(app()->features['favored_enemy'], [
            'level' => 5,
            'meta'  => 'Minions of Shar',
        ]);
        $class->features()->save(app()->features['silvered_weapon'], [
            'level' => 3,
            'meta'  => 'All Wielded Maces',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Lychantropes');
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead', 4);
        $helper->addDomainToClass($class, ['Good', 'Moon', 'Protection', 'Prophecy']);
        $helper->addSpellsToClass($class, [
            0 => ['Boon', 'Clean Self', 'Conviction', 'Dancing Lights', 'Detect Magic', 'Know Direction', 'Light', 'Radiant Mark',
                'Stabilize', ],
            1 => ['Alleviate Addiction', 'Bless', 'Cure Wounds', 'Ease Pain', 'Exorcism', 'Lantern Light', 'Magic Weapon',
                'Moonbeam', 'Nimbus of Light', 'Protection From Lycanthropes', 'Ray of Light', 'Remove Disease', 'Sanctuary', ],
            2 => ['Abeyance', 'Augury', 'Calm Emotions', 'Consecrate', 'Countermoon', 'Create Food and Water', 'Darkvision',
                'Discern Shapechanger', 'Endure Elements', 'Faerie Fire', 'Force Shapechange', 'Glorious Raiment', 'Remove Fear',
                'Resist Elements', 'See Invisibility', 'Status', 'Obscuring Mist', 'Undead Bane Weapon', ],
            3  => ['Abolish Shadows', 'Diamond Spray', 'Dispel Magic', 'Dream Message', 'Faithful Healing', "Heart's Ease",
                'Moon Blade', 'Neutralize Poison', 'Prayer', 'Radiance', 'Sanctified Ground', 'Searing Light', 'Zone of Truth', ],
            4  => ['Dimensional Anchor', 'Life Ward', 'Read Omens', 'Remove Curse', 'Sacred Item', 'Stars of Selune', 'Spell Immunity',
                'Sunmantle', 'True Form', ],
            5  => ['Atonement', 'Banishment', 'Healing Circle', 'Moonbow', 'Purifying Light', 'Sending', 'Stalwart Covenant'],
            6  => ['Heal', 'Raise Dead', 'True Seeing'],
            7  => ['Dimensional Lock', 'Plane Shift', 'Radiant Assault', 'Renewal Pact'],
            8  => ['Discern Location', 'Last Judgment', 'Screen' => 'Only at night'],
            9  => ['Blinding Glory', 'Foresight', 'Moonfire', 'Spell Shift'],
            10 => ['Miracle'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addFeatsToClass($class, [
            'Divine Prophet' => 6,
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Seldarine']->id,
            'favor'       => "<p>Sehanine's favour is bestowed on any who truly need it, seeping into their dreams to warn them of dangers to come. Sehanine's blessing most often falls on elves, but could wend its way to any creature she deems wanting of her wisdom.</p>
<p>Sehanine's scions are those who appreciate her innate mystery and complexity. Not all questions were meant to be answered, and those who walk the path of Sehanine understand that the beauty of the riddle far exceeds any solution to it.</p>
<ol>
    <li>You dreamed of Sehanine, once. Or she dreamed of you. Perhaps there's little difference</li>
    <li>You saw the astral sign of the moonbow lurking over the shadow of a new moon. It portends tragedy</li>
    <li>You were born with pupils shaped like crescent moons, and they shine in the dark</li>
    <li>You were Sehanine in a past life, or something close to it</li>
    <li>You walked the Shadowfell until you couldn't remember what the light looked like. The goddess reminded you</li>
    <li>You lost favor with Corellon, who cursed you out of anger and spite. Sehanine softened the blow, and gave you a second chance</li>
</ol>",
            'devotion' => "<p>Following Sehanine means dedicating yourself to mysteries and revelations. As a follower of Sehanine, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Destiny</dt> <dd>As the goddess tells me, so it shall be</dd>
    <dt>Mystery</dt> <dd>The night is filled with questions. This is well</dd>
    <dt>Knowledge</dt> <dd>Each night I spend in communion with the goddess brings me closer to the Truth of all things</dd>
    <dt>Secrecy</dt> <dd>Even if I thought I could explain to you what I've seen in my dreams, I don't think I would</dd>
    <dt>Acceptance</dt> <dd>The stars don't change, we just change how we look at them</dd>
</dl>",
            'earn_piety' => [
                'Discovering a new question or mystery',
                'Noticing or deciphering an omen',
                'Paying heed to the events of your dreams',
            ],
            'lose_piety' => [
                'Becoming concerned with real world pragmatism',
                'Ignoring omens, dreams and signs',
            ],
            'piety3' => '<h4>Favored God: Sehanine</h4>
<p>You gain Inspiration when you have a dream or another mystic experience</p>',
            'piety10' => "<h4>Moonlit Mysteries</h4>
<p>You can cast Dream with this trait, requiring no components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
            'piety25' => '<h4>Clarity</h4>
<p>You never receive false answers from Divination spells. You cannot gain Madness traits</p>',
            'piety50' => '<h4>Chosen of Sehanine</h4>
<p>You can spend an Inspiration to cleanse your mind of malign influence. You are cured of all Enchantments, Illusions and Mind Altering curses affecting you</p>',
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Selune's favour is given to those on a journey. Whether a physical odyssey or a metaphorical journey like motherhood, Selune acts as a gentle guide and sponsor to the lost and seeking. The light of the moon is a revelation, and strips away deception.</p>
<p>Selune's scions are wayfarers of the mind and soul. Whether a pirate on the open seas or a ranger walking the hidden roads, each has something they are looking for, out there in the darkness.</p>
<ol>
    <li>You were a lycanthrope, but Selune cured you</li>
    <li>You are descended from a line of dreamers and mystics</li>
    <li>You can navigate the open sea by the moon and stars</li>
    <li>You grew up in a society that worships the moon</li>
    <li>You are on a quest for love or wisdom</li>
    <li>You were an extraplanar creature from an evil plane of existence. Selune saw the good in your heart and transformed your body to reflect it</li>
</ol>",
            'devotion' => "<p>Following Selune means dedicating yourself to the subtle movements of the moon and stars. As a follower of Selune, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Heroism</dt> <dd>I long for the starlit fate of a true hero</dd>
    <dt>Exploration</dt> <dd>I'm stricken with the need to see new places</dd>
    <dt>Mystery</dt> <dd>The longer I walk this world, the more I find that I rather like not knowing anything</dd>
    <dt>Self Knowledge</dt> <dd>Every day is one closer to working out who I really am</dd>
    <dt>Courage</dt> <dd>A journey always begins with a single step in the right direction</dd>
</dl>",
            'earn_piety' => [
                'You help another on their journey or quest',
                'You successfully navigate from one place to another',
                'You spend time in contemplation of the night sky',
            ],
            'lose_piety' => [
                'You become lost',
                'You forget and become distracted from your life quest',
            ],
            'piety3' => '<h4>Favored God: Selune</h4>
<p>You gain Inspiration when you aid another in something meaningful to them</p>',
            'piety10' => "<h4>Moonlight</h4>
<p>You can cast Moonbeam with this trait, requiring no components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
            'piety25' => '<h4>Who You Are</h4>
<p>Your shape cannot be changed by magic against your will</p>',
            'piety50' => '<h4>Chosen of Selune</h4>
<p>You can spend an Inspiration and force all Shapechangers or beings disguised by magic within 30 feet of you back to their true forms</p>',
        ]);
    }
}
