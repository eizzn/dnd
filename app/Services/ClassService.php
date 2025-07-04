<?php

namespace App\Services;

use App\Filters\FilterPipelinePayload;
use App\Models\Klass;
use App\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class ClassService implements Contracts\ClassService
{
    use GetDataTrait;

    /**
     * {@inheritDoc}
     */
    public function index(array|Request $search): Builder
    {
        $search = $this->getData($search);

        /** @var FilterPipelinePayload $results */
        $results = app(Pipeline::class)
            ->send(new FilterPipelinePayload(
                Klass::query(),
                $search
            ))
            ->through([
                \App\Filters\Id::class,
                \App\Filters\Name::class,
                \App\Filters\Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
