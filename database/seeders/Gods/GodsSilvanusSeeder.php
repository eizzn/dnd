<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsSilvanusSeeder extends Seeder
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

        $god        = new God;
        $god->name  = 'Silvanus';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Oak Father, the Forrest Father, Treefather',
            'level'          => 'Greater',
            'portfolio'      => 'Wild Nature, Druids',
            'regions'        => 'Chondalwood, Cormyr, Dalelands, Damara, High Forest, the North, Silverymoon, Vilhon Reach',
            'alignment'      => 'N',
            'symbol'         => 'Six-pointed snowflake',
            'favored_weapon' => 'The Great Mallet of Silvanus (Maul)',
        ]);
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'           => 'Rillifane Rallathil',
            'title'          => 'The Leaflord, The Wild One, The Great Oak, The Many-Branched, The Many-Limbed, The Old Man of the Yuirwood',
            'level'          => 'Intermediate',
            'aliases'        => 'Relkath of the Infinite Branches',
            'portfolio'      => 'Woodlands, Nature, Wild Elves, Druids',
            'regions'        => 'High Forest, Ilefarn, The Great Dale, Tethyr, Western Heartlands, Forest of Lethyr, Wealdath',
            'alignment'      => 'CG',
            'symbol'         => 'Oak',
            'favored_weapon' => 'The Oakstaff (Quarterstaff)',
            'master_id'      => God::where('name', 'Corellon Larethian')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Gnome'], [
            'name'           => 'Baervan Wildwanderer',
            'title'          => 'The Forest Gnome, The Masked Leaf, Father of Fish and Fungus',
            'level'          => 'Lesser',
            'portfolio'      => 'Woodlands',
            'alignment'      => 'NG',
            'symbol'         => 'Face of a Raccoon',
            'favored_weapon' => 'Whisperleaf (Halfspear)',
            'master_id'      => God::where('name', 'Garl Glittergold')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Maztican'], [
            'name'      => 'Watil',
            'title'     => 'Guardian of Plants',
            'level'     => 'Greater',
            'portfolio' => 'Plants, Agriculture',
            'alignment' => 'NG',
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Druid'       => 20,
            'Monk'        => 5,
            'Hierophant'  => 5,
            'Sacred Fist' => 10,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Druid', 'Monk', 'Sacred Fist', 'Hierophant',
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Silvanus's favour is given to those who understand that nature is at heart fair, and who seek always to view the bigger picture, not viewing events in isolation but in context - if a town being razed to the ground today means it will be fertile for a forest in 10 years, this might be for the best.</p>
<p>Silvanus’s scions wield the power of nature as a bludgeon against those who would upset the balance. Quiet priests and world shaking warriors, all carry the song of the earth, wind and sky in their hearts.</p>
<ol>
    <li>You destroyed a settlement to protect a natural site</li>
    <li>You have long guarded a place a terrestrial wonder</li>
    <li>You sought out the highest place in the world, and the sky lit up with Silvanus blessing</li>
    <li>You gave your own life for the world, and the world gave it back to you with a new purpose</li>
    <li>Your best friend is a treant. It tolerates you</li>
    <li>You are a gifted gardener and tender of trees. You are welcome in any forest you choose to enter</li>
</ol>",
            'devotion' => '<p>Following Silvanus means dedicating yourself to nature. As a follower of Silvanus, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Balance</dt> <dd>The equilibrium between civilisation must be maintained by whatever means necessary</dd>
    <dt>Rage</dt> <dd>Seeing mortals violate the natural world sends me into a primal state of wrath I cannot control</dd>
    <dt>Humility</dt> <dd>The scope of nature fills me with awe and terror</dd>
    <dt>Ruthlessness</dt> <dd>A life for a life</dd>
    <dt>Tradition</dt> <dd>It is important we remember the old ways and the ancient magics. We may need them one day</dd>
</dl>',
            'earn_piety' => [
                'Pushing civilisation back from nature where it oversteps',
                'Encouraging and reinstating natural cycles where they are disrupted by technology or magic',
            ],
            'lose_piety' => [
                'Destroying a natural site to make way for artifice or civilisation',
                'Averting natural disasters or catastrophes rather then weathering them',
            ],
            'piety3' => '<h4>Favored God: Silvanus</h4>
<p>You gain Inspiration when you defend beasts, plants, or natural resources from the depredations of technology, commerce or artifice</p>',
            'piety10' => "<h4>Stranglevines</h4>
<p>You can cast Entangle with this trait, requiring no components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
            'piety25' => '<h4>Father of Nature</h4>
<p>Beasts and Plants of a CR lower than your level will not attack you</p>',
            'piety50' => "<h4>Chosen of Silvanus</h4>
<p>You can spend an Inspiration to cast Wrath of Nature with this trait. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Gnome']->id,
            'favor'       => "<p>Baervan gives her favor to gnomes who exhibit what she considers a healthy wanderlust, and those who forge strong bonds with animals or familiars. She is a retiring and calm god by instinct, but she bears a deep love for the mischief of Chiktikka, and shields her wayward companion from consequence however she can.</p>
<p>Baervan favours those who work with nature and away from civilisation where possible, though she has also been known to choose arcane scions who have developed deep friendships with summoned creatures.</p>
<ol>
    <li>You summoned a familiar which you've bonded with so strongly that you consider it family</li>
    <li>You've always been kind to the animals you met, eve if you didn't have much time for people</li>
    <li>You never stay in one place for long, moving from place to place before you get tied down</li>
    <li>You lost a companion that was dear to you, and Baervan watches over you out of compassion</li>
    <li>You've been kicked out of more towns than you can remember due to the antics of your pet</li>
    <li>You've been questing after the same animal for so long that you don't  know what you'd do if you actually found it</li>
</ol>",
            'devotion' => "<p>Following Baervan means dedicating yourself to familiars and companions. As a follower of Baervan, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Destiny</dt> <dd>If I make sure to wonder, fate will make sure I get where I need to be</dd>
    <dt>Kinship</dt> <dd>I choose to share my life with my companions, and they with me, for the betterment of us all</dd>
    <dt>Respect</dt> <dd>Things which are smaller than me (or things I don't fully understand) are just as worthy of love and respect as I am</dd>
    <dt>Generosity</dt> <dd>Giving freely and openly to others is the only way to truly prosper</dd>
    <dt>Balance</dt> <dd>I keep strange company to remind myself that the world is not only designed to serve my purpose, but those of all creatures</dd>
</dl>",
            'earn_piety' => [
                'Make a new friend or companion',
                'Work together with a team mate to mutual profit',
            ],
            'lose_piety' => [
                'Enslave, bully or harm your companions',
                'Treat creatures smaller or less powerful than you with cruelty or disdain',
            ],
            'piety3' => '<h4>Favored God: Baervan</h4>
<p>You gain Inspiration when you acquire a new friend, travel companion, or friend</p>',
            'piety10' => "<h4>Fast Friends</h4>
<p>You can cast Find Familiar with this trait, requiring no material components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. INT is your spellcasting ability for this spell</p>",
            'piety25' => '<h4>Many Hands, Light Work</h4>
<p>You can summon a number of simultaneous familiars with the Find Familiar spell equal to your proficiency bonus</p>',
            'piety50' => "<h4>Chosen of Baervan</h4>
<p>You can spend an Inspiration to cast Conjure Animals with this trait. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
        ]);

        /**********************************************************************/

        $silvanus = $god;
        $god      = God::where('name', 'Eilistraee')->first();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Mielikki',
            'aliases'        => 'Khelliara (Rashemen)',
            'title'          => 'Our Lady of the Forrest, the Forrest Queen',
            'level'          => 'Lesser',
            'portfolio'      => 'Autumn, Dryads, Forest creatures, Forests, Rangers, Swanmays',
            'regions'        => 'Chondalwood, Dalelands, High Forest, the North, Rashemen, Silverymoon',
            'alignment'      => 'NG',
            'symbol'         => "Golden-horned, blue-eyed unicorn's head facing left",
            'favored_weapon' => 'The Hornblade (Scimitar)',
            'master_id'      => $silvanus->id,
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Ranger' => 25,
            'Druid'  => 15,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', ['Ranger', 'Druid']);
        $mielikki = $god;

        /**********************************************************************/

        $god = God::where('name', 'Fenmarel Mestarine')->first();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Gwaeron Windstrom',
            'title'          => 'Master of Tracking, Tracker who Never Goes Astray, The Mouth of Mielikki, Master Tracker',
            'level'          => 'Hero',
            'portfolio'      => 'Tracking, Rangers',
            'regions'        => 'The North',
            'alignment'      => 'NG',
            'symbol'         => 'White star and brown pawprint',
            'favored_weapon' => 'Flameheart (greatsword)',
            'master_id'      => $mielikki->id,
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Ranger' => 30,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', ['Ranger']);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Shiallia';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Shiallia',
            'title'          => 'The Golden, Dancer in the Glades, Daughter of the High Forest, The Lady of the Woods, Sister Goddess',
            'level'          => 'Hero',
            'portfolio'      => 'The High Forest, Neverwinter Wood, Woodland Glades, Woodland Fertility, Growth, Korreds',
            'regions'        => 'The North',
            'alignment'      => 'NG',
            'symbol'         => 'Golden Acorn',
            'favored_weapon' => "Forest's Friend (quarter-staff)",
            'master_id'      => $mielikki->id,
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Spirit Shaman' => 15,
            'Druid'         => 15,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', ['Druid', 'Spirit Shaman']);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Nobanion';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Lord Firemane, King of the Beasts, The Lion King',
            'level'          => 'Hero',
            'portfolio'      => 'Royalty, Lions and Feline Beasts, Good Beasts',
            'regions'        => 'Vilhon Reach, Dragon Coast',
            'alignment'      => 'LG',
            'symbol'         => "Male lion's head on a green shield",
            'favored_weapon' => "Lion's head (Heavy Pick)",
            'master_id'      => $mielikki->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Asathalfinare'], [
            'name'      => 'Water Lion',
            'title'     => '',
            'level'     => 'Hero',
            'portfolio' => '',
            'regions'   => 'Sea of Fallen Stars',
            'symbol'    => "A sea lion's head",
            'alignment' => 'N',
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Paladin' => 15,
            'Ranger'  => 15,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', ['Paladin', 'Ranger']);

        $feat              = new Feat;
        $feat->name        = "Nobanion's Pride Mate";
        $feat->requirement = 'Paladin and Ranger of Nobanion';
        $feat->description = '<p>When you use your Smite ability against a target, you may also add your Favored Enemy damage bonus.</p>
<p>If you have a Divine Mount, it gains the benefits of your Animal Companion feature. (and vice versa)</p>';
        $helper->addTypesToFeat($feat, ['Divine', 'Favored Enemy', 'Smite']);
        $feat->features()->save(app()->features['favored_enemy']);
        $feat->features()->save(app()->features['divine_warrior']);
        $helper->addSpellsToFeat($feat, [
            4 => ["Lion's Roar"],
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Nobanion’s favour is given to those who are strong and proud enough to claim leadership over their peers. He favours those who have proven themselves in some way, and who possess the requisite charisma to command respect.</p>
<p>All scions of Nobanion have demonstrated their leadership ability in some meaningful fashion.</p>
<ol>
    <li>Your leadership changed the tide of a battle that would have been a massacre</li>
    <li>You refused to starve your people for a profit, and were exiled from your own noble house</li>
    <li>You befriended a talking beast. It taught you of Nobanion and his ways</li>
    <li>YOU slew a wasteful and predatory beast stalking the area where you lived</li>
    <li>You raised the organization to which you belong from a few stragglers to an influential force with just your inspiring words</li>
    <li>You didn't want to be in charge. Your followers tracked you down by following local legends about your deeds</li>
</ol>",
            'devotion' => '<p>Following Nobanion means dedicating yourself to leadership. As a follower of Nobanion, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Courage</dt> <dd>To lead, I must be fearless</dd>
    <dt>Pride</dt> <dd>I do not ask for your respect, I demand it</dd>
    <dt>Stewardship</dt> <dd>I must justify the trust placed in me by my subordinates</dd>
    <dt>Tradition</dt> <dd>I will safeguard our ways, and pass them down to my successor</dd>
    <dt>Honor</dt> <dd>A life worth living, and an honorable death. This is all anyone can ask</dd>
</dl>',
            'earn_piety' => [
                'Exercising authority to protect and enrich the community, not yourself',
                'Giving a quick and peaceful death to any who ask for it, and those who deserve it',
            ],
            'lose_piety' => [
                'Killing creatures wastefully or needlessly painfully',
                'Abusing authority for your own gain',
            ],
            'piety3' => '<h4>Favored God: Nobanion</h4>
<p>You gain Inspiration when you establish dominance or authority over a creature using words or actions, not violence</p>',
            'piety10' => '<h4>Encouragement</h4>
<p>You can cast Heroism with this trait at-will, requiring no components. CHA is your spellcasting ability for this spell. A creature which openly disobeys you loses the benefits of this spell and cannot receive it again until it is welcomed back into the fold</p>',
            'piety25' => "<h4>Firemane Aura</h4>
<p>You can cast Beacon of Hope with this trait, requiring no components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. CHA is your spellcasting ability for this spell</p>",
            'piety50' => "<h4>Chosen of Nobanion</h4>
<p>You can spend an Action to spend an Inspiration and unleash a supernatural roar, casting Conjure Animals. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. CHA is your spellcasting ability for this spell</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Ubtao';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'Creator of Chult, Founder of Mezro, Father of the Dinosaurs, The Deceiver',
            'level'          => 'Intermediate',
            'portfolio'      => 'Chult, Creation, Dinosaurs, Jungles',
            'regions'        => 'Chult',
            'alignment'      => 'N',
            'symbol'         => 'Maze',
            'favored_weapon' => 'Tyrannosaur head (heavy pick)',
        ]);
    }
}
