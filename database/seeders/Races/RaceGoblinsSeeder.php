<?php

namespace Database\Seeders\Races;

use App\Models\Race;
use App\Models\SubRace;
use Illuminate\Database\Seeder;

class RaceGoblinsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $helper = app()->seedHelper;

        $race              = new Race;
        $race->name        = 'Goblin';
        $race->age         = 'Goblins reach adulthood at age 8 and live up to 60 years.';
        $race->hit_points  = 6;
        $race->size        = 'Small';
        $race->speed       = 30;
        $race->description = '<p>Goblins occupy an uneasy place in a dangerous world, and they react by lashing out at any creatures they believe they can bully. Cunning in battle and cruel in victory, goblins are fawning and servile in defeat.</p>
<p>Goblins are between 3 and 4 feet tall and weigh between 40 and 80 poinds.</p>';
        $race->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your DEX score increases by +2 and your CON score increases by +1</dd>
    <dt>Darkvision</dt> <dd>You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can\'t discern color in darkness, only shades of gray.</dd>
    <dt>Fury of the Small</dt> <dd>When you damage a creature with an attack or a spell and the creature\'s size is larger than yours, you can cause the attack or spell to deal extra damage to the creature. The extra damage equals your level. Once you use this trait, you can\'t use it again until you finish a long rest.</dd>
    <dt>Nimble Escape</dt> <dd>You gain the Nimble Escape feat</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Goblin', 'Fey']);

        $race              = new Race;
        $race->name        = 'Hobgoblin';
        $race->age         = 'Hobgoblins mature at the same rate as humans and have lifespans similar in length to theirs.';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '<p>War is the lifeblood of hobgoblins. Its glories are the dreams that inspire them. Its horrors don\'t feature in their nightmares. Cowardice is more terrible to hobgoblins than dying, for they carry their living acts into the afterlife. A hero in death becomes a hero eternal.</p>
<p>Hobgoblins are between 5 and 6 feet tall and weigh between 150 and 200 poinds.</p>';
        $race->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CON score increases by +2 and your INT score increases by +1</dd>
    <dt>Darkvision</dt> <dd>You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can\'t discern color in darkness, only shades of gray.</dd>
    <dt>Martial Training</dt> <dd>You are proficient with two martial weapons of your choice and with light armor, and you gain the Attack of Opportunity feat</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Goblin', 'Fey']);

        $race              = new Race;
        $race->name        = 'Bugbear';
        $race->age         = 'Bugbears reach adulthood at age 16 and live up to 80 years.';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '<p>Bugbears rely on stealth and strength to attack, preferring to operate at night. When they\'re not in battle, bugbears spend much of their time resting or dozing, and bully weaker creatures into doing their bidding. From the viewpoint of the rest of the world, their aggression and savagery are thankfully offset by their rarity and lethargy.</p>
<p>Bugbears are between 6 and 8 feet tall and weigh between 250 and 350 pounds.</p>';
        $race->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your STR score increases by +2 and your WIS score increases by +1</dd>
    <dt>Darkvision</dt> <dd>You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can\'t discern color in darkness, only shades of gray.</dd>
    <dt>Long-Limbed</dt> <dd>When you make a melee attack on your turn, your reach for it is 5 feet greater than normal.</dd>
    <dt>Powerful Build</dt> <dd>You count as one size larger when determining your carrying capacity and the weight you can push, drag, or lift.</dd>
    <dt>Sneaky</dt> <dd>You gain a +2 bonus to all Stealth checks</dd>
    <dt>Sneak Attack</dt> <dd>You gain the Sneak Attack class feature</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Goblin', 'Fey']);

        $race              = new Race;
        $race->name        = 'Kobold';
        $race->age         = 'Kobolds reach adulthood at age 6 and can live up to 120 years but rarely do so.';
        $race->hit_points  = 6;
        $race->size        = 'Small';
        $race->speed       = 30;
        $race->description = '<p>Kobolds are often dismissed as cowardly, foolish, and weak, but these little reptilian creatures actually have a strong social structure that stresses devotion to the tribe, are clever with their hands, and viciously work together in order to overcome their physical limitations.</p>
<p>Kobolds are between 2 and 3 feet tall and weigh between 25 and 35 pounds.</p>';
        $race->benefits = "<dl>
    <dt>Ability Score Increase</dt> <dd>Your DEX and STR scores increases by +2</dd>
    <dt>Darkvision</dt> <dd>You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</dd>
    <dt>Opportunists</dt> <dd>You gain the Attack of Opportunity feat</dd>
    <dt>Nimble Escape</dt> <dd>You gain the Nimble Escape feat</dd>
    <dt>Sunlight Sensitivity</dt> <dd>You have Disadvantage on attack rolls and on WIS (Perception) checks that rely on sight when you, the target of your attack, or whatever you are trying to perceive is in direct sunlight.</dd>
</dl>";
        $helper->addTypesToSimpleObject($race, ['Kobold', 'Dragon']);

        $race              = new Race;
        $race->name        = 'Gnoll';
        $race->age         = 'Gnolls reach adulthood at age 5 and live up to 35 years.';
        $race->hit_points  = 8;
        $race->size        = 'Medium';
        $race->speed       = 40;
        $race->description = "<p>Gnolls are a humanoid race that most closely resembles human-hyena hybrids. They are carnivorous humanoids, known for their savage culture and warlike ways.</p>
<p>Gnolls are extremely tall, with the average member of the race standing around 7'-7'6\". Though gnolls are relatively lean for their height, weighing in usually between 280 - 320 lbs, they cut an impressive visage. In part because of their height and lean musculature, gnolls are very quick compared with many other races such as humans. Gnoll skins are greenish-gray, and their furry hide a light or dark brown hue, sometimes marked with spots or stripes. Many gnolls also have a dirty yellow ro a redish-gray crest-like mane that stands on end when they are angry.</p>";
        $race->benefits = "<dl>
    <dt>Darkvision</dt> <dd>you can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</dd>
</dl>";
        $helper->addTypesToSimpleObject($race, ['Gnoll']);

        $subrace           = new SubRace;
        $subrace->name     = 'Gnoll';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Shar, Eastern Shar, Moonsea area, Tethyr, Amn, Unther, Chessenta';
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your STR score increases by +2</dd>
    <dt>Intial Hit Die</dt> <dd>You start with 1D8 Hit Points</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Gnoll']);

        $subrace           = new SubRace;
        $subrace->name     = 'Half Gnoll';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Moonsea area';
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your STR score increases by +1 and your INT score decreased by -1</dd>
    <dt>Intial Hit Die</dt> <dd>You start with 1D8 Hit Points</dd>
    <dt>Sneaky</dt> <dd>You gain a +2 bonus to all Stealth checks</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Gnoll']);

        $subrace           = new SubRace;
        $subrace->name     = 'Flind';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Shar, Eastern Shar, Moonsea area';
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your STR score increases by +1</dd>
    <dt>Initial Hit Die</dt> <dd>You start with 1D8 Hit Points</dd>
    <dt>Demonic Ancestry</dt> <dd>You count as a Fiend (Demon of Yeenoghu) and are immune to Spells that targets humanoids.</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Gnoll', 'Demon']);
    }
}
