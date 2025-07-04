<?php

namespace Database\Seeders\Races;

use App\Models\Race;
use App\Models\SubRace;
use Illuminate\Database\Seeder;

class RaceHumansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper = app()->seedHelper;

        $race              = new Race;
        $race->name        = 'Human';
        $race->age         = 'Humans reach Adulthood in their late teens and live less than a century';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '<p>In the reckonings of most worlds, humans are the youngest of the common races, late to arrive on the world scene and short-lived in comparison to dwarves, elves, and dragons. Perhaps it is because of their shorter lives that they strive to achieve as much as they can in the years they are given. Or maybe they feel they have something to prove to the elder races, and that’s why they build their mighty empires on the foundation of conquest and trade. Whatever drives them, humans are the innovators, the achievers, and the pioneers of the worlds.</p>
<h2>A Broad Spectrum</h2>
<p>With their penchant for migration and conquest, humans are more physically diverse than other common races. There is no typical human. An individual can stand from 5 feet to a little over 6 feet tall and weigh from 125 to 250 pounds. Human skin shades range from nearly black to very pale, and hair colors from black to blond (curly, kinky, or straight); males might sport facial hair that is sparse or thick. A lot of humans have a dash of nonhuman blood, revealing hints of elf, orc, or other lineages. Humans reach adulthood in their late teens and rarely live even a single century.</p>
<h2>Variety in all things</h2>
<p>Humans are the most adaptable and ambitious people among the common races. They have widely varying tastes, morals, and customs in the many different lands where they have settled. When they settle, though, they stay: they build cities to last for the ages, and great kingdoms that can persist for long centuries. An individual human might have a relatively short life span, but a human nation or culture preserves traditions with origins far beyond the reach of any single human’s memory. They live fully in the present—making them well suited to the adventuring life—but also plan for the future, striving to leave a lasting legacy. Individually and as a group, humans are adaptable opportunists, and they stay alert to changing political and social dynamics.</p>';
        $race->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>One ability score of your choice increase by +2 and all the other ability scores by +1</dd>
    <dt>Skills</dt> <dd>You gain proficiency in one Skill of your choice. You gain an additional +4 skill points at 1st level.</dd>
    <dt>Feats</dt> <dd>You gain a General Feat of your choice</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Human']);

        $subrace              = new SubRace;
        $subrace->name        = 'Calishite';
        $subrace->race_id     = $race->id;
        $subrace->description = '<p>Shorter and slighter in build than most other humans, Calishites have dusky brown skin, hair, and eyes. They’re found primarily in southwest Faerûn.</p>
<dl>
    <dt>Calishite Names:</dt> <dd>(Male) Aseir, Bardeid, Haseid, Khemed, Mehmen, Sudeiman, Zasheir; (female) Atala, Ceidil, Hama, Jasmal, Meilil, Seipora, Yasheira, Zasheida; (surnames) Basha, Dumein, Jassan, Khalid, Mostana, Pashar, Rein</dd>
</dl>';
        $subrace->regions = 'Calimshan/Amn/Tethyr';
        $helper->addTypesToSimpleObject($subrace, ['Human']);

        $subrace              = new SubRace;
        $subrace->name        = 'Chondathan';
        $subrace->race_id     = $race->id;
        $subrace->description = '<p>Chondathans are slender, tawny-skinned folk with brown hair that ranges from almost blond to almost black. Most are tall and have green or brown eyes, but these traits are hardly universal. Humans of Chondathan descent dominate the central lands of Faerûn, around the Inner Sea.</p>
<dl>
    <dt>Chondathan Names:</dt> <dd>(Male) Darvin, Dorn, Evendur, Gorstag, Grim, Helm, Malark, Morn, Randal, Stedd; (female) Arveene, Esvele, Jhessail, Kerri, Lureene, Miri, Rowan, Shandri, Tessele; (surnames) Amblecrown, Buckman, Dundragon, Evenwood, Greycastle, Tallstag</dd>
</dl>';
        $subrace->regions = 'Inner Sea';
        $helper->addTypesToSimpleObject($subrace, ['Human']);

        $subrace              = new SubRace;
        $subrace->name        = 'Damaran';
        $subrace->race_id     = $race->id;
        $subrace->description = '<p>Found primarily in the northwest of Faerûn, Damarans are of moderate height and build, with skin hues ranging from tawny to fair. Their hair is usually brown or black, and their eye color varies widely, though brown is most common.</p>
<dl>
    <dt>Damaran Names:</dt> <dd>(Male) Bor, Fodel, Glar, Grigor, Igan, Ivor, Kosef, Mival, Orel, Pavel, Sergor; (female) Alethra, Kara, Katernin, Mara, Natali, Olma, Tana, Zora; (surnames) Bersk, Chernin, Dotsk, Kulenov, Marsk, Nemetsk, Shemov, Starag</dd>
</dl>';
        $subrace->regions = 'Damara';
        $helper->addTypesToSimpleObject($subrace, ['Human']);

        $subrace              = new SubRace;
        $subrace->name        = 'Illuskan';
        $subrace->race_id     = $race->id;
        $subrace->description = '<p>Illuskans are tall, fair-skinned folk with blue or steely gray eyes. Most have raven-black hair, but those who inhabit the extreme northwest have blond, red, or light brown hair.</p>
<dl>
    <dt>Illuskan Names:</dt> <dd>(Male) Ander, Blath, Bran, Frath, Geth, Lander, Luth, Malcer, Stor, Taman, Urth; (female) Amafrey, Betha, Cefrey, Kethra, Mara, Olga, Silifrey, Westra; (surnames) Brightwood, Helder, Hornraven, Lackman, Stormwind, Windrivver</dd>
</dl>';
        $subrace->regions = 'Damara';
        $helper->addTypesToSimpleObject($subrace, ['Human']);

        $subrace              = new SubRace;
        $subrace->name        = 'Mulan';
        $subrace->race_id     = $race->id;
        $subrace->description = '<p>Dominant in the eastern and southeastern shores of the Inner Sea, the Mulan are generally tall, slim, and amber-skinned, with eyes of hazel or brown. Their hair ranges from black to dark brown, but in the lands where the Mulan are most prominent, nobles and many other Mulan shave off all their hair.</p>
<dl>
    <dt>Mulan Names:</dt> <dd>(Male) Aoth, Bareris, Ehput-Ki, Kethoth, Mumed, Ramas, So-Kehur, Thazar-De, Urhur; (female) Arizima, Chathi, Nephis, Nulara, Murithi, Sefris, Thola, Umara, Zolis; (surnames) Ankhalab, Anskuld, Fezim, Hahpet, Nathandem, Sepret, Uuthrakt</dd>
</dl>';
        $subrace->regions = 'Thay/Mulhorand/Unther';
        $helper->addTypesToSimpleObject($subrace, ['Human']);

        $subrace              = new SubRace;
        $subrace->name        = 'Rashemi';
        $subrace->race_id     = $race->id;
        $subrace->description = '<p>Most often found east of the Inner Sea and often intermingled with the Mulan, Rashemis tend to be short, stout, and muscular. They usually have dusky skin, dark eyes, and thick black hair.</p>
<dl>
    <dt>Rashemi Names:</dt> <dd>(Male) Borivik, Faurgar, Jandar, Kanithar, Madislak, Ralmevik, Shaumar, Vladislak; (female) Fyevarra, Hulmarra, Immith, Imzel, Navarra, Shevarra, Tammith, Yuldra; (surnames) Chergoba, Dyernina, Iltazyara, Murnyethara, Stayanoga, Ulmokina</dd>
</dl>';
        $subrace->regions = 'Rashemen';
        $helper->addTypesToSimpleObject($subrace, ['Human']);

        $subrace              = new SubRace;
        $subrace->name        = 'Shou';
        $subrace->race_id     = $race->id;
        $subrace->description = '<p>The Shou are the most numerous and powerful ethnic group in Kara-Tur, far to the east of Faerûn. They are yellowish-bronze in hue, with black hair and dark eyes. Shou surnames are usually presented before the given name.</p>
<dl>
    <dt>Shou Names:</dt> <dd>(Male) An, Chen, Chi, Fai, Jiang, Jun, Lian, Long, Meng, On, Shan, Shui, Wen; (female) Bai, Chao, Jia, Lei, Mei, Qiao, Shui, Tai; (surnames) Chien, Huang, Kao, Kung, Lao, Ling, Mei, Pin, Shin, Sum, Tan, Wan</dd>
</dl>';
        $subrace->regions = 'Kara-Tur';
        $helper->addTypesToSimpleObject($subrace, ['Human']);

        $subrace              = new SubRace;
        $subrace->name        = 'Thethyrian';
        $subrace->race_id     = $race->id;
        $subrace->description = '<p>Widespread along the entire Sword Coast at the western edge of Faerûn, Tethyrians are of medium build and height, with dusky skin that tends to grow fairer the farther north they dwell. Their hair and eye color varies widely, but brown hair and blue eyes are the most common. Tethyrians primarily use Chondathan names.</p>';
        $subrace->regions     = 'Kara-Tur';
        $helper->addTypesToSimpleObject($subrace, ['Human']);

        $subrace              = new SubRace;
        $subrace->name        = 'Turami';
        $subrace->race_id     = $race->id;
        $subrace->description = '<p>Native to the southern shore of the Inner Sea, the Turami people are generally tall and muscular, with dark mahogany skin, curly black hair, and dark eyes.</p>
<dl>
    <dt>Turami Names:</dt> <dd>(Male) Anton, Diero, Marcon, Pieron, Rimardo, Romero, Salazar, Umbero; (female) Balama, Dona, Faila, Jalana, Luisa, Marta, Quara, Selise, Vonda; (surnames) Agosto, Astorio, Calabra, Domine, Falone, Marivaldi, Pisacar, Ramondo</dd>
</dl>';
        $subrace->regions = 'Turmish';
        $helper->addTypesToSimpleObject($subrace, ['Human']);

        $race              = new Race;
        $race->name        = 'Half-Elf';
        $race->age         = 'Half-elves mature at the same rate humans do and reach adulthood around the age of 20. They live much longer than humans, however, often exceeding 180 years.';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CHA score increases by +2 and two other ability scores of your choice increases by +1</dd>
    <dt>Darkvision</dt> <dd>Thanks to your elf blood, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can’t discern color in darkness, only shades of gray.</dd>
    <dt>Fey Ancestry</dt> <dd>You gaina +2 bonus to Saves against being charmed, and magic can\'t put you to sleep</dd>
    <dt>Skill Versatility</dt> <dd>You gain the Skilled feat</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Half-Elf']);

        $race              = new Race;
        $race->name        = 'Half-Orc';
        $race->age         = 'Half-orcs mature a little faster than humans, reaching adulthood around age 14. They age noticeably faster and rarely live longer than 75 years.';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CHA score increases by +2 and two other ability scores of your choice increases by +1</dd>
    <dt>Darkvision</dt> <dd>Thanks to your orc blood, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can’t discern color in darkness, only shades of gray.</dd>
    <dt>Menacing</dt> <dd>You gaina +2 bonus all Intimidation checks</dd>
    <dt>Relentless Endurance</dt> <dd>You gain the Die Hard feat</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Half-Orc']);

        $race              = new Race;
        $race->name        = 'Tiefling';
        $race->age         = 'Tieflings mature at the same rate as humans but live a few years longer.';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CHA score increases by +2 and your INT score increases by +1</dd>
    <dt>Darkvision</dt> <dd>Thanks to your infernal heritage, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can’t discern color in darkness, only shades of gray.</dd>
    <dt>Hellish Resistance</dt> <dd>You have Resistance to Fire damage</dd>
    <dt>Infernal Legacy</dt> <dd>You gain the Arcane Background feat. You must choose the Thaumaturgy Cantrip.</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Fiend']);

        $race              = new Race;
        $race->name        = 'Aasimar';
        $race->age         = 'Aasimars mature at the same rate as humans but live a few years longer.';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CHA score increases by +2 and your INT score increases by +1</dd>
    <dt>Darkvision</dt> <dd>Thanks to your infernal heritage, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can’t discern color in darkness, only shades of gray.</dd>
    <dt>Divine Resistance</dt> <dd>You a +1 bonus to all Saves</dd>
    <dt>Divine Legacy</dt> <dd>You gain the Arcane Background feat. You must choose the Light Cantrip.</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Celestial']);
    }
}
