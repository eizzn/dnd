<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Skill
 *
 * @property int         id
 * @property string      name
 * @property string      description
 * @property int         attribute_id
 * @property string|null untrained_uses
 * @property string|null trained_uses
 * @property int         armor_penalty
 * @property int         specified
 * @property Attribute   attribute
 * @property SubSkill[]|Collection sub_skills
 */
class Skill extends Model
{
    public $timestamps = false;

    public function attribute(): BelongsTo
    {
        return $this->belongsTo(Attribute::class);
    }

    public function sub_skills(): HasMany
    {
        return $this->hasMany(SubSkill::class);
    }
}
