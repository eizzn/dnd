<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersPSeeder extends Seeder
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

        $monster                   = new Monster;
        $monster->name             = 'Phaerimm';
        $monster->size             = 'Large';
        $monster->type             = 'Aberration';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '15 ft / Fly 30 ft (hover)';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6) Piercing damage</dd>
    <dt>Fist</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D4) Bludgeoning damage or Grapple</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (3D4) Piercing damage plus (4D8) Poison damage. DC 18 CON Save or be Paralyzed.</dd>
</dl>';
        $monster->description = '<p>Phaerimm are powerful magic-using beings that move by natural levitation. They resemble upright cones, the widest part uppermost, and the point ending in a barbed stinger-tail. They are intelligent, inimical and highly dangerous.</p>
<p>The phaerimm like to live near others of their own kind (for mutual protection and the social satisfaction of vying with each other in devious plans). However, they usually prefer to operate along or surround themselves with magically-controlled slave creatures to carry out their bidding. Phaerimm eat all reptiles and mammals, keeping them as slaves until their turn as dinner.</p>';
        $helper->saveMonster($monster, ['Aberration'], [
            'stats' => [11, 13, 20, 20, 17, 19, 13, 4],
            'saves' => [
                'INT' => ['bonus' => 10],
                'WIS' => ['bonus' => 8],
                'CHA' => ['bonus' => 9],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 10],
                'Deception'  => ['dc' => 9],
                'Perception' => ['dc' => 8],
            ],
            'feats' => [
                'Abjurer', 'Expert Abjurer', 'Master Abjurer',
                'Improved Counterspell', 'Greater Counterspell', 'Master Counterspell',
            ],
            'features' => [
                'resistance'   => ['meta' => 'Cold, Fire, Bludgeoning, Piercing, Slashing'],
                'immunity'     => ['meta' => 'Polymorph, Petrification'],
                'multi_attack' => ['meta' => 'The phaerimm gains 3 additional Actions. These Actions can only be used to make Fist attacks'],
            ],
            'spells' => [
                'Detect Magic' => ['meta' => 'At will'],
                'True Seeing'  => ['meta' => 'Always active'],
            ],
            'classes' => [
                'Sorcerer' => ['level' => 10],
            ],
            'languages' => ['Telepathy' => ['meta' => '60 ft']],
        ]);
    }
}
