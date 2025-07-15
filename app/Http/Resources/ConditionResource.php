<?php

namespace App\Http\Resources;

use App\Models\Condition;
use Illuminate\Http\Resources\Json\JsonResource;

class ConditionResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Condition $this */
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
        ];
    }
}
