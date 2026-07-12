<?php

namespace Database\Seeders\Gods;

use Illuminate\Database\Seeder;

class GodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GodsCorellonSeeder::class);
        $this->call(GodsSehanineSeeder::class);
        $this->call(GodsHanaliSeeder::class);

        $this->call(GodsLolthSeeder::class);

        $this->call(GodsMoradinSeeder::class);
        $this->call(GodsGarlSeeder::class);
        $this->call(GodsYondallaSeeder::class);

        $this->call(GodsGiantsSeeder::class);
        $this->call(GodsDragonsSeeder::class);

        $this->call(GodsTycheSeeder::class);
        $this->call(GodsBaneSeeder::class);
        $this->call(GodsCyricSeeder::class);
        $this->call(GodsSilvanusSeeder::class);
        $this->call(GodsChaunteaSeeder::class);
        $this->call(GodsTalosSeeder::class);
        $this->call(GodsOghmaSeeder::class);
        $this->call(GodsTempusSeeder::class);
        $this->call(GodsLathanderSeeder::class);
        $this->call(GodsTyrSeeder::class);
        $this->call(GodsKelemvorSeeder::class);
        $this->call(GodsHelmSeeder::class);

        $this->call(GodsMulhorandiSeeder::class);
        $this->call(GodsUnthericSeeder::class);
        $this->call(GodsMazticaSeeder::class);
        $this->call(GodsKaraTurSeeder::class);

        $this->call(GodsElementalsSeeder::class);

        $this->call(GodsGruumshSeeder::class);

        $this->call(GodsArchonsSeeder::class);
        $this->call(GodsGuardinalsSeeder::class);
        $this->call(GodsEladrinsSeeder::class);
        $this->call(GodsZakaraSeeder::class);
        $this->call(GodsDevilsSeeder::class);
        $this->call(GodsDemonsSeeder::class);
        $this->call(GodsSlaadsSeeder::class);
        $this->call(GodsYugolothsSeeder::class);

        $this->call(GodsMonstrousSeeder::class);

        /**
         * In the beginning, there were the fey (eladrin) and the archons.
         * Araushnee (Lolth) attempts her coup. Her failure leads to her banishment, and she becomes one of the first Obyrith (The Queen of Chaos)
         *      Araushnee and Sehanine do battle (as Selune and Shar) and create the crystal sphere of Abeir-Toril.
         *      Chauntea, in her guise as Othea, is poisoned by her son Lanaxis and loses her avatar of Othea. This causes her to loss her title as the chief Nature god, allowing Silvanus to step in and claim the title.
         * More and more demons come into being at this point, as the greatest punishment among the fey is to be branded a demon and banished to the abyss
         * With the growing number of demons threatening reality, the first Archons take up arms to quell the demonic horde.
         * The first archons (Jazirian, Ahriman, and Primus) take on aspects of Dragons, becoming Bahamut, Tiamat, and Sardior. Very few beings know of these aliases.
         * Jazirian, Ahriman, and Primus (along with the other 4 first members of The Celestial Hebdomad) lead their armies against the demons.
         * Ahriman becomes corrupted, and when Jazirian confronts him, Ahriman is defeated. He suffers a great wound, and is stripped of his wings. He is banished and falls from Mt. Celestial and creates The Pit, Baator. There, Ahriman takes the name Asmodeus and begets the fiends of Baator, the devils, as well as tempt more archons to become fallen. He then begins the Blood War
         * Despite his fall, he is still an Archon, and he makes an agreement with the celestials, the Pact Primeval. It is these events that leads the Celestial powers to finally strip him of his rank as an Archon.
         * Primus creates the Spawning Stone, and places it between the lands of the Fey and the Abyss, hoping to assert law to the lands of chaos. It fails and creates the Realm of Limbo and the first Slaad. Ashamed of his failure, Primus gives up his rank among the Archons and leaves to create his own realm, eventually creating Mechanus.
         * Jazirian, moved by the great changes, changes his name to Zaphkiel.
         * Certain hags commit crimes that causes the Fey lords to brand them as demons and banish them to the lower realms. They migrate away from the Abyss to the realm of Hades and become the Night Hags.
         *      Apomps, one of the first Altraloths created by the Night Hags, escapes their control (they lost his true name). Afraid of what he might do, the Night Hags are forced to create more Altraloths to imprison Apomps in Carceri.
         * Intelligent animals, having become awakened in both the lands of Olympus and Mt. Celestial, migrate to form their own realms, Elysium.
         */

        /**
         * level 1-20 is normal
         * level 20-30 is epic
         * level 30 is Hero
         * level 35 is Demi power
         * level 40 is Lesser power
         * level 45 is Intermediate
         * level 50 is Greater
         */
    }
}
