<?php

namespace Database\Seeders\Rules;

use App\Models\Page;
use App\Models\Rule;
use Illuminate\Database\Seeder;

class AdvancementPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page              = new Page;
        $page->name        = 'Advancement and Options';
        $page->order       = 1;
        $page->description = '<p>Some rules and character options are shared by more than one class in the game. Often these are concepts that fit with the theme of multiple classes or are universal to the world, open to all you have the time and dedication to pursue them.</p>
<p>This chapter provides details and rules for these game options. Some of these rules can be chosen freely by any character that qualifies, while others are only accessed through a class feature or feat.</p>';
        $page->save();

        $rule              = new Rule;
        $rule->key         = 'leveling';
        $rule->name        = 'Leveling Up';
        $rule->description = '
<table>
    <thead>
        <tr>
            <th>Experience Points</th>
            <th>Level</th>
            <th>Proficiency Bonus</th>
            <th>Feats</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0</td>
            <td>1</td>
            <td>+0</td>
            <td>Ancestry Feat</td>
        </tr>
        <tr>
            <td>300</td>
            <td>2</td>
            <td>+1</td>
            <td>Generic Feat</td>
        </tr>
        <tr>
            <td>900</td>
            <td>3</td>
            <td>+1</td>
            <td>Ancestry Feat</td>
        </tr>
        <tr>
            <td>2,700</td>
            <td>4</td>
            <td>+2</td>
            <td></td>
        </tr>
        <tr>
            <td>6,500</td>
            <td>5</td>
            <td>+2</td>
            <td>Generic Feat</td>
        </tr>
        <tr>
            <td>14,000</td>
            <td>6</td>
            <td>+3</td>
            <td>Ancestry Feat</td>
        </tr>
        <tr>
            <td>23,00</td>
            <td>7</td>
            <td>+3</td>
            <td></td>
        </tr>
        <tr>
            <td>34,000</td>
            <td>8</td>
            <td>+3</td>
            <td>Generic Feat</td>
        </tr>
        <tr>
            <td>48,000</td>
            <td>9</td>
            <td>+4</td>
            <td>Ancestry Feat</td>
        </tr>
        <tr>
            <td>64,000</td>
            <td>10</td>
            <td>+4</td>
            <td></td>
        </tr>
        <tr>
            <td>85,000</td>
            <td>11</td>
            <td>+4</td>
            <td>Generic Feat</td>
        </tr>
        <tr>
            <td>100,000</td>
            <td>12</td>
            <td>+4</td>
            <td></td>
        </tr>
        <tr>
            <td>120,000</td>
            <td>13</td>
            <td>+5</td>
            <td></td>
        </tr>
        <tr>
            <td>140,000</td>
            <td>14</td>
            <td>+5</td>
            <td>Generic Feat</td>
        </tr>
        <tr>
            <td>165,000</td>
            <td>15</td>
            <td>+5</td>
            <td></td>
        </tr>
        <tr>
            <td>195,000</td>
            <td>16</td>
            <td>+5</td>
            <td></td>
        </tr>
        <tr>
            <td>225,000</td>
            <td>17</td>
            <td>+6</td>
            <td>Generic Feat</td>
        </tr>
        <tr>
            <td>265,000</td>
            <td>18</td>
            <td>+6</td>
            <td></td>
        </tr>
        <tr>
            <td>305,000</td>
            <td>19</td>
            <td>+6</td>
            <td></td>
        </tr>
        <tr>
            <td>355,000</td>
            <td>20</td>
            <td>+6</td>
            <td></td>
        </tr>
    </tbody>
</table>';
        $rule->order = 1;
        $page->rules()->save($rule);
    }
}
