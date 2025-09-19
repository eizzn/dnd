<?php

namespace App\Http\Resources;

use App\Models\Type;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TypeCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Type $type) {
                return [
                    'id'          => $type->id,
                    'name'        => $type->name,
                    'description' => mb_substr(str_replace(["\r", "\n"], '', strip_tags($type->description)), 0, 100) . '...',
                ];
            }),
        ];
    }
}
