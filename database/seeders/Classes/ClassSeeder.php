<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
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

        $class            = new Klass;
        $class->name      = 'Base Class';
        $class->type      = 'Abstract';
        $class->max_level = 20;
        $helper->saveClass($class);

        $feature              = new Feature;
        $feature->key         = 'ancestry_feat';
        $feature->name        = 'Ancestry Feat';
        $feature->description = '<p>You gain an Ancestry Feat based on your Ancestry.</p>';
        $helper->saveFeature($feature);

        $helper->addFeaturesToClass($class, [
            'ancestry_feat' => [1, 3, 6, 9],
            'generic_feat'  => [2, 5, 8, 11, 14, 17],
        ]);

        $helper->addFeatsToClass($class, [
            'Alertness'           => 1,
            'Ancestral Paragon'   => 1,
            'Arcane Sense'        => 1,
            'Assurance'           => 1,
            'Improved Reaction'   => 1,
            'Dodge'               => 1,
            'Endurance'           => 1,
            'Improved Initiative' => 1,
            'Lucky'               => 1,
            'Mobile'              => 1,
            'Nimble Escape'       => 1,
            'Reach Spell'         => 1,
            'Scribe Scroll'       => 1,
            'Snare Crafting'      => 1,
            'Activate Magic Item' => 1,
            'Widen Spell'         => 1,
            'Wild Talent'         => 1,
            'Daylight Adaptation' => 3,
            'Graft Flesh'         => 8,

            'Skilled'          => 1,
            'Impeccable Skill' => 2,
            'Masterful Skill'  => 2,
            'Observant'        => 2,

            'Magic Initiate'          => 1,
            'Combat Casting'          => 1,
            'Improved Combat Casting' => 7,

            'Great Fortitude'      => 1,
            'Impressive Strength'  => 1,
            'Iron Will'            => 1,
            'Lightning Reflexes'   => 1,
            'Stunning Personality' => 1,
            'Superior Intellect'   => 1,

            'Automatic Knowledge'  => 2,
            'Bonded Animal'        => 2,
            'Die Hard'             => 2,
            'Brew Potion'          => 2,
            'Craft Wondrous Item'  => 3,
            'Mage Slayer'          => 3,
            'Forge Ring'           => 4,
            'Craft Armament'       => 4,
            'Improved Brew Potion' => 7,
            'Improved Crafting'    => 12,
            'Talents Master'       => 6,
            'Dragon Ally'          => 7,
            'Inventor'             => 7,
            'Deny Advantage'       => 15,

            'Point-Blank Shot' => 1,
            'Rapid Reload'     => 1,
            'Rapid Shot'       => 2,
            'Far Shot'         => 6,
            'Manyshot'         => 6,

            'Weapon Finesse' => 1,
            'Improved Feint' => 5,

            'Two-Weapon Fighter'          => 2,
            'Improved Two-Weapon Fighter' => 7,
            'Greater Two-Weapon Fighter'  => 14,

            'Improved Unarmed Strike' => 1,
            'Improved Grapple'        => 2,
            'Deflect Ranged Attack'   => 7,

            'Mounted Combatant'          => 1,
            'Improved Mounted Combatant' => 5,
            'Greater Mounted Combatant'  => 7,

            'Improved Critical' => 7,
            'Greater Critical'  => 12,

            'Light Armor'         => 1,
            'Medium Armor'        => 1,
            'Heavy Armor'         => 1,
            'Medium Armor Master' => 3,
            'Heavy Armor Master'  => 6,

            'Light Armor Caster'  => 1,
            'Medium Armor Caster' => 4,
            'Heavy Armor Caster'  => 7,

            'Expanded Spell Slot'          => 6,
            'Improved Expanded Spell Slot' => 12,
            'Greater Expanded Spell Slot'  => 18,

            'Magic Item User' => 6,

            'Multi Attacker'          => 6,
            'Improved Multi Attacker' => 11,

            'Arcane Background'          => 3,
            'Improved Arcane Background' => 6,
            'Greater Arcane Background'  => 8,
            'Master Arcane Background'   => 10,

            'Improved Wand Wielder' => 6,
            'Greater Wand Wielder'  => 15,

            'Improved Animal Companion' => 6,
            'Greater Animal Companion'  => 12,
            'Animal Companion Master'   => 5,

            'Shoto Style'   => 2,
            'Tu Lung Style' => 2,

            'Crane Stance'  => 1,
            'Dragon Stance' => 1,
            'Horse Stance'  => 1,
            'Mantis Stance' => 1,
            'Monkey Stance' => 1,
            'Snake Stance'  => 1,
            'Tiger Stance'  => 1,

            'Node Spellcasting'          => 3,
            'Improved Node Spellcasting' => 12,
        ]);

        $class             = new Klass;
        $class->name       = 'Cleric';
        $class->type       = 'Abstract';
        $class->has_spells = 1;
        $helper->saveClass($class);

        $feature              = new Feature;
        $feature->key         = 'cantrip_caster';
        $feature->name        = 'Cantrip Caster';
        $feature->description = '<p>You may cast your Cantrips without using a Spell Slot</p>';
        $helper->saveFeature($feature, ['Cantrip']);

        $feature              = new Feature;
        $feature->key         = 'combat_mastery';
        $feature->name        = 'Combat Mastery Feat';
        $feature->description = '<p>You gain a Combat Mastery feat.</p>';
        $helper->saveFeature($feature, ['Combat Mastery']);

        $feature              = new Feature;
        $feature->key         = 'evasion';
        $feature->name        = 'Evasion';
        $feature->description = '<p>You gain the Evasion feat. If you already have the Evasion feat, you gain the Improved Evasion feat.</p>';
        $helper->saveFeature($feature, []);

        $feature              = new Feature;
        $feature->key         = 'uncanny_dodge';
        $feature->name        = 'Uncanny Dodge';
        $feature->description = '<p>You cannot be caught Flat-Footed, nor do you lose your DEX bonus to AC if an attacker is invisible.</p>
<p>You still lose your DEX bonus to AC if immobilized. You can still lose your DEX bonus to AC if an opponent successfully uses the Feint action.</p>
<p>If you already have the Uncanny Dodge feature, you gain the Improved Uncanny Dodge instead</p>';
        $helper->saveFeature($feature, []);

        $feature              = new Feature;
        $feature->key         = 'advanced_uncanny_dodge';
        $feature->name        = 'Advanced Uncanny Dodge';
        $feature->description = '<p>You can no longer be Flanked unless the attacker has at least four more levels than you.</p>
<p>If you have Advanced Uncanny Dodge feature from another class, then an attacker must have four or more levels than your combined class levels for all classes that have the Advanced Uncanny Dodge feature.</p>';
        $helper->saveFeature($feature, []);

        $feature              = new Feature;
        $feature->key         = 'fear_immunity';
        $feature->name        = 'Fear Immunity';
        $feature->description = '<p>You are immune to Fear effects.</p>';
        $helper->saveFeature($feature, ['Fear']);

        $feature              = new Feature;
        $feature->key         = 'hide_in_plain_sight';
        $feature->name        = 'Hide in Plain Sight';
        $feature->description = '<p>You can use the Stealth skill to Hide even while being observed. As long as you are within 10 feet of some sort of shadow, you can hide yourself from view in the open without having anything to actually hide behind. You cannot hide in your own shadow.</p>';
        $helper->saveFeature($feature, []);

        $this->call(ClassArtificerSeeder::class);
        $this->call(ClassBarbarianSeeder::class);
        $this->call(ClassBardSeeder::class);
        $this->call(ClassDruidSeeder::class);
        $this->call(ClassFighterSeeder::class);
        $this->call(ClassMonkSeeder::class);
        $this->call(ClassPaladinSeeder::class);
        $this->call(ClassRangerSeeder::class);
        $this->call(ClassRogueSeeder::class);
        $this->call(ClassSorcererSeeder::class);
        $this->call(ClassWarlockSeeder::class);
        $this->call(ClassWizardSeeder::class);

        $this->call(ClassPsionSeeder::class);
        $this->call(ClassPsychicWarriorSeeder::class);
        $this->call(ClassSoulKnifeSeeder::class);

        $this->call(ClassSwashbucklerSeeder::class);
        $this->call(ClassAdventurerSeeder::class);
        $this->call(ClassFavoredSoulSeeder::class);
        $this->call(ClassNinjaSeeder::class);
        $this->call(ClassScoutSeeder::class);
        $this->call(ClassSpellThiefSeeder::class);
        $this->call(ClassSpiritShamanSeeder::class);

        $this->call(ClassAcolyteOfTheSkinSeeder::class);
        $this->call(ClassArchMageSeeder::class);
        $this->call(ClassAssassinSeeder::class);
        $this->call(ClassEnlightenedFistSeeder::class);
        $this->call(ClassHierophantSeeder::class);
        $this->call(ClassMysticTheurgeSeeder::class);
        $this->call(ClassRunecasterSeeder::class);
        $this->call(ClassArcaneArcherSeeder::class);
        $this->call(ClassArcaneTricksterSeeder::class);
        $this->call(ClassBladesingerSeeder::class);
        $this->call(ClassCerebremancerSeeder::class);
        $this->call(ClassDivinePrestigeSeeder::class);
        $this->call(ClassFrenziedBerserkerSeeder::class);
        $this->call(ClassSacredFistSeeder::class);
        $this->call(ClassShadowdancerSeeder::class);
        $this->call(ClassFistOfAuppenserSeeder::class);
        $this->call(ClassHalruaanElderSeeder::class);
        $this->call(ClassHathranSeeder::class);
        $this->call(ClassMasterOfManyForms::class);
        $this->call(ClassRedWizardSeeder::class);
        $this->call(ClassRaumathariBattlemageSeeder::class);
        $this->call(ClassTelflammarShadowlordSeeder::class);
        $this->call(ClassNemesisSeeder::class);
    }
}
