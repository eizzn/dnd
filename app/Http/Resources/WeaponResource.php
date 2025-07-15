<?php

namespace App\Http\Resources;

use App\Models\Property;
use App\Models\Type;
use App\Models\Weapon;
use Illuminate\Http\Resources\Json\JsonResource;

class WeaponResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Weapon $this */
        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'price'        => $this->price,
            'bulk'         => $this->bulk,
            'hands'        => $this->hands,
            'group'        => $this->group,
            'type'         => $this->type,
            'description'  => $this->description,
            'types'        => $this->types->map(function (Type $type) {
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
