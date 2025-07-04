<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassMasterOfManyForms extends Seeder
{
    public function run()
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $class                = new Klass;
        $class->name          = 'Master Of Many Forms';
        $class->key_attribute = 'CON or WIS';
        $class->max_level     = 10;
        $class->requirements  = $helper->getClassRequirementsString([
            'Feats'          => 'Endurance, Thousand Faces, Greater Wild Shape',
            'Class Features' => 'Wild Shape Class Feature',
            'Special'        => 'Must be a Druid from the Chondalwood area',
        ]);
        $class->description   = '<p>The Druids of the Chondalwood favor freedom of form over spells. The majority of the Druid Circles of the Chondalwood have a xenophobic outlook, and avoid contact with civilization. However, one group has taken to the worship of Talona, and can sometimes be hired as spies and assassins (as their Thousand Faces ability allows them to infiltrate almost any organization). This Druid Circle calls themselves the Ganglers.</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_progress' => 4,
            'has_spells'     => true,
        ], ['WIS', 'CHA'], [
            'Wild Shape', 'Primal',
        ]);

        $feature              = new Feature;
        $feature->key         = 'shifters_speech';
        $feature->name        = "Shifter's Speech";
        $feature->description = '<p>You gain the ability to speak normally regardless of the form you take.</p>
<p>While you are Wild Shaped, you gain the effects of the Speak with Animals Spell.</p>';
        $helper->saveFeature($feature, ['Wild Shape']);

        $feature              = new Feature;
        $feature->key         = 'improved_thousand_faces';
        $feature->name        = 'Improved Thousand Faces';
        $feature->description = '<p>When you use your Thousand Faces Wild Shape feature, you may take the form of specific individuals if you choose.</p>';
        $helper->saveFeature($feature, ['Wild Shape']);

        $helper->addFeaturesToClass($class, [
            'primal_spellcasting_class' => [1, 4, 8],
            'spell_pool'                => [1, 3, 5, 7],
            'shifters_speech'           => [1],
            'improved_thousand_faces'   => [2],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'meta' => 'Wild Shape Spell Caster']);
        $class->features()->save(app()->features['feat'], ['level' => 2, 'meta' => 'Greater Shape Spell Caster']);
        $class->features()->save(app()->features['feat'], ['level' => 4, 'meta' => 'Fast Wild Shape']);

        $feat              = new Feat;
        $feat->name        = 'Expanded Forms';
        $feat->requirement = 'You must have at least 4 levels in Master of Many Forms';
        $feat->description = '<p>You can use your Wild Shape class feature to transform into an Elementals, Small Insects, and Plants using the associated Form spell.</p>
<p>It costs 1 Spell Point to for each spell level required to heighten the Form spell.</p>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);
        $helper->addSpellsToFeat($feat, [
            4 => ['Elemental Form', 'Insect Form', 'Plant Form'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Dragon Form';
        $feat->requirement = 'You must have at least 6 levels in Master of Many Forms';
        $feat->description = '<p>You can use your Wild Shape class feature to transform into a dragon using the Dragon Form spell.</p>
<p>It costs 2 Spell Points for each spell level required to heighten the Dragon Form spell.</p>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);
        $feat->parent_feats()->save(app()->feats['Expanded Forms']);
        $helper->addSpellsToFeat($feat, [
            5 => ['Dragon Form'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Monstrosity Form';
        $feat->requirement = 'You must have at least 10 levels in Master of Many Forms';
        $feat->description = '<p>You can use your Wild Shape class feature to transform into a monstrosity using the Monstrosity Form spell.</p>
<p>It costs 3 Spell Points for each spell level required to heighten the Monstrosity Form spell.</p>';
        $helper->addTypesToFeat($feat, ['Wild Shape']);
        $feat->parent_feats()->save(app()->feats['Dragon Form']);
        $helper->addSpellsToFeat($feat, [
            5 => ['Monstrosity Form'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Gangler Druid Circle';
        $feat->requirement = 'You must have at least 2 levels of Master of Many Forms and be a member of the Ganglers Druid Circle';
        $feat->description = '<p>The Druids of the Gangler Circle specializes as Assassins and infiltrators. You gain the following benefits.</p>
<ul>
    <li>Add the Deception and Thievery skills to your Druid class Skills list</li>
    <li>Gain the Skilled feat. You must select Stealth for the Skilled feat. If you already have the Skilled feat with Stealth selected, then you may choose any skill.</li>
    <li>Reduce the number of rounds needed for the Stalked Enemy Class Feature by 1 round</li>
    <li>You may spend one use of your Wild Shape ability and 1 Spell Point to absorb a small item (such as a Dagger or a vile of poison) into your flesh as a Triple Action. Spend 1 Spell Point and an Action to retract the item from your body. This effect cannot be detected by magic.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Wild Shape', 'Favored Enemy']);

        $helper->addFeatsToClass($class, [
            'Improved Animal Companion' => 1,
            'Animal Companion Master'   => 2,
            'Gangler Druid Circle'      => 2,
            'Expanded Forms'            => 3,
            'Dragon Form'               => 6,
            'Monstrosity Form'          => 10,
        ]);

        $helper->addSpellsToClass($class, [
            2 => ['Fey Form'],
            3 => ['Giant Form'],
            4 => ['Aerial Form'],
        ]);
    }
}
