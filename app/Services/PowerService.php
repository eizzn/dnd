<?php

namespace App\Services;

use App\Exceptions\InvalidArgumentException;
use App\Filters\FilterPipelinePayload;
use App\Models\Power;
use App\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PowerService implements Contracts\PowerService
{
    use GetDataTrait;

    /**
     * @throws InvalidArgumentException
     */
    public function index(array|Request $search): Builder
    {
        $search = $this->getData($search);

        /** @var FilterPipelinePayload $results */
        $results = app(Pipeline::class)
            ->send(new FilterPipelinePayload(
                Power::query(),
                $search
            ))
            ->through([
                \App\Filters\Id::class,
                \App\Filters\Name::class,
                \App\Filters\ActionType::class,
                \App\Filters\Type::class,
                \App\Filters\Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
