<?php

namespace Database\Seeders;

use App\Models\Pantheon;
use Illuminate\Database\Seeder;

class PantheonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pantheons = [];

        $pantheon       = new Pantheon;
        $pantheon->name = 'Faeruneon';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Mulhorandi';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Untheric';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Maztican';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Al-Qadim';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = 'Celestial Empire';
        $pantheon->description = "<p>The Celestial Empire, also known as the Celestial Heaven or the Empire of Heaven, is the dominant pantheon of the continent of Kara-Tur, especially the empire of Shou Lung, and the overarching spiritual state managing its gods, spirits, dragons, and other creatures, all through the Celestial Bureaucracy.</p>
<h3>The Spirit World</h3>
<p>The Celestial Empire stands within the Spirit World, a plane that lay coexistent and conterminous with the land of Kara-Tur. Every deity who is a part of the Celestial Bureaucracy has a small realm attached to the Spirit World. The whole realm known as the Celestial Heaven, or simply Heaven or the Sky.</p>
<p>Lying at the Center of All Heaven, the Celestial Empire is governed from the Celestial Palace, where the Celestial Emperor sits upon the Jade Throne.</p>
<h3>Sphere of Influence</h3>
<p>The Celestial Bureaucracy holds dominion over the continent of Kara-Tur, from the empires of Shou Lung and Tu Lung in the interior, to the Ama Basin in the north; Koryo, Kozakura, and Wa in the east; Tabot in the west; and Malatra and Petan and the islands of Bawa and Bertan in the south. Its sphere of godly influence abutted the Faerunian pantheon and the Mulhorandi pantheon at the Hordelands and the Utter East, and the Zakharan pantheon in its far southwestern corner in the Sempadan Forest. From the celestial perspective, the whole land was known as the Red Earth, or simply the Land. This and the Sky above were all part of the Celestial Empire.</p>
<h3>Organization</h3>
<h4>Description</h4>
<p>In the Shou view, as espoused by the Path of Enlightenment and most accurately by the Faith of the Nine Travelers, the Red Earth was the Mirror of Heaven in all ways. Therefore, the existence of the empire of Shou Lung reflected the existence of the Celestial Empire, a divine state that ruled all of Heaven and the Red Earth. It was an empire of the spirit world, with a bureaucracy to match, populated by immortals, demigods, dragons, spirits, and other powers who served as the officials of the Celestial Emperor. The people of the material world, even its mortal emperors, were all subjects of the Celestial Empire.</p>
<p>The empire was governed by the Celestial Government and in turn managed by the Celestial Bureaucracy. Most of the so-called creatures of Kara-Tur are subjects of the Celestial Emperor; and many held positions of officers in the Celestial Bureaucracy.</p>
<h4>Celestial Emperor</h4>
<p>At the head of this pantheon, the Celestial Emperor ruled the Celestial Empire and oversaw the Celestial Bureaucracy. From this lofty position, he decided the path of What Has Been and Will Be. He determined that Heaven and the Red Earth should mirror each other in the pursuit of perfection. He was also the architect of the Path of Enlightenment.</p>
<p>A master of delegation, he gave every deity their divine duties, and appointed the Celestial Court—also called the Great Court of Heaven—and the Million Officials to deal with trivialities like dealing with humans.</p>
<h3>Nine Immortals</h3>
<p>In addition to the subjects of the Celestial Empire and the officials of the Bureaucracy, the Celestial Emperor commanded the Nine Immortals. When Shou people spoke of \"the immortals\", they invariably meant the Nine. They stood beside the Jade Throne, always ready to do as the Emperor bade as agents of his divine will. At his direction, they commanded the Lesser Immortals and other officials and each took responsibility for one aspect of the Path of Enlightenment. Their duty was to embody an ideal of the Path—one of the nine core virtues of Artistry, Compassion, Courage, Fidelity, Honor, Karma, Love, Respect for Tradition, and Scholarship—and so teach by way of example.</p>
<p>They were also known as the Nine Great Dragons, in which form they held up the world and could move all things with their minds.</p>
<h4>Lesser Immortals</h4>
<p>The Lesser Immortals were servants and aides to the Nine Immortals. They were drawn from the spirits of deceased sages, those who had in life been especially holy. The Celestial Emperor bestowed on them immortality and a limited godly powers. Under the direction of one of the Nine Immortals, they also had certain tasks to carry out, whether in the Celestial Heaven or on the Red Earth of Kara-Tur. There were six main groups of Lesser Immortals.</p>
<p>The Moon Women had the great responsibility of maintaining Heaven itself. They refilled the oil lamps in the Sun, polished the crystal orbs of the stars, and steered the motions of the Moon and the constellations. Since these governed the calendar, Moon Women were patron saints of festivals, portents, auspicious moments, and other matters of time.</p>
<p>Serving Chan Cheng, the Spirit Warriors had the duties of creating courage and resolve in those who wavered, and leading armies of phantoms, the manifestation of which could swing a battle. Spirit Warriors also helped those who'd fallen in battle for a good cause, escorted the spirits of heroes for judgement by the Lords of Karma, and guarded the gates of the Underworld against trespassers.</p>
<p>Serving Shu Chia, the Jade Ladies created copper, gold, jade, silver, and other riches, and hid them in the earth for mortals to discover.</p>
<p>Serving Nung Chiang, the Rice Spirits governed the harvest and fertility, causing rice to grow, animals to have their young, and women to bear babies, and decided if a family should have children.</p>
<p>Serving Kwan Ying, the Ladies of Compassion roamed both Heaven and the Red Earth to find pain and suffering and either alleviated it themselves or had the goddess do so.</p>
<p>Serving Fa Kuan, the Lords of Karma acted as defense or prosecution for the souls of the deceased before the Lawgiver, or sat as judges themselves. Together, they decided whether a worthy soul, one who\'d lived a life of goodness and merit, should be raised to Heaven to be among the Ancestors, to be considered a Sage, or even to serve among the Lesser Immortals themselves. Those they found unworthy were condemned to remain as spirits, imprisoned in the Underworld in the day, and wandering the Red Earth at nights.</p>
<h4>The Million Officials</h4>
<p>The Million Officials, also called Officers, were agents of the Celestial Empire and Bureaucracy. Many were spirit creatures and dragons; most dragons of the east were officials in the Bureaucracy. At the behest of the Celestial Emperor, they carried out his orders, bestowed rewards on the good and punishments on the evil, and filed annual reports on their work. Most were loyal and dependable, but a few could be inept, insubordinate, or outright corrupt, but these were inevitably found out and sacked by the Emperor.</p>
<p>The duties of he dragons are as follows:</p>
<ul>
	<li>Chiang Lung: serves as guardians of lakes and rives and brings rain.</li>
	<li>Li Lung: controls the powers of the earth.</li>
	<li>Lung Wang: serves as aides to the Sea Lords and as guardians of sea creatures.</li>
	<li>Pan Lung: serves as guardians of hidden places.</li>
	<li>Shen Lung: serves as aides to Chiang Lung.</li>
	<li>T'ien Lung: controls the weather (not including rain).</li>
	<li>Tun mi Lung: unleashes ocean storms.</li>
</ul>
<p>The Yu Lung has no official position in the Bureaucracy. As a result, humans give them no offerings or worship.</p>
<p>For example, the chiang lung worked for the Ministry of Thunder, which in turn answered to the Celestial Empire. The chiang lung were the lords and guardians of lakes and rivers; every such body of water was the jurisdiction of a single chiang lung, but they rarely showed themselves to humans outside their jurisdiction. They had the duties of making or bringing rain and managing water flows, and were responsible to the Bureaucracy for the denizens of the water within their jurisdictions.</p>
<p>The tun mi lung, meanwhile, were charged with causing hurricanes and typhoons, which caused much destruction in coastal lands. They could only do so on the orders of the Bureaucracy, but enjoyed their jobs far too much, forgetting their plans and unleashing devastating storms in spite and cruelty. The Celestial Emperor himself found it hard to rein these powerful dragons in and punish them.</p>
<h4>Ancestors</h4>
<p>The Ancestors are the spirits of the worthy deceased who has been granted entry to Heaven. There, they always have delicious food and fine clothing, and enjoy eternal lives without pain, weakness, or suffering. They have the responsibility of giving advice to their still-living descendants. Each have a secret name they told only to their most trusted child, which they can use to summon their parent to seek their wisdom.</p>
<h4>Sages</h4>
<p>A Sage (or \"Buddha\", as they were known in Tabot) was a spirit who'd lived a life of boundless merit, purity, and resolve, with the sole goal of attaining perfection and becoming one with the will of Heaven, to become Heaven itself. They came from all classes of society, from any race or kind. Sages were allowed to walk beside the Lesser Immortals, but they were not yet granted godly powers or Immortality, not until they\'d achieved in death the greatness they\'d not yet achieved in life. However, some great people were considered Sages while they still lived, and they wandered the Red Earth, dispensing their wisdom and teaching others through example. When they died, they were raised to the ranks of the Immortals.</p>
<p>Living or dead, Sages dowelled apart from society, as hermits in caves in the mountains or secluded spots in the jungle, where they could seek peace and simplicity and achieve an inner harmony. This gave them knowledge, wisdom, and long life (if they still lived). They also acquired mastery of elements of the material world, gaining the power to perform great feats, such as walking across hot coals, breaking swords with but a touch, and quieting typhoons and earthquakes. Sages conversed with nature spirits, could command beasts to serve them, or cause monsters to retreat. Great creatures of the Celestial Bureaucracy such as dragons sometimes sought out the counsel of Sages, or merely desired to talk with them.</p>
<h4>Others</h4>
<p>Mad Monkey was a mischievous demigod who stood completely outside the Celestial Bureaucracy. This enabled him to operate as a free agent, even to act to solve a problem when the Bureaucracy could not or when it had failed. He was fundamental to the Bureaucracy, though none up to and including the Emperor would say so much.</p>
<h3>Activities</h3>
<p>At the beginning of the New Year, the Celestial Emperor called his Great Court to an audience before the Jade Throne, and every one of the Million Officials gave reports on their work, their successes and failures, and even their misdeeds, as the Celestial One saw through any deception. These reports were examined by magistrates and officials, and, with each report, the Celestial Emperor gave his judgment, reward, or punishment, as appropriate. Rogue officials, those who\d proved incapable, corrupt, or ill-behaved, were formally devested of their position and powers and sent to the Underworld. Others were then appointed in their place.</p>
<p>When a dragon was newly appointed to the Celestial Bureaucracy, the news was conveyed to mortal humans via dreams announcing the name of the new dragon official and the date on which they commenced their duties. Mortal humans held ceremonies and banquets of offerings in order to please them and gain their favor.</p>
<h3>Worship</h3>
<p>In Kara-Tur, belief in the Celestial Empire was very strong. The Celestial Emperor had appointed each of his Immortals to oversee all the relevant matters, and humans were expected to call to the appropriate Immortal. He had also organized the Celestial Court to handle trivial matters like speaking with humans. No one prayed directly to the Emperor; daring to call directly to him was seen as an act of utter impudence, one that would be answered with thunder and lightning.</p>
<h3>History</h3>
<p>There had only ever been one Celestial Emperor, he had ruled the Celestial Empire since the start of the Great Cycle, since the beginning of time.</p>
<p>In the beginning, when the worlds were but newly formed and molten, the Celestial One blew his cool, misty breath—a divine wind called the kamikaze—upon the land, cooling the fires and making it fertile. Meanwhile, he had his kami, the spirits of nature, wander the land to still its upheavals. And thus was born the Red Earth, the land of Kara-Tur.</p>
<p>It wasn't long before humankind arose from the dust of this Red Earth, but they were savage, argumentative, and belligerent. The Celestial One disapproved, and wished for their lives to be a reflection of Heaven, to follow his Path of Enlightenment. To this end, he sent to the Red Earth his emissaries, the Nine Immortals, who would each teach one aspect of the Path and serve as the first emperors of Shou Lung. He caused red lightning to inscribe the precepts of the Path into the sheer granite of the Cliffs of Tanghai along the Hungtse River, so that people would never forget them.</p>
<p>It was believed the Celestial Emperor and the Nine Immortals would remain in their exalted positions all through the Great Cycle of time and for all eternity. They would be there even when the worlds themselves ended in flames.</p>
<h3>Language</h3>
<p>The Celestial Court has a particular language, known to its dragons.</p>";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Seldarine';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Morndinsamman';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = "Yondalla's Children";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Gnome';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Dark Seldarine';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Orc';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Goblin';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Kobold';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Draconic';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'The Ordning';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Elemental';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Asathalfinare';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Monstrous';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Demonic';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'The Lords of the Nine';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Yugoloth Lord';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Slaad Lord';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Modron';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'The Celestial Hebdomad';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'Talsid and the Five Companions';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon       = new Pantheon;
        $pantheon->name = 'The Court of Stars';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $app            = app();
        $app->pantheons = $pantheons;
    }
}
