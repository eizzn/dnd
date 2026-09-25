<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsFSeeder extends Seeder
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

        $spell                = new Spell;
        $spell->name          = 'Fabricate';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->range         = '120 feet';
        $spell->spell_creator = 'Aksa';
        $spell->duration      = 'Instantaneous';
        $spell->description   = '<p>You convert raw materials into products of the same material. For example, you can fabricate a wooden bridge from a clump of trees, a rope from a patch of hemp, and clothes from flax or wool.</p>
<p>Choose raw materials that you can see within range. You can fabricate a Large or smaller object (contained within a 10-foot cube, or eight connected 5-foot cubes), given a sufficient quantity of raw material. If you are working with metal, stone, or another mineral substance, however, the fabricated object can be no larger than Medium (contained within a single 5-foot cube). The quality of objects made by the spell is commensurate with the quality of the raw materials.</p>
<p>Creatures or magic items can’t be created or transmuted by this spell. You also can’t use it to create items that ordinarily require a high degree of craftsmanship, such as jewelry, weapons, glass, or armor, unless you have proficiency with the type of artisan’s tools used to craft such objects.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Faerie Dust';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '5-foot burst. 30 foot range';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 round';
        $spell->description    = "<p>Sparkling magical dust fills the spell's area, making those within drowsy. Each creature in the area must attempt a WIS Save.</p>";
        $spell->saves          = "<dl>
    <dt>Success</dt> <dd>The creature is unaffected</dd>
    <dt>Failure</dt> <dd>The creature can't use Reactions and takes a -2 conditional penalty to Perception checks</dd>
    <dt>Critical Failure</dt> <dd>The Target falls asleep. It automatically awakens when the spell ends</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Faerie Fire';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '20-foot cube. 60 foot range';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>Each object in a 20-foot cube within range is outlined in blue, green, or violet light (your choice). Any creature in the area when the spell is cast is also outlined in light if it fails a DEX Save. For the duration, objects and affected creatures shed dim light in a 10-foot radius.</p>
<p>Any attack roll against an affected creature or object gains a +1 bonus to hit if the attacker can see it, and the affected creature or object can't benefit from being invisible.</p>";
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 2);

        $spell              = new Spell;
        $spell->name        = 'Faith Healing';
        $spell->casting     = 'Somatic Casting or more';
        $spell->range       = 'See text';
        $spell->targets     = 'One willing living creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell functions like Cure Wounds, except that it always Heals 8 Hit Points and it only affects living creatures that worships the same Patron as you. All others are unaffected by this spell.</p>
<dl>
    <dt>Somatic Casting</dt> <dd>The spell has a range of Touch</dd>
    <dt>Somatic Casting, Verbal Casting</dt> <dd>The spell has a range of 30 feet</dd>
    <dt>Material Casting, Somatic Casting, Verbal Casting</dt> <dd>The spell affects all in a 30-foot emanation.</dd>
</dl>
<dl>
    <dt>Material Components</dt> <dd>Your Holy Symbol or a vial of Sweet Water</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The amount Healed increases by +8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Healing', 'Necromancy', 'Positive'], 1);

        $spell               = new Spell;
        $spell->name         = 'Faithful Healing';
        $spell->casting      = '1 round (Somatic, Verbal)';
        $spell->range        = 'Touch';
        $spell->targets      = 'Creature touched';
        $spell->requirements = 'You must have the Cure Wounds Spell in your spell list and have the ability to cast it';
        $spell->duration     = 'Until discharged, up to 6 hours';
        $spell->description  = '<p>You place an Enchantment on the Target that immediately casts Cure Wounds on them if they fall Unconscious or start dying, at which point the spell is discharged and ends.</p>';
        $spell->heightened   = '<dl>
    <dt>Heightened (+1)</dt> <dd>The Cure Wounds Spell is Heightened the same amount.</dd>
    <dt>Heightened (+4)</dt> <dd>Instead of Cure Wounds, this Spell casts Heal (You must have Heal in your spell list and have the ability to cast it)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Enchantment', 'Healing'], 3);

        $spell                = new Spell;
        $spell->name          = 'Faithful Hound';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->range         = '30 feet';
        $spell->spell_creator = 'Mordenkainen';
        $spell->duration      = '8 hours';
        $spell->description   = '<p>You conjure a phantom watchdog in an unoccupied space that you can see within range, where it remains for the duration, until you dismiss it as an action, or until you move more than 100 feet away from it.</p>
<p>The hound is invisible to all creatures except you and can’t be harmed. When a Small or larger creature comes within 30 feet of it without first speaking the password that you specify when you cast this spell, the hound starts barking loudly. The hound sees invisible creatures and can see into the Ethereal Plane. It ignores illusions.</p>
<p>At the start of each of your turns, the hound attempts to bite one creature within 5 feet of it that is hostile to you. The hound’s attack bonus is equal to your spellcasting ability modifier + your proficiency bonus. On a hit, it deals 4D8 piercing damage.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 4);

        $spell                = new Spell;
        $spell->name          = 'False Arcane Eye';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Volothamp Geddarm';
        $spell->range         = '30 feet';
        $spell->duration      = 'Concentration, up to 1 hour';
        $spell->description   = '<p>You create an illusionary copy of one of your eyeballs (this requires that you have at least one working eyeball) that appears solid and translucent. The appearance is exactly like the eye from Arcane Eye, and requires a Detect Magic spell to tell that it is not an Arcane Eye. This spell is usually used as a distraction or lure.</p>';
        $helper->addTypesToSpell($spell, ['Illusion'], 0);

        $spell                = new Spell;
        $spell->name          = 'False Dawn';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Lathander';
        $spell->range         = '0';
        $spell->area          = '30 ft radius emanation';
        $spell->duration      = '1 minute';
        $spell->description   = '<p>You call into existence a bright reddish light, as if a sunrise were occurring, within the Area. This light is bright enough to read by, dispels all magical Darkness of equal or lower level, and cannot be Dispelled.</p>
<p>Any Undead that starts their turn within the Area takes 6D4 Positive Damage (no Save). Undead take this Damage only once per casting of this spell. Any Undead that is reduced to 0 HP or lower instantly turns to dust. Any Undead that survives are also Dazzled: 5.</p>
<dl>
    <dt>Material Components</dt> <dd>A clear, red, or yellow hued gemstone or gemstones of not less than 1,000 gp, which this spell consumes.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 6);

        $spell                 = new Spell;
        $spell->name           = 'False Lie';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = '';
        $spell->range          = '60 feet';
        $spell->targets        = 'One creature within range';
        $spell->duration       = '6 hours';
        $spell->description    = "<p>The Target of this spell appears shifty and dishonest. Sense Motive checks made against the Target suffer a -10 penalty, and any failure convinces the observer that the Target is lying. Anyone who casts a spell that reveals lies (such as Zone of Truth) can attempt a caster level check. If the check fails, the spell registers the Target is lying, regardless of whether the Target is telling the truth or not.</p>
<dl>
    <dt>Material Components</dt> <dd>A serpent's tongue</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No affect</dd>
    <dt>Failure</dt> <dd>Full affect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor', 'Emotion'], 2);

        $spell              = new Spell;
        $spell->name        = 'False Life';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '24 Hours';
        $spell->description = '<p>You gain a number of temporary Hit Points equal to 6 plus your spellcasting ability modifier.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The temporary Hit Points increase by 6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 1);

        $spell              = new Spell;
        $spell->name        = 'False Vision';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = '100-foot burst. Touch range';
        $spell->duration    = '24 hours';
        $spell->description = "<p>Any scrying spell sees, hears, smells, and otherwise detects whatever you wish within the area, rather than what is actually in the area. You can Concentrate on the spell each round to change the illusion as you desire, including playing out a complex scene. If the scrying spell is of a higher level than False Vision, the scryer can attempt a Perception check to disbelieve the illusion, though even if they are successful, they can't learn what's truly going on in the area.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor', 'Ritual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Familiar Refuge';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Unlimited';
        $spell->targets     = 'You or your familiar';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You Teleport yourself to your Familiar or you Teleport your Familiar to yourself. You cannot Teleport any additional creatures.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation', 'Familiar'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Fanfare';
        $spell->casting        = 'Material Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->area           = '240-foot cone emanation';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>This spell creates a trumpet blast so loud that it can shake the foundations of buildings or stop an army in its tracks.</p>
<p>Every creature within the area must make a CON Save. Success means the creature is Stunned: 2 and Deafened: 4. Failure means they suffer 6D6 Sonic Damage as well as being Stunned and Deafened for double the duration.</p>
<p>Objects take 4D6 Sonic damage and ignores Hardness.</p>
<dl>
    <dt>Material Components</dt> <dd>A small, tin horn</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No affect</dd>
    <dt>Success</dt> <dd>Stunned: 2, Deafened 4</dd>
    <dt>Failure</dt> <dd>Stunned: 4, Deafened 8, 6D6 Sonic Damage</dd>
    <dt>Critical Failure</dt> <dd>Stunned: 6, Deafened 10, 12D6 Sonic Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic', 'Auditory'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Fang Trap';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = 'Touch, area up to 60 sq feet';
        $spell->targets        = 'Object or area touched';
        $spell->duration       = 'Permanent until discharged';
        $spell->description    = "<p>While casting this spell, you physically trace the area or handle the object to be trapped. This spell functions like Glyph of Warding, except that it can't be made to activate on the basis of faith or alignment, and you can't be caught in your own Fang Trap.</p>
<p>This spell is usually cast on a specific spot, such as a doorway or an area of floor. It can be set to distinguish between humans and Scaled Ones, or between beings wearing particular items and those who are not. The trigger can't be a symbol, but it may be one or more specific items (For example, \"six metal rings on digits, no more and no less\"</p>
<p>When this spell is discharged, the subject is held immobile for 1 round, and the subject makes a CON Save. The subject takes 1D4 Piercing damage from the bite of a pair of unseen jaws.</p>
<dl>
    <dt>Material Components</dt> <dd>A fang from any snake</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D4</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the area by 60 sq feet</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Held for 1 round and no damage</dd>
    <dt>Failure</dt> <dd>Held for 1 round and full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);

        $spell              = new Spell;
        $spell->name        = 'Fantastic Machine';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>You create a mechanical construct. You can command the machine to perform any simple, physical task you can describe in 25 words or fewer. You can order the machine to perform the same task over and over, but you can't change the task. You must specify the task when you cast the spell. The machine acts on your turn in the initiative order and acts the turn you cast it.</p>
<p>The machine has the following</p>
<ul>
    <li>The machine functions as a Large (tall) animated object</li>
    <li>It has a Speed of 40 and can Swim and Fly at 10 (Poor maneuverability)</li>
    <li>It has 22 Hit Points</li>
    <li>AC 14 (-1 Size, +5 Natural Armor) Damage Reduction 10 (Hardness)</li>
    <li>STR: 18, DEX: 14, CON: 20, INT: 2, WIS: 10, CHA: 3</li>
    <li>It has a Proficiency Bonus of +2</li>
    <li>A light load for the machine is up to 230 pounds, a heavy load is 231-460 pounds, and a heavy load is 461-700 pounds. The machine can lift a weight of up to 1,400 pounds to a height of 15 feet. It can push or drag 3,500 pounds.</li>
    <li>It can Fly or Swim only with a Light Load</li>
    <li>It can excavate 7,000 pounds of loose rock each minute (which is sufficient to clear a 5-by-5-by-5-foot space in 3 rounds). It can excavate sand or loose soil at twice that rate.</li>
    <li>The machine has a Melee Attack bonus of +5 and can make a Slam attack that deals 1D8 + 3. It deals Triple damage against stone or metal.</li>
    <li>the machine can throw small rocks with a Ranged Attack bonus of +4 with a range increment of 150 feet (and can throw up to 10 range increments) and Deal 2D6+4 points of Bludgeoning damage.</li>
</ul>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+3)</dt> <dd>
        <ul>
            <li>The machine functions as a Large (tall) animated object made of Adamantine</li>
            <li>It has a Speed of 60 and can Swim and Fly at 20 (Poor maneuverability)</li>
            <li>It has 88 Hit Points</li>
            <li>AC 20 (-1 Size, +11 Natural Armor) Damage Reduction 20 (Hardness)</li>
            <li>STR: 22, DEX: 12, CON: 24, INT: 2, WIS: 10, CHA: 3</li>
            <li>It has a Proficiency Bonus of +5</li>
            <li>A light load for the machine is up to 520 pounds, a medium load is 521 to 1,040 pounds, and a heavy load is 1,041 to 1,560 pounds. The machine can lift a weight of up to 3,120 pounds to a height of 15 feet. It can push or drag 7,800 pounds.</li>
            <li>It can Fly or Swim only with a Light Load</li>
            <li>It can excavate 20,000 pounds of loose rock each minute (which is sufficient to clear a 5-by-5-by-5-foot space in 1 round). It can excavate sand or loose soil at twice that rate.</li>
            <li>The machine has a Melee Attack bonus of +11 and can make a Slam attack that deals 1D8 + 6. It deals Triple damage against stone or metal.</li>
            <li>the machine can throw small rocks with a Ranged Attack bonus of +6 with a range increment of 150 feet (and can throw up to 10 range increments) and Deal 2D6+8 points of Bludgeoning damage.</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 6);

        $spell              = new Spell;
        $spell->name        = 'Far Step';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You teleport up to 60 feet to an unoccupied space you can see. On each of your turns before the spell ends, you can use an Action to teleport in this way again. You cannot spend more than one Action each turn to teleport in this way.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 5);

        $spell              = new Spell;
        $spell->name        = 'Far Shot';
        $spell->casting     = 'Material Casting';
        $spell->targets     = 'Weapon touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You cast this spell on up to 3 Targets. This can include thrown weapons, ammunition for a ranged weapon, or just plain rocks sized for throwing by a medium-sized creature. The Targets maximum range is multiplied by 3. Once the thrown weapon or ammunition is used, it loses this ability.</p>
<dl>
    <dt>Material Components</dt> <dd>The thrown weapons or ammunition to be enchanted</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Attack', 'Ranged'], 1);

        $spell                = new Spell;
        $spell->name          = 'Favor of Chauntea';
        $spell->casting       = '1 minute (Somatic, Verbal)';
        $spell->spell_creator = 'Chauntea';
        $spell->range         = 'Touch';
        $spell->targets       = 'Seven plants, vegetables, or pieces of fruit';
        $spell->duration      = 'Permanent';
        $spell->description   = '<p>This spell confers fertility to plants or doubles the yield of already mature, growing plants. For example, picked fruits in a basket swell to twice their former size when this spell is cast on them. Tainted, diseased, spoiled, or poisoned plants are rendered wholesome by this spell, but plants naturally harmful to humans are not made safe. Affected plants seem to glow with life and goodness, and their dramatic increase in volume can break open containers if the chosen produce has strength enough.</p>
<p>This spell can only affect a plant, vegetable, or piece of fruit once.</p>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of Targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 2);

        $spell                = new Spell;
        $spell->name          = 'Favor of Ilmater';
        $spell->casting       = 'Somatic Casting';
        $spell->spell_creator = 'Ilmater';
        $spell->range         = 'Touch';
        $spell->targets       = 'Creature touched';
        $spell->duration      = '30 minutes';
        $spell->description   = '<p>The Target gains the following.</p>
<ul>
    <li>Immune to Subdual damage</li>
    <li>Immune to Charm, Compulsion, Dazed, Exhaustion, Fatigue, Sickened, and Stunned.</li>
    <li>If between -1 and -9 Hit Points, you become Slowed: 1</li>
</ul>
<p>Once this spell ends, any persistent effects that the Target become immune to due to this spell takes effect. During this spell, any persistent effects continue to count towards their time limits if any.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 4);

        $spell                = new Spell;
        $spell->name          = 'Favor of the Gods';
        $spell->casting       = 'Verbal Casting';
        $spell->spell_creator = 'Tymora';
        $spell->range         = '30 feet';
        $spell->targets       = 'One creature';
        $spell->duration      = '3 hour or until triggered';
        $spell->description   = '<p>On the next Save that the Target has to make, they make it with Advantage, then this spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 2);

        $spell                = new Spell;
        $spell->name          = 'Favor of Tymora';
        $spell->casting       = 'Somatic Casting';
        $spell->spell_creator = 'Tymora';
        $spell->range         = '30 feet';
        $spell->targets       = 'One creature within range';
        $spell->duration      = '1 minute';
        $spell->description   = '<p>The Target glistens with an aura of golden magical energy. The Target gets a +2 Luck bonus to AC and Saves</p>
<p>This spell Counters and is Countered by Bane of Beshaba.</p>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
    <dt>Heightened (+2)</dt> <dd>Increase the Luck bonus by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Bless'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Fear';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Varies';
        $spell->description    = '<p>You plant Fear in the target, with effects based on its Save.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The Target is unaffected</dd>
    <dt>Success</dt> <dd>The Target is Frightened 1</dd>
    <dt>Failure</dt> <dd>The Target is Frightened 2</dd>
    <dt>Critical Failure</dt> <dd>The Target is Frightened 3 and fleeing for 1 round</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The spell gains Area of 30-foot Cone, and affects all in the area.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Emotion', 'Illusion', 'Fear'], 1);

        $spell              = new Spell;
        $spell->name        = 'Fearsome Grapple';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>Two short, otyugh-like tentacles sprout from under your arms to hang limply at your sides. You grow two tentacles that grants you a +4 Circumstance bonus to Grapple checks. These tentacles cannot attack, hold objects, manipulate items, or perform any Action other than Grapple.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+3)</dt> <dd>You grow 4 tentacles instead and your bonus to Grapple becomes +8.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Feast of Champions';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = '60 feet';
        $spell->duration    = '1 hour plus 12 hours (see text)';
        $spell->description = '<p>You bring forth a magnificent feast, including a grand table, chairs, service, and food and drink. The feast takes 1 hour to consume, and the Curing effects take effect immediately.</p>
<p>Every creature partaking of the feast gains the following.</p>
<ul>
    <li>Cured of all Disease</li>
    <li>All Fear effects are ended, and gains immunity to Fear for the next 12 hours</li>
    <li>Cured of all Sickness</li>
    <li>All Nausea effects are ended</li>
    <li>Al levels of Exhaustion are removed</li>
    <li>Poison, and gains immunity to Poison for the next 12 hours</li>
    <li>The nectar-like beverages heals 30 Hit Points of Damage and grants 15 Temporary Hit Points for the next 12 hours</li>
    <li>The food grants a +1 Morale bonus to all Attack Rolls, Saves, and Ability Checks for the next 12 hours.</li>
</ul>
<p>If the feast is interrupted for any reason, the spell is ruined and the lasting effects (Fear immunity, Poison Immunity, Temprary Hit Points and the Morale Bonus) ends.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 7);

        $spell              = new Spell;
        $spell->name        = 'Feather Fall';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'One falling creature within range';
        $spell->duration    = '1 minute or until dismissed';
        $spell->description = "<p>The Target's fall slows to 60 feet per round, and the portion of the fall during the spell’s duration doesn’t count when calculating falling damage. If the Target reaches the ground while the spell is in effect, it takes no damage from the fall. The spell is dismissed as soon as the Target lands.</p>";
        $helper->addTypesToSpell($spell, ['Air', 'Enchantment'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Feeblemind';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One humanoid creature';
        $spell->save_attribute = 'INT';
        $spell->spell_creator  = 'Hamring';
        $spell->duration       = 'Varies';
        $spell->description    = "<p>You drastically reduce the target's mental factulties. The effect depends on the target's Save.</p>";
        $spell->saves          = "<dl>
    <dt>Critical Success</dt> <dd>The Target is unaffected</dd>
    <dt>Success</dt> <dd>The Target is stupefied 2 for 1 round</dd>
    <dt>Failure</dt> <dd>The Target is stupefied 4 with a permanent duration</dd>
    <dt>Critical Failure</dt> <dd>The target's Intellect is permanetly reduced to 1 and it treats its Charisma, Intelligence, and Wisdom modifiers as -5. It loses all class abilities that require mental faculties, including all spellcasting. If the Target is a PC, they become an NPC</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+3)</dt> <dd>You can Target a non-humanoid creature.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Illusion', 'Disorienting'], 8);

        $spell              = new Spell;
        $spell->name        = 'Feet to Fins';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One willing creature touched';
        $spell->duration    = '1 hour';
        $spell->description = "<p>The target's feet transform into fins, improving mobility in the water but reducing it on land. The Target gains a swim Speed equal to its land Speed. Its land Speed then becomes 5 feet.</p>";
        $helper->addTypesToSpell($spell, ['Morph', 'Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Feign Death';
        $spell->casting     = '1 minute';
        $spell->range       = 'Touch';
        $spell->targets     = 'One willing creature touched';
        $spell->duration    = '8 hours';
        $spell->description = '<p>You place the Target into a death-like condition. You may choose one of the following.</p>
<uL>
    <li>You may place the Target in a cataleptic state that is impossible to distinguish from death</li>
    <li>You may place the Target in a coma or deep sleep.</li>
</uL>
<p>Although able to smell, hear, and know what is going on, the Target is Blind and has no sense of touch or pain. The following applies.</p>
<ul>
    <li>The Target does not need to eat, drink or breathe while under the effects of this spell.</li>
    <li>Immune to subdual damage and gains Damage Resistance to all other damage.</li>
    <li>Immune to Mind-affecting effects, Paralysis, Poison, Disease, and Enervation. If any Poison or Disease was affecting the Target before the spell took effect, those effects are halted until this spell ends.</li>
</ul>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 2);

        $spell              = new Spell;
        $spell->name        = 'Fell the Greatest Foe';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You gain the ability to deal more damage to larger opponents.</p>
<ul>
    <li>+1D6 vs Large creatures</li>
    <li>+2D6 vs Huge creatures</li>
    <li>+3D6 vs Gargantuan creatures</li>
    <li>+4D6 vs Colossal creatures</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Fetid Breath';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->save_attribute = 'CON';
        $spell->area           = '10 foot cone';
        $spell->duration       = '1 round';
        $spell->description    = '<p>This spell functions like Stinking Cloud, except as noted here. You exhale a 10-foot cone of stinking gas. All those in the area, and any who enter the area before the start of your next turn must make a CON Save. Failure causes the to Nauseated: 3. Any bonuses or penalties vs Poison applies to this Save.</p>
<dl>
    <dt>Material Components</dt> <dd>A clove of garlic or an onion, which you must eat</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Nauseated: 3</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration the cloud persists.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Poison'], 1);

        $spell              = new Spell;
        $spell->name        = 'Fey Disappearance';
        $spell->casting     = 'Somatic Casting';
        $spell->duration    = '1 round';
        $spell->description = "<p>You can ignore natural difficult terrain (such as underbrush).</p>
<p>If you have a pool of Spell Points, you can increase the cost of Fey Disappearance by 2 Spell Points to also turn invisible for the spell's duration, before taking your Step or Stride. Acting in a hostile manner doesn't dismiss this invisibility.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor'], 3);

        $spell              = new Spell;
        $spell->name        = 'Fey Form';
        $spell->casting     = 'Somatic Casting';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->targets     = 'Self';
        $spell->description = '<p>You transform into a fey creature with a CR of 1 or less</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the maximum CR by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Fey Hunter';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You are enchanted so that you can combat the fey. Any weapon you wield (or ammunition that is shot from a weapon you are wielding) is considered Magical, Cold Iron and Silvered.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell               = new Spell;
        $spell->name         = 'Fhaor`Akh`Tel`Quess';
        $spell->casting      = '12 hours (Material, Somatic, Verbal, Secondary Casters, Skill Check)';
        $spell->targets      = 'One willing elf';
        $spell->duration     = 'Instantaneous';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>Between 5 and 10 secondary casters can be involved</dd>
</dl>';
        $spell->description = "<p>Tribute of One's Duty to the People. Ritual of Complement.</p>
<p>This ceremony allows an elf of any age or health to sacrifice his or her life and normal existence in order to better serve the clan or community in a different form. This spell severs the elf's ties with the Call to Arvandor, but the duty and the powers of its new form prevent the elf from descending into madness; now, the Call is replaced by the Duty the form gives him.</p>
<p>Elves can become one of the following.</p>
<ul>
    <li>Undead Baelnorn (duty of guardianship of things, places, or people)</li>
    <li>Revered One (duty of guardianship of things, places, or people)</li>
    <li>Tree Spirits (Dryad, Hamadryad, Satyr, or Treant) (duty of guardianship of the trees and to act as advisers to the Elven Court)</li>
</ul>
<p>The transformation alters the elf's dying form into a different state, not quite undead but not alive in the conventional sense for an elf. Transformed thus,the elf\'s body is either changed into its new form, or the body dies and the spirit then inhabits the new form, and the body is then interred as a special part of the closing ritual.</p>
<p>This is one of the greatest sacrifices an elf can make for his community or clan, and thus those who undergo it are accorded the highest honors both before and after the ritual.</p>";
        $helper->addTypesToSpell($spell, ['High Magic', 'Necromancy'], 9);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 30]);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 25]);
        $spell->materials()->save(Material::where('name', 'Miscellaneous')->firstOrFail(), ['meta' => 'Depending on the final form']);

        $spell              = new Spell;
        $spell->name        = 'Field of Life';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '20-foot burst. 30 foot range';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>A field of positive energy fills the area, exuding warmth and rejuvenating those within. Each living creature that starts its turn in the area regains 1d4 Hit Points, and any undead creature that starts its turn in the area takes 1d4 positive damage.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+3)</dt> <dd>The healing and damage increase to 1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Healing', 'Necromancy', 'Positive'], 6);

        $spell              = new Spell;
        $spell->name        = 'Fiend Form';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '30 minutes';
        $spell->description = '<p>You turn yourself into a Fiend. Choose a Demon, Devil, or Yugoloth of CR 5 or lower. You turn into that creature and gain all of its abilities. Spells and effects that affect Evil Outsiders affects you except for Banish affects, which causes the spell to end immediately and leaves to Stunned: 3.</p>
<dl>
    <dt>Material Components</dt> <dd>A bone from any fiendish creature. If you have a bone from a Devil, then you may only turn into a Devil</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the maximum CR by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Evil'], 5);

        $spell              = new Spell;
        $spell->name        = 'Fierce Pride of the Beastlands';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = '120 feet';
        $spell->duration    = '3 hours';
        $spell->description = '<p>You summon a pride of celestial lions from the Wilderness of the Beastlands. When you complete this spell, 2D4 Celestial Lions appear. Ten minutes later, 1D4 Celestial Dire Lions appear. Each creature has maximum Hit Points.</p>
<p>You can as an Action, command a single lion or all of them with a command. Lions without commands defend you and themselves. You can dismiss them singly or in groups as an Action.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning'], 8);

        $spell              = new Spell;
        $spell->name        = 'Fiery Body';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You become living flame, giving you the following.</p>
<ul>
    <li>Fire Immunity</li>
    <li>resistance 10 to Precision Damage</li>
    <li>Weakness 5 to Cold and to Water</li>
</ul>
<p>Any creature that touches you or damages you with an unarmed attack or non-reach melee weapon takes 3D6 Fire damage.</p>
<p>Your unarmed attacks deal 1D4 additional Fire damage, and your Fire spells deal one additional die of Fire damage (of the same damage die the spell uses). You can cast Produce Flame as an innate spell with a single Somatic Casting action.</p>
<p>In Fire form, you have a fly Speed of 40 feet and don't need to breathe.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>You have resistance 15 to Precision damage, creatures touching you take 4D6 Fire damage instead of 3D6, your unarmed attacks deal 2D4 Fire damage, and you have a fly Speed of 60 feet.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Fire', 'Polymorph', 'Transmutation'], 7);

        $spell                = new Spell;
        $spell->name          = 'Fiery Furnace';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Darsson';
        $spell->range         = '60 feet, 50 ft cube';
        $spell->duration      = '8 hours';
        $spell->description   = '<p>You raise the temperature in the affected area to the level of extreme heat. For every minute spent breathing the air in the area, a creature vulnerable to heat and fire takes 1D6 points of lethal Fire damage (no Save). In addition, the creature must make a CON Save every 5 minutes (DC 15 +1 per previous check) or take 1D4 points of nonlethal Fire damage. Those wearing heavy clothing or any sort of armor take a -4 penalty on their Save. In addition, those wearing metal armor, as well as those coming in contact with metal that has been in the area for at least 1 hour, are affected as if by a Heat Metal spell.</p>
<p>This spell was originally developed as a means of cooking food (cast inside cauldrons, brick ovens, and smoke houses) or for creating a comfortable environment for heat-loving pets.</p>';
        $spell->heightened = '<dl>
    <dt>Permanency (Heightened +2)</dt> <dd>200 gp. 1 CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 2);

        $spell                = new Spell;
        $spell->name          = 'Fiery Protector';
        $spell->casting       = '1 hour (Material, Somatic, Verbal)';
        $spell->spell_creator = 'Daltim';
        $spell->range         = 'Touch';
        $spell->targets       = 'Any closable item such as a book or box';
        $spell->duration      = 'Permanent';
        $spell->description   = "<p>This spell is usually cast on an object, sometimes a spellbook, that you wish to protect. This spell summons and imprisons an unintelligent and very minor Fire Elemental to guard the object. Much like Fire Trap, this spell can be placed on any closable item such as a book, box, door, or chest. No other closure or warding spells can be placed on the item; if such an attempt is made, both spells fail. It requires special markings to be made on the affected item, used to ward the elemental and bind it to the item (these markings are commonly known by thieves as some sort of trap). If a thief successfully Disarms the item, the elemental is freed. It might choose to attack before fleeing. An unsuccessful Dispel Magic does not cause the spell to go off, while a successful Dispel Magic causes the spell to dissipate and returns the imprisoned elemental harmlessly to the Elemental Plane of Fire.</p>
<p>You can use the trapped object without activating the guardian. You can also establish a password which can be used by others to allow safe access to the object. If the object is opened by anyone else, the spell is activated, and the object's guardian is released to attack the transgressor. The elemental is similar to a Fire Mephit but with an INT of 2. The elemental attempts to kill or drive away the individuals who tried to open the protected item. It will not move more than 360 feet from the protected object. If the elemental is killed, the spell ends. Otherwise, the creature stays active until the offending individuals are killed, goes away. After which, the elemental returns to the protected item and continues to guard it.</p>
<p>During casting, you must somehow mark the protected item and make a small symbol that serves as the  prison for the elemental.</p>
<dl>
    <dt>Material Components</dt> <dd>Sulphur, sprinkled onto the object, a ruby worth at least 500 gold pieces; the gem is used to lure the fire elemental into its prison and is claimed by the elemental.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Enchantment', 'Ritual'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Fiery Tentacles';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->spell_creator  = 'Daltim';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>This spell functions like Black Tentacles, except that the tantacles are limned in blue-white fire. Every creautre within the area of the spell takes 10 Fire damage each round. A successful DEX Save halves the damage, but a Grappled Target cannot make a Save</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Fire'], 6);
        $spell->materials()->save(Material::where('name', 'Creature Part')->firstOrFail(), ['meta' => 'A piece of tentacle from a Giant Octopus or Giant Squid']);

        $spell              = new Spell;
        $spell->name        = 'Fiery Vision';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You gain the ability to shoot 2 fiery rays from your eyes, targeting one or two opponents within range. Using an Action, make a Ranged Spell attack to hit, each hit dealing 4D6 Fire damage. You may not shoot these rays more than once each turn.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 6);

        $spell              = new Spell;
        $spell->name        = 'Filter';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>This spell creates an invisible bubble of protection around the targets body that filters out all noxious and toxic elements in the air. The Target takes no damage and suffers no penalties from inhaled natural or alchemical poisons as well as magical poisons created by spells of 4th level or lower. Against spells of 5th level or higher, the Target gets a +4 bonus to their Saves against inhaled Poison effects.</p>
<dl>
    <dt>Material Components</dt> <dd>A strand of spider web and a scrap of cotton cloth</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 2);

        $spell               = new Spell;
        $spell->name         = 'Find Familiar: Humanoid';
        $spell->casting      = '24 hours (Verbal)';
        $spell->requirements = 'Caster must be of draconic ancestry';
        $spell->range        = '30 feet';
        $spell->targets      = 'Self';
        $spell->duration     = 'Instantaneous';
        $spell->description  = "<p>You call onto ancient divine pacts made by gods or old, to attempt to summon the spirit of an orc, goblin, or kobold. There is a 20 percent chance that no spirit is found. The spirit takes on the physical form it used to have when alive, appearing in an unoccupied space within range. For all intents and purposes, the creature has been brought back to life and is now affected by the spell permanently. If the creature drops to 0 Hit Points, it disappears into mystical blue dust leaving behind no physical form.</p>
<p>Alternatively, you may Target a living orc, goblin, or kobold within range for the duration of the cast. At the end of the 24 hours, the creature becomes permanently affected by the spell.</p>
<p>The creature is permanently charmed and is overcome with an unbreakable loyalty to you. Although the creature is not under your direct control, it takes your requests or actions in the most favorable way it can; even willing to give its life to you if necessary. You can't have more than one familiar at a time. The familiar can act independently in order to progress your agenda without any input from you, but will also obey all of your commands to the best of its ability.</p>
<p>While your humanoid familiar is within 5 miles of you, you can communicate with it telepathically. If your familiar dies, you know the exact location of its death.</p>
<p>Killing your own familiar goes against the covenant the ancient gods granted, and may bring upon you their wrath.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Enchantment', 'Dragon', 'Familiar', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Find the Path';
        $spell->casting     = '1 minute (Visual, Somatic, Material)';
        $spell->targets     = 'Self';
        $spell->duration    = '24 Hours';
        $spell->description = "<p>This spell allows you to find the shortest, most direct physical route to a specific fixed location that you are familiar with on the same plane of existence. If you name a destination on another plane of existence, a destination that moves (such as a mobile fortress), or a destination that isn't specific (such as \"a green dragon's lair\"), the spell fails.</p>
<p>For the duration, as long as you are on the same plane of existence as the destination, you know how far it is and in what direction it lies. While you are traveling there, whenever you are presented with a choice of paths along the way, you automatically determine which path is the shortest and most direct route (but not necessarily the safest route) to the destination.</p>";
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 6);

        $spell              = new Spell;
        $spell->name        = 'Find Traps';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->range       = '120 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You sense the presence of any trap within range that is within line of sight. A trap, for the purpose of this spell, includes anything that would inflict a sudden or unexpected effect you consider harmful or undesirable, which was specifically intended as such by its creator. This, the spell, would sense an area affected by the Alarm spell, a Glyph of Warding, or a mechanical trap, but it would no reveal a natural weakness in the floor, an unstable ceiling, or a hidden sinkhole.</p>
<p>The spell merely reveals that a trap is present. You don't learn the location of each trap, but you do learn the general nature of the danger posed by a trap you sense.</p>";
        $helper->addTypesToSpell($spell, ['Detection', 'Divination'], 2);

        $spell              = new Spell;
        $spell->name        = 'Fine-Tuning';
        $spell->casting     = 'Material Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Musical instrument touched';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You make an ordinary musical instrument perform as if it were a masterwork instrument. For the duration, the instrument grants a +2 Circumstance bonus to Perform checks. This spell has no effect on musical instruments that are already masterwork.</p>
<dl>
    <dt>Material Components</dt> <dd>The musical instrument to target</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Finger of Agony';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '30 feet';
        $spell->targets        = 'One living creature within range';
        $spell->duration       = '3 rounds';
        $spell->description    = '<p>You point your finger toward the target. The Target feels their vitals rupture within them, causing great pain. Each round for the duration, on your turn, the Target makes a CON Save, on Failure takes 3D6 points of damage and is Nauseated: 1.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Take half damage and is Sickened:1 for 1 round (Save again at the beginning of your turn until the duration ends)</dd>
    <dt>Failure</dt> <dd>Take full damage and is Nauseated:1 for 1 round (Save again at the beginning of your turn until the duration ends)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Finger of Death';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One living creature';
        $spell->save_attribute = 'CON';
        $spell->spell_creator  = 'Dethed';
        $spell->duration       = 'Varies';
        $spell->description    = '<p>You point your finger toward the Target and speak a word of slaying. You deal 50 negative damage to the target, and the Target must attempt a save. If the damage from Finger of Death reduces the Target to 0 Hit Points, the Target dies instantly.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The Target is unaffected</dd>
    <dt>Success</dt> <dd>The Target takes half damage</dd>
    <dt>Failure</dt> <dd>The Target takes full damage</dd>
    <dt>Critical Failure</dt> <dd>The the Target dies instantly</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage increases by 10.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Death', 'Necromancy'], 7);

        $spell              = new Spell;
        $spell->name        = 'Fins to Feet';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '1 hour';
        $spell->description = "<p>The target's tail or finned extremities turn into humanoid legs and feet with a Speed as follows.</p>
<ul>
    <li>Small and smaller creatures gain a Land Speed of 20</li>
    <li>Medium creatures gain a Land Speed of 30</li>
    <li>Large and larger creatures gain a land speed of 40</li>
</ul>
<p>This spell does not grant the ability to breathe air.</p>";
        $helper->addTypesToSpell($spell, ['Morph', 'Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Fire Bolt';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You hurl a mote of fire at a creature or object within range. Make a ranged spell attack against the target. On a hit, the Target takes 1d10 fire damage. A flammable object hit by this spell ignites if it isn't being worn or carried.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+3)</dt> <dd>Increase the damage by +1D10</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Fire Eyes';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>This spell allows the caster to emit a fiery beam from either one or both of his eyes as an Action. This thin, ruby-red bean can strike up to two opponents per round with a Ranged Touch Attack. The beam deals 2D8 Fire to all creatures struck. The Target may make a DEX Save.</p>
<p>The beam acts as an instant Heat Metal spell if targeting metal armor or shields (Searing level). Hitting the same metal armor or shield 2 times in a row will cause the metal to melt (Save DC 15). Increase the DC by +3 for each continuous additional round the metal is hit by the fire beams. Targets in metal armor hit by a beam would suffer the normal damage and then start suffering damage from the heated armor (as Heat Metal)</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half Damage</dd>
    <dt>Failure</dt> <dd>Full Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Fire', 'Evocation'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Fire Seeds';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>Four acorns grow in your hand, their shells streaked with red patterns. You or anyone else who has one of the acrons can toss it up to 30 feet with an action that has the Manipulate trait. It explodes in a 5-foot burst, dealing 4D6 Fire damage, and each creature in the area must attempt a Save. The Save uses your spell DC, even if someone else throws the acron.</p>
<p>Flames continue to burn on the ground in the burst for 1 minute, dealing 2D6 Fire damage to any creature that enters the flames or ends its turn within them. A creature can take damage from the continuing flames only once per round, even if it's in overlapping areas of fire created by different acrons.</p>
<p>When the spell ends, any remaining acorns rot and turn to ordinary soil.</p>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>The creature is unaffected</dd>
    <dt>Success</dt> <dd>The creature takes half damage</dd>
    <dt>Failure</dt> <dd>The creature takes full damage</dd>
    <dt>Critical Failure</dt> <dd>The creature takes double damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The burst damage increases to 5D6 and the continuing flames damage increases to 3D6</dd>
    <dt>Heightened (+3)</dt> <dd>The burst damage increases to 6D6 and the continuing flames damage increases to 3D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire', 'Plant'], 6);

        $spell              = new Spell;
        $spell->name        = 'Fire Shield';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You wreathe yourself in flames, gaining Cold resistance 5. Additionally, adjacent creatures that hit you with a melee attack, as well as creatures that touch you or hit you with an unarmed attack, take 2D6 Fire damage each time they do.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The Cold resistance increase by 5 and the Fire damage increases by 1D6.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 4);

        $spell              = new Spell;
        $spell->name        = 'Fire Step';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Special';
        $spell->description = '<p>This spell is like Dimension Door, but you must go from one fire to another fire. The user can move 60-feet. If you appear in a place already occupied, you remain in the Plane of Elemental Fire. If the intended destination fire has been put out, the spell does not work and is spent.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation', 'Fire'], 2);

        $spell              = new Spell;
        $spell->name        = 'Fire Storm';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '150 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>A storm made up of sheets of roaring flame appears in a location you choose within range. The area of the storm consists of up to ten 10-foot cubes, which you can arrange as you wish. Each cube must have at least one face adjacent to the face of another cube. Each creature in the area must make a DEX Save. It takes 7d10 fire damage on a failed save, or half as much damage on a successful one.</p>
<p>The fire damages objects in the area and ignites flammable objects that aren’t being worn or carried. If you choose, plant life in the area is unaffected by this spell.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 7);

        $spell              = new Spell;
        $spell->name        = 'Fire Stride';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '500 feet';
        $spell->targets     = 'Self';
        $spell->duration    = '1 hour or until expended (see text)';
        $spell->description = '<p>You gain the ability to, as an Action, step into fire and move from fire to fire. The fire you enter and move between must be at least as big around as you are (Fire Elementals that are large enough count, but sources of great heat like a lava-pool). Once in a fire, you can transport yourself to any other sufficiently large fire within range, and you instantly know the locations of all suitable fires within range. While moving into the fire is an Action, Teleporting to the other fire uses up all of your remaining Actions for the turn. You may use this ability up to 10 times.</p>
<p>While the spell indicates all of the possible destinations, it does not inform you of what the destination looks like. This spell also does not grant protection from Fire in any way.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation', 'Fire'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Fire Whip';
        $spell->casting        = 'Somatic Casting';
        $spell->range          = '10 feet';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'DEX';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>You create a whip made of scorching flame. You may use an Attack Action to make a Ranged Touch attack with the Fire Whip.</p>
<p>The whip deals 3D8 Fire damage and can ignite flammable objects.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by +1D8</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Fire damage as normal but not on Fire</dd>
    <dt>Failure</dt> <dd>Fire damage as normal and caught on Fire. Take 1D6 Fire damage each round unless the Target or anyone else takes an Action to put the flames out.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Fireball';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '500 foot range';
        $spell->area           = '20-foot emanation';
        $spell->spell_creator  = 'Noanar';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A burst of fire explodes, dealing 6D6 damage; creatures in the area must attempt a Save.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The Target is unaffected</dd>
    <dt>Success</dt> <dd>The creature takes half damage</dd>
    <dt>Failure</dt> <dd>The creature takes full damage</dd>
    <dt>Critical Failure</dt> <dd>The creature takes double damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +2D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Firebrand';
        $spell->casting        = 'Material Components, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '200 feet';
        $spell->area           = '5-foot radius burst';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You create up to 10 mini-fireballs (5-foot radius explosions) that each deals 8D6 Fire damage. Explosions that overlap do not cause any additional damage.</p>
<dl>
    <dt>Material Components</dt> <dd>A flask of alchemist's Fire</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +2D6</dd>
    <dt>Heightened (+1)</dt> <dd>Create an additional 2 more mini-fireballs</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Fireburst';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->area           = '5-foot radius emanation centered on you';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>This spell causes an explosion of fire to burst from you. All creatures, except for yourself, must make a DEX Save or takes 4D6 Fire damage.</p>
<dl>
    <dt>Material Components</dt> <dd>A bit of sulfur</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
    <dt>Heightened (+1)</dt> <dd>Double the area</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 2);

        $spell              = new Spell;
        $spell->name        = 'Fist of Ice';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You coat your fists in ice, with Hardness 4 and 7 Hit Points. You can perform the following.</p>
<ul>
    <li>Make Unarmed Strikes as if you were armed. Your fists now deal 1D4 Bludgeoning damage.</li>
    <li>You can use the Raise a Shield Action and cause the ice surrounding your fists to expand like a shield. The next attack that hits is dealt to your Ice Fists. Any excess damage is dealt to you.</li>
</ul>
<p>Damage dealt by the ice fists that is greater than the Hardness damages the ice fists.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Hardness by +1 and Hit Points by +2</dd>
    <dt>Heightened (+1)</dt> <dd>You can have the fists form ice spikes (of Short Sword length) that deals 1D6 Piercing/Slashing damage</dd>
    <dt>Heightened (+2)</dt> <dd>You can have the fists form ice spikes (of Long Sword length) that deals 1D8 Piercing damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Cold', 'Evocation', 'Transmutation'], 0);

        $spell              = new Spell;
        $spell->name        = 'Fist of Stone';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You transform one of your hands into a mighty fist of living stone, gaining a +1 bonus to melee attacks and melee damage made with your transformed fist. Your Unarmed Strike is now considered magical in terms of overcoming Damage Reduction.</p>
<p>You fist becomes solid (you cannot flex your fingers or palm)</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by 1 hour</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Earth', 'Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Flame Arrows';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched Quiver';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>You touch a quiver containing arrows or bolts. When a Target is hit by a Ranged Weapon Attack using a piece of ammunition drawn from the quiver, the Target takes an extra 1D6 Fire damage. The spell's magic ends on the piece of ammunition when it hits or misses, and the spell ends when twelve pieces of ammunition have been drawn from the quiver.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The number of pieces of ammunition you can affect with this spell increases by two</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Enchantment', 'Fire', 'Attack', 'Ranged'], 3);

        $spell              = new Spell;
        $spell->name        = 'Flame Blade';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes or until dispelled';
        $spell->description = '<p>A 3 foot-long, blazing beam of fire springs forth from you hand. You wield this blade like a beam as if it were a scimitar.</p>
<p>Attacks with the Flame Blade are Melee Touch attacks. The blade deals 1D8 points of Fire damage +3. Since the blade is immaterial, you do not add your STR modifier to the damage.</p>
<p>You can ignite combustible materials with your Flame Blade.</p>
<p>This spell does not function underwater</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 2);

        $spell              = new Spell;
        $spell->name        = 'Flame Dagger';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes or until dispelled';
        $spell->description = '<p>You crate a blade-like beam that you can wield as if it were a dagger.</p>
<p>Attacks with the Flame Dagger are Melee Touch attacks. The blade deals 1D4 points of Fire damage +3. Since the blade is immaterial, you do not add your STR modifier to the damage.</p>
<p>You can ignite combustible materials with your Flame Dagger.</p>
<p>This spell does not function underwater</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Flame Strike';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '10-foot cylinder. 120 foot range';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A vertical column of divine fire roars down from the heavens in a location you specify. Each creature in a 10-foot-radius, 40-foot-high cylinder centered on a point within range must make a DEX Save. A creature takes 4D6 Fire damage and 4D6 Positive damage on a failed save, or half as much damage on a successful one.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire', 'Positive'], 5);

        $spell                = new Spell;
        $spell->name          = 'Flameproof';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Daltim';
        $spell->range         = 'Touch';
        $spell->targets       = 'Item or creature touched';
        $spell->duration      = '3 hours';
        $spell->description   = "<p>This spell confers immunity to normal fire to the item touched. The item (and anything it contains) remains at normal temperature and cool to the touch despite immersion in lava or exposure to a red dragon's breath weapon.</p>
<p>If this spell is cast on a creature (including your self), the creature becomes immune to all normal fire. Magical fire (such as Dragon Breath) causes -3 points of damage per die, to a minimum of 0 damage per die. The creature also gains a +5 bonus to all Saves vs Fire.</p>
<p>This spell does not stack with other spells that protect against fire.</p>
<dl>
    <dt>Material Components</dt> <dd>A bit of candle wax</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Triple the duration</dd>
    <dt>Permanency (Heightened +2)</dt> <dd>A crushed ruby worth at least 5,000 gp, ink made of red dragon blood, protective runes brushed onto the item before casting this spell, which fade once this spell is cast. 5 CON damage. If cast on a creature, the creature also suffers the 5 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Fire', 'Permanency'], 5);

        $spell                = new Spell;
        $spell->name          = 'Flaming Fist';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Daltim';
        $spell->range         = '30 feet / 120 feet';
        $spell->duration      = 'Concentration, up to 1 minute';
        $spell->description   = "<p>This spell produces a fiery fist about the same size as a normal human fist. The fist appears in midair within 30 feet of you. Within limits, the caster controls the fist for the duration of the spell.</p>
<p>The fist must stay within 120 feet of you but can be made to go anywhere within the area. With an Action, you can move the fist up to 30 feet. With a Double Action, you can either touch an inanimate object with the fist or direct the fist to strike an opponent.</p>
<ul>
    <li>A flammable object is touched by the fist, a successful Save vs Fire or the item burns</li>
    <li>If you attack with the fist, you must make a Ranged Spell Attack. On a hit, the Target takes 3D6 +3 Fire damage and the fist bursts into a 3-foot radius sphere of fire centered on the point of impact and all in the area takes 1D6 +1 Fire damage (including the initial target).</li>
</ul>
<p>If you stop Concentrating on the fist, it continues to attack its last Target each round until the spell's duration. If the fist's last direction was not to attack, it remains in place, possibly setting fire to anything that touches it.</p>
<dl>
    <dt>Material Components</dt> <dd>A glove make to fit you. A pinch each of sulphur and phosphorus must be placed inside the glove, all components are destroyed upon casting.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Flaming Sphere';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 foot range';
        $spell->area           = 'One 5-foot diameter sphere';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Concentration or until dismissed (see description)';
        $spell->description    = '<p>You create a sphere of flame in a square within range. The sphere deals 3d6 fire damage to each creature in the sphere’s square; each creature must attempt a DEX Save. Once per round when you Concentrate on this Spell, you can direct the sphere to roll to a spot within range and deal 3d6 fire damage; each creature in that square must attempt a Save. You can’t Concentrate on the Spell to move the sphere during the round you create it.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>The creature is unaffected</dd>
    <dt>Failure</dt> <dd>The creature takes full damage</dd>
    <dt>Critical Failure</dt> <dd>The creature takes double damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage increases by 1D6.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Flare';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature within range';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You create a burst of light. If you cause the burst of light directly in front of a single creature, that creature makes a DEX Save or is Dazzled until the beginning of your next turn. Sightless creatures, as well as creatures that are already Dazzled are not affected</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Dazzled for 1 round</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Flash';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '60 feet';
        $spell->area           = '5-foot radius burst';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You create a blinding flash of light within range. Everyone within the area must make a DEX Save or be affected</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Dazzled for 1 round</dd>
    <dt>Failure</dt> <dd>Blinded for 1 round</dd>
    <dt>Critical Failure</dt> <dd>Blinded for 3 rounds</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 2);

        $spell              = new Spell;
        $spell->name        = 'Flaying Tentacles';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You grow four tentacles form you face, similar to those of a Mind Flayer. You gain the following.</p>
<ul>
    <li>As an Action, you can make a Melee Attack with a Tentacle, dealing 1D4 Bludgeoning + STR modifier.</li>
    <li>As an Action, you can Grapple with a Tentacle. Grapple attacks made with a tentacle gains a +2 bonus to the Grapple check. Opponents may attempt to escape your Grapple by making a Successful Grapple check or Escape Artist check. They suffer a -2 penalty for each tentacle that is Grappling that opponent. You cannot Grapple an opponent that is a Size Category larger than you or smaller than you.</li>
    <li>You gain an additional Action. This additional Action can only be used to make Melee attacks or Grapple with a tentacle.</li>
    <li>If you start your turn with at least 1 tentacle Grappling an opponent, they you gain an additional +2 bonus to Grapple checks to Grapple the opponent with your remaining tentacles</li>
    <li>If you start your turn with all 4 tentacles Grappling a single opponent, you may, as an Double Action, attempt to remove their brain. The opponent makes a STR Save, Success means the avoid having their brain extracted (but is still Grappled). Failure means that you have extracted their brain and the opponent is dead. You cannot use your additional Action to extract an opponents brain. Extracting the brain form constructs, elementals, oozes, plants, and undead has no effect.</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 5);

        $spell              = new Spell;
        $spell->name        = 'Fleet Step';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You are Accelerated 30, but this applies only to your Speed.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Transmutation'], 1);

        $spell                = new Spell;
        $spell->name          = 'Fleeting Fortune';
        $spell->casting       = 'Somatic Casting';
        $spell->spell_creator = 'Tymora';
        $spell->range         = '30 feet';
        $spell->targets       = 'One creature within range';
        $spell->duration      = '1 round or until discharged';
        $spell->description   = '<p>You imbue the Target with luck. They receive a +5 bonus to the next Skill check they make. This bonus applies to the any Skill check that the Target makes, but they must choose which Skill check to apply the bonus to. The spell ends at the beginning of your next turn, regardless if the Target did not use the bonus or not.</p>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the range</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Flesh to Stone';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->targets        = 'One creature made of flesh';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Varies';
        $spell->description    = "<p>You attempt to turn the target's flesh into stone. The Target must attempt a Save.</p>
<p>If the Target fails its initial save, it must make a CON save at the end of each of its turns until the spell ends. The spell ends when the slowed state reaches 0 or the creature can't move due to slowed state. If the creature can't move due to the slowed state, the spell ends and the creature is permanently petrified.</p>
<dl>
    <dt>Material Components</dt> <dd>Lime, water, and earth</dd>
</dl>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>The Target is unaffected</dd>
    <dt>Success</dt> <dd>The Target is slowed 1 for 1 round</dd>
    <dt>Failure</dt> <dd>Target slowed 1. Fail: slowed +1. Critically fail: slowed +2. Success: slowed -1</dd>
    <dt>Critical Failure</dt> <dd>As failure, but the creature is initially slowed 2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 6);

        $spell              = new Spell;
        $spell->name        = 'Float';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '500 feet';
        $spell->targets     = 'One large or smaller willing creature or object within range';
        $spell->duration    = '1 hour';
        $spell->description = '<p>The Target becomes buoyant and floats on water for the duration. The Target cannot swim below the surface of the water. Creatures that must breath water can still do so, but cannot swim under the surface. If the Target is underwater at the time the spell is cast, it rises toward the surface at a Speed of 30.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the range</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell              = new Spell;
        $spell->name        = 'Floating Disk';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->duration    = '8 hour';
        $spell->description = '<p>A disk of magical energy materializes adjacent to you. This disk is 2 feet in diameter and follows 5 feet behind you automatically, floating just above the ground. It holds up to 5 Bulk of objects (though they must be able to fit and balance on its surface). Any objects atop a floating disk fall to the ground when the spell ends.</p>
<p>The disk is dismissed if a creature tries to ride atop it, if anyone tries to lift or force the disk higher above the ground, or if you move more than 30 feet away from the disk (such as by Flying or Climbing above the ground).</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Force'], 1);

        $spell                = new Spell;
        $spell->name          = 'Floating Page';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Volothamp Geddarm';
        $spell->targets       = 'Page or scroll';
        $spell->range         = '10 feet';
        $spell->duration      = '3 hours';
        $spell->description   = '<p>This spell creates a perfect glowing image of any page, scroll, grave inscription, or any flat surface with writings, engravings, or drawings that you can see. This spell only captures what the caster can see (so it will not capture anything that is hidden by magic or mundane means such as invisible ink).</p>
<p>The image that is taken floats in front of you and is visible to all, however, only you can see the image clearly. Others will only see a chaotic rolling swirl.</p>
<p>If this spell takes an image of a scroll, the caster can cast the spell from the image (the image will then fade away).</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+2)</dt> <dd>You can copy an entire book, spell book, etc. However, if any spell is cast from the image, the image still fades away</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion'], 2);

        $spell                = new Spell;
        $spell->name          = 'Floating Step';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Halaster Blackcloak';
        $spell->range         = 'Touch';
        $spell->targets       = 'One creature touched';
        $spell->description   = '<p>As the spell Fly, except you cannot ascend or descend. The spell keeps you at least 1 foot off of the ground.</p>
<p>The practical impact of this spell is to allow the Target to walk along reasonably level terrain without leaving tracks or to stride across chasms.</p>
<p>This spell also provides a +15 Circumstance bonus to Climb checks and a +10 bonus to Move Silently checks (though it does not stack with Boots of Elvenkind for example).</p>
<p>Used in combination with the spell Levitate, the Target could simulate flying.</p>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
    <dt>Heightened (+3)</dt> <dd>The duration increases to 1 hour.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Air', 'Enchantment'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Flowsight';
        $spell->casting        = '1 minute (Material, Somatic, Verbal)';
        $spell->save_attribute = 'WIS';
        $spell->range          = 'Touch';
        $spell->area           = '500-foot radius emanation centered on you';
        $spell->targets        = 'Body of water touched';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>By touching a body of water, you can perceive creatures and objects in contact with the water. You can Concentrate to focus on a given creature. You retain your full visual acuity, including any magical effects, as well as any auditory enhancements you might have. This action makes the subject potentially aware of the magical scrying. The Target gets a WIS Save, and on Success, you are prevented from learning more than that the subject is within the area of the body of water and you cannot try to scry that creature again for 24 hours. However, you can turn you concentration on another subject as an Action.</p>
<dl>
    <dt>Material Components</dt> <dd>A piece of limestone</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the area</dd>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>You only know that the subject is in the body of water, and you cannot try to scry that subject again for the next 24 hours</dd>
    <dt>Failure</dt> <dd>You know where the subject is and can visually see and hear the subject as if you were Scrying them.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Water', 'Ritual'], 4);

        $spell              = new Spell;
        $spell->name        = 'Fly';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>The Target gains a fly Speed of 30 feet.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
    <dt>Heightened (+3)</dt> <dd>The duration increases to 1 hour.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Air', 'Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Flying Dagger';
        $spell->casting     = 'Material Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 3 rounds';
        $spell->description = "<p>This spell works only on short meta-bladed weapons such as a dagger, jambiya, dirk or knife (or the blade created from the Sand Dagger spell. This spell allows you to Concentrate on both spells, as if you no longer need Concentrate on the Sand Jambiya spell. Once this spell ends, you may continue to Concentrate to maintain the Sand Jambiya spell). You whisper the somatic words, blowing them on the chosen weapon (which must be held during casting), and then you may throw or let go of the weapon. As long as you Concentrate on the weapon, the weapon is animated and flies about to attack foes at a distance.</p>
<p>You may use an Action to perform one of the following</p>
<ul>
    <li>Move at a speed of 40'</li>
    <li>Make a Melee Strike</li>
    <li>Offer a +2 AC bonus to a chosen creature. The weapon must be within 5 feet of the chosen creature.</li>
</ul>
<p>While animated, the weapon has AC 15 and is considered to have 12 HP. Striking it for more than 12 HP damage ends the spell, but doesn't actually damage the weapon.</p>
<dl>
    <dt>Material Components</dt> <dd>The weapon to be animated</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Earth'], 1);

        $spell              = new Spell;
        $spell->name        = 'Focusing Chant';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Sustained, up to 3 hours';
        $spell->description = '<p>You chant to focus your mind and block out distractions and hone your attention. You gain a +1 circumstance bonus to Attack, Skill Checks, and Ability Checks. You also gain a +3 bonus against Fear effects.</p>
<p><strong>Sustain:</strong> On each of your turns after the turn you cast this spell, you must spend 1 Action to sustain it (by continuing to chant). If you do not, the spell ends. While chanting, you cannot speak or use any ability that requires speaking.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Sustained'], 0);

        $spell              = new Spell;
        $spell->name        = 'Foe Bane';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You enchant yourself so that you are better at battling your Favored Enemies. Any weapon you wield gains a +1 bonus to hit and you deal an additional Weapon Die of damage against your Favored Enemies.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)(+4 max)</dt> <dd>Increase the bonus to hit by +1 and the bonus to damage by an additional Weapon Die of damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 1);

        $spell              = new Spell;
        $spell->name        = 'Fog Cloud';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '20-foot radius sphere. 120 foot range';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>You create a 20-foot-radius sphere of fog centered on a point within range. The sphere spreads around corners, and its area is heavily obscured. It lasts for the duration or until a wind of moderate or greater speed (at least 10 miles per hour) disperses it.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the radius by 20 feet</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Follow the Leader';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '0';
        $spell->area           = '150-feet radius emanation centered on you';
        $spell->duration       = 'Sustained, up to 10 minutes';
        $spell->description    = '<p>Like the legendary piper, you can play a tune so beguiling that those that hear it feel compelled to follow you, dancing merrily.</p>
<p>You can lure up to 10 HD of creatures. Those with the fewest Hit Dice are the first to be affected. Once you have reached your limit of creatures, the music does not affect any others. Creatures thus captivated can defend themselves, but do not initial attacks. If you lead your followers directly into danger, they receive another Save with a +1 bonus.</p>
<p><strong>Sustain:</strong> On each of your turns after the turn you cast this spell, you must spend 1 Action to sustain it (by continuing to play). If you do not, the spell ends.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Captivated to follow you</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the maximum number of HD by +5</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion', 'Auditory', 'Sustained'], 4);

        $spell               = new Spell;
        $spell->name         = 'Forbiddance';
        $spell->casting      = '10 minutes (Material, Somatic, Verbal)';
        $spell->range        = 'Touch';
        $spell->duration     = '24 Hours';
        $spell->requirements = '<dl>
    <dt>Sacrifice</dt> <dd>2 CON damage</dd>
    <dt>Secondary Casters</dt> <dd>2 Secondary Casters</dd>
</dl>';
        $spell->description = "<p>You create a ward against magical travel that protects up to 40,000 square feet of floor space to a height of 30 feet above the floor. For the duration, creatures can't teleport into the area or use portals, such as those created by the gate spell, to enter the area.</p>
<p>The spell proofs the area against planar travel, and therefore prevents creatures from accessing the area by way of the Astral Plane, Ethereal Plane, Feywild, Shadowfell, or the plane shift spell.</p>
<p>In addition, the spell damages types of creatures that you choose when you cast it. Choose one or more of the following: celestials, elementals, fey, fiends, and undead. When a chosen creature enters the spell's area for the first time on a turn or starts its turn there, the creature takes 5d10 radiant or necrotic damage (your choice when you cast this spell).</p>
<p>When you cast this spell, you can designate a password. A creature that speaks the password as it enters the area takes no damage from the spell.</p>
<p>The spell's area can't overlap with the area of another forbiddance spell. If you cast forbiddance every day for 30 days in the same location, the spell lasts until it is dispelled, and the material components are consumed on the last casting.</p>
<dl>
    <dt>Material Components</dt> <dd>A sprinkling of holy water, rare incense, and powdered ruby worth at least 1,000 gp.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Ritual'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Forbidden Speech';
        $spell->casting        = '1 minute (Somatic, Verbal, Ability Damage)';
        $spell->requirements   = '<dl>
    <dt>Ability Damage</dt> <dd>4 STR Damage</dd>
</dl>';
        $spell->save_attribute = 'WIS';
        $spell->range          = 'Touch';
        $spell->targets        = '1 living creature touched';
        $spell->duration       = 'Permanent';
        $spell->description    = "<p>You make it impossible for the Target to speak about a single topic. The topic should be as narrow as possible for the spell to work properly.</p>
<p>An appropriate topic might be events that occurred while the creature was in captivity, the whereabouts and names of the tormentors, the secret location of a hidden treasure, the password into a guarded compound, the command word of a magic item, or the explanation behind some major occurrence.</p>
<p>Invalid topics include verbal components of spells, a creature's whole life history, or anything too broad for a reasonable definition of a single topic. Whether a topic is too broad is up to the DM, who can double the Ability Damage cost and have the spell automatically fail if the caster persists in attempting an invalid topic.</p>
<p>The Target cannot communicate regarding the topic in any way. Speech becomes gibberish, writing is reduced to an indecipherable scrawl, gestures are impossible, and even telepathy is scrambled. The Target has not forgotten the information, however, and it can be a maddening occurrence for the creature to be unable to communicate information.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Cursed and cannot communicate in any way about the chosen topic</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Curse'], 5);

        $spell              = new Spell;
        $spell->name        = 'Forbidding Ward';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One ally and one enemy';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>You ward your ally against the attacks and hostile spells of the Target enemy. The Target gains a +1 conditional bonus to AC and Saves agains the Target enemy's  attacks, spells and other effects.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The conditional bonus increases by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Prediction'], 0);

        $spell              = new Spell;
        $spell->name        = 'Force Chest';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '0';
        $spell->duration    = '1 week';
        $spell->description = "<p>You bring into being a lidded box of Force. The box appears in your hand and you can choose to make it either invisible or merely translucent. The chest has no weigh worth noting. Solid walls of force form the chest's five sides and lid. You and other creatures cannot open the box except by first speaking the password (determined by you at the time of casting). Both objects and Tiny and smaller creatures can fit in the box. It holds enough air to supply one Tiny, two Diminutive, or four Fine creatures for 1 hour.</p>
<p>Like a Wall of Force spell, a Force Chest is immune to damage of all kinds. But it is susceptible to Disintegrate and Disjunction, and it can be destroyed by a Sphere of Annihilation or a Rod of Cancellation. The box is a spell effect and Open Lock and Use Magic Device cannot open it.</p>
<dl>
    <dt>Material Components</dt> <dd>A 2-inch square glass cube.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 4);

        $spell              = new Spell;
        $spell->name        = 'Force Object';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '0';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You can create objects of Force. The object must be about the size of a Quarterstaff, a Club, or a Small Shield (you cannot create objects that are sharp or have an edge, so no swords). Smaller objects can be made, but you cannot crate Force objects with fine detail. Once the object is created, it cannot be changed. The object does not have any weight of note. It can be made hollow to hold air (thus making it buoyant enough to flout).</p>
<p>The object can be destroyed by anything that can destroy a Wall of Force.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You can create larger objects, such as a Ladder, or a Tower Shield.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 1);

        $spell              = new Spell;
        $spell->name        = 'Force Orb';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->targets     = 'One or more creatures or objects';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You gain 10 D6 die of damage. You may distribute those dice into any number of orbs. Each orb must have at least 1D6 assigned to it. Make a Ranged Spell attack for each orb. The Target takes damage equal to the number of die you assigned.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the number of die by +2D6</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Force Shapechange';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '150 feet';
        $spell->targets        = 'One creature within range';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You force any creature that is a Shapechanger to revert to its true form. If the Target is a Shapechanger, they take 3 CON Damage and they must make a WIS Save. Failure means they are forced into their true form and they are locked in their true form for 1 hour.</p>
<p>For the purposes of this spell, a Shapechanger is any creature that has the Shapechanger type or a Supernatural or Extraordinary ability to change their shape. Creatures that have changed their shape by spells does not count (thus a Druid who has Wild Shaped would be affected, but not a Wizard who has Polymorphed)</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Suffers 3 CON damage and Hampered 5</dd>
    <dt>Failure</dt> <dd>As Success, but also forced into their true form. Locked into true form for 1 hour</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 3);

        $spell              = new Spell;
        $spell->name        = 'Forcecage';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '90 feet';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>An immobile, invisible, cube-shaped prison composed of magical force springs into existence around an area you choose within range. The prison can be a cage or a solid box, as you choose.</p>
<ul>
    <li>A prison in the shape of a cage can be up to 20 feet on a side and is made from 1/2-inch diameter bars spaced 1/2 inch apart.</li>
    <li>A prison in the shape of a box can be up to 10 feet on a side, creating a solid barrier that prevents any matter from passing through it and blocking any spells cast into or out from the area.</li>
    <li>When you cast the spell, any creature that is completely inside the cage's area is trapped. Creatures only partially within the area, or those too large to fit inside the area, are pushed away from the center of the area until they are completely outside the area.</li>
</ul>
<p>A creature inside the cage can't leave it by nonmagical means. The trapped creature can use any extradimensional travel to escape the Forcecage.</p>
<dl>
    <dt>Material Components</dt> <dd>Ruby dust worth 1,500 gp</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Forced Incorporeality';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->range          = '150 feet';
        $spell->targets        = 'One ghost or naturally incorporeal undead';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>The Target is enveloped in an orange haze that forces it to be incorporeal for the duration.</p>
<p>This spell Counters and is Countered by Forced Manifestation</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Target becomes fully incorporeal</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Ectoplasm'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Forced Manifestation';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->range          = '150 feet';
        $spell->targets        = 'One ghost or naturally incorporeal undead';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>The Target is enveloped in a violet haze that forces the it to manifest for the duration.</p>
<p>This spell Counters and is Countered by Forced Incorporeality</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Target manifests into the Prime Material</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Ectoplasm'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Forceward';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '0 feet';
        $spell->area           = '10-foot radius emanation centered on you';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = '<p>You create an unmoving, transparent sphere of Force centered on your location. The sphere illuminates its interior and everything within 5 feet of its edges. You and your allies may enter the sphere at will. Any other creature that tires to enter the sphere must make a WIS Save, otherwise it cannot enter the sphere. A creature may leave the area freely, although it must make a WIS Save to enter again, even if it is you or an ally. Creatures within the area when the spell is cast are not forced out. The forceward is only destroyed by things that can destroy a Wall of Force.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>May enter the sphere. Exiting and trying to enter again requires another Save</dd>
    <dt>Failure</dt> <dd>Cannot enter the sphere, but may try again next turn.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Evocation', 'Force'], 3);

        $spell              = new Spell;
        $spell->name        = 'Foresight';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->duration    = '8 hours';
        $spell->description = "<p>You touch a willing creature and bestow a limited ability to see into the immediate future. For the duration, the Target can't be surprised and has Advantage on attack rolls, ability checks, and Saves. Additionally, other creatures have Disadvantage on attack rolls against the Target for the duration.</p>
<p>This spell immediately ends if you cast it again before its duration ends.</p>
<dl>
    <dt>Materials</dt> <dd>A hummingbird feather</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 9);

        $spell              = new Spell;
        $spell->name        = 'Forest Child';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '200 feet';
        $spell->duration    = 'Concentration, up to 5 minutes';
        $spell->description = "<p>You draw forth a humanoid figure from the wood of a tree that is at least one size category larger than you. The figure is your size and clearly made of wood, but it resembles you sufficiently that anyone that knows you would recognize it as resembling you.</p>
<p>The figure can emerge from the tree that you touch, or from any tree of the same type within range. Thereafter, if you and the forest child are separated by more than the range of this spell, then the spell ends immediately.</p>
<p>A forest child mimics your actions, including speech, unless you direct it to act differently with an Action. You can see through its eyes and hear through its ears as if you were standing in its location. You can switch from using your senses and the forest child's senses as an Action. while you are using its senses, your own body is considered Blinded and Deafened.</p>
<p>If you desire, any spell you cast whose range is touch or greater can originate from the forest child. You cannot have the forest child cast any spells on itself.</p>
<p>The forest child has a number of Hit Points equal to your Character Level. It attacks with your Character Bonus with a -4 penalty and deals damage equal to your Unarmed Strike damage. It can wield Simple Weapons only (even if you are proficient with Martial Weapons).</p>
<p>As a Double Action, you can change places with the forest child, similar to Teleport. Using this option reduces the remaining Duration by 1 minute. If the remaining Duration is less than 1 minute, then you cannot use this ability.</p>
<p>If you have the spells Forest Eyes and Forest Voice active when you cast this spell, then the Duration of this spell is Doubled and the Range is Quadrupled.</p>
<dl>
    <dt>Material Components</dt> <dd>A small hardwood replica of yourself, which costs at 10 gp.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 6);

        $spell              = new Spell;
        $spell->name        = 'Forest Eyes';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = 'Unlimited';
        $spell->targets     = 'Two plants of the same type, one of which you must be in physical contact with';
        $spell->duration    = '30 minutes';
        $spell->description = '<p>You touch a normal, Medium or larger plant or tree and designate another of the same kind that you know of. Both plants must be alive. You immediately see the surroundings of the destination plant, regardless of distance. You see the area as through you were standing in the exact spot where the destination plant is. Both plants must be alive. You cannot move your field of vision from that spot, but you can rotate it in all directions.</p>
<p>Unlike other Scrying spells, this spell does not allow magically or supernaturally enhanced senses to work through it.</p>';
        $helper->addTypesToSpell($spell, ['Divination', 'Plant', 'Scrying', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Forest Voice';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = 'Unlimited';
        $spell->targets     = 'Two plants of the same type, one of which you must be in physical contact with';
        $spell->duration    = '30 minutes';
        $spell->description = '<p>You touch a normal, Medium of larger plant or tree and designate another of the same kind that you know of. Both plants must be alive. You can then carry on a conversation with anyone who is within 10 feet of the destination plant. Your conversation is as clear as it would be if you stood within 10 feet of another. You cannot transmit magical Sonic effects.</p>';
        $helper->addTypesToSpell($spell, ['Divination', 'Plant', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = 'Forge Fire';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->duration    = '3 hours';
        $spell->description = '<p>You create a fire that is suitable for using as a forge. This fire needs a source of fuel, but the magic of the spell makes the fire hot enough for use in forging metals.</p>
<p>This fire is not sufficiently hot enough to work magically enchanted metals or most rare metals. Typically, the fire is sufficient to work the following metals.</p>
<ul>
    <li>Copper</li>
    <li>Gold</li>
    <li>Iron</li>
    <li>Silver</li>
    <li>Steal</li>
</ul>
<p>Any creature that enters the square where the fire is takes 3D6 Fire damage per round they remain in the fire. They also catch on fire and take 1D6 Fire damage while they are on fire, which can be ended with an Action.</p>
<dl>
    <dt>Materials</dt> <dd>A pile of material that can act as a fuel source for the fire</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened +1</dt> <dd>
        <p>Increase the Fire damage by +1D6. The fire becomes hot enough to work the following metals.</p>
        <ul>
            <li>Alchemical Silver</li>
            <li>Blood Metal</li>
            <li>Cold Iron</li>
            <li>Darksteel</li>
            <li>Platinum</li>
            <li>Zardazil</li>
        </ul>
    </dd>
    <dt>Heightened +2</dt> <dd>
        <p>Increase the Fire damage by +2D6. The fire becomes hot enough to work the following metals.</p>
        <ul>
            <li>Adamantine</li>
            <li>Arandur</li>
            <li>Asmoroch Steel</li>
            <li>Aurorum</li>
            <li>Mithral</li>
            <li>Solarian Truesteel</li>
        </ul>
    </dd>
    <dt>Heightened +3</dt> <dd>
        <p>Increase the Fire damage by +3D6. The fire becomes hot enough to work the following metals.</p>
        <ul>
            <li>Abyssal Bloodiron</li>
            <li>Astral Driftmetal</li>
            <li>Entropium</li>
            <li>Fever Iron</li>
            <li>Frystalline</li>
            <li>Gehennan Morghuth Iron</li>
            <li>Infernal Steel</li>
            <li>Urdukar</li>
        </ul>
    </dd>
    <dt>Heightened +4</dt> <dd>
        <p>Increase the Fire damage by +4D6. The fire becomes hot enough to work the following metals.</p>
        <ul>
            <li>Fyrite</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 1);

        $spell              = new Spell;
        $spell->name        = 'Foretelling Deja Vu';
        $spell->casting     = '1 minute';
        $spell->targets     = 'Self';
        $spell->description = '<p>You regain a used Foretelling with the same value.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may adjust the value +/- 1 for each additional Spell Slot</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Fortissimo';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '120 feet';
        $spell->targets     = 'One creature or item';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>This spell doubles the volume of one source of sound that you Target within range. This can help with a performance so that more people can hear. If you Target a creature, you may also Target any items they have, such as musical instruments.</p>
<p>If the effected creature or item has a Auditory based effect, any Save against the effect is made with a -3 penalty. If the effect deals Sonic damage, that damage is increased by +2D6.</p>
<p>This spell Counters and is Countered by Silence.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Sonic'], 2);

        $spell               = new Spell;
        $spell->name         = 'Fortunate Fate';
        $spell->casting      = '24 hours (Material, Somatic, Verbal)';
        $spell->range        = 'Touch';
        $spell->targets      = 'One creature touched';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>4 CON damage</dd>
</dl>';
        $spell->duration     = 'Until Discharged';
        $spell->description  = '<p>The Target receives the benefit of a Heal spell upon his death. The Heal spell prevents his death if the cause of death could have been prevented by the administering of a Heal spell. Death caused by damage would be prevented by the Heal spell.</p>
<dl>
    <dt>Material Components</dt> <dd>A lucky charm, such as a coin, a rabbits foot, a four leaf clover, etc. This charm must be on the creature for it to discharge as intended. If it is destroyed, the spell discharges.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 7);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 25]);

        $spell              = new Spell;
        $spell->name        = "Fox's Cunning";
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched creature';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>The Target gets a +4 enchantment bonus to INT.</p>
<p>This spell Counters and is Countered by Fox's Hex.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+4)</dt> <dd>The range becomes 30 feet and you can Target up to 10 creatures.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment'], 2);

        $spell                 = new Spell;
        $spell->name           = "Fox's Hex";
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature within range';
        $spell->duration       = '10 minutes';
        $spell->save_attribute = 'INT';
        $spell->description    = "<p>You curse the Target with stupidity unless they make a successful INT Save.</p>
<p>This spell Counters and is Countered by Fox's Cunning</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>Unaffected</dd>
    <dt>Success</dt> <dd>You suffer a -1 penalty to your INT</dd>
    <dt>Failure</dt> <dd>You suffer a -4 penalty to your INT</dd>
    <dt>Critical Failure</dt> <dd>You suffer a -8 penalty to your INT</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+4)</dt> <dd>You can Target up to 10 creatures</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Freedom';
        $spell->casting     = '1 minute (Somatic Casting, Verbal Casting)';
        $spell->range       = '60 feet';
        $spell->targets     = 'One creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>The Target is freed from any spell or effect that restricts movement, including Imprisonment, Maze, and Temporal Stasis (and lesser effects as well like Petrification, and Web).</p>
<p>To free a creature from Imprisonment or Maze, you must know it's name and background and you must cast the spell at the spot where it was Imprisoned or caught in the Maze. In addition, for Imprisonment, you need Double the number of Secondary Casters that were involved in the Imprisonment spell. These secondary casters need only cast the Dispel Magic spell.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Ritual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Freedom of Movement';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature touched';
        $spell->duration    = '1 minute';
        $spell->description = "<p>While under the spell's effect, the Target ignores all effects that would entangle or hamper her. When she attempts to escape an effect that has their immobilized, grabbed, or restrained, she automatically succeeds unless it's a magical effect of a higher level than the Freedom of Movement spell.</p>";
        $helper->addTypesToSpell($spell, ['Abjuration'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Freezing Sphere';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '300 feet';
        $spell->save_attribute = 'CON';
        $spell->spell_creator  = 'Otiluke';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>A frigid globe of cold energy streaks from your fingertips to a point of your choice within range, where it explodes in a 60-foot radius sphere and deals 10D6 Cold damage. Each creature within the area must make a Save.</p>
<p>If the globe strikes a body of water or a liquid that is principally water (not including water-based creatures), it freezes the liquid to a depth of 6 inches over an area 30 feet square. This ice lasts for 1 minute. Creatures that were swimming on the surface of frozen water are trapped in the ice. A trapped creature can use an Action to make STR check against your spell Save DC to break free.</p>
<p>You can refrain from firing the globe after completing the spell, if you wish. A small globe about the size of a sling stone, cool to the touch, appears in your hand. At any time, you or a creature you give the globe to can throw the globe (to a range of 40 feet) or hurl it with a sling (to the sling's normal range). It shatters on impact, with the same effect as the normal casting of the spell. You can also set the globe down without shattering it. After 1 minute, if the globe hasn't already shattered, it explodes.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The Target takes half damage</dd>
    <dt>Failure</dt> <dd>The Target takes full damage</dd>
    <dt>Critical Failure</dt> <dd>The Target takes full damage and is frozen as if they were in a body of water (even if they are not in a body of water)</dd>
</dl>';
        $spell->Heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The spell deals an additional 1D6 damage for each additional spell slot.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Friend to Foe';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '120 feet';
        $spell->targets        = 'Up to 10 living creatures, none of which are more than 30 feet apart';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You enemies transform into what they each hate the most. You overlay phantasmal images over your enemies, making them appear to each other as loathsome and despicable, implanting an urge to kil and destroy the other. Orcs might see each other as elves or dwarves, demons might see angels, etc.</p>
<p>Each individual failing their WIS Save sees their allies as hateful enemies. They are not forced to attack each other, but they will react as if their allies have all turned into enemies.</p>
<dl>
    <dt>Material Components</dt> <dd>A swatch of white silk</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect (but others that do fail their Save will see this individual as an enemy)</dd>
    <dt>Failure</dt> <dd>The Target believes that their allies have all turned into enemies, and reacts accordingly.</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Range</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the number of targets by +2 and the distance between them by +5 feet</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Phantasm', 'Visual'], 5);

        $spell              = new Spell;
        $spell->name        = 'Friends';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>For the duration, you have Advantage on all CHA checks directed at one creature of your choice that isn't hostile toward you. When the spell ends, the creature realizes that you used magic to influence its mood and becomes hostile toward you. A creature prone to violence might attack you. Another creature might seek retribution in other ways (at the DM's discretion), depending on the nature of your interaction with it.</p>
<dl>
    <dt>Material Components</dt> <dd>A small amount of makeup applied to the face as this spell is cast</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Frost Fingers';
        $spell->casting        = 'Verbal Casting, Somatic Casting';
        $spell->range          = '15-foot cone, range 0';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>This is essentially a cold form of the Burning Hands spell. When cast, it causes freezing cold and shards of ice to blast from the caster's fingertips. You deal 1D4 Cold damage to creatures in the area; they must each attempt a DEX Save.</p>
<p>Liquids engulfed by the cold will freeze unless an item Save is made.</p>";
        $spell->saves = '<dl>
    <dt>Critical Failure</dt> <dd>The creature takes double damage</dd>
    <dt>Failure</dt> <dd>The creature takes full damage</dd>
    <dt>Success</dt> <dd>The creature takes half damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage increases by 1D4</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold'], 1);

        $spell              = new Spell;
        $spell->name        = 'Frost Whip';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>This spell creates a thin lash of frost stretching from your hand. You can wield the whip to make a Melee Spell attack against a creature within 10 feet of you. On a hit, the Target takes Cold damage equal to 1D8 + your Spellcasting ability modifier. The Frost Whip has the Finesse and Reach properties of a normal whip.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Cold'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Frostbite';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You cause numbing frost on one creature that you can see within range. The Target must make a CON Save, on failure, the Target takes 1D6 Cold damage.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>1D6 Cold damage</dd>
    <dt>Critical Failure</dt> <dd>The Target has Disadvantage on their next attack made before your next turn</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+5)</dt> <dd>Increase the damage by +1D6 Cold</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Cold'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Fugue';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '120 feet';
        $spell->area           = '30 foot radius emanation centered on you';
        $spell->duration       = 'Sustained, up to 1 minute';
        $spell->description    = '<p>You start to play a discordant cacophony of haunting and alien music. All the area (except yourself) must make a WIS Save. Those who fail suffer the effects of the Fugue. On each of your turns (including the turn you cast this spell), make a Performance check. You may have those targets that are under the effects of this spell act according to the table. Choose any that your Performance check equals or exceeds. <strong>Sustain:</strong> On each of your turns after the turn you cast this spell, you must spend 1 Action to sustain it (by continuing to play the discordant music). If you do not, the spell ends.</p>
<table>
    <thead>
        <tr>
            <th>DC</th>
            <th>Result</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>15</td>
            <td>Victim takes 3D6 points of Non-lethal Damage</td>
        </tr>
        <tr>
            <td>20</td>
            <td>Victim takes 3D6 points of Sonic Damage</td>
        </tr>
        <tr>
            <td>25</td>
            <td>Victim is knocked Prone</td>
        </tr>
        <tr>
            <td>30</td>
            <td>Victim is Nauseated for 1 round</td>
        </tr>
        <tr>
            <td>35</td>
            <td>Victim is Stunned for 1 round</td>
        </tr>
        <tr>
            <td>40</td>
            <td>Victim attacks the nearest target</td>
        </tr>
    </tbody>
</table>
<p>All creatures that succeed on their Save against the spell are disoriented and suffer a -2 penalty on Attack Rolls, Skill Checks and Ability Checks each round they start their turn in the area.</p>
<dl>
    <dt>Material Components</dt> <dd>A miniature violin bow made of platinum worth 250 gp</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Suffer a -2 penalty to Attack and Skill Checks and Ability Checks until the beginning of your next turn. If you are still in the area, you must make another Save</dd>
    <dt>Failure</dt> <dd>You suffer the effects that the caster chooses based on their Performance check.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Emotion', 'Auditory', 'Sustained'], 4);
    }
}
