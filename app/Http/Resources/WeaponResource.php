<?php

namespace App\Http\Resources;

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
            'damage'       => $this->damage,
            'range'        => $this->range,
            'reload'       => $this->reload,
            'bulk'         => $this->bulk,
            'hands'        => $this->hands,
            'group'        => $this->group,
            'type'         => $this->type,
            'threat_range' => $this->threat_range,
            'description'  => $this->description,
            'types'        => $this->types->map(function (Type $type) {
                return [
                    'id'   => $type->id,
                    'name' => $type->name,
                ];
            }),
        ];
    }
}
