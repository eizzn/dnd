<?php

namespace App\Services;

use App\Filters\FilterPipelinePayload;
use App\Filters\HasPowers;
use App\Filters\HasSpells;
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
    public function index(array|Request $search, bool $byType = false): Builder
    {
        $search = $this->getData($search);
        $query = Klass::query();
        if ($byType) {
            $query->orderBy('type');
        }

        /** @var FilterPipelinePayload $results */
        $results = app(Pipeline::class)
            ->send(new FilterPipelinePayload(
                $query,
                $search
            ))
            ->through([
                \App\Filters\Id::class,
                \App\Filters\Name::class,
                \App\Filters\KeyAttribute::class,
                \App\Filters\HitDice::class,
                \App\Filters\TypeByName::class,
                \App\Filters\HasSpells::class,
                \App\Filters\HasPowers::class,
                \App\Filters\Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
