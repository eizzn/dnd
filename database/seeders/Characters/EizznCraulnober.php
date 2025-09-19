<?php

namespace Database\Seeders\Characters;

use App\Models\Character;
use App\Models\SubRace;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class EizznCraulnober extends Seeder
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
        $char->name        = "Eizz'n Craulnober";
        $char->str         = 13;
        $char->dex         = 20;
        $char->con         = 14;
        $char->int         = 18;
        $char->wis         = 18;
        $char->cha         = 14;
        $char->hit_points  = 150;
        $char->sub_race_id = SubRace::where('name', 'Moon Elf')->firstOrFail()->id;

        $helper->saveCharacter($char, [
            'race' => [
                'languages' => ['Espruar', "Ar'Tel'Quessan"],
                'features'  => [
                    'darkvision',
                    'fey_ancestry',
                    'trance',
                ],
                'proficiency' => [
                    'weapons' => ['Longsword', 'Shortsword', 'Longbow', 'Shortbow'],
                    'skills'  => [
                        'Perception' => ['meta' => 2],
                        'Stealth'    => ['meta' => 2],
                    ],
                ],
            ],
            'classes' => [
                1 => [
                    'class' => 'Adventurer',
                    'feats' => [

                    ],
                ],
            ],
        ]);
    }
}
