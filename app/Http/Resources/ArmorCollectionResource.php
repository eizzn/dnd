<?php

namespace App\Http\Resources;

use App\Models\Armor;
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
                    'armor_bonus'      => $armor->armor_bonus,
                    'damage_reduction' => $armor->damage_reduction,
                    'dex_modifier_cap' => $armor->dex_modifier_cap,
                    'check_penalty'    => $armor->check_penalty,
                    'spell_failure'    => $armor->spell_failure,
                    'min_str'          => $armor->min_str,
                    'bulk'             => $armor->bulk,
                    'weight'           => $armor->weight,
                    'description'      => mb_substr(str_replace(["\r", "\n"], '', strip_tags($armor->description)), 0, 100) . '...',
                    'types'            => $armor->types->map(function (Type $type) {
                        return [
                            'id'   => $type->id,
                            'name' => $type->name,
                        ];
                    }),
                ];
            }),
        ];
    }
}
