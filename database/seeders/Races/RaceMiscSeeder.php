<?php

namespace Database\Seeders\Races;

use App\Models\Race;
use App\Models\SubRace;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class RaceMiscSeeder extends Seeder
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

        $race              = new Race;
        $race->name        = 'Lizardfolk';
        $race->age         = 'Lizardfolk reach maturity around age 14 and rarely live longer than 60 years.';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CON score increases by +2 and your WIS score increases by +1</dd>
    <dt>Swim Speed</dt> <dd>You have a Swim Speed of 30 feet.</dd>
    <dt>Bite Attack</dt> <dd>Your fanged maw is a natural weapon, which you can use to make unarmed strikes. You gain an extra Action, which can only be used to make Bite attacks. You suffer a -2 to Hit with Bite attacks, and if you make a Bite attack, your DEX bonus to AC is reduced by -1 (minimum 0) until the beginning of your next turn. If you hit with it, you deal piercing damage equal to 1D6 + your STR modifier.</dd>
    <dt>Natural Armor</dt> <dd>You have tough, scaly skin. When you aren\'t wearing armor, your AC is 13 + your DEX modifier. You can use your natural armor to determine your AC if the armor you wear would leave you with a lower AC. A shield\'s benefits apply as normal while you use your natural armor.</dd>
    <dt>Hold Breath</dt> <dd>You can hold your breath for up to 15 minutes at a time.</dd>
</dl>';
        $helper->addTypesToSimpleObject($race);

        $race              = new Race;
        $race->name        = 'Gith';
        $race->age         = 'Gith reach adulthood in their late teens and live for about a century.';
        $race->hit_points  = 6;
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your WIS score increase by +2</dd>
    <dt>Psionics</dt> <dd>You gain the Wild Talent feat</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Aberration']);

        $subrace           = new SubRace;
        $subrace->name     = 'Githyanki';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Astral Plane';
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your STR score increases by +1</dd>
    <dt>Psionics</dt> <dd>You gain a 0 level Psychic Warrior power</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Aberration']);

        $subrace           = new SubRace;
        $subrace->name     = 'Githzerai';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Limbo';
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your DEX score increases by +1</dd>
    <dt>Psionics</dt> <dd>You gain a 0 level Psychic Warrior power</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Aberration']);

        $race              = new Race;
        $race->name        = 'Yuan-ti';
        $race->age         = '';
        $race->hit_points  = 6;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CHA score increases by 2</dd>
    <dt>Psionics</dt> <dd>You gain a 0 level Psychic Warrior power</dd>
    <dt>Poison Immunity</dt> <dd>You are immune to Poison damage and the Sickened condition</dd>
</dl>';
        $helper->addTypesToSimpleObject($race);

        $subrace           = new SubRace;
        $subrace->name     = 'Pureblood Yuan-ti';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Chultan Peninsula, Hlondeth';
        $subrace->benefits = '<dl>

</dl>';
        $helper->addTypesToSimpleObject($subrace);

        $subrace           = new SubRace;
        $subrace->name     = 'Halfblood Yuan-ti';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Chultan Peninsula, Hlondeth';
        $subrace->benefits = '<dl>

</dl>';
        $helper->addTypesToSimpleObject($subrace);

        $subrace           = new SubRace;
        $subrace->name     = 'Abomination Yuan-ti';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Chultan Peninsula, Hlondeth';
        $subrace->benefits = '<dl>

</dl>';
        $helper->addTypesToSimpleObject($subrace);

        $subrace           = new SubRace;
        $subrace->name     = 'Anathema Yuan-ti';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Chultan Peninsula, Hlondeth';
        $subrace->benefits = '<dl>

</dl>';
        $helper->addTypesToSimpleObject($subrace);

        $race              = new Race;
        $race->name        = 'Spirit Folk';
        $race->age         = 'Considered adult at 55, can live for 400 years';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '<p>Spirit folk are the descendants of the guardian spirits of Rashemen and the humans that inhabit this rugged land. A rare people, they are most often found in Rashemen itself, but are also native to Thesk and the eastern lands of Kara-Tur. Spirit folk have two main familial lines: mountain and river.</p>
<h3>Serene and Introspective</h3>
<p>Spirit folk feel at home in the lands of their ancestors and experience a deep sense of peace with the natural world. Their ancestry provides them with a connection to the spirit world, yet because of their complementary relationship with nature, they do not seek to interfere with the natural balance through the use of magic. Most humans look at spirit folk with envy for their inherent, nearly unshakable love for life.</p>
<h3>Diverse and Striking</h3>
<p>Though appearing much like humans, spirit folk possess highly-refined and attractive features. Appearing in all the diversity that humans display, spirit folk embody the natural beauty of their human and spirit ancestries. With complexions that range from delicately pale to a golden-sheened mahogany, spirit folk have luxurious heads of hair, thin eyebrows, but a complete lack of body hair otherwise. They are famously considered strikingly beautiful.</p>
<h3>Venerated Visitors</h3>
<p>Spirit folk feel at home in human society though they most often only remain for one human generation, this to keep themselves from standing out as long- lived beings within a tight knit community. They try to integrate wholly into the society they have chosen and accept the local human rules. Though most humans who interact with spirit folk do not wholly understand their ancestry, they regard spirit folk with reverence, referring to them as “wise ones” who possess a deeper understanding of the natural world than most other beings can only hope to achieve. Spirit folk thrive in human society, but also enjoy the company of elves and fey creatures of all sorts, in addition to the spirit guardians that live within Rashemen.</p>';
        $race->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CHA score increases by +2 and your WIS or DEX score increases by +1</dd>
    <dt>Darkvision</dt> <dd>60 feet</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Spirit']);

        $subrace           = new SubRace;
        $subrace->name     = 'Mountain Spirit Folk';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Rashemen';
        $subrace->benefits = '<dl>
    <dt>Expert Climber</dt> <dd>Climb Speed of 30 and have Advantage on all STR checks while climbing</dd>
    <dt>Daring Athlete</dt> <dd>Mountain spirit folk are at home with heights and have Advantage on DEX and STR checks while on steep slopes, sheer edges, or narrow paths or other mountainous or treacherous terrain.</dd>
    <dt>Bird Whisperer</dt> <dd>Once per day, a mountain spirit folk can cast Speak with Animals to speak with birds only.</dd>
    <dt>Languages</dt> <dd>Mountain spirit folk speak Sylvan and Terran</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Spirit', 'Earth']);

        $subrace           = new SubRace;
        $subrace->name     = 'River Spirit Folk';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Rashemen';
        $subrace->benefits = '<dl>
    <dt>Expert Swimmer</dt> <dd>River spirit folk have a base Swim Speed of 30 feet and have Advantage on all STR checks made while swimming.</dd>
    <dt>Amphibious</dt> <dd>River spirit folk can breathe on land and in water</dd>
    <dt>Water Affinity</dt> <dd>River spirit folk have Advantage on Saves against water-based and other magical effects. The DM determines if a spell is water based</dd>
    <dt>Fish Whisperer</dt> <dd>Once per day, a river spirit folk can cast Speak with Animals to speak with fish.</dd>
    <dt>Languages</dt> <dd>River spirit folk speak Sylvan and Aquan</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Spirit', 'Water']);

        $race              = new Race;
        $race->name        = 'Hagspawn';
        $race->age         = 'Hagspawn are considered adults at 18 years old and can live up to 120 years.';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = "<p>Of the great evils that the hags perpetrate upon the humans of Rashemen, hagspawn rank among the most vile. The offspring of hags and humans, hagspawn are ill-favored children discarded by hags, forced to make their own way in the world as creatures hated by their hag parents, and feared by most who lay eyes upon them. Hagspawn that survive their childhood grow into powerful, though largely despised people. Through sheer physical might, and resilience, these beings are full of potential.</p>
<h3>Suspicious But Daring</h3>
<p>Hagspawn have every reason to be resentful and angry. Considered unworthy by their hag parents and looked upon with fear by their human kin, it is unsurprising that after a life of abandonment and abuse they are quick to anger, slow to trust, and thoroughly pessimistic. In a world that treats them as monsters, hagspawn seek their own path. Since few opportunities exist for hagspawn to succeed in human society, they must blaze their own trail. This makes most hagspawn hardworking, relentless, and fiercely independent. If given good reason to strive for a goal, few creatures can match the relentlessness of a hagspawn.</p>
<p>Over the years, some hagspawn have proven themselves capable of overcoming the irredeemably evil nature of their mothers through heroic feats and good deeds. Tales of stoic, unflinching hagspawn heroes, standing their ground when others have fled, are legend in the tales of Rashemen. It is thanks to the deeds of hagspawn past that their descendants experience some small level of acceptance among those few humans broad-minded enough to give them a chance to prove themselves. And given the chance, hagspawn often live up to these high expectations.</p>
<h3>Cursed Blood, Hearts of Fire</h3>
<p>Hagspawn inherit features from their hag parentage that make many humans feel uncomfortable. Often taller than most humans, hagspawn have long, powerful limbs and large hands. Their eyes are like those of their mothers, gleaming red. Humans assume they can only hold malice for all they behold, yet this tells us more about human fearfulness than the truth about hagspawn. Hagspawn skin tone varies as much as humans’, however there are distinct tinges to hagspawn that do not occur in most humans; the offspring of an annis hag is a pallid blue whereas that of green hag is unsurprisingly green. Even with these distinctive features, hagspawn sometimes pass for humans in lands where hags are rare—in Rashemen, hagspawn are known immediately upon sight.</p>
<h3>Accepted Among Outsiders</h3>
<p>Though acceptance of hagspawn is slowly growing, most humans still cannot bear the sight of them. Long-held prejudices poison the minds of humans, and tales of crimes, depravity, and inherently violent natures are still common in closed-minded human populations.</p>
<p>However, there are those who see past the hagspawn's appearance and look to their deeds instead. Unsurprisingly, half-orcs and tieflings relate to the trails caused by the fear of others. Increasingly, other non-human races such as dwarves, half-elves, elves, and halflings consider hagspawn innocent of the crimes of their birth and are likely to let hagspawn prove themselves through their deeds.</p>
<p>The reluctance of humans to accept hagspawn is complex, and based on their hatred and mistrust of hags themselves. The hagspawn is a reminder of the evil hags are capable of, and of their great power. Shame and hate of hags follows hagspawn into human society, though there is growing hope that as the other races accept hagspawn, humans may also be able to shake off their distrust and see these beings as individuals rather than emblems of defeat.</p>
<h3>Hagspawn Names</h3>
<p>Hagspawn have among the most diverse names in all of Rashemen. All hagspawn begin their lives as orphans, simply abandoned in the wild by their mothers. Should an elf stumble upon a hagspawn, they may give the hagspawn an Elvish name. Though hagspawn accept their given names, it is increasingly common for them to choose their own name as well. Some hagspawn honor their adoptive parents by going by their own name, but using their adoptive parents' tongue. In the past, hagspawn took on human names, some even choosing the surname \"Hagblood\" showing acceptance of their heritage and disdain for the hatred of others. In recent years, it has become increasingly common for hagspawn to choose their own names. Further, hagspawn take last names based on where they were born, for example a hagspawn may call himself, \"Rager of Iceborn River\". Hagspawn names are often gender-neutral and chosen by the individual.</p>";
        $race->benefits = "<dl>
    <dt>Ability Score Increase</dt> <dd>Your STR and CON score increases by +2 and your CHA score decreases by -2</dd>
    <dt>Darkvision</dt> <dd>You inherit the fey sight of your mother's red, avaricious eyes. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</dd>
    <dt>Initial Hit Die</dt> <dd>You start with 1D8 Hit Points</dd>
    <dt>Fey Heritage</dt> <dd>Hagspawn have enough of their mother's fey heritage to make them immune to spell effects that only affect humanoids.</dd>
    <dt>Natural Armor</dt> <dd>You have a tough, scaly skin. Your skin grants you Damage Reduction 1</dd>
</dl>";
        $helper->addTypesToSimpleObject($race, ['Fey']);

        $race              = new Race;
        $race->name        = 'Centaur';
        $race->age         = 'Centaurs mature and age at about the same rate as humans';
        $race->hit_points  = 10;
        $race->size        = 'Large';
        $race->speed       = 40;
        $race->description = '';
        $race->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>You STR score increases by +2, and your WIS score increases by +1</dd>
    <dt>Initial Hit Die</dt> <dd>You start with 2D10 Hit Points</dd>
    <dt>Fey</dt> <dd>Your creature type is Fey</dd>
    <dt>Charge</dt> <dd>If you move at least 30 feet straight toward a target and the hit it with a melee weapon attack on the same turn, you gain an additional Action. This additional Action can only be used to make a Hoof attack against the same target you just hit.</dd>
    <dt>Hooves</dt> <dd>Your hooves are natural melee weapons, which you can use to make Unarmed Strikes. If you hit with them, you deal 1D4 + STR modifier Bludgeoning damage.</dd>
    <dt>Equine Build</dt> <dd>Any climb that requires hands and feet is especially difficult for you because of your equine legs. When you make such a climb, each foot of movement costs you 4 extra feet, instead of the normal extra foot.</dd>
    <dt>Skills</dt> <dd>You are proficient with the Survival skill</dd>
    <dt>Languages</dt> <dd>Centaur typically learn the Sylvan language</dd>
    <dt>Level Adjustment</dt> <dd>+2</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Fey']);

        $race              = new Race;
        $race->name        = 'Satyr';
        $race->age         = 'Satyr mature and age at about the same rate as humans';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 35;
        $race->description = '';
        $race->benefits    = '<dl>
    <dt>Ability Score Increases</dt> <dd>Your CHA score increases by +2, and your DEX score increases by +1</dd>
    <dt>Fey</dt> <dd>Your creature type is Fey</dd>
    <dt>Ram</dt> <dd>You can use your head and horns to make Unarmed Strikes. If you hit with them, you deal Bludgeoning damage equal to 1D4 + STR modifier.</dd>
    <dt>Magic Resistance</dt> <dd>You gain a +1 bonus to all Saves vs spells and magical effects</dd>
    <dt>Leap</dt> <dd>Whenever you make a long or high jump, you can roll a D8 and add the number to the number of feet you cover, even when making a standing jump. This extra distance costs movement as normal</dd>
    <dt>Language</dt> <dd>Satyr typically learn the Sylvan language</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Fey']);

        $race              = new Race;
        $race->name        = 'Volodni';
        $race->age         = '';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '';
        $helper->addTypesToSimpleObject($race, ['Plant']);

        $race              = new Race;
        $race->name        = 'Taer';
        $race->age         = 'Taer reach adulthood at aged 12 and live up to 60 years, though few live past 40 years, particularly in the harsh North Country of Rashemen.';
        $race->hit_points  = 10;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '<p>While the mountain ranges north of Rashemen and all across the northern regions of Faerun are unforgiving, some have found ways to thrive. The taer are one such people: blue-haired mountain giants, towering over the tallest humans but diminutive among their own kind. Their fur fully covers their bulky frame, only leaving exposed skin on their hands, feet, and faces.</p>
<p>They have a strict cultural code, designed to share resources and allow their young to thrive. Taer young are well cared for, and once they come of age, they raise their own young. The elder taer do all in their power to protect and shelter their young—even going so far as to enter long periods of hibernation when food is particularly scarce.</p>
<p>This lifestyle is not enough for some taer, who seek the comforts and bounty of warmer regions. These rebellious groups are often the subject of cautionary tales throughout Rashemen. They are seen as raiders from the north who steal into farmland and small settlements in the coldest winter nights, stealing livestock, stores, and other raw materials. These taer are ever willing to fight and die for what they believe to be theirs.</p>
<h3>Not All Taer</h3>
<p>To most Rashemi and others who live nearby, taer are usually the antagonists in stories told around campfires. However, there are some taer individuals who leave their homes in search of more and are not willing to meet their needs by simply taking from others. These are the most frequently the taer who become adventurers.</p>
<p>The reasons for leaving their home vary. Some leave on pilgrimages, hoping to become adepts to better serve their families. Others are souls who survived a tragedy that struck thier pod, leaving them homeless and forced to seek their destiny alone.</p>
<p>Whatever the reason, the capacity of both good and evil exist in all creatures and while these taer might face challenges in the realms of others, their wanderlust will guide them through.</p>
<h3>Taer Names</h3>
<p>Taer favor names that are short and easily heard over far distances; so harsh sounds are used and most names are no longer than two syllables</p>';
        $race->benefits    = '<dl>
    <dt>Ability Score Increases</dt> <dd>Your STR and CON score increases by +2</dd>
    <dt>Arctic Heart</dt> <dd>You have Resistance to Cold damage</dd>
    <dt>Giantsblood</dt> <dd>Your creature type is giant, instead of humanoid</dd>
    <dt>Powerful Build</dt> <dd>You count as one size larger when determining your carrying capacity and the weight you can push, drag or lift.</dd>
    <dt>Hurler</dt> <dd>You have proficiency with improvised weapons. When you throw an improvised weapon, you can use your Strength or Dexterity modifier for the attack and damage rolls and can roll one of the weapon’s damage dice one additional time and add it to the damage dealt.</dd>
    <dt>Language</dt> <dd>You can speak, read, and write Giant</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Cold']);

        $race              = new Race;
        $race->name        = 'Chitines';
        $race->age         = '';
        $race->hit_points  = 6;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '';
        $helper->addTypesToSimpleObject($race);

        $race              = new Race;
        $race->name        = 'Gloamings';
        $race->age         = '';
        $race->hit_points  = 8;
        $race->size        = 'Size';
        $race->speed       = 20;
        $race->description = '';
        $race->benefits    = '';
        $helper->addTypesToSimpleObject($race);

        $race              = new Race;
        $race->name        = 'Grimlock';
        $race->age         = '';
        $race->hit_points  = 6;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '';
        $helper->addTypesToSimpleObject($race);

        $race              = new Race;
        $race->name        = 'Kuo-toa';
        $race->age         = '';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '';
        $helper->addTypesToSimpleObject($race, ['Aberration']);

        $race              = new Race;
        $race->name        = 'Slyth';
        $race->age         = '';
        $race->hit_points  = 6;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '';
        $helper->addTypesToSimpleObject($race);

        $race              = new Race;
        $race->name        = 'Loxo';
        $race->age         = '';
        $race->hit_points  = 24;
        $race->size        = 'Large';
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '';
        $helper->addTypesToSimpleObject($race);
    }
}
