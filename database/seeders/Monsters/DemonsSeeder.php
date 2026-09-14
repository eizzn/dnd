<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class DemonsSeeder extends Seeder
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

        $monster              = new Monster;
        $monster->name        = 'Manes';
        $monster->size        = 'Small';
        $monster->type        = 'Demon';
        $monster->alignment   = 'CE';
        $monster->armor_class = '9';
        $monster->hit_dice    = 2;
        $monster->speed       = '20 ft';
        $monster->actions     = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack +3 to hit, reach 5 ft, one target. 1D4 Slashing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Demon', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Familiar'], [
            'stats'    => [10, 9, 13, 3, 8, 4, .125, 2],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'vulnerability' => ['meta' => 'Axiomatic, Cold Iron, Holy'],
                'resistance'    => ['meta' => 'Cold, Fire, Electricity'],
                'immunity'      => ['meta' => 'Poison, Charm, Frightened'],
            ],
            'languages' => ['Abyssal' => ['meta' => "Understand but can't speak"]],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Dretch';
        $monster->size             = 'Small';
        $monster->type             = 'Demon';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '20 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 3 (1D6) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 5 (2D4) Slashing.</dd>
    <dt>Fetid Cloud (1/day)</dt> <dd>A 10-foot radius of disgusting green gas extends out from the dretch. The gas spreads around corners, and its area is lightly obscured. It lasts for 1 minute or until a strong wind disperses it. Any creature that starts its turn in that area must succeed on a DC 11 CON Save or be Slowed until the end of its next turn.</dd>
</dl>';
        $helper->saveMonster($monster, ['Demon', 'Fiend', 'Outer Planes', 'Evil', 'Outsider'], [
            'stats'    => [11, 11, 12, 5, 8, 3, .25, 2],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'vulnerability' => ['meta' => 'Axiomatic, Cold Iron, Holy'],
                'resistance'    => ['meta' => 'Cold, Fire, Electricity'],
                'immunity'      => ['meta' => 'Poison'],
                'multi_attack'  => ['meta' => 'If the dretch makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The dretch can only gain this additional Action once per turn.'],
            ],
            'languages' => ['Abyssal', 'Telepathy' => ['meta' => '60 ft. works only with creatures that understand Abyssal']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Quasit';
        $monster->size             = 'Tiny';
        $monster->type             = 'Demon';
        $monster->alignment        = 'CE';
        $monster->armor_class      = 14;
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '40 ft';
        $monster->actions          = "<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D1 Piercing + 2D4 Poison. The target must succeed on a DC 10 CON Save or take the Poison damage and become Sickened 3 for 1 minute. The target can repeat the Save at the end of its turns, ending the Sickened condition.</dd>
    <dt>Bite (Beast Forms) +3</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D4 + 2D4 Poison. Save vs Poison as Claw.</dd>
    <dt>Scare (1/day)</dt> <dd>One creature of the quasit's choice within 20 ft of it must succeed on a DC 10 WIS Save or be Frightened for 1 minute. The target can repeat the Save at the end of each of its turns, with Disadvantage if the quasit is within line of sight, ending the effect on itself on a success.</dd>
    <dt>Shapechanger</dt> <dd>The quasit can use its Action to Polymorph into an Animal: Bat (10 ft/Fly 40 ft), Centipede (40ft/Climb 40 ft), or Toad (40 ft/Swim 40 ft). Any equipment it's carrying isn't transformed. It reverts to its true form if it dies.</dd>
</dl>";
        $monster->description      = '
<dl>
    <dt>Animal Companion</dt> <dd>3rd Level Spell Slot (Ranger 1st Level Spell Slot).</dd>
</dl>';
        $helper->saveMonster($monster, ['Demon', 'Fiend', 'Shapechanger', 'Outer Planes', 'Evil', 'Outsider', 'Animal Companion'], [
            'stats'    => [5, 17, 10, 7, 10, 10, 2, 2],
            'features' => [
                'magic_resistance',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Axiomatic, Cold Iron, Holy'],
                'resistance'    => ['meta' => 'Cold, Fire, Electricity, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Poison'],
            ],
            'spells' => [
                'Invisibility' => ['meta' => 'At will (Self only)'],
            ],
            'languages' => ['Abyssal'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Chasme';
        $monster->size             = 'Medium';
        $monster->type             = 'Demon';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '20 ft / Fly 60 ft';
        $monster->actions          = "<dl>
    <dt>Proboscis</dt> <dd>Melee Weapon Attack, reach 5 ft, one creature. Hit: 16 (4d6 + 2) Piercing damage plus 24 (7d6) Negative damage, and the target's Hit Point maximum is reduced by an amount equal to the Negative damage taken. If this effect reduces a creature's Hit Point maximum to 0, the creature dies. This reduction to a creature's Hit Point maximum lasts until the creature finishes a Long Rest or until it is affected by a spell like Restoration.</dd>
</dl>";
        $helper->saveMonster($monster, ['Demon', 'Fiend', 'Outer Planes', 'Evil', 'Outsider'], [
            'stats'    => [15, 15, 12, 11, 14, 10, 4, 2],
            'features' => [
                'magic_resistance',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Axiomatic, Cold Iron, Holy'],
                'resistance'    => ['meta' => 'Cold, Fire, Electricity'],
                'immunity'      => ['meta' => 'Poison'],
                'aura'          => ['meta' => 'The chasme creates a droning sound that is similar to a Sleep spell within 30 ft of the chasme while they are flapping thier wings. Other demons are immune to this effect.'],
            ],
            'spells' => [
                'Spider Climb' => ['meta' => 'At will as a Free Action. Treat as a innate ability.'],
            ],
            'saves' => [
                'DEX' => ['bonus' => 3],
                'WIS' => ['bonus' => 3],
            ],
            'languages' => ['Abyssal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Barlgura';
        $monster->size             = 'Large';
        $monster->type             = 'Demon';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 8;
        $monster->speed            = '40 ft / Climb 40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one creature. Hit: 11 (2d6 + 4) Piercing.</dd>
    <dt>Fist</dt> <dd>Melee Weapon Attack, reach 5 ft, one creature. Hit: 9 (1D10 + 4) Bludgeoning.</dd>
</dl>';
        $helper->saveMonster($monster, ['Demon', 'Fiend', 'Outer Planes', 'Evil', 'Outsider'], [
            'stats'    => [18, 15, 16, 7, 14, 9, 5, 2],
            'features' => [
                'magic_resistance', 'rage',
                'darkvision'          => ['meta' => '120 ft'],
                'vulnerability'       => ['meta' => 'Axiomatic, Cold Iron, Holy'],
                'resistance'          => ['meta' => 'Cold, Fire, Electricity'],
                'immunity'            => ['meta' => 'Poison'],
                'innate_spellcasting' => ['meta' => 'INT DC 13'],
                'multi_attack'        => ['meta' => 'If the barlgura makes a successful Fist attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The barlgura can only gain this additional Action once per turn.'],
            ],
            'spells' => [
                'Disguise Self'    => ['meta' => '2/day'],
                'Invisibility'     => ['meta' => '2/day (Self only)'],
                'Entangle'         => ['meta' => '1/day'],
                'Phantasmal Force' => ['meta' => '1/day'],
            ],
            'feats'     => ['Extra Rage', 'Two-Weapon Fighter'],
            'talents'   => ['Leap Attack'],
            'saves'     => [
                'DEX' => ['bonus' => 5],
                'CON' => ['bonus' => 36],
            ],
            'languages' => ['Abyssal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Vrock';
        $monster->size             = 'Large';
        $monster->type             = 'Demon';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 11;
        $monster->speed            = '40 ft / Fly 60 ft';
        $monster->actions          = "<dl>
    <dt>Beak</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D6 + 3 Piercing.</dd>
    <dt>Talons</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D10 + 3 Slashing.</dd>
    <dt>Spores (Recharge 6)</dt> <dd>A 15-foot-radius cloud of toxic spores extends out from the vrock. The spores spread around corners. Each creature in that area must succeed on a DC 14 CON Save or become Sickened 1. While Sick in this way, a Target takes 5 (1D10) Poison damage at the start of each of its turns. A Target can repeat the Save at the end of each of its turns, ending the effect on itself on a success. Emptying a vial of Holy Water on the target also ends the effect on it.</dd>
    <dt>Stunning Screech (1/day)</dt> <dd>The vrock emits a horrific screech. Each creature within 20 feet of it that can hear it and that isn't a demon must succeed on a DC 14 CON Save or be Stunned until the end of the vrock's next turn.</dd>
</dl>";
        $monster->description      = '

<h4>Known Vrocks</h4>
<ul>
    <li>Shaakat: sent to uncover the legendary bloodforge for General Raachaak circa 1377 DR.</li>
    <li>Rejik: sent to uncover the legendary bloodforge for General Raachaak circa 1377 DR.</li>
    <li>Morbaat: sent to uncover the legendary bloodforge for General Raachaak circa 1377 DR.</li>
    <li>Baskshu: Servant of Eltab</li>
    <li>Karrian: Servant of Eltab</li>
</ul>';
        $helper->saveMonster($monster, ['Demon', 'Fiend', 'Outer Planes', 'Evil', 'Outsider'], [
            'stats'    => [17, 15, 18, 8, 13, 8, 6, 3],
            'features' => [
                'magic_resistance',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Axiomatic, Cold Iron, Holy'],
                'resistance'    => ['meta' => 'Cold, Fire, Electricity, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Poison'],
            ],
            'feats' => ['Two-Weapon Fighter'],
            'saves' => [
                'DEX' => ['bonus' => 5],
                'WIS' => ['bonus' => 4],
                'CHA' => ['bonus' => 2],
            ],
            'languages' => ['Abyssal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Hezrou';
        $monster->size             = 'Large';
        $monster->type             = 'Demon';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 13;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 15 (2D10 + 4) Piercing.</dd>
    <dt>Talons</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 11 (2D6 + 4) Slashing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Demon', 'Fiend', 'Outer Planes', 'Evil', 'Outsider'], [
            'stats'    => [19, 17, 20, 5, 12, 13, 8, 3],
            'features' => [
                'magic_resistance',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Axiomatic, Cold Iron, Holy'],
                'resistance'    => ['meta' => 'Cold, Fire, Electricity, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Poison'],
                'multi_attack'  => ['meta' => 'If the hezrou makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The hezrou can only gain this additional Action once per turn.'],
                'aura'          => ['meta' => 'Stench. Any creature that starts its turn within 10 feet must make a DC 14 CON Save or Sick: 2. A successful Save makes the target immune to this effect for 24 hours'],
            ],
            'feats' => ['Two-Weapon Fighter'],
            'saves' => [
                'STR' => ['bonus' => 7],
                'CON' => ['bonus' => 8],
                'WIS' => ['bonus' => 4],
            ],
            'languages' => ['Abyssal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Glabrezu';
        $monster->size             = 'Large';
        $monster->type             = 'Demon';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 15;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Pincer</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 2D10 + 5 Bludgeoning.</dd>
    <dt>Fist</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D4 + 2 Bludgeoning.</dd>
</dl>';
        $monster->description      = "

<h4>Known Glabrezus</h4>
<ul>
    <li>Belshazu: Father of the draegloth Jeggred Baenre</li>
    <li>Bizmatec: Acted as the balor Errtu's second-in-command</li>
    <li>Mizferac: Summoned on a regular basis by Cadderly for a tenday until he brought news of Jarlaxle, Artemis Entreri and Crenshinibon coming to see the priest. Immediately after, he was banished for a hundred years by Cadderly after threatening Cadderly's family. He was later summoned again by Cadderly, rescinding the banishment.</li>
    <li>
        Quinix: living in the ruins of the Gate of Iron Fangs on the southwestern tip of the Forest of Amtar.<br/>
        <span style=\"display:inline-block; margin-left: 3px;\">He traveled through a portal into the Forest of Amtar. The ruins of the gate were also the home of a large tribe of gnolls whom he easily took control over. The gnolls thought that he was a representative of their \"god\" Yeenoghu. He used them for raids in the near area from Dambrath, Channathgate and Rethmar. He planned to recruit humans as spies and soldiers. The Swagdar seemed the best suited for this task. His ultimate goal was to raid Halruaa since the magically rich country promised the best profit.</span>
    </li>
</ul>";
        $helper->saveMonster($monster, ['Demon', 'Fiend', 'Outer Planes', 'Evil', 'Outsider'], [
            'stats'    => [20, 15, 21, 19, 17, 16, 9, 4],
            'features' => [
                'darkvision'           => ['meta' => '120 ft'],
                'vulnerability'        => ['meta' => 'Axiomatic, Cold Iron, Holy'],
                'resistance'           => ['meta' => 'Cold, Fire, Electricity, [Bludgeoning, Piercing, Slashing]'],
                'immunity'             => ['meta' => 'Poison'],
                'multi_attack'         => ['meta' => 'The glabrezu gains an additional Action. This additional Action can only be used to make a Melee Attack with it\'s Pincer.'],
                'innate_spellcasting'  => ['meta' => 'INT DC 16'],
                'legendary_resistance' => ['meta' => '1/day'],
                'magic_resistance',
            ],
            'feats' => ['Two-Weapon Fighter', 'Improved Two-Weapon Fighter'],
            'saves' => [
                'STR' => ['bonus' => 9],
                'CON' => ['bonus' => 9],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 7],
            ],
            'spells' => [
                'True Seeing'     => ['meta' => 'At will'],
                'Darkness'        => ['meta' => 'At will'],
                'Detect Magic'    => ['meta' => 'At will'],
                'Dispel Magic'    => ['meta' => 'At will'],
                'Confusion'       => ['meta' => '1/day'],
                'Fly'             => ['meta' => '1/day'],
                'Power Word Stun' => ['meta' => '1/day'],
            ],
            'languages' => ['Abyssal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Yochlol';
        $monster->size             = 'Medium';
        $monster->type             = 'Demon';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 16;
        $monster->speed            = '30 ft / Climb 30 ft';
        $monster->actions          = "<dl>
    <dt>Tentacle</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 2D4 +2 Bludgeoning damage.</dd>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D6 +2 Bludgeoning damage + 6D6 Poison damage.</dd>
    <dt>Mist Form</dt> <dd>The yochlol transform into toxic mist or reverts to its true form. Any equipment it is wearing or carrying is also transformed. It reverts to its true form if it dies. While in mist form, the yochlol is incapacitated and can't speak. It has a Flying Speed of 30 ft, can hover, and can pass through any space that isn't airtight. It has Advantage on STR, DEX, and CON Saves, and it is immune to Bludgeoning, Piercing, and Slashing damage. While in mist form, the yochlol can enter a creature's space and stop there. Each time a creature starts its turn with the yochlol in its space, the creature must succeed on a DC 14 CON Save or be Sickened 5 until the start of its next turn. While Sick in this way, the target is Incapacitated.</dd>
    <dt>Web Walker</dt> <dd>THe yochlol ignores movement restrictions caused by webbing.</dd>
    <dt>Shapechanger</dt> <dd>The yochlol can use a Double Action to Polymorph into a form that resembles a female drow or Giant Spider, or back into its true form. Its statistics are the same in each form. Any equipment it is wearing or carrying isn't transformed. It reverts to its true form if it dies.</dd>
</dl>";
        $monster->description      = "<p>Lolth, the Queen of Spiders, is one of many powers that call the Abyss home. Her infinite maze of black webs fills an entire layer. While Lolth is preoccupied with the affairs of drow throughout the multiverse, she doesn't ignore the balance of power within the Abyss. The yochlol are her servants in her home layer and her agents on the Outer Planes. No other type of tanar'ri has such a close relationship with a power that inhabits the Abyss; in fact, the yochlol are known as the Handmaidens of Lolth in some circles.</p>
<p>In their natural form, the yochlol bear a passing resemblance to a roper — they're man-size heaps of amorphous slime, with eight powerful tentacles and a single, glaring, red eye. However, they can also assume the form of beautiful young woman of human or elven race (usually drow), or take the form of a giant black spider.</p>
<p>Yochlol stand apart from the common tanar'ri causes, existing only to serve their dark mistress in whatever tasks she sets before them. They couldn't care less about the Blood War. The only part of the Abyss where the yochlol are common is in Lolth's pits; they don’t leave their home layer except when Lolth commands them to, and even then they're more likely to be sent to the Prime than any other part of the Abyss.</p>
<p>The origin of the yochlol is shrouded in mystery and speculation. Some believe that they were once mortal followers of Lolth who were transformed into demons as a reward for their loyalty and devotion. Others suggest that they were created by Lolth from her own essence, or from some ancient and powerful spider-like creatures that she corrupted and enslaved.</p>
<p>Regardless of their origin, the yochlol have always been loyal to Lolth and her schemes. They serve as her eyes and ears in the Abyss and beyond, spying on her enemies and allies alike. They also act as her messengers and emissaries, delivering her commands and threats to those who would oppose or worship her.</p>
<p>The yochlol are cunning and deceptive creatures, adept at manipulating others to serve their own ends. They enjoy tormenting and corrupting mortals, especially those who are faithful to other gods or ideals. They often infiltrate drow societies, posing as priestesses or nobles, and sow discord and strife among them. They also tempt drow with promises of power and favor from Lolth, luring them into traps or betrayals.</p>
<p>The yochlol are not mindless servants, however. They have their own personalities and goals, which sometimes conflict with Lolth's plans or interests. They can also form genuine friendships or even love with charismatic mortals, though such relationships are often doomed by their loyalty to Lolth or by the hatred of other demons.
<p>The yochlol are feared and hated by most other demons, who see them as favored pets of Lolth and rivals for her attention. The yochlol are immune to attacks from other demons, unless Lolth allows it or orders it. The yochlol often abuse this privilege, taunting and provoking other demons without fear of retaliation.</p>
<h4>Known Yochlols</h4>
<ul>
    <li>Azarell: potential companion of a group that rescued villagers from Menzoberranzan</li>
    <li>Bolifaena: seen in Icewind Dale</li>
    <li>Eskavidne: aided Matron Zhindia Melarn to summon demons and resurrect driders</li>
    <li>Savera: infiltrated the Sildëyuir</li>
    <li>Y'lara: sent by Lolth to help Gromph Baenre summon a demon lord</li>
    <li>Yiccardaria: served as the emissary for the reborn Yvonnel Baenre</li>
</ul>";
        $helper->saveMonster($monster, ['Demon', 'Fiend', 'Outer Planes', 'Evil', 'Shapechanger', 'Outsider'], [
            'stats'    => [15, 14, 18, 13, 15, 15, 10, 5],
            'features' => [
                'darkvision'           => ['meta' => '120 ft'],
                'vulnerability'        => ['meta' => 'Axiomatic, Cold Iron, Holy'],
                'resistance'           => ['meta' => 'Cold, Fire, Electricity, [Bludgeoning, Piercing, Slashing]'],
                'immunity'             => ['meta' => 'Poison'],
                'multi_attack'         => ['meta' => 'The yochlol gains an additional Action. This additional Action can only be used to make a Tentacle attack'],
                'power_points'         => ['meta' => '7 Power Points'],
                'legendary_resistance' => ['meta' => '2/day'],
                'magic_resistance', 'spider_climb',
            ],
            'saves'    => [
                'DEX' => ['bonus' => 6],
                'INT' => ['bonus' => 5],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 6],
            ],
            'spells'   => [
                'Charm' => ['meta' => 'At will. Once per day, the yochlol can cast a Heightened +3 version'],
                'Web'   => ['meta' => 'At will.'],
            ],
            'powers'   => [
                'Sense Minds', 'Read Thoughts',
            ],
            'languages' => ['Abyssal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Nalfeshnee';
        $monster->size             = 'Large';
        $monster->type             = 'Demon';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 16;
        $monster->speed            = '20 ft / Fly 30 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 5D10 + 5 Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 3D6 + 5 Slashing.</dd>
    <dt>Horror Nimbus (Recharge 5-6)</dt> <dd>The nalfeshnee magically emits scintillating, multicolored light. Each creature within 15 feet of the nalfeshnee that can see the light must succeed on a DC 15 WIS Save or be Frightened for 1 minute. A creature can repeat the Save at the end of each of its turns, ending the effect on itself on a success. If a creature\'s saving throw is successful or the effect ends for it, the creature is immune to the nalfeshnee\'s Horror Nimbus for the next 24 hours.</dd>
</dl>';
        $helper->saveMonster($monster, ['Demon', 'Fiend', 'Outer Planes', 'Evil', 'Outsider'], [
            'stats'    => [21, 10, 22, 19, 12, 15, 13, 5],
            'features' => [
                'darkvision'           => ['meta' => '120 ft'],
                'vulnerability'        => ['meta' => 'Axiomatic, Cold Iron, Holy'],
                'resistance'           => ['meta' => 'Cold, Fire, Electricity, [Bludgeoning, Piercing, Slashing]'],
                'immunity'             => ['meta' => 'Poison'],
                'multi_attack'         => ['meta' => 'If the nalfeshnee makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The nalfeshnee can only gain this additional Action once per turn.'],
                'legendary_resistance' => ['meta' => '2/day'],
                'magic_resistance',
            ],
            'feats' => ['Two-Weapon Fighter'],
            'saves' => [
                'CON' => ['bonus' => 11],
                'INT' => ['bonus' => 9],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 7],
            ],
            'spells' => [
                'Teleport'    => ['meta' => 'At will as a Double Action, with a range of 120 feet'],
                'True Seeing' => ['meta' => 'At will'],
            ],
            'languages' => ['Abyssal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Marilith';
        $monster->size             = 'Large';
        $monster->type             = 'Demon';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '15 (+2 for Two-Weapon Parry)';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 18;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Longsword +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D8 + 4 Slashing. Each of the 6 longswords can have additional abilities.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 2D10 + 4 Bludgeoning. If the target is Medium or smaller, it is Grappled (escape DC 19). Until this Grapple ends, the target is restrained, the marilith can automatically hit the target with its tail, and the marilith can\'t make tail attacks against other targets.</dd>
</dl>';
        $monster->description      = "

<h4>Known Mariliths</h4>
<ul>
    <li>Marilith: This is the great demon for whom the race of mariliths are named.<br/>
        <span style=\"display:inline-block; margin-left: 3px;\">In 1485–1486 DR, Marilith was among the demons that wandered the streets of Menzoberranzan and participated in the failed defense of Q'Xorlarrin against the dwarves.</span>
    </li>
    <li>Muvassys the Sceptered: mother of Kaanyr Vhok and a member of the three mariliths known as the \"Triumvirate\"</li>
    <li>Reluhantis: personal attendant to the demon lord Graz'zt.</li>
    <li>Unhath: personal attendant to the demon lord Graz'zt.</li>
    <li>Vhissilka: commander serving the balor lord Axithar</li>
</ul>";
        $helper->saveMonster($monster, ['Demon', 'Fiend', 'Outer Planes', 'Evil', 'Outsider'], [
            'stats'    => [18, 20, 20, 18, 16, 20, 16, 5],
            'features' => [
                'darkvision'           => ['meta' => '120 ft'],
                'vulnerability'        => ['meta' => 'Axiomatic, Cold Iron, Holy'],
                'resistance'           => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'             => ['meta' => 'Poison'],
                'multi_attack'         => ['meta' => 'The marilith may use an Action to make 2 Melee Weapon Attacks'],
                'legendary_resistance' => ['meta' => '3/day'],
                'magic_resistance',
            ],
            'saves' => [
                'STR' => ['bonus' => 9],
                'CON' => ['bonus' => 10],
                'WIS' => ['bonus' => 8],
                'CHA' => ['bonus' => 10],
            ],
            'feats'   => ['Two-Weapon Fighter'],
            'talents' => ['Improved Reaction', 'Two-Weapon Parry'],
            'spells'  => [
                'Teleport'    => ['meta' => 'At will as a Triple Action, with a range of 120 feet'],
                'True Seeing' => ['meta' => 'At will'],
            ],
            'languages' => ['Abyssal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Balor';
        $monster->size             = 'Huge';
        $monster->type             = 'Demon';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 24;
        $monster->speed            = '40 ft / Fly 80 ft';
        $monster->actions          = "<dl>
    <dt>Anarchic Unholy Greater Shock Longsword +2</dt> <dd>Melee Weapon Attack +16, reach 10 ft, one target. 3D8 + 10 Slashing + 3D6 Electricity.</dd>
    <dt>Unholy Greater Flaming Whip +2</dt> <dd>Melee Weapon Attack +16, reach 30 ft, one target. 2D6 + 10 Slashing + 3D6 Fire. The target must succeed on a DC 20 STR Save or be pulled up to 25 feet toward the balor.</dd>
    <dt>Fire Aura</dt> <dd>A balor may with an Action, burn with intense fire that lasts until dispelled (with another Action). At the start of each of the balor's turns, each creature within 5 feet of it takes 10 (3D6) Fire damage and flammable objects in the aura that aren\'t being worn or carried ignite. A creature that touches the balor or hits it with a melee attack while within 5 feet takes 10 (3D6) Fire damage.</dd>
</dl>";
        $monster->description      = "

<h4>Known Balors</h4>
<ul>
    <li>Balor: has served all the demon lords at one point or another in his life. He was favored by Baphomet and Kostchtchie.<br/>
        <span style=\"display:inline-block; margin-left: 3px;\">In 1485 DR, Balor was accosted by the goddess Lolth, who was then allied with Balor's greatest rival, the balor Errtu. Lolth destroyed his minions, poisoned him, and entrapped him in a web cocoon. She did this as part of her agreement with Errtu to get rid of demon lords in the Abyss in return for his aid in her plan to weaken the barriers between the Abyss and the Prime Material Plane. While Balor cannot move directly against Lolth, he takes any opportunity to oppose Errtu.
    </li>
    <li>Belaphoss the Mad: a powerful balor, who serves as a lieutenant to Demogorgon. His chief ambition is to become the demon lord himself, and supplant Demogorgon as ruler of the Gaping Maw.</li>
    <li>Wendonai: See entry in gods</li>
    <li>
        <p>Errtu: Errtu seeked to gain possession of the artifact Crenshinibon. He ended up being banished by Drizz't Do'Urden and has sworn revenge.</p>
        <p>Errtu has since formed a loose alliance with Lolth when she approached him to guard Menzoberranzan during the Time of Troubles.</p>
        <p>The balor Wendonai opposes Errtu for the favor of Lolth.</p>
    </li>
    <li>Chare'en: part of the Army of Darkness that attacked Myth Drannor. He raised a huge gnoll army in the Thunder Peaks, before being defeated and imprisoned.</li>
    <li>Axithar: invaded the House of the Triad after the fall of Mystra.<br/>
        <span style=\"display:inline-block; margin-left: 3px;\">Not long after the death of Mystra (in 1385 DR), the cambion Kaanyr Vhok and his companions were captured by the marilith Vhissilka, who served Lord Axithar. Vhok abandoned his companions and allied with Axithar, providing information about the weaknesses of the House of the Triad so that Vhok could get his revenge for his treatment by the angel Tauran and so that he could reach the Lifespring, which he believed would give him the power to rule Sundabar as a glorious leader. Axithar's horde of demons invaded the plane and were nearing victory against the angels when Bahamut's legions appeared and defeated the demon armies.</span>
    </li>
    <li>Badrazel: In 1372 DR, during the Silence of Lolth, the half-fiend fire giant Kurgoth Hellspawn invaded Maerimydra with the balor Badrazel at his side. While Kurgoth made the Coliseum there his base, Badrazel continued to harry those that still resisted the invaders. He patrolled the heights of the cavern and tested the defenses of Castle Maerimydra on several occasions.</li>
    <li>Raachaak: a power-hungry balor, who sought to capture a legendary bloodforge in the 14th century DR.</li>
</ul>";
        $helper->saveMonster($monster, ['Demon', 'Fiend', 'Outer Planes', 'Evil', 'Outsider'], [
            'stats'    => [26, 15, 22, 20, 16, 22, 19, 6],
            'features' => [
                'darkvision'           => ['meta' => '120 ft'],
                'vulnerability'        => ['meta' => 'Axiomatic, Cold Iron, Holy'],
                'resistance'           => ['meta' => 'Cold, Electricity, [Bludgeoning, Piercing, Slashing]'],
                'immunity'             => ['meta' => 'Fire, Poison'],
                'death_effect'         => ['meta' => 'When the balor dies, it explodes, all creatures within 30 feet of it must make a DC 20 DEX Save, taking 70 (20D6) Fire damage on a failed Save, or half on a successful Save. The explosion ignites flammable objects.'],
                'legendary_resistance' => ['meta' => '3/day'],
                'magic_resistance',
            ],
            'saves' => [
                'STR' => ['bonus' => 14],
                'CON' => ['bonus' => 12],
                'WIS' => ['bonus' => 9],
                'CHA' => ['bonus' => 12],
            ],
            'feats'  => [
                'Brutal Critical', 'Two-Weapon Fighter', 'Improved Two-Weapon Fighter',
                'Power Attack', 'Multi Attacker', 'Improved Multi Attacker',
            ],
            'spells' => [
                'Teleport'    => ['meta' => 'At will as a Triple Action, with a range of 120 feet'],
                'True Seeing' => ['meta' => 'At will'],
            ],
            'languages' => ['Abyssal', 'Telepathy' => ['meta' => '120 ft']],
        ]);
    }
}
