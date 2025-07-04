<?php

namespace App\Http\Resources;

use App\Models\Spell;
use App\Models\Type;
use Illuminate\Http\Resources\Json\JsonResource;

class SpellResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Spell $this */
        return [
            'id'             => $this->id,
            'name'           => $this->name,
            'rarity'         => $this->rarity,
            'casting'        => $this->casting,
            'requirements'   => $this->requirements,
            'spell_creator'  => $this->spell_creator,
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
        ];
    }
}
