<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersCSeeder extends Seeder
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

        // TODO: add Deva

        $monster                   = new Monster;
        $monster->name             = 'Planetar';
        $monster->size             = 'Large';
        $monster->type             = 'Celestial';
        $monster->alignment        = 'Any Good';
        $monster->armor_class      = '18 (Plate Mail +2 Armor) / 15';
        $monster->damage_reduction = '10 (Full Plate + Natural Armor)';
        $monster->hit_dice         = 16;
        $monster->speed            = '40 ft / 120 ft Fly';
        $monster->actions          = '<dl>
    <dt>Divine Awareness</dt> <dd>The Planetar knows if it hears a lie</dd>
    <dt>Greatsword</dt> <dd>Melee Weapon Attack +12, reach 5 ft, one target. 4d6 + 7 Slashing (plus possible Divine Strike)</dd>
</dl>';
        $monster->description      = "

<h3>Known Planetars</h3>
<ul>
    <li>Yonel: guards the North Gate in Bahamut's Palace that leads to the Elemental Plane of Air.</li>
    <li>Kerkhoutha: guards the South Gate in Bahamut's Palace that leads to the Elemental Plane of Air.</li>
    <li>Moriel: guards the West Gate in Bahamut's Palace that leads to the Elemental Plane of Air.</li>
    <li>Ruhiel: guards the East Gate in Bahamut's Palace that leads to the Elemental Plane of Air.</li>
</ul>";
        $helper->saveMonster($monster, ['Celestial', 'Outer Planes', 'Good', 'Outsider'], [
            'stats'     => [24, 20, 24, 19, 22, 25, 16, 5],
            'skills'    => [
                'Perception'    => ['dc' => 11],
            ],
            'features'  => [
                'magic_resistance',
                'divine_warrior' => ['meta' => 'No Action to activate. Can be added to Melee and Ranged attacks'],
                'true_sight'     => ['meta' => '120 ft'],
                'resistance'     => ['meta' => 'Positive, [Bludgeoning, Piercing, Slashing]'],
                'immunity'       => ['meta' => 'Charmed, Exhaustion, Frightened'],
            ],
            'spells'    => [
                'Detect Evil'     => ['meta' => 'At will'],
                'Detect Good'     => ['meta' => 'At will'],
                'Invisibility'    => ['meta' => 'At will. Self only'],
                'Blade Barrier'   => ['meta' => '3/day'],
                'Dispel Evil'     => ['meta' => '3/day'],
                'Flame Strike'    => ['meta' => '3/day'],
                'Heal'            => ['meta' => '3/day'],
                'Raise Dead'      => ['meta' => '1/day'],
                'Commune'         => ['meta' => '1/day'],
                'Control Weather' => ['meta' => '1/day'],
                'Insect Plague'   => ['meta' => '1/day'],
            ],
            'languages' => ['Celestial', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Solar';
        $monster->size             = 'Large';
        $monster->type             = 'Celestial';
        $monster->alignment        = 'Any Good';
        $monster->armor_class      = '19 (Plate Mail +3 Armor) / 16';
        $monster->damage_reduction = '12 (Full Plate + Natural Armor)';
        $monster->hit_dice         = 18;
        $monster->speed            = '50 ft / 150 ft Fly';
        $monster->actions          = '<dl>
    <dt>Divine Awareness</dt> <dd>The solar knows if it hears a lie</dd>
    <dt>Searing Burst</dt> <dd>As an Action, the Solar emits magical divine energy. Each creature of its choice within a 10 foot radius must make a 23 DC DEX Save or take 4D6 Fire + 4D6 Positive damage on a Failed Save or half on a Successful Save.</dd>
    <dt>Blinding Gaze</dt> <dd>As a Double Action, the Solar targets one creature it can see within 30 ft. If the target can see it, the target must succeed on a DC 15 CON Save or be Blinded until magically healed.</dd>
    <dt>Flying Greatsword</dt> <dd>Melee Weapon Attack +18 to hit, reach 5 ft, one target. 4D + 14 Slashing (plus possible Smite Cantrip damage). The Solar can release the sword to attack by itself. It has a Move of 50 ft and attacks as if the Solar is weilding it.</dd>
    <dt>Slaying Longbow</dt> <dd>Ranged Weapon Attack +16 to hit, range 150/600 ft. one target. 2D8 + 6 Piercing (plus possible Smite Cantrip damage)</dd>
</dl>';
        $monster->description      = "
<h3>Known Solars</h3>
<ul>
    <li>Gabriel: In the service of Bahamut. In 1357 DR, Gabriel was captured by a group of balors in the Layers of the Abyss ruled by Orcus. He was tortured by them until eventually he was freed by Gareth Dragonsbane's party.</li>
    <li>Xerona: Guards the gate, al-Sihal at the top of the gem-stone ziggurat in Jovar in Mount Celestia that leads to the final layer, Chronias. He judges those that wish to climb to the final layer of Mount Celestia.</li>
    <li>
        <p>Felarathael: Felarathael, along with Lashrael are the primary servitors of Corellon, most commonly acting as his messengers on Toril but also defending mortal elves under threat.</p>
            <p>Felarathael and Lashrael are identical twins, with both appearing as tall, beautiful and androgynous elves of no particular race, with shining bodies and wearing gleaming white robes.</p>
            <p>Despite being twins, the two have very different personalities. Felarathael is a being of pure rationality. Regardless of the situation, Felarathael considered things with calm detachment and logical reasoning. His speech, though slow and measured, is always with great reassurance. In battle, too, Felarathael is patient but skilled.</p>
            <p>In battle, rather than deal injury to an opponent, Felarathael and Lashrael can cause the victim to sleep without fail, suffer from amnesia, be polymorphed into the form of a forest animal, or be randomly teleported 1 to 10miles away.</p>
            <p>In the Year of the Lost Keep, 1379 DR, Felarathael and Lashrael went together to the Fugue Plane under the orders of Corellon Larethian to retrieve the soul of the slain drow Cavatina Xarann, a Darksong Knight of Eilistraee. They explained to her that a few hundred of the followers of Eilistraee had been turned back to their original dark elven form, and that Cavatina was among them, thanks to the sacrifice of Qilue Veladorn. Felarathael and Lashrael led her to Arvandor, as they claimed that the transformed drow would be allowed into the elven afterlife.</p>
    </li>
    <li>
        <p>Lashrael: Felarathael and Lashrael are identical twins, with both appearing as tall, beautiful and androgynous elves of no particular race, with shining bodies and wearing gleaming white robes.</p>
            <p>Despite being twins, the two have very different personalities. Lashrael is a being of extreme emotion. Lashrael speaks and delivers Corellon's messages with powerful conviction, deep sorrow, or tremendous joy, depending on the subject. He makes dramatic gestures and his mood can change as quickly as the subject does. He is a fierce fighter who never asks for or gives quarter to an opponent.</p>
            <p>In battle, rather than deal injury to an opponent, Felarathael and Lashrael can cause the victim to sleep without fail, suffer from amnesia, be polymorphed into the form of a forest animal, or be randomly teleported 1 to 10miles away.</p>
            <p>In the Year of the Lost Keep, 1379 DR, Felarathael and Lashrael went together to the Fugue Plane under the orders of Corellon Larethian to retrieve the soul of the slain drow Cavatina Xarann, a Darksong Knight of Eilistraee. They explained to her that a few hundred of the followers of Eilistraee had been turned back to their original dark elven form, and that Cavatina was among them, thanks to the sacrifice of Qilue Veladorn. Felarathael and Lashrael led her to Arvandor, as they claimed that the transformed drow would be allowed into the elven afterlife.</p>
            <p>As of 1479 DR, some elven crusaders who revered Lashrael opposed the influence of the leShay of Sarifal</p>
    </li>
    <li>Viryn: Solar in the service of Tyr. He was in charge of the escort that brought the diviner deva Eirwyn to prison. After the SpellPlague, Viryn was ordered to free Eirwyn and take her to a council. Later, Viryn fought against the fiend armies that tried to invade Celestia, profiting off the chaos.</li>
</ul>";
        $helper->saveMonster($monster, ['Celestial', 'Outer Planes', 'Good', 'Outsider'], [
            'stats'  => [26, 22, 26, 25, 25, 30, 21, 7],
            'skills' => [
                'Perception' => ['dc' => 14],
            ],
            'features' => [
                'magic_resistance',
                'divine_warrior' => ['meta' => 'No Action to activate. Can be added to Melee and Ranged attacks'],
                'true_sight'     => ['meta' => '120 ft'],
                'resistance'     => ['meta' => 'Positive, [Bludgeoning, Piercing, Slashing]'],
                'immunity'       => ['meta' => 'Negative, Poison, Charmed, Exhaustion, Frightened'],
            ],
            'spells'    => [
                'Detect Evil'       => ['meta' => 'At will'],
                'Detect Good'       => ['meta' => 'At will'],
                'Invisibility'      => ['meta' => 'At will. Self only'],
                'Neutralize Poison' => ['meta' => 'At will'],
                'Restoration'       => ['meta' => 'At will'],
                'Zone of Truth'     => ['meta' => 'At will'],
                'Blade Barrier'     => ['meta' => '3/day'],
                'Dispel Evil'       => ['meta' => '3/day'],
                'Heal'              => ['meta' => '3/day'],
                'Raise Dead'        => ['meta' => '3/day'],
                'Teleport'          => ['meta' => '3/day'],
                'Commune'           => ['meta' => '1/day'],
                'Control Weather'   => ['meta' => '1/day'],
            ],
            'languages' => ['Celestial', 'Telepathy' => ['meta' => '120 ft']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Chosen One';
        $monster->size             = 'Medium';
        $monster->type             = 'Humanoid';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D4 Slashing damage</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D8 Piercing plus Poison. CON Save or suffer 1D2 CON Damage on the initial hit, then on the following turn, suffer 1D4 CON Damage. A Successful Save avoids this CON Damage.</dd>
</dl>';
        $monster->description      = "<p>Chosen Ones attack fearlessly, biting with fangs and slashing with filthy claws. They obey their creators' commands to the best of their ability. However, a chosen one occasionally goes berserk, somehow recovering some memory of its past life and the tortures it endured at its master's hand. For each consecutive round a Chosen One is in combat after the fifth, there is a cumulative 1% chance that it goes berserk, screaming horribly and fleeing combat in search of its creator.</p>
<p>Chosen Ones can be created with the Create Chosen One spell.</p>";
        $helper->saveMonster($monster, ['Humanoid'], [
            'stats'     => [11, 13, 11, 6, 12, 10, 2, 2],
            'skills'    => ['Perception' => ['dc' => 5], 'Athletics' => ['dc' => 2, 'meta' => 'Climb']],
            'feats'     => ['Alertness'],
            'features'  => [
                'multi_attack' => ['meta' => 'If the Chosen One successfully hits with 2 claw attacks, they gain an additional Action. This Action can only be used to make Bit attacks.'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Cloaker';
        $monster->size             = 'Large';
        $monster->type             = 'Aberration';
        $monster->alignment        = 'CN';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 12;
        $monster->speed            = '10 ft / Fly 40 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 10 (2D6 +3) Piercing damage, and if the target is Large or smaller, the Cloaker attaches to it. If the Cloaker has Advantage against the target, the Cloaker attaches to the target's head, and the target is Blinded and unable to breathe while the Cloaker is attached. While attached, the Cloaker can make this attack only against the target and has Advantage on the attack roll. The Cloaker can detach itself by spending 5 ft of its movement. A creature, including the target, can take its Action to detach the Cloaker by succeeding on a DC 16 STR check. While attached to a creature it this way, a Cloaker that takes damage only takes half damage (rounded down), and the creature the Cloaker is attached to takes the other half.</dd>
    <dt>Tail</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 7 (1D8 +3) Slashing damage.</dd>
    <dt>Moan</dt> <dd>Each creature within 60 feet of the Cloaker that can hear its Moan abd that isn't an Aberration must succeed on a DC 13 WIS Save or become Frightened until the end of the Cloaker's next turn. If a creature's Save is successful, the creature is immune to the Cloaker's Moan for the next 24 hours.</dd>
    <dt>Phantasms (Recharge after a Short or Long Rest)</dt> <dd>
        <p>The Cloaker magically creates three illusory duplicates of itself if it isn't in bright light. The duplicates move with it and mimic its Actions, shifting position so as to make it impossible to track which Cloaker is the real one. If the Cloaker is ever in an area of bright light, the duplicates disappear.</p>
        <p>Whenever any creature targets the Cloaker with an attack or a harmful spell while a duplicate remains, that creature rolls randomly to determine whether it targets the Cloaker or one of the duplicates. A creature is unaffected by this magical effect if it can't see or if it relies on senses other than sight.</p>
        <p>A duplicate has the Cloaker's AC, and uses its Saves. If an attack hits a duplicate, or if a duplicate fails a Save against an effect that deals damage, the duplicate disappears.</p>
    </dd>
</dl>";
        $helper->saveMonster($monster, ['Aberration'], [
            'stats'    => [17, 15, 12, 13, 12, 14, 8, 3],
            'skills'   => ['Stealth' => ['dc' => 5]],
            'features' => [
                'darkvision'       => ['meta' => '{"range":60}'],
                'sunlight_sensitivity',
                'false_appearance' => ['meta' => 'While the Cloaker remains motionless without its underside exposed, it is indistinguishable from a dark leather cloak.'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Couatl';
        $monster->size             = 'Medium';
        $monster->type             = 'Celestial';
        $monster->alignment        = 'LG';
        $monster->armor_class      = '15';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 1;
        $monster->speed            = '30 ft / Fly 90 ft';
        $monster->actions          = "<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 8 (1D6 +3) Piercing damage, and the target must succeed on a DC 13 CON Save or be Unconscious for 24 hours. Another creature can use an Action to shake the target awake.</dd>
    <dt>Constrict</dt> <dd>Melee Weapon Attack, reach 10 ft, one target. 10 (2D6 +3) Bludgeoning damage, and the target is Grappled (escape DC 15). Until this Grapple ends, the target is Restrained, and the Couatl can't Constrict another target.</dd>
</dl>";
        $helper->saveMonster($monster, ['Celestial'], [
            'stats' => [16, 20, 17, 18, 20, 18, 4, 2],
            'saves' => [
                'CON' => ['bonus' => 5],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 6],
            ],
            'features' => [
                'resistance'    => ['meta' => 'Positive'],
                'vulnerability' => ['meta' => 'Axiomatic, Unholy'],
                'immunity'      => ['meta' => '[Bludgeoning, Piercing, Slashing]'],
            ],
            'feats'  => ['Improved Grapple'],
            'spells' => [
                'Comprehend Language' => ['meta' => 'At will'],
                'True Seeing'         => ['meta' => 'At will'],
            ],
            'powers' => [
                'Metamorphosis' => ['meta' => 'At will'],
            ],
            'classes' => ['Psion' => ['level' => 12]],
        ]);
    }
}
