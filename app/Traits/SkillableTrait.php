<?php

namespace App\Traits;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Trait SkillableTrait
 *
 * @property Skill[]|Collection skills
 */
trait SkillableTrait
{
    public function skills(): MorphToMany
    {
        return $this->morphToMany(Skill::class, 'skillable')
            ->withPivot('dc', 'meta');
    }
}
