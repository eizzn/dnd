<?php

namespace App\Services;

use App\Exceptions\InvalidArgumentException;
use App\Filters\FilterPipelinePayload;
use App\Filters\Group;
use App\Filters\Id;
use App\Filters\Name;
use App\Filters\Order;
use App\Filters\TypeByName;
use App\Models\Armor;
use App\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class ArmorService implements Contracts\ArmorService
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
                Armor::query(),
                $search
            ))
            ->through([
                Id::class,
                TypeByName::class,
                Name::class,
                Group::class,
                Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
