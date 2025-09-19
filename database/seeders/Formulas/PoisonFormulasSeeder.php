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
        $formula->price       = '1,000 gp';
        $formula->method      = 'Ingested';
        $formula->bulk        = 'L';
        $formula->description = '<p>This odorless and colorless liquid can cause blindness</p>
<dl>
    <dt>Onset</dt> <dd>2D4 minutes</dd>
    <dt>Maximum Duration</dt> <dd>Blindness lasts until cured by magic (Remove Blindness)</dd>
    <dt>Stage 1</dt> <dd>Dizzy: 1 (1D8 minutes) (DC 18)</dd>
    <dt>Stage 2</dt> <dd>Blindness (DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => '14', 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Arsenic';
        $formula->type        = 'Poison';
        $formula->price       = '2 gp';
        $formula->method      = 'Ingested';
        $formula->bulk        = 'L';
        $formula->description = "<p>You can't reduce your sick condition while affected by arsenic.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>5 minutes</dd>
    <dt>Stage 1</dt> <dd>1 Poison damage and Sick 1 (1 minute) (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>1D4 Poison damage and Sick 2 (1 minute) (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>2D4 Poison damage and Sick 3 (1 minute) (CON DC 13)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 3, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ascomoid Spores Toxin';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Inhaled';
        $formula->bulk        = 'L';
        $formula->description = '<p>This powder, extracted from mushrooms, confuses the mind.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>12 rounds</dd>
    <dt>Stage 1</dt> <dd>Confused (2D4 rounds. If Critical Fail the Save, then 3D4 rounds) (CON DC 12)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Inhaled', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 12, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 17],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Aspic Toxin';
        $formula->type        = 'Poison';
        $formula->price       = '600 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This Poison, prepared from the glands of venomous snakes.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>3 rounds</dd>
    <dt>Stage 1</dt> <dd>Sick 1 (2 rounds) (CON DC 22)</dd>
    <dt>Stage 2</dt> <dd>2D4 Poison damage Sickened 1 (CON DC 22)</dd>
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
        $formula->price       = '150 gp';
        $formula->method      = 'Ingested';
        $formula->description = "<p>Assassin's Blood is a mixture of commonly gathered herbs. (Five successful DC 15 Nature checks will be enough to gather the materials)</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>24 hours</dd>
    <dt>Stage 1</dt> <dd>1D12 Poison damage (CON DC 11)</dd>
    <dt>Stage 2</dt> <dd>Sick 3 (24 hours) (CON DC 13)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => ['Crafting' => ['dc' => 4, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Azure Lily Pollen Poison';
        $formula->type        = 'Poison';
        $formula->price       = '1,500 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p></p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
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
        $formula->price       = '100 gp';
        $formula->method      = 'Injury';
        $formula->description = "<p>Bardan ruqad, which translates to `Cold Sleep` in Midani, is a rare Poison that causes paralysis.</p>
<p>Victims under the Poison's effect remains helpless for up to 10 minutes. They are completely aware of what is happening during this time, after which they fall asleep that can last several hours. The Poison does not cause any physical harm.</p>
<p>Bardan ruqad also works against all forms of undead, though they receive a +5 bonus to their Save.</p>
<dl>
    <dt>Onset</dt>  <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>10 minutes (paralysis). 4 hours (sleep)</dd>
    <dt>Stage 1</dt> <dd>Enfeebled (1 round) (CON DC 15)</dd>
    <dt>Stage 2</dt> <dd>Paralyzed (10 minutes) (CON DC 15)</dd>
    <dt>Stage 3</dt> <dd>Asleep (4 hours) (CON DC 15)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 12, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 13],
            ],
            'materials' => ['Outsider Blood' => ['quantity' => '5 oz', 'meta' => 'Dao, Djinni, Efreet, or Marid. must be willingly given']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Basilisk Eye';
        $formula->type        = 'Poison';
        $formula->price       = '600 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This Poison is made with the eye of a Basilisk</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>Permanent until Save or cured</dd>
    <dt>Stage 1</dt> <dd>Petrified until Save or cured (CON DC 12 Once every hour)</dd>
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
        $formula->price       = '150 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Belladonna is known to also be able to cure lycanthropy. If the creature has yet to experience a full moon, and if the belladonna was picked within the last week, and the creature suffers Stage 3, the creature is cured of lycanthropy.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>24 hours</dd>
    <dt>Stage 1</dt> <dd>Dazzled (1 hour) (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>1D4 Poison damage and Sick 1 (1 hour) (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>1D4 Poison damage and Sick 1, and Confused for 1 minute (1 minute) (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills'    => ['Crafting' => ['dc' => 10, 'meta' => 'Poison Making']],
            'materials' => ['Belladonna' => ['quantity' => '1 sprig']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Black Adder Venom';
        $formula->type        = 'Poison';
        $formula->price       = '120 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>3 rounds</dd>
    <dt>Stage 1</dt> <dd>1D2 Poison damage (1 round) (CON DC 15)</dd>
    <dt>Stage 2</dt> <dd>1D2 Poison damage (1 round) (CON DC 15)</dd>
    <dt>Stage 3</dt> <dd>1D2 Poison damage (1 round) (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => ['Crafting' => ['dc' => 12, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Black Lotus Extract';
        $formula->type        = 'Poison';
        $formula->price       = '5,000 gp';
        $formula->method      = 'Contact';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>1D6 Poison damage, 1D6 CON damage, and Drained 1 (1 round) (CON DC 23)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison damage, 1D6 CON damage, and Drained 1 (1 round) (CON DC 23)</dd>
    <dt>Stage 3</dt> <dd>1D6 Poison damage, 1D6 CON damage, and Drained 2 (1 round) (CON DC 23)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Virulent', 'Plant'], [
            'skills' => ['Crafting' => ['dc' => 21, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Black Oil';
        $formula->type        = 'Poison';
        $formula->price       = '500 gp';
        $formula->method      = 'Ingested';
        $formula->bulk        = 'L';
        $formula->description = '<p>This black liquid only affects mammals. It causes a black coloring of the pupils of the eye. Some use this on themselves in anticipation of being tortured</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>4 hours</dd>
    <dt>Stage 1</dt> <dd>Blindness and Resistance to Bludgeoning (1D4 hours) (CON DC 20)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 21, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Blackroot Poison';
        $formula->type        = 'Poison';
        $formula->price       = '150 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>Blackroot is a herb that is found in the Underdark and can be distilled to create a Poison or an alcoholic drink called Blackroot Beer. One tankard of the beer can be sufficient to replace a full meal.</p>
<p>One can become immune to the Poison by ingesting small quantities of it over a long period of time. This is also true if one consumes the beer over a long period of time as well.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>Sluggish: 4 (5 rounds) (CON DC 12)</dd>
    <dt>Stage 2</dt> <dd>Paralyzed: (5 rounds) (CON DC 12)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills'    => ['Crafting' => ['dc' => 13, 'meta' => 'Poison Making']],
            'materials' => ['Blackroot' => ['quantity' => 'one plant']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Blightburn Resin';
        $formula->type        = 'Poison';
        $formula->level       = 11;
        $formula->price       = '160 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This tacky, hardened sap is harvested from trees infected by fungal blights and exposed to open flames</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>7D6 Poison damage (1 round) (CON DC 20)</dd>
    <dt>Stage 2</dt> <dd>8D6 Poison damage (1 round) (CON DC 20)</dd>
    <dt>Stage 3</dt> <dd>12D6 Poison damage (1 round) (CON DC 20)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => ['Crafting' => ['dc' => 13, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Bloodberry Poison';
        $formula->type        = 'Poison';
        $formula->price       = '1,500 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>1 minute</dd>
    <dt>Stage 1</dt> <dd>1 CON damage (CON DC 15)</dd>
    <dt>Stage 2</dt> <dd>1 CON damage (CON DC 15)</dd>
    <dt>Stage 3</dt> <dd>1 CON damage (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Poison', 'Injury', 'Consumable', 'Plant'], [
            'skills'    => ['Crafting' => ['dc' => 15, 'meta' => 'Poison Making']],
            'materials' => ['Bloodberry Bush' => ['meta' => 'Berries from the Bloodberry Bush']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Blue Whinnis';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This typical plant gives off a characteristic that any herbalist will recognize immediately</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>10 minutes</dd>
    <dt>Stage 1</dt> <dd>Dizzy: 5 (2 rounds) (CON DC 10)</dd>
    <dt>Stage 2</dt> <dd>Unconscious (6D10 minutes) (CON DC 10)</dd>
</dl>';
        $helper->saveFormula($formula, ['Injury', 'Consumable', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 10, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 12],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Blue Frog Paste';
        $formula->type        = 'Poison';
        $formula->price       = '500 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>The otherwise harmless bright blue frogs of the Serpent Hills secrete a unique Poison that the lizardfolk of Kalran have learned to harvest. Mixing it with other natural substances produces a highly toxic oil suitable for applying to weapons.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>1D4 DEX (1 round) (CON DC 17)</dd>
    <dt>Stage 2</dt> <dd>Paralysis 2D6 minutes</dd>
</dl>';
        $helper->saveFormula($formula, ['Contact', 'Consumable', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 12, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14, 'meta' => 'Blue Frog'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Bluluka';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This bluish, sour-smelling substance is a slow-acting acid that attacks skin tissue. The acid burns flesh and a bright blue indelible mark appears on the location of the injury. Only magical healing can remove the stain (although the damage from the Poison can be healed normally)</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Stage 1</dt> <dd>1D2 Acid (1 round) (CON DC 12) Blue marked on skin</dd>
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
        $formula->price       = '750 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This poison only affects undead, even if they are immune to Poison. Any Undead that is touched by this poison must make a DC 13 CON Save or suffer the following.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>
        <ul>
            <li>Disadvantage on all Melee Attack rolls</li>
            <li>Disadvantage on all STR checks and STR Saves</li>
        </ul>
    </dd>
    <dt>Stage 2</dt> <dd>1D6 Positive Damage from the Holy Water</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Undead'], [
            'skills' => [
                'Arcana'   => ['dc' => 12, 'meta' => 'Alchemy'],
                'Religion' => ['dc' => 7, 'meta' => 'Undead'],
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
        $formula->price       = '250 gp';
        $formula->method      = 'Ingested';
        $formula->description = "<p>Bralia comes in the form of an odorless creamy liquid that has a characteristic acidic taste. Not very dangerous, it's used more to warn than to kill.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>2 round</dd>
    <dt>Stage 1</dt> <dd>1D4 Poison (1 round) (CON DC 16)</dd>
    <dt>Stage 2</dt> <dd>1D4 Poison (1 round) (CON DC 16)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 12, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Breath of the Desert';
        $formula->type        = 'Poison';
        $formula->price       = '700 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>This magic Poison gives a feeling of warmth and makes the target sweat abnormally</p>
<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>20 hours</dd>
    <dt>Stage 1</dt> <dd>1D4 WIS drain (Until at least 8 hours of bed rest) (CON DC 18)</dd>
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
        $formula->description = '<p>Fumes from the forges of Hell drain health and strength alike.</p>
<dl>
    <dt>Save</dt> <dd>CON DC 20</dd>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>6D6 Poison damage (1 round)</dd>
    <dt>Stage 2</dt> <dd>7D6 Poison damage, and Enfeebled 1 (1 round)</dd>
    <dt>Stage 3</dt> <dd>8D6 Poison damage, Enfeebled 3 (1 round)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison', 'Outer Planes'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Alchemy and Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Burnt Othur Fumes';
        $formula->type        = 'Poison';
        $formula->price       = '500 gp';
        $formula->rarity      = 'Rare';
        $formula->method      = 'Inhaled';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>3 rounds</dd>
    <dt>Stage 1</dt> <dd>3D6 Poison damage (CON DC 12)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison damage (CON DC 12)</dd>
    <dt>Stage 3</dt> <dd>1D6 Poison damage. As long as fails on Save, continue taking Stage 3 effects. (CON DC 12)</dd>
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
        $formula->price       = '200 gp';
        $formula->method      = 'Contact';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 minute</dd>
    <dt>Stage 1</dt> <dd>1D4 Poison damage (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Paralyzed (1 round) (CON DC 13)</dd>
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
        $formula->price       = '250 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Caustar is a yellow cream made from Poisonous herb and is often used by mercenaries in combat. Once the Poison has entered the body, it causes an intense pain.</p>
<p>Damage cannot reduce the target below 1 HP. As soon as the Poison no longer acts, the target recovers 1 HP per round.</p>
<dl>
    <dt>Onset</dt> <dd>Immediately</dd>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>1D6 Poison (1 round) (CON DC 11)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison (1 round) (CON DC 11)</dd>
    <dt>Stage 3</dt> <dd>1D6 Poison (1 round) (CON DC 11)</dd>
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
        $formula->price       = '900 gp';
        $formula->method      = 'Contact';
        $formula->crafting    = '<p>Angel Essence must be extracted from a willing Archon using the required Arcana check.</p>';
        $formula->description = '<p>An undead creature subjected to this Poison must succeed on a DC 14 CON Save. Failure causes the undead to not be able to cast spells or use any of their spell-like and supernatural abilities for 1 minute.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Undead'], [
            'skills' => [
                'Arcana'   => ['dc' => 13],
                'Crafting' => ['dc' => 10, 'meta' => 'Poison Making'],
            ],
            'materials' => [
                'Angel Essence' => ['meta' => '1 dose'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Centipede Venom';
        $formula->type        = 'Poison';
        $formula->price       = '300 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>1 rounds</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>1D4 Poison damage (1 round) (CON DC 14)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison damage and Flat-Footed (1 round) (CON DC 14)</dd>
    <dt>Stage 3</dt> <dd>1D8 Poison damage and Flat-Footed and Sluggish 1 (1 round) (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 12, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 15],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Curare';
        $formula->type        = 'Poison';
        $formula->price       = '150 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This Poison, harvested from a tropical plant, causes paralysis of the muscles.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 minute</dd>
    <dt>Stage 1</dt> <dd>Paralyzed (1 round) (CON DC 9)</dd>
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
        $formula->price       = '800 gp';
        $formula->method      = 'Inhaled';
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
            'skills' => ['Crafting' => ['dc' => 12, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Cyanide';
        $formula->type        = 'Poison';
        $formula->price       = '600 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This blackish Poison has a characteristic odor of bitter almonds. Sold in salt-like powder, it causes death in just a few seconds.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>1 rounds</dd>
    <dt>Stage 1</dt> <dd>4D8 Poison (1 round) (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 18, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Cybella Pollen';
        $formula->type        = 'Poison';
        $formula->price       = '300 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>Breathing the pollen of this flower brings hallucinations (appearance of enemy creatures, feeling persecuted, and/or being watched).</p>
<dl>
    <dt>Onset</dt> <dd>1 rounds</dd>
    <dt>Maximum Duration</dt> <dd>8 rounds</dd>
    <dt>Stage 1</dt> <dd>Frightened (2D4 rounds) (CON DC 12)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Inhaled', 'Poison', 'Plant'], [
            'skills' => [
                'Nature' => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Dark Reaver Powder';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This Poison is made from mushrooms. When mixed with food, it causes violent abdominal pain after ingestion.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>4 round</dd>
    <dt>Stage 1</dt> <dd>Sick: 5 (1round) (CON DC 12)</dd>
    <dt>Stage 2</dt> <dd>5D4 Poison, Sick (1 round) (CON DC 12)</dd>
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
        $formula->price       = '500 gp';
        $formula->method      = 'Contact';
        $formula->description = "<p>This Poison is a carmine red powder that leaves its colored mark on the surface, with a wart-like appearance.</p>
<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>4 days</dd>
    <dt>Stage 1</dt> <dd>Red warts start to grow where the Poison made contact. During this time, the creature's CHA score is reduced by 2. (1D4 days) (CON DC 13)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Poison', 'Contact'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Deathblade';
        $formula->type        = 'Poison';
        $formula->price       = '1,600 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This powerful spider venom is highly prized by drow and assassins. It destroys the walls of vascular system causing massive internal bleeding. This Poison is only made by drow.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>4D8 Poison (1 round) (CON DC 18)</dd>
    <dt>Stage 2</dt> <dd>4D8 Poison (1 round) (CON DC 18)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 17, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 15],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Deathcap Powder';
        $formula->type        = 'Poison';
        $formula->price       = '360 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>The toxic deathcap mushroom can be dried, ground, and treated to form a flavorless powder.</p>
<dl>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>4D6 Poison damage (1 minute) (CON DC 21)</dd>
    <dt>Stage 2</dt> <dd>5D6 Poison damage and Sick 2 (1 minute) (CON DC 21)</dd>
    <dt>Stage 3</dt> <dd>6D6 Poison damage and Sick 3 (1 minute) (CON DC 21)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Desert Desire';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This green liquid is made from a special variety of cactus and causes severe dehydration (intense thirst, fatigue, dizziness)</p>
<p>Double normal water consumption reduces the exhaustion level by 1.</p>
<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>16 hours</dd>
    <dt>Stage 1</dt> <dd>Exhaustion 2 (8 + 18 hours) (CON DC 11)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 14, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 20],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = "Devil's Herb";
        $formula->type        = 'Poison';
        $formula->price       = '300 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>If inhaled, the vapors of this plant is enough to cause slight hallucinations for a few hours. It is through ingestion that it becomes a real Poison and causes strong hallucinations and a loss of voice.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>12 hours</dd>
    <dt>Stage 1</dt> <dd>Suffer hallucinations and not be able to speak intelligibly until at least 8 hours of bed rest. After the bed rest, the creature has no memory of what happened during the hallucination. (CON DC 10)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 12, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Diffenbach';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This complex mixture causes the complete relaxation of the vocal cords of the victim, who can no longer speak. It is a yellowish liquid.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>Unable to speak (1D4 hours) No Save</dd>
    <dt>Stage 2</dt> <dd>Unable to speak (1D4 hours) (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 17, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 15],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Doshenkana';
        $formula->type        = 'Poison';
        $formula->price       = '500 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This Poison takes the form of a fine green powder. It causes short of breath, nausea, vision loss and seizures</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>8 hours</dd>
    <dt>Stage 1</dt> <dd>Sick 4 (1D8 hours). On a Critical Failure, the target is permanently Blinded. (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 16, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Dragon Bile';
        $formula->type        = 'Poison';
        $formula->level       = 15;
        $formula->price       = '325 gp / 720 gp';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation; no cost';
        $formula->description = '<dl>
    <dt>Saves</dt> <dd>CON DC 27</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>4D6 Poison damage and Sick 2 (1 round)</dd>
    <dt>Stage 2</dt> <dd>5D6 Poison damage and Sick 3 (1 round)</dd>
    <dt>Stage 3</dt> <dd>6D6 Poison damage and Sick 4 (1 round)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Animal'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Alchemy and Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Dream of Ya';
        $formula->type        = 'Poison';
        $formula->price       = '600 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>Purple powder or liquid that smells like grapes.</p>
<dl>
    <dt>Onset</dt> <dd>30 minutes</dd>
    <dt>Maximum Duration</dt> <dd>7 days</dd>
    <dt>Stage 1</dt> <dd>Not able to sleep. +1 level of Exhaustion (1 day) (CON DC 14)</dd>
    <dt>Stage 2</dt> <dd>Not able to sleep. +1 level of Exhaustion (1 day) (CON DC 14)</dd>
    <dt>Stage 3</dt> <dd>Not able to sleep. +1 level of Exhaustion (1 day) (CON DC 14)</dd>
    <dt>Stage 4</dt> <dd>Not able to sleep. +1 level of Exhaustion (1 day) (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 12, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 20],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Drider Tears';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Despite its name, this Poison is developed from the saliva of the drider. In contact with blood, this Poison increases the volume of eyeballs, becoming bloodshot and blood-red tears flow.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>Until 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>4 points of CHA drain (until 8 hours of bed rest) (CON DC 16)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Poison', 'Injury'], [
            'skills' => ['Crafting' => ['dc' => 17, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Droon';
        $formula->type        = 'Poison';
        $formula->price       = '1,600 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This red liquid Poison is extremely powerful but very unstable.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>7D8 Poison (CON DC 8)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Poison', 'Injury'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Drow Sleep Poison';
        $formula->type        = 'Poison';
        $formula->price       = '300 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This Poison is typically made only by the drow, and only in a place far removed from sunlight.</p>
<p>If the target ever makes a Critical Fail on their Save, they immediately go to Stage 3.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>1 Poison damage. Sluggish: 1 (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Sluggish: 2 (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>Asleep for 1 hour (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 13, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 12, 'meta' => 'The Spider Venom must be harvested in a special way'],
            ],
            'monsters' => [
                'Spider, Giant' => ['meta' => 'Fermented venom'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Dwarfbane';
        $formula->type        = 'Poison';
        $formula->price       = '1,750 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Dwarves do not add their bonus to Saves vs Poison against this Poison.</p>
<dl>
    <dt>Onset</dt> <dd>3 rounds</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>3D6 Poison. Sluggish: 3 (CON DC 17)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison (CON DC 17)</dd>
    <dt>Stage 3</dt> <dd>1D6 Poison. Continue making Saves and suffer Stage 3 each failed Save. (CON DC 17)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 16, 'meta' => 'Find and harvest from the Slime Mold'],
            ],
            'monsters' => [
                'Slime Mold' => ['meta' => 'Poison must be extracted in a very special way'],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Emloc';
        $formula->type        = 'Poison';
        $formula->price       = '600 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This Poison that looks like syrup has a strong sweet taste and a peach smell.</p>
<dl>
    <dt>Onset</dt> <dd>30 minutes</dd>
    <dt>Maximum Duration</dt> <dd>35 minutes</dd>
    <dt>Stage 1</dt> <dd>1D10 Poison (25 + 1D10 minutes) (CON DC 13) This damage does not heal normally. Any form of magical healing can heal this damage</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Poison', 'Ingested'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Erwurg';
        $formula->type        = 'Poison';
        $formula->price       = '150 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This light green Poison, extracted from a flower of the forest, causes a strong cough.</p>
<dl>
    <dt>Onset</dt> <dd>2 minutes</dd>
    <dt>Maximum Duration</dt> <dd>15 minutes</dd>
    <dt>Stage 1</dt> <dd>Coughing (5 + 1D10 minutes) (CON DC 25)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Poison', 'Ingested', 'Plant'], [
            'skills' => ['Nature' => ['dc' => 17]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Essence of Ether';
        $formula->type        = 'Poison';
        $formula->price       = '300 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>A creature subjected to this Poison becomes unconscious. The creature wakes if it takes damage or if another creature uses an Action to shake it awake.</p>
<dl>
    <dt>Onset</dt> <dd>3 rounds</dd>
    <dt>Maximum Duration</dt> <dd>8 hours</dd>
    <dt>Stage 1</dt> <dd>Unconscious (8 hours) (CON DC 16)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Poison', 'Inhaled'], [
            'skills'    => [
                'Crafting' => ['dc' => 17, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 13, 'meta' => 'Harvest and process the ether'],
                'Arcana'   => ['dc' => 18],
            ],
            'materials' => ['Frenn Moss' => ['meta' => 'At least 5 oz']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ettercap Poison';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This Poison must be harvested from a dead or incapacitated ettercap.</p>
<dl>
    <dt>Onset</dt> <dd>1 turn</dd>
    <dt>Maximum Duration</dt> <dd>1 minute</dd>
    <dt>Stage 1</dt> <dd>Sick 2 (1 round) (CON DC 11)</dd>
    <dt>Stage 2</dt> <dd>1D8 Poison and Sick 2 (1 minute) creature may make a CON Save DC 11 each turn to end the Sick condition</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Poison', 'Injury', 'Animal'], [
            'skills' => ['Nature' => ['dc' => 14]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Fluna';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Fluna is a swamp beetle that becomes aggressive only during breeding season in the spring. Administered at high doses, its venom is very dangerous.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>2D6 Poison (1 round) (CON DC 10)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => ['Nature' => ['dc' => 12]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Garaban';
        $formula->type        = 'Poison';
        $formula->price       = '300 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Red-colored liquid Poison that is common among hunters. Quickly puts the victim to sleep. The sleep is natural so anything that would normally wake the target will do so.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>4 minutes</dd>
    <dt>Stage 1</dt> <dd>Asleep (1D4 minutes) (WIS DC 12)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Poison', 'Injury'], [
            'skills' => ['Crafting' => ['dc' => 13, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ghoul Saliva';
        $formula->type        = 'Poison';
        $formula->price       = '600 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This greenish oil causes rot and paralysis in the lower limbs of the victim.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>12 minutes</dd>
    <dt>Stage 1</dt> <dd>Paralyzed (1D6 minutes)</dd>
    <dt>Stage 2</dt> <dd>Paralyzed (1D6 minutes) (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Contact', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 12, 'meta' => 'Poison Making'],
                'Religion' => ['dc' => 17],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Gravedust';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This Poison only affects Undead. </p>
<dl>
    <dt>Maximum Duration</dt> <dd>3 hour</dd>
    <dt>Stage 1</dt> <dd>1D2 Positive damage. 2 STR damage (CON DC 16)</dd>
    <dt>Stage 2</dt> <dd>Disadvantage on all Rolls (CON DC 16)</dd>
    <dt>Stage 3</dt> <dd>6 STR damage (CON DC 16)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Undead'], [
            'skills'    => ['Crafting' => ['dc' => 11, 'meta' => 'Poison Making']],
            'materials' => ['Soil' => ['quantity' => 'Hand full', 'meta' => 'Soil from a grave']],
            'spells'    => ['Consecrate'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Green Dragon Bile';
        $formula->type        = 'Poison';
        $formula->price       = '2,500 gp';
        $formula->method      = 'Inhaled';
        $formula->rarity      = 'Rare';
        $formula->description = '<p>This greenish heavy gas is one of the deadliest Poisons. Fortunately, due to the difficulty in getting the basic substance, its price makes it an extremely rare Poison</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>Sick 4 + 5D8 Poison (1 round)</dd>
    <dt>Stage 2</dt> <dd>Sick 4 + 5D8 Poison (1 hour) (CON DC 22)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 20, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 15],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Greenblood Oil';
        $formula->type        = 'Poison';
        $formula->price       = '150 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This Poison causes strong nausea. It takes the form of a soluble powder.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>Sick 3 (1D6 minutes) (CON DC 10)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => ['Nature' => ['dc' => 14]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Hemlock';
        $formula->type        = 'Poison';
        $formula->price       = '1,800 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>30 minutes</dd>
    <dt>Maximum Duration</dt> <dd>60 minutes</dd>
    <dt>Stage 1</dt> <dd>1D6 Poison damage, 1D4 CON damage, and Enfeebled 2 (10 minutes) (CON DC 17)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison damage, 1D4 CON damage, and Enfeebled 3 (10 minutes) (CON DC 17)</dd>
    <dt>Stage 3</dt> <dd>2D6 Poison damage, 1D4 CON damage, and Enfeebled 4 (10 minutes) (CON DC 17)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Plant'], [
            'skills' => ['Crafting' => ['dc' => 19, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Id Moss';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This white plant Poison is pulled out from a high-altitude plant that causes in a few seconds a metabolic shock that can cause serious lesions in the brain.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>Until at least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>1D4 INT drain (Until bed rest) (CON DC 10)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 10, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 12],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Illumination of the Harvester';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Once this sticky liquid comes in contact with blood, the target temporarily loses hearing.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>At 2 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Deafened (Until at least 2 hours of bed rest) (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 17, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Insanity Mist';
        $formula->type        = 'Poison';
        $formula->price       = '2,000 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>The victim who breathes the perfume released by this Poison is put in a nervous state close to madness that often ends in suicide.</p>
<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>3 days</dd>
    <dt>Stage 1</dt> <dd>3D6 WIS Drain (3 days) (CON DC 14). If WIS is reduced to 2 or less, the creature tries to commit suicide at the first opportunity.</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 18, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 20],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Jalwun Jiwin';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>Compared to other Poisons used by drows, this one seems to be a nice warning. This black Poison is prepared from the venom of an underground toad. The victim is sick with nausea, fever and vomiting.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>1 week</dd>
    <dt>Stage 1</dt> <dd>Sick 5 (1 day) (CON DC 14). After at least 8 hours of bed rest, you may make another Save to end the effect.</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 14, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 11],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Jaraba Rubber';
        $formula->type        = 'Poison';
        $formula->price       = '800 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This Poison looks like a light gray rubbery paste. Mixed with food, it dissolves when cooked to become undetectable by taste or smell.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>1 day</dd>
    <dt>Stage 1</dt> <dd>Hit Point maximum reduced by 50% (1 minute) (CON DC 16). The creature can make a new Save every minute (10 rounds) to end the effect and restore its Hit Point maximum (but not its current Hit Points). The DD decreases by 1 each time.</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 18, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Jatropha Curcas';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>The threat of these nuts lies in their delicious taste because who eats one will instinctively eat several others. Beyond a dozen nuts occur cramps in the legs. The tree grows only in the tropics.</p>
<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>The creature cannot take more than 1 Stride Action each turn and each Stride Action only provides 5 feet of movement. If the creature has a Fly, it cannot Fly. (1D6 X 10 minutes) (CON DC 10)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => ['Nature' => ['dc' => 7]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Killing Eye Toxin';
        $formula->type        = 'Poison';
        $formula->price       = '2,500 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>This dreadful gas is prepared from the liver of an extremely rare sea fish called killer eye. Once released, the toxic cloud kills most creatures that breathe it.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>2 hours</dd>
    <dt>Stage 1</dt> <dd>3D8 Poison + Sick 7 (1 round)</dd>
    <dt>Stage 2</dt> <dd>3D8 Poison + Sick 7 (1 round) (CON DC 18)</dd>
    <dt>Stage 3</dt> <dd>Sick 7 (until save) (CON DC 18)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 20, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 20],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = "King's Sleep";
        $formula->type        = 'Poison';
        $formula->price       = '3,000 gp';
        $formula->method      = 'Inhaled';
        $formula->description = "<p>King's sleep is an insidious long-term Poison that might seem like a disease or even a death from natural causes if used on a venerable target. The Drained condition form King's Sleep stacks with each failed Save and can't be removed until the target is cured of the Poison.</p>
<dl>
    <dt>Maximum Duration</dt> <dd>N/A</dd>
    <dt>Stage 1</dt> <dd>Drained 1 (1 day) (CON DC 31)</dd>
    <dt>Stage 2</dt> <dd>Drained 1 (1 day) (CON DC 31)</dd>
    <dt>Stage 3</dt> <dd>Drained 2 (1 day) (CON DC 31)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 20, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Last Drink';
        $formula->type        = 'Poison';
        $formula->price       = '300 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This Poison is prepared by mixing it with wine. It does not alter the taste but brightens the color very slightly. It reacts with digestive acids and causes nausea, convulsions, and abdominal cramps. The victim is then immune to this Poison for a week.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>8 hours</dd>
    <dt>Stage 1</dt> <dd>Sick 5 (1 hour) (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, [], [

        ]);

        $formula              = new Formula;
        $formula->name        = 'Leng Spider Venom';
        $formula->type        = 'Poison';
        $formula->price       = '4,500 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Drained 1 (1 round) (CON DC 19)</dd>
    <dt>Stage 2</dt> <dd>Drained 1 and Confused for 1 round (1 round) (CON DC 19)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 12],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Lichbane';
        $formula->type        = 'Poison';
        $formula->price       = '80 gp';
        $formula->method      = 'Contact';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>Fatigued (1 minute)</dd>
    <dt>Stage 2</dt> <dd>4D6 Poison damage and Fatigued (1 minute)</dd>
    <dt>Stage 3</dt> <dd>4D6 Poison damage, Fatigued, and Paralyzed (1 minute) (CON DC 17)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 20, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 25],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = "Lomat's Illusion";
        $formula->type        = 'Poison';
        $formula->price       = '500 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>A tasteless liquid or sand-like powder, once ingested this Poison causes the victim to believe that it is being watched continuously.</p>
<dl>
    <dt>Onset</dt> <dd>30 minutes</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>Frightened (1D10 minutes) (WIS DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 20, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = "Mage's Kintal";
        $formula->type        = 'Poison';
        $formula->price       = '700 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This Poison which requires among other things many small scorpions for its preparation cuts the vocal cords of the victim. This substance is mostly used against wizards and other spellcasters.</p>
<dl>
    <dt>Onset</dt> <dd>3 rounds</dd>
    <dt>Maximum Duration</dt> <dd>Until at least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Unable to speak (Until at least 8 hours of bed rest) (CON DC 19)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 20, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Malice';
        $formula->type        = 'Poison';
        $formula->price       = '250 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>Sick 1 (3 rounds) (CON DC 15)</dd>
    <dt>Stage 2</dt> <dd>Blinded (1 hour) (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 17, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Malyass Root Paste';
        $formula->type        = 'Poison';
        $formula->price       = '300 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>The paste prepared from the roots of this plant, once in contact with the skin, it causes tremor of all limbs and a slight breathlessness.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>Hampered 10 and Sluggish 1 (1 minute) (CON DC 13)</dd>
    <dt>Stage 2</dt> <dd>Hampered 20 and Sluggish 2 (1 minute) (CON DC 13)</dd>
    <dt>Stage 3</dt> <dd>Flat-Footed, Hampered 30, and Sluggish 3 (1 minute) (CON DC 18)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 9, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Mandrake';
        $formula->type        = 'Poison';
        $formula->price       = '300 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>First of all a beneficial plant, but in overdose the mandrake is a real Poison with a bitter taste.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>12 minutes</dd>
    <dt>Stage 1</dt> <dd>1D4 WIS drain + Hallucinations (2D6 minutes) (CON DC 10)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => ['Nature' => ['dc' => 15]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Midnight Tears';
        $formula->type        = 'Poison';
        $formula->price       = '1,500 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>A creature that ingests this Poison suffers no effects until midnight.</p>
<dl>
    <dt>Onset</dt> <dd>Midnight</dd>
    <dt>Maximum Duration</dt> <dd>2 round</dd>
    <dt>Stage 1</dt> <dd>5D6 Poison (CON DC 17)</dd>
    <dt>Stage 2</dt> <dd>5D6 Poison (CON DC 17)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 12, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 21],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Murfa';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = "<p>This colorless and odorless lead-based liquid causes uncontrollable convulsions, falling prone and drops whatever it's holding, writhing in pain.</p>
<dl>
    <dt>Onset</dt> <dd>2 rounds</dd>
    <dt>Maximum Duration</dt> <dd>Until successful Save</dd>
    <dt>Stage 1</dt> <dd>Stunned until successful Save (1 round) (CON DC 14). New Save at the end of each round.</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 16, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Nettleweed Residue';
        $formula->type        = 'Poison';
        $formula->price       = '355 gp';
        $formula->method      = 'Contact';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>6D6 Poison damage (1 minute) (CON DC 20)</dd>
    <dt>Stage 2</dt> <dd>8D6 Poison damage (1 minute) (CON DC 20)</dd>
    <dt>Stage 3</dt> <dd>10D6 Poison damage (1 minute) (CON DC 20)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => ['Crafting' => ['dc' => 10, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Nibon';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This odorless and colorless liquid based on gold and silver causes deafness for a few minutes.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>Until at least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Clumsy: Disadvantage (until at least 8 hours of bed rest) (CON DC 17)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 19, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Nightmare Vapor';
        $formula->type        = 'Poison';
        $formula->price       = '1,200 gp';
        $formula->method      = 'Contact';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Confused (1 minute) (CON DC 28)</dd>
    <dt>Stage 2</dt> <dd>Confused and Flat-Footed (1 minute) (CON DC 28)</dd>
    <dt>Stage 3</dt> <dd>Confused, Flat-Footed and Stupefied 2 (1 minute) (CON DC 28)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 18, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Nitharit';
        $formula->type        = 'Poison';
        $formula->price       = '600 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This powder only works if thrown in the eyes of the victim. It immediately causes burns that greatly impede vision.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>10 rounds</dd>
    <dt>Stage 1</dt> <dd>Disadvantage on all Attack rolls and Perception checks (10 rounds) (CON DC 17)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => ['Nature' => ['dc' => 16]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Oil of Taggit';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>A creature subjected to this Poison becomes Unconscious. The creature wakes if it takes any damage.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>24 hours</dd>
    <dt>Stage 1</dt> <dd>Unconscious (24 hours) (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 12, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Opia';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This brown powder with the smell of coffee dissolves in a drink and completely confuses the mind.</p>
<dl>
    <dt>Onset</dt> <dd>2D4 rounds</dd>
    <dt>Maximum Duration</dt> <dd>8 rounds</dd>
    <dt>Stage 1</dt> <dd>Stunned (2D4 rounds) (WIS DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 17, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Pale Tincture';
        $formula->type        = 'Poison';
        $formula->price       = '250 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>A creature subject to this Poison must make a CON Save every day. While the creature is under the effects of this Poison, they cannot heal any of the damage this Poison has dealt, not even by magical means.</p>
<dl>
    <dt>Onset</dt> <dd>2 hours</dd>
    <dt>Maximum Duration</dt> <dd>1 month</dd>
    <dt>Stage 1</dt> <dd>1D6 Poison (1 day) (CON DC 16)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison (1 day) (CON DC 16)</dd>
    <dt>Stage 3</dt> <dd>1D6 Poison (1 day) (CON DC 16)</dd>
    <dt>Stage 4</dt> <dd>1D6 Poison (1 day) (CON DC 16)</dd>
    <dt>Stage 5</dt> <dd>1D6 Poison (1 day) (CON DC 16)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison'], [
            'skills'    => ['Crafting' => ['dc' => 25, 'meta' => 'Poison Making']],
            'materials' => ['Olina Petals' => ['meta' => '1 lb']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Poison Tree';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>The Poison tree is a rare plant that grows only in the heart of tropical jungles. To protect itself from insects, this tree produces a powerful orange Poison; the slightest scratch causes excruciating pain in the wound. Its flowers are the only known natural antidote.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>2D6 Poison (1 round) (CON DC 10)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Plant'], [
            'skills' => ['Nature' => ['dc' => 12]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Purpleworm Venom';
        $formula->type        = 'Poison';
        $formula->price       = '2,000 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This Poison must be harvested from a dead or incapacitated purple worm.</p>
<dl>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>3D6 Poison damage and Enfeebled 2 (1 minute)</dd>
    <dt>Stage 2</dt> <dd>4D6 Poison damage and Enfeebled 2 (1 minute) (CON DC 19)</dd>
    <dt>Stage 3</dt> <dd>6D6 Poison damage and Enfeebled 2 (1 minute) (CON DC 19)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 15, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 20],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Quarigan';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Injury';
        $formula->description = "<p>This substance is also called \"Dwarf-catch\" because it's only toxic to dwarves. This oil is used on weapons and dry after four or five days. Legend tells that elves are at the origin of this Poison.</p>
<dl>
    <dt>Onset</dt> <dd>2 rounds</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>2D8 Poison (1 round) (CON DC 20)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 21, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Rhododendron';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This Poison made form the plant with the same name causes severe diarrhea and vomiting.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>Until next 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Enfeebled: 2 (until next 8 hours of bed rest) (CON DC 12)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => ['Nature' => ['dc' => 12]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Scorpion Venom';
        $formula->type        = 'Poison';
        $formula->price       = '900 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>1D8 Poison damage and Enfeebled 1 (1 round)</dd>
    <dt>Stage 2</dt> <dd>2D8 Poison damage and Enfeebled 1 (1 round) (CON DC 17)</dd>
    <dt>Stage 3</dt> <dd>2D8 Poison damage and Enfeebled 2 (1 round) (CON DC 17)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => ['Nature' => ['dc' => 13]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Royal Scorpion Tail';
        $formula->type        = 'Poison';
        $formula->price       = '1,000 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>The venom of this animal, which is extracted from its tail, acts by simple contact with the skin.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 minute</dd>
    <dt>Stage 1</dt> <dd>4D6 Poison (1 round) (CON DC 16)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison + Sick 4 (1 minute) (CON DC 16)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Contact', 'Poison', 'Animal'], [
            'skills' => ['Nature' => ['dc' => 17]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Sand Seller';
        $formula->type        = 'Poison';
        $formula->price       = '600 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This Poisonous powder induces a magical sleep that does not affect elves or half-elves.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>Asleep (1D6 minutes) (WIS DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 17, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Sassone Leaf Residue';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Contact';
        $formula->description = "<p>White powder from dried leaves, this 'cheap' Poison that can be deadly for weak creatures by simple contact is fortunately relatively detectable thanks to the strong smell of fruits it releases.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>At least 2 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>1D6 Poison damage (until at least 2 hours of bed rest) (CON DC 9). The Poison damage does not heal until cured unless magical healing is used.</dd>
</dl>";
        $helper->saveFormula($formula, ['Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => ['Nature' => ['dc' => 7]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Serpent Venom';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>3 rounds</dd>
    <dt>Stage 1</dt> <dd>1D6 Poison (1 round) (CON DC 12)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison (1 round) (CON DC 12)</dd>
    <dt>Stage 3</dt> <dd>1D6 Poison (1 round) (CON DC 12)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 12, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 15],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Shadow Essence';
        $formula->type        = 'Poison';
        $formula->price       = '800 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>The Enfeebled condition from shadow essence lasts for 24 hours.</p>
<dl>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>1D6 Negative damage and Enfeebled: 2 (1 round)</dd>
    <dt>Stage 2</dt> <dd>1D6 Negative damage and Enfeebled: 2 (1 round) (CON DC 14)</dd>
    <dt>Stage 3</dt> <dd>1D6 Negative damage and Enfeebled: 3 (1 round) (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Negative', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 12, 'meta' => 'Brew Potion'],
                'Arcana'   => ['dc' => 20],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Silvered Wine';
        $formula->type        = 'Poison';
        $formula->price       = '400 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This Poison is a silvered liquor with a very fine taste. It does not affect Halflings and Gnomes.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>8 rounds</dd>
    <dt>Stage 1</dt> <dd>Fall into fits of laughter (2D4 rounds) (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 14, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Slowfoot';
        $formula->type        = 'Poison';
        $formula->price       = '150 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>Slowfoot is a small cottony flower herb. It gives a light green liquid which, when mixed into food, increases the breathing rate and causes a feeling of exhaustion.</p>
<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>At least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Increased breathing rate (5 minutes)</dd>
    <dt>Stage 2</dt> <dd>1 level of Exhaustion (until at least 8 hours of bed rest) (CON DC 11). If Critical Fail the Save, then 2 levels of Exhaustion.</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => ['Nature' => ['dc' => 8]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Striped Toadstool';
        $formula->type        = 'Poison';
        $formula->price       = '700 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This gray Poison is harvested from a white and black fungus that lives only in the depths of the underdark. It causes severe neurological disorders at the time of digestion.</p>
<dl>
    <dt>Onset</dt> <dd>2 hours</dd>
    <dt>Maximum Duration</dt> <dd>At least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>2 points of INT drain (until at least 8 hours of bed rest) (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => ['Nature' => ['dc' => 20]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Swamp Gas';
        $formula->type        = 'Poison';
        $formula->price       = '600 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>This grayish gas weakens victims by slowing them down, or even putting them asleep.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Slowed 1 (1 round)</dd>
    <dt>Stage 2</dt> <dd>Asleep (1D6 rounds) (WIS DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 17, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Slumber Wine';
        $formula->type        = 'Poison';
        $formula->price       = '2,500 gp';
        $formula->method      = 'Ingested';
        $formula->description = "<p>Characters asleep from slumber wine can't wake up by any means while the Poison lasts, don't need to eat or drink while asleep in this way, and appear to be recently dead unless an examiner succeeds at a DC 30 Medicine check.</p>
<dl>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Maximum Duration</dt> <dd>7 days</dd>
    <dt>Stage 1</dt> <dd>Asleep (1 day) (CON DC 15)</dd>
    <dt>Stage 2</dt> <dd>Asleep (2 days) (CON DC 15)</dd>
    <dt>Stage 3</dt> <dd>Asleep (3 days) (CON DC 15)</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 20, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Spider Venom';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>A paste made by mashing the fine, threadlike roots of a certain creeper vine.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>1D6 Poison damage and Sluggish 1 (1 minute) (CON DC 11)</dd>
    <dt>Stage 2</dt> <dd>2D6 Poison damage and Sluggish 2 (1 minute) (CON DC 11)</dd>
    <dt>Stage 3</dt> <dd>3D6 Poison damage and Sluggish 3 (1 minute) (CON DC 11)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Injury', 'Poison', 'Plant'], [
            'skills' => [
                'Crafting' => ['dc' => 11, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 13],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Wolf Spider Venom';
        $formula->type        = 'Poison';
        $formula->price       = '250 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This Poison must be harvested from a dead or incapacitated Giant Wolf Spider.</p>
<p>If the Poison damage reduces the target to 0 Hit Points, the target is Stable but Paralyzed for 1 hour, even after regaining Hit Points.</p>
<dl>
    <dt>Onset</dt> <dd>Immediately</dd>
    <dt>Maximum Duration</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>1D6 Poison (1 round)</dd>
    <dt>Stage 2</dt> <dd>1D6 Poison (1 round) (CON DC 11)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => ['Nature' => ['dc' => 14]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Tears of Death';
        $formula->type        = 'Poison';
        $formula->price       = '9,000 gp';
        $formula->method      = 'Contact';
        $formula->rarity      = 'Rare';
        $formula->description = '<p>Tears of Death is among the most powerful of Alchemical Poisons, distilled from extracts of five other deadly Poisons in just the right amount.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>10 minutes</dd>
    <dt>Stage 1</dt> <dd>1D6 Poison damage, 1D8 CON damage, and Paralyzed (1 round) (CON DC 25)</dd>
    <dt>Stage 2</dt> <dd>2D6 Poison damage, 2D4 CON damage, and Paralyzed (1 round) (CON DC 25)</dd>
    <dt>Stage 3</dt> <dd>3D6 Poison damage, 2D4 CON damage, and Paralyzed (1 round) (CON DC 25)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Virulent'], [
            'skills' => ['Crafting' => ['dc' => 22, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Terinav Root';
        $formula->type        = 'Poison';
        $formula->price       = '500 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This oil from the root of the terinav plant causes a kind of temporal brain paralysis.</p>
<dl>
    <dt>Onset</dt> <dd>3 rounds</dd>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>Incapacitated (1D6 rounds) (CON DC 11)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => ['Crafting' => ['dc' => 12, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Thrum';
        $formula->type        = 'Poison';
        $formula->price       = '700 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This light blue liquid smells like lemons. It puts the victim in an advanced state of alcoholism.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>At least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>Clumsy: 2 (5 rounds)</dd>
    <dt>Stage 2</dt> <dd>Clumsy: 4 (until 8 hours of bed rest) (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Toad Poison';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This Poison must be harvested from a dead or incapacitated giant toad.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>1D10 Poison (1 round) (CON DC 11)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => ['Nature' => ['dc' => 15]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Torpor';
        $formula->type        = 'Poison';
        $formula->price       = '600 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>6 hours</dd>
    <dt>Stage 1</dt> <dd>Incapacitated (4 hours) (CON DC 15)</dd>
    <dt>Stage 2</dt> <dd>Incapacitated (1 hour) (CON DC 15)</dd>
    <dt>Stage 3</dt> <dd>Incapacitated (1 hour) (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 17, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Triple-Flower Enzyme';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>When this sticky yellow liquid comes in contact with skin, it inflicts damage if not neutralized. It can be easily removed by washing, but the lost health points are not recovered.</p>
<dl>
    <dt>Onset</dt> <dd>Immediate</dd>
    <dt>Maximum Duration</dt> <dd>8 minutes</dd>
    <dt>Stage 1</dt> <dd>1 Poison (1 minute) (CON DC 12)</dd>
    <dt>Stage 2</dt> <dd>1 Poison (1 minute)</dd>
    <dt>Stage 3</dt> <dd>1 Poison (1 minute)</dd>
    <dt>Stage 4</dt> <dd>1 Poison (1 minute)</dd>
    <dt>Stage 5</dt> <dd>1 Poison (1 minute)</dd>
    <dt>Stage 6</dt> <dd>1 Poison (1 minute)</dd>
    <dt>Stage 7</dt> <dd>1 Poison (1 minute)</dd>
    <dt>Stage 8</dt> <dd>1 Poison (1 minute)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Contact', 'Poison', 'Plant'], [
            'skills' => ['Nature' => ['dc' => 12]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Troll Blood';
        $formula->type        = 'Poison';
        $formula->price       = '300 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This gray-green fluid requires, among other things, five drops of troll blood for its preparation. It becomes completely harmless if it reaches a temperature above 105 F. The effect being very short, the prisoner usually stands in from of his victim.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>5 rounds</dd>
    <dt>Stage 1</dt> <dd>Petrified (1D4 rounds) (CON DC 15) On a Critical Fail, the duration is 5 rounds.</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Ingested', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 20, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ungol Dust';
        $formula->type        = 'Poison';
        $formula->price       = '600 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>This Poison looks like dusty-brown flakes. The smell they give off when consumed causes serious respiratory lesions which are never fully recovered.</p>
<dl>
    <dt>Onset</dt> <dd>4 rounds</dd>
    <dt>Maximum Duration</dt> <dd>Permanent</dd>
    <dt>Stage 1</dt> <dd>2 CON drain (Permanent) (CON DC 15). The Restoration spell can recover the lost CON</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => [
                'Crafting' => ['dc' => 18, 'meta' => 'Poison Making'],
                'Arcana'   => ['dc' => 14],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Uropygus';
        $formula->type        = 'Poison';
        $formula->price       = '600 gp';
        $formula->method      = 'Inhaled';
        $formula->description = '<p>The yellowish gas extracted form this Poison greatly disturbs the coordination and the auditory system, which affects the balance.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>8 rounds</dd>
    <dt>Stage 1</dt> <dd>Clumsy 8 (1 round) (CON DC 18)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Inhaled', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 20, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Veiled Flower';
        $formula->type        = 'Poison';
        $formula->price       = '150 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This small plant is relatively easily found in the meadows. It contains a small paralyzing Poison that still worries herd owners. However, the taste of this herb is very strong and very unpleasant, which often allows from the first bite of food to realize that one Poisons.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>1 minute</dd>
    <dt>Stage 1</dt> <dd>As if Restrained (1 minute) (CON DC 9)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => ['Crafting' => ['dc' => 7, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Venoms Blood';
        $formula->type        = 'Poison';
        $formula->price       = '1,200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This mix of venoms (Giant Scorpion, Giant Toad, and Giant Snake) looks like a yellow liquid. It is more unstable (lower DC) but more powerful than normal venoms.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>3D10 Poison (1 round)</dd>
    <dt>Stage 2</dt> <dd>3D10 Poison (1 round) (CON DC 10)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => [
                'Crafting' => ['dc' => 20, 'meta' => 'Poison Making'],
                'Nature'   => ['dc' => 15],
            ],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Giant Wasp Venom';
        $formula->type        = 'Poison';
        $formula->level       = 12;
        $formula->price       = '300 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>1D8 Poison damage and Sluggish 1 (1 round) (CON DC 18)</dd>
    <dt>Stage 2</dt> <dd>1D12 Poison damage and Sluggish 2 (1 round) (CON DC 18)</dd>
    <dt>Stage 3</dt> <dd>2D8 Poison damage and Sluggish 2 (1 round) (CON DC 18)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => ['Crafting' => ['dc' => 9, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Witch Caress';
        $formula->type        = 'Poison';
        $formula->price       = '200 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This Poison in the form of a colorless liquid is almost impossible to detect visually. It is easy to wash with water, which makes it immediately harmless. Som unscrupulous jewelers use it on their goods, in their safes or when traveling in unsafe areas.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>1D8 Poison (1 round) (CON DC 12)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 10, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Witch Kiss';
        $formula->type        = 'Poison';
        $formula->price       = '500 gp';
        $formula->method      = 'Contact';
        $formula->description = '<p>This mix of several toxins acts throughout all the body. It looks like a brown gelatin.</p>
<dl>
    <dt>Onset</dt> <dd>1 minute</dd>
    <dt>Maximum Duration</dt> <dd>Until at least 8 hours of bed rest</dd>
    <dt>Stage 1</dt> <dd>1 point of CON, DEX, and INT drain (until 8 hours of bed rest) (CON DC 13)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wolfsbane Poison';
        $formula->type        = 'Poison';
        $formula->price       = '1,000 gp';
        $formula->method      = 'Contact';
        $formula->description = "<dl>
    <dt>Onset</dt> <dd>10 minutes</dd>
    <dt>Maximum Duration</dt> <dd>6 minutes</dd>
    <dt>Stage 1</dt> <dd>9D6 Poison damage (1 round) (CON DC 15)</dd>
    <dt>Stage 2</dt> <dd>12D6 Poison damage (1 round) (CON DC 15)</dd>
    <dt>Stage 3</dt> <dd>15D6 Poison damage (1 round) (CON DC 15)</dd>
    <dt>Additional Effect</dt> <dd>If you survive the damage from Stage 3 of wolfsbane, and you are afflicted with Lycanthropy, your're immediately cured.</dd>
</dl>";
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Contact', 'Poison', 'Virulent', 'Plant'], [
            'skills' => ['Crafting' => ['dc' => 12, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wolves Herb';
        $formula->type        = 'Poison';
        $formula->price       = '250 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This very Poisonous plant, generally used to kill foxes and wolves, can also be deadly to humanoids. Well-prepared, it also serves as an antidote to the venom of scorpions.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Maximum Duration</dt> <dd>1 minute</dd>
    <dt>Stage 1</dt> <dd>3D4 Poison (1 round) (CON DC 9)</dd>
    <dt>Stage 2</dt> <dd>Paralyzed (1 minute)</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => ['Nature' => ['dc' => 12]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wyvern Poison';
        $formula->type        = 'Poison';
        $formula->price       = '1,200 gp';
        $formula->method      = 'Injury';
        $formula->description = '<dl>
    <dt>Maximum Duration</dt> <dd>6 rounds</dd>
    <dt>Stage 1</dt> <dd>3D6 Poison damage (1 round) (CON DC 15)</dd>
    <dt>Stage 2</dt> <dd>3D6 Poison damage (1 round) (CON DC 15)</dd>
    <dt>Stage 3</dt> <dd>3D6 Poison damage (1 round) (CON DC 15)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => ['Crafting' => ['dc' => 16, 'meta' => 'Poison Making']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Yellow Lotus Dust';
        $formula->type        = 'Poison';
        $formula->price       = '800 gp';
        $formula->method      = 'Ingested';
        $formula->description = '<p>This yellow Poison has a very acidic citric taste. It permanently changes elocution.</p>
<dl>
    <dt>Onset</dt> <dd>5 rounds</dd>
    <dt>Maximum Duration</dt> <dd>Permanent</dd>
    <dt>Stage 1</dt> <dd>1D6 CHA drain (Permanent) (CON DC 10). The spell Restoration can restore the lost CHA damage.</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Ingested', 'Poison', 'Plant'], [
            'skills' => ['Nature' => ['dc' => 12]],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Yellow Mold Oil';
        $formula->type        = 'Poison';
        $formula->price       = '8 gp';
        $formula->method      = 'Injury';
        $formula->description = '<p>This thick substance is distilled from the Yellow Mold</p>
<dl>
    <dt>Maximum Duration</dt> <dd>4 rounds</dd>
    <dt>Stage 1</dt> <dd>1D8 Poison damage (1 round) (CON DC 14)</dd>
    <dt>Stage 2</dt> <dd>1D10 Poison damage (1 round) (CON DC 14)</dd>
    <dt>Stage 3</dt> <dd>2D8 Poison damage (1 round) (CON DC 14)</dd>
</dl>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Injury', 'Poison', 'Animal'], [
            'skills' => ['Crafting' => ['dc' => 5, 'meta' => 'Poison Making']],
        ]);
    }
}
