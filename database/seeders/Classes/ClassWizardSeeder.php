<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassWizardSeeder extends Seeder
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
        $class->name          = 'Wizard';
        $class->type          = 'Base';
        $class->key_attribute = 'INT';
        $class->weapons       = 'Club, Dagger, Heavy Crossbow, Light Crossbow, and Staff';
        $class->has_spells    = 1;
        $class->description   = '
<h3>Spell Casting</h3>
<p>Wizards memorize there spells that they wish to have prepared. This includes Cantrips (i.e. Wizards can change the list of Cantrips that they have Prepared).</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 6,
            'skill_progress' => 2,
        ], ['INT', 'WIS'], [
            'Arcane', 'Wizard School',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Arcana', 'Concentration', 'Language', 'Lore']);

        $feature              = new Feature;
        $feature->key         = 'arcane_recovery';
        $feature->name        = 'Arcane Recovery';
        $feature->description = '<p>You have learned to regain some of your magical energy by studying your spellbook.</p>
<p>Once per day when you finish a Short Rest, you can choose expended spell slots to recover. The spell slots can have a combined level that is equal to or less than half your class level (rounded up), and none of the slots can be 6th level or higher.</p>';
        $helper->saveFeature($feature, ['Arcane']);

        $helper->addFeaturesToClass($class, [
            'wizard_feat'     => [2, 3, 5, 8, 12, 15, 18],
            'arcane_recovery' => [4],
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 2,
            'meta'  => 'Activate Magic Item',
        ]);

        $helper->addFeatsToClass($class, [
            'Abjurer'               => 2,
            'Expert Abjurer'        => 8,
            'Master Abjurer'        => 12,
            'Improved Counterspell' => 3,
            'Greater Counterspell'  => 7,

            'Conjurer'          => 2,
            'Expert Conjurer'   => 8,
            'Master Conjurer'   => 12,
            'Improved Summoner' => 3,
            'Greater Summoner'  => 12,
            'Find Familiar'     => 2,
            'Enhance Familiar'  => 7,

            'Diviner'        => 2,
            'Expert Diviner' => 8,
            'Master Diviner' => 12,

            'Enchanter'        => 2,
            'Expert Enchanter' => 8,
            'Master Enchanter' => 12,
            'Metamagic Master' => 9,

            'Evoker'        => 2,
            'Expert Evoker' => 8,
            'Master Evoker' => 12,
            'Battle Caster' => 9,

            'Illusionist'        => 2,
            'Expert Illusionist' => 8,
            'Master Illusionist' => 12,

            'Necromancer'        => 2,
            'Expert Necromancer' => 8,
            'Master Necromancer' => 12,
            'Improved Undead'    => 3,
            'Undead Ally'        => 7,

            'Transmuter'        => 2,
            'Expert Transmuter' => 8,
            'Master Transmuter' => 12,

            'Wand Caster'        => 2,
            'Expert Wand Caster' => 8,
            'Master Wand Caster' => 12,

            'Ring Caster'        => 2,
            'Expert Ring Caster' => 8,
            'Master Ring Caster' => 12,

            'Shadow Weave Caster'        => 2,
            'Expert Shadow Weave Caster' => 8,
            'Master Shadow Weave Caster' => 12,
        ]);

        $helper->addSpellsToClass($class, [
            0 => ['Acid Splash', 'Arcane Mark', 'Booming Blade', "Bronze Dragon's Wrath", 'Cheat', 'Chromatic Ray', 'Clean Self',
                'Combat Quickness', "Copper Dragon's Trickery", 'Corrosive Grasp', 'Cutting Hand', 'Dancing Lights', 'Daze',
                'Detect Ghost', 'Detect Magic', 'Detect Undead', 'Disrupt Ectoplasm', 'Disrupt Undead', 'Electric Arc',
                'False Arcane Eye', 'Fire Bolt', 'Fist of Ice', 'Flare', 'Frostbite', 'Green-Flame Blade', 'Ghost Sound',
                'Launch Bolt', 'Light', 'Mage Hand', 'Mending', 'Message', 'Minor Illusion', 'Modify Foretelling', 'Necrotic Touch',
                'Neutral Water', 'Prestidigitation', 'Poison Spray', 'Produce Flame', 'Ray of Flame', 'Ray of Frost', 'Resistance',
                'Sand Dagger', 'Shield', 'Shocking Grasp', 'Silent Opening', "Slaver's Gentle Reminder", 'Slide', 'Soft Landing',
                'Sonic Snap', 'Summon Animal, Lesser', 'Telekinetic Projectile', 'True Strike', 'Wind Compass', ],
            1 => ['Air Bubble', 'Alarm', 'Amplify Sound', 'Animate Water', 'Arcane Pocket', 'Arcane Sensitivity', 'Breath of Bewilderment',
                'Burning Hands', 'Charm', 'Cloak Astral Pool', 'Cloud Wings', 'Color', 'Color Spray', 'Command', 'Comprehend Languages',
                'Detect Aberration', 'Detect Charm', 'Disguise Self', 'Drug Resistance', 'Ectoplasmic Armor', 'Enchant Item',
                'Enlarge Skeleton', 'Erase', 'Faerie Fire', 'Feather Fall', 'Fiery Furnace', 'Float', 'Floating Disk', 'Fog Cloud',
                'Force Object', 'Flying Dagger', 'Frost Fingers', 'Gaze Screen', 'Glue', 'Grease', 'Guiding Light', 'Hail of Ectoplasm',
                'Hide from Undead', 'Hypnotism', 'Illusory Script', 'Immunity to Adhesive', 'Instant Diversion', 'Ironguts',
                'Jump', 'Know Wizard School', 'Launch Item', 'Mage Armor', 'Magic Missile', 'Masque Mask', "Nature's Favor",
                'Negative Energy Ray', 'Nether Trail', 'Obscure Object', 'Oilskin', 'Pleasant Visage', 'Portal Stabilization',
                'Protection From Possession', 'Ray of Clumsiness', 'Resist Planar Alignment', 'Rouse', 'Scatterspray', 'Shock Bolt',
                'Silent Image', 'Snare', 'Snatch', 'Sonic Blast', 'Spectral Ears', 'Sticks and Stones', 'Sticky', 'Summon Elemental, Lesser',
                'Swift', 'Tar', 'Thunderwave', 'Undead Servant', 'Unseen Servant', 'Ventriloquism', 'Wall of Smoke',
                'Water to Acid', 'Weather Sense', ],
            2 => ['Acid Arrow', 'Air Sphere', 'Alter Self', 'Allied Footsteps', 'Animate Fire', 'Anticipate Teleportation',
                'Apport Object', 'Aquavision', 'Arcane Lock', "Arcanist's Magic Aura", 'Arms of Plenty', 'Battering Ram',
                "Bear's Endurance", 'Bestow Curse', 'Blindness', 'Blindsight', 'Bloodwater', 'Blur', "Bull's Strength",
                "Cat's Grace", 'Caustic Smoke', 'Celerity', 'Chilling Chamber', 'Cling', 'Choke', 'Comprehend Languages',
                'Continual Flame', 'Control Temperature', 'Create Crawling Claw', 'Darkness', 'Darkvision', 'Deafness',
                'Death Armor', 'Decastave', 'Dimension Hop', 'Discern Bloodline', 'Discolor Astral Pool', "Eagle's Splendor",
                'Ectoplasmic Web', 'Endure Elements', 'Enlarge', 'Empower Familiar', 'False Life', 'Feign Death', 'Fetid Breath',
                'Filter', 'Fireburst', 'Flame Dagger', 'Flaming Sphere', 'Flash', 'Floating Page', 'Floating Step', "Fox's Cunning",
                'Gentle Repose', 'Ghoul Touch', 'Gust of Wind', 'Heart of Air', 'Hearty Heave', 'Humanoid Form', 'Hurl',
                'Hypercognition', 'Illusory Form', 'Immovable Object', 'Invisibility', 'Invisibility, Swift', 'Knock', 'Levitate',
                'Locate Node', 'Locate Object', 'Magic Mouth', 'Magic Weapon', 'Mesmerizing Gaze', 'Mindburn', 'Mirror Image',
                'Misdirection', 'Misty Step', 'Obscuring Mist', "Owl's Wisdom", 'Pest Form', 'Phantasmal Force', 'Pillar of Sand',
                'Power Word Sleep', 'Portrait', 'Pressure Resistance', 'Protection From Arrows', 'Pyrotechnics', 'Ray of Enfeeblement',
                'Ray of Stupidity', 'Resist Acid', 'Resist Elements', 'Resist Cold', 'Resist Electricity', 'Resist Fire',
                'Resist Force', 'Resist Poison', 'Resist Sonic', 'Resist Turning', 'Rope Trick', 'Scale Weakening', 'Scorching Ray',
                'See Invisibility', 'Shadow Shroud', 'Shatter', 'Shrink', 'Shroud of Undeath', 'Silence', 'Skyhook', 'Slumberward',
                'Sonic Burst', 'Sonic Weapon', 'Speaking Stones', 'Spectral Hand', 'Spider Climb', 'Spectral Eyes', 'Suggestion',
                'Telekinetic Maneuver', 'Undead Bane Weapon', 'Unheavened', 'Vertigo', 'Vocalize', 'Vulnerability', 'Warding Wind',
                'Water Walk', 'Web', 'Wraith Strike', ],
            3 => ['Abolish Shadows', 'Absorb Strength', 'Amanuensis', 'Amethyst Field', 'Amorphous Form', 'Animate Dead',
                'Analyze Portal', 'Animate Weapon', 'Argauneau', 'Blink', 'Brittleskin', 'Caustic Mire', 'Chain Missile',
                'Clairvoyance', 'Clearstone', 'Cone of Dimness', 'Contingent Spell Lock', 'Corpse Candle', 'Create Homunculus',
                'Crystalbrittle', 'Dancing Sword', 'Distort Summons', 'Detect Metal and Mineral', 'Discern Shapechanger',
                'Dispel Magic', 'Ectoplasmic Decay', 'Erupting Earth', 'Ethereal Mount', 'Explosive Runes', 'Fireball',
                'Flaming Fist', 'Flame Arrows', 'Fly', 'Force Shapechange', 'Forced Incorporeality', 'Forced Manifestation',
                'Gaseous Form', 'Ghost Touch', 'Ghost Lantern', 'Glowing Orb', 'Glyph of Warding', 'Half', 'Haste', 'Heal Animal Companion',
                'Heart of Water', 'Hide from Dragons', 'Hold Undead', 'Hypnotic Pattern', 'Invoke the Cerulean Sign', 'Keen Edge',
                'Lessen Gravity', 'Lightning Bolt', 'Major Image', 'Mind Poison', 'Mystic Surge', "Night's Mantle", 'Nondetection',
                'Paradox', 'Phantom Steed', 'Pierce Disguise', 'Power Word Deafen', 'Protection From Elements', 'Protection From Negative Energy',
                'Ray of Force', 'Ray of Paralysis', 'Repelling Shield', 'Sending', 'Sepia Snake Sigil', 'Shockwave', 'Sign of Sealing',
                'Siphon', 'Silver Lance', 'Skywrite', "Slaver's Mild Admonishment", 'Sleet Storm', 'Slow', 'Smoke Breathing',
                'Stinking Cloud', 'Storm Shield', 'Summon Demon, Lesser', 'Tidal Wave', 'Tiny Hut', 'Tiny Servant', 'Thunder Step',
                'Tongues', 'Undersea Current', 'Vampiric Touch', 'Vitality Shield', 'Water Breathing', 'Wall of Sand', 'Wall of Wind','Whirling Blade', ],
            4 => ['Aboleth Curse', 'Anti-Summoning Shell', 'Aqueous Column', 'Arcane Eye', 'Astral Hospice', 'Backblast',
                'Banishing Weapon', 'Blight', 'Call Animal', 'Call Dretch Horde', 'Call Lemure Horde', 'Call Modron Workers',
                'Call Yugoloth Mercenaries', 'Calling', 'Control Water', 'Coral Growth', 'Corporeal Instability', 'Deliquescence',
                'Dimension Door', 'Dimensional Anchor', 'Divination', 'Ebon Ray of Doom', 'Echolocation', 'Elemental Ward',
                'Emerald Energy Shield', 'Energy Spheres', 'Energy Vortex', 'Ethereal Prison', 'Exhaustion', 'Fabricate',
                'Faithful Hound', 'Finger of Agony', 'Fire Shield', 'Force Chest', 'Force Orb', 'Freedom of Movement', 'Globe of Invulnerability',
                'Gloom', 'Heart of Earth', 'Ice Storm', 'Image Swap', 'Kiss of the Vampire', 'Lightning Fog', 'Phantasmal Killer',
                'Polymorph', 'Polymorph Self', 'Portal View', 'Private Sanctum', 'Psychic Poison', 'Resilient Sphere', 'Scramble Portal',
                'Secret Chest', 'Secure Shelter', 'Seed of Undeath', 'Shadow Conjuration', 'Shape Stone', 'Sickness', 'Spell Immunity',
                'Spell Matrix', 'Steelsting', 'Stoneskin', 'Stop', 'Summon Demon', 'Suspension', 'True Form', 'Veil', 'Venom Bolt',
                'Vitriolic Sphere', 'Wall of Fire', 'Water to Poison', 'Watery Sphere', 'Waves of Fatigue', 'Wingbind', ],
            5 => ['Animate Objects', 'Anticold Sphere', 'Antielectricity Sphere', 'Antifire Sphere', 'Antilife Shell', 'Arcane Hand',
                'Ball Lightning', 'Banishment', 'Bone Blade', 'Calm Air', 'Cloudkill', 'Cone of Cold', 'Contact Other Plane', 'Create Chosen One',
                'Create Darkenbeast', 'Create Slipgate', 'Creation', 'Circlet of Enervation', 'Dimension Jumper', 'Energy Buffer',
                'Fiend Form', 'Firebrand', 'Fiery Protector', 'Flameproof', 'Forbidden Speech', 'Friend to Foe', 'Geas',
                'Gem Tracer', 'Ghost Trap', 'Ghoul Gauntlet', 'Haunt Shift', 'Heart of Fire', 'Immolation', 'Life Bubble',
                'Lightning Leap', 'Locate Gate', 'Mailed Might of the Magelords', 'Misty Step, Greater', 'Moonbow', 'Necrotic Grasp',
                'Negative Energy Flood', "Night's Caress", 'Passwall', 'Planar Adaption', 'Planar Binding', 'Prismatic Ray',
                'Psychic Turmoil', 'Rays of Bedevilment', 'Resounding Thunder', 'Revelation', 'Rune of Returning', 'Sapphire Screen of Shielding',
                'Scattering Trap', 'Scrying', 'Seeming', 'Shadow Form', 'Steal Summoning', 'Steel Wind Strike', 'Sparkles',
                'Spell Theft', 'Summon Elemental', 'Tactical Teleportation', 'Telekinesis', 'Telepathic Bond', 'Teleportation Circle',
                'Trace Teleport', 'Unseen Thief', "Vampire's Kiss", 'Versatile Vibrations', 'Viscus Glob', 'Wall of Force',
                'Wall of Stone', 'Watchware', ],
            6 => ['Arcane Gate', 'Awaken Undead', 'Baleful Polymorph', 'Baleful Teleport', 'Brilliant Weapon', 'Chain Lightning',
                'Circle of Death', 'Dream Sight', 'Conceal Temporal Anomaly', 'Create Gargoyle', 'Create Undead', 'Crushing Sphere',
                'Disintegrate', 'Dream Casting', 'Dream Puppet', 'Energy Transformation Field', 'Enervating Touch', 'Everlasting Fire',
                'Eyebite', 'Familiar Refuge', 'Flesh to Stone', 'Forbiddance', 'Freezing Sphere', 'Gate Seal', 'Glassee',
                'Guards and Wards', 'Incorporeal Nova', 'Invoke Magic', 'Magic Jar', 'Magnetism', 'Malevolent Tentacles',
                'Move Earth', 'Perfect Invisibility', 'Permanent Image', 'Prismatic Eye', 'Programmed Image', 'Repel Ectoplasm',
                'Repulsion', 'Revive Undead', 'Seal Portal', 'Stone Metamorphosis', 'Scatter', 'Soul Cage', 'Sunbeam', 'Teleport',
                'True Seeing', 'Wall of Ice', 'Wind Walk', ],
            7 => ['Ability Rip', 'Antimagic Ray', 'Arcane Sword', 'Befoul', 'Call Kolyarut', 'Contingency', 'Etherealness',
                'Finger of Death', 'Forcecage', 'Freedom', 'Ghost Form', 'Heart of Stone', 'Hindsight', 'Illusion Purge',
                'Magnificent Mansion', 'Phase Door', 'Plane Shift', 'Possession', 'Power Word Blind', 'Power Word Pain',
                'Prismatic Spray', 'Project Image', 'Radiant Assault', 'Reverse Gravity', 'Sequester', 'Simulacrum', "Slaver's Stern Reproof",
                'Soul Link', 'Spell Turning', 'Stone Body', 'Stone Trap', 'Symbol', ],
            8 => ['Anitmagic Field', 'Antipathy / Sympathy', 'Binding', 'Blacksphere', 'Blackstaff', 'Clone', 'Control Weather',
                'Demand', 'Demiplane', 'Earthquake', 'Evolve', 'Excavate', 'Eye of Power', 'Feeblemind', 'Incendiary Cloud',
                'Iron Body', 'Lightning Ring', 'Maze', 'Orb of the Void', 'Power Word Stun', 'Prismatic Bow', 'Scintillating Pattern',
                'Screen', "Slaver's Wrathful Castigation", 'Soul Theft', 'Spell Engine', 'Sunburst', 'Temporal Stasis', 'Timereaver',
                'Transcribe Symbol', ],
            9 => ['Absorption', 'Abyssal Army', 'Arcane Evasion', 'Astral Projection', 'Binding Chain of Fate', 'Blade of Disaster',
                'Disjunction', 'Disruption', 'Dweomerdoom', 'Effulgent Epuration', 'Foresight', 'Imprisonment', 'Invulnerability',
                'Lifeblend', 'Mass Polymorph', 'Massacre', 'Meteor Swarm', 'Plague of Undead', 'Prismatic Sphere', 'Prismatic Wall',
                'Shapechange', 'Spell Shift', 'Sphere of Ultimate Destruction', 'Teleport Cage', 'Temporal Shell', 'True Polymorph',
                'Weird', ],
            10 => ['Crowning Touch', 'Epic Longevity', 'Gate', 'Genesis', 'Last Resort', 'Sever Lifeline', 'Time Stop', 'Wish'],
        ]);

        /**
         * preparable   => the number of non-cantrip spells that can be memorized
         * cantrips     => the number of cantrips that can be memorized
         * zero         => the number of cantrips that can be cast
         */
        $helper->addSpellSlotsToClass($class, [
            1  => ['preparable' => 0, 'cantrips' => 3, 'zero' => 3],
            2  => ['preparable' => 2, 'cantrips' => 3, 'zero' => 4, 'one' => 2],
            3  => ['preparable' => 4, 'cantrips' => 3, 'zero' => 5, 'one' => 3],
            4  => ['preparable' => 6, 'cantrips' => 4, 'zero' => 5, 'one' => 4, 'two' => 2],
            5  => ['preparable' => 8, 'cantrips' => 4, 'zero' => 6, 'one' => 4, 'two' => 3],
            6  => ['preparable' => 10, 'cantrips' => 4, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 2],
            7  => ['preparable' => 12, 'cantrips' => 4, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3],
            8  => ['preparable' => 14, 'cantrips' => 4, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 1],
            9  => ['preparable' => 15, 'cantrips' => 4, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 2],
            10 => ['preparable' => 16, 'cantrips' => 5, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 1],
            11 => ['preparable' => 17, 'cantrips' => 5, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2],
            12 => ['preparable' => 18, 'cantrips' => 5, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
            13 => ['preparable' => 19, 'cantrips' => 5, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
            14 => ['preparable' => 20, 'cantrips' => 5, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
            15 => ['preparable' => 21, 'cantrips' => 5, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
            16 => ['preparable' => 22, 'cantrips' => 5, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1],
            17 => ['preparable' => 23, 'cantrips' => 5, 'zero' => 9, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1],
            18 => ['preparable' => 24, 'cantrips' => 5, 'zero' => 9, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1, 'nine' => 1],
            19 => ['preparable' => 25, 'cantrips' => 5, 'zero' => 9, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 1, 'eight' => 1, 'nine' => 1],
            20 => ['preparable' => 26, 'cantrips' => 5, 'zero' => 9, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 2, 'eight' => 1, 'nine' => 1],
        ]);
    }
}
