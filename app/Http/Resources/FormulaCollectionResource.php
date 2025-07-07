<?php

namespace App\Http\Resources;

use App\Models\Formula;
use App\Models\Type;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FormulaCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Formula $formula) {
                return [
                    'id'            => $formula->id,
                    'name'          => $formula->name,
                    'type'          => $formula->type,
                    'level'         => $formula->level,
                    'rarity'        => $formula->rarity,
                    'price'         => $formula->price,
                    'crafting_type' => $formula->crafting_time,
                    'method'        => $formula->method,
                    'activation'    => $formula->activation,
                    'bulk'          => $formula->bulk,
                    'meta'          => $formula->meta,
                    'crafting'      => $formula->crafting,
                    'description'   => mb_substr(str_replace(["\r", "\n"], '', strip_tags($formula->description)), 0, 100) . '...',
                    'types'        => $formula->types->map(function (Type $type) {
                        return [
                            'id'   => $type->id,
                            'name' => $type->name,
                        ];
                    }),
                ];
            }),
        ];
    }
}
