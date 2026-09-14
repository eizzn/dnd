<?php

namespace App\Services;

use App\Exceptions\InvalidArgumentException;
use App\Filters\FilterPipelinePayload;
use App\Filters\Id;
use App\Filters\Level;
use App\Filters\Name;
use App\Filters\Order;
use App\Filters\TypeByName;
use App\Models\Formula;
use App\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class FormulaService implements Contracts\FormulaService
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
                Formula::query(),
                $search
            ))
            ->through([
                Id::class,
                Name::class,
                TypeByName::class,
                Level::class,
                Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
