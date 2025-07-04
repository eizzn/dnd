<?php

namespace Database\Seeders\Organizations;

use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $org        = new Organization;
        $org->key   = 'cult-of-the-dragon';
        $org->name  = 'The Cult of the Dragon';
        $org->type  = '';
        $org->metas = '<dl>
    <dt>Aliases</dt> <dd>Wearers of Purple, Keepers of the Secret Hoard, Followers of the Scaly Way</dd>
</dl>';
        $org->description = "<p>The Cult of the Dragon, also known as Keepers of the Secret Hoard or, as of around 1370 DR, Wearers of Purple, is a semi-religious evil organization that venerate undead dragons, or dracoliches, founded by Sammaster, a powerful wizard and former Chosen of Mystra. Sammaster suffered from delusions of godhood and madness, and he came to believe in time that dead dragons shall rule the world, and began to work toward that goal. While Sammaster has died, risen as a lich, and fallen again, his cult lives on, and continues to threaten the Western Heartlands.</p>
<p>The cult venerates dragons, evil dragons in particular, and specifically dead evil dragons. They reanimate the gargantuan corpses as powerful dracoliches. The cult acts as an information network for its draconian masters, bring riches as offerings, and encourage evil dragons to become dracoliches. Their belief is that dracoliches are destined to one day rule Faerun and beyond.</p>
<p>The cult's main activities are to gather intelligence for the evil dragons of Faerun, contribute treasure for their hordes, and aid them in any way possible, in an attempt to gain the cooperation of dragons. They can also prepare these evil dragons to transform into dracoliches, and guard dragon lairs. In exchange, the members of the cult asks for permission to use the dragon's lairs for shelter, and ask for help from the dragons if they are ever called upon.</p>
<p>The cult is active throughout the Realms, but is especially powerful in the Cold Lands and the North, where dragons are particularly abundant. Senior members of the cult are given the secret to creating dracoliches and each also possess a Ring of Dragons.</p>
<p>The cult is not against legitimate commercial activities, and as such it has several merchant members who use their well-earned money to fund cult projects.</p>
<p>Originally, the Cult of the Dragon lacked any formal headquarters or strong leadership, which caused the organisation to be disjointed and often in conflict with itself.</p>
<p>Although Sammaster was killed in 916 DR during an ambush by the Harpers and clergy of Lathander, Algashon Nathaire led the organization underground, and Sammaster gained lichdom, having prepared for the event of his death.</p>
<p>By around 1370 DR, the cult had spread widely, and its own tenets had diverged, leading to members in different areas having different ideas of the Cult's formation and ultimate destiny.</p>
<p>After Sammaster's destruction in the late 14th century DR, the cult had no true leader, although, as of the Year of the Ageless One, 1479 DR, it revered Anabraxis the Black Talon as its ultimate authority. The cult was organized into semi-autonomous cells, each led by one or more Wearers of Purple.</p>
<p>It was during this leaderless period that a cultist named Severin Silrajin came to prominence. Guided by Tiamat, he decided that the Chronicles of Years to Come had been mistranslated by Sammaster, and predicted that the world would be ruled not by dead dragons, but by living ones. He quickly rose through the cult's ranks until he became its leader, at which point he refocused the cult's efforts to summoning Tiamat into Faerun. This plot nearly succeeded, but following its failure, the Cult fractured between those who wished to return to their old mandate to honor undead dragons and those who wished to pursue the new philosophy.</p>
<h3>Known Cells</h3>
<ul>
    <li><strong>Marsember</strong> The cult has a following in the Shou enclave of Xiousing in Marsember during the late 15th century DR. The Shou traditionally venerated dragons and the cult found they could operate more openly among the Shou than among other cultures.</li>
    <li>
        <p><strong>Mourktar</strong> One of the longest operating cells of the cult, this group acts as pioneers in the field of magical research related to dragons and undeath. They have achieved great success in persuading the dragon Alasklerbanbastos to undergo the transformation to dracolichdom, and the Great Bone Wyrm is now the cell's leader, having their main base of operation in his lair in Mount Thulbane and leaving a small cell in Mourktar.</p>
        <p>This cell has a dogmatic reputation within the cult as a whole, due to their devotion to Bane, strong ties to the Bane church and it's emphasis on the teachings of Algashon Nathaire over those of Sammaster. The cell has however remained united in its hatred of Tchazzar and his followers.</p>
    </li>
    <li><strong>Murghom</strong> In the late 15th century DR the cult begins operating openly in the dragon dominated realm of Murghom. The cult owned a building in the city of Skalnaedyr known as Dragon House and maintained a fortress on the edge of the Plains of Purple Dust known as the Tower of the Talon.</li>
    <li><strong>Neverwinter</strong> In 1479 DR, a cult cell led by Adimond Kroskas, working in conjunction with Thayan agents of Valindra Shadowmantle in Neverwinter Wood, searching for a way to restore the dragon Lorragauth to unlife.</li>
    <li>
        <p><strong>Sembia</strong> As of 1368 DR, the commander of the guard in Daerlun, Sembia, is in control of the city through manipulation of the elderly merchant and official ruler Halath Tymmyr. The organization used Daerlun as an arms store and to heal wounded members, preferring to keep activities low-key.</p>
        <p>By the 1370's DR the senior leaders of the Sembian cell were the Wearers of Purple Salvarad, Zannaster, Zilvreen and Faerlaur Onthim along with seven or so well-to-do merchants and a senior member of the Silver Ravens. The cell is strongly allied with the dracoliches Aurgloroasa and Dretchroyaster, and maintained a loose associated with a few others. The Sembians maintain a strong influence over the Dragonwell cell.</p>
        <p>The Sembian cell is in a constant resource war with the Zhentarim and repeatedly come into conflict with the church of Tiamat during their efforts to convert the dragons of the Thunder Peaks to undeath. They are even a check on the growing threat of the Shadovar.</p>
    </li>
    <li>
        <p><storng>Sunset Mountains</storng> This cult cell is housed in a citadel in the Sunset Mountains, near the Well of Dragons, the legendary site that served as a graveyard to dragons in Faerun for ages. Their influence stretches from the Serpent Hills in the south to the southern border of the Anauroch, and even to Evereska.</p>
        <p>In the late 14th century the Dragonwell cell is led by Naergoth Bladelord, a former member of the Sembian cell. In fact the group in the Senset mountains maintain close relations with their sister cell, and is full of its expatriated members. They have on allied dragon, Arsekaslyx, who has served as their guardian for over a century.</p>
        <p>As of the late 15th century DR some old dragons continue to make pilgrimages to the site to achieve immortality through dracolichdom.</p>
    </li>
    <li><strong>Tymanther</strong> In the late 15th century DR, a secret cell of the cult begins to operate in Djerad Thymar, the capital of Tymanther. The cult maintains its membership and beliefs secret, but has a public face called the Abeir Academy that welcomed dragonborn who have had hard times and are looking for a new start, as a way to cultivate potential new members.</li>
    <li>
        <p><strong>Wyrmsmoke</strong> Located in the Galena Mountains, the cult cell that operates form Wyrmsmoke Keep extend their influence over the dragons of Thar and the eastern Moonsea. They often seek out dragons to disrupt the trade lines of the Zhentarim, though they can not sustain open opposition. The Wyrmsmoke cell has lost all their dracoliches, and many of the draconic allies in 1373 DR, largely at the hands of the Talons of Justice.</p>
        <p>The cell is led by a council of six Wearers of Purple mostly from the Moonsea region.</p>
        <ul>
            <li>Kaela Ulsant</li>
            <li>Crenshyl Khodoil</li>
            <li>Delphaeryn Leiyraghon</li>
            <li>Orinskar of Thar</li>
            <li>Theldar Hammerfist</li>
            <li>Dalgar</li>
        </ul>
        <p>Their garrison of forces includes three tribes of dragonkin, a tribe of draconic orcs and their fire drake mounts.</p>
    </li>
</ul>";
        $org->save();

        $org              = new Organization;
        $org->key         = 'harpers';
        $org->name        = 'The Harpers';
        $org->type        = '';
        $org->description = '';
        $org->save();

        $org              = new Organization;
        $org->key         = 'red-wizards-of-thay';
        $org->name        = 'The Red Wizards of Thay';
        $org->type        = '';
        $org->description = '';
        $org->save();

        $org              = new Organization;
        $org->key         = 'zhentarim';
        $org->name        = 'The Zhentarim';
        $org->type        = '';
        $org->description = '';
        $org->save();
    }
}
