<?php

namespace App\Http\Resources;

use App\Models\Race;
use App\Models\Type;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RaceCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Race $race) {
                return [
                    'id'             => $race->id,
                    'name'           => $race->name,
                    'size'           => $race->size,
                    'speed'          => $race->speed,
                    'types'          => $race->types->map(function (Type $type) {
                        return [
                            'id'   => $type->id,
                            'name' => $type->name,
                        ];
                    }),
                    'description' => mb_substr(str_replace(["\r", "\n"], '', strip_tags($race->description)), 0, 100) . '...',
                ];
            }),
        ];
    }
}
