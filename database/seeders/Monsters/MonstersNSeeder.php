<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersNSeeder extends Seeder
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
        $monster->name        = 'Nishruu';
        $monster->size        = 'Large';
        $monster->alignment   = 'CN';
        $monster->armor_class = '9';
        $monster->hit_dice    = 9;
        $monster->speed       = '0 ft / Fly 20 ft';
        $monster->actions     = "<dl>
    <dt>Swarm of Bites</dt> <dd>
        <p>Like a swarm, a nishruu doesn't make standard melee attacks. Instead, it deals automatic damage to any creatures whose space it occupies. No attack roll is needed and all targets within that area that the nishruu occupies takes 2D6 Piercing damage. This attack happens once a round without the nishruu spending any Actions. The nishruu cannot make Attacks of Opportunity.</p>
        <p>Any creature that is vulnerable to swarm attacks is Nauseated for 1 round (DC 17 CON Save)</p>
        <p>Spell casting or Concentration on spells requires a DC 20 Concentration check</p>
    </dd>
    <dt>Absorb Magic</dt> <dd>
        <p>Nishruus feed on magic. They absorb any magical energy that comes in contact with their bodies, including spells targeted on them, magic items they envelop, and even spellcasters engulfed within their misty forms. This unusual diet has the following effects.</p>
        <ul>
            <li>If a nishruu is the target of a spell that deals Cold or Fire damage, it takes that damage as normal (nishruus have Resistance to Cold)</li>
            <li>If a nishruu is the target of a spell that does not have the Cold or Fire type, it gains Hit Points equal to the spell level of the spell.</li>
            <li>If a magic item has charges is in contact with a nishruu, the creature drains 1D4 charges upon initial contact and a like amount every round thereafter.</li>
            <li>If a nishruu is in contact with a magic item that does not have charges, the effects of the item are negated for as long as it remains in contact with the nishruu and for 1D4 rounds afterward.</li>
            <li>If a character enveloped within a nishruu attempts to use a temporary item such as a potion or scroll, the effect does not initiate until 1D4 rounds after the user leaves the nishruu's body.</li>
            <li>Artifacts do not operate while in contact within a nishruu and for 1 round thereafter</li>
            <li>A spellcaster loses one prepared spell or spell slot, determined randomly, upon initial contact with a nishruu and for each round thereafter that the spellcaster remains in contact with the nishruu. Each time a spell or spell slot is lost in this manner, the spellcaster must make a DC 15 WIS Save or suffer the effects of a Feeblemind spell.</li>
        </ul>
    </dd>
    <dt>Gaseous Form</dt> <dd>A nishruu is composed of gas, and can pass through small holes or narrow openings.</dd>
    <dt>Charge Magic</dt> <dd>When a nishruu is slain, its body dissipates and drifts away. Any charged magic item in contact with it when it does ot gains 1D6 additional charges.</dd>
</dl>";
        $monster->description = '<p>Because these weird, misty creatures from another plane eat magic, they can wreak havoc with spellcasters and magic items. Nishruu were first encountered in the Moonshae Isles, but they can be found anywhere that magic is practiced. They constitute a persistent nuisance in the magic-forging workshops of Thayan enclaves. In the Old Empires of Mulhorand, Unther, and Chessenta, the nishruu is known as a hakeashar.</p>
<p>Nishruus have their own alien language, but all attempts to communicate with them thus far have failed.</p>';
        $helper->saveMonster($monster, ['Aberration'], [
            'stats'  => [null, 10, 16, 13, 15, 13, 6, 3],
            'skills' => [
                'Arcana'     => ['dc' => 13],
                'Lore'       => ['dc' => 13, 'meta' => 'History'],
                'Perception' => ['dc' => 16],
                'Stealth'    => ['dc' => 12],
            ],
            'feats' => [
                'Improved Initiative', 'Iron Will',
            ],
            'features' => [
                'resistance'    => ['meta' => 'Cold, Bludgeoning, Piercing, Slashing'],
                'immunity'      => ['meta' => 'Poison, Critical Hits'],
                'vulnerability' => ['meta' => 'Attacks with the Air type, A Rod of Absorption or Ring of Spell Turning brought into contact with a nishruu has a 5% chance to destroy it immediately. The creature is absorbed with no harm to the item, though its color changes to a dusky-red. If the item does not absorb the nishruu, it is negated in the same manner as other magic items. Salt deals 2D10 damage.'],
                'darkvision'    => ['meta' => '60 ft'],
            ],
            'powers' => [
                'Mind Blank' => ['meta' => 'Always on'],
            ],
        ]);
    }
}
