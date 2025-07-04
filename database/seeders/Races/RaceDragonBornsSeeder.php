<?php

namespace Database\Seeders\Races;

use App\Models\Race;
use Illuminate\Database\Seeder;

class RaceDragonBornsSeeder extends Seeder
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
        $race->name        = 'Dragonborn';
        $race->age         = 'Young dragonborn grow quickly. They walk hours after hatching, attain the size and development of a 10-year-old human child by the age of 3, and reach adulthood by 15. They live to be around 80.';
        $race->hit_points  = 10;
        $race->size        = 'Medium';
        $race->speed       = 30;
        $race->description = '';
        $race->benefits    = '<dl>
    <dt>Ability Score Increase</dt> <dd>Your STR score increases by +2 and your CHA score increases by +1</dd>
    <dt>Draconic Ancestry</dt> <dd>
        <p>You have draconic ancestry. Choose one type of dragon. You have a breath weapon and resistancence based on the dragon type.</p>
        <table>
            <thead>
                <tr>
                    <th>Dragon</th>
                    <th>Damage Type</th>
                    <th>Breath Weapon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Black</td>
                    <td>Acid</td>
                    <td>5 by 30 foot line (DEX Save)</td>
                </tr>
                <tr>
                    <td>Blue</td>
                    <td>Electricity</td>
                    <td>5 by 30 foot line (DEX Save)</td>
                </tr>
                <tr>
                    <td>Brass</td>
                    <td>Fire</td>
                    <td>5 by 30 foot line (DEX Save)</td>
                </tr>
                <tr>
                    <td>Copper</td>
                    <td>Acid</td>
                    <td>5 by 30 foot line (DEX Save)</td>
                </tr>
                <tr>
                    <td>Gold</td>
                    <td>Acid</td>
                    <td>15 foot cone (DEX Save)</td>
                </tr>
                <tr>
                    <td>Green</td>
                    <td>Poison</td>
                    <td>15 foot cone (CON Save)</td>
                </tr>
                <tr>
                    <td>Red</td>
                    <td>Acid</td>
                    <td>15 foot Cone (DEX Save)</td>
                </tr>
                <tr>
                    <td>Silver</td>
                    <td>Cold</td>
                    <td>15 foot Cone (CON Save)</td>
                </tr>
                <tr>
                    <td>White</td>
                    <td>Cold</td>
                    <td>15 foot Cone (CON Save)</td>
                </tr>
            </tbody>
        </table>
    </dd>
    <dt>Breath Weapon</dt> <dd>
        <p>You can use an Action to exhale destructive energy. Your draconic ancestry determines the size, shape, and damage type of the exhalation. When you use your breath weapon, each creature in the area of the exhalation must make a Save, the type of which is determined by your draconic ancestry. The DC for this Save equals 8 + your CON modifier + your proficiency bonus, taking half damage on a successful Save. You may use your Breath Weapon once per Long Rest.</p>
        <dl>
            <dt>1st - 5th</dt> <dd>2D6</dd>
            <dt>6th - 10th</dt> <dd>3D6</dd>
            <dt>11th - 15th</dt> <dd>4D6</dd>
            <dt>16th +</dt> <dd>5D6</dd>
        </dl>
    </dd>
</dl>';
        $helper->addTypesToSimpleObject($race, ['Dragon']);
    }
}
