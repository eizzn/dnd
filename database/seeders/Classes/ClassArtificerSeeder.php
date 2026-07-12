<?php

namespace Database\Seeders\Classes;

use App\Models\Feat;
use App\Models\Feature;
use App\Models\Formula;
use App\Models\Klass;
use App\Models\Spell;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassArtificerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var SeedHelper $helper */
        $helper = app()->seedHelper;

        $class       = new Klass;
        $class->name = 'Artificer';
        $class->type = 'Base';
        $helper->saveClass($class, [
            'key_attribute'  => 'INT',
            'has_spells'     => true,
            'hit_dice'       => 8,
            'skill_points'   => 8,
            'skill_progress' => 4,
            'weapons'        => 'Simple Weapons, Hand Crossbow, Heavy Crossbow',
            'armors'         => 'Light Armor, Medium Armor, Shields',
        ], ['CON', 'INT'], [
            'Arcane', 'Item Creation',
        ]);

        // Skills
        $helper->addSkillsToClass($class, ['Arcana', 'Language', 'Medicine']);

        $feature              = new Feature;
        $feature->key         = 'skilled_crafter';
        $feature->name        = 'Skilled Crafter';
        $feature->description = '<p>You gain a +2 bonus to all Crafting checks.</p>';
        $helper->saveFeature($feature, ['Item Creation']);

        $feature              = new Feature;
        $feature->key         = 'spell_storing_item';
        $feature->name        = 'Spell Storing Item';
        $feature->description = "<p>You can now store a spell in an object. Whenever you finish a Long Rest, you can touch one simple or martial weapon or one item that you can use as a spellcasting focus, and you store a spell that you know in it, choosing a 1st or 2nd level spell that you know.</p>
<p>While holding the object, a creature can take an Action to produce the spell's effect from it, using your spellcasting ability modifier. If the spell requires Concentration, the creature must Concentrate. The spell stays in the object until it's been used a number of times equal to twice your INT modifier or until you use this feature again to store a spell in an object.</p>";
        $helper->saveFeature($feature, ['Item Creation']);

        $feature              = new Feature;
        $feature->key         = 'magic_item_savant';
        $feature->name        = 'Magic Item Savant';
        $feature->description = '<p>Your skill with magic items deepens</p>
<ul>
    <li>You gain the Magic Item User feat</li>
    <li>By spending 3 days studying a magic item, you may make an Arcana check to learn the Formula for making the magic item. The Arcana DC is 13 + the Min Level to Learn the Formula. If you Fail, you cannot to learn the Formula from tihs specific magic item.</li>
</ul>';
        $helper->saveFeature($feature, ['Item Creation', 'Attunement']);

        $feature              = new Feature;
        $feature->key         = 'magic_item_master';
        $feature->name        = 'Magic Item Master';
        $feature->description = '<p>You gain the Magic Item User feat twice.</p>';
        $helper->saveFeature($feature, ['Item Creation', 'Attunement']);

        $feat              = new Feat;
        $feat->name        = 'Raumathari Sword Adept';
        $feat->description = '<p>You may have no more than 3 Artificer Discipline feats.</p>
<p>You can create a magical bond between yourself and one melee sword allowing you to transform the weapon into an extension of yourself. During a Long Rest, you can spend 1 hour performing this ritual. The sword must be within your reach throughout the ritual, at the conclusion of which you touch the sword and forge the bond, it becomes your Bonded Sword. You gain the following benefits.</p>
<ul>
    <li>You gain 2 Spell Points. You lose these Spell Points if you lose your sword, but regain them again if you form a new bond.</li>
    <li>You gain proficiency with your Bonded Sword.</li>
    <li>You may enchant the bonded sword with a spell as if you had the Craft Armament feat. Your bonded sword is used instead of a wand or staff.</li>
    <li>While you are weilding your Bonded Sword, you gain the benefits of the Intelligent Defense Feat.</li>
    <li>You gain the ability to cast the spell Shashkah as a Cantrip as if you had the Cantrip Caster Class Feature.</li>
    <li>
        <p>You may store up to 3 Spells into your Bonded Sword as if you were scribing a scroll and you Bonded Sword was the material to receive the spell as if you had the Scribe Scroll Feat, except there is no cost for scribing the spell onto your Bonded Sword.</p>
        <p>Spells stored into your Bonded Sword in this way are automatically Heightened +1</p>
        <p>You may cast this spell from your Bonded Sword for 1 less Action than it takes to cast it by spending a number of Spell Points equal to the spells Casting Level.</p>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Artificer Discipline']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Shashkah'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Improved Raumathari Sword Adept';
        $feat->description = '<p>You may have no more than 3 Artificer Discipline feats.</p>
<ul>
    <li>You gain 4 Spell Points</li>
    <li>You gain the Extra Melee Action Feat. If you already have this feat, you may select a different feat that you qualify for.</li>
    <li>You gain the ability to Craft Constructs, and you gain the formulas for 2 Common Constructs.</li>
    <li>If you strike a creature with your Bonded weapon you may spend 2 Spell Points. If you do, that creature has Disadvantage on the next Save it has to make against any spell that you cast or until 1 minute has passed.</li>
    <li>Pick 2 Cantrips from your Artificer Spell List. Your bonded sword can cast these Cantrips as if you had the Cantrip Caster Class Feature. Whenever you complete a Long Rest, you may swap out one of your Cantrips with another one that you know.</li>
    <li>You may imbue your Bonded Sword with an additional 3 spells</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Artificer Discipline']);
        $feat->parent_feats()->save(app()->feats['Raumathari Sword Adept']);

        $feat              = new Feat;
        $feat->name        = 'Vremyonni';
        $feat->description = "<p>You may have no more than 3 Artificer Discipline feats.</p>
<ul>
    <li>You gain 2 Spell Points</li>
    <li>You always have the spells associated with this Feat prepared. These spells count as artificer spells for you, but they don't count against the number of artificer spells you prepare.</li>
    <li>
        <p>You can craft a new tool known as a Battle Wrap using a ritual known only to the vremyonni. This wrap can be placed around mundane items to grant them magical fortifications or to bind to another spellcaster, allowing you to fight as a pair.</p>
        <p>If the wrap is lost or destroyed, you can craft a new one as part of a Long Rest.</p>
        <p>As part of a Short Rest, you can bind your Battle Wrap around a single weapon or part of a suit of armor.</p>
        <dl>
            <dt>Weapons</dt> <dd>Weapons wrapped in this way deal 1D6 extra damage of the weapon's damage type for each Artificer Discipline Feat you have (including this Feat).</dd>
            <dt>Armor</dt> <dd>
                Armor wrapped in this way provides Resistance against one of your choice from the following for each Artificer Discipline Feat you have (including this Feat):
                <ul>
                    <li>Bludgeoning</li>
                    <li>Piercing</li>
                    <li>Slashing</li>
                </ul>
            </dd>
        </dl>
    </li>
    <li>
        <p>You may store up to 3 Spells into your Battle Wrap as if you were scribing a scroll and you Battle Wrap was the material to receive the spell as if you had the Scribe Scroll Feat, except there is no cost for scribing the spell onto your Battle Wrap.</p>
        <p>Spells stored into your Battle Wrap in this way are automatically Heightened +1</p>
        <p>You may cast this spell from your Battle Wrap for 1 less Action than it takes to cast it by spending a number of Spell Points equal to the spells Casting Level.</p>
    </li>
</ul>";
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Artificer Discipline']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Bane', 'Bless'],
            3 => ['Magic Weapon', "Arcanist's Magic Aura"],
            5 => ['Glyph of Warding'],
            6 => ['Private Sanctum', 'Stoneskin'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Improved Vremyonni';
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>You gain an Item Creation Feat</li>
    <li>You may craft an Additional Battle Wrap</li>
    <li>You may store an additional Spell into each of your Battle Wraps</li>
    <li>You gain 2 Spell Points</li>
    <li>
        <p>You can use your Battle Wrap to attach yourself to another willing creature who can cast spells. this process takes 10 minutes and can only be ended as part of a Short or Long Rest, or if either of you die. If you have an Effigy or a Golem, you may choose to attach your Battle Wrap to your Effigy or Golem.</p>
        <p>While bound in this way, either of you can use an Action to gain the following benefits.</p>
        <ul>
            <li>If one of you moves (on their own volition or by using magic), the other immediately Teleports to an open space within 5 feet of the bound partner. If the creature is unwilling to Teleport, the other has their speed reduced to 0 until the end of turn.</li>
            <li>You both have Resistance to all damage except Ability Score damage. Whenever one bound partner takes damage, the other takes the same amount of damage</li>
            <li>You both have Advantage on Saves</li>
        </ul>
    </li>
    <li>If you participate in a Communal Binding, you are considered to have the ability to create Communal Pools when determining what type of Die the Pool will have.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation']);
        $feat->parent_feats()->save(app()->feats['Vremyonni']);

        $feat              = new Feat;
        $feat->name        = 'Greater Vremyonni';
        $feat->description = '<p>You gain the following</p>
<ul>
    <li>You gain an Item Creation Feat</li>
    <li>You may craft an Additional Battle Wrap</li>
    <li>You gain 2 Spell Points</li>
    <li>
        <p>With an Action, you cause any number of your Battle Wraps to flare brightly with energy. For 10 minutes, the following changes apply to your Battle Wrap and whatever it is bound upon:</p>
        <ul>
            <li>Weapons grant +3 bonus to attack and causes Double Damage</li>
            <li>Armor grants Resistance to Bludgeoning, Piercing, and Slashing damage, as well as granting an Additional Damage Reduction 3.</li>
            <li>If you are bound to a willing spellcaster, you both gain 10 Temporary Spell Points. These Spell Points are lost at the end of the duration of this ability. If either of you tries to cast a spell, they can use a spell slot from the other bound creature if the other creature consents. Either spellcaster may use any Meta Magic Feat that either knows to modify the cast spell.</li>
        </ul>
        <p>After the 10 minutes elapses, the Battle Wraps you chose burns away to ashes, requiring the crafting of a new Battle Wrap. Any Spells stored in that Battle Wrap are lost.</p>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation']);
        $feat->parent_feats()->save(app()->feats['Improved Vremyonni']);

        $feat              = new Feat;
        $feat->name        = 'Wand of Cantrips';
        $feat->description = '<p>You may have no more than 3 Artificer Discipline feats.</p>
<p>You may create a Pseudo Wand with one of the cantrip spells you know. The Pseudo Wand has 20 charges, and requires Attunement to use. It is always Heightened to the highest Spell Level that you may memorize. Any one may use this Pseudo Wand with the Activate Magic Item Check.</p>
<p>After each Long Rest, you may add charges to one of your Pseudo wands with 3 Charges.</p>
<p>You may have an additional Pseudo Wand for each Artificer Discipline feat you have.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Artificer Discipline']);

        $feat              = new Feat;
        $feat->name        = 'Artillerist';
        $feat->description = '<p>You may have no more than 3 Artificer Discipline feats.</p>
<p>You gain the following</p>
<ul>
    <li>When you gain this feat, you gain the Formula for 4 Magic Items and/or Infusions</li>
    <li>You can construct magic items as if you had the Craft Implement feat, except that the item has 3 charges, and requires Attunement to use. The item can be of any size, but it must be at least as large as a Short Sword or a Small Shield.</li>
    <li>
        <p>You can create a Bulky Magical Item.</p>
        <p>Creating a Bulky Magical Item takes twice as long, costs 5 times more gp, and has 3 times more charges but does not require Attunement. The end resulting construct is too large to move under normal circumstances. Breaking down a Bulky Magical Item takes a quarter of the construction time to break down for transport and again a quarter of the construction time to put back together.</p>
        <p>Bulky Magical Items can be crafted with spells as normal, except that you can Heighten and/or Augment up to 3 levels without having to use a higher level Spell Slot or devoting the required Spell Points.</p>
        <p>You may have only 1 Bulky Magical item at a time.</p>
    </li>
    <li>You may add your Artillery items (including your Wand of Cantrips) to your Artifice Armor. You may not add Bulky Artillery items to your armor.</li>
    <li>You may attach your Artillery item to your Effigy if you have one. The Effigy must be one that you created and it must be at least Medium size. You may only add Bulky Artillery items to your Effigy if it is Large or larger. If the Effigy is Large, it is considered Encumbered.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Artificer Discipline']);
        $feat->parent_feats()->save(app()->feats['Wand of Cantrips']);

        $feat              = new Feat;
        $feat->name        = 'Artifice Armorer';
        $feat->description = "<p>You may have no more than 3 Artificer Discipline feats.</p>
<p>You gain the ability to augment armors to function like a second skin. You can augment your armor with magical abilities and the armor then requires Attunement. You gain the following abilities.</p>
<ul>
    <li>You may augment a suit of armor by spending 20 gp and 8 hours working on it. You may only have 1 suit of armor augmented in this way at a time.</li>
    <li>When you augment a suit of armor, it removes any STR requirement when you wear it</li>
    <li>The armor attaches to you and can't be removed against your will. It also expands to cover your entire body, although you can retract or deploy the helm as a Free Action. The armor replaces any missing limbs, functioning identically to a limb it replaces.</li>
    <li>You can doff or don your augmented armor with an Action.</li>
    <li>
        <p>You may imbue your armor with 3 of the following powers if you have access to the required spell. The spell may not be Augmented even if it is a cantrip.</p>
        <ul>
            <li>+2 STR. No Spell required</li>
            <li>+2 CON. No Spell required</li>
            <li>+5 Run Speed. Fleet Step</li>
            <li>Increase the Damage Reduction of the Armor by +1</li>
            <li>Shocking Grasp as an Action at will</li>
            <li>Fire Bolt as a Double Action at will</li>
            <li>Shield as a Reaction at will</li>
            <li>Thunderclap as a Double Action at will</li>
            <li>Mold a Small or Medium metal Melee weapon from your armor as an Action. The weapon dissipates if it ever leaves contact with your armor. No Spell required.</li>
        </ul>
    </li>
    <li>You may of course augment your armor with any Item Creation feats</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Artificer Discipline']);

        $feat              = new Feat;
        $feat->name        = 'Improved Artifice Armorer';
        $feat->description = '<p>You may have no more than 3 Artificer Discipline feats.</p>
<p>Your armor becomes more powerful.</p>
<ul>
    <li>Your armor is now magically enhanced with an AC bonus of +1 (to a maximum of +3)</li>
    <li>Increase your gauntlet damage to 1D8</li>
    <li>
        <p>You may imbue your armor with 3 of the following powers if you have access to the requirements.</p>
        <ul>
            <li>Increase your STR by +2 while wearing your armor</li>
            <li>Increase your CON by +2 while wearing your armor</li>
            <li>Increase the Damage Reduction of the Armor by +2</li>
            <li>You may create your armor with Adamantine if you have access to the rare material</li>
            <li>Fly at will. Fly spell</li>
            <li>Mold any Small, Medium or Large Melee weapon from your armor as a Free Action. The weapon dissipates if it ever leaves contact with your armor. No Spell Required.</li>
        </ul>
    </li>
</ul>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Artificer Discipline']);
        $feat->parent_feats()->save(app()->feats['Artifice Armorer']);

        $feat              = new Feat;
        $feat->name        = 'Effigy Companion';
        $feat->description = "<p>You may have no more than 3 Artificer Discipline feats.</p>
<ul>
    <li>You may have an Effigy Companion, as if you had the Animal Companion feat, except it doesn't cost any Spell Points or Spell Slots but it does require Attunement. Treat the Effigy as if you had spent 2 Spell Point and a 1st level Spell Slot.</li>
    <li>You may repair damage that the Effigy has suffered by spending 1 hour of Downtime. Each hour spent of Downtime repairing the Effigy repairs 2D8 + 4 Hit Points.</li>
    <li>If you have the Find Familiar feat, you may have your Effigy act as your Familiar. It then gains all the benefits of a Familiar.</li>
    <li>You may use multiple Attunement slots to improve your Effigy Companion, as if you had spent addition Spell Points and higher level Spell Slots. Each addition Attunement increases the Effigy as if you had sacrificed a Spell Slot 1 level higher.</li>
    <li>If you have the ability to Craft Golems, any Golem you create has 4 additional Hit Dice and you get 5 Ability Points that you can add to the Golems Ability scores as you wish (STR, DEX)</li>
</ul>";
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Artificer Discipline', 'Construct']);
        $helper->addSpellsToFeat($feat, [
            2 => ['Create Homunculus'],
        ]);

        $feat              = new Feat;
        $feat->name        = 'Craft Effigy';
        $feat->description = "<p>You may have no more than 3 Artificer Discipline feats.</p>
<p>You can Craft Effigies. These effigies require Attunement.</p>
<dl>
    <dt>Size and Type</dt> <dd>The creature's type changes to Construct. It loses all subtypes and does not gain the augmented subtype. Recalculate Base Attack Bonus, Saves, Feats, Skills accordingly as described below.</dd>
    <dt>Hit Dice and Hit Points</dt> <dd>
        <table>
            <thead>
                <tr>
                    <th>Construct Size</th>
                    <th>Bonus Hit Points</th>
                    <th>Spell Points</th>
                    <th>Attunement Slots</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fine to Tiny</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>Small</td>
                    <td>10</td>
                    <td> - </td>
                    <td>1 Attunement Slot</td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td>20</td>
                    <td>1 Spell Point</td>
                    <td>1 Attunement Slot</td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td>30</td>
                    <td>2 Spell Points</td>
                    <td>2 Attunement Slots</td>
                </tr>
                <tr>
                    <td>Huge</td>
                    <td>40</td>
                    <td>3 Spell Points</td>
                    <td>3 Attunement Slots</td>
                </tr>
                <tr>
                    <td>Gargantuan</td>
                    <td>60</td>
                    <td>4 Spell Points</td>
                    <td>4 Attunement Slots</td>
                </tr>
                <tr>
                    <td>Colossal</td>
                    <td>80</td>
                    <td>5 Spell Points</td>
                    <td>5 Attunement Slots</td>
                </tr>
            </tbody>
        </table>
    </dd>
    <dt>Speed</dt> <dd>As base creature</dd>
    <dt>Armor Class</dt> <dd>An effigy's natural AC improves by 2 points. It is crafted from material generally tougher than living flesh.</dd>
    <dt>Base Attack Bonus</dt> <dd>As a Construct, an Effigy creature's Base Attack Bonus is equal to 3/4 its Hit Dice</dd>
    <dt>Attack</dt> <dd>
        <p>An effigy retains all the natural attacks and weapon proficiencies of the base creature. An Effigy based on a humanoid or human-sized creature with no natural attacks gains a Slam Attack as shown below, which it can use in place of a weapon attack.</p>
        <table>
            <thead>
                <tr>
                    <th>Size</th>
                    <th>Attack</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fine or Diminutive</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>Tiny</td>
                    <td>Slam (1D2 plus 1-1/2 X STR bonus)</td>
                </tr>
                <tr>
                    <td>Small</td>
                    <td>Slam (1D3 plus 1-1/2 X STR bonus)</td>
                </tr>
                <tr>
                    <td>Medium</td>
                    <td>Slam (1D4 plus 1-1/2 X STR bonus)</td>
                </tr>
                <tr>
                    <td>Large</td>
                    <td>Slam (1D6 plus STR bonus)</td>
                </tr>
                <tr>
                    <td>Huge</td>
                    <td>Slam (2D6 plus STR bonus)</td>
                </tr>
                <tr>
                    <td>Gargantuan</td>
                    <td>Slam (3D6 plus STR bonus)</td>
                </tr>
                <tr>
                    <td>Colossal</td>
                    <td>Slam (4D6 plus STR bonus)</td>
                </tr>
            </tbody>
        </table>
    </dd>
    <dt>Special Attacks</dt> <dd>An Effigy loses all Supernatural Special attacks, Spell-Like Abilities, and Extraordinary Special Attacks. It retains any Extraordinary Special Attacks that do not allow a Save (such as Rake, Rend, or Constrict) or any for which the target's Save is based on the creature's STR (such as Trample) or DEX.</dd>
    <dt>Special Qualities</dt> <dd>
        <p>An Effigy loses all the special qualities of the base creature, but it gains the special qualities given below.</p>
        <table>
            <thead>
                <tr>
                    <th>Hit Dice</th>
                    <th>Damage Reduction</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1 - 3</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>4 - 6</td>
                    <td> - </td>
                </tr>
                <tr>
                    <td>7 - 10</td>
                    <td>1/Adamantine</td>
                </tr>
                <tr>
                    <td>10 - 15</td>
                    <td>3/Adamantine</td>
                </tr>
                <tr>
                    <td>16 - 20</td>
                    <td>5/Adamantine</td>
                </tr>
                <tr>
                    <td>21 or more</td>
                    <td>7/Adamantine</td>
                </tr>
            </tbody>
        </table>
    </dd>
    <dt>Saves</dt> <dd>Base Save bonus 1/3 Hit Die</dd>
    <dt>Abilities</dt> <dd>An Effigy's STR increases by 4, and it takes a -2 penalty to DEX. It has no CON or INT and has a WIS and CHR 11</dd>
    <dt>Skills and Feats</dt> <dd>An Effigy loses all Skills and Feats</dd>
    <dt>Familiar</dt> <dd>If you have the Find Familiar Feat, you can make it into an Effigy.</dd>
</dl>";
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Artificer Discipline', 'Construct']);
        $helper->addSpellsToFeat($feat, [
            3 => ['Sabotage Construct'],
            4 => ['Repair Construct'],
        ]);
        $feat->parent_feats()->save(app()->feats['Craft Wondrous Item']);
        $feat->parent_feats()->save(app()->feats['Effigy Companion']);

        $feat              = new Feat;
        $feat->name        = 'Wand of Spells';
        $feat->description = '<p>You may now use your Wand of Cantrips ability to create Pseudo Wands with a 1st, 2nd, and 3rd level Spell you know. Use the following table to determine the number of charges the wand is created with.</p>
<table>
    <thead>
        <tr>
            <th>Spell Level</th>
            <th>Max Charges</th>
            <th>Recharge per Long Rest</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1st</td>
            <td>5</td>
            <td>3</td>
        </tr>
        <tr>
            <td>2nd</td>
            <td>3</td>
            <td>2</td>
        </tr>
        <tr>
            <td>3rd</td>
            <td>2</td>
            <td>1</td>
        </tr>
    </tbody>
</table>
<p>You may have an additional Pseudo Wand of Cantrips. Pseudo Wands you create with this feat counts toward your maximum number of Pseudo Wand of Cantrips.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation']);
        $feat->parent_feats()->save(app()->feats['Wand of Cantrips']);

        $feat              = new Feat;
        $feat->name        = 'Improved Wand of Spells';
        $feat->description = '<p>You may now use your Wand of Cantrips ability to create Pseudo Wands with a 4th or 5th level Spell you know. Use the following table to determine the number of charges the wand is created with.</p>
<table>
    <thead>
        <tr>
            <th>Spell Level</th>
            <th>Max Charges</th>
            <th>Recharge per Long Rest</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>4th</td>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>5th</td>
            <td>1</td>
            <td>1</td>
        </tr>
    </tbody>
</table>
<p>You may have an additional Pseudo Wand of Cantrips. Pseudo Wands you create with this feat counts toward your maximum number of Pseudo Wand of Cantrips.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation']);
        $feat->parent_feats()->save(app()->feats['Wand of Spells']);

        $feat              = new Feat;
        $feat->name        = 'Augment Artifice Armor';
        $feat->description = '<p>Increase the Damage Reduction of your Artifice Armor by +1</p>
<ul>
    <li>Select one of your 1st level spells. Your armor may cast that spell up to 3 times per day</li>
    <li>Select one of your 2nd level spells. Your armor may cast that spell up to 2 times per day</li>
    <li>If you have the Scribe Scroll Feat, you may scribe up to 2 spells on the inside of your helmet and cast it like any scroll but it is always ready to be cast.</li>
    <li>If you have the Brew Potion Feat, you may have up to 5 Potions in vials imbued into your armor. With an Action and a command word, a tube in your helm feeds you the contents of the Potion.</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation']);
        $feat->parent_feats()->save(app()->feats['Artifice Armorer']);

        $feat              = new Feat;
        $feat->name        = 'Improved Augment Artifice Armor';
        $feat->description = '<p>Your armor now grants Resistance to Bludgeoning, Piercing, and Slashing.</p>
<ul>
    <li>Select one of your 3rd level spells. Your armor may cast that spell up to 1 time per day.</li>
    <li>Select one of your 4th level spells. Your armor may cast that spell up to 1 time per day.</li>
    <li>If you have the Scribe Scroll Feat, you may scribe up to 3 spells instead of 2.</li>
    <li>If you have the Brew Potion Feat, you may have up to 7 Potions instead of 5.</li>
    <lie>If you have the Forge Ring Feat, your armor increases the number of Attunement you may have by 2. These additional Attunments must be used to attune magical Rings.</lie>
</ul>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation']);
        $feat->parent_feats()->save(app()->feats['Augment Artifice Armor']);

        $feat              = new Feat;
        $feat->name        = 'Additional Effigy';
        $feat->description = '<p>You may construct and control an additional Effigy.</p>
<p>You may take this feat up to 2 times.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Construct']);
        $helper->addSpellsToFeat($feat, [
            6 => ['Control Construct'],
        ]);
        $feat->parent_feats()->save(app()->feats['Craft Effigy']);

        $feat              = new Feat;
        $feat->name        = 'Craft Infusion';
        $feat->description = "<p>You may have no more than 3 Artificer Discipline feats.</p>
<p>When you gain this feat for the first time, you gain the formula for 4 Elixirs/Infused Items. You may have a maximum of 4 Elixirs/Infused Items at one time.</p>
<p>You may craft any Elixir/Infused Item that you have the formula for.</p>
<ul>
    <li>If you have the Brew Potion feat, half the time to craft any Elixir.</li>
    <li>If you have the Craft Wondrous Item feat, half the time to craft any Infused Item.</li>
    <li>
        <p>You may invest a spark of magic into mundane objects. To use this ability, you must have thieves' tools or artisan tools on hand. You then touch a Tiny nonmagical object as an Action and give it one of the following magical properties of your choice.</p>
        <ul>
            <li>The object sheds bright light in a 5-foot radius and dim light for an additional 5 feet.</li>
            <li>Whenever tapped by a creature, the object emits a recorded message that can be heard up to 10 feet away. You utter the message when you bestow this property on the object, and the recording can be no more than 6 seconds long.</li>
            <li>The object continuously emits your choice of an odor or a nonverbal sound (wind, waves, chirping, or the like). The chosen phenomenon is perceivable up to 10 feet away.</li>
            <li>A static visual effect appears on one of the object's surfaces. This effect can be a picture, up to 25 words of text, lines and shapes, or a mixture of these elements, as you like.</li>
        </ul>
        <p>The chosen property lasts indefinitely. As an Action, you can touch the object and end the property early.</p>
        <p>You can bestow magic on multiple objects, touching one object each time you use this feature, though a single object can only bear one property at a time. The maximum number of objects you can affect with this feature at one time is equal to your INT modifier (minimum of one object). If you try to exceed your maximum, the oldest property immediately ends, and then the new property applies.</p>
    </li>
</ul>";
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Artificer Discipline', 'Elixir']);
        $feat->skills()->save(app()->skills['Crafting'], ['dc' => 2]);

        $feat              = new Feat;
        $feat->name        = 'Infused Item Master';
        $feat->description = '<p>You may have no more than 3 Artificer Discipline feats.</p>
<p>You gain the Improved Crafting feat.</p>
<p>You gain 2 other Item Creation feats that are not an Artificer Discipline feat. If the item you create requires Attunement, the cost to create the magic item is halved.</p>';
        $helper->addTypesToFeat($feat, ['Downtime', 'Item Creation', 'Artificer Discipline']);
        $feat->parent_feats()->save(app()->feats['Craft Infusion']);

        $helper->addFeaturesToClass($class, [
            'skilled_crafter'    => [1],
            'class_group_feat'   => [2, 3, 5, 7, 9, 12, 15, 18],
            'spell_storing_item' => [11],
            'magic_item_savant'  => [14],
            'magic_item_master'  => [18],
        ]);
        $class->features()->save(app()->features['wizard_spell_list'], [
            'level' => 1,
            'meta'  => 'Spells that you can memorize but cannot cast due to not having a number for that level means that you may memorize a spell of that level for use in crafting purposes, but you cannot cast for its effect',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 2,
            'meta'  => 'Activate Magic Item',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 3,
            'meta'  => 'Expanded Spell Slot',
        ]);
        $class->features()->save(app()->features['feat'], [
            'level' => 10,
            'meta'  => 'Improved Crafting',
        ]);

        $helper->addFeatsToClass($class, [
            'Raumathari Sword Adept'          => 2,
            'Improved Raumathari Sword Adept' => 11,
            'Vremyonni'                       => 2,
            'Improved Vremyonni'              => 9,
            'Greater Vremyonni'               => 15,
            'Wand of Cantrips'                => 2,
            'Artillerist'                     => 6,
            'Wand of Spells'                  => 5,
            'Improved Wand of Spells'         => 9,
            'Artifice Armorer'                => 2,
            'Improved Artifice Armorer'       => 6,
            'Augment Artifice Armor'          => 7,
            'Effigy Companion'                => 2,
            'Craft Effigy'                    => 6,
            'Craft Infusion'                  => 2,
            'Infused Item Master'             => 6,
            'Additional Effigy'               => 12,
        ]);

        $helper->addSpellsToClass($class, [
            0 => ['Acid Splash', 'Booming Blade', 'Chromatic Ray', 'Clean Self', 'Dancing Lights', 'Daze', 'Detect Magic',
                'Detect Undead', 'Disrupt Undead', 'Electric Arc', 'Fire Bolt', 'Frostbite', 'Ghost Sound', 'Glue', 'Light',
                'Mage Hand', 'Mending', 'Message', 'Minor Illusion', 'Necrotic Touch', 'Prestidigitation', 'Poison Spray',
                'Produce Flame', 'Ray of Frost', 'Resistance', 'Shield', 'Shocking Grasp', 'True Strike', ],
            1 => ['Air Bubble', 'Alarm', 'Burning Hands', 'Color Spray', 'Comprehend Languages', 'Cure Wounds', 'Disguise Self',
                'Enchant Item', 'Faerie Fire', 'Feather Fall', 'Floating Disk', 'Fog Cloud', 'Force Object', 'Grease', 'Hardening',
                'Hideous Laughter', 'Immunity to Adhesive', 'Jump', 'Knight Unburdened', 'Mage Armor', 'Magic Missile',
                'Mold Metal', 'Portal Stabilization', 'Shock Bolt', 'Silent Image', 'Sleep', 'Snare', 'Spring Sheath', 'Swift',
                'Swift Ready', 'Thunderwave', 'Ventriloquism', 'Weapon Shift', ],
            2 => ['Acid Arrow', 'Air Sphere', 'Alter Self', 'Arcane Lock', "Bear's Endurance", 'Blindness', 'Blur',
                "Bull's Strength", "Cat's Grace", 'Comprehend Languages', 'Continual Flame', 'Darkness', 'Darkvision',
                'Deafness', 'Drain Construct', "Eagle's Splendor", 'Endure Elements', 'Enlarge', 'Flaming Sphere',
                "Fox's Cunning", 'Gentle Repose', 'Gust of Wind', 'Hypercognition', 'Invisibility', 'Knock', 'Levitate',
                'Magic Mouth', 'Magic Weapon', 'Mirror Image', 'Misty Step', 'Obscuring Mist', "Owl's Wisdom", 'Pyrotechnics',
                'Ray of Enfeeblement', 'Resist Energy', 'Rope Trick', 'Scorching Ray', 'See Invisibility', 'Shatter', 'Spider Climb',
                'Suggestion', 'Touch of Idiocy', 'Unseen Crafter', 'Water Walk', 'Web', ],
            3 => ['Analyze Portal', 'Blink', 'Clairvoyance', 'Create Homunculus', 'Dispel Magic', 'Erupting Earth',
                'Flame Arrows', 'Fireball', 'Fly', 'Glyph of Warding', 'Haste', 'Hypnotic Pattern', 'Keen Edge', 'Lightning Bolt',
                'Sending', 'Sleet Storm', 'Slow', 'Stinking Cloud', 'Tidal Wave', 'Tiny Servant', 'Thunder Step', 'Tongues',
                'Water Breathing', 'Wall of Sand', 'Wall of Wind', ],
            4 => ['Arcane Eye', 'Confusion', 'Control Water', 'Dimension Door', 'Dimensional Anchor', 'Fabricate', 'Fire Shield',
                'Globe of Invulnerability', 'Ice Storm', 'Phantasmal Killer', 'Portal View', 'Resilient Sphere', 'Sabotage Construct',
                'Stoneskin', 'Wall of Fire', 'Watery Sphere', ],
            5 => ['Animate Objects', 'Banishment', 'Cloudkill', 'Cone of Cold', 'Creation', 'Passwall', 'Planar Binding',
                'Portal Barricade', 'Scrying', 'Summon Elemental', 'Telepathic Bond', 'Teleportation Circle', 'Wall of Force',
                'Wall of Stone', ],
            6 => ['Arcane Gate', 'Chain Lightning', 'Circle of Death', 'Create Gargoyle', 'Disintegrate', 'Eyebite', 'Fantastic Machine',
                'Freezing Sphere', 'Guards and Wards', 'Magnetism', 'Move Earth', 'Portal-to-Portal Redirect', 'Stone Metamorphosis',
                'Scatter', 'Sunbeam', 'Teleport', 'True Seeing', 'Wall of Ice', 'Wind Walk', ],
            7 => ['Arcane Sword', 'Contingency', 'Etherealness', 'Finger of Death', 'Forcecage', 'Plane Shift', 'Prismatic Spray',
                'Reverse Gravity', 'Sequester', 'Simulacrum', 'Symbol', ],
            8 => ['Clone', 'Control Weather', 'Demiplane', 'Earthquake', 'Feeblemind', 'Incendiary Cloud', 'Portal Reformat',
                'Power Word Stun', 'Sunburst', ],
            9 => ['Arcane Evasion', 'Astral Projection', 'Blade of Disaster', 'Disjunction', 'Foresight', 'Gate', 'Imprisonment',
                'Invulnerability', 'Meteor Swarm', 'Prismatic Sphere', 'Power Word Kill', 'Prismatic Wall', ],
        ]);

        $helper->addSpellSlotsToClass($class, [
            1  => ['cantrips' => 1, 'one' => 0],
            2  => ['cantrips' => 2, 'zero' => 1, 'one' => 0],
            3  => ['cantrips' => 2, 'zero' => 1, 'one' => 0],
            4  => ['cantrips' => 3, 'zero' => 2, 'one' => 0, 'two' => 0, 'max_slot_level' => 1],
            5  => ['cantrips' => 3, 'zero' => 2, 'one' => 0, 'two' => 0, 'max_slot_level' => 1],
            6  => ['cantrips' => 3, 'zero' => 2, 'one' => 0, 'two' => 0, 'max_slot_level' => 2],
            7  => ['cantrips' => 4, 'zero' => 3, 'one' => 1, 'two' => 0, 'three' => 0, 'max_slot_level' => 2],
            8  => ['cantrips' => 4, 'zero' => 3, 'one' => 1, 'two' => 0, 'three' => 0, 'max_slot_level' => 3],
            9  => ['cantrips' => 4, 'zero' => 3, 'one' => 1, 'two' => 0, 'three' => 0, 'max_slot_level' => 3],
            10 => ['cantrips' => 4, 'zero' => 3, 'one' => 1, 'two' => 1, 'three' => 0, 'four' => 0, 'max_slot_level' => 3],
            11 => ['cantrips' => 4, 'zero' => 4, 'one' => 1, 'two' => 1, 'three' => 0, 'four' => 0, 'max_slot_level' => 4],
            12 => ['cantrips' => 4, 'zero' => 4, 'one' => 1, 'two' => 1, 'three' => 0, 'four' => 0, 'max_slot_level' => 4],
            13 => ['cantrips' => 4, 'zero' => 4, 'one' => 1, 'two' => 1, 'three' => 1, 'four' => 0, 'five' => 0, 'max_slot_level' => 4],
            14 => ['cantrips' => 4, 'zero' => 4, 'one' => 1, 'two' => 1, 'three' => 1, 'four' => 0, 'five' => 0, 'max_slot_level' => 5],
            15 => ['cantrips' => 4, 'zero' => 4, 'one' => 1, 'two' => 1, 'three' => 1, 'four' => 0, 'five' => 0, 'max_slot_level' => 5],
            16 => ['cantrips' => 4, 'zero' => 5, 'one' => 1, 'two' => 1, 'three' => 1, 'four' => 1, 'five' => 0, 'six' => 0, 'max_slot_level' => 5],
            17 => ['cantrips' => 4, 'zero' => 5, 'one' => 1, 'two' => 1, 'three' => 1, 'four' => 1, 'five' => 0, 'six' => 0, 'max_slot_level' => 6],
            18 => ['cantrips' => 4, 'zero' => 5, 'one' => 1, 'two' => 1, 'three' => 1, 'four' => 1, 'five' => 0, 'six' => 0, 'max_slot_level' => 6],
            19 => ['cantrips' => 4, 'zero' => 5, 'one' => 1, 'two' => 1, 'three' => 1, 'four' => 1, 'five' => 1, 'six' => 0, 'seven' => 0, 'max_slot_level' => 6],
            20 => ['cantrips' => 4, 'zero' => 5, 'one' => 1, 'two' => 1, 'three' => 1, 'four' => 1, 'five' => 1, 'six' => 0, 'seven' => 0, 'max_slot_level' => 7],
        ]);

        $formula              = new Formula;
        $formula->name        = 'Arcane Propulsion Armor';
        $formula->type        = 'Infusion';
        $formula->level       = 14;
        $formula->method      = 'Armor, worn';
        $formula->description = "<p>The infused armor has 6 charges. The wearer can expend the armor's charges in the following ways:</p>
<ul>
    <li>The wearer's walking speed increases by 5 feet.</li>
    <li>The armor includes gauntlets, each of which is a magic melee weapon that can be wielded only when the hand is holding nothing. The wearer is proficient with the gauntlets, and each one deals 1d8 force damage on a hit and has the thrown property, with a normal range of 20 feet and a long range of 60 feet. When thrown, the gauntlet detaches and flies at the attack's target, then immediately returns to the wearer and reattaches.</li>
    <li>The armor can't be removed against the wearer's will</li>
    <li>If the wearer is missing any limbs, the armor replaces those limbs - hands, arms, feet, legs, or similar appendages. The replacements function identical to the body parts they replace.</li>
</ul>";
        $helper->addTypesToSimpleObject($formula, ['Infusion', 'Magical', 'Armor']);
        $formula->skills()->save(app()->skills['Crafting'], ['dc' => 10, 'meta' => 'Blacksmithing']);

        $formula              = new Formula;
        $formula->name        = 'Armor of Magical Strength';
        $formula->type        = 'Infusion';
        $formula->level       = 2;
        $formula->method      = 'Armor, worn';
        $formula->description = "<p>This armor has 6 charges. The wearer can expend the armor's charges in the following ways:</p>
<ul>
    <li>When the wearer makes a STR check or a STR Save, it can expend 1 charge to add a bonus to the roll equal to its INT modifier</li>
    <li>If the creature would be knocked prone, it can use its reaction to expend 1 charge to avoid being knocked prone</li>
</ul>
<p>The armor regains 1D6 expended charges daily at dawn</p>";
        $helper->addTypesToSimpleObject($formula, ['Infusion', 'Magical', 'Armor']);
        $formula->skills()->save(app()->skills['Crafting'], ['dc' => 2, 'meta' => 'Blacksmithing']);

        $formula              = new Formula;
        $formula->name        = 'Armor of Tools';
        $formula->type        = 'Infusion';
        $formula->level       = 2;
        $formula->activation  = 'Action';
        $formula->method      = 'Armor, worn';
        $formula->description = "<p>As an Action, a creature wearing this infused armor can integrate into it artisan’s tools or thieves' tools. The tools remain integrated in the armor until the wearer removes the tools as an Action. The armor can have only one tool integrated at a time. The wearer can add its INT modifier to any ability checks it makes with the integrated tool. The wearer must have a hand free to use the tool.</p>";
        $helper->addTypesToSimpleObject($formula, ['Infusion', 'Magical', 'Armor']);
        $formula->skills()->save(app()->skills['Crafting'], ['dc' => 2, 'meta' => 'Blacksmithing']);

        $formula              = new Formula;
        $formula->name        = 'Enhanced Arcane Focus';
        $formula->type        = 'Infusion';
        $formula->level       = 2;
        $formula->description = '<p>While holding this item, a creature gains +1 bonus to spell attack rolls. In addition, the creature ignores half cover when making a spell attack.</p>
<p>The bonus increases to +2 when you reach 10th level in this class.</p>
<p>If this item is used to create one of your Wand of Cantrips, treat the cantrip as if it was cast by a spellcaster of your level +4</p>';
        $helper->addTypesToSimpleObject($formula, ['Infusion', 'Magical', 'Attunement']);
        $formula->skills()->save(app()->skills['Crafting'], ['dc' => 2, 'meta' => 'Woodworking']);

        $formula              = new Formula;
        $formula->name        = 'Infused Defense';
        $formula->type        = 'Infusion';
        $formula->level       = 2;
        $formula->description = '<p>A creature gains a +1 bonus to Armor Class while wearing (armor) or wielding (shield) the infused item.</p>
<p>This bonus increases to +2 when you reach 10th level in this class</p>';
        $helper->addTypesToSimpleObject($formula, ['Infusion', 'Magical']);
        $formula->skills()->save(app()->skills['Crafting'], ['dc' => 2, 'meta' => 'Blacksmithing']);

        $formula              = new Formula;
        $formula->name        = 'Infused Bolt Launcher';
        $formula->type        = 'Infusion';
        $formula->level       = 4;
        $formula->activation  = 'Action, Ranged Attack';
        $formula->method      = 'Armor, worn';
        $formula->description = '<p>You attach a Hand Crossbow to your Infused Armor. The armor can store up to 10 bolts and will automatically load them (see below)</p>
<ul>
    <li>As an Action, you may fire a Hand Crossbow bolt. You gain a +1 to Hit and +3 to Damage with any bolt you fire from your Infused Hand Crossbow.</li>
    <li>As long as you are wearing your Infused Armor, you gain an Additional Action. This Additional Action my only be used to load your Infused Hand Crossbow. You may also use an Action to load a bolt to your Infused Hand Crossbow.</li>
</ul>';
        $helper->addTypesToSimpleObject($formula, ['Infusion', 'Magical']);
        $formula->skills()->save(app()->skills['Crafting'], ['dc' => 5, 'meta' => 'Bowmaking']);

        $formula              = new Formula;
        $formula->name        = 'Improved Infused Bolt Launcher';
        $formula->type        = 'Infusion';
        $formula->level       = 8;
        $formula->activation  = 'Action, Ranged Attack';
        $formula->method      = 'Armor, worn';
        $formula->description = '<p>You must have the Infused Bolt Launcher Formula to improve your Infused Armor with this Infusion.</p>
<p>Your attached Hand Crossbow now deals Heavy Crossbow Bolt damage. This replaces the damage from Infused Bolt Launcher and Rapid Infused Bolt Launcher.</p>';
        $helper->addTypesToSimpleObject($formula, ['Infusion', 'Magical']);
        $formula->skills()->save(app()->skills['Crafting'], ['dc' => 7, 'meta' => 'Bowmaking']);

        $formula              = new Formula;
        $formula->name        = 'Rapid Infused Bolt Launcher';
        $formula->type        = 'Infusion';
        $formula->level       = 12;
        $formula->activation  = 'Action, Ranged Attack';
        $formula->method      = 'Armor, worn';
        $formula->description = '<p>You must have the Infused Bolt Launcher Formula to improve your Infused Armor with this Infusion.</p>
<p>Your attached Hand Crossbow now fires multiple shots. The armor can store up to 50 bolts and will automatically load them (see below)</p>
<ul>
    <li>As an Action, you may fire 5 Hand Crossbow bolts. You gain a +2 to Hit and +6 to Damage with any bolt you fire from your Infused Hand Crossbow.</li>
    <li>As long as you are wearing your Infused Armor, you gain an Additional Action. This Additional Action my only be used to load 5 bolts to your Infused Hand Crossbow. You may also use an Action to load 5 bolts to your Infused Hand Crossbow.</li>
</ul>';
        $helper->addTypesToSimpleObject($formula, ['Infusion', 'Magical']);
        $formula->skills()->save(app()->skills['Crafting'], ['dc' => 12, 'meta' => 'Bowmaking']);
        $formula->spells()->save(Spell::where('name', 'Haste')->firstOrFail());

        // Enhanced Weapons
        // Helm of Awareness
        // Homunculus Servant
        // Mind Sharpener
        // Radiant Weapon
        // Replicate Magic Item
        // Repulsion Shield
        // Resistant Armor
        // Returning Weapon
        // Spell-Refueling Ring

        $features = app()->features;
        unset($features['infused_items']);
        unset($features['skilled_crafter']);
        unset($features['spell_storing_item']);
        unset($features['magic_item_savant']);
        app()->features = $features;
    }
}
