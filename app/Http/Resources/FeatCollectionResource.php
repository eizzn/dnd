<?php

namespace App\Http\Resources;

use App\Models\Feat;
use App\Models\Type;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FeatCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Feat $feat) {
                return [
                    'id'                => $feat->id,
                    'name'              => $feat->name,
                    'requirements'      => $feat->requirement,
                    'trigger'           => $feat->trigger,
                    'short_description' => $feat->short_description ?? trim(
                        mb_substr(str_replace(["\r", "\n"], '', strip_tags($feat->description)), 0, 100)) . '...',
                    'types'             => $feat->types->map(function (Type $type) {
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
