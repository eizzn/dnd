<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use Illuminate\Http\Resources\Json\JsonResource;

class AttributeResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Attribute $this */
        return [
            'id'          => $this->id,
            'attr'        => $this->attr,
            'name'        => $this->name,
            'description' => $this->description,
        ];
    }
}
