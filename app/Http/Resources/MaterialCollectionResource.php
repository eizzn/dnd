<?php

namespace App\Http\Resources;

use App\Models\Material;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MaterialCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Material $material) {
                return [
                    'id'          => $material->id,
                    'name'        => $material->name,
                    'rarity'      => $material->rarity,
                    'type'        => $material->type,
                    'source'      => $material->source,
                    'price'       => $material->price,
                    'description' => mb_substr(str_replace(["\r", "\n"], '', strip_tags($material->description)), 0, 100) . '...',
                ];
            }),
        ];
    }
}
