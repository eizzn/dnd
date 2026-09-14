<?php

namespace Database\Seeders\Gods;

use App\Models\God;
use Illuminate\Database\Seeder;

class GodsYugolothsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $god        = new God;
        $god->name  = 'Anthraxus';
        $god->level = 'Altraloth';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Yugoloth Lords'], [
            'name'      => $god->name,
            'title'     => 'Phraxas the Decayed, Lord of Despair, Lord of Misery, Oinoloth, Oinodaemon',
            'level'     => 'Altraloth',
            'alignment' => 'NE',
        ]);

        $god        = new God;
        $god->name  = 'Apomps';
        $god->level = 'Altraloth';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Yugoloth Lords'], [
            'name'        => $god->name,
            'title'       => 'The Three-Sided, Lord of the Demodands',
            'level'       => 'Altraloth',
            'alignment'   => 'NE',
            'description' => '<p>Apomps is one of the first Altraloths created by the Night Hags. They had lost his True Name and was forced to imprison him in Carceri. There, he created his demodands and seeks revenge against the other Altraloths and the Night Hags that have imprisoned him.</p>',
        ]);

        $god        = new God;
        $god->name  = 'Charon';
        $god->level = 'Altraloth';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Yugoloth Lords'], [
            'name'      => $god->name,
            'title'     => 'The Ferryman, The Boatman of the Lower Planes',
            'level'     => 'Altraloth',
            'alignment' => 'NE',
        ]);

        $god        = new God;
        $god->name  = 'Inthracis';
        $god->level = 'Altraloth';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Yugoloth Lords'], [
            'name'      => $god->name,
            'title'     => 'The Clone',
            'level'     => 'Altraloth',
            'alignment' => 'NE',
        ]);

        $god        = new God;
        $god->name  = 'Mydianchlarus';
        $god->level = 'Altraloth';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Yugoloth Lords'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Altraloth',
            'alignment' => 'NE',
        ]);

        $god        = new God;
        $god->name  = 'Xengahra';
        $god->level = 'Altraloth';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Yugoloth Lords'], [
            'name'        => $god->name,
            'title'       => 'Death Bringer, Fallen One',
            'level'       => 'Altraloth',
            'alignment'   => 'NE',
            'description' => '<p>Xengahra is an altraloth that is a living personification of hopelessness. He is an outcast living in the barren Outlands, after having slain the night hags that created him after their contract expired.</p>
<p>Although a fiend, Xengahra looks exactly like a true solar except for the expression of utter despair he always wore.</p>',
        ]);

        $god        = new God;
        $god->name  = 'Malkizid';
        $god->level = 'Altraloth';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Yugoloth Lords'], [
            'name'        => $god->name,
            'title'       => 'The Branded King (Former Solar)',
            'level'       => 'Yugoloth',
            'alignment'   => 'LE',
            'description' => '<p>Malkizid is a powerful fallen solar and former archdevil who resides in the Blood Rift.</p>
<p>Before his fall, He was seduced into betraying Corellon by Lolth. The rebellion failed, and Malkizid was branded for his betrayal with a constantly bleeding wound on his forehead, thus he was known as the "Branded King".</p>
<p>He descended to Baator, and there, quickly rose in power. But at some point, he fell out of favor with Asmodeus and was exiled from Baator. A small host of devils followed him to the Blood Rift, and there, with the help of the Night Hags, became a Yugoloth lord.</p>',
        ]);

        $god        = new God;
        $god->name  = 'Kexxon';
        $god->level = 'Altraloth';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Yugoloth Lords'], [
            'name'      => $god->name,
            'title'     => 'Archgeneral of the Blood Rift',
            'level'     => 'Altraloth',
            'alignment' => 'NE',
        ]);

        $god        = new God;
        $god->name  = 'Taba';
        $god->level = 'Altraloth';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Yugoloth Lords'], [
            'name'      => $god->name,
            'title'     => 'Thief and Spymaster of the Yugoloths',
            'level'     => 'Altraloth',
            'alignment' => 'NE',
        ]);

        $god        = new God;
        $god->name  = 'Typhus';
        $god->level = 'Altraloth';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Yugoloth Lords'], [
            'name'      => $god->name,
            'title'     => 'General of the Infernal Front army',
            'level'     => 'Altraloth',
            'alignment' => 'NE',
        ]);

        $god        = new God;
        $god->name  = 'Bubonix';
        $god->level = 'Yugoloth';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Yugoloth Lords'], [
            'name'        => $god->name,
            'title'       => 'Master of the Tower of Incarnate Pain',
            'level'       => 'Yugoloth',
            'alignment'   => 'NE',
            'description' => '<p>A former arcanaloth.</p>',
        ]);

        $god        = new God;
        $god->name  = 'Shemeshka';
        $god->level = 'Yugoloth';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Yugoloth Lords'], [
            'name'        => $god->name,
            'title'       => 'The Marauder',
            'level'       => 'Yugoloth',
            'alignment'   => 'NE',
            'description' => '<p>An arcanaloth that resides in Sigil, where "she" is an information broker. She maintains a highly beautiful appearance in her fox form.</p>
<p>In public, Shemeshka assumes the role of elegant socialite and wealthy information broker.</p>
<p>With the factions out of political power in Sigil, the Fiend has rapidly turned to meddling with Sigil’s guilds. By all accounts, she has influence or control over four or five of them, including the Runners and Touts Guild. She holds influence over several votes on Sigil’s advisory council as well; most notably Holmin and Cirily. Of course the fiend never displays this level of power openly, instead letting the illusion of control spread further than she actually can reach; all the better to cow her rivals and those she perceives to be under her station.</p>',
        ]);

        // Yugoloths gain their power from the Night Hags. therefore,
        // Warlock Pacts associated to Yugoloths are through the Night Hags
    }
}
