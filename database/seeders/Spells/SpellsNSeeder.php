<?php

namespace Database\Seeders\Spells;

use App\Models\Material;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class SpellsNSeeder extends Seeder
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
        $spell->name         = 'N`Maernthor';
        $spell->casting      = '2 hours (Material, Somatic, Verbal)';
        $spell->duration     = 'Permanent';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>Between 5 and 10 Secondary Casters</dd>
</dl>';
        $spell->description = "<p>Hidden Homeland. Ritual of Complement.</p>
<p>This spell cloaks an elven homeland in mystery and protects it from outside intrusions and unwanted visitors. While less a physical barrier than a mental one, the N`Maernthor magics convince a person that the route to an elven realm is actually another path that leads away form or around the protected lands.</p>
<p>This spell's effect is a mixture of Illusion and Enchantment magics plus a Mythal or Ward. Saves against the effects of this spell are made with a -10 penalty.</p>
<dl>
    <dt>Material Components</dt> <dd>A living Treant, who willingly agrees to become the focal point and source of the persistent effects of this spell.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['High Magic', 'Illusion', 'Enchantment', 'Abjuration'], 7);

        $spell               = new Spell;
        $spell->name         = 'N`Quor`Khaor';
        $spell->casting      = '1 week (Material, Somatic, Verbal, Material)';
        $spell->range        = 'Unlimited';
        $spell->targets      = 'One extraplanar being';
        $spell->duration     = 'Permanent';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>At least 8 peer secondary peer casters, each of which must also cast this spell.</dd>
    <dt>Sacrifice</dt> <dd>Life Force. The more powerful the being to be bound, the more life energy that is required to be sacrificed.</dd>
</dl>';
        $spell->description = "<p>The Banishing, Binding Outside of the People's Lands. Ritual of Myriad.</p>
<p>Just as the Ghaatiil spell creates a spatial vortex between two points (a Gate), this powerful spell both summons a physical form of an extraplanar entity (such as a Tanar'ri lord or a godly avatar) and binds it, setting certain limitations upon the target entity. In its least form, the spell banishes the entity temporarily from the Realms, while the most advanced form of this ritual fully banishes the entity permanently from Realmspace and confines said physical avatar in a sub-dimensional prison. All levels of binding must have one way to undo the binding set by the casters.</p>
<p>Any extraplanar creature or entity is bound to a certain place by directly anchoring said creature's avatar or Prime Material form to the Weave in that implicit spot. These binding are physical unbreakable and immune to all magics including Wish and other High Magics, even the influence of other gods (though not the Overpower Ao, Corellon, or Mystra). The avatar is bound and the creature's influence is banished from the Realms and limited to his prison sub-dimension.</p>
<p>There must always be a way to unlock this binding spell, and the binding must be released at the exact site, not by far-away magics. Given the cost of a binding, it is understandable that the elves make the \"keys\" nigh-impossible stipulations.</p>
<p>This is the most costly of spells, since all casters are either consumed utterly or turned into Baelnorn by this ritual. The god or creature is bound using the pure lifeforce of the casters and any supporting members of the spell. A correlation exists between sacrificed Hit Points and teh strength of the binding: 400 Hit Points are needed to imprison any lesser extra-planar creature or agent of a god, and at least 800 Hit Points to imprison godly avatars (800 for demigods, 1,200 for lesser, 1,600 for intermediate, 2,000 for greater). Supporters are sometimes necessary, since the ritual needs additional Hit Points worth of lifeforce from those supporters to finish the binding, though all Hit Points are drained first from the High Magic casters (their fates are accorded after the spell).</p>
<dl>
    <dt>Material Components</dt> <dd>An item that is specific and unique to the creature to be bound.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['High Magic', 'Abjuration', 'Conjuration'], 10);

        $spell               = new Spell;
        $spell->name         = 'N`Tel`Orar';
        $spell->casting      = '1 hour (Material, Somatic, Verbal)';
        $spell->range        = 'Cube, up to 300-foot per side. 1,000 foot range';
        $spell->duration     = '24 hours';
        $spell->requirements = '<dl>
    <dt>Secondary Casters</dt> <dd>2 other peer casters, each of whom must also cast this spell. One caster controls winds, one controls the debris and abrasions, and controls the water and rain.</dd>
</dl>';
        $spell->description = '<p>Corrosion/Erosion. Ritual of Complement.</p>
<p>By wrapping themselves and an area in the Weave and the natural forces that extend from it, the casters of this spell can induce centuries of natural weathering forces upon the enclosed spells area to erode buildings or other unnatural things. All that remains after this ritual is new soil consisting of soft loam.</p>
<p>This spell summons high winds, mists and rains, and light abrasive silt. All these forces are focused on a four-sided area with the spell site.</p>
<p>This spell wears down and disintegrates buildings of wood in one hour and those of stone in six to 18 hours. It is summoned only to break down structures, cleanse pollution of civilization, and restore the natrual order of a place. It is always performed on abandoned elven sites if possible, elven ruins.</p>
<dl>
    <dt>Material Components</dt> <dd>Burning incense and bits of earth and wood mixed in water</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['High Magic', 'Transmutation'], 8);
        $spell->skills()->save(app()->skills['Nature'], ['dc' => 25]);

        $spell                 = new Spell;
        $spell->name           = 'Nar Fiendbond';
        $spell->casting        = '1 hour (Ability Damage, Material, Somatic, Verbal)';
        $spell->range          = 'Touch';
        $spell->save_attribute = 'CHA';
        $spell->targets        = 'One humanoid with INT 4 or higher';
        $spell->requirements   = '<dl>
    <dt>Ability Damage</dt> <dd>10 CON damage</dd>
</dl>';
        $spell->duration       = 'Instantaneous';
        $spell->description    = '<p>You turn the target into a half-fiend by imbuing it with the essence of a abyssal fiend.</p>
<p>The target can have no more Character Levels than you do, and it must either be willing to undergo transformation or be restrained in some manner. Upon completion of the spell, the subject can attempt a WIS Save to avoid gaining the half-fiend template. In addition, the subject\'s tpe changes to Outsider, and the moral component of their alignment changes to evil.</p>
<p>For the purpose of this spell, treat the half-fiend template as an acquired template rather than an inherited one. The newly created half-fiend also gains a +4 level adjustment.</p>
<p>You must first find a fiend that is willing to be suffused with the target, although the fiend can be a lesser fiend (like a Quasit, but not a Manes). You must prepare a living creature to offer to the fiend (sacrificed).</p>
<p>You cannot cast this spell on yourself.</p>
<dl>
    <dt>Material Components</dt> <dd>Precious gems with a total value equal to 10,000 gp.  A living creature that is to be sacrificed to the summoned fiend.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Demon', 'Necromancy', 'Ritual'], 7);

        $spell              = new Spell;
        $spell->name        = 'Nature Incarnate';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '1 minute';
        $spell->description = "<p>The primal power of the world flows through you.</p>
<p>You transform into an incarnation of nature, either a Green Man, or a Kaiju. You can dismiss this spell with an Action.</p>
<ul>
    <li>AC</li>
</ul>
<dl>
    <dt>Green Man</dt> <dd>
        <ul>
            <li>AC = 25</li>
            <li>10 temporary Hit Points</li>
            <li>Speed 40 \ Climb 40</li>
            <li>36 ranks in Athletics (unless your own ranks are higher)</li>
            <li>Darkvision</li>
            <li>
                <dl>
                    <dt>Vines</dt> <dd>Melee Action reach 30 feet Versatile 6D8 +12 Bludgeoning damage</dd>
                    <dt>Thorns</dt> <dd>Ranged Action range 100 feet 6D6 +6 Piercing damage</dd>
                    <dt>Green Caress</dt> <dd>Aura, Transmutation. Enemies other than Plants in a 60-foot radius must Succeed a CON Save vs your Spell DC or become Clumsy: 1 for 1 round, or Clumsy: 2 on a Critical Failure.</dd>
                </dl>
            </li>
            <li>Extra Melee Action</li>
        </ul>
    </dd>
    <dt>Kaiju</dt> <dd>
        <ul>
            <li>AC = 20</li>
            <li>Damage Reduction: Bashing, Piercing, Slashing</li>
            <li>100 temporary Hit Points</li>
            <li>Speed 50</li>
            <li>36 ranks in Athletics (unless your own ranks are higher)</li>
            <li>Darkvision</li>
            <li>
                <dl>
                    <dt>Jaws</dt> <dd>Melee Action Reach 30 feet 6D10 +10 Piercing damage</dd>
                    <dt>Claws</dt> <dd>Melee Action Agile Reach 30 6D6 +8 Slashing damage</dd>
                    <dt>Feet</dt> <dd>Melee Action Agile Reach 15 6D6 +10 Bludgeoning damage</dd>
                </dl>
            </li>
            <li>Unstoppable. You are immune to being Immobilized and ignore Difficult Terrain and Greater Difficult Terrain</li>
            <li>Trample. Triple Action. You move up to double your Speed and move through each creature whose space you enter. A trampled creature takes Foot damage with a basic DEX Save against your spell DC</li>
        </ul>
    </dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Transmutation', 'Polymorph'], 10);

        $spell              = new Spell;
        $spell->name        = "Nature's Enmity";
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '100 feet';
        $spell->targets     = 'Up to five creatures';
        $spell->duration    = '10 minutes';
        $spell->description = "<p>Animals, plants and weather in the area turn against the targets. Each target suffers from the following effects.</p>
<ul>
    <li>Vegetation springs up from any surface, making targets entangled any time they're adjacent to a plant or a surface of stone or earth.</li>
    <Li>Aggressive animals attack unpredictably then depart. At the start of its turn, each target rolls a DC 8 flat check. On a failure, it's attacked by swarming creatures that deal 2D10 slashing damage. The target can attempt a DEX Save, taking half damage on success, no damage on a critical success, or double damage on a critical failure. The target is flat-footed for 1 round on any result other than a critical success.</li>
    <li>The target also loses any connection to nature or natural creatures. Any animal or plant creature becomes hostile to it, even a companion creature like an animal companion. The target also has to succeed at a DC 5 flat check when casting any primal spell or the spell fails.</li>
</ul>
<p>The GM might determine that you can't subject some creatures to the ire of nature. For example, a primal spell caster of your level or higher or an avatar of nature might be immune to these effects.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 9);

        $spell              = new Spell;
        $spell->name        = "Nature's Exile";
        $spell->casting     = '1 minute (Somatic Casting, Verbal Casting)';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Permanent';
        $spell->description = "<p>This spell curses the creature touched, making it inimical to the natural world. All animals have an initial attitude of hostile toward the target. Familiars, being magical beasts, are not affected by this spell, but animal companions are. If you have an animal companion, it does not become hostile, but as long as you remain cursed, your animal companion takes a -2 penalty on all attack rolls, skill checks, and saving throws. The target also takes a -10 penalty on Survival skill checks as the weather and environment themselves seem to conspire to cause trouble.</p>
<p>Nature's exile can be removed with break enchantment, limited wish, miracle, remove curse, or wish.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Curse', 'Ritual'], 3);

        $spell              = new Spell;
        $spell->name        = "Nature's Favor";
        $spell->casting     = 'Somatic Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'All Familiars, Animal Companions, and Summoned Animals within range';
        $spell->duration    = '1 minute';
        $spell->description = '<p>All of your Familiars, Animal Companions, and Summoned or Called Animals within range receives a +2 bonus to Hit and Damage for the Duration.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+2)</dt> <dd>Increase the bonus by +1</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Enchantment', 'Bless'], 1);

        $spell              = new Spell;
        $spell->name        = "Nature's Rampart";
        $spell->casting     = '10 minutes (Material, Somatic, Verbal)';
        $spell->range       = '120 feet';
        $spell->area        = 'Structure up to 40 feet square';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You shape a natural setting into a formidable defensive position. Usually this spell is used to prepare an open outdoor area such as a hillside or a forest, but a large natural cavern could be shaped into a divine rampart. Artificial structures or features are not affected, although nature's rampart could be positioned to fill a gap between two buildings or barricade an unpaved road. The effect of the spell depends on the terrain:</p>
<dl>
    <dt>Open Outdoor Site</dt> <dd>A rampart or dike of earth 5 feet high and 5 feet thick at its base rises immediately behind a shallow ditch 5 feet wide and 5 feet deep along the perimeter of the site. Creatures behind the dike receive cover. Attackers approaching on foot must scramble down into the ditch and then climbing 10 feet to reach the top of the dike (Climb DC 10).</dd>
    <dt>Rough Outdoor Site or Cavern</dt> <dd>Loose stones and boulders, dead wood, and patches of dense briars are arranged to form a defensible wall 5 feet high and 2 feet thick at the base around the perimeter of the site. Creatures behind the wall receive cover.</dd>
    <dt>Marshy or Low-Lying Site</dt> <dd>In areas such as marsh, bog, swamp, or tundra, nature's rampart cannot raise a wall, but instead creates a water-filled ditch 10 feet wide and 5 feet deep. Creatures forced to wade the ditch are reduced to 1/4 their normal speed (minimum 5 feet) and cannot charge or run.</dd>
</dl>
<dl>
    <dt>Material Components</dt> <dd>A small quartz gem engraved with the image of an exquisite tiny castle, worth at least 100 gp.</dd>
</dl>";
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Double the Area</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 3);

        $spell              = new Spell;
        $spell->name        = 'Naturewatch';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->area        = 'Cone-shaped emanation';
        $spell->duration    = 'Concentration, up to 1 minute';
        $spell->description = '<p>This spell functions like Deathwatch, except it only works on animals and plants. In addition, it also allows you to determine a variety of other mundane information about the animals and plants (whether or not the plants are dehydrated, the animals are malnourished, and so forth).</p>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 0);

        $spell              = new Spell;
        $spell->name        = 'Necrotic Touch';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One living or undead creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You touch weakens the living and disorients undead. Make a melee touch attack. The effect of a hit depends on whether the target is living or undead. Heightening increases the damage.</p>
<dl>
    <dt>Living Creature</dt> <dd>1D8 Negative damage. On a critical hit, double damage and enfeebled 1 for 1 round.</dd>
    <dt>Undead Creature</dt> <dd>Flat-footed for 1 round. On a critical hit, it's also fleeing for 1 round unless it succeeds at a WIS Save.</dd>
</dl>";
        $spell->heightened = '<dl>
    <dt>Heightened (+3)</dt> <dd>Damage of 1D8 + your spellcasting ability modifier.</dd>
    <dt>Heightened (+5)</dt> <dd>Damage of 2D8 + your spellcasting ability modifier.</dd>
    <dt>Heightened (+7)</dt> <dd>Damage of 3D8 + your spellcasting ability modifier.</dd>
    <dt>Heightened (+9)</dt> <dd>Damage of 4D8 + your spellcasting ability modifier.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Attack', 'Necromancy', 'Negative'], 0);

        $spell                 = new Spell;
        $spell->name           = 'Necrostasis';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'One undead creature within range';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, up to 10 rounds';
        $spell->description    = '<p>You drain necromantic energy from an undead creature.</p>
<p>The target undead becomes Staggered. For the duration of the spell, Dark Wisps of energy seep out of the target creature.</p>
<p>If the target has the Staggered condition, it becomes Dazed for 1 round instead.</p>';
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>No effect</dd>
    <dt>Failure</dt> <dd>Full effect</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy'], 2);

        $spell                = new Spell;
        $spell->name          = 'Necrotic Grasp';
        $spell->casting       = 'Somatic Casting, Verbal Casting';
        $spell->spell_creator = 'Morgannaver';
        $spell->range         = 'Touch';
        $spell->targets       = 'Creature touched';
        $spell->duration      = '3 rounds';
        $spell->description   = '<p>For the duration, you gain a Touch Attack, this Touch Attack cannot be suppressed and will harm any touched, even allies. Any creature that you touch (successful Touch Attack) suffers 3D4 Negative damage and you are healed the same amount of damage that the target suffers. Any extra Hit Points gained are treated as Temporary Hit Points. Any creature touched must make a CON Save or become Drained 1. This spell has no effect on Constructs, Outsiders and the Undead.</p>
<p>This spell ends as soon as you cast another spell.</p>';
        $spell->saves = '<dl>
    <dt>Failure</dt> <dd>Suffer the effects of Drained 1</dd>
    <dt>Success</dt> <dd>Not Drained</dd>
</dl>';
        $spell->heightened = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the damage by +1D4</dd>
    <dt>Heightened (+1)</dt> <dd>Increase the duration by +1 round</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 5);

        $spell              = new Spell;
        $spell->name        = 'Negate Aroma';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = '1 willing creature';
        $spell->duration    = '1 hour';
        $spell->description = '<p>The target loses its odor, preventing creatures from passively noticing its presence via smell alone, even if the creatures have precise or imprecise scent.</p>
<p>A creature attempting a Perception check to Seek with scent and other  senses might notice the lack of natural scent. If the target has any abilities that result from its smell, such as an overpowering scent, those abilities are also negated.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+4)</dt> <dd>The range increases to 30 feet, and you can target up to 10 creatures.</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Transmutation'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Negative Energy Flood';
        $spell->casting        = 'Material Casting, Somatic Casting';
        $spell->range          = '60 feet';
        $spell->targets        = 'One creature within range';
        $spell->save_attribute = 'CON';
        $spell->duration       = 'Instantaneous';
        $spell->description    = "<p>You send ribbons of Negative energy at one creature you can see within range. Unless the target is undead, it must make a CON Save, dealing 5D12 Negative damage. A target killed by this damage rises up as a zombie at the start of your next turn. The zombie pusues whatever creature it can see that is closest to it.</p>
<p>If you target an undead with this spell, the target doesn't make a Save. Instead, roll 5D12. The target gains half the total as temporary Hit Points.</p>
<dl>
    <dt>Material Components</dt> <dd>A broken bone and a square of black silk</dd>
</dl>";
        $spell->saves          = '<dl>
    <dt>Critical Failure</dt> <dd>Double damage</dd>
    <dt>Failure</dt> <dd>Full damage</dd>
    <dt>Success</dt> <dd>Half damage</dd>
    <dt>Critical Success</dt> <dd>Quarter damage</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Negative'], 5);

        $spell              = new Spell;
        $spell->name        = 'Negative Energy Ray';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 feet';
        $spell->targets     = 'One creature within range';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>Make a Ranged Touch Attack. You shoot a Ray of Negative energy that deals 2D6 Negative Damage.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Damage by +1D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Ray'], 1);

        $spell                 = new Spell;
        $spell->name           = 'Nether Trail';
        $spell->casting        = '1 minute (Material, Somatic, Verbal)';
        $spell->save_attribute = 'WIS';
        $spell->area           = 'A trail up to 500 feet long';
        $spell->duration       = '6 hours';
        $spell->description    = '<p>You create a handful of invisible, nigh-intangible powder that attracts creatures from the Lower Planes. You sprinkle this powder in a trail on the ground. Evil outsiders who come within 10 feet of any part of the trail must make a WIS Save or be Compelled (Compulsion) to follow the trail to the end. The fiend will know which way leads to the end of the trail. Compelled fiends will follow the trail even into danger. If the danger is obvious, then the fiend gets another Save.</p>
<p>When the fiend reaches the end of the trail, the Compulsion ends and the fiend is no longer affected by this casting of this spell.</p>
<p>Any non-fiend creature that can detect invisible objects can detect the trail. As a Double Action, a creature can destroy a 10-foot part of the trail.</p>
<p>If another creature has some level of control over the compelled fiend and commands it to not follow the trail, the fiend gets another Save.</p>
<dl>
    <dt>Material Components</dt> <dd>A urine-soaked holy symbol, which crumbles into the powder that creates the trail.</dd>
</dl>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>Not compelled to follow the trail, and aware of the trails existence</dd>
    <dt>Success</dt> <dd>Not compelled to follow the trail, but not aware of it either</dd>
    <dt>Failure</dt> <dd>Compelled to follow the trail</dd>
</dl>';
        $spell->heightened     = '';
        $helper->addTypesToSpell($spell, ['Illusion', 'Mental'], 1);

        $spell              = new Spell;
        $spell->name        = 'Neutral Water';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '30 foot radius globe';
        $spell->targets     = 'Area of water touched';
        $spell->duration    = '10 minutes';
        $spell->description = '<p>This spell completely neutralizes all scents within the area of effect for the duration of the spell. This prevents some sea animals from sensing the presence of a predator, and it allows a wounded person to avoid detection by sharks and other predators. If characters within the area of effect have already succumbed to blood frenzy, this provides a Save to resist its effects, but it does not automatically end it (though it does prevent its onset if the spell is cast before such creatures register the scent).</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Water'], 1);

        $spell              = new Spell;
        $spell->name        = 'Neutralize Poison';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature';
        $spell->duration    = 'Instantaneous';
        $spell->description = '<p>You try to cure one poison afflicting the target. Treat this as counteracting the poison.</p>';
        $helper->addTypesToSpell($spell, ['Transmutation', 'Poison'], 3);
        $spell->materials()->save(Material::where('name', 'Chalcedony')->firstOrFail(), ['price' => '50 gp']);

        $spell                 = new Spell;
        $spell->name           = 'Night Terrors';
        $spell->casting        = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range          = 'Touch';
        $spell->targets        = 'Intelligent creature touched';
        $spell->save_attribute = 'WIS';
        $spell->duration       = '10 days';
        $spell->description    = "<p>The target of this spell gains no benefit from normal or magical sleep, writhing in a series of nightmares that torture its psyche and diminish its ability to perform strenuous tasks. The target doesn't heal ability or hit point damage naturally and can’t prepare spells or regain spell slots. After one night of poor sleep, the target is fatigued (or exhausted if it was fatigued before trying to rest). A creature affected by this spell doesn't recover from the fatigued or exhausted condition inflicted by this spell after resting, nor do spells such as Restoration provide any respite. Each restless night, the target takes 1D4 points of WIS damage, which also can't be recovered by magic while night terrors is active.</p>
<p>The images from previous nightmares continue to haunt the target's mind while awake. If the target has rested at least once while affected by night terrors and then becomes subjected to a fear condition, the target experiences the next higher level of fear than it would normally. However, per the alternate rules for fear, this spell cannot cause a lesser state of fear to become a greater one. If the effect causing the fear condition doesn't usually stack with other fear effects, the target's level of fear does not increase. This aspect of the spell is a fear effect.</p>
<p>The affected creature can attempt a new Save once per day to end night terrors, but multiple attempts to rest in a given day do not afford the target multiple Saves. A creature that successfully Saves against night terrors ends the spell and rests normally that night but gains the benefits of only that night's rest, not any benefits missed on previous nights.</p>";
        $spell->saves = '<dl>
    <dt>Success</dt> <dd>The spell ends</dd>
    <dt>Failure</dt> <dd>The target creature continues to suffer the effects of this spell</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Phantasm'], 6);

        $spell                 = new Spell;
        $spell->name           = "Night's Caress";
        $spell->casting        = 'Somatic Casting';
        $spell->save_attribute = 'CON';
        $spell->range          = 'Touch';
        $spell->targets        = 'Creature touched';
        $spell->duration       = 'Beginning of next turn or until successful Melee Attack';
        $spell->description    = '<p>As you cast this spell, your hand sheds Darkness like the blackest night. Until the beginning of your next turn, you may make a Melee Spell Attack as an Action. As soon as you successfully hit, the spell ends. If you hit, the target takes 10D6 Negative Damage and 1D6 CON Damage. If they Successfully make a CON Save, they avoid the CON Damage.</p>
<p>This spell has a special effect on undead creatures. An undead touched by you takes no Damage or CON Damage, but it must flee from you for 5 rounds.</p>';
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Full damage but no CON Damage</dd>
    <dt>Failure</dt> <dd>Full damage and CON Damage</dd>
</dl>';
        $spell->heightened     = '<dl>
    <dt>Heightened (+1)</dt> <dd>Increase the Damage by +2D6</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Necromancy', 'Evil', 'Negative'], 5);

        $spell              = new Spell;
        $spell->name        = "Night's Mantle";
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'Creature touched';
        $spell->duration    = 'Concentration, up to 3 hours';
        $spell->description = '<p>You imbue a creature with an invisible shield that protects it from all effects of sunlight. This spell does not overcome any Aversion the target creature might have for sunlight.</p>
<p>This spell may be countered by a spell with the Light type if it is a higher level.</p>';
        $spell->heightened  = '<dl>
    <dt>Heightened (+1)</dt> <dd>The spell does not require Concentration</dd>
    <dt>Heightened (+1)</dt> <dd>Double the Duration</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Abjuration', 'Darkness'], 3);

        $spell                 = new Spell;
        $spell->name           = 'Nightmare';
        $spell->casting        = '10 minutes (Material, Somatic, Verbal)';
        $spell->range          = 'Planetary';
        $spell->rarity         = 'Rare';
        $spell->save_attribute = 'WIS';
        $spell->targets        = 'One creature you know by name';
        $spell->duration       = '1 day or until dismissed';
        $spell->description    = '<p>You send disturbing nightmares to your target. The next time the target falls asleep, it must attempt a WIS Save against the Nightmare. If you know the target only by name and have never met them, the target gets a +4 circumstance bonus to the WIS Save.</p>';
        $spell->saves          = '<dl>
    <dt>Critical Success</dt> <dd>The target suffers no adverse effects and is inoculated for 1 month</dd>
    <dt>Success</dt> <dd>The target suffers no adverse effects form the nightmare, other than its memories</dd>
    <dt>Failure</dt> <dd>The target awakens Fatigued</dd>
    <dt>Critical Failure</dt> <dd>The target awakens Fatigued and is Drained 2 until no longer Fatigued</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Mental', 'Phantasm', 'Ritual'], 4);

        $spell              = new Spell;
        $spell->name        = 'Nimbus of Light';
        $spell->casting     = 'Somatic Casting';
        $spell->targets     = 'Self';
        $spell->duration    = '10 minutes or until discharged';
        $spell->description = '<p>A glittering corona of light surrounds your body at a few inches distance, until you release it as a focused blast of Light energy.</p>
<p>This spell causes your body to glow as a lantern, shedding bright light out to 30 feet and dim light out to 60 feet. This light is considered Sunlight out to 30 feet.</p>
<p>As an Action, you can gather the light around your hand, and as another Action, you may make a Ranged Spell Attack with the gathered light. If you hit, it deals 1D8 +3 Light damage. Any Darkness spell of 3rd level or lower is dispelled if it is hit by this Ranged Spell Attack. Once you make the Ranged Spell Attack, this spell ends.</p>';
        $helper->addTypesToSpell($spell, ['Evocation', 'Light'], 1);

        $spell              = new Spell;
        $spell->name        = 'Nine Lives';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = 'Touch';
        $spell->targets     = 'One creature touched';
        $spell->duration    = '12 hours';
        $spell->description = "<p>Despite its name, this powerful ward does not grant the target multiple lives, but rather gives the target the ability to get out of trouble and relieves harmful effects and conditions. For the spell's duration, the target can use any of the following abilities as an immediate action, but only up to a total of nine times, at which point the spell ends.</p>
<dl>
    <dt>Cat's Luck</dt> <dd>The target can use this ability when it fails a Save. The target can reroll the failed Save, but must take the new result even it is worse.</dd>
    <dt>Fortitude</dt> <dd>The target uses this ability when a Critical Hit or Sneak Attack is scored against it. The Critical Hit or Sneak Attack is negated and the damage is instead rolled normally.</dd>
    <dt>Rejuvenate</dt> <dd>The target uses this ability when it is reduced to 0 or fewer hit points. The target is instantly healed 3D6 points of damage. If enough Hit Points are regained to bring the target to positive Hit Points, it does not fall unconscious. If it is not enough to leave the target with positive Hit Points, the target automatically stabilizes. Both of these effects work even if the damage was originally enough to kill the target.</dd>
    <dt>Shake Off</dt> <dd>
        <p>The target uses this ability when it is under the effects of any of the following conditions.</p>
        <ul>
            <li>Blinded</li>
            <li>Confused</li>
            <li>Cowering</li>
            <li>Dazed</li>
            <li>Dazzled</li>
            <li>Entangled</li>
            <li>Exhausted</li>
            <li>Fatigued</li>
            <li>Frightened</li>
            <li>Nauseated</li>
            <li>Panicked</li>
            <li>Shaken</li>
            <li>Sickened</li>
            <li>Staggered</li>
        </ul>
        <p>Using this ability ends one of those conditions.</p>
    </dd>
    <dt>Shimmy Out</dt> <dd>The target uses this ability when it is Grappled or Pinned. The target automatically escapes the grapple as if it had succeeded at an Acrobatics (Escape) check to escape the Grapple.</dd>
    <dt>Stay Up</dt> <dd>The target uses this ability when it is tripped or otherwise knocked prone. The target steadies itself and stays upright.</dd>
</dl>";
        $helper->addTypesToSpell($spell, ['Enchantment'], 8);

        $spell                 = new Spell;
        $spell->name           = "Nixie's Lure";
        $spell->casting        = 'Somatic Casting, Verbal Casting';
        $spell->range          = '300-foot radius burst centered on you';
        $spell->targets        = 'All creatures within range';
        $spell->save_attribute = 'WIS';
        $spell->duration       = 'Concentration, plus 1 minute';
        $spell->description    = "<p>This spell creates an unearthly and infectious song that seductively summons all who hear it. Nixie's lure affects a maximum of 24 Hit Dice of creatures. Creatures in the area who fail their Save are lured by the song and move toward you using the most direct means available. If the path leads them into a dangerous area such as through fire or off a cliff, the creatures each receive a second saving throw to end the effect before moving into peril. Creatures lured by the spell's song can take no actions other than to defend themselves. A victim within 5 feet of you simply stands still and for the duration of the spell remains Fascinated.</p>";
        $spell->saves          = '<dl>
    <dt>Success</dt> <dd>Spell ends for that creature</dd>
    <dt>Failure</dt> <dd>Creature continues to be affected by this spell</dd>
</dl>';
        $helper->addTypesToSpell($spell, ['Illusion', 'Compulsion'], 4);

        $spell              = new Spell;
        $spell->name        = 'Node Door';
        $spell->casting     = 'Verbal Casting';
        $spell->range       = 'Varies';
        $spell->targets     = 'You and touched objects';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You instantly transfer yourself from your current earth node to any other earth node you have visited.</p>
<p>You always arrive exactly at the spot desired - whether by simply visualizing the area or by describing your destination (for example, \"The earth node that serves the kuo-toa as a secret temple to Blibdoolpoolp\"</p>
<p>After using this spell, you can't take any other actions until your next turn.</p>
<p>If you arrive in an earth node that is already partially occupied by a newly added object, you arrive in the closest clear space in that node. If the earth node is completely filled or has been destroyed by any means, you bounce to the next closest earth node (determined randomly or by the DM). Each such bounce deals you and any who accompany you 2D6 points of damage.</p>";
        $helper->addTypesToSpell($spell, ['Conjuration', 'Earth Node'], 3);

        $spell               = new Spell;
        $spell->name         = 'Node Genesis';
        $spell->casting      = 'Somatic Casting, Verbal Casting';
        $spell->requirements = '<dl>
    <dt>Ability Damage</dt> <dd>10 CON damage</dd>
    <dt>Secondary Casters</dt> <dd>At least 2 other casters, both must have the Node Caster feat</dd>
</dl>';
        $spell->range       = 'Touch';
        $spell->targets     = 'An outcropping of earth or stone in the Underdark';
        $spell->duration    = 'Instantaneous';
        $spell->description = "<p>You may only cast this spell while you are on or under the surface of the earth.</p>
<p>You reroute local ley lines and telluric currents and create a new Class 1 Earth Node. The new node is 20 feet in diameter, centered on and emanating from the point touched. The rough boundary of the new Earth Node may enclose a hollow space, an area of solid rock, or a combination of materials.</p>
<p>If this spell is cast on the surface of the earth, at least a portion of the Earth Node must be contiguous with the natural ground. You have some leeway in determining the initial shape of your Earth Node's outer boundary-it doesn't have to be a perfect sphere, though no portion of its volume can be less than 3 cubic feat.</p>
<p>The newly generated Earth Node retains its Class 1 status for one year. Thereafter, its diameter increase at a rate of 20 feet per year, until it eventually reaches a diameter equal to 20 feet per caster level you possessed at the time of casting. When the node's diameter reaches the low end of the range for the next higher class, its class increase by +1.</p>
<p>Earth Nodes you create with this spell are automatically considered Node Locked by you. They are otherwise just like natural Earth Nodes and subject to destruction in the same ways.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Earth Node'], 9);
        $spell->skills()->save(app()->skills['Arcana'], ['dc' => 20]);

        $spell              = new Spell;
        $spell->name        = 'Node Lock';
        $spell->casting     = 'Somatic Casting, Verbal Casting';
        $spell->range       = '60 feet';
        $spell->targets     = 'One Earth Node within range';
        $spell->duration    = 'Permanent';
        $spell->description = "<p>This spell cast upon an Earth node magically locks it against others who might wish to use its powers.</p>
<p>You can affect an earth node whose class is equal to one-half your caster level or less.</p>
<p>For any caster except you, the node lock adds +15 to each Spellcraft DC associated with the use of the node's standard powers.</p>
<p>A successful Dispel Magic breaks the Node Lock.</p>";
        $helper->addTypesToSpell($spell, ['Enchantment', 'Earth Node'], 2);

        $spell              = new Spell;
        $spell->name        = 'Nondetection';
        $spell->casting     = 'Material Casting, Somatic Casting';
        $spell->range       = 'Touch';
        $spell->duration    = '8 hours';
        $spell->description = '<p>For the duration, you hide a target that you touch from divination magic. The target can be a willing creature or a place or an object no larger than 10 feet in any dimension. The target can’t be targeted by any divination magic or perceived through magical scrying sensors.</p>
<p><strong>Materials</strong> A pinch of diamond dust worth 25 gp sprinkled over the target which the spell consumes</p>';
        $helper->addTypesToSpell($spell, ['Abjuration'], 3);
        $spell->materials()->save(Material::where('name', 'Diamond')->firstOrFail(), [
            'price' => '25 gp',
            'meta'  => 'Pinch, sprinkled over the target, which the spell consumes',
        ]);

        $spell              = new Spell;
        $spell->name        = 'Note';
        $spell->casting     = 'Material Casting, Somatic Casting, Verbal Casting';
        $spell->range       = '90 feet';
        $spell->targets     = 'Self';
        $spell->duration    = '3 hours';
        $spell->description = '<p>This spell functions as Journal, except as noted here.</p>
<dl>
    <dt>Materials</dt> <dt>A pile of blank sheets of paper, or a small notebook.</dt>
</dl>';
        $helper->addTypesToSpell($spell, ['Divination'], 1);
    }
}
