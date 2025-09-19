<?php

namespace App\Services;

use App\Exceptions\InvalidArgumentException;
use App\Filters\FilterPipelinePayload;
use App\Models\Spell;
use App\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class SpellService implements Contracts\SpellService
{
    use GetDataTrait;

    /**
     * @throws InvalidArgumentException
     */
    public function index(array|Request $search, bool $sortByLevel = false): Builder
    {
        $search = $this->getData($search);
        $query  = $sortByLevel ? Spell::orderBy('default_level') : Spell::query();

        /** @var FilterPipelinePayload $results */
        $results = app(Pipeline::class)
            ->send(new FilterPipelinePayload(
                $query,
                $search
            ))
            ->through([
                \App\Filters\Id::class,
                \App\Filters\Name::class,
                \App\Filters\Casting::class,
                \App\Filters\TypesByName::class,
                \App\Filters\Duration::class,
                \App\Filters\DefaultLevel::class,
                \App\Filters\Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
