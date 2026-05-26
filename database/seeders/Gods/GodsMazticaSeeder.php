<?php

namespace Database\Seeders\Gods;

use App\Models\God;
use Illuminate\Database\Seeder;

class GodsMazticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        God::where('name', 'Hanali Celanil')->first()->pantheons()->save(app()->pantheons['Maztican'], [
            'name'      => 'Kiltzi',
            'title'     => 'Giver of Health, Growth Nourishment, Love',
            'level'     => 'Greater',
            'portfolio' => 'Love, Fertility',
            'alignment' => 'CG',
        ]);

        $god             = new God;
        $god->name       = 'Kukul';
        $god->level      = 'Dead';
        $god->deleted_at = \Carbon\Carbon::now()->timestamp;
        $god->save();
        $god->pantheons()->save(app()->pantheons['Maztican'], [
            'name'      => $god->name,
            'title'     => 'Ancient Father of the Gods',
            'level'     => 'Dead',
            'portfolio' => 'Stars, Knowledge',
            'alignment' => 'N',
        ]);

        God::where('name', 'Chauntea')->first()->pantheons()->save(app()->pantheons['Maztican'], [
            'name'      => 'Maztica',
            'title'     => 'Mother of Life, The World',
            'level'     => 'Greater',
            'portfolio' => 'The Earth, Life',
            'alignment' => 'N',
        ]);

        God::where('name', 'Silvanus')->first()->pantheons()->save(app()->pantheons['Maztican'], [
            'name'      => 'Nula',
            'title'     => 'Guardian of Animals',
            'level'     => 'Greater',
            'portfolio' => 'Animals',
            'alignment' => 'CN',
        ]);

        God::where('name', 'Bahamut')->first()->pantheons()->save(app()->pantheons['Maztican'], [
            'name'      => 'Qotal',
            'title'     => 'The Plumed One, The Feathered Dragon',
            'level'     => 'Greater',
            'portfolio' => 'Creation, Freedom, Pluma Magic',
            'alignment' => 'LG',
        ]);

        God::where('name', 'Tiamat')->first()->pantheons()->save(app()->pantheons['Maztican'], [
            'name'      => 'Zaltec',
            'title'     => 'Bringer of war, Eater of Hearts',
            'level'     => 'Greater',
            'portfolio' => 'War, Violence, Hishna',
            'alignment' => 'CE',
        ]);
    }
}
