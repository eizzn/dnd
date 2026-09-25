<?php

namespace Database\Seeders\Gods;

use App\Enums\Pantheon;
use App\Models\Feat;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsHanaliSeeder extends Seeder
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
        $god->name  = 'Hanali Celanil';
        $god->level = 'Intermediate';
        $god->save();

        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'           => $god->name,
            'title'          => 'The Heart of Gold, Winsome Rose, Lady Goldheart',
            'level'          => 'Intermediate',
            'portfolio'      => 'Love, Romance, Beauty, Enchantments, Magic Item Artistry, Fine Art, Artists',
            'alignment'      => 'CG',
            'symbol'         => 'Golden heart',
            'favored_weapon' => 'Shining Heart (Dagger)',
            'master_id'      => God::where('name', 'Corellon Larethian')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Sune',
            'title'          => 'Firehair, Lady Firehair, The Lady of Love, The Princess of Passion',
            'level'          => 'Intermediate',
            'portfolio'      => 'Beauty, Love, Passion',
            'regions'        => 'Amn, Dragon Coast, Sembia',
            'alignment'      => 'CG',
            'symbol'         => 'The face of a fire-haired maiden',
            'favored_weapon' => 'A silken sash (Whip)',
            'master_id'      => God::where('name', 'Sehanine Moonbow')->first()->id,
        ]);

        $class                = new Klass;
        $class->name          = 'Heartwarder';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons and Whips';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->description   = '<p>Priest of Sune, Hanali Celanil, or Sharindlar</p>';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 3,
        ], ['WIS', 'CHA'], [
            'Divine', 'Good',
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Sorcerer'     => 20,
            'Bard'         => 10,
            'Favored Soul' => 10,
        ]);
        $helper->addClassesToGod($god, 'Seldarine', [
            'Cleric' => 15,
            'Wizard' => 15,
            'Bard'   => 10,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name    => ['is_clergy' => true],
            'Paladin'       => ['is_clergy' => true],
            'Divine Oracle' => ['is_clergy' => true],
        ]);
        $helper->addWorshipClassesToGod($god, 'Seldarine', [
            $class->name    => ['is_clergy' => true],
            'Divine Oracle' => ['is_clergy' => true],
            'Sorcerer',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Diplomacy', 'Medicine', 'Performance', 'Religion']);
        $class->features()->save(app()->features['feat'], [
            'level' => 3,
            'meta'  => 'Diviner',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead');
        $helper->addDomainToClass($class, ['Charm', 'Protection', 'Prophecy']);
        $helper->addSpellsToClass($class, [
            0 => ['Boon', 'Clean Self', 'Conviction', 'Detect Magic', 'Know Direction', 'Light', 'Love Bite', 'Radiant Mark',
                'Stabilize', ],
            1 => ['Alleviate Addiction', 'Bless', 'Charm', 'Cure Wounds', 'Ease Pain', 'Exorcism', 'Faith Healing', 'Lantern Light',
                'Magic Weapon', 'Remove Disease', 'Sanctuary', ],
            2 => ['Abeyance', 'Calm Emotions', 'Consecrate', 'Create Food and Water', 'Darkvision', "Eagle's Splendor",
                'Endure Elements', 'Faerie Fire', 'Faithful Healing', 'Glorious Raiment', "Owl's Wisdom", 'Remove Fear',
                'Resist Elements', 'See Invisibility', 'Status', "Sune's Caress", 'Undead Bane Weapon', ],
            3 => ['Brilliant Emanation', 'Diamond Spray', 'Dispel Magic', 'Distilled Joy', 'Dream Message', "Heart's Ease",
                'Helping Hand', 'Neutralize Poison', 'Prayer', 'Sanctified Ground', 'Searing Light', 'Stars of Arvandor',
                'Vitality Shield', 'Zone of Truth', ],
            4 => ['Blinding Beauty', 'Celestial Brilliance', 'Dimensional Anchor', 'Life Ward', 'Read Omens', 'Remove Curse',
                'Spell Immunity', 'Sunmantle', 'Suggestion', ],
            5 => ['Atonement', 'Banishment', 'Healing Circle', 'Sending', 'Sustain', 'Tomb of Light', 'Wall of Light'],
            6 => ['Heal', 'Raise Dead', 'True Seeing'],
            7 => ['Dimensional Lock', 'Plane Shift', 'Radiant Assault', 'Renewal Pact'],
            8 => ['Blinding Glory', 'Crown of Glory', 'Discern Location', 'Spread of Contentment', 'Unearthly Beauty'],
            9 => ['Foresight'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $feat              = new Feat;
        $feat->name        = 'Sisters and Brothers of the Ruby Rose';
        $feat->requirement = 'Must be CG and Sune must be your Patron Deity';
        $feat->description = '<p>You are a Paladin of Sune.</p>
<ul>
    <li>Increase your CHA score by 1, to a maximum of 20.</li>
    <li>You gain proficiency with Heavy Armor</li>
    <li>You may take the Beautiful Defense Feat</li>
    <li>
        <p>You are charged with the following</p>
        <ul>
            <li>Guard Sunite temples and holy sites</li>
            <li>Defend beauty and destroy those evil beings of Faerun that were exceptionally repulsive in their deeds</li>
            <li>Put all undead to their final rest</li>
            <li>Banish all repulsive fiends back to the outer planes</li>
        </ul>
    </li>
</ul>
<p>Initiation into the order is done by standing vigil in a temple of Sune for an entire night. If the goddess shows her favor by granting a vision or some other boon, the candidate is accepted into the order.</p>';
        $helper->addTypesToFeat($feat, ['Divine Warrior', 'Ability Boost']);
        $feat->attributes()->save(app()->attributes['CHA'], ['dc' => 13]);
        $helper->addSpellsToFeat($feat, [
            0 => ['Clean Self', 'Conviction', 'Light', 'Love Bite', 'Radiant Mark', 'Stabilize'],
            1 => ['Aura of Courage', 'Aura of the Eagle', 'Charm', 'Detect Evil', 'Divine Favor',
                "Eagle's Splendor" => 'Self only. Heighten +1 to target others', 'Exorcism', 'Negate Aroma', 'Remove Disease',
                'Protection From Evil', 'Sanctuary', 'Shield of Faith', ],
            2 => ['Aura of Glory', 'Aura of the Bear', 'Aura of the Bull', 'Aura of the Cat', 'Aura of the Fox', 'Aura of the Owl',
                'Aura of Hope', 'Faithful Healing', 'Glorious Raiment', 'Helping Hand', 'Restoration', 'Restore Senses',
                "Sune's Caress", 'Undead Bane Weapon', ],
            3 => ['Aura of Vitality', 'Brilliant Emanation', 'Circle of Protection From Evil', 'Create Food and Water',
                'Daylight', "Heart's Ease", 'Remove Curse', 'Vitality Shield', ],
            4 => ['Aura of Life', 'Aura of Purity', 'Aura of the Sun', 'Celestial Brilliance'],
            5 => ['Blinding Beauty', 'Wall of Light'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Faeruneon->value, $feat);
        $helper->addFeatsToClass(Klass::where('name', 'Paladin')->first(), [
            'Sisters and Brothers of the Ruby Rose' => 2,
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Sune's favor is given to those who understand that beauty shines from the inside out. Sune is more likely to favour the kind of heart than she is to favour those born with flawless skin or silken hair.</p>
<p>Sune's scions can be found across the world, as her popular faith is promulgated in most large cities. They might be educators, socialites, social workers, courtesans or anything they set their mind to, though the scions of Sune rarely work in isolation.</p>
<ol>
    <li>Your face could launch a thousand ships. Maybe more on a good hair day</li>
    <li>The love and faith you put into everything you do shines like a beacon to faeries and gods alike</li>
    <li>You were kind to an ugly stranger. This stranger was the goddess in disguise, who blessed you</li>
    <li>You built a breathtaking public work of art for all to see</li>
    <li>You've spent your life in the service of making other people feel better</li>
    <li>You are the pinnacle of fashion and style in the place you were raised</li>
</ol>",
            'devotion' => '<p>Following Sune means dedicating yourself to love and passion. As a follower of Sune, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Charity</dt> <dd>Everyone deserves to experience beauty</dd>
    <dt>Love</dt> <dd>I sincerely believe that true love exists for everyone</dd>
    <dt>Passion</dt> <dd>Follow your instincts. They will rarely lead you astray</dd>
    <dt>Self Knowledge</dt> <dd>Learning to love ourselves is the first step towards any understanding of other people</dd>
    <dt>Pride</dt> <dd>My appearance is everything to me</dd>
</dl>',
            'earn_piety' => [
                'Helping others to find self-love and confidence',
                'Creating a work of beauty or art, however ephemeral',
                'Taking a moment to enjoy a sensual experience for its own sake',
            ],
            'lose_piety' => [
                'Destroying things of beauty',
                'Subverting the confidence and self-worth of another',
            ],
            'piety3' => '<h4>Favored God: Sune</h4>
<p>You gain Inspiration when you give someone confidence or build on their self-esteem</p>',
            'piety10' => '<h4>Florals in Spring</h4>
<p>You never suffer any negative social penalties form bad dress, smell, or appearance</p>',
            'piety25' => '<h4>Come Hither</h4>
<p>You can cast Suggestion with this trait, requiring no components other than making eye contact with the target. Once you cast the spell in this way, you can\'t do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell. You may only issue the suggestion "come to me".</p>',
            'piety50' => '<h4>Chosen of Sune</h4>
<p>If you would be Charmed for any reason, you can spend an Inspiration to rebound the Charm, the creature from whence the effect came is Charmed by you instead</p>',
        ]);
    }
}
