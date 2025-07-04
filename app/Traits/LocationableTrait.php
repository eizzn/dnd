<?php

namespace App\Traits;

use App\Models\Location;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait LocationableTrait
{
    public function locations(): BelongsToMany
    {
        return $this->morphToMany(Location::class, 'locationable')
            ->withPivot('meta');
    }
}
