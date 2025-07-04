<?php

namespace App\Traits;

use App\Models\Monster;

trait MonsterableTrait
{
    public function monsters()
    {
        return $this->morphToMany(Monster::class, 'monsterable')
            ->withPivot(['meta']);
    }
}
