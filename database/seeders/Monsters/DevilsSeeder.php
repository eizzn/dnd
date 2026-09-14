<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class DevilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * TODO: update devils to have them be more humanoid or corrupted angel-like instead of monstrous. Demons are monstrous
     *
     * @return void
     */
    public function run(): void
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $monster              = new Monster;
        $monster->name        = 'Lemure';
        $monster->size        = 'Small';
        $monster->alignment   = 'LE';
        $monster->armor_class = 8;
        $monster->hit_dice    = 3;
        $monster->speed       = '15 ft';
        $monster->actions     = '<dl>
    <dt>Fist</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2 (1D4) Bludgeoning damage.</dd>
</dl>';
        $monster->description = '
<p>When a lemure dies in the Nine Hells, it comes back to life with all its Hit Points in 1D10 days unless it is killed by a Good-aligned creature with a Bless spell cast on that creature or its remains are sprinkled with Holy Water.</p>';
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider', 'Familiar'], [
            'stats'    => [10, 5, 11, 1, 11, 3, 0, 2],
            'features' => [
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'    => ['meta' => 'Cold'],
                'immunity'      => ['meta' => 'Fire, Poison, Charmed, Frightened'],
            ],
            'feats'     => ['Improved Darkvision'],
            'languages' => ['Infernal' => ['meta' => "Understand but can't speak"]],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Nupperibo';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LE';
        $monster->armor_class      = 10;
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 2;
        $monster->speed            = '20 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 6 (1D6 + 3) Piercing damage.</dd>
    <dt>Cloud of Vermin</dt> <dd>Any creature, other than a Baatezu, that starts its turn within 20 feet of the Nupperibo must make a DC 11 CON Save. A creature that is within the area of two or more Nupperibos makes the Save with Disadvantage. On a failure, the creature takes 2 (1D4) Piercing damage.</dd>
    <dt>Hunger-Driven</dt> <dd>In the Nine Hells, the Nupperibos can flawlessly track any creature that has taken damage from any Nupperibo's Cloud of Vermin within the previous 24 hours.</dd>
</dl>";
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider', 'Animal Companion'], [
            'stats'    => [16, 11, 13, 3, 8, 1, .5, 2],
            'features' => [
                'vulnerability' => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'    => ['meta' => 'Acid, Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Fire, Poison, Blinded, Charmed, Frightened'],
            ],
            'feats'     => ['Blindsight' => ['meta' => '10 ft. Nupperibos are blind beyond 10 ft.']],
            'languages' => ['Infernal' => ['meta' => "Understand but can't speak"]],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Imp';
        $monster->size             = 'Tiny';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '14';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '20 ft / Fly 40 ft';
        $monster->actions          = "<dl>
    <dt>Sting</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2 (1D4) Bludgeoning.</dd>
    <dt>Shapechanger</dt> <dd>The imp can use its action to polymorph into a beast form that resembles a rat (speed 20 ft), a raven (20 ft, fly 60 ft), or a spider (20 ft, climb 20 ft), or back into its true form. Its statistics are the same in each form, except for the speed changes noted. Any equipment it is wearing or carrying isn't transformed. It reverts to its true form if it dies.</dd>
</dl>";
        $monster->description      = '
<dl>
    <dt>Animal Companion</dt> <dd>3rd Level Spell Slot (Ranger 1st Level Spell Slot).</dd>
</dl>';
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Shapechanger', 'Outer Planes', 'Evil', 'Lawful', 'Outsider', 'Animal Companion'], [
            'stats'  => [6, 17, 13, 11, 12, 14, 2, 2],
            'skills' => [
                'Deception' => ['dc' => 4],
                'Insight'   => ['dc' => 3, 'meta' => 'Sense Motive'],
                'Diplomacy' => ['dc' => 4, 'meta' => 'Persuasion'],
                'Stealth'   => ['dc' => 5],
            ],
            'features' => [
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'    => ['meta' => 'Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Fire, Poison'],
            ],
            'feats'  => ['Improved Darkvision', 'Weapon Finesse'],
            'spells' => [
                'Invisibility' => ['meta' => 'At will'],
            ],
            'languages' => ['Infernal'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Spinagon';
        $monster->size             = 'Small';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 5;
        $monster->speed            = '20 ft / Fly 40 ft';
        $monster->actions          = '<dl>
    <dt>Fork</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 3 (1D6) Piercing.</dd>
    <dt>Tail</dt> <dd>Ranged Weapon Attack, reach 20/80 ft, one target 4 (1D4 + 2) Piercing. The spinned devil only has 12 of these spines. Each spine regrows in 2 days.</dd>
</dl>';
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats'    => [10, 15, 12, 11, 14, 8, 2, 3],
            'features' => [
                'magic_resistance',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'    => ['meta' => 'Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Fire, Poison'],
            ],
            'feats'     => ['Improved Darkvision', 'Ride-By Attack' => ['meta' => 'Applies to Fly-by attacks instead of when mounted']],
            'languages' => ['Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Hell Hound';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 7;
        $monster->speed            = '50 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +3) + (2D6) Fire</dd>
    <dt>Fire Breath (Recharge 5-6)</dt> <dd>The hound exhales fire in a 15-foot cone. Each creature in that area must make a DC 12 DEX Save, taking (6D6) Fire damage on a Failed Save, or half as much on a Successful one.</dd>
</dl>';
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats'    => [17, 12, 14, 6, 13, 6, 3, 2],
            'skills'   => ['Perception' => ['dc' => '5']],
            'features' => [
                'darkvision'    => ['meta' => '60 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Holy, Silvered'],
                'immunity'      => ['meta' => 'Fire'],
                'keen_sense'    => ['meta' => 'Hearing and Smell'],
            ],
            'talents'   => ['Improved Flanking'],
            'languages' => ['Infernal' => ['meta' => "Can't speak"]],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Barbazu';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 8;
        $monster->speed            = '30 ft';
        $monster->actions          = "<dl>
    <dt>Beard</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 6 (1D8 +2) Piercing damage, and the target must succeed on a DC 12 CON Save or be Sickened 2 for 1 minute. While Sick in this way, the target can't  regain Hit Points. The target can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</dd>
    <dt>Glaive</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 8 (1D10 +3) Slashing damage. If the target is a creature other than an Undead or Construct, it must succeed on a DC 12 CON Save or lose 5 (1D10) Hit Points at teh start of each of its turns due to an Infernal Wound. Each time the devil hits the wounded target with this attack, the damage dealt by the wound increases by 5 (1D10). Any creature can take an Action to stanch the wound with a successful DC 12 WIS (Medicine) check. The wound also closes if the target receives magical healing.</dd>
</dl>";
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats' => [16, 15, 15, 9, 11, 3, 3, 3],
            'saves' => [
                'STR' => ['bonus' => 5],
                'CON' => ['bonus' => 4],
                'WIS' => ['bonus' => 2],
            ],
            'features' => [
                'magic_resistance',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'    => ['meta' => 'Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Fire, Poison'],
                'multi_attack'  => ['meta' => 'The Barbazu may spend an Action to make 2 Beard Attacks.'],
            ],
            'feats'  => ['Improved Darkvision', 'Steadfast'],
            'spells' => [
                'Invisibility' => ['meta' => 'At will'],
            ],
            'languages' => ['Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Merregon';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Halberd</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 9 (1D10 + 4) Slashing damage.</dd>
    <dt>Heavy Crossbow</dt> <dd>Ranged Weapon Attack, reach 100/400 ft, one target 7 (1D10 + 2) Piercing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats'    => [18, 14, 17, 6, 12, 8, 4, 3],
            'features' => [
                'magic_resistance',
                'darkvision'    => ['meta' => '60 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'    => ['meta' => 'Cold, Electricity, Poison, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Fire'],
            ],
            'feats'     => ['Polearm Master'],
            'languages' => [
                'Infernal'  => ['meta' => 'Cannot speak any language'],
                'Telepathy' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Succubus';
        $monster->size             = 'Medium';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 12;
        $monster->speed            = '30 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 7 (1D6 + 3) Slashing.</dd>
    <dt>Tail</dt> <dd>Ranged Weapon Attack, reach 20/80 ft, one target 4 (1D4 + 2) Piercing. The spinned devil only has 12 of these spines. Each spine regrows in 2 days.</dd>
    <dt>Draining Kiss</dt> <dd>The fiend kisses a willing creature. The creature takes 5 WIS damage unless it makes a DC 15 CON Save for 2 WIS damage instead.</dd>
    <dt>Soul Drain</dt> <dd>The fiend can take the soul of a creature it has drained of all its WIS. A creature killed in this way cannot be Raised. To return the creature back to life, its soul must be retrieved from the fiend.</dd>
</dl>';
        $monster->description = "
<p>Succubi are fallen angels of love. Succubi do not openly engage in the Blood War and have become open to working with demons ever since Graz'zt became a Demon Lord.</p>
<p>Due to the invasion of Graz'zt from the Nine Hells to the Abyss, many Succubi went to the Abyss and stayed. There are now those succubi that are still Baatezu and those that are now Tanar'ri.</p>
<p>The male versions of Succubus are called an Inccubus.</p>";
        $helper->saveMonster($monster, ['Devil', 'Demon', 'Fiend', 'Shapechanger', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats'  => [8, 17, 13, 15, 12, 20, 4, 4],
            'skills' => [
                'Deception'  => ['dc' => 9],
                'Insight'    => ['dc' => 5, 'meta' => 'Insight'],
                'Perception' => ['dc' => 9],
                'Stealth'    => ['dc' => 7],
            ],
            'features' => [
                'magic_resistance',
                'darkvision'    => ['meta' => '60 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'    => ['meta' => 'Cold, Electricity, Poison, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Fire'],
            ],
            'feats'  => ['Weapon Finesse'],
            'spells' => [
                'Charm'        => ['meta' => 'At will as a Double Action, Heightened +2 with a duration of 24 hours. Can only have one charmed creature at a time, and can communicate telepathically at any distance across Planes.'],
                'Polymorph'    => ['meta' => 'At will, self only with an unlimited duration'],
                'Etherealness' => ['meta' => '3/day as a Double Action'],
            ],
            'languages' => ['Abyssal', 'Infernal', 'Telepathy' => ['meta' => '60 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Hamatula';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 13;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 7 (1D6 + 3) Piercing.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 5 ft, one target 10(2D6 + 3) Piercing.</dd>
    <dt>Hurl Flame</dt> <dd>Ranged Spell Attack, reach 150 ft, one target, 3D6 Fire. If the target is a flammable object that isn\'t being worn or carried, it also catches on Fire.</dd>
    <dt>Barbed Hide</dt> <dd>Grapple Weapon Attack, reach 0 ft, all targets. 6 (1D10) Piercing. With an Action, the Hamatula can attack all creatures that are in a Grapple with the Hamatula.</dd>
</dl>';
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats'    => [16, 17, 18, 12, 14, 14, 5, 5],
            'features' => [
                'magic_resistance',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'    => ['meta' => 'Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Fire, Poison'],
            ],
            'feats'     => ['Improved Darkvision'],
            'languages' => ['Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Kyton';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 10;
        $monster->speed            = '30 ft';
        $monster->actions          = "<dl>
    <dt>Chain</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 11 (2D6 +4) Slashing damage. The target is Grappled (escape DC 14) if the devil isn't already Grappling a creature. Until this Grapple ends, the target is Restrained and takes 7 (2D6) Piercing damage at the start of each of its turns.</dd>
    <dt>Unnerving Mask</dt> <dd>Reaction. When a creature the Kyton can see starts its turn within 30 feet of the Kyton, the Kyton can create the illusion that it looks like one of the creature's departed loved ones or bitter enemies. If the creature can see the Kyton, it must succeed on a DC 14 WIS Save or be frightened until the end of its turn.</dd>
</dl>";
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats' => [18, 15, 18, 11, 12, 14, 8, 4],
            'saves' => [
                'CON' => ['bonus' => 7],
                'WIS' => ['bonus' => 4],
                'CHA' => ['bonus' => 5],
            ],
            'features' => [
                'magic_resistance',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'    => ['meta' => 'Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Fire, Poison'],
            ],
            'spells' => [
                'Animate Objects' => ['meta' => '1/day. Metal chains only. Up to 4 at any one time'],
            ],
            'feats'     => ['Improved Darkvision'],
            'languages' => ['Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Osyluth';
        $monster->size             = 'Large';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 15;
        $monster->speed            = '40 ft / Fly 40 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 8 (1D8 +4) Slashing damage.</dd>
    <dt>Sting</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 13 (2D8 +4) Piercing plus 17 (5D6) Poison damage, and the target must succeed on a DC 14 CON Save or become Sickened 3 for 1 minute. The target can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</dd>
</dl>';
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats' => [18, 16, 18, 13, 14, 16, 9, 5],
            'saves' => [
                'INT' => ['bonus' => 5],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 7],
            ],
            'skills' => [
                'Deception' => ['dc' => 7],
                'Insight'   => ['dc' => 6],
            ],
            'features' => [
                'magic_resistance',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'    => ['meta' => 'Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Fire, Poison'],
                'multi_attack'  => ['meta' => 'The Osyluth gains an Additional Action. This Action can only be used to make a Sting Attack.'],
            ],
            'feats'     => ['Improved Darkvision'],
            'languages' => ['Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Orthon';
        $monster->size             = 'Large';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '15';
        $monster->damage_reduction = '6 (Half Plate)';
        $monster->hit_dice         = 10;
        $monster->speed            = '30 ft / Climb 30 ft';
        $monster->actions          = "<dl>
    <dt>Infernal Dagger</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 11 (2D4 +6) Slashing damage, and the target must make a DC 17 CON Save, taking 22 (3D10) Poison damage on a failed Save, or half as much on a successful one. On a failure, the target is also Sick: 2 for 1 minute. The target can repeat the Save at the end of each of its turns, ending the effect on success.</dd>
    <dt>Brass Crossbow</dt> <dd>
        <p>Ranged Weapon Attack, range 100/400 ft, one target. 14 (2D10 +3) Piercing damage plus one of the following effects:</p>
        <dl>
            <dt>Acid</dt> <dd>The target must make a DC 17 CON Save, taking an additional 17 (5D6) Acid damage on a failed Save, or half as much damage on a successful one.</dd>
            <dt>Blindness (1/day)</dt> <dd>The target and all other creatures within 20 feet of it must each make a DC 17 DEX Save or be Blinded until the end of the Orthon's next turn.</dd>
            <dt>Concussion</dt> <dd>The target and each creature within 20 feet of it must make a DC 17 CON Save, taking 13 (2D12) Sonic damage on a failed Save, or half as much damage on a successful one.</dd>
            <dt>Entanglement</dt> <dd>The target must make a successful DC 17 DEX Save or be Restrained for 1 hour by strands of sticky webbing. A restrained creature can escape by using an Action to make a successful DC 17 DEX or STR check. Any creature that touches the Restrained creature must make a successful DC 17 DEX Save or be similarly Restrained.</dd>
            <dt>Paralysis (1/day)</dt> <dd>The target takes 22 (4D10) Electricity damage and must make a successful DC 17 CON Save or be Paralyzed for 1 minute. The Paralyzed target can repeat the Save at the end of each of its turns, ending the effect on itself on a success.</dd>
        </dl>
    </dd>
    <dt>Explosive Retribution</dt> <dd>When the Orthon is reduced to 15 Hit Points or fewer, the Orthon causes itself to explode. All other creatures within 30 feet of it must each make a DC 17 DEX Save, taking 9 (2D8) Fire damage plus 9 (2D8) Electricity damage on a failed Save, or half as much on a successful one. This explosion destroys the Orthon, its Infernal Dagger, and its Brass Crossbow and all his bolts.</dd>
</dl>";
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats' => [22, 16, 21, 15, 15, 16, 10, 4],
            'saves' => [
                'DEX' => ['bonus' => 7],
                'CON' => ['bonus' => 9],
                'WIS' => ['bonus' => 6],
            ],
            'skills' => [
                'Perception' => ['dc' => 10],
                'Stealth'    => ['dc' => 11],
                'Survival'   => ['dc' => 10],
            ],
            'features' => [
                'magic_resistance',
                'darkvision'    => ['meta' => '120 ft'],
                'vulnerability' => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'    => ['meta' => 'Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Fire, Poison, Charmed, Exhaustion'],
            ],
            'spells' => [
                'True Seeing'   => ['meta' => 'At will'],
                'Invisibility'  => ['meta' => 'At will'],
                "Hunter's Mark" => ['meta' => 'At will. Heightened (+2) 27 hours.'],
            ],
            'languages' => ['Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Cornugon';
        $monster->size             = 'Large';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 17;
        $monster->speed            = '20 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Flaming Fork +1</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 2D8 + 6 Piercing + 1D6 Fire.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 1D8 + 6 Piercing. The target must make a DC 17 CON Save if it takes damage. On a failed Save, it suffers 5 Persistent (bleed) damage.</dd>
    <dt>Hurl Flame</dt> <dd>Ranged Spell Attack, reach 150 ft, one target, 4D6 Fire. If the target is a flammable object that isn\'t being worn or carried, it also catches on Fire.</dd>
</dl>';
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats' => [22, 17, 21, 12, 16, 17, 11, 6],
            'saves' => [
                'STR' => ['bonus' => 10],
                'DEX' => ['bonus' => 7],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 7],
            ],
            'features' => [
                'magic_resistance',
                'legendary_resistance' => ['meta' => '1/day'],
                'darkvision'           => ['meta' => '120 ft'],
                'vulnerability'        => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'           => ['meta' => 'Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'             => ['meta' => 'Fire, Poison'],
            ],
            'feats'     => ['Improved Darkvision'],
            'languages' => ['Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Erinyes';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '15';
        $monster->damage_reduction = '8 (Full Plate)';
        $monster->hit_dice         = 18;
        $monster->speed            = '30 ft / Fly 60 ft';
        $monster->actions          = '<dl>
    <dt>Greater Flaming Longsword +2</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 + 2 Slashing + 3D6 Fire.</dd>
    <dt>Keen Longbow + 2</dt> <dd>Ranged Weapon Attack, reach 150/600 ft, one target. 1D8 + 2 Piercing.</dd>
</dl>';
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats'     => [18, 16, 18, 14, 14, 18, 12, 6],
            'features'  => [
                'magic_resistance',
                'legendary_resistance' => ['meta' => '1/day'],
                'vulnerability'        => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'           => ['meta' => 'Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'             => ['meta' => 'Fire, Poison'],
            ],
            'feats'     => ['Multi Attacker', 'Improved Multi Attacker'],
            'talents'   => ['Improved Reaction'],
            'spells'    => [
                'True Seeing' => ['meta' => 'At will. 120 ft'],
            ],
            'languages' => ['Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Narzugon';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '12 (Shield)';
        $monster->damage_reduction = '8 (Full Plate)';
        $monster->hit_dice         = 15;
        $monster->speed            = '30 ft';
        $monster->actions          = "<dl>
    <dt>Hellfire Lance</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 11 (1D12 +5) Piercing damage plus 16 (3D10) Fire damage. If this kills a creature, the creature's. soul rises form the River Styx as a Lemure in Avernus in 1D4 days. If the creature isn't revived before then, only a Wish spell or killing the Lemure and casting True Resurrection on the creature's original body can restore it to life. Constructs, Undead and Baatezu are immune to this effect.</dd>
</dl>";
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats'     => [20, 10, 17, 16, 14, 19, 13, 5],
            'saves'     => [
                'DEX' => ['bonus' => 5],
                'CON' => ['bonus' => 8],
                'CHA' => ['bonus' => 9],
            ],
            'skills'    => ['Perception' => ['dc' => 7, 'meta' => 'Advantage to detect Good-aligned creatures']],
            'features'  => [
                'magic_resistance',
                'legendary_resistance' => ['meta' => '1/day'],
                'vulnerability'        => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'           => ['meta' => 'Cold, [Bludgeoning, Piercing, Slashing]'],
                'immunity'             => ['meta' => 'Fire, Poison'],
            ],
            'feats'     => ['Multi Attacker', 'Improved Multi Attacker'],
            'talents'   => ['Improved Reaction'],
            'spells'    => [
                'Detect Good'     => ['meta' => 'At will'],
                'Call Nightmare'  => ['meta' => 'At will. Requires spurs as focus'],
                'Aura of Courage' => ['meta' => 'At will'],
                'Aura of Fear'    => ['meta' => 'At will'],
                'Heal'            => ['meta' => '1/day'],
            ],
            'languages' => ['Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Gelugon';
        $monster->size             = 'Large';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 18;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D6 + 5 Piercing + 3D6 Cold.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D4 + 5 Slashing + 3D6 Cold.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 2D6 + 5 Bludgeoning + 3D6 Cold</dd>
</dl>';
        $monster->description = "
<p>In the ancient past, the gelugons were mezzoloths. The archdevil Mephistopheles managed to trap many of their kind in a state of perpetual servitude millennia ago and turned them into denizens of the Nine Hells.</p>
<h4>Known Gelugons</h4>
<ul>
    <li>Tuncheth: an irritable ice devil, devoted to restoring the gelugons to their former position as Mephistopheles's favored servitors. On one front he attempted to discredit the pit fiend known as Quagrem, a key researcher of hellfire magic, by sending his agents to discover or plant evidence of foul play against him. He also was in charge of developing a theoretical form of frost magic known as the Plume, in order to end the Cold Lord's fixation on the un-Canian hellfire.</li>
    <li>Vreesar: led an attempt to conquer Toril from a Portal in the Great Glacier in 1366 DR. He was stopped by a Harper Ranger named Martine and a former Paladin named Vilheim.</li>
    <li>Yoggaa: an ice devil wizard responsible for the upkeep of Mephistopheles's Frost Garden. The sarcastic, gelugon gardener continually blasted the sculpted plants with cone of cold spells to prevent Mephistar's strange heat from melting them.</li>
    <li>Zaguror: an adamant gelugon supervisor for a museum of frozen baatezu rivals within Stygia.</li>
</ul>";
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Cold', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats'    => [21, 14, 18, 18, 15, 18, 14, 6],
            'features' => [
                'magic_resistance',
                'legendary_resistance' => ['meta' => '2/day'],
                'vulnerability'        => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'           => ['meta' => '[Bludgeoning, Piercing, Slashing]'],
                'immunity'             => ['meta' => 'Cold, Fire, Poison'],
                'multi_attack'         => ['meta' => 'If the gelugon makes a successful Claw attack, it gains an additional Action. This additional Action can only be used to make a Bite attack. The gelugon can only gain this additional Action once per turn.'],
            ],
            'feats'  => ['Blindsight'],
            'spells' => [
                'Wall of Ice'        => ['meta' => '3/day'],
                'Ice Storm'          => ['meta' => '1/day'],
                'Investiture of Ice' => ['meta' => '1/day'],
                'Cone of Cold'       => ['meta' => '1/day'],
            ],
            'languages' => ['Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Amnizu';
        $monster->size             = 'Medium';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '10 (Natural Armor)';
        $monster->hit_dice         = 27;
        $monster->speed            = '30 ft / Fly 40 ft';
        $monster->actions          = "<dl>
    <dt>Taskmaster Whip</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 10 (2D4 +5) Slashing + 33 (6D10) Force damage.</dd>
    <dt>Disruptive Touch</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 44 (8D10) Negative damage.</dd>
    <dt>Poison Mind</dt> <dd>The Amnizu targets one or two creatures that it can see within 60 feet of it. Each target must succeed on a DC 19 WIS Save or take 26 (4D12) Negative damage and be Blinded until the start of the Amnizu's next turn.</dd>
    <dt>Forgetfulness (Recharge 6)</dt> <dd>The Amnizu targets one creature it can see within 60 ft. That creature must succeed on a DC 18 INT Save or become Stunned for 1 minute. A Stunned creature repeats the Save at the end of each of its turns, ending the effect on itself on a success. If the target is Stunned for the full minute, it forgets everything it sensed, experienced, and learned during the last 5 hours.</dd>
    <dt>Instinctive Charm</dt> <dd>When a creature within 60 feet of the Amnizu makes an attack roll against it, and another creature is within the attack's range, the attacker must make a DC 19 WIS Save. On a failed Save, the attacker must target the creature that is closest to it, not including the Amnizu or itself. If multiple creatures are closest, the attacker chooses which one to target. If the Save is successful, the atacker is immune to the Amnizu's Instinctive Charm for 24 hours.</dd>
</dl>";
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats'    => [11, 13, 16, 20, 12, 18, 18, 6],
            'features' => [
                'magic_resistance',
                'legendary_resistance' => ['meta' => '3/day'],
                'vulnerability'        => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'           => ['meta' => 'Cold, Electricity, [Bludgeoning, Piercing, Slashing]'],
                'immunity'             => ['meta' => 'Fire, Poison'],
                'innate_spellcasting'  => ['meta' => 'INT DC 19'],
            ],
            'saves' => [
                'DEX' => ['bonus' => 7],
                'CON' => ['bonus' => 9],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 10],
            ],
            'feats'  => ['Improved Darkvision'],
            'spells' => [
                'Charm'      => ['meta' => 'At will'],
                'Command'    => ['meta' => 'At will'],
                'Dominate'   => ['meta' => '3/day. Can be Heightened +3 1/day'],
                'Fireball'   => ['meta' => '3/day'],
                'Feeblemind' => ['meta' => '3/day'],
            ],
            'languages' => ['Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Pit Fiend';
        $monster->size             = 'Large';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '7 (Natural Armor)';
        $monster->hit_dice         = 24;
        $monster->speed            = '30 ft / Fly 60 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack +14, reach 5 ft, one target. 4D6 +8 Piercing. The target must make a DC 21 CON Save or become Sickened 5. While Sick in this way, the target can't regain Hit Points, and takes 6D6 Poison damage at the start of each of its turns. The Sick target can repeat the Save at the end of each of its turns, ending the effect on itself on a Success.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack +14, reach 10 ft, one target. 2D8 +8 Slashing damage.</dd>
    <dt>Anarchic Unholy Perfect Flaming Mace +3</dt> <dd>Melee Weapon Attack +17, reach 10 ft, one target. 2D6 + 11 Slashing + 6D6 Fire.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack +14, reach 10 ft, one target. 3D10+ 8 Bludgeoning.</dd>
    <dt>Fear Aura</dt> <dd>A pit fiend may with an Action, emit an aura of fear that lasts until dispelled (with another Action). At the start of each of the pit fiend's turns, each creature within 20 feet of it must make a DC 21 WIS Save. On a failed Save, the creature is Frightened until the start of its next turn. If a creature's Save is successful, the creature is immune to the pit fiends Fear Aura for the next 24 hours. This aura turns off if the pit fiend is incapacitated.</dd>
</dl>";
        $monster->description      = "
<h4>Known Pit Fiends</h4>
<ul>
    <li>Abarax: managed to depose and assume the identity of Lord Orgauth until he was slain by Scyllua Darkhope.</li>
    <li>Abbatorru: enslaved the planeswalker wizard named Edalseye</li>
    <li>Alastor: executioner of Nessus</li>
    <li>Asgeroth: servant of Imix tasked with defeating Zaaman Rul.</li>
    <li>Baalberith: major domo of Asmodeus' palace</li>
    <li>Beltorius: warrior servant of Mephistopheles</li>
    <li>Goap: servant of Tiamat. Leads 3 companies of Erinyes.</li>
    <li>Koraboros: trapped within Ammon Jerro's haven in the Sword Mountains, for the purpose of empowering the warlock, around 1374 DR.</li>
    <li>Martinet: constable of Nessus</li>
    <li>Morax: commands 9 companies of pit fiends.</li>
    <li>Tanetal: servant of Bane. Ordered by Bane into the service of the Red Wizard Marcus in order to aid him in his task of bringing more power to Bane by sacrificing souls to the Pool of Darkness.</li>
    <li>Zimimar: commanded the palace guards of Minauros, which composed of 6 companies of bone devils. He is now one of the Dark Eight.</li>
</ul>";
        $helper->saveMonster($monster, ['Devil', 'Fiend', 'Outer Planes', 'Evil', 'Lawful', 'Outsider'], [
            'stats'    => [26, 14, 24, 22, 18, 24, 20, 6],
            'features' => [
                'magic_resistance',
                'legendary_resistance' => ['meta' => '3/day'],
                'vulnerability'        => ['meta' => 'Anarchic, Holy, Silvered'],
                'resistance'           => ['meta' => 'Cold, Electricity, [Bludgeoning, Piercing, Slashing]'],
                'immunity'             => ['meta' => 'Fire, Poison'],
                'innate_spellcasting'  => ['meta' => 'INT DC 21'],
            ],
            'saves' => [
                'DEX' => ['bonus' => 8],
                'CON' => ['bonus' => 13],
                'WIS' => ['bonus' => 10],
            ],
            'feats'     => ['Power Attack', 'Swipe', 'Cleave', 'Great Cleave', 'Improved Darkvision', 'Supreme Cleave'],
            'talents'   => ['Crusher'],
            'spells'    => [
                'Detect Magic' => ['meta' => 'At will'],
                'True Seeing'  => ['meta' => 'At will. 120 ft'],
                'Fireball'     => ['meta' => 'At will'],
                'Hold Person'  => ['meta' => '3/day. Heightened +3'],
                'Wall of Fire' => ['meta' => '3/day'],
            ],
            'languages' => ['Infernal', 'Telepathy' => ['meta' => '120 ft']],
        ]);
    }
}
