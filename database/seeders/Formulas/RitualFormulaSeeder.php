<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class RitualFormulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $formula                = new Formula;
        $formula->name          = 'Ritual of Soul Harvesting';
        $formula->type          = 'Ritual';
        $formula->level         = '14';
        $formula->rarity        = 'Rare';
        $formula->crafting_time = '3 hours';
        $formula->activation    = 'Sacrificial slaying of a living humanoid';
        $formula->description   = "<p>This Ritual can be performed for the following purposes</p>
<ul>
    <li>To harvest the soul of the sacrificed creature. The soul can be used as currency in the Lower Planes (and in some cases, sent directly to a specific entity), used to recharge a lich, or as magical components in certain items and spells</li>
    <li>To prevent the sacrificed creature from being brought back to life</li>
</ul>
<p>The humanoid to be sacrificed need not be willing, but must be slain in a single blow. As part of the time spent to perform the Ritual, you gain insight to where to best strike. Your killing strike deals x10 Damage (after the required 3 hours of preparation). If this fails to kill the creature, the sacrifice fails.</p>
<p>You must prepare a special container to hold the soul once the sacrifice is complete. Various spells and magic items can be used. Below is a short list. If there is no way to contain the soul, then it is free to travel to it's final destination in the Outer Planes</p>
<ul>
    <li>Soul Cage (Spell)</li>
    <li>A Soul Bag (Formula)</li>
    <li>A Lich's Touch Attack (in which case the soul is consumed by the lich)</li>
    <li>The presence of a Powerful Fiend (such as a Balor, Pit Fiend, or a Night Hag). The Fiend takes the soul upon the killing blow.</li>
</ul>";
        $helper->saveFormula($formula, ['Ritual', 'Evil'], [
            'skills'    => ['Religion' => ['dc' => 15, 'meta' => 'Sacrifice']],
            'materials' => ['Silver' => ['meta' => 'The dagger used to make the killing blow must be made of silver']],
            'spells'    => ['Cause Wounds'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Ritual of Mummification';
        $formula->type          = 'Ritual';
        $formula->level         = '11';
        $formula->rarity        = 'Rare';
        $formula->crafting_time = '40 days';
        $formula->activation    = 'Evisceration and desiccation of a willing or bound humanoid caster';
        $formula->description   = "<p>This Ritual is performed to achieve a dark form of divine immortality, transforming the target into an undying Mummy Lord who retains their intelligence, memories, and spellcasting abilities.</p>
<p>Because the physical demands of this ritual require complex surgical extraction and constant alchemical maintenance, it cannot be performed entirely alone. The target requires at least one assistant (The Embalmer) to execute the physical procedures while the target provides the spiritual anchor or prepares automated magical triggers.</p>
<p>The Ritual requires the following items</p>
<ul>
    <li>Blessed Canopic Jars. 4 ornate, enchanted stone jars to hold the extracted organs (2,000 gp)</li>
    <li>Natron Salts and Resins. Alchemical compounds used to dehydrate and preserve the muscle tissue (1,000 gp)</li>
    <li>Enchanted Linen Wraps. Linens infused with necrotic oils to protect the outer flesh (500 gp)</li>
    <li>Onyx Scribing Ink. Ink infused with powdered onyx used for heart runes (1,500 gp)</li>
    <li>Consecrated Tomb Alter. A defiled, unholy altar ground to anchor the soul (5,000 gp)</li>
</ul>
<p>The transformation process requires the following sequential phases:</p>
<ul>
    <li><strong>Phase 1: Scribing the Heart (Day 1).</strong> Runes of binding are painted onto the target's chest over the heart using specialized onyx ink. A 5th-level Geas spell must be cast upon the target to lock their soul to their physical remains.</li>
    <li><strong>Phase 2: Evisceration (Day 1).</strong> While the target is conscious or magically suspended, their lungs, stomach, liver, and intestines are surgically removed. The brain is extracted and discarded. Crucially, the heart must remain untouched inside the chest cavity as it serves as the nexus for the Mummy Lord's rejuvenation.</li>
    <li><strong>Phase 3: Consecration of the Jars (Day 1).</strong> The extracted organs are placed into four separate canopic jars. Animate Dead and Contagion must be cast into the jars simultaneously to curse the flesh and bind the soul's physical anchors to the vessels.</li>
    <li><strong>Phase 4: Desiccation (Days 2-40).</strong> The body is entirely packed in alchemical natron salts and resins for 40 days to dehydrate the muscle tissue, followed by tight wrapping in enchanted linens soaked in necrotic oils.</li>
    <li><strong>Phase 5: The Final Ignition (Day 40).</strong> At the climax of the 40th day, a 6th-level Harm or Create Undead spell must be cast upon the wrapped body to sever the last ties to mortality. The target must then succeed on a DC 15 CHA Save. On a success, they rise 24 hours later as a Mummy Lord. On a failure, they die permanently and rise as a mindless undead under the DM's control.</li>
</ul>";

        $helper->saveFormula($formula, ['Ritual', 'Necromancy', 'Evil'], [
            'skills'    => [
                'Medicine' => ['dc' => 17, 'meta' => 'Required by the assistant to flawlessly extract organs without killing the subject prematurely'],
                'Religion' => ['dc' => 15, 'meta' => 'Required to accurately scribe the binding runes of the dark deity'],
            ],
            'spells'    => ['Geas', 'Animate Dead', 'Contagion', 'Harm'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Ritual of the Shipsworn';
        $formula->type          = 'Ritual';
        $formula->level         = 12;
        $formula->rarity        = 'Rare';
        $formula->crafting_time = '1 day';
        $formula->activation    = 'A specialized Wychlaran (Witch) ritual conducted upon a willing individual, followed by containment within a ventilated mast chest';
        $formula->description   = "<p>This dark, transformative ritual preserves the spirit of a willing native (most commonly individuals suffering from a wasting disease or debilitating condition) by permanently bonding their essence into the structure of a vessel. Rather than passing into the afterlife, the individual's living, breathing body is locked away into a ventilated strongbox fixed directly to the ship's mast, while their consciousness expands to become the vessel's permanent helmsman, eyes, and ears.</p>
<p>Because the transformation requires extreme precision to anchor the fading soul without letting it slip into death, it relies heavily on stable regional magic. A singular spellcaster leads the chanting, but the subject must maintain absolute willingness throughout the transition as their physical senses are stripped away and replaced by the ship's timbers.</p>
<p>The Ritual requires the following items</p>
<ul>
    <li>Ventilated Strong Chest. A heavily reinforced, specially aerated ironbound chest permanently bolted to the base of the mast to house the physical body (500 gp)</li>
    <li>Wychlaran Anointing Oils. Rare aromatic unguents blessed by the wise old women to preserve the flesh from decay during its eternal confinement (1,000 gp)</li>
    <li>Keel-Binding Runes. Specialized onyx and silver leaf compounds used to scribe sensory pathways across the ship's hull (1,500 gp)</li>
</ul>
<p>The binding process requires the following sequential phases:</p>
<dl>
    <dt>Phase 1: Anointing the Willing (Dawn).</dt> <dd>The Wychlaran cleanse the willing subject and cover their flesh in preservation oils while painting matching alignment glyphs onto the ship's main steering mechanism.</dd>
    <dt>Phase 2: Scribing the Timber (Midday).</dt> <dd>The primary caster weaves runes along the interior ribs of the hull, creating a magical network that mimics the humanoid nervous system, allowing the ship to eventually feel the touch of the wind and water.</dd>
    <dt>Phase 3: The Severing Chant (Dusk).</dt> <dd>As the circle initiates the core incantation, a 5th-level Geas spell is channeled into the subject, locking their mind into a singular, eternal directive: absolute loyalty to the vessel and the defense of Rashemi waters.</dd>
    <dt>Phase 4: Confinement (Midnight).</dt> <dd>The subject's physical body is permanently placed inside the mast-affixed ventilated strong chest. The chest is sealed with binding wards, leaving the flesh secure and breathing while cutting off its connection to external physical stimuli.</dd>
    <dt>Phase 5: The Shipsworn Awakening (Dawn of Day 2).</dt> <dd>At the first light of dawn, the target must succeed on a DC 15 CHA Save to project their consciousness successfully into the wood. On a success, the vessel transforms into a 'Witchboat' (Arshula). On a failure, the soul passes away entirely, leaving behind a dead hull and a lifeless corpse inside the chest.</dd>
</dl>
<p><strong>Ritual Benefits:</strong></p>
<p>Upon a successful completion of Phase 5, the vessel breaks its ties to ordinary physics and becomes a true magical extension of the bound soul, granting the following regional properties:</p>
<ul>
    <li>The vessel no longer requires a physical crew or oarsmen to move; the shipsworn acts as the permanent pilot, controlling the ship flawlessly through simple verbal commands or direct thoughts.</li>
    <li>The shipsworn gains the supernatural ability to manifest localized gusts of wind directly into the vessel's sails, allowing the craft to maintain a steady speed of 30 feet upstream or downstream even under completely unidal conditions.</li>
    <li>If the bound shipsworn was a practitioner of magic prior to confinement, the vessel itself can channel their residual energy to cast defensive spells, allowing the boat to perform actions such as blasting lines of lightning or summoning protective elementals directly from its bow.</li>
</ul>
<p>The leader of the circle must have the Communal Enhancements Feat and must cast Animate with Spirit, Commune with Nature, and Geas. All other spells can come from the 2 other Circle Participants.</p>";
        $helper->saveFormula($formula, ['Ritual', 'Enchantment', 'Necromancy', 'Circle Magic'], [
            'feats'  => ['Communal Enhancements'],
            'spells' => [
                'Geas', 'Commune with Nature', 'Control Water', 'Gentle Repose', 'Animate Objects', 'Animate with Spirit',
            ],
        ]);
    }
}
