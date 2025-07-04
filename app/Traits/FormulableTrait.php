<?php

namespace App\Traits;

use App\Models\Formula;

trait FormulableTrait
{
    public function formulas()
    {
        return $this->morphToMany(Formula::class, 'formulable')
            ->withPivot(['meta']);
    }
}
