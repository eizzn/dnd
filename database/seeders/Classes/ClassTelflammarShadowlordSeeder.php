<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassTelflammarShadowlordSeeder extends Seeder
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
        $class->name          = 'Telflammar Shadowlord';
        $class->key_attribute = 'DEX or CHA';
        $class->armors        = 'Light Armor';
        $class->weapons       = 'Simple Weapons';
        $class->max_level     = 6;
        $class->requirements  = $helper->getClassRequirementsString([
            'Race'          => 'The character must possess the shadow-walker template, which is conferred by a special rite consecrated by Mask. A character who is not a shadow-walker can still qualify for this class if they meet the SpellCasting requirements.',
            'Spellcasting'  => 'If the character is not a shadow-walker, they must possess the abiity to Shadow Walk, cast Dimension Door as a Spell or Spell-like Ability',
            'Class Feature' => 'You must have the Sneak Attack Feat at least twice',
            'Region'        => 'Thesk',
        ]);
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_points'   => 5,
            'skill_progress' => 5,
            'has_spells'     => true,
        ], ['DEX', 'CHA'], [
            'Arcane', 'Skill', 'Sneak Attack',
        ]);

        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Arcana', 'Athletics', 'Concentration', 'Deception', 'Stealth', 'Thievery',
        ]);

        $feature              = new Feature;
        $feature->key         = 'shadow_pounce';
        $feature->name        = 'Shadow Pounce';
        $feature->description = '<p>Whenever you use an ability or cast a spell with the Teleportation descriptor, you gain an Additional Action. This Additional Action can only be used after you arrive at your destination, and only as a Move or Attack Action.</p>';
        $helper->saveFeature($feature, ['Shadow']);

        $feature              = new Feature;
        $feature->key         = 'shadow_discorporation';
        $feature->name        = 'Shadow Discorporation';
        $feature->description = '<p>If you are in shadow or darkness (anything but direct daylight or the illuminated radius of a light source), any damage that would reduce you to 0 hit points or below instead has a chance to discorporate you. You make a DEX Save (DC 5 + damage dealt); if successful, you simply break apart into dozens of flitting shadows and vanish, along with anything you are holding or carrying. At the next sunset, the you reappear at a spot of your choosing within one mile of the place where you were forced to discorporate. While discorporated, you exist in the ShadowFell, in the lands ruled by Mask.</p>';
        $helper->saveFeature($feature, ['Shadow']);

        $helper->addFeaturesToClass($class, [
            'class_group_feat' => [2, 5],
            'precision_attack' => [3, 6],
            'shadow_pounce'    => [4],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 1, 'meta' => 'Shadow Sight']);
        $class->features()->save(app()->features['feat'], ['level' => 2, 'meta' => 'Shadow Jump']);
        $class->features()->save(app()->features['feat'], ['level' => 3, 'meta' => 'Shadow Cloak']);

        $helper->addFeatsToClass($class, [
            'Spell Pool'                 => 1,
            'Extend Spell Pool'          => 1,
            'Shadow Weave Caster'        => 2,
            'Expert Shadow Weave Caster' => 4,
            'Master Shadow Weave Caster' => 6,
        ]);

        $helper->addSpellsToClass($class, [
            1 => ['Camouflage', 'Alter Self', 'Darkness', 'Jump', 'Shadow Blade', 'Shadow Mask', 'Shadow Double', 'Shadow Shroud'],
            2 => ['Blink', 'Invisibility', 'Invisibility, Swift', 'Haste', 'Nondetection', "Spymaster's Coin"],
            3 => ['Armor of Darkness', 'Shadow Form', 'Shadow Walk', 'Shadowgate'],
            4 => ['Dimension Door', 'Disappearance', 'Triple Mask'],
        ]);

        $helper->addSpellSlotsToClass($class, [
            1 => ['known' => 1, 'one' => 1],
            2 => ['known' => 2, 'one' => 1, 'two' => 1],
            3 => ['known' => 3, 'one' => 1, 'two' => 1, 'three' => 1],
            4 => ['known' => 4, 'one' => 1, 'two' => 1, 'three' => 1, 'four' => 1],
            5 => ['known' => 5, 'one' => 2, 'two' => 2, 'three' => 1, 'four' => 1],
            6 => ['known' => 6, 'one' => 2, 'two' => 2, 'three' => 2, 'four' => 2],
        ]);
    }
}
