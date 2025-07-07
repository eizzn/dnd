<?php

namespace Database\Seeders\Races;

use App\Models\Race;
use App\Models\SubRace;
use Illuminate\Database\Seeder;

class RaceGnomesSeeder extends Seeder
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
        $race->name        = 'Gnome';
        $race->age         = 'Gnomes mature at the same rate humans do, and most are expected to settle down into an adult life by around age 40. They can live 350 to almost 500 years.';
        $race->hit_points  = 8;
        $race->size        = 'Small';
        $race->speed       = 25;
        $race->description = '<p>A constant hum of busy activity pervades the warrens and neighborhoods where gnomes form their close-knit communities. Louder sounds punctuate the hum: a crunch of grinding gears here, a minor explosion there, a yelp of surprise or triumph, and especially bursts of laughter. Gnomes take delight in life, enjoying every moment of invention, exploration, investigation, creation, and play.</p>
<h2>Vibrant Expression</h2>
<p>A gnome’s energy and enthusiasm for living shines through every inch of his or her tiny body. Gnomes average slightly over 3 feet tall and weigh 40 to 45 pounds. Their tan or brown faces are usually adorned with broad smiles (beneath their prodigious noses), and their bright eyes shine with excitement. Their fair hair has a tendency to stick out in every direction, as if expressing the gnome’s insatiable interest in everything around.</p>
<p>A gnome’s personality is writ large in his or her appearance. A male gnome’s beard, in contrast to his wild hair, is kept carefully trimmed but often styled into curious forks or neat points. A gnome’s clothing, though usually made in modest earth tones, is elaborately decorated with embroidery, embossing, or gleaming jewels.</p>
<h2>Delighted Dedication</h2>
<p>As far as gnomes are concerned, being alive is a wonderful thing, and they squeeze every ounce of enjoyment out of their three to five centuries of life. Humans might wonder about getting bored over the course of such a long life, and elves take plenty of time to savor the beauties of the world in their long years, but gnomes seem to worry that even with all that time, they can’t get in enough of the things they want to do and see.</p>
<p>Gnomes speak as if they can’t get the thoughts out of their heads fast enough. Even as they offer ideas and opinions on a range of subjects, they still manage to listen carefully to others, adding the appropriate exclamations of surprise and appreciation along the way.</p>
<p>Though gnomes love jokes of all kinds, particularly puns and pranks, they’re just as dedicated to the more serious tasks they undertake. Many gnomes are skilled engineers, alchemists, tinkers, and inventors. They’re willing to make mistakes and laugh at themselves in the process of perfecting what they do, taking bold (sometimes foolhardy) risks and dreaming large.</p>
<h2>Bright Burrows</h2>
<p>Gnomes make their homes in hilly, wooded lands. They live underground but get more fresh air than dwarves do, enjoying the natural, living world on the surface whenever they can. Their homes are well hidden by both clever construction and simple illusions. Welcome visitors are quickly ushered into the bright, warm burrows. Those who are not welcome are unlikely to find the burrows in the first place.</p>
<p>Gnomes who settle in human lands are commonly gemcutters, engineers, sages, or tinkers. Some human families retain gnome tutors, ensuring that their pupils enjoy a mix of serious learning and delighted enjoyment. A gnome might tutor several generations of a single human family over the course of his or her long life.</p>';
        $race->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your INT score increases by +2</dd>
    <dt>Darkvision</dt> <dd>Accustomed to life underground, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can’t discern color in darkness, only shades of gray.</dd>
    <dt>Gnome Cunning</dt> <dd>You gain a +2 bonus on all INT, WIS, and CHA Saves against magic</dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Gnome']);

        $subrace           = new SubRace;
        $subrace->name     = 'Deep Gnome (Svirfneblin)';
        $subrace->race_id  = $race->id;
        $subrace->regions  = 'Underdark';
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your DEX score increases by +1</dd>
    <dt>Superior Darkvision</dt> <dd>Your Darkvision has a range of 120 feet</dd>
    <dt>Stone Camouflage</dt> <dd>You gain a +2 bonus on DEX (Stealth) checks to hide in rocky terrain</dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Gnome']);

        $subrace           = new SubRace;
        $subrace->name     = 'Rock Gnome';
        $subrace->race_id  = $race->id;
        $subrace->benefits = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your CON score increases by +1</dd>
    <dt>Artificer’s Lore</dt> <dd>Whenever you make an INT (History) check related to magic items, alchemical objects, or technological devices, you can add twice your proficiency bonus, instead of any proficiency bonus you normally apply.</dd>
    <dt>Tinker</dt> <dd>
        <p>You have proficiency with artisan’s tools (tinker’s tools). Using those tools, you can spend 1 hour and 10 gp worth of materials to construct a Tiny clockwork device (AC 5, 1 hp). The device ceases to function after 24 hours (unless you spend 1 hour repairing it to keep the device functioning), or when you use your action to dismantle it; at that time, you can reclaim the materials used to create it. You can have up to three such devices active at a time.</p>
        <p>When you create a device, choose one of the following options:</p>
        <ul>
            <li><strong>Clockwork Toy</strong> This toy is a clockwork animal, monster, or person, such as a frog, mouse, bird, dragon, or soldier. When placed on the ground, the toy moves 5 feet across the ground on each of your turns in a random direction. It makes noises as appropriate to the creature it represents.</li>
            <li><strong>Fire Starter</strong> The device produces a miniature flame, which you can use to light a candle, torch, or campfire. Using the device requires your action.</li>
            <li><strong>Music Box</strong> When opened, this music box plays a single song at a moderate volume. The box stops playing when it reaches the song’s end or when it is closed.</li>
        </ul>
    </dd>
</dl>';
        $helper->addTypesToSimpleObject($subrace, ['Gnome']);
    }
}
