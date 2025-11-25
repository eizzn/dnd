<?php

namespace Database\Seeders\Gods;

use App\Models\God;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class GodsChaunteaSeeder extends Seeder
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
        $god->name  = 'Chauntea';
        $god->level = 'Intermediate';
        $god->save();
        $god->pantheons()->save(app()->pantheons['Faeruneon'], [
            'name'           => $god->name,
            'aliases'        => 'Earthmother (Mooonshae), Jannath (Netheril), Pahluruk (Great Glacier)',
            'title'          => 'The Great Mother, the Grain Goddess, Earthmother',
            'level'          => 'Intermediate',
            'portfolio'      => 'Agriculture, Plants cultivated by humans, Farmers, gardeners, Summer, Spirits of Nature',
            'alignment'      => 'NG',
            'symbol'         => 'Sheaf of grain or a blooming rose over grain',
            'regions'        => 'Aglarond, Amn, Cormyr, Dalelands, the Moonshaes, Rashemen, Tashalar, Thesk, the Vast',
            'favored_weapon' => 'A shock of grain (Scythe)',
            'master_id'      => God::where('name', 'Silvanus')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons["Yondalla's Children"], [
            'name'           => 'Sheela Peryroyl',
            'title'          => 'Green Sister, Watchful Mother',
            'level'          => 'Lesser',
            'portfolio'      => 'Nature, Agriculture, Weather, Song, Dance, Beauty, Romantic Love',
            'alignment'      => 'NG',
            'symbol'         => 'Daisy',
            'favored_weapon' => 'Oakthorn (Sickle)',
            'master_id'      => God::where('name', 'Yondalla')->first()->id,
        ]);
        $god->pantheons()->save(app()->pantheons['The Ordning'], [
            'name'      => 'Othea',
            'aliases'   => 'Deronain (Auld Dwarvish), Sonnhild (ancient Thorass)',
            'title'     => '',
            'level'     => 'Dead',
            'portfolio' => 'Mother of Giants',
            'alignment' => 'N',
            'master_id' => God::where('name', 'Annam')->first()->id,
        ]);

        $helper->addClassesToGod($god, 'Faeruneon', [
            'Spirit Shaman' => 25,
            'Druid'         => 20,
        ]);
        $helper->addWorshipClassesToGod($god, 'Faeruneon', [
            'Druid', 'Spirit Shaman',
        ]);
        $helper->addClassesToGod($god, "Yondalla's Children", [
            'Druid'         => 20,
            'Spirit Shaman' => 5,
        ]);
        $helper->addWorshipClassesToGod($god, "Yondalla's Children", [
            'Druid', 'Ranger',
        ]);

        $helper->addPietyToGod($god, [
            'pantheon_id' => app()->pantheons['Faeruneon']->id,
            'favor'       => "<p>Chauntea's favor is oft given to those who take care of their communites and provide for those around them. Chauntea prizes not only bravery, but selflessness and collective responsibility.</p>
<p>Chauntea’s scions tend to have large hearts and empty pockets as they look out for the needs of their team members.</p>
<ol>
    <li>You saved a village from famine</li>
    <li>You have a green thumb</li>
    <li>You took in a stranger from the rain and invited them to dine with you. It was the goddess in disguise</li>
    <li>You always tithe some of your harvest to the goddess</li>
    <li>You are the secular leader of a town or village</li>
    <li>You were found abandoned in a field as a baby</li>
</ol>",
            'devotion' => '<p>Following Chauntea means dedicating yourself to plenty and community. As a follower of Chauntea, consider the ideals below as alternatives to those suggested for your background.</p>
<dl>
    <dt>Devotion</dt> <dd>My devotion to my god is more important to me than what they stand for. (Any)</dd>
    <dt>Community</dt> <dd>We have a responsibility to those around us</dd>
    <dt>Humility</dt> <dd>We all rely on the earth for food. We must respect it, and give thanks for what it offers</dd>
    <dt>Generosity</dt> <dd>True hospitality never turns away a stranger in need</dd>
    <dt>Bounty</dt> <dd>If we work together, we will have enough for everyone to share</dd>
    <dt>Stewardship</dt> <dd>The land is on loan to us from the gods. We must not abuse this trust</dd>
</dl>',
            'earn_piety' => [
                'Encouraging a community spirit in face of adversity',
                'Providing hospitality to strangers',
                'Feeding anyone at your table',
            ],
            'lose_piety' => [
                'Showing unkindness and hostility to strangers',
                'Selfishly hoarding resources',
                'Poisoning or desecrating the land',
            ],
            'piety3' => '<h4>Favored God: Chauntea</h4>
<p>You gain Inspiration when you cook a meal or provide rations for strangers</p>',
            'piety10' => '<h4>Flexible Recipe</h4>
<p>Choose a recipe you know. No matter the circumstances, you can always find the ingredients (or a close proxy) for that recipe somewhere nearby. This extends to potions and alchemy</p>',
            'piety25' => '<h4>THe Earth Sustains me</h4>
<p>You can endure indefinitely without food or water if necessary</p>',
            'piety50' => '<h4>Chosen of Chauntea</h4>
<p>You can spend an Inspiration to cast Plant Growth with this trait. Once you cast the spell in this way, you can\'t do so again until you finish a lOng Rest. WIS is your spellcasting ability for this spell</p>',
        ]);
    }
}
