<?php

namespace App\Services;

use App\Exceptions\InvalidArgumentException;
use App\Filters\ActionType;
use App\Filters\FilterPipelinePayload;
use App\Filters\Id;
use App\Filters\Name;
use App\Filters\Order;
use App\Filters\TypesByName;
use App\Models\Feat;
use App\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class FeatService implements Contracts\FeatService
{
    use GetDataTrait;

    /**
     * {@inheritDoc}
     *
     * @throws InvalidArgumentException
     */
    public function index(array|Request $search): Builder
    {
        $search = $this->getData($search);

        /** @var FilterPipelinePayload $results */
        $results = app(Pipeline::class)
            ->send(new FilterPipelinePayload(
                Feat::query(),
                $search
            ))
            ->through([
                Id::class,
                Name::class,
                ActionType::class,
                TypesByName::class,
                Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
