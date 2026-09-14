<?php

namespace Database\Seeders\Gods;

use App\Models\Feat;
use App\Models\God;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsTalosSeeder extends Seeder
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
        $god->name  = 'Talos';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'aliases'        => 'Bhaelros (Calimshan), Kozah (Netheril, Bedine)',
            'title'          => 'The Destroyer, the Storm Lord, The Raging One, The Storm Star',
            'level'          => 'Intermediate',
            'portfolio'      => 'Storms, Destruction, Rebellion, Conflagration, Earthquakes, Vortices, Evil Druids',
            'regions'        => 'Calimshan, Moonsea, Nelanther Isle, The North, Vilhon Reach',
            'alignment'      => 'NE',
            'symbol'         => 'Three lightning bolts radiating from a point',
            'favored_weapon' => 'A lightning bold (Longspear, Shortspear, or Halfspear)',
            'master_id'      => God::where('name', 'Silvanus')->first()->id,
        ]);
        $helper->addClassesToGod($god, 'Faeruneon', [
            'Barbarian' => 20,
            'Druid'     => 20,
            'Wizard'    => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Druid' => ['is_clergy' => true],
            'Barbarian',
            'Wizard' => ['meta' => 'Evocation'],
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Talos gives his blessings to people who wreck things. Simply put, Talos is a god of indiscriminate ruination - all things must come to an end, and sometimes life isn’t fair. Every day you are not destroyed by dark whim is a gift - so use it wisely, and live well.</p>
<p>Talos's scions are frequently found amongst bandits, brigands and other lawless looters who pillage and dismantle as part of their daily life. Sometimes his chosen become doomsayers, predicting where Talos will turn his gaze next for their own profit.</p>
<ol>
    <li>You were caught in a terrible storm as a child that killed everyone in your village except you</li>
    <li>You destroyed a monument or structure of great importance and historical significance</li>
    <li>You leave a trail of destruction wherever you go</li>
    <li>You lead a group of thugs and bandits who rob everyone blind and squander the profits</li>
    <li>You have an erratic ability to predict storms and natural disasters. Perhaps this is a gift from Talos, or he just wants you under his contorl</li>
    <li>You gave up all your worldy belongings in tribute to the storm god, and he blessed you with the power to leave it all behind</li>
</ol>",
            'devotion' => "<p>Following Talos means being a servant of destruction. As a follower of Talos, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Savagery</dt> <dd>I don't really care what happens as long as I get to destroy stuff</dd>
    <dt>Rage</dt> <dd>My destructive habits stems from my suppressed anger about an event in my past</dd>
    <dt>Dread</dt> <dd>People see me coming and scatter. Hah. Look at them scurry about</dd>
    <dt>Change</dt> <dd>That building was dedicated to a tyrant anyway. Maybe they'll put something better in its place</dd>
    <dt>Nature</dt> <dd>The world is a place of grim cataclysms. It's the natural way of things, we should embrace it</dd>
</dl>",
            'earn_piety' => [
                'Destroying noteworthy objects',
                'Committing random acts of desecration for no reason other than to glorify Talos',
                'Letting go of earthly ties and possessions',
            ],
            'lose_piety' => [
                'Working to build physical property and establish legacy',
                'Preventing disasters from destroying noteworthy locales',
            ],
            'piety3' => '<h4>Favored God: Talos</h4>
<p>You gain Inspiration by destroying something important</p>',
            'piety10' => '<h4>Grand Guignol</h4>
<p>Choose a weapon you are proficient in, or a damaging spell you can cast. Corporeal creatures reduced to 0 Hit Points to that weapon or spell instantly explode in a shower of gore</p>',
            'piety25' => '<h4>Living Siege Weapon</h4>
<p>When you hit an object with an attack, you deal maximum damage</p>',
            'piety50' => "<h4>Chosen of Talos</h4>
<p>You can spend an Inspiration to cast Destructive Wave with this trait. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. CHA is your spellcasting ability for this spell. This version of the spell deals Lightning damage instead of Positive and deals triple damage to objects or structures</p>",
        ]);
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Ire of Talos')->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Anger of Talos')->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Rage of Talos')->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Fury of Talos')->first());
        $talos = $god;

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Auril';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'aliases'        => 'Saukuruk (Great Glacier)',
            'title'          => 'Frostmaiden, Icedawn, the Cold Goddess',
            'level'          => 'Lesser',
            'portfolio'      => 'Cold, Winter',
            'alignment'      => 'NE',
            'symbol'         => 'Six-pointed snowflake',
            'regions'        => 'The North',
            'favored_weapon' => "Icemaiden's Caress (Ice Axe, Battleaxe)",
            'master_id'      => $talos->id,
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Druid'         => 20,
            'Spirit Shaman' => 5,
            'Ranger'        => 10,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Druid'         => ['is_clergy' => true],
            'Spirit Shaman' => ['is_clergy' => true],
            'Ranger'        => ['is_clergy' => true],
            'Barbarian',
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Auril offers power and strength to those who would eschew the bounds of society and live out in the harsh reaches of winter. In her service, scions find themselves spreading bitter truths and preparing mortals for harsh realities.</p>
<p>Auril's scions are seldom cheerful sorts, often exhibiting morose, cold and savagely honest personalities.</p>
<ol>
    <li>You were born on a midwinter solstice</li>
    <li>You survived a raging snowstorm</li>
    <li>You won the midwinter games</li>
    <li>You fell into an icy lake as a child and saw something under the surface</li>
    <li>You climbed to the peak of a dangerous snowy mountain</li>
    <li>A winter monster almost killed you, but turned away for unknown reasons</li>
</ol>',
            'devotion' => '<p>Following Auril means dedicating yourself to cold and ice. As a follower of Auril, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Apathy</dt> <dd>My soul is rimed in ice and bitter regret</dd>
    <dt>Savagery</dt> <dd>The world is cruel, I must be crueler yet to survive it</dd>
    <dt>Nature</dt> <dd>There is no justice, only the whims of natural forces</dd>
    <dt>Hate</dt> <dd>Ths world takes, and takes and takes. I hate it. It should all perish</dd>
    <dt>Dread</dt> <dd>Winter comes for us all eventually</dd>
</dl>",
            'earn_piety' => [
                'Preparing others for hard truths',
                'Enduring unavoidable disasters',
                'Being honest, especially when it would hurt someone',
            ],
            'lose_piety' => [
                'Offering comfort or solace to others',
                'Lying to protect the feelings of someone else',
                'Showing weakness in the face of adversity',
            ],
            'piety3' => "<h4>Favored God: Auril</h4>
<p>You gain Inspiration when you deliver a harsh truth or knowledge that someone doesn't want to hear</p>",
            'piety10' => "<h4>Winter's Raiment</h4>
<p>You gain a bonus to your AC equal to your proficiency bonus. If you take Fire damage or are damaged by a Critical Hit, you lose the benefit of this ability until you finish a Long Rest</p>",
            'piety25' => '<h4>Cryogenics</h4>
<p>You cannot be damaged whilst you are petrified or unconscious</p>',
            'piety50' => '<h4>Chosen of Auril</h4>
<p>You may use an Action to spend an Inspiration and freeze yourself into an ice statue. In this state, you are petrified. This state lasts for 1 minute</p>',
        ]);
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Auril's Touch")->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Auril's Kiss")->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Auril's Hold")->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Auril's Embrace")->first());

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Talona';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'aliases'        => 'Kiputytto',
            'title'          => 'Lady of Poison, Mistress of Disease, Mother of All Plagues, The Plague-crone, She of the Deadly Kiss',
            'level'          => 'Lesser',
            'portfolio'      => 'Disease, Poison, Blights',
            'regions'        => 'Moonsea',
            'alignment'      => 'NE',
            'symbol'         => 'Three teardrops in a triangle',
            'favored_weapon' => 'A scabrous hand (Unarmed Strike)',
            'master_id'      => $talos->id,
        ]);
        $helper->addClassesToGod($god, 'Faeruneon', [
            'Druid'    => 20,
            'Scout'    => 10,
            'Ranger'   => 5,
            'Assassin' => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Druid'         => ['is_clergy' => true],
            'Ranger'        => ['is_clergy' => true],
            'Divine Oracle' => ['is_clergy' => true],
            'Scout', 'Assassin',
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Talona's favour is bestowed on those who she believes are best placed to carry forth her plagues and poisons into places which have become complacent, greedy or decadent.</p>
<p>Talona's scions may not know they have been blessed by this fearsome goddess, and they would be wise to be afraid of her. Talona frequently immunizes her chosen against diseases, using them as silent vectors for her deadly agenda.</p>
<ol>
    <li>You were the lone survivor of a terrible plague in your village</li>
    <li>You love rats. Tiny little adorable vectors</li>
    <li>You begged the goddess to spare you when you were poisoned. She did, but now you owe her</li>
    <li>You've been dosing yourself with antivenom your entire life out of paranoia. This amused the goddess</li>
    <li>You were bitten by a radioactive spider</li>
    <li>You murdered someone very important with poison</li>
</ol>",
            'devotion' => "<p>Following Talona means being a servant of disease and blight. As a follower of Talona, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Greater Good</dt> <dd>Plague removes the weak and leaves the strong behind. This is for the best in the long run</dd>
    <dt>Balance</dt> <dd>The world is overpopulated. This is nature's way of restoring balance</dd>
    <dt>Nature</dt> <dd>Death is part of the great cycle to which we are all bound</dd>
    <dt>Dread</dt> <dd>I enjoy being feared, and Talona's faith is feared by all</dd>
    <dt>Apathy</dt> <dd>People die. It happens. Why fuss?</dd>
</dl>",
            'earn_piety' => [
                'Using poison to achieve your goals',
                'Spreading a disease or contagion',
                'Disrupting a power structure with death and chaos',
            ],
            'lose_piety' => [
                'Working to stop the spread of sickness or plague',
                'Willingly working alongside unwieldy or bloated institutions',
            ],
            'piety3' => '<h4>Favored God: Talona</h4>
<p>You gain Inspiration when you spread something harmful to another creature, whether it be a disease, a poisonous rumor or something else</p>',
            'piety10' => '<h4>Developed Immunity</h4>
<p>You become immune to the symptoms of disease, magical or otherwise. You also gain resistance to poison damage</p>',
            'piety25' => '<h4>Queen of Vermin</h4>
<p>You can cast Speak with Animals or Animal Friendship with this trait at-will, requiring no components. WIS is your spellcasting ability for these spells. You may only use these versions of those spells on vermin or house pets, such as rats, cats, or dogs</p>',
            'piety50' => "<h4>Chosen of Talona</h4>
<p>You can spend an Inspiration to cast Contagion with this trait. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. WIS is your spellcasting ability for this spell. When you cast the spell with this feature, the selected disease begins to spread from an afflicted creature to any other creature they touch as if it were a normal disease, using your spellcasting DC where relevant</p>",
        ]);
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Talona's Taint")->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Talona's Contagion")->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Talona's Affliction")->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Talona's Plague")->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Talonatar Blightlord')->first());

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Malar';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'aliases'        => 'The Stalker (Vilhon Reach), Render (Endless Ice and Great Glacier), Blue Bear (Uthgardt), Herne (orcs of the High Forest)',
            'title'          => 'The Beastlord, the Black-Blooded Pard, the Ravaging Bear',
            'level'          => 'Lesser',
            'regions'        => 'The Great Dale, Cormyr, High Forest, The North, Tashalar, Vilhon Reach',
            'alignment'      => 'NE',
            'portfolio'      => 'Bloodlust, Evil Lychanthropes, Hunters, Marauding Beasts and Monsters, Stalking',
            'symbol'         => 'Clawed paw',
            'favored_weapon' => "A beast's claw (Claw Bracer)",
            'master_id'      => $talos->id,
        ]);
        $helper->addClassesToGod($god, 'Faeruneon', [
            'Ranger'    => 20,
            'Barbarian' => 5,
            'Druid'     => 5,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Druid'  => ['is_clergy' => true],
            'Ranger' => ['is_clergy' => true],
            'Barbarian', 'Fighter',
        ]);
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', 'Blood of Malar')->first());

        /**********************************************************************/

        $god        = new God;
        $god->name  = 'Olhydra';
        $god->level = 'Lesser';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Elemental'], [
            'name'      => $god->name,
            'title'     => 'Princess of Evil Water Elementals, The Crushing Wave, The Well of Endless Anguish',
            'level'     => 'Archomental',
            'portfolio' => 'Evil Water Elementals',
            'alignment' => 'NE',
        ]);
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => 'Umberlee',
            'title'          => 'The Bitch Queen, Queen of the Depths, The Wavemother',
            'level'          => 'Lesser',
            'portfolio'      => 'Currents, Oceans, Sea, Winds, Waves',
            'regions'        => 'Dragon Coast, Moonsea, Nelanther Isle, The Vast',
            'alignment'      => 'CE',
            'symbol'         => 'Wave curling left and right',
            'favored_weapon' => 'Drowning Death (trident)',
            'master_id'      => $talos->id,
        ]);
        $god->pantheons()->save(app()->pantheons['Asathalfinare'], [
            'name'           => 'Panzuriel',
            'title'          => 'Sea Queen',
            'level'          => 'Lesser',
            'portfolio'      => 'Currents, Oceans, Waves, Sea Winds',
            'regions'        => 'Sea of Fallen Stars',
            'alignment'      => 'CE',
            'symbol'         => 'A forked blue-green wave, curling in breakers to both left and right, on a background of black streaked with white',
            'favored_weapon' => 'Drowning Death (trident)',
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Druid'        => 20,
            'Swashbuckler' => 10,
            'Wizard'       => 10,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Druid'         => ['is_clergy' => true],
            'Ranger'        => ['is_clergy' => true],
            'Divine Oracle' => ['is_clergy' => true],
            'Swashbuckler',
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Umberlee drowns ships and sinks coastal towns with vicious and lamentable regularity. She admires those who give her tribute, whether that be in chests of gold or sentimental trinkets - what matters to Umberlee is how much of a sacrifice was made.</p>
<p>Umberlee's scions are inconsistent in temperament, but share a common bond in their link to the ocean - to live in service to the Bitch Queen (for even amongst evil deities, Umberlee is known to possess a cruel streak) is no easy matter.</p>
<ol>
    <li>Your ship and crew tithes generously to the goddess and you have her favour...for now</li>
    <li>You fell overboard, and Umberlee carried you to shore. You have no idea why she would spare you</li>
    <li>You are close friends with a sea animal or monster</li>
    <li>You’ve lived on the sea edge all your life, and Umberlee has been watching you</li>
    <li>You were a sea creature, but the Bitch Queen sent you onto land in a new body after you slighted her</li>
    <li>You hurled yourself into the sea in a fit of despair, but the goddess had other plans for you</li>
</ol>",
            'devotion' => "<p>Following Umberlee means dedicating your life to the dangers of the open sea. As a follower of Umberlee, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Wealth</dt> <dd>Tribute is how people should show they love me</dd>
    <dt>Risk</dt> <dd>The sea is a capricious and fickle mistress. I must match it in daring if I am to survive</dd>
    <dt>Courage</dt> <dd>Nothing terrifies me as much as the thought of ending my days in a watery grave</dd>
    <dt>Passion</dt> <dd>Life is short. Opportunities for happiness are limited. Seize them without regret</dd>
    <dt>Cruelty</dt> <dd>You think this is bad? Try sailing the Sea of Stars at midnight in a thunderstorm. That's real suffering</dd>
</dl>",
            'earn_piety' => [
                'Giving due tribute to the ocean in the form of something that matters to you',
                "Taking a sea journey having secured Umberlee's favor",
                'Showing reverence and deference to the dangers of the ocean',
            ],
            'lose_piety' => [
                'Traveling by sea when the omens are dark and against the wishes of the goddess',
                'Not offering due tribute from any spoils gained at sea',
            ],
            'piety3' => '<h4>Favored God: Umberlee</h4>
<p>You gain Inspiration when you offer tribute to the sea</p>',
            'piety10' => "<h4>Captain's Bond</h4>
<p>Choose a sea vessel you know of. You are always aware of its location, crew and state of repair as long as it is on the water and the same plane of existence</p>",
            'piety25' => '<h4>Sea Legs</h4>
<p>Whilst aboard a ship, underwater or in the rain, enemies have disadvantage on attacks rolls against you and perception checks to detect you</p>',
            'piety50' => "<h4>Chosen of Umberlee</h4>
<p>You can spend an Inspiration to cast Maelstrom Wave with this trait. Once you cast the spell in this way, you can't do so again until you finish a Long Rest. CHA is your spellcasting ability for this spell. This version of the spell deals Lightning damage instead of Positive and deals triple damage to objects or structures</p>",
        ]);
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Umberlee's Mist")->first());
        $helper->addFeatToGodPantheon($god, 'Faeruneon', Feat::where('name', "Umberlee's Shower")->first());
    }
}
