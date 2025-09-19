<?php

namespace App\Http\Resources;

use App\Models\Page;
use App\Models\Rule;
use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Page $this */
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
            'order'       => $this->order,
            'rules'       => $this->rules()->orderBy('order')->get()->map(function (Rule $rule) {
                return new RuleResource($rule);
            }),
        ];
    }
}
