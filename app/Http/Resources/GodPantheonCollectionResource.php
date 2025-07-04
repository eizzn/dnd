<?php

namespace App\Http\Resources;

use App\Models\GodPantheon;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GodPantheonCollectionResource extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function (GodPantheon $god) {
                return [
                    'id'             => $god->god_id,
                    'pantheon'       => [
                        'id'    => $god->pantheon_id,
                        'name'  => $god->pantheon->name,
                    ],
                    'name'           => $god->name,
                    'title'          => $god->title,
                    'level'          => $god->level,
                    'aliases'        => $god->aliases,
                    'portfolio'      => $god->portfolio,
                    'alignment'      => $god->alignment,
                    'symbol'         => $god->symbol,
                    'favored_weapon' => $god->favored_weapon,
                    'regions'        => $god->regions,
                    'master_id'      => $god->master_id,
                ];
            }),
        ];
    }
}
