<?php

namespace App\Http\Resources;

use App\Models\Skill;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SkillCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Skill $skill) {
                return [
                    'id'             => $skill->id,
                    'name'           => $skill->name,
                    'description'    => mb_substr(str_replace(["\r", "\n"], '', strip_tags($skill->description)), 0, 100) . '...',
                    'attribute'      => [
                        'id'   => $skill->attribute->id,
                        'name' => $skill->attribute->name,
                    ],
                    'untrained_uses' => $skill->untrained_uses,
                    'trained_uses'   => $skill->trained_uses,
                    'armor_penalty'  => $skill->armor_penalty,
                    'specified'      => $skill->specified,
                ];
            }),
        ];
    }
}
