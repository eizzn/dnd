<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $spell                 = new Spell;
        $spell->name           = 'Cacophony Burst';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->area           = '200 ft cone';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You cause a burst of low, discordant noise to emanate from you in a cone out to the range. All creatures within the area takes 10D6 Sonic damage. This spell cannot penetrate an area of silence.</p>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>As Failure, and also Deafened for 3 rounds.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 4);

        $spell              = new Spell;
        $spell->name        = 'Call Animal';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->range       = '90 feet';
        $spell->duration    = 'Concentration, up to 1 hour or until dismissed';
        $spell->description = "<p>As the spell Summon Animals, except as noted here, and the animal does not disappear when the spell's duration ends. They instead, become free-willed and are considered NPCs under the control of the GM when the duration expires.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened</dt> <dd>Same as the Heightened for Summon Animal</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling'], 4);

        $spell               = new Spell;
        $spell->name         = 'Call Archon Servants';
        $spell->casting      = '4 hours (Material, Somatic, Verbal, Abstinence)';
        $spell->rarity       = 'Rare';
        $spell->requirements = '<dl>
    <dt>Abstinence</dt> <dd>You must abstain from casting any Conjuration spells for 7 days prior to casting this spell.</dd>
</dl>';
        $spell->range        = '30 feet';
        $spell->duration     = '1 year';
        $spell->description  = '<p>You call 1D4 Lanterns archons to your location. They serve you for up to one year as guards, soldiers, spies, or whatever other holy purpose you have. No matter how many times you cast this spell, you can control no more than 7 servants at a time. If you exceed this number, all newly called creatures fall under your control, and any excess servants from previous castings return to their home plane.</p>
<p>You may also recast this spell to reset the duration of all your called servants to one year.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling', 'Celestial', 'Archon', 'Good', 'Lawful', 'Exalted', 'Outsider', 'Ritual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Call Attuned Weapon';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '60 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You telekinetically call your Attuned weapon to your hand with a gesture (so long as the weapon is within reach).</p>
<p>If the weapon is in the possession of someone, you must make an Arcane Skill check vs DC 13 + their WIS bonus. You must have line of sight to your weapon and there must be no barriers between you and your weapon.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 0);

        $spell               = new Spell;
        $spell->name         = 'Call Dretch Horde';
        $spell->casting      = '4 hours (Material, Somatic, Verbal, Sacrifice)';
        $spell->rarity       = 'Rare';
        $spell->requirements = '<dl>
    <dt>Sacrifice</dt> <dd>A living humanoid being, that you must kill sacrificially, and then the summoned fiends devour</dd>
</dl>';
        $spell->range        = '30 feet';
        $spell->duration     = '1 year';
        $spell->description  = '<p>You call 2D4 Dretches from the Abyss to where you are, offering them the soul that you must prepare. In exchange, they will serve you for one year as guards, slaves, or whatever else you need them for. They are profoundly stupid, so you cannot give them more complicated tasks than can be described in about ten words.</p>
<p>No matter how many times you cast this spell, you can control no more than 8 Dretches  If you exceed this number, all the newly called creatures fall under your control, and any excess from previous castings become uncontrolled and immediately return to the Abyss. You choose which creature to release.</p>
<p>You may also recast this spell to reset the duration of all your called slaves to one year.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling', 'Fiend', 'Demon', 'Evil', 'Chaotic', 'Vile', 'Outsider', 'Ritual'], 4);

        $spell               = new Spell;
        $spell->name         = 'Call Eladrin Servants';
        $spell->casting      = '4 hours (Material, Somatic, Verbal, Abstinence)';
        $spell->rarity       = 'Rare';
        $spell->requirements = '<dl>
    <dt>Abstinence</dt> <dd>You must abstain from casting any Conjuration spells for 7 days prior to casting this spell.</dd>
</dl>';
        $spell->range        = '30 feet';
        $spell->duration     = '1 year';
        $spell->description  = '<p>You call 1D4 Coure eladrins to your location. They serve you for up to one year as guards, soldiers, spies, or whatever other holy purpose you have. No matter how many times you cast this spell, you can control no more than 7 servants at a time. If you exceed this number, all newly called creatures fall under your control, and any excess servants from previous castings return to their home plane.</p>
<p>You may also recast this spell to reset the duration of all your called servants to one year.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling', 'Celestial', 'Eladrin', 'Good', 'Chaotic', 'Exalted', 'Outsider', 'Ritual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Call Gelatinous Cube';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You call a Gelatinous Cube to you and it appears anywhere you desire within range. The destination must have enough room for the gelatinous cube to fit. You do not have any control over the gelatinous cube, but it acts with your Initiative at the time you summoned it.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling'], 3);

        $spell               = new Spell;
        $spell->name         = 'Call Guardinal Servants';
        $spell->casting      = '4 hours (Material, Somatic, Verbal, Abstinence)';
        $spell->rarity       = 'Rare';
        $spell->requirements = '<dl>
    <dt>Abstinence</dt> <dd>You must abstain from casting any Conjuration spells for 7 days prior to casting this spell.</dd>
</dl>';
        $spell->range        = '30 feet';
        $spell->duration     = '1 year';
        $spell->description  = '<p>You call 1D4 Musteval guardinals to your location. They serve you for up to one year as guards, soldiers, spies, or whatever other holy purpose you have. No matter how many times you cast this spell, you can control no more than 7 servants at a time. If you exceed this number, all newly called creatures fall under your control, and any excess servants from previous castings return to their home plane.</p>
<p>You may also recast this spell to reset the duration of all your called servants to one year.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling', 'Celestial', 'Guardinal', 'Good', 'Neutral', 'Exalted', 'Outsider', 'Ritual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Call Kolyarut';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->rarity      = 'Rare';
        $spell->duration    = 'No more than 7 days';
        $spell->description = '<p>You request the aid of a Kolyarut Inevitable. If you know a specific Kolyarut, you may include its name in the casting, but a different Kolyarut may show up anyway.</p>
<p>You may ask the Kolyarut one of 2 things.</p>
<ul>
    <li>You may ask it to bear witness to an agreement between two individuals. This agreement must be in writing and both parties must sign the agreement in the presence of the Kolyarut. The Kolyarut then takes a copy of the agreement and departs back to its home plane. The Kolyarut may then be asked at a later time to punish either or both parties if the agreement has been broken.</li>
    <li>You may ask it to punish an oath breaker. You must provide proof that an oath existed and that it has be broken. The Kolyarut will take no more than 7 days in its attempt to punish the oath breaker.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling', 'Lawful', 'Neutral'], 7);

        $spell               = new Spell;
        $spell->name         = 'Call Lemure Horde';
        $spell->casting      = '4 hours (Material, Somatic, Verbal, Sacrifice)';
        $spell->rarity       = 'Rare';
        $spell->requirements = '<dl>
    <dt>Sacrifice</dt> <dd>A living humanoid being, that you must kill sacrificially, and then the summoned fiends devour</dd>
</dl>';
        $spell->range        = '30 feet';
        $spell->duration     = '1 year';
        $spell->description  = '<p>You call 3D4 Lemures from the Nine Hells to where you are, offering them the soul that you must prepare. In exchange, they will serve you for one year as guards, slaves, or whatever else you need them for. They are profoundly stupid, so you cannot give them more complicated tasks than can be described in about five words.</p>
<p>No matter how many times you cast this spell, you can control no more than 12 Lemures  If you exceed this number, all the newly called creatures fall under your control, and any excess from previous castings become uncontrolled and immediately return to the Nine Hells. You choose which creature to release.</p>
<p>You may also recast this spell to reset the duration of all your called slaves to one year.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Devil', 'Calling', 'Evil', 'Fiend', 'Lawful', 'Vile', 'Outsider', 'Ritual'], 4);

        $spell               = new Spell;
        $spell->name         = 'Call Modron Workers';
        $spell->casting      = '4 hours (Material, Somatic, Verbal, Sacrifice)';
        $spell->rarity       = 'Rare';
        $spell->requirements = '<dl>
    <dt>Abstinence</dt> <dd>You cannot cast any Conjuration spells for 7 days after casting this spell.</dd>
    <dt>Status Report</dt> <dd>Each month, one of your monodrones must return to Mechanus to report back what it has seen. It does not return.</dd>
</dl>';
        $spell->range        = '30 feet';
        $spell->duration     = '1 year';
        $spell->description  = '<p>You call 1D6 Monodrones to your location. They serve you for up to one year as guards, soldiers, spies, or whatever lawful purpose you have. No matter how many times you cast this spell, you can control no more than 12 workers at a time. If you exceed this number, all newly called creatures fall under your control, and any excess workers from previous castings return to their home plane.</p>
<p>Monodrones can only perform one simple task at a time, such as "mine this cavern". They will continue to mine in whatever direction they are facing, and if the direction they mine were to change (for whatever reason), they are not able to remember any command that would correct their mining direction. They are not able to remember any other command, such as "if you find any gold, bring it to me".</p>
<p>You may also recast this spell to reset the duration of all your called workers to one year.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling', 'Lawful', 'Neutral', 'Modron', 'Outsider', 'Ritual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Call Lightning';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>A storm cloud appears in the shape of a cylinder that is 10 feet tall with a 60-foot radius, centered on a point you can see 100 feet directly above you. The spell fails if you can't see a point in the air where the storm cloud could appear (for example, if you are in a room that can't accommodate the cloud). When you cast the spell, choose a point you can see within range. A bolt of lightning flashes down from the cloud to that point.</p>
<p>Each creature within 5 feet of that point must make a DEX Save. A creature takes 3d10 lightning damage on a failed save, or half as much damage on a successful one. On each of your turns until the spell ends, you can use your action to call down lightning in this way again, targeting the same point or a different one. If you are outdoors in stormy conditions when you cast this spell, the spell gives you control over the existing storm instead of creating a new one. Under such conditions, the spell's damage increases by 1d10.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D10</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Transmutation', 'Electricity'], 3);

        $spell              = new Spell;
        $spell->name        = 'Call Marut';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->rarity      = 'Rare';
        $spell->duration    = 'No more than 9 days';
        $spell->description = "<p>You request the aid of a Marut Inevitable. If you know a specific Marut, you may include its name in the casting, but a different Marut may show up anyway.</p>
<p>The purpose of a Marut is to confront those (like liches) who would try to deny the grave. If you provide the name and location of an individual who is trying to cheat death, then the Marut will go to confront the individual. After 9 days, success or fail, the Marut is returned to it's home plane.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling', 'Lawful', 'Neutral'], 9);

        $spell              = new Spell;
        $spell->name        = 'Call Mount';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '5 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell duplicates your Divine Mount Class Feature except the mount appears before you immediately at full health regardless of distance or plane (magical effects specifically designed to prevent Conjuration can block this). You must have previous gone through the process of summoning your mount by casting Divine Favor and praying for 10 minutes. You must follow all rules of Divine Mounts.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Familiar'], 2);

        $spell              = new Spell;
        $spell->name        = 'Call Nightmare';
        $spell->casting     = '1 minute (Material, Somatic, Verbal, Sacrifice)';
        $spell->rarity      = 'Rare';
        $spell->duration    = '1 month';
        $spell->description = '<p>You call a Nightmare from the Lower Planes to where you are, offering it the soul that you must prepare. In exchange, the Nightmare serves you for one month.</p>
<p>Multiple castings of this spell replaces the previous Nightmare with a new one.</p>
<dl>
    <dt>Sacrifice</dt> <dd>A living humanoid being, that you must kill sacrificially, and then the Nightmare devours</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling', 'Evil', 'Fiend', 'Vile', 'Outsider', 'Ritual'], 4);

        $spell               = new Spell;
        $spell->name         = 'Call Yugoloth Mercenaries';
        $spell->casting      = '4 hours (Material, Somatic, Verbal, Sacrifice)';
        $spell->rarity       = 'Rare';
        $spell->requirements = '<dl>
    <dt>Payment</dt> <dd>You must pay each Yugoloth 1 gp per Hit Dice per Week in advance.</dd>
</dl>';
        $spell->range        = '30 feet';
        $spell->duration     = 'Various';
        $spell->description  = '<p>You call 1D4 Battleloths from Gehenna to your location. There is an even chance for each battleloth to be any of the known battleloths (Arrow, Axe, Crossbow, Pick, Spiked Chain, Sword). They bargain for the terms of their service, but is usually 1 gp per Hit Dice per week. They will never agree to serve for more than 3 months, as they bore easily. They are only willing to serve as soldiers, never as servants. No matter how many times you cast this spell, you can control no more than 12 Hit Die in total of Battleloths. If you exceed this number, all newly called bargain for their service and any excess Battleloths return to Gehenna.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling', 'Evil', 'Neutral', 'Yugoloth', 'Vile', 'Outsider', 'Ritual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Call Zelekhut';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->rarity      = 'Rare';
        $spell->duration    = 'No more than 5 days';
        $spell->description = "<p>You request the aid of a Zelekhut Inevitable. If you know a specific Zelekhut, you may include its name in the casting, but a different Zelekhut may show up anyway.</p>
<p>The purpose of a Zelekhut is to confront those who would deny justice or seek to flee and escape punishment. If you provide the name and location of such an individual, the Zelekhut will do it's best to confront the individual. After 5 days, success or fail, the Zelekhut is returned to it's home plane.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling', 'Lawful', 'Neutral'], 5);

        $spell               = new Spell;
        $spell->name         = 'Calling';
        $spell->casting      = '1 hour (Material, Somatic, Verbal, Secondary Casters, Sacrifice)';
        $spell->range        = '90 feet';
        $spell->duration     = 'Instantaneous';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>2 Secondary Casters</dd>
    <dt>Sacrifice</dt> <dd>2 CON damage</dd>
</dl>';
        $spell->description = "<p>Uttering a dark incantation, you summon an Outsider from the Outer Planes. You choose the Outsider's type, which must be one of challenge rating 7 or lower. The Outsider appears in an unoccupied space that you can see within range. If you know the name (or the true name), you may speak it as part of casting this spell.</p>
<p>The called Outsider is unfriendly towards you, even if your alignments are similar (since you have disturbed the Outsider from what ever it was doing). If the Outsider has the means to return to its own plane, it may do so.</p>
<p>Most casters of this spell will first prepare a summoning circle, cast with Dimensional Anchor and the proper Runes to trap the Outsider on this plane and within the circle.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the challenge rating by +2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Calling', 'Conjuration', 'Outsider', 'Ritual'], 4);
        $spell->materials()->save(Material::where('name', 'Ruby')->firstOrFail(), ['price' => '999 gp']);

        $spell              = new Spell;
        $spell->name        = 'Calm Air';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '500 feet';
        $spell->area        = 'Cylinder 50 foot radius, 40 feet high';
        $spell->duration    = '1 Hour';
        $spell->description = "<p>This spell calms the air and disperses fog, dust, and other particles.</p>
<p>The wind force in the area is reduced in strength by three steps (to a minimum wind speed of light) and clouds are dispersed, although parts of mon-magical clouds that extend beyond the area are not affected. If a magical cloud or wind's point of origin is inside the area of a Calm Air spell, the whole effect is suppressed; otherwise, only the part inside the area is suppressed. Suppression still counts against the duration of a wind or cloud effect.</p>
<p>Magical wind and cloud effects are suppressed only if you succeed at a Caster Level check (DC 11 + effect's caster level).</p>
<p>You can move the calm air effect by concentrating as an Action.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 4);

        $spell              = new Spell;
        $spell->name        = 'Calm Animals';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '50 feet';
        $spell->area        = '30 feet radius';
        $spell->targets     = 'Animals within the area';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>This spell soothes and quiets animals, rendering them docile and harmless. Only ordinary animals can be affected by this spell. All the subjects must be of the same kind, and no two may be more than 30 feet apart.</p>
<p>The maximum number of HD of animals you can affect is equal to double your caster level.</p>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion', 'Animal'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Calm Emotions';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->area           = '10-foot burst';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>Creatures in the area become calm, depending on their Save.</p>';
        $spell->saves          = "<dl>
    <dt>Critical Success</dt> <dd>The creature is unaffected</dd>
    <dt>Success</dt> <dd>Calming urges give a -1 conditional penalty to attack rolls</dd>
    <dt>Failure</dt> <dd>You suppress emotion effects and prevent the creature from acting hostile. If it is subject to hostility from any other creature, it ceases to be affected by Calm Emotions.</dd>
    <dt>Critical Failure</dt> <dd>As failure, but hostility doesn't end the effect</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Emotion', 'Compulsion'], 2);

        $spell              = new Spell;
        $spell->name        = 'Camouflage';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You change the coloring of your skin and clothing to match the surrounding environment. Throughout the duration of the spell, your coloration changes instantly to match the background of any new environment you enter, with no effort on your part. This effect grants you a +10 circumstance bonus on DEX (Sneak) check.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Capricious Zephyr';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '90 feet';
        $spell->area           = '5-foot diameter sphere';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Concentration, up to 10 rounds';
        $spell->description    = "<p>A ball of swirling wind and dust moves as you direct it with an Action, pushing your foes across the battlefield. From its starting point, a capricious zephyr moves 30 feet per round in the direction you point, regardless of the presence or absence of terrain.</p>
<p>If the sphere enters a space with a creature, it stops moving for that round and tries to bowl over the creature with its wind force. That creature must resist a Bull Rush attack from the capricious zephyr, which has a +6 bonus on the check. If the spell wins the bull rush, it pushes the creature as far as it can in a random direction. Any creature pushed by the sphere must succeed on a DEX Save or fall prone.</p>
<p>A capricious zephyr moves as long as you actively direct it (a move action for you). Otherwise, it merely stays at rest and attempts to bowl over anyone in its square. The spell ends if the distance between the sphere and you ever exceeds the spell's range.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Does not fall Prone</dd>
    <dt>Failure</dt> <dd>Fails Prone</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 3);

        $spell              = new Spell;
        $spell->name        = "Cat's Grace";
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched creature';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>The target gets a +4 enchantment bonus to DEX.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+4)</dt> <dd>The range becomes 30 feet, and you can target up to 10 creatures.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment'], 2);

        $spell                 = new Spell;
        $spell->name           = "Cat's Hex";
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature within range';
        $spell->duration       = '10 minutes';
        $spell->save_attribute = 'DEX';
        $spell->description    = '<p>You curse the target with clumsiness unless they make a success DEX Save.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>Target suffers a -1 penalty to their DEX</dd>
    <dt>Failure</dt> <dd>Target suffers a -4 penalty to their DEX</dd>
    <dt>Critical Failure</dt> <dd>Target suffers a -6 penalty to their DEX</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+4)</dt> <dd>You can target up to 10 creatures</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Catapult';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '60 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>Choose one object weighing 1 to 5 pounds within range that isn't being worn or carried. After casting this spell, you may, with an additional Action, cause the object to fly in a straight line up to 90 feet in a direction you choose before falling to the ground, stopping early if it impacts against a solid surface. If the object would strike a creature, that creature must make a DEX Save. On a failed Save, the object strikes the target and stops moving. When the object strikes something, the object and what it strikes each take 3D8 Bludgeoning damage.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the weight by +5 points and the damage by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Catnap';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '30 feet';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>You make a calming gesture, and up to three willing creatures of your choice that you can see within range fall unconscious for the spell's duration. The spell ends on a target early if it takes damage or someone uses an Action to shake or slap it awake. If a target remains unconscious for the full duration, that target gains the benefit of a short rest, and it can't be affected by this spell again until it finishes a long rest</p>";
        $spell->heightened  = '<dl>
    <dt>Heighten (+1)</dt> <dd>Increase the number targets by one additional target</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Cause Wounds';
        $spell->casting        = 'Somatic Casting or more';
        $spell->range          = 'See text';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'One living creature or one undead creature';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You channel Negative energy to harm the living or heal the undead. You cause 1D8 plus your spell casting ability modifier to a Target or heal that amount to an undead target. The number of Actions you spend when casting this spell determines its targets, range, area, and other parameters.</p>
<dl>
    <dt>Somatic Casting</dt> <dd>The spell has a range of Touch. You must succeed at a melee touch attack to damage a living Target</dd>
    <dt>Somatic Casting, Verbal Casting</dt> <dd>The spell has a Range of 30 feet and requires a Ranged Spell Attack. A living Target must make a CON Save, taking half damage on a Success, no damage on a Critical Success, or double damage on a Critical Failure</dd>
    <dt>Material Casting, Somatic Casting, Verbal Casting</dt> <dd>You disperse Negative energy in a 30-foot aura. This has the same effect as the two-Action version, but it Targets all living and undead creatures in the burst.</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The amount of damage or healing increases to 1D8</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>See text</dd>
    <dt>Failure</dt> <dd>See text</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Harm', 'Necromancy', 'Negative'], 1);

        $spell              = new Spell;
        $spell->name        = 'Caustic Mire';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->range       = '120 feet';
        $spell->area        = '20 foot radius';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>A foul sludge seeps out of the ground, coating the area within range with an acidic slime, roughly the consistency of thick mud. The sludge is sticky, entering any square affected by the Caustic Mire costs 2 squares of movement. In movement that goes through the sludge causes 1D6 Acid damage. Any creature cannot take this damage more than once each turn. The fumes rising out of the sludge is flammable. Igniting this gas causes 3D6 Fire damage to all in the area of the sludge.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Acid damage by +1D6 and the Fire damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Acid'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Caustic Smoke';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->rarity         = 'Rare';
        $spell->save_attribute = 'CON';
        $spell->range          = '120 feet';
        $spell->area           = '20 foot radius';
        $spell->duration       = '3 rounds';
        $spell->description    = '<p>You create a bank of smoke, similar in effect to a fog cloud. In addition to obscureing sight, the cloud deals 1D6 Acid damage per to all creatures within it. The fumes burn the eyes, imposing a -3 penalty to all Attack rolls and Perception checks while in the smoke and for 1 round after. A successful CON Save ignores these penalties for that round.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Ignore the penalties to Attack rolls and Perception checks for that round</dd>
    <dt>Failure</dt> <dd>-3 penalty to all Attack rolls and Perception checks for that round.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Acid'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Celebration';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->area           = '15 foot radius burst';
        $spell->save_attribute = 'INT';
        $spell->targets        = 'One target within range';
        $spell->duration       = 'Concentration';
        $spell->description    = '<p>You cause any creature in the area to feel increasingly more intoxicated the longer you perform a drinking song. You must perform for at least 1 full round to produce the first effects of the Celebration spell. After that, each full round you perform increases the targets intoxication, as described in the table below. A target does not need to remain within the area, but those entering the area after the casting of the spell are not affected. Your targets receive only one Save. The effects last for the duration of your performance. If you stop performing, the effects do not worsen and fade after 1 minute.</p>
<table>
    <thead>
        <tr>
            <th>Round</th>
            <th>Effect</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>None</td>
        </tr>
        <tr>
            <td>2</td>
            <td>-2 Enhancement penalty to DEX, INT, and WIS</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Nauseated</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Helpless</td>
        </tr>
    </tbody>
</table>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Increasingly intoxicated for the duration of the performance</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration of intoxication after the performance ends</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Auditory'], 3);

        $spell              = new Spell;
        $spell->name        = 'Celerity';
        $spell->casting     = 'Immediate Action';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You borrow a slice of time from the future to use now. You gain an Action, but on your next turn, you lose 2 Actions (you actually use those 2 Actions to cast this spell, thus granting you the extra Action in the past). If for some reason you are unable to spend the 2 Actions on your next turn to cast this spell, you suffer 2 CON damage and gain 1 level of Exhaustion.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Time'], 2);

        $spell              = new Spell;
        $spell->name        = 'Celestial Blood';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Nonevil creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>You channel holy power to grant the touched creature the following</p>
<ul>
    <li>Resistance to Acid</li>
    <li>Resistance to Cold</li>
    <li>Resistance to Electricity</li>
    <li>Resistance to Bashing, Slashing, and Piercing</li>
    <li>+4 bonus to Saves vs Poison</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>A vial of Holy Water, with which you anoint the target's head</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Good'], 4);

        $spell              = new Spell;
        $spell->name        = 'Celestial Brand';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One non-good creature';
        $spell->duration    = '1 round';
        $spell->description = '<p>A blazing symbol appears on the target, marking it for divine justice. You and your allies receive a +1 conditional bonus to your attack rolls and skill checks against it. Anytime a good creature damages it, it deals 2D4 additional Good damage. The target is bolstered against castings of Celestial Brand.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The good damage increases by 1D4</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment'], 5);

        $spell              = new Spell;
        $spell->name        = 'Celestial Brilliance';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->area        = '120 foot radius';
        $spell->targets     = 'Object touched';
        $spell->duration    = '1 week';
        $spell->description = '<p>The object touched sheds light brighter than sunlight, channeled directly from Mount Celestia.</p>
<p>The light extends to a 120-foot radius, bright light out to 60 feet further, and dim light out to another 60 feet.</p>
<p>Undead creatures take 2D6 Holy damage each round they begin within the bright light radius. Evil outsiders take 4D6 Holy damage each round they begin within the bright light radius. Celestial Brilliance brought into an area of magical darkness (or vice versa) is temporarily negated, so that the natural light conditions exist in the overlapping areas of effect.</p>
<p>Celestial Brilliance Counters or Dispels any spell with the Darkness Type of equal or lower level.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Light', 'Good'], 4);

        $spell               = new Spell;
        $spell->name         = 'Celestial Fortress';
        $spell->casting      = '10 minutes (Somatic, Verbal, Sacrifice)';
        $spell->range        = 'As the Secure Shelter spell';
        $spell->requirements = '<dl>
    <dt>Sacrifice</dt> <dd>1D2 CON damage</dd>
</dl>';
        $spell->duration     = 'As the Secure Shelter spell';
        $spell->description  = "<p>This spell functions like the Secure Shelter spell, except as noted here.</p>
<p>The structure is a simple flat-roofed fort rather than a cottage. It has a sturdy door and a fireplace but no windows. Access to the roof is through a ladder and a sturdy hatch.</p>
<p>The fortress resonates with the power of your deity's home plane, and it is protected by a Consecrate spell and a Circle of Protection From Evil spell. The fortress's appearance reflects your deity and their realm.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Celestial Roar';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->area           = '40 ft radius emanation centered on you';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>This spell has the same effect as Holy Word spell, as well as 2D6 Sonic damage.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected by the Sonic Damage but still affected by the Holy Word effect</dd>
    <dt>Failure</dt> <dd>Holy Word effect plus the Sonic Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Good', 'Sonic'], 7);

        $spell               = new Spell;
        $spell->name         = 'Ceremony';
        $spell->casting      = '1 hour (Materials, Somatic, Verbal, Secondary Casters)';
        $spell->range        = 'Touch';
        $spell->targets      = 'One creature touched';
        $spell->duration     = 'Instantaneous (see text)';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>1. Must be of your religion.</dd>
</dl>';
        $spell->description = "<p>You perform one of several religious ceremonies. When you cast the ritual, choose one of the following ceremonies, the target of which must be within 10 feet of you throughout the casting.</p>
<dl>
    <dt>Atonement</dt> <dd>You touch one willing creature whose alignment has changed, and you make a DC 20 WIS (Insight) check. On a success, you restore the target to its original alignment</dd>
    <dt>Bless Water</dt> <dd>You touch one vial of water and cause it to become Holy Water.</dd>
    <dt>Coming of Age</dt> <dd>You touch one humanoid old enough to be a young adult. For the next 24 hours, whenever the target makes an ability check, it can roll a D4 and add the number rolled to the ability check. A creature can benefit from this ceremony just once.</dd>
    <dt>Dedication</dt> <dd>You touch one humanoid who would willingly convert to your religion or who wishes to be dedicated to your god's service. For the next 24 hours, whenever the target makes a Save, it can roll a D4 and add the number rolled to the Save. A creature can benefit form this ceremony just once.</dd>
    <dt>Funeral Rite</dt> <dd>You bless one corpse within 5 feet of you. The target can't become undead or be raised as an undead. Anyone trying to disturb the body is struck by a sudden fear and must make WIS Save or be Frightened: 5. This effect does not prevent being brought back to life. If the body is brought back to life, this effect ends.</dd>
    <dt>Investiture</dt> <dd>You touch one willing humanoid. Choose one 1st-level spell you have prepared and expend a spell slot and any material components as if you were casting that spell. The spell has no effect. Instead, the target can cast this spell once without having to expend a spell slot or use material components. If the target doesn't cast the spell within 1 hour, the invested spell is lost.</dd>
    <dt>Marriage</dt> <dd>You touch adult humanoids willing to be bonded together in marriage. For the next 24 hours, each target gains a +2 bonus to AC and saving throws while they are within 30 feet of each other. A creature can benefit from this ceremony just once.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 4);
        $spell->materials()->save(Material::where('name', 'Incense')->firstOrFail(), [
            'price' => '1 gp',
            'meta'  => 'Plus other religious items of your religion',
        ]);

        $spell                 = new Spell;
        $spell->name           = "Chaav's Laugh";
        $spell->casting        = 'Verbal Casting';
        $spell->area           = '40 foot radius';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '10 minute';
        $spell->description    = "<p>You release a joyous, boisterous laugh that strengthens the resolve of good creatures and weakens the resolve of evil creatures.</p>
<p>Good creatures within the spell's area gain the following benefits for the duration of the spell:</p>
<ul>
    <li>+2 morale bonus on attack rolls and Saves against Fear effects</li>
    <li>30 Temporary Hit Points</li>
</ul>
<p>Evil creatures within the spell's area that fail a WIS save take a -2 morale penalty on Attack rolls and saves against Fear effects for the duration of the spell.</p>
<p>Creatures must be able to hear the laugh to be affected by the spell.</p>
<p>Creatures that are neither good nor evil are unaffected by Chaav's laugh.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>-2 Morale penalty on Attack and Saves vs Fear effects</dd>
    <dt>Failure</dt> <dd>Unaffected</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion', 'Exalted', 'Sonic'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Chain Lightning';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '500 ft';
        $spell->save_attribute = 'DEX';
        $spell->targets        = 'One creature, plus any number of additional creatures';
        $spell->spell_creator  = 'Volhm';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You discharge a powerful bolt of lightning at the target, dealing 7D12 electricity damage unless it succeeds at a DEX Save. The electricity arcs to another creature within 30 feet of the first target, jumps to another creature within 30 feet of that target, and so on.</p>
<p>You can end the chain at any point. You can't target the same creature more than once, and you must have line of effect to all targets. Targets after the first take 6D12 electricity damage and must attempt a Save. Roll damage only once and apply it to each target (halving or doubling when necessary).</p>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>The targets are unaffected, and the chain ends</dd>
    <dt>Success</dt> <dd>The targets take half damage</dd>
    <dt>Failure</dt> <dd>The targets take full damage</dd>
    <dt>Critical Failure</dt> <dd>The targets take double damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage to all targets increases by 1D12.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Electricity', 'Evocation'], 6);

        $spell                = new Spell;
        $spell->name          = 'Chain Missile';
        $spell->casting       = 'Verbal Casting or more';
        $spell->range         = '120 feet';
        $spell->spell_creator = 'Matick';
        $spell->targets       = 'Varies';
        $spell->duration      = 'Instantaneous';
        $spell->description   = '<p>You send a dart of force streaking toward a creature that you can see. It automatically hits and deals 1d4+1 Force damage. It then ricochets to another target and deals damage to it. A missile can ricochet up to 3 times, but the next target must be within 30 feet of the previous target. A target cannot be hit by the same missile more than once, but it can be hit by a different missile, if you created more than one.</p>
<p>When Casting this Spell, you can increase the casting by a Material Casting Action, a Somatic Casting Action, or both. For each component you add, increase the number of missiles you shoot by one. You choose the target for each missile individually. Treat this spell as the Magic Missile spell.</p>
<dl>
    <dt>Material Components</dt> <dd>A dagger or dart.</dd>
</dl>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+2)</dt> <dd>You shoot one additional missile with each Action you spend.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Chain Chaos';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Living, intelligent creature touched';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Contagious for 3 days';
        $spell->description    = '<p>This powerful instrument of chaos spreads madness by touch.</p>
<p>You infect the first victim by making a successful Melee Touch Attack. If the target fails a CHA Save, it is Confused. It also becomes contagious for the duration, forcing any it touches to also make a CHA Save or suffer the effects of this spell (as well as becoming contagious). The spell affects a maximum of 100 people, at which point all victims are no longer contagious. All victims remain Confused permanently, but the effect can be removed individually by any means that can remove the Confused Condition, such as Restoration.</p>
<p>Once an individual is cured of this Confusion, they can no longer be affected by the same casting of this spell.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected and immune to this casting of the spell</dd>
    <dt>Failure</dt> <dd>Affected and contagious</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Chaotic'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Chain Sorrow';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting, Ability Damage';
        $spell->range          = 'Touch';
        $spell->targets        = 'One living creature touched';
        $spell->save_attribute = 'WIS';
        $spell->requirements   = '<dl>
    <dt>Ability Damage</dt> <dd>2D4 CHA Damage</dd>
</dl>';
        $spell->duration       = 'See text';
        $spell->description    = '<p>You touch the target and they suffer 2D10 CHA damage. If the target makes a WIS Save, they suffer only half CHA loss and the target is not become the host. If they Fail the Save, they suffer the full CHA loss and become the host of the spell. The next time he touches a friend, loved one, or ally, that individual must make a WIS Save as if they were the target of this spell and if they Fail their Save, they become the new host and the original host no longer can cause others he touches to be affected. An individual cannot become the host again and does not suffer any more CHA loss while under the affects of this spell. Affected targets are can recover loss CHA through natural healing or through any magic that can restore lost Ability Scores.</p>
<p>Once someone makes a Save against this affect, the spell ends and no further individuals can become affected.</p>
<dl>
    <dt>Material Components</dt> <dd>The umbilical cord of a stillborn child</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No affect</dd>
    <dt>Success</dt> <dd>Half CHA loss, but not contagious</dd>
    <dt>Failure</dt> <dd>CHA loss and contagious until afflict someone else</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Evil', 'Transmutation'], 7);

        $spell              = new Spell;
        $spell->name        = 'Chameleon';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Concentration, up to 3 hours';
        $spell->description = "<p>This spell alters the coloration of the recipient's body and clothing so as to blend in with the surrounding background, granting a +10 Circumstance bonus to Steal (Hide) checks.</p>
<p>In areas where the background changes gradually (such as stepping from forest to a green field), the coloration shifts quickly enough to grant the bonus while moving at up to one-half normal Speed. When the background changes abruptly (from forest to stone wall, for example), the target loses the bonus for 1 round while the coloration change takes effect.</p>
<dl>
    <dt>Material Components</dt> <dd>The shed skin of a small lizard</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor'], 2);

        $spell               = new Spell;
        $spell->name         = 'Channel Celestial';
        $spell->casting      = 'Somatic Casting, Verbal Casting';
        $spell->targets      = 'You and 1 willing celestial';
        $spell->range        = 'Touch';
        $spell->requirements = '<dl>
    <dt>Abstinence</dt> <dd>You must abstain from intoxicants and stimulants for 24 hours before casting this spell. You must not be the subject of any other spell at the time you cast this spell. You must not be suffering from any ability damage, disease, or curses.</dd>
    <dt>Sacrifice</dt> <dd>1D3 STR and DEX ability damage</dd>
</dl>';
        $spell->duration     = '3 hours';
        $spell->description  = '<p>You invite a celestial to occupy your body.</p>
<p>The celestial must be present when you cast this spell, it must be willing, and it cannot have a CR higher than 12. It need not have the innate ability to channel its power through mortals, this spell bestows that ability upon the celestial. If you channel a celestial that was summoned to the Material Plane by means of a summon spell, the channeling ends when the duration of the summoning ends, regardless of any remaining duration of this spell.</p>
<ul>
    <li>The Celestials physical form becomes intangible and is absorbed by your body. You cannot use any of the Celestials equipment, as they become intangible along with the Celestial.</li>
    <li>
        <p>When the spell is first cast, you benefit from the following</p>
        <ul>
            <li>Cure Wounds, Heightened +3</li>
            <li>Neutralize Poison</li>
            <li>Remove Disease</li>
            <li>Restoration</li>
        </ul>
    </li>
    <li>For all of your Ability Scores, use the higher between your own and the Celestials</li>
    <li>You gain all the Skills that the Celestial has. Use the higher Skill modifier.</li>
    <li>You gain all the Celestials Resistances and Immunities, as well as their Vulnerabilities.</li>
    <li>You gain all the Movement Speeds that the Celestial has.</li>
    <li>You can cast any spell that the Celestial can cast.</li>
    <li>You can communicate with the Celestial telepathically.</li>
</ul>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the CR limit by +6 and increase the Sacrifice die to the next higher die.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Exalted'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Charm';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One humanoid creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 hour or until dismissed';
        $spell->description    = "<p>To the target, your words are honey and your visage bathed in a dreamy haze. It must attempt a Save, with a +4 circumstance bonus if you or your allies recently threatened it or acted hostile.</p>
<p>You can dismiss charm with a Verbal Casting action. If you act hostile to the target, the spell ends. When the spell ends, the target doesn't necessarily realize it was charmed unless its friendship with you or the actions you convinced it to take clash with its expectations, which could potentially allow you to convince the target to continue being your friend via mundane means.</p>";
        $spell->saves = "<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected and aware you tried to charm it</dd>
    <dt>Success</dt> <dd>The target is unaffected, but thinks your spell was something harmless instead of charm, unless it identifies the spell (usually with Identify Magic)</dd>
    <dt>Failure</dt> <dd>The target's attitude becomes friendly toward you. If it was friendly, it becomes helpful. It can't act hostile toward you</dd>
    <dt>Critical Failure</dt> <dd>Target is helpful and can't act hostile towards you</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+3)</dt> <dd>You can target any creature, not just humanoids.</dd>
    <dt>Heightened (+7)</dt> <dd>You can target up to 10 creatures of any kind.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 1);

        $spell              = new Spell;
        $spell->name        = 'Cheat';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'Self';
        $spell->duration    = '30 minutes or until used';
        $spell->description = '<p>While this spell is in effect, you can alter the probability of a game of chance. This spell can only affect nonmagical games, such as those using cards or dice. It cannot affect a game involving magic, nor a magic item involved in a game of chance (such as a deck of many things).</p>
<p>Whenever a roll is made to determine the outcome of the game, the caster may force a reroll of the outcome and take the better of the two rolls.</p>
<p>The spell alters probability, so there is no subterfuge that another character could notice (except for the casting of the spell itself). To even an astute observer, it appears that the caster is just lucky.</p>
<dl>
    <dt>Material Components</dt> <dd>A pair of dice made from human bones.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 1);

        $spell              = new Spell;
        $spell->name        = "Checkmate's Light";
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>You imbue the touched weapon with a +1 Enhancement bonus to Hit and Damage and gains all the bonus from a Rune of Axiomatic. In addition, you can cause it to cast a red glow as a bright as a torch. Any creature within the radius of its clear illumination (20 feet) gets a +3 morale bonus to Saves against Fear effects.</p>
<p>If the weapon leaves your grasp, the spell effect is suppressed until you or another worshiper of your deity picks it up. Time that passes while the spell's effect are suppressed counts against the duration.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Enhancement bonus by +1. The spell can be Heightened a maximum of 2 times.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Chill Metal';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '60 ft';
        $spell->targets     = 'One metal object within range';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>Choose a manufactured meta object, such as a metal weapon or a suit of heavy or medium armor, that you can see within range. You cause the object to become colder than ice. Any creature in physical contact with the object takes 2D8 Cold damage when you cast the spell. Until the spell ends, you can use an Action to cause this damage again. If a creature is holding or wearing the object and takes the damage from it, the creature must make a CON Save or drop the object if it can. If it doesn't drop the object, it has a -2 penalty on attack rolls and ability checks until the start of your next turn.</p>
<p>This spell Counters and is Countered by Heat Metal.</p>
<dl>
    <dt>Material Components</dt> <dd>A piece of iron and a shard of ice or handful of snow.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by 1D8</dd>
    <dt>Heightened (+1)</dt> <dd>You may target a metal weapon. The weapon also loses 3 Hardness. This spell cannot be Heightened in this way more than once.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold'], 2);

        $spell                = new Spell;
        $spell->name          = 'Chilling Chamber';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Darsson';
        $spell->range         = '60 feet';
        $spell->area          = '50 foot cube';
        $spell->duration      = '8 hours';
        $spell->description   = '<p>You lower the temperature in the affected area to the level of extreme cold (to the point of causing damage). For every minute spent in the area, creautures vulnerable to cold takes 1D6 Cold damage. In addition, a creature must make a CON Save (DC 15 +1 per previous Save) or take 1D4 points of nonlethal Cold damage. Those wearing metal armor, as well as those coming in contact with metal that has been in the area for at least 1 hour, are affected as if a Chill Metal spell.</p>
<p>This spell was originally developed as a means of preserving food (cast inside cellars), but wizards quickly determined that it could be used as a deterrent (on long hallways or in treasure vaults, for example) or for creating a comfortable environment for cold-loving pets.</p>';
        $spell->heightened = '<dl>
    <dt>Permanency (Heightened +2)</dt> <dd>200 gp. 1 CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold', 'Permanency'], 2);

        $spell              = new Spell;
        $spell->name        = 'Choir';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = 'Concentration +5 rounds, maximum 10 minutes';
        $spell->description = "<p>You create spectral accompanists. They appear to be normal performers of any humanoid race (your choice) who back up your performance by playing, dancing, singing, or nay other means you desire. They can also interace with others on a limited basis - smiling, nodding, responding to questions with a few stock phrases, serving as dance partners, and the like.</p>
<p>The illusory performers grant you a +4 Circumstance bonus on Perform checks for the spell's duration.</p>
<dl>
    <dt>Material Components</dt> <dd>A musical instrument that you must use as part of the performance.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Choke';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->rarity         = 'Rare';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature up to size Large within range';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->save_attribute = 'STR';
        $spell->description    = '<p>A pair of invisible hands made of pure force springs into existence around targets throat and begin to strangle them. Creatures without necks, such as beholders, cannot be affected. Creatures that do not need to breathe are affected by the spell, but take no damage.</p>
<p>The target takes 1D4 points of damage per round but gets a STR Save for half damage. All attack rolls and checks the target makes while being choked suffer a -2 penalty. If the check involves speaking, they suffer a -4 penalty instead.</p>
<p>Spellcasting is possible, but the caster must make a Concentration check (DC 10 + Spell Level +1/2 the last damage dealt) or lose the spell. The caster suffers the -2 penalty to the check, and if the spell has a Verbal Component, then they suffer a -4 penalty instead.</p>
<dl>
    <dt>Material Components</dt> <dd>A handkerchief or similar-sized piece of cloth that has been tied in a knot.</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Force'], 2);

        $spell              = new Spell;
        $spell->name        = 'Chromatic Ray';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '90 feet';
        $spell->targets     = 'One creature in range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You fire a ray of energy at a creature that you can see within range. You choose Cold, Electricity, Fire, or Sonic for the type of orb you create, and then make a ranged spell attack against the target. If the attack hits, the creature takes 3D8 damage of the type you chose.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Ray', 'Cold', 'Electricity', 'Fire', 'Sonic'], 5);

        $spell              = new Spell;
        $spell->name        = 'Chronicle';
        $spell->casting     = '1 hour (Material, Somatic, Verbal)';
        $spell->range       = '300 feet';
        $spell->targets     = 'Self';
        $spell->duration    = '3 months';
        $spell->description = '<p>This spell functions just as the spell Journal, except as noted here.</p>
<dl>
    <dt>Materials</dt> <dt>A blank book worth at least 600 gp. All events are magically written in the book. The book can be kept anyway so long as it is within 5 feet of the caster at all times. Detect Magic will reveal the book as magical while the spell is in effect, but not the nature of the magic. The book can hold the contents of 1 casting of this spell before a new book is required.</dt>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Choose Destiny';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>For the duration, you have Advantage on all Attack Rolls, Skill Checks, Ability Checks, and Saves.</p>';
        $helper->addTypesToSpell($spell, ['Divination', 'Enchantment'], 7);

        $spell              = new Spell;
        $spell->name        = 'Circlet of Enervation';
        $spell->casting     = 'Material Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You form a small ring of Negative energy in your hand, which harms neither you nor your equipment. The circlet launches from you hand, and you make a Ranged Spell Attack. On a hit, the target takes 2D6 Negative damage and gains Drained +1 unless the target makes a CON Save. After you hurl the circlet, at the beginning of your next turn, another circlet forms in your hand for the duration of the spell.</p>
<dl>
    <dt>Material Components</dt> <dd>A jet bracelet worth 100 gp</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Does not increase Drained condition</dd>
    <dt>Failure</dt> <dd>Increases Drained condition by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Circle of Death';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->range          = '150 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A sphere of negative energy ripples out in a 60-foot-radius sphere from a point within range. Each creature in that area must make a CON Save or take 8D6 necrotic damage.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>One quarter damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dd> <dd>Full damage</dd>
    <dt>Critical Failure</dd> <dd>As failure and Enfeebled 1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Death'], 6);

        $spell              = new Spell;
        $spell->name        = 'Circle of Protection From Chaos';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->area        = '10-foot-aura centered on a touched creature';
        $spell->duration    = '10 minute';
        $spell->description = '<p>This spell functions as Circle of Protection From Evil, except that it effects Chaotic creatures and effects.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The duration increases to 1 hour.</dd>
    <dt>Heightened (+1)</dt> <dd>The Area becomes a 5-ft X 50-ft Wall</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Lawful'], 3);
        $spell->materials()->save(Material::where('name', 'Silver')->firstOrFail(), [
            'price' => '50 gp',
            'meta'  => 'Powdered, drawn into a 3-ft diameter circle on the floor',
        ]);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => '20']);

        $spell              = new Spell;
        $spell->name        = 'Circle of Protection From Demons';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->area        = '10-foot-aura centered on a touched creature';
        $spell->duration    = '10 minute';
        $spell->description = '<p>This spell functions as Circle of Protection From Evil, except that it effects Demons and their effects.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The duration increases to 1 hour.</dd>
    <dt>Heightened (+1)</dt> <dd>The Area becomes a 5-ft X 50-ft Wall</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Evil', 'Chaotic', 'Demon'], 3);
        $spell->materials()->save(Material::where('name', 'Silver')->firstOrFail(), [
            'price' => '50 gp',
            'meta'  => 'Powdered, drawn into a 3-ft diameter circle on the floor',
        ]);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => '20']);

        $spell                 = new Spell;
        $spell->name           = 'Circle of Protection From Evil';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->area           = '10-foot-aura centered on a touched creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '10 minute';
        $spell->description    = "<p>Creatures in the area gain a +3 conditional bonus to AC against attacks by evil creatures and Saves against evil effects.</p>
<p>Summoned evil creatures can't willingly enter without a WIS Save. Use the first result for repeated attempts.</p>
<p>The circle can also be used to prepare a Summoning Circle, used to trap an outsider that you are about to summon. See Summoning Circle Formula.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The Duration increases to 1 hour.</dd>
    <dt>Heightened (+1)</dt> <dd>The Area becomes a 5-ft X 50-ft Wall</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Good'], 3);
        $spell->materials()->save(Material::where('name', 'Silver')->firstOrFail(), [
            'price' => '50 gp',
            'meta'  => 'Powdered, drawn into a 3-ft diameter circle on the floor',
        ]);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => '20']);

        $spell              = new Spell;
        $spell->name        = 'Circle of Protection From Good';
        $spell->casting     = 'Material Casting Somatic Casting, Verbal Casting';
        $spell->area        = '10-foot-aura centered on a touched creature';
        $spell->duration    = '10 minute';
        $spell->description = '<p>This spell functions as Circle of Protection From Evil, except that it effects Good creatures and effects.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The duration increases to 1 hour.</dd>
    <dt>Heightened (+1)</dt> <dd>The Area becomes a 5-ft X 50-ft Wall</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Evil'], 3);
        $spell->materials()->save(Material::where('name', 'Silver')->firstOrFail(), [
            'price' => '50 gp',
            'meta'  => 'Powdered, drawn into a 3-ft diameter circle on the floor',
        ]);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => '20']);

        $spell              = new Spell;
        $spell->name        = 'Circle of Protection From Law';
        $spell->casting     = 'Material Casting Somatic Casting, Verbal Casting';
        $spell->area        = '10-foot-aura centered on a touched creature';
        $spell->duration    = '10 minute';
        $spell->description = '<p>This spell functions as Circle of Protection From Evil, except that it effects Lawful creatures and effects.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The duration increases to 1 hour.</dd>
    <dt>Heightened (+1)</dt> <dd>The Area becomes a 5-ft X 50-ft Wall</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Chaotic'], 3);
        $spell->materials()->save(Material::where('name', 'Silver')->firstOrFail(), [
            'price' => '50 gp',
            'meta'  => 'Powdered, drawn into a 3-ft diameter circle on the floor',
        ]);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => '20']);

        $spell              = new Spell;
        $spell->name        = 'City Stride';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Self and touched object or touched willing creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You instantly transport you from one community to a second designated community. Each community must be at least as large as a small city (at least 5,000 inhabitants). The destination city may be as distant as 10,000 miles. Interplaner travel is not possible. You must have visited the destination city at some point in the past. You do not have precise control over your arrival point. You arrive at a randomly determined safe location within the borders of the city (not within a building).</p>
<p>You can bring along objects as long as their weight doesn't exceed your maximum load.</p>
<dl>
    <dt>Material Components</dt> <dd>A chip of city stone or brick from the selected destination.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may bring along one additional creature of up to size Large or two creatures of size Medium or smaller. All individuals must be in contact with each other.</dd>
    <dt>Heightened (+1)</dt> <dd>Double the maximum distance.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 5);

        $spell              = new Spell;
        $spell->name        = "City's Might";
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>You draw upon a city and its inhabitants for additional strength. You gain an Enhancement bonus to STR and CON and Damage Reduction based on the size of the city.</p>
<table>
    <thead>
        <tr>
            <th>Size</th>
            <th>Population</th>
            <th>Bonus</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Thorp</td>
            <td>20 - 80</td>
            <td>+1</td>
        </tr>
        <tr>
            <td>Hamlet</td>
            <td>81 - 400</td>
            <td>+2</td>
        </tr>
        <tr>
            <td>Village</td>
            <td>401 - 900</td>
            <td>+3</td>
        </tr>
        <tr>
            <td>Small Town</td>
            <td>901 - 2,000</td>
            <td>+4</td>
        </tr>
        <tr>
            <td>Large Town</td>
            <td>2,001 - 5,000</td>
            <td>+5</td>
        </tr>
        <tr>
            <td>Small City</td>
            <td>5,001 - 12,000</td>
            <td>+6</td>
        </tr>
        <tr>
            <td>Large City</td>
            <td>12,001 - 25,000</td>
            <td>+7</td>
        </tr>
        <tr>
            <td>Metropolis</td>
            <td>25,001 or more</td>
            <td>+8</td>
        </tr>
    </tbody>
</table>
<p>If you are not within 100 feet of a community when the spell is cast, the spell has no effect. If you move more than 100 feet from the community before the duration elapses, the spell's effect ends immediately.</p>
<dl>
    <dt>Material Components</dt> <dd>A chip of city stone or brick.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 6);

        $spell              = new Spell;
        $spell->name        = 'Clairvoyance';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = '500 feet';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You create an Invisible sensor within range in a location familiar to you (a place you have visited or seen before) or in an obvious location that is unfamiliar to you (such as behind a door, around a corner, or in a grove of trees). The sensor remains in place for the Duration, and it can\'t be attacked or otherwise interacted with.</p>
<p>When you cast the spell, you choose seeing or hearing. You can use the chosen sense through the sensor as if you were in its space. As your action, you can switch between seeing and hearing.</p>
<p>A creature that can see the sensor (such as a creature benefiting from See Invisibility or truesight) sees a luminous, intangible orb about the size of your fist.</p>';
        $helper->addTypesToSpell($spell, ['Divination', 'Scrying', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Claws of Darkness';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You draw material from the Plane of Shadow to cause your hands and forearms to elongate and change shape into featureless inky blankness.</p>
<p>Your unarmed strikes are Melee Touch attacks and each deal 1D4 points of Cold damage each. You can extend the claws up to 6 feet, granting you a Melee Reach attack of 10 feet. You automatically deal this damage each round to a Grappled opponent.</p>
<p>Any magic items worn on your hands are temporarily absorbed and cease functioning while the spell is active. You may not cast any spells with a Somatic Casting and you may not hold anything in your hands.</p>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Darkness', 'Shadow'], 2);

        $spell                = new Spell;
        $spell->name          = 'Clean Air';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Akadi';
        $spell->range         = 'Touch';
        $spell->area          = '20-foot radius emanation centered on object touched';
        $spell->targets       = 'Object touched';
        $spell->duration      = '1 minute';
        $spell->description   = '<p>This spell creates an area in which the air remains perfectly clear. This spell banishes smoke, gas, fog, and instantly settles particles such as blowing sand, soot, or grit. Creatures in gaseous form are immediately expelled from its confines, and they cannot enter the area while the spell is in effect. The spell effects the area surrounding the object touched, and it is mobile with the object.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 4);

        $spell              = new Spell;
        $spell->name        = 'Clean Self';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell causes all grime, dirt, and stains to be removed from the clothes you are wearing.</p>
<dl>
    <dt>Material Components</dt> <dd>A bit of soap</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 0);

        $spell              = new Spell;
        $spell->name        = 'Clear Mind';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 rounds';
        $spell->description = '<p>You gain a +4 Sacred bonus to Saves vs Mind Affecting effects. If you are under the influence of a Mind Affecting spell, you immediately get to make a Save against the effect.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may target other creatures with a range of Touch</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 1);

        $spell              = new Spell;
        $spell->name        = 'Clearstone';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->area        = '10 cubic feet';
        $spell->targets     = 'Stone or stone object touched';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>You cause a rock or section of stone to become transparent. This spell affects naturally occurring stone, ore, gemstones in the rough, and even worked stone such as a statue or tunnel wall, but not worked metals, cut gems, or fabricated stone materials such as brick or concrete. Visibility through the affected stone is perfectly clear and limited only by the available light or by objects and creatures embedded in the stone (such as a creature using Meld into Stone). This spell grants line of sight, but not line of effect, through the affected stone. This spell does not change a stone's hardness or other qualities in any way.</p>
<dl>
    <dt>Material Components</dt> <dd>A small, flat piece of glass</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Permanency (Heightened +2)</dt> <dd>5,000 gp. 2 CON damage</dd>
    <dt>Heightened (+1)</dt> <dd>Double the area</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 3);

        $spell              = new Spell;
        $spell->name        = 'Climb';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>The target gains a +10 Enhancement bonus to Athletics (Climb) checks. Unlike the Web spell, this spell does not grant the ability to climb on ceilings or grant a Climb Speed.</p>
<dl>
    <dt>Material Components</dt> <dd>A drop of tree sap or equally sticky material</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Cling';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 minute';
        $spell->description = "<p>This spell allows the touched creature to adhere to any surface, regardless of gravity, winds, weight, or slipperiness. This allows a slipping or leaping being who reaches a smooth stone, soapy, icy, or wet surface to stick fast. The caster can end this effect with a Free Action.</p>
<p>The clinging being chooses a body area (e.g. back, hand, or the fingers of one hand) as the 'holding' surface. As long as the holding surface doesn't move (ie unlike a spider climb spell, the being cannot move about), the clinging effect remains firm, even if the being casts a spell, readies weapons, ties knots, drives in spikes, or performs another activity.</p>
<p>Clinging ends instantly, breaking the spell, if the spell recipient moves about, or the surface clung to is shattered. If the recipient is struck by or burdened by, an object greater weight than its own, a STR check is forced. Failure also means that the clinging ceases. This spell does not lessen falling damage in any way.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by an additional 5 minutes.</dd>
    <dt>Heightened (+1)</dl> <dd>You may target an additional target.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Cloak Astral Pool';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->range       = '60 ft';
        $spell->targets     = 'One Astral Color Pool';
        $spell->duration    = '8 hours';
        $spell->description = '<p>This spell causes an Astral Color Pool on the Astral Plane to seemingly cease to exist. In truth, it is only hidden from view.</p>
<p>The use of this spell does not hide the area around the Pool, it masks only the fact that a Pool is present.</p>
<p>See Invisibility or True Seeing reveals the presence of the Pool, as does Analyze Portal.</p>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Cloak of Chaos';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->area           = '20-foot radius burst centered on you';
        $spell->targets        = 'Creature touched';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>A random pattern of colors surrounds the target, granting the following effects.</p>
<ul>
    <li>+3 Deflection bonus to AC</li>
    <li>+3 Resistance bonus to all Saves</li>
    <li>You are treated as having the Improved Evasion feat against all spells cast by Chaotic outsiders and all spell effects that are from a Chaotic source.</li>
    <li>Protection from Possession and Mental Influence</li>
    <li>If a Lawful creature succeeds on a Melee attack against the target of the Cloak of Chaos, the Lawful creature is Confused for 1 round, WIS Save negates.</li>
</ul>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The Lawful creature is not Confused</dd>
    <dt>Failure</dt> <dd>The Lawful creature is Confused</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Chaotic'], 7);
        $spell->materials()->save(Material::where('name', 'Reliquary')->firstOrFail(), ['price' => '500 gp']);

        $spell              = new Spell;
        $spell->name        = 'Cloak of Dark Power';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>This spell creates a dusky haze around the target. The haze does not interfere with vision, but the target and anything they are wearing or carrying is protected form the effects of full sunlight, even under the open, daytime sky of the surface world.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Shadow'], 1);

        $spell              = new Spell;
        $spell->name        = 'Cloak of Shade';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '3 hours';
        $spell->description = '<p>The target is wrapped in an envelope of perfect shade. Inside the cloak, the temperature is one band lower than the actual temperature, but the spell has no effect on unearthly or hotter heat, nor does it offer any protection against fire damage. The target is treated as though it is in shade, thereby protected from sunburn, able to begin recovering from sun glare, and able to begin healing nonlethal damage taken from exposure to heat.</p>
<p>This spell has no effect on spells and effects with the Light type, and it offers no protection from damage that creatures vulnerable to sunlight might take from the sun.</p>';
        $spell->heightened  = '';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Shadow'], 1);

        $spell              = new Spell;
        $spell->name        = 'Cloak of Shadows';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>You wrap yourself in a protective mantle of semi-real shadow. This grants a number of advantages</p>
<ul>
    <li>Concealment (20% miss chance)</li>
    <li>+3 competence bonus on Stealth checks</li>
</ul>
<p>This shroud of shadows also protects you from direct sunlight, negating sunlight vulnerability, sunlight powerlessness, and similar effects.</p>
<p>When you are in dim light or darkness, the first two benefits increase against foes that don't have darkvision or the see in darkness ability. Such creatures suffer a 50% miss chance (though you don't gain total concealment) and your competence bonus on Stealth checks increases to +5 with respect to such creatures.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Shadow'], 5);

        $spell              = new Spell;
        $spell->name        = 'Cloak of the Sea';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '8 hours';
        $spell->description = "<p>The target retains their form but takes on a blue-green watery appearance. While underwater, the target functions as if affected by Blur, Freedom of Movement, and Water Breathing and doesn't take non-lethal damage from water pressure or hypothermia for the duration of the spell.</p>
<p>When out of the water (or even partially out), the target gains none of these advantages except for Water Breathing.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Cloak of Winds';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'One living creature in range';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You shroud a creature in a whirling screen of strong, howling wind.</p>
<p>The subject is never checked or blown away by strong winds of windstorm or lesser strength (whether natural or magically created), and ranged attack rolls against the subject take a -4 penalty. Tiny or smaller creatures must succeed at an STR Save to successfully touch or attack the subject in melee. Failure knocks the attacker prone and pushes it 10 feet away from the subject. This movement can pass through the squares of other creatures without affecting them and does not provoke Attacks of Opportunity, but the creature takes 3D6 points of Nonlethal Damage.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 3);

        $spell                = new Spell;
        $spell->name          = 'Clone';
        $spell->casting       = '1 hour (Material, Somatic, Verbal)';
        $spell->range         = 'Touch';
        $spell->spell_creator = 'Dethed';
        $spell->duration      = 'Instantaneous';
        $spell->description   = "<p>This spell grows an inert duplicate of a living creature as a safeguard against death. This clone forms inside a sealed vessel and grows to full size and maturity after 120 days; you can also choose to have the clone be a younger version of the same creature. It remains inert and endures indefinitely, as long as its vessel remains undisturbed.</p>
<p>At any time after the clone matures, if the original creature dies, its soul transfers to the clone, provided that the soul is free and willing to return. The clone is physically identical to the original and has the same personality, memories, and abilities, but none of the original's equipment. The original creature's physical remains, if they still exist, become inert and can't thereafter be restored to life, since the creature's soul is elsewhere.</p>
<p><strong>Material</strong> A diamond worth at least 1,000 gp and at least 1 cubic inch of flesh of the creature that is to be cloned, which the spell consumes, and a vessel worth at least 2,000 gp that has a sealable lid and is large enough to hold a Medium creature, such as a huge urn, coffin, mud-filled cyst in the ground, or crystal container filled with salt walter.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ritual'], 8);

        $spell              = new Spell;
        $spell->name        = 'Cloud of Daggers';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '60 feet';
        $spell->area        = '5-foot cube';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>You fill the air with spinning daggers in a cube 5 feet on each side, centered on a point you choose within range. A creature takes 4D4 slashing damage when it enters the spell's area for the first time on a turn or starts its turn there.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +2D4</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 2);

        $spell              = new Spell;
        $spell->name        = 'Cloud Wings';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Winged creature touched';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>This spell increases the targets Fly Speed by 30 feet, so long as that creature flys through the use of physical wings. It has no effect on other modes of movement, nor does it grant a Fly Speed to creatures that don't already have one.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Cloudburst';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = '1 mile';
        $spell->area        = '100 foot radius';
        $spell->duration    = '3 hours';
        $spell->description = '<p>You cause clouds to gather and a heavy rain to fall.</p>
<ul>
    <li>The rain reduces visibility ranges by half, resulting in a -4 penalty on Perception (Spot and Search) and Listen checks.</li>
    <li>Unprotected open flames are automatically extinguished. Protected flames have 50% chance of being extinguished.</li>
    <li>Ranged weapon attacks suffer -4 penalty to Hit</li>
</ul>
<p>This spell does not function indoors, underground, underwater, or in desert climates.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air', 'Water'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Cloudkill';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = "<p>You create a 20-foot-radius Sphere of poisonous, yellow-green fog centered on a point you choose within range. The fog spreads around corners. It lasts for the Duration or until strong wind disperses the fog, ending the spell. Its area is heavily obscured. When a creature enters the spell's area for the first time on a turn or starts its turn there, that creature must make a CON Save. The creature takes 5d8 poison damage on a failed save, or half as much damage on a successful one. Creatures are affected even if they hold their breath or don't need to breathe. The fog moves 10 feet away from you at the start of each of your turns, rolling along the surface of the ground.</p>
<p>The vapors, being heavier than air, sink to the lowest level of the land, even pouring down openings.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>As failure, Sick 1</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase damage by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Poison'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Clutch of Orcus';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 ft';
        $spell->targets        = 'One humanoid in range';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>You created a magical force that grips the Target's heart (or similar vital organ) and begins crushing it. The Target takes 1D6 Bludgeoning damage per round and is Paralyzed while the target is under the effect of this spell.</p>
<p>On the round after the first, and each round after until the spell ends, the target can make a CON Save to end this spell. If the target dies as a result of this spell, their chest ruptures and bursts, and their smoking heart appears in your hand.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Does not take damage and the spell ends.</dd>
    <dt>Failure</dt> <dd>Paralyzed and takes damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Evil'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Cocoon';
        $spell->casting        = '30 minutes (Material, Somatic, Verbal)';
        $spell->range          = 'Touch';
        $spell->targets        = 'Creature touched';
        $spell->save_attribute = 'CON';
        $spell->requirements   = '<dl>
    <dt>Material Components</dt> <dd>50,000 gp worth of rare oils, crushed diamond powder, and rare silk threads from silk worms (only 2,000 gp to cast this spell with an existing cocoon).</dd>
    <dt>Secondary Caster</dt> <dd>At least 2 other spell casters of 6th level. They must succeed a DC 9 Arcana check.</dd>
    <dt>Ability Damage</dt> <dd>5 CON</dd>
</dl>';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You cause silkworm threads to encase your target in a cocoon. While in the cocoon, the subject is Paralyzed. Gradually, the cocoon leeches energy from the subject until they die, at which point the cocoon grants power to its holder.</p>
<p>Once per day, the subject becomes Enervated +1. The target recovers 1 level of Enervation less if they succeed on their daily Save. The amount of Enervation that the cocoon has siphoned is stored by the cocoon (up to 20 levels).</p>
<p>the cocoon has 100 HP and Damage Reduction 10. Hacking off the target eventually breaks the spell and frees the target. If the cocoon is not allowed to complete its draining (20 levels), it becomes useless and conveys no benefits.</p>
<p>However, when the victim's Enervated level is equal to their Character level, or the victim's Enervated level is 10 (whichever happens first), the cocoon falls off and becomes empowered, shrinking to the size of a walnut. you may then carry the cocoon and draw energy from it.</p>
<p>While you are in possession of an empowered cocoon on your person, you may use the levels in the following ways:</p>
<ul>
    <li>Use levels as Spell Points</li>
    <li>Use levels as Spell Points to gain Spell Slots as a Sorcerer</li>
    <li>Use levels as souls to fuel a lich's Phylactery</li>
    <li>As a Double Action, use levels to gain HPs. Treat 1 level as a 1st level Cure Wounds spell cast with one Action. You may spend up to 3 levels to cast a Cure Wounds spell as a 1st level spell that was cast with 3 Casting Actions.</li>
    <li>Use 5 levels to reduce a targets age by 1 year (this requires a Ceremony spell and 4 hours). You may spend up to 20 levels with one ceremony</li>
</ul>
<p>You may have only one cocoon at a time. You may refuel an existing cocoon by casting this spell on another target.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Evil'], 8);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 12]);

        $spell              = new Spell;
        $spell->name        = 'Cold Snap';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->area        = '1 mile radius centered on you';
        $spell->duration    = 'Concentration, up to 4 hours';
        $spell->description = '<p>You cause a powerful cold front to form, lowering the affected area by 50 degrees Fahrenheit, to a maximum low of -20 degrees Fahrenheit. Spells with the Cold type deal an extra 1 point of damage per die when cast in the area.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Cold'], 5);

        $spell              = new Spell;
        $spell->name        = 'Color';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->area        = '30 square feet';
        $spell->duration    = 'Permanent';
        $spell->description = "<p>This spell allows you to effect a permanent color change in cloth, leather, or similar substance. The speed at which the change takes place is variable. With a gesture, you can instantly change an entire piece to a single hue. If several colors are desired, you must trace with your finger the areas you intend to color and picture the desired hue for the area outlined. The color changes accordingly. Any color or shade may be created, including metallic tints, though the latter cannot actually consist of precious metals. Any color change must be done within two hours, the spell's maximum duration. The effect is permanent until dispelled.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the area affected</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Color Spray';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->area           = '15-foot cone';
        $spell->save_attribute = 'INT';
        $spell->duration       = 'One or more rounds (see below)';
        $spell->description    = '<p>Swirling colors affect viewers base on their Saves.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>The target is unaffected</dd>
    <dt>Failure</dt> <dd>Blinded for 1 round, dazzled for 4 rounds</dd>
    <dt>Critical Failure</dt> <dd>Stunned for 1 round, blinded for 4 rounds</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Visual', 'Light'], 1);

        $spell              = new Spell;
        $spell->name        = 'Combat Quickness';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You gain a sudden boost in awareness. Your Initiative position is improved by +1. If this spell is cast with a 1st Level Spell Slot or higher, the bonus becomes +5.</p>';
        $helper->addTypesToSpell($spell, ['Divination'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Command';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = "Until the end of the target's next turn.";
        $spell->description    = "<p>You shout a command that's hard to ignore. You can command the target to approach you, run away (as if it had the fleeing condition), drop what it's holding, drop prone, or stand in place. The effects depend on the target's WIS Save.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The target is unaffected</dd>
    <dt>Failure</dt> <dd>The target spends its first Action doing as you commanded, and the spell is dismissed</dd>
    <dt>Critical Failure</dt> <dd>The target does as you commanded, spending as many Actions as possible doing so, and does nothing else</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+4)</dt> <dd>You can target up to 10 creatures.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Auditory', 'Illusion', 'Lingual', 'Compulsion'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Command Undead';
        $spell->casting        = 'Somatic Casting or more';
        $spell->range          = 'See text';
        $spell->save_attribute = 'CHA';
        $spell->targets        = 'One or more undead creature';
        $spell->duration       = 'Based on Save (See text)';
        $spell->description    = "<p>You channel negative energy in an attempt to control an undead or a group of weak unintelligent undead. The number of Actions you spend when casting this spell determines its targets, range, area, and other parameters. You can control a maximum of twice your caster level in combined Challenge Rating of undead.</p>
<dl>
    <dt>Somatic Casting</dt> <dd>The spell has a range of touch and you can target only one undead. You must succeed at a melee touch attack do attempt to control the undead. The maximum Challenge Rating of the undead you can control is equal to your caster level -2.</dd>
    <dt>Somatic Casting, Verbal Casting</dt> <dd>As the single Action version of this spell except the spell has a range of 30 feet and doesn't require a touch attack when targeting the undead.</dd>
    <dt>Somatic Casting, Verbal Casting, Material Casting</dt> <dd>You disperse negative energy in a 30-foot aura. This has the same effect as the two-Action version, but it targets all undead creatures in the burst starting with the lowest Challenge Rating undead first. If there are multiple undead with the lowest challenge rating, you choose which to affect first.</dd>
</dl>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>You command the undead until the beginning of your next turn</dd>
    <dt>Failure</dt> <dd>You command the undead for 10 minutes</dd>
    <dt>Critical Failure</dt> <dd>You command the undead for 1 hour</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>The Duration becomes the next time frame better. Turn becomes minute, minute becomes hour and hour becomes day.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative', 'Evil', 'Undead'], 2);

        $spell               = new Spell;
        $spell->name         = 'Commune';
        $spell->casting      = '1 day (Material, Somatic, Verbal, Secondary Caster)';
        $spell->targets      = 'Self';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least one other caster of the same religion</dd>
</dl>';
        $spell->duration    = 'Up to 10 minute';
        $spell->description = "<p>You contact your deity or a divine proxy and ask up to three questions that can be answered with a yes or no. You must ask your questions before the spell ends. You receive a correct answer for each question.</p>
<p>Divine beings aren't necessarily omniscient, so you might receive \"unclear\" as an answer if a question pertains to information that lies beyond the deity's knowledge. In a case where a one-word answer could be misleading or contrary to the deity's interests, the GM might offer a short phrase as an answer instead.</p>
<p>If you cast the spell two or more times before finishing your next long rest, there is a cumulative 25 percent chance for each casting after the first that you get no answer. The GM makes this roll in secret.</p>";
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 5);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 10]);

        $spell               = new Spell;
        $spell->name         = 'Commune Archetype';
        $spell->casting      = '1 minute (Verbal)';
        $spell->requirements = 'Caster must be of draconic ancestry';
        $spell->targets      = 'Self';
        $spell->duration     = '1 minute';
        $spell->description  = "<p>You contact either Bahamut or Tiamat and ask a single question that can be answered with one sentence. You must ask your question before the spell ends. If the deity knows the answer, then the response will be truthful. If the deity does not know the answer, then the response will be incorrect.</p>
<p>When you finish casting this spell, make a DC 15 INT Save. On a Failure, you take 10D10 Psychic damage are insane until you finish a Long Rest. While insane, you can't understand what other creatures say, can't read, and speak only in gibberish. A Restoration spell Heightened +2 cast on you ends this effect.</p>";
        $helper->addTypesToSpell($spell, ['Divination', 'Dragon', 'Ritual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Commune with City';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You become one with a community that you are in, attaining knowledge of the surrounding community.</p>
<p>You instantly gain knowledge of as many as three facts from among the following subjects:</p>
<ul>
    <li>The population</li>
    <li>The dominate race within the community and the percentage of the population it encompasses</li>
    <li>Any given race's percentage of the total population</li>
    <li>The level of the highest-level character in a given class</li>
    <li>The type and alignment of one of the community's power centers (if the community has more than one, roll randomly)</li>
    <li>A significant economic factor affecting trade within the city</li>
    <li>A major news item within the city</li>
</ul>";
        $helper->addTypesToSpell($spell, ['Divination'], 4);

        $spell              = new Spell;
        $spell->name        = 'Commune with Earth';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You can ask questions of and receive answers from natural or worked stone. While stone is not intelligent, you speak with the natural spirits of the stone, which have a personality colored by the type of stone, as well as by the type of structure the stone is part of, for worked stone. A stone\'s perspective, perception, and knowledge give it a worldview different enough form a human\'s that it doesn\'t consider the same details important. Stones can mostly answer questions about those that touched them in the past and what is concealed beneath them.</p>';
        $helper->addTypesToSpell($spell, ['Divination', 'Earth'], 6);

        $spell               = new Spell;
        $spell->name         = 'Commune with Nature';
        $spell->casting      = '1 day (Material, Somatic, Verbal, Secondary Caster)';
        $spell->targets      = 'Self';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least one other caster of the same organization</dd>
</dl>';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You briefly become one with nature and gain knowledge of the surrounding territory. In the outdoors, the spell gives you knowledge of the land within 3 miles of you. In caves and other natural underground settings, the radius is limited to 300 feet. The spell doesn\'t function where nature has been replaced by construction, such as in dungeons and towns.</p>
<p>You instantly gain knowledge of up to three facts of your choice about any of the following subjects as they relate to the area:</p>
<ul>
    <li>Terrain and bodies of water</li>
    <li>Prevalent plants, minerals, animals, or people</li>
    <li>Powerful celestials, fey, fiends, elementals, or undead</li>
    <li>Influence from other planes of existence</li>
    <li>Buildings</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 5);
        $spell->skills()->save(app()->skills['Nature'], ['dc' => 10]);

        $spell              = new Spell;
        $spell->name        = 'Commune With Spirit';
        $spell->casting     = '10 minutes (Somatic, Verbal, Material)';
        $spell->range       = '10 ft';
        $spell->targets     = 'One spirit';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>You contact any local spirit creature with 4 or fewer HD and can ask it up to 5 questions. You must know the identity of the spirit, and you must be within 10 feet of the spirit's location.</p>
<p>The spirit's knowledge is limited to matters within its immediate area (so that the spirit of a great tree in a village cannot answer questions about events outside the village, for example), and you must ask questions that could typically have one-word answers. \"Unclear\" is a legitimate answer, because spirits are not necessarily omniscient, but in cases where a one-word answer would be misleading or contrary ot the spirit's interest, the DM can respond with a short phrase (five words or fewer) instead.</p>
<p>If the spirit has been subject to this spell within the past week, this spell fails.</p>
<p>If the spirit's alignment is different from yours, it gets a WILL Save to resist the spell.</p>
<p>Unasked questions are wasted if the spell's duration ends.</p>
<dl>
    <dt>Material Components</dt> <dd>Incense and a small offering with 10 gp.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the max HD by +2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual', 'Spirit'], 3);

        $spell              = new Spell;
        $spell->name        = 'Commune with Texts';
        $spell->casting     = '1 minute (Somatic)';
        $spell->range       = '30 feet';
        $spell->targets     = 'A collection of texts';
        $spell->duration    = '6 Hours';
        $spell->description = "<p>You quickly absorb the knowledge in the target, which can be any assortment of books, scrolls, or other texts. During the spell's duration, you can search the texts and immediately find the most relevant information regarding any topic the collection holds, potentially including singling out spellbooks or scrolls containing individual or particular types of spells. You can attempt Knowledge checks related to the collection's topics as if you were trained in those skills, and you know whether the collection contains any information about which you failed a Knowledge check in the past 24 hours. The bonus on Knowledge checks granted by the collection of texts (if any) increases by 2.</p>";
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Compel';
        $spell->casting        = '1 minute (Somatic, Verbal, Ability Damage, Secondary Casters)';
        $spell->range          = 'Touch';
        $spell->targets        = 'One touched creature';
        $spell->requirements   = '<dl>
    <dt>Ability Damage</dt> <dd>2 CON damage</dd>
    <dt>Secondary Casters</dt> <dd>At 2 additional casters who must cast the Command spell</dd>
</dl>';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Permanent';
        $spell->description    = "<p>You force the target to change alignment, specifying the target's new alignment. Creatures whose alignments are listed as 'always' a specific alignment, and characters who would lose class abilities if they changed to the alignment you specify, gain a +4 bonus on their Save against the spell.</p>
<p>Outsiders with an alignment-based type modifier (Chaotic, Evil, Good, or Lawful) are immune to the effects of this spell.</p>
<p>Alteration in alignment is mental as well as moral, and the individual changed by the spell thoroughly enjoys his new outlook. If the subject's comrades have an alignment outlook that differs significantly from his, he may abandon them or even take actions against them. This is up to the discretion of the DM; the spell has no effect on determining this, as it is more a matter of conscience.</p>
<p>Another compel spell, a wish, or a miracle is required to reverse the effects of the spell; the subject makes no attempt to return to the former alignment. In fact, he views the prospect with horror and avoids it in any way possible. Thus, if a spellcaster were to cast compel upon him again, causing him to revert to his former alignment or following a new one, he would again receive a saving throw as outlined above.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The spell fails</dd>
    <dt>Success</dt> <dd>The spell succeeds. You get another Save after 3 days.</dd>
    <dt>Failure</dt> <dd>The spell succeeds. You get another Save after 1 year.</dd>
    <dt>Critical Failure</dt> <dd>The spell succeeds.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Illusion', 'Compulsion'], 8);

        $spell              = new Spell;
        $spell->name        = 'Compelled Duel';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>You attempt to compel a creature into a duel.</p>
<p>One creature that you can see within range must make a WIS Save. On a failed save, the creature is drawn to you, compelled by your divine demand. For the duration, it has disadvantage on attack rolls against creatures other than you, and must make a WIS Save each time it attempts to move to a space that is more than 30 feet away from you; if it succeeds on this Save, this spell doesn't restrict the target's movement for that turn.</p>
<p>The spell ends if you attack any other creature, if you cast a spell that targets a hostile creature other than the target, if a creature friendly to you damages the target or casts a harmful spell on it, or if you end your turn more than 30 feet away from the target.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 1);

        $spell                = new Spell;
        $spell->name          = 'Comprehend Language';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->range         = '30 feet';
        $spell->targets       = 'One creature';
        $spell->spell_creator = 'Dace';
        $spell->duration      = '1 hour';
        $spell->description   = "<p>The target can understand the meaning of a single language it is hearing when you cast the spell. This doesn't let it understand codes, language couched in metaphor, and the like.</p>";
        $spell->heightened    = '<dl>
    <dt>Heightened (+2)</dt> <dd>You can target up to 10 creatures, and targets can also speak the language.</dd>
    <dt>Permanency (Heightened +3)</dt> <dd>2,500 gp. 4 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Enchantment', 'Permanency'], 2);

        $spell              = new Spell;
        $spell->name        = 'Comprehension';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You may read any language</p>';
        $spell->heightened  = "<dl>
    <dt>Heightened (+1)</dt> <dd>The spell's range is touch and it targets 1 creature.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Divination', 'Enchantment'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Compulsion';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>Creatures of your choice that you can see within range and that can hear you must make a WIS Save. A target automatically succeeds on this saving throw if it can't be charmed.</p>
<p>Until the spell ends, you can use a bonus action on each of your turns to designate a direction that is horizontal to you. Each affected target must use as much of its movement as possible to move in that direction on its next turn. It can take its action before it moves. After moving in this way, it can make another WIS saving to try to end the effect. A target isn't compelled to move into an obviously deadly hazard, such as a fire or pit, but it will provoke opportunity attacks to move in the designated direction.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>Affected as noted</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 4);

        $spell              = new Spell;
        $spell->name        = 'Conceal Temporal Anomaly';
        $spell->casting     = '4 rounds (Material, Somatic, Verbal)';
        $spell->targets     = '1 Anomaly';
        $spell->rarity      = 'Rare';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>You split the flow of time around a temporal disturbance. This reduces the turbulence it causes and shields it from magical detection. A Detect Temporal Anomaly (or an item with the same effect) has any chance of detecting the hidden effect, but the base chance is lowered by 25%. Other detection spells (True Seeing, Detect Invisibility, etc) also have a 25% chance to detect the Anamoly, but those uninitiated in the mysteries of Chronomancy are unlikely to know what it is they are seeing.</p>
<p>Vortices can be hidden in this way, but the forces involved become extremely hazardous. You must make a WIS Save with a -4 penalty. Failure destroys the vortex, ages you 1D20 years, and reduces your WIS permanently by 1 point.</p>
<p>This spell cannot be used cumulatively with itself.</p>
<dl>
    <dt>Material Components</dt> <dd>A glass bulb filled with the blood of a vortex spider.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Chronomancy'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Condemnation';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'One outsider';
        $spell->save_attribute = 'WILL';
        $spell->duration       = '1 round';
        $spell->description    = '<p>You speak words of power, forcing the outsider to shrink with horror. The outsider targeted by this spell must succeed on a WILL Save or be Stunned for 1 round suffer a -5 penalty to all Saves for the next 1 minute.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No affect</dd>
    <dt>Failure</dt> <dd>Stunned: 1 and a -5 penalty to all Saves for 1 minute.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Cone of Cold';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>Icy cold rushes forth from your hands. You deal 11D6 Cold damage to creatures in the area; they must each attempt a Save. When Casting this Spell, you can add a Material Casting action to include a small crystal or icicle. If you do, increase the area to a 60-foot cone.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The creature takes no damage</dd>
    <dt>Success</dt> <dd>The creature takes half damage</dd>
    <dt>Failure</dt> <dd>The creature takes full damage</dd>
    <dt>Critical Failure</dt> <dd>The creature takes double damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>heightened (+1)</dt> <dd>The damage increases by 2D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Cold', 'Evocation'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Cone of Dimness';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->area           = '50 ft Cone-shaped burst';
        $spell->save_attribute = 'INT';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>Splaying your fingers, you cause all intelligent creatures in the area to make an INT Save against this illusion. Failure causes the creature to believe that he is in complete darkness. Whenever an intelligent creature enters the cone area, they must make another INT Save. This darkness defeats all vision based Perception (even spells and magical effects that grant enhanced vision)</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>This spell no longer affects you, even if you leave and reenter the area.</dd>
    <dt>Success</dt> <dd>Until the beginning of your next turn, you believe that you are in dim light, causing the target to suffer a 20% miss chance on all attacks.</dd>
    <dt>Failure</dt> <dd>Until the beginning of your next turn, you believe that you are in complete darkness. This effect is all in the mind, so even creatures with Darkvision believe that they cannot see anything.</dd>
    <dt>Critical Failure</dt> <dd>Until the spell ends, you believe that you are in complete darkness, even if you have Darkvision.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Phantasm'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Confusion';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 minute or until dismissed';
        $spell->description    = "<p>You befuddle your target with strange impulses, causing it to act randomly. The effects are determined by the target's WIS Save.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>Babbles incoherently and is slowed 1 for 1 round</dd>
    <dt>Failure</dt> <dd>Confused for 1 minute. It can attempt a new Save at the end of each of its turns to end the confusion</dd>
    <dt>Critical Failure</dt> <dd>Confused for 1 minute with no Save to end early</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The Duration becomes 10 minutes</dd>
    <dt>Heightened (+2)</dt> <dd>THe Duration becomes 1 hour</dd>
    <dt>Heightened (+3)</dt> <dd>The Duration becomes 1 day</dd>
    <dt>Heightened (+4)</dt> <dd>The Duration becomes Permanent. The effect cannot be removed with Remove Curse. Restoration, Heal and more powerful spells can end this effect.</dd>
    <dt>Heightened (+4)</dt> <dd>You can Target up to 10 creatures</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Disorienting'], 4);

        $spell              = new Spell;
        $spell->name        = 'Conjure Instrument';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '0 ft';
        $spell->duration    = '30 minutes';
        $spell->description = "<p>This spell summons one handheld musical instrument of your choice. The instrument appears in your hands or at your feet (your choice). The instrument is typical for its type. Only one instrument appears per casting, and it will play only for you.</p>
<p>You can't summon an instrument too large to be held in two hands (such as a harp, piano, harpsichord, alphorn, or pipe organ)</p>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 0);

        $spell              = new Spell;
        $spell->name        = 'Conjure Weapon';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '0 ft';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You conjure a nonmagical light weapon sized for you. The weapon is normal in every respect. It can't be made of any unusual material, nor is it masterwork.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Consecrate';
        $spell->casting        = '3 days (Material, Somatic, Verbal, Skill Check, Ability Damage, Secondary Casters)';
        $spell->range          = '60 feet';
        $spell->area           = '40-foot-radius burst around an alter, shrine, or fixture of your deity';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 year';
        $spell->requirements   = '<dl>
    <dt>Ability Damage</dt> <dd>1 CON damage</dd>
    <dt>Secondary Casters</dt> <dd>At least 2 additional members of your faith. They are not required to cast any spells</dd>
</dl>';
        $spell->description = "<p>You Consecrate a site to your deity, chanting their praises and creating a sacred space. Worshipers of your deity in the area gain the follwing benefits.</p>
<ul>
    <li>+3 sacred bonus to Channel Divinity checks.</li>
    <li>+1 conditional bonus to attack rolls, skill checks, Saves, and Perception checks.</li>
    <li>Creatures anathema to your deity in the area (such as undead for Kelemvor or Lathander) take a –1 conditional penalty to attack rolls, skill checks, Saves, and Perception checks.</li>
    <li>Attacks made by worshipers of your deity within the area count as having your deity's alignment for the purpose of an enemy's weakness to aligned attacks or regeneration deactivated by aligned attacks.</li>
    <li>Any creature slain within the area cannot be turned into an Undead.</li>
</ul>
<p>If the Consecrated area contains an alter, shrine, or other permanent fixture dedicated to your deity, the modifiers given above are doubled. You cannot Consecrate an area with a fixture of a deity other than your own patron.</p>
<p>If the area does contain an alter, shrine or other permanent fixture dedicated to a power other than your own, the Consecrate spell instead curses the area, cutting off its connection with the associated power. This secondary function, if used, does not grant the bonuses an penalties given above. The area must be destroyed and rebuilt to your patron before Consecrating the area to your patron.</p>
<p>Consecrate dispels Desecrate.</p>";
        $spell->saves = "<dl>
    <dt>Critical Success</dt> <dd>The Consecrate succeeds and either lasts for 10 years instead of 1 or covers an area with twice the radius. Occasionally, with your deity's favor, this might produce an even more amazing effect, such as a permanent Consecration area or an entire cathedral covered in a Desecrate effect</dd>
    <dt>Success</dt> <dd>The Consecration succeeds</dd>
    <dt>Failure</dt> <dd>The Consecration fails</dd>
    <dt>Critical Failure</dt> <dd>The Consecration fails spectacularly and angers your deity, who sends a sign of displeasure. You and other worshipers of your deity can't attempt to consecrate the same site again for at least 1 year</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Good', 'Enchantment', 'Ritual'], 2);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 12]);
        $spell->materials()->save(Material::where('name', 'Incense')->firstOrFail(), ['price' => '200 gp']);

        $spell               = new Spell;
        $spell->name         = 'Consecrate Battlefield';
        $spell->casting      = '1 hour (Somatic, Verbal, Material, Skill Check, Ability Damage, Secondary Casters)';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>2 CON Damage</dd>
    <dt>Secondary Caster</dt> <dd>At least 1 additional member of your faith who must cast Consecrate (Since the Consecrate spell requires 2 additional casters, this means you require 3 Secondary Casters, one of which must cast the Consecrate Spell). Casting the Consecrate spell in this way changes the Casting Time to the amount of time required to cast this spell.</dd>
</dl>';
        $spell->range        = '100 feet';
        $spell->area         = '100 foot radius emanation';
        $spell->duration     = '10 days';
        $spell->description  = '<p>This spell blesses a large area with positive energy, as the Consecrate Spell.</p>
<p>Consecrate Battlefield dispels Desecrate Battlefield</p>
<dl>
    <dt>Material Components</dt> <dd>A vial of holy water and Burned incense worth at least 200 gp.</dd>
</dl>';
        $spell->saves        = '<dl>
    <dt>Critical Success</dt> <dd>If the Secondary Caster also makes a Critical Success, then the duration becomes Permanent. If the Secondary Caster Succeeds, then the Duration is Tripled. If the Secondary Caster Fails, then the duration is Doubled. If the Secondary Caster Critically Fails, then the Duration is normal.</dd>
    <dt>Success</dt> <dd>If the Secondary Caster makes a Critical Success, then the Duration is increased by 5 days. If the Secondary Caster Fails, then the duration is reduced by 3 days. If the Secondary Caster Critically Fails, then the duration is reduced by 7 days.</dd>
    <dt>Failure</dt> <dd>If the Secondary Caster makes a Critical Success, then the Duration is 5 days. Otherwise, the spell fails</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Good', 'Enchantment', 'Ritual'], 6);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 15]);
        $spell->materials()->save(Material::where('name', 'Incense')->firstOrFail(), ['price' => '2000 gp']);

        $spell               = new Spell;
        $spell->name         = 'Consume Likeness';
        $spell->casting      = '10 minutes (Somatic, Verbal, Ability Damage)';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>6 WIS Damage</dd>
</dl>';
        $spell->targets      = 'Self';
        $spell->duration     = 'Permanent';
        $spell->description  = "<p>You consume the flesh of a recently dead (less than 1 hour) corporeal humanoid as you cast this spell. Once the spell is cast successfully, you gain the Shapechanger type (if you do not already have that type), and you permanently gain the ability to, as a Triple Action, assume the likeness of the humanoid that you consumed along with the following while you are shape-changed into the consumed creatures form.</p>
<ul>
    <li>If the consumed creature had wings, then you have wings when you change into the likeness of the consumed creature as well as a Fly Speed equal to the consumed creatures Fly Speed.</li>
    <li>If the consumed creature had gills, then you have gills when you change into the likeness of the consumed creature as well as a Swim Speed equal to the consumed creatures Swim Speed.</li>
    <li>You may increase in mass to match the mass of the consumed creature, up to double your normal mass.</li>
    <li>You may decrease in mass to match the mass of the consumed creature, up to half your normal mass.</li>
    <li>You may grow in height to match the consumed creature's height, up to 1 1/2 times your normal height.</li>
    <li>You may shrink in height to match the consumed creature's height, up to half your normal height.</li>
    <li>You gain any non-magical senses that the consumed creature had (Darkvision, Tremor Sense, Scent, etc)</li>
    <li>You use the consumed creatures STR, DEX, and CON (even if they are lower than your own)</li>
    <li>You continue to use your own INT, WIS, CHA</li>
    <li>You do not gain any knowledge from the consumed creature, nor do you gain any Skills, Feats, Class abilities, or Supernatural abilities.</li>
    <li>The transformation only affects your body. Any equipment is unaffected.</li>
</ul>
<p>If you take damage while shape-changed, you must make a Concentration check or lose 3 Actions while you transform back into your normal form. If you become unconscious or die, you automatically change back to your normal form.</p>
<p>You may change back to your normal form as a Triple Action.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Transmutation', 'Evil'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Consumptive Field';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->area           = '30-foot radius, centered on you';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 10 rounds';
        $spell->description    = '<p>When you cast this spell, you create a field of Negative energy centered on you and follows you around. All living creatures that starts their turn within the area takes 1D8 Negative energy damage unless they make a CON Save. For each creature that takes damage, you heal 4 Hit Points of damage. If you heal more than your maximum Hit Points, then you gain a maximum of 15 Temporary Hit Points.</p>
<p>Any creature that starts their turn in the area that is at 0 Hit Points immediately gains 2 levels of Dying (no Save).</p>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by 1D8</dd>
    <dt>Heightened (+2)</dt> <dd>Double the range</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Evil', 'Death'], 3);

        $spell                = new Spell;
        $spell->name          = 'Contact Other Plane';
        $spell->casting       = '1 minute (Verbal)';
        $spell->spell_creator = 'Chever';
        $spell->targets       = 'Self';
        $spell->duration      = '1 minute';
        $spell->description   = "<p>You mentally contact a demigod, the spirit of a long-dead sage, or some other mysterious entity from another plane. Contacting this extraplanar intelligence can strain or even break your mind. When you cast this spell, make a DC 15 INT Save. On a failure, you take 6D6 Mental damage and are insane until you finish a long rest.</p>
<p>On a successful save, you can ask the entity up to five questions. You must ask your questions before the spell ends. The GM answers each question with one word, such as \"yes,\" \"no,\" \"maybe,\" \"never,\" \"irrelevant,\" or \"unclear\" (if the entity doesn't know the answer to the question). If a one-word answer would be misleading, the GM might instead offer a short phrase as an answer.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Ritual'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Contagion';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'One creature';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>Your touch afflicts the target with Goblin Pox. The effect is based on the result of the target's Save.</p>
<p>Use the Disease rules. Only diseases with the Spell type can be afflicted, and you must use a Slot equal to or greater than the number next to the Spell type.</p>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>Sick 1 (3 rounds)</dd>
    <dt>Failure</dt> <dd>Afflicted with Stage 1</dd>
    <dt>Critical Failure</dt> <dd>Afflicted with Stage 2</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You afflict the target with a higher level Disease</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Disease', 'Necromancy'], 1);

        $spell               = new Spell;
        $spell->name         = 'Contingency';
        $spell->casting      = 'At least 10 minutes (Material, Somatic, Verbal, Ability Damage)';
        $spell->duration     = '1 month or until discharged';
        $spell->rarity       = 'Uncommon';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>2 CON Damage</dd>
</dl>';
        $spell->description  = '<p>You prepare a spell to trigger later. While casting contingency, you also cast another spell of 4th level or lower with a casting time of no more than three actions. You must pay any appropriate costs for the spell. This companion spell must be one that can affect you. You must make any decisions for the spell when you set the contingency, such as choosing damage type for resist energy.</p>
<p>During the casting, choose a trigger under which the spell will be cast, using the same restrictions as the trigger for a readied action. You can cause the companion spell to come into effect as a reaction with that trigger. It affects only you, even if it would normally affect more creatures. If you define complicated conditions, as determined by the GM, the trigger might fail.</p>
<p>If you cast contingency, the newer one supersedes the older.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can choose a spell of 5th level or lower</dd>
    <dt>Heightened (+2)</dt> <dd>You can choose a spell of 6th level or lower</dd>
    <dt>Heightened (+3)</dt> <dd>You can choose a spell of 7th level or lower</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Ritual'], 7);

        $spell               = new Spell;
        $spell->name         = 'Contingent Spell Lock';
        $spell->casting      = '10 minutes (Somatic, Verbal, Ability Damage)';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>1 WIS Damage</dd>
</dl>';
        $spell->rarity       = 'Rare';
        $spell->targets      = 'Self';
        $spell->duration     = 'Instantaneous';
        $spell->description  = '<p>When you cast this spell, you transfer some of your currently prepared Spells or available Spell Slots to a hidden part of your soul, so that, if you die, when you appear on the Ethereal Plane, you have those Spells or Spell Slots available for use (normally, dying and appearing on the Ethereal Plane causes you to lose all prepared Spells and unused Spell Slots). You may select any number of Spells or Spell Slots of any level that you can cast. Once you transfer the Spells or Spell Slots in this manner, you cannot them in any way (as if you had used thos Spells or Spell Slots). The next time you choose to ready or prepare Spells, you may leave those transferred Spells or Spell Slots in place, or you may recover them along with your other Spells or Spell Slots (which means they would be available if you died).</p>
<p>The transferred Spells or Spell Slots may be used by your ghost in the normal manner (requiring the appropriate components and so on. Spells with Ability Damage requirements cannot be cast as a Ghost).</p>
<p>If you are raised, the transferred Spells or Spell Slots become inaccessible again.</p>
<p>Elves cannot cast this spell, as they do not have Souls (although Half-Elves can).</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Continual Flame';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One object';
        $spell->duration    = 'Unlimited';
        $spell->description = "<p>A magical flame springs up from the object, as bright as a torch. It doesn't need oxygen, react to water, or generate heat.</p>
<p>6 gp worth of ruby dust.</p>";
        $spell->heightened = '<dl>
    <dt>heightened (+1)</dt> <dd>The cost increases as follows: 16 gp for +1 level; 30 gp for +2 level; 60 gp for +3 level; 120 gp for +4; 270 gp for +5; 540 gp for +6; 1,350 gp for +7; and 3,350 gp for 10th.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 2);

        $spell              = new Spell;
        $spell->name        = 'Control Construct';
        $spell->casting     = 'Somatic Casting, Verbal Casting, Material Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One construct';
        $spell->duration    = 'Concentration';
        $spell->description = "<p>You wrest the control of a construct from its master. For as long as you concentrate, you can control the construct as if you were its master. You must make a Spellcraft check each round to maintain control. The DC of the Spellcraft check is (10 + the construct's HD). If the construct's creator or master is present and trying to control the construct, you both must make opposed Spellcraft checks each round to control the construct.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Construct'], 7);

        $spell              = new Spell;
        $spell->name        = 'Control Flames';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 foot range';
        $spell->area        = '1 foot cube';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You choose nonmagical flame that you can see within range and that fits within a 5-foot cube. You affect it in one of the following ways:</p>
<ul>
    <li>You instantaneously expand the flame 5 feet in one direction, provided that wood or other fuel is present in the new location.</li>
    <li>You instantaneously extinguish the flames within the cube.</li>
    <li>You double or halve the area of bright light and dim light cast by the flame, change its color, or both. The change lasts for 1 hour.</li>
    <li>You cause simple shapes—such as the vague form of a creature, an inanimate object, or a location—to appear within the flames and animate as you like. The shapes last for 1 hour.</li>
</ul>
<p>If you cast this spell multiple times, you can have up to three of its non-instantaneous effects active at a time, and you can dismiss such an effect as an action.</p>';
        $spell->heightened = "<dl>
    <dt>Heightened (+4)</dt> <dd>
        <p>You can control magical flames to do the following. Against a Wall of Fire, you do not need to cast this spell as a Reaction, however, against a Fireball or a Dragon's Fire breath, you will need to cast this spell as a Reaction to affect those magical Fire affects.</p>
        <ul>
            <li>End magical Fire effects as if you had cast Dispel Magic.</li>
            <li>Reduce the damage of magical or non-magical Fire damage by up to 10 die. You cannot reduce the number of die of damage below 1 dice. This can be used to reduce the effect of a Fireball spell or the Fire breath weapon of a Dragon.</li>
            <li>Increase the damage of magical Fire damage by 6 die.</li>
        </ul>
    </dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Control Plants';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>You attempt to beguile a plant creature that you can see within range. It must succeed on a WIS Save or be charmed by you for the duration. If you or creatures that are friendly to you are fighting it, it has advantage on the saving throw.</p>
<p>While the target is charmed, you have a telepathic link with it as long as the two of you are on the same plane of existence.</p>
<p>You can use an Action to take total and precise control of the target. Until the end of your next turn, the creature takes only the actions you choose, and doesn't do anything that you don't allow it to do. During this time you can also cause the creature to use a reaction, but this requires you to use your own reaction as well. If yo do not use an Action to control it, it behaves normally for a friendly creature.</p>
<p>Each time the target takes damage, it makes a new WIS Save against the spell. If the saving throw succeeds, the spell ends.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Unaffected / the spell ends</dd>
    <dt>Failure</dt> <dd>Affected as described</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The duration becomes 10 minutes</dd>
    <dt>Heightened (+2)</dt> <dd>The duration becomes 1 hour</dd>
    <dt>Heightened (+3)</dt> <dd>The duration becomes 8 hours</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Compulsion', 'Illusion', 'Plant'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Control Sand';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '400 feet';
        $spell->area           = '50 foot cube';
        $spell->save_attribute = 'See text';
        $spell->duration       = 'Concentration, up to 1 hour';
        $spell->description    = '<p>You can manipulate sand in one of the following ways with an Action.</p>
<dl>
    <dt>Lower Sand</dt> <dd>
        <p>This effect causes sand to reduce its depth by as much as 10 feet, to a minimum of 1 inch. The dust and sand is lowered within a square-shaped depression whose sides are up to 20 feet long per caster long. In extremely large and deep sand piles, such as a sand dune, the spell creates a pit that sweeps creatures downward (without dealing damage), putting them at risk and rendering them unable to leave by normal movement for the duration of the spell.</p>
        <p>When cast on earth elements, dust para-elementals, and other earth or dust based creatures, this spell acts as a Slow spell (WIS Save negates)</p>
    </dd>
    <dt>Raise Sand</dt> <dd>This effect causes dust and sand to raise in height, just as the lower sand version causes it to lower. Creatures and objects on top of the dust or sand are raised with the top level of sand</dd>
    <dt>Sand Whirlwind</dt> <dd>A whirling cloud of sand strikes the target, blinding it and hampering its ability to speak. To speak while affected by the spell, the target must make a Concentration check (DC equal to the DC of this spell). If the target tries to cast a spell, the Concentration DC increases by the level of the spell being cast. A successful DEX Save negates the Blindness but not the speech-hampering effect.</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>
        <dl>
            <dt>Lower Sand</dt> <dd>Increase the depth change by an additional 10 feet</dd>
            <dt>Raise Sand</dt> <dd>Increase the depth change by an additional 10 feet</dd>
            <dt>Sand Whirlwind</dt> <dd>The whirlwind gains an area of 10-foot radius and affects all creatures in the area.</dd>
        </dl>
    </dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 3);

        $spell              = new Spell;
        $spell->name        = 'Control Snow and Ice';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '400 feet';
        $spell->area        = '50 foot cube';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>You can manipulate snow and ice in one of the following ways with an Action</p>
<dl>
    <dt>Lower Snow and Ice</dt> <dd>
        <p>This causes snow and ice to sink away to a minimum of 1 inch. The depth can be lowered by up to 10 ft. The snow and ice is lowered within a squarish depression whose sides are up to 20 feet long. In extremely large and deep snow and ice fields, such as a glacier, the spell creates a crevasse that sweeps creatures downward (without dealing damage), rendering them unable to leave by normal movement for the duration of the spell. They can climb out of a crevasse, as normal with a DC 18 STR (Climb) check.</p>
        <p>WHen cast on a Ice Elementals and other ice-based creatures, this spell acts as a Slow spell.</p>
    </dd>
    <dt>Raise Snow and Ice</dt> <dd>This causes snow and ice to rise in height, just as the lower snow and ice version causes it to lower. Creatures and objects on top of the snow or ice are raised along with the top level of snow.</dd>
</dl>
<p>For either version, you may reduce one horizontal dimension by half and double the other horizontal dimension.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Cold'], 3);

        $spell              = new Spell;
        $spell->name        = 'Control Temperature';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '100 ft cube emanation, centered on you';
        $spell->duration    = 'Concentration, up to 3 hours';
        $spell->description = '<p>You can reduce or raise the temperature by 1 Temperature Band.</p>
<table>
    <thead>
        <tr>
            <th>Temperature Band</th>
            <th>Range</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Extreme Heat</td>
            <td>140 F or more</td>
        </tr>
        <tr>
            <td>Severe Heat</td>
            <td>110 F to 140 F</td>
        </tr>
        <tr>
            <td>Hot</td>
            <td>90 F to 110 F</td>
        </tr>
        <tr>
            <td>Warm</td>
            <td>60 F to 90 F</td>
        </tr>
        <tr>
            <td>Moderate</td>
            <td>40 F to 60 F</td>
        </tr>
        <tr>
            <td>Cold</td>
            <td>40 F to 0 F</td>
        </tr>
        <tr>
            <td>Severe Cold</td>
            <td>-20 F to 0 F</td>
        </tr>
        <tr>
            <td>Extreme Cold</td>
            <td>-50 F to -20 F</td>
        </tr>
        <tr>
            <td>Unearthly Cold</td>
            <td>-50 F or less</td>
        </tr>
    </tbody>
</table>
<p>Effects of the new temperature on creatures and the environment are incurred immediately.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can change the temperature by an additional temperature band</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Control Water';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '50 feet long by 50 feet wide. 500 foot range';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You can, as an Action, manipulate water within range in one of the following ways.</p>
<ul>
    <li>You can raise or lower the level of water in the chosen area by 10 feet. Water creatures in the area suffer the effects of slow.</li>
    <li>You can alter the flow of water in the area surrounding you. You can change the direction of an existing current, boost its strength, or cause still water to flow at a desired rate. The new current speed and direction persists so long as you maintain Concentration and use 1 Action each turn.</li>
    <li>You can choose to create an area of calm water up to 80 feet in diameter at the center of the affected area with Concentration and an Action each turn.</li>
    <li>You can also increase or decrease water waves. This can be used to ease the travel of water born ships by decreasing the waves or making it more difficult for them by increasing them. The area can be set to follow a ship as it moves through the water.</li>
</ul>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the area of effect and range</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Control Weather';
        $spell->casting        = '1 hour (Material, Somatic, Verbal)';
        $spell->area           = '5 mile radius';
        $spell->save_attribute = 'CHA';
        $spell->spell_creator  = 'Fourfinger';
        $spell->duration       = '1 day + 2D12 hours';
        $spell->requirements   = '<dl>
    <dt>Secondary Casters</dt> <dd>
        <p>Up to 6, Nature: 10.</p>
        <p>A secondary caster can be devoted to increasing the range by +5-mile radius</p>
        <p>Two secondary casters can be devoted to change the conditions of one category by an additional one step.</p>
    </dd>
</dl>';
        $spell->description = "<p>You take control of the weather within the range for the duration. You must be outdoors to cast this spell. Moving to a place where you don't have a clear path tot he sky ends the spell early.</p>
<p>When you cast the spell, you change the current weather conditions, which are determined by the GM based on the climate and season. You can change percipitation, temperature, and/or wind. It takes 1D4 X 10 minutes for the new conditions to take effect. Once they do so, you can change the conditions again.</p>
<p>When the spell ends, the weather gradually returns to normal.</p>
<p>You can change the conditions of one category by 2, up or down, or move each category by 1. H.</p>
<h5>Precipitation</h5>
<ul>
    <li>Clear</li>
    <li>Light Clouds</li>
    <li>Overcast or ground fog</li>
    <li>Rain, hail, or snow</li>
    <li>Torrential rain, driving hail, or blizzard</li>
</ul>
<h5>Temperature</h5>
<ul>
    <li>Unbearable heat</li>
    <li>Hot</li>
    <li>Warm</li>
    <li>Cool</li>
    <li>Cold</li>
    <li>Arctic Cold</li>
</ul>
<h5>Wind</h5>
<ul>
    <li>Calm</li>
    <li>Moderate wind</li>
    <li>Strong wind</li>
    <li>Gale</li>
    <li>Storm</li>
</ul>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>You change the weather as you desired and you can choose to have it affect a larger area (up to a 5-mile-radius circle), or have a longer duration (any number of additional D12 hours, up to 16D12 hours)</dd>
    <dt>Success</dt> <dd>You change the weather as you desired</dd>
    <dt>Failure</dt> <dd>You fail to change the weather as you desired</dd>
    <dt>Critical Failure</dt> <dd>The weather changes in an unanticipated way, determined by the GM but generally as contradictory to your wishes as possible (for instance, a terrible storm when you were attempting to call good weather)</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can change the conditions of one category by 3 or move each category by 2.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Ritual'], 8);
        $spell->skills()->save(app()->skills['Nature'], ['dc' => 25]);
        $spell->materials()->save(Material::where('name', 'Incense')->firstOrFail(), ['meta' => 'Plus bits of earth and wood mixed with water']);

        $spell                 = new Spell;
        $spell->name           = 'Control Winds';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '300 feet';
        $spell->area           = '100 foot cube';
        $spell->save_attribute = 'STR';
        $spell->duration       = '1 hour';
        $spell->description    = "<p>You take control of the air in a 100-foot cube that you can see within range. Choose one of the following effects when you cast the spell. The effect lasts for the spell's duration, unless you use your action on a later turn to switch to a different effect. You can also use your action to temporarily halt the effect or to restart one you've halted.</p>
<dl>
    <dt>Gusts</dt> <dd>A wind picks up within the cube, continually blowing in a horizontal direction you designate. You choose the intensity of the wind: calm, moderate, or strong. If the wind is moderate or strong, ranged weapon attacks that enter or leave the cube or pass through it have Disadvantage on their attack rolls. If the wind is strong, any creature moving against the wind must spend 1 extra foot of movement for each foot moved.</dd>
    <dt>Downdraft</dt> <dd>You cause a sustained blast of strong wind to blow downward from the top of the cube. Ranged weapon attacks that pass through the cube or that are made against targets within it have disadvantage on their attack rolls. A creature must make a STR Save if it flies into the cube for the first time on a turn or starts its turn there flying. On a failed Save, the creature is knocked prone.</dd>
    <dt>Updraft</dt> <dd>You cause a sustained updraft within the cube, rising upward from the cube's bottom side. Creatures that end a fall within the cube take only half damage from the fall. When a creature in the cube makes a vertical jump, the creature can jump up to 10 feet higher than normal.</dd>
</dl>
<p>This spell can be used to deflect a gas based breath weapon. All creatures that has the area of effect between themselves and the source of the Breath Weapon receives a +5 bonus to their Saves and only takes Half damage regardless of the Save results.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>See text</dd>
    <dt>Failure</dt> <dd>See text</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 5);

        $spell              = new Spell;
        $spell->name        = 'Conviction';
        $spell->casting     = 'Somatic Casting, Verbal Casting, Material Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '5 Rounds';
        $spell->description = '<p>You bolster your ally with a touch. The target gains a +3 bonus to all Saves.</p>
<dl>
    <dt>Material Components</dt> <dd>A small parchment with a bit of holy text written upon it.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 0);

        $spell                 = new Spell;
        $spell->name           = "Copper Dragon's Trickery";
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'Living target within range';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>You curse a foe with mishap, which strikes whenever it slips up.</p>
<p>When you cast this spell, you can choose a creature you can see within range. It receives a +1 bonus to all Melee attack rolls. At any time before the spell ends, when the target of this spell makes an attack roll, you can use a Reaction to curse the first attack roll made by the target that turn. If this attack misses, then the target must make a DEX Save or fall prone. The target can't stand up from being prone until the start of its next turn.</p>";
        $spell->saves = '<dl>
    <dt>Failure</dt> <dd>Fall prone</dd>
    <dt>Success</dt> <dd>No effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Curse'], 0);

        $spell              = new Spell;
        $spell->name        = 'Copy Spell';
        $spell->casting     = '1 or more Reactions, depending on the spell being copied';
        $spell->range       = '60 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You attempt to copy and cast a spell that you can see being cast. If the targeted spell is of lower level than the spell level this spell is being cast at, then the spell is automatically copied. Copying an equal or higher level spell requires a successfull ability check using your spellcasting ability. The DC equals 10+ the spell's level. On a success, the spell is copied, and you cast that spell at the lowest level it can be cast. You can only copy spells of a lesser or equal level to the spell slot used to cast this spell. You can choose new targets for the copied spell. The following rules apply.</p>
<ul>
    <li>You must spend a number of Reactions equal to the number Casting Actions needed for casting the spell to be copied</li>
    <li>You cannot copy your own spell</li>
    <li>You can only copy spells cast by creatures</li>
    <li>For all intents and purposes, you are the original caster of the copied spell, and your spellcaster ability modifier is used if required. The same is true for Save DC's and attack modifiers</li>
</ul>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Copying a spell of lower level than the heightened spell does not require a check.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Coral Growth';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = '60 feet';
        $spell->area        = '50 foot cube of coral';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>You cause living submerged coral to grow at an accelerated pace in a shape you control. Since you control the form, you can cause the coral to grow into a wall, a large ball, and so forth. you are limited in the size of the new coral, but this is not dependent upon the amount of existing material - a tiny piece can be used as a starter seed for the new growth, so long as that piece is alive.</p>
<p>This spell is popular for constructing buildings and statues out of coral in Halruaa. It is also a favorite of various aquatic races for building underwater cities.</p>
<dl>
    <dt>Material Components</dt> <dd>A small piece of coral</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Ritual'], 4);

        $spell              = new Spell;
        $spell->name        = 'Corona of Cold';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '10 ft radius emanation centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>As you complete this spell, you feel your extremities turn ice-cold, numb, and sluggish. The feeling subsides as the cold drains away from your body into the air around you.</p>
<p>You are surrounded by a protective aura of cold that also causes damage to others within its radius. You gain the following.</p>
<ul>
    <li>Immunity to Cold</li>
    <li>Resistance to Fire</li>
    <li>You create a 10 ft radius area of Cold around yourself. Whenever a creature starts their turn in the area, they take 1D12 Cold and must make a CON Save or be Slowed: 1.</li>
    <li>You are Slowed: 1</li>
</ul>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D12</dd>
</dl>';
        $spell->saves       = '<dl>
    <dt>Success</dt> <dd>Not Slowed</dd>
    <dt>Failure</dt> <dd>Slowed: 1 for 1 round</dd>
    <dt>Critical Failure</dt> <dd>Slowed: 2 for 3 rounds (not cumulative. always take the highest Slowed amount and longest duration)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Corporeal Instability';
        $spell->casting        = 'Somatic Casting, Verbal Casting, Material Casting';
        $spell->range          = 'Touch';
        $spell->save_attribute = 'DEX / STR';
        $spell->targets        = 'Living Creature Touched';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You must make a successful Touch Attack. The target can make a DEX Save to avoid the affects. If they fail, you turn the target into a spongy, amorphous mass, its shape melting and writing uncontrollably. They suffer the following.</p>
<ul>
    <li>The affected creature is unable to hold or use any item.</li>
    <li>Clothing, armor, rings, and helmets become useless. Large items worn or carried hamper more than help, causing the target to suffer a -4 penalty to DEX.</li>
    <li>Due to soft or misshapen feet and legs, All movement Speeds are reduced by 1/4.</li>
    <li>The target becomes blind and cannot cast spells that require Somatic, Verbal, or Material Components.</li>
    <li>You cannot use magic items that require a Skill Check to use or any Verbal triggers.</li>
    <li>The target is immune to Precision Damage.</li>
    <li>At the end of each of their turns, they may make a STR Save. Success ends the spell.</li>
</ul>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $spell->saves       = "<dl>
    <dt>Success</dt> <dd>The initial DEX Success means the spell has no effect. The STR Save at the end of each of your turns means that the spell ends (although you might have shifted and your armor and gear might have shifted and you might not be wearing them correctly. DM's Choice)</dd>
    <dt>Failure</dt> <dd>DEX Failure means the spell takes effect. STR Failure means the spell does not end.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);

        $spell              = new Spell;
        $spell->name        = 'Corpse Candle';
        $spell->casting     = 'Somatic Casting, Material Casting';
        $spell->range       = '60 ft';
        $spell->duration    = 'Concentration, up to 30 minutes';
        $spell->description = '<p>You call a ghostly hand bearing a lit candle at the spot you choose within range. The candle sheds light in a 5ft radius. You can move the hand 20 ft (FLy) with an Action. It has the following effects.</p>
<ul>
    <li>The hand and candle are incorporeal, and can pass through solid objects.</li>
    <li>The light from the candle reveals Invisible, Ethereal, and Astral creatures. Ethereal creatures slightly manifest into your current Plane. The ethereal creature can now be affected by physical attacks, but they have only a 30% hit change.</li>
    <li>The hand is Diminutive, has 10 Hit points and has AC 16 with a Deflection bonus equal to your CHA. The hand is slightly incorporeal, granting a 30% miss change to all physical attacks. If the hand loses all of its Hit Points, the spell ends.</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd>A piece of a corpse untreated by any kind of preservative.</dd>
</dl>';
        $spell->heightened  = '';
        $helper->addTypesToSpell($spell, ['Conjuration'], 3);

        $spell              = new Spell;
        $spell->name        = 'Courageous Shout';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '60 ft';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You gain the ability to shout a courageous cry three times until the duration ends. As an Action, you may shout, causing all of your allies within range to gain the benefits below. The benefits last for 1 round. You may use your first shout as part of casting this spell.</p>
<ul>
    <li>Until the beginning of your next turn, all of your allies (including yourself) gain a +4 bonus to Saves vs Fear.</li>
    <li>If your ally (and not you) is currently suffering from a Fear effect, they immediately gain a Save to end the Fear effect.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Battle Cry'], 1);

        $spell              = new Spell;
        $spell->name        = 'Cordon of Arrows';
        $spell->casting     = 'Material Casting';
        $spell->range       = '5 feet';
        $spell->targets     = 'Self';
        $spell->duration    = '8 hours';
        $spell->description = '<p>You plant four pieces of nonmagical ammunition – arrows or crossbow bolts – in the ground within range and lay magic upon them to protect an area.</p>
<p>Until the spell ends, whenever a creature other than you comes within 30 feet of the ammunition for the first time on a turn or ends its turn there, one piece of ammunition flies up to strike it. The creature must succeed on a DEX Save or take 1D6 Piercing damage. The piece of ammunition is then destroyed. The spell ends when no ammunition remains.</p>
<p>When you cast this spell, you can designate any creatures you choose, and the spell ignores them.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the number ammunition that can be affected by +2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell                = new Spell;
        $spell->name          = 'Corrosive Grasp';
        $spell->casting       = 'Somatic Casting';
        $spell->targets       = 'Self';
        $spell->duration      = 'Until the beginning of your next turn, or until discharged';
        $spell->description   = '<p>Your hand is coated with a thick layer of Acid and is treated as an Armed Attack. Until the beginning of your next turn, your Melee Spell Attacks have the ability to deal Acid damage. If you hit before the spell ends, the target takes Acid damage equal to 1D4 plus your spellcasting ability modifier. If you critically hit, you also deal 1D4 Acid damage to their clothing or armor. Once you hit a target, your hand is no longer coated with Acid.</p>
<p>You also gain Resistance to Aced until the beginning of your next turn.</p>
<p>You may also use this spell to melt non-glass objects with your Acid touch, dealing 1D2 Acid damage per use.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D4, but not the damage to clothing or armor.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Acid'], 0);

        $spell              = new Spell;
        $spell->name        = 'Corrupt Weapon';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Weapon held';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>Your weapon becomes enchanted with Evil Divine energy. The weapon gains a +1 bonus against Good aligned Outsiders. If the weapon hits, it deals double damage against Good aligned Outsiders and the target does not gain any Resistance against the weapon damage if the target is a Good aligned Outsider.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Evil'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Countermoon';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '60 feet';
        $spell->save_attribute = 'WIS';
        $spell->targets        = 'One lycanthrope within range';
        $spell->duration       = '12 hours';
        $spell->description    = '<p>This spell stops a lycanthrope from changing form, preventing both voluntary and involuntary changes. The target makes a WIS Save, on a Failure, the target retains whatever form they have when the spell is cast for the duration (even death does not cause the target to change shape until the duration ends).</p>
<p>Natural Lycanthropes gain a +2 Competence bonus to the Save.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>The target is not affected</dd>
    <dt>Failure</dt> <dd>The target cannot change shape from any ability due to lycanthropy</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Counter Performance';
        $spell->casting     = 'Reaction (Somatic or Verbal)';
        $spell->area        = '60-foot emanation';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Whenever you or an ally within 60 feet rolls a Save against an Auditory or Visual effect, you may use a Reaction to cast this spell.</p>
<p>Your performance protects you and your allies. Roll a Performance check for a type you know: an auditory performance if the trigger was auditory, or a visual one for a visual trigger. You and allies in the area can use the better result between your Performance check and their Save.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Mental'], 1);

        $spell              = new Spell;
        $spell->name        = 'Crawling Darkness';
        $spell->casting     = 'Somatic Casting, Verbal Casting, Material Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You shroud yourself in dark, writhing tentacles around your body. The tentacles do not interfere with your movements or spell casting, and you gain the following.</p>
<ul>
    <li>You gain 1/2 Concealment (attacks against you have a 20% miss chance)</li>
    <li>Your features are completely shrouded so that you cannot be identified.</li>
    <li>You gain a +2 Competence bonus on all Grapple checks, Escape Artist checks, and Climb checks</li>
    <li>You automatically receive a Feather Fall effect if you ever fal more than 3 feet. This effect can trigger any number of times while this spell is in effect</li>
    <li>You can walk on water at will.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Darkness', 'Illusion'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Create Chosen One';
        $spell->casting        = '1 hour (Somatic, Verbal, Secondary Casters, Ability Damage)';
        $spell->rarity         = 'Rare';
        $spell->requirements   = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 2 others must also cast this spell</dd>
    <dt>Ability Damage</dt> <dd>4 WIS Damage</dd>
</dl>';
        $spell->save_attribute = 'WIS';
        $spell->range          = 'Touch';
        $spell->targets        = 'One humanoid touched';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>Casting this spell transforms the victim into a Chosen One under the control of one of the casters (chosen at the beginning of the casting). If the spell is started and all the casters do not agree on the controller, then all suffer the Ability damage and hte spell ends.</p>
<p>Once the spell is complete, the victim makes a WILL Save. The victim must be bound and helpless during the entire casting or the spell fails.</p>
<p>This spell is mostly known and used by the Red Wizards of Thay.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Evil', 'Ritual'], 5);

        $spell               = new Spell;
        $spell->name         = 'Create Crawling Claw';
        $spell->casting      = '1 hour (Somatic, Material, Verbal, Ability Damage)';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>2 WIS Damage</dd>
</dl>';
        $spell->range        = '30 ft';
        $spell->targets      = 'Severed left hands within 5-foot-radius circle';
        $spell->duration     = 'Instantaneous';
        $spell->description  = "<p>You animate up to 5 severed left humanoid hands that are within the area. You must first cast Circle of Protection From Good, then cast this spell. Casting this spell extends the Circle of Protection From Good's duration to the casting time of this spell.</p>
<p>Once the spell is completed, the severed hands become Crawling Claws and are under your control for the next 24 hours (similar to the Animate Undead Spell).</p>
<p>On each of your turns, you can use an Action to mentally command any Crawling Claw you made with this spell if the creature is within 100 feet of you (if you control multiple creatures, you can command any or all of them at the same time, issuing the same command to each one). You decide what action the creature will take and where it will move during its next turn, or you can issue a general command, such as to guard a particular chamber or corridor. If you issue no commands, the creature only defends itself against hostile creatures. Once given an order, the creature continues to follow it until its task is complete.</p>
<p>The creature is under your control for 24 hours, after which it stops obeying any command you've given it. To maintain control of the creatures for another 24 hours, you must cast this spell on the creatures again before the current 24-hour period ends. This use of the spell reasserts your control over up to 20 creatures you have animated with this spell, rather than animating a new ones.</p>
<p>You may also sacrifice a spell slot to continue to maintain control of your Crawling Claws. Each spell slot sacrificed in this way acts exactly as if you had cast the spell to maintain control, except that you do not need to be in the presence of the undead to maintain control. If you ever choose to regain the sacrificed spell slot and memorize a spell, you lose control of a number of undead that the spell slot granted control over. To regain control, you must cast this spell in the presence of the undead to regain control.</p>
<dl>
    <dt>Material Components</dt> <dd>Clippings from a ghoul's fingernails</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The casting becomes 3 Casting Actions instead of 1 hour, and does not require the Circle of Protection From Good spell.</dd>
    <dt>Heightened (+1)</dt> <dd>You animate or reassert control over five additional severed hands for each additional spell slot.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Evil', 'Undead', 'Ritual'], 2);

        $spell               = new Spell;
        $spell->name         = 'Create Crossroads and Backroads';
        $spell->casting      = '24 hours (Somatic, Verbal)';
        $spell->range        = '30 feet';
        $spell->duration     = 'Permanent';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>4 CON damage</dd>
    <dt>Secondary Caster</dt> <dd>1. The caster or the assistant must have some Fey blood</dd>
</dl>';
        $spell->description = '<p>This spell has 2 options.</p>
<ul>
    <li>You may create 2 Crossroads and a Backroads that links them. You must have personally visited the other Crossroads location. This spell summons a crossroads guardian to protect both Crossroads.</li>
    <li>You create a Crossroads and it leads to the FeyWild. This spell summons a crossroads guardian.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Ritual'], 7);
        $spell->skills()->save(app()->skills['Nature'], ['dc' => 25]);

        $spell               = new Spell;
        $spell->name         = 'Create Darkenbeast';
        $spell->casting      = '1 hour (Somatic, Material, Verbal, Ability Damage)';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>2 CON Damage</dd>
</dl>';
        $spell->range        = '30 ft';
        $spell->targets      = 'One animal of no more than 2 HD within range';
        $spell->duration     = 'Instantaneous';
        $spell->description  = "<p>You transform one Small or Medium sized animal with no more than 2 Hit Dice into a Darkenbeast. A target with an INT of 5 or more gets a WILL Save to resist this spell. You may have up to 5 Darkenbeasts under your control at any time.</p>
<p>This spell can only be cast in darkness, at night, indoors or underground. Its effects last until the Darkenbeast is slain or until the Darkenbeast is exposed to sunlight, which causes the creature to die and revert to its original form. This spell can be Dispelled with a Dispel Magic Spell.</p>
<p>As part of casting this spell, you may imprint one additional spell onto the Darkenbeast. To do this, you must sacrifice a Spell Slot equal to the Imprinted Spell. You may not Imprint a spell that takes longer to cast than 3 Actions, requires Secondary Casters, causes Ability Damage, or requires a Feat to cast. As a Triple Action, you may cast the Imprinted Spell as if the Darkenbeast is casting the spell. Once the spell is cast, the Darkenbeast dies and you may recover your Sacrificed Spell Slot.</p>
<dl>
    <dt>Material Components</dt> <dd>Dried wyvern's blood smeared upon the spell's target, and a black pearl worth at least 200 gp, which the spell consumes.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Evil'], 5);

        $spell              = new Spell;
        $spell->name        = 'Create Demiplane';
        $spell->casting     = '2 Hours (Somatic, Verbal, Material)';
        $spell->area        = 'Up to ten 10-foot cubes';
        $spell->duration    = '10 days';
        $spell->description = "<p>You create a small, finite demiplane. You must be on the Astral or Ethereal Plane or on a plane that has access to one of those planes (such as the Material Plane) to cast this spell. When you cast the spell, you decide whether the demiplane is within the Astral or the Ethereal Plane. It is filled with air or water (decided by you). The plane is generally flat and featureless, such as an earth, stone, water, or wood floor. The “walls” and “ceiling” of the plane may appear like solid earth, stone, wood, or water, or they may end in mist, a featureless void, or a similar unreal-looking border. The plane's environmental conditions are those of a temperate spring day on the Material Plane. You determine the plane's light level (bright, normal, dim, or darkness), which affects the entire plane.</p>
<p>There are no native creatures or plants on this plane, though you may bring some there (if the plane's light is bright or normal, it counts as sunlight for growing plants). The environment of the plane counts as normal terrain for the purpose of effects that target earth, stone, wood, and so on. For example, you could use move earth to create a hill or wall of stone to create a barricade.</p>
<p>When you finish casting this spell, you may bring yourself and up to seven other creatures to the plane automatically by joining hands in a circle. The demiplane is another plane of existence, and therefore is outside the range of any spell or ability that cannot affect or reach other planes. Creatures can only enter the plane by the use of planar travel magic such as astral projection, etherealness, or plane shift. You are considered “very familiar” with your entire demiplane.</p>
<p>As an Action, you may eject a creature from your demiplane. The creature may resist with a WIS Save. An ejected creature goes to the closest plane to your demiplane (usually the Astral Plane or the Ethereal Plane, but if you cast this spell on the Material Plane, the creature is sent to the Material Plane). When the spell ends, the plane dissolves, and all creatures in the plane are ejected in this manner with no Save. The plane cannot be dispelled, but a creature on the plane can destroy it by using Limited Wish, Disjunction, Miracle, or Wish and making a successful dispel check.</p>
<p>If you are within the demiplane, you can add to its area by casting the spell again. Alternatively, you may cast this spell again to reset the duration of an existing area to that of your latest casting. If the duration on one area of the demiplane ends and other parts remain, creatures in the expiring area are shunted to remaining areas. If a collapsing portion of the demiplane would leave one section cut off from other sections of the demiplane (for example, if there were three areas connected in a straight line and the center part expired), the stranded sections count as separate demiplanes under your control. You may reconnect these stranded sections by casting the spell again to create a linked area between the two.</p>
<p>You can make this spell permanent with the permanency spell. If you have cast this spell multiple times to enlarge the demiplane, each casting's area requires its own permanency spell.</p>";
        $spell->heightened = "<dl>
    <dt>Heightened (+1)</dt> <dd>
        <ul>
            <li>The casting time becomes 4 hours</li>
            <li>
                <p>You may add or remove one of the following features with each casting of the spell.</p>
                <dl>
                    <dt>Alignment</dt> <dd>Your plane gains the (mildly) Chaos, Good, Evil, or Law Alignment trait. You cannot give your Demiplane an alignment trait that you do not have</dd>
                    <dt>Bountiful</dt> <dd>Your Demiplane gains a thriving natural ecology, with streams, ponds, waterfalls, and plants. The demiplane provides enough plant-based food (nuts, grains, fruit, fungi, and so on) to support one Medium creature for every 10-foot cube of the Demiplane. The Demiplane does not have any animals unless you transport them there, but the ecology can sustain itself for as long as the demiplane exists without requiring watering, gardening, pollination, and so on, and dead organic material decays and returns to the soil in the normal manner. If your demiplane has ambient light, these plants are normal, familiar surface plants; if it is a realm of twilight or darkness, these plants are fungi and other plants adapted to near-darkness or underground locations.</dd>
                    <dt>Elemental</dt> <dd>Your plane gains the Air, Earth, Fire, or Water trait</dd>
                    <dt>Gravity</dt> <dd>By default a demiplane's gravity is normal and oriented in one direction, like what most creatures are used to on the Material Plane. By selecting this feature, the plane's gravity is heavy, light, none, objectively directional, or subjectively directional.</dd>
                    <dt>Seasonal</dt> <dd>The demiplane has a seasonal cycle and a light cycle, usually similar to those of a land on the Material Plane, but customizable as you see fit (for example, your demiplane could always be winter, day and night could alternate every 4 hours, and so on).</dd>
                    <dt>Shape</dt> <dd>By default, the demiplane has a fixed shape and borders. By selecting this feature, you may make your plane self-contained so it loops upon itself when a creature reaches one edge (see Shape and Size). You may designate areas or locations on the edges of your plane where this occurs (such as a pair of secret doors or a path in the woods) or apply it to the entire plane.</dd>
                    <dt>Structure</dt> <dd>Your demiplane has a specific, linked physical structure, such as a giant tree, floating castle, labyrinth, mountain, and so on. (This option exists so you can pick a theme for your plane without having to worry about the small details of determining what spells you need for every hill, hole, wall, floor, and corner).</dd>
                </dl>
            </li>
        </ul>
    </dd>
    <dt>Heightened (+2)</dt> <dd>
        <ul>
            <li>The casting time becomes 6 hours</li>
            <li>
                <p>You may add or remove one of the following features with each casting of the spell.</p>
                <dl>
                    <dt>Energy</dt> <dd>Your plane gains the (minor) Negative or Positive energy trait.</dd>
                    <dt>Magic</dt> <dd>Your plane gains the Dead Magic, Enhanced Magic, Impeded Magic, or Wild Magic planar trait. If you selected Dead Magic, you are trapped within your plane unless it has a permanent planar portal (such as the portal feature, below). If you selected Enhanced or Impeded Magic, choose one type of magic to be enhanced or impeded, such as “effects with the fire descriptor or that manipulate fire” or “death spells and spells from the Death or Repose domains.” A plane cannot be Enhanced and Impeded for the same kinds of spells.</dd>
                    <dt>Morphic</dt> <dd> You may use Move Earth at will in your Demiplane at one-tenth of the spell's normal casting time, and can reshape normal plants in the same manner (such as by twisting trees into a fence or humanlike shapes). You are even able to affect rock formations with this ability, though the casting time for this is only half normal.</dd>
                    <dt>Portal</dt> <dd>Your Demiplane gains a permanent gate to one location on another plane, which can only be used for planar travel. This location must be very familiar to you. This gate is always open and usable from both sides, but you can secure it using normal means (such as by building a door around it).</dd>
                    <dt>Time</dt> <dd>By default, time passes at the normal rate in your demiplane. By selecting this feature, you may make your plane have the erratic time, flowing time (half or double normal time), or timeless trait.</dd>
                </dl>
            </li>
        </ul>
    </dd>
    <dt>Permanency</dt> <dd>22,500 gp. 15 CON damage.</dd>
</dl>'";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Extradimensional', 'Permanency', 'Ritual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Create Food and Water';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = '30 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You create 45 pounds of food and 30 gallons of water on the ground or in containers within range, enough to sustain up to fifteen humanoids or five steeds for 24 hours. The food is bland but nourishing, and spoils if uneaten after 24 hours. The water is clean and doesn't go bad.</p>";
        $spell->heightened  = '<dl>
    <dt>heightened (+2)</dt> <dd>You can feed 12 Medium creatures.</dd>
    <dt>heightened (+4)</dt> <dd>You can feed 50 Medium creatures.</dd>
    <dt>heightened (+6)</dt> <dd>You can feed 200 Medium creatures.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Ritual'], 2);

        $spell               = new Spell;
        $spell->name         = 'Create Lantern Archon';
        $spell->casting      = '1 minute (Somatic, Verbal, Sacrifice)';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>2 CON damage</dd>
</dl>';
        $spell->range        = '30 feet';
        $spell->duration     = 'Instantaneous';
        $spell->description  = "<p>You sacrifice a small part of your own life force to create a new lantern archon in the service of your patron. The lantern arcone is not under your control but is friendly to you. It is willing to perform one nonhazardous task of your choice taking up to 1 hour without requiring any payment. Alternatively, you can request that it perform a hazardous or longer task, but in this case payment is required (as Planar Ally). Upon completion of the task, the lantern archon is magically transported to your deity's home plane.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ritual'], 3);

        $spell               = new Spell;
        $spell->name         = 'Create Timeslip Gate';
        $spell->casting      = '1 hour (Material, Somatic, Verbal)';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 2 others who must also cast this spell</dd>
    <dt>Ability Damage</dt> <dd>3 WIS Damage</dd>
</dl>';
        $spell->area        = '20 square feet area';
        $spell->duration    = 'Permanent';
        $spell->description = '<p>Upon casting this spell, you twist the momentum of time to create a permanent gate between reality and Temporal Prime. The Slipgate is totally flat, but it can be in any contiguous shape the caster desires, up to 20 square feet in area. Care must be exercised, since denizens of the timestream are attracted to this portal and may be lying in wait on Temporal Prime or possibly even come through into reality. Slipgates are a liability as much as a convenience.</p>
<dl>
    <dt>Material Components</dt> <dd>Diamond worth 5,000 gp that has been on Temporal Prime for over one subjective day.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Chronomancy', 'Ritual'], 5);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 10]);

        $spell              = new Spell;
        $spell->name        = 'Create or Destroy Water';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->area        = '30 foot cube';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You either create or destroy water.</p>
<dl>
    <dt>Create Water</dt> <dd>You create up to 10 gallons of clean water within range in an open container. Alternatively, the water falls as rain in a 30-foot cube within range, extinguishing exposed flames in the area.</dd>
    <dt>Destroy Water</dt> <dd>You destroy up to 10 gallons of water in an open container within range. Alternatively, you destroy fog in a 30-foot cube within range.</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the quantity by 10 gallons or the size of the cube increases by 5 feet</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Create Slipgate';
        $spell->casting        = '1 hour (Material, Somatic, Verbal)';
        $spell->range          = '20 feet';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Permanent';
        $spell->description    = '<p>Upon casting this spell, you twist the momentum of time to create a permanent gate between reality and Temporal Prime. The slipgate is totally flat, butit can be in any contiguous shape you desire, up to 20 square feet in area. Care must be exercised, since denizens of the timestreams are attracted to this portal and may be lying in wait on Temporal Prime or possibly even come through into reality. Slipgates are a liability as much as a convenience. Upon completing the spell, you must make a Save vs WIS to stablize the slipgate.</p>
<dl>
    <dt>Material Components</dt> <dd>A diamond worth 5,000 gp that has been on Temporal Prime for over one subjective day.</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The slipgate is stable</dd>
    <dt>Failure</dt> <dd>The slipgate collapses and the material components are lost.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Chronomancy', 'Ritual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Create Undead';
        $spell->casting     = '10 minutes (Somatic, Verbal, Material)';
        $spell->range       = '10 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You can cast this spell only at night. Choose a corpse of Medium or Small humanoid within range. You create a Ghoul or a Dread Warrior that is under your control.</p>
<p>As an Action, you can mentally command any creature you animated with this spell if the creature is within 120 feet of you (if you control multiple creatures, you can command any or all of them at the same time, issuing the same command to each one). You decide what action the creature will take and where it will move during its next turn, or you can issue a general command, such as to guard a particular chamber or corridor. If you issue no commands, the creature only defends itself against hostile creatures. Once given an order, the creature continues to follow it until its task is complete.</p>
<p>The creature is under your control for 24 hours, after which it stops obeying any commands you have given it. To maintain control of the creature, you must sacrifice a spell slot to maintain control. Once you memorize a spell in the spell slot the creatures become free willed. One sacrificed spell slot maintains control of up to 4 creatures. You must sacrifice a Spell Slot equal to the Heightened amount to animate it to maintain control.</p>
<blockquote>
    You animate 6 Ghouls and 4 Juju zombies. You must sacrifice two 6th level Spell Slots to maintain control of the 6 Ghouls and one 7th level Spell Slot to maintain control of the 4 Juju Zombies. You could maintain control of 2 additional Ghouls with the two 6th level Spell Slots that you sacrificed.
</blockquote>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>
        <ul>
            <li>2 Ghouls</li>
            <li>2 Dread Warriors</li>
            <li>1 Juju Zombie</li>
            <li>1 Ghast</li>
            <li>Baneguard (Divine, Bane only)</li>
        </ul>
    </dd>
    <dt>Heightened (+2)</dt> <dd>
        <ul>
            <li>4 Ghouls</li>
            <li>4 Dread Warriors</li>
            <li>2 Juju Zombies</li>
            <li>2 Ghasts</li>
            <li>2 Baneguard (Divine, Bane only)</li>
            <li>1 Wight</li>
            <li>1 Direguard</li>
            <li>1 Zin-carla (Lolth only)</li>
        </ul>
    </dd>
    <dt>Heightened (+3)</dt> <dd>
        <ul>
            <li>8 Ghouls</li>
            <li>8 Dread Warriors</li>
            <li>4 Juju Zombies</li>
            <li>4 Ghasts</li>
            <li>4 Baneguard (Divine, Bane only)</li>
            <li>2 Wight</li>
            <li>2 Direguard</li>
            <li>2 Zin-carla (Lolth only)</li>
        </ul>
    </dd>
    <dt>Heightened (+4)</dt> <dd>
        <ul>
            <li>16 Ghouls</li>
            <li>16 Dread Warriors</li>
            <li>8 Juju Zombies</li>
            <li>8 Ghasts</li>
            <li>8 Baneguard (Divine, Bane only)</li>
            <li>4 Wight</li>
            <li>4 Direguard</li>
            <li>4 Zin-carla (Lolth only)</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead', 'Ritual'], 6);

        $spell              = new Spell;
        $spell->name        = 'Creation';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = '0 feet';
        $spell->duration    = '1 hour';
        $spell->description = "<p>You create a temporary standard-quality object. It must be of vegetable matter and 5 cubic feet or smaller. It can't rely on intricate artistry or complex moving parts, never functions as a cost or the like, and can't be made of special materials or materials with a rarity of uncommon or higher. It is obviously temporary.</p>
<dl>
    <dt>Materials</dt> <dd>A small amount of the material to be created.</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The item is expert quality and can use minerals.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Transmutation', 'Ritual'], 4);

        $spell              = new Spell;
        $spell->name        = 'Creature of Darkness';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '360 feet';
        $spell->duration    = '10 minute';
        $spell->description = '<p>You create a mobile, upright, vaguely human-shaped, bipedal field of magical Darkness that quenches Light and Continual Light spells on contact. You may use an Action to control this shadow and has a Fly Speed (only) of 30. You can perceive the shadows surroundings dimly (the vision is not good enough to read, see expressions, or recognize the features of a being). This un-intelligent thing cannot manipulate its surroundings, but it can motion and point. If at any time the Creature of Darkness moves beyond the Range of this spell, the spell ends.</p>
<p>If you were to step into the Creature of Darkness, its magic expands to completely cloak you and conceal your identity. You may see through the gloom as if it did not exist. While cloaked by the Creature of Darkness, you may Fly at the Speed of the Darkness.</p>
<dl>
    <dt>Material Components</dt> <dd>A bit of Black or gray fur or down from any flying creature, a pinch of soot, and a strand of spider web.</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Range</dd>
    <dt>Heightened (+4)</dt> <dd>You may cast spells through the Creature of Darkness, as if it were the one casting the spell. This requires an extra Casting Action</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Shadow', 'Phantasm', 'Darkness'], 4);

        $spell              = new Spell;
        $spell->name        = 'Crescendo';
        $spell->casting     = 'Verbal Casting';
        $spell->area        = '30 foot radius sphere';
        $spell->targets     = 'Self';
        $spell->duration    = '5 rounds';
        $spell->description = '<p>This spell creates a martial fanfare that slowly builds in volume, inspiring you and your allies within the area to ever-greater combat powers.</p>
<ul>
    <li>During the first of the spell, the horns and drums can be heard faintly, but no other effect occurs.</li><
    <li>On the second round, as the music becomes louder and more inspiring, each affected creature gains a +1 Morale bonus on Attack Rolls.</li>
    <li>This bonus increases to +2 for the remainder of the duration.</li>
</ul>
<p>All allies that start their turn within the area receives the bonus until the end of their turn.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Crown of Brilliance';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->area           = '20 foot radius';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'CON';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>A blazing crown of golden light surrounds your head. Creatures you engage in melee combat must make successful CON Save or be Blinded for 3 rounds. Creatures that successfully Save, and creatures that have recovered from Blindness, are still Dazzled for as long as they remain in melee with you.</p>
<p>Creatures with light sensitivity and creatures that are harmed by sunlight (such as vampires) must make a WIS Save if they are within the area of the spell. Creatures that fail their saving throws must move outside the area. Undead within the area take 1d6 points of damage each round they remain in the area.</p>
<dl>
    <dt>Material Components</dt> <dd>An opal worth at least 100 gp, carried on your person through the duration of the spell. The opal shatters upon completion of the spell, and the spell ends prematurely if the opal is shattered by other means.</dd>
    <dt>Archon</dt> <dd>The caster must be a Celestial from the upper planes, or have the Archon type</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Dazzled while within the area</dd>
    <dt>Failure</dt> <dd>Blinded for 3 rounds, then as Success</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light', 'Exalted'], 6);

        $spell              = new Spell;
        $spell->name        = 'Crown of Courage';
        $spell->casting     = 'Somatic Casting, Material Casting';
        $spell->area        = '60 foot emanation';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours or until discharged';
        $spell->description = '<p>This spell creates a crown of magical energy that grants you and all your allies that start their turn within range the following</p>
<ul>
    <li>+1 Moral bonus to Hit</li>
    <li>+4 bonus to all Saves vs Fear</li>
    <li>As a Reaction, you can discharge the magic of the crown and grant yourself and all allies within range a 2nd Save vs Fear with the +4 bonus, then this spell ends immediately</li>
</ul>
<p>The crown occupies the headgear space. If you already are wearing a headgear equipment, then this spell fails.</p>
<dl>
    <dt>Material Components</dt> <dd>A thin golden hoop 6 inches in diameter costing at least 50 gp.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Abjuration'], 3);

        $spell              = new Spell;
        $spell->name        = 'Crown of Flame';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->area        = '10 foot radius';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You become a blazing hot beacon of the powers of good, searing all evil outsiders, evil undead, and evil fey within 10 feet of you. Affected creatures take 2D6 points of Fire damage per round.</p>
<dl>
    <dt>Archon</dt> <dd>The caster must be a Celestial from the upper planes, or have the Archon type</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire', 'Exalted'], 5);

        $spell              = new Spell;
        $spell->name        = 'Crown of Glory';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->area        = '120 foot radius, centered on you';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 30 minutes';
        $spell->description = '<p>You are imbued with an aura of celestial authority, inspiring awe in all lesser creatures that behold your terrible perfection and righteousness. You gain the following benefits.</p>
<ul>
    <li>+4 enhancement bonus to CHA</li>
    <li>All creatures with fewer than a CR 8 cease whatever they are doing and are compelled to pay attention to you. Any such creature must make a WIS Save to attack you.</li>
    <li>Any creature with CR 8 or higher may pay attention to you, but are not affected by this spell.</li>
    <li>When you speak, all listeners telepathically understand you, even if they do not understand your language.</li>
    <li>While the spell lasts, you can make up to three suggestions to creatures of less than CR 8 in range, as if using the Suggestion spell (WIS Save negates). Creatures with CR 8 or higher are not affected.</li>
</ul>
<p><strong>Material Component</strong> An opal worth at least 200 gp.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Crown of Madness';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->save_attribute = 'WIS';
        $spell->description    = '<p>One humanoid of your choice that you can see within range must succeed on a WIS Save or become charmed by you for the duration. While the target is charmed in this way, a twisted crown of jagged iron appears on its head, and a madness glows in its eyes.</p>
<p>The charmed target must use its action before moving on each of its turns to make a melee attack against a creature other than itself that you mentally choose. The target can act normally on its turn if you choose no creature or if none are within its reach.</p>
<p>On your subsequent turns, you must use your action to maintain control over the target, or the spell ends. Also, the target can make a WIS Save at the end of each of its turns. On a success, the spell ends.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>The target is charmed, as the spell describes</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 2);

        $spell              = new Spell;
        $spell->name        = 'Crown of Majesty';
        $spell->casting     = 'Somatic Casting, Material Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours or until discharged';
        $spell->description = '<p>This spell creates a crown of magical energy that grants you the following</p>
<ul>
    <li>It sheds light as the Light spell</li>
    <li>You gain a +4 bonus to CHA</li>
    <li>As a Triple Action, you can discharge the energy of the crown and cast the Command spell Heightened +4. when you use this Ability, this spell ends immediately.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Crown of Might';
        $spell->casting     = 'Somatic Casting, Material Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours or until discharged';
        $spell->description = '<p>This spell creates a crown of magical energy that grants you the following</p>
<ul>
    <li>You gain a +2 Enhancement bonus to your STR for the duration</li>
    <li>As a Reaction, you can discharge the energy of the crown and grant yourself a +6 bonus to your STR until the beginning of your next turn. When you use this ability, you lose the +2 bonus from this spell immediately, and the spell ends at the beginning of your next turn.</li>
</ul>
<p>The crown occupies the headgear space. If you already are wearing a headgear equipment, then this spell fails.</p>
<dl>
    <dt>Material Components</dt> <dd>A thin copper hoop 6 inches in diameter costing at least 5 gp.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Crown of Protection';
        $spell->casting     = 'Somatic Casting, Material Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours or until discharged';
        $spell->description = '<p>This spell creates a crown of magical energy that grants you the following</p>
<ul>
    <li>+2 Deflection bonus to AC</li>
    <li>5/- Damage Reduction</li>
    <li>+2 bonus to all Saves</li>
    <li>As a Reaction, you can discharge the energy of the crown and grant yourself 20/- Damage Reduction until the beginning of your next turn. When you use this ability, you lose all the other bonuses this spell grants immediately, and this spell ends at the beginning of your next turn.</li>
</ul>
<p>The crown occupies the headgear space. If you already are wearing a headgear equipment, then this spell fails.</p>
<dl>
    <dt>Material Components</dt> <dd>A thin iron hoop 6 inches in diameter costing at least 1 gp.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Abjuration'], 3);

        $spell              = new Spell;
        $spell->name        = 'Crown of Stars';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->range       = '120 feet';
        $spell->duration    = '1 hour';
        $spell->description = '<p>Seven star-like motes of light appear and orbit your head until the spell ends. You can use an Action to send one of the motes streaking toward one creature or object within 120 feet of you. When you do so, make a ranged spell attack. On a hit. the target takes 4D12 Positive damage. Whether you hit or miss, the mote is expended. The spell ends early if you expend the last mote.</p>
<p>If you have four or more motes remaining, they shed bright light in a 30-foot radius and dim light for an additional 30 feet. If you have one to three motes remaining, they shed dim light in a 30—foot radius.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the number motes by 2.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Positive', 'Light'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Crowning Touch';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator  = 'Laerel Silverhand';
        $spell->rarity         = 'Rare';
        $spell->range          = 'Touch';
        $spell->targets        = 'One spell caster touched';
        $spell->save_attribute = 'WIS';
        $spell->requirements   = '<dl>
    <dt>Ability Damage</dt> <dd>5 CON damage</dd>
</dl>';
        $spell->duration       = '1 year and 1 day';
        $spell->description    = "<p>You place a curse on the subject. Mystra's symbol appears drawn in silver on each palm (or on the chest and forehead of beings lacking palms) as a glowing brand equal that sheds light as a candle. A creature that can cast arcane spells, such as a sorcerer or wizard take a -4 penalty on its Save.</p>
<p>Any time the target casts a spell, they gain the Enervated condition equal to the level of the spell being cast. The triggering spell is cast normally. The level of Enervation is cumulative and lasts for the duration of the Crowning Touch. There is no Save to avoid the Enervated levels, but 24 hours after gaining Enervated levels, the victim gets a CON Save for each Enervated level gained 24 hours ago. On Success, the Enervated level is removed, otherwise it persists for the duration of Crowning Touch.</p>
<p>With each spell use, streaks of silver appear in the hair of the target, until the transgressor's hair is all silver (which happens when the character gains Enervated levels equal to their Spell Caster level).</p>
<p>The curse bestowed by this spell cannot be dispelled, but it can be removed with a Wish spell or a successful Disjunction spell. After the curse is lifted, all the effects go away.</p>
<p>This spell was developed for use only against beings who misuse the sort of magic Mystra has dominion over. The Lady of Mysteries does not look kindly on mages who hurl deadly magic at every spellcaster who insults them. Mystra has been known to shorten the effects on the truly repentant and the undeserving, if they pray to her for forgiveness and obtain an Atonement spell.</p>
<dl>
    <dt>Material Components</dt> <dd>A prism worth at least 1,000 gp.</dd>
</dl>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Not affected by this spell</dd>
    <dt>Failure</dt> <dd>Fully affected by this spell</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Curse'], 10);

        $spell              = new Spell;
        $spell->name        = 'Crusade';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'Up to 4 creatures';
        $spell->rarity      = 'Rare';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>Pronounce a cause. It can be to attain an item, claim a patch of land, slay a creature, war with a group, or be entirely peaceful. Your cause can't force the targets to harm one another or themselves. They become completely dedicated to that cause, depending on their levels. They choose their own actions, but they favor direct action over inaction or indirect action.</p>
<dl>
    <dt>13th or lower</dt> <dd>The target is so dedicated to the cause that it will pursue it to the death (unless you say otherwise)</dd>
    <dt>14th</dt> <dd>The target is dedicated to the cause, but the spell ends for the target if it's reduced to 50 Hit Points or fewer</dd>
    <dt>15th</dt> <dd>AS 14th, plus the target can attempt a WIS Save at the end of each turn to end the spell for itself.</dd>
</dl>
<p>The spell ends for all creatures if you or one of your allies acts hostile toward a target, or the cause is complete. The GM might determine this spell has alignment traits befitting the cause.</p>";
        $spell->heightened = '<dl>
    <dt>Heighten (+1)</dt> <dd>Increase the level limits by +2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Compulsion', 'Illusion', 'Lingual'], 9);

        $spell                 = new Spell;
        $spell->name           = 'Crushing Despair';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->area           = '30 foot cone';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 or more rounds';
        $spell->description    = '<p>You inflict despair on creatures in the area. The effects are determined for each creature by its Save.</p>
<p>This spell Counters and is Countered by Good Hope</p>';
        $spell->saves          = "<dl>
    <dt>Critical Success</dt> <dd>The creature is unaffected</dd>
    <dt>Success</dt> <dd>For 1 round, it can't take Reactions and must attempt another Save at the start of its turn or be Slowed 1 for that turn as it sobs uncontrollably</dd>
    <dt>Failure</dt> <dd>As a success, but lasting 1 minute</dd>
    <dt>Critical Failure</dt> <dd>As failure, but automatically slowed 1 for 1 minute</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The area increases to a 60-foot cone.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Emotion', 'Illusion'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Crushing Sphere';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->area           = '10 foot diameter sphere, 200 feet range';
        $spell->save_attribute = 'DEX';
        $spell->targets        = 'Target creature in range';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>This spell functions like Resilient Sphere, except that the sphere painfully constricts teh target, hampering their movements and breathing. The target is entangled and takes 3D6 points of Nonlethal damage per round as the sphere contracts. If the target is rendered unconscious, any remaining damage from the sphere is Lethal damage.</p>
<dl>
    <dt>Material Components</dt> <dd>An eggshell, which is crushed as the spell is cast</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The target is not encased in the sphere</dd>
    <dt>Failure</dt> <dd>The target is affected by the sphere</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 6);

        $spell              = new Spell;
        $spell->name        = 'Cry of Ysgard';
        $spell->casting     = 'Verbal Casting, Sacrifice';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You call 2D4 Bariaur defenders of Ysgard from the plains of Ysgard to your location. They serve you for up to a year, and you may dismiss them at any time. They are intelligent, so you can assign them different tasks. They can refuse to complete a quest or otherwise take on complex burdens without your supervision.</p>
<p>No matter how many times you cast this spell, you can control no more than four bariaur rangers; others are released from service and return to Ysgard immediately. You choose which creatures to release.</p>
<dl>
    <dt>Sacrifice</dt> <dd>2 STR damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Exalted', 'Calling'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Crystalbrittle';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator  = 'Trobriand';
        $spell->rarity         = 'Rare';
        $spell->range          = '30 feet';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'One nonmagical object up to 5 cu ft';
        $spell->duration       = 'Permanent';
        $spell->description    = '<p>This spell reduces the hardness and Hit Points of the targeted object to that of glass (Hardness 1 and 1 Hit Point per inch of thicknes). If the object already has a lower hardness score, the spell has no effect.</p>
<p>As always, if the object is attended, its owner receives a Save. Unattended nonmagical objects do not receive Saves.</p>
<dl>
    <dt>Material Components</dt> <dd>A glass needle worth at least 100 gp</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the amount of volume that can be affected.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Cure Wounds';
        $spell->casting        = 'Somatic Casting or more';
        $spell->save_attribute = 'CON';
        $spell->range          = 'See text';
        $spell->targets        = 'One willing living creature or one undead creature';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You channel positive energy to heal the living or damage the undead. You restore Hit Points equal to 1D8 plus your spellcasting ability modifier to a willing living Target and restore 1 point of CON damage, or deal that amount of positive damage to an undead target. The number of Actions you spend when casting this spell determines its Targets, Range, Area, and other parameters.</p>
<dl>
    <dt>Somatic Casting</dt> <dd>The spell has a range of Touch. You must succeed at a melee touch attack to damage an undead Target</dd>
    <dt>Somatic Casting, Verbal Casting</dt> <dd>The spell has a range of 30 feet and doesn't require a touch attack when targeting an undead creature. An undead target must attempt a CON Save, taking half damage on a success, no damage on a critical success, or double damage on a critical failure.</dd>
    <dt>Material Casting, Somatic Casting, Verbal Casting</dt> <dd>You disperse positive energy in a 30-foot emanation. This has the same effect as the two-Action version, but it Targets all living and undead creatures in the burst.</dd>
</dl>
<dl>
    <dt>Material Component</dt> <dd>Your Holy Symbol or a vial of Sweet Water</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The amount of healing or damage increases by 1D8 + 1 CON damage.</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>See text</dd>
    <dt>Failure</dt> <dd>See text</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Healing', 'Necromancy', 'Positive'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Curse';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Based on Save';
        $spell->description    = '<p>You curse the Target. The Target has Disadvantage on all Attack Rolls, Saves, and Skill Checks.</p>';
        $spell->saves          = "<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Until the start of the Target's next turn</dd>
    <dt>Failure</dt> <dd>For 3 rounds</dd>
    <dt>Critical Failure</dt> <dd>For 10 rounds</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Curse'], 1);

        $spell              = new Spell;
        $spell->name        = 'Curse of Aging';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>A creature you touch must succeed a WIS Save or become cursed indefinitely. While under the influence of this curse, the target ages at twice their normal rate, becoming two days older for every day that passes. In addition, they have Disadvantage on all STR checks and Saves. A Remove Curse spell ends this effect.</p>
<dl>
    <dt>Material Components</dt> <dd>A turtle shell</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Cursed</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Chronomancy'], 4);

        $spell              = new Spell;
        $spell->name        = 'Curse of Youth';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'One creature within range';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>This spell reverses time for a humanoid that you can see within range until it becomes a helpless infant. An unwilling creatures must make a WIS Save to avoid the effect. The spell has no effect on a Shapechanger, a creature that does not naturally experience infancy, or a creature with 0 Hit Points.</p>
<p>The target retains all of its game statistics except its base Land Speed and Hit Points, which are changed to 10 feet and the target's CON modifier + the target's level, respectively. it retains its alignment and personality.</p>
<p>It cannot take any Actions or Reactions, cannot cast spells, and cannot communicate, except by crying (a person using the spell Comprehend Languages or similar abilities can interpret such crying to gain a rough understanding of the baby's emotional state). While under the effects of this spell the target's only movement option is to crawl. The target's gear is unaffected by this spell; it will likely fall off the target due to being vastly oversized.</p>
<p>While it reverts to his normal form, the creature returns to the number of Hit Points it hand before it transformed. If it reverts as a result of dropping to 0 Hit Points, any excess damage carries over to its normal form. As long as the excess damage carries over to its normal form. As long as the excess damage doesn't reduce the creature's normal form to 0 Hit Points, it isn't knocked unconscious.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>At the end of the duration, the target must make another WIS Save. If the target fails, the effect becomes permanent.</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Chronomancy'], 5);

        $spell                = new Spell;
        $spell->name          = 'Cutting Hand';
        $spell->casting       = 'Somatic Casting';
        $spell->spell_creator = 'Laeral Silverhand';
        $spell->rarity        = 'Rare';
        $spell->targets       = 'Self';
        $spell->duration      = 'Concentration, up to 1 minute';
        $spell->description   = '<p>You alter the structure of your hand so that it becomes as hard and sharp as a blade. Your hand gains a +1 bonus to Attack and Damage when making Unarmed attacks, and you inflict normal damage instead of subdual damage. You are considered armed with this hand. You cannot use that hand to cast spells, but can otherwise use the hand normally.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth'], 0);
    }
}
