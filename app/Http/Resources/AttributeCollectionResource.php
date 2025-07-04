<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AttributeCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Attribute $attr) {
                return [
                    'id'          => $attr->id,
                    'attr'        => $attr->attr,
                    'name'        => $attr->name,
                    'description' => $attr->description,
                ];
            }),
        ];
    }
}
