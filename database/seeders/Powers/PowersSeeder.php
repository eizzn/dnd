<?php

namespace Database\Seeders\Powers;

use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PowersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $app         = app();
        $app->powers = [];

        $this->call(PowersASeeder::class);
        $this->call(PowersBSeeder::class);
        $this->call(PowersCSeeder::class);
        $this->call(PowersDSeeder::class);
        $this->call(PowersESeeder::class);
        $this->call(PowersFSeeder::class);
        $this->call(PowersGSeeder::class);
        $this->call(PowersHSeeder::class);
        $this->call(PowersISeeder::class);
        $this->call(PowersJSeeder::class);
        $this->call(PowersKSeeder::class);
        $this->call(PowersLSeeder::class);
        $this->call(PowersMSeeder::class);
        $this->call(PowersNSeeder::class);
        $this->call(PowersOSeeder::class);
        $this->call(PowersPSeeder::class);
        $this->call(PowersQSeeder::class);
        $this->call(PowersRSeeder::class);
        $this->call(PowersSSeeder::class);
        $this->call(PowersTSeeder::class);
        $this->call(PowersUSeeder::class);
        $this->call(PowersVSeeder::class);
        $this->call(PowersWSeeder::class);
        $this->call(PowersXSeeder::class);
        $this->call(PowersYSeeder::class);
        $this->call(PowersZSeeder::class);

        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $this->processClairsentience($helper);
        $this->processPsychokinesis($helper);
        $this->processPsychoMetabolism($helper);
        $this->processPsychoportation($helper);
        $this->processMetaCreativity($helper);
        $this->processTelepathy($helper);
    }

    protected function processMetaCreativity(SeedHelper $helper): void
    {
        $helper->addChildrenToPower('Ectoplasmic Creation', [
            'Astral Construct', 'Ectoplasmic Shard', 'Entangling Ectoplasm', 'Ectoplasmic Sheen',
            'Ectoplasmic Weapon', 'Concealing Ectoplasm', 'Repair Ectoplasmic Damage', 'Psionic Repair',
            'Dismiss Ectoplasm',
            'Wall of Ectoplasm',
            'Hail of Ectoplasmic Shards', 'Ectoplasmic Creation, Major',
            'Ectoplasmic Crystallize',
            'True Creation', 'Astral Seed',
            'Genesis',
        ]);
        $helper->addChildrenToPower('Astral Construct', [
            'Repair Ectoplasmic Damage',
        ]);
        $helper->addChildrenToPower('Ectoplasmic Shard', [
            'Hail of Ectoplasmic Shards',
        ]);
    }

    protected function processClairsentience(SeedHelper $helper): void
    {
        $helper->addChildrenToPower('Detect Psionics', [
            'Dispel Psionics',
        ]);
        $helper->addChildrenToPower('Dispel Psionics', [
            'Catapsi', 'Reddopsi',
        ]);
        $helper->addChildrenToPower("Seer's Sight", [
            'Ubiquitous Sight', 'Aura Sight', 'Steadfast Perception',
        ]);
        $helper->addChildrenToPower('Clairvoyant Sense', [
            'Divination', 'Metafaculty',
        ]);
        $helper->addChildrenToPower('Precognition', [
            'Danger Sense', 'Combat Sense', 'Contingency', 'Bend Reality',
        ]);
        $helper->addChildrenToPower('Call to Mind', [
            'Simulate Skill', 'Simulate Feat', 'Incarnate', 'Hypercognition',
        ]);
        $helper->addChildrenToPower('Incarnate', [
            'Contingency',
        ]);
        $helper->addChildrenToPower('Divination', [
            'Metafaculty',
        ]);
    }

    protected function processPsychokinesis(SeedHelper $helper): void
    {
        $helper->addChildrenToPower('Telekinesis', [
            'Matter Agitation', 'Inertial Armor', 'Deceleration',
            'Control Air', 'Control Object', 'Levitate',
            'Air Walk', 'Immovability', 'Telekinetic Thrust',
            'Fly', 'Inertial Barrier', 'Ultrablast',
            'Control Body',
        ]);
        $helper->addChildrenToPower('Cryokinesis', [
            'Ice Armor', 'Cold Absorption',
        ]);
        $helper->addChildrenToPower('Pyrokinesis', [
            'Ring of Fire', 'Flame Absorption',
        ]);
        $helper->addChildrenToPower('Electrokinesis', [
            'Shock Field', 'Electricity Absorption',
        ]);
        $helper->addChildrenToPower('Photokinesis', [
            'Light Absorption',
        ]);
        $helper->addChildrenToPower('Sonickinesis', [
            'Control Sound', 'Sound Absorption',
        ]);
        $helper->addChildrenToPower('Matter Agitation', [
            'Disintegrate', 'Matter Manipulation', 'True Creation',
        ]);
        $helper->addChildrenToPower('Energy Adaptation', [
            'Energy Conversion',
        ]);
        $helper->addChildrenToPower('Dispel Psionics', [
            'Intellect Fortress',
        ]);
    }

    protected function processPsychoMetabolism(SeedHelper $helper): void
    {
        $helper->addChildrenToPower('Body Adjustment', [
            'Expansion', 'Thicken Skin', 'Venom', 'Vigor',
            'Acid', 'Animal Sight', 'Bio-electricity', 'Chameleon', 'Compression', 'Extend Limb', 'Heal', 'Physical Augmentation',
            'Body Purification', 'Wings',
            'Metamorphosis',
            'Fuse Flesh', 'Regeneration',
            'Assimilate', 'Fission', 'Fusion',
        ]);
        $helper->addChildrenToPower('Burst', [
            'Haste',
        ]);
        $helper->addChildrenToPower('Drain Vigor', [
            'Psychic Drain', 'Drain Life',
            'Wither',
        ]);
        $helper->addChildrenToPower('Fuse Flesh', [
            'Fusion',
        ]);
    }

    protected function processPsychoportation(SeedHelper $helper): void
    {
        $helper->addChildrenToPower('Shift', [
            'Call Object', 'Dissipating Touch',
            'Dimension Swap', 'Space Hop',
            'Dimension Slide', 'Time Hop',
            'Dimension Door', 'Dismissal',
            'Teleport',
        ]);
        $helper->addChildrenToPower('Teleport', [
            'Baleful Sending', 'Teleport Trigger',
            'Plane Shift',
            'Etherealness',
            'Genesis',
        ]);
        $helper->addChildrenToPower('Baleful Sending', [
            'Destructive Teleport',
        ]);
        $helper->addChildrenToPower('Space Hop', [
            'Time Hop', 'Teleport',
        ]);
        $helper->addChildrenToPower('Time Hop', [
            'Temporal Acceleration',
            'Quintessence',
            'Time Regression',
        ]);
        $helper->addChildrenToPower('Astral Traveler', [
            'Astral Caravan',
        ]);
        $helper->addChildrenToPower('Astral Caravan', [
            'Genesis',
        ]);
    }

    public function processTelepathy(SeedHelper $helper): void
    {
        $helper->addChildrenToPower('Empathy', [
            'Sense Minds',
        ]);
        $helper->addChildrenToPower('Dominate', [
            'Mind Switch',
            'Insanity',
            'Mind Seed',
            'Psychic Chirurgery',
        ]);
    }
}

/**
 * Some psionic power ideas
 */
/*

- Clairsentience
    - Remote Scrying
    - Object Reading
    - Psionic Disruption
- Psychokinesis
    - Force Fields/Attack
    - Energy Manipulation
    - Delicate Manipulation
- Psychometabolism
    - Body Modification
    - Enhanced Abilities
    - Healing
- Psychoportation
    - Teleporting items to self
    - Teleporting to somewhere else
    - Time
- Telepathy
    - Psionic Combat
    - Mind Reading
    - Mind Manipulation
- Metacreativity
    - Astral Constructs
    - Matter Creation
    - Matter Manipulation

*/
