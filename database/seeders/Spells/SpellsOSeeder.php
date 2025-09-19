<?php

namespace Database\Seeders\Spells;

use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsOSeeder extends Seeder
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

        $spell               = new Spell;
        $spell->name         = 'Oacil`Quevan';
        $spell->casting      = '1 hour (Material, Somatic, Verbal, Secondary Casters)';
        $spell->range        = '10-mile radius centered on casters';
        $spell->duration     = 'Instantaneous';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>2 other peer casters, each of whom must also cast this spell. One caster affects the growth and size of the plants, one determines the extent of the spell site and the area of change, and a third caster reshapes and reforms the plant life to the shape desired.</dd>
</dl>';
        $spell->description = '<p>The Forms of Unity and Age Among the Forests. Ritual of Complement.</p>
<p>This spell creates the many wondrous, massive forms of plant life seemingly indigenous to elven realms. It allows far more control and manipulation than standar plant control spells. The magics are permanent and grant casters the ability to make their work permanent beyond the lifespan of the plants through petrification.</p>
<p>This spell alters existing plant material and either petrifies it or shapes it into forms envisioned by the casters.</p>
<p>the maximum effect this spell can generate is the fusion into a single tree of a grove of trees with a cumulative branch span of no more than 1,000 feet; in general, this spell creates monstrous hollowed or solid trees with trunks of up to 400 feet in diameter. This ritual also allows partial fusion of trees, allowing thie lower trunks to remain separate but fusing the higher branches and trunks into large enclosures, such as the homes of Myth Drannor.</p>
<p>Effects and forms created by this ritual include the following.</p>
<ul>
    <li>Impenetrable barriers of thorns and brambles</li>
    <li>Branches among the treetops strengthened and woven to provide a defensive barrier proof against all but the mightiest dragon\'s claws</li>
    <li>Trees with immense hollowed chambers for homes high above the forest floor (petrified if the trees are nearing old age).</li>
    <li>Petrified large mushrooms set in parks for use as seats for the weary</li>
</ul>
<dl>
    <dt>Material Components</dt> <dd></dd>
</dl>';
        $helper->addTypesToSpell($spell, ['High Magic'], 8);
        $spell->skills()->save(app()->skills['Nature'], ['dc' => 25]);

        $spell              = new Spell;
        $spell->name        = 'Oasis';
        $spell->casting     = '30 minutes (Material, Somatic, Verbal)';
        $spell->range       = '30 feet';
        $spell->targets     = 'Patch of desert within range';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>This spell functions in any natural terrain on the Material Plane. It redirects the flow of water in the ground toward the surface at the designated point, creating a permanent water source similar to a natural spring. The spring discharges 15 gallons of pure drinking water each hour.</p>
<p>If the shape of the terrain is suitable, a pond forms around the spring. If there is already a natural spring within 1 mile, its water output is reduced by an amount equal to the water produced by this spell's spring. A spring that has its water output reduced to 0 gallons per hour dries up and ceases to be a spring.</p>
<p>This spell functions differently depending on the terrain in which it's cast. In a desert, you must succeed at a DC 25 caster level check to actually create the spring, and its output is 1 gallon of drinking water per caster level each day.</p>
<p>Furthermore, in dry areas, erosion may cause the flow of water to be blocked if the affected area is left untended before a sufficient amount of vegetation has grown around it to keep the soil in place. In an arctic environment, low temperatures may cause the water to freeze. In a tropical environment, parasites may contaminate the water if the spring is created in a place where the water stands in a stagnant pool.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water', 'Ritual'], 6);

        $spell               = new Spell;
        $spell->name         = 'Oath of Blood';
        $spell->casting      = '1 minute (Material, Somatic, Verbal, Ability Damage, Secondary Casters)';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>1 Secondary Caster of the same faith as the caster who must cast Animate Dead</dd>
    <dt>Ability Damage</dt> <dd>1 CON Damage</dd>
</dl>';
        $spell->range        = 'Touch';
        $spell->targets      = 'One willing living creature touched that has had the Geas spell cast upon them';
        $spell->duration     = 'Special';
        $spell->description  = '<p>This spell can only be cast on a willing creature that has had a Geas spell active on them.</p>
<p>If the target should die before completing the requirements of the Geas, this spell raises the target as if you had cast Create Undead.</p>';
        $spell->heightened   = '<dl>
    <dt>Heightened (+1)</dt> <dd>As the spell Create Undead, but only one undead</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment', 'Necromancy', 'Mental', 'Ritual', 'Evil'], 6);

        $spell              = new Spell;
        $spell->name        = 'Observing Shadow';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '10 miles';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>When you cast this spell, choose Sight or Sound. This spell creates a mobile shadow that transmits either all sounds within 60 feet of its location to you or you can see everything that is around the shadow. The shadow need not be man-shaped, but it is always of approximately the same cubic volume as you. For example, you can have it form a pointing hand. It can squeeze through any hole, and you can change the shape of the shadow at will. The shadow glides along the ground at Speed of 20 ft. It automatically floats down drops as if under the effect of a Feather Fall spell. The shadow cannot fly, but it does not touch the ground.</p>
<p>The shadow must be cast within 300 feet of yourself when first cast.</p>
<p>The shadow cannot pass into any Sanctified areas, areas that prevent Teleportation, or Extra Planar Travel, such as a Summoning Circle. The shadow also cannot squeeze through areas that have been constructed with gorgon's blood or lead in the walls mortar. The spell ends if you and the shadow are not on the same plane of existence.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>You can both hear and see around the shadow</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Shadow'], 3);

        $spell              = new Spell;
        $spell->name        = 'Obscure Object';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One object touched of up to 500 lbs';
        $spell->duration    = '8 hours';
        $spell->description = '<p>This spell hides an object from location by Divination. Such an attempt automatically Fails (if the Divination targets the object) or Fails to perceive it (if the Divination is targeted in the area).</p>
<dl>
    <dt>Material Components</dt> <dd>A piece of chameleon skin</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+1)</dt> <dd>Double the maximum wight of the object</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 1);

        $spell              = new Spell;
        $spell->name        = 'Obscuring Mist';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '20-foot burst. 120 foot range';
        $spell->duration    = '1 minute or until dismissed';
        $spell->description = '<p>You create a cloud of mist in the area that makes all creatures within it Concealed. You can dismiss the cloud with a Verbal Casting Action.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water', 'Air'], 2);

        $spell              = new Spell;
        $spell->name        = 'Oilskin';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature or small object touched';
        $spell->duration    = '1 hour';
        $spell->description = "<p>This spell prevents fog, rain, waves, hail, and other forms of precipitation from touching the person or small object it is cast upon. Precipitation comes within an inch of the person's body, but strikes an invisible barrier and does not penetrate to the clothes or skin. The spell is also effective against wetting by waves. The barrier does not affect any kind of missile or other object however.</p>
<p>A person under this spell can see more clearly than most in driving rain because none gets into his eyes. If struck by a wave, he remains dry, but if immersed in teh ocenan the mass of water is sufficient to overcome the barrier and he will become wet. Once out of the ocean, however, the spell will still work against precipitation.</p>
<dl>
    <dt>Material Components</dt> <dd>Small square of cloth which has been treated with oil so that it has become water-repellent.</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Ol`Iirtal`Eithun';
        $spell->casting     = '1 hour (Material, Somatic, Verbal, High Magic feat)';
        $spell->duration    = '24 hours';
        $spell->description = "<p>Flights of True Mark, Arrows of Art</p>
<p>One of the few combat-oriented High Magics, this spell allows the caster to enchant a quiver of 20 arrows with one of the listed effects. The arrow\'s magic can be cancelled only by the most powerful of spells.</p>
<dl>
    <dt>Dispel Arrow</dt> <dd>These arrows will, upon contact with a specific magical field or effect, cancel that effect as a Dispel Magic heightened to 5th level</dd>
    <dt>Snuff Arrows</dt> <dd>These arrows affect normal fire spells on contact, though their only effect is to extinguish any normal fires (of up to 5' radius from point of impact) or reduce the strength/damage of magical fires by half. These are by far, the most common use.</dd>
    <dt>Eagle's Mark</dt> <dd>These arrows act as Magic Missiles, homing in on a target unerringly. This spell causes the arrow to only deal 1D6 points of damage (no other modifiers, including from magical effects and/or feats).</dd>
    <dt>Targeting Arrow</dt> <dd>These arrows crackle with an ominous purple, and marks the target. The caster of this spell will then know the precise location of the marked target, and can then target the marked creature with further spells.</dd>
    <dt>Message Arrow</dt> <dd>These arrows deliver a verbal message of 30 words or less when it hits (either the target or a hard surface). The message can be heard by any creature within 10 feet radius of impact. The archer chooses the message when they are about to fire the arrow.</dd>
</dl>
<dl>
    <dt>Material Components</dt> <dd>20 non-magical arrows in a quiver</dd>
    <dt>Required Feats</dt> <dd>High Magic feat</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'High Magic'], 4);

        $spell              = new Spell;
        $spell->name        = 'Ooze Form';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes or until dispelled';
        $spell->description = '<p>You assume the form of a Small or Medium ooze. Regardless of the type of ooze you transform into, your base speed becomes 10 feet, climb speed 10 feet, swim speed 20 feet, and Blindsense 30 feet. You gain a +4 Resistance bonus on Saves against mind-affecting effects and poison. A wood or metal weapon that strikes you takes Acid damage as if from your slam unless the wielder succeeds at a DEX Save.</p>
<dl>
    <dt>Small Ooze</dt> <dd>If you assume this form, you gain a +4 size bonus to your CON score, a Slam attack (1D3 + 1D3 Acid) and Constrict (1D3), and take a -4 penalty to your DEX.</dd>
    <dt>Medium Ooze</dt> <dd>If you assume this form, you gain a +6 size bonus to your CON score, a –6 penalty to your DEX score, a Slam attack (1D4 plus 1D4 Acid), and constrict (1D4).</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Large Ooze: If you assume this form, you gain a +2 Size Bonus to your STR, +8 Size Bonus to CON, a Slam attack (2D4 plus 1D6 Acid and grab), and constrict (2D4), and you take a –8 penalty to your DEX.</dd>
    <dt>Heightened (+2)</dt> <dd>Huge Ooze: If you assume this form, you gain a +4 Size Bonus to your STR, a +10 Size Bonus to your CON score, a –10 penalty to your DEX score, Base Speed 20 feet, Climb speed 20 feet, Wwim speed 30 feet, a Slam Attack (2D6 plus 2D6 Acid and Grab), and Constrict (2D6).</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Orb of the Void';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 10 rounds';
        $spell->description    = "<p>You create a small weightless sphere of pure Negative Energy. As an Action, you can move it up to 30 feet in any direction. If it enters a space with a living creature, it stops moving for the round and that creature suffers 1 CON damage (CON Save negates). Any creature passing through or ending its turn in the space occupied by the sphere suffers 1 CON damage (CON Save negates).</p>
<p>If more than one orb (from different castings of the spell) enters the same space, the orbs automatically fuse together. The resulting orb uses the higher caster's DC and whichever duration has more time left. If the orbs are from different casters, each must make an opposed INT check to move the sphere.</p>
<p>An undead creature that passes through or ends its turn in the space occupied by the orb gains 2D4 X 5 temporary Hit Points for 1 hour.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No CON damage</dd>
    <dt>Failure</dt> <dd>1 CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 8);

        $spell                 = new Spell;
        $spell->name           = "Outcast's Hex";
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = 'Touch';
        $spell->targets        = 'One creature';
        $spell->duration       = 'Based on Save (see text)';
        $spell->description    = '<p>You afflict the target with a curse that makes its presence off-putting and grating, depending on the outcome of its WIS Save, suffering Disadvantage on all Deception, Diplomacy, Intimidation, or Performance checks.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>As failure, but the effect ends on its own after 1 minute instead</dd>
    <dt>Failure</dt> <dd>Disadvantage as noted, and all creatures encountered have an initial attitude one step worse</dd>
    <dt>Critical Failure</dt> <dd>As failure, except the initial attitude is two steps worse</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Curse', 'Enchantment'], 4);

        $spell                 = new Spell;
        $spell->name           = "Owl's Hex";
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature within range';
        $spell->duration       = '10 minutes';
        $spell->save_attribute = 'WIS';
        $spell->description    = "<p>You curse the target with lowered Wisdom unless they make a successful WIS Save.</p>
<p>This spell Counters and is Countered by Owl's Wisdom.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>You suffer a -1 penalty to your WIS</dd>
    <dt>Failure</dt> <dd>You suffer a -4 penalty to your WIS</dd>
    <dt>Critical Failure</dt> <dd>You suffer a -8 penalty to your WIS</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+4)</dt> <dd>You can target up to 10 creatures</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = "Owl's Wisdom";
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched creature';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>The target gets a +4 enchantment bonus to WIS.</p>
<p>This spell Counters and is Countered by Owl's Hex.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+4)</dt> <dd>The range becomes 30 feet and you can target up to 10 creatures.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment'], 2);
    }
}
