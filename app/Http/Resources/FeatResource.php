<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\Feat;
use App\Models\Feature;
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
            'action_type'       => $this->action_type,
            'types'             => $this->types->map(function (Type $type) {
                return [
                    'id'    => $type->id,
                    'name'  => $type->name,
                    'level' => $type->pivot->level,
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
            'attributes'        => $this->attributes->map(function (Attribute $attribute) {
                return [
                    'id'   => $attribute->id,
                    'name' => $attribute->name,
                    'attr' => $attribute->attr,
                    'dc'   => $attribute->pivot->dc,
                ];
            }),
            'features'          => $this->features->map(function (Feature $feature) {
                return [
                    'id'    => $feature->id,
                    'name'  => $feature->name,
                ];
            }),
            'skills'            => $this->skills->map(function (Skill $skill) {
                return [
                    'id'   => $skill->id,
                    'name' => $skill->name,
                    'dc'   => $skill->pivot->dc,
                ];
            }),
            'spells'            => $this->spells
                ->groupBy('pivot.level')
                ->sortKeys()
                ->sortBy('name')
                ->mapWithKeys(function ($spells, $level) {
                    return [
                        $level => $spells->map(function (Spell $spell) {
                            return [
                                'id'    => $spell->id,
                                'name'  => $spell->name,
                                'level' => $spell->pivot->level,
                            ];
                        })->values(),
                    ];
                }),
            'powers'            => $this->powers
                ->groupBy('pivot.level')
                ->sortKeys()
                ->sortBy('name')
                ->mapWithKeys(function ($powers, $level) {
                    return [
                        $level => $powers->map(function (Power $power) {
                            return [
                                'id'    => $power->id,
                                'name'  => $power->name,
                                'level' => $power->pivot->level,
                            ];
                        })->values(),
                    ];
                }),
        ];
    }
}
