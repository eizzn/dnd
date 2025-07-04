<?php

namespace App\Models;

use App\Traits\FeatableTrait;
use App\Traits\FormulableTrait;
use App\Traits\MaterialableTrait;
use App\Traits\MonsterableTrait;
use App\Traits\PowerableTrait;
use App\Traits\SkillableTrait;
use App\Traits\SpellableTrait;
use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Formula
 *
 * @property int         id
 * @property string      name
 * @property string      type
 * @property int|null    level
 * @property string      rarity
 * @property string|null price
 * @property string|null crafting_time
 * @property string|null method
 * @property string|null activation
 * @property string|null bulk
 * @property string|null meta
 * @property string|null crafting
 * @property string      description
 */
class Formula extends Model
{
    use FeatableTrait, FormulableTrait, MaterialableTrait, MonsterableTrait, PowerableTrait, SkillableTrait,
        SpellableTrait, TypeableTrait;

    public $timestamps = false;
}
