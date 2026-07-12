<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersGSeeder extends Seeder
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

        $monster                   = new Monster;
        $monster->name             = 'Ogre';
        $monster->size             = 'Large';
        $monster->type             = 'Giant';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '9 (Hide) / 8';
        $monster->damage_reduction = '3 (Hide) / 1';
        $monster->hit_dice         = 7;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Greatclub</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D8 +4) Piercing.</dd>
</dl>';
        $monster->description = '<p>Ogres are a race of giant-kin.</p>
<p>Ogres appear as giant humanoids with very muscular bodies and large heads. They stand between 9 and 10 feet tall and could weigh 600 to 650 lbs.</p>
<p>Ogres are a lazy, brutish, avaricious race with notoriously quick tempers. Their avaricious nature often leads them to distrust one another and incite squabbling over treasure.</p>
<p>Much like hill giants, ogres are gluttonous creatures willing to eat almost anything. They enjoy the taste of raw dwarf flesh, but will also eat halfling or elf flesh when they can get it. They often use the skin and bones of their prey to fashion crude loincloths and necklaces.</p>
<p>Ogres are known to typically associate with goblinoids, orcs, and trolls. In the social structure of the giants, the Ordning, ogres are considered the lowest-ranked of all giant-kin. Because of this, they are typically found to be willing servants of giants. The giant races ogres most often are seen working alongside are hill giants and verbeeg, the former of which they often traded with for trinkets or food.</p>
<p>Many ogres work as mercenaries, hoping for easy plunder, and in that line of work they are often seen alongside verbeeg. Lone hags, as well as covens, are known to employ ogres as guards, while others polymorph ogres and send them out to work as spies.</p>';
        $helper->saveMonster($monster, ['Giant'], [
            'stats'    => [19, 8, 16, 5, 7, 7, 2, 3],
            'features' => [
                'darkvision' => ['meta' => '60 ft'],
            ],
            'languages' => ['Jotun', 'Special' => ['meta' => 'One regional language']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Troll';
        $monster->size             = 'Large';
        $monster->type             = 'Giant';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 8;
        $monster->speed            = '30 feet';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D6 +4 Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D6 +4 Slashing</dd>
</dl>';
        $helper->saveMonster($monster, ['Giant'], [
            'stats'  => [18, 13, 20, 7, 9, 7, 5, 3],
            'skills' => [
                'Perception' => ['dc' => 2],
            ],
            'features' => [
                'darkvision'   => ['meta' => '60 feet'],
                'keen_sense'   => ['meta' => 'Smell'],
                'regeneration' => ['meta' => '10. Vulnerable to Acid and Fire'],
                'multi_attack' => ['meta' => 'If the troll makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The troll can only gain this additional Action once per turn.'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Ettin';
        $monster->size             = 'Large';
        $monster->type             = 'Giant';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '9 (Hide) / 8';
        $monster->damage_reduction = '3 (Hide) / 1';
        $monster->hit_dice         = 8;
        $monster->speed            = '40 feet';
        $monster->actions          = '<dl>
    <dt>Greatclub</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (3D8 +5) Bludgeoning.</dd>
</dl>';
        $monster->description = "<p>Ettins, commonly called two-headed giants, are the conjoined twins of the giants, degenerate brutes whose names translated to \"ugly giant\" in ancient Common and \"runt\" in Jotun. They bridged the gap between true giants and giant-kin, only being classifiable as the former by virtue of relation to Annam and Othea, but with no terrain granted to them by the All-Father.</p>
<p>At first glance, ettins seem like relatively short members of other giant races, about 13ft tall, two-headed hill or stone giants, but upon closer examination even hill giants seem civilized compared to them. They are hulking creatures with exceptionally broad shoulders, long arms, and great weight, reports of their heaviness ranging from around 1,000lb to exceeding 5,000lb, although either way the earth shook when they ran. Strangely, they are slightly lop-sided, the right side being slightly more muscular and well-developed than the left, although not enough to detract from their barbaric image.</p>
<p>In regards to their savage aspect, one of their most notable traits is their skin; if given a choice, ettins never bath, and so their already thick skin are crusted over with a thick layer of dirty grime, giving them a horrid stench and a gray-dark brown complexion. Underneath the filth, ettins have skin tone ranging from pink to brownish, with yellow-tinged hands and feet marked with callouses.</p>
<p>Even ignoring their unwillingness to clean themselves, ettins have no concern for their appearance and lack any kind of grooming habits, even negative ones. Atop their ugly heads is a hanging, unkempt mess of long, stringy hair, and inside their large, reeking mouths are crooked, yellow, and all too often rotten teeth. Notably, ettins have crude, orc-like traits in the form of a large, watery eyes, porcine snouts, and shovel jaws with lower canine teeth that protrude out like boar tusks, tusks that, for all their easiness to reach, they are as revoltingly rotten as the rest of their teeth.</p>
<p>This uncleanliness extend to their sense of dress, or lack thereof; ettins wear animal skins that are uncured, unwashed, scraggly, and that are typically decaying and being eaten by moths. The only reason they wear them is as a kind of mobile blanket, giving them something soft and warm to sleep in, and the ugly sleeping-furs normally don't include sleeves or any unnecessary parts so as not to impede them in physically demanding tasks. This isn't to say that the idea of accessories is completely beyond them, with some keeping things like severed heads as accessories and females being known to wear jewelry as a status symbol.</p>
<p>Generally males are taller and heavier than females, but females, as well as having longer hair, are often fuller-bodied than the relatively gaunt and wiry males.</p>
<p>Aggressive, ferocious and unpredictable, ettins are a brutish race that love and admire power. They are natural bullies that oppress those incapable of defending themselves, victimizing the weak through straightforward pain and intimidation. It is possible that they hold a traditionally \"muscle-brained\" view of the world, perceiving mental prowess and good looks as inferior to raw size and strength. Despite their two heads, or perhaps as a result of their two heads, ettins are generally stupid, their two weak brains doing little to enhance their overall intelligence.</p>
<p>With that in mind, trying to take advantage of an ettins feeble mind is risky; if either head of an ettin was to see through an illusion for example, they will not stand slack-jawed and bewildered by the event but immediately and angrily conclude they are being tricked and seek out the one trying to deceive them. It will also be a bad idea to assume all ettins are equally dim-witted, as the lowest of them are more akin to wild animals while the smartest members of their kind have been known to surpass the average human. Ettins also aren't universally mean and destructive, the circumstances of their lives playing an important role in shaping their instinctual savagery. Some ettins are known to be curious, imaginative, humorous, and even kind, with friendly, or at the very least non-aggressive behavior, being more likely among those with comfortable lives and an ample food supply.</p>
<p>Ettins have a concept of value, keeping things like corpses as trophies and collecting gems, coins and art objects to ogle at. They also know the basic principles of trade, though they were suspicious of all beings, including each other, and might bargain with potential prey if more can be obtained by doing so, such as something to ensure their safety or the obtainment of more food. Generally ettins only bargain to get as much of what they wanted with the least possible risk, unbound by their deals and willing to abruptly stop discussion if it proved frustrating or annoying. Despite their wariness and greed, ettins understand gratitude and have been known to take substantial risks for those who manage to earn their trust, those willing to risk their lives to help them for example.</p>
<p>It is commonly known that each head of an ettin is a distinct individual, each with their own identity, personality, memories, preferences and quirks. The iconic image of the two-headed monster arguing with itself that is commonly seen in folk tales and ballads however, is of suspect accuracy. On one hand, some reports found that ettins are discouraged from seriously fighting with each other. The right side of an ettin is always the strongest one meaning that the right side would always be the dominant of the relationship while the left will always be the submissive. Besides, that, an ettin that lost one of its heads, assuming it survives, will be at a severe disadvantage, at least for a long period of time, so for the sake of mutual survival the two have to generally cooperate.</p>
<p>While ettins do seem to bicker, they do so less as two hated foes and more as brattish brothers and sisters being forced to perpetually share. Serious dispute are rare in times of combat, because like selfish and squabbling siblings they are able to put aside their feuding to perform mutually beneficial actions. When this is not the case, they take constant offense towards each other and fight to assert themselves in their never-ending sibling rivalry. Part of this contempt for one another seems to be a result of familiarity, as the two are conjoined from birth and so can only rarely appreciate privacy and solitude when the other is asleep.</p>
<p>Already without privacy, ettins violently seek solitude, crushing any trespassers in their domains without question nor warning. The last thing most ettins want is another individual to deal with, much less another member of their kind, as a shouting match between four pugnacious primitives is even more intolerable than the ordinary state of affairs. Only rarely will they gather together into small groups, as gangs of living mates or bands of wandering destroyers, if an ettin of particular power, intelligence, or strength of will presents itself. These groups, anywhere between a 2-5 in numbers, cooperat with one another only so long as there is some perceivable benefit in doing so and if the leader stays alive and undefeated. The death, departure or discrediting of that leader, or really any major loss suffered, is often enough to shatter group cohesion and break up the band.</p>
<p>Despite placing little value in currency outside its aesthetics, ettins collect it regardless because other, lesser creatures find it desirable. For example, by supplying goblins or orcs with treasure, in addition to tolerating their presence nearby, an ettin can compel them to build it a wall, trap or fight along side them. Orcs in particular, likely because of the visual similarities between the two, treat the ettins as distant cousins, bribing the creatures into tenuous alliances with food, treasure and promises of plunder in exchange for their services as scouts, marauders and guardians. Even if not approached, ettins might come to other humanoids seeking to sell themselves as watchmen and protectors, and they sometimes work under the more powerful hill, frost and fire giants. On the other hand, some ettins try to carve out savage fiefdoms where they will be brought tribute by their bullied subjects.</p>
<p>Befitting their hermit lifestyle, the typical ettin shunning of company does not exclude them from keeping certain animals as pets, though such animals are generally dangerous and self-sufficient. Animals like bears, including owlbears, and creatures like wyverns are known to be found with ettins, and they sometimes exist in symbiosis with the similarly solitary otyughs. Ettins are rather similar to their companions in terms of behavior, their \"society\" producing little of value and their lifestyles being akin to those of ogres.</p>
<p>Females are the dominant gender among ettins, responsible for initiating their crude courtship rites. They wear treasures taken from prey to signify their hunting ability, and thus increase their attractiveness in the eyes of males, and give such items to males as gifts to woo them. Otherwise, courting among ettins boiled down to a female hunting down a male and subduing them in a show of dominance, after which the male stayed around and cared for the female.</p>";
        $helper->saveMonster($monster, ['Giant'], [
            'stats' => [21, 8, 17, 6, 10, 8, 4, 4],
            'saves' => [
                'WIS' => ['bonus' => 7, 'meta' => 'The ettin has two heads, so it has Advantage on Saves vs Blinded, Charmed, Deafened, Frightened, Stunned, and Unconscious.'],
            ],
            'skills' => [
                'Perception' => ['dc' => 4, 'meta' => 'Having two heads, one head is always awake.'],
            ],
            'features' => [
                'darkvision'   => ['meta' => '60 ft'],
                'multi_attack' => ['meta' => 'The ettin gains an additional Action. This additional Action can only be used to make attacks with the off head.'],
            ],
            'languages' => ['Jotun', 'Daraktan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Cyclops';
        $monster->size             = 'Large';
        $monster->type             = 'Giant';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 10;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Longspear</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (3D8 +8) Piercing</dd>
    <dt>Rock</dt> <dd>range Weapon Attack, reach 60/240 ft, one target. (3D10 +8) Bludgeoning</dd>
</dl>';
        $monster->description = '<p>Cyclops are loutish giants that enjoy tormenting and eating smaller folk. They are easily tricked, but they fight fiercely and to the death.</p>
<p>Cyclops look like very tall humans with light tan to deep brown skin, and dark hair. They dress in hides. Their teeth are usually crooked and yellowed, and they are fond of crude jewerly made of bones and colorful rocks. A cyclops is usually around 12 feet tall and weighs about 1,500 pounds.</p>
<p>Cyclops like to attack from higher ground, usually springing up from behind outcroppings of rock where they can hurl boulders with minimal risk to themselves.</p>';
        $helper->saveMonster($monster, ['Giant'], [
            'stats' => [27, 9, 19, 6, 8, 6, 8, 4],
            'feats' => [
                'Cleave', 'Great Cleave', 'Power Attack', 'Point-Blank Shot', 'Far Shot',
            ],
            'features' => [
                'darkvision',
            ],
            'languages' => ['Jotun', 'Jotunhaug'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Hill Giant';
        $monster->size             = 'Huge';
        $monster->type             = 'Giant';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '8 (Hide) / 7';
        $monster->damage_reduction = '3 (Hide) / 1';
        $monster->hit_dice         = 10;
        $monster->speed            = '40 feet';
        $monster->actions          = '<dl>
    <dt>Greatclub</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (3D8 +5) Bludgeoning.</dd>
    <dt>Rock</dt> <dd>Range Weapon Attack, reach 60/240 ft, one target. (3D10 +5) Bludgeoning.</dd>
</dl>';
        $monster->description = "<p>Hill giants, called haugjotunen in their own language, are a voracious and dimwitted race of giants that tend to live in hilly areas.</p>
<p>Hill giants are short and stocky in comparison to other giants. They are extremely muscular. Their bodies have a tan to reddish-brown skin tone, hair of a brown or black shade, and eyes with red rims.</p>
<p>The reason hill giants appear to be more muscular than other giants is because of their shorter limbs, but taller giants, such as fomorians, are still much more powerful.</p>
<p>A hill giant's metabolism is very high for a giant, and as a result, it has to eat a great quantity of food. It is not averse to eating demihumans, and will eat almost anything.</p>
<p>Hill giants are known to be susceptible to all forms of lycanthropy, though somehow immune to being afflicted with the wereraven form of the condition. Those afflicted with lycanthropy are most commonly found to be either werewolves, wereboars, wererats, or werebats. Compared to other giants afflicted with lycanthropy, the hill giants are notably broad and suffered from awkward movement.</p>
<p>Hill giants live in large communal families known as huslyder. In their society, the most evil act that could be committed is the betrayal of one's tribe.</p>
<p>The ordning (social ranking) of hill giants is determined by a combination of an individual's physical strength and eating ability.</p>
<p>Hill giants that become sick are isolated from their clans. Due to their voracious appetites, such sicknesses are often related with consumption of spoiled and diseased food in spite of the hill giants' extraordinary constitution. A giant that is incapable of keeping food down is constantly visited by a priest or chieftain who seeks to interpret signs of Grolantor. Individuals who do not recover and remain sick are then imprisoned and set to starve to the point of madness. These prisoners, called mouths of Grolantor, are seen as physical manifestations of the deity's endless hunger and cause extreme destruction if set loose.</p>";
        $helper->saveMonster($monster, ['Giant'], [
            'stats'  => [21, 8, 19, 5, 9, 6, 5, 4],
            'skills' => [
                'Perception' => ['dc' => 2],
            ],
            'languages' => ['Jotun', 'Jotunhaug'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Stone Giant';
        $monster->size             = 'Huge';
        $monster->type             = 'Giant';
        $monster->alignment        = 'N';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 11;
        $monster->speed            = '40 feet';
        $monster->actions          = '<dl>
    <dt>Greatclub</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (3D8 +6) Bludgeoning.</dd>
    <dt>Rock</dt> <dd>Range Weapon Attack, reach 60/240 ft, one target. (4D10 +6) Bludgeoning. If the target is a creature, it must succeed a DC 17 STR Save or be knocked Prone.</dd>
</dl>';
        $monster->description = '<p>Stone giants, called steinjotunen in their own language, are a reclusive and artistic race of giants that live in underground and mountainous environments.</p>
<p>The bodies of stone giants have a gray to grayish-brown skin tone, hair that ranges in spectrum from dark grays and bluish-grays, and eyes of a silver or steel hue. They also tend to wear clothing that is of a similar color to nearby rocks, which altogether made it easy for their race to blend in with their environment when needed.</p>
<p>Adults average about 18 feet in height and 1,700 pounds in weight. Though fossilized stone giants from the era of Ostoria show that in the past their race was capable of reaching heights of up to 24 ft.</p>
<p>Due to their resilient skin, stone giants are immune to all forms of lycanthropy.</p>';
        $helper->saveMonster($monster, ['Giant', 'Earth'], [
            'stats' => [23, 15, 20, 10, 12, 9, 7, 4],
            'saves' => [
                'DEX' => ['bonus' => 5],
                'CON' => ['bonus' => 8],
                'WIS' => ['bonus' => 4],
            ],
            'skills' => [
                'Athletics'  => ['dc' => 12],
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 1],
            ],
            'features' => [
                'darkvision'      => ['meta' => '60 ft'],
                'favored_terrain' => ['meta' => 'Rocky terrain'],
            ],
            'feats' => [
                'Deflect Ranged Attack' => ['meta' => 'Rocks only'],
                'Weapon Focus'          => ['meta' => 'Rocks only'],
                'Improved Weapon Focus' => ['meta' => 'Rocks only'],
            ],
            'languages' => ['Jotun', 'Jostunstein'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Fomorian';
        $monster->size             = 'Huge';
        $monster->type             = 'Giant';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '8 (Natural Armor)';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 13;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Greatclub</dt> <dd>Melee Weapon Attack +9 to hit, reach 15 ft, one target, 19 (3D6 + 6) Bludgeoning</dd>
    <dt>Evil Eye</dt> <dd>The fomorian magically forces a creature it can see within 60 feet of it to make a DC 14 CHA saving throw. The creature takes 27 (6D8) Negative damage on a Failed Save, or half as much damage on a successful one.</dd>
    <dt>Curse of the Evil Eye (Recharge after a Short or Long Rest)</dt> <dd>With a stare, the fomorian uses Evil Eye, but on a failed save, the creature is also cursed with magical deformities. While deformed, the creature has its Speed halved and has Disadvantage on ability checks, Saves, and attacks based on STR or DEX. The transformed creature can repeat the Save whenever it finishes a long rest, ending the effect on a success.</dd>
</dl>';
        $monster->description      = '<p>Fomorians are tall beings, ranging from 20 to 30 feet in height. They are ugly, with goat-heads, large ears, and gaping mouths.</p>
<p>Fomorians are supernatural giants, possibly fallen gods, known for terrorizing others. Their origins are debated, with some stories suggesting they emerged from the depths of the sea or the netherworld beneath the earth. Their magical powers include control over destructive elements like storms, darkness, drought, and blight.</p>
<p>Despite their brute strength, fomorians lack finesse in battle and are better known for causing chaos and destruction. They possess some magical abilities, such as summoning fog and controlling the weather. When not raiding, they have supreme agricultural skills, introducing plowing to the lands where they reside and having a sense of the right time to plant and harvest.</p>
<p>Some fomorians are truly massive horrors that have an additional eye in their forehead. This eye can poison, petrify, or immolate foes. Known as foawr, these fomorians enjoy throwing boulders at passing sailors they cannot reach with their spears.</p>
<p>Most fomorians live in the Underdark or the FeyDark in the FeyWild. In the FeyWild, they work to get their revenge against the fey for cursing them into their hideous forms.</p>';
        $helper->saveMonster($monster, ['Giant'], [
            'stats'     => [23, 10, 20, 9, 14, 6, 8, 4],
            'skills'    => [
                'Nature' => ['dc' => 5],
            ],
            'features'  => [
                'darkvision' => ['meta' => '120 ft'],
            ],
            'languages' => ['Jotun'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Frost Giant';
        $monster->size             = 'Huge';
        $monster->type             = 'Giant';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '9 (Chain Mail) / 7';
        $monster->damage_reduction = '6 (Chain Mail) / 2';
        $monster->hit_dice         = 13;
        $monster->speed            = '30 feet';
        $monster->actions          = '<dl>
    <dt>Greatsword</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (3D12 +6) Slashing.</dd>
    <dt>Rock</dt> <dd>Range Weapon Attack, reach 60/240 ft, one target. (4D10 +6) Bludgeoning.</dd>
</dl>';
        $monster->description = "<p>Frost giants, called isejotunen in their own language, are large giants that can be found in most cold environments of Faerun.</p>
<p>The bodies of these giants have skin and hair whose colors ranged a wide spectrum of blue and white shades, though some are known to have dirty yellow hair. Likewise, their eyes are generally shades of blue or yellow. Men often grow beards, which will become matted with frost and icicles.</p>
<p>Frost giants typically wear the skins or pelts of animals, along with any jewelry they owned. In terms of armor they tend to favor chainmail and helmets that are adorned with horns or feathers.</p>
<p>Frost giants have a reputation among other races for being crude and of low intelligence, but they are very cunning fighters. They greatly respect brute strength and battle prowess.</p>
<p>Much like all giants, a frost giant can see and hear twice as far as the average human. Unique to their race are senses well adapted to low temperature environments. Their visual senses extended into a higher end of the visible spectrum, allowing them to see more easily through snow and blizzards than other creatures.</p>
<p>Although their bodies are impervious to harm from cold, even that breathed by a white dragon, they are particularly vulnerable to fire.</p>
<p>Frost giants are known to be susceptible to two forms of lycanthropy, werebear and seawolf, and are one of only two giant races in which 'true' lycanthropes were known to occur. These true lycanthropes are a form of polar werebear — they appeared hairier than the average frost giant and are incapable of assuming a 'hybrid form.'</p>
<p>Those afflicted are the polarwere condition are known to occasionally live among other frost giants, but generally they are loners as their pelts were considered highly coveted among their kin.</p>
<p>For frost giants an individual's place in the ordning is determined by evidence of physical might, often taking the form of a combination of the individual's ability to wrestle and boast. Though it can also take the form of musculature, scars from battles of renown, or trophies fashioned from the bodies of their enemies. It is not uncommon for them to try proving their strength and improving their status by challenging a white dragon.</p>
<p>Whenever frost giants of different clans meet and their status is unclear, they will wrestle for dominance. At times this can resemble a festival, with giants cheering on their clan's champions and making bold boasts or challenges, but at other times it can take the form of a chaotic free-for-all.</p>
<p>In their societies, the most important bond except for that of the ordning is that of family. So much so that the recitation of ancestral lineage is an important aspect of the sagas crafted by their skalds, with each new character being introduced with a full recitation accompanied by appropriate music.</p>
<p>The leader of a frost giant band is called a Jarl.</p>
<p>Due to the environments in which they typically live, frost giants have a largely carnivorous diet. Frost giant typically obtain their food by means of hunting or raiding the settlements of humans and demihumans, although they are not below trading if the need arose. Some keep livestock that they have obtained from raids. When hunting in their native tundras, it is not uncommon for a frost giant to forgo cooking a fresh kill, as it would taste sufficiently hot to their tastes.</p>
<p>They often capture and tame wild animals, keeping them as pets, guards, or hunting companions. The most typical animal they keep are winter wolves, followed by owlbears, mammoths, and remorhazes. With rarer creatures including yetis and even white dragons.</p>
<p>Some are known to kidnap individuals and then either enslave them or hold them for ransom.</p>
<p>Frost giants are sometimes hired by cloud giants to plunder art and wealth on their behalf.</p>";
        $helper->saveMonster($monster, ['Giant', 'Cold'], [
            'stats' => [23, 9, 21, 9, 10, 12, 8, 4],
            'saves' => [
                'CON' => ['bonus' => 8],
                'WIS' => ['bonus' => 3],
                'CHA' => ['bonus' => 4],
            ],
            'skills' => [
                'Athletics'  => ['dc' => 9],
                'Perception' => ['dc' => 3],
            ],
            'features' => [
                'immunity'      => ['meta' => 'Cold'],
                'vulnerability' => ['meta' => 'Fire'],
            ],
            'languages' => ['Jotun', 'Jotunise'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Fire Giant';
        $monster->size             = 'Huge';
        $monster->type             = 'Giant';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '10 (Full Plate) / 7';
        $monster->damage_reduction = '8 (Full Plate) / 2';
        $monster->hit_dice         = 13;
        $monster->speed            = '30 feet';
        $monster->actions          = '<dl>
    <dt>Greatsword</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (6D6 +7) Slashing.</dd>
    <dt>Rock</dt> <dd>Range Weapon Attack, reach 60/240 ft, one target. (4D10 +7) Bludgeoning.</dd>
</dl>';
        $monster->description = '<p>Fire giants, called ildjotunen in their own language, are master craftsmen giants that live in volcanic and mountainous environments.</p>
<p>Fire giants have very broad bodies, making them sort of dwarf-like in appearance, Their skin is very dark, reminiscent of coal, the color of their hair tended towards a spectrum of flaming orange or red, with similarly red eyes.</p>
<p>Their clothing is usually flame-colored or black, and singed. They also tend to wear armor that is forged from steel or dragonscales.</p>
<p>Fire giants often consider bravery as being one of the highest virtues anyone can and should have. They relish opportunities in which they can test their fortitude against formidable opponents.</p>
<p>Much like all giants, a fire giant can see and hear twice as far as the average human. Unique to their race are senses well adapted to high temperature environments. Their eyes in particular are capable of seeing through the hazes and shimmers often associated with such temperatures.</p>
<p>Although their bodies are impervious to harm from fire, even that exhaled by a red dragon, some fire giants are particularly vulnerable to cold.</p>
<p>Fire giants possess an average affinity for runecasting as well as traditional sorcery. This affinity is superior to many of their kin, but paled in comparison to that of cloud and storm giants. They typically prefer to memorize spells that will help them in detecting and thwarting intruders.</p>
<p>Many fire giants, at least in the Ice Spires region, are known to enslave fomorians and verbeegs, as well as occasionally dwarves and gnomes. Slaves hold the lowest role in their societal structures and are often treated with little dignity. They typically work as laborers in their forges and strongholds.</p>
<p>Fire Giants are often hostage takers and take payments from less powerful creatures in their surrounding area in exchange for not attacking them.</p>
<p>They are known to occasionally forge alliances with, and even serve, red dragons. They are also known to domesticate hellhounds, keeping them as pets or guards.</p>';
        $helper->saveMonster($monster, ['Giant', 'Fire'], [
            'stats' => [25, 9, 23, 10, 14, 13, 9, 4],
            'saves' => [
                'DEX' => ['bonus' => 3],
                'CON' => ['bonus' => 10],
                'CHA' => ['bonus' => 5],
            ],
            'skills' => [
                'Athletics'  => ['dc' => 12],
                'Perception' => ['dc' => 4],
            ],
            'features' => [
                'immunity'      => ['meta' => 'Fire'],
                'vulnerability' => ['meta' => 'Cold'],
            ],
            'languages' => ['Jotun', 'Jotunild'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Cloud Giant';
        $monster->size             = 'Huge';
        $monster->type             = 'Giant';
        $monster->alignment        = 'N(G or E)';
        $monster->armor_class      = '10 (Breast Plate) / 8';
        $monster->damage_reduction = '5 (Breast Plate) / 2';
        $monster->hit_dice         = 16;
        $monster->speed            = '30 feet';
        $monster->actions          = '<dl>
    <dt>Morningstar</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (3D8 +8) Piercing.</dd>
    <dt>Rock</dt> <dd>Range Weapon Attack, reach 60/240 ft, one target. (4D10 +8) Bludgeoning.</dd>
</dl>';
        $monster->description = "<p>Cloud giants, called Skyejotunen in their own language, are a race of giants who preferred living among the clouds.</p>
<p>The bodies of cloud giants often display handsome and well-defined features. Their skin ranged in color from milky white to light sky blue. Their hair is silvery white or brass, and their eyes are iridescent blue.</p>
<p>They often dress in clothing made of the finest material and jewelry. Rather than wearing any form of armor, they prefer to wear or carry things enchanted with protective magic.</p>
<p>Cloud giants consider themselves to be above all other giant races, with the exception of storm giants whom they consider their equals.</p>
<p>Cloud giants are highly creative, masters at strategy, and have great appreciation for music. Many of them consider appearance to be reflective of one's station in life, thus the more clothing and jewelry that is owned the more prestigious one was thought to be by cloud giants.</p>
<p>Cloud giant clans are typically led by older individuals who possess talent in spellcasting. They are often familiar with other clans in their area and will join up with them to engage in trade, throw celebrations, or battle against other threats.</p>
<p>Because of their appreciation for music, the majority of cloud giants are known to be capable of playing one or more instrument. Harps are one of the most favored instruments among them.</p>
<p>Many have been known to hunt for wild game, such as elk. However, they prefer their food to be carefully prepared with a variety of spices and sauces. Giant clouds are also known to have a fondness for finely aged wine.</p>
<p>These giants prefer to live in the tallest mountains or even higher if possible. Those with magical talents often create floating castles or cities in which to dwell, held aloft in the sky atop a mass of clouds.</p>
<p>Clouds giants often trad with humans and demihuman communities for clothing, food, jewelry, and even wine. Though those of a more evil alignment are liable to simply raid them. Some communities establish such good relations with nearby cloud giants that they will come to their aid if endangered.</p>
<p>Cloud giants are known to often keep spotted lions, griffons, hippogriffs, giant eagles, and dire lions as pets or guardians. The more evil-aligned members of their race are known to keep wyverns, as well as both human and demihuman slaves.</p>";
        $helper->saveMonster($monster, ['Giant', 'Air'], [
            'stats' => [27, 10, 22, 12, 16, 16, 9, 5],
            'saves' => [
                'CON' => ['bonus' => 10],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 7],
            ],
            'skills' => [
                'Insight'    => ['dc' => 7],
                'Perception' => ['dc' => 7],
            ],
            'features' => [
                'keen_sense'          => ['meta' => 'Smell'],
                'innate_spellcasting' => ['meta' => 'DC 16'],
            ],
            'spells' => [
                'Detect Magic'    => ['meta' => 'At will'],
                'Fog Cloud'       => ['meta' => 'At will'],
                'Light'           => ['meta' => 'At will'],
                'Feather Fall'    => ['meta' => '3/day'],
                'Fly'             => ['meta' => '3/day'],
                'Misty Step'      => ['meta' => '3/day'],
                'Mage Hand'       => ['meta' => '3/day, increase the weight limit to 100 lbs'],
                'Control Weather' => ['meta' => '1/day'],
                'Gaseous Form'    => ['meta' => '1/day'],
            ],
            'languages' => ['Jotun', 'Jostunskye'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Storm Giant';
        $monster->size             = 'Huge';
        $monster->type             = 'Giant';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '11 (Scale Mail) / 10';
        $monster->damage_reduction = '4 (Scale Mail) / 2';
        $monster->hit_dice         = 20;
        $monster->speed            = '50 feet / Swim 50 ft';
        $monster->actions          = '<dl>
    <dt>Greatsword</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (6D6 +9) Slashing.</dd>
    <dt>Rock</dt> <dd>Range Weapon Attack, reach 60/240 ft, one target. (4D12 +9) Bludgeoning.</dd>
    <dt>Lightning Strike (Recharge 5-6)</dt> <dd>The giant hurls a magical lightning bolt at a point it can see within 500 feet of it. Each creature within 10 feet of that point must make a DC 17 DEX Save, taking 54 (12D8) Electricity damage on a failed Save, or half as much damage on a successful one.</dd>
</dl>';
        $monster->description = "<p>Storm giants, known as uvarjotunen in their own language, are one of the most intelligent and respected races of giants.</p>
<p>There are two ethnicities of storm giants; most have pale, light green skin and dark green hair and eyes, but a small number have violet skin, dark blue hair, and silver eyes.</p>
<p>They tend to wear fine tunics and belted sandals. When it comes to armor, they often favor the use of scale mail.</p>
<p>Storm giants have vision that is well adapted to underwater conditions, where they see equally as well as they do in the air. Likewise, their lungs are adapted to surviving in underwater conditions.</p>
<p>Storm giants are known to innately have a high affinity for runecasting as well as traditional sorcery that surpasses the capabilities of other giant races.</p>
<p>The head of a storm giant tribe's ordning is called a 'paramount'. In storm giant society, any act of mercy or charity towards a sentient being is seen as good.</p>
<p>Storm giants that dwell on land are usually seen as being on good terms with nearby copper dragons and good-aligned cloud giants, often working with them to ensure a mutual defense.</p>
<p>They are often known to keep pets and guard animals. Those that live in high elevations, meaning clouds or mountains, typically keep animals such as rocs and griffons. Those that live underwater would often keep sea lions.</p>";
        $helper->saveMonster($monster, ['Giant'], [
            'stats' => [29, 14, 20, 16, 18, 18, 13, 6],
            'saves' => [
                'STR' => ['bonus' => 14],
                'CON' => ['bonus' => 10],
                'WIS' => ['bonus' => 9],
                'CHA' => ['bonus' => 9],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 8],
                'Athletics'  => ['dc' => 14],
                'Lore'       => ['dc' => 8],
                'Perception' => ['dc' => 9],
            ],
            'features' => [
                'amphibious',
                'immunity'            => ['meta' => 'Electricity, Sonic'],
                'resistance'          => ['meta' => 'Cold'],
                'innate_spellcasting' => ['meta' => 'DC 17'],
            ],
            'spells' => [
                'Detect Magic'    => ['meta' => 'At will'],
                'Feather Fall'    => ['meta' => 'At will'],
                'Levitate'        => ['meta' => 'At will'],
                'Light'           => ['meta' => 'At will'],
                'Control Weather' => ['meta' => '3/day'],
                'Water Breathing' => ['meta' => '3/day'],
            ],
            'languages' => ['Jotun', 'Jotunuvar'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Gnoll';
        $monster->size             = 'Medium';
        $monster->type             = 'Gnoll Fiend';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '14 (Hide, Shield) / 11';
        $monster->damage_reduction = '3 (Hide) / 0';
        $monster->hit_dice         = 2;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 +2) Piercing.</dd>
    <dt>Spear</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +2) Piercing.</dd>
    <dt>Spear</dt> <dd>Range Weapon Attack, reach 20/60 ft, one target. (1D6 +2) Piercing.</dd>
</dl>';
        $monster->description = "<p>Gnolls are a humanoid race that most closely resembles human-hyena hybrids within Faerun. They are carnivorous humanoids, known for their savage culture and warlike ways.</p>
<p>Gnolls are extremely tall, with the average member of the race standing on average between 7′0″‒7′6″. Though gnolls are relatively lean for their height, weighing in usually between 280‒320 lb, they cut an impressive visage. In part because of their height and lean musculature, gnolls are very quickly compared with many other races such as humans. Gnoll skin is greenish-gray, and their furry hide a light or dark brown hue, sometimes marked with spots or stripes. Many gnolls also have a dirty yellow to a reddish-gray crest-like mane that stood on end when they were angry.</p>
<p>It is believed by some that gnolls have traces of demonic blood, which may be evidenced by unusual features found among some gnoll bloodlines. These may include talons, gleaming red eyes, or black fur with fiery orange spots.</p>
<p>Female gnolls are indistinguishable from males by size, in spite of a reputation for being shorter. In fact, so similar are male and female gnolls in appearance that they are often mistaken for one another. The only reliable way to tell the difference, other than through a close physical examination, is if a female is pregnant or openly nursing.</p>
<p>Gnolls have very short lifespans when compared with other sapient humanoids, living only 30 or so years on average and maturing to adulthood at a remarkable speed. Gnolls do not, however, age particularly dramatically except at the end of their lifespans, at which point the decline quickly ends in their death. When a gnoll dies, its bones are occasionally harvested by the other gnolls and animated by rituals into a witherling (gnoll zombie), a type of skeletal gnoll.</p>
<p>More so than many other humanoid races, primal instinct is a strong part of the gnoll psyche. Gnolls are natural predators and savors the thrills of the hunt. Almost all gnolls prefer the wilderness to civilization.</p>
<p>Many other races have found the gnoll psyche feral and aggressive, male and female equally. Gnolls start fighting among one another at a very early age and as soon as they can walk.</p>
<p>Though gnolls are not necessarily evil, the craving of the hunt and primal bloodlust that inhabits the gnoll's mind make many of the race lean towards a chaotic evil alignment by reflex. Gnolls that succumb to this tendency often became nomadic savages, wreaking havoc wherever they can, giving them their fearsome reputation as slaving brigands throughout the world. Fortunately, such creatures have rarely been united and although gnolls as a whole have a strong affinity for family and blood ties, this friendliness has not often extended to those who belonged to a different pack and the race has commonly made war on itself. Some gnolls suffer from a rare form of madness that can quell their intense hunger and evil instincts, causing guilt for their misdeeds and a pacifistic nature.</p>
<p>Other gnoll practices might seem equally strange, such as the gnoll propensity for scavenging. At its most basic level, this tendency leads many gnolls to collect trophies that remind them of past victories, items sometimes grisly though just as often simple and mundane, gnoll trackers use this to their benefit, keeping scraps of clothing or other objects with the scent of their prey on them, which they use to point them in the direction of their quarry.</p>
<p>This tendency leads to the even more alien gnoll practice of carrion-eating. Unlike most races, gnolls have few, if any, qualms about eating the dead of other races. When gnolls strike a village they do not only leave no survivors but no corpses, eating most of those whom they don't take as slaves. There are even indications that some gnolls have taken this practice a step further, actually raiding graveyards for fresh corpses on which to feed.</p>
<p>Gnolls are generally known to live in warm plains, though they are highly adaptable and can be found living in most regions, sometimes even underground. They are less common in arid and arctic regions.</p>
<p>In spite of the savage nature of the gnolls, there are some aspects to their culture that are not inherently repulsive. Gnolls place a very strong value on the family, for instance, respecting blood ties perhaps more than any other aspect of a relationship. Though gnolls within a pack will commonly fight with each other for dominance, these battles are quickly forgotten after their resolution, and in most situations, gnolls of the same bloodline are loyal friends and allies to one another. These bloodlines are almost always traced maternally, through the female line.</p>
<p>This loyalty to family is particularly obvious during combat, either with rival gnoll packs or other races. Gnolls who fight side by side regularly throw away personal glory in order to help their brethren. Perhaps most surprisingly, when a gnoll is separated from clan and family their instinctive need for such blood ties leads them to form a surrogate 'pack' from those whom they choose to befriend. To these unlikely allies, the gnoll is as loyal and faithful as they would their own brothers or sisters, embracing the outsiders as if they are family.</p>
<p>While all gnolls have an innate tendency for collecting souvenirs and trophies, nomadic packs, particularly the savage ones who have little contact with other races except during wartime, have found few other ways to acquire technology, crafting few tools of their own. The result of this is that most gnolls rely on the other races as their source of wealth and technology. This extends to arms and weaponry, giving gnoll armor a unique aesthetic where each suit is typically made kitbashed together from scavenged pieces of armor found either on victims or abandoned.</p>
<p>Gnolls of all kinds have an affinity for hyenas, who many see as their brethren and whom they keep as pets or for hunting. Besides hyenas, they are known to keep hyaenodons as pets.</p>";
        $helper->saveMonster($monster, ['Gnoll', 'Fiend'], [
            'stats'    => [14, 12, 11, 6, 10, 7, .5, 2],
            'features' => [
                'darkvision' => ['meta' => '60 feet'],
            ],
            'feats'   => ['Power Attack', 'Sudden Strike'],
            'classes' => [
                'Barbarian' => ['level' => 2],
            ],
            'languages' => ['Gnoll'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Gorynych';
        $monster->size             = 'Huge';
        $monster->type             = 'Dragon';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 16;
        $monster->speed            = '40 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>(2) Melee Weapon Attack, reach 10 ft, one target. (2D6 +8) Slashing</dd>
    <dt>Bite</dt> <dd>(3) Melee Weapon Attack, reach 20 ft, one target. (2D8 +8) Piercing</dd>
    <dt>Tail Whip</dt> <dd>(6) Melee Weapon Attack, reach 10 ft, one target. (1D4 +2) Slashing</dd>
    <dt>Grapple</dt> <dd>(6) Melee Weapon Attack, reach 10 ft, one target. The target is Grappled. The target must be at least 2 sizes smaller than the gorynych. A Grappled foe uses up the tail so that it cannot make a Tail Whip attack with it or Grapple any other creatures.</dd>
    <dt>Rake</dt> <dd>If a Grappled foe is hit with all three Bite attacks, it can use its Claws to automatically hit</dd>
    <dt>Rend</dt> <dd>If a Grappled foe is hit with 2 or more Bite Attacks, it can choose to tear the target apart. The two Bite attacks automatically hits and deals Max damage.</dd>
</dl>';
        $monster->description = "<p>The gorynych is a ferocious, dragon-like monster that eats almost anything short of a true dragon that crosses its path. Despite its bestial appearance, the gorynych is quite cunning. It has been known to feign retreat in order to lure opponents into its lair, or to allow humanoids to escape its attacks so that it can follow them back to their homes and villages.</p>
<p>A gorynych's dragon-like body measures almost 40 feet from snout to tail. Each of its three heads is supported by a long, draconic neck, and its three tails branch into a multitude of long, thin whips. Only the six largest of these whips are significant in combat, though a gorynych can have as many as twelve altogether. The creature weighs between 8 and 10 tons.</p>";
        $helper->saveMonster($monster, ['Dragon'], [
            'stats'  => [27, 15, 22, 12, 17, 18, 12, 5],
            'skills' => [
                'Athletics'    => ['dc' => 18],
                'Intimidation' => ['dc' => 20],
                'Perception'   => ['dc' => 12],
                'Survival'     => ['dc' => 11],
            ],
            'feats' => [
                'Improved Grapple', 'Flyby Attack', 'Great Fortitude', 'Iron Will', 'Multi Attacker', 'Improved Multi Attacker',
            ],
            'features' => [
                'scent',
                'darkvision'   => ['meta' => '60 ft'],
                'immunity'     => ['meta' => 'Paralysis and Sleep effects'],
                'multi_attack' => ['meta' => 'You gain 8 additional Actions. These additional Actions can only be used for Tail Whip, or Claw attacks.'],
            ],
            'languages' => ['Auld Wyrmish', 'Daraktan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Musteval';
        $monster->size             = 'Tiny';
        $monster->type             = 'Guardinal';
        $monster->alignment        = 'NG';
        $monster->armor_class      = '17 (Leather) / 16';
        $monster->damage_reduction = '1 (Leather) / 0';
        $monster->hit_dice         = 2;
        $monster->speed            = '30 ft / Burrow 10 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D3 -2 Piercing.</dd>
</dl>';
        $monster->description = '<p>Mustevals look like 2‑foot-tall (0.61‑meter) humanoid mice. They are agile and rarely stay still. When dealing with other creatures they often use their change self ability to appear differently.</p>';
        $helper->saveMonster($monster, ['Guardinal', 'Celestial', 'Outer Planes', 'Good', 'Outsider', 'Neutral', 'Familiar'], [
            'stats'  => [7, 18, 12, 11, 14, 13, 2, 2],
            'skills' => [
                'Acrobatics' => ['dc' => 7],
                'Athletics'  => ['dc' => 7],
                'Stealth'    => ['dc' => 9, 'meta' => 'Hide +8'],
                'Survival'   => ['dc' => 9],
                'Thievery'   => ['dc' => 9],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Silvered, Unholy'],
                'resistance'          => ['meta' => 'Acid, Cold'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'innate_spellcasting' => ['meta' => 'INT DC 13'],
            ],
            'feats'  => ['Weapon Finesse'],
            'spells' => [
                'Tongues'              => ['meta' => 'At will'],
                'Detect Alignment'     => ['meta' => 'At will'],
                'Detect Magic'         => ['meta' => 'At will'],
                'Disguise Self'        => ['meta' => 'At will'],
                'Magic Missile'        => ['meta' => 'At will'],
                'Protection From Evil' => ['meta' => 'At will, self only'],
                'See Invisibility'     => ['meta' => '1/day'],
            ],
            'languages' => ['Celestial', 'Sylvan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Cervidal';
        $monster->size             = 'Medium';
        $monster->type             = 'Guardinal';
        $monster->alignment        = 'NG';
        $monster->armor_class      = '13 (Hide) / 12';
        $monster->damage_reduction = '3 (Hide) / 1';
        $monster->hit_dice         = 4;
        $monster->speed            = '45 ft';
        $monster->actions          = '<dl>
    <dt>Gore</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D12 +4 Piercing.</dd>
    <dt>Hooves</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D6 +4 Bludgeoning.</dd>
    <dt>Charge</dt> <dd>Bull Rush Attack, reach 45 ft (from a single Move Action), one target. 2D12 +6</dd>
</dl>';
        $monster->description = '<p>Cervidals are the most common kind of guardinal. They live in the Blessed Fields of Elysium and the House of Nature.</p>
<p>Cervidals are goat-like celestials that look similar to satyrs, but are more noble in appearance. They have horns, hooves in place of feet, and bony plating on the backs of their hands. Cervidals are typically slim but muscular in build and are covered by short, reddish-brown or dark red fur.</p>
<p>Cervidals are peaceful by nature, but when they did get involved in a fight, they finished it. In a straight fight, cervidals are more than a match for rank-and-file demons and devils.</p>
<p>Cervidal horns have the interesting abilities of being able to negate poison and disease, dispel illusions, and dismiss a summoned or conjured extraplanar creature by touch.</p>
<p>Manath, the Horned Duke, is the leader of the cervidals and their representative in the Five Companions.</p>';
        $helper->saveMonster($monster, ['Guardinal', 'Celestial', 'Outer Planes', 'Good', 'Outsider', 'Neutral'], [
            'stats'  => [18, 14, 16, 12, 14, 14, 5, 2],
            'skills' => [
                'Animal Handling' => ['dc' => 10],
                'Concentration'   => ['dc' => 10],
                'Insight'         => ['dc' => 8],
                'Perception'      => ['dc' => 8],
                'Survival'        => ['dc' => 9],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Silvered, Unholy'],
                'resistance'          => ['meta' => 'Acid, Cold'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'innate_spellcasting' => ['meta' => 'INT DC 12'],
                'multi_attack'        => ['meta' => 'If the cervidals makes a successful Bull Rush attack, it gains a 2 additional Actions. These additionals Action can only be used to make a Hoof attacks. The cervidals can only gain these additional Actions once per turn.'],
            ],
            'feats'  => ['Improved Initiative', 'Power Attack', 'Improved Bull Rush'],
            'spells' => [
                'Tongues'          => ['meta' => 'At will'],
                'Bless'            => ['meta' => 'At will'],
                'Command'          => ['meta' => 'At will'],
                'Light'            => ['meta' => 'At will'],
                'Reveal Illusion'  => ['meta' => 'At will, Heightened +3'],
                'See Invisibility' => ['meta' => 'At will'],
                'Dispel Magic'     => ['meta' => 'At will'],
                'Hold Person'      => ['meta' => '1/day'],
                'Magic Missile'    => ['meta' => '1/day'],
            ],
            'languages' => ['Celestial', 'Sylvan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Equinal';
        $monster->size             = 'Large';
        $monster->type             = 'Guardinal';
        $monster->alignment        = 'NG';
        $monster->armor_class      = '11 (Hide Armor +1) / 9';
        $monster->damage_reduction = '4 (Hide +1) / 2';
        $monster->hit_dice         = 6;
        $monster->speed            = '60 ft';
        $monster->actions          = '<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 +5 Bludgeoning.</dd>
    <dt>Whinny</dt> <dd>Once per hour, as a Free Action, an equinal can emit a piercing shriek that affects all non-guardinals in a 20 ft spread. Creatures with 4HD or fewer are Stunned for 1D6 rounds, while creatures with more than 4HD are Deafened for 1D6 rounds. A successful DC 16 CON Save negates either effect. This is a Sonic effect.</dd>
</dl>';
        $helper->saveMonster($monster, ['Guardinal', 'Celestial', 'Outer Planes', 'Good', 'Outsider', 'Neutral'], [
            'stats'  => [20, 11, 16, 13, 15, 15, 6, 3],
            'skills' => [
                'Acrobatics' => ['dc' => 2],
                'Arcana'     => ['dc' => 10],
                'Athletics'  => ['dc' => 14],
                'Diplomacy'  => ['dc' => 4],
                'Insight'    => ['dc' => 11],
                'Perception' => ['dc' => 11],
                'Religion'   => ['dc' => 10],
                'Stealth'    => ['dc' => 5],
                'Survival'   => ['dc' => 11],
            ],
            'features' => [
                'magic_resistance',
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Silvered, Unholy'],
                'resistance'          => ['meta' => 'Acid, Cold'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'innate_spellcasting' => ['meta' => 'INT DC 13'],
            ],
            'feats'  => ['Power Attack', 'Improved Bull Rush', 'Improved Sunder'],
            'spells' => [
                'Light'                => ['meta' => 'At will'],
                'Aid'                  => ['meta' => 'At will'],
                'Speak with Animals'   => ['meta' => 'At will'],
                'Cure Wounds'          => ['meta' => '3/day'],
                'Detect Alignment'     => ['meta' => 'At will, Evil only'],
                'Detect Magic'         => ['meta' => 'At will'],
                'Dimension Door'       => ['meta' => 'At will'],
                'Dispel Magic'         => ['meta' => 'At will'],
                'Disguise Self'        => ['meta' => 'At will'],
                'Magic Missile'        => ['meta' => 'At will'],
                'Protection From Evil' => ['meta' => 'At will, self only'],
                'See Invisibility'     => ['meta' => '1/day'],
                'Slow'                 => ['meta' => '1/day'],
                'Wall of Stone'        => ['meta' => '1/day'],
                'Tongues'              => ['meta' => 'At will'],
            ],
            'languages' => ['Celestial', 'Sylvan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Lupinal';
        $monster->size             = 'Medium';
        $monster->type             = 'Guardinal';
        $monster->alignment        = 'NG';
        $monster->armor_class      = '17 (Hide +1) / 15';
        $monster->damage_reduction = '4 (Hide +1) / 2';
        $monster->hit_dice         = 10;
        $monster->speed            = '50 ft';
        $monster->actions          = '<dl>
    <dt>Cold Iron Silvered Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 +6 Piercing.</dd>
    <dt>Cold Iron Silvered Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D6 +6 Piercing.</dd>
    <dt>Howl</dt> <dd>As a Double Action, a lupinal can give a great howl. All good creatures within 60 ft of the lupinal are affected as if by a Bless spell for 1 minute. All neutral creatures are unsettled - they must succeed a DC 18 WIS Save or be affected by a Bane spell for 1 minute. Evil creatures must succeed a DC 18 WIS Save or be Panicked for 1 minute. This is a Compusion, Emotion, Fear effect.</dd>
</dl>';
        $helper->saveMonster($monster, ['Guardinal', 'Celestial', 'Outer Planes', 'Good', 'Outsider', 'Neutral'], [
            'stats'  => [23, 20, 20, 17, 18, 17, 9, 4],
            'skills' => [
                'Acrobatics' => ['dc' => 7],
                'Athletics'  => ['dc' => 7],
                'Stealth'    => ['dc' => 9, 'meta' => 'Hide +8'],
                'Survival'   => ['dc' => 9],
                'Thievery'   => ['dc' => 9],
            ],
            'features' => [
                'magic_resistance',
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Silvered, Unholy'],
                'resistance'          => ['meta' => 'Acid, Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'innate_spellcasting' => ['meta' => 'INT DC 13'],
                'multi_attack'        => ['meta' => 'If the lupinals makes a successful Bite attack, it gains an additional Action. This additional Action can only be used to make a Trip Attack. The lupinal can only gain this additional Action once per turn. Note a Trip Attack requires a Double Action.'],
            ],
            'feats'  => ['Improved Trip'],
            'spells' => [
                'See Invisibility'     => ['meta' => 'At will'],
                'Speak with Animals'   => ['meta' => 'At will'],
                'Tongues'              => ['meta' => 'At will'],
                'Detect Alignment'     => ['meta' => 'At will, Evil only'],
                'Detect Magic'         => ['meta' => 'At will'],
                'Blink'                => ['meta' => 'At will'],
                'Alter Self'           => ['meta' => 'At will'],
                'Magic Missile'        => ['meta' => '3/day'],
                'Cone of Cold'         => ['meta' => '3/day'],
                'Etherealness'         => ['meta' => '1/day'],
                'Fly'                  => ['meta' => '1/day'],
                'Heal'                 => ['meta' => '1/day'],
                'Plane Shift'          => ['meta' => '1/day'],
                'Protection From Evil' => ['meta' => 'At will, self only'],
            ],
            'languages' => ['Celestial', 'Sylvan', 'Telepathy' => ['meta' => '60 ft. works only with creatures that understand Abyssal']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Avoral';
        $monster->size             = 'Medium';
        $monster->type             = 'Guardinal';
        $monster->alignment        = 'NG';
        $monster->armor_class      = '18 (Studded Leather +1) / 16';
        $monster->damage_reduction = '3 (Studded Leather +1) / 2';
        $monster->hit_dice         = 7;
        $monster->speed            = '40 ft / Fly 90 ft';
        $monster->actions          = '<dl>
    <dt>Cold Iron Silvered Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +2) Slashing.</dd>
    <dt>Fear Aura</dt> <dd>Once per day an avoral can create an aura of fear in a 20-foot radius as a Double Action. It is otherwise identical with DC 17 Fear spell.</dd>
</dl>';
        $monster->description = '<p>Avorals are eagle-like guardinals that lived in Elysium and the House of Nature. Of all the guardinals, they are the most likely to leave their homeplane, as they possess a strong wanderlust.</p>
<p>Avorals look mostly humanoid, but possess wings instead of arms, feathered bird-like legs, and feathers on their heads in place of hair. The wings did have a small hand at the midpoint, so that it can function as an arm when folded. Their keen eyes are bright golden. Avorals stand about 6 and a half feet to 7 ft (2.1 m) tall and have a 20 ft (6.1 m) wingspan, but due to their hollow bones only weigh about 120 lb (54,000 g). They can carry up to 300 lb (140,000 g) while flying.</p>';
        $helper->saveMonster($monster, ['Guardinal', 'Celestial', 'Outer Planes', 'Good', 'Outsider', 'Neutral'], [
            'stats'  => [15, 23, 20, 15, 16, 16, 9, 3],
            'skills' => [
                'Acrobatics'      => ['dc' => 7],
                'Animal Handling' => ['dc' => 13],
                'Arcana'          => ['dc' => 12],
                'Athletics'       => ['dc' => 7],
                'Concentration'   => ['dc' => 15],
                'Diplomacy'       => ['dc' => 7],
                'Insight'         => ['dc' => 21],
                'Lore'            => ['dc' => 12],
                'Stealth'         => ['dc' => 16],
                'Survival'        => ['dc' => 3],
            ],
            'features' => [
                'magic_resistance',
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Silvered, Unholy'],
                'resistance'          => ['meta' => 'Acid, Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'innate_spellcasting' => ['meta' => 'INT DC 13'],
            ],
            'feats'  => ['Weapon Finesse', 'Ride-By Attack'],
            'spells' => [
                'Light'                => ['meta' => 'At will'],
                'Magic Missile'        => ['meta' => 'At will'],
                'Speak with Animals'   => ['meta' => 'At will'],
                'Tongues'              => ['meta' => 'At will'],
                'Aid'                  => ['meta' => 'At will'],
                'Blur'                 => ['meta' => 'At will'],
                'Command'              => ['meta' => 'At will'],
                'Detect Alignment'     => ['meta' => 'At will'],
                'Detect Magic'         => ['meta' => 'At will'],
                'See Invisibility'     => ['meta' => 'At will'],
                'Gust of Wind'         => ['meta' => 'At will'],
                'Hold Person'          => ['meta' => 'At will'],
                'Disguise Self'        => ['meta' => 'At will'],
                'True Seeing'          => ['meta' => 'At will'],
                'Protection From Evil' => ['meta' => 'At will, self only'],
                'Lightning Bolt'       => ['meta' => '3/day'],
            ],
            'languages' => ['Celestial', 'Sylvan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Ursinal';
        $monster->size             = 'Medium';
        $monster->type             = 'Guardinal';
        $monster->alignment        = 'NG';
        $monster->armor_class      = '14 (Scale Mail +2) / 11';
        $monster->damage_reduction = '6 (Scale Mail +2) / 3';
        $monster->hit_dice         = 10;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Holy Bite +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +7) Slashing.</dd>
    <dt>Holy Claws +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +7) Piercing.</dd>
</dl>';
        $monster->description = '<p>Ursinals are mighty guardinals that are native to the Blessed Fields of Elysium and the House of Nature. They are the philosophers and scholars of the guardinals and act as advisers to the leonals.</p>
<p>Ursinals look like large humanoids with distinct bear-like attributes, including fur that was light golden, red, or golden brown in color, and a pronounced muzzle and upright ears. Ursinals are kind creatures and enjoy sharing their knowledge with others but have a tendency to digress when talking about a subject. They dislik physical combat and violence but are fierce fighters and mighty spellcasters, having a wide array of spells and spell-like abilities.</p>';
        $helper->saveMonster($monster, ['Guardinal', 'Celestial', 'Outer Planes', 'Good', 'Outsider', 'Neutral'], [
            'stats'  => [25, 12, 18, 21, 19, 20, 11, 4],
            'skills' => [
                'Acrobatics' => ['dc' => 7],
                'Athletics'  => ['dc' => 7],
                'Stealth'    => ['dc' => 9, 'meta' => 'Hide +8'],
                'Survival'   => ['dc' => 9],
                'Thievery'   => ['dc' => 9],
            ],
            'features' => [
                'magic_resistance',
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Silvered, Unholy'],
                'resistance'          => ['meta' => 'Acid, Cold, Poison, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'innate_spellcasting' => ['meta' => 'INT DC 15'],
            ],
            'feats'  => ['Weapon Finesse'],
            'spells' => [
                'Speak with Animals'   => ['meta' => 'At will'],
                'Tongues'              => ['meta' => 'At will'],
                'Detect Alignment'     => ['meta' => 'At will'],
                'Detect Magic'         => ['meta' => 'At will'],
                'Reveal Illusion'      => ['meta' => 'At will'],
                'Magic Missile'        => ['meta' => 'At will'],
                'Daylight'             => ['meta' => 'At will'],
                'Protection From Evil' => ['meta' => 'At will, self only'],
                'See Invisibility'     => ['meta' => 'At will'],
                'Sleep'                => ['meta' => 'At will'],
                'Fog Cloud'            => ['meta' => 'At will'],
                'Polymorph'            => ['meta' => 'At will, Self only'],
                'Hold Person'          => ['meta' => '3/day, Heightened +3'],
                'Remove Disease'       => ['meta' => '3/day'],
                'Neutralize Poison'    => ['meta' => '3/day'],
                'Heal'                 => ['meta' => '3/day'],
            ],
            'classes' => [
                'Wizard' => ['level' => 12],
            ],
            'languages' => ['Celestial', 'Sylvan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Leonal';
        $monster->size             = 'Medium';
        $monster->type             = 'Guardinal';
        $monster->alignment        = 'NG';
        $monster->armor_class      = '18 (Breast Plate +2) / 14';
        $monster->damage_reduction = '7 (Breast Plate +2) / 3';
        $monster->hit_dice         = 12;
        $monster->speed            = '60 ft';
        $monster->actions          = '<dl>
    <dt>Holy Claws +3</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +11) Slashing.</dd>
    <dt>Roar</dt> <dd>A leonal can roar up to 3 times per day. Each roar releases a blast in a 60-foot cone that duplicates the effects of a Holy Word spell and deals an extra 2D6 points of Sonic damage DC 20 CON Save.</dd>
</dl>';
        $monster->description = '<p>Leonals are the mightiest kind of guardinal. They have a variety of spell-like abilities and are incredibly fast and agile. They resemble muscular, humanoid lions of regal appearance. Leonals live in Elysium and the House of Nature.</p>';
        $helper->saveMonster($monster, ['Guardinal', 'Celestial', 'Outer Planes', 'Good', 'Outsider', 'Neutral'], [
            'stats'  => [27, 18, 20, 14, 14, 15, 12, 4],
            'skills' => [
                'Acrobatics'    => ['dc' => 22],
                'Athletics'     => ['dc' => 7],
                'Concentration' => ['dc' => 12],
                'Diplomacy'     => ['dc' => 4],
                'Insight'       => ['dc' => 17],
                'Lore'          => ['dc' => 17],
                'Perception'    => ['dc' => 17],
                'Stealth'       => ['dc' => 22],
                'Survival'      => ['dc' => 9],
                'Thievery'      => ['dc' => 9],
            ],
            'features' => [
                'magic_resistance',
                'darkvision'          => ['meta' => '60 ft'],
                'vulnerability'       => ['meta' => 'Silvered, Unholy'],
                'resistance'          => ['meta' => 'Acid, Cold'],
                'immunity'            => ['meta' => 'Charmed, Electricity, Petrification'],
                'multi_attack'        => ['meta' => 'If a leonal makes a successful Charge attack, it gains an additional Action. This additional Action can only be used to make a Claw attack. The leonal can only gain this additional Action once per turn.'],
                'innate_spellcasting' => ['meta' => 'INT DC 13'],
            ],
            'feats'  => ['Dodge', 'Power Attack', 'Strong Defense'],
            'spells' => [
                'Speak with Animals'   => ['meta' => 'At will'],
                'Tongues'              => ['meta' => 'At will'],
                'Detect Alignment'     => ['meta' => 'At will'],
                'Detect Magic'         => ['meta' => 'At will'],
                'Fireball'             => ['meta' => 'At will'],
                'Hold Person'          => ['meta' => 'At will, Heightened +3'],
                'Magic Missile'        => ['meta' => 'At will'],
                'Protection From Evil' => ['meta' => 'At will, self only'],
                'Wall of Force'        => ['meta' => 'At will'],
                'See Invisibility'     => ['meta' => 'At will'],
                'Cure Wounds'          => ['meta' => '5/day, Heightened +5'],
                'Neutralize Poison'    => ['meta' => '3/day'],
                'Remove Disease'       => ['meta' => '3/day'],
                'Heal'                 => ['meta' => '1/day'],
            ],
            'languages' => ['Celestial', 'Sylvan'],
        ]);
    }
}
