<?php

namespace Database\Seeders\Gods;

use App\Models\God;
use Carbon\Carbon;
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
        $god->deleted_at = Carbon::now()->timestamp;
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

        God::where('name', 'Eilistraee')->first()->pantheons()->save(app()->pantheons['Maztican'], [
            'name'      => 'Nula',
            'title'     => 'Guardian of Animals',
            'level'     => 'Greater',
            'portfolio' => 'Animals',
            'alignment' => 'CN',
        ]);

        God::where('name', 'Bahamut')->first()->pantheons()->save(app()->pantheons['Maztican'], [
            'name'        => 'Qotal',
            'aliases'     => 'Jazirian',
            'title'       => 'The Plumed One, The Feathered Dragon',
            'level'       => 'Greater',
            'portfolio'   => 'Creation, Freedom, Pluma Magic, Community, Peace, Learning, Parenthood, Couatls',
            'symbol'      => 'Uroboric Couatl',
            'alignment'   => 'LG',
            'description' => "<p>Qotal (Jazirian) is the deity of Couatls. His history is somewhat sketchy; never being a major player in divine politics, but with some citing Jazirian as being the source of all goodness, one of the creators of the multiverse, being the twin brother of Asmodeus (before he became a Baatezu) and is opposed to the other serpentine deities Merrshaulk and Ssharstrune, fighting him over the love of their mutual sister, Shekinester. Jazirian's gender is a bit spotty: certain sources refer to Jazirian as being a hermaphrodite or sexless and use neutral pronouns, while other sources refer to Jazirian as being either male or female.</p>
<h3>History</h3>
<p>It is said that at the beginning of time, there were only a handful of uber-beings, including Ao, the Lady of Pain, and the World Serpent.</p>
<p>Of the group, the World Serpent is the only overpower who actually seems to do anything, dividing himself into separate aspects to get stuff done. The three aspects of Law: Jazirian, Ahriman, and Primus collaborated to bring form out of the primordial Chaos. Their efforts created the Unity of Rings: everything keeps happening over and over again, and things tend to end where they began. This place, the first ring, became known as the Outlands. When it was defined, the outer planes fell in around it, thus creating the Outer Planes. Thus, together, they built the multiverse.</p>
<p>Jazirian and Ahriman squabble over where the center of the multiverse should be. While Primus thought that something that is infinite cannot have a center, Jazirian argued for Mount Celestial and Ahriman for Baator. The two pulled on each other, each with the other's tail in their mouths. Finally, they separated, Jazirian flew up, while Ahriman fell.</p>
<p>Jazirian and Ssharstrune both courted the Naga goddess Shekinester. Shekinester eventually chooses Jazirian, and they sire Parrafaire.</p>
<h3>Worshippers</h3>
<p>Jazirian doesn't actually have worshippers per se. Acting similarly to Bahamut, he is typically an exemplar for Goodness and Law. Though Jazirian does not accept Clerics or answer prayers directly.</p>",
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
