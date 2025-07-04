<?php

namespace App\Services;

use App\Filters\FilterPipelinePayload;
use App\Models\GodPantheon;
use App\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class GodPantheonService implements Contracts\GodPantheonService
{
    use GetDataTrait;

    public function index(array|Request $search): Builder
    {
        $search = $this->getData($search);

        /** @var FilterPipelinePayload $results */
        $results = app(Pipeline::class)
            ->send(new FilterPipelinePayload(
                GodPantheon::query(),
                $search
            ))
            ->through([
                \App\Filters\GodPantheonId::class,
                \App\Filters\PantheonId::class,
                \App\Filters\Name::class,
                \App\Filters\Title::class,
                \App\Filters\Portfolio::class,
                \App\Filters\Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
