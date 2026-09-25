<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersRSeeder extends Seeder
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
        $monster->name             = 'Rust Monster';
        $monster->size             = 'Medium';
        $monster->type             = 'Beast';
        $monster->alignment        = '-';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 8;
        $monster->speed            = '40 ft';
        $monster->actions          = "<dl>
    <dt>Iron Scent</dt> <dd>The rust monster can pinpoint, by scent, the location of ferrous meta within 90 feet of it or non-ferrous metals at a range of 30 feet.</dd>
    <dt>Rust Metal</dt> <dd>Any nonmagical weapon made of metal that hits the rust monster corrodes. After dealing damage with a Piercing or Slashing damage, the weapon takes a permanent and cumulative -1 penalty to damage rolls. If its penalty drops to -5, the weapon is destroyed. Nonmagical ammunition made of metal that hits the rust monster is destroyed after dealing damage.</dd>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +1) Piercing Damage</dd>
    <dt>Antennae</dt> <dd>
        <p>The rust monster corrodes a nonmagical ferrous meta object it can see within 5 feet of it. If the object isn't being worn or carries, the touch destroys a 1-foot cube of it. If the object is being worn or carried by a creature, the creature can make a DC 11 DEX Save to avoid the rust monster's touch.</p>
        <p>If the object touched is either metal armor or a metal shield being worn or carried, it takes a permanent and cumulative -1 penalty to the Damage Reduction it offers or a -1 penalty to the AC it offers if it is a metal shield. Armor reduced to a Damage Reduction of 0 or a shield that drops to an AC bonus of 0 is destroyed. If the object touched is a held metal weapon, it rusts as described in the Rust Metal section.</p>
    </dd>
</dl>";
        $monster->description = "<p>A rust monster is the size of a small pony, with four insect-like legs and a squat, humped body. Its hide is thick and lumpy and is yellowish tan on the belly and rust-red on the back. Its tail ends in what looks like a double ended paddle. Two long antennae come out of its head, one under each eye.</p>
<p>Normally a docile creature, a rust monster can smell metal. They always go for the biggest source of metal first, and prefer ferrous metals to precious ones.</p>
<p>A rust monster has a weak bite and does not normally attack with it. They attack anyone who had metal, however, with their antennae. The touch of an antenna can turn even magical metal items into rust.</p>
<p>Rust monsters eat the rust of freshly rusted metal objects. They have a symbiotic relationship with a bacteria that feeds off of rusted metal. The rust monster then feeds off of the by-product of the bacteria consuming the rusted meta. The bacteria exists in the rust monsters stomach, the antennae, and it's blood. The bacteria can be harvested and kept alive as long as a steady supply of ferrous metal is supplied as a food supply.</p>
<p>Some sages speculate that rust monsters might be related to or the larval form of rust dragons. The extremely few rust monsters who live long enough to reach old age somehow transport themselves to the plane of Acheron, where they ravenously consumed the abundant metal from the plane's cubes for about one year. Afterwards, they encase themselves in cocoons made of spun metal, where they stay for three years. Following this period, they emerge from their cocoons as rust dragon wyrmlings.</p>
<p>It is not known, however, whether rust monsters are native to Acheron and only travel to the Prime Material plane as a part of their larval cycle to become rust dragons, or if rust monsters are in fact native to the Prime and are altered by the magic of Acheron once transported there.</p>
<p>Rust monster antennae are used in the creation of rust blades. They find these items extremely delicious and nourishing.</p>";
        $helper->saveMonster($monster, ['Beast'], [
            'stats'     => [13, 12, 13, 2, 13, 6, .5],
            'features'  => [
                'darkvision' => ['meta' => '{"range":60}'],
            ],
        ]);
    }
}
