<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $monster              = new Monster;
        $monster->name        = 'Beguiler';
        $monster->size        = 'Small';
        $monster->type        = 'Fey';
        $monster->alignment   = 'N';
        $monster->armor_class = '14';
        $monster->hit_dice    = 2;
        $monster->speed       = '30 ft / Climb 10 ft';
        $monster->actions     = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 -2) Slashing</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 -2) Piercing</dd>
    <dt>Rake</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 -2) Slashing. Only if succeed in two Claw attacks in the same round.</dd>
</dl>';
        $monster->description = "<p>The beguiler is an exceptionally intelligent creature with natural camouflaging and the ability to see the truth behind any illusion. A beguiler is about a foot tall and around 2 feet long. Though not particularly aggressive, beguilers are prized by wizards as familiar or for the magic inherent in their pelts.</p>
<p>The origin of the beguiler's unusual powers has long been a mystery, but those who studied this creature have determined that it is the favored prey of the ethereal marauders. The beguiler species seems to have developed its unique abilities to avoid these planar predators. Beguilers feed on both plants and animals, preferring plump water-rich cacti prevalent in their native environment as well as small field mice and the eggs and young of ground nesting birds.</p>
<p>A beguiler can be acquired as a familiar by sacrificing a 4th level Spell Slot and the Improved Familiar feat.</p>";
        $helper->saveMonster($monster, ['Fey'], [
            'stats'  => [6, 17, 11, 12, 10, 11, 1, 2],
            'skills' => [
                'Athletics' => ['dc' => 7],
                'Stealth'   => ['dc' => 5],
            ],
            'feats' => [
                'Weapon Finesse',
            ],
            'features' => [
                'multi_attack' => ['meta' => 'If the beguiler hits with 2 Claw attacks, then the beguiler gains an Additional Action. This Additional Action can only be used to make Rake attacks.'],
            ],
            'spells' => [
                'True Seeing' => ['meta' => 'Always on'],
            ],
            'languages' => ['Sylvan'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Blink Dog';
        $monster->size        = 'Medium';
        $monster->type        = 'Fey';
        $monster->alignment   = 'N(G)';
        $monster->armor_class = '13';
        $monster->hit_dice    = 3;
        $monster->speed       = '40 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 4 (1D6 +1) Piercing.</dd>
    <dt>Teleport (Recharge 4-6)</dt> <dd>The dog magically Teleports, along with any equipment it is wearing or carrying, up to 40 feet to an unoccupied space it can see.</dd>
</dl>';
        $monster->description = '<p>A blink dog takes its name from its ability to blink in and out of existence, a talent it uses to aid its attacks and to avoid harm. Blink dogs harbor a long-standing hatred for displacer beasts and attack them on sight.</p>
<dl>
    <dt>Animal Companion</dt> <dd>2nd Level Spell Slot (Ranger 1st Level Spell Slot).</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Animal Companion'], [
            'stats'  => [12, 17, 12, 10, 13, 11, .25, 2],
            'skills' => [
                'Perception' => ['dc' => 3],
                'Stealth'    => ['dc' => 5],
            ],
            'features' => [
                'keen_sense' => ['meta' => 'Hearing and Smell'],
            ],
            'languages' => [
                'Sylvan'  => ['meta' => 'Cannot speak'],
                'Special' => ['meta' => 'Custom language based on sounds that dogs can make'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Centaur';
        $monster->size             = 'Large';
        $monster->type             = 'Fey';
        $monster->alignment        = 'NG';
        $monster->armor_class      = '12 (Hide) / 11';
        $monster->damage_reduction = '3 (Hide) / 0';
        $monster->hit_dice         = 4;
        $monster->speed            = '50 ft';
        $monster->actions          = '<dl>
    <dt>Pike</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (1D10 +4) Piercing.</dd>
    <dt>Hooves</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +4) Bludgeoning.</dd>
    <dt>Longbow</dt> <dd>Ranged Weapon Attack, reach 150/600 ft, one target. (1D8) Piercing.</dd>
</dl>';
        $monster->description = '<p>A Centaur has the body of a great horse topped by a humanoid torso, head, and arms. Reclusive wanderers, they avoid conflict but fight fiercely when pressed.</p>';
        $helper->saveMonster($monster, ['Fey'], [
            'stats'  => [18, 14, 14, 9, 13, 11, 1, 2],
            'skills' => [
                'Athletics'  => ['dc' => 6],
                'Perception' => ['dc' => 3],
                'Survival'   => ['dc' => 3],
            ],
            'feats'     => ['Ride-By Attack'],
            'languages' => ['Sylvan', 'Seldruin'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Cockatrice';
        $monster->size        = 'Small';
        $monster->type        = 'Fey';
        $monster->alignment   = '-';
        $monster->armor_class = '12';
        $monster->hit_dice    = 2;
        $monster->speed       = '20 ft / FLy 40 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 -2 minimum 1 point) Piercing and if the attack hits bare flesh (thin clothing is not sufficient), the target must succeed on a DC 11 CON Save against being magically Petrified. On a Failed Save, the creature becomes Petrified. It must repeat the Save at the beginning of its next turn. On a Success, the effect ends. On a Failure, the creature is Petrified for 1 day.</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Beast'], [
            'stats'    => [6, 12, 12, 2, 13, 5, .5, 2],
            'features' => [
                'darkvision' => ['meta' => '{"range":60}'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Dark Tree';
        $monster->size             = 'Huge';
        $monster->type             = 'Fey';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '7';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 10;
        $monster->speed            = '10 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. (1D8 +9) Slashing</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +9) Piercing and Blood Draining (1D4) CON damage</dd>
</dl>';
        $monster->description = "<p>Dark trees resemble cypress trees, but their bark is darker and little moss grows on them. Usual specimens are about 18 to 20 feet in height, with a span of branches 40 feet across, but dark trees can grow to twice this size. They weigh as much as a normal tree. Two deep black eyes, which are almost impossible to find unless one knows precisely where to look, are set about a dark tree's maw. These creatures superficially resemble treants, but anyone who sees a dark tree can hardly ignore the palpable hatred and eveil emanating from it.</p>
<p>Dark trees do not speak.</p>";
        $helper->saveMonster($monster, ['Fey', 'Plant'], [
            'stats'  => [28, 8, 21, 5, 10, 7, 7, 3],
            'skills' => [
                'Perception' => ['dc' => 5],
            ],
            'feats' => [
                'Power Attack', 'Great Fortitude', 'Improved Grapple',
                'Weapon Focus' => ['meta' => 'Claw'],
            ],
            'features' => [
                'resistance'    => ['meta' => 'Fire'],
                'vulnerability' => ['meta' => 'Cold'],
            ],
            'spells' => [
                'Confusion' => ['meta' => '6/day. As an Action'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Displacer Beast';
        $monster->size             = 'Large';
        $monster->type             = 'Fey';
        $monster->alignment        = 'N(E)';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 8 (1D6 +4) Piercing. The displacer beast does not like to make Bite attacks.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 6 (1D4 +4) Slashing. The displacer beast does not like to make claw attacks.</dd>
    <dt>Tentacle</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 7 (1D6 +4) Bludgeoning.</dd>
</dl>';
        $monster->description = '
<p>The displacement effect is an effect of minute vibrations of the skin and fur. This causes light to refract and causes the beast to appear shifted from where it actually is. This effect stops if the beast is incapacitated or has a Speed of 0.</p>
<p>Other displacer beasts are immune to this effect due to their special green eyes.</p>
<dl>
    <dt>Animal Companion</dt> <dd>4th Level Spell Slot (Ranger 2nd Level Spell Slot).</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Beast', 'Animal Companion'], [
            'stats'    => [18, 15, 16, 6, 12, 8, 3, 2],
            'features' => [
                'displacement' => ['meta' => 'Attackers have Disadvantage to hit you. If hit, this effect ends until the displacer beast moves again.'],
                'multi_attack' => ['meta' => 'The displacer beast gains an additional Action. This Action can only be used to make a Tentacle attack.'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Dryad';
        $monster->size        = 'Medium';
        $monster->type        = 'Fey';
        $monster->alignment   = 'N';
        $monster->armor_class = '11';
        $monster->hit_dice    = 4;
        $monster->speed       = '30 ft';
        $monster->actions     = "<dl>
    <dt>Club</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2 (1D4) Bludgeoning. The dryad can cast Shillelagh on the club and gains this changes. +3 to hit, 2D4 + 1</dd>
    <dt>Fey Charm</dt> <dd>
        <p>The dryad targets one humanoid or beast that she can see within 30 feet of her. If the target can see the dryad, it must succeed on a DC 14 WIS Save or be magically Charmed. The Charmed creature regards the dryad as a trusted friend to be heeded and protected. Although the target isn't under the dryad's control, it takes the dryad's requests or actions in the most favorable way it can.</p>
        <p>Each time the dryad or its allies do anything harmful to the target, it can repeat the Save, ending the effect on itself on a success. Otherwise, the effect lasts 24 hours or until the dryad dies, is on a different plane of existence from the target, or ends the effect as an Action. If a target's Save is successful, the target is immune to the dryad's Fey Charm for the next 24 hours.</p>
        <p>The dryad can have no more than one humanoid and up to three beasts charmed at a time.</p>
    </dd>
</dl>";
        $monster->description = "<p>Dryads appear to be beautiful women with delicate features seemingly made of soft wood. Their hair seem to be made of leaves and foliage that change color with the seasons of the calendar. During the spring and summer months, the hair of a dryad is lush and green, while during autumn it turns red and eventually brown in winter.</p>
<p>Dryads prefer to live away from civilization, delighting in the savage wilderness away from those that sought to cut their trees. They live with respect to nature and accept the company of those that did so as well. Attractive men who are fond of nature were often taken in by a dryad as both her mate and guardian.</p>
<p>Dryads are generally benign, and attempt to warn off intruders. Only those who are particularly cruel and determined to destroy a dryad's forest saw the full wrath of these fey.</p>
<p>All dryads are magically bound to a single tree. These trees serve as the dryad's life force and home. They fight to the death to protect their bonded tree, as should the tree be cut or destroyed, the dryad dies soon afterward. A dryad can not stray too far from her bonded tree without suffering the same fate. If a dryad leaves the vicinity of her tree for too long, she dies.</p>";
        $helper->saveMonster($monster, ['Fey'], [
            'stats'    => [10, 12, 11, 14, 15, 18, 1, 2],
            'features' => [
                'innate_spellcasting' => ['meta' => 'INT DC 14'],
                'magic_resistance'    => [],
            ],
            'skills' => [
                'Perception' => ['meta' => 4],
                'Stealth'    => ['meta' => 5],
            ],
            'spells' => [
                'Speak with Animals' => ['meta' => 'At will'],
                'Speak with Plants'  => ['meta' => 'At will'],
                'Tree Stride'        => ['meta' => 'At will'],
                'Entangle'           => ['meta' => '3/day'],
                'Goodberry'          => ['meta' => '3/day'],
                'Barkskin'           => ['meta' => '1/day'],
                'Pass Without Trace' => ['meta' => '1/day'],
                'Shillelagh'         => ['meta' => '1/day'],
            ],
            'feats'     => ['Two-Weapon Fighter'],
            'languages' => ['Sylvan'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Doppelganger';
        $monster->size        = 'Medium';
        $monster->type        = 'Fey';
        $monster->alignment   = 'NG';
        $monster->armor_class = '14';
        $monster->hit_dice    = 4;
        $monster->speed       = '30 ft / Fly 30 ft';
        $monster->actions     = "<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +3 +2 (Psionic Fist)) Bludgeoning.</dd>
    <dt>Shapechanger</dt> <dd>The doppelganger can with a Triple Action, polymorph into a Small or Medium humanoid it has seen, or back into its true form. Its statistics, other than its size, are the same in each form. Any equipment it is wearing or carrying isn't transformed. It reverts to its true form if it dies. This could be a version of the Psionic Power Metamorphosis.</dd>
</dl>";
        $monster->description = "<p>Doppelgangers, otherwise known by themselves as Shallar, are humanoids, infamous for their shapeshifting abilities that allow them to mimic almost any humanoid creature. There is also a stronger, more capable subspecies known as greater doppelgangers or mirrorkin.</p>
<p>In their true form, doppelgangers appear as tall, elven, gray-skinned humanoids, whose thin hairless bodies make them appear, to human eyes, sexless. Their heads are bulbous, with formless faces and bulging eyes that are a pale yellow hue and lack visible pupils. Though even this form is deceptive, as it gives the impression that they are  physically weak, when in fact they were quite strong and agile.</p>
<p>They are lazy but cunning creatures, who kill or dispose of people then assume their place. While not actually evil, doppelgangers are extremely self-centered and liable to look down on their victims. Because of their laziness and selfishness, they rarely ever have any interest in raising their young.</p>
<p>The union of a doppelganger and another creature produce children that are either a doppelganger or what was known as a half-doppelganger. However, such children will be unaware of their true nature until they reach adolescence, at which point they will try to seek out others of their kind.</p>
<p>Doppelgangers can assume shapes of any humanoid creatures between 4‒8 ft in height. After they choose their victim they duplicate the victim's form, clothing, and equipment, and attempt to kill the original. The biggest boon for the doppelgangers is the confusion their shapeshifting causes.</p>
<p>These shapeshifters are immune to many mind affecting spells, such as sleep and charm spells. They also possess a continuous psionic-like ability to detect the thoughts of their victims and opponents, which some describe as being a form of ESP. They will often use this ability to learn everything they could about their chosen target.</p>
<p>Though their abilities allow them to physically impersonate other creatures, a normal doppelganger can not duplicate the languages, memories, mannerisms, or personality of their victims. Because of this they sometimes keep the original alive and close by for weeks when their plans are more long-term. While captured a victim's mind would be read daily by a doppelganger in order to learn how to best behave and speak without being detected.</p>
<p>Doppelgangers tend to be solitary creatures, though they are also known to operate in small groups as part of longer cons, as doing so further ensures their infiltration and attacks are successful. Many live a stolen life. When they encounter a person whose appearance or station they desire, the doppelganger uses their mental powers to learn everything they can about the chosen target. Once they have all the knowledge they need, they quietly eliminate or capture their target and assume their form, taking their place in life.</p>
<p>Doppelganger families tend not to be close; usually, a male and female meet, engage in casual sex, then leave one another, with the female being forced to single-handedly rear any resulting newborns—who leave their mother upon reaching maturity. Some, however, form tightly-knit family clusters, while others mated with humanoids, taking malicious delight in using their spouse as a cover for their inhumanity.</p>
<p>Doppelgangers are highly feared by most races for their ability to assume the form of any humanoid creature they encounter. Knowledge of their presence tends to make people very paranoid and suspicious of others.</p>
<p>Whenever food or treasure is scarce they will work for other creatures, though they prefer doing business with the magically inclined. Many beings throughout the Realms are known to utilize them as spies, assassins, or in elaborate plots to usurp power.</p>";
        $helper->saveMonster($monster, ['Fey', 'Shapechanger'], [
            'stats'  => [16, 18, 14, 11, 12, 14, 3, 2],
            'skills' => [
                'Deception' => ['dc' => 6],
                'Insight'   => ['dc' => 3],
            ],
            'feats'    => [
                'Sudden Strike' => ['meta' => '3D6'],
                'Psionic Talent',
                'Expanded Knowledge',
                'Psionic Fist',
            ],
            'features' => [
                'darkvision' => ['meta' => '{"range":60}'],
                'immunity'   => ['meta' => 'Charm'],
            ],
            'powers' => [
                'Chameleon',
                'Sense Minds',
                'Read Thoughts',
                'Biofeedback',
                'Physical Augmentation',
            ],
            'classes'   => ['Psychic Warrior' => ['level' => 4]],
            'languages' => ['Special' => ['meta' => 'Can learn 3 regional languages']],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Giant Eagle';
        $monster->size        = 'Large';
        $monster->type        = 'Fey';
        $monster->alignment   = 'NG';
        $monster->armor_class = '13';
        $monster->hit_dice    = 4;
        $monster->speed       = '10 ft / Fly 80 ft';
        $monster->actions     = '<dl>
    <dt>Club</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2 (1D4) Bludgeoning. The dryad can cast Shillelagh on the club and gains this changes. +3 to hit, 2D4 + 1</dd>
</dl>';
        $monster->description = "<p>Giant eagles are intelligent, keen-eyed birds of prey that sometimes associate with good creatures. A giant eagle is a noble creature that speak Auran.</p>
<p>Giant eagles consider themselves to be the defenders of mountaintops and will make fast friends with any who respect and aid them in times of need.</p>
<p>As an intelligent creature, Giant eagles are expected to be treated with respect or their pride would be hurt.</p>
<p>Giant eagles are found in the Nether, Rauvin, and Ice Mountains, as well as the Spine of the World, in northwest Faerun. They are also found in the Dragonjaw, Thesk, and Sunrise Mountains in northeast Faerun. Giant eagles also nest in Evermeet in the Guardian Trees.</p>
<p>In the Unapproachable East, they can be found around the Umbergoth mountain of Aglarond.</p>
<p>In the Zakhara region's Crowded Sea, they can be found on the island chain of Nada al-Hazan and the archipelago of Jazayir al-Sartan.</p>
<p>Giant eagles are prized as mounts, even being the sole mounts for the Eagle Knights of Evermeet. They are also revered by the Eagle Tribe hunters in the western region of the Shaar.</p>
<p>They are sometimes seen guarding or accompanying elves or dwarves and are known to be capable of forging strong friendships that can last their entire lives.</p>
<p>The clergy of Aerdrie Faenya are primarily concerned with exploration and maintaining good relations with giant eagles.</p>
<p>For a very long time Avariels nourished a respectful bond with giant eagles.</p>";
        $helper->saveMonster($monster, ['Fey', 'Beast', 'Animal Companion'], [
            'stats'  => [16, 17, 13, 8, 14, 10, 1, 2],
            'skills' => [
                'Perception' => ['dc' => 4],
            ],
            'features' => [
                'keen_sense' => ['meta' => 'Sight'],
            ],
            'languages' => [
                'Auran'  => ['meta' => 'Cannot speak'],
                'Sylvan' => ['meta' => 'Cannot speak'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Goblin';
        $monster->size             = 'Small';
        $monster->type             = 'Fey';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '16 (Leather, Shield) / 14';
        $monster->damage_reduction = '1 (Leather) / 0';
        $monster->hit_dice         = 1;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Scimitar</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D6 Slashing.</dd>
    <dt>Shortbow</dt> <dd>Range Weapon Attack, reach 80/320 ft, one target. 1D6 Piercing.</dd>
</dl>';
        $monster->description = "<p>Goblins are a race of small and numerous fey, that have been dominated by their god away from their fey origins. They often live in underground caverns near the surface. The race is often, dominated by other goblinoids, most commonly hobgoblins.</p>
<p>Goblins usually stand between 3`4\" - 3`8\" and weigh about 40-55 lbs on average. They have flat faces, sloped-back foreheads, broad noses, pointed ears, and small sharp fangs, with eyes that vary in color from red to yellow. Their skin color ranges from yellow through any shade or orange to a deep red, through they also com in shades of green. All members of the same tribe normally share the same skin color.</p>
<p>Goblins typically dress in dark leathers soiled by poor hygiene and colored in a similar range of tones to their skin.</p>
<h3>Personality</h3>
<p>Like other goblinoids, goblins often have a short temper, and are more easily provoked than individuals of most other races. They often find it difficult to overcome this short fuse, and have a sense of greed that made it difficult for them to act altruistically. They also generally take sadistic pleasure in exacting revenge once crossed.</p>
<p>Young goblins are taught from an early age to rely only on themselves, and that to survive, they need to be aggressive and ruthless. To a goblin, it doesn't seem logical to treat others as well as or better than you will treat yourself; rather, they believe in preemptively removing potential rivals before they can become a threat. Expatriated goblins sometimes try to recreate the circumstances of their culture, preying on the weaknesses of others in non-goblin communities.</p>
<p>Despite their generally poor reputation however, not all goblins are dim-witted or evil. Some goblins rise to become heroes, gaining enough renown to be accepted into the civilized world of other, more commonly good races. Those goblins seeking this path may find it difficult to overcome their temper and greed, as well as the cultural influence of their brethren, but those who do often find it can be more rewarding, in the long run at least, to serve good rather than to serve evil.[15] Those that do often make use of their ill-gained talents as rogues or fighters.</p>
<h3>Combat</h3>
<p>Being bullied by bigger, stronger creatures have taught goblins to exploit what few advantages they have, namely sheer numbers and malicious ingenuity. They favor ambushes, overwhelming odds, dirty tricks, and any other edges they can devise, the concept of a fair fight being meaningless in their society.</p>
<p>Goblins are an elusive and nimble race, which enables them to slip away from danger more easily than most. In combat, goblins often use this advantage to sneak up on enemies and deal them a blow from hiding and then slip away before they can be retaliated against.</p>
<p>When they have superior numbers in battle, goblins attempt to flank lone combatants. Retreat or surrender is their general response to being outmatched.</p>
<p>Goblins are often known to fight with military picks, morningstars, short swords, slings, and spears.</p>
<h3>Society</h3>
<p>Goblin society is tribal, typically led by the strongest or smartest who claim the best weapons, often rising through aggression, betrayal, or as clerics. Due to this violent culture, goblins frequently fall under the domination of larger, more powerful groups, especially hobgoblins and bugbears.</p>
<p>Goblins have little concept of privacy, living and sleeping in large communal areas with only the leaders living separately in their own private chambers. As such, goblin lairs are often stinking or soiled, though easily defended when under assault and layered with simple traps for such purposes. The innermost chambers of goblin lairs are usually the most densely-populated and well-defended. Goblin settlements are often filled with young goblin children, partially due to gender roles, though young goblins do not outnumber adults since their lives are often at least as dangerous as their forebears.</p>
<p>Goblin society relies on dominant males to sustain the community through raiding and stealing by night, while females are expected to maximize childbearing to offset high mortality rates. Consequently, many goblins who leave to live among other races are females escaping these rigid societal expectations.</p>
<p>Some goblin tribes are not above waylaying travelers on the road or in forests and stripping them of their possessions. Goblins sometimes capture slaves to perform hard labor in the tribe's lair or camp.</p>
<p>Goblin society is built on cruelty, and not every goblin is willing to spend its life on the receiving end of it. Some goblins, mostly female (due to goblin society being even more difficult for females) will escape their tribe. Rarely, a goblin will be willing to be a familiar so long as they are treated reasonably (this is due to their fey background). Goblin Familiars are still not able (unwilling) to fight. If they become Animal Companions (by gaining levels in classes) then they are capable of fighting.</p>
<h3>Relationships</h3>
<p>Goblins are often considered little more than a nuisance. They do not get along well with most other races and are particularly suspicious of other goblinoids. Goblins have a somewhat ambivalent relationship with orcs and half-orcs, whom they work with on occasion, but the only true allies of the goblin race are worgs, who often act as mounts and fighting companions for goblins.</p>
<p>Goblins have particularly adverse relationships with dwarves, gnomes, and Tel-quessir (elves).</p>
<p>Some are known to domesticate worgs.</p>
<h3>Religion</h3>
<p>Goblins primarily worship members of the goblinoid pantheon, such as Maglubiyet in particular, who inspires them with his feats of strength and treachery. Following the Spellplague and prior to the Second Sundering, however, the power of the Black Lord Bane grows and extends his power over Maglubiyet, making the goblin god one of his exarchs. Following the Second Sundering, goblins again worship deities such as Maglubiyet and Khurgorbaeyag.</p>
<h3>Homelands</h3>
<p>Goblins often inhabit temperate plains, though many are also known to live in caverns or underground.</p>";
        $helper->saveMonster($monster, ['Goblin', 'Fey', 'Animal Companion'], [
            'stats'    => [8, 14, 10, 10, 8, 8, .25, 2],
            'features' => [
                'darkvision' => ['meta' => '{"range":60}'],
            ],
            'skills' => [
                'Stealth' => ['dc' => 6],
            ],
            'classes' => [
                'Rogue' => ['level' => 1],
            ],
            'languages' => ['Ghukliak'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Hobgoblin';
        $monster->size             = 'Medium';
        $monster->type             = 'Fey';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '15 (Chain Mail, Shield) / 11';
        $monster->damage_reduction = '6 (Chain Mail) / 0';
        $monster->hit_dice         = 1;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Longsword</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 +1 Slashing.</dd>
    <dt>Longbow</dt> <dd>Range Weapon Attack, reach 150/600 ft, one target. 1D8 +1 Piercing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Goblin', 'Fey'], [
            'stats'    => [13, 12, 12, 10, 10, 9, .5, 2],
            'features' => [
                'darkvision' => ['meta' => '{"range":60}'],
            ],
            'feats'   => ['Power Attack'],
            'classes' => [
                'Fighter' => ['level' => 1],
            ],
            'languages' => ['Ghukliak'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Bugbear';
        $monster->size             = 'Medium';
        $monster->type             = 'Fey';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '15 (Hide, Shield) / 12';
        $monster->damage_reduction = '3 (Hide) / 0';
        $monster->hit_dice         = 2;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Morningstar</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 +2 Piercing.</dd>
    <dt>Javelin</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D6 +2 Piercing.</dd>
    <dt>Javelin</dt> <dd>Range Weapon Attack, reach 30/120 ft, one target. 1D6 +2 Piercing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Goblin', 'Fey'], [
            'stats'  => [15, 14, 13, 8, 11, 9, 1, 2],
            'skills' => [
                'Stealth'  => ['dc' => 6],
                'Survival' => ['dc' => 2],
            ],
            'features' => [
                'darkvision' => ['meta' => '{"range":60}'],
            ],
            'feats'   => ['Power Attack', 'Sudden Strike'],
            'classes' => [
                'Fighter' => ['level' => 1],
                'Rogue'   => ['level' => 1],
            ],
            'languages' => ['Ghukliak'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Bog Hag';
        $monster->size             = 'Medium';
        $monster->type             = 'Fey';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 2;
        $monster->speed            = '30 ft / Swim 30 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6) Slashing. If the target is a creature, it must make a DC 12 CON Save or contract Bog Rot disease.
        <dl>
            <dt>Bog Rot (disease)</dt> <dd>
                <ul>
                    <li><strong>Stage 1</strong> Sick 1</li>
                    <li><strong>Stage 2</strong> Sick 1 and cannot gain Hit Points</li>
                    <li><strong>Stage 3</strong> Sick 2, cannot gain Hit Points, and take 1 CON damage each day</li>
                </ul>
                <dl>
                    <dt>Critical Success</dt> <dd>Unaffected</dd>
                    <dt>Success</dt> <dd>The target is Sick 1</dd>
                    <dt>Failure</dt> <dd>The target is inflicted with Bog Rot at Stage 1</dd>
                    <dt>Critical Failure</dt> <dd>The target is inflicted with Bog Rot at Stage 2</dd>
                </dl>
            </dd>
        </dl>
    </dd>
    <dt>Skinsuit</dt> <dd>The bog hag magically transforms its appearance to look like a humanoid whom it has killed and whose skin it wears. Its statistics, other than its size, are the same.  The skinsuit rots and is destroyed in one week unless a gentle repose or similar magic is cast upon it.</dd>
</dl>';
        $monster->description = '<p>Bog hags are vile, swamp-dwelling hags, heinous crones that prey on humans. They steal the flesh of their victims to hide their hideous forms, using their hides as an appealing, skin-deep disguise.</p>
<p>In their true forms, bog hags appear as green, ugly beldams with jagged teeth and sharp nails, standing about 6 ft tall and weighing about 110 lb on average.</p>
<p>Bog hags are skilled in the art of deception and reading intent, as well as intimidation. They are also well-versed in matters of the natural world.</p>';
        $helper->saveMonster($monster, ['Fey'], [
            'stats'  => [11, 12, 15, 10, 12, 13, .25, 2],
            'skills' => [
                'Deception'    => ['dc' => 5],
                'Insight'      => ['dc' => 3],
                'Intimidation' => ['dc' => 5],
                'Perception'   => ['dc' => 3],
            ],
            'feats'    => ['Hag Spellcaster'],
            'features' => [
                'darkvision'      => ['meta' => '{"range":60}'],
                'vulnerability'   => ['meta' => 'Fire'],
                'favored_terrain' => ['meta' => 'Bogs and Swamps'],
            ],
            'spells' => [
                'Animate Dead' => ['meta' => '1/day, 5 zombies only at any time'],
            ],
            'languages' => ['Sylvan', 'Aquan', 'Special' => ['meta' => '1 Region language']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Sea Hag';
        $monster->size             = 'Medium';
        $monster->type             = 'Fey';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '30 ft / Swim 40 ft';
        $monster->actions          = "<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +3) Slashing.</dd>
    <dt>Death Glare</dt> <dd>The hag targets one frightened creature she can see within 30 ft. of her. If the target can see the hag, it must succeed on a DC 11 WIS Save against this magic or drop to 0 hit points.</dd>
    <dt>Illusory Appearance</dt> <dd>The hag covers herself and anything she is wearing or carrying with a magical illusion that makes her look like another creature of her general size and humanoid shape. The illusion ends if the hag takes an Action to end it or if she dies. The changes wrought by this effect fail to hold up to physical inspection. For example, the hag could appear to have smooth skin, but someone touching her would feel her rough flesh. Otherwise, a creature must take an Action to visually inspect the illusion and succeed on a DC 16 INT (Insight) check to discern that the hag is disguised.</dd>
    <dt>Horrific Appearance</dt> <dd>Any humanoid that starts its turn within 30 feet of the hag and can see the hag's true form must make a DC 11 WIS Save. On a failed save, the creature is Frightened for 1 minute. A creature can repeat the Save at the end of each of its turns, with Disadvantage if the hag is within line of sight, ending the effect on itself on a success. If a creature's Save is successful or the effect ends for it, the creature is immune to the hag's Horrific Appearance for the next 24 hours. Unless the target is surprised or the revelation of the hag's true form is sudden, the target can avert its eyes and avoid making the initial Save. Until the start of its next turn, a creature that averts its eyes has Disadvantage on attack rolls against the hag.</dd>
</dl>";
        $monster->description = '<p>Sea hags are the most repulsive and wretched of hags and are prideful in their gruesome appearance. The wicked fey lives near or within large bodies of water and the unfortunate souls that feasted eyes on them are often feasted on shortly after.</p>
<p>Hags are universally hideous beings, but even by the unbelievably low standards applied to their race, sea hags are abysmally grotesque. Despite their penchant for devouring their victims they have an emaciated appearance, although they can be of varying height and big-boned as opposed to scraggly. Befitting their haggard nature, their flesh is also rife with warts and oozing cankers.</p>
<p>Their complexion is like that of a rotting fish: pallid yellow skin with patches of green, slimy scales and bony protrusions. Their piscine eyes are similarly devoid of life with deep, black pupils surrounded by red.</p>
<p>The weak-hearted are known to die upon gazing at sea hags, but fortunately they have long, limp, hair that resembled rancid seaweed, which often concealed their true forms. Even without their squalid manes, sea hags can use illusory magic to disguise their appearance, although whatever form they take, they are cursed (or perhaps in their opinion, blessed) to appear ugly.</p>
<p>While all hags possess an inverted sense of beauty, seeing it as ugly and vice versa, sea hags in particular are known for utterly abhorring all that is attractive. Many are filled with fury upon the sight of something beautiful and swiftly attempts to break it, but are more likely to take a corruptive approach to expressing their outrage. Rather than simply destroy the object of inspiration, they will defile it so as to reverse its intended effect, turning symbols of hope into figures of despair, icons of courage into images of dread and places of joy into dens of misery.</p>
<p>Sea hags themselves normally live as gloomy recluses, in lairs as dismal as they are. As they watch others go about their lives, they begin slowly bubbling with jealous rage until their hatred overflows, and they are compelled to release it. Sometimes wanderers will intrude upon their domains and give them a chance to vent, but they will just as easily exit their homes and hunt for victims, whether among the surface-dwellers or other aquatic entities.</p>
<p>Sea hags are known to be solitary beings. They typically lair in bleak and befouled areas surrounded by underwater monsters and with nearby settlements. The height of their homes is generally irrelevant; they might inhabit sunken shipwrecks, polluted shores or slopes and cliffsides.</p>
<p>Around the lairs of powerful sea hags, such as grandmas or aunties, can have noticeable signs of their presence. Such indicators can be treacherous tides, a slick, slippery film of slime coating most surfaces, or an abundance of decaying fish corpses that the sea hag can speak through and sense the disturbance of. Within their lairs such hags will be even more dangerous, gaining abilities such as the power to create splotches of murky ink within it or the ability to create obedient simulacrums out of ooze, kelp, fish corpses and nebulous debris based on anyone inside the lair.</p>
<p>Sea hags, appropriately, are known to occupy warm seas in shallows with overgrown vegetation. They are amphibious and swim faster than they walked.</p>
<p>Sea hags are said to have a maximum lifespan of approximately 800 years old, if not several millennia.</p>
<p>Sea hags can be found in the Sea of Fallen Stars, typically swimming at a depth between 150‒300 ft. Within the underwater caves of Skullport, sea hags dwell in the husks of lost ships.</p>';
        $helper->saveMonster($monster, ['Fey', 'Water'], [
            'stats'    => [16, 13, 16, 12, 12, 13, 2, 2],
            'feats'    => ['Hag Spellcaster'],
            'features' => [
                'amphibious',
                'darkvision' => ['meta' => '{"range":60}'],
            ],
            'languages' => ['Sylvan', 'Aquan', 'Special' => ['meta' => '1 Region language']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Green Hag';
        $monster->size             = 'Medium';
        $monster->type             = 'Fey';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D8 +4) Slashing.</dd>
    <dt>Mimicry</dt> <dd>The hag can mimic animal sounds and humanoid voices. A creature that hears the sounds can tell they are imitations with a successful DC 14 WIS (Insight) check.</dd>
    <dt>Illusory Appearance</dt> <dd>The hag covers herself and anything she is wearing or carrying with a magical illusion that makes her look like another creature of her general size and humanoid shape. The illusion ends if the hag takes an Action to end it or if she dies. The changes wrought by this effect fail to hold up to physical inspection. For example, the hag could appear to have smooth skin, but someone touching her would feel her rough flesh. Otherwise, a creature must take an Action to visually inspect the illusion and succeed on a DC 20 INT (Insight) check to discern that the hag is disguised.</dd>
    <dt>Invisible Passage</dt> <dd>The hag magically turns invisible until she attacks or casts a spell, or until her Concentration ends (as if concentrating on a spell). While invisible, she leaves no physical evidence of her passage, so she can be tracked only by magic. Any equipment she wears or carries is invisible with her.</dd>
</dl>';
        $monster->description = "<p>Green hags, also called Shellycoats when they live near rivers or swamps, are the most common types of hags, foul crones known for their deceitful ways and corrupting natures. Like dark druids, they are vile beings with a strong connection to natural world, and they prey upon primal vices in order to sow anguish and drag all down into bestial savagery.</p>
<p>Of all the hags, green hags are the least physically menacing, their resemblance to regular humans serving to make them more unnerving than imposing. Though their typical bodily figure is that of a withered and hunched female, they can run the entire spectrum of body types and stretch into the extremes of both ends, some being gaunt and others morbidly obese.</p>
<p>Without certain indicators, green hags will simply appear as human crones, but even then their skilled use of illusory disguises can hide these tell-tale signs. If not magically camouflaging their true forms, the most obvious feature of a green hag, as the name implies, is the pallid green color of their rough, bark-like skin. Knobby, cancerous protrusions often marked their flesh, some hidden by the ragged peasant rags they typically wear.</p>
<p>A green hag's visage is normally blemished with warts and exaggerated facial features and ringed by a tangled mane of vine-like hair, ranging in color somewhere between moldy olive green and a near-black shade of dark. Below their eyes, either orange or amber colored, are needle-sharp fangs as pointed as their claws, black or yellow talons covered in filth that grow from typically slender fingers.</p>
<p>Tragedy is the greatest delight of the green hags, the act of dashing hope and replacing it with despair brings them no small amount of glee. This is because out of all the hags, a cruel race with a natural need for misery and murder, green hags are the ones driven most strongly by hate. The pure, unbridled malice of green hags is unrivaled by that of their sister subraces; dreams of destruction dominate their thoughts, and they show an apathy to suffering on par with that of a predator.</p>
<p>Though the original source of this hate is a matter of rumors, the ultimate target is clear. In short, green hags ultimately desire the downfall of society, to bring down all nations and replace that which is civilized, beautiful, and pure with a recreation of the moral bankruptcy of nature at its most brutal, just as they prefer it. However, assuming that because their end goal is to inspire savagery would mean that their methods are wild and simplistic would be a fatal mistake.</p>
<p>Although not necessarily smarter than other hags, green hags are certainly the most cunning and duplicitous, outmatching the other subraces in their ability to tempt, persuade and manipulate, and doing so happily from behind webs of lies and secret intentions. Even the most basic plots of the green hags are devious, involving the use of their particular abilities to lure travelers to specific places in their swamps for some nefarious purpose. They can mimic cries for help or fearsome noises depending on where they want their victims to go, and that is for their simpler schemes.</p>
<p>They are also known to eagerly transform themselves into local legends to lure in those curious about such things, creating gossip about wise women of the wilds or fair fey of the forest to set their traps. For example, they can seduce others into secluded locations under guises of beauty, and though they don't exclusively use this trick on men, they generally find it works easier on them. Only after getting their partners there would they sadistically reveal the deception, either before the encounter began, in which case they slaughtered and consumed them, or, debatably the crueler choice, after it has ended, leaving most survivors traumatized to the point of madness.</p>
<p>While unarguably terrible, such small-scale schemes are less favorable to green hags than more grand machinations. They beguile themselves into powerful authority positions, such as the lovers of leaders or the idols of savage humanoid tribes, pulling them deeper into depravity by encouraging profane acts. Despite their wickedness and hateful personalities, green hags are actually the least xenophobic of hags, willing to reason with others and cooperate with those of similar mindset, even withstanding their natural sense of superiority to others. Despite their egotism however, green hags are also cautious, possibly to the point of being considered craven, going so far as to not leave their lairs if not invisible to avoid being seen. They play with weaker prey before consuming it but flee from any strong and determined opposition, effectively acting as conspiratorial bullies towards any being they can.</p>
<p>As the most tolerant of hags, green hags are capable of infiltrating the humanoid civilizations that they wish to terrorize and destroy, even occasionally joining adventuring parties to complete their goals. They can and do blend into urban settlements more frequently and efficiently than other hags, sometimes hunting their prey directly in their homes rather than in their own environments. Covens of green hags, including covens including other types and covens exclusively of their own kind, are formed far more regularly than those of other hags.</p>
<p>Outside their own race, they are known to have affinity with the alien malice of the will-o-wisps, put aside their spite to ally with evil druids, and deal with the less intelligent creatures like ogres and hill giants to obtain information, food, and protection in exchange for random trinkets they steal from their victims. Regardless, any green hag partnership, whether framed as an alliance or master-servant relationship and possible with the green hag in the servant role, lasting only until the hag stops benefiting or can take control.</p>
<p>Green hags are known to live in twisted trees, underwater caverns and caves concealed by foliage or boulders, sometimes warrens of their own creation. Those in urban environments are known to dwell in slums or hide underground inside sewers. Powerful green hags, such as grandmas or aunties, corrupt the region around their lairs in sinister ways; the plants can form a twisted thicket, the fetid swamp mud can grow thicker, trees can awaken and attack hostile intruders, and sometimes illusory duplicates of the hag can appear at random, allowing them to interact with others from behind the illusion. Within such a hag's lair the illusions will become more deliberately made and tangible, capable of interacting with the environment but still incapable of causing physical harm.</p>
<p>Green hags make their homes in wet, temperate environments, gloomy and isolated regions like dark swamps, dying forests and misty marshes where they can take full advantage of their abilities. Countrysides and desolate areas of civilization can also suffice, but they typically chose spots near bodies of water such as rivers. Their acute senses, including superior sight, smell, and hearing, along with their coloration and ability to move silently through the swamp, make them dangerous predators without their cunning and magic. Poison is an ineffective deterrent against them and they will eat practically anything that moves with humanoid flesh being favored.</p>
<p>Green hags are said to be the longest-living hags, assuming hags aren't entirely ageless, persisting for centuries longer than other hags, possibly because of their arboreal flesh or just greater vitality. They are believed to be relatives of night hags and annis hags, with there potentially being some ancestral link between them all, although this isn't certain.</p>
<p>Green hags can be found in Ashanath, the North Country, the Forest of Lethyr, and the Yuirwood in the Unapproachable East.</p>";
        $helper->saveMonster($monster, ['Fey'], [
            'stats'  => [18, 12, 16, 13, 14, 14, 3, 3],
            'skills' => [
                'Arcana'     => ['dc' => 3],
                'Deception'  => ['dc' => 4],
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 4],
            ],
            'feats'    => ['Hag Spellcaster'],
            'features' => [
                'amphibious',
                'darkvision'          => ['meta' => '{"range":60}'],
                'innate_spellcasting' => ['meta' => 'CD 12'],
            ],
            'spells' => [
                'Dancing Lights'  => ['meta' => 'At will'],
                'Minor Illusion'  => ['meta' => 'At will'],
                'Vicious Mockery' => ['meta' => 'At will'],
            ],
            'languages' => ['Auld Wyrmish', 'Sylvan', 'Jotun', 'Special' => ['meta' => '1 Region language']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Shrieking Hag';
        $monster->size             = 'Medium';
        $monster->type             = 'Fey';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 7;
        $monster->speed            = '30 ft';
        $monster->actions          = "<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 10 (2D8 +5) Bludgeoning + 3 (1D6) Cold.</dd>
    <dt>Ice Walk</dt> <dd>The hag can move across and climb icy surfaces without needing to make an ability check. Additionally, difficult terrain composed of ice or snow doesn't cost her extra moment.</dd>
</dl>";
        $monster->description = "<p>Shrieking hags, or howling hags, wander the wastes of Rashemen like squalls, tricky as the wind and as devastating as a storm. When angered, such hags are like uncontrollable tempests, destroying the surrounding area with violent gales and wailing winds.</p>
<p>Shrieking hags resemble tall women that seem as regal as they do physically ravaged by time. Their yellow-brown skin is tough and leathery, their hands twisted into talons as hard as iron, and their long, white hair often blows in an ever-present, bitterly cold wind. Typically, they wear thin, ragged robes, and sometimes leaned on an old, crooked staff that they didn't actually need.</p>
<p>Howling hags are potentially the worst of their kind, which given the general behavior of the race was especially condemning. They take great glee in tricking the powerful and virtuous, preying upon unwary travelers, and otherwise spreading chaos, despair, and mischief. They are also spiteful creatures, likely to fly into murderous fury if their deceptions are resisted.</p>
<p>Shrieking hags haunt barren wastelands, desolate steppes, and empty plains, though they are found on the frontiers of civilization or in settled areas rather than in completely abandoned areas. The Endless Wastes of Rashemen is the home of many howling hags, as is the area near Citadel Umbra on the island of Gwynneth.</p>";
        $helper->saveMonster($monster, ['Fey', 'Air'], [
            'stats' => [20, 13, 16, 11, 15, 14, 4, 3],
            'saves' => [
                'DEX' => ['bonus' => 6],
                'CON' => ['bonus' => 7],
                'WIS' => ['bonus' => 6],
            ],
            'skills' => [
                'Deception'  => ['dc' => 6],
                'Society'    => ['dc' => 6],
                'Insight'    => ['dc' => 6],
                'Perception' => ['dc' => 6],
                'Survival'   => ['dc' => 6],
            ],
            'features' => [
                'magic_resistance',
                'darkvision'          => ['meta' => '{"range":60}'],
                'immunity'            => ['meta' => 'Cold'],
                'resistance'          => ['meta' => 'Electricity, Sonic'],
                'innate_spellcasting' => ['meta' => 'CD 13'],
            ],
            'feats' => [
                'Craft Implement' => ['meta' => 'Used to craft their Graystaff. Crafting requires a year and a day'],
                'Hag Spellcaster',
            ],
            'spells' => [
                'Alter Self'      => ['meta' => 'At will'],
                'Dancing Lights'  => ['meta' => 'At will'],
                'Ghost Sound'     => ['meta' => 'At will'],
                'Gust of Wind'    => ['meta' => 'At will'],
                'Shocking Grasp'  => ['meta' => 'At will'],
                'Charm'           => ['meta' => '3/day'],
                'Control Winds'   => ['meta' => '3/day'],
                'Invisibility'    => ['meta' => '3/day, Heightened +3'],
                'Suggestion'      => ['meta' => '3/day'],
                'Polymorph Self'  => ['meta' => '1/day, Humanoid females only'],
                'Whirlwind'       => ['meta' => '1/day'],
                'Great Shout'     => ['meta' => '1/day'],
                'Control Weather' => ['meta' => '1/week'],
            ],
            'languages' => ['Sylvan', 'Jotun'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Bheur Hag';
        $monster->size             = 'Medium';
        $monster->type             = 'Fey';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 8;
        $monster->speed            = '30 ft';
        $monster->actions          = "<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 10 (2D8 +1) Bludgeoning +3 (1D6) Cold.</dd>
    <dt>Ice Walk</dt> <dd>The hag can move across and climb icy surfaces without needing to make an ability check. Additionally, difficult terrain composed of ice or snow doesn't cost her extra moment.</dd>
</dl>";
        $monster->description = "<p>Bheurs are known by many names, sometimes specified as bheur hags but also referred to as blue hags, white hags and winter hags. The wicked witches of winter are cold-hearted ice queens said to bring the season's cold, but it is possible the sadistic fey are simply drawn to the frost.</p>
<p>Bheurs appear as wrinkled beldams, gaunt as if they have survived hard times by subsisting on inedible matter. Fittingly, they have pallid, blue-white skin like they have died of hypothermia and pale hair as white as snow. The flesh surrounding their muted eyes are dark as if it was bruised and their voices are like howling winter winds. They are known to wear ragged, gray-blue shawls and often carried gnarled, wooden staffs taller than themselves, the gray bark contrasting against the dry blood that typically stains their hands.</p>
<p>Winter hags are creatures of cruel depravity that live for the pleasure of bringing icy doom to as many people as they can. They consider selfish actions justified by unrelentingly circumstances, normally the overpowering cold, especially enticing. Using their mastery of cold weather, they spread misery and despair to communities during winter seasons with intent to create enough desperation to instill a miserly mindset.</p>
<p>The pitiful attempts of unprepared mortals to survive, such as eating leather in place of actual food, their suffering and the suffering they bring to others, such as by murdering people or defiling the sacred for resources, and their eventual deaths are all delightful to a bheur. The sweetest part of such times for bheur hags are when the selfish acts are committed unnecessarily, like when individuals hoard more resources than can be used, and the conniving crones love planting such excessive ideas.</p>
<p>Bheurs themselves have great knowledge of nature and substantial survival skills.</p>
<p>Despite being chaotic crones with deadly magic, the rightfully feared bheurs are occasionally sought out for their wisdom or prophecies. They are likely lone wanderers, having little to no space for community or kinship in their cold hearts. Nevertheless, they are sometimes accompanied by mounted ice archons or avariel guards, or found working with orglashes to deceive and devour others.</p>
<p>When they establish lairs, the more powerful bheur hags, such as grandmas and aunties, have greater power within their lairs, such as the ability to create small, blinding blizzards. Regions inhabited by such hags are known to suffer from frequent, unpredictable snowstorms and small avalanches.</p>
<p>Bheurs reside in winter lands like frosty forests and prefer snowy mountains, particularly their peaks. They are commonly found in Auril's realm within the Deep Wilds as well as on the isolated outskirts of Rashemen to the point they are considered unique to the region.</p>";
        $helper->saveMonster($monster, ['Fey', 'Cold'], [
            'stats' => [13, 16, 14, 12, 13, 16, 4, 3],
            'saves' => [
                'WIS' => ['bonus' => 4],
            ],
            'skills' => [
                'Nature'     => ['dc' => 4],
                'Perception' => ['dc' => 6],
                'Stealth'    => ['dc' => 6],
                'Survival'   => ['dc' => 4],
            ],
            'features' => [
                'magic_resistance',
                'darkvision'          => ['meta' => '{"range":60}'],
                'immunity'            => ['meta' => 'Cold'],
                'resistance'          => ['meta' => 'Fire'],
                'vulnerability'       => ['meta' => 'Acid, Electricity'],
                'innate_spellcasting' => ['meta' => 'DC 14'],
            ],
            'feats' => [
                'Craft Implement' => ['meta' => 'Used to craft their Graystaff. Crafting requires a year and a day'],
                'Hag Spellcaster',
            ],
            'spells' => [
                'Ray of Frost'    => ['meta' => 'At will'],
                'Hold Person'     => ['meta' => 'At will, requires Graystaff'],
                'Cone of Cold'    => ['meta' => '3/day, requires Graystaff'],
                'Ice Storm'       => ['meta' => '3/day, requires Graystaff'],
                'Wall of Ice'     => ['meta' => '3/day, requires Graystaff'],
                'Control Weather' => ['meta' => '3/day'],
                'Enlarge'         => ['meta' => '1/day'],
            ],
            'languages' => ['Sylvan', 'Auran', 'Jotun'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Annis Hag';
        $monster->size             = 'Large';
        $monster->type             = 'Fey, Fiend';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 10;
        $monster->speed            = '30 ft';
        $monster->actions          = "<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 10 (2D8 +1) Bludgeoning +3 (1D6) Cold.</dd>
    <dt>Ice Walk</dt> <dd>The hag can move across and climb icy surfaces without needing to make an ability check. Additionally, difficult terrain composed of ice or snow doesn't cost her extra moment.</dd>
</dl>";
        $monster->description = "<p>An annis hag is a child-eating hag undisputed queens of barbarism, combining the wicked cruelty of dark fey with the unbridled strength of evil giants.</p>
<p>Annis hags are the most physically imposing of their race, standing 7 at minimum and sometimes towering over 8 ft in height. Defying the stereotype of the withered crone, they are covered in musculature, although the nature of their builds varied. Some are described as lean and quick with long, lanky limbs but others are more akin to ogresses with gnarled muscles and jutting bones comprising their hulking frames. Such annis hags, even with their hunched backs and humped shoulders, were still massive. Their stretched skin was covered in scars and blemishes, and they have a blue-black complexion as if their flesh have been deeply bruise.</p>
<p>An annis hag's nails are not simply as sharp as blades, but are actually made of iron that magically grow like the keratin nails of normal humanoids. Normally they are 3 in long but often stylized by annis hags into long spirals that could inflict unnerving, circular wounds. They are naturally a glossy shade of black but like ordinary steel would oxidize over time, turning their shiny nails into rusted corkscrews. Their sharpened teeth are also metallic and their filthy hair had a similar luster. Above an annis's dull, greenish-yellow eyes are a pair of black, upward-arching horns barely longer than a human's thumbs. The nubs are seemingly vestigial, neither long enough to reach enemies or hardy enough to pierce them.</p>
<p>Prone to bodily modification, annis hags are known to deeply scar themselves and use grafts in order to augment their already grotesque features to make themselves even more terrifying. One is said to have chewed through their cheeks to etch a gangrenous grin on their faces and there rumors of an annis that stitched the members of her coven onto her back, trapping her flailing sisters in a semi-conscious state. Normally they wear disheveled peasant's clothes but when needed they could use their illusory abilities to blend into other societies in a variety of ways. Their guises could range from wizened woman to beautiful amazons in the form of tall humans, small giantesses, or ogres, and even animals such as bears.</p>
<p>While just as intelligent as the sly, seductive green hags, annis hags outmatch them and other hags in terms of both physical prowess and unwieldy egotism. By far the most conceited of hags, annis are also the most easily bribed with offers of magic and living prey. The source of their narcissism is their size and strength which to their twisted minds were to be considered virtues. They love receiving recognition for such traits and so dominate powerful races of humanoid brutes, the stronger, the better, who might hold similarly savage mentalities. They are also fiercely territorial, and might tear through entire settlements to destroy even minor threats to their reign.</p>
<p>Just as annis hags are eager to subjugate the strong they delight in dominating the weak, particularly other hags and striking fear into them. Killing is a favorite activity alongside sowing suspicion and confusion, and so they leave signs of their terrifying activities on the outskirts of their territories. Nothing brings an annis more joy than spreading dread and worried anger to a once healthy community, and leaving sinister signs isn't their only method. One particularly vile tactic is to approach children unseen as kindly crones and slowly warp their sense of morality. What might start as vandalism and wandering off could turn into arson and reckless actions like pushing someone down stairs, until a frightened community is compelled to punish or exile them.</p>
<p>Unlike most hags who prefer clever minions rather than stupid goons, annis hags seek to put less intelligent beings under their thumb. Similarly to how they might befriend children, they often adopt ogres, trolls, certain evil giants and other louts, acting as the verbally abusive matron of a potentially racially mixed community. They rule them through brute strength and superstition, gaining information, companionship, security and better food. Even if not technically in charge, they sometimes take up the role of the chieftain's wife, ruling from behind the throne rather than atop it.</p>
<p>It is common for annis hags to act alone or in coveys, but rarely are their sisters treated with greater care than their other underlings. Annis hags establish covens simply by physically overpowering weaker hags and maintain them through fear and force. Such tactics rarely wrung compliance from other annis hags which share not only the brawn of their kin but the spitefulness and sense of superiority. The extremely rare covens with more than one annis hag are sustained only when the two are constantly wary and conniving towards each other or only have to form them temporarily.</p>
<p>As the strongest of hags, annis hags typically reside in mountainous or hilly regions due to their easily scalable terrain. They are also known to reside in cold, dark decaying places such as moors or marshes and will claim entire forests and swamps as their own.</p>
<p>Annis hags are said to live for 500 years, although some claim that hags can live longer than elves or even dragons.</p>";
        $helper->saveMonster($monster, ['Fey', 'Fiend'], [
            'stats' => [21, 12, 14, 13, 14, 15, 4, 4],
            'saves' => [
                'CON' => ['bonus' => 5],
            ],
            'skills' => [
                'Deception'  => ['dc' => 5],
                'Perception' => ['dc' => 5],
            ],
            'feats'    => ['Hag Spellcaster'],
            'features' => [
                'darkvision'          => ['meta' => '{"range":60}'],
                'resistance'          => ['meta' => 'Cold, [Bludgeoning, Piercing, Slashing] (Cold Iron, Silvered)'],
                'innate_spellcasting' => ['meta' => 'CD 13'],
            ],
            'spells' => [
                'Disguise Self' => ['meta' => '3/day, including the form of a Medium humanoid'],
                'Fog Cloud'     => ['meta' => '3/day'],
            ],
            'languages' => ['Sylvan', 'Jotun', 'Special' => ['meta' => 'One regional language']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Night Hag';
        $monster->type             = 'Fey, Fiend';
        $monster->size             = 'Medium';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 12;
        $monster->speed            = '30 ft';
        $monster->actions          = "<dl>
    <dt>Claw (Hag Form only)</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D8 + 4) Slashing.</dd>
    <dt>Nightmare Haunting</dt> <dd>While on the Ethereal Plane, the hag magically touches a sleeping humanoid on the Material Plane. A Protection spell cast on the target prevents this contact, as does a Circle of Protection spell. As long as the contact persists, the target has dreadful visions. If these visions last for at least 1 hour, the target gains no benefit from its rest, and its Hit Point maximum is reduced by 5 (1d10). If this effect reduces the target's hit point maximum to 0, the target dies, and if the target was evil, its soul is trapped in the hag's soul bag. The reduction to the target's hit point maximum lasts until removed by a Heightened Restoration spell or similar magic.</dd>
    <dt>
        <p>Night Hag Items</dt> <dd>A night hag carries two very rare magic items that she must craft for herself. If either object is lost, the night hag will go to great lengths to retrieve it, as creating a new tool takes time and effort.</p>
        <ul>
            <li>Heartstone: This lustrous black gem allows a night hag to become ethereal while it is in her possession. The touch of a heartstone also cures any disease. Crafting a heartstone takes 30 days.</li>
            <li>Soul Bag: When an evil humanoid dies as a result of a night hag's Nightmare Haunting, the hag catches the soul in this black sack made of stitched flesh. A soul bag can hold only one evil soul at a time, and only the night hag who crafted the bag can catch a soul with it. Crafting a soul bag takes 7 days and a humanoid sacrifice (whose flesh is used to make the bag).</li>
        </ul>
    </dd>
</dl>";
        $monster->description = "<p>Night hags are wicked witches that dwell in the Lower Planes whose nightmarish minds and abilities make them appear to embody the ideals of the hag race. They are known for their ability to induce horrific dreams and for harvesting soul larvae, which are used as currency in the Abyss, Blood Rift, and Nine Hells.</p>
<p>Night hags are horrendously hideous beings, unrivaled in their repulsiveness. Whether sickly and stout, of average build, or gaunt and bony, night hags are most visually similar to small female looking trolls, complete with a strange strength hidden behind their decrepit frames and a deadly set of long, night-black nails. Their gait is slow and their bodies ungainly despite their similarity in height and weight to human females, a problem caused by the uncanny ways their joints moved.</p>
<p>Their sickening skin tone makes their entire form seem awfully bruised, with a blue-violet hue that can be fairly light or so dark they seem completely black. They self-augmented their flesh with tattoo-like scars to enhance their eeriness, although it is often already marred with grotesque warts, open sores, and diseased blisters brought on by planar plagues.</p>
<p>Both diabolical and destructive, night hags combine the most despicable traits from fiends throughout the lower planes with the insidious nature of their sinister sisterhood. From their hag side they adopt the desire to sow misery and malcontent in the hearts of mortals everywhere, particularly through the method of bargaining. Like devils, they harbored an indomitable megalomania and unbreakable ambition, crossed with the overpowering need for carnage more typically found in demons.</p>
<p>However, the common thread running through their various hateful heritages is the utter glee with which they approached the act of corruption. Night hags are perversely subversive and take delight in turning virtues into vices, either by amplifying positive traits until they became unhealthy or by simply turning ideals into their diametric opposites. Corrupting mortals is both business and pleasure for them as doing so is not only innately satisfying but, like demons and devils, also granted them the victim's soul upon death which they can use as a commodity later on. No bond is too sacred, tactic too low, or act too mercilessly for the soul-hungry merchants of Hades.</p>
<p>Tempering a night hag's compulsion to inflict suffering is their love of learning and need to maintain their livelihoods. They are gripped by the desire to acquire new knowledge and possessed perfect memories, making them highly informative, if incredibly dangerous, sources of lost secrets, ancient wisdom and forbidden lore. Despite not caring about the opinions of others regarding their activities, night hags typically keep their promises once made since stains on their reputations would negatively impact their business. The safest ways to deal with night hags often include bribing them with information and offers of arcane power, as they prized them about as much as souls.</p>
<p>At the same time, trying to bargain with night hags is still an unthinkably terrible idea as they are vindictive manipulators that will track down and turn their weaker customers into larvae after concluding business. An even worse idea would be to attempt to trick them since they are immortal, and petty, always taking revenge no matter how minor the slight. As expert con merchants themselves they are incredibly difficult to fool.</p>
<p>Night hags are psychopaths and classify all other beings in terms of usefulness: the weak are branded as food or slaves, with slave often being a temporary position until the subject is turned into food, and the strong serve as targets for subtle extortion until they are weak enough to be classified as food or slaves. They retain no particular loyalty or hatred for other night hags and covens are only formed occasionally when one powerful night hag dominates her sisters.</p>
<p>Perhaps the only positive trait of the night hags is their lack of bias on the basis of race or class. They are thought to view the multiverse as a constant power struggle where the roles of master and servant are in a state of constant flux. It is due to this view that they never make permanent alliances. Racial privilege is viewed as a worthless concept and regardless of where one comes from or what they are, they can expect fair treatment from night hags, the same competitive, predatory malice they display to everyone else.</p>
<p>Night hags normally keep two powerful magic items with them at all time, the first of which is a special periapt known as a Heartstone. Also called 'charms of blackness', heartstones are lustrous and magically potent black jewels worn as amulets by night hags. When in their possession, they allow night hags to activate their ability to become ethereal and to cure any disease simply by touching it. They are substantially less useful out of a night hag\'s hands, shattering after ten uses and incapable of granting non-night hags the ability to travel to the Ethereal Plane. To craft a new heartstone required a month's worth of work and the sacrifice of several larvae in the process, making the retrieval of a lost heartstone of paramount importance to them.</p>
<p>Night hags can use their spectral state to haunt the dreams of those on the Material Plane. They ride on a victim's back, filling their sleeping minds with mind-bending visions until the break of dawn. Through this method, night hags can gradually wear down their prey both physically and mentally, sapping their vitality while driving them mad. If unimpeded in their mental invasions, night hags will continue until they die in their sleep. It is at this point that a night hag's other powerful item, her soul bag, comes into use. Crafted over the course of a week from the flesh of a sacrificed humanoid, soul bags are black sacks that can hold a single soul that has been killed by a night hag's dream haunting ability, although unlike heartstones only the specific creator can use them.</p>
<p>Night hags can immediately determine soul larva quality. With this knowledge, night hags catch the larval life essence of those they have corrupted in their soul bags before dragging them down into Hades where they will become an especially powerful kind of soul larva.</p>
<p>Despite being among the greatest economic powers of the Lower Planes, night hags are also among the most quickly dismissed of its denizens. They are terrifying creatures to those of the Prime Material Plane, but they are relatively puny by extraplanar standards. They are not to be mistaken as flimsy or frail, as any being capable of winning respect from balors and pit fiends was likely incredibly dangerous, but their lack of strength compared to other lower-planar races often raised questions of why other forces, good or evil, hadn't driven them out of Hades and taken control for themselves. This is often written off as a result of the Gray Wastes stealing the thirst for conquest from would-be invaders but such propositions were entirely false.</p>
<p>Night hags are the nightmare queens of Hades, but not due to overwhelming power. Instead, night hags use a subtler and simpler method, manipulating various malevolent factions against each other using soul larvae as their means of control. The Oinoloth, leader of the yugoloths, might rule the Gray Wastes in name but functionally it is the night hags that actually controlled it, if only because the majority of the yugoloths migrated to Gehenna and the Oinoloth spent much of their time dealing with the intrigues of their own kind.</p>
<p>As independent sellers, night hags can determine their own prices, trading in gold, information, favors, magic items, evil souls and whatever else they desired. Through this capitalistic puppeteering, night hags acquire new ways to extort others, gained secrets to trade between opposing forces and otherwise improve their political standing. In exchange for larvae, powerful fiends can be persuaded to avoid trying to conquer Hades while liches might be asked to destroy certain parties that refuse to participate in the larva trade.</p>
<p>Larvae trading is the primary occupation and activity of most night hags, with the main, and easiest, method of gathering them being to simply wander the Wastes looking for them. Because soul larvae from the Gray Wastes rarely move, and those from Oinos have a tendency to manifest near each other, it is incredibly easy for night hags to travel the Gloom and herd larvae together before letting the horde double a couple times over the course of a few days. The particularly wicked larvae that hags make from their dream haunting abilities are especially useful to fiends and it is thought that they have the luxury of skipping the mindless stages of lemure or mane. Many fiends actively seek out hags that create such larvae and night hags in turn recognized the profit that can be turned from selling them.</p>
<p>Despite the obvious benefits, most night hags refrain from using this method due to the time and effort it takes to perform and the risk that the practice would attract troublesome forces from the Material Plane. Still, some opportunistic hags still partake in the practice, going after powerful beings of great evil, particularly spellcasters, who would create more valuable larva. After disposing of the worst maggots and branding their merchandise they sell the rest to the highest bidders or in pre-arranged contracts, typically only trading the best but occasionally selling those of poor quality at a discount, often times to inexperienced liches.</p>
<p>Larvae can be eaten, turned into various fiends or used as raw material in several rituals and products. While they can be found throughout the lower planes, night hags centralized their business in the Gray Wastes, and sometimes harvest them from the Shadowfell. This is because larvae of the Gray Wastes are of such pure evil that not only can both baatezu and tanar'ri easily adapt them. Larva from the Nine Hells are too inflexibly fixed to their form of lawful evil and struggle to take on baatezu form, while those chaotic evil ones from the Abyss are unstable and reverted back into larva too easily.</p>
<p>Although uncommon, larva trade interruptions, have happened. The Blood War, ironically, is the biggest issue, hags are often caught in the middle of Blood War skirmishes and slaughtered along with them, their herd, their servitors and their patrons. Celestials attempting to weaken the forces of evil sometimes conduct covert operations against the nightmare queens, secretly slaughtering them and their herd.</p>
<p>Occasionally a rogue fiend or an unscrupulous mortal will attempt to take up the larva trade as an entrepreneur, a practice likely to get them killed before their first deal by their competition and that is never taken seriously. More regular and sporadic disruptions included robbery by liches, and attacks by goodly, plane traveling adventurers. Typically such intrusions only effect individual hags and the wider-scale larva trade remains unimpeded.</p>
<p>Hags are willing ally with various evil creatures from across the planes and sometimes even non-evil ones so long as they aren't good. Those that know of their existence typically write them off as crafty crones that sell larvae for money, while celestials harbor a hatred for them since their activities further the fiendish races. While fiends view hags more favorably thanks to their service they are also quick to overlook them as a mere merchant race. Night hags occasionally become the wives of fiends possessing some semblance of noble status and have been known to adopt seductive appearances in order to get close and steal secrets from mortal wizards. They have been known to found magic colleges or sponsor arcane research projects, regardless of the moral nature of the spellcasters they deceived.</p>
<p>Lesser creatures are normally hired to keep records, herd larvae, send messages and complete any other mundane chores. Those night hags that did pay their workers often did so poorly and terminated any servitors wishing to end their employment in order to protect their precious trade secrets. Imps and tieflings make their way into their service as do mephits and the occasional modrons. Often times they mounted nightmares, another type of dream haunting creature of the Gray Wastes, and they prized cauchemar breeds.</p>
<p>Night hags have little society in regards to one another outside of subjugation. They generally prefer to operate their businesses independently of one another. Thousands of individual night hags dot Hades. Occasionally night hag covens can be found in the Gray Wastes, formed in order to pool a greater profit. Night hag covens, often comprise of a night hag and her daughters, quickly and inexorably fall apart due to in-fighting.</p>
<p>The longest-lasting coven of night hags run the largest larva market in the lower planes, the Grand Larva Emporium. A grand bazaar located in Oinos along the River Styx, the Emporium is the commercial center of the Lower Planes where demon, devil, lich or otherwise go to acquire premium larva. Passengers enter via merrenoloth skiffs by the hundreds to browse and buy, protected by a well-armed retinue of yugoloth mercenaries.</p>
<p>Shoppers haggle with hags that have paid to rent a spot for the day, and can also purchase larva-based products such as a perfume called 'Evil' or a liquor known as 'Yellow Wurm Stout'. Blood War weaponry and armor, dark magic, slaves, illegal goods and all kinds of other heinous contraband is rumored to make its way through the ultimate black market.</p>
<p>The night hags of the Gray Wastes are known to have knowledge of a ritual to create altroloths. The altroloth Charon is one of these fiends created by the night hags.</p>
<p>The ritual to create altroloths is so incredibly taxing that the wold be rendered helpless for months if not years after.</p>";
        $helper->saveMonster($monster, ['Fey', 'Fiend'], [
            'stats'  => [18, 15, 16, 16, 14, 16, 5, 4],
            'skills' => [
                'Deception'  => ['dc' => 7],
                'Insight'    => ['dc' => 6],
                'Perception' => ['dc' => 6],
                'Stealth'    => ['dc' => 6],
            ],
            'features' => [
                'magic_resistance',
                'darkvision'          => ['meta' => '{"range":120}'],
                'resistance'          => ['meta' => 'Cold, Fire, [Bludgeoning, Piercing, Slashing] (Cold Iron, Silvered)'],
                'immunity'            => ['meta' => 'Charmed'],
                'innate_spellcasting' => ['meta' => 'CD 14'],
            ],
            'feats' => [
                'Craft Implement' => ['meta' => 'Used to craft their Heartstone (30 days to craft) and Soul Bag (7 days to craft)'],
                'Hag Spellcaster',
            ],
            'spells' => [
                'Detect Magic'        => ['meta' => 'At will'],
                'Magic Missile'       => ['meta' => 'At will'],
                'Polymorph Self'      => ['meta' => 'At will, Small or medium humanoid or true form. Equipment is not transformed'],
                'Remove Disease'      => ['meta' => 'At will, requires Heartstone'],
                'Etherealness'        => ['meta' => 'At will, requires Heartstone'],
                'Plane Shift'         => ['meta' => '2/day, Self only'],
                'Ray of Enfeeblement' => ['meta' => '2/day'],
                'Sleep'               => ['meta' => '2/day'],
            ],
            'languages' => ['Sylvan', 'Abyssal', 'Infernal', 'Special' => ['meta' => 'One regional language']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Mimic';
        $monster->size             = 'Medium';
        $monster->type             = 'Fey';
        $monster->alignment        = 'N';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 9;
        $monster->speed            = '15 ft';
        $monster->actions          = "<dl>
    <dt>Pseudopod</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +3) Bludgeoning. If the mimic is in object form, the target is subjected to its Adhesive trait.</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +3) Piercing plus (1D8) Acid.</dd>
    <dt>Adhesive (Object Form Only)</dt> <dd>The mimic adheres to anything that touches it. A Huge or smaller creature adhered to the mimic is also Grappled by it (Escape DC 13). Ability checks made to escape this Grapple have Disadvantage.</dd>
    <dt>Shapechanger</dt> <dd>The mimic can with a Triple Action, polymorph into an object or back into its true, amorphous form. Its statistics, are the same in each form. Any equipment it is wearing or carrying isn't transformed. It reverts to its true form if it dies.</dd>
</dl>";
        $helper->saveMonster($monster, ['Fey', 'Beast', 'Shapechanger'], [
            'stats'    => [17, 12, 15, 5, 13, 8, 2, 2],
            'skills'   => ['Stealth' => ['dc' => 5]],
            'feats'    => ['Improved Grapple'],
            'features' => [
                'immunity'         => ['meta' => 'Acid, Prone'],
                'false_appearance' => ['meta' => 'While the mimic remains motionless, it is indistinguishable from an ordinary object'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Pegasus';
        $monster->size        = 'Large';
        $monster->type        = 'Celestial, Fey';
        $monster->alignment   = 'CG';
        $monster->armor_class = '11';
        $monster->hit_dice    = 7;
        $monster->speed       = '60 ft / Fly 90 ft';
        $monster->actions     = '<dl>
    <dt>Hooves</dt> <dd>Melee Weapon attack, reach 5 ft, one target. (2D6 +4) Bludgeoning</dd>
</dl>';
        $monster->description = '
<dl>
    <dt>Animal Companion</dt> <dd>1st Level Spell Slot.</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Celestial', 'Animal Companion'], [
            'stats' => [18, 15, 16, 10, 15, 13, 2, 2],
            'saves' => [
                'DEX' => ['bonus' => 4],
                'WIS' => ['bonus' => 4],
                'CHA' => ['bonus' => 3],
            ],
            'skills' => [
                'Perception' => ['dc' => 6],
            ],
            'languages' => [
                'Celestial' => ['meta' => "Cant' speak"],
                'Sylvan'    => ['meta' => "Can't speak"],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Petal';
        $monster->size             = 'Tiny';
        $monster->type             = 'Fey';
        $monster->alignment        = 'NG';
        $monster->armor_class      = '15';
        $monster->damage_reduction = '5';
        $monster->hit_dice         = 1;
        $monster->speed            = '15 ft / Fly 60 ft (good)';
        $monster->actions          = "<dl>
    <dt>Dagger +7</dt> <dd>Melee Weapon Attack, reach 0 ft, one target. 1D2-4 Piercing (19-20 crit).</dd>
    <dt>Sleep Songs: Lullaby</dt> <dd>The petal sings a song of relaxation. Any creature within a 20-foot-radius that fails a DC 14 WIS Save is affected as though by a Sleep Spell. A creature that successfully saves cannot be affected again by that petal's lullaby song for 24 hours. For each additional Petal that also sings increases the Save DC by +2.</dd>
</dl>";
        $monster->description  = '<p>Petals like to use their sleep songs from a distance to put travelers to sleep. They avoid close combat.</p>
<dl>
    <dt>Animal Companion</dt> <dd>1st Level Spell Slot.</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Good', 'Animal Companion'], [
            'stats'    => [3, 20, 15, 15, 10, 18, 0, 1],
            'features' => [
                'darkvision'    => ['meta' => '{"range":60}'],
                'vulnerability' => ['meta' => 'Cold Iron'],
            ],
            'languages' => ['Sylvan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Pixie';
        $monster->size             = 'Tiny';
        $monster->type             = 'Fey';
        $monster->alignment        = 'NG';
        $monster->armor_class      = '17 (Leather Armor) / 16';
        $monster->damage_reduction = '1 (Leather Armor) / 0';
        $monster->hit_dice         = 2;
        $monster->speed            = '20 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Shortsword</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 -2) Piercing.</dd>
    <dt>Shortbow</dt> <dd>Ranged Weapon Attack, reach 80/320 ft, one target. (1D7) Piercing.</dd>
</dl>';
        $monster->description      = '
<dl>
    <dt>Animal Companion</dt> <dd>5th Level Spell Slot (Ranger 3rd Level Spell Slot).</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Animal Companion'], [
            'stats'    => [7, 20, 12, 16, 15, 16, 1, 2],
            'features' => [
                'darkvision'          => ['meta' => '{"range":60}'],
                'innate_spellcasting' => ['meta' => 'DC 13'],
            ],
            'feats' => ['Weapon Finesse'],
            'spell' => [
                'Druidcraft'       => ['meta' => 'At will'],
                'Invisibility'     => ['meta' => 'At will, Heightened +3'],
                'Confusion'        => ['meta' => '1/day'],
                'Dancing Lights'   => ['meta' => '1/day'],
                'Detect Alignment' => ['meta' => '1/day'],
                'Dispel Magic'     => ['meta' => '1/day'],
                'Entangle'         => ['meta' => '1/day'],
                'Fly'              => ['meta' => '1/day'],
                'Polymorph Self'   => ['meta' => '1/day'],
            ],
            'languages' => ['Sylvan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Pseudodragon';
        $monster->size             = 'Tiny';
        $monster->type             = 'Fey, Dragon';
        $monster->alignment        = 'NG';
        $monster->armor_class      = '13 (Natural Armor)';
        $monster->hit_dice         = 2;
        $monster->speed            = '15 ft / Fly 60 ft';
        $monster->description      = '<p>Pseudodragons are a small dragon-kin known to be playful. Pseudodragons typically had bodies about 1 foot (30 centimeters) long, with a 2‑foot-long (61‑centimeter) tail and weighed about 7 pounds (3.2 kilograms). They have chameleon-like abilities, though their color are usually a brownish red.</p>
<p>Their general attitude is similar to that of a small cat but with a cunning intelligence. They are wary of evil beings, but are willing to serve as a companion to another being if treated well and respected.</p>
<p>A pseudodragon often vocalizes animal noises. A rasping purr indicates pleasure, while a hiss means unpleasant surprise. A bird-like chirping represents desire, and a growl always means anger or discontent.</p>
<p>In the wild, pseudodragons often seek out quiet places to inhabit such as the hollows of trees and small caves. They are likely to be found in temperate forests.</p>
<p>They are sometimes dispatched in times of need by an array of deities including Brandobaris, Erevan Ilesere, Gond, Gwaeron Windstrom, Marthammor Duin, Mystra, and Rillifane Rallathil.</p>
<dl>
    <dt>Animal Companion</dt> <dd>3rd Level Spell Slot (Ranger 1st Level Spell Slot).</dd>
</dl>';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack +4 to hit, reach 5 ft, one target. 1D4 +2 Piercing damage</dd>
    <dt>Sting</dt> <dd>Melee Weapon Attack +4, reach 5 ft, one target. 1D4 +2 Piercing damage, and the target must make a CON Save or become Paralyzed for 1 hour. Taking damage or being shaken causes the Parallelization to end the start of the victims next turn. This parallelization causes the muscles to hold the position they are in. Pseudodragons like to pose victims in humorous poses when paralyzed this way.</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Dragon', 'Animal Companion'], [
            'stats'     => [6, 15, 13, 10, 12, 10, .25, 2],
            'skills'    => [
                'Perception' => ['dc' => 3],
                'Stealth'    => ['dc' => 4],
            ],
            'features'  => [
                'magic_resistance',
                'darkvision' => ['meta' => '{"range":60}'],
                'blindsight' => ['meta' => '{"range":10}'],
                'camouflage',
                'keen_sense' => ['meta' => 'Sight, Hearing, or Smell'],
            ],
            'languages' => [
                'Sylvan'       => ['meta' => "Can't speak"],
                'Auld Wyrmish' => ['meta' => "Can't speak"],
                'Telepathy'    => ['meta' => 'Simple ideas, emotions, and images with range of 100 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Quickling';
        $monster->size             = 'Tiny';
        $monster->type             = 'Fey';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '19 (Leather Armor) / 18';
        $monster->damage_reduction = '1 (Leather Armor) / 0';
        $monster->hit_dice         = 2;
        $monster->speed            = '120 ft';
        $monster->actions          = '<dl>
    <dt>Dagger</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D4 -3 Piercing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey'], [
            'stats'    => [4, 23, 13, 10, 12, 7, 1, 2],
            'features' => [
                'darkvision'   => ['meta' => '{"range":60}'],
                'multi_attack' => ['meta' => 'The quickling gains an additional Action. This additional Action can be used for any Action'],
            ],
            'skills' => [
                'Acrobatics' => ['dc' => 8],
                'Perception' => ['dc' => 5],
                'Thievery'   => ['dc' => 8],
                'Stealth'    => ['dc' => 8],
            ],
            'feats'     => ['Lightning Reflexes', 'Evasion', 'Weapon Finesse'],
            'languages' => ['Sylvan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Satyr';
        $monster->size             = 'Medium';
        $monster->type             = 'Fey';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '14 (Leather Armor) / 13';
        $monster->damage_reduction = '1 (Leather Armor) / 0';
        $monster->hit_dice         = 4;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Ram</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D4 +1) Bludgeoning.</dd>
    <dt>Shortsword</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +1) Slashing</dd>
    <dt>Shortbow</dt> <dd>Ranged Weapon Attack, reach 80/320 ft, one target. (1D6 +1) Piercing.</dd>
</dl>';
        $monster->description      = '
<dl>
    <dt>Animal Companion</dt> <dd>2nd Level Spell Slot (no pipes)(Ranger 1st Level Spell Slot). 4th Level Spell Slot (with pipes)(Ranger 2nd Level Spell Slot)</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Humanoid', 'Animal Companion'], [
            'stats'    => [12, 16, 11, 12, 10, 14, .5, 2],
            'features' => [
                'magic_resistance',
            ],
            'skills' => [
                'Perception' => ['dc' => 3],
                'Stealth'    => ['dc' => 8],
            ],
            'languages' => ['Sylvan', "Or'Tel'Quessan"],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Shambling Mound';
        $monster->size             = 'Large';
        $monster->type             = 'Fey, Plant';
        $monster->alignment        = 'Neutral';
        $monster->armor_class      = '15 (Natural Armor)';
        $monster->damage_reduction = '3';
        $monster->hit_dice         = '15';
        $monster->speed            = '20 ft / Swim 20 ft';
        $monster->actions          = '<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack +7, reach 5 ft, one target. 2D8 + 4 Bludgeoning Damage.</dd>
    <dt>Engulf</dt> <dd>If the Shambling Mound has Successfully Grappled a creature of Medium or smaller, it can use an Action to Engulf them. The Engulfed creature is Blinded, Restrained and unable to Breathe, and it must Succeed a DC 14 CON Save or take 2D8 +4 Bludgeoning Damage. If the Shambling Mound moves, the Engulfed creature moves with it. The Shambling Mound can only have one creature Engulfed at a time. A creature that is Engulfed can try to escape by Successfully making a Grapple check with Disadvantage and a -5 Penalty.</dd>
    <dt>Lightning Absorption</dt> <dd>Whenever the Shambling Mound takes Electricity Damage, it takes no Damage and regains a number of Hit Points equal to the Electricity Damage.</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Plant'], [
            'stats'    => [18, 8, 16, 5, 10, 5, 5, 3],
            'features' => [
                'multi_attack' => ['meta' => 'If the Shambling Mound hits with 2 Slam attacks on the same creature on the same turn, it gains an additional Action. This additional Action can only be used to make Grappling attacks.'],
                'resistance'   => ['meta' => 'Cold, Fire'],
                'immunity'     => ['meta' => 'Electricity, Blinded, Deafened, Exhausted'],
            ],
            'feats'    => ['Blindsight' => ['meta' => '60 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Sprite';
        $monster->size             = 'Tiny';
        $monster->type             = 'Fey';
        $monster->alignment        = 'NG';
        $monster->armor_class      = '17 (Leather Armor) / 16';
        $monster->damage_reduction = '1 (Leather Armor) / 0';
        $monster->hit_dice         = 1;
        $monster->speed            = '10 ft / Fly 40 ft';
        $monster->actions          = '<dl>
    <dt>Longsword</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D1 Slashing</dd>
    <dt>Shortbow</dt> <dd>Ranged Weapon Attack, reach 40/160 ft, one target. 1D1 Piercing. The target must succeed a DC 10 CON Save or become Sickened 2 for 1 minute. If its Save is a Critical Failure, the target falls unconscious for the same duration, or until it takes damage or another creautre takes an Action to shake it awake.</dd>
</dl>';
        $monster->description = '
<dl>
    <dt>Animal Companion</dt> <dd>3rd Level Spell Slot (Ranger 1st Level Spell Slot).</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Animal Companion'], [
            'stats'  => [3, 18, 10, 14, 13, 11, .25, 2],
            'skills' => [
                'Perception' => ['dc' => 3],
                'Stealth'    => ['dc' => 8],
            ],
            'spells' => [
                'Heart Sight'  => ['meta' => 'At will'],
                'Invisibility' => ['meta' => 'At will'],
            ],
            'languages' => ['Sylvan', "Or'Tel'Quessan"],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Starsnake';
        $monster->size             = 'Medium';
        $monster->type             = 'Fey';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '15';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 5;
        $monster->speed            = '10 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4) Piercing + Poison (1D4) DEX and secondary (1D4) DEX unless DC 14 CON Save.</dd>
    <dt>Dream Shield</dt> <dd>
        <p>While asleep, a starsnake generates an aura that absorbs spells and spell-like abilities. Any targeted spell directed at the starsnake is absorbed and instantly converted into electrical energy. This energy is discharged back at the original caster in a bolt that deals 1D10 Electricity damage. per Spell Level of the absorbed spell.</p>
        <p>The bolt is 5 feet wide with a maximum range of 200 feet, and a successful DC 18 DEX Save halves the damage.</p>
    </dd>
</dl>';
        $monster->description = "<p>A starsnake is an antisocial creature that is most dangerous while asleep. Though it is native to open grasslands, the creature prefers to rest on high rocks or trees.</p>
<p>A starsnake's glossy sales range in hue from luminous shades of blue and green to radiant ruby. Their eyes always posses a sky-blue hue. Starsnakes can reach 8 to 10 feet long when fully grown but weigh only 6 to 8 pounds. A starsnake finds its own kind abhorent and being hermaphroditic, doesn't seek the company of other starsnakes to produce young.</p>
<p>When resting during the heat of the day, the snakes employ a dream shield that repels magic and rewards anyone who touches them with a jolt of electricity. They are reclusive creatues that are usually seen only at twilight, thier beutiful wings reflecting the sunset colors. Starsnakes feed upon rodents, presenting a threat only to other creatures foolish enough to disturb their slumber.</p>
<p>They do, however, delight in playing pranks on intelligent beings, coming to rest in spots where they might engage such ludicrous (but usually harmless) suggestions. A common explaination for foolish behavior is to claim only half in jest, that someone was \"beguiled by a starsnake\".</p>
<p>A starsnake can be acquired as a familiar by sacrificing a 7th level Spell Slot.</p>";
        $helper->saveMonster($monster, ['Fey'], [
            'stats'  => [9, 20, 11, 16, 16, 26, 5, 3],
            'skills' => [
                'Diplomacy'  => ['dc' => 18],
                'Perception' => ['dc' => 10],
            ],
            'feats'  => ['Weapon Finesse'],
            'spells' => [
                'Charm'       => ['meta' => 'At will. Can Heighten 3/day'],
                'Hold Person' => ['meta' => 'At will. Can Heighten 3/day'],
                'Suggestion'  => ['meta' => '1/day'],
            ],
            'languages' => ['Sylvan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Thorn';
        $monster->size             = 'Small';
        $monster->type             = 'Fey';
        $monster->alignment        = 'N';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '5';
        $monster->hit_dice         = 6;
        $monster->speed            = '20 ft';
        $monster->actions          = "<dl>
    <dt>Thorn Longsword</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D6 + 3 Piercing/Slashing.</dd>
    <dt>Longbow</dt> <dd>Ranged Weapon Attack, range 100/400 ft, one target. 1D6 Piercing.</dd>
    <dt>Sleep Arrows (Ex)</dt> <dd>Any opponent struck by a thorn's arrow, regardless of Hit Dice, must succeed on a DC 16 CON Save or be affected as though by a sleep spell. The save DC is Charisma-based.</dd>
    <dt>Sneak Attack (Ex)</dt> <dd>The thorn deals an extra 2D6 points of damage on a successful attack when it has advantage or flags a target that is caught flat-footed.</dd>
</dl>";
        $monster->description  = '<p>Thorns generally do not pick fights, but they will attack anyone or anything that threatens or harms other fey. They are sneaky creatures that launch vicious attacks from hiding.</p>
<dl>
    <dt>Animal Companion</dt> <dd>3rd Level Spell Slot (Ranger 1st Level Spell Slot)</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Neutral', 'Animal Companion'], [
            'stats'    => [16, 15, 13, 10, 10, 13, 3, 4],
            'features' => [
                'darkvision'    => ['meta' => '{"range":60}'],
                'vulnerability' => ['meta' => 'Cold Iron'],
            ],
            'languages' => ['Sylvan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Treant';
        $monster->size             = 'Huge';
        $monster->type             = 'Fey, Plant';
        $monster->alignment        = 'CG';
        $monster->armor_class      = '7';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 12;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (3D6 + 6) Bludgeoning.</dd>
    <dt>Rock</dt> <dd>Ranged Weapon Attack, reach 60/180 ft, one target. (6D10 + 6) Bludgeoning.</dd>
</dl>';
        $monster->description = '<p>Treants typically have face-like features on their bark, a division between their trunk that form legs, and long branches that serve as arms. Their wood appears to be solid like stone, but it was actually filled with tubes that carry water from its roots to the areas where it was needed. Diseases such as tube wilt can affect these tubes and therefore the health of the treant.</p>
<p>In their adolescence treants are often more energetic, rebellious, and reckless. But as they age treants prefer to while away their days in quiet contemplation, rooted in place as though they are a normal tree.</p>
<p>Any treant that roots itself in a stand containing a particular sort of tree for at least a year could, over a tenday or so, alter themselves to resemble and possess the physical properties of that type of tree. Certain elder treants are capable of doing this within half a tenday.</p>
<p>Treants remain aware of their surroundings while rooted in place. They can perceive the effects of events happening miles away based on subtle nearby changes.</p>
<p>Trees destined to become treants meditate through a long cycle of seasons that can last decades or centuries, awakening only under special circumstances. Druids and other treants can sense this spark of potential within trees and would protect them as they drew near their moment of awakening. During this process a tree\'s body will gradually morph, taking on the features common among treants. After awakening, they continue to grow as they do when they were simply a tree.</p>';
        $helper->saveMonster($monster, ['Fey', 'Plant'], [
            'stats'    => [23, 8, 21, 12, 16, 12, 9, 4],
            'features' => [
                'false_appearance' => ['meta' => 'While the treant remains motionless, it is indistinguishable from a normal tree'],
                'resistance'       => ['meta' => 'Bludgeoning, Piercing'],
                'vulnerability'    => ['meta' => 'Fire'],
                'siege'            => ['meta' => 'Double damage'],
            ],
            'spells' => [
                'Animate Plants' => ['meta' => '1/day, Heightened +2'],
            ],
            'languages' => ['Sylvan', "Or'Tel'Quessan", 'Drueidan'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Tressym';
        $monster->size        = 'Tiny';
        $monster->type        = 'Fey';
        $monster->alignment   = 'CG';
        $monster->armor_class = '14';
        $monster->hit_dice    = 2;
        $monster->speed       = '40 ft / Climb 30 ft / Fly 40 ft';
        $monster->actions     = '<dl>
    <dt>Claws</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1 Slashing damage</dd>
</dl>';
        $monster->description = "<p>A tressym resembles a small cat, roughly the size of a common house cat, and growing up to 2 feet long from nose to tail. their primary feature are their wings. Extending from their well-muscled shoulders, these wings are formed like a bat's, being divided into arc-segments by hollow elongated \"finger\" bones. However, the leathery membranes between these bones are covered in feathers. These wings have a maximum wingspan of 3 feet.</p>
<p>Like ordinary cats, tressym stalk and pounce on their prey, using their claws and fangs to slay it. However, the ability to fly gives them a new dimension to hunt in and makes them much more dangerous to birds and insects. They can also get into aerial cat-fights.</p>
<p>Otherwise, they avoid fighting with anything larger than themselves, by flying away and hiding. If pursued by larger flying creatures, they will go to ground and seek a small hole or crevice to conceal themselves in.</p>
<p>Nevertheless, they are cunning and quick learners, knowing enough to scratch a foe's eyes and have learned the danger of weapons and wands held by people.</p>";
        $helper->saveMonster($monster, ['Fey', 'Animal Companion'], [
            'stats'    => [3, 15, 10, 11, 12, 12, 0, 2],
            'features' => [
                'darkvision' => ['meta' => '{"range":60}'],
                'keen_sense' => ['meta' => 'Smell. Can detect Poison by Taste, Touch, or Smell'],
            ],
            'spells' => [
                'See Invisibility' => ['meta' => 'Always on'],
            ],
            'languages' => ['Sylvan' => ['meta' => "Understand but can't speak"]],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Unicorn';
        $monster->size        = 'Large';
        $monster->type        = 'Celestial, Fey';
        $monster->alignment   = 'CG';
        $monster->armor_class = '11';
        $monster->hit_dice    = 6;
        $monster->speed       = '50 ft';
        $monster->actions     = '<dl>
    <dt>Hooves</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +4) Bludgeoning.</dd>
    <dt>Cold Iron Silvered Horn</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +4) Piercing.</dd>
</dl>';
        $monster->description = '<p>A unicorn resembles a horse with a white coat, mane, and tail. However, it has a number of traits that distinguished it from a horse, including cloven hooves and a long ivory-colored horn that protrudes from its forehead. Males have a white beard.</p>
<dl>
    <dt>Animal Companion</dt> <dd>5th Level Spell Slot (Ranger 3rd Level Spell Slot).</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Celestial', 'Animal Companion'], [
            'stats'    => [18, 14, 15, 11, 17, 16, 5, 3],
            'features' => [
                'magic_resistance',
                'vulnerability'       => ['meta' => 'Fire'],
                'immunity'            => ['meta' => 'Charm, Paralyzed, Poison'],
                'innate_spellcasting' => ['meta' => 'DC 14'],
            ],
            'spells' => [
                'Misty Step'        => ['meta' => 'At will, as a Double Action'],
                'Calm Emotions'     => ['meta' => '1/day'],
                'Dispel Outsider'   => ['meta' => '1/day'],
                'Entangle'          => ['meta' => '1/day'],
                'Teleport'          => ['meta' => '1/day'],
                'Cure Wounds'       => ['meta' => 'At will, Heightened +1. Touch only. A target may benefit from this only 1/day. The unicorn may benefit from this at will and as a Free Action.'],
                'Remove Disease'    => ['meta' => 'At will, A target may benefit from this only 1/day'],
                'Neutralize Poison' => ['meta' => 'At will, A target may benefit from this only 1/day'],
            ],
            'feats'     => ['Ride-By Attack', 'Improved Bull Rush'],
            'languages' => ['Sylvan', "Or'Tel'Quessan", 'Telepathy' => ['meta' => '60 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Winter Wolf';
        $monster->size             = 'Large';
        $monster->type             = 'Fey';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '50 feet';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Magical Melee Weapon Attack, reach 5 ft, one target. 2D4 +2 Piercing. If the target is a creature, it must succeed on a DC 11 STR Save or be knocked Prone.</dd>
    <dt>Cold Breath (Recharge 5-6)</dt> <dd>The wolf exhales a blast of freezing wind in a 15-foot cone. Each creature in that area must make a DC 12 DEX Save, taking 14 (3D8) Cold damage on a failed Save, or half as much damage on a successful one.</dd>
</dl>';
        $monster->description      = '
<dl>
    <dt>Animal Companion</dt> <dd>2nd Level Spell Slot (Ranger 1st Level Spell Slot)</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Beast', 'Cold', 'Animal Companion'], [
            'stats'  => [18, 13, 14, 7, 12, 8, 2, 3],
            'skills' => [
                'Perception' => ['dc' => 5],
                'Stealth'    => ['dc' => 3],
            ],
            'features' => [
                'keen_sense' => ['meta' => 'Hearing and Smell'],
            ],
            'talents'   => ['Improved Flanking'],
            'languages' => ['Sylvan'],
        ]);

        /**********************************************************************/

        $monster              = new Monster;
        $monster->name        = 'Harpy';
        $monster->size        = 'Medium';
        $monster->type        = 'Fey';
        $monster->alignment   = 'CE';
        $monster->armor_class = '11';
        $monster->hit_dice    = 4;
        $monster->speed       = '20 ft / Fly 40 ft';
        $monster->actions     = "<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D4 +1) Bludgeoning</dd>
    <dt>
        <p>Luring Song</dt> <dd> The harpy sings a magical melody as a Double Action. Every humanoid and giant within 300 ft. of the harpy that can hear the song must succeed on a DC 11 WIS Save or be Charmed until the song ends. The harpy must take a Double Action on its subsequent turns to continue singing. It can stop singing at any time. The song ends if the harpy is incapacitated.</p>
        <p>While charmed by the harpy, a target is incapacitated and ignores the songs of other harpies. If the charmed target is more than 5 ft. away from the harpy, they must move on its turn toward the harpy by the most direct route. It doesn't avoid opportunity attacks, but before moving into damaging terrain, such as lava or a pit, and whenever it takes damage from a source other than the harpy, a target can repeat the Save. A creature can also repeat the Save at the end of each of its turns. If a creature\'s Save is successful, the effect ends on it.</p>
        <p>A target that successfully saves is immune to this harpy's song for the next 24 hours.
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Fey', 'Cursed'], [
            'stats'     => [12, 13, 12, 7, 10, 13, 1, 2],
            'languages' => ['Sylvan', 'Special' => ['meta' => 'One regional language']],
        ]);

        /**********************************************************************/

        $monster                   = new Monster;
        $monster->name             = 'Chimera';
        $monster->size             = 'Large';
        $monster->type             = 'Fey, Beast, Monstrosity';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 7;
        $monster->speed            = '30 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +4) Piercing. (Dragon and Lion)</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +4) Slashing.</dd>
    <dt>Horns</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D12 +4) Bludgeoning.</dd>
    <dt>Fire Breath (Recharge 5-6)</dt> <dd>The dragon head exhales fire in a 15-foot cone. Each creature in that area must make a DC 15 DEX Save, taking 31 (7d8) Fire damage on a failed Save, or half as much damage on a successful one. The chimera cannot use this attack if its dragon head has already made a Bite attack.</dd>
</dl>';
        $monster->description = "<p>A chimera have the hindquarters of a goat, the forequarters of a lion, and a set of dragon wings. Additionally, a chimera has three heads, that of a horned goat, a lion, and a dragon. This head typically resembles a red dragon, though it is not unlikely to find ones with heads resembling other species of chromatic dragon.</p>
<p>All chimeras have access to an array of various abilities. Each of the heads are capable of a unique attack, but the most dangerous by far is the dragon breath of the chimera's draconic head. The exact attack varies from one individual to another, as in dragons, with the type varying based on color. For instance, a chimera with a white dragon head would cast a breath of cold air, while one with a red dragon head would bellow forth scorching flames.</p>
<p>Chimeras are not very intelligent creatures. Their dragon-like natures often leads them to attack intelligent beings for their treasure and to live solitary existences in caves, though some tale after the lion and live in prides.</p>
<p>A chimera does not usually perceive humans as a threat, but will normally attack the easiest source of food, and will leave humans alone if an easier source is available. They will not hesitate to withdraw from combat if they become injured, and will not seek vengeance later. A chimera prefers to attack by swooping from the sky, attacking with its claws and its jaws, but they will also charge along the ground, leading with their lion head. Once entered into combat, they will use their dragon head to defend against attackers while their lion head will attempt to grasp its victim's neck in their jaws and snap it. It is not wholly uncommon for the goat head to sleep throughout the entire battle.</p>
<p>Chimeras are typically seen in groups of two or three.</p>
<p>Mating usually occurs annually in late spring, with the females being extremely reluctant to perform the act, and even attempting to hide. They typically struggle against the more powerful males, breathing fire from the dragon head. The pregnancy lasts around a year, with the average birth consisting of six offspring, which she will abandon after only a few days. The excess milk produced by the female chimera after abandoning its offspring is released while she slept. It was a thick, black liquid, which acts as an intoxicant for orcs and can be highly prized.</p>
<p>Chimeras are an omnivorous species. They primarily eat meat and will resort to a herbivorous diet whenever prey became scarce of non-existent.</p>
<p>Due to the draconic part of their nature, chimeras often make their lairs within caves. They often decorate these with the bones and belongings of their prey. Their hoards tend to consist primarily of copper and silver coins, with the occasional bits of jewelry and magical items.</p>
<p>Chimeras are very adaptable creatures, able to thrive in most climates. Though they are most often found in hilly regions with a temperate climate.</p>
<p>Some intelligent creatures are known to train chimeras, using them as pets, guardians, or even mounts. They are sometimes found to be in the company of azers and hill giants.</p>";
        $helper->saveMonster($monster, ['Fey', 'Beast', 'Monstrosity'], [
            'stats'  => [19, 11, 19, 3, 14, 10, 6, 3],
            'skills' => [
                'Perception' => ['dc' => 8],
            ],
            'features' => [
                'darkvision'   => ['meta' => '{"range":60}'],
                'multi_attack' => ['meta' => 'The chimera gains an additional Action. This additional Action can only be used by the dragon head (bite or breath). This additional Action cannot be used while flying.'],
            ],
            'languages' => ['Auld Wyrmish' => ['meta' => 'Cannot speak']],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Griffon';
        $monster->size        = 'Large';
        $monster->type        = 'Fey';
        $monster->alignment   = '-';
        $monster->armor_class = '11';
        $monster->hit_dice    = 6;
        $monster->speed       = '30 ft / Fly 80 ft';
        $monster->actions     = '<dl>
    <dt>Beak</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 +4) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D4 +4) Slashing.</dd>
</dl>';
        $monster->description = '<p>A griffon has the body of a lion with the head and wings of an eagle. The forelimbs of the griffon are often like those of an eagle, ending in sharp talons, but this is not always the case. Just as lions and eagles have varying physical characteristics based on where in the world they are found, so too do griffons. An adult griffon is about 8 feet long, with a wingspan of 25 feet. The average griffon weighed about 500 lb.</p>
<p>Griffons are known to be somewhat intelligent creatures, though they have a penchant for aggression. Young griffons are generally not combative.</p>
<p>Young griffons are known as fledglings.</p>
<p>Griffons are carnivorous creatures. Their favorite animal to prey upon are horses and hippogriffs. They will often attack them when within sight or smelling distance. They are also known to clear their hunting grounds of manticores and harpies.</p>
<p>Griffons typically make their nests in homes in high rocky places like cliffs, as well as open caverns set in hills and mountain regions. They do this so that their young can be safe from those who would seek to steal them and use them as mounts.</p>
<p>When acquainted with humans, they are usually stabled in airy, doorless stone halls, vaguely resembling their lairs.</p>
<p>In the Unapproachable East, they nest at the highest reaches of the Tannath mountains and Umbergoth. They can also be found around the coastal regions and interior uplands of Aglarond.</p>
<p>When tamed and raised at a young age they can become very loyal and fierce mounts. Because of this they are highly sought after, with eggs fetching prices of around 2,000 gp and fledglings for around 5,000 gp.</p>
<dl>
    <dt>Animal Companion</dt> <dd>1st Level Spell Slot.</dd>
</dl>';
        $helper->saveMonster($monster, ['Fey', 'Beast', 'Animal Companion'], [
            'stats'  => [18, 15, 16, 5, 13, 8, 2, 3],
            'skills' => [
                'Perception' => ['dc' => 5],
            ],
            'features' => [
                'darkvision' => ['meta' => '{"range":60}'],
                'keen_sense' => ['meta' => 'Sight'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Hippogriff';
        $monster->size        = 'Large';
        $monster->type        = 'Fey';
        $monster->alignment   = '-';
        $monster->armor_class = '11';
        $monster->hit_dice    = 3;
        $monster->speed       = '40 ft / Fly 60 ft';
        $monster->actions     = '<dl>
    <dt>Beak</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 +3) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +3) Slashing.</dd>
</dl>';
        $monster->description = '<p>Hippogriffs have the body of a horse, with the wings and head of a hawk or eagle. Their forelegs ended in sharp talons similar to those found in birds of prey, while their hind legs had hooves. The average hippogriff is 9 feet long, with a wingspan of 20 feet, and weighed about 1,000 lb.</p>
<p>Their hides are colored russet, golden tan, or come in a variety of browns with differently shaded feathers. Their beaks are either ivory or golden yellow.</p>
<p>Hippogriffs are reclusive in behavior, seldom traveling far from their nest. They have an omnivorous diet, and will hunt humanoids as often as any other meal. Hippogriffs are frequently preyed upon by griffons, dragons and wyverns.</p>
<p>While some seem to be of the opinion that female hippogriffs give live birth, the majority of accounts of their ecology give mention specifically about their eggs.</p>
<p>A typical herd includes one to three males, and an equal number of mares and foals</p>
<p>They live in temperate to tropical hills, in areas where it is particularly flat and barren, allowing them quick and easy access to the skies. A significant population exists in the Starspire Mountains in County Starspur in Tethyr.</p>
<p>In the Unapproachable East, they can be found around the Umbergoth mountain of Aglarond.</p>
<p>Hippogriffs are highly prized as aerial steeds. Because they are not as intelligent as griffons, a friendly attitude from the hippogriff to the rider or tamer was not required, but they still require a specialized saddle and appropriate training. The easiest way to tame a hippogriff is to steal an egg and raise it from birth, but these are not easy to obtain, due to the ferocity of their defenders.</p>
<p>In Zakhara, the Caliphate of Huzuz raises large numbers of hippogriffs for military service.</p>
<p>A hippogriff egg can fetch 1,000 gp, 2000 gp by some accounts, while young hippogriffs can sell for two to three times that price.</p>';
        $helper->saveMonster($monster, ['Fey', 'Beast', 'Animal Companion'], [
            'stats'  => [17, 15, 13, 2, 12, 8, 1, 2],
            'skills' => [
                'Perception' => ['dc' => 5],
            ],
            'features' => [
                'keen_sense' => ['meta' => 'Sight'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Yeth Hound';
        $monster->size             = 'Large';
        $monster->type             = 'Fey';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '40 ft / 40 ft (hover)';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Magical Melee Weapon Attack, reach 5 ft, one target. 10(2D6 + 3) Piercing. If the target is a creature, it must Succeed on a DC 13 STR Save or be knocked Prone.</dd>
    <dt>Bay</dt> <dd>All non-Fey in a 200-foot radius emanation must make a WIS Save or by Frightened: 3. Success or Fail, the target is immune to this Yeth Hounds Bay for the next 24 hours</dd>
</dl>';
        $monster->description      = "<p>The hideous yeth hounds resembles a large greyhounds, standing 4‒5ft (1.2‒1.5m) high at the shoulder and weighing about 400lb (180kg). Their short fur is a dull, non-reflective night-black, often blending into the darkness and leaving only the cherry-red glow of their eyes and the smell of chilled smoke to indicate their presence. They possess an oddly human-like visage, with protruding noses in place of muzzles and more flexible necks than those of canines. Their ears are short and pointed, curving upwards and away from the rest of the head in such a way that they resembled horns.</p>
<p>Yeth hounds are wicked hunters and fundamentally obedient creatures, following the toughest member of the pack with complete deference and consciously seeking evil masters to serve. Aside from that, they have no loyalty to each other and will not assist each other unless told otherwise. The only prize they seek from their prey are their terrified screams as they hunted them down and tore them limb from limb and any treasures found with a yeth hound is purely incidental.</p>
<p>Threats and intimidation are of no use against yeth hounds as they possess only one crippling phobia, sunlight. Yeth hounds never go under sunlight, even when in the middle of a hunt or even if their life was on the line. Because of this aversion to sunlight, yeth hounds make sure that there is always time to return to their dens before the strike of dawn and will then stay within them, pacing or sleeping, until night falls once again. Not even the wills of their masters can persuade yeth hounds to stay outside during the day.</p>
<p>Yeth hounds consume warm-blooded creatures and have a preference for humans, demihumans and fey such as brownies, while they themselves are avoided by all natural and several unnatural predators. The nightly beasts do require food in order to survive but only once every lunar month.</p>
<p>Yeth hounds typically ran in packs of 4-16 individuals. These packs often make their dens underground in the depths of the most isolated of wilds.</p>
<p>Yeth hound packs are often made by formidable fey such as the Queen of Air and Darkness as rewards for loyal servitors. It is theorized by several meta-physicians that yeth hounds are a manifestation of fear itself.</p>
<p>Yeth are known to establish telepathic connections with evil forces they judged worthy of being their masters, serving them as hunting hounds. The two could share senses and communicate from great distances while on the same plane.</p>
<p>Yeth hounds typically ally themselves with beings such as vampires, vile huntsmen, hags (although particularly night hags), wicked wizards like necromancers and other entities so long as they are immune to their terrible howling, as well as powerful members of the Unseelie Court. A master's death simply prompts them to seek new terrible forces to serve under.</p>";
        $helper->saveMonster($monster, ['Fey'], [
            'stats'     => [18, 17, 16, 5, 12, 7, 4, 2],
            'skills'    => ['Perception' => ['dc' => 5]],
            'features'  => [
                'immunity'             => ['meta' => 'Charmed, Exhaustion, Frightened, (Bludgeoning, Piercing, and Slashing from non-magical and non-Silvered physical attacks)'],
                'darkvision'           => ['meta' => '{"range":60}'],
                'sunlight_sensitivity' => ['meta' => '1D6 Light damage per round of exposure to Sunlight'],
            ],
            'languages' => [
                'Seldruin'  => ['meta' => "Cant' speak"],
                'Sylvan'    => ['meta' => "Can't speak"],
                'Telepathy' => ['meta' => 'Only with their "master"'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Worg';
        $monster->size             = 'Large';
        $monster->type             = 'Fey';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '50 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 10(2D6 + 3) Piercing. If the target is a creature, it must Succeed on a DC 13 STR Save or be knocked Prone.</dd>
</dl>';
        $monster->description      = '<p>A worg is an evil predator that delights in hunting and devouring creatures weaker than itself. Cunning and malevolent, worgs roam across the remote wilderness or are raised by goblins and hobgoblins. Those creatures use worgs as mounts, but a worg will turn on its rider if it feels mistreated or malnourished. Worgs speak Goblin and Sylvan, and a few learn an additional language as well.</p>';
        $helper->saveMonster($monster, ['Fey', 'Goblin', 'Beast'], [
            'stats'    => [16, 13, 13, 7, 11, 8, .5, 2],
            'skills'   => ['Perception' => ['dc' => 4]],
            'features' => [
                'darkvision'    => ['meta' => '{"range":60}'],
                'keen_sense'    => ['meta' => 'Hearing and Smell'],
            ],
            'languages' => ['Ghukliak', 'Sylvan'],
        ]);
    }
}
