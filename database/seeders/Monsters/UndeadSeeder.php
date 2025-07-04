<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class UndeadSeeder extends Seeder
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
        $monster->name             = 'Crawling Claw';
        $monster->size             = 'Tiny';
        $monster->alignment        = '-';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '0';
        $monster->hit_dice         = '2';
        $monster->speed            = '20 ft / Climb 20 ft';
        $monster->actions          = "<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, +2 to hit, reach 5 ft, one target. 1D4 Bludgeoning or Slashing Damage (Claw's choice)</dd>
</dl>";
        $helper->saveMonster($monster, ['Undead', 'Mindless'], [
            'stats'     => [8, 14, null, null, 10, 4, 0, 2],
            'features'  => [
                'immunity'      => ['meta' => 'Poison, Negative, Exhaustion, Charmed'],
            ],
            'feats' => ['Blindsight'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Skeleton';
        $monster->size             = 'Medium';
        $monster->alignment        = '-';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 2;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 3 (1D6) Slashing.</dd>
</dl>';
        $monster->description      = '<p>Skeletons can be fitted with armor (they are not capable of donning armor by themselves) and can wield any Simple Weapon (including Light Crossbows, but not Heavy Crossbows).</p>';
        $helper->saveMonster($monster, ['Undead', 'Mindless'], [
            'stats'    => [10, 12, null, null, 8, 5, .25, 2],
            'features' => [
                'immunity'      => ['meta' => 'Poison, Negative, Exhaustion'],
                'vulnerability' => ['meta' => 'Bludgeoning, Positive, Holy'],
                'slowed',
            ],
            'feats' => ['Blindsight'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Zombie';
        $monster->size        = 'Medium';
        $monster->alignment   = '-';
        $monster->armor_class = '8';
        $monster->hit_dice    = 3;
        $monster->speed       = '20 ft';
        $monster->actions     = '<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 4 (1D6 + 1) Bludgeoning.</dd>
</dl>';
        $monster->description = '<p>Zombies are not capable of donning armor, but they will continue to wear any armor that is donned for them. Zombies are not capable of wielding any weapons.</p>';
        $helper->saveMonster($monster, ['Undead', 'Mindless'], [
            'stats' => [13, 6, null, null, 6, 5, .25, 2],
            'saves' => [
                'WIS' => ['bonus' => 0],
            ],
            'features' => [
                'immunity'      => ['meta' => 'Poison, Negative, Exhaustion'],
                'vulnerability' => ['meta' => 'Positive, Holy'],
                'slowed',
            ],
            'feats' => ['Blindsight'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Ju Ju Zombie';
        $monster->size        = 'Medium';
        $monster->alignment   = 'any';
        $monster->armor_class = '10';
        $monster->hit_dice    = 4;
        $monster->speed       = '30 ft';
        $monster->actions     = '<dl>
    <dt>Slam</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 6 (1D6 + 3) Bludgeoning.</dd>
</dl>';
        $monster->description = '<p>Ju Ju Zombies can use armor and weapons.</p>';
        $helper->saveMonster($monster, ['Undead'], [
            'stats' => [16, 10, null, 12, 10, 9, 1, 2],
            'saves' => [
                'WIS' => ['bonus' => 4],
            ],
            'features' => [
                'immunity'      => ['meta' => 'Poison, Negative, Exhaustion'],
                'vulnerability' => ['meta' => 'Positive, Holy'],
                'slowed',
            ],
            'feats' => ['Blindsight'],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Ghoul';
        $monster->size        = 'Medium';
        $monster->alignment   = 'CE';
        $monster->armor_class = '12';
        $monster->hit_dice    = 4;
        $monster->speed       = '30 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 7 (2D6 + 1) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 6 (2D4 + 1) Slashing. If the target is a creature other than an elf or Undead, it must succeed on a DC 10 CON Save or be Paralyzed for 1 minute. The target can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</dd>
</dl>';
        $helper->saveMonster($monster, ['Undead'], [
            'stats'    => [13, 15, null, 7, 10, 6, 1, 2],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'immunity'      => ['meta' => 'Poison, Negative, Exhaustion'],
                'vulnerability' => ['meta' => 'Positive, Holy'],
            ],
            'languages' => [
                'Special' => ['meta' => 'All languages it knew in life but cannot speak'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Baneguard';
        $monster->size             = 'Medium';
        $monster->alignment        = '-';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Sword</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +3) Slashing</dd>
</dl>';
        $monster->description = '';
        $helper->saveMonster($monster, ['Undead'], [
            'stats'    => [16, 11, null, 9, 12, 13, 2, 2],
            'features' => [
                'immunity'      => ['meta' => 'Poison, Negative, Exhaustion'],
                'resistance'    => ['meta' => 'Slashing, Piercing'],
                'vulnerability' => ['meta' => 'Positive, Holy'],
            ],
            'spells' => [
                'Magic Missile' => ['meta' => '4/day'],
                'Blink'         => ['meta' => '2/day'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Ghast';
        $monster->size        = 'Medium';
        $monster->alignment   = 'CE';
        $monster->armor_class = '13';
        $monster->hit_dice    = 4;
        $monster->speed       = '30 ft';
        $monster->actions     = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack +5 to hit, reach 5 ft, one target. 8 (2D6 + 2) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack +5 to hit, reach 5 ft, one target. 6 (2D4 + 2) Slashing. If the target is a creature other than an elf or Undead, it must succeed on a DC 10 CON Save or be Paralyzed for 1 minute. The target can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</dd>
</dl>';
        $helper->saveMonster($monster, ['Undead'], [
            'hit_points' => 20,
            'stats'      => [16, 17, null, 11, 10, 8, 2, 2],
            'features'   => [
                'darkvision'    => ['meta' => '60 ft'],
                'immunity'      => ['meta' => 'Poison, Negative, Exhaustion'],
                'vulnerability' => ['meta' => 'Positive, Holy'],
                'aura'          => ['meta' => 'Stench. Any creature that starts its turn within 10 feet must make a DC 10 CON Save or Sick: 1. A successful Save makes the target immune to this effect for 24 hours'],
            ],
            'feats'     => ['Turn Resistance'],
            'languages' => [
                'Special' => ['meta' => 'All languages it knew in life'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Wight';
        $monster->size        = 'Medium';
        $monster->alignment   = 'NE';
        $monster->armor_class = '12';
        $monster->hit_dice    = 4;
        $monster->speed       = '30 ft';
        $monster->actions     = "<dl>
    <dt>Life Drain</dt> <dd>Melee Weapon Attack +5 to hit, reach 5 ft, one target. 2 CON.</dd>
    <dt>Create Zombie</dt> <dd>The wight can create a zombie from the dead body within 10 feet that this wight has killed by draining its life. This must be done within 1 hour or the body can no longer be raised in this way. The zombie is under the wight's control and the wight can have no more than 7 zombies under its control at one time. Any additional zombie causes one to become an uncontrolled zombie (wight's choice).</dd>
</dl>";
        $monster->description = '<p>Wights often arm themselves with any armor and weapons that they can scavenge.</p>';
        $helper->saveMonster($monster, ['Undead'], [
            'hit_points' => 10,
            'stats'      => [15, 14, null, 10, 13, 15, 3, 2],
            'features'   => [
                'darkvision'    => ['meta' => '60 ft'],
                'resistance'    => ['meta' => '[Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Poison, Negative, Exhaustion'],
                'vulnerability' => ['meta' => 'Positive, Holy'],
                'sunlight_sensitivity',
            ],
            'skills' => [
                'Perception' => ['dc' => 3],
                'Stealth'    => ['dc' => 4],
            ],
            'languages' => [
                'Special' => ['meta' => 'All languages it knew in life'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Ghost';
        $monster->size        = 'Medium';
        $monster->alignment   = 'any';
        $monster->armor_class = '12';
        $monster->hit_dice    = 4;
        $monster->speed       = '0 ft / Fly 40 ft (hover)';
        $monster->actions     = '<dl>
    <dt>Withering Touch</dt> <dd>Melee Touch Attack +2 to hit, reach 5 ft, one target. 2 (1D4) Negative damage + 2 STR damage.</dd>
    <dt>Etherealness</dt> <dd>The ghost can enter the Ethereal Plane from the Material Plane, or vice cersa as a Double Action. It is visible on the Material Plane while it is in the Border Ethereal, and vice versa, yet it can\'t affect or be affected by anything on the other plane. This ability also allows the ghost to see into the Ethereal Plane from the Material Plane or into the Material Plane from the Ethereal Plane.</dd>
    <dt>Horrifying Visage</dt> <dd>Each non-undead creature within 60 ft of the ghost that can see it must succeed on a DC 13 WIS Save or be Frightened for 1 minute. If the Save fails by 5 or more, the target also ages 1D4 X 10 years. A frightened target can repeat the Save at the end of each of its turns, ending the Frightened condition on itself on a Success. If a target\'s Save is successful or the effect ends, the target is immune to this ghost\'s Horrifying Visage for the next 24 hours. The aging effect can be reversed with a Restoration spell, but only within 24 hours of it occuring.</dd>
    <dt>Possession (Recharge 6)</dt> <dd>One humanoid that the ghost can see within 5 ft of it must succeed on a DC 13 CHA Save or be possessed by the ghost; the ghost then disappears, and the target is incapacitated and loses control of its body. The ghost now controls the body but doesn\'t deprive the target of awareness. The ghost can\'t be targeted by any attack, spell, or other effect, except ones that turn undead, and it retains its alignment, INT, WIS, CHA, and immunity to being Charmed, and Frightened. It otherwise uses the possessed target\'s statistics, but doesn\'t gain access to the target\'s knowledge, class features, or proficiencies. The possession lasts until the body drops to 0 Hit Points, the ghost ends it as an Action, or the ghost is turned or forced out by an effect like the Dispel Evil and Good spell. When the possession ends, the ghost reappears in an unoccupied space within 5 ft of the body. The target is immune to this ghost\'s Possession for 24 hours after succeeding on the Save or after the possession ends.</dd>
</dl>';
        $helper->saveMonster($monster, ['Undead', 'Incorporeal'], [
            'hit_points' => 10,
            'stats'      => [null, 14, null, 10, 10, 11, 1, 2],
            'features'   => [
                'darkvision'    => ['meta' => '60 ft'],
                'vulnerability' => ['meta' => 'Holy'],
                'resistance'    => ['meta' => 'Acid, Cold, Fire, Electricity, Sonic, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Poison, Negative, Charmed, Exhaustion, Grapple, Paralyzed, Petrified, Prone, Restrained'],
                'incorporeal',
            ],
            'languages' => [
                'Special' => ['meta' => 'All languages it knew in life'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Wraith';
        $monster->size        = 'Medium';
        $monster->alignment   = 'NE';
        $monster->armor_class = '13';
        $monster->hit_dice    = 4;
        $monster->speed       = '0 ft / Fly 60 ft';
        $monster->actions     = '<dl>
    <dt>Life Drain</dt> <dd>Melee Touch Attack, reach 5 ft, one target. 2 CON damage.</dd>
    <dt>Create Specter</dt> <dd>The wraith can create a specter from the dead body within 10 feet that this wraith has killed by draining its life. This must be done within 1 minute or the spirit can no longer be raised in this way. The specter is under the wraith\'s control and the wraith can have no more than 7 specters under its control at one time. Any additional specters causes one to become an uncontrolled specter (wraith\'s choice).</dd>
</dl>';
        $helper->saveMonster($monster, ['Undead', 'Incorporeal'], [
            'hit_points' => 20,
            'stats'      => [null, 16, null, 12, 14, 15, .5, 2],
            'features'   => [
                'darkvision'    => ['meta' => '60 ft'],
                'immunity'      => ['meta' => 'Poison, Negative, Charmed, Exhaustion, Grapple, Paralyzed, Petrified, Prone'],
                'vulnerability' => ['meta' => 'Positive, Holy'],
                'sunlight_sensitivity', 'incorporeal',
            ],
            'saves' => [
                'WIS' => ['bonus' => 0],
            ],
            'languages' => [
                'Special' => ['meta' => 'All languages it knew in life'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Specter';
        $monster->size        = 'Medium';
        $monster->alignment   = 'CE';
        $monster->armor_class = '12';
        $monster->hit_dice    = 4;
        $monster->speed       = '0 ft / Fly 50 ft (hover)';
        $monster->actions     = '<dl>
    <dt>Life Drain</dt> <dd>Melee Touch Attack, reach 5 ft, one target. 1 CON damage.</dd>
</dl>';
        $helper->saveMonster($monster, ['Undead', 'Incorporeal'], [
            'stats'    => [null, 14, null, 10, 10, 11, 1, 2],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'resistance'    => ['meta' => 'Acid, Cold, Fire, Electricity, Sonic, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Poison, Negative, Charmed, Exhaustion, Grapple, Paralyzed, Petrified, Prone, Unconscious'],
                'vulnerability' => ['meta' => 'Positive, Holy'],
                'sunlight_sensitivity', 'incorporeal',
            ],
            'feats'     => ['Weapon Finesse'],
            'languages' => [
                'Special' => ['meta' => 'All languages it knew in life but cannot speak'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Direguard';
        $monster->size             = 'Medium';
        $monster->alignment        = '-';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Sword</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +4) Slashing</dd>
</dl>';
        $monster->description = '';
        $helper->saveMonster($monster, ['Undead'], [
            'stats'    => [18, 11, null, 11, 12, 13, 3, 2],
            'features' => [
                'immunity'      => ['meta' => 'Poison, Negative, Exhaustion'],
                'resistance'    => ['meta' => 'Slashing, Piercing'],
                'vulnerability' => ['meta' => 'Positive, Holy'],
            ],
            'spells' => [
                'Magic Missile'    => ['meta' => '4/day'],
                'Blink'            => ['meta' => '2/day'],
                'Mage Armor'       => ['meta' => '2/day'],
                'See Invisibility' => ['meta' => '4/day'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Bodak';
        $monster->size             = 'Medium';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 9;
        $monster->hit_points       = '58 (9D8 +18)';
        $monster->speed            = '30 ft';
        $monster->description      = '<p>The grim bodaks are formed from hapless mortals who ventured into parts of the Abyss too deadly for them.</p>
<p>Bodaks are humanoids with gray, pearly skin and hairless; muscular bodies of no apparent gender. Their eyes are empty and milky-white, deeply set into their long, distorted features.</p>
<p>Bodaks are only vaguely humanoid in appearance, but sometimes retain some small feature of the mortal they once were. This may manifest itself in a nervous twitch, a peculiar combat style, or anything else that the bodak may have possessed during its normal lifetime.</p>
<p>Bodaks wander the Abyss in abhorrent hatred of their own inhuman endurance. They hate and attack anything they see, even creatures of obviously greater power.</p>
<p>Many mortals have traveled to the Abyss to fight the foul creatures that inhabit it. However, some places in the Abyss are so loathsome and secretive that mortals are simply not allowed to enter. A mortal foolish enough to visit these and die is painfully transformed into a bodak.</p>';
        $monster->actions = "<dl>
    <dt>Fist</dt> <dd>Melee Weapon attack, reach 5ft, one target. (1D4 +2) Bludgeoning + (2D8) Negative damage.</dd>
    <dt>Withering Gaze</dt> <dd>One creature that the bodak can see withing 60 feet of it must make a DC 13 CON Save, taking (4D10) Negative damage on a Failed Save, or half as much on a Successful one.</dd>
    <dt>Death Gaze</dt> <dd>When a creature that can see the bodak's eyes starts its turn within 30 feet of the bodak, the bodak can force it to make a DC 13 CON Save if the bodak isn't incapacitated and can see the creature. If they Critically Fail, the creature is reduced to 0 Hit Points, unless it is immune to the Frightened condition. Otherwise, a creature takes 3D10 Negative damage on a Failed Save. Unless surprised, a creature can avert its eyes to avoid the Save at the start of its turn. If the creature does so, it has Disadvantage on attack rolls against the bodak until the start of its next turn. If the creature looks at the bodak in the meantime, it must immediately make a Save.</dd>
    <dt>Aura of Annihilation</dt> <dd>The bodak can activate or deactivate this feature as a Free Action. While active, the aura deals 5 Negative damage to any creature that ends its turn within 30 feet of the bodak. Undead and Outsiders are immune to this effect.</dd>
</dl>";
        $helper->saveMonster($monster, ['Undead'], [
            'stats'  => [15, 16, 15, 7, 12, 12, 6, 3],
            'skills' => [
                'Perception' => ['dc' => 4],
                'Stealth'    => ['dc' => 6],
            ],
            'features' => [
                'darkvision'    => ['meta' => '180 ft'],
                'vulnerability' => ['meta' => 'Positive, Holy'],
                'resistance'    => ['meta' => 'Cold, Fire, Negative, [Bludgeoning, Piercing, Slashing'],
                'immunity'      => ['meta' => 'Charmed, Frightened, Poison'],
                'sunlight_sensitivity',
            ],
            'languages' => [
                'Abyssal',
                'Special' => ['meta' => 'Any it knew in life'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Vampire';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '14 (Natural Armor)';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 12;
        $monster->hit_points       = '102 (12D8 +48)';
        $monster->speed            = '30 ft';
        $monster->description      = "<p>Vampires are a type of powerful and feared undead that feeds on blood and shows no mercy or compassion.</p>
<p>For the most part, a vampire retains the appearance they had in life. The main differences are their pale skin tone and sharp, feral features, giving them a predatory aspect. Whatever their eye color was in life, after transformation, vampires' eyes changed to a red color that is hard to forget. Their hands end in sharp, glassy claws. Notably, vampires possessed retractable sharp monstrous canines used to pierce the victims' flesh. When vampires are well-fed, their undead bodies' decomposition halted and is reversed. A recently-fed vampire has a more pinkish skin color, staving pale complexion and kick-starting the circulatory system temporarily. Sometimes, vampires conceal their undead nature by wearing blush and makeup.</p>
<p>They do not cast shadows, have no reflections in mirrors, and move in complete silence. Sages claim vampires retained their souls after turning.</p>
<p>Most vampires typically plot to empower themselves and produce spawn that will spread across the world. Most vampire victims are made into such subservient undead creatures who seek to bleed and drain their victims. However, vampire spawns could not spread vampirism. This changed when a vampire master allowed their spawn to imbibe some of their blood, turning the spawn into a full vampire. Few vampires are willing to turn their spawn into vampires and give up control of their thralls. However, when the vampire master dies, their spawn are granted free will.</p>
<p>Some vampires are known to serve powerful beings, like Szass Tam of the Red Wizards of Thay. The lich built vast armies of the undead with vampire generals at their helms. However, most vampires are solitary predators. When they are gathered in groups, vampires usually are ruled by a vampire lord.</p>
<p>Outside of the Prime Material plane, vampires can be found inhabiting the Thanatos layer of the Abyss. They serve the drow deity Kiaransalee in Naratyr, the City of the Dead, as her advisors. More powerful undead creatures such as vampire lords maintain shrines on the wailing plane of Pandemonium. Vampires are also a common sight on the Negative Energy Plane and in the Shadowfell, where they are known to carve out baronies to rule over.</p>
<p>Like other undead beings, vampires are not a part of a natural world, only existing to spread evil. They do not need to eat mortal food, do not need to breathe, and do not need to sleep apart from when confined to their coffins, resting themselves. When feeding, vampires often attack swiftly, feeding on unsuspecting victims but leaving them alive. When hunting to kill, vampires make sure to destroy their prey's bodies to stop them from rising as undead. Their evil is so strong it was detectable by sensitive creatures like dogs.</p>
<p>A new vampire is created when another vampire drains the life out of a living creature (reduces their CON to 0 via their Bite attack). A humanoid, a monstrous humanoid, an illithid, a giant, or even a dragon, among others, could become a vampire (although a vampire receives less sustenance from creatures of different races that the vampire was in life: only 2 Hit Points). This is different for lesser creatures; for example, when a vampire drains a flying snake, it has a chance of being raised as a Deathfang. Another way to create a vampire is via the Undeath After Death or the Create Undead Minion spell.</p>
<p>Rarely encountered creatures, known as half-vampires, could be created in one of two ways. First, in some rare cases, a vampire could consume enough blood that it could breed with a humanoid or monstrous humanoid, creating half-vampire offspring. Second, in even rarer cases, if a pregnant mother survived having her blood drained by a vampire, her unborn could be 'tainted' with vampirism instead.</p>
<p>On at least one occasion, a dying hill giant shaman of the Kryptgarden Forest was granted vampirism by Grolantor, to whom Morg, the wounded giant, addressed pleas for strength.</p>
<p>Vampires can also be created by enchanted items, such as the Bloodvein – a cursed evil vampiric sword that fed on the blood of creatures it wounded. If the weapon's wielder dies, Bloodvein brought them back to life at a permanent cost of their constitution. If the last of the wielder's constitution was drained with a resurrection, the sword brought them back as a vampire, bound to the sword and its hunger until the vampire is permanently destroyed.</p>";
        $monster->actions          = "<dl>
    <dt>Shapechanger</dt> <dd>
        <p>If the vampire isn't in sunlight or running water, it can use its Action to Polymorph into a Tiny Bat, a Medium cloud of mist, or back into its true form.</p>
        <p>While in bat form, the vampire can't speak, its Walking Speed is 5 feet, and it has a Flying Speed of 30 feet. Its statistics, other than its size and speed are unchanged. Anything it is wearing transforms with it, but nothing it is carrying does. It reverts to its true form if it dies.</p>
        <p>While in mist form, the vampire can't take any Actions, speak, or manipulate objects. It is weightless, has a Flying Speed of 20 feet, can hover, and can enter a hostile creature's space and stop there. In additional, if air can pass through a space, the mist can do so without squeezing, and it can't pass through water. It has Advantage on STR, DEX, and CON Saves, and it is immune all physical damage unless it has the Air descriptor. It still is affected by sunlight in this form.</p>
    </dd>
    <dt>Misty Escape</dt> <dd>When it drops to 0 Hit Points outside its resting place, the vampire transforms into a cloud of mist instead of falling unconscious, provided that it isn't in sunlight or running water. If it can't transform, it is destroyed.</dd>
    <dt>Regeneration</dt> <dd>the vampire regains 20 Hit Points at the start of its turn if it has at least 1 Hit Point and isn't in sunlight or running water. If the vampire takes Positive, Holy, or Good damage, this trait doesn't function at the start of the vampire's next turn.</dd>
    <dt>Spider Climb</dt> <dd>The vampire can climb difficult surfaces, including upside down on ceilings, without needing to make an Ability Check.</dd>
    <dt>Vampire Weaknesses</dt> <dd>
        <p>The vampire has the following flaws</p>
        <dl>
            <dt>Forbiddance</dt> <dd>The vampire can't enter a residence without an invitation form one of the occupants</dd>
            <dt>Harmed by Running Water</dt> <dd>The vampire takes 20 Acid damage if it ends its turn in running water</dd>
            <dt>Stake to the Heart</dt> <dd>If a piercing weapon made of wood is driven into the vampire's heart while the vampire is incapacitated in its resting place, the vampire is Paralyzed until the stake is removed</dd>
            <dt>Sunlight Hypersensitivity</dt> <dd>The vampire takes 20 Positive damage when it starts its turn in sunlight. While in sunlight, it has Disadvantage on Attack Rolls and Ability Checks.</dd>
        </dl>
    </dd>
    <dt>Unarmed Strike (Vampire Form only)</dt> <dd>Melee Weapon attack +8 to Hit, reach 5 ft, one creature. 1D8 +4 Bludgeoning damage. Instead of dealing damage, the vampire can Grapple the target instead.</dd>
    <dt>Bite (Vampire or Bat Form only)</dt> <dd>Melee Weapon attack +8 to Hit, reach 5 ft, one willing creature, or a creature that is Grappled, Incapacitated, or Restrained. 1D6 +4 Piercing damage plus 2 CON damage. The vampire heals 16 Hit Points if the target is of the same species as the vampire was in life, otherwise it only gains 2 Hit Points. If the body is not destroyed, they gain the Lesser Vampire Spawn feat and rise as a Vampire Spawn the next night.</dd>
    <dt>Charm</dt> <dd>
        <p>The vampire targets one humanoid it can see within 30 feet. If the target can see the vampire, the target must make a DC 17 WIS Save or be charmed by the vampire. The charmed target regards the vampire as a trusted friend to be heeded and protected. Although the target isn't under the vampire's control, it takes the vampire's requests or actions in the most favorable way it can, and it is a willing target for the vampire's Bite attack.</p>
        <p>Each time the vampire or the vampire's companions do anything harmful to the target, it an repeat the Save, ending the effect on itself on a Success. Otherwise, the effect lasts 24 hours or until the vampire is destroyed, is on a different plane of existence than the target, or takes an Action to end the effect.</p>
    </dd>
    <dt>Children of the Night (1/day)</dt> <dd>the vampire magically calls 2D4 swarm of bats or rats, provided that the sun isn't up. The called creatures arrive in 1D4 rounds, acting as allies of the vampire and obeying its spoken commands. The beasts remain for 1 hour, until the vampire dies, or until the vampire dismisses them with an Action.</dd>
</dl>";
        $helper->saveMonster($monster, ['Undead', 'Cursed'], [
            'stats'    => [18, 18, 18, 17, 15, 18, 11, 4],
            'skills'   => [
                'Perception' => ['dc' => 7],
                'Stealth'    => ['dc' => 9],
            ],
            'saves'     => [
                'DEX' => ['bonus' => 9],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 9],
            ],
            'features'   => [
                'darkvision'    => ['meta' => '120 feet'],
                'resistance'    => ['meta' => 'Necrotic, [Bludgeoning, Piercing, Slashing]'],
                'multi_attack'  => ['meta' => 'If the vampire makes a successful Unarmed Strike attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The vampire can only gain this additional Action once per turn.'],
            ],
            'languages' => [
                'Special' => ['meta' => 'Any it knew in life'],
            ],
        ]);
    }
}
