<?php

namespace App\Services;

use App\Exceptions\InvalidArgumentException;
use App\Filters\FilterPipelinePayload;
use App\Filters\Id;
use App\Filters\Name;
use App\Filters\Order;
use App\Filters\TypeByName;
use App\Models\Material;
use App\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class MaterialService implements Contracts\MaterialService
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
                Material::query(),
                $search
            ))
            ->through([
                Id::class,
                Name::class,
                TypeByName::class,
                Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
