<?php

namespace App\Http\Resources;

use App\Models\Feat;
use App\Models\Power;
use App\Models\Skill;
use App\Models\Spell;
use App\Models\Type;
use Illuminate\Http\Resources\Json\JsonResource;

class FeatResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Feat $this */
        return [
            'id'                => $this->id,
            'name'              => $this->name,
            'requirements'      => $this->requirement,
            'trigger'           => $this->trigger,
            'short_description' => $this->short_description,
            'description'       => $this->description,
            'types'             => $this->types->map(function (Type $type) {
                return [
                    'id'   => $type->id,
                    'name' => $type->name,
                ];
            }),
            'parents'           => $this->parent_feats->map(function (Feat $parent) {
                return [
                    'id'                => $parent->id,
                    'name'              => $parent->name,
                    'short_description' => $parent->short_description ?? trim(
                        mb_substr(str_replace(["\r", "\n"], '', strip_tags($parent->description)), 0, 100)) . '...',
                ];
            }),
            'children'          => $this->child_feats->map(function (Feat $child) {
                return [
                    'id'                => $child->id,
                    'name'              => $child->name,
                    'short_description' => $child->short_description ?? trim(
                        mb_substr(str_replace(["\r", "\n"], '', strip_tags($child->description)), 0, 100)) . '...',
                ];
            }),
            'skills'            => $this->skills->map(function (Skill $skill) {
                return [
                    'id'   => $skill->id,
                    'name' => $skill->name,
                ];
            }),
            'spells'            => $this->spells()
                ->orderByPivot('level')
                ->orderBy('name')
                ->get()
                ->map(function (Spell $spell) {
                    return [
                        'id'    => $spell->id,
                        'name'  => $spell->name,
                        'level' => $spell->pivot->level,
                    ];
                }),
            'powers'            => $this->powers()
                ->orderByPivot('level')
                ->orderBy('name')
                ->get()
                ->map(function (Power $power) {
                    return [
                        'id'    => $power->id,
                        'name'  => $power->name,
                        'level' => $power->pivot->level,
                    ];
                }),
        ];
    }
}
