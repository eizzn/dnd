<?php

namespace App\Http\Resources;

use App\Models\Armor;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ArmorCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Armor $armor) {
                return [
                    'id'               => $armor->id,
                    'name'             => $armor->name,
                    'price'            => $armor->price,
                    'type'             => $armor->type,
                    'group'            => $armor->group,
                    'bulk'             => $armor->bulk,
                    'weight'           => $armor->weight,
                    'description'      => mb_substr(str_replace(["\r", "\n"], '', strip_tags($armor->description)), 0, 100) . '...',
                    'types'            => $armor->types->map(function (Type $type) {
                        return [
                            'id'   => $type->id,
                            'name' => $type->name,
                        ];
                    }),
                    'properties'   => $armor->properties->map(function (Property $prop) {
                        return [
                            'id'          => $prop->id,
                            'name'        => $prop->name,
                            'description' => $prop->description,
                            'value'       => $prop->pivot->value,
                        ];
                    }),
                ];
            }),
        ];
    }
}
