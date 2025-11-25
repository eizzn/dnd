<?php

namespace App\Traits;

use App\Models\SubPlane;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait SubPlaneable
{
    public function sub_planes(): BelongsToMany
    {
        return $this->morphToMany(SubPlane::class, 'subplaneable')
            ->withPivot('meta');
    }
}
