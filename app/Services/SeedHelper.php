<?php

namespace App\Services;

use App\Models\Character;
use App\Models\ClassPowerMeta;
use App\Models\ClassSpellSlot;
use App\Models\Feat;
use App\Models\Feature;
use App\Models\Formula;
use App\Models\God;
use App\Models\GodPiety;
use App\Models\Klass;
use App\Models\Language;
use App\Models\Material;
use App\Models\Monster;
use App\Models\Power;
use App\Models\Spell;
use App\Models\Talent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

/**
 * Class SeedHelper
 */
class SeedHelper
{
    public function saveMonster(Monster $monster, $types, $params): void
    {
        foreach ($params['stats'] as $key => $value) {
            switch ($key) {
                case 0:
                    $monster->str = $value;
                    break;
                case 1:
                    $monster->dex = $value;
                    break;
                case 2:
                    $monster->con = $value;
                    break;
                case 3:
                    $monster->int = $value;
                    break;
                case 4:
                    $monster->wis = $value;
                    break;
                case 5:
                    $monster->cha = $value;
                    break;
                case 6:
                    $monster->cr = $value;
                    break;
                case 7:
                    $monster->proficiency = $value;
                    break;
            }
        }

        if (! is_null($monster->hit_dice)) {
            $monster->proficiency  = $this->getProficiencyBonus($monster->hit_dice, $params);
            $monster->to_hit_melee = $this->calculateToHit($monster->hit_dice, $monster->str, $monster->size, $params);
            $monster->to_hit_range = $this->calculateToHit($monster->hit_dice, $monster->dex, $monster->size, $params);
            if (is_null($monster->hit_points)) {
                $monster->hit_points = $this->calculateHitPoints($monster->hit_dice, $monster->con, $monster->size, $params, $types);
            }
        }
        $this->addTypesToSimpleObject($monster, $types);
        $this->addSaves($monster, $params);
        $this->addSkills($monster, $params);
        $this->addFeatures($monster, $params, 'saveMonster');
        $this->addFeats($monster, $params, 'saveMonster');
        $this->addSpells($monster, $params, 'saveMonster');
        $this->addPowers($monster, $params, 'saveMonster');
        $this->addTalents($monster, $params, 'saveMonster');
        $this->addClasses($monster, $params, 'saveMonster');
        $this->addLanguages($monster, $params, 'saveMonster');
    }

    public function saveFormula(Formula $formula, $types = [], $params = []): void
    {
        if ($formula->type === 'Poison') {
            $formula->bulk = 'L';
        }
        $formula->save();
        $this->addTypesToSimpleObject($formula, $types);
        $this->addFeats($formula, $params, 'saveFormula');
        $this->addSpells($formula, $params, 'saveFormula');
        $this->addSkills($formula, $params);
        $this->addPowers($formula, $params, 'saveFormula');
        $this->addClasses($formula, $params, 'saveFormula');
        $this->addMaterials($formula, $params, 'saveFormula');
        $this->addMonsters($formula, $params, 'saveFormula');
        $this->addFormula($formula, $params, 'saveFormula');
    }

    public function saveClass(Klass $class, $params = [], $saves = [], $types = []): void
    {
        foreach ($params as $key => $value) {
            $class->$key = $value;
        }
        $class->save();
        foreach ($saves as $attr) {
            $class->saves()->save(app()->attributes[$attr]);
        }
        $this->addTypesToSimpleObject($class, $types);
    }

    public function saveFeature($feature, $types = []): void
    {
        $features = app()->features;
        $app      = app();
        $feature->save();
        $features[$feature->key] = $feature;
        $app->features           = $features;
        $this->addTypesToSimpleObject($feature, $types);
    }

    public function addSkillsToClass($class, $skills, $optionalSkills = []): void
    {
        $skills[] = 'Perception';
        $skills[] = 'Crafting';
        foreach ($skills as $skill) {
            $class->skills()->save(app()->skills[$skill]);
        }
        foreach ($optionalSkills as $skill) {
            $class->skills()->save(app()->skills[$skill], [
                'meta' => 'optional',
            ]);
        }
    }

    public function addFeaturesToClass($class, $features): void
    {
        $f = app()->features;
        foreach ($features as $feature => $levels) {
            try {
                foreach ($levels as $level) {
                    $data = [
                        'level' => $level,
                    ];
                    if (is_array($level)) {
                        $idx = 0;
                        foreach ($level as $l) {
                            $data['level'] = $l;
                            $data['idx']   = $idx;
                            $class->features()->save($f[$feature], $data);
                            $idx++;
                        }
                    } else {
                        $class->features()->save($f[$feature], $data);
                    }
                }
            } catch (\Exception $e) {
                // do nothing
                if ($feature !== 'spell_pool') {
                    echo "\taddFeaturesToClass {$class->name}\n";
                    var_dump($e->getMessage());
                }
            }
        }
    }

    public function addChannelDivinityToClass($class, $type, $meta, $level = 2, $idx = 0): void
    {
        try {
            $this->addFeaturesToClass($class, ['spell_pool' => [2]]);
        } catch (\Exception $e) {
            // do nothing
        }

        $class->features()->save(app()->features['channel_divinity'], [
            'level' => $level,
            'meta'  => ucfirst($type) . ': ' . $meta,
            'idx'   => $idx,
        ]);
    }

    public function addDomainToClass($class, $domains, $level = 1): void
    {
        $class->features()->save(app()->features['domain'], [
            'meta'  => implode(', ', $domains),
            'level' => $level,
        ]);
    }

    public function addFeatsToClass($class, $feats): void
    {
        foreach ($feats as $name => $level) {
            $class->feats()->save(app()->feats[$name], ['level' => $level]);
        }
    }

    public function addSpellsToClass($class, $spells): void
    {
        foreach ($spells as $level => $spellNames) {
            foreach ($spellNames as $spellName) {
                if (array_key_exists($spellName, app()->spells)) {
                    try {
                        DB::insert('INSERT INTO spellables (spell_id, spellable_id, spellable_type, level) VALUES (?,?,?,?)', [
                            app()->spells[$spellName],
                            $class->id,
                            get_class($class),
                            $level,
                        ]);
                    } catch (\Exception $e) {
                        // do nothing
                        echo "\taddSpellsToClass {$class->name}\n";
                        var_dump($e->getMessage());
                    }
                }
            }
        }
    }

    public function addPowersToClass($class, $powers): void
    {
        foreach ($powers as $level => $powerNames) {
            foreach ($powerNames as $powerName) {
                if (array_key_exists($powerName, app()->powers)) {
                    try {
                        $class->powers()->save(Power::find(app()->powers[$powerName]), ['level' => $level]);
                    } catch (\Exception $e) {
                        // do nothing
                        echo "\taddPowersToClass {$class->name}\n";
                        var_dump($e->getMessage());
                    }
                }
            }
        }
    }

    public function getClassRequirementsString(array $reqs): string
    {
        $str = "<dl>\n";
        foreach ($reqs as $key => $value) {
            $str .= "\t<dt>$key</dt> <dd>$value</dd>\n";
        }
        $str .= '</dl>';

        return $str;
    }

    public function addTypesToFeat($feat, $types = []): void
    {
        $feat->save();
        $feats              = app()->feats;
        $feats[$feat->name] = $feat;
        $app                = app();
        $app->feats         = $feats;
        $this->addTypesToObject($feat, $types);
    }

    public function addFeatsToTalent($talent, $feats): void
    {
        $talent[] = 'Talent';
        foreach ($feats as $feat) {
            $talent->req_feats()->save(app()->feats[$feat]);
        }
    }

    public function addTypesToSpell($spell, $types, $level = null): void
    {
        if (! is_null($level)) {
            $spell->default_level = $level;
        }
        $spell->save();
        $spells               = app()->spells;
        $spells[$spell->name] = $spell->id;
        $app                  = app();
        $app->spells          = $spells;
        $this->addTypesToObject($spell, $types);
    }

    public function addTypesToPower($power, $types, $level = null): void
    {
        if (! is_null($level)) {
            $power->default_level = $level;
        }
        $power->save();
        $powers               = app()->powers;
        $powers[$power->name] = $power->id;
        $app                  = app();
        $app->powers          = $powers;
        $this->addTypesToObject($power, $types);
    }

    public function addClassesToGod(God $god, $pantheon, $classes): void
    {
        foreach ($classes as $class => $level) {
            $class = Klass::where('name', $class)->firstOrFail();
            if (is_array($level)) {
                $meta = array_merge($level, ['pantheon_id' => app()->pantheons[$pantheon]->id]);
                $god->classes()->save($class, $meta);
            } else {
                $god->classes()->save($class, [
                    'level'       => $level,
                    'pantheon_id' => app()->pantheons[$pantheon]->id,
                ]);
            }
        }
    }

    public function addWorshipClassesToGod(God $god, $pantheon, $classes): void
    {
        foreach ($classes as $key => $class) {
            if (is_numeric($key)) {
                $class = Klass::where('name', $class)->firstOrFail();
                $god->worship_classes()->save($class, [
                    'pantheon_id' => app()->pantheons[$pantheon]->id,
                ]);
            } else {
                $meta  = array_merge($class, ['pantheon_id' => app()->pantheons[$pantheon]->id]);
                $class = Klass::where('name', $key)->firstOrFail();
                $god->worship_classes()->save($class, $meta);
            }
        }
    }

    public function addPietyToGod(God $god, $data): void
    {
        $piety = new GodPiety;
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $tmp = '<ul>';
                foreach ($value as $idx) {
                    $tmp .= "\n\t<li>{$idx}</li>";
                }
                $tmp .= "\n</ul>";
                $value = $tmp;
            }
            $piety->$key = $value;
        }
        $god->piety()->save($piety);
    }

    public function addTypesToSimpleObject($object, $types = []): void
    {
        $object->save();
        $this->addTypesToObject($object, $types);
    }

    public function addPropertiesToSimpleObject($object, $properties = []): void
    {
        $object->save();
        $this->addPropertiesToObject($object, $properties);
    }

    public function addSpellSlotsToClass(Klass $class, array|string $spellSlots = []): void
    {
        /**
         * known            => the total number of non-cantrips that you can know
         * preparable       => the total number of non-cantrips that you can prepare
         * cantrips         => the number of cantrips you can have memorized
         * slots            => for classes that heightens all spells cast to the highest level (number of spells castable)
         * max_slot_level   => for classes that heightens all spells cast to the highest level (level spells are heightened to)
         */
        if (is_string($spellSlots)) {
            $spellSlots = match ($spellSlots) {
                'seven' => [
                    1  => ['cantrips' => 3, 'preparable' => 0, 'zero' => 3],
                    2  => ['cantrips' => 3, 'preparable' => 2, 'zero' => 3, 'one' => 2],
                    3  => ['cantrips' => 3, 'preparable' => 4, 'zero' => 4, 'one' => 3],
                    4  => ['cantrips' => 4, 'preparable' => 6, 'zero' => 4, 'one' => 4, 'two' => 2],
                    5  => ['cantrips' => 4, 'preparable' => 8, 'zero' => 4, 'one' => 4, 'two' => 3],
                    6  => ['cantrips' => 4, 'preparable' => 10, 'zero' => 5, 'one' => 4, 'two' => 3],
                    7  => ['cantrips' => 4, 'preparable' => 11, 'zero' => 5, 'one' => 4, 'two' => 3, 'three' => 2],
                    8  => ['cantrips' => 4, 'preparable' => 12, 'zero' => 5, 'one' => 4, 'two' => 3, 'three' => 3],
                    9  => ['cantrips' => 4, 'preparable' => 13, 'zero' => 5, 'one' => 4, 'two' => 3, 'three' => 3],
                    10 => ['cantrips' => 5, 'preparable' => 14, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 1],
                    11 => ['cantrips' => 5, 'preparable' => 15, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 2],
                    12 => ['cantrips' => 5, 'preparable' => 16, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3],
                    13 => ['cantrips' => 5, 'preparable' => 17, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 1],
                    14 => ['cantrips' => 5, 'preparable' => 18, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2],
                    15 => ['cantrips' => 5, 'preparable' => 19, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2],
                    16 => ['cantrips' => 5, 'preparable' => 20, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
                    17 => ['cantrips' => 5, 'preparable' => 21, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
                    18 => ['cantrips' => 5, 'preparable' => 22, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
                    19 => ['cantrips' => 5, 'preparable' => 23, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 1, 'seven' => 1],
                    20 => ['cantrips' => 5, 'preparable' => 24, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 1],
                ],
                'eight' => [
                    1  => ['cantrips' => 3, 'preparable' => 0, 'zero' => 4],
                    2  => ['cantrips' => 3, 'preparable' => 2, 'zero' => 4, 'one' => 2],
                    3  => ['cantrips' => 3, 'preparable' => 4, 'zero' => 5, 'one' => 3],
                    4  => ['cantrips' => 4, 'preparable' => 6, 'zero' => 5, 'one' => 4, 'two' => 2],
                    5  => ['cantrips' => 4, 'preparable' => 8, 'zero' => 5, 'one' => 4, 'two' => 3],
                    6  => ['cantrips' => 4, 'preparable' => 10, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 2],
                    7  => ['cantrips' => 4, 'preparable' => 12, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3],
                    8  => ['cantrips' => 4, 'preparable' => 13, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 1],
                    9  => ['cantrips' => 4, 'preparable' => 14, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 2],
                    10 => ['cantrips' => 5, 'preparable' => 15, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 1],
                    11 => ['cantrips' => 5, 'preparable' => 16, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2],
                    12 => ['cantrips' => 5, 'preparable' => 17, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
                    13 => ['cantrips' => 5, 'preparable' => 18, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
                    14 => ['cantrips' => 5, 'preparable' => 19, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
                    15 => ['cantrips' => 5, 'preparable' => 20, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
                    16 => ['cantrips' => 5, 'preparable' => 21, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
                    17 => ['cantrips' => 5, 'preparable' => 22, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
                    18 => ['cantrips' => 5, 'preparable' => 23, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 2, 'seven' => 1, 'eight' => 1],
                    19 => ['cantrips' => 5, 'preparable' => 24, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 1, 'eight' => 1],
                    20 => ['cantrips' => 5, 'preparable' => 25, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 1, 'eight' => 1],
                ],
            };
        }
        if (count($spellSlots) == 0) {
            $spellSlots = [
                1  => ['cantrips' => 3, 'preparable' => 0, 'zero' => 3],
                2  => ['cantrips' => 3, 'preparable' => 2, 'zero' => 4, 'one' => 2],
                3  => ['cantrips' => 3, 'preparable' => 4, 'zero' => 5, 'one' => 3],
                4  => ['cantrips' => 4, 'preparable' => 6, 'zero' => 5, 'one' => 4, 'two' => 2],
                5  => ['cantrips' => 4, 'preparable' => 8, 'zero' => 5, 'one' => 4, 'two' => 3],
                6  => ['cantrips' => 4, 'preparable' => 10, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 2],
                7  => ['cantrips' => 4, 'preparable' => 12, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3],
                8  => ['cantrips' => 4, 'preparable' => 14, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 1],
                9  => ['cantrips' => 4, 'preparable' => 15, 'zero' => 6, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 2],
                10 => ['cantrips' => 5, 'preparable' => 16, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 1],
                11 => ['cantrips' => 5, 'preparable' => 17, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2],
                12 => ['cantrips' => 5, 'preparable' => 18, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
                13 => ['cantrips' => 5, 'preparable' => 19, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1],
                14 => ['cantrips' => 5, 'preparable' => 20, 'zero' => 7, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
                15 => ['cantrips' => 5, 'preparable' => 21, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1],
                16 => ['cantrips' => 5, 'preparable' => 22, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1],
                17 => ['cantrips' => 5, 'preparable' => 23, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 2, 'six' => 1, 'seven' => 1, 'eight' => 1],
                18 => ['cantrips' => 5, 'preparable' => 24, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 1, 'seven' => 1, 'eight' => 1, 'nine' => 1],
                19 => ['cantrips' => 5, 'preparable' => 25, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 1, 'eight' => 1, 'nine' => 1],
                20 => ['cantrips' => 5, 'preparable' => 26, 'zero' => 8, 'one' => 4, 'two' => 3, 'three' => 3, 'four' => 3, 'five' => 3, 'six' => 2, 'seven' => 2, 'eight' => 1, 'nine' => 1],
            ];
        }
        foreach ($spellSlots as $level => $slots) {
            $spellSlot           = new ClassSpellSlot;
            $spellSlot->class_id = $class->id;
            $spellSlot->level    = $level;
            foreach ($slots as $key => $value) {
                $spellSlot->$key = $value;
            }
            $spellSlot->save();
        }
    }

    public function addPowerMetasToClass(Klass $class, $powerMeta): void
    {
        foreach ($powerMeta as $level => $meta) {
            $powerMeta           = new ClassPowerMeta;
            $powerMeta->class_id = $class->id;
            $powerMeta->level    = $level;
            foreach ($meta as $key => $value) {
                $powerMeta->$key = $value;
            }
            $powerMeta->save();
        }
    }

    public function addSpellsToFeat(Feat $feat, $spellsArray): void
    {
        foreach ($spellsArray as $level => $spells) {
            foreach ($spells as $key => $value) {
                try {
                    if (is_numeric($key)) {
                        $spell = Spell::find(app()->spells[$value]);
                        $feat->spells()->save($spell, [
                            'level' => $level,
                        ]);
                    } else {
                        $spell = Spell::find(app()->spells[$key]);
                        $feat->spells()->save($spell, [
                            'level' => $level,
                            'meta'  => $value,
                        ]);
                    }
                } catch (\Exception $e) {
                    // do nothing
                    echo "\taddSpellsToFeat {$feat->name}\n";
                    var_dump($e->getMessage());
                }
            }
        }
    }

    public function addPowersToFeat(Feat $feat, $powersArray): void
    {
        foreach ($powersArray as $level => $powers) {
            foreach ($powers as $key => $value) {
                try {
                    if (is_numeric($key)) {
                        $power = Power::find(app()->powers[$value]);
                        $data  = [
                            'level' => $level,
                        ];
                    } else {
                        $power = Power::find(app()->powers[$key]);
                        $data  = [
                            'level' => $level,
                            'meta'  => $value,
                        ];
                    }
                    $feat->powers()->save($power, $data);
                } catch (\Exception $e) {
                    // do nothing
                    echo "\taddPowersToFeat {$feat->name}\n";
                    var_dump($e->getMessage());
                }
            }
        }
    }

    public function addChildrenToPower($parent, $children): void
    {
        try {
            $power = Power::findOrFail(app()->powers[$parent]);
            foreach ($children as $name) {
                try {
                    $child = Power::findOrFail(app()->powers[$name]);
                    $power->children()->save($child);
                } catch (\Exception $e) {
                    echo "\taddChildrenToPower no child {$name}\n";
                    var_dump($e->getMessage());
                }
            }
        } catch (\Exception $e) {
            echo "\taddChildrenToPower no parent {$parent}\n";
            var_dump($e->getMessage());
        }
    }

    public function saveCharacter(Character $char, array $classMetas = [])
    {
        $char->save();
        $proficiencies = [
            'weapons' => [],
            'armors'  => [],
        ];
        if (array_key_exists('race', $classMetas)) {
            //            $this->addLanguages($char, $classMetas['race'], 'saveCharacter');
            if (array_key_exists('features', $classMetas['race'])) {
                $idx = 1;
                foreach ($classMetas['race']['features'] as $key => $value) {
                    if (is_numeric($key)) {
                        /** @var Feature $feature */
                        $feature = Feature::where('key', $value)->firstOrFail();
                        $data    = [];
                    } else {
                        /** @var Feature $feature */
                        $feature = Feature::where('key', $key)->firstOrFail();
                        $data    = $value;
                    }
                    DB::table('character_feature')->insert([
                        'character_id' => $char->id,
                        'feature_id'   => $feature->id,
                        'level'        => 0,
                        'meta'         => $data['meta'] ?? null,
                        'idx'          => $idx,
                    ]);
                    $idx++;
                }
            }
            if (array_key_exists('proficiencies', $classMetas['race'])) {
                $proficiencies = array_merge_recursive($proficiencies, $classMetas['race']['proficiencies']);
            }
            if (array_key_exists('spells', $classMetas['race'])) {
                foreach ($classMetas['race']['spells'] as $level => $spells) {
                    foreach ($spells as $key => $value) {
                        if (is_numeric($key)) {
                            /** @var Spell $spell */
                            $spell = Spell::where('name', $value)->firstOrFail();
                            $meta  = null;
                        } else {
                            /** @var Spell $spell */
                            $spell = Spell::where('name', $key)->firstOrFail();
                            $meta  = $value;
                        }
                        DB::table('spellables')->insert([
                            'spell_id'       => $spell->id,
                            'spellable_type' => 'App\Models\Character',
                            'spellable_id'   => $char->id,
                            'level'          => $level,
                            'meta'           => $meta,
                        ]);
                    }
                }
            }
        }
        $characterLevel = 1;
        $classes        = [];
        if (array_key_exists('classes', $classMetas)) {
            foreach ($classMetas['classes'] as $level => $classLevelMeta) {
                if (! array_key_exists($classLevelMeta['class'], $classes)) {
                    /** @var Klass $class */
                    $class                             = Klass::where('name', $classLevelMeta['class'])->firstOrFail();
                    $classes[$classLevelMeta['class']] = $class;
                    $armors                            = explode(',', $class->armors);
                    $weapons                           = explode(',', $class->weapons);
                    $proficiencies['weapons']          = array_merge($proficiencies['weapons'], $weapons);
                    $proficiencies['armors']           = array_merge($proficiencies['armors'], $armors);
                } else {
                    $class = $classes[$classLevelMeta['class']];
                }
                DB::table('character_class')->insert([
                    'character_id'    => $char->id,
                    'class_id'        => $classes[$classLevelMeta['class']]->id,
                    'character_level' => $characterLevel,
                    'level'           => $level,
                ]);
                if (array_key_exists('features', $classLevelMeta)) {
                    $idx = 1;
                    foreach ($classLevelMeta['features'] as $key => $value) {
                        try {
                            if (is_numeric($key)) {
                                /** @var Feature $feature */
                                $feature = app()->features[$value];
                                $data    = [];
                            } else {
                                /** @var Feature $feature */
                                $feature = app()->features[$key];
                                $data    = $value;
                            }
                            DB::table('character_feature')->insert([
                                'character_id' => $char->id,
                                'feature_id'   => $feature->id,
                                'class_id'     => $class->id,
                                'level'        => $level,
                                'meta'         => $data['meta'] ?? null,
                                'idx'          => $idx,
                            ]);
                        } catch (ModelNotFoundException $e) {
                            echo "saveCharacter add feature: {$char->name}";
                            echo "\tfeat name: {$key} => {$value}";
                            echo "\tlevel: {$level}";
                        }
                        $idx++;
                    }
                }
                if (array_key_exists('feats', $classLevelMeta)) {
                    foreach ($classLevelMeta['feats'] as $source => $feats) {
                        foreach ($feats as $key => $value) {
                            /** @var Feat $feat */
                            try {
                                if (is_numeric($key)) {
                                    $feat = Feat::where('name', $value)->firstOrFail();
                                    $meta = null;
                                } else {
                                    $feat = Feat::where('name', $key)->firstOrFail();
                                    $meta = $value['meta'];
                                }
                                DB::table('character_feat')->insert([
                                    'character_id' => $char->id,
                                    'feat_id'      => $feat->id,
                                    'class_id'     => $class->id,
                                    'meta'         => $meta,
                                    'level'        => $level,
                                ]);
                            } catch (ModelNotFoundException $e) {
                                echo "saveCharacter add feat: {$char->name}";
                                echo "\tfeat name: {$key} - {$value}";
                                echo "\tlevel: {$level}";
                            }
                        }
                    }
                }
                if (array_key_exists('talents', $classLevelMeta)) {
                    foreach ($classLevelMeta['talents'] as $key => $value) {
                        try {
                            /** @var Talent $manu */
                            $manu = Talent::where('name', $value)->firstOrFail();
                            DB::table('character_talent')->insert([
                                'character_id' => $char->id,
                                'talent_id'    => $manu->id,
                                'class_id'     => $class->id,
                                'level'        => $level,
                            ]);
                        } catch (ModelNotFoundException $e) {
                            echo "saveCharacter add talent: {$char->name}";
                            echo "\tfeat name: {$key} => {$value}";
                            echo "\tlevel: {$level}";
                        }
                    }
                }
                if (array_key_exists('skills', $classLevelMeta)) {
                    $idx = 1;
                    foreach ($classLevelMeta['skills'] as $key => $value) {
                        $skill = app()->skills[$key];
                        if (is_numeric($value)) {
                            $specialization = null;
                            $data           = $value;
                        } else {
                            $specialization = $value['meta'];
                            $data           = $value['value'];
                        }
                        DB::table('character_skill')->insert([
                            'character_id'   => $char->id,
                            'skill_id'       => $skill->id,
                            'specialization' => $specialization,
                            'value'          => $data,
                            'level'          => $level,
                            'idx'            => $idx,
                        ]);
                        $idx++;
                    }
                }
                if (array_key_exists('spells', $classLevelMeta)) {
                    foreach ($classLevelMeta['spells'] as $level1 => $spells) {
                        foreach ($spells as $key => $value) {
                            if (is_numeric($key)) {
                                /** @var Spell $spell */
                                $spell = Spell::findOrFail(app()->spells[$value]);
                                $data  = [];
                            } else {
                                $spell = Spell::findOrFail(app()->spells[$key]);
                                $data  = $value;
                            }
                            DB::table('spellables')->insert([
                                'spell_id'       => $spell->id,
                                'spellable_type' => 'App\Models\Character',
                                'spellable_id'   => $char->id,
                                'level'          => $level1,
                                'meta'           => $data,
                            ]);
                        }
                    }
                }
                $characterLevel++;
            }
        }
    }

    protected function addTypesToObject($obj, $types): void
    {
        foreach ($types as $key => $value) {
            if (is_numeric($key)) {
                $obj->types()->save(app()->types[$value]);
            } else {
                $obj->types()->save(app()->types[$key], ['level' => $value]);
            }
        }
    }

    protected function addPropertiesToObject($obj, $props): void
    {
        foreach ($props as $key => $value) {
            if (is_numeric($key)) {
                $obj->properties()->save(app()->properties[$value]);
            } else {
                $obj->properties()->save(app()->properties[$key], $value);
            }
        }
    }

    protected function addSaves($model, $params): void
    {
        if (array_key_exists('saves', $params)) {
            foreach ($params['saves'] as $attr => $data) {
                $model->saves()->save(app()->attributes[$attr], $data);
            }
        }
    }

    protected function addSkills($model, $params): void
    {
        if (array_key_exists('skills', $params)) {
            foreach ($params['skills'] as $skill => $data) {
                $model->skills()->save(app()->skills[$skill], $data);
            }
        }
    }

    protected function addFeats($model, $params, $function): void
    {
        if (array_key_exists('feats', $params)) {
            foreach ($params['feats'] as $key => $value) {
                try {
                    if (is_numeric($key)) {
                        $feat = Feat::where('name', $value)->firstOrFail();
                        $data = [];
                    } else {
                        $feat = Feat::where('name', $key)->firstOrFail();
                        $data = $value;
                    }
                    $model->feats()->save($feat, $data);
                } catch (\Exception $e) {
                    echo "\t{$function} feat {$model->name} Feat\n";
                    var_dump($key);
                    var_dump($value);
                    var_dump($e->getMessage());
                }
            }
        }
    }

    protected function addSpells(Model $model, array $params, string $function): void
    {
        if (array_key_exists('spells', $params)) {
            foreach ($params['spells'] as $key => $value) {
                try {
                    if (is_numeric($key)) {
                        $spell = Spell::findOrFail(app()->spells[$value]);
                        $data  = [];
                    } else {
                        $spell = Spell::findOrFail(app()->spells[$key]);
                        $data  = $value;
                    }
                    $model->spells()->save($spell, $data);
                } catch (\Exception $e) {
                    echo "\t{$function} spell {$model->name} Spell\n";
                    var_dump($key);
                    var_dump($value);
                    var_dump($e->getMessage());
                }
            }
        }
    }

    protected function addPowers($model, $params, $function): void
    {
        if (array_key_exists('powers', $params)) {
            foreach ($params['powers'] as $key => $value) {
                try {
                    if (is_numeric($key)) {
                        $power = Power::findOrFail(app()->powers[$value]);
                        $data  = [];
                    } else {
                        $power = Power::findOrFail(app()->powers[$key]);
                        $data  = $value;
                    }
                    $model->powers()->save($power, $data);
                } catch (\Exception $e) {
                    echo "\t{$function} powers {$model->name} Power\n";
                    var_dump($key);
                    var_dump($value);
                    var_dump($e->getMessage());
                }
            }
        }
    }

    protected function addTalents($model, $params, $function): void
    {
        if (array_key_exists('talents', $params)) {
            foreach ($params['talents'] as $talent) {
                try {
                    $talent = Talent::where('name', $talent)->firstOrFail();
                    $model->talents()->save($talent);
                } catch (\Exception $e) {
                    echo "\t{$function} talents {$model->name} Talent {$talent}\n";
                    var_dump($e->getMessage());
                }
            }
        }
    }

    protected function addClasses($model, $params, $function): void
    {
        if (array_key_exists('classes', $params)) {
            foreach ($params['classes'] as $key => $value) {
                try {
                    if (is_numeric($key)) {
                        $class = Klass::where('name', $value)->firstOrFail();
                        $data  = [];
                    } else {
                        $class = Klass::where('name', $key)->firstOrFail();
                        $data  = $value;
                    }
                    $model->classes()->save($class, $data);
                } catch (\Exception $e) {
                    echo "\t{$function} classes {$model->name} Class\n";
                    var_dump($key);
                    var_dump($value);
                    var_dump($e->getMessage());
                }
            }
        }
    }

    protected function addFeatures(Model $model, array $params, string $function): void
    {
        if (array_key_exists('features', $params)) {
            foreach ($params['features'] as $key => $value) {
                try {
                    if (is_numeric($key)) {
                        $feature = app()->features[$value];
                        $data    = [];
                    } else {
                        $feature = app()->features[$key];
                        $data    = $value;
                    }
                    $model->features()->save($feature, $data);
                } catch (\Exception $e) {
                    echo "\t{$function} classes {$model->name} Feature\n";
                    var_dump($key);
                    var_dump($value);
                    var_dump($e->getMessage());
                }
            }
        }
    }

    protected function addLanguages(Model $model, array $params, string $function): void
    {
        if (array_key_exists('languages', $params)) {
            foreach ($params['languages'] as $key => $value) {
                try {
                    if (is_numeric($key)) {
                        $lang = Language::where('name', $value)->firstOrFail();
                        $data = [];
                    } else {
                        $lang = Language::where('name', $key)->firstOrFail();
                        $data = $value;
                    }
                    $model->languages()->save($lang, $data);
                } catch (\Exception $e) {
                    echo "\t{$function} language {$model->name} Language\n";
                    var_dump($key);
                    var_dump($value);
                    var_dump($e->getMessage());
                }
            }
        }
    }

    protected function addMaterials($model, $params, $function): void
    {
        if (array_key_exists('materials', $params)) {
            foreach ($params['materials'] as $key => $value) {
                try {
                    if (is_numeric($key)) {
                        $material = Material::where('name', $value)->firstOrFail();
                        $data     = [];
                    } else {
                        $material = Material::where('name', $key)->firstOrFail();
                        $data     = $value;
                    }
                    $model->materials()->save($material, $data);
                } catch (\Exception $e) {
                    echo "\t{$function} materials {$key} Material\n";
                    var_dump($key);
                    var_dump($value);
                    var_dump($e->getMessage());
                }
            }
        }
    }

    protected function addMonsters($model, $params, $function): void
    {
        if (array_key_exists('monsters', $params)) {
            foreach ($params['monsters'] as $key => $value) {
                try {
                    if (is_numeric($key)) {
                        $monster = Monster::where('name', $value)->firstOrFail();
                        $data    = [];
                    } else {
                        $monster = Monster::where('name', $key)->firstOrFail();
                        $data    = $value;
                    }
                    $model->monsters()->save($monster, $data);
                } catch (\Exception $e) {
                    echo "\t{$function} monsters {$key} Monster\n";
                    var_dump($key);
                    var_dump($value);
                    var_dump($e->getMessage());
                }
            }
        }
    }

    protected function addFormula($model, $params, $function): void
    {
        if (array_key_exists('formulas', $params)) {
            foreach ($params['formulas'] as $key => $value) {
                try {
                    if (is_numeric($key)) {
                        $formula = Formula::where('name', $value)->firstOrFail();
                        $data    = [];
                    } else {
                        $formula = Formula::where('name', $key)->firstOrFail();
                        $data    = $value;
                    }
                    $model->formulas()->save($formula, $data);
                } catch (\Exception $e) {
                    echo "\t{$function} formula {$key} Formula\n";
                    var_dump($key);
                    var_dump($value);
                    var_dump($e->getMessage());
                }
            }
        }
    }

    public function calculateHitPoints(int $level, ?int $con, string $size, ?array $data = null, array $types = []): string
    {
        $size               = $this->getHitDieForSize($size, $types);
        $mod                = $this->getAbilityScoreModifier($con);
        $classHitPoints     = 0;
        $details            = [];
        $classHitPointsData = [];
        $details[]          = ' (';
        if ($level > 0) {
            $details[] = $level . 'D' . $size;
        }
        $totalLevels = $level;
        if (! is_null($data) && array_key_exists('classes', $data)) {
            foreach ($data['classes'] as $className => $classData) {
                if (array_key_exists('level', $classData)) {
                    try {
                        /** @var Klass $class */
                        $class = Klass::where('name', $className)->firstOrFail();
                        $classHitPoints += floor(($class->hit_dice * $classData['level']) / 2) + ($mod * $classData['level']);
                        $totalLevels += $classData['level'];
                        $classHitPointsData[] = $className . ' ' . $classData['level'] . 'D' . $class->hit_dice;
                    } catch (ModelNotFoundException $e) {
                        echo "\tFailed to load class for Hit Point calculation\n";
                        var_dump($className);
                    }
                }
            }
        }
        if (count($classHitPointsData) > 0) {
            $str = '';
            if ($level > 0) {
                $str .= ' / ';
            }
            $str .= implode(' / ', $classHitPointsData);
            $details[] = $str;
        }
        if ($mod != 0) {
            $details[] = ($mod > 0 ? ' +' : ' ') . $mod * $totalLevels;
        }
        $return = max(floor(($level * $size) / 2) + ($level * $mod) + $classHitPoints, 1);
        if (array_key_exists('hit_points', $data)) {
            $return += $data['hit_points'];
            $details[] = ' Bonus: ' . $data['hit_points'];
        }
        $details[] = ')';

        return $return . '' . implode('', $details);
    }

    protected function getHitDieForSize(string $size, array $types = []): int
    {
        foreach ($types as $type) {
            if ($type === 'Undead') {
                return 12;
            }
        }
        try {
            return match ($size) {
                'Tiny'   => 4,
                'Small'  => 6,
                'Medium' => 8,
                'Large'  => 10,
                'Huge', 'Gargantuan' => 12
            };
        } catch (\Throwable $e) {
            var_dump($size);
            exit();
        }
    }

    protected function calculateToHit(int $level, ?int $abilityScore, string $size, ?array $data = null): int
    {
        $base = $this->getProficiencyBonus($level);
        $mod  = $this->getAbilityScoreModifier($abilityScore);
        $size = match ($size) {
            'Tiny'       => 2,
            'Small'      => 1,
            'Medium'     => 0,
            'Large'      => -1,
            'Huge'       => -2,
            'Gargantuan' => -3,
        };
        if (! is_null($data) && array_key_exists('classes', $data)) {
            foreach ($data['classes'] as $class) {
                if (array_key_exists('level', $class)) {
                    // default to values that result in 0s
                    $base += $this->calculateToHit($class['level'], 10, 'Medium');
                }
            }
        }

        return min($base, 7) + $mod + $size;
    }

    protected function getAbilityScoreModifier(?int $score = null): int
    {
        if (is_null($score)) {
            return 0;
        }

        return floor(($score - 10) / 2);
    }

    protected function getProficiencyBonus(int $level, ?array $data = null): int
    {
        $level = abs($level);
        $bonus = match ($level) {
            0, 1 => 0,
            2, 3 => 1,
            4, 5 => 2,
            6, 7, 8 => 3,
            9, 10, 11, 12 => 4,
            13, 14, 15, 16 => 5,
            17, 18, 19, 20 => 6,
            default => 7,
        };
        if (! is_null($data) && array_key_exists('classes', $data)) {
            foreach ($data['classes'] as $class) {
                if (array_key_exists('level', $class)) {
                    $bonus += $this->getProficiencyBonus($class['level']);
                }
            }
        }

        return min($bonus, 7);
    }
}
