<?php

namespace Database\Seeders\Rules;

use App\Models\Page;
use App\Models\Rule;
use Illuminate\Database\Seeder;

class DiseasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page              = new Page;
        $page->name        = 'Diseases';
        $page->description = '';
        $page->order       = 100;
        $page->save();

        $rule              = new Rule;
        $rule->key         = 'list-of-diseases';
        $rule->name        = 'List of Diseases';
        $rule->description = '<table>
    <thead>
        <tr>
            <th>Disease</th>
            <th>Type</th>
            <th>DC</th>
            <th>Incubation</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Goblin Pox</td>
            <th>Injury, Spell (1)</th>
            <td>11</td>
            <td>1 round</td>
        </tr>
        <tr>
            <td>Bog Rot</td>
            <td>Injury, Spell (2)</td>
            <td>12</td>
            <td>1 day</td>
        </tr>
        <tr>
            <td>Fly Pox</td>
            <td>Injury, Spell (2)</td>
            <td>14</td>
            <td>1 day</td>
        </tr>
        <tr>
            <td>Scarlet Fever</td>
            <td>Injury, Spell (2)</td>
            <td>12</td>
            <td>2 days</td>
        </tr>
        <tr>
            <td>Tetanus</td>
            <td>Injury, Spell (2)</td>
            <td>13</td>
            <td>10 days</td>
        </tr>
        <td>
            <td>Tuberculosis</td>
            <td>Contact, Spell (2)</td>
            <td>14</td>
            <td>1 week</td>
        </td>
        <tr>
            <td>Malaria</td>
            <td>Contact, Spell (3)</td>
            <td>15</td>
            <td>10 days</td>
        </tr>
        <tr>
            <td>Bubonic Plague</td>
            <td>Contact, Spell (4)</td>
            <td>16</td>
            <td>1 day</td>
        </tr>
        <tr>
            <td>Bonechill</td>
            <td>Injury, Spell (4)</td>
            <td>19</td>
            <td>1 day</td>
        </tr>
        <tr>
            <td>Swamp Guts</td>
            <td>Contact, Spell (5)</td>
            <td>21</td>
            <td>1 hour</td>
        </tr>
        <tr>
            <td>Blinding Sickness</td>
            <td>Ingested, Spell (5)</td>
            <td>16</td>
            <td>1D3 days</td>
        </tr>
        <tr>
            <td>Filth Fever</td>
            <td>Injury, Spell (5)</td>
            <td>14</td>
            <td>1D3 days</td>
        </tr>
        <tr>
            <td>Flesh Rot (Leprosy)</td>
            <td>Contact, Inhaled, Injury, Spell (5)</td>
            <td>15</td>
            <td>2D4 weeks</td>
        </tr>
        <tr>
            <td>Mindfire</td>
            <td>Inhaled, Spell (5)</td>
            <td>14</td>
            <td>1 day</td>
        </tr>
        <tr>
            <td>Seizure</td>
            <td>Spell (5)</td>
            <td>14</td>
            <td>3 rounds</td>
        </tr>
        <tr>
            <td>Slimy Doom</td>
            <td>Contact, Spell (5)</td>
            <td>15</td>
            <td>1 day</td>
        </tr>
        <tr>
            <td>Abyssal Plague</td>
            <td>Spell (6)</td>
            <td> - </td>
            <td>1 day</td>
        </tr>
        <tr>
            <td>Cackle Fever</td>
            <td>Inhaled, Spell (6)</td>
            <td>16</td>
            <td>1 day</td>
        </tr>
        <tr>
            <td>Ghoul Fever</td>
            <td>Injury</td>
            <td>13</td>
            <td>1 day</td>
        </tr>
    </tbody>
</table>';
        $rule->order = 10;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'goblin-pox';
        $rule->name        = 'Goblin Pox';
        $rule->description = "<p>Goblins, and all canines are immune to this disease</p>
<dl>
    <dt>Spell Slot</dt> <dd>1</dd>
    <dt>CON Save DC</dt> <dd>11</dd>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>Sickened 1 (1 round)</dd>
    <dt>Stage 2</dt> <dd>Sickened 1 Hampered 5 (1 round)</dd>
    <dt>Stage 3</dt> <dd>Sickened 1 and can't reduce its Sick value below 1 (1 day)</dd>
</dl>";
        $rule->order = 10;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'bog-rot';
        $rule->name        = 'Bog Rot';
        $rule->description = '<p>Sometimes called bog foot, bog rot is caused by having waterlogged feet for an extended period of time. In addition to the usual cures for an affliction, bog rot can be cured through amputation of the affected appendages.</p>
<dl>
    <dt>Spell Slot</dt> <dd>2</dd>
    <dt>CON Save DC</dt> <dd>13</dd>
    <dt>Stage 1</dt> <dd>Clumsy 1 (1 day)</dd>
    <dt>Stage 2</dt> <dd>Clumsy 1 and Hampered 5 (1 day)</dd>
    <dt>Stage 3</dt> <dd>Clumsy 3 and Hampered 10 (1 day)</dd>
    <dt>Stage 4</dt> <dd>Infected leg is dead. Sick 5 (3 days)</dd>
    <dt>Stage 5</dt> <dd>Infection spreads to torso. Sick 10 (1 week)</dd>
    <dt>Stage 6</dt> <dd>Death</dd>
</dl>';
        $rule->order = 20;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'fly-pox';
        $rule->name        = 'Fly Pox';
        $rule->description = '<p>A giant fly can carry any disease, but most transmit a virulent but not fatal infection called Fly Pox with their bite.</p>
<dl>
    <dt>Spell Slot</dt> <dd>2</dd>
    <dt>CON Save DC</dt> <dd>16</dd>
    <dt>Stage 1</dt> <dd>Enfeebled 1 (1 day)</dd>
    <dt>Stage 2</dt> <dd>As Stage 1 (1 day)</dd>
    <dt>Stage 3</dt> <dd>Enfeebled 2 (1 day)</dd>
    <dt>Stage 4</dt> <dd>As Stage 3 (1 day)</dd>
    <dt>Stage 5</dt> <dd>Enfeebled 2 and Fatigued (1 day)</dd>
</dl>';
        $rule->order = 30;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'scarlet-fever';
        $rule->name        = 'Scarlet Fever';
        $rule->description = "<p>The relatively simple sore throat caused by this disease leads many victims to initially dismiss it as a mild illness, but scarlet fever can be deadly if left untreated. You can't reduce your Sickened condition while affected with Scarlet Fever.</p>
<dl>
    <dt>Spell SLot</dt> <dd>2</dd>
    <dt>CON Save DC</dt> <dd>13</dd>
    <dt>Stage 1</dt> <dd>Sickened 1 (1 day)</dd>
    <dt>Stage 2</dt> <dd>Sickened 2 (1 day)</dd>
    <dt>Stage 3</dt> <dd>Sickened 3 and can't speak (1 day)</dd>
    <dt>Stage 4</dt> <dd>Death</dd>
</dl>";
        $rule->order = 40;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'tetanus';
        $rule->name        = 'Tetanus';
        $rule->description = "<p>An infection introduced through open wounds, tetanus can produce stiffness, muscle spasms strong enough to break bones, and ultimately death.</p>
<dl>
    <dt>Spell Slot</dt> <dd>2</dd>
    <dt>CON Save DC</dt> <dd>14</dd>
    <dt>Stage 1</dt> <dd>Clumsy 1 (1 week)</dd>
    <dt>Stage 2</dt> <dd>Clumsy 2 and can't speak (1 day)</dd>
    <dt>stage 3</dt> <dd>Paralyzed with spasms (1 day)</dd>
    <dt>Stage 4</dt> <dd>Death</dd>
</dl>";
        $rule->order = 50;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'tuberculosis';
        $rule->name        = 'Tuberculosis';
        $rule->description = "<p>An extended respiratory disease, tuberculosis can pose particular challenges to spellcasters and some performers due to the intense coughing fits it produces.</p>
<dl>
    <dt>Spell Slot</dt> <dd>2</dd>
    <dt>CON Save DC</dt> <dd>14</dd>
    <dt>Stage 1</dt> <dd>Carrier with no effects (1 week)</dd>
    <dt>Stage 2</dt> <dd>Coughing requires a flat DC 7 check to cast a spell with a Verbal Component</dd>
    <dt>Stage 3</dt> <dd>Fatigued, can't recover from the Fatigued condition, coughing requires a DC 14 check to cast a spell with a Verbal Component or Activate an item with a Command Component. (1 week)</dd>
    <dt>Stage 4</dt> <dd>Unconscious (1 week)</dd>
    <dt>Stage 5</dt> <dd>Death</dd>
</dl>";
        $rule->order = 60;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'malaria';
        $rule->name        = 'Malaria';
        $rule->description = "<p>A pernicious disease spread by bloodsucking insects, malaria sometimes enters long periods of dormancy. If you succumb to malaria, you may continue to be periodically affected by the disease, even if you're cured. You can't reduce your Sickened condition while affected with malaria.</p>
<dl>
    <dt>Spell Slot</dt> <dd>3</dd>
    <dt>Spell Slot</dt> <dd>3</dd>
    <dt>CON Save DC</dt> <dd>15</dd>
    <dt>Stage 1</dt> <dd>Sickened 1 (1 day)</dd>
    <dt>Stage 2</dt> <dd>Sickened 2 (1 day)</dd>
    <dt>Stage 3</dt> <dd>Sickened 3 and disease recurs every 1D4 months even if cured (1 day)</dd>
    <dt>Stage 4</dt> <dd>Unconscious (1 day)</dd>
    <dt>Stage 5</dt> <dd>Death</dd>
</dl>";
        $rule->order = 70;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'bubonic-plague';
        $rule->name        = 'Bubonic Plague';
        $rule->description = "<p>This widespread illness can sweep through entire communities, leaving few unaffected. The first indication of the disease is a telltale swelling of glands. In some cases , the disease can move into your lungs (pneumonic plague) or blood (septicemic plague), which is even more fatal. If you have bubonic plague, you can't remove the Fatigued condition while affected.</p>
<dl>
    <dt>Spell Slot</dt> <dd>4</dd>
    <dt>CON Save DC</dt> <dd>16</dd>
    <dt>Stage 1</dt> <dd>Fatigued (1 day)</dd>
    <dt>Stage 2</dt> <dd>Enfeebled 2 and Fatigued (1 day)</dd>
    <dt>Stage 3</dt> <dd>Enfeebled 3 (1 day)</dd>
</dl>";
        $rule->order = 80;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'ghoul-fever';
        $rule->name        = 'Ghoul Fever';
        $rule->description = '<dl>
    <dt>CON Save DC</dt> <dd>12</dd>
    <dt>Stage 1</dt> <dd>Carrier with no ill effects (1 day)</dd>
    <dt>Stage 2</dt> <dd>3D8 damage and regains half as many Hit Points from all healing (1 day)</dd>
    <dt>Stage 3</dt> <dd>As Stage 2 (1 day)</dd>
    <dt>Stage 4</dt> <dd>3D8 damage and gains no benefit from healing (1 day)</dd>
    <dt>Stage 5</dt> <dd>As Stage 4 (1 day)</dd>
    <dt>Stage 6</dt> <dd>Dead, and rises as a ghoul at the next midnight</dd>
</dl>';
        $rule->order = 90;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'bonechill';
        $rule->name        = 'Bonechill';
        $rule->description = "<p>If you are wounded and exposed to persistent cold, you might contract Bonechill.</p>
<dl>
    <dt>Spell Slot</dt> <dd>4</dd>
    <dt>CON Save DC</dt> <dd>19</dd>
    <dt>Onset</dt> <dd>1 day</dd>
    <dt>Stage 1</dt> <dd>Clumsy 1 (1 day)</dd>
    <dt>Stage 2</dt> <dd>Clumsy 2 and can't heal Cold damage until the Disease is cured (1 day)</dd>
    <dt>Stage 3</dt> <dd>Clumsy 3 and all Cold temperature effects are one step more severe for the victim (1 day)</dd>
    <dt>Stage 4</dt> <dd>Paralyzed and all Cold temperature effects are one step more severe for the victim (1 day)</dd>
</dl>";
        $rule->order = 100;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'swamp-guts';
        $rule->name        = 'Swamp Guts';
        $rule->description = '<p>Exposure to the swampy sewage produces extreme nausea and weakness for several days</p>
<dl>
    <dt>Spell Slot</dt> <dd>4</dd>
    <dt>CON Save DC</dt> <dd>21</dd>
    <dt>Onset</dt> <dd>1 hour</dd>
    <dt>Stage 1</dt> <dd>Sickened 1 (1 day)</dd>
    <dt>Stage 2</dt> <dd>Enfeebled 1 and Fatigued (1 day)</dd>
    <dt>Stage 3</dt> <dd>Enfeebled 2 and Fatigued (1 day)</dd>
    <dt>Stage 4</dt> <dd>Enfeebled 4 and Fatigued (1 day)</dd>
</dl>';
        $rule->order = 110;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'blinding-sickness';
        $rule->name        = 'Blinding Sickness';
        $rule->description = "<p>Pain grips the target's mind, and its eyes turn milky white. Endemic to jungles, this disease is transmitted by dirty water or the bite of certain creatures.</p>
<dl>
    <dt>Spell Slot</dt> <dd>5</dd>
    <dt>Onset</dt> <dd>1D3 days</dd>
    <dt>CON Save DC</dt> <dd>16</dd>
    <dt>Stage 1</dt> <dd>Carrier with no effects (1 day)</dd>
    <dt>Stage 2</dt> <dd>Enfeebled 1 (1 day)</dd>
    <dt>Stage 3</dt> <dd>Enfeebled 2 (1 day)</dd>
    <dt>Stage 4</dt> <dd>Enfeebled 3 and Permanently Blinded (1 day)</dd>
    <dt>Stage 5</dt> <dd>Enfeebled 4 (1 day)</dd>
    <dt>Stage 6</dt> <dd>Unconscious</dd>
    <dt>Stage 7</dt> <dd>Death</dd>
</dl>";
        $rule->order = 110;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'filth-fever';
        $rule->name        = 'Filth Fever';
        $rule->description = "<p>A raging fever sweeps through the target's body.</p>
<dl>
    <dt>Spell Slot</dt> <dd>5</dd>
    <dt>CON Save DC</dt> <dd>12</dd>
    <dt>Stage 1</dt> <dd>Sick 1 (1 round)</dd>
    <dt>Stage 2</dt> <dd>Enfeebled 4 (1 round)</dd>
    <dt>Stage 3</dt> <dd>Enfeebled 8</dd>
</dl>";
        $rule->order = 120;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'flesh-rot';
        $rule->name        = 'Flesh Rot';
        $rule->description = "<p>The target's flesh decays</p>
<dl>
    <dt>Spell Slot</dt> <dd>5</dd>
    <dt>CON Save DC</dt> <dd>13</dd>
    <dt>Stage 1</dt> <dd>Sick 1 (1 round)</dd>
    <dt>Stage 2</dt> <dd>4 CHA Drain (1 round)</dd>
    <dt>Stage 3</dt> <dd>8 CHA Drain</dd>
</dl>";
        $rule->order = 130;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'mindfire';
        $rule->name        = 'Mindfire';
        $rule->description = "<p>The target's mind becomes feverish</p>
<dl>
    <dt>Spell Slot</dt> <dd>5</dd>
    <dt>CON Save DC</dt> <dd>13</dd>
    <dt>Onset</dt> <dd>1 day</dd>
    <dt>Stage 1</dt> <dd>Sick 1 (1 round)</dd>
    <dt>Stage 2</dt> <dd>4 INT Drain (1 round)</dd>
    <dt>Stage 3</dt> <dd>8 INT Drain</dd>
</dl>";
        $rule->order = 140;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'seizure';
        $rule->name        = 'Seizure';
        $rule->description = '<p>The target is overcome with shaking</p>
<dl>
    <dt>Spell Slot</dt> <dd>5</dd>
    <dt>CON Save DC</dt> <dd>13</dd>
    <dt>Onset</dt> <dd>3 rounds</dd>
    <dt>Stage 1</dt> <dd>Sickened 1 (1 round)</dd>
    <dt>Stage 2</dt> <dd>Dizzy 4 (1 round)</dd>
    <dt>Stage 3</dt> <dd>Dizzy 8</dd>
</dl>';
        $rule->order = 150;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'slimy-doom';
        $rule->name        = 'Slimy Doom';
        $rule->description = '<p>The target begins to bleed uncontrollably</p>
<dl>
    <dt>CON Save DC</dt> <dd>14</dd>
    <dt>Stage 1</dt> <dd>Sick 1 (1 round)</dd>
    <dt>Stage 2</dt> <dd>Disadvantage on CON checks and Saves</dd>
    <dt>Stage 3</dt> <dd>As Stage 2 and whenever the victim takes damage, it is Stunned until the end of its next turn</dd>
</dl>';
        $rule->order = 160;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'abyssal-plague';
        $rule->name        = 'Abyssal Plague';
        $rule->description = '<p>This disease drains the victims soul. When the victim dies, their soul is pulled into the Abyss to form a new Larva.</p>
<dl>
    <dt>CON Save DC</dt> <dd>18</dd>
    <dt>Onset</dt> <dd>1 round</dd>
    <dt>Stage 1</dt> <dd>Drained 1 (1 day)</dd>
    <dt>Stage 2</dt> <dd>Drained increases by 2 (1 day)</dd>
</dl>';
        $rule->order = 170;
        $page->rules()->save($rule);

        $rule              = new Rule;
        $rule->key         = 'cackle-fever';
        $rule->name        = 'Cackle Fever';
        $rule->description = '<dl>
    <dt>Cackle Fever</dt> <dd>
        <ul>
            <li>CON Save DC 16</li>
            <li><strong>Stage 1</strong> 1 WIS drain (1 day)</li>
            <li><strong>Stage 2</strong> 2 WIS drain (1 day)</li>
            <li><strong>Stage 3</strong> 1D6 +1 WIS drain</li>
        </ul>
    </dd>
</dl>';
        $rule->order = 180;
        $page->rules()->save($rule);
    }
}
