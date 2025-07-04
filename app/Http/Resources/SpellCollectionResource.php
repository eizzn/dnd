<?php

namespace App\Http\Resources;

use App\Models\Spell;
use App\Models\Type;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SpellCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (Spell $spell) {
                return [
                    'id'             => $spell->id,
                    'name'           => $spell->name,
                    'rarity'         => $spell->rarity,
                    'save_attribute' => $spell->save_attribute,
                    'requirements'   => $spell->requirements,
                    'casting'        => $spell->casting,
                    'range'          => $spell->range,
                    'area'           => $spell->area,
                    'targets'        => $spell->targets,
                    'duration'       => $spell->duration,
                    'default_level'  => $spell->default_level,
                    'types'          => $spell->types->map(function (Type $type) {
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
