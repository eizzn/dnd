<?php

namespace Database\Seeders\Templates;

use App\Models\Template;
use App\Services\SeedHelper;
use Illuminate\Database\Seeder;

class TemplatesSeeder extends Seeder
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

        $this->call(OutsiderTemplatesSeeder::class);

        $temp              = new Template;
        $temp->name        = 'Telthor';
        $temp->description = 'Beings that die in defense of nature sometimes leave behind a spiritual echo, a ghostly version of themselves to continue their work.';
        $temp->details     = "<p>These spirits might resemble beings who lived, but they are more akin to nature using a bit of fey magic to honor their sacrifice. These spirits actually have no memories held by the once- living creature they resemble.</p>
<p>A telthor cannot travel further than 1 mile away from the location where the living creature it is echoing died.</p>
<dl>
    <dt>Challenge Rating</dt> <dd>The Challenge Rating of the creature is unchanged</dd>
    <dt>Ability Scores</dt> <dd> Telthors have a minimum of 12 Dexterity and Charisma. If the base creature has lower than 12 in these ability scores, increase their Dexterity and Charisma to 12. Creatures with greater than 12 Dexterity and Charisma retain their original ability scores.</dd>
    <dt>Armor Class</dt> <dd>The Telthor's Armor Class becomes 10 + their Charisma modifier + their Dexterity modifier.</dd>
    <dt>Hit Points</dt> <dd>The Telthor's Hit Points become the maximum possible value.</dd>
    <dt>Languages</dt> <dd>Telthors can communicate telepathically with other creatures, to a range of 120 feet.</dd>
    <dt>Resistance</dt> <dd>
        The telthor has Resistance to the following.
        <ul>
            <li>Bludgeoning</li>
            <li>Piercing</li>
            <li>Slashing</li>
            <li>Acid</li>
            <li>Fire</li>
            <li>Electricity</li>
            <li>Sonic</li>
        </ul>
    </dd>
    <dt>Immunity</dt> <dd>
        The telthor has Immunity to the following
        <ul>
            <li>Cold</li>
            <li>Negative</li>
            <li>Poison</li>
            <li>Charmed</li>
            <li>Exhaustion</li>
            <li>Frightened</li>
            <li>Grappled</li>
            <li>Paralyzed</li>
            <li>Petrified</li>
            <li>Sickened</li>
            <li>Prone</li>
            <li>Restrained</li>
        </ul>
    </dd>
    <dt>Type</dt> <dd>The telthor's type becomes Spirit</dd>
</dl>";
        $helper->addTypesToSimpleObject($temp, ['Spirit']);
    }
}
