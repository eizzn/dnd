<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ActionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var SeedHelper $helper * */
        $helper = app()->seedHelper;

        $action               = new Action;
        $action->key          = 'activate-an-item';
        $action->name         = 'Activate an Item';
        $action->requirements = 'You can Activate an Item with the invested trait only if it’s invested by you. If the item requires you to Interact with it, you must be wielding it (if it’s a held item) or touching it with a free hand (if it’s another type of item)';
        $action->action_type  = 'Action';
        $action->description  = '<p>You call forth the effect of an item by properly activating it. This is a special activity that takes a variable number of actions, as listed in the item’s stat block.</p>
<p>Some items can be activated as a reaction or free action. In this case, you Activate the Item as a reaction or free action (as appropriate) instead of as an activity. Such cases are noted in the item’s Activate entry in its stat block—for example, “Activate Reaction command.”</p>
<p>Long Activation Times Some items take minutes or hours to activate. The Activate an Item activity for these items includes a mix of the listed activation components, but it’s not necessary to break down which one you’re providing at a given time. You can’t use other actions or reactions while activating such an item, though at the GM’s discretion, you might be able to speak a few sentences. As with other activities that take a long time, these activations have the exploration trait, and you can’t activate them in an encounter. If combat breaks out while you’re activating one, your activation is disrupted (see the Disrupting Activations sidebar).</p>
<p>Activation Components Each activation entry lists any components involved in the activation after the action icons or text, such as “Single Action command.” The activation components, described below, add traits (listed in parentheses) and requirements to the activation. If you can’t provide the components, you fail to Activate the Item.</p>
<dl>
    <dt>Command</dt> <dd>(Auditory, Concentrate) This component is a specific utterance you must make in a load and strong voice. Activate an Item gains the Auditory and Concentrate traits. You must be able to speak to provide this component.</dd>
    <dt>Envision</dt> <dd>(Concentrate) This component is a specific image or phenomenon and need to imagine. Activate an Item gains the Concentrate trait.</dd>
    <dt>Interact</dt> <dd>(Manipulate) This component works like the Interact basic action. Activate an Item gains the Manipulate trait and requires you to use your hands, just like with any Interact Action.</dd>
    <dt>Cast a Spell</dt> <dd>
        <p>If an item lists “Cast a Spell” after “Activate,” the activation requires you to use the Cast a Spell activity to Activate the Item. This happens when the item replicates a spell. You must have a spellcasting class feature to Activate an Item with this activation component. If the item can be used for a specific spell, the action icon for that spell is provided. If it’s an item like a staff, which can be used for many spells, the icon is omitted, and you must refer to each spell to determine which actions you must spend to Activate the Item to cast it.</p>
        <p>In this case, Activate an Item gains all the traits from the relevant components of the Cast a Spell activity.</p>
    </dd>
</dl>';
        $helper->addTypesToSimpleObject($action, ['Manipulate']);

        $action                   = new Action;
        $action->key              = 'administer-first-aid';
        $action->name             = 'Administer First Aid';
        $action->requirements     = "You must have healer's tools";
        $action->description      = '<p>You perform first aid on an adjacent creature that is at 0 Hit Points in an attempt to stabilize it. You can perform first aid on an adjacent creature, the DC is dqual to the creature\'s recovery save DC; to stem blood loss, the DC is 15. If a creature is both dying and bleeding, choose which effect you\'re trying to treat each time you roll. You can Administer First Aid again to attempt to remedy the other effect.</p>';
        $action->success          = 'The creature loses the Dying condition (but remains unconscious), or you end the persistent bleed damage.';
        $action->critical_failure = 'The creature has its Dying condition increased by 1. A creature with persistent bleed damage takes damage equal to the amount of its persistent bleed damage';
        $helper->addTypesToSimpleObject($action, ['Manipulate']);

        $action                   = new Action;
        $action->key              = 'activate-implement';
        $action->name             = 'Activate implement';
        $action->requirements     = 'You are wielding a wand';
        $action->action_type      = 'Double Action';
        $action->description      = '<p>You activate a wand, rod, or staff to cast its spell or activate one of its abilities. If you do not have the ability to activate the implement, then this becomes a Triple Action and you must make an Arcana check as follows.</p>
<dl>
    <dt>Wand</dt> <dd>DC 20</dd>
    <dt>Rod</dt> <dd>DC 25</dd>
    <dt>Staff</dt> <dd>DC 30</dd>
</dl>';
        $action->success          = 'You activate the wand, rod, or staff normally';
        $action->failure          = 'You failed to activate the wand, rod, or staff';
        $action->critical_failure = 'You failed to activate the wand, rod, or staff and a number of charges that would have been spent had you Succeeded is spent. If the ability does not use charges, then it cannot be activated again by you for 24 hours.';
        $helper->addTypesToSimpleObject($action, ['Manipulate']);

        $action               = new Action;
        $action->key          = 'aid';
        $action->name         = 'Aid';
        $action->trigger      = 'An ally is about to use an Action, Activity, Free Action, or Reaction that requires a skill check';
        $action->action_type  = 'Reaction';
        $action->requirements = 'The ally is willing to accept your aid, and you have prepared to help (see below).';
        $action->description  = "<p>You try to aid your ally's check in some way. To use this reaction, you must first prepare to help, usually by using an action during your turn. You must explain to the GM exactly how you’re trying to help, and she determines whether you can Aid your ally.</p>
<p>When you use your Aid reaction, attempt a skill check of a type decided by the GM. The typical DC for Aid is 15, but at the GM’s discretion this might change to DC 20 for particularly hard tasks or DC 10 for particularly easy tasks. The GM can add any relevant traits to your Aid reaction or to your preparatory action depending on the situation.</p>";
        $action->critical_success = 'You grant your ally a +4 circumstance bonus to the triggering skill check.';
        $action->success          = 'You grant your ally a +2 circumstance bonus to the triggering skill check';
        $action->failure          = 'Your ally takes a -2 circumstance penalty to the triggering skill check.';
        $helper->addTypesToSimpleObject($action);

        $action                   = new Action;
        $action->key              = 'assist';
        $action->name             = 'Assist';
        $action->requirements     = 'An enemy is within your melee reach, and is within the reach of one or more of your allies.';
        $action->action_type      = 'Action';
        $action->description      = "<p>You help an ally attack the enemy or foil the enemy's attacks against one of your allies. Choose one enemy you're adjacent to and one ally adjacent to that enemy. Then, attempt a melee attack against the enemy's AC. The bonuses and or penalties last until the start of your next turn.</p>";
        $action->success          = "The creature takes no damage. Instead, you either impose a -2 circumstance penalty to the enemy's attack rolls against your chosen ally, or you grant your chosen ally a +2 circumstance bonus to attack rolls against your chosen enemy.";
        $action->critical_success = 'As a success, but the penalty is -4 or the bonus is +4';
        $action->critical_failure = 'Your chosen enemy either gains a +2 circumstance bonus to attack rolls against your chosen ally or your chosen ally takes a -2 penalty to attack rolls against the chosen enemy. Your chosen enemy decides which of these effects occurs.';
        $helper->addTypesToSimpleObject($action, ['Attack']);

        $action              = new Action;
        $action->key         = 'attack-of-opportunity';
        $action->name        = 'Attack of Opportunity';
        $action->trigger     = "A creature within your reach uses a Manipulate Action or a Move Action, makes a Ranged Attack, or leaves a square during a Move Action it's using";
        $action->description = '<p>Make a melee Strike against the triggering creature at a -2 penalty. If the attack hits and the trigger was a Manipulate Action, you disrupt that Action.</p>';
        $helper->addTypesToSimpleObject($action, ['Attack']);

        $action              = new Action;
        $action->key         = 'avert-gaze';
        $action->name        = 'Avert Gaze';
        $action->action_type = 'Action';
        $action->description = '<p>You avert your gaze from danger. You gain a +2 circumstance bonus to saves against visual abilities that require you to look at a creature or object, such as a medusa’s petrifying gaze. Your gaze remains averted until the start of your next turn.</p>';
        $helper->addTypesToSimpleObject($action, ['Move']);

        $action              = new Action;
        $action->key         = 'cast-a-spell';
        $action->name        = 'Cast a Spell';
        $action->description = '<p>You cast a spell you have prepared or in your repertoire. Casting a Spell is a special activity that takes a variable number of actions depending on the spell, as listed in each spell’s stat block. As soon as the spellcasting actions are complete, the spell effect occurs.</p>
<p>Some spells are cast as a reaction or free action. In those cases, you Cast the Spell as a reaction or free action (as appropriate) instead of as an activity. Such cases will be noted in the spell’s stat block—for example, “[reaction] verbal.”</p>
<p>Long Casting Times Some spells take minutes or hours to cast. The Cast a Spell activity for these spells includes a mix of the listed spell components, but it’s not necessary to break down which one you’re providing at a given time. You can’t use other actions or reactions while casting such a spell, though at the GM’s discretion, you might be able to speak a few sentences. As with other activities that take a long time, these spells have the exploration trait, and you can’t cast them in an encounter. If combat breaks out while you’re casting one, your spell is disrupted (see Disrupted and Lost Spells below).</p>
<p>Spell Components Each spell lists the spell components required to cast it after the action icons or text, such as “[three-actions] material, somatic, verbal." The spell components, described in detail below, add traits and requirements to the Cast a Spell activity. If you can’t provide the components, you fail to Cast the Spell.</p>
<ul>
    <li>Material (Manipulate)</li>
    <li>Somatic (Manipulate)</li>
    <li>Verbal (Concentrate)</li>
    <li>Focus (Manipulate)</li>
    <li>Sacrifice (Concentrate)</li>
</ul>
<p>Disrupted and Lost Spells Some abilities and spells can disrupt a spell, causing it to have no effect and be lost. When you lose a spell, you’ve already expended the spell slot, spent the spell’s costs and actions, and used the Cast a Spell activity. If a spell is disrupted during a Sustain a Spell action, the spell immediately ends.</p>';
        $helper->addTypesToSimpleObject($action, ['Concentrate']);

        $action              = new Action;
        $action->key         = 'counterspell';
        $action->name        = 'Counterspell';
        $action->description = "<p>It is possible to cast any Spell as a Counterspell. By doing so, you are using the spell's energy to disrupt the casting of the same spell by another character. Counterspelling works even if one spell is Divine and the other Arcane.</p>
<p>To use a Counterspell, you must select an opponent as the target of the Counterspell. You do this by using Actions to cast the spell, either by holding your Actions (turning them into Reactions), or having Reactions from Attacks of Opportunity or other means, so that you may use them when your opponent starts to cast a Spell that you wish to counter.</p>
<p>To counter a spell, you must identify the spell being cast (with an Immediate Action) using an Arcane check (DC 15 + the spell's level). If you succeed in identify the spell, you may then choose to cast a Spell that will counter the target Spell. If you fail to identify the spell, you may only counter the spell using Dispel Magic (this normally requires the Improved Counter Spell Feat).</p>
<p>After identifying the target Spell, you may then use a number of Reactions to cast the Spell. At this point, the Spell is countered. Spells that are Heightened must be matched with an equally Heightened Spell or higher. Spells augmented with Metamagic does not impact if a spell can be countered.</p>
<p>Some spells specifically counter each other, especially when they have diametrically opposed effects. The specific Spell entry will describe what spells they Specifically Counter and what Spells Specifically Counter them.</p>
<p>Using Dispel Magic to Counter a spell does not require you to successfully identify the spell first, but this leaves you with no information on what Spell Level the Spell is cast at, or what School the Spell belongs to. The chance to Counter a Spell using Dispel Magic requires a Spell Caster check (DC 12 + the Target spell's level including any Heightening).</p>";
        $helper->addTypesToSimpleObject($action, ['Counterspell', 'Abjuration']);

        $action               = new Action;
        $action->key          = 'crawl';
        $action->name         = 'Crawl';
        $action->action_type  = 'Action';
        $action->requirements = 'You are prone and your Speed is at least 10 feet';
        $action->description  = '<p>You move 5 feet by Crawling and continue to stay Prone.</p>';
        $helper->addTypesToSimpleObject($action, ['Move']);

        $action              = new Action;
        $action->key         = 'delay';
        $action->name        = 'Delay';
        $action->action_type = 'Free';
        $action->trigger     = 'Your turn begins';
        $action->description = "<p>You wait for the right moment to act. The rest of your turn doesn't happen yet. Instead, you're removed from the Initiative Order and each Action that you have not taken yet becomes a Reaction that you can use until the start of your next turn. You can return to the Initiative Order as a Free Action triggered by the end of any other creature's turn. This permanently changes your Initiative to the new position. You can't use Reactions until you return to the Initiative Order. If you Delay an entire round without returning to the Initiative Order, the Reactions from the Delayed turn are lost, your Initiative doesn't change, and your next turn occurs at your original position in the Initiative Order.</p>
<p>When you Delay any Persistent Damage or other negative effects that normally occur at the start or end of your turn occur immediately when you use the Delay Action. Any beneficial effects that would end at any point during your turn also end. The GM might determine that other effects end when you Delay as well. Essentially, you can't Delay to avoid negative consequences that would happen on your turn or to extend beneficial effects that would end on your turn.</p>";
        $helper->addTypesToSimpleObject($action);

        $action              = new Action;
        $action->key         = 'dismiss';
        $action->name        = 'Dismiss';
        $action->action_type = 'Action';
        $action->description = '<p>You end one spell effect or magic item effect. This must be an effect you are allowed to dismiss, as defined by the spell or item. Dismissal might end the effect entirely or might end it just for a certain target or targets, depending on the spell or item.</p>';
        $helper->addTypesToSimpleObject($action, ['Concentrate']);

        $action              = new Action;
        $action->key         = 'drop';
        $action->name        = 'Drop';
        $action->action_type = 'Free';
        $action->trigger     = 'Your turn begins, your turn ends, or you start to use an action';
        $action->description = "<p>Your drop an item you're holding in your hand or hands. Unlike most manipulate actions, Drop does not trigger reactions such as Attack of Opportunity.</p>";
        $helper->addTypesToSimpleObject($action, ['Manipulate']);

        $action              = new Action;
        $action->key         = 'drop-prone';
        $action->name        = 'Drop Prone';
        $action->action_type = 'Action';
        $action->description = '<p>You fall prone.</p>';
        $helper->addTypesToSimpleObject($action, ['Move']);

        $action              = new Action;
        $action->key         = 'escape';
        $action->name        = 'Escape';
        $action->action_type = 'Action';
        $action->description = '<p>You attempt to escape from being grabbed, immobilized, or restrained.  Choose one creature, object, spell effect, hazard, or other impediment imposing any of those conditions on you.</p>
<p>Attempt a check using your unarmed attack modifier against the DC of the effect.  This is typically the Athletics DC of the creature grabbing you, the Thievery DC of the creature who tied you up, the spell DC for the spell effect, or the listed Escape DC of an object, hazard, or other impediment. You can attempt an Acrobatics or Athletics check instead of using your attack modifier if you choose (but this Action still has the Attack trait).</p>';
        $action->critical_success = 'You get free and remove the Grabbed, Immobilized, and Restrained conditions imposed by your chosen targets. You can then Stride up to 5 feet';
        $action->success          = 'You get free and remove the Grabbed, Immobilized, and Restrained conditions by your chosen target';
        $action->critical_failure = "You don't get Free, and you can't attempt to Escape again until your next turn'";
        $helper->addTypesToSimpleObject($action, ['Attack']);

        $action              = new Action;
        $action->key         = 'fighting-defensively';
        $action->name        = 'Fighting Defensively';
        $action->action_type = 'Action';
        $action->description = '<p>You choose to fight defensively. Until the start of your next turn, you gain the following</p>
<ul>
    <li>You suffer a -2 penalty to all your Attack rolls</li>
    <li>You gain a +2 Dodge bonus to your AC.</li>
    <li>You may take this Action up to 3 times per Turn. The effects are cumulative.</li>
</ul>';
        $helper->addTypesToSimpleObject($action, ['Attack']);

        $action                   = new Action;
        $action->key              = 'grab-edge';
        $action->name             = 'Grab an Edge';
        $action->trigger          = 'You fall from or past an edge or handhold';
        $action->requirements     = 'You hands are not tied behind your back or otherwise restrained';
        $action->description      = '<p>When you fall off or past an edge or other handhold, you can try to grab it, potentially stopping your fall. You must Succeed at a DEX Save, usually at the Climb DC. If you grab the edge or handhold, you can then Climb up using Athletics.</p>';
        $action->critical_success = 'You grab the edge or handhold, whether or not you have a hand free, typically by using a suitable held item to catch yourself (catching a battle axe on a ledge, or example). You still take damage from the distance fallen so far, but you treat the fall as though it were 30 feet shorter';
        $action->success          = 'If you have at least one free hand, you grab the edge or handhold, stopping your fall. You still take damage from the distance fallen so far, but you treat the fall as though it were 20 feet shorter. If you have no hands free, you continue to fall as if you had failed the check.';
        $action->critical_failure = "You continue to fall, and if you've fallen 20 feet or more before you use this Reaction, you take 10 Bludgeoning damage from the impact for 20 feet fallen.";
        $helper->addTypesToSimpleObject($action, ['Manipulate']);

        $action              = new Action;
        $action->key         = 'interact';
        $action->name        = 'Interact';
        $action->action_type = 'Action';
        $action->description = '<p>You use your hand or hands to manipulate an object or the terrain. You grab an unattended or stored object, open a door, or do some similar action. You may have to attempt a skill check to determine if you Interact action was successful.</p>';
        $helper->addTypesToSimpleObject($action, ['Manipulate']);

        $action              = new Action;
        $action->key         = 'leap';
        $action->name        = 'Leap';
        $action->action_type = 'Action';
        $action->description = '<p>You take a careful but short jump. You can Leap up to 10 feet horizontally if your Speed is at least 15 feet, or up to 15 feet horizontally if your Speed is at least 30 feet. You land in the space where your Leap ends (meaning you can typically clear a 5-foot gap if your Speed is between 15 feet and 30 feet, or a 10-foot gap if your Speed is 30 feet or more).</p>
<p>If yo make a vertical Leap, you can move up to 3 feet vertically and 5 feet horizontally onto an elevated surface.</p>
<p>Jumping a greater distance requires using the Athletics skill</p>';
        $helper->addTypesToSimpleObject($action, ['Move']);

        $action              = new Action;
        $action->key         = 'ready';
        $action->name        = 'Ready';
        $action->action_type = 'Action';
        $action->description = '<p>You prepare to use an Action that will occur outside your turn. Choose a single Action you can use and designate a trigger. Your turn then ends. If the trigger you choose occurs before the start of your next turn, you can use the chosen Action as a Reaction (provided you still meet the requirements to use it).</p>';
        $helper->addTypesToSimpleObject($action, ['Concentrate']);

        $action              = new Action;
        $action->key         = 'release';
        $action->name        = 'Release';
        $action->action_type = 'Free';
        $action->description = "<p>You release something you're holding in your hand or hands. This might mean dropping an item, removing one hand from your weapon while continuing to hold it in another hand, releasing a rope suspending a chandelier, or performing a similar action. Unlike most manipulate actions, Release does not trigger reactions that can be triggered by Actions with the Manipulate trait (such as Attack of Opportunity).</p>
<p>If you want to prepare to Release something outside of your turn, use the Ready activity.</p>";
        $helper->addTypesToSimpleObject($action, ['Manipulate']);

        $action              = new Action;
        $action->key         = 'seek';
        $action->name        = 'Seek';
        $action->action_type = 'Action';
        $action->description = "<p>You scan an area for signs of unseen creatures Secret or hidden objects. If you're scanning for signs of unseen creatures, choose either a 30-foot cone or a 15-foot burst within line of sight. The GM attempts a single secret Perception check for you and compares the result to the Stealth DCs of any unseen creatures within the area. If your result is greater than the Stealth DC of a creature, you sense the creature until it Sneaks or otherwise avoids your detection (see Senses).</p>
<p>If you're using Seek to search for hidden objects such as secret doors or hazards, you search up to a 10-foot square adjacent to you. You may need to spend more than 1 Seek action for larger areas or if the area to be searched is cluttered. If your Perception check result equals or exceeds the DC of a hidden object (as determined by the GM or by the character Concealing the Object), you either learn its location or gain a clue as to its location (GM's choice).</p>";
        $action->critical_success = 'If you were searching for creatures, any undetected or hidden creatures you Critically Succeeded against become Observed by you. If you were Searching for an object, you learn its location';
        $action->success          = 'If you were searching for creatures, any undetected creature you Succeeded against becomes hidden from you instead of Undetected, and any hidden creature you Succeeded against becomes Observed by you. If you were searching for an object, you learn its location or get a clue to its whereabouts, as determined by the GM';
        $helper->addTypesToSimpleObject($action, ['Concentrate', 'Secret']);

        $action                   = new Action;
        $action->key              = 'sense-motive';
        $action->name             = 'Sense Motive';
        $action->action_type      = 'Action';
        $action->description      = "<p>You try to tell whether a creature's behavior is abnormal. Choose one creature, and assess it for odd body language, signs of nervousness, and other indicators that it might be trying to deceive someone. The GM attempts a single secret Perception check for you and compares the result to the Deception DC of the creature, the DC of a spell affecting the creature's mental state, or another appropriate DC determined by the GM. You typically can't try to Sense the Motive of the same creature again until the situation changes significantly.</p>";
        $action->critical_success = "You determine the creature's true intentions and get a solid idea of any mental magic affecting it.";
        $action->success          = "You can tell whether the creature is behaving normally, but you don't know its exact intentions or what magic might be affecting it.";
        $action->failure          = "You detect what a deceptive creature wants you to believe. If they're not being deceptive, you believe they're behaving normally.";
        $action->critical_failure = "You get a false sense of the creature's intentions.";
        $helper->addTypesToSimpleObject($action, ['Concentrate', 'Secret']);

        $action              = new Action;
        $action->key         = 'stand';
        $action->name        = 'Stand';
        $action->action_type = 'Action';
        $action->description = '<p>You stand up from prone. This Action triggers Attacks of Opportunity.</p>';
        $helper->addTypesToSimpleObject($action, ['Move']);

        $action              = new Action;
        $action->key         = 'step';
        $action->name        = 'Step';
        $action->action_type = 'Action';
        $action->description = "<p>You carefully move 5 feet. Unlike most types of movement, Stepping doesn't trigger reactions, such as Attacks of Opportunity, based on Move Actions or on leaving or entering a square. You can't Step into difficult terrain or greater difficult terrain.</p>";
        $helper->addTypesToSimpleObject($action, ['Move']);

        $action              = new Action;
        $action->key         = 'stride';
        $action->name        = 'Stride';
        $action->action_type = 'Action';
        $action->description = '<p>Move up to your Speed.</p>';
        $helper->addTypesToSimpleObject($action, ['Move']);

        $action                   = new Action;
        $action->key              = 'strike';
        $action->name             = 'Strike';
        $action->action_type      = 'Action';
        $action->description      = "<p>You attack with a weapon you’re wielding or with an unarmed attack, targeting one creature within your reach (for a melee attack) or within range (for a ranged attack). Roll the attack roll for the weapon or unarmed attack you are using and compare the result to the target creature's AC to determine the effect. See Melee Strikes and Ranged Strikes for details on calculating your attack and damage rolls.</p>";
        $action->success          = 'You deal damage according to the weapon or unarmed attack, including any circumstance and conditional bonuses and penalties';
        $action->critical_success = 'You critically succeed at an attack roll, dealing double damage';
        $helper->addTypesToSimpleObject($action, ['Attack']);

        $action               = new Action;
        $action->key          = 'take-cover';
        $action->name         = 'Take Cover';
        $action->action_type  = 'Action';
        $action->requirements = 'You are benefiting from cover or are near a feature that allows you to take cover';
        $action->description  = '<p>You press yourself against a wall or duck behind an obstacle to take better advantage of cover (see Cover on page 314). If you would gain a +2 circumstance bonus to AC and DEX Saves due to cover, you instead gain a +4 circumstance bonus to AC and DEX Saves from the cover while you’re taking cover. Otherwise, you gain the normal benefits of cover. This lasts until you move from your current space, use an attack action, become unconscious, or end this effect as a Free Action triggered by the start or end of your turn.</p>';
        $helper->addTypesToSimpleObject($action, ['Move']);

        $action               = new Action;
        $action->key          = 'arrest-fall';
        $action->name         = 'Arrest a Fall';
        $action->trigger      = 'You fall';
        $action->action_type  = 'Reaction';
        $action->requirements = 'You have a fly Speed';
        $action->description  = '<p>You attempt an Acrobatics check to slow your fall. The DC is typically 15, but it might be higher due to air turbulence or other circumstances.</p>';
        $action->success      = 'You fall gently, taking no damage from the fall.';
        $helper->addTypesToSimpleObject($action, ['Move']);

        $action              = new Action;
        $action->key         = 'breathe-deep';
        $action->name        = 'Breathe Deep';
        $action->action_type = 'Action';
        $action->description = '<p>You take a deep breath. If you go without air at any point before the start of your next turn, you can use twice as many Actions before  you start suffocating.</p>';
        $helper->addTypesToSimpleObject($action, ['Concentrate']);

        $action               = new Action;
        $action->key          = 'burrow';
        $action->name         = 'Burrow';
        $action->action_type  = 'Action';
        $action->requirements = 'You have a burrow Speed';
        $action->description  = "<p>You dig your way through dirt, sand, or a similar loose material at a rate up to your burrow Speed. You can't burrow through rock or other substances denser than dirt unless you have an ability that allows you to do so.</p>";
        $helper->addTypesToSimpleObject($action, ['Move']);

        $action               = new Action;
        $action->key          = 'fly';
        $action->name         = 'Fly';
        $action->action_type  = 'Action';
        $action->requirements = 'You have a fly Speed';
        $action->description  = "<p>You move through the air up to your Speed. Moving upward (straight up or diagonally) counts as traveling through difficult terrain. You can move straight down 10 feet for every 5 feet of movement you spend. If you fly to the ground, you don\'t take falling damage. You can use an Action to Fly 0 feet to hover in place.</p>
<p>If you're airborne at the end of your turn and didn't use a Fly action this round, you fall.</p>";
        $helper->addTypesToSimpleObject($action, ['Move']);

        $action               = new Action;
        $action->key          = 'mount';
        $action->name         = 'Mount';
        $action->action_type  = 'Action';
        $action->requirements = "You are adjacent to an allied animal companion or to a creature at least one size larger than you that you've controlled using the Handle an Animal action.";
        $action->description  = "<p>You move onto the controlled creature and ride it. If you're already mounted, you can instead use this Action to dismount, moving off the mount into a space adjacent to it.</p>";
        $helper->addTypesToSimpleObject($action, ['Move']);

        $action               = new Action;
        $action->key          = 'point-out';
        $action->name         = 'Point Out';
        $action->requirements = 'A creature is not unseen by you, but it is unseen by one or more of your allies';
        $action->description  = '<p>You indicate a creature that you can see to one or more allies, gesturing in a direction and describing the distance verbally. Allies treat that creature as sensed rather than unseen (see page 303). This works only for allies who can see you and are in a position where they could potentially sense the target. If your allies can’t hear or understand you, they must succeed at a Perception check against the creature\'s Stealth DC or they misunderstand the distance to the target and believe it to be in a different location.</p>';
        $helper->addTypesToSimpleObject($action, ['Manipulate', 'Visual']);

        $action               = new Action;
        $action->key          = 'raise-shield';
        $action->name         = 'Raise a Shield';
        $action->action_type  = 'Action';
        $action->requirements = 'You are wielding a shield';
        $action->description  = "<p>You position your shield to protect yourself. When you take this Action and you are wielding a Shield, you gain the Shield's listed bonuses to AC and TAC as circumstance bonuses, and you can use the Shield Block Reaction. Your shield remains raised until the start of your next turn.</p>";
        $helper->addTypesToSimpleObject($action, ['Manipulate']);

        $action              = new Action;
        $action->key         = 'shield-block';
        $action->name        = 'Shield Block';
        $action->action_type = 'Reaction';
        $action->trigger     = 'While you have your shield raised, you take damage from a physical attack';
        $action->description = '<p>You snap your shield into place to deflect a blow. Your shield prevents you from taking an amount of damage up to its Hardness - the shield takes this damage instead, possibly becoming dented or broken.</p>';
        $helper->addTypesToSimpleObject($action, ['Attack']);

        $action               = new Action;
        $action->key          = 'sustain-spell';
        $action->name         = 'Sustain a Spell';
        $action->requirements = 'You have at least one spell active with a sustained duration, and you are not fatigued';
        $action->description  = '<p>Choose one spell with a sustained duration you have in effect. The duration of that spell continues until the end of your next turn. Some spells might have slightly different or expanded effects if you sustain them. Sustaining a Spell for more than 10 minutes (100 rounds) ends the spell and makes you fatigued unless the spell lists a different maximum duration (such as “sustained up to 1 minute” or “sustained up to 1 hour”).</p>
<p>If your Sustain a Spell Action is disrupted, the spell immediately ends.</p>';
        $helper->addTypesToSimpleObject($action, ['Concentrate']);

        $action               = new Action;
        $action->key          = 'sustain-activation';
        $action->name         = 'Sustain an Activation';
        $action->requirements = 'You have at least one magic item activation that you can sustain and you are not fatigued';
        $action->description  = '<p>Choose one magic item activation with a sustained duration you have in effect. The duration of that activation continues until the end of your next turn. Some activations may have slightly different or expanded effects if you sustain them. Sustaining an Activation for more than 10 minutes (100 rounds) ends the activation and makes you fatigued unless the item’s description states a different maximum duration (such as “up to 1 minute” or “up to 1 hour”).</p>
<p>If your Sustain an Activation action is disrupted, the item’s effect immediately ends.</p>';
        $helper->addTypesToSimpleObject($action, ['Concentrate']);
    }
}
