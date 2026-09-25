<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsVSeeder extends Seeder
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
        $spell->name        = "Vampire's Kiss";
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = "<p>You draw upon the powers of unlife to give yourself the abilities of a vampire. You become gaunt and pale with feral red eyes, and you gain the following abilities.</p>
<ul>
    <li>You gain a Bite Attack. You may only use this Bite attack against targets that you have successfully Grappled. If you deal damage with your Bite attack and the target is not Undead and not a Construct, you deal 1D4 Piercing damage + your STR modifier and 1D6 Negative damage. You heal damage equal to the Negative damage you dealt.</li>
    <li>Vampiric Touch (as the spell) as an Action</li>
    <li>You may cast Charm Person at will as an Action. You may only have one creature charmed at a time.</li>
    <li>You gain Resistance to Bludgeoning, Slashing, and Piercing damage</li><li>You gain Darkvision out to 60 feet if you do not already have it.</li>
    <li>You gain the Undead type and are affected by all effects that affect Undead.</li>
    <li>While in sunlight, you suffer a -1 penalty on all rolls.</li>
    <li>You gain Vulnerability to Cold Iron, Fire and Positive damage</li>
    <li>You gain Resistance to Negative damage</li>
</ul>
<p>A successful Turn (or rebuke) against you causes you to be panicked for 10 rounds (or until the spell ends). If the Turn attempt would destroy you, you become Stunned for 3 rounds and the spell ends (there is a 10% change that you permanently become a true Vampire, gaining the Vampire's Curse feat).</p>
<dl>
    <dt>Material Components</dt> <dd>A black onyx worth at least 50 gp that has been carved with the image of a fang-mouthed face</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead', 'Evil'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Vampiric Exsanguination';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30-foot cone';
        $spell->duration       = 'Instantaneous';
        $spell->save_attribute = 'CON';
        $spell->description    = '<p>You draw blood and life force from creatures and shoot it out through your outstretched arms. You deal 10D6 Negative damage to living creatures in the area, based on their CON Saves.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Death', 'Necromancy', 'Negative'], 6);

        $spell                = new Spell;
        $spell->name          = 'Vampiric Touch';
        $spell->casting       = 'Somatic Casting';
        $spell->targets       = 'Self';
        $spell->spell_creator = 'Gwynn';
        $spell->duration      = 'Concentration, up to 1 minute';
        $spell->description   = '<p>The touch of your shadow-wreathed hand can siphon life force from others to heal your wounds. Make a melee spell touch attack against a creature within your reach. On a hit, the target takes 3D6 Negative damage, and you regain hit points equal to half the amount of damage dealt. Until the spell ends, you can make the attack again on each of your turns as an action.</p>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Death', 'Necromancy', 'Negative'], 3);

        $spell              = new Spell;
        $spell->name        = 'Veil';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->duration    = 'Concentration, up to 8 hours';
        $spell->description = '<p>You disguise the targets as other creatures of the same body shape and roughly similar height (within 6 inches) and weight (within 50 pounds). The disguise can hide the targets’ identities or let them appear to be of another ancestry, but it’s not good enough to impersonate specific individuals. The spell doesn’t change voice, scent, or mannerisms. You choose the disguise for each target, so you could make one appear to be a dwarf and another an elf, for example.</p>
<p>Casting veil counts as setting up a disguise for the purpose of the Impersonate action. It ignores any circumstance penalties the targets might take for being disguised as a dissimilar creature, and it also gives the targets a +4 conditional bonus to Deception checks to prevent others from seeing through their disguises. You can dismiss any or all of these disguises with a Verbal Casting Acction</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The spell also disguises the targets’ voices and scents, gaining the auditory trait.</dd>
    <dt>Heightened (+3)</dt> <dd>The targets can appear as any creature of the same size, even specific individuals. You must have seen an individual to reproduce their appearance. The spell also disguises the targets’ voices and scents, gaining the auditory trait.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Visual'], 4);

        $spell                = new Spell;
        $spell->name          = 'Ventriloquism';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->duration      = '10 minutes';
        $spell->spell_creator = 'Dace';
        $spell->description   = '<p>Whenever you speak, you can make your voice seem to come from somewhere else within 30 feet. Any creature that hears the sound can attempt to disbelieve your illusion.</p>';
        $spell->heightened    = '<dl>
    <dt>Heightened (+1)</dt> <dd>The spell\'s duration increases to 1 hour and you can also change the tone, quality, and other aspects of your voice. A creature must succeed at a Perception check against your before it can attempt to disbelieve your illusion.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Auditory', 'Illusion', 'Figment'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Venom Bolt';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '90 feet';
        $spell->targets        = 'One creature or object within range';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You fire a bolt of venom at the target. Make a Ranged Spell Touch Attack. On impact, the venom turns into a cloud of poison that clings to all in the 5 foot square. All within the area of effect suffers 4D6 Poison damage. Then the target suffers 3D6 Poison damage the next round, 2D6 Poison damage the round after that, and finally 1D6 Poison damage on the 3rd round. The target must make a Save on each round (unless they make a Critical Success, which ends this effect immediately). The target creatures must make all 4 Saves even if they move away from where the initial cloud formed (unless they make a Critical Success).</p>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+2)</dl> <dd>Increase the damage by +1D6</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Half effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
    <dt>Critical Failure</dt> <dd>Double effect, plus suffer 2 CON damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Poison'], 3);

        $spell                = new Spell;
        $spell->name          = "Venom's Brambletangle";
        $spell->casting       = 'Verbal Casting';
        $spell->spell_creator = 'Venominhandar';
        $spell->requirements  = 'Caster must be of draconic ancestry';
        $spell->range         = '100 ft';
        $spell->targets       = 'Area of briars and/or brambles';
        $spell->duration      = 'Permanent';
        $spell->description   = '<p>This dragon-only spell has been used to great effect by the progeny of Venominhandar and his mate since their deaths prior to the erection of the Standing Stone. By means of this spell, you transform a region of briars and/or brambles into a densely tangled and thorny coppice through which movement is nearly impossible.</p>
<p>Within the area of effect of this spell, creatures of large or greater size cannot pass without suffering 1D8 points of damage per round or move at a rate of 5 ft without some form of magical protection or facilitation. Such creatures can choose to move at a rate of up to half their normal movement rate, but they suffer 1D6 points of damage per round if they do so.</p>
<p>Tiny creatures can move at a rate of up to half their normal movement rate without taking any damage if they use some form of magical protection or facilitation. If they choose to move at their normal movement rate, however, they take 1D4 points of damage per round.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 1);

        $spell                = new Spell;
        $spell->name          = "Venom's Thicketgrowth";
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Venominhandar';
        $spell->requirements  = 'Caster must be of draconic ancestry';
        $spell->range         = '90 cubic feet';
        $spell->targets       = 'Area of vegetation';
        $spell->duration      = 'Permanent';
        $spell->description   = "<p>Often used in conjunction with Venom's Brambletangle, this spell is favored by several of Cormanthor's Green Dragons as a means of constructing extensive lairs amidst the forest's vegetation. It is a dragon-only spell.</p>
<p>By means of this spell, you cause the dominant vegetation within a 90-cubic foot region to spread to an adjacent region of similar volume. While preexisting vegetation is not directly killed by means of this spell, the propagated species typically overwhelms its competitors within a year of this spell's casting</p>
<p>If cast repeatedly, this spell enables the propagation of a single species over an extensive region. It is said that Venominhandar and his mate employed this spell in conjunction with Venom's Brambletangle to transform the Emerald Vale into the Tangled Vale.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Plant'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Versatile Vibrations';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator  = 'Horizikaul';
        $spell->save_attribute = 'STR';
        $spell->range          = '0';
        $spell->area           = '60-foot cone ';
        $spell->duration       = 'Sustained, up to 1 minute';
        $spell->description    = '<p>You create a cone of sound that causes Sonic damage and pushes objects. All creatures in the area take 10 points of Sonic damage and must a STR Save or be deafened 3. Also, all objects are pushed back 5 feet if they Failed their STR Save.</p>
<p><strong>Sustain:</strong> On each of your turns after the turn you cast this spell, you must spend 1 Action to sustain it. If you do not, the spell ends. Any creature that ends their turn in within the area suffers the same effects (Sonic damage and STR Save or Deafened and pushed back 5 feet).</p>
<dl>
    <dt>Material Components</dt> <dd>A hollow cone of brass and gold with 50 gp</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>Sonic damage and not Deafened and not pushed back</dd>
    <dt>Failure</dt> <dd>Sonic damage, Deafened 3, and pushed back 5 feet</dd>
    <dt>Critical Failure</dt> <dd>Double Sonic damage, Deafened 5, pushed back 5 feet, and Prone.</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Sonic damage by +3</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic', 'Sustained'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Vertigo';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '30 feet';
        $spell->targets        = 'One living creature within Range';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>You cripple the Target with a sensation of falling. The Target must make a WIS Save or becomes Dizzy: 2. If the Target Fails their Save, then anytime they wish to take a Move Action, they must first Succeed in a DEX (Balance) Check. If the Check Fails, they cannot move, and if they Critically Fail, they fall Prone.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No affect</dd>
    <dt>Failure</dt> <dd>Affected</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+2)</dt> <dd>The spell gains an Area of 20-ft emanation. Anyone who starts their turn in the Area is affected by the spell and must make a WIS Save.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Mental'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Vicious Mockery';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature within range';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You unleash a string of insults laced with subtle enchantments at a creature you can see within range. If the target can hear you and understand you, it must make a WIS Save or take 1D4 non-lethal damage and have disadvantage on the next attack roll it makes before the end of its next turn.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full damage and disadvantage on next attack roll</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Auditory', 'Enchantment'], 0);

        $spell              = new Spell;
        $spell->name        = 'Viscus Glob';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '90 feet';
        $spell->targets     = 'One creature within range';
        $spell->duration    = '1 hour';
        $spell->description = "<p>Make a Ranged Spell attack. If you miss, the glob might strike a nearby square or creature. Once you have established the direction of the miss, roll 1D4 to determine the number of squares away from the target square that the glob lands.</p>
<p>A Medium or Smaller creature struck by the glob must make a Successful DEX Save or be instantly stuck in place. A stuck creature can speak but is otherwise limited to purely mental Actions (such as casting spells with no Somatic or Material Casting components) and attempts to free itself by means of a STR check or Break Grapple check (DC equal to spell DC) made as a Triple Action. A Large or Larger creature stuck in the goo can't move from the spot it is glued, but it can otherwise act normally.</p>
<p>The glob dissipates when the spell duration expires. Until then, it remains sticky, and any creature touching it (for example, a creature attempting to pull out an ally) must make a successful DEX Save or become stuck themselves. A creature struck by such secondary contact is not trapped as thoroughly as a creature targeted by the glob, however, so the DC for the STR check or Break Grapple check gets a +5 bonus.</p>
<dl>
    <dt>Material Components</dt> <dd>A tiny ball of spider silk</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 5);

        $spell               = new Spell;
        $spell->name         = 'Vile Undead';
        $spell->casting      = '1 minute (Material, Somatic, Verbal, Ability Damage';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>1 CON Damage</dd>
</dl>';
        $spell->range        = 'Touch';
        $spell->targets      = 'One corporeal undead creature under your control';
        $spell->duration     = 'Permanent';
        $spell->description  = '<p>You summon the spirit of a demon and bind it into the body of a corporeal undead that is under your control. The undead gains the Fiend Template and the resulting creature is no longer under your control. Its initial attitude toward you is Indifferent.</p>
<dl>
    <dt>Material Components</dt> <dd>A bit of brimstone and a bloodstone worth at least 200 gp.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling', 'Evil', 'Undead', 'Chaotic'], 6);

        $spell              = new Spell;
        $spell->name        = 'Virtue';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Living creature Touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>The Target gains 1 Temporary Hit Point</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Healing'], 0);

        $spell              = new Spell;
        $spell->name        = 'Vitality Shield';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature Touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You are immune to Fatigue, Exhaustion, and Ability Damage. If the Ability Damage is part of casting a spell, then the Ability Damage is only reduced by 1.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>You may target an additional creature</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Vitriolic Sphere';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->range          = '150 feet';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You point at a location within range, and a glowing, 1-foot-diameter ball of emerald Acid streaks there and explodes in a 20-foot-radius sphere. Each creature in that area must make a DEX Save. On a failed save, a creature takes 10D4 Acid damage and another 5D4 Acid damage at the end of its next turn.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage and no secondary damage</dd>
    <dt>Failure</dt> <dd>Full damage and secondary damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the initial damage by 2D4</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Acid'], 4);

        $spell              = new Spell;
        $spell->name        = 'Vocalize';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '2 rounds';
        $spell->description = '<p>For the duration of this spell, spells you cast do not require Verbal Casting Components, allowing you to cast spells quietly and more quickly (fewer Actions). If you cast a spell that does not have a Verbal Casting component, then this spell has no effect.</p>
<dl>
    <dt>Material Components</dt> <dd>A bell with no clapper</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by +1 round</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Volcanic Eruption';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '5-foot radius, 80-foot tall cylinder. 120 foot range';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>The ground opens up, spraying a column of lava high into the air in a vertical cylinder, dealing 13D6 Fire damage. Creatures in the area must attempt a DEX save or take 13D6 Fire damage. The lava rapidly cools, and creatures in the area might become partially encased in rock depending on their DEX Saves. A creature encased in rock is sluggish 1, is hampered 5 feet, and when flying treats all normal terrain as difficult terrain. A flying creature immediately descends 20 feet the moment it’s encased, but doesn’t take falling damage from this movement. A creature encased in rock can attempt to Break Open or Escape against your spell DC to end the effect. Otherwise, the creature remains encased until it takes a total of 50 damage, freeing it from the rock.</p>
<p>Additionally, creatures in the area that do not critically succeed at their Saves and creatures that are within 5 feet of the lava column automatically take 2D6 Fire damage from the intense heat.</p>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>No damage and not encased</dd>
    <dt>Success</dt> <dd>Half damage and not encased</dd>
    <dt>Failure</dt> <dd>Full damage and encased</dd>
    <dt>Critical Failure</dt> <dd>Double damage and encased</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage dealt in the area increases by 2D6, and the damage dealt by the intense heat increases by 1D6.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Fire'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Volley';
        $spell->casting        = 'Material Casting';
        $spell->range          = '150 feet';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You fire a piece of nonmagical ammunition from a ranged weapon or throw a nonmagical weapon into the air and choose a point within range.</p>
<p>Hundreds of duplicates of the ammunition or weapon fall in a volley from above and then disappear. Each creature in a 40-foot-radius. 20-foot-high cylinder centered on that point must make a DEX Save. A creature takes 8d8 damage. The damage type is the same as that of the ammunition or weapon.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Vulnerability';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->range          = '120 feet';
        $spell->area           = '10 foot emanation';
        $spell->targets        = 'One or more creatures within the area';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>Silvery tendrils erupt from your outstretched arms and strike the creatures you choose within range and area. A lingering silvery aura engulfs them thereafter. Those affected gains Vulnerability to one of the following energy types of your choosing.</p>
<ul>
    <li>Acid</li>
    <li>Cold</li>
    <li>Electricity</li>
    <li>Fire</li>
    <li>Negative Energy</li>
    <li>Poison</li>
    <li>Positive Energy</li>
    <li>Sonic</li>
</ul>
<p>If the creature already has a Vulnerability to the chosen type, they take Quadruple Damage from attacks of that type. If the creature has Resistance or Damage Reduction to that type, they take normal damage from attacks of that type. If the creature has Immunity to damage of that type, they gain Resistence to that type.</p>
<dl>
    <dt>Material Components</dt> <dd>A tiny wooden shield, which you must snap in half.</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>Affected as normal</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+3)</dt> <dd>You may instead grant Vulnerability to Bludgeoning, Piercing, or Slashing</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell              = new Spell;
        $spell->name        = 'Vuorl`Kyshuf';
        $spell->casting     = '1 minute (Material, Somatic, Verbal)';
        $spell->duration    = 'Concentration';
        $spell->description = "<p>A Message on Birds' Wings to Silver. Ritual of Solitude</p>
<p>This spell allows you to use some physical medium such as a pool of water, a polished shield, or a mirror to summon an image of a person or persons with whom you wish to speak. The image remains and communication can continue for as long as you maintain Concentration. In all other effects, this spell acts as a Sending spell with no word or distance limitations (aside from remaining within Realmspace), aside from Concentration on the magics.</p>";
        $helper->addTypesToSpell($spell, ['High Magic', 'Divination'], 4);
        $spell->materials()->save(Material::where('name', 'Miscellaneous')->firstOrFail(), ['meta' => 'Medium suitable for the communication']);
    }
}
