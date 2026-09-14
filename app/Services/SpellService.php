<?php

namespace App\Services;

use App\Exceptions\InvalidArgumentException;
use App\Filters\Casting;
use App\Filters\DefaultLevel;
use App\Filters\Duration;
use App\Filters\FilterPipelinePayload;
use App\Filters\Id;
use App\Filters\Name;
use App\Filters\Order;
use App\Filters\TypesByName;
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
                Id::class,
                Name::class,
                Casting::class,
                TypesByName::class,
                Duration::class,
                DefaultLevel::class,
                Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
