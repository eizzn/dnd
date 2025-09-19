<?php

namespace App\Http\Resources;

use App\Models\Rule;
use Illuminate\Http\Resources\Json\JsonResource;

class RuleResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Rule $this */
        return [
            'id'          => $this->id,
            'key'         => $this->key,
            'name'        => $this->name,
            'page_id'     => $this->page_id,
            'description' => $this->description,
            'order'       => $this->order,
        ];
    }
}
