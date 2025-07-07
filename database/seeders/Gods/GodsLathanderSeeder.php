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
     *
     * @return void
     */
    public function run()
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $god              = new God;
        $god->name        = 'Lathander';
        $god->level       = 'Greater';
        $god->description = '';
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
            $class->name, 'Paladin', 'Monk',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Medicine', 'Religion', 'Society']
        );
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 3, 6, 9, 12, 15, 18, 20],
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead');
        $helper->addDomainToClass($class, ['Good', 'Protection', 'Strength']);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Conviction', 'Dancing Lights', 'Detect Magic', 'Flare', 'Light', 'Stabilize', 'True Strike'],
            1 => ['Bless', 'Cure Wounds', 'Detect Evil', 'Exorcism', 'Jump', 'Longstrider', 'Luminous Gaze', 'Nimbus of Light',
                'Ray of Light', 'Rosemantle', ],
            2 => ["Bear's Endurance", "Bull's Strength", 'Consecrate', 'Divine Insight', 'Glorious Raiment', 'Resist Elements',
                'Sun Bolt', 'Undead Bane Weapon', ],
            3 => ['Brilliant Emanation', 'Circle of Protection From Evil', 'Daylight', 'Diamond Spray', 'Faithful Healing',
                'Prayer', 'Radiance', 'Sheltered Vitality', 'Sunrise', 'Vitality Shield', ],
            4 => ['Aura of Life', 'Life Ward', 'Sacred Item', 'Shadowblast', 'Sunmantle'],
            5 => ['Atonement', 'Dawn', 'Perfection', 'Stalwart Covenant', 'Sun Scepter', 'Wall of Light'],
            6 => ['Heal', 'Purifying Light', 'Sunbeam', 'Undead to Death'],
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
            3 => ['Bind Undead', 'Blinding Smite', 'Brilliant Emanation', 'Circle of Protection From Evil', 'Daylight',
                'Sheltered Vitality', ],
            4 => ['Aura of Life', 'Aura of Purity', 'Perfection', 'Sacred Item'],
            5 => ['Banishing Smite', 'Celestial Brand', 'Dawn', 'Holy Weapon'],
        ]);
    }
}
