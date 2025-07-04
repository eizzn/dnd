<?php

namespace Database\Seeders\Gods;

use App\Models\God;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsKaraTurSeeder extends Seeder
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

        $emperor        = new God;
        $emperor->name  = 'Celestial Emperor';
        $emperor->level = 'Greater';
        $emperor->save();
        $emperor->pantheons()->save(app()->pantheons['Celestial Empire'], [
            'name'      => $emperor->name,
            'title'     => 'The Celestial One, The Master of Heaven, The center of Heaven',
            'level'     => 'Greater',
            'portfolio' => 'Emperor of the Celestial Empire',
            'regions'   => 'Shou Lung',
            'alignment' => 'N',
        ]);

        God::where('name', 'Hanali Celanil')->firstOrFail()->pantheons()->save(app()->pantheons['Celestial Empire'], [
            'name'        => "Ai Ch'ing",
            'title'       => 'Mistress of Love and Fidelity',
            'level'       => 'Intermediate',
            'portfolio'   => 'Love, marriage',
            'master_id'   => $emperor->id,
            'description' => "<p>Ai Ch'ing, the Mistress of Love and Fidelity, is one of the Nine Immortals who serve the Celestial Emperor in the Celestial Empire. She is the goddess of love, marriage, and fidelity and represents the virtues of love and fidelity in the Path of Enlightenment.</p>
<h4>Description</h4>
<p>Ai Ch'ing has two aspects, one as a vast dragon, and the other a woman, a beautiful and matronly wife. She is focused on proper marriage and hence she loves to foil adulterers and unwed lovers.</p>
<h4>Worshipers</h4>
<p>Ai Ch'ing is commonly prayed to by mothers-in-law, young men, and marriage-brokers in search of brides, and by sing-song girls seeking husbands. They would burn incense to her. However, young women prefer Kwan Ying's compassion.</p>
<p>Ai Ch'ing is the patron of a number of sects of the Path of Enlightenment, most with many women members, including the Nuns of the Silver Swan, who intervene in martial and marital matters at the goddess's direction, and the Order of the Nimble Hunter, who focuses of faith and philosophy.</p>",
        ]);

        God::where('name', 'Tempus')->firstOrFail()->pantheons()->save(app()->pantheons['Celestial Empire'], [
            'name'        => 'Chan Cheng',
            'title'       => 'Mighty Lord of Heroes',
            'level'       => 'Intermediate',
            'portfolio'   => 'Bravery, Combat, Martial Arts, War',
            'master_id'   => $emperor->id,
            'description' => '',
        ]);

        God::where('name', 'Oghma')->firstOrFail()->pantheons(app()->pantheons['Celestial Empire'], [
            'name'      => "Ch'en Hsiang",
            'level'     => 'Intermediate',
            'portfolio' => 'Literature, Music, Poetry',
            'master_id' => $emperor->id,
        ]);

        God::where('name', 'Deneir')->firstOrFail()->pantheons()->save(app()->pantheons['Celestial Empire'], [
            'name'        => 'Chih Shih',
            'title'       => 'Lord of the Sages',
            'level'       => 'Lesser',
            'portfolio'   => 'History, Lore, Tradition',
            'master_id'   => $emperor->id,
            'description' => '',
        ]);

        God::where('name', 'Tyr')->firstOrFail()->pantheons()->save(app()->pantheons['Celestial Empire'], [
            'name'      => 'Fa Kuan',
            'level'     => 'Intermediate',
            'portfolio' => 'Justice',
            'master_id' => $emperor->id,
        ]);

        God::where('name', 'Tymora (Tyche)')->firstOrFail()->pantheons()->save(app()->pantheons['Celestial Empire'], [
            'name'        => 'Hsing Yong',
            'title'       => 'The Lucky One, Most Fortune One, God of Fortune and Prosperity',
            'level'       => 'Lesser',
            'portfolio'   => 'Fortune, Prosperity',
            'master_id'   => $emperor->id,
            'description' => '',
        ]);

        God::where('name', 'Sehanine Moonbow')->firstOrFail()->pantheons()->save(app()->pantheons['Celestial Empire'], [
            'name'        => 'Kwan Ying',
            'title'       => 'Compassionate Kwan Ying, Sapphire Empress',
            'level'       => 'Intermediate',
            'portfolio'   => 'Compassion, Mercy, Joy',
            'master_id'   => $emperor->id,
            'description' => '',
        ]);

        God::where('name', 'Chauntea')->firstOrFail()->pantheons()->save(app()->pantheons['Celestial Empire'], [
            'name'        => 'Nung Chiang',
            'title'       => 'Teacher of the Plow, Master of the Red Earth',
            'level'       => 'Intermediate',
            'portfolio'   => 'Agriculture, Fertility',
            'master_id'   => $emperor->id,
            'description' => '',
        ]);

        God::where('name', 'Gond')->firstOrFail()->pantheons()->save(app()->pantheons['Celestial Empire'], [
            'name'      => 'Shu Chia',
            'level'     => 'Lesser',
            'portfolio' => 'Artificers, the Arts',
            'master_id' => $emperor->id,
        ]);
    }
}
