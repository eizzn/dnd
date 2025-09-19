<?php

namespace App\Http\Resources;

use App\Models\Feature;
use App\Models\Klass;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Http\Resources\Json\JsonResource;

class FeatureResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Feature $this */
        return [
            'id'               => $this->id,
            'key'              => $this->key,
            'name'             => $this->name,
            'description'      => $this->description,
            'types'            => $this->types->map(function (Type $type) {
                return [
                    'id'   => $type->id,
                    'name' => $type->name,
                ];
            }),
            'properties'   => $this->properties->map(function (Property $prop) {
                return [
                    'id'          => $prop->id,
                    'name'        => $prop->name,
                    'description' => $prop->description,
                    'value'       => $prop->pivot->value,
                ];
            }),
            'classes'      => $this->classes()->select([
                'classes.id', 'classes.name',
                'featureables.feature_id', 'featureables.featureable_id', 'featureables.featureable_type',
                'featureables.meta',
            ])->groupBy([
                'classes.id', 'classes.name',
                'featureables.feature_id', 'featureables.featureable_id', 'featureables.featureable_type',
                'featureables.meta',
            ])->get()->map(function (Klass $class) {
                return [
                    'id'   => $class->id,
                    'name' => $class->name,
                    'meta' => $class->pivot->meta,
                ];
            }),
        ];
    }
}
