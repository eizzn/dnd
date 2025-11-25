<?php

namespace Database\Seeders\Rules;

use App\Models\Page;
use App\Models\Rule;
use Illuminate\Database\Seeder;

class ClassFeaturePageSeeder extends Seeder
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
        $page->name        = 'Class Features';
        $page->order       = 10;
        $page->description = '';
        $page->save();

        $rule              = new Rule;
        $rule->key         = 'animal-companion';
        $rule->name        = 'Animal Companion';
        $rule->description = "<p>To gain an Animal Companion, you must first use Wild Empathy on your prospective target Beast. With 8 hours of work and the expenditure of 1 gp worth of rare herbs and fine food, the Beast you have called with Wild Empathy serves as your faithful companion. This also requires the spending of 1 spell point and one 1st level spell slot. So long as you have your Animal Companion, you do not get back your spell point or spell slot.</p>
<p>You may choose any creature that has the Animal type and has a Challenge Rating of 1/2 or lower. If you choose an Animal with less than 1/2, then increase all of their Physical Stats (STR, DEX, CON) by +2.</p>
<p>If your Animal Companion is ever slain, the magical bond you share allows you to return it to life. With 8 hours of work and the expenditure of 25gp worth of rare herbs and fine food, you call forth your companion's spirit and use your magic to create a new body for it. You can return an Animal Companion to life in this manner even if you do not possess any part of its body.</p>
<p>If you use this ability to return a former Animal Companion to life while you already have your maximum number of Animal Companions, then one of your current leaves you and is replaced by the restored companion.</p>
<h3>Companion's Bond</h3>
<p>Your companion obeys your commands as best it can. It rolls for initiative like any other creature. You can use an Action to direct your Animal Companions (one Action for all your companions if it is the same Action). If you don't direct your Animal Companions, they act on their own.</p>
<p>Your Animal Companion has abilities and game statistics determined in part by your class level. Your companion uses your proficiency bonus rather than its own. In addition to the areas where it normally uses its proficiency bonus, an Animal Companion also adds its proficiency bonus to its AC and to its damage rolls.</p>
<p>Your Animal Companion gains proficiency in two skills of your choice. It also becomes proficient with all Saves.</p>
<p>Your Animal Companion has Hit Dice equal to your class level and gains Hit Dice whenever you gain a level in the class that grants this feature.</p>
<p>You can apply the Ability Boost class feature to your Animal Companion each time you gain it.</p>
<p>Your companion shares your alignment, and has a personality trait and a flaw that you can roll for or select from the tables below. You companion shares your ideal and is willing to give its life for you.</p>
<p>If you have the Favored Enemy class feature, your Animal Companion also gains the benefits of all your Favored Enemy class feature.</p>
<p>Your Animal Companion gains a +5 bonus to all Saves if you have any of the following feats.</p>
<ul>
    <li>Great Fortitude</li>
    <li>Mettle</li>
    <li>Iron Will</li>
    <li>Resolve</li>
    <li>Lightning Reflexes</li>
    <li>Evasion</li>
</ul>
<p>Your Animal Companion gains Mettle, Improved Mettle, Resolve, Improved Resolve, Evasion and Improved Evasion if you have any of the following feats.</p>
<ul>
    <li>Improved Mettle</li>
    <li>Improved Resolve</li>
    <li>Improved Evasion</li>
</ul>
<p>If you have a Feat or Talent that has the Animal Companion type, your Animal Companion also has that Feat or Talent.</p>
<table>
    <thead>
        <tr>
            <th>D6</th>
            <th>Trait</th>
        </tr>
    </thead>
    <thead>
        <tr>
            <td>1</td>
            <td>I'm dauntless in the face of adversity</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Threaten my friends, threaten me</td>
        </tr>
        <tr>
            <td>3</td>
            <td>I stay on alert so others can rest</td>
        </tr>
        <tr>
            <td>4</td>
            <td>People see an animal and underestimate me. I use that to my advantage</td>
        </tr>
        <tr>
            <td>5</td>
            <td>I have a knack for showing up in the nick of time</td>
        </tr>
        <tr>
            <td>6</td>
            <td>I put my friends' needs before my own in all things</td>
        </tr>
    </thead>
</table>
<table>
    <thead>
        <tr>
            <th>D6</th>
            <th>Flaw</th>
        </tr>
    </thead>
    <thead>
        <tr>
            <td>1</td>
            <td>If there's food left unattended, I'll eat it</td>
        </tr>
        <tr>
            <td>2</td>
            <td>I growl at strangers, and all people except my master are strangers to me</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Any time is a good time for a belly rub</td>
        </tr>
        <tr>
            <td>4</td>
            <td>I'm deathly afraid of water</td>
        </tr>
        <tr>
            <td>5</td>
            <td>My idea of hello is a flurry of licks to the face</td>
        </tr>
        <tr>
            <td>6</td>
            <td>I jump on creatures to tell them how much I love them</td>
        </tr>
    </thead>
</table>";
        $rule->order = 1;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'familiar';
        $rule->name        = 'Familiar';
        $rule->description = "<p>You gain the service of a Familiar, a spirit that takes an animal form you choose. Your Familiar is actually a Celestial, Fey, or Fiend (your choice) instead of a Beast. To summon your Familiar, you must perform a ritual that lasts 1 hour and requires material components: 10 gp worth of charcoal, incense, and herbs that are consumed by fire in a brass brazier.</p>
<p>You may choose any creature that has the Animal type and has a Challenge Rating of 1/8 or less.</p>
<p>Your Familiar acts independently, but it always obeys your commands. In combat, it rolls its own initiative and acts on its own turn. A Familiar can't Attack, but it can take other Actions as normal.</p>
<p>When a Familiar drops to 0 Hit points, it disappears, leaving behind no physical form. You can perform this ritual again.</p>
<p>While your Familiar is within 100 feet of you, you can communicate with it telepathically. Additionally, as an Action, you can see through your Familiar's eyes and hear what it hears until the start of your next turn, gaining the benefits of any Special Senses that the Familiar has. During this time, you are deaf and blind with regard to your own Senses.</p>
<p>As an Action, you can temporarily dismiss your Familiar. It disappears into a pocket dimension where it awaits your summons. Alternatively, you can dismiss it forever. As an Action while it is temporarily dismissed, you can cause it to reappear in any unoccupied space within 30 feet of you.</p>
<p>You can't have more than one Familiar at a time. If you perform this ritual while you already have a Familiar, you instead cause it to adopt a new Form. Choose one of the forms from the previous list. Your Familiar transforms into the chosen creature.</p>
<p>Finally, when you cast a Spell with a range of Touch, your Familiar can deliver the spell as if it had cast the spell. Your Familiar must be within 100 feet of you, and it must use its Action to deliver the spell when you cast it. If the spell requires an attack roll, you use your attack modifier for the roll.</p>
<p>If you have summoned a creature through a Conjuration Spell, your Familiar can use all of its Actions to command and control the summoned creature. You may use your Free Action to communicate with your Familiar to inform it what Actions he should give the summoned creatures under its control.</p>
<p>If you take the Enhanced Familar feat, your Familiar is an Animal Companion.</p>";
        $rule->order = 20;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'faithful-steed';
        $rule->name        = 'Faithful Steed';
        $rule->description = "<p>To gain a Faithful Steed, you must first cast Divine Favor. Instead of the normal spell effect, you begin your request to your divine patron to send to you your Faithful Steed. With 10 minutes of prayer, and 50 gp worth of incense, a spirit is sent to you that forms into your faithful steed, creating a long-lasting bond with it. This also requires the spending of one 1st level spell slot. So long as you have your Faithful Steed, you do not get back your spell slot. The steed takes on a form that you choose:</p>
<ul>
    <li>Warhorse</li>
    <li>Pony</li>
    <li>Camel</li>
    <li>Elk</li>
    <li>Mastiff</li>
    <li>Wolf</li>
</ul>
<p>The steed has the statistics of the chosen form, though it is a celestial, fey, or fiend (your choice) instead of its normal type. Additionally, if your steed has an INT of 5 or less, its INT becomes 6, and it gains the ability to understand one language of your choice that you speak.</p>
<p>You steed serves you as a mount, both in combat and out, and you have an instinctive bond with it that allows you to fight as a seamless unit. While mounted on your steed, you can make any spell you cast that targets only you also target your steed.</p>
<p>When the steed drops to 0 Hit Points, it disappears, leaving behind no physical form. You can also dismiss your steed at any time as an Action, causing it to disappear. In either case, you may summon the same stead, restored to full health.</p>
<p>While your steed is within 1 mile of you, you can communicate with it telepathically.</p>
<p>You can't have more than one steed at a time.</p>
<p>At higher levels, you may sacrifice a higher level Spell Slot to improve your steed or to transform your steed different beast forms.</p>
<table>
    <thead>
        <tr>
            <th>Steed</th>
            <th>Requirement</th>
            <th>Feat</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Griffon</td>
            <td>Sacrifice a 2th level Spell Slot</td>
            <td> - </td>
        </tr>
        <tr>
            <td>Pegasus</td>
            <td>Sacrifice a 3th level Spell Slot</td>
            <td> - </td>
        </tr>
        <tr>
            <td>Peryton</td>
            <td>Sacrifice a 3th level Spell Slot</td>
            <td> - </td>
        </tr>
        <tr>
            <td>Dire Wolf</td>
            <td>Sacrifice a 2rd level Spell Slot</td>
            <td> - </td>
        </tr>
        <tr>
            <td>Rhinoceros</td>
            <td>Sacrifice a 3th level Spell Slot</td>
            <td> - </td>
        </tr>
        <tr>
            <td>Saber-tooted Tiger</td>
            <td>Sacrifice a 2rd level Spell Slot</td>
            <td> - </td>
        </tr>
    </tbody>
</table>";
        $rule->order = 30;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'channel-divinity';
        $rule->name        = 'Channel Divinity';
        $rule->description = '<p>You gain Divine energy from your deity which you can use for various effects.</p>
<ul>
    <li>You may spend 2 Spell Points and use your Channel Divinity to Turn/Rebuke certain creatures. The type of creatures depends on your deity.</li>
    <li>You may spend 1 Spell Points to cast the Cure Wounds spell as a 1st level spell.</li>
</ul>';
        $rule->order = 50;
        $page->rules()->save($rule);
    }
}
