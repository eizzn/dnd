<?php

namespace App\Models;

use App\Traits\FeatableTrait;
use App\Traits\FeatureableTrait;
use App\Traits\PowerableTrait;
use App\Traits\SaveableTrait;
use App\Traits\SkillableTrait;
use App\Traits\SpellableTrait;
use App\Traits\TypeableTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Klass
 *
 * @property int         id
 * @property string      name
 * @property string      type
 * @property string|null key_attribute
 * @property int|null    hit_dice
 * @property int|null    skill_points
 * @property int|null    skill_progress
 * @property string|null armors
 * @property string|null weapons
 * @property bool        has_spells
 * @property bool        has_powers
 * @property string|null description
 * @property string|null requirements
 * @property int         max_level
 * @property Collection|ClassSpellSlot[] spell_slots
 * @property Collection|ClassPowerMeta[] power_slots
 */
class Klass extends Model
{
    use FeatableTrait, FeatureableTrait, PowerableTrait, SaveableTrait, SkillableTrait, SpellableTrait,
        TypeableTrait;

    public $table      = 'classes';
    public $timestamps = false;

    public function spell_slots(): HasMany
    {
        return $this->hasMany(ClassSpellSlot::class, 'class_id');
    }

    public function power_slots(): HasMany
    {
        return $this->hasMany(ClassPowerMeta::class, 'class_id');
    }
}
