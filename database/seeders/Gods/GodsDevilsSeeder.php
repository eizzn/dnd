<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Services\SeedHelper;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GodsDevilsSeeder extends Seeder
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

        $asmodeus = God::where('name', 'Tiamat')->firstOrFail();
        $asmodeus->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'           => 'Asmodeus',
            'aliases'        => 'Ahriman',
            'title'          => 'Supreme Master of the Nine Hells, Lord of Nessus, The Lord of the Ninth, The Cloven, Old Hoof and Horn, Lord of Lies, The Archfiend, The Raging Fiend, Price of Evil',
            'level'          => 'Archdevil',
            'portfolio'      => 'Indulgence',
            'alignment'      => 'LE',
            'symbol'         => 'Three inverted triangles arranged in a long triangle',
            'favored_weapon' => 'Heavy Mace',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Asmodeus';
        $feat->description = '<p>You have made a Pact to Asmodeus</p>';
        $helper->addTypesToFeat($feat, ['Pact', 'Evil', 'Vile', 'Lawful']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Corrupt Weapon', 'Eldritch Blast', 'Friends', 'Produce Flame', 'Slash Tongue', 'Touch of Death'],
            1 => ['Burning Hands', 'Command'],
            2 => ['Darkness', 'Fire Step', 'Scorching Ray'],
            3 => ['Fireball', 'Stinking Cloud'],
            4 => ['Fire Shield', 'Wall of Fire'],
            5 => ['Dominate' => 'You may only have one dominated creature at a time', 'Flame Strike'],
            6 => ['Investiture of Flame'],
            7 => ['Devil Form'],
            8 => ['Orb of the Void'],
            9 => ['Imprisonment'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Disciple of Asmodeus';
        $feat->description = '<p>You gain the following abilities</p>
<dl>
    <dt>Improved Familiar</dt> <dd>You gain a Hellcat as a Familiar</dd>
    <dt>Rebuke Devil</dt> <dd>You gain the Channel Divinity Class Feature to rebuke Outsiders from the Plane of Baator. If you already have this Class Feature, then use your Character level instead of your Class level.</dd>
</dl>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Devil', 'Lawful', 'Invocation' => 5]);
        $feat->parent_feats()->save(app()->feats['Find Familiar']);
        $feat->parent_feats()->save(app()->feats['Pact to Asmodeus']);

        $feat              = new Feat;
        $feat->name        = 'Improved Disciple of Asmodeus';
        $feat->requirement = 'You must be LE';
        $feat->description = '
<ul>
    <li>You gain a +2 divine bonus to all Saves.</li>
    <li>
        <p>You gain access to the Planar Ally Spell if you do not already have it.</p>
        <p>Devils that are called are assumed to be in the service of Asmodeus, therefore, if the called devil agrees to the requested task, it will not seek to corrupt the agreement. However, the devil will always work in the service of Asmodeus.</p>
        <p>The suggested cost is divided by 10.</p>
        <p>Asmodeus will not send a devil more than 1 a month. The Disciple of Asmodeus may still perform the ritual more often, but it will not be a devil that directly serves Asmodeus (i.e. the benefits of this feat does not apply).</p>
    </li>
    <li>You may take the Sacrificial Mastery Feat.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Devil', 'Lawful', 'Invocation' => 11]);
        $helper->addSpellsToFeat($feat, [
            3 => ['Dread Word'],
            6 => ['Planar Ally'],
        ]);
        $feat->parent_feats()->save(app()->feats['Disciple of Asmodeus']);

        $feat              = new Feat;
        $feat->name        = 'Greater Disciple of Asmodeus';
        $feat->requirement = 'You must be LE';
        $feat->description = "<p>You gain a Cornugon as a servant, as if you had cast the Planar Ally spell, except that the Cornugon serves you so long as your goals are in the benefit of Asmodeus. This Cornugon's true goals are to serve Asmodeus.</p>";
        $helper->addTypestoFeat($feat, ['Vile', 'Evil', 'Devil', 'Lawful', 'Invocation' => 15]);
        $helper->addSpellsToFeat($feat, [
            7 => ['Shield of Law', 'Unholy Aura'],
        ]);
        $feat->parent_feats()->save(app()->feats['Improved Disciple of Asmodeus']);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Zariel';
        $god->level = 'Archdevil';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $god->name,
            'title'     => 'Lord of the First, Archduchess of Avernus, Former Solar',
            'level'     => 'Archdevil',
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);

        /**********************************************************************/

        $dis        = new God;
        $dis->name  = 'Dispater';
        $dis->level = 'Archdevil';
        $dis->save();
        $dis->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $dis->name,
            'title'     => 'Lord of the Second, Archduke and Lord of Dis, The Iron Duke, Father of Strife',
            'level'     => 'Archdevil',
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Dispater';
        $feat->description = '<p>You have made a Pact to Dispater</p>
<ul>
    <li>Increase your CON score by 1, to a maximum of 20</li>
    <li>Add the Thievery skill to all of your Class Skills</li>
    <li>You are proficient in all metal weapons</li>
    <li>You may take the Sacrificial Mastery Feat.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Pact', 'Evil', 'Devil', 'Lawful']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Blade Ward', 'Cutting Hand', 'Mage Armor' => 'Self only. Armor is iron instead of Force',
                'Sword Strike' => 'The sword is iron instead of Force', ],
            1 => ['Command', 'Fear'],
            2 => ['Body Blades', 'Cloud of Daggers', 'Find Traps' => 'Metal based traps only', 'Transmuted Weapon'],
            3 => ['Keen Edge'],
            4 => ['Steelsting'],
            5 => ['Imbue with Adamantine'],
            6 => ['Blade Barrier'],
            7 => ['Arcane Sword' => 'The sword is iron instead of Force'],
            8 => ['Repel Metal or Stone'],
            9 => ['Invulnerability'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Disciple of Dispater';
        $feat->requirement = 'You must be LE';
        $feat->description = '<p>You gain some new abilities.</p>
<ul>
    <li>You gain Weapon Focus Feat. You may choose your Sword Strike Spell as your choice</li>
    <li>You gain an Additional Spell Slot</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Pact', 'Evil', 'Devil', 'Lawful', 'Invocation' => 7]);
        $helper->addSpellsToFeat($feat, [
            3 => ['Dread Word'],
            4 => ['Rusting Grasp', 'Stoneskin' => 'Iron instead of stone'],
        ]);
        $feat->parent_feats()->save(app()->feats['Pact to Dispater']);
        $feat->parent_feats()->save(app()->feats['Power Attack']);

        $feat              = new Feat;
        $feat->name        = 'Improved Disciple of Dispater';
        $feat->requirement = 'You must be LE';
        $feat->description = '<p>You gain the following abilities.</p>
<ul>
    <li>You gain the Weapon Specialization Feat. You may choose your Sword Strike Spell as your choice</li>
    <li>When you cast the spell Stoneskin, it is automatically Heightened +2</li>
    <li>When you make any Unarmed Strike, you are treated as having the Cutting Hand effect</li>
    <li>You may take the Sacrificial Mastery Feat.</li>
</ul>';
        $helper->addTypesTofeat($feat, ['Vile', 'Pact', 'Evil', 'Devil', 'Lawful', 'Invocation' => 9]);
        $feat->parent_feats()->save(app()->feats['Disciple of Dispater']);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Mammon';
        $god->level = 'Archdevil';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $god->name,
            'title'     => 'Lord of the Third, Viscount of Minauros, Lord of Avarice, Lord of Lust, King of Greed, King of Covetousness, Archduke of Minauros, He Who Speaks in Riddles, The Serpent Avenger, Master of Deception, The Serpent',
            'aliases'   => 'Minauros',
            'level'     => 'Archdevil',
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);
        $mammon = $god;

        $feat              = new Feat;
        $feat->name        = 'Pact to Mammon';
        $feat->description = '<p>You formally supplicate yourself to Mammon. You gain the following abilities.</p>
<ul>
    <li>You gain the Reaction Feat</li>
    <li>
        <p>When you cast the Arcane Pocket Spell, once per month, you find 10 gp in your pocket. This gold comes from the treasury of Mammon. If you are not in good standing with Mammon, no gold will be found.</p>
        <p>If you leave any coins in your Arcane Pocket when the Duration ends, the coins are taken by Mammon. When a great amount of coins are "tithed" in this way (at least 10,000 gp in a month), Mammon will sometimes send a Vrock to serve the Warlock for 1 month</p>
    </li>
    <li>You gain the Thievery Skill as a Class Skill</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Pact', 'Evil', 'Devil', 'Lawful']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Eldritch Blast', 'Ghost Sound', 'Hex', 'Mage Hand', 'Minor Illusion'],
            1 => ['Arcane Pocket', 'Silent Image'],
            2 => ['Darkness', 'Sticks to Snakes'],
            3 => ['Major Image'],
            4 => ['Arcane Eye', 'Dimension Door'],
            5 => ['Dominate'],
            6 => ['Drain Life'],
            7 => ['Blasphemy'],
            8 => ['Glibness'],
            9 => ['Soul Bind'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Disciple of Mammon';
        $feat->requirement = 'You must be LE';
        $feat->description = '<p>You gain the following abilities.</p>
<dl>
    <dt>Ranged Legerdemain</dt> <dd>You gain the Class Feature, Ranged Legerdemain</dd>
</dl>';
        $helper->addTypesToFeat($feat, ['Vile', 'Pact', 'Evil', 'Devil', 'Lawful', 'Invocation' => 5]);
        $helper->addSpellsToFeat($feat, [
            3 => ['Dread Word', 'Invisibility'],
        ]);
        $feat->parent_feats()->save(app()->feats['Pact to Mammon']);
        $feat->parent_feats()->save(app()->feats['Disciple of Darkness']);

        $feat              = new Feat;
        $feat->name        = 'Improved Disciple of Mammon';
        $feat->requirement = 'You must be LE';
        $feat->description = '<p>You gain the following abilities.</p>
<dl>
    <dt>Divert Spell</dt> <dd>As a Reaction, you may reflect a spell back to its caster as if you had the Master Counterspell feat 1/day. You do not have to cast any spell to Counter the spell to be reflected.</dd>
    <dt>Nondetection</dt> <dd>You gain the benefit of the spell Nondetection at all times.</dd>
</dl>
<p>You may take the Sacrificial Mastery Feat.</p>';
        $helper->addTypesTofeat($feat, ['Vile', 'Pact', 'Evil', 'Devil', 'Lawful', 'Invocation' => 9]);
        $feat->parent_feats()->save(app()->feats['Disciple of Mammon']);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Belial';
        $god->level = 'Archdevil';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'           => $god->name,
            'title'          => 'Lord of the Fourth, Lord of Pain and Suffering, Great Belial, Archduke Belial, Patron of Secrets, Domination, and Seduction',
            'level'          => 'Archdevil',
            'alignment'      => 'LE',
            'master_id'      => $asmodeus->id,
            'favored_weapon' => 'Ranseur',
            'description'    => "<p>Belial is the power behind the throne of Phlegethos, although his daughter is ruler in name. Sequestered away in the central Hall of One Thousand Sighs and Screams, Belial advises his daughter in the arts of love and pain, taking a personal hand in ensuring she learns all there is to know. Up until now, the situation suited Fierna just fine. But thanks to her flowering relationship with Glasya, she has become more interested in taking Phlegethos in more than just name. No longer is she content to sit idly by and let her father make the decisions. She has even cultivated a few cults on the Prime Material Plane.</p>
<p>Fierna's newfound ambition concerns Belial, but he has other worries. He had been assembling armies to invade the fifth and sixth layers, confident his forces could overcome those of Levistus and the Hag Countess. But Glasya's surprising coup stalled his plans, and now he can't move at all, since doing so would invoke the full force of Asmodeus's ire. For now, Belial is content to watch and see what develops with this new player in Hell's vicious political game. Belial and Fierna surround themselves with a variety of devils, including several legions of barbazu and hamatulas, but they are most famed for their kennels. These breeding pits produce powerful hellish beasts that rival even the Nessian warhounds Asmodeus uses to protect his halls.</p>
<p>Belial is the patron of secrets, domination, and seduction. He is a profane being, reveling in the pleasures and pains of the flesh. He resides in the city of Abriymoch in a palace of jagged obsidian built on one lip of the caldera.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Fierna';
        $god->level = 'Archdevil';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $god->name,
            'title'     => 'Lady of the Fourth, Fiery Lady of Phlegethos, Archduchess Fierna, Daughter of Belial',
            'level'     => 'Duke of Hell',
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);

        /**********************************************************************/

        $lev        = new God;
        $lev->name  = 'Levistus';
        $lev->level = 'Archdevil';
        $lev->save();
        $lev->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $lev->name,
            'title'     => 'Lord of the Fifth, Prince of Stygia, Prince Levistus, Price of Betrayal, The Frozen Prince, The Rogue Archdevil',
            'level'     => 'Archdevil',
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Levistus';
        $feat->description = '<p>You have made a Pact to Levistus</p>
<ul>
    <li>You gain Resistance to Cold Damage</li>
    <li>You gain a Heroic Surge</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Evil', 'Vile', 'Lawful']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Ice Knife', 'Ray of Frost'],
            1 => ['Armor of Frost', 'Frost Fingers'],
            2 => ['Chill Metal', 'Chilling Chamber', 'Ice Armor', 'Resist Cold', 'Frost Whip'],
            3 => ['Sleet Storm'],
            4 => ['Ice Blade', 'Ice Storm'],
            5 => ['Bind to Hell', 'Cone of Cold', 'Dispel Fire'],
            6 => ['Freezing Sphere', 'Investiture of Ice'],
            7 => ['Heart of Ice', 'Entomb in Ice'],
            8 => ['Polar Ray'],
            9 => ['Burst of Glacial Wrath'],
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Glasya';
        $god->level = 'Archdevil';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $god->name,
            'title'     => 'Lord of the Sixth, Princess of Hell, Princess of the Night, Lord of Malbolge, Queen of the Erinyes, The Dark Prodigy',
            'level'     => 'Archdevil',
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);

        /**********************************************************************/

        $god              = new God;
        $god->name        = 'Baalzebul';
        $god->level       = 'Archdevil';
        $god->description = '<p>Formally an archon named Triel.</p>p>';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $god->name,
            'title'     => 'Lord of the Seventh, Lord of Flies, Lord of Lies, Triel the Fallen, The Fallen One, Archduke of Maladomini, the Slug Archduke',
            'aliases'   => 'Triel',
            'level'     => 'Archdevil',
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);
        $baalzebul = $god;

        $feat              = new Feat;
        $feat->name        = 'Pact to Baalzebul';
        $feat->description = '<p>You formally supplicate yourself to Baalzebul. You gain the following abilities.</p>
<ul>
    <li>Increase your CHA score by 1, to a maximum of 20</li>
    <li>You gain the Sneak Attack Class Feature. If you already have the Sneak Attack class feature, you may take a Sneak Attack feat that you qualify for.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Pact', 'Evil', 'Devil', 'Lawful']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Eldritch Blast', 'Ghost Sound', 'Hex', 'Infestation', 'Produce Flame'],
            1 => ['Biting Words', 'Burning Hands', 'Charm', 'Curse', 'Tongue of Baalzebul'],
            2 => ['Animal Messenger' => 'Flies only', 'Darkness', "Eagle's Splendor"],
            3 => ['Animate Dead', 'Bedevil'],
            4 => ['Divination', 'Insect Plague'],
            5 => ['Insect Form' => 'Fly only'],
            6 => ['Consume Likeness', 'Teleport'],
            7 => ['Blasphemy'],
            8 => ['Feeblemind'],
            9 => ['Power Word Kill'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Disciple of Baalzebul';
        $feat->requirement = 'You must be LE';
        $feat->description = "<p>You gain the following abilities.</p>
<ul>
    <li>As a Free Action, you can surround yourself an Aura of Flies, a magical aura that looks like buzzing flies. The aura extends 5 feet from you in every direction, but not through total cover. It lasts until you're Incapacitated or you dismiss it as an Action. The aura grants you Advantage on Intimidation checks but Disadvantage on all other CHA checks. Any other creature that starts its turn in the aura takes Poison damage equal to your CHA modifier. Once you use this Invocation, you can't use it again until you finish a Long Rest.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Vile', 'Pact', 'Evil', 'Devil', 'Lawful', 'Invocation' => 5]);
        $helper->addSpellsToFeat($feat, [
            3 => ['Insect Form' => 'Normal sized House Fly only'],
        ]);
        $feat->parent_feats()->save(app()->feats['Pact to Baalzebul']);
        $feat->parent_feats()->save(app()->feats['Disciple of Darkness']);

        $feat              = new Feat;
        $feat->name        = 'Improved Disciple of Baalzebul';
        $feat->requirement = 'You must be LE';
        $feat->description = '<p>You gain the following abilities.</p>
<ul>
    <li>You may now use your Aura of Flies ability 3 times per Long Rest.</li>
</ul>';
        $helper->addTypesTofeat($feat, ['Vile', 'Pact', 'Evil', 'Devil', 'Lawful', 'Invocation' => 9]);
        $helper->addSpellsToFeat($feat, [
            3 => ['Dread Word'],
            5 => ['Calling' => 'Heightened +2. Cornugon only'],
        ]);
        $feat->parent_feats()->save(app()->feats['Disciple of Baalzebul']);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Mephistopheles';
        $god->level = 'Archdevil';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $god->name,
            'title'     => 'Lord of the Eighth, Lord of the Citadel, Lord of No Mercy, Lord of Hellfire, The Cold Lord, Duke of Brimstone, Archduke of Cania, Baron of Cania, The Archdevil of Contradictions',
            'level'     => 'Archdevil',
            'aliases'   => "Thra'axfyl the Ambitious",
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Mephistopheles';
        $feat->description = '<p>You formally supplicate yourself to Mephistopheles. You gain the following abilities.</p>
<ul>
    <li>You may cast the Spell Resistance with just a Somatic Casting</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Pact', 'Evil', 'Devil', 'Lawful']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Control Flames', 'Fire Bolt', 'Produce Flame', 'Resist' => 'Fire only'],
            1 => ['Burning Hands', 'Hellish Rebuke'],
            2 => ['Continual Flame', 'Flame Blade', 'Heat Metal', 'Pyrotechnics'],
            3 => ['Dragon Breath' => 'Self only. Fire only', 'Fireball'],
            4 => ['Fire Eyes'],
            5 => ['Dispel Cold'],
            6 => ['Investiture of Flame'],
            7 => ['Fiery Body'],
            8 => ['Incendiary Cloud'],
            9 => ['Meteor Swarm'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Disciple of Mephistopheles';
        $feat->requirement = 'You must be LE';
        $feat->description = "<p>You increase your rank in the hierarchy of Mephistopheles' cult. You gain the following abilities.</p>
<ul>
    <li>You gain Damage Reduction 5 vs Fire</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Vile', 'Pact', 'Evil', 'Devil', 'Lawful', 'Invocation' => 7]);
        $helper->addSpellsToFeat($feat, [
            4 => ['Fire Shield'],
        ]);
        $feat->parent_feats()->save(app()->feats['Pact to Mephistopheles']);
        $feat->parent_feats()->save(app()->feats['Disciple of Darkness']);

        $feat              = new Feat;
        $feat->name        = 'Improved Disciple of Mephistopheles';
        $feat->requirement = 'You must be LE';
        $feat->description = "<p>You have reached the highest ranks in the hierarchy of Mephistopheles' cult. You gain the following abilities.</p>
<ul>
    <li>You gain Damage Reduction vs Fire becomes 15</li>
    <li>You may take the Sacrificial Mastery Feat.</li>
</ul>";
        $helper->addTypesTofeat($feat, ['Vile', 'Pact', 'Evil', 'Devil', 'Lawful', 'Invocation' => 9]);
        $helper->addSpellsToFeat($feat, [
            3 => ['Dread Word'],
            5 => ['Immolation'],
        ]);
        $feat->parent_feats()->save(app()->feats['Disciple of Mephistopheles']);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Gargauth';
        $god->level = 'Devil Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $god->name,
            'title'     => 'The Tenth Lord of the Nine',
            'level'     => 'Duke of Hell',
            'alignment' => 'LE',
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'title'          => 'The Hidden Lord, The Lord Who Watches, The Lost Lord of the Pit, The Outcast, The Tenth Lord of Nine',
            'level'          => 'Hero',
            'aliases'        => '(Astaroth), Gargoth',
            'portfolio'      => 'Betrayal, cruelty, political corruption, powerbrokers',
            'alignment'      => 'LE',
            'symbol'         => 'Broken animal horn',
            'favored_weapon' => 'Corrupter (dagger)',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Geryon';
        $god->level = 'Devil Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $god->name,
            'title'     => 'The Serpentine Lord, The Deposed Lord, The Forgotten Lord, The Trifold Duke, The Great Beast, The Broken Beast, Former Lord of the Fifth',
            'level'     => 'Devil Lord',
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Moloch';
        $god->level = 'Devil Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Former Lord of the Sixth',
            'level'       => 'Devil Lord',
            'alignment'   => 'LE',
            'master_id'   => $asmodeus->id,
            'description' => "<p>Moloch was once an archdevil in the service of Baalzebul, serving as his viceroy in Malbolge before being exiled after the Reckoning. Though formerly the greatest duke of Hell, he is untrusted by his masters and betrayed by his subjects in a devious coup, after which Moloch plots his resurgence.</p>
<p>Standing over 14.5 ft tall, Moloch is a powerful, almost square physique. His short arms and legs are especially thick and ended in enormous hands and feet that are both cubic and clawed. He has reddish-orange skin and a bestial visage, his huge, horned head hosts fiery, slanting, unblinking eyes and a salivating, gaped mouth filled with shark-like teeth.</p>
<p>As a solider, Moloch is a dauntless foe that strikes fear into the hearts of tanar'ri hordes with just a mention of his name. He is known for his unending hatred of his opposition and his malice isn't halted by his rise to power nor tempered by the nature of his victims. Gleefully, he torters and disfigures other devils in a variety of creative ways with cruelty rivaling that of Baalzebul. Being deposed has not stemmed his ambition and the prideful devil has no qualms about using deception and confusion to return to power.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Abigor';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Duke of Hell',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $baalzebul->id,
            'description' => "<p>Abigor commands 60 companies of cornugons. He appears as an ocher skinned hairless humanoid with small horns, black hooves, a forked tail and large crimson bat-like wings. He loves battle and destroying creatures weaker than him. He wields a +2 Battle Axe and a +2 Mace and can Reflect any spell back at it's caster 1/day.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Adramalech';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $god->name,
            'title'     => 'Chancellor of Hell, Keeper of Records',
            'level'     => 'Duke of Hell',
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Agares';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Duke of Hell',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'description' => "<p>Agares was a duke and vassal first of Geryon, and now of Levistus. He commands 31 companies of osyluths, and has a nasty feud with his fellow duke Amon. The feud was bitter enough that Herodias, Geryon's magistrate, had to head off open war between the two several times. Agares typically fights with a iron-shod staff and his powerful magical abilities.</p>
<p>Agares appears as an old male humanoid, with a brittle, quavering voice to match. He had a tufted grey beard, small grey horns, and a ruddy complexion that deepened to scarlet on his body. His feet are birdlike and his tail is stumpy and reptilian; both are also grey. His watery eyes and nails, however, are red. Agares also has irregular ribs that curved in such a way that they appear knotted and deformed. He typically conceals much of his diabolic appearance and coloring under robes. He enjoys taking and training hawks from the Prime Material Plane.</p>",
            'master_id'   => $lev->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Amon';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Duke of Hell',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'description' => 'Amon was a vassal and duke in the service of Geryon who was driven into exile after Geryon lost power. He resembles a 9‑foot-tall, well-formed and muscled human with the head of a wolf. An unnaturally large winter wolf serves him as both companion and guardian.',
            'master_id'   => God::where('name', 'Geryon')->first()->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Arioch';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'           => $god->name,
            'title'          => 'The Iron Avenger of Dispater',
            'level'          => 'Duke of Hell',
            'alignment'      => 'LE',
            'master_id'      => $dis->id,
            'favored_weapon' => 'double-ended halberd',
            'description'    => "<p>Arioch is humanoid in form, with a crocodile head and lion-like mane. His skin is purple on his head and shoulders, and a dark wine-red on the rest of his body. Arioch has massive, bat-like wings, a forked tail, and cloven hooves in place of feet. He is 9feet (2.7meters) tall and muscular in build.</p>
<p>Arioch has the powerful magic characteristic of an archfiend, and he wields a massive, 20‑foot-long (6.1‑meter) double-ended halberd in combat.</p>
<p>Arioch serves Dispater in the office of 'avenger': he punishes both inhabitants and intruders in Dis who displeased his master, and acted as Dispater's bodyguard when the archduke traveled away from the Iron Citadel.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Alocer';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Duke of Hell',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $dis->id,
            'description' => '<p>Alocer is a war-like general with a lion-like head. He is greatly proficient in most weapons and leads 36 companies of erinyes and rides about his estate on a nightmare. he wears plate mail and fights with broadsword, axe, mace, and dagger, wielding one at a time and biting at the same time with his great jaws. Alocer has a humanoid body with red-gold flesh and a fearsome leonine head. The fiery flash of his eyes can be seen for some distance. If one meets his gaze, the victim must Save vs WIS or be Blinded for 2-12 days (Baatezu are immune). A Cure Blindness, Dispel Magic, Restoration or similar magic can restore sight to the victim.</p>
<p>Once per round, Alocer can employ one of the following spell-like powers</p>
<ul>
    <li>Pyrotechnics</li>
    <li>Produce Flame</li>
    <li>Detect Magic</li>
    <li>Detect Invisibility</li>
    <li>Fly</li>
    <li>Dispel Magic</li>
    <li>Dancing Lights</li>
    <li>Symbol of Stunning (1/day)</li>
    <li>Summon 1-2 Erinyes with a 65% chance of success</li>
</ul>
<p>Alocer can cause Fear by touch (WIS Save with a -3 penalty). He regenerates 2 Hit Points per round.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Amduscias';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'aliases'     => 'Amdusias',
            'title'       => 'Duke of Tiamat, The Reconciliator of Foes',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => God::where('name', 'Tiamat')->first()->id,
            'description' => '<p>Amduscias is an Archdevil that serves Tiamat.</p>
<p>Amduscias is a natural shapechanger who could change between three forms at will. He did not wear armor in any form.</p>
<ul>
    <li>A dirty-yellow unicorn with a purple horn and eyes like flames.</li>
    <li>Humanoid with a hawk-like head, typically wearing black or dark-red robes. His beak was long and hummingbird-like, and was ambidextrous.</li>
    <li>A wolf with a prehensile, serpentine tail, his preferred fighting form.</li>
</ul>
<p>Amduscias leads 29 companies of abishai. He is a good negotiator and actor and frequently acted as a mediator.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Baftis';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'First Consort to Baalzebul',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $baalzebul->id,
            'description' => '<p>Quiet and subservient and afraid of her lord, she rarely acts on her own behave without explicit permission from Baalzebul.</p>
<p>She appears as a tall attractive but forbidding female with crimson skin, hooves, spired horns, lavender eyes and bat-like wings. The skin on her back is ivory in shade and she is said she is rather self-conscious about it.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Barbatos';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Marshal of Maladomini',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $baalzebul->id,
            'description' => "<p>Barbatos is responsible for all of Baalzebul's armies in Maladomini and (through Moloch) the forces of Malbolge as well. Authoritarian and a shrewd judge of his warriors battle tactics, he has won Baalzebul's trust. He never shows outward signs of personal ambitions, so he is viewed as being extremely loyal to his master. He appears as a bearded horned giant with green eyes, black hooves and a tail.</p>
<p>Barbatos can track as a Ranger, Pass Without Trace, Move Silently, and break Arcane Locks with a touch.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Bel';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $god->name,
            'title'     => 'Warlord of Avernus, General of the Third Command, The Pit Fiend',
            'level'     => 'Duke of Hell',
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);

        /**********************************************************************/

        $god             = new God;
        $god->name       = 'Bensozia';
        $god->level      = 'Archdevil';
        $god->deleted_at = new Carbon('now');
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Queen of Hell, Consort to Asmodeus',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $asmodeus->id,
            'description' => "<p>Bensozia was the Queen of the Nine Hells, and the most powerful of the various archdevil consorts. She is the mother of Glasya.</p>
<p>At some point in the history of the Nine Hells, the archdevil Levistus approached her. In some accounts he attempted to ravish her, while in others he tried to turn her against Asmodeus and was rebuffed. All accounts, however, agree that Levistus killed her and that that event was the cause of Levistus' imprisonment.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Biffant';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Provost to Dispater',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $dis->id,
            'description' => '<p>Biffant manages the Iron Throne with a team of two messenger erinyes and size spinagons servitors guarding him at all times, his cunning and almost precognitive levels of forward-thinking compensating for his lack of courage or assertiveness. Biffant and Lilis is known to work well together.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Bitru';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'           => $god->name,
            'title'          => 'Duke of Hell',
            'level'          => 'Duke of Hell',
            'alignment'      => 'LE',
            'master_id'      => $dis->id,
            'favored_weapon' => 'Two-handed sword',
            'description'    => "<p>Bitru resembles a muscular humanoid with scarlet and lustrous black hooves, horns, and wings. He wields a huge magical Great Sword.</p>
<p>Bitru is one of the dukes of Baator who serves Dispater. He rules over vast estates on the layer of Dis. As a servant of Dispater, Bitru commands 70 companies of erinyes in battle on his lord's behalf.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Buer';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Duke of Hell',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $asmodeus->id,
            'description' => '<p>Buer commands 15 companies of pit fiends.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Bune';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Duke of Hell',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $asmodeus->id,
            'description' => '<p>Bune commands 30 companies of cornugons.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Caarcrinolaas';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Duke of Hell',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $mammon->id,
            'description' => '<p>Caarcrinolaas commands 36 companies of barbed devils. He is a gray-brown furred dog-headed humanoid with scarlet bat-like wings and 3 scarlet horns, black hooves and a forked tail. He has strong, bony scarred hands of human appearance and glittering yellow eyes.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Focalor';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Duke of Hell',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $mammon->id,
            'description' => '<p>Seneschal to Mammon. He holds the day-to-day authority in Minauros.</p>
<p>Focalor appears as a thin, bearded, middle-aged human sage with power and heavy concerns, until he unfurls his feathered wings from his flowing robes or reveals his brown cloven hooves. He wears an iron gauntlet on his right hand as his badge of office.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Herodias';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Magistrate',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'description' => "<p>Herodias was the tribune of Geryon before that archduke's fall from power, after which he was exiled from the Nine Hells. Before his exile, at least, he was a proud and ambitious duke who fully expected to continue his rise in power, and favored any change in the power structure as a step towards his inevitable rise. Herodias has the form of a 8‑foot-tall humanoid male with scarlet skin, black hooves, goat-like horns, a small and forked tail, and small, useless wings. His arms are large and muscular, while his face is round, sinister, and disturbingly human.</p>",
            'master_id'   => God::where('name', 'Geryon')->first()->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Jaqon';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => '',
            'level'       => 'Duke of Hell',
            'aliases'     => 'Dagon',
            'alignment'   => 'LE',
            'description' => "<p>Jaqon resembles a clean-shaven satyr with red skin and green eyes. He also has pointed ears and small, curved horns like those of a pit fiend. He typically wears a weapon harness bearing a whip and rapier, and a backpack.</p>
<p>Jaqon was an archdevil, and possesses an outlook typical of their kind: the strong rule and the weak obey. He is a skilled actor and diplomat when he needs to be. However, he also considers himself above the rulings and decrees of Asmodeus, and feels a sort of kinship with the archdevil Geryon and the rebellious pit fiends that dwelt on the edges of Cania.</p>
<p>Jaqon was originally an archdevil of Asmodeus's court, serving the Lord of Nessus as herald and messenger. However, certain unpleasant activities of his led to his expulsion from the diabolical hierarchy and exile to Avernus. The activities that led to his exile included procuring substances from the Nine Hells at summoners' requests for a fee, giving information to summoners to aid in the summoning of other powerful devils,and giving hints at the truenames and preferences of various she-devils to the archdevils who sought their hands. For that last crime, all the consorts in Baator despise him.</p>
<p>To make his exile a punishment, Asmodeus forcibly changed Jaqon's truename to Dagon, an insult to both the archdevil and the demon prince of the same name. However, it was effective: anyone who trys to summon Jaqon will instead get the more powerful demon prince's aspect. It is an effective foil to an archdevil that was used to being summoned frequently.</p>
<p>Trapped in Avernus by Asmodeus' decree, Jaqon is forced to roam that layer. He often pretends to be an unlucky woodland creature who is searching for a way 'home' to the Material Plane.</p>
<p>His immediate goals are to convince another creature, one that could leave Baator, to spread the word of his name-change and the means of summoning him again amongst summoners. To that end, he is polite and helpful.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Lilis';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'The Iron Maiden, Consort to Dispater',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $dis->id,
            'description' => '<p>Lilis resembles a 5‑foot-tall (1.5‑meter) plump human female of middle age. She has copper-colored hair, orange-red skin, and bright green eyes. She also has small, orange-red horns, a forked tail, wings, long red nails, and delicate, cloven black horns in place of feet.</p>
<p>Lilis is one of the older and weaker consorts, but she still possesses an array of spell-like abilities. She is also highly intelligent.</p>
<p>Lilis lives in the layer of Dis in Baator. She is the consort of Dispater, but also serves as spymaster and diplomat. Her network of spies is said to be second only to Asmodeus, and her careful maneuvering keeps her position within Hell secure.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Lilith';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Princess of Hell, Consort to Baalzebul',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $baalzebul->id,
            'description' => "<p>Lilith is a princess of the Nine Hells who serves as the second consort to the Lord of the Seventh, Baalzebul. She is an infamous fiend, so known for the sting of her whip that the welt from a deep lash is commonly known in Hell as \"Lilith's Mark\". Somtimes she is portrayed as a romantic or wronged female figure (such as a rejected lover), and indeed the Slug Archduke's consort is a woman who fells scored.</p>
<p>Lilith appears to be a beautiful, nubile, 9 feet tall woman, so alluring that she is easily the most attractive of Hell's fiends (at least for a time). She has crimson skin, hooves, a serpentine tail, small, curved hors and eyes that glow white, including her pupils. She rarely wears clothing, preferring to use clinging shadows when she fells it is necessary. Lilith is known to use her ability to change shape to take ont he form of her victim's loved ones.</p>
<p>Lilith is an incredibly intelligent devil who exhibits the sadism common to most of her kind. She often toys with her prey, subjecting them to psychological and physical torture before murdering the.</p>
<p>Among Lilith's various spell-like abilities are fire manipulation, charming, psionics, tongues, teleportation, dispelling magic, darkness, shape changing, necromancy, and lightning. She has an aura of desire which baatezu are immune to, and can clock herself in clinging shadows. She can also summon other baatezu once per day. In melee, Lilith prefers to fight with her tail, which she uses to strike and constrict.</p>
<p>Although she uses them less frequently in order to avoid breaking them, Lilith also fights with a scimitar and a metal-barbed whip called \"Lilith's Caress\" which sapped the strength of her victims, causing exhaustion.</p>
<p>Lilith mostly uses her seductive charms to survive the tumultuous infernal political landscape whilst waiting for the chance to take over as the ruler of Maladomini.</p>
<p>As a result of her attractiveness, many devils are willing to do small favors for Lilith. Though once a consort of Moloch, she is more loyal to Baalzebul than the deposed Duke, abandoning Malbolge when he fell from power to return to the side of the Lord of the Flies. However, even when she was under Moloch, her loyalty to Baalzebul was not what it had been in the past. She fells largely powerless and resents being moved around at Baalzebul's whim. Even though she chose to stick by him, she is only staying close in order find some weakness to use in her own ascent to power. Until then, she gives counsel to the Slug Archduke so that he (and more importantly she) can be restored to glory. During Moloch's reign, Lilith often worked with the like-minded legate Tartach. For a time she worked closely with both him and Glasya, but chose not to work for that latter partially out of resentment for her sudden rise to power.</p>
<p>Lilith residence in Baator can be traced at least as far back as Asmodeus's rule, and throughout that period she has always been a figure near power. The earliest records of her existence is when she was gifted to Moloch by Baalzebul as a blatant attempt to keep him obedient, for Lilith was easily Hell's most alluring denizen, with a way of diverting the attention of those she encountered from important matters. As Moloch's consort, she was also regarded as loyal to Baalzebul, as was the nature of all of Moloch's vassals at the time. She moved with Moloch between the many cornugon-led fortresses of Malbolge at Baalzebul's command, usually brought by his herald Neabaz.</p>
<p>Over time, however, Lilith's loyalty wore thin, her patience for being moved here and there weakening. Like all who delivered the gemstones formed from Malbolge's volcanic activity to Baalzebul, she kept a few for herself for her own gain, keeping them hidden until she could trade them unbeknownst to the Lord of the Flies for less identifiable coinage. She also came to resent her service to Moloch, and it got to the point that she might have supported a strong bid to overthrow Moloch and replace him.</p>
<p>Moloch competed for her place as Moloch's consort with the Night Hag Malagard. Though she might have been able to expose Malagard's treachery (which would have resulted in a very different version of Hell), she lacked the passion for her duties to do so. Which Malagard's scheme a success, she rose to become the Hag Countess and new Lord of Malbolge, at which point Lilith abandoned the 6th layer and returned to Maladomini, yet this change did nothing to alleviate her resentment. While her rival consort Malagard had ascended to the ranks of archdevil, she found herself demoted to Baalzebul's second consort, and her liege cursed with the form of a grotesque slug whose touch she despised.</p>
<p>Despite the change of regime, Lilith's feelings of powerlessness under Baalzebul continues all the same. Tartach has remained in Malbolge, serving Malagard only nominally, but became a key ally of Glasya when she ascended. Despite working with them at first, both she and Tartach have once dreamed of supporting a new ruler of Malbolge, she eventually decided against joining Glasya's court, both out of resentment for the daughter of Asmodeus, and to achieve her own goal of some day overtaking the bloated SLug Archduke as the master of Maladomini.</p>",
        ]);

        /**********************************************************************/

        $god             = new God;
        $god->name       = 'Malagard';
        $god->level      = 'Archdevil';
        $god->deleted_at = new Carbon('now');
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $god->name,
            'title'     => 'Lord of the Sixth, The Hag Countess of Malbolge, Hag Queen of the Crushing Land',
            'level'     => 'Duke of Hell',
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Machalas';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Constable of Nessus',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $lev->id,
            'description' => "<p>Machalas was a duke and vassal first of Geryon, and now of Levistus. He was the weakest of Geryon's three dukes and thus encouraged the feuding between Agares and Amon in order to make himself seem more reasonable. He uses his magical abilities and either a spear or axe in battle.</p>
<p>Machalas is a 12‑foot-tall humanoid with black scaly skin, bat-like wings, cloven hooves, and a forked tongue. His horned head is bright red; his face ugly and vaguely bat-like with very large, prominent jaws and slanted, solid white eyes. His voice is described as hissing, soft, and always menacing.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Melchon';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Constable of Nessus',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $mammon->id,
            'description' => '<p>Melchon leads 18 companies of erinyes. He is a fiery red-skinned humanoid devil with upturned bull-like horns, black curling eyebrows and beard, black hoobes and large crimson winges.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Malphas';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Duke of Tiamat, General of Tiamat',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'description' => "<p>Malphas is an Archdevil who serves Tiamat.</p>
<p>Malphas can take two forms.</p>
<ul>
    <li>A muscular, dark-skinned humanoid. He typically wears black velvet robes studded with hundreds of gemstones</li>
    <li>A large crow-like bird, black in color.</li>
</ul>
<p>Malphas's voice is deep and persuasive and he never wore armor.</p>
<p>Malphas leads 40 companies of abishai. He is  known to be skilled at deceiving other creatures.</p>",
            'master_id' => God::where('name', 'Tiamat')->first()->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Merodach';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Duke of Hell',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $dis->id,
            'description' => "<p>Perhaps the most bizarre of Dispater's generals is the patchwork quadruped known as Merodach. He has the body of a wolf, a serpent's prehensile tail, huge feathered winds and large spreading longhorns. He commands 21 barbazus companies.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Neabaz';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Herald of Baalzebul',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $baalzebul->id,
            'description' => '<p>Neabaz, herald of Baalzebul, appears as a handsome man with tiny horns and transparent fly-like wings. He is physically weaker than other devils, and Baalzebul has ordered that he be equipped with magical items to improve his defenses. He wears a cape and hat of blood-red silk. The cape can create a aura of flames (treated as the Fire Shield Spell 4/day). He also wields a Flame Tongue sword that can cast Detect Alignment 4/day and Magic Missile (as an Action, shooting 4 Missiles) 9/day.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Phongor';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $god->name,
            'title'     => 'Inquisitor of Hell',
            'level'     => 'Duke of Hell',
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Rimmon';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'           => $god->name,
            'title'          => 'Duke of Hell',
            'level'          => 'Duke of Hell',
            'alignment'      => 'LE',
            'master_id'      => $asmodeus->id,
            'favored_weapon' => 'Trident',
            'description'    => '<p>Rimmon resembles a 12-foot tall gelugon with a horned humanoid head.</p>
<p>Rimmon is nasty and sarcastic, and therefore disliked by other devils. However, he also has little personal pride and is utterly loyal to Asmodeus.</p>
<p>In combat, Rimmon typically used his natural claws and tail as weapons, but occasionally he uses a trident.</p>
<p>Rimmon was the former ruler of Cania, the eighth layer of the Nine Hells.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Tartach';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Duke of Hell',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $asmodeus->id,
            'description' => '<p>A former Duke to Moloch, he then served Malagard and now Glasya.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Titivilus';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'           => $god->name,
            'title'          => 'Nuncio of Dispater',
            'level'          => 'Duke of Hell',
            'alignment'      => 'LE',
            'master_id'      => $dis->id,
            'favored_weapon' => 'Silver sword of wounding (Long Sword)',
            'description'    => '<p>Titivilus resembles a 5.5‑foot-tall satyr with pale skin and bat-like wings.</p>
<p>Titivilus is among the weaker archdevils, but he is exceptionally intelligent and clever. He is highly skilled at twisting words and causing confusion.</p>
<p>Titivilus is capable of using a number of spells at will, including animate dead, bestow curse, charm person or mammal, chaos, emotion, forget, fumble, illusion, hypnotism, illusionary script, know alignment, message, misdirection, non-detection, polymorph self, protection of good, suggestion, teleport, tongues, and ventriloquism; he can also cast feeblemind and symbol of discord once per day, and cause fear with a single touch.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Zepar';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'        => $god->name,
            'title'       => 'Duke of Hell',
            'level'       => 'Duke of Hell',
            'alignment'   => 'LE',
            'master_id'   => $baalzebul->id,
            'description' => '<p>Zepar commands 28 companies of Cornugons. Vicious and arrogant, he rarely engages in combat, preferring to use his magic to bully weaker creatures. He appears as a man dressed in scarlet armor with a grotesque clubbed foot, small horns, crimson skin and a forked tail. His normal human foot has retractable black claws.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Zagum';
        $god->level = 'Duke of Hell';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Lords of the Nine'], [
            'name'      => $god->name,
            'title'     => 'Duke of Hell',
            'level'     => 'Duke of Hell',
            'alignment' => 'LE',
            'master_id' => $asmodeus->id,
        ]);
    }
}
