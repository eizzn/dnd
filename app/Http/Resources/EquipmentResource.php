<?php

namespace App\Http\Resources;

use App\Models\Equipment;
use App\Models\Type;
use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Equipment $this */
        /** @var Equipment $parent */
        $parent = $this->parent_id ? Equipment::find($this->parent_id) : null;

        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'price'       => $this->price,
            'bulk'        => $this->bulk,
            'hands'       => $this->hands,
            'description' => $this->description,
            'parent'      => $parent ? [
                'id'   => $parent->id,
                'name' => $parent->name,
            ] : null,
            'children'    => Equipment::where('parent_id', $this->id)->get()->map(function (Equipment $child) {
                return [
                    'id'   => $child->id,
                    'name' => $child->name,
                ];
            }),
            'types'       => $this->types->map(function (Type $type) {
                return [
                    'id'   => $type->id,
                    'name' => $type->name,
                ];
            }),
        ];
    }
}
