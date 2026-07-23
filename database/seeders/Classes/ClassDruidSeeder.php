<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassDruidSeeder extends Seeder
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
        $class->name          = 'Druid';
        $class->type          = 'Base';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons and Scimitar';
        $class->armors        = 'Light and Medium armor not made of metal. Light and Medium shields not made of metal.';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 4,
        ], ['INT', 'WIS'], [
            'Primal', 'Wild Shape',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Animal Handling', 'Athletics', 'Concentration', 'Medicine', 'Nature', 'Survival',
        ]);

        $helper->addSpellSlotsToClass($class, [
            1  => ['cantrips' => 2, 'zero' => 3],
            2  => ['cantrips' => 2, 'zero' => 3, 'one' => 1],
            3  => ['cantrips' => 2, 'zero' => 4, 'one' => 2],
            4  => ['cantrips' => 3, 'zero' => 4, 'one' => 3, 'two' => 1],
            5  => ['cantrips' => 3, 'zero' => 4, 'one' => 3, 'two' => 2],
            6  => ['cantrips' => 3, 'zero' => 5, 'one' => 3, 'two' => 2, 'three' => 1],
            7  => ['cantrips' => 3, 'zero' => 5, 'one' => 3, 'two' => 2, 'three' => 2],
            8  => ['cantrips' => 3, 'zero' => 5, 'one' => 3, 'two' => 2, 'three' => 2, 'four' => 1],
            9  => ['cantrips' => 3, 'zero' => 5, 'one' => 3, 'two' => 2, 'three' => 2, 'four' => 2],
            10 => ['cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 2, 'three' => 2, 'four' => 2, 'five' => 1],
            11 => ['cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 2, 'three' => 2, 'four' => 2, 'five' => 2],
            12 => ['cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 2, 'three' => 2, 'four' => 3, 'five' => 2, 'six' => 1],
            13 => ['cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 2, 'three' => 2, 'four' => 3, 'five' => 2, 'six' => 1],
            14 => ['cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 3, 'three' => 2, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
            15 => ['cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 3, 'three' => 2, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
            16 => ['cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1],
            17 => ['cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1],
            18 => ['cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 1, 'seven' => 1, 'eight' => 1, 'nine' => 1],
            19 => ['cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 1, 'seven' => 1, 'eight' => 1, 'nine' => 1],
            20 => ['cantrips' => 4, 'zero' => 6, 'one' => 3, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 2, 'eight' => 1, 'nine' => 1],
        ]);

        $feature              = new Feature;
        $feature->key         = 'wild_shape';
        $feature->name        = 'Wild Shape';
        $feature->description = "<p>You gain the ability to change into natural animals.</p>
<ul>
    <li>You gain 1 use of Wild Shape. You regain all your uses of Wild Shape at the end of a Long Rest.</li>
    <li>You may use 1 use of your Wild Shape ability to cast Pest Form even though you do not have it memorized and without using a Spell Slot. When you cast Pest Form in this way, the Duration is changed to 1 hour. You revert to your normal form at the end of this duration unless you spend 2 Spell Points or another use of your Wild Shape ability. You can revert to your normal form earlier by using an Action on your turn. You automatically revert if you fall Unconscious, drop to 0 Hit Points, or die.</li>
    <li>You may not use Wild Shape more than once a turn.</li>
    <li>
        <p>While you are transformed, the following rules apply:</p>
        <ul>
            <li>Your game statistics are replaced by the statistics of the Animal, but you retain your Alignment, personality, INT, WIS, and CHA scores. You also retain all your Skills and Saves, in addition to gaining those of the creature. If the creature has the same proficiency as you and the bonus in its stat block is higher than yours, use the creature's bonus instead of yours.</li>
            <li>When you transform, you assume the Animal's Hit Points and Hit Dice.</li>
            <li>You can't cast Spells, and your ability to speak or take any Action that requires hands is limited to the capabilities of your Animal form. Transforming doesn't break your Concentration on a spell you've already cast, however, or prevent you from taking Actions that are part of a spell, such as Call Lightning, that you've already cast.</li>
            <li>You retain the benefit of any features from your class, race, or other source and can use them if the new form is physically capable of doing so. However, you can't use any of your Special Senses, such as Darkvision, unless your new form also has that sense.</li>
            <li>You choose whether your Equipment falls to the ground in your space, merges into your new form, or is worn by it. Worn equipment functions as normal, but the DM decides whether it is practical for the new form to wear a piece of equipment, based on the creature's shape and size. Your equipment doesn't change size or shape to match the new form, and any equipment that the new form can't wear must either fall to the ground, or merge with it. Equipment that merges with the form has no effect until you leave the form.</li>
        </ul>
    </li>
</ul>";
        $helper->saveFeature($feature, ['Wild Shape']);

        $helper->addFeaturesToClass($class, [
            'favored_terrain'  => [1],
            'wild_empathy'     => [1],
            'wild_shape'       => [2],
            'spell_point'      => [2],
            'class_group_feat' => [3, 5, 9, 15, 18],
            'woodland_stride'  => [4],
        ]);

        $helper->addSpellsToClass($class, [
            0 => ['Control Flames', 'Dancing Lights', 'Detect Magic', 'Druidcraft', 'Frostbite', 'Hydraulic Blast', 'Infestation',
                'Know Direction', 'Light', 'Magic Fang', 'Magic Stone', 'Mold Earth', 'Naturewatch', 'Pest Form', 'Produce Flame',
                'Ray of Frost', 'Resistance', 'Shape Water', 'Summon Animal, Lesser', 'Tanglefoot', 'Thorn Whip', ],
            1 => ['Air Bubble', 'Animal Friendship', 'Animate Water', 'Beast Bond', 'Calm Animals', 'Climb', 'Create or Destroy Water',
                'Chromatic Ray', 'Cloak of Shade', 'Contagion', 'Cure Wounds', 'Detect Animals or Plants', 'Detect Poison',
                'Detect Snares and Pits', 'Earth Tremor', 'Enchant Item', 'Gaze Screen', 'Goodberry', 'Gust of Wind', 'Jump',
                'Hide from Animals', 'Hidden Spring', 'Horrible Taste', 'Ice Armor', "Impede Sun's Brilliance", 'Leaf into Dagger',
                'Locate Animals or Plants', 'Locate Water', 'Longstrider', 'Mending', "Nature's Favor", 'Negate Aroma',
                'Pass Without Trace', 'Purify Food and Drink', 'Remove Disease', 'Remove Scent', 'Shillelagh', 'Silvered Claws',
                'Shocking Grasp', 'Snare', 'Sticks and Stones', 'Summon Animals', 'Summon Elemental, Lesser', 'Weather Sense', ],
            2 => ['Absorb Elements', 'Air Sphere', 'Animal Form', 'Animal Messenger', 'Animal Sense', 'Barkskin', "Bear's Endurance",
                "Bull's Strength", "Cat's Grace", 'Chameleon', 'Cloud Wings', 'Cloudburst', 'Continual Flame', 'Create Food and Water',
                'Darkness', 'Darkvision', 'Delay Poison', "Eagle's Splendor", 'Easy Trail', 'Endure Elements', 'Enlarge',
                'Entangle', 'Erupting Earth', 'Evergreen', 'Faerie Fire', "Fox's Cunning", 'Heat Metal', 'Lay of the Land',
                'Leap Into Animal', 'Obscuring Mist', "Owl's Wisdom", 'Plant Renewal', 'Pyrotechnics', 'Rain', 'Ripen Plant',
                'Repel Plants', 'Resist Elements', 'Resist Poison', 'Restoration', 'Shape Wood', 'Shrink', 'Speak with Animals',
                'Spider Climb', 'Stone Sphere', 'Summon Swarm', 'Tree Shape', 'Tremorsense', 'Water Breathing', 'Water Walk',
                'Warding Wind', 'Web', ],
            3 => ['Animal Shapes', 'Burrow', 'Call Lightning', 'Dispel Magic', 'Dominate Animal', 'Earthbind', 'Flame Arrows',
                'Haste', 'Heal Animal Companion', 'Heatstroke', 'Invoke the Cerulean Sign', 'Meld into Stone', "Nature's Exile",
                "Nature's Rampart", 'Neutralize Poison', 'Nondetection', 'Plant Growth', 'Poison', 'Protection From Elements',
                'Searing Light', 'Shrink Plant', 'Slow', 'Snake Arm', 'Stinking Cloud', 'Vitality Shield', 'Wall of Thorns',
                'Wall of Wind', ],
            4 => ['Air Walk', 'Animal Transfer', 'Antiplant Shell', 'Call Animal', 'Calm Air', 'Ceremony', 'Eradicate Air',
                'Eradicate Earth', 'Eradicate Fire', 'Eradicate Water', 'Fly', 'Giant Vermin', 'Hallucinatory Terrain', 'Ice Storm',
                'Land Womb', 'Locate Creature', 'Polymorph', 'Shape Stone', 'Solid Fog', 'Speak with Plants', 'Stoneskin',
                'Summon Woodland Beings', 'Watery Sphere', ],
            5  => ['Acid Rain', 'Animate Plants', 'Atonement', 'Awaken', 'Cloudkill', 'Control Water', 'Hibernate', 'Ironwood',
                'Maelstrom', 'Passwall', 'Reincarnate', 'Summon Elemental', 'Summon Fey', 'Tree Stride', 'Wall of Ice',
                'Wall of Stone', 'Wrath of Nature', ],
            6  => ['Baleful Polymorph', 'Bones of the Earth', 'Commune with Earth', 'Druid Grove', 'Fire Seeds', 'Flesh to Stone',
                'Oasis', 'Poison Vines', 'Liveoak', 'Stone to Flesh', ],
            7  => ['Harm', 'Heal', 'Regenerate', 'Sunburst', 'Volcanic Eruption', 'Whirlwind'],
            8  => ['Cocoon', 'Control Plants', 'Control Weather', 'Earthquake', 'Polar Ray', 'Punishing Winds', 'Shambler',
                'Wind Walk', ],
            9  => ['Erupt', "Nature's Enmity", 'Shapechange', 'Storm of Vengeance'],
            10 => ['Nature Incarnate', 'Primal Phenomenon', 'Stone Gaze'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Call of the Wild';
        $feat->description = '<p>Your bond with nature allows you to call upon its servants to aid you in times of need. You can cast Summon Animals by spending 1 Spell Point instead of using spell slots. This spell can be heightened to any level that you can cast, but if you heighten the spell, it costs you 1 additional Spell Point. Increase your Spell Point pool by 2.</p>';
        $helper->addTypesToFeat($feat, ['Summoning']);

        $feat              = new Feat;
        $feat->name        = 'Extra Wild Shape';
        $feat->description = '<ul>
    <li>You gain 2 additional uses of Wild Shape.</li>
    <li>You may take this feat multiple times.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);

        $feat              = new Feat;
        $feat->name        = 'Extend Wild Shape';
        $feat->description = '<ul>
    <li>Double the duration of your Wild Shape.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);
        $feat->features()->save(app()->features['wild_shape']);

        $feat              = new Feat;
        $feat->name        = 'Improved Wild Shape';
        $feat->action_type = 'Action';
        $feat->description = '<ul>
    <li>You may now spend 1 use of your Wild Shape to cast Animal Form instead of Pest Form. The Animal Form spell is automatically Heightened to the highest Spell Slot you can cast.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);

        $feat              = new Feat;
        $feat->name        = 'Greater Wild Shape';
        $feat->action_type = 'Action';
        $feat->description = '<ul>
    <li>You may now spend 1 use of your Wild Shape to cast Aerial Form instead. The Aerial Form spell is automatically Heightened to the highest Spell Slot you can cast.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);
        $feat->parent_feats()->save(app()->feats['Improved Wild Shape']);
        $helper->addSpellsToFeat($feat, [
            4 => ['Aerial Form'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Master Wild Shape';
        $feat->action_type = 'Double Action';
        $feat->description = '<ul>
    <li>You may now spend 1 use of your Wild Shape to cast Insect Form instead. The Insect Form spell is automatically Heightened to the highest Spell Slot you can cast.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);
        $feat->parent_feats()->save(app()->feats['Greater Wild Shape']);
        $helper->addSpellsToFeat($feat, [
            5 => ['Insect Form'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Plant Wild Shape';
        $feat->action_type = 'Action';
        $feat->description = '<ul>
    <li>You may now spend 1 use of your Wild Shape to cast Plant Form instead. The Plant Form spell is automatically Heightened to the highest Spell Slot you can cast.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);
        $feat->features()->save(app()->features['wild_shape']);
        $helper->addSpellsToFeat($feat, [
            5 => ['Plant Form'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Thousand Faces';
        $feat->action_type = 'Action';
        $feat->description = '<ul>
    <li>You may now spend 1 use of your Wild Shape to cast Humanoid Form instead. The Humanoid Form spell is automatically Heightened to the highest Spell Slot you can cast.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);
        $feat->parent_feats()->save(app()->feats['Extend Spell Pool']);
        $feat->features()->save(app()->features['wild_shape']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Humanoid Form'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Elemental Wild Shape';
        $feat->action_type = 'Action';
        $feat->description = '<ul>
    <li>You may now spend 1 use of your Wild Shape to cast Elemental Form instead. The Elemental Form spell is automatically Heightened to the highest Spell Slot you can cast.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);
        $feat->parent_feats()->save(app()->feats['Greater Wild Shape']);
        $helper->addSpellsToFeat($feat, [
            5 => ['Elemental Form'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Dragon Wild Shape';
        $feat->action_type = 'Action';
        $feat->description = '<ul>
    <li>You may now spend 1 use of your Wild Shape to cast Dragon Form instead. The Dragon Form spell is automatically Heightened to the highest Spell Slot you can cast.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);
        $feat->parent_feats()->save(app()->feats['Greater Wild Shape']);
        $helper->addSpellsToFeat($feat, [
            6 => ['Dragon Form'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Fast Wild Shape';
        $feat->description = '<p>You may now activate your Wild Shape as an Action</p>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);
        $feat->parent_feats()->save(app()->feats['Improved Wild Shape']);

        $feat              = new Feat;
        $feat->name        = 'Quick Wild Shape';
        $feat->description = '<p>You may now activate your Wild Shape as a Free Action.</p>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);
        $feat->parent_feats()->save(app()->feats['Fast Wild Shape']);
        $feat->parent_feats()->save(app()->feats['Greater Wild Shape']);

        $feat              = new Feat;
        $feat->name        = 'Wild Shape Spell Caster';
        $feat->description = '<p>You now have the ability to cast spells while in Wild Shape form.</p>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);
        $feat->parent_feats()->save(app()->feats['Improved Wild Shape']);

        $feat              = new Feat;
        $feat->name        = 'Ascetic of Silvanus';
        $feat->requirement = 'Silvanus must be your Patron deity';
        $feat->description = "<ul>
    <li>When you attack while in Wild Shape form, you may use your Monk's Unarmed Strike Damage ratings instead of the Wild Shape creatures damage.</li>
    <li>You may use your Flurry of Blows while in Wild Shape form. Use any of the Wild Shaped forms physical attacks for the additional attacks.</li>
    <li>While in Wild Shape form, the modifiers to your Unarmed Strikes also modify your Wild Shaped attacks if applicable.</li>
    <li>While in Wild Shape form, you may choose to use your Monk's Unarmed defense proficiency instead of your Wild Shaped form's.</li>
    <li>You may use any Psionic Powers and Psionic Feats while in Wild Shape form.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Primal', 'Discipline']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Animate Wood'],
            3 => ['Forest Eyes', 'Forest Voice'],
            4 => ['Healing Tree'],
            6 => ['Forest Child', 'Treantstaff'],
            7 => ['Rite of Thorns'],
        ]);
        $helper->addPowersToFeat($feat, [
            1 => ['Awareness', 'Distract', 'Thicken Skin', 'Strength Blast', 'Vitality Blast', 'Wisdom Defense'],
            2 => ['Animal Sight', 'Body Equilibrium', 'Chameleon', 'Cloud Mind', 'Heal', 'Mental Augmentation', 'Physical Augmentation',
                'Simulate Skill', ],
            3 => ['Battlesense', 'Body Purification', 'Body Restoration', 'Combat Sense', 'Danger Sense', 'Haste'],
            4 => ['Fate of One', 'Energy Adaptation', 'Steadfast Perception'],
            5 => ['Adapt Body', 'Quivering Palm', 'Regeneration'],
        ]);
        $feat->features()->save(app()->features['wild_shape']);
        $feat->features()->save(app()->features['flurry_of_blows']);

        $feat              = new Feat;
        $feat->name        = "Mielikki's Needles";
        $feat->requirement = 'You must be Good, and Mielikki must be your Patron deity';
        $feat->description = '<ul>
    <li>You may use your Wild Shape ability to cast the spell Aerial Form but to polymorph into a Swanmay.</li>
    <li>You can use a 4th level Spell Slot to form an Animal Companion bond with a Pegasus (or a 3rd level Ranger Spell Slot).</li>
    <li>You can use a 6th level Spell Slot to form an Animal Companion bond with a Unicorn (or a 4th level Ranger Spell Slot).</li>
    <li>You may cast the spell Fey Form to transform into a Pegasus or Unicorn only.</li>
    <li>Add the spells this feat grants to both your Druid and Ranger spell lists.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Fey Form' => 'Pegasus or Unicorn only'],
            3 => ['Unicorn Stead'],
        ]);
        $feat->features()->save(app()->features['wild_shape']);
        $feat->features()->save(app()->features['favored_enemy']);

        $feat              = new Feat;
        $feat->name        = 'Blood of Malar';
        $feat->requirement = 'Malar must be your Patron deity';
        $feat->description = '<p>You gain the following abilities.</p>
<ul>
    <li>If you have lycanthropy, when you change forms, you may treat it as if you were using your Wild Shape ability (abilities and feats related to Wild Shape apply while in lycanthrope form)</li>
    <li>If you have the Wild Shape Spell Caster feat, you may also cast spells while in lycanthrope shapes</li>
    <li>If you have the Fast Wild Shape feat, you may also change into your various lycanthrope shapes as an Action. You may take the Fast Wild Shape feat 2 levels earlier</li>
    <li>If you have the Quick Wild Shape feat, you may also change into your various lycanthrope shapes as a Free Action. You may take the Quick Wild Shape feat 2 levels earlier</li>
    <li>
        <p>If you have the Animal Companion feat, you may choose any of the following</p>
        <ul>
            <li>Your Animal Companion gains the Fiendish Creature template.</li>
            <li>You may gain a Displacer Beast as your Animal Companion by Sacrificing 2 Spell Points and a 4th level Spell Slot</li>
        </ul>
    </li>
    <li>You may take the following feats by only qualifying for the level requirement
        <ul>
            <li>Wild Shape Spell Caster</li>
            <li>Fast Wild Shape</li>
            <li>Quick Wild Shape</li>
        </ul>
    </li>
    <li>
        <ul>
            <li>When you cast the Fey Form spell, it is automatically Heightened by +1</li>
            <li>You may only transform into Worgs, Yeth Hounds, Chimera, Displacer Beasts, or Manticores only when casting Fey Form (you must Heighten the spell high enough to meet the CR requirement)</li>
        </ul>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Fey Form' => 'Worgs, Yeth Hounds, Chimera, Displacer Beast, or Manticore only', 'Scent', 'Blood Lust',
                'Rage', ],
            4 => ['Unholy Beast'],
            5 => ['Monstrous Regeneration'],
            8 => ['Were-doom'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Peace of Eldath';
        $feat->requirement = 'Eldath must be your Patron deity';
        $feat->description = '<p>You gain the following benefits</p>
<ul>
    <li>You are not allowed to deal lethal damage. If you do, you cannot renew any of your spells until you receive an Atonement spell from a higher level Druid of Eldath.</li>
    <li>You gain the Sacred Vow Feat</li>
    <li>You gain proficiency with 3 weapons that can deal non-lethal damage of your choice</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Animate Wood', 'Plant Renewal', 'Sanctuary'],
            2 => ['Consecrate'],
            3 => ['Laughing Water', 'Sheltered Vitality'],
            4 => ['Cloak of the Sea', 'Flowsight', 'Sustain'],
            5 => ['Healing Circle', 'Pacification', 'Water of Eldath'],
            6 => ['Repel Ectoplasm'],
            7 => ['Spread of Contentment'],
            9 => ['End to Strife'],
        ]);

        $feat              = new Feat;
        $feat->name        = "Chauntea's Smile";
        $feat->requirement = 'Chauntea must be your Patron deity (Druid only)';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain the Spell Pool Class Feature</li>
    <li>You gain the Channel Divinity (Positive) Class Feature. You can use it to command Plants.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal', 'Channel Divinity']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Animate Wood', 'Barkskin' => 'Requires 1 Spell Point to cast as a 1st level spell',
                'Entangle' => 'Requires 1 Spell Point to cast as 1st level spell', ],
            2 => ['Consecrate' => 'Only farmlands', 'Favor of Chauntea', 'Plant Growth'],
        ]);
        $feat->features()->save(app()->features['wild_shape']);

        $feat              = new Feat;
        $feat->name        = "Chauntea's Harvest";
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You may spend one of your uses of Wild Shape to cast Speak with Plants. If you triggered your Wild Shape as an Action or less, then the spell is cast with a 3rd level spell slot, otherwise it is Heightened to the highest Spell Level you can cast.</li>
    <li>You may spend one of your uses of Wild Shape to cast Plant Growth. If you triggered your Wild Shape as an Action or less, then the spell is cast with a 3rd level spell slot, otherwise it is Heightened to the highest Spell Level you can cast.</li>
    <li>When you cast the Awaken Spell, you may maintain up to 2 Plant creatures as servants before losing them to newly Awakened Plants, and you do not require the Secondary Casters to cast Awaken.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            4 => ['Divination'],
        ]);
        $feat->parent_feats()->save(app()->feats["Chauntea's Smile"]);

        $feat              = new Feat;
        $feat->name        = "Chauntea's Plenty";
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You may now spend 1 use of your Wild Shape to cast Plant Form instead. The Plant Form spell is automatically Heightened to the highest Spell Slot you can cast.</li>
    <li>You may spend one of your uses of Wild Shape to cast Animate Plants. If you triggered your Wild Shape as an Action or less, then the spell is cast with a 3rd level spell slot, otherwise it is Heightened to the highest Spell Level you can cast.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $feat->parent_feats()->save(app()->feats["Chauntea's Harvest"]);
        $helper->addSpellsToFeat($feat, [
            5 => ['Healing Circle', 'Plant Form'],
        ]);

        $feat              = new Feat;
        $feat->name        = "Chauntea's Bounty";
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>Creatures with the Plant type will no longer attack you. If you attack a Plant creature, it may protect itself, but it will make attempts to escape from you.</li>
    <li>You cast all Plant spells as if they were cast from a spell slot 1 level higher. A 9th level spell will be treated as if it was cast from a 10th level spell slot, but a 10th level spell will not be cast as if from an 11th level spell slot.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $feat->parent_feats()->save(app()->feats["Chauntea's Plenty"]);

        $feat              = new Feat;
        $feat->name        = 'Ire of Talos';
        $feat->requirement = 'Talos must be your Patron deity';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You may spend one of your uses of Wild Shape to cast Shock Bolt. If you triggered your Wild Shape as an Action or less, then the spell is cast with a 1st level spell slot, otherwise it is Heightened to the highest Spell Level you can cast.</li>
    <li>You may spend one of your uses of Wild Shape to cast Burning Hands. If you triggered your Wild Shape as an Action or less, then the spell is cast with a 1st level spell slot, otherwise it is Heightened to the highest Spell Level you can cast.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Fire Bolt', 'Sonic Snap'],
            2 => ['Flame Blade'],
        ]);
        $feat->features()->save(app()->features['wild_shape']);

        $feat              = new Feat;
        $feat->name        = 'Anger of Talos';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You may spend two of your uses of Wild Shapes to cast Lightning Bolt. If you triggered your Wild Shape as an Action or less, then the spell is cast with a 3rd level spell slot, otherwise it is Heightened to the highest Spell Level you can cast.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            3 => ['Lightning Bolt'],
            4 => ['Lightning Lance'],
        ]);
        $feat->parent_feats()->save(app()->feats['Ire of Talos']);

        $feat              = new Feat;
        $feat->name        = 'Rage of Talos';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You have Resistance to Fire damage</li>
    <li>You have Resistance to Electricity damage</li>
    <li>You may use Wild Shape to change into a Fire Elemental, as if you had the Elemental Wild Shape feat</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            5 => ['Antielectricity Sphere', 'Antifire Sphere', 'Ball Lightning', 'Elemental Form', 'Firebrand'],
            6 => ['Stormrage', 'Investiture of Lightning'],
        ]);
        $feat->parent_feats()->save(app()->feats['Anger of Talos']);

        $feat              = new Feat;
        $feat->name        = 'Fury of Talos';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain the Elemental Focus feat with the chosen type being Fire.</li>
    <li>If you summon a Fire Elemental, if the Elemental is within 90 feet of you, you may cast any Fire spell and have the Fire Elemental be the source of the spell.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            7 => ['Fire Storm'],
            8 => ['Ride the Lightning'],
        ]);
        $feat->parent_feats()->save(app()->feats['Rage of Talos']);

        $touch              = new Feat;
        $touch->name        = "Auril's Touch";
        $touch->requirement = 'Auril must be your Patron deity (Druids and Spirit Shamans only)';
        $touch->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain the benefits of Endure Elements (Severe Cold) Permanently</li>
    <li>You gain the Channel Divinity (Positive) Class Feature. You can use it to command Elementals with the Cold type.</li>
</ul>';
        $helper->addTypesToFeat($touch, ['Cold', 'Primal', 'Channel Divinity']);
        $helper->addSpellsToFeat($touch, [
            0 => ['Fist of Ice'],
            1 => ['Armor of Frost', 'Frost Fingers', 'Ice Knife', 'Ice Slick', 'Snow Boots', 'Snow Sight'],
        ]);

        $kiss              = new Feat;
        $kiss->name        = "Auril's Kiss";
        $kiss->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain the benefits of Endure Elements (Extreme Cold) Permanently</li>
    <li>You may now use your Wild Empathy ability on Winter Wolves.</li>
    <li>You may grant any axe you hold the Frost ability for 1 hour by spending 1 use of your Wild Shape or 1 Spell Point</li>
    <li>If you have the Animal Companion feat, you may gain a Winter Wolves as an Animal Companion. Having a Winter Wolf as an Animal Companion costs a 3rd level Spell Slot and 1 Spell Point instead of the normal costs for an Animal Companion.</li>
</ul>';
        $helper->addTypesToFeat($kiss, ['Cold', 'Primal']);
        $helper->addSpellsToFeat($kiss, [
            2 => ['Chill Metal', 'Control Temperature'],
            3 => ['Control Snow and Ice', 'Corona of Cold', 'Ice Shape'],
        ]);
        $kiss->parent_feats()->save($touch);

        $hold              = new Feat;
        $hold->name        = "Auril's Hold";
        $hold->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain the Cold Resistance Feature</li>
    <li>If you have the Improved Wild Shape Feat, you may also change into a Winter Wolf using your Wild Shape ability.</li>
</ul>';
        $helper->addTypesToFeat($hold, ['Cold', 'Primal']);
        $helper->addSpellsToFeat($hold, [
            4 => ['Ice Blade'],
            5 => ['Anticold Sphere', 'Cold Snap', 'Cone of Cold', 'Dispel Fire', 'Icy Prison'],
        ]);
        $hold->parent_feats()->save($kiss);

        $embrace              = new Feat;
        $embrace->name        = "Auril's Embrace";
        $embrace->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain the Cold Immunity Feature</li>
    <li>You may grant any axe you hold the Freezing Burst ability for 1 hour by spending 1 use of your Wild Shape or 2 Spell Points</li>
    <li>You may use your Wild Shape ability to cast Ice Storm as an Action.</li>
</ul>';
        $helper->addTypesToFeat($embrace, ['Cold', 'Primal']);
        $embrace->parent_feats()->save($hold);
        $helper->addSpellsToFeat($embrace, [
            6 => ['Freezing Sphere'],
            7 => ['Heart of Ice'],
            8 => ['Ice Assassin'],
            9 => ['Burst of Glacial Wrath'],
        ]);

        $feat              = new Feat;
        $feat->name        = "Talona's Taint";
        $feat->requirement = 'Talona must be your Patron deity';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain the formulas for 4 Poison recipes.</li>
    <li>You gain a +2 bonus to Craft checks for making Poisons.</li>
    <li>You have Advantage on all Saves vs Poison or Disease.</li>
    <li>You may use your Wild Shape ability to cast the Contagion spell.</li>
    <li>You may use Assassin Spell Slots to cast Druid spells and Druid Spell Slots to cast Assassin spells</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Poison Spray', 'Poison Touch'],
            2 => ['Delay Disease'],
        ]);
        $feat->features()->save(app()->features['wild_shape']);

        $feat              = new Feat;
        $feat->name        = "Talona's Contagion";
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>All Animal Companions you have deal an additional +3 Poison damage when they hit with a Physical Bite, Claw, or Stinger attack.</li>
    <li>You gain the Disease Immunity feat</li>
    <li>You gain the Poison Resistance feat</li>
    <li>You gain proficiency with the glaive</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $feat->parent_feats()->save(app()->feats["Talona's Taint"]);
        $helper->addSpellsToFeat($feat, [
            4 => ['Sickness'],
        ]);

        $feat              = new Feat;
        $feat->name        = "Talona's Affliction";
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You may use your Wild Shape ability to cast the Poison spell as an Action.</li>
    <li>You may make any dagger or glaive you hold Poisoned by spending 1 use of your Wild Shape. The poison lasts for 10 rounds. Treat the poison as Black Adder Venom.</li>
    <li>You gain the Poison Immunity feat</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            5 => ['Cloudkill', 'Plague of Rats'],
            6 => ['Plague Bearer'],
        ]);
        $feat->parent_feats()->save(app()->feats["Talona's Contagion"]);

        $feat              = new Feat;
        $feat->name        = "Talona's Plague";
        $feat->description = "<p>You gain the following benefits.</p>
<ul>
    <li>
        <p>You may now choose from the following poisons when you use your ability to apply poison</p>
        <ul>
            <li>Giant Wasp Poison</li>
            <li>Hemlock</li>
            <li>Gravedust</li>
            <li>Belladonna Poison</li>
            <li>Assassin's Blood</li>
        </ul>
    </li>
</ul>";
        $helper->addTypesToFeat($feat, ['Primal']);
        $feat->parent_feats()->save(app()->feats["Talona's Affliction"]);
        $helper->addSpellsToFeat($feat, [
            6 => ['Plague Storm'],
            7 => ['Befoul', 'Pestilence'],
            9 => ['Despoil'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Talonatar Blightlord';
        $feat->description = "<p>When you cast the Blight spell, you can choose to spend 1 use of your Wild Shape to have it afflict the target with Talon's Blight disease instead of its normal affect.</p>
<p>You gain the ability to Channel Divinity to Rebuke Blighted creatures.</p>
<dl>
    <dt>Talona's Blight</dt> <dd>
        <ul>
            <li><strong>Stage 1</strong> Carrier with no ill effect (3 days)</li>
            <li><strong>Stage 2</strong> 1D4 CON damage and 1D4 CHA damage (1 day). If the target reaches 0 CON, it dies. If the target reaches 0 CHA, it might become a Blightspawned creature if it qualifies.</li>
        </ul>
        <dl>
            <dt>Critical Success</dt> <dd>Unaffected</dd>
            <dt>Success</dt> <dd>The target is Sick 1</dd>
            <dt>Failure</dt> <dd>The target is afflicted with Talona's Blight at stage 1</dd>
            <dt>Critical Failure</dt> <dd>The target is afflicted with Talona's Blight at stage 2</dd>
        </dl>
    </dd>
</dl>";
        $helper->addTypesToFeat($feat, ['Primal']);

        $feat              = new Feat;
        $feat->name        = "Umberlee's Mist";
        $feat->requirement = 'Umberlee must be your Patron deity';
        $feat->description = '<p>You gain the following benefits:</p>
<ul>
    <li>You may cast Feet to Fins as an Action for 1 use of your Wild Shape without using a Spell Slot</li>
    <li>You may cast Water Breathing as an Action for 1 use of your Wild Shape without using a Spell Slot</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal', 'Water']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Oilskin'],
            1 => ['Land Legs', 'Quick Swim', 'Sea Legs'],
            2 => ['Buoyancy', 'Feet to Fins', 'Lead Anchor', 'Pressure Resistance', 'Water Whip'],
        ]);

        $feat              = new Feat;
        $feat->name        = "Umberlee's Shower";
        $feat->description = '<p>You gain the Channel Divinity Class Feature for the following:</p>
<ul>
    <li>Rebuke Elementals that have the Water type</li>
    <li>Turn Elementals that have the Fire type</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Water', 'Channel Divinity', 'Primal']);
        $feat->parent_feats()->save(app()->feats["Umberlee's Mist"]);
        $helper->addSpellsToFeat($feat, [
            3 => ['Cloak of the Sea', 'Quench', 'Undersea Current'],
            4 => ['Ride the Waves', 'Sargasso', 'Watery Form'],
        ]);

        $feat              = new Feat;
        $feat->name        = "Moander's Mold";
        $feat->requirement = 'Moander must be your Patron deity (Druid only)';
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>You gain the Channel Divinity (Positive) Class Feature. You can use it to Command Molds, Fungus, and Oozes.</li>
    <li>You may spend one of your uses of Wild Shape to cast Stinking Cloud. If you triggered your Wild Shape as an Action or less, then the spell is cast with a 1st level spell slot, otherwise it is Heightened to the highest Spell Level you can cast.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal', 'Channel Divinity']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Touch of Death'],
            2 => ['Black Talon', 'Stinking Cloud'],
        ]);

        $feat              = new Feat;
        $feat->name        = "Moander's Rot";
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>If you have the Animal Companion feat, you may take a Gray Ooze as an Animal Companion by sacrificing a 2nd level Spell Slot and 1 Spell Point.</li>
    <li>You gain the Tremorsense feat</li>
    <li>You may cast the spell Animate Dead with just a Somatic Component (one Action)</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            3 => ['Animate Dead' => 'The animated corpse rots and disintegrates after 1 week', 'Mold Touch'],
            4 => ['Aura of Death', 'Blight'],
        ]);
        $feat->parent_feats()->save(app()->feats["Moander's Mold"]);

        $feat              = new Feat;
        $feat->name        = "Moander's Decay";
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>You may spend one of your uses of Wild Shape to cast Cloud Kill. If you triggered your Wild Shape as an Action or less, then the spell is cast with a 1st level spell slot, otherwise it is Heightened to the highest Spell Level you can cast.</li>
    <li>You may spend one of your uses of Wild Shape to cast Ooze Form. If you triggered your Wild Shape as an Action or less, then the spell is cast with a 1st level spell slot, otherwise it is Heightened to the highest Spell Level you can cast.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            5 => ['Cloudkill', 'Seed of Moander', 'Ooze Form'],
        ]);
        $feat->parent_feats()->save(app()->feats["Moander's Rot"]);

        $feat              = new Feat;
        $feat->name        = "Moander's Corruption";
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>You may spend one of your uses of Wild Shape to transform into a Shambling Mound</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            7 => ['Soul Cage', 'Undeath after Death'],
            9 => ['Despoil'],
        ]);
        $feat->parent_feats()->save(app()->feats["Moander's Decay"]);

        $feat              = new Feat;
        $feat->name        = 'Watcher of Osiris';
        $feat->requirement = 'Osiris must be your Patron deity (Druid only)';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain the Spell Pool Class Feature</li>
    <li>You gain the Channel Divinity (Positive) Class Feature. You can use it to turn Undead.</li>
<ul>';
        $helper->addTypesToFeat($feat, ['Primal', 'Undead']);
        $feat->features()->save(app()->features['wild_shape']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Disrupt Undead'],
            2 => ['Command Undead'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Defender of Osiris';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain the Channel Divinity (Negative) Class Feature. You can use it to Command Undead.</li>
    <li>You are permitted to create unintelligent Undead creatures, it is not considered an evil act. They must eventually be destroyed.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal', 'Undead']);
        $helper->addSpellsToFeat($feat, [
            3 => ['Animate Dead', 'Know Bloodline', 'Speak with Dead'],
        ]);
        $feat->parent_feats()->save(app()->feats['Watcher of Osiris']);

        $feat              = new Feat;
        $feat->name        = 'Champion of Osiris';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain the Favored Enemy Class Feature vs worshipers of Set.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            4 => ['Sand Form'],
            6 => ['Raise Dead'],
        ]);
        $feat->parent_feats()->save(app()->feats['Defender of Osiris']);

        $feat              = new Feat;
        $feat->name        = 'Judge of Osiris';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You may only cast the Create Undead spell to create Mummys. You must heighten the spell to create Mummys.</li>
    <li>You learn the Ritual to becoming a Mummy Lord.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            5  => ['Create Undead'],
            7  => ['Resurrection'],
            10 => ['True Resurrection'],
        ]);
        $feat->parent_feats()->save(app()->feats['Champion of Osiris']);

        $feat              = new Feat;
        $feat->name        = 'Mark of Ubtao';
        $feat->requirement = 'Ubtao must be your Patron deity (Druid only)';
        $feat->description = '<p>You gain the following benefits.</p>
<ul>
    <li>You gain 3 Spell Points</li>
    <li>When you cast Animal Form, it is automatically Heightened by +1</li>
    <li>Because you are from Chult, the land of Dinosaurs, you may use your Wild Shape ability to change into Dinosaurs (you must still qualify for the CR restrictions)</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Breath of the Jungle'],
            5 => ['Susurrus of the City'],
            8 => ['Maze'],
        ]);

        $helper->addFeatsToClass($class, [
            'Call of the Wild'  => 1,
            'Spell Pool'        => 1,
            'Extend Spell Pool' => 5,
            'Reach Spell'       => 1,
            'Widen Spell'       => 1,

            'Animal Companion' => 2,

            'Improved Summoner' => 3,
            'Greater Summoner'  => 9,

            'Extend Wild Shape'       => 3,
            'Improved Wild Shape'     => 4,
            'Thousand Faces'          => 4,
            'Fast Wild Shape'         => 6,
            'Greater Wild Shape'      => 8,
            'Master Wild Shape'       => 10,
            'Wild Shape Spell Caster' => 10,
            'Plant Wild Shape'        => 12,
            'Quick Wild Shape'        => 14,
            'Elemental Wild Shape'    => 16,

            "Chauntea's Smile"     => 1,
            "Chauntea's Harvest"   => 5,
            "Chauntea's Plenty"    => 9,
            "Chauntea's Bounty"    => 11,
            'Ire of Talos'         => 1,
            'Anger of Talos'       => 5,
            'Rage of Talos'        => 9,
            'Fury of Talos'        => 11,
            "Talona's Taint"       => 1,
            "Talona's Contagion"   => 5,
            "Talona's Affliction"  => 9,
            "Talona's Plague"      => 11,
            "Umberlee's Mist"      => 1,
            "Umberlee's Shower"    => 5,
            "Auril's Touch"        => 1,
            "Auril's Kiss"         => 5,
            "Auril's Hold"         => 9,
            "Auril's Embrace"      => 11,
            'Watcher of Osiris'    => 1,
            'Defender of Osiris'   => 5,
            'Champion of Osiris'   => 9,
            'Judge of Osiris'      => 11,
            "Moander's Mold"       => 1,
            "Moander's Rot"        => 5,
            "Moander's Decay"      => 9,
            "Moander's Corruption" => 11,

            'Ascetic of Silvanus'  => 3,
            "Mielikki's Needles"   => 3,
            'Blood of Malar'       => 3,
            'Talonatar Blightlord' => 15,
        ]);
    }
}
