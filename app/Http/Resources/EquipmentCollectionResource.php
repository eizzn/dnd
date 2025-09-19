<?php

namespace App\Http\Resources;

use App\Models\Equipment;
use Illuminate\Http\Resources\Json\ResourceCollection;

class EquipmentCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Equipment $equip) {
                return [
                    'id'          => $equip->id,
                    'name'        => $equip->name,
                    'description' => mb_substr(str_replace(["\r", "\n"], '', strip_tags($equip->description)), 0, 100) . '...',
                ];
            }),
        ];
    }
}
