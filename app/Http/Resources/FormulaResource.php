<?php

namespace App\Http\Resources;

use App\Models\Feat;
use App\Models\Formula;
use App\Models\Material;
use App\Models\Monster;
use App\Models\Skill;
use App\Models\Spell;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FormulaResource extends JsonResource
{
    public function toArray(Request $request)
    {
        /** @var Formula $this */
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'type'          => $this->type,
            'level'         => $this->level,
            'rarity'        => $this->rarity,
            'price'         => $this->price,
            'crafting_type' => $this->crafting_time,
            'method'        => $this->method,
            'activation'    => $this->activation,
            'bulk'          => $this->bulk,
            'meta'          => $this->meta,
            'crafting'      => $this->crafting,
            'description'   => $this->description,
            'types'         => $this->types->map(function (Type $type) {
                return [
                    'id'   => $type->id,
                    'name' => $type->name,
                ];
            }),
            'skills'        => $this->skills->map(function (Skill $skill) {
                return [
                    'id'   => $skill->id,
                    'name' => $skill->name,
                    'dc'   => $skill->pivot->dc,
                    'meta' => $skill->pivot->meta,
                ];
            }),
            'spells'        => $this->spells->map(function (Spell $spell) {
                return [
                    'id'   => $spell->id,
                    'name' => $spell->name,
                    'meta' => $spell->pivot->meta,
                ];
            }),
            'feats'         => $this->feats->map(function (Feat $feat) {
                return [
                    'id'   => $feat->id,
                    'name' => $feat->name,
                    'meta' => $feat->pivot->meta,
                ];
            }),
            'materials'     => $this->materials->map(function (Material $material) {
                return [
                    'id'          => $material->id,
                    'name'        => $material->name,
                    'description' => $material->description,
                    'meta'        => $material->pivot->meta,
                ];
            }),
            'monsters'      => $this->monsters->map(function (Monster $monster) {
                return [
                    'id'   => $monster->id,
                    'name' => $monster->name,
                    'meta' => $monster->pivot->meta,
                ];
            }),
        ];
    }
}
