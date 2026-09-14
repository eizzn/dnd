<?php

namespace App\Services;

use App\Filters\FilterPipelinePayload;
use App\Filters\Id;
use App\Filters\Name;
use App\Filters\Order;
use App\Models\Pantheon;
use App\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PantheonService implements Contracts\PantheonService
{
    use GetDataTrait;

    public function index(array|Request $search): Builder
    {
        $search = $this->getData($search);

        /** @var FilterPipelinePayload $results */
        $results = app(Pipeline::class)
            ->send(new FilterPipelinePayload(
                Pantheon::query(),
                $search
            ))
            ->through([
                Id::class,
                Name::class,
                Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
