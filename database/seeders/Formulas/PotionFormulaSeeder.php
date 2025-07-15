<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class PotionFormulaSeeder extends Seeder
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
        $formula->name          = 'Holy Water';
        $formula->type          = 'Potion';
        $formula->level         = 3;
        $formula->price         = '1 gp';
        $formula->crafting_time = '1 hour';
        $formula->description   = '<p>As an Action, you can splash Holy Water onto a creature within 5 feet of you or throw it up to 20 feet by making a Ranged Attack. If the target is a Fiend or Undead, it takes 3D6 Good damage.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Good', 'Water', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 8, 'meta' => 'Cooking']],
            'materials' => ['Silver' => ['meta' => 'powdered']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Bless'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Cold Resistance';
        $formula->type          = 'Potion';
        $formula->level         = 3;
        $formula->price         = '2 gp';
        $formula->activation    = 'Imbibed; Operation Activation';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>1 minute</dd>';
        $formula->description   = '<p>For 24 hours after the onset of this potion, you become protected from the effects of severe cold. You gain Resistance to Cold damage and can survive in freezing weather without ill effects (as low as 0 degrees fahrenheit)</p>';
        $helper->saveFormula($formula, ['Potion', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 7, 'meta' => 'Cooking']],
            'feats'  => ['Brew Potion'],
            'spells' => ['Endure Elements'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Fire Breathing';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '50 gp';
        $formula->activation    = 'Imbibed; Operation Activation';
        $formula->bulk          = 'L';
        $formula->crafting_time = '8 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->description   = '<p>For 1 minute, you gain the ability to breath fire as if you had the Dragon Breath (Red) spell cast on yourself.</p>';
        $helper->saveFormula($formula, ['Potion', 'Consumable', 'Fire'], [
            'skills'    => ['Crafting' => ['dc' => 9, 'meta' => 'Cooking']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Dragon Breath' => ['meta' => 'Must chose Red Dragon']],
            'materials' => ['Dragontongue Petals' => ['meta' => 'At least 3 petals, crushed']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Fire Resistance';
        $formula->type          = 'Potion';
        $formula->level         = 3;
        $formula->price         = '2 gp';
        $formula->activation    = 'Imbibed; Operation Activation';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>1 minute</dd>';
        $formula->description   = '<p>For 24 hours after the onset of this potion, you become protected from the effects of intense heat. You gain Resistance to Fire damage and can survive in sweltering heat without ill effects (as high as 120 degrees fahrenheit)</p>';
        $helper->saveFormula($formula, ['Potion', 'Consumable'], [
            'skills'    => ['Crafting' => ['dc' => 7, 'meta' => 'Cooking']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Endure Elements'],
            'materials' => ['Druid Ephedra' => ['meta' => 'At least 5 leaves, boiled in oil until just a green sludge remains. Add sludge to potion']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Flying';
        $formula->type          = 'Potion';
        $formula->level         = 6;
        $formula->price         = '70 gp';
        $formula->activation    = 'Imbibed; Operation Activation';
        $formula->bulk          = 'L';
        $formula->crafting_time = '6 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->description   = '<p>When you drink this potion, you gain a Flying Speed equal to your Walking Speed for 1 hour and can hover. If you are in the air when the potion wears off, you fall unless you have some other means of staying aloft.</p>';
        $helper->saveFormula($formula, ['Potion', 'Consumable'], [
            'skills'    => ['Crafting' => ['dc' => 14, 'meta' => 'Cooking']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Fly'],
            'materials' => ['Thunderleaf' => ['meta' => 'At least 5 leaves, crushed']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Healing, Lesser';
        $formula->type          = 'Potion';
        $formula->level         = 2;
        $formula->price         = '1 gp / 3 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '2 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>Start of your next turn</dd>';
        $formula->activation    = 'Imbibed; Operate Activation';
        $formula->description   = '<p>Upon drinking this potion, you regain 1D6 +1 Hit Points. If you are at maximum Hit Points when you drink this potion, you instead gain a +2 item bonus to Saves against toxins for 1 hour.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 8, 'meta' => 'Cooking']],
            'feats'  => ['Brew Potion'],
            'spells' => ['Cure Wounds'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Healing';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '20 gp / 50 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '8 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>Start of your next turn</dd>';
        $formula->activation    = 'Action; Operate Activation';
        $formula->description   = '<p>Upon drinking this potion, you regain 3D6 +3 Hit Points and can attempt a new Save against any one toxin of 8th level or lower currently afflicting you. If you succeed, the toxin is neutralized.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 10, 'meta' => 'Cooking']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Cure Wounds' => ['meta' => 'Heighten +2']],
            'materials' => [
                'Blood Herb' => ['meta' => 'About 2oz, crushed'],
                'Blue Herb'  => ['meta' => 'About 1oz, crushed'],
            ],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Healing, Greater';
        $formula->type          = 'Potion';
        $formula->level         = 10;
        $formula->price         = '200 gp / 400 gp';
        $formula->rarity        = 'Rare';
        $formula->bulk          = 'L';
        $formula->crafting_time = '12 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>Start of your next turn</dd>';
        $formula->activation    = 'Action; Operate Activation';
        $formula->description   = '<p>Upon drinking this potion, you regain 5D6 +5 Hit Points and can end a toxin afflicting you as long as it is not higher than 12th level.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 15, 'meta' => 'Brew Potion']],
            'feats'     => ['Improved Brew Potion'],
            'spells'    => ['Cure Wounds' => ['meta' => 'Heighten +5']],
            'materials' => ['Kreet Paste' => ['meta' => 'At least 3 oz']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Healing, Superior';
        $formula->type          = 'Potion';
        $formula->level         = 15;
        $formula->price         = '300 gp / 600 gp';
        $formula->rarity        = 'Rare';
        $formula->bulk          = 'L';
        $formula->crafting_time = '18 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>Start of your next turn</dd>';
        $formula->activation    = 'Action; Operate Activation';
        $formula->description   = '<p>Upon drinking this potion, you regain 8D6 +8 (reroll all 1s and 2s) Hit Points and can end a toxin afflicting you as long as it is not higher than 15th level.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 17, 'meta' => 'Brew Potion']],
            'feats'     => ['Improved Brew Potion'],
            'spells'    => ['Cure Wounds' => ['meta' => 'Heighten +7']],
            'materials' => ['Spineflower Berries' => ['meta' => 'At least 5 berries, crushed']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Jumping';
        $formula->type          = 'Potion';
        $formula->level         = 2;
        $formula->price         = '2 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '2 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->activation    = 'Action; Operate Activation';
        $formula->description   = '<p>For 1 minute after drinking this potion, you can attempt High Jumps and Long Jumps with a single Leap Action, rather than as a Double Action activity requiring a Stride and a Leap.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 5, 'meta' => 'Cooking']],
            'feats'  => ['Brew Potion'],
            'spells' => ['Jump'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Quickness';
        $formula->type          = 'Potion';
        $formula->level         = 3;
        $formula->price         = '20 gp';
        $formula->rarity        = 'Rare';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->activation    = 'Action; Operate Activation';
        $formula->description   = "<p>For 1 minute after the onset of this potion, your features become thin and angular and you become swifter and nimbler, but your body also becomes fragile.</p>
<dl>
    <dt>Benefit</dt> <dd>You gian a +4 item bonus to DEX, and you become Accelerated 10.</dd>
    <dt>Drawback</dt> <dd>You take a –2 item penalty to CON and you can't recover Hit Points lost in this way by any means while the potion lasts.</dd>
</dl>";
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 10, 'meta' => 'Cooking']],
            'feats'  => ['Brew Potion'],
            'spells' => ["Cat's Grace"],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Strength';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '5 gp';
        $formula->rarity        = 'Rare';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->activation    = 'Action; Operate Activation';
        $formula->description   = '<p>For 1 minute after the onset of this potion, you increase muscle mass, but your lumbering form is clumsy.</p>
<dl>
    <dt>Benefit</dt> <dd>You gain a +4 item bonus to STR.</dd>
    <dt>Drawback</dt> <dd>You gain a -2 item penalty to DEX.</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 8, 'meta' => 'Brew Potion']],
            'feats'  => ['Brew Potion'],
            'spells' => ["Bull's Strength"],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Potion of Strength, Greater';
        $formula->type        = 'Potion';
        $formula->level       = 11;
        $formula->price       = '40 gp';
        $formula->rarity      = 'Rare';
        $formula->bulk        = 'L';
        $formula->meta        = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>For 10 minutes after the onset of this mutagen, you increase muscle mass, but your lumbering form is clumsy.</p>
<dl>
    <dt>Benefit</dt> <dd>You gain a +6 item bonus to STR.</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 12, 'meta' => 'Brew Potion']],
            'feats'   => ['Improved Brew Potion'],
            'spells'  => ["Bull's Strength" => ['meta' => 'Heighten +3']],
            'monster' => ['Ogre' => ['meta' => '3 drops of blood']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Potion of Vitality';
        $formula->type        = 'Potion';
        $formula->level       = 5;
        $formula->price       = '5 gp';
        $formula->rarity      = 'Rare';
        $formula->bulk        = 'L';
        $formula->meta        = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>For 10 minutes after the onset of this potion, your body becomes thick and sturdy, and you exhibit a healthy glow, though you tend to be ponderous and unobservant.</p>
<dl>
    <dt>Benefit</dt> <dd>You gain a +4 item bonus to CON Saves and 15 temporary Hit Points.</dd>
    <dt>Drawback</dt> <dd>You take a –1 item penalty to WIS Saves, Perception checks, Medicine checks, Nature checks, Religion checks, and Survival checks.</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 10, 'meta' => 'Cooking']],
            'feats'  => ['Brew Potion'],
            'spells' => ["Bear's Endurance"],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Speed';
        $formula->type          = 'Potion';
        $formula->rarity        = 'Rare';
        $formula->level         = 6;
        $formula->price         = '200 - 450 gp';
        $formula->activation    = 'Imbibed';
        $formula->crafting_time = '8 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>Start of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting      = '<ul>
    <li>Purified water (typically captured steam from a boiling pot of water) is first prepared and must start from room temperature</li>
    <li>The water is then slowly heated to a simmer.</li>
    <li>The Haste spell is cast on the simmering water. While the spell is being cast, the Quickling blood and the Horse Sweet is added. They must be added after the Haste spell is started casting and must be all added before the Haste spell is completed.</li>
    <li>The Horse Sweet turns yellow and the Quickling blood turns black. After a total of 4 hours of simmering heat, the black substance begins to swirl in the light yellow liquid, and the potion is complete.</li>
</ul>';
        $formula->description = "<p>When you drink this potion, you gain the effect of the Haste Spell for 1 minute (no concentration required). The potion's yellow fluid is streaked with black and swirls on its own.</p>";
        $helper->saveFormula($formula, ['Potion', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 8, 'meta' => 'Cooking']],
            'feats'  => ['Brew Potion'],
            'spells' => ['Haste'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Oil of Etherealness';
        $formula->type          = 'Oil';
        $formula->rarity        = 'Rare';
        $formula->level         = 13;
        $formula->price         = '1,200 gp';
        $formula->activation    = 'Applied to body';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '10 hours';
        $formula->crafting      = '<ul>
    <li>The primary ingredient to create this oil is the fluid from the eyeballs of any creature that can see into the ethereal plane, such as a Basilisk, Medusa, or a physical creature from the ethereal plane.</li>
    <li>The fluid is placed within an air-tight container that is transparent and has a tube at the top that can condense and capture gases back to liquid.</li>
    <li>The container is exposed to sunlight and the Etherealness spell is cast on the fluid</li>
    <li>The fluid will now slowly evaporate from the exposure to the sunlight over the course of 5 hours, and will condense into the final oil in the condenser.</li>
</ul>';
        $formula->description = "<p>Beads of this cloudy gray oil form on the outside of its container and quickly evaporate. The oil can cover a Medium or smaller creature, along with the equipment it's wearing and carrying (one additional vial is required for each size category above Medium). Applying the oil takes 10 minutes. The affected creature then gains the effect of the etherealness spell for 1 hour.</p>";
        $helper->saveFormula($formula, ['Potion', 'Consumable'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Cooking']],
            'spells' => ['Etherealness'],
            'feats'  => ['Improved Brew Potion'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Oil of Slipperiness';
        $formula->type          = 'Oil';
        $formula->price         = '100 gp';
        $formula->level         = 2;
        $formula->activation    = 'Applied to body or ground (see text)';
        $formula->meta          = '<dt>Onset</dt> <dd>Start of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '16 hours';
        $formula->crafting      = '<ul>
    <li>The primary ingredient to create this potion is either Purple Worm slim or the liver of a Giant Pike fish.</li>
    <li>The substance must be lightly heated over 16 hours to remove as much water as possible.</li>
    <li>After the substance is removed from the heat and allowed to cool, the Grease spell is cast on the substance and the oil is ready</li>
</ul>';
        $formula->description = "<p>This sticky black unguent is thick and heavy in the container, but it flows quickly when poured. The oil can cover a Medium or smaller creature, along with the equipment it's wearing and carrying (one additional vial is required for each size category above Medium). Applying the oil takes 10 minutes. The affected creature then gains the effect of a Freedom of Movement spell for 8 hours.</p>
<p>Alternatively, the oil can be poured on the ground as an Action, where it covers a 10-foot square, duplicating the effect of the Grease spell in that area for 8 hours.</p>";
        $helper->saveFormula($formula, ['Potion', 'Consumable'], [
            'skills'    => [
                'Crafting' => ['dc' => 11, 'meta' => 'Cooking'],
                'Nature'   => ['dc' => 9],
            ],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Grease'],
            'materials' => ['Kasuni Juice' => ['meta' => 'At least 5 oz']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Unholy Water';
        $formula->type          = 'Potion';
        $formula->level         = 3;
        $formula->price         = '2 gp';
        $formula->crafting_time = '1 hour';
        $formula->description   = '<p>As an Action, you can splash Unholy Water onto a creature within 5 feet of you or throw it up to 20 feet by making a Ranged Attack. If the target is a Celestial, it takes 3D6 Evil damage.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Evil', 'Water', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 8, 'meta' => 'Cooking']],
            'materials' => ['Silver' => ['meta' => 'powdered']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Bane'],
        ]);
    }
}
