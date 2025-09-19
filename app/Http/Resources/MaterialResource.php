<?php

namespace App\Http\Resources;

use App\Models\Material;
use Illuminate\Http\Resources\Json\JsonResource;

class MaterialResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Material $this */
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'type'        => $this->type,
            'price'       => $this->price,
            'rarity'      => $this->rarity,
            'source'      => $this->source,
            'alchemy'     => $this->alchemy,
            'armor'       => $this->armor,
            'weapon'      => $this->weapon,
            'other'       => $this->other,
            'description' => $this->description,
        ];
    }
}
