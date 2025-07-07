<?php

namespace App\Http\Resources;

use App\Models\Armor;
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
            'armor_bonus'      => $this->armor_bonus,
            'damage_reduction' => $this->damage_reduction,
            'dex_modifier_cap' => $this->dex_modifier_cap,
            'check_penalty'    => $this->check_penalty,
            'spell_failure'    => $this->spell_failure,
            'min_str'          => $this->min_str,
            'bulk'             => $this->bulk,
            'weight'           => $this->weight,
            'description'      => $this->description,
            'types'            => $this->types->map(function (Type $type) {
                return [
                    'id'   => $type->id,
                    'name' => $type->name,
                ];
            }),
        ];
    }
}
