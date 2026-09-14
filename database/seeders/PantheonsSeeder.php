<?php

namespace Database\Seeders;

use App\Models\Pantheon;
use App\Enums\Pantheon as PantheonEnum;
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

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Faeruneon->value;
        $pantheon->description = "<p>The Faerûnian pantheon is the vast and diverse collection of deities worshipped across the continent of Faerûn on the world of Toril. It is one of the largest and most complex pantheons in the known multiverse, encompassing gods of every alignment, domain, and philosophy.</p>
<p>Unlike more structured pantheons, the Faerûnian gods do not form a single unified hierarchy. They are bound instead by the rules set forth after the Time of Troubles — a cataclysmic period in which the gods were cast down to walk the earth as mortals — which forbid them from directly intervening in mortal affairs without avatars. Each deity maintains a portfolio of concerns, and their power waxes or wanes with the devotion of their mortal worshippers.</p>
<p>Prominent among the Faerûnian deities are Mystra, goddess of magic; Tempus, god of war; Tyr, god of justice; Sune, goddess of love and beauty; and Cyric, the mad god of lies. The pantheon spans the full breadth of mortal experience, ensuring that virtually every aspect of life in Faerûn falls under some deity's watchful gaze.</p>";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Mulhorandi->value;
        $pantheon->description = '<p>The Mulhorandi pantheon is the ancient collection of deities worshipped in Mulhorand, a powerful empire in the eastern reaches of Faerûn. These gods are divine manifestations of the Egyptian deities brought to Toril millennia ago by refugees from another world, and they bear strong resemblance to the gods of ancient Egypt.</p>
<p>Unlike the Faerûnian gods, the Mulhorandi deities once walked openly among their worshippers, ruling as god-kings through mortal avatars called the Incarnations. This direct presence shaped Mulhorandi society into a rigid theocracy, where the pharaoh was considered a living vessel of divine will.</p>
<p>Key deities include Re, the sun god and ruler of the pantheon; Osiris, god of the dead and judge of souls; Isis, goddess of magic and motherhood; Horus-Re, god of the sky and vengeance; Set, god of darkness and treachery; and Thoth, god of knowledge and scribes. Their worship is elaborate and ceremonial, rooted in ancient ritual preserved across thousands of years.</p>';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Untheric->value;
        $pantheon->description = "<p>The Untheric pantheon comprises the gods of the ancient empire of Unther, a once-mighty civilization in the eastern Faerûn that, like Mulhorand, traces its divine heritage to refugees from another world. The Untheric gods are analogues of the deities of ancient Babylon and Sumeria, brought to Toril in the distant past.</p>
<p>Unther was long ruled by its god-kings, divine avatars who sat upon the Burning Throne. The most infamous of these rulers was Gilgeam, the God-King of Unther, a tyrannical deity of war and dominion who held his people under an iron fist for centuries. His oppressive reign ended during the Time of Troubles, when he was slain by Tiamat in her avatar form.</p>
<p>The collapse of Gilgeam's rule sent the Untheric pantheon into disarray. Many of its gods were slain or cast out during the upheavals of the Untheric-Mulhorandi wars and the Time of Troubles, leaving the faith fragmented. The survivors are now worshipped by scattered communities clinging to ancient traditions amid the ruins of a fallen empire.</p>";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Maztican->value;
        $pantheon->description = '<p>The Maztican pantheon is the collection of gods venerated in Maztica, a distant continent across the Trackless Sea from Faerûn. Maztica is a land of towering pyramids, lush jungles, and warrior cultures whose entire civilization is built around the demands of these fierce and hungry deities.</p>
<p>The gods of Maztica are sustained by blood — specifically the blood and hearts offered in sacrifice. Without these offerings, the Maztican faithful believe the gods would grow weak and the sun itself would fail to rise. This belief drives a culture of ritualized warfare known as the Flowery War, conducted not for conquest but to capture living sacrifices for the temple altars.</p>
<p>Chief among the Maztican gods is Qotal, the Plumed Serpent, a god of peace, light, and creation who long ago departed the mortal realm in sorrow at the bloodshed done in divine names. His opposite is Zaltec, the Destroyer, god of war and sacrifice, who demands constant blood to stave off cosmic ruin. Other gods govern rain, maize, death, and the underworld, forming a pantheon deeply entwined with the cycles of nature and agriculture.</p>';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::AlQadim->value;
        $pantheon->description = '<p>The divine tradition of Zakhara, the Land of Fate, is unlike any other pantheon in the known world. Rather than a collection of competing deities, Zakharan faith is unified around a single divine principle: Enlightenment, the wisdom handed down by the Loregiver through the Law of the Pantheon. The Zakharans revere a group of gods collectively, without elevating any single one above the rest.</p>
<p>The gods of Zakhara — among them Hakiyah of the Sea Breeze, Jisan of the Floods, Kor the Wyrm Deity, Najm the Adventurous, and Selan the Moonlit Lady — each embody a facet of mortal life and natural forces. Worship is communal and egalitarian, focused on submission to divine will rather than on priestly hierarchy or blood rites.</p>
<p>Zakharans hold that all enlightened peoples worship the same gods, merely under different names, and that the great sin is not heresy but ignorance. Priests are expected to be learned scholars as much as spiritual guides, and the great mosques of Zakhara serve as centers of education, law, and community as much as places of worship.</p>';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::CelestialEmpire->value;
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

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Seldarine->value;
        $pantheon->description = '<p>The Seldarine, meaning "fellowship of brothers and sisters of the wood" in Elvish, is the pantheon of the elven gods. It is presided over by Corellon Larethian, the Coronal of Arvandor and creator of the elven race, who shaped the first elves from his own blood shed in eternal battle with Gruumsh, the orc god.</p>
<p>The Seldarine make their home in Arvandor, a realm of breathtaking beauty on the plane of Arborea, where silver trees stretch toward eternal twilight and music drifts through crystalline air. The gods of the Seldarine are deeply tied to art, magic, nature, and the stars — all things the elven people hold sacred.</p>
<p>Among the Seldarine are Sehanine Moonbow, goddess of the moon and elven mysticism; Aerdrie Faenya, goddess of the sky and air; Hanali Celanil, goddess of love and beauty; Labelas Enoreth, god of time and longevity; Rillifane Rallathil, god of the woodlands; Solonor Thelandira, god of hunting; and Erevan Ilesere, the trickster. Together they watch over all elves, from the high elves of great cities to the wood elves of ancient forests.</p>';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Morndinsamman->value;
        $pantheon->description = "<p>The Morndinsamman is the dwarven pantheon, a tight-knit assembly of gods who reflect the industrious, honor-bound, and stubborn nature of their worshippers. The name means \"shield brothers on high\" in Dwarvish, emphasizing the protective and communal bonds that define both the gods and the dwarven people.</p>
<p>Moradin, the Soul Forger, stands at the head of the pantheon. He is said to have forged the first dwarves from metals and gems at the heart of the world, breathing life into them with a divine bellows blast. His teachings — hard work, clan loyalty, respect for tradition, and mastery of craft — form the backbone of dwarven culture.</p>
<p>Other members include Dumathoin, Keeper of Secrets under the Mountain; Clangeddin Silverbeard, Father of Battle; Vergadain, the Merchant King; Berronar Truesilver, goddess of hearth and clan; Dugmaren Brightmantle, god of invention; Muamman Duathal, patron of wandering dwarves; and Abbathor, the treacherous god of greed who lurks at the pantheon's edge. Together they govern every facet of dwarven life, from the forge to the battlefield to the grave.</p>";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::YondallasChildren->value;
        $pantheon->description = "<p>Yondalla's Children is the halfling pantheon, named for Yondalla, the Blessed One and Protector of Halflings — the mother goddess who created the halfling race and bound them to her care. The pantheon reflects the halfling character: warm, home-loving, lucky, and quietly tenacious beneath a cheerful surface.</p>
<p>Yondalla herself embodies the hearth, community, protection, and plenty. She is depicted as a sturdy halfling woman with a shield and cornucopia, and her teachings emphasize the importance of family, community, and the simple joys of a well-tended home and a full table. She also has a secret aspect, Dallah Thaun, who represents the cunning and secretive side of halfling nature.</p>
<p>Other deities in the pantheon include Arvoreen, the Defender, god of halfling warriors and territorial protection; Brandobaris, the Irrepressible Scamp and god of stealth and adventure; Cyrrollalee, goddess of hearth and trust; Sheela Peryroyl, the Green Sister, goddess of nature and weather; Urogalan, the He Who Must Be, god of death and the earth; and Tymora, who while part of the broader Faerûnian faith is especially beloved by halflings.</p>";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Gnome->value;
        $pantheon->description = '<p>The gnomish pantheon is a lively and inventive collection of deities who embody the curiosity, humor, craftsmanship, and love of illusion that define the gnomish people. Unlike the solemn pantheons of dwarves or elves, the gnomish gods are known for their playfulness — even their most serious members have a twinkle in their eye.</p>
<p>Garl Glittergold, the Joker, leads the pantheon. A god of trickery, gemcutting, and protection, he is revered as the creator of the gnomish race and the one who watches over them with a warm and mischievous humor. His greatest act of legend was collapsing a mountain on a sleeping dragon to protect a gnomish community — a story told and retold with great relish at every gnomish hearth.</p>
<p>Other gnomish deities include Baervan Wildwanderer, god of forests and travel; Baravar Cloakshadow, god of illusion and deception; Flandal Steelskin, god of mining and smithcraft; Gaerdal Ironhand, god of protection and vigilance; Segojan Earthcaller, god of earth and the dead; and Urdlen the Crawler Below, the dark and chaotic outcast of the pantheon who represents greed and bloodlust.</p>';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::DarkSeldarine->value;
        $pantheon->description = "<p>The Dark Seldarine is the twisted mirror of the elven Seldarine — the pantheon of gods worshipped by the drow, the dark elves who were cast into the Underdark ages ago for their transgressions against Corellon Larethian. Where the Seldarine exalts beauty, harmony, and the light of stars, the Dark Seldarine thrives on cruelty, scheming, and the absolute darkness of the deep earth.</p>
<p>Lolth, the Spider Queen, dominates the pantheon with an iron fist and eight chitinous legs. She is a goddess of spiders, chaos, and darkness who demands absolute obedience — and repays it with treachery. Her doctrine of constant conflict and the subjugation of males has shaped drow society into a brutal matriarchy where priestesses hold supreme power and survival depends on one's ability to scheme and betray.</p>
<p>Other members include Vhaeraun, the Masked Lord, god of thievery and drow males who chafe under Lolth's rule; Eilistraee, the Dark Maiden, a rare goddess of goodness who calls drow back to the surface under moonlight; Kiaransalee, the Revenancer, goddess of undeath and vengeance; Selvetarm, Champion of Lolth; and Ghaunadaur, the Elder Eye, an ancient and alien deity of slimes and aberrations who accepts any worshipper no matter how wretched.</p>";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Orc->value;
        $pantheon->description = "<p>The orc pantheon is a brutal and warlike collection of deities who reflect the savage nature of orcish society. Orcs worship gods of conquest, carnage, and survival, their faith as harsh as the blasted wastelands and cold mountains they call home.</p>
<p>Gruumsh One-Eye stands supreme over all orc gods. The greatest enemy of Corellon Larethian, Gruumsh lost his left eye in their primordial struggle — though orcs insist it was Corellon who was blinded instead. Gruumsh commands his followers to conquer, destroy, and take what they need from weaker races. He is the embodiment of relentless aggression, and orc warlords invoke his name before every battle.</p>
<p>Other orc deities include Bahgtru, son of Gruumsh and god of brute strength; Ilneval, the Horde Leader and god of war strategy; Luthic, the Cave Mother and Gruumsh's consort, goddess of caverns, fertility, and healing — one of the few female figures in the violent pantheon; Shargaas, the Night Lord, god of darkness and thieves; and Yurtrus, the White-Handed, silent god of death and disease.</p>";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Goblin->value;
        $pantheon->description = '<p>The goblin pantheon is dominated by Maglubiyet, the Mighty One and the Lord of Depths — a fierce, axe-wielding deity who conquered the original goblin and hobgoblin gods and forced the survivors to serve under him. Maglubiyet rules his divine domain with the same iron discipline he demands his followers impose on every goblin tribe.</p>
<p>Goblin faith under Maglubiyet emphasizes war, conquest, and strict hierarchy. Hobgoblins in particular have taken his martial doctrine to heart, building legions and fortresses in his honor. Goblins and bugbears follow his tenets in rougher fashion, raiding and pillaging in his name.</p>
<p>Surviving members of the goblin pantheon who now serve Maglubiyet include Nomog-Geaya, the hobgoblin god of authority and war; Bargrivyek, the Peacekeeper, a hobgoblin deity who manages inter-tribal relations among goblinoids; and Khurgorbaeyag, god of slavery and oppression who takes special delight in the suffering of the weak. The pantheon is one of brutal subjugation, both of outsiders and of the goblins themselves.</p>';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Kobold->value;
        $pantheon->description = "<p>The kobold pantheon centers on Kurtulmak, the Gnome Hater — a spiteful and cunning deity who embodies the paranoia, industriousness, and resentment that defines kobold culture. Kurtulmak was once a servant of Tiamat who was tricked and imprisoned within a maze by the gnomish trickster god Garl Glittergold, and he has never forgiven gnomekind for this humiliation.</p>
<p>Kobolds worship Kurtulmak with fervent devotion, seeing in him a reflection of their own lot: small, overlooked, and constantly threatened by larger creatures, yet possessed of a cunning and a stubborn will to survive. His teachings encourage trap-setting, tunneling, guerrilla warfare, and a deep distrust of all non-kobolds — especially gnomes.</p>
<p>Beside Kurtulmak stands Gaknulak, a lesser kobold deity of stealth, trickery, and traps, who serves as a more accessible patron for the kobold trappers and sneaks who make up so much of any tribe's fighting force. Together the two gods reinforce a culture that compensates for physical weakness with ingenuity, numbers, and an endless willingness to dig.</p>";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Draconic->value;
        $pantheon->description = '<p>The draconic pantheon is the assembly of gods revered by dragonkind — ancient, proud, and immensely powerful beings who see divinity as their birthright. At its heart lies the eternal war between Bahamut, the Platinum Dragon, and Tiamat, the Queen of Evil Dragons, a conflict that mirrors the fundamental division of dragonkind between metallic and chromatic.</p>
<p>Bahamut, the King of Good Dragons, is a deity of justice, honor, and protection. He dwells in a magnificent floating palace in the Seven Heavens and is served by seven great gold wyrms who take the form of old human men. He demands that his followers uphold justice, show mercy to the innocent, and oppose evil without compromise. Metallic dragons — gold, silver, bronze, copper, and brass — revere him above all.</p>
<p>Tiamat, the Chromatic Dragon and Queen of Evil, rules Avernus, the first layer of the Nine Hells. She is a five-headed goddess, each head representing one of the five chromatic dragon types. Her creed is simple: acquire, dominate, and destroy. Chromatic dragons — red, blue, green, black, and white — pay her homage, though few truly love her, for she is as treacherous to her own as she is to her enemies. Between these two titans, other draconic powers such as Io, the Concordant Dragon, are said to have existed before the great schism divided dragonkind.</p>';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::TheOrdning->value;
        $pantheon->description = '<p>The Ordning is the divine and social order of the giant races, handed down by Annam All-Father, the patriarch of the giant pantheon. Annam created the giants in the earliest ages of the world and established a strict hierarchy — the Ordning — that ranks all giant-kind from the most exalted storm giants down to the humble hill giants, with each type assigned a place and purpose.</p>
<p>Annam himself is an aloof and distant deity who turned away from giantkind after his children failed to live up to his vision of a great empire. He refuses all worship until a giant hero proves worthy of reclaiming giant glory. In his absence, his divine children — the gods of specific giant types — hold the pantheon together.</p>
<p>These include Stronmaus, god of storm giants and the sky; Memnor, god of cloud giants and pride; Skoraeus Stonebones, god of stone giants and art; Thrym, god of frost giants and cold; Surtr, god of fire giants and smithcraft; and Grolantor, the least of the giant gods, patron of hill giants and dimwittedness. The divine tension between these siblings mirrors the fierce rivalries between their mortal followers, each giant type striving to prove itself highest in the eternal Ordning.</p>';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Elemental->value;
        $pantheon->description = '';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Asathalfinare->value;
        $pantheon->description = '';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Monstrous->value;
        $pantheon->description = '<p>The Monstrous pantheon is a loose grouping of deities worshipped by various creature races that do not fall neatly into the other established pantheons. These are the gods of gnolls, yuan-ti, lizardfolk, bugbears, ogres, and countless other monstrous peoples who populate the darker corners of the world.</p>
<p>Prominent among these powers is Yeenoghu, the Gnoll Lord and Beast of Butchery — a demon lord rather than a true deity, but worshipped as a god by the savage gnoll race. Lizardfolk venerate Semuanya, a dispassionate deity concerned only with survival and reproduction. The yuan-ti worship Merrshaulk, a great serpent god who has fallen into a deep slumber, with the more ambitious among them seeking to complete their transformation into divine serpents themselves.</p>
<p>What unifies the Monstrous pantheon is not theology but ecology: these are deities of survival, predation, and brutal pragmatism. Their faiths demand little philosophical reflection and much physical devotion — blood, conquest, and the relentless drive to feed and multiply. The gods of monsters watch over creatures that the civilized world would rather not think about.</p>';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Demonic->value;
        $pantheon->description = "<p>The Demonic pantheon encompasses the demon lords — immensely powerful beings of the Abyss who have transcended the chaotic mass of demonkind to claim divine-level power and worshippers across the planes. The Abyss is an infinite realm of chaos and evil, and its lords are as varied and terrible as its endless layers.</p>
<p>Demogorgon, the Prince of Demons, stands above all others — a two-headed monstrosity of primal chaos and savage violence who rules the 88th layer of the Abyss, a realm called the Gaping Maw. Orcus, the Prince of Undeath, commands legions of undead from his layer of Thanatos and seeks to fill all of creation with death. Graz'zt, the Dark Prince, rules with seductive cunning from triple-tiered Azzagrat, manipulating mortals and demons alike with silver-tongued treachery.</p>
<p>Other demon lords include Juiblex, the Faceless Lord of slimes and oozes; Yeenoghu, the Gnoll Lord of savagery; Zuggtmoy, the Lady of Fungi and decay; Baphomet, the Prince of Beasts and lord of minotaurs; and Fraz-Urb'luu, the Prince of Deception. Each commands cults of mortal worshippers who offer souls in exchange for dark power, and each plots endlessly against rivals in a war that has raged since the first age of creation.</p>";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::TheLordsOfTheNine->value;
        $pantheon->description = "<p>The Lords of the Nine — also called the Archdevils or the Rulers of Hell — are the supreme powers of Baator, the Nine Hells. Each commands one of the nine infernal layers, ruling over vast legions of devils in a rigidly hierarchical empire of law and evil. Their power rivals that of true deities, and many mortals worship them as gods.</p>
<p>Asmodeus, the Lord of the Ninth and King of Hell, sits upon the Serpent Throne in Nessus and holds dominion over all the others. Cunning beyond measure, he orchestrated the very rules that bind the Nine Hells together through the infamous Pact Primeval — a contract with the gods themselves that legitimized devil-kind's existence as the enforcers of divine law. His power comes not from chaos but from order turned merciless.</p>
<p>Below him rule Bel in Avernus, Dispater in Dis, Mammon in Minauros, the twin lords Fierna and Belial in Phlegethos, Levistus in Stygia, Glasya in Malbolge, Baalzebul in Maladomini, and Mephistopheles in Cania. Each schemes endlessly against Asmodeus and each other, though none dare openly rebel. The Nine Hells are a place of contracts, hierarchy, and the patient corruption of mortal souls.</p>";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::YugolothLords->value;
        $pantheon->description = '<p>The Yugoloth Lords are the supreme powers of the yugoloths — also called daemons — the neutral evil fiends who dwell primarily on the Gray Waste of Hades and the volcanic plains of Gehenna. Unlike devils bound by law or demons consumed by chaos, yugoloths serve only themselves, selling their considerable martial talents to both sides of the Blood War between devils and demons for their own inscrutable ends.</p>
<p>The General of Gehenna is the supreme leader of yugoloth-kind — a title fought over by the most powerful altroloths — who maintains the mythical Books of Keeping, ledgers that record the true names of every yugoloth in existence. Control of the Books means control of yugoloth-kind itself, and possession of them has changed hands through assassination and treachery countless times.</p>
<p>Other powerful yugoloth entities include the Night Hags, who traffic in souls across the lower planes, and the Oinoloths, who govern the plague-spreading aspects of yugoloth power. Unlike the elaborate pantheons of devils and demons, yugoloth leadership is fluid and violent — built on mercenary contract, betrayal, and the accumulation of true names. Their ultimate goal, whispered among fiendologists, is nothing less than the defeat of both devils and demons, leaving the yugoloths as the sole masters of the lower planes.</p>';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::SlaadLords->value;
        $pantheon->description = '<p>The Slaad Lords are the most powerful beings among the slaadi — chaotic and frog-like creatures native to Limbo, the plane of pure chaos. Where most slaadi are mindless engines of entropic violence, the Slaad Lords have ascended to semi-divine status through sheer force of chaos, becoming near-unique entities who embody specific aspects of disorder.</p>
<p>Ssendam, the Lord of Madness, is the most ancient and powerful of the Slaad Lords — a golden, amoeba-like creature that can shape itself into any form. She embodies the incoherent madness that pure chaos produces in minds not built to withstand it, and her influence drives slaadi and mortals alike to irreversible insanity. Ygorl, Lord of Entropy, is her near-equal — a skeletal slaad riding a brass sphere, wielding a scythe that represents the gradual running-down of all things.</p>
<p>Other Slaad Lords include Rennbuu, Lord of Colors, who governs the chaotic spectrum of chromatic energies in Limbo; and Chourst, Lord of Randomness. The Slaad Lords have no unified agenda or worship structure — even their followers approach them erratically — but they serve as anchors of identity in a plane that has none, making them the closest thing to gods that pure chaos is willing to produce.</p>';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::Modron->value;
        $pantheon->description = "<p>The Modrons are not a pantheon in the traditional sense but a vast hierarchy of lawful neutral beings who serve Primus, the One and the Prime — the supreme ruler of Mechanus and the living embodiment of absolute order. Primus is a being of such perfect law that it borders on divinity; its existence defines the nature of the plane it inhabits and the race it commands.</p>
<p>Mechanus is a plane of enormous interlocking gears that grind in perfect synchrony, an environment shaped entirely by Primus's will into an engine of pure mathematical law. Every modron — from the simple monodrones at the bottom to the quadrones, pentadrones, and the mysterious hierarch modrons at the top — occupies an exact position in a pyramid of authority. Each knows only what it needs to know for its function, communicates only with those immediately above and below it in the hierarchy, and obeys without question.</p>
<p>Primus itself is rarely perceived directly; it communicates through the secundi, the highest hierarch modrons, who interpret and relay the supreme will. Once every 289 years, Primus initiates the Great Modron March — a massive procession of modrons across the Outer Planes — for reasons known only to itself. Should Primus ever be destroyed, a secundi immediately ascends to replace it, maintaining the perfect continuity of absolute order.</p>";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::TheCelestialHebdomad->value;
        $pantheon->description = "<p>The Celestial Hebdomad is the council of seven powerful archons who rule the seven layers of Mount Celestia — also called the Seven Heavens — the pinnacle of lawful good existence in the outer planes. These are beings of immense righteousness and power who serve the gods of good as stewards of the most perfectly ordered good-aligned realm in the cosmos.</p>
<p>The seven layers of Mount Celestia ascend ever higher toward a purity of light and goodness that overwhelms all shadow: Lunia the Silver Heaven; Mercuria the Golden Heaven; Venya the Pearly Heaven; Solania the Crystal Heaven; Mertion the Platinum Heaven; Jovar the Glittering Heaven; and Chronias the Illuminated, whose light is so overwhelming that any evil creature dissolving instantly upon entry, and even neutral beings struggle to survive.</p>
<p>The Hebdomad includes the solar archon Zaphkiel, the ruling lord of the plane, along with Domiel, Erathaol, Pistis Sophia, Raziel, Sealtiel, and Zaphkiel's consort. They serve as the ultimate arbiters of celestial justice and the champions of lawful good deities from Tyr to Torm to Ilmater. Many paladins and clerics of lawful good faiths aspire one day to earn a place in Celestia's radiant halls.</p>";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::TalsidAndTheFiveCompanions->value;
        $pantheon->description = "<p>Talsid and the Five Companions are the divine rulers of Elysium's layers and the guardians of neutral good celestial existence. Talsid, the Prince of Hell (a title referring to holy fire, not the infernal plane), is the greatest of the guardinals — celestial beings who resemble noble animals and embody the free, unrestrained expression of goodness.</p>
<p>The guardinals live and travel in Elysium, the four-layered plane of pure good and gentle beauty: Amoria, a land of rolling meadows and clear rivers; Eronia, wilder highlands; Belierin, marshlands of subtle wonder; and Thalasia, an ocean of perfect peace. Unlike the regimented heavens of Celestia, Elysium values individual goodness over ordered law — beings come here to simply be good, not to serve a hierarchy.</p>
<p>The Five Companions are the greatest guardinal lords beneath Talsid: Bharrai the ursinal, Kharash the lupinal, Manath the equinal, Sathia the avoral, and Talsid's own consort. Together they wander Elysium and the planes of good, protecting the innocent and opposing evil wherever they find it — not from duty, but from simple love of what is right. Many neutral good deities such as Eldath and Lliira draw upon Elysium's gentle power.</p>";
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $pantheon              = new Pantheon;
        $pantheon->name        = PantheonEnum::TheCourtOfStars->value;
        $pantheon->description = '<p>The Court of Stars is the divine court of the archfey — the most ancient and powerful of the fey who dwell in the Feywild, the echo plane of primal nature and wild magic that mirrors the mortal world in a state of eternal, heightened beauty and danger. The Court governs the politics of the fey and, by extension, shapes the nature of the Feywild itself.</p>
<p>The Court is divided into two great factions: the Summer Court, also called the Seelie Court, ruled by Titania, the Summer Queen — a being of breathtaking power and capricious warmth who embodies the bounty and brilliance of summer; and the Gloaming Court, also called the Unseelie Court, ruled by the Queen of Air and Darkness — a nameless, faceless being of cold void who was once a consort of Titania before some ancient betrayal stripped her of name, form, and warmth.</p>
<p>Other great archfey of the Court include the Prince of Frost, the eternal mourner; Hyrsam the Prince of Fools, the first satyr and lord of revelry; Oberon, the Green Lord of the wild hunt; and the Witch-Queen Baba Yaga, who stands apart from both Courts and answers to none. The Court of Stars is a place of wonder, peril, and ancient grudges, where a careless word binds one for eternity and beauty conceals knives.</p>';
        $pantheon->save();
        $pantheons[$pantheon->name] = $pantheon;

        $app            = app();
        $app->pantheons = $pantheons;
    }
}
