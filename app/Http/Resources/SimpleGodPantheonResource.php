<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SimpleGodPantheonResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'              => $this->god_id,
            'pantheon_id'     => $this->pantheon_id,
            'name'            => $this->name,
            'title'           => $this->title,
            'level'           => $this->level,
            'aliases'         => $this->aliases,
            'portfolio'       => $this->portfolio,
            'alignment'       => $this->alignment,
            'symbol'          => $this->symbol,
            'favored_weapon'  => $this->favored_weapon,
        ];
    }
}
