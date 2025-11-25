<?php

namespace Database\Seeders\Gods;

use App\Models\God;
use Illuminate\Database\Seeder;

class GodsGiantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper = app()->seedHelper;

        $god        = new God;
        $god->name  = 'Annam';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Ordning'], [
            'name'           => $god->name,
            'title'          => 'All-Father, The Prime, The Progenitor of Worlds, The Great Creator',
            'level'          => 'Greater',
            'portfolio'      => 'Giants, Creation, Learning, Philosophy, Fertility',
            'alignment'      => 'N',
            'symbol'         => 'Two hands with wrists together and fingers pointing down',
            'favored_weapon' => 'Halfspear',
        ]);
        $annam = $god;

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Stronmaus';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Ordning'], [
            'name'           => $god->name,
            'title'          => 'The Storm Lord, The Smiling God, The Thunderhead',
            'level'          => 'Lesser',
            'portfolio'      => 'Chaos, Cloud Giants, Good, Protection, Seas, Sky, Sun, War, Weather',
            'alignment'      => 'CG',
            'symbol'         => '',
            'favored_weapon' => 'Mace or warhammer',
            'master_id'      => $annam->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Hiatea';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Ordning'], [
            'name'           => $god->name,
            'title'          => '',
            'level'          => 'Lesser',
            'portfolio'      => 'Nature, Agriculture, Hunting, Childbirth',
            'alignment'      => 'NG',
            'symbol'         => 'Spear wreathed in flame',
            'favored_weapon' => 'Spear',
            'master_id'      => $annam->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Memnor';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Ordning'], [
            'name'           => $god->name,
            'title'          => 'Usurper',
            'level'          => 'Lesser',
            'portfolio'      => 'Pride, Mental Prowess, Control',
            'alignment'      => 'LE',
            'symbol'         => 'Thin black obelisk',
            'favored_weapon' => 'Morningstar',
            'master_id'      => $annam->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Surtur';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Ordning'], [
            'name'           => $god->name,
            'title'          => 'Lord of the Fire Giants',
            'level'          => 'Demi',
            'portfolio'      => 'Destruction, Fire, Fire Giants',
            'alignment'      => 'LE',
            'symbol'         => '',
            'favored_weapon' => 'Greatsword, Javelin',
            'master_id'      => $annam->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Thrym';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Ordning'], [
            'name'           => $god->name,
            'title'          => 'Lord of the Frost Giants',
            'level'          => 'Demi',
            'portfolio'      => 'Front Giants and Strength',
            'alignment'      => 'CE',
            'symbol'         => '',
            'favored_weapon' => 'Greataxe',
            'master_id'      => $annam->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Skoraeus Stonebones';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Ordning'], [
            'name'           => $god->name,
            'title'          => 'Lord of the Rock',
            'level'          => 'Demi',
            'portfolio'      => 'Stone Giants, Buried Things',
            'alignment'      => 'N',
            'symbol'         => '',
            'favored_weapon' => 'Warhammer',
            'master_id'      => $annam->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Grolantor';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Ordning'], [
            'name'           => $god->name,
            'title'          => '',
            'level'          => 'Demi',
            'portfolio'      => 'Hunting, Combat, Hill Giants',
            'alignment'      => 'CE',
            'symbol'         => '',
            'favored_weapon' => 'Dwarfcrusher (club or javelin)',
            'master_id'      => $annam->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Iallanis';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Ordning'], [
            'name'           => $god->name,
            'title'          => '',
            'level'          => 'Lesser',
            'portfolio'      => 'Love, Forgiveness, Beauty, Mercy',
            'alignment'      => 'NG',
            'symbol'         => '',
            'favored_weapon' => 'Unarmed strike',
            'master_id'      => $annam->id,
        ]);
    }
}
