<?php

namespace Database\Seeders\Spells;

use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsKSeeder extends Seeder
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
        $spell->name         = 'Kai`Soeh`takal';
        $spell->casting      = '6 to 21 rounds (Material, Somatic, Verbal)';
        $spell->range        = 'Touch';
        $spell->targets      = 'Creature touched';
        $spell->requirements = '<dl>
    <dt>Feats</dt> <dd>High Magic Feat</dd>
</dl>';
        $spell->duration     = '10 minutes or until dismissed';
        $spell->description  = '<p>Skin and Breath of the Wyrm</p>
<p>You reach through the Weave, connecting with a metallic dragon and adopts some of its energy. In essence, this High Magic spell wraps your or another target into the form of the dragon, granting the abilities of the chosen dragon for a short time. To the Weave, the target is a dragon.</p>
<p>You or the target gain all the physical abilities of a Brass, Bronze, Copper, Gold or Silver dragon, including the following.</p>
<ul>
    <li>Frightful Presence</li>
    <li>Breath Weapon</li>
    <li>AC</li>
    <li>Claw, Bite, Tail, and Wing attacks</li>
    <li>Flight Speed</li>
</ul>
<p>The casting time is only 6 rounds to gain the effects of just the following spells (otherwise the casting time is 21 rounds).</p>
<ul>
    <li>Dragon Breath</li>
    <li>Dragon Claws</li>
    <li>Dragon Wings</li>
</ul>
<dl>
    <dt>Required Feats</dt> <dd>High Magic feat</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['High Magic', 'Transmutation', 'Polymorph'], 7);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 20]);

        $spell              = new Spell;
        $spell->name        = 'Keen Edge';
        $spell->casting     = 'Somatic Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One weapon touched or fifty small projectiles';
        $spell->duration    = '3 hours';
        $spell->description = "<p>This spell makes a weapon magically deal more telling blows.</p>
<p>Add an additional point to the weapon's Treat Range. If cast on projectile ammunition, the effect ends after one use, whether or not the projectile hits.</p>
<p>This spell can only be cast on Piercing or Slashing weapons.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 3);

        $spell              = new Spell;
        $spell->name        = "King's Castle";
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One ally within range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>This spell allows you to switch places with an ally. When you cast this spell, choose a single ally within range. You teleport to your ally’s space while your ally teleports to your former space.</p>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 3);

        $spell              = new Spell;
        $spell->name        = 'Kiss of the Vampire';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>For the duration, you gain the benefits and penalties of the Lesser Vampire Spawn feat. You also immediate gain 2 Blood Points.</p>
<p>If you already have the Lesser Vampire Spawn feat, replace that feat with the Vampire's Curse feat instead and this spell ends.</p>
<p>This spell has no effect if you have the Vampire's Curse feat.</p>
<p>While this spell is in effect, if you suffer a Draining Kiss attack from a Succubus, this effect becomes permanent. If your character gains a new Feat, you must use that feat to buy the feat that this spell grants.</p>";
        $spell->heightened  = "<dl>
    <dt>Heightened (+1)</dt> <dd>For the duration, you gain the benefits of the Vampire's Curse feat instead and 4 Blood Points instead of 2. If you already have the Vampire's Curse feat, this spell has no effect.</dd>
    <dt>Heightened (+2)</dt> <dd>
        <p>As Heightened +1 plus you also gain the benefits of one of the following feats.</p>
        <ul>
            <li>Vampiric Constitution</li>
            <li>Improved Blood Pool</li>
            <li>Sanguine Magic</li>
        </ul>
    </dd>
    <dt>Heightened (+3)</dt> <dd>
        <p>As Heightened +1 plus you also gain the benefits of 2 of the following feats.</p>
        <ul>
            <li>Vampiric Constitution</li>
            <li>Improved Blood Pool</li>
            <li>Sanguine Magic</li>
        </ul>
    </dd>
    <dt>Heightened (+4)</dt> <dd>
        <p>As Heightened +1 plus you also gain the benefits of all of the following feats.</p>
        <ul>
            <li>Vampiric Constitution</li>
            <li>Improved Blood Pool</li>
            <li>Sanguine Magic</li>
        </ul>
    </dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Necromancy', 'Undead'], 4);

        $spell              = new Spell;
        $spell->name        = 'Knight Unburdened';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = '3 hours';
        $spell->description = '<p>The target of this spell ignores the standard movement penalties for wearing Medium or Heavy armor. They still suffer all other penalties.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 1);

        $spell              = new Spell;
        $spell->name        = "Knight's Move";
        $spell->casting     = 'Verbal Casting';
        $spell->range       = '20 feet';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You can Teleport with a limited distance and restricted destination. When you cast this spell, you Teleport to any location within range that you can see, but the destination must be a location that is unoccupied and Flanking an enemy. You cannot bring anyone else without with the exception of you Special Mount.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened *+1)</dt> <dd>Double the Range</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Conjuration', 'Teleportation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Knock';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One door, lock, or container';
        $spell->duration    = '1 minute or until dismissed';
        $spell->description = '<p>You make the target easier to open. Knock grants any who try to open the target a +4 conditional bonus to any Thievery or Athletics checks to do so. You can attempt a Thievery check to open the target as part of casting knock. As soon as the target is opened or unlocked, the spell is dismissed.</p>
<p>Knock dispels Lock.</p>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Transmutation'], 2);

        $spell              = new Spell;
        $spell->name        = 'Know Bloodline';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Humanoid touched';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>When you cast this spell, you learn the basic ancestry of the subject creature. The information revealed includes the subject's type, race, subrace, and all subtypes the creature possesses.</p>
<p>Mulhorandi priests have used this spell for millennia to select humans of the purest Mulan bloodlines to follow the path of the glorious servant.</p>";
        $helper->addTypesToSpell($spell, ['Divination'], 3);

        $spell              = new Spell;
        $spell->name        = 'Know Direction';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You instantly know the direction of North from your current position. The spell is effective in any environment in which "north" exists, but it may not work in extraplanar settings.</p>';
        $helper->addTypesToSpell($spell, ['Divination'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Know Motivation';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '60 feet';
        $spell->area           = 'Quarter circle emanation from you out to the range';
        $spell->duration       = 'Concentration, up to 10 minutes';
        $spell->description    = '<p>You can sense the basic needs, drives, and emotions of creatures within the area of effect. Each round, you can focus your attention on one creature within the area and learn what is currently motivating them.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>You are not able to focus on that individual</dd>
    <dt>Failure</dt> <dd>You may focus on that individual and learn their motivation</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination', 'Mental'], 2);

        $spell                 = new Spell;
        $spell->name           = 'Know Vulnerabilities';
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->save_attribute = 'WIS';
        $spell->range          = '60 feet';
        $spell->targets        = 'One creature within range';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You learn any Vulnerabilities and Resistances that the target creature has. This spell identifies Resistances and Vulnerabilities granted by spells also.</p>
<p>Vulnerabilities include anything that causes the creature more than the normal amount of damage. Resistances include any effects that reduce or negate damage the creature takes and immunities to particular attacks.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>You do not learn any information</dd>
    <dt>Failure</dt> <dd>You learn all Vulnerabilities and Resistances of the target</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 4);

        $spell              = new Spell;
        $spell->name        = 'Know Wizard School';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '300 feet';
        $spell->targets     = 'One wizard within range';
        $spell->duration    = '1 round';
        $spell->description = '<p>You determine what Wizard School feats the target has. The target is unaware of the divination unless they notice the spell casting and succeed on an Arcana Skill Check.</p>
<dl>
    <dt>Material Components</dt> <dd>A small tube of paper or vellum</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 1);
    }
}
