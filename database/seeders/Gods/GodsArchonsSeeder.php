<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Models\Talent;
use App\Services\SeedHelper;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GodsArchonsSeeder extends Seeder
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

        $zaphkiel = God::where('name', 'Bahamut')->firstOrFail();
        $zaphkiel->pantheons()->save(app()->pantheons['The Celestial Hebdomad'], [
            'name'           => 'Zaphkiel',
            'title'          => 'The Watcher, Ruler of Chronias',
            'level'          => 'Tome Archon',
            'alignment'      => 'LG',
            'symbol'         => 'Donkey',
            'favored_weapon' => 'None',
            'description'    => '<p>Zaphkiel, the Watcher, is the first archon celestial and the leader of the Celestial Hebdomad. The greatest of all archons, he rules Chronias, the Illuminated Heaven of Mount Celestial. His symbol is the donkey.</p>
<p>Neither male nor female, Zaphkiel is a humanoid creature of breathtaking beauty, bathed at all times in holy power and radiant light. This tome archon stands ten feet tall, has skin of gold, and bears wings with platinum-white metallic feathers.</p>
<p>Zaphkiel is surrounded at all times by warm light, and he exudes so much goodness that only the most holy of entities can stand before him without being consumed. Those who can bear his presence are instilled with overwhelming feelings of harmony and joy.</p>
<p>Zaphkiel has an alternative incorporeal form, appearing instead as a golden storm of energy.</p>
<h3>Personality</h3>
<p>Zaphkiel is the embodiment of the Seventh Heaven. He is kind and his countenance soothing. He cares for the souls of imperfect mortals and protects those of truly innocent ones, such as stillborn or sacrificed babies. Beyond this, he is a great enigma.</p>
<h3>History</h3>
<p>Zaphkiel is one of the Tome Archons, rulers and protectors of the Seven Heavens. Of the first 7 Tome Archons, Zaphkiel is the only one of the original seven.</p>
<p>The only entities in existence to have actually seen Zaphkiel are the gods and the other Tome Archons (and perhaps Ahriman). All evil beings that have encountered him have not survived.</p>',
        ]);
        $zaphkiel->pantheons()->save(app()->pantheons['Draconic'], [
            'name'        => 'Jazirian',
            'level'       => 'Intermediate',
            'portfolio'   => 'Community, Peace, Learning, Parenthood, Couatls',
            'symbol'      => 'Uroboric Couatl',
            'alignment'   => 'LG',
            'description' => "<p>Jazirian is the deity of Couatls. His history is somewhat sketchy; never being a major player in divine politics, but with some citing Jazirian as being the source of all goodness, one of the creators of the multiverse, being the twin brother of Asmodeus (before he became a Baatezu) and is opposed to the other serpentine deities Merrshaulk and Ssharstrune, fighting him over the love of their mutual sister, Shekinester. Jazirian's gender is a bit spotty: certain sources refer to Jazirian as being a hermaphrodite or sexless and use neutral pronouns while other sources refer to Jazirian as being either male or female.</p>
<h3>History</h3>
<p>It is said that at the beginning of time, there were only a handful of uber-beings, including Ao, the Lady of Pain and the World Serpent.</p>
<p>Of the group, the World Serpent is the only overpower who actually seems to do anything, dividing himself into separate aspects in order to get stuff done. the three aspects of Law: Jazirian, Ahriman, and Primus collaborated to bring form out of the primordial Chaos. Their efforts created the Unity of Rings: everything keeps happening over and over again, and things tend to end where they began. This place, the first ring, became known as the Outlands. When it was defined, the outer planes fell in around it, thus creating the Outer Planes. Thus, together, they built the multiverse.</p>
<p>Jazirian and Ahriman squabble over where the center of the multiverse should be. While Primus thought that something that is infinite cannot have a center, Jazirian argued for Mount Celestial and Ahriman for Baator. The two pulled on each other, each with the others tail in their mouths. Finally, they separated, Jazirian flew up, while Ahriman fell.</p>
<p>Jazirian and Ssharstrune both courted the Naga goddess Shekinester. Shekinester eventually chooses Jazirian, and they sire Parrafaire.</p>
<h3>Worshippers</h3>
<p>Jazirian doesn't actually have worshippers per se. Acting similarly to Bahamut, he is typically an exemplar for Goodness and Law. Though Jazirian does not accept Clerics or answer prayers directly.</p>",
        ]);

        $god        = new God;
        $god->name  = 'Sealtiel';
        $god->level = 'Archon';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Celestial Hebdomad'], [
            'name'           => $god->name,
            'title'          => 'The Defender, Ruler of Jovar',
            'portfolio'      => 'Warden Archons',
            'level'          => 'Tome Archon',
            'alignment'      => 'LG',
            'symbol'         => 'Dog',
            'favored_weapon' => 'Greatclub',
            'master_id'      => $zaphkiel->id,
            'description'    => "<p>Sealtiel, the Defender, is a member of the Celestial Hebdomad and ruler of Jovar, the Glittering Heaven of Mount Celestial in the House of the Triad. His symbol is the dog, and he is a patron of warden archons.</p>
<p>Sealtiel is a beautiful tome archon standing nine feet tall. Sexless, but with masculine features, he has wings with metallic white feathers. His skin is ebony, and his eyes are silver and shine like stars. He has no hair and wears no armor or clothing but is surrounded by a glittering aura.</p>
<p>As Defender of the Seven Heavens, Sealtiel leads a huge standing armor of archons and other celestials in defense of the plane and especially Chronias, the Seventh Heaven, which is forbidden to all but the most pure.</p>
<p>As patron of the warden archons, Sealtiel provides the watchers with new orders. They also often come to him for enlightenment, hoping to gain advice on how to live in such a way as to eventually enter the Seventh Heaven.</p>
<p>One of Sealtiel's favored champions is Arkareon, a nature-loving movanic deva whom Sealtiel has raised from the dead at least seventeen times to continue his service.</p>",
        ]);

        $god        = new God;
        $god->name  = 'Raziel';
        $god->level = 'Archon';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Celestial Hebdomad'], [
            'name'           => $god->name,
            'title'          => 'The Crusader, The Firestar, Ruler of Merion',
            'portfolio'      => 'Paladins',
            'level'          => 'Tome Archon',
            'symbol'         => 'Bear',
            'alignment'      => 'LG',
            'favored_weapon' => 'Holy Avenger Longsword',
            'master_id'      => $zaphkiel->id,
        ]);

        $god        = new God;
        $god->name  = 'Pistis Sophia';
        $god->level = 'Archon';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Celestial Hebdomad'], [
            'name'           => $god->name,
            'title'          => 'The Ascetic, Ruler of Solania',
            'portfolio'      => 'Ascetics, Monks, Mystics',
            'level'          => 'Tome Archon',
            'symbol'         => 'Eagle',
            'alignment'      => 'LG',
            'favored_weapon' => 'Open Hand',
            'master_id'      => $zaphkiel->id,
        ]);

        $god        = new God;
        $god->name  = 'Erathaol';
        $god->level = 'Archon';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Celestial Hebdomad'], [
            'name'           => $god->name,
            'title'          => 'The Seer, Ruler of Venya',
            'portfolio'      => 'Seers, Prophets',
            'level'          => 'Tome Archon',
            'symbol'         => 'Dragon',
            'alignment'      => 'LG',
            'favored_weapon' => 'Quarterstaff',
            'master_id'      => $zaphkiel->id,
        ]);

        $god        = new God;
        $god->name  = 'Domiel';
        $god->level = 'Archon';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Celestial Hebdomad'], [
            'name'           => $god->name,
            'title'          => 'The Mercy Bringer, Ruler of Mercuria',
            'level'          => 'Tome Archon',
            'symbol'         => 'Ox',
            'alignment'      => 'LG',
            'favored_weapon' => 'Holy Flaming Greatsword',
            'master_id'      => $zaphkiel->id,
        ]);

        $god        = new God;
        $god->name  = 'Barachiel';
        $god->level = 'Archon';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Celestial Hebdomad'], [
            'name'           => $god->name,
            'title'          => 'The Messenger, Ruler of Lunia',
            'portfolio'      => 'Trumpet Archons',
            'level'          => 'Tome Archon',
            'symbol'         => 'Lion',
            'alignment'      => 'LG',
            'favored_weapon' => 'Longsword',
            'master_id'      => $zaphkiel->id,
        ]);

        $god             = new God;
        $god->name       = 'Terxyx';
        $god->level      = 'Archon';
        $god->deleted_at = Carbon::now();
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Celestial Hebdomad'], [
            'name'        => $god->name,
            'title'       => 'Tome Archon of Mercuria',
            'level'       => 'Tome Archon',
            'alignment'   => 'LG',
            'master_id'   => $zaphkiel->id,
            'description' => "<p>Terxyx appears as a winged humanoid with a hawk's head.</p>
<p>In 1357 DR, Terxyx led a company of sword archons in the Astral Plane to save Gareth Dragonsbane and his party from pursuing demons and to accompany them to meet his master Saint Sollars. Sometime after this, Terxyx ceased being the Lord of Mercuria. Weather he was destroyed or promoted is not known, but Domiel has since this time became the new Lord of Mercuria.</p>",
        ]);

        $god        = new God;
        $god->name  = 'Gabriel';
        $god->level = 'Solar';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Celestial Hebdomad'], [
            'name'        => $god->name,
            'level'       => 'Solar',
            'alignment'   => 'LG',
            'master_id'   => $zaphkiel->id,
            'description' => "<p>Gabriel is a solar in the service of Bahamut.</p>
<p>In 1357 DR, Gabriel was captured by a group of balors in the Layers of the Abyss ruled by Orcus. He was tortured by them until eventually he was freed by Gareth Dragonsbane's party.</p>",
        ]);

        $god        = new God;
        $god->name  = 'Xerona';
        $god->level = 'Solar';
        $god->save();
        $god->pantheons()->save(app()->pantheons['The Celestial Hebdomad'], [
            'name'        => $god->name,
            'title'       => 'Guardian of Gate to Chronias',
            'level'       => 'Solar',
            'alignment'   => 'LG',
            'master_id'   => $zaphkiel->id,
            'description' => '<p>Xerona guards the gate, al-Sihal at the top of the gem-stone ziggurat in Jovar in Mount Celestia that leads to the final layer, Chronias. He judges those that wish to climb to the final layer of Mount Celestia.</p>',
        ]);

        $god        = new God;
        $god->name  = 'Yonel';
        $god->level = 'Archon';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'        => $god->name,
            'title'       => "Guardian of the North Gate in Bahamut's Palace",
            'level'       => 'Archon',
            'alignment'   => 'LG',
            'master_id'   => $zaphkiel->id,
            'description' => "<p>Yonel guards the North Gate in Bahamut's Palace that leads to the Elemental Plane of Air.</p>",
        ]);

        $god        = new God;
        $god->name  = 'Kerkhoutha';
        $god->level = 'Archon';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'        => $god->name,
            'title'       => "Guardian of the South Gate in Bahamut's Palace",
            'level'       => 'Archon',
            'alignment'   => 'LG',
            'master_id'   => $zaphkiel->id,
            'description' => "<p>Kerkhoutha guards the South Gate in Bahamut's Palace that leads to the Elemental Plane of Air.</p>",
        ]);

        $god        = new God;
        $god->name  = 'Moriel';
        $god->level = 'Archon';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'        => $god->name,
            'title'       => "Guardian of the West Gate in Bahamut's Palace",
            'level'       => 'Archon',
            'alignment'   => 'LG',
            'master_id'   => $zaphkiel->id,
            'description' => "<p>Moriel guards the West Gate in Bahamut's Palace that leads to the Elemental Plane of Air.</p>",
        ]);

        $god        = new God;
        $god->name  = 'Ruhiel';
        $god->level = 'Archon';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'        => $god->name,
            'title'       => "Guardian of the East Gate in Bahamut's Palace",
            'level'       => 'Archon',
            'alignment'   => 'LG',
            'master_id'   => $zaphkiel->id,
            'description' => "<p>Ruhiel guards the East Gate in Bahamut's Palace that leads to the Elemental Plane of Air.</p>",
        ]);

        /**********************************************************************/

        $primus = God::where('name', 'Sardior')->first();
        $primus->pantheons()->save(app()->pantheons['Modron'], [
            'name'      => 'Primus',
            'title'     => 'The One and Prime',
            'level'     => 'Prime',
            'alignment' => 'LN',
        ]);

        $god        = new God;
        $god->name  = '1 of 4';
        $god->level = 'Modron';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Modron'], [
            'name'      => $god->name,
            'title'     => 'One of Four',
            'level'     => 'Modron',
            'alignment' => 'LN',
            'master_id' => $primus->id,
        ]);

        $god        = new God;
        $god->name  = '2 of 4';
        $god->level = 'Modron';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Modron'], [
            'name'      => $god->name,
            'title'     => 'Two of Four',
            'level'     => 'Modron',
            'alignment' => 'LN',
            'master_id' => $primus->id,
        ]);

        $god        = new God;
        $god->name  = '3 of 4';
        $god->level = 'Modron';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Modron'], [
            'name'      => $god->name,
            'title'     => 'Three of Four',
            'level'     => 'Modron',
            'alignment' => 'LN',
            'master_id' => $primus->id,
        ]);

        $god        = new God;
        $god->name  = '4 of 4';
        $god->level = 'Modron';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Modron'], [
            'name'      => $god->name,
            'title'     => 'Four of Four',
            'level'     => 'Modron',
            'alignment' => 'LN',
            'master_id' => $primus->id,
        ]);

        $feat                    = new Feat;
        $feat->name              = 'Emissary of Barachiel';
        $feat->requirement       = 'Must be LG. You must have levels in Bard';
        $feat->short_description = '<p>You devout yourself to the service of Barachiel, the celestial paragon of heralds and messengers.</p>';
        $feat->description       = '<p>You are a servant of the celestial Hebdomad, and Barachiel in particular. You frequently receive visions from the Archons to deliver messages on their behave. You gain the following</p>
<dl>
    <dt>Righteous Badge of Station</dt> <dd>As a Triple Action, you may declare your self a dutiful servant of the Celestial Hebdomad and that your presence is in their service. Using this ability when not sent by the Celestial Hebdomad causes you to gain 2 levels of Exhaustion. Outer Planar beings know the truth of your declaration, as well as any Divine character of 3rd level or higher.</dd>
    <dt>
        <p>Celestial Proclamation</dt> <dd>As a Double Action and using 2 uses of your Bardic Inspiration, you may issue a celestial call that has the following effect on all those within 60 feet of you.</p>
        <table>
            <thead>
                <tr>
                    <th>Alignment</th>
                    <th>Effect</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lawful Good</td>
                    <td>Inspired (+2 Morale bonus on all Attack Rolls, Saves, Skill Checks, and Ability Checks for 10 minutes)</td>
                </tr>
                <tr>
                    <td>Neutral Good or Chaotic Good</td>
                    <td>Blessed (+1 Morale bonus on Attack Rolls and on Saves against Fear effects for 10 minutes.)</td>
                </tr>
                <tr>
                    <td>Lawful Evil</td>
                    <td>Enthralled and Stunned (Affected creatures are Stunned: 1 and act as if subject to an Enthralled Spell for as long as you continue to speak and for 2 rounds thereafter. For the next 1 day, the creature will question their morals and be Slowed as they form a conscious that they must struggle with.</td>
                </tr>
                <tr>
                    <td>Neutral Evil or Chaotic Evil</td>
                    <td>Enthralled, Stunned and Shaken (As Lawful Evil and Affected creatures Shaken for the next 10 minutes).</td>
                </tr>
            </tbody>
        </table>
    </dd>
</dl>';
        $helper->addTypesToFeat($feat, ['Archon', 'Exalted', 'Good', 'Lawful']);
        $feat->parent_feats()->save(app()->feats['Servant of the Heavens']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Magic Mouth', 'Message', 'Sanctuary'],
            2 => ['Hold Person', 'Silence'],
            3 => ["Heaven's Trumpet", 'Remove Curse'],
            4 => ['Atonement', 'Sending'],
        ]);

        $feat                    = new Feat;
        $feat->name              = 'Defender of Sealtiel';
        $feat->action_type       = 'Free';
        $feat->requirement       = "Must be LG. You can't be Fatigued";
        $feat->short_description = '<p>You devout yourself to the service of Sealtiel, the celestial paragon of defenders.</p>';
        $feat->description       = '<p>You can become a stalwart bastion of defense. You can activate this ability (called a Defensive Stance) only on your turn to gain the following benefits.</p>
<ul>
    <li>+2 bonus to STR</li>
    <li>+4 bonus to CON</li>
    <li>+2 Resistance bonus to all Saves</li>
    <li>+4 Damage Reduction (stacks with Armor Damage Reduction)</li>
    <li>You cannot take Move Actions, use any Feat, Talent, Class Features, or Skill that includes a Movement</li>
    <li>You gain a +5 bonus to any roll you make to prevent you from being moved.</li>
</ul>
<p>Your Defensive Stance lasts for 1 minute. You may end your Defensive Stance voluntarily at any time as a Free Action. At the end of your Defensive Stance, you become Fatigued for 3 rounds (the number of rounds of Fatigue stacks with other abilities that causes Fatigue, such as Rage).</p>
<p>Once you have used Defensive Stance the maximum number of times, you must finish a Long Rest before you can use Defensive Stance again. When you first get this feat, you may use Defensive Stance equal to the number of Exalted feats that you have (including this feat).</p>';
        $helper->addTypesToFeat($feat, ['Archon', 'Exalted', 'Good', 'Lawful']);
        $feat->parent_feats()->save(app()->feats['Endurance']);
        $feat->parent_feats()->save(app()->feats['Servant of the Heavens']);
        $feat->talents()->save(Talent::where('name', 'Die Hard')->firstOrFail());

        $feat              = new Feat;
        $feat->name        = 'Initiate of Pistis Sophia';
        $feat->requirement = 'Must be LG';
        $feat->description = '<p>You devout yourself to the service of Pistis Sophia, the celestial paragon of Mystics and Monks.</p>
<ul>
    <li>You gain 2 Power Points</li>
    <li>You gain the Fist of the Heavens Talent.</li>
    <li>You gain the Arcane Sense Feat.</li>
    <li>You gain the Sacred Vow Feat.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Exalted', 'Good', 'Lawful']);
        $feat->parent_feats()->save(app()->feats['Improved Unarmed Strike']);
        $feat->parent_feats()->save(app()->feats['Arcane Background']);
        $feat->parent_feats()->save(app()->feats['Servant of the Heavens']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Detect Evil', 'Exorcism'],
            3 => ['Celestial Blood', "Heart's Ease"],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Improved Initiate of Pistis Sophia';
        $feat->requirement = 'Must be LG';
        $feat->description = '<p>You further devote yourself to the Archon Pistis Sophia</p>
<ul>
    <li>You gain 3 Power Points</li>
    <li>You gain a Talent</li>
    <li>You gain a Talent</li>
    <li>You gain Resistance to Electricity</li>
    <li>You gain an additional 1st level Spell Slot. This additional Spell Slot may only be used to cast Divine Smite.</li>
    <li>
        <p>You gain an Exalted Feat, which must be one from the following list.</p>
        <ul>
            <li>Vow of Abstinence</li>
            <li>Vow of Chastity</li>
            <li>Vow of Nonviolence</li>
            <li>Vow of Obedience</li>
            <li>Vow of Peace</li>
            <li>Vow of Purity</li>
        </ul>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Exalted', 'Good', 'Lawful']);
        $feat->parent_feats()->save(app()->feats['Initiate of Pistis Sophia']);
        $feat->parent_feats()->save(app()->feats['Improved Arcane Background']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Smite'],
            1 => ['Divine Smite'],
            3 => ['Emerald Burst'],
            4 => ['Condemnation'],
            5 => ['Perfection'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to the Hebdomad';
        $feat->requirement = 'You must be LG';
        $feat->description = '<p>You have made a Pact with one of the Tome Archons.</p>
<ul>
    <li>You gain 1 Spell Points</li>
    <li>Your Eldritch Blast also deals Holy damage</li>
    <li>You may now take Exalted feats as Generic feats</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Archon', 'Lawful', 'Good']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Eldritch Blast', 'Light', 'Word of Radiance'],
            1 => ['Angelic Halo', 'Divine Smite'],
            2 => ['Circle of Protection From Chaos', 'Circle of Protection From Evil'],
            3 => ['Aspect of the Deity, Lesser', 'Banishing Smite'],
            4 => ['Call Archon Servants', 'Celestial Brilliance'],
            5 => ["Heart's Ease", 'Holy Word'],
            6 => ['Crown of Brilliance'],
            7 => ['Channel Celestial'],
            8 => ['Crown of Glory'],
            9 => ['Blinding Glory'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Blessing of the Hebdomad';
        $feat->requirement = 'You must be LG';
        $feat->action_type = 'Free';
        $feat->description = "<p>You gain the following:</p>
<ul>
    <li>You gain 2 Spell Points.</li>
    <li>As an Action, you can spend 1 Spell Point to manifest angelic wings which grants Flying 60 for up to 1 hour.</li>
    <li>Your Eldritch Blast now deals Double damage vs. all Undead and Evil Outsiders.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Good', 'Pact', 'Lawful', 'Archon', 'Invocation' => 6]);
        $helper->addSpellsToFeat($feat, [
            0 => ['Divine Favor', 'Detect Evil'],
            1 => ['Exorcism', 'Ease Pain'],
            2 => ['Emerald Burst'],
            3 => ['Celestial Blood'],
            4 => ['Condemnation', 'Dispel Evil', 'Dispel Chaos'],
            5 => ['Planar Ally' => 'You may only call Archons. A servant from Call Archon Servants can serve as a Secondary Caster'],
            7 => ['Righteous Glare'],
        ]);
        $feat->parent_feats()->save(app()->feats['Pact to the Hebdomad']);

        $feat              = new Feat;
        $feat->name        = 'Chains of Heaven';
        $feat->description = '<p>You gain the ability to bind beings of the Lower Planes and the Chaotic Slaad. You cannot target the same being until after you finish a Long Rest.</p>';
        $helper->addTypesToFeat($feat, ['Pact', 'Good', 'Lawful', 'Archon', 'Invocation' => 13]);
        $helper->addSpellsToFeat($feat, [
            5 => ['Hold Person' => 'Heightened +3. Demons, Devils, Yugoloths, Slaad and related beings, such as Warlocks with Pacts to those beings'],
        ]);
        $feat->parent_feats()->save(app()->feats['Pact to the Hebdomad']);

        $feat              = new Feat;
        $feat->name        = 'Pact to Modron';
        $feat->requirement = 'You must be LN';
        $feat->description = '<p>You have made a Pact with one of the Secundi.</p>
<p>You gain the following benefits.</p>
<ul>
    <li>You gain the Modron Language</li>
    <li>You gain one of the following feats
        <ul>
            <li>Strong Defense</li>
            <li>Tough Defense</li>
            <li>Uncanny Defense</li>
            <li>Wise Defense</li>
            <li>Beautiful Defense</li>
        </ul>
    </li>
    <li>You gain the Wild Talent feat</li>
    <li>If you have the Find Familiar feat, you gain a Monodrone as your Familiar.</li>
    <li>If you have the Enhanced Familiar feat, you gain 4 Monodrones, 2 Duodrones and a Tridrone.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Modron', 'Neutral', 'Lawful']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Detect Chaos', 'Eldritch Blast', 'Light', 'Shield'],
            1 => ['Command', 'Protection From Chaos'],
            2 => ["Bear's Endurance", "Bull's Strength", "Fox's Cunning"],
            3 => ['Circle of Protection From Chaos', 'Tiny Servant'],
            4 => ['Commune', 'Dispel Chaos'],
            5 => ['Dominate'],
            6 => ['Planar Ally' => 'Modrons only. A modron familiar can count as a Secondary Caster', 'Plane Shift' => 'The city of Regulus on the plane of Mechanus only'],
            7 => ['Shield of Law'],
            8 => ['Antimagic Field'],
            9 => ['Foresight' => 'Self only'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Improved Modron Pact';
        $feat->requirement = 'You must be LN';
        $feat->description = '<p>You gain the following benefits</p>
<ul>
    <li>You gain the Astral Construct power. When you manifest Astral Construct, it is automatically Heightened by +2 without increasing the Power Point cost.</li>
    <li>While you are Psionically Focused, you gain an additional +1 to AC.</li>
    <li>If you have any of the Find Familiar feat, you gain an additional Monodrone</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Modron', 'Neutral', 'Lawful', 'Invocation' => 6]);
        $helper->addPowersToFeat($feat, [
            1 => ['Astral Construct' => 'The constructs always looks like a modron'],
        ]);
        $helper->addSpellsToFeat($feat, [
            2 => ['Mechanus Mind'],
            4 => ['Call Zelekhut'],
            5 => ['Call Modron Workers'],
        ]);
        $feat->parent_feats()->save(app()->feats['Pact to Modron']);

        $feat              = new Feat;
        $feat->name        = 'Greater Modron Pact';
        $feat->requirement = 'You must be LN';
        $feat->description = '<p>You gain the following benefits</p>
<ul>
    <li>You gain a Quadrone as a Cohort as if you had the Leadership Feat</li>
    <li>If you cast Dispel Chaos, it also kills Slaad Tadpoles and cures Chaos Phage.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Modron', 'Neutral', 'Lawful', 'Invocation' => 9]);
        $helper->addSpellsToFeat($feat, [
            0 => ['True Strike'],
            6 => ['Call Kolyarut', 'Wall of Gears'],
            7 => ['Dictum', 'Word of Balance', 'Word of Law'],
            9 => ['Call Marut'],
        ]);
        $feat->parent_feats()->save(app()->feats['Improved Modron Pact']);
    }
}
