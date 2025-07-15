<?php

namespace App\Http\Resources;

use App\Models\Race;
use App\Models\SubRace;
use App\Models\Type;
use Illuminate\Http\Resources\Json\JsonResource;

class RaceResource extends JsonResource
{
    public function toArray($request): array
    {
        /** @var Race $this */
        return [
            'id'             => $this->id,
            'name'           => $this->name,
            'age'            => $this->age,
            'hit_points'     => $this->hit_points,
            'size'           => $this->size,
            'speed'          => $this->speed,
            'description'    => $this->description,
            'benefits'       => $this->benefits,
            'types'          => $this->types->map(function (Type $type) {
                return [
                    'id'   => $type->id,
                    'name' => $type->name,
                ];
            }),
            'sub_races'      => $this->sub_races->map(function (SubRace $sub) {
                return [
                    'id'          => $sub->id,
                    'name'        => $sub->name,
                    'description' => $sub->description,
                    'regions'     => $sub->regions,
                    'benefits'    => $sub->benefits,
                ];
            }),
        ];
    }
}
