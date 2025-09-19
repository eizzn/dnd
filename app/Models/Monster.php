<?php

namespace App\Models;

use App\Traits\ClassablesTrait;
use App\Traits\FeatableTrait;
use App\Traits\FeatureableTrait;
use App\Traits\LanguagableTrait;
use App\Traits\PowerableTrait;
use App\Traits\SaveableTrait;
use App\Traits\SkillableTrait;
use App\Traits\SpellableTrait;
use App\Traits\TalentableTrait;
use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Monster
 *
 * @property int         id
 * @property string      name
 * @property string      size
 * @property string      type
 * @property string      alignment
 * @property string      armor_class
 * @property string|null damage_reduction
 * @property int|null    hit_dice
 * @property string      hit_points
 * @property string      speed
 * @property int|null    str
 * @property int|null    dex
 * @property int|null    con
 * @property int|null    int
 * @property int|null    wis
 * @property int|null    cha
 * @property float       cr
 * @property int         proficiency
 * @property int         to_hit_melee
 * @property int         to_hit_range
 * @property string|null actions
 * @property string|null description
 */
class Monster extends Model
{
    use ClassablesTrait, FeatableTrait, FeatureableTrait, LanguagableTrait,
        PowerableTrait, SaveableTrait, SkillableTrait, SpellableTrait, TalentableTrait,
        TypeableTrait;

    public $timestamps = false;
}
