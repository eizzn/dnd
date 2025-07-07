<?php

namespace Database\Seeders\Gods;

use App\Models\God;
use App\Models\Klass;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsGarlSeeder extends Seeder
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
        $god->name  = 'Garl Glittergold';
        $god->level = 'Greater';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Gnome'], [
            'name'           => $god->name,
            'title'          => 'The Joker, the Watchful Protector, the Sparkling Wit, The Watchful Protector',
            'level'          => 'Greater',
            'portfolio'      => 'Protection, Humor, Trickery, Gem Cutting, Gnomes',
            'alignment'      => 'LG',
            'symbol'         => 'Gold nugget',
            'favored_weapon' => 'Arumdina (Battleaxe)',
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Garl';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Light Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 4,
        ], ['WIS', 'CHA'], [
            'Gnome', 'Divine', 'Good',
        ]);

        $helper->addClassesToGod($god, 'Gnome', [
            'Fighter' => 10,
            'Wizard'  => 20,
            'Rogue'   => 10,
        ]);
        $helper->addWorshipClassesToGod($god, 'Gnome', [
            $class->name, 'Wizard', 'Rogue',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Animal Handling', 'Concentration', 'Diplomacy', 'Intimidation', 'Medicine', 'Performance', 'Religion']
        );
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 3, 6, 9, 12, 15, 18, 20],
        ]);
        $helper->addDomainToClass($class, ['Craft', 'Gnome', 'Protection', 'Trickery']);
        $helper->addSpellsToClass($class, [
            0 => ['Boon', 'Clean Self', 'Friends', 'Stabilize', 'Ghost Sound', 'Mage Hand', 'Message', 'Minor Illusion',
                'Shield', 'Vicious Mockery', ],
            1 => ['Alarm', 'Animal Friendship', 'Arcane Pocket', 'Bless', 'Cure Wounds', 'Detect Evil', 'Disguise Self',
                'Sanctuary', 'Silent Image', 'Treasure Scent', 'Unseen Servant', 'Ventriloquism', ],
            2   => ['Aid', 'Animal Messenger', 'Augury', 'Blur', 'Consecrate', 'Enlarge', 'Gembomb', 'Magic Weapon', 'Remove Fear',
                'Resist Force', 'Scent', 'Speak with Animals', 'Undead Bane Weapon', 'Zone of Truth', ],
            3 => ['Dispel Magic', 'Faithful Healing', 'Forbiddance', 'Hypnotic Pattern', 'Major Image', 'Neutralize Poison',
                'Prayer', 'Tiny Servant', 'Tongues', ],
            4 => ['Call Animal', 'Ceremony', 'Divination', 'Summon Woodland Beings'],
            5 => ['Atonement', 'Awaken', 'Dispel Evil'],
            6 => ['Heal', "Hero's Feast", 'Permanent Image', 'Programmed Image'],
            7 => ['Holy Aura', 'Project Image', 'Temple of the Gods'],
            8 => ['Control Weather', 'Disappearance', 'Glibness'],
            9 => ["Nature's Enmity", 'True Resurrection'],
        ]);
        $helper->addSpellSlotsToClass($class);
        $garl = $god;

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Gnome']->id,
            'favor'       => "<p>Garl's favour is given to those who enjoy life and who remind the world that despite the evils which plague society, there is joy to be hand in the small things. A whimsical god, the tales of his pranks and japes on the other gods are held dear to gnomish hearts, and many attempt to emulate his successes.</p>
<p>Garl’s scions hail from all kinds of professions, but he prefers those who are able to bring others together, whether with riotous laughter, inspiring speech or conspiratorial giggles.</p>
<ol>
    <li>You seek to play the ultimate prank, and it has been years in the making</li>
    <li>You consider jokes to be an act of worship, and you've elevated it to an art form</li>
    <li>Your words alone have brought together people from vastly different backgrounds to work together</li>
    <li>Despite your long history of suffering, nothing has been able to break your spirit</li>
    <li>Regardless of how you feel inside, you spend your days bring joy to others</li>
    <li>You don't know why Garl would choose you, but the results are bound to be fabulous</li>
</ol>",
            'devotion' => "<p>Following Garl means dedicating yourself to fun and teamwork. As a follower of Garl, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Happiness</dt> <dd>Our only duty in this world is to make sure people are happy</dd>
    <dt>Change</dt> <dd>People need exposure to new concepts in order to grow into better versions of themselves</dd>
    <dt>Excellence</dt> <dd>It's not enough to tell a good joke. I need to tell the best joke</dd>
    <dt>Teamwork</dt> <dd>We only succeed as a group, so I need to keep everyone on the same page</dd>
    <dt>Liberty</dt> <dd>Pranks and jokes keep the tyrannous in check and give the powerless a voice</dd>
</dl>",
            'earn_piety' => [
                'Making jokes, setting up pranks, and performing to make people laugh or smile',
                'Encouraging people to work together in their mutual best interests',
            ],
            'lose_piety' => [
                'Straying from jokes and pranks into malicious duplicity',
                'Working to drive people apart',
            ],
            'piety3' => '<h4>Favored God: Garl</h4>
<p>You gain Inspiration when you play a successful prank or successfully trick someone with an illusion</p>',
            'piety10' => '<h4>Fool me Once</h4>
<p>You can cast Silent Image with this trait, requiring no components. Once you cast the spell in this way, you can\'t do so again until you finish a long rest. CHA is your spellcasting ability for this spell</p>',
            'piety25' => '<h4>Fool me Twice</h4>
<p>When you cast an illusion spell that generates an single illusion, you can cast the spell twice using the same Action, and concentrate on both spells (where relevant) concurrently</p>',
            'piety50' => '<h4>Chosen of Garl</h4>
<p>You can spend an Inspiration to cast Major Image. Once you cast the spell in this way, you can\'t do so again until you finish a Long Rest. CHA is your spellcasting ability for this spell</p>',
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Callarduran Smoothhands';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Gnome'], [
            'name'           => $god->name,
            'title'          => 'Deep Brother, Master of Stone, Lord of Deepearth',
            'level'          => 'Lesser',
            'portfolio'      => 'Stone, the Underdark, Mining, Svirfneblin',
            'alignment'      => 'N',
            'symbol'         => 'Gold ring with star pattern',
            'master_id'      => $garl->id,
            'favored_weapon' => 'Spiderbane (Battleaxe)',
        ]);
        $helper->addWorshipClassesToGod($god, 'Gnome', [
            'Druid', 'Artificer', 'Wizard',
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Gnome']->id,
            'favor'       => "<p>Callarduran's favour lies with the inquisitive and curious. Callarduran's legends often focus on how his insatiable, relentless curiosity lead him and others to ruin, such as when he stole the heart of Ogremoch, turning the ancient elemental into an implacable monster.</p>
<p>Callarduran's scions most often hail from hidden deep gnome communities, but comprise all manner of crafters, sages and investigators.</p>
<ol>
    <li>You are an expert on gems and magical stones</li>
    <li>You built a statue in honor of Callarduran, and the god spoke to you from inside it</li>
    <li>You dug deep below the earth in search of power, and what you found has haunted you ever since</li>
    <li>You unlocked the powers of an ancient artifact, and it cursed you</li>
    <li>You discovered the terrible truth of your family bloodline at long rest. Now, they hunt you</li>
    <li>You have long hidden away in a secret sanctuary. You've emerged into the world in search of something</li>
</ol>",
            'devotion' => '<p>Following Callarduran means dedicating yourself to finding the truth. As a follower of Callarduran, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Knowledge</dt> <dd>I must know the truth. The need burns in me</dd>
    <dt>Passion</dt> <dd>I have a craft, and I give it everything I have</dd>
    <dt>Peace</dt> <dd>I want everyone to get along so I can focus on my real work</dd>
    <dt>Mystery</dt> <dd>Nothing captivates me more than an unanswered question</dd>
    <dt>Determination</dt> <dd>No consequence can convince me to turn from a cause I consider just</dd>
</dl>',
            'earn_piety' => [
                'Investigating and uncovering a secret or fact',
                'Making a great new academic discovery',
            ],
            'lose_piety' => [
                'Concealing your research from others',
                'Causing chaos or large scale disturbance in pursuit of your goals',
            ],
            'piety3' => '<h4>Favored God: Calladuran</h4>
<p>You gain Inspiration when you touch something and it has a negative repercussion</p>',
            'piety10' => '<h4>Cave Wonders</h4>
<p>You gain a Spell Gem. It increases in power in keeping with your Piety score</p>
<table>
    <thead>
        <tr>
            <th>Piety</th>
            <th>Spell Gem</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>10</td>
            <td>Obsidian</td>
        </tr>
        <tr>
            <td>15</td>
            <td>Lapis Lazuli</td>
        </tr>
        <tr>
            <td>20</td>
            <td>Quartz</td>
        </tr>
        <tr>
            <td>25</td>
            <td>Blood Stone</td>
        </tr>
        <tr>
            <td>30</td>
            <td>Amber</td>
        </tr>
        <tr>
            <td>35</td>
            <td>Jade</td>
        </tr>
        <tr>
            <td>40</td>
            <td>Topaz</td>
        </tr>
        <tr>
            <td>45</td>
            <td>Star Ruby</td>
        </tr>
        <tr>
            <td>50</td>
            <td>Ruby</td>
        </tr>
        <tr>
            <td>55</td>
            <td>Diamond</td>
        </tr>
    </tbody>
</table>',
            'piety25' => '<h4>Examine</h4>
<p>You can cast Identify with this trait, requiring no material components. WIS is your spellcasting ability for this spell</p>',
            'piety50' => "<h4>Ogremoch's Heart</h4>
<p>You can spend an Inspiration to cast Summon Elemental (earth) with this trait. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell</p>",
        ]);

        /**********************************************************************/

        $god = God::where('name', 'Odin Borrson')->first();
        $god->pantheons()->save(app()->pantheons['Gnome'], [
            'name'           => 'Flandal Steelskin',
            'title'          => 'Master of Metal, the Great Steelskin, Lord of Smiths, the Armorer, the Weaponsmith, the Pyromancer',
            'level'          => 'Lesser',
            'portfolio'      => 'Metalwork',
            'alignment'      => 'NG',
            'symbol'         => 'Flaming Hammer',
            'master_id'      => $garl->id,
            'favored_weapon' => 'Rhondang (Warhammer)',
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Flandal Steelskin';
        $class->type          = 'Priest';
        $class->key_attribute = 'CON OR WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor, Medium Armor, Heavy Armor, Shields';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 8,
            'skill_progress' => 4,
        ], ['WIS', 'CON'], [
            'Gnome', 'Good',
        ]);
        $helper->addWorshipClassesToGod($god, 'Gnome', [
            $class->name, 'Artificer', 'Fighter',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Concentration', 'Diplomacy', 'Religion']
        );
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 3, 6, 9, 12, 15, 18, 20],
        ]);
        $helper->addChannelDivinityToClass($class, 'positive', 'Undead', 4);
        $helper->addDomainToClass($class, ['Gnome', 'Good', 'Protection']);
        $helper->addSpellsToClass($class, [
            0   => ['Light', 'Mending', 'Mold Metal', 'Resist', 'Stabilize'],
            1   => ['Bless', 'Cure Wounds', 'Detect Evil', 'Enchant Item', 'Fabricate', 'Forge Fire',
                'Summon Elemental, Lesser' => 'Earth or Fire Elementals only', ],
            2   => ['Augury', "Bear's Endurance", 'Comprehend Language', 'Consecrate', 'Control Flame', 'Gembomb', 'Locate Node',
                'Node Lock', 'Restoration', ],
            3   => ['Dispel Magic', 'Elemental Weapon', 'Node Door'],
            4   => ['Creation'],
            5   => ['Atonement', 'Commune', 'Hallow', 'Summon Elemental' => 'Earth or Fire Elemental only'],
            6   => ['Brilliant Weapon'],
            7   => [],
            8   => ['True Creation'],
            9   => [],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Gnome']->id,
            'favor'       => "<p>Flandal's favour is given to those who allow the urge to create to drive their actions above all else, leading them to acts of larceny, mischief and rebellion. Flandal's creative efforts are augmented (and occasionally stymied) by the gnomish spirit of chaos, and he looks for this in his chosen.</p>
<p>Flandal’s scions are crafters and makers before anything else. They also comprise alchemists, glassblowers, metallurgists and other specialist craftsmen.</p>
<ol>
    <li>You think you created a philosopher's stone, but you dare not tell anyone because you can't make it work</li>
    <li>Your output is prodigious and you run an entire workshop on your lonesome</li>
    <li>You stole a magical reagent to finish a work of art, but now the owner wants that material back</li>
    <li>You have a particular gift with metals, and can't tell them apart at 100 feet</li>
    <li>You sense of smell is oddly acute. Painfully so</li>
    <li>You made a clockwork toy, but it turned out to be alive and you had to hunt down what it become</li>
</ol>",
            'devotion' => '<p>Following Flandal means dedicating yourself to the art of creation and crafting. As a follower of Flandal, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Civilisation</dt> <dd>The things I create make a better world for everyone</dd>
    <dt>Legcy</dt> <dd>I want to live long enough to pass my craft onto a worthy apprentice</dd>
    <dt>Tradition</dt> <dd>My crafting technique is honed over thousand of my predecessors, I will not compromise it</dd>
    <dt>Wealth</dt> <dd>My art brings me clients, and clients bring me money</dd>
    <dt>Community</dt> <dd>I want to share my gifts with those around me, and I hope they will share their talents likewise</dd>
</dl>',
            'earn_piety' => [
                'Crafting items of superior quality',
                'Acquiring ingredients by any means necessary',
            ],
            'lose_piety' => [
                'Taking no risks and settling for substandard results',
            ],
            'piety3' => "<h4>Favored God: Flandal</h4>
<p>You gain Inspiration when you craft an item you've never made before, or when you teach someone else to make something</p>",
            'piety10' => "<h4>Savant's Blueprint</h4>
<p>When crafting a magical item, you always know what magical ingredients will be required, and what creatures you could extract these ingredients from where relevant</p>",
            'piety25' => '<h4>Work Ethic</h4>
<p>If you would craft one or more nonmagical items during a long rest, you instead craft double the number items</p>',
            'piety50' => "<h4>Chosen of Flandal</h4>
<p>You can spend an Inspiration to cast Drawmij's Instant Summons with this trait. Once you cast the spell in this way, you can't do so again until you finish a long rest. WIS is your spellcasting ability for this spell. You may only use this spell on an item that you created, but you may waive the costly material component for the spell, instead of using any other handheld object in place of a gemstone</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Baravar Cloakshadow';
        $god->level = 'Demi';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Gnome'], [
            'name'           => $god->name,
            'title'          => 'The Sly One, Master of Illusion, Lord of Disguise, Bane of Goblinkin',
            'level'          => 'Demi',
            'portfolio'      => 'Illusion, Deception',
            'alignment'      => 'NG',
            'symbol'         => 'Dagger against a hooded cloak',
            'master_id'      => $garl->id,
            'favored_weapon' => 'Nightmare (Dagger)',
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Baravar';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 6,
        ], ['WIS', 'CHA'], [
            'Divine', 'Gnome', 'Good', 'Skill',
        ]);

        $helper->addClassesToGod($god, 'Gnome', [
            'Rogue'  => 10,
            'Wizard' => 20,
        ]);
        $helper->addWorshipClassesToGod($god, 'Gnome', [
            $class->name, 'Wizard',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Animal Handling', 'Concentration', 'Diplomacy', 'Intimidation', 'Medicine', 'Performance', 'Religion']
        );
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 3, 6, 9, 12, 15, 18, 20],
        ]);
        $helper->addDomainToClass($class, ['Craft', 'Gnome', 'Protection', 'Trickery']);
        $helper->addSpellsToClass($class, [
            0 => ['Clean Self', 'Detect Magic', 'Ghost Sound', 'Light', 'Minor Illusion', 'Prestidigitation', 'Stabilize'],
            1 => ['Blur', 'Color Spray', 'Cure Wounds', 'Disguise Self', 'Fleet Step', 'Silent Image'],
            2 => ["Cat's Grace", 'Gembomb', 'Illusory Creature', 'Invisibility, Swift', 'Illusory Disguise', 'Illusory Object',
                'Mirror Image', 'See Invisibility', 'Ventriloquism', ],
            3 => ['Hypnotic Pattern', 'Major Image'],
            4 => ['Ceremony', 'Invisibility Sphere', 'Phantasmal Killer', 'Veil'],
            5 => ['Atonement', 'Mislead', 'Programmed Illusion', 'Suggestion'],
            6 => ['Heal', 'Illusory Scene', 'Permanent Image', 'Project Image', 'Programmed Image'],
            7 => ['Mirage Arcane'],
            8 => ['Glibness'],
            9 => ['Disappearance', 'Weird'],
        ]);
        $helper->addSpellSlotsToClass($class);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Gnome']->id,
            'favor'       => "<p>Baravar bestows her blessings on gnomes who understand that danger lurks around every corner, and that the strong will always wish to prey on the weak. Baravar empowers any who wish to flee from danger or abuse, giving them the tools to start a new life.</p>
<p>Baravar favours those who have an understanding of the magical arts, but those she chooses hail from all walks of life - it is the need to escape suffering that draws her eye.</p>
<ol>
    <li>You were a slave to a monster. Baravar helped you free yourself, and you will never go back</li>
    <li>You were treated badly by someone who said they loved you. Baravar spirited you away into the dark</li>
    <li>Your parents abandoned you, and you were adopted by the goddess. She watches your steps even now</li>
    <li>You earned the ire of an evil sorcerer, and only Barabar's blessing keeps him from finding you</li>
    <li>You secretly help to shelter and smuggle threatened people away from the authorities</li>
    <li>Why Baravar would choose you is a mystery befitting the mercurial nature of the goddess</li>
</ol>",
            'devotion' => "<p>Following Baravar means dedicating yourself to mischief. As a follower of Baravar, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Humor</dt> <dd>LIfe is a joke, and I'd rather not be the punchline</dd>
    <dt>Protection</dt> <dd>I use my gifts to shield others from malice</dd>
    <dt>Freedom</dt> <dd>My pranks and jokes are a weapon against authority</dd>
    <dt>Change</dt> <dd>It's very hard to capture someone who never acts the same way twice</dd>
    <dt>Sacrifice</dt> <dd>We must all be ready to lose everything in order to do what is right</dd>
</dl>",
            'earn_piety' => [
                'Enact an elaborate trick or scheme',
                'Change your appearance or identity',
            ],
            'lose_piety' => [
                'Shackle others to your authority or impede their freedom of choice',
                'Become beholden to routine or tradition',
            ],
            'piety3' => '<h4>Favored God: Baravar</h4>
<p>You gain Inspiration when you hide yourself or conceal others</p>',
            'piety10' => '<h4>Chameleognome</h4>
<p>You can attempt to Hide even in situations where you have no cover, as you seem to blend into the background. This does not conceal you from attempts to locate you based on smell or sound</p>',
            'piety25' => '<h4>Gnome you see me</h4>
<p>Whenever you take the Disengage Action, you become invisible until the end of your next turn</p>',
            'piety50' => "<h4>Chosen of Baravar</h4>
<p>You can spend an Inspiration to cast Programmed Illusion with this trait. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. INT is your spellcasting ability for this spell</p>",
        ]);

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Urdlen';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Gnome'], [
            'name'           => $god->name,
            'title'          => 'The Crawler Below',
            'level'          => 'Intermediate',
            'alignment'      => 'CE',
            'portfolio'      => 'Bloodlust, Evil, Greed, Murder, Hatred, Uncontrolled Impulse, Spriggans',
            'symbol'         => 'White-clawed mole emerging from ground',
            'favored_weapon' => 'Great Claw (Claw Bracer)',
        ]);

        $class                = new Klass;
        $class->name          = 'Priest of Urdlen';
        $class->type          = 'Priest';
        $class->key_attribute = 'WIS';
        $class->weapons       = 'Simple Weapons';
        $class->armors        = 'Light Armor';
        $class->has_spells    = 1;
        $helper->saveClass($class, [
            'hit_dice'       => 8,
            'skill_points'   => 6,
            'skill_progress' => 6,
        ], ['WIS', 'CHA'], [
            'Gnome', 'Divine', 'Evil',
        ]);

        $helper->addClassesToGod($god, 'Gnome', [
            'Cleric' => 20,
            'Wizard' => 10,
        ]);
        $helper->addWorshipClassesToGod($god, 'Gnome', [
            $class->name, 'Rogue', 'Assassin',
        ]);

        // Skills
        $helper->addSkillsToClass($class,
            ['Animal Handling', 'Concentration', 'Diplomacy', 'Intimidation', 'Medicine', 'Performance', 'Religion']
        );
        $helper->addFeaturesToClass($class, [
            'divine_feat' => [1, 3, 6, 9, 12, 15, 18, 20],
        ]);
        $helper->addDomainToClass($class, ['Craft', 'Gnome', 'Protection', 'Trickery']);
        $helper->addSpellsToClass($class, [
            0 => ['Stabilize'],
            1 => ['Cure Wounds', 'Treasure Scent'],
            2 => ['Gembomb', 'Undead Bane Weapon'],
            3 => ['Burrow'],
            5 => ['Atonement'],
            6 => ['Heal'],
        ]);
        $helper->addSpellSlotsToClass($class);
    }
}
