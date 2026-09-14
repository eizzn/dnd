<?php

namespace App\Services;

use App\Exceptions\InvalidArgumentException;
use App\Filters\ChallengeRating;
use App\Filters\FilterPipelinePayload;
use App\Filters\Id;
use App\Filters\Name;
use App\Filters\Order;
use App\Filters\TypesByName;
use App\Models\Monster;
use App\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class MonsterService implements Contracts\MonsterService
{
    use GetDataTrait;

    /**
     * @throws InvalidArgumentException
     */
    public function index(array|Request $search, bool $sortByCR = false): Builder
    {
        $search = $this->getData($search);
        $query  = $sortByCR ? Monster::orderBy('cr') : Monster::query();

        /** @var FilterPipelinePayload $results */
        $results = app(Pipeline::class)
            ->send(new FilterPipelinePayload(
                $query,
                $search
            ))
            ->through([
                Id::class,
                Name::class,
                ChallengeRating::class,
                TypesByName::class,
                Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
