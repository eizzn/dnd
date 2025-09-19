<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersLSeeder extends Seeder
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
        $monster->name             = 'Lamia';
        $monster->size             = 'Large';
        $monster->type             = 'Fiend';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '10';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '20 ft / Fly 40 ft';
        $monster->actions          = '<dl>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D10 + 3) Slashing.</dd>
    <dt>Dagger</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D4 + 3) Piercing.</dd>
    <dt>Corrupting Touch</dt> <dd>Melee Spell Attack, reach 5 ft, one target. The target suffers 2 points of WIS damage.</dd>
    <dt>Leap</dt> <dd>The lamia jumps up to 30 feet by spending 10 feet of Movement</dd>
</dl>';
        $helper->saveMonster($monster, ['Fiend'], [
            'stats'  => [16, 13, 15, 14, 15, 16, 4, 2],
            'skills' => [
                'Deception' => ['dc' => 7],
                'Insight'   => ['dc' => 4],
                'Stealth'   => ['dc' => 3],
            ],
            'features' => [
                'darkvision'          => ['meta' => '60 ft'],
                'innate_spellcasting' => ['meta' => 'INT DC 13'],
            ],
            'spells' => [
                'Disguise Self'  => ['meta' => 'At will, any humanoid form'],
                'Minor Illusion' => ['meta' => 'At will'],
                'Charm'          => ['meta' => '3/day'],
                'Suggestion'     => ['meta' => '3/day'],
                'Geas'           => ['meta' => '1/day'],
                'Major Image'    => ['meta' => '1/day'],
                'Scrying'        => ['meta' => '1/day'],
            ],
            'languages' => ['Abyssal', 'Special' => ['meta' => 'One regional language']],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Laerti';
        $monster->size             = 'Medium';
        $monster->type             = 'Lizard';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '12 (Natural Armor)';
        $monster->damage_reduction = '2 (Natural Armor)';
        $monster->hit_dice         = 3;
        $monster->speed            = '30 ft / Burrow 10 ft';
        $monster->actions          = '<dl>
    <dt>Weapon</dt> <dd>Melee Weapon Attack, 5 ft, one target. (1D6 +1) Slashing</dd>
    <dt>Claws</dt> <dd>Melee Weapon Attack, 5 ft, one target. (1D6 +1) Slashing</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, 5 ft, one target. (1D6 +1) Piercing</dd>
</dl>';
        $monster->description = "<p>Called 'asabis' by the Bedine (these beings live in the Anauroch), these desert-dwelling reptiles are superficially similar to the lizard men of the swamplands. Laertis tend to be brown or gray in hue, with dun or light green underbellies.</p>
<p>On the surface of desert lands, laertis are only encountered at night. They must spend the day hiding from the son, either burrowed a few feet beneath the sand, or in a cave or huddled in a rock crevice. Their body temperature prohibits them from activity in the hot sun (more than an hour in the mid-day sun will cause a laertis to collapse). Left to themselves, laertis dwell in tribes, under the rule of a council of elders and a war-leader. They may ally themselves with Dark Nagas and other cooperative evil creatures for mutual gain. Every laertis tribe has at least 2D8 Stingtail members. Most laertis of Anauroch are controlled by the Phaerimm and live in war-bands or other groups at the whim of their masters.</p>
<p>Laertis eat the internal organs (soft parts) of humans, camels, and other preys, tearing open the bodies and leaving the rest for vultures. They also eat certain subterranean fungi, such as lichens, mushrooms, and myconids, and certain taproots that enter the depths from the surface world above.</p>";
        $helper->saveMonster($monster, ['Lizard', 'Humanoid'], [
            'stats' => [12, 10, 13, 11, 9, 7, 1, 1],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Stingtail';
        $monster->size             = 'Large';
        $monster->type             = 'Lizard';
        $monster->alignment        = 'NE';
        $monster->armor_class      = '12 (Natural Armor)';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '25 ft / Burrow 10 ft';
        $monster->actions          = '<dl>
    <dt>Weapon</dt> <dd>Melee Weapon Attack, 5 ft, one target. (1D6 +3) Slashing</dd>
    <dt>Claws</dt> <dd>Melee Weapon Attack, 5 ft, one target. (1D6 +3) Slashing</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, 5 ft, one target. (1D8 +3) Piercing</dd>
    <dt>Tail Slap</dt> <dd>Melee Weapon Attack, 10 ft, one target. (1D8 +3) Bludgeoning</dd>
    <dt>Tail Sting</dt> <dd>Melee Weapon Attack, 10 ft, one target. (1D4 +3) Piercing + 2D8 Poison</dd>
</dl>';
        $monster->description = '<p>The Stingtail is a larger, stronger cousin of the Laertis. They can crossbreed with them, and usually follow their smarter cousins leads.</p>';
        $helper->saveMonster($monster, ['Lizard', 'Humanoid'], [
            'stats' => [16, 12, 15, 8, 6, 5, 2, 1],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Laraken';
        $monster->size        = 'Large';
        $monster->type        = 'Aberration';
        $monster->alignment   = 'NE';
        $monster->armor_class = '10';
        $monster->hit_dice    = 15;
        $monster->speed       = '20 ft / Swim 30 ft';
        $monster->actions     = '<dl>
    <dt>Tentacles</dt> <dd>Melee Weapon Attack, 10 ft, one target. (1D6 +5) + Magic Absorption</dd>
    <dt>Absorb Magic</dt> <dd>
        <p>A laraken absorbs magic in the form of spells cast at it, magic items it contacts, or the spells of spellcasters the creature strikes. Larakens prefer to drain spells, buth they settle for the powers of magic items.</p>
        <p>Spellcasters struck by a laraken must make a DC 18 CON Save or lose their highest level Spell Slot or prepared spell. The laraken can then use that spell on its next turn to gain 5 Hit Points per Spell Level.</p>
        <p>If a laraken succeeds a Save vs spell with a Critical Success, the laraken absorbs the spell and gains 5 Hit Points per Spell Slot of the absorbed spell. The absorbed spell has no effect.</p>
        <p>Any time a Melee attack with a magical item is a Critical Failure, the laraken permanently drains a +1 bonus from the magic item. If the weapon that hits the laraken has any charges, the laraken automatically drains a charge whenever it is hit. The laraken gains 5 Hit Points for each +1 bonus or charge.</p>
        <p>The laraken cannot absorb magic that uses the Shadow Weave, and will actively flee from Shadow Weave wielding spellcasters.</p>
        <p>A laraken can instead of gaining Hit Points, it can choose to gain another use of Misty Step for each 5 Hit Points it would have gained.</p>
    </dd>
</dl>';
        $monster->description = '<p>A laraken is a magic-absorbing creature from the plane of Nishrek, home of the orc pantheon, that hates all other living things and attacks any that approach. It prefers to lurk in wet places such as marshes and swamps where it can stay moist. Indeed, a laraken wil not willingly come onto dry land, except to pursue its food - magic.</p>
<p>Also known as a magic-drainer, a laraken appears as a glistening, yellow sphere with two long tentacles protruding from opposite sides of its fleshy body. A full-size laraken is about 10 feet in diameter and can weigh as much as 2,500 pounds. Larakens do not speak.</p>';
        $helper->saveMonster($monster, ['Aberration'], [
            'stats' => [21, 12, 20, 3, 8, 10, 14, 5],
            'feats' => [
                'Alertness', 'Cleave', 'Great Cleave', 'Improved Initiative', 'Power Attack',
            ],
            'features' => [
                'darkvision' => ['meta' => '60 feet'],
                'spell_resistance',
            ],
            'spells' => [
                'Detect Magic' => ['meta' => 'At will'],
                'Misty Step'   => ['meta' => '2/day'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Living Spell 1';
        $monster->type        = 'Construct';
        $monster->size        = 'Small';
        $monster->alignment   = '-';
        $monster->armor_class = '15 (Natural Armor)';
        $monster->hit_dice    = 2;
        $monster->speed       = '25 ft / Fly 25 ft (hover)';
        $monster->actions     = '<dl>
    <dt>Magical Strike</dt> <dd>Melee Spell Attack +5, 5 ft, one target. (1D6 +3) (type equal to spell type)</dd>
    <dt>Spell Mimicry (Recharge 5-6)</dt> <dd>The Living Spell casts the 1st or 2nd level Spell it is made of.</dd>
</dl>';
        $helper->saveMonster($monster, ['Construct'], [
            'stats'    => [10, 12, 16, 3, 6, 6, 1, 2],
            'features' => [
                'amorphous',
                'magic_resistance',
                'darkvision' => ['meta' => '60 ft'],
                'immunity'   => ['meta' => 'Blinded, Charmed, Deafened, Exhaustion, Frightened, Grappled, Sickened, Prone. If the Living Spell has a energy type, it has immunity to it.'],
                'resistance' => ['meta' => 'Bludgeoning, Piercing, Slashing from non-magical attacks'],
            ],
            'spells' => [
                'Detect Magic' => ['meta' => 'At will'],
                'Misty Step'   => ['meta' => '2/day'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Living Spell 2';
        $monster->size        = 'Medium';
        $monster->type        = 'Construct';
        $monster->alignment   = '-';
        $monster->armor_class = '15 (Natural Armor)';
        $monster->hit_dice    = 6;
        $monster->speed       = '25 ft / Fly 25 ft (hover)';
        $monster->actions     = '<dl>
    <dt>Magical Strike</dt> <dd>Melee Spell Attack +7, 5 ft, one target. (5D6 +4) (type equal to spell type)</dd>
    <dt>Spell Mimicry (Recharge 5-6)</dt> <dd>The Living Spell casts the 3rd or 4th level Spell it is made of.</dd>
</dl>';
        $helper->saveMonster($monster, ['Construct'], [
            'stats'    => [10, 15, 18, 3, 10, 6, 5, 3],
            'features' => [
                'amorphous',
                'magic_resistance',
                'darkvision' => ['meta' => '60 ft'],
                'immunity'   => ['meta' => 'Blinded, Charmed, Deafened, Exhaustion, Frightened, Grappled, Sickened, Prone. If the Living Spell has a energy type, it has immunity to it.'],
                'resistance' => ['meta' => 'Bludgeoning, Piercing, Slashing from non-magical attacks'],
            ],
            'spells' => [
                'Detect Magic' => ['meta' => 'At will'],
                'Misty Step'   => ['meta' => '2/day'],
            ],
        ]);

        $monster              = new Monster;
        $monster->name        = 'Living Spell 3';
        $monster->size        = 'Large';
        $monster->type        = 'Construct';
        $monster->alignment   = '-';
        $monster->armor_class = '15 (Natural Armor)';
        $monster->hit_dice    = 7;
        $monster->speed       = '25 ft / Fly 25 ft (hover)';
        $monster->actions     = '<dl>
    <dt>Magical Strike</dt> <dd>Melee Spell Attack +8, 5 ft, one target. (5D6 +5) (type equal to spell type)</dd>
    <dt>Spell Mimicry (Recharge 5-6)</dt> <dd>The Living Spell casts the 5th level Spell it is made of.</dd>
</dl>';
        $helper->saveMonster($monster, ['Construct'], [
            'stats'    => [10, 15, 14, 3, 11, 6, 7, 4],
            'features' => [
                'amorphous',
                'magic_resistance',
                'darkvision' => ['meta' => '60 ft'],
                'immunity'   => ['meta' => 'Blinded, Charmed, Deafened, Exhaustion, Frightened, Grappled, Sickened, Prone. If the Living Spell has a energy type, it has immunity to it.'],
                'resistance' => ['meta' => 'Bludgeoning, Piercing, Slashing from non-magical attacks'],
            ],
            'spells' => [
                'Detect Magic' => ['meta' => 'At will'],
                'Misty Step'   => ['meta' => '2/day'],
            ],
        ]);
    }
}
