<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = [];

        $attr              = new Attribute;
        $attr->attr        = 'STR';
        $attr->name        = 'Strength';
        $attr->description = "<p>Strength measures your character's physical power. Strength is important if your character plans to engage in hand-to-hand melee combat. Strength also determines how much Bulk your character can carry.</p>";
        $attr->save();
        $attributes[$attr->attr] = $attr;

        $attr              = new Attribute;
        $attr->attr        = 'DEX';
        $attr->name        = 'Dexterity';
        $attr->description = "<p>Dexterity measures your character's agility, balance, and reflexes. Dexterity is important if your character plans to use stealth to surprise foes or to make attacks with ranged weapons. A high Dexterity score allows your character to reduce or avoid attacks and magical effects that can be dodged or outright evaded, such as a dragon's breath.</p>";
        $attr->save();
        $attributes[$attr->attr] = $attr;

        $attr              = new Attribute;
        $attr->attr        = 'CON';
        $attr->name        = 'Constitution';
        $attr->description = "<p>Constitution measures your character's health and stamina. Constitution is an important statistic for all characters, especially those who fight in close combat. Additionally, Constitution grants characters extra Hit Points and makes them more resistant against poison and disease.</p>";
        $attr->save();
        $attributes[$attr->attr] = $attr;

        $attr              = new Attribute;
        $attr->attr        = 'INT';
        $attr->name        = 'Intelligence';
        $attr->description = '<p>Intelligence measures how well your character can learn and reason. A high Intelligence score allows your character to perceive and understand patterns, and to pick up skills that can serve her during her adventuring career.</p>';
        $attr->save();
        $attributes[$attr->attr] = $attr;

        $attr              = new Attribute;
        $attr->attr        = 'WIS';
        $attr->name        = 'Wisdom';
        $attr->description = "<p>Wisdom measures your character's common sense, awareness, and intuition. A high Wisdom score can help your character shake off mental spells and effects. Additionally, Wisdom affects your character's Perception modifier, which measures how well she observes and identifies threats or curiosities among her surroundings.</p>";
        $attr->save();
        $attributes[$attr->attr] = $attr;

        $attr              = new Attribute;
        $attr->attr        = 'CHA';
        $attr->name        = 'Charisma';
        $attr->description = "<p>This score measures your character's strength of personality, personal magnetism, and ability to influence the thoughts and moods of others. Charisma also determines your character's Resonance Points.</p>";
        $attr->save();
        $attributes[$attr->attr] = $attr;

        $app             = app();
        $app->attributes = $attributes;
    }
}
