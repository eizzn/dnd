<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $app        = app();
        $app->feats = [];
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $feat              = new Feat;
        $feat->name        = 'Arcane Sense';
        $feat->description = '<p>Your study of magic allows you to sense its presence around you instinctively.</p>
<ul>
    <li>You gain a +3 bonus to your Arcana checks.</li>
    <li>You can cast Detect Magic as a Triple Action at will.</li>
    <li>If you have the Diviner Feat, you can perceive the presence of magic passively and the range of Detect Magic is doubled.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Generic' => 1]);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 4]);
        $helper->addSpellsToFeat($feat, [
            0 => ['Detect Magic'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Alertness';
        $feat->description = "<ul>
    <li>Increase your WIS by 1, up to a maximum of 20.</li>
    <li>You gain a Talent</li>
    <li>You gain a +3 bonus to your Initiative</li>
    <li>You can't be surprised while you are conscious.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Skill', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Ancestral Paragon';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>Whether instinctively, through study, or through a mystic sense, you feel a deeper connection to your ancestry than most of those who share that ancestry. You gain an ancestry feat of your level or lower.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Assurance';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>Even in the worst circumstances, you can perform basic tasks with your skill. Choose a skill you have at least 2 ranks in when you first select this feat. You can forgo rolling a skill check for your chosen skill to instead receive a result of 10 (do not apply any of your bonuses, penalties, or modifiers).</li>
    <li>If you have at least 7 ranks in your chosen skill, you receive a result of 15; if you have at least 12 ranks, you receive a result of 20; and if you have at least 17 ranks, you receive a result of 30.</li>
    <li><strong>Special</strong> You can select this feat multiple times. Each time you do, you choose a different skill, and gain the benefits for the chosen skill.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Skill', 'Generic' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Automatic Knowledge';
        $feat->requirement = 'You must have 5 or more ranks in a Skill with the Recall Knowledge Action';
        $feat->description = '<ul>
    <li>Increase your INT by 1, up to a maximum of 20</li>
    <li>You know basic facts off the top of your head. Choose a skill you have at least 2 ranks in that has the Recall Knowledge action and that you have the Assurance feat in when you first select this feat. You can use the Recall Knowledge action for that skill as a free action once per round, triggering at either the start or the end of your turn; if you do, you must use Assurance on the skill check.</li>
    <li><strong>Special</strong> You can select this feat multiple times. Each time you do, you choose a different skill and gain the benefits for the chosen skill.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Skill', 'Generic' => 2]);
        $feat->parent_feats()->save(app()->feats['Assurance']);

        $feat              = new Feat;
        $feat->name        = 'Bonded Animal';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You can spend 7 days of downtime with a normal animal (CR 1/2 or less) and attempt to bond with it. At the end of the 7 days, attempt a DC 20 Nature check; if you succeed, you form a bond with the animal.</li>
    <li>Each week, you must spend at least 1 hour to reestablish your bond with the animal with the same DC 20 Nature check. Failure means the bond is lost but can be reestablished. After 10 consecutive successes, you no longer need to reestablish a bond with the animal.</li>
    <li>During combat, you can give an order to your bonded animal. You can use the Command an Animal Action to direct your bonded Animal.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Skill', 'Animal', 'Generic' => 2]);
        $feat->skills()->save(app()->skills['Nature'], ['dc' => 4]);

        $feat              = new Feat;
        $feat->name        = 'Disease Immunity';
        $feat->description = '<ul>
    <li>Increase your CON by 1, up to a maximum of 20.</li>
    <li>You are immune to Disease</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Disease']);

        $feat                    = new Feat;
        $feat->name              = 'Endurance';
        $feat->short_description = 'You have reserves of endurance far beyond those of normal people.';
        $feat->description       = '<ul>
    <li>Increase your CON by 1, up to a maximum of 20.</li>
    <li>You gain a +1 bonus to all CON Saves</li>
    <li>You ignore the effects of 1 level of Exhaustion</li>
    <li>
        You have Advantage on Athletics checks for the following
        <ul>
            <li>Avoid Exhaustion</li>
            <li>Hold your breath</li>
            <li>March for hours without rest</li>
            <li>Go without sleep</li>
            <li>Survive without food or water</li>
            <li>Avoid temporary damage (when applicable)</li>
        </ul>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Mobile';
        $feat->description = '<p>You are exceptionally speedy and agile. You gain the following benefits.</p>
<ul>
    <li>Your Speed increases by 5</li>
    <li>When you use the Stride Action, difficult terrain costs 5 less.</li>
    <li>When you make a melee attack against a creature, if you hit, that creature suffers a -5 penalty to any Attacks of Opportunity against you until the beginning of your next turn.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Stride', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Dodge';
        $feat->action_type = 'Free';
        $feat->requirement = 'You are aware of an opponent within 30 feet of you.';
        $feat->description = '<ul>
    <li>Increase your DEX score by 1, to a maximum of 20.</li>
    <li>You gain a Heroic Surge</li>
    <li>You gain a +1 Bonus to all attacks that you are aware of within 30 feet of you. If you take the Full Defense Action, this bonus becomes +2.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Impressive Strength';
        $feat->description = '<ul>
    <li>Increase your STR by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain a +3 Bonus to STR Saves.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Brute Force';
        $feat->description = '<ul>
    <li>Increase your STR by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain a +2 bonus on STR Checks</li>
    <li>When you succeed at a STR Save, treat it as a Critical Success.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 7]);
        $feat->attributes()->save(app()->attributes['STR'], ['dc' => 7]);
        $feat->parent_feats()->save(app()->feats['Impressive Strength']);

        $feat              = new Feat;
        $feat->name        = 'Improved Brute Force';
        $feat->description = '<ul>
    <li>Increase your STR by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain a +4 bonus to STR Checks. This replaces the bonus from Brute Force.</li>
    <li>When you Critically Fail a STR Save, treat it as a Failure instead. When you Fail a STR Save against an effect that deals damage, you halve the damage you take.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 13]);
        $feat->attributes()->save(app()->attributes['STR'], ['dc' => 15]);
        $feat->parent_feats()->save(app()->feats['Brute Force']);

        $feat              = new Feat;
        $feat->name        = 'Great Fortitude';
        $feat->description = '<ul>
    <li>Increase your CON by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain a +3 Bonus to CON Saves.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Mettle';
        $feat->description = '<ul>
    <li>Increase your CON by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>When you Succeed at a CON Save, treat it as a Critical Success.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 7]);
        $feat->attributes()->save(app()->attributes['CON'], ['dc' => 7]);
        $feat->parent_feats()->save(app()->feats['Great Fortitude']);

        $feat              = new Feat;
        $feat->name        = 'Improved Mettle';
        $feat->description = '<ul>
    <li>Increase you CON by 1, up to maximum of 20</li>
    <li>You gain a Talent</li>
    <li>When you Critically Fail a CON Save, treat it as a Failure. When you Fail a CON Save against an effect that deals damage, you halve the damage you take.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 13]);
        $feat->attributes()->save(app()->attributes['CON'], ['dc' => 15]);
        $feat->parent_feats()->save(app()->feats['Mettle']);

        $feat              = new Feat;
        $feat->name        = 'Iron Will';
        $feat->description = '<ul>
    <li>Increase your WIS by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>Your mental defenses are an iron fortress. You gain +3 bonus to WIS Saves.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Resolve';
        $feat->description = '<ul>
    <li>Increase your WIS by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>When you succeed at a WIS Save, treat it as a Critical Success.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 7]);
        $feat->attributes()->save(app()->attributes['WIS'], ['dc' => 7]);
        $feat->parent_feats()->save(app()->feats['Iron Will']);

        $feat              = new Feat;
        $feat->name        = 'Improved Resolve';
        $feat->description = '<ul>
    <li>Increase your WIS by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>When you Critically Fail a WIS Save, treat it as a Failure. When you Fail a WIS Save against an effect that deals damage, you halve the damage you take.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 13]);
        $feat->attributes()->save(app()->attributes['WIS'], ['dc' => 15]);
        $feat->parent_feats()->save(app()->feats['Resolve']);

        $feat              = new Feat;
        $feat->name        = 'Lightning Reflexes';
        $feat->description = '<ul>
    <li>Increase your DEX by 1, up to a maximum of 20</li>
    <li>You gain a Heroic Surge</li>
    <li>Your reflexes are lightning fast. Your gain a +3 bonus to DEX Saves.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Evasion';
        $feat->description = '<ul>
    <li>Increase your DEX by 1, up to a maximum of 20</li>
    <li>You gain a Heroic Surge</li>
    <li>When you Succeed at a DEX Save, treat the outcome as a Critical Success instead.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 7]);
        $feat->attributes()->save(app()->attributes['DEX'], ['dc' => 7]);
        $feat->parent_feats()->save(app()->feats['Lightning Reflexes']);

        $feat              = new Feat;
        $feat->name        = 'Improved Evasion';
        $feat->description = '<ul>
    <li>Increase your DEX by 1, up to a maximum of 20</li>
    <li>You gain a Heroic Surge</li>
    <li>When you Critically Fail a DEX Save, treat the outcome as a Failure instead. When you Fail a DEX Save against an effect deals damage, you take only half damage.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 13]);
        $feat->attributes()->save(app()->attributes['DEX'], ['dc' => 15]);
        $feat->parent_feats()->save(app()->feats['Evasion']);

        $feat              = new Feat;
        $feat->name        = 'Superior Intellect';
        $feat->description = '<ul>
    <li>Increase your INT by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You are quick thinking. Your gain a +3 bonus to INT Saves.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Quick Mind';
        $feat->description = '<ul>
    <li>Increase your INT by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain a +2 Bonus to INT Checks</li>
    <li>When you Succeed at an INT Save, treat the outcome as a Critical Success instead.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 7]);
        $feat->attributes()->save(app()->attributes['INT'], ['dc' => 7]);
        $feat->parent_feats()->save(app()->feats['Superior Intellect']);

        $feat              = new Feat;
        $feat->name        = 'Improved Quick Mind';
        $feat->description = '<ul>
    <li>Increase your INT by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain a +4 Bonus to INT Checks. This replaces the Bonus from Quick Mind.</li>
    <li>When you Critically Fail an INT Save, treat the outcome as a Failure instead. When you fail an INT Save against an effect deals damage, you take only half damage.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 13]);
        $feat->attributes()->save(app()->attributes['INT'], ['dc' => 15]);
        $feat->parent_feats()->save(app()->feats['Quick Mind']);

        $feat              = new Feat;
        $feat->name        = 'Stunning Personality';
        $feat->description = '<ul>
    <li>Increase your CHA by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You exude confidence. Your gain a +3 bonus to CHA Saves.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Stubborn';
        $feat->description = '<ul>
    <li>Increase your CHA by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain a +2 Bonus to CHA Checks.</li>
    <li>When you Succeed at a CHA Save, treat the outcome as a Critical Success instead.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 7]);
        $feat->attributes()->save(app()->attributes['CHA'], ['dc' => 7]);
        $feat->parent_feats()->save(app()->feats['Stunning Personality']);

        $feat              = new Feat;
        $feat->name        = 'Improved Stubborn';
        $feat->description = '<ul>
    <li>Increase your CHA by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain a +4 Bonus to CHA Checks. This replaces the Bonus from Stubborn.</li>
    <li>When you Critically Fail a CHA Save, treat the outcome as a Failure instead. When you fail a CHA Save against an effect deals damage, you take only half damage.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Generic' => 13]);
        $feat->attributes()->save(app()->attributes['CHA'], ['dc' => 15]);
        $feat->parent_feats()->save(app()->feats['Stubborn']);

        $feat              = new Feat;
        $feat->name        = 'Strong Defense';
        $feat->requirement = 'You are wearing Light Armor and wielding a non-Shield Martial Melee weapon of Medium size or larger';
        $feat->description = '<ul>
    <li>Increase your STR score by 1, to a maximum of 20</li>
    <li>While you are wearing only Light Armor and have a Martial Melee weapon in hand, you gain Damage Reduction equal to your STR modifier. This Damage Reduction stacks with the Damage Reduction from the Light Armor. You can use a Shield and still gain this benefit.</li>
    <li>You may benefit from only one Unarmored Defense Feat at any time</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Unarmored Defense']);
        $feat->parent_feats()->save(app()->feats['Brute Force']);

        $feat              = new Feat;
        $feat->name        = 'Tough Defense';
        $feat->requirement = 'You are not wearing any armor';
        $feat->description = '<ul>
    <li>Increase your CON score by 1, to a maximum of 20</li>
    <li>While you are not wearing any armor, you gain Damage Reduction equal to your CON modifier. You can use a Shield and still gain this benefit. This Damage Reduction stacks with any other Damage Reduction from other sources (ie. Rage)</li>
    <li>You may benefit from only one Unarmored Defense feat at any time</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Unarmored Defense']);
        $feat->parent_feats()->save(app()->feats['Great Fortitude']);

        $feat              = new Feat;
        $feat->name        = 'Uncanny Defense';
        $feat->requirement = 'You are not wearing Medium or Heavy armor and not holding a Shield';
        $feat->description = '<ul>
    <li>Increase your INT score by 1, to a maximum of 20</li>
    <li>While you are not wearing Medium or Heavy armor and you are only weilding weapons with the Finesse trait (or unarmed), add your INT modifier to your AC.</li>
    <li>You may benefit from only one Unarmored Defense feat at any time</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Unarmored Defense']);
        $feat->parent_feats()->save(app()->feats['Quick Mind']);

        $feat              = new Feat;
        $feat->name        = 'Wise Defense';
        $feat->requirement = 'You are not wearing any armor or Shield';
        $feat->description = '<ul>
    <li>Increase your WIS score by 1, to a maximum of 20</li>
    <li>While you are not wearing any armor or Shield, add your WIS modifier to your AC.</li>
    <li>You may benefit from only one Unarmored Defense feat at any time</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Unarmored Defense']);
        $feat->parent_feats()->save(app()->feats['Iron Will']);

        $feat              = new Feat;
        $feat->name        = 'Beautiful Defense';
        $feat->requirement = 'You are not wearing any Medium or Heavy armor (no head gear that covers the face)';
        $feat->description = '<ul>
    <li>Increase your CHA score by 1, to a maximum of 20</li>
    <li>While you are not wearing Medium or Heavy armor, add your CHA modifier to your AC. You must not have any gear or effect that obscures your face.</li>
    <li>You may benefit from only one Unarmored Defense feat at any time</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Unarmored Defense']);
        $feat->parent_feats()->save(app()->feats['Stunning Personality']);

        $feat              = new Feat;
        $feat->name        = 'Improved Initiative';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You react more quickly than others can in any situation. You gain a +5 circumstance bonus to all initiative rolls.</li>
    <li>As an Action, you may modify your initiative by +/- 2</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Melee', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Improved Unarmed Strike';
        $feat->description = '<p>You are considered to be armed even when unarmed - that is, you do not provoke Attacks of Opportunity from armed opponents when you attack them while unarmed.</p>
<p>However, you still get an Attack of Opportunity against any opponent who makes an Unarmed Attack on you. In addition, your Unarmed Strikes can deal Lethal or Nonlethal damage, at your option.</p>
<li>You gain a +1 Dodge bonus to your AC</li>
<table>
    <thead>
        <tr>
            <th>Size</th>
            <th>Damage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiny</td>
            <td>1D2</td>
        </tr>
        <tr>
            <td>Small</td>
            <td>1D4</td>
        </tr>
        <tr>
            <td>Medium</td>
            <td>1D6</td>
        </tr>
        <tr>
            <td>Large</td>
            <td>1D8</td>
        </tr>
        <tr>
            <td>Huge</td>
            <td>1D12</td>
        </tr>
    </tbody>
</table>';
        $helper->addTypesToFeat($feat, ['Melee', 'Unarmed', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Inventor';
        $feat->description = "<p>You are a genius at Crafting, easily able to determine how things are made and create new inventions.</p>
<ul>
    <li>Increase you INT score by 1, up to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You can spend downtime to invent a common formula that you don't know. This works just like the Craft skill: you spend a number of days in preparation and half the Price of the formula up front, roll a Crafting check, and on a success either finish the formula by paying the difference or work for longer to decrease the Price. The difference is that you spend the additional time in research, design, and development, rather than in creating an item.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Downtime', 'Skill', 'Generic' => 7]);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 8]);

        $feat              = new Feat;
        $feat->name        = 'Mage Slayer';
        $feat->description = '<p>You have practiced techniques useful in melee combat against spellcasters, gaining the following benefits</p>
<ul>
    <li>You gain a Talent</li>
    <li>When a creature within 5 feet of you casts a spell, you gain a Reaction. You may only gain 1 Reaction per turn. You can use a Reaction to make an Attack of Opportunity to make a melee weapon attack against that creature, even if they are casting defensively.</li>
    <li>When you damage a creature that is Concentrating on a spell, that creature suffers a Disadvantage on the check to maintain its Concentration.</li>
    <li>You gain a +5 bonus to Saves vs spells cast by creatures within 5 feet of you.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Generic' => 3]);

        $feat              = new Feat;
        $feat->name        = 'Petrification Resistance';
        $feat->description = '<p>You are better at resisting Petrification effects.</p>
<ul>
    <li>You gain a Talent</li>
    <li>You gain Advantage to all Saves vs. Petrification</li>
    <li>If you Failed your initial Save and if the Petrifying effect does not allow a second Save, then you gain a Second Save attempt the next turn.</li>
</ul>';
        $helper->addTypesToFeat($feat);

        $feat              = new Feat;
        $feat->name        = 'Poison Resistance';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You gain Advantage on all Saves vs Poison</li>
    <li>You have Resistance to Poison Damage</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Poison']);
        $feat->attributes()->save(app()->attributes['CON'], ['dc' => 12]);

        $feat              = new Feat;
        $feat->name        = 'Skilled';
        $feat->description = '<ul>
    <li>Pick a skill. That skill is now considered a class skill for all classes you have levels in.</li>
    <li>You gain 5 Skill Points. You must spend at least 1 of these Skill Points on the new skill.</li>
    <li>You may take this feat multiple times.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Skill', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Impeccable Skill';
        $feat->description = "<ul>
    <li>You gain 5 Skill Points</li>
    <li>Choose a Skill you've chosen with the Skilled feat. When you make skill checks with the chosen skill, treat Critical Failures as Failures.</li>
    <li>You may take this feat multiple times, each time choosing a different skill you have taken with the Skilled feat.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Skill', 'Generic' => 2]);
        $feat->parent_feats()->save(Feat::where('name', 'Skilled')->firstOrFail());

        $feat              = new Feat;
        $feat->name        = 'Masterful Skill';
        $feat->description = "<ul>
    <li>You gain 5 Skill Points</li>
    <li>Choose a Skill you've chosen with the Impeccable Skill feat. When you make a Skill Check with the chosen skill, treat Successes as Critical Successes</li>
    <li>You may take this feat multiple times, each time choosing a different skill you have taken with the Impeccable Skill feat.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Skill', 'Generic' => 2]);
        $feat->parent_feats()->save(Feat::where('name', 'Impeccable Skill')->firstOrFail());

        $feat              = new Feat;
        $feat->name        = 'Observant';
        $feat->description = '<ul>
    <li>Increase your INT or WIS by 1, to a maximum of 20</li>
    <li>You gain Advantage on your passive Perception and Investigation checks.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Skill', 'Generic' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Spell Pool';
        $feat->description = '<p>You gain a pool of Spell Points based on your Primary ability (1 + your Primary ability bonus, minimum of 1 point total).</p>
<p>You cannot spend more Spell Points in a turn then your Character Level.</p>';
        $helper->addTypesToFeat($feat, ['Spell Pool', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Extend Spell Pool';
        $feat->description = '<p>You gain 5 Spell Points. You may gain this feat multiple times.</p>
<p>You cannot spend more Spell Points in a turn then your Character Level.</p>';
        $helper->addTypesToFeat($feat, ['Spell Pool', 'Arcane', 'Divine', 'Primal', 'Generic' => 6]);
        $feat->parent_feats()->save(app()->feats['Spell Pool']);

        $feat              = new Feat;
        $feat->name        = 'Alchemist';
        $feat->description = '<ul>
    <li>You gain 5 Skill Points</li>
    <li>You can use the Craft activity to create Alchemical items. When you select this feat, you immediately add the formulas for four common Alchemical items that you qualify for.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Alchemical', 'Item Creation', 'Downtime', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Snare Crafting';
        $feat->description = '<ul>
    <li>You gain 5 Skill Points</li>
    <li>You can use the Craft activity to create snares. When you choose this feat, you gain the formula for four common snares. If you have a formula book, you can put these formulas into the book.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Skill', 'Generic' => 1]);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Activate Magic Item';
        $feat->action_type = 'Action';
        $feat->description = '<p>You gain the ability to activate magic items, such as wands, and scrolls. Each magic item will specify what is required to activate it.</p>
<p>If you do not have the ability to cast spells, then you must make an Arcana check to activate the magic item. The DC is based on the level required to Craft the magic item.</p>';
        $helper->addTypesToFeat($feat, ['Manipulate', 'Skill', 'Generic' => 1]);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Magic Initiate';
        $feat->description = "<ul>
    <li>Choose a spell casting class as you take this feat. For Clerics, you must choose a God and you can choose from the spell list of that gods' priest (if they have one)</li>
    <li>You learn 2 cantrips from the spell list of the chosen class.</li>
    <li>You learn one 1st level spell from the spell list of the chosen class. You may cast this spell once per Long Rest without using any Spell Slots.</li>
    <li>
        Your spellcasting ability for these spells depends on the class you chose:
        <ul>
            <li>CHA for Bard or Sorcerer (Requires at least 2 ranks in Arcana)</li>
            <li>WIS for Cleric or Druid (Requires at least 2 ranks in Religion for Cleric or at least 2 ranks in Nature for Druid)</li>
            <li>INT for Wizard (Requires at least 2 ranks in Arcana)</li>
        </ul>
    </li>
</ul>";
        $helper->addTypesToFeat($feat, ['Arcane', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Arcane Background';
        $feat->requirement = 'You must have chosen the Wizard class for your Magic Initiate feat';
        $feat->description = '<ul>
    <li>You learn one 2nd level spell from the Wizard spell list. You may cast this spell once per Long Rest without using any Spell Slots.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Ancestry', 'Elf' => 3, 'Generic' => 4]);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 4]);
        $feat->parent_feats()->save(app()->feats['Magic Initiate']);

        $feat              = new Feat;
        $feat->name        = 'Improved Arcane Background';
        $feat->description = '<ul>
    <li>You learn one 3rd level spell from the Wizard spell list. You may cast this spell once per Long Rest without using any Spell Slots.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Ancestry', 'Elf' => 6, 'Generic' => 7]);
        $feat->parent_feats()->save(app()->feats['Arcane Background']);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 6]);

        $feat              = new Feat;
        $feat->name        = 'Greater Arcane Background';
        $feat->description = '<ul>
    <li>You learn one 4th level spell from the Wizard spell list. You may cast this spell once per Long Rest without using any Spell Slots.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Ancestry', 'Elf' => 8, 'Generic' => 9]);
        $feat->parent_feats()->save(app()->feats['Improved Arcane Background']);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 10]);

        $feat              = new Feat;
        $feat->name        = 'Master Arcane Background';
        $feat->description = '<ul>
    <li>You learn one 5th level spell from the Wizard spell list. You may cast this spell once per Long Rest without using any Spell Slots.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Ancestry', 'Elf' => 10, 'Generic' => 11]);
        $feat->skills()->save(app()->skills['Arcana'], ['dc' => 14]);
        $feat->parent_feats()->save(app()->feats['Greater Arcane Background']);

        $feat              = new Feat;
        $feat->name        = 'Expanded Spell Slot';
        $feat->description = '<p>You gain an extra Spell Slot one level lower than your highest level Spell Slot (minimum 1st Level).</p>
<blockquote>
    Ex. An 8th level Wizard takes this feat for the first time. He gains a 3rd level Spell Slot since his current highest level Spell Slot is 4th.
    If the Wizard becomes 9th level, the extra Spell Slot would be a 4th level Spell Slot, since his new highest level Spell Slot is now 5th.
</blockquote>
<p>You may take this feat any number of times.</p>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Divine', 'Primal', 'Generic' => 6]);

        $feat              = new Feat;
        $feat->name        = 'Improved Expanded Spell Slot';
        $feat->description = '<p>You gain an extra Spell Slot equal to your highest level Spell Slot.</p>
<p>You may take this feat any number of times.</p>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Divine', 'Primal', 'Generic' => 12]);
        $feat->parent_feats()->save(app()->feats['Expanded Spell Slot']);

        $feat              = new Feat;
        $feat->name        = 'Greater Expanded Spell Slot';
        $feat->description = '<ul>
    <li>
        You gain an extra Spell Slot one level higher than your highest level Spell Slot
        <blockquote>
            Ex. An 18th level Wizard takes this feat for the first time. He gains a 10th level Spell Slot since his current highest level Spell Slot is 9th.
            If he were to take this feat again, he would gain an 11th level Spell Slot.
        </blockquote>
    </li>
    <li>You may take this feat multiple times.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Divine', 'Primal', 'Generic' => 18]);
        $feat->parent_feats()->save(app()->feats['Improved Expanded Spell Slot']);

        $feat              = new Feat;
        $feat->name        = 'Expanded Spell Knowledge';
        $feat->description = '<ul>
    <li>Increase the maximum number of spells you may know or prepare by 3.</li>
    <li>You may take this feat multiple times.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Arcane', 'Generic' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Dragon Ally';
        $feat->description = '<p>You gain a +3 bonus on Diplomacy checks made to adjust the attitude of a dragon and a +3 bonus on Saves against the frightful presence of dragons.</p>
<ul>
    <li>
        <p>If you have the Find Familiar feat, you may choose a one of the following dragons</p>
        <table>
            <thead>
                <tr>
                    <th>Dragon</th>
                    <th>Alignment</th>
                    <th>Requirement</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Wyrmling White</td>
                    <td>N, CN, CE</td>
                    <td>Sacrifice a 4th level Spell Slot</td>
                </tr>
                <tr>
                    <td>Wyrmling Black</td>
                    <td>N, NE, CE</td>
                    <td>Sacrifice a 4th level Spell Slot</td>
                </tr>
                <tr>
                    <td>Wyrmling Brass</td>
                    <td>NG, CG, CN</td>
                    <td>Sacrifice a 5th level Spell Slot</td>
                </tr>
                <tr>
                    <td>Wyrmling Green</td>
                    <td>N, LE, NE</td>
                    <td>Sacrifice a 5th level Spell Slot</td>
                </tr>
                <tr>
                    <td>Wyrmling Copper</td>
                    <td>CG, N, CN</td>
                    <td>Sacrifice a 5th level Spell Slot</td>
                </tr>
                <tr>
                    <td>Wyrmling Blue</td>
                    <td>LN, LE, NE</td>
                    <td>Sacrifice a 5th level Spell Slot</td>
                </tr>
                <tr>
                    <td>Wyrmling Bronze</td>
                    <td>LG, LN, N</td>
                    <td>Sacrifice a 6th level Spell Slot</td>
                </tr>
                <tr>
                    <td>Wyrmling Red</td>
                    <td>CN, CE, NE</td>
                    <td>Sacrifice a 6th level Spell Slot</td>
                </tr>
                <tr>
                    <td>Wyrmling Silver</td>
                    <td>LG, NG, N</td>
                    <td>Sacrifice a 6th level Spell Slot</td>
                </tr>
                <tr>
                    <td>Wyrmling Gold</td>
                    <td>LG, NG, LN</td>
                    <td>Sacrifice a 7th level Spell Slot</td>
                </tr>
            </tbody>
        </table>
    </li>
    <li>If you have the Divine Mount feat, you may choose a medium sized dragon by sacrificing a 5th level Spell Slot.</li>
    <li>If you have the Leadership feat, you may choose a dragon as your cohort that you qualify for.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Dragon', 'Generic' => 7]);
        $feat->skills()->save(app()->skills['Nature'], ['dc' => 4]);
        $feat->skills()->save(app()->skills['Language'], ['dc' => 2, 'meta' => 'Draconic']);

        $feat              = new Feat;
        $feat->name        = 'Magic Item User';
        $feat->description = '<ul>
    <li>Increase the number of magical items that you can Attune to by +2.</li>
    <li>You may take this feat multiple times.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Attunement', 'Magical', 'Generic' => 6]);

        $feat              = new Feat;
        $feat->name        = 'Turn Resistance';
        $feat->description = '<ul>
    <li>Increase your CHA by 1, to a maximum of 20</li>
    <li>Creatures have Disadvantage when turning you.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Divine', 'Undead', 'Generic' => 7]);

        $feat              = new Feat;
        $feat->name        = 'Improved Darkvision';
        $feat->description = '<p>Your Darkvision works in magical Darkness.</p>';
        $helper->addTypesToFeat($feat, ['Darkness']);

        $feat              = new Feat;
        $feat->name        = 'Blindsight';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You have Blindsight</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Generic' => 5]);

        $feat              = new Feat;
        $feat->name        = 'Tremorsense';
        $feat->description = '<ul>
    <li>Increase your WIS by 1, to a maximum of 20</li>
    <li>You have Tremorsense</li>
</ul>';
        $helper->addTypesToFeat($feat);

        $feat              = new Feat;
        $feat->name        = 'Pounce';
        $feat->requirement = 'If you move at least 15 feet and succeed with a Natural weapon attack';
        $feat->description = '<p>If you meet the requirements, then the target must make a DC 15 STR Save or be knocked Prone. If the target falls Prone, you get an additional Action. This additional Action can only be used to deliver your Bite attack.</p>';
        $helper->addTypesToFeat($feat, ['Attack']);

        $feat              = new Feat;
        $feat->name        = 'Steadfast';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>While you can see an allied creature within 30 feet of you, you cannot be Frightened.</li>
</ul>';
        $helper->addTypesToFeat($feat);

        $feat              = new Feat;
        $feat->name        = 'Charm Resistance';
        $feat->description = '<p>You are difficult to Charm.</p>
<ul>
    <li>Increase your CHA by 1, to a maximum of 20</li>
    <li>You gain Advantage to your Saves vs Charm effects.</li>
    <li>If you failed the initial Save and the Charming effect does not allow a second Save, then you gain a second Save on your next turn.</li>
</ul>';
        $helper->addTypesToFeat($feat);

        $feat              = new Feat;
        $feat->name        = 'Flyby Attack';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>When you are flying and you use the Dive Action, you may continue your move past the defender. This movement does not provoke Attacks of Opportunity from the defender.</li>
    <li>Add an extra damage dice to the weapon when used in a Flyby Attack.</li>
</ul>';
        $helper->addTypesToFeat($feat);

        $this->call(FeatsAncestrySeeder::class);
        $this->call(FeatsMainTreeSeeder::class);
        $this->call(FeatsFightingSeeder::class);
        $this->call(FeatsArcaneSeeder::class);
        $this->call(FeatsDivineSeeder::class);
        $this->call(FeatsMetaMagicSeeder::class);
        $this->call(FeatsPsionicSeeder::class);
        $this->call(FeatsTransformationsSeeder::class);
    }
}
