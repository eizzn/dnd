<?php

namespace App\Http\Resources;

use App\Models\Klass;
use App\Models\Type;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ClassCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Klass $class) {
                return [
                    'id'             => $class->id,
                    'name'           => $class->name,
                    'key_attribute'  => $class->key_attribute,
                    'hit_dice'       => $class->hit_dice,
                    'skill_points'   => $class->skill_points,
                    'skill_progress' => $class->skill_progress,
                    'armors'         => $class->armors,
                    'weapons'        => $class->weapons,
                    'has_spells'     => $class->has_spells,
                    'has_powers'     => $class->has_powers,
                    'description'    => $class->description,
                    'requirements'   => $class->requirements,
                    'max_level'      => $class->max_level,
                    'types'          => $class->types->map(function (Type $type) {
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
