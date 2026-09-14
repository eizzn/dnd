<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsLathanderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $god              = new God;
        $god->name        = 'Lathander';
        $god->level       = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => "Morninglord, Commander of Creativity, Inspiration's Dawn, The Rose-and-Gold God",
            'level'          => 'Greater',
            'portfolio'      => 'Athletics, Birth, Creativity, Dawn, Renewal, Self-Perfection, Spring, Vitality, Youth',
            'regions'        => 'Chessenta, Cormyr, Dalelands (Dagger Falls, Daggerdale, Daggerford), Sembia, Western Heartlands, Eveningstar, Waterdeep, Silverymoon, Berehost',
            'alignment'      => 'NG',
            'symbol'         => 'Sunrise made of pink, red and yellow gems',
            'favored_weapon' => 'Dawnspeaker (light or heavy mace)',
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Fighter' => 20,
            'Cleric'  => 20,
            'Wizard'  => 10,
        ]);

        $class                = new Klass;
        $class->name          = 'Dawnbringers';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons plus one choice';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->description   = '<p>Priests of Lathander</p>';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 2,
        ], ['WIS', 'CHA'], [
            'Divine', 'Good',
        ]);

        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            $class->name => ['is_clergy' => true],
            'Paladin'    => ['is_clergy' => true],
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Medicine', 'Religion', 'Society']
        );
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 3,
            'meta'  => '<dl>
    <dt>Actions</dt> <dd>Action</dd>
    <dt>Spell</dt> <dd>Ray of Light</dd>
</dl>',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead');
        $helper->addDomainToClass($class, ['Good', 'Protection', 'Strength']);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Conviction', 'Dancing Lights', 'Detect Magic', 'Flare', 'Light', 'Stabilize', 'True Strike',
                'Virtue', ],
            1 => ['Bless', 'Cure Wounds', 'Detect Evil', 'Exorcism', 'Jump', 'Longstrider', 'Luminous Gaze', 'Nimbus of Light',
                'Ray of Light', 'Rosemantle', ],
            2 => ["Bear's Endurance", "Bull's Strength", 'Consecrate', 'Divine Insight', 'Glorious Raiment', 'Resist Elements',
                'Sun Bolt', 'Undead Bane Weapon', ],
            3 => ['Brilliant Emanation', 'Circle of Protection From Evil', 'Daylight', 'Diamond Spray', 'Faithful Healing',
                'Prayer', 'Radiance', 'Sheltered Vitality', 'Sunrise', 'Vitality Shield', ],
            4 => ['Aura of Life', 'Haste', 'Life Ward', 'Sacred Item', 'Shadowblast', 'Sunmantle'],
            5 => ['Atonement', 'Dawn', 'Perfection', 'Stalwart Covenant', 'Sun Scepter', 'Wall of Light'],
            6 => ['False Dawn', 'Heal', 'Purifying Light', 'Sunbeam', 'Undead to Death', "Undeath's Eternal Foe"],
            7 => ['Channel Celestial', 'Divine Word', 'Radiant Assault', 'Regenerate'],
            8 => ['Divine Aura', 'Sunburst'],
            9 => ['Blinding Glory'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $feat              = new Feat;
        $feat->name        = 'Knights of the Aster';
        $feat->requirement = 'You must be LG and Lathander must your Patron Deity';
        $feat->description = '<p>You are a Paladin of Lathander.</p>
<ul>
    <li>Increase your STR or CON score by 1, to a maximum of 20</li>
    <li>You gain proficiency to Heavy Armor</li>
    <li>All spells you cast with the Light Type has its Duration Doubled</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine Warrior']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Clean Self', 'Flare', 'Light', 'Radiant Mark', 'Stabilize'],
            1 => ['Angelic Halo', 'Aura of Courage', 'Exorcism', 'Luminous Gaze', 'Undead Bane Weapon'],
            2 => ['Aura of Hope', "Bear's Endurance", "Bull's Strength", 'Diamond Spray', 'Divine Insight', 'Divine Presence',
                'See Invisibility', ],
            3 => ['Blinding Smite', 'Brilliant Emanation', 'Circle of Protection From Evil', 'Daylight', 'Sheltered Vitality'],
            4 => ['Aura of Life', 'Aura of Purity', 'Perfection', 'Sacred Item'],
            5 => ['Banishing Smite', 'Celestial Brand', 'Dawn', 'Holy Weapon', "Undeath's Eternal Foe"],
        ]);
        $helper->addFeatToGodPantheon($god, 'Faeruneon', $feat);
        $lathander = $god;

        /**********************************************************************/

        $god                 = new God;
        $god->name           = 'Apollo';
        $god->level          = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'The Silver Bow of Dawn, The Prophet of Renewal, The Unstruck Chord, The Scourge of Rot',
            'level'          => 'Demi',
            'portfolio'      => 'Light from the Sun, Archery, Healing, Prophecy, Undead Hunting, the Purging of Corruption',
            'alignment'      => 'NG',
            'regions'        => 'Tethyr, Northern Calimshan',
            'symbol'         => 'A golden lyre whose frame transitions into a functional recurve bow, backlit by a brilliant rising sun',
            'favored_weapon' => 'Argyrotoxos (longbow)',
            'master_id'      => $lathander->id,
            'description'    => "<p>Apollo is a lesser deity in the Faerunian pantheon who serves as the active, aggressive vanguard to Lathander. While the Morninglord represents the abstract concept of hope and new beginnings, Apollo wields the sharp, pragmatic aspects of the sun: piercing archery, solar radiation, prophetic insight, and intense heat. He is the celestial huntsman who clears the dark so Lathander's dawn can break cleanly over the world</p>
<p>Apollo' clergy are all Druids and Rangers. They are charged with destroying any and all undead. The circle of Apollo is located in the Southern Forest of Tethyr (Wealdath). They have cordial relations with the resident elves (and even some good aligned drow) in the area. They are more friendly with the Druids of Silvanus, but due to their differing focuses, they rarely mingle.</p>
<p>Apollo always chooses one druid from among his clergy as an oracle (takes the Oracle Feat). While this oracle holds a special position in the circle, they are not usually the leader.</p>
<p>While the circle is located in Tethyr, many Rangers of the circle travel to see the other lands where Lathander is worshipped.</p>",
        ]);
        $helper->addClassesToGod($god, 'Faeruneon', [
            'Ranger' => 10,
            'Druid'  => 15,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Druid'  => ['is_clergy' => true],
            'Ranger' => ['is_clergy' => true],
            'Scout',
        ]);
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Ranger of Apollo')->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Glimmer of Apollo')->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Spark of Apollo')->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Light of Apollo')->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Glory of Apollo')->first());
    }
}
