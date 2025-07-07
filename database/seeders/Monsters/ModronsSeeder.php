<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ModronsSeeder extends Seeder
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
        $monster->name             = 'Monodrone';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 1;
        $monster->speed            = '30 ft / Fly 30 ft';
        $monster->actions          = '<dl>
    <dt>Dagger</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2 (1D4) Piercing.</dd>
    <dt>Javelin</dt> <dd>Melee or Ranged Weapon Attack, reach 30/120 ft, one target. 3 (1D6) Piercing.</dd>
</dl>';
        $monster->description = '<p>Monodrones are simple spherical constructs with two mechanical arms and two legs. They have a single eye and rudimentary (but functional) wings. They also do not require any food, and draw sustenance from the air around them.</p>
<p>As barely intelligent creatures, they were capable of only one task at a time. They can communicate, but were only capable of delivering a single message consisting of no more than 48 words.</p>
<p>Like all modrons, monodrones have an absolute sense of hierarchy and order, and can not be persuaded to disobey their instructions or betray their purpose in any way.</p>
<p>It is possible, however, for a defective monodrone to go rogue and start acting in its own interests or no longer in accordance with its instructions, sometimes even becoming violent. Such rogues are relentlessly hunted by other modrons, although, unlike their properly operating fellows, they can be reasoned with.</p>
<p>Monodrones are capable of wielding weapons and are competent combatants, although, due to their single-task nature, they are only capable of performing one attack at a time. If destroyed, a monodrone disintegrates completely into dust.</p>
<p>Monodrones can only communicate with other monodrones or with duodrones. They are incapable of comprehending more advanced modrons.</p>
<p>As the base of modron hierarchy, monodrones are created directly by Primus in the Great Modron Cathedral in the plane of Mechanus. They are the source for all other modrons, filling the upper ranks by successive promotions when their superiors are destroyed or otherwise promoted.</p>
<p>There are approximately three hundred million monodrones in modron society.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'    => [10, 13, 12, 4, 10, 5, .125, 2],
            'features' => [
                'axiomatic_mind',
                'vulnerability' => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'    => ['meta' => 'Acid, Cold, Fire'],
                'immunity'      => ['meta' => 'Fear, Negative, Positive, Charm'],
                'slowed'        => ['meta' => 'A monodrone cannot make use more than one Action a turn to make an Attack'],
            ],
            'spells' => [
                'True Seeing' => ['meta' => 'At will'],
            ],
            'languages' => ['Modron'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Duodrone';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 2;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Fist</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2 (1D4) Bludgeoning.</dd>
    <dt>Javelin</dt> <dd>Melee or Ranged Weapon Attack, reach 30/120 ft, one target. 3 (1D6) Piercing.</dd>
</dl>';
        $monster->description = '<p>Duodrones are block-shaped with two spindly arms, two spindly legs, a small set of wings, a central eye, and a large mouth.</p>
<p>Like all modrons, duodrones have an absolute sense of hierarchy and order, and can not be persuaded to disobey their instructions or betray their purpose in any way.</p>
<p>It is possible, however, for a defective duodrone to go rogue and start acting in its own interests or no longer in accordance with its instructions, sometimes even becoming violent. Such rogues are relentlessly hunted by other modrons, although, unlike their properly operating fellows, they can be reasoned with.</p>
<p>If ordered to attack, duodrones will continue fighting until they or their enemy is destroyed. Duodrones are capable of wielding weapons and are competent combatants, capable of performing two attacks at a time. If destroyed, a duodrone disintegrates completely into dust, and a monodrone is instantly upgraded into a duodrone to fill its position. If victorious, unlike a monodrone, a duodrone can then decide whether or not to pursue additional combatants.</p>
<p>Duodrones are capable of two tasks at a time. Unlike the more limited monodrones, they are fully capable of communicating in their own language of clicks and whirs.</p>
<p>Duodrones can communicate with other duodrones and with monodrones and tridrones. They are incapable of comprehending more advanced modrons.</p>
<p>In modron society, duodrones are responsible for supervising units of monodrones. They are always created as the result of upgraded monodrones to take the place of destroyed units. They follow their orders given to them by the tridones. Typically, though they can perform two tasks at once, they are only given one, so that it would have the ability to react to an unforeseen circumstance.</p>
<p>In the modron army, duodrones serve as corporals, sergeants, or special shock troops, often leading squads of exactly twelve monodrones.</p>
<p>It is estimated that there are over 55 million modrons in the duodrone caste.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'    => [11, 13, 12, 6, 10, 7, .25, 2],
            'features' => [
                'axiomatic_mind',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'    => ['meta' => 'Acid, Cold, Fire'],
                'immunity'      => ['meta' => 'Fear, Negative, Positive'],
            ],
            'spells' => [
                'True Seeing' => ['meta' => 'At will'],
            ],
            'languages' => ['Modron'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Tridrone';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '30 ft / Fly 30 ft';
        $monster->actions          = '<dl>
    <dt>Fist</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 3 (1D4 +1) Bludgeoning.</dd>
    <dt>Shortbow</dt> <dd>Melee or Ranged Weapon Attack, reach 30/120 ft, one target. 4 (1D6 +1) Piercing.</dd>
</dl>';
        $monster->description = '<p>Tridrones are shaped like inverted tetrahedrons and are capable of performing three tasks at a time.</p>
<p>Like all modrons, tridrones have an absolute sense of hierarchy and order, and can not be persuaded to disobey their instructions or betray their purpose in any way.</p>
<p>It is possible, however, for a defective tridrone to go rogue and start acting in its own interests or no longer in accordance with its instructions, sometimes even becoming violent. Such rogues are relentlessly hunted by other modrons, although, unlike their properly operating fellows, they can be reasoned with.</p>
<p>Tridrones are capable of wielding weapons and are competent combatants. If destroyed, a tridrone disintegrates completely into dust and a duodrone is instantly upgraded into a tridrone to fill its position. One of the weapons most commonly wielded by them are javelins, which they can hurl at their foes before closing.</p>
<p>Tridrones can communicate with other tridrones and with duodrones and quadrones. They are incapable of communicating directly with monodrones and can not comprehend the more advanced pentadrones.</p>
<p>In modron society, tridrones are responsible for leading groups of lesser modrons into battle. They are always created as the result of upgraded duodrones to take the place of destroyed units.</p>
<p>There are about six million tridrones in modron society.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'     => [12, 13, 12, 9, 10, 9, .5, 2],
            'features'  => [
                'axiomatic_mind',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'    => ['meta' => 'Acid, Cold, Fire'],
                'immunity'      => ['meta' => 'Fear, Negative, Positive'],
            ],
            'feats'     => ['Extra Melee Action'],
            'spells'    => [
                'True Seeing' => ['meta' => 'At will'],
            ],
            'languages' => ['Modron'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Quadrone';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '30 ft / Fly 30 ft';
        $monster->actions          = '<dl>
    <dt>Fist</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 3 (1D4 +1) Bludgeoning.</dd>
    <dt>Shortbow</dt> <dd>Melee or Ranged Weapon Attack, reach 30/120 ft, one target. 4 (1D6 +1) Piercing.</dd>
</dl>';
        $monster->description = '<p>Quadrones are cube-shaped and winged. Though some older versions are known to have a second set of arms in place of wings.</p>
<p>Like all modrons, quadrones have an absolute sense of hierarchy and order, and can not be persuaded to disobey their instructions or betray their purpose in any way.</p>
<p>It is possible, however, for a defective quadrone to go rogue and start acting in its own interests or no longer in accordance with its instructions, sometimes even becoming violent. Such rogues are relentlessly hunted by other modrons, although, unlike their properly operating fellows, they can be reasoned with.</p>
<p>Unlike tridones and other lower ranked modrons, these creatures have four complete functions and thus are capable of performing four simultaneous tasks at a time. These functions typically included being able to report actions as well as observations, devise plans, react to situations that are unexpected, and act in accordance to solve those situations.</p>
<p>Quadrones are capable of wielding weapons and are exceptionally proficient with bows. If destroyed, a quadrone disintegrated completely into dust and a tridrone is instantly upgraded into a quadrone to fill its position.</p>
<p>Quadrones can communicate with other quadrones and with tridrones and pentadrones. They are incapable of communicating directly with lesser modrons and can not comprehend any of the hierarch modrons, such as decatons.</p>
<p>In modron society, they are responsible for supervising other groups of modrons, as well as performing services as multifunctional laborers. During battles, they often serve the role of a field officer. They are always created as the result of tridrones being upgraded to take the place of destroyed or further upgraded units.</p>
<p>There are approximately one and a half million quadrones in modron society at any time. During battles, a regiment will typically feature a dozen of the best quadrones available.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'    => [12, 14, 12, 10, 10, 11, 1, 2],
            'features' => [
                'axiomatic_mind',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'    => ['meta' => 'Acid, Cold, Fire'],
                'immunity'      => ['meta' => 'Fear, Negative, Positive'],
                'multi_attack'  => ['meta' => 'A quadrone gains an additional Action. This additional Action can only be used to make a Ranged Weapon attack with a Bow.'],
            ],
            'feats'  => [
                'Rapid Shot',
                'Extra Melee Action',
                'Extra Ranged Action',
            ],
            'spells' => [
                'True Seeing' => ['meta' => 'At will'],
            ],
            'languages' => ['Celestial', 'Modron'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Pentadrone';
        $monster->size             = 'Large';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 5;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Arm</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 5 (1D6 + 2) Bludgeoning.</dd>
    <dt>Electrical Discharge</dt> <dd>Ranged Attack, 120 ft. 1D6 +2 Electricity Damage</dd>
    <dt>Paralysis Gas (Recharge 5-6)</dt> <dd>The pentadrone exhales a 30-foot cone of gas. Each creature in that area must succeed on a DC 11 CON Save or be Paralyzed for 1 minute. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</dd>
</dl>';
        $monster->description = '<p>Pentadrones are shaped like a five-pointed clockwork starfish with one eye on each appendage, on top of five strong mechanical legs, and a tube protruding from the center of the star. They are capable of performing five simultaneous tasks at a time.</p>
<p>Like all modrons, pentadrones have an absolute sense of hierarchy and order, and can not be persuaded to disobey their instructions or betray their purpose in any way.</p>
<p>It is possible, however, for a defective pentadrone to go rogue and start acting in its own interests or no longer in accordance with its instructions, sometimes even becoming violent. Such rogues are relentlessly hunted by other modrons, although, unlike their properly operating fellows, they can be reasoned with.</p>
<p>The bodies of pentadrones are capable of functioning in severe temperatures, ranging from 210 F to −100 F.</p>
<p>Instead of using weapons like other modrons, pentadrones favored unarmed combat. They are capable of performing five attacks at a time. They also possess a breath weapon in the form of a paralyzing gas. If destroyed, a pentadrone disintegrates completely into dust and a quadrone is instantly upgraded into a pentadrone to fill its position.</p>
<p>Pentadrones can communicate with other pentadrones and with quadrones. They are also capable of communicating with decatons, but were incapable of communicating directly with lesser modrons and could not comprehend any of the more advanced hierarch modrons, such as nonatons.</p>
<p>In modron society, pentadrones are responsible for law enforcement. They are always created as the result of quadrones being upgraded to take the place of destroyed or further upgraded units.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'    => [15, 14, 12, 10, 10, 13, 2, 3],
            'features' => [
                'axiomatic_mind',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'    => ['meta' => 'Acid, Cold, Fire'],
                'immunity'      => ['meta' => 'Fear, Negative, Positive'],
                'multi_attack'  => ['meta' => 'A pentadrone may use an Action to make 2 Slam Attacks or 2 Electrical Discharge Attacks. The pentadrone may do this up to 2 times per turn'],
            ],
            'spells' => [
                'True Seeing' => ['meta' => 'At will'],
            ],
            'languages' => ['Modron'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Decaton';
        $monster->size             = 'Large';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 10;
        $monster->speed            = '30 ft / Fly 10 ft (hover)';
        $monster->actions          = '<dl>
    <dt>Tentacle</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 5 (1D8 +1) Bludgeoning.</dd>
</dl>';
        $monster->description = '<p>Decatons are shaped like spheres atop stubby legs, with ten tentacles and four eyes evenly spaced around the sphere. At the top of the sphere is a mouth.</p>
<p>Like all hierarch modrons, decatons have the innate ability to duplicate the effects of clairaudience, clairvoyance, command, dimension door, teleport without error, and wall of force spells at will. Additionally, they are able to cure injuries and cure diseases from all modrons within 144 ft and 12 ft, respectively. They can also heal and remove paralysis by physically touching another modron.</p>
<p>They can communicate telepathically with anyone in a 44 miles radius. and can see in complete darkness from up to 44 feet away.</p>
<p>Decatons are able to fly by generating a lifting gas that allowed it to be lighter than the surrounding air. They typically only did so whenever they are commanding large numbers of base modrons and needed to get an overview of their situation.</p>
<p>If forced into combat, a decaton uses its tentacles in melee combat. They also heavily rely on their spellcasting abilities.</p>
<p>There are only 100 decatons in modron society. They can communicate with other decatons and with nonatons, and relay their orders to pentadrones. One decaton is in charge of each of the 64 sectors of their realm in Mechanus, and the remaining 36 decatons serve in the modron armies. They function as caretakers of the modrons under their command, looking after their physical welfare.</p>
<p>Decatons are always created as the result of pentadrones being upgraded to take the place of destroyed or further promoted decatons.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'    => [13, 15, 15, 14, 14, 14, 8, 5],
            'features' => [
                'axiomatic_mind',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'    => ['meta' => 'Acid, Cold, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Fear, Negative, Positive'],
                'multi_attack'  => ['meta' => 'A decaton may use an Action to make 2 Tentacle attacks'],
            ],
            'feats'  => ['Improved Darkvision'],
            'spells' => [
                'True Seeing'      => ['meta' => 'At will'],
                'Clairvoyance'     => ['meta' => 'At will'],
                'Command'          => ['meta' => 'At will'],
                'Dimension Door'   => ['meta' => 'At will'],
                'Teleport'         => ['meta' => 'At will, Heightened +3'],
                'Wall of Force'    => ['meta' => 'At will'],
                'Cure Wounds'      => ['meta' => 'At will, modrons only (self only 3/day)'],
                'Remove Disease'   => ['meta' => '3/day'],
                'Remove Paralysis' => ['meta' => '3/day'],
            ],
            'languages' => ['Celestial', 'Infernal', 'Modron', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Nonaton';
        $monster->size             = 'Large';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 8;
        $monster->speed            = '50 ft';
        $monster->actions          = '<dl>
    <dt>Tentacle</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 4 (1D6 +1) Bludgeoning.</dd>
</dl>';
        $monster->description = '<p>A nonatons body is shaped like a cylinder. A ring of nine tentacles circled its midriff, an equal distance from one another. Two stout legs provided locomotion. On each side of the upper part of its body, it has two eyes and mouths on opposite sides.</p>
<p>If forced into combat, a nonaton uses a combination of psionics, spells and their tentacles.</p>
<p>There are exactly 81 nonatons in modron society. They act as captains and chief inspectors of the pentadrone police force. One serves each sector, nine serve the tertians, and the remaining eight report directly to Primus himself. Each nonaton has twelve pentadrone lieutenants, each of them command twelve quadrone sergeants, who in turn each commanded twelve tridrones.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'    => [15, 16, 12, 13, 13, 15, 4, 4],
            'features' => [
                'axiomatic_mind',
                'darkvision'          => ['meta' => '120 ft'],
                'vulnerability'       => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'          => ['meta' => 'Acid, Cold, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Fear, Negative, Positive'],
                'multi_attack'        => ['meta' => 'A nonaton may use an Action to make 3 Tentacle Attacks up to 2 times per turn'],
                'innate_spellcasting' => ['meta' => 'INT DC 12'],
            ],
            'skills' => [
                'Arcana'        => ['dc' => 9],
                'Concentration' => ['dc' => 12],
                'Diplomacy'     => ['dc' => 15],
                'Insight'       => ['dc' => 10],
                'Perception'    => ['dc' => 9, 'meta' => 'All around vision'],
                'Society'       => ['dc' => 13],
                'Stealth'       => ['dc' => 8],
                'Survival'      => ['dc' => 9],
            ],
            'spells' => [
                'True Seeing'      => ['meta' => 'At will'],
                'Clairvoyance'     => ['meta' => 'At will'],
                'Command'          => ['meta' => 'At will'],
                'Dimension Door'   => ['meta' => 'At will'],
                'Teleport'         => ['meta' => 'At will, Heightened +3'],
                'Wall of Force'    => ['meta' => 'At will'],
                'Cure Wounds'      => ['meta' => '3/day, Heightened +4'],
                'Remove Disease'   => ['meta' => '3/day'],
                'Remove Paralysis' => ['meta' => '3/day'],
                'Power Word Stun'  => ['meta' => '1/day'],
            ],
            'classes' => [
                'Psion' => ['level' => 3, 'meta' => 'Telepathy discipline'],
            ],
            'languages' => ['Celestial', 'Infernal', 'Modron', 'Telepathy' => ['meta' => '300 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Octon';
        $monster->size             = 'Large';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 2;
        $monster->speed            = '30 ft / Fly 30 ft';
        $monster->actions          = '<dl>
    <dt>Tentacle</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 6 (1D6 +3) Bludgeoning.</dd>
</dl>';
        $monster->description = '<p>Octons look like an elongated cylinder that tapered to a point at the top. Just below this point and on either side they have a set of two eyes and a mouth. About a third of the way down their body is a collar-like "shoulder" ring that encircled their entire body. Attached to this ring are eight evenly-spaced tentacles.</p>
<p>There are exactly 64 octons in modron society. They act as governors to each of the sixty-four sectors of Nirvana. As such, they are considered responsible for the base modrons of their sector, as well as the decatons and nonatons that are assigned to them. Each octon has a personal staff consisting of one decaton, one nonaton, five pentadrones, sixteen quadrones, eighty-one tridrones, two hundred and fifty-six duodrones, and one thousand, seven hundred and twenty-eight monodrones. They maintain small towers, which resemble smaller versions of the towers of the quartons, the secundi, and Primus.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'    => [13, 15, 16, 15, 15, 15, 5, 4],
            'features' => [
                'axiomatic_mind',
                'darkvision'          => ['meta' => '120 ft'],
                'vulnerability'       => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'          => ['meta' => 'Acid, Cold, Fire'],
                'immunity'            => ['meta' => 'Fear, Negative, Positive'],
                'innate_spellcasting' => ['meta' => 'INT DC 12'],
                'multi_attack'        => ['meta' => 'A octon may use an Action to make 3 Tentacle Attacks up to 2 times per turn.'],
            ],
            'feats'  => ['Extra Melee Action'],
            'skills' => [
                'Arcana'        => ['dc' => 12],
                'Concentration' => ['dc' => 13],
                'Diplomacy'     => ['dc' => 15],
                'Insight'       => ['dc' => 13],
                'Lore'          => ['dc' => 8],
                'Perception'    => ['dc' => 9, 'meta' => 'All around vision'],
                'Society'       => ['dc' => 13],
                'Stealth'       => ['dc' => 9],
                'Survival'      => ['dc' => 9],
            ],
            'classes' => [
                'Favored Soul' => ['level' => 10],
            ],
            'languages' => ['Auran', 'Celestial', 'Infernal', 'Modron', 'Telepathy' => ['meta' => '900 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Septon';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '14';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 8;
        $monster->speed            = '30 ft / Fly 30 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 9 (2D6 +2) Bludgeoning.</dd>
</dl>';
        $monster->description = '<p>Septons look humanoid, with a large head. On one side of its head is a face, with two eyes, nose and mouth. The head is hairless and was supported by a collar of sorts that encircled its shoulder area. Around this collar are seven evenly spaced small arms.</p>
<p>There are precisely 49 septons in modron society. They act as officials who maintained order and see to it that all regulations are obeyed. One serves each quinton, four serve each secundus, and eight serve Primus directly. They travel from place to place as inspectors and examiners of work and records, and are charged with transferal of information from outlying areas to the towers of the regions, quarters, and the capital tower itself.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'    => [15, 15, 12, 15, 15, 16, 6, 5],
            'features' => [
                'axiomatic_mind', 'magic_resistance',
                'darkvision'          => ['meta' => '120 ft'],
                'vulnerability'       => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'          => ['meta' => 'Acid, Cold, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Fear, Negative, Positive'],
                'innate_spellcasting' => ['meta' => 'INT DC 12'],
                'multi_attack'        => ['meta' => 'A hexton may use an Action to make 3 Claw Attacks.'],
            ],
            'feats'  => ['Wise Defense', 'Extra Melee Action'],
            'spells' => [
                'True Seeing'      => ['meta' => 'At will'],
                'Clairvoyance'     => ['meta' => 'At will'],
                'Command'          => ['meta' => 'At will'],
                'Dimension Door'   => ['meta' => 'At will'],
                'Teleport'         => ['meta' => 'At will, Heightened +3'],
                'Wall of Force'    => ['meta' => 'At will'],
                'Cure Wounds'      => ['meta' => '3/day, Heightened +4'],
                'Remove Disease'   => ['meta' => '3/day'],
                'Remove Paralysis' => ['meta' => '3/day'],
            ],
            'classes' => [
                'Wizard' => ['level' => 5],
            ],
            'languages' => ['Auran', 'Celestial', 'Modron', 'Telepathy' => ['meta' => '1 mile']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Hexton';
        $monster->size             = 'Large';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '14';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 14;
        $monster->speed            = '30 ft / Fly 30 ft';
        $monster->actions          = '<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 10 (2D6 +3) Bludgeoning.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 12 (2D8 +3) Slashing.</dd>
</dl>';
        $monster->description = '<p>Hextons are shaped like humanoids with long arms and six-fingered hands, as well as four tentacles that end in sharp claws. They also possess fan-like wings.</p>
<p>There are only 36 hextons in modron society. They can communicate with other hextons and with quintons, and relayed their orders to septons. Hextons are the generals of the 36 modron armies. Two of these armies serve the secundi, three serve the tertians, sixteen are associated with each of the sixteen regions of Mechanus, and the rest are at the direct disposal of Primus. Hextons can communicate telepathically with anyone in a 10-mile radius.</p>
<p>Hextons are always created as the result of septons being upgraded to take the place of a destroyed hexton, or in case a vacancy appearing due to a hexton being promoted to the rank of quinton.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'    => [16, 16, 12, 6, 16, 17, 7, 4],
            'features' => [
                'axiomatic_mind', 'magic_resistance',
                'darkvision'          => ['meta' => '120 ft'],
                'vulnerability'       => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'          => ['meta' => 'Acid, Cold, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Fear, Negative, Positive'],
                'innate_spellcasting' => ['meta' => 'INT DC 12'],
                'multi_attack'        => ['meta' => 'A hexton an Action to make 3 Slam or Claw Attacks'],
            ],
            'feats'  => ['Wise Defense', 'Extra Melee Action'],
            'spells' => [
                'True Seeing'      => ['meta' => 'At will'],
                'Clairvoyance'     => ['meta' => 'At will'],
                'Command'          => ['meta' => 'At will'],
                'Dimension Door'   => ['meta' => 'At will'],
                'Teleport'         => ['meta' => 'At will, Heightened +3'],
                'Wall of Force'    => ['meta' => 'At will'],
                'Cure Wounds'      => ['meta' => '3/day, Heightened +4'],
                'Remove Disease'   => ['meta' => '3/day'],
                'Remove Paralysis' => ['meta' => '3/day'],
            ],
            'languages' => ['Auran', 'Celestial', 'Infernal', 'Modron', 'Telepathy' => ['meta' => '10 miles']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Quinton';
        $monster->size             = 'Large';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '15';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 15;
        $monster->speed            = '20 ft / Fly 20 ft';
        $monster->actions          = '<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 10 (2D6 +3) Bludgeoning.</dd>
</dl>';
        $monster->description = '<p>Quintons are tall yet heavyset humanoids with four arms and a prehensile tail, all of which sported a five-fingered hand. They have a pair of wings that resemble fans on their backs. Upon their forehead is a diamond symbol, which denoted their rank.</p>
<p>There are exactly twenty-five quintons in modron society—one stationed at each of the twenty bureaus in the region and quarter towers, and five in the bureaus at Primus Tower at the capital. They act as the bureau chiefs and record keepers of Nirvana.</p>
<p>Each quinton have one hexton assistant, plus a staff of one septon, twenty-five pentadrones, sixty-four quadrones, eighty-one tridrones, and an unknown number of duodrones and monodrones.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'    => [17, 15, 12, 17, 17, 18, 8, 5],
            'features' => [
                'axiomatic_mind', 'magic_resistance',
                'darkvision'          => ['meta' => '120 ft'],
                'vulnerability'       => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'          => ['meta' => 'Acid, Cold, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Fear, Negative, Positive'],
                'innate_spellcasting' => ['meta' => 'INT DC 12'],
                'multi_attack'        => ['meta' => 'A Quinton may use an Action to make 4 Slam Attacks'],
            ],
            'feats'  => ['Wise Defense'],
            'spells' => [
                'True Seeing'      => ['meta' => 'At will'],
                'Clairvoyance'     => ['meta' => 'At will'],
                'Command'          => ['meta' => 'At will'],
                'Dimension Door'   => ['meta' => 'At will'],
                'Teleport'         => ['meta' => 'At will, Heightened +3'],
                'Wall of Force'    => ['meta' => 'At will'],
                'Cure Wounds'      => ['meta' => '3/day, Heightened +4'],
                'Remove Disease'   => ['meta' => '3/day'],
                'Remove Paralysis' => ['meta' => '3/day'],
            ],
            'languages' => ['Auran', 'Celestial', 'Infernal', 'Modron', 'Telepathy' => ['meta' => '10 miles']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Quarton';
        $monster->size             = 'Large';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '17';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 16;
        $monster->speed            = '30 ft / Fly 90 ft';
        $monster->actions          = '<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 15 (2D10 +4) Bludgeoning.</dd>
</dl>';
        $monster->description = '<p>Quartons are very tall humanoids, with a height of 12 ft. From their back grow two large wings that resemble fans. They have four arms with multiple joints.</p>
<p>There are exactly sixteen quartons in modron society, each overseeing the operation of the bureaus, sector governors, and army units attached to their region.</p>
<p>Each quarton has a personal staff of these hierarchies attached to his staff, plus thirty-six pentadrones who act as a guard unit.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'    => [18, 17, 12, 18, 18, 19, 9, 5],
            'features' => [
                'axiomatic_mind', 'magic_resistance',
                'darkvision'          => ['meta' => '120 ft'],
                'vulnerability'       => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'          => ['meta' => 'Acid, Cold, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Fear, Negative, Positive'],
                'innate_spellcasting' => ['meta' => 'INT DC 12'],
                'multi_attack'        => ['meta' => 'A quarton may use an Action to make 4 Slam Attacks'],
            ],
            'feats'  => ['Wise Defense', 'Extra Melee Action'],
            'spells' => [
                'True Seeing'      => ['meta' => 'At will'],
                'Clairvoyance'     => ['meta' => 'At will'],
                'Command'          => ['meta' => 'At will'],
                'Dimension Door'   => ['meta' => 'At will'],
                'Teleport'         => ['meta' => 'At will, Heightened +3'],
                'Wall of Force'    => ['meta' => 'At will'],
                'Cure Wounds'      => ['meta' => '3/day, Heightened +4'],
                'Remove Disease'   => ['meta' => '3/day'],
                'Remove Paralysis' => ['meta' => '3/day'],
            ],
            'languages' => ['Abyssal', 'Auran', 'Celestial', 'Infernal', 'Modron', 'Telepathy' => ['meta' => '20 miles']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Tertian';
        $monster->size             = 'Large';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '18';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 2;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 18 (2D12 +5) Bludgeoning.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 18 (2D12 +5) Bludgeoning. If the target is a creature, it must make a DC 17 CON Save or be stunned for 1 minute. The target may repeat the Save at the end of its turns, ending the effect on a success.</dd>
</dl>';
        $monster->description = '<p>Tertians are very tall humanoids, with a height of 12 ft. They have a prehensile tail that acted as a third arm, at the tip of which is a growth that was similar to a mace. A tertian has a ring of horns that encircled their hairless head.</p>
<p>They act as judges, judging and sentencing both modrons and non-natives. Nine tertians exist, with eight of them reporting to the Secundi, and the final one reporting to Primus himself.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'    => [20, 17, 12, 20, 20, 21, 10, 5],
            'features' => [
                'axiomatic_mind', 'magic_resistance', 'flurry_of_blows',
                'darkvision'          => ['meta' => '120 ft'],
                'vulnerability'       => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'          => ['meta' => 'Acid, Cold, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Fear, Negative, Positive'],
                'innate_spellcasting' => ['meta' => 'INT DC 12'],
                'heroic_surge'        => ['meta' => '3/day'],
            ],
            'feats'  => ['Wise Defense', 'Extra Melee Action'],
            'spells' => [
                'True Seeing'      => ['meta' => 'At will'],
                'Clairvoyance'     => ['meta' => 'At will'],
                'Command'          => ['meta' => 'At will'],
                'Dimension Door'   => ['meta' => 'At will'],
                'Teleport'         => ['meta' => 'At will, Heightened +3'],
                'Wall of Force'    => ['meta' => 'At will'],
                'Cure Wounds'      => ['meta' => '3/day, Heightened +4'],
                'Remove Disease'   => ['meta' => '3/day'],
                'Remove Paralysis' => ['meta' => '3/day'],
            ],
            'classes' => [
                'Monk' => ['level' => 15],
            ],
            'languages' => ['Abyssal', 'Auran', 'Celestial', 'Infernal', 'Modron', 'Sylvan', 'Telepathy' => ['meta' => '30 miles']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Secundus';
        $monster->size             = 'Large';
        $monster->alignment        = 'LN';
        $monster->armor_class      = '19';
        $monster->damage_reduction = '9 (Natural Armor)';
        $monster->hit_dice         = 1;
        $monster->speed            = '50 ft / Fly 50 ft';
        $monster->actions          = '<dl>
    <dt>Fist</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 18 (2D12 +6) Bludgeoning.</dd>
</dl>';
        $monster->description = '<p>Secundi appear like very thin and tall humanoids, with long faces and deep-set eyes.</p>
<p>There are only four secundi in modron society. They can communicate with other secundi and relayed their orders to tertians under their command, but reported directly to Primus itself. Each secundus is a viceroy in charge of one of the four quarters of their realm in Mechanus. They can communicate telepathically with anyone in a 40‑mile radius.</p>
<p>Secundi are always created as the result of a tertian being promoted to take the place of a killed or further promoted secundus. If Primus dies, one of the secundi is promoted and takes its place as the new Primus.</p>';
        $helper->saveMonster($monster, ['Modron', 'Outer Planes', 'Lawful', 'Outsider', 'Construct', 'Neutral'], [
            'stats'    => [22, 18, 12, 21, 21, 22, 11, 6],
            'features' => [
                'axiomatic_mind', 'magic_resistance', 'flurry_of_blows',
                'darkvision'          => ['meta' => '120 ft'],
                'vulnerability'       => ['meta' => 'Anarchic, Adamantine, Mithral'],
                'resistance'          => ['meta' => 'Acid, Cold, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'            => ['meta' => 'Fear, Negative, Positive'],
                'innate_spellcasting' => ['meta' => 'INT DC 12'],
                'heroic_surge'        => ['meta' => '3/day'],
            ],
            'feats'  => ['Wise Defense'],
            'spells' => [
                'True Seeing'      => ['meta' => 'At will'],
                'Clairvoyance'     => ['meta' => 'At will'],
                'Command'          => ['meta' => 'At will'],
                'Dimension Door'   => ['meta' => 'At will'],
                'Teleport'         => ['meta' => 'At will, Heightened +3'],
                'Wall of Force'    => ['meta' => 'At will'],
                'Cure Wounds'      => ['meta' => '3/day, Heightened +4'],
                'Remove Disease'   => ['meta' => '3/day'],
                'Remove Paralysis' => ['meta' => '3/day'],
            ],
            'classes' => [
                'Monk' => ['level' => 17],
            ],
            'languages' => ['Abyssal', 'Auran', 'Celestial', 'Infernal', 'Modron', 'Sylvan', 'Telepathy' => ['meta' => '40 miles']],
        ]);
    }
}
