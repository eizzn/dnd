<?php

namespace Database\Seeders\Templates;

use App\Models\Template;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class OutsiderTemplatesSeeder extends Seeder
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

        $temp              = new Template;
        $temp->name        = 'Celestial Creature';
        $temp->description = '<p>Celestial creatures dwell on the upper planes, the realms of good, although they resemble beings found on the Material Plane. They are more regal and more beautiful than their earthly counterparts.</p>
<p>Celestial creatures often come in metallic colors (usually silver, gold, or platinum). They can be mistaken for half-celestials, more powerful creatures that are created when a celestial mates with a non-celestial creature.</p>';
        $temp->details = '<dl>
    <dt>Size and Type</dt> <dd>The base creature gains the Celestial type. Size is unchanged.</dd>
    <dt>Abilities</dt> <dd>Same as the base creature, but INT is at least 3</dd>
    <dt>Special Attacks</dt> <dd>
        <p>A celestial creature retains all the special attacks of the base creature and also gains the following attacks.</p>
        <dl>
            <dt>Smite Evil</dt> <dd>Once per day a celestial creature can make a normal melee attack to deal extra damage equal to its CHR bonus against an evil foe.</dd>
            <dt>Darkvision</dt> <dd>60 feet</dd>
            <dt>Damage Resistance</dt> <dd>Acid, Poison as well as Bludgeoning, Piercing, and Slashing damage.</dd>
            <dt>Immunity</dt> <dd>Charmed, Electricity, Petrification</dd>
            <dt>Vulnerabilities</dt> <dd>Unholy, (Cold Iron if CG, Silvered if NG)</dd>
            <dt>Level Adjustment</dt> <dd>Same as base creature +2</dd>
            <dt>Alignment</dt> <dd>Always good (any)</dd>
        </dl>
    </dd>
</dl>';
        $helper->addTypesToSimpleObject($temp, ['Celestial']);

        $temp              = new Template;
        $temp->name        = 'Fiendish Creature';
        $temp->description = 'Fiendish creatures dwell on the lower planes, the realms of evil, although they resemble beings found on the Material Plane. They are more fearsome in appearance than their earthly counterparts.';
        $temp->details     = '<dl>
    <dt>Size and Type</dt> <dd>The base creature gains the Celestial type. Size is unchanged.</dd>
    <dt>Abilities</dt> <dd>Same as the base creature, but INT is at least 3</dd>
    <dt>Special Attacks</dt> <dd>
        <p>A fiendish creature retains all the special attacks of the base creature and also gains the following attacks.</p>
        <dl>
            <dt>Bane Spell</dt> <dd>3/day as an Action.</dd>
            <dt>Darkvision</dt> <dd>60 feet</dd>
            <dt>Damage Resistance</dt> <dd>Cold, and Electricity as well as Bludgeoning, Piercing, and Slashing damage.</dd>
            <dt>Immunity</dt> <dd>Fire, Poison</dd>
            <dt>Vulnerability</dt> <dd>Holy (Cold Iron if CE, Silvered if LE)</dd>
            <dt>Alignment</dt> <dd>Always good (any)</dd>
            <dt>Abilities</dt> <dd>Same as the base creature, but INT is at least 3</dd>
            <dt>Level Adjustment</dt> <dd>Same as base creature +2</dd>
            <dt>Alignment</dt> <dd>Always evil (any)</dd>
        </dl>
    </dd>
</dl>';
        $helper->addTypesToSimpleObject($temp, ['Fiend']);
    }
}
