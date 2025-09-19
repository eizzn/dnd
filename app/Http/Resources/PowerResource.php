<?php

namespace App\Http\Resources;

use App\Models\Feat;
use App\Models\Klass;
use App\Models\Power;
use App\Models\Type;
use Illuminate\Http\Resources\Json\JsonResource;

class PowerResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Power $this */
        return [
            'id'             => $this->id,
            'name'           => $this->name,
            'display'        => $this->display,
            'action_type'    => $this->action_type,
            'requirements'   => $this->requirements,
            'save_attribute' => $this->save_attribute,
            'range'          => $this->range,
            'area'           => $this->area,
            'targets'        => $this->targets,
            'duration'       => $this->duration,
            'description'    => $this->description,
            'saves'          => $this->saves,
            'heightened'     => $this->heightened,
            'default_level'  => $this->default_level,
            'types'          => $this->types->map(function (Type $type) {
                return [
                    'id'   => $type->id,
                    'name' => $type->name,
                ];
            }),
            'parents'        => $this->parents->map(function (Power $parent) {
                return [
                    'id'   => $parent->id,
                    'name' => $parent->name,
                ];
            }),
            'children'       => $this->children->map(function (Power $child) {
                return [
                    'id'   => $child->id,
                    'name' => $child->name,
                ];
            }),
            'classes'        => $this->classes
                ->sortBy('name')
                ->map(function (Klass $class) {
                    return [
                        'id'    => $class->id,
                        'name'  => $class->name,
                        'level' => $class->pivot->level,
                    ];
                }),
            'feats'          => $this->feats
                ->sortBy('name')
                ->map(function (Feat $feat) {
                    return [
                        'id'    => $feat->id,
                        'name'  => $feat->name,
                        'level' => $feat->pivot->level,
                    ];
                }),
        ];
    }
}
