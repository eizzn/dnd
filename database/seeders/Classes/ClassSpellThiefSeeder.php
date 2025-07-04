<?php

namespace Database\Seeders\Classes;

use App\Models\Feature;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class ClassSpellThiefSeeder extends Seeder
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

        $class                = new Klass;
        $class->name          = 'Spellthief';
        $class->key_attribute = 'DEX or INT';
        $class->armors        = 'Light Armor';
        $class->weapons       = 'Simple Weapons, Shortbow, Shortsword';
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 6,
            'has_spells'     => true,
        ], ['DEX', 'INT'], [
            'Spellthief', 'Arcane', 'Skill', 'Spell Pool', 'Sneak Attack',
        ]);

        // Skills
        $helper->addSkillsToClass($class, [
            'Acrobatics', 'Arcana', 'Athletics', 'Concentration', 'Deception', 'Language', 'Stealth', 'Thievery',
        ]);

        $feature              = new Feature;
        $feature->key         = 'steal_spell';
        $feature->name        = 'Steal Spell';
        $feature->description = '<p>You can steal a spell from an arcane spell caster. As an Action, you may spend a Spell Point after striking with a Sneak Attack. You steal a spell from the target at the highest level that you can cast and the highest level the target can cast (which ever is lower). You may cast this spell by spending a number of Spell Points equal to the stolen Spells Level.</p>
<p>After you spend the Spell Points to cast the spell, you lose the ability to cast the spell again unless you know fewer spells than your maximum. You may also choose to keep the stolen spell by forgetting a known spell to make room for the stolen spell.</p>';
        $helper->saveFeature($feature, ['Sneak Attack']);

        $helper->addFeaturesToClass($class, [
            'rogue_feat'       => [3, 4, 6, 12, 16, 18, 20],
            'skill_feat'       => [1, 7, 9, 13, 15, 19],
            'spell_pool'       => [2],
            'precision_attack' => [3, 8, 14, 20],
            'uncanny_dodge'    => [5],
            'evasion'          => [7],
        ]);

        $helper->addFeatsToClass($class, [
            'Expanded Spell Knowledge' => 5,
        ]);

        $helper->addSpellsToClass($class, [
            0 => ['Bit of Luck', 'Call Attuned Weapon', 'Clean Self', 'Detect Magic', 'Ghost Sound', 'Light', 'Mage Hand',
                'Minor Illusion', 'Resist', 'Thaumaturgy', ],
            1 => ['Accelerated Movement', 'Arcane Pocket', 'Disguise Self', 'Feather Fall', 'Fleet Step', 'Illusory Script',
                'Note', 'Ventriloquism', ],
            2 => ['Arcane Lock', "Bull's Strength", "Cat's Grace", 'Darkness', 'Darkvision', 'Find Traps', 'Misty Step',
                'Spider Climb', "Spymaster's Coin", ],
            3 => ['Dispel Magic', 'Far Step', 'Flame Arrows', 'Haste', 'Major Image', 'Tongues'],
            4 => ['Blink', 'Freedom of Movement', 'Spell Immunity', 'Spell Theft', 'Swift Quiver', 'Teleport'],
            5 => ['Animate Objects'],
            6 => ['Contingency', 'Spell Turning'],
            7 => ['Antimagic Field', 'Disappearance'],
        ]);

        $helper->addSpellSlotsToClass($class, [
            1  => ['known' => 0, 'cantrips' => 3, 'zero' => 4, 'one' => 0],
            2  => ['known' => 1, 'cantrips' => 4, 'zero' => 4, 'one' => 1],
            3  => ['known' => 2, 'cantrips' => 4, 'zero' => 5, 'one' => 1],
            4  => ['known' => 3, 'cantrips' => 5, 'zero' => 5, 'one' => 1, 'two' => 1],
            5  => ['known' => 4, 'cantrips' => 5, 'zero' => 6, 'one' => 2, 'two' => 1],
            6  => ['known' => 5, 'cantrips' => 5, 'zero' => 6, 'one' => 2, 'two' => 1],
            7  => ['known' => 6, 'cantrips' => 5, 'zero' => 6, 'one' => 2, 'two' => 2, 'three' => 1],
            8  => ['known' => 7, 'cantrips' => 5, 'zero' => 7, 'one' => 2, 'two' => 2, 'three' => 1],
            9  => ['known' => 8, 'cantrips' => 5, 'zero' => 7, 'one' => 2, 'two' => 2, 'three' => 1],
            10 => ['known' => 9, 'cantrips' => 5, 'zero' => 7, 'one' => 3, 'two' => 2, 'three' => 2, 'four' => 1],
            11 => ['known' => 10, 'cantrips' => 5, 'zero' => 7, 'one' => 3, 'two' => 2, 'three' => 2, 'four' => 1],
            12 => ['known' => 11, 'cantrips' => 5, 'zero' => 8, 'one' => 3, 'two' => 3, 'three' => 2, 'four' => 1],
            13 => ['known' => 12, 'cantrips' => 5, 'zero' => 8, 'one' => 3, 'two' => 3, 'three' => 2, 'four' => 2, 'five' => 1],
            14 => ['known' => 13, 'cantrips' => 5, 'zero' => 8, 'one' => 3, 'two' => 3, 'three' => 2, 'four' => 2, 'five' => 1],
            15 => ['known' => 14, 'cantrips' => 5, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 2, 'five' => 1],
            16 => ['known' => 15, 'cantrips' => 5, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 2, 'five' => 2, 'six' => 1],
            17 => ['known' => 16, 'cantrips' => 5, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 2, 'five' => 2, 'six' => 1],
            18 => ['known' => 17, 'cantrips' => 5, 'zero' => 8, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
            19 => ['known' => 18, 'cantrips' => 5, 'zero' => 8, 'one' => 4, 'two' => 4, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 2, 'seven' => 1],
            20 => ['known' => 19, 'cantrips' => 5, 'zero' => 8, 'one' => 4, 'two' => 4, 'three' => 4, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 1],
        ]);
    }
}
