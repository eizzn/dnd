<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersHSeeder extends Seeder
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
        $monster->name             = 'Helmed Horror';
        $monster->size             = 'Medium';
        $monster->type             = 'Animal';
        $monster->alignment        = '-';
        $monster->armor_class      = '16 (Plate + Shield)';
        $monster->damage_reduction = 4;
        $monster->hit_dice         = 8;
        $monster->speed            = '30 ft / Fly 30 ft';
        $monster->actions          = '<dl>
    <dt>Longsword</dt> <dd>Melee Weapon Attack +6, reach 5 ft, one target. 8 (1D8 +4) Slashing or 9 (1D10 +4) Slashing damage if used with 2 hands.</dd>
</dl>';
        $helper->saveMonster($monster, ['Construct'], [
            'stats'     => [18, 13, 16, 10, 10, 10, 4, 2],
            'features'  => [
                'magic_resistance',
                'immunity'      => ['meta' => 'Force, Necrotic, Poison, Blinded, Charmed, Deafened, Frightened, Paralyzed, Petrified, Stunned'],
                'resistance'    => ['meta' => 'Bludgeoning, Piercing, Slashing'],
                'vulnerability' => ['meta' => 'Adamantine'],
                'blindsight'    => ['meta' => '60 ft'],
            ],
            'languages' => [
                'Special' => ['meta' => "Understands one language of its creator but can't speak"],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Homunculus';
        $monster->size             = 'Tiny';
        $monster->type             = 'Construct';
        $monster->alignment        = '-';
        $monster->armor_class      = '12 (Natural Armor)';
        $monster->damage_reduction = 1;
        $monster->hit_dice         = 2;
        $monster->speed            = '20 ft / Fly 40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack +4, reach 5 ft, one target. 1 Piercing Damage, and the Target must make a DC 10 CON Save or be Sick for 1 minute. If the Save fails by 5 or more, the Target is instead Unconscious for 1 minute.</dd>
    <dt>Telepathic Bond</dt> <dd>While the homunculus is on the same plane of existence as its master, it can magically convey what it senses to its master, and the two can communicate telepathically.</dd>
</dl>';
        $helper->saveMonster($monster, ['Construct'], [
            'stats'     => [4, 15, 11, 10, 10, 7, 0, 2],
            'languages' => [
                'Special'   => ['meta' => 'Understands one language of its creator'],
                'Telepathy' => ['meta' => 'Unlimited same Plane, with creator only'],
            ],
        ]);
    }
}
