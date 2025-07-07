<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassSorcererSeeder extends Seeder
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

        $class                = new Klass;
        $class->name          = 'Sorcerer';
        $class->type          = 'Base';
        $class->key_attribute = 'CHA';
        $class->weapons       = 'Simple Weapons';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 2,
            'skill_progress' => 3,
        ], ['CON', 'CHA'], [
            'Arcane', 'Spell Pool', 'Bloodline',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Language']);

        $feature              = new Feature;
        $feature->key         = 'improved_spell_points';
        $feature->name        = 'Improved Spell Pool';
        $feature->description = '<p>Whenever you gain the Extend Spell Pool feat, you gain an additional 1 Spell Point.</p>';
        $helper->saveFeature($feature, ['Spell Pool']);

        $feature              = new Feature;
        $feature->key         = 'flexible_casting';
        $feature->name        = 'Flexible Casting';
        $feature->description = "<p>You can use Spell Points to gain additional Spell Slots or sacrifice Spell Slots to gain additional Spell Points.</p>
<table>
    <thead>
        <tr>
            <th>Spell Slot to gain</th>
            <th>Spell Points cost</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1st</td>
            <td>2</td>
            <td>Free Action</td>
        </tr>
        <tr>
            <td>2nd</td>
            <td>3</td>
            <td>Action</td>
        </tr>
        <tr>
            <td>3rd</td>
            <td>5</td>
            <td>Action</td>
        </tr>
        <tr>
            <td>4th</td>
            <td>6</td>
            <td>Action</td>
        </tr>
        <tr>
            <td>5th</td>
            <td>7</td>
            <td>Action</td>
        </tr>
    </tbody>
</table>
<p>As an Action, you can sacrifice a Spell Slot to gain a number of Spell Points equal to the Slot's level.</p>";
        $helper->saveFeature($feature, ['Spell Pool']);

        $helper->addFeaturesToClass($class, [
            'cantrip_caster'        => [1],
            'spell_pool'            => [2, 5, 10, 15, 20],
            'sorcerer_feat'         => [3, 6, 9, 12, 16, 19],
            'bloodline_feat'        => [1],
            'improved_spell_points' => [2],
            'flexible_casting'      => [3],
        ]);

        $helper->addSpellsToClass($class, [
            0 => ['Detect Magic'],
            3 => ['Dispel Magic'],
        ]);

        $helper->addSpellSlotsToClass($class, [
            1  => ['cantrips' => 2],
            2  => ['cantrips' => 4, 'known' => 1, 'one' => 1],
            3  => ['cantrips' => 4, 'known' => 2, 'one' => 2],
            4  => ['cantrips' => 4, 'known' => 3, 'one' => 3],
            5  => ['cantrips' => 5, 'known' => 4, 'one' => 3, 'two' => 2],
            6  => ['cantrips' => 5, 'known' => 5, 'one' => 4, 'two' => 3],
            7  => ['cantrips' => 5, 'known' => 6, 'one' => 4, 'two' => 3, 'three' => 2],
            8  => ['cantrips' => 5, 'known' => 7, 'one' => 4, 'two' => 4, 'three' => 3],
            9  => ['cantrips' => 6, 'known' => 8, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 1],
            10 => ['cantrips' => 6, 'known' => 9, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 2],
            11 => ['cantrips' => 6, 'known' => 10, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 1],
            12 => ['cantrips' => 6, 'known' => 11, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 2],
            13 => ['cantrips' => 6, 'known' => 12, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
            14 => ['cantrips' => 7, 'known' => 13, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
            15 => ['cantrips' => 7, 'known' => 14, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
            16 => ['cantrips' => 7, 'known' => 15, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
            17 => ['cantrips' => 7, 'known' => 16, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1],
            18 => ['cantrips' => 7, 'known' => 17, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 1, 'eight' => 1],
            19 => ['cantrips' => 7, 'known' => 18, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 2, 'eight' => 1, 'nine' => 1],
            20 => ['cantrips' => 8, 'known' => 19, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 2, 'eight' => 1, 'nine' => 1],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Angelic Bloodline';
        $feat->description = '<p>One of your forebears was an angel from one of the celestial realms, or your ancestors showed such devotion that their lineage was blessed through divine intervention.</p>
<p>You gain the ability to cast the following spell using Spell points. You must pay additional Spell Points equal to the additional Spell Slots to heighten the spell.</p>
<ul>
    <li>Angelic Halo: 1 Spell Point</li>
    <li>You may take Exalted Feats</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bloodline', 'Celestial']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Allegro', 'Blade Ward', 'Clean Self', 'Daze', 'Dancing Lights', 'Control Flames', 'Forbidding Ward', 'Light',
                'Message', 'Resist', 'True Strike', 'Word of Radiance', ],
            1 => ['Angelic Halo', 'Bless', 'Command', 'Cure Wounds', 'Detect Alignment', 'Disrupting Weapon', 'Divine Favor',
                'Divine Inspiration', 'Divine Smite', 'Heroism', 'Protection From Chaos', 'Protection From Evil', 'Protection From Good',
                'Protection From Law', 'Sanctuary', 'Shield of Faith', 'Thunderous Smite', 'Wrathful Smite', ],
            2 => ['Restoration', 'Aid', 'Augury', 'Aura of Hope', 'Aura of War', 'Branding Smite', 'Calm Emotions', 'Comprehend Language',
                'Create Food and Water', 'Endure Elements', 'Hold Person', 'Magic Weapon', 'Remove Fear', ],
            3 => ['Angelic Wings', 'Aspect of the Deity, Lesser', 'Aura of Haste', 'Haste', 'Searing Light', 'Transmuted Weapon'],
            4 => ['Divine Wrath', 'Aura of Life', 'Guardian of Faith'],
            5 => ['Aura of Power', 'Call Archon Servants', 'Celestial Brand', 'Dawn', 'Dispel Outsider', 'Divine Weapon',
                'Flame Strike', 'Holy Weapon', 'Steel Wind Strike', 'Wall of Light', ],
            6 => ['Arcane Gate', 'Sunbeam', 'True Seeing'],
            7 => ['Aspect of the Deity, Greater', 'Channel Celestial', 'Divine Decree', 'Holy Aura', 'Summon Celestial'],
            8 => ['Divine Aura', 'Power Word Stun', 'Sunburst'],
            9 => ['Blinding Glory', 'Crusade', 'Invulnerability'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Angelic Form';
        $feat->description = '<p>You gain the ability to cast the following spells using Spell Points. You must pay additional Spell Points equal to the additional Spell Slots to heighten a spell.</p>
<ul>
    <li>Angelic Wings: 3 Spell Points</li>
    <li>Celestial Brand: 5 Spell Points</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bloodline', 'Celestial']);
        $feat->parent_feats()->save(app()->feats['Angelic Bloodline']);

        $feat              = new Feat;
        $feat->name        = 'Demonic Bloodline';
        $feat->description = "<p>The demons of the Abyss debase all they touch, and one of your ancestors fell victim to their corruption. You\'re burdened with dark thoughts and the desire for destruction. This urge can be overcome if you choose to fight it, but the variety of sin calls to you always.</p>
<ul>
    <li>You may spend a Spell Point to gain a +2 bonus to CON for 1 hour. This stacks with the bonus from Bear's Endurance.</li>
    <li>You may take Vile Feats</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Bloodline', 'Demon']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Blade Ward', 'Control Flames', 'Cutting Hand', 'Fire Bolt', 'Heroism' => 'Self only', 'Light', 'Produce Flame',
                'Ray of Flame', 'Resist', ],
            1 => ['Bane', 'Burning Hands', 'Fear', 'Mage Armor', 'Protection From Good', 'Protection From Law', 'Wrathful Smite'],
            2 => ['Aura of War', "Bear's Endurance" => 'Self only', "Bull's Strength", 'Continual Flame', 'Darkness', 'Desecrate',
                'Hold Person', 'Magic Weapon', ],
            3 => ['Animate Dead', 'Call Dretch Horde', 'Fireball', 'Fly', 'Haste', 'Lightning Bolt', 'Summon Demon, Lesser'],
            4 => ['Calling' => 'Summon Demons only'],
            6 => ['Arcane Gate', 'Demon Form', 'Slay Living', 'Teleport'],
            7 => ['Unholy Aura'],
            8 => ['Bodak Birth'],
            9 => ['Invulnerability'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Devilish Bloodline';
        $feat->description = '<p>The devils of the Nine Hells frequently make deals with mortals. Your devilish heritage corrupts your thoughts, but your destiny is yours to decide.</p>
<p>You gain the following abilities</p>
<ul>
    <li>You may spend a Spell Point to gain Resistance to Fire for 1 hour</li>
    <li>You may take Vile Feats</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bloodline', 'Devil']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Blade Ward', 'Control Flames', 'Fire Bolt'],
            1 => ['Bane', 'Burning Hands', 'Charm'],
            2 => ['Desecrate', 'Pyrotechnics', 'Resist Fire'],
            3 => ['Animal Form', 'Fireball'],
            4 => ['Calling' => 'Summon Devils only', 'Call Nightmare'],
            6 => ['Arcane Gate', 'Devil Form', 'Investiture of Flame'],
            7 => ['Fiery Body', 'Fire Storm'],
            8 => ['Power Word Stun'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Draconic Bloodline';
        $feat->description = "<p>The blood of dragons flows through your veins. These beasts are both fearsome in combat and skilled at magic, and you follow in their grand tradition.</p>
<p>Any spell that grants the option of damage type must be of the damage type related to your chosen dragon color.</p>
<h3>Dragon Type</h3>
<p>When you first take this feat, choose the type of dragon that influenced your bloodline. This will affect how some of your bloodline powers function. You can't change your dragon type later.</p>
<table>
    <thead>
        <tr>
            <th>Color</th>
            <th>Breath Weapon</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Brass</td>
            <td>Fire</td>
        </tr>
        <tr>
            <td>Bronze</td>
            <td>Electricity</td>
        </tr>
        <tr>
            <td>Copper</td>
            <td>Acid</td>
        </tr>
        <tr>
            <td>Gold</td>
            <td>Fire</td>
        </tr>
        <tr>
            <td>Silver</td>
            <td>Cold</td>
        </tr>
        <tr>
            <td>Black</td>
            <td>Acid</td>
        </tr>
        <tr>
            <td>Blue</td>
            <td>Electricity</td>
        </tr>
        <tr>
            <td>Green</td>
            <td>Poison</td>
        </tr>
        <tr>
            <td>Red</td>
            <td>Fire</td>
        </tr>
        <tr>
            <td>White</td>
            <td>Cold</td>
        </tr>
    </tbody>
</table>
<ul>
    <li>You gain +1 to AC and Damage Reduction 1. The Damage Reduction stacks with the Damage Reduction from armor worn.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Bloodline', 'Dragon']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Acid Splash' => 'Black, Copper, Green', 'Blade Ward', "Bronze Dragon's Wrath" => 'Bronze', "Copper Dragon's Trickery" => 'Copper',
                'Dancing Lights', 'Detect Magic', 'Fire Bolt' => 'Brass, Gold, Red', 'Frostbite' => 'Silver, White', 'Ghost Sound',
                'Light', 'Mage Hand', 'Mending', 'Message', 'Poison Spray' => 'Black, Green', 'Prestidigitation', 'Produce Flame' => 'Brass, Gold, Red',
                'Ray of Frost' => 'Silver, White', 'Resistance' => 'Chosen Dragon Types Element only', 'Shocking Grasp' => 'Blue, Bronze', ],
            1 => ['Acid Stream'  => 'Black, Copper', 'Alarm', 'Charm', 'Create or Destroy Water' => 'Black, Green',
                'Dragon Claws', 'Fear', 'Gust of Wind' => 'Bronze', 'Mage Armor', 'Magic Missile', 'Obscuring Mist' => 'Black',
                'Shield', 'Summon Animals' => 'Green', 'Unseen Servant', ],
            2 => ['Absorb Elements', 'Alter Self' => 'Green', 'Blur', 'Darkness' => 'Black, Blue, Green, Red', 'Entangle' => 'Green', 'Locate Object',
                'Restoration'  => 'Gold, Silver', 'Resist Acid' => 'Black, Copper', 'Resist Cold' => 'Silver, White', 'Resist Electricity' => 'Blue, Bronze',
                'Resist Fire'  => 'Gold, Red', 'Resist Poison' => 'Green', ],
            3 => ['Cure Wounds' => 'Bronze, Gold, Silver', 'Dispel Magic', 'Dragon Breath', 'Fireball' => 'Gold, Red', 'Haste',
                'Plant Growth'  => 'Black, Green', 'Lightning Bolt' => 'Blue, Bronze', 'Slow', ],
            4 => ['Arcane Eye', 'Black Tentacles' => 'Black', 'Detect Scrying' => 'Bronze, Gold, Silver', 'Dimension Door',
                'Fire Shield'  => 'Red', 'Fly', 'Ice Storm' => 'Silver, White', 'Stoneskin' => 'Blue', 'Vitriolic Sphere' => 'Black, Copper',
                'Wall of Fire' => 'Gold, Red', ],
            5 => ['Cloudkill' => 'Black', 'Control Plants' => 'Green', 'Control Winds' => 'Blue, Bronze', 'Cone of Cold' => 'Silver, White',
                'Dragon Wings', 'Wall of Force', 'Immolation' => 'Gold, Red', 'Insect Plague' => 'Black', 'Polymorph', ],
            6 => ['Arcane Gate', 'Chain Lightning' => 'Blue, Bronze', 'Dominate' => 'Black, Blue, Green, Red, White', 'Dragon Form',
                'Guards and Wards', 'Scrying' => 'Gold, Silver', 'Teleport', ],
            7 => ['Contingency', 'Plane Shift'],
            8 => ['Feeblemind'],
            9 => ['True Polymorph'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Draconic Form';
        $feat->description = '<p>You gain the ability to cast the following spells using Spell Points. You must pay additional Spell Points equal to the additional Spell Slots to heighten a spell.</p>
<ul>
    <li>Dragon Claws: 1 Spell Point</li>
    <li>Dragon Breath: 3 Spell Points</li>
    <li>Dragon Wings: 5 Spell Points</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bloodline', 'Dragon']);
        $feat->parent_feats()->save(app()->feats['Draconic Bloodline']);

        $feat              = new Feat;
        $feat->name        = 'Fey Bloodline';
        $feat->description = "<p>A tryst in a moonlit grove or exposure to fey magic put the enchantment of the First World into your family's bloodline. You can be capricious and emotional as the fey.</p>
<ul>
    <li>You are immune to magical effects that causes Sleep</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Bloodline', 'Fey']);
        $helper->addSpellsToFeat($feat, [
            0  => ['Daze', 'Ghost Sound', 'Minor Illusion', 'Resist'],
            1  => ['Animal Friendship', 'Charm', 'Disguise Self', 'Faerie Dust', 'Fear', 'Sleep', 'Ventriloquism'],
            2  => ['Alter Self', 'Calm Emotions', 'Hideous Laughter', 'Invisibility', 'Mirror Image', 'Misty Step', 'Phantom Steed',
                'Shrink', 'Speak with Animals', 'Touch of Idiocy', 'Tree Shape', ],
            3  => ['Catnap', 'Entangle', 'Enthrall', 'Fey Disappearance', 'Plant Growth'],
            4  => ['Compulsion', 'Confusion', 'Hallucinatory Terrain', 'Nightmare', 'Speak with Plants', 'Suggestion', 'Veil'],
            5  => ['False Vision', 'Hallucination', 'Mislead', 'Phantasmal Killer', 'Ridiculous Notion', 'Seeming', 'Tree Stride'],
            6  => ['Dream', 'Programmed Image', 'Summon Fey', 'Transport via Plants'],
            7  => ['Cloak of Chaos', 'Project Image'],
            8  => ['Feeblemind', 'Irresistible Dance'],
            9  => ['Weird'],
            10 => ['Primal Phenomenon'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Fey Infusion';
        $feat->description = '<p>You gain the ability to cast the following spells using Spell Points. You must pay additional Spell Points equal to the additional Spell Slots to heighten a spell.</p>
<ul>
    <li>Faerie Dust: 1 Spell Point</li>
    <li>Fey Disappearance: 3 Spell Points</li>
    <li>Ridiculous Notion: 5 Spell Points</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bloodline', 'Fey']);
        $feat->parent_feats()->save(app()->feats['Fey Bloodline']);

        $feat              = new Feat;
        $feat->name        = 'Dao Bloodline';
        $feat->description = '<p>You have an ancestry from the Earth genies. You gain the following spells.</p>
<ul>
    <li>Increase your STR by +1 to a maximum of 20</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bloodline', 'Earth']);
        $helper->addSpellsToFeat($feat, [
            0  => ['Magic Stone', 'Mold Earth', 'Sand Dagger'],
            1  => ['Earth Tremor', 'Fist of Stone', 'Summon Elemental, Lesser' => 'Earth Elemental only'],
            2  => ["Bear's Endurance" => 'Self only', "Bull's Strength" => 'Self only', 'Earthen Grasp', 'Pillar of Sand',
                'Rockburst', 'Stone Sphere', 'Resist Force', ],
            3  => ['Earthbolt', 'Eradicate Earth', 'Erupting Earth', 'Meld into Stone', 'Stoneskin' => 'Self only', 'Wall of Sand'],
            4  => ['Ground Stomp', 'Passwall' => 'Stone surfaces only', 'Stone Metamorphosis', 'Shape Stone'],
            5  => ['Move Earth', 'Summon Elemental' => 'Earth Elemental only', 'Transmute Rock', 'Wall of Stone'],
            6  => ['Bones of the Earth', 'Investiture of Stone', 'Stone Tell', 'Stone to Flesh'],
            7  => ['Repel Metal or Stone', 'Stone Trap'],
            8  => ['Earthquake'],
            9  => ['Invulnerability'],
            10 => ['Wish'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Djinni Bloodline';
        $feat->description = '<p>You have an ancestry from the Air genies. You gain the following spells.</p>
<ul>
    <li>Increase your DEX by +1 to a maximum of 20</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bloodline', 'Air', 'Electricity']);
        $helper->addSpellsToFeat($feat, [
            0  => ['Air Shield', 'Electric Arc', 'Feather Fall', 'Gust', 'Shocking Grasp', 'Thunderclap'],
            1  => ['Catapult', 'Dust Devil', 'Fog Cloud', 'Gust of Wind', 'Jump', 'Summon Elemental, Lesser' => 'Air Elemental only'],
            2  => ['Air Sphere', "Cat's Grace" => 'Self Only', 'Capricious Zephyr', 'Resist Electricity', 'Thunderstroke',
                'Warding Wind', ],
            3  => ['Call Lightning', 'Eradicate Air', 'Fly' => 'Self Only', 'Lightning Bolt', 'Stinking Cloud', 'Thunder Step'],
            4  => ['Air Walk', 'Calm Air', 'Storm Sphere'],
            5  => ['Binding Wind', 'Cloudkill', 'Control Winds', 'Steel Wind Strike', 'Summon Elemental' => 'Air Elemental only'],
            6  => ['Chain Lightning', 'Investiture of Wind', 'Wall of Wind'],
            7  => ['Investiture of Lightning', 'Whirlwind'],
            8  => ['Wind Walk'],
            9  => ['Storm of Vengeance'],
            10 => ['Wish'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Efreeti Bloodline';
        $feat->description = '<p>You have an ancestry from the Fire genies. You gain the following spells.</p>
<ul>
    <li>You gain Damage Reduction 3 vs Fire</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bloodline', 'Fire']);
        $helper->addSpellsToFeat($feat, [
            0  => ['Control Flames', 'Fire Bolt', 'Produce Flame'],
            1  => ['Burning Hands', 'Resist Fire', 'Summon Elemental, Lesser' => 'Fire Elemental only'],
            2  => ['Absorb Elements', 'Animate Fire', 'Continual Flame' => 'Fire only', 'Flaming Sphere', 'Heat Metal',
                'Pyrotechnics', 'Scorching Ray', ],
            3  => ['Elemental Weapon', 'Eradicate Fire', 'Fireball', 'Minute Meteors'],
            4  => ['Fire Shield', 'Wall of Fire'],
            5  => ['Everlasting Fire', 'Immolation', 'Summon Elemental' => 'Fire Elemental only'],
            6  => ['Investiture of Flame'],
            7  => ['Delayed Blast Fireball', 'Fiery Body', 'Fire Storm'],
            8  => ['Incendiary Cloud'],
            9  => ['Meteor Swarm'],
            10 => ['Wish'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Marid Bloodline';
        $feat->description = '<p>You have an ancestry from the Water genies. You gain the following spells.</p>
<ul>
    <li>Increase your CON by +1 to a maximum of 20</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Bloodline', 'Water', 'Cold']);
        $helper->addSpellsToFeat($feat, [
            0  => ['Acid Splash', 'Fist of Ice', 'Frostbite', 'Hydraulic Blast', 'Ray of Frost', 'Shape Water'],
            1  => ['Acid Stream', 'Aquavision', 'Air Bubble', 'Animate Water', 'Create or Destroy Water', 'Fog Cloud',
                'Ice Knife', 'Summon Elemental, Lesser' => 'Water Elemental only', ],
            2  => ['Acid Arrow', 'Cure Wounds', 'Pressure Resistance', 'Resist Cold', 'Water Walk'],
            3  => ['Eradicate Water', 'Sleet Storm', 'Tidal Wave', 'Undersea Current', 'Wall of Water'],
            4  => ['Control Water', 'Hydraulic Torrent', 'Ice Storm', 'Vitriolic Sphere', 'Watery Sphere'],
            5  => ['Cone of Cold', 'Maelstrom', 'Summon Elemental' => 'Water Elemental only'],
            6  => ['Freezing Sphere', 'Hard Water', 'Investiture of Water', 'Wall of Ice'],
            7  => ['Investiture of Ice'],
            8  => ['Horrid Wilting', 'Tsunami'],
            9  => ['Storm of Vengeance'],
            10 => ['Wish'],
        ]);

        $helper->addFeatsToClass($class, [
            'Angelic Bloodline'  => 1,
            'Demonic Bloodline'  => 1,
            'Devilish Bloodline' => 1,
            'Draconic Bloodline' => 1,
            'Fey Bloodline'      => 1,
            'Dao Bloodline'      => 1,
            'Djinni Bloodline'   => 1,
            'Efreeti Bloodline'  => 1,
            'Marid Bloodline'    => 1,

            'Draconic Form'       => 5,

            'Abjurer'                  => 1,
            'Reach Spell'              => 1,
            'Widen Spell'              => 1,
            'Extend Spell'             => 2,
            'Improved Counterspell'    => 2,
            'Silent Spell'             => 2,
            'Disguise Spell'           => 3,
            'Heighten Spell'           => 3,
            'Hold Spell'               => 3,
            'Split Ray'                => 3,
            'Conceal Spell'            => 4,
            'Delay Spell'              => 4,
            'Expanded Spell Knowledge' => 5,
            'Improved Hold Spell'      => 6,
            'Persistent Spell'         => 6,
            'Repeat Spell'             => 6,
            'Arcane Strike'            => 7,
            'Twin Spell'               => 7,
            'Metamagic Master'         => 8,
            'Quicken Spell'            => 8,
            'Greater Counterspell'     => 10,

            'Find Familiar'    => 2,
            'Enhance Familiar' => 4,

            'Extend Spell Pool' => 5,
        ]);
    }
}
