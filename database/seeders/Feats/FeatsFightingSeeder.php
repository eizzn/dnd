<?php

namespace Database\Seeders\Feats;

use App\Models\Feat;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class FeatsFightingSeeder extends Seeder
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

        $feat              = new Feat;
        $feat->name        = 'Light Armor';
        $feat->description = '<p>You have trained to master the use of light armor, gaining the following benefits.</p>
<ul>
    <li>Increase your STR or DEX score by 1, to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain proficiency with Light Armor</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Armor', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Light Armor Caster';
        $feat->requirement = 'You must be able to cast Arcane spells';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>If you are proficient with Light Armor, you do not suffer Spell Casting penalties for casting a spell while wearing Light Armor.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Armor', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Medium Armor';
        $feat->requirement = 'You must be proficient with Light Armor';
        $feat->description = '<p>You have trained to master the use of Medium Armor and Shields. You gain the following benefits.</p>
<ul>
    <li>Increase your STR or DEX score by 1, to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain proficiency with Medium Armor and Shields</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Armor', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Heavy Armor';
        $feat->requirement = 'You must be proficient with Light and Medium Armor';
        $feat->description = '<p>You have trained to master the use of Heavy Armor. You gain the following benefits.</p>
<ul>
    <li>Increase your STR score by 1, to a maximum of 20</li>
    <li>You gain a Talent</li>
    <li>You gain proficiency with Heavy Armor</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Armor', 'Generic' => 1]);

        $feat              = new Feat;
        $feat->name        = 'Medium Armor Master';
        $feat->requirement = 'You must have proficiency with Medium Armor';
        $feat->description = '<p>You have practiced in Medium Armor to gain the following benefits</p>
<ul>
    <li>You gain a Talent</li>
    <li>Reduce the armor check penalty from wearing Medium Armor by 1</li>
    <li>Increase the Maximum DEX modifier bonus to your AC by +1</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Armor', 'Talent', 'Generic' => 3]);

        $feat              = new Feat;
        $feat->name        = 'Heavy Armor Master';
        $feat->requirement = 'You must have proficiency with Heavy Armor';
        $feat->description = '<p>You can use your armor to deflect strikes that would kill others. You gain the following benefits.</p>
<ul>
    <li>You gain a Talent</li>
    <li>Increase your STR score by 1, to a maximum of 20</li>
    <li>While you are wearing Heavy Armor, you gain an additional Damage Reduction / 1 vs Bludgeoning, Piercing, and Slashing damage.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Armor', 'Talent', 'Generic' => 6]);

        $feat              = new Feat;
        $feat->name        = 'Medium Armor Caster';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You do not suffer Arcane Spell Casting penalties for casting a spell while wearing Medium Armor.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Armor', 'Talent', 'Generic' => 4]);
        $feat->parent_feats()->save(app()->feats['Light Armor Caster']);
        $feat->parent_feats()->save(app()->feats['Medium Armor Master']);

        $feat              = new Feat;
        $feat->name        = 'Heavy Armor Caster';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>You do not suffer Arcane Spell Casting penalties for casting a spell while wearing Heavy Armor.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Armor', 'Talent', 'Generic' => 7]);
        $feat->parent_feats()->save(app()->feats['Medium Armor Caster']);
        $feat->parent_feats()->save(app()->feats['Heavy Armor Master']);

        $feat              = new Feat;
        $feat->name        = 'Shield Master';
        $feat->requirement = 'You are wielding a shield';
        $feat->description = "<p>You are skilled at using a shield.</p>
<ul>
    <li>Increase your STR or CON score by +1, to a maximum of 20</li>
    <li>If you are wielding a Shield, you gain a +1 bonus to AC, even if you do not use an Action to raise your shield.</li>
    <li>If you have taken the Raise a Shield Action and you must make a DEX Save that allows half damage a successful Save, you may use a Reaction to add the shields' bonus to AC to your DEX Save</li>
    <li>You gain a +2 bonus to Bull Rush attacks</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Ability Boost', 'Melee', 'Armor', 'Fighter Feat']);

        $feat              = new Feat;
        $feat->name        = 'Improved Shield Master';
        $feat->requirement = 'You are wielding a shield';
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>You gain a Talent</li>
    <li>You gain an additional Action, which may only be used for the Raise a Shield Action.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Melee', 'Armor', 'Talent', 'Fighter Feat']);
        $feat->parent_feats()->save(app()->feats['Shield Master']);

        $feat              = new Feat;
        $feat->name        = 'Phalanx Fighting';
        $feat->requirement = 'You are wielding a large shield';
        $feat->description = '<ul>
    <li>You gain a Talent</li>
    <li>If you are using a Large Shield and a Light Weapon or any spear, you gain an additional +1 bonus to AC (you gain this bonus even if you have not taken the Raise a Shield Action). In addition, you gain a +1 to hit with your Light Melee weapon or spear.</li>
    <li>In addition, if you are within 5 feet of an ally who is also using a Large Shield and a Light Weapon or spear and they also have this feat, then you may form a Shield Wall. A Shield Wall grants a +4 bonus to AC (as long as all members of the Shield Wall takes the Raise a Shield Action) and provides one-half cover to all ranged attacks. Allies can also benefit from the Shield Wall even if they are not a part of the Shield Wall by standing close behind the Shield Wall.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Melee', 'Armor', 'Talent', 'Fighter Feat']);
        $feat->parent_feats()->save(app()->feats['Shield Master']);

        $feat              = new Feat;
        $feat->name        = 'Combat Mastery';
        $feat->description = '<ul>
    <li>You gain a Talent.</li>
    <li>You gain a +1 bonus to hit with Melee and Ranged attacks.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Melee Mastery';
        $feat->description = '<ul>
    <li>You gain 2 Talents.</li>
    <li>You gain a +1 bonus to hit with Melee attacks.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Ranged Mastery';
        $feat->description = '<ul>
    <li>You gain 2 Talents.</li>
    <li>You gain a +1 bonus to hit with Ranged attacks.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Weapons Group Mastery';
        $feat->description = '<ul>
    <li>You gain 3 Talents.</li>
    <li>Choose a Weapon Group. You gain a +1 bonus to hit when wielding a weapon from that group.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Weapon Focus';
        $feat->description = '<p>Choose one type of weapon. You can choose Unarmed Strike, Grapple, or Ray as your weapon for the purposes of this feat. You gain proficiency with the weapon if you do not already have proficiency.</p>
<ul>
    <li>You gain 2 Talents.</li>
    <li>You gain a +1 bonus an all attack rolls you make using the selected weapon.</li>
    <li>You gain the Fast Draw Talent, but only with the selected weapon</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Talent']);

        $feat              = new Feat;
        $feat->name        = 'Weapon Specialization';
        $feat->description = '<ul>
    <li>You gain 1 Talent.</li>
    <li>Choose a weapon you have Weapon Focus with. You gain a +5 bonus to damage to all attacks made with that weapon.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Talent', 'Fighter Feat']);
        $feat->parent_feats()->save(app()->feats['Weapon Focus']);

        $feat              = new Feat;
        $feat->name        = 'Improved Weapon Focus';
        $feat->description = '<ul>
    <li>You gain 2 Talents.</li>
    <li>Choose one of the weapons you have chosen for Weapon Focus. Your bonus from your chosen weapon from Weapon Focus is now +2.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Talent']);
        $feat->parent_feats()->save(app()->feats['Weapon Focus']);

        $feat              = new Feat;
        $feat->name        = 'Extra Melee Action';
        $feat->description = '<p>You gain an additional Action. This additional Action can only be used to make a Melee Weapon attack.</p>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Extra Action']);

        $feat              = new Feat;
        $feat->name        = 'Extra Ranged Action';
        $feat->description = '<p>You gain an additional Action. This additional Action can only be used to make a Ranged Weapon attack.</p>';
        $helper->addTypesToFeat($feat, ['Combat Mastery', 'Extra Action']);

        $feat              = new Feat;
        $feat->name        = 'Talents Master';
        $feat->description = '<p>You gain 5 Talents.</p>';
        $helper->addTypesToFeat($feat, ['Talent', 'Fighter Feat', 'Generic' => 6]);

        $feat              = new Feat;
        $feat->name        = 'Sentinel';
        $feat->description = "<p>You have mastered techniques to take advantage of every drop in any enemy's guard, gaining the following benefits</p>
<ul>
    <li>You gain 1 Talent.</li>
    <li>While in this Stance, you can make an Attack of Opportunity against opponents who make a Bull Rush attack even if they have the Improved Bull Rush feat.</li>
    <li>While in this Stance, opponents who try to Tumble Through any square you threaten suffers a -10 to their Acrobatics check.</li>
    <li>While in this Stance, when you hit a creature with an Attack of Opportunity, the creature's speed becomes 0 for the rest of the turn.</li>
    <li>While in this Stance, creatures within 5 feet of you provoke Attacks of Opportunity from you even if they take the Disengage action before leaving your reach.</li>
    <li>When a creature within 5 feet of you makes an attack against a target other than you (and that target doesn't have this feat), you can make an Attack of Opportunity against the attacking creature.</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Stance', 'Attack of Opportunity', 'Fighter Feat']);
        $feat->parent_feats()->save(app()->feats['Improved Reaction']);

        $feat              = new Feat;
        $feat->name        = 'Sharpshooter';
        $feat->requirement = 'You are wielding a ranged weapon';
        $feat->description = "<p>You have mastered range weapons and can make shots that others find impossible. You gain the following benefits.</p>
<ul>
    <li>You do not suffer the long range penalty for making a ranged attack at long range</li>
    <li>Your ranged attacks ignore half cover and three-quarters cover</li>
    <li>Before you make an attack with a ranged weapon that you are proficient with, you can choose to take a -3 penalty to the attack roll. If the attack hits, you add +10 to the attack's damage.</li>
    <li>If you have the Improved Disarm feat, you may make Disarm attempts at range with a ranged attack without any penalties</li>
    <li>If you have the Improved Trip feat, you may make Trip attempts at range with a ranged attack without any penalties</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Stance', 'Fighter Feat']);
        $feat->parent_feats()->save(app()->feats['Point-Blank Shot']);
        $feat->parent_feats()->save(app()->feats['Ranged Mastery']);

        $feat              = new Feat;
        $feat->name        = 'Stunning Fist';
        $feat->action_type = 'Double Action';
        $feat->description = '<ul>
    <li>You gain a Heroic Surge</li>
    <li>Your Unarmed Strike has a chance to Stun your target. To attempt a Stunning Strike, you must add an Action to your Strike and spend a Heroic Surge, 2 Spell Points, or 3 Power Points, and if the Strike successfully hits, the target must make a Stunning Save (10 + Character Proficiency Bonus + WIS modifier). If the target fails their Save, they gain the Stunned: 1 condition.</li>
    <li>Each additional time this Action is used against the same opponent in the same Encounter, they gain a +2 bonus to their Save.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Melee', 'Unarmed', 'Diminishing', 'Fighter Feat']);

        $feat              = new Feat;
        $feat->name        = 'Improved Stunning Fist';
        $feat->action_type = 'Double Action';
        $feat->description = '<ul>
    <li>You gain a Heroic Surge</li>
    <li>Your Stunning Fist now causes Stunned 2.</li>
</ul>>';
        $helper->addTypesToFeat($feat, ['Melee', 'Unarmed', 'Fighter Feat']);
        $feat->parent_feats()->save(app()->feats['Stunning Fist']);
    }
}
