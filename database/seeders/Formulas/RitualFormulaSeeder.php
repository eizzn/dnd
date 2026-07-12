<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class RitualFormulaSeeder extends Seeder
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
    <li><strong>Phase 5: The Final Ignition (Day 40).</strong> At the climax of the 40th day, a 6th-level Harm or Create Undead spell must be cast upon the wrapped body to sever the last ties to mortality. The target must then succeed on a DC 15 Charisma saving throw. On a success, they rise 24 hours later as a Mummy Lord. On a failure, they die permanently and rise as a mindless undead under the DM's control.</li>
</ul>";

        $helper->saveFormula($formula, ['Ritual', 'Necromancy', 'Evil'], [
            'skills'    => [
                'Medicine' => ['dc' => 17, 'meta' => 'Required by the assistant to flawlessly extract organs without killing the subject prematurely'],
                'Religion' => ['dc' => 15, 'meta' => 'Required to accurately scribe the binding runes of the dark deity'],
            ],
            'spells'    => ['Geas', 'Animate Dead', 'Contagion', 'Harm'],
        ]);

    }
}
