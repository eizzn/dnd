<?php

namespace Database\Seeders\Gods;

use App\Models\God;
use Illuminate\Database\Seeder;

class GodsUnthericSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enlil        = new God;
        $enlil->name  = 'Enlil';
        $enlil->level = 'Greater';
        $enlil->save();
        $enlil->pantheons()->save(app()->pantheons['Untheric'], [
            'name'           => $enlil->name,
            'title'          => 'Ruler of Heaven, Soldier of all the Lands, Father of all Children, Strychik Ozon (Uncle Lightning Bolt)',
            'level'          => 'Lesser',
            'portfolio'      => 'Air, War',
            'regions'        => 'Unther',
            'alignment'      => 'NG',
            'symbol'         => 'Pick Axe',
            'favored_weapon' => 'Pick Axe',
        ]);

        $god        = new God;
        $god->name  = 'Gilgeam';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Untheric'], [
            'name'           => $god->name,
            'title'          => 'The Great Father of Victory, Master of Wars, God of the Sky and the Cities, Supreme Ruler of Unther, Chessenta, Threskel, Chondath, Turmish, the Shaar, and Yuirwood, The Tyrant',
            'portfolio'      => 'Battle, Prowess, Strength, Unther',
            'level'          => 'Hero',
            'regions'        => 'Unther',
            'alignment'      => 'LE',
            'symbol'         => 'A clenched red fist backed by a golden sun on a black lozenge',
            'favored_weapon' => 'Heavy Mace',
            'master_id'      => $enlil->id,
        ]);

        $god        = new God;
        $god->name  = 'Girru';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Untheric'], [
            'name'           => $god->name,
            'title'          => 'Lord of the Flame, The Undying Flame',
            'portfolio'      => 'Fire',
            'level'          => 'Dead',
            'regions'        => 'Unther',
            'alignment'      => 'LG',
            'symbol'         => 'Axe wrapped in flame',
            'favored_weapon' => 'Barbed Heavy Mace and Flaming Axe',
            'master_id'      => $enlil->id,
        ]);

        $god        = new God;
        $god->name  = 'Inanna';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Untheric'], [
            'name'      => $god->name,
            'title'     => 'Keeper of the Flame',
            'portfolio' => 'War, Love',
            'level'     => 'Dead',
            'regions'   => 'Unther',
            'alignment' => 'LE',
            'symbol'    => "Shepard's Staff",
            'master_id' => $enlil->id,
        ]);

        $god        = new God;
        $god->name  = 'Ishtar';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Untheric'], [
            'name'      => $god->name,
            'title'     => 'The Maiden, Goddess of Weather, Lady of the Rivers, Mother of the Harvest, Lady of All Love',
            'portfolio' => 'Love, War',
            'level'     => 'Departed',
            'regions'   => 'Unther',
            'alignment' => 'N',
            'symbol'    => 'Female hand clutching a rod of blue crystal',
            'master_id' => $enlil->id,
        ]);

        $god        = new God;
        $god->name  = 'Ki';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Untheric'], [
            'name'      => $god->name,
            'title'     => "Lion's Friend",
            'portfolio' => 'Nature',
            'level'     => 'Dead',
            'regions'   => 'Unther',
            'alignment' => 'N',
            'symbol'    => 'Iris',
            'master_id' => $enlil->id,
        ]);

        $god        = new God;
        $god->name  = 'Nanna-Sin';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Untheric'], [
            'name'           => $god->name,
            'title'          => "Night's Light, Vivesh Nannari (Moon's Champion)",
            'portfolio'      => 'The moon',
            'level'          => 'Hero',
            'regions'        => 'Unther',
            'alignment'      => 'CG',
            'symbol'         => 'Black axe over a moon',
            'favored_weapon' => "Black Axe of the Moon's Champion (Hand Axe)",
            'master_id'      => $enlil->id,
        ]);

        $god        = new God;
        $god->name  = 'Nergal';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Untheric'], [
            'name'           => $god->name,
            'title'          => 'Lord of the Underworld',
            'portfolio'      => 'The Underworld and the dead',
            'level'          => 'Dead',
            'regions'        => 'Unther',
            'alignment'      => 'NE',
            'symbol'         => 'A dark man holding a black shield',
            'favored_weapon' => 'Longsword',
            'master_id'      => $enlil->id,
        ]);
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => '',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'description' => "<p>Nergal was an outcast archdevil exiled by Asmodeus to Avernus.</p>
<p>In an attempt to learn the secrets of silver fire, he captured Elminster whilst the wizard was in Avernus and exhausted from sealing a planar rift between Avernus and Shadowdale. Nergal subjected Elminster to horrific suffering, all the while stealing his memories using a mental link, until Nergal's body was destroyed by the Simbul (his life-force seemingly escaped).</p>",
        ]);

        $god        = new God;
        $god->name  = 'Ramman';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Untheric'], [
            'name'           => $god->name,
            'title'          => '',
            'portfolio'      => 'Storms, Thunder',
            'level'          => 'Dead',
            'regions'        => 'Unther',
            'alignment'      => 'N',
            'favored_weapon' => 'Khopesh',
            'master_id'      => $enlil->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => '',
            'portfolio'      => 'Duty, Order, Vigilance, War',
            'level'          => 'Dead',
            'alignment'      => 'LN',
            'favored_weapon' => 'Khopesh',
        ]);

        $god        = new God;
        $god->name  = 'Utu';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Untheric'], [
            'name'           => $god->name,
            'title'          => 'The Unbalanced',
            'portfolio'      => 'The Sun',
            'level'          => 'Dead',
            'regions'        => 'Unther',
            'alignment'      => 'CG',
            'symbol'         => 'Sun Disc',
            'favored_weapon' => 'Scimitar',
            'master_id'      => $enlil->id,
        ]);

        $god        = new God;
        $god->name  = 'Assuran';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Untheric'], [
            'name'           => $god->name,
            'title'          => 'The Doombringer, Lord of Three Thunders, Poet of Justice',
            'level'          => 'Hero',
            'portfolio'      => 'Poetic Justice, Revenge, Retribution',
            'regions'        => 'Unther',
            'alignment'      => 'LN',
            'symbol'         => 'A coin with a two-faced head',
            'favored_weapon' => "Retribution's Sting (Javelin of lightning)",
            'master_id'      => $enlil->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Hoar',
            'title'          => 'The Doombringer, Lord of the Three Thunders, Poet of Justice',
            'level'          => 'Hero',
            'portfolio'      => 'Poetic Justice, Revenge, Retribution',
            'alignment'      => 'LN',
            'symbol'         => 'A coin with a two-faced head',
            'favored_weapon' => "Retribution's Sting (Javelin of lightning)",
            'master_id'      => God::where('name', 'Horus-Re')->first()->id,
        ]);
    }
}
