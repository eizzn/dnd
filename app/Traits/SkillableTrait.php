<?php

namespace App\Traits;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Collection;

/**
 * Trait SkillableTrait
 *
 * @property Skill[]|Collection skills
 */
trait SkillableTrait
{
    public function skills()
    {
        return $this->morphToMany('App\Models\Skill', 'skillable')
            ->withPivot('dc', 'meta');
    }
}
