<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassBarbarianSeeder extends Seeder
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

        $class       = new Klass;
        $class->name = 'Barbarian';
        $class->type = 'Base';
        $helper->saveClass($class, [
            'key_attribute'  => 'STR',
            'hit_dice'       => 12,
            'skill_points'   => 3,
            'skill_progress' => 3,
            'weapons'        => 'Simple Weapons, Martial Weapons',
            'armors'         => 'Light Armor, Medium Armor, Light Shields',
        ], ['STR', 'CON'], [
            'Rage', 'Combat Mastery',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Athletics', 'Intimidation', 'Nature', 'Survival']);

        $feature               = new Feature;
        $feature->key          = 'rage';
        $feature->name         = 'Rage';
        $feature->requirements = "You can't be fatigued, raging, or wearing heavy armor.";
        $feature->description  = "<p>You begin raging. You gain a number of temporary Hit Points equal to your level plus your CON modifier and enter a state of pure Rage. While you are Raging, you are affected in these ways:</p>
<ul>
    <li>Gain a +2 bonus to STR.</li>
    <li>You gain 10 Temporary Hit Points</li>
    <li>Take a –1 penalty to AC.</li>
    <li>You are not affected by the Fatigued condition. Once your Rage ends, you are again affected by the Fatigued condition (along with the additional level of Fatigue you gain for ending a Rage)</li>
    <li>You cannot cast spells that have a Material Casting or Somatic Casting component unless the spell has the Rage type.</li>
    <li>You can't use Actions that have the Concentrate trait unless it also have the Rage trait. The Seek basic Action gains the Rage trait while you're raging.</li>
    <li>If you have the Iron Will feat, you gain the benefits of the Resolve feat. If you already have the Resolve feat, you gain the benefits of the Greater Resolve feat.</li>
</ul>
<p>Your Rage lasts for 1 minute. It ends early if you are knocked unconscious or if your turn ends and you haven't attacked a hostile creature since your last turn or taken damage since then. If you are not in combat, you can also end your rage on your turn as an Action. This Action has the Concentrate and Rage traits. You can't voluntarily stop raging while you're in combat.</p>
<p>When your rage ends for any reason, you're Fatigued for 3 rounds.</p>";
        $helper->saveFeature($feature, ['Emotion', 'Mental', 'Rage']);

        $feature              = new Feature;
        $feature->key         = 'totem';
        $feature->name        = 'Totem';
        $feature->description = "<p>You channel the power of your rage through a totem. Traditionally, this is a spiritual or tribal symbol, but you choose what your totem means to you; it might describe a purely internal source or filter of your rage, such as a belief, curse, exotic heritage, or state of mind. Each totem grants you a totem ability, plus more abilities you can gain via totem feats, and it determines what types of damage you resist.</p>
<p>Each totem lists acts that are anathema to it. Whenever you perform such acts, you lose the totem's power and any totem feats until you spend 1 day of downtime re-centering yourself, though you keep all other abilities.</p>";
        $helper->saveFeature($feature, ['Totem']);

        $helper->addFeaturesToClass($class, [
            'class_group_feat' => [3, 4, 7, 9, 10, 12, 13, 16, 18, 19, 20],
            'combat_mastery'   => [6, 15],
            'totem'            => [1],
            'rage'             => [2],
        ]);
        $class->features()->save(app()->features['feat'], ['level' => 5, 'meta' => 'Mobile']);

        $feat              = new Feat;
        $feat->name        = 'Animal Totem';
        $feat->description = "<p>The fury of a wild predator fills you when you Rage, granting you uncanny unarmed attacks. Tribes that revere vicious animals (such as apes or bears) give rise to tribes of this totem. You might also be at war with an uncontrollable, animalistic side of your personality, or you might be a descendant of a werewolf or other lycanthrope. Select an animal from the Animal Totems table.</p>
<h4>Anathema</h4>
<p>Wielding weapons or flagrantly disrespecting any animal of your totem animal's kind are anathema to your totem.</p>
<h4>Bestial Rage (Totem Ability)</h4>
<ul>
    <li>When you Rage, you gain your chosen animal's unarmed attack (or attacks). The specific attack gained, the damage it deals, and its traits are listed on the Animal Totems table. All of these unarmed attacks are in the brawling group. Your Rage action gains the morph, primal, and transmutation traits.</li>
    <li>As a Triple Action, you may cast Animal Friendship on your chosen animal type 1/day</li>
    <li>You gain a +2 Knowledge Bonus on Lore, Animal Handling, and Tracking checks for your chosen animal</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Piercing</li>
    <li>Slashing</li>
</ul>
<table>
    <thead>
        <tr>
            <th>Animal</th>
            <th>Attack</th>
            <th>Damage</th>
            <th>Traits</th>
            <th>Bonus</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Ape</td>
            <td>Fist</td>
            <td>1D10 B</td>
            <td>Unarmed</td>
            <td>+3 Bonus to Climb and Jump checks</td>
        </tr>
        <tr>
            <td>Bear</td>
            <td>Jaws<br>Claw</td>
            <td>1D10 P<br>1D6 S</td>
            <td>Unarmed<br>Agile, Unarmed</td>
            <td>Advantage on CON Saves and CON Checks</td>
        </tr>
        <tr>
            <td>Bull</td>
            <td>Horn</td>
            <td>1D10 P</td>
            <td>Unarmed</td>
            <td>+1 Bonus to Hit and +2 Bonus to Damage when making a Charge Attack</td>
        </tr>
        <tr>
            <td>Cat</td>
            <td>Jaws<br>Claw</td>
            <td>1D10 P<br>1D8 S</td>
            <td>Unarmed<br>Agile, Unarmed</td>
            <td>Advantage on DEX Saves and DEX Checks</td>
        </tr>
        <tr>
            <td>Deer</td>
            <td>Antler</td>
            <td>1D10 P</td>
            <td>Unarmed</td>
            <td>+5 Speed</td>
        </tr>
        <tr>
            <td>Frog</td>
            <td>Jaws</td>
            <td>1D10 B</td>
            <td>Unarmed</td>
            <td>Advantage on Jump checks. +1 Bonus vs Poison Saves</td>
        </tr>
        <tr>
            <td>Shark</td>
            <td>Jaws</td>
            <td>1D10 P</td>
            <td>Unarmed</td>
            <td>+1 to all Damage</td>
        </tr>
        <tr>
            <td>Snake</td>
            <td>Fangs</td>
            <td>1D10 P</td>
            <td>Unarmed</td>
            <td>You are immune to Snake venom, and you gain a +2 Bonus on all Saves vs Poison</td>
        </tr>
        <tr>
            <td>Wolf</td>
            <td>Jaws</td>
            <td>1D10 P</td>
            <td>Unarmed</td>
            <td>You gain the Improved Reaction Feat</td>
        </tr>
    </tbody>
</table>";
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Animal Friendship'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Dragon Totem';
        $feat->description = "<p>You become as wrathful as a mighty dragon and manifest incredible abilities. Perhaps your culture reveres draconic majesty, teaching its warriors techniques that echo draconic fury, or you gained a connection to your totem after drinking or bathing in dragon's blood or after watching your village burn at the wrath of a marauding wyrm. Select a type of true dragon from Dragon Totems to be your totem's chosen dragon. Chromatic dragons tend to be evil and metallic dragons tend to be good.</p>
<h4>Anathema</h4>
<p>Defying a dragon of your chosen type or letting a personal insult against you slide is anathema to your totem.</p>
<h4>Draconic Rage (Totem Ability)</h4>
<ul>
    <li>When you are Raging, you can make your conditional bonus to damage deal the type of damage to your chosen dragon's breath weapon, rather than your weapon or unarmed attack's usual damage type, which increases the damage by 1 (after halving for agile weapons, if applicable). If you do this, your Rage Action gains the Arcane and Evocation traits, as well as the trait matching the damage type.</li>
    <li>You gain Advantage on Diplomacy with dragons of your chosen type.</li>
    <li>At 5th level, While Raging, you may cast Dragon Breath 1/day</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Bludgeoning</li>
    <li>Piercing</li>
    <li>Slashing</li>
    <li>The damage type of your chosen dragon's breath weapon</li>
</ul>
<table>
    <thead>
        <tr>
            <th>Dragon</th>
            <th>Type</th>
            <th>Breath Weapon</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Black</td>
            <td>Chromatic</td>
            <td>Line of Acid</td>
        </tr>
        <tr>
            <td>Blue</td>
            <td>Chromatic</td>
            <td>Line of Electricity</td>
        </tr>
        <tr>
            <td>Green</td>
            <td>Chromatic</td>
            <td>Cone of Poison</td>
        </tr>
        <tr>
            <td>Red</td>
            <td>Chromatic</td>
            <td>Cone of Fire</td>
        </tr>
        <tr>
            <td>White</td>
            <td>Chromatic</td>
            <td>Cone of Cold</td>
        </tr>
        <tr>
            <td>Brass</td>
            <td>Metallic</td>
            <td>Line of Fire</td>
        </tr>
        <tr>
            <td>Bronze</td>
            <td>Metallic</td>
            <td>Line of Electricity</td>
        </tr>
        <tr>
            <td>Copper</td>
            <td>Metallic</td>
            <td>Line of Acid</td>
        </tr>
        <tr>
            <td>Gold</td>
            <td>Metallic</td>
            <td>Cone of Fire</td>
        </tr>
        <tr>
            <td>Silver</td>
            <td>Metallic</td>
            <td>Cone of Cold</td>
        </tr>
    </tbody>
</table>";
        $feat->save();
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Dragon Breath'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Fury Totem';
        $feat->description = "<p>Your rage comes from a deep well within you, rather than from an external source. You use your rage as you choose.</p>
<h4>Anathema</h4>
<p>You don't have an anathema or totem ability.</p>
<ul>
    <li>You gain an additional Barbarian Feat.</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Bludgeoning</li>
    <li>Piercing</li>
    <li>Slashing</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);

        $feat              = new Feat;
        $feat->name        = 'Giant Totem';
        $feat->description = "<p>Giants are towering exceptionally strong humanoids, and some tribes aspire to be like them. You rage gives you the raw power and size of a giant. This doesn't mean you revere giants--you might scoff at them, or even aspire to slay them!  It could be that you seem to other people like a giant due to your exceptional strength or larger-than-life emotions and ego.</p>
<h4>Anathema</h4>
<p>Failing to accept a personal challenge of your strength is anathema to your totem.</p>
<h4>Titan Mauler (Totem Ability)</h4>
<ul>
    <li>Increase your STR by +1, to a maximum of 20.</li>
    <li>You can use a weapon built for a Large creature if you are Small or Medium, you can use a weapon built for a creature one size larger than you. You also gain access to your choice of weapon at character creation. When you are wielding such a weapon in combat, double your conditional bonus to damage rolls from raging, but you have the Sluggish 1 Condition because of the weapon's unwieldy size. You can't remove this sluggish condition or ignore its penalties by any means while you're wielding the weapon.</li>
    <li>You gain Advantage on all STR Saves and STR checks</li>
    <li>At 5th level, you may cast Enlarge 1/day only on yourself. The spell gains the Rage trait and you must be Raging to cast this spell</li>
    <li>You deal an additional Weapon Die of damage vs Giants</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Bludgeoning</li>
    <li>Piercing</li>
    <li>Slashing</li>
    <li>
        <p>Your chosen damage type (though you can retrain it later)</p>
        <ul>
            <li>Cold</li>
            <li>Electricity</li>
            <li>Fire</li>
        </ul>
    </li>
</ul>";
        $helper->addTypesToFeat($feat, ['Totem', 'Rage', 'Ability Boost']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Enlarge' => 'Self only'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Spirit Totem';
        $feat->description = "<p>Whether you are emotionally sensitive to the activity of spirits around you, belong to a shamanic tribe that worships ancestors or apparitions, or are haunted by a specter of an ancestor, relative, friend, or foe, your rage takes the form of a spiritual possession.</p>
<h4>Anathema</h4>
<p>Disrespecting corpses or spirits that are in your presence is anathema to your totem, however, defending yourself against undead and outer planar creatures is not.</p>
<h4>Spirit Rage (Totem Ability)</h4>
<ul>
    <li>When you are Raging, you gain the following
        <ul>
            <li>you can make your conditional bonus to damage deal Negative or Positive damage, rather than your weapon or Unarmed Attack's usual damage type (you choose which type each time you Rage). If you choose to do this, your weapon or Unarmed Attack affects material and incorporeal creatures and objects equally.. If you choose to deal Negative or Positive damage, your Rage action gains the Divine and Necromancy traits, plus the Negative or Positive trait, as appropriate</li>
            <li>Your Melee Attacks gain the effects of a Ghost Touch Spell.</li>
            <li>You have Advantage against Spells and Spell-like effects from undead and Other Planar creatures</li>
        </ul>
    </li>
    <li>As a Triple Action, you may cast Detect Ghost at will</li>
    <li>At 5th level, 1/week, you may cast Speak with Dead</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Piercing</li>
    <li>Slashing</li>
    <li>Negative damage</li>
    <li>Any damage dealt by the attacks and abilities of undead and outer planar creatures, regardless of the damage type</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Detect Ghost'],
            2 => ['Speak with Dead'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Superstition Totem';
        $feat->description = "<p>A deep distrust of magic drives you to forgo the metaphysical nonsense of spellcasters. Whether you're a member of a superstitious tribe that distrusts magic, a survivor of a magical accident that left your mind and body with an intense aversion to magic, or a scion of a bloodline known for its magic resistance, your Rage is inimical to magic. This makes you an excellent mage hunter but slow to trust practitioners of magical arts. You're extremely restrictive anathema grants you powers beyond those of other totems.</p>
<h4>Anathema</h4>
<p>Willingly accepting the effects of magic spells (including from scrolls, wands, and the like), even from your allies, is anathema to your totem. You can still drink potions, and you can still invest and activate most magic items you find, though items that cast spells are subject to the same restrictions as all other spells. If an ally insists on using magic on you despite your unwillingness, and you have no reason to believe they will stop, continuing to travel with that ally counts as willingly accepting their spells (as do similar circumstances) and thus is also anathema to your totem.</p>
<h4>Superstition Resistance (Totem Ability)</h4>
<ul>
    <li>While Raging, you gain Advantage on all Saves vs all Spells.</li>
    <li>While Raging, you deal an additional +5 to Damage vs any creature that has a magical nature (constructs, dragons, fey, outsiders, and undead) and humanoids that are obviously spell casters (you must be aware that they are spell casters)</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Bludgeoning</li>
    <li>Piercing</li>
    <li>Slashing</li>
    <li>All Arcane and Divine spells that deal damage, regardless of the type of damage dealt by the spell</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);

        $feat              = new Feat;
        $feat->name        = 'Defensive Stance';
        $feat->description = "<p>Your Rage is directed towards defending against hordes of attackers.</p>
<h4>Anathema</h4>
<p>You don't have an anathema or totem ability. Instead, your Rage benefits are as follows.</p>
<ul>
    <li>Gain a +2 bonus to STR</li>
    <li>Gain a +4 bonus to CON</li>
    <li>You gain a +2 bonus to your AC</li>
    <li>You cannot change your position or take any Action that shifts your position (such as Move Silently or Jump)</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Bludgeoning</li>
    <li>Piercing</li>
    <li>Slashing</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Totem', 'Rage', 'Concentrate']);

        $feat              = new Feat;
        $feat->name        = 'Extra Rage';
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>You may Rage an additional time before having to take a Long Rest.</li>
    <li>At the end of your Rage, you may make a DC 15 CON Check. If you succeed, your Rage lasts an additional round and the DC to continue your Rage increases by +1.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Rage']);
        $feat->features()->save(app()->features['rage']);

        $feat              = new Feat;
        $feat->name        = 'Critical Brutality';
        $feat->description = '<p>While you are Raging, you gain access to the critical specialization effect for any melee weapon or unarmed attack you have.</p>';
        $helper->addTypesToFeat($feat, ['Rage']);

        $feat              = new Feat;
        $feat->name        = 'Mighty Rage';
        $feat->trigger     = 'You use the Rage action';
        $feat->description = '<p>When you Rage, you gain the following benefits instead.</p>
<ul>
    <li>Gain a +4 bonus to STR</li>
    <li>You gain 30 Temporary Hit Points</li>
    <li>No penalty to AC</li>
    <li>Gain a +2 bonus to DEX and WIS Saves</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Rage']);
        $feat->features()->save(app()->features['rage']);

        $feat              = new Feat;
        $feat->name        = 'Tireless Rage';
        $feat->description = "<p>You don't become Fatigued after you stop Raging. It still takes the normal amount of time before you can use Rage again.</p>";
        $helper->addTypesToFeat($feat, ['Rage']);
        $feat->features()->save(app()->features['rage']);

        $feat              = new Feat;
        $feat->name        = 'Devastating Strikes';
        $feat->description = "<p>Your Strikes are so devastating that you hardly care about wielding the best weapon against each monster.</p>
<p>If you succeed at a melee Strike against a creature with resistance against the physical damage type of the weapon or unarmed attack you're using, reduce that resistance by twice your CON modifier (minimum 0).</p>";
        $helper->addTypesToFeat($feat, ['Melee']);

        $feat              = new Feat;
        $feat->name        = 'Raging Spellcaster';
        $feat->description = '<p>When you take this feat, select 3 spells that you know. Those spells gain the Rage type.</p>
<p>You may take this feat multiple times, select 3 new spells each time.</p>';
        $helper->addTypesToFeat($feat, ['Rage']);
        $feat->parent_feats()->save(Feat::where('name', 'Extra Rage')->first());

        // Rashemen feats
        $feat              = new Feat;
        $feat->name        = 'Ettercap Berserker';
        $feat->requirement = 'You must be from the region of Rashemen';
        $feat->description = '<p>The intense physical training required to join your lodge has made you tougher.</p>
<h4>Anathema</h4>
<p>Failing to accept a personal challenge to your endurance is anathema to your lodge.</p>
<h4>Totem Ability</h4>
<ul>
    <li>Increase your CON by +1, to a maximum of 20.</li>
    <li>You gain the Endurance Feat.</li>
    <li>You gain Damage Reduction +1.</li>
    <li>You have Advantage on all Saves vs Poison.</li>
    <li>You gain a +4 bonus to all Climb checks.</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Bludgeoning</li>
    <li>Piercing</li>
    <li>Slashing</li>
    <li>Poison</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Totem', 'Rage']);

        $feat              = new Feat;
        $feat->name        = 'Fox Berserker';
        $feat->requirement = 'You must be from the region of Rashemen';
        $feat->description = '<p>Popular among the more populated regions of Rashemen, this lodge is known for their guerrilla fighting tactics. When going into battle, Fox Lodge berserkers frequently wear cowls made of leather or fur.</p>
<h4>Anathema</h4>
<p>You do not have an Anathema.</p>
<h4>Totem Ability</h4>
<ul>
    <li>You gain the Mobile Feat</li>
    <li>You gain the Skirmish Feat</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Piercing</li>
    <li>Slashing</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);

        $feat              = new Feat;
        $feat->name        = 'Great Stag Berserker';
        $feat->requirement = 'You must be from the region of Rashemen, and you must have at least 1 level of Paladin';
        $feat->description = '<p>Your lodge is dedicated to the defense of Rashemen.</p>
<p>One of the first 2 lodges established, this lodge is gifted with the Fey Princes blessing.</p>
<p>Warriors from this lodge are usually the ones Hathrans prefer to form a bond with.</p>
<h4>Anathema</h4>
<p>Not accepting a quest in the service of Rashemen is anathema to your lodge.</p>
<ul>
    <li>You may use your class Feats from Barbarian to take Divine Warrior feats and vice versa.</li>
    <li>you may cast Smite spells while Raging (Smite spells gain the Rage Type).</li>
    <li>You may Concentrate on Aura spells while Raging (Aura spells gain the Rage Type).</li>
    <li>You gain the Divine Mount Feat.</li>
    <li>You may add the Telthor Companion Template to your Special Mount, and you become its anchor location. Most Great Stag Berserker take a stag for their Special Mount.</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Bludgeoning</li>
    <li>Slashing</li>
    <li>Piercing</li>
    <li>Negative Damage</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);
        $feat->features()->save(app()->features['divine_warrior']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Barkskin', 'Pass Without Trace'],
            3 => ['Enemies Abound', 'Aura of War'],
            4 => ['Death Ward', 'Freedom of Movement'],
            5 => ['Far Step', 'Destructive Wave'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Ice Troll Berserker';
        $feat->requirement = 'You must be from the region of Rashemen. You must take at least 1 level of Frenzied Berserker Prestige class as soon as you qualify';
        $feat->description = "<p>Your lodge believes in absolute abandon in combat and the destruction of all trolls and hags. Many Ice Troll berserkers take the Frenzied Berserker prestige class.</p>
<p>This lodge was the first lodge that the Fey Prince accepted that was formed by the people of Rashemen (the ones before were formed with the guidance of the Fey Prince himself). The Fey Prince liked the sheer abandon members of this lodge takes in battle, and approves of the destruction of trolls. While he considers hags to be part of his court, in truth, few are and most count themselves members of Aurilandur's court.</p>
<h4>Anathema</h4>
<p>Not seeking out a known troll or hag infestation in Rashemen is anathema to your lodge</p>
<ul>
    <li>You gain the Favored Enemy Feature vs. Trolls and Hags</li>
    <li>While you are in a Rage and Frenzy at the same time, you gain Regeneration: 1</li>
    <li>You gain the Extra Rage Feat</li>
    <li>Once per day, you may cast the spell Troll's Bane as a Double Action, and it gains the Rage Type.</li>
    <li>You have Advantage on all Saves vss Spells and Spell-like effects of Hags.</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Bludgeoning</li>
    <li>Piercing</li>
    <li>Slashing</li>
    <li>Cold</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);
        $helper->addSpellsToFeat($feat, [
            1 => ["Troll's Bane"],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Owlbear Berserker';
        $feat->requirement = 'You must be from the region of Rashemen';
        $feat->description = '<p>Your lodge practices wrestling and grappling.</p>
<h4>Anathema</h4>
<p>You cannot refuse a challenge to a wrestling match.</p>
<ul>
    <li>Increase your STR by 1, up to a maximum of 20.</li>
    <li>You gain the Improved Grapple Feat</li>
    <li>You have Advantage to all Grappling checks while Raging.</li>
    <li>You gain a Talent that requires the Improved Grapple Feat.</li>
    <li>If you have the Extra Rage Feat, the DC to continue your Rage starts at 12.</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Bludgeoning</li>
    <li>Piercing</li>
    <li>Slashing</li>
    <li>Grapple Damage</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Totem', 'Rage', 'Ability Boost', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Snow Tiger Berserker';
        $feat->requirement = 'You must be from the region of Rashemen';
        $feat->description = "<p>Your lodge trains in combat using the Claw Bracers</p>
<h4>Anathema</h4>
<p>You cannot use any Ranged Weapons and you cannot make Ranged Attacks.</p>
<ul>
    <li>When taking the Charging Action, your gain a +5 bonus to your Speed.</li>
    <li>You gain a Talent.</li>
    <li>You gain Advantage on Stealth checks for Hide and Move Silently.</li>
    <li>You gain the Two-Weapon Fighter Feat.</li>
    <li>
        <p>Replace your Rage abilities with the following</p>
        <ul>
            <li>When you are Raging, you gain an additional Action. This additional Action can only be used to take Stride Actions.</li>
            <li>You gain a +1 Dodge bonus to AC</li>
            <li>If you have the Lightning Reflexes feat, you gain the benefits of the Evasion feat. If you have the Evasion feat, you gain the benefits of the Improved Evasion feat.</li>
            <li>You can't use Actions that have the Concentrate trait unless it also has the Rage trait. The Seek basic Action gains the Rage trait while you're raging.</li>
            <li>The conditions for how long your Rage lasts and what happens after your Rage ends and how many times you may Rage stays the same.</li>
            <li>
                <p>If you gain the Mighty Rage feat, you instead gain the following</p>
                <ul>
                    <li>You gain an additional Action. This additional Action can only be used to make Melee Weapon attacks.</li>
                    <li>You gain a +2 bonus to DEX Saves</li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Bludgeoning</li>
    <li>Piercing</li>
    <li>Slashing</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Totem', 'Rage', 'Extra Action', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Wolf Berserker';
        $feat->requirement = 'You must be from the region of Rashemen. You must have at least 1 level of Ranger';
        $feat->description = "<p>Your lodge is dedicated to the warding of the wilder parts of Rashemen.</p>
<p>One of the first 2 lodges established, this lodge is gifted with the Fey Princes blessing.</p>
<p>Warriors from this lodge come from those that do well working alone. They are loved by the animal spirits and quite frequently receive silent aid from the shy fey of Rashemen.</p>
<h4>Anathema</h4>
<p>Abandoning your post to ward the wilder parts of Rashemen is anathema to you unless ordered by a Wychlaren of rank Hathran or higher or the Huhrong.</p>
<ul>
    <li>You gain the Improved Trip Feat</li>
    <li>You gain two Talents, one of them is the Improved Flanking Talent and one of your choice</li>
    <li>You gain the ability to cast Cure Wounds once per day but only on you Animal Companion</li>
    <li>Your Animal Companion may gain the Telthor Companion Template, and you become its anchor location</li>
    <li>While Raging, all your bonuses from Favored Enemy is increased by +1</li>
    <li>While Raging, Hunter's Mark gains the Rage trait.</li>
    <li>While Raging, your Animal Companion gains a +2 to Damage</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Bludgeoning</li>
    <li>Piercing</li>
    <li>Slashing</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);
        $feat->features()->save(app()->features['favored_enemy']);
        $helper->addSpellsToFeat($feat, [
            1 => ['Cure Wounds', 'Shield'],
            2 => ['Absorb Elements', 'Misty Step'],
            3 => ['Aura of Vitality', 'Spirit Guardians'],
            4 => ['Death Ward', 'Freedom of Movement'],
            5 => ['Dispel Evil', 'Tree Stride'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Ankheg Tribe';
        $feat->requirement = 'You must be from the region of the Shaar and a member of the Ankheg tribe';
        $feat->description = '<p>Your tribe has learned from the ankheg.</p>
<p>You adopt the ankheg as your symbol and adopt a fighting style similar to the monstrous beast, in which you hide in long grass, lying prone before springing a surprise attack.</p>
<h4>Anathema</h4>
<p>You do not have an Anathema</p>
<ul>
    <li>You gain the Favored Terrain Feature (Grasslands)</li>
    <li>If you have 5 or more ranks in Crafting (Leather Working), you know how to create Ankheg armor (Hide armor protection with Studded Leather penalties)</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Piercing</li>
    <li>Poison</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);

        $feat              = new Feat;
        $feat->name        = 'Cheetah Tribe';
        $feat->requirement = 'You must be from the region of the Shaar and a member of the Cheetah tribe';
        $feat->description = '<p>Your tribe has learned to mimic the speed of the Cheetah.</p>
<h4>Anathema</h4>
<p>You do not have an Anathema</p>
<ul>
    <li>You gain the Improved Trip Feat</li>
    <li>You gain an additional Action. This additional Action can only be used to make Stride or Charge Actions if you are not wearing Medium or Heavy armor and you are not Encumbered.</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Piercing</li>
    <li>Slashing</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Totem', 'Rage', 'Extra Action']);

        $feat              = new Feat;
        $feat->name        = 'Eagle Tribe';
        $feat->requirement = 'You must be from the region of the Shaar and a member of the Eagle tribe';
        $feat->description = '<p>Your tribe has learned from the eagle.</p>
<h4>Anathema</h4>
<p>You do not have an Anathema</p>
<ul>
    <li>You gain a +5 bonus on all Perception checks</li>
    <li>You gain a +1 bonus to Hit on all Ranged attacks</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Piercing</li>
    <li>Slashing</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);

        $feat              = new Feat;
        $feat->name        = 'Hyena Tribe';
        $feat->requirement = 'You must be from the region of the Shaar and a member of the Hyena tribe';
        $feat->description = '<p>Your tribe has learned from the hyena</p>
<h4>Anathema</h4>
<p>You do not have an Anathema</p>
<ul>
    <li>You gain the Improved Trip Feat</li>
    <li>You gain the Improved Flanking Talent</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Piercing</li>
    <li>Slashing</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);

        $feat              = new Feat;
        $feat->name        = 'Lion Tribe';
        $feat->requirement = 'You must be from the region of the Shaar and a member of the Lion tribe';
        $feat->description = '<p>Your tribe has learned from the lion</p>
<h4>Anathema</h4>
<p>You do not have an Anathema</p>
<ul>
    <li>If you hit the same target 2 or more times with Melee attacks, then you gain an Additional Action. This Additional Action can only be used to make a Melee Weapon attack against the same target.</li>
    <li>You gain the Improved Flanking Talent</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Piercing</li>
    <li>Slashing</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Totem', 'Rage', 'Extra Action']);

        $feat              = new Feat;
        $feat->name        = 'Rhinoceros Tribe';
        $feat->requirement = 'You must be from the region of the Shaar and a member of the Rhinoceros tribe';
        $feat->description = '<p>Your tribe has learned from the rhinoceros</p>
<h4>Anathema</h4>
<p>You do not have an Anathema</p>
<ul>
    <li>Whenever you make a Charge attack, if you hit, you deal an additional 2D6 Bludgeoning damage</li>
    <li>You gain Damage Reduction 1, this stacks with Damage Reduction from Light Armor</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Piercing</li>
    <li>Slashing</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Totem', 'Rage']);

        $feat              = new Feat;
        $feat->name        = 'Dwarven Battle Rager';
        $feat->requirement = 'You must be a dwarf';
        $feat->description = '<p>You are trained in the Dwarven style of Battle Ragers. Known as Kuldjargh in dwarvish (which translates to "Axe Idiot").</p>
<h4>Anathema</h4>
<p>You must serve a dwarven kingdom or crown</p>
<ul>
    <li>Increase your CON by +1, to a maximum of 20</li>
    <li>You gain the Die Hard Talent</li>
    <li>You gain proficiency in Heavy Armor</li>
    <li>You gain the Improved Grapple Feat</li>
</ul>
<h4>Resistance</h4>
<ul>
    <li>Bludgeoning</li>
    <li>Piercing</li>
    <li>Slashing</li>
    <li>Poison</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Totem', 'Rage', 'Dwarf']);

        $feat              = new Feat;
        $feat->name        = 'Runescarring';
        $feat->requirement = 'You must have one of the Rashemi Lodge Feats';
        $feat->description = '<p>You have learned an ancient technique which involves scarring a magical rune into your skin.</p>
<p>When you gain this feat, pick 2 spells that this feat provides. After a Long Rest, you may scar a number of spells into your skin equal to the number of Runescarring feats that you have. You may cast these spells that you have scarred into your skin as a Double Action unless otherwise specified. Once a Scar Spell is cast, the scar no longer holds any magic and cannot be used again.</p>
<p>After a Short Rest, you may scar 1 spell into your skin, and after a Long Rest, you may scar a number of spells into your skin equal to the number of Runescarring feats that you have.</p>
<p>You may take this feat multiple times. Each time you gain this feat, select 2 more spells that this feat provides, and you may cast an additional spell this feat provides per day.</p>';
        $helper->addTypesToFeat($feat, ['Item Creation', 'Rage']);
        $helper->addSpellsToFeat($feat, [
            1 => ["Bear's Endurance", "Bull's Strength", "Cat's Grace", 'Cure Wounds' => 'Heightened +1', 'Darkvision',
                'Invisibility', 'Magic Weapon', ],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Improved Runescarring';
        $feat->description = '<p>You can scar more powerful spells into your body.</p>
<p>When you gain this feat, pick 2 spells that this feat provides. You may scar these spells into your skin as from Runescarring</p>
<p>You may take this feat multiple times. Each time you gain this feat, select 2 more spells that this feat provides.</p>
<p>Casting a spell that Runescarring provides is Heightened by +2</p>';
        $helper->addTypesToFeat($feat, ['Item Creation', 'Rage']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Elemental Weapon', 'Haste', 'Keen Edge', 'Giant Form', 'Blinding Smite' => 'As an Action'],
        ]);
        $feat->parent_feats()->save(app()->feats['Runescarring']);

        $feat              = new Feat;
        $feat->name        = 'Greater Runescarring';
        $feat->description = '<p>You can scar more powerful spells into your body.</p>
<p>When you gain this feat, pick 2 spells that this feat provides. You may scar these spells into your skin as from Runescarring.</p>
<p>You may take this feat multiple times. Each time you gain this feat, select 2 more spells that this provides.</p>
<p>Casting a spell that Runescarring provides is Heightened by +4 and spells that Improved Runescarring by +2</p>';
        $helper->addTypesToFeat($feat, ['Item Creation', 'Rage']);
        $helper->addSpellsToFeat($feat, [
            3 => ['Blink', 'Heroism' => 'Heightened +5', 'Restoration', 'Stoneskin', 'Spell Immunity'],
        ]);

        $helper->addFeatsToClass($class, [
            'Critical Brutality'   => 1,
            'Extra Rage'           => 5,
            'Mighty Rage'          => 11,
            'Tireless Rage'        => 17,
            'Tough Defense'        => 2,
            'Strong Defense'       => 2,
            'Power Attack'         => 2,
            'Improved Sunder'      => 2,
            'Improved Bull Rush'   => 2,
            'Iron Will'            => 2,
            'Cleave'               => 2,
            'Swipe'                => 3,
            'Great Cleave'         => 4,
            'Supreme Cleave'       => 12,
            'Brute Force'          => 7,
            'Improved Brute Force' => 12,
            'Mettle'               => 7,
            'Improved Mettle'      => 12,

            'Raging Spellcaster'       => 5,
            'Brutal Critical'          => 5,
            'Improved Brutal Critical' => 9,
            'Greater Brutal Critical'  => 13,
            'Devastating Strikes'      => 19,

            'Animal Totem'       => 1,
            'Dragon Totem'       => 1,
            'Fury Totem'         => 1,
            'Giant Totem'        => 1,
            'Spirit Totem'       => 1,
            'Superstition Totem' => 1,
            'Defensive Stance'   => 1,

            'Ettercap Berserker'   => 1,
            'Fox Berserker'        => 1,
            'Great Stag Berserker' => 1,
            'Ice Troll Berserker'  => 1,
            'Owlbear Berserker'    => 1,
            'Snow Tiger Berserker' => 1,
            'Wolf Berserker'       => 1,
            'Dwarven Battle Rager' => 1,

            'Runescarring'          => 4,
            'Improved Runescarring' => 8,
            'Greater Runescarring'  => 12,

            'Extra Melee Action'    => 5,
            'Extra Ranged Action'   => 7,
        ]);
    }
}
