<?php

namespace App\Services;

use App\Exceptions\InvalidArgumentException;
use App\Filters\Alignment;
use App\Filters\FilterPipelinePayload;
use App\Filters\GodPantheonId;
use App\Filters\Level;
use App\Filters\Name;
use App\Filters\Order;
use App\Filters\PantheonId;
use App\Filters\Portfolio;
use App\Filters\Title;
use App\Models\GodPantheon;
use App\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class GodPantheonService implements Contracts\GodPantheonService
{
    use GetDataTrait;

    /**
     * @throws InvalidArgumentException
     */
    public function index(array|Request $search): Builder
    {
        $search = $this->getData($search);
        $order  = '"Greater", "Intermediate", "Lesser", "Demi",
        "Archdevil", "Demon Prince", "Altraloth", "Tome Archon", "Guardinal Paragon", "Slaad Lord", "Prime", "Fey Lord", "Archomental",
        "Devil Lord", "Demon Lord",
        "Duke of Hell", "Solar",
        "Devil", "Demon", "Yugoloth", "Archon", "Guardinal", "Slaad", "Modron", "Archfey",
        "Hero",
        "Dead", "Departed"';

        /** @var FilterPipelinePayload $results */
        $results = app(Pipeline::class)
            ->send(new FilterPipelinePayload(
                GodPantheon::query()->orderByRaw("FIELD(level, {$order}) ASC"),
                $search
            ))
            ->through([
                GodPantheonId::class,
                PantheonId::class,
                Name::class,
                Level::class,
                Alignment::class,
                Title::class,
                Portfolio::class,
                Order::class,
            ])
            ->thenReturn();

        return $results->queryBuilder;
    }
}
