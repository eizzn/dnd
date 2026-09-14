<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersYSeeder extends Seeder
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
        $monster->name             = 'Battleloth, Arrow';
        $monster->size             = 'Small';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '15 (Natural Armor)';
        $monster->damage_reduction = '1 (Natural Armor) (7 while in Arrow Form)';
        $monster->hit_dice         = 1;
        $monster->speed            = '20 ft / 80 Fly';
        $monster->actions          = '<dl>
    <dt>Arrow Form</dt> <dd>Can transform into a +1 Arrow as an Action. When fired from a bow, the Arrow Battleloth can turn to strike the target that the bow wielder was aiming at. The Battleloth ignores any concealment or cover bonus to AC. Although the Battleloth can turn into an arrow and fly on its own, it cannot attack in arrow form without being fired from a bow.</dd>
    <dt>Claw +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D3 +1 Slashing.</dd>
</dl>';
        $monster->description      = "<p>Arrowloths look like a simple barbed-steel arrow in their weapon form. In their humanoid form, they appear as brown-skinned, feathered creatures with steel arrowheads for claws.</p>
<p>Arrowloths are the most complaining and whining of the battleloths. They often nitpick and abuse the wording of their contracts in order to avoid most work.</p>
<p>Arrowloths believe their only combat function is to act as ammunition, and thus they will stay in weapon form or try to escape after being shot, unless their opponent is obviously weaker than them. When not employed, they will flee rather than fight, although they are also known to form small quivers that robbed the feeble or injured.</p>
<p>Battleloths can easily and frequently switch between their forms as they wish, in their weapon form they remain aware of their surroundings and are even capable of casting spells that do not require material or somatic components, although few care to learn spellcasting at all.</p>
<p>At one point in history, the battleloths struck a bargain with a mortal wizard as part of a larger plan to bring down a particularly successful pit fiend general known as Balruhk the Invincible. However, this ended in disastrous consequences when the spell meant to bind Balruhk, despite working, devastated both the pit fiend's forces and the tanar'ri hordes sent by demon lords that Balruhk's rivals were conspiring with.</p>
<p>For their part in the plan, the battleloths who served that pit fiend betrayed him on the fields of battle. The exact nature of betrayal was unknown, although the battleloths asked a very high price for doing so. In the aftermath, there was a sharp drop in the number of offers of employment offered to the yugoloths as a whole. Furious with the battleloths, it was decreed by the other yugoloths that they were forbidden from gathering in groups larger than thirty, and from accepting employment from mortals, for the next three centuries. This caused the battleloths to fall into obscurity among mortal spellcasters as they were suddenly unable to make deals with them.</p>";
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral', 'Animal Companion'], [
            'stats'     => [10, 17, 11, 10, 14, 11, 1, 2],
            'skills'    => [
                'Crafting' => ['dc' => 4, 'meta' => 'Fletching'],
            ],
            'features'  => [
                'vulnerability' => ['meta' => 'Cold Iron, Holy'],
                'darkvision'    => ['meta' => '60 ft'],
                'resistance'    => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Acid, Poison'],
            ],
            'feats'     => ['Dodge'],
            'languages' => [
                'Abyssal', 'Infernal',
                'Telepathy' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Battleloth, Axe';
        $monster->size             = 'Small';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '15 (Natural Armor)';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '20 ft';
        $monster->actions          = "<dl>
    <dt>Axe Form</dt> <dd>Can transform into a +1 greataxe as an Action. The fanged mouth set along the edge of the axe allows the Axeloth to make a Bite Attack with a +5 bonus to hit. The bite is in addition to the wielder's attack.</dd>
    <dt>Bite +1</dt> <dd>Melee Weapon attack, reach 5 ft, one target. 1D4 +1 Piercing.</dd>
    <dt>Gore +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D6 +1 Piercing.</dd>
</dl>";
        $monster->description      = '<p>Axeloths look like bronze greataxes with spikes on the head, a leering visage engraved on the blade, and sharp fangs on the edges. Their humanoid form is that of a gray, diminutive beings with a bony ridge along their foreheads sharp enough to act as a blade.</p>
<p>Axeloths are notoriously dense, their ability to communicate limited to only a few short words. When negotiating employment contracts, their method is to simply state their terms over and over again until the potential employer either agreed or quit the negotiations altogether. They enjoy fighting, however, and are always eager to do so in either form.</p>
<p>When wielded in combat, axeloths are capable of making an extra bite attack on their own while in weapon form. When on their own, they spend their spare time sharpening their ridges before using them to destroy random objects such as trees of rocks, although if bothered, they will turn their blades against any annoyance with stalwart courage.</p>
<p>Battleloths can easily and frequently switch between their forms as they wish, in their weapon form they remain aware of their surroundings and are even capable of casting spells that do not require material or somatic components, although few care to learn spellcasting at all.</p>
<dl>
    <dt>Animal Companion</dt> <dd>3rd Level Spell Slot (Ranger 1st Level Spell Slot).</dd>
</dl>';
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral', 'Animal Companion'], [
            'stats'     => [13, 11, 12, 8, 9, 10, 2, 2],
            'skills'    => [
                'Athletics' => ['dc' => 7],
                'Crafting'  => ['dc' => 5, 'meta' => 'Weaponsmithing'],
            ],
            'features'  => [
                'vulnerability' => ['meta' => 'Cold Iron, Holy'],
                'darkvision'    => ['meta' => '60 ft'],
                'resistance'    => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Acid, Poison'],
            ],
            'feats'     => ['Power Attack'],
            'languages' => [
                'Abyssal', 'Infernal',
                'Telepathy' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Battleloth, Crossbow';
        $monster->size             = 'Small';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '15 (Natural Armor)';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '20 ft / 80 Fly';
        $monster->actions          = '<dl>
    <dt>Crossbow Form</dt> <dd>Can transform into a +1 light crossbow as an Action. It grants its wielder the benefits of the Rapid Reload Feat.</dd>
    <dt>Bite +1</dt> <dd>Melee Weapon attack, reach 5 ft, one target. 1D3 +1 Piercing.</dd>
    <dt>Bone Shards +1</dt> <dd>Ranged Weapon Attack, reach 60 ft, one target. 1D6 +1 Piercing.</dd>
</dl>';
        $monster->description      = '<p>As weapons, crossbowloths are light wood and iron crossbows with wicked faces where the bow joined to the stock. Their other form is a pale, uncannily wide-mouthed humanoid.</p>
<p>Crossbowloths are pragmatists who feel no loyalty or attachment to their employers, seeing what they do as nothing more than providing a service. They do not particularly enjoy nor dislike combat. If a crossbowloth feels like breaking its bond to its current employer, it will blatantly inform foes how much it would take buy their services. Ff the current employer grows angry and attacks, the battleloth will simply take the "betrayal" as an excuse to leave with its payment.</p>
<p>Crossbowloths allow their wielder to lay down a steady stream of fire while in weapon form. In humanoid form, they will bite or shoot bone shards from their mouths at opponents. However, they prefer to remain ranged rather than engaging in melee.</p>
<p>Despite their complete lack of loyalty, crossbowloths are the most often sought after of the race due to their versatile combat utility.</p>
<p>Battleloths can easily and frequently switch between their forms as they wish, in their weapon form they remain aware of their surroundings and are even capable of casting spells that do not require material or somatic components, although few care to learn spellcasting at all.</p>
<dl>
    <dt>Animal Companion</dt> <dd>3rd Level Spell Slot (Ranger 1st Level Spell Slot).</dd>
</dl>';
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral', 'Animal Companion'], [
            'stats'     => [11, 13, 10, 10, 11, 10, 2, 2],
            'skills'    => [
                'Thievery' => ['dc' => 7, 'meta' => 'Disable Device and Pick a Lock only'],
                'Insight'  => ['dc' => 4],
            ],
            'features'  => [
                'vulnerability' => ['meta' => 'Cold Iron, Holy'],
                'darkvision'    => ['meta' => '60 ft'],
                'resistance'    => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Acid, Poison'],
            ],
            'feats'     => ['Power Attack'],
            'languages' => [
                'Abyssal', 'Infernal',
                'Telepathy' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Battleloth, Pick';
        $monster->size             = 'Small';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '15 (Natural Armor)';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 2;
        $monster->speed            = '20 ft';
        $monster->actions          = "<dl>
    <dt>Pick Form</dt> <dd>Can transform into a +1 heavy pickaxe as an Action. As soon as it scores a hit in combat, it attaches to the victim's body as noted above. Thereafter, it usually assumes humanoid form and begins draining blood. Many a victim has been horrified to see the pick head embedded in its flesh transform into the proboscis of a monstrous creature.</dd>
    <dt>Bite +1</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D3 +1 Piercing.</dd>
    <dt>Attach</dt> <dd>When a Pickloth in either weapon form or humanoid form scores a hit on a target, it can make a Grapple attack as an Action. If the Grapple is successful, it uses an Action to change into it's humanoid form and then another Action to start Draining its blood.</dd>
    <dt>Blood Drain</dt> <dd>Once attached, as an Action, a Pickloth in humanoid form can drain the opponent's blood, automatically dealing 1D3 CON damage per round of attachment. The Pickloth does not willingly detach until it has killed the victim.</dd>
</dl>";
        $monster->description      = "<p>Pickloths look like heavy, brass picks with hollow heads and a tiny hole in the point, while in their humanoid forms they are slender and long limbed, with mosquito-like faces.</p>
<p>Pickloths in both forms have a hollow head (in weapon form) or \"beak\" (in humanoid form) through which they drink blood. They can attach themselves to an opponent while in either form, although doing so forces them into humanoid form, and will then proceed to try and drain their victim of blood.</p>
<p>Driven not by hunger for battle but hunger for blood, battleloths are usually driven into an opponent and allowed to drink their fill so that they can be relied upon later. Even when in the form of picks they immediately latch onto their first target and refused to let go under any circumstances, draining the victim's blood until they are dead. Their small stature and physical weakness is contrasted by their constant activity regardless of employment status, always seeking out conflict so as to ambush the injured and dying on the edges of a battlefield.</p>
<p>Despite their complete lack of loyalty, crossbowloths are the most often sought after of the race due to their versatile combat utility.</p>
<p>Battleloths can easily and frequently switch between their forms as they wish, in their weapon form they remain aware of their surroundings and are even capable of casting spells that do not require material or somatic components, although few care to learn spellcasting at all.</p>
<dl>
    <dt>Animal Companion</dt> <dd>3rd Level Spell Slot (Ranger 1st Level Spell Slot).</dd>
</dl>";
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral', 'Animal Companion'], [
            'stats'     => [11, 14, 10, 7, 11, 10, 2, 2],
            'skills'    => [
                'Stealth'      => ['dc' => 11],
                'Intimidation' => ['dc' => 4],
            ],
            'features'  => [
                'vulnerability' => ['meta' => 'Cold Iron, Holy'],
                'darkvision'    => ['meta' => '60 ft'],
                'resistance'    => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Acid, Poison'],
            ],
            'feats'     => ['Weapon Finesse'],
            'languages' => [
                'Abyssal', 'Infernal',
                'Telepathy' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Battleloth, Spiked Chain';
        $monster->size             = 'Small';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '17 (Natural Armor)';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '20 ft';
        $monster->actions          = '<dl>
    <dt>Spiked Chain Form</dt> <dd>Can transform into a +1 spiked chain as an Action.</dd>
    <dt>Constrict</dt> <dd>With a successful Grapple check, a spiked chain battleloth in humanoid form can crush a Grappled opponent, dealing 1D6 +4 Bludgeoning damage.</dd>
    <dt>Trip</dt> <dd>Upon a successful hit, a spiked chain battleloth in either humanoid or weapon form can attempt to trip its opponent as an Action.</dd>
</dl>';
        $monster->description      = '<p>In their weapon form, spiked chain battleloths appear as a length of blackened, spike-covered steel chain. They appear as five lengths of spiked chains radiating from a central point, each one functioning as a limb and one as a head, while in their humanoid form.</p>
<p>Spiked chain battleloths are aggressive and enjoy hunting for sport, their preferred prey being other battleloths, although the sword battleloths earned their reluctant respect.</p>
<p>Spiked chain battleloths constrict their opponents, tripping and entangling them regardless of form. While the battleloth wrapped up their foes their masters could strike unabated. When hunting independently, they ambush foes through tripping or attacks from above in order to catch opponents before they can fight back.</p>
<p>Battleloths can easily and frequently switch between their forms as they wish, in their weapon form they remain aware of their surroundings and are even capable of casting spells that do not require material or somatic components, although few care to learn spellcasting at all.</p>';
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral'], [
            'stats'     => [16, 17, 11, 10, 11, 10, 3, 2],
            'skills'    => [
                'Athletics' => ['dc' => 9],
                'Insight'   => ['dc' => 4],
            ],
            'features'  => [
                'vulnerability' => ['meta' => 'Cold Iron, Holy'],
                'darkvision'    => ['meta' => '60 ft'],
                'resistance'    => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Acid, Poison'],
            ],
            'feats'     => ['Improved Grapple', 'Improved Trip', 'Dodge'],
            'languages' => [
                'Abyssal', 'Infernal',
                'Telepathy' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Battleloth, Sword';
        $monster->size             = 'Small';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '17 (Natural Armor)';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '20 ft';
        $monster->actions          = '<dl>
    <dt>Sword Form</dt> <dd>Can transform into a +1 longsword as an Action.</dd>
    <dt>Claw +1</dt> <dd>Melee Weapon Attack, 5 ft reach, one target. 1D6 +2 Slashing.</dd>
</dl>';
        $monster->description      = "<p>Swordloths resemble ordinary longswords while in weapon form. In their humanoid form they are creatures with silvery skin and sword-like blades where their lower arms would be.</p>
<p>Swordloths are the most prideful, considering themselves the elite of the battleloths types. They prefer to stay in weapon form out of practicality, reducing their exposure to danger. They are wily, independent, and hard bargainers that would only ally with creatures who promise plenty of opportunities for success in combat, glory, and loot.</p>
<p>Swordloths prefer to remain in longsword form to reduce the danger to themselves, which they see as pragmatism rather than cowardice. They can aid their wielder by bending and shifting their blade to get past an enemy's guard to deflect attacks, even to the point of practically making an attack on their own. When encountered alone, without a master, they fight with caution and care, preferring to strike at the perfect time rather than attack from a suboptimal position.</p>
<p>Battleloths can easily and frequently switch between their forms as they wish, in their weapon form they remain aware of their surroundings and are even capable of casting spells that do not require material or somatic components, although few care to learn spellcasting at all.</p>";
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral'], [
            'stats'     => [13, 13, 12, 10, 12, 11, 3, 2],
            'skills'    => [
                'Diplomacy'    => ['dc' => 9],
                'Intimidation' => ['dc' => 4],
                'Arcana'       => ['dc' => 7],
                'Insight'      => ['dc' => 8],
            ],
            'features'  => [
                'vulnerability' => ['meta' => 'Cold Iron, Holy'],
                'darkvision'    => ['meta' => '60 ft'],
                'resistance'    => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Acid, Poison'],
            ],
            'feats'     => ['Power Attack', 'Cleave'],
            'languages' => [
                'Abyssal', 'Infernal',
                'Telepathy' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Merrenoloth';
        $monster->size             = 'Medium';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '13 (Natural Armor)';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 9;
        $monster->speed            = '30 ft / 30 Swim';
        $monster->actions          = '<dl>
    <dt>Oar</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D4 +3 Slashing damage.</dd>
</dl>';
        $monster->description = "<p>Merrenoloths, also known as Charonadaemons, are the highest ranking of the lesser yugoloths and in charge of piloting the boats that sail the River Styx. The skeletal servitors of Charon are the most specialized among the daemons, loyal only to their boats and the incredible amounts of money needed to afford their services</p>
<p>Merrenoloths appear as pale, nearly skeletal humanoids that stand 5 ft tall and wear rotted, hooded robes and burial wraps. Their eyes glow red, especially when they become angered.</p>
<p>Charonadaemons are grim and pitiless, possessing more cunning and malice than Charon himself. Merrenoloths hold a mercenary mentality and a neutral outlook in their dealings, possibly more than any other yugoloth. Despite being able to speak all languages they are taciturn in demeanor, preferring to focus on their skiffs rather than engage in needless chatter. They realized their inability to function without a ship and always attempted to stay near the one they had attached themselves to.</p>
<p>Merrenoloths do not excel in combat, as they are limited to trying to bite at foes with their bony fangs or smack them with their oars. They do, however, possess supernatural control of any ship they are hired to captain, being able to command them by simply naming their destination. They can manipulate the winds around their ships, not only to speed up travel and prevent others from boarding them but also to increase the level of comfort of paying passengers. The ship will not sink if the hull is breached and can be magically restored by the merrenoloth. Their crafts can be piloted not only in fiendish waters but also in the Ethereal and Astral planes if they so chose.</p>
<p>Although not weak, merrenoloths try to avoid combat whenever possible, only caring about the safety of their ship. Their contracts normally went out of their way to specify that they had no obligation to do battle.</p>
<p>Merrenoloths possess an innate understanding of the River Styx and all of its twists, bends, and channels, and so can not get lost within it. Although able to enter the Material Plane, doing so forces them to leave their skiffs behind, rendering them lost and practically powerless. As such, this is only done when they were summoned or sent to transport others between the Material and Lower Planes using a specialized version of plane shift. Those who take on contracts to ferry ships bond with the vessels allowing them to control it like their own skiffs.</br>
Merrenoloths demanded payment for their service worth 100 gold pieces charging either 10 platinum pieces, two gems worth at least 50 gold pieces each, or a magic item worth at least 100 gold pieces, per passenger, in advance. Unless paid they will prevent passengers from entering the boat and attempt to teleport away, and also refuse to accept cargo. When sent to the Material Plane it is sometimes in service to the Oinoloth, Charon, or another powerful evil entity to retrieve someone. Although it was practically impossible for them to get lost on the treacherous course of the river they are occasionally known to lead their passengers to traps laid out by a higher paying third party. It is advisable to increase the payment to a merrenoloth to avoid such an inconvenience. In order to secure a safe passage free of betrayal the sum paid has to be four times greater than normal.</br>
Because all merrenoloths are in constant telepathic contact with one another they are instantly aware of those who cheated or harmed another member of their kind. Although apathetic to each other's plight, transgressors of the merrenoloths' rules are duly noted and their services will be suspended for the violators. As the defender of all charonadaemons, Charon can be called upon to rescue an endangered merrenoloth, although his prices are so exorbitant that most of his followers would choose death first. The only way to return to the favor of the merrenoloths, and therefore call upon their services without rejection or almost inevitable treachery, is to make a suitable sacrifice to their race. Such a tribute often included the offering of rare gemstones, unique magical items, or the sacrifice of intelligent good-aligned beings, normally in a desecrated temple of good and presented with ceremony and repentance.</p>
<p>Merrenoloths exists only to obtain the fare for their ferrying service and try to steer clear of Blood War politics, although they will still ferry fiendish armies across the planes. It is only by maintaining their neutrality to the dealings of others that they can truly accomplish their purpose. Unlike most fiends, they can move throughout the Lower Planes without attracting suspicion due to their impartial status.</br>
If they are to subvert this purpose and act as spies for powerful entities they would no longer be able to move freely throughout the Styx and therefore be practically worthless. Although many tanar'ri and baatezu would like to subjugate them, and some powerful fiends occasionally forced them to obey their demands, most recognized the value in their services and so tolerated their unbiased behavior. Despite not outright controlling them for this reason, other powerful evil entities try to subtly manipulate them in ways that acted in their favor.</p>
<p>After being promoted from Yagnoloths, Merrenoloths quickly learn to trade the power of ownership and command, with that of material wealth and information. They absorb the knowledge of the labyrinthine River Styx and see its twisting patterns reflected in both the multiverse and the minds of the greater Yugoloths. They also gain further understanding of the benefits of making, holding to, and breaking contracts, as well as how to hold others to their whims and the politics of their society.</br>
Merrenoloths are sometimes called the in-between, as they represented a middle ground between the lesser and greater castes of the yugoloths. Only by learning the depths of their political system and mastering them can the normally apolitical merrenoloths be promoted into greater yugoloths in the form of Nycaloths.</p>
<p>Long ago, when under unyielding attacks by the demodands under the command of Apomps, the Merrenoloths were forced to make a difficult decision. With the prices for calling upon the Ultroloths for aid too high they were asked for the assistance of the night hags. In return for an Altraloth defender the night hags would be given free ferrying across the Styx forever. With nowhere left to turn, the Merrenoloths agreed and had one among them transformed into the altraloth known as Charon.</p>";
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral'], [
            'stats' => [16, 17, 10, 14, 17, 11, 3, 4],
            'saves' => [
                'DEX' => ['bonus' => 5],
                'INT' => ['bonus' => 5],
            ],
            'skills' => [
                'Nature'     => ['dc' => 5],
                'Perception' => ['dc' => 4],
                'Survival'   => ['dc' => 4],
            ],
            'features' => [
                'vulnerability' => ['meta' => 'Cold Iron, Holy'],
                'darkvision'    => ['meta' => '60 ft'],
                'resistance'    => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Acid, Poison'],
            ],
            'feats'  => ['Blindsight'],
            'spells' => [
                'Repair Construct' => ['meta' => "3/day. Can only be used to repair the Merroloth's ship"],
                'Gust'             => ['meta' => 'At will. Can be used to propel their ship'],
                'Detect Magic'     => ['meta' => 'At will'],
                'Fear'             => ['meta' => 'At will'],
                'Misty Step'       => ['meta' => 'At will'],
                'Shape Water'      => ['meta' => 'At will'],
                'Gust of Wind'     => ['meta' => '5/day'],
                'Control Water'    => ['meta' => '1/day'],
                'Plane Shift'      => ['meta' => '1/week'],
            ],
            'languages' => [
                'Abyssal', 'Celestial', 'Infernal', 'Modron', 'Slaad',
                'Special'   => ['meta' => 'Arcanaloths know many languages based on who they commonly deal with'],
                'Telepathy' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Canoloth';
        $monster->size             = 'Medium';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 16;
        $monster->speed            = '50 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 25 (6D6 +4) Piercing damage.</dd>
    <dt>Claws</dt> <dd>Melee Weapon Attack, reach 5 ft or 20/60 ft, one target. 15 (2D10 +4).</dd>
    <dt>Tongue</dt> <dd>Triple Action. Ranged Weapon Attack, range 30 ft, one target. 17 (2D12 +4) Piercing damage. If the target is Medium or smaller, it is Grappled (Escape DC 15) and Restrained until the Grapple ends. With an Action, it can pull the target up to 30 ft toward the Canoloth. The Canoloth can Grapple one target at a time with its tongue.</dd>
</dl>';
        $monster->description = "<p>Canoloths are the loyal hounds of the yugoloths, serving both as guardians and trackers for their masters. Although less populous and technically of lower status than the Mezzoloths, they are treated far more favorably and regarded as valued parts of any Yugoloth mercenary legion.</p>
<p>Canoloths stand 4 ft tall and are 6 ft in length, resembling giant canines somewhere between mastiffs and bulldogs and hosts various insectioid traits, such as their chitinous armor plating. They are hulking, 400 lb beasts with four clawed feet that they drag along the ground with their short, stubby forelegs.</br>
Within their mouths are two sets of teeth, with the first horizontal and the set behind it being vertical. Carelessly lolling out of both their massive maws is a barbed tongue, several inches thick and coated in sticky slime, that can flick outwards somewhere between 20‒30 ft at any moment. Their gaping nostrils lies at the front of their skulls, sniffing and snorting at the ground as they move. This is because canoloths lack eyes, navigating by their powerful olfactory and auditory senses.</p>
<p>Among the various Yugoloth castes, Canoloths are the most loyal, however this loyalty is not to be confused with discipline. Their obedience partially stem from their slothfulness, as they prefer to do as little work as possible. The other reason is that they are remarkably unintelligent and follow their masters' orders to the death. Although petty and malicious, they are also fairly tolerant of many fiendish denizens and might find themselves joining with abyssal creatures.</p>
<p>The senses of a Canoloth are strong enough to pinpoint creatures by smell and sound, easily compensating for their lack of eyesight. Invisibility, gaze attacks, visual illusions, and other effects reliant on sight are useless against them. At the same time, one could 'blind' a Canoloth by negating, overpowering, or bypassing their other senses. Through removing one's own scent, blocking the Canoloth's nostrils, or filling the air with an overwhelming odor, such as heavy incenses or noxious clouds of gas, one could reduce a Canoloth's ability to perceive a target. Moving silently, blocking their ears, or making a loud enough noise had a similar effect, although yelling is not enough to accomplish anything outside of making oneself obvious. Negation of both senses rendered Canoloths truly blind and failing this they can be tricked through the use of misleading noises and smells.</br>
In terms of offense, Canoloths are equipped with clawed paws they can use to tear foes limb from limb, although their armor-crushing jaws are far more deadly. Canoloths generally have no need to move in order to rip foes apart, as a combination of barbs and slime on their whip-like tongues let them drag any threat toward their waiting mouths. Foes have trouble escaping or bypassing a Canoloth even if not for their keen senses and entangling tongues. They emitted a dimensional-locking field nearby themselves, foiling any attempts to teleport in or out of the space.</p>
<p>Canoloths have a simple but effective combat strategy, pinpointing their enemies with their unusual senses before swiftly reeling them in with their tongues. Their next step is generally dependent on the situation. If not instructed otherwise Canoloths are usually content to harmlessly hold onto an intruder rather than kill them. If under orders, however, they will rend and chew until their former targets became meals. If surrounded or unable to reach their foes they normally resort to making unnerving yowls before trying to lash out.</p>
<p>Canoloths serve as the hunting dogs of the Yugoloths, acting as scouts, trackers, retrievers and assassins. They also make use of their uncanny perception to work as guardians and bodyguards, although they prefer to work as guards of precious treasures and crucial sites.</br>
While Mezzoloths and Dhergoloths make up the rank-and-file soldiers in Yugoloth armies, Canoloths are fewer, but more valuable than individual soldiers. Their ability to gather intelligence is a great aid to both Piscoloth and Nycaloth commanders. Their value to their leaders despite their relative weaknesses is well known to the Canoloths and used to bully and annoy Mezzoloths and Hydroloths. It is not uncommon for greater Yugoloths to keep a small pack of Canoloths around, with Arcanaloths and Ultroloths even saddling them and using them as mounts. Mezzoloths often train them to act as savage pets and sell them to whoever might desire one. Like guardian Yugoloths, they are occasionally summoned during attempts by mortals to conjure a Yugoloth without knowing the true name of one.</br>
When not employed, Canoloths roam the Lower Planes looking for victims to kill and torment. They are driven by a primal desire for flesh and instinctively form feral packs both with those of their kind and various other creatures. They are commonly seen within the Gray Wastes and Gehenna, but are also known to traverse the Blood Rift.</br>
It is postulated that Canoloths are created from Mezzoloths that show enough courage but this claim is somewhat unsubstantiated. At one point, it is unknown if this is a required step to power like the Dhergoloth caste or an intentional punishment like the Skeroloth caste, although eventually it is determined to be demotion. Regardless, all Yugoloths dread being turned into a Canoloth as, despite the improved opinion, becoming one basically removed all of a Yugoloth's status.</p>";
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral'], [
            'stats'  => [18, 10, 17, 5, 17, 12, 8, 5],
            'skills' => [
                'Perception' => ['dc' => 9],
            ],
            'features' => [
                'vulnerability' => ['meta' => 'Cold Iron, Holy'],
                'resistance'    => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Acid, Poison'],
                'darkvision'    => ['meta' => '60 ft'],
                'keen_sense'    => ['meta' => 'Hearing and Smell'],
                'magic_resistance',
            ],
            'feats'  => ['Blindsight'],
            'spells' => [
                'Dimensional Lock' => ['meta' => 'Always on. 60 ft burst.'],
            ],
            'languages' => [
                'Abyssal', 'Infernal',
                'Telepathy' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Mezzoloth';
        $monster->size             = 'Medium';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '8 (Natural Armor)';
        $monster->hit_dice         = 10;
        $monster->speed            = '40 ft';
        $monster->actions          = '<dl>
    <dt>Claws</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 9 (2D4 +4) Slashing damage.</dd>
    <dt>Trident</dt> <dd>Melee Weapon Attack, reach 5 ft or 20/60 ft, one target. 7 (1D6 +3) Piercing or 8 (1D8 +4) Piercing damage when held with two claws and used to make a Melee attack.</dd>
</dl>';
        $monster->description = "<p>Mezzoloths, sometimes called mezzodaemons, are both the most common and lowest-ranking yugoloths. They act as the wretched grunts in the mercenary legions of the daemons, compensating for their low intelligence with fearsome combat skills</p>
<p>Mezzoloths appear as humanoid insects, standing 7 feet tall and weighing 250 pounds. They have six lanky limbs, four of which are arms ending in hands tipped with talons. Their entire bodies are covered in dense plates of ivory-colored chitin and their broad skulls are notably armored. When angered, their wide-set, unblinking eyes glare red, a state they are nearly always in. Despite their claws, mezzoloths almost always carry a shield and trident, or two tridents alone, into battle.</p>
<p>Mezzoloths are simplistic beings driven by the core principles of violence and reward. Beyond these concepts they have little care for, or understanding of, the world around them, spending their time training, imagining new fighting techniques, and wandering the Lower Planes for weak entities to bully. Their lack of intelligence generally force them to accept their regular abuse, further contributing to their brutality in combat.</br>
Their martial prowess are genuinely fearsome and the creatures delighted in destruction. Despite this, they are still relatively cautious, fleeing from battle when outmatched or outnumbered and unconcerned with honor or duty. They have a reputation as mercenaries, due to their love for treasure and tendency to work alone.</p>
<p>Mezzoloths are of a highly magical nature and have a natural affinity for magical items, even those normally restricted by class or alignment. They can fight unarmed using their talons and fists to tear their enemies apart. They have access to darkness and dispel magic spells, as well as the power to exude noxious yellow fumes to choke out their foes, while they fight in the fog unimpeded. A limited form of telepathy allows them to psychically communicate with others so long as they have at least basic sentience.</p>
<p>When engaging in combat, mezzoloths first try to soften their prey through their toxic mist before charging in with their weapons, dispelling any magical enchantments they notice being used. If outmatched, they use their darkness spell to cover their escape and teleporting away. They preferred to use magical weapons and shields in combat but would resort to their powerful claws if none are available. Their group tactics are practically the same, with large squadrons breathing their mist before heading into battle.</p>
<p>Mezzoloths act as the foot soldiers in the mercenary armies of the yugoloths and the most plentiful members of their kind. Despite being the lowest in rank among the yugoloths, mezzoloths are not the weakest of their race. Yugoloths from greater stations normally ruled over them with ease because of their low intelligence.</br>
Mezzoloths are easily drawn into service on the Material Plane by offering opportunities to destroy or great rewards for their assistance. Their compliance with evil mortals normally depend on the price those beings are willing to pay and whether or not the mortals acknowledged the mezzoloth's 'superior' position in the relationship. They commonly associate with Night Hags, Demons, and Devils, although they quickly grow weary of the constraining rules and regulations of the devils, but are more likely to establish lairs than rampage across reality like the demons.</p>
<p>Yugoloths often have to learn some kind of lesson that is built into their current rank as part of their advancement process. Mezzoloths have been taught that they are the weakest of the daemons and that everyone above them is more powerful, making them fairly easy to bluff, (while this was true of Dhergoloths in terms of sheer strength, they are in many ways weaker). By learning and calling out this bluff, often through the direct experience of defeating their Dhergoloth 'superiors', that being in command didn't always mean having raw strength, Mezzoloths can advance to the next stage of power.</p>
<p>In the eons since they first spawned, Mezzoloths have grown to populate the lower planes, as well as the Astral and Ethereal Planes. They are particularly common within Gehenna, and are theorized to have had a large portion of their population moved there.</p>
<p>The true place where Mezzoloths first formed is a point of contention among scholars. They are thought to be the yugoloth adaptations of another monster from the lower planes. Some claimed that the Mezzodemons originated within the depths of the Abyss, although later reports did not agree on this.</p>";
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral'], [
            'stats'  => [18, 11, 16, 7, 10, 11, 5, 4],
            'skills' => [
                'Perception' => ['dc' => 3],
            ],
            'features' => [
                'vulnerability' => ['meta' => 'Cold Iron, Holy'],
                'resistance'    => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Acid, Poison'],
                'darkvision'    => ['meta' => '60 ft'],
                'magic_resistance',
            ],
            'feats'  => ['Blindsight'],
            'spells' => [
                'Misty Step'   => ['meta' => 'At will'],
                'Darkness'     => ['meta' => '2/day'],
                'Dispel Magic' => ['meta' => '2/day'],
                'Cloudkill'    => ['meta' => '1/day'],
            ],
            'languages' => [
                'Abyssal', 'Infernal',
                'Telepathy' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Dhergoloth';
        $monster->size             = 'Medium';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 14;
        $monster->speed            = '30 ft';
        $monster->actions          = '<dl>
    <dt>Claws</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 12 (2D8 +3) Slashing damage</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 12 (2D8 +3) Piercing damage</dd>
    <dt>Flailing Claws</dt> <dd>Quadruple Action. The Dhergoloth uses another Action to move in a straight line and targets each creature within 5 feet of it during its movement. Each target must succeed on a DC 14 DEX Save or take 22 (3D12 +3) Slashing damage.</dd>
</dl>';
        $monster->description = "<p>Dhergoloths, often called Derghodaemons, are brutish Yugoloths one step above the Mezzoloths in the Yugoloth hierarchy. Like their inferiors, they are insectoid soldiers that works within mercenary armies, but have more limbs and greater strength at the cost of a lesser intellect.</p>
<p>Dhergoloths have a confusing and alien anatomy, standing between 8 feet and 10 feet tall on a tripod of legs. Their squat, muscular bodies are round and barrel-like in structure, mottled grayish green, encircled by five arms that each end in stumpy, four-clawed hands. Their heads are a strange combination of mantis and reptile, with faceted, burning eyes, and a pair of incessantly clicking mandibles.</br>
The three sections of their bodies, the head, torso, and legs, can rapidly swivel in any direction a full 360 degrees independently of the others, allowing them to change direction at will with staggering speed.</p>
<p>Dhergoloths are both stupid and stubborn, only fighting when compelled to by more powerful beings or promised a chance to slaughter in the near future. They are too dense to understand complex missions, the nature of war, or the gains that other creatures make from their fighting, nor do they care. They are incredibly sadistic, laughing maniacally when spilling blood and driven by an instinct to cause pain.</p>
<p>When not wandering the Lower Planes looking for weaker beings to kill, they have a tendency to congregate in large mobs of up to 500 members. This is likely due to a programmed instinct within their race that spares more powerful Yugoloths the tiresome task of gathering them all in one place. Despite being brutes without appreciation for wealth or knowledge of magic, they understand that other beings places value on these things, causing them to collect them.</p>
<p>A Dhergoloth's swiftly rotating body parts, combined with their multiple limbs and compound eyes, makes them virtually impossible to flank. Even those that do not wield weapons, allowing them to easily parry incoming blows, are armed with deadly claws that flailed in every direction along with their spinning torsos. Because of their insectoid body structure, they are known to be capable tunnelers, but are just as likely to try and teleport.</br>
If needed, they can make use of spell-like abilities resembling Darkness and Fear at will, as well as Sleep. Most confusing of their powers is their ability to reform, but not in the way typical to most fiends. While normally outsiders can only truly die on their native planes, the backwards Dhergoloths have the opposite ability, reforming within 1–3 days when killed within one of the neutral evil planes, but perishing permanently anywhere else.</p>
<p>Dhergoloths are normally used as shock troopers, barreling into combat against formations of smaller foes and making use of their claws and weapons, often attempting to grab them with their free hands. Since being surrounded is rarely problematic, they are free to indulge their bloodlust. Despite their love of combat, when in command of Mezzoloths they will abusively intimidate their minions into fighting for them, only risking combat once it is clear they can not handle the situation by themselves. When they do engage in combat, their aggression can reach suicidal levels, fighting to the death even when vastly outnumbered.</p>
<p>Dhergoloths receive near constant abuse from all Yugoloths above them, which in turn leads them to exact petty cruelty on those below them. As rank-and-file soldiers, the only beings they are given dominion over are their direct inferiors, the Mezzoloths, and punishment-class Yugoloths such as the Skeroloths and Canoloths. If allowed to, Dhergoloths normally wander the Gray Wastes looking for weaker beings to torment, or gathering in their instinctual mob formations waiting for a fight to come to them. Dhergoloths have a taste for soul larvae, a habit that makes them an annoyance to any being of the Lower Planes wishing to trade them, especially Night Hags. They are tolerated to a certain degree by such groups in order to prevent large-scale conflict with the rest of the yugoloths.</br>
Dhergoloths scavenge various styles, types, and crafts of weapons from the dead and dying of a battlefield. Although they might find magical weaponry, this is often confiscated by their superiors, with the best of their weapons normally being cold iron or silver. When they find gemstones and other trinkets, they make a habit of swallowing them in order to aid digestion and regurgitate them later when trying to impress or appease their superiors. This tactic is somewhat risky as their superiors are not above gutting them in order to extract any remaining treasures, a trick that enough denizens of the Lower Planes realized that at some point looting a Dhergoloth's corpse became somewhat standard practice.</br>
Although capable of crude speech, they prefer communicating telepathically. Among mortals, Dhergoloths are rather easily persuaded into accepting contracts that do not benefit them and possibly make them worse off. Bargains made by individual Dhergoloths are normally tilted in their summoner's favor, a fact they often do not care about so long as a constant supply of enemies to kill is provided. They are often employed to serve as brute assassins or raiders, hired to wipe out rebels, spies, and angry mobs. Despite their willingness to comply with most contracts, demonologists had to be wary when calling upon a Dhergoloth. Tasks that require complex thinking or have long wait times in between killings, guard duty for example, are either forgotten or ignored, with the creature killing its ward when no new victims arrived.</p>
<p>The special lesson required to reach the form of Dhergoloth is for a Mezzoloth to realize that, despite growing in physical power, that Dhergoloths are weaker than them in certain ways, and that raw power is not enough to command. Ironically for such aggressive and unintelligent creatures, threatening Dhergoloths is therefore effective, since they are aware that their position is essentially a bluff and that they haven't mastered the art.</br>
Dhergoloths themselves have to learn that advancement does not always mean an increase in power, even though their Piscoloth superiors are more powerful than them, and that even when one lost power they do not always lose influence in turn, an essential lesson in manipulation.</p>
<p>Despite one of their main purposes being to fight in the Blood War, they can not comprehend why they are fighting it, only that they are being given a chance to fight. When the Blood War enters its colder state, some Dhergoloths take up residence in the Blood Rift and Elemental Chaos, as well as elemental mountain ranges. Although they are native to Hades, they can be found in the Lower Planes of Tarterus and Gehenna like many Yugoloths, but more so than most. Dhergoloths are rarely encountered on other planes as they can be truly killed there. Contrary to most fiends, Dhergoloths will resurrect within three days if killed on one of their aligned planes but not anywhere else, a strange fact thought to be a result of their constant fighting in the Blood War.</br>
The reason for the existence of Dhergoloths is confusing to most, and they are speculated to be one of the punishment castes of Yugoloths. Stripping a planar denizen of their experiences is akin to destroying them. In truth, the Dhergoloths are the second stage in a Yugoloth's metamorphosis, and a necessary stage in order to advance. Those that manage to advance undergo a drowning ceremony in the River Styx and became Piscoloths.</p>";
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral'], [
            'stats' => [17, 10, 19, 7, 10, 9, 7, 4],
            'saves' => [
                'STR' => ['bonus' => 6],
            ],
            'feats' => [
                'Blindsight',
            ],
            'features' => [
                'vulnerability' => ['meta' => 'Cold Iron, Holy'],
                'resistance'    => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Acid, Poison, Charmed'],
                'multi_attack'  => ['meta' => 'The Dhergoloth may make up to to 2 additional Actions. The additional Actions can only be used to make Claw attacks, and these Claw attacks must be made on different targets'],
                'magic_resistance', 'darkvision',
            ],
            'spells' => [
                'Darkness'   => ['meta' => 'At will'],
                'Fear'       => ['meta' => 'At will'],
                'Misty Step' => ['meta' => 'At will'],
                'Sleep'      => ['meta' => '3/day'],
            ],
            'languages' => [
                'Abyssal', 'Infernal',
                'Telepathy' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Hydroloth';
        $monster->size             = 'Medium';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '15';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 18;
        $monster->speed            = '20 ft / 40 ft Swim / 30 ft Glide';
        $monster->actions          = "<dl>
    <dt>Claws</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 14 (2D8 +5) Slashing damage</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 16 (2D10 +5) Piercing damage</dd>
    <dt>Steal Memory</dt> <dd>the Hydroloth targets one creature it can see within 60 feet of it. The target must make a DC 16 INT Save. On a successful Save, the target takes 1D6 INT damage. On a failed Save, the target loses all Proficiencies, it can't cast Spells, in can't understand Languages, and if its INT and CHA scores are higher than 5, they become 5. Each time the target finishes a Long Rest, it can repeat the Save, ending the effect on itself on a success. A Restoration spell or Remove Curse spell cast on the target ends this effect early.</dd>
</dl>";
        $monster->description = "<p>Hydroloths, also known as Hydrodaemons, are amphibian Yugoloths that inhabit the River Styx and its numerous branches throughout the Lower Planes. They specialize in gathering intel, as they are immune to attempts to tamper and read into their thoughts while being able to steal memories themselves</p>
<p>Hydroloths are hideous amphibians that resemble squat humanoid toads and stood 10 ft tall when standing, although they are more often resting in a crouched stance. Their skin is warty, yellow, covered in mucus, and adorned with ancient, intricate symbols. They have frog-like faces that host a pair of bulbous eyes, webbed digits ending in claws on their hands and feet, and gliding flaps under their arms.</p>
<p>Hydroloths have transitioned from offers of power to those of information, trading items, and conjuring schemes to promote themselves through wealth and goods. Despite learning this, they still barely understood the true value of their various goods and are as likely to trade garbage for a fortune as they are to give away valuable artifacts for meager compensation.</br>
They approach the Blood War with great enthusiasm compared to other Yugoloths, and they are exceptionally capable killers with a preference to arrive, finish the job and disappear. They respect action and those devoted to it, believing it spoke louder than words to the point where they might rarely do favors to those that showed similar zeal, and are known to favor efficient conversation if they needed to talk.</p>
<p>Hydroloths are more dangerous in the air than on the ground, using their webbing to glide through the air like flying fish. While gliding, they can rip their foes apart with their foot claws in addition to their hand claws. Because of their aquatic nature, they are resistant to water-based effects and are harder to hurt when submerged within it.</br>
Hydroloths can also attack with their claws and bite. They are able to summon in Water Elementals, though they do not able to control the summoned Water Elements.</br>
Like the river they inhabit, hydroloths also stole their victims' memories by merely focusing on them from a distance. A creature whose memories are lost to a hydroloth became a mere husk, incapable of even the most basic tasks unless the effect can be resistad, after getting several days of recovery, or upon the casting of a remove curse or greater restoration spell.</p>
<p>In terms of underwater offensives and amphibious missions, hydroloths are unmatched, a fact that earns them acclaim among the Yugoloth community. They relish fighting the Blood War, as they draw strength from the horror of mortals. Weaker foes are gladly savaged while foes potentially capable of taking them on are avoided, although they take measures to stack battles in their favor and excelled at ambushes, covert operations, and guerrilla tactics. The crouched, toad-like position they normally adopt allows them to spring from hiding at a moment's notice, often pouncing on their enemies in an attempt to knock them into a nearby water source. This tactic is at its most potent when within the memory-stealing River Styx, and as such few are willing to go against them with the Blood River nearby.</p>
<p>Because of their unparalleled skill in aquatic missions, hydroloths are awarded prestige they used to obtain wealth, mortal life force and influence among their kind. Although capable of forcing them to obey, greater Yugoloths normally try to appease Hydroloths to secure their assistance without the use of outright dominance. They move throughout the Styx in groups of 10-30, existing as mercenaries, scavengers, and guides using their ability to navigate the river to their advantage. Worthwhile magical items and maps of the Lower Planes can be obtained through trading with Hydrodaemons as well as stolen memories, although their poor pricing skills could confuse matters. They are adept at finding lost objects and are accomplished underwater combatants, frequently hired to locate items that have sunk into the depths of the Styx and participate in raids of ships and coastal villages.</br>
After learning that a decrease in power can confer unforeseen advantages, in their own case the ability to keep their memories within the Styx, Hydroloths can enjoy a position free from the hatred of their Piscoloth states. They genuinely enjoy fighting the Blood War, but in order to advance have a new lesson to learn. Despite their new position of esteem and prestige they are still viewed as expendable soldiers by more powerful Yugoloths, and can be thrown into the deadliest parts of the Blood War at a whim. Once this realization is made, most desperately try to advance into Yagnoloths to avoid being sent into the brunt of the Blood War.</p>
<p>Along with, Amnizus, and Merrenoloths, Hydroloths are among the few creatures known to be immune to the deleterious effects of the River Styx. They have a preference for residing in liquids but can be found dwelling anywhere.</p>";
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral'], [
            'stats' => [12, 21, 16, 19, 10, 14, 9, 5],
            'saves' => [
                'DEX' => ['bonus' => 5],
                'INT' => ['bonus' => 9],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 7],
            ],
            'skills' => [
                'Insight'    => ['dc' => 4],
                'Perception' => ['dc' => 4],
            ],
            'feats'    => ['Blindsight'],
            'features' => [
                'vulnerability'         => ['meta' => 'Fire, Cold Iron, Holy'],
                'resistance'            => ['meta' => 'Cold, Electricity, [Bludgeoning, Piercing, Slashing] (Cold Iron, Holy)'],
                'immunity'              => ['meta' => 'Acid, Poison, Charmed'],
                'environment_advantage' => ['meta' => 'While submerged in liquid. The Hydroloth is also immune to the waters of the River Styx as well as any effect that would steal or modify its memories or detect or read its thoughts.'],
                'amphibious', 'magic_resistance', 'darkvision',
            ],
            'spells' => [
                'Detect Magic'      => ['meta' => 'At will'],
                'Darkness'          => ['meta' => 'At will'],
                'Invisibility'      => ['meta' => 'At will. Self only'],
                'Dispel Magic'      => ['meta' => 'At will'],
                'Water Walk'        => ['meta' => 'At will'],
                'Control Water'     => ['meta' => '3/day'],
                'Crown of Madness'  => ['meta' => '3/day'],
                'Fear'              => ['meta' => '3/day'],
                'Phantasmal Killer' => ['meta' => '3/day'],
                'Suggestion'        => ['meta' => '3/day'],
                'Misty Step'        => ['meta' => 'At will. 60 ft range'],
                'Summon Elemental'  => ['meta' => '1/week. Water Elemental only. No control of summoned elemental.'],
            ],
            'languages' => [
                'Abyssal', 'Infernal',
                'Telepathy' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Nycaloth';
        $monster->size             = 'Large';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '15 (Natural Armor)';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 13;
        $monster->speed            = '40 ft / 60 ft Fly';
        $monster->actions          = '<dl>
    <dt>Claws</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D6 +5 Slashing damage. If the target is a creature, it must succeed on a DC 16 CON Save or take 2D4 Slashing damage at teh start of each of its turns due to a fiendish wound. Each time the nycaloth hits the wounded target with this attack, the damage dealt by the wound increases by 2D4. Any creature can take an Action to stanch the wound with a successful DC 13 WIS (Medicine) check. The wound also closes if the target receives magical healing.</dd>
    <dt>Greataxe</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 2D12 +5 Slashing damage.</dd>
</dl>';
        $monster->description = "<p>Nycaloths, also known as nycadaemons, nycademons, and sky demons, are the elite air cavalry in yugoloth armies, swooping down onto enemy flanks and tearing up unsuspecting troops. They are the lowest of the greater yugoloths and bitterly resent it, constantly scheming to ascend to greater status and prestige.</p>
<p>Nycaloths are large gargoylish creatures that were 8‒9 ft feet in height and width, and weigh 800 pounds. Their more traditionally fiendish appearance are made more fearsome by their thick, rippling muscles. They are hulking yugoloths with tough, leathery, light green skin and powerful bat wings but nonetheless moved with astonishing swiftness. Their heads were vaguely canine, and it quickly darted from side to side like that of a bird, hosting a pair of horns and webbed ears.</p>
<p>Reports on the numbers of arms they possessed are variable with some claiming one pair and the others stating two. Regardless, all of their digits end in weighty, sharp claws seemingly able to cut through flesh and armor with ease. Most are seen carrying large greataxes.</p>
<p>Nycaloths are cruel, calculating, and controlling, acting with caution to ensure maximum personal benefit regardless of who has to be hurt in order to achieve it. They constantly scheme in order to garner the favor of their superiors of whose status they envy, bullying lesser yugoloths in order to gain attention. They seek amusement by harassing those confined to the ground but when enraged can exterminate entire companies of mezzoloths and dhergoloths.</p>
<p>Their confidence in their physical power is potentially their greatest flaw, behaving smugly when in the presence of those they believed to lack power but hesitating against those of considerable strength. Despite their flaws they are among the most loyal and cooperative of the yugoloths. So long as an arrangement is mutually beneficial they will willingly work with any evil-aligned beings, and a master that treated them well will find them stalwart in the face of all but the most extreme bribes.</p>
<p>Nycaloths are both powerful and fast yugoloths that soar through the sky even when carrying heavy loads. Their claws are incredibly sharp, causing wounds to bleed more profusely. They can see all parts of the radiation spectrum allowing them to sense invisible beings, and can telepathically communicate with any basically sentient being. Unlike many of their yugoloth kin, they can travel throughout the Abyss and Nine Hells as well as Gehenna, Carceri, and Hades.</p>
<p>Nycaloths most commonly use weapons and are particularly fond of giant two-headed axes. They are cunning enough to cleverly utilize what magical items they can wield to great effect. They pride themselves on being able to suddenly strike without warning before teleporting, or using their other spells to confuse their opponents and disappear without warning. Their preferred tactic is to rush enemies under the guise of invisibility before savaging them with their claws. If the foe managed to survive then they would try to soar into the sky with the opponent in hand before dropping them from the air.</p>
<p>Nycaloths serve as the elite air-force among the yugoloths, with commanders winning their status by virtue of power and toughness. They are often called sky demons due to their tactic of bringing foes into the air in order to let them plummet to their deaths. Their pragmatic exploitation and domineering attitudes cause many creatures of the Lower Planes to avoid them, including night hags, most demons, as well as lesser and greater devils. Although they are loyal, powerful, intelligent, and mercenary enough to work with practically anyone, their infuriating superiority complex cause their alliances to be brief.</p>
<p>They have the innate ability to travel to any of the lower planes at will and commonly travel to the Nine Hells and the Abyss in order to scout the Blood War. They watch the battlefields and report directly to the arcanaloths, allowing them their superiors to properly negotiate contracts and allocate the yugoloth's resources so that the ultroloths in turn could plot their next move. Supposedly they are also responsible for signaling when the yugoloth forces are to betray their current enforcers.</p
<p>Despite the fact that nycaloths are very crucial and possibly the most powerful of the greater yugoloths, they are afforded the least status. This is because the information they gathered goes to further those above them rather than themselves, and only by learning how to properly use information for their own gains can they become arcanaloths.</p>";
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral'], [
            'stats'  => [20, 11, 19, 12, 10, 15, 9, 5],
            'skills' => [
                'Intimidation' => ['dc' => 6],
                'Perception'   => ['dc' => 4],
                'Stealth'      => ['dc' => 4],
            ],
            'feats'    => ['Blindsight'],
            'features' => [
                'vulnerability'         => ['meta' => 'Fire, Cold Iron, Holy'],
                'resistance'            => ['meta' => 'Cold, Electricity, [Bludgeoning, Piercing, Slashing] (Cold Iron, Holy)'],
                'immunity'              => ['meta' => 'Acid, Poison, Charmed'],
                'magic_resistance', 'darkvision',
            ],
            'spells' => [
                'Detect Magic' => ['meta' => 'At will'],
                'Darkness'     => ['meta' => 'At will'],
                'Invisibility' => ['meta' => 'At will. Self only'],
                'Dispel Magic' => ['meta' => 'At will'],
                'Mirror Image' => ['meta' => 'At will'],
                'Misty Step'   => ['meta' => 'At will. 60 ft range'],
            ],
            'languages' => [
                'Abyssal', 'Infernal',
                'Telepathy' => ['meta' => '60 ft'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Yagnoloth';
        $monster->size             = 'Large';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '5 (Natural Armor)';
        $monster->hit_dice         = 14;
        $monster->speed            = '40 ft';
        $monster->actions          = "<dl>
    <dt>Massive Arm</dt> <dd>Melee Weapon Attack, reach 15 ft, one target. 23 (3D12 +4) Bludgeoning damage. If the target is a creature , it must succeed on a DC 16 CON Save or become Stunned until the end of the Yagnoloth's next turn.</dd>
    <dt>Life Leech</dt>
</dl>";
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral'], [
            'stats' => [19, 14, 21, 16, 15, 18, 11, 4],
            'saves' => [
                'DEX' => ['bonus' => 6],
                'INT' => ['bonus' => 7],
                'WIS' => ['bonus' => 6],
                'CHA' => ['bonus' => 8],
            ],
            'skills' => [
                'Deception'  => ['dc' => 8],
                'Insight'    => ['dc' => 6],
                'Perception' => ['dc' => 6],
                'Society'    => ['dc' => 8],
            ],
            'feats'    => ['Blindsight'],
            'features' => [
                'vulnerability' => ['meta' => 'Cold Iron, Holy'],
                'resistance'    => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Acid, Poison'],
                'magic_resistance', 'darkvision',
            ],
            'spells' => [
                'Shocking Grasp' => ['meta' => 'At will. Heightened +3. No Action'],
                'Darkness'       => ['meta' => 'At will'],
                'Detect Magic'   => ['meta' => 'At will'],
                'Dispel Magic'   => ['meta' => 'At will'],
                'Invisibility'   => ['meta' => 'At will. Self only'],
                'Suggestion'     => ['meta' => 'At will'],
                'Misty Step'     => ['meta' => 'At will'],
                'Lightning Bolt' => ['meta' => '3/day'],
                'Drain Life'     => ['meta' => '3/day'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Arcanaloth';
        $monster->size             = 'Medium';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '11';
        $monster->damage_reduction = '6 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '30 ft / 30 Fly';
        $monster->actions          = '<dl>
    <dt>Claws</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 8 (2D4 +3) Slashing damage. The target must make a DC 14 CON Save, taking 10 (3D6) Poison damage on a failed Save, or half as much damage on a successful one.</dd>
</dl>';
        $monster->description = "<p>Arcanaloths, or Arcanadaemons, are greater Yugoloths known for their covetousness of information and arcane power. The sly fiends are the record keepers of the yugoloths and scribes of Gehenna, managing transactions for services rendered in the Blood War.</p>
<p>Arcanaloths appeared as 6 ft tall humanoids with the heads of fanged jackals or war dogs. Protruding out from the top of their skulls are a pair of ivory, whitish horns. They keep themselves well groomed and dressed in immaculate robes, but often wear disgruntled expressions. When conducting negotiations they take on the guise of other humanoids, replacing their hateful snarls with charming smiles.</p>
<p>Arcanaloths are a relatively civilized breed of Yugoloth, possessing both keen minds and silvered tongues. They are business minded and somewhat surly, but are generally truthful and had expertise in manipulation and diplomacy. Their kind has earned a negative reputation for being adulating, avaricious and conniving in their dealings, and it is true that they viewed all around them as stepping stones to reach the rank of Ultroloth.</br>
Unlike most Yugoloths, their greed manifests not as a thirst for wealth but a hunger for the power found in knowledge and information. The easiest way to deal with them is to appeal to such greed, whether bluffing or being honest, hinting to them that one has access to esoteric knowledge without being too specific.</p>
<p>The claws of an Arcanaloth are poisonous and both their fangs and horns can be used in combat. Mind-affecting spells did not work on them due to a combination of their sharp minds and enchanted nature although this does not extend to the use of their true name to force them to obey. They can magically fly at will.</p>
<p>All Arcanolths commonly memorized offensive spells but are smart enough to learn spells of defense and escape. They are extremely intelligent and use their spells to maximum effect but avoid hand-to-hand combat despite their poisonous claws.</p>
<p>Within the feudal hierarchy of Gehenna, Arcanaloths are responsible for commanding units of lesser Yugoloths while keeping track of their contracts, records, and accounts. Their schemes are not in service to their kind but meant to bolster their own power and reputations, dependent as they are on their careful judgement.</br>
Their role in the Blood War is casual but crucial, as they perform all negotiations between the Tanar'ri and Baatezu and conduct them with skill born from experience. It falls to them to decide which legions will live another day and those who suffer at the front lines. They employ tactics all the more devious for their transparency, such as openly discussing the offers made by a client's enemies in order to prompt them into outbidding their rivals. Their ability to both speak and read all languages furthers their ability to forge contracts. They can douse the flames of discord and promote peace with the same grace with which they spark wars. It is not simply the nature of a contract that they arbiter but also the costs of the services, although when it comes to themselves they bartered in information and magical items rather than conventional rewards.</br>
Arcanaloths prefer to dwell within Gehenna, only leaving if needed and never for long, as they draw their power from its powerful furnaces. They rule from their respective baronies from red-iron fortresses scattered throughout the plane. The forts are occupied by small amounts of lesser yugoloths that act as its servants. While the larger keeps contain portals to other planes, with some rumored to reach into the Material Plane, they are warded by pentagrams and other magical protections. Most of their kind dwell within the Tower of the Arcanaloths located on Chamada, writing the contracts in the blood of some petitioners on the living skin of others. Arcanaloths that are born as opposed to being promoted are more likely to be found there.</p>
<p>To be promoted from Arcanaloth to Ultroloth is a task unlike any a Yugoloth has previously faced. Rather than learning a special lesson an Arcanaloth has to figure out how to take the place of an existing Ultroloth, making the title incredibly exclusive. Making this task harder is the fact that every Ultroloth not only realizes this but is well aware of how they themselves rose to power, ensuring an Arcanaloth will need to exercise creativity. A direct approach is also unwise as the Yagnoloths are under orders by the Ultroloths to execute any Arcanaloth that trys to rise to power in such an obvious manner.</p>
<p>The Tower of the Arcanaloths is thought to be the focal point of the caste's powers. After becoming an Arcanaloth, a Yugoloth can focus their mind and access all knowledge within the tower allowing them to gather information on the behaviors of those they have dealt with before, such as treacherousness or determination. However, this search is known to all other Yugoloths equal to or higher than an Arcanaloth and make their location known to such beings, making it impossible to do a search secretly. Arcanaloths can only be permanently destroyed while on Gehenna, rather than on Carceri or Hades. When this happened, an Arcanoloth's accumulated knowledge travels to the Tower of the Arcanaloths to be absorbed into the racial memory of all arcanaloths.</br>
Like each of the greater Yugoloths, Arcanaloths can breed only with other members of their caste and produce young Arcanaloths. The children are raised gracefully and given lessons in negotiation and diplomacy. In terms of food they are fond of eating bone marrow, partially as a show of disdain and also as an expression of their fiendish role as devourers of life from the inside out.</br>
Within the Book of Keeping is an incantation detailing instructions on how to brew a potion that grants success in anything. The potion's actual effectiveness is unknown, but it involved a piece of an Arcanaloth's heart.</p>
<p>Arcanaloths are rumored to have originated within the Abyss but have been driven out by the demon lords due to their deceptive nature. It is also claimed that both the Raavastas and Rakshasas are the descendants of the Arcanaloths, a notion supported by their mutual greed, but quickly dismissed as slander by the more honorable Rakshasas.</p>
<p>Notable Arcanaloths</p>
<ul>
    <li>Aximus and Exekarus, two Arcanaloths who manage a shrine to Laduguer on the Terminus Level to Undermountain</li>
    <li>Ygga Raxyg, an Arcanaloth bound to the Tomb of the Nine Gods by Acererak.</li>
    <li>Yrkhetep</li>
    <li>Nisviim is an Arcanaloth seneschal living in Corpsehaven that has been bound to the Oinoloth Inthracis via knowledge of his true name.</li>
    <li>Scrivenscry, a cruel, vainglorious book hunter in search of the Books of Keeping, a collection of tomes that is said to contain the true names of all Yugoloths.</li>
</ul>";
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral'], [
            'stats' => [17, 12, 14, 20, 16, 17, 12, 4],
            'saves' => [
                'DEX' => ['bonus' => 5],
                'INT' => ['bonus' => 9],
                'WIS' => ['bonus' => 7],
                'CHA' => ['bonus' => 7],
            ],
            'skills' => [
                'Arcana'     => ['dc' => 13],
                'Deception'  => ['dc' => 9],
                'Insight'    => ['dc' => 9],
                'Perception' => ['dc' => 7],
            ],
            'features' => [
                'vulnerability' => ['meta' => 'Cold Iron, Holy'],
                'resistance'    => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Acid, Poison, Charmed'],
            ],
            'spells' => [
                'True Seeing' => ['meta' => 'At will'],
                'Misty Step'  => ['meta' => 'At will'],
            ],
            'languages' => [
                'Abyssal', 'Celestial', 'Infernal', 'Modron', 'Slaad',
                'Special'   => ['meta' => 'Arcanaloths know many languages based on who they commonly deal with'],
                'Telepathy' => ['meta' => '120 ft'],
            ],
            'classes' => [
                'Wizard' => ['level' => 12],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Oinoloth';
        $monster->size             = 'Medium';
        $monster->type             = 'Yugoloth';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '13';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 0;
        $monster->speed            = '40 ft';
        $monster->actions          = "<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 14 (3D6 +4) Slashing damage plus 22 (4D10) Negative damage.</dd>
    <dt>Corrupted Healing (Recharge 6)</dt> <dd>
        <p>The Oinoloth touches one willing creature within 5 feet of it. The target regains all its Hit Points. In addition, the Oinoloth can end one Disease on the target or Remove one of the following Conditions.</p>
        <ul>
            <li>Blinded</li>
            <li>Deafened</li>
            <li>Paralyzed</li>
        </ul>
        <p>The target then gains 1 level of Exhaustion, and its Hit Point maximum is reduced by 7 (2D6). This reduction can be removed only by a Wish spell or by casting a Heightened Restoration on the target three times within the same hour. The target dies if its Hit Point maximum is reduced to 0.</p>
    </dd>
    <dt>Transfixing Gaze</dt> <dd>The Oinoloth targets one creature it can see within 30 feet of it. The target must succeed on a DC 16 WIS Save against this magic or be Charmed until the end of the Oinoloth's next turn. While Charmed in this way, the target is Restrained. If the target's Save is successful, the target is immune to the Oinoloth's Gaze fo the next 24 hours.</dd>
</dl>";
        $monster->description = "<p>The Oinoloth, sometimes called the Oinodaemon, is the nominal lord of the Yugoloths, maintaining their precarious position from the Wasting Tower of Khin-Oin. Oinoloths are harbingers of pestilence and the masters of wasting illness, ruling over Oinos, the diseased 1st layer of the Gray Wastes, with their power over plagues.</p>
<p>An Oinoloth's head resembles that of a foaming ram that has been deformed by disease. A portion of their skin has hideously sloughed off of their bodies and the wool that covered it is removed with ease. Unveiling their skin showed their boils, blisters, and pustules and their flesh is tautly strung over their bones.</p>
<p>Unlike the Yugoloth castes, the title of Oinoloth is simply that. It is a role that is not accompanied by a truly new form but a simple transformation. Khin-Oin's rulers are always of the Yugoloth race, to be more precise of the Ultroloth race, and only Ultroloths are known to have managed to take the title. The requirements are to vanquish the current Oinoloth and to sit on the Siege Malicious, a throne on the top of the Wasting Tower, although whether or not this requires the death of the original is uncertain.</p>
<p>The being who becomes the Oinoloth is disfigured by loss of their skin, an incurable ailment so long as they hold the title. But with the disfigurement comes power over disease as so long as the Oinoloth is within Hades, they can create any new disease or modify existing ones as they wished whether on or away from the throne. This process is so fast that coming up with a name for the disease can easily be the most time-consuming part of creation. Once created, the Oinoloth can securely infect anybody within 300 ft with the new disease. Oinoloths can blight the very ground they tread bringing disease and illness wherever they go and their claws are corrupting in their touch.</br>
An Oinoloth also has the ability to nullify any disease they have made and cure those suffering from it, although it would permanently debilitate them by doing so. Like Ultroloths their gaze is hypnotic, it charms those that look upon the Oinoloth.</p>
<p>Despite being the supposed ruler of the Yugoloth race, the Oinoloth spends less time coordinating their activities and managing their plans then they do trying to keep their own position. Khin-Oin's rulers are in constant competition with each other not only over the position of the Oinoloth but on whose vision of perfection is superior. Realizing these will go nowhere, most of these competitions turns violent, with the Oinoloth simply trying to turn factions against one another in order to turn their ire away from himself. While many ambitious Ultroloths gun for the throne some care not for becoming Oinoloth, preferring to simply manipulate those already in power.</p>";
        $helper->saveMonster($monster, ['Yugoloth', 'Fiend', 'Outer Planes', 'Evil', 'Outsider', 'Neutral'], [
            'stats' => [19, 17, 18, 17, 16, 19, 12, 4],
            'saves' => [
                'CON' => ['bonus' => 8],
                'WIS' => ['bonus' => 7],
            ],
            'skills' => [
                'Deception'    => ['dc' => 8],
                'Intimidation' => ['dc' => 8],
                'Perception'   => ['dc' => 7],
            ],
            'features' => [
                'vulnerability' => ['meta' => 'Cold Iron, Holy'],
                'resistance'    => ['meta' => 'Cold, Electricity, Fire, [Bludgeoning, Piercing, Slashing]'],
                'immunity'      => ['meta' => 'Acid, Poison, Charmed'],
            ],
            'spells' => [
                'Detect Magic'             => ['meta' => 'At will'],
                'Dispel Magic'             => ['meta' => 'At will'],
                'Invisibility'             => ['meta' => 'At will. Self only'],
                'Poison'                   => ['meta' => 'At will. Range 30 ft.'],
                'Contagion'                => ['meta' => 'At will. Range 30 ft. Heightened +4 (Abyssal Plague)'],
                'Misty Step'               => ['meta' => 'At will'],
                'Feeblemind'               => ['meta' => '1/day'],
                'Globe of Invulnerability' => ['meta' => '1/day'],
                'Wall of Fire'             => ['meta' => '1/day'],
                'Wall of Ice'              => ['meta' => '1/day'],
                'Blight'                   => ['meta' => 'At will. As an Action. Heightened to affect all Plants.'],
            ],
            'languages' => [
                'Abyssal', 'Celestial', 'Infernal', 'Modron', 'Slaad',
                'Special'   => ['meta' => 'Arcanaloths know many languages based on who they commonly deal with'],
                'Telepathy' => ['meta' => '120 ft'],
            ],
            'classes' => [
                'Wizard' => ['level' => 12],
            ],
        ]);
    }
}
