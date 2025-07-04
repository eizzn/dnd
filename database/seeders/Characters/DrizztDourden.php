<?php

namespace Database\Seeders\Characters;

use App\Models\Character;
use App\Models\SubRace;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class DrizztDourden extends Seeder
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

        $char              = new Character;
        $char->name        = "Drizzt Do'Urden";
        $char->str         = 13;
        $char->dex         = 20;
        $char->con         = 12;
        $char->int         = 17;
        $char->wis         = 17;
        $char->cha         = 12;
        $char->alignment   = 'CG';
        $char->sub_race_id = SubRace::where('name', 'Drow')->firstOrFail()->id;

        $helper->saveCharacter($char, [
            'race' => [
                'languages' => ['High Drow', 'Drow Sign Language'],
                'features'  => [
                    'darkvision',
                    'fey_ancestry',
                    'trance',
                    'sunlight_sensitivity',
                ],
                'proficiency' => [
                    'weapons' => ['Hand Crossbow'],
                    'skills'  => [
                        'Perception' => ['meta' => 2],
                    ],
                ],
                'spells'      => [
                    0 => ['Dancing Lights' => '1/day'],
                ],
            ],
            'classes' => [
                1 => [
                    'class' => 'Fighter',
                    'feats' => [
                        'class'    => ['Weapon Finesse'],
                        'ancestry' => ['Drow Magic'],
                    ],
                    'skills' => [
                        'Acrobatics' => 1,
                        'Athletics'  => 1,
                        'Stealth'    => 1,
                        'Perception' => 1,
                        'Insight'    => 1,
                        'Arcana'     => 1,
                    ],
                ],
                2 => [
                    'class' => 'Fighter',
                    'feats' => [
                        'class'   => ['Improved Reaction'],
                        'generic' => ['Two-Weapon Fighter'],
                    ],
                    'features' => ['good_at_talents'],
                    'skills'   => [
                        'Athletics' => 1,
                        'Stealth'   => 1,
                        'Language'  => ['value' => 2, 'meta' => 'Ghukliak'],
                    ],
                ],
                3 => [
                    'class' => 'Fighter',
                    'feats' => [
                        'class'    => ['Dodge'],
                        'ancestry' => ['Improved Drow Magic'],
                    ],
                    'skills' => [
                        'Athletics'  => 1,
                        'Insight'    => 1,
                        'Perception' => 1,
                        'Stealth'    => 1,
                    ],
                ],
                4 => [
                    'class' => 'Fighter',
                    'feats' => [
                        'combat_mastery' => [
                            'Extra Melee Action',
                        ],
                    ],
                    'talents' => [
                        'Step Strike',
                        'Skirmish Strike',
                        'Improved Fight Defensively',
                    ],
                    'skills' => [
                        'Athletics'  => 1,
                        'Insight'    => 1,
                        'Perception' => 1,
                        'Stealth'    => 1,
                    ],
                ],
                5 => [
                    'class' => 'Fighter',
                    'feats' => [
                        'generic' => ['Skilled' => ['meta' => 'Stealth']],
                    ],
                    'talents' => [
                        'Two-Weapon Parry',
                        'Quick Draw',
                    ],
                    'features' => ['heroic_surge'],
                    'skills'   => [
                        'Athletics'  => 1,
                        'Insight'    => 1,
                        'Perception' => 1,
                        'Stealth'    => 1,
                    ],
                ],
                6 => [
                    'class' => 'Fighter',
                    'feats' => [
                        'class'    => ['Weapon Specialization'],
                        'ancestry' => ['Greater Drow Magic'],
                    ],
                    'talents' => [
                        'Focused Initiative',
                        'Improved Dodge',
                    ],
                    'skills' => [
                        'Athletics'  => 1,
                        'Insight'    => 1,
                        'Perception' => 1,
                        'Stealth'    => 1,
                    ],
                ],
                7 => [
                    'class'    => 'Fighter',
                    'features' => ['combat_flexibility'],
                    'skills'   => [
                        'Athletics'  => 1,
                        'Insight'    => 1,
                        'Perception' => 1,
                        'Stealth'    => 1,
                    ],
                ],
                8 => [
                    'class' => 'Fighter',
                    'feats' => [
                        'class' => ['Improved Two-Weapon Fighter'],
                    ],
                    'skills' => [
                        'Athletics'  => 1,
                        'Insight'    => 1,
                        'Perception' => 1,
                        'Stealth'    => 1,
                    ],
                ],
                9 => [
                    'class' => 'Fighter',
                    'feats' => [
                        'combat_mastery' => ['Weapon Focus' => ['meta' => 'Scimitar']],
                        'ancestry'       => ['Greater Drow Magic'],
                    ],
                    'talents'   => ['Slasher'],
                    'skills'    => [
                        'Athletics'  => 1,
                        'Insight'    => 1,
                        'Perception' => 1,
                        'Stealth'    => 1,
                    ],
                ],
                10 => [
                    'class' => 'Fighter',
                    'feats' => [
                        'class' => ['Lightning Reflexes'],
                    ],
                    'features' => ['heroic_surge'],
                    'skills'   => [
                        'Acrobatics' => 1,
                        'Insight'    => 1,
                        'Perception' => 1,
                        'Stealth'    => 1,
                    ],
                ],
                11 => [
                    'class' => 'Barbarian',
                    'feats' => [
                        'generic' => ['Extra Melee Action'],
                    ],
                    'features' => [
                        'feat' => ['Fury Totem'],
                    ],
                    'skills' => [
                        'Athletics' => 1,
                        'Nature'    => 2,
                        'Survival'  => 2,
                        'Insight'   => 1,
                    ],
                ],
                12 => [
                    'class'    => 'Barbarian',
                    'features' => ['rage'],
                    'skills'   => [
                        'Survival'  => 2,
                        'Athletics' => 1,
                        'Nature'    => 1,
                        'Language'  => ['value' => 1, 'meta' => 'Gnim'],
                    ],
                ],
                13 => [
                    'class'    => 'Ranger',
                    'features' => [
                        'wild_empathy',
                        'favored_terrain' => 'Forests',
                    ],
                    'skills' => [
                        'Stealth'         => 1,
                        'Animal Handling' => 1,
                        'Concentration'   => 2,
                        'Survival'        => 2,
                        'Perception'      => 1,
                        'Insight'         => 1,
                        'Religion'        => 1,
                        'Language'        => ['value' => 1, 'meta' => 'Chondathan'],
                    ],
                ],
                14 => [
                    'class' => 'Ranger',
                    'feats' => [
                        'generic' => ['Daylight Adaptation'],
                    ],
                    'features'  => ['favored_enemy' => 'Evil Outsiders'],
                    'spells'    => [
                        1 => [
                            'Detect Magic',
                            'Goodberry',
                            "Hunter's mark",
                            'Snow Boots',
                        ],
                    ],
                    'skills' => [
                        'Stealth'         => 2,
                        'Animal Handling' => 2,
                        'Nature'          => 2,
                        'Survival'        => 1,
                        'Language'        => ['value' => 1, 'meta' => 'Chondathan'],
                    ],
                ],
                15 => [
                    'class' => 'Ranger',
                    'feats' => [
                        'class' => ['Greater Two-Weapon Fighter'],
                    ],
                    'talents' => [
                        'Improved Flanking',
                        'Greater Flanking',
                    ],
                    'features' => [
                        'study_enemy',
                        'woodland_stride',
                    ],
                    'skills' => [
                        'Stealth'         => 1,
                        'Nature'          => 2,
                        'Animal Handling' => 2,
                        'Survival'        => 2,
                        'Concentration'   => 1,
                    ],
                    'spells' => [
                        1 => ['Longstrider'],
                    ],
                ],
                16 => [
                    'class' => 'Ranger',
                    'feats' => [
                        'class' => ['Point-Blank Shot'],
                    ],
                    'skills' => [
                        'Stealth'         => 1,
                        'Nature'          => 1,
                        'Animal Handling' => 2,
                        'Survival'        => 2,
                        'Athletics'       => 1,
                        'Concentration'   => 1,
                    ],
                    'spells' => [
                        1 => ['Animal Friendship'],
                    ],
                ],
                17 => [
                    'class' => 'Ranger',
                    'feats' => [
                        'generic' => ['Rapid Shot'],
                    ],
                    'features' => ['trackless_step'],
                    'skills'   => [
                        'Stealth'         => 1,
                        'Nature'          => 1,
                        'Animal Handling' => 1,
                        'Survival'        => 2,
                        'Athletics'       => 1,
                        'Concentration'   => 1,
                        'Language'        => ['value' => 1, 'meta' => 'Shanatan'],
                    ],
                    'spells' => ['Jump'],
                ],
                18 => [
                    'class' => 'Monk',
                    'feats' => [
                        'class' => [
                            'Improved Unarmed Strike',
                        ],
                    ],
                    'skills' => [
                        'Stealth'       => 1,
                        'Acrobatics'    => 2,
                        'Athletics'     => 1,
                        'Concentration' => 2,
                        'Religion'      => 1,
                        'Medicine'      => 1,
                    ],
                    'powers' => [
                        1 => ['Burst'],
                    ],
                ],
                19 => [
                    'class' => 'Monk',
                    'feats' => [
                        'class' => [
                            'Broken Ones',
                            'Wise Defense',
                            'Crane Stance',
                        ],
                    ],
                    'features' => ['flurry_of_blows'],
                    'skills'   => [
                        'Stealth'    => 1,
                        'Acrobatics' => 1,
                        'Athletics'  => 1,
                        'Lore'       => 2,
                        'Religion'   => 1,
                    ],
                    'powers' => [
                        1 => ['Awareness'],
                    ],
                ],
                20 => [
                    'class' => 'Monk',
                    'feats' => [
                        'class' => [],
                        'skill' => [],
                    ],
                    'skills' => [
                        'Stealth'    => 1,
                        'Acrobatics' => 1,
                        'Athletics'  => 1,
                        'Medicine'   => 1,
                        'Lore'       => 1,
                        'Diplomacy'  => 1,
                    ],
                    'powers' => [
                        1 => ['Wisdom Defense', 'Heal'],
                    ],
                ],
            ],
        ]);
    }
}
