<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersDSeeder extends Seeder
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
        $monster->name             = 'Darkenbeast';
        $monster->size             = 'Medium';
        $monster->type             = 'Monstrosity';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 5;
        $monster->speed            = '5 ft / Fly 40 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, +8 to hit, 5 ft range, one target. 1D4+3 Slashing Damage</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, +8 to hit, 5 ft range, one target. 1D6+3 Piercing Damage</dd>
    <dd>Spell Imprinting</dd> <dd>When a Darkenbeast is created, the creator can imprint a spell onto the Darkenbeast. As a Triple Action, the creator can have the spell be cast as if the Darkenbeast had cast it. After the Imprinted Spell is cast, the Darkenbeast dies and reverts to its original form.</dd>
</dl>';
        $helper->saveMonster($monster, ['Monstrosity'], [
            'stats'     => [16, 15, 16, 5, 11, 4, 4, 3],
            'skills'    => [
                'Perception' => ['dc' => 2],
                'Stealth'    => ['dc' => 4],
            ],
            'feats'     => ['Improved Initiative', 'Great Fortitude'],
            'features'  => [
                'immunity'     => ['meta' => 'Charm'],
                'multi_attack' => ['meta' => 'If the Darkenbeast makes a successful Claw attack, it gets an additional Action. This additional Action can only be used to make a Bite Attack.'],
            ],
            'vulnerability' => ['meta' => "Light. When exposed to Sunlight, or any spell with the Light type of 3rd level or higher, the Darkenbeast reverts back to it's original form"],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Deepspawn';
        $monster->size             = 'Huge';
        $monster->type             = 'Aberration';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 12;
        $monster->speed            = '20 ft / Swim 20 ft';
        $monster->actions          = "<dl>
    <dt>Arm Tentacle</dt> <dd>The deepspawn has 3 \"arm\" tentacles which will usually wield a Simple Weapon of Medium size. Melee Weapon Attack +13. 20 ft reach. One target. Damage as weapon </dd>
    <dt>Maw Tentacle</dt> <dd>
        <p>The deepspawn has 3 \"maw\" tentacles which can attack in the following ways.</p>
        <dl>
            <dt>Bite</dt> <dd>Melee Weapon Attack, 20 ft, one target. (2D6 +9) Piercing</dd>
            <dt>Grapple</dt> <dd>Melee Weapon Attack, 20 ft, one target. The deepspawn may Grapple with its maw. Because it has Improved Grapple, it does not suffer Attacks of Opportunity when it starts a Grapple. Once a target is Grappled, the same tentacle may constrict the Grappled target for (1D6 +9) Bludgeoning damage (automatic hit).</dd>
        </dl>
    </dd>
    <dt>Spawn</dt> <dd>A deepspawn can spawn creatures that it has completely consumed. 3 months after consuming a creature, a deepspawn may create a creature that resembles the consumed creature. The spawned creature does not have any special abilities (such as a Displacer Beasts displacement ability), but they retain all physical abilities (such as flight due to wings, or a spider's ability to spin silk). These spawns are not intelligent and are completely under the deepspawns mental control (it costs the Deepspawn 10 Power Points per day each). A deepspawn may have no more than 3 spawns at one time (as their psionic abilities are not able to control more). These spawns require nourishment, although the deepspawn can reabsorb any spawn to feed itself when prey is scarce. The largest creature that a deepspawn has created is an ettin.</dd>
</dl>";
        $monster->description = "<p>The deepspawn is a horror of the Underdark - a subterranean monstrosity that routinely spawns many other varieties of monsters. A single deepspawn can make a vast area dangerous even for alert, well-armed adventurers.</p>
<p>A deepspawn appears to be a rough, rubbery sphere about 15 feet in diameter. Its hide is mottled with purple and brown, and it has six large, strong tentacles up to 20 feet long. Three of these arms are dexterous enough to wield weapons favored by humanoids, and the other three end in toothy jaws. Dozens of long, retractable eyestalks cover the creature's body. A deepspawn weighs about 28,000 pounds.</p>";
        $helper->saveMonster($monster, ['Aberration'], [
            'stats'  => [29, 13, 24, 17, 16, 10, 12, 4],
            'skills' => [
                'Crafting'   => ['dc' => 20, 'meta' => 'Trapmaking'],
                'Perception' => ['dc' => 20],
                'Survival'   => ['dc' => 7, 'meta' => 'Underdark only'],
                'Stealth'    => ['dc' => 10],
            ],
            'feats' => [
                'Cleave', 'Improved Bull Rush', 'Power Attack', 'Multi Attacker', 'Improved Multi Attacker',
            ],
            'features' => [
                'darkvision'   => ['meta' => '{"range":60}'],
                'immunity'     => ['meta' => 'Poison'],
                'multi_attack' => ['meta' => 'A deepspawn gets 3 additional Actions. These additional Actions may only be used to attack with their tentacles.'],
                'power_points' => ['meta' => '35'],
            ],
            'powers' => [
                'Mind Probe', 'Wisdom Defense', 'Charisma Defense', 'Strength Blast',
            ],
            'languages' => ['Aquan', 'Auld Wyrmish', 'Jotun', 'Telepathy' => ['meta' => '90 radius']],
        ]);

        $this->call(DemonsSeeder::class);

        $monster                   = new Monster;
        $monster->name             = 'Farastu';
        $monster->size             = 'Medium';
        $monster->type             = 'Demodand';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '14 (Natural Armor)';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 17;
        $monster->speed            = '40 ft / Climb 40 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D10 + 5 Slashing Damage. If the target is Medium or smaller, the target is Grappled automatically.</dd>
    <dd>Bite</dd> <dd>Melee Weapon Attack (with Advantage if the target is Grappled), reach 5 ft, one target. 2D6 + 5 Piercing Damage plus 6D6 Acid Damage.</dd>
    <dt>Tar</dt> <dd>Farastus are always oozing a tar-like substance from their bodies. Contact with this tar causes the touching object to stick to the farastu. A creature can break free with a DC 15 Escape check made with Disadvantage. The farastu can also exude another chemical that negates the tar as an Action.</dd>
    <dt>Slick</dt> <dd>As an Action, the farastu can exude a chemical that cancels the tar. This can also be used to escape from any sticky based trap or offer a +10 bonus to Escape Checks.</dd>
</dl>';
        $monster->description      = '<p>Farastus (pronounced: far-AS-too), also known as tarry demodands or tarry leths are the lowest-ranking of the demodands. They get their namesake from the tar-like substance they exude from their unsightly forms and are despised by the other denizens of Tarterus.</p>
<p>Farastus are the most slender of the demodands, standing 7ft tall and weighing somewhere between 220 and 420 pounds. Their bodies are badly emaciated with elongated limbs, and long-nailed hands. Their large, oblong heads hosts massive jaws laden with teeth. A black, viscous, tar-like substance coats their grotesque frames, constantly oozing and trickling to the ground.</p>
<p>Farastus are hateful creatures made angry and vengeful by their low position in demodand society. Despite knowing their purpose from the beginning of their existence, their lack of power leaves them incapable of fulfilling it, leaving them full of resentment. Higher-ranking demodands persecute the farastu and so when unsupervised, they, in turn, bully entities weaker than themselves. Their cruelty and malevolence are allowed to fully manifest when not being watched by their superiors and escape attempts by their wards are seen as enjoyable opportunities to express their rage.</p>
<p>They are especially favorable to being summoned, as they are trapped in their home plane of Carceri.</p>';
        $helper->saveMonster($monster, ['Demodand', 'Fiend', 'Outer Planes', 'Evil', 'Neutral', 'Outsider'], [
            'stats'     => [20, 13, 16, 8, 12, 16, 11, 5],
            'skills'    => [
                'Perception' => ['dc' => 9],
                'Stealth'    => ['dc' => 5],
                'Survival'   => ['dc' => 5],
            ],
            'features'  => [
                'spider_climb',
                'darkvision'   => ['meta' => '{"range":120}'],
                'immunity'     => ['meta' => 'Acid, Poison, Paralyzed, Restrained'],
                'resistance'   => ['meta' => 'Cold, Fire'],
                'multi_attack' => ['meta' => 'The Farastu gains an additional Action. This additional Action can only be used to make Bite Attacks'],
            ],
            'spells'    => [
                'Invisibility' => ['meta' => 'At will. Self only'],
                'Fog Cloud'    => ['meta' => '1/day'],
                'Dispel Magic' => ['meta' => '1/day'],
            ],
            'languages' => ['Abyssal', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Kelubar';
        $monster->size             = 'Medium';
        $monster->type             = 'Demodand';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '15 (Natural Armor)';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 19;
        $monster->speed            = '30 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dd>Bite</dd> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D10 + 6 Piercing Damage plus 4D8 Acid Damage.</dd>
    <dt>Spit Acid</dt> <dd>60 ft x 5 ft line. All creatures in the Area makes a DC 17 DEX Save. Failure take 6D8 Acid Damage or Half on Success.</dd>
    <dt>Acidic Secretion</dt> <dd>A creature that touches the kelubar or hits it with a melee attack while within 5 ft of it takes 2D4 Acid Damage.</dd>
    <dt>Nauseating Fog (Recharge 6)</dt> <dd>As an Action, the kelubar magically creates a cloud of greenish fog that fills a 20-ft radius sphere centered on a point up to 120 ft of itself. The cloud remains for 1 minute or until the kelubar uses this Action again. The cloud is obscuring and Difficult Terrain. Any creature that starts its turn in the cloud or enters the cloud for the first time on a turn must make a DC 17 CON Save or be Sickened: 1.</dd>
    <dt>Slick</dt> <dd>As an Action, the kelubar can exude a chemical that can be used to escape from any sticky based trap or offer a +10 bonus to Escape Checks.</dd>
</dl>';
        $monster->description      = '<p>Kelubars (pronounced: KEL-yoo-barz) also known as slime demodands or slime leths are the middle class of the demodands. Their nickname is in reference to the acidic ooze they exuded from their grotesquely overweight bodies.</p>
<p>Kelubars are said to be a combination of farastu and shator, standing between 6.5‒8 ft tall and weighing 490 to 500 pounds. They are incredibly broad humanoids with a thickset lower body, wide limbs and huge hands. Their large, oval-like heads are of greater width than length and their bat-like wings spanned nearly 18 ft. Their ebon flesh is knobby and leathery, made even more unsightly by the noxious, pale green slime they secret. Their ooze coating causes their already unsightly skin to glisten an even more hideous hue.</p>
<p>Kelubars are sedentary beings that preferred to parley rather than fight, although they have no qualms about engaging in violence. They are bullies that enjoy bending others to their will, with foul personalities to match their repulsive stench. When away from Carceri, kelubars are normally unconcerned with destruction and domination, preferring to bring further ruin to the already miserable Red Prison than to the Material Plane. Instead, kelubars collect as many small, magical items as possible in order to raise their power, and thus their status amongst their peers, before being sent back to Carceri.</p>
<p>Kelubars are the intermediaries of the demodands, responsible for overseeing farastu squadrons, normally composed of 6-10 individuals, under orders from the shators. Although such forces will casually attack mortals the main purpose of the kelubars within gehreleth society is to eliminate the fiendish forces trespassing in the Red Prison, especially yugoloths.</p>';
        $helper->saveMonster($monster, ['Demodand', 'Fiend', 'Outer Planes', 'Evil', 'Neutral', 'Outsider'], [
            'stats'     => [22, 13, 18, 14, 15, 18, 13, 6],
            'skills'    => [
                'Perception' => ['dc' => 7],
            ],
            'features'  => [
                'darkvision'   => ['meta' => '{"range":120}'],
                'immunity'     => ['meta' => 'Acid, Poison, Paralyzed, Restrained'],
                'resistance'   => ['meta' => 'Cold, Fire'],
                'multi_attack' => ['meta' => 'The Farastu gains an additional Action. This additional Action can only be used to make Bite Attacks'],
            ],
            'spells'    => [
                'Invisibility' => ['meta' => 'At will. Self only'],
                'Dispel Magic' => ['meta' => '1/day'],
                'Scrying'      => ['meta' => '1/day'],
            ],
            'languages' => ['Abyssal', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Shator';
        $monster->size             = 'Large';
        $monster->type             = 'Demodand';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '16 (Natural Armor)';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 21;
        $monster->speed            = '30 ft / Fly 60 ft';
        $monster->actions          = "<dl>
    <dd>Bite</dd> <dd>Melee Weapon Attack, reach 5 ft, one target. 3D6 + 7 Piercing Damage plus 4D12 Acid Damage. If the target is a creature, it must make a DC 16 CON Save or be Paralyzed until the start of the shator's next turn.</dd>
    <dt>Trident</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 2D10 + 7 Negative Damage.</dd>
    <dt>Numbing Secretion</dt> <dd>A creature that touches the shator or hits it with a Melee Attack while within 5 feet of it must make a DC 18 DEX Save or have Disadvantage on Attack Rolls and its Speed halved until the end of its next turn.</dd>
    <dt>Inhibitory Spray (Recharge 6)</dt> <dd>As an Action, the shator exhales a spray of slime in a line 100 feet long and 5 feet wide. Each creature in that area must make a DC 16 DEX Save. On a Failed Save, a creature takes 9d8 Acid Damage and Paralyzed for 1 minute. The creature repeats the Save at the end of each of its turns, ending the effect on itself on a Success. On a successful Save, a creature takes half as much damage only.</dd>
    <dt>Slick</dt> <dd>As an Action, the kelubar can exude a chemical that can be used to escape from any sticky based trap or offer a +10 bonus to Escape Checks.</dd>
    <dt>Liquefaction Ritual</dt> <dd>The shator can perform a 1-minute ritual that turns all willing farastus and kelubars of its choice within 60 feet of itself into a living liquid form. Each liquefied demodand becomes enough liquid to fill a flask. A demodand's liquefaction lasts until a shator uses an Action to end it or a creature opens a container holding the liquid. While liquefied in this way, a demodand Paralyzed despite any immunity to that condition, it has immunity to all damage, and any curse affecting it is suspended.</dd>
</dl>";
        $monster->description      = '<p>Shators (pronounced: SHAY-torz) also known as shaggy demodands or shaggy leths are the highest-ranking of the demodands. They are the most powerful of the gehreleths, spreaders of nihilistic futility seemingly covered in loosely hanging skins</p>
<p>Shators are the heaviest and widest of the demodands, standing between 6‒10 ft tall and weighing somewhere between 560 and 700 pounds. They are squat, obese humanoids with large heads, huge bat-like wings, and a pale ooze dripping from their disgusting forms. Their massive maws resemble those of a bulldog or a fanged frog, and drooled a similar slime to that exuded by their bodies from the corners. Their common name is actually a misnomer rooted in the fact that the hairless shaggy demodands are draped in overlapping hides.</p>
<p>Shators are fearsome entities with great intellects that project an almost palpable air of self-confidence. They possess shocking levels of cruelty and are incredibly suspicious of each other, only working together against a dangerous, common enemy. Like the farastu, they are slow to react and secretly desire escape from Carcerian petitioners, but they want potential escapees to succeed so that they can send bounty hunters to bring them back.</p>
<p>Shators are morbid beings that take comfort in malaise and delighted in spreading angst, corrupting the cultures of others rather than developing their own. Often times, they find mortal poets and philosophers to use as unwitting mouthpieces for their ideas, inducing visions of poetic despair and granting them texts about cosmicism, futility, and the bleak senselessness of the multiverse. Shators preferred their victims to be compelling enough to present their miserable ideas favorably and make sure that their summoner will not try to banish them, leaving only on their own terms and slaying their unsuspecting servitors when they did. Their other works are guides on summoning various fiends aside from demodands, normally named beings, particularly yugoloths, that have drawn the ire of the shator.</p>
<p>Bizarrely, shators on other planes treat the three-headed chimera like most humans would treat kittens, reserving their ordinary sadism and occasionally showing concern for them.</p>
<p>As the nobility and commanders of their kind, shators are responsible for making the important decisions for the demodand race. Much of their time is spent scheming against the other factions of Carceri and deciding whether to send gehreleth bounty hunters after escaped petitioners. Although normally found with their lackeys nearby, their capricious nature leads them to organize their troops only when pressed.</p>
<p>They are known to make lairs within the tunnel systems of Colothys.</p>';
        $helper->saveMonster($monster, ['Demodand', 'Fiend', 'Outer Planes', 'Evil', 'Neutral', 'Outsider'], [
            'stats'     => [24, 15, 17, 21, 16, 20, 16, 7],
            'skills'    => [
                'Perception' => ['dc' => 13],
                'Stealth'    => ['dc' => 7],
            ],
            'features'  => [
                'darkvision'   => ['meta' => '{"range":120}'],
                'immunity'     => ['meta' => 'Acid, Charmed, Frightened, Poison, Paralyzed, Restrained'],
                'resistance'   => ['meta' => 'Cold, Fire'],
                'multi_attack' => ['meta' => 'The Farastu gains an additional Action. This additional Action can only be used to make Bite Attacks'],
            ],
            'spells'    => [
                'Invisibility' => ['meta' => 'At will. Self only'],
                'Suggestion'   => ['meta' => 'At will'],
                'Dispel Magic' => ['meta' => '1/day'],
                'Scrying'      => ['meta' => '1/day'],
                'Plane Shift'  => ['meta' => '1/day. To Carceri only'],
                'Imprisonment' => ['meta' => '1/day. Chaining effect only DC 18'],
            ],
            'languages' => ['Abyssal', 'Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $this->call(DevilsSeeder::class);
        $this->call(DragonsSeeder::class);
    }
}
