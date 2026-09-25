<?php

namespace Database\Seeders;

use App\Models\Feat;
use App\Models\Formula;
use App\Models\Monster;
use App\Models\Race;
use App\Models\Spell;
use App\Models\SubRace;
use App\Models\Talent;
use Illuminate\Database\Seeder;

class AfterSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // spells
        Spell::where('name', 'Starmantle')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Pixie')->firstOrFail(), ['meta' => "A pinch of dust from a pixie's wing (20 gp)"]
        );

        Spell::where('name', 'Arcane Evasion')->firstOrFail()->spells()->save(
            Spell::where('name', 'Teleport')->firstOrFail()
        );

        // formula
        Formula::where('name', 'Giant Spider Venom')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Spider, Giant')->firstOrFail(), ['meta' => 'Must be harvested from a dead or incapacitated specimen']
        );
        Formula::where('name', 'Phase Spider Venom')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Phase Spider')->firstOrFail(), ['meta' => 'Must be harvested from a living specimen']
        );
        Formula::where('name', 'Lichbane')->firstOrFail()->formulas()->save(
            Formula::where('name', 'Holy Water')->firstOrFail()
        );
        Formula::where('name', 'Gravedust')->firstOrFail()->formulas()->save(
            Formula::where('name', 'Holy Water')->firstOrFail()
        );
        Formula::where('name', 'Basilisk Eye')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Basilisk')->firstOrFail(), ['meta' => 'Eye of the Basilisk. Must be preserved or less than 3 days old.']
        );
        Formula::where('name', 'Carrion Crawler Mucus Poison')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Carrion Crawler')->firstOrFail(), ['meta' => 'Must be harvested from a dead or incapacitated specimen']
        );
        Formula::where('name', 'Blue Frog Paste')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Frog')->firstOrFail(), ['meta' => 'Bright blue frogs of the Serpent Hills']
        );
        Formula::where('name', 'Drow Sleep Poison')->firstOrFail()->formulas()->save(
            Formula::where('name', 'Giant Spider Venom')->firstOrFail(), ['meta' => 'Fermented for 3 months']
        );
        Formula::where('name', 'Ettercap Poison')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Ettercap')->firstOrFail()
        );
        Formula::where('name', 'Ghoul Saliva')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Ghoul')->firstOrFail()
        );
        Formula::where('name', 'Giant Centipede Venom')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Centipede, Giant')->firstOrFail()
        );
        Formula::where('name', 'Giant Toad Poison')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Toad, Giant')->firstOrFail()
        );
        Formula::where('name', 'Green Dragon Bile')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Green Dragon, Young')->firstOrFail()
        );
        Formula::where('name', 'Jalwun Jiwin')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Poisonous Toad')->firstOrFail(), ['meta' => 'Underground Toad']
        );
        Formula::where('name', 'Royal Scorpion Tail')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Scorpion')->firstOrFail(), ['meta' => 'Royal Tail Scorpion']
        );
        Formula::where('name', 'Venoms Blood')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Scorpion, Giant')->firstOrFail()
        );
        Formula::where('name', 'Venoms Blood')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Toad, Giant')->firstOrFail()
        );
        Formula::where('name', 'Venoms Blood')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Poisonous Snake, Giant')->firstOrFail()
        );
        Formula::where('name', 'Cockatrice Feather Preservation')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Cockatrice')->firstOrFail(), ['meta' => 'The tail feathers plucked from a dead or incapacitated Cockatrice that are less than 2 days since plucking']
        );
        Formula::where('name', 'Phantom Ink')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Pixie')->firstOrFail(), ['meta' => 'At least 3 grains of dust from the Pixie']
        );
        Formula::where('name', 'Life Stealer')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Vampire')->firstOrFail(), ['meta' => 'At least 10 drops of fresh blood from an un-destroyed vampire']
        );
        Formula::where('name', 'Potion of Acid Resistance')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Carrion Crawler')->firstOrFail(), ['meta' => '1/4 oz mucus']
        );
        Formula::where('name', 'Potion of Climbing')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Wolf Spider, Giant')->firstOrFail(), ['meta' => '2 hairs']
        );
        Formula::where('name', 'Potion of Cold Resistance')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Winter Wolf')->firstOrFail(), ['meta' => '10 drops of blood']
        );
        Formula::where('name', 'Potion of Electricity Resistance')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Behir')->firstOrFail(), ['meta' => '1 oz of liver']
        );
        Formula::where('name', 'Potion of Healing, Superior')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Troll')->firstOrFail(), ['meta' => 'At least 1 gallon of blood, then condensed']
        );
        Formula::where('name', 'Potion of Intelligence')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Intellect Devourer')->firstOrFail(), ['meta' => '1/2 oz Brain matter (or from any creature with Psionic abilities)']
        );
        Formula::where('name', 'Potion of Intelligence, Greater')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Intellect Devourer')->firstOrFail(), ['meta' => '1/2 oz Brain matter (or from any creature with Psionic abilities)']
        );
        Formula::where('name', 'Potion of Invisibility')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Spider, Giant')->firstOrFail(), ['meta' => '4 Fermented eyes']
        );
        Formula::where('name', 'Potion of Jumping')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Frog')->firstOrFail(), ['meta' => '3 drops of blood']
        );
        Formula::where('name', 'Potion of Quickness')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Cat')->firstOrFail(), ['meta' => '3 whiskers']
        );
        Formula::where('name', 'Potion of Quickness, Greater')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Cat')->firstOrFail(), ['meta' => '3 whiskers']
        );
        Formula::where('name', 'Potion of Strength, Greater')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Ogre')->firstOrFail(), ['meta' => '3 drops of blood']
        );
        Formula::where('name', 'Potion of Strength, Perfect')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Hill Giant')->firstOrFail(), ['meta' => '3 drops of blood']
        );
        Formula::where('name', 'Potion of Wisdom')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Owl')->firstOrFail(), ['meta' => '1/2 oz tongue']
        );
        Formula::where('name', 'Potion of Wisdom, Greater')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Owl')->firstOrFail(), ['meta' => '1/2 oz tongue']
        );
        Formula::where('name', 'Potion of Beauty')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Eagle')->firstOrFail(), ['meta' => '1 feather, crushed']
        );
        Formula::where('name', 'Potion of Beauty, Greater')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Eagle')->firstOrFail(), ['meta' => '1 feather, crushed']
        );
        Formula::where('name', 'Dwarfbane')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Slime Mold')->firstOrFail(), ['meta' => 'Poison must be extracted in a very special way']
        );
        Formula::where('name', 'Potion of Gaseous Form')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Air Mephit')->firstOrFail(), ['meta' => 'Clipping from nail or horn']
        );
        Formula::where('name', 'Ghoul Claw')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Ghoul')->firstOrFail(), ['meta' => 'Undamaged arm. Must cast Gentle Repose on it and attached before the Gentle Repose Duration ends']
        );
        Formula::where('name', 'Graft Muscle')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Ogre')->firstOrFail(), ['meta' => '2 living specimens, as the muscles must be extracted while the ogre is still alive.']
        );
        $formula = Formula::where('name', 'Potion of Longevity')->firstOrFail();
        $formula->monsters()->save(
            Monster::where('name', 'Imp')->firstOrFail(), ['meta' => 'Heart of the Imp']
        );
        $formula->monsters()->save(
            Monster::where('name', 'Scorpion, Giant')->firstOrFail(), ['meta' => 'Tail stinger']
        );
        $formula = Formula::where('name', 'Potion of Speed')->firstOrFail();
        $formula->monsters()->save(
            Monster::where('name', 'Horse, Riding')->firstOrFail(), ['meta' => '3 drops of blood']
        );
        $formula->monsters()->save(
            Monster::where('name', 'Quickling')->firstOrFail(), ['meta' => '5 drops of blood']
        );
        $formula->monsters()->save(
            Monster::where('name', 'Medusa')->firstOrFail(), ['meta' => 'Blood used to fill the rune']
        );
        $formula = Formula::where('name', 'Potion of Healing, Greater')->firstOrFail();
        $formula->monsters()->save(
            Monster::where('name', 'Troll')->firstOrFail(), ['meta' => '4 ounces of flesh and fresh blood']
        );
        $formula->monsters()->save(
            Monster::where('name', 'Ogre')->firstOrFail(), ['meta' => 'At least 3 drops of blood']
        );
        $formula = Formula::where('name', 'Blueshine')->firstOrFail();
        $formula->monsters()->save(
            Monster::where('name', 'Cockatrice')->firstOrFail(), ['meta' => 'single feather in brine solution soaked for at least 3 months']
        );
        $formula->formulas()->save(
            Formula::where('name', 'Sweet Water')->firstOrFail(), ['meta' => '1 vial']
        );
        Formula::where('name', 'Everbright')->firstOrFail()->formulas()->save(
            Formula::where('name', 'Potion of Acid Resistance')->firstOrFail()
        );
        Formula::where('name', 'Vampiric')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Vampire')->firstOrFail(), ['meta' => '10 drops of fresh vampire blood']
        );
        Formula::where('name', 'Cloak of Displacement')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Displacer Beast')->firstOrFail(), ['meta' => 'The hide and tentacles are used to form most of the cloak']
        );
        Formula::where('name', 'Giant Wasp Venom')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Wasp, Giant')->firstOrFail(), ['meta' => 'The venom from the stinger is enough to make 2 doses']
        );
        Formula::where('name', 'Wand of Viscus Globs')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Spider, Giant')->firstOrFail(), ['meta' => 'Undamaged Silk Gland']
        );
        Formula::where('name', 'Wand of Web')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Spider, Giant')->firstOrFail(), ['meta' => 'Undamaged Silk Gland']
        );
        Formula::where('name', 'Drow Mechanical')->firstOrFail()->monsters()->save(
            Monster::where('name', 'Cave Glow Worm')->firstOrFail(), ['meta' => 'Crushed and oily innards boiled until it is wine/vinegar smelling greasy lubricant']
        );
        $formula = Formula::where('name', 'Potion of Lichdom')->firstOrFail();
        $formula->formulas()->save(
            Formula::where('name', 'Arsenic')->firstOrFail()
        );
        $formula->formulas()->save(
            Formula::where('name', 'Black Lotus Extract')->firstOrFail()
        );
        $formula->formulas()->save(
            Formula::where('name', 'Agony')->firstOrFail()
        );
        $formula->formulas()->save(
            Formula::where('name', 'Panaeolo')->firstOrFail()
        );
        $formula->formulas()->save(
            Formula::where('name', 'Phase Spider Venom')->firstOrFail(), ['meta' => '8 drops']
        );
        $formula = Formula::where('name', 'Lich Phylactery')->firstOrFail();
        $formula->formulas()->save(
            Formula::where('name', 'Blueshine')->firstOrFail()
        );
        $formula->formulas()->save(
            Formula::where('name', 'Everbright')->firstOrFail()
        );
        $formula->formulas()->save(
            Formula::where('name', 'Giant Wasp Venom')->firstOrFail(), ['meta' => '8 drops']
        );
        $formula->monsters()->save(
            Monster::where('name', 'Doppelganger')->firstOrFail(), ['meta' => '2 drops of cranial fluid']
        );

        // feats
        Feat::where('name', 'Sentinel')->firstOrFail()->talents()->save(
            Talent::where('name', 'Improved Reaction')->firstOrFail()
        );
        Feat::where('name', 'Opportunity Power')->firstOrFail()->talents(
            Talent::where('name', 'Improved Reaction')->firstOrFail()
        );
        Feat::where('name', 'Quicken Power')->firstOrFail()->talents(
            Talent::where('name', 'Improved Reaction')->firstOrFail()
        );
        Feat::where('name', 'Deflect Ranged Attack')->firstOrFail()->talents(
            Talent::where('name', 'Improved Reaction')->firstOrFail()
        );

        // racial traits — races are seeded before features, so the links live
        // here. `meta` is JSON holding the race's own numbers for a shared
        // feature (see FeaturesSeeder's "Racial traits" section); null means
        // the feature's text says it all.
        $dwarvenWeapons = ['weapons' => ['Battleaxe', 'Handaxe', 'Light Hammer', 'Warhammer']];
        $elvenWeapons   = ['weapons' => ['Longsword', 'Shortsword', 'Shortbow', 'Longbow']];
        $darkvision     = ['range' => 60];
        $raceFeatures   = [
            'Human'       => [
                'ability_score_increase' => ['choose' => ['count' => 1, 'value' => 2], 'others' => 1],
                'racial_feat'            => ['feat_choice' => 'General'],
                'skill_training'         => ['choose' => 1, 'bonus_skill_points' => 2],
            ],
            'Half-Elf'    => [
                'ability_score_increase' => ['cha' => 2, 'choose' => ['count' => 2, 'value' => 1]],
                'darkvision'             => $darkvision,
                'fey_ancestry'           => ['charm_save' => 2],
                'racial_feat'            => ['feats' => ['Skilled']],
            ],
            'Half-Orc'    => [
                'ability_score_increase' => ['cha' => 2, 'choose' => ['count' => 2, 'value' => 1]],
                'darkvision'             => $darkvision,
                'menacing'               => null,
                'racial_feat'            => ['feats' => ['Die Hard']],
            ],
            'Tiefling'    => [
                'ability_score_increase' => ['cha' => 2, 'int' => 1],
                'darkvision'             => $darkvision,
                'hellish_resistance'     => null,
                'racial_feat'            => ['feats' => ['Arcane Background'], 'cantrip' => 'Thaumaturgy'],
            ],
            'Aasimar'     => [
                'ability_score_increase' => ['cha' => 2, 'int' => 1],
                'darkvision'             => $darkvision,
                'racial_feat'            => ['feats' => ['Arcane Background'], 'cantrip' => 'Light'],
                'divine_resistance'      => null,
            ],
            'Elf'         => [
                'darkvision'   => $darkvision,
                'fey_ancestry' => ['charm_save' => 4],
                'keen_senses'  => null,
                'trance'       => null,
            ],
            'Dwarf'       => [
                'ability_score_increase' => ['con' => 2],
                'dwarven_speed'          => null,
                'darkvision'             => $darkvision,
                'poison_resilience'      => null,
            ],
            'Halfling'    => [
                'ability_score_increase' => ['dex' => 2],
                'brave'                  => null,
                'racial_feat'            => ['feats' => ['Lucky']],
                'nimbleness'             => null,
            ],
            'Goblin'      => [
                'ability_score_increase' => ['dex' => 2, 'con' => 1],
                'darkvision'             => $darkvision,
                'fury_of_the_small'      => null,
                'racial_feat'            => ['feats' => ['Nimble Escape']],
            ],
            'Hobgoblin'   => [
                'ability_score_increase' => ['con' => 2, 'int' => 1],
                'darkvision'             => $darkvision,
                'martial_training'       => null,
            ],
            'Bugbear'     => [
                'ability_score_increase' => ['str' => 2, 'wis' => 1],
                'darkvision'             => $darkvision,
                'long_limbed'            => null,
                'powerful_build'         => null,
                'sneak_attack'           => null,
                'sneaky'                 => null,
            ],
            'Kobold'      => [
                'ability_score_increase' => ['dex' => 2, 'str' => 2],
                'darkvision'             => $darkvision,
                'racial_feat'            => ['feats' => ['Nimble Escape', 'Attack of Opportunity']],
                'sunlight_sensitivity'   => null,
            ],
            'Orc'         => [
                'ability_score_increase' => ['str' => 2],
                'darkvision'             => $darkvision,
                'aggressive'             => null,
            ],
            'Lizardfolk'  => [
                'ability_score_increase' => ['con' => 2, 'wis' => 1],
                'bite_attack'            => null,
                'hold_breath'            => ['duration' => '15 minutes'],
                'natural_armor'          => ['ac_base' => 13],
                'swim_speed'             => null,
            ],
            'Gith'        => [
                'ability_score_increase' => ['wis' => 2],
                'racial_feat'            => ['feats' => ['Wild Talent']],
            ],
            'Yuan-ti'     => [
                'ability_score_increase' => ['cha' => 2],
                'poison_immunity'        => null,
                'psionics'               => ['power_level' => 0, 'power_class' => 'Psychic Warrior'],
            ],
            'Spirit Folk' => [
                'ability_score_increase' => ['cha' => 2, 'choose' => ['count' => 1, 'value' => 1, 'from' => ['wis', 'dex']]],
                'darkvision'             => $darkvision,
            ],
            'Hagspawn'    => [
                'ability_score_increase' => ['str' => 2, 'con' => 2, 'cha' => -2],
                'darkvision'             => $darkvision,
                'fey_heritage'           => null,
                'initial_hit_die'        => ['hit_die' => '1D8'],
                'natural_armor'          => ['damage_reduction' => 1],
            ],
            'Centaur'     => [
                'ability_score_increase' => ['str' => 2, 'wis' => 1],
                'charge'                 => null,
                'equine_build'           => null,
                'creature_type'          => ['type' => 'Fey'],
                'hooves'                 => null,
                'initial_hit_die'        => ['hit_die' => '2D10'],
                'languages'              => ['languages' => ['Sylvan']],
                'level_adjustment'       => ['value' => 2],
                'skill_training'         => ['skills' => ['Survival']],
            ],
            'Satyr'       => [
                'ability_score_increase' => ['cha' => 2, 'dex' => 1],
                'creature_type'          => ['type' => 'Fey'],
                'languages'              => ['languages' => ['Sylvan']],
                'leap'                   => null,
                'satyr_magic_resistance' => null,
                'ram'                    => null,
            ],
            'Taer'        => [
                'ability_score_increase' => ['str' => 2, 'con' => 2],
                'arctic_heart'           => null,
                'creature_type'          => ['type' => 'Giant'],
                'hurler'                 => null,
                'languages'              => ['languages' => ['Giant']],
                'powerful_build'         => null,
            ],
            'Ratatosk'    => [
                'ability_score_increase' => ['dex' => 2, 'str' => -2],
                'creature_type'          => ['type' => 'Celestial'],
                'darkvision'             => $darkvision,
                'languages'              => ['languages' => ['Celestial']],
                'telepathy'              => ['range' => 120],
                'message_spell'          => null,
            ],
            'Gnoll'       => [
                'darkvision' => $darkvision,
            ],
        ];
        foreach ($raceFeatures as $raceName => $features) {
            $race = Race::where('name', $raceName)->firstOrFail();
            foreach ($features as $key => $meta) {
                $race->features()->save(app()->features[$key], ['meta' => $meta === null ? null : json_encode($meta)]);
            }
        }

        // sub-race traits add to (or, for the same feature, refine) their
        // race's — e.g. Duergar's Darkvision range 120 over Dwarf's 60.
        $subRaceFeatures = [
            'Elf'         => [
                'High Elf (Sun)' => ['ability_score_increase' => ['int' => 1], 'high_elf_cantrip' => null, 'weapon_training' => $elvenWeapons],
                'Moon Elf'       => ['ability_score_increase' => ['dex' => 1], 'bathed_in_moonlight' => null, 'weapon_training' => $elvenWeapons],
                'Wood Elf'       => ['ability_score_increase' => ['wis' => 1], 'weapon_training' => $elvenWeapons, 'fleet_of_foot' => null, 'mask_of_the_wild' => null],
                'Star Elf'       => ['ability_score_increase' => ['cha' => 1], 'extraplanar' => null, 'otherworldly_touch' => null],
                'Drow'           => [
                    'ability_score_increase' => ['dex' => 1],
                    'darkvision'             => ['range' => 120],
                    'weapon_training'        => ['weapons' => ['Hand Crossbow']],
                    'drow_magic'             => null,
                    'sunlight_sensitivity'   => null,
                ],
            ],
            'Dwarf'       => [
                'Gold Dwarf'           => ['ability_score_increase' => ['wis' => 1], 'weapon_training' => $dwarvenWeapons, 'stonecunning' => null],
                'Shield Dwarf'         => ['ability_score_increase' => ['str' => 1], 'weapon_training' => $dwarvenWeapons, 'stonecunning' => null],
                'Gray Dwarf (Duergar)' => [
                    'ability_score_increase' => ['str' => 1],
                    'racial_feat'            => ['feats' => ['Wild Talent']],
                    'stonecunning'           => null,
                    'sunlight_sensitivity'   => null,
                    'darkvision'             => ['range' => 120],
                ],
            ],
            'Halfling'    => [
                'Lightfoot Halfling' => ['ability_score_increase' => ['cha' => 1], 'naturally_stealthy' => null],
                'Stout Halfling'     => ['ability_score_increase' => ['con' => 1], 'poison_resilience' => null],
            ],
            'Gnoll'       => [
                'Gnoll'      => ['ability_score_increase' => ['str' => 2], 'initial_hit_die' => ['hit_die' => '1D8']],
                'Half Gnoll' => ['ability_score_increase' => ['str' => 1, 'int' => -1], 'initial_hit_die' => ['hit_die' => '1D8'], 'sneaky' => null],
                'Flind'      => ['ability_score_increase' => ['str' => 1], 'creature_type' => ['type' => 'Fiend (Demon of Yeenoghu)'], 'initial_hit_die' => ['hit_die' => '1D8']],
            ],
            'Orc'         => [
                'Mountain Orc' => ['ability_score_increase' => ['con' => 1], 'powerful_build' => null, 'primal_intuition' => null],
                'Gray Orc'     => ['ability_score_increase' => ['wis' => 1], 'weapon_training' => ['weapons' => ['Battleaxe', 'Handaxe', 'Bastard Sword', 'Shortbow']]],
                'Orog'         => ['ability_score_increase' => ['con' => 2], 'darkvision' => ['range' => 120]],
                // "CON +2, STR an additional +2" on top of Orc's STR +2, and
                // its separate "Ability Score Decrease" (CHA, INT -2) folded in
                'Ogrillon'     => ['ability_score_increase' => ['con' => 2, 'str' => 2, 'cha' => -2, 'int' => -2], 'creature_type' => ['type' => 'Giant']],
            ],
            'Gith'        => [
                'Githyanki' => ['ability_score_increase' => ['str' => 1], 'psionics' => ['power_level' => 0, 'power_class' => 'Psychic Warrior']],
                'Githzerai' => ['ability_score_increase' => ['dex' => 1], 'psionics' => ['power_level' => 0, 'power_class' => 'Psychic Warrior']],
            ],
            'Spirit Folk' => [
                'Mountain Spirit Folk' => [
                    'bird_whisperer' => null,
                    'daring_athlete' => null,
                    'expert_climber' => null,
                    'languages'      => ['languages' => ['Sylvan', 'Terran']],
                ],
                'River Spirit Folk'    => [
                    'amphibious'     => null,
                    'expert_swimmer' => null,
                    'fish_whisperer' => null,
                    'languages'      => ['languages' => ['Sylvan', 'Aquan']],
                    'water_affinity' => null,
                ],
            ],
        ];
        foreach ($subRaceFeatures as $raceName => $subRaces) {
            $raceId = Race::where('name', $raceName)->firstOrFail()->id;
            foreach ($subRaces as $subRaceName => $features) {
                $subRace = SubRace::where('race_id', $raceId)->where('name', $subRaceName)->firstOrFail();
                foreach ($features as $key => $meta) {
                    $subRace->features()->save(app()->features[$key], ['meta' => $meta === null ? null : json_encode($meta)]);
                }
            }
        }
    }
}
