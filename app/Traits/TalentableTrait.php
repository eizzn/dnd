<?php

namespace App\Traits;

use App\Models\Talent;
use Illuminate\Database\Eloquent\Collection;

/**
 * Trait TalentableTrait
 *
 * @property Talent[]|Collection talents
 */
trait TalentableTrait
{
    public function talents()
    {
        return $this->morphToMany(\App\Models\Talent::class, 'talentable')
            ->withPivot('level', 'meta');
    }
}
