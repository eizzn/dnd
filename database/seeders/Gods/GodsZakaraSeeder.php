<?php

namespace Database\Seeders\Gods;

use App\Enums\Pantheon;
use App\Models\God;
use Illuminate\Database\Seeder;

class GodsZakaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        God::where('name', 'Tyr')->firstOrFail()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'           => 'Hajama',
            'title'          => 'The Courageous, Brave Hajama',
            'level'          => 'Greater',
            'portfolio'      => 'Bravery',
            'symbol'         => 'Featureless disc',
            'favored_weapon' => 'Shortsword',
            'description'    => "<p>Hajama is the Zakharan god of bravery. He is one of the eight Great Gods of the Land of Fate and encourages his followers to never shy away from any opposition - be it in battle or other circumstances. His followers believe that it is better to try and fail than not to try at all, as even living through a defeat strengthens the spirit. Hajama's symbol is a featureless disc.</p>
<p>In tales the god is described as a stocky man with a long, deeply black beard, who wears either a jellaba or lamellar armor the color of midnight. Like other Zakharan gods, he is above such concerns as alignment, as, it is said, \"Bravery can be found in the most noble faris and the most black-hearted assassin\", and who is Hajama to turn his ear from either of them?</p>
<p>Hajama's faith is especially strong in regions bordering dangerous areas like deserts and mountains. It is on friendly terms with the faith of Najm in the Cities of the Pantheon, Brave Hajama is said to be the son of Kor and Najm's twin.</p>",
        ]);

        God::where('name', 'Istishia')->firstOrFail()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'        => 'Hakiyah',
            'aliases'     => 'Istishia',
            'title'       => 'Hakiyah of the Sea Breezes, Hakiyah the Honest, The Water Lord',
            'level'       => 'Greater',
            'portfolio'   => 'Honesty, Truth',
            'symbol'      => 'Ocean Wave',
            'description' => "<p>Hakiyah is the goddess of truth in the lands of Zakhara. She is one of the eight Great Gods of the Land of Fate and preaches the value of honesty and calm examination of the truth. Hakiyah's symbol is a cresting wave. When she appears as a human, she wears the garb of a city-dweller and guilded those around her with the calm voice of reason. Like other Zakharan gods, she is above such concerns as alignment, as truth may be used by a judge to right the wronged or by an evil schemer to bring down his enemies.</p>
<p>Hakiya's worshippers value meditation and methodical, rational actions. She counts many merchants among them, especially in the Cities of the Pearl. In the Pantheist League, however, her faith is persecuted.</p>
<p>The Holy Slayer organization is known as the Soft Whisper worships Hakiyah.</p>",
        ]);

        God::where('name', 'Akadi')->firstOrFail()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'           => 'Haku',
            'aliases'        => 'Akadi',
            'title'          => 'Master of the Desert Wind, Free Haku',
            'level'          => 'Greater',
            'portfolio'      => 'Freedom, Independence',
            'symbol'         => 'Face blowing a torrent of air',
            'favored_weapon' => 'Scimitar',
            'description'    => "<p>Haku is the god of freedom of Zakhara. He is one of the eight Great Gods of the Land of Fate and preaches the value of personal independence and self-reliance.</p>
<p>Haku's symbol is a stylized gust of wind.</p>
<p>In tales, he is described as a proud nomad garbed in flowing desert clothing, wearing a gleaming scimitar. Like other Zakharan gods he is above such concerns as alignment, as a noble desert rider may value independence as highly as a dark-hearted assassin.</p>
<p>Free Haku has many worshipers among Al-Badia, the desert nomads of Zakhara. In the Cities of the Pantheon, however, his faith is persecuted. He is also the deity most worshiped by the djinn.</p>",
        ]);

        God::where('name', 'Chauntea')->firstOrFail()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'        => 'Jisan',
            'title'       => 'The Bountiful, Jisan of the Floods',
            'level'       => 'Greater',
            'portfolio'   => 'Fruitfulness',
            'symbol'      => 'Rain cloud',
            'description' => "<p>Jisan is the goddess of fruitfulness of Zakhara, who stands for fertility and productivity. She is one of the eight Great Gods of the Land of Fate and encourages hard work and diligent planning in order to harvest the riches of the world. Jisan's symbol is a rain cloud, a relic of her long-gone origins as a storm-goddess who provided the monsoon rains necessary for the fertility of the lands.</p>
<p>There are no tales in which Jisan takes any physical form. Like other Zakharan gods, she is above such concerns as alignment, as hard work may be put into an honest life or aimed to subjugate others for personal gain.</p>
<p>Jisan's faith is present in all parts of society, but is most prevalent among merchants. She is not worshiped in the Cities of the Pantheon, where her role is taken by the local goddess Jauhar.</p>
<p>Jisan is said to sometimes bestow a great artifact, the Coin of Jisan the Bountiful, to a worshiper of noble intent.</p>",
        ]);

        God::where('name', 'Bahamut')->firstOrFail()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'           => 'Kor',
            'title'          => 'The Venerable, Old Kor',
            'level'          => 'Greater',
            'portfolio'      => 'Wisdom',
            'symbol'         => 'Sunburst',
            'favored_weapon' => 'Battleaxe',
            'description'    => "<p>Kor is the god of wisdom of Zakhara. He is one of the eight Great Gods of the Land of Fate and preaches that wisdom stems from age, and wisdom brings strength. Kor's symbol is a sunburst. In parables, he is described as an old and grey-haired but strongman, whose advice is sought by gods and mortals alike. Like other Zakharan gods, he is above such concerns as alignment, as wisdom is sought by an altruistic healer as well as by an evil leader of holy slayers. His faith places value in stability, order, and tradition. Seeking the advice of one's elders and learning from one's mistakes are very important to his followers.</p>
<p>Old Kor is mainly venerated by ethicists. Centers of his worship are the cities of Dihlz, Halwa, Huzuz, Jumlat, Liham, Luluk, Qadib, Rog'osto, Umara, and Wasat.</p>",
        ]);

        God::where('name', 'Tymora (Tyche)')->firstOrFail()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'           => 'Najm',
            'title'          => 'The Adventurous',
            'level'          => 'Greater',
            'portfolio'      => 'Adventure, Curiosity',
            'symbol'         => 'Single arrow pointed upward',
            'favored_weapon' => 'Shortbow',
            'description'    => '',
        ]);

        God::where('name', 'Sehanine Moonbow')->firstOrFail()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'        => 'Selan',
            'title'       => 'The Beautiful Moon, The Gracious, Selan of the Garden',
            'level'       => 'Greater',
            'portfolio'   => 'Beauty',
            'symbol'      => 'Moon within a ring',
            'description' => '',
        ]);

        God::where('name', 'Oghma')->firstOrFail()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'      => 'Zann',
            'title'     => 'The Learned, The Marvelous',
            'level'     => 'Greater',
            'portfolio' => 'Learning, Intelligence',
            'symbol'    => 'Jet of a fountain',
        ]);

        God::where('name', 'Milil')->firstOrFail()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'      => 'Bala',
            'title'     => 'Bala of the Tidings, Bala of Ill Tidings',
            'level'     => 'Demi',
            'portfolio' => 'Music',
            'symbol'    => 'Zither',
        ]);

        God::where('name', 'Cyrrollalee')->first()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'      => 'Jarmik',
            'title'     => 'The Thirsty Janni',
            'level'     => 'Demi',
            'portfolio' => 'Generosity, Sharing',
            'symbol'    => 'Jann on his knees near a well',
        ]);

        God::where('name', 'Waukeen')->firstOrFail()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'      => 'Jauhar',
            'title'     => 'The Gemmed, The Gem Studded',
            'level'     => 'Demi',
            'portfolio' => 'Wealth',
            'symbol'    => 'Gold dinar',
        ]);

        God::where('name', 'Helm')->firstOrFail()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'      => 'Vataqatal',
            'title'     => 'The Warrior-Slave, Master of the Battlefield',
            'level'     => 'Demi',
            'portfolio' => 'War, Duty',
            'symbol'    => 'Red-bladed scimitar',
        ]);

        God::where('name', 'Verenestra')->first()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'      => "Kar'r'rga",
            'title'     => 'God of the waters',
            'level'     => 'Demi',
            'portfolio' => '',
            'alignment' => 'CN',
        ]);

        God::where('name', 'Nobanion')->first()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'      => 'The Lost One',
            'title'     => '',
            'level'     => 'Demi',
            'portfolio' => 'Afyal, Elephants',
        ]);

        God::where('name', 'Malar')->first()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'      => 'Ragarra',
            'title'     => 'The Black Tempest, The Render, The Winged Beast',
            'level'     => 'Demi',
            'portfolio' => 'The Jungle and its violent denizens, Passion, Chaos and Revenge',
            'alignment' => 'CE',
            'symbol'    => 'Cyclone, Green three-fingered claw, Baby crocodile biting its own tail',
        ]);

        God::where('name', 'Null')->first()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'      => 'Shajar',
            'title'     => '',
            'level'     => 'Demi',
            'portfolio' => 'The Nogaro River',
        ]);

        God::where('name', 'Set')->first()->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'      => 'Thasmudyan',
            'title'     => 'King of Worms, Lord over Life and Undeath, Lord of the Undead, Ghoul God',
            'level'     => 'Demi',
            'portfolio' => 'Undead',
            'alignment' => 'LE',
            'symbol'    => 'Vulture, Hyena, Skeletal Hand, Crown of Worms',
        ]);
    }
}
