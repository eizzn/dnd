<?php

namespace Database\Seeders\Races;

use App\Models\Alphabet;
use App\Models\Language;
use Illuminate\Database\Seeder;

class RacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thoras              = new Alphabet;
        $thoras->name        = 'Thorass';
        $thoras->description = '<p>An ancient near-universal language of the long-ago Realms, Thorass has fallen into extinction. It is frequently found on tombs and other ancient structures, but most relevantly is the alphabet used in many regional languages.</p>';
        $thoras->save();

        $dethek              = new Alphabet;
        $dethek->name        = 'Dethek';
        $dethek->description = '<p>The dwarven alphabet is a series of runic letters perfect for etching into an enduring surface with a chisel and hammer. The Dethek language is used to of course write the dwarven languages, and can be used to render Common and a handful of other tongues as well. It has drifted into use by a number of southern Faerunian regional languages thanks to the influence of gold dwarven traders and the dwarves of the Earthfast Mountains.</p>';
        $dethek->save();

        $espruar              = new Alphabet;
        $espruar->name        = 'Espruar';
        $espruar->description = '<p>The swirling, artistic alphabet of the silver elves is half communication and half decoration. It can be used to write any of the elven languages, as well as Common and most regional languages.</p>';
        $espruar->save();

        $han              = new Alphabet;
        $han->name        = 'Han';
        $han->description = '<p>Calligraphic ideograph language, used in Koryo, Kozakura, and Wa.</p>';
        $han->save();

        $shou              = new Alphabet;
        $shou->name        = 'Shou Chiang';
        $shou->description = '<p>Calligraphic ideograph language, used in Kara-Tur.</p>';
        $shou->save();

        $high              = new Alphabet;
        $high->name        = 'High Tongue';
        $high->description = '<p>Arcane Spellcasters Only; Automatic. An ancient language now deeply fragmented and incomplete, the High Tongue is the language of arcane spellcasting. Those who wield such power automatically know it, as part of their immersion in such magics, and those without it do not learn it save in rare instances (see "Auld Wyrmish").</p>';
        $high->save();

        $ruathlek              = new Alphabet;
        $ruathlek->name        = 'Ruathlek';
        $ruathlek->description = '<p>A sigil-based language of illusionists derived from High Tongue, Ruathlek can be used for both magical notation and normal communication; indeed, it is often used to disguise magical writings as something mundane.</p>';
        $ruathlek->save();

        $draconic              = new Alphabet;
        $draconic->name        = 'Draconic';
        $draconic->description = '<p>A written language derived from the High Tongue, no one knows who truly innovated this written script. It is best known for its use among dragons, however, and so it bears their name. It is a jagged, runic language equally easily carved by the talons of dragons or painted with fine calligraphic brushes. Draconic is more common in the South, where fine painted calligraphic excellence is treasured.</p>';
        $draconic->save();

        $celestial              = new Alphabet;
        $celestial->name        = 'Celestial';
        $celestial->description = '<p>This language is primarily symbolic in expression, relying on hieroglyphic-like images to communicate thier meaning. Though they are derived from the languages of angels, it is much debased fromt he Supernal language used by the gods.</p>';
        $celestial->save();

        $infernal              = new Alphabet;
        $infernal->name        = 'Infernal';
        $infernal->description = '<p>This language is primarily symbolic in expression, relying on hieroglyphic-like images to communicate their meaning.</p>';
        $infernal->save();

        $modron              = new Alphabet;
        $modron->name        = 'Modroni';
        $modron->description = '<p>This language is primarily symbolic in expression, relying on hieroglyphic-like images to communicate their meaning.</p>';
        $modron->save();

        $dead              = new Alphabet;
        $dead->name        = 'Dead';
        $dead->description = '<p>The language is dead and the alphabet is long lost.</p>';
        $dead->save();

        $midani              = new Alphabet;
        $midani->name        = 'Midani';
        $midani->description = '<p>The alphabet used in Zakhara</p>';
        $midani->save();

        $nexalan              = new Alphabet;
        $nexalan->name        = 'Nexalan';
        $nexalan->description = '<p>The alphabet used in Maztica</p>';
        $nexalan->save();

        /***************************************************************************/

        $lang              = new Language;
        $lang->name        = 'Aglarondan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $espruar->id;
        $lang->family      = 'Faerunian (Thorass, Aglarondan)';
        $lang->local       = 'Latin/Italian/French';
        $lang->speakers    = 'Aglarond, Altumbel, Chessenta, the Dragon Coast, Impiltur, Mulhorand, Rashemen, Thesk, the Vast';
        $lang->description = '<p>A regional tongue of eastern Faerun, and the official language of Aglarond. Aglarondan is a derivitive language of Thorass, and is in the same family as Turmic</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Akalan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Chessentan, Akalaic)';
        $lang->speakers    = 'Chult';
        $lang->local       = 'Greek';
        $lang->description = '<p>A minor regional language spoken on the Chultan peninsula.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Akurian';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Chessentan, Akalaic)';
        $lang->speakers    = 'Chult';
        $lang->local       = 'Greek';
        $lang->description = '<p>A regional language spoken in the southern Chultan peninsula.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Alambit';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Chessentan, Chessentic)';
        $lang->speakers    = 'Altumbel';
        $lang->local       = 'Greek';
        $lang->description = '<p>A regional language spoken by the people of Altumbel and surrounding environs.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Alarric';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Imaskari (Imaskari, Durpari)';
        $lang->local       = 'Turkish/Mongol';
        $lang->speakers    = 'Durpar/Raurin/Var the Golden/Estagund';
        $lang->description = '<p>A regional language spoken by the people of Durpar and surrounding environs.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Allesian';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Raumatheran)';
        $lang->local       = 'Greek';
        $lang->speakers    = 'Ashanath/Thesk';
        $lang->description = '<p>A regional language of Ashane and Thesk, with a number of dialects, including Ashane and Golden Allesian.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Alzhedo';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Rauric (Untheric)';
        $lang->local       = 'Babylonian/Arabic';
        $lang->speakers    = 'Amn/Chult/Calimshan/the Lake of Steam/Lapaliya/Lantan/the Nelanther Isles/the North (mostly Waterdeep, dwarves, elves and gnomes), the Shaar/Tashalar/Tethyr/Tharsult/the Western Heartlands (halflings and plane-touched)/Underdark (Old Shanatar)/the Wealdath';
        $lang->description = '<p>A regional tongue of southwest Faerun, and the main language of Calimshan. Alzhedo is derived from Untheric and is in the same family as Midani. Sages believe that it shares some traits with the language of the elemental plane of air, as well.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Andt';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Uluo, Low)';
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'Cormyr';
        $lang->description = '<p>The language of the marsh drovers in Cormyr\'s Farsea Swamp.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Auld Cormanthan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Thorass, Central)';
        $lang->local       = 'Latin/Italian/French';
        $lang->speakers    = 'The Great Dale';
        $lang->description = '<p>A regional language spoken by the folk of the Great Dale.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Bavanese';
        $lang->type        = 'Regional';
        $lang->family      = 'Kara-Tur (Island Kingdoms)';
        $lang->local       = 'Indonesian';
        $lang->speakers    = 'Bawa, the Island Kingdoms of Kara-Tur';
        $lang->description = '<p>Language spoken by the people of Bawa, of the Island Kingdoms of Kara-Tur.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Bertanese';
        $lang->type        = 'Regional';
        $lang->family      = 'Kara-Tur (Island Kingdoms)';
        $lang->local       = 'Indonesian';
        $lang->speakers    = 'Bertan';
        $lang->description = '<p>Language spoken by the people of Bawa, of the Island Kingdoms of Kara-Tur.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Bothii';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Illuski)';
        $lang->local       = 'Germanic/Scandinavian';
        $lang->speakers    = 'the North (Northern)';
        $lang->description = '<p>This is the language, related to Illuskan, spoken by the peoples of the Uthgardt and Hartsvale.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Chardic';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Uluo, Chard)';
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'Damara/Vaasa';
        $lang->description = '<p>A regional language of Damara and Vaasa.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Chessic';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Chessentan, Chessentic)';
        $lang->local       = 'Greek';
        $lang->speakers    = 'Chessenta';
        $lang->description = '<p>Language of modern Chessenta.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Chondathan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Thorass, Central)';
        $lang->local       = 'Latin/Italizn/French';
        $lang->speakers    = 'Amn/Chondath/Cormyr/the Dalelands/the Dragon Coast/(the civilized) North/Sembia/Sword Coast/Tethyr/Western Heartlands/Vilhon Reach';
        $lang->description = '<p>An immensely ubiquitous language throughout most of central and northern Faerun. Chondathan is derived from Thorass, and is related to Cormanthan and Northern.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Chuchian';
        $lang->type        = 'Regional';
        $lang->family      = 'Imaskari (Imaskari)';
        $lang->local       = 'Turkish/Mongol';
        $lang->speakers    = 'Plain of Horses/Hordelands';
        $lang->description = '<p>Language of the tribes of the Plain of Horses. Extremely precise - vagueness in terminology is considered insulting, with each place and thing having its own proper name.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Chultan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $draconic->id;
        $lang->family      = 'Chultan (Chultan)';
        $lang->local       = 'Ashanti/Zulu';
        $lang->speakers    = 'Calimshan/Chult/Lapaliiya/Nimbral/Samarch/Tashalar/Tharsult/Thindol';
        $lang->description = '<p>A regional dialect of southern Faerun, and the main language of Chult and Samarach. Tribes in the Chultan jungles often speak Tabaxi, a language related to Chultan and named for the jaguar people of those jungles.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Cormanthan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Thorass, Central)';
        $lang->local       = 'Latin/Italian/French';
        $lang->speakers    = 'Cormyr/the Dalelands/Sembia';
        $lang->description = '<p>A regional Thorass-based tongue descended from an ancient elven dialect around the forest of Cormanthyr. It has largely fallen out of favor, and is now nearly a dead language, maintained mostly by rural folk and sages. Written with Espruar originally, but mostly with Thorass today.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Cosh';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Waelan)';
        $lang->local       = 'Celtic';
        $lang->speakers    = 'Nelanther Isles';
        $lang->description = '<p>A vulgar patois made up of slang terms, euphemisms and outright degeneration of the Waelan language, used by smugglers and very rural folk in the Nelanther Isles.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = "D'Tarig";
        $lang->type        = 'Regional';
        $lang->family      = "Faerunian (Uluo, D'Tarig)";
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'Anaurock';
        $lang->description = "<p>The tribal language of the D'tarig people of southeastern Anauroch, D'Tarig is a throaty tongue that is part of the Uluo language family (along with languages such as Damaran and lost Netherese).</p>";
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Damaran';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Faerunian (Uluo, Chard)';
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'Aglarond/Altumbel/the Anauroch/Cormyr/the Dalelands/Damara/the Dragon Coast/the Great Dale/the Great Glacier/the Hordelands/Impiltur/the Moonsea/Narfell/Rashemen/the Ride/Sembia/the Sandovar/Thay/Thesk/Vaasa/the Vast/the Vilhon Reach';
        $lang->description = '<p>A regional language of northeast Faerun and the official language of the kingdom of Damara. Damaran is an old language, descended from Ulou, the precursor language of Netherese.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Deep Speech';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $espruar->id;
        $lang->speakers    = 'Aberrations/Denizens of the Underdark';
        $lang->description = '<p>Deep Speech is the language of the aberrations, an alien form of communication originating in the Far Realm. It has no native script of its own, but when written by mortals it uses the Espruar script, as it was first transcribed by the drow due to frequent contact between the two groups stemming from living in relatively close proximity within the Underdark.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Dambrathan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $espruar->id;
        $lang->family      = "Faerunian (Ssri'Tel'Quessir)";
        $lang->speakers    = 'Channath Vale/Dambrath/Halruaan/Lurien/Nimbral/the Shaar';
        $lang->description = '<p>A regional tongue of southern Faerun, and the official language of the kingdom of Dambrath.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Durpari';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Imaskari (Imaskari, Durpari)';
        $lang->local       = 'Turkish/Mongol';
        $lang->speakers    = 'Durpar/the Golden Water/Luiren/Mulhorand/Nimbral/the Shaar';
        $lang->description = '<p>A regional tongue of southeastern Faerun, and the official language of Durpar. Interestingly, it is also known by many Shou expatriates in Faerun.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Easting';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Uluo, Chard)';
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'Impiltur/the Vast';
        $lang->description = '<p>The regional language in eastern Faerun.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Erakic';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Uluo, Low)';
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'the Ride';
        $lang->description = '<p>The language of the barbarians of the Ride</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Halruaan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $draconic->id;
        $lang->family      = 'Faerunian (Uluo, Netherese)';
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'Channath Vale/Dambrath/the Golden Water/Halruaa/Lapaliiya/Nimbral/the Shaar';
        $lang->description = '<p>The official language of Halruaa and a regional language of southern Faerun. Halruaan is part of the Uluo language of families, along with Damaran and D\'tarig.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Illuskan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Illuski)';
        $lang->local       = 'Germanic/Scandinavian';
        $lang->speakers    = 'Moonshae Isles/the North (barbarians, Luskan, Mintarn)/Ruathym';
        $lang->description = '<p>A regional language that traces back to the Illusk Empire, and is largely spoken by barbarian folk and a few cities in the North, as well as the Moonshaes.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Issacortae';
        $lang->type        = 'Regional';
        $lang->family      = 'Kara-Tur (Amaesean)';
        $lang->speakers    = 'Ama Basin';
        $lang->description = '<p>Language spoken by people of the Ama Basin</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Kao te Shou';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $shou->id;
        $lang->family      = 'Kara-Tur (Shou Chiang)';
        $lang->local       = 'Chinese';
        $lang->speakers    = 'Shou Lung';
        $lang->description = '<p>The official language of the Shou Lung empire, by custom and imperial edict. Viewed as the model that all other dialects ought to strive for. Written with Shou Chiang, although may also be written with Draconic in communication with Faerûn.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Khazari';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $shou->id;
        $lang->family      = 'Kara-Tur (Shou Chiang)';
        $lang->local       = 'Chinese';
        $lang->speakers    = 'Khazari';
        $lang->description = '<p>Official language of the Khazari peoples of Kara-Tur. Written with Shou Chiang, although may also be written with Draconic in communication with Faerûn.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Koryo';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $han->id;
        $lang->family      = 'Kara-Tur (Han)';
        $lang->local       = 'Japanese/Korean';
        $lang->speakers    = 'Koryo';
        $lang->description = '<p>Han-descended language of the people of Koryo.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Kozakuran';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $han->id;
        $lang->family      = 'Kara-Tur (Han)';
        $lang->local       = 'Japanese/Korean';
        $lang->speakers    = 'Kozakura';
        $lang->description = '<p>Han-descended language spoken by Kozakurans</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Kuong';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $shou->id;
        $lang->family      = 'Kara-Tur (Malatra)';
        $lang->local       = 'Sanskrit/Hindi';
        $lang->speakers    = 'Malatra';
        $lang->description = '<p>Language of the Kuong people of Malatra, Kara-Tur. Believed to be unique and so considered specially blessed. Highly complex, following very little logic, and so difficult to learn.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Lantanese';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $draconic->id;
        $lang->family      = 'Imaskari (Imaskari, Lantanna)';
        $lang->local       = 'Turkish/Mongol';
        $lang->speakers    = 'Lantan/Nelanther Isles/Tethyr';
        $lang->description = '<p>A regional tongue of southern Faerun, and the official language of Lantan.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Laothan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $shou->id;
        $lang->family      = 'Kara-Tur (Malatra)';
        $lang->local       = 'Sanskrit/Hindi';
        $lang->speakers    = 'Laothan';
        $lang->description = '<p>Language spoken by the Laothan people of Malatra, Kara-Tur. Filled with borrow-words, especially form T\'u Lung.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Lidahan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $shou->id;
        $lang->family      = 'Kara-Tur (Wu Pi Te Shao Mountains)';
        $lang->local       = 'Filipino';
        $lang->speakers    = 'Wu Pi Te Shao Mountains';
        $lang->description = '<p>Language spoken by the people that inhabited the jungles and valleys of the Wu Pi Te Shao Mountains.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Uloushinn';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Rauric (Untheric)';
        $lang->local       = 'Babylonian/Arabic';
        $lang->speakers    = 'Anauroch';
        $lang->description = '<p>The language of the ancient homeland of the Bedine people. Written with Thorass, as they lost their original written language. Based on Midani language of Zakhara.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Mulhorandi';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $celestial->id;
        $lang->family      = 'Rauric (Mulani)';
        $lang->local       = 'Ancient Egyptian';
        $lang->speakers    = 'Chessenta/Mulhorand/Murghom/Semphark/Thay';
        $lang->description = '<p>A regional language of eastern Faerun, and the official language of both Mulhorand and Thay. Mulhorandi derives from a language family called Rauric, along with Untheric. Written with Celestial, although the Thayan dialect of Mulhorandi utilizes Infernal in its writings.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Naric';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Uluo, Low)';
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'Narfell';
        $lang->description = '<p>The regional language of the Nars people of Narfell</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Northern';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Thorass, Central)';
        $lang->local       = '';
        $lang->speakers    = 'the North';
        $lang->description = '<p>A regional language spoken mostly around the Ten Towns, Neverwinter, Waterdeep, Nesme and Llorkh. A fairly simple tongue largely going out of style, replaced by Chondathan and Common.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Pazruki';
        $lang->type        = 'Regional';
        $lang->family      = 'Kara-Tur (Amaesean)';
        $lang->speakers    = 'Pazruki';
        $lang->description = '<p>A language spoken by the Pazruki nation, in the Koryaz Mountains of Kara-Tur.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Purang';
        $lang->type        = 'Regional';
        $lang->family      = 'Kara-Tur (Malatra)';
        $lang->local       = 'Sanskrit/Hindi';
        $lang->speakers    = 'Purang';
        $lang->description = '<p>Language spoken by Purang peoples of Malatra, Kara-Tur. Has many dialects.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Rasallesian';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Raumatheran)';
        $lang->local       = 'Slavic/Russian';
        $lang->speakers    = 'Rashemen';
        $lang->description = '<p>One of several languages spoken in Rashemen.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Rashemi';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Raumtheran)';
        $lang->local       = 'Slavic/Russian';
        $lang->speakers    = 'Rashemen';
        $lang->description = '<p>An ancient language spoken almost exclusively in Rashemen.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Raurindi';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Rauric (Mulani)';
        $lang->local       = 'Slavic/Russian';
        $lang->speakers    = 'Raurin';
        $lang->description = '<p>A rare tribal language spoken by the people of the Raurin.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Reghedjic';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Illuski)';
        $lang->local       = 'Germanic/Scandinavian';
        $lang->speakers    = 'the North (Spine of the World)';
        $lang->description = '<p>A language spoken by the Reghedmen of the Icewind Dale and other lands north of the Spine of the World. It is named for the Reghed Glacier, and is related to Illuskan.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Roushoum';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Imaskari (Roushoum)';
        $lang->local       = 'Turkish/Mongol';
        $lang->speakers    = 'Raumathar';
        $lang->description = '<p>A regional language once spoken by the people of Raumathar.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Sespechian';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Chessentan, Akalaic)';
        $lang->local       = 'Greek';
        $lang->speakers    = 'Sespech/the Shining Plains';
        $lang->description = '<p>A regional language of Sespech and the Shining Plains.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Shaaran';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Faerunian (Chessentan, Akalaic)';
        $lang->local       = 'Greek';
        $lang->speakers    = 'Amn/Calimshan/Chondalwood/Chult/Dambrath/Great Rift/Halruaa/Lake of Steam/Lapaliiya/Luiren/the Nelanther Isles/Sembia/Sespech/the Shaar/Talashar/Turmish/Unther/the Vilhon Reach/the Wealdath';
        $lang->description = '<p>The dominant regional language in southern Faerun, and the dominate language in the Shaar.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Shaartan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Chessentan, Akalaic)';
        $lang->local       = 'Greek';
        $lang->speakers    = 'the Shaar/the Lake of Steam/Lapaliiya/Tharsult';
        $lang->description = '<p>A minor regional language spoken in southern Faerun</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Sossic';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Raumatheran)';
        $lang->local       = 'Slavic/Russian';
        $lang->speakers    = 'Sossal';
        $lang->description = '<p>THe language of the Sossrim peoples, related to the Rashemi</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Tabotan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $shou->id;
        $lang->family      = 'Kara-Tur (Tabot)';
        $lang->local       = 'Tibetan';
        $lang->speakers    = 'Tabot';
        $lang->description = '<p>Language of the people of Tabot, Kara-Tur.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Tashalan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Chultan';
        $lang->local       = 'Ashanti/Zulu';
        $lang->speakers    = 'Black and Mhair Jungles/Samarach/Tashalar/Thindol';
        $lang->description = '<p>The official language of the city-states of Tashalar, and hardly spoken elsewhere, Tashalan has roots in Netherese, and shares many linguistic traits with Chultan.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Telpi';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Thorass, East)';
        $lang->local       = 'Latin/Italian/French';
        $lang->speakers    = 'Dragon Coast/Pirate Isles';
        $lang->description = '<p>A regional language spoken by the peoples of the Dragon Coast and Pirate Isles, including forming the basis of the pidgin spoken on the Pirate Isles</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Tharian';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Thorass, North)';
        $lang->local       = '';
        $lang->speakers    = 'Moonsea (North and West)';
        $lang->description = '<p>A regional language spoken by the Zhentish and around Phlan, Melvaunt, Glistern and the like.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Thorass';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Thorass, Central)';
        $lang->local       = 'Latin/Italian/French';
        $lang->speakers    = 'Amn/Tethyr';
        $lang->description = '<p>A regional language descended from Auld Thorass. This language is in extensive use in Amn and Tethyr, where it has a number of various dialects (all comprehensible, if odd to the ear, to speakers of other Thorass dialects).</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Thorasta';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Thorass, Central)';
        $lang->local       = 'Latin/Italian/French';
        $lang->speakers    = 'Western Heartlands';
        $lang->description = '<p>A regional tongue spoken mostly between the Way Inn and Beregost, and Baldur\'s Gate to Hillsedge.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = "T'u Lung";
        $lang->type        = 'Regional';
        $lang->alphabet_id = $shou->id;
        $lang->family      = 'Kara-Tur (Shou Chiang)';
        $lang->local       = 'Chinese';
        $lang->speakers    = "T'u Lung";
        $lang->description = "<p>Language spoken by the people of T'u Lung in Kara-Tur. Much more regimented in its language, with different dialects for each caste of society. Written with Shou Chiang, although it may also be written with Draconic in communication with Faerun.</p>";
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Tuigan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Imaskari (Roushoum)';
        $lang->local       = 'Turkish/Mongol';
        $lang->speakers    = 'Hordelands';
        $lang->description = '<p>The common language of the tribes of the Hordelands</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Turmic';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Thorass, Turmic)';
        $lang->local       = 'Latin/Italian/French';
        $lang->speakers    = 'Turmish/Great Glacier';
        $lang->description = '<p>A relatively small-scope regional language spoken almost excusively in Turmish and the few folk on the Great Glacier.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Uloushinn';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Uluo, Low)';
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'Anauroch';
        $lang->description = '<p>One of the native tongues of the Bedine of Anauroch, a blending of their original Midani with the tongues of Netheril they found in the deserts.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Uluik';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Uluo, High)';
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'Sea of Moving Ice';
        $lang->description = '<p>A tribal language in little use save by those who originated it, the Ulutiuns and Ice Hunters of the Sea of Moving Ice.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Ulutiun';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Uluo, High)';
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'Great Glacier/Sea of Moving Ice';
        $lang->description = '<p>A tribal language used by the Ulutiun peoples of the Great Glacier and Sea of Moving Ice.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Untheric';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Rauric (Untheric)';
        $lang->local       = 'Babylonian/Arabic';
        $lang->speakers    = 'Chessenta/Unther';
        $lang->description = '<p>Untheric derives from an ancient language family called Rauric, along with Mulhorandi. Untheric was once spoken as a primary language in Chessenta, but has been relegated to a secondary language over the years, albeit one of polite society and bureaucracy.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Wa-an';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $han->id;
        $lang->family      = 'Kara-Tur (Han)';
        $lang->local       = 'Japanese/Korean';
        $lang->speakers    = 'Wa';
        $lang->description = '<p>Han-descended language spoken by people of Wa, Kara-Tur. Abundant with polite expressional and flowery terminology, with etiquette rather than grammar dictating the proper usage of many phrases. Divided into several dialects for use by differing levels of society.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Waelan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Waelan)';
        $lang->local       = 'Celtic';
        $lang->speakers    = 'Moonshae Isles';
        $lang->description = '<p>A unique, lilting tongue that shares some traits with Sylvan, as well as the language of druids</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Wu-haltai';
        $lang->type        = 'Regional';
        $lang->family      = 'Kara-Tur (Amaesean)';
        $lang->speakers    = 'Wu-haltai';
        $lang->description = '<p>A language spoken by the Wu-haltai nation, in the Ama Basin of Kara-Tur. It is distantly related to the language of the ogre magi.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Midani';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $midani->id;
        $lang->speakers    = 'Zakhara';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Nexalan';
        $lang->type        = 'Regional';
        $lang->alphabet_id = $nexalan->id;
        $lang->speakers    = 'Maztica';
        $lang->save();

        /**********************************************************************/

        $lang              = new Language;
        $lang->name        = 'Aragrakh';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $draconic->id;
        $lang->family      = 'Draconic (Wyrmish, Common)';
        $lang->speakers    = 'Dragons';
        $lang->description = '<p>Dragons. An ancient language, also known as "Old High Wyrmish", used as a formal ritual language by dragons. Woe to those who are not dragons that are overheard using it by wyrm-kind.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Auld Wyrmish';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $draconic->id;
        $lang->family      = 'Draconic (Wyrmish, Common)';
        $lang->speakers    = 'Dragons';
        $lang->description = '<p>Something of a common tongue among the different breeds of dragon, who each have their own tongues. Also sometimes called "Draconic," it is also spoken by many kobolds and wyverns.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Authlan';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Dwarven (Southern, Gold Dwarven)';
        $lang->speakers    = 'Wild Dwarves';
        $lang->description = '<p>An ancient and simplified version of Riftspeak, with noticable Authalan and Chultan influences (It is rare to find a literate wild dwarf).</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Riftspeak';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Dwarven (Southern, Gold Dwarven)';
        $lang->speakers    = 'Gold Dwarves';
        $lang->description = '<p>A truly ancient dialect favored by the dwarves of the Great Rift, who care for and nurture the speaking of this language as carefully as they care for their gold.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Shanatan';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Dwarven (Shield Dwarven)';
        $lang->speakers    = 'Shield Dwarves';
        $lang->description = '<p>The language of the western shield dwarves. Sadly, with the near-shattering of dwarven society among the shield dwarves, not many even know the language any more, and only a rare few elders who truly value such things can actually converse in it. Urdunnir dwarves speak on older version of the language.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Galenan';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Dwarven (Northern, Shield)';
        $lang->speakers    = 'Shield Dwarves';
        $lang->description = '<p>The language of the eastern shield dwarves is spoken more frequently by its people, but it is also less pure, having been heavily influenced by Damaran.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Duergan';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Dwarven (Northern, Grey)';
        $lang->speakers    = 'Duergar';
        $lang->description = '<p>Originally descended from Shanatan, this language has been deeply affected by the duergars\' time in the Underdark.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Kurit';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Dwarven (Northern, Arctic)';
        $lang->speakers    = 'Arctic Dwarves';
        $lang->description = '<p>A dwarven dialect considered much polluted by other dwarves, given the degree it has been influenced by the human Uluik language.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Seldruin';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $espruar->id;
        $lang->family      = 'Elven (Auld Elvish, Hamarfae)';
        $lang->speakers    = 'Elves';
        $lang->save();

        $lang              = new Language;
        $lang->name        = "Aril'Tel'Quessan";
        $lang->type        = 'Racial';
        $lang->alphabet_id = $espruar->id;
        $lang->family      = "Elven (Tel'Quessan, Avariel)";
        $lang->speakers    = 'Avariel Elves';
        $lang->save();

        $lang              = new Language;
        $lang->name        = "Espruar (formerly Teu'Tel'Quessan)";
        $lang->type        = 'Racial';
        $lang->alphabet_id = $espruar->id;
        $lang->family      = "Elven (Tel'Quessan, Moon)";
        $lang->speakers    = 'Moon Elves';
        $lang->save();

        $lang              = new Language;
        $lang->name        = "Alu'Tel'Quessan";
        $lang->type        = 'Racial';
        $lang->alphabet_id = $espruar->id;
        $lang->family      = "Elven (Tel'Quessan, Sea)";
        $lang->speakers    = 'Sea Elves';
        $lang->save();

        $lang              = new Language;
        $lang->name        = "Ar'Tel'Quessan";
        $lang->type        = 'Racial';
        $lang->alphabet_id = $espruar->id;
        $lang->family      = "Elven (Tel'Quessan, Sun)";
        $lang->speakers    = 'Sun Elves';
        $lang->save();

        $lang              = new Language;
        $lang->name        = "Sy'Tel'Quessan";
        $lang->type        = 'Racial';
        $lang->alphabet_id = $espruar->id;
        $lang->family      = "Elven (Tel'Quessan, Wild)";
        $lang->speakers    = 'Wild Elves';
        $lang->save();

        $lang              = new Language;
        $lang->name        = "Or'Tel'Quessan";
        $lang->type        = 'Racial';
        $lang->alphabet_id = $espruar->id;
        $lang->family      = "Elven (Tel'Quessan, Wood)";
        $lang->speakers    = 'Wood Elves';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Deep Drow';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $espruar->id;
        $lang->family      = "Elven (Ssri'Tel'Quessir)";
        $lang->speakers    = 'Drow';
        $lang->description = '<p>Also called Low Drow or Drowic, this is the common language of the drow. Each community has its own dialect, but can reasonably understand one another.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'High Drow';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $infernal->id;
        $lang->family      = "Elven (Ssri'Tel'Quessir)";
        $lang->speakers    = 'Drow';
        $lang->description = '<p>A complex language with its own runic alphabet, it is primarily used by priestesses in ritual context and nobles when they wish to communicate above the heads of the rabble.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Drow Sign Language';
        $lang->type        = 'Racial';
        $lang->family      = "Elven (Ssri'Tel'Quessir, Hand Signs)";
        $lang->speakers    = 'Drow';
        $lang->description = '<p>A hand-code capable of impressive complexity, used by drow on patrol in the Underdark, or when silence is otherwise needful or useful.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Luiric';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $espruar->id;
        $lang->family      = 'Halfling (Hinish)';
        $lang->speakers    = 'Halflings of Luiren';
        $lang->description = '<p>Considered the racial language of halflings, it is almost unheard of outside of Luiren, even by halflings themselves.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Gnim';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Gnomish';
        $lang->speakers    = 'Gnomes';
        $lang->description = '<p>A staggeringly complex language, filled with all manner of words to discuss nuances of distinction. It is a language excellent for artistic, academic and engineering pursuits; indeed, many sages across the realms consider it to be a "scholar\'s language"</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Daraktan';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Orcish';
        $lang->speakers    = 'Orcs';
        $lang->description = '<p>A common language spoken by most orcs, although not many of them are literate. It evolved from the now-dead Hulgorkyn language.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Ghukliak';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Goblin';
        $lang->speakers    = 'Goblins/Hobgoblins/Bugbears';
        $lang->description = '<p>A rough and guttural language well suited to discussing concepts of violence.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Yipyak';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $draconic->id;
        $lang->family      = 'Draconic (Debased Wyrmish, Kobold)';
        $lang->speakers    = 'Kobold';
        $lang->description = '<p>A debased form of Auld Wyrmish that serves as a common tongue for kobolds.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Sylvan';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $espruar->id;
        $lang->speakers    = 'Fey';
        $lang->description = '<p>A subtle language spoken by fey and many other sylvan creatures with close ties to such.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Jannti';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Genie';
        $lang->speakers    = 'Geniekind';
        $lang->description = '<p>The language of the janns serves as a sort of Common language for geniekind, who are notoriously suspicious about those seeking to learn their individual languages. Jannti can be written in Thorass or Draconic.</p>
<dl>
    <dt>Genie Common</dt> <dd>Jannti</dd>
    <dt>Djinnspeak</dt> <dd>Djinnti</dd>
    <dt>Efreetspeak</dt> <dd>Efreeti</dd>
    <dt>Daospeak</dt> <dd>Daoti</dd>
    <dt>Maridspeak</dt> <dd>Maridti</dd>
</dl>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Jotun';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Giant';
        $lang->speakers    = 'Giant';
        $lang->description = '<p>The giant language, called Jotun by those who speak it, is the ancient language of most giants. It is one of the oldest active languages. It is believed that the language shared some of its roots with Thorass.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Jotunalder';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Giant';
        $lang->speakers    = 'Giants';
        $lang->description = '<p>A ritualized language that is highly formalized and stilted. Those who speak Jotun can understand it well enough.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Jogishk';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Giant';
        $lang->speakers    = 'Ogres';
        $lang->description = '<p>A vulgar patois of Jotun.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Jotunhaug';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Giant';
        $lang->speakers    = 'Hill and Mountain Giants';
        $lang->description = '<p>A rough, gutteral language which seems to be a corruption of Jotunise.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Jotunild';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Giant';
        $lang->speakers    = 'Fire Giants';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Jotunise';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Giant';
        $lang->speakers    = 'Frost Giants';
        $lang->description = '<p>The predecessor language to Jotunhaug.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Jostunskye';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Giant';
        $lang->speakers    = 'Cloud and Fog Giants';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Jostunstein';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Giant';
        $lang->speakers    = 'Stone Giants';
        $lang->description = '<p>Spoken by Stone Giants, the written form is called Metamorpherie.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Jotunuvar';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Giant';
        $lang->speakers    = 'Storm Giants';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Gnoll';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $infernal->id;
        $lang->speakers    = 'Gnoll';
        $lang->description = '<p>Gnoll is not a complete language, only able to communicate basic concepts. It consists of cackling, howling, and whining sounds and often relys on gestures and facial expressions. Such words are mixed with a broken version of the Abyssal language, allowing the leaders among them to communicate more complex thoughts.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Yuan-ti';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $draconic->id;
        $lang->family      = 'Reptilian';
        $lang->speakers    = 'Yuan-ti, Ophidians, Humans of Lapaliiya, Humans of Tashalar';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Aquan';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Elemental';
        $lang->speakers    = 'Water Elementals/Aquatic Elves/Hadozee/Merfolk/Tritons';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Auran';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Elemental';
        $lang->speakers    = 'Air Elementals';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Ignan';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Elemental';
        $lang->speakers    = 'Fire Elementals';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Terran';
        $lang->type        = 'Racial';
        $lang->alphabet_id = $dethek->id;
        $lang->family      = 'Elemental';
        $lang->speakers    = 'Earth Elementals';
        $lang->save();

        /**********************************************************************/

        $lang              = new Language;
        $lang->name        = 'Abyssal';
        $lang->type        = 'Extraplanar';
        $lang->alphabet_id = $infernal->id;
        $lang->speakers    = 'Demons';
        $lang->description = '<p>A twisted, complex tongue whose words often have meanings based on the speaker\'s emotions and intentions toward the listener, Abyssal\'s linguistic emphasis is on concepts of violence and revulsion, madness and contempt for others.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Celestial';
        $lang->type        = 'Extraplanar';
        $lang->alphabet_id = $celestial->id;
        $lang->speakers    = 'Upper Planes';
        $lang->description = '<p>A transcendent tongue from which derives many languages\' words for concepts of good, purity, justice, compassion, and beneficence.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Infernal';
        $lang->type        = 'Extraplanar';
        $lang->alphabet_id = $infernal->id;
        $lang->speakers    = 'Devils';
        $lang->description = '<p>A vulgar, angry patois combining the worst of a thousand different tongues from across the multiverse, Infernal is a language of hate and domination, of invective and threat.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Modron';
        $lang->type        = 'Extraplanar';
        $lang->alphabet_id = $modron->id;
        $lang->speakers    = 'Modrons';
        $lang->description = '<p>The language spoken by the modrons. To humanoids, it sounds like a series of "clicks and whirs".</p>
<p>There is no word in the Modron language for an individual to refer to itself in the single person. A modron always refers to itself as "we" or "us".</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Slaad';
        $lang->type        = 'Extraplanar';
        $lang->alphabet_id = $draconic->id;
        $lang->speakers    = 'Slaad';
        $lang->description = '<p>The language spoken by the slaad.</p>';
        $lang->save();

        /**********************************************************************/

        $lang              = new Language;
        $lang->name        = 'Daelic';
        $lang->type        = 'Trade';
        $lang->family      = 'Faerunian (Waelan, Druidic)';
        $lang->local       = 'Celtic';
        $lang->speakers    = 'Druids (Moonshae)';
        $lang->description = '<p>The language of the druids in service to the Earthmother of the Moonshae islands is distinct from the language that other druids speak, though they do share some concepts. It is never written, a taboo to use of the language.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Drueidan';
        $lang->type        = 'Trade';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Waelan, Druidic)';
        $lang->local       = 'Celtic';
        $lang->speakers    = 'Druids';
        $lang->description = '<p>The language of druids concerns itself with natural and spiritual concepts, providing a terminology for discussing the nuances of such things missing in other tongues. Speakers of Sylvan can begin to understand such discussions to limited extent. It may be written in Thorass, Espruar or Dethek.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = "Maiden's Tongue";
        $lang->type        = 'Trade';
        $lang->alphabet_id = $thoras->id;
        $lang->family      = 'Faerunian (Thorass, Central)';
        $lang->local       = 'Celtic';
        $lang->speakers    = 'Dambrath (Priestesses of Loviatar)';
        $lang->description = '<p>The ceremonial and secret tongue of the Crintri priestesses of Loviatar in the nation of Dambrath.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Ruathlek';
        $lang->type        = 'Trade';
        $lang->alphabet_id = $ruathlek->id;
        $lang->family      = 'Faerunian (Uluo, Netherese)';
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'Illusionists/Followers of Lliira/Nimbral';
        $lang->description = '<p>An illusionist trade language used by the peoples of Nimbral. It is related to Netherese.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Shadow Cant';
        $lang->type        = 'Trade';
        $lang->family      = 'Faerunian (Thorass, Central)';
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'Shadow Thieves of Amn';
        $lang->description = '<p>Originating with the Northern language, this cant was the secret code of the Shadow Thieves of Waterdeep. When they were cast out of the city and fled to Amn, it took on some other nuances of the local language as well. Northern Cant is a dead language, for all intents and purposes.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = "Thieves' Cant";
        $lang->type        = 'Trade';
        $lang->speakers    = 'Thieves and other Underworld types';
        $lang->description = '<p>A language made up of slang, reference to previous events in the criminal world and innuendo, thieves\' cant changes from place to place, season to season. Part of knowing thieves\' cant isn\'t just knowing what to say, as this changes constantly - it is the skill to figure out how to "hook into" the local cant and use it to communicate, a process that takes about an evening\'s worth of carousing.</p>';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Zhentarim Argot';
        $lang->type        = 'Trade';
        $lang->alphabet_id = $ruathlek->id;
        $lang->family      = 'Faerunian (Thorass, North)';
        $lang->local       = 'Old Prussian/Lithuanian';
        $lang->speakers    = 'Zhentarim';
        $lang->description = '<p>The secret tongue of the Black Network. It is rarely spoken outside of Zhentarim strongholds, such as the Citadel of the Raven, Darkhold and Zhentil Keep, except by their nefarious agents meeting in secret.</p>';
        $lang->save();

        $this->call(RaceHumansSeeder::class);
        $this->call(RaceElvesSeeder::class);
        $this->call(RaceDwarvesSeeder::class);
        $this->call(RaceHalflingsSeeder::class);

        $this->call(RaceGoblinsSeeder::class);
        $this->call(RaceOrcsSeeder::class);

        $this->call(RaceMiscSeeder::class);

        $lang              = new Language;
        $lang->name        = 'Special';
        $lang->type        = 'Special';
        $lang->description = '';
        $lang->save();

        $lang              = new Language;
        $lang->name        = 'Telepathy';
        $lang->type        = 'Special';
        $lang->description = '<p>You have the ability to communicate using your mind. You can only communicate with creatures that have a INT, WIS, and CHA above 2.</p>';
        $lang->save();
    }
}
