<?php

namespace App\Http\Resources;

use App\Models\Talent;
use App\Models\Type;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TalentCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Talent $talent) {
                return [
                    'id'          => $talent->id,
                    'name'        => $talent->name,
                    'action_type' => $talent->action_type,
                    'requirement' => $talent->requirement,
                    'trigger'     => $talent->trigger,
                    'description' => trim(mb_substr(str_replace(["\r", "\n"], '', strip_tags($talent->description)), 0, 100)) . '...',
                    'types'       => $talent->types->map(function (Type $type) {
                        return [
                            'id'   => $type->id,
                            'name' => $type->name,
                        ];
                    }),
                ];
            }),
        ];
    }
}
