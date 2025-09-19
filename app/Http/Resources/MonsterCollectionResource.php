<?php

namespace App\Http\Resources;

use App\Models\Monster;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MonsterCollectionResource extends ResourceCollection
{
    public function toArray(Request $request)
    {
        return [
            'data' => $this->collection->map(function (Monster $monster) {
                return [
                    'id'          => $monster->id,
                    'name'        => $monster->name,
                    'size'        => $monster->size,
                    'type'        => $monster->type,
                    'alignment'   => $monster->alignment,
                    'hit_dice'    => $monster->hit_dice,
                    'hit_points'  => $monster->hit_points,
                    'cr'          => $monster->cr,
                    'description' => mb_substr(str_replace(["\r", "\n"], '', strip_tags($monster->description)), 0, 100) . '...',
                    'types'       => $monster->types->map(function (Type $type) {
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
