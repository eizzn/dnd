<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsMonstrousSeeder extends Seeder
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

        $god        = new God;
        $god->name  = 'Blibdoolpoolp';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Monstrous'], [
            'name'           => $god->name,
            'title'          => 'The Sea Mother, The Drowning Goddess, Whip of Whips',
            'level'          => 'Intermediate',
            'portfolio'      => 'Kuo-toa, Evil undersea creatures',
            'alignment'      => 'CE',
            'symbol'         => 'Lobster head or black pearl',
            'favored_weapon' => 'Pince staff',
        ]);
        $helper->addClassesToGod($god, 'Faeruneon', [
            'Cleric' => 14,
            'Wizard' => 12,
            'Monk'   => 14,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Blibdoolpoolp';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons, Pincer Staff';
        $class->armors        = 'Light Armor, Medium Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 4,
            'skill_progress' => 2,
        ], ['WIS', 'CHA']);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Monk', 'Fighter', 'Priest of Blibdoolpoolp',
        ]);
        $helper->addSpellsToClass($class, [
            0 => ['Dancing Lights', 'Detect Magic', 'Electric Arc', 'Light', 'Poison Spray', 'Resist', 'Shape Water', 'Shocking Grasp'],
            1 => ['Bless', 'Cause Wounds', 'Create or Destroy Water', 'Cure Wounds', 'Divine Favor', 'Fear', 'Purify Food and Drink'],
            2 => ['Aid', 'Animal Messenger', 'Augury', 'Bestow Curse', "Bull's Strength", 'Comprehend Languages', 'Darkness',
                'Fins to Feet', 'Hold Person', "Fox's Hex", "Owl's Hex", "Owl's Wisdom", 'Speak with Animals', ],
            3 => ['Clairvoyance', 'Enthrall', 'Eradicate Water', 'Hypnotic Pattern', 'Prayer', 'Revivify', 'Slow', 'Speak with Dead',
                'Tongues', ],
            4 => ['Aura of Confusion', 'Crushing Despair', 'Divination', 'Lightning Bolt'],
            5 => ['Atonement', 'Banishment', 'Commune', 'Contact Other Plane', 'Destructive Wave', 'False Vision', 'Scrying'],
            6 => ['Baleful Polymorph', 'Dominate', 'Heal'],
            7 => ['Chain Lightning', 'Mind Blank'],
            8 => ['Antipathy / Sympathy', 'Maddening Darkness'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Eadro';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Asathalfinare'], [
            'name'      => $god->name,
            'title'     => 'The Deliverer, Lord of the Sunlit Shallows, The Water of Life, The Bather of Gills',
            'level'     => 'Intermediate',
            'portfolio' => 'Merfolk, Sea',
            'regions'   => 'Sea of Swords, The Trackless Sea, Sea of Fallen Stars',
            'alignment' => 'N',
            'symbol'    => 'Spiral design',
        ]);
        $helper->addClassesToGod($god, 'Asathalfinare', [
            'Cleric'  => 16,
            'Fighter' => 4,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'The Great Mother';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Monstrous'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Intermediate',
            'portfolio' => 'Beholders, Magic, Fertility, Tyranny, Madness',
            'alignment' => 'CE',
            'symbol'    => 'Egg with central egg',
        ]);

        /**********************************************************************/

        $ilsen        = new God;
        $ilsen->name  = 'Ilsensine';
        $ilsen->level = 'Intermediate';
        $ilsen->save();
        $ilsen->pantheons()->save(app()->pantheons['Monstrous'], [
            'name'           => $ilsen->name,
            'title'          => 'The Great Brain, The Tentacled Lord',
            'level'          => 'Intermediate',
            'portfolio'      => 'Illithids, Mastery of the mind, Psionics',
            'alignment'      => 'CE',
            'symbol'         => 'Glowing brain with two tentacles',
            'favored_weapon' => 'Tentacle (Unarmed Strike)',
        ]);

        $feat              = new Feat;
        $feat->name        = 'Pact to Elder Brain';
        $feat->requirement = 'You must be a humanoid';
        $feat->description = '<p>You are a servant of an Elder Brain</p>
<ul>
    <li>You gain the Wild Talent Feat</li>
    <li>You gain the Expanded Knowledge Feat</li>
</ul>';
        $helper->addTypesToFeat($feat, ['Pact', 'Aberration']);
        $helper->addSpellsToFeat($feat, [
            0 => ['Eldritch Blast'],
            4 => ['Flaying Tentacles'],
            // TODO: finish this
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Maanzecorian';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Monstrous'], [
            'name'      => $god->name,
            'title'     => 'The Philosoflayer',
            'level'     => 'Hero',
            'portfolio' => 'Illithids, Secrets, Knowledge, Philosophy',
            'alignment' => 'LE',
            'symbol'    => 'Silver crown set with a red gem',
            'master_id' => $ilsen->id,
        ]);

        /**********************************************************************/

        $kult        = new God;
        $kult->name  = 'Kurtulmak';
        $kult->level = 'Lesser';
        $kult->save();
        $kult->pantheons()->save(app()->pantheons['Kobold'], [
            'name'           => $kult->name,
            'title'          => 'Gnomesmasher, The Watcher, Steelscale, Stingtail, The Horned Sorcerer, The Devourer',
            'level'          => 'Lesser',
            'portfolio'      => 'Kobolds, Mining, War',
            'alignment'      => 'LE',
            'symbol'         => 'A gnome skull',
            'favored_weapon' => 'Spear',
            'description'    => '<p>Kurtulmak has been imprisoned by the Gnome god Garl Glittergold, and is still trapped to this day. Because of this, Kurtulmak cannot grant spells so there are no priests to Kurtulmak.</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Gaknulak';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Kobold'], [
            'name'      => $god->name,
            'title'     => 'The Trapmaster',
            'level'     => 'Hero',
            'portfolio' => 'Kobolds, Trickery, Traps, Stealth, Protection',
            'alignment' => 'LE',
            'symbol'    => 'A cauldron with whirling ellipses',
            'master_id' => $kult->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Kuraulyek';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Kobold'], [
            'name'           => $god->name,
            'title'          => '',
            'level'          => 'Hero',
            'portfolio'      => 'Urds',
            'alignment'      => 'NE',
            'symbol'         => 'Pair of feathered wings',
            'master_id'      => $kult->id,
            'favored_weapon' => 'Dagger',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Laogzed';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Monstrous'], [
            'name'           => $god->name,
            'title'          => 'Troglodytes, The Devourer, The Eater of Souls',
            'level'          => 'Demi',
            'portfolio'      => 'Hunger, Destruction',
            'alignment'      => 'CE',
            'symbol'         => "Lizard's Head",
            'favored_weapon' => 'Greatclub, javelin',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Quolinn';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Monstrous'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Hero',
            'portfolio' => 'Kenku, Disguise, Trickery, Theft',
            'alignment' => 'N',
            'symbol'    => 'A mask with a large nose',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Ramenos';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Monstrous'], [
            'name'      => $god->name,
            'title'     => '',
            'level'     => 'Hero',
            'portfolio' => 'Bullywugs, Somnolence, Intoxication, Decay',
            'alignment' => 'CE',
            'symbol'    => 'Frog',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Semuanya';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Monstrous'], [
            'name'           => $god->name,
            'title'          => '',
            'level'          => 'Lesser',
            'portfolio'      => 'Lizardfolk, Survival, Propagation',
            'alignment'      => 'N',
            'symbol'         => 'Lizard egg',
            'favored_weapon' => 'Club',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Sekolah';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Asathalfinare'], [
            'name'           => $god->name,
            'title'          => 'The Great Shark, The Joyful Hunter, THe Caller from the Depths, The Shark-Father',
            'level'          => 'Demi',
            'portfolio'      => 'Sahuagin, Hunting, Tyranny, Plunder',
            'regions'        => 'The Trackless Sea, Sea of Swords, Sea of Fallen Stars, Moonsea',
            'alignment'      => 'LE',
            'symbol'         => 'White Shark',
            'favored_weapon' => 'Trident',
        ]);

        $helper->addClassesToGod($god, 'Asathalfinare', [
            'Barbarian' => 20,
            'Ranger'    => 5,
            'Wizard'    => 5,
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Sekolah';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons, Trident, Harpoon, 1 choice';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 2,
            'skill_progress' => 2,
        ], ['WIS', 'CHA']);
        $helper->addWorshipClassesToGod($god, 'Asathalfinare', [
            $class->name, 'Barbarian', 'Scout',
        ]);
        $helper->addSpellsToClass($class, [
            2 => ['Bloodwater', 'Pressure Resistance'],
        ]);
        $helper->addSpellSlotsToClass($class);

        /**********************************************************************/

        $god = God::where('name', 'Akadi')->first();
        $god->pantheons()->save(app()->pantheons['Asathalfinare'], [
            'name'      => 'Syranita',
            'title'     => '',
            'level'     => 'Lesser',
            'portfolio' => 'Aarakocra, Protection, Watchfulness',
            'regions'   => 'Sea of Fallen Stars',
            'alignment' => 'NG',
            'symbol'    => 'Opal necklace with feather pendant',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Trishina';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Asathalfinare'], [
            'name'      => $god->name,
            'title'     => 'The Waverider, Mistress of Games, The Joyswimmer',
            'level'     => 'Demi',
            'regions'   => 'Sea of Fallen Stars, Moonsea',
            'portfolio' => 'Shalarin, Dolphins, Love, Play, Children, Fidelity',
            'alignment' => 'LG',
            'symbol'    => 'Dolphin with calf',
        ]);
        $god->pantheons()->save(app()->pantheons['Seldarine'], [
            'name'      => $god->name,
            'title'     => 'Consort to Deep Sashelas',
            'level'     => 'Demi',
            'regions'   => 'The Trackless Sea, Sea of Swords',
            'portfolio' => 'Shalarin, Dolphins, Love, Play, Children, Fidelity',
            'alignment' => 'LG',
            'symbol'    => 'Dolphin with calf',
            'master_id' => God::where('name', 'Istishia')->first()->id,
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Vaprak';
        $god->level = 'Hero';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Monstrous'], [
            'name'      => $god->name,
            'title'     => 'The Destroyer',
            'level'     => 'Hero',
            'portfolio' => 'Ogres, Trolls, Combat, Greed',
            'alignment' => 'CE',
            'symbol'    => 'Taloned claw',
        ]);
    }
}
