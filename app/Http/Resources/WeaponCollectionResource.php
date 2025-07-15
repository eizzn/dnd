<?php

namespace App\Http\Resources;

use App\Models\Property;
use App\Models\Type;
use App\Models\Weapon;
use Illuminate\Http\Resources\Json\ResourceCollection;

class WeaponCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Weapon $weapon) {
                return [
                    'id'           => $weapon->id,
                    'name'         => $weapon->name,
                    'price'        => $weapon->price,
                    'bulk'         => $weapon->bulk,
                    'hands'        => $weapon->hands,
                    'group'        => $weapon->group,
                    'type'         => $weapon->type,
                    'description'  => mb_substr(str_replace(["\r", "\n"], '', strip_tags($weapon->description)), 0, 100) . '...',
                    'types'        => $weapon->types->map(function (Type $type) {
                        return [
                            'id'   => $type->id,
                            'name' => $type->name,
                        ];
                    }),
                    'properties'   => $weapon->properties->map(function (Property $prop) {
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
