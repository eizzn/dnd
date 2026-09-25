<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersSSeeder extends Seeder
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
        $monster->name             = 'Red Slaad';
        $monster->size             = 'Large';
        $monster->type             = 'Slaad';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 11;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 8 (2D4 +3) Piercing damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 7 (1D8 +3) Piercing damage. If the target is a humanoid, it must succeed on a DC 14 CON Save or be infected with a Slaad Parasite.</dd>
</dl>';
        $monster->description = "<p>Red Slaadi, also known as Blood Slaads, are the most common member of the Slaad race. They are brutish bullies of low status used by more powerful Slaadi as thugs and are quick to spill blood out of anger, hunger, or just fun.</p>
<p>Red Slaadi are 8 ft tall bipeds that weigh approximately 650 lb, resembling roughly humanoid, almost neckless toads with huge, flat heads. Their skin is mostly dull red with specks of gray, lighter around their undersides and darker along their backs, and occasionally covered by loincloths. Both their fingers and hands are strangely large and, like their feet, ends in claws.</p>
<p>Red Slaadi are short-tempered and surly on top of being somewhat unintelligent.</p>
<p>Red Slaadi prefer to wander alone, often creating lairs on other planes to escape the tyrannical behavior of more powerful Slaadi from Limbo. Typically, they are only found together when compelled by some form of greater power, moving in gangs with as few as three members and in packs with somewhere between 6-18 members. They are often sent to the Material Plane on missions for their masters, typically to abduct human slaves.</p>
<p>Despite passionately hating each other, Red Slaads and Blue Slaads are irrevocably tied together by their reproductive cycles, instinctually driven to produce offspring that, unfortunately for them, are Slaad of the rival color. Red Slaads spawned Blue Slaads and vice versa, but after conception the spawn are raised by the opposing variety.</p>
<p>Red Slaadi possess glands under each of their claws and they occasionally and imperceptibly implant tiny egg-pellets into those they claw. They inject them into the flesh of humanoid hosts, an inexact procedure only certain to work if the victim is unconscious, and after doing so the egg is immediately renewed, allowing them to inject eggs into others. Hosts can only house one developing Slaad at a time, and after injection the pellet moves through the victim\'s body until reaching the chest cavity, although some reports claimed they can come from the skull. Reported gestation times vary widely, ranging from three hours to three months, and twenty-four hours before the birth, the victim is struck extremely ill both physically and mentally.</br>
At the end, the baby Blue Slaad, existing at this point as a tadpole, then burst from the victim after eating their vital organs, consume the rest of the body and then seek out more meat. If the host had been a capable arcane spellcaster, or possibly just an otherwise skilled or powerful being, the tadpole might instead be a Green Slaad. The young Slaad will quickly develop in under twenty-four hours and become fully self-sufficient in a few years. Red Slaadi appear as the result of Chaos Phage, a Disease similar to Lycanthropy that spread through Blue Slaadi hooks and transforms victims into them.</br>
The egg gestation process can be stopped using spells that cure Disease, removed Curses, restores Vitality, or affected Poisons, thus disintegrating the spawn, or with skilled medical care, and the egg can be found with a Detect Chaos spell. Realizing this, Slaadi often kidnap victims, bringing them to or creating prison camps to keep them in until the unborn Slaadi is brought to term. Even beings as mighty as pit fiends could be used as hosts for Red Slaad eggs, although if the egg ended up deformed somehow it can cripple the Slaad when it hatched.</p>
<p>During the Red Slaadi breeding season, their songs around the Spawning Stone can be heard for miles around. They typically have trouble forcing the Death Slaadi to leave the Stone since they surround the area with deadly acid fog that makes the area temporarily uninhabitable. Eventually the Red Slaadi hordes manages to run both them and the Gray Slaads off, presumably because not even they are immune to the horrific egg gestation process.</p>
<p>When Red Slaadi sustain themselves off of Elemental Chaos for too long, they risk transforming themselves into Juggernauts, giant Red Slaads that are even more destructive and violent than their typical counterparts. Such Slaads drag back targets trying to escape and gleefully brutalized them in displays of wanton ruthlessness.</p>
<dl>
    <dt>Slaad Parasite Infection</dt> <dd>
        <p>A humanoid host can carry only one Slaad egg to term at a time. While they can be infected with multiple eggs, only one will come to maturity. Over three months, the egg moves to the chest cavity, gestates, and forms a slaad tadpole. In the 24-hour period before giving birth, the host starts to feel unwell and suffers the following penalties</p>
        <ul>
            <li>Speed is halved</li>
            <li>Disadvantage on all Attack rolls, Ability Checks, and Saves</li>
        </ul>
        <p>At birth, the tadpole chews its way through vital organs and out of the host's chest in 1 round, killing the host in the progress.</p>
        <p>If the disease is cured before the tadpole's emergence, the unborn Slaad is disintegrated.</p>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Slaad', 'Outer Planes', 'Chaotic', 'Outsider', 'Neutral'], [
            'stats'  => [16, 12, 16, 6, 6, 7, 5, 4],
            'skills' => [
                'Perception' => ['meta' => 1],
            ],
            'features' => [
                'darkvision'    => ['meta' => '{"range":60}'],
                'regeneration'  => ['meta' => '10.'],
                'vulnerability' => ['meta' => 'Axiomatic, Adamantine, Mithral'],
                'resistance'    => ['meta' => 'Acid, Cold, Electricity, Fire, Sonic'],
                'magic_resistance',
            ],
            'languages' => ['Slaad', 'Telepathy' => ['meta' => '60 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Blue Slaad';
        $monster->size             = 'Large';
        $monster->type             = 'Slaad';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 13;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 12 (2D6 +5) Piercing damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 12 (2D6 +5) Slashing damage. If the target is a humanoid, it must succeed on a DC 15 CON Save or be infected with Chaos Phage Disease.</dd>
</dl>';
        $monster->description = "<p>Blue Slaadi, also known as talon slaads, are members of the Slaad race and rivals to the interrelated Red Slaadi. The batrachian bullies are generally superior to them in every way, but only barely so, and are still considered to be of low status</p>
<p>Blue Slaadi are 10‑foot-tall (3‑meter) bipeds that weighed approximately 1,000 lb, resembling roughly humanoid toads with light, electric blue skin marked by grey streaks. Despite being bigger, broader and stronger than their Red Slaadi counterparts they are also more limber and have longer snouts. As opposed to the larger hands of the Red Slaadi, Blue Slaadi have two long, scimitar-like hooks of bone protruding from the back of both of their hands. Otherwise, they are typically identical in bodily structure, complexion and dress to the Red Slaadi.</p>
<p>Blue Slaads are only marginally more intelligent than Red Slaads and share their other behaviors, namely their poor tempers. Strength was the only trait they value, and they constantly sought to prove their own.</p>
<p>Blue Slaadi are stronger than their already physically powerful Red counterparts, fighting with their claws and hooks and rending flesh with their fangs.</p>
<p>The fighting style of the Blue Slaadi allows them to attack with both their actual claws and their bone protrusions. They specialize in fighting on mass and are usually found in groups, being able to coordinate effectively by the low standards of the Red Slaadi. At the same time, they are not exactly tactically superior, typically just wading into combat with tooth and claw throwing enemies overhead and furiously slashing at anything close enough. As a result of their surly nature, and their need to prove their physical superiority, they had a tendency to attack most other creatures on sight.</p>
<p>Blue sSlaadi are the errand runners used to accomplish various missions and the soldiers gathered to wage war on behalf of more powerful Slaadi, both against other civilizations and rival Slaad societies. When Blue Slaads are together they can be in groups as small as a pair or as large as a dozen, but despite their maximum pack size being smaller than the Red Slaads, they are still more likely to be found in gatherings of their own free will since Red Slaads preferred to be alone. Only in the gravest situations will Blue Slaads assist Red Slaads.</p>
<p>Despite passionately hating each other, Blue Slaads and Red Slaads are irrevocably tied together by their reproductive cycles, instinctually driven to produce offspring that, unfortunately for them, are slaad of the rival color. Blue Slaads spawn Red Slaads and vice versa, but after conception the spawn is raised by the opposing variety.</p>
<p>By striking humanoid victims with their bony hooks, Blue Slaadi can afflict them with a disease known as Chaos Phage or Slaad Fever, similar in effect to lycanthropy. It lasts somewhere between a few days and three months and if left untreated, the Disease will slowly drain not only the victim's vitality and mobility but their personality. At the end of the process, they will quickly be transformed into a full-grown Red Slaad, or Green Slaad if the victim has been a capable arcane spellcaster or possibly just an otherwise skilled or powerful being, with no memories or abilities from their former lives. Blue Slaads, conversely, are born as a result of Red Slaadi injecting humanoids with egg-pellets that hatches into Slaad tadpoles before eating their way out of their host, feeding on carrion and other bits of meat until growing to maturity some time later.</br>
Only a wish spell can return a transformed victim to normal after the process has completed and the disease simply kills non-humanoids, but before then the process can be stopped using spells that cured disease or greatly restored vitality, and the infection can be found using a Detect Chaos spell. Because of this, Slaadi often kidnap victims, bringing them to or creating prison camps to keep them in until they had fully transformed.</p>
<p>During the Blue Slaadi breeding season, they almost inaudibly scratch the area around the Spawning Stone.</p>
<p>Digesters are a variant of ordinary Blue Slaadi that have their own philosophy for spreading chaos throughout the multiverse. Believing that reality was truly chaotic under the surface, they seek to devour as much as they can in order to unveil its hidden nature. They grabbed as much prey as they can, their skin being covered in sticky secretions, before spraying them with predigestive acid and devouring them and using their tongues to trip up anyone that tried to escape.</p>
<dl>
    <dt>Chaos Phage Disease</dt> <dd>
        <p>Chaos Phage, also known as Slaad Fever, is a magical Disease. The Disease is slow acting but incredibly fatal, and usually kills its host within days, causing them to rapidly wither away. People killed by the Disease will be reborn as a Red Slaad. Arcane spellcasters capable of casting more than basic spells will instead be reborn as a Green Slaad.</p>
        <p>This Disease can only be cured by magical means, casting the spells Remove Disease or Restoration (heightened to 5th level), and the transformation can only be undone by Wish or Divine Intervention.</p>
        <p>While infected, the target suffers the following</p>
        <ul>
            <li>Cannot regain Hit Points</li>
            <li>Maximum Hit Points is reduced by 3D6 every 24 hours. If the target's maximum Hit Points drops to 0, the target instantly transforms into a Red Slaad (or a Green Slaad as described)</li>
        </ul>
        <p>At birth, the tadpole chews its way through vital organs and out of the host's chest in 1 round, killing the host in the progress.</p>
        <p>If the disease is cured before the tadpole\'s emergence, the unborn Slaad is disintegrated.</p>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Slaad', 'Outer Planes', 'Chaotic', 'Outsider', 'Neutral'], [
            'stats'  => [20, 15, 18, 7, 7, 9, 7, 5],
            'skills' => [
                'Perception' => ['meta' => 1],
            ],
            'features' => [
                'darkvision'    => ['meta' => '{"range":60}'],
                'regeneration'  => ['meta' => '10.'],
                'vulnerability' => ['meta' => 'Axiomatic, Adamantine, Mithral'],
                'resistance'    => ['meta' => 'Acid, Cold, Electricity, Fire, Sonic'],
                'magic_resistance',
            ],
            'languages' => ['Slaad', 'Telepathy' => ['meta' => '60 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Green Slaad';
        $monster->size             = 'Large';
        $monster->type             = 'Slaad';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 15;
        $monster->speed            = '30 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 11 (2D6 +4) Piercing damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 7 (1D6 +4) Slashing damage.</dd>
    <dt>Staff</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 7 (1D6 +4) Bludgeoning damage.</dd>
    <dt>Hurl Flame</dt> <dd>Ranged Spell Attack, range 60 ft, one target. 10 (3D6) Fire damage. The Fire ignites flammable objects that aren't being worn or carried.</dd>
</dl>";
        $monster->description = "<p>Green Slaadi, also known as Curse Slaads, are unusually intelligent Slaad shapechangers and spellcasters. Spawned from skilled arcane practitioners that underwent the Slaad reproductive process, the gloating toads can eventually evolve into the more magically skilled Gray Slaads</p>
<p>Green Slaadi are physically similar to Blue Slaadi, standing at least 7 ft tall but often sharing their height, weight and build, albeit being more gangly. Their skin is mostly a pale, mottled green, but otherwise is also identical to that of the Blue Slaads. They have high foreheads, wide mouths and long claws, although by Slaadi standards their claws are actually short, and the frog-like bipeds have the ability to take on other humanoid forms.</p>
<p>Green Slaadi are utterly selfish beings that thirst for magical might and get defensive about their weaknesses. By the standards of the common Slaads, Green Slaadi possess a great amount of intelligence, having some knowledge of the arcane and being skilled in deceit and intimidation. However, given the primitive nature of Red and Blue Slaadi, sizable intellect by their standards translated to the average intellect of ordinary mortals, and they can still fall victim to loutish behavior. Their primary flaw is their arrogance and haughtiness, as during times of victory they have been known to waste time boasting and blustering.</p>
<p>While by no means weak, having strength somewhat comparable to that of the Blue Slaadi, Green Slaads aren't particularly adept at melee. Instead, they specialize in the use of spell-like abilities.</br>
They can also polymorph themselves into humanoid forms of various sizes, typically those of their former hosts or selves, and the transformation can't be dispelled by outside forces, although they can turn back whenever they want and revert to normal upon death. Truesight can reveal their Slaad forms, but the change is still physical, altering their bodies and not their clothes.</p>
<p>Green Slaadi favor using their spell-like abilities to fight from afar, hurling energy at their foes.</p>
<p>Green Slaadi can operate in pairs or in gangs with up to five or six members, but can only do so if it would help them accomplish their immediate goals. They are often born with significantly greater status than Red and Blue Slaadi and normally acquire much more over time.</p>
<p>When an arcane spellcaster, or sometimes just a sufficiently powerful host, is transformed by a Blue Slaad's Chaos Phage or used by a Red Slaad to hatch a tadpole, the result is sometimes a Green Slaad. As opposed to when the process yield Red or Blue Slaadi, where the parent abandons them to be raised by the Slaad of the opposite color, Green Slaadi are nurtured and favored by both types with careful concern. They properly mature at around 10-12 years old and are already of higher status than their parent.</p>
<p>In their unending search for more magical power, Green Slaadi, at some unknown point in their lives, eventually discover the means to instigate a permanent magical transformation. Knowledge of the transformation isn't learned as much as it was unlocked, instinctively and unpredictably figuring out late in their lives. The realization can take years or decades to come across, most commonly taking about a century or more, and Slaadi that survive to such an age normally retreat into isolation for a minimum of a year. The lucky few that came back return as Gray Slaads, having instantaneously transformed into the higher form after a certain point, fortunately for them with their memories intact. However, the majority never complete the metamorphosis and never returned, presumably having dissolved into the raw, primordial chaos of Limbo after being broken down into their basic essences.</p>
<p>There also exists variant Green Slaadi known as Madjacks that suffer from insane visions so infectious that they extend beyond their own psyches. They can project madness into the minds of others, sometimes just as a reaction to being harmed, and let loose horrible croaks that ruin the minds of those nearby. Unlike ordinary Green Slaads, they have no qualms about diving into combat and sowing chaos amongst their adversaries, although if seriously hurt they try to get back and mentally damage their enemies from a distance.</p>";
        $helper->saveMonster($monster, ['Slaad', 'Outer Planes', 'Chaotic', 'Outsider', 'Neutral'], [
            'stats'  => [18, 15, 16, 11, 8, 12, 8, 5],
            'skills' => [
                'Arcana'     => ['dc' => 3],
                'Perception' => ['dc' => 2],
            ],
            'feats'    => ['Blindsight'],
            'features' => [
                'darkvision'    => ['meta' => '{"range":60}'],
                'regeneration'  => ['meta' => '10.'],
                'vulnerability' => ['meta' => 'Axiomatic, Adamantine, Mithral'],
                'resistance'    => ['meta' => 'Acid, Cold, Electricity, Fire, Sonic'],
                'magic_resistance',
            ],
            'languages' => ['Slaad', 'Telepathy' => ['meta' => '60 ft']],
            'spells'    => [
                'Detect Magic' => ['level' => 0, 'meta' => 'One of known sorcerer spells'],
                'Mage Hand'    => ['level' => 0, 'meta' => 'One of known sorcerer spells'],
                'Fear'         => ['level' => 1, 'meta' => 'One of known sorcerer spells'],
                'Invisibility' => ['level' => 2, 'meta' => 'One of known sorcerer spells'],
                'Fireball'     => ['meta' => '1/day'],
                'Polymorph'    => ['meta' => 'At will. Self only'],
            ],
            'classes' => [
                'Sorcerer' => ['level' => 3],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Gray Slaad';
        $monster->size             = 'Medium';
        $monster->type             = 'Slaad';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 10;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 6 (1D6 +3) Piercing damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 8 (1D10 +3) Slashing damage.</dd>
    <dt>Greatsword</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 10 (2D6 +3) Slashing damage.</dd>
</dl>';
        $monster->description = "<p>Gray Slaadi, sometimes called Rift Slaads or Executioners, are Green Slaads that have undergone a magical metamorphosis. They are known as the Executioners for their service to the malevolent Death Slaads, carrying out their demands on missions of doom.</p>
<p>Compared to the common Slaadi, Gray Slaads are relatively small and lean, appearing as frog-like humanoids that stand 6 ft tall. They seem swifter as well as skinnier and have long, clawed fingers.</p>
<p>Gray Slaads share the same power-hungry obsession with magic that their former selves do, but to an even greater degree. They are so fascinated by magic that they no longer care about the activities of the lesser Red, Blue and Green Slaads, devoting all their attention to their studies. They train as sorcerers to bring out their inherent magical ability and augment their power by crafting magical items, but most seek the virtually immortal might of the Death Slaads.</p>
<p>Gray Slaadi are no less physically dangerous for their increased magical power, possessing most of the abilities of their prior forms as well as additional powers.</p>
<p>Despite preferring ranged combat using their magical abilities, Gray Slaadi aren't averse to entering melee, fighting with tooth and claw in their Slaad forms and training to wield greatswords, often magical blades, when in their humanoid forms. They are intelligent enough to flank and use their abilities based on current circumstances, although their ability to teleport sometimes manifested when they are seriously injured, resulting in them losing their grasp on physical reality and temporarily becoming insubstantial.</p>
<p>Aside from the Death Slaadi, Gray Slaads are the most dreaded of the Slaads, sent to the Prime Material Plane to act on their behalf. They disguise themselves as somewhat charismatic humanoids, typically wearing light clothing and in possession of one or two powerful magical items, as well as a pouch of gold or platinum. They are known to operate in pairs and in groups of three or four.</br>
Although Slaadi typically have little actual influence in the Blood War, Gray Slaadi, in their lust for new magical items, are known to trade information to both sides.</p>
<p>After returning from over a year of isolation, Green Slaadi are instantly turned into Gray Slaads via a mysterious magical process. By taking part in an enigmatic ritual that suffuses them with Negative energy, Gray Slaads can gain even more power at the cost of corrupting their chaotic ways with the murderous sadism of true evil. It is said that, if they consumed an entire, deceased Death Slaad, the Gray Slaad that did so will instantly transform into a Death Slaad themselves. Regardless of the process used, Gray Slaadi keep their memories after the transformation, albeit tainted by their new perspectives.</p>
<p>The variant Gray Slaads referred to as Havocs gleefully take part in furthering the confusion of combat, using their control over space to redirect enemy attacks and shifting the positions of enemies and allies to their whims. They blast enemies from afar to goad them into shooting them only to send the attack hurtling back, although since this typically only works once they spent the remainder of the time reshaping the battlefield to their advantage. If havocs release too much chaotic energy at once they can potentially cause planar instability, with some stories saying that enough of them can open gates to other planes.</br>
There are also special havocs with even more dangerous abilities known as Acolytes of Entropy, fanatical worshipers of Ygorl that live to spread physical destruction and mental disorder. Brought together by the void Slaad Skirnex, they charge recklessly into battle with intent to destroy as much as possible, fully intending to be hurt as even their wounds caused entropic energy to spread around them.</p>";
        $helper->saveMonster($monster, ['Slaad', 'Outer Planes', 'Chaotic', 'Outsider', 'Neutral'], [
            'stats'  => [17, 17, 16, 13, 8, 14, 9, 6],
            'skills' => [
                'Arcana'     => ['dc' => 5],
                'Perception' => ['dc' => 6],
            ],
            'feats'    => ['Blindsight'],
            'features' => [
                'darkvision'    => ['meta' => '{"range":60}'],
                'regeneration'  => ['meta' => '10.'],
                'vulnerability' => ['meta' => 'Axiomatic, Adamantine, Mithral'],
                'resistance'    => ['meta' => 'Acid, Cold, Electricity, Fire, Sonic'],
                'magic_resistance',
            ],
            'languages' => ['Slaad', 'Telepathy' => ['meta' => '60 ft']],
            'spells'    => [
                'Detect Magic' => ['level' => 0, 'meta' => 'One of known sorcerer spells'],
                'Mage Hand'    => ['level' => 0, 'meta' => 'One of known sorcerer spells'],
                'Fear'         => ['level' => 1, 'meta' => 'One of known sorcerer spells'],
                'Invisibility' => ['level' => 2, 'meta' => 'One of known sorcerer spells'],
                'Fireball'     => ['level' => 3, 'meta' => 'One of known sorcerer spells'],
                'Fly'          => ['level' => 3, 'meta' => 'One of known sorcerer spells'],
                'Tongues'      => ['level' => 3, 'meta' => 'One of known sorcerer spells'],
                'Plane Shift'  => ['meta' => '1/day. Self only'],
                'Major Image'  => ['meta' => 'At will.'],
                'Polymorph'    => ['meta' => 'At will. Self only'],
            ],
            'classes' => [
                'Sorcerer' => ['level' => 7],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Death Slaad';
        $monster->size             = 'Medium';
        $monster->type             = 'Slaad';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 15;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon attack +11, reach 5 ft, one target. 9 (1D8 +5) Piercing damage Plus 7 (2D6) Negative damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon attack +11, reach 5 ft, one target. 10 (1D10 +5) Slashing damage Plus 7 (2D6) Negative damage.</dd>
    <dt>Greatsword</dt> <dd>Melee Weapon attack +11, reach 5 ft, one target. 12 (2D6 +5) Slashing damage.</dd>
</dl>';
        $monster->description = "<p>Death Slaadi, also known as the Lesser Masters, are possibly the most deadly of the Slaad race, responsible for organizing the disorderly creatures into mobs and releasing them across reality to wreak havoc. The transformed Gray Slaads are thought by other Slaads to be the pinnacle of their kind, but rather than being true paragons of chaos they embodied its corruption by evil.</p>
<p>Death Slaads are visually indistinguishable from Gray Slaads.</p>
<p>Despite still having all the memories of their former Green and Gray Slaad selves, the behavior of the Death Slaadi starkly contrasts their previous attitudes, specifically in regards to their interests. No longer concerned with increasing their magical powers, Death Slaadi are sadists focused on bringing death and pain to those around them, the most powerful of which undergoing rogue training in order to later become full-fledged assassins.</p>
<p>Death Slaadi, by some mysterious means, obtain many of their powers by controlling the Spawning Stone in Limbo. They are creatures of destruction and decay, stunning and rotting those they strike with their natural weapons and draining the life energy from those they pierce with their fangs.</p>
<p>Like in their previous forms, they can polymorph into their original humanoid hosts, reportedly while retaining their incredible strength.</p>
<p>Though they seldom wear armor and are lethally proficient with their claws and fangs, Death Slaads prefer to wield magical weaponry, often blades such as swords of sharpness.</p>
<p>Despite being too chaotic to respect any form of authority, all Slaads obey the commands of the Death Slaadi out of a combination of fear and respect. They view the Death Slaads as exemplars of their race and greatly fear, and revere, their insurmountable strength, and thus fervently follow their orders. It is said that they, from within the Spawning Stone's inner chambers, carve the symbols of rank into the Slaads, granting them a vast amount of control over the race's loose hierarchy. It is also by their command that hordes of Red and Blue Slaadi are gathered in Limbo and sent to other planes, particularly small, lower planar villages, Blood War battlefields and Prime Material Plane worlds, to slaughter the inhabitants and imprison the survivors to use as incubators and hosts.</br>
They themselves organize the race under the orders of the Lord of Entropy, Ygorl, who desires mass spawnings in order to sow further chaos in the multiverse. At the same time, Ygorl also kills and consumed powerful Death Slaadi for fear that they can learn how to obtain even greater power as Slaad Lords, making them both potential rivals and attractants for powerful beings throughout the multiverse seeking to prove their greatness. Death Slaads themselves are rarely seen in the Material Plane since they almost exclusively disguise themselves as humans, to the point where only six are truly known.</p>
<p>As beings dedicated to death, some Death Slaads became cultists known as Pale Raiders, clerics that inhabit the Negative Energy Plane and are revitalized in their desire of magical power, not for its own sake but to honor death in all its forms.</p>
<p>Death slaads are former Gray Slaads that, through enigmatic, evil rituals that imbued them with Negative energy, became virtually immortal monsters bent on murder. They can also emerge as the result of a Gray Slaad having devoured the corpse of a preexisting Death Slaad. Despite being seen as the perfect Slaad specimen by other Slaads, they can still grow even more powerful.</br>
Through a process similar to how their Green Slaad forms became Gray Slaads, Death Slaads over a century old can isolate themselves from Slaad society, returning from their self-exile as White Slaads. Others seek to explore a unique aspect of chaos in order to grant them an identity outside the typified Slaad castes, a process as barely understood as it was incredibly dangerous. If they succeed in their investigation they will transform into Slaad Lords, empowered with extraordinary abilities, a sense of chaotic purpose and true individuality, although only four Death Slaads has ever managed to complete the transformation.</p>
<p>During the Death Slaadi breeding season, they fill a few hundred yards around the Spawning Stone with poisonous and acidic fogs, making it uninhabitable for the Red Slaads that arrive there first. However, despite their power, they will inevitably be forced away by the mobs of Red Slaadi, possibly because their egg-pellets can infect even them.</p>";
        $helper->saveMonster($monster, ['Slaad', 'Outer Planes', 'Chaotic', 'Outsider', 'Neutral'], [
            'stats'  => [20, 15, 19, 15, 10, 16, 10, 6],
            'skills' => [
                'Arcana'     => ['dc' => 6],
                'Perception' => ['dc' => 8],
            ],
            'feats'    => ['Blindsight'],
            'features' => [
                'darkvision'    => ['meta' => '{"range":60}'],
                'regeneration'  => ['meta' => '10.'],
                'vulnerability' => ['meta' => 'Axiomatic, Adamantine, Mithral'],
                'resistance'    => ['meta' => 'Acid, Cold, Electricity, Fire, Sonic'],
                'magic_resistance',
            ],
            'languages' => ['Slaad', 'Telepathy' => ['meta' => '60 ft']],
            'spells'    => [
                'Detect Magic' => ['level' => 0, 'meta' => 'One of known sorcerer spells'],
                'Mage Hand'    => ['level' => 0, 'meta' => 'One of known sorcerer spells'],
                'Fear'         => ['level' => 1, 'meta' => 'One of known sorcerer spells'],
                'Invisibility' => ['level' => 2, 'meta' => 'One of known sorcerer spells'],
                'Fireball'     => ['level' => 3, 'meta' => 'One of known sorcerer spells'],
                'Fly'          => ['level' => 3, 'meta' => 'One of known sorcerer spells'],
                'Tongues'      => ['level' => 3, 'meta' => 'One of known sorcerer spells'],
                'Plane Shift'  => ['meta' => '1/day. Self only'],
                'Cloudkill'    => ['meta' => '1/day.'],
                'Major Image'  => ['meta' => 'At will.'],
                'Polymorph'    => ['meta' => 'At will. Self only'],
            ],
            'classes' => [
                'Sorcerer' => ['level' => 9],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'White Slaad';
        $monster->size             = 'Medium';
        $monster->type             = 'Slaad';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '14';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 18;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, 5 ft, one target. 10 (1D8 +6) Piercing damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 11 (1D10 +6) Slashing damage Plus 14 (4D6) Acid damage.</dd>
    <dt>Greatsword</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 12 (2D6 +5) Slashing damage.</dd>
</dl>';
        $monster->description = '<p>White Slaadi are a rare and powerful type of Slaad with powers over time and the ability to harness chaos itself.</p>
<p>White Slaadi appear as frightening humanoid toads with pale skin so white that it seemed to glow when hit by even faint light.</p>
<p>White Slaadi are creatures of pure chaos, more in touch with the true principle of chaos than common Slaads. They are focused on studying an art form even more deadly than that of the macabre-obsessed Death Slaadi, namely the manipulation of raw chaos. They also possess a unique and uncanny understanding of time, realizing that time itself is merely an illusion that could, if briefly, be broken.</p>
<p>White Slaadi are exceedingly scarce creatures; even natives to Limbo rarely recognize them when encountered. In a process similar to how a Green Slaad becomes a Gray Slaad, a Death Slaad over a century old could retreat into solitude for over a year, returning as a more powerful White Slaad. By undergoing a similar process after another century, a White Slaad could transform into a Black Slaad.</p>';
        $helper->saveMonster($monster, ['Slaad', 'Outer Planes', 'Chaotic', 'Outsider', 'Neutral'], [
            'stats'  => [22, 18, 20, 18, 16, 8, 14, 6],
            'skills' => [
                'Arcana'     => ['dc' => 10],
                'Perception' => ['dc' => 10],
            ],
            'feats'    => ['Blindsight'],
            'features' => [
                'darkvision'    => ['meta' => '{"range":60}'],
                'regeneration'  => ['meta' => '10.'],
                'vulnerability' => ['meta' => 'Axiomatic, Adamantine, Mithral'],
                'resistance'    => ['meta' => 'Acid, Cold, Electricity, Fire, Sonic'],
                'magic_resistance',
            ],
            'languages' => ['Slaad', 'Telepathy' => ['meta' => '60 ft']],
            'spells'    => [
                'Detect Magic'   => ['level' => 0, 'meta' => 'One of known sorcerer spells'],
                'Mage Hand'      => ['level' => 0, 'meta' => 'One of known sorcerer spells'],
                'Fear'           => ['level' => 1, 'meta' => 'One of known sorcerer spells'],
                'Invisibility'   => ['level' => 2, 'meta' => 'One of known sorcerer spells'],
                'Fireball'       => ['level' => 3, 'meta' => 'One of known sorcerer spells'],
                'Fly'            => ['level' => 3, 'meta' => 'One of known sorcerer spells'],
                'Tongues'        => ['level' => 3, 'meta' => 'One of known sorcerer spells'],
                'Plane Shift'    => ['meta' => '2/day. Self only'],
                'Cloudkill'      => ['meta' => '2/day.'],
                'Dispel Law'     => ['meta' => '3/day.'],
                'Major Image'    => ['meta' => 'At will.'],
                'Polymorph'      => ['meta' => 'At will. Self only'],
                'Cloak of Chaos' => ['meta' => 'At will. Self only'],
                'Misty Step'     => ['meta' => 'At will, every 3 rounds.'],
            ],
            'classes' => [
                'Sorcerer' => ['level' => 14],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Black Slaad';
        $monster->size             = 'Medium';
        $monster->type             = 'Slaad';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '17';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 20;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 11 (1D8 +7) Piercing damage.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 12 (1D10 +7) Slashing damage Plus 14 (4D6) Acid damage.</dd>
    <dt>Greatsword</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 12 (2D6 +7) Slashing damage.</dd>
</dl>';
        $monster->description = '<p>Black Slaadi, also known as Void Slaads, are a rare and powerful variety of Slaad with unparalleled powers of entropy.</p>
<p>Black Slaadi are inherently different to other Slaadi; rather than being batrachian monsters with actual bodies, Black Slaads are simply voids, areas of insubstantial darkness in the shape of humanoid toads. Their prehensile tongues are 15 ft long and their eyes are akin to gleaming stars that shimmered with malice.</p>
<p>Though typically chaotic neutral like most Slaadi, Black Slaadi have a tendency towards evil behavior, possibly as a result of their origins.</p>';
        $helper->saveMonster($monster, ['Slaad', 'Outer Planes', 'Chaotic', 'Outsider', 'Neutral'], [
            'stats'  => [24, 24, 24, 18, 16, 8, 18, 7],
            'skills' => [
                'Arcana'     => ['dc' => 10],
                'Perception' => ['dc' => 10],
                'Stealth'    => ['dc' => 12],
            ],
            'feats'    => ['Blindsight'],
            'features' => [
                'darkvision'    => ['meta' => '{"range":120}'],
                'regeneration'  => ['meta' => '10.'],
                'vulnerability' => ['meta' => 'Axiomatic, Adamantine, Mithral'],
                'resistance'    => ['meta' => 'Acid, Cold, Electricity, Fire, Sonic'],
                'death_effect'  => ['meta' => 'When a Black Slaad dies, it becomes an uncontrolled Sphere of Annihilation.'],
                'magic_resistance',
            ],
            'languages' => ['Slaad', 'Telepathy' => ['meta' => '60 ft']],
            'spells'    => [
                'Detect Magic'   => ['level' => 0, 'meta' => 'One of known sorcerer spells'],
                'Mage Hand'      => ['level' => 0, 'meta' => 'One of known sorcerer spells'],
                'Fear'           => ['level' => 1, 'meta' => 'One of known sorcerer spells'],
                'Invisibility'   => ['level' => 2, 'meta' => 'One of known sorcerer spells'],
                'Fireball'       => ['level' => 3, 'meta' => 'One of known sorcerer spells'],
                'Fly'            => ['level' => 3, 'meta' => 'One of known sorcerer spells'],
                'Tongues'        => ['level' => 3, 'meta' => 'One of known sorcerer spells'],
                'Plane Shift'    => ['meta' => '2/day. Self only'],
                'Cloudkill'      => ['meta' => '2/day.'],
                'Dispel Law'     => ['meta' => '3/day.'],
                'Major Image'    => ['meta' => 'At will.'],
                'Polymorph'      => ['meta' => 'At will. Self only'],
                'Cloak of Chaos' => ['meta' => 'At will. Self only'],
                'Misty Step'     => ['meta' => 'At will, every 3 rounds.'],
                'True Seeing'    => ['meta' => 'At will.'],
            ],
            'classes' => [
                'Sorcerer' => ['level' => 17],
                'Cleric'   => ['level' => 6],
            ],
        ]);
    }
}
