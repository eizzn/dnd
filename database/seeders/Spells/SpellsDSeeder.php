<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsDSeeder extends Seeder
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

        $spell                 = new Spell;
        $spell->name           = 'Dance of Ruin';
        $spell->casting        = 'Somatic Casting, Somatic Casting, Verbal Casting, Skill Check';
        $spell->range          = '30 ft spread centered on you';
        $spell->save_attribute = 'DEX';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>To cast this spell, you dance wildly and chant. After you finish, a wave of crackling Negative energy flashes out from you in all directions. All non-demon creatures within the area take 2D20 Negative damage.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D10</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Evil', 'Negative'], 2);
        $spell->skills()->save(app()->skills['Performance'], ['dc' => 15]);

        $spell                = new Spell;
        $spell->name          = 'Dancing Lights';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Brightfinger';
        $spell->range         = '120 feet';
        $spell->duration      = 'Concentration';
        $spell->description   = '<p>You create up to four floating lights, no two of which are more than 10 feet apart. Each sheds light like a torch. When you Concentrate on the Spell, you can move each light up to 60 feet. Each light must remain within range and within 10 feet of all others, or it winks out.</p>';
        $spell->heightened    = '<dl>
    <dt>Permanency</dt> <dd>1 CON damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light', 'Permanency'], 0);

        $spell              = new Spell;
        $spell->name        = 'Dancing Sword';
        $spell->casting     = 'Material Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One-handed melee weapon touched';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You enchant a one-handed melee weapon so that it can move and attack. You can perform the following.</p>
<ul>
    <li>As an Action, you can move the enchanted weapon up to 40 Flying.</li>
    <li>As an Action, you can make a Melee Spell Attack with the weapon against any creature that is within melee striking distance of the enchanted weapon.</li>
</ul>
<p>The enchanted weapon has AC 14. Use the equipment listing for the weapon to determine Hardness, and Hit Points.</p>
<dl>
    <dt>Material Components</dt> <dd>The melee weapon to enchant</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = 'Daoin`Teague`Feer';
        $spell->casting     = '1 minute per 10 participants (Material, Somatic, Verbal)';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'Up to 100 participants';
        $spell->range       = '300-foot radius';
        $spell->duration    = '12 hours';
        $spell->description = '<p>Starshine Upon the People, Ritual of Solitude</p>
<p>This High Magic spell of rejuvenation is one led by High Priest or an elf of royal blood, but there can be as many as 100 other participants (who are actually the targets). Under a clear starry night sky, this spell cleanses an elf both physically and spiritually. This spell includes chanting and dance is often used in wartime to bolster morale and prepare the troops for battle.</p>
<p>With the caster leading a group of elves in both song and dance, this spell summons a shower of glittering stardust within the boundaries of the spell. The luster settles on to participats and amkes them glow lightly throughout the ritual. This starshine has the following effects on all participants.</p>
<ul>
    <li>Removes all grime and dirt from folk and equipment</li>
    <li>Cures all nonmagical Disease</li>
    <li>Cures all Blindness and Deafness, as with the Restore Senses</li>
    <li>Cure Wounds spell heightened to the same level as the spell level as this spell</li>
    <li>Removes all Poison, as with the Remove Poison spell</li>
    <li>Beneficial effects of an Aid spell</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'High Magic'], 7);
        $spell->skills()->save(app()->skills['Medicine'], ['dc' => 25]);
        $spell->materials()->save(Material::where('name', 'Diamond')->firstOrFail(), [
            'quantity' => '5 gp per participant',
            'meta'     => 'Powdered, sprinkled on the participants',
        ]);

        $spell              = new Spell;
        $spell->name        = 'Dark Wings';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched creature or self';
        $spell->duration    = '1 minute';
        $spell->description = "<p>This spell causes the growth of bat wings from the shoulder of the caster or another touched creature. The target gains a Fly Speed equal to 30 feet.</p>
<p>The wings have a tip-to-tip span of 15 feet. They allow only clumsy flight. However, their value lies in their strength. These wings can carry double the spell's recipient's body mass without problems and even triple the aforementioned mass could be securely made to land safety.</p>
<p>The wings can be used to make buffeting attacks, dealing 2D4 Bludgeoning damage. The wings can be used to provide cover. With an Action (similar to the Raise a Shield Action), you can gain an AC bonus of +3. You cannot use this Action while you are using your wings for flying. The wings have 30 Hit Points and Hardness 5.</p>
<p>The wings cause the target's land Speed by 10 feet. The caster nor the target can dismiss the wings, and must wait till the spell's duration expires.</p>";
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);

        $spell                = new Spell;
        $spell->name          = 'Darkness';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->range         = '60 foot range';
        $spell->area          = '15-foot emanation';
        $spell->spell_creator = 'Fahren';
        $spell->duration      = '10 minutes';
        $spell->description   = "<p>A shroud of darkness prevents light from penetrating or emanating within the area. This suppresses magical light of the spell's level or lower. Light can't pass through, so creatures in the area can't see outside. From outside, it appears as a globe of pure darkness.</p>
<dl>
    <dt>Counterspell</dt> <dd>
        <ul>
            <li>Darkness</li>
            <li>Any Spell with the Light type of level 2 or lower</li>
            <li>Any Spell with the Light type with a successful Spell Level Check (DC 10 + target spell's level)</li>
        </ul>
    </dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Even creatures with darkvision (but not greater darkvision) treat targets seen through the darkness as concealed.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Darkness', 'Evocation', 'Counterspell'], 2);

        $spell              = new Spell;
        $spell->name        = 'Darkvision';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->range       = '60 feet';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You gain darkvision</p>';
        $spell->heightened  = "<dl>
    <dt>Heightened (+1)</dt> <dd>The spell's range is touch, and it targets 1 creature.</dd>
    <dt>Permanency (Heightened +3)</dt> <dd>5,000 gp. 5 CON damage.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Bless', 'Enchantment', 'Transmutation', 'Permanency'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Dawn';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 foot range';
        $spell->area           = '30-ft cylinder';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>The light of dawn shines down on a location you specify within range. Until the spell ends, a 30-foot-radius.40-foot-high cylinder of bright light glimmers there. This light is sunlight. When the cylinder appears, each creature in it must make a CON Save, taking 4D10 Light. A creature must also make this Save whenever it ends its turn in the cylinder.</p>
<p>If you're within 60 feet of the cylinder, you can move it up to 60 feet as a bonus action on your turn.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 5);

        $spell              = new Spell;
        $spell->name        = 'Daylight';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = '1 hour';
        $spell->description = "<p>A 60-foot-radius sphere of light spreads out from a point you choose within range. The sphere is bright light and sheds dim light for an additional 60 feet.</p>
<p>If you chose a point on an object you are holding or one that isn't being worn or carried, the light shines from the object and moves with it. Completely covering the affected object with an opaque object, such as a bowl or a helm, blocks the light.</p>
<p>If any of this spell's area overlaps with an area of darkness created by a spell of 3rd level or lower, the spell that created the darkness is dispelled.</p>";
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 3);

        $spell              = new Spell;
        $spell->name        = 'Daywalker';
        $spell->casting     = '1 minute (Somatic, Verbal, Material)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched Undead';
        $spell->duration    = '24 hours';
        $spell->description = "<p>You reshape the substance of a willing undead creature to resemble a living, breathing creature of the same size. This is a physical change to the undead creature's bone, flesh, or incorporeal ectoplasm, adding new flesh or bone and even hair, teeth, and blood, all of which demonstrate false signs of life that mimic a living creature's breathing and other physiological processes. An incorporeal undead creature using daywalker ceases to be incorporeal for the duration of the spell, gaining a physical corpse body. Creatures interacting with the undead can attempt a Perception check (DC = 30 or DC = 21 + the undead's Disguise modifier, whichever is higher) to realize that the signs of life are false, and a close examination with a Medicine check always reveals the truth of the dead flesh.</p>
<p>If the undead has the frightful presence, incorporeal, light blindness, light sensitivity, stench, sunlight powerlessness, or unnatural aura abilities, the spell suppresses them. An undead creature whose touch normally deals damage, ability drain, or energy drain doesn't do so while under the spell's effects.</p>
<p>The target of this spell may end its duration at any time with an Action.</p>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead', 'Ritual'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Daze';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->targets        = '1 creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 round';
        $spell->description    = "<p>You cloud the target's mind with effects determined by its WIS Save.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>The target is unaffected</dd>
    <dt>Failure</dt> <dd>The target is Flat-Footed</dd>
    <dt>Critical Failure</dt> <dd>The target is flat-footed and slowed 1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Disorienting'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Deafness';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature';
        $spell->save_attribute = 'CON';
        $spell->spell_creator  = 'Cragh';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>The target loses hearing, depending on its Save, and is bolstered against all castings of Deafness.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>The target is deafened for 1 round</dd>
    <dt>Failure</dt> <dd>The target is deafened for 10 minutes</dd>
    <dt>Critical Failure</dt> <dd>The target is deafened permanently</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Curse', 'Enchantment', 'Transmutation'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Death Door';
        $spell->casting        = '1 minute (Verbal)';
        $spell->requirements   = 'Caster must be of draconic ancestry';
        $spell->range          = 'Touch';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Until dispelled';
        $spell->description    = '<p>As the spell is being cast, you must touch a form of portal; whether it is a door, the entrance to a cave, or any form of delineation that separates a room from another or a place from a different one. This portal cannot have a diameter longer than 30 ft in any direction. Upon the casting of the spell, you must specify a command word that will form into the password to safely pass through the portal. You may only have one Death Door Spell active at any time, and any subesquent casting of this Spell eliminates the previous one.</p>
<p>Any creature that crosses the portal without saying the password must make a CON Save or take 12D10 Negative damage</p>
<p>This Spells effect produces a visible blue aura around the portal.</p>';
        $spell->saves = '<dl>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative', 'Dragon', 'Ritual'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Death Knell';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'One living creature at 0 Hit Points';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You snuff out a creature at the brink of death, based on its Save. If this kills it, you gain 10 temporary Hit Points and a +1 conditional bonus to attack and damage rolls for 10 minutes.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>The target increases its dying value by 1</dd>
    <dt>Failure</dt> <dd>The target dies</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Death', 'Necromancy'], 2);

        $spell               = new Spell;
        $spell->name         = 'Death Pact';
        $spell->casting      = '1 hour (Material, Somatic, Verbal)';
        $spell->range        = 'Touch';
        $spell->targets      = 'Willing Creature touched';
        $spell->requirements = '<dl>
    <dt>Secondary Caster</dt> <dd>At least 3 other spell casters, each of which must cast one of the spells that get cast when this spell is triggered (Word of Recall or Teleport, Raise Dead, Heal)</dd>
    <dt>Ability Damage</dt> <dd>All participants (including the target) suffers 5 CON damage.</dd>
    <dt>Sacrifice</dt> <dd>An innocent humanoid must be ritually sacrificed as part of the casting of this spell.</dd>
</dl>';
        $spell->duration     = 'Permanent until triggered';
        $spell->description  = '<p>This spell allows the target to enter a binding agreement with your deity that brings the target back to life if slain.</p>
<p>The following spells are cast upon the target should they die.</p>
<ul>
    <li>The target is teleported to a known location (as the spell Word of Recall)</li>
    <li>A Raise Dead spell is cast on the target</li>
    <li>A Heal spell is cast on the target.</li>
</ul>
<p>If the Raise Dead spell could not return the target back to life (for example, if the target was disintegrated), the Death Pact spell fails.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Enchantment', 'Evil', 'Ritual'], 8);
        $spell->materials()->save(Material::where('name', 'Diamond')->firstOrFail(), ['price' => 'At least 500 gp']);

        $spell              = new Spell;
        $spell->name        = 'Death Ward';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature touched';
        $spell->duration    = '1 minute';
        $spell->description = '<p>The target is protected from negative energy. It receives a +4 conditional bonus to saves against death and negative effects, gains resistance 10 to negative, and suppresses the effects of enervated.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+4)</dt> <dd>The spell targets all within a 30-foot radius</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 5);

        $spell              = new Spell;
        $spell->name        = 'Deathwatch';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->area        = 'Cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>This spell grants you sight into how close to death a living creature is.</p>
<ul>
    <li>Creature is Dead</li>
    <li>Fragile (alive and wounded with 3 or fewer Hit Points)</li>
    <li>Fighting Off Death (alive with 4 or more Hit Points)</li>
    <li>Undead</li>
</ul>
<p>This spell does not detect creatures that are not alive or dead, such as Constructs.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 1);

        $spell              = new Spell;
        $spell->name        = 'Decastave';
        $spell->casting     = 'Material Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You conjure into existence a quarterstaff of force, approximately 8 feet long and 2 inches in diameter. The Decastave lasts so long as you keep it in hand; if you give it to another creature or drop it, it vanishes.</p>
<p>You can use the Decastave in combat to strike with a Melee Attack, dealing 1D6 points of Bludgeoning damage. Since the Decastave is made of Force, it affects incorporeal and ethereal creatures normally (provided you can see such creatures). In a Critical Hit, the target must succeed on a CON Save or be Deafened for 3 rounds.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Force'], 2);
        $spell->materials()->save(Material::where('name', 'Duskwood')->firstOrFail(), ['meta' => 'A slender wand of Duskwood']);

        $spell              = new Spell;
        $spell->name        = 'Deeper Darkvision';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->range       = 'Touch';
        $spell->targets     = 'One willing creature touched';
        $spell->duration    = '3 hours';
        $spell->description = '<p>This spell functions like Darkvision, except you can also see in magical darkness.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Deafening Blast';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '120 ft, 30 ft radius emanation';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A deafening blast of sound, louder than thunder, erupts where you point. All creatures in the area suffer 1D6 Sonic damage and are Deafened for 3 days and Stunned: 1.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Deafened for 3 rounds</dd>
    <dt>Failure</dt> <dd>Deafened for 3 days and Stunned: 1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 3);

        $spell                = new Spell;
        $spell->name          = 'Deafening Clang';
        $spell->casting       = 'Somatic Casting';
        $spell->spell_creator = 'Gaerdal Ironhand';
        $spell->range         = 'Touch';
        $spell->targets       = 'Metal weapon touched';
        $spell->duration      = '10 minutes';
        $spell->description   = '<p>You empower the touched weapon with magic that causes it to emit a loud clang when it is struck against a hard surface, such as a floor, wall, or creature. The weapon can create this noise only once per turn.</p>
<p>The clang causes 1D6 Sonic Damage to all within 5 ft of the point of impact (except for your self). If the weapon is used as an attack against a target but the attack roll was sufficient for a Touch attack to succeed, then the target still suffers the Sonic damage.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Sonic'], 1);

        $spell              = new Spell;
        $spell->name        = 'Death Armor';
        $spell->casting     = 'Somatic Casting, Material Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You shroud yourself in a black aura that injures creatures that contact it. Any creature striking you with a Melee attack takes 1D4 +3 Negative damage. Weapons with reach do not cause damage to the attacker.</p>
<dl>
    <dt>Material Components</dt> <dd>A past made of exotic herbs, and ground bones that is applied to yourself.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 2);

        $spell              = new Spell;
        $spell->name        = 'Delay Disease';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature touched';
        $spell->duration    = '1 day';
        $spell->description = "<p>The target becomes temporarily immune to disease. Any disease to which it is exposed during the spell's duration does not affect the target until the spell's duration has expired (the target cannot become Diseased while the spell is in effect). Delay disease does not cure any damage a disease may have already done.</p>
<p>If the target is currently infected with a disease, this spell temporarily moves the victim of the Disease one Stage closer to being healed. If the victim is at Stage 1, then they are treated as being cured until the spell ends, then the victim returns to being at Stage 1 of the Disease. Until the spell ends, all Save checks are delayed until the spell ends (the victim does not move to a worse Stage of the Disease).</p>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Disease'], 2);

        $spell              = new Spell;
        $spell->name        = 'Delay Poison';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Touched poisoned creature';
        $spell->duration    = '2 hours';
        $spell->description = '<p>You delay the effects of poison that has infected a creature. The target is unaffected by poison until the spell expires. The target is not cured and will continue to suffer the effects of the poison when the spell expires.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Poison'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Delayed Blast Fireball';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '20-foot radius. 150 foot range';
        $spell->save_attribute = 'DEX';
        $spell->spell_creator  = 'Noanar';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>A beam of yellow light flashes from your pointing finger, then condenses to linger at a chosen point within range as a glowing bead for the duration. When the spell ends, either because your concentration is broken or because you decide to end it, the bead blossoms with a low roar into an explosion of flame that spreads around corners. Each creature in a 20-foot-radius sphere centered on that point must make a DEX Save. A creature takes 12D5 fire damage. If at the end of your turn the bead has not yet detonated, the damage increases by 1D6. If the glowing bead is touched before the interval has expired, the creature touching it must make a DEX Save. On a failed save, the spell ends immediately, causing the bead to erupt in flame. On a successful save, the creature can throw the bead up to 40 feet. When it strikes a creature or a solid object, the spell ends, and the bead explodes. The fire damages objects in the area and ignites flammable objects that aren't being worn or carried.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Deliquescence';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator  = 'Sylune';
        $spell->rarity         = 'Rare';
        $spell->range          = '40-foot cube. 120 foot range';
        $spell->save_attribute = 'STR | DEX';
        $spell->duration       = 'Permanent';
        $spell->description    = '<p>As Transmute Rock (Rock to Mud), except it transforms Ice to Cold Water (about 40 degrees F).</p>
<p>The water may freeze again due to natural conditions.</p>
<p>This spell was created by Sylune in her guise as Jhanifer.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Demand';
        $spell->casting        = '1 minute (Somatic, Verbal, Material, Ability Damage)';
        $spell->requirements   = '<dl>
    <dt>Ability Damage</dt> <dd>1 CON Damage</dd>
</dl>';
        $spell->range          = 'Planetary';
        $spell->targets        = 'One familiar creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 round';
        $spell->description    = '<p>This spell functions like Sending, but the message can also contain a Suggestion, which the subject does its best to carry out. A Successful WIS Save negates the Suggestion but not the message itself.</p>
<p>The target of the Demand must be able to understand you (you must speak in a language that the target understands).</p>
<p>The target can also give a short reply as the Sending spell.</p>
<dl>
    <dt>Material Components</dt> <dd>A short piece of copper wire and some small part of the subject (a strand of hair, a fingernail, etc).</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected by the Suggestion affect</dd>
    <dt>Failure</dt> <dd>Affected by the Suggestion affect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Lingual', 'Compulsion'], 8);

        $spell              = new Spell;
        $spell->name        = 'Demiplane';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->duration    = '1 hour';
        $spell->description = '<p>You create a shadowy door on a flat solid surface that you can see within range. The door is large enough to allow Medium creatures to pass through unhindered. When opened, the door leads to a demiplane that appears to be an empty room 30 feet in each dimension, made of wood or stone. When the spell ends, the door disappears, and any creatures or objects inside the demiplane remain trapped there, as the door also disappears from the other side.</p>
<p>Each time you cast this spell, you can pick one of the following:</p>
<ul>
    <li>You can create a new demiplane</li>
    <li>Have the shadowy door connect to a demiplane you created with a previous casting of this spell</li>
    <li>If you know the nature and contents of a demiplane created by a casting of this spell by another creature, you can have the shadowy door connect to its demiplane instead</li>
    <li>If you cast this spell from inside a demiplane, you open a door back to your home plane to the location where you last cast this spell from your home plane</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Extradimensional'], 8);

        $spell              = new Spell;
        $spell->name        = 'Demon Form';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>This spell functions like True Polymorph, except you take the form of a demon. You gain all that form's abilities and your type changes to Outsider. Any spell that would normally banish outsiders instead ends the spell and leaves you Stunned for 3 rounds.</p>
<dl>
    <dt>Material Components</dt> <dd>A bone from the demon you wish to polymorph into.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph', 'Demon'], 6);

        $spell              = new Spell;
        $spell->name        = 'Demonflesh';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>Your skin becomes think and leathery like that of a demon. You gain a +3 Natural Armor bonus and Damage Reduction 3/Good.</p>
<p>You radiate evil like an evil outsider, and are treated as such for any spell that checks for it.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Evil'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Depilate';
        $spell->casting        = '1 round (Somatic, Material)';
        $spell->range          = '120 feet';
        $spell->targets        = 'One creature with hair or fur';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>This simple curse causes a target's hair or fur to fall out in patchy clumps, leaving the creature disheveled and less commanding.</p>
<p>A creature cursed in this way takes a -2 penalty on all Diplomacy, Intimidate, and Perform checks until his hair begins to regrow 1 week later, or until the damage can be concealed with a successful Disguise check (DC equal to the original Save DC of this spell).</p>
<p>A successful Remove Curse or similar effect instantly regrows the target's hair or fur and ends this spells effect.</p>
<dl>
    <dt>Material Components</dt> <dd>A sliver of cow's tongue</dd>
</dl>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Curse'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Desecrate';
        $spell->casting        = '3 days (Material, Somatic, Verbal)';
        $spell->range          = '40-foot-radius burst around an alter, shrine, or fixture of your deity. 60 foot range';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '1 year';
        $spell->requirements   = '<dl>
    <dt>Ability Damage</dt> <dd>2 CON damage</dd>
    <dt>Secondary Casters</dt> <dd>2. Must be of your religion</dd>
</dl>';
        $spell->description = "<p>You Desecrate a site to your deity, chanting their praises and creating an unholy space. Worshipers of your deity in the area gain the follwing benefits.</p>
<ul>
    <li>+3 vile bonus to Channel Divinity checks.</li>
    <li>+1 conditional bonus to attack rolls, skill checks, Saves, and Perception checks.</li>
    <li>Creatures anathema to your deity in the area (such as angels for Bane or Cyric) take a –1 conditional penalty to attack rolls, skill checks, Saves, and Perception checks.</li>
    <li>Attacks made by worshipers of your deity within the area count as having your deity's alignment for the purpose of an enemy's weakness to aligned attacks or regeneration deactivated by aligned attacks.</li>
</ul>
<p>If the Desecrated area contains an alter, shrine, or other permanent fixture dedicated to your deity, the modifiers given above are doubled. You cannot Desecrate an area with a fixture of a deity other than your own patron.</p>
<p>If the area does contain an alter, shrine or other permanent fixture dedicated to a power other than your own, the Desecrate spell instead curses the area, cutting off its connection with the associated power. This secondary function, if used, does not grant the bonuses an penalties given above. The area must be destroyed and rebuilt to your patron before Desecrating the area to your patron.</p>
<p>Desecrate dispels Consecrate.</p>
<dl>
    <dt>Material Components</dt> <dd>Rare incense and offerings worth a total value of 20 gp X the spell level</dd>
</dl>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>The Desecration succeeds and either lasts for 10 years instead of 1 or covers an area with twice the radius. Occasionally, with your deity\'s favor, this might produce an even more amazing effect, such as a permanent Desecration area or an entire cathedral covered in a Desecrate effect</dd>
    <dt>Success</dt> <dd>The Desecration succeeds</dd>
    <dt>Failure</dt> <dd>The Desecration fails</dd>
    <dt>Critical Failure</dt> <dd>The Desecration fails spectacularly and angers your deity, who sends a sign of displeasure. You and other worshipers of your deity can\'t attempt to consecrate the same site again for at least 1 year</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evil', 'Enchantment', 'Ritual'], 2);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 12]);

        $spell                 = new Spell;
        $spell->name           = 'Despoil';
        $spell->casting        = '1 minute (Material, Somatic, Verbal)';
        $spell->range          = '1,000 ft radius';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You blight and corrupt a vast area of land. Plants with 1 Hit Die or less shrivel and die, and the ground cannot support such plant life ever again. Plants with more than 1 Hit Die must succeed on a CON Save or die. Even those successful on the Save takes 5D6 points of Negative energy damage. All living creatures in the area other than plants (and the caster) must succeed on a CON Save or take 1D4 points of STR damage.</p>
<p>Unattended objects, including structural features such as walls and doors, grow brittle and lose 1 point of Hardness (to a minimum of 0), then takes 1D6 points of Structural damage (this damage bypasses any remaining Hardness).</p>
<p>Only spells of 7th level or higher has any chance of reversing the blight.</p>
<dl>
    <dt>Material Components</dt> <dd>Corpse of a freshly dead or preserved living creature</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Plants of 1 Hit Die or more takes 5D6 Negative energy damage. Creatures are unaffected. Structures are unaffected</dd>
    <dt>Failure</dt> <dd>Plants of 1 Hit Die or more die. Creatures take 1D4 STR damage. Structures permanently lose 1 point of Hardness and takes 1D6 points of Structural damage (this damage bypasses and remaining Hardness)</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Plant', 'Evil'], 9);

        $spell                 = new Spell;
        $spell->name           = 'Destruction';
        $spell->casting        = 'Somatic Casting, Material Casting, Verbal Casting';
        $spell->range          = '30 ft';
        $spell->targets        = 'One creature within range';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>This spell instantly slays the target and consumes his remains (but not its equipment or possessions). If the target makes a CON Save, then it takes 10D6 Negative damage instead. This spell fails if Kelemvor does not want the target to die (DM's choice)</p>
<p>The only way to restore life to a creature killed in this way is to plead to Kelemvor, a Chosen of Kelemvor, or his High Priest (who must cast True Resurrection or Revival).</p>
<dl>
    <dt>Material Components</dt> <dd>A holy symbol of Kelemvor worth at least 500 gp.</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>10D6 Negative damage</dd>
    <dt>Failure</dt> <dd>Dead</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Death'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Destructive Wave';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30-foot radius';
        $spell->targets        = 'Self';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You strike the ground, creating a burst of divine energy that ripples outward form you. Each creature within range must succeed on a CON Save, taking 5D5 Sonic damage and 5D6 Positive/Negative (your choice) damage and be knocked prone.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage and not knocked prone</dd>
    <dt>Failure</dt> <dd>Full damage and knocked prone</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Sonic', 'Negative', 'Positive'], 5);

        $spell              = new Spell;
        $spell->name        = 'Detect Aberration';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->range       = '60 feet';
        $spell->duration    = 'Concentration, up to 30 minutes';
        $spell->description = "<p>You can detect the presence of all aberrations in the area. The amount of information revealed depends on how long you study a particular area or subject.</p>
<dl>
    <dt>1st round</dt> <dd>Presence or absence of aberrant life</dd>
    <dt>2nd rounds</dt> <dd>Number of different aberrant auras and the strength of the strongest aura. If you detect overwhelming aberrant power with this spell, and the Hit Dice or level of the aura's source is at least twice your character level, you are Stunned for 1 round and the spell ends.</dd>
    <dt>3rd rounds</dt> <dd>The strength and location of each aura</dd>
</dl>
<p>An aberrant aura's power depends on the type of creature you're detecting and its Hit Dice (see the following table). If an aura falls into more than one power category the spell indicates the stronger of the two. A humanoid with Aberrant Blood detects as Faint even if it has more than 3 Hit Dice. How long the aura lingers depends on its original strength.</p>
<table>
    <thead>
        <tr>
            <th>Hit Dice</th>
            <th>Strength</th>
            <th>Duration</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1 - 3 or lower</td>
            <td>Faint</td>
            <td>1D6 minutes</td>
        </tr>
        <tr>
            <td>4 - 7</td>
            <td>Moderate</td>
            <td>1D6 X 10 minutes</td>
        </tr>
        <tr>
            <td>8 - 13</td>
            <td>Strong</td>
            <td>1D6 hours</td>
        </tr>
        <tr>
            <td>14 or higher</td>
            <td>Overwhelming</td>
            <td>1D6 days</td>
        </tr>
    </tbody>
</table>
<p>Each round, the character can turn to detect aberrant auras in a new area. The spell can penetrate barriers, but 1 foot of stone, 1 inch of common metal, a thin sheet of lead, or 3 feet of wood or dirt blocks it.</p>";
        $helper->addTypesToSpell($spell, ['Detection', 'Divination', 'Aberration'], 1);

        $spell              = new Spell;
        $spell->name        = 'Detect Alignment';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->rarity      = 'Rare';
        $spell->range       = '30 feet aura centered on you';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>Your eyes glow as you sense aligned auras. Choose chaotic, evil, good, or lawful. You detect auras of that alignment. You receive no information beyond presence or absence. You can choose not to detect creatures or effects you're aware have that alignment.</p>
<p>Only divine spellcasters, undead, and beings from the Outer Planes have an alignment aura if they are 6th level or higher.</p>";
        $spell->heightened = "<dl>
    <dt>Heightened (+1)</dt> <dd>You also learn each aura's location and strength.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Detection', 'Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Detect Animals or Plants';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 ftt cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>This spell functions like Detect Evil, except that it detects the presence of a specified animal or plant (you must pick a kind of animal or plant but you may change the chosen animal or plant each round).</p>';
        $helper->addTypesToSpell($spell, ['Detection', 'Divination', 'Animal', 'Plant'], 1);

        $spell              = new Spell;
        $spell->name        = 'Detect Chaos';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>This spell functions like Detect Evil, except that it detects the auras of Chaotic creatures.</p>';
        $helper->addTypesToSpell($spell, ['Detection', 'Divination', 'Lawful'], 1);

        $spell              = new Spell;
        $spell->name        = 'Detect Charm';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 foot cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>This spell functions as per Detect Magic, except that it detects only Charm, Compulsion, and Possession effects. You immediately detect the strength and location of each such aura on all creatures in the area. You can attempt to identify the properties of each aura (see Spellcraft). In addition to noticing the targets of these effects, you can recognize when creatures in the area are using these effects on others by attempting a Sense Motive check as a standard action (DC = 20 + caster level). If you succeed, you can attempt a Spellcraft check to identify what magic it is using (even if the target is not in the area).</p>';
        $helper->addTypesToSpell($spell, ['Detection', 'Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Detect Crossroads';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 foot cone-shaped emanation or 1 mile (see text)';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>You can see Fey Crossroads within 60 feet. A Crossroads appears to you as a blue-hued, X-shaped shadow on the ground. You recognize the crossroads for what it is, and you won't be fooled by a false illusory one.</p>
<p>This spell gives you no information on where the Backroad leads.</p>
<p>If the nearest Crossroads is less than a mile away, but blocked visually from you either by distance or barriers, you can still sense its general direction.</p>";
        $helper->addTypesToSpell($spell, ['Detection', 'Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Detect Demon';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 foot cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>You sense the presence of a specific kind of evil—that of demons, their servants, and the Abyss. The amount of information revealed depends on how long you study a particular area or subject.</p>
<dl>
    <dt>1st Round</dt> <dd>Presence or absence of creatures with the demon subtype, creatures possessed by demons, creatures under the effects of spells or spell-like abilities cast by demons, or creatures otherwise tainted by demons. Creatures tainted by demons include tieflings with demonic heritages, sorcerers with abyssal bloodlines, creatures affected by a succubus's profane gift, creatures with demonic implants, or creatures who have the Thrall to Demon feat, and those under significant demonic influence as determined by the GM. This spell does not detect creatures of chaotic evil alignment who are not demons or significantly influenced by demons. Additionally, this spell detects whether a portal or similar magical passage leads to the Abyss.</dd>
    <dt>2nd Round</dt> <dd>Number of evil auras shed by creatures with the demon subtype in the area, as well as the power of the most potent evil aura present. If you are of good alignment, and the strongest evil aura's strength is overwhelming; if the creature has HD equal to at least twice your character level, you are stunned for 1 round and the spell ends.</dd>
    <dt>3rd Round</dt> <dd>The power and location of each aura, and what demon lord, if any, a demon is most closely affiliated with. If an aura is outside your line of sight, you discern the direction but not its exact location. Affiliation to a demon lord is only revealed when the creature detected is a demon (not merely a creature tainted by a demon). Demons receive a WIS Save to resist revealing what demon lord they are affiliated with. If the demon succeeds at this Save or is not forsworn to a demon lord, you know only that this aspect of the spell returned no information.</dd>
</dl>
<p>Aside from what is detailed above, this spell otherwise functions similarly to Detect Evil in terms of aura power, lingering auras, overwhelming auras, and so forth.</p>";
        $helper->addTypesToSpell($spell, ['Detection', 'Divination', 'Demon'], 0);

        $spell              = new Spell;
        $spell->name        = 'Detect Evil';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 foot cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>You can sense the presence of evil. The amount of information revealed depends on how long you study a particular area or subject.</p>
<dl>
    <dt>1st Round</dt> <dd>Presence or absence of evil.</dd>
    <dt>2nd Round</dt> <dd>Number of evil auras (creatures, objects, or spells) in the area and the power of the most potent evil aura present.</dd>
    <dt>3rd Round</dt> <dd>The power and location of each aura. If an aura is outside your line of sight, then you discern its direction but not its exact location.</dd>
</dl>
<p>If you are of good alignment, and the strongest evil aura's power is overwhelming, and the HD or level of the aura's source is at least twice your character level, you are stunned for 1 round and the spell ends.</p>";
        $helper->addTypesToSpell($spell, ['Detection', 'Divination', 'Good'], 1);

        $spell              = new Spell;
        $spell->name        = 'Detect Ghost';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 foot cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>This spell functions like Detect Evil, except it detects creatures that are in the Ethereal Plane. This spell can see into the Ethereal Plane.</p>';
        $helper->addTypesToSpell($spell, ['Detection', 'Divination'], 0);

        $spell              = new Spell;
        $spell->name        = 'Detect Good';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 foot cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>This spell functions like Detect Evil, except that it detects the auras of Good creatures.</p>';
        $helper->addTypesToSpell($spell, ['Detection', 'Divination', 'Evil'], 1);

        $spell              = new Spell;
        $spell->name        = 'Detect Law';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 foot cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>This spell functions like Detect Evil, except that it detects the auras of Law creatures.</p>';
        $helper->addTypesToSpell($spell, ['Detection', 'Divination', 'Chaotic'], 1);

        $spell              = new Spell;
        $spell->name        = 'Detect Magic';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet aura';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>You send out a magical pulse that registers the presence of magic. You receive no information beyond presence or absence of magic. You can choose to ignore magic you're fully aware of, such as you and your allies' magic items and ongoing spells.</p>
<p>You detect illusion magic only if that magic's effect has a lower level than the level of your detect magic spell. However, items that have an illusion aura but aren't deceptive (such as an invisibility potion) typically get detected normally.</p>";
        $spell->heightened = "<dl>
    <dt>Heightened (+3)</dt> <dd>You learn the school of magic for the highest-level magical effect within range that the spell detects. If multiple effects are equally strong, the GM determines which you learn.</dd>
    <dt>Heightened (+4)</dt> <dd>As the previous level, but you also pinpoint the source of the highest-level magic. You don't learn the exact location but can narrow down the source to within a 5-foot cube. If the source is larger than that, you identify only the cube nearest to you.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Detection', 'Divination', 'Ritual'], 0);

        $spell              = new Spell;
        $spell->name        = 'Detect Metal and Mineral';
        $spell->casting     = 'Somatic Casting, Material Casting, Verbal Casting';
        $spell->range       = '120 foot cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = "<p>You can detect large accumulations of metals and other minerals, whether worked or unworked. The spell will detect everything from a vein of iron ore to a pile of gold coins, even through solid stone or other barriers (any non-magical solid barrier).</p>
<p>When you cast this spell, you must concentrate on at least 10 pounds of the metal or mineral you're searching for. If an accumulation of that metal 10 pounds or larger is within the spell area, you will unerringly sense it (most coins are 50 to the pound). The amount of information revealed depends on how long you study a particular area.</p>
<ul>
    <li>1st Round: Presence or absence of the particular metal or mineral</li>
    <li>2nd Round: Approximate weight or the metal or mineral</li>
    <li>3rd Round: Distance and direction (measured in a straight line) to the metal or mineral</li>
</ul>
<p>As long as the spell is active, you can change the metal or mineral you're trying to detect as a Triple Action.</p>
<dl>
    <dt>Material Components</dt> <dd>A 1 pound sample of the metal or mineral to be detected</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Detection', 'Divination', 'Earth'], 2);

        $spell              = new Spell;
        $spell->name        = 'Detect Poison and Disease';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->range       = '30-foot radius';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>For the duration, you can sense the presence and location of poisons, poisonouse creatures, and disease within 30 feet of you. You also identify the kind of poison, poisonous creature, or disease in each case.</p>
<p>The spell can penetrate most barriers, but it is blocked by 1 foot of stone, 1 inch of common metal, a thin sheet of lead, or 3 feet of wood or dirt.</p>';
        $helper->addTypesToSpell($spell, ['Detection', 'Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Detect Scrying';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30-foot aura';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You detect the presence of Scrying effects in the area. If Detect Scrying is higher level than the Scrying effect, you gain a glimpse of the Scrying creature and learn its approximate distance and direction.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>The duration increase to 24 hours</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Detection', 'Divination'], 4);

        $spell              = new Spell;
        $spell->name        = 'Detect Secret Doors';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = '60 foot cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You can detect secret doors, compartments, caches, and so forth. Only passages, doors, or openings that have been specifically constructed to escape detection are detected by this spell (an ordinary trapdoor underneath a pile of crates would not be detected). The amount of information revealed depends on how long you study a particular area.</p>
<ul>
    <li>1st Round: Presence of absence of secret doors</li>
    <li>2nd Round: Number of secret doors and the location of each</li>
</ul>
<p>If an aura is outside your line of sight, then you discern its direction but not its exact location. Each round, you can turn to detect in a different direction. The spell can penetrate barriers, but 1 foot of stone, 1 inch of common metal, a thin sheet of lead, or 3 feet of wood or dirt blocks it.</p>';
        $helper->addTypesToSpell($spell, ['Detection', 'Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Detect Snares and Pits';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '60 foot cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 1 hour';
        $spell->description = '<p>You can detect simple pits, deadfalls, and snares as well as mechanical traps constructed of natural materials. The spell does not detect complex traps, including trapdoor traps, but does detect certain natural hazards (quicksand, sinkhole, or unsafe walls of natural rock). However, it does not reveal other potentially dangerous conditions, such as a cavern that floods during rain, an unsafe construction, or a naturally poisonous plant. This spell does not detect magic traps (except those that operate by pit, deadfalls, or snaring), nor mechanically complex ones, nor those that have been rendered safe or inactive. The amount of information revealed depends on how long you study a particular area.</p>
<ul>
    <li>1st Round: Presence or absence of hazards</li>
    <li>2nd Round: Number of hazards and the location of each. If a hazard is outside your line of sight, then you discern its direction but not its exact location.</li>
    <li>Each Additional Round: The general type and trigger for one particular hazard closely examined by you</li>
</ul>
<p>The spell can penetrate barriers, but 1 foot of stone, 1 inch of common metals, a thin sheet of lead, or 3 feet of wood or dirt blocks it.</p>';
        $helper->addTypesToSpell($spell, ['Detection', 'Divination'], 1);

        $spell              = new Spell;
        $spell->name        = 'Detect Temporal Anomaly';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>When you cast this spell, you become attuned to turbulence in the timestream and can scan a 90-degree area every round. After locating an anomaly, the severity can be determined by another round of concentration. You have a 50% chance to recognize the cause.</p>
<p>On Temporal Prime, distance is not a factor, and the spell detects the nearest turbulence in any scanned direction. On the Prime Material, the range is 200 feet. In either case, sight is also a limiting factor.</p>';
        $helper->addTypesToSpell($spell, ['Chronomancy'], 1);

        $spell              = new Spell;
        $spell->name        = 'Detect Undead';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 foot cone';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = '<p>You can detect the aura that surrounds undead creatures.</p>';
        $helper->addTypesToSpell($spell, ['Divination', 'Undead'], 0);

        $spell              = new Spell;
        $spell->name        = 'Devil Form';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 10 minutes';
        $spell->description = "<p>This spell functions like True Polymorph, except you take the form of a devil. You gain all that form's abilities and your type changes to Outsider. Any spell that would normally banish outsiders instead ends the spell and leaves you Stunned for 3 rounds.</p>
<dl>
    <dt>Material Components</dt> <dd>A bone from the devil you wish to polymorph into.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph', 'Devil'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Diamond Spray';
        $spell->casting        = 'Somatic Casting, Material Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '60 ft';
        $spell->area           = 'Con-shaped burst';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You shoot a blast of diamond-like shards from you hand. The cone causes Dazed: 5 to all evil creatures in the area (no Save) and causes 6D6 Positive damage to all Evil Outsiders, Undead, and Aberrations in the area.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage, but still Dazed: 5</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Good', 'Conjuration'], 3);
        $spell->materials()->save(Material::where('name', 'Diamond')->firstOrFail(), ['price' => '1 gp']);

        $spell              = new Spell;
        $spell->name        = 'Dictum';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '40 ft radius centered on you';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Any nonlawful creature within the area suffers the following effects.</p>
<table>
    <thead>
        <tr>
            <th>HD</th>
            <th>Effect</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Equal to caster level</td>
            <td>Deafened</td>
        </tr>
        <tr>
            <td>Up to caster level -1</td>
            <td>Slowed, Deafened</td>
        </tr>
        <tr>
            <td>Up to caster level -5</td>
            <td>Paralyzed, Slowed, Deafened</td>
        </tr>
        <tr>
            <td>Up to caster level -10</td>
            <td>Killed, Paralyzed, Slowed, Deafened</td>
        </tr>
    </tbody>
</table>
<p>The effects are cumulative and concurrent.</p>
<p>Furthermore, if you are on your home plane when you cast this spell, nonlawful extraplanar creatures within the area are instantly banished back to their home planes. Creatures so banished cannot return for 24 hours. The banishment takes place regardless of whether the cureatures hears the blasphemy. The banishment effect allows a WIS Save to resist.</p>
<p>Creatures whose Hit Dice exceeds your caster level are unaffected by this spell.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Lawful'], 7);

        $spell              = new Spell;
        $spell->name        = 'Dimension Door';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You instantly transport yourself and any items you're wearing and holding from your current space to a clear space within range you can see. If this would bring another creature with you - even if you're carrying it in an extradimensional container - the spell is lost.</p>";
        $spell->heightened  = "<dl>
    <dt>Heightened (+1)</dt> <dd>The range increases to 1 mile. You don't need to be able to see your destination, as long as you have been there in the past and know its relative location and distance from you.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 4);

        $spell              = new Spell;
        $spell->name        = 'Dimension Hop';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You teleport the willing creature touched up to 30 feet from your current position. The destination must be an unoccupied space within line of sight. If the target does not wish to be teleported, then the spell fails. You cannot use this spell on yourself.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2 Somatic Casting)</dt> <dd>You may target an additional target by using an additional 2 Casting Actions.</dd>
    <dt>Heightened (+1)</dt> <dd>Double the distance</dd>
    <dt>Heightened (+3)</dt> <dd>You may attempt to teleport an unwilling creature. They receive a CHA Save to resist being teleported.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Dimension Jumper';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>For the duration of the spell, you may use an Action to Teleport up to 30 feet to an unoccupied space within line of sight and range. You can only bring along your carried objects and your Familiar (no other creatures).</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+1)</dt> <dd>You may bring along one additional creature of Large size or smaller</dd>
    <dt>Heightened (+2)</dt> <dd>You may bring along one additional creature of Huge size or smaller</dd>
    <dt>Heightened (+3)</dt> <dd>You may bring along one additional creature of Gargantuan size or smaller</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Dimensional Anchor';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature';
        $spell->duration       = 'Varies';
        $spell->save_attribute = 'CHA';
        $spell->description    = "<p>You interfere with the target's ability to travel dimensions. The target is immune to teleportation and any effect that would move it to a different plane. The duration is determined by its Save.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>The effect lasts for 1 round</dd>
    <dt>Failure</dt> <dd>The effect lasts for 1 minute</dd>
    <dt>Critical Failure</dt> <dd>The effect lasts for 1 hour</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Conjuration'], 4);

        $spell              = new Spell;
        $spell->name        = 'Dimensional Lock';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->targets     = '30-foot burst';
        $spell->duration    = '1 day';
        $spell->description = "<p>You create a shimmering barrier that attempts to dispel all teleportation effects and planar travel into or out of the area, including items that allow access to extradimensional spaces (such as a Bag of Holding). Dimensional Lock dispels any attempt to summon a creature into the area but doesn't stop the creature from departing when the summoning ends.</p>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Conjuration', 'Ritual'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Dirge';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->area           = '50 ft radius burst emanation';
        $spell->targets        = 'All enemies within the area';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Concentration (and 3 rounds after), up to 1 minute';
        $spell->description    = "<p>Your song draws the energies of death and destruction down on your enemies. Each round, any enemy in the area suffers 2 points of STR and DEX damage. A successful Save only negates that round's affect and a new Save is required each round.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Unaffected this round</dd>
    <dt>Failure</dt> <dd>Affected this round</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Compulsion', 'Emotion', 'Illusion'], 5);

        $spell              = new Spell;
        $spell->name        = 'Dirge of Doom';
        $spell->casting     = 'Verbal Casting';
        $spell->area        = '30-foot aura';
        $spell->duration    = '1 round';
        $spell->description = '<p>Foes within the area are Frightened 1 and unable to reduce it for as long as they remain in the area.</o>';
        $helper->addTypesToSpell($spell, ['Compulsion', 'Emotion', 'Fear', 'Illusion'], 1);

        $spell              = new Spell;
        $spell->name        = 'Disappearance';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>The target becomes invisible and is completely silent. This defeats all forms of blindsense and blindsight.<p>';
        $helper->addTypesToSpell($spell, ['Figment', 'Illusion', 'Visual'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Discern Bloodline';
        $spell->casting        = 'Somatic Casting, Material Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->save_attribute = 'CHA';
        $spell->targets        = 'One creature per round';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>You can instantly tell the race of the targeted individual, plus any inherited templates possessed by the target (such as celestial, or half-dragon). The target gets a CHA Save. Each round you may target a new target within range.</p>
<dl>
    <dt>Material Components</dt> <dd>A drop of blood</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>The spell fails to divine any information, and the target is immune to this spell for 1 hour</dd>
    <dt>Failure</dt> <dd>The spell succeeds</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Detection'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Discern Lies';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->save_attribute = 'CHA';
        $spell->targets        = 'One creature within range';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>Each round, you focus on a target within range. The target receives a CHA Save. You know if the subject deliberately and knowingly speaks a lie by discerning disturbances in its aura caused by lying. The spell does not reveal teh truth, uncover unintentional inaccuracies, or necessarily reveal evasions. Each round, as an Action, you may focus on a different target, who gains a CHA Save.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>As Success, but the target also becomes aware of the spell, but not who cast it</dd>
    <dt>Success</dt> <dd>The spell fails against the target and the target is immune to this spell for the next 1 hour.</dd>
    <dt>Failure</dt> <dd>The spell succeeds</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 2);

        $spell              = new Spell;
        $spell->name        = 'Discern Location';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = 'Unlimited';
        $spell->rarity      = 'Rare';
        $spell->targets     = 'One creature or object';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You discover the target's exact location by name (including the building, community, and country) and plane of existence.</p>
<p>You can target a creature only if you've seen it in person or have a significant belonging or piece of its body. To target an object, you must have touched it or have a fragment. Discern Location overcomes lower-level protections against detection and divination.</p>";
        $helper->addTypesToSpell($spell, ['Detection', 'Divination', 'Ritual'], 8);

        $spell              = new Spell;
        $spell->name        = 'Discern Shapechanger';
        $spell->casting     = 'Somatic Casting, Material Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>As an Action, you may examine a creature within range and determine if the creature is polymorphed, or is a shapechanger. This spell does not reveal what the target's true form is.</p>
<dl>
    <dt>Material Components</dt> <dd>A balm of honey and lotus flower, smeared on your eyelids.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Detection'], 3);

        $spell              = new Spell;
        $spell->name        = 'Discolor Astral Pool';
        $spell->casting     = 'Somatic Casting, Material Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One Astral Color Pool within range';
        $spell->duration    = '6 hours';
        $spell->description = '<p>This spell causes an Astral Color Pool to show a different color (which suggests that it will go to a different plane). True Seeing or Analyze Portal reveals the true nature of the Portal. A successful DC 20 Arcana check will reveal the illusion.</p>
<dl>
    <dt>Material Components</dt> <dd>Four drops of colored ink</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Glamor'], 2);

        $spell              = new Spell;
        $spell->name        = 'Disguise Self';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 hour';
        $spell->description = "<p>You make yourself—including your clothing, armor, weapons, and other belongings on your person—look different until the spell ends or until you use your Action to dismiss it. You can seem 1 foot shorter or taller and can appear thin, fat, or in between. You can't change your body type, so you must adopt a form that has the same basic arrangement of limbs. Otherwise, the extent of the illusion is up to you.</p>
<p>The changes wrought by this spell fail to hold up to physical inspection. For example, if you use this spell to add a hat to your outfit, objects pass through the hat, and anyone who touches it would feel nothing or would feel your head and hair. If you use this spell to appear thinner than you are, the hand of someone who reaches out to touch you would bump into you while it was seemingly still in midair.</p>
<p>To discern that you are disguised, a creature can use its Action to inspect your appearance and must succeed on an INT (Insight) check against your spell save DC.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Visual', 'Glamor'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Disintegrate';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '120 feet';
        $spell->targets        = 'One creature or unattended object';
        $spell->save_attribute = 'CON';
        $spell->spell_creator  = 'Aksa';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You fire a green ray at your target. Make a ranged touch attack. You deal 12D10 damage and the target must attempt a CON Save. On a critical hit, treat the save result as one degree worse. A creature reduced to 0 HP is reduced to fine powder; gear remains.</p>
<p>An object you hit is destroyed (no save), regardless of Hardness, unless it\'s an artifact or similarly hard to destroy. A single casting can destroy no more than a 10-foot cube of matter. This automatically destroys any force construct, such as a Wall of Force.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The target takes half damage</dd>
    <dt>Failure</dt> <dd>The target takes full damage</dd>
    <dt>Critical Failure</dt> <dd>The target takes double damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The damage increases by 2D10</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 6);

        $spell                = new Spell;
        $spell->name          = 'Disjunction';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->range         = '120 feet';
        $spell->spell_creator = 'Mordenkainen';
        $spell->targets       = 'One magic item';
        $spell->duration      = 'Instantaneous';
        $spell->description   = "<p>Crackling energy dis-joins the target. You attempt to dispel it. If you succeed, it's deactivated for 1 week. On a critical success, it\'s destroyed. If it's an artifact or similar item, you automatically fail.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 9);

        $spell              = new Spell;
        $spell->name        = 'Disk of Solar Vengeance';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute or until discharged';
        $spell->description = '<p>This spell creates a disk of sunlike flames behind your head. The flames give you resistance to Cold. In addition, if any creature strikes you with a Natural Attack, an Unarmed Strike, or a Melee Weapon that is not a reach weapon, it takes 2D6 Fire damage after dealing its normal damage to you. This instantly discharges the spell. You can also use the spell to attack as if it were a Touch Spell, dealing 2D6 Fire damage.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Fire'], 1);

        $spell              = new Spell;
        $spell->name        = 'Dismiss Fog';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 foot radius circle';
        $spell->targets     = 'Area of fog within 60 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell eliminates normal and magical fog from the area of effect. Only fog and mist is affected, not bodies of water, rain, or other precipitation. The fog dispelled is gone permanently, but the empty volume may be filled in again with new fog if there is sufficient quantity in the area. However, a dispelled area stays clear for 5 rounds regardless of other conditions.</p>
<p>Creatures in fog or mist from (such as vampires) who are in the area of effect must make a CON Save. On a success, the creature must transform to a form other than fog or mist, failure causes the creature to take 6D8 damage.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the radius by +60 feet and the damage by +2D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Dispel Chaos';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Touched chaotic creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '10 rounds';
        $spell->description    = "<p>This spell functions like Dispel Evil, except that you are surrounded by a constant, blue lawful energy, and the spell affects Chaotic creatures and spells rather than Evil ones.</p>
<dl>
    <dt>Counterspell</dt> <dd>
        <ul>
            <li>Dispel Chaos</li>
            <li>Protection From Law</li>
            <li>Dispel Law with a successful Spell Level Check (DC 12 + target spell's level)</li>
        </ul>
    </dd>
</dl>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Lawful', 'Counterspell'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Dispel Cold';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Touched evil creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '10 rounds';
        $spell->description    = "<p>This spell functions like Dispel Evil, except that you are surrounded by a constant blue-white cold energy, and the spell affects Cold creatures and spells rather than Evil ones.</p>
<dl>
    <dt>Counterspell</dt> <dd>
        <ul>
            <li>Dispel Fire</li>
            <li>Protection from Fire</li>
            <li>Dispel Fire with a successful Spell Level Check (DC 12 + target spell's level)</li>
        </ul>
    </dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Fire', 'Counterspell'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Dispel Evil';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Touched evil creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '10 rounds';
        $spell->description    = "<p>Shimmering, white holy energy surrounds you. This energy has three effects.</p>
<ul>
    <li>You gain a +4 Deflection Bonus to AC against attacks by Evil creatures</li>
    <li>On make a successful Melee Touch attack against an Evil creature from another plane, you can choose to drive that creature back to its home plane. The creature can negate the effects with a successful WIS Save. This use discharges and ends the spell.</li>
    <li>With a touch you can automatically dispel any one spell effect by an Evil creature or any Evil spell. Spells that can't be dispelled by Dispel Magic also can't be dispelled by Dispel Evil. This use discharges and ends the spell.</li>
</ul>
<dl>
    <dt>Counterspell</dt> <dd>
        <ul>
            <li>Dispel Evil</li>
            <li>Protection From Good</li>
            <li>Dispel Good with a successful Spell Level Check (DC 12 + target spell's level)</li>
        </ul>
    </dd>
</dl>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Good', 'Counterspell'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Dispel Fire';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Touched evil creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '10 rounds';
        $spell->description    = "<p>This spell functions like Dispel Evil, except that you are surrounded by a constant red, orange, and yellow flames, and the spell affects Fire creatures and spells rather than Evil ones.</p>
<dl>
    <dt>Counterspell</dt> <dd>
        <ul>
            <li>Dispel Cold</li>
            <li>Protection from Cold</li>
            <li>Dispel Cold with a successful Spell Level Check (DC 12 + target spell's level)</li>
        </ul>
    </dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Cold', 'Counterspell'], 5);

        $spell              = new Spell;
        $spell->name        = 'Dispel Fog';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '200 feet, 100 ft cube';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>You make normal or magical fog within the affected area instantly and completely vanish. This spell is effective against fog and mist from any source, including spells such as Obscuring Mist or Cloudkill, but not against bodies of water, precipitation, or smoke. The dispelled area stays clear for the duration, after which it can fill in again if there is sufficient fog in the surrounding vicinity. Natural fog is automatically cleared in the affected area; natural fog reforms within 1 minute after the expiration of the spell.</p>
<p>Creatures in fog or mist form who are in the area must succeed on a CON Save or take 2D10 points of damage. Regardless of the out come of the Save, the target must assume a different shape.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Air'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Dispel Good';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Touched good creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '10 rounds';
        $spell->description    = "<p>This spell functions like Dispel Evil, except that you are surrounded by dark, wavering unholy energy, and the spell affects Good creatures and spells rather than Evil ones.</p>
<dl>
    <dt>Counterspell</dt> <dd>
        <ul>
            <li>Dispel Good</li>
            <li>Protection From Evil</li>
            <li>Dispel Evil with a successful Spell Level Check (DC 12 + target spell's level)</li>
        </ul>
    </dd>
</dl>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Evil', 'Counterspell'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Dispel Law';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Touched lawful creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '10 rounds';
        $spell->description    = "<p>This spell functions like Dispel Evil, except that you are surrounded by flickering, yellow chaotic energy, and the spell affects Lawful creatures and spells rather than Evil ones.</p>
<dl>
    <dt>Counterspell</dt> <dd>
        <ul>
            <li>Dispel Law</li>
            <li>Protection From Chaos</li>
            <li>Dispel Chaos with a successful Spell Level Check (DC 12 + target spell's level)</li>
        </ul>
    </dd>
</dl>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Chaotic', 'Counterspell'], 5);

        $spell              = new Spell;
        $spell->name        = 'Dispel Magic';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '120 feet';
        $spell->targets     = 'One spell effect or unattended magic item';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>Choose one creature, object, or magical effect within range. Any spell of equivalent level or lower on the target ends. For each spell of higher level, make an ability check using your spellcasting ability. The DC equals 10 + the spell's level. On a successful check, the spell ends.</p>
<dl>
    <dt>Counterspell</dt> <dd>
        <ul>
            <li>Dispel Magic</li>
            <li>Any other spell with a successful Spell Level Check (DC 12 + target spell's level)</li>
        </ul>
    </dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the level of effect that you automatically end.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Counterspell'], 3);

        $spell              = new Spell;
        $spell->name        = 'Dispel Outsider';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>Shimmering energy surrounds and protects you from fey, undead, and creatures originating from beyond the Material Plane. For the duration, celestials, elementals, fey, fiends, and undead have disadvantage on attack rolls against you.</p>
<p>You can end the spell early by using either of the following special functions.</p>
<dl>
    <dt>Break Enchantment</dt> <dd>As your action, you touch a creature you can reach that is charmed, frightened, or possessed by a celestial, an elemental, a fey, a fiend, or an undead. The creature you touch is no longer charmed, frightened, or possessed by such creatures.</dd>
    <dt>Dismissal</dt> <dd>As your action, make a melee spell attack against a celestial, an elemental, a fey, a fiend, or an undead you can reach. On a hit, you attempt to drive the creature back to its home plane. The creature must succeed on a Charisma saving throw or be sent back to its home plane (if it isn't there already). If they aren't on their home plane, undead are sent to the Shadowfell, and fey are sent to the Feywild.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Abjuration'], 5);

        $spell              = new Spell;
        $spell->name        = 'Dispel Silence';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '0';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell functions like Dispel Magic, except as noted here and that it only works against effects that create an area of silence.</p>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Disquietude';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 ft';
        $spell->targets        = 'On living creature within range';
        $spell->save_attribute = 'CHA';
        $spell->duration       = '1 minute';
        $spell->description    = '<p>Your song or poem instills a feeling of paranoia in your target. The affected target restricts their movement to avoid any physical contact even with allies. If they are attacked and cannot flee, they must use the Full Defense Action.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Unaffected</dd>
    <dt>Failure</dt> <dd>Affected</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Emotion', 'Compulsion'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Disrupt Ectoplasm';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One creature made of ectoplasm';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>This spell functions like Disrupt Undead except that it only targets ectoplasmic creatures. This spell effects creatures in the Ethereal Plane as if it had the Ghost Touch Feat.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target takes no damage</dd>
    <dt>Success</dt> <dd>The target takes half damage</dd>
    <dt>Failure</dt> <dd>The target takes no damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage and Enfeebled 1 for 1 round</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+3)</dt> <dd>1D10 + your spellcasting ability modifier</dd>
    <dt>Heightened (+5)</dt> <dd>2D10 + your spellcasting ability modifier</dd>
    <dt>Heightened (+7)</dt> <dd>3D10 + your spellcasting ability modifier</dd>
    <dt>Heightened (+9)</dt> <dd>4D10 + your spellcasting ability modifier</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Positive', 'Ectoplasm'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Disrupt Undead';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One undead creature';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You infuse the target with energy. You deal 1D10 positive damage; the target must attempt a Save. Heightening increases damage.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target takes no damage</dd>
    <dt>Success</dt> <dd>The target takes half damage</dd>
    <dt>Failure</dt> <dd>The target takes no damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage and Enfeebled 1 for 1 round</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+3)</dt> <dd>1D10 + your spellcasting ability modifier</dd>
    <dt>Heightened (+5)</dt> <dd>2D10 + your spellcasting ability modifier</dd>
    <dt>Heightened (+7)</dt> <dd>3D10 + your spellcasting ability modifier</dd>
    <dt>Heightened (+9)</dt> <dd>4D10 + your spellcasting ability modifier</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Positive'], 0);

        $spell              = new Spell;
        $spell->name        = 'Disrupting Weapon';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Up to two weapons, each of which must be unattended or wielded by you or a willing ally';
        $spell->duration    = '1 minute';
        $spell->description = "<p>Targets' attacks deal an extra 1D4 Positive damage to undead.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Target up to three weapons, 2D4 damage.</dd>
    <dt>Heightened (+4)</dt> <dd>Target up to four weapons, 3D4 damage.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Positive', 'Bless'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Disruption';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet / 30 foot sphere';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>This powerful spell can utterly destroy undead and other magically animated creatures, including the following</p>
<ul>
    <li>Animated Undead (such as Skeletons, Zombies, and Juju Zombies, but not Vampires, Mummies, or Ghouls) are destroyed</li>
    <li>Magically created or animated creatures (such as Effigies and Golems) become inert (these creatures can be reanimated by redoing the animation process at 1/4 the cost)</li>
    <li>Creatures that magically control others. Creatures controlled are instantly freed, no Save required.</li>
</ul>
<p>Creatures with fewer than 6HD are automatically disrupted. Creatures with 6HD or more must make a CHA Save to avoid disruption.</p>';
        $spell->saves = '<dl>
    <dt>Critical Failure</dt> <dd>Animated Undead are destroyed. Animated Constructs become inoperative, controlling creatures Stunned: 3 and all controlled creatures are freed and cannot be controlled again for 24 hours.</dd>
    <dt>Failure</dt> <dd>Animated Undead are destroyed if less than 6HD otherwise Stunned: 3. Animated Constructs of less than 6HD become inoperative otherwise Stunned: 3. Controlling creatures lose all controlled creatures and are Stunned: 3.</dd>
    <dt>Success</dt> <dd>Stunned: 3</dd>
    <dt>Critical Success</dt> <dd>No effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 9);

        $spell              = new Spell;
        $spell->name        = 'Dissonant Chant';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->area        = '100 foot radius emanation';
        $spell->duration    = '1 minute';
        $spell->description = '<p>You create a distracting and discordant chant. Affected creatures that attempt spellcasting or other activities that require Concentration must make Concentration checks (DC 18) to succeed. Activities that already require Concentration checks have their DC increased by +5.</p>
<p>Creatures within the area gain a +4 bonus on Saves vs Lingual effects.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Sonic', 'Lingual'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Dissonant Chord';
        $spell->casting        = 'Verbal Casting';
        $spell->area           = '10 foot radius burst centered on you';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You emit a terrible piercing note. Creatures (other than you) in the area take 3D8 Sonic damage.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half Damage</dd>
    <dt>Failure</dt> <dd>Full Damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Sonic'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Dissonant Whispers';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'One creature in range';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You whisper a discordant melody that only one creature of your choice within range can hear, wracking it with terrible pain.</p>
<p>The target must make a WIS Save, dealing 3D6 Sonic damage and must immediately use its reaction, if available, to move as far as its speed allows away from you. The creature doesn't move into obviously dangerous ground, such as a fire or a pit.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage and must flee from the source</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Sonic', 'Lingual'], 1);

        $spell              = new Spell;
        $spell->name        = 'Distilled Joy';
        $spell->casting     = '8 hours (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->targets     = 'One living creature touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You draw forth the material essence of joy from a creature experiencing great bliss. This physical manifestation of joy, called ambrosia, can be used in the creation of good magic items, as a special spell component, or as a drug-like substance (with no addictive qualities).</p>
<p>The caster draws ambrosia from the target and contains it within a tiny receptacle, such as a vial. Ambrosia can only be drawn from a blissful creature; how the creature achieves this state of bliss can vary from one individual to the next. For example, distilled joy can be cast on a deliriously lovestruck character, a dryad dreaming near her tree, an artist crafting his life's masterpiece, or a character experiencing a moment of rapture or undiluted sexual pleasure.</p>
<dl>
    <dt>Material Components</dt> <dd>A vial or similar container in which to contain the ambrosia</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Exalted', 'Ritual'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Distort Speech';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 ft';
        $spell->targets        = 'One creature within range';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = "<p>You distort a creature's vocalization. The voice of the affected target becomes warped and incomprehensible. Any spell with a Verbal Casting component automatically fails.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Sonic'], 1);

        $spell              = new Spell;
        $spell->name        = 'Distort Summons';
        $spell->casting     = '1 minute (Somatic, Verbal)';
        $spell->range       = '120 feet';
        $spell->area        = '50 foot radius emanation';
        $spell->duration    = '8 hours';
        $spell->description = '<p>You create an area where only evil creatures can be summoned. Any spell with the Summoning type actually summons a Fiend from the lower planes. The summoned creature is always hostile to the summoner and attacks them first.</p>
<p>This spell can be Dispelled.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Area</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Summoning', 'Evil'], 3);

        $spell              = new Spell;
        $spell->name        = 'Divination';
        $spell->casting     = '1 minute (Somatic, Verbal, Material)';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You make an offering to your deity or a servant of your deity. You ask a single question concerning a specific goal, event, or activity to occur withing 7 days. The GM offers a truthful reply. The reply might be a short phrase, a cryptic rhyme, or an omen.</p>
<p>The spell doesn't take into account any possible circumstances that might change the outcome, such as the casting of additional spells or the loss or gain of a companion.</p>
<p>If you cast the spell two or more times before finishing your next long rest, there is a cumulative 25 percent chance for each casting after the first that you get a random reading. The GM makes this roll in secret.</p>";
        $helper->addTypesToSpell($spell, ['Divination', 'Ritual'], 4);

        $spell              = new Spell;
        $spell->name        = 'Divine Agility';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Living creature touched';
        $spell->duration    = '30 minutes';
        $spell->description = '<p>You call divine power which grants the following</p>
<ul>
    <li>You gain a +4 Divine bonus to DEX</li>
    <li>You gain an additional Action. This additional Action can only be used to take a Stride Action</li>
    <li>You gain a +4 bonus to AC against Attacks of Opportunity</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 4);

        $spell              = new Spell;
        $spell->name        = 'Divine Aura';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '10-foot aura';
        $spell->targets     = 'Allies in the aura';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>Divine power wards the targets, granting a +1 conditional bonus to AC and saves while in the area.</p>
<p>Choose chaotic, evil, good, or lawful. If you choose chaos, this spell gains the lawful trait and so on. The bonuses increase to +2 against attacks by creatures of the chosen alignment and effects created by such creatures. The bonuses increase to +4 against effects from such creatures that directly control the target and attacks made by summoned creatures of the chosen alignment.</p>
<p>When a creature of the chosen alignment hits a target with a melee attack, it must succeed at a WIS Save or be blinded for 1 minute. It's bolstered against all divine auras for the duration.</p>
<p>The first time you Concentrate on the Spell each round, the radius grows 10 feet.</p>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Bless', 'Enchantment'], 8);

        $spell                 = new Spell;
        $spell->name           = 'Divine Decree';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '40-foot aura';
        $spell->duration       = 'Varies';
        $spell->save_attribute = 'CHA';
        $spell->description    = "<p>You utter potent words linked to your faith. Choose an alignment your deity has (Chaotic, Evil, Good, Law). You can't cast this spell if you don't have a deity or your deity is true Neutral. You deal 7D6 damage to the creaturs in the area; each creature must attempt a WIS Save. Creatures that match the alignment are unaffected. Those that neither match nor oppose it don't suffer effects other than damage and treat their result as one degree better.</p>";
        $spell->saves          = "<dl>
    <dt>Critical Success</dt> <dd>The creature is unaffected</dd>
    <dt>Success</dt> <dd>The creature takes half damage</dd>
    <dt>Failure</dt> <dd>The creature takes full damage and is Enfeebled: 2 for 1 minute</dd>
    <dt>Critical Failure</dt> <dd>The creature takes double damage and is Enfeebled: 2 for 1 minute. A 10th-level creature or lower must attempt a second Save, on a failure, it's Paralyzed for 1 minute; Ona Critical Faulure, it dies. If you're on your home plane, a creature that critically fails is banished with the effect of a failed Banishment Save.</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6 and the level of creatures that must attempt a second Save on a critical failure by 2</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 7);

        $spell               = new Spell;
        $spell->name         = 'Divine Dragon-Ruin';
        $spell->casting      = 'Verbal Casting';
        $spell->requirements = 'Caster must be of draconic ancestry';
        $spell->range        = '60 feet emanation centered on you';
        $spell->targets      = 'Self';
        $spell->duration     = 'Concentration, up to 10 minutes';
        $spell->description  = "<p>For the duration, you sense the presence of dragons and draconic magic within 60 feet of you. The existence of amgic which pertains to dragons or draconic creatures appears to you like a faint aura around the object or creature. This applies to magic items made with draconic parts, magic items meant to interact with dragons, spells cast by dragons, or even polymorphed dragons attempting to hide form your presence.</p>
<p>The auras for objects meant to harm dragons are noticeably different. For example: you can easily tell apart an Arrow of Dragonslaying form other kinds of draconic arrows. You can't however know what exactly the harmful object does, only that it is dangerous to you. Further, you don't obtain mny extra information about the creatures or objects you notice through this spell, only their relation to dragons.</p>
<p>This spell can penetrate most barriers, but it is blocked by 1 foot of stone, 1 inch of common metal, a thin sheet of lead, or 3 feet of wood or dirt.</p>";
        $helper->addTypesToSpell($spell, ['Divination'], 2);

        $spell              = new Spell;
        $spell->name        = 'Divine Favor';
        $spell->casting     = 'Free';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>Your prayer empowers you with divine radiance. Until the spell ends, your weapon attacks deal an extra 1D6 positive or negative damage on hit.</p>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative', 'Positive'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Divine Flame';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->area           = '15 foot radius emanation, centered on you';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'Self';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>This spell creates a ward against creatures with the Cold type. Creatures with the Cold type that start their turn within the area takes 4D4 Fire damage.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +2D4</dd>
    <dt>Heightened (+1)</dt> <dd>Double the radius</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Abjuration', 'Fire'], 2);

        $spell              = new Spell;
        $spell->name        = 'Divine Insight';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '8 hours';
        $spell->description = '<p>You invoke the power of your deity to grant you a boon. As an Action or Reaction, you can grant yourself a +5 Divine bonus to your next roll. This can be an Attack roll, Save, Skill check, or Ability check. Once the bonus is used, the spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 2);

        $spell              = new Spell;
        $spell->name        = 'Divine Inspiration';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One willing creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You infuse a target with spiritual energy, refreshing its magic. It recovers one 3rd level Divine Spell Slot or lower. A target can benefit from this spell only once per Long Rest.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 1);

        $spell              = new Spell;
        $spell->name        = 'Divine Power';
        $spell->casting     = 'Somatic Casting, Material Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 rounds';
        $spell->description = '<p>Calling upon the divine power of your patron, you imbue yourself with strength and skill in combat.</p>
<ul>
    <li>You gain a +3 Luck bonus on Attack Rolls, Weapon Damage, STR Saves and checks.</li>
    <li>You gain +1 Temporary Hit Point per Character Level.</li>
    <li>You gain the Quickened condition (which can be used on Strike and Stride Actions</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell              = new Spell;
        $spell->name        = 'Divine Presence';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '30 minutes';
        $spell->description = "<p>You channel a tiny spark of the divine, granting yourself nearly inhuman presence. You gain the following</p>
<ul>
    <li>You gain a +5 bonus (Sacred or Profane, based on your deity) to all Intimidation checks against creatures who do not worship your deity.</li>
    <li>The bonus becomes +10 if the target has one alignment component opposed by your deity's alignment</li>
    <li>The bonus becomes +15 if the target has an alignment that is diametrically opposed to your deity's alignment</li>
</ul>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 2);

        $spell               = new Spell;
        $spell->name         = 'Divine Purpose';
        $spell->casting      = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range        = 'Touch';
        $spell->targets      = 'Object touched';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 2 additional Priests of Gond</dd>
</dl>';
        $spell->duration     = 'Instantaneous';
        $spell->description  = '<p>You call upon your divine patron to determine the functioning or importance of any solid object you can physically touch. It is possible that you are granted a vision that gives you more specific information, such as how it was used or perhaps, how used it last. The object touched need not be magical for this spell to work.</p>
<dl>
    <dt>Material Components</dt> <dd>The holy symbol of Gond</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+4)</dt> <dd>You gain full knowledge of the objects purpose and/or function, even if you only have a piece of it.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 3);
        $spell->skills()->save(app()->skills['Religion'], ['dc' => 10]);

        $spell              = new Spell;
        $spell->name        = 'Divine Smite';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = "<p>The next time you hit with a melee weapon attack during this spell's duration, your weapon deals an additional 2D8 Positive/Negative damage.</p>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative', 'Positive', 'Smite'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Divine Weapon';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'CON';
        $spell->targets        = 'A melee weapon you are wielding';
        $spell->duration       = 'Concentration, up to 1 hour';
        $spell->description    = '<p>You imbue a weapon you touch with holy/unholy power. Until the spell ends, the weapon emits bright light in a 30-foot radius and dim light for an additional 30 feet. In addition, weapon attacks made with it deal an extra 2D8 Negative/Positive damage on a hit. If the weapon isn\'t already a magic weapon, it becomes one for the duration.</p>
<p>As an Action on your turn, you can dismiss this spell and cause the weapon to emit a burst of Positive/Negative energy. Each creature of your choice that you can see within 30 feet of you must make a CON Save, dealing 4D8 Positive/Negative damage, and is Blinded for 1 minute. At the end of each of its turns, a Blinded creature can make a CON Save, ending the Blinded effect.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>Half damage and not blinded</dd>
    <dt>Failue</dt> <dd>Full damage and blinded for 1 minute</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative', 'Positive', 'Bless'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Divine Word';
        $spell->casting        = 'Verbal Casting';
        $spell->range          = '30 feet';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You utter a divine word, imbued with the power that shaped the world at the dawn of creation. Choose any number of creatures you can see within range. Each creature that can hear you must make a CHA Save. On a failed Save, a creature suffers an effect based on its current hit points:</p>
<dl>
    <dt>50 hit points or fewer</dt> <dd>Deafened condition for 1 minute</dd>
    <dt>40 hit points or fewer</dt> <dd>Blinded and Deafened condition for 10 minutes</dd>
    <dt>30 hit points or fewer</dt> <dd>Blinded, Deafened, and Stunned conditions for 1 hour</dd>
    <dt>20 hit points or fewer</dt> <dd>Dying 4 condition</dd>
</dl>
<p>Regardles of its current hit points, an Outsider that fails its Save is forced back to its plane of origin (if it isn't already) and can't return to your current plane for 24 hours by any means short of a Wish spell.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 7);

        $spell                 = new Spell;
        $spell->name           = 'Divine Wrath';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '20-foot burst. 120 foot range';
        $spell->save_attribute = 'CHA';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>Choose an alignment your deity has (Chaotic, Evil, Good, or Law). You can't cast this spell if you don't have a deity or your deity is true Neutral.</p>
<p>You deal 4D8 damage of that alignment. Creatures that match the alignment are unaffected. Those that neither match nor oppose it treat their result as one degree better.</p>";
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>The creature takes no damage</dd>
    <dt>Success</dt> <dd>The creature takes half damage</dd>
    <dt>Failure</dt> <dd>The creature takes full damage and is Sick: 1</dd>
    <dt>Critical Failure</dt> <dd>Full damage, Sick: 2, and Slowed: 1 while Sick</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by 1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Dominate';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'One humanoid creature';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = "<p>You take command of the target, forcing it to obey your orders. If you issue an obviously self-destructive order, the target doesn't act until you issue a new order. The effect depends on its WIS Save.</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target is unaffected</dd>
    <dt>Success</dt> <dd>Slowed 1 for 1 round as it fights off your commands</dd>
    <dt>Failure</dt> <dd>The target follows your orders but attempts a WIS Save at the end of each of its turns. On success, the spell is dismissed</dd>
    <dt>Critical Failure</dt> <dd>As failure, but the target receives a new save only whenever you give it a new order, and even then only if the new order is against its nature, such as killing its allies</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The Duration becomes 1 hour</dd>
    <dt>Heightened (+2)</dt> <dd>The Duration becomes 8 hour</dd>
    <dt>Heightened (+3)</dt> <dd>The Duration becomes 24 hour</dd>
    <dt>Heightened (+4)</dt> <dd>the Duration becomes Permanent</dd>
    <dt>Heightened (+3)</dt> <dd>You can target a non-humanoid creature</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Compulsion', 'Illusion'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Dominate Animal';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'One beast';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = "<p>You attempt to beguile a beast that you can see within range. It must succeed on a Wisdom saving throw or be charmed by you for the duration. If you or creatures that are friendly to you are fighting it, it has advantage on the saving throw. While the beast is charmed, you have a telepathic link with it as long as the two of you are on the same plane of existence. You can use this telepathic link to issue commands to the creature while you are conscious (no action required), which it does its best to obey. You can specify a simple and general course of action, such as “Attack that creature,” “Run over there,” or “Fetch that object.” If the creature completes the order and doesn't receive further direction from you, it defends and preserves itself to the best of its ability. You can use your action to take total and precise control of the target. Until the end of your next turn, the creature takes only the actions you choose, and doesn't do anything that you don't allow it to do. During this time, you can also cause the creature to use a reaction, but this requires you to use your own reaction as well. Each time the target takes damage, it makes a new Wisdom saving throw against the spell. If the saving throw succeeds, the spell ends.</p>";
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>The duration becomes 1 hour</dd>
    <dt>Heightened (+2)</dt> <dd>The duration becomes 8 hour</dd>
    <dt>Heightened (+3)</dt> <dd>The duration becomes 24 hour</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Compulsion', 'Illusion'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Doom';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->range          = '120 feet';
        $spell->targets        = 'One living creature within range';
        $spell->duration       = '10 minutes';
        $spell->description    = '<p>This spell fills the target with a feeling of dread. It must make a CHA Save or be Shaken for the duration.</p>
<p>This spell is countered by any spell with the Bless type</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Not affected</dd>
    <dt>Failure</dt> <dd>Shaken</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Fear', 'Emotion'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Doom Scarabs';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->area           = '60 ft cone shaped burst';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>A swarm of scarabs surges from your outstretched hand. These insects rip and bite at all living creatures within the area, then, at the beginning of your next turn, the scarabs return to you and feed you the life essence they have stolen. The scarabs deal 7D6 Negative damage to all within the area. At the beginning of your next turn, the scarabs return to you and grant you Temporary Hit Points equal to the amount of damage they dealt. To gain these temporary Hit Points, you must use an Action. The Temporary Hit Points lasts for 1 hour.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Evil'], 4);

        $spell              = new Spell;
        $spell->name        = 'Draconic Might';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 5 minutes';
        $spell->description = '<p>You become more dragon like. You gain the following</p>
<ul>
    <li>+5 Enhancement bonus to STR, CON, and CHA</li>
    <li>You gain Natural Armor 2</li>
    <li>You gain Damage Reduction 2/-</li>
    <li>You are immune to Sleep, and Paralysed Conditions</li>
</ul>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 5);

        $spell               = new Spell;
        $spell->name         = 'Dragon Ally';
        $spell->casting      = '10 minutes (Somatic, Verbal, Secondary Caster)';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 2 other spell casters who must also cast this spell</dd>
</dl>';
        $spell->area         = '25 mile radius';
        $spell->duration     = 'Instantaneous';
        $spell->description  = "<p>You beseech a near-by dragon to come to your aid. You must know its name or possess something that once belonged to it. If the named dragon is within range of the spell and it is 9 HD or less, it is compelled to come to you as fast as it can.</p>
<p>When the dragon appears, it is under no compulsion to behave in any particular way. You can ask the dragon to perform a service in exchange for payment, but it is not obliged to do so. Even if the called creature agrees to the service, there is still nothing binding it to complete the tasks other that its honor.</p>
<p>You must be able to communicate with the creature to bargain for its service.</p>
<p>Payment can take a variety of forms. A dragon might require a sizable donation of gold or magic items. Some creatures might exchange their service for a quest undertaken by you.</p>
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
        $spell->heightened   = '<dl>
    <dt>Heightened (+2)</dt> <dd>Double the max HD and multiply the payment by 10</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Calling', 'Ritual'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Dragon Breath';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'DEX';
        $spell->range          = '15-foot cone';
        $spell->targets        = 'Self';
        $spell->duration       = 'Concentration, up to 1 minute';
        $spell->description    = '<p>You touch one willing creature and imbue it with the power to spew magical energy from its mouth as an Action, provided it has one. Choose a dragon type and follow the area type and Save type according to the table. The damage is 3D6.</p>
<table>
    <thead>
        <tr>
            <th>Dragon Type</th>
            <th>Area and Damage Type</th>
            <th>Save</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Black or Copper</td>
            <td>60-foot line of Acid</td>
            <td>DEX</td>
        </tr>
        <tr>
            <td>Blue or Bronze</td>
            <td>60-foot line of Electricity</td>
            <td>DEX</td>
        </tr>
        <tr>
            <td>Brass</td>
            <td>60-foot line of Fire</td>
            <td>DEX</td>
        </tr>
        <tr>
            <td>Green</td>
            <td>30-foot cone of Poison</td>
            <td>CON</td>
        </tr>
        <tr>
            <td>Gold or Red</td>
            <td>30-foot cone of Fire</td>
            <td>DEX</td>
        </tr>
        <tr>
            <td>Silver or White</td>
            <td>30-foot line of Cold</td>
            <td>DEX</td>
        </tr>
    </tbody>
</table>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>No damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Dragon'], 3);

        $spell              = new Spell;
        $spell->name        = 'Dragon Claws';
        $spell->casting     = 'Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = "<p>Vicious claws grow from your fingers. They are agile, finesse unarmed attacks, and you're trained in them. They deal 1D4 Slashing Damage and 1D4 of a type determined by your dragon type chosen by your Dragon Bloodline.</p>
<p>Scales also cover part of your body, giving you resistance 5 to the same damage type.</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The claws count as +1 Magic, granting a +1 item bonus to attack and damage die. You gain Resistance 7.</dd>
    <dt>Heightened (+4)</dt> <dd>The claws count as +2. You gain Resistance 10.</dd>
    <dt>Heightened (+6)</dt> <dd>The claws count as +3. You gain Resistance 12.</dd>
    <dt>Heightened (+8)</dt> <dd>The claws count as +4. You gain Resistance 15.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Dragon'], 1);

        $spell              = new Spell;
        $spell->name        = 'Dragon Form';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute or until dismissed';
        $spell->description = "<p>You transform into a Large dragon battle form. You must have space to expand or the spell is lost. You count as a dragon in addition to your normal traits. Your gear is absorbed into you; the constant abilities of your gear still function, but you can't activate it. When you transform, you gain the following:</p>
<ul>
    <li>Blindsense 60 feet and darkvision</li>
    <li>Athletics bonus +20 unless your own bonus is higher</li>
    <li>AC 27 (TAC 24), ignore armor's check penalty and reduced Speed</li>
    <li>10 temporary Hit Point while you have the form</li>
    <li>Speed 40 feet and fly Speed 100 feet</li>
    <li>One or more natural melee attacks, which are the only types of attacks you can use. You're trained with them. Your attack modifier is +2- and your damage bonus is +6. These are STR based (for the purpose of enfeebled, for example)</li>
    <li>A can activate a breath weapon by spending 2 actions. A creature that succeeds at a DC 24 saving throw takes half damage, or no damage on a critical success. The saving throw is a DEX Save unless state otherwise in the special ability description below. Once activated, your breath weapon can't be used again for 1D4 rounds. Your breath weapon is an arcane evocation with the appropriate damage trait. The shape, damage, and damage type depend on your specific dragon form.</li>
</ul>
<table>
    <thead>
        <tr>
            <th>Dragon Type</th>
            <th>Damage</th>
            <th>Move</th>
            <th>Breath Weapon</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Black</td>
            <td>
                <dl>
                    <dt>Jaws</dt> <dd>1D12 piercing plus 2D6 acid</dd>
                    <dt>Claw (agile)</dt> <dd>2D10 slashing</dd>
                    <dt>Tail (reach 10 feet)</dt> <dd>2D10 bludgeoning</dd>
                    <dt>Horns (reach 10 feet)</dt> <dd>2D8 piercing</dd>
                </dl>
            </td>
            <td>
                <ul>
                    <li><strong>Swim</strong> 60 feet</li>
                </ul>
            </td>
            <td>60-foot line 11D6 acid</td>
        </tr>
        <tr>
            <td>Blue</td>
            <td>
                <dl>
                    <dt>Jaws</dt> <dd>1D10 piercing plus 1D12 acid</dd>
                    <dt>Claw (agile)</dt> <dd>2D10 slashing</dd>
                    <dt>Tail (reach 10 feet)</dt> <dd>2D10 bludgeoning</dd>
                    <dt>Horns (reach 10 feet)</dt> <dd>2D8 piercing</dd>
                </dl>
            </td>
            <td>
                <ul>
                    <li><strong>Burrow</strong> 20 feet</li>
                </ul>
            </td>
            <td>80-foot line 6D12 electricity</td>
        </tr>
        <tr>
            <td>Green</td>
            <td>
                <dl>
                    <dt>Jaws</dt> <dd>1D12 piercing plus 2D6 poison</dd>
                    <dt>Claw (agile)</dt> <dd>2D10 slashing</dd>
                    <dt>Tail (reach 10 feet)</dt> <dd>2D10 bludgeoning</dd>
                    <dt>Horns (reach 10 feet)</dt> <dd>2D8 piercing</dd>
                </dl>
            </td>
            <td>
                <ul>
                    <li><strong>Swim</strong> 40 feet</li>
                    <li>Nonmagical foliage doesn't count as difficult terrain</li>
                </ul>
            </td>
            <td>30-foot cone 10D6 poison (CON Save instead of DEX)</td>
        </tr>
        <tr>
            <td>Red</td>
            <td>
                <dl>
                    <dt>Jaws</dt> <dd>1D12 piercing plus 2D6 fire</dd>
                    <dt>Claw (agile)</dt> <dd>3D6 slashing</dd>
                    <dt>Tail (reach 10 feet)</dt> <dd>2D10 bludgeoning</dd>
                    <dt>Wings (reach 10 feet)</dt> <dd>2D8 bludgeoning</dd>
                </dl>
            </td>
            <td>
                <ul>
                    <li>Ignore concealed from smoke</li>
                </ul>
            </td>
            <td>30-foot cone 10D6 fire</td>
        </tr>
        <tr>
            <td>White</td>
            <td>
                <dl>
                    <dt>Jaws</dt> <dd>2D6 piercing plus 2D6 cold</dd>
                    <dt>Claw (agile)</dt> <dd>2D10 slashing</dd>
                    <dt>Tail (reach 10 feet)</dt> <dd>2D10 bludgeoning</dd>
                </dl>
            </td>
            <td>
                <ul>
                    <li><strong>Climb</strong> 25 feet on ice</li>
                </ul>
            </td>
            <td>30-foot cone 10D6 cold</td>
        </tr>
        <tr>
            <td>Brass</td>
            <td>
                <dl>
                    <dt>Jaws</dt> <dd>2D8 piercing plus 2D4 fire</dd>
                    <dt>Claw (agile)</dt> <dd>2D10 slashing</dd>
                    <dt>Tail (reach 10 feet)</dt> <dd>2D10 bludgeoning</dd>
                    <dt>Spikes (reach 10 feet)</dt> <dd>2D8 piercing</dd>
                </dl>
            </td>
            <td>
                <ul>
                    <li><strong>Burrow</strong> 20 feet</li>
                </ul>
            </td>
            <td>60-foot line 15D4 fire</td>
        </tr>
        <tr>
            <td>Bronze</td>
            <td>
                <dl>
                    <dt>Jaws</dt> <dd>1D10 piercing plus 1D12 electricity</dd>
                    <dt>Claw (agile)</dt> <dd>2D10 slashing</dd>
                    <dt>Tail (reach 10 feet)</dt> <dd>2D10 bludgeoning</dd>
                    <dt>Wings (reach 10 feet)</dt> <dd>2D8 slashing</dd>
                </dl>
            </td>
            <td>
                <ul>
                    <li><strong>Swim</strong> 40 feet</li>
                </ul>
            </td>
            <td>80-foot line 6D12 electricity</td>
        </tr>
        <tr>
            <td>Copper</td>
            <td>
                <dl>
                    <dt>Jaws</dt> <dd>1D12 piercing plus 2D6 acid</dd>
                    <dt>Claw (agile)</dt> <dd>2D10 slashing</dd>
                    <dt>Tail (reach 10 feet)</dt> <dd>2D10 bludgeoning</dd>
                    <dt>Wing (reach 10 feet)</dt> <dd>2D8 bludgeoning</dd>
                </dl>
            </td>
            <td>
                <ul>
                    <li><strong>Climb</strong> 25 feet on stone</li>
                </ul>
            </td>
            <td>60-foot line 10D6 acid</td>
        </tr>
        <tr>
            <td>Gold</td>
            <td>
                <dl>
                    <dt>Jaws</dt> <dd>1D12 piercing plus 2D6 fire</dd>
                    <dt>Claw (agile)</dt> <dd>3D6 slashing</dd>
                    <dt>Tail (reach 10 feet)</dt> <dd>2D10 bludgeoning</dd>
                    <dt>Horns (reach 10 feet)</dt> <dd>2D8 piercing</dd>
                </dl>
            </td>
            <td>
                <ul>
                    <li><strong>Swim</strong> 40 feet</li>
                </ul>
            </td>
            <td>30-foot cone 6D10 fire</td>
        </tr>
        <tr>
            <td>Silver</td>
            <td>
                <dl>
                    <dt>Jaws</dt> <dd>1D12 piercing plus 2D6 cold</dd>
                    <dt>Claw (agile)</dt> <dd>2D10 slashing</dd>
                    <dt>Tail (reach 10 feet)</dt> <dd>2D10 bludgeoning</dd>
                </dl>
            </td>
            <td>
                <ul>
                    <li><strong>Walk</strong> on clouds</li>
                </ul>
            </td>
            <td>30-foot cone 8D8 cold</td>
        </tr>
    </tbody>
</table>";
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>
        <p>Your battle form is Huge, your fly Speed is accelerated 20, and your attacks have 10-foot reach (15 if they previously had 10).</p>
        <ul>
            <li>Athletics +26</li>
            <li>AC 34 (TAC 30)</li>
            <li>15 temporary Hit Points</li>
            <li>attack modifier +26</li>
            <li>damage bonus +12</li>
            <li>breath weapon DC 30</li>
            <li>+14 conditional bonus to breath weapon damage</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Polymorph', 'Transmutation'], 6);

        $spell              = new Spell;
        $spell->name        = 'Dragon Scales';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '4 hours';
        $spell->description = '<p>This spell creates a plating of dragon scales that grows from your skin to cover all of your body except your head. This gives you Natural Armor 15 or a +2 bonus to AC, whichever is better. You determine the tint of the dragon scales, but the chosen hue must correspond to that of a chromatic dragon species.</p>
<dl>
    <dt>Material Components</dt> <dd>A single dragon scale.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Dragon'], 3);

        $spell              = new Spell;
        $spell->name        = 'Dragon Wings';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = '<p>Leathery wings sprout from your back, giving you a fly Speed of 60 feet. When the duration would end, if you have Spell Points, you can spend 1 Spell Point to increase the duration by 1 minute. When if ends, you float to the ground with the effect of Feather Fall.</p>
<p>If you have Spell Points, you can increase the cost by 1 Spell Point to gain the effect of Dragon Claws as long as the wings last.</p>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>The duration increases to 10 minutes. Spell Points increase the duration by 5 minutes</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Dragon'], 5);

        $spell                = new Spell;
        $spell->name          = "Dragon's Head";
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range         = 'Touch';
        $spell->targets       = 'Chromatic Dragon touched';
        $spell->spell_creator = 'Tiamat';
        $spell->duration      = '1 hour';
        $spell->description   = "<p>This spell causes a chromatic dragon to temporarily grow an additional head and neck.</p>
<p>Upon casting this spell, the targeted chromatic dragon grows an additional head and neck identical in appearance to the original. The dragon also gains an additional Action, this Action can only be used by the additional Head to deliver a Bite attack or for a breath weapon attack. This extra had head has no intelligence and can't be used to cast spells, but is completely under control of the dragon host. The head has 50 Hit Points.</p>
<dl>
    <dt>Material Components</dt> <dd>A pair of Hydra scales</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>The additional head becomes a Lernaean head. If the head is killed, 2 more heads grow in its place. This does not apply to the original head.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Drain Construct';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '30 feet';
        $spell->targets        = 'One construct within range';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 10 rounds';
        $spell->description    = '<p>You weaken a target Construct, temporarily sapping its animating force.</p>
<ul>
    <li>Loses all Damage Reduction</li>
    <li>Loses all Fast Healing</li>
    <li>Speed is halved</li>
    <li>-6 Penalty to STR</li>
</ul>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full Effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Construct'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Drain Constitution';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Creature touched';
        $spell->save_attribute = 'CON';
        $spell->duration       = '3 rounds';
        $spell->description    = '<p>After casting this spell, you gain the ability to cause CON damage with a Melee Touch Attack for the duration. You may only make this attack once per round. The CON damage is treated as normal Ability score damage and may be recovered in the normal way.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>1 point of CON damage</dd>
    <dt>Failure</dt> <dd>1D6 CON damage</dd>
    <dt>Critical Failure</dt> <dd>2D6 CON damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ability Damage'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Drain Strength';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Creature touched';
        $spell->save_attribute = 'CON';
        $spell->duration       = '3 rounds';
        $spell->description    = '<p>After casting this spell, you gain the ability to make a cause STR damage with a Melee Touch Attack for the duration. You may only make this attack once per round. The STR damage is treated as normal Ability score damage and may be recovered in the normal way.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>No effect</dd>
    <dt>Success</dt> <dd>1 point of STR damage</dd>
    <dt>Failure</dt> <dd>1D6 STR damage</dd>
    <dt>Critical Failure</dt> <dd>2D6 STR damage</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ability Damage'], 4);

        $spell              = new Spell;
        $spell->name        = 'Drain Life';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One living creature within range';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>You attempt to drain the life out of a creature you can see within range. The target must make a CON Save at the start of each of its turns, taking 1D6 CON Damage on a Failed Save, or half as much on a successful one. This spell has no effect on Undead and Constructs.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D6</dd>
    <dt>Heightened (+2)</dt> <dd>If this spell is cast in an area that is Desecrated or Unhallowed and under a Full Moon, then you become 1 week younger for each point of CON Damage that is caused. This effect is Permanent.</dd>
</dl>';
        $spell->saves = '<dl>
    <dt>Critical Success</dt> <dd>The spell ends</dd>
    <dt>Success</dt> <dd>The target takes half damage. If this is the 3rd successful Save, the spell ends.</dd>
    <dt>Failure</dt> <dd>The target takes full damage</dd>
    <dt>Critical Failure</dt> <dd>As Failure, plus the target gains a level of Exhaustion</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Evil', 'Negative'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Dread Blast';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '120 feet';
        $spell->targets        = 'One creature in range';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You fire a black ray of Negative energy at a single target as a Ranged Spell Attack. Any creature struck by this ray takes 4D8 Points of Negative damage. The target must make a WIS Save, on a failure, you become Sluggish: 2 until the beginning of your next turn.</p>
<p>This spell has no effect on Constructs or Inanimate objects.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>You are not Sluggish</dd>
    <dt>Failure</dt> <dd>You are Sluggish:2 for one round</dd>
    <dt>Critical Failure</dt> <dd>You are Sluggish: 3 for 3 rounds</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative', 'Ray'], 4);

        $spell                 = new Spell;
        $spell->name           = 'Dread Word';
        $spell->casting        = 'Verbal Casting';
        $spell->save_attribute = 'CHA';
        $spell->range          = '60 feet';
        $spell->area           = 'Cone emanation';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You speak a single word of pure malevolence (a powerful utterance from the Dark Speech).</p>
<p>The word is so foul that it harms all who hear it unless they are an Outsider from the Lower Planes. Outsiders from the Upper planes take double damage. All creatures in the area take 2D4 CHA Damage, CHA Save for half.</p>
<p>This spell protects you from the affects. Anyone who speaks the word without casting this spell dies (No Save). The word cannot be spoken by non-living creatures and cannot be recorded.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell                = new Spell;
        $spell->name          = 'Dream';
        $spell->casting       = '1 minute (Material, Somatic, Verbal)';
        $spell->range         = 'Special';
        $spell->spell_creator = 'Efteran';
        $spell->duration      = '8 hours';
        $spell->description   = "<p>This spell shapes a creature's dreams. Choose a creature known to you as the target of this spell. The target must be on the same plane of existence as you. Creatures that don't sleep, such as elves, can't be contacted by this spell. You, or a willing creature you touch, enters a trance state, acting as a messenger. While in the trance, the messenger is aware of his or her surroundings, but can't take actions or move.</p>
<p>If the target is asleep, the messenger appears in the target's dreams and can converse with the target as long as it remains asleep, through the duration of the spell. The messenger can also shape the environment of the dream, creating landscapes, objects, and other images. The messenger can emerge from the trance at any time, ending the effect of the spell early. The target recalls the dream perfectly upon waking. If the target is awake when you cast the spell, the messenger knows it, and can either end the trance (and the spell) or wait for the target to fall asleep, at which point the messenger appears in the target's dreams.</p>
<p>You can make the messenger appear monstrous and terrifying to the target. If you do, the messenger can deliver a message of no more than ten words and then the target must make a WIS Save. On a failed save, echoes of the phantasmal monstrosity spawn a nightmare that lasts the duration of the target's sleep and prevents the target from gaining any benefit from that rest. In addition, when the target wakes up, it takes 3d6 psychic damage.</p>
<p>If you have a body part, lock of hair, clipping from a nail, or similar portion of the target's body, the target makes its saving throw with disadvantage.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Mental', 'Phantasm', 'Ritual'], 5);

        $spell                 = new Spell;
        $spell->name           = 'Dream Casting';
        $spell->casting        = '1 hour (Material, Somatic, Verbal)';
        $spell->range          = 'Special';
        $spell->rarity         = 'Rare';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '8 hours';
        $spell->description    = "<p>As the Dream spell, except as noted here and you can alter the sleeping person's dreams to produce a special desired effect. The dreamer makes a WIS Save to resist the additional effects. If the Save fails, you decide what additional effect the message carries.</p>
<dl>
    <dt>Fear</dt> <dd>Your image in the dream is surrounded by intimidating imagery and an aura of power. For the next 7 days, any time the dreamer can see you or knows you are present, they are Shaken. This is a Compulsion and Fear effect.</dd>
    <dt>Charm</dt> <dd>Your image in the dream appears particularly helpful and kind. For the next 7 days, the dreamer is under the effects of a Charm spell. This is a Charm effect.</dd>
    <dt>Rage</dt> <dd>Your image in the dream taunts and harass the dreamer. For the next 7 days, any time the dreamer can see you or knows you are present, they preferentially attack you in combat. The dreamer gains a +2 Morale Bonus on Saves, Attack rolls, Ability checks, Skill checks and weapon damage rolls while under this effect. This is a Compulsion effect.</dd>
    <dt>Harrow</dt> <dd>Your image in the dream behaves in a bizarre and irrational manner. For the next 7 days, the dreamer behaves in an unusual manner, gaining 2 random traits. If the dreamer can see you or knows you are present, the cat Bewildered.</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Functions as the Dream spell only</dd>
    <dt>Failure</dt> <dd>The dreamer suffers from one of the additional effects</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Mental', 'Phantasm', 'Ritual'], 6);

        $spell              = new Spell;
        $spell->name        = 'Dream Council';
        $spell->casting     = '10 minutes (Somatic, Verbal)';
        $spell->range       = 'Planetary';
        $spell->targets     = 'up to 12 creatures you know by name and have meet in person';
        $spell->duration    = '3 hours';
        $spell->description = "<p>When you cast this spell, any targets - including you - can choose to immediately fall asleep. The spell ends for any creatures that don't choose to fall asleep. Sleepers join a shared dream, where they can communicate with one another as though they were in the same room. Individual targets leave this shared dream upon awakening, and if all the targets awaken, the spell ends.</p>";
        $helper->addTypesToSpell($spell, ['Illusion', 'Mental', 'Ritual'], 8);

        $spell              = new Spell;
        $spell->name        = 'Dream of the Blue Veil';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = '20 feet';
        $spell->targets     = 'You and up to 8 willing creatures within range';
        $spell->duration    = '6 hours';
        $spell->description = "<p>You and up to eight willing creatures within range fall unconscious for the spells' duration and experience visions of another world on the Material Plane, such as Oerth, Toril, Krynn, or Eberron. If the spell reaches its full duration, the visions conclude with each of you encountering and pulling back a mysterious blue curtain. The spell then ends with you mentally and physically transported to the world that was in the visions.</p>
<p>To cast this spell, you must have a magic item that originated on the world you wish to reach, and you must be aware of the world's existence, even if you don't know the world's name. Your destination in the other world is a safe location within 1 mile of where the magic item was created. Alternatively, you can cast the spell if one of the affected creatures was born on the other world, which causes your destination to be a safe location within 1 mile of where that creature was born.</p>
<p>The spell ends early on a creature if that creature takes any damage, and the creature isn't transported. If you take any damage, the spell ends for you and all other creatures, with none of you being transported.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Enchantment', 'Ritual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Dream Sight';
        $spell->casting     = '1 minute (Somatic Casting, Falling asleep)';
        $spell->targets     = 'Self';
        $spell->duration    = 'Concentration, up to 8 hours';
        $spell->description = '<p>You fall into a deep sleep while your spirit leaves your body in incorporeal form and enters the Ethereal Plane. Your spirit has a Fly Speed of 100. You can still see and hear the Material Plane, but your spirit does not have any of your equipment, and you cannot cast spells. When the spell ends, your spirit is instantly transported back to you body. If you are killed while in spirit form, you are dead and your body slowly rots as normal. If your physical body is disturbed while, the spell immediately ends.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration'], 6);

        $spell                 = new Spell;
        $spell->name           = 'Dream Puppet';
        $spell->casting        = '1 minute (Somatic Casting, Falling asleep)';
        $spell->save_attribute = 'WIS';
        $spell->range          = 'Unlimited';
        $spell->targets        = 'One sentient, living creature';
        $spell->duration       = 'Concentration, up to 3 hours';
        $spell->description    = "<p>You take control of the physical body of a sleeping creature. At the beginning of the spell, you must name the target or identify them by some title that leaves no doubt as to their identity. You then enter a trance and appear in the target's dream. So long as you remain in their dream, you see the world through the eyes of the target and you control their body as the Dominate spell.</p>
<p>The target is aware of you in their dream, and can identify you if they know you personally. Once the spell ends, or if the target shakes off the effects due to a new Save granted by instructions contrary to their moral code (as the Dominate spell). These memories are dreamlike and not entirely clear, but the target recalls the gist of all that happened.</p>
<p>If the target is awake when the spell begins, you can choose to wake up (ending the spell) or remain asleep in hopes that the target goes to sleep soon (the duration of the spell counts this waiting time). If you are disturbed and awakened, the spell ends.</p>
<p>You are unaware of your own surroundings or the activities around you while you sleep (you are defenseless and Fail all Saves while asleep).</p>";
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>You are barred from ever casting this spell on the target. Your soul is lost in the Ethereal. You must cast another spell to return to your physical body, or someone must travel to the Ethereal Plane and rescue you. Your physical body continues to require food and water (a slightly less amount), and will eventually die (usually in 10 days).</dd>
    <dt>Success</dt> <dd>The spell fails, and you cannot cast it on the same target for 3 days</dd>
    <dt>Failure</dt> <dd>The spell succeeds as normal</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion', 'Mental', 'Ritual'], 6);

        $spell              = new Spell;
        $spell->name        = 'Drug Resistance';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One living creature touched';
        $spell->duration    = '3 hours';
        $spell->description = '<p>The creature touched is immune drug addiction. Drugs still have their normal effects. If the spell ends while the target is still under the influence of the drug, they suffer the normal chances of becoming addicted, but they receive a +2 bonus to the Save if any.</p>
<dl>
    <dt>Material Components</dt> <dd>Three drops of pure water</dd>
</dl>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the duration</dd>
    <dt>Heightened (+1)</dt> <dd>Double the number of targets</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Enchantment', 'Bless'], 1);

        $spell              = new Spell;
        $spell->name        = 'Druid Grove';
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = 'Touch';
        $spell->duration    = '24 hours';
        $spell->description = "<p>You invoke the spirits of nature to protect an area outdoors or underground. The area can be as small as a 30—foot cube or as large as a 90-foot cube. Buildings and other structures are excluded from the affected area. If you cast this spell in the same area every day for a year, the spell lasts until dispelled. The spell creates the following effects within the area. When you cast this spell, you can specify creatures as friends who are immune to the effects. You can also specify a password that, when spoken aloud, makes the speaker immune to these effects. The entire warded area radiates magic. A dispel magic cast on the area, if successful, removes only one of the following effects, not the entire area. That spell's caster chooses which effect to end. Only when all its effects are gone is this spell dispelled.</p>
<dl>
    <dt>Solid Fog</dt> <dd>You can fill any number of 5-foot squares on the ground with thick fog, making them heavily obscured. The fog reaches 10 feet high. In addition, every foot of movement through the fog costs 2 extra feet. To a creature immune to this effect, the fog obscures nothing and looks like soft mist, with motes of green light floating in the air.</dd>
    <dt>Grasping Undergrowth</dt> <dd>You can fill any number of 5-foot squares on the ground that aren't filled with fog with grasping weeds and vines, as if they were affected by an entangle spell. To a creature immune to this effect, the weeds and vines feel soft and reshape themselves to serve as temporary seats or beds.</dd>
    <dt>Grove Guardians</dt> <dd>You can animate up to four trees in the area, causing them to uproot themselves from the ground. These trees have the same statistics as an awakened tree, which appears in the Monster Manual, except they can't speak, and their bark is covered with druidic symbols. If any creature not immune to this effect enters the warded area, the grove guardians fight until they have driven off or slain the intruders. The grove guardians also obey your spoken commands (no action required by you) that you issue while in the area. Ifyou don't give them commands and no intruders are present, the grove guardians do nothing. The grove guardians can‘t leave the warded area. When the spell ends, the magic animating them disappears, and the trees take root again if possible.</dd>
    <dt>Additional Spell Effect</dt> <dd>
        <p>You can place your choice of one of the following magical effects within the warded area</p>
        <ul>
            <li>A constant gust of Wind in two locations of your choice</li>
            <li>Spike growth in one location of your choice</li>
            <li>Wind wall in two locations of your choice</li>
        </ul>
    </dd>
</dl>
<p>To a creature immune to this effect, the winds are a fragrant, gentle breeze, and the area of spike growth is harmless.</p>";
        $helper->addTypesToSpell($spell, ['Abjuration', 'Enchantment', 'Ritual'], 6);

        $spell              = new Spell;
        $spell->name        = 'Druidcraft';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Whispering to the spirits of nature, you create one of the following effects within range:</p>
<ul>
    <li>You create a tiny, harmless sensory effect that predicts what the weather will be at your location for the next 24 hours. The effect might manifest as a golden orb for clear skies, a cloud for rain, falling snowflakes for snow, and so on. This effect persists for 1 round.</li>
    <li>You instantly make a flower blossom, a seed pod open, or a leaf bud bloom.</li>
    <li>You create an instantaneous, harmless sensory effect, such as falling leaves, a puff of wind, the sound of a small animal, or the faint odor of skunk. The effect must fit in a 5-foot cube.</li>
</ul>
<p>You instantly light or snuff out a candle, a torch, or a small campfire.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 0);

        $spell              = new Spell;
        $spell->name        = 'Drums of War';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = '200 feet';
        $spell->area        = 'Emanation centered on you';
        $spell->duration    = 'Concentration, up to 1 hour and continues for 10 rounds';
        $spell->description = '<p>You play your instrument and the music transforms into an ominous cadence of drumbeats that fills enemies with doubt. All enemies that start their turn within range suffer a -2 penalty on Attack rolls and Saves. To maintain this spell, you must use an Action to continue playing your musical instrument.</p>
<dl>
    <dt>Material Components</dt> <dd>A masterwork musical instrument, which must be played</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion', 'Auditory'], 3);
        $spell->skills()->save(app()->skills['Performance'], ['dc' => 12]);

        $spell                 = new Spell;
        $spell->name           = 'Dust Devil';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '5-foot cube. 60 foot range';
        $spell->save_attribute = 'STR';
        $spell->duration       = '1 minute';
        $spell->description    = "<p>Choose an unoccupied 5-foot cube of air that you can see within range. An elemental force that resembles a dust devil appears in the cube and lasts for the spell's duration.</p>
<p>Any creature that ends its turn within 5 feet of the dust devil must make a STR Save, taking 1D8 Bludgeoning damage and is pushed 10 feet away.</p>
<p>As an Action, you can move the dust devil up to 30 feet in any direction. If the dust devil moves over sand, dust, loose dirt, or small gravel, it sucks up the material and forms a 10-foot radius cloud of debris around itself that lasts until the start of your next turn. The cloud heavily obscures its area.</p>
<p>The dust devil can also be used as a source of wind to push a sail powered boat. They can increase or decrease the wind speed by one category or change the direction of the wind by up to 90 degrees</p>";
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D8</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Air'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Dust to Dust';
        $spell->casting        = 'Somatic Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = '30 feet';
        $spell->targets        = 'One undead creature within range';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You shoot a golden ray from your pointing finger. Make a Ranged Touch attack. If you hit, you deal 10D8 Positive energy damage to the undead target. This spell has no effect on creatures that are not undead.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead', 'Ray'], 4);

        $spell                = new Spell;
        $spell->name          = 'Dweomerdoom';
        $spell->casting       = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Khelben Arunsun';
        $spell->rarity        = 'Rare';
        $spell->range         = '60 feet';
        $spell->targets       = '1 creature';
        $spell->duration      = 'Instantaneous';
        $spell->description   = "<p>You counterspell an opponent's spell or spell-like ability before it is even cast and without knowing what spell you are countering.</p>
<p>If the target prepares spells, you counterspell the highest level spell currently prepared, eliminating it from the target's list of prepared spells for that day. If the target casts spells spontaneously (and does not prepare spells), you effectively reduce by one the number of spells per day of the highest level spell slot available. If the target has spell-like abilities (and does not prepare spells or cast spontaneously), it loses one use of the highest-level ability available. Otherwise, this spell has no effect.</p>
<p>You must make a successful Dispel Check (as the spell Dispel Magic) to successfully counter or remove your opponent's prepared spell, spell slot, or use of a spell-lie ability.</p>
<dl>
    <dt>Material Components</dt> <dd>A crystal lens worth at least 1,000 gp</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Abjuration'], 9);
    }
}
