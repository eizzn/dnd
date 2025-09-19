<?php

namespace Database\Seeders\Monsters;

use App\Models\Monster;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class MonstersMSeeder extends Seeder
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
        $monster->name             = 'Manticore';
        $monster->size             = 'Large';
        $monster->type             = 'Monstrosity';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '1 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '30 ft / Fly 50 ft';
        $monster->actions          = '<dl>
    <dt>Bite</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D8 +3) Piercing.</dd>
    <dt>Claw</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (1D6 +3) Slashing.</dd>
    <dt>Tail Spike</dt> <dd>Ranged Weapon Attack, reach 100/200 ft, one target. (1D8 +3) Piercing.</dd>
</dl>';
        $monster->description = "<p>Manticores are true monsters. They are giant beasts with the bodies of lions, the wings of a dragon, the head of a man, and a tail that ends in a mass of deadly spikes. The coloration of these various body parts are similar to that of their base creature.</p>
<p>The mouth of a manticore is full of rows and rows of razor-sharp teeth, similar to that of a great white shark. It uses these teeth to feed upon any creature the manticore can catch, be it animal or human.</p>
<p>Manticores are known to be savage man-eaters and allies of evil creatures. Manticores are intelligent creatures and often work beside other evil beings to bring strife and suffering to the world.</p>
<p>Some manticores have tail spikes that carry lethal or paralytic venom. Often, these manticores will have tails that are similar in appearance to that of a scorpion's stinger.</p>
<p>Manticores are carnivorous creatures. Though they happily settle for the flesh of almost any creature, they prefer the flesh of humans most of all.</p>
<p>Manticores are typically known to make their lairs underground or within caves, particularly ones that other races would consider to be very dismal.</p>
<p>These creatures can be found in almost any climate. However, they far prefer to live in warm habitats.</p>
<p>In Northwest Faerun, they can be found within the Delimbiyr Vale.</p>
<p>In West Faerun, they can be found within the land of High Moor.</p>";
        $helper->saveMonster($monster, ['Beast', 'Monstrosity'], [
            'stats'    => [17, 16, 17, 7, 12, 8, 3, 3],
            'features' => [
                'darkvision'   => ['meta' => '60 ft'],
                'keen_sense'   => ['meta' => 'Sight'],
                'multi_attack' => ['meta' => 'A manticore gains an additional Action. This additional Action can only be used to make a Tail Spike attack.'],
            ],
            'languages' => [
                'Special' => ['meta' => 'One regional language.'],
            ],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Medusa';
        $monster->size             = 'Medium';
        $monster->type             = 'Monstrosity';
        $monster->alignment        = 'LE';
        $monster->armor_class      = '12';
        $monster->damage_reduction = '3 (Natural Armor)';
        $monster->hit_dice         = 4;
        $monster->speed            = '50 feet';
        $monster->actions          = "<dl>
    <dt>Snake Hair</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D4 +2 Piercing +3D6 Poison.</dd>
    <dt>Short Sword</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. 1D6 +2 Piercing.</dd>
    <dt>Longbow</dt> <dd>Ranged Weapon Attack, reach 150/600 ft, one target. 1D8 +2 Piercing.</dd>
    <dt>Petrifying Gaze</dt> <dd>
        <p>When a creature that can see the medusa's eyes starts its turn within 30 feet of the medusa, the medusa can force it to make a DC 14 CON Save if the medusa isn't incapacitated and can see the creature. If the Save fails by 5 or more, the creature is instantly petrified. Otherwise, a creature that fails the Save begins to turn to stone and is restrained. The restrained creature must repeat the Save at the end of its next turn, becoming Petrified on a failure or ending the effect on a success. The Petrification lasts until the creature is freed by the Restoration spell or other magic.</p>
        <p>Unless surprised, a creature can avert its eyes to avoid the Save at the start of its turn. If the creature does so, it can't see the medusa until the start of its next turn, when it can avert its eyes again. If the creature looks at the medusa in the meantime, it must immediately make the Save.</p>
        <p>If the medusa sees itself reflected on a polished surface within 30 feet of it and in an area of bright light, the medusa is, due to its curse, affected by its own gaze.</p>
    </dd>
</dl>";
        $monster->description = "<p>Typical Medusae have scaly skins of either pale or earthy color. Their eyes glow with an intense red color and, instead of hair, their heads are covered in a mass of 1‑foot-long living venomous serpents. Despite these features, from large distances they can easily be mistaken by ordinary humans. There is a constant glamor effect that obscures the monstrous features of the medusa. Only if one sees the full face of the medusa will they become aware of their monstrous features. A veil would fool onlookers even up-close. For that reason, it is common for Medusae to hide their features behind hoods or veils.</p>
<p>People and fey cursed into becoming Medusae can belong to either sex and both male and female Medusae created by such curses are similar in form and capabilities. All naturally born medusa are female.</p>
<p>An uncommon variant of Medusa known as a Greater Medusa has the lower torso of a snake and its entire body covered by thin scales, with a total body length of 20 feet. They produce considerably more potent poison, which renders even their skin harmful to the touch. They also use their innate poison to coat their weapons and arrows.</p>
<p>In the Utter East, variants of Medusae similar to Greater Medusae are sometimes referred to as 'Gorgons' (not to be confused with the iron-skinned bulls of the same name). While their gaze can petrify a living creature, it is reported that the effect is usually temporary. They lurk within the ruins of Phantom Pass and Old Stone Keep and in the Puzzle Palace.</p>
<p>An extremely rare variant of male Medusa is known as a Maedar</p>
<p>A Medusa is immune to the petrifying stare of other Medusae, but is susceptible to be turned into stone by its own gaze, for example when looking at its own reflection in a mirror or other reflective surface. Even after death, a medusa's eyes retain their power for several days, becoming weaker as the corpse decayed.</p>
<p>When a medusa mates with a maedar, 75% human females, 24% human males, 1% maedar. When a medusa mates with a humanoid, it will always be a medusa.</p>";
        $helper->saveMonster($monster, ['Monstrosity', 'Cursed'], [
            'stats'  => [10, 15, 16, 12, 13, 15, 3, 3],
            'skills' => [
                'Perception' => ['dc' => 5],
                'Stealth'    => ['dc' => 3],
            ],
            'features' => [
                'keen_sense' => ['meta' => 'Hearing and Smell'],
            ],
            'feats'     => ['Weapon Finesse'],
            'talents'   => ['Improved Flanking'],
            'languages' => ['Sylvan'],
        ]);

        $monster                   = new Monster;
        $monster->name             = 'Minotaur';
        $monster->size             = 'Large';
        $monster->type             = 'Monstrosity';
        $monster->alignment        = 'CE';
        $monster->armor_class      = '9';
        $monster->damage_reduction = '4 (Natural Armor)';
        $monster->hit_dice         = 6;
        $monster->speed            = '50 feet';
        $monster->actions          = '<dl>
    <dt>Gore</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D8 +4) Piercing.</dd>
    <dt>Great Axe</dt> <dd>Melee Weapon Attack, reach 5 ft, one target. (2D12 +4) Slashing.</dd>
</dl>';
        $monster->description = "<p>Minotaurs are evil giant muscular humanoids with fur-covered bodies and bull-like heads. It is believed that all minotaurs are male; actually cursed humans that have been altered by the gods or the demon lord Baphomet to become a minotaur. That legend proved false as female minotaurs became more prevalent over the years.</p>
<p>Minotaurs are carnivores, but prefer the taste of human flesh. They love to dwell within maze-like caverns or ruins, where their innate sense of direction prevents them from getting lost (mostly through their sense of smell). They lure travelers into their maze-like homes, where the minotaurs have the advantage over their unfortunate prey.</p>
<p>Many minotaurs can't be trusted with non-minotaur races at times, since most humanoids are their meal, and they will do anything for a quick bite out of a sleeping party member, slave owner, or wandering villager. They are not welcomed in any cities, and receive an immediate death sentence, or a stoning if caught. Or worse, they are hunted by multiple hunters seeking the thrill of giving the beasts a taste of their own medicine.</p>
<p>Minotaurs are not highly intelligent, but possess instinctive cunning and are adept at ambush attacks. Attacks in the dark are preferred so they can take advantage of their darkvision. Minotaurs can track by scent alone, and would always investigate an unfamiliar scent. Minotaurs are fearless combatants, and will only retreat if their defeat was obvious.</p>
<p>All minotaurs are immune to maze spells.</p>
<p>Many minotaurs worship the demon lord Baphomet and are not allowed in many cities because of this known factor. Most move toward the chaotic evil alignment, and do not work well in groups, packs, or even parties due to their solo hunter-like nature.</p>";
        $helper->saveMonster($monster, ['Monstrosity', 'Cursed', 'Humanoid'], [
            'stats'  => [18, 11, 16, 6, 16, 9, 3, 4],
            'skills' => [
                'Perception' => ['dc' => 7],
            ],
            'features' => [
                'darkvision'      => ['meta' => '60 ft.'],
                'favored_terrain' => ['meta' => 'Mazes'],
            ],
            'classes' => [
                'Ranger' => ['level' => 1],
            ],
            'languages' => ['Abyssal'],
        ]);

        $this->call(ModronsSeeder::class);
    }
}
