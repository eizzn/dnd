<?php

namespace App\Http\Resources;

use App\Models\Rule;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RuleCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Rule $rule) {
                return [
                    'id'          => $rule->id,
                    'key'         => $rule->key,
                    'name'        => $rule->name,
                    'page_id'     => $rule->page_id,
                    'description' => mb_substr(str_replace(["\r", "\n"], '', strip_tags($rule->description)), 0, 100) . '...',
                    'order'       => $rule->order,
                ];
            }),
        ];
    }
}
