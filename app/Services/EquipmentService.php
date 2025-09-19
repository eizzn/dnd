<?php

namespace App\Services;

use App\Exceptions\InvalidArgumentException;
use App\Filters\FilterPipelinePayload;
use App\Models\Equipment;
use App\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class EquipmentService implements Contracts\EquipmentService
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
                Equipment::query(),
                $search
            ))
            ->through([
                \App\Filters\Id::class,
                \App\Filters\Name::class,
                \App\Filters\TypesByName::class,
                \App\Filters\Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
