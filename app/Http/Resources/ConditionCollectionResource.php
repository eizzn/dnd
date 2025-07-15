<?php

namespace App\Http\Resources;

use App\Models\Condition;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ConditionCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Condition $cond) {
                return [
                    'id'          => $cond->id,
                    'name'        => $cond->name,
                    'description' => mb_substr(str_replace(["\r", "\n"], '', strip_tags($cond->description)), 0, 100) . '...',
                ];
            }),
        ];
    }
}
