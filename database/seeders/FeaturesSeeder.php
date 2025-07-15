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
        $feature->description = '<p>You boost four different ability scores. You can use these ability boosts to increase your ability scores above 18. Boosting an ability score increases it by 1 if it\'s already 18 or above, or by 2 if it starts out below 18.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'flurry_of_blows';
        $feature->name        = 'Flurry of Blows';
        $feature->description = '<p>You gain the following</p>
<ul>
    <li>You gain the Two-Weapon Fighter Feat</li>
    <li>You mays spend a Power Point and gain an Additional Action. This additional Action can only be used to make an Unarmed Strike Melee attack. You cannot spend more than one Power Point in this way per turn.</li>
</ul>';
        $helper->saveFeature($feature);

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
</ul>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'divine_feat';
        $feature->name        = 'Divine Feat';
        $feature->description = '<p>You gain a Divine Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'fighter_feat';
        $feature->name        = 'Fighter Feat';
        $feature->description = '<p>You gain a Fighter Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'discipline_feat';
        $feature->name        = 'Discipline Feat';
        $feature->description = '<p>You gain a Discipline Feat</p>';
        $helper->saveFeature($feature, ['Discipline']);

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
    <li>+2 bonus to Hit against members of your Favored Enemy using Melee or Ranged weapons.</li>
    <li>When you hit a member of your Favored Enemy, you deal an additional Weapon Die of Damage</li>
    <li>When you score a critical hit against a member of your Favored Enemy, add an additional damage dice.</li>
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
    <li>You gain a +5 bonus to Stealth (Hide) checks to hide in your Favored Terrain.</li>
    <li>When you Forage, you find twice as much food as you normally would.</li>
    <li>While tracking other creatures, you also learn their exact number, their sizes, and how long ago they passed through the area.</li>
</ul>";
        $helper->saveFeature($feature, ['Favored Terrain']);

        $feature              = new Feature;
        $feature->key         = 'rogue_feat';
        $feature->name        = 'Rogue Feat';
        $feature->description = '<p>You gain a Rogue Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'sorcerer_feat';
        $feature->name        = 'Sorcerer Feat';
        $feature->description = '<p>You gain a Sorcerer Feat or Metamagic Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'bloodline_feat';
        $feature->name        = 'Bloodline Feat';
        $feature->description = '<p>You gain a Bloodline Feat.</p>';
        $helper->saveFeature($feature, ['Bloodline']);

        $feature              = new Feature;
        $feature->key         = 'warlock_feat';
        $feature->name        = 'Warlock Feat';
        $feature->description = '<p>You gain a Warlock Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'invocation';
        $feature->name        = 'Invocation';
        $feature->description = '<p>You gain an Invocation Feat.</p>';
        $helper->saveFeature($feature, ['Invocation']);

        $feature              = new Feature;
        $feature->key         = 'wizard_feat';
        $feature->name        = 'Wizard Feat';
        $feature->description = '<p>You gain a Wizard Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'wizard_spell_list';
        $feature->name        = 'Wizard Spell List';
        $feature->description = "<p>You may memorize spells from the Wizard's Spell List. You must have a spell book like a Wizard.</p>";
        $helper->saveFeature($feature, ['Arcane']);

        $feature              = new Feature;
        $feature->key         = 'hex_blade_feat';
        $feature->name        = 'Hex Blade Feat';
        $feature->description = '<p>You gain a Hex Feat.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'psychic_feat';
        $feature->name        = 'Psychic Feat';
        $feature->description = '<p>You gain a Psionic Feat.</p>';
        $helper->saveFeature($feature, ['Psionic']);

        $feature              = new Feature;
        $feature->key         = 'item_creation';
        $feature->name        = 'Item Creation Feat';
        $feature->description = '<p>You gain a Feat with the Item Creation type.</p>';
        $helper->saveFeature($feature, ['Item Creation']);

        $feature              = new Feature;
        $feature->key         = 'spell_pool';
        $feature->name        = 'Spell Pool';
        $feature->description = '<p>You gain the Spell Pool feat. If you already have the Spell Pool feat, then you gain the Extend Spell Pool feat instead.</p>';
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
    <li>You may spend 2 Spell Points and use your Channel Divinity to turn/rebuke certain creatures as a Double Action. The type of creatures depends on your deity.</li>
    <li>You may spend 1 Spell Points to cast the Cure Wounds spell as a 1st level spell as an Action.</li>
</ul>';
        $helper->saveFeature($feature, ['Positive', 'Negative']);

        $feature              = new Feature;
        $feature->key         = 'place_magic';
        $feature->name        = 'Place Magic';
        $feature->description = '<p>You possess a special bond to the land that lets you draw upon the power of the spirits to cast spells without preparing them. When you use Place Magic, you can cast any arcane or divine spell known to you.</p>
<p>A place magic spell uses an unassigned spell slot of the appropriate type (arcane or divine) and level. If you do not have an open spell slot, you may spontaneously lose a prepared spell of the appropriate type and level to cast your Place Magic spell. You must add an additional Somatic Casting to cast a spell in this way.</p>';
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
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'spellcasting_class_double';
        $feature->name        = '+1 level of two existing Spell Casting Classes';
        $feature->description = '<p>Pick two of your spell casting classes. Treat your Class Levels as if it was 1 level higher for the purposes of determining what the highest level of spell that can be cast.</p>';
        $helper->saveFeature($feature, ['Arcane', 'Divine']);

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
        $feature->description = '<p>You gain a Talent</p>';
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
        $feature->key         = 'spell_point_caster';
        $feature->name        = 'Spell Point Caster';
        $feature->description = '<p>You can cast the specified spell by spending Spell Points</p>';
        $helper->saveFeature($feature, ['Spell Pool']);

        $feature              = new Feature;
        $feature->key         = 'spell_resistance';
        $feature->name        = 'Spell Resistance';
        $feature->description = '<p>You gain a +3 bonus to all Saves vs spells.</p>';
        $helper->saveFeature($feature);

        $feature              = new Feature;
        $feature->key         = 'darkvision';
        $feature->name        = 'Darkvision';
        $feature->description = '<p>You have Darkvision.</p>';
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
        $feature->description = "<p>You have Advantage on Saves against being Charmed, and magic can't put you to sleep</p>";
        $helper->saveFeature($feature, ['Fey']);

        $feature              = new Feature;
        $feature->key         = 'trance';
        $feature->name        = 'Trance';
        $feature->description = "<p>You don't need to sleep. Instead, they meditate deeply, remaining semiconscious, for 4 hours a day. (The Common word for such meditation is “trance.”) While meditating, you can dream after a fashion; such dreams are actually mental exercises that have become reflexive through years of practice. After resting in this way, you gain the same benefit that a human does from 8 hours of sleep.</p>";
        $helper->saveFeature($feature, ['Fey']);

        $feature              = new Feature;
        $feature->key         = 'acid_resistance';
        $feature->name        = 'Acid Resistance';
        $feature->description = '<p>You gain Resistance to Acid</p>';
        $helper->saveFeature($feature, ['Acid']);

        $feature              = new Feature;
        $feature->key         = 'acid_immunity';
        $feature->name        = 'Acid Immunity';
        $feature->description = '<p>You gain Immunity to Acid</p>';
        $helper->saveFeature($feature, ['Acid']);

        $feature              = new Feature;
        $feature->key         = 'cold_resistance';
        $feature->name        = 'Cold Resistance';
        $feature->description = '<p>You gain Resistance to Cold</p>';
        $helper->saveFeature($feature, ['Cold']);

        $feature              = new Feature;
        $feature->key         = 'cold_immunity';
        $feature->name        = 'Cold Immunity';
        $feature->description = '<p>You gain Immunity to Cold</p>';
        $helper->saveFeature($feature, ['Cold']);

        $feature              = new Feature;
        $feature->key         = 'fire_resistance';
        $feature->name        = 'Fire Resistance';
        $feature->description = '<p>You gain Resistance to Fire</p>';
        $helper->saveFeature($feature, ['Fire']);

        $feature              = new Feature;
        $feature->key         = 'fire_immunity';
        $feature->name        = 'Fire Immunity';
        $feature->description = '<p>You gain Immunity to Fire</p>';
        $helper->saveFeature($feature, ['Fire']);

        $feature              = new Feature;
        $feature->key         = 'electricity_resistance';
        $feature->name        = 'Electricity Resistance';
        $feature->description = '<p>You gain Resistance to Electricity</p>';
        $helper->saveFeature($feature, ['Electricity']);

        $feature              = new Feature;
        $feature->key         = 'electricity_immunity';
        $feature->name        = 'Electricity Immunity';
        $feature->description = '<p>You gain Immunity to Electricity</p>';
        $helper->saveFeature($feature, ['Electricity']);
    }
}
