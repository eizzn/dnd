<?php

namespace Database\Seeders;

use App\Models\Background;
use Illuminate\Database\Seeder;

class BackgroundsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background                = new Background;
        $background->name          = 'Acolyte';
        $background->description   = 'You spent your early days in a religious monastery or cloister. You may have traveled out into the world to spread the message of your religion or because you cast away the teachings of your faith, but deep inside you\'ll awlays carry the lessons your learned.';
        $background->ability_boost = 'Choose two ability boosts. One must be to CON or WIS, and one is a free ability boost';
        $background->skills        = 'You gain the following benefits</p>
<ul>
    <li>Impeccable Skill feat for the Religion skill</li>
    <li>You gain a +2 bonus on Religion skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Acrobat';
        $background->description   = 'In a circus or on the streets, you earned your pay by performing as an acrobat. You might have turned to adventuring when the money dried up, or when you learned to put skills to better use.';
        $background->ability_boost = 'Choose two ability boosts. One must be to STR or DEX, and one is a free ability boost';
        $background->skills        = "<p>You gain the following benefits:</p>
<ul>
    <li>Masterful Skill feat for Acrobatics (Balance only)</li>
    <li>You are not flat-footed while attempting to Balance on narrow surfaces and uneven ground</li>
    <li>If your're attacked while Balancing, you fall only if you Critically Fail</li>
    <li>You gain a +2 bonus to the Lore (Circus) skill</li>
</ul>";
        $background->save();

        $background                = new Background;
        $background->name          = 'Animal Whisperer';
        $background->description   = 'You have always felt a connection to animals, and it was only a small leap to learn to train them. As you travel, you continuously encounter different creatures, befriending them along the way.';
        $background->ability_boost = 'Choose two ability boosts. One must be to WIS or CHA, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain the Skilled feat, and all of the gained Skill Points must be spent on Animal Handling (Train an Animal)</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Barkeep';
        $background->description   = 'You have five specialties: hefting barrels, polishing steins, drinking, drinking, and drinking. You ran or worked in a bar, where you learned how to hold your liquor and rowdily socialize.';
        $background->ability_boost = 'Choose two ability boosts. One must be to CON or CHA, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You can attempt to Gather Information twice as many times as usual during a day of downtime</li>
    <li>You gain a +2 bonus to the Lore (Beer) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Blacksmith';
        $background->description   = 'You were a blacksmith or a blacksmith’s apprentice, and during countless hours toiling at the forge, you learned how to smith armor and weapons. Perhaps you worked hard each day and dreamed of adventure each night, or perhaps the adventuring life was thrust upon you by a pivotal event.';
        $background->ability_boost = 'Choose two ability boosts. One must be to STR or INT, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>Select a specialty type of Crafting. You gain a +4 bonus on all Crafting checks of your specialty<li>
    <li>You gain a +2 bonus to the Lore (Crafting) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Criminal';
        $background->description   = 'As an unscrupulous independent or as a member of an underworld organization, you lived a life of crime. You might have become an adventurer to seek redemption, to escape the law, or simply to get access to bigger and better loot.';
        $background->ability_boost = 'Choose two ability boosts. One must be to DEX or INT, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain a +2 bonus to Thievery checks<li>
    <li>You gain a +2 bonus to the Lore (Underworld) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Entertainer';
        $background->description   = 'Through an education in the arts or sheer, dogged practice, you learned to entertain crowds. You might have been an actor, a dancer, a musician, a magician, or any other sort of performer.';
        $background->ability_boost = 'Choose two ability boosts. One must be to DEX or CHA, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain a +2 bonus to all Performance checks<li>
    <li>You gain a +2 bonus to the Lore (Entertainment) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Farmhand';
        $background->description   = 'With a strong back and an understanding of seasonal cycles, you tilled the land and tended crops. Your farm could have been razed by invaders, you could have lost the family tying you to the land, or you might have simply tired of the drudgery, but at some point you became an adventurer.';
        $background->ability_boost = 'Choose two ability boosts. One must be to CON or WIS, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain the Assurance skill Feat (Athletics)<li>
    <li>You gain a +2 bonus to the Lore (Farming) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Gladiator';
        $background->description   = 'The bloody games of the arena taught you the art of combat. Before you attained true fame, you departed-or escaped- the arena to explore the world. Your skill at drawing both blood and a crowd\'s attention pay off in a new adventuring life.';
        $background->ability_boost = 'Choose two ability boosts. One must be to STR or CHA, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain a +2 bonus to all Performance checks<li>
    <li>You gain a +2 bonus to the Lore (Gladiatorial) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Hunter';
        $background->description   = 'You stalk and take down animals and other creatures of the wild. Skinning animals, harvesting their flesh, and cooking them were also part of your training, all of which can give you useful resources while you adventure.';
        $background->ability_boost = 'Choose two ability boosts. One must be to DEX or WIS, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain a +2 bonus to all Medicine checks<li>
    <li>You gain a +2 bonus to the Lore (Hunting) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Laborer';
        $background->description   = 'You have spent years performing arduous physical labor, perhaps against your will. It was a difficult life, but you somehow survived. You may have embraced adventuring as an easier method to make your way in the world, or you might adventure under someone else’s command.';
        $background->ability_boost = 'Choose two ability boosts. One must be to STR or CON, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain a +2 bonus to all Medicine checks<li>
    <li>You gain a +2 bonus to the Lore (Labor) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Merchant';
        $background->description   = 'In a dusty shop, market stall, or merchant caravan, you bartered wares for coin and trade goods. The skills you picked up still apply in the adventuring life, in which a deal on a suit of armor could save your life.';
        $background->ability_boost = 'Choose two ability boosts. One must be to INT or CHA, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain a +4 bonus to Diplomacy (Request) checks for Haggling<li>
    <li>You gain a +2 bonus to the Lore (Mercantile) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Noble';
        $background->description   = 'To the common folk, the life of a noble seems one of idyllic luxury, but growing up as a noble or member of the aspiring gentry, you know the reality: a noble’s lot is obligation and intrigue. Whether you seek to escape your duties by adventuring or to thereby better your station, you have traded silks and pageantry for an adventurer’s life.';
        $background->ability_boost = 'Choose two ability boosts. One must be to INT or CHA, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain a +2 bonus to all Society checks<li>
    <li>You gain a +2 bonus to the Lore (Nobility) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Nomad';
        $background->description   = 'Traveling far and wide, you picked up basic tactics for surviving on the road and in unknown lands, getting by with few supplies and even fewer comforts. As an adventurer, you travel still, often into even more dangerous places.';
        $background->ability_boost = 'Choose two ability boosts. One must be to CON or WIS, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain the Assurance skill (Survival)<li>
    <li>You gain a +2 bonus to the Lore (Terrain) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Sailor';
        $background->description   = 'You heard the call of the sea from a young age. Perhaps you signed onto a merchant’s vessel, joined the navy, or even fell in with a crew of pirates and scallywags.';
        $background->ability_boost = 'Choose two ability boosts. One must be to STR or DEX, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain a +5 bonus to the Lore (Sailing) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Scholar';
        $background->description   = 'You have a knack for learning, and from a young age, you sequestered yourself from the outside world to learn all that you could. You\'ve read about so many wondrous places and things in your books, and you\'ve always dreamed about one day seeing the real things. Eventually, that curiosity led you to leave your studies and become an adventurer.';
        $background->ability_boost = 'Choose two ability boosts. One must be to INT or WIS, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>Choose Arcana, Nature, or Religion; you gain the Assurance skill feat in your chosen skill<li>
    <li>You gain a +2 bonus to the Lore (Academia) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Scout';
        $background->description   = 'You called the wilderness home as you hunted game, found trails, and guided travelers. Your wanderlust could have called you to the adventuring life, or perhaps you were serving as a scout for soldiers and found you liked battle.';
        $background->ability_boost = 'Choose two ability boosts. One must be to DEX or WIS, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain the Assurance skill (Survival)<li>
    <li>You gain a +2 bonus to the Lore (Scouting) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Street Urchin';
        $background->description   = 'You eked out a living by picking pockets on the streets of a major city, never knowing where you’d find your next meal. While some folk adventure for the glory, you adventure as a means of survival.';
        $background->ability_boost = 'Choose two ability boosts. One must be to DEX or INT, and one is a free ability boost';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain a +2 bonus to all Thievery checks<li>
    <li>You gain a +2 bonus to the Lore (Underworld) skill</li>
</ul>';
        $background->save();

        $background                = new Background;
        $background->name          = 'Warrior';
        $background->description   = 'As a warrior in a tribe or a member of a militia or army, you waded into battle in your younger days. You might have wanted to break out from the regimented structure of these forces, or could have always been as independent a warrior as you are now.';
        $background->ability_boost = 'Choose two ability boosts. One must be to STR or CON, and one is a free ability boost';
        $background->skills        = 'You gain the Quick Repair skill feat, and you\'re trained in the Warfare Lore skill.';
        $background->skills        = '<p>You gain the following benefits:</p>
<ul>
    <li>You gain a +1 bonus to all Perception checks<li>
    <li>You gain a +2 bonus to the Lore (Warfare) skill</li>
</ul>';
        $background->save();
    }
}
