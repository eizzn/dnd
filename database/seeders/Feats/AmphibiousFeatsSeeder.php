<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Models\Talent;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class AmphibiousFeatsSeeder extends Seeder
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

        $feat              = new Feat;
        $feat->name        = 'Chameleon Hide';
        $feat->requirement = 'You must be a Scaled One';
        $feat->description = '<p>As a Triple Action, you can alter the color of your skin or scales to match your surroundings. Doing so grants you a +10 bonus to Hide checks</p>';
        $helper->addTypesToFeat($feat, ['Generic']);

        $feat              = new Feat;
        $feat->name        = 'Deadly Poison';
        $feat->requirement = 'Ability to deal Poison damage naturally';
        $feat->description = '<p>Your poison attack is more deadly.</p>
<p>Your poison now deals secondary damage with an onset time of 1 minute. The secondary damage is equal to double your initial damage. If your Poison attack already deals secondary damage, then your Poison now deals an additional Secondary damage another 1 minute later.</p>';
        $helper->addTypesToFeat($feat, ['Poison', 'Generic']);
        $feat->attributes()->save(app()->attributes['CON'], ['dc' => 19]);

        $manu              = new Talent;
        $manu->name        = 'Cobra Head';
        $manu->action_type = 'Action';
        $manu->requirement = 'Serpent or serpentfolk';
        $manu->description = '<p>You can extend the skin of your neck into a cobra head.</p>
<p>As an Action, you can dilate the skin on both sides of your neck to form a flat disk, in the manner of a cobra. While you display this "hood", you gain a +3 bonus on Intimidation checks, and the Save DC for each of your spells, spell-like abilities, and supernatural abilities that cause Fear increases by +2. Furthermore, any creature with an INT score of 2 or below perceives you to be on size category larger tha you actually are.</p>
<p>You can retract your skin and resume your normal appearance as a Free Action.</p>';
        $helper->addTypesToSimpleObject($manu, ['Talent' => 1]);

        $manu              = new Talent;
        $manu->name        = 'Spittle Spray';
        $manu->action_type = 'Double Action';
        $manu->requirement = 'Ability to spit venom, spit attack, or spittle attack';
        $manu->description = '<p>You can spray your spit in a 15-foot cone-shaped burst.</p>';
        $helper->addTypesToSimpleObject($manu, ['Talent' => 3]);

        $manu              = new Talent;
        $manu->name        = 'Spit Venom';
        $manu->action_type = 'Double Action';
        $manu->requirement = 'Poisonous bit attack';
        $manu->description = '<p>You can spit your venom up to 30 feet as a Ranged Touch attack. Your poison functions as a Contact Poison in addition to its usual delivery method. The effects are otherwise the same as if you had delivered it in your normal fashion.</p>';
        $helper->addTypesToSimpleObject($manu, ['Talent' => 3]);

        $manu              = new Talent;
        $manu->name        = 'Tail Rattle';
        $manu->action_type = 'Free';
        $manu->requirement = 'Serpent or serpentfolk';
        $manu->description = '<p>You can create an ominous rattling noise by shaking your tail in the manner of a rattlesnake. During any round in which your tail rattle can be heard, you gain a +2 bonus on Intimidation checks, and the Save DC for each of your spells, spell-like abilities, and supernatural abilities that has the Sonic descriptor increases by +2. You can use this ability even while you are holding a weapon or other item in your tail.</p>';
        $helper->addTypesToSimpleObject($manu, ['Talent' => 3]);
    }
}
