<?php

namespace Database\Seeders\Talents;

use App\Models\Talent;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FightingTalentsSeeder extends Seeder
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

        $talent              = new Talent;
        $talent->name        = 'High Sword Low Axe';
        $talent->requirement = 'You must be weilding both a sword and an axe';
        $talent->description = '<p>If you hit the same creature with both your sword and your axe in the same round, you may make a Trip attack as a Free Action.</p>';
        $helper->addTypesToSimpleObject($talent, ['Attack', 'Melee', 'Talent' => 5]);
        $talent->feats()->save(app()->feats['Two-Weapon Fighter']);
        $talent->feats()->save(app()->feats['Improved Trip']);
        $talent->feats()->save(app()->feats['Weapon Focus'], ['meta' => 'bastard sword, longsword, scimitar, shortsword, battleaxe, handaxe, or dwarven waraxe']);

        $talent              = new Talent;
        $talent->name        = 'Anvil of Thunder';
        $talent->requirement = 'You must be weilding both a hammer and an axe';
        $talent->description = '<p>You have mastered the style of fighting with hammer and axe at the same time</p>
<p>If you hit the same creature with both your axe and your hammer in the same round, it must make a CON Save (DC 10 + 1/2 your character level + your Str modifier) or be Dazed for 1 round.</p>';
        $helper->addTypesToSimpleObject($talent, ['Melee', 'Talent' => 5]);
        $talent->feats()->save(app()->feats['Power Attack']);
        $talent->feats()->save(app()->feats['Two-Weapon Fighter']);
        $talent->feats()->save(app()->feats['Weapon Focus'], ['meta' => 'Hammer and Axe']);

        $talent              = new Talent;
        $talent->name        = 'Bear Fang';
        $talent->requirement = 'You must be wielding both an axe and a dagger';
        $talent->description = '<p>If you hit an opponent with both your axe and your dagger in the same round, you can choose to immediately attempt to start a Grapple as a Free Action without provoking an Attack an Opportunity. No initial touch attack is required.</p>
<p>If you succeed on your grapple attempt, you drop your axe, but you immediately gain an additional Action this turn. This additional Action can only be used to attack your grappled foe with your dagger at your highest base attack bonus (with the normal -4 penalty for attacking in a grapple).</p>
<p>In subsequent rounds, you can use the dagger to attack while grappling at the normal penalty.</p>';
        $helper->addTypesToSimpleObject($talent, ['Attack', 'Melee', 'Talent' => 5]);
        $talent->feats()->save(app()->feats['Power Attack']);
        $talent->feats()->save(app()->feats['Two-Weapon Fighter']);
        $talent->feats()->save(app()->feats['Weapon Focus'], ['meta' => 'Axe and Dagger']);

        $talent              = new Talent;
        $talent->name        = 'Crescent Moon';
        $talent->requirement = 'You must be weilding both a sword and a dagger';
        $talent->description = "<p>You have mastered the style of fighting with sword and dagger. You know how to twist an opponent's weapons from its grasp with a single graceful motion while using your two weapons together.</p>
<p>If you hit the same creature with both your sword and your dagger in the same round, you may make an immediate Disarm attempt as a Free Action.</p>";
        $helper->addTypesToSimpleObject($talent, ['Attack', 'Melee', 'Talent' => 5]);
        $talent->feats()->save(app()->feats['Two-Weapon Fighter']);
        $talent->feats()->save(app()->feats['Improved Disarm']);
        $talent->feats()->save(app()->feats['Weapon Focus'], ['meta' => 'Sword and Dagger']);

        $talent              = new Talent;
        $talent->name        = 'Fighting Summoner';
        $talent->requirement = 'You must have Summoned or Called a creature that is able to fight';
        $talent->description = "<p>You are skilled at fighting alongside your summoned creatures</p>
<p>As long as you and a creature you summoned threaten the same foe, you are considered to be Flanking that foe even if you don't have an ally on the foe's opposite side.</p>";
        $helper->addTypesToSimpleObject($talent, ['Summoning', 'Talent' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Fists of Steel';
        $talent->description = '<p>At the beginning of your turn, activate a use of your Stunning Fist. Until the beginning of your next turn, all of your unarmed strikes deal an additional +1D6 damage.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Unarmed', 'Talent' => 2]);
        $talent->feats()->save(app()->feats['Improved Unarmed Strike']);

        $talent              = new Talent;
        $talent->name        = 'Breaking Blow';
        $talent->action_type = 'Triple Action';
        $talent->parent_id   = Talent::where('name', 'Fists of Steel')->first()->id;
        $talent->description = '<p>Activate your Fist of Steel Talent. If you do, you may make a single unarmed Melee attack that if it hits, deals damage equal to 1D6 for each point of STR modifier you have. If applied to an inanimate object, the damage is doubled.</p>
<p>Note, this Talent should not be used to break held weapons or shields. Use the normal Improved Sunder feat.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Unarmed', 'Talent' => 5]);
        $talent->feats()->save(app()->feats['Improved Sunder']);

        $talent              = new Talent;
        $talent->name        = "Hammer's Edge";
        $talent->requirement = 'You must be weilding both a sword and hammer';
        $talent->description = '<p>If you hit the same creature with both your sword and hammer, it must make CON Save (DC equal to the total damage dealt with your sword and hammer), or fall prone.</p>
<p>For each size category larger than you, the target gains a +3 bonus to the Save. For each size category smaller than you, the target suffers a -3 penalty to the Save.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 5]);
        $talent->feats()->save(app()->feats['Improved Bull Rush']);
        $talent->feats()->save(app()->feats['Two-Weapon Fighter']);
        $talent->feats()->save(app()->feats['Weapon Focus'], ['meta' => 'Sword and Hammer']);

        $talent              = new Talent;
        $talent->name        = 'Net and Trident';
        $talent->requirement = 'You must weilding a net and trident';
        $talent->description = '<p>If you successfully hit an opponent with your net and win the opposed STR check, you may make a free Move Action (up to half your Speed) towards the opponent and use an Action to attack any creature in your net with additional +2 to Hit and +2 to Damage.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 3]);
        $talent->feats()->save(app()->feats['Two-Weapon Fighter']);
        $talent->feats()->save(app()->feats['Weapon Focus'], ['meta' => 'trident']);

        $talent              = new Talent;
        $talent->name        = 'Sapping Strike';
        $talent->description = '<p>When you deal Sneak Attack, Sudden Strike, or Skirmish damage, you can sacrifice any number of dice of damage of that Sneak Attack, Sudden Strike, or Skirmish damage. For each die sacrificed in this way, the target suffers a -2 penalty to their CON or DEX Saves (your choice) for the next 10 rounds. A target cannot have more than a cumulative -6 penalty at any one time.</p>
<p>If the target received any form of magical healing, all the penalties are removed.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 7]);
        $talent->feats()->save(app()->feats['Weapon Finesse']);

        $talent              = new Talent;
        $talent->name        = 'Archon Style';
        $talent->description = '<p>Whenever an ally is standing in a square next to you, you gain a +1 Dodge bonus to AC and you grant them a +2 Dodge bonus against attacks from all opponents that you threaten. Only one ally can gain this benefit.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 2]);
        $talent->feats()->save(app()->feats['Weapon Finesse']);

        $talent              = new Talent;
        $talent->name        = 'Archon Diversion';
        $talent->description = '<p>You now grant your Archon Style Dodge bonus to all allies adjacent to you. Once per turn as a Free Action, when an ally who has the Dodge bonus from Archon Style and is attacked, you may choose to have the attack hit you instead.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 5]);
        $talent->feats()->save(app()->feats['Weapon Finesse']);

        $talent              = new Talent;
        $talent->name        = 'Archon Justice';
        $talent->description = '<p>Now when you divert an attack with Archon Diversion, you gain an additional Reaction. This Reaction can be used to make an Attack of Opportunity against the attacker you diverted the attack from.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 8, 'Attack of Opportunity']);

        $talent              = new Talent;
        $talent->name        = 'Ascetic Style';
        $talent->description = '<p>Choose a weapon you have Weapon Focus with. You can now wield this weapon and can apply the benefits from feats and class features as if you were unarmed. You use the weapons damage instead of your unarmed strike damage.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 2]);
        $talent->feats()->save(app()->feats['Improved Unarmed Strike']);
        $talent->feats()->save(app()->feats['Weapon Focus']);

        $talent              = new Talent;
        $talent->name        = 'Ascetic Strike';
        $talent->description = '<p>You can now choose to deal your Unarmed Strike damage instead of your weapon damage while using Ascetic Style.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 5]);
        $talent->feats()->save(app()->feats['Improved Unarmed Strike']);
        $talent->feats()->save(app()->feats['Weapon Focus']);

        $talent              = new Talent;
        $talent->name        = 'Ascetic Form';
        $talent->description = '<p>You can now add your Class Proficiency bonus to your Unarmed Strike damage.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 8]);
        $talent->feats()->save(app()->feats['Improved Unarmed Strike']);
        $talent->feats()->save(app()->feats['Weapon Focus']);

        $talent              = new Talent;
        $talent->name        = 'Barracuda Style';
        $talent->description = "<p>Your unarmed strikes deal normal damage underwater, and you don't take penalties on attack rolls with unarmed strikes made underwater.</p>
<p>You add your WIS modifier in addition to your STR modifier on Swim checks.</p>";
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Barracuda Slam';
        $talent->description = '<p>With a successful Swim check, you can move half your speed with an Action. You can run and charge underwater.</p>
<p>While making a charge attack in water or on land, you can add twice your STR bonus on the damage roll for your first Unarmed Strike on your turn.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Barracuda Dash';
        $talent->description = '<p>If you have the Barracuda Style and Barracuda Slam Talents, you then gain a swim speed equal to your base land speed.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 8]);

        $talent              = new Talent;
        $talent->name        = 'Claw at the Moon';
        $talent->action_type = 'Double Action';
        $talent->description = "<p>As part of this Talent, you make an Athletics (High Jump) check to leap into the air. The Athletics DC is equal to the target's AC. If this check succeeds, you gain a +2 bonus to Hit with this attack and it deals an additional 2D6 points of damage. If the Athletics check fails, you may still make the Melee attack as normal.</p>";
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 4]);

        $talent              = new Talent;
        $talent->name        = 'Tatsu';
        $talent->action_type = 'Double Action';
        $talent->requirement = 'You are not wearing any armor and lightly encumbered or less';
        $talent->description = '<p>The Tatsu, commonly referred to as a Hurricane Kick, is a spinning kick where the attacker extends one leg while spinning vertically.</p>
<p>You make 2 melee Unarmed Strikes against the same opponent. Each hit deals your normal Unarmed Strike damage. You also move into the opponents space (5 feet). If any of your attacks from this talent hits, the opponent is pushed to the next adjacent space. If you miss all of your attacks from this talent, you land in the same space as your opponent if there is enough space, otherwise you move to the other side of the opponent if able.</p>
<p>You may also make this attack as a Triple Action. You make 3 attacks instead of 2 and move an additional 5 feet.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 3]);
        $talent->feats()->save(app()->feats['Shoto Style']);

        $talent              = new Talent;
        $talent->name        = 'Improved Tatsu';
        $talent->action_type = 'Triple Action';
        $talent->requirement = 'You are not wearing any armor and lightly encumbered or less';
        $talent->parent_id   = Talent::where('name', 'Tatsu')->first()->id;
        $talent->description = '<p>You can now perform Shinku Tatsu</p>
<ul>
    <li>You spend a Heroic Surge and 1 Power Point. You make 4 Melee Unarmed Strikes against all opponents in an adjacent space to yours. Each hit deals your normal Unarmed Strike Damage. You remain in your starting space. Any creature hit must make a STR Save vs the amount of damage or be pushed 5 feet away from you. This Save is made after all Improved Tatsu attacks have been made.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 6]);

        $talent              = new Talent;
        $talent->name        = "Shor'yuken";
        $talent->action_type = 'Double Action';
        $talent->requirement = 'You are not wearing any armor and lightly encumbered or less';
        $talent->description = '<p>The Shoryuken, commonly referred to as the Dragon Punch, is a jumping uppercut in which the user spins upwards with some horizontal movement as well, knocking the opponent to the ground and inflicting damage.</p>
<p>You make a single melee Unarmed Strike that deals an Additional 2 Unarmed Strike damage dices. You also rise 5 feet into the air and suffer a -5 penalty to your Initiative.</p>
<p>You may also make this attack as a Triple Action, if you do, you gain 5 Additional Unarmed Strike damage dice instead of 2, rise into the air 10 feet, and suffer a -10 penalty to your Initiative.</p>';
        $helper->addTypesTosimpleObject($talent, ['Strike', 'Talent' => 5]);
        $talent->feats()->save(app()->feats['Shoto Style']);

        $talent              = new Talent;
        $talent->name        = "Improved Shor'yuken";
        $talent->action_type = 'Triple Action';
        $talent->requirement = 'You are not holding anything in both hands and you must not be wearing any armor and lightly encumbered or less';
        $talent->parent_id   = Talent::where('name', "Shor'yuken")->first()->id;
        $talent->description = '<p>You can now perform a Shinryuken.</p>
<ul>
    <li>You spend a Heroic Surge and 2 Power Points. You make a single Melee Unarmed Strike that deals an Additional +10 Unarmed Strike damage dice. You also rise 10 feet and suffer a -10 penalty to your Initiative.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 7]);

        $talent              = new Talent;
        $talent->name        = "Ha'doken";
        $talent->action_type = 'Double Action';
        $talent->requirement = 'You are not holding anything in both hands and you must not be wearing any armor and are lightly encumbered or less';
        $talent->description = '<p>When you manifest your Pyrokinesis Power to shoot a flaming ray, you may spend a Heroic Surge and an Additional 1 Power Point. If you do, the Ray deals Triple Damage. The additional Power Point counts toward the maximum number of Power Points you can spend per turn.</p>';
        $helper->addTypesToSimpleObject($talent, ['Psionic', 'Talent' => 7]);
        $talent->feats()->save(app()->feats['Shoto Style']);

        $talent              = new Talent;
        $talent->name        = 'Spinning Bird Kick';
        $talent->action_type = 'Triple Action';
        $talent->requirement = 'You are not wearing any armor and are lightly encumbered or less';
        $talent->description = '<p>You do a hand stand while spinning your extended legs.</p>
<p>You make 3 melee Unarmed Strikes against the same opponent. Each hit deals your normal Unarmed Strike damage +1D4 Blunt damage. You also move into the opponents space (5 feet). If any of your attacks from this talent hits, the opponent is pushed to the next adjacent space. If you miss all of your attacks from this talent, you land in the same space as your opponent if there is enough space, otherwise you move to the other side of the opponent if able.</p>
<p>You may also spend a Heroic Surge. If you do, you make 4 attacks instead of 3 and move an additional 5 feet.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 3]);
        $talent->feats()->save(app()->feats['Tu Lung Style']);

        $talent              = new Talent;
        $talent->name        = 'Improved Spinning Bird Kick';
        $talent->action_type = 'Triple Action';
        $talent->requirement = 'You are not wearing any armor and are lightly encumbered or less';
        $talent->parent_id   = Talent::where('name', 'Spinning Bird Kick')->first()->id;
        $talent->description = '<p>You can now perform an Improved Spinning Bird Kick.</p>
<ul>
    <li>You spend a Heroic Surge and 2 Power Point. You make 6 Melee Unarmed Strikes against all opponents in an adjacent space as yours. Each hit deals your normal Unarmed Strike damage +1D4 Blunt damage. You remain in your starting space.  Any creature hit must make a STR Save vs the amount of damage or be pushed 5 feet away from you. This Save is made after all Improved Spinning Bird attacks have been made. You gain a +10 bonus to your Initiative.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Lightning Kick';
        $talent->action_type = 'Triple Action';
        $talent->requirement = 'You are not wearing any armor and are lightly encumbered or less';
        $talent->description = '<p>You unleash a flurry of kicks.</p>
<p>You spend 1 Power Point and make 4 Melee Unarmed Strikes against the same opponent with one of your legs. Each hit deals your normal Unarmed Strike.</p>
<p>You may also spend a Heroic Surge. If you do, you make 6 Melee Unarmed Strikes instead and suffer a -7 to your Initiative.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 6]);
        $talent->feats()->save(app()->feats['Tu Lung Style']);

        $talent              = new Talent;
        $talent->name        = 'Improved Lightning Kick';
        $talent->action_type = 'Triple Action';
        $talent->requirement = 'You are not wearing any armor and are lightly encumbered or less';
        $talent->parent_id   = Talent::where('name', 'Lightning Kick')->first()->id;
        $talent->description = '<p>You can perform an Improved Lightning Kick.</p>
<ul>
    <li>Spend a Heroic Surge and 4 Power Points. You make 8 Melee Unarmed Strikes against the same opponent with one of your legs. Each hit deals your normal Unarmed Strike +1D4 Blunt damage.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Somersault Axe Kick';
        $talent->action_type = 'Double Action';
        $talent->requirement = 'You are not wearing any armor and are lightly encumbered or less';
        $talent->parent_id   = Talent::where('name', 'Lightning Kick')->first()->id;
        $talent->description = '<p>As part of this attack, you do a forward somersault, which moves you 5 feet. This movement does not provoke Attacks of Opportunity. Make an Athletics check DC 15. If you fail, this attack misses. Instead of ending on your feet, you bring one of your legs down like an Axe Kick, but landing in a splits position (one leg straight behind you and the other leg straight in front of you with your hands touching the ground). You are considered Prone. You gain a +1 bonus to AC, a -1 penalty to Hit, and a +10 bonus to Damage.</p>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 7]);

        $talent              = new Talent;
        $talent->name        = 'Hundred Hand Slap';
        $talent->action_type = 'Double Action';
        $talent->requirement = 'You are not wearing any armor and lightly encumbered or less';
        $talent->description = '<p>You can make quick slapping attacks with both your hands against the same opponent</p>
<ul>
    <li>When you gain this Talent, you gain 1 Power Point</li>
    <li>You spend 1 Power Point and make 3 Melee Unarmed Strikes against the same opponent with both hands. Each hit deals your normal Unarmed Strike Blunt damage. After all attacks have completed, the target must make a STR Save against the total damage taken or be pushed back 5 ft.</li>
    <li>You may also make this attack using a Triple Action and 1 Power Point. If you do, you make 4 Melee Unarmed Strikes instead and suffer a -7 Initiative.</li>
</ul>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 3]);
        $talent->feats()->save(app()->feats['Improved Bull Rush']);

        $talent              = new Talent;
        $talent->name        = 'Basic Punches';
        $talent->requirement = 'You are unarmed, wearing light or no armor, and only lightly encumbered or less';
        $talent->description = '<p>This Talent has 2 basic punches</p>
<dl>
    <dt>Jab</dt> <dd>Once per turn, as a Free Action, you may make an Unarmed Melee Attack with a -3 to Hit and deals 1 Point of Bludgeoning damage. This attack does not add your STR modifier to damage. If you score a Critical Hit, then you deal damage as normal.</dd>
    <dt>Cross</dt> <dd>As an Action, you make an Unarmed Melee Attack with a +1 bonus to Hit, +3 to Damage, and a -2 penalty to AC until the beginning of your next turn. The penalty to AC is cumulative</dd>
</dl>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Improved Punches';
        $talent->requirement = 'You are unarmed, wearing light or no armor, and only lightly encumbered or less';
        $talent->parent_id   = Talent::where('name', 'Basic Punches')->first()->id;
        $talent->description = '<p>This Talent has 2 more punches</p>
<dl>
    <dt>Hook</dt> <dd>As a Double Action, you make an Unarmed Melee Attack with a +2 bonus to Hit, +10 bonus to Damage, and a -3 penalty to AC until the beginning of your next turn. The penalty to AC is cumulative</dd>
    <dt>Uppercut</dt> <dd>As a Double Action, you make an Unarmed Melee Attack with a +1 bonus to Hit, and a +5 bonus to Damage. If you hit, the target must make a DC 12 CON Save or be Stunned 1.</dd>
</dl>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 5]);

        $talent              = new Talent;
        $talent->name        = 'Greater Punches';
        $talent->requirement = 'You are unarmed, wearing light or no armor, and only lightly encumbered or less';
        $talent->parent_id   = Talent::where('name', 'Improved Punches')->first()->id;
        $talent->description = '<p>This Talent has 2 more punches</p>
<dl>
    <dt>Counter Punch</dt> <dd>As a Double Reaction to an Unarmed Melee Attack, you gain a +2 bonus to AC against the attack. Then you may make an Unarmed Melee Attack with a +2 to Hit.</dd>
    <dt>Combination</dt> <dd>As an Action, you may make 2 Unarmed Melee Attacks (one with each fist), you suffer a -1 to Hit and a -3 penalty to AC until the beginning of your next turn. This penalty is cumulative in addition to the penalty for Multiple attacks.</dd>
</dl>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 8]);

        $talent              = new Talent;
        $talent->name        = 'Basic Kicks';
        $talent->action_type = 'Double Action';
        $talent->requirement = 'You are unarmed, wearing light or no armor, and only lightly encumbered or less';
        $talent->description = "<p>This Talent has 3 basic kicks.</p>
<dl>
    <dt>Front Kick</dt> <dd>Sometimes referred to as a 'Snap Kick'. Make an Unarmed Melee Strike with your leg by raising your knee of your kicking leg to the waist, then exerting force by extending your foot forward, straight towards the target. If you Hit, you deal an Additional Die of damage. The target then makes a STR Save vs the damage you dealt. Failure pushes the target back away from you 10 feet.</dd>
    <dt>Side Kick</dt> <dd>You rotate on your forward foot, allowing your kicking leg to come forward further. Make an Unarmed Melee Strike with your leg with a -1 to Hit and with a 5 ft reach.</dd>
    <dt>Back Kick</dt> <dd>You kick behind you. Using your upper body as balance, you lean forward while kicking backwards. Make an Unarmed Melee Strike with your leg with a +2 to Hit and +3 to Damage. If you miss, you must make a DEX check vs 13. Failure causes you to lose balance. If you have an Action or a Reaction, you may use it to maintain balance, otherwise you fall prone.</dd>
</dl>";
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 2]);

        $talent              = new Talent;
        $talent->name        = 'Improved Kicks';
        $talent->requirement = 'You are unarmed, wearing light or no armor, and only lightly encumbered or less';
        $talent->parent_id   = Talent::where('name', 'Basic Kicks')->first()->id;
        $talent->description = '<p>This Talent has 3 more kicks</p>
<dl>
    <dd>Roundhouse Kick</dd> <dd>You sweep your leg across, striking multiple targets. Make a single Unarmed Melee Strike attack as a Double Action. Your attack role is used against any foe that in the 3 adjacent squares in front of you. This counts as a single attack.</dd>
    <dd>Crescent Kick</dd> <dd>You bring your leg up against your body and then sweep it down and across. You gain an Additional Action. This Additional Action can only be used to make a Stunning Strike with this attack. Make an Unarmed Melee attack as a Double Action with a +1 to Hit. If you hit, you deal an Additional +5 damage and the target suffers a -3 penalty to your Stunning Strike.</dd>
    <dd>Axe Kick</dd> <dd>You bring your leg straight up against your body and bring it down like an axe against your opponent. Make an Unarmed Melee attack as a Double Action with a -2 to Hit and an increased Critical Range of +1. If you Hit, you deal an Additional 3 Dice of damage.</dd>
</dl>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 5]);
        $talent->feats()->save(app()->feats['Koryo Style']);

        $talent              = new Talent;
        $talent->name        = 'Greater Kicks';
        $talent->requirement = 'You are unarmed, wearing light or no armor, and only lightly encumbered or less';
        $talent->parent_id   = Talent::where('name', 'Improved Kicks')->first()->id;
        $talent->description = '<p>You learn some of the most difficult kicks</p>
<dl>
    <dd>Scissor Kick</dd> <dt>You leap into the air and strike 2 different targets that are in range. The targets cannot be adjacent to each other. Make an Unarmed Melee Strike attack against both targets as a Double Action. If you Hit, you deal an Additional Die of damage. The target then makes a STR Save vs the damage dealt. Failure pushes the target back from you 10 feet.</dt>
    <dd>Flying Kick</dd> <dd>You leap into the air after a running start and kick your opponent while in the air (you must use at least 1 Action to Stride towards your opponent). You may make this attack as part of a Charge attack. Make an Unarmed Melee Strike attack as an Action with a +1 to Hit. If you Hit, you deal an Additional +5 Damage. Before the target can respond (i.e. use a Reaction to make an Attack of Opportunity), you may continue your Stride in a straight line.</dd>
</dl>';
        $helper->addTypesToSimpleObject($talent, ['Strike', 'Talent' => 8]);
    }
}
