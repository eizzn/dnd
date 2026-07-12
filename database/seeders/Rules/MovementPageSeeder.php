<?php

namespace Database\Seeders\Rules;

use App\Models\Page;
use App\Models\Rule;
use Illuminate\Database\Seeder;

class MovementPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper = app()->seedHelper;

        $page              = new Page;
        $page->name        = 'Movement and Position';
        $page->order       = 20;
        $page->description = "<p>Whether across the battlefield, through crowded city streets, or along the corridors of a dangerous dungeon, your movement and position determine how you can interact with the world. Moving around in exploration and downtime modes is relatively fluid and free-form. Movement in encounter mode, in contrast, is rigid and governed by a number of rules.</p>
<h2>Movement Types</h2>
<p>Creatures have a variety of ways to move around, from dashing across the ground and soaring through the clouds to knifing through swift ocean currents, scaling sheer cliff sides, and even tunneling underfoot.</p>
<h3>Speed</h3>
<p>The Speed statistic - also called land Speed - that most player characters and monsters have indicates how far they can move across the ground. When you use the Stride action, you move a number of feet equal to your Speed. Numerous other abilities allow you to move, from Crawling to Leaping, and most of them are based on your Speed in some way. Whenever a rule mentions your Speed without specifying a type, it's referring to your land Speed.</p>
<h3>Other Movement Types</h3>
<p>Some abilities give you different ways to move, such as through the air or underground. Each of these special movement types has its own Speed value. Many creatures have these Speeds naturally. The various types of movement are listed below. Since the Stride action can be used only with your normal Speed, moving using one of these movement types requires using a special action, and you can't Step while using one of these movement types. Since Speed by itself refers to your land Speed, rules text concerning these movement types specifies the movement type to which it applies.</p>
<p>Switching from one movement type to another requires ending your movement in the first type and using a new action in the second. For instance, if you Climbed 10 feet to the top of a cliff, you could then Stride forward 10 feet.</p>
<h4>Burrow Speed</h4>
<p>A burrow Speed lets you tunnel through the ground. You can use the Burrow action if you have a burrow Speed. Burrowing doesn't normally leave behind a tunnel unless the ability specifically states that it does.</p>
<h4>Climb Speed</h4>
<p>A Climb Speed allows you to climb up or down inclines and vertical surfaces. Instead of needing to roll Athletics checks to Climb, you automatically succeed and move up to your Climb Speed instead of the listed distance.</p>
<p>You might still have to attempt an Athletics check to Climb in hazardous conditions, to Climb extremely difficult surfaces, or to cross to horizontal planes such as ceilings. You can also choose to roll an Athletics check to Climb rather than accept an automatic success. Your climb Speed grants you a +5 circumstance bonus to Athletics checks to Climb.</p>
<p>You're not flat-footed while climbing if you have a climb Speed.</p>
<h4>Fly Speed</h4>
<p>As long as you have a fly Speed, you can use the Fly and Arrest a Fall actions. You can also attempt to Maneuver in Flight if you have at least 2 ranks in the Acrobatics skill.</p>
<p>Wind conditions can affect how you Fly. In general, moving against the wind counts as moving through difficult terrain (or greater difficult terrain if you're also flying upward) and moving with the wind allows you to move 10 feet for every 5 feet of movement you spend (not cumulative with moving straight downward).</p>
<p>Upward and downward movement are relative to the gravity in your area; if you're Flying in a place without gravity, moving up or down is no different from moving horizontally.</p>
<h4>Swin Speed</h4>
<p>With a swim Speed, you can propel yourself through the water with little impediment. Instead of rolling Athletics checks to Swim, you automatically succeed and move up to your swim Speed instead of the listed distance. You still treat moving up or down as difficult terrain.</p>
<p>You might still have to attempt checks in hazardous conditions or to cross turbulent water. You can also choose to roll an Athletics check to Swim rather than accept an automatic success. Your swim Speed grants you a +5 circumstance bonus to Athletics checks to Swim.</p>
<p>Having a swim Speed doesn't necessarily mean you can breathe in water, so you might still have to hold your breath if you're underwater.</p>";
        $page->save();

        $rule              = new Rule;
        $rule->key         = 'falling';
        $rule->name        = 'Falling';
        $rule->description = '<p>When you fall more than 5 feet, you take bludgeoning damage when you land equal to half the distance you fell. Treat falls longer than 1,500 feet as though they were 1,500 feet (750 damage). If you take any damage froma  fall, you\'re knocked prone when you land.</p>
<p>You can Grab an Edge as a reaction using the Athletics skill to reduce the damage from some falls. In addition, if you fall into water, snow, or another relatively soft substance, you can treat the fall as though it were 20 feet shorter, or 30 feet shorter if you intentionally dove in. The effective reduction can\'t be greater than the depth (so when falling into 10-foot-deep water, you treat the fall as 10 feet shorter).</p>
<h3>Falling on a Creature</h3>
<p>If you land on creature, that creature must attempt a CD 15 DEX Save. On a success, it takes Bludgeoning damage equal to one-quarter the falling damage you took, on a critcal success it takes no damage, on a failure it takes bludgeoning damage equal to half the falling damage you took, and on a critical failure it takes the same amount of falling damage you took.</p>
<h3>Falling Objects</h3>
<p>A dropped object takes damage just like a falling creature. If it lands on a creature, that creature can attempt a DEX Save using the same rules as a creature falling on a creature. Hazards and spells that involve falling objects, such as a rockslide, have their own rules about how they interact with creatures and the damage they deal.</p>';
        $rule->order = 1;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'forced-movement';
        $rule->name        = 'Force Movement';
        $rule->description = '<p>When an effect forces you to move or if you start falling, that movement is defined by the effect that moved you, not your Speed. Because you\'re not acting to move, this doesn\'t trigger reactions that are triggered by movement.</p>';
        $rule->order       = 2;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'movement-encounter-mode';
        $rule->name        = 'Movement in Encounter Mode';
        $rule->description = '';
        $rule->order       = 3;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'terrain';
        $rule->name        = 'Terrain';
        $rule->description = "<p>Several types of terrain can complicate your movement by slowing you down, damaging you, or endangering you.</p>
<h3>Difficult Terrain</h3>
<p>Difficult terrain is any terrain that impedes your movement, ranging from particularly rough or unstable surfaces to thick ground cover and countless other impediments. Moving into a square of difficult terrain (or moving 5 feet into or within an area of difficult terrain, if you're not using a grid) costs an extra 5 feet of movement. Moving into a square of Greater Difficult Terrain instead costs 10 additional feet of movement. This additional cost is not increased when moving diagonally.</p>
<p>Movement you make while jumping ignores the terrain you're jumping over. Some abilities (such as flight or being incorporeal) allow you to avoid the movement reduction from some types of difficult terrain. Certain other abilities let you ignore difficult terrain on foot; such an ability also allows you to move through greater difficult terrain at the same Speed cost you ignore Greater Difficult Terrain unless the ability specifies otherwise.</p>
<p>You can't Step into difficult terrain.</p>
<h3>Hazardous Terrain</h3>
<p>Hazardous terrain damages you whenever you move through it. For instance, an acid pool, a pit of burning embers, and a spike-filled passageway are all examples of hazardous terrain. The amount and type of damage depends on the specific hazardous terrain.</p>
<h3>Narrow Surfaces</h3>
<p>A narrow surface is so precariously thin that you need to Balance (see Acrobatics) or risk falling. Even on a success, you are Flat-Footed on a narrow surface. Each time you are hit by an attack or fail a save on a narrow surface, you need to Maintain Balance to avoid falling.</p>
<h3>Uneven Ground</h3>
<p>Uneven ground is an area unsteady enough that you need to Balance (see Acrobatics) or risk falling prone and possibly injuring yourself, depending on the specifics of the uneven ground. You are Flat-Footed on uneven ground. Each time you are hit by an attack or fail a save on uneven ground, you need to Maintain Balance to avoid falling prone.</p>
<h3>Inclines</h3>
<p>An incline is an area so steep that you need to Climb using the Athletics skill in order to progress upward. You're Flat-Footed when Climbing an incline.</p>";
        $rule->order = 4;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'size-space';
        $rule->name        = 'Size and Space';
        $rule->description = '<p>Creatures and objects come in various sizes that occupy different amounts of space. The sizes and the spaces they each take up on a grid are listed in Table 9–1: Sizes. This table also lists the typical reach for creatures of each size, split into values for tall creatures (such as most bipeds) and long creatures (like most quadrupeds).</p>
<p>The Space entry lists how many feet on a side a creature’s space is, so a Large creature fills a 10-foot-by-10-foot space (four squares on the grid). A Small or larger creature or object takes up at least 1 square on a grid, and creatures of these sizes can’t usually share spaces except in situations like a character riding a mount.</p>
<table>
    <thead>
        <tr>
            <th>Size</th>
            <th>Space</th>
            <th>Reach (Tall)</th>
            <th>Reach (Long)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiny</td>
            <td>Less than 5 feet</td>
            <td>0 feet</td>
            <td>0 feet</td>
        </tr>
        <tr>
            <td>Small</td>
            <td>5 feet</td>
            <td>5 feet</td>
            <td>5 feet</td>
        </tr>
        <tr>
            <td>Medium</td>
            <td>5 feet</td>
            <td>5 feet</td>
            <td>5 feet</td>
        </tr>
        <tr>
            <td>Large</td>
            <td>10 feet</td>
            <td>10 feet</td>
            <td>10 feet</td>
        </tr>
        <tr>
            <td>Huge</td>
            <td>15 feet</td>
            <td>15 feet</td>
            <td>10 feet</td>
        </tr>
        <tr>
            <td>Gargantuan</td>
            <td>20 feet or more</td>
            <td>20 feet</td>
            <td>15 feet</td>
        </tr>
    </tbody>
</table>
<p>Multiple Tiny creatures can occupy the same square. At least four can fit in a single square, through the GM might determine that even more can fit. Tiny creatures can occpy a space occupied by a larger creature as well, and, if their reach is 0 feet, they must do so in order to attack.</p>';
        $rule->order = 5;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'cover';
        $rule->name        = 'Cover';
        $rule->description = "<p>When you're behind an obstacle that could block weapons, guard you against explosions, and make you harder to detect, you're behind Cover. Standard Cover gives you a +2 Circumstance bonus to AC, to DEX Saves against area effects, and to Stealth checks to Hide, Sneak, or otherwise avoid detection. You can increase this to Greater Cover using the Take Cover Action, increasing the Circumstance bonus to +4. If Cover is especially light, typically when it's provided by a creature, you have Lesser Cover, which grants a +1 Circumstance bonus to AC. A creature with Standard Cover or Greater Cover can attempt to use Stealth to Hide, but Lesser Cover isn't sufficient.</p>
<table>
    <thead>
        <tr>
            <th>Type of Cover</th>
            <th>Bonus</th>
            <th>Can Hide</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Lesser</td>
            <td>+1 to AC</td>
            <td>No</td>
        </tr>
        <tr>
            <td>Standard</td>
            <td>+2 to AC, DEX Saves, Stealth</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Greater</td>
            <td>+4 to AC, DEX Saves, Stealth</td>
            <td>Yes</td>
        </tr>
    </tbody>
</table>
<p>Cover is relative, so you might simultaneously have cover against one creature and not another. Cover applies only if your path to the target is partially blocked. if a creature is entirely behind a wall or the like, you don't have Line of Effect. and typically can't target it at all.</p>
<p>Usually the GM can quickly decide whether you target has cover. if you're uncertain or need to be more precises, draw a line from the center of your space to the center of the target's space. If that line passes through any terrain or object that would block the effect, the target has Standard Cover (or Greater Cover if the obstruction is extreme or the target ha Taken Cover). Fi the line passes through a creature instead. the target has Lesser Cover. when measuring Cover against an area effect, draw the line from the effect's point of origin to the center of the creature's space.</p>
<p>If a creature between you and a target is two or more sizes larger than both you and your target, that creature's space blocks the effect enough to provide Standard Cover instead of Lesser Cover. The GM might determine that a creature doesn't gain Cover from terrain that it's significantly larger than.</p>
<p>Your GM might allow you to overcome your target's Cover in some situations. If you're right net to an arrow slit, you can shoot without penalty, but you have Greater Cover against anyone shooting back at you from far away. you GM might let you reduce or negate Cover by leaning around a corner to shoot or the like. this usually takes an Action to set up, and the GM might measure Cover from an edge or corner of your space instead of your center.</p>";
        $rule->order       = '6';
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'screening';
        $rule->name        = 'Screening';
        $rule->description = "<p>When you're attempting a ranged attack, or a melee attack against a nonadjacent target, your target might be screened from you if another creature is between you. If you must attack or shoot through the space of a creature that’s one size smaller than you or larger, your target is screened from you and gains a +1 circumstance bonus to AC against your attack. Unlike cover and the concealed condition, being screened doesn’t allow a creature to attempt to Hide.</p>
<p>To determine whether your target is screened from your attack, pick the corner of your space with the least obstructed line to your target and draw a line to the center of the target’s space. If you can’t reach the center of the creature’s space without passing through either blocking terrain or another creature that’s one size smaller than you or larger, the target is screened against that attack.</p>";
        $rule->order       = 7;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'mounted-combat';
        $rule->name        = 'Mounted Combat';
        $rule->description = "<p>Mounts in Combat: Horses, ponies, and riding dogs can serve readily as combat steeds. Mounts that do not possess combat training (see the Handle Animal skill) are frightened by combat. If you don't dismount, you must make a DC 20 Ride check each round as a Move Action to control such a mount. If you succeed, you can perform a standard Action after the Move Action. If you fail, the Move Action becomes a Triple Action, and you can't do anything else until your next turn.</p>
<p>Your mount acts on your initiative count as you direct it. You move at its speed, but the mount uses its Action to move. A horse (not a pony) is a Large creature and thus takes up a space 10 feet (2 squares) across. For simplicity, assume that you share your mount's space during combat.</p>
<p>Combat while Mounted: With a DC 5 Ride check, you can guide your mount with your knees so as to use both hands to attack or defend yourself. This is a Free Action.</p>
<p>When you attack a creature smaller than your mount that is on foot, you get a +1 bonus on Melee Attacks for being on higher ground. If your mount moves more than 5 feet, you can only make a single Melee Attack. Essentially, you have to wait until your mount gets to your enemy before attacking, so you can't make a full attack. Even at your mount's full speed, you don't take any penalty on Melee Attacks while mounted.</p>
<p>If your mount Charges, you also take the AC penalty associated with a Charge. If you make an attack at the end of the Charge, you receive the bonus gained from the Charge. When Charging on horseback, you deal Double Damage with a lance (see Charge).</p>
<p>You can use Ranged weapons while your mount is taking a Double Move, but at a –4 penalty on the Attack Roll. You can use Ranged weapons while your mount is running (quadruple speed) at a –8 penalty. In either case, you make the Attack Roll when your mount has completed half its movement. You can make a Full Attack with a ranged weapon while your mount is moving. Likewise, you can take Move Actions normally.</p>
<p>Note that a \"Mounted Charge\" is synonymous with a Charge while mounted, and that when a lance is when used from the back of a Charging mount it is during a Mounted Charge not when only the Mount Charges.</p>
<p>Casting Spells While Mounted: You can cast a spell normally if your mount moves up to a normal move (its speed) either before or after you cast. If you have your mount move both before and after you cast a spell, then you're casting the spell while the mount is moving, and you have to make a Concentration Check due to the vigorous motion (DC 10 + spell level) or lose the spell. If the mount is running (quadruple speed), you can cast a spell when your mount has moved up to twice its speed, but your Concentration Check is more difficult due to the violent motion (DC 15 + spell level).</p>
<p>If Your Mount Falls in Battle: If your mount falls, you have to succeed on a DC 15 Ride check to make a soft fall and take no damage. If the check fails, you take 1d6 points of damage.</p>
<p>If You Are Dropped: If you are knocked unconscious, you have a 50% chance to stay in the saddle (75% if you’re in a military saddle). Otherwise you fall and take 1d6 points of damage. Without you to guide it, your mount avoids combat.</p>";
        $rule->order       = '200';
        $page->rules()->save($rule);
    }
}
