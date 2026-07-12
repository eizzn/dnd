<?php

namespace Database\Seeders\Formulas;

use App\Models\Formula;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class RuneFormulasSeeder extends Seeder
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

        $formula              = new Formula;
        $formula->name        = 'Arcanist';
        $formula->type        = 'Rune';
        $formula->level       = 2;
        $formula->price       = '200 gp';
        $formula->method      = 'Etched, Weapon';
        $formula->activation  = 'Passive, Attunement';
        $formula->description = '<p>After Attuning to the weapon, an Arcane spell caster can wild the weapon as if they were Proficient with it, and use their Spellcasting Ability score instead of STR or DEX. The weapon can also be used as a Spellcasting Focus.</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 5, 'meta' => 'Rune Etching']],
            'spells'   => ['Enchant Item'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Enhanced Defense';
        $formula->type        = 'Rune';
        $formula->level       = 4;
        $formula->price       = '100 gp';
        $formula->method      = 'Etched, Armor or Shield';
        $formula->activation  = 'Passive';
        $formula->description = '<p>An armor or shield with this rune provides a magical bonus to AC while wearing (armor) or wielding (shield).</p>
<p>The bonus can be increased as follows</p>
<table>
    <thead>
        <tr>
            <th>Bonus</th>
            <th>Level</th>
            <th>Cost</th>
            <th>Skill</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>+1</td>
            <td>4</td>
            <td>100 gp</td>
            <td>Rune Etching 5+</td>
        </tr>
        <tr>
            <td>+2</td>
            <td>9</td>
            <td>5,000 gp</td>
            <td>Rune Etching 15+</td>
        </tr>
        <tr>
            <td>+3</td>
            <td>15</td>
            <td>25,000 gp</td>
            <td>Rune Etching 25+</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 15, 'meta' => 'Rune Etching']],
            'spells'   => ['Enchant Item'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Enhanced Weapon';
        $formula->type        = 'Rune';
        $formula->level       = 4;
        $formula->price       = '100 gp';
        $formula->method      = 'Etched, Weapon';
        $formula->activation  = 'Passive';
        $formula->description = '<p>A weapon grants a +1 bonus to attack and damage rolls made with it.</p>
<p>The bonus can be increased as follows</p>
<table>
    <thead>
        <tr>
            <th>Bonus</th>
            <th>Level</th>
            <th>Cost</th>
            <th>Skill</th>
            <th>Ink</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>+1</td>
            <td>4</td>
            <td>100 gp</td>
            <td>Rune Etching 7+</td>
            <td>Ink, Spell Writing (Common)</td>
        </tr>
        <tr>
            <td>+2</td>
            <td>9</td>
            <td>5,000 gp</td>
            <td>Rune Etching 15+</td>
            <td>Ink, Spell Writing (Uncommon)</td>
        </tr>
        <tr>
            <td>+3</td>
            <td>15</td>
            <td>25,000 gp</td>
            <td>Rune Etching 20+</td>
            <td>Ink, Spell Writing (Rare)</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 7, 'meta' => 'Rune Etching']],
            'spells'   => ['Enchant Item'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Anarchic';
        $formula->type        = 'Rune';
        $formula->level       = 11;
        $formula->price       = '1,400 gp';
        $formula->rarity      = 'Rare';
        $formula->method      = 'Etched, weapon without an Axiomatic Rune';
        $formula->activation  = 'Passive';
        $formula->description = '<p>A weapon with this rune deals 1d6 additional chaotic damage against lawful targets. If you are lawful, you are Enfeebled 2 while carrying or wielding this weapon.</p>
<p>A Lawful creature who holds this weapon takes 1D6 Chaotic damage and is Enfeebled: 2 each turn they hold it. A neutral creature is Sickened: 1 while you hold it. For a Lawful creature, just having it in their possession causes them to be Distracted while it is in their possession.</p>
<p>The weapon with this Rune can cast Detect Law at will</p>
<dl>
    <dt>Requirements</dt> <dd>You must cast the Dispel Law spell while in the presence of an Eladrin, Slaad or Demon of CR 6 or higher. This can be ignored if the Dispel Law Spell is cast by a Priest of a Chaotic god.</dd>
</dl>';
        $helper->saveFormula($formula, ['Chaotic', 'Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 13, 'meta' => 'Rune Etching']],
            'spells'   => ['Dispel Law', 'Detect Law'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Anchoring';
        $formula->type        = 'Rune';
        $formula->level       = 5;
        $formula->price       = '3,750 gp';
        $formula->method      = 'Etched, armor';
        $formula->activation  = 'Passive';
        $formula->description = '<p>A character wearing a suit of armor with this rune is difficult to move from his position during a fight.</p>
<p>You gain a +5 bonus to the appropriate check to resist Bull Rush, Overrun, and Trip attacks.</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 7, 'meta' => 'Rune Etching']],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Antimagic';
        $formula->type        = 'Rune';
        $formula->level       = 14;
        $formula->price       = '4,400 gp';
        $formula->method      = 'Etched, armor';
        $formula->activation  = 'Command activation';
        $formula->meta        = '<dt>Trigger</dt> <dd>Someone casts a spell that targets you</dd>';
        $formula->description = '<p>Armor with this rune displaces spell energy, granting the wearer a +1 conditional bonus to Saves against magical effects. When activated (1/day), the armor attempts to dispel the triggering spell with the effect of a 6th-level Dispel Magic spell and a spell roll of +10.</p>';
        $helper->saveFormula($formula, ['Abjuration', 'Formula', 'Magical', 'Rune'], [
            'skills'   => [
                'Crafting' => ['dc' => 15, 'meta' => 'Rune Etching'],
                'Arcana'   => ['dc' => 12],
            ],
            'spells'   => ['Dispel Magic', 'Antimagic Field'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Rare)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Axiomatic';
        $formula->type        = 'Rune';
        $formula->level       = 11;
        $formula->price       = '1,400 gp';
        $formula->rarity      = 'Rare';
        $formula->method      = 'Etched, weapon without an Anarchic Rune';
        $formula->activation  = 'Passive';
        $formula->description = '<p>A weapon with this rune deals 1d6 additional Lawful damage against chaotic targets. When you critically succeed at an attack roll with this weapon against a chaotic creature, instead of rolling, count each weapon damage die as average damage rounded up (3 for d4, 4 for d6, 5 for d8, 6 for d10, 7 for d12).</p>
<p>A Chaotic creature who holds this weapon takes 1D6 Lawful damage and is Enfeebled: 2 each turn they hold it. A neutral creature is Sickened: 1 while you hold it. For a Chaotic creature, just having it in their possession causes them to be Distracted while it is in their possession.</p>
<p>The weapon with this Rune can cast Detect Chaos at will</p>
<dl>
    <dt>Requirements</dt> <dd>You must cast the Dispel Chaos spell while in the presence of an Archon, Modron or Devil of CR 6 or higher. This can be ignored if the Dispel Chaos Spell is cast by a Priest of a Lawful god.</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Lawful', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 13, 'meta' => 'Rune Etching']],
            'spells'   => ['Dispel Chaos', 'Detect Chaos'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Blinking';
        $formula->type        = 'Rune';
        $formula->level       = 10;
        $formula->price       = '15,000 gp';
        $formula->method      = 'Etched, armor';
        $formula->activation  = 'Action Command Activation';
        $formula->description = '<p>On command, with an Action, a character wearing armor with this rune can blink as the Blink spell. This ability can be used 1/day and lasts for 1 minute</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Conjuration', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Rune Etching']],
            'spells'   => ['Blink' => ['meta' => 'Heightened +3']],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Blurring';
        $formula->type        = 'Rune';
        $formula->level       = 3;
        $formula->price       = '36,000 gp';
        $formula->method      = 'Etched, armor';
        $formula->activation  = 'Action Command Activation';
        $formula->description = '<p>The form of a creature wearing this type of armor shifts and wavers. This distortion grants the wearer Concealment (20% miss chance).</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Illusion', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 3, 'meta' => 'Rune Etching']],
            'spells'   => ['Blur' => ['meta' => 'Heightened +3']],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Collapsing';
        $formula->type        = 'Rune';
        $formula->level       = 12;
        $formula->price       = '1,200 gp';
        $formula->method      = 'Etched, weapon or armor';
        $formula->activation  = 'Action Command Activation';
        $formula->description = '<p>A weapon or armor with this Rune can be commanded to shrink down to a portable size. Weapons that are shrunk down can still be used as weapons (treat as a Dagger or a stick that deals 1D2 Bludgeoning damage). Armor shrinks down to the relative size of a gauntlet.</p>
<p>Triggering the size change in either direction requires an Action.</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 10, 'meta' => 'Rune Etching']],
            'spells'   => ['Shrink Item' => ['meta' => 'Heightened +3']],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Comfort';
        $formula->type        = 'Rune';
        $formula->level       = 5;
        $formula->price       = '5,000 gp';
        $formula->method      = 'Etched, armor';
        $formula->activation  = 'Passive';
        $formula->description = "<p>Armor with this rune allows its wearer to ignore the effects of intense natural heat or cold. The character can exist comfortably in conditions between -50 and 140 degrees Fahrenheit without having to make CON Saves. The character's other equipment is likewise protected.</p>";
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Transmutation', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 7, 'meta' => 'Rune Etching']],
            'spells'   => ['Gust of Wind', 'Fiery Furnace', 'Endure Elements'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Corrosive';
        $formula->type        = 'Rune';
        $formula->level       = 9;
        $formula->price       = '700 gp';
        $formula->method      = 'Etched, weapon';
        $formula->activation  = 'Action Command Activation';
        $formula->description = "<p>The deadly surfaces of this weapon sizzles with Acid. When your attack roll is a hit or a Critical Hit, add 1D6 Acid damage to the damage dealt. In addition, on a Critical Hit, the target's armor (if any) becomes dented; if the target has a shield raised, the shield becomes dented instead.</p>
<p>Ideally, the weapon is made of Glassteel. If not, extra enchanting is required to make the weapon immune to Acid (see Corrosive Resistant Rune).</p>
<table>
    <tbody>
        <tr>
            <th>Type</th>
            <td>Standard</td>
            <th>Level</th>
            <td>9</td>
            <th>Price</th>
            <td>700 gp</td>
            <th>Acid Damage</th>
            <td>1D6</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Greater</td>
            <th>Level</th>
            <td>14</td>
            <th>Price</th>
            <td>4,500 gp</td>
            <th>Acid Damage</th>
            <td>3D6, On a Critical Hit, the target takes 3D4 Persistent damage.</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Perfect</td>
            <th>Level</th>
            <td>19</td>
            <th>Price</th>
            <td>70,000 gp</td>
            <th>Acid Damage</th>
            <td>6D6. On a Critical Hit, the target takes 6D4 Persistent damage.</td>
        </tr>
    </tbody>
</table>";
        $helper->saveFormula($formula, ['Acid', 'Formula', 'Transmutation', 'Magical', 'Rune'], [
            'skills'    => ['Crafting' => ['dc' => 11, 'meta' => 'Rune Etching']],
            'spells'    => ['Acid Splash'],
            'feats'     => ['Craft Armament'],
            'materials' => ['Glassteel'],
            'formulas'  => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Corrosive Resistant';
        $formula->type        = 'Rune';
        $formula->level       = 9;
        $formula->price       = '680 gp';
        $formula->method      = 'Etched, weapon or armor';
        $formula->activation  = 'Passive';
        $formula->description = '<p>You gain Damage Reduction to Acid, or Poison in the listed amount. The crafter chooses the type of Resistance when the rune is etched into the armor. Multiple energy resistant runes can be etched onto a single suit of armor; rather than using only the highest-level effect, each must provide resistance to a different type of damage.</p>
<table>
    <tbody>
        <tr>
            <th>Type</th>
            <td>Standard</td>
            <th>Level</th>
            <td>9</td>
            <th>Price</th>
            <td>680 gp</td>
            <th>Damage Reduction</th>
            <td>5</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Greater</td>
            <th>Level</th>
            <td>13</td>
            <th>Price</th>
            <td>2,900 gp</td>
            <th>Damage Reduction</th>
            <td>15</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Perfect</td>
            <th>Level</th>
            <td>18</td>
            <th>Price</th>
            <td>70,000 gp</td>
            <th>Damage Reduction</th>
            <td>30</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Abjuration', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Rune Etching']],
            'spells'   => ['Resist Acid'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Dancing';
        $formula->type        = 'Rune';
        $formula->level       = 14;
        $formula->price       = '4,500 gp';
        $formula->rarity      = 'Rare';
        $formula->method      = 'Etched, melee weapon';
        $formula->activation  = 'Action Command Activation, Action Operate Activation';
        $formula->description = "<p>You can activate a dancing weapon by speaking a command word and releasing the weapon into the air. The weapon then dances through the air, fighting on its own against the last enemy you attacked, or the nearest enemy to it if your target has been defeated.</p>
<p>While it's activated, it can perform 1 Action each turn, either Fly up to 40, or make a normal Strike. While the weapon is considered to have a space of 5 feet, it does not block or impede enemies attempting to move though that space, it benefits from and provides flanking, and enemies can block its passage through their spaces. The weapon can't use reactions, and its Fly actions don't trigger reactions.</p>
<p>While it's activated, a dancing weapon makes Strikes with an attack modifier of +3 plus its item bonus to attack rolls from its potency rune, if any. It uses the weapon's normal damage but has a +0 Strength modifier. The weapon's abilities that automatically trigger on a hit or Critical Hit still function, but the weapon can't use its activated abilities or any of your abilities while dancing.</p>
<p>Each round, when the weapon is finished using its Action, attempt a DC 7 flat check. If you fail the check, the activation ends and the weapon falls to the ground.</p>";
        $helper->saveFormula($formula, ['Enchantment', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 17, 'meta' => 'Rune Etching']],
            'spells'   => ['Animate Objects'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Rare)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Disrupting';
        $formula->type        = 'Rune';
        $formula->level       = 5;
        $formula->price       = '1,400 gp';
        $formula->rarity      = 'Rare';
        $formula->method      = 'Etched, melee weapon';
        $formula->activation  = 'Passive';
        $formula->description = '<p>A disrupting weapon deals extra damage to undead. Undead hit by an attack with a disrupting weapon takes extra positive damage and additional effects on Critical Hit.</p>
<table>
    <tbody>
        <tr>
            <th>Type</th>
            <td>Standard</td>
            <th>Level</th>
            <td>5</td>
            <th>Price</th>
            <td>150 gp</td>
            <th></th>
            <td>The weapon deals 1D6 extra Positive damage. On a Critical Hit, the undead is Enfeebled 1 until the end of your next turn.</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Greater</td>
            <th>Level</th>
            <td>15</td>
            <th>Price</th>
            <td>6,200 gp</td>
            <th></th>
            <td>
                The weapon deals 2D6 extra Positive damage. On a Critical Hit, the undead must attempt a DC 25 CHA Save with the following effects.
                <dl>
                    <dt>Critical Success</dt> <dd>The target is Enfeebled 1 until the end of your next turn</dd>
                    <dt>Success</dt> <dd>The target is Enfeebled 2 untilt he end of your next turn</dd>
                    <dt>Failure</dt> <dd>The target suffers an additional 20 Positive damage</dd>
                    <dt>Critical Failure</dt> <dd>The target suffers an additional 30 Positive damage</dd>
                </dl>
            </td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Perfect</td>
            <th>Level</th>
            <td>20</td>
            <th>Price</th>
            <td>90,000 gp</td>
            <th></th>
            <td>
                The weapon deals 3D6 extra Positive damage. On a Critical Hit, the undead must attempt a DC 30 CHA Save with the following effects.
                <dl>
                    <dt>Critical Success</dt> <dd>The target is Enfeebled 2 until the end of your next turn</dd>
                    <dt>Success</dt> <dd>The target is Enfeebled 3 until the end of your next turn</dd>
                    <dt>Failure</dt> <dd>The target suffers an additional 30 Positive damage</dd>
                    <dt>Critical Failure</dt> <dd>The target suffers an additional 40 Positive damage</dd>
                </dl>
            </td>
        </tr>
    </tbody>
</table>
<dl>
    <dt>Requirements</dt> <dd>You must be Good</dd>
</dl>';
        $helper->saveFormula($formula, ['Necromancy', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 5, 'meta' => 'Rune Etching']],
            'spells'   => ['Disrupt Undead'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Energy Resistant';
        $formula->type        = 'Rune';
        $formula->level       = 9;
        $formula->price       = '680 gp';
        $formula->method      = 'Etched, armor';
        $formula->activation  = 'Passive';
        $formula->description = '<p>You gain Resistance to Cold, Electricity, Fire, or Sonic in the listed amount. The crafter chooses the type of Resistance when the rune is etched into the armor. Multiple energy resistant runes can be etched onto a single suit of armor; rather than using only the highest-level effect, each must provide resistance to a different type of damage.</p>
<table>
    <tbody>
        <tr>
            <th>Type</th>
            <td>Standard</td>
            <th>Level</th>
            <td>9</td>
            <th>Price</th>
            <td>680 gp</td>
            <th>Damage Reduction</th>
            <td>5</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Greater</td>
            <th>Level</th>
            <td>13</td>
            <th>Price</th>
            <td>2,900 gp</td>
            <th>Damage Reduction</th>
            <td>15</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Perfect</td>
            <th>Level</th>
            <td>18</td>
            <th>Price</th>
            <td>70,000 gp</td>
            <th>Damage Reduction</th>
            <td>30</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Abjuration', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 6, 'meta' => 'Rune Etching']],
            'spells'   => ['Resist'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Flaming';
        $formula->type        = 'Rune';
        $formula->level       = 9;
        $formula->price       = '700 gp';
        $formula->method      = 'Etched, weapon without the Frost Rune';
        $formula->activation  = 'Action Command Activation';
        $formula->description = '<p>This weapon is empowered with flickering flames. The weapon deals additional Fire damage on a hit and additional effects on a Critical Hit.</p>
<p>Typically made with Infernal Steel. If not, the weapon must be made resistant to fire in some way.</p>
<table>
    <tbody>
        <tr>
            <th>Type</th>
            <td>Standard</td>
            <th>Level</th>
            <td>9</td>
            <th>Price</th>
            <td>780 gp</td>
            <th>Fire damage</th>
            <td>1D6. On a Critical Hit, the target also takes 1D10 Persistent Fire damage</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Greater</td>
            <th>Level</th>
            <td>14</td>
            <th>Price</th>
            <td>4,500 gp</td>
            <th>Fire damage</th>
            <td>3D6. On a Critical Hit, the target also takes 2D10 Persistent Fire damage.</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Perfect</td>
            <th>Level</th>
            <td>19</td>
            <th>Price</th>
            <td>70,000 gp</td>
            <th>Fire damage</th>
            <td>6D6. On a Critical Hit, the target also takes 3D10 Persistent Fire damage.</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Evocation', 'Formula', 'Fire', 'Magical', 'Rune'], [
            'skills'    => ['Crafting' => ['dc' => 9, 'meta' => 'Rune Etching']],
            'spells'    => ['Ray of Flame'],
            'feats'     => ['Craft Armament'],
            'materials' => ['Infernal Steel'],
            'formulas'  => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Fortification';
        $formula->type        = 'Rune';
        $formula->level       = 12;
        $formula->price       = '2,000 gp';
        $formula->method      = 'Etched, armor';
        $formula->activation  = 'Passive';
        $formula->description = "<p>Each time you're hit by a Critical Hit while wearing Fortification armor, attempt a flat check with the listed DC. If you succeed, that Critical Hit becomes a normal hit. This property thickens the armor, increasing its Bulk by 1.</p>
<table>
    <tbody>
        <tr>
            <th>Type</th>
            <td>Standard</td>
            <th>Level</th>
            <td>12</td>
            <th>Price</th>
            <td>2,080 gp</td>
            <th>DC</th>
            <td>17</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Greater</td>
            <th>Level</th>
            <td>18</td>
            <th>Price</th>
            <td>24,080 gp</td>
            <th>DC</th>
            <td>14</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Perfect</td>
            <th>Level</th>
            <td>24</td>
            <th>Price</th>
            <td>300,080 gp</td>
            <th>DC</th>
            <td>11</td>
        </tr>
    </tbody>
</table>";
        $helper->saveFormula($formula, ['Abjuration', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Rune Etching']],
            'spells'   => ['Stoneskin'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Rare)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Frost';
        $formula->type        = 'Rune';
        $formula->level       = 9;
        $formula->price       = '700 gp';
        $formula->method      = 'Etched, weapon without the Flaming Rune';
        $formula->activation  = 'Action Command Activation';
        $formula->description = "<p>This weapon is empowered with freezing ice. It deals additional Cold damage each time it hits.</p>
<p>The metal used to create this weapon must have been cold-forged, or some other way of making the material resistant to extreme Cold.</p>
<table>
    <tbody>
        <tr>
            <th>Type</th>
            <td>Standard</td>
            <th>Level</th>
            <td>9</td>
            <th>Price</th>
            <td>700 gp</td>
            <th></th>
            <td>1D6 Cold damage. On a Critical Hit, the target is also Slowed 1 until the end of your next turn</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Greater</td>
            <th>Level</th>
            <td>14</td>
            <th>Price</th>
            <td>4,500 gp</td>
            <th></th>
            <td>3D6 Cold damage. On a Critical Hit, the target is also Slowed 1 until the end of your next turn and can't take Reactions</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Perfect</td>
            <th>Level</th>
            <td>19</td>
            <th>Price</th>
            <td>70,000 gp</td>
            <th></th>
            <td>6D6 Cold damage. On a Critical Hit, the target is also Slowed 2 until the end of your next turn and can't take Reactions</td>
        </tr>
    </tbody>
</table>";
        $helper->saveFormula($formula, ['Evocation', 'Formula', 'Cold', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 9, 'meta' => 'Rune Etching']],
            'spells'   => ['Ray of Frost' => ['meta' => 'Heightened +5']],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Ghost Touch';
        $formula->type        = 'Rune';
        $formula->level       = 4;
        $formula->price       = '100 gp';
        $formula->method      = 'Etched, melee weapon or armor';
        $formula->activation  = 'Passive';
        $formula->description = "<p>This rune can be placed on armor or weapons.</p>
<ul>
    <li>
        <p>On armor, this rune provides full defense against attacks by Incorporeal creatures; their attacks target your AC instead of your TAC.</p>
        <p>Once per day, you can activate this armor to gain the effects of an ethereal jaunt spell. This doesn't require concentration and lasts for 1 hour or until you choose to return to material form as a free action at either the start or end of your turn.</p>
    </li>
    <li>
        <p>On a weapon, a weapon is particularly effective against incorporeal creatures, which almost always have a specific weakness to ghost touch weapons. Unlike with most physical objects, incorporeal creatures can touch, hold, and wield ghost touch weapons.</p>
    </li>
</ul>";
        $helper->saveFormula($formula, ['Conjuration', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 6, 'meta' => 'Rune Etching']],
            'spells'   => ['Ghost Touch'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Glamored';
        $formula->type        = 'Rune';
        $formula->level       = 5;
        $formula->price       = '140 gp';
        $formula->method      = 'Etched, armor';
        $formula->activation  = 'Action Command Activation';
        $formula->description = "<p>With a mere thought, you can change the shape and appearance of this armor to appear as ordinary or fine clothes. The armor's statistics do not change. Only a creature that is benefiting from True Seeing or a similar effect can attempt to disbelieve this illusion.</p>";
        $helper->saveFormula($formula, ['Illusion', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 7, 'meta' => 'Rune Etching']],
            'spells'   => ['Minor Illusion'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Healing';
        $formula->type        = 'Rune';
        $formula->level       = 11;
        $formula->price       = '32,000 gp';
        $formula->method      = 'Etched, armor';
        $formula->activation  = 'Automatic';
        $formula->description = '<p>When someone wearing armor with this property is rendered disabled or dying from injuries, the armor heals 20 points of damage automatically (the wearer does not need to activate the ability). This ability functions once per day.</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Necromancy', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 10, 'meta' => 'Rune Etching']],
            'spells'   => ['Cure Wounds'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Holy';
        $formula->type        = 'Rune';
        $formula->level       = 11;
        $formula->price       = '1,400 gp';
        $formula->method      = 'Etched, weapon without an Unholy Rune';
        $formula->activation  = 'Passive';
        $formula->description = '<p>A weapon with this rune deals 1D6 additional Good damage against Evil targets. If you are Evil, you become Enfeebled 2 while wielding or carrying this weapon.</p>
<p>An evil creature who holds this weapon takes 1D6 Good damage and is Enfeebled: 2 each turn they hold it. A neutral creature is Sickened: 1 while you hold it. For an evil creature, just having it in their possession causes them to be Distracted while it is in their possession.</p>
<p>The weapon with this Rune can cast Detect Evil at will.</p>
<dl>
    <dt>Requirements</dt> <dd>You must cast the Dispel Evil spell while in the presence of an Archon, Guardinal or Eladrin of CR 6 or higher. This can be ignored if the Dispel Chaos Evil is cast by a Priest of a Good god.</dd>
</dl>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Good', 'Magical', 'Rune'], [
            'skills'    => ['Crafting' => ['dc' => 7, 'meta' => 'Rune Etching']],
            'spells'    => ['Dispel Evil', 'Detect Evil'],
            'feats'     => ['Craft Armament'],
            'materials' => ['Aurorum'],
            'formulas'  => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Invisibility';
        $formula->type        = 'Rune';
        $formula->level       = 14;
        $formula->price       = '2,000 gp';
        $formula->method      = 'Etched, light armor';
        $formula->activation  = 'Action Command Activation';
        $formula->description = '<p>Once per day, you can whisper the command word to become invisible for 1 minute, gaining the effects of a 2nd-level Invisibility spell.</p>
<table>
    <tbody>
        <tr>
            <th>Type</th>
            <td>Standard</td>
            <th>Level</th>
            <td>8</td>
            <th>Price</th>
            <td>500 gp</td>
            <th></th>
            <td>1 time per day</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Greater</td>
            <th>Level</th>
            <td>10</td>
            <th>Price</th>
            <td>1,000 gp</td>
            <th></th>
            <td>3 time per day</td>
        </tr>
    </tbody>
</table>
<dl>
    <dt>Requirements</dt> <dd>You must supply a casting of Invisibility</dd>
</dl>';
        $helper->saveFormula($formula, ['Illusion', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 10, 'meta' => 'Rune Etching']],
            'spells'   => ['Invisibility'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Rare)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Keen';
        $formula->type        = 'Rune';
        $formula->level       = 13;
        $formula->price       = '3,000 gp';
        $formula->rarity      = 'Rare';
        $formula->method      = 'Etched, melee weapon that deals piercing or slashing damage';
        $formula->activation  = 'Passive';
        $formula->description = '<p>Attacks with this weapon are a Critical Hit if you get 8 more than you needed to hit instead of 10.</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 15, 'meta' => 'Rune Etching']],
            'spells'   => ['Keen Edge'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Rare)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Life Stealer';
        $formula->type        = 'Rune';
        $formula->level       = 6;
        $formula->price       = '300 gp';
        $formula->method      = 'Etched, melee weapon that deals piercing or slashing damage';
        $formula->activation  = 'Passive';
        $formula->meta        = '<dt>Trigger</dt> <dd>You deal damage with this weapon that drops a living creature to 0 Hit Points or fewer</dd>';
        $formula->description = '<p>When you deal damage from this weapon that reduces a living creature to 0 Hit Points, you gain 2D6 Hit Points. This can be increased to more powerfull versions.</p>
<table>
    <thead>
        <tr>
            <th>Level</th>
            <th>Effect</th>
            <th>Requirements</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Gain 2D6 Hit Points</td>
            <td>300 gp</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Gain 4D8 Hit Points</td>
            <td>3,000 gp</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Gain 6D10 Hit Points</td>
            <td>15,000 gp</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune', 'Evil'], [
            'skills'   => ['Crafting' => ['dc' => 10, 'meta' => 'Rune Etching']],
            'spells'   => ['Vampiric Touch'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Returning';
        $formula->type        = 'Rune';
        $formula->level       = 4;
        $formula->price       = '100 gp';
        $formula->method      = 'Etched, thrown weapon';
        $formula->activation  = 'Passive';
        $formula->description = '<p>When you attempt a thrown Strike with this weapon, it flies back to your hand after the Strike Action is completed. If your hands are full when the weapon returns, it falls to the ground in your space.</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 7, 'meta' => 'Rune Etching']],
            'spells'   => ['Hurl' => ['meta' => 'Heightened +1']],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Shadow';
        $formula->type        = 'Rune';
        $formula->level       = 5;
        $formula->price       = '140 gp';
        $formula->method      = 'Etched, light or medium non-metallic armor';
        $formula->activation  = 'Passive';
        $formula->description = '<p>Armor with this Rune becomes hazy black, as if made with tangible shadow. You gain an item bonus to Stealth checks while wearing the armor.</p>
<table>
    <tbody>
        <tr>
            <th>Type</th>
            <td>Standard</td>
            <th>Level</th>
            <td>5</td>
            <th>Price</th>
            <td>140 gp</td>
            <th>Bonus</th>
            <td>+1</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Greater</td>
            <th>Level</th>
            <td>14</td>
            <th>Price</th>
            <td>3,900 gp</td>
            <th>Bonus</th>
            <td>+2</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 6, 'meta' => 'Rune Etching']],
            'spells'   => ['Shadow Blade'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Shifting';
        $formula->type        = 'Rune';
        $formula->level       = 5;
        $formula->price       = '140 gp';
        $formula->method      = 'Etched, melee weapon';
        $formula->activation  = 'Action Operate Activation';
        $formula->description = "<p>With a moment of manipulation, you can shift this weapon into a different weapon with a similar form. When you activate this weapon, it takes the shape of another melee weapon. The weapon's potency, any special material, and properties now apply to the weapon's new shape. Any property runes that can’t apply to the new form are suppressed until the item takes a shape to which they can be applied.</p>
<p>When the Rune is first added to the weapon, you must choose what weapons that can be shifted into. Typically, all weapons from a specific weapon group (such as Axes or Swords), or a fixed list of up to 5 different weapons that have some similarity to each other.</p>";
        $helper->saveFormula($formula, ['Transmutation', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 15, 'meta' => 'Rune Etching']],
            'spells'   => ['Transmuted Weapon', 'Polymorph'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Shock';
        $formula->type        = 'Rune';
        $formula->level       = 9;
        $formula->price       = '700 gp';
        $formula->method      = 'Etched';
        $formula->activation  = 'Action Command Activation';
        $formula->description = '<p>Electric arcs crisscross this weapon each time it hits, dealing additional electricity damage ona successful hit.</p>
<p>The weapon must be made of a material that conducts electricity, while having a handle that blocks the wielder from the electricity.</p>
<table>
    <tbody>
        <tr>
            <th>Type</th>
            <td>Standard</td>
            <th>Level</th>
            <td>9</td>
            <th>Price</th>
            <td>700 gp</td>
            <th></th>
            <td>1D6 Lightning damage. On a Critical Hit, the target suffers a -5 penalty to their initiative and cannot take Reactions until the end of your next turn.</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Greater</td>
            <th>Level</th>
            <td>14</td>
            <th>Price</th>
            <td>4,500 gp</td>
            <th></th>
            <td>3D6 Electricity damage. On a Critical Hit, the target suffers a -10 penalty to their initiative, is Flat-Footed until the end of your next turn, and cannot take Reactions for 3 turns.</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Perfect</td>
            <th>Level</th>
            <td>19</td>
            <th>Price</th>
            <td>70,000 gp</td>
            <th></th>
            <td>6D6 Electricity damage. On a Critical Hit, the target suffers a -15 penalty to their initiative, is Flat-Footed until the end of your next turn, and cannot take Reactions for 4 turns.</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Evocation', 'Electricity', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 7, 'meta' => 'Rune Etching']],
            'spells'   => ['Shocking Grasp'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Slick';
        $formula->type        = 'Rune';
        $formula->level       = 4;
        $formula->price       = '80 gp';
        $formula->method      = 'Etched, armor';
        $formula->activation  = 'Action Command Activation';
        $formula->description = '<p>This property makes armor slippery, as though it were coated with a thin film of oil. You gain an item bonus to Acrobatics checks to Escape or Squeeze, depending on the version of the rune.</p>
<table>
    <tbody>
        <tr>
            <th>Type</th>
            <td>Standard</td>
            <th>Level</th>
            <td>4</td>
            <th>Price</th>
            <td>80 gp</td>
            <th>Bonus</th>
            <td>+2</td>
        </tr>
        <tr>
            <th>Type</th>
            <td>Greater</td>
            <th>Level</th>
            <td>13</td>
            <th>Price</th>
            <td>2,400 gp</td>
            <th>Bonus</th>
            <td>+4</td>
        </tr>
    </tbody>
</table>';
        $helper->saveFormula($formula, ['Transmutation', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 6, 'meta' => 'Rune Etching']],
            'spells'   => ['Grease'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Smoking';
        $formula->type        = 'Rune';
        $formula->level       = 5;
        $formula->price       = '200 gp';
        $formula->method      = 'Etched, weapon';
        $formula->rarity      = 'Rare';
        $formula->activation  = 'Free Action Command';
        $formula->description = "<p>Upon command, a smoking weapon fills the wielder's area (a 5-foot square) with noxious smoke equal to a Stinking Cloud spell. The smoke affects any creature that enters the wielder's area (such as to make Grapple attempt) and provides one-half conccealment for the wielder. THe wielder is not affected by the nauseating fumes and can see through them normally. The smoke dissipates instantly if the wielder leaves the smoke filled square, forming again in whatever area the wielder ends his movement.</p>
<p>A creature with a face larger than 5 ft by 5 ft still only has one square enveloped in smoke, only attacks that cross or enter the smoke-filled area are subject to ths miss chance.</p>";
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Rune Etching']],
            'spells'   => ['Stinking Cloud', 'Air Bubble'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Common)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Speed';
        $formula->type        = 'Rune';
        $formula->level       = 16;
        $formula->price       = '10,000 gp';
        $formula->method      = 'Etched, weapon';
        $formula->rarity      = 'Rare';
        $formula->activation  = 'Passive';
        $formula->description = '<p>While wielding a speed weapon, you gain the Quick condition, but you can use the additional Action granted only to make a Strike with the etched weapon.</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 18, 'meta' => 'Rune Etching']],
            'spells'   => ['Haste'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Rare)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Spell Storing';
        $formula->type        = 'Rune';
        $formula->level       = 13;
        $formula->price       = '3,000 gp';
        $formula->method      = 'Etched, melee weapon';
        $formula->activation  = 'Action Command Activation';
        $formula->meta        = '<dt>Requirements</dt> <dd>On your previous Action this turn, you hit and damaged a creature with the weapon</dd>';
        $formula->rarity      = 'Rare';
        $formula->description = '<p>A spellcaster can spend 1 minute to cast a 3rd-level or lower spell into the weapon, storing it for later. The spell must be able to target a creature other than the caster. When you wield a spell storing weapon, you immediately know the name and level of the spell stored in the weapon.</p>
<p>When you activate the rune, you unleash the stored spell, treating the target of the triggering attack as the target of the spell, using a spell roll modifier of +20 (DC 30) if necessary. This empties the spell from the weapon and allows a spell to be cast into it again. You can harmlessly expend the stored spell with a Focus Activation Action.</p>
<p>A spell storing weapon found as treasure has a 50% chance of having a spell of the GM’s choice stored in it.</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 15, 'meta' => 'Rune Etching']],
            'spells'   => ['Enchant Item'],
            'feats'    => ['Craft Armament', 'Scribe Scroll'],
            'formulas' => ['Ink, Spell Writing (Rare)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Improved Summoning Circle';
        $formula->type        = 'Rune';
        $formula->level       = 12;
        $formula->price       = '2,750 gp / 25,000 Permanency';
        $formula->method      = 'Inscribe';
        $formula->activation  = 'Action Command Activation';
        $formula->description = '<p>This is similar to the Summoning Circle vs Evil, except that it works on all outsiders.</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Rune', 'Calling', 'Permanency' => 12], [
            'skills'   => ['Arcana' => ['dc' => 18]],
            'spells'   => [
                'Circle of Protection From Chaos', 'Circle of Protection From Evil', 'Circle of Protection From Good',
                'Circle of Protection From Law', 'Dimensional Anchor', 'Permanency',
            ],
            'formulas' => ['Ink, Spell Writing (Rare)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Summoning Circle vs Chaos';
        $formula->type        = 'Rune';
        $formula->level       = 6;
        $formula->price       = '2,250 gp';
        $formula->method      = 'Inscribe';
        $formula->activation  = 'Action Command Activation';
        $formula->description = '<p>This is similar as the Summoning Circle vs Evil except that it holds Chaotic outsiders.</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Rune', 'Calling', 'Permanency'], [
            'skills'   => ['Arcana' => ['dc' => 14]],
            'spells'   => ['Circle of Protection From Chaos', 'Dimensional Anchor'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Summoning Circle vs Evil';
        $formula->type        = 'Rune';
        $formula->level       = '6';
        $formula->price       = '2,250 gp';
        $formula->method      = 'Inscribe';
        $formula->activation  = 'Action Command Activation';
        $formula->description = '<p>You inscribe a diagram (a two-dimensional bounded figure with no gaps along its circumference, augmented with various magical sigils).</p>
<p>Drawing a diagram by hand takes 10 minutes and requires a DC 20 Arcana check. You do not know the result of this check. If the check fails, the diagram is ineffective. You can take 10 when drawing the diagram if you are under no particular time pressure to complete the task. This task also takes 10 full minutes. If time is no factor at all, and you devote 3 hours and 20 minutes to the task, you can take 20.</p>
<p>A successful diagram allows you to cast Dimensional Anchor on the Circle. The Circle can then hold any Called Evil outsider in the magic Circle for 14 days. None of its abilities or attacks can cross the diagram. If the creature tries a CHR Save to break free of the Circle with a -5 penalty.</p>
<p>If anything disturbs the diagram, the creature is immediately released. The creature itself cannot disturb the diagram directly or indirectly.</p>
<p>Once the called creature is free of the Summoning Circle, the Circle will no longer be able to hold any called creatures. A Permanency spell can be cast to make the Summoning Circle reusable. The cost of making a Circle permanent is 5,000 gp, and you must be at least 9th level.</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Rune', 'Calling', 'Permanency'], [
            'skills'   => ['Arcana' => ['dc' => 14]],
            'spells'   => ['Circle of Protection From Evil', 'Dimensional Anchor'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Summoning Circle vs Good';
        $formula->type        = 'Rune';
        $formula->level       = '6';
        $formula->price       = '2,250 gp';
        $formula->method      = 'Inscribe';
        $formula->activation  = 'Action Command Activation';
        $formula->description = '<p>This is similar as the Summoning Circle vs Evil except that it holds Good outsiders.</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Rune', 'Calling', 'Permanency'], [
            'skills'   => ['Arcana' => ['dc' => 14]],
            'spells'   => ['Circle of Protection From Good', 'Dimensional Anchor'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Summoning Circle vs Law';
        $formula->type        = 'Rune';
        $formula->level       = '6';
        $formula->price       = '2,250 gp';
        $formula->method      = 'Inscribe';
        $formula->activation  = 'Action Command Activation';
        $formula->description = '<p>This is similar as the Summoning Circle vs Evil except that it holds Lawful outsiders</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Rune', 'Calling', 'Permanency'], [
            'skills'   => ['Arcana' => ['dc' => 14]],
            'spells'   => ['Circle of Protection From Law', 'Dimensional Anchor'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Unholy';
        $formula->type        = 'Rune';
        $formula->level       = 11;
        $formula->price       = '1,400 gp';
        $formula->method      = 'Etched, weapon without an Holy Rune';
        $formula->activation  = 'Reaction Command Activation';
        $formula->meta        = '<dt>Trigger</dt> <dd>You critically succeed at an attack roll on a good-aligned creature with the weapon</dd>';
        $formula->description = '<p>A weapon with this rune deals 1D6 additional Evil damage when it hits a good target. If you are good, you become Enfeebled 2 while carrying or wielding this weapon.</p>
<p>A good creature who holds this weapon takes 1D6 Evil damage and is Enfeebled: 2 each turn they hold it. A neutral creature is Sickened: 1 while you hold it. For a good creature, just having it in their possession causes them to be Distracted while it is in their possession.</p>
<p>The weapon with this Rune can cast Detect Good at will</p>
<dl>
    <dt>Requirements</dt> <dd>You must cast the Dispel Good spell while in the presence of an Devil, Yugoloth or Demon of CR 6 or higher. This can be ignored if the Dispel Good Spell is cast by a Priest of an Evil god.</dd>
</dl>';
        $helper->saveFormula($formula, ['Evil', 'Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'    => ['Crafting' => ['dc' => 13, 'meta' => 'Rune Etching']],
            'spells'    => ['Dispel Good', 'Detect Good'],
            'feats'     => ['Craft Armament'],
            'materials' => ['Gehennan Morghuth Iron'],
            'formulas'  => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Vampiric';
        $formula->type        = 'Rune';
        $formula->level       = 12;
        $formula->price       = '1,000 gp';
        $formula->method      = 'Etched, weapon without the Holy Rune';
        $formula->activation  = 'Passive';
        $formula->meta        = '<dt>Trigger</dt> <dd>You hit a living creature with this weapon</dd>';
        $formula->description = '<p>Whenever you hit a living creature with this weapon, it deals an additional +3 Negative Damage and you gain 1 Hit Point as the weapon draws some of their life force and heals you. On a Critical Hit, you gain 3 Hit Points.</p>';
        $helper->saveFormula($formula, ['Evil', 'Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 16, 'meta' => 'Rune Etching']],
            'spells'   => ['Vampiric Touch'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Rare)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Void';
        $formula->type        = 'Rune';
        $formula->level       = 11;
        $formula->price       = '6,500 gp';
        $formula->method      = 'Etched, melee weapon or thrown weapon';
        $formula->activation  = 'Action Command Activation';
        $formula->description = '<p>Attacks with the etched weapon deal 1D6 additional Negative damage on a hit. When you activate the weapon, it transforms into darkness and negative energy, allowing attacks with the weapon to pass through armor easily for 1 round.</p>
<p>When you attack a creature wearing armor while the etched weapon is activated, you compare the attack roll result to the target’s TAC instead of AC. The activated weapon passes harmlessly through nonliving matter, and consequently it can’t damage constructs, objects, or undead.</p>';
        $helper->saveFormula($formula, ['Evil', 'Enchantment', 'Formula', 'Magical', 'Rune', 'Negative'], [
            'skills'   => ['Crafting' => ['dc' => 13, 'meta' => 'Rune Etching']],
            'spells'   => ['Harm'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Vorpal';
        $formula->type        = 'Rune';
        $formula->level       = 17;
        $formula->price       = '15,000 gp';
        $formula->method      = 'Etched, melee weapon that deals slashing damage';
        $formula->activation  = 'Action Focus Activation';
        $formula->meta        = '<dt>Trigger</dt> <dd>You roll at least 2 sixes on your Hit roll and critically succeed at a Strike with the weapon targeting a creature with at least one head.</dd>';
        $formula->description = "<p>When you activate a vorpal weapon, the triggering creature must succeed at a DC 20 CON Save, or it is decapitated. This kills any creature except ones that don't require a head to live (such as constructs, oozes, and some aberrations and undead). For creatures with multiple heads (such as ettins or hydras), this usually kills the creature only if you sever its last head.</p>";
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 19, 'meta' => 'Rune Etching']],
            'spells'   => ['Keen Edge' => ['meta' => 'Heightened +3']],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Very Rare)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Weakening';
        $formula->type        = 'Rune';
        $formula->level       = 7;
        $formula->price       = '500 gp';
        $formula->method      = 'Etched melee or ranged weapon';
        $formula->activation  = 'Weapon deals maximum damage';
        $formula->description = "<p>Weakening weapons deal 1 point of STR damage when you roll maximum damage on the weapon die rolls. The creature's STR score cannot drop below 1.</p>
<p>This rune can be etched onto ranged weapon ammunition. Each crafting places this rune on 50 ammunition items.</p>";
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Necromancy', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Rune Etching']],
            'spells'   => ['Drain Strength'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Wounding';
        $formula->type        = 'Rune';
        $formula->level       = 6;
        $formula->price       = '250 gp';
        $formula->method      = 'Etched, melee weapon that deals either piercing or slashing damage';
        $formula->activation  = 'Passive';
        $formula->description = '<p>When you hit a creature with a wounding weapon, the target takes 1D4 Persistent Bleed damage. On a Critical Hit, it instead takes 1D8 Persistent Bleed damage.</p>';
        $helper->saveFormula($formula, ['Enchantment', 'Formula', 'Magical', 'Rune'], [
            'skills'   => ['Crafting' => ['dc' => 12, 'meta' => 'Rune Etching']],
            'spells'   => ['Cause Wounds'],
            'feats'    => ['Craft Armament'],
            'formulas' => ['Ink, Spell Writing (Uncommon)'],
        ]);
    }
}
