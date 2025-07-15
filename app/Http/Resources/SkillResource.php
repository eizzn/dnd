<?php

namespace App\Http\Resources;

use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        /** @var Skill $this */
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'description'   => $this->description,
            'attribute'     => [
                'id'   => $this->attribute->id,
                'name' => $this->attribute->name,
            ],
            'untrained_uses' => $this->untrained_uses,
            'trained_uses'   => $this->trained_uses,
            'armor_penalty'  => $this->armor_penalty,
            'specified'      => $this->specified,
            'sub_skills'     => $this->sub_skills->map(function (SubSkill $sub) {
                return [
                    'id'               => $sub->id,
                    'name'             => $sub->name,
                    'action_type'      => $sub->action_type,
                    'trigger'          => $sub->trigger,
                    'requirements'     => $sub->requirements,
                    'description'      => $sub->description,
                    'critical_success' => $sub->critical_success,
                    'success'          => $sub->success,
                    'failure'          => $sub->failure,
                    'critical_failure' => $sub->critical_failure,
                    'trained_only'     => $sub->trained_only,
                ];
            }),
        ];
    }
}
