<?php

namespace Database\Seeders\Rules;

use App\Models\Page;
use App\Models\Rule;
use Illuminate\Database\Seeder;

class PsionicsPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper = app()->seedHelper;

        $page              = new Page;
        $page->name        = 'Psionics';
        $page->order       = 7;
        $page->description = '';
        $page->save();

        $rule              = new Rule;
        $rule->key         = 'psionic-focus';
        $rule->name        = 'Psionic Focus';
        $rule->description = '<p>Merely holding a reservoir of Power Points in mind gives Psionic Characters a special energy. Psionic characters can put that energy to work without actually paying a Power Point cost. You can become Psionically Focused as a special use of the Concentration skill.</p>
<p>If you have 1 or more Power Points available, you can meditate to attempt to become Psionically Focused. The DC to become Psionically Focused is 20. Meditating is Triple Action that provokes Attacks of Opportunity. When you are Psionically Focused you gain the following.</p>
<ul>
    <li>Your Psionic Powers cost 1 Power Point less to manifest.</li>
    <li>You gain a +1 bonus to INT and WIS checks.</li>
    <li>You gain a +1 bonus to Perception checks</li>
    <li>You gain Advantage on checks to manifest a Power Defensively</li>
    <li>You may Expend your Psionically Focus on any single Concentration check you make, instead of rolling, assume your rolled a 13.</li>
</ul>
<p>Once you are Psionically Focused, you remain Focused until you Expend your Focus, become Unconscious, or go to sleep (or enter a meditative trance, in the case of elans), or until your Power Point reserve drops to 0.</p>';
        $rule->order = 1;
        $page->rules()->save($rule);
    }
}
