<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $app           = app();
        $app->features = [];
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $feature              = new Feature;
        $feature->key         = 'domain';
        $feature->name        = 'Domains';
        $feature->description = '';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'skill_feat';
        $feature->name        = 'Skill Feat';
        $feature->description = '<p>You gain a Skill Feat. You must be trained or better in the corresponding skill to select a skill feat.</p>';
        $helper->saveFeature($feature, ['Skill']);

        $feature              = new Feature;
        $feature->key         = 'generic_feat';
        $feature->name        = 'Generic Feat';
        $feature->description = '<p>You gain a Generic Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'ability_boosts';
        $feature->name        = 'Ability Boosts';
        $feature->description = '<p>An ability boost normally increases an ability score’s value by 2. However, if the ability score to which you’re applying an ability boost is already 18 or higher, its value increases by only 1. At 1st level, a character can never have any ability score that’s higher than 18.</p>
<p>When your character receives an ability boost, the rules indicate whether it must be applied to a specific ability score or to one of two specific ability scores, or whether it is a "free" ability boost that can be applied to any ability score of your choice. However, when you gain multiple ability boosts at the same time, you must apply each one to a different score. Dwarves, for example, receive an ability boost to their CON score and their WIS score, as well as one free ability boost, which can be applied to any score other than CON or WIS</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'flurry_of_blows';
        $feature->name        = 'Flurry of Blows';
        $feature->description = '<p>You gain the following</p>
<ul>
    <li>You gain the Two-Weapon Fighter Feat</li>
    <li>You may spend a Power Point and gain an Additional Action. This additional Action can only be used to make an Unarmed Strike Melee attack. You cannot spend more than one Power Point in this way per turn.</li>
</ul>';
        $helper->saveFeature($feature, ['Spend Power Point']);

        $feature              = new Feature;
        $feature->key         = 'glorious_resistance';
        $feature->name        = 'Glorious Resistance';
        $feature->description = '<p>You gain a bonus to all Saves equal to your CHA bonus (minimum +1)</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'divine_warrior';
        $feature->name        = 'Divine Warrior';
        $feature->description = '<ul>
    <li>You gain a Divine Warrior feat</li>
    <li>You may cast Smite Cantrips without using a Spell Slot</li>
    <li>You may gain a Divine Mount</li>
</ul>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'divine_feat';
        $feature->name        = 'Divine Feat';
        $feature->description = '<p>You gain a Divine or Generic Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'fighter_feat';
        $feature->name        = 'Fighter Feat';
        $feature->description = '<p>You gain a Fighter or Generic Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'discipline_feat';
        $feature->name        = 'Discipline Feat';
        $feature->description = '<p>You gain a Discipline Feat</p>';
        $helper->saveFeature($feature, ['Discipline']);

        $feature              = new Feature;
        $feature->key         = 'ranger_devotion_feat';
        $feature->name        = 'Ranger Devotion Feat';
        $feature->description = '<p>You gain a Ranger Devotion Feat.</p>';
        $helper->saveFeature($feature, ['Ranger Devotion']);

        $feature              = new Feature;
        $feature->key         = 'arcane_rogue_feat';
        $feature->name        = 'Arcane Rogue Feat';
        $feature->description = '<p>You gain a Arcane, Precision, Rogue, or Skill Feat.</p>';
        $helper->saveFeature($feature, ['Arcane', 'Precision', 'Skill']);

        $feature              = new Feature;
        $feature->key         = 'class_group_feat';
        $feature->name        = 'Class Group Feat';
        $feature->description = '<p>You gain a Class Group feat</p>';
        $helper->saveFeature($feature);

        $feature               = new Feature;
        $feature->key          = 'favored_enemy';
        $feature->name         = 'Favored Enemy';
        $feature->requirements = 'You can see and hear the target.';
        $feature->description  = '<p>You have significant experience studying, tracking, hunting, and even talking to a certain type of enemy.</p>
<p>Choose a type of Favored Enemy from the table. You gain the following benefits against those creatures.</p>
<ul>
    <li>+1 bonus to Hit against members of your Favored Enemy using Melee or Ranged weapons.</li>
    <li>When you hit a member of your Favored Enemy, you deal an additional Weapon Die of Damage</li>
    <li>+3 circumstance bonus to Survival checks to Track your Favored Enemy.</li>
    <li>+3 circumstance bonus to Perception checks when you Seek your Favored Enemy.</li>
    <li>+3 circumstance bonus to Lore checks when recalling information about them.</li>
    <li>You learn one language of your choice that is spoken by your favored enemy, if they speak one at all.</li>
</ul>
<p>Choose a type of favored enemy:</p>
<ul>
    <li>Aberrations</li>
    <li>Beasts</li>
    <li>Celestials</li>
    <li>Constructs</li>
    <li>Dragons</li>
    <li>Elementals</li>
    <li>Fey</li>
    <li>Fiends</li>
    <li>Giants</li>
    <li>Oozes</li>
    <li>Plants</li>
    <li>Undead</li>
    <li>Alternatively, you can select a race of Humanoid (such as Orcs) as your Favored Enemies</li>
</ul>';
        $helper->saveFeature($feature, ['Favored Enemy', 'Precision']);

        $feature              = new Feature;
        $feature->key         = 'favored_terrain';
        $feature->name        = 'Favored Terrain';
        $feature->description = "<p>You are particularly familiar with one type of natural Environment and are adept at traveling and surviving in such regions.</p>
<p>Choose one type of favored terrain:  Arctic, Coast, Desert, Forest, Grasslands, Mountain, Swamp, or the Underdark. When you make an INT or WIS based skill check related to your favored terrain, you gain a +3 bonus to the roll if you have any ranks in that skill.</p>
<p>While traveling for an hour or more in your favored terrain, you gain the following benefits.</p>
<ul>
    <li>Difficult Terrain doesn't slow your group's travel.</li>
    <li>Your group can't become lost except by magical means.</li>
    <li>Even when you are engaged in another activity while traveling (such as foraging, navigating, or tracking), you remain alert to danger.</li>
    <li>If you are traveling alone, you can move stealthily at a normal pace.</li>
    <li>
        You gain a +5 bonus to the following skills when in your Favored Terrain.
        <ul>
            <li>Stealth (Hide and Sneak) checks</li>
            <li>Nature (Recall Knowledge) checks</li>
            <li>Survival checks</li>
        </ul>
    </li>
    <li>When you Forage, you find twice as much food as you normally would.</li>
    <li>While tracking other creatures, you also learn their exact number, their sizes, and how long ago they passed through the area.</li>
</ul>";
        $helper->saveFeature($feature, ['Favored Terrain']);

        $feature              = new Feature;
        $feature->key         = 'rogue_feat';
        $feature->name        = 'Rogue Feat';
        $feature->description = '<p>You gain a Rogue or Generic Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'sorcerer_feat';
        $feature->name        = 'Sorcerer Feat';
        $feature->description = '<p>You gain a Sorcerer, Metamagic, or Generic Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'bloodline_feat';
        $feature->name        = 'Bloodline Feat';
        $feature->description = '<p>You gain a Bloodline Feat.</p>';
        $helper->saveFeature($feature, ['Bloodline']);

        $feature              = new Feature;
        $feature->key         = 'favored_feat';
        $feature->name        = 'Favored Feat';
        $feature->description = '<p>You gain a Favored Feat.</p>';
        $helper->saveFeature($feature, ['Favored']);

        $feature              = new Feature;
        $feature->key         = 'warlock_feat';
        $feature->name        = 'Warlock Feat';
        $feature->description = '<p>You gain a Warlock or Generic Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'invocation';
        $feature->name        = 'Invocation';
        $feature->description = '<p>You gain an Invocation Feat.</p>';
        $helper->saveFeature($feature, ['Invocation']);

        $feature              = new Feature;
        $feature->key         = 'wizard_feat';
        $feature->name        = 'Wizard Feat';
        $feature->description = '<p>You gain a Wizard or Generic Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'wizard_spell_list';
        $feature->name        = 'Wizard Spell List';
        $feature->description = "<p>You may memorize spells from the Wizard's Spell List. You must have a spell book like a Wizard.</p>";
        $helper->saveFeature($feature, ['Arcane']);

        $feature              = new Feature;
        $feature->key         = 'hex_blade_feat';
        $feature->name        = 'Hex Blade Feat';
        $feature->description = '<p>You gain a Hex or Generic Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'psychic_feat';
        $feature->name        = 'Psychic Feat';
        $feature->description = '<p>You gain a Psionic or Generic Feat.</p>';
        $helper->saveFeature($feature, ['Psionic']);

        $feature              = new Feature;
        $feature->key         = 'psychic';
        $feature->name        = 'Psychic';
        $feature->description = '<p>You can use Character Level Feat or any Class Group Feat to take Psychic Feat</p>';
        $helper->saveFeature($feature, ['Psionic']);

        $feature              = new Feature;
        $feature->key         = 'item_creation';
        $feature->name        = 'Item Creation Feat';
        $feature->description = '<p>You gain a Feat with the Item Creation type.</p>';
        $helper->saveFeature($feature, ['Item Creation']);

        $feature              = new Feature;
        $feature->key         = 'spell_point';
        $feature->name        = 'Spell Point';
        $feature->description = '<p>You gain 1 Spell Point</p>';
        $helper->saveFeature($feature, ['Spell Pool']);

        $feature              = new Feature;
        $feature->key         = 'spell_pool';
        $feature->name        = 'Spell Pool';
        $feature->description = '<p>You gain the Spell Pool Feat. If you already have the Spell Pool feat, then you gain the Extend Spell Pool Feat instead.</p>';
        $helper->saveFeature($feature, ['Spell Pool']);

        $feature              = new Feature;
        $feature->key         = 'precision_attack';
        $feature->name        = 'Precision Attack';
        $feature->description = '<p>You gain a Precision feat.</p>';
        $helper->saveFeature($feature, ['Precision']);

        $feature              = new Feature;
        $feature->key         = 'sneak_attack';
        $feature->name        = 'Sneak Attack';
        $feature->description = '<p>You gain a Sneak Attack feat.</p>';
        $helper->saveFeature($feature, ['Sneak Attack', 'Precision']);

        $feature              = new Feature;
        $feature->key         = 'skirmish';
        $feature->name        = 'Skirmish';
        $feature->description = '<p>You gain a Skirmish feat</p>';
        $helper->saveFeature($feature, ['Skirmish', 'Precision']);

        $feature              = new Feature;
        $feature->key         = 'sudden_strike';
        $feature->name        = 'Sudden Strike';
        $feature->description = '<p>You gain the feat Sudden Strike</p>';
        $helper->saveFeature($feature, ['Sudden Strike', 'Precision']);

        $feature              = new Feature;
        $feature->key         = 'surprise_attack';
        $feature->name        = 'Surprise Attack';
        $feature->description = "<p>On the first round of combat, creatures that haven't acted are flat-footed to you.</p>";
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'extra_spells';
        $feature->name        = 'Extra Spells';
        $feature->description = '<p>You gain an additional spell slot per level. At each level, you gain this additional spell slot 2 class levels after gaining your first spell of that level.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'wild_empathy';
        $feature->name        = 'Wild Empathy';
        $feature->description = '<p>You have a connection to the creatures of the natural world that allows you to communicate with them on a rudimentary level. You can use Diplomacy to Make an Impression on animals and to make very simple Requests of them.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'channel_divinity';
        $feature->name        = 'Channel Divinity';
        $feature->description = '<p>You gain Divine energy from your deity which you can use for various effects.</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>You may spend 1 Spell Point and use your Channel Divinity to turn/rebuke certain creatures as a Double Action. The type of creatures depends on your deity.</li>
    <li>You may spend 1 Spell Point to cast the Cure Wounds spell as a 1st level spell as an Action. You may Heighten the spell by spending +2 Spell Points for +1 Heighten.</li>
</ul>';
        $helper->saveFeature($feature, ['Positive', 'Negative', 'Spend Spell Point']);

        $feature              = new Feature;
        $feature->key         = 'place_magic';
        $feature->name        = 'Place Magic';
        $feature->description = '<p>You possess a special bond to the land that lets you draw upon the power of the spirits to cast spells without preparing them. When you use Place Magic, you can cast any Arcane or Divine spell known to you.</p>
<p>A place magic spell uses an unassigned spell slot of the appropriate type (Arcane or Divine) and level. If you do not have an open Spell Slot, you may spontaneously lose a prepared spell of the appropriate type and level to cast your Place Magic spell. You must add an additional Somatic Casting to cast a spell in this way.</p>
<p>You lose this ability if you travel outside of the lands that you are bonded to.</p>';
        $helper->saveFeature($feature, ['Spirit']);

        $feature              = new Feature;
        $feature->key         = 'arcane_spellcasting_class';
        $feature->name        = '+1 level of existing Arcane Spell Casting Class';
        $feature->description = '<p>Pick one of your Arcane spell casting class. Treat your Class Level as if it was 1 level higher for the purposes of determining what the highest level of spell that can be cast.</p>';
        $helper->saveFeature($feature, ['Arcane']);

        $feature              = new Feature;
        $feature->key         = 'divine_spellcasting_class';
        $feature->name        = '+1 level of existing Divine Spell Casting Class';
        $feature->description = '<p>Pick one of your Divine spell casting class. Treat your Class Level as if it was 1 level higher for the purposes of determining what the highest level of spell that can be cast.</p>';
        $helper->saveFeature($feature, ['Divine']);

        $feature              = new Feature;
        $feature->key         = 'primal_spellcasting_class';
        $feature->name        = '+1 level of existing Primal Spell Casting Class';
        $feature->description = '<p>Pick one of your Primal spell casting class. Treat your Class Level as if it was 1 level higher for the purposes of determining what the highest level of spell that can be cast.</p>';
        $helper->saveFeature($feature, ['Primal']);

        $feature              = new Feature;
        $feature->key         = 'spellcasting_class';
        $feature->name        = '+1 level of existing Spell Casting Class';
        $feature->description = '<p>Pick one of your spell casting class. Treat your Class Level as if it was 1 level higher for the purposes of determining what the highest level of spell that can be cast.</p>';
        $helper->saveFeature($feature, ['Arcane', 'Divine', 'Primal']);

        $feature              = new Feature;
        $feature->key         = 'spellcasting_class_double';
        $feature->name        = '+1 level of two existing Spell Casting Classes';
        $feature->description = '<p>Pick two of your spell casting classes. Treat your Class Levels as if it was 1 level higher for the purposes of determining what the highest level of spell that can be cast.</p>';
        $helper->saveFeature($feature, ['Arcane', 'Divine', 'Primal']);

        $feature              = new Feature;
        $feature->key         = 'psionic_power_class';
        $feature->name        = '+1 level of existing Psionic Class';
        $feature->description = '<p>Pick a Psionic manifesting class. Treat your Class Level as if it was 1 level higher for the purposes of determining what the highest level power that can be manifested.</p>';
        $helper->saveFeature($feature, ['Psionic']);

        $feature              = new Feature;
        $feature->key         = 'silvered_weapon';
        $feature->name        = 'Silvered Weapon';
        $feature->description = '<p>Weapons you wield are considered Silvered</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'imbue_item';
        $feature->name        = 'Imbue Item';
        $feature->description = '<p>You may use your Arcana skill to substitute a spell you cannot cast for the purposes of creating a magical item.</p>';
        $helper->saveFeature($feature, ['Arcane', 'Item Creation']);

        $feature              = new Feature;
        $feature->key         = 'trackless_step';
        $feature->name        = 'Trackless Step';
        $feature->description = '<p>When you move through natural terrains, you are difficult to track. You always gain benefits of the Cover Tracks action in such terrains, without moving at half your Speed.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'woodland_stride';
        $feature->name        = 'Woodland Stride';
        $feature->description = '<p>You ignore any difficult terrain caused by plants, such as bushes, vines, and undergrowth. Plants that have been manipulated by magic still impede your progress, although you receive a +2 conditional bonus to any saves or skill checks allowed against such effects.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'talent';
        $feature->name        = 'Talent';
        $feature->description = '<p>You gain the specified Talent</p>';
        $helper->saveFeature($feature, ['Talent']);

        $feature              = new Feature;
        $feature->key         = 'feat';
        $feature->name        = 'Feat';
        $feature->description = '<p>You gain the specified Feat</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'wild_talent';
        $feature->name        = 'Wild Talent';
        $feature->description = '<p>You gain the Wild Talent feat. If you already have the Wild Talent feat, they gain either the Expanded Knowledge or Psionic Talent feat.</p>';
        $helper->saveFeature($feature, ['Psionic']);

        $feature              = new Feature;
        $feature->key         = 'damage_reduction';
        $feature->name        = 'Damage Reduction';
        $feature->description = '<p>You gain the specified amount of Damage Reduction as Natural Armor';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'channel_divinity_caster';
        $feature->name        = 'Channel Divinity Caster';
        $feature->description = '<p>Once per turn, you can cast the specified spell by spending 1 Spell Point and a use of your Channel Divinity</p>';
        $helper->saveFeature($feature, ['Spell Pool', 'Spend Spell Point']);

        $feature              = new Feature;
        $feature->key         = 'spell_resistance';
        $feature->name        = 'Spell Resistance';
        $feature->description = '<p>You gain a +2 bonus to all Saves vs spells.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'darkvision';
        $feature->name        = 'Darkvision';
        $feature->description = "<p>You can see in dim light within the listed range as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</p>";
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'keen_sense';
        $feature->name        = 'Keen Sense';
        $feature->description = '<p>You have Advantage on WIS (Perception) checks that rely on a certain type.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'scent';
        $feature->name        = 'Scent';
        $feature->description = "<p>You have a special sense of smell. This ability allows you to detect approaching enemies, sniff out hidden foes, and track by sense of smell. You can identify familiar odors just as humans do familiar sights.</p>
<p>You can detect opponents within 30 feet by sense of smell. If the opponent is upwind, the range increases to 60 feet; if downwind, it drops to 15 feet. Strong scents, such as smoke or rotting garbage, can be detected at twice the ranges noted above. Overpowering scents, such as skunk musk or troglodyte stench, can be detected at triple normal range.</p>
<p>When you detect a scent, the exact location is not revealed - only its presence somewhere within range. You can take an Action to note the direction of the scent. If it moves within 5 feet of the source, you can pinpoint that source.</p>
<p>You can follow tracks by smell, by making a WIS check to find or follow a track. The typical DC for a fresh trail is 10 (no matter what kind of surface holds the scent). This DC increases or decreases depending on the strength of the quarry's odor, the number of creatures, and the age of the trail. For each hour that the trail is cold, the DC increases by 2. The ability otherwise follows the rules of surface conditions and poor visibility.</p>";
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'regeneration';
        $feature->name        = 'Regeneration';
        $feature->description = "<p>You regain Hit Points at the start of each of your turns. Certain damage types can stop your regeneration.</p>
<p>You die if you start your turn with 0 Hit Points and don't regenerate.</p>";
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'multi_attack';
        $feature->name        = 'Multi Attack';
        $feature->description = '<p>You can make more than one attack with an Action.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'resistance';
        $feature->name        = 'Resistance';
        $feature->description = '<p>You take half damage from the specified Damage Type.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'immunity';
        $feature->name        = 'Immunity';
        $feature->description = '<p>You are immune to the specified Condition or Damage Type.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'sunlight_sensitivity';
        $feature->name        = 'Sunlight Sensitivity';
        $feature->description = '<p>While in sunlight, you have Disadvantage on Attack Rolls, as well as on WIS (Perception) checks that rely on sight.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'innate_spellcasting';
        $feature->name        = 'Innate Spellcasting';
        $feature->description = '<p>You have the innate ability to cast spells. Unless otherwise stated, casting a spell takes 2 Actions.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'legendary_resistance';
        $feature->name        = 'Legendary Resistance';
        $feature->description = '<p>You may choose to reroll a Failed Save.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'magic_resistance';
        $feature->name        = 'Magic Resistance';
        $feature->description = '<p>You have Advantage on Saves vs Spells and other magical effects.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'false_appearance';
        $feature->name        = 'False Appearance';
        $feature->description = '<p>You have the ability to appear as something else, allowing you to blend into the environment.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'death_effect';
        $feature->name        = 'Death Effect';
        $feature->description = '<p>When you die, there is an effect that occurs.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'aura';
        $feature->name        = 'Aura';
        $feature->description = '<p>You have an aura that causes an effect on all creatures within the aura.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'displacement';
        $feature->name        = 'Displacement';
        $feature->description = '<p>Your position appears to be shifted from where you actually are.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'vulnerability';
        $feature->name        = 'Vulnerability';
        $feature->description = '<p>You take double damage from the specified damage type.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'incorporeal';
        $feature->name        = 'Incorporeal';
        $feature->description = '<p>You can move through other creatures and objects as if they were difficult terrain. You take 5 (1D10) Force damage if you end your turn inside an object.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'slowed';
        $feature->name        = 'Slowed';
        $feature->description = '<p>You have the Slowed condition which causes you to have one less Action each turn.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'axiomatic_mind';
        $feature->name        = 'Axiomatic Mind';
        $feature->description = '<p>You cannot be compelled to act in a manner contrary to your nature or instructions.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'siege';
        $feature->name        = 'Siege';
        $feature->description = '<p>You deal extra damage to objects and structures.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'amphibious';
        $feature->name        = 'Amphibious';
        $feature->description = '<p>You can breathe air and water.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'frightful_presence';
        $feature->name        = 'Frightful Presence';
        $feature->description = '<p>You very presence causes Fear. Each creature of your choice within range and aware of you must succeed on a WIS Save or become Frightened. A creature can repeat this Save at the end of each of its turns, ending the effect on itself on a success. If a creature\'s Save is successful or the effect ends, the creature is immune to your Frightful Presence for the next 24 hours.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'hold_breath';
        $feature->name        = 'Hold Breath';
        $feature->description = '<p>You can hold your breath for the specified amount of time.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'spider_climb';
        $feature->name        = 'Spider Climb';
        $feature->description = '<p>You can climb difficult surfaces, including upside down on ceilings, without needing to make an Ability Check.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'web_sense';
        $feature->name        = 'Web Sense';
        $feature->description = '<p>While in contact with a web, you know the exact location of any other creature in contact with the same web.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'web_walker';
        $feature->name        = 'Web Walker';
        $feature->description = '<p>You ignore the movement restrictions caused by webbing</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'amorphous';
        $feature->name        = 'Amorphous';
        $feature->description = '<p>You can move through a space as narrow as 1 inch wide without squeezing</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'unbreathing';
        $feature->name        = 'Unbreathing';
        $feature->description = '<p>You do not need to breathe</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'freedom_movement';
        $feature->name        = 'Freedom of Movement';
        $feature->description = "<p>You ignore difficult terrain, and magical effects can't reduce your speed or cause you to be restrained. You can spend 5 feet of movement to escape from nonmagical restraints or being Grappled.</p>";
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'environment_advantage';
        $feature->name        = 'Environment Advantage';
        $feature->description = '<p>While in the specified environment, you have Advantage on Attack rolls.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'ice_walk';
        $feature->name        = 'Ice Walk';
        $feature->description = "<p>You can move across and climb icy surfaces without needing to make an ability check. Additionally, difficult terrain composed of ice or snow doesn't cost you extra movement.</p>";
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'earth_glide';
        $feature->name        = 'Earth Glide';
        $feature->description = "<p>You can Burrow through nonmagical, unworked earth and stone. While doing so, you don't disturb the material you move through.</p>";
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'camouflage';
        $feature->name        = 'Camouflage';
        $feature->description = '<p>You have Advantage on DEX (Stealth) checks made to hide in certain terrains.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'power_points';
        $feature->name        = 'Power Points';
        $feature->description = '<p>You gain a number of Power Points</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'fey_ancestry';
        $feature->name        = 'Fey Ancestry';
        $feature->description = "<p>You gain a bonus to Saves against being Charmed (the amount depends on your ancestry), and magic can't put you to sleep.</p>";
        $helper->saveFeature($feature, ['Fey']);

        $feature              = new Feature;
        $feature->key         = 'trance';
        $feature->name        = 'Trance';
        $feature->description = "<p>You don't need to sleep. Instead, they meditate deeply, remaining semiconscious, for 4 hours a day. (The Common word for such meditation is “trance.”) While meditating, you can dream after a fashion; such dreams are actually mental exercises that have become reflexive through years of practice. After resting in this way, you gain the same benefit that a human does from 8 hours of sleep.</p>";
        $helper->saveFeature($feature, ['Fey']);

        $feature              = new Feature;
        $feature->key         = 'acid_resistance';
        $feature->name        = 'Acid Resistance';
        $feature->description = '<p>You gain the Acid Resistance Feat.</p>';
        $helper->saveFeature($feature, ['Acid']);

        $feature              = new Feature;
        $feature->key         = 'acid_immunity';
        $feature->name        = 'Acid Immunity';
        $feature->description = '<p>You gain the Acid Immunity Feat.</p>';
        $helper->saveFeature($feature, ['Acid']);

        $feature              = new Feature;
        $feature->key         = 'cold_resistance';
        $feature->name        = 'Cold Resistance';
        $feature->description = '<p>You gain the Cold Resistance Feat.</p>';
        $helper->saveFeature($feature, ['Cold']);

        $feature              = new Feature;
        $feature->key         = 'cold_immunity';
        $feature->name        = 'Cold Immunity';
        $feature->description = '<p>You gain the Cold Immunity Feat.</p>';
        $helper->saveFeature($feature, ['Cold']);

        $feature              = new Feature;
        $feature->key         = 'fire_resistance';
        $feature->name        = 'Fire Resistance';
        $feature->description = '<p>You gain the Fire Resistance Feat.</p>';
        $helper->saveFeature($feature, ['Fire']);

        $feature              = new Feature;
        $feature->key         = 'fire_immunity';
        $feature->name        = 'Fire Immunity';
        $feature->description = '<p>You gain the Fire Immunity Feat.</p>';
        $helper->saveFeature($feature, ['Fire']);

        $feature              = new Feature;
        $feature->key         = 'electricity_resistance';
        $feature->name        = 'Electricity Resistance';
        $feature->description = '<p>You gain the Electricity Resistance Feat.</p>';
        $helper->saveFeature($feature, ['Electricity']);

        $feature              = new Feature;
        $feature->key         = 'electricity_immunity';
        $feature->name        = 'Electricity Immunity';
        $feature->description = '<p>You gain the Electricity Immunity Feat.</p>';
        $helper->saveFeature($feature, ['Electricity']);

        $feature              = new Feature;
        $feature->key         = 'blindsight';
        $feature->name        = 'Blindsight';
        $feature->description = "<p>You can see within a specific range without relying on physical sight. Within that range, you can see anything that isn't behind Total Cover even if you have the Blinded condition or are in Darkness. You can also see things that are invisible within that range.</p>";
        $helper->saveFeature($feature, ['Electricity']);

        $feature              = new Feature;
        $feature->key         = 'ethereal_jaunt';
        $feature->name        = 'Ethereal Jaunt';
        $feature->description = '<p>You have the ability to, as an Action, either enter the Border Ethereal from the Prime Material Plane, or manifest in the Material Plane from the Border Ethereal Plane.</p>';
        $helper->saveFeature($feature, ['Ethereal']);

        $feature              = new Feature;
        $feature->key         = 'aberrant_mind';
        $feature->name        = 'Aberrant Mind';
        $feature->description = '<p>Due to your aberration origin, your mind is too alien to understand or control. You are immune to any spell or psionic effect that tries to either read your thoughts or control your actions unless the attacker is also an aberration.</p>';
        $helper->saveFeature($feature, ['Aberration']);

        $feature              = new Feature;
        $feature->key         = 'true_sight';
        $feature->name        = 'True Sight';
        $feature->description = '<p>Your vision is enhanced within the specified range. Within the range, your vision pierces through the following</p>
<dl>
    <dt>Darkness</dt> <dd>You can see in normal and magical Darkness</dd>
    <dt>Invisibility</dt> <dd>You can see creatures and objects that have the Invisible Condition</dd>
    <dt>Visual Illusions</dt> <dd>You can see through all Glamors</dd>
    <dt>Transformations</dt> <dd>You discern the true form of any creature or object you can see that has been transformed by magic</dd>
    <dt>Ethereal Plane</dt> <dd>You see into the Ethereal Plane</dd>
</dl>';
        $helper->saveFeature($feature);

        // Racial traits — linked to races/sub-races in AfterSeeder (races are
        // seeded before features). Shared mechanics are one generic feature
        // whose per-race numbers live in the featureables `meta` (as JSON);
        // race-unique traits keep their race's exact text.
        foreach ([
            'ability_score_increase' => ['Ability Score Increase', '<p>Your ability scores change by the amounts listed for your race. Where a choice is listed, you choose which ability scores receive the increase.</p>'],
            'racial_feat'            => ['Racial Feat', '<p>You gain the feat(s) listed for your race. Where a choice is listed, you choose a feat of that type.</p>'],
            'weapon_training'        => ['Weapon Training', '<p>You have proficiency with the weapons listed for your race.</p>'],
            'poison_resilience'      => ['Poison Resilience', '<p>You gain a +4 bonus on Saves vs Poison. You have Damage Reduction 2 vs Poison.</p>'],
            'creature_type'          => ['Creature Type', "<p>Your creature type is the type listed for your race, instead of Humanoid. Spells and effects that only target Humanoids don't affect you.</p>"],
            'initial_hit_die'        => ['Initial Hit Die', '<p>You start with Hit Points equal to the Hit Die listed for your race.</p>'],
            'languages'              => ['Languages', '<p>You can speak, read, and write the languages listed for your race.</p>'],
            'telepathy'              => ['Telepathy', '<p>You can communicate telepathically with any creature within the listed range.</p>'],
            'skill_training'         => ['Skill Training', '<p>The skills listed for your race count as class skills for you, so their points count at full value. Where a choice is listed, you choose the skill(s). Some races also grant bonus skill points at 1st level.</p>'],
            'natural_armor'          => ['Natural Armor', '<p>You have tough, scaly skin that protects you as listed for your race: either a base AC you can use in place of worn armor, or Damage Reduction.</p>'],
            'psionics'               => ['Psionics', '<p>You gain a psionic power of the level and class listed for your race.</p>'],
            'level_adjustment'       => ['Level Adjustment', '<p>Your Level Adjustment is the amount listed for your race.</p>'],
            'stonecunning'           => ['Stonecunning', '<p>Whenever you make a Lore (Recall Knowledge: History) check related to the origin of stonework, you have Advantage on the check.</p>'],
            'powerful_build'         => ['Powerful Build', '<p>You count as one size larger when determining your carrying capacity and the weight you can push, drag, or lift.</p>'],
            'sneaky'                 => ['Sneaky', '<p>You gain a +2 bonus to all Stealth checks.</p>'],
            'aggressive'             => ['Aggressive', '<p>You gain an additional Action. This additional Action can only be taken to move towards an enemy of your choice that you can see or hear. You cannot use this Action if the move does not bring you within melee range of the target.</p>'],
            'arctic_heart'           => ['Arctic Heart', '<p>You have Resistance to Cold damage.</p>'],
            'bathed_in_moonlight'    => ['Bathed in Moonlight', '<p>You gain a +2 bonus to Stealth checks.</p>'],
            'bird_whisperer'         => ['Bird Whisperer', '<p>Once per day, you can cast Speak with Animals to speak with birds only.</p>'],
            'bite_attack'            => ['Bite Attack', '<p>Your fanged maw is a natural weapon, which you can use to make unarmed strikes. You gain an extra Action, which can only be used to make Bite attacks. You suffer a -2 to Hit with Bite attacks, and if you make a Bite attack, your DEX bonus to AC is reduced by -1 (minimum 0) until the beginning of your next turn. If you hit with it, you deal piercing damage equal to 1D6 + your STR modifier.</p>'],
            'brave'                  => ['Brave', '<p>You gain a +2 bonus on Saves against being Frightened.</p>'],
            'high_elf_cantrip'       => ['Cantrip', '<p>You know one cantrip of your choice from the wizard spell list. Intelligence is your spellcasting ability for it.</p>'],
            'charge'                 => ['Charge', '<p>If you move at least 30 feet straight toward a target and then hit it with a melee weapon attack on the same turn, you gain an additional Action. This additional Action can only be used to make a Hoof attack against the same target you just hit.</p>'],
            'daring_athlete'         => ['Daring Athlete', '<p>You are at home with heights and have Advantage on DEX and STR checks while on steep slopes, sheer edges, or narrow paths or other mountainous or treacherous terrain.</p>'],
            'divine_resistance'      => ['Divine Resistance', '<p>You gain a +1 bonus to all Saves.</p>'],
            'dwarven_speed'          => ['Speed', '<p>Your speed is not reduced by wearing Heavy Armor.</p>'],
            'equine_build'           => ['Equine Build', '<p>Any climb that requires hands and feet is especially difficult for you because of your equine legs. When you make such a climb, each foot of movement costs you 4 extra feet, instead of the normal extra foot.</p>'],
            'expert_climber'         => ['Expert Climber', '<p>You have a Climb Speed of 30 feet and have Advantage on all STR checks while climbing.</p>'],
            'expert_swimmer'         => ['Expert Swimmer', '<p>You have a base Swim Speed of 30 feet and have Advantage on all STR checks made while swimming.</p>'],
            'extraplanar'            => ['Extraplanar', '<p>Star elves are not outsiders, but they are not native to Faerun. Spells and effects that target extraplanar creatures affect star elves. Banishment, dismissal, and similar effects that banish outsiders return a star elf to Sildeyuir.</p>'],
            'fey_heritage'           => ['Fey Heritage', "<p>You have enough of your mother's fey heritage to make you immune to spell effects that only affect humanoids.</p>"],
            'fish_whisperer'         => ['Fish Whisperer', '<p>Once per day, you can cast Speak with Animals to speak with fish.</p>'],
            'fleet_of_foot'          => ['Fleet of Foot', '<p>Your base walking speed increases to 35 feet.</p>'],
            'fury_of_the_small'      => ['Fury of the Small', "<p>When you damage a creature with an attack or a spell and the creature's size is larger than yours, you can cause the attack or spell to deal extra damage to the creature. The extra damage equals your level. Once you use this trait, you can't use it again until you finish a long rest.</p>"],
            'hellish_resistance'     => ['Hellish Resistance', '<p>You have Resistance to Fire damage.</p>'],
            'hooves'                 => ['Hooves', '<p>Your hooves are natural melee weapons, which you can use to make Unarmed Strikes. If you hit with them, you deal 1D4 + STR modifier Bludgeoning damage.</p>'],
            'hurler'                 => ['Hurler', '<p>You have proficiency with improvised weapons. When you throw an improvised weapon, you can use your Strength or Dexterity modifier for the attack and damage rolls and can roll one of the weapon’s damage dice one additional time and add it to the damage dealt.</p>'],
            'keen_senses'            => ['Keen Senses', '<p>You gain a +2 Racial bonus to Perception checks.</p>'],
            'leap'                   => ['Leap', '<p>Whenever you make a long or high jump, you can roll a D8 and add the number to the number of feet you cover, even when making a standing jump. This extra distance costs movement as normal.</p>'],
            'long_limbed'            => ['Long-Limbed', '<p>When you make a melee attack on your turn, your reach for it is 5 feet greater than normal.</p>'],
            'drow_magic'             => ['Magic', '<p>You know the Dancing Lights cantrip. Use INT as your spellcasting ability.</p>'],
            'satyr_magic_resistance' => ['Magic Resistance', '<p>You gain a +1 bonus to all Saves vs spells and magical effects.</p>'],
            'martial_training'       => ['Martial Training', '<p>You are proficient with two martial weapons of your choice and with light armor, and you gain the Attack of Opportunity feat.</p>'],
            'mask_of_the_wild'       => ['Mask of the Wild', '<p>You can attempt to hide even when you are only lightly obscured by foliage, heavy rain, falling snow, mist, and other natural phenomena.</p>'],
            'menacing'               => ['Menacing', '<p>You gain a +2 bonus to all Intimidation checks.</p>'],
            'message_spell'          => ['Message Spell', '<p>You may cast the Message spell at will.</p>'],
            'naturally_stealthy'     => ['Naturally Stealthy', '<p>You can attempt to hide even when you are obscured only by a creature that is at least one size larger than you.</p>'],
            'nimbleness'             => ['Nimbleness', '<p>You can move through the space of any creature that is of a size larger than yours.</p>'],
            'otherworldly_touch'     => ['Otherworldly Touch', '<p>Between sunset and sunrise a star elf confers the Ghost Touch ability to any melee weapon they wield and any armor they wear.</p>'],
            'poison_immunity'        => ['Poison Immunity', '<p>You are immune to Poison damage and the Sickened condition.</p>'],
            'primal_intuition'       => ['Primal Intuition', '<p>Two of the following skills of your choice count as class skills for you.</p><ul><li>Animal Handling</li><li>Insight</li><li>Intimidation</li><li>Medicine</li><li>Nature</li><li>Survival</li></ul>'],
            'ram'                    => ['Ram', '<p>You can use your head and horns to make Unarmed Strikes. If you hit with them, you deal Bludgeoning damage equal to 1D4 + STR modifier.</p>'],
            'swim_speed'             => ['Swim Speed', '<p>You have a Swim Speed of 30 feet.</p>'],
            'water_affinity'         => ['Water Affinity', '<p>You have Advantage on Saves against water-based and other magical effects. The DM determines if a spell is water based.</p>'],
        ] as $key => [$name, $description]) {
            $feature              = new Feature;
            $feature->key         = $key;
            $feature->name        = $name;
            $feature->description = $description;
            $helper->saveFeature($feature);
        }
    }
}
