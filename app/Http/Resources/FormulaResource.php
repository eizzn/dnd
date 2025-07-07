<?php

namespace App\Http\Resources;

use App\Models\Formula;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FormulaResource extends JsonResource
{
    public function toArray(Request $request)
    {
        /** @var Formula $this */
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'type'          => $this->type,
            'level'         => $this->level,
            'rarity'        => $this->rarity,
            'price'         => $this->price,
            'crafting_type' => $this->crafting_time,
            'method'        => $this->method,
            'activation'    => $this->activation,
            'bulk'          => $this->bulk,
            'meta'          => $this->meta,
            'crafting'      => $this->crafting,
            'description'   => $this->description,
            'types'        => $this->types->map(function (Type $type) {
                return [
                    'id'   => $type->id,
                    'name' => $type->name,
                ];
            }),
        ];
    }
}
