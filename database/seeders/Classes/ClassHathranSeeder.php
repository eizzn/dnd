<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassHathranSeeder extends Seeder
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
        $class->name          = 'Hathran';
        $class->type          = 'Prestige';
        $class->key_attribute = 'CHA';
        $class->max_level     = 10;
        $class->requirements  = $helper->getClassRequirementsString([
            'Gender'        => 'Female',
            'Alignment'     => 'Lawful Good, Lawful Neutral, Neutral Good, Lawful Evil (Durthan), Neutral Evil (Durthan)',
            'Feats'         => 'Ethran, At least 1 Meta Magic Feat, Cannot have any Item Creation Feats, Cannot have any Bloodline Feats, Cannot have any Wizard School Feats',
            'Spellcasting'  => 'Able to cast 1st level Arcane and Primal spells',
            'Class Feature' => 'Chastise Spirit',
            'Patron'        => 'The Fey Lords of Rashemen',
            'Region'        => 'Rashemen',
        ]);
        $class->description = '<p>This class represents both the Hathrans and the Durthans</p>
<p>You are barred from taking any Item Creation and Wizard School Feats.</p>
<p>To calculate the number of dice your Chastise Spirit deals, add your Hathran levels with your Spirit Shaman levels.</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_progress' => 4,
            'has_spells'     => true,
        ], ['WIS', 'CHA'], ['Primal', 'Spirit']);

        $feature              = new Feature;
        $feature->key         = 'communal_channeling';
        $feature->name        = 'Communal Channeling';
        $feature->description = "<p>You are able to use your Communal Binding that you have created in new ways. You can use an Action to channel energies among those who are part of your Communal Binding, and are within 30 feet of you when the channeling begins. The channeling lasts for 1 minute. It ends early if you are knocked unconscious or your use an Action on your turn to end it. When you begin channeling, you choose one of the following options.</p>
<dl>
    <dt>Commanding Channeling</dt> <dd>You take tighter control of the Communal Binding. For the duration of the channeling, only you can use dice from the Communal Pool. Once on each of their turns, other creatures within the Communal Binding can deal additional damage equal to your INT or CHA modifier to a creature or creatures damaged by one of the bonded creature's spells or attacks</dd>
    <dt>Protective Channeling</dt> <dd>You raise the defenses of the bonded creatures. When you begin channeling and at the start of each of their turns, this feature grants temporary Hit Points ao all other creatures that are a part of the Communal Binding that your created. The number of temporary Hit Points is equal the creator's Proficiency Bonus. When a creature loses these temporary Hit Points, the creator takes Psychic damage equal to half the creator's Proficiency Bonus, rounded down. If multiple members take damage from a single source, the total Psychic damage you can take is capped at the creator's Proficiency Bonus. This damage cannot be prevented, but it does not cause Concentration Saves for maintaining spells.</dd>
    <dt>Psychic Channeling</dt> <dd>You form a strong telepathic connection with the bonded creatures. For the duration of the channeling, all creatures within your Communal Binding can communicate telepathically, regardless of distance. The connection formed enables the affected creatures to perform more complex maneuvers by giving them awareness of what their comrades are about to do. Additionally, as a Free Action, a bonded creature can use the senses of another bonded creature instead of their own until the end of their own turn. For example, a human can gain a dwarf's darkvision.</dd>
</dl>";
        $helper->saveFeature($feature, ['Primal', 'Spirit']);

        $feature              = new Feature;
        $feature->key         = 'hathran_cohort';
        $feature->name        = 'Hathran Cohort';
        $feature->description = '<p>You gain a cohort. This cohort must either be an Ethran (a character with the Ethran feat, this NPC cannot also have a cohort), an Artificer with the Vremyonni Feat, or a Barbarian from one of the Barbarian lodges of Rashemen (typically from the Stag or possibly Wolf lodge).</p>
<p>Instead of an NPC cohort, you may choose to take on a PC as your cohort. This PC must also be either an Ethran (who cannot also have a cohort), an Artificer with the Vremyonni Feat, or a barbarian from one of the Barbarian lodges of Rashemen. If you choose to take on a fellow PC as your cohort, you gain the following benefits.</p>
<ul>
    <li>When your PC cohort is within 15 feet of you, both you and your cohort gain a +1 Awareness bonus to your AC and a +1 Awareness bonus to all Saves.</li>
    <li>You and your PC cohort gain the ability to cast Cure Wounds as a 1st level spell once per Long Rest. This spell can only be cast on each other.</li>
    <li>If you cast any spell with the Bless type on yourself, it also affects your PC cohort.</li>
</ul>
<p>If your cohort dies and is not revived, you must return to a populated area (such as a city or village) and spend 2D6 days searching for another suitable cohort.</p>
<ul>
    <li>If you gain a Familiar, it gains the Telthor template</li>
    <li>If you gain an Animal Companion, it gains the Telthor template</li>
</ul>';
        $helper->saveFeature($feature, ['Primal', 'Spirit']);

        $helper->addFeaturesToClass($class, [
            'class_group_feat'          => [3, 5, 7, 9],
            'communal_channeling'       => [1],
            'hathran_cohort'            => [2],
            'spellcasting_class_double' => [1, 2, 3, 6, 8],
            'spellcasting_class'        => [4, 5, 7, 9, 10],
            'place_magic'               => [1],
        ]);
        $helper->addSpellsToClass($class, [
            3 => ['Status'],
            4 => ['Land Womb'],
        ]);

        $feat                    = new Feat;
        $feat->name              = 'Ethran';
        $feat->requirement       = 'Must be female and from the Region of Rashemen';
        $feat->short_description = 'You have been initiated into the secrets of the Witches of Rashemen. You are now an Ethran';
        $feat->description       = '<p>You are a respected member of the Witches of Rashemen.</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>Choose a School of Magic. You gain the Cantrip Caster Class Feature for Arcane spells of the chosen school.</li>
    <li>You gain a +5 bonus to Diplomacy checks when dealing with common citizens of Rashemen</li>
    <li>You gain a +2 bonus on Diplomacy checks when dealing with spirits of Rashemen</li>
    <li>You can create a Communal Binding.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal', 'Spirit' => 2]);
        $helper->addSpellsToFeat($feat, [
            2 => ['Flash', 'Rage' => 'Others only'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Othlor';
        $feat->description = "<p>You rise in the ranks of the Wychlaran and the spirits of the land infuse you with magical authority.</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>
        <p>As a Triple Action, you can issue a simple command (such as those detailed in the Command spell) to a number of creatures equal to double your CHA modifier. Each Target must make a WIS Save against your spell save DC, or be magically compelled to carry out the command for a number of rounds equal to your CHA modifier.</p>
        <p>At the end of each of their turns for the Duration, Targeted creatures can repeat the WIS Save, ending the effect on themselves on a Success.</p>
        <p>On each of your turns for the Duration as an Action, you can issue a new command that must be able to be performed in one round. For the following round, Targeted creatures will instead perform the new command on their turn.</p>
        <p>Once you've used this feature, you must finish a Long Rest before doing so again.</p>
    </li>
    <li>You gain the Cantrip Caster Class Feature for all Arcane spells.</li>
    <li>You may bind an additional member to your Communal Binding</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Primal', 'Spirit']);
        $feat->parent_feats()->save(app()->feats['Ethran']);

        $feat              = new Feat;
        $feat->name        = 'Durthan';
        $feat->description = '<p>You desire to awaken the foul spirits of the land and use them for your own purposes.</p>
<ul>
    <li>You gain Resistance to Cold (a gift from Aurilandur) along with a list of spells.</li>
    <li>You gain the Animal Companion Feat. If you already have this Feat, then you may select any Feat you qualify for.</li>
    <li>If you have the Improved Undead Feat, you may take the Master of Shrouds Feat, even though you do not have the Undead Ally Feat.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Primal', 'Spirit']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Frostbite', 'Ray of Frost'],
            1 => ['Ice Armor'],
            4 => ['Ice Storm'],
            5 => ['Cone of Cold', 'Wall of Ice'],
            6 => ['Baleful Polymorph'],
        ]);
        $feat->parent_feats()->save(app()->feats['Ethran']);

        $feat              = new Feat;
        $feat->name        = 'Draw From the Land';
        $feat->description = "<p>Before taking a Rest, you may draw upon the power of the land to revitalize your body and mind. This allows you to double all the benefits from Resting.</p>
<p>You may also use the energy of the land to fuel your body's need for food and water. You gain a +5 bonus to your CON check to overcome hunger.</p>
<p>Finally, you require half as much sleep as normally, however, you still require 8 hours of rest to regain spell slots.</p>
<p>Outside of Rashemen, you must make a CON check (DC 10 + 2 per 100 miles from the border of Rashemen) to activate this ability. If you fail, you cannot retry for 1 day.</p>";
        $helper->addTypesToFeat($feat, ['Primal', 'Spirit']);
        $feat->parent_feats()->save(app()->feats['Ethran']);

        $feat                    = new Feat;
        $feat->name              = 'Rashemi Elemental Summoning';
        $feat->short_description = "<p>You may summon Rashemen's native elementals in any situation where you could summon an air or earth elemental</p>";
        $feat->description       = '<p>When casting a spell that summons air or earth elementals, you may choose to summon an orglash or thomil instead.</p>';
        $helper->addTypesToFeat($feat, ['Primal', 'Spirit']);
        $feat->parent_feats()->save(app()->feats['Ethran']);
        $feat->parent_feats()->save(app()->feats['Draw From the Land']);

        $feat              = new Feat;
        $feat->name        = 'Communal Enhancements';
        $feat->description = "<p>You learn to improve your communal channeling in subtle ways. The following enhancements to channeling options are available for you. When you complete the ritual for Communal Channeling, you may pick one of the following options.</p>
<dl>
    <dt>Voice of Reason</dt> <dd>While your Commanding Channeling is active, and you use a communal pool die on another creature, instead of using one die, you can use a number of dice equal to half your Communal Binding number (rounded up)</dd>
    <dt>Draw Power</dt> <dd>While your Commanding Channeling is active, with a Reaction, when you deal damage, you can add the number of communal pool dice up to your communal binding number to the damage dealt by one of your attacks or Primal spells</dd>
    <dt>Soothing Presence</dt> <dd>While your Protective Channeling is active, the number of temporary Hit Points granted increases by your communal pool die. Additionally, you are resistant to Psychic damage, including that dealt by your communal channeling.</dd>
    <dt>Draw Protection</dt> <dd>While your Protective Channeling is active, you can reduce the temporary Hit Points on any number of willing creatures in your Communal Binding to 0, and then reduce the damage you take by the same amount. The affected bonded creatures can't gain temporary Hit Points by an means until the start of your next turn</dd>
    <dt>Burden of Leadership</dt> <dd>While your Psychic Channeling is active, with a Reaction at the start of your turn, you can choose to give any ally a bonus or penalty to their Initiative by as much as +2 points.</dd>
    <dt>Masterplan</dt> <dd>When you roll initiative, and you are not surprised, you can use a Reaction to immediately begin your Psychic Channeling. Additionally, you may switch the Initiatives of willing bonded creatures, including yourself, in any way you see fit.</dd>
</dl>";
        $helper->addTypesToFeat($feat, ['Primal', 'Circle Magic']);

        $feat              = new Feat;
        $feat->name        = 'Communal Coven';
        $feat->description = "<p>When you lead a Communal Binding, you gain the following</p>
<ul>
    <li>There is no longer a limit to the number of creatures that can be part of your Communal Binding</li>
    <li>When at least 6 other creatures are part of your Communal Binding, the Communal Pool has unlimited dice</li>
    <li>When at least 6 other creatures are part of your Communal Binding, other Wychlaren and Vremyonni within the binding can also use the pool as though they were the binding's creator.</li>
    <li>Having a 4th, 5th, or 6th individual as part of your Communal Binding can now increase the Communal Pool die to a D8, D10, and D12 respectively.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Primal', 'Circle Magic']);
        $feat->parent_feats()->save(app()->feats['Communal Enhancements']);

        $helper->addFeatsToClass($class, [
            'Durthan' => 2,
            'Othlor'  => 8,

            'Draw From the Land'          => 4,
            'Rashemi Elemental Summoning' => 5,

            'Improved Animal Companion' => 3,
            'Greater Animal Companion'  => 7,
            'Animal Companion Master'   => 10,

            'Communal Enhancements' => 5,

            'Mage Circle Leader'       => 1,
            'Great Mage Circle Leader' => 7,
        ]);

        $spiritShaman = Klass::where('name', 'Spirit Shaman')->firstOrFail();
        $helper->addFeatsToClass($spiritShaman, [
            'Communal Coven' => 20,
        ]);
    }
}
