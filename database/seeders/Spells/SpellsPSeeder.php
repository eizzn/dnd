<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsPSeeder extends Seeder
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

        $spell              = new Spell;
        $spell->name        = 'Pacification';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One living creature';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You exhale a calming breeze, soothing one creature onf your choice. The target is affected as if by a Calm Emotions Spell for the Duration.</p>
<p>You cannot affect creatures with more Hit Dice than you have Caster Levels.</p>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion', 'Mental'], 4);

        $spell              = new Spell;
        $spell->name        = 'Pain Enhancing Hex';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '90 feet';
        $spell->targets     = 'One target within range';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>You place a curse on a creature that you can see within range. Until the spell ends, you deal an extra 1D6 Mental damage to the target whenever you hit it with an attack. Also, choose one ability when you cast the spell. The target has Disadvantage on ability checks made with the chosen ability.</p>
<p>If the target drops to 0 Hit Points before this spell ends, you can use an Action on a subsequent turn of yours to Curse a new creature.</p>
<p>A Remove Curse cast on the target ends this spell early.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The duration becomes 8 hours</dd>
    <dt>Heightened (+4)</dt> <dd>The duration becomes 24 hours</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Painful Echoes';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '30 feet';
        $spell->targets        = 'Up to 3 creatures within Range, no two of which are more than 30 feet apart';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>Your shout seems to echo into eternity, causing your foes to twitch and writhe as reverberations pummel them internally. Each round, the spell deals 1D4 Sonic Damage and Sickened: 1. When you cast this spell, and at the beginning of each round, each target makes a CON Save. Success negates the Damage and Sickened Condition for the round.</p>
<p>On your turn, you must use an Action to maintain this effect.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No Damage and not Sickened for the round</dd>
    <dt>Failure</dt> <dd>Full Damage and Sickened: 1 for the round</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 2);

        $spell              = new Spell;
        $spell->name        = 'Painless Death';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One willing living creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>The touched creature dies painlessly and instantly. The creature cannot be under any Compulsion to agree to this spell.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 1);

        $spell              = new Spell;
        $spell->name        = 'Paradox';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->rarity      = 'Rare';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>When you cast this spell, you may take back an Action that you performed within the last five rounds or insert an Additional Action if timing permits. You could take back something said or decide not to kiss the king's daughter. You cannot insert another attack into a combat round, but could insert one into the round before combat.</p>
<p>If an Action is taken back that would've prevented combat (insulting the goblin king) or another major event. It is the GM's call as to how the change proceeds forward, if at all. Often things will not work out as neatly as you hope.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Instead of taking back an Action or adding an additional Action, you may alter an Action.</dd>
    <dt>Heightened (+1)</dt> <dd>You may affect an Action you took up to 1 week ago. The event to be affected (taken back, added or altered) must not be more than 1 hour long.</dd>
    <dt>Heightened (+2)</dt> <dd>You may affect an Action you took up to 1 month ago. The event to be affected (taken back, added or altered) must not be more than 4 hour long.</dd>
    <dt>Heightened (+5)</dt> <dd>You may affect an Action you took up to 1 year ago. The event to be affected (taken back, added or altered). Examples include but are not limited to: learning a different skill. Creating a new spell instead of creating a new magic item. This turbulence has a 50% chance of attracting a time dimensional or a Guardian from Temporal Prime.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Pass Without Trace';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>A veil of shadows and silence radiates from you, masking you and your companions from detection. For the duration, each creature you choose within 30 feet of you (including you) has a +10 bonus to DEX (Stealth) checks and can’t be tracked except by magical means. A creature that receives this bonus leaves behind no tracks or other traces of its passage.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 2);

        $spell                = new Spell;
        $spell->name          = 'Passwall';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->rarity        = 'Rare';
        $spell->range         = '5-foot wide, 10-foot tall, 10-foot deep. Touch range';
        $spell->spell_creator = 'Aksa';
        $spell->duration      = '1 hour';
        $spell->description   = "<p>You create a visible tunnel through the wall in the chosen area, replacing the area with empty space; if the wall is thicker than 10 feet, the tunnel ends 10 feet in. Even a small layer of metal in the wall prevents this spell from functioning. This spell doesn't reduce the integrity of the structure, so the wall doesn't collapse even if it's load-bearing. When the spell ends, anyone inside the tunnel is shunted to the nearest exit.</p>";
        $spell->heightened    = "<dl>
    <dt>Heightened (+2)</dt> <dd>The tunnel can be up to 20 feet deep. The areas of the wall that contain your tunnel's entrance (and exit, if applicable) appear completely normal (unless subjected to true seeing), despite the tunnel's existence. The tunnel's entrance normally counts as a solid wall, but you can specify a password or a trigger stimulus. Anyone speaking the password or fulfilling the trigger stimulus can enter the tunnel freely.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 5);

        $spell              = new Spell;
        $spell->name        = 'Passweb';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched creature or self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>This spell allows the target to pass through magical and natural webs, tough rope, and organic vines.</p>
<p>The spell allows the target to pass through many types of web-like material, including magical webs as if they did not exist. The caster can also attempt to free a captive entangled in web-like materials. The structure of the webs does not change in shape or form when passed through.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Penitentiary Gaze';
        $spell->casting     = 'Somatic Casting';
        $spell->rarity      = 'Rare';
        $spell->range       = '30 feet';
        $spell->targets     = 'One creature in range';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>Your eyes glow with the power of Mount Celestia. Any nonlawful good creature within range that meets your Gaze suffers the following effects based on their alignment.</p>
<dl>
    <dt>Law/Chaos Axis is Neutral</dt> <dd>The target is beset by religious visions in which legions berate him for straying from the true path of law and goodness. The target is Fatigued.</dd>
    <dt>Chaotic</dt> <dd>Blistering mental hellscapes scald the target's consciousness, causing so much psychological damage that the target gains one level of Exhaustion.</dd>
    <dt>Good/Evil Axis is Neutral</dt> <dd>Pangs of self-regret over past evil deeds result in blood-red psychosomatic blisters and boils. The target takes 10 Holy damage.</dd>
    <dt>Evil</dt> <dd>The target's guilt and misery creates a psychosomatic meltdown that results in painful rashes and explosive skin abrasions. The target takes 20 Holy damage.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Good'], 5);

        $spell              = new Spell;
        $spell->name        = 'Percussion';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = 'Concentration, up to 30 minutes';
        $spell->description = "<p>Percussion fills the immediate area with the sounds of drums, chimes, and other percussive instruments.</p>
<p>The music can range from the gentle tapping of a single tom-tom to the thunder of a squad of drummers. Upon casting the spell, you set the tempo of the drums and the rhythm they repeat. Thereafter, you can change the tempo, rhythm, or volume simply by concentrating for 1 round.</p>
<p>Bards often use this spell to provide background accompaniment for their own music and songs. The sounds produced are no louder than real drums would be, but the effect is realistic enough to fool anyone who can't see that no drummers are present.</p>
<dl>
    <dt>Material Component</dt> <dd>Two smooth wooden sticks, which you must touch together to cast the spell.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Figment', 'Auditory'], 0);

        $spell              = new Spell;
        $spell->name        = 'Perfection';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>The target gets a +4 enchantment bonus to all their ability scores.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+4)</dt> <dd>The range becomes 30 feet and you can target up to 10 creatures.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment'], 5);

        $spell              = new Spell;
        $spell->name        = 'Perfect Invisibility';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature Touched';
        $spell->duration    = 'Concentration, up to 3 hours';
        $spell->description = '<p>As a Heightened Invisibility, including the following.</p>
<ul>
    <li>You are shrouded in a field of Silence, so that you make no sound</li>
    <li>You leave no scent, so that you cannot be detected by smell</li>
</ul>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor'], 6);

        $spell              = new Spell;
        $spell->name        = 'Permanency';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'See text';
        $spell->duration    = 'Permanent, see text';
        $spell->description = '<p>This spell makes the duration of certain other spells and effects permanent.</p>
<p>Permanency can only be dispelled by a caster of higher level than you were when you cast the spell.</p>
<p>Each spell or effect will describe the cost and minimum caster level to make it permanent.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Permanent Image';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '100 ft cube. 60 foot range';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>This spell functions like Silent Image, except that the figment includes visual, auditory, olfactory, and termal elements, and the spell is permanent. By Concentrating, you can move the image within the limits of the range, but it is static while you are not Concentrating.</p>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Figment'], 6);
        $spell->materials()->save(Material::where('name', 'Jade')->firstOrFail(), ['price' => '100 gp', 'meta' => 'Powdered']);
        $spell->materials()->save(Material::where('name', 'Creature Part')->firstOrFail(), ['meta' => 'A bit of fleece']);

        $spell              = new Spell;
        $spell->name        = 'Pest Form';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes or until dismissed';
        $spell->description = '<p>You transform into an animal of size Small or Tiny with a CR of 0. The animal cannot have a Swim Speed or Fly Speed.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can turn into an animal of size Medium, Small, or Tiny with a CR of 1/2 or lower. The animal may have a Swim Speed</dd>
    <dt>Heightened (+3)</dt> <dd>You can turn into an animal of size Medium, Small or Tiny with a CR of 1/2 or lower with a Fly Speed</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Pestilence';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = 'Touch';
        $spell->targets        = 'Living creature touched';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>The target contracts a particularly terrible and contagious disease, which strikes immediately with no incubation period. You infect the target with a sickness that deals 1D4 CON drain each day until the target dies. The target may attempt a new Save each day, but they must succeed at two Saves in a row to be rid of the disease.</p>
<p>However, the disease, once unleashed, continues to spread. For the first day of sickness, anyone touching the subject must succeed a CON Save or fall victum to the same disease. That victum in turn becomes contagious on the first day of their affliction.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Save vs initial, you are not afflicted with the disease. You must succeed two Saves in a row to be rid of this disease.</dd>
    <dt>Failure</dt> <dd>You are afflicted with the disease.</dd>
    <dt>Critical Failure</dt> <dd>The CON damage for this day is 1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Disease'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Phantasmal Force';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'Creature within range';
        $spell->save_attribute = 'INT';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>You craft an Illusion that takes root in the mind of the target that you can see within range. The target must make an INT Save or the target experiences a Phantasmal object, creature, or other visible phenomenon of your choice that is no larger than a 10-foot cube and that is percievable only to the target for the duration.</p>
<p>The spell has no effect on Undead or Constructs. The Phantasm includes sound, temperature, and other stimuli, also evident only to the creature. The target can use an Action to examine the Phantasm with an INT (Insight) check against your Spell Save DC. If the check succeeds, the target realizes that the Phantasm is an Illusion, and the spell ends.</p>
<p>While a target rationalizes any illogical outcomes from interacting with the Phantasm.</p>
<blockquote>
    Ex. A target attempting to walk across a Phantasmal bridge that spans a chasm falls once it steps onto the bridge. If the target survives the fall, it still believes that the bridge exists and comes up with some other explanation for its fall.
</blockquoet>
<p>An affected target is so convinced of the phantasm's realism that it can even take damage from the Illusion. A Phantasm created to appear as a creature can attack the target. Similarly, a Phantasm created to appear as fire, a pool of acid, or lava can burn the target. Each round on your turn, the phantasm can deal 1d6 sub-dual damage to the target if it is in the Phantasm’s area or within 5 feet of the Phantasm, provided that the Illusion is of a creature or hazard that could logically deal damage, such as by attacking. The target perceives the damage as a type appropriate to the illusion.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Phantasm'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Phantasmal Killer';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->save_attribute = 'WIS';
        $spell->spell_creator  = 'Carbury';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>You tap into the nightmares of a creature you can see within range and create an illusory manifestation of its deepest fears, visible only to that creature. The target must make a Wisdom saving throw. On a failed save, the target becomes frightened for the duration. At the end of each of the target’s turns before the spell ends, the target must succeed on a WIS Save or take 4D10 Mental damage. On a successful save, the spell ends.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>The spell ends</dd>
    <dt>Failure</dt> <dd>Frightened for the duration. Continuous: full damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D10</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Phantasm'], 4);

        $spell                = new Spell;
        $spell->name          = 'Phantom Steed';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->range         = '30 feet';
        $spell->spell_creator = 'Carbury';
        $spell->duration      = '1 hour';
        $spell->description   = '<p>A Large quasi-real, horse like creature appears on the ground in an unoccupied space of your choice within range. You decide the creature’s appearance, but it is equipped with a saddle, bit, and bridle. Any of the equipment created by the spell vanishes in a puff of smoke if it is carried more than 10 feet away from the steed.</p>
<p>For the duration, you or a creature you choose can ride the steed. The creature uses the statistics for a riding horse, except it has a speed of 100 feet and can travel 10 miles in an hour, or 13 miles at a fast pace. When the spell ends, the steed gradually fades, giving the rider 1 minute to dismount. The spell ends if you use an action to dismiss it or if the steed takes any damage.</p>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Phantasm'], 3);

        $spell              = new Spell;
        $spell->name        = 'Phase Door';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->area        = '5 ft by 8 ft by 30 ft deep Ethereal space';
        $spell->duration    = '10 uses';
        $spell->description = "<p>This spell creates an ethereal passage through wooden, plaster, or stone walls, but not other materials. The phase door is invisible and inaccessible to all creatures except you, and only you can use the passage.</p>
<p>You disappear when you enter the phase door and appear when you exit. If you desire, you can take one other creature (Medium or smaller) through the door. This counts as two uses of the door.</p>
<p>The door does not allow light, sound, or spell effects through it, nor can you see through it without using it. Thus, the spell can provide an escape route, though certain creatures, such as phase spiders, can follow with ease.</p>
<p>A gem of true seeing or similar magic reveals the presence of a phase door but does not allow its use.</p>
<p>A phase door is subject to dispel magic. If anyone is within the passage when it is dispelled, they are harmlessly ejected just as if they were inside a passwall effect.</p>
<p>You can allow other creatures to use the phase door by setting some triggering condition for the door. Such conditions can be as simple or elaborate as you desire. They can be based on a creature's name, identity, or alignment, but otherwise must be based on observable actions or qualities. Intangibles such as level, class, Hit Dice, and hit points don't qualify.</p>";
        $spell->heightened  = '<dl>
    <dt>Permanency (+2)</dt> <dd>10,000 gp and 5 CON Damage. Casting time is 1 hour</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 7);

        $spell               = new Spell;
        $spell->name         = 'Phoenix Fire';
        $spell->casting      = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range        = '15-foot radius spread, centered on you';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>10 CON damage</dd>
</dl>';
        $spell->duration     = 'Instantaneous (see text)';
        $spell->description  = '<p>You immolate yourself, consuming your flesh in a cloud of flame 20 feet high and 30 feet in diameter. You die (no Save).</p>
<p>Every evil Outsider within the cloud takes 2D6 points of damage per character level (maximum 40D6). Neutral Outsiders take half damage (and a successful DEX Save reduces that further by half), while good Outsiders take no damage. Half of the damage is fire, and the rest is Positive damage.</p>
<p>After 10 minutes, you rise from the ashes as if restored to life by a Resurrection spell.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Exalted'], 7);
        $spell->materials()->save(Material::where('name', 'Monster Feathers')->firstOrFail(), ['price' => '40 gp', 'meta' => 'A tail feather from a Phoenix']);

        $spell                 = new Spell;
        $spell->name           = 'Pied Piping';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet centered on you';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration + 10 rounds';
        $spell->description    = '<p>You call forth a melody so compelling and attractive that creatures belonging to a group with a specific, identifiable physical trait (such as type, subtype, age, gender, or hair color) find it almost impossible not to approach and follow you. You choose the nature of the creatures you seek to attract when you cast the spell and, once you make this choice, cannot alter it. You can only use physical traits to determine your audience. You can never use social and other more voluntary criteria (such as alignment, religion, nationality, or class) to select targets for this spell.</p>
<p>Eligible creatures must make a WIS Save each round spent within the area of the spell and, once they fail, approach you at their normal movement speed and stand as close to you as possible without actually entering an occupied square.</p>
<p>If you move, they do their best to maintain their proximity to you and follow. Affected creatures can take no actions other than listening to your music and following you if you move.</p>
<p>Those entering the area while the spell is in effect must also successfully Save or be compelled to come to you.</p>
<p>The attractive power of the spell does not cause affected creatures to put themselves in jeopardy, and they have enough presence of mind to avoid or negotiate around obstacles and other perilous hazards. If unable to approach or follow you without endangering themselves, they simply wait, swaying to the music, until you pass out of range, at which point they regain their senses after 5 rounds. If circumstances change once you move out of range, making it possible for affected creatures to resume their attempts to get near you, they do so, and, if they manage to return to within the area of the spell before it wears off, the spell continues as normal.</p>
<p>If attacked, affected creatures can take defensive measures, even going so far as to avoid existing threats by moving out of the area of the spell, but cannot make attacks themselves or take any other actions until the effects of the spell wear off. The effects of the spell persist for 10 rounds even after you stop concentrating. Once the spell ceases, the affected creatures continue to stay near you until the effects of the spell wear off.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Ignore effects for 1 round, when another Save is required is creature is still within the area</dd>
    <dt>Failure</dt> <dd>Suffer the full effects of the spell</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion', 'Auditory'], 6);
        $spell->materials()->save(Material::where('name', 'Miscellaneous')->firstOrFail(), ['meta' => 'A musical instrument']);

        $spell              = new Spell;
        $spell->name        = 'Pierce Disguise';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->rarity      = 'Rare';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You see through magical disguises (whether illusions or polymorph effects) of the same spell level or lower. This allows you to see the true forms of creatures magically disguised by such methods. The true form appears as a ghostly overlay on the creature’s disguised appearance.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>This spell pierces more powerful illusions or polymorph effects, of the heightened level or lower.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Pillar of Sand';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>This spell creates a 10' radius circle of sand under you and those you are touching to rise up. This spell is only useful in a sandy area, the rising level, stable circle of sand draws surrounding sand up underneath it to create a sylindrical pillar. The pillar rises as high as available sand allows, or as high as the caster desires, to a maximum of 40' feet. Beings atop the pillar can see a long way, reach high things, and possibly escape spells cast at 'ground-level'. The pillar rises or sinks up to 10' per round, as you will.</p>
<p>The pillar has AC 15 and 50 HP. If physical attacks on the pillar destroys it, or a Dispel Magic or other magical effect ends this spell, it collapses.</p>
<p>Beings atop the pillar can fall if winds are high (and you fail a DEX Save), or the pillar collapses, normal falling damage applies.</p>
<p>You can collapse the pillar at any time with an Action. However, the pillar will persist even if you go unconscious or die.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Avoid being raised on the sand pillar</dd>
    <dt>Failure</dt> <dd>Failed to avoid being on the pillar when it is raised</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Plague Bearer';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'One living creature touched';
        $spell->save_attribute = 'CON';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You make the target an asymptomatic carrier for a host of virulent diseases. Creatures that end their turn adjacent to the target must succeed at a CON Save or be affected as if by the spell Contagion. The target itself does not become diseased, and suffers no ill effects from this spell. Once plague bearer ends, the target is no longer contagious, though any creature it infected remains diseased.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Disease'], 6);

        $spell              = new Spell;
        $spell->name        = 'Plague of Rats';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->area        = '20-ft Cone-shaped emanation';
        $spell->duration    = '1 minute';
        $spell->description = '<p>A swarm of Rats viciously attacks all other creatures in the Area. The Rats collectively deals 1D4 Piercing Damage to all in the Area. Any creature that takes Damage is treated as if targeted by a Contagion Spell Heightened +2.</p>
<p>Any creature that starts their turn in the Area is attacked by the swarm. Spellcasting or Concentrating on spells while in the Area is impossible.</p>
<p>The swarm cannot be fought effectively with weapons, but Fire and Damaging Area Effect spells are effective. The swarm disperses when it has take 20 Hit Points of Damage from effects that affect an area.</p>
<p>As an Action, you can have the swarm move 20 feet in any direction.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning', 'Disease'], 5);

        $spell              = new Spell;
        $spell->name        = 'Plague of Undead';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '90 feet';
        $spell->targets     = 'One or more corpses within range';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>This spell turns the bones of dead creatures into undead skeletons or zombies with maximum Hit Points for their Hit Dice. This spell does not grant you control over the created undead, but you may gain control over them by other means. These undead remain animated until destroyed.</p>
<p>Regardless of the specific numbers or kinds of undead created with this spell, you can't create more HD of undead with this spell than four times your caster level with a single casting of this spell.</p>
<p>The bones and bodies required for this spell follow the same restrictions as the spell Animate Dead.</p>
<dl>
    <dt>Material Components</dt> <dd>A black sapphire worth 100 gp or several black sapphires with a total value of 100 gp.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead', 'Evil'], 9);

        $spell                 = new Spell;
        $spell->name           = 'Plague Storm';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 foot range';
        $spell->area           = '20-ft radius emanation';
        $spell->save_attribute = 'CON';
        $spell->duration       = '10 minutes';
        $spell->description    = "<p>You create a hideous gray cloud, similar to fog cloud, that occasionally crackles with foul-smelling bolts of sickly green lightning. Creatures in the area must save or contract one of the following diseases. The disease is chosen by you when you cast the spell and applies to all creatures that fail their Save. The disease is contracted immediately (the onset period does not apply) and is an instantaneous effect. Use the disease's listed frequency to determine further effects, but the disease's Save DC increases by +2.</p>
<ul>
    <li>Blinding Sickness</li>
    <li>Bubonic Plague</li>
    <li>Cackle Fever</li>
    <li>Demon Fever</li>
    <li>Devil Chills</li>
    <li>Filth Fever</li>
    <li>Leprosy</li>
    <li>Mindfire</li>
    <li>Red Ache</li>
    <li>Shakes</li>
    <li>Slimy Doom</li>
</ul>
<p>Unlike a fog cloud, the plague storm moves away from you at 10 feet per round, rolling along the surface of the ground.</p>
<p>Figure out the cloud's new spread each round based on its new point of origin, which is 10 feet farther away from the point of origin where you cast the spell. Because the vapors are heavier than air, they sink to the lowest level of the terrain, even pouring down den or sinkhole openings. The cloud cannot penetrate liquids, nor can it be cast underwater.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Disease'], 6);

        $spell              = new Spell;
        $spell->name        = 'Planar Adaption';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '12 hours';
        $spell->description = '<p>This spell grants you immunity to the harmful environmental effects of a particular plane of existence, including such hazards as toxicity, extreme temperatures, and lack of air. Additionally, you gain Energy Resistance 20 to a single energy type prevalent on that plane (choose one if more than one type is equally prevalent).</p>
<p>Planar adaptation has no effect when cast upon your native plane.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The targets becomes all in a 30-foot radius centered on yourself</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 5);

        $spell               = new Spell;
        $spell->name         = 'Planar Ally';
        $spell->casting      = '3 hours (Material, Somatic, Verbal, Secondary Casters)';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 2 others who must share your religion</dd>
</dl>';
        $spell->duration     = 'Varies (see text)';
        $spell->description  = "<p>You beseech another worldly entity for aid. The being must be known to your patron deity. Your patron sends an outer planar creature that is loyal to it to aid you. If you know a specific creature's name, you can speak that name when you cast this spell to request that creature, though you might get a different creature anyway (GM's choice).</p>
<p>When the creature appears, it is under no compulsion to behave in any particular way. You can ask the creature to perform a service in exchange for payment, but it is not obliged to do so. Even if the called creature agrees to the service, there is still nothing binding it to complete the tasks other that its honor.</p>
<p>You must be able to communicate with the creature to bargain for its service.</p>
<p>Payment can take a variety of forms. A celestial might require a sizable donation of gold or magic items to an allied temple, while a fiend might demand a living sacrifice or a gift of treasure. Some creatures might exchange their service for a quest undertaken by you.</p>
<p>Use the following as a guide for payment. The GM can adjust these payments based on circumstances under which you cast the ritual. If the task is aligned with the creature's ethos, the payment might be halved or even waived. Nonhazardous tasks typically require only half the suggested payment, while especially dangerous tasks might require a greater gift. Creatures rarely accept tasks that seem suicidal.</p>
<table>
    <tbody>
        <tr>
            <th>Task can be measured in minutes</th>
            <td>100 gp per minute</td>
        </tr>
        <tr>
            <th>Task can be measured in hours</th>
            <td>1,000 gp per hours</td>
        </tr>
        <tr>
            <th>Task can be measured in days (up to 10 days)</th>
            <td>10,000 gp per days</td>
        </tr>
    </tbody>
</table>";
        $helper->addTypesToSpell($spell, ['Calling', 'Conjuration', 'Ritual'], 6);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 10]);

        $spell               = new Spell;
        $spell->name         = 'Planar Binding';
        $spell->casting      = '3 hours (Material, Somatic, Verbal, Secondary Casters, Sacrifice)';
        $spell->duration     = '24 hours';
        $spell->requirements = '<dl>
    <dt>Secondary Caster</dt> <dd>At least 3 other spell casters.</dd>
    <dt>Sacrifice</dt> <dd>1 CON damage</dd>
</dl>';
        $spell->description = '<p>With this spell, you attempt to bind a Celestial, an Elemental, a Fey, or a Fiend to your service. The creature must be within range for hte entire casting of this spell (Typically, the creature is first summoned into the center of a magic circle in order to keep it trapped while this spellis cast).</p>
<p>At the completion of this casting, the target must make a CHA Save. If the creature was summoned or created by another spell, that spell\'s duration is extended to match the duration of this spell.</p>
<p>A bound creature must follow your instructions  to the best of its ability. You might command the creature to accompany you on an adventure, to guard a location, or to deliver a message. The creautre obeys the letter of your instructions, but if the creature is hostile to you, it strives to twist your words to achieve its own objectives.</p>
<p>If the creature carries out your instructions completely before the spell ends, it travels to you to report this fact if you are on the same plane of existence. If you are on a different plane of existence, it returns to the place where you bound it and remains there until the spell ends.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the duration to 10 days</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the duration to 30 days</dd>
    <dt>Heightened (+3)</dt> <dd>Increase the duration to 180 days</dd>
    <dt>Heightened (+4)</dt> <dd>Increase the duration to 1 year</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion', 'Ritual'], 5);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 10]);

        $spell              = new Spell;
        $spell->name        = 'Planar Orientation';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>This spell helps creatures accustomed to the concrete reality of the Material Plane to navigate within the confusing realities of other planes. When cast, it functions as know direction, save that instead of revealing true north, it reveals the direction of the palace or demesnes most associated with that plane or demiplane's ruling god or demigod, as well as a brief and generic vision of that entity's appearance or holy symbol. The spell functions only within whatever plane or demiplane you are located in at the time; for instance, if cast within a specific demon lord's Abyssal realm or on a given layer of Hell, it would point to the seat of power for that demon lord or archdevil. If a plane or demiplane has multiple gods or rulers, it reveals the directions of the closest three, allowing for triangulation.</p>
<p>This spell reveals the location of the god or demigod's official seat of power only, not the entity itself, and if such a location is deliberately hidden via magic of any sort, the spell automatically fails. It does not function on the Material Plane.</p>";
        $helper->addTypesToSpell($spell, ['Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Planar Refuge';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->range       = '50-foot radius sphere';
        $spell->duration    = '20 days';
        $spell->description = '<p>This spell enforces the rules of the Material Plane on other planes of existence. Upon casting this spell on another plane, a spherical pocket of wilderness terrain forms around the designated point. The affected area defies the local climate and planar traits, suppressing any harmful environmental effects such as toxicity, extreme temperatures, or lack of air (though this spell doesn’t affect gravity). The area also becomes lush with edible plants whose appearance, taste, and smell bear characteristics distinct to the environment. On a negative-dominant plane, for example, the plants grow ghastly white leaves and taste bitter. Though planar refuge can be cast on any plane of existence other than the Material Plane, it requires a body of solid matter at least as large as its area to function.</p>';
        $spell->heightened  = '<dl>
    <dt>Permanency (Heightened +2)</dt> <dd>7,500 gp. 5 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Extradimensional', 'Permanency', 'Ritual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Plane Shift';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You and up to eight willing creatures who link hands in a circle are transported to a different plane of existence. You can specify a target destination in general terms, such as the City of Brass on the Elemental Plane of Fire or the palace of Dispater on the second level of the Nine Hells, and you appear in or near that destination. If you are trying to reach the City of Brass, for example, you might arrive in its Street of Steel, before its Gate of Ashes, or looking at the city from across the Sea of Fire (GM\'s discretion).</p>
<p>Alternatively, if you know the sigill sequence of a teleportation circle on another plane of existence, this spell can take you to that circle. If the teleportation circle is too small to hold all the creatures you transported, they appear in the closest unoccupied spaces next to the circe.</p>
<p>You can use this spell to banish an unwilling creature to another plane. Choose a creature within your reach and make a melee spell attack against it. On a hit, the creature must make a CHA Save. If the creature fails this Save, it is transported to a random location on the plane of existence you specify. A creature so transported must find its one way back to your current plane of existence.</p>
<p>The material components for this spell is a metal rod worth at least 250 gp, attuned to a particular plane of existence.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 7);

        $spell              = new Spell;
        $spell->name        = 'Plant Form';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes or until dispelled';
        $spell->description = '<p>When you cast this spell you can assume the form of any Small or Medium creature of the Plant type. If the form you assume has any of the following abilities, you gain the listed ability: Darkvision 60 feet, Low-Light Vision, Constrict, Grab, and Poison. If the form you assume does not possess the ability to move, your speed is reduced to 5 feet, and you lose all other forms of movement. If the creature has vulnerability to an element, you gain that vulnerability.</p>
<dl>
    <dt>Small Plant</dt> <dd>If the form you take is that of a Small plant, you gain a +2 size bonus to your CON and a +2 Natural Armor bonus.</dd>
    <dt>Medium Plant</dt> <dd>If the form you take is that of a Medium plant, you gain a +2 size bonus to your STR, a +2 Enhancement bonus to your CON, and a +2 Natural Armor bonus.</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Large Plant. If the creature has immunity or resistance to any elements, you gain Energy Resistance 20 to those elements. You also gain a +4 size bonus to your STR, a +2 size bonus to your CON, and a +4 Natural Armor bonus.</dd>
    <dt>Heightened (+2)</dt> <dd>Huge Plant. If the form you assume has any of the following abilities, you gain the listed ability: Damage Reduction, Regeneration 5, and Trample. You also gain a +8 Size bonus to your STR, a -2 penalty to your DEX, a +4 size bonus to your CON, and a +6 Natural Armor bonus.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation', 'Plant'], 5);

        $spell              = new Spell;
        $spell->name        = 'Plant Growth';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '150 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>This spell channels vitality into plants within a specific area. There are two possible uses for the spell, granting either immediate or long-term benefits.</p>
<ul>
    <li>If you cast this spell using 1 action, choose a point within range. All normal plants in a 100-foot radius centered on that point become thick and overgrown. A creature moving through the area must spend 4 feet of movement for every 1 foot it moves. You can exclude one or more areas of any size within the spell's area from being affected.</li>
    <li>If you cast this spell over 8 hours, you enrich the land. All plants in a half-mile radius centered on a point within range become enriched for 1 year. The plants yield twice the normal amount of food when harvested.</li>
</ul>
<p>Plant Growth counters Shrink Plant</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 3);

        $spell              = new Spell;
        $spell->name        = 'Plant Renewal';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One plant touched';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>This spell makes sick and withered plants instantly healthy. Molds and other growths are destroyed, spoiled fruit and blossoms are renewed, and non-beneficial insects and their eggs are banished. FLowers and edible plant parts cna thus be created out of mere memories - but this spell cannot bring a wholly dead plant back to life.</p>
<p>This spell also has a side effect. Creatures using magic or special abilities to masquerade as plants are instantly revealed in their true forms. Illusory plants melt away forever and magically altered plants revert to their true forms and natures, breaking any magical animations or controls.</p>
<dl>
    <dt>Material Components</dt> <dd>A drop of rain water or dew (the later must be collected on a moonlit night)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Pleasant Visage';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One ghost touched';
        $spell->duration    = '12 hours';
        $spell->description = "<p>You disguise the wounds of a ghost how has a disturbing, repulsive, or gruesome appearance, making it appear completely normal (but still a ghost).</p>
<p>The spell does not change the ghost's features or disguise it in any way. It conceals the manner of the ghost's death so that it can walk in polite society.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor', 'Ritual'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Poison';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'Creature touch';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You make a melee touch attack. On a successful hit, the target is Sickened 3. The target makes a CON Save, taking 1D10 CON damage. After 1 minute, the target must make another CON Save, taking another 1D10 CON damage.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No CON damage</dd>
    <dt>Failure</dt> <dd>1D10 Poison CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Poison'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Poison Spray';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '10 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You extend your hand toward a creature you can see within range and project a puff of noxious gas from your palm. The creature must succeed on a CON Save or take 1D12 poison damage.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Poison'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Poison Vines';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = 'Squares in a 20-foot radius burst that contain plants. 120 foot range';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>This spell functions like the Entangle Spell. The vines also deals 3 Piercing damage. Any creature that takes damage in this way must make a CON Save or suffer the effects of Blue Frog Paste.</p>
<dl>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>1D4 DEX (1 round) (CON DC 17)</dd>
    <dt>Stage 2</dt> <dd>Paralysis 2D6 minutes</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Plant', 'Transmutation'], 6);

        $spell              = new Spell;
        $spell->name        = 'Polar Ray';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->targets     = '1 creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You fire a blue-white ray of freezing air and sleet that deals 10D8 Cold damage.</p>
<p>Make a Ranged Spell attack roll against the target.</p>
<dl>
    <dt>Critical Success</dt> <dd>The target takes double damage and is Drained 2</dd>
    <dt>Success</dt> <dd>The target takes full damage and is Drained 2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold', 'Attack', 'Ray'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Polymorph';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->save_attribute = 'WIS';
        $spell->spell_creator  = 'Aksa';
        $spell->duration       = 'Concentration, up to 1 hour';
        $spell->description    = '<p>This spell transforms a creature that you can see within range into a new form. An unwilling creature must make a WIS Save to avoid the effect. The spell has no effect on a shapechanger or a creature with 0 hit points.</p>
<p>The transformation lasts for the duration, or until the target drops to 0 hit points or dies. The new form can be any beast whose challenge rating is equal to or less than the target’s (or the target’s level, if it doesn’t have a challenge rating). The target’s game statistics, including mental ability scores, are replaced by the statistics of the chosen beast. It retains its alignment and personality.</p>
<p>The target assumes the hit points of its new form. When it reverts to its normal form, the creature returns to the number of hit points it had before it transformed. If it reverts as a result of dropping to 0 hit points, any excess damage carries over to its normal form. As long as the excess damage doesn’t reduce the creature’s normal form to 0 hit points, it isn’t knocked unconscious.</p>
<p>The creature is limited in the actions it can perform by the nature of its new form, and it can’t speak, cast spells, or take any other action that requires hands or speech.</p>
<p>The target’s gear melds into the new form. The creature can’t activate, use, wield, or otherwise benefit from any of its equipment.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Polymorphed</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 4);

        $spell                = new Spell;
        $spell->name          = 'Polymorph Self';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->targets       = 'Self';
        $spell->spell_creator = 'Aksa';
        $spell->duration      = 'Concentration, up to 1 hour';
        $spell->description   = '<p>This spell acts just like the Polymorph spell, except as noted here.';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 4);

        $spell              = new Spell;
        $spell->name        = 'Portal Barricade';
        $spell->casting     = 'Somatic Casting X2, Verbal Casting X2';
        $spell->range       = '30 feet';
        $spell->targets     = 'One Portal';
        $spell->duration    = '12 hours';
        $spell->description = '<p>This spell temporarily closes a Portal and prevents it from functioning for the duration of the spell. Knock spells, Chimes of Opening, and similar effects cannot end or suppress this, though Dispel Magic can.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Portal'], 5);

        $spell              = new Spell;
        $spell->name        = 'Portal Stabilization';
        $spell->casting     = 'Somatic Casting X2, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One Portal';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You temporarily stabilize a malfunctioning Portal, making it safer for use. Any time the Portal is activated during the duration of the spell (or immediately, if it is continuously active), add +30% to the required roll on the Portal Malfunction table.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Portal'], 1);

        $spell              = new Spell;
        $spell->name        = 'Portal-to-Portal Redirect';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = '30 feet';
        $spell->targets     = 'One Portal';
        $spell->duration    = '12 hours';
        $spell->description = '<p>This spell changes the destination of the Portal on which it is cast for the duration of the spell. You may choose any existing Portal through which you have traveled as the new, temporary destination. This spell does not change any of the Portal\'s special properties (such as one-way or creaute-only)</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Portal'], 6);

        $spell              = new Spell;
        $spell->name        = 'Portal Reformat';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = '30 feet';
        $spell->targets     = 'One Portal';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell permanently removes or adds one or more keys to a Portal. You must have studied the Portal with the Analyze Portal spell (or some similar means) and must know its properties before you can add or remove any keys.</p>
<dl>
    <dt>Adding a Key</dt> <dd>
        <p>You can add a key to an existing portal to prevent it from being activated unless the creature attempting to activate it has the key. If you designate a specific object or type of object as the key, you must have that object on hand for the casting of the spell. You can also add a key that changes the behavior of a variable portal, if you so choose.</p>
<p>For example, if a variable portal formerly operated one way for drow and another way for all other creatures, you could add a key that is nearly impossible to obtain for the "all other creatures" function, effectively changing the portal into a drow-only portal.</p>
    </dd>
    <dt>Removing a Key</dt> <dd>
        <p>Removing a key from a portal changes it from a portal activated only by that specific key to either a portal that cannot be activated at all or a portal that can be activated by any creature (caster\'s choice). If the key controlled the behavior of the portal, the caster can decide which behavior to remove.</p>
<p>For example, in the case of a variable portal that leads to one destination if activated by a drow and another destination if activated by any other creature, the caster could remove either destination, making it a portal that sends any other creature to one destination or a drow to one destination.</p>
    </dd>
</dl>
<p>Casting this spell causes you 4 points of CON damage after the spell is completed.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Portal', 'Ritual'], 8);

        $spell              = new Spell;
        $spell->name        = 'Portal View';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = '30 feet';
        $spell->targets     = 'One Portal';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>This spell makes a Portal transparent from you side only for the duration of the spell. It does not actually open the portal, so no line of effect is established, but it does enable line of sight. This spell does not reveal any of the Portal's special properties (such as one-way or creature-only). It only allows creatures  on your side to view the Portal's destination.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Portal', 'Ritual'], 4);
        $spell->materials()->save(Material::where('name', 'Glass')->firstOrFail(), ['meta' => 'A glass eye']);

        $spell              = new Spell;
        $spell->name        = 'Portal Well';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Active portal touched';
        $spell->duration    = '1 minute';
        $spell->description = "<p>When you step into a portal affected by this spell, you can wait for a short time within an extradimensional space between the portal's entrance and exit. This spell only works on a portal you are able to activate. For example, if you are an elf and the target portal doesn't work for elves, you can't use this spell on the portal.</p>
<p>The extradimensional space created by this pell is similar to that created by a Rope Trick spell but can only hold you and your gear (up to your maximum load). When the spell ends, you exit the portal at either your point of entry or the portal's destination.</p>
<p>While within this extradimensional space, you can see the origin and destination locations, though the images are blurry (much like viewing the Material Plane from the Ethereal Plane). Dispel Magic or Gate Seal traps you within the extradimensional space for as long as the portal is negated or sealed (as would surrounding both ends with a dead magic area). Disjunction or some other effect that destroys a portal outright forcibly ejects you from one random end of the portals and deals 5D6 points of damage to you.</p>
<p>This spell originated in Shaundakul's church and is hard to find elsewhere.</p>
<dl>
    <dt>Material Components</dt> <dd>A silver wire tied in a knot.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Portal'], 2);

        $spell              = new Spell;
        $spell->name        = 'Portrait';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>This spell captures a particular scene permanently within a ball or globe of crystal. The area reproduced is a perfect sphere. so it fits smoothly within the crystal ball. You can capture a scene of up to 50 feet in diameter. The image captured is perfect in visual detail, and you may zoom in as desired.</p>
<dl>
    <dt>Material Components</dt> <dd>A sphere of glass or crystal which can be as small as 1 inch in diameter or as large as 1 foot in diameter.</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the amount of area that is visually captured by X10</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Possess Animal';
        $spell->casting        = '1 minute (Material, Somatic, Verbal)';
        $spell->save_attribute = 'WIS';
        $spell->range          = '30 ft';
        $spell->targets        = 'One animal in range';
        $spell->duration       = '1 hour';
        $spell->description    = '<p>This spell works like the Possession Spell, except that it can only target creatures with the Animal type.</p>
<dl>
    <dt>Material Components</dt> <dd>A bowl of incense and a morsel of food appealing to the target animal</dd>
</dl>';
        $spell->saves = "<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>You possess the target but can't control it. You ride along in the body while the spell lasts</dd>
    <dt>Failure</dt> <dd>You possess the target take partial control of it. You no longer have a separate turn; instead, you might control the target. At the start of each of the target's turns, it attempts another WIS Save. If it Fails, it's controlled by you on that turn, if it Succeeds, it chooses its own Actions; and if it Critically Succeeds, if forces you out and the spell ends.</dd>
    <dt>Critical Failure</dt> <dd>You possess the target fully, and it can only watch as you manipulate it like a puppet. The target is controlled by you.</dd>
</dl>";
        $spell->heightened = "<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>You can physically enter the creature's body, protecting your physical body when the spell lasts.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Mental', 'Possession', 'Ritual', 'Animal'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Possession';
        $spell->casting        = '1 minute (Somatic, Verbal)';
        $spell->range          = '60 feet';
        $spell->targets        = '1 living creature in range';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 hour';
        $spell->description    = "<p>You send your mind and soul into the target's body, attempting to take control. The target must attempt a WIS Save. You can choose to use the effects of a degree of success more favorable to the target if you prefer.</p>
<p>While in the Possessed body, you keep your INT, WIS, CHA, Classes and Levels, Base Attack Bonus, Save Bonuses, Alignment, and Mental abilities. The body retains its STR, DEX, CON, Hit Points, Natural Abilities, and Automatic abilities. You cannot choose to activate the body's Extraordinary or Supernatural abilities.</p>
<p>While you're possessing a target, your own body is unconscious and can't wake up normally. You can sense everything the possessed target does. You can Dismiss this spell with an Action. If the possessed body dies, the spell ends and you must Succeed at a CON Save against your spell DC, or be Paralyzed for 1 hour, or 24 hours on a Critical Failure. If the spell ends during an encounter, you act just before the possessed creature's Initiative count.</p>";
        $spell->saves = "<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>You possess the target but can't control it. You ride along in the body while the spell lasts</dd>
    <dt>Failure</dt> <dd>You possess the target take partial control of it. You no longer have a separate turn; instead, you might control the target. At the start of each of the target's turns, it attempts another WIS Save. If it Fails, it's controlled by you on that turn, if it Succeeds, it chooses its own Actions; and if it Critically Succeeds, if forces you out and the spell ends.</dd>
    <dt>Critical Failure</dt> <dd>You possess the target fully, and it can only watch as you manipulate it like a puppet. The target is controlled by you.</dd>
</dl>";
        $spell->heightened = "<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>You can physically enter the creature's body, protecting your physical body when the spell lasts.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Mental', 'Possession', 'Ritual'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Power Leech';
        $spell->casting        = 'Somatic Casting, Verbal Casting, Ability Damage';
        $spell->save_attribute = 'WIS';
        $spell->requirements   = '<dl>
    <dt>Ability Damage</dt> <dd>1 WIS Damage</dd>
</dl>';
        $spell->range          = '60 feet';
        $spell->targets        = 'One living creature in range';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>You create a conduit between yourself and the target. Through the conduit, you leech off Ability Score points. Each turn, pick one Ability Score. The target loses 1 point of that Ability Score and you gain 1 point of that Ability Score.</p>
<p>The gained ability scores lasts as long as the target has lost them. For example: the target has lost 10 points of STR. He takes a Long Rest and regains 1 STR. You then lose 1 STR that you have stolen. If the target then receives a Restoration Spell, you lose the same amount of Ability Score points that the target regains back. After 1 month, all stolen Ability Score Points are lost even if the target has not regained them.</p>
<p>If you already have stolen Ability Score Points from a previous casting, you cannot gain any more Ability Score points from additional castings of this spell.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected and the spell ends</dd>
    <dt>Failure</dt> <dd>The target is affected and you start to leech Ability Score Points</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Evil'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Power Word Blind';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '60 feet';
        $spell->rarity         = 'Rare';
        $spell->targets        = 'One living creature within range';
        $spell->duration       = 'Up to 1 hour until ended';
        $spell->description    = "<p>The target becomes Blinded. At the end of the target's next turn, they may make a CON Save. If they Succeed, this spell ends.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>The Blindness Condition ends</dd>
    <dt>Failure</dt> <dd>The Blindness Condition continues</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Curse', 'Auditory'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Power Word Deafen';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '60 feet';
        $spell->targets        = 'One living creature within range';
        $spell->duration       = 'Up to 1 hour until ended';
        $spell->description    = "<p>The target becomes Deafened. At the end of the target's next turn, they may make a CON Save. If they Succeed, this spell ends.</p>";
        $spell->heightened     = '<dl>
    <dt>Success</dt> <dd>The Deafened Condition ends</dd>
    <dt>Failure</dt> <dd>THe Deafened Condition continues</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Curse', 'Auditory'], 3);

        $spell              = new Spell;
        $spell->name        = 'Power Word Heal';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '60 feet';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'One living creature within range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>A wave of healing energy washes over one creature you can see within range. The target regains all its Hit Points. If the creature is Charmed, Frightened, Paralyzed, and/or Stunned, the Conditions end.</p>
<p>This spell has no effect on Undead of Constructs.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Positive'], 8);

        $spell              = new Spell;
        $spell->name        = 'Power Word Kill';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '60 feet';
        $spell->rarity      = 'Rare';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You utter a word of power that can compel one creature you can see within range to die instantly. If the creature you choose has 100 Hit Points or fewer, it dies. Otherwise, the spell has no effect.</p>';
        $helper->addTypesToSpell($spell, ['Death', 'Necromancy'], 9);

        $spell                 = new Spell;
        $spell->name           = 'Power Word Pain';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '60 feet';
        $spell->save_attribute = 'CON';
        $spell->rarity         = 'Rare';
        $spell->duration       = 'Until successful Save';
        $spell->description    = '<p>You speak a word of power that causes waves of intense pain to assail one creature you can see within range. If the target has 100 Hit Points or fewer, it is subject to cripping pain. Otherwise, the spell has no effect. A target is unaffected if it is immune to being charmed.</p>
<p>While the target is affected by crippling pain, any speed it has can be no higher than 10 feet. The target also has Disadvantage on attack rolls, ability checks, and Saves, other than CON Saves. Finally, if the target tires to cast a spell, it must first succeed a CON Save, or the casting fails and the spell is wasted</p>
<p>A target suffering this pain can make a CON Save at the end of each of its turns.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The spell ends</dd>
    <dt>Failure</dt> <dd>The spell continues to affect the target</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Power Word Sleep';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'One creature within range';
        $spell->save_attribute = 'WIS';
        $spell->rarity         = 'Rare';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>This spell is like the Sleep spell except as noted here.</p>';
        $spell->saves          = "<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>-1 conditional penalty to Perception checks for 1 round</dd>
    <dt>Failure</dt> <dd>It falls asleep. If it's still asleep after 1 minute, it wakes up automatically</dd>
    <dt>Critical Failure</dt> <dd>It falls asleep. If it's still asleep after 1 hour, it wakes up automatically</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Illusion'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Power Word Stun';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '60 feet';
        $spell->rarity         = 'Rare';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You speak a word of power that can overwhelm the mind of one creature you can see within range, leaving it dumbfounded. If the target has 150 hit points or fewer, it gains the Stunned condition. Otherwise, the spell has no effect.</p>
<p>The stunned target must make a CON Save at the end of each of its turns. On a successful save, this stunning effect ends.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The Stunned condition ends</dd>
    <dt>Failure</dt> <dd>The Stunned condition continues</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 8);

        $spell              = new Spell;
        $spell->name        = 'Prayer';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->area        = 'All allies and foes within a 60 ft ardius burst centered on you';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You bring favor upon yourself and your allies while bringing disfavor to your enemies.</p>
<ul>
    <li>You and your allies gain a +1 bonus to Hit, Damage, Saves, Ability Checks, and AC</li>
    <li>Your enemies suffer a -1 penalty to Hit, Damage, Saves, Ability Checks, and AC</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless', 'Curse'], 3);

        $spell              = new Spell;
        $spell->name        = 'Preserve Wood';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Wood item touched';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>This spell protects an item made of wood (such as the members of a ship) from being deformed by magical (e.g. Shape Wood). Only Shape Wood spell cast by a higher level caster may affect wood so protected, and then only if the appropriate roll is made.</p>
<p>The caster may protect up to 1,000 pounds of wood, but only one structure (such as a ship or a palisade) per casting. Separate wooden items must be protected separately.</p>
<dl>
    <dt>Material Components</dt> <dd>The prepared wood that is to be preserved</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Pressure Resistance';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>The target becomes more tolerant to underwater pressure. It allows the target to swim twice as deep than normal, and survive the crushing water pressure found at these depths.</p>
<dl>
    <dt>Material Components</dt> <dd>A piece of cartilage from a deep sea creature</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the depth that the target can tolerate</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by +1 hour</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Prestidigitation';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '10 feet';
        $spell->duration    = '1 hour';
        $spell->description = '<p>This spell is a minor magical trick that novice spellcasters use for practice. You create one of the following magical effects within range:</p>
<ul>
    <li>You create an instantaneous, harmless sensory effect, such as a shower of sparks, a puff of wind, faint musical notes, or an odd odor.</li>
    <li>You instantaneously light or snuff out a candle, a torch, or a small campfire.</li>
    <li>You instantaneously clean or soil an object no larger than 1 cubic foot.</li>
    <li>You chill, warm, or flavor up to 1 cubic foot of nonliving material for 1 hour.</li>
    <li>You make a color, a small mark, or a symbol appear on an object or a surface for 1 hour.</li>
    <li>You create a nonmagical trinket or an illusory image that can fit in your hand and that lasts until the end of your next turn.</li>
</ul>
<p>If you cast this spell multiple times, you can have up to three of its non-instantaneous effects active at a time, and you can dismiss such an effect as an action.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 0);

        $spell              = new Spell;
        $spell->name        = 'Primal Phenomenon';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You form a direct connection with the natural world and request intercession. Nature always refuses unnatural requests and might choose to grant a different request (potentially more powerful or better fitting its nature) than the one you asked for. A Primal Phenomenon spell can do any of the following things.</p>
<ul>
    <li>Duplicate any Primal Spell of 9th level or lower</li>
    <li>Duplicate any non-primal spell of 7th level or lower</li>
    <li>Produce any effect whose power level is in line with the above effects</li>
</ul>
<p>At the GM\'s discretion, you can try to use this spell to produce greater effects than these, but doing so may be dangerous or the spell may have only a partial effect.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 10);

        $spell              = new Spell;
        $spell->name        = 'Prismatic Bow';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->duration    = '30 minutes or until discharged';
        $spell->description = "<p>You create a prismatic +1 Long Bow. Once per round, as a Free Action, you may imbue an arrow you shot with the bow with one of the colors as from the Prismatic Wall Spell (Note, you must still use an Action to nock the bow). In additional to the arrows normal effects, the arrow also has the same effect as the corresponding color from the Prismatic Wall Spell.</p>
<p>Once you fire an arrow, the corresponding color disappears from the bow, and you can't select that color again. When the Duration ends or you have used all of the available colors, the spell ends.</p>
<p>No one else can use your Prismatic bow, though others can hold it. When you cast this spell, all other castings of this spell ends.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 8);

        $spell              = new Spell;
        $spell->name        = 'Prismatic Eye';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->range       = '500 feet';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You create a visible orb that hovers in your square. The orb has a Fly Speed of 20. As an Action, you can have it move up to its Fly Speed. As an Action, once per turn, chose one of the colors from the Prismatic Spray Spell, you can have it shoot a Ray of the chosen color as a Ranged Touch attack and a range of 60 feet. If the Ray hits, the target suffers the effects of that color as from the Prismatic Spray Spell. Once a particular color is chosen, it cannot be chosen again. Once all colors are used, this spell ends.</p>
<p>The orb has AC 18 and has 9 Hit Points. It uses your Saves.</p>
<dl>
    <dt>Material Components</dt> <dd>A polished rainbow-hued abalone shell.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ray'], 6);

        $spell              = new Spell;
        $spell->name        = 'Prismatic Ray';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->targets     = 'One creature within Range';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You shoot a Ray of brilliantly colored light from your outstretched hand. Make a Ranged Spell Attack. If you hit, roll on the following table.</p>
<dl>
    <dt>Red</dt> <dd>60 Points of Fire Damage (Dex Save for Half)</dd>
    <dt>Orange</dt> <dd>20 Points of Acid Damage (DEX Save for Half). Repeat on the following round.</dd>
    <dt>Yellow</dt> <dd>80 Points of Electricity Damage (DEX Save for Half)</dd>
    <dt>Green</dt> <dd>Poison 3D6 CON Damage (CON Save for Half)</dd>
    <dt>Blue</dt> <dd>Petrified. At the end of target's turn, make a CON Save to end this effect.</dd>
    <dt>Indigo</dt> <dd>Insane. At the end of target's turn, make a WIS Save to end this effect.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ray'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Prismatic Sphere';
        $spell->casting        = 'Verbal Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'DEX | CON';
        $spell->range          = '10-foot radius sphere centered on you';
        $spell->duration       = '10 minutes';
        $spell->description    = "<p>This spell functions like Prismatic Wall, except you conjure up an immobile, opaque globe of shimmering, multicolored light that surrounds you and protects you from all forms of attack. The sphere flashes in all colors of the visible spectrum.</p>
<p>You can pass into and out of the Sphere and remain near it without harm. However, when you're inside it, the Sphere blocks any attempt to project something through the sphere (including spells). Other creatures that attempt to attack you or pass through suffer the effects of each color, one at a time.</p>
<p>Typically, only the upper hemisphere of the globe will exist, since you are at the center of the sphere, so the lower half is usually excluded by the floor surface you are standing on.</p>";
        $spell->heightened = '<dl>
    <dt>Permanency (Heightened +1)</dt> <dd>22,500 gp. 14 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Permanency'], 9);

        $spell                 = new Spell;
        $spell->name           = 'Prismatic Spray';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'DEX | CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>Eight multicolored rays of light flash from your hand. Each ray is a different color and has a different power and purpose. Each creature in a 60-foot cone must make a DEX Save. For each target, roll a d8 to determine which color ray affects it.</p>
<dl>
    <dt>Red</dt> <dd>The target takes 10d6 fire damage on a failed save, or half as much damage on a successful one.</dd>
    <dt>Orange</dt> <dd>The target takes 10D6 Acid damage on a failed save, or half as much damage on a successful one.</dd>
    <dt>Yellow</dt> <dd>The target takes 10D6 Lightning damage on a failed save, or half as much damage on a successful one.</dd>
    <dt>Green</dt> <dd>The target takes 10D6 Poison damage on a failed save, or half as much damage on a successful one.</dd>
    <dt>Blue</dt> <dd>The target takes 10D6 Cold damage on a failed save, or half as much damage on a successful one.</dd>
    <dt>Indigo</dt> <dd>On a failed save, the target is restrained. It must then make a CON Save at the end of each of its turns. If it successfully saves three times, the spell ends. If it fails its save three times, it permanently turns to stone and is subjected to the petrified condition. The successes and failures don’t need to be consecutive; keep track of both until the target collects three of a kind.</dd>
    <dt>Violet</dt <dd>On a failed save, the target is blinded. It must then make a WIS Save at the start of your next turn. A successful save ends the blindness. If it fails that save, the creature is transported to another plane of existence of the GM’s choosing and is no longer blinded. (Typically, a creature that is on a plane that isn’t its home plane is banished home, while other creatures are usually cast into the Astral or Ethereal planes.)</dd>
    <dt>Special</dt <dd>The target is struck by two rays. Roll twice more, re-rolling any 8.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Prismatic Wall';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->save_attribute = 'DEX | CON';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>A shimmering, multicolored plane of light forms a vertical opaque wall—up to 90 feet long, 30 feet high, and 1 inch thick—centered on a point you can see within range. Alternatively, you can shape the wall into a sphere up to 30 feet in diameter centered on a point you choose within range. The wall remains in place for the duration. If you position the wall so that it passes through a space occupied by a creature, the spell fails, and your action and the spell slot are wasted.</p>
<p>The wall sheds bright light out to a range of 100 feet and dim light for an additional 100 feet. You and creatures you designate at the time you cast the spell can pass through and remain near the wall without harm. If another creature that can see the wall moves to within 20 feet of it or starts its turn there, the creature must succeed on a CON Save or become blinded for 1 minute.</p>
<p>The wall consists of seven layers, each with a different color. When a creature attempts to reach into or pass through the wall, it does so one layer at a time through all the wall’s layers. As it passes or reaches through each layer, the creature must make a Dexterity saving throw or be affected by that layer’s properties as described below.</p>
<p>The wall can be destroyed, also one layer at a time, in order from red to violet, by means specific to each layer. Once a layer is destroyed, it remains so for the duration of the spell. A rod of cancellation destroys a prismatic wall, but an antimagic field has no effect on it.</p>
<dl>
    <dt>Red</dt> <dd>The creature takes 10d6 Fire damage on a failed DEX Save, or half as much damage on a successful one. While this layer is in place, nonmagical ranged attacks can’t pass through the wall. The layer can be destroyed by dealing at least 25 Cold damage to it.</dd>
    <dt>Orange</dt> <dd>The creature takes 10d6 Acid damage on a failed DEX Save, or half as much damage on a successful one. While this layer is in place, magical ranged attacks can’t pass through the wall. The layer is destroyed by a strong wind.</dd>
    <dt>Yellow</dt> <dd>The creature takes 10d6 Electricity damage on a failed DEX Save, or half as much damage on a successful one. This layer can be destroyed by dealing at least 60 force damage to it.</dd>
    <dt>Green</dt> <dd>The creature takes 10d6 Poison damage on a failed CON Save, or half as much damage on a successful one. A passwall spell, or another spell of equal or greater level that can open a portal on a solid surface, destroys this layer.</dd>
    <dt>Blue</dt> <dd>The creature takes 10d6 Cold damage on a failed DEX Save, or half as much damage on a successful one. This layer can be destroyed by dealing at least 25 fire damage to it.</dd>
    <dt>Indigo</dt> <dd>
        <p>On a failed Save, the creature is restrained. It must then make a CON Save at the end of each of its turns. If it successfully sSaves three times, the spell ends. If it fails its sSave three times, it permanently turns to stone and is subjected to the Petrified condition. The successes and failures don’t need to be consecutive; keep track of both until the creature collects three of a kind.</p>
        <p>While this layer is in place, spells can’t be cast through the wall. The layer is destroyed by bright light shed by a daylight spell or a similar spell of equal or higher level.</p>
    </dd>
    <li>Violet. On a failed CON Save, the creature is Blinded. It must then make a WIS Save at the start of your next turn. A successful save ends the Blindness. If it fails that Save, the creature is transported to another plane of the GM’s choosing and is no longer Blinded. (Typically, a creature that is on a plane that isn’t its home plane is banished home, while other creatures are usually cast into the Astral or Ethereal planes.) This layer is destroyed by a dispel magic spell or a similar spell of equal or higher level that can end spells and magical effects.</li>
</dl>';
        $spell->heightened = '<dl>
    <dt>Permanency (Heightened +1)</dt> <dd>20,000 gp. 14 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Permanency'], 9);

        $spell                = new Spell;
        $spell->name          = 'Private Sanctum';
        $spell->casting       = '10 minutes (Material, Somatic, Verbal)';
        $spell->range         = '5-foot to 100-foot cube, 120 foot range';
        $spell->spell_creator = 'Mordenkainen';
        $spell->duration      = '24 hours';
        $spell->description   = '<p>You make an area within range magically secure. The area is a cube that can be as small as 5 feet to as large as 100 feet on each side. The spell lasts for the duration or until you use an action to dismiss it.</p>
<p>When you cast the spell, you decide what sort of security the spell provides, choosing any or all of the following properties:</p>
<ul>
    <li>Sound can’t pass through the barrier at the edge of the warded area.</li>
    <li>The barrier of the warded area appears dark and foggy, preventing vision (including darkvision) through it.</li>
    <li>Sensors created by divination spells can’t appear inside the protected area or pass through the barrier at its perimeter.</li>
    <li>Creatures in the area can’t be targeted by divination spells.</li>
    <li>Nothing can teleport into or out of the warded area.</li>
    <li>Planar travel is blocked within the warded area.</li>
</ul>
<p>Casting this spell on the same spot every day for a year makes this effect permanent.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the size of the cube by 100 feet for each additional Spell Slot</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Ritual'], 4);

        $spell              = new Spell;
        $spell->name        = 'Produce Flame';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One creature';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>A flame appears in your palm. Make a melee or ranged touch attack. On a Success, you deal 1D4 fire damage. On a critical success, the target takes 1D4 persistent fire damage in addition to the cantrip dealing double damage.</p>
<p>The target gains a +1 conditional bonus to their Armor Class against attacks by creatures of the chosen alignment and on saving throws against effects created by such creatures. This bonus increases to +3 against effects from such creatures that would directly control the target and against attacks made by summoned creatures of the chosen alignment.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+3)</dt> <dd>1D6 + your spellcasting ability modifier.</dd>
    <dt>Heightened (+5)</dt> <dd>2D6 + your spellcasting ability modifier, and double damage + 2D4 persistent fire damage on a critical hit.</dd>
    <dt>Heightened (+7)</dt> <dd>3D6 + your spellcasting ability modifier, and double damage + 3D4 persistent fire damage on a critical hit.</dd>
    <dt>Heightened (+9)</dt> <dd>4D6 + your spellcasting ability modifier, and double damage + 4D4 persistent fire damage on a critical hit.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Evocation', 'Fire'], 0);

        $spell              = new Spell;
        $spell->name        = 'Profane Item';
        $spell->casting     = '1 minute (Somatic Casting, Verbal Casting)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Object touched';
        $spell->duration    = 'Permanent until discharged';
        $spell->description = "<p>You imbue a touched object with latent Negative energy. If the item thereafter touches or is touched by an animal or plant of any alignment, or by an Outsider or Shapechanger of Good alignment, the Negative energy discharges with a loud snap, dealing 10D4 Negative energy Damage.</p>
<p>If the creature discharging the item is an animal or plant, it must make a WIS Save or be Frightened: 5. On Success, the target is only Shaken for 5 rounds.</p>
<p>If the creature discharging the item is a shapechanger, an image of the target's true form is overlaid over the target for 5 rounds.</p>
<p>This spell Counters and is Countered by Sacred Item.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Evil', 'Negative'], 4);

        $spell              = new Spell;
        $spell->name        = 'Programmed Image';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Until dispelled';
        $spell->description = '<p>You create an illusion of an object, a creature, or some other visible phenomenon within range that activates when a specific condition occurs. The illusion is imperceptible until then. It must be no larger than a 30-foot cube, and you decide when you cast the spell how the illusion behaves and what sounds it makes. This scripted performance can last up to 5 minutes.</p>
<p>When the condition you specify occurs, the illusion springs into existence and performs in the manner you described. Once the illusion finishes performing, it disappears and remains dormant for 10 minutes. After this time, the illusion can be activated again.</p>
<p>The triggering condition can be as general or as detailed as you like, though it must be based on visual or audible conditions that occur within 30 feet of the area. For example, you could create an illusion of yourself to appear and warn off others who attempt to open a trapped door, or you could set the illusion to trigger only when a creature says the correct word or phrase.</p>
<p>Physical interaction with the image reveals it to be an illusion, because things can pass through it. A creature that uses its action to examine the image can determine that it is an illusion with a successful Intelligence (Insight) check against your spell save DC. If a creature discerns the illusion for what it is, the creature can see through the image, and any noise it makes sounds hollow to the creature.</p>';
        $helper->addTypesToSpell($spell, ['Auditory', 'Figment', 'Illusion', 'Visual'], 6);

        $spell              = new Spell;
        $spell->name        = 'Project Image';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = 'Concentration up to 1 minute';
        $spell->description = '<p>You project an illusory image of yourself. You must stay within range of the image, and if at any point you can’t see the image, the spell ends. Whenever you Cast a Spell other than an aura spell, you can cause the spell effect to originate from either yourself or the image. Because the image is an illusion, it can’t truly benefit from spells, though any visual manifestations of the spell appear.</p>
<p>The image has AC equal to your TAC and the same saves as you. If it is hit by an attack or fails a save, the spell ends.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The maximum duration you can Concentrate on the Spell increases to 10 minutes.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Auditory', 'Figment', 'Illusion', 'Visual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Prophecy';
        $spell->casting     = '1 hour';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You divine patron sends you visions that are important to your patron or your church. The vision is not a foretelling of the future, but a call to action. This spell does not always provide a vision, only when there is a quest that is required.</p>
<p>In game terms, this spell can be used to give the players a quest through their own casting of this spell or through an NPC who casts this spell.</p>';
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Protection From Arrows';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '6 hours';
        $spell->description = '<p>The warded creature gains Damage Reduction 8 to Range Weapon attacks.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The Damage Reduction increases to 15</dd>
    <dt>Heightened (+2)</dt> <dd>Any Ranged Weapon Attack that is completely negated by the Damage Reduction is instead shot back at the attacker</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 2);

        $spell              = new Spell;
        $spell->name        = 'Protection From Chaos';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = '1 minute';
        $spell->description = '<p>This spell functions just like Protection From Evil, except that it works against Chaotic creatures.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Lawful'], 1);

        $spell              = new Spell;
        $spell->name        = 'Protection From Elements';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature touched';
        $spell->duration    = '1 minutes';
        $spell->description = '<p>When you cast this spell, choose one of the following elements.</p>
<ul>
    <li>Cold</li>
    <li>Electricity</li>
    <li>Fire</li>
    <li>Light</li>
    <li>Sonic</li>
</ul>
<p>The touched creature gains immunity to the chosen element for the duration. Once this spell prevents 200 points of damage of the select type, this spell ends.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the amount of damage that can be absorbed by +200</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Evocation', 'Cold', 'Electricity', 'Fire', 'Light', 'Sonic'], 3);

        $spell              = new Spell;
        $spell->name        = 'Protection From Evil';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = '1 minute';
        $spell->description = '<p>The target gains a +1 Conditional bonus to their Armor Class against attacks by Evil creatures and on Saves against Evil effects and sources. This bonus increases to +3 against effects from such creatures that would directly control the target and against attacks made by Evil summoned creatures.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Good'], 1);

        $spell              = new Spell;
        $spell->name        = 'Protection From Good';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = '1 minute';
        $spell->description = '<p>This spell functions just like Protection From Evil, except that it works against Good creatures.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Evil'], 1);

        $spell              = new Spell;
        $spell->name        = 'Protection From Law';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = '1 minute';
        $spell->description = '<p>This spell functions just like Protection From Evil, except that it works against Lawful creatures.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Chaotic'], 1);

        $spell              = new Spell;
        $spell->name        = 'Protection From Lycanthropes';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>The target gains a +1 conditional bonus to Armor Class against attacks from Lycanthropes (any creature that is either born a Lycanthrope or is cursed with Lycanthropy, regardless of the physical form they are in). The target is also immune to contracting lycanthropy. This spell does not remove the curse of lycanthropy to those who are already afflicted.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may target an additional 2 creatures</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Lycanthrope'], 2);

        $spell              = new Spell;
        $spell->name        = 'Protection From Negative Energy';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Creature touched';
        $spell->range       = 'Touch';
        $spell->duration    = '30 minutes';
        $spell->description = '<p>This spell protects you against Negative energy and attacks with the Negative type.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Triple the duration</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the number of targets by +3</dd>
    <dt>Heightened (+2)</dt> <dd>This spell will allow you to survive the Negative Energy Plane</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Positive'], 3);

        $spell              = new Spell;
        $spell->name        = 'Protection From Poison';
        $spell->casting     = '1 minute (Material, Somatic)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = '1 hour';
        $spell->description = '<p>For the duration, the target has Advantage on Saves against poison, and it has Resistance to poison damage.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Transmutation', 'Poison', 'Ritual'], 2);

        $spell              = new Spell;
        $spell->name        = 'Protection From Possession';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature or object touched';
        $spell->duration    = '3 hours';
        $spell->description = '<p>This spell protects the target from effects that would control the targets mind (such as Dominate) and Possessions.</p>
<dl>
    <dt>Material Components</dt> <dd>A bit of powdered silver, which is used to mark the target.</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 1);

        $spell              = new Spell;
        $spell->name        = 'Protective Interposition';
        $spell->casting     = 'Reaction';
        $spell->range       = 'Touch';
        $spell->targets     = 'One willing creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>When you cast this spell, you and one willing ally trade positions.</p>
<ul>
    <li>If you occupy different spaces, the smaller of you must occupy at least one square previous occupied by the larger</li>
    <li>The larger creature's new space must completely cover the space previously occupied by the smaller</li>
    <li>You must start and end adjacent to each other</li>
    <li>Your ally gains a +2 Sacred Bonus to AC and on Saves for 1 round</li>
    <li>You gain a +2 Sacred Bonus to Hit until the beginning of your next turn.</li>
</ul>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Psychic Poison';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->area        = '60-ft radius emanation';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You create a field where the use of Psionic Powers is harmful. Any creature that manifests a Psionic Power within the area becomes Sickened: 3 for 1 hour.</p>
<dl>
    <dt>Material Components</dt> <dd>A bit of humanoid brain tissue</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Psychic Turmoil';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->area        = '60-ft radius emanation';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You create a field where creatures with Psionic Power Points loses 5 Power Points whenever they end their turn in the Area.</p>
<dl>
    <dt>Material Components</dt> <dd>A bit of humanoid brain tissue</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 5);

        $spell              = new Spell;
        $spell->name        = 'Punishing Winds';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '100 feet 30-foot radius, 100-foot tall cylinder';
        $spell->duration    = 'Concentration, up to 1 minutes';
        $spell->description = "<p>Violent winds and a powerful downdraft fills the area, forming a cyclone. All flying creatures in the area descend 40 feet. The entire area is Greater Difficult Terrain for Flying creatures and Difficult Terrain for creatures on the ground or Climbing. Any creature pushed into a surface by this spell's winds takes Bludgeoning damage as though it had fallen.</p>
<p>The square at the outside vertical edges of the cylinder prevent creatures from leaving. These squares are Greater Difficult Terrain, and a creature attempting to push through must Succeed at an Athletics check to move in Flight against your spell DC to get through. A creature that Falls ends its current Action but can try again.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 8);

        $spell              = new Spell;
        $spell->name        = 'Purify Food and Drink';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = '1 cubic foot of contaminated food or water';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You remove toxins and contamination from food and drink, making them safe to consume. This doesn\'t prevent natrual decay or spoilage. One cubic foot of liquid is roughly 8 gallons.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Purifying Light';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->targets     = 'One undead';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell works just like Searing Light, except it only affects Undead and the damage is 6D6 Fire and 6D6 Positive.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The fire damage increases by 1D6 and the Positive damage against undead increases by 1D6.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Evocation', 'Fire', 'Positive', 'Good', 'Light'], 6);

        $spell              = new Spell;
        $spell->name        = 'Pyrotechnics';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Choose an area of nonmagical flame that you can see and that fits within a 5-foot cube within range. You can extinguish the fire in that area or choose one of the following effects.</p>
<ul>
    <li><strong>Fireworks</strong> The target fire explodes with a dazzling display of colors. Each creature within 10 feet of the tarfet must succeed on a CON Save or become Blind until the end of your next turn.</li>
    <li><strong>Smoke</strong> Thick black smoke spreads out from the target in a 20-foot radius, moving around corners. The area of the smoke is heavily obscured. The smoke persists for 1 minute or until a strong wind disperses it.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 2);
    }
}
