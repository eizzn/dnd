<?php

namespace App\Http\Resources;

use App\Models\Skill;
use App\Models\Talent;
use App\Models\Type;
use Illuminate\Http\Resources\Json\JsonResource;

class TalentResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Talent $this */
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'action_type' => $this->action_type,
            'requirement' => $this->requirement,
            'trigger'     => $this->trigger,
            'description' => $this->description,
            'types'       => $this->types->map(function (Type $type) {
                return [
                    'id'   => $type->id,
                    'name' => $type->name,
                ];
            }),
            'parent'      => [
                'id'    => $this->parent->id,
                'name'  => $this->parent->name,
            ],
            'children'    => $this->children->map(function (Talent $child) {
                return [
                    'id'   => $child->id,
                    'name' => $child->name,
                ];
            }),
            'skills'      => $this->skills->map(function (Skill $skill) {
                return [
                    'id'   => $skill->id,
                    'name' => $skill->name,
                ];
            }),
        ];
    }
}
