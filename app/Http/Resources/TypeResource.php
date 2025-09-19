<?php

namespace App\Http\Resources;

use App\Models\Type;
use Illuminate\Http\Resources\Json\JsonResource;

class TypeResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Type $this */
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
        ];
    }
}
