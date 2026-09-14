<?php

namespace App\Services;

use App\Filters\FilterPipelinePayload;
use App\Filters\HasPowers;
use App\Filters\HasSpells;
use App\Filters\HitDice;
use App\Filters\Id;
use App\Filters\KeyAttribute;
use App\Filters\Name;
use App\Filters\Order;
use App\Filters\TypeByName;
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
        $query  = Klass::query();
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
                Id::class,
                Name::class,
                KeyAttribute::class,
                HitDice::class,
                TypeByName::class,
                HasSpells::class,
                HasPowers::class,
                Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
