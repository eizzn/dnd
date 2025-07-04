<?php

namespace App\Models;

use App\Traits\Attributable;
use App\Traits\FeatableTrait;
use App\Traits\MaterialableTrait;
use App\Traits\MonsterableTrait;
use App\Traits\Propertyable;
use App\Traits\SkillableTrait;
use App\Traits\SpellableTrait;
use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Spell
 *
 * @property int         id
 * @property string      name
 * @property string      description
 * @property string      rarity
 * @property string|null casting
 * @property string|null range
 * @property string|null area
 * @property string|null targets
 * @property string|null duration
 * @property string|null save_attribute
 * @property string|null saves
 * @property string|null heightened
 * @property string|null requirements
 * @property string|null spell_creator
 * @property int         default_level
 */
class Spell extends Model
{
    use Attributable, FeatableTrait, MaterialableTrait, MonsterableTrait, Propertyable, SkillableTrait,
        SpellableTrait, TypeableTrait;

    public $timestamps = false;
}
