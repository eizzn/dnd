<?php

namespace Database\Seeders\Gods;

use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsElementalsSeeder extends Seeder
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
        $god->name  = 'Akadi';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'           => $god->name,
            'title'          => 'The Lady of Air, Lady of the Winds, Queen of Air, The Four Winds',
            'level'          => 'Greater',
            'aliases'        => 'Teylas (Hordelands)',
            'portfolio'      => 'Elemental Air, Flying Creatures, Movement, Speed(in the Hordelands, Archery, Rain [stolen from Istishia])',
            'regions'        => 'Hordelands',
            'alignment'      => '(C)N',
            'symbol'         => 'Cloud',
            'favored_weapon' => 'A whirlwind (Spear and Longbow)',
        ]);
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'           => 'Aerdrie Faenya',
            'title'          => 'Bringer of Rain and Storms, Lady of Air and Wind, Queen of the Avariel, She of the Azure Plumage, The Winged Mother',
            'level'          => 'Lesser',
            'portfolio'      => 'Air, Avariels, Aarakocras, Avians, Fertility, Rain, Weather',
            'alignment'      => 'CG',
            'symbol'         => 'A bird silhouetted in a cloud',
            'favored_weapon' => 'Thounderbolt (Longbow)',
            'master_id'      => God::where('name', 'Corellon Larethian')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Al-Qadim'], [
            'name'           => $god->name,
            'title'          => 'The Lady of Air, Lady of the Winds, Queen of Air',
            'level'          => 'Greater',
            'portfolio'      => 'Elemental Air, Flying Creatures, Movement, Speed',
            'alignment'      => 'N',
            'symbol'         => 'Cloud',
            'favored_weapon' => 'A whirlwind (Spear and Longbow)',
        ]);
        $god->pantheons()->save(app()->pantheons['Maztican'], [
            'name'      => 'Eha',
            'title'     => 'Wind Sprite',
            'level'     => 'Greater',
            'portfolio' => 'Air, Winds',
            'alignment' => 'CN',
        ]);

        $helper->addClassesToGod($god, 'Elemental', [
            'Fighter' => 20,
            'Wizard'  => 20,
            'Cleric'  => 10,
        ]);

        $class                = new Klass;
        $class->name          = 'Airwalkers';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Trained in all simple weapons, all spears, and all bows';
        $class->armors        = 'Trained in all light armor';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Akadi</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 2,
        ], ['WIS', 'CHA']);

        $helper->addWorshipClassesToGod($god, 'Elemental', [
            $class->name, 'Ranger', 'Scout', 'Rogue',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Concentration', 'Diplomacy', 'Lore', 'Medicine', 'Religion', 'Society',
        ]);

        $helper->addFeaturesToClass($class, [
            'spell_point' => [3],
        ]);
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 3,
            'meta'  => '<dl>
    <dt>Actions</dt> <dd>Action</dd>
    <dt>Spell</dt> <dd>Gust of Wind</dd>
</dl>', ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 4,
            'meta'  => 'Weapon Focus with any bow',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 6,
            'meta'  => 'Extra Ranged Attack',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 8,
            'meta'  => 'Weapon Specialization with any bow',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Air Elementals');
        $helper->addDomainToClass($class, ['Air']);
        $helper->addSpellsToClass($class, [
            0 => ['Air Shield', 'Ease of Breath', 'Gust', 'Feather Fall', 'Stabilize'],
            1 => ['Air Bubble', 'Animal Friendship' => 'Avian creatures only', 'Cure Wounds', 'Floating Step', 'Gust of Wind',
                'Summon Animals' => 'Avian creatures only', 'Summon Elemental, Lesser' => 'Air Elementals only', 'Updraft',
                'Warding Wind', 'Weather Sense', ],
            2 => ['Air Sphere', 'Animal Messenger' => 'Avian creatures only', 'Blur', "Cat's Grace", 'Dust Devil', 'Heart of Air',
                'Levitate', 'Obscuring Mist', 'Sonic Burst', 'Wings of Air', ],
            3 => ['Capricious Zephyr', 'Cloak of Winds', 'Elemental Ward' => 'Air only', 'Eradicate Air', 'Fly', 'Haste',
                'Protection From Elements' => 'Cold only', 'Shockwave', ],
            4 => ['Air Walk', 'Calm Air', 'Clean Air', 'Divine Agility', 'Storm Sphere'],
            5 => ['Binding Wind', 'Cloudkill', 'Control Winds', 'Energy Buffer' => 'Cold only', 'Summon Elemental' => 'Air Elementals only'],
            6 => ['Investiture of Wind', 'Wall of Wind'],
            7 => ['Plane Shift' => 'Elemental Plane of Air or from the Plane of Air to the Prime material only', 'Whirlwind'],
            8 => ['Punishing Winds', 'Wind Walk'],
            9 => ['Storm of Vengeance'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Grumbar';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'           => $god->name,
            'title'          => 'Boss of Earth, Earthlord, Gnarly One, King of the Land Below the Roots, Boss of the Earth Elementals',
            'level'          => 'Greater',
            'aliases'        => 'Etugen/Crom (Hordelands)',
            'portfolio'      => 'Elemental Earth, Solidity, Changelessness, Oaths (in the Hordelands, Farming, War)',
            'regions'        => 'The Spine of the World Mountains, Yehimal Mountains, Icerim Mountains, Hordelands',
            'alignment'      => '(L)N',
            'symbol'         => 'Mountains on purple',
            'favored_weapon' => 'A stony fist (warhammer)',
        ]);
        $god->pantheons()->save(app()->pantheons['Al-Qadim'], [
            'name'           => $god->name,
            'title'          => 'Boss of Earth, Earthlord, Gnarly One, King of the Land Below the Roots, Boss of the Earth Elementals',
            'level'          => 'Greater',
            'portfolio'      => 'Elemental Earth, Solidity, Changelessness, Oaths',
            'alignment'      => 'N',
            'symbol'         => 'Mountains on purple',
            'favored_weapon' => 'A stony fist (warhammer)',
        ]);
        $god->pantheons()->save(app()->pantheons['Morndinsamman'], [
            'name'           => 'Dumathoin',
            'title'          => 'Keeper of Secrets under the Mountain, The Silent Keeper',
            'level'          => 'Lesser',
            'portfolio'      => 'Buried secrets and wealth, mining, gems, exploration, the dead',
            'regions'        => 'Dwarves of the Sword Coast, Dwarves of the North, Gautlgrym, Citadel Adbar, Citadel Felbarr, Mithral Hall, Hundelstone',
            'alignment'      => 'LN',
            'symbol'         => 'Mountain silhouette with a central gemstone',
            'favored_weapon' => 'Magmahammer (Mattock or Maul)',
            'master_id'      => God::where('name', 'Odin Borrson')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Gnome'], [
            'name'           => 'Segojan Earthcaller',
            'title'          => 'Earthfriend, Lord of the Burrow',
            'level'          => 'Lesser',
            'portfolio'      => 'Earth, the Dead',
            'alignment'      => 'NG',
            'symbol'         => 'Glowing gemstone',
            'master_id'      => God::where('name', 'Garl Glittergold')->first()->id,
            'favored_weapon' => 'Earthcaller (Heavy Mace)',
        ]);
        $god->pantheons()->save(app()->pantheons['Maztican'], [
            'name'      => 'Plutoq',
            'title'     => 'Master of Stone and Earth',
            'level'     => 'Greater',
            'portfolio' => 'Mountains, Stone',
            'alignment' => 'LN',
        ]);
        $god->pantheons()->save(app()->pantheons['Mulhorandi'], [
            'name'           => 'Geb',
            'title'          => 'King of the Riches Under the Earth, Father Under the Skies and Sands, Lord Earth',
            'aliases'        => 'Gebthant (Thay), Gebakotep (Unther)',
            'level'          => 'Demi',
            'portfolio'      => 'The earth, Miners, Mines, Mineral Resources',
            'regions'        => 'Mulhorand',
            'alignment'      => 'N',
            'symbol'         => 'A mountain',
            'favored_weapon' => 'Stonemantle (quarterstaff)',
            'master_id'      => God::where('name', 'Horus-Re')->first()->id,
        ]);

        $helper->addClassesToGod($god, 'Elemental', [
            'Fighter' => 20,
            'Wizard'  => 20,
            'Cleric'  => 10,
        ]);

        $class                = new Klass;
        $class->name          = 'Earthwalkers';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Trained with all Bludgeoning Weapons';
        $class->armors        = 'Trained in all light armor, medium armor, heavy armor, and shields';
        $class->description   = '<p>Priest of Grumbar</p>';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 2,
        ], ['WIS', 'CHA']);

        $helper->addWorshipClassesToGod($god, 'Elemental', [
            $class->name, 'Monk',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Concentration', 'Diplomacy', 'Lore', 'Medicine', 'Religion', 'Society',
        ]);

        $helper->addFeaturesToClass($class, [
            'spell_point' => [3],
        ]);
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 3,
            'meta'  => "<dl>
    <dt>Actions</dt> <dd>Action</dd>
    <dt>Spell</dt> <dd>Bear's Endurance</dd>
</dl>", ]);
        $class->features()->save(app()->features['damage_reduction'], [
            'level' => 4,
            'meta'  => 'Damage Reduction: 1',
        ]);

        $helper->addChannelDivinityToClass($class, 'positive', 'Earth Elementals');
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead', 5);
        $helper->addDomainToClass($class, ['Protection', 'Earth', 'Knowledge']);
        $helper->addSpellsToClass($class, [
            0  => ['Light', 'Mold Earth', 'Sand Dagger' => 'Can use dirt instead', 'Stabilize'],
            1  => ['Bless', 'Cure Wounds', 'Detect Metal and Mineral', 'Earth Tremor', 'Earthfast', 'Fist of Stone', 'Mold Metal',
                'Quick Burrow', 'Zone of Truth', ],
            2  => ["Bear's Endurance", "Bull's Strength", 'Earthen Grasp', 'Gentle Repose', 'Hardening' => 'Earth and metal items only',
                'Lay of the Land', 'Locate Node', 'Remove Paralysis', 'Rock Whip', 'Stone Sphere', 'Tremorsense', 'Resist Force',
                'Rockburst', ],
            3  => ['Burrow', 'Clearstone', 'Eradicate Earth', 'Erupting Earth', 'Ground Stomp', 'Maskstone', 'Speak with Dead',
                'Unmovable'],
            4  => ['Animate with Spirit', 'Elemental Ward' => 'Earth only', 'Heart of Earth', 'Planar Adaption' => 'Elemental Earth only',
                'Stone Metamorphosis', 'Shape Metal', 'Shape Stone', 'Stoneskin', ],
            5  => ['Atonement', 'Earth Glide', 'Earthenport', 'Passwall', 'Ritual of the March', 'Summon Elemental' => 'Earth Elementals only',
                'Hibernate', 'Transmute Rock', 'Wall of Stone', ],
            6  => ['Bones of the Earth', 'Commune with Earth', 'Excavate', 'Field of Life', 'Heal', 'Investiture of Stone',
                'Move Earth', 'Raise Dead', 'Stone Body', 'Stone to Flesh', 'Purifying Light', 'Stone Trap', 'Wall of Iron', ],
            7  => ['Holy Aura', 'Regenerate'],
            8  => ['Earthquake', 'Iron Body', 'Repel Metal or Stone'],
            9  => ['Erupt', 'Foresight', 'Invulnerability'],
            10 => ['Earthmaster'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $class                = new Klass;
        $class->name          = 'Talhund';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Trained in all simple weapons';
        $class->armors        = 'Trained in all light armor, medium armor, heavy armor, and shields';
        $class->description   = '<p>Priest of Dumathoin</p>';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 2,
        ], ['WIS', 'CHA']);

        $helper->addWorshipClassesToGod($god, 'Morndinsamman', [
            $class->name,
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Concentration', 'Diplomacy', 'Lore', 'Medicine', 'Religion', 'Society',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Earth Elementals');
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead', 5);
        $helper->addDomainToClass($class, ['Death', 'Earth', 'Knowledge']);
        $helper->addSpellsToClass($class, [
            0  => ['Light', 'Mold Earth', 'Sand Dagger' => 'Can use dirt instead', 'Stabilize'],
            1  => ['Bless', 'Cure Wounds', 'Detect Metal and Mineral', 'Earth Tremor', 'Earthfast', 'Fist of Stone', 'Mold Metal',
                'Quick Burrow', 'Zone of Truth', ],
            2  => ["Bear's Endurance", "Bull's Strength", 'Earthen Grasp', 'Gentle Repose', 'Hardening' => 'Earth and metal items only',
                'Lay of the Land', 'Locate Node', 'Remove Paralysis', 'Rock Whip', 'Stone Sphere', 'Tremorsense', 'Resist Force',
                'Rockburst', ],
            3  => ['Burrow', 'Clearstone', 'Eradicate Earth', 'Erupting Earth', 'Ground Stomp', 'Maskstone', 'Speak with Dead',
                'Unmovable'],
            4  => ['Animate with Spirit', 'Elemental Ward' => 'Earth only', 'Heart of Earth', 'Planar Adaption' => 'Elemental Earth only',
                'Stone Metamorphosis', 'Shape Metal', 'Shape Stone', 'Stoneskin', ],
            5  => ['Atonement', 'Earth Glide', 'Earthenport', 'Passwall', 'Ritual of the March', 'Summon Elemental' => 'Earth Elementals only',
                'Hibernate', 'Transmute Rock', 'Wall of Stone', ],
            6  => ['Bones of the Earth', 'Commune with Earth', 'Excavate', 'Field of Life', 'Heal', 'Investiture of Stone',
                'Move Earth', 'Raise Dead', 'Stone Body', 'Stone to Flesh', 'Purifying Light', 'Stone Trap', 'Wall of Iron', ],
            7  => ['Holy Aura', 'Regenerate', 'Resurrection'],
            8  => ['Earthquake', 'Iron Body', 'Repel Metal or Stone'],
            9  => ['Erupt', 'Foresight', 'Invulnerability'],
            10 => ['Earthmaster', 'True Resurrection', 'Revival'],
        ]);
        $helper->addSpellSlotsToClass($class);

        // Priest of Segojan
        $class                = new Klass;
        $class->name          = 'Priest of Segojan';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Light Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 4,
        ], ['WIS', 'CHA']);

        $helper->addClassesToGod($god, 'Gnome', [
            'Fighter' => 10,
            'Cleric'  => 20,
        ]);
        $helper->addWorshipClassesToGod($god, 'Gnome', [
            $class->name,
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Animal Handling', 'Concentration', 'Diplomacy', 'Intimidation', 'Medicine', 'Performance', 'Religion']
        );
        $helper->addChannelDivinityToClass($class, 'positive', 'Earth Elementals');
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead', 2, 1);
        $helper->addDomainToClass($class, ['Craft', 'Gnome', 'Protection', 'Trickery']);
        $helper->addSpellsToClass($class, [
            0  => ['Light', 'Mold Earth', 'Stabilize'],
            1  => ['Bless', 'Cure Wounds', 'Earth Tremor', 'Earthfast', 'Quick Burrow', 'Treasure Scent'],
            2  => ["Bear's Endurance", 'Burrow', 'Detect Metal and Mineral', 'Earthen Grasp', 'Gentle Repose', 'Hardening' => 'Earth and metal items only',
                'Lay of the Land', 'Locate Node', 'Remove Paralysis', 'Resist Force', 'Rock Whip', 'Stone Sphere',
                'Tremorsense', 'Rockburst', ],
            3  => ['Clearstone', 'Eradicate Earth', 'Erupting Earth', 'Ground Stomp', 'Maskstone', 'Speak with Dead'],
            4  => ['Elemental Ward' => 'Earth only', 'Heart of Earth', 'Planar Adaption' => 'Elemental Earth only',
                'Stone Metamorphosis', 'Shape Stone', 'Stoneskin', ],
            5  => ['Atonement', 'Commune with Earth', 'Earth Glide', 'Earthenport', 'Hibernate', 'Passwall', 'Summon Elemental' => 'Earth Elementals only',
                'Transmute Rock', 'Wall of Stone', ],
            6  => ['Bones of the Earth', 'Heal', 'Investiture of Stone', 'Move Earth', 'Raise Dead', 'Stone Trap'],
            7  => ['Excavate', 'Resurrection', 'Wall of Iron'],
            8  => ['Earthquake', 'Iron Body'],
            9  => ['Erupt', 'Invulnerability'],
            10 => ['True Resurrection', 'Revival'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $class                = new Klass;
        $class->name          = 'Priest of Geb';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 2,
        ], ['CON', 'WIS']);

        $helper->addClassesToGod($god, 'Mulhorandi', [
            'Fighter'  => 10,
            'Sorcerer' => 10,
            'Druid'    => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Mulhorandi', [
            $class->name,
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Diplomacy', 'Medicine', 'Religion']);
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 3,
            'meta'  => '<dl>
    <dt>Actions</dt> <dd>Double Action</dd>
    <dt>Spell</dt> <dd>Detect Metal and Mineral</dd>
</dl>',
        ]);
        $helper->addChannelDivinityToClass($class, 'negative', 'Earth Elementals');
        $helper->addDomainToClass($class, ['Cavern', 'Craft', 'Earth', 'Protection']);
        $helper->addSpellsToClass($class, [
            0 => ['Light', 'Mold Earth', 'Stabilize'],
            1 => ['Bless', 'Cure Wounds', 'Earth Tremor', 'Earthfast', 'Fist of Stone', 'Sanctuary', 'Treasure Scent'],
            2 => ['Detect Metal and Mineral', 'Earthen Grasp', 'Hardening' => 'Earth and metal items only', 'Locate Node',
                'Remove Paralysis', 'Tremorsense', 'Rockburst', ],
            3 => ['Erupting Earth', 'Ground Stomp', 'Know Bloodline'],
            4 => ['Heart of Earth', 'Shape Metal', 'Shape Stone', 'Stoneskin'],
            5 => ['Atonement', 'Earth Glide', 'Earthenport', 'Passwall', 'Summon Elemental' => 'Earth Elementals only',
                'Hibernate', 'Transmute Rock', 'Wall of Stone', ],
            6 => ['Bones of the Earth', 'Commune with Earth', 'Excavate', 'Investiture of Stone', 'Move Earth'],
            7 => ['Stone Trap', 'Volcanic Eruption', 'Wall of Iron'],
            8 => ['Earthquake'],
            9 => ['Erupt'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Morndinsamman']->id,
            'favor'       => "<p>Dumathoin's eye falls on people who are both inquisitive and reclusive, toeing that strange personality crossover that produces private investigators, weary archivists and laboratory scientists. He values discretion, and an iron will.</p>
<p>Dumathoin's scions are usually close-lipped and secretive, preferring to keep everyone in the dark about their plans than risk their enemies finding out important information. They make taciturn allies, and inscrutable enemies.</p>
<ol>
    <li>You resisted interrogation from a species uniquely suited to it, such as mind flayers</li>
    <li>You were told a secret in your youth. You've kept it your whole life, and intend to die with it</li>
    <li>You buried something of critical cultural and magical importance deep under the earth</li>
    <li>You erased your own memory of your family so that no-one could use them against you</li>
    <li>You are on a quest for an item or book that Dumathoin has decided should come to light again</li>
    <li>You don't know who your parents are, and your only known family died before they could tell you</li>
</ol>",
            'devotion' => '<p>Following Dumathoin means dedicating yourself to buried secrets above any other concerns. As a follower of Dumathoin, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Mystery</dt> <dd>Secrets are beautiful in their own right</dd>
    <dt>Stewardship</dt> <dd>Hiding information can preserve it from destruction until the world is ready for it</dd>
    <dt>Power</dt> <dd>Being the only person alive who knows something gives me a rush</dd>
    <dt>Scholarship</dt> <dd>I want to uncover the long forgotten secrets of the past, all for my research</dd>
    <dt>Greater Good</dt> <dd>Some things should be forgotten and never rediscovered</dd>
</dl>',
            'earn_piety' => [
                'Uncovering a buried truth, hidden item, or lost secret, and being careful to whom to disclose it',
                'Hiding something too dangerous to come to light',
            ],
            'lose_piety' => [
                'Allowing dangerous discovered lore or items to fall into the wrong hands',
            ],
            'piety3' => '<h4>Favored God: Dumathoin</h4>
<p>You gain inspiration when you uncover something hidden or buried</p>',
            'piety10' => '<h4>Under the Mountain</h4>
<p>Your mind cannot be read against your will</p>',
            'piety25' => '<h4>Buried Secrets</h4>
<p>You can cast Contact Other Plane with this trait, requiring no components. Once you cast the spell in this way, you can\'t do so again until you finish a long rest. WIS is your spellcasting ability for this spell</p>',
            'piety50' => '<h4>Chosen of Dumathoin</h4>
<p>You may use an Action to spend an inspiration and touch a stone wall. When you do so, you gain Tremorsense out to 120 feet for 1 minute, or until you stop touching the wall</p>',
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Gnome']->id,
            'favor'       => "<p>Segojan's favour is bestowed on those kind and giving souls who value the natural world, using its gifts to better the lives of others without seeking glory or recompense. Segojan looks for those champions who don’t want to be adventurers - he finds that people with this frame of mind make for the most ethical ones.</p>
<p>Segojan's scions are usually healers, farmers and people who work with their hands. He prefers practical sorts over theorists.</p>
<ol>
    <li>You know the names of every plant which grows under the world away from the light</li>
    <li>You heal anyone who comes to you for help, no matter who, and with no cost</li>
    <li>You are renowned locally for your excellent meals</li>
    <li>A loved one was deeply sick, and Segojan interceded to save their lives in the form of a mole. You owe them</li>
    <li>You've been silent for so long that you think you can hear the stones talking to each other</li>
    <li>You laid your entire tribe to rest from a terrible tragedy. When you were finally alone, Segojan came to sit with you awhile and held your hand</li>
</ol>",
            'devotion' => "<p>Following Segojan means dedicating yourself to the retiring wisdom of the Earthcaller. As a follower of Segojan, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Mortality</dt> <dd>All things die. THe best we can hope for is a dignified passing and someone we love nearby as we go</dd>
    <dt>Charity</dt> <dd>We owe kindness to each other. We are all born from the same soil, and to that we will return</dd>
    <dt>Mystery</dt> <dd>Every time I think I understand the world, I uncover a deeper mystery</dd>
    <dt>Selflessness</dt> <dd>The life I have been given is a precious gift. My life's work must be to repay that generosity</dd>
    <dt>Humility</dt> <dd>There should be no glory in doing the right thing - this is the path to hubris and evil</dd>
</dl>",
            'earn_piety' => [
                'Heal another creature',
                'Interact with the small and quiet things of the natural world',
            ],
            'lose_piety' => [
                'Killing peaceful creatures or destroying the quiet of nature',
                'Accepting glory and fame from your achievements',
            ],
            'piety3' => '<h4>Favored God: Garl</h4>
<p>You gain Inspiration when you spend time in quiet meditation</p>',
            'piety10' => '<h4>Inner Silence</h4>
<p>Your spells and magical abilities cannot be countered or dispelled by antimagic effects</p>',
            'piety25' => '<h4>Immutable Soul</h4>
<p>YourBonds, Flaws and Ideals cannot be magically altered</p>',
            'piety50' => "<h4>Chosen of Segojan</h4>
<p>You can spend an Inspiration to cast Hero's Feast as a Ritual with this trail, requiring no components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Istishia';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'           => $god->name,
            'title'          => 'The Water Lord, King of the Water Elementals',
            'level'          => 'Greater',
            'portfolio'      => 'Water',
            'alignment'      => 'N(G)',
            'regions'        => 'Hordelands',
            'symbol'         => 'Cresting wave',
            'favored_weapon' => 'A wave (warhammer)',
        ]);
        $god->pantheons()->save(app()->pantheons['Al-Qadim'], [
            'name'           => $god->name,
            'title'          => 'The Water Lord, King of the Water Elementals',
            'level'          => 'Greater',
            'portfolio'      => 'Water',
            'alignment'      => 'N',
            'symbol'         => 'Cresting wave',
            'favored_weapon' => 'A wave (warhammer)',
        ]);
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'           => 'Deep Sashelas',
            'title'          => 'Lord of the Undersea, The Dolphin Prince',
            'level'          => 'Intermediate',
            'portfolio'      => 'Sea Elves, Creativity, Knowledge, Sea',
            'regions'        => 'The Sea of Swords, The Trackless Sea',
            'symbol'         => 'Dolphin',
            'alignment'      => 'CG',
            'master_id'      => God::where('name', 'Corellon Larethian')->firstOrFail()->id,
            'favored_weapon' => 'Trifork of the Deeps (Trident)',
        ]);
        $god->pantheons()->save(app()->pantheons['Asathalfinare'], [
            'name'           => 'Deep Sashelas',
            'title'          => 'Lord of the Undersea, The Dolphin Prince',
            'level'          => 'Intermediate',
            'portfolio'      => 'Sea Elves, Creativity, Knowledge, Sea',
            'regions'        => 'Sea of Fallen Stars',
            'symbol'         => 'Dolphin',
            'alignment'      => 'CG',
            'favored_weapon' => 'Trifork of the Deeps (Trident)',
        ]);
        $god->pantheons()->save(app()->pantheons['Maztican'], [
            'name'      => 'Azul',
            'title'     => 'Giver of Rain, Taker of Breath',
            'level'     => 'Greater',
            'portfolio' => 'Rain, Water',
            'alignment' => 'LE',
        ]);

        $helper->addClassesToGod($god, 'Elemental', [
            'Fighter' => 20,
            'Wizard'  => 20,
            'Cleric'  => 10,
        ]);

        $class                = new Klass;
        $class->name          = 'Waterwalkers';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Trained in all Bludgeoning Weapons, Nets, Harpoons, and Tridents';
        $class->armors        = 'Trained in all light armor, medium armor';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Istishia</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 2,
        ], ['WIS', 'CHA']);
        $helper->addWorshipClassesToGod($god, 'Elemental', [
            $class->name,
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Concentration', 'Diplomacy', 'Lore', 'Medicine', 'Religion', 'Society',
        ]);
        $class->features()->save(app()->features['channel_divinity_caster'], [
            'level' => 3,
            'meta'  => '<dl>
    <dt>Actions</dt> <dd>Double Action</dd>
    <dt>Spell</dt> <dd>Create or Destroy Water</dd>
</dl>',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Water Elementals');
        $helper->addDomainToClass($class, ['Healing', 'Purification', 'Water']);
        $helper->addSpellsToClass($class, [
            0  => ['Acid Splash', 'Clean Self', 'Hydraulic Blast', 'Shape Water', 'Stabilize'],
            1  => ['Acid Stream', 'Animate Water', 'Bless', 'Cure Wounds', 'Create or Destroy Water', 'Detect Poison and Disease',
                'Faith Healing', 'Locate Water', 'Neutral Water', 'Quick Swim', 'Remove Disease', 'Resist Acid', ],
            2  => ['Acid Arrow', 'Aquavision', 'Delay Poison', 'Protection From Poison', 'Remove Fear', 'Resist Cold',
                'Resist Poison', 'Restore Senses', 'Restoration', 'Turbidity', 'Water Breathing', 'Water Walk', 'Water Whip', ],
            3  => ['Cloak of the Sea', 'Coral Growth', 'Eradicate Water', 'Heart of Water', 'Neutralize Poison', 'Quench',
                'Planar Adaption' => 'Elemental Water only', 'Quick Cure Wounds', 'Tidal Wave', 'Undersea Current', 'Wall of Water', ],
            4  => ['Aqueous Column', 'Elemental Ward' => 'Water only', 'Hydraulic Torrent', 'Remove Curse', 'Ride the Waves',
                'Watery Form', 'Watery Sphere', ],
            5  => ['Atonement', 'Control Water', 'Hard Water', 'Maelstrom', 'Summon Elemental' => 'Water Elementals only'],
            6  => ['Heal', 'Investiture of Water', 'Raise Dead'],
            7  => ['Holy Aura', 'Regenerate'],
            8  => ['Horrid Wilting', 'Power Word Heal', 'Tsunami'],
            9  => ['Storm of Vengeance'],
            10 => ['Revival'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $class                = new Klass;
        $class->name          = 'Priest of Deep Sashelas';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons, Trident, Harpoon';
        $class->armors        = 'Light Armor, Medium Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 4,
        ], ['WIS', 'CHA'], [
            'Elf', 'Divine',
        ]);

        $helper->addClassesToGod($god, 'Seldarine', [
            'Fighter' => 15,
            'Wizard'  => 15,
            'Druid'   => 15,
        ]);
        $helper->addWorshipClassesToGod($god, 'Seldarine', [
            $class->name, 'Paladin', 'Wizard',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Athletics', 'Concentration', 'Diplomacy', 'Medicine', 'Performance', 'Religion',
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Aquatic Wild Life', 4);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead', 5);
        $helper->addSpellsToClass($class, [
            0 => ['Conviction', 'Shape Water'],
            1 => ['Create or Destroy Water', 'Cure Wounds', 'Fog Cloud', 'Neutral Water'],
            2 => ['Feet to Fins', 'Fins to Feet', 'Resist Cold', 'Turbidity', 'Undead Bane Weapon', 'Water Breathing', 'Water Walk'],
            3 => ['Faithful Healing', 'Stars of Arvandor', 'Tidal Wave', 'Wall of Water'],
            4 => ['Ceremony', 'Watery Sphere'],
            5 => ['Atonement', 'Control Water', 'Maelstrom'],
            6 => ['Wall of Ice'],
            8 => ['Tsunami'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Kossuth';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'           => $god->name,
            'title'          => 'The Firelord, The Lord of Flames, The Tyrant-King among Fire',
            'level'          => 'Greater',
            'portfolio'      => 'Elemental Fire, Purification through Fire (in the Hordelands, Witchcraft, Black Magic)',
            'alignment'      => 'N',
            'regions'        => 'Thay, Hordelands',
            'symbol'         => 'A twining red flame',
            'favored_weapon' => 'Tendril of flame (spiked chain)',
        ]);
        $god->pantheons()->save(app()->pantheons['Al-Qadim'], [
            'name'           => $god->name,
            'title'          => 'The Firelord, Lord of Flames, The Tyrant-King',
            'level'          => 'Greater',
            'portfolio'      => 'Elemental fire, purification through fire',
            'alignment'      => 'N',
            'symbol'         => 'A twining red flame',
            'favored_weapon' => 'Tendril of flame (spiked chain)',
        ]);
        $god->pantheons()->save(app()->pantheons['Maztican'], [
            'name'      => 'Tezca',
            'title'     => 'Ruler of Sun and Fire',
            'level'     => 'Greater',
            'portfolio' => 'The Sun, Fire, Heat',
            'alignment' => 'CE',
        ]);
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => 'Garyx',
            'title'          => 'All-Destroyer, Cleanser of Worlds, Firelord',
            'level'          => 'Lesser',
            'portfolio'      => 'Fire, destruction, Renewal',
            'alignment'      => 'CE',
            'symbol'         => 'A reptilian eye superimposed over a red flame',
            'favored_weapon' => 'Claw (sickle)',
        ]);

        $helper->addClassesToGod($god, 'Elemental', [
            'Fighter' => 20,
            'Wizard'  => 20,
            'Cleric'  => 10,
        ]);

        $class                = new Klass;
        $class->name          = 'Firewalkers';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Trained in all simple weapons';
        $class->armors        = 'Trained in all light armor, medium armor, and shields';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Kossuth</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 3,
            'skill_progress' => 2,
        ], ['WIS', 'CHA']);
        $helper->addWorshipClassesToGod($god, 'Elemental', [
            $class->name, 'Monk',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Concentration', 'Diplomacy', 'Lore', 'Medicine', 'Religion', 'Society',
        ]);
        $helper->addFeaturesToClass($class, [
            'fire_resistance' => [5],
            'fire_immunity'   => [12],
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Fire Elementals');
        $helper->addDomainToClass($class, ['Fire']);
        $helper->addSpellsToClass($class, [
            0 => ['Control Flames', 'Fire Bolt', 'Green-Flame Blade', 'Produce Flame', 'Ray of Flame', 'Resistance' => 'Fire only'],
            1 => ['Absorb Elements' => 'Fire only', 'Burning Hands', 'Cure Wounds', 'Resist Fire'],
            2 => ['Animate Fire', 'Continual Flame', 'Divine Flame', 'Fireburst', 'Flame Blade', 'Flaming Sphere', 'Heat Metal',
                'Pyrotechnics', 'Scorching Ray', ],
            3 => ['Eradicate Fire', 'Fire Step', 'Fire Whip', 'Fireball', 'Flame Arrows', 'Minute Meteors', 'Protection From Elements' => 'Fire only'],
            4 => ['Everlasting Fire', 'Fire Eyes', 'Fire Shield', 'Fire Stride', 'Wall of Fire'],
            5 => ['Antifire Sphere', 'Dispel Cold', 'Energy Buffer' => 'Fire only', 'Firebrand', 'Fiery Protector', 'Flameproof',
                'Flame Strike', 'Heart of Fire', 'Immolation', 'Summon Elemental' => 'Fire Elementals only', ],
            6 => ['Fire Seeds', 'Investiture of Flame'],
            7 => ['Fiery Body', 'Fire Storm'],
            8 => ['Incendiary Cloud'],
            9 => ['Erupt', 'Meteor Swarm'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Ogremoch';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'      => $god->name,
            'title'     => 'Prince of Evil Earth Creatures, Prince of Evil Earth, Tyrant of the Black Earth, Mountain of Doom',
            'level'     => 'Archomental',
            'portfolio' => 'Evil Earth Elementals',
            'alignment' => 'NE',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Entemoch';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'      => $god->name,
            'title'     => 'Prince of Good Earth Elementals',
            'level'     => 'Archomental',
            'portfolio' => 'Good Earth Elementals',
            'alignment' => 'NG',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Sunnis';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'      => $god->name,
            'title'     => 'Princess of Good Earth Elementals',
            'level'     => 'Archomental',
            'portfolio' => 'Good Earth Elementals',
            'alignment' => 'NG',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Imix';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'      => $god->name,
            'title'     => 'Prince of Evil Fire Elementals, Prince of Evil Fire, The Eternal Flame, The All-Consuming Fire, Prince of Fire',
            'level'     => 'Archomental',
            'portfolio' => 'Evil Fire Elementals',
            'alignment' => 'NE',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Zaaman Rul';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'           => $god->name,
            'title'          => 'The Flame of Purity, Resilient Ember',
            'level'          => 'Archomental',
            'portfolio'      => 'Good Fire Elementals',
            'alignment'      => 'NG',
            'symbol'         => 'Longsword made of fire a bright orange Z',
            'favored_weapon' => 'Longsword made of fire (Longsword)',
            'description'    => "<p>Zaaman Rul is the bastard son of Imix and Bristia Pel (the original holder of the titles Zaaman Rul now holds). Bristia Pel was betrayed and then murdered by Chilimba of Magma and Ehkakh of Smoke during the great War of Law and Chaos.</p>
<p>During the battle on the Plain of Burnt Dreams, Zaaman Rul is mortally wounded by Imix. As he lay dying, a phoenix swooped down from the sky and healed him, inspiring Zaaman Rul to continue his struggles against Imix.</p>
<p>Zaaman Rul has made allies with Amaimon, King of the Azers, the powerful Brass Dragon Ronothere (along with ties to the Court of Stars), and the Tome Archon Raziel.</p>
<p>While Imix is Zaaman Rul's greatest nemesis, he also struggles against Mephistopheles and the Archomental of Ash, Gazra the Shifting Emperor.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Ben-hadar';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'      => $god->name,
            'title'     => 'Prince of Good Water Creatures',
            'level'     => 'Archomental',
            'portfolio' => 'Good Water Elementals',
            'alignment' => 'NG',
        ]);
        $god->pantheons()->save(app()->pantheons['Asathalfinare'], [
            'name'           => 'Persana',
            'title'          => 'Guardian of the Deep, Justice of the Depths',
            'level'          => 'Lesser',
            'portfolio'      => 'Tritons, Architecture',
            'regions'        => 'Sea of Swords, Sea of Fallen Stars',
            'alignment'      => 'NG',
            'symbol'         => 'Silver trident against a silhouetted conch',
            'favored_weapon' => 'Trident',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Yan-C-Bin';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'      => $god->name,
            'title'     => 'Prince of Evil Aerial Creatures, Price of Evil Air, Shadow of the Four Winds, Howling Hatred, Storm Born',
            'level'     => 'Archomental',
            'portfolio' => 'Evil Air Elementals',
            'alignment' => 'NE',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Chan';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'      => $god->name,
            'title'     => 'Princess of Good Air Creatures, Good Elemental Air',
            'level'     => 'Archomental',
            'portfolio' => 'Good Air Elementals',
            'alignment' => 'NG',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Kalbari al-Durrant al-Amwaj ibn Jari';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'      => $god->name,
            'title'     => 'Maharajah of the Marid, The Pearl of the Sea, The Mother of Foam, The Maharajah of the Oceans',
            'level'     => 'Archomental',
            'portfolio' => 'Marid genies',
            'alignment' => 'CN',
        ]);
        $god->pantheons()->save(app()->pantheons['Al-Qadim'], [
            'name'      => $god->name,
            'title'     => 'Maharajah of the Marid, The Pearl of the Sea, The Mother of Foam, The Maharajah of the Oceans',
            'level'     => 'Archomental',
            'portfolio' => 'Marid genies',
            'alignment' => 'CN',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Kabril Ali al-Sara al-Zalazil';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'      => $god->name,
            'title'     => "Great Khan of the Dao, The Fountain of Wealth, The Perfect Compass, Ataman of the Mountain's Roots",
            'level'     => 'Archomental',
            'portfolio' => 'Dao genies',
            'alignment' => 'NE',
        ]);
        $god->pantheons()->save(app()->pantheons['Al-Qadim'], [
            'name'      => $god->name,
            'title'     => "Great Khan of the Dao, Ataman of the Mountain's Roots",
            'level'     => 'Archomental',
            'portfolio' => 'Dao genies',
            'alignment' => 'NE',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Husam al-Balil ben Nafhat al-Yugayyim';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'      => $god->name,
            'title'     => 'Great Caliph of the Djinn, Master of the Clouds, Son of the Breezes, Commander of the Four Winds, Ruler of All Djinn, Defender of the Heavens, Price of Birds, Storm of the Righteous',
            'level'     => 'Archomental',
            'portfolio' => 'Djinni genies',
            'alignment' => 'CG',
        ]);
        $god->pantheons()->save(app()->pantheons['Al-Qadim'], [
            'name'      => $god->name,
            'title'     => 'Great Caliph of the Djinn, Master of the Clouds, Son of the Breezes',
            'level'     => 'Archomental',
            'portfolio' => 'Djinni genies',
            'alignment' => 'CG',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Marrake al-Sidan al-Hariq ben Lazan';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'      => $god->name,
            'title'     => 'Great Sultan of All the Efreet, Lord of Flame, The Potentate Incandescent, The Tempering and Eternal Flame of Truth, The Most Puissant of Hunters, Marshall of the Order of the Fiery Heart, The Smoldering Dictator, The Crimson Firebrand',
            'level'     => 'Archomental',
            'portfolio' => 'Efreet genies',
            'alignment' => 'LE',
        ]);
        $god->pantheons()->save(app()->pantheons['Al-Qadim'], [
            'name'      => $god->name,
            'title'     => 'Great Sultan of All the Efreet, Lord of Flame, The Potentate Incandescent, The Tempering and Eternal Flame of Truth, The Most Puissant of Hunters, Marshall of the Order of the Fiery Heart, The Smoldering Dictator, The Crimson Firebrand',
            'level'     => 'Archomental',
            'portfolio' => 'Efreet genies',
            'alignment' => 'LE',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Bwimb';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'        => $god->name,
            'title'       => 'Baron of Ooze',
            'level'       => 'Archomental',
            'portfolio'   => 'Oozes',
            'alignment'   => 'LE',
            'description' => "<p>Bwimb was an ally of Ghaunadaur and fought for the Queen of Chaos during her war with the Wind Dukes of Aaqa.</p>
<p>Bwimb is one of several powerful planar entities slain by Tenebrous, in a mistaken belief that he was in possession of the Wand of Orcus. The undead demon prince gladly slays Bwimb. Bwimb II (Bwimb's daughter), forms from the remains.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Cryonax';
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'        => $god->name,
            'title'       => 'Bringer of Endless Winter, Blizzard King, Bleak Monarch, Prince of Evil Cold Elementals',
            'level'       => 'Archomental',
            'portfolio'   => 'Evil Cold Elementals',
            'alignment'   => 'NE',
            'description' => "<p>Cryonax is the Prince of Evil cold-using creatures, and one of the inhabitants of the Para-Elemental Place of Ice.</p>
<p>He somewhat resembled a yeti with two tentacles in place of each arm. He stands 15 feet tall and weighs 2,800 pounds. He radiates an aura of terrible cold, said to chill both the body and soul of those around him.</p>
<p>Within his plane Cryonax resides in the Chiseled Estate, a massive ornate fortress constructed of ice, rock crystal, and glass that rises 1 mile above the surface. It is claimed to be the coldest region in his entire plane, though in reality its frigid temperatures were surpassed by the Mountain of Ultimate Winter.</p>
<p>Cryonax's primary goal is to raise the influence of his domain so that it could one day become a fifth base elemental plane; thus, he constantly seeks out territory among the elemental planes to conquer, though Cryonax is a careful schemer and he has much grander ambitions, plotting to one day surpass and usurp the other elemental forces of the Inner planes, and beyond that, strives to one day freeze the entire multiverse.</p>
<p>He also seeks to unleash the Archdevil Levistus, but for what reason is unknown.</p>
<p>Unlike the other Evil Archomentals, there is neither a ruler of an opposing elemental force nor Good Archomental counterpart actively competing against his interests. The closest thing to the former is Chilimba, but Cryonax does not consider them a credible threat.</p>
<p>On his own plane Cryonax is opposed by the Great White Wyrm, Albrathanilar, a potent and cunning wizard. The local immoths and some Ice mephits also oppose Cryonax's rule, mainly through living in isolation, though the latter has been known to aid his enemies.</p>
<p>His army consists of ice archons, frost giants, ice crabs, ice mephits, ice para-elementals, ice toads, white dragons, white puddings, winter wolves, and druids who specialize in cold-based magic.</p>
<p>One legend claims that Cryonax was once a demon lord who had tried and failed to conquer the Elemental Chaos.</p>
<p>A djinni in service of a pasha from Calimshan believes that the Ring of Winter has the power to summon Cryonax.</p>
<p>Legend holds that back during the Dawn War, in a battle on a now-forgotten mountain top, Cryonax shattered his teeth upon the armor of the dwarven god Moradin and that jagged primordial shards of this could still be found today.</p>
<p>More recent rumors claim that within the Chiseled Estate lives a coven of enslaved plane-touched wizards and priests, many of them either ice genasi or water genasi, who work tirelessly to develop new forms of ice-based monsters for Cryonax's army. Another rumor attached to his fortress is that it draws power from the Negative Energy plane, though for what reason was never stated.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = "Ty-h'kadi";
        $god->level = 'Archomental';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'        => $god->name,
            'title'       => 'Prince of Thunder and Lightning',
            'level'       => 'Archomental',
            'portfolio'   => 'Evil Storm Elementals',
            'alignment'   => 'N',
            'description' => "<p>Ty-h'kadi is an almost god-like elemental being that commands the forces of thunder and lightning.</p>
<p>During the Dawn War, he fought in the age before the time of mortals, the gods Pelor and Bahamut defeated and bound Ty-h'kadi with chains forged by Moradin, in the earth deep beneath the Redstone Hills.</p>
<p>The primordial's servants and followers found a way to free their master, and for a brief moment, Ty-h'kadi rampaged, destroying the dwarven enclave of the Malachite Fortress and the eladrin city of Tir Kitor. The eladrin High Mages of Tir Kitor sacrificed themselves, using their lives to enact an ancient, eldritch ward taught to their forefathers by Corellon, binding the primordial once again beneath the ruined city.</p>
<p>Mortal cultists plotted to bring about ways to weaken the ward and free the primordial once again, but a group of adventurers managed to more permanently bind the powerful elemental, with the help of several holy relics and the power of the gods themselves.</p>",
        ]);
    }
}
