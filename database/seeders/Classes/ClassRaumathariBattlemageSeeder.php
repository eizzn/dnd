<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassRaumathariBattlemageSeeder extends Seeder
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
        $class->name          = 'Raumathari Battlemage';
        $class->type          = 'Prestige';
        $class->key_attribute = 'STR or INT';
        $class->description   = '<p>Enemies of ancient Narfell, the Raumathari spell casters of old were fearsomely powerful naturalists that focused on elemental spells, and bringing their power against the demons of Narfell.</p>
<p>Employing sword and spell with dauntless courage and deadly force, the handful of Raumathari battlemages remaining in the world comprise a lonely and little-known order of adventurers, explorers, and mercenaries in search of battle.</p>';
        $class->max_level    = 10;
        $class->requirements = $helper->getClassRequirementsString([
            'Language'      => 'Able to read Roushoum',
            'Spells'        => 'Able to cast 2nd level Primal',
            'Feats'         => 'Combat Casting, Raumathari Sword Adept',
            'Class Feature' => 'Chastise Spirit Class Feature',
            'Special'       => "The character must find a mentor who already has levels in Raumathari Battlemage and spend at least ten days studying in the mentor's company. During this time of study, both mentor and student must spend at least 8 hours a day in training.",
        ]);
        $class->description = '<p>Raumathari Battlemages are not ones with nature. Their desire is to exploit nature to their needs. Most often they use the spirits of nature to power their effigies and constructs.</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 6,
            'skill_progress' => 3,
            'has_spells'     => 1,
        ], ['STR', 'WIS', 'INT'], [
            'Arcane', 'Primal', 'Spirit', 'Fighter Feat',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Arcana']);

        $feature              = new Feature;
        $feature->key         = 'sword_focus';
        $feature->name        = 'Sword Focus';
        $feature->description = '<p>You may perform a special rite to make a single sword into a focus for your spells. The focus sword can then replace any material component of less than 50 gp value in the casting of your spells. The sword is not consumed or damaged by its use as a focus, although it must be in hand to be used in this way.</p>
<p>The rite to create a sword focus requires three days and 1,000 gp in materials as well as a masterwork weapon. Magic swords may be attuned as your sword foci. You may attune only a single sword at a time, if you lose the weapon, you must repeat the rite to create a new sword focus.</p>';
        $helper->saveFeature($feature);

        $feature               = new Feature;
        $feature->key          = 'channel_spell_sword';
        $feature->name         = 'Channel Spell Sword';
        $feature->requirements = 'You use at least one Action to make a melee attack with your Sword Focus';
        $feature->description  = "<p>When you make a melee attack with your Sword Focus, you may have the Action or Actions used to make the melee attack replace a Material Casting or Somatic Casting of a spell by spending 3 Spell Points. The spell must be able to target at least one target, and the creature you are attempting to hit with your melee attack must be the target. If you cast a spell in this way, and if you hit with your melee attack, the target of your melee attack suffers the effect of the spell. You do not need to make a melee spell attack roll. If you miss, your Sword Focus will continue to be charged with the spell until the end of your next round. The spell will dissipate harmlessly if you fail to hit a target with your Sword Focus before this time.</p>
<blockquote>
    Ex. A Battlemage makes an attack using the Careful Strike Talent and tries to hit an Ogre. Before he makes his attack roll, he decides to charge his Sword Focus with a Command spell. The Command spell requires a Somatic Casting and a Verbal Casting. The Battlemage uses the Action used to make the Careful Strike to replace the Somatic Casting by spending 3 Spell Points. He therefore uses 2 total Actions (1 to make the Careful Strike, and 1 to fulfill the Verbal Casting. The Somatic Casting is fulfilled by the Action used to make the Careful Strike, thus leaving the Battlemage with 1 Action left for this round). The Battlemage misses. He then decides to use his last remaining Action to attack again and hits. The Ogre suffers the melee damage from the Battlemage's Sword Focus and then must make a Save against the effects of the Command spell.
</blockquote>
<p>You may only cast first level spells to charge your Sword Focus.</p>
<p>Each time you gain this Class Feature, you may charge spells one level higher.</p>";
        $helper->saveFeature($feature);

        $helper->addFeaturesToClass($class, [
            'primal_spellcasting_class' => [2, 3, 4, 6, 7, 8, 10],
            'arcane_spellcasting_class' => [2, 3, 4, 6, 7, 8, 10],
            'class_group_feat'          => [3, 6, 9],
            'fighter_feat'              => [1, 5],
            'sword_focus'               => [1],
            'channel_spell_sword'       => [1, 3, 7, 9],
        ]);

        $helper->addFeatsToClass($class, [
            'Blessing of the Spirit'          => 1,
            'Spirit Sense'                    => 1,
            'Spell Pool'                      => 1,
            'Spiritual Possession'            => 2,
            'Spirit Fetish'                   => 3,
            'Vengeful Spirit'                 => 6,
            'Elemental Spirit Magic'          => 3,
            'Improved Elemental Spirit Magic' => 6,
            'Greater Elemental Spirit Magic'  => 10,
            'Ghost Warrior'                   => 6,

            'Spirit Form' => 9,

            'Effigy Companion' => 1,
            'Craft Effigy'     => 2,
        ]);

        $features = app()->features;
        unset($features['chastise_spirit']);
        app()->features = $features;
    }
}
