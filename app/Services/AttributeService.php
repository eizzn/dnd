<?php

namespace App\Services;

use App\Filters\FilterPipelinePayload;
use App\Models\Attribute;
use App\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class AttributeService implements Contracts\AttributeService
{
    use GetDataTrait;

    public function index(array|Request $search): Builder
    {
        $search = $this->getData($search);

        /** @var FilterPipelinePayload $results */
        $results = app(Pipeline::class)
            ->send(new FilterPipelinePayload(
                Attribute::query(),
                $search
            ))
            ->through([
                \App\Filters\Id::class,
                \App\Filters\Name::class,
                \App\Filters\Attr::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
