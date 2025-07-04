<?php

namespace App\Traits;

use App\Models\Spell;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Trait SpellableTrait
 *
 * @property Spell[]|Collection spells
 * @property object pivot
 */
trait SpellableTrait
{
    public function spells(): MorphToMany
    {
        return $this->morphToMany(\App\Models\Spell::class, 'spellable')
            ->withPivot('level', 'meta');
    }
}
