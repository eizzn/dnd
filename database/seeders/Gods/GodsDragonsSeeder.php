<?php

namespace Database\Seeders\Gods;

use App\Enums\ClassType;
use App\Enums\Pantheon;
use App\Models\Feat;
use App\Models\Feature;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsDragonsSeeder extends Seeder
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

        $asgorath        = new God;
        $asgorath->name  = 'Asgorath';
        $asgorath->level = 'Dead';
        $asgorath->save();
        $asgorath->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => $asgorath->name,
            'title'          => 'The World Shaper, The Concordant Dragon, The Great Eternal Wheel, Swallower of Shades, The Ninefold Dragon, Creator of Dragonkind',
            'aliases'        => 'Io, Shekinester',
            'level'          => 'Dead',
            'portfolio'      => 'Dragonkind, Balance and Peace, Creation Maintenance, Destruction, Knowledge',
            'alignment'      => 'N',
            'symbol'         => 'A multicolored metallic disk',
            'description'    => '<p>Asgorath was killed by the Primordial called the King of Terror. Asgorath, split in half, formed into Tiamat and Bahamut. In truth, Sardior was also formed from this event, but few are aware of this.</p>',
            'favored_weapon' => 'Claw (scimitar)',
        ]);

        /**********************************************************************/

        God::where('name', 'Loki')->firstOrFail()->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => 'Task',
            'title'          => 'The Taker and Holder, Wrestler',
            'level'          => 'Demi',
            'portfolio'      => 'Greed, Selfishness',
            'alignment'      => 'CE',
            'symbol'         => 'A pile of five coins',
            'favored_weapon' => 'Bite',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Bahamut';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => $god->name,
            'title'          => 'Angel of the Seven Heavens, Draco Paladin, The God of Dragons, Grandfather of Dragons, King of the Good Dragons, Justicemaker, Lord of the North Wind, The Platinum Dragon',
            'aliases'        => 'Xymor',
            'level'          => 'Intermediate',
            'portfolio'      => 'Good Dragons, Wind, Wisdom',
            'alignment'      => 'LG',
            'symbol'         => 'A star above a milky nebula',
            'favored_weapon' => 'Bite (heavy pick)',
        ]);
        // Faeruneon entry in Tyr seeder
        // Untheric entry in Untheric seeder

        $feature              = new Feature;
        $feature->key         = 'channel_divinity_dragon';
        $feature->name        = 'Channel Divinity: Dragon';
        $feature->description = '<p>You can use your Channel Divinity to Turn/Rebuke Dragons.</p>
<ul>
    <li>Spend 1 Spell Point and a use of your Channel Divinity. As a Double Action, you gain a +4 Bonus vs Spells and effects from Dragons for 10 minutes. During this time, you can communicate telepathically with any creature with the Dragon type.</li>
    <li>If you gain the Find Familiar Feat, you may choose a Drakeling as your Familiar</li>
    <li>If you gain an Animal Companion, you may choose an appropriate CR Dragon as your Animal Companion</li>
    <li>If you cast the Summon Mount Spell, you may summon a Lesser Dragon Mount (when casting the spell Call Mount). Use the Stats for a Pegasus, except that it is a Young Metallic Dragon with an Elemental Breath Weapon of the appropriate type.</li>
    <li>If you have the Leadership Feat, you may gain an appropriate CR Dragon as your cohort</li>
</ul>';
        $helper->saveFeature($feature, ['Divine', 'Channel Divinity', 'Spend Spell Point']);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Bahamut is a peculiar god. For all his vast draconic power, he rarely uses it or openly adopts his draconic form. Instead he adopts a disguise (such as a doddering old mage, or a kindly mentor) and attempts to encourage people to choose good because they want to, not under duress.</p>
<p>Bahamut has a soft spot for the underdog or forgotten, using his divine powers to give them the opportunities to better their own lives and pass that miracle onto others. Many chosen by Bahamut never know the nature of their patron.</p>
<ol>
    <li>You were on the streets until a kind old mage took you in under his wing</li>
    <li>Your family brought you into their cult when you were young, but a neighbor helped you free yourself</li>
    <li>Your parents died when you were young, and you fell in with a bad crowd. A friend raised you up and you never looked back</li>
    <li>You have a terrible addiction to a magical substance. Having your sponsor to lean on helps you keep sober</li>
    <li>You've only every really cared for yourself, until a strange child came into your like</li>
    <li>You were blinded in a monster attack. You struggled and lashed out at the world until a passing healer cleared your sight with their touch</li>
</ol>",
            'devotion' => "<p>Following Bahamut means dedicating yourself to good above any other concerns. As a follower of Bahamut, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Secrecy</dt> <dd>It isn't a good deed if I'm only doing it for the reward</dd>
    <dt>Community</dt> <dd>If I can help the people around me, then I should</dd>
    <dt>Responsibility</dt> <dd>I have been blessed with power. How I use that power is the measure of my character</dd>
    <dt>Charity</dt> <dd>Sometimes the world wrongs us for no reason. We should help those who need it without judgment</dd>
    <dt>Heroism</dt> <dd>I secretly desire to be lauded and praised for all the good work I do</dd>
</dl>",
            'earn_piety' => [
                'Acts of kindness or hospitality to those you do not know',
                'Helping someone with no incentive to do so',
                'Demurring praise or reward for any act of good',
            ],
            'lose_piety' => [
                'Profiting in any way off your efforts to do good',
                'Allowing others to fan the flames of your vanity',
            ],
            'piety3' => '<h4>Favored God: Bahamut</h4>
<p>You gain Inspiration when you help someone anonymously</p>',
            'piety10' => "<h4>Many Faced Stranger</h4>
<p>You can cast Disguise Self with this trait, requiring no material components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
            'piety25' => "<h4>Subtle Silver Fires</h4>
<p>You can cast Nondetection with this trait, requiring no material components. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
            'piety50' => '<h4>Chosen of Bahamut</h4>
<p>You can use an Action to spend an Inspiration and invoke the Rite of Rebirth. This functions as a Reincarnate spell, which always produces a metallic dragonborn, and only works on Good creatures. A creature can only benefit form the Rite of Rebirth once</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Tiamat';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'        => $god->name,
            'aliases'     => 'Azharul',
            'title'       => 'Queen of Evil Dragons',
            'level'       => 'Intermediate',
            'portfolio'   => 'Chromatic Dragons',
            'alignment'   => 'LE',
            'symbol'      => 'A five-headed dragon',
            'description' => '<p>Azharul was subsumed by Tiamat, who now has assumed this role.</p>',
        ]);
        // Faerunian entry in Bane seeder
        // Untheric entry in Unther seeder

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Sardior';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => $god->name,
            'title'          => 'Master of Gem Dragons, The Ruby Dragon, Prince of Neutral Dragons',
            'level'          => 'Intermediate',
            'portfolio'      => 'Neutral Dragons, Night, Psionics, Secrets',
            'alignment'      => 'LN',
            'symbol'         => 'A ruby with an inner glow',
            'favored_weapon' => 'Claw',
        ]);
        // Faerunian entry in Unther seeder
        // Untheric entry in Unther seeder

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Parrafaire';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Draconic'], [
            'name'           => $god->name,
            'title'          => 'The Naga Prince, The Prince of Hidden Secrets',
            'level'          => 'Demi',
            'portfolio'      => 'Guardianship',
            'alignment'      => 'CN',
            'symbol'         => 'A male naga head with feathered ears',
            'favored_weapon' => 'Tail Scythe (tail scythe)',
            'master_id'      => God::where('name', 'Sardior')->firstOrFail()->id,
        ]);
    }
}
