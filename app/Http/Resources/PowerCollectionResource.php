<?php

namespace App\Http\Resources;

use App\Models\Power;
use App\Models\Type;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PowerCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Power $power) {
                return [
                    'id'             => $power->id,
                    'name'           => $power->name,
                    'save_attribute' => $power->save_attribute,
                    'requirements'   => $power->requirements,
                    'display'        => $power->display,
                    'action_type'    => $power->action_type,
                    'range'          => $power->range,
                    'targets'        => $power->targets,
                    'duration'       => $power->duration,
                    'default_level'  => $power->default_level,
                    'types'          => $power->types->map(function (Type $type) {
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
