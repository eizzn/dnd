<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class FilterPipelinePayload
{
    public function __construct(public Builder|MorphMany|BelongsToMany|HasMany $queryBuilder, public array $params)
    {
        //
    }
}
