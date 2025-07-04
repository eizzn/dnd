<?php

namespace App\Traits;

use App\Models\Material;

trait MaterialableTrait
{
    public function materials()
    {
        return $this->morphToMany(Material::class, 'materialable');
    }
}
