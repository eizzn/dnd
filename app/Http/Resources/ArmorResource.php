<?php

namespace App\Http\Resources;

use App\Models\Armor;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Http\Resources\Json\JsonResource;

class ArmorResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Armor $this */
        return [
            'id'               => $this->id,
            'name'             => $this->name,
            'price'            => $this->price,
            'type'             => $this->type,
            'group'            => $this->group,
            'bulk'             => $this->bulk,
            'weight'           => $this->weight,
            'description'      => $this->description,
            'types'            => $this->types->map(function (Type $type) {
                return [
                    'id'          => $type->id,
                    'name'        => $type->name,
                    'description' => $type->description,
                ];
            }),
            'properties'   => $this->properties->map(function (Property $prop) {
                return [
                    'id'          => $prop->id,
                    'name'        => $prop->name,
                    'description' => $prop->description,
                    'value'       => $prop->pivot->value,
                ];
            }),
        ];
    }
}
