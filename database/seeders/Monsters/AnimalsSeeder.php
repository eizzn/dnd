<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class AnimalsSeeder extends Seeder
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
        $monster->name             = 'Ankheg';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '30 ft / Burrow 10 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +3) Slashing. If the target is Large or smaller, it is Grappled (Escape DC 13). Until this Grapple ends, the ankheg can only Bite the Grappled creature, and has Advantage on the Bite's to hit</dd>
    <dt>Acid Spray (1/day)</dt> <dd>The ankheg spits acid in a line that is 30 feet long and 5 feet wide, provided that it has no creature Grappled. Each creature in that line must make a DC 13 DEX Save, taking (3D6) Acid damage on a Failed Save, or half as much damage on a Successful one.</dd>
</dl>";
        $monster->description = "<p>The ankheg is a large insectoid monster with many slender limbs and large antennae. It burrows underground and hunts from below.</p>
<p>Ankhegs are covered in a strong chitin armor.</p>
<p>Ankheg can see in pitch darkness as well as detect vibrations in the earth. The Acid attack is actually the digestive system for the creature, so it can't digest any food for six hours after it discharged its Acid Spray.</p>
<p>The ankheg is an ambush predator that waits around 5-10 feet underground for prey to wander into position. The attack is quick, as the prey is crushed and ground in its mandibles. If a foe proves too difficult, the ankheg can squirt Acid to take it down. If several ankhegs are attacking a group, the ankhegs will try to attack different targets. If prey is attacked by more tha one ankheg, the ankhegs will just play tug-of-war with the unfortunate prey.</p>
<p>A typical area can have a lone ankheg, a pair, or a cluster of ankhegs.</p>
<p>Ankhegs that live in colder areas hibernate during the winter. During this time, an ankheg can draw nutrients from its shell and its antenna.</p>
<p>The ankheg can draw nutrients from the ground, but is required to hunt for meat to supplement its diet. It can also eat decaying meat.</p>
<p>Ankheg mate in autumn. The fertilized female then kills the male and lays 6-12 eggs inside him. Usually, a high number of eggs survive and hatch within two to ten days.</p>
<p>An ankheg broodling does not hunt and remains hidden, while the mother brings it food. After a year, the young are able to fend for themselves.</p>
<p>Around the second year, the young ankheg sheds its chitin before the winter. It takes a little less than ten days to complete the process and grow a new shell. During this time, the young ankheg is slower and more vulnerable. To defend itself it secrets a fluid that smells like rotten fruit. This defense sometimes backfires, as some creatures seek out the smell.</p>
<p>Living in warm climates, the ankheg dwells in partially collapsed burrows usually around 40 feet underground. The ankheg hunts in forests or grasslands where prey will wander into its traps. If an area becomes too barren, the ankheg will move on to other, more lucrative areas. Ankheg tunnels are sometimes filled with the remains of victims, eggs, or chitin. Their tunnels can sometimes be around 60 to 150 feet long and 5 feet high. Hollow tunnel ends are used to lair purposes, such as sleeping or hibernation.</p>
<p>They are known to compete with giant ants for territory. If they are killed or driven away from their nests, the broodlings left behind are sometimes made to serve the giant ant colony.</p>
<p>Ankhegs can prove to be useful for farmers. Provided it stays alive, its tunnels can bring in water and its excrement contains enriching minerals. Ankheg burrows also aerate the nearby land which can improve crop yields by as much as 15%, provided the ankheg population is managed.</p>
<p>An ankheg shell harvested form a slain ankheg weighs roughly 100 pounds. Armorers can forge armor from the shells. It takes three days to make. The armor is nearly as effective as full plate mail, but weighed considerably less and can be worn by warriors who usually can't wear such heavy armor. A full set of ankheg armor can cost 20,000 gp. However, if one provides the shell, it can cost 4,000 gp.</p>";
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [17, 11, 13, 1, 13, 6, 2, 2],
            'feats' => [
                'Tremorsense',
            ],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'vulnerability' => ['meta' => 'Turpentine on touch causes Ankhegs to Save vs Poison (DC 15) or Fall Asleep for 1 minute.'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Ape';
        $monster->size        = 'Medium';
        $monster->alignment   = '-';
        $monster->armor_class = '12';
        $monster->hit_dice    = 3;
        $monster->speed       = '30 ft / Climb 30 ft';
        $monster->actions     = '<dl>
    <dt>Fist</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 6 (1D6 +3) Bludgeoning.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [16, 14, 14, 6, 12, 7, .5, 2],
            'feats'  => ['Two-Weapon Fighter'],
            'skills' => [
                'Athletics'  => ['dc' => 5],
                'Perception' => ['dc' => 3],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Ape, Dire';
        $monster->size        = 'Huge';
        $monster->alignment   = '-';
        $monster->armor_class = '12';
        $monster->hit_dice    = 10;
        $monster->speed       = '40 ft / Climb 40 ft';
        $monster->actions     = '<dl>
    <dt>Fist</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (3D10 +6) Bludgeoning.</dd>
    <dt>Rock</dt> <dd>Ranged Weapon Attack, reach 50/100 ft, one target. (3D6) Bludgeoning.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [23, 14, 18, 7, 12, 7, 5, 4],
            'skills' => [
                'Athletics'  => ['dc' => 9],
                'Perception' => ['dc' => 4],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Axe Beak';
        $monster->size        = 'Large';
        $monster->alignment   = '-';
        $monster->armor_class = '11';
        $monster->hit_dice    = 3;
        $monster->speed       = '50 ft';
        $monster->actions     = '<dl>
    <dt>Beak</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 6 (1D8 +2) Slashing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [14, 12, 12, 2, 10, 5, .25, 2],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Baboon';
        $monster->size        = 'Small';
        $monster->alignment   = '-';
        $monster->armor_class = '12';
        $monster->hit_dice    = 1;
        $monster->speed       = '30 ft / Climb 30 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1 (1D4 - 1) Piercing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'   => [14, 12, 12, 2, 10, 5, 0, 2],
            'talents' => ['Pack Tactics'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Badger';
        $monster->size        = 'Tiny';
        $monster->alignment   = '-';
        $monster->armor_class = '10';
        $monster->hit_dice    = 1;
        $monster->speed       = '20 ft / Burrow 5 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1 Piercing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [4, 11, 12, 2, 12, 5, 0, 2],
            'features' => [
                'keen_sense' => ['meta' => 'Smell'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Bat';
        $monster->size        = 'Tiny';
        $monster->alignment   = '-';
        $monster->armor_class = '12';
        $monster->hit_dice    = 1;
        $monster->speed       = '5 ft / Fly 30 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1 Piercing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [2, 15, 8, 2, 12, 4, 0, 2],
            'features' => [
                'keen_sense' => ['meta' => 'Hear'],
            ],
            'feats' => ['Blindsight' => ['meta' => "The bat can't use its Blindsight while Deafened."]],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Bat, Dire';
        $monster->size        = 'Large';
        $monster->alignment   = '-';
        $monster->armor_class = '13';
        $monster->hit_dice    = 4;
        $monster->speed       = '10 ft / Fly 60 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +2) Piercing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [15, 16, 11, 2, 12, 6, .25, 2],
            'features' => [
                'keen_sense' => ['meta' => 'Hear'],
            ],
            'feats' => ['Blindsight' => ['meta' => "The bat can't use its Blindsight while Deafened."]],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Bear, Black';
        $monster->size             = 'Medium';
        $monster->alignment        = '-';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '40 ft / Climb 30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack +4 to hit, reach 5 ft, one target. 5 (1D6 +2) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack +4 to hit, reach 5 ft, one target. 7 (2D4 +2) Slashing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [15, 10, 14, 2, 12, 7, .5, 2],
            'features' => [
                'keen_sense'   => ['meta' => 'Smell'],
                'multi_attack' => ['meta' => 'If the bear makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The bear can only gain this additional Action once per turn.'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Bear, Brown';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '40 ft / Climb 30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack +5 to hit, reach 5 ft, one target. 8 (1D8 +4) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack +5 to hit, reach 5 ft, one target. 11 (2D6 +4) Slashing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [19, 10, 16, 2, 13, 7, 1, 2],
            'features' => [
                'keen_sense'   => ['meta' => 'Smell'],
                'multi_attack' => ['meta' => 'If the bear makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The bear can only gain this additional Action once per turn.'],
            ],
            'skills' => [
                'Perception' => ['dc' => 3],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Boar';
        $monster->size             = 'Medium';
        $monster->alignment        = '-';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 2;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Tusk</dt> <dd>Melee Weapon Attack +3 to hit, reach 5 ft, one target. 4 (1D6 +1) Slashing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [13, 11, 12, 2, 9, 5, .25, 2],
            'features' => [
                'keen_sense'   => ['meta' => 'Smell'],
                'multi_attack' => ['meta' => 'If the bear makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The bear can only gain this additional Action once per turn.'],
            ],
            'feats' => ['Die Hard', 'Improved Bull Rush'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Boar, Dire';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 5;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Tusk</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 10 (2D6 +3) Slashing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [17, 10, 16, 2, 7, 5, 2, 2],
            'features' => [
                'keen_sense'   => ['meta' => 'Smell'],
                'multi_attack' => ['meta' => 'If the bear makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The bear can only gain this additional Action once per turn.'],
            ],
            'feats' => ['Die Hard', 'Improved Bull Rush'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Bulette';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 9;
        $monster->speed            = '40 ft / Burrow 40 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack +8 to hit, reach 5 ft, one target. (4D12 +4) Piercing.</dd>
    <dt>Deadly Leap</dt> <dd> If the bulette jumps at least 15 ft. as part of its movement, it can then use this Action to land on its feet in a space that contains one or more other creatures. Each of those creatures must succeed on a DC 16 STR or DEX Save (target's choice) or be knocked prone and take 14 (3D6 +4) Bludgeoning damage plus 14 (3D6 +4) Slashing damage. On a successful Save, the creature takes only half the damage, isn't knocked prone, and is pushed 5 ft. out of the bulette's space into an unoccupied space of the creature's choice. If no unoccupied space is within range, the creature instead falls prone in the bulette's space.</dd>
</dl>";
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [19, 11, 21, 2, 10, 5, 5, 4],
            'skills' => [
                'Athletics'  => ['dc' => 20, 'meta' => 'High Jump and Long Jump only'],
                'Perception' => ['dc' => 6],
            ],
            'features' => [
                'darkvision' => ['meta' => '60 ft'],
            ],
            'feats'   => ['Tremorsense'],
            'talents' => ['Leap Attack'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Camel';
        $monster->size        = 'Large';
        $monster->alignment   = '-';
        $monster->armor_class = '8';
        $monster->hit_dice    = 2;
        $monster->speed       = '50 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4) Bludgeoning</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [16, 8, 14, 2, 8, 5, .125, 2],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Carrion Crawler';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 5;
        $monster->speed            = '30 ft / Climb 30 ft';
        $monster->actions          = '<dl>
    <dt>Tentacles</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 4 (1D4 +2) Poison damage, and the target must succeed on a DC 13 CON Save or be Paralyzed for 1 minute. The target can repeat the Save at the end of each of its turns, ending the Paralysis on a success.</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, on target. 7 (2D4 +2) Piercing damage</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [14, 13, 16, 1, 12, 5, 2, 3],
            'features' => [
                'keen_sense' => ['meta' => 'Smell'],
                'spider_climb',
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Cat';
        $monster->size        = 'Tiny';
        $monster->alignment   = '-';
        $monster->armor_class = '12';
        $monster->hit_dice    = 1;
        $monster->speed       = '40 ft / Climb 30 ft';
        $monster->actions     = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1) Slashing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [3, 15, 10, 3, 12, 7, 0, 2],
            'skills' => [
                'Perception' => ['dc' => 3],
                'Stealth'    => ['dc' => 4],
            ],
            'features' => [
                'keen_sense' => ['meta' => 'Smell'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Centipede, Giant';
        $monster->size             = 'Small';
        $monster->alignment        = '-';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 1;
        $monster->speed            = '30 ft / Climb 30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D4 + 2 Piercing and 3D6 Poison (CON DC 11). If the Save is Failed, the target is Paralyzed for 1 hour. If the poison damage reduces the target to 0 Hit Points, the target is Stable but Paralyzed for 1 hour.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [5, 14, 12, 1, 7, 3, .25, 2],
            'skills' => [
                'Perception' => ['dc' => 8],
            ],
            'feats' => ['Blindsight' => ['meta' => '30 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Crocodile';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '20 ft / Swim 30 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack +3 to hit, reach 5 ft, one target. (1D10 +2) Piercing. The target is Grappled (Escape DC 12) Until this Grapple ends, the target is Restrained, and the crocodile can't bite another target.</dd>
</dl>";
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [15, 10, 13, 2, 10, 5, .5, 2],
            'skills' => [
                'Stealth' => ['dc' => 2],
            ],
            'features' => [
                'hold_breath' => ['meta' => '15 minutes'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Crocodile, Dire';
        $monster->size             = 'Huge';
        $monster->alignment        = '-';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 9;
        $monster->speed            = '30 ft / Swim 50 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (3D10 +5) Piercing. The target is Grappled (Escape DC 16) Until this Grapple ends, the target is Restrained, and the crocodile can\'t bite another target.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D8 +5) Bludgeoning. If the target is a creature, it must make a DC 16 STR Save or be knocked Prone.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [21, 9, 17, 2, 10, 7, 5, 4],
            'skills' => [
                'Stealth' => ['dc' => 5],
            ],
            'features' => [
                'hold_breath' => ['meta' => '30 minutes'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Deer';
        $monster->size        = 'Medium';
        $monster->alignment   = '-';
        $monster->armor_class = '13';
        $monster->hit_dice    = 1;
        $monster->speed       = '50 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4) Bludgeoning.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [11, 16, 11, 2, 14, 5, '0', 2],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Dog';
        $monster->size        = 'Small';
        $monster->alignment   = '-';
        $monster->armor_class = '12';
        $monster->hit_dice    = 1;
        $monster->speed       = '40 feet';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D4 +1 Piercing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [12, 12, 12, 3, 12, 6, 0, 2],
            'skills' => [
                'Perception' => ['dc' => 3],
            ],
            'features' => [
                'keen_sense' => ['meta' => 'Hearing and Scent'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Dog, War';
        $monster->size        = 'Medium';
        $monster->alignment   = '-';
        $monster->armor_class = '12';
        $monster->hit_dice    = 1;
        $monster->speed       = '40 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D6 +1 Piercing. If the target is a creature, it must succeed a DC 11 STR Save or be knocked prone.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [13, 14, 12, 3, 12, 7, .125, 2],
            'skills' => [
                'Perception' => ['dc' => 3],
            ],
            'features' => [
                'keen_sense' => ['meta' => 'Hearing and Scent'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Eagle';
        $monster->size        = 'Small';
        $monster->alignment   = '-';
        $monster->armor_class = '13';
        $monster->hit_dice    = 1;
        $monster->speed       = '10 ft / Fly 60 ft';
        $monster->actions     = '<dl>
    <dt>Talons</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 -2) Slashing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [6, 15, 10, 2, 14, 7, 0, 2],
            'skills' => [
                'Perception' => ['dc' => 4],
            ],
            'features' => [
                'keen_sense' => ['meta' => 'Sight'],
            ],
            'feats' => ['Weapon Finesse'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Elephant';
        $monster->size             = 'Huge';
        $monster->alignment        = '-';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 8;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Gore</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (3D8 +6) Bludgeoning.</dd>
    <dt>Stomp</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (3D10 +6) Bludgeoning.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [22, 9, 17, 3, 11, 6, 4, 3],
            'features' => [
                'multi_attack' => ['meta' => 'If the elephant succeeds a Bull Rush attack and the target becomes Prone, the elephant gains an additional Action. This additional Action can only be used to make Stomp attack.'],
            ],
            'feats' => ['Ride-By Attack', 'Improved Bull Rush'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Elk';
        $monster->size        = 'Large';
        $monster->alignment   = '-';
        $monster->armor_class = '9';
        $monster->hit_dice    = 2;
        $monster->speed       = '50 ft';
        $monster->actions     = '<dl>
    <dt>Ram</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +3) Bludgeoning.</dd>
    <dt>Hooves</dt> <dd>Melee Weapon Attack, reach 5 ft, one Prone target. (2D4 +3) Bludgeoning.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [16, 10, 12, 2, 10, 6, .25, 2],
            'features' => [
                'multi_attack' => ['meta' => 'If the elk succeeds a Bull Rush attack and the target becomes Prone, the elk gains an additional Action. This additional Action can only be used to make Hooves attack.'],
            ],
            'feats' => ['Ride-By Attack', 'Improved Bull Rush'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Elk, Dire';
        $monster->size             = 'Huge';
        $monster->alignment        = '-';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 5;
        $monster->speed            = '60 ft';
        $monster->actions          = '<dl>
    <dt>Ram</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +4) Bludgeoning.</dd>
    <dt>Hooves</dt> <dd>Melee Weapon Attack, reach 5 ft, one Prone target. (4D8 +3) Bludgeoning.</dd>
</dl>';
        $helper->saveMonster($monster, ['Beast'], [
            'stats'    => [19, 16, 14, 7, 14, 10, 2, 2],
            'skills'   => ['Perception' => ['dc' => 4]],
            'features' => [
                'multi_attack' => ['meta' => 'If the elk succeeds a Bull Rush attack and the target becomes Prone, the elk gains an additional Action. This additional Action can only be used to make Hooves attack.'],
            ],
            'feats'     => ['Ride-By Attack', 'Improved Bull Rush'],
            'languages' => ['Sylvan'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Frog';
        $monster->size        = 'Tiny';
        $monster->alignment   = '-';
        $monster->armor_class = '13';
        $monster->hit_dice    = 1;
        $monster->speed       = '20 ft / Swim 20 ft';
        $monster->description = '<p>A frog has no effective attacks (although there are poisonous varieties). It feeds on small insects and typically dwells near water, in trees, or underground.</p>';
        $monster->actions     = "<dl>
    <dt>Standing Leap</dt> <dd>The frog's long jump is up to 10 feet and its high jump is up to 5 feet, with or without a running start.</dd>
</dl>";
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [1, 13, 8, 1, 8, 3, 0, 2],
            'skills' => [
                'Perception' => ['dc' => 1],
                'Stealth'    => ['dc' => 3],
            ],
            'features' => [
                'amphibious',
                'darkvision' => ['meta' => '30 ft'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Goat';
        $monster->size        = 'Medium';
        $monster->alignment   = '-';
        $monster->armor_class = '10';
        $monster->hit_dice    = 1;
        $monster->speed       = '40 ft';
        $monster->actions     = '<dl>
    <dt>Ram</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 +1) Bludgeoning.</dd>
    <dt>Sure-Footed</dt> <dd>The goat has Advantage on STR and DEX Saves made against effects that would knock it Prone.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [12, 10, 11, 2, 10, 5, .125, 2],
            'feats' => ['Improved Bull Rush'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Goat, Dire';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Ram</dt> <dd>Melee Weapon attack, reach 5 ft, one target. (2D4 +3) Bludgeoning.</dd>
    <dt>Sure-Footed</dt> <dd>The goat has Advantage on STR and DEX Saves made against effects that would knock it Prone.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [17, 11, 12, 3, 12, 6, .5, 2],
            'feats' => ['Improved Bull Rush'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Hawk';
        $monster->size        = 'Tiny';
        $monster->alignment   = '-';
        $monster->armor_class = '15';
        $monster->hit_dice    = 1;
        $monster->speed       = '10 ft / Fly 60 ft';
        $monster->actions     = '<dl>
    <dt>Talons</dt> <dd>Melee Weapon attack, reach 5 ft, one target. (1) Slashing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [5, 16, 8, 2, 14, 6, 0, 2],
            'skills'   => ['Perception' => ['dc' => 4]],
            'features' => [
                'keen_sense' => ['meta' => 'Sight'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Horse, Draft';
        $monster->size        = 'Large';
        $monster->alignment   = '-';
        $monster->armor_class = '9';
        $monster->hit_dice    = 3;
        $monster->speed       = '40 ft';
        $monster->actions     = '<dl>
    <dt>Hooves</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D4 +4) Bludgeoning.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [18, 10, 12, 2, 11, 7, .25, 2],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Horse, Riding';
        $monster->size        = 'Large';
        $monster->alignment   = '-';
        $monster->armor_class = '9';
        $monster->hit_dice    = 2;
        $monster->speed       = '60 ft';
        $monster->actions     = '<dl>
    <dt>Hooves</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D4 +3) Bludgeoning.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [16, 10, 12, 2, 11, 7, .25, 2],
            'feats' => ['Improved Bull Rush'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Horse, War';
        $monster->size        = 'Large';
        $monster->alignment   = '-';
        $monster->armor_class = '10';
        $monster->hit_dice    = 3;
        $monster->speed       = '60 ft';
        $monster->actions     = '<dl>
    <dt>Hooves</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +4) Bludgeoning.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [18, 12, 13, 2, 12, 7, .5, 2],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Hyena';
        $monster->size        = 'Medium';
        $monster->alignment   = '-';
        $monster->armor_class = '11';
        $monster->hit_dice    = 1;
        $monster->speed       = '50 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6) Piercing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'   => [11, 13, 12, 2, 12, 5, .125, 2],
            'talents' => ['Improved Flanking'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Lion';
        $monster->size        = 'Large';
        $monster->alignment   = '-';
        $monster->armor_class = '11';
        $monster->hit_dice    = 4;
        $monster->speed       = '50 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +3) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +3) Slashing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [17, 15, 13, 3, 12, 8, 1, 2],
            'skills' => [
                'Athletics'  => ['dc' => 10, 'meta' => 'Long Jump only'],
                'Perception' => ['dc' => 3],
                'Stealth'    => ['dc' => 6],
            ],
            'features' => [
                'keen_sense' => ['meta' => 'Scent'],
            ],
            'talents' => ['Improved Flanking', 'Leap Attack'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Lizard';
        $monster->size        = 'Tiny';
        $monster->alignment   = '-';
        $monster->armor_class = '10';
        $monster->hit_dice    = 1;
        $monster->speed       = '20 ft / Climb 20 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1) Piercing damage</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [2, 11, 10, 1, 8, 3, 0, 2],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Lizard, Giant';
        $monster->size             = 'Medium';
        $monster->alignment        = '-';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '30 ft / Climb 30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +2) Piercing damage</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [15, 12, 13, 2, 10, 5, .25, 2],
            'features' => [
                'darkvision' => ['meta' => '30 ft'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Orpsu';
        $monster->size        = 'Tiny';
        $monster->alignment   = '-';
        $monster->armor_class = '13';
        $monster->hit_dice    = 1;
        $monster->speed       = '5 ft / Fly 40 ft';
        $monster->actions     = 'TODO Anauroch';
        $monster->description = "<p>Orpsu, also known as 'Night Stirges' are flying predators that feed on fresh blood. They are unrelated to the more common stirge, and do not grip victims to feed. An orpsu is a hairless, rat-tailed flying beast equipped with raking fangs and four bony wing like projecting horns. Orpsu are mottled crimson, purple, mauve, or cinnamon-brown in hue, and have veined, leathery skin.</p>
<p>Orpsu are common in Kara-Tur and the steppes, plains and deserts that lie west of the Eastern Realms.</p>";
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [4, 12, 13, 2, 7, 5, .125, 2],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Raven, Giant';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '20 ft / Fly 70 ft (Poor)';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +3) Piercing damage</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 +3) Slashing damage</dd>
</dl>';
        $monster->description = "<p>Giant ravens are intelligent, mischievous scavengers that dwell among the high places of the North. The creature is the name-sake of the Black Raven tribe of the Uthgardt barbarians, who raise the birds from the time they are hatchlings to become useful aerial steeds. The giant raven is a willful and mischievous bird, prone to crude practical jokes (such as stealing its rider's helmet or weapon and hiding someplace where the rider can't reach it).</p>
<p>Giant ravens born living in the wild rarely attack other creatures unless they feel threatened or they perceive that their nests, young, or eggs are endangered. Young ravens can be trained as aerial mounts, through they are less prized than giant eagles, giant owls, or pegasi.</p>
<p>Training a giant raven as an aerial mount requires a successful Animal Handling check (DC 18 for a young creature or 25 for an adult) and that the creature be willing. Members of the Black Raven tribe gain a +4 circumstance bonus on these checks due to their close affiliation with the birds.</p>
<p>Giant raven eggs are worth 1,500 gp apiece on the open market, while hatchlings are worth 3,000 gp each. Professional trainers charge 1,000 gp to rear or train a giant raven, and riding one requires an exotic saddle. A giant raven can fight while carrying a rider, but the rider cannot also attack unless he succeeds at a Ride check against DC 10.</p>
<p>A light load for a giant raven is up to 150 pounds, a medium load, 151-300 pounds, and a heavy load, 301-450 pounds. A giant raven cannot fly with a heavy load.</p>";
        $helper->saveMonster($monster, ['Beast'], [
            'stats'  => [16, 19, 13, 12, 12, 1, 2],
            'skills' => [
                'Deception'  => ['dc' => 5],
                'Survival'   => ['dc' => 4],
                'Perception' => ['dc' => 7],
                'Insight'    => ['dc' => 4],
            ],
            'feats' => ['Dodge', 'Evasion'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Rhinoceros';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Gore</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D8 +5) Bludgeoning.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [21, 8, 15, 2, 12, 6, 2, 3],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Scorpion';
        $monster->size             = 'Tiny';
        $monster->alignment        = '-';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 1;
        $monster->speed            = '10 ft';
        $monster->actions          = '<dl>
    <dt>Sting</dt> <dd>Melee Weapon Attack +0, reach 5 ft, one target. 1 Piercing + 1D8 Poison on a Failed Save, or half as much damage on a Successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [2, 11, 8, 1, 8, 2, 0, 2],
            'feats' => [
                'Blindsight' => ['meta' => '10 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Scorpion, Giant';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 7;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack +3, reach 5 ft, one target. (1D8 +2) Bludgeoning and the target is Grappled (escape DC 12). The scorpion has two claws, each of which can grapple only one target.</dd>
    <dt>Sting</dt> <dd>Melee Weapon Attack +3, reach 5 ft, one target. (1D10 +2) Piercing + (4D10) Poison on a Failed Save (CON DC 12), or half as much damage on a Successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [15, 13, 15, 1, 9, 3, 3, 2],
            'feats' => [
                'Blindsight' => ['meta' => '60 ft'],
            ],
            'features' => [
                'multi_attack' => ['meta' => 'The scorpion gains an additional Action. This additional Action can only be used to make a Sting attack'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Constrictor Snake';
        $monster->size        = 'Large';
        $monster->alignment   = '-';
        $monster->armor_class = '11';
        $monster->hit_dice    = 2;
        $monster->speed       = '30 ft / Swim 30 ft';
        $monster->actions     = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack +3, reach 5 ft, one target. (1D6 +2) Piercing</dd>
    <dt>Constrict</dt> <dd>Melee Weapon Attack +3, reach 5 ft, one target. (1D8 +2) Bludgeoning and the target is Grappled (Escape DC 14). Until the Grapple ends, the creature is Restrained, and the snake can't Constrict another target.</dd>
</dl>";
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [15, 14, 12, 1, 10, 3, .25, 2],
            'feats' => [
                'Blindsight' => ['meta' => '10 ft'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Constrictor Snake, Giant';
        $monster->size        = 'Huge';
        $monster->alignment   = '-';
        $monster->armor_class = '10';
        $monster->hit_dice    = 8;
        $monster->speed       = '30 ft / Swim 30 ft';
        $monster->actions     = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (2D6 +4) Piercing</dd>
    <dt>Constrict</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D8 +4) Bludgeoning and the target is Grappled (Escape DC 16). Until the Grapple ends, the creature is Restrained, and the snake can't Constrict another target.</dd>
</dl>";
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [19, 14, 12, 1, 10, 3, 2, 2],
            'feats' => [
                'Blindsight' => ['meta' => '10 ft'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Flying Snake';
        $monster->size        = 'Tiny';
        $monster->alignment   = '-';
        $monster->armor_class = '16';
        $monster->hit_dice    = 2;
        $monster->speed       = '30 ft / Swim 30 ft / Fly 60 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1) Piercing + (3D4) Poison damage</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [4, 18, 11, 2, 12, 5, .125, 2],
            'feats' => [
                'Blindsight' => ['meta' => '10 ft'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Poisonous Snake';
        $monster->size        = 'Tiny';
        $monster->alignment   = '-';
        $monster->armor_class = '15';
        $monster->hit_dice    = 1;
        $monster->speed       = '30 ft / Swim 30 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1) Piercing and the target must make a DC 10 CON Save, taking (2D4) Poison damage on a Failed Save, or half as much damage on a Successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [2, 16, 11, 1, 10, 3, .125, 2],
            'feats' => [
                'Blindsight' => ['meta' => '10 ft'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Poisonous Snake, Giant';
        $monster->size        = 'Medium';
        $monster->alignment   = '-';
        $monster->armor_class = '14';
        $monster->hit_dice    = 2;
        $monster->speed       = '30 ft / Swim 30 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. (1D4 +4) Piercing and the target must make a DC 11 CON Save, taking (3D6) Poison damage on a Failed Save, or half as much damage on a Successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [10, 18, 13, 2, 10, 3, .25, 2],
            'feats' => [
                'Blindsight' => ['meta' => '10 ft'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Spider';
        $monster->size        = 'Tiny';
        $monster->alignment   = '-';
        $monster->armor_class = '14';
        $monster->hit_dice    = 1;
        $monster->speed       = '20 ft / Climb 20 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 0 ft, one target. (1D1) Piercing +1 Poison damage. The target must succeed on a DC 9 CON Save or take the Poison damage.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [2, 14, 8, 1, 10, 2, 0, 2],
            'features' => ['spider_climb', 'web_sense', 'web_walker'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Spider, Giant';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '30 ft / Climb 30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 0, one target. (1D8 + 3) Piercing + 2D8 Poison. The target must make a DC 11 CON Save, taking the Poison damage on a failed save, or half Poison damage on a success. If the Poison reduces the target to 0 Hit Points, the target is stable but Sick:2 for 1 hour, even after regaining Hit Points, and is Paralyzed while poisoned in this way.</dd>
    <dt>Web (Recharge 5-6)</dt> <dd>Ranged Weapon Attack, reach 30/60 ft, one creature. The target is restrained by webbing. As an Action, the restrained target can make a DC 12 STR check, bursting the webbing on a success. The webbing can also be attacked and destroyed (AC 10; HP 5; Vulnerability to Fire damage; Immunity to Bludgeoning, Poison, and Negative/Positive damage).</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [14, 16, 12, 2, 11, 4, 1, 2],
            'feats' => [
                'Weapon Finesse',
                'Blindsight' => ['meta' => '10 ft'],
            ],
            'features' => [
                'darkvision' => ['meta' => '60 ft'],
                'spider_climb', 'web_sense', 'web_walker',
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Wolf Spider, Giant';
        $monster->size        = 'Medium';
        $monster->alignment   = '-';
        $monster->armor_class = '13';
        $monster->hit_dice    = 2;
        $monster->speed       = '40 ft / Climb 40 ft';
        $monster->description = '<p>Smaller than a Giant Spider, a Giant Wolf Spider hunts prey across open ground or hides in a burrow or crevice, or in a hidden cavity beneath debris.</p>';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 + 1) Piercing + 2D6 Poison (CON DC 11). Half Poison damage on a successful save. If the poison reduces the target to 0 Hit Points, the target is Stable but Paralyzed for 1 hour.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [14, 16, 13, 3, 12, 4, .25, 2],
            'skills' => [
                'Perception' => ['dc' => 3],
                'Stealth'    => ['dc' => 7],
            ],
            'feats' => [
                'Weapon Finesse',
                'Blindsight' => ['meta' => '10'],
            ],
            'features' => [
                'darkvision' => ['meta' => '60 ft'],
                'spider_climb', 'web_sense', 'web_walker',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Giant Whip Scorpion';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 5;
        $monster->speed            = '50 ft / Climb 40 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +2) Bludgeoning and the target is Grappled (escape DC 12). The scorpion has two claws, each of which can grapple only one target.</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +2) Piercing</dd>
    <dt>Poison Spray</dt> <dd>Three times per day, a giant whip scorpion can discharge a 20-foot diameter spread of noxious vapor centered on itself. This cloud functions as an inhaled poison (CON Save DC 14, initial and secondary damage 1D4 DEX).</dd>
</dl>';
        $monster->description = "<p>About the size of an ogre, this spider has a long, flat body and six spindly legs. Two more legs held close to the creature's month and end in spiny pincers. Two long, whiplike appendages emerge from its body just behind its pincer-legs, and a third stretches up from the rear of its abdomen.</p>";
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [15, 12, 14, 1, 10, 2, 2, 2],
            'feats' => [
                'Improved Grapple',
                'Blindsight' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Giant Whip Spider';
        $monster->size             = 'Medium';
        $monster->alignment        = '-';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 2;
        $monster->speed            = '40 ft / Climb 40 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 +1) Bludgeoning</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +1) Piercing</dd>
</dl>';
        $monster->description = "<p>THis human-sized, spider-like creature has a long, flat body and six spindly legs. Two more legs held close to its mouth end in spiny pincers. Two long, whip-like appendages emerge from the creature's body just behind its pincer legs.</p>
<p>A giant whip spider measures between 6 and 8 feet long and weighs about 200 pounds. Despite the impressive appearance of its whip-like appendages, they are simple feelers that the creature uses to probe into fissures and other areas it can't see.</p>
<p>Sages sometimes refer to giant whip spiders as monstrous amblypygids, but the term is not commonly used.</p>";
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [13, 14, 14, 1, 10, 2, 1, 2],
            'feats' => [
                'Improved Grapple',
                'Poison Immunity',
                'Blindsight' => ['meta' => '60 ft'],
            ],
            'features' => [
                'darkvision' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Giant Sun Spider';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '40 ft / Climb 40 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 +3) Bludgeoning</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D6 +3) Piercing</dd>
</dl>';
        $monster->description = '<p>Though it resembles a spider, this creature is the size of a rhinoceros and the color of a camel. In segmented, hairy body sprouts ten legs. The two front legs are thicker than the rest and end in small pincers. The head is dominated by two gigantic mandibles, and two bulging, black eyes gaze malevolently outward.</p>
<p>Giant Sun Spiders can most easily be distinguished from Large monstrous spiders by their coloration, which ranges from brown to yellow. A giant sun spider is about 10 feet in diameter and weighs approximately 250 pounds.</p>
<p>Sages call these creatures monstrous solifugids or monstrous solpugids. Less educated people sometimes call them giant camel spiders or giant false spiders.</p>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [17, 15, 14, 1, 10, 2, 2, 3],
            'feats' => [
                'Improved Grapple',
            ],
            'features' => [
                'darkvision' => ['meta' => '60 ft'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Stirge';
        $monster->size        = 'Tiny';
        $monster->alignment   = '-';
        $monster->armor_class = '15';
        $monster->hit_dice    = 1;
        $monster->speed       = '10 ft / Climb 40 ft';
        $monster->actions     = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 0 ft, one target. (1D4 -3) Piercing. The stirge attaches to the target. While attached, the stirge doesn't attack. Instead, at the start of each of the stirge's turns, the target loses 5 (1d4 +3) hit points due to blood loss.
The stirge can detach itself by spending 5 feet of its movement. It does so after it drains 10 hit points of blood from the target or the target dies. A creature, including the target, can use an Action to detach the stirge.</dd>
</dl>";
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [4, 16, 11, 2, 8, 6, .125, 2],
            'features' => [
                'darkvision' => ['meta' => '60 ft'],
            ],
            'feats' => ['Weapon Finesse'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Red Tiger';
        $monster->size        = 'Large';
        $monster->alignment   = '-';
        $monster->armor_class = '11';
        $monster->hit_dice    = 8;
        $monster->speed       = '40 ft / Climb 20 ft';
        $monster->actions     = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +6) Slashing</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 +6) Piercing</dd>
</dl>';
        $monster->description = "<p>A variety of tigers are common in the North, the red tiger is also known as the snow cat. The animal's coat changes with the seasons: rust-red in autumn, dappled white in winter, and golden brown in spring and summer. The animal is somewhat hardier and hardier than other tigers common in other lands.</p>";
        $helper->saveMonster($monster, ['Animal'], [
            'stats' => [23, 15, 18, 2, 12, 6, 4],
            'saves' => [
                'CON' => ['bonus' => 4],
                'DEX' => ['bonus' => 5],
            ],
            'skills' => [
                'Acrobatics' => ['dc' => 8],
                'Athletics'  => ['dc' => 12],
                'Stealth'    => ['dc' => 8],
                'Perception' => ['dc' => 6],
            ],
            'features' => [
                'keen_sense' => ['meta' => 'Scent'],
                'darkvision' => ['meta' => '60 ft'],
            ],
            'feats' => [
                'Two-Weapon Fighter',
                'Improved Grapple',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Great Snow Tiger';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '40 feet / 10 Climb';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +6) Slashing</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 +6) Piercing</dd>
</dl>';
        $monster->description = "<p>The great snow tiger is a carnivorous beast found throughout northern and eastern Faerun, though it is most common in Rashemen. There, berserkers revere its speed, strength, and hunting skill, and often try to emulate in appearance.</p>
<p>The Rashemen's admiration for the snow tiger does not preclude hunting the beast, in fact, it is considered a singular honor to have taken down one single-handedly. Hunting snow tigers alone, unarmed, and armed only with a broad sword or a bow is a popular sport among Rashemaar nobles.</p>
<p>Snow tigers are vividly portrayed in Rashemaar legends, where they are credited with all manners of cunning, intelligence, and ferocity. Though dangerous predators and a fierce challenge to hunt, snow tigers are simply another large predator fighting for survival in Rashemen's harsh climate. Tales of intelligent tigers luring prey in doom are but tales.</p>
<p>Normally solitary, snow tigers may be encountered in mated pairs during spring and summer. During this period there is a 25% chance that a pair will have 1-2 cubs. Rashemaar hunters sometimes take cubs and raise them as pets, training them to hunt. In order to be successfully trained, the cub must be less than three months old and the trainer must make three successive Animal Handling checks. Only one check may be made per week, and if one fails the trainer must start all over again. Once a cub is over three months old, it cannot be trained and is usually returned to the wild.</p>
<p>Cloaks of snow tiger fur are symbols of status among the Rashemaar. They are never sold and may only be worn by individuals who successfully slew the tiger that became the cloak. Individuals who wear cloaks thay are not entitled to are usually attacked by Rashemaar who learn their secret.</p>
<p>A cunning and resourceful predator, snow tigers prefer larger prey such as deer, mountain goats, sheep, and horses. During the depths of winter, snow tigers are sometimes reduced to stalking mice, rabbits, foxes and other small game.</p>
<p>A few are intelligent enough to realize that humans are relatively easy prey, but this is rare. Most snow tigers avoid humans and attack only if cornered or starving.</p>";
        $helper->saveMonster($monster, ['Animal'], [
            'stats'     => [22, 16, 18, 2, 10, 6, 3],
            'saves'     => [
                'CON' => ['bonus' => 2],
                'DEX' => ['bonus' => 4],
            ],
            'skills'    => [
                'Acrobatics' => ['dc' => 7],
                'Athletics'  => ['dc' => 10],
                'Stealth'    => ['dc' => 7],
                'Perception' => ['dc' => 6],
            ],
            'features'  => [
                'keen_sense' => ['meta' => 'Scent'],
                'darkvision' => ['meta' => '60 ft'],
            ],
            'feats'     => [
                'Two-Weapon Fighter',
                'Improved Grapple',
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Toad, Giant';
        $monster->size        = 'Large';
        $monster->alignment   = '-';
        $monster->armor_class = '10';
        $monster->hit_dice    = 6;
        $monster->speed       = '20 ft / Swim 40 ft';
        $monster->actions     = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D10 + 2) Piercing damage + 1D10 Poison. The target is Grappled (Escape DC 13). Until this Grapple ends, the target is Restrained and the toad can't bite another target.</dd>
    <dt>Swallow</dt> <dd>The toad makes one Bite attack against a Medium or smaller target it is Grappling. If the target hits, the target is swallowed, and the Grapple ends. The swallowed target is Blinded and Restrained, it has total cover against attacks and other effects outside the toad, and it takes 3D6 Acid damage at the start of each of the toad's turns. The toad can have only one target swallowed at a time. If the toad dies, a swallowed creature is no longer restrained by it and can escape from the corpse using 5 feet of movement, exiting prone.</dd>
</dl>";
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [15, 13, 13, 2, 10, 3, 1, 2],
            'skills' => [
                'Athletics'  => ['dc' => 15, 'meta' => 'Jumping'],
                'Perception' => ['dc' => 10],
            ],
            'features' => [
                'darkvision' => ['meta' => '30 ft'],
                'amphibious',
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Poisonous Toad';
        $monster->size        = 'Tiny';
        $monster->alignment   = '-';
        $monster->armor_class = '14';
        $monster->hit_dice    = 1;
        $monster->speed       = '10 ft / Swim 10 ft';
        $monster->actions     = '';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [1, 14, 6, 1, 8, 2, 0, 2],
            'skills' => [
                'Athletics'  => ['dc' => 12, 'meta' => 'Jumping'],
                'Perception' => ['dc' => 7],
            ],
            'features' => [
                'darkvision' => ['meta' => '20 ft'],
                'amphibious',
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Killer Whale';
        $monster->size             = 'Huge';
        $monster->alignment        = '-';
        $monster->armor_class      = '8';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 12;
        $monster->speed            = '0 ft / Swim 60 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon attack, 5 ft, one target. (5D6 +4) Piercing</dd>
    <dt>Hold Breath</dt> <dd>The whale can hold its breath for 30 minutes</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'    => [19, 10, 13, 3, 12, 7, 3, 2],
            'skills'   => ['Perception' => ['dc' => 3]],
            'features' => [
                'keen_sense' => ['meta' => 'Hearing'],
            ],
            'feats' => ['Blindsight' => ['meta' => "120 ft. Can't be used while Deafened"]],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Wolf';
        $monster->size             = 'Medium';
        $monster->alignment        = '-';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '1 (Natural Armor';
        $monster->hit_dice         = 2;
        $monster->speed            = '40 feet';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D4 +2 Piercing. If the target is a creature, it must succeed on a DC 11 STR Save or be knocked Prone.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [12, 15, 12, 3, 12, 6, .25, 2],
            'skills' => [
                'Perception' => ['dc' => 3],
                'Stealth'    => ['dc' => 4, 'meta' => '+10 if hiding in snowy terrain'],
            ],
            'features' => [
                'keen_sense' => ['meta' => 'Hearing and Smell'],
            ],
            'talents' => ['Improved Flanking'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Wolf, Dire';
        $monster->size             = 'Large';
        $monster->alignment        = '-';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 5;
        $monster->speed            = '50 feet';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D6 +3 Piercing. If the target is a creature, it must succeed on a DC 13 STR Save or be knocked Prone.</dd>
</dl>';
        $helper->saveMonster($monster, ['Animal'], [
            'stats'  => [17, 15, 15, 3, 12, 7, 1, 2],
            'skills' => [
                'Perception' => ['dc' => 3],
                'Stealth'    => ['dc' => 4],
            ],
            'features' => [
                'keen_sense' => ['meta' => 'Hearing and Smell'],
            ],
            'talents' => ['Improved Flanking'],
        ]);
    }
}
