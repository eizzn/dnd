<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassDivinePrestigeSeeder extends Seeder
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

        // Divine Oracle
        $class                = new Klass;
        $class->name          = 'Divine Oracle';
        $class->type          = 'Prestige';
        $class->key_attribute = 'WIS or CHA';
        $class->max_level     = 3;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills' => '8 or more ranks in Religion',
            'Feats'  => 'At least 1 Exalted or Vile Feat',
            'Spells' => 'Able to cast at least 2 Divination Spells',
            'Patron' => 'You must have a Patron Deity that specifically lists the Divine Oracle in their Worshiper Classes',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_progress' => 3,
            'has_spells'     => 1,
        ], ['WIS', 'CHA'], [
            'Divine',
        ]);

        $feature              = new Feature;
        $feature->key         = 'diviner_feats';
        $feature->name        = 'Diviner Feats';
        $feature->description = '<ul>
    <li>You gain the Diviner Feat</li>
    <li>You may now take the Expert Diviner and Master Diviner Feats when you qualify for the level requirement with a Generic Feat</li>
</ul>';
        $helper->saveFeature($feature, ['Divine', 'Exalted', 'Vile']);

        $helper->addFeaturesToClass($class, [
            'diviner_feats'             => [1],
            'divine_spellcasting_class' => [1, 3],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'idx' => 2, 'meta' => 'Spell Focus Feat for Divination']);
        $class->features()->save(app()->features['feat'], ['level' => 2, 'idx' => 3, 'meta' => 'Any Exalted or Vile Feat']);
        $class->features()->save(app()->features['feat'], ['level' => 2, 'idx' => 2, 'meta' => 'Oracle Feat']);
        $class->features()->save(app()->features['feat'], ['level' => 3, 'idx' => 4, 'meta' => 'Any Exalted or Vile Feat']);
        $class->features()->save(app()->features['feat'], ['level' => 3, 'idx' => 5, 'meta' => 'You may take the Wise Defense or Beautiful Defense Feat']);

        $helper->addSpellsToClass($class, [
            0 => ['Detect Demon', 'Detect Magic', 'Forbidding Ward', 'Guidance', 'Wind Compass'],
            1 => ['Detect Alignment', 'Detect Chaos', 'Detect Charm', 'Detect Evil', 'Detect Good', 'Detect Law',
                'Detect Poison and Disease', 'Detect Undead', 'Identify', 'Locate Water', 'Note', 'Planar Orientation',
                'Weather Sense', ],
            2 => ['Augury', 'Comprehend Language', 'Find Traps', 'Hypercognition', 'Identify Creature', 'Lay of the Land',
                'Locate Animals or Plants', 'Locate Object', 'Map', 'See Invisibility', 'Reveal True Shape', 'Zone of Truth', ],
            3 => ['Analyze Portal', 'Clairvoyance', 'Comprehension', 'Ethereal Sight', 'Journal', 'Know Bloodline',
                'Pierce Disguise', 'Reveal Illusion', ],
            4 => ['Commune with Texts', 'Detect Scrying', 'Divination', 'Locate Creature', 'Speak with Plants'],
            5 => ['Chronicle', 'Commune', 'Legend Lore', 'Scrying', 'Trace Teleport', 'Watchware'],
            6 => ['Commune with Earth', 'True Seeing'],
            8 => ['Discern Location'],
            9 => ['Foresight'],
        ]);

        /**********************************************************************/

        // Divine Disciple
        $class                = new Klass;
        $class->name          = 'Divine Disciple';
        $class->key_attribute = 'WIS or CHA';
        $class->type          = 'Prestige';
        $class->max_level     = 5;
        $class->requirements  = $helper->getClassRequirementsString([
            'Skills'       => '5 or more ranks in Diplomacy, 8 or more ranks in Religion',
            'Spellcasting' => 'Able to cast 4th level Divine spells, ability to summon extra-planer servants of your patron deity',
            'Patron'       => 'You must have a Patron Deity that specifically lists the Divine Oracle in their Worshiper Classes',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 4,
            'skill_progress' => 2,
            'has_spells'     => 1,
        ], ['WIS', 'CHA']);

        $feature              = new Feature;
        $feature->key         = 'divine_emissary';
        $feature->name        = 'Divine Emissary';
        $feature->description = '<p>You can telepathically communicate with any outsider within 60 feet, as long as that outsider serves the same patron deity as you.</p>';
        $helper->saveFeature($feature, ['Divine', 'Outsider']);

        $feature              = new Feature;
        $feature->key         = 'sacred_defense';
        $feature->name        = 'Sacred Defense';
        $feature->description = '<p>Each time you gain this feature, you gain a +2 Divine bonus to your Saves vs magical effects from Outsiders and Extraplanar effects.</p>';
        $helper->saveFeature($feature, ['Divine', 'Outsider']);

        $feature              = new Feature;
        $feature->key         = 'imbue_spell_ability';
        $feature->name        = 'Imbue with Spell Ability';
        $feature->description = '<p>As the spell, at Will, except you do not need to use a Spell Slot to cast Imbue with Spell Ability. You do lose the Spell Slots for the transferred spell as normal.</p>';
        $helper->saveFeature($feature, ['Divine']);

        $feature              = new Feature;
        $feature->key         = 'transcendence';
        $feature->name        = 'Transcendence';
        $feature->description = "<p>Due to your long and many associations with your deity's outsider servants and direct intervention by your patron deity, you transcend your mortal form and become a Divine creature.</p>
<ul>
    <li>You type changes to Outsider, which means that you acquire some immunities and vulnerabilities based on your type.</li>
    <li>Upon achieving Transcendence, your appearance usually undergoes a minor physical change appropriate to your patron deity.</li>
    <li>You gain a +2 bonus to all your CHA based skill checks when used against outsider creatures that serve your patron.</li>
</ul>";
        $helper->saveFeature($feature, ['Divine', 'Outsider']);

        $helper->addFeaturesToClass($class, [
            'divine_emissary'           => [1],
            'sacred_defense'            => [2, 4],
            'imbue_spell_ability'       => [3],
            'transcendence'             => [5],
            'divine_spellcasting_class' => [1, 2, 3, 4, 5],
        ]);

        $helper->addSpellsToClass($class, [
            8 => ['Compel'],
        ]);
    }
}
