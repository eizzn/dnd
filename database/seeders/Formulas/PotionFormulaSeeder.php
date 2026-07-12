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
        $formula->name          = 'Bottled Breath';
        $formula->type          = 'Potion';
        $formula->level         = 3;
        $formula->price         = '20 gp / 75 gp';
        $formula->crafting_time = '3 hours';
        $formula->description   = '<p>This bottle contains a breath of Elemental Air. When you inhale it (as an Action) you can either exhale it or hold it.</p>
<dl>
    <dt>Exhale</dt> <dd>Your exhaled breath acts as a Gust of Wind spell.</dd>
    <dt>Hold</dt> <dd>You do not need to breath for 1 hour. Exhaling for any reason (i.e. speaking) ends this effect</dd>
</dl>';
        $helper->saveFormula($formula, ['Consumable', 'Air', 'Potion'], [
            'skills'    => [
                'Arcana'   => ['dc' => 10],
                'Crafting' => ['dc' => 12, 'meta' => 'Brewing'],
            ],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Summon Elemental, Lesser' => ['meta' => 'Heightened +1. Air'], 'Gust of Wind'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Holy Water';
        $formula->type          = 'Potion';
        $formula->level         = 3;
        $formula->price         = '1 gp / 5 gp';
        $formula->crafting_time = '1 hour';
        $formula->description   = '<p>As an Action, you can splash Holy Water onto a creature within 5 feet of you or throw it up to 20 feet by making a Ranged Attack. If the target is a Fiend or Undead, it takes 3D6 Good damage.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Good', 'Water', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 8, 'meta' => 'Brewing']],
            'materials' => ['Silver' => ['meta' => '1 sp worth shaved slivers']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Bless'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Acid Resistance';
        $formula->type          = 'Potion';
        $formula->level         = '3';
        $formula->price         = '2 gp / 10 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '2 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>1 minute</dd>';
        $formula->activation    = 'Imbibed: Operate Action';
        $formula->description   = '<p>Once this potion takes effect, you gain Resistance to Acid for 1 hour.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion', 'Acid'], [
            'skills'   => ['Crafting' => ['dc' => 5, 'meta' => 'Brewing']],
            'feats'    => ['Brew Potion'],
            'spells'   => ['Resist Acid'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Beauty';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '5 gp / 30 gp';
        $formula->rarity        = 'Rare';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->activation    = 'Imbibed; Operate Action';
        $formula->description   = '<p>For 1 hour after the onset of this potion, your features become more attractive.</p>
<p>You gian a +4 item bonus to CHA</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 8, 'meta' => 'Brewing']],
            'feats'   => ['Brew Potion'],
            'spells'  => ["Eagle's Splendor" =>  ['meta' => 'Heightened +1']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Beauty, Greater';
        $formula->type          = 'Potion';
        $formula->level         = 11;
        $formula->price         = '20 gp / 500 gp';
        $formula->rarity        = 'Rare';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '5 hours';
        $formula->activation    = 'Imbibed; Operate Action';
        $formula->description   = '<p>For 1 minute after the onset of this potion, your features become more attractive.</p>
<p>You gian a +6 item bonus to CHA</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 12, 'meta' => 'Brewing']],
            'feats'   => ['Brew Potion'],
            'spells'  => ["Eagle's Splendor" => ['meta' => 'Heightened +3']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Climbing';
        $formula->type          = 'Potion';
        $formula->level         = 3;
        $formula->price         = '10 gp / 20 gp';
        $formula->meta          = '<dt>Onset</dt> <dd>Start of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->description   = '<p>For 1 hour after the onset of this potion, you gain a +10 Competence bonus to Climbing checks</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 5, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Spider Climb'],
            'materials' => ['Drojos Ivy' => ['meta' => '1/4 oz crushed']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Cold Resistance';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '150 gp / 300 gp';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>1 minute</dd>';
        $formula->description   = '<p>For 1 hour after the onset of this potion, you become protected from the effects of severe cold. You gain Resistance to Cold damage and can survive in freezing weather without ill effects (as low as 0 degrees fahrenheit)</p>';
        $helper->saveFormula($formula, ['Potion', 'Consumable', 'Cold'], [
            'skills'  => ['Crafting' => ['dc' => 7, 'meta' => 'Brewing']],
            'feats'   => ['Brew Potion'],
            'spells'  => ['Endure Elements' => ['meta' => 'Heightened +2']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Electricity Resistance';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '150 gp / 300 gp';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>1 minute</dd>';
        $formula->description   = '<p>For 1 hour after the onset of this potion, you become protected from the effects of electricity. You gain Resistance to Electricity damage</p>';
        $helper->saveFormula($formula, ['Potion', 'Consumable', 'Electricity'], [
            'skills'    => ['Crafting' => ['dc' => 7, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Endure Elements' => ['meta' => 'Heightened +2']],
            'materials' => ['Mandrake Root' => ['meta' => '1 oz']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Fire Breathing';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '50 gp / 300 gp';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->bulk          = 'L';
        $formula->crafting_time = '8 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->description   = '<p>When this potion takes effect, for 1 minute, you gain the ability to breath fire as if you had the Dragon Breath (Red) spell cast on yourself.</p>';
        $helper->saveFormula($formula, ['Potion', 'Consumable', 'Fire'], [
            'skills'    => ['Crafting' => ['dc' => 9, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Dragon Breath' => ['meta' => 'Must chose Red Dragon']],
            'materials' => ['Dragontongue Petals' => ['meta' => 'At least 3 petals, crushed']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Fire Resistance';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '150 gp / 300 gp';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>1 minute</dd>';
        $formula->description   = '<p>For 3 hours after the onset of this potion, you become protected from the effects of intense heat. You gain Resistance to Fire damage and can survive in sweltering heat without ill effects (as high as 120 degrees fahrenheit)</p>';
        $helper->saveFormula($formula, ['Potion', 'Consumable', 'Fire'], [
            'skills'    => ['Crafting' => ['dc' => 7, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Endure Elements' => ['meta' => 'Heightened +2']],
            'materials' => ['Druid Ephedra' => ['meta' => 'At least 5 leaves, boiled in oil until just a green sludge remains. Add sludge to potion']],
        ]);

        $formula              = new Formula;
        $formula->name        = "Frog's Feet Potion";
        $formula->type        = 'Potion';
        $formula->level       = 5;
        $formula->price       = '10 gp / 50 gp';
        $formula->meta        = '<dt>Onset</dt> <dd>1 minute</dd>';
        $formula->bulk        = 'L';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>After the onset of this potion, the spaces between your fingers and toes become webbed, granting you a swim Speed of 20 feet for the next 1 hour.</p>';
        $helper->saveFormula($formula, ['Alchemical', 'Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 10, 'meta' => 'Brew Potion']],
            'spells' => ['Feet to Fins'],
            'feats'  => ['Brew Potion'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Flying';
        $formula->type          = 'Potion';
        $formula->level         = 6;
        $formula->price         = '120 gp / 500 gp';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->bulk          = 'L';
        $formula->crafting_time = '6 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->description   = '<p>When this potion takes effect, you gain a Flying Speed equal to your Walking Speed for 1 hour and can hover. If you are in the air when the potion wears off, you fall unless you have some other means of staying aloft.</p>';
        $helper->saveFormula($formula, ['Potion', 'Consumable'], [
            'skills'    => ['Crafting' => ['dc' => 14, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Fly' => ['meta' => 'Heightened +1']],
            'materials' => ['Thunderleaf' => ['meta' => 'At least 5 leaves, crushed']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Force Resistance';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '20 gp / 200 gp';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->bulk          = 'L';
        $formula->crafting_time = '6 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->description   = '<p>When this potion takes effect, you gain Resistance to all Force Damage for 1 hour</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion', 'Force'], [
            'skills'    => ['Crafting' => ['dc' => 12, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Shield' => ['meta' => 'Heightened +2']],
            'materials' => ['Lunar Flower' => ['meta' => '1 lb reduced with any alcohol']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Gaseous Form';
        $formula->type          = 'Potion';
        $formula->level         = 7;
        $formula->price         = '150 gp';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->bulk          = 'L';
        $formula->crafting_time = '6 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->description   = '<p>When this potion takes effect, you gain the benefits of the Gaseous Form spell for 1 minute</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion', 'Air'], [
            'skills'    => [
                'Crafting' => ['dc' => 17, 'meta' => 'Brewing'],
                'Arcana'   => ['dc' => 15],
            ],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Gaseous Form'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Growth';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '100 gp / 350 gp';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->bulk          = 'L';
        $formula->crafting_time = '8 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->description   = '<p>When this potion takes effect, you grow, as if the under the effects of the Enlarge spell for 1 hour</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 11, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Enlarge' => ['meta' => 'Heightened +1']],
            'materials' => ['White Poppy' => ['meta' => '1 lb, crushed and reduced with any alcohol']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Healing, Lesser';
        $formula->type          = 'Potion';
        $formula->level         = 2;
        $formula->price         = '1 gp / 10 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '2 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>Immediately</dd>';
        $formula->activation    = 'Imbibed; Operate Action';
        $formula->description   = '<p>Upon drinking this potion, you regain 1D6 +1 Hit Points. If you are at maximum Hit Points when you drink this potion, you instead gain a +2 item bonus to Saves against toxins for 1 hour.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 8, 'meta' => 'Brewing']],
            'feats'  => ['Brew Potion'],
            'spells' => ['Cure Wounds'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Healing';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '10 gp / 100 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '8 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>Immediately</dd>';
        $formula->activation    = 'Imbibed; Operate Action';
        $formula->description   = '<p>Upon drinking this potion, you regain 3D6 +3 Hit Points and can attempt a new Save against any one toxin of 8th level or lower currently afflicting you. If you succeed, the toxin is neutralized.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 10, 'meta' => 'Brewing']],
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
        $formula->price         = '200 gp / 250 gp';
        $formula->rarity        = 'Rare';
        $formula->bulk          = 'L';
        $formula->crafting_time = '12 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>Immediately</dd>';
        $formula->activation    = 'Imbibed; Operate Action';
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
        $formula->meta          = '<dt>Onset</dt> <dd>Immediately</dd>';
        $formula->activation    = 'Imbibed: Operate Action';
        $formula->description   = '<p>Upon drinking this potion, you regain 8D6 +8 (reroll all 1s and 2s) Hit Points and can end a toxin afflicting you as long as it is not higher than 15th level.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 17, 'meta' => 'Brewing']],
            'feats'     => ['Improved Brew Potion'],
            'spells'    => ['Cure Wounds' => ['meta' => 'Heighten +7']],
            'materials' => ['Spineflower Berries' => ['meta' => 'At least 5 berries, crushed']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Portion of Mana';
        $formula->type          = 'Potion';
        $formula->level         = 7;
        $formula->price         = '350 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '1 day';
        $formula->meta          = '<dt>Onsite</dt> <dd>End of your next turn</dd>';
        $formula->activation    = 'Imbibed; operate Action';
        $formula->description   = '<p>You regain 1D2 +1 of combined Spell Slots. You can regain up to 2nd level Spell Slots or lower.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion', 'Arcane'], [
            'skills'    => ['Crafting' => ['dc' => 12, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion', 'Empower Spell'],
            'spells'    => ['Detect Magic' => ['meta' => 'You must use a 4th level Spell Slot']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Portion of Mana, Greater';
        $formula->type          = 'Potion';
        $formula->level         = 12;
        $formula->price         = '1,000 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 days';
        $formula->meta          = '<dt>Onsite</dt> <dd>End of your next turn</dd>';
        $formula->activation    = 'Imbibed; operate Action';
        $formula->description   = '<p>You regain 1D4 +2 of combined Spell Slots. You can regain up to 4th level Spell Slots or lower.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion', 'Arcane'], [
            'skills'    => ['Crafting' => ['dc' => 17, 'meta' => 'Brewing']],
            'feats'     => ['Improved Brew Potion', 'Empower Spell'],
            'spells'    => ['Detect Magic' => ['meta' => 'You must use a 6th level Spell Slot']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Health';
        $formula->type          = 'Potion';
        $formula->level         = 9;
        $formula->price         = '120 gp';
        $formula->rarity        = 'Rare';
        $formula->bulk          = 'L';
        $formula->crafting_time = '10 hours';
        $formula->activation    = 'Imbibed; operate Action';
        $formula->description   = '<p>When you drink this potion, it cures any disease afflicting you, and it removes the Blinded, and Deafened Conditions.</p>
<p>The clear red liquid has tiny bubbles of light in it. It confers no benefit to undead or constructs.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion', 'Disease'], [
            'skills'    => ['Crafting' => ['dc' => 12, 'meta' => 'Brewing']],
            'feats'     => ['Improved Brew Potion'],
            'spells'    => ['Remove Disease' => ['meta' => 'Heightened +2']],
            'materials' => ['Livewood'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Heroism';
        $formula->type          = 'Potion';
        $formula->level         = 4;
        $formula->price         = '7 gp / 100 gp';
        $formula->rarity        = 'Common';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>Start of your next turn</dd>';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->description   = '<p>This blue potion bubbles and steams as if boiling</p>
<p>For 1 hour after this potion takes effect, you gain the following</p>
<ul>
    <li>You gain 10 Temporary Hit Points</li>
    <li>+1 Bonus to Hit and Saves</li>
</ul>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 7, 'meta' => 'Brew Potion']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Aid', 'Bless'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Heroism, Greater';
        $formula->type          = 'Potion';
        $formula->level         = 6;
        $formula->price         = '12 gp / 250 gp';
        $formula->rarity        = 'Common';
        $formula->bulk          = 'L';
        $formula->crafting_time = '5 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>Start of your next turn</dd>';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->description   = '<p>This blue potion bubbles and steams as if boiling</p>
<p>For 1 hour after this potion takes effect, you gain the following</p>
<ul>
    <li>You gain 15 Temporary Hit Points</li>
    <li>You gain a +4 bonus to CON</li>
    <li>+1 Bonus to Hit and Saves</li>
    <li>You gain Resistance to Bludgeoning, Slashing and Piercing Damage</li>
</ul>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 12, 'meta' => 'Brew Potion']],
            'feats'     => ['Improved Brew Potion'],
            'spells'    => ['Aid', 'Bless', 'Stoneskin', "Bear's Endurance"],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Intelligence';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '5 gp / 30 gp';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->activation    = 'Imbibed; Operate Action';
        $formula->description   = '<p>For 1 minute after the onset of this potion, you become more intelligent.</p>
<p>You gian a +4 item bonus to INT</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 8, 'meta' => 'Brewing']],
            'feats'   => ['Brew Potion'],
            'spells'  => ["Fox's Cunning" => ['meta' => 'Heightened +1']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Intelligence, Greater';
        $formula->type          = 'Potion';
        $formula->level         = 11;
        $formula->price         = '20 gp / 500 gp';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '5 hours';
        $formula->activation    = 'Imbibed; Operate Action';
        $formula->description   = '<p>For 10 minutes after the onset of this potion, you become more intelligent.</p>
<p>You gian a +6 item bonus to INT</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 12, 'meta' => 'Brewing']],
            'feats'   => ['Brew Potion'],
            'spells'  => ["Fox's Cunning" => ['meta' => 'Heightened +3']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Invisibility';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '70 gp / 200 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '2 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->activation    = 'Imbibed: Operate Action';
        $formula->description   = '<p>You gain the effects of the Invisibility spell for 10 minutes</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 5, 'meta' => 'Brewing']],
            'feats'   => ['Brew Potion'],
            'spells'  => ['Invisibility' => ['meta' => 'Heightened +1']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Invisibility, Greater';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '150 gp / 500 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '2 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->activation    = 'Imbibed: Operate Action';
        $formula->description   = '<p>You gain the effects of the Invisibility spell as if it was Heightened +2 for 10 minutes</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 12, 'meta' => 'Brewing']],
            'feats'   => ['Improved Brew Potion'],
            'spells'  => ['Invisibility' => ['meta' => 'Heightened +3']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Jumping';
        $formula->type          = 'Potion';
        $formula->level         = 3;
        $formula->price         = '2 gp / 10 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '2 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->activation    = 'Imbibed: Operate Action';
        $formula->description   = '<p>For 1 minute after drinking this potion, you can attempt High Jumps and Long Jumps with a single Leap Action, rather than as a Double Action activity requiring a Stride and a Leap.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 5, 'meta' => 'Brewing']],
            'feats'   => ['Brew Potion'],
            'spells'  => ['Jump' => ['meta' => 'Heightened +1']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Longevity';
        $formula->type          = 'Potion';
        $formula->level         = 12;
        $formula->price         = '200 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '12 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>Over the course of 1 week</dd>';
        $formula->activation    = 'Imbibed; Operate Action';
        $formula->description   = "<p>When you drink this potion, your physical age is reduced by 7 years. There is a 5% chance that you die at the end of the 1 week.</p>
<p>Suspended in this amber liquid are the scorpion's tail and the imp's still beating heart. As the potion is being drunk, those items dissolves into the liquid.</p>";
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'    => [
                'Crafting' => ['dc' => 15, 'meta' => 'Brewing'],
                'Arcana'   => ['dc' => 17],
            ],
            'feats'     => ['Improved Brew Potion', 'Craft Wondrous Item'],
            'spells'    => ['Slow', 'Sands of Time' => ['meta' => 'Heightened +3']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Poison Resistance';
        $formula->type          = 'Potion';
        $formula->level         = 3;
        $formula->price         = '2 gp / 10 gp';
        $formula->bulk          = 'L';
        $formula->crafting_time = '2 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->activation    = 'Imbibed: Operate Action';
        $formula->description   = '<p>Once this potion takes effect, you gain Resistance to Poison Damage for 1 hour</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion', 'Poison'], [
            'skills'    => ['Crafting' => ['dc' => 5, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Delay Poison' => ['meta' => 'Heightened +1']],
            'materials' => ['Ecire Laurel' => ['meta' => '1/4 oz crushed']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Positive Resistance';
        $formula->type          = 'Potion';
        $formula->level         = 6;
        $formula->price         = '5 gp / 10 gp';
        $formula->rarity        = 'Rare';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->activation    = 'Imbibed; Operate Action';
        $formula->description   = '<p>Once this potion takes effect, you gain Resistance to Positive Damage for 1 hour</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion', 'Positive'], [
            'skills'    => ['Crafting' => ['dc' => 7, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Revivify'],
            'materials' => ['Ucre Bramble' => ['meta' => '1 oz crushed']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Quickness';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '5 gp / 30 gp';
        $formula->rarity        = 'Rare';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->activation    = 'Imbibed; Operate Action';
        $formula->description   = '<p>For 1 minute after the onset of this potion, your features become thin and angular and you become swifter and nimbler.</p>
<p>You gain a +4 item bonus to DEX, and you become Accelerated 5.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 8, 'meta' => 'Brewing']],
            'feats'   => ['Brew Potion'],
            'spells'  => ["Cat's Grace" => ['meta' => 'Heightened +1']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Quickness, Greater';
        $formula->type          = 'Potion';
        $formula->level         = 11;
        $formula->price         = '20 gp / 500 gp';
        $formula->rarity        = 'Rare';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '5 hours';
        $formula->activation    = 'Imbibed; Operate Action';
        $formula->description   = '<p>For 10 minutes after the onset of this potion, your features become thin and angular and you become swifter and nimbler</p>
<p>You gain a +6 item bonus to DEX, and you become Accelerated 10.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 12, 'meta' => 'Brewing']],
            'feats'   => ['Brew Potion'],
            'spells'  => ["Cat's Grace" => ['meta' => 'Heightened +3']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Shrinking';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '100 gp / 350 gp';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->bulk          = 'L';
        $formula->crafting_time = '8 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->description   = '<p>When this potion takes effect, you shrink, as if the under the effects of the Shrink spell for 1 hour</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 11, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Shrink' => ['meta' => 'Heightened +1']],
            'materials' => ['White Poppy' => ['meta' => '1 lb, crushed and reduced with any alcohol']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Strength';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '5 gp / 30 gp';
        $formula->rarity        = 'Rare';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->activation    = 'Imbibed; Operate Action';
        $formula->description   = '<p>For 1 minute after the onset of this potion, you increase muscle mass.</p>
<p>You gain a +4 Item bonus to STR.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 8, 'meta' => 'Brew Potion']],
            'feats'  => ['Brew Potion'],
            'spells' => ["Bull's Strength" => ['meta' => 'Heightened +1']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Strength, Greater';
        $formula->type          = 'Potion';
        $formula->level         = 11;
        $formula->price         = '40 gp / 250 gp';
        $formula->rarity        = 'Rare';
        $formula->bulk          = 'L';
        $formula->crafting_time = '5 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->activation    = 'Action; Operate Activation';
        $formula->description   = '<p>For 10 minutes after the onset of this potion, you increase muscle mass.</p>
<p>You gain a +6 Item bonus to STR.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 12, 'meta' => 'Brew Potion']],
            'feats'   => ['Improved Brew Potion'],
            'spells'  => ["Bull's Strength" => ['meta' => 'Heightened +3']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Strength, Perfect';
        $formula->type          = 'Potion';
        $formula->level         = 15;
        $formula->price         = '120 gp / 1000 gp';
        $formula->rarity        = 'Rare';
        $formula->bulk          = 'L';
        $formula->crafting_time = '5 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->activation    = 'Action; Operate Activation';
        $formula->description   = '<p>For 10 minutes after the onset of this potion, you increase muscle mass, but your lumbering form is clumsy.</p>
<p>You gain a +8 Item bonus to STR.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 15, 'meta' => 'Brew Potion']],
            'feats'   => ['Improved Brew Potion'],
            'spells'  => ["Bull's Strength" => ['meta' => 'Heightened +5']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Speed';
        $formula->type          = 'Potion';
        $formula->rarity        = 'Rare';
        $formula->level         = 7;
        $formula->price         = '200 gp - 450 gp';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->crafting_time = '8 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>Start of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting      = '<ul>
    <li>Purified water (typically captured steam from a boiling pot of water) is first prepared and must start from room temperature</li>
    <li>The water is then slowly heated to a simmer.</li>
    <li>The Haste spell is cast on the simmering water. While the spell is being cast, the Quickling blood and the Horse Sweat is added. They must be added after the Haste spell is started casting and must be all added before the Haste spell is completed.</li>
    <li>The Horse Sweat turns yellow and the Quickling blood turns black. After a total of 4 hours of simmering heat, the black substance begins to swirl in the light yellow liquid, and the potion is complete.</li>
</ul>';
        $formula->description = "<p>When this potion takes effect, you gain the benefits of the Haste Spell for 1 minute (no Concentration required). The potion's yellow fluid is streaked with black and swirls on its own.</p>";
        $helper->saveFormula($formula, ['Potion', 'Consumable'], [
            'skills'  => ['Crafting' => ['dc' => 12, 'meta' => 'Brewing']],
            'feats'   => ['Brew Potion'],
            'spells'  => ['Haste' => ['meta' => 'Heightened +1']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Swimming';
        $formula->type          = 'Potion';
        $formula->rarity        = 'Common';
        $formula->level         = 5;
        $formula->price         = '10 gp';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->crafting_time = '4 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>Start of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->description   = '<p>This potion is made of layers of teal, light blue, and indigo fluid that resembles a deep ocean. Shaking the bottle fails to mix the colors.</p>
<p>When you drink this potion, you gain a Swim Speed equal to your Land Stride Speed and you have Advantage on Athletics checks you make to swim.</p>';
        $helper->saveFormula($formula, ['Potion', 'Consumable'], [
            'skills'    => ['Crafting' => ['dc' => 10, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Feet to Fins' => ['meta' => 'Heightened +1']],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Potion of Vitality';
        $formula->type        = 'Potion';
        $formula->level       = 5;
        $formula->price       = '5 gp / 150 gp';
        $formula->rarity      = 'Rare';
        $formula->bulk        = 'L';
        $formula->meta        = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->activation  = 'Action; Operate Activation';
        $formula->description = '<p>For 10 minutes after the onset of this potion, your body becomes thick and sturdy, and you exhibit a healthy glow.</p>
<p>You gain a +4 item bonus to CON Saves and 15 temporary Hit Points.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 10, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion'],
            'spells'    => ["Bear's Endurance" => ['meta' => 'Heightened +1']],
            'materials' => ['Wisp Stems' => ['meta' => '1/8 oz crushed']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Water Breathing';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '50 gp - 150 gp';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->crafting_time = '2 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->description   = '<p>When this potion takes effect, you gain the ability to breath underwater for 1 hour.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills' => ['Crafting' => ['dc' => 7, 'meta' => 'Brewing']],
            'feats'  => ['Brew Potion'],
            'spells' => ['Water Breathing' => ['meta' => 'Heightened +1']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Water Form';
        $formula->type          = 'Potion';
        $formula->level         = 11;
        $formula->price         = '2500 gp';
        $formula->activation    = 'Imbibed; Operation Action';
        $formula->crafting_time = '8 hours';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->description   = '<p>When this potion takes effect, you transform into a pool of water. You return to your true form after 10 minutes or if you are incapacitated or die. You are under the effects of the following effects.</p>
<ul>
    <li>Liquid Movement: You have a Swim Speed of 90 feet. While you are in water, you can move over or through other liquids. You can enter and occupy the space of another creature. you can rise up to your normal height, and you can pass through even tiny openings.</li>
    <li>Watery Resilience: You have Resistance to Bludgeoning, Slashing, and Piercing Damage.</li>
    <li>You extinguish nonmagical flames in any space you enter</li>
    <li>You have Advantage on STR, DEX, and CON Saves</li>
    <li>Limitations: You cannot talk, attack, cast spells, or activate magic items. Any objects you are carrying or wearing meld into your new form and are inaccessible, though you continue to be affected by anything you are wearing, such as armor.</li>
</ul>';
        $helper->saveFormula($formula, ['Consumable', 'Potion', 'Water'], [
            'skills'    => ['Crafting' => ['dc' => 20, 'meta' => 'Brewing']],
            'feats'     => ['Improved Brew Potion'],
            'spells'    => ['Investiture of Water' => ['meta' => 'Heightened +1']],
            'materials' => ['Water' => ['meta' => '3 droplets from the Elemental Plane of Water']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Wisdom';
        $formula->type          = 'Potion';
        $formula->level         = 5;
        $formula->price         = '5 gp / 30 gp';
        $formula->rarity        = 'Rare';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '3 hours';
        $formula->activation    = 'Imbibed; Operate Action';
        $formula->description   = '<p>For 1 minute after the onset of this potion, you become Wise.</p>
<p>You gian a +4 item bonus to WIS</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 8, 'meta' => 'Brewing']],
            'feats'   => ['Brew Potion'],
            'spells'  => ["Owl's Wisdom" => ['meta' => 'Heightened +1']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Wisdom, Greater';
        $formula->type          = 'Potion';
        $formula->level         = 11;
        $formula->price         = '20 gp / 500 gp';
        $formula->rarity        = 'Rare';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '5 hours';
        $formula->activation    = 'Imbibed; Operate Action';
        $formula->description   = '<p>For 1 minute after the onset of this potion, you become Wise.</p>
<p>You gian a +6 item bonus to WIS</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'  => ['Crafting' => ['dc' => 12, 'meta' => 'Brewing']],
            'feats'   => ['Brew Potion'],
            'spells'  => ["Owl's Wisdom" => ['meta' => 'Heightened +3']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Oil of Etherealness';
        $formula->type          = 'Oil';
        $formula->rarity        = 'Rare';
        $formula->level         = 13;
        $formula->price         = '250 gp / 1,200 gp';
        $formula->activation    = 'Applied to body; Double Action';
        $formula->meta          = '<dt>Onset</dt> <dd>End of your next turn</dd>';
        $formula->bulk          = 'L';
        $formula->crafting_time = '10 hours';
        $formula->crafting      = '<ul>
    <li>The primary ingredient to create this oil is the fluid from the eyeballs of any creature that can see into the ethereal plane, such as a Basilisk, Medusa, or a physical creature from the ethereal plane.</li>
    <li>The fluid is placed within an airtight container that is transparent and has a tube at the top that can condense and capture gases back to liquid.</li>
    <li>The container is exposed to sunlight and the Etherealness spell is cast on the fluid</li>
    <li>The fluid will now slowly evaporate from the exposure to the sunlight over the course of 5 hours, and will condense into the final oil in the condenser.</li>
</ul>';
        $formula->description = "<p>Beads of this cloudy gray oil form on the outside of its container and quickly evaporate. The oil can cover a Medium or smaller creature, along with the equipment it's wearing and carrying (one additional vial is required for each size category above Medium). Applying the oil takes 10 minutes. The affected creature then gains the effect of the etherealness spell for 1 hour.</p>";
        $helper->saveFormula($formula, ['Potion', 'Consumable', 'Ethereal'], [
            'skills' => ['Crafting' => ['dc' => 15, 'meta' => 'Brewing']],
            'spells' => ['Etherealness' => ['meta' => 'Heightened +1']],
            'feats'  => ['Improved Brew Potion'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Oil of Slipperiness';
        $formula->type          = 'Oil';
        $formula->price         = '100 gp / 550 gp';
        $formula->level         = 2;
        $formula->activation    = 'Applied to body or ground (see text); Double Action';
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
                'Crafting' => ['dc' => 11, 'meta' => 'Brewing'],
                'Nature'   => ['dc' => 9],
            ],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Grease'],
            'materials' => ['Kasuni Juice' => ['meta' => 'At least 5 oz']],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Sweet Water';
        $formula->type          = 'Potion';
        $formula->level         = 4;
        $formula->price         = '1 gp / 3 gp';
        $formula->crafting_time = '1 hour';
        $formula->description   = '<p>Sweet water can be used to neutralize an poison within a liquid it is poured into. It can be used in the following ways.</p>
<ul>
    <li>One vial can be used to purify 100,000 cubic feet of polluted, salt, or alkaline water into fresh water.</li>
    <li>One vial can be used to purify 1,000 cubic feet of acid into purified water.</li>
</ul>
<p>One casting of Purify Food and Drink is enough to make 10 vials of Sweet Water.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 7, 'meta' => 'Brewing']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Purify Food and Drink'],
            'materials' => [
                'Silverbark'  => ['meta' => '4 oz of sap'],
                'Kreet Paste' => ['meta' => '1 oz finely crushed'],
            ],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Unholy Water';
        $formula->type          = 'Potion';
        $formula->level         = 3;
        $formula->price         = '1 gp / 10 gp';
        $formula->crafting_time = '1 hour';
        $formula->description   = '<p>As an Action, you can splash Unholy Water onto a creature within 5 feet of you or throw it up to 20 feet by making a Ranged Attack. If the target is a Celestial, it takes 3D6 Evil damage.</p>';
        $helper->saveFormula($formula, ['Consumable', 'Evil', 'Water', 'Potion'], [
            'skills'    => ['Crafting' => ['dc' => 8, 'meta' => 'Brewing']],
            'materials' => ['Silver' => ['meta' => 'powdered']],
            'feats'     => ['Brew Potion'],
            'spells'    => ['Bane'],
        ]);

        $formula                = new Formula;
        $formula->name          = 'Potion of Lichdom';
        $formula->type          = 'Potion';
        $formula->level         = 12;
        $formula->price         = '120,000 gp';
        $formula->crafting_time = '3 days';
        $formula->crafting      = '<ul>
    <li>Mix the all the bloods (except the phoenix or yochlol) blood with the Henbane, Phase Spider Venom and Mandrake Root</li>
    <li>Stir well</li>
    <li>Then add the phoenix or yochlol blood and the heart</li>
    <li>Stir well</li>
    <li>Add the stomach acid from the wild boar</li>
    <li>Cover and let stand, not sealed as gases will need to escape for at least a 10 day, stirring from time to time until the heart has entirely dissolved</li>
    <li>Add the Giant Wasp Venom and shake vigorously</li>
    <li>Add some of your own spittle. This will cause the concoction to cloud, going opaque and gray-white. If it does not cloud up, wait. If after half a day it still does not cloud up, then add a drop of your own blood each hour until it clouds up</li>
    <li>Stir until it is a uniform color</li>
    <li>When the potion looks like watery milk, it is ready to drink</li>
</ul>';
        $formula->description   = '<p>This potion is designed to kill the drinker in such a way as to allow them to die but be able to transfer their soul to a prepared container instead of being taken to the Outer Planes to your final rest. If there is no prepared soul container, then the drinker dies but their soul cannot pass to their final rest, perhaps becoming a ghost.</p>
<p>If the potion fails to kill the drinker, then the drinker will suffer the following</p>
<ul>
    <li>48 Negative Damage (no Save)</li>
    <li>Suffer 7 STR and DEX Damage (no Save)</li>
    <li>Lose all body hair</li>
    <li>Become wrinkled</li>
    <li>Become Blinded for 2-5 hours</li>
    <li>Typically vomit and then pass out for 2D4 minutes</li>
</ul>';
        $helper->saveFormula($formula, ['Consumable', 'Evil', 'Potion', 'Poison', 'Undead'], [
            'skills'    => ['Crafting' => ['dc' => 13, 'meta' => 'Poison Making']],
            'feats'     => ['Improved Brew Potion'],
            'spells'    => [
                'Poison Spray' => ['meta' => 'Heightened +4'],
                'Gentle Repose',
            ],
            // formulas added in afterseeder
            'materials' => [
                'Blood'              => ['meta' => '2 drops from the one who will drink the potion, 1 drop dragon blood, 4 drops vampire blood or 8 drops from a vampire spawn, one pint of blood from a kirin, couatl, pegasus, unicorn, or xorn, one pint of blood from a humanoid who died of poisoning, 1 drop of phoenix or 3 drops from a yochlol'],
                'Henbane'            => ['meta' => '8 drops of distilled'],
                'Mandrake Root'      => ['meta' => '4 drops of distilled'],
                'Heart'              => ['meta' => 'A human or demihuman who died from venom'],
                'Stomach Acid'       => ['meta' => '1 pint from a wild boar'],
            ],
        ]);
    }
}
