<?php

namespace App\Http\Resources;

use App\Models\Feature;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FeatureCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Feature $feature) {
                return [
                    'id'               => $feature->id,
                    'key'              => $feature->key,
                    'name'             => $feature->name,
                    'description'      => mb_substr(str_replace(["\r", "\n"], '', strip_tags($feature->description)), 0, 100) . '...',
                    'types'            => $feature->types->map(function (Type $type) {
                        return [
                            'id'   => $type->id,
                            'name' => $type->name,
                        ];
                    }),
                    'properties'   => $feature->properties->map(function (Property $prop) {
                        return [
                            'id'          => $prop->id,
                            'name'        => $prop->name,
                            'description' => $prop->description,
                            'value'       => $prop->pivot->value,
                        ];
                    }),
                ];
            }),
        ];
    }
}
