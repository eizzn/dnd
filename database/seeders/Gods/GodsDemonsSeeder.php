<?php

namespace Database\Seeders\Gods;

use App\Enums\GodPantheonLevel;
use App\Enums\Pantheon;
use App\Models\Feat;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GodsDemonsSeeder extends Seeder
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

        $god        = new God;
        $god->name  = 'Demogorgon';
        $god->level = GodPantheonLevel::DemonPrince->toString();
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Prince of Demons, The Deep Father, The Sibilant Beast, Master of the Spiraling Depths, Lord of All that Swims in Darkness',
            'aliases'     => 'Ahmon-Ibor, Siosivash, Leemooggoogoon, The Imprisoned One',
            'level'       => GodPantheonLevel::DemonPrince->toString(),
            'alignment'   => 'CE',
            'symbol'      => 'Forked tail',
            'description' => "<p>Demogorgon towers a full 18 feet in height, his body at once sinuous like that of a snake and powerful like that of a great ape. Two baleful baboon heads, with blue and red faces similar to those of mandrills, leer from atop his lumbering shoulders, from which two long tentacles writhe. His lower torso is saurian, like some great reptile with blue-green, scaly skin. He has an immense forked tail.</p>
<p>Each of Demogorgon's heads has its own name and personality, a duality that creates an enduring internal conflict of his personality, while shaping all his actions and even his realm. His left head is named Aameul while the right is named Hethradiah (sometimes referred to as Hathradiah). The two heads war with each other, constantly seeking to obtain the upper hand on each other. Aameul, the more charismatic and calculating, relishes deception and wishes to break free from his other half. The more impulsive and feral Hethradiah relishes destruction and does not wish to be separated.</p>
<p>Perhaps the only thing preventing Demogorgon from taking over the rest of the Abyss is his own dual nature.</p>
<p>Demogorgon's cult is relatively small compared to \"true\" deities, but much larger than those of most fiends. He is worshiped by the intelligent manta ray race known as ixitxachitls, who draw power from the Abyss itself in order to become more powerful spellcasters. In turn, vital energy drained by vampiric ixitxachitls is transferred directly to Demogorgon via an unknown Abyssal mechanism.</p>
<p>Demogorgon's other worshipers include troglodytes, kuo-toa, and other humanoids, particularly evil humans. His cult prospers in times of chaos and cause great destruction wherever it is found. Temples to Demogorgon are split in half, with one side representing Aameul and the other representing Hethradiah.</p>
<p>the hatred between Orcus and Demogorgon is legendary. He is also a dedicated foe of Graz'zt and has unsuccessfully attempted to conquer Fraz-Urb'luu's realm. He hates Sekolah and encourages his followers to kill sahuagin.</p>
<p>Demogorgon is allied with the obyrith lord Dagon, who often advises the heads of Aameul and Hethradiah separately. Dagon provides intellect, while Demogorgon provides brute strength. He is also frequently visited by Zuggtmoy,who exchanges fungi at Gaping Maw and engages with Demogorgon in several discussions. he is also allied with Ilsidahur, Lord of Bar-Iguras.</p>
<p>Demogorgon's romantic interests include the succubus Shami-Amourae and the Succubus Queen Malcanthet, both of whom has manipulated him for the own benefits. Shami-Amourae, however, is imprisoned in the Wells of Darkness for her manipulations.</p>
<p>The balor Belaphoss considers himself to be the most powerful of Demogorgon's servants.</p>",
        ]);
        $god->pantheons()->save(app()->pantheons[Pantheon::Asathalfinare->value], [
            'name'      => 'Ilxendren',
            'title'     => 'The Great Ray, The Demon Ray',
            'level'     => GodPantheonLevel::Demi->value,
            'alignment' => 'CE',
            'symbol'    => 'Blue, barbed manta tail on a black manta shape with two glowing red almond-shaped eyes on its wings',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Thrall to Demogorgon';
        $feat->requirement = 'You must be Evil';
        $feat->description = '<p>You have given yourself to the demon price Demogorgon. You gain the following abilities.</p>
<dl>
    <dt>Scaly Flesh</dt> <dd>You skin becomes dark and scaly, granting you a +1 natural Damage Reduction for each Vile feat you have (including this one), to a maximum of +5. This bonus does not stack with any Damage Reduction from armor worn.</dd>
    <dt>Hypnosis</dt> <dd>As an Action, you gain a gaze attack that acts like the Hypnotic Pattern spell. You may use this ability once per Long Rest.</dd>
    <dt>Reaching Touch</dt> <dd>You gain the ability to stretch your arms unnaturally like tentacles, providing you an extra 5 feet of reach for 1 round. You may use this ability 3 times per Long Rest.</dd>
</dl>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Demon', 'Chaotic']);
        $feat->parent_feats()->save(app()->feats['Thrall to Demon']);
        $feat->parent_feats()->save(app()->feats['Willing Deformity']);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 2]);
        $feat->skills()->save(app()->skills['Religion'], ['dc' => 2]);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        $feat              = new Feat;
        $feat->name        = 'Greater Thrall to Demogorgon';
        $feat->requirement = 'You must be Evil';
        $feat->action_type = 'Triple Action';
        $feat->description = '<p>You may summon a Demon from the following list as if you cast a Summon Demon spell. You may use this ability once per Long Rest.</p>
<ul>
    <li>1 Barlgura</li>
    <li>2 Quasit</li>
    <li>4 Dretch</li>
</ul>
<p>You may take the Sacrificial Mastery Feat.</p>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Demon', 'Chaotic']);
        $feat->parent_feats()->save(app()->feats['Thrall to Demogorgon']);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        $feat              = new Feat;
        $feat->name        = 'Master Thrall to Demogorgon';
        $feat->requirement = 'You must be Evil';
        $feat->description = '<p>You may add the following demons to your list of creatures you can summon with your Greater Thrall to Demogorgon feat.</p>
<ul>
    <li>4 Chasme</li>
    <li>1 Glabrezu (once per month)</li>
    <li>1 Hezrou (once per month)</li>
    <li>2 Vrocks (once per month)</li>
</ul>
<p>You gain a touch attack that you may use as an Action once per Long Rest. You may choose from the following list.</p>
<dl>
    <dt>Touch of Fear</dt> <dd>As the Fear spell, but with a range of Touch and as an Action.</dd>
    <dt>Death Touch</dt> <dd>As the Slay Living spell but as an Action.</dd>
</dl>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Demon', 'Chaotic']);
        $feat->parent_feats()->save(app()->feats['Greater Thrall to Demogorgon']);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        $feat              = new Feat;
        $feat->name        = 'Pact to Demogorgon';
        $feat->description = '<p>You have made a Pact to Demogorgon</p>
<ul>
    <li>If you Fail a WIS Save, you may immediately make another WiS Save.</li>
    <li>You become partially scaly, granting Damage Reduction of 1. The scales are not noticeable on the face and lower arms.</li>
    <li>You may take the Find Familiar feat. At 5th level and beyond, you may take a Quasit as your Familiar.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Evil', 'Vile', 'Chaotic']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Acid Splash', 'Daze', 'Eldritch Blast', 'Poison Spray'],
            1 => ['Charm', 'Fear', 'Water Breathing' => 'Self only'],
            2 => ['Crown of Madness', 'Feet to Fins' => 'Self only', 'Fearsome Grapple'],
            3 => ['Summon Demon, Lesser' => 'Casting this again dispels any previous casting', 'Vampiric Touch'],
            4 => ['Blight', 'Summon Demon' => 'Casting this again dispels any previous casting'],
            5 => ['Black Tentacles', 'Malevolent Tentacles'],
            6 => ['Demon Form', 'Slay Living'],
            7 => ['Wall of Tentacles'],
            8 => ['Horrid Wilting'],
            9 => ['Abyssal Army'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Orcus';
        $god->level = GodPantheonLevel::DemonPrince->toString();
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'      => $god->name,
            'title'     => 'Lord of the Undead, Price of the Undead, Price of Undeath, Blood Lord',
            'level'     => GodPantheonLevel::DemonPrince->toString(),
            'aliases'   => 'Tenebrous',
            'portfolio' => 'Mindless Undead',
            'alignment' => 'CE',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Orcus';
        $feat->description = '<p>You have made a Pact to Orcus</p>
<ul>
    <li>You may maintain control of a number of undead from the Animate Undead spell equal to your Warlock level</li>
    <li>You may maintain control of a number of undead from your Create Undead equal to 1/4 your Warlock level rounded down (minimum 1)</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Evil', 'Vile', 'Undead', 'Chaotic']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Detect Ghost', 'Detect Undead', 'Disrupt Ectoplasm', 'Disrupt Undead', 'Necrotic Touch', 'Touch of Death',
                'Undead Servant' => 'Max of 4 at any time', ],
            1 => ['Deathwatch', 'Negative Energy Ray', 'Ray of Enfeeblement'],
            2 => ['Command Undead', 'Speak with Dead', 'Vertigo'],
            3 => ['Animate Dead' => 'Cannot be used to maintain control of undead', 'Ghoul Touch', 'Hold Undead'],
            4 => ['Calling' => 'Demons only. Not obligated to obey', 'Drain Life', 'Exhaustion'],
            5 => ['Aura of Undeath', 'Create Undead'],
            6 => ['Vile Undead'],
            7 => ['Finger of Death'],
            8 => ['Slay Living'],
            9 => ['Plague of Undead'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        $feat              = new Feat;
        $feat->name        = 'Skull of Orcus';
        $feat->requirement = 'You must be Evil';
        $feat->description = '<p>You have given yourself to the demon lord Orcus. You gain the following abilities.</p>
<ul>
    <li>You gain the Gaunt Vile Feat. If you already have the Gaunt Feat, you may gain the Lich Loved Vile Feat.</li>
    <li>You gain a +2 bonus on all Saves vs Negative energy effects from Undead.</li>
    <li>You gain the ability to Rebuke Undead 1/day, as if you had the Channel Divinity Class Feature (Negative, Undead)</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Demon', 'Chaotic']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Resist Negative Energy', 'Resist Positive Energy'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        $feat              = new Feat;
        $feat->name        = 'Skull Lord of Orcus';
        $feat->requirement = 'You must be Evil';
        $feat->description = '<p>You gain the ability to command a small group of undead skeletons.</p>
<ul>
    <li>You gain the ability to cast the spell Animate Dead as a 1st level spell 1/day. Casting this spell creates a single undead (skeleton or zombie).</li>
    <li>You can maintain control of up to 4 skeletons or zombies that you have created using this ability. If there are already 4 undead creatures in existence using this ability, and you create another, one of your already existing undead crumbles to dust (your choice).</li>
    <li>If you can cast spells, you may not heighten this spell or modify it with any Feats.</li>
    <li>You may take the Sacrificial Mastery Feat.</li>
    <li>You gain another use of Rebuke Undead per day</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Demon', 'Chaotic']);
        $feat->parent_feats()->save(app()->feats['Skull of Orcus']);
        $helper->addSpellsToFeat($feat, [
            3 => ['Clutch of Orcus', 'Glyph of Warding'],
            4 => ['Daywalker'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        $feat              = new Feat;
        $feat->name        = 'Skull King of Orcus';
        $feat->requirement = 'You must be Evil';
        $feat->description = '<p>You are able to control more skeletons and zombies.</p>
<ul>
    <li>You gain a Vile Feat of your choice</li>
    <li>You gain a Talent of your choice</li>
    <li>When you cast the spell Animate Dead or sacrifice a spell slot to maintain control over your created skeletons and or zombies, you maintain control of an additional skeleton or zombie. If you have the Pact to Orcus feat, you can now control Skeletons and Zombies from Animate Dead equal to 1 1/2 times your Warlock level instead.</li>
    <li>You gain another use of Rebuke Undead per day</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Demon', 'Chaotic']);
        $feat->parent_feats()->save(app()->feats['Skull Lord of Orcus']);
        $helper->addSpellsToFeat($feat, [
            5   => ['Dust to Dust', 'Ghoul Gauntlet'],
            7   => ['General of the Undead'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        /**********************************************************************/

        $god        = new God;
        $god->name  = "Graz'zt";
        $god->level = GodPantheonLevel::DemonPrince->value;
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'      => $god->name,
            'title'     => 'The Dark Prince',
            'level'     => GodPantheonLevel::DemonPrince->value,
            'alignment' => 'CE',
        ]);

        $feat              = new Feat;
        $feat->name        = "Thrall to Graz'zt";
        $feat->requirement = 'You must be Evil';
        $feat->description = "<p>You have given yourself to the demon price Graz'zt. You gain the following abilities.</p>
<dl>
    <dt>Demonic Beauty</dt> <dd>Increase your CHA by +1 to a maximum of 20</dd>
    <dt>Charm</dt> <dd>As an Action, you gain a gaze attack (as an Action) that acts like the Charm spell cast by an arcane spell caster of your level. You may use this ability twice per Long Rest.</dd>
    <dt>Beautiful Defense</dt> <dd>You may take the Beautiful Defense feat as a Generic feat.</dd>
    <dt>Beguiler</dt> <dd>You gain a +5 bonus to Deception skills.</dd>
</dl>";
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Demon', 'Chaotic']);
        $feat->parent_feats()->save(app()->feats['Thrall to Demon']);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 5]);
        $feat->skills()->save(app()->skills['Deception'], ['dc' => 4]);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        $feat              = new Feat;
        $feat->name        = "Improved Thrall to Graz'zt";
        $feat->requirement = 'You must be Evil';
        $feat->action_type = 'Triple Action';
        $feat->description = '<p>You may summon a Demon from the following list as if you cast a Summon Demon spell. You may use this ability once per Long Rest.</p>
<ul>
    <li>1 Lamia</li>
    <li>1 Succubus (Incubus)</li>
</ul>
<p>You may take the Sacrificial Mastery Feat.</p>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Demon', 'Chaotic']);
        $feat->parent_feats()->save(app()->feats["Thrall to Graz'zt"]);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        $feat              = new Feat;
        $feat->name        = "Greater Thrall to Graz'zt";
        $feat->requirement = 'You must be Evil';
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>You gain a Succubus (Incubus) as a Cohort, as if you had the Leadership feat.</li>
    <li>You may now use your Charm Gaze ability at will.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Vile', 'Evil', 'Demon', 'Chaotic']);
        $feat->parent_feats()->save(app()->feats["Improved Thrall to Graz'zt"]);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Baphomet';
        $god->level = GodPantheonLevel::DemonPrince->value;
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'           => $god->name,
            'title'          => 'Price of Beasts, Demon Lord of Minotaurs, Horned King',
            'level'          => GodPantheonLevel::DemonPrince->value,
            'alignment'      => 'CE',
            'portfolio'      => 'Vengeance, Minotaurs',
            'symbol'         => 'Twisted circular maze awash in blood',
            'favored_weapon' => 'Club',
        ]);
        $god->pantheons()->save(app()->pantheons[Pantheon::AlQadim->value], [
            'name'      => 'The Faceless God',
            'title'     => 'The Forgotten God, The God Without a Face',
            'level'     => 'Demi',
            'portfolio' => 'Yak-men',
            'alignment' => 'NE',
        ]);

        /**********************************************************************/

        $god = God::where('name', 'Malar')->firstOrFail();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'           => 'Yeenoghu',
            'title'          => 'Prince of Gnolls, Lord of Savagery, Beast of Butchery',
            'level'          => GodPantheonLevel::DemonPrince->value,
            'alignment'      => 'CE',
            'portfolio'      => 'Gnolls',
            'symbol'         => 'A triple-headed flail',
            'favored_weapon' => 'The Butcher (Triple-headed Flail)',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Doresain';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'           => $god->name,
            'title'          => 'The King of Ghouls, The Ghoul King, The Hunger, Father of Ghouls, the Pale King, Right Hand of Orcus',
            'level'          => 'Demon Lord',
            'alignment'      => 'CE',
            'portfolio'      => 'Ghouls, Cannibalism',
            'symbol'         => 'A one eyed Ghoul skull with a sickle in the background',
            'favored_weapon' => 'Talon of Doresain (Large Sickle +3 Icy Burst, Speed, Unholy)',
            'master_id'      => God::where('name', 'Orcus')->first()->id,
            'description'    => "<p>Doresain is the demon lord of Ghouls and cannibalism. He appears as a 8 ft tall emaciated humanoid with pointed ears, skin as pale and hard as marble, and yellow eyes that burn with a never ending hunger. His skin is completely hairless and would be flawless if not for the fact that his bones are clearly visible beneath it. He has huge hands that end in midnight black talons that match his huge teeth. Doresain's Mantle is a patchwork robe that is open in the front, made of different kinds of humanoid skin, and he wears a black metal crown with finger bones that stick straight up and have giant ruby rings on them. The hem of his robe is lined with jewel encrusted humanoid skulls. Inside the gems on the skulls are the souls of countless dead heroes. He carries an ancient black sickle sheathed on a rotting belt at his waist, it can easily part flesh from bone and imparts the hunger of the Ghoul on whomever it touches.</p>
<p>Doresain's domain is Volenroft, the White Kingdom on the 112th layer of the abyss. The entire layer is a massive necropolis and hunting ground for him and his ghoul servants. There are many gates to the negative energy plane and the Orcus' domain hidden throughout the layer. His Citadel, the Tower of Teeth, is a great charnel house filled with screams and the sounds of chewing and breaking bones. Other places of interest are the Alter of Flesh, where even less savory acts than cannibalism occur, and Black Pool, a great lake of unholy water that is the main portal to the realm of Doresain's former master. The Black Pool is guarded by a unique Ghoul-like Charnel Colossus named Coraxival. There is also rumor of an ancient Qlippoth Lord that Doresain feasts on to increase his strength.</p>
<p>Doresain's primary worshippers are Ghouls and creatures that have turned to cannibalism for pleasure, though many necromancers and evil warlords worship him as well. He prefers undead to demons, though his servants have a great deal of demonic power, and similarly can impart Ghoul-like powers on his demonic servants. His favorite heralds are his concubines, a female 18th level Ghast Barbarian named, Korvaka, and a unique ghoulish Succubus, Nimevere. He also keeps an aerie full of demonic dire bats that act as his eyes and ears throughout his domain and across the planes. His cult teaches that the weak are meant to feed the strong and his rites involve sacrificing sentient creatures to ghouls. He rewards his worshippers with access to divine magic and Ghoulish might. Simply eating sentient creatures is not enough to feed his church, they must first suffer to sweeten the meat.</p>
<p>Doresain was once a mortal elf and a worshiper of Orcus. To honor his deity, he feasted on the flesh of his fellow elves. Impressed by the raw and savage act, Orcus turned Doresain into the very first ghoul.</p>
<p>Doresain became a servitor to Orcus in the Abyss. There he was imbued with a shard Orcus' of divinity and became known as the Ghoul King. Here, he would create ghouls from the servants of Orcus. The King of Ghouls took command of a layer of the Abyss, the White Kingdom.</p>
<p>Despite his devotion, Doresain would not stay subservient to Orcus, though not by choice. Yeenoghu, the Gnoll Lord, would stage an invasion of Doresain's layer (421st layer of the Abyss), which was right next to Yeenoghu's own layer (422nd layer of the Abyss). Orcus did not intervene. Given no choice, Doresain became a vassal of Yeenoghu. Instead of willingly serving Yeenoghu, who had usurped his layer, Doresain instead turned to the Seldarine. They took pity on the demigod, who escaped the tyranny of Yeenoghu. In return, Doresain granted elves immunity to the paralytic touch of his minions. Later, Yeenoghu fully lost the ability to control Doresain.</p>
<p>As of the 15th century DR, Doresain retained the shard of divinity originally given to him by Orcus. He once again returned to Orcus' side, this time as his exarch, as well as his servitor. No longer holding his original layer, the White Kingdom, Doresain settled into the layer owned by Orcus, Thanatos, the 113th layer of the Abyss. Here, Doresain began to rule over part of Thanatos known as White Kingdom, which had the same name as his former home.</p>",
        ]);
        $god->classes()->save(Klass::where('name', 'Wizard')->first(), [
            'level'       => 20,
            'pantheon_id' => app()->pantheons[Pantheon::Demonic->value]->id,
            'meta'        => 'Necromancy',
        ]);

        /**********************************************************************/

        $god             = new God;
        $god->name       = 'Gorellik';
        $god->level      = 'Dead';
        $god->deleted_at = Carbon::now()->timestamp;
        $god->save();
        $god->pantheons()->save(app()->pantheons['Monstrous'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Dead',
            'alignment' => 'CE',
            'portfolio' => 'Hunting, Hyenas, Hyaenodons',
            'symbol'    => "White, mottled hyaenodon's head",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Juiblex';
        $god->level = GodPantheonLevel::DemonPrince->value;
        $god->save();
        $god->pantheons()->save(app()->pantheons['Dark Seldarine'], [
            'name'           => 'Ghaunadaur',
            'title'          => 'That Which Lurks, The Elder Eye, THe Lord of Slime, The Ancient One',
            'level'          => 'Lesser',
            'portfolio'      => 'Oozes, slimes, ropers, outcasts, rebels',
            'alignment'      => 'CE',
            'symbol'         => 'Purple circle, with an eye in the center',
            'favored_weapon' => 'An amorphous tentacle (warhammer)',
        ]);
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'      => $god->name,
            'title'     => 'Faceless Lord, Lord of Slime, Lord of Oozes and Shapeless Things, Lord of Nothing',
            'level'     => GodPantheonLevel::DemonPrince->value,
            'alignment' => 'CE',
        ]);

        $class                = new Klass;
        $class->name          = 'Amorphite';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light, Medium, Light Shields';
        $class->has_spells    = 1;
        $class->description   = '<p>Priest of Ghaunadaur.</p>';
        $helper->saveClass($class, [
            'hit_dice'       => 10,
            'skill_points'   => 4,
            'skill_progress' => 2,
        ], ['WIS', 'CON']);

        // Skills
        $helper->addSkillsToClass($class, ['Concentration', 'Diplomacy', 'Intimidation', 'Medicine', 'Religion']);

        $helper->addFeaturesToClass($class, [
            'acid_resistance'  => [6],
            'acid_immunity'    => [12],
        ]);

        $helper->addChannelDivinityToClass($class, 'negative', 'Slimes, Molds, Fungus');
        $helper->addDomainToClass($class, ['Power', 'Caverns', 'Evil']);
        $helper->addSpellSlotsToClass($class);

        $helper->addSpellsToClass($class, [
            0 => ['Acid Splash', 'Detect Magic', 'Light', 'Mold Earth', 'Stabilize'],
            1 => ['Acid Stream', 'Bless', 'Cause Wounds', 'Cure Wounds', 'Curse', 'Fear', 'Immunity to Adhesive', 'Locate Water',
                'Protection From Law', 'Remove Disease', ],
            2 => ['Aquavision', 'Augury', "Bear's Endurance", 'Bestow Curse', "Bull's Strength", 'Comprehend Language',
                'Darkness', 'Darkvision', 'Fearsome Grapple', 'Humanoid Form', 'Toothed Tentacle', 'Touch of Madness', ],
            3 => ['Air Breathing', 'Amorphous Form', 'Call Gelatinous Cube', 'Meld into Stone', 'Mold Touch', 'Poison',
                'Ray of Exhaustion', 'Spore Cloak', 'Touch of Juiblex', 'Toxin Immunity', ],
            4 => ['Aura of Confusion', 'Blight', 'Shape Stone', 'Slime'],
            5 => ['Atonement', 'Black Tentacle', 'Dispel Law', 'Drain Life', 'Ooze Form', 'Viscus Glob'],
            6 => ['Drain Constitution', 'Malevolent Tentacles'],
            7 => ['Wall of Tentacles'],
            8 => ['Feeblemind', 'Horrid Wilting'],
            9 => ['Mass Polymorph', 'True Polymorph'],
        ]);
        $helper->addWorshipClassesToGod($god, 'Dark Seldarine', [
            $class->name => ['is_clergy' => true],
        ]);
        $helper->addWorshipClassesToGod($god, Pantheon::Demonic->value, [
            $class->name => ['is_clergy' => true],
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = "Fraz-Urb'luu";
        $god->level = GodPantheonLevel::DemonPrince->value;
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'      => $god->name,
            'title'     => 'Prince of Deception',
            'level'     => GodPantheonLevel::DemonPrince->value,
            'alignment' => 'CE',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to the Deceiver';
        $feat->requirement = 'You must be CE';
        $feat->description = "<p>You have made a Pact with the Demon lord Fraz-Urb'luu.</p>
<ul>
    <li>You gain the Sneak Attack class feature.</li>
    <li>You gain the Illusionist Wizard School feat.</li>
    <li>You may take the Find Familiar feat. At 5th level and beyond, you may take a Quasit as your Familiar.</li>
    <li>You may take the Expert Illusionist feat at 6th level unless you have already taken the maximum number of Wizard School feats already.</li>
    <li>You may take the Master Illusionist feat at 10th level unless you have already taken the maximum number of Wizard School feats already.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Pact', 'Demon', 'Evil', 'Chaotic']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Eldritch Blast', 'Daze', 'Ghost Sound', 'Hex', 'Minor Illusion'],
            1 => ['Demonflesh', 'Disguise Self', 'Silent Image'],
            2 => ['Darkness', 'Invisibility', 'Mirror Image'],
            3 => ['Major Image'],
            4 => ['Polymorph Self'],
            5 => ['Programmed Image'],
            6 => ['Mind Prison'],
            7 => ['Plane Shift'],
            8 => ['Glibness'],
            9 => ['Dweomerdoom'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Eltab';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Lord of the Hidden Layer',
            'level'       => 'Demon Lord',
            'regions'     => 'Thay, Narfell, Rashemen',
            'alignment'   => 'CE',
            'description' => "<p>Eltab appears as a fifteen-foot-tall humanoid with the head of a canine-like creature. His head sported numerous antlers and horns and his body is covered with bony dark red plates. he has slitted yellow glowing eyes.</p>
<p>Eltab ruled the 248th layer of the Abyss known as the Hidden Layer. It was a vast wasteland of boulders and fissures constantly beset with intense electrical storms, making it inimical to most life except for demons and deadly plant life such as viper trees, ironmaws and bloodthrons. In the fifteen centuries or so of Eltab's absence, the Hidden Layer has fragmented into ever-changing fiefdoms as Eltab's former lieutenants including the balor Ndulu, fights over the vacated realm.</p>
<p>Thanks to the bindings cast by the Narfelli demon-binders on Eltab when they summoned him, they also somehow linked fragments of the Hidden Layer to Faerun as well. Pieces of the layer, known as a demoncysts, can be found scattered beneath the ground all over northeast Faerun. The larges cyst, known as the Hall of the Hidden Throne, lays in the Citadel of Conjurers (also known as Dun-Orthass), a dark tower located within the foothills of the Earthspur Mountains at the mouth of the Moaning Gorge in Impiltur. This cyst contains Eltab's palace and the calling circle that ties Eltab to the Realms. In fact, until this circle is destroyed, Eltab can not leave Faerun or return to the Abyss.</p>
<p>In the Citadel of Conjurers, the Adamantine Seal exists. It is this seal that binds Eltab to the Prime Plane. Only the legendary blade Hadryllis is said to be able to destroy the Adamantine Seal.</p>",
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Eltab';
        $feat->requirement = 'You must be CE';
        $feat->description = '<p>You have made a Pact with the Demon lord Eltab. Eltab is interested in taking his revenge against the Red Wizards of Thay (Szass Tam in particular) and the Witches of Rashemen as well as the Fey servants of Absalom.</p>
<ul>
    <li>You do not need to devout yourself to a deity to take the Paladin class. Eltab provides your spells and abilities for your Paladin class.</li>
    <li>You may use Warlock Spell Slots to cast Smite Spells from the Paladin class.</li>
    <li>You gain the true name of one of the Demon servants of Eltab</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Demon', 'Evil', 'Chaotic']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Booming Blade', 'Detect Demon', 'Green-Flame Blade', 'Necrotic Touch'],
            1 => ['Demonflesh', 'Fear', 'Fey Hunter'],
            2 => ['Invisibility', 'Silence'],
            3 => ['Dispel Magic', 'Dread Word', 'Summon Demon, Lesser' => 'Casting this again dispels any previous casting'],
            4 => ['Blight'],
            5 => ['Calling'      => 'Servant of Eltab only and only those that are already on the Prime Material',
                'Word of Recall' => 'Only back to the Demoncyst where Eltab is trapped in the Citadel of Conjurers'],
            6 => ['Arcane Gate', 'Spirit Blast'],
            7 => ['Nar Fiendbond'],
            8 => ['Antimagic Field'],
            9 => ['Massacre'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        $feat              = new Feat;
        $feat->name        = 'Unending Pact to Eltab';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>
        <p>You undergo a Ritual and receive the effects of the Death Pact Spell. The destination is always the Hall of the Hidden Throne in the Citadel of Conjurers.</p>
        <p>Double the cost of the Material Components must be paid to Eltab at the time this Feat is taken and after each death. If the cost cannot be paid, then this Feat has no effect. Once the Material Components are paid, you must return to the Hall of the Hidden Throne and receive the ritual again to benefit from the Death Pact spell.</p>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Demon', 'Evil', 'Chaotic', 'Invocation' => 15]);
        $feat->parent_feats()->save(app()->feats['Pact to Eltab']);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        $feat              = new Feat;
        $feat->name        = 'Death Knight of Eltab';
        $feat->requirement = 'You must be CE';
        $feat->description = '<p>You are a Paladin of the demon prince, Eltab.</p>
<ul>
    <li>You may cast Paladin spells as if they were Warlock Spells.</li>
    <li>You may sacrifice a Paladin Spell Slot of 2nd level or a Warlock Spell Slot to summon a Nightmare as your mount when you summon your Divine Mount.</li>
</ul>
<dl>
    <dt>Based</dt> <dd>Citadel of Conjurers in the nation of Impiltur</dd>
</dl>';
        $helper->addTypesToFeat($feat, ['Divine Warrior', 'Demon', 'Evil', 'Chaotic']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Detect Magic', 'Hex', 'Infestation'],
            1 => ['Bane', 'Darkvision', 'Demonflesh', 'Fear', 'Wrathful Smite'],
            2 => ['Darkness', 'Undetectable Alignment'],
            3 => ['Aura of Silence', 'Aura of Pain', 'Call Dretch Horde', 'Circle of Protection From Good'],
            4 => ['Aura of Confusion', 'Aura of Death', 'Call Nightmare'],
        ]);
        $feat->parent_feats()->save(app()->feats['Pact to Eltab']);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Abraxas';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'      => $god->name,
            'title'     => 'The Unfathomable',
            'level'     => 'Demon Lord',
            'alignment' => 'CE',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Aldinach';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Demon Lord',
            'alignment' => 'CE',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Alvarez';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'      => $god->name,
            'title'     => "The Purging Duke, Inquisitor of the Tanar'ri",
            'level'     => 'Demon Lord',
            'alignment' => 'CE',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Cormanda';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Demon Lord',
            'alignment' => 'CE',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Dwiergus';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => '',
            'level'       => 'Demon Lord',
            'alignment'   => 'CE',
            'description' => 'Obyrith',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Lupercio';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'      => $god->name,
            'title'     => 'Baron of Sloth',
            'portfolio' => 'Sloth, Darkness',
            'level'     => 'Demon Lord',
            'alignment' => 'CE',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Malcanthet';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Queen of the Succubi',
            'level'       => 'Demon Lord',
            'description' => '<p>Ruler of the 570th layer of the Abyss, Shendilavri.</p>',
            'alignment'   => 'CE',
        ]);

        /**********************************************************************/

        $god              = new God;
        $god->name        = 'Lady Lynkhab';
        $god->level       = 'Demon Lord';
        $god->description = "Contender of the title 'Queen of the Succubi'";
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'The Lady of Regret',
            'portfolio'   => 'Depression, Desire',
            'level'       => 'Archdemon',
            'alignment'   => 'CE',
            'description' => "<p>Contender of the title 'Queen of the Succubi'</p>",
        ]);

        /**********************************************************************/

        $god              = new God;
        $god->name        = 'Shami-Amourae';
        $god->level       = 'Demon Lord';
        $god->description = "Imprisoned contender of the title 'Queen of the Succubi'";
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Demigoddess of Debased Eros, The Lady of Delight',
            'level'       => 'Archdemon',
            'alignment'   => 'CE',
            'description' => "<p>As one of the first of the succubi birthed from the raw matter of the Abyss, Shami-Amourae's existence predates most mortal races, including humans. Her skill at her 'craft' so impressed the Prince of Demons Demogorgon that he took her as his consort, thus greatly increasing her personal power and influence. At the same time, she declared herself the Queen of Succubi and her cult flourished on the Prime Plane. However, other ambitious succubi also claimed the title and this struggle, known as the War of Ripe Flesh, became a long-drawn-out battle in which only one would survive to claim the title of Queen of Succubi.</p>
<p>Shami-Amourae discovered that Demogorgon's twin heads had individual personas, and she began to manipulate him by literally playing off one head against the other, hoping to goad him into attacking the realm of Malcanthet, her greatest rival for Queen of Succubi. Her scheme failed when Malcanthet revealed to the Prince of Demons his consort's true motives. Enraged by Shami-Amourae's manipulations, he had Shami-Amourae imprisoned in the Wells of Darkness, where she has been trapped ever since.</p>",
        ]);

        /**********************************************************************/

        $god              = new God;
        $god->name        = 'Tharzax';
        $god->level       = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'The Chattering Prince',
            'level'       => 'Archdemon',
            'portfolio'   => 'Poisonous Vermin',
            'alignment'   => 'CE',
            'description' => '<p>Tharzax is the demon lord of poisonous vermin and ruler of the 2nd layer of the Abyss.</p>',
        ]);

        /**********************************************************************/

        $god              = new God;
        $god->name        = 'Xinivrae';
        $god->level       = 'Demon Lord';
        $god->description = "Exiled contender of the title 'Queen of the Succubi'";
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => '',
            'level'       => 'Archdemon',
            'alignment'   => 'CE',
            'description' => "<p>Exiled contender of the title 'Queen of the Succubi'</p>",
        ]);

        /**********************************************************************/

        $god              = new God;
        $god->name        = 'Oublivae';
        $god->level       = 'Demon Lord';
        $god->description = 'Ruler of the 100th layer of the Abyss, The Barrens';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Angel of the Everlasting Void, Demon Monarch of the Barrens, Queen of Desolation',
            'level'       => 'Demon Lord',
            'alignment'   => 'CE',
            'description' => '<p>Ruler of the 100th layer of the Abyss, The Barrens</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Rhyxali';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Queen of Shadows',
            'level'       => 'Demon Lord',
            'alignment'   => 'CE',
            'description' => '<p>Ruler of the 48th layer of the Abyss, Nerebdian Vast</p>',
        ]);

        /**********************************************************************/

        God::where('name', 'Set')->first()->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => "Sess'innek",
            'title'       => 'The Lizard King',
            'level'       => 'Demon Lord',
            'alignment'   => 'CE',
            'portfolio'   => 'Civilization, dominion',
            'symbol'      => 'Green clawed reptilian hand',
            'description' => '<p>Ruler of the 7th layer of the Abyss, Kearackinin (Phantom Plane)</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Zuggtmoy';
        $god->level = GodPantheonLevel::DemonPrince->value;
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'      => $god->name,
            'title'     => 'Lady of Fungi, Demon Queen of Fungi, Lady of Rot and Decay',
            'level'     => GodPantheonLevel::DemonPrince->value,
            'alignment' => 'CE',
            'portfolio' => 'Fungi',
            'symbol'    => 'Green clawed reptilian hand',
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Moander',
            'title'          => 'The Darkbringer, The Jawed God, The Rotting God, The Great Dread God',
            'level'          => 'Demi',
            'alignment'      => 'CE',
            'portfolio'      => 'Decay, corruption, rot',
            'symbol'         => 'A human right hand with palm open and fingers out-stretched, a fanged human mouth in its center with lips parted as if speaking',
            'favored_weapon' => 'Heavy mace',
            'master_id'      => God::where('name', 'Talos')->first()->id,
            'description'    => '<p>Moander is the only god that allows Druid Liches</p>',
        ]);
        $helper->addClassesToGod($god, 'Faeruneon', [
            'Druid'  => 20,
            'Wizard' => ['level' => 15, 'meta' => 'Necromancy'],
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Druid'  => ['is_clergy' => true],
            'Wizard' => ['meta' => 'Necromancy'],
        ]);
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Moander's Mold")->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Moander's Rot")->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Moander's Decay")->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Moander's Corruption")->first());

        /**********************************************************************/

        $god             = new God;
        $god->name       = 'Arlgolcheir';
        $god->level      = 'Demon Lord';
        $god->deleted_at = Carbon::now()->timestamp;
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => '',
            'level'       => 'Demon Lord',
            'alignment'   => 'CE',
            'description' => '<p>Destroyed by Laeral Silverhad (the Symbol) with the aid of Khelben and the mage Alduth of Neverwinter</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Obox-ob';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => '',
            'level'       => 'Demon Lord',
            'alignment'   => 'CE',
            'description' => '<p>Ruler of the 663rd layer of the Abyss, Zionyn. Obyrith</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Dagon';
        $god->level = GodPantheonLevel::DemonPrince->value;
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Price of the Depths',
            'level'       => GodPantheonLevel::DemonPrince->value,
            'alignment'   => 'CE',
            'description' => '<p>Ruler of the 89th layer of the Abyss, Shadowsea. One of the High Old Ones. Obyrith</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Pazuzu';
        $god->level = GodPantheonLevel::DemonPrince->value;
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Prince of the Lower Aerial Kingdoms, The Dark Angel of the Four Winds',
            'level'       => GodPantheonLevel::DemonPrince->value,
            'aliases'     => 'Pazrael',
            'alignment'   => 'CE',
            'description' => '<p>Ruler of the 1st layer of the Abyss, Pazunia and the 503rd layer, Toramor. One of the High Old Ones. Obyrith</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Adimarchus';
        $god->level = GodPantheonLevel::DemonPrince->value;
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Demon Prince of Madness',
            'level'       => GodPantheonLevel::DemonPrince->value,
            'alignment'   => 'CE',
            'description' => "<p>Adimarchus has two forms and can shift between them at will. The first one is reminiscent of his past self as a planetar: a beautiful androgynous angel with pale purple skin, a pair of metallic golden wings, and black eyes. While similar in stature, his second form has ash-black skin and white eyes, and the wings are replaced by four shadowy tentacles ending in lamprey's maws. In both forms, Adimarchus' right eye burns with a smoking flame, a sign bestowed on any creature destined to rule Occipitus.</p>
<p>Adimarchus is a fallen planetar who led a demonic army with the goal to invade Celestia. During that battle and in order to contain the invasion, the angels detached a portion of the plane and cast it into the Abyss, where it merged with the existing layer of Occipitus.</p>
<p>Adimarchus survived the battle and became the ruler of the layer by incorporating the wreckage of Celestia into Occipitus, becoming a demon lord in the process. As a demon lord he often waged war against his most powerful rival, the demon lord Graz'zt.</p>
<p>During his reign, Adimarchus created the Test of the Smoking Eye, a difficult challenge that would be used to find a suitable successor should anything happen to him.</p>
<p>After several hundred years of rule, Adimarchus was betrayed by Athux, the son of Graz'zt, and disappeared from Occipitus. He was imprisoned in Orthrys, the first layer of Carceri, where he was driven to madness.</p>",
        ]);
        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Ugudenk';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'The Squirming King',
            'level'       => 'Demon Lord',
            'alignment'   => 'CE',
            'description' => "<p>Ruler of the 177th layer of the Abyss, Writing Realm. Obyrith</p>
<p>Ugudenk has the form of an impossibly large worm-like creature; in fact, no one can claim to have seen the end of its body. Its jaw is a complex structure of multiple jaws and hooked tentacles made of muscle, the whole of which opens like some horrifying carnivorous flower when it hungers.</p>
<p>Ugudenk's primary defense is its sheer size: even abilities that would normally destroy the entirety of a creature only manage to destroy the first 100 ft or so of its body, and any spell or other ability that relies on creatures being under a certain size simply failed to effect it at all. That said, only the end of Ugudenk, with its mouth, is capable of actually attacking. Ugudenk is known to be able to spew a 600‑foot (180‑meter) line of acid out of its mouth</p>
<p>Even if an enemy succeeds in destroying Ugudenk's mouth, the demon lord will simply pull the rest of its body back into the Writhing Realm, where it eventually regenerates the missing body part. Some believe that killing Ugudenk is impossible so long as the Writhing Realm exists; others postulated that, based on its sheer size, Ugudenk is actually an extension of an as-yet-undiscovered Abyssal layer.</p>
<p>Ugudenk has no clear goals or plans, spending most of its time contentedly burrowing through the Writhing Realm. It does have an odd attraction to the neighboring layer of Hollow's Heart, though most consider that to be because a permanent portal existed between the two layers; the Spiral of Ugudenk on the other end was notable for being one of the few immutable parts of that realm. Hollow's Heart's ruling demon lord Fraz-Urb'luu's consistent and consistently failed attempts to remove Ugudenk from his realm has led to other demon lords joking about his \"infestation problem\".</p>
<p>At other times, Ugudenk will burst into other layers of the Abyss and, more rarely, the Material plane, where it devours things as varied as castles, lakes, artifacts, and titans. Most see no pattern or schedule to these anomalies, but stories are told of scholars who, after studying the nature of its seemingly random feasts, went insane and took their own lives almost always by allowing immense monsters to devour them.</p>
<p>Ugudenk has no organized cult, just a few isolated maniacs who seek to draw the Squirming King's attention to people or places that they feel had wronged them.</p>
<p>Likewise, Ugudenk has no true servitors, though worm-like monsters and invertebrate-like obyriths are common in regions it appears in, and the sudden appearances of such creatures always presages its arrival, but such followers seem more to be opportunistic scavengers following the demon lord to eat leftover scraps.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Ardat';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Demon Queen of Harpies, The Unavowed',
            'level'       => 'Demon Lord',
            'description' => '<p>Demon Queen of Harpies</p>',
            'alignment'   => 'CE',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Ilsidahur';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'The Howling King',
            'level'       => 'Demon Lord',
            'alignment'   => 'CE',
            'description' => '<p>Ilsidahur resides in the 90th layer of the Abyss, the Guttering Grove. He is the patron of barlgura and is known to cooperate with Demogorgon on occasion</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Pale Night';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Mother of Demons',
            'level'       => 'Demon Lord',
            'alignment'   => 'CE',
            'description' => 'Obyrith',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Arendagrost';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Maw of the Abyss',
            'level'       => 'Demon Lord',
            'alignment'   => 'CE',
            'description' => '<p>Arendagrost is described as vaguely resembling an immense wingless dragon of gargantuan size. Instead of legs, it moves upon a sea of tentacles. In place of scales, it is covered in coarse black fur and has three heads that resemble monstrous horned fiends that breath bloody acid, fire, and frost. Its six-fold eyes offer instant death to anyone catching their hideous gaze.</p>
<p>Arendagrost is the most powerful spawn of Demogorgon and Malcanthet, and even his father finds him unsettling to look upon.</p>',
            'master_id' => God::where('name', 'Demogorgon')->first()->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Socothbenoth';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Son of Demogorgon',
            'level'       => 'Demon Lord',
            'portfolio'   => 'Incest, Sexual Taboos, Perversions',
            'alignment'   => 'CE',
            'description' => "<p>According to the apocryphal text Armies of the Abyss, Socothbenoth resembles a handsome human male with long brown hair and the long ears of an ass. He has a long, snakelike tongue and his chest is pierced by six large barbells.</p>
<p>Socothbenoth's sister Nocticula is also his lover. He lusts after the power of Graz'zt, and so has allied with Malcanthet against him. However, he also longs to become the lover of Demogorgon, a position currently held by Malcanthet.</p>
<p>Socothbenoth has almost managed to force Fraz-Urb'luu from his home, and came close before Fraz-Urb'luu managed to repulse Socothbenoth's army from his realm.</p>
<p>Socothbenoth is the offspring of Demogorgon and Malcanthet.</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Gorgant';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'General of Demogorgon',
            'level'       => 'Demon Lord',
            'alignment'   => 'CE',
            'description' => "<p>Gorgant the Two-Faced is an aspect of Demogorgon. One of his earliest unique creations is a two-faced tanar'ri demon made in Demogorgon's image. It serves as a general in Demogorgon's forces.</p>",
            'master_id'   => God::where('name', 'Demogorgon')->first()->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Bagromar';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Clone of Hethradiah',
            'level'       => 'Demon Lord',
            'alignment'   => 'CE',
            'description' => '<p>Bagromar is a clone of Hethradiah, one of the heads of Demogorgon.</p>',
            'master_id'   => God::where('name', 'Demogorgon')->first()->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Tetradarian';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Clone of Aameul',
            'level'       => 'Demon Lord',
            'alignment'   => 'CE',
            'description' => '<p>Tetradarian is a clone of Aameul, one of the heads of Demogorgon.</p>',
            'master_id'   => God::where('name', 'Demogorgon')->first()->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Wendonai';
        $god->level = 'Demon Lord';
        $god->save();
        $god->pantheons()->save(app()->pantheons[Pantheon::Demonic->value], [
            'name'        => $god->name,
            'title'       => 'Balor, Champion of Lolth',
            'level'       => 'Archdemon',
            'alignment'   => 'CE',
            'description' => "<p>Wendonai was the balor lord tasked by Lolth to seduce the Sethomiir clan, rulers of the Ilythiiri, into her worship and granting them evil magics (who would eventually become the drow).</p>
<p>After the Descent, Wendonai continued his work, acting as an adviser, tutor, and sometimes consort to the most powerful drow Matron Mothers. He tried to claim a little power for himself by leading a successful drow and duergar attack against the Elven Court in −4400 DR, called the Dark Court Slaughter. Wendonai's efforts at personal growth over the next two millennia earned Lolth's ire. Lolth withdrew her favor from the demon in −2549 DR and the Matrons followed suit.</p>
<p>Wendonai then allied himself with Eltab, serving as his emissary. He was summoned by a Nar Demonbinder but was soon banished by an incredibly powerful priest of Horus-Re and was banished till 1377. Wendonai seeks revenge for this.</p>
<p>Wendonai then returned to Lolth's service when the goddess needed his services again. He opposes Errtu for Lolth's favor.</p>",
            'master_id' => God::where('name', 'Araushnee')->first()->id,
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Wendonai';
        $feat->requirement = 'You must have drow blood';
        $feat->description = '<p>You have made a Pact with the Balor Demon Wendonai. Wendonai is interested in making himself more valuable to Lolth, or gaining revenge on the Mulhorandi pantheon.</p>
<ul>
    <li>You gain a Talent</li>
    <li>You gain the Stealth Skill as a Class Skill</li>
    <li>You are proficient with the hand crossbow</li>
    <li>You gain immunity to all Spider venom. This includes the drow sleep poison</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Demon', 'Evil', 'Drow']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Detect Magic', 'Eldritch Blast'],
            1 => ['Cloak of Dark Power', 'Command', 'Disguise Self'],
            2 => ['Comprehend Language', 'Darkness', 'Web'],
            3 => ['Spider Form', 'Summon Demon, Lesser' => 'Casting this again dispels any previous casting'],
            4 => ['Armor of Darkness' => 'Self only', 'Summon Demon' => 'Casting this again dispels any previous casting'],
            5 => ['Commune', 'Dispel Outsider'],
            6 => ['Dispel Good'],
            7 => ['Blasphemy'],
            8 => ['Power Word Stun'],
            9 => ['Abyssal Army'],
        ]);
        $helper->addFeatToGodPantheon($god, Pantheon::Demonic->value, $feat);
    }
}
