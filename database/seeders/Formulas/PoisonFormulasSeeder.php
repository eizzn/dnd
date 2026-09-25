<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PoisonFormulasSeeder extends Seeder
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

        $formula              = new Formula;
        $formula->name        = 'Ajida';
        $formula->type        = 'Poison';
        $formula->level       = 7;
        $formula->price       = '1,000 gp';
        $formula->method      = 'Ingested';
        $formula->bulk        = 'L';
        $formula->description = '<p>This odorless and colorless liquid causes permanent visual degradation and eventual blindness.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>Permanent until cured</dd>
    <dt>Stage 1</dt> <dd>Dazzled condition and -2 penalty to visual Spot/Perception checks (1 hour) (CON DC 16)</dd>
    <dt>Stage 2</dt> <dd>Blinded condition (Permanent until cured by Remove Blindness/Deafness or Heal) (CON DC 18)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => '22', 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Arsenic';
        $formula->type        = 'Poison';
        $formula->price       = '75 gp';
        $formula->level       = 1;
        $formula->method      = 'Ingested';
        $formula->bulk        = 'L';
        $formula->description = '<p>The victim is unable to reduce their sickened condition by any means while this poison remains active in their system.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>5 minutes</dd>
    <dt>Stage 1</dt> <dd>1 Poison damage and Sickened 1 (1 minute) (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>1D4 Poison damage and Sickened 2 (1 minute) (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>2D4 Poison damage and Sickened 3 (1 minute) (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ascomoid Spores Toxin';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '400 gp';
        $formula->method      = 'Inhaled';
        $formula->bulk        = 'L';
        $formula->description = '<p>This finely ground fungal powder, extracted from hazardous underdark mushrooms, instantly billows into a cloud that fractures the logical faculties of the mind.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>12 rounds</dd>
    <dt>Stage 1</dt> <dd>Confused condition (2D4 rounds. If the saving throw is a Critical Failure, the duration increases to 3D4 rounds) (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Inhaled', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 18, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 17],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Aspic Toxin';
        $formula->type        = 'Poison';
        $formula->level       = 4;
        $formula->price       = '600 gp';
        $formula->method      = 'Injury';
        $formula->bulk        = 'L';
        $formula->description = '<p>This quick-acting neurotoxin, distilled from the harvested glands of aggressive vipers, thickens the blood and induces violent nausea upon entering the bloodstream.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>4 rounds</dd>
    <dt>Stage 1</dt> <dd>Sickened 1 (2 rounds) (CON DC 14)</dd>
    <dt>Stage 2</dt> <dd>2D4 Poison damage and Sickened 1 (1 round) (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 18, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 12],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = "Assassin's Blood";
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '150 gp';
        $formula->method      = 'Ingested';
        $formula->bulk        = 'L';
        $formula->description = "<p>Assassin's Blood is a foul concoction brewed from commonly gathered toxic herbs. (Five successful DC 15 Nature checks over downtime will gather enough raw materials for one batch).</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>24 hours</dd>
    <dt>Stage 1</dt> <dd>1D12 Poison damage and Sickened 1 (1 hour) (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Sickened 2 (24 hours) (CON DC 13)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 14, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Azure Lily Pollen Poison';
        $formula->type        = 'Poison';
        $formula->level       = 11;
        $formula->price       = '1,500 gp';
        $formula->method      = 'Inhaled';
        $formula->bulk        = 'L';
        $formula->description = '<p>This fine, iridescent blue powder is harvested from the rare Azure Lily. When shattered or exposed to air, it forms an immediate toxic cloud that attacks the central nervous system, freezing muscles and seizing limbs.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>2D4 hours</dd>
    <dt>Stage 1</dt> <dd>Nauseated (1 minute) (CON DC 15)</dd>
    <dt>Stage 2</dt> <dd>Paralyzed (2D4 hours) (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 20, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 17],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Bardan Ruqad';
        $formula->type        = 'Poison';
        $formula->level       = 9;
        $formula->price       = '1,800 gp';
        $formula->method      = 'Injury';
        $formula->bulk        = 'L';
        $formula->description = "<p>Bardan ruqad, which translates to 'Cold Sleep' in Midani, is an enchanted, highly sought-after chemical compound that overrides the physical form, forcing a total metabolic shutdown.</p>
<p>Victims under the effect remain entirely helpless but fully conscious of their surroundings for up to 10 minutes, after which they succumb to a deep sleep. This poison deals no physical hit point damage.</p>
<p>Uniquely, Bardan ruqad bypasses the standard immunities of undead creatures, though undead targets receive a +5 circumstance bonus to their Save.</p>
<dl>
    <dt>Onset</dt>  <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>10 minutes (paralysis). 4 hours (sleep)</dd>
    <dt>Stage 1</dt> <dd>Enfeebled 1 (1 round) (CON DC 15)</dd>
    <dt>Stage 2</dt> <dd>Paralyzed (10 minutes) (CON DC 15)</dd>
    <dt>Stage 3</dt> <dd>Asleep (4 hours) (CON DC 15)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 20, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 17],
            ],
            'materials' => ['Outsider Blood' => ['quantity' => '5 oz', 'meta' => 'Dao, Djinni, Efreet, or Marid. must be willingly given']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Basilisk Eye';
        $formula->type        = 'Poison';
        $formula->level       = 11;
        $formula->price       = '1,600 gp';
        $formula->method      = 'Injury';
        $formula->bulk        = 'L';
        $formula->description = '<p>This thick calcifying oil is distilled from the concentrated fluids of a freshly harvested basilisk eye. Upon entering the bloodstream, it rapidly turns soft tissue and muscle into rigid stone.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>Permanent until cured</dd>
    <dt>Stage 1</dt> <dd>Petrified condition. The victim can attempt a new saving throw once every hour; a success ends the effect. Otherwise, it remains permanent until cured by Stone to Flesh or Break Enchantment. (CON DC 12)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 17, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 18],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Belladonna Poison';
        $formula->type        = 'Poison';
        $formula->level       = 2;
        $formula->price       = '150 gp';
        $formula->method      = 'Ingested';
        $formula->bulk        = 'L';
        $formula->description = '<p>Commonly known as Deadly Nightshade, this toxic plant creates severe hallucinations and high fever. Belladonna can also violently purge the curse of Lycanthropy from a creature\'s bloodstream.</p>
<p>If an afflicted creature consumes a fresh sprig of Belladonna picked within the last 7 days and successfully survives the progression all the way to Stage 3, the Lycanthropy curse is broken. This must be done before the creature experiences their first full moon transformation.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>24 hours</dd>
    <dt>Stage 1</dt> <dd>Dazzled (1 hour) (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>1D4 Poison damage and Sickened 1 (1 hour) (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>1D4 Poison damage, Sickened 1, and Confused (1 minute) (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills'    => ['Crafting' => ['dc' => 10, 'meta' => 'Poison Making']],
            'materials' => ['Belladonna' => ['quantity' => '1 sprig']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Black Adder Venom';
        $formula->type        = 'Poison';
        $formula->level       = 1;
        $formula->price       = '120 gp';
        $formula->method      = 'Injury';
        $formula->bulk        = 'L';
        $formula->description = '<p>A standard, mildly corrosive neurotoxin harvested from common wild adders and vipers.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>3 rounds</dd>
    <dt>Stage 1</dt> <dd>1D2 Poison damage (1 round) (CON DC 12)</dd>
    <dt>Stage 2</dt> <dd>1D2 Poison damage (1 round) (CON DC 12)</dd>
    <dt>Stage 3</dt> <dd>1D2 Poison damage (1 round) (CON DC 12)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => ['Crafting' => ['dc' => 12, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Black Lotus Extract';
        $formula->type        = 'Poison';
        $formula->level       = 15;
        $formula->price       = '5,000 gp';
        $formula->method      = 'Contact';
        $formula->bulk        = 'L';
        $formula->description = "<p>Distilled from the black, oil-secreting petals of the legendary Black Lotus. Merely touching a drop of this fluid initiates a rapid, agonizing decay of the victim's life force.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>1D6 Poison damage, 1D6 CON damage, and Drained 1 (1 round) (CON DC 23)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison damage, 1D6 CON damage, and Drained 1 (1 round) (CON DC 23)</dd>
    <dt>Stage 3</dt> <dd>1D6 Poison damage, 1D6 CON damage, and Drained 2 (1 round) (CON DC 23)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Virulent', 'Plant'], [
            'skills' => ['Crafting' => ['dc' => 25, 'meta' => 'Poison Making']], // Bumped to DC 25 to reflect endgame mastercrafting complexity
        ]);

        $formula              = new Formula;
        $formula->name        = 'Black Oil';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '500 gp';
        $formula->method      = 'Ingested';
        $formula->bulk        = 'L';
        $formula->description = '<p>This thick obsidian-colored chemical fluid only affects mammalian biology, flooding the circulatory system and turning the victim\'s pupils entirely black. Though it completely robs the user of sight, it densifies muscular tissue and deadens nerve endings, frequently used by elite operatives in anticipation of capture and torture.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>4 hours</dd>
    <dt>Stage 1</dt> <dd>Blinded condition and Resistance to Bludgeoning damage 5 (1D4 hours) (CON DC 20)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 21, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Blackroot Poison';
        $formula->type        = 'Poison';
        $formula->level       = 4; // Balanced for Tier 1 finale / Tier 2 entry
        $formula->price       = '150 gp';
        $formula->method      = 'Ingested';
        $formula->bulk        = 'L';
        $formula->description = '<p>Harvested from dark, fibrous tuber roots deep within the Underdark, Blackroot can be distilled into a paralyzing toxin or fermented into a thick, highly nourishing beverage known as Blackroot Beer. A single tankard of this beer provides enough caloric density to completely replace a full daily meal.</p>
<p>A creature can permanently become immune to Blackroot Poison by consuming trace amounts of the toxin, or drinking Blackroot Beer regularly, over a prolonged downtime period of at least six months.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>10 rounds</dd>
    <dt>Stage 1</dt> <dd>Sluggish 4 (-20 ft movement speed penalty, and a -4 penalty to DEX Saves and Dexterity checks) (5 rounds) (CON DC 12)</dd>
    <dt>Stage 2</dt> <dd>Paralyzed (5 rounds) (CON DC 12)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills'    => ['Crafting' => ['dc' => 13, 'meta' => 'Poison Making']],
            'materials' => ['Blackroot' => ['quantity' => 'one plant']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Blightburn Resin';
        $formula->type        = 'Poison';
        $formula->level       = 11;
        $formula->price       = '2,200 gp';
        $formula->method      = 'Contact';
        $formula->bulk        = 'L';
        $formula->description = '<p>This tacky, pitch-black hardened sap is harvested from subterranean or blighted trees infected by fungal diseases and subsequently exposed to open volcanic flames. The resulting resin burns hot with radioactive alchemical energy, blistering skin upon the slightest physical touch.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>7D6 Poison damage (1 round) (CON DC 20)</dd>
    <dt>Stage 2</dt> <dd>8D6 Poison damage (1 round) (CON DC 20)</dd>
    <dt>Stage 3</dt> <dd>12D6 Poison damage (1 round) (CON DC 20)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => ['Crafting' => ['dc' => 22, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Bloodberry Poison';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '150 gp';
        $formula->method      = 'Injury';
        $formula->bulk        = 'L';
        $formula->description = '<p>A viscous crimson extract distilled from the crushed fruit of a thorny bloodberry bush, popular among scouts for its ability to steadily sap an opponent\'s stamina over a prolonged skirmish.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>3 rounds</dd>
    <dt>Stage 1</dt> <dd>1 CON damage (1 round) (CON DC 15)</dd>
    <dt>Stage 2</dt> <dd>1 CON damage (1 round) (CON DC 15)</dd>
    <dt>Stage 3</dt> <dd>1 CON damage (1 round) (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Plant'], [
            'skills'    => ['Crafting' => ['dc' => 15, 'meta' => 'Poison Making']],
            'materials' => ['Bloodberry Bush' => ['meta' => 'Berries from the Bloodberry Bush']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Blue Whinnis';
        $formula->type        = 'Poison';
        $formula->level       = 4;
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->bulk        = 'L';
        $formula->description = '<p>This common, deeply fibrous Underdark root gives off a distinct alchemical signature that any trained herbalist will recognize immediately upon sight.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>10 minutes</dd>
    <dt>Stage 1</dt> <dd>1 CON Damage (CON DC 14)</dd>
    <dt>Stage 2</dt> <dd>Unconscious (6D10 minutes) (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 12],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Blue Frog Paste';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '500 gp';
        $formula->method      = 'Injury';
        $formula->bulk        = 'L';
        $formula->description = '<p>The otherwise harmless bright blue frogs of the Serpent Hills secrete a unique poison that the lizardfolk of Kalran have learned to harvest. Mixing it with other natural stabilizing substances produces a highly toxic oil suitable for applying to weapons.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>2D6 minutes</dd>
    <dt>Stage 1</dt> <dd>1D4 DEX damage (1 round) (CON DC 17)</dd>
    <dt>Stage 2</dt> <dd>Paralyzed condition (2D6 minutes) (CON DC 17)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 17, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14, 'meta' => 'Blue Frog'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Bluluka';
        $formula->type        = 'Poison';
        $formula->level       = 2;
        $formula->price       = '200 gp';
        $formula->method      = 'Contact';
        $formula->bulk        = 'L';
        $formula->description = '<p>This bluish, sour-smelling substance acts as a slow-burning corrosive agent. The acid scars raw tissue, leaving a bright blue, indelible stain at the point of contact. While the immediate hit point damage can be healed by standard mundane rest, the vibrant blue tracking mark can only be purged through magical restoration.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>1D2 Acid damage and the target is branded with a permanent, indelible blue mark on their skin (1 round) (CON DC 12)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Plant', 'Acid'], [
            'skills' => [
                'Crafting' => ['dc' => 10, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 12],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Boneshard Paste';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '750 gp';
        $formula->method      = 'Contact';
        $formula->bulk        = 'L';
        $formula->description = '<p>This chalky, luminous paste is a highly specialized alchemical compound designed specifically to destroy necrotic tissue. It ignores the standard poison immunities of undead creatures. Any undead creature brushed or splashed by this paste must struggle to resist its purifying effects.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>3 rounds</dd>
    <dt>Stage 1</dt> <dd>The target takes a -4 penalty on all melee attack rolls, Strength checks, and STR Saves (1 round) (WIS DC 13)</dd>
    <dt>Stage 2</dt> <dd>1D6 Positive energy damage from the catalyzed holy water core (1 round) (WIS DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Undead'], [
            'skills' => [
                'Arcana'   => ['dc' => 15, 'meta' => 'Alchemy'],
                'Religion' => ['dc' => 12, 'meta' => 'Undead'],
            ],
            'formulas' => [
                'Holy Water' => ['meta' => '1 vial'],
            ],
            'materials' => [
                'Bone' => ['meta' => "Powdered using an alchemist's kit or poison maker's kit"],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Bralia';
        $formula->type        = 'Poison';
        $formula->level       = 2;
        $formula->price       = '250 gp';
        $formula->method      = 'Ingested';
        $formula->bulk        = 'L';
        $formula->description = '<p>Bralia manifests as an odorless, creamy liquid that possesses a sharp, unmistakably acidic taste upon swallowing. Intentionally non-lethal to healthy targets, it is favored by political factions and criminal syndicates to send a stern message or warning rather than to execute.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>2 rounds</dd>
    <dt>Stage 1</dt> <dd>1D4 Poison damage (1 round) (CON DC 16)</dd>
    <dt>Stage 2</dt> <dd>1D4 Poison damage (1 round) (CON DC 16)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 12, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Breath of the Desert';
        $formula->type        = 'Poison';
        $formula->level       = 9;
        $formula->price       = '700 gp';
        $formula->method      = 'Inhaled';
        $formula->bulk        = 'L';
        $formula->description = '<p>This magical, airborne toxin fills the victim’s senses with an illusory aura of suffocating heat, inducing abnormal sweating, extreme dehydration, and a slow evaporation of mental clarity.</p>
<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>20 hours</dd>
    <dt>Stage 1</dt> <dd>1D4 WIS drain. This structural mental degradation cannot be recovered naturally through rest, requiring a Restoration spell or equivalent magic to heal. (CON DC 18)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 18, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 20],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Brimstone Fumes';
        $formula->type        = 'Poison';
        $formula->level       = 16;
        $formula->price       = '1,200 gp';
        $formula->method      = 'Inhaled';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation; no cost';
        $formula->description = '<p>Searing, sulfurous vapors harvested directly from the volcanic forges of the Lower Planes. Once released, these toxic clouds bypass standard biological boundaries to aggressively melt flesh and drain physical strength alike.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>6D6 Poison damage (1 round) (CON DC 20)</dd>
    <dt>Stage 2</dt> <dd>7D6 Poison damage and Enfeebled 1 (1 round) (CON DC 20)</dd>
    <dt>Stage 3</dt> <dd>8D6 Poison damage and Enfeebled 3 (1 round) (CON DC 20)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison', 'Outer Planes'], [
            'skills' => ['Crafting' => ['dc' => 28, 'meta' => 'Alchemy and Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Burnt Othur Fumes';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '500 gp';
        $formula->rarity      = 'Rare';
        $formula->method      = 'Inhaled';
        $formula->bulk        = 'L';
        $formula->description = '<p>Distilled from the rare, charred stalks of Underdark Ash Chives, these volatile fumes attack the respiratory system. After a delayed incubation period, it triggers an immediate, suffocating choking fit that continuously damages the lungs until fought off.</p>
<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>1 minute (10 rounds)</dd>
    <dt>Stage 1</dt> <dd>3D6 Poison damage (1 round) (CON DC 12)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison damage (1 round) (CON DC 12)</dd>
    <dt>Stage 3</dt> <dd>1D6 Poison damage. The victim remains trapped in Stage 3 and takes this damage every round until they successfully pass a saving throw. (CON DC 12)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Poison', 'Inhaled'], [
            'skills' => [
                'Crafting' => ['dc' => 16, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 15],
            ],
            'materials' => ['Ash Chives' => ['quantity' => '10 bulbs']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Carrion Crawler Mucus Poison';
        $formula->type        = 'Poison';
        $formula->level       = 4;
        $formula->price       = '200 gp';
        $formula->method      = 'Contact';
        $formula->bulk        = 'L';
        $formula->description = '<p>A sticky, pale secretions harvested from the facial tentacles of a carrion crawler. When smeared onto an item or weapon, it numbs living nerve endings, causing minor systemic shock followed by brief, total muscular paralysis.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 minute</dd>
    <dt>Stage 1</dt> <dd>1D4 Poison damage (1 round) (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Paralyzed condition (1 round) (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 14, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 12],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Caustar';
        $formula->type        = 'Poison';
        $formula->level       = 1;
        $formula->price       = '250 gp';
        $formula->method      = 'Injury';
        $formula->bulk        = 'L';
        $formula->description = '<p>Caustar is a thick yellow cream distilled from a common poisonous marsh weed, favored heavily by bounty hunters and mercenaries. Upon entering the bloodstream, it causes agonizing, localized neurological pain.</p>
<p>Damage dealt by this toxin is non-fatal and cannot reduce the target below 1 hit point. As soon as the poison completes its full duration or is neutralized, the target automatically recovers 1 hit point per round until all damage inflicted exclusively by Caustar is restored.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>3 rounds</dd>
    <dt>Stage 1</dt> <dd>1D6 Poison damage (1 round) (CON DC 11)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison damage (1 round) (CON DC 11)</dd>
    <dt>Stage 3</dt> <dd>1D6 Poison damage (1 round) (CON DC 11)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 12, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 10],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Celestial Essence';
        $formula->type        = 'Poison';
        $formula->level       = 9;
        $formula->price       = '900 gp';
        $formula->method      = 'Contact';
        $formula->bulk        = 'L';
        $formula->crafting    = '<p>Angel Essence must be extracted from a willing extraplanar Archon or high-tier Celestial using the required Arcana check.</p>';
        $formula->description = '<p>A specialized, sanctified alchemical fluid that overrides the standard poison immunities of unlife. Any undead creature brushed or splashed by this contact essence must struggle to resist its purifying radiance.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>1 minute</dd>
    <dt>Stage 1</dt> <dd>The undead creature is completely unable to cast spells, manifest powers, or activate any spell-like or supernatural abilities (1 minute) (WIS DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Undead'], [
            'skills' => [
                'Arcana'   => ['dc' => 18],
                'Crafting' => ['dc' => 17, 'meta' => 'Poison Making'],
            ],
            'materials' => [
                'Angel Essence' => ['meta' => '1 dose'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Centipede Venom';
        $formula->type        = 'Poison';
        $formula->level       = 2;
        $formula->price       = '120 gp';
        $formula->method      = 'Injury';
        $formula->bulk        = 'L';
        $formula->description = '<p>A thin, paralyzing neurotoxin harvested from the mandibles of giant centipedes. It attacks the motor functions of the nervous system, rapidly inducing muscle stiffness and breaking defensive postures.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>3 rounds</dd>
    <dt>Stage 1</dt> <dd>1D4 Poison damage (1 round) (CON DC 14)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison damage and the target is Flat-Footed (1 round) (CON DC 14)</dd>
    <dt>Stage 3</dt> <dd>1D8 Poison damage, Flat-Footed, and Sluggish 1 (1 round) (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 12, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 15],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Curare';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '150 gp';
        $formula->method      = 'Injury';
        $formula->bulk        = 'L';
        $formula->description = '<p>Harvested from the bark of rare tropical vines, Curare acts as a rapid muscle relaxant that blocks neurological pathways to the limbs. While exceptionally easy for healthy organisms to resist, a single moment of physical weakness leads to complete systemic collapse.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>1 minute (10 rounds)</dd>
    <dt>Stage 1</dt> <dd>Paralyzed condition. The victim must repeat this saving throw at the start of each of their turns for the maximum duration; a single successful save completely neutralizes the poison and ends the effect early. (CON DC 9)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 10, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 12],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Coulabine';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '800 gp';
        $formula->method      = 'Inhaled';
        $formula->bulk        = 'L';
        $formula->description = '<p>This very fine grayish gas, once released, causes a strong acceleration in breathing. Any action more fatiguing than a slow march causes a level of Fatigue.</p>
<dl>
    <dt>Onset</dt> <dd>30 minutes</dd>
    <dt>Maximum Duration</dt> <dd>8 hours</dd>
    <dt>Stage 1</dt> <dd>Exhaustion: 1 (1 hour) (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Exhaustion: 2 (1 hour) (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>Exhaustion: 3 (1 hour) (CON DC 13)</dd>
    <dt>Stage 4</dt> <dd>Exhaustion: 4 (1 hour) (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 18, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Cyanide';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '600 gp';
        $formula->method      = 'Ingested';
        $formula->bulk        = 'L';
        $formula->description = '<p>This white, crystalline alchemical salt carries a characteristic odor of bitter almonds. Once dissolved into a beverage and ingested, it cuts off cellular oxygenation, causing total physical collapse and death within seconds.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>4D8 Poison damage (1 round) (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 18, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Cybella Pollen';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '300 gp';
        $formula->method      = 'Inhaled';
        $formula->bulk        = 'L';
        $formula->description = '<p>Breathing the fine, shimmering pollen of this rare flower induces acute hallucinations, filling the victim\'s mind with terrifying illusions of incoming enemy creatures, extreme paranoia, and a suffocating feeling of being watched.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Inhaled', 'Poison', 'Plant'], [
            'skills' => [
                'Nature' => ['dc' => 15, 'meta' => 'Botanical Harvesting'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Dark Reaver Powder';
        $formula->type        = 'Poison';
        $formula->level       = 4;
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->bulk        = 'L';
        $formula->description = '<p>This fine, powdery extract is distilled from toxic Underdark mushrooms. When mixed into food or drink, it dissolves completely, causing violent, agonizing abdominal contractions upon digestion.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>2 rounds</dd>
    <dt>Stage 1</dt> <dd>Sickened 5 (1 round) (CON DC 12)</dd>
    <dt>Stage 2</dt> <dd>5D4 Poison damage and Sickened 1 (1 round) (CON DC 12)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 14, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 12],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Dark Snake';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '500 gp';
        $formula->method      = 'Contact';
        $formula->bulk        = 'L';
        $formula->description = "<p>This insidious poison manifests as a fine, carmine red powder that leaves a distinct colored residue upon surfaces. Once absorbed through skin tissue, it triggers a localized, rapid outbreak of rigid, painful, wart-like growths.</p>
<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>4 days</dd>
    <dt>Stage 1</dt> <dd>Aggressive red warts erupt across the body at the point of contact, reducing the creature's CHA score by 2 for the duration. (4 days) (CON DC 13)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Poison', 'Contact'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Deathblade';
        $formula->type        = 'Poison';
        $formula->level       = 11;
        $formula->price       = '1,600 gp';
        $formula->method      = 'Injury';
        $formula->bulk        = 'L';
        $formula->description = '<p>An exceptionally lethal arachnid neurotoxin highly prized by drow houses and master assassins. It rapidly dissolves the structural walls of the vascular system, inducing catastrophic, agonizing internal bleeding upon entering the bloodstream. This secret formula is traditionally manufactured exclusively by the drow.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>2 rounds</dd>
    <dt>Stage 1</dt> <dd>4D8 Poison damage (1 round) (CON DC 18)</dd>
    <dt>Stage 2</dt> <dd>4D8 Poison damage (1 round) (CON DC 18)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 23, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 15],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Deathcap Powder';
        $formula->type        = 'Poison';
        $formula->level       = 11;
        $formula->price       = '1,200 gp';
        $formula->method      = 'Ingested';
        $formula->bulk        = 'L';
        $formula->description = '<p>The highly toxic underdark deathcap mushroom can be dried, ground, and chemically treated to form a completely flavorless alchemical powder, impossible to detect when dissolved in meals or rich wines.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>3 minutes</dd>
    <dt>Stage 1</dt> <dd>4D6 Poison damage (1 minute) (CON DC 21)</dd>
    <dt>Stage 2</dt> <dd>5D6 Poison damage and Sickened 2 (1 minute) (CON DC 21)</dd>
    <dt>Stage 3</dt> <dd>6D6 Poison damage and Sickened 3 (1 minute) (CON DC 21)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => ['Crafting' => ['dc' => 24, 'meta' => 'Poison Making']], // Raised to reflect master alchemical refinement
        ]);

        $formula              = new Formula;
        $formula->name        = 'Desert Desire';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '250 gp';
        $formula->method      = 'Ingested';
        $formula->description = "<p>This translucent green liquid is distilled from the milk of a rare desert cactus. It induces sudden, severe dehydration, forcing the target's body into rapid shock.</p>
<p><strong>Effect:</strong> A creature that ingests this poison must succeed on a <strong>DC 13 CON Save</strong> or become poisoned.</p>
<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>24 hours (or until cured)</dd>
    <dt>Failed Save (Stage 1)</dt> <dd>The target immediately gains 1 level of exhaustion. While poisoned this way, the target experiences intense thirst, dizziness, and fatigue. The target cannot reduce this exhaustion level by taking a short or long rest unless they consume double their normal daily water requirement during that time.</dd>
    <dt>Repeat Saves</dt> <dd>The target must repeat the saving throw every 8 hours. On a failure, they gain another level of exhaustion. On a success, the effect ends and they can recover normally.</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 15],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = "Devil's Herb";
        $formula->type        = 'Poison';
        $formula->level       = 4;
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>If inhaled, the vapors of this plant cause slight hallucinations for a few hours. Through ingestion, it becomes a severe neural poison causing terrifying hallucinations and a total loss of vocal control.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>12 hours</dd>
    <dt>Stage 1</dt> <dd>Suffer vivid hallucinations (attack rolls against the creature have advantage, its own attacks/checks have disadvantage) and unable to speak or cast spells with verbal components until completing 8 hours of bed rest. After the rest, the creature has no memory of what happened during the hallucination. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Diffenbach';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '500 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This thick, yellowish liquid causes the complete relaxation of the vocal cords of the victim, leaving them physically unable to produce sound or cast spells with verbal components.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>8 hours</dd>
    <dt>Stage 1</dt> <dd>Unable to speak or use verbal spell components for 1d4 hours. (CON DC 16)</dd>
    <dt>Stage 2</dt> <dd>Unable to speak or use verbal spell components for an additional 1d4 hours. (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 16, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Doshenkana';
        $formula->type        = 'Poison';
        $formula->level       = 7;
        $formula->price       = '650 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This poison takes the form of a fine green powder. It causes immediate shortness of breath, severe nausea, rapid vision loss, and violent physical seizures.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>8 hours</dd>
    <dt>Stage 1</dt> <dd>Sickened: 4 for 1d8 hours. On a critical failure, the target is also permanently Blinded until the blindness is magically removed. (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 14, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Dragon Bile';
        $formula->type        = 'Poison';
        $formula->level       = 15;
        $formula->price       = '1,200 gp';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation; no cost';
        $formula->description = '<dl>
    <dt>Saves</dt> <dd>CON DC 34</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>4d6 Poison damage and Sickened 2 (1 round)</dd>
    <dt>Stage 2</dt> <dd>5d6 Poison damage and Sickened 3 (1 round)</dd>
    <dt>Stage 3</dt> <dd>6d6 Poison damage and Sickened 4 (1 round)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 34, 'meta' => 'Alchemy and Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Dream of Ya';
        $formula->type        = 'Poison';
        $formula->level       = 8;
        $formula->price       = '600 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This finely ground purple powder, which can also be dissolved into a liquid, gives off a remarkably sweet and deceiving aroma of fresh grapes.</p>
<dl>
    <dt>Onset</dt> <dd>30 minutes</dd>
    <dt>Maximum Duration</dt> <dd>7 days</dd>
    <dt>Stage 1</dt> <dd>The target is unable to sleep and gains the Fatigued condition. (1 day) (CON DC 24)</dd>
    <dt>Stage 2</dt> <dd>The target remains Fatigued, cannot sleep, and takes a -1 status penalty to all WIS Saves due to sleep deprivation. (1 day) (CON DC 24)</dd>
    <dt>Stage 3</dt> <dd>The target remains Fatigued, cannot sleep, and the status penalty to WIS Saves increases to -2. (1 day) (CON DC 24)</dd>
    <dt>Stage 4</dt> <dd>The target remains Fatigued, cannot sleep, and becomes Stupefied 1 from severe hallucinations. (1 day) (CON DC 24)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 24, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 20],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Drider Tears';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '400 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Despite its name, this poison is developed from the highly reactive saliva of a drider. Upon contacting blood, it causes the victim\'s eyes to swell painfully and turn completely bloodshot, forcing a constant stream of crimson tears down their face.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>Until 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Takes 4 points of Charisma damage. While suffering this damage, the victim takes a -4 penalty on all visual perception checks due to swelling and bloody tears. (CON DC 16)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Poison', 'Injury'], [
            'skills' => [
                'Crafting' => ['dc' => 16, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Droon';
        $formula->type        = 'Poison';
        $formula->level       = 11;
        $formula->price       = '1,600 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This glowing red liquid is extremely powerful but highly volatile. If the poison vial is exposed to fire damage, or if a creature carrying it fails a DEX Save against an explosion, it denatures instantly and becomes useless.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>Takes 7d8 poison damage and is sickened for 1 round. (CON DC 22)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Poison', 'Injury'], [
            'skills' => [
                'Crafting' => ['dc' => 22, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Drow Sleep Poison';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '300 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This iconic poison is typically crafted only by the drow, using ingredients harvested far from the touch of sunlight. If the target critically fails their saving throw (rolls a natural 3 or less on 2D10), they immediately skip to Stage 3.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>Takes 1 point of poison damage and becomes Sluggish 1 (-1 penalty to AC, attack rolls, and DEX Saves) for 1d4 rounds. (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Becomes Sluggish 2 (-2 penalty to AC, attack rolls, and DEX Saves) for 1d4 rounds. (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>Falls unconscious into a deep sleep for 1 hour. The creature can be awoken early if it takes damage or if an ally uses a standard action to shake it awake. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14, 'meta' => 'The Spider Venom must be harvested in a special way'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Dwarfbane';
        $formula->type        = 'Poison';
        $formula->level       = 12;
        $formula->price       = '1,750 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Specifically engineered to bypass resilient physiologies, dwarves do not add their racial bonus to saving throws made against this poison.</p>
<dl>
    <dt>Onset</dt> <dd>3 rounds</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>Takes 3d6 poison damage and becomes Sluggish 3 (-3 penalty to AC, attack rolls, and DEX Saves) for 1 minute. (CON DC 23)</dd>
    <dt>Stage 2</dt> <dd>Takes 1d6 poison damage. (CON DC 23)</dd>
    <dt>Stage 3</dt> <dd>Takes 1d6 poison damage. The target must continue repeating the saving throw every minute; they suffer this damage and remain trapped in Stage 3 on each failed save until the maximum duration expires or the poison is cured. (CON DC 23)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 23, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 20, 'meta' => 'Find and harvest from the Slime Mold'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Emloc';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '600 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This poison takes the form of a thick syrup with a strong, pleasantly sweet taste and the inviting aroma of fresh peaches.</p>
<dl>
    <dt>Onset</dt> <dd>30 minutes</dd>
    <dt>Maximum Duration</dt> <dd>35 minutes</dd>
    <dt>Stage 1</dt> <dd>Takes 1d10 poison damage every 5 minutes for the duration of the stage (lasting 25 + 1d10 minutes). Damage dealt by this poison cannot be healed by natural rest or non-magical medicine, though any form of magical healing removes it normally. (CON DC 17)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Poison', 'Ingested'], [
            'skills' => [
                'Crafting' => ['dc' => 17, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Erwurg';
        $formula->type        = 'Poison';
        $formula->level       = 2;
        $formula->price       = '150 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This light green poison, carefully extracted from a rare forest flower, forces the victim into violent, uncontrollable coughing fits.</p>
<dl>
    <dt>Onset</dt> <dd>2 minutes</dd>
    <dt>Maximum Duration</dt> <dd>15 minutes</dd>
    <dt>Stage 1</dt> <dd>The target is overtaken by severe coughing for 5 + 1d10 minutes. While coughing, they cannot speak or use verbal spell components, automatically fail all Stealth checks, and are Sickened 1. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Poison', 'Ingested', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Essence of Ether';
        $formula->type        = 'Poison';
        $formula->level       = 4;
        $formula->price       = '300 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>A clear, vaporous substance that rapidly puts targets to sleep. When released, it fills a 10-foot cube. A creature subjected to this poison falls unconscious. The creature wakes early if it takes damage or if another creature uses a standard action to shake it awake.</p>
<dl>
    <dt>Onset</dt> <dd>3 rounds</dd>
    <dt>Maximum Duration</dt> <dd>8 hours</dd>
    <dt>Stage 1</dt> <dd>Falls unconscious for 8 hours. (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Poison', 'Inhaled'], [
            'skills'    => [
                'Crafting' => ['dc' => 14, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 13, 'meta' => 'Harvest and process the ether'],
                'Arcana'   => ['dc' => 16],
            ],
            'materials' => ['Frenn Moss' => ['meta' => 'At least 5 oz']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ettercap Poison';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This poison must be harvested from a dead or incapacitated ettercap. It attacks the target\'s nervous system, causing intense nausea and localized tissue damage.</p>
<dl>
    <dt>Onset</dt> <dd>1 turn</dd>
    <dt>Maximum Duration</dt> <dd>1 minute</dd>
    <dt>Stage 1</dt> <dd>Gains the Sickened 2 condition for 1 round. (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Takes 1d8 poison damage and is Sickened 2. The creature can repeat the saving throw at the end of each of its turns, ending the effect on a success. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Poison', 'Injury', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Fluna';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Fluna is a swamp beetle that becomes aggressive only during breeding season in the spring. Administered at high doses, its venom is very dangerous.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>Takes 2d6 poison damage and is Sickened 1 for 1 round. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Garaban';
        $formula->type        = 'Poison';
        $formula->level       = 4;
        $formula->price       = '300 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Red-colored liquid poison that is common among hunters. Quickly puts the victim to sleep. The sleep is natural so anything that would normally wake the target will do so.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>4 minutes</dd>
    <dt>Stage 1</dt> <dd>Falls unconscious into a natural sleep for 1d4 minutes. The target wakes early if it takes damage or if another creature uses a standard action to wake it. (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Poison', 'Injury'], [
            'skills' => [
                'Crafting' => ['dc' => 14, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ghoul Saliva';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '600 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This greenish oil causes rot and paralysis in the limbs of the victim. Elves are immune to this effect.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>12 minutes</dd>
    <dt>Stage 1</dt> <dd>The target becomes paralyzed for 1d6 minutes. (CON DC 16)</dd>
    <dt>Stage 2</dt> <dd>The target remains paralyzed for an additional 1d6 minutes. (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Contact', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 16, 'meta' => 'Poison Making'],
                'Religion' => ['dc' => 17],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Gravedust';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '200 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This specialized alchemical powder only affects Undead creatures. It reacts violently with necrotic energy, destabilizing their physical forms.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>3 hours</dd>
    <dt>Stage 1</dt> <dd>Takes 1d2 positive energy damage and 2 points of Strength damage. (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Suffers a -2 penalty on all attack rolls, saving throws, and skill checks. (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>Takes 6 points of Strength damage. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Undead'], [
            'skills'    => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
            ],
            'materials' => ['Soil' => ['quantity' => 'Hand full', 'meta' => 'Soil from a grave']],
            'spells'    => ['Consecrate'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Green Dragon Bile';
        $formula->type        = 'Poison';
        $formula->level       = 13;
        $formula->price       = '2,500 gp';
        $formula->method      = 'Inhaled';
        $formula->rarity      = 'Rare';
        $formula->description = '<p>This greenish heavy gas is one of the deadliest poisons. When released, it rapidly fills a 10-foot cube. Fortunately, due to the extreme difficulty in acquiring the toxic raw materials, its high price makes it an exceptionally rare encounter.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>Takes 5d8 poison damage and is Sickened 4 for 1 round. (CON DC 25)</dd>
    <dt>Stage 2</dt> <dd>Takes 5d8 poison damage and remains Sickened 4 for 1 hour. (CON DC 25)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 25, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 28],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Greenblood Oil';
        $formula->type        = 'Poison';
        $formula->level       = 2;
        $formula->price       = '150 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This poison causes strong nausea. It takes the form of a soluble powder.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>The target gains the Sickened 3 condition for 1d6 minutes. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Hemlock';
        $formula->type        = 'Poison';
        $formula->level       = 12;
        $formula->price       = '1,800 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>30 minutes</dd>
    <dt>Maximum Duration</dt> <dd>60 minutes</dd>
    <dt>Stage 1</dt> <dd>Takes 1d6 poison damage, 1d4 Constitution damage, and becomes Enfeebled 2 for 10 minutes. (CON DC 23)</dd>
    <dt>Stage 2</dt> <dd>Takes 1d6 poison damage, 1d4 Constitution damage, and becomes Enfeebled 3 for 10 minutes. (CON DC 23)</dd>
    <dt>Stage 3</dt> <dd>Takes 2d6 poison damage, 1d4 Constitution damage, and becomes Enfeebled 4 for 10 minutes. (CON DC 23)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 23, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Id Moss';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This white plant poison is extracted from a high-altitude growth. Within moments of ingestion, it induces a severe metabolic shock capable of causing debilitating cognitive lesions in the brain.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>Until at least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Takes 1D4 Intelligence drain and becomes Stupefied 1. This drain persists until the target completes 8 hours of bed rest. (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Illumination of the Harvester';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '400 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Once this sticky liquid comes in contact with blood, the target temporarily loses hearing.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>Until 2 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Gains the Deafened condition and takes a -2 penalty to initiative checks. This effect lasts until the target completes at least 2 hours of bed rest. (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Insanity Mist';
        $formula->type        = 'Poison';
        $formula->level       = 12;
        $formula->price       = '2,000 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>The victim who breathes the perfume released by this poison is put in a nervous state close to madness that often ends in suicide. When released, this vapor fills a 10-foot cube.</p>
<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>3 days</dd>
    <dt>Stage 1</dt> <dd>Takes 3D6 Wisdom drain and becomes Confused. If Wisdom is reduced to 2 or less, the creature actively attempts to commit suicide at the first available opportunity. This effect persists for 3 days or until the drain is cured. (CON DC 23)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 23, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 20],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Jalwun Jiwin';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '400 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Compared to other poisons used by drows, this one seems to be a nice warning. This black poison is prepared from the venom of an underground toad. The victim is sick with nausea, fever and vomiting.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>1 week</dd>
    <dt>Stage 1</dt> <dd>Gains the Sickened 5 condition for 1 day. After completing at least 8 hours of bed rest, the target can repeat the saving throw to end the effect early. (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Jaraba Rubber';
        $formula->type        = 'Poison';
        $formula->level       = 8;
        $formula->price       = '800 gp';
        $formula->method      = 'Ingested';
        $formula->description = "<p>This poison looks like a light gray rubbery paste. Mixed with food, it dissolves when cooked to become undetectable by taste or smell.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>1 day</dd>
    <dt>Stage 1</dt> <dd>The target's maximum hit points are reduced by 50%. The creature can repeat the saving throw at the end of each of its turns (or every minute out of combat) to end the effect and restore its maximum hit points, though its current hit points are not healed. The DC decreases by 1 for each subsequent saving throw attempt. (CON DC 19)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 19, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Jatropha Curcas';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '200 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>The threat of these nuts lies in their delicious taste because who eats one will instinctively eat several others. Beyond a dozen nuts occur cramps in the legs. The tree grows only in the tropics.</p>
<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>The creature cannot take more than 1 Stride Action each turn and each Stride Action only provides 5 feet of movement. If the creature has a fly speed, it cannot fly. This effect persists for 1d6 x 10 minutes. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Nature'   => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Killing Eye Toxin';
        $formula->type        = 'Poison';
        $formula->level       = 13;
        $formula->price       = '2,500 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>This dreadful gas is prepared from the liver of an extremely rare sea fish called killer eye. Once released, the toxic cloud fills a 10-foot cube and kills most creatures that breathe it.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>2 hours</dd>
    <dt>Stage 1</dt> <dd>Takes 3d8 poison damage and is Sickened 7 for 1 round. (CON DC 25)</dd>
    <dt>Stage 2</dt> <dd>Takes 3d8 poison damage and remains Sickened 7 for 1 round. (CON DC 25)</dd>
    <dt>Stage 3</dt> <dd>Remains Sickened 7 until they succeed on a saving throw. (CON DC 25)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 25, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 25],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = "King's Sleep";
        $formula->type        = 'Poison';
        $formula->level       = 14;
        $formula->price       = '3,000 gp';
        $formula->method      = 'Inhaled';
        $formula->description = "<p>King's sleep is an insidious long-term poison that might seem like a disease or even a death from natural causes if used on a venerable target. The Drained condition from King's Sleep stacks with each failed save and cannot be removed until the target is cured of the poison. When released, this vapor fills a 10-foot cube.</p>
<dl>
    <dt>Onset</dt> <dd>1 day</dd>
    <dt>Maximum Duration</dt> <dd>Until cured</dd>
    <dt>Stage 1</dt> <dd>Gains the Drained 1 condition. (1 day) (CON DC 28)</dd>
    <dt>Stage 2</dt> <dd>Gains the Drained 1 condition. (1 day) (CON DC 28)</dd>
    <dt>Stage 3</dt> <dd>Gains the Drained 2 condition. (1 day) (CON DC 28)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 29, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Last Drink';
        $formula->type        = 'Poison';
        $formula->level       = 4;
        $formula->price       = '300 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This poison is prepared by mixing it with wine. It does not alter the taste but brightens the color very slightly. It reacts with digestive acids and causes nausea, convulsions, and abdominal cramps. The victim is then immune to this poison for a week.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>8 hours</dd>
    <dt>Stage 1</dt> <dd>The target gains the Sickened 5 condition for 1 hour. (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 14, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Leng Spider Venom';
        $formula->type        = 'Poison';
        $formula->level       = 15;
        $formula->price       = '4,500 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Gains the Drained 1 condition for 1 round. (CON DC 29)</dd>
    <dt>Stage 2</dt> <dd>Gains the Drained 1 condition and becomes Confused for 1 round. (CON DC 29)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 30, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 30],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Lichbane';
        $formula->type        = 'Poison';
        $formula->level       = 8;
        $formula->price       = '800 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This glowing, silvery oil is formulated to attack the necrotic animating forces of powerful undead creatures like liches, though it acts as a debilitating neurotoxin to living flesh upon physical contact.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>Gains the Fatigued condition for 1 minute. (CON DC 19)</dd>
    <dt>Stage 2</dt> <dd>Takes 4d6 poison damage and remains Fatigued for 1 minute. (CON DC 19)</dd>
    <dt>Stage 3</dt> <dd>Takes 4d6 poison damage, remains Fatigued, and becomes Paralyzed for 1 minute. (CON DC 19)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 19, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 25],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = "Lomat's Illusion";
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '500 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>A tasteless liquid or sand-like powder, once ingested this poison causes the victim to believe that it is being watched continuously.</p>
<dl>
    <dt>Onset</dt> <dd>30 minutes</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>Gains the Frightened condition and cannot take reactions for 1d10 minutes due to severe paranoia. (WIS DC 17)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 17, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = "Mage's Kintal";
        $formula->type        = 'Poison';
        $formula->level       = 7;
        $formula->price       = '700 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This poison which requires among other things many small scorpions for its preparation cuts the vocal cords of the victim. This substance is mostly used against wizards and other spellcasters.</p>
<dl>
    <dt>Onset</dt> <dd>3 rounds</dd>
    <dt>Maximum Duration</dt> <dd>Until at least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Unable to speak or use verbal spell components. This effect lasts until the target completes at least 8 hours of bed rest. (CON DC 19)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 19, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Malice';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '250 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>A dark, shimmering vapor that targets the respiratory tract and optic nerves. When released, this gas fills a 10-foot cube.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>Gains the Sickened 1 condition for 3 rounds. (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Gains the Blinded condition for 1 hour. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Malyass Root Paste';
        $formula->type        = 'Poison';
        $formula->level       = 4;
        $formula->price       = '300 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>The paste prepared from the roots of this plant, once in contact with the skin, it causes tremor of all limbs and a slight breathlessness.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>Gains the Hampered 10 and Sluggish 1 conditions for 1 minute. (CON DC 14)</dd>
    <dt>Stage 2</dt> <dd>Gains the Hampered 20 and Sluggish 2 conditions for 1 minute. (CON DC 14)</dd>
    <dt>Stage 3</dt> <dd>Gains the Flat-Footed, Hampered 30, and Sluggish 3 conditions for 1 minute. (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 14, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mandrake';
        $formula->type        = 'Poison';
        $formula->level       = 4;
        $formula->price       = '300 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>First of all a beneficial plant, but in overdose the mandrake is a real poison with a bitter taste.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>12 minutes</dd>
    <dt>Stage 1</dt> <dd>Takes 1d4 Wisdom drain and suffers vivid hallucinations for 2d6 minutes, giving them a -2 penalty to all WIS Saves and visual perception checks. (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 14, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 15],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Midnight Tears';
        $formula->type        = 'Poison';
        $formula->level       = 11;
        $formula->price       = '1,500 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>A creature that ingests this poison suffers no effects until the stroke of midnight, at which point the toxin suddenly activates with lethal force.</p>
<dl>
    <dt>Onset</dt> <dd>Midnight</dd>
    <dt>Maximum Duration</dt> <dd>2 rounds</dd>
    <dt>Stage 1</dt> <dd>Takes 5d6 poison damage and becomes Sickened 2 for 1 round. (CON DC 22)</dd>
    <dt>Stage 2</dt> <dd>Takes 5d6 poison damage and becomes Sickened 2 for 1 round. (CON DC 22)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 22, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 21],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Murfa';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = "<p>This colorless and odorless lead-based liquid causes uncontrollable convulsions, falling prone and drops whatever it's holding, writhing in pain.</p>
<dl>
    <dt>Onset</dt> <dd>2 rounds</dd>
    <dt>Maximum Duration</dt> <dd>Until successful Save</dd>
    <dt>Stage 1</dt> <dd>The target falls prone, drops whatever it is holding, and becomes Stunned. The creature can repeat the saving throw at the end of each of its turns, ending the effect on a success. (CON DC 15)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Nettleweed Residue';
        $formula->type        = 'Poison';
        $formula->level       = 14;
        $formula->price       = '3,000 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This sticky, sap-like coating is boiled down from rare thorny nettles. It causes excruciating, burning flesh necrosis upon physical contact.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>Takes 6d6 poison damage. (CON DC 29)</dd>
    <dt>Stage 2</dt> <dd>Takes 8d6 poison damage. (CON DC 29)</dd>
    <dt>Stage 3</dt> <dd>Takes 10d6 poison damage. (CON DC 29)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 29, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Nibon';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This odorless and colorless liquid based on gold and silver causes deafness for a few minutes before settling into a prolonged neurological imbalance.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>Until at least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Gains the Deafened condition for 10 minutes, and suffers a -2 penalty to all attack rolls, DEX Saves, and skill checks. This penalty lasts until the target completes at least 8 hours of bed rest. (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Nightmare Vapor';
        $formula->type        = 'Poison';
        $formula->level       = 9;
        $formula->price       = '1,200 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>Despite its name, this contact poison is a viscous oil that releases thick, mind-altering fumes when exposed to skin heat, trapping the victim in terrifying hallucinations.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Gains the Confused condition for 1 minute. (CON DC 25)</dd>
    <dt>Stage 2</dt> <dd>Gains the Confused and Flat-Footed conditions for 1 minute. (CON DC 25)</dd>
    <dt>Stage 3</dt> <dd>Gains the Confused, Flat-Footed, and Stupefied 2 conditions for 1 minute. (CON DC 25)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 25, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Nitharit';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '600 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This powder only works if thrown in the eyes of the victim. It immediately causes burns that greatly impede vision.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>10 rounds</dd>
    <dt>Stage 1</dt> <dd>Suffers a -2 penalty on all attack rolls and Perception checks for 10 rounds. (CON DC 16)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 16, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 16],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Oil of Taggit';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '400 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>A creature subjected to this poison becomes unconscious. The creature wakes if it takes any damage.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>24 hours</dd>
    <dt>Stage 1</dt> <dd>Falls unconscious for 24 hours. The creature wakes early if it takes any damage or if another creature uses a standard action to wake it. (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Opia';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This brown powder with the smell of coffee dissolves in a drink and completely confuses the mind.</p>
<dl>
    <dt>Onset</dt> <dd>2d4 rounds</dd>
    <dt>Maximum Duration</dt> <dd>8 rounds</dd>
    <dt>Stage 1</dt> <dd>Becomes Stunned and Confused for 2d4 rounds. (WIS DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Pale Tincture';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '250 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>A creature subject to this poison must make a CON save every day. While the creature is under the effects of this poison, they cannot heal any of the damage this poison has dealt, not even by magical means.</p>
<dl>
    <dt>Onset</dt> <dd>2 hours</dd>
    <dt>Maximum Duration</dt> <dd>1 month</dd>
    <dt>Stage 1</dt> <dd>Takes 1d6 poison damage. (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Takes 1d6 poison damage. (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>Takes 1d6 poison damage. (CON DC 13)</dd>
    <dt>Stage 4</dt> <dd>Takes 1d6 poison damage. (CON DC 13)</dd>
    <dt>Stage 5</dt> <dd>Takes 1d6 poison damage. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison'], [
            'skills'    => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
            ],
            'materials' => ['Olina Petals' => ['meta' => '1 lb']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Phase Spider Venom';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '360 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>A gummy paste made by drying and mixing with some tree sap.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>Takes 2d6 poison damage and becomes Paralyzed for 1 round. (CON DC 15)</dd>
    <dt>Stage 2</dt> <dd>Takes 2d6 poison damage and becomes Paralyzed for 1 round. (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 15],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Poison Tree';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>The Poison tree is a rare plant that grows only in the heart of tropical jungles. To protect itself from insects, this tree produces a powerful orange Poison; the slightest scratch causes excruciating pain in the wound. Its flowers are the only known natural antidote.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>Takes 2d6 poison damage and is Sickened 1 for 1 round due to the excruciating pain. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Plant'], [
            'skills' => [
                'Nature'   => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Purpleworm Venom';
        $formula->type        = 'Poison';
        $formula->level       = 13;
        $formula->price       = '2,000 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This Poison must be harvested from a dead or incapacitated purple worm.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Takes 3d6 poison damage and becomes Enfeebled 2 for 1 minute. (CON DC 25)</dd>
    <dt>Stage 2</dt> <dd>Takes 4d6 poison damage and remains Enfeebled 2 for 1 minute. (CON DC 25)</dd>
    <dt>Stage 3</dt> <dd>Takes 6d6 poison damage and remains Enfeebled 2 for 1 minute. (CON DC 25)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 25, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 25],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Quarigan';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '400 gp';
        $formula->method      = 'Injury';
        $formula->description = "<p>This substance is also called \"Dwarf-catch\" because it's only toxic to dwarves. This oil is used on weapons and dries after four or five days. Legend tells that elves are at the origin of this poison.</p>
<dl>
    <dt>Onset</dt> <dd>2 rounds</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>Takes 2d8 poison damage and becomes Sickened 1 for 1 round. Non-dwarf creatures are entirely immune to this effect. (CON DC 15)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Rhododendron';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This poison made from the plant with the same name causes severe diarrhea and vomiting.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>Until next 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Gains the Enfeebled 2 and Sickened 2 conditions. These conditions persist until the target completes at least 8 hours of bed rest. (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Scorpion Venom';
        $formula->type        = 'Poison';
        $formula->level       = 9;
        $formula->price       = '900 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Takes 1d8 poison damage and becomes Enfeebled 1 for 1 round. (CON DC 21)</dd>
    <dt>Stage 2</dt> <dd>Takes 2d8 poison damage and remains Enfeebled 1 for 1 round. (CON DC 21)</dd>
    <dt>Stage 3</dt> <dd>Takes 2d8 poison damage and becomes Enfeebled 2 for 1 round. (CON DC 21)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Nature'   => ['dc' => 21],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Royal Scorpion Tail';
        $formula->type        = 'Poison';
        $formula->level       = 10;
        $formula->price       = '1,000 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>The venom of this animal, which is extracted from its tail, acts by simple contact with the skin.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 minute</dd>
    <dt>Stage 1</dt> <dd>Takes 4d6 poison damage for 1 round. (CON DC 22)</dd>
    <dt>Stage 2</dt> <dd>Takes 1d6 poison damage and becomes Sickened 4 for 1 minute. (CON DC 22)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Contact', 'Poison', 'Animal'], [
            'skills' => [
                'Nature' => ['dc' => 22],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Sand Seller';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '600 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This poisonous powder induces a magical sleep that does not affect elves or half-elves.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>Falls unconscious into a magical sleep for 1d6 minutes. The target cannot be awoken by normal noise, but wakes early if it takes damage or if another creature uses a standard action to shake it awake. Elves and half-elves are immune to this effect. (WIS DC 17)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 17, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Sassone Leaf Residue';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '200 gp';
        $formula->method      = 'Contact';
        $formula->description = "<p>White powder from dried leaves, this 'cheap' poison that can be deadly for weak creatures by simple contact is fortunately relatively detectable thanks to the strong smell of fruits it releases.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>Until at least 2 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Takes 1d6 poison damage every 10 minutes. Damage dealt by this poison cannot be healed by natural rest or non-magical medicine, though any form of magical healing removes it normally. This effect lasts until the target completes at least 2 hours of bed rest. (CON DC 13)</dd>
</dl>";
        $helper->saveFormula($formula, ['Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => [
                'Nature' => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Serpent Venom';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>3 rounds</dd>
    <dt>Stage 1</dt> <dd>Takes 1d6 poison damage for 1 round. (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Takes 1d6 poison damage for 1 round. (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>Takes 1d6 poison damage for 1 round. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Nature' => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Shadow Essence';
        $formula->type        = 'Poison';
        $formula->level       = 8;
        $formula->price       = '800 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>The Enfeebled condition from shadow essence lasts for 24 hours.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Takes 1d6 negative damage and becomes Enfeebled 2 for 24 hours. (CON DC 19)</dd>
    <dt>Stage 2</dt> <dd>Takes 1d6 negative damage and becomes Enfeebled 2 for 24 hours. (CON DC 19)</dd>
    <dt>Stage 3</dt> <dd>Takes 1d6 negative damage and becomes Enfeebled 3 for 24 hours. (CON DC 19)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Negative', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 19, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 20],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Silvered Wine';
        $formula->type        = 'Poison';
        $formula->level       = 5;
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This poison is a silvered liquor with a very fine taste. It does not affect Halflings and Gnomes.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>8 rounds</dd>
    <dt>Stage 1</dt> <dd>Falls into uncontrollable fits of laughter for 2d4 rounds. While laughing, the target is prone, incapacitated, and unable to stand. Halflings and gnomes are immune to this effect. (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Slowfoot';
        $formula->type        = 'Poison';
        $formula->level       = 2;
        $formula->price       = '150 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>Slowfoot is a small cottony flower herb. It gives a light green liquid which, when mixed into food, increases the breathing rate and causes a feeling of exhaustion.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>Until at least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>The target\'s breathing rate spikes for 5 minutes, giving them a -2 penalty to Stealth checks and preventing them from holding their breath. (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>The target gains 1 level of Exhaustion, which persists until they complete at least 8 hours of bed rest. If the initial saving throw was a critical failure (rolling a natural 3 or less on 2D10), the target gains 2 levels of Exhaustion instead. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Nature' => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Striped Toadstool';
        $formula->type        = 'Poison';
        $formula->level       = 7;
        $formula->price       = '700 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This gray poison is harvested from a white and black fungus that lives only in the depths of the underdark. It causes severe neurological disorders at the time of digestion.</p>
<dl>
    <dt>Onset</dt> <dd>2 hours</dd>
    <dt>Maximum Duration</dt> <dd>Until at least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Takes 2 points of Intelligence drain and becomes Stupefied 1. This effect persists until the target completes at least 8 hours of bed rest. (CON DC 19)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Nature' => ['dc' => 20],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Swamp Gas';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '600 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>This grayish gas weakens victims by slowing them down, or even putting them asleep. When released, this gas fills a 10-foot cube.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Gains the Slowed 1 condition for 1 round. (WIS DC 17)</dd>
    <dt>Stage 2</dt> <dd>Falls into a natural sleep for 1d6 rounds. The creature wakes early if it takes damage or if another creature uses a standard action to wake it. (WIS DC 17)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 17, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Slumber Wine';
        $formula->type        = 'Poison';
        $formula->level       = 13;
        $formula->price       = '2,500 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>Characters asleep from slumber wine cannot wake up by any means while the poison lasts, do not need to eat or drink while asleep in this way, and appear to be recently dead unless an examiner succeeds at a DC 30 Medicine check.</p>
<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>7 days</dd>
    <dt>Stage 1</dt> <dd>Falls into an unbreakable sleep for 1 day. (CON DC 25)</dd>
    <dt>Stage 2</dt> <dd>Remains in an unbreakable sleep for 2 days. (CON DC 25)</dd>
    <dt>Stage 3</dt> <dd>Remains in an unbreakable sleep for 3 days. (CON DC 25)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 25, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Spider Venom';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>A paste made by mashing the fine, threadlike roots of a certain creeper vine.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Takes 1d6 poison damage and becomes Sluggish 1 for 1 minute. (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Takes 2d6 poison damage and becomes Sluggish 2 for 1 minute. (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>Takes 3d6 poison damage and becomes Sluggish 3 for 1 minute. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Wolf Spider Venom';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '250 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This poison must be harvested from a dead or incapacitated Giant Wolf Spider.</p><p>If the poison damage reduces the target to 0 hit points, the target is stable but paralyzed for 1 hour, even after regaining hit points.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>Takes 1d6 poison damage for 1 round. (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Takes 1d6 poison damage for 1 round. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Nature' => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Tears of Death';
        $formula->type        = 'Poison';
        $formula->level       = 15;
        $formula->price       = '9,000 gp';
        $formula->method      = 'Contact';
        $formula->rarity      = 'Rare';
        $formula->description = '<p>Tears of Death is among the most powerful of alchemical poisons, distilled from extracts of five other deadly poisons in just the right amount.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>10 minutes</dd>
    <dt>Stage 1</dt> <dd>Takes 1d6 poison damage, 1d8 Constitution damage, and becomes Paralyzed for 1 round. (CON DC 30)</dd>
    <dt>Stage 2</dt> <dd>Takes 2d6 poison damage, 2d4 Constitution damage, and becomes Paralyzed for 1 round. (CON DC 30)</dd>
    <dt>Stage 3</dt> <dd>Takes 3d6 poison damage, 2d4 Constitution damage, and becomes Paralyzed for 1 round. (CON DC 30)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Virulent'], [
            'skills' => [
                'Crafting' => ['dc' => 35, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Terinav Root';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '500 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This oil from the root of the terinav plant causes a kind of temporal brain paralysis.</p>
<dl>
    <dt>Onset</dt> <dd>3 rounds</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Becomes Incapacitated for 1d6 rounds. (CON DC 16)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 16, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Thrum';
        $formula->type        = 'Poison';
        $formula->level       = 7;
        $formula->price       = '700 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This light blue liquid smells like lemons. It puts the victim in an advanced state of alcoholism.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>Until at least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Gains the Clumsy 2 condition for 5 rounds. (CON DC 19)</dd>
    <dt>Stage 2</dt> <dd>Gains the Clumsy 4 condition. This effect persists until the target completes at least 8 hours of bed rest. (CON DC 19)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 19, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Toad Poison';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This poison must be harvested from a dead or incapacitated giant toad.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>Takes 1d10 poison damage and becomes Sickened 1 for 1 round. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Nature' => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Torpor';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '600 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>A clear, heavy syrup that attacks the somatic nervous system, locking the muscles into a completely rigid state while leaving the mind painfully aware.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>6 hours</dd>
    <dt>Stage 1</dt> <dd>Becomes Incapacitated for 4 hours. (CON DC 16)</dd>
    <dt>Stage 2</dt> <dd>Remains Incapacitated for 1 hour. (CON DC 16)</dd>
    <dt>Stage 3</dt> <dd>Remains Incapacitated for 1 hour. (CON DC 16)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 16, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Triple-Flower Enzyme';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '200 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>When this sticky yellow liquid comes in contact with skin, it inflicts damage if not neutralized. It can be easily removed by washing, but the lost health points are not recovered.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>8 minutes</dd>
    <dt>Stage 1</dt> <dd>Takes 1 point of poison damage and becomes Sickened 1 for 1 minute. (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Takes 1 point of poison damage and remains Sickened 1 for 1 minute. (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>Takes 1 point of poison damage and remains Sickened 1 for 1 minute. (CON DC 13)</dd>
    <dt>Stage 4</dt> <dd>Takes 1 point of poison damage and remains Sickened 1 for 1 minute. (CON DC 13)</dd>
    <dt>Stage 5</dt> <dd>Takes 1 point of poison damage and remains Sickened 1 for 1 minute. (CON DC 13)</dd>
    <dt>Stage 6</dt> <dd>Takes 1 point of poison damage and remains Sickened 1 for 1 minute. (CON DC 13)</dd>
    <dt>Stage 7</dt> <dd>Takes 1 point of poison damage and remains Sickened 1 for 1 minute. (CON DC 13)</dd>
    <dt>Stage 8</dt> <dd>Takes 1 point of poison damage and remains Sickened 1 for 1 minute. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => [
                'Nature' => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Troll Blood';
        $formula->type        = 'Poison';
        $formula->level       = 4;
        $formula->price       = '300 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This gray-green fluid requires, among other things, five drops of troll blood for its preparation. It becomes completely harmless if it reaches a temperature above 105 F. The effect being very short, the poisoner usually stands in front of his victim.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>5 rounds</dd>
    <dt>Stage 1</dt> <dd>Becomes Petrified for 1d4 rounds. If the initial saving throw was a critical failure (rolling a natural 3 or less on 2D10), the duration increases to 5 rounds. (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 14, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ungol Dust';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '600 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>This poison looks like dusty-brown flakes. The smell they give off when consumed causes serious respiratory lesions which are never fully recovered. When released, this gas fills a 10-foot cube.</p>
<dl>
    <dt>Onset</dt> <dd>4 rounds</dd>
    <dt>Maximum Duration</dt> <dd>Permanent</dd>
    <dt>Stage 1</dt> <dd>Takes 2 points of Constitution drain and becomes Sickened 1. This drain is permanent, but a Restoration spell can recover the lost Constitution. (CON DC 17)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 17, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Uropygus';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '600 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>The yellowish gas extracted from this poison greatly disturbs the coordination and the auditory system, which affects the balance. When released, this gas fills a 10-foot cube.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>8 rounds</dd>
    <dt>Stage 1</dt> <dd>Gains the Clumsy 4 condition and becomes Deafened for 1 round. (CON DC 16)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 16, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Veiled Flower';
        $formula->type        = 'Poison';
        $formula->level       = 2;
        $formula->price       = '150 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This small plant is relatively easily found in the meadows. It contains a small paralyzing poison that still worries herd owners. However, the taste of this herb is very strong and very unpleasant, which often allows from the first bite of food to realize that one poisons.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>1 minute</dd>
    <dt>Stage 1</dt> <dd>Gains the Restrained condition for 1 minute. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Venoms Blood';
        $formula->type        = 'Poison';
        $formula->level       = 9;
        $formula->price       = '1,200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This mix of venoms (Giant Scorpion, Giant Toad, and Giant Snake) looks like a yellow liquid. It is more unstable (lower DC) but more powerful than normal venoms.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>Takes 3d10 poison damage and becomes Sickened 1 for 1 round. (CON DC 18)</dd>
    <dt>Stage 2</dt> <dd>Takes 3d10 poison damage and becomes Sickened 1 for 1 round. (CON DC 18)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 18, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Wasp Venom';
        $formula->type        = 'Poison';
        $formula->level       = 4;
        $formula->price       = '300 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Takes 1d8 poison damage and becomes Sluggish 1 for 1 round. (CON DC 14)</dd>
    <dt>Stage 2</dt> <dd>Takes 1d12 poison damage and becomes Sluggish 2 for 1 round. (CON DC 14)</dd>
    <dt>Stage 3</dt> <dd>Takes 2d8 poison damage and becomes Sluggish 2 for 1 round. (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Nature' => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Witch Caress';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '200 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This poison in the form of a colorless liquid is almost impossible to detect visually. It is easy to wash with water, which makes it immediately harmless. Some unscrupulous jewelers use it on their goods, in their safes or when traveling in unsafe areas.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>Takes 1d8 poison damage and becomes Sickened 1 for 1 round. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Witch Kiss';
        $formula->type        = 'Poison';
        $formula->level       = 6;
        $formula->price       = '500 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This mix of several toxins acts throughout all the body. It looks like a brown gelatin.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>Until at least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Takes 1 point of CON, EX, and INT drain. This drain persists until the target completes at least 8 hours of bed rest. (CON DC 16)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 16, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wolfsbane Poison';
        $formula->type        = 'Poison';
        $formula->level       = 15;
        $formula->price       = '4,500 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>A highly concentrated extract of deadly aconite. If you survive the damage from Stage 3 of wolfsbane and you are afflicted with Lycanthropy, you are immediately cured.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>Takes 9d6 poison damage. (CON DC 34)</dd>
    <dt>Stage 2</dt> <dd>Takes 12d6 poison damage. (CON DC 34)</dd>
    <dt>Stage 3</dt> <dd>Takes 15d6 poison damage. (CON DC 34)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Virulent', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 34, 'meta' => 'Poison Making'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wolves Herb';
        $formula->type        = 'Poison';
        $formula->level       = 3;
        $formula->price       = '250 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This very poisonous plant, generally used to kill foxes and wolves, can also be deadly to humanoids. Well-prepared, it also serves as an antidote to the venom of scorpions.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 minute</dd>
    <dt>Stage 1</dt> <dd>Takes 3d4 poison damage and becomes Sickened 1 for 1 round. (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Becomes Paralyzed for 1 minute. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Nature' => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wyvern Poison';
        $formula->type        = 'Poison';
        $formula->level       = 9;
        $formula->price       = '1,200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This potent venom must be harvested directly from a wyvern’s stinger. It acts rapidly in the bloodstream, forcing a localized, excruciating physical corruption.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Takes 3d6 poison damage and becomes Sickened 1 for 1 round. (CON DC 21)</dd>
    <dt>Stage 2</dt> <dd>Takes 3d6 poison damage and remains Sickened 1 for 1 round. (CON DC 21)</dd>
    <dt>Stage 3</dt> <dd>Takes 3d6 poison damage and becomes Sickened 2 for 1 round. (CON DC 21)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Nature' => ['dc' => 21],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Yellow Lotus Dust';
        $formula->type        = 'Poison';
        $formula->level       = 8;
        $formula->price       = '800 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This yellow poison has a very acidic citric taste. It permanently changes elocution.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>Permanent</dd>
    <dt>Stage 1</dt> <dd>Takes 1d6 Charisma drain. This drain is permanent, but a Restoration spell can recover the lost Charisma damage. (CON DC 19)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Nature' => ['dc' => 19],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Yellow Mold Oil';
        $formula->type        = 'Poison';
        $formula->level       = 1;
        $formula->price       = '75 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This thick substance is distilled from the spores of a Yellow Mold hazard.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>4 rounds</dd>
    <dt>Stage 1</dt> <dd>Takes 1d8 poison damage and becomes Sickened 1 for 1 round. (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Takes 1d10 poison damage and remains Sickened 1 for 1 round. (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>Takes 2d8 poison damage and remains Sickened 1 for 1 round. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
            ],
        ]);
    }
}
