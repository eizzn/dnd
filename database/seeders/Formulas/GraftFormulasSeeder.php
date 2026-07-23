<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GraftFormulasSeeder extends Seeder
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
        $formula->name        = 'Beholder Eye Stalk';
        $formula->type        = 'Graft';
        $formula->price       = '195,000 gp';
        $formula->description = '<p>You graft a Beholder Eye Stalk to your head. You may use a Double Action to trigger the Eye Stalk up to 3 times per Long Rest. The Eye Stalk can only produce one kind of ray. You must provide the spell at Graft time that the Eye Stalk will produce. You have -12 penalty to Hit, and the targets get a +12 bonus to any Save vs the eye power. You may have up to 3 Eye Stalks Grafted onto a single recipient. If you have at least 2 Eye Stalks, you have all around vision.</p>
<p>The Eye Stalk grants Darkvision (if you do not already have it). The Eye Power has a Range of 90 feet and has a flat Save DC of 18 and can have one of the following powers.</p>
<ul>
    <li>Cause Wounds (Heightened +3)</li>
    <li>Disintegrate (requires 2 Spell Points per use)</li>
    <li>Finger of Death (requires 2 Spell Points per use)</li>
    <li>Flesh to Stone (requires 2 Spell Points per use)</li>
    <li>Slow</li>
</ul>
<p>The recipient can take the following Feats and Talents to improve the effectiveness of their extra arm.</p>
<dl>
    <dt>Multi Attacker (Feat)</dt> <dd>Taking this Feat will also grant you an Additional Action. This additional Action can only be used to trigger an Eye Stalk power.</dd>
    <dt>Improved Extra Limb</dt> <dd>The penalty to Hit and the bonus to Save for one of your Eye Stalks is reduced by +4. You may take this Talent multiple times. Note: taking this Talent reduces the penalty to only one of your Eye Stalks.</dd>
</dl>
<p>You must acquire a fresh Beholder Eye Stalk. The recipient suffers 10 CON damage as part of the procedure and a permanent =2 CHA loss.</p>';
        $helper->saveFormula($formula, ['Necromancy', 'Graft'], [
            'skills'    => [
                'Medicine' => ['dc' => 20],
            ],
            'spells'    => ['Gentle Repose', 'Polymorph'],
            'feats'     => ['Expert Transmuter', 'Necromancer', 'Graft Flesh'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Gazing Eye';
        $formula->type        = 'Graft';
        $formula->price       = '195,000 gp';
        $formula->description = "<p>The Graft replaces one of the recipient's own eyes and gives it a gaze attack. This attack can be one of the following.</p>
<ul>
    <li>Charm (Heightened +3)</li>
    <li>Fear (Heightened +2)</li>
    <li>Hold Person</li>
    <li>Sleep (Heightened +2)</li>
</ul>
<p>You may make the Gaze attack as a Double Action and 1 Spell Point. The Gaze attack has a range of 30 feet and a Save DC of 16.</p>
<p>You must acquire a Beholder Eye Stalk. The recipient suffers 10 CON damage as part of the procedure.</p>";
        $helper->saveFormula($formula, ['Graft', 'Necromancy'], [
            'skills' => [
                'Medicine' => ['dc' => 20],
            ],
            'spells' => [
                'Charm'  => ['meta' => 'Heightened +3'],
                'Fear'   => ['meta' => 'Heightened +2'],
                'Hold Person',
                'Sleep'  => ['meta' => 'Heightened +2'],
            ],
            'feats'  => ['Expert Transmuter', 'Necromancer', 'Graft Flesh'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Central Eye';
        $formula->type        = 'Graft';
        $formula->price       = '165,000 gp';
        $formula->description = "<p>Implanted in the forehead above the recipient's normal eyes, a third eye duplicates the effects of a beholder's large central eye, as a Double Action, producing an antimagic cone similar to an Antimagic Field (but does not require Concentration) up to 3 times per Long Rest.</p>
<p>You must acquire an intact Beholder Central Eye. The recipient suffers 10 CON Damage as part of the procedure and suffers a permanent -4 penalty to CHA.</p>";
        $helper->saveFormula($formula, ['Graft', 'Necromancy'], [
            'skills' => [
                'Medicine' => ['dc' => 20],
            ],
            'spells' => ['Antimagic Field'],
            'feats'  => ['Expert Transmuter', 'Necromancer', 'Graft Flesh'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Black Dragon Skin';
        $formula->type        = 'Graft';
        $formula->price       = '50,500 gp';
        $formula->description = '<p>You graft the scales of a black dragon into the recipients skin, granting the following.</p>
<ul>
    <li>Resistance to Acid</li>
    <li>+2 to AC (Natural Armor)</li>
    <li>Damage Reduction: 2</li>
    <li>-2 Penalty to DEX</li>
</ul>';
        $helper->saveFormula($formula, ['Acid', 'Dragon', 'Graft'], [
            'skills'    => [
                'Crafting' => ['dc' => 7, 'meta' => 'Leatherworking'],
                'Medicine' => ['dc' => 15],
            ],
            'spells'    => [
                'Polymorph',
                'Resist Acid',
            ],
            'materials' => ['Monster Scales' => [
                'quantity' => 'At least 10 lbs',
                'meta'     => 'Must be scales from a recently killed Black Dragon (or properly cured by an alchemist). This can be replaced with Copper Dragon scales as well.',
            ]],
            'feats'     => ['Expert Transmuter', 'Graft Flesh'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Blue Dragon Skin';
        $formula->type        = 'Graft';
        $formula->price       = '50,500 gp';
        $formula->description = '<p>You graft the scales of a blue dragon into the recipients skin, granting the following.</p>
<ul>
    <li>Resistance to Electricity</li>
    <li>+2 to AC (Natural Armor)</li>
    <li>Damage Reduction: 2</li>
    <li>-2 Penalty to DEX</li>
</ul>';
        $helper->saveFormula($formula, ['Electricity', 'Dragon', 'Graft'], [
            'skills'    => [
                'Crafting' => ['dc' => 7, 'meta' => 'Leatherworking'],
                'Medicine' => ['dc' => 15],
            ],
            'spells'    => [
                'Polymorph',
                'Resist Elements' => ['meta' => 'This can be replaced by Resist Electricity'],
            ],
            'materials' => ['Monster Scales' => [
                'quantity' => 'At least 10 lbs',
                'meta'     => 'Must be scales from a recently killed Blue Dragon (or properly cured by an alchemist). This can be replaced with Bronze Dragon scales as well.',
            ]],
            'feats'     => ['Expert Transmuter', 'Graft Flesh'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Green Dragon Skin';
        $formula->type        = 'Graft';
        $formula->price       = '50,500 gp';
        $formula->description = '<p>You graft the scales of a white dragon into the recipients skin, granting the following.</p>
<ul>
    <li>Resistance to Poison through Contact or Injury (not ingestion)</li>
    <li>Gain Advantage on all Saves vs Poison</li>
    <li>+2 to AC (Natural Armor)</li>
    <li>Damage Reduction: 1</li>
    <li>-1 Penalty to DEX</li>
</ul>';
        $helper->saveFormula($formula, ['Poison', 'Dragon', 'Graft'], [
            'skills'    => [
                'Crafting' => ['dc' => 7, 'meta' => 'Leatherworking'],
                'Medicine' => ['dc' => 15],
            ],
            'spells'    => [
                'Polymorph',
                'Resist Poison',
            ],
            'materials' => ['Monster Scales' => [
                'quantity' => 'At least 10 lbs',
                'meta'     => 'Must be scales from a recently killed Green Dragon (or properly cured by an alchemist).',
            ]],
            'feats'     => ['Expert Transmuter', 'Graft Flesh'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Red Dragon Skin';
        $formula->type        = 'Graft';
        $formula->price       = '50,500 gp';
        $formula->description = '<p>You graft the scales of a red dragon into the recipients skin, granting the following.</p>
<ul>
    <li>Resistance to Fire</li>
    <li>Gain the effects of Endure Elements, Heightened +3 (heat only)</li>
    <li>+2 to AC (Natural Armor)</li>
    <li>Damage Reduction: 2</li>
    <li>-2 Penalty to DEX</li>
</ul>';
        $helper->saveFormula($formula, ['Fire', 'Dragon', 'Graft'], [
            'skills'    => [
                'Crafting' => ['dc' => 7, 'meta' => 'Leatherworking'],
                'Medicine' => ['dc' => 15],
            ],
            'spells'    => [
                'Polymorph',
                'Endure Elements' => ['meta' => 'Heat, and Heightened +3'],
            ],
            'materials' => ['Monster Scales' => [
                'quantity' => 'At least 10 lbs',
                'meta'     => 'Must be scales from a recently killed Red Dragon (or properly cured by an alchemist). This can be replaced with Gold Dragon scales as well.',
            ]],
            'feats'     => ['Expert Transmuter', 'Graft Flesh'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'White Dragon Skin';
        $formula->type        = 'Graft';
        $formula->price       = '50,500 gp';
        $formula->description = '<p>You graft the scales of a white dragon into the recipients skin, granting the following.</p>
<ul>
    <li>Resistance to Cold</li>
    <li>Gain the effects of Endure Elements, Heightened +3 (cold only)</li>
    <li>+2 to AC (Natural Armor)</li>
    <li>Damage Reduction: 1</li>
    <li>-1 Penalty to DEX</li>
</ul>';
        $helper->saveFormula($formula, ['Cold', 'Dragon', 'Graft'], [
            'skills'    => [
                'Crafting' => ['dc' => 7, 'meta' => 'Leatherworking'],
                'Medicine' => ['dc' => 15],
            ],
            'spells'    => [
                'Polymorph',
                'Endure Elements' => ['meta' => 'Cold, and Heightened +3'],
            ],
            'materials' => ['Monster Scales' => [
                'quantity' => 'At least 10 lbs',
                'meta'     => 'Must be scales from a recently killed White Dragon (or properly cured by an alchemist). This can be replaced with Silver Dragon scales as well.',
            ]],
            'feats'     => ['Expert Transmuter', 'Graft Flesh'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Extra Arm';
        $formula->type        = 'Graft';
        $formula->price       = '150,000 gp';
        $formula->description = '<p>You graft a full arm onto the target creature. The recipient of the graft will not be proficient with the arm, so it will have a -12 penalty to DEX and STR. A target can have at most 4 Extra Limbs.</p>
<p>The recipient can take the following Feats and Talents to improve the effectiveness of their extra arm.</p>
<dl>
    <dt>Multi Attacker (Feat)</dt> <dd>Taking this Feat will also grant you an Additional Action. This additional Action can only be used to make a Melee Action, a Ranged Thrown Action, or a Manipulate Action. You may take this Feat multiple times, once for each Extra Limb you graft.</dd>
    <dt>Improved Extra Limb</dt> <dd>The penalty to STR and DEX for one of your Extra Limb is reduced by +4. You may take this Talent multiple times. Note: taking this Talent reduces the penalty to only one of your Extra Limbs.</dd>
</dl>
<p>You must acquire a fresh limb of the same size as the target. The recipient suffers 6 CON damage as part of the procedure.</p>
<p>This can also be accomplished with the Fuse Flesh Power and the Graft Feat (does not need the Expert Transmuter and Necromancer Feats, and does not need the Gentle Repose and Polymorph Spells). You still need the fresh limb and the recipient still suffers the CON damage.</p>';
        $helper->saveFormula($formula, ['Necromancy', 'Graft'], [
            'skills'    => [
                'Medicine' => ['dc' => 20],
            ],
            'spells'    => ['Gentle Repose', 'Polymorph'],
            'feats'     => ['Expert Transmuter', 'Necromancer', 'Graft Flesh'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Drow Mechanical';
        $formula->type        = 'Graft';
        $formula->price       = '100,000 gp';
        $formula->crafting    = '<ul>
    <li>Form the mold using sand, and cave grit. Coat with the boiled cave worm oil for easy removal. Line with the slime and Ahaabra to form the other rubbery "skin".</li>
    <li>Melt the metal alloy and pour into the mold</li>
</ul>';
        $formula->description = '<p>You are skilled at crafting mechanical limbs (arms, legs) to either enhance a creature (known to drow and elves as Ressxun), or replace a lost limb. If the limb is an additional arm, then follow the rules for the Extra Arm (except the initial penalty is -10). If the graft is replacing a lost limb, then there is no penalty.</p>
<p>Drow Mechanicals are not forged, but formed by melting metal and pouring the metal into prepared casts or molds (these tend to be copper or nickel rich electrum and alloys of gold and silver).</p>
<p>The rubbery skin does not rot or diminish except in the persistent presence of heat that slowly causes the skin to evaporate</p>
<p>Famous drow artificers that crafted mechanicals</p>
<ul>
    <li>Everele Vrousouz: first to craft individual digits (fingers)</li>
    <li>Klathlone Amarrodra: first and only drow artificer to inscribe more than 1 spell rune into a mechanical</li>
</ul>
<p>Some various alloys used in this process</p>
<ul>
    <li>Araelzebol</li>
    <li>Calamaerzrebol</li>
    <li>Nurlzrebol</li>
</ul>';
        $helper->saveFormula($formula, ['Graft'], [
            'skills'    => [
                'Crafting' => ['dc' => 12, 'meta' => 'Metalworking'],
                'Medicine' => ['dc' => 9],
            ],
            'feats'     => ['Artifice Armorer', 'Graft Flesh'],
            'materials' => [
                'Nickel'   => ['meta' => '12% of the alloy'],
                'Copper'   => ['meta' => '10% of the alloy'],
                'Silver'   => ['meta' => '40% of the alloy'],
                'Gold'     => ['meta' => '35% of the alloy'],
                'Platinum' => ['meta' => 'Trace amounts of the alloy'],
                'Chromium' => ['meta' => 'Trace amounts of the alloy'],
                'Slime'    => ['meta' => 'Carrion Crawler, Giant Snails, or Giant Slugs'],
                'Ahaabra'  => ['meta' => 'At least 2'],
            ],
        ]);
    }
}
